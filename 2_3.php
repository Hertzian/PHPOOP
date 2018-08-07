<?php
// Definir clase
class User
{
    // Propiedades(atributos)
    public $nombre;


    // Metodos

    public function sayHello(){

        return $this->nombre . ' Says Hello';

    }

}

// instancia de objeto User de class User

$user1 = new User();

$user1->nombre = 'Brad';

echo $user1->nombre;

echo '<br>';

echo $user1->sayHello();

echo '<br>';

// crear nuevo User

$user2 = new User();

$user2->nombre = 'Lalo';

echo $user2->nombre;

echo '<br>';

echo $user2->sayHello();
echo '<br>';
echo $user2->sayHello();
echo '<br>';
echo $user2->sayHello();