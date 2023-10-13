
let carte = L.map('carteCommunes', {zoomControl:false, minZoom:"11", maxZoom:"11", dragging:false,
    doubleClickZoom:false, keyboard:false}).setView([16.0191, -61.6572], 11);

L.tileLayer('https://{s}.tile.openstreetmap.org/{z}/{x}/{y}.png', {
    attribution: '© <a href="https://www.openstreetmap.org/copyright">OpenStreetMap</a> contributors'
}).addTo(carte);

let info = L.control();

info.onAdd = function (map) {
    this._div = L.DomUtil.create('div', 'info');
    this.update();
    return this._div;
};

info.update = function (props) {
    this._div.innerHTML = '<h4>Informations</h4>' +  (props ? txtInfos(props) : 'Sélectionnez une commune');
};

function txtInfos(props){
    let strRet = "<b>" + props.Nom + "</b><br>"
    strRet += "Maire : " + props.Maire + "<br>"
    strRet += "Code Postal : " + props.Code_Postal + "<br>"
    strRet += "Nombre d'habitants : " + props.NbHab + "<br>"
    strRet += "Site web : <a href='" + props.Site_Web + "' target='_blank'>" + props.Site_Web + "</a><br>"
    strRet += "Tel : <a href='tel:" + props.Tel + "'>" + props.Tel + "</a><br>"
    strRet += "Mail : <a href='mailto:" + props.Mail + "'>" + props.Mail + "</a><br>"
    return strRet
}

info.addTo(carte);

fetch("../json/communes.json")
    .then(function (response) {
        return response.json();
    })
    .then(function (data) {
        let communesLayer = L.geoJSON(data, {
            onEachFeature: function (feature, layer) {
                layer.bindPopup(feature.properties.Nom);
                layer.on("click", function (e) {
                    info.update(e.target.feature.properties);
                });
            }
        }).addTo(carte);
    })
    .catch(function (error) {
        console.error('Erreur lors du chargement des données GeoJSON :', error);
    });
