<?php
    namespace App\controllers;

    use App\models\Post;


    class PostController {


        public function openPost() {

            $id = $_GET['id'];

            $post = new Post;

            $post->setId($id);

            $recentPosts = $post->limitedPost();

            $data = [
                'recentsPosts' => $recentPosts
            ];


            $onePost = $post->onePost($id);

            $title = "Publicação";
            

            $viewsPath = __DIR__ . '/../views/post.php';
            if (file_exists($viewsPath)) {
                // Inclua o arquivo de view e passe os dados como uma variável
                include $viewsPath;
            } else {
                echo "Arquivo de view não encontrado.";
            }        
        }

    }

?>