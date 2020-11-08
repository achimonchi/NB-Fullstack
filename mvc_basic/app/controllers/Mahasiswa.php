<?php

class Mahasiswa extends Controller
{
    function index()
    {
        $data = [
            'title'=>'Halaman Mahasiswa', 
            'mahasiswa'=> $this->model("Mahasiswa_model")->get_students()
        ];
        $this->wrapper('mahasiswa/index', $data);
    }

    function detail($id)
    {
        $data = [
            'title'=>'Halaman Mahasiswa', 
            'mahasiswa' => $this->model("Mahasiswa_model")->get_user_id($id),
        ];
        $this->wrapper('mahasiswa/detail', $data);
    }
}