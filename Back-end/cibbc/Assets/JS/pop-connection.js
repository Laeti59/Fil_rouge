document.addEventListener("DOMContentLoaded", function() {

// Fonction pour ouvrir la pop-up
function ouvrirPopup() {
    var popupDiv = document.createElement("div");
    popupDiv.className = "popup";

    var popupContent = document.createElement("div");
    popupContent.className = "popup-content";

    // Contenu de la pop-up
    popupContent.innerHTML = `
        <form method="post" action="http://cibbc/PageAccueil/authentifierUtilisateur">
            <h2>J'accède à mon espace</h2>
            <label for="username" id="username">Nom d'utilisateur:</label>
            <input type="text" id="username" name="username"><br><br>
            <label for="password" id="password">Mot de passe:</label>
            <input type="password" id="password" name="password"><br><br>
            <button id="connection">Connection</button>
    `;

    popupDiv.appendChild(popupContent);
    document.body.appendChild(popupDiv);
    popupDiv.style.display = "block";

    popupContent.querySelector("#connection").addEventListener("click", function() {
        var login = document.getElementById("username").value;
        var password = document.getElementById("password").value;

        
    });
    // Gestionnaire d'événements à l'arrière-plan de la pop-up pour la fermer
    popupDiv.addEventListener("click", function(event) {
        if (event.target === popupDiv) {
            fermerPopup();
        }
    });

}

// Fonction pour fermer la pop-up
function fermerPopup() {
    var popup = document.querySelector(".popup");
    document.body.removeChild(popup);
}

var ouvrirPopupElement = document.getElementById("ouvrirPopup");
ouvrirPopupElement.addEventListener("click", ouvrirPopup);

});
