<?php

class Home extends CI_Controller
{
    function __construct()
    {
        parent::__construct();
        $this->load->model('Admin_model');
    }

    function index()
    {
        $this->load->view('templates/header');
        $this->load->view('home/index');
        $this->load->view('templates/footer');
    }

    function about($nama="reyhan", $umur="21")
    {
        $data = [
            "nama" => $nama,
            "umur" => $umur,
            "admin" => $this->Admin_model->get_all(),
        ];

        $this->load->view('templates/header');
        $this->load->view('home/about', $data);
        $this->load->view('templates/footer');
    }
}