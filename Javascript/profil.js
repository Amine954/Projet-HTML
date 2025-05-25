function modif_champ(bouton){
    const divChamp = bouton.parentElement;
    const span = divChamp.querySelector("span");
    const divProfil = divChamp.parentElement;
    const ancienneValeur = span.textContent;


    const input = document.createElement("input");
    input.type = "text";
    input.name = "modification";
    input.value = ancienneValeur;


    divChamp.replaceChild(input, span);

    bouton.innerHTML = '<i class="fa-solid fa-check"></i>';


    //Création du bouton de retour
    const retour = document.createElement("button");
    retour.innerHTML= '<i class="fa-solid fa-arrow-left"></i>';
    retour.onclick = function(){
        divChamp.replaceChild(span, input);

        bouton.innerHTML = '<i class="fa-solid fa-pencil"></i>';
        bouton.onclick = function() {
            modif_champ(bouton);
        }
        divChamp.removeChild(retour);
    }

    divChamp.appendChild(retour);


    bouton.onclick = function(){
        const nouveauSpan = document.createElement("span");
        
        nouveauSpan.textContent = input.value;
        divChamp.replaceChild(nouveauSpan, input);

        bouton.innerHTML = '<i class="fa-solid fa-pencil"></i>';
        bouton.onclick = function() {
            modif_champ(bouton);
        };
        divChamp.removeChild(retour);
        

        if((nouveauSpan.textContent !== ancienneValeur) && !document.getElementById("valid_bouton")){
            const validation = document.createElement("button");
            validation.innerHTML = "Validation informations";
            validation.onclick = function(){
                validationProfil(this);
            }
            validation.id = "valid_bouton";

            divProfil.appendChild(validation);
        }
        

    }

}

function validationProfil(bouton){
    const divProfil = bouton.parentElement;
    divProfil.removeChild(bouton);
    
    //champs est un tableau indexé des div de profil
    const champs = divProfil.querySelectorAll(".InfoProfil");
    var donnees = [];

    champs.forEach(div => {
        const span = div.querySelector("span");
        if(span){
            donnees.push(span.textContent.trim()); 
        }
        
    })

    const xhr = new XMLHttpRequest();
    xhr.open("POST", "PHP-fichier/modification_profil.php");
    xhr.setRequestHeader("Content-Type", "application/x-www-form-urlencoded");

    xhr.send("nom=" + donnees[0] + "&prenom=" + donnees[1] + "&email=" 
    + donnees[2] + "&mdp=" + donnees[3] + "&tel=" + donnees[4]);
}