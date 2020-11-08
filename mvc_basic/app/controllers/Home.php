<?php

class Home extends Controller
{
    function __construct()
    {
        // parent::__construct();
        // echo "Controller Home";
    }

    function index()
    {
        $data = ['title'=>'Halaman Home'];
        $this->wrapper('home/index', $data);
    }

    function about($nama="NooBee")
    {
        $data=["title"=>"Halaman About","nama"=>$nama];
        $this->wrapper('home/about', $data);
    }
}