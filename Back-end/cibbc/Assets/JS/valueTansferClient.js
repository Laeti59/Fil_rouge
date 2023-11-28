var checkbox = document.getElementsByClassName("checkbox");

for (let i = 0; i < checkbox.length; i++) {
    const element = checkbox[i].addEventListener("click", valueTransfer);
}

function valueTransfer(event) {

    parent = event.currentTarget.parentNode;

    nom = parent.getElementsByClassName("nom")[0].innerText;
    prenom = parent.getElementsByClassName("prenom")[0].innerText;
    adresse = parent.getElementsByClassName("adresse-class")[0].innerText;
    zipcode = parent.getElementsByClassName("zipcode")[0].innerText;
    ville = parent.getElementsByClassName("ville")[0].innerText;
    phone = parent.getElementsByClassName("phone")[0].innerText;
    mail = parent.getElementsByClassName("mail-class")[0].innerText;
    loginElement = parent.getElementsByClassName("login")[0];
    passwordElement = parent.getElementsByClassName("password")[0];

    var login = loginElement.innerText;
    var password = passwordElement.innerText;

    document.getElementById("nom").value = nom;
    document.getElementById("prenom").value = prenom;
    document.getElementById("adresse").value = adresse;
    document.getElementById("zipcode").value = zipcode;
    document.getElementById("ville").value = ville;
    document.getElementById("phone").value = phone;
    document.getElementById("mail").value = mail;
    document.getElementById("login").value = login;
    document.getElementById("password").value = password;

    console.log(password);
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

