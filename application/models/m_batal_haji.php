<?php

class M_batal_haji extends CI_Model{
    public function tampil_data()
    {
        return $this->db->get('tb_batal_haji');
    }
    
    public function input_data($data, $table){
        $this->db->insert($table, $data);
    }

    public function detail_data($id = NULL)
    {
        $query = $this->db->get_where('tb_batal_haji',array('id'=> $id))->row();
        return $query;
    }
    
}
