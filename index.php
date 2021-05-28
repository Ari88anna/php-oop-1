<?php 

    class User {

        public $nome;
        
        public $cognome;

        public $username;

        public $mail;

        public $citta;

        public $password;      

    }

    $frodo = new User();
    $frodo -> nome = 'Frodo';    
    $frodo -> cognome = 'Baggins';
    $frodo -> username = 'frodoBB';
    $frodo -> mail = 'frodo.baggins@gmail.com';
    $frodo -> citta = 'Contea';
    

    var_dump($frodo);



?>