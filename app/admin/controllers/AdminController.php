<?php
namespace Admin\controllers;

use Admin\models\User;
use Admin\controllers\SessionController;

class AdminController {
    public function openLoginAdmin(){
        $viewsPath = __DIR__ . '/../views/login.php';

        include $viewsPath;
    }

    public function adminEntering(){
        $email = $_POST['email'];
        $senha = $_POST['senha'];

        $user = new User;

        $search = $user->setEmail($email);

       $data = $search->search();

        if($data) {
             if($data['password'] == $senha){
                 $session = new SessionController;
             $session->login($data['id'], $data['name'], $data['email'], $data['password'], $data['picture']);
                 header('location:panel');
            } else {
                header('location:admin-login?senha_incorreta');
            }
        }

    }

    public function openPanel(){

        $session = new SessionController;

        $session->validateAccess();

        $viewsPath = __DIR__ . '/../views/panel.php';

        include_once $viewsPath;
    }


    }

?>
