function checkFormulaire() {
    
    var personnes = document.getElementById("personnes");
    var date = document.getElementById("date");
    var verif = 1;

    if (personnes.value.trim() == "" || /[^0-9]/.test(personnes.value) || personnes.value < 0 || personnes.value > 10) {
        document.getElementById("errorPersonnes").textContent = "Veuillez entrer un nombre valide de personnes.";
        verif = 0;
    }
    if (verif == 1) {
        return true;
    }

    return false;
}