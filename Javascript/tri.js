document.getElementById("tri-js").addEventListener("change", function () {
    const tri = this.value;
    const container = document.querySelector(".voyage-grid");
    const items = Array.from(container.querySelectorAll(".voyage-item"));

    let sorted = [...items]; // copier pour ne pas muter l'original si "recommande"

    switch (tri) {
        case "prix-asc":
            sorted.sort((a, b) => parseFloat(a.dataset.prix) - parseFloat(b.dataset.prix));
            break;
        case "prix-desc":
            sorted.sort((a, b) => parseFloat(b.dataset.prix) - parseFloat(a.dataset.prix));
            break;
        case "alpha-asc":
            sorted.sort((a, b) => a.dataset.nom.localeCompare(b.dataset.nom));
            break;
        case "alpha-desc":
            sorted.sort((a, b) => b.dataset.nom.localeCompare(a.dataset.nom));
            break;
        case "recommande":
            sorted = items; // revenir à l’ordre initial du HTML
            break;
    }

    container.innerHTML = "";
    sorted.forEach(item => container.appendChild(item));
}); 
