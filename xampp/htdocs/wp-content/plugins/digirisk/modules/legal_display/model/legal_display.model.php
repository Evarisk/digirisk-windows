<?php if ( !defined( 'ABSPATH' ) ) exit;

class legal_display_model extends post_model {

	public function __construct( $object, $field_wanted = array() ) {
		$this->model = array_merge( $this->model, array(
			'child' => array(
				'detective_work' => array(
					'type' 				=> 'object',
					'controller'	=> 'third_class',
					'field'				=> 'id',
					'value'				=> 'detective_work_id'
				),
				'occupational_health_service' => array(
					'type' 				=> 'object',
					'controller'	=> 'third_class',
					'field'				=> 'id',
					'value'				=> 'occupational_health_service_id'
				)
			),
			'occupational_health_service_id' => array(
				'type'			=> 'integer',
				'meta_type'	=> 'multiple',
				'bydefault' => 0,
			),
			'detective_work_id' => array(
				'type'				=> 'integer',
				'meta_type'	=> 'multiple',
				'bydefault'		=> 0,
			),
			'emergency_service' => array(
				'meta_type'	=> 'multiple',
				'type'			=> 'array',
				'child' => array(
					'samu' => array(
						'type' => 'string',
						'meta_type'	=> 'multiple',
						'bydefault' => '',
					),
					'police' => array(
						'type' => 'string',
						'meta_type'	=> 'multiple',
						'bydefault' => '',
					),
					'pompier' => array(
						'type' => 'string',
						'meta_type'	=> 'multiple',
						'bydefault' => '',
					),
					'emergency' => array(
						'type' => 'string',
						'meta_type'	=> 'multiple',
						'bydefault' => '',
					),
					'right_defender' => array(
						'type' => 'string',
						'meta_type'	=> 'multiple',
						'bydefault' => '',
					),
					'poison_control_center' => array(
						'type' => 'string',
						'meta_type'	=> 'multiple',
						'bydefault' => '',
					),
				),
			),
			'safety_rule' => array(
				'meta_type'	=> 'multiple',
				'type'			=> 'array',
				'child' => array(
					'responsible_for_preventing' => array(
						'type' => 'string',
						'meta_type'	=> 'multiple',
						'bydefault' => '',
					),
					'phone' => array(
						'type' => 'string',
						'meta_type'	=> 'multiple',
						'bydefault' => '',
					),
					'location_of_detailed_instruction' => array(
						'type' => 'string',
						'meta_type'	=> 'multiple',
						'bydefault' => '',
					)
				)
			),
			'working_hour' => array(
				'meta_type'	=> 'multiple',
				'type'			=> 'array',
				'child' => array(
					'monday_morning' => array(
						'type' => 'string',
						'meta_type'	=> 'multiple',
						'bydefault' => '',
					),
					'tuesday_morning' => array(
						'type' => 'string',
						'meta_type'	=> 'multiple',
						'bydefault' => '',
					),
					'wednesday_morning' => array(
						'type' => 'string',
						'meta_type'	=> 'multiple',
						'bydefault' => '',
					),
					'thursday_morning' => array(
						'type' => 'string',
						'meta_type'	=> 'multiple',
						'bydefault' => '',
					),
					'friday_morning' => array(
						'type' => 'string',
						'meta_type'	=> 'multiple',
						'bydefault' => '',
					),
					'saturday_morning' => array(
						'type' => 'string',
						'meta_type'	=> 'multiple',
						'bydefault' => '',
					),
					'sunday_morning' => array(
						'type' => 'string',
						'meta_type'	=> 'multiple',
						'bydefault' => '',
					),
					'monday_afternoon' => array(
						'type' => 'string',
						'meta_type'	=> 'multiple',
						'bydefault' => '',
					),
					'tuesday_afternoon' => array(
						'type' => 'string',
						'meta_type'	=> 'multiple',
						'bydefault' => '',
					),
					'wednesday_afternoon' => array(
						'type' => 'string',
						'meta_type'	=> 'multiple',
						'bydefault' => '',
					),
					'thursday_afternoon' => array(
						'type' => 'string',
						'meta_type'	=> 'multiple',
						'bydefault' => '',
					),
					'friday_afternoon' => array(
						'type' => 'string',
						'meta_type'	=> 'multiple',
						'bydefault' => '',
					),
					'saturday_afternoon' => array(
						'type' => 'string',
						'meta_type'	=> 'multiple',
						'bydefault' => '',
					),
					'sunday_afternoon' => array(
						'type' => 'string',
						'meta_type'	=> 'multiple',
						'bydefault' => '',
					),
				),
			),
			'derogation_schedule' => array(
				'meta_type'	=> 'multiple',
				'type'			=> 'array',
				'child' => array(
					'permanent' => array(
						'type' => 'string',
						'meta_type'	=> 'multiple',
						'bydefault' => '',
					),
					'occasional' => array(
						'type' => 'string',
						'meta_type'	=> 'multiple',
						'bydefault' => '',
					),
				)
			),
			'collective_agreement' => array(
				'meta_type'	=> 'multiple',
				'type'			=> 'array',
				'child' => array(
					'title_of_the_applicable_collective_agreement' => array(
						'type' => 'string',
						'meta_type'	=> 'multiple',
						'bydefault' => '',
					),
					'location_and_access_terms_of_the_agreement' => array(
						'type' => 'string',
						'meta_type'	=> 'multiple',
						'bydefault' => '',
					)
				)
			),
			'DUER' => array(
				'meta_type'	=> 'multiple',
				'type'			=> 'array',
				'child' => array(
					'how_access_to_duer' => array(
						'type' => 'string',
						'meta_type'	=> 'multiple',
						'bydefault' => '',
					)
				)
			),
			'rules' => array(
				'meta_type'	=> 'multiple',
				'type'			=> 'array',
				'child' => array(
					'location' => array(
						'type' => 'string',
						'meta_type'	=> 'multiple',
						'bydefault' => '',
					)
				)
			),
		) );

		parent::__construct( $object, $field_wanted );
	}

}
