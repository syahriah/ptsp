<?php

class M_ubah_status_mushola extends CI_Model{
    public function tampil_data()
    {
        return $this->db->get('tb_ubah_status');
    }
    
    public function input_data($data, $table){
        $this->db->insert($table, $data);
    }

    public function detail_data($id = NULL)
    {
        $query = $this->db->get_where('tb_ubah_status',array('id'=> $id))->row();
        return $query;
    }
}
