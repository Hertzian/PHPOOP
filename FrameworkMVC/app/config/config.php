<?php

// App Root, que es el root actual
// echo __FILE__;//magic constant, muestra la ruta del archivo donde esta declarada
// echo '<br>';
// echo dirname(__FILE__);//lo mismo que la anterior, solo que no muestra el nombre del presente archivo o bien solo ""sube un paso y asi sucesivamente
// echo '<br>';

//App Root
define('APPROOT', dirname(dirname(__FILE__)));

// URL Root
// define('URLROOT', 'http://localhost/PHPOOP/FrameworkMVC');//poner atencion con el "/" al final, se puede dejar o se puede quitar
define('URLROOT', 'http://phpmvc.test');//poner atencion con el "/" al final, se puede dejar o se puede quitar

// nombre de sitio
define('SITENAME', 'TutofruttiMVC');