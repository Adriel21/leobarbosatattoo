<?php

use Admin\controllers\AdminController;
use Admin\controllers\EditPostController;
use Admin\controllers\SessionController;
use App\controllers\HomeController;
use App\controllers\NotFoundController;
use App\controllers\PortfolioController;
use App\controllers\BlogController;
use App\controllers\PostController;


require_once './vendor/autoload.php';

define('URL','http://localhost/leobarbosatattoo/');


if(isset($_GET['url'])){

    $url = explode('/', $_GET['url']);

    switch($url[0]){

        case "portfolio" : 
            $portfolio = new PortfolioController;
            $portfolio->openPortfolio();
        break;
        
        case "blog":
            // Se o primeiro segmento é "blog"
            if (isset($url[1]) && $url[1] === "post") {
                $post = new PostController;
                $post->openPost();
            } else {
                $blog = new BlogController;
                $blog->openBlog();
            }
            break;

        case "post":
            $post = new PostController;
            $post->openPost();
        break;

        // case "blog":
        //     $blog = new BlogController;
        //     $blog->openBlog();
        // break;

        case "admin-login":
            $admin = new AdminController;
            $admin->openLoginAdmin();
        break;

        case "admin-entering":
            $admin = new AdminController;
            $admin->adminEntering();
        break;
        
        case "panel":
             $admin = new AdminController;
             $admin->openPanel();
        break;

        case "create-posts":
            $admin = new EditPostController;
            $admin->openCreatePosts();
       break;

        case "register-post":
            $admin = new EditPostController;
            $admin->registerPost();
        break;

        case "posts-list":
            $admin = new EditPostController;
            $admin->openPostsList();
        break;

        case "update-post":
            $admin = new EditPostController;
            $admin->updatePost();
        break;

        case "logout":
            $session = new SessionController;
            $session->logout();
        break;

    
        case "update-project":
            // $dashboard = new DashboardController;
            // $dashboard->updateProject();
        break;

        case "delete-project":
            // $dashboard = new DashboardController;
            // $dashboard->deleteProjectController();
        break;

        case "editar-cadastro":
            // $user = new UserController;
            // $user->viewwUpdateUser();
        break;

        case "update-user":
            // $user = new UserController;
            // $user->userUpdateController();
        break;

        case "sign-up":
            $home = new HomeController;
            $home->signUp();
        break;

        default:
             $notFound = new NotFoundController;
             $notFound->error();
        break;
    }
}else {
    $home = new HomeController;
    $home->openHome();
}


?>