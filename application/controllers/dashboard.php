<?php
defined('BASEPATH') OR exit('No direct script access allowed');

// require './vendor/autoload.php';
class dashboard extends CI_Controller{
        function __construct(){
		    parent::__construct();		
		    // $this->load->model('m_data');
		    $this->load->helper('url');
            $this->load->helper('form');
            $this->load->model('m_login','login');
            $this->load->model('m_menusystem','menu');
        
        }

        // function header(){
        //     $this->load->view('header');
        // }
        
        public function index(){
            $userlogin = $this->db->get('usersystem')->result();
            // print_r($data);
            foreach ($userlogin as $key => $value) {
                # code... 
                $data['data']['user']  = $value->username;
                $data['data']['image'] = $value->image;
            }

            $data['main_menu'] = $this->menu->main_menu();
            // print_r($mataim_menu);
            // return $data;
            $this->load->view('header',$data);
            $this->load->view('side',$data);
            $this->load->view('dashboard',$data);
            $this->load->view('footer');
        }
       
    } 
?>