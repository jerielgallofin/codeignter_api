<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Home extends CI_Controller {
    
    function __construct() {
		parent::__construct ();
		$this->output->set_header ( "Cache-Control: no-store, no-cache, must-revalidate, no-transform, max-age=0, post-check=0, pre-check=0" );
		$this->output->set_header ( "Pragma: no-cache" );
	}

	/**
	 * Index Page for this controller.
	 *
	 * Maps to the following URL
	 * 		http://example.com/index.php/welcome
	 *	- or -
	 * 		http://example.com/index.php/welcome/index
	 *	- or -
	 * Since this controller is set as the default controller in
	 * config/routes.php, it's displayed at http://example.com/
	 *
	 * So any other public methods not prefixed with an underscore will
	 * map to /index.php/welcome/<method_name>
	 * @see https://codeigniter.com/user_guide/general/urls.html
	 */
	public function index()
	{
//        header('Content-Type: application/json');
        
//        $this->load->model('student_model');
//        $student_list = $this->student_model->get_student();
//        
//        $obj = new stdClass();
//        $obj->count = $this->student_model->count_student();
//        $obj->students = $student_list;
//        echo json_encode( $obj );.
        
        $this->load->view('home_view');

	}
}
