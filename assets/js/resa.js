var regExpNonVide = /./;

var regEXNomPrenomValide = /^[a-zA-Z\s\-\'_]+$/;

var regExTel = /^(?:(?:\+|00)33[\s.-]{0,3}(?:\(0\)[\s.-]{0,3})?|0)[1-9](?:(?:[\s.-]?\d{2}){4}|\d{2}(?:[\s.-]?\d{3}){2})$/;

var regExEmail = /^[a-z][a-z_0-9\.\-]+@[a-z_0-9\.\-]+\.[a-z]{2,3}$/;

var regExDate = /^[0-9]{4}-(0[1-9]|1[0-2])-(0[1-9]|[1-2][0-9]|3[0-1])T(2[0-3]|[01][0-9]):[0-5][0-9]$/;

var erreurDetectee = false;

function saisieObligatoire(inputDeclancheur) {
    if (erreurDetectee) {
        erreurDetectee = false;
    } else {
        if (regExpNonVide.test(inputDeclancheur.value) == false) {
            window.alert('Ce champ nécessite une saisie obligatoire');
            inputDeclancheur.focus();
            erreurDetectee = true;
            return false;
        }
    }
}

function formatNomPrenom(inputDeclancheur) {
    if (erreurDetectee) {
        erreurDetectee = false;
    } else {
        if (regEXNomPrenomValide.test(inputDeclancheur.value) == false) {
            window.alert('Seuls les caractères alphanumériques sont autorisés');
            inputDeclancheur.focus();
            erreurDetectee = true;
            return false;
        }
    }
}

function controleNumTel(inputDeclancheur) {
    if (inputDeclancheur.value != "") {
        if (erreurDetectee) {
            erreurDetectee = false;
        } else {
            if (regExTel.test(inputDeclancheur.value) == false) {
                window.alert("Votre numéro de téléphone n'est pas valide");
                inputDeclancheur.focus();
                erreurDetectee = true;
                return false;
            }
        }
    }
}
function formatEmail(inputDeclancheur) {
    inputDeclancheur.focus();
    if (inputDeclancheur.value != "") {
        if (erreurDetectee) {
            erreurDetectee = false;
        } else {
            if (regExEmail.test(inputDeclancheur.value) == false) {
                window.alert("Votre adresse mail n'est pas valide");
                inputDeclancheur.focus();
                erreurDetectee = true;
                return false;
            }
        }
    }
}



function envoyerFormulaire() {

    if (saisieObligatoire(document.getElementById("NOM")) == false ||
        saisieObligatoire(document.getElementById("PRENOM")) == false ||
        saisieObligatoire(document.getElementById("EMAIL")) == false ||
        saisieObligatoire(document.getElementById("TELEPHONE")) == false ||
        formatNomPrenom(document.getElementById("NOM")) == false ||
        formatNomPrenom(document.getElementById("PRENOM")) == false ||
        formatEmail(document.getElementById("EMAIL")) == false ||
        controleNumTel(document.getElementById("TELEPHONE")) == false) {
        window.alert("Erreur dans le formulaire");
        return false;
    } else {
        return true;
    }
}

window.addEventListener('load', function () {
    "use strict";

    document.getElementById('NOM').addEventListener('blur', function () { saisieObligatoire(this) });

    document.getElementById('PRENOM').addEventListener('blur', function () { saisieObligatoire(this) });

    document.getElementById('TELEPHONE').addEventListener('blur', function () { saisieObligatoire(this) });

    document.getElementById('EMAIL').addEventListener('blur', function () { saisieObligatoire(this) });

    document.getElementById('NOM').addEventListener('change', function () { formatNomPrenom(this) });

    document.getElementById('PRENOM').addEventListener('change', function () { formatNomPrenom(this) });

    document.getElementById('EMAIL').addEventListener('change', function () { formatEmail(this) });

    document.getElementById('TELEPHONE').addEventListener('change', function () { controleNumTel(this) });

    document.getElementById('formulaire').addEventListener('submit', function (e) {
        let etatFormulaire = envoyerFormulaire();
        if (!etatFormulaire) {
            e.preventDefault();
        }
    });
});
