function openPopup() {
    const overlay = document.createElement('div');
    overlay.style.position = 'fixed';
    overlay.style.top = '0';
    overlay.style.left = '0';
    overlay.style.width = '100%';
    overlay.style.height = '100%';
    overlay.style.background = 'rgba(255, 255, 255, 0.8)';
    overlay.style.filter = 'blur(5px)';
    overlay.style.pointerEvents = 'none';
    document.body.appendChild(overlay);

    const modal = document.createElement('div');
    modal.style.width = '40%';
    modal.style.height = '200px';
    modal.style.position = 'fixed';
    modal.style.top = '50%';
    modal.style.left = '50%';
    modal.style.transform = 'translate(-50%, -50%)';
    modal.style.display = 'flex';
    modal.style.flexDirection = 'column';
    modal.style.alignItems = 'center';
    modal.style.justifyContent = 'space-evenly';
    modal.style.borderRadius = '10px';
    modal.style.background = '#D00748';
    document.body.appendChild(modal);

    const texte = document.createElement('p');
    texte.textContent = "La création de ce nouveau véhicule est-elle associée à la création d'un nouveau client ?";
    texte.style.fontSize = '19px';
    texte.style.color = "white"
    modal.appendChild(texte);

    const boutons = document.createElement('div');
    boutons.style.display = 'flex';
    boutons.style.justifyContent = 'space-evenly';
    boutons.style.width = '100%';
    modal.appendChild(boutons);

    const boutonYes = document.createElement('button');
    boutonYes.textContent = "Oui";
    boutonYes.style.borderRadius = '15px';
    boutonYes.style.width = '90px';
    boutonYes.style.height = '40px';
    boutons.appendChild(boutonYes);

    const boutonNo = document.createElement('button');
    boutonNo.textContent = "Non";
    boutonNo.style.borderRadius = '15px';
    boutonNo.style.width = '90px';
    boutonNo.style.height = '40px';
    boutons.appendChild(boutonNo);

    boutonYes.addEventListener('click', function() {
        window.location.href = 'AjouterClient';
    });

    boutonNo.addEventListener('click', function() {
        overlay.remove();
        modal.remove();
    });
}

window.onload = function() {
    openPopup();
};
