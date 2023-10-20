document.addEventListener("DOMContentLoaded", function() {

// Fonction pour ouvrir la pop-up
function ouvrirPopup() {
    var popupDiv = document.createElement("div");
    popupDiv.className = "popup";

    var popupContent = document.createElement("div");
    popupContent.className = "popup-content";

    // Contenu de la pop-up
    popupContent.innerHTML = `
        <h2>J'accède à mon espace</h2>
        <label for="username" id="username">Nom d'utilisateur:</label>
        <input type="text" id="username" name="username"><br><br>
        <label for="password" id="password">Mot de passe:</label>
        <input type="password" id="password" name="password"><br><br>
        <button onclick="authentifierUtilisateur()" id="connection">Connection</button>
    `;

    popupDiv.appendChild(popupContent);
    document.body.appendChild(popupDiv);
    popupDiv.style.display = "block";

    // Gestionnaire d'événements à l'arrière-plan de la pop-up pour la fermer
    popupDiv.addEventListener("click", function(event) {
        if (event.target === popupDiv) {
            fermerPopup();
        }
    });
}

// Fonction pour authentifier l'utilisateur
function authentifierUtilisateur() {
    var nom_utilisateur = document.getElementById("username").value;
    var mot_de_passe = document.getElementById("password").value;

    var xhr = new XMLHttpRequest();
    xhr.open("POST", "authentification.php", true);
    xhr.setRequestHeader("Content-Type", "application/x-www-form-urlencoded");

    xhr.onreadystatechange = function() {
        if (xhr.readyState == 4 && xhr.status == 200) {
            var response = xhr.responseText;

            if (response === "Connecté avec succès") {
                fermerPopup();
            }
        }
    };
    var params = "nom_utilisateur=" + encodeURIComponent(nom_utilisateur) + "&mot_de_passe=" + encodeURIComponent(mot_de_passe);
    xhr.send(params);
}
console.log(authentifierUtilisateur());

// Fonction pour fermer la pop-up
function fermerPopup() {
    var popup = document.querySelector(".popup");
    document.body.removeChild(popup);
}

var ouvrirPopupElement = document.getElementById("ouvrirPopup");
ouvrirPopupElement.addEventListener("click", ouvrirPopup);

});
