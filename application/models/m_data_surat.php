<?php 
//  berfungsi untuk melayani segala query CRUD database
class m_data_surat extends CI_Model{
  // function untuk mengambil keseluruhan baris data dari tabel user
	
  public function tampil_surat(){
		return $this->db->get('surat');
    }

    function tambah_surat($surat,$table){
      $this->db->insert($table,$surat);
      }
    function tambah_surat_where($where, $table)
      {
        $fields = array(
          "opd.nama_opd",
           
        );
    
        $this->db->select($fields);
        $this->db->from($table);
        $this->db->join('opd', 'opd.nama_opd = surat.id_surat');
        $this->db->where($where);
        return $this->db->get();
      }

    function hapus_surat($where,$table){
        $this->db->where($where);
        $this->db->delete($table);
      }

    function edit_surat($where,$table){		
        return $this->db->get_where($table,$where);
      }
    function tampil_surat_akhir()
    {
        $this->db->order_by('id_surat', 'DESC');
        return $this->db->get('surat', 1);
    }
    function update_data_surat($where, $surat, $table)
    {
        $this->db->where($where);
        $this->db->update($table, $surat);
    }
    function edit($where,$table){		
      return $this->db->get_where($table,$where);
    }
// method untuk mengupdate data ke dalam database 
  function update($where,$surat,$table){
  $this->db->where($where);
  $this->db->update($table,$surat);
}	
}