<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class C_admin extends CI_Controller {

    function __construct(){
        parent::__construct();	
            // ini adalah function untuk memuat model bernama m_data
        $this->load->model('m_data');
        // 
            $this->load->helper('url');

            if($this->session->userdata('status') != "login") {
                redirect(base_url("admin/C_login"));
            }
        }
    //  method yang akan diakses saat controller ini diakses
        function index(){
        // ini adalah variabel array $data yang memiliki index user, berguna untuk menyimpan data 
        $data['admin'] = $this->m_data->tampil_data()->result();
        // ini adalah baris kode yang berfungsi menampilkan v_tampil dan membawa data dari tabel user
        $this->load->view('admin/templates/header');
		$this->load->view('admin/templates/sidebar');
		$this->load->view('admin/v_admin', $data);
		$this->load->view('admin/templates/footer');
        }

        function tambah_admin(){
            $this->load->view('admin/templates/header');
            $this->load->view('admin/templates/sidebar');
            $this->load->view('admin/v_inputadmin');
            $this->load->view('admin/templates/footer');
        }

        function input_admin(){
            // ini adalah baris kode yang berfungsi merekam data yang diinput oleh pengguna
              $id_admin = $this->input->post('id_admin');
              $nama_admin = $this->input->post('nama_admin');
              $username_admin = $this->input->post('username_admin');
              $password_admin = $this->input->post('password_admin');
            // array yang berguna untuk mennjadikanva variabel diatas menjadi 1 variabel yang nantinya akan di sertakan dalam query insert
              $data = array(
                  'id_admin' => $id_admin,
                  'nama_admin' => $nama_admin,
                  'username_admin' => $username_admin,
                  'password_admin' => $password_admin,
                  
            );
            // method yang berfungsi melakukan insert ke dalam database yang mengirim 2 parameter yaitu sebuah array data dan nama tabel yang dimaksud
              $this->m_data->input_data($data,'admin');
          // kode yang berfungsi mengarahkan pengguna ke link base_url()crud/index/ 
          redirect('admin/C_admin/index');
          }

        function hapus($id){
            // baaris kode ini berisi fungsi untuk menyimpan id user kedalam array $where pada index array bernama 'id'
          $where = array('id_admin' => $id);
          // kode di bawah ini untuk menjalankan query hapus yang berasal dari method hapus_data() pada model m_data
              $this->m_data->hapus_data2($where,'admin');
          // kode yang berfungsi mengarakan pengguna ke link base_url()crud/index/
          redirect('admin/C_admin/index');
          }

          function edit($id){
            // kode yang berfungsi untuk menyimpan id user ke dalam array $where pada index array benama id
            $where = array('id_admin' => $id);
            // kode di bawah ini adalah kode yang mengambil data user berdasarkan id dan disimpan kedalam array $data dengan index bernama user
            $data['admin'] = $this->m_data->edit_data($where,'admin')->result();
            // kode ini memuat vie edit dan membawa data hasil query diatas
            $this->load->view('admin/templates/header');
            $this->load->view('admin/templates/sidebar');
            $this->load->view('admin/v_editadmin',$data);
            $this->load->view('admin/templates/footer');
           
        }
    
        // baris kode function update adalah method yang diajalankan ketika tombol submit pada form v_edit ditekan, method ini berfungsi untuk merekam data, memperbarui baris database yang dimaksud, lalu mengarahkan pengguna ke controller crud method index
        function update(){
            // keempat baris kode ini berfungsi untuk merekam data yang dikirim melalui method post
                
                $id_admin= $this->input->post('id_admin');
                $nama_admin= $this->input->post('nama_admin');
                $username_admin = $this->input->post('username_admin');
                $password_admin= $this->input->post('password_admin');
            
            
                // brikut ini adalah array yang berguna untuk menjadikan variabel diatas menjadi 1 variabel yang nantinya akan disertakan ke dalam query update pada model
                $data = array(
                    'id_admin' => $id_admin,
                    'nama_admin' => $nama_admin,
                    'username_admin' => $username_admin,
                    'password_admin' => $password_admin
                );
            
                // kode yang berfungsi menyimpan id user ke dalam array $where pada index array bernama id
                $where = array(
                    'id_admin' => $id_admin
                );
            
                // kode untuk melakukan query update dengan menjalankan method update_data() 
                $this->m_data->update_data($where,$data,'admin');
                // baris kode yang mengerahkan pengguna ke link base_url()crud/index/
                redirect('admin/C_admin/index');
            }
}
