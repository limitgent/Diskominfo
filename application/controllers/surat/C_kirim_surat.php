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
        $file = $_FILES['file'];

        if ($file=''){}else{
            $config['upload_path']      = './assets/user/arsip';
            $config['allowed_types']    = '.doc|.docx|.docm|.dot|.dotx|.dotm|.ppt|.xls|.xlsx';
            $config['max_size']         = 0;

            $this->load->library('upload',$config);
            if(!$this->upload->do_upload('file')) {
            }else
            {
                $file = $this->upload->data('file_name');
            }
        }
        $data = array(
            'no_surat' => $nomor_surat,
            'tgl_kirim' => $tgl_kirim,
            'perihal' => $perihal,
            'departemen' => $departemen,
            'file' => $file
            
      );
      $this->m_kirim_surat->kirim_surat($data,'kirim_surat');
      redirect('surat/C_kirim_surat/tampil_kirim_surat/'.$this->uri->segment(4));
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

    function update_kirim_surat(){
        // keenam baris kode ini berfungsi untuk merekam data yang dikirim melalui method post
        $nomor_surat = $this->input->post('no_surat');
        $tgl_kirim = $this->input->post('tgl_kirim');
        $perihal = $this->input->post('perihal');
        $departemen = $this->input->post('departemen');
        $file = $_FILES['file'];
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