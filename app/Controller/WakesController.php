<?php
App::uses('AppController', 'Controller');
/**
 * Wakes Controller
 *
 * @property Wake $Wake
 * @property PaginatorComponent $Paginator
 * @property FlashComponent $Flash
 * @property SessionComponent $Session
 */
class WakesController extends AppController {

/**
 * Components
 *
 * @var array
 */
	public $components = array('Paginator', 'Flash', 'Session');

/**
 * index method
 *
 * @return void
 */
	public function index() {
		$this->Wake->recursive = 0;
		$this->set('wakes', $this->Paginator->paginate());
	}

/**
 * view method
 *
 * @throws NotFoundException
 * @param string $id
 * @return void
 */
	public function view($id = null) {
		if (!$this->Wake->exists($id)) {
			throw new NotFoundException(__('Error Intente de Nuevo'));
		}
		$options = array('conditions' => array('Wake.' . $this->Wake->primaryKey => $id));
		$this->set('wake', $this->Wake->find('first', $options));
	}

/**
 * add method
 *
 * @return void
 */
	public function add() {
		if ($this->request->is('post')) {
			$this->Wake->create();
			if ($this->Wake->save($this->request->data)) {
				$this->Flash->success(__('El salario ha sido Guardado.'));
				return $this->redirect(array('action' => 'index'));
			} else {
				$this->Flash->error(__('El salario no pudo ser Guardado. Intente de nuevo'));
			}
		}
		$personals = $this->Wake->Personal->find('list');
		$positions = $this->Wake->Position->find('list', [
		           'recursive' => 0,
		           'fields' => [
               'Position.cargo'
          ]
        ]);
        $salarios = $this->Wake->Position->find('list', [
		           'recursive' => 0,
		           'fields' => [
               'Position.salario'
          ]
        ]);
		$this->set(compact('personals', 'positions','salarios'));
	}

/**
 * edit method
 *
 * @throws NotFoundException
 * @param string $id
 * @return void
 */
	public function edit($id = null) {
		if (!$this->Wake->exists($id)) {
			throw new NotFoundException(__('Error, Salario Invalido Por Favor Intente de Nuevo'));
		}
		if ($this->request->is(array('post', 'put'))) {
			if ($this->Wake->save($this->request->data)) {
				$this->Flash->success(__('El salario ha sido Actualizado con exito.'));
				return $this->redirect(array('action' => 'index'));
			} else {
				$this->Flash->error(__('El salario no ha sido Actualizado. Por favor Intente de Nuevo.'));
			}
		} else {
			$options = array('conditions' => array('Wake.' . $this->Wake->primaryKey => $id));
			$this->request->data = $this->Wake->find('first', $options);
		}
		$personals = $this->Wake->Personal->find('list');
		$positions = $this->Wake->Position->find('list');
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
		$this->Wake->id = $id;
		if (!$this->Wake->exists()) {
			throw new NotFoundException(__('Error, Salario Invalido Por Favor Intente de Nuevo'));
		}
		$this->request->allowMethod('post', 'delete');
		if ($this->Wake->delete()) {
			$this->Flash->success(__('El salario a sido eliminado.'));
		} else {
			$this->Flash->error(__('El Salario no fue borrado. Por favor intente de nuevo.'));
		}
		return $this->redirect(array('action' => 'index'));
	}
}
