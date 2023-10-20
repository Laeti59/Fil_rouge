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

        this.vehiculeInstance = new vehicule(boxOne);
        this.mandatInstance = new mandat(boxOne);
        this.messagerieInstance = new messagerie(boxOne);

        this.vehiculeInstance.displayText();
        this.mandatInstance.displayText();
        this.messagerieInstance.displayText();
    }
}


/* Rubrique Véhicules*/

class vehicule {
    constructor(parentElement) {
        this.name = "Mes véhicules";
        this.parentElement = parentElement;
        this.element = null;
    }

    displayText() {
        const boite1 = document.createElement('p');
        boite1.textContent = this.name;
        boite1.classList.add('vehicule');
        this.parentElement.appendChild(boite1);
        this.element = boite1;
        this.element.addEventListener('click', this.openModalVehicule.bind(this));
    }

    /* Création de la modal*/

    openModalVehicule() {


        if (currentModal !== null) {
            currentModal.remove();
        }

        const titleElement = document.querySelector('.main-title');
        titleElement.classList.add('title-hidden');


        /* La modal*/
        const modal = document.createElement('div');
        modal.classList.add('modal');
        modal.style.id = "modal";
        modal.style.backgroundColor = "#ecf0f1";
        modal.style.width = "1200px";
        modal.style.paddingBlock = "40px"
        modal.style.marginTop = "-200px";
        modal.style.marginLeft = "270px";
        modal.style.border = "1px solid #B8B8B8";
        modal.style.paddingLeft = "30px";
        modal.style.paddingTop = "30px";

        let modalContent = document.createElement('div');
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
        marque.style.marginTop = "10px";
        marque.style.fontSize = "18px";
        marque.style.marginLeft = "250px";
        modalContent.appendChild(marque);

        /* Le modèle*/

        let modele = document.createElement('p');
        modele.textContent = "Zarifa";
        modele.style.marginTop = "10px";
        modele.style.fontSize = "18px";
        modele.style.marginLeft = "250px";
        modalContent.appendChild(modele);

        /* L'immatriculation*/

        let immatriculation = document.createElement('p');
        immatriculation.textContent = "AZ-527-KJ";
        immatriculation.style.marginTop = "10px";
        immatriculation.style.fontSize = "18px";
        immatriculation.style.marginLeft = "250px";
        modalContent.appendChild(immatriculation);

        /* Le prix*/

        let prix = document.createElement('p');
        prix.textContent = "8 690€";
        prix.style.marginTop = "10px";
        prix.style.fontSize = "18px";
        prix.style.marginLeft = "250px";
        modalContent.appendChild(prix);

        /* Le kilométrage*/

        let kilométrage = document.createElement('p');
        kilométrage.textContent = "168 000KM";
        kilométrage.style.marginTop = "10px";
        kilométrage.style.fontSize = "18px";
        kilométrage.style.marginLeft = "250px";
        modalContent.appendChild(kilométrage);


        /* Ajout du contenu à la modal*/

        modal.appendChild(modalContent);

        currentModal = modal;

        this.parentElement.appendChild(modal);
    }
};


/* Rubrique Mandat*/

class mandat {
    constructor(parentElement) {
        this.name = "Mandat";
        this.parentElement = parentElement;
        this.element = null;
    }

    displayText() {
        const boite2 = document.createElement('p');
        boite2.textContent = this.name;
        boite2.classList.add('mandat');
        this.parentElement.appendChild(boite2);
        this.element = boite2;
        this.element.addEventListener('click', this.openModalMandat.bind(this));
    }

    openModalMandat() {

        if (currentModal !== null) {
            currentModal.remove();
        }

        const titleElement = document.querySelector('.main-title');
    titleElement.classList.add('title-hidden')

        /*La modal*/

        const modalMandat = document.createElement('div');
        modalMandat.classList.add('modalMandat');
        modalMandat.id = "modalMandat";
        modalMandat.style.backgroundColor = "#ecf0f1";
        modalMandat.style.width = "1200px";
        modalMandat.style.height = "350px";
        modalMandat.style.marginTop = "-200px";
        modalMandat.style.marginLeft = "270px";
        modalMandat.style.border = "1px solid #B8B8B8";
        modalMandat.style.paddingLeft = "30px";
        modalMandat.style.paddingTop = "30px";

        let modalContent = document.createElement('div');
        modalContent.classList.add('modal-content');

        /* Le titre*/

        let titre = document.createElement('p');
        titre.textContent = "Mon Véhicule";
        titre.style.fontSize = "24px";
        titre.style.textDecoration = "Underline";
        modalContent.appendChild(titre);

        let image = document.createElement("img");
        image.src = "../Assets/Voiture/Opel Zafira/photo.jpg";
        image.style.width = "250px";
        image.style.width = "220px";
        image.style.marginTop = "20px";
        modalContent.appendChild(image);

        /* La marque*/

        let marque = document.createElement('p');
        marque.textContent = "Opel Zafira";
        marque.style.fontSize = "18px";
        marque.style.marginLeft = "250px";
        marque.style.marginTop = "-120px"
        modalContent.appendChild(marque);


        /* Les cercles*/

        const canvas = document.createElement('canvas');
        canvas.width = 600;
        canvas.style.marginLeft = "320px";
        modalContent.appendChild(canvas);

        const context = canvas.getContext('2d');
        context.lineWidth = "2";

        function drawCircle(x, y) {
            context.beginPath();
            context.arc(x, y, 35, 0, 2 * Math.PI);
            context.stroke();
        }

        drawCircle(100, 100);
        drawCircle(300, 100);
        drawCircle(500, 100);

        /* Div texte bull*/

        let divTexte = document.createElement('div');
        divTexte.style.width = "60%";
        divTexte.style.display = "flex";
        divTexte.style.justifyContent = "space-evenly";
        divTexte.style.marginLeft = "320px";
        modalContent.appendChild(divTexte);

        /* En cours*/

        let enCours = document.createElement('p');
        enCours.textContent = "En cours";
        enCours.style.width = "20%";
        divTexte.appendChild(enCours);

        /* Résilier ou Virement reçu*/

        let resilier = document.createElement('p');
        resilier.textContent = "Résilier ou Virement reçu";
        resilier.style.width = "20%";
        divTexte.appendChild(resilier);

        /* Vendu*/

        let vendu = document.createElement('p');
        vendu.textContent = " Vendu";
        vendu.style.width = "20%";
        divTexte.appendChild(vendu);


        modalMandat.appendChild(modalContent);

        currentModal = modalMandat;

        this.parentElement.appendChild(modalMandat);
    }
}


/* Rubrique Messagerie*/

class messagerie {
    constructor(parentElement) {
        this.name = "Messagerie";
        this.parentElement = parentElement;
        this.element = null;
    }

    displayText() {
        const boite3 = document.createElement('p');
        boite3.textContent = this.name;
        boite3.classList.add('messagerie');
        this.parentElement.appendChild(boite3);
        this.element = boite3;
        this.element.addEventListener('click', this.openModalMessagerie.bind(this))
    }


    openModalMessagerie() {

        if (currentModal !== null) {
            currentModal.remove();
        }

        const titleElement = document.querySelector('.main-title');
    titleElement.classList.add('title-hidden');


        /*La modal*/

        const modalMessagerie = document.createElement('div');
        modalMessagerie.classList.add('modalMessagerie');
        modalMessagerie.id = "modalMessagerie";
        modalMessagerie.style.backgroundColor = "#ecf0f1";
        modalMessagerie.style.width = "1200px";
        modalMessagerie.style.height = "375px";
        modalMessagerie.style.marginTop = "-200px";
        modalMessagerie.style.marginLeft = "270px";
        modalMessagerie.style.border = "1px solid #B8B8B8";
        modalMessagerie.style.paddingLeft = "30px";

        const titre = document.createElement('p');
        titre.textContent = "Votre conversation avec votre conseillé Bye Buy Car Lille";
        titre.style.paddingTop = "20px";
        titre.style.fontSize = "18px";
        titre.style.color = "#84817a";
        titre.style.marginBottom = "-20px";

        /* La zone du message*/

        const zoneMessage = document.createElement('div');
        zoneMessage.classList.add('zoneMessage');
        zoneMessage.style.width = "1150px";
        zoneMessage.style.height = "315px";
        zoneMessage.style.borderTop = "1px solid #B8B8B8";
        zoneMessage.style.borderLeft = "1px solid #B8B8B8";
        zoneMessage.style.borderRight = "1px solid #B8B8B8";
        zoneMessage.style.backgroundColor = "white";
        zoneMessage.style.marginTop = "38px";
        zoneMessage.style.marginLeft = "10px";

        /* Zone pour écrire le message*/

        const ecrireMessage = document.createElement('div');
        ecrireMessage.classList.add('ecrireMessage');
        ecrireMessage.style.width = "1050px";
        ecrireMessage.style.height = "103px";
        ecrireMessage.style.borderTop = "1px solid #B8B8B8";
        ecrireMessage.style.borderRight = "1px solid #B8B8B8";
        ecrireMessage.style.backgroundColor = "#f5f6fa";
        ecrireMessage.style.marginTop = "210px";

        const indication = document.createElement('p');
        indication.textContent = "Ecrivez votre message";
        indication.style.fontSize = "16px";
        indication.style.color = "#d1ccc0";
        indication.style.marginTop = "45px";
        indication.style.marginLeft = "20px";

        /* Flèche d'envoi*/

        const fleche = document.createElement('img');
        fleche.src = "../Assets/Image/icons8-sent-50.png";
        fleche.style.width = "40px";
        fleche.style.height = "40px";
        fleche.style.marginLeft = "1080px";
        fleche.style.marginTop = "-120px";

        this.parentElement.parentElement.currentModal = modalMessagerie;
        this.parentElement.appendChild(modalMessagerie);

        modalMessagerie.appendChild(titre);
        modalMessagerie.appendChild(zoneMessage);
        zoneMessage.appendChild(ecrireMessage);
        ecrireMessage.appendChild(indication);
        ecrireMessage.appendChild(fleche);


        currentModal = modalMessagerie;

        this.parentElement.appendChild(modalMessagerie);
    }
}


let currentModal = null;

document.addEventListener('DOMContentLoaded', () => {
    const boxOneInstance = new BoxOne();
});

document.addEventListener('DOMContentLoaded', () => {
    const titleElement = document.querySelector('.main-title');
});





