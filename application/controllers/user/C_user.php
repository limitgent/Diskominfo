<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class C_user extends CI_Controller {

	public function __construct()
	{
		parent::__construct();{

			$this->load->model('m_data_kehadiran');
			$this->load->model('m_data_janji');
		}
	}

	public function index(){
		
		$karyawan = $this->m_data_kehadiran->tampil_karyawan_availabel()->result();
		$divisi	= $this->m_data_janji->tampil_divisi()->result();

		$data = array( 
            'karyawan' => $karyawan,
			'divisi'=> $divisi
			
        );
		$this->load->view('user/templates/header');
		$this->load->view('user/v_user', $data);
		$this->load->view('user/templates/footer');
		
	}

	public function tampil_karyawan($id){

		$where = array('divisi.id_divisi' => $id);

		 $resultKaryawan = $this->m_data_janji->tampil_karyawan_where($where,'karyawan')->result();
            // kode ini memuat vie edit dan membawa data hasil query diatas
            $data = array(
                'karyawan' => $resultKaryawan
            );
		$this->load->view('user/templates/header');
		$this->load->view('user/v_karyawan', $data);
		
	}
}