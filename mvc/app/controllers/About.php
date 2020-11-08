<?php

class About extends Controller
{
    public function index()
    {
        $data = [
            "title" => "Halaman About",
        ];
        $this->view("templates/header", $data);
        $this->view("templates/navbar", $data);
        $this->view("about/index");
        $this->view("templates/footer");
    }

    public function page()
    {
        $this->view("about/page");
    }
}