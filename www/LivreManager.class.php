<?php
require_once "ConnexionManager.class.php";
class LivreManager extends ConnexionManager{
    private array $livres;

    public function AjouterLivre($nouveauLivre)
    {
        $this->livres[] = $nouveauLivre;
    }

    public function chargementLivre()
    {
        $connexion = $this->getConnexionBdd();
        $req = $connexion->prepare("SELECT * FROM livre limit 0,10");
        $req->execute();
        $livresImportes = $req->fetchAll(PDO::FETCH_ASSOC);
        $req->closeCursor();
        
        foreach($livresImportes as $livre){
            $nouveauLivre = new Livre($livre['id_livre'], $livre['Titre'], $livre['image_url'], $livre['nb_pages']);
            $this->AjouterLivre($nouveauLivre);
        }
    }

    /**
     * Get the value of livres
     *
     * @return array
     */
    public function getLivres(): array {
        return $this->livres;
    }
}

?>