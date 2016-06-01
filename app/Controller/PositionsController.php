<?php
App::uses('AppController', 'Controller');
/**
 * Positions Controller
 *
 * @property Position $Position
 * @property PaginatorComponent $Paginator
 * @property FlashComponent $Flash
 * @property SessionComponent $Session
 */
class PositionsController extends AppController {

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
 public function lista_pdf($id = null){
	 $this->Position->recursive = 0;
	 $this->pdfConfig = array(
		'download' => true,
		'filename' => 'position'.$id.'.pdf',
		 );
	 $this->Paginator->settings = $this->paginate = array('limit' => 6);
		$this->set('position', $this->paginate('Position'));
 }
	public function index() {
		$this->Position->recursive = 0;
		$this->set('positions', $this->Paginator->paginate());
	}

/**
 * view method
 *
 * @throws NotFoundException
 * @param string $id
 * @return void
 */
	public function view($id = null) {
		if (!$this->Position->exists($id)) {
			throw new NotFoundException(__('Error Intente de Nuevo'));
		}
		$options = array('conditions' => array('Position.' . $this->Position->primaryKey => $id));
		$this->pdfConfig = array(
    	'download' => true,
    	'filename' => 'position'.$id.'.pdf'
    );
		$this->set('position', $this->Position->find('first', $options));
	}

/**
 * add method
 *
 * @return void
 */
	public function add() {
		if ($this->request->is('post')) {
			$this->Position->create();
			if ($this->Position->save($this->request->data)) {
				$this->Session->setFlash(__('Cargo registrado con exito.'), 'alert-box', array('class'=>'alert-success'));
				return $this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('El cargo no pudo ser registrado. Por favor, intente de nuevo.'),'alert-box', array('class'=>'alert-danger'));
			}
		}
	}

/**
 * edit method
 *
 * @throws NotFoundException
 * @param string $id
 * @return void
 */
	public function edit($id = null) {
		if (!$this->Position->exists($id)) {
			throw new NotFoundException(__('Error Intente de Nuevo'));
		}
		if ($this->request->is(array('post', 'put'))) {
			if ($this->Position->save($this->request->data)) {
				$this->Session->setFlash(__('Cargo actualizado con exito.'), 'alert-box', array('class'=>'alert-info'));
				return $this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('El cargo no pudo ser actualizado. Por favor, intente de nuevo.'),'alert-box', array('class'=>'alert-danger'));

			}
		} else {
			$options = array('conditions' => array('Position.' . $this->Position->primaryKey => $id));
			$this->request->data = $this->Position->find('first', $options);
		}
	}

/**
 * delete method
 *
 * @throws NotFoundException
 * @param string $id
 * @return void
 */
	public function delete($id = null) {
		$this->Position->id = $id;
		if (!$this->Position->exists()) {
			throw new NotFoundException(__('Invalid position'));
		}
		$this->request->allowMethod('post', 'delete');
		if ($this->Position->delete()) {
			$this->Session->setFlash(__('Cargo eliminado con exito.'), 'alert-box', array('class'=>'alert-warning'));
		} else {
			$this->Session->setFlash(__('El cargo no pudo ser eliminado. Por favor, intente de nuevo.'),'alert-box', array('class'=>'alert-danger'));

		}
		return $this->redirect(array('action' => 'index'));
	}
}
