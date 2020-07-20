// function readJSON(json, callback) {
//     var rawFile = new XMLHttpRequest();
//     rawFile.overrideMimeType("application/json");
//     rawFile.open("GET", json, true);
//     rawFile.onreadystatechange = function () {
//         if (rawFile.readyState === 4 && rawFile.status == "200") {
//             callback(rawFile.responseText);
//         }
//     };
//     rawFile.send(null);
// }

// readJSON("./js/states.json", function (json) {
//     jsonParse = JSON.parse(json);
//     jsonParse.states.forEach((stateData) => {
//         if (stateData.stateInitial == stateStorage) {
//             const latitude = stateData.coords.lat;
//             const longitude = stateData.coords.lng;
//             const hiddenLat = document.createElement("div");
//             hiddenLat.classList.add("hidden");
//             hiddenLat.setAttribute("id", "lat");
//             hiddenLat.innerText = latitude;
//             document.body.append(hiddenLat);
//         }
//     });
// });

(function () {
    console.log("checking...");
    setTimeout(function () {
        const mapView = document.querySelector(".gm-style-pbc");
        if (!mapView) {
            mapAlert(
                "O mapa não carregou? <strong>Recarregue a página para carregar o mapa!</strong>"
            );
            console.log("[ERRO] Mapa não carregou!");
        } else console.log("checked");
    }, 5000);
})();

const statesData = [{ "stateInitial": "AC", "stateName": "Acre", "coords": { "lat": -8.8375907, "lng": -70.2157837 } }, { "stateInitial": "AL", "stateName": "Alagoas", "coords": { "lat": -9.6787937, "lng": -36.3823937 } }, { "stateInitial": "AP", "stateName": "Amapá", "coords": { "lat": 1.404866, "lng": -51.802834 } }, { "stateInitial": "AM", "stateName": "Amazonas", "coords": { "lat": -4.309345, "lng": -64.387211 } }, { "stateInitial": "BA", "stateName": "Bahia", "coords": { "lat": -12.302056, "lng": -41.260056 } }, { "stateInitial": "CE", "stateName": "Ceará", "coords": { "lat": -4.963806, "lng": -39.384443 } }, { "stateInitial": "DF", "stateName": "Distrito Federal", "coords": { "lat": -15.779523, "lng": -47.760537 } }, { "stateInitial": "ES", "stateName": "Espírito Santo", "coords": { "lat": -19.813053, "lng": -40.571528 } }, { "stateInitial": "GO", "stateName": "Goiás", "coords": { "lat": -15.992283, "lng": -49.108714 } }, { "stateInitial": "MA", "stateName": "Maranhão", "coords": { "lat": -4.674691, "lng": -45.076632 } }, { "stateInitial": "MT", "stateName": "Mato Grosso", "coords": { "lat": -13.045458, "lng": -55.654326 } }, { "stateInitial": "MS", "stateName": "Mato Grosso do Sul", "coords": { "lat": -20.602882, "lng": -54.497722 } }, { "stateInitial": "MG", "stateName": "Minas Gerais", "coords": { "lat": -19.142615, "lng": -43.954595 } }, { "stateInitial": "PA", "stateName": "Pará", "coords": { "lat": -5.208346, "lng": -52.046545 } }, { "stateInitial": "PB", "stateName": "Paraíba", "coords": { "lat": -7.193966, "lng": -36.46232 } }, { "stateInitial": "PR", "stateName": "Paraná", "coords": { "lat": -24.781564, "lng": -51.174074 } }, { "stateInitial": "PE", "stateName": "Pernambuco", "coords": { "lat": -8.74753, "lng": -37.093931 } }, { "stateInitial": "PI", "stateName": "Piauí", "coords": { "lat": -7.35373, "lng": -42.172696 } }, { "stateInitial": "RJ", "stateName": "Rio de Janeiro", "coords": { "lat": -22.922402, "lng": -43.396492 } }, { "stateInitial": "RN", "stateName": "Rio Grande do Norte", "coords": { "lat": -5.704954, "lng": -36.221089 } }, { "stateInitial": "RS", "stateName": "Rio Grande do Sul", "coords": { "lat": -29.738702, "lng": -52.918989 } }, { "stateInitial": "RO", "stateName": "Rondônia", "coords": { "lat": -10.874984, "lng": -62.661454 } }, { "stateInitial": "RR", "stateName": "Roraima", "coords": { "lat": 2.184332, "lng": -61.345701 } }, { "stateInitial": "SC", "stateName": "Santa Catarina", "coords": { "lat": -27.2765, "lng": -50.56095 } }, { "stateInitial": "SP", "stateName": "São Paulo", "coords": { "lat": -22.351652, "lng": -48.583266 } }, { "stateInitial": "SE", "stateName": "Sergipe", "coords": { "lat": -10.679806, "lng": -37.312395 } }, { "stateInitial": "TO", "stateName": "Tocantins", "coords": { "lat": -10.483155, "lng": -48.514158 } }];

const locations = [
    { label: "A", coords: { lat: -9.64197, lgn: -35.73776 } },
    { label: "P", coords: { lat: -9.66211, lgn: -35.72848 } },
];

function initMap() {
    let stateStorage = getState();
    let latitude, longitude, region;

    statesData.forEach((state) => {
        if (state.stateInitial == stateStorage) {
            latitude = state.coords.lat;
            longitude = state.coords.lng;
            region = state.stateName;
        }
    });

    document.querySelector(".map-selected").innerHTML = region;

    const map = new google.maps.Map(document.getElementById("map"), {
        center: {
            lat: !latitude ? -12.73575 : latitude,
            lng: !longitude ? -49.797783 : longitude,
        },
        zoom: !latitude || !longitude ? 5 : 8,
    });

    const markers = locations.forEach((location) => {
        const coords = new google.maps.LatLng(
            +location.coords.lat,
            +location.coords.lgn
        );

        return new google.maps.Marker({
            position: coords,
            label: location.label,
            map,
        });
    });
}

function getState() {
    return localStorage.getItem("estado");
}

function mapAlert(message) {
    const mapAlerts = document.querySelector(".map-alerts"),
        warnAlert = document.createElement("div"),
        button = document.createElement("button"),
        span = document.createElement("span");

    warnAlert.classList.add(
        "alert",
        "alert-warning",
        "alert-dismissible",
        "fade",
        "show"
    );
    warnAlert.setAttribute("role", "alert");
    warnAlert.innerHTML = message;
    button.classList.add("close");
    button.setAttribute("type", "button");
    button.setAttribute("data-dismiss", "alert");
    button.setAttribute("aria-label", "close");
    span.setAttribute("aria-hidden", "true");
    span.innerHTML = "&times;";
    button.appendChild(span);
    warnAlert.appendChild(button);
    mapAlerts.appendChild(warnAlert);
}

initMap();
