let button = document.querySelector(".btn-modal");
let modal = document.querySelector(".modal");
let radioInputs = document.querySelectorAll("input[name='state']");
let currentState = getState();
let mapa = document.querySelector('#map');

if (!currentState) $("#modalState").modal("show");
else modal.remove();

button.addEventListener("click", () => {
    let stateChecked = null;

    radioInputs.forEach((input) => {
        if (input.checked) stateChecked = input.value;
    });

    if (stateChecked) {
        setState(stateChecked);
        $("#modalState").modal("hide");
        modal.remove();
        if (mapa) initMap()
    }
});

function getState() {
    return localStorage.getItem("estado");
}

function setState(state) {
    localStorage.setItem("estado", "" + state);
}

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