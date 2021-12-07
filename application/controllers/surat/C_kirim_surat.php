<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class C_kirim_surat extends CI_Controller {
    function __construct(){
        parent::__construct();	
        $this->load->model('m_kirim_surat');
        $this->load->helper('url');
        if($this->session->userdata('status') != "login") {
            redirect(base_url("surat/C_login"));
        }
    }

    public function tampil_kirim_surat(){
        $data['surat'] = $this->m_kirim_surat->tampil_kirim_surat()->result();
        $this->load->view('surat/templates/header');
        $this->load->view('surat/v_kirim_surat', $data);
        $this->load->view('surat/templates/footer');
    }
    public function kirim_surat(){
        $nomor_surat = $this->input->post('no_surat');
        $tgl_kirim = $this->input->post('tgl_kirim');
        $perihal = $this->input->post('perihal');
        $departemen = $this->input->post('departemen');
        $file = $_FILES['file'];

        if ($file=''){}else{
            $config['upload_path']      = './uploads/';
            $config['allowed_types']    = '.doc|.docx|.docm|.dot|.dotx|.dotm|.ppt|.xls|.xlsx';
            $config['max_size']         = 0;

            $this->load->library('upload',$config);
            if(!$this->upload->do_upload('file')) {
            }else
            {
                $file = $this->upload->data('file');
            }
        }
        $data = array(
            'no_surat' => $nomor_surat,
            'tgl_kirim' => $tgl_kirim,
            'perihal' => $perihal,
            'departemen' => $departemen,
            'file' => $_FILES
            
      );
      $this->m_kirim_surat->kirim_surat($data,'kirim_surat');
      redirect('surat/C_kirim_surat/tampil_surat');
    }
}