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

        // this.boxOneInstance.displayText();
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

        if (this.parentElement.parentElement.currentModal) {
            return; // Sortir de la méthode si la modal existe déjà
        }

        /* La modal*/
        const modal = document.createElement('div');
        modal.classList.add('modal');
        modal.style.backgroundColor = "#ecf0f1";
        modal.style.width = "1200px";
        modal.style.paddingBlock = "40px"
        modal.style.marginTop = "-300px";
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

        this.parentElement.parentElement.currentModal = modal;

        this.parentElement.appendChild(modal);
    }
};


/* Rubrique Mandat*/

let canvas = document.createElement('canvas');
        
        document.body.appendChild(canvas);

        let context = canvas.getContext('2d');

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

        if (this.parentElement.parentElement.modal) {
            return;
        }

        if (this.parentElement.parentElement.currentModal) {
            this.parentElement.parentElement.currentModal.remove();
        }

        const modalMandat = document.createElement('div');
        modalMandat.classList.add('modalMandat');
        modalMandat.style.backgroundColor = "#ecf0f1";
        modalMandat.style.width = "1200px";
        modalMandat.style.height = "350px";
        modalMandat.style.marginTop = "-300px";
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

        
        
        context.beginPath();
        context.lineWidth = "2";
        context.arc(100, 100, 35, 0, 2 * Math.PI);
        context.stroke();
        

        

        function drawCircle2() {
            const canvas = document.createElement('canvas');
            document.body.appendChild(canvas);

            const context = canvas.getContext('2d');
            context.beginPath();
            context.lineWidth = "2";
            context.arc(100, 100, 35, 0, 2 * Math.PI);
            context.stroke();
        }

        drawCircle2();

        function drawCircle3() {
            const canvas = document.createElement('canvas');
            document.body.appendChild(canvas);

            const context = canvas.getContext('2d');
            context.beginPath();
            context.lineWidth = "2";
            context.arc(100, 100, 35, 0, 2 * Math.PI);
            context.stroke();
        }

        drawCircle3();

        modalMandat.appendChild(modalContent);

        this.parentElement.parentElement.currentModal = modalMandat;

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


        if (this.parentElement.parentElement.currentModal) {
            this.parentElement.parentElement.currentModal.remove();
        }

        const modalMessagerie = document.createElement('div');
        modalMessagerie.classList.add('modalMessagerie');
        modalMessagerie.style.backgroundColor = "#ecf0f1";
        modalMessagerie.style.width = "1200px";
        modalMessagerie.style.height = "350px";
        modalMessagerie.style.marginTop = "-300px";
        modalMessagerie.style.marginLeft = "270px";
        modalMessagerie.style.border = "1px solid #B8B8B8";
        modalMessagerie.style.paddingLeft = "30px";
        modalMessagerie.style.paddingTop = "30px";

        let modalContent = document.createElement('div');
        modalContent.classList.add('modal-content');


        modalMessagerie.appendChild(modalContent);

        this.parentElement.parentElement.currentModal = modalMessagerie;

        this.parentElement.appendChild(modalMessagerie);
    }
}


document.addEventListener('DOMContentLoaded', () => {
    const boxOneInstance = new BoxOne();
    boxOneInstance.boxOneInstance.displayText();
    boxOneInstance.mandatInstance.displayText();
    boxOneInstance.messagerieInstance.displayText();
});




