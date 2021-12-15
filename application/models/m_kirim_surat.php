<?php
class m_kirim_surat extends CI_Model{
    public function tampil_kirim_surat(){
        return $this->db->get('surat');
    }
    function kirim_surat ($surat,$table){
        $this->db->insert($table,$surat);
        $fields = array(
            "departemen.departemen",
        );
        $this->db->select($fields);
        $this->db->from($table);
        $this->db->join('departemen', 'departemen.departemen = surat.id_opd');
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
    function tampil_isi_kirim_surat($where,$table){		
        return $this->db->get_where($table,$where);
      }
    // //function tampil_surat_akhir()
    // {
    //     $this->db->order_by('id_surat', 'DESC');
    //     return $this->db->get('surat', 1);
    // } 
    function update($where,$surat,$table){
        $this->db->where($where);
        $this->db->update($table,$surat);
      }	
      function edit($where,$table){		
        return $this->db->get_where($table,$where);
      }
}