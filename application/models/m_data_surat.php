<?php 
//  berfungsi untuk melayani segala query CRUD database
class m_data_surat extends CI_Model{
  // function untuk mengambil keseluruhan baris data dari tabel user
	public function tampil_surat(){
		return $this->db->get('surat');
    }

    function tambah_surat($data,$table){
      $this->db->insert($table,$data);
      }

      function hapus_surat($where,$table){
        $this->db->where($where);
        $this->db->delete($table);
    }

    function edit_surat($where,$table){		
      return $this->db->get_where($table,$where);
  }
  public function tampil_surat(){
    return $this->db->get('surat');
  }
  function tampil_surat_akhir()
  {
  $this->db->order_by('id_surat', 'DESC');
  return $this->db->get('surat', 1);
  }
  function hapus_surat($where,$table){
    $this->db->where($where);
    $this->db->delete($table);
}

function edit($where,$table){		
  return $this->db->get_where($table,$where);
}
// method untuk mengupdate data ke dalam database 
  function update($where,$data,$table){
  $this->db->where($where);
  $this->db->update($table,$data);
}	
}