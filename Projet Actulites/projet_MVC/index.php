 
 <?php
include 'config/config.php';
include 'controllers/ArticleController.php';

$action = isset($_GET['action']) ? $_GET['action'] : 'accueil';

$controller = new ArticleController();

switch ($action) {
    case 'sante':
        $controller->sante();
        break;
    case 'sport':
        $controller->sport();
        break;
    case 'education':
        $controller->education();
        break;
    case 'politique':
        $controller->politique();
        break;
    default:
        $controller->accueil();
}
?>
