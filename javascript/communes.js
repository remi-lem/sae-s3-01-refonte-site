// Fichier carte.js
// Code JavaScript pour créer la carte Leaflet et charger les données GeoJSON

// Créez une carte Leaflet
var carte = L.map('carteCommunes').setView([16.1296, -61.6814], 11); // Coordonnées initiales et niveau de zoom

// Ajoutez une couche de fond OpenStreetMap
L.tileLayer('https://{s}.tile.openstreetmap.org/{z}/{x}/{y}.png', {
    attribution: '© <a href="https://www.openstreetmap.org/copyright">OpenStreetMap</a> contributors'
}).addTo(carte);

// Chargez le fichier GeoJSON des communes
fetch('json/communes.json')
    .then(function(response) {
        return response.json();
    })
    .then(function(data) {
        // Ajoutez les données GeoJSON à la carte
        L.geoJSON(data).addTo(carte);
    });
