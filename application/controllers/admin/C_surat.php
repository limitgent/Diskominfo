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

            function input_surat(){
                // ini adalah baris kode yang berfungsi merekam data yang diinput oleh pengguna
                  $id_surat = $this->input->post('id_surat');
                  $id_opd = $this->input->post('id_opd');
                  $tgl_kirim = $this->input->post('tgl_kirim');
                  $tgl_terima = $this->input->post('tgl_terima');
                  $perihal = $this->input->post('perihal');
                  $file = $this->input->post('file');
                // array yang berguna untuk mennjadikanva variabel diatas menjadi 1 variabel yang nantinya akan di sertakan dalam query insert
                  $data = array(
                      'id_surat' => $id_surat,
                      'id_opd' => $id_opd,
                      'tgl_kirim' => $tgl_kirim,
                      'tgl_terima' => $tgl_terima,
                      'perihal' => $perihal,
                      'file' => $file,
                      
                );
                // method yang berfungsi melakukan insert ke dalam database yang mengirim 2 parameter yaitu sebuah array data dan nama tabel yang dimaksud
                  $this->m_data_surat->input_data($data,'surat');
              // kode yang berfungsi mengarahkan pengguna ke link base_url()crud/index/ 
              redirect('admin/C_surat/index');
              }