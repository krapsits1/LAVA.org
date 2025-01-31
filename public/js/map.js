

let map;

async function initMap() {
  const { Map } = await google.maps.importLibrary("maps");

  map = new Map(document.getElementById("map"), {
    center: { lat: 56.92210700748703, lng: 24.087976439991493 },
    zoom: 15,
  });

  const marker = new AdvancedMarkerElement({
    map,
    position: { lat: 37.4239163, lng: -122.0947209 },
}); 
}

initMap();