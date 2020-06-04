function initMap() {
    const map = new google.maps.Map(document.getElementById("map"), {
        center: { lat: -9.66522, lng: -35.73571 },
        zoom: 13,
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

const locations = [
    { label: "A", coords: { lat: -9.64197, lgn: -35.73776 } },
    { label: "P", coords: { lat: -9.66211, lgn: -35.72848 } },
];

console.log(locations.forEach((l) => console.log(l.coords)));
