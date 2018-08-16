<?php

// App Core Class
// Crea URL & carga core controller
// Formatea URL - /controller/method/params

Class Core{

    protected $currentController = 'Pages';
    protected $currentMethod = 'index';
    protected $params = [];

    public function __construct(){
        
        // print_r($this->getUrl());

        $url = $this->getUrl();

        //checa en controllers en busca de el primer index
        if(file_exists('../app/controllers/' . ucwords($url[0]) . '.php')){//sale de public para entrar en app
            
            //si existe se establece como controller
            $thisl->currentController = ucwords($url[0]);
            //Unset 0 index
            unset($url[0]);

        }

        //requerir controller
        require_once '../app/controllers/' . $this->currentController . '.php';

        //Se instancia clase controller
        $this->currentController = new $this->currentController;


    }

    public function getUrl(){
        
        if(isset($_GET['url'])){

            $url = rtrim($_GET['url'], '/');//separa un array segun el caracter(s) seleccionado, rtrim($var, $chars)
            $url = filter_var($url, FILTER_SANITIZE_URL);// filtra caracteres de Url
            $url = explode('/', $url);

            return $url;

        }

    }

}