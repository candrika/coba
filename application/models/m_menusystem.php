<?php
class m_menusystem extends CI_Model{
    
    function main_menu(){
        return $this->db->get_where('sys_menu',array('parent'=>0))->result(); 
    }

    function sub_menu(){
        return $this->db->get_where();
    }
}
?>