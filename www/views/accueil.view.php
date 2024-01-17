<?php ob_start() ?>


<p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Aspernatur quo amet rem placeat laboriosam excepturi, non officiis illum consequuntur beatae enim ipsum voluptas consectetur. Ipsam quia officiis dolorem molestias reiciendis quod maxime modi, rerum possimus, esse debitis, quidem earum repellendus ad aspernatur error enim facere dignissimos repudiandae! Harum, voluptatum ipsam?</p>

<?php
$titre = "Page d'accueil";
$content = ob_get_clean();
require_once "template.view.php";