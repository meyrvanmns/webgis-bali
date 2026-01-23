-- phpMyAdmin SQL Dump
-- version 5.2.2
-- https://www.phpmyadmin.net/
--
-- Host: localhost:3306
-- Waktu pembuatan: 23 Jan 2026 pada 14.50
-- Versi server: 8.0.30
-- Versi PHP: 8.3.21

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `db_projectsig`
--

-- --------------------------------------------------------

--
-- Struktur dari tabel `districts`
--

CREATE TABLE `districts` (
  `id` bigint UNSIGNED NOT NULL,
  `regency_id` bigint UNSIGNED NOT NULL,
  `name` varchar(30) COLLATE utf8mb4_unicode_ci NOT NULL,
  `alt_name` varchar(30) COLLATE utf8mb4_unicode_ci NOT NULL,
  `latitude` double NOT NULL,
  `longitude` double NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data untuk tabel `districts`
--

INSERT INTO `districts` (`id`, `regency_id`, `name`, `alt_name`, `latitude`, `longitude`, `created_at`, `updated_at`) VALUES
(1109120, 1109, 'SAKTI', 'Sakti, Nusapenida, Klungkung R', -8.71731, 115.47928, NULL, NULL),
(1409030, 1409, 'KUBU', 'Kubu, Kabupaten Karangasem, Ba', -8.25944, 115.566, NULL, NULL),
(3529071, 3529, 'BATUAN', 'Batuan, Sukawati, Gianyar, Bal', -8.58271, 115.27487, NULL, NULL),
(5101010, 5101, 'MELAYA', 'Melaya, Jembrana Regency, Bali', -8.23008, 114.54802, NULL, NULL),
(5101021, 5101, 'JEMBRANA', 'Jembrana, Jembrana Sub-Distric', -8.36095, 114.62935, NULL, NULL),
(5101030, 5101, 'MENDOYO', 'Mendoyo, Jembrana Regency, Bal', -8.31708, 114.76178, NULL, NULL),
(5101040, 5101, 'PEKUTATAN', 'Pekutatan, Jembrana Regency, B', -8.41018, 114.88049, NULL, NULL),
(5102010, 5102, 'SELEMADEG', 'Selemadeg, Kabupaten Tabanan, ', -8.49159, 115.0457, NULL, NULL),
(5102011, 5102, 'SELEMADEG TIMUR', 'East Selemadeg, Tabanan Regenc', -8.48359, 115.06439, NULL, NULL),
(5102012, 5102, 'SELEMADEG BARAT', 'West Selemadeg, Tabanan Regenc', -8.45348, 114.98728, NULL, NULL),
(5102020, 5102, 'KERAMBITAN', 'Kerambitan, Tabanan Regency, B', -8.52238, 115.08811, NULL, NULL),
(5102030, 5102, 'TABANAN', 'Tabanan, Tabanan Sub-District,', -8.53756, 115.12469, NULL, NULL),
(5102050, 5102, 'MARGA', 'Marga, Tabanan Regency, Bali, ', -8.44602, 115.17113, NULL, NULL),
(5102060, 5102, 'BATURITI', 'Baturiti, Tabanan Regency, Bal', -8.33979, 115.17706, NULL, NULL),
(5102070, 5102, 'PENEBEL', 'Penebel, Kabupaten Tabanan, Ba', -8.42816, 115.1448, NULL, NULL),
(5102080, 5102, 'PUPUAN', 'Pupuan, Tabanan Regency, Bali,', -8.36024, 115.02287, NULL, NULL),
(5103010, 5103, 'KUTA SELATAN', 'South Kuta, Badung Regency, Ba', -8.79488, 115.19886, NULL, NULL),
(5103020, 5103, 'KUTA', 'Kuta, Badung Regency, Bali, In', -8.7238, 115.17523, NULL, NULL),
(5103030, 5103, 'KUTA UTARA', 'North Kuta, Badung Regency, Ba', -8.64305, 115.1606, NULL, NULL),
(5103040, 5103, 'MENGWI', 'Mengwi, Badung Regency, Bali, ', -8.54346, 115.17158, NULL, NULL),
(5103050, 5103, 'ABIANSEMAL', 'Abiansemal, Badung Regency, Ba', -8.54318, 115.21703, NULL, NULL),
(5103060, 5103, 'PETANG', 'Petang, Badung Regency, Bali, ', -8.33659, 115.22449, NULL, NULL),
(5104010, 5104, 'SUKAWATI', 'Sukawati, Guwang, Sukawati, Ka', -8.60556, 115.2805, NULL, NULL),
(5104020, 5104, 'BLAHBATUH', 'Blahbatuh, Gianyar, Bali, Indo', -8.59223, 115.31932, NULL, NULL),
(5104030, 5104, 'GIANYAR', 'Gianyar, Gianyar Sub-District,', -8.53671, 115.33144, NULL, NULL),
(5104040, 5104, 'TAMPAKSIRING', 'Tampaksiring, Gianyar, Bali, I', -8.42621, 115.31339, NULL, NULL),
(5104050, 5104, 'UBUD', 'Ubud, Gianyar, Bali, Indonesia', -8.49773, 115.26301, NULL, NULL),
(5104060, 5104, 'TEGALLALANG', 'Tegallalang, Gianyar, Bali, In', -8.39217, 115.29561, NULL, NULL),
(5104070, 5104, 'PAYANGAN', 'Payangan, Gianyar, Bali, Indon', -8.3954, 115.2482, NULL, NULL),
(5105010, 5105, 'NUSAPENIDA', 'Penida Island, Nusapenida, Klu', -8.72781, 115.54442, NULL, NULL),
(5105020, 5105, 'BANJARANGKAN', 'Banjarangkan, Klungkung Regenc', -8.52292, 115.37265, NULL, NULL),
(5105030, 5105, 'KLUNGKUNG', 'Klungkung, Klungkung Sub-Distr', -8.53883, 115.40237, NULL, NULL),
(5105040, 5105, 'DAWAN', 'Dawan, Klungkung Regency, Bali', -8.54359, 115.43782, NULL, NULL),
(5106010, 5106, 'SUSUT', 'Susut, Sulahan, Susut, Kabupat', -8.42487, 115.346, NULL, NULL),
(5106020, 5106, 'BANGLI', 'Bangli, Kawan, Kec. Bangli, Ka', -8.4543, 115.3549, NULL, NULL),
(5106030, 5106, 'TEMBUKU', 'Tembuku, Rendang, Kabupaten Ka', -8.42766, 115.42, NULL, NULL),
(5106040, 5106, 'KINTAMANI', 'Kintamani, Bangli Regency, Bal', -8.25739, 115.35487, NULL, NULL),
(5107010, 5107, 'RENDANG', 'Rendang, Karangasem Regency, B', -8.36233, 115.43782, NULL, NULL),
(5107020, 5107, 'SIDEMEN', 'Sidemen, Karangasem Regency, B', -8.48311, 115.43782, NULL, NULL),
(5107030, 5107, 'MANGGIS', 'Manggis, Kabupaten Karangasem,', -8.49218, 115.5252, NULL, NULL),
(5107040, 5107, 'KARANGASEM', 'Karangasem, Karangasem Sub-Dis', -8.44629, 115.61273, NULL, NULL),
(5107050, 5107, 'ABANG', 'Abang, Karangasem Regency, Bal', -8.3694, 115.62731, NULL, NULL),
(5107060, 5107, 'BEBANDEM', 'Bebandem, Kabupaten Karangasem', -8.43892, 115.5633, NULL, NULL),
(5107070, 5107, 'SELAT', 'Selat, Pering Sari, Selat, Kab', -8.43785, 115.4659, NULL, NULL),
(5108010, 5108, 'GEROKGAK', 'Gerokgak, Kabupaten Buleleng, ', -8.19129, 114.7905, NULL, NULL),
(5108020, 5108, 'SERIRIT', 'Seririt, Buleleng Regency, Bal', -8.20532, 114.92795, NULL, NULL),
(5108030, 5108, 'BUSUNGBIU', 'Busungbiu, Buleleng Regency, B', -8.32625, 114.92795, NULL, NULL),
(5108050, 5108, 'SUKASADA', 'Sukasada, Buleleng Regency, Ba', -8.19281, 115.11777, NULL, NULL),
(5108060, 5108, 'BULELENG', 'Buleleng, Buleleng Sub-Distric', -8.12138, 115.07818, NULL, NULL),
(5108070, 5108, 'SAWAN', 'Sawan, Menyali, Sawan, Kabupat', -8.13291, 115.1727, NULL, NULL),
(5108080, 5108, 'KUBUTAMBAHAN', 'Kubutambahan, Bukti, Kubutamba', -8.08944, 115.2316, NULL, NULL),
(5108090, 5108, 'TEJAKULA', 'Tedjakula, Tejakula, Kabupaten', -8.13193, 115.3396, NULL, NULL),
(5171010, 5171, 'DENPASAR SELATAN', 'South Denpasar, Denpasar City,', -8.69831, 115.2482, NULL, NULL);

--
-- Indexes for dumped tables
--

--
-- Indeks untuk tabel `districts`
--
ALTER TABLE `districts`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `districts_name_unique` (`name`);

--
-- AUTO_INCREMENT untuk tabel yang dibuang
--

--
-- AUTO_INCREMENT untuk tabel `districts`
--
ALTER TABLE `districts`
  MODIFY `id` bigint UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5171011;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
