<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class C_user extends CI_Controller {

	public function __construct()
	{
		parent::__construct();{

			$this->load->model('m_data_kehadiran');
		
		}
	}

	public function index(){
		
		$data['karyawan'] = $this->m_data_kehadiran->tampil_karyawan_availabel()->result();

		$this->load->view('user/templates/header');
		$this->load->view('user/v_user', $data);
		$this->load->view('user/templates/footer');
		
	}
}