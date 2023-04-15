<?php

class M_departemen extends CI_Model{
    public function tampil_data()
    {
        return $this->db->get('tb_departemen');
    }
    
    public function input_data($data, $table){
        $this->db->insert($table, $data);
    }
}
