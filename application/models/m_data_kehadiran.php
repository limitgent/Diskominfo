<?php 
//  berfungsi untuk melayani segala query CRUD database
class M_data_kehadiran extends CI_Model{
  
    // FORM DIVISI
  public function tampil_divisi()
  {
    return $this->db->get('divisi');
  }
  public function tampil_karyawan($id_divisi,$table)
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
      $this->db->where($id_divisi);
      return $this->db->get();
    }
    public function tampil_allkaryawan()
    {
      return $this->db->get('karyawan');
    }
    function update_status_karyawan($where,$data,$table){
        $this->db->where($where);
        $this->db->update($table,$data);
      }	
      public function tampil_karyawan_availabel()
  {
    $status = 'Dikantor';
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
      $this->db->from('karyawan');
      $this->db->join('divisi', 'karyawan.id_divisi = divisi.id_divisi');
      $this->db->where('karyawan.status', $status);
      $query = $this->db->get();
      return $query;
  }
  function tampil_karyawan_where($where)
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
    $this->db->from('karyawan');
    $this->db->join('divisi', 'karyawan.id_divisi = divisi.id_divisi');
    $this->db->where('karyawan.id_divisi', $where);
    return $this->db->get();
  }
  }
      
    
  
