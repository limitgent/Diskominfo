<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Janji extends CI_Controller {

    function __construct(){
        parent::__construct();	
            // ini adalah function untuk memuat model bernama m_data
        $this->load->model('m_data_janji');
        // 
            $this->load->helper('url');

            if($this->session->userdata('status') != "login") {
                redirect(base_url("admin/C_login"));
            }
        }
    //  method yang akan diakses saat controller ini diakses
        public function tampil_divisi(){
        // ini adalah variabel array $data yang memiliki index user, berguna untuk menyimpan data 
        $data['divisi'] = $this->m_data_janji->tampil_divisi()->result();
        // ini adalah baris kode yang berfungsi menampilkan v_tampil dan membawa data dari tabel user
        $this->load->view('admin/templates/header');
		$this->load->view('admin/templates/sidebar');
		$this->load->view('admin/v_divisi', $data);
		$this->load->view('admin/templates/footer');
        }

        public function tambah_divisi()
        {
        // Membuat fungsi untuk melakukan penambahan id produk secara otomatis
		// Mendapatkan jumlah produk yang ada di database
		$jumlahDivisi = $this->m_data_janji->tampil_divisi()->num_rows();
		// Jika jumlah produk lebih dari 0
		if ($jumlahDivisi > 0) {
			// Mengambil id produk sebelumnya
			$lastId = $this->m_data_janji->tampil_divisi_akhir()->result();
			// Melakukan perulangan untuk mengambil data
			foreach ($lastId as $row) {
				// Melakukan pemisahan huruf dengan angka pada id produk
				$rawIdDivisi = substr($row->id_divisi, 3);
				// Melakukan konversi nilai pemisahan huruf dengan angka pada id order menjadi integer
				$idDivisiInt = intval($rawIdDivisi);

				// Menghitung panjang id yang sudah menjadi integer
				if (strlen($idDivisiInt) == 1) {
					// jika panjang id hanya 1 angka
					$id_divisi = "DV00" . ($idDivisiInt + 1);
				} else if (strlen($idDivisiInt) == 2) {
					// jika panjang id hanya 2 angka
					$id_divisi = "DV0" . ($idDivisiInt + 1);
				} else if (strlen($idDivisiInt) == 3) {
					// jika panjang id hanya 3 angka
					$id_divisi = "DV" . ($idDivisiInt + 1);
				}
			}
		} else {
			// Jika jumlah paket soal kurang dari sama dengan 0
			$id_divisi = "DV001";
        }
        
        
        $data = array( 
            'id_divisi' => $id_divisi
        );
        $this->load->view('admin/templates/header');
		$this->load->view('admin/templates/sidebar');
		$this->load->view('admin/v_tambah_divisi', $data);
		$this->load->view('admin/templates/footer');

    }

    public function aksitambah_divisi(){
        // ini adalah baris kode yang berfungsi merekam data yang diinput oleh pengguna
          $id_divisi = $this->input->post('id_divisi');
          $nama_divisi = $this->input->post('nama_divisi');
          $ket_divisi = $this->input->post('ket_divisi');
        // array yang berguna untuk mennjadikanva variabel diatas menjadi 1 variabel yang nantinya akan di sertakan dalam query insert
          $data = array(
              'id_divisi' => $id_divisi,
              'nama_divisi' => $nama_divisi,
              'ket_divisi' => $ket_divisi,
              
        );
        // method yang berfungsi melakukan insert ke dalam database yang mengirim 2 parameter yaitu sebuah array data dan nama tabel yang dimaksud
          $this->m_data_janji->tambah_divisi($data,'divisi');
      // kode yang berfungsi mengarahkan pengguna ke link base_url()crud/index/ 
      redirect('admin/Janji/tampil_divisi');
      }

      public function hapus_divisi($id)
    {
        $where = array(
            'id_divisi' => $id
        );

        $this->m_data_janji->delete_divisi($where, 'divisi');
        redirect('admin/Janji/tampil_divisi');
    }
}