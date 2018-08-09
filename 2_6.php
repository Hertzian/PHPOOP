<?php

// no es posible accesar a esta clase, solamente por herencia
class User{
    
    protected $name;
    protected $age;

    public function __construct($name, $age){

        $this->name = $name;
        $this->age = $age;

    }

}

//se extiende una clase protected
class Customer extends User{

    private $balance;
    
    public function __construct($name, $age, $balance){

        parent::__construct($name, $age);

        $this->balance = $balance;

    }

    public function pay($amount){

        return $this->name . ' pagó $' . $amount;

    }

    public function getBalance(){

        return $this->balance;

    }

}

$cliente1 = new Customer('Lalo', 50, 500);

// $user1 = new User();

echo $cliente1->pay(100);

// echo $user1->name;//no funciona por que sus atributos son protected

echo '<br>Balance: $' . $cliente1->getBalance();