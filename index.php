<?php 

    class User {

        public $nome;
        
        public $cognome;

        public $username;

        public $mail;

        public $citta;

        public $password;

        // public function nomeCompleto() {
        //     return $this ->nome . ' ' . $this->cognome;
        // }      

        public function __construct($nome, $cognome, $mail) {
            $this ->nome = $nome; 
            $this->cognome = $cognome;
            $this ->email = $mail;             
        } 

    }

    $frodo = new User('Frodo', 'Baggins', 'frodo.baggins@gmail.com' ); 
    // $frodo -> nome = 'Frodo';
    // $frodo -> cognome = 'Baggins';
    $frodo -> username = 'frodoBB';
    // $frodo -> mail = 'frodo.baggins@gmail.com';
    $frodo -> citta = 'Contea';

    // echo $frodo ->nomeCompleto('Frodo', 'Baggins');
    var_dump($frodo);


    $han = new User('Han', 'Solo', 'han.solo@gmail.com');
    // $han -> nome = 'Han';    
    // $han -> cognome = 'Solo';
    $han -> username = 'hanSolo';
    // $han -> mail = 'han.solo@gmail.com';
    $han -> citta = 'Corelia';
    
    // echo $han ->nomeCompleto('Han', 'Solo');
    var_dump($han);

    
?>