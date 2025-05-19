function checkFormulaire() {
    
    var nom = document.getElementById("nom");
    var prenoms = document.getElementById("prenoms");
    var telephone = document.getElementById("telephone");
    var email = document.getElementById("email");
    var personnes = document.getElementById("personnes");
    var date = document.getElementById("date");
    var verif = 1;
    
    if (nom.value.trim() ==  "" || /[^a-zA-Z]/.test(nom.value)) {
        document.getElementById("errorNom").textContent = "Veuillez entrer un nom valide.";    
        verif = 0;
    }

    if (prenoms.value.trim() == "" || /[^a-zA-Z]/.test(prenoms.value)) {
        document.getElementById("errorPrenoms").textContent = "Veuillez entrer un prénom valide.";
        verif = 0;      
    }

    if (telephone.value.trim() == "" || /[^0-9]/.test(telephone.value)) {
        document.getElementById("errorTelephone").textContent = "Veuillez entrer un numéro de téléphone valide.";
        verif = 0;
    }

    if (email.value.trim() == "" || /[^a-zA-Z0-9@.]/.test(email.value)) {
        document.getElementById("errorEmail").textContent = "Veuillez entrer une adresse e-mail valide.";
        verif = 0;
    }

    if (personnes.value.trim() == "" || /[^0-9]/.test(personnes.value) || personnes.value < 0 || personnes.value > 10) {
        document.getElementById("errorPersonnes").textContent = "Veuillez entrer un nombre valide de personnes.";
        verif = 0;
    }
    if (verif == 1) {
        return true;
    }

    return false;
}