<?php

class M_rumah_ibadat extends CI_Model{
    public function tampil_data()
    {
        return $this->db->get('tb_rumah_ibadat');
    }
    
    public function input_data($data, $table){
        $this->db->insert($table, $data);
    }

    public function detail_data($id = NULL)
    {
        $query = $this->db->get_where('tb_rumah_ibadat',array('id'=> $id))->row();
        return $query;
    }
}
