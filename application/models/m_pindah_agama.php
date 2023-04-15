<?php

class M_pindah_agama extends CI_Model{
    public function tampil_data()
    {
        return $this->db->get('tb_pindah_agama');
    }
    
    public function input_data($data, $table){
        $this->db->insert($table, $data);
    }

    public function detail_data($id = NULL)
    {
        $query = $this->db->get_where('tb_pindah_agama',array('id'=> $id))->row();
        return $query;
    }
}
