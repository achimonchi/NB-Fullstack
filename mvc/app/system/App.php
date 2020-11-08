<?php

class App 
{
    // buat default controller, method, dan params
    protected $controller   = 'Home';
    protected $method       = 'index';
    protected $params       = [];

    public function __construct()
    {
        $url = $this->parse_url();
        // controller
        if(isset($url[0])){
            if(file_exists('../app/controllers/'.$url[0].".php")){
                $this->controller = $url[0];
                // hapus controller dari url
                unset($url[0]);
                
            }
        }
        
        require_once '../app/controllers/'.$this->controller.'.php';
        $this->controller = new $this->controller;
            
        // method
        if(isset($url[1])){
            // cek apakah method ada di controller atau tidak
            if(method_exists($this->controller, $url[1])){
                $this->method = $url[1];
                unset($url[1]);
                
            }
        }
        
        // params
        if(!empty($url)){
            $this->params = array_values($url);
        }
               

        // jalankan controller, method, dna parameter
        call_user_func_array([$this->controller, $this->method], $this->params);
    }

    // parsing URL
    public function parse_url()
    {
        if(isset($_GET['url'])){
            // hapus garis / di akhir
            $url = rtrim($_GET['url'],'/');

            // filter dari url yang tidak aman. misal ', -, dll..
            $url = filter_var($url, FILTER_SANITIZE_URL);

            // untuk memecah url menjadi array berdasarkan /
            $url = explode("/",$url);

            return $url;
        }
    }
}