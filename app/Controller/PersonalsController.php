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
		 'order' => array('Personal.name' => 'asc'),
     //'conditions'=>array('Personal.status'=>'Activo'),
		 );




/**
 * index method
 *
 * @return void
 */

   public function lista_pdf($id = null){
     $this->Personal->recursive = 0;
     $this->pdfConfig = array(
     	//'download' => true,
      //'orientation' => 'portrait',
     	'filename' => 'personal'.$id.'.pdf'
    );
     $this->Paginator->settings = $this->paginate = array('limit' => 6);
	 		$this->set('personals', $this->paginate('Personal'));
   }

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
    	'orientation' => 'portrait',
    	'filename' => 'personal'.$id.'.pdf'
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

        $this->Session->setFlash(__('Empleado registrado con exito.'), 'alert-box', array('class'=>'alert-success'));

				return $this->redirect(array('action' => 'index'));
			} else {
        $this->Session->setFlash(__('El empleado no pudo ser registrado. Por favor, intente de nuevo.'),'alert-box', array('class'=>'alert-danger'));


			}
		}
		$positions = $this->Personal->Position->find('list');
		//$positions = $this->Personal->Position->find('list', [
		//           'recursive' => 0,
		//           'fields' => [
        //       'Personal.position_id',
        //  ]]);
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

					$this->Session->setFlash(__('Datos del empleado han sido actualizados.'), 'alert-box', array('class'=>'alert-info'));
				return $this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('Los datos del empleado no han podido ser actualizados. Por favor, intente de nuevo.'),'alert-box', array('class'=>'alert-danger'));

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
			throw new NotFoundException(__('Error intente de nuevo'));
		}
		$this->request->allowMethod('post', 'delete');
		if ($this->Personal->delete()) {

			$this->Session->setFlash(__('El empleado ha sido eliminado.'), 'alert-box', array('class'=>'alert-warning'));
		} else {
			$this->Session->setFlash(__('El empleado no ha sido eliminado. Por favor, intente de nuevo.'),'alert-box', array('class'=>'alert-danger'));

		}
		return $this->redirect(array('action' => 'index'));
}

public function getPalabraByPersonal() {
 if ($this->request->is('ajax')) {
  $cedula = $this->params['data']['dni'];

$personal = $this->Personal->find('all',array(
   'fields' => array('Personal.idpersonal','Personal.full_name','Personal.cedula'),
   'conditions'=>array('Personal.cedula LIKE'=>'%'. $cedula. '%')));


  $this->RequestHandler->respondAs('json');
  $this->autoRender = false;
   echo json_encode ( $personal );
 }
}


  public function searchjson()
  {
    $term = null;
    if(!empty($this->request->query['term']))
    {
      $term = $this->request->query['term'];
      $term = explode(' ', trim($term));
      $term = array_diff($term, array(''));
      foreach($terms as $term){
        $conditions[] = array('Personal.dni LIKE' => '%'. $term. '%');
      }

      $personal =  $this->Personals->find('all', array('recursive' => -1, 'fields' =>
      array('Personal.id','Personal.dni','Personal.name'), 'conditions'=> $conditions,
      'limit' => 20));
    }
    echo json_encode($personal);
    $this->autoRender = false;
  }
  public function search()
  {
    $search = null;
    if(!empty($this->request->query['search']))
    {
      $search = $this->request->query['search'];
      $search = preg_replace('/[^a-zA-ZñÑáéíóúÁÉÍÓÚ0-9 ]/', '', $search);
			$terms = explode(' ', trim($search));
			$terms = array_diff($terms, array(''));

      foreach($terms as $term)
      {
        $terms1[] = preg_replace('/[^a-zA-ZñÑáéíóúÁÉÍÓÚ0-9 ]/', '', $term);
				$conditions[] = array('Personal.dni LIKE' => '%' . $term . '%');
      }
      $personals = $this->Personal->find('all', array('recursive'=> -1, 'conditions' => $conditions,
    'limit' => 200));
      if(count($personals) == 1)
      {
        return $this->redirect(array('controller'=>'personals', 'action'=>'view',$personals[0]['Personal']['id']));
      }
      $terms1 = array_diff($terms1, array(''));
			$this->set(compact('platillos', 'terms1'));
    }
      $this->set(compact('search'));

      if($this->request->is('ajax'))
      {
          $this->layout = false;
          $this->set('ajax', 1);
      }
      else{
        $this->set('ajax', 0);
      }
  }
}
