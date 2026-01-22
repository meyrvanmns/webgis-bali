<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>SIG Bali</title>
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@300;400;600&family=Lora:wght@400;600&display=swap" rel="stylesheet">
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

        .content {
            display: flex;
            align-items: flex-start;
            padding: 2rem 5%;
            flex-wrap: wrap;
            background-color: rgba(255, 255, 255, 0.9);
            border-radius: 10px;
            margin: 2rem 5%;
            box-shadow: 0 4px 6px rgba(0, 0, 0, 0.1);
        }

        .content img {
            max-width: 500px;
            height: auto;
            margin-right: 3rem;
            border-radius: 10px;
        }

        .content div {
            flex: 2; /* Memastikan teks mengambil sisa ruang yang tersedia */
        }

        .content h1 {
            font-size: 2.5rem;
            margin: 0 0 1rem;
            font-family: 'Lora', serif;
            color: #333;
            text-align: center;
        }

        .content p {
            font-size: 1.1rem;
            line-height: 1.8;
            color: #555;
        }

        .team {
            display: flex;
            justify-content: center;
            gap: 1.5rem;
            flex-wrap: wrap;
            margin: 2rem 5%;
        }

        .team .member {
            text-align: center;
            background-color: rgba(255, 255, 255, 0.9);
            padding: 1rem;
            border-radius: 10px;
            box-shadow: 0 2px 4px rgba(0, 0, 0, 0.1);
            max-width: 200px;
        }

        .team .member img {
            border-radius: 50%;
            width: 100px;
            height: 100px;
            object-fit: cover;
            margin-bottom: 1rem;
        }

        .team .member h4 {
            font-size: 1.2rem;
            font-family: 'Lora', serif;
            margin: 0.5rem 0;
            color: #333;
        }

        .team .member p {
            font-size: 0.9rem;
            color: #666;
        }

        footer {
            background-color: rgba(34, 139, 34, 0.9); /* Hijau tua */
            color: white;
            text-align: center;
            padding: 0.2rem;
            margin-top: 2rem;
            font-size: 1rem;
            box-shadow: 0 -2px 4px rgba(0, 0, 0, 0.1);
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

    <div class="content">
    <img src="prov bali.jpg" alt="Peta Sulawesi Selatan">
        <div>
            <h1>Tentang Aplikasi</h1>
            <p>Bali adalah aplikasi berbasis web yang digunakan untuk memetakan data geografis kabupaten/kota dan kecamatan di Provinsi Bali. 
            Aplikasi ini memudahkan pengguna untuk melihat data geografis interaktif, seperti Luas Wilayah, Populasi Penduduk, Idex Pembangunan Manusia (IPM), 
            Produk Domestik Regional Bruto - Perkapita (PDRB), Kepadatan Penduduk, Distribusi Pariwisata, Tingkat Pengangguran, dan Tingkat Kemiskinan.</p>
        </div>
    </div>

    <div class="team">
        <div class="member">
            <img src="member1.jpg" alt="Nama Developer">
            <h4>Meyrvan Maulana Nur Sasmito</h4>
            <p>Fullstack Developer</p>
        </div>
        <div class="member">
            <img src="member2.jpg" alt="Nama Developer">
            <h4>Ahmad Algifari</h4>
            <p>Data Engineer</p>
        </div>
        <div class="member">
            <img src="member3.jpg" alt="Nama Developer">
            <h4>Achmad Fauzan</h4>
            <p>Frontend Developer</p>
        </div>
        <div class="member">
            <img src="member4.jpg" alt="Nama Developer">
            <h4>Rafiza Araihan</h4>
            <p>UI/UX Designer</p>
        </div>
    </div>

    <footer>
        <p>Dibuat oleh Tim SIG Bali &copy; 2025</p>
    </footer>
</body>
</html>
