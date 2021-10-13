<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class C_dashboard extends CI_Controller {

	public function __construct()
	{
		parent::__construct();
		if  ($this->session->userdata('status') != "login") {
			redirect(base_url("admin/C_login"));
		}
	}

	public function index()
	{
		$data['user'] = $this->session->userdata('user');
		$this->load->view('admin/templates/header', $data);
		$this->load->view('admin/templates/sidebar', $data);
		$this->load->view('admin/v_dashboard', $data);
		$this->load->view('admin/templates/footer');
		
	}
}
