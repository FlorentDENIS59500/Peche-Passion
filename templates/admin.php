<?php
require("head.php");
require_once "../src/model.php";


require("auth.php");
$login = new Login;
$login->authorize();

require('header-admin.php');
?>
<div class="photo-pub">
    <img src="..\assets\img\background\bass-boat3.jpg" class="img-bass-boat" alt="img-bass-boat3">
</div>
<div class="adminform">
    <H1 class="title-admin">Accueil administrateur</H1>
</div>

<?php
require("footer.php");
?>