 <script>

    var mymap = L.map('map').setView([-8.726490, 116.283105], 10);

    L.tileLayer('https://api.mapbox.com/styles/v1/{id}/tiles/{z}/{x}/{y}?access_token={accessToken}', {
    attribution: 'Map data &copy; <a href="https://www.openstreetmap.org/">OpenStreetMap</a> contributors, <a href="https://creativecommons.org/licenses/by-sa/2.0/">CC-BY-SA</a>, Imagery © <a href="https://www.mapbox.com/">Mapbox</a>',
    maxZoom: 18,
    id: 'mapbox/streets-v11',
    tileSize: 512,
    zoomOffset: -1,
    accessToken: 'pk.eyJ1IjoibWx1a21hbmhha2ltIiwiYSI6ImNqdDc0bjNnYjBvN3A0NHIxNmJqbTJhaHIifQ.YkIp8JoaqhUPuRFBApLprg'
}).addTo(mymap);


 </script>




