<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Home extends CI_Controller
{
    public function __construct()
    {
        parent::__construct();
        $this->load->model("General_model");
        $this->load->helper('globals');
        $this->load->library("form_validation");
        $this->load->helper("url");
    }
    public function index(){
        $data['judul'] = "ZeeiDeveloper Official ";
        $this->load->view('Home/index', $data);
        
    }
}