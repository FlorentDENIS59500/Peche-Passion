<?php
require("PP-head.php");
require_once "../src/model.php";


require("PP-Simple-Auth.php");
$login = new Login;
$login->authorize();

require('PP-header-admin.php');
?>
<div class="adminform">
    <p>Bienvenue sur l'espace administrateur !</p>
</div>

<?php
require("PP-footer.php");
?>