<?php
include_once 'dao/ArticleDAO.php';

class ArticleService {
    public function getArticlesByCategory($category) {
        return ArticleDAO::getArticlesByCategory($category);
    }

    public function getLatestArticles() {
        return ArticleDAO::getLatestArticles();
    }
}
?>
