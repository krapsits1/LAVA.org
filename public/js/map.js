

let map;

async function initMap() {
  const { Map } = await google.maps.importLibrary("maps");
  const {AdvancedMarkerElement} = await google.maps.importLibrary("marker");

  
  map = new Map(document.getElementById("map"), {
    center: { lat: 56.92210700748703, lng: 24.087976439991493 },
    zoom: 14,
    mapId: "ca720f4c4973b8a", // Map ID is required for advanced markers.

  });
  
  const marker = new AdvancedMarkerElement({
    map,
    position: { lat: 56.92210700748703, lng: 24.087976439991493 },
    title: "Googleplex",
    
}); 
}

initMap();