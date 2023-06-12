//  (5 minutes = 300 000 millisecondes)
var tempsAttente = 60000;

// Fonction pour rediriger vers la page d'accueil
function redirigerVersAccueil() {
  window.location.href = "BridgeOfHope.html";
}

// Fonction pour démarrer le compte à rebours
function demarrerCompteRebours() {
  setTimeout(redirigerVersAccueil, tempsAttente);
}

window.addEventListener("load", function() {
 
  demarrerCompteRebours();
});