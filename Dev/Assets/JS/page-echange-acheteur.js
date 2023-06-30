/*Nom du client*/

class contact {
    constructor() {
        this.name = "MORGAN COSTEAUX"
    }

    displayText() {
        const paragraph = document.createElement('p');
        paragraph.textContent = this.name;
        paragraph.classList.add('contact');
        document.body.appendChild(paragraph);
    }
}

const contactInstance = new contact();

document.addEventListener('DOMContentLoaded', () => {
    contactInstance.displayText();
});


/* Nom du client*/

class client {
    constructor() {
        this.name = "LAETITIA THOUVENIN"
    }

    displayText() {
        const paragraph2 = document.createElement('p');
        paragraph2.textContent = this.name;
        paragraph2.classList.add('client');
        document.body.appendChild(paragraph2);
    }
}

const clientInstance = new client();

document.addEventListener('DOMContentLoaded', () => {
    clientInstance.displayText();
});

/* Box des rubriques*/

class BoxOne {
    constructor() {
        const boxOne = document.createElement('div');
        boxOne.classList.add('BoxOne');
        document.body.appendChild(boxOne);

        this.boxOneInstance = new vehicule(boxOne);
        this.mandatInstance = new mandat(boxOne);
        this.messagerieInstance = new messagerie(boxOne);
    }
}


/* Rubrique Véhicules*/

class vehicule {
    constructor(parentElement) {
        this.name = "Mes véhicules";
        this.parentElement = parentElement;
    }

    displayText() {
        const boite1 = document.createElement('p');
        boite1.textContent = this.name;
        boite1.classList.add('vehicule');
        this.parentElement.appendChild(boite1);
    }

    /* Création de la modal*/

    openModalVehicule() {

        /* La modal*/
        const modal = document.createElement('div');
        modal.classList.add('modal');
        modal.style.backgroundColor = "#ecf0f1";
        modal.style.width = "1200px";
        modal.style.height = "350px";
        modal.style.marginTop = "-300px";
        modal.style.marginLeft = "270px";
        modal.style.border = "1px solid #B8B8B8";
        modal.style.paddingLeft = "30px";
        modal.style.paddingTop = "30px";

        const modalContent = document.createElement('div');
        modalContent.classList.add('modal-content');

        /* Element dans la modal*/

        /* Le titre*/

        let titre = document.createElement('p');
        titre.textContent = "Mon Véhicule";
        titre.style.fontSize = "24px";
        titre.style.textDecoration = "Underline";
        modalContent.appendChild(titre);
        
        /* L'image du véhicule*/

        let image = document.createElement("img");
        image.src = "../Assets/Voiture/Opel Zafira/photo.jpg";
        image.style.width = "250px";
        image.style.width = "220px";
        image.style.marginTop = "20px";
        modalContent.appendChild(image);

        /* La référence de l'annonce*/

        let reference = document.createElement('p');
        reference.textContent = "Référence de l'annonce n°A204-26";
        reference.style.fontSize = "18px";
        reference.style.marginLeft = "250px";
        reference.style.marginTop = "-130px";
        modalContent.appendChild(reference);

        /* La marque*/

        let marque = document.createElement('p');
        marque.textContent = "Opel";
        marque.style.fontSize = "18px";
        marque.style.marginLeft = "250px";
        modalContent.appendChild(marque);

        /* Le modèle*/

        let modele = document.createElement('p');
        modele.textContent = "Zarifa";
        modele.style.fontSize = "18px";
        modele.style.marginLeft = "250px";
        modalContent.appendChild(modele);

        /* L'immatriculation*/

        let immatriculation = document.createElement('p');
        immatriculation.textContent = "AZ-527-KJ";
        immatriculation.style.fontSize = "18px";
        immatriculation.style.marginLeft = "250px";
        modalContent.appendChild(immatriculation);

        /* Le prix*/

        let prix = document.createElement('p');
        prix.textContent = "8 690€";
        prix.style.fontSize = "18px";
        prix.style.marginLeft = "250px";
        modalContent.appendChild(prix);

        /* Le kilométrage*/

        let kilométrage = document.createElement('p');
        kilométrage.textContent = "168 000KM";
        kilométrage.style.fontSize = "18px";
        kilométrage.style.marginLeft = "250px";
        modalContent.appendChild(kilométrage);


        /* Ajout du contenu à la modal*/

        modal.appendChild(modalContent);

        this.parentElement.appendChild(modal);
}
};


/* Rubrique Mandat*/

class mandat {
    constructor(parentElement) {
        this.name = "Mandat";
        this.parentElement = parentElement;
    }

    displayText() {
        const boite2 = document.createElement('p');
        boite2.textContent = this.name;
        boite2.classList.add('mandat');
        this.parentElement.appendChild(boite2);
    }
}


/* Rubrique Messagerie*/

class messagerie {
    constructor(parentElement) {
        this.name = "Messagerie";
        this.parentElement = parentElement;
    }

    displayText() {
        const boite3 = document.createElement('p');
        boite3.textContent = this.name;
        boite3.classList.add('messagerie');
        this.parentElement.appendChild(boite3);
    }
}


document.addEventListener('DOMContentLoaded', () => {
    const boxOneInstance = new BoxOne();
    boxOneInstance.boxOneInstance.displayText();
    boxOneInstance.mandatInstance.displayText();
    boxOneInstance.messagerieInstance.displayText();;
    boxOneInstance.boxOneInstance.openModalVehicule();
});



/* Pop-up véhicule*/



