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

const statesData = [{ "stateInitial": "AC", "coords": { "lat": -8.8375907, "lng": -70.2157837 } }, { "stateInitial": "AL", "coords": { "lat": -9.6787937, "lng": -36.3823937 } }, { "stateInitial": "AP", "coords": { "lat": 1.404866, "lng": -51.802834 } }, { "stateInitial": "AM", "coords": { "lat": -4.309345, "lng": -64.387211 } }, { "stateInitial": "BA", "coords": { "lat": -12.302056, "lng": -41.260056 } }, { "stateInitial": "CE", "coords": { "lat": -4.963806, "lng": -39.384443 } }, { "stateInitial": "DF", "coords": { "lat": -15.779523, "lng": -47.760537 } }, { "stateInitial": "ES", "coords": { "lat": -19.813053, "lng": -40.571528 } }, { "stateInitial": "GO", "coords": { "lat": -15.992283, "lng": -49.108714 } }, { "stateInitial": "MA", "coords": { "lat": -4.674691, "lng": -45.076632 } }, { "stateInitial": "MT", "coords": { "lat": -13.045458, "lng": -55.654326 } }, { "stateInitial": "MS", "coords": { "lat": -20.602882, "lng": -54.497722 } }, { "stateInitial": "MG", "coords": { "lat": -19.142615, "lng": -43.954595 } }, { "stateInitial": "PA", "coords": { "lat": -5.208346, "lng": -52.046545 } }, { "stateInitial": "PB", "coords": { "lat": -7.193966, "lng": -36.46232 } }, { "stateInitial": "PR", "coords": { "lat": -24.781564, "lng": -51.174074 } }, { "stateInitial": "PE", "coords": { "lat": -8.74753, "lng": -37.093931 } }, { "stateInitial": "PI", "coords": { "lat": -7.35373, "lng": -42.172696 } }, { "stateInitial": "RJ", "coords": { "lat": -22.922402, "lng": -43.396492 } }, { "stateInitial": "RN", "coords": { "lat": -5.704954, "lng": -36.221089 } }, { "stateInitial": "RS", "coords": { "lat": -29.738702, "lng": -52.918989 } }, { "stateInitial": "RO", "coords": { "lat": -10.874984, "lng": -62.661454 } }, { "stateInitial": "RR", "coords": { "lat": 2.184332, "lng": -61.345701 } }, { "stateInitial": "SC", "coords": { "lat": -27.2765, "lng": -50.56095 } }, { "stateInitial": "SP", "coords": { "lat": -22.351652, "lng": -48.583266 } }, { "stateInitial": "SE", "coords": { "lat": -10.679806, "lng": -37.312395 } }, { "stateInitial": "TO", "coords": { "lat": -10.483155, "lng": -48.514158 } }];

const locations = [
    { label: "A", coords: { lat: -9.64197, lgn: -35.73776 } },
    { label: "P", coords: { lat: -9.66211, lgn: -35.72848 } },
];

function initMap() {
    let stateStorage = getState();
    let latitude, longitude;

    statesData.forEach(state => {
        if (state.stateInitial == stateStorage) {
            latitude = state.coords.lat;
            longitude = state.coords.lng;
        }
    })

    const map = new google.maps.Map(document.getElementById("map"), {
        center: { lat: !latitude ? -12.735750 : latitude, lng: !longitude ? -49.797783 : longitude },
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