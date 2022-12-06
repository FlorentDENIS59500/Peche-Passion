<?php
require("head.php");
require('header.php');
require "../src/model.php";
?>
<?php
function showFish($typeFish)
{
    $db = connectDb();
    $sqlRequest = 'SELECT PICT_PHOTO, NOM_PHOTO, DESC_PHOTO FROM photo WHERE TYPE_PHOTO ="' . $typeFish . '"';
    $sqlResponse = $db->prepare($sqlRequest);
    $sqlResponse->execute();
    $results = $sqlResponse->fetchAll(PDO::FETCH_OBJ);
    $db = disconnectDb();
    foreach ($results as $photo) {
?>
        <table class="table-photomenu">
            <tbody>
                <tr>
                    <td class="NOM_PHOTO"><?= $photo->NOM_PHOTO ?></td>
                </tr>
                <tr>
                    <td class="DESC_PHOTO" colspan="2"><?= $photo->DESC_PHOTO ?></td>
                </tr>
                <div><img src="\pechepassion\assets\img\Background\<?= $photo->PICT_PHOTO ?>" class="PICT_PHOTO" alt="Photo de <?= $photo->NOM_PHOTO ?>"></div>
            </tbody>
        </table>
        <hr>

<?php
    }
}
?>
<div class="menum">
    <div id="nav-links-menuphoto">
        <ul class="menum">
            <li id="bassboat"><a id="abassboat" class="links" href="?tp=Bass-Boat">Bass-Boat</a></li>
            <li id="brochet"><a id="abrochet" class="links" href="?tp=Brochet">Brochet</a></li>
            <li id="perche"><a id="aperche" class="links" href="?tp=Perche">Perche</a></li>
            <li id="sandre"><a id="asandre" class="links" href="?tp=Sandre">Sandre</a></li>
            <li id="lavaret"><a id="alavaret" class="links" href="?tp=Lavaret">Lavaret</a></li>
        </ul>
    </div>
</div>
<div class="menu-web">
    <article id="bass-boat">
        <?php
        showFish($_GET["tp"]);
        ?>
    </article>
</div>
<?php
require("footer.php");
?>