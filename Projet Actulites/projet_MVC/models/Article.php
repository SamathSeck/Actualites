<?php
class Article {
    public $id;
    public $titre;
    public $contenu;
    public $dateCreation;
    public $dateModification;
    public $categorie;

    public function __construct($id, $titre, $contenu, $dateCreation, $dateModification, $categorie) {
        $this->id = $id;
        $this->titre = $titre;
        $this->contenu = $contenu;
        $this->dateCreation = $dateCreation;
        $this->dateModification = $dateModification;
        $this->categorie = $categorie;
    }
}
?>
