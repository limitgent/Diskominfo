<?php
defined('BASEPATH') or exit('No direct script access allowed');

class c_aturjanji extends CI_Controller
{

    function __construct()
    {
        parent::__construct();
        // ini adalah function untuk memuat model bernama m_data
        $this->load->model('m_aturjanji');
    }

    function index()
    {
        // ini adalah variabel array $data yang memiliki index user, berguna untuk menyimpan data 
        $data['aturjanji'] = $this->m_aturjanji->getAll('aturjanji')->result();
        $data['karyawan'] = $this->m_aturjanji->getAll('karyawan')->result();

        $this->load->view('user/templates/header');
        $this->load->view('user/v_aturjanji', $data);
    }

    //  public function edit($id)
    //{
    //  $where = array('id_paket' => $id);
    // $data['jenis_paket'] = $this->M_data_paket->getAll('jenis_paket')->result();
    //  $data['isi_paket'] = $this->M_data_paket->getAll('isi_paket')->result();
    // $data['durasi_paket'] = $this->M_data_paket->getAll('durasi_paket')->result();
    // $data['barang'] = $this->M_data_paket->getAll('barang')->result();
    // $data['paket'] = $this->M_data_paket->edit($where, 'paket')->result();

    // $this->load->view('templates/header');
    // $this->load->view('templates/sidebar');
    // $this->load->view('admin/paket/v_edit', $data);
    // $this->load->view('templates/footer');
    //}

    public function tambah_janji()
    {
        $jumlahJanji = $this->m_aturjanji->tampil_janji()->num_rows();
        if ($jumlahJanji > 0) {
            $lastId = $this->m_aturjanji->tampil_janji_akhir()->result();

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

        // $where = $this->input->get('nip');
        // $resultKaryawan = $this->m_aturjanji->tampil_karyawan_where($where)->result();

        $data = array(
            'id_janji' => $id_janji,
            //   'karyawan' => $resultKaryawan

        );

        $this->load->view('user/templates/header');
        $this->load->view('user/v_aturjanji', $data);
    }
    public function aksitambah_janji()
    {

        $id_janji = $this->input->post('id_janji');
        $nip = $this->input->post('nip');
        $hari_tgl = $this->input->post('hari_tgl');
        $atas_nama = $this->input->post('atas_nama');
        $perihal = $this->input->post('perihal');
        $no_telpon_user = $this->input->post('no_telpon_user');
        $jam = $this->input->post('jam');
        $instansi = $this->input->post('instansi');

        $data = array(
            'id_janji' => $id_janji,
            'nip' => $nip,
            'hari_tgl' => $hari_tgl,
            'atas_nama' => $atas_nama,
            'perihal' => $perihal,
            'no_telpon_user' => $no_telpon_user,
            'jam' => $jam,
            'instansi' => $instansi,

        );

        $this->m_aturjanji->tambah_janji($data, 'aturjanji');
        $this->session->set_flashdata('pesan', '
        <div class="alert alert-success" role="alert">
        <strong>Selamat!</strong> Anda Berhasil Menambahkan Janji Temu. Harap Menunggu Konfirmasi Di Nomor WhatsApp Anda.
</div>
        ');

        redirect('user/C_user');
    }

    //public function detail($id)
    //{
    //  $this->load->model('M_data_paket');
    //$detail = $this->M_data_paket->detail_data($id);
    // $data['detail'] = $detail;
    //  $data['jenis'] = $this->db->get('jenis_paket')->result();
    //   $data['isi'] = $this->db->get('isi_paket')->result();
    //   $data['durasi'] = $this->db->get('durasi_paket')->result();
    //  $data['barang'] = $this->db->get('barang')->result();

    // $this->load->view('templates/header');
    // $this->load->view('templates/sidebar');
    // $this->load->view('admin/paket/v_detailpaket', $data);
    // $this->load->view('templates/footer');
    //}

    // public function update()
    //{
    // merekam id sebagai parameter where saat update
    //  $where = array('id_paket' => $this->input->post('id_paket'));
    // menentukan siapa dan kapan baris data ini diperbarui
    // $updated_by = "admin";
    // $updated_at = date('Y-m-d H:i:s');
    // $gambar_paket = null;
    // $gambar_paket = $_FILES['gambar'];
    // memeriksa apakah admin mengganti gambar atau tidak
    // if ($gambar_paket) {
    //   $config['allowed_types'] = 'gif|jpg|png';
    // $config['max_size'] = '2048';
    // $config['upload_path'] = './assets/files/gambar_paket/';

    // $this->load->library('upload', $config);
    // if ($gambar_paket == '') {
    //   $gambar_paket = null;
    // } else {
    //   if (!$this->upload->do_upload('gambar')) {
    //     $this->session->set_flashdata('message', '<div class="alert alert-danger" role="alert">
    // Gagal menambah foto!
    //</div>');
    //} else {
    //  $gambar_paket = $this->upload->data('file_name');
    //}
    //}
    //}
    // jika tidak memilih gambar

    //if ($gambar_paket) {
    //  $data = array(
    //    'nama_paket' => $this->input->post('nama_paket'),
    //  'id_jenis_paket' => $this->input->post('nama_jenis_paket'),
    //'id_isi_paket' => $this->input->post('nama_isi_paket'),
    //'harga' => $this->input->post('harga'),
    //'gambar' => $gambar_paket,
    //'id_durasi' => $this->input->post('durasi_paket'),
    //'id_barang' => $this->input->post('nama_barang'),
    //'status' => $this->input->post('status')
    //);
    //} else {
    //  $data = array(
    //    'nama_paket' => $this->input->post('nama_paket'),
    //  'id_jenis_paket' => $this->input->post('nama_jenis_paket'),
    // 'id_isi_paket' => $this->input->post('nama_isi_paket'),
    // 'harga' => $this->input->post('harga'),
    // 'id_durasi' => $this->input->post('durasi_paket'),
    // 'id_barang' => $this->input->post('nama_barang'),
    // 'status' => $this->input->post('status')
    //);
    //}


    // menjalankan method update pada model promo
    //$this->M_data_paket->update($where, $data, 'paket');

    // mengirim pesan berhasil update data
    //$this->session->set_flashdata('pesan', '
    //<div class="alert alert-success alert-dismissible fade show" role="alert">
    //Anda <strong>berhasil</strong> mengubah data.
    //<button type="button" class="close py-auto" data-dismiss="alert" aria-label="Close">
    //<span aria-hidden="true">&times;</span>
    // </button>
    //</div>
    //');
    // mengarahkan ke halaman tabel promo
    //    redirect('admin/C_paket');
    //}

    // method yang berfungsi menghapus data
    //public function destroy($id)
    //{
    // deklarasi $where by id
    //  $where = array('id_paket' => $id);
    // menjalankan fungsi delete pada model_promo
    //$this->M_data_paket->delete($where, 'paket');
    // mengirim pesan berhasil dihapus
    //$this->session->set_flashdata('pesan', '
    //<div class="alert alert-danger alert-dismissible fade show" role="alert">
    //Anda <strong>berhasil</strong> menghapus data.
    //<button type="button" class="close py-auto" data-dismiss="alert" aria-label="Close">
    //<span aria-hidden="true">&times;</span>
    //</button>
    //</div>
    //');
    // mengarahkan ke halaman tabel promo
    //redirect('admin/C_paket');
    //}
}
