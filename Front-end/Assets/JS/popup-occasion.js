let modalInstance;

document.addEventListener('DOMContentLoaded', () => {
    modalInstance = new modalOccasion();
    console.log("aie");
});

class modalOccasion {
    constructor() {
        this.parentElement = document.body;
        this.currentModal = null;

        this.createModal();
        this.setupEvents();

    }

    createModal() {
        const modalOccasion = document.createElement('div');
        modalOccasion.classList.add('modal');
        modalOccasion.id = 'modalTest';
        
        const boite = document.createElement('div');
        boite.classList.add('boite');

        const boiteContent = document.createElement('div');
        boiteContent.classList.add('boite-content');



        
        // Les marques
        const marque = document.createElement('div');
        marque.classList.add('marque');
        boiteContent.appendChild(marque);

        let titre1 = document.createElement('h2');
        titre1.textContent = "PAR MARQUE";
        marque.appendChild(titre1);

        let renault = document.createElement('p');
        renault.textContent = "Nos Véhicules Renault";
        marque.appendChild(renault);

        let peugeot = document.createElement('p');
        peugeot.textContent = "Nos Véhicules Peugeot";
        marque.appendChild(peugeot);

        let citroen = document.createElement('p');
        citroen.textContent = "Nos Véhicules Citroën";
        marque.appendChild(citroen);

        let kya = document.createElement('p');
        kya.textContent = "Nos Véhicules Kya";
        marque.appendChild(kya);

        let bmw = document.createElement('p');
        bmw.textContent = "Nos Véhicules BMW";
        marque.appendChild(bmw);

        let mercedes = document.createElement('p');
        mercedes.textContent = "Nos Véhicules Mercedes";
        marque.appendChild(mercedes);

        let audi = document.createElement('p');
        audi.textContent = "Nos Véhicules Audi";
        marque.appendChild(audi);

        let dacia = document.createElement('p');
        dacia.textContent = "Nos Véhicules Dacia";
        marque.appendChild(dacia);

        let toyota = document.createElement('p');
        toyota.textContent = "Nos Véhicules Toyota";
        marque.appendChild(toyota);


        // Par carburant et catégorie
        const carburantCategorie = document.createElement('div');
        carburantCategorie.classList.add('carburant-categorie');
        boiteContent.appendChild(carburantCategorie);

        const carburant = document.createElement('div');
        carburant.classList.add('carburant');
        carburantCategorie.appendChild(carburant);

        let titre2 = document.createElement('h2');
        titre2.textContent = "PAR CARBURANT";
        carburant.appendChild(titre2);

        let essence = document.createElement('p');
        essence.textContent = "Nos Véhicules Essence";
        carburant.appendChild(essence);

        let diesel = document.createElement('p');
        diesel.textContent = "Nos Véhicules Diesel";
        carburant.appendChild(diesel);

        let hybride = document.createElement('p');
        hybride.textContent = "Nos Véhicules Hybride";
        carburant.appendChild(hybride);

        let eletrique = document.createElement('p');
        eletrique.textContent = "Nos Véhicules Eletrique";
        carburant.appendChild(eletrique);

        const categorie = document.createElement('div');
        categorie.classList.add('categorie');
        carburantCategorie.appendChild(categorie);

        let automatique = document.createElement('p');
        automatique.textContent = "Nos Véhicules A Boîte Automatique";
        categorie.appendChild(automatique);

        let moins = document.createElement('p');
        moins.textContent = "Nos Véhicules De Moins De 50 000Km";
        categorie.appendChild(moins);

        let plus = document.createElement('p');
        plus.textContent = "Nos Véhicules De Plus De 100 000Km";
        categorie.appendChild(plus);


        // Par type
        const type = document.createElement('div');
        type.classList.add('type');
        boiteContent.appendChild(type);

        const image = document.createElement('div');
        image.classList.add('image');
        type.appendChild(image);

        const berline = document.createElement('div');
        berline.classList.add('berline');
        image.appendChild(berline);

        let imageBerline = document.createElement('img');
        imageBerline.src = "../Assets/Image/berline.jpg";
        berline.appendChild(imageBerline);

        let texteBerline = document.createElement('p');
        texteBerline.textContent = "Nos Berlines";
        berline.appendChild(texteBerline);

        const breakCar = document.createElement('div');
        breakCar.classList.add('break');
        image.appendChild(breakCar);

        let imageBreak = document.createElement('img');
        imageBreak.src = "../Assets/Image/break.jpg";
        breakCar.appendChild(imageBreak);

        let texteBreak = document.createElement('p');
        texteBreak.textContent = "Nos Break";
        breakCar.appendChild(texteBreak);

        const monospace = document.createElement('div');
        monospace.classList.add('monospace');
        image.appendChild(monospace);

        let imageMonospace = document.createElement('img');
        imageMonospace.src = "../Assets/Image/monospace.jpg";
        monospace.appendChild(imageMonospace);

        let texteMonospace = document.createElement('p');
        texteMonospace.textContent = "Nos Monospace";
        monospace.appendChild(texteMonospace);

        const suv = document.createElement('div');
        suv.classList.add('suv');
        image.appendChild(suv);

        let imageSuv = document.createElement('img');
        imageSuv.src = "../Assets/Image/SUV.jpg";
        suv.appendChild(imageSuv);

        let texteSuv = document.createElement('p');
        texteSuv.textContent = "Nos SUV";
        suv.appendChild(texteSuv);


        boite.appendChild(boiteContent);
        modalOccasion.appendChild(boite);

        this.currentModal = modalOccasion;

        console.log("coucou" + modalOccasion);

        document.body.appendChild(this.currentModal);

    }


    setupEvents() {
        const openButton = document.getElementById('openModal');

        openButton.addEventListener('click', () => {
            console.log('Bouton cliqué !');
            modalInstance.openModal();
        });

        document.addEventListener('click', (e) => {
            if (this.currentModal !== null && !this.currentModal.contains(e.target)) {
                this.closeModal();
            }
        });
    }

    
    openModal() {
        if (this.currentModal !== null && !this.parentElement.contains(this.currentModal)) {
            this.currentModal.style.display = "block";
            console.log('affiche toi');
            console.log(this.currentModal);
        }
    }

    closeModal() {
        if (this.currentModal !== null) {
            this.currentModal.remove();
        }
    }
}

