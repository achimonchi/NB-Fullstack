<?php

class Mahasiswa extends Controller
{
    function index()
    {
        $data = [
            "title" => "Data Mahasiswa",
            "users" => $this->model("User_model")->get_user()
        ];

        $this->view("templates/header", $data);
        $this->view("templates/navbar", $data);
        $this->view("mahasiswa/index", $data);
        $this->view("templates/footer");
    }

    function detail($id)
    {
        $data = [
            "title" => "Data Mahasiswa",
            "user" => $this->model("User_model")->get_user_id($id)
        ];

        $this->view("templates/header", $data);
        $this->view("templates/navbar", $data);
        $this->view("mahasiswa/detail", $data);
        $this->view("templates/footer");
    }
}