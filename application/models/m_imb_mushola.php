<?php

class M_imb_mushola extends CI_Model{
    public function tampil_data()
    {
        return $this->db->get('tb_imb_mushola');
    }
    
    public function input_data($data, $table){
        $this->db->insert($table, $data);
    }

    public function detail_data($id = NULL)
    {
        $query = $this->db->get_where('tb_imb_mushola',array('id'=> $id))->row();
        return $query;
    }

}
