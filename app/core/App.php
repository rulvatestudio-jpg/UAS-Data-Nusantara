<?php
// app/core/App.php

class App {
    protected $controller = 'Home';
    protected $method = 'index';
    protected $params = [];

    public function __construct() {
        $url = $this->parseURL();

        // 1. Cek File Controller
        // Gunakan __DIR__ untuk memastikan alamat folder controllers benar
        // __DIR__ . '/../controllers/' artinya: dari folder core, mundur satu langkah (ke app), lalu masuk controllers
        if( isset($url[0]) && file_exists(__DIR__ . '/../controllers/' . ucfirst($url[0]) . '.php') ) {
            $this->controller = ucfirst($url[0]);
            unset($url[0]);
        }

        // Panggil controller dengan jalur absolut
        require_once __DIR__ . '/../controllers/' . $this->controller . '.php';
        
        // Instansiasi (hidupkan) controllernya
        $this->controller = new $this->controller;

        // 2. Cek Method
        if( isset($url[1]) ) {
            if( method_exists($this->controller, $url[1]) ) {
                $this->method = $url[1];
                unset($url[1]);
            }
        }

        // 3. Kelola Parameter
        if( !empty($url) ) {
            $this->params = array_values($url);
        }

        // Jalankan controller & method, serta kirimkan params jika ada
        call_user_func_array([$this->controller, $this->method], $this->params);
    }

    public function parseURL() {
        if( isset($_GET['url']) ) {
            $url = rtrim($_GET['url'], '/');
            $url = filter_var($url, FILTER_SANITIZE_URL);
            $url = explode('/', $url);
            return $url;
        }
    }
}