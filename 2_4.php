<?php

class User
{
    
    public $name;
    public $age;

    //constructor el metodo que corre automaticamente cuando se instancia un objeto "$var = new User();"
    //corre cuando un objeto es creado/instanciado
    //"magic method" contruct
    public function __construct($name,$age){ // SIEMPRE corre automaticamente al momento de instanciar el objeto

        // echo 'constructor ran...';
        // "magic constant", __CLASS__ da el nombre de la clase actual cuando se invoca
        echo 'Clase ' . __CLASS__ . ' instanciada, <br>';
        $this->name = $name;
        $this->age = $age;

    }

    public function sayHello(){

        return $this->name . ' Dice Hola';

    }

    //se usa para limpieza, cerrar conexiones, etc
    //"magic method" destruct
    public function __destruct(){//cuando no hay otras referencias particulares a objetos, se usa para cerrar conexiones a DB o cosas por el estilo
        //corre las veces que se ha instanciado el objeto
        echo 'destructor ran...';

    }
    
}

$user1 = new User('Lalo', 35);

echo $user1->name . ' tiene ' . $user1->age . ' años de edad';
echo '<br>';
echo $user1->sayHello();

echo '<br>';

$user2 = new User('Edith', 30);

echo $user2->name . ' tiene ' . $user2->age . ' años de edad';
echo '<br>';
echo $user2->sayHello();