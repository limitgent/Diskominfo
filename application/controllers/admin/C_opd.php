<?php
defined('BASEPATH') or exit('No direct script access allowed');

class C_opd extends CI_Controller
{

    function __construct()
    {
        parent::__construct();
        $this->load->model('m_data');
        $this->load->helper('url');

        if ($this->session->userdata('status') != "login") {
            redirect(base_url("admin/C_login"));
        }
    }

    public function index()
    {

        $data['opd'] = $this->m_data->tampil_opd()->result();
        $this->load->view('admin/templates/header');
        $this->load->view('admin/templates/sidebar');
        $this->load->view('admin/v_opd', $data);
        $this->load->view('admin/templates/footer');
    }

    public function tambah_opd()
    {

        $jumlahopd = $this->m_data->tampil_opd()->num_rows();
        if ($jumlahopd > 0) {
            $lastId = $this->m_data->tampil_opd_akhir()->result();

            foreach ($lastId as $row) {
                $rawIdopd = substr($row->id_opd, 3);
                $idopdInt = intval($rawIdopd);

                if (strlen($idopdInt) == 1) {

                    $id_opd = "OP00" . ($idopdInt + 1);
                } else if (strlen($idopdInt) == 2) {
                    $id_opd = "OP0" . ($idopdInt + 1);
                } else if (strlen($idopdInt) == 3) {
                    $id_opd = "OP" . ($idopdInt + 1);
                }
            }
        } else {
            $id_opd = "OP001";
        }


        $data = array(
            'id_opd' => $id_opd
        );
        $this->load->view('admin/templates/header');
        $this->load->view('admin/templates/sidebar');
        $this->load->view('admin/v_inputopd', $data);
        $this->load->view('admin/templates/footer');
    }

    public function input_opd()
    {

        $id_opd = $this->input->post('id_opd');
        $nama_opd = $this->input->post('nama_opd');
        $username_opd = $this->input->post('username_opd');
        $password_opd = $this->input->post('password_opd');
        
        $data = array(
            'id_opd' => $id_opd,
            'nama_opd' => $nama_opd,
            'username_opd' => $username_opd,
            'password_opd' => $password_opd,
            
        );

        $this->m_data->input_opd($data, 'opd');

        redirect('admin/C_opd/index');
    }

    public function hapus_opd($id)
    {
        $where = array(
            'id_opd' => $id
        );

        $this->m_data->hapus_opd($where, 'opd');
        redirect('admin/C_opd/index');
    }

    public function edit($id_opd)
    {
        // kode yang berfungsi untuk menyimpan id user ke dalam array $where pada index array benama id
        $where = array('id_opd' => $id_opd);
        // kode di bawah ini adalah kode yang mengambil data user berdasarkan id dan disimpan kedalam array $data dengan index bernama user
        $data['opd'] = $this->m_data->edit($where, 'opd')->result();
        // kode ini memuat vie edit dan membawa data hasil query diatas
        $this->load->view('admin/templates/header');
        $this->load->view('admin/templates/sidebar');
        $this->load->view('admin/v_editopd', $data);
        $this->load->view('admin/templates/footer');
    }

  

    public function update()
    {


        $id_opd = $this->input->post('id_opd');
        $nama_opd = $this->input->post('nama_opd');
        $username_opd = $this->input->post('username_opd');
        $password_opd = $this->input->post('password_opd');
        
        $data = array(
            'id_opd' => $id_opd,
            'nama_opd' => $nama_opd,
            'username_opd' => $username_opd,
            'password_opd' => $password_opd,
        );

        // kode yang berfungsi menyimpan id user ke dalam array $where pada index array bernama id
        $where = array(
            'id_opd' => $id_opd
        );

        // kode untuk melakukan query update dengan menjalankan method update_data() 
        $this->m_data->update($where, $data, 'opd');
        // baris kode yang mengerahkan pengguna ke link base_url()crud/index/
        redirect('admin/C_opd/index');
    }
}
