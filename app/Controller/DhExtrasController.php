<?php
App::uses('AppController', 'Controller');
/**
 * DhExtras Controller
 *
 * @property DhExtra $DhExtra
 * @property PaginatorComponent $Paginator
 * @property FlashComponent $Flash
 * @property SessionComponent $Session
 */
class DhExtrasController extends AppController {

/**
 * Components
 *
 * @var array
 */
 public $helpers = array('Html','Form','Time','Js');
 public $components = array('Paginator', 'Session','RequestHandler');
 public $paginate = array (
		'limit' => 5,
		'order' => array('dhExtras.personal_id' => 'asc')
		);

/**
 * index method
 *
 * @return void
 */
	public function index() {
		$this->DhExtra->recursive = 0;
		$this->Paginator->settings = $this->paginate;
			$this->set('dhExtras', $this->paginate());
	}

/**
 * view method
 *
 * @throws NotFoundException
 * @param string $id
 * @return void
 */
	public function view($id = null) {
		if (!$this->DhExtra->exists($id)) {
			throw new NotFoundException(__('Error Intente de Nuevo'));
		}
		$options = array('conditions' => array('DhExtra.' . $this->DhExtra->primaryKey => $id));
		$this->set('dhExtra', $this->DhExtra->find('first', $options));
	}

/**
 * add method
 *
 * @return void
 */
	public function add() {
		if ($this->request->is('post')) {
			$this->DhExtra->create();
			if ($this->DhExtra->save($this->request->data)) {
				$this->Flash->success(__('El Bono ha sido Guardado.'));
				return $this->redirect(array('action' => 'index'));
			} else {
				$this->Flash->error(__('El Bono no ha sido Guardado. Por favor, Intente de Nuevo.'));
			}
		}
		$personals = $this->DhExtra->Personal->find('list');
		$positions = $this->DhExtra->Position->find('list');
		$this->set(compact('personals', 'positions'));
	}

/**
 * edit method
 *
 * @throws NotFoundException
 * @param string $id
 * @return void
 */
	public function edit($id = null) {
		if (!$this->DhExtra->exists($id)) {
			throw new NotFoundException(__('Error Intente de Nuevo'));
		}
		if ($this->request->is(array('post', 'put'))) {
			if ($this->DhExtra->save($this->request->data)) {
				$this->Flash->success(__('El Bono ha sido Modificado.'));
				return $this->redirect(array('action' => 'index'));
			} else {
				$this->Flash->error(__('El Bono no ha sido Modificado. Por favor, Intente de Nuevo.'));
			}
		} else {
			$options = array('conditions' => array('DhExtra.' . $this->DhExtra->primaryKey => $id));
			$this->request->data = $this->DhExtra->find('first', $options);
		}
		$personals = $this->DhExtra->Personal->find('list');
		$positions = $this->DhExtra->Position->find('list');
		$this->set(compact('personals', 'positions'));
	}

/**
 * delete method
 *
 * @throws NotFoundException
 * @param string $id
 * @return void
 */
	public function delete($id = null) {
		$this->DhExtra->id = $id;
		if (!$this->DhExtra->exists()) {
			throw new NotFoundException(__('Error Intente de Nuevo'));
		}
		$this->request->allowMethod('post', 'delete');
		if ($this->DhExtra->delete()) {
			$this->Flash->success(__('El Bono ha sido Eliminado.'));
		} else {
			$this->Flash->error(__('El Bono no ha sido Eliminado. Por favor, Intente de Nuevo.'));
		}
		return $this->redirect(array('action' => 'index'));
	}
}
