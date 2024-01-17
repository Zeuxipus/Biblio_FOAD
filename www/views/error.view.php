<?php ob_start() ?>

<h1>Erreur 404</h1>

<p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Cupiditate facere qui mollitia ratione quos debitis deserunt ut libero corrupti enim natus odio quasi, provident a consectetur molestias, at cumque fugit rerum. Sapiente, consectetur molestiae. Tenetur aperiam veritatis quam obcaecati voluptatibus est animi ad. At dolorem omnis nostrum ratione architecto voluptate.</p>

<?php
$titre = "Error";
$content = ob_get_clean();
require_once "template.view.php";
