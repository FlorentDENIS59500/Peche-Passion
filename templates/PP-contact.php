<?php
require("PP-head.php");
require('PP-header.php');
?>
<main>
    <div class="photo-pub">
        <img src="..\assets\img\background\Peche-mouche1.jpg" alt="img-peche-mouche">
    </div>
    <div class="container_contact">
        <div class="contact">
            <h3>CONTACT</h3>
            <form class="form-contact" method="post" action="PP-contact.php">
                <div class="cont1 contact1">
                    <input type="text" name="Nom" id="Nom" placeholder="Nom" size="20" required />
                    <br>
                    <input type="text" name="Prenom" id="Prenom" placeholder="Prénom" size="20" required />
                    <br>
                    <input type="E_mail" name="Email" id="Email" placeholder="exemple@email.com" size="25" required />
                </div>
                <div class="cont2 contact1">
                    <input type="text" name="Sujet" id="Sujet" placeholder="Sujet" size="25" required />
                    <br>
                    <textarea type="text" name="Message" id="Message" placeholder="Message" rows="4" cols="40" required></textarea>
                    <br>
                </div>
                <div class="btn contact1">
                    <input type="submit" class="envoyer" id="formulaire" value="Envoyer" />
                </div>

            </form>
        </div>
    </div>
    <div class="foot"></div>
</main>
<?php
require("PP-footer.php");
?>