// Fichier carte.js
// Code JavaScript pour créer la carte Leaflet et charger les données GeoJSON

// Créez une carte Leaflet
var carte = L.map('carteCommunes').setView([16.0191, -61.6572], 11); // Coordonnées initiales et niveau de zoom

// Ajoutez une couche de fond OpenStreetMap
L.tileLayer('https://{s}.tile.openstreetmap.org/{z}/{x}/{y}.png', {
    attribution: '© <a href="https://www.openstreetmap.org/copyright">OpenStreetMap</a> contributors'
}).addTo(carte);

fetch('json/communes.json')
    .then(function(response) {
        return response.json();
    })
    .then(function(data) {
        // Ajoutez les données GeoJSON à la carte
        L.geoJSON(data).addTo(carte);
    });

/*
var geojson;
geojson = L.geoJson('json/communes.json');
function highlightFeature(e) {
    var layer = e.target;

    layer.setStyle({
        weight: 5,
        color: '#666',
        dashArray: '',
        fillOpacity: 0.7
    });

    layer.bringToFront();
}

function resetHighlight(e) {
    geojson.resetStyle(e.target);
}
*/