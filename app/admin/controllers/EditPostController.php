<?php
namespace Admin\controllers;

use Admin\models\User;
use Admin\controllers\SessionController;
use Admin\models\Category;
use Admin\models\Post;
//Import PHPMailer classes into the global namespace
//These must be at the top of your script, not inside a function
use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\SMTP;
use PHPMailer\PHPMailer\Exception;

class EditPostController {

    public function openCreatePosts(){
        $session = new SessionController;
        $category = new Category;

        $allCategories = $category->allCategories();

        $session->validateAccess();

        $viewsPath = __DIR__ . '/../views/posts.php';

        include_once $viewsPath;
    }


    public function openPostsList(){
        $session = new SessionController;
        $category = new Category;

        $allCategories = $category->allCategories();

        $post = new Post;
        $postsList = $post->allPosts();

        $session->validateAccess();

        $data = [
            "posts" => $postsList
        ];

        $viewsPath = __DIR__ . '/../views/postsList.php';

        include_once $viewsPath;
    }


    

    public function uploadCoverPhoto(array $arquivo) {

        $tiposAceitos = [

            "image/png",

            "image/jpeg",

            "image/gif",

            "image/svg+xml"

        ];



        if(!in_array($arquivo['type'], $tiposAceitos)) {

            die("<script>alert('formato inválido');</script>");

        }

            $nome = $arquivo['name'];



            $temporario = $arquivo['tmp_name'];



            $destino = './public/img/blog/'.$nome;

            move_uploaded_file($temporario, $destino);

        }

        public function registerPost(){

            $session = new SessionController;

            $session->validateAccess();


            $today = date('Y-m-d H:i:s');
            $post = new Post;
            $coverPhoto = $_FILES['imagem'];
            $post->setCategoryId($_POST['categoria']);
            $post->setTitle($_POST['titulo']);
            $post->setContent($_POST['conteudo']);
            $post->setSummary($_POST['resumo']);
            $post->setCoverPhoto($coverPhoto['name']);
            $post->setDate($today);
            $post->setUserId($_SESSION['id']);

            $this->uploadCoverPhoto($_FILES['imagem']);
    
            
            $post->insertPost();

            header('location:panel?tudo_certo');
    
        }

        public function updatePost(){
            $session = new SessionController;
            $session->validateAccess();

            $post = new Post;

            $post->setId($_GET['id']);
            
            $onePost = $post->onePost();


            $viewsPath = __DIR__ . '/../views/updatePost.php';

            include_once $viewsPath;

        }

        

    }

?>
