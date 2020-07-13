function initMap() {
    const map = new google.maps.Map(document.getElementById("map"), {
        center: { lat: -4.309345, lng: -64.387211 },
        //              ^^^^^^^         ^^^^^^^^
        //      muda esses numeros (só os numeros pra ficar mais facil)
        //      por variaveis pegas do JS de acordo com o estado 👌
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

const locations = [
    { label: "A", coords: { lat: -9.64197, lgn: -35.73776 } },
    { label: "P", coords: { lat: -9.66211, lgn: -35.72848 } },
];

console.log(locations.forEach((l) => console.log(l.coords)));
