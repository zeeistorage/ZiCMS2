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

    // ================== DATA PRELOADER N LOGO MOBILE ====================
    // file style.css => #preloader{background:url(../pemanis/img/preloader.gif)
    // file main.js => <img src='pemanis/img/logo.png'/> 
    // ================== DATA PRELOADER N LOGO MOBILE ====================

    public function index(){
        $data['judul'] = "ZeeiDeveloper Official ";
        $data['url'] = "./"; //localhost
        // $data['url'] = "https://cdn.jsdelivr.net/gh/zeeistorage/ZiCMS2";
        $this->load->view('Home/header', $data);
        $this->load->view('Home/menu_top_home', $data);
        $this->load->view('Home/index', $data);
        $this->load->view('Home/footer', $data);
        
    }
}