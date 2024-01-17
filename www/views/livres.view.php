<?php
// require "ConnexionManager.class.php";
// $connexionManager = new ConnexionManager;
// $connexionManager->setConnexionBdd();

require_once "Livre.class.php";
// $livre1 = new Livre(1, "Apprendre le CSS", "apprendre-css.png", 200);
// $livre2 = new Livre(2, "Apprendre Docker", "apprendre-docker.png", 400);
// $livre3 = new Livre(3, "Apprendre Java", "apprendre-java.png", 300);
// $livre4 = new Livre(4, "Apprendre JS", "apprendre-js.png", 300);
// $livre5 = new Livre(5, "Apprendre PHP", "apprendre-php.png", 300);
// $livre6 = new Livre(6, "Apprendre Wordpress", "apprendre-wordpress.png", 300);

// $livres = [$livre1, $livre2, $livre3, $livre4, $livre5];

require_once "LivreManager.class.php";
$livreManager = new LivreManager;
$livreManager->chargementLivre();
// $livreManager->AjouterLivre($livre1);
// $livreManager->AjouterLivre($livre2);
// $livreManager->AjouterLivre($livre3);
// $livreManager->AjouterLivre($livre4);
// $livreManager->AjouterLivre($livre5);

?>

<?php ob_start() ?>

<table class="table table-center">
    <tr class="table-dark">
        <th>Image</th>
        <th>Titre</th>
        <th>Nombre de pages</th>
        <th colspan="2">Actions</th>
    </tr>
    <?php
    $livresEnCours = $livreManager->getLivres();
    foreach ($livresEnCours as $livre) :  ?>
        <tr>
            <td class="align-middle"><img src="./public/img/<?php echo $livre->getImage(); ?>" height="60px" alt="livre pour .<?php echo $livre->getTitre(); ?>"></td>
            <td class="align-middle"><?php echo $livre->getTitre(); ?></td>
            <td class="align-middle"><?php echo $livre->getNbPages(); ?></td>
            <td class="align-middle"><a href="#" class="btn btn-warning">Modifier</td>
            <td class="align-middle"><a href="#" class="btn btn-danger">Supprimer</td>
        </tr>
    <?php endforeach; ?>
</table>
<a href="#" class="btn btn-success d-block">Ajouter</a>



<?php
$titre = "Les livres";
$content = ob_get_clean();
require_once "template.view.php";
