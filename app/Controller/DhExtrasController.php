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
	public $components = array('Paginator', 'Flash', 'Session');

/**
 * index method
 *
 * @return void
 */
	public function index() {
		$this->DhExtra->recursive = 0;
		$this->set('dhExtras', $this->Paginator->paginate());
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
			throw new NotFoundException(__('Invalid dh extra'));
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
				$this->Flash->success(__('The dh extra has been saved.'));
				return $this->redirect(array('action' => 'index'));
			} else {
				$this->Flash->error(__('The dh extra could not be saved. Please, try again.'));
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
			throw new NotFoundException(__('Invalid dh extra'));
		}
		if ($this->request->is(array('post', 'put'))) {
			if ($this->DhExtra->save($this->request->data)) {
				$this->Flash->success(__('The dh extra has been saved.'));
				return $this->redirect(array('action' => 'index'));
			} else {
				$this->Flash->error(__('The dh extra could not be saved. Please, try again.'));
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
			throw new NotFoundException(__('Invalid dh extra'));
		}
		$this->request->allowMethod('post', 'delete');
		if ($this->DhExtra->delete()) {
			$this->Flash->success(__('The dh extra has been deleted.'));
		} else {
			$this->Flash->error(__('The dh extra could not be deleted. Please, try again.'));
		}
		return $this->redirect(array('action' => 'index'));
	}
}
