let carte = L.map('carteCommunes', {zoomControl:false, minZoom:"11", maxZoom:"11", dragging:false, doubleClickZoom:false, keyboard:false}).setView([16.0191, -61.6572], 11); // Coordonnées initiales et niveau de zoom

L.tileLayer('https://{s}.tile.openstreetmap.org/{z}/{x}/{y}.png', {
    attribution: '© <a href="https://www.openstreetmap.org/copyright">OpenStreetMap</a> contributors'
}).addTo(carte);

fetch("../json/communes.json")
    .then(function (response) {
        return response.json();
    })
    .then(function (data) {
        var communesLayer = L.geoJSON(data).addTo(carte);
        communesLayer.bindPopup(function (layer) {
            return layer.feature.properties.Nom;
        });
    })
    .catch(function (error) {
        console.error('Erreur lors du chargement des données GeoJSON :', error);
    });

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
    carte.resetStyle(e.target);
}

function onEachFeature(feature, layer) {
    layer.on({
        mouseover: highlightFeature,
        mouseout: resetHighlight,
    });
}
