-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Waktu pembuatan: 25 Bulan Mei 2023 pada 03.28
-- Versi server: 10.4.25-MariaDB
-- Versi PHP: 7.4.30

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `ppdb`
--

-- --------------------------------------------------------

--
-- Struktur dari tabel `auth_activation_attempts`
--

CREATE TABLE `auth_activation_attempts` (
  `id` int(11) UNSIGNED NOT NULL,
  `ip_address` varchar(255) NOT NULL,
  `user_agent` varchar(255) NOT NULL,
  `token` varchar(255) DEFAULT NULL,
  `created_at` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Struktur dari tabel `auth_groups`
--

CREATE TABLE `auth_groups` (
  `id` int(11) UNSIGNED NOT NULL,
  `name` varchar(255) NOT NULL,
  `description` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data untuk tabel `auth_groups`
--

INSERT INTO `auth_groups` (`id`, `name`, `description`) VALUES
(1, 'admin', 'Site Administrator'),
(2, 'pimpinan', 'Pimpinan Lembaga'),
(3, 'keuangan', 'Keuangan PPDB'),
(4, 'seleksi', 'Tim Seleksi PPDB'),
(5, 'siswa', 'Calon Peserta Didik Baru');

-- --------------------------------------------------------

--
-- Struktur dari tabel `auth_groups_permissions`
--

CREATE TABLE `auth_groups_permissions` (
  `group_id` int(11) UNSIGNED NOT NULL DEFAULT 0,
  `permission_id` int(11) UNSIGNED NOT NULL DEFAULT 0
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data untuk tabel `auth_groups_permissions`
--

INSERT INTO `auth_groups_permissions` (`group_id`, `permission_id`) VALUES
(1, 1),
(1, 2),
(1, 3);

-- --------------------------------------------------------

--
-- Struktur dari tabel `auth_groups_users`
--

CREATE TABLE `auth_groups_users` (
  `group_id` int(11) UNSIGNED NOT NULL DEFAULT 0,
  `user_id` int(11) UNSIGNED NOT NULL DEFAULT 0
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data untuk tabel `auth_groups_users`
--

INSERT INTO `auth_groups_users` (`group_id`, `user_id`) VALUES
(1, 1),
(1, 11),
(3, 5),
(4, 6),
(5, 2),
(5, 3),
(5, 10);

-- --------------------------------------------------------

--
-- Struktur dari tabel `auth_logins`
--

CREATE TABLE `auth_logins` (
  `id` int(11) UNSIGNED NOT NULL,
  `ip_address` varchar(255) DEFAULT NULL,
  `email` varchar(255) DEFAULT NULL,
  `user_id` int(11) UNSIGNED DEFAULT NULL,
  `date` datetime NOT NULL,
  `success` tinyint(1) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data untuk tabel `auth_logins`
--

INSERT INTO `auth_logins` (`id`, `ip_address`, `email`, `user_id`, `date`, `success`) VALUES
(1, '::1', 'siswa@siswa.com', 2, '2023-05-23 15:10:39', 1),
(2, '::1', 'admin@admin.com', 1, '2023-05-23 15:13:30', 1),
(3, '::1', 'siswa@siswa.com', 2, '2023-05-23 15:15:11', 1),
(4, '::1', 'admin@admin.com', 1, '2023-05-23 15:16:55', 1),
(5, '::1', 'admin@admin.com', 1, '2023-05-23 17:45:26', 1),
(6, '::1', 'pimpinan', NULL, '2023-05-24 01:12:15', 0),
(7, '::1', 'admin@admin.com', 1, '2023-05-24 01:12:20', 1),
(8, '::1', 'pimpinan@gmail.com', 4, '2023-05-24 01:51:05', 1),
(9, '::1', 'admin@admin.com', 1, '2023-05-24 01:51:44', 1),
(10, '::1', 'admin@admin.com', 1, '2023-05-24 11:20:25', 1),
(11, '::1', 'seleksi', NULL, '2023-05-24 11:27:36', 0),
(12, '::1', 'seleksi', NULL, '2023-05-24 11:28:27', 0),
(13, '::1', 'keuangan', NULL, '2023-05-24 11:28:43', 0),
(14, '::1', 'admin@admin.com', 1, '2023-05-24 11:39:10', 1),
(15, '::1', 'asdf@admin.comsd', 9, '2023-05-24 12:11:39', 1),
(16, '::1', 'admin@admin.com', 1, '2023-05-24 13:40:04', 1),
(17, '::1', 'admin@admin.com', 1, '2023-05-24 16:32:29', 1),
(18, '::1', 'admin@admin.com', 1, '2023-05-24 18:20:36', 1),
(19, '::1', 'admin', NULL, '2023-05-24 20:17:37', 0),
(20, '::1', 'admin@admin.com', 1, '2023-05-24 20:17:41', 1),
(21, '::1', 'admin', NULL, '2023-05-24 20:32:26', 0),
(22, '::1', 'admin', NULL, '2023-05-24 20:32:31', 0),
(23, '::1', 'admin@admin.com', 1, '2023-05-24 20:32:35', 1);

-- --------------------------------------------------------

--
-- Struktur dari tabel `auth_permissions`
--

CREATE TABLE `auth_permissions` (
  `id` int(11) UNSIGNED NOT NULL,
  `name` varchar(255) NOT NULL,
  `description` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data untuk tabel `auth_permissions`
--

INSERT INTO `auth_permissions` (`id`, `name`, `description`) VALUES
(1, 'manage-accounts', 'Manage All Accounts'),
(2, 'manage-site', 'Manage Site Info'),
(3, 'manage-profile', 'Manage Profile Info');

-- --------------------------------------------------------

--
-- Struktur dari tabel `auth_reset_attempts`
--

CREATE TABLE `auth_reset_attempts` (
  `id` int(11) UNSIGNED NOT NULL,
  `email` varchar(255) NOT NULL,
  `ip_address` varchar(255) NOT NULL,
  `user_agent` varchar(255) NOT NULL,
  `token` varchar(255) DEFAULT NULL,
  `created_at` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Struktur dari tabel `auth_tokens`
--

CREATE TABLE `auth_tokens` (
  `id` int(11) UNSIGNED NOT NULL,
  `selector` varchar(255) NOT NULL,
  `hashedValidator` varchar(255) NOT NULL,
  `user_id` int(11) UNSIGNED NOT NULL,
  `expires` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Struktur dari tabel `auth_users_permissions`
--

CREATE TABLE `auth_users_permissions` (
  `user_id` int(11) UNSIGNED NOT NULL DEFAULT 0,
  `permission_id` int(11) UNSIGNED NOT NULL DEFAULT 0
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Struktur dari tabel `jenjang`
--

CREATE TABLE `jenjang` (
  `id` int(10) UNSIGNED NOT NULL,
  `description` varchar(100) DEFAULT NULL,
  `created_at` datetime DEFAULT NULL,
  `updated_at` datetime DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data untuk tabel `jenjang`
--

INSERT INTO `jenjang` (`id`, `description`, `created_at`, `updated_at`) VALUES
(1, 'SMP', '2023-05-23 15:02:14', '2023-05-23 15:02:14'),
(2, 'SMAa', '2023-05-23 15:02:14', '2023-05-23 15:02:14');

-- --------------------------------------------------------

--
-- Struktur dari tabel `kompetensi`
--

CREATE TABLE `kompetensi` (
  `id` int(10) UNSIGNED NOT NULL,
  `description` varchar(100) DEFAULT NULL,
  `created_at` datetime DEFAULT NULL,
  `updated_at` datetime DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data untuk tabel `kompetensi`
--

INSERT INTO `kompetensi` (`id`, `description`, `created_at`, `updated_at`) VALUES
(1, 'IPA', '2023-05-23 15:02:14', '2023-05-23 15:02:14'),
(2, 'IPS', '2023-05-23 15:02:14', '2023-05-23 15:02:14');

-- --------------------------------------------------------

--
-- Struktur dari tabel `migrations`
--

CREATE TABLE `migrations` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `version` varchar(255) NOT NULL,
  `class` varchar(255) NOT NULL,
  `group` varchar(255) NOT NULL,
  `namespace` varchar(255) NOT NULL,
  `time` int(11) NOT NULL,
  `batch` int(11) UNSIGNED NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data untuk tabel `migrations`
--

INSERT INTO `migrations` (`id`, `version`, `class`, `group`, `namespace`, `time`, `batch`) VALUES
(69, '2017-11-20-223112', 'Myth\\Auth\\Database\\Migrations\\CreateAuthTables', 'default', 'Myth\\Auth', 1684854131, 1),
(70, '2023-05-20-132911', 'App\\Database\\Migrations\\Siswa', 'default', 'App', 1684854131, 1),
(71, '2023-05-20-143049', 'App\\Database\\Migrations\\Penghasilan', 'default', 'App', 1684854131, 1),
(72, '2023-05-20-144002', 'App\\Database\\Migrations\\Pekerjaan', 'default', 'App', 1684854131, 1),
(73, '2023-05-20-144410', 'App\\Database\\Migrations\\Pendidikan', 'default', 'App', 1684854131, 1),
(74, '2023-05-20-144705', 'App\\Database\\Migrations\\Kompetensi', 'default', 'App', 1684854132, 1),
(75, '2023-05-20-144709', 'App\\Database\\Migrations\\Jenjang', 'default', 'App', 1684854132, 1),
(76, '2023-05-20-151406', 'App\\Database\\Migrations\\StatusPpdb', 'default', 'App', 1684854132, 1),
(77, '2023-05-20-152200', 'App\\Database\\Migrations\\Pengumuman', 'default', 'App', 1684854132, 1),
(78, '2023-05-21-163123', 'App\\Database\\Migrations\\ProfileLembaga', 'default', 'App', 1684854132, 1);

-- --------------------------------------------------------

--
-- Struktur dari tabel `pekerjaan`
--

CREATE TABLE `pekerjaan` (
  `id` int(10) UNSIGNED NOT NULL,
  `description` varchar(100) DEFAULT NULL,
  `created_at` datetime DEFAULT NULL,
  `updated_at` datetime DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data untuk tabel `pekerjaan`
--

INSERT INTO `pekerjaan` (`id`, `description`, `created_at`, `updated_at`) VALUES
(1, 'Tidak Bekerja', '2023-05-23 15:02:14', '2023-05-23 15:02:14'),
(2, 'Pensiunan', '2023-05-23 15:02:14', '2023-05-23 15:02:14'),
(3, 'PNS Selain (Guru dan Dokter/Bidan/Perawat)', '2023-05-23 15:02:14', '2023-05-23 15:02:14'),
(4, 'PNS', '2023-05-23 15:02:14', '2023-05-23 15:02:14'),
(5, 'TNI/POLRI', '2023-05-23 15:02:14', '2023-05-23 15:02:14'),
(6, 'Pegawai Swasta', '2023-05-23 15:02:14', '2023-05-23 15:02:14'),
(7, 'Wiraswasta', '2023-05-23 15:02:14', '2023-05-23 15:02:14'),
(8, 'Pengacara/Hakim/Jaksa/Notaris', '2023-05-23 15:02:14', '2023-05-23 15:02:14'),
(9, 'Seniman/Pelukis/Artis/Sejenis', '2023-05-23 15:02:14', '2023-05-23 15:02:14'),
(10, 'Dokter/Bidan/Perawat', '2023-05-23 15:02:14', '2023-05-23 15:02:14'),
(11, 'Pilot/Pramugara', '2023-05-23 15:02:14', '2023-05-23 15:02:14'),
(12, 'Pedagang', '2023-05-23 15:02:14', '2023-05-23 15:02:14'),
(13, 'Petani/Peternak', '2023-05-23 15:02:14', '2023-05-23 15:02:14'),
(14, 'Nelayan', '2023-05-23 15:02:14', '2023-05-23 15:02:14'),
(15, 'Buruh (Tani/Pabrik/Bangunan)', '2023-05-23 15:02:14', '2023-05-23 15:02:14'),
(16, 'Sopir/Masinis/Kondektur', '2023-05-23 15:02:14', '2023-05-23 15:02:14'),
(17, 'Politikus', '2023-05-23 15:02:14', '2023-05-23 15:02:14'),
(18, 'Lainnya', '2023-05-23 15:02:14', '2023-05-23 15:02:14');

-- --------------------------------------------------------

--
-- Struktur dari tabel `pendidikan`
--

CREATE TABLE `pendidikan` (
  `id` int(10) UNSIGNED NOT NULL,
  `description` varchar(100) DEFAULT NULL,
  `created_at` datetime DEFAULT NULL,
  `updated_at` datetime DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data untuk tabel `pendidikan`
--

INSERT INTO `pendidikan` (`id`, `description`, `created_at`, `updated_at`) VALUES
(1, 'Tidak Sekolah', '2023-05-23 15:02:14', '2023-05-23 15:02:14'),
(2, 'SD/Sederajat', '2023-05-23 15:02:14', '2023-05-23 15:02:14'),
(3, 'SMP/Sederajat', '2023-05-23 15:02:14', '2023-05-23 15:02:14'),
(4, 'SMA/Sederajat', '2023-05-23 15:02:14', '2023-05-23 15:02:14'),
(5, 'Diploma (D1-D3)', '2023-05-23 15:02:14', '2023-05-23 15:02:14'),
(6, 'Sarjana (S1)', '2023-05-23 15:02:14', '2023-05-23 15:02:14'),
(7, 'Magister (S2)', '2023-05-23 15:02:14', '2023-05-23 15:02:14'),
(8, 'Doktor (S3)', '2023-05-23 15:02:14', '2023-05-23 15:02:14');

-- --------------------------------------------------------

--
-- Struktur dari tabel `penghasilan`
--

CREATE TABLE `penghasilan` (
  `id` int(10) UNSIGNED NOT NULL,
  `description` varchar(100) DEFAULT NULL,
  `created_at` datetime DEFAULT NULL,
  `updated_at` datetime DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data untuk tabel `penghasilan`
--

INSERT INTO `penghasilan` (`id`, `description`, `created_at`, `updated_at`) VALUES
(1, 'Kurang dari 1 juta', '2023-05-23 15:02:14', '2023-05-23 15:02:14'),
(2, '1 juta - 3 juta', '2023-05-23 15:02:14', '2023-05-23 15:02:14'),
(3, 'Lebih dari 3 juta', '2023-05-23 15:02:14', '2023-05-23 15:02:14');

-- --------------------------------------------------------

--
-- Struktur dari tabel `pengumuman`
--

CREATE TABLE `pengumuman` (
  `id` int(10) UNSIGNED NOT NULL,
  `ket_pengumuman` text DEFAULT NULL,
  `tgl_pengumuman` datetime DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Struktur dari tabel `profile_lembaga`
--

CREATE TABLE `profile_lembaga` (
  `id` int(10) UNSIGNED NOT NULL,
  `nama_lembaga` varchar(100) DEFAULT NULL,
  `alamat` varchar(100) DEFAULT NULL,
  `email` varchar(100) DEFAULT NULL,
  `website` varchar(100) DEFAULT NULL,
  `telp` varchar(100) DEFAULT NULL,
  `kab_lembaga` varchar(100) DEFAULT NULL,
  `ketua_panitia` varchar(100) DEFAULT NULL,
  `nip_ketua` varchar(100) DEFAULT NULL,
  `th_pelajaran` varchar(100) DEFAULT NULL,
  `no_surat` varchar(100) DEFAULT NULL,
  `kepsek` varchar(100) DEFAULT NULL,
  `nip_kepsek` varchar(100) DEFAULT NULL,
  `logo` varchar(255) DEFAULT NULL,
  `created_at` datetime DEFAULT NULL,
  `updated_at` datetime DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data untuk tabel `profile_lembaga`
--

INSERT INTO `profile_lembaga` (`id`, `nama_lembaga`, `alamat`, `email`, `website`, `telp`, `kab_lembaga`, `ketua_panitia`, `nip_ketua`, `th_pelajaran`, `no_surat`, `kepsek`, `nip_kepsek`, `logo`, `created_at`, `updated_at`) VALUES
(1, 'YAYASAN PONDOK PESANTREN JAMIATUL IKHWAN', 'Jl. Pasopati no. 65 Serang', 'info@test.sch.id', 'www.test.sch.id', '082-444-784-890', 'Serang', 'Dra. Rahayu Ningtyas', '198909153007101112', '2021-2022', '001/MA.11.12/KP.00.02/IV/2021', 'Drs. Asnawi Yanto', '198909153007101112', 'logo.png', '2023-05-23 15:02:14', '2023-05-23 15:02:14'),
(2, 'YAYASAN PONDOK PESANTREN JAMIATUL IKHWAN', 'Jl. Pasopati no. 65 Serang', 'info@test.sch.id', 'www.test.sch.id', '082-444-784-890', '', '', '198909153007101112', '2021-2022', '001/MA.11.12/KP.00.02/IV/2021', 'Drs. Asnawi Yanto', '198909153007101112', 'logo.png', NULL, NULL);

-- --------------------------------------------------------

--
-- Struktur dari tabel `siswa`
--

CREATE TABLE `siswa` (
  `id` int(100) UNSIGNED NOT NULL,
  `no_pendaftaran` varchar(20) NOT NULL,
  `nis` varchar(10) DEFAULT NULL,
  `nisn` varchar(10) DEFAULT NULL,
  `nik` text DEFAULT NULL,
  `nama_lengkap` varchar(100) DEFAULT NULL,
  `jk` varchar(12) DEFAULT NULL,
  `tempat_lahir` text DEFAULT NULL,
  `tgl_lahir` varchar(10) DEFAULT NULL,
  `agama` varchar(30) DEFAULT NULL,
  `status_keluarga` varchar(30) DEFAULT NULL,
  `anak_ke` varchar(100) DEFAULT NULL,
  `jml_saudara` varchar(100) DEFAULT NULL,
  `hobi` varchar(100) DEFAULT NULL,
  `cita` varchar(100) DEFAULT NULL,
  `paud` varchar(100) DEFAULT NULL,
  `tk` varchar(100) DEFAULT NULL,
  `alamat_siswa` text DEFAULT NULL,
  `jenis_tinggal` varchar(100) DEFAULT NULL,
  `desa` varchar(100) DEFAULT NULL,
  `kec` varchar(100) DEFAULT NULL,
  `kab` varchar(100) DEFAULT NULL,
  `prov` varchar(100) DEFAULT NULL,
  `kode_pos` varchar(100) DEFAULT NULL,
  `jarak` varchar(100) DEFAULT NULL,
  `trans` varchar(100) DEFAULT NULL,
  `no_hp_siswa` varchar(14) DEFAULT NULL,
  `no_kk` varchar(20) DEFAULT NULL,
  `kepala_keluarga` varchar(100) DEFAULT NULL,
  `nama_ayah` varchar(100) DEFAULT NULL,
  `nik_ayah` varchar(20) DEFAULT NULL,
  `status_ayah` varchar(100) DEFAULT NULL,
  `th_lahir_ayah` varchar(10) DEFAULT NULL,
  `pdd_ayah` varchar(100) DEFAULT NULL,
  `pekerjaan_ayah` varchar(100) DEFAULT NULL,
  `penghasilan_ayah` varchar(100) DEFAULT NULL,
  `nama_ibu` varchar(100) DEFAULT NULL,
  `nik_ibu` varchar(20) DEFAULT NULL,
  `status_ibu` varchar(100) DEFAULT NULL,
  `th_lahir_ibu` varchar(10) DEFAULT NULL,
  `pdd_ibu` varchar(100) DEFAULT NULL,
  `pekerjaan_ibu` varchar(100) DEFAULT NULL,
  `penghasilan_ibu` varchar(100) DEFAULT NULL,
  `nama_wali` varchar(100) DEFAULT NULL,
  `nik_wali` varchar(20) DEFAULT NULL,
  `th_lahir_wali` varchar(100) DEFAULT NULL,
  `pdd_wali` varchar(100) DEFAULT NULL,
  `pekerjaan_wali` varchar(100) DEFAULT NULL,
  `penghasilan_wali` varchar(100) DEFAULT NULL,
  `no_hp_ortu` varchar(14) DEFAULT NULL,
  `npsn_sekolah` varchar(100) DEFAULT NULL,
  `nama_sekolah` varchar(100) DEFAULT NULL,
  `status_sekolah` varchar(100) DEFAULT NULL,
  `jenjang_sekolah` varchar(100) DEFAULT NULL,
  `lokasi_sekolah` varchar(100) DEFAULT NULL,
  `no_kks` varchar(100) DEFAULT NULL,
  `no_pkh` varchar(100) DEFAULT NULL,
  `no_kip` varchar(100) DEFAULT NULL,
  `jenjang_daftar` varchar(20) DEFAULT NULL,
  `komp_ahli` varchar(100) DEFAULT NULL,
  `tgl_siswa` datetime DEFAULT NULL,
  `status_verifikasi` varchar(30) DEFAULT NULL,
  `status_pendaftaran` varchar(20) DEFAULT NULL,
  `created_at` datetime DEFAULT NULL,
  `updated_at` datetime DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Struktur dari tabel `status_ppdb`
--

CREATE TABLE `status_ppdb` (
  `id` int(10) UNSIGNED NOT NULL,
  `status` varchar(30) DEFAULT NULL,
  `updated_at` datetime DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data untuk tabel `status_ppdb`
--

INSERT INTO `status_ppdb` (`id`, `status`, `updated_at`) VALUES
(1, 'buka', '2023-05-23 15:02:14');

-- --------------------------------------------------------

--
-- Struktur dari tabel `users`
--

CREATE TABLE `users` (
  `id` int(11) UNSIGNED NOT NULL,
  `email` varchar(255) NOT NULL,
  `username` varchar(30) DEFAULT NULL,
  `fullname` varchar(255) DEFAULT NULL,
  `avatar` varchar(255) NOT NULL DEFAULT 'blank.png',
  `password_hash` varchar(255) NOT NULL,
  `reset_hash` varchar(255) DEFAULT NULL,
  `reset_at` datetime DEFAULT NULL,
  `reset_expires` datetime DEFAULT NULL,
  `activate_hash` varchar(255) DEFAULT NULL,
  `status` varchar(255) DEFAULT NULL,
  `status_message` varchar(255) DEFAULT NULL,
  `active` tinyint(1) NOT NULL DEFAULT 0,
  `force_pass_reset` tinyint(1) NOT NULL DEFAULT 0,
  `created_at` datetime DEFAULT NULL,
  `updated_at` datetime DEFAULT NULL,
  `deleted_at` datetime DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data untuk tabel `users`
--

INSERT INTO `users` (`id`, `email`, `username`, `fullname`, `avatar`, `password_hash`, `reset_hash`, `reset_at`, `reset_expires`, `activate_hash`, `status`, `status_message`, `active`, `force_pass_reset`, `created_at`, `updated_at`, `deleted_at`) VALUES
(1, 'admin@admin.com', 'admin', 'Admin', 'blank.png', '$2y$10$zyJWTGtC9dgHGykHoEob9.704nxf0VIMauMiffC2jV4IvgTwKnft6', NULL, NULL, NULL, NULL, NULL, NULL, 1, 0, '2023-05-23 15:03:07', '2023-05-24 20:39:47', NULL),
(2, 'siswa@siswa.com', 'siswa', 'Siswa', 'blank.png', '$2y$10$2Qn/vSpi9D7qZ60YHZfzluu8RIjpAzEb8Q2VaEQgAkB8odoMX.idi', NULL, NULL, NULL, NULL, NULL, NULL, 1, 0, '2023-05-23 15:10:17', '2023-05-23 17:02:09', NULL),
(3, 'siswa1@siswa.com', 'siswa1', NULL, 'blank.png', '$2y$10$vCzAk6UJnSAluVDDhLGFj.PL.m8U/g7NVBOa7b42fVG..Z7bs.T4e', NULL, NULL, NULL, NULL, NULL, NULL, 1, 0, '2023-05-23 17:45:19', '2023-05-23 17:53:34', '2023-05-23 17:53:34'),
(4, 'pimpinan@gmail.com', 'pimpinan1', 'Pimpinan', 'blank.png', '$2y$10$lKWQ4qGvKBVd3k77WbrUU.ZVPaASuFSzRoUmw7xnuqWEzh09AaDDK', NULL, NULL, NULL, NULL, NULL, NULL, 1, 0, '2023-05-24 01:51:02', '2023-05-24 01:51:02', NULL),
(5, 'keuangan@admin.com', 'keuangan1', 'Keuangan', 'blank.png', 'katasandi', NULL, NULL, NULL, NULL, NULL, NULL, 1, 0, '2023-05-24 11:25:17', '2023-05-24 11:25:17', NULL),
(6, 'seleksi@admin.com', 'seleksi1', 'Tim Seleksi', 'blank.png', '$2y$10$PJgwmtptqtq49.oEhXT3duAh8kAi87BBWs3IUkLXXCi1TkoCjIRi2', NULL, NULL, NULL, NULL, NULL, NULL, 1, 0, '2023-05-24 11:26:43', '2023-05-24 20:18:47', NULL),
(7, 'ab@s.cc', 'asdf', 'asd', 'blank.png', '$2y$10$ZSyIk8GmIwGXmVVMt8UUnu9UUe/k.ZQ2/CtlgYjIuqGgGj/iIwFb6', NULL, NULL, NULL, NULL, NULL, NULL, 1, 0, '2023-05-24 11:59:05', '2023-05-24 11:59:05', NULL),
(8, 'ehk@tes.tes', 'tes', 'tes', 'blank.png', '$2y$10$YVzu4VfKb4A8AVhd2kaAQ.bxS6XJRMuVwgi52Fk/WU0yqGU4KDIse', NULL, NULL, NULL, NULL, NULL, NULL, 1, 0, '2023-05-24 12:06:26', '2023-05-24 12:06:26', NULL),
(9, 'asdf@admin.comsd', 'tet', 'tett', 'blank.png', '$2y$10$WgPezR/Jv6SF20OtBEHS/uU7omEO7Km3lTfQLJl6ID2dvBHlppUoS', NULL, NULL, NULL, NULL, NULL, NULL, 1, 0, '2023-05-24 12:11:07', '2023-05-24 12:11:07', NULL),
(10, 'kepala@admin.com', 'kepala', 'Kepala', 'blank.png', '$2y$10$ExYVhhCIPqiVNtqSQhxXd.ntKRlVOah/vY94b80EkW6/pTbLyhxKK', NULL, NULL, NULL, NULL, NULL, NULL, 1, 0, '2023-05-24 17:35:50', '2023-05-24 20:41:50', NULL),
(11, 'ahakonveksi@gmail.coms', 'aaa', 'aaa', 'blank.png', '$2y$10$jSNZro9G572tC/d4bsrhA.QqdSZSs.W4bSLSuKD7h2GZZ29zU9lDu', NULL, NULL, NULL, NULL, NULL, NULL, 1, 0, '2023-05-24 17:40:44', '2023-05-24 17:40:53', '2023-05-24 17:40:53');

--
-- Indexes for dumped tables
--

--
-- Indeks untuk tabel `auth_activation_attempts`
--
ALTER TABLE `auth_activation_attempts`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `auth_groups`
--
ALTER TABLE `auth_groups`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `auth_groups_permissions`
--
ALTER TABLE `auth_groups_permissions`
  ADD KEY `auth_groups_permissions_permission_id_foreign` (`permission_id`),
  ADD KEY `group_id_permission_id` (`group_id`,`permission_id`);

--
-- Indeks untuk tabel `auth_groups_users`
--
ALTER TABLE `auth_groups_users`
  ADD KEY `auth_groups_users_user_id_foreign` (`user_id`),
  ADD KEY `group_id_user_id` (`group_id`,`user_id`);

--
-- Indeks untuk tabel `auth_logins`
--
ALTER TABLE `auth_logins`
  ADD PRIMARY KEY (`id`),
  ADD KEY `email` (`email`),
  ADD KEY `user_id` (`user_id`);

--
-- Indeks untuk tabel `auth_permissions`
--
ALTER TABLE `auth_permissions`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `auth_reset_attempts`
--
ALTER TABLE `auth_reset_attempts`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `auth_tokens`
--
ALTER TABLE `auth_tokens`
  ADD PRIMARY KEY (`id`),
  ADD KEY `auth_tokens_user_id_foreign` (`user_id`),
  ADD KEY `selector` (`selector`);

--
-- Indeks untuk tabel `auth_users_permissions`
--
ALTER TABLE `auth_users_permissions`
  ADD KEY `auth_users_permissions_permission_id_foreign` (`permission_id`),
  ADD KEY `user_id_permission_id` (`user_id`,`permission_id`);

--
-- Indeks untuk tabel `jenjang`
--
ALTER TABLE `jenjang`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `kompetensi`
--
ALTER TABLE `kompetensi`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `migrations`
--
ALTER TABLE `migrations`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `pekerjaan`
--
ALTER TABLE `pekerjaan`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `pendidikan`
--
ALTER TABLE `pendidikan`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `penghasilan`
--
ALTER TABLE `penghasilan`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `pengumuman`
--
ALTER TABLE `pengumuman`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `profile_lembaga`
--
ALTER TABLE `profile_lembaga`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `siswa`
--
ALTER TABLE `siswa`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `status_ppdb`
--
ALTER TABLE `status_ppdb`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `email` (`email`),
  ADD UNIQUE KEY `username` (`username`);

--
-- AUTO_INCREMENT untuk tabel yang dibuang
--

--
-- AUTO_INCREMENT untuk tabel `auth_activation_attempts`
--
ALTER TABLE `auth_activation_attempts`
  MODIFY `id` int(11) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT untuk tabel `auth_groups`
--
ALTER TABLE `auth_groups`
  MODIFY `id` int(11) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT untuk tabel `auth_logins`
--
ALTER TABLE `auth_logins`
  MODIFY `id` int(11) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=24;

--
-- AUTO_INCREMENT untuk tabel `auth_permissions`
--
ALTER TABLE `auth_permissions`
  MODIFY `id` int(11) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT untuk tabel `auth_reset_attempts`
--
ALTER TABLE `auth_reset_attempts`
  MODIFY `id` int(11) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT untuk tabel `auth_tokens`
--
ALTER TABLE `auth_tokens`
  MODIFY `id` int(11) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT untuk tabel `jenjang`
--
ALTER TABLE `jenjang`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT untuk tabel `kompetensi`
--
ALTER TABLE `kompetensi`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT untuk tabel `migrations`
--
ALTER TABLE `migrations`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=79;

--
-- AUTO_INCREMENT untuk tabel `pekerjaan`
--
ALTER TABLE `pekerjaan`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=19;

--
-- AUTO_INCREMENT untuk tabel `pendidikan`
--
ALTER TABLE `pendidikan`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT untuk tabel `penghasilan`
--
ALTER TABLE `penghasilan`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT untuk tabel `pengumuman`
--
ALTER TABLE `pengumuman`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT untuk tabel `profile_lembaga`
--
ALTER TABLE `profile_lembaga`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT untuk tabel `siswa`
--
ALTER TABLE `siswa`
  MODIFY `id` int(100) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT untuk tabel `status_ppdb`
--
ALTER TABLE `status_ppdb`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT untuk tabel `users`
--
ALTER TABLE `users`
  MODIFY `id` int(11) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;

--
-- Ketidakleluasaan untuk tabel pelimpahan (Dumped Tables)
--

--
-- Ketidakleluasaan untuk tabel `auth_groups_permissions`
--
ALTER TABLE `auth_groups_permissions`
  ADD CONSTRAINT `auth_groups_permissions_group_id_foreign` FOREIGN KEY (`group_id`) REFERENCES `auth_groups` (`id`) ON DELETE CASCADE,
  ADD CONSTRAINT `auth_groups_permissions_permission_id_foreign` FOREIGN KEY (`permission_id`) REFERENCES `auth_permissions` (`id`) ON DELETE CASCADE;

--
-- Ketidakleluasaan untuk tabel `auth_groups_users`
--
ALTER TABLE `auth_groups_users`
  ADD CONSTRAINT `auth_groups_users_group_id_foreign` FOREIGN KEY (`group_id`) REFERENCES `auth_groups` (`id`) ON DELETE CASCADE,
  ADD CONSTRAINT `auth_groups_users_user_id_foreign` FOREIGN KEY (`user_id`) REFERENCES `users` (`id`) ON DELETE CASCADE;

--
-- Ketidakleluasaan untuk tabel `auth_tokens`
--
ALTER TABLE `auth_tokens`
  ADD CONSTRAINT `auth_tokens_user_id_foreign` FOREIGN KEY (`user_id`) REFERENCES `users` (`id`) ON DELETE CASCADE;

--
-- Ketidakleluasaan untuk tabel `auth_users_permissions`
--
ALTER TABLE `auth_users_permissions`
  ADD CONSTRAINT `auth_users_permissions_permission_id_foreign` FOREIGN KEY (`permission_id`) REFERENCES `auth_permissions` (`id`) ON DELETE CASCADE,
  ADD CONSTRAINT `auth_users_permissions_user_id_foreign` FOREIGN KEY (`user_id`) REFERENCES `users` (`id`) ON DELETE CASCADE;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
