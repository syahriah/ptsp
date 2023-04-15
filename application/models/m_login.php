<?php

class M_login extends CI_Model{
    
    public function cek_login()
    {
        $email      = set_value('email');
        $password   = set_value('password');

        $result   = $this->db->where('email',$email)
                             ->where('password',$password)
                             ->limit(1)
                             ->get('tb_user');
        if($result->num_rows()>0){
            return $result->row();
        } else {
            return FALSE;
        }
    }

    public function tampil_data()
    {
        return $this->db->get('tb_user');
    }

    public function input_data($data, $table){
        $this->db->insert($table, $data);
    }

    public function detail_data($id = NULL)
    {
        $query = $this->db->get_where('tb_user',array('id_user'=> $id_user))->row();
        return $query;
    }

    

}
