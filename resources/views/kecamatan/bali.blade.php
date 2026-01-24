<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Peta Kecamatan Bali</title>
    
    <link rel="stylesheet" href="https://unpkg.com/leaflet@1.9.4/dist/leaflet.css"
     integrity="sha256-p4NxAoJBhIIN+hmNHrzRCf9tD/miZyoHS5obTRR9BMY=" crossorigin=""/>
    
    <style>
        body {
            font-family: 'Poppins', Arial, sans-serif;
            margin: 0;
            padding: 0;
            height: 100vh;
            background-color: #f4f4f4;
            color: #333;
        }

        header {
            background-color: rgba(34, 139, 34, 0.9);
            color: white;
            padding: 1rem 5%;
            display: flex;
            justify-content: space-between;
            align-items: center;
            box-shadow: 0 4px 6px rgba(0, 0, 0, 0.1);
            position: relative;
            z-index: 1000;
        }

        .header-logo {
            display: flex;
            align-items: center;
            gap: 10px;
        }

        .header-logo img {
            height: 40px;
            width: auto;
        }

        .header-logo span {
            font-size: 2rem;
            font-weight: 600;
        }

        nav ul {
            list-style: none;
            margin: 0;
            padding: 0;
            display: flex;
        }

        nav ul li {
            margin: 0 1rem;
            position: relative;
        }

        nav ul li a {
            color: white;
            text-decoration: none;
            font-size: 1.1rem;
            padding: 0.5rem;
            transition: 0.3s;
        }

        /* Dropdown Menu */
        nav ul li ul {
            display: none;
            position: absolute;
            background-color: white;
            min-width: 200px;
            box-shadow: 0 8px 16px rgba(0,0,0,0.2);
            border-radius: 4px;
            top: 100%;
            left: 0;
        }

        nav ul li:hover ul { display: block; }

        nav ul li ul li a {
            color: #333;
            display: block;
            padding: 10px;
        }

        nav ul li ul li a:hover { background: #f0f0f0; }

        #map {
            height: calc(100vh - 150px); /* Menghitung sisa layar setelah header & judul */
            width: 100%;
            z-index: 1;
        }

        h1 {
            font-size: 1.8rem;
            margin: 15px 0;
            text-align: center;
        }
    </style>

    <script src="https://unpkg.com/leaflet@1.9.4/dist/leaflet.js"
        integrity="sha256-20nQCchB9co0qIjJZRGuk2/Z9VM+kNiyxNV1lvTlZBo=" crossorigin=""></script>
</head>
<body>

<header>
    <div class="header-logo">
        <a href="{{ url('/') }}" style="display: flex; align-items: center; text-decoration: none; color: white;">
            <img src="{{ asset('iconBali.png') }}" alt="Bali" onerror="this.src='https://via.placeholder.com/40'">
            <span style="margin-left: 10px;">BALI</span>
        </a>
    </div>
    <nav>
        <ul>
            <li>
                <a href="#">Peta Tematik</a>
                <ul>
                    <li><a href="/luas">Luas Wilayah</a></li>
                    <li><a href="/populasi">Jumlah Penduduk</a></li>
                    <li><a href="/ipm">IPM</a></li>
                </ul>
            </li>
            <li><a href="/kabkota">Kabupaten/Kota</a></li>
            <li><a href="/kecamatan">Kecamatan</a></li>
        </ul>
    </nav>
</header>

<h1>KECAMATAN DI PROVINSI BALI</h1>

<div id="map"></div>

<script>
    // Inisialisasi Peta
    var map = L.map('map').setView([-8.4629903, 115.2561163], 9);
    
    L.tileLayer('https://tile.openstreetmap.org/{z}/{x}/{y}.png', {
        maxZoom: 18,
        attribution: '&copy; OpenStreetMap contributors'
    }).addTo(map);

    // Ambil data dari Laravel dengan proteksi null
    let rawDatas = {!! json_encode($districts) !!};

    rawDatas.forEach(function(data) {
        // Cek apakah koordinat tersedia sebelum membuat marker
        if (data.latitude && data.longitude) {
            var popupContent = `
                <div style="text-align: center;">
                    <strong>Kecamatan:</strong> ${data.name}<br>
                    <strong>Kabupaten:</strong> ${data.regency ? data.regency.name : 'Data tidak ditemukan'}
                </div>
            `;
            
            L.marker([data.latitude, data.longitude])
                .addTo(map)
                .bindPopup(popupContent);
        }
    });

    console.log("Data Kecamatan terload:", rawDatas.length);
</script>

</body>
</html>