// Fonction qui permet d'empêcher l'envoi du formulaire si tous les champs ne sont rempli.
// Cette fonction permet aussi de d'indiquer à quel endroit le champ n'est pas valide.

document.getElementById("client_existant").addEventListener("change", function() {
    var clientFormExistant = document.getElementById("client_existant_form");
    if (this.checked) {
        clientFormExistant.style.display = "block";
    } 
    else {
        clientFormExistant.style.display = "none";
    }
});

function submitForm(event) {
    var inputs = document.getElementsByTagName('input');
    var emptyFields = [];
    for (var i = 0; i < inputs.length; i++) {
        if (
            (inputs[i].value === '') &&
            inputs[i].type !== 'file' &&
            !inputs[i].classList.contains('checkbox')
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
