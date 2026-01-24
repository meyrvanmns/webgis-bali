<!DOCTYPE html>
<html lang="en">
<head>
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
            position: relative; /* Tambahkan posisi relatif */
            z-index: 1000; /* Pastikan header berada di atas */
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
            height: 85%; /* Peta akan menggunakan tinggi penuh layar */
            width: 100%;  /* Peta akan menggunakan lebar penuh layar */
            position: relative; /* Pastikan peta tidak mengganggu header */
            z-index: 0; /* Z-index lebih rendah untuk elemen peta */
        }

        h1 {
            font-size: 2.5rem;
            margin: 0 1 1rem;
            font-family: 'Lora', serif;
            color: black;
            text-align: center;
        }

    </style>
     <!-- Make sure you put this AFTER Leaflet's CSS -->
    <script src="https://unpkg.com/leaflet@1.9.4/dist/leaflet.js"
        integrity="sha256-20nQCchB9co0qIjJZRGuk2/Z9VM+kNiyxNV1lvTlZBo=" crossorigin=""></script>
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

        <div style="text-align: center">
            <h1> KECAMATAN DI PROVINSI BALI </h1>
        </div>
        <div id="map"></div>
        <script>
            var map = L.map('map').setView([-8.4629903,115.2561163], 9.5);
            L.tileLayer('https://tile.openstreetmap.org/{z}/{x}/{y}.png',{ maxZoom: 18,
              attribution: '&copy; <a href="http://www.openstreetmap.org/copyright">OpenStreetMap</a>'
            }).addTo(map);

            let datas = {!! json_encode($districts) !!}
            
            datas.forEach(function(data) {
                
                var marker = L.marker([data.latitude, data.longitude]).addTo(map).bindPopup(data.name)
    
            })

            console.log(datas);
        </script>
    </body>
</html>