<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class C_surat extends CI_Controller {

    function __construct(){
        parent::__construct();	
            // ini adalah function untuk memuat model bernama m_data
        $this->load->model('m_data_surat');
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

            public function tambah_surat()
        {
        // Membuat fungsi untuk melakukan penambahan id produk secara otomatis
		// Mendapatkan jumlah produk yang ada di database
		$jumlahSurat = $this->m_data_surat->tampil_surat()->num_rows();
		// Jika jumlah produk lebih dari 0
		if ($jumlahSurat > 0) {
			// Mengambil id produk sebelumnya
			$lastId = $this->m_data_surat->tampil_surat_akhir()->result();
			// Melakukan perulangan untuk mengambil data
			foreach ($lastId as $row) {
				// Melakukan pemisahan huruf dengan angka pada id produk
				$rawIdSurat = substr($row->id_surat, 3);
				// Melakukan konversi nilai pemisahan huruf dengan angka pada id order menjadi integer
				$idSuratInt = intval($rawIdSurat);

				// Menghitung panjang id yang sudah menjadi integer
				if (strlen($idSuratInt) == 1) {
					// jika panjang id hanya 1 angka
					$id_surat = "SU001" . ($idSuratInt + 1);
				} else if (strlen($idSuratInt) == 2) {
					// jika panjang id hanya 2 angka
					$id_surat = "SU01" . ($idSuratInt + 1);
				} else if (strlen($idSuratInt) == 3) {
					// jika panjang id hanya 3 angka
					$id_surat = "SU1" . ($idSuratInt + 1);
				}
			}
		} else {
			// Jika jumlah paket soal kurang dari sama dengan 0
			$id_surat = "SU001";
        }
        
        
        $data = array( 
            'id_surat' => $id_surat
        );
        $this->load->view('admin/templates/header');
		$this->load->view('admin/templates/sidebar');
		$this->load->view('admin/v_tambahsurat', $data);
		$this->load->view('admin/templates/footer');

    }

    public function aksi_tambah_surat(){
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
                  $this->m_data_surat->tambah_surat($data,'surat');
              // kode yang berfungsi mengarahkan pengguna ke link base_url()crud/index/ 
              redirect('admin/C_surat/tampil_surat');
              }

              function hapus_surat($id){
                // baaris kode ini berisi fungsi untuk menyimpan id user kedalam array $where pada index array bernama 'id'
              $where = array(
                  'id_surat' => $id
                );
              // kode di bawah ini untuk menjalankan query hapus yang berasal dari method hapus_data() pada model m_data
                  $this->m_data_surat->hapus_surat($where,'surat');
              // kode yang berfungsi mengarakan pengguna ke link base_url()crud/index/
              redirect('admin/C_surat/tampil_surat');
              }

              public function edit_surat($id){
                // kode yang berfungsi untuk menyimpan id user ke dalam array $where pada index array benama id
                $where = array('id_surat' => $id);
                // kode di bawah ini adalah kode yang mengambil data user berdasarkan id dan disimpan kedalam array $data dengan index bernama user
                $data['surat'] = $this->m_data_surat->edit_surat($where,'surat')->result();
                // kode ini memuat vie edit dan membawa data hasil query diatas
                $this->load->view('admin/templates/header');
                $this->load->view('admin/templates/sidebar');
                $this->load->view('admin/v_edit_surat',$data);
                $this->load->view('admin/templates/footer');
               
            }
            public function detail_surat($id)
            {
                $where = array('id_surat');
                $detail = $this->m_data_surat->tampil_surat($id);
                $data['detail'] = $this->m_data_surat->tampil_surat($id);
                $this->load->view('admin/templates/header');
                $this->load->view('admin/templates/sidebar');
                $this->load->view('admin/v_surat', $data);
                $this->load->view('admin/templates/footer');
            }

            // baris kode function update adalah method yang diajalankan ketika tombol submit pada form v_edit ditekan, method ini berfungsi untuk merekam data, memperbarui baris database yang dimaksud, lalu mengarahkan pengguna ke controller crud method index
        function update_data_surat(){
            // keenam baris kode ini berfungsi untuk merekam data yang dikirim melalui method post
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
            
                // kode yang berfungsi menyimpan id user ke dalam array $where pada index array bernama id
                $where = array(
                    'id_surat' => $id_surat
                );
            
                // kode untuk melakukan query update dengan menjalankan method update_data() 
                $this->m_data_surat->update_data_surat($where,$data,'surat');
                // baris kode yang mengerahkan pengguna ke link base_url()crud/index/
                redirect('admin/C_surat/tampil_surat');
            }
}