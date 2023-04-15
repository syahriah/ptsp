<?php

class M_pesan extends CI_Model{
    
    public function tampil_data()
    {
        return $this->db->get('tb_pesan');
    }
    
    public function input_data($data, $table){
        $this->db->insert($table, $data);
    }

    
}
