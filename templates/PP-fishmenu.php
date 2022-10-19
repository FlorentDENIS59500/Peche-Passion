<?php
require("PP-head.php");
require('PP-header.php');
require "../src/model.php";
?>
<div class="menum">
    <div id="nav-links-menubeer">
        <ul class="menum">
            <li id="blanche"><a id="ablanche" class="links" href="#sous-blanche" onclick="sblanche()">Blanche</a></li>
            <li id="blonde"><a id="ablonde" class="links" href="#sous-blonde" onclick="sblonde()">Blonde</a></li>
            <li id="ambree"><a id="aambree" class="links" href="#sous-ambree" onclick="sambree()">Ambrée</a></li>
            <li id="brune"><a id="abrune" class="links" href="#sous-brune" onclick="sbrune()">Brune</a></li>
            <li id="special"><a id="aspecial" class="links" href="#sous-special" onclick="sspeciale()">Spéciale</a></li>
        </ul>
    </div>
</div>
<div class="menu-web">
    <article id="sous-blanche">
        <?php
        $db = connectDb();
        $sqlRequest1 = 'SELECT * FROM beer WHERE TYPE_beer = "Blanche"';
        $sqlResponse = $db->prepare($sqlRequest1);
        $sqlResponse->execute();
        $results = $sqlResponse->fetchAll(PDO::FETCH_OBJ);
        $db = disconnectDb();
        foreach ($results as $beer) {
        ?>
            <table class="table-beermenu">
                <tbody>
                    <tr>
                        <td class="img_beer"><img src="../assets/img/beer/<?= $beer->PHOTO_beer ?>" alt="Affiche de la bière<?= $beer->NAME_beer ?>"></td>
                        <td class="NAME_beer"><?= $beer->NAME_beer ?></td>
                    </tr>
                    <tr>
                        <td class="desc_beer" colspan="2"><?= $beer->DESC_beer ?></td>
                </tbody>
            </table>
        <?php
        }
        ?>
    </article>
    <article id="sous-blonde">
        <?php
        $db = connectDb();
        $sqlRequest2 = 'SELECT * FROM beer WHERE TYPE_beer = "Blonde"';
        $sqlResponse = $db->prepare($sqlRequest2);
        $sqlResponse->execute();
        $results = $sqlResponse->fetchAll(PDO::FETCH_OBJ);
        $db = disconnectDb();
        foreach ($results as $beer) {
        ?>
            <table class="table-beermenu">
                <tbody>
                    <td class="img_beer"><img src="../assets/img/beer/<?= $beer->PHOTO_beer ?>" alt="Affiche de la beer<?= $beer->NAME_beer ?>"></td>
                    <td class="NAME_beer"><?= $beer->NAME_beer ?></td>
                    </tr>
                    <tr>
                        <td class="desc_beer" colspan="2"><?= $beer->DESC_beer ?></td>
                    </tr>
                </tbody>
            </table>
        <?php
        }
        ?>
    </article>
    <article id="sous-ambree">
        <?php
        $db = connectDb();
        $sqlRequest3 = 'SELECT * FROM beer WHERE TYPE_beer = "Ambrée"';
        $sqlResponse = $db->prepare($sqlRequest3);
        $sqlResponse->execute();
        $results = $sqlResponse->fetchAll(PDO::FETCH_OBJ);
        $db = disconnectDb();
        foreach ($results as $beer) {
        ?>
            <table class="table-beermenu">
                <tbody>
                    <td class="img_beer"><img src="../assets/img/beer/<?= $beer->PHOTO_beer ?>" alt="Affiche de la beer<?= $beer->NAME_beer ?>"></td>
                    <td class="NAME_beer"><?= $beer->NAME_beer ?></td>
                    </tr>
                    <tr>
                        <td class="desc_beer" colspan="2"><?= $beer->DESC_beer ?></td>
                    </tr>
                </tbody>
            </table>
        <?php
        }
        ?>
    </article>
    <article id="sous-brune">
        <?php
        $db = connectDb();
        $sqlRequest4 = 'SELECT * FROM beer WHERE TYPE_beer = "Brune"';
        $sqlResponse = $db->prepare($sqlRequest4);
        $sqlResponse->execute();
        $results = $sqlResponse->fetchAll(PDO::FETCH_OBJ);
        $db = disconnectDb();
        foreach ($results as $beer) {
        ?>
            <table class="table-beermenu">
                <tbody>
                    <td class="img_beer"><img src="../assets/img/beer/<?= $beer->PHOTO_beer ?>" alt="Affiche de la beer<?= $beer->NAME_beer ?>"></td>
                    <td class="NAME_beer"><?= $beer->NAME_beer ?></td>
                    </tr>
                    <tr>
                        <td class="desc_beer" colspan="2"><?= $beer->DESC_beer ?></td>
                    </tr>
                </tbody>
            </table>
        <?php
        }
        ?>
    </article>
    <article id="sous-speciale">
        <?php
        $db = connectDb();
        $sqlRequest5 = 'SELECT * FROM beer WHERE TYPE_beer = "Spéciale"';
        $sqlResponse = $db->prepare($sqlRequest5);
        $sqlResponse->execute();
        $results = $sqlResponse->fetchAll(PDO::FETCH_OBJ);
        $db = disconnectDb();
        foreach ($results as $beer) {
        ?>
            <table class="table-beermenu">
                <tbody>
                    <td class="img_beer"><img src="../assets/img/beer/<?= $beer->PHOTO_beer ?>" alt="Affiche de la beer<?= $beer->NAME_beer ?>"></td>
                    <td class="NAME_beer"><?= $beer->NAME_beer ?></td>
                    </tr>
                    <tr>
                        <td class="desc_beer" colspan="2"><?= $beer->DESC_beer ?></td>
                    </tr>
                </tbody>
            </table>
        <?php
        }
        ?>
    </article>
</div>
<?php
require("PP-footer.php");
?>