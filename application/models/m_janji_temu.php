<?php
//  berfungsi untuk melayani segala query CRUD database
class m_janji_temu extends CI_Model
{

    public function getAll($table)
    {
        return $this->db->get($table);
    }

    public function detail_data($id = NULL)
    {
        $query = $this->db->get_where('aturjanji', array('id_janji' => $id))->result();
        return $query;
    }

    public function tampil_janji()
    {
        return $this->db->get('aturjanji');
    }
    function tampil_janji_akhir()
    {
        $this->db->order_by('id_janji', 'DESC');
        return $this->db->get('aturjanji', 1);
    }

    function tambah_janji($data, $table)
    {
        $this->db->insert($table, $data);
    }

    function delete_janji($where, $table)
    {
        $this->db->delete($table, $where);
    }
    function update_janji_temu($where, $data, $table)
    {
        $this->db->where($where);
        $this->db->update($table, $data);
    }
    function edit($where, $table)
    {
        return $this->db->get_where($table, $where);
    }
}
