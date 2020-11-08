<?php

class App
{
    private $controller = "Home";
    private $method     = "index";
    private $params     = [];

    function __construct()
    {
        $url = $this->parse_url();

        // controller
        if(isset($url[0])){
            // cek file controller
            if(file_exists('../app/controllers/'.$url[0].".php")){
                $this->controller = $url[0];
            } else {
                $this->controller = "Error_page";
            }
            unset($url[0]);
        }

        require_once '../app/controllers/'.$this->controller.'.php';
        $this->controller = new $this->controller;

        // method
        if(isset($url[1])){
            // cek apakah method ada di controller atau tidak.
            if(method_exists($this->controller, $url[1])){
                $this->method = $url[1];
            } else {
                $this->controller = "Error_page";
                require_once '../app/controllers/'.$this->controller.'.php';
                
                $this->controller = new $this->controller;
                $this->method = "not_found";
            }
            unset($url[1]);
        }

        if(!empty($url)){
            $this->params = array_values($url);
        }
        
        // var_dump($this->controller);
        // echo json_encode(["controller"=>$this->controller, "method"=>$this->method, "params"=>$this->params]);

        call_user_func_array([$this->controller, $this->method], $this->params);

    }

    function parse_url()
    {
        if(isset($_GET['url'])){
            $url = rtrim($_GET['url'], '/');
            $url = filter_var($url, FILTER_SANITIZE_URL);
            
            $urlArray = explode("/", $url);

            return $urlArray;
        }
    }
}