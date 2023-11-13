<?php
    namespace App\controllers;

    class PortfolioController {
        public function openPortfolio() {
            $title = "Portfólio";
            $viewsPath = __DIR__ . '/../views/portfolio.php';
            include_once $viewsPath;
        }

    }

?>