<?php
require("head.php");
require('header.php');
require "../src/model.php";
?>
<?php
function showBeer($typeBeer)
{
    $db = connectDb();
    $sqlRequest = 'SELECT PHOTO_BIERE, NOM_BIERE, DESC_BIERE FROM beer WHERE TYPE_BIERE ="' . $typeBeer . '"';
    $sqlResponse = $db->prepare($sqlRequest);
    $sqlResponse->execute();
    $results = $sqlResponse->fetchAll(PDO::FETCH_OBJ);
    $db = disconnectDb();
    foreach ($results as $beer) {
?>
        <table class="table-bieremenu">
            <tbody>
                <tr>

                    <td class="NOM_BIERE"><?= $beer->NOM_BIERE ?></td>
                </tr>
                <tr>
                    <td class="DESC_BIERE" colspan="2"><?= $beer->DESC_BIERE ?></td>
                </tr>
            </tbody>
        </table>
<?php
    }
}
?>
<div class="menum">
    <div id="nav-links-menubeer">
        <ul class="menum">
            <li id="blanche"><a id="ablanche" class="links" href="?tp=Blanche">Blanche</a></li>
            <li id="blonde"><a id="ablonde" class="links" href="?tp=Blonde">Blonde</a></li>
            <li id="ambree"><a id="aambree" class="links" href="?tp=Ambrée">Ambrée</a></li>
            <li id="brune"><a id="abrune" class="links" href="?tp=Brune">Brune</a></li>
            <li id="special"><a id="aspecial" class="links" href="?tp=Spéciale">Spéciale</a></li>
        </ul>
    </div>
</div>
<div class="menu-web">
    <article id="sous-blanche">
        <?php
        showBeer($_GET["tp"]);
        ?>
    </article>
</div>
<?php
require("footer.php");
?>