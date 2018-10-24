<?php
defined('BASEPATH') OR exit('No direct script access allowed');
class master extends CI_Controller{
    
        function __construct(){
		    parent::__construct();		
		    // $this->load->model('m_data');
		    $this->load->helper('url');
            $this->load->helper('form');
            $this->load->model('m_menusystem','menu');
        
        }
        
        public function coba_menu(){
            $userlogin = $this->db->get('usersystem')->result();
            // print_r($data);
            foreach ($userlogin as $key => $value) {
                # code...
                $data['data']['user'] = $value->username;
            }

            $data['main_menu'] = $this->menu->main_menu();
            // print_r($mataim_menu);
            
            $this->load->view('coba_menu',$data);
        } 
        
        public function menu_menu(){
            $userlogin = $this->db->get('usersystem')->result();
            // print_r($data);
            foreach ($userlogin as $key => $value) {
                # code...
                $data['data']['user'] = $value->username;
            }

            $data['main_menu'] = $this->menu->main_menu();
            // print_r($mataim_menu);
            
            $this->load->view('coba_menu',$data);
        }
       
}
?>