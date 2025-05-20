function prix(){
    var montant = 0;
    var prix = 0;
    var duree = document.getElementById("duree");
    var cabine = document.getElementById("cabines");
    var parcours = document.getElementById("parcours");
    var wifi = document.getElementById("consent-wifi");
    var animaux = document.getElementById("consent-animaux");
    var nb_personnes = document.getElementById("personnes");

    var prixparnuit = document.getElementById("prixparnuit");
    var submit = document.getElementById("submit");

    if(duree.value == "vide"){
        prix = 0;
        submit.innerHTML = "<i class='fas fa-ship'></i> Embarquer pour l'aventure - "+prix+" €";
        return ;
    }
    
    prix = parseInt(prixparnuit.textContent) * parseInt(duree.value);

    if(cabine.value == "Cabine avec Balcon"){
        prix += 50 * parseInt(duree.value);
    }
    else if(cabine.value == "Suite Deluxe"){
        prix += 150 * parseInt(duree.value);
    }

    if(parcours.value == "Flex 1"){
        prix += 100;
    }
    else if(parcours.value == "Flex 2"){
        prix += 300;
    }

    if(wifi.checked){
        prix += 10 * parseInt(duree.value);
    }
    if(animaux.checked){
        prix += 8 * parseInt(duree.value);
    }

    if(nb_personnes.value.trim() == "" || /[^0-9]/.test(nb_personnes.value) || parseInt(nb_personnes.value) <= 0 || parseInt(nb_personnes.value) > 10){
        montant = 0;
    }
    else{
        montant = prix * parseInt(nb_personnes.value);
    }

    submit.innerHTML = "<i class='fas fa-ship'></i> Embarquer pour l'aventure - "+montant+" €";
}