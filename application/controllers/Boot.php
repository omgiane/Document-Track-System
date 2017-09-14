<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Boot extends CI_Controller {

	public function __construct(){
		parent::__construct();
		$this->load->model('students_model','Students');
	}

	public function index(){
		//echo "Bootstrap controller";
		$data ['title'] = "Bootstrap Intro";
		$data ['contents'] = "Display bootstrap contents";
		$this->load->view('include/header',$data);
		$this->load->view('students/list_students',$data);
		$this->load->view('include/footer');
	}

	public function view_student(){
	}

	public function update_student(){

	}

	public function delete_student(){

	}

}
?>