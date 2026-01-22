<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Indeks Pembangunan Manusia (IPM)</title>
    <link rel="stylesheet" href="https://unpkg.com/leaflet@1.9.4/dist/leaflet.css"
    integrity="sha256-p4NxAoJBhIIN+hmNHrzRCf9tD/miZyoHS5obTRR9BMY=" crossorigin=""/>
        <style>
            body {
            font-family: 'Poppins', Arial, sans-serif;
            margin: 0;
            padding: 0;
            box-sizing: border-box;
            background: url('provBali.jpg') no-repeat center center fixed;
            background-size: cover;
            color: #333;
        }

        header {
            background-color: rgba(34, 139, 34, 0.9); /* Hijau tua */
            color: white;
            padding: 1rem 5%;
            display: flex;
            justify-content: space-between;
            align-items: center;
            box-shadow: 0 4px 6px rgba(0, 0, 0, 0.1);
            position: sticky; /* Ubah posisi menjadi sticky */
            top: 0; /* Header akan tetap di atas */
            z-index: 1000; /* Pastikan berada di atas elemen lainnya */
        }

        .header-logo {
            display: flex;
            align-items: center;
            gap: 10px;
        }

        .header-logo img {
            height: 50px;
            width: auto;
        }

        .header-logo span {
            font-size: 3rem;
            font-weight: 600;
            font-family: 'Lora', serif;
        }

        nav ul {
            list-style: none;
            margin: 0;
            padding: 0;
            display: flex;
        }

        nav ul li {
            margin: 0 1.7rem;
            position: relative;
        }

        nav ul li a {
            color: white;
            text-decoration: none;
            font-size: 1.3rem;
            padding: 0.5rem 0.75rem;
            transition: background-color 0.3s ease;
        }

        nav ul li a:hover {
            background-color: rgba(0, 100, 0, 0.9); /* Hijau gelap */
            border-radius: 5px;
        }

        nav ul li ul {
            display: none;
            position: absolute;
            background-color: rgba(0, 100, 0, 0.95);
            margin: 0;
            padding: 0.5rem 0;
            list-style: none;
            min-width: 150px;
            border-radius: 5px;
            box-shadow: 0 4px 6px rgba(0, 0, 0, 0.1);
            z-index: 1001; /* Tambahkan z-index lebih tinggi */
        }

        nav ul li ul li a {
            padding: 0.5rem 1rem;
            display: block;
            color: white;
        }

        nav ul li ul li a:hover {
            background-color: rgba(34, 139, 34, 0.9);
        }

        nav ul li:hover ul {
            display: block;
        }

        html, body {
            height: 96%;
            margin: 0;
        }

        #map {
            height: 100%; /* Peta akan menggunakan tinggi penuh layar */
            width: 100%;  /* Peta akan menggunakan lebar penuh layar */
            position: relative; /* Pastikan peta tidak mengganggu header */
            z-index: 0; /* Z-index lebih rendah untuk elemen peta */
        }


        .info {
            padding: 6px 8px;
            font: 14px/16px Arial, Helvetica, sans-serif;
            background: white;
            background: rgba(255,255,255,0.8);
            box-shadow: 0 0 15px rgba(0,0,0,0.2);
            border-radius: 5px;
        }
        .info h4 {
                margin: 0 0 5px;
                color: #777;
            }

            .legend {
                line-height: 18px;
                color: #555;
            }
            .legend i {
                width: 18px;
                height: 18px;
                float: left;
                margin-right: 8px;
                opacity: 0.7;
            }

        </style>
</head>

<body>
    <header>
        <div class="header-logo">
        <a href="{{ url('/') }}" style="text-decoration: none; color: white;">
            <img src="iconBali.png" alt="Ikon Bali">
            <span>BALI</span>
        </div>
        <nav>
            <ul>
                <li>
                    <a href="#">Peta Tematik</a>
                    <ul>
                        <li><a href="/luas">Luas Wilayah</a></li>
                        <li><a href="/populasi">Jumlah Penduduk</a></li>
                        <li><a href="/kepadatan">Kepadatan Penduduk</a></li>
                        <li><a href="/ipm">Indeks Pembangunan Manusia</a></li>
                        <li><a href="/pdrb">PDRB Per Kapita</a></li>
                        <li><a href="/pariwisata">Distribusi Pariwisata</a></li>
                        <li><a href="/pengangguran">Tingkat Pengangguran</a></li>
                        <li><a href="/kemiskinan">Tingkat Kemiskinan</a></li>
                    </ul>
                </li>
                <li><a href="/kabkota">Kabupaten/Kota</a></li>
                <li><a href="/kecamatan">Kecamatan</a></li>
                <!-- <li><a href="/anggota">Anggota</a></li> -->
            </ul>
        </nav>
    </header>
    <div id="map"></div>

    <!-- Make sure you put this AFTER Leaflet's CSS -->
    <script src="https://unpkg.com/leaflet@1.9.4/dist/leaflet.js"
        integrity="sha256-20nQCchB9co0qIjJZRGuk2/Z9VM+kNiyxNV1lvTlZBo=" crossorigin=""></script>

    <script> 
        var map = L.map('map').setView([-8.471248, 115.1421837], 9.5);

        var tiles = L.tileLayer('https://tile.openstreetmap.org/{z}/{x}/{y}.png', {
            maxZoom: 19,
            attribution: '&copy; <a href="http://www.openstreetmap.org/copyright">OpenStreetMap</a> | <a href="https://bali.bps.go.id/id/statistics-table/2/MzAjMg==/indeks-pembangunan-manusia-provinsi-bali-menurut-kabupaten-kota.html">BPJS di Provinsi Bali Kab/Kota (IPM)</a>'
        }).addTo(map);

        const regencies = @json($regencies)

        const regencyData = regencies.map(regency => ({
            type: "Feature",
            properties: {
                name: regency.name,
                id: regency.id,
                ipm: regency.ipm,
            },
            geometry: {
                type: regency.type_polygon,
                coordinates: JSON.parse(regency.polygon)
            }
        }))

        const geoJson = {
            type: "FeatureCollection",
            features: regencyData,
        };

        function getColor(d) {
    return d > 84  ? '#006400' :  // 83-85 - hijau gelap
           d > 82  ? '#004d00' :  // 82-83 - hijau lebih gelap
           d > 80  ? '#006600' :  // 80-82 - hijau lebih cerah
           d > 78  ? '#007700' :  // 78-80 - hijau cerah
           d > 76  ? '#008000' :  // 76-78 - hijau cerah lebih pekat
           d > 74  ? '#339933' :  // 74-76 - hijau lebih terang
           d > 72  ? '#66b266' :  // 72-74 - hijau lebih muda
           d > 70  ? '#99cc99' :  // 70-72 - hijau muda
                      '#c2f0c2';   // Nilai di bawah 70 - hijau sangat muda
}

        function style(feature) {
            return {
                fillColor: getColor(feature.properties.ipm),
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

            layer.bringToFront();
            info.update(layer.feature.properties);
        }

        function resetHighlight(e) {
            geojson.resetStyle(e.target);
            info.update();
        }

        function zoomToFeature(e) {
            map.fitBounds(e.target.getBounds());
        }

        function onEachFeature(feature, layer) {
            layer.on({
                mouseover: highlightFeature,
                mouseout: resetHighlight,
                click: zoomToFeature
            });
        }

        geojson = L.geoJson(geoJson, {
            style: style, 
            onEachFeature: onEachFeature
        }).addTo(map);

        var info = L.control();

        info.onAdd = function (map) {
            this._div = L.DomUtil.create('div', 'info'); // create a div with a class "info"
            this.update();
            return this._div;
        };

        // method that we will use to update the control based on feature properties passed
        info.update = function (props) {
            this._div.innerHTML = '<h4>Index Pembangunan Manuasi (IPM) di Kab/Kota Bali</h4>' +  (props ?
                '<b>' + props.name + '</b><br />' + props.ipm.toLocaleString('id-ID') + ' ipm'
                : 'Hover over a state');
        };

        info.addTo(map);

        var legend = L.control({position: 'bottomright'});

        legend.onAdd = function (map) {

            var div = L.DomUtil.create('div', 'info legend'),
                grades = [0, 70, 72, 74, 76, 78, 80, 82, 84],
                labels = [];

            // loop through our density intervals and generate a label with a colored square for each interval
            for (var i = 0; i < grades.length; i++) {
                div.innerHTML +=
                    '<i style="background:' + getColor(grades[i] + 1) + '"></i> ' +
                    grades[i] + (grades[i + 1] ? '&ndash;' + grades[i + 1] + '<br>' : '+');
            }

            return div;
        };

        legend.addTo(map);

    </script>    
</body>

</html>