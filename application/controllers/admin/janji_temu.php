<?php
defined('BASEPATH') or exit('No direct script access allowed');

class janji_temu extends CI_Controller
{

    function __construct()
    {
        parent::__construct();
        $this->load->model('m_janji_temu');
        $this->load->helper('url');

        if ($this->session->userdata('status') != "login") {
            redirect(base_url("admin/C_login"));
        }
    }

    public function tampil_janji()
    {

        $data['aturjanji'] = $this->m_janji_temu->tampil_janji()->result();
        $this->load->view('admin/templates/header');
        $this->load->view('admin/templates/sidebar');
        $this->load->view('admin/v_janji_temu', $data);
        $this->load->view('admin/templates/footer');
    }

    public function tambah_janji()
    {

        $jumlahJanji = $this->m_janji_temu->tampil_janji()->num_rows();
        if ($jumlahJanji > 0) {
            $lastId = $this->m_janji_temu->tampil_janji_akhir()->result();

            foreach ($lastId as $row) {
                $rawIdJanji = substr($row->id_janji, 3);
                $idJanjiInt = intval($rawIdJanji);

                if (strlen($idJanjiInt) == 1) {

                    $id_janji = "JT00" . ($idJanjiInt + 1);
                } else if (strlen($idJanjiInt) == 2) {
                    $id_janji = "JT0" . ($idJanjiInt + 1);
                } else if (strlen($idJanjiInt) == 3) {
                    $id_janji = "JT" . ($idJanjiInt + 1);
                }
            }
        } else {
            $id_janji = "JT001";
        }


        $data = array(
            'id_janji' => $id_janji
        );
        $this->load->view('admin/templates/header');
        $this->load->view('admin/templates/sidebar');
        $this->load->view('admin/v_tambah_janji', $data);
        $this->load->view('admin/templates/footer');
    }

    public function aksitambah_janji()
    {

        $id_janji = $this->input->post('id_janji');
        $nip = $this->input->post('nip');
        $id_opd = $this->input->post('id_opd');
        $hari_tgl = $this->input->post('hari_tgl');
        $atas_nama = $this->input->post('atas_nama');
        $perihal = $this->input->post('perihal');
        $status = $this->input->post('status');
        $no_telpon_user = $this->input->post('no_telpon_user');
        $jam = $this->input->post('jam');

        $data = array(
            'id_janji' => $id_janji,
            'nip' => $nip,
            'id_opd' => $id_opd,
            'hari_tgl' => $hari_tgl,
            'atas_nama' => $atas_nama,
            'perihal' => $perihal,
            'status' => $status,
            'no_telpon_user' => $no_telpon_user,
            'jam' => $jam,

        );

        $this->m_janji_temu->tambah_janji($data, 'aturjanji');

        redirect('admin/janji_temu/tampil_janji');
    }

    public function hapus_janji($id)
    {
        $where = array(
            'id_janji' => $id
        );

        $this->m_janji_temu->delete_janji($where, 'aturjanji');
        redirect('admin/janji_temu/tampil_janji');
    }

    public function edit_janji($id)
    {
        // kode yang berfungsi untuk menyimpan id user ke dalam array $where pada index array benama id
        $where = array('id_janji' => $id);
        // kode di bawah ini adalah kode yang mengambil data user berdasarkan id dan disimpan kedalam array $data dengan index bernama user
        $data['aturjanji'] = $this->m_janji_temu->edit($where, 'aturjanji')->result();
        // kode ini memuat vie edit dan membawa data hasil query diatas
        $this->load->view('admin/templates/header');
        $this->load->view('admin/templates/sidebar');
        $this->load->view('admin/edit_janji', $data);
        $this->load->view('admin/templates/footer');
    }

    public function detail($id)
    {
        $where = array('id_janji');
        $detail = $this->m_janji_temu->detail_data($id);
        $data['detail'] = $this->m_janji_temu->detail_data($id);
        $this->load->view('admin/templates/header');
        $this->load->view('admin/templates/sidebar');
        $this->load->view('admin/v_detail_janji', $data);
        $this->load->view('admin/templates/footer');
    }

    public function update_janji()
    {


        $id_janji = $this->input->post('id_janji');
        $nip = $this->input->post('nip');
        $id_opd = $this->input->post('id_opd');
        $hari_tgl = $this->input->post('hari_tgl');
        $atas_nama = $this->input->post('atas_nama');
        $perihal = $this->input->post('perihal');
        $status = $this->input->post('status');
        $no_telpon_user = $this->input->post('no_telpon_user');
        $jam = $this->input->post('jam');


        // brikut ini adalah array yang berguna untuk menjadikan variabel diatas menjadi 1 variabel yang nantinya akan disertakan ke dalam query update pada model
        $data = array(
            'id_janji' => $id_janji,
            'nip' => $nip,
            'id_opd' => $id_opd,
            'hari_tgl' => $hari_tgl,
            'atas_nama' => $atas_nama,
            'perihal' => $perihal,
            'status' => $status,
            'no_telpon_user' => $no_telpon_user,
            'jam' => $jam,

        );

        // kode yang berfungsi menyimpan id user ke dalam array $where pada index array bernama id
        $where = array(
            'id_janji' => $id_janji
        );

        // kode untuk melakukan query update dengan menjalankan method update_data() 
        $this->m_janji_temu->update_janji_temu($where, $data, 'aturjanji');
        // baris kode yang mengerahkan pengguna ke link base_url()crud/index/
        redirect('admin/janji_temu/tampil_janji');
    }
}
