<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class C_kirim_surat extends CI_Controller {
    function __construct(){
        parent::__construct();	
        $this->load->model('m_kirim_surat');
        $this->load->helper('url','form','file');
        if($this->session->userdata('status') != "login") {
            redirect(base_url("surat/C_login"));
        }
    }

    public function tampil_kirim_surat(){
        $data['surat'] = $this->m_kirim_surat->tampil_kirim_surat()->result();
        $this->load->view('surat/templates/header');
        $this->load->view('surat/templates/sidebar');
        $this->load->view('surat/v_kirim_surat', $data);
        $this->load->view('surat/templates/footer');
    }
    public function aksi_kirim_surat(){
        $nomor_surat = $this->input->post('no_surat');
        $tgl_kirim = $this->input->post('tgl_kirim');
        $perihal = $this->input->post('perihal');
        $departemen = $this->input->post('departemen');
        $dokumen = $_FILES['dokumen'];

        if ($file=''){}else{
            $config['upload_path']      = './assets/user/arsip/';
            $config['allowed_types']    = 'pdf|doc|docx|docm|dot|dotx|dotm|ppt|xls|xlsx';
            $config['max_size']         = 0;

            $this->load->library('upload',$config);
            if(!$this->upload->do_upload('dokumen')) {
            }else
            {
                $dokumen = $this->upload->data('file_name');
            }
        }
        $data = array(
            'no_surat' => $nomor_surat,
            'tgl_kirim' => $tgl_kirim,
            'perihal' => $perihal,
            'departemen' => $departemen,
            'file' => $dokumen
            
      );
      $this->m_kirim_surat->kirim_surat($data,'kirim_surat');
      redirect('surat/C_kirim_surat/tampil_kirim_surat');
    }
    function hapus_surat($id){
        // baaris kode ini berisi fungsi untuk menyimpan id user kedalam array $where pada index array bernama 'id'
      $where = array(
          'id_surat' => $id
        );
      // kode di bawah ini untuk menjalankan query hapus yang berasal dari method hapus_data() pada model m_data
          $this->m_kirim_surat->hapus_surat($where,'surat');
      // kode yang berfungsi mengarakan pengguna ke link base_url()crud/index/
      redirect('surat/C_kirim_surat/tampil_kirim_surat');
      }

      public function edit_kirim($id){
        // kode yang berfungsi untuk menyimpan id user ke dalam array $where pada index array benama id
        $where = array('id_surat' => $id);
        // kode di bawah ini adalah kode yang mengambil data user berdasarkan id dan disimpan kedalam array $data dengan index bernama user
        $surat['surat'] = $this->m_kirim_surat->edit_kirim($where,'surat')->result();
        // kode ini memuat vie edit dan membawa data hasil query diatas
        $this->load->view('admin/templates/header');
        $this->load->view('admin/templates/sidebar');
        $this->load->view('admin/v_edit_kirim',$surat);
        $this->load->view('admin/templates/footer');
       
    }

    public function tampil_isi_kirim_surat($id){
        // kode yang berfungsi untuk menyimpan id user ke dalam array $where pada index array benama id
        $where = array('id_surat' => $id);
        // kode di bawah ini adalah kode yang mengambil data user berdasarkan id dan disimpan kedalam array $data dengan index bernama user
        $surat['surat'] = $this->m_kirim_surat->tampil_isi_kirim_surat($where,'surat')->result();
        // kode ini memuat vie edit dan membawa data hasil query diatas
        $this->load->view('admin/templates/header');
        $this->load->view('admin/templates/sidebar');
        $this->load->view('admin/v_tampil_isi_kirim_surat',$surat);
        $this->load->view('admin/templates/footer');
       
    }

    function update_kirim_surat(){
        // keenam baris kode ini berfungsi untuk merekam data yang dikirim melalui method post
        $nomor_surat = $this->input->post('no_surat');
        $tgl_kirim = $this->input->post('tgl_kirim');
        $perihal = $this->input->post('perihal');
        $departemen = $this->input->post('departemen');
        $file = $this->input->post('file');
                // array yang berguna untuk mennjadikan variabel diatas menjadi 1 variabel yang nantinya akan di sertakan dalam query insert
                $data = array(
                    'no_surat' => $nomor_surat,
                    'tgl_kirim' => $tgl_kirim,
                    'perihal' => $perihal,
                    'departemen' => $departemen,
                    'file' => $_FILES
            );
        
            // kode yang berfungsi menyimpan id user ke dalam array $where pada index array bernama id
            $where = array(
                'id_surat' => $id_surat
            );
        
            // kode untuk melakukan query update dengan menjalankan method update_data() 
            $this->m_kirim_surat->update_kirim_surat($where,$data,'surat');
            // baris kode yang mengerahkan pengguna ke link base_url()crud/index/
            redirect('surat/C_kirim_surat/tampil_kirim_surat');
        }
}