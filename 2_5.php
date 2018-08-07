<?php
    class User{

        //public que se puede accesar de donde sea
        //private que solo se puede accesar dentro de la clase
        //protected solo se puede accesar dentro de la clase y dentro de la/las clases que lo extiendan
        private $name;
        private $age;

        public function __contruct($name, $age){

            $this->name = $name;
            $this->age = $age;

        }

        public function getName(){

            return $this->name;

        }

        public function setName($name){

            $this->name = $name;

        }

        //estos ""Metodos magicos sirven para no hacer metodos set y get para cada atributo al principio de la clase
        //__get MAGIC METHOD
        public function __get($property){

            if (property_exists($this, $property)) {

                return $this->$property;

            }

        }

        //__set MAGIC METHOD
        public function __set($property, $value){//se establece la propiead y el valor como parametro (depende del metodo claro esta)

            if (property_exists($this, $property)) {
                
                $this->$property = $value;

            }

            return $this;

        }

    }


    //set y get dependen uno del otro, set toma el valor y get lo retorna
    $user1 = new User('John', 40);

    // $user1->name = 'Jeff';
    // echo $user1->name; //se busca accesar como si fuera public pero no es posible dado que es private

    // echo $user1->setName('Jeff');
    // echo $user1->getName();

    $user1->__set('age', 41);
    echo $user1->__get('age');