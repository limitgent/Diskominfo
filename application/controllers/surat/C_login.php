<?php 
 // class Login sebagai controller yang berfungsi untuk mengurus segala hal tentang Login, mulai dari cek ketersediaan akun, session, logout dsb.
class C_login extends CI_Controller{
 
	// fungsi yang akan dijalankan pertama kali dan dijalankan otomatis
	function __construct(){
		parent::__construct();
		$this->load->model('m_login');
		$this->load->helper('url');
    }

    function index(){
        // berikut adalah baris kode yang berfungsi untuk menampilkan v_login
        $this->load->view('surat/templates/header');
        $this->load->view('surat/v_login');
        $this->load->view('surat/templates/footer');
    }
    
    function aksi_login(){
		// berikut kode untuk merekam data yang dikirim melalui post
		$username_opd = $this->input->post('username_opd');
		$password_opd = $this->input->post('password_opd');
		// berikut menyimpan data pada array untuk nantinya diproses ke dalam model
		$where = array(
			'username_opd' => $username_opd,
			'password_opd' =>$password_opd
			);
		// berikut menjalankan method cek_login pada model m_login
		$cek = $this->m_login->cek_login("opd",$where)->num_rows();
		if($cek > 0){

			//  membuat session dengan index 'nama' yang berisi username dan 'status' berisi login
			$data_session = array(
				'username_opd' => $username_opd,
				'status' => "login"
				);
			// menambahkan sebuah session userdata berisi array diatas
			$this->session->set_userdata($data_session);
            
			redirect('surat/C_dashboard');
 
		}else{
			echo "Username dan password salah !";
		}
    }
    
    function logout(){
		//  baris kode yang akan menghapus session yang ada
		$this->session->sess_destroy();
		//  baris kode yang mengarahkan pengguna ke controller login
		redirect(base_url('surat/C_login'));
	}
}