function Modification_VIP_et_ban(bouton){

    const td = bouton.parentElement;
    const champ = td.previousElementSibling;
    const tr = td.parentElement;
    const email = tr.children[2].textContent;
    

    if(champ.innerHTML === "oui"){
        champ.innerHTML = "non";
    }
    else{
        champ.innerHTML = "oui";
    }
}

function Modification_reduc(bouton){
    const td = bouton.parentElement;
    const champ = td.previousElementSibling;
    const tr = td.parentElement;
    const email = tr.children[2].textContent;
    
    const ancienneValeur = champ.textContent;
    const nouvelleValeur = prompt("Nouvelle valeur de réduction ?", ancienneValeur.replace("%", ""));

    
    // Vérification basique (nombre entre 0 et 100)
    if (nouvelleValeur !== null) {
        const nb = parseFloat(nouvelleValeur);
        if (!isNaN(nb) && nb >= 0 && nb <= 100) {
            champ.textContent = nb + "%";
        } else {
            alert("Veuillez entrer un pourcentage valide entre 0 et 100.");
        }
    }
}
    
