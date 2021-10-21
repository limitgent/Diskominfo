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
        $where = array('id_janji' => $id);


        $this->db->where($where);
        $this->db->update('aturjanji');
        $data['id_janji'] = $this->M_janji_temu->getAll('id_janji')->result();
        $data['nip'] = $this->M_janji_temu->getAll('nip')->result();
        $data['id_opd'] = $this->M_janji_temu->getAll('id_opd')->result();
        $data['hari_tgl'] = $this->M_janji_temu->getAll('hari_tgl')->result();
        $data['atas_nama'] = $this->M_janji_temu->getAll('atas_nama')->result();
        $data['perihal'] = $this->M_transaksi->getAll($where, 'perihal')->result();
        $data['status'] = $this->M_transaksi->edit($where, 'status')->result();
        $data['no_telpon_user'] = $this->M_transaksi->getAll($where, 'no_telpon_user')->result();
        $data['jam'] = $this->M_transaksi->getAll($where, 'jam')->result();

        $this->load->view('templates/header');
        $this->load->view('templates/sidebar');
        $this->load->view('admin/janji_temu/edit_janji', $data);
        $this->load->view('templates/footer');
    }
}
