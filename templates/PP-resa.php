<?php
require("PP-head.php");
require('PP-header.php');
?>

<main>
    <div class="photo-pub">
        <img src="..\assets\img\background\espadon1.png" alt="img-espadon1">
    </div>
    <div class="container_resa">
        <div class="reservation">
            <h3>RESERVATION</h3>
            <form class="form-resa" method="post" action="PP-Resa2.php">
                <div class="cont1 resa">
                    <input type="text" name="Nom" id="Nom" placeholder="Nom" size="40" required />
                    <br>
                    <input type="text" name="Prenom" id="Prenom" placeholder="Prénom" size="40" required />
                    <br>
                    <input type="tel" name="Telephone" id="Telephone" placeholder="00 00 00 00 00" size="14" required />
                    <br>
                    <input type="email" name="Email" id="Email" placeholder="exemple@email.com" size="40" required />
                </div>
                <div class="cont2 resa">
                    <input type="datetime-local" name="Date_Resa" id="Date_Resa" required />
                    <br>
                    <input type="number" name="Nombre_Pers" min="1" id="Nombre_Pers" placeholder="Nombre de personnes" size="15" required />
                    <br>
                    <textarea type="text" name="Messages" id="Messages" placeholder="Message" rows="4" cols=40></textarea>
                    <br>
                </div>
                <div class="btn resa">
                    <input type="submit" id="formulaire" class="reserver" value="Réserver" />
                </div>
            </form>
        </div>
    </div>
    <div class="foot"></div>
</main>
<?php
require("PP-footer.php");
?>