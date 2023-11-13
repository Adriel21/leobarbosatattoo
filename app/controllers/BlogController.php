<?php
namespace App\controllers;

use App\models\Category;
use App\models\Post;
use App\utilities\Utilities;

class BlogController {
    public function openBlog() {
        Utilities::parameters();

        $pg = Utilities::$pg;
        $dynamicLink = Utilities::$dynamicLink;
        $buttonPgTwo = $pg <= 1 ? 2 : 1;
        $post = new Post;
        $category = new Category;
        $title = "Blog";
        $initialSection = "Todos os Posts - Blog";
        // Trazendo os resultados e passando os parâmetros para ponto de partida e limite da consulta
        $allPosts = $post->allPosts(Utilities::$start, Utilities::$limit);
        $allCategories = $category->allCategories(); 
        if(isset($_GET['categoria'])) {
        $allPosts = $post->postsByCategory(Utilities::$category, Utilities::$start, Utilities::$limit);
        $initialSection = "Resultados de ".$_GET['categoria'].": ".count($allPosts);
        }

        if(isset($_POST['pesquisa'])) {
            $post->setTerm($_POST['pesquisa']);
            $allPosts = $post->search();
            $initialSection = "Resultados da pesquisa: " . count($allPosts); 
        }
        
        $nav = $post->navPosts();
        // Deixando dinâmico o botão que nos leva ao último conjunto de resultados
        $countNav = ceil(count($nav)/6);
        // Deixando dinâmico o botão que nos leva ao conjunto de resultados do meio
        $countNavBetween = ceil($countNav/2);
        
        // Defina uma variável para os dados que você deseja passar para a view
        $data = [
            'posts' => $allPosts,
            'categories' => $allCategories
        ];

        // Defina o cabeçalho para indicar que a resposta é JSON

        $viewsPath = __DIR__ . '/../views/blog.php';

        if (file_exists($viewsPath)) {
            // Inclua o arquivo de view e passe os dados como uma variável
            include $viewsPath;
        } else {
            echo "Arquivo de view não encontrado.";
        }
    }

 
}
?>
