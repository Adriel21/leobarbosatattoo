<?php
    namespace Admin\controllers;

    class SessionController{
        
    public function __construct() {

        if( !isset($_SESSION) ){

            session_start();

        }

    }     

    public function validateAccess():void {

            if (!isset($_SESSION['id'])) {
    
                session_destroy();
    
            header("location:entrar?acesso-negado");
    
            die();
    
            }       
    }
   

    public function login (int $id, string $name, string $email, string $picture): void {

        $_SESSION['id'] = $id;

        $_SESSION['name'] = $name;

        $_SESSION['email'] = $email;

        $_SESSION['perfil'] = $picture;
        
        
    }

    public function logout(){
        session_start();

        session_destroy();

        header('location:admin-login');
    }




    }
?>