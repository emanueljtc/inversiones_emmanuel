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
			throw new NotFoundException(__('Invalid wake'));
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
				$this->Flash->success(__('The wake has been saved.'));
				return $this->redirect(array('action' => 'index'));
			} else {
				$this->Flash->error(__('The wake could not be saved. Please, try again.'));
			}
		}
		$personals = $this->Wake->Personal->find('list');
		$positions = $this->Wake->Position->find('list');
		$dhExtras = $this->Wake->DhExtra->find('list');
		$this->set(compact('personals', 'positions', 'dhExtras'));
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
			throw new NotFoundException(__('Invalid wake'));
		}
		if ($this->request->is(array('post', 'put'))) {
			if ($this->Wake->save($this->request->data)) {
				$this->Flash->success(__('The wake has been saved.'));
				return $this->redirect(array('action' => 'index'));
			} else {
				$this->Flash->error(__('The wake could not be saved. Please, try again.'));
			}
		} else {
			$options = array('conditions' => array('Wake.' . $this->Wake->primaryKey => $id));
			$this->request->data = $this->Wake->find('first', $options);
		}
		$personals = $this->Wake->Personal->find('list');
		$positions = $this->Wake->Position->find('list');
		$dhExtras = $this->Wake->DhExtra->find('list');
		$this->set(compact('personals', 'positions', 'dhExtras'));
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
			throw new NotFoundException(__('Invalid wake'));
		}
		$this->request->allowMethod('post', 'delete');
		if ($this->Wake->delete()) {
			$this->Flash->success(__('The wake has been deleted.'));
		} else {
			$this->Flash->error(__('The wake could not be deleted. Please, try again.'));
		}
		return $this->redirect(array('action' => 'index'));
	}
}
