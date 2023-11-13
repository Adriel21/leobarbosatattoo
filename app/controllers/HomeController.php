<?php
    namespace App\controllers;

use App\models\Subscriber;
use App\models\Post;

    class HomeController {
        public function openHome() {

            $post = new Post;
            $limitedPosts = $post->limitedPost();
            $title = "LeoBarbosaTattoo: Onde a Arte Ganha Vida";
            $metaKeys = "tattoo, tatuagem, tatuagens, anime tattoo";
            $metaDesc = "leobarbosatattoo: Especialista em Tatuagens Preto e Cinza, Geek, Anime, Escrita, Realismo e Old School. Deixe sua paixão ganhar vida na sua pele!";

            $data = [
                "posts" => $limitedPosts
            ];

            $viewsPath = __DIR__ . '/../views/home.php';
            include_once $viewsPath;
        }

        public function signUp(){
            $subscriber = new Subscriber;
            if(isset($_POST['checkbox']) && $_POST['checkbox'] == 1){
                $subscriber->setEmail($_POST['email']);
                $dataSubscriber = $subscriber->searchUser();
                if($dataSubscriber['email'] == $_POST['email']){
                    header('location:https://www.leobarbosatattoo.com.br/?email_existente');
                } else{
                    $subscriber->setDate(date('Y-m-d H:i:s'));
                    $subscriber->setAccept_registration($_POST['checkbox']);
                    $subscriber->insertRegistration();
    
                    header('location:https://www.leobarbosatattoo.com.br/?inscrito_com_sucesso');
                }
               
            } else {
                header('location:https://www.leobarbosatattoo.com.br/?erro');
            }
        }

    }

?>