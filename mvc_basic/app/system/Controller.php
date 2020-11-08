<?php

class Controller
{
    public function view($view, $data=[])
    {
        require_once '../app/views/'.$view.".php";
    }

    public function wrapper($view, $data=[])
    {
        $this->view("templates/header", $data);
        $this->view("templates/navbar");
        $this->view($view, $data);
        $this->view("templates/footer");
    }

    public function model($model)
    {
        require_once '../app/models/'.$model.'.php';
        return new $model;
    }
}