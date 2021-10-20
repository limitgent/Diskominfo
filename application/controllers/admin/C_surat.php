<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class C_surat extends CI_Controller {

    function __construct(){
        parent::__construct();	
            // ini adalah function untuk memuat model bernama m_data
        $this->load->model('m_data_surat');
        // 
        $this->load->helper('url');

            if($this->session->userdata('status') != "login") {
                redirect(base_url("admin/C_login"));
            }
        }
        //  method yang akan diakses saat controller ini diakses
        public function tampil_surat(){
            // ini adalah variabel array $data yang memiliki index user, berguna untuk menyimpan data 
            $data['surat'] = $this->m_data_surat->tampil_surat()->result();
            // ini adalah baris kode yang berfungsi menampilkan v_tampil dan membawa data dari tabel user
            $this->load->view('admin/templates/header');
            $this->load->view('admin/templates/sidebar');
            $this->load->view('admin/v_surat', $data);
            $this->load->view('admin/templates/footer');
            }

            