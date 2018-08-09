<?php

//puede ser utilizada sin instanciarse
class User{

    public $name;
    public $age;
    public static $minPassLength = 6;


    public static function validatePass($pass){//puede usarse el metodo validatePass sin ser instanciado User

        if (strlen($pass) >= self::$minPassLength) {//se utiliza self:: por que la propiedad es estatica
            
            return true;

        }else{

            return false;

        }

    }

}

$password = 'Holas6';
if(User::validatePass($password)){//nuevamente User:: por que se busca accesar a una propiedad static y en la clase User se encuentra el metodo validatePass($parametro)
 
    echo 'Password valid';

}else{

    echo 'Password NOT valid';

}