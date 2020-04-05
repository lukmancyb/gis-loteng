<?php
defined('BASEPATH') or exit('No direct script access allowed');
$this->load->view('front/_partial/header');
?>



<!-- Main Content -->
<div class="main-content">
<div id="mapId" data-height="300"></div>
</div>



<?php $this->load->view('front/_partial/footer'); ?>
<script src="<?= base_url();?>assets/json/loteng.js"></script>
<script>
  var mymap = L.map('mapId').setView([51.505, -0.09], 13);
  L.tileLayer('https://api.mapbox.com/styles/v1/{id}/tiles/{z}/{x}/{y}?access_token={accessToken}', {
    attribution: 'Map data &copy; <a href="https://www.openstreetmap.org/">OpenStreetMap</a> contributors, <a href="https://creativecommons.org/licenses/by-sa/2.0/">CC-BY-SA</a>, Imagery © <a href="https://www.mapbox.com/">Mapbox</a>',
    maxZoom: 18,
    id: 'mapbox/streets-v11',
    tileSize: 512,
    zoomOffset: -1,
    accessToken: 'pk.eyJ1IjoibWFwYm94IiwiYSI6ImNpejY4NXVycTA2emYycXBndHRqcmZ3N3gifQ.rJcFIG214AriISLbB6B5aw'
}).addTo(mymap);
</script>
