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
            $this->currentController = ucwords($url[0]);
            //Unset 0 index, para cambiar el index 0 del array
            unset($url[0]);

        }

        //requerir controller
        require_once '../app/controllers/' . $this->currentController . '.php';

        //Se instancia clase controller
        $this->currentController = new $this->currentController;

        //checar por index 2 de url[]
        if (isset($url[1])) {
            //checa si el metodo existe en el controller
            if (method_exists($this->currentController, $url[1])) {

                $this->currentMethod = $url[1];

                //unset index 1
                unset($url[1]);
                
            }

        }

        // echo $this->currentMethod;//para checar el metodo que se devuelve mediante la url
        
        //obtener parametros (metodos en el controller)
        $this->params = $url ? array_values($url) : [];//valida los valores de $ul, si es falso los deposita en un array vacio

        // llama un callbac con un array de parametros
        call_user_func_array([$this->currentController, $this->currentMethod], $this->params);
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