document.addEventListener("DOMContentLoaded", function () {

document.getElementById("creer_vehicule").addEventListener("change", function() {
    var vehiculeForm = document.getElementById("creer_vehicule_form");
    if (this.checked) {
        vehiculeForm.style.display = "block";
    } 
    else {
        vehiculeForm.style.display = "none";
    }
});

function submitForm(event) {
    var inputs = document.querySelectorAll('input:not([type="checkbox"])');
    var emptyFields = [];

    // Vérifie les champs du formulaire du client
    inputs.forEach(function(input) {
        if (input.value === '') {
            emptyFields.push(input.name);
            input.classList.add('invalid-field');
        } else {
            input.classList.remove('invalid-field');
        }
    });

    // Si la case à cocher est cochée, vérifie les champs du formulaire de véhicule
    if (document.getElementById("creer_vehicule").checked) {
        var vehiculeInputs = document.getElementById("creer_vehicule_form").querySelectorAll('input:not([type="checkbox"])');
        vehiculeInputs.forEach(function(vehiculeInput) {
            if (vehiculeInput.value === '') {
                emptyFields.push(vehiculeInput.name);
                vehiculeInput.classList.add('invalid-field');
            } else {
                vehiculeInput.classList.remove('invalid-field');
            }
        });
    }

    if (emptyFields.length > 0) {
        var message = 'Veuillez remplir tous les champs!';
        alert(message);
        if (event) {
            event.preventDefault();
        }
        return false;
    }

    alert('Le client a été créé avec succès!');
}

var form = document.getElementById("creer_vehicule_form");

    // Ajoutez un gestionnaire d'événements pour la soumission du formulaire
    form.addEventListener("submit", function (event) {
        submitForm(event);
    });

});
