function submitForm(event) {
    var inputs = document.getElementsByTagName('input');
    var emptyFields = [];
    for (var i = 0; i < inputs.length; i++) {
        if (inputs[i].value === '') {
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
    alert('Le nouvel employé a été créé avec succès!');
}
