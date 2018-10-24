<?php
defined('BASEPATH') OR exit ('No direct script access allowed');

class login extends CI_Controller{

    function __construct(){
        parent::__construct();
        $this->load->helper('url');
        $this->load->helper('form');
        $this->load->model('m_login');
    }

    function index(){
        $this->load->view('login'); 
    }

    function auth(){
       $username = $this->input->post('email');
       $password = $this->input->post('pass');
       $this->m_login->cek_user($username,$password);
    }

    function logout(){
        $this->session->sess_destroy();
        redirect('/login');
    }
}