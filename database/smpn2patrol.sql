-- phpMyAdmin SQL Dump
-- version 4.9.0.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Waktu pembuatan: 08 Mar 2020 pada 16.49
-- Versi server: 10.3.15-MariaDB
-- Versi PHP: 7.3.6

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `smpn2patrol`
--

-- --------------------------------------------------------

--
-- Struktur dari tabel `album`
--

CREATE TABLE `album` (
  `id` int(10) UNSIGNED NOT NULL,
  `nama` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `keterangan` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data untuk tabel `album`
--

INSERT INTO `album` (`id`, `nama`, `keterangan`, `created_at`, `updated_at`) VALUES
(6, 'Paskibra', 'berikut adalah foto kegiatan paskibra SMP Negeri 2 Patrol', '2020-02-27 23:35:11', '2020-02-27 23:35:11'),
(7, 'pramuka', 'berikut adalah foto kegiatan pramuka SMP Negeri 2 Patrol', '2020-02-27 23:49:21', '2020-02-27 23:49:21'),
(8, 'PMR', 'berikut adalah foto kegiatan PMR SMP Negeri 2 Patrol', '2020-02-27 23:57:16', '2020-02-27 23:57:16');

-- --------------------------------------------------------

--
-- Struktur dari tabel `failed_jobs`
--

CREATE TABLE `failed_jobs` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `connection` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `queue` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `payload` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `exception` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `failed_at` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Struktur dari tabel `foto_album`
--

CREATE TABLE `foto_album` (
  `id_f` int(10) UNSIGNED NOT NULL,
  `id_a` int(11) NOT NULL,
  `nama` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data untuk tabel `foto_album`
--

INSERT INTO `foto_album` (`id_f`, `id_a`, `nama`, `created_at`, `updated_at`) VALUES
(3, 3, '[Kusonime] Ore wo Suki nano wa Omae dake ka yo - 01 [480p].mkv_snapshot_07.38.318.jpg', '2020-02-27 01:08:52', '2020-02-27 01:08:52'),
(11, 6, 'WhatsApp Image 2020-02-28 at 13.27.21.jpeg', '2020-02-27 23:35:13', '2020-02-27 23:35:13'),
(12, 6, 'WhatsApp Image 2020-02-28 at 13.27.21 (3).jpeg', '2020-02-27 23:35:13', '2020-02-27 23:35:13'),
(13, 6, 'WhatsApp Image 2020-02-28 at 13.27.21 (2).jpeg', '2020-02-27 23:35:14', '2020-02-27 23:35:14'),
(14, 6, 'WhatsApp Image 2020-02-28 at 13.27.21 (1).jpeg', '2020-02-27 23:35:14', '2020-02-27 23:35:14'),
(15, 7, '2.jpg', '2020-02-27 23:49:22', '2020-02-27 23:49:22'),
(16, 7, 'pramuka penggalang.JPG', '2020-02-27 23:49:22', '2020-02-27 23:49:22'),
(17, 7, 'maxresdefault.jpg', '2020-02-27 23:49:22', '2020-02-27 23:49:22'),
(18, 8, 'hqdefault.jpg', '2020-02-27 23:57:17', '2020-02-27 23:57:17'),
(19, 8, 'pmr3.jpg', '2020-02-27 23:57:17', '2020-02-27 23:57:17'),
(20, 8, 'OIPCO4GEMI4.jpg', '2020-02-27 23:57:17', '2020-02-27 23:57:17'),
(21, 7, 'asd.jpg', '2020-03-01 12:06:33', '2020-03-01 12:06:33');

-- --------------------------------------------------------

--
-- Struktur dari tabel `identitas`
--

CREATE TABLE `identitas` (
  `id` int(10) UNSIGNED NOT NULL,
  `nama` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `alamat` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `logo` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `gambar1` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `gambar2` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `gambar3` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data untuk tabel `identitas`
--

INSERT INTO `identitas` (`id`, `nama`, `alamat`, `email`, `logo`, `gambar1`, `gambar2`, `gambar3`, `created_at`, `updated_at`) VALUES
(1, 'SMP NEGERI 2 PATROL', 'Patrol 2', 'smpn2patrol@gmail.com', 'logo.png', 'gedung 1.jpeg', 'gedung 2.jpeg', 'gedung 3.jpeg', '2020-02-27 14:00:00', '2020-02-27 09:02:06');

-- --------------------------------------------------------

--
-- Struktur dari tabel `kegiatan`
--

CREATE TABLE `kegiatan` (
  `id` int(10) UNSIGNED NOT NULL,
  `nama_kegiatan` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `gambar` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `isi` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data untuk tabel `kegiatan`
--

INSERT INTO `kegiatan` (`id`, `nama_kegiatan`, `gambar`, `isi`, `created_at`, `updated_at`) VALUES
(3, 'PENTAS SENI', 'PENTAS_BUDAYA.jpg', 'Kegiatannya akan menampilkan beberapa kreasi seluruh kelas seperti\r\n- Dance\r\n- Menyanyi\r\n- Tari tradisional dll', '2020-02-17 18:19:18', '2020-02-27 21:47:40'),
(4, 'PORAK (Pekan Olahraga Antar Kelas)', 'thJ5U080LS.jpg', 'Kegiatannya akan mengadakan sebuah perlombaan olahraga antar kelas seperti Tarik tambang, futsal, basket, tenis meja, bulutangkis dan olahraga lainnya', '2020-02-17 18:29:59', '2020-02-27 21:52:20'),
(5, 'Disnatalis Sekolah', 'maxresdefault.jpg', 'Diesnatalis sekolah akan menampilkan beberapa kegiatan seperti potong tumpeng, dan penampilan bebera penampilan siswa', '2020-02-27 22:05:49', '2020-02-27 23:21:09'),
(6, 'Pemilihan Ketua Osis', 'th7EJZGWCR.jpg', 'Kegiatannya akan adanya pemaparan visi dan misi setiap calon ketua osis, voting ketua osis, dan perhitungan hasil voting.', '2020-02-27 23:09:01', '2020-02-27 23:09:01'),
(7, 'Peringatan Hari Besar Islam', 'k4.jpg', 'Kegiatannya berupa lomba pembacaan ayat-ayat al-Qur\'an, Qasidah, Ceramah Agama.', '2020-02-27 23:16:18', '2020-02-27 23:16:18');

-- --------------------------------------------------------

--
-- Struktur dari tabel `kelas`
--

CREATE TABLE `kelas` (
  `id` int(10) UNSIGNED NOT NULL,
  `nama` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data untuk tabel `kelas`
--

INSERT INTO `kelas` (`id`, `nama`, `created_at`, `updated_at`) VALUES
(1, '7A', '2020-02-26 08:37:27', '2020-02-26 08:37:27'),
(3, '8A', '2020-02-26 08:40:45', '2020-02-26 08:41:48'),
(4, '9C', '2020-02-26 08:54:30', '2020-02-26 08:59:41'),
(5, '7B', '2020-03-01 09:57:47', '2020-03-01 09:57:47'),
(6, '7C', '2020-03-01 09:58:02', '2020-03-01 09:58:02'),
(7, '8B', '2020-03-01 09:58:17', '2020-03-01 09:58:17'),
(8, '8C', '2020-03-01 09:58:35', '2020-03-01 09:58:35'),
(9, '9A', '2020-03-01 09:58:48', '2020-03-01 09:58:48'),
(10, '9B', '2020-03-01 09:59:08', '2020-03-01 09:59:08');

-- --------------------------------------------------------

--
-- Struktur dari tabel `migrations`
--

CREATE TABLE `migrations` (
  `id` int(10) UNSIGNED NOT NULL,
  `migration` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `batch` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data untuk tabel `migrations`
--

INSERT INTO `migrations` (`id`, `migration`, `batch`) VALUES
(16, '2014_10_12_000000_create_users_table', 1),
(17, '2014_10_12_100000_create_password_resets_table', 1),
(18, '2019_08_19_000000_create_failed_jobs_table', 1),
(19, '2020_01_20_062903_kegiatan', 1),
(21, '2020_01_20_063606_pengumuman', 1),
(27, '2020_02_26_141429_kelas', 4),
(28, '2020_01_20_063458_siswa', 5),
(29, '2020_02_25_172300_album', 6),
(30, '2020_02_25_172539_foto_album', 7),
(31, '2020_01_20_071343_identitas', 8);

-- --------------------------------------------------------

--
-- Struktur dari tabel `password_resets`
--

CREATE TABLE `password_resets` (
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `token` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Struktur dari tabel `pengumuman`
--

CREATE TABLE `pengumuman` (
  `id` int(10) UNSIGNED NOT NULL,
  `nama_pengumuman` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `isi` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `file` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data untuk tabel `pengumuman`
--

INSERT INTO `pengumuman` (`id`, `nama_pengumuman`, `isi`, `file`, `created_at`, `updated_at`) VALUES
(3, 'INFORMASI PELAKSANAAN UPACARA PERINGATAN HUT RI KE 72', 'Informasi ini disampaikan kepada seluruh siswa SMP Negeri 2 Patrol bahwa pada hari kamis 17 Agustus 2017 akan dilaksanakan upacara bendera dalam rangka HUT RI ke-72', 'kosong', '2020-02-28 00:05:00', '2020-02-28 00:05:00'),
(4, 'INFORMASI PERINGATAN HARI PRAMUKA 2017', 'Informasi ini disampaikan kepada seluruh siswa SMP Negeri 2 Patrol bahwa pada hari Senin 14 Agustus 2017 akan diadakan upacara/apel hari pramuka', 'kosong', '2020-02-28 00:06:49', '2020-02-28 00:06:49'),
(5, 'PENGUMUMAN UNTUK SISWA KELAS 9', 'Diumumkan kepada seluruh siswa kelas 9 SMP Negeri 2 Patrol diharapkan hadir disekolah pada hari Sabtu 17 juni 2018 untuk cap 3 jari ijaxah & mengambil undangan pelepasan siswa kelas 9', 'kosong', '2020-02-28 00:09:05', '2020-02-28 00:09:05');

-- --------------------------------------------------------

--
-- Struktur dari tabel `siswa`
--

CREATE TABLE `siswa` (
  `id` int(10) UNSIGNED NOT NULL,
  `nama` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `nis` varchar(50) COLLATE utf8mb4_unicode_ci NOT NULL,
  `id_k` int(11) NOT NULL,
  `alamat` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `jenis_kelamin` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data untuk tabel `siswa`
--

INSERT INTO `siswa` (`id`, `nama`, `nis`, `id_k`, `alamat`, `jenis_kelamin`, `created_at`, `updated_at`) VALUES
(1, 'Teguh Warsono', '87982379', 5, 'Kalensari', 'Laki-laki', '2020-02-26 08:42:29', '2020-03-01 10:01:22'),
(4, 'Imam Madin Nasution', '234234234', 1, 'Bangkaloa', 'Laki-laki', '2020-03-01 09:59:46', '2020-03-01 09:59:46'),
(5, 'Arista', '6356568567', 6, 'Malangsari', 'Laki-laki', '2020-03-01 10:06:51', '2020-03-01 10:06:51'),
(6, 'Dina Mayasari Melati', '00098726353', 8, 'Malangsari', 'Perempuan', '2020-03-01 18:57:04', '2020-03-01 19:06:08'),
(7, 'Desi Ratnasari', '9997865436', 8, 'Bangkaloa', 'perempuan', '2020-03-01 19:05:14', '2020-03-01 19:05:14'),
(8, 'Delia', '99937462521', 3, 'Malangsari', 'perempuan', '2020-03-01 19:39:48', '2020-03-01 19:39:48'),
(9, 'Ahmad Toni', '9995372482', 7, 'Bangkaloa', 'Laki-laki', '2020-03-01 19:40:23', '2020-03-01 19:40:23'),
(10, 'Sugilang', '9993517383', 9, 'Bangkaloa', 'Laki-laki', '2020-03-01 19:41:05', '2020-03-01 19:41:05'),
(11, 'Weka Ramadhan', '9999262521431', 10, 'Kalensari', 'Laki-laki', '2020-03-01 19:41:46', '2020-03-01 19:41:46'),
(12, 'Prasetyo Anggara', '0003748263', 4, 'Kalensari', 'Laki-laki', '2020-03-01 19:42:40', '2020-03-01 19:42:40'),
(13, 'Maryana', '000372426423', 7, 'Kalensari', 'perempuan', '2020-03-01 19:43:24', '2020-03-01 19:43:24'),
(14, 'Fatoni', '0003746343', 1, 'Malangsari', 'Laki-laki', '2020-03-01 19:45:02', '2020-03-01 19:45:02'),
(15, 'hermawan', '9993848342', 8, 'Kalensari', 'Laki-laki', '2020-03-01 19:45:57', '2020-03-01 19:45:57');

-- --------------------------------------------------------

--
-- Struktur dari tabel `users`
--

CREATE TABLE `users` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email_verified_at` timestamp NULL DEFAULT NULL,
  `password` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `remember_token` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data untuk tabel `users`
--

INSERT INTO `users` (`id`, `name`, `email`, `email_verified_at`, `password`, `remember_token`, `created_at`, `updated_at`) VALUES
(1, 'admin', 'admin@gmail.com', NULL, '$2y$10$N5UgaWQCCi5rILoTSuANIeVkNSEP35uHfJ/nm9sRttytGwXZwo.ku', NULL, '2020-02-09 01:22:04', '2020-02-09 01:22:04');

--
-- Indexes for dumped tables
--

--
-- Indeks untuk tabel `album`
--
ALTER TABLE `album`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `failed_jobs`
--
ALTER TABLE `failed_jobs`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `foto_album`
--
ALTER TABLE `foto_album`
  ADD PRIMARY KEY (`id_f`);

--
-- Indeks untuk tabel `identitas`
--
ALTER TABLE `identitas`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `kegiatan`
--
ALTER TABLE `kegiatan`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `kelas`
--
ALTER TABLE `kelas`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `migrations`
--
ALTER TABLE `migrations`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `password_resets`
--
ALTER TABLE `password_resets`
  ADD KEY `password_resets_email_index` (`email`);

--
-- Indeks untuk tabel `pengumuman`
--
ALTER TABLE `pengumuman`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `siswa`
--
ALTER TABLE `siswa`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `users_email_unique` (`email`);

--
-- AUTO_INCREMENT untuk tabel yang dibuang
--

--
-- AUTO_INCREMENT untuk tabel `album`
--
ALTER TABLE `album`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT untuk tabel `failed_jobs`
--
ALTER TABLE `failed_jobs`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT untuk tabel `foto_album`
--
ALTER TABLE `foto_album`
  MODIFY `id_f` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=22;

--
-- AUTO_INCREMENT untuk tabel `identitas`
--
ALTER TABLE `identitas`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT untuk tabel `kegiatan`
--
ALTER TABLE `kegiatan`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT untuk tabel `kelas`
--
ALTER TABLE `kelas`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- AUTO_INCREMENT untuk tabel `migrations`
--
ALTER TABLE `migrations`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=32;

--
-- AUTO_INCREMENT untuk tabel `pengumuman`
--
ALTER TABLE `pengumuman`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT untuk tabel `siswa`
--
ALTER TABLE `siswa`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=16;

--
-- AUTO_INCREMENT untuk tabel `users`
--
ALTER TABLE `users`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
