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
  function edit($where,$table){		
    return $this->db->get_where($table,$where);
  }
  function update_data_surat($where,$data,$table){
    $this->db->where($where);
    $this->db->update($table,$data);
  }	
 
}