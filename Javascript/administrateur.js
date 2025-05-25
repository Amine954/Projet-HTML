function Modification_VIP(bouton){

    const td = bouton.parentElement;
    const champ = td.previousElementSibling;
    const tr = td.parentElement;
    const email = tr.children[2].textContent;
    

    if(champ.innerHTML == "oui"){
        champ.innerHTML = "non";
    }
    else{
        champ.innerHTML = "oui";
    }
    
    const xhr = new XMLHttpRequest();
    xhr.open("POST", "PHP-fichier/modification_VIP.php");
    xhr.setRequestHeader("Content-Type", "application/x-www-form-urlencoded", true);
    

    xhr.send("email=" + email);
}

function Modification_reduc(bouton){
    const td = bouton.parentElement;
    const champ = td.previousElementSibling;
    const tr = td.parentElement;
    const email = tr.children[2].textContent;
    
    const nouvelleValeur = prompt("Nouvelle valeur de réduction ?");

    
    // Vérification basique (nombre entre 0 et 100)
    if (nouvelleValeur !== null) {
        const nb = parseInt(nouvelleValeur);
        if (!isNaN(nb) && nb >= 0 && nb <= 100) {
            champ.textContent = nb + "%";
            
            const xhr = new XMLHttpRequest();
            xhr.open("POST", "PHP-fichier/modification_reduc.php");
            xhr.setRequestHeader("Content-Type", "application/x-www-form-urlencoded", true);

            xhr.send("email=" + email + "&reduc=" + champ.textContent);
            
        } else {
            alert("Veuillez entrer un pourcentage valide entre 0 et 100.");
        }
    }
}


function Modification_BAN(bouton){

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
    
    const xhr = new XMLHttpRequest();
    xhr.open("POST", "PHP-fichier/modification_BAN.php", true);
    xhr.setRequestHeader("Content-Type", "application/x-www-form-urlencoded");


    xhr.send("email=" + email);
}
