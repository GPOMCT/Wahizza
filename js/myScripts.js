// Funcion para desplegado de ubicacion de negocio
function initMap() {
        var uluru = {lat: 40.857509, lng: -73.931735};
        var map = new google.maps.Map(document.getElementById('wahizzaLocation'), {
          zoom: 18,
          center: uluru
        });
        var marker = new google.maps.Marker({
          position: uluru,
          map: map
        });
}
