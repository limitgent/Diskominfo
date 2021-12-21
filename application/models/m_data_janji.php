<?php
//  berfungsi untuk melayani segala query CRUD database
class M_data_janji extends CI_Model
{

  // FORM DIVISI
  public function tampil_divisi()
  {
    return $this->db->get('divisi');
  }
  function tampil_divisi_akhir()
  {
    $this->db->order_by('id_divisi', 'DESC');
    return $this->db->get('divisi', 1);
  }

  function tambah_divisi($data, $table)
  {
    $this->db->insert($table, $data);
  }

  function delete_divisi($where, $table)
  {
    $this->db->delete($table, $where);
  }
  function edit_divisi($where, $table)
  {
    return $this->db->get_where($table, $where);
  }
  function update_data_divisi($where, $data, $table)
  {
    $this->db->where($where);
    $this->db->update($table, $data);
  }
  function tambah_karyawan($data, $table)
  {
    $this->db->insert($table, $data);
  }

  function tampil_karyawan()
  {
    return $this->db->get('karyawan');
  }
  function delete_karyawan($where, $table)
  {
    $this->db->delete($table, $where);
  }
  function tampil_karyawan_where($where, $table)
  {
    $fields = array(
      "karyawan.nip",
      "divisi.id_divisi",
      "divisi.nama_divisi",
      "karyawan.nama_karyawan",
      "karyawan.jabatan",
      "karyawan.foto",
      "karyawan.status",

    );

    $this->db->select($fields);
    $this->db->from($table);
    $this->db->join('divisi', 'karyawan.id_divisi = divisi.id_divisi');
    $this->db->where($where);
    return $this->db->get();
  }
  function edit_karyawan($where, $table)
  {
    return $this->db->get_where($table, $where);
  }
  function update_data_karyawan($where, $data, $table)
  {
    $this->db->where($where);
    $this->db->update($table, $data);
  }
}
