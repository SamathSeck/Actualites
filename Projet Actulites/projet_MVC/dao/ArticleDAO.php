<?php
include_once 'config/config.php';
include_once 'models/Article.php';

class ArticleDAO {
    public static function getArticlesByCategory($category) {
        $conn = connectDB();
        $sql = "SELECT * FROM Article WHERE categorie = (SELECT id FROM Categorie WHERE libelle = ?)";
        $stmt = $conn->prepare($sql);
        $stmt->bind_param('s', $category);
        $stmt->execute();
        $result = $stmt->get_result();
        $articles = [];

        while($row = $result->fetch_assoc()) {
            $articles[] = new Article(
                $row['id'],
                $row['titre'],
                $row['contenu'],
                $row['dateCreation'],
                $row['dateModification'],
                $row['categorie']
            );
        }

        $stmt->close();
        $conn->close();

        return $articles;
    }

    public static function getLatestArticles() {
        $conn = connectDB();
        $sql = "SELECT * FROM Article ORDER BY dateCreation DESC LIMIT 5"; // Récupère les 5 derniers articles par date de création décroissante
        $result = $conn->query($sql);
        $articles = [];

        if ($result->num_rows > 0) {
            while($row = $result->fetch_assoc()) {
                $articles[] = new Article(
                    $row['id'],
                    $row['titre'],
                    $row['contenu'],
                    $row['dateCreation'],
                    $row['dateModification'],
                    $row['categorie']
                );
            }
        }

        $conn->close();

        return $articles;
    }
}
?>
