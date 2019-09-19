<?php

// Controller base, 
// carga models y vistas

class Controller {

    //cargar modelo
    public function model($model){
        
        //requerir archivo de model
        require_once '../app/models/' . $model . '.php';

        // instanciar el model
        return new $model();

    }

    // Cargar vista
    public function view($view, $data = []){

        // Checar si existe el archivo de vista
        if (file_exists('../app/views/' . $view . '.php')) {

            require_once '../app/views/' . $view . '.php';
            
        }else{
            
            die('No existe la vista');

        }

    }

}
