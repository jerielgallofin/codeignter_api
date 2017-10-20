<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Student extends CI_Controller {
    
    function __construct() {
		parent::__construct ();
		$this->output->set_header ( "Cache-Control: no-store, no-cache, must-revalidate, no-transform, max-age=0, post-check=0, pre-check=0" );
		$this->output->set_header ( "Pragma: no-cache" );
        $this->load->model('student_model');
	}
	
	public function index()
	{
        header('Content-Type: application/json');
        $obj = new stdClass();
        $obj->draw = 1;
        $obj->recordsTotal = $this->student_model->count_student();
        $obj->recordsFiltered = $this->student_model->count_student();
        $obj->data = $this->student_model->get_student();
        
        echo json_encode( $obj );
        
	}
    
    public function add_student() {
        
        $data = array(
            'userID'      => $this->input->post('name'),
            'itemKind'    => 0,
            'value'       => 1,
            'description' => 'Boa saudaÁ„o.',
            'itemID'      => '03e76d0a-8bab-11e0-8250-000c29b481aa'
        );
        header('Content-Type: application/json');
        echo json_encode( $data );
        
    }
}
