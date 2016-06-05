<?php
App::uses('AppModel', 'Model');
/**
 * Personal Model
 *
 * @property Position $Position
 */
class Personal extends AppModel {

/**
 * Display field
 *
 * @var string
 */

public $displayField = 'full_name';

public $virtualFields = array(
        'full_name' => 'CONCAT(name, " ", last_name)',
        'idcargo'   => 'Personal.position_id',
        'idpersonal'   => 'Personal.id',
		'cedula'   => 'Personal.dni',
    );


/**
 * Validation rules
 *
 * @var array
 */
	public $validate = array(
		'position_id' => array(
			'numeric' => array(
				'rule' => array('numeric'),
				//'message' => 'Your custom message here',
				//'allowEmpty' => false,
				//'required' => false,
				//'last' => false, // Stop validation after this rule
				//'on' => 'create', // Limit validation to 'create' or 'update' operations
			),
		),
		'date_reg' => array(
			'notBlank' => array(
				'rule' => array('notBlank'),
				'message' => 'Campo Vacio, Seleccione Fecha',
				//'allowEmpty' => false,
				'required' => true,
				//'last' => false, // Stop validation after this rule
				//'on' => 'create', // Limit validation to 'create' or 'update' operations
			),
		),
		'dni' => array(
			'numeric' => array(
				'rule' => array('numeric'),
				'message' => 'Campo Vacio, Ingrese Cedula',
				//'allowEmpty' => false,
				'required' => true,
				//'last' => false, // Stop validation after this rule
				//'on' => 'create', // Limit validation to 'create' or 'update' operations
			),
			'notBlank' => array(
				'rule' => array('notBlank'),
				'message' => 'Campo Vacio, Ingrese Cedula',
				//'allowEmpty' => false,
				'required' => true,
				//'last' => false, // Stop validation after this rule
				//'on' => 'create', // Limit validation to 'create' or 'update' operations
			),
      'isUnique' => array(
				'rule' => array('isUnique'),
				'message' => 'Esta Cedula ya Existe',
				//'allowEmpty' => false,
				'required' => true,
				//'last' => false, // Stop validation after this rule
				//'on' => 'create', // Limit validation to 'create' or 'update' operations
			),
		),
		'name' => array(
			'notBlank' => array(
				'rule' => array('notBlank'),
				'message' => 'Campo Vacio, Ingrese Nombre',
				//'allowEmpty' => false,
				'required' => true,
				//'last' => false, // Stop validation after this rule
				//'on' => 'create', // Limit validation to 'create' or 'update' operations
			),
		),
		'last_name' => array(
			'notBlank' => array(
				'rule' => array('notBlank'),
				'message' => 'Campo Vacio, Ingrese Apellidos',
				//'allowEmpty' => false,
				'required' => true,
				//'last' => false, // Stop validation after this rule
				//'on' => 'create', // Limit validation to 'create' or 'update' operations
			),
		),
		'born_date' => array(
			'notBlank' => array(
				'rule' => array('notBlank'),
				'message' => 'Campo Vacio, Seleccione Fecha',
				//'allowEmpty' => false,
				'required' => true,
				//'last' => false, // Stop validation after this rule
				//'on' => 'create', // Limit validation to 'create' or 'update' operations
			),
		),
		'sex' => array(
			'notBlank' => array(
				'rule' => array('notBlank'),
				'message' => 'Campo Vacio, Seleccione el Sexo',
				//'allowEmpty' => false,
			  'required' => true,
				//'last' => false, // Stop validation after this rule
				//'on' => 'create', // Limit validation to 'create' or 'update' operations
			),
		),
		'age' => array(
			'numeric' => array(
				'rule' => array('numeric'),
				'message' => 'Campo Vacio, Ingrese Edad',
				//'allowEmpty' => false,
				//'required' => false,
				//'last' => false, // Stop validation after this rule
				//'on' => 'create', // Limit validation to 'create' or 'update' operations
			),
			'notBlank' => array(
				'rule' => array('notBlank'),
				//'message' => 'Your custom message here',
				//'allowEmpty' => false,
				//'required' => false,
				//'last' => false, // Stop validation after this rule
				//'on' => 'create', // Limit validation to 'create' or 'update' operations
			),
		),
		'cell_phone' => array(
			'numeric' => array(
				'rule' => array('numeric'),
				//'message' => 'Solo Numeros',
				'allowEmpty' => true,
				//'required' => false,
				//'last' => false, // Stop validation after this rule
				//'on' => 'create', // Limit validation to 'create' or 'update' operations
			),
		),
		'phone' => array(
			'numeric' => array(
				'rule' => array('numeric'),
				//'message' => 'Campo Vacio, Ingrese Numero Local',
				'allowEmpty' => true,
				//'required' => true,
				//'last' => false, // Stop validation after this rule
				//'on' => 'create', // Limit validation to 'create' or 'update' operations
			),
		),
		'email' => array(
			'email' => array(
				'rule' => array('email'),
				//'message' => 'Campo Vacio, Ingrese Email',
				'allowEmpty' => true,
				//'required' => true,
				//'last' => false, // Stop validation after this rule
				//'on' => 'create', // Limit validation to 'create' or 'update' operations
			),
		),
		'address' => array(
			'notBlank' => array(
				'rule' => array('notBlank'),
				'message' => 'Campo Vacio, Ingrese Direccion',
				//'allowEmpty' => false,
				'required' => true,
				//'last' => false, // Stop validation after this rule
				//'on' => 'create', // Limit validation to 'create' or 'update' operations
			),
		),
	);

	// The Associations below have been created with all possible keys, those that are not needed can be removed

/**
 * belongsTo associations
 *
 * @var array
 */
	public $belongsTo = array(
		'Position' => array(
			'className' => 'Position',
			'foreignKey' => 'position_id',
			'conditions' => '',
			'fields' => '',
			'order' => ''
		)
	);
}
