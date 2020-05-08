// function initMap() {
//     const map = new google.maps.Map(document.getElementById("map"), {
//         center: { lat: -9.66522, lng: -35.73571 },
//         zoom: 12,
//     });

//     const markers = locations.map(function (location) {
//         return new google.maps.Marker({
//             position: location.coords,
//             label: location.label,
//         });
//     });

//     const markerCluster = new MarkerClusterer(map, markers, {
//         imagePath:
//             "https://developers.google.com/maps/documentation/javascript/examples/markerclusterer/m",
//     });
// }

// const locations = [
//     { label: "A", coords: { lat: -9.64197, lgn: -35.73776 } },
//     { label: "P", coords: { lat: -9.66211, lgn: -35.72848 } },
// ];
function initMap() {
    var map = new google.maps.Map(document.getElementById("map"), {
        zoom: 3,
        center: { lat: -9.64197, lng: -35.73776 },
    });
}
