<?php

class M_rohaniawan extends CI_Model{
    public function tampil_data()
    {
        return $this->db->get('tb_rohaniawan');
    }
    
    public function input_data($data, $table){
        $this->db->insert($table, $data);
    }

    public function detail_data($id = NULL)
    {
        $query = $this->db->get_where('tb_rohaniawan',array('id'=> $id))->row();
        return $query;
    }
}
