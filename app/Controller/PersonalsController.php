<?php
App::uses('AppController', 'Controller');
/**
 * Personals Controller
 *
 * @property Personal $Personal
 * @property PaginatorComponent $Paginator
 * @property FlashComponent $Flash
 * @property SessionComponent $Session
 */
class PersonalsController extends AppController {

/**
 * Components
 *
 * @var array
 */
 public $helpers = array('Html','Form','Time','Js');
 public $components = array('Paginator', 'Session','RequestHandler');
 public $paginate = array (
		 'limit' => 5,
		 'order' => array('Personal.name' => 'asc')
		 );

/**
 * index method
 *
 * @return void
 */
	public function index() {
		$this->Personal->recursive = 0;
		$this->Paginator->settings = $this->paginate;
			$this->set('personals', $this->paginate());
	}

/**
 * view method
 *
 * @throws NotFoundException
 * @param string $id
 * @return void
 */
	public function view($id = null) {
		if (!$this->Personal->exists($id)) {
			throw new NotFoundException(__('Error Intente de Nuevo'));
		}
		$options = array('conditions' => array('Personal.' . $this->Personal->primaryKey => $id));
    $this->pdfConfig = array(
    	'download' => true,
    	'filename' => 'personal.pdf'
    );
    $this->set('personal', $this->Personal->find('first', $options));
	}

/**
 * add method
 *
 * @return void
 */
	public function add() {
		if ($this->request->is('post')) {
			$this->Personal->create();
			if ($this->Personal->save($this->request->data)) {

				$this->Flash->success(__('El Empleado ha sido Registrado.'));
				return $this->redirect(array('action' => 'index'));
			} else {
				$this->Flash->error(__('El Empleado no ha sido Registrado. Por favor, Intente de Nuevo.'));

			}
		}
		$positions = $this->Personal->Position->find('list');
		$this->set(compact('positions'));
	}

/**
 * edit method
 *
 * @throws NotFoundException
 * @param string $id
 * @return void
 */
	public function edit($id = null) {
		if (!$this->Personal->exists($id)) {
			throw new NotFoundException(__('Error Intente de Nuevo'));
		}
		if ($this->request->is(array('post', 'put'))) {
			if ($this->Personal->save($this->request->data)) {

				$this->Flash->success(__('El empleado ha sido Actualizado con exito.'));
				return $this->redirect(array('action' => 'index'));
			} else {
				$this->Flash->error(__('El empleado no pudo ser Actualizado. Por favor, intente de nuevo.'));

			}
		} else {
			$options = array('conditions' => array('Personal.' . $this->Personal->primaryKey => $id));
			$this->request->data = $this->Personal->find('first', $options);
		}
		$positions = $this->Personal->Position->find('list');
		$this->set(compact('positions'));
	}

/**
 * delete method
 *
 * @throws NotFoundException
 * @param string $id
 * @return void
 */
	public function delete($id = null) {
		$this->Personal->id = $id;
		if (!$this->Personal->exists()) {
			throw new NotFoundException(__('Error Intente de Nuevo'));
		}
		$this->request->allowMethod('post', 'delete');
		if ($this->Personal->delete()) {

			$this->Flash->success(__('El Empleado ha sido Eliminado.'));
		} else {
			$this->Flash->error(__('EL Personal no ha sido Eliminado. Por favor, intente de nuevo.'));

		}
		return $this->redirect(array('action' => 'index'));
	}
}
