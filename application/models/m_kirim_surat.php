<?php
class m_kirim_surat extends CI_Model{
    public function tampil_kirim_surat(){
        return $this->db->get('surat');
    }
    function kirim_surat ($surat,$table){
        $this->db->insert($table,$surat);
    }
}