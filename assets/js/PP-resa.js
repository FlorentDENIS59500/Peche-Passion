var regExpNonVide = /./;

var regEXNomPrenomValide = /^[a-zA-Z\s\-\'_]+$/;

var regExEmail = /^[a-z][a-z_0-9\.\-]+@[a-z_0-9\.\-]+\.[a-z]{2,3}$/;

var regExTel = /^\+[0-9]{1,2}-[0-9]{3}-[0-9]{7}$/

var erreurDetectee = false;

function saisieObligatoire(inputDeclancheur) {
    if (erreurDetectee) {
        erreurDetectee = false;
    } else {
        if (regExpNonVide.test(inputDeclancheur.value) == false) {
            window.alert('ce champ nécessite une saisie obligatoire');
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
            window.alert("seuls les caractères alphanumériques sont autorisés");
            inputDeclancheur.focus();
            erreurDetectee = true;
            return false;
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

function envoyerFormulaire() {

    if (saisieObligatoire(document.getElementById("Nom")) == false || 
    saisieObligatoire(document.getElementById("Prenom")) == false || 
    saisieObligatoire(document.getElementById("Email")) == false ||
    saisieObligatoire(document.getElementById("Telephone")) == false ||
    formatNomPrenom(document.getElementById("Nom")) == false || 
    formatNomPrenom(document.getElementById("Prenom")) == false || 
    formatEmail(document.getElementById("Email")) == false || 
    controleNumTel(document.getElementById("Telephone")) == false) {
        window.alert("erreur dans le formulaire");
        return false;
    } else {
        return true;
    }
}

window.addEventListener('load', function () {
    "use strict";

    document.getElementById('Nom').addEventListener('blur',function(){saisieObligatoire(this)});

    document.getElementById('Prenom').addEventListener('blur',function(){saisieObligatoire(this)});

    document.getElementById('Telephone').addEventListener('blur',function(){saisieObligatoire(this)});

    document.getElementById('Email').addEventListener('blur',function(){saisieObligatoire(this)});

    document.getElementById('Nom').addEventListener('change',function(){formatNomPrenom(this)});

    document.getElementById('Prenom').addEventListener('change',function(){formatNomPrenom(this)});
    
    document.getElementById('Email').addEventListener('change',function(){formatEmail(this)});
    
    document.getElementById('Telephone').addEventListener('change',function(){controleNumTel(this)});

    document.getElementById('formulaire').addEventListener('submit',function(e){
        let etatFormulaire = envoyerFormulaire();
        if (!etatFormulaire){ 
            e.preventDefault(); 
        }
    });
});
