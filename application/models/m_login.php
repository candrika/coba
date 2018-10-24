<?php

class m_login extends CI_Model{

    function cek_user($username, $password){

        echo $username;
        echo $password;
        $q = $this->db->get_where('usersystem', array('username' => $username, 'password' => $password));
        // echo $this->db->last_query();
        if ($q->num_rows() > 0) {
            $r = $q->row();
            // if($r->idcompany==null)
            // {
            //     return array('success' => false, 'msg' => 'ID atau Password Salah');
            //     exit;
            // }

            $datasession =array(
                'userid' => $r->user_id,
                'username' => $r->username,
                'realname' => $r->realname,
                'group_id' => $r->group_id
            );
            $this->session->set_userdata($datasession);
            // print_r();
            // return array('success'=>true,)
            redirect('/dashboard/index');
            
            
        }else{
            redirect('/login');
        }
        
    }
}