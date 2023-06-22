/* Envoi du formulaire à la base de donnée*/

const btn = document.getElementsByClassName('envoyer-form');

function sendData(data) {
    console.log('Envoi des données en cours');

    const XHR = new XMLHttpRequest();

    const urlEncodedDataPairs = [];

    for (const [name, value] of Object.entries(data)) {
        urlEncodedDataPairs.push(`${encodeURIComponent(name)}=${encodeURIComponent(value)}`);
    }

    const urlEncodedData = urlEncodedDataPairs.join('&').replace(/%20/g, '+');

    XHR.addEventListener('load', (event) => {
        alert('Les données ont été envoyées et la réponse chargée.');
    });

    XHR.addEventListener('error', (event) => {
        alert('Une erreur est survenue.');
    });


    XHR.open('POST', /*Ici l'URL vers la base de donnée*/);

    
    XHR.setRequestHeader('Content-Type', 'application/x-www-form-urlencoded');

    XHR.send(urlEncodedData);
}

btn.addEventListener('click', () => {
    sendData({ test: 'ok' });
})


/* Verification des caractères envoi l'envoi du formulaire*/

function validateForm() {

    let nomInput = document.getElementsByClassName("nom-form");
    if (nomInput.value.length < 1) {
        alert("Le nom doit comporter au moins 1 caractère.");
    }

    let prenomInput = document.getElementsByClassName("prenom-form");
    if (prenomInput.value.length < 1) {
        alert("Le prénom à contacter doit comporter au moins 1 caractère.");
    }

    let adresseInput = document.getElementsByClassName("adresse-form");
    if (adresseInput.value.length < 1) {
        alert("La ville doit comporter au moins 1 caractère.");
    }

    let emailInput = document.getElementsByClassName("mail-form");
    if (!emailInput.value.includes("@")) {
        alert("L'e-mail doit comporter au moins le caractère \"@\".");
    }

    let telInput = document.getElementsByClassName("tel-form");
    if (!telInput.value.match(/^\d{10}$/)) {
        alert("Le code postal doit comporter 5 caractères numériques.");
    }

    else{
        document.location.href="file:///C:/Users/PiouPiou/Desktop/formation_dev/Fil%20rouge/Fil_rouge/HTML/page-acheteur.html";
    }


    return true;
}