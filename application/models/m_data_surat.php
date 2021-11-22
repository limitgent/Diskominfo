<?php 
//  berfungsi untuk melayani segala query CRUD database
class M_data_surat extends CI_Model{
  
    // FORM DIVISI
  public function tampil_surat()
  {
    return $this->db->get('surat');
  }
  function tampil_surat_akhir()
  {
    $this->db->order_by('id_surat', 'DESC');
    return $this->db->get('surat', 1);
  }
  
  function tambah_surat($data, $table)
   {
       $this->db->insert($table, $data);
   }

   function hapus_surat($where, $table)
  {
    $this->db->delete($table, $where);
  }
  function edit_surat($where,$table){		
    return $this->db->get_where($table,$where);
  }
  function update_data_surat($where,$data,$table){
    $this->db->where($where);
    $this->db->update($table,$data);
  }	
  function tambah_surat ($data, $table)
  {
    $this->db->insert($table, $data);
  }
  function tampil_surat()
  {
    return $this->db->get('surat');
  }
  function delete_surat($where, $table)
  {
    $this->db->delete($table, $where);
  }
  function tampil_surat($where, $table)
  {
    $fields = array(
      "id_surat",
      "id_opd",
      "tgl_kirim",
      "tgl_terima",
      "perihal",
      "file",
    );
  {
    function edit_surat($where,$table){		
      return $this->db->get_where($table,$where);
    } 
    function update_data_surat($where,$data,$table){
      $this->db->where($where);
      $this->db->update($table,$data);
  }
}