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
 */	public $helpers = array('Html','Form','Time','Js');
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
	$this->Wake->recursive = 0;
	$this->pdfConfig = array(
	 'download' => true,
	 'filename' => 'Lista_'.$id.'.pdf',
		);
	$this->Paginator->settings = $this->paginate = array('limit' => 6);
	 $this->set('wake', $this->paginate('Wake'));
 }

	public function index() {
		$this->Wake->recursive = 0;

		$this->Paginator->settings = $this->paginate;
			$this->set('wakes', $this->paginate());
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
		$this->pdfConfig = array(
    	'download' => true,
    	'filename' => 'wake'.$id.'.pdf'
    );
		$this->set('wake', $this->Wake->find('first', $options));
	}



public function getCargoByPersonal() {
 if ($this->request->is('ajax')) {
  $idPersonal = $this->params['data']['idPersonal'];

$servidor = "localhost";
$usuar = "root";
$contrase = "";
$bd = "arte_cristal";

$conexion = mysql_connect($servidor,$usuar,$contrase) or die ("No se puede establecer la conexion");
$base = mysql_select_db($bd) or die ("No se puede conectar a la Base de Datos");
$query= mysql_query("SELECT * FROM personals WHERE id = \"". mysql_real_escape_string($idPersonal) ."\"");

$filas = mysql_fetch_array($query);
                    if (mysql_num_rows($query) > 0)
                    {
                        $idposition = $filas['position_id'];
                    }


  /*$cargo = new Cargo();
  $id_cargo = $this->Wake->Personal->find('all',array(
   'fields' => array('Personal.idcargo',),
   'conditions'=>array('Personal.idpersonal'=>$idPersonal)));*/



  $cargo = $this->Wake->Position->find('all',array(
   'fields' => array('Position.idposition','Position.cargo','Position.salario','Position.horast','Position.vhora'),
   'conditions'=>array('Position.idposition'=>$idposition)));


  $this->RequestHandler->respondAs('json');
  $this->autoRender = false;
   echo json_encode ( $cargo );
 }
}

/*
   $this->Js->get('#personal')->event('change', $this->Js->request(array(
            'controller' => 'wakes',
            'action' => 'funajax'
                ), array(
            'update' => '#vhoras',
            'evalScripts' => true,
            'async' => true,
            'method' => 'post',
            'dataExpression' => true,
            'data' => $this->Js->serializeForm(array('isForm' => true, 'inline' => true))
        ))
);

function funajax(){
        $this->autoRender = false; // No renderiza mediate el fichero .ctp
        if($this->request->is('ajax')){ // Comprobar si es una petición ajax

            $nombre = $this->request->data['Wake']['personal_id'];

            echo "Este es el Nombre ".$nombre;

        }
    }*/



/**
 * add method
 *
 * @return void
 */
	public function add() {
		if ($this->request->is('post')) {
			$this->Wake->create();
			if ($this->Wake->save($this->request->data)) {
				$this->Session->setFlash(__('Salario registrado con exito.'), 'alert-box', array('class'=>'alert-success'));
				return $this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('El salario no pudo ser registrado. Por favor, intente de nuevo.'),'alert-box', array('class'=>'alert-danger'));
			}
		}
		//$personals = $this->Wake->Personal->find('list');
		$personals = $this->Wake->Personal->find('list', [
			'conditions'=>array('Personal.status'=>'Activo'),
		           'recursive' => 0,
		           'fields' => [
               'Personal.id',
               'Personal.full_name'
          ]]);
		$this->set(compact('personals'));
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
				$this->Session->setFlash(__('Salario actualizado con exito.'), 'alert-box', array('class'=>'alert-info'));
				return $this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('El salario no pudo ser actualizado. Por favor, intente de nuevo.'),'alert-box', array('class'=>'alert-danger'));
				}
		} else {
			$options = array('conditions' => array('Wake.' . $this->Wake->primaryKey => $id));
			$this->request->data = $this->Wake->find('first', $options);
		}
		$personals = $this->Wake->Personal->find('list', [
			'conditions'=>array('Personal.status'=>'Activo'),
		           'recursive' => 0,
		           'fields' => [
               'Personal.id',
               'Personal.full_name'
          ]]);
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
			$this->Session->setFlash(__('Salario eliminado con exito.'), 'alert-box', array('class'=>'alert-warning'));
		} else {
			$this->Session->setFlash(__('El salario no pudo ser eliminado. Por favor, intente de nuevo.'),'alert-box', array('class'=>'alert-danger'));

		}
		return $this->redirect(array('action' => 'index'));
	}
}
