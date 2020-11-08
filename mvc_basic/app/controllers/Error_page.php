<?php

class Error_page extends Controller
{
    function __construct()
    {
        // parent::__construct();
        // echo "Controller Error";
    }

    function index()
    {
        $data = ['title'=>'Halaman Home'];
        $this->wrapper('error/index', $data);
    }

    function not_found()
    {
        echo "Your URL Access is not found !";
    }
}