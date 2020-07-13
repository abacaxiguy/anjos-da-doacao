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

function initMap() {
    let stateStorage = getState();

    const map = new google.maps.Map(document.getElementById("map"), {
        center: { lat: latitude, lng: longitude },
        zoom: 7,
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

const locations = [
    { label: "A", coords: { lat: -9.64197, lgn: -35.73776 } },
    { label: "P", coords: { lat: -9.66211, lgn: -35.72848 } },
];
const latitude = document.getElementById("lat");
console.log(latitude);
