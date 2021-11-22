<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class C_user extends CI_Controller {

	public function __construct()
	{
		parent::__construct();{
		
		}
	}

	public function index(){
		$this->load->view('user/templates/header');
		$this->load->view('user/v_user');
		$this->load->view('user/templates/footer');
		
	}
}