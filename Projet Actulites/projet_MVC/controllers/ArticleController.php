<?php
include_once 'domain/ArticleService.php';

class ArticleController {
    private $articleService;

    public function __construct() {
        $this->articleService = new ArticleService();
    }

    public function accueil() {
        // Par exemple, récupérez ici les derniers articles pour la page d'accueil
        $articles = $this->articleService->getLatestArticles();
        include 'views/accueil.php';
    }

    public function sante() {
        $articles = $this->articleService->getArticlesByCategory('Santé');
        include 'views/sante.php';
    }

    public function sport() {
        $articles = $this->articleService->getArticlesByCategory('Sport');
        include 'views/sport.php';
    }

    public function politique() {
        $articles = $this->articleService->getArticlesByCategory('Politique');
        include 'views/politique.php';
    }

    public function education() {
        $articles = $this->articleService->getArticlesByCategory('Education');
        include 'views/education.php';
    }

    // Ajoutez d'autres méthodes pour les autres catégories ou actions si nécessaire
}
?>
