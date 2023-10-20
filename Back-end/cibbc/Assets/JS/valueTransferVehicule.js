var checkbox = document.getElementsByClassName("checkbox");

for (let i = 0; i < checkbox.length; i++) {
    const element = checkbox[i].addEventListener("click", valueTransfer);
}

function valueTransfer(event) {

    parent = event.currentTarget.parentNode;

    marque = parent.getElementsByClassName("marque")[0].innerText;
    modele = parent.getElementsByClassName("modele")[0].innerText;
    annee = parent.getElementsByClassName("annee")[0].innerText;
    kilometre = parent.getElementsByClassName("kilometre")[0].innerText;
    couleur = parent.getElementsByClassName("couleur")[0].innerText;
    carburant = parent.getElementsByClassName("carburant")[0].innerText;
    transmission = parent.getElementsByClassName("transmission")[0].innerText;
    prix = parent.getElementsByClassName("prix")[0].innerText;

    document.getElementById("marque").value = marque;
    document.getElementById("modele").value = modele;
    document.getElementById("annee").value = annee;
    document.getElementById("kilometrage").value = kilometre;
    document.getElementById("couleur").value = couleur;
    document.getElementById("carburant").value = carburant;
    document.getElementById("transmission").value = transmission;
    document.getElementById("prix").value = prix;

}

var checkboxes = document.querySelectorAll('.checkbox input[type="checkbox"]');

for (let i = 0; i < checkboxes.length; i++) {
    checkboxes[i].addEventListener('change', function(event) {
        if (this.checked) {
            for (let j = 0; j < checkboxes.length; j++) {
                if (checkboxes[j] !== this) {
                    checkboxes[j].checked = false;
                }
            }
        }
        valueTransfer(event); 
    });
}

