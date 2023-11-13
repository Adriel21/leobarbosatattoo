<?php
    namespace App\controllers;

    class NotFoundController{
        public function error() {
            $viewsPath = __DIR__ . '/../views/notfound.php';
            include_once $viewsPath;
        }

    }

?>