// Fonction qui permet d'empêcher l'envoi du formulaire si tous les champs ne sont rempli.
// Cette fonction permet aussi de d'indiquer à quel endroit le champ n'est pas valide.
document.getElementById("nouveau_client").addEventListener("change", function() {
    var clientForm = document.getElementById("nouveau_client_form");
    if (this.checked) {
        clientForm.style.display = "block";
        document.getElementById("vehicule").value = document.getElementById("marque").value + " " + document.getElementById("modele").value;
    } else {
        clientForm.style.display = "none";
        document.getElementById("vehicule").value = "";
    }
});

function submitForm(event) {
    var inputs = document.getElementsByTagName('input');
    var emptyFields = [];
    for (var i = 0; i < inputs.length; i++) {
        if (
            (inputs[i].value === '') &&
            inputs[i].type !== 'file' &&
            !inputs[i].classList.contains('checkbox') &&
            inputs[i].id !== 'nouveau_client'
            (document.getElementById('nouveau_client_form').style.display !== 'block' || inputs[i].form === undefined || inputs[i].form.id !== 'nouveau_client_form')
        ) {
            emptyFields.push(inputs[i].name);
            inputs[i].classList.add('invalid-field');
        } else {
            inputs[i].classList.remove('invalid-field');
        }
    }

    if (emptyFields.length > 0) {
        var message = 'Veuillez remplir tous les champs!';
        alert(message);
        if (event) {
            event.preventDefault();
        }
        return false;
    }

    alert('Le véhicule a été créé avec succès!');
}






