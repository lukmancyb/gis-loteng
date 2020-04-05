"use strict";
    let api_key = 'pk.eyJ1IjoibWFwYm94IiwiYSI6ImNpejY4NXVycTA2emYycXBndHRqcmZ3N3gifQ.rJcFIG214AriISLbB6B5aw';
    var geojson;
    var mymap = L.map('mapId').setView([-8.710461, 116.309058], 10);
    L.tileLayer('https://api.mapbox.com/styles/v1/{id}/tiles/{z}/{x}/{y}?access_token={accessToken}', {
        attribution: 'Map data &copy; <a href="https://www.openstreetmap.org/">OpenStreetMap</a> contributors, <a href="https://creativecommons.org/licenses/by-sa/2.0/">CC-BY-SA</a>, Imagery © <a href="https://www.mapbox.com/">Mapbox</a>',
        maxZoom: 18,
        id: 'mapbox/light-v9',
        tileSize: 512,
        zoomOffset: -1,
        accessToken: api_key
    }).addTo(mymap);

    function getColor(d) {
        // console.log(d)
        return d > 100 ? 'red' :
            d > 50 ? 'orange' :
            'green'
    }

    function style(feature) {

        // fitur = feature.properties.DATA;
        return {
            fillColor: getColor(feature.properties.DATA),
            weight: 2,
            opacity: 1,
            color: 'white',
            dashArray: '3',
            fillOpacity: 0.7
        };
    }

    function highlightFeature(e) {
        var layer = e.target;

        layer.setStyle({
            weight: 5,
            color: '#666',
            dashArray: '',
            fillOpacity: 0.7
        });

        if (!L.Browser.ie && !L.Browser.opera && !L.Browser.edge) {
            layer.bringToFront();
        }
        info.update(layer.feature.properties);
    }

    function resetHighlight(e) {
        geojson.resetStyle(e.target);
        info.update();
    }

    function zoomToFeature(e) {
        mymap.fitBounds(e.target.getBounds());
    }

    function onEachFeature(feature, layer) {
        layer.bindPopup('<b>' + layer.feature.properties.name + ' ' + layer.feature.properties.DATA + '  Orang <\/b>');
        layer.bindTooltip('<b>' + feature.properties.name + '<\/b>', {
            permanent: true,
            direction: 'center',
            className: 'myCSSClass'
        }).openTooltip();
        layer.on({
            mouseover: highlightFeature,
            mouseout: resetHighlight,
            click: zoomToFeature
        });
    }


    geojson = L.geoJson(statesData, {
        style: style,
        onEachFeature: onEachFeature
    }).addTo(mymap);

    var info = L.control();

    info.onAdd = function(mymap) {
        this._div = L.DomUtil.create('div', 'info'); // create a div with a class "info"
        this.update();
        return this._div;
    };

    info.update = function(props) {
        this._div.innerHTML = '<h6>Jumlah Orang / Wilayah</h6>' + (props ?
            '<b>' + props.name + '</b><br/><br>' + props.DATA + ' Orang' :
            'Arahkan krusor ke map');
    };

    info.addTo(mymap);
    var legend = L.control({
        position: 'bottomright'
    });

    legend.onAdd = function(mymap) {

        var div = L.DomUtil.create('div', 'info legend'),
            grades = [0, 50, 100],
            labels = [];

        // loop through our density intervals and generate a label with a colored square for each interval
        div.innerHTML += `<h6>Keterangan</h6>`

        for (var i = 0; i < grades.length; i++) {
            div.innerHTML +=
                '<i style="background:' + getColor(grades[i] + 1) + '"></i> ' +
                grades[i] + (grades[i + 1] ? '&ndash;' + grades[i + 1] + ' org <br>' : '+ org');
        }

        return div;
    };

    legend.addTo(mymap);

    // geojson.bindTooltip("tool tip is bound");