-- phpMyAdmin SQL Dump
-- version 4.8.5
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Waktu pembuatan: 02 Jul 2022 pada 08.55
-- Versi server: 10.1.38-MariaDB
-- Versi PHP: 7.3.2

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `project_arsip_digital`
--

-- --------------------------------------------------------

--
-- Struktur dari tabel `admin`
--

CREATE TABLE `admin` (
  `admin_id` int(11) NOT NULL,
  `admin_nama` varchar(255) NOT NULL,
  `admin_username` varchar(255) NOT NULL,
  `admin_password` varchar(255) NOT NULL,
  `admin_foto` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data untuk tabel `admin`
--

INSERT INTO `admin` (`admin_id`, `admin_nama`, `admin_username`, `admin_password`, `admin_foto`) VALUES
(1, 'IT Support', 'admin', '0192023a7bbd73250516f069df18b500', '1471275613_Screen Shot 2019-10-11 at 16.26.42.png');

-- --------------------------------------------------------

--
-- Struktur dari tabel `arsip`
--

CREATE TABLE `arsip` (
  `arsip_id` int(11) NOT NULL,
  `arsip_waktu_upload` datetime NOT NULL,
  `arsip_petugas` int(11) NOT NULL,
  `arsip_kode` varchar(255) NOT NULL,
  `arsip_nama` varchar(255) NOT NULL,
  `arsip_jenis` varchar(255) NOT NULL,
  `arsip_kategori` int(11) NOT NULL,
  `arsip_keterangan` text NOT NULL,
  `arsip_file` varchar(255) NOT NULL,
  `user` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data untuk tabel `arsip`
--

INSERT INTO `arsip` (`arsip_id`, `arsip_waktu_upload`, `arsip_petugas`, `arsip_kode`, `arsip_nama`, `arsip_jenis`, `arsip_kategori`, `arsip_keterangan`, `arsip_file`, `user`) VALUES
(13, '2022-06-08 01:30:19', 7, '2021/01/05', '01-Etalase | Edisi : Selasa, 5 Januari 2021', 'pdf', 12, 'Arsip Koran Digital 01-Etalase | Edisi : Selasa, 5 Januari 2021', '20344_1 ETALASE 1.pdf', 45),
(14, '2022-06-08 01:31:47', 7, '2021/01/05', '02-Legislator Puncak Botu | Edisi : Selasa, 5 Januari 2021', 'pdf', 13, 'Arsip Koran Digital Halaman 02-Legislator Puncak Botu | Edisi : Selasa, 5 Januari 2021', '5713_2 LEGIS PUNCAK BOTU.pdf', 45),
(15, '2022-06-08 01:33:55', 7, '2021/01/05', '03-Gorontalo Gemilang | Edisi : Selasa, 5 Januari 2021', 'pdf', 34, 'Arsip Koran Digital Halaman 03-Gorontalo Gemilang | Edisi : Selasa, 5 Januari 2021', '21913_3 LIMBOTO.pdf', 45),
(16, '2022-06-08 01:34:59', 7, '2021/01/05', '04-Legislator Menara | Edisi : Selasa, 5 Januari 2021', 'pdf', 15, 'Arsip Koran Digital Halaman 04-Legislator Menara | Edisi : Selasa, 5 Januari 2021', '16478_4 LEGIS MENARA.pdf', 45),
(17, '2022-06-08 01:35:41', 7, '2021/01/05', '05-Persepsi | Edisi : Selasa, 5 Januari 2021', 'pdf', 20, 'Arsip Koran Digital Halaman 05-Persepsi | Edisi : Selasa, 5 Januari 2021', '24246_5 PERSEPSI.pdf', 53),
(18, '2022-06-08 01:37:50', 7, '2021/01/05', '06-Boalemo Damai Bertasbih | Edisi : Selasa, 5 Januari 2021', 'pdf', 18, 'Arsip Koran Digital Halaman 06-Boalemo Damai Bertasbih | Edisi : Selasa, 5 Januari 2021', '32052_6 BOALEMO.pdf', 53),
(19, '2022-06-08 01:38:41', 7, '2021/01/05', '07-Sportivo | Edisi : Selasa, 5 Januari 2021', 'pdf', 21, 'Arsip Koran Digital Halaman 07-Sportivo | Edisi : Selasa, 5 Januari 2021', '22365_7 SPORTIVO.pdf', 53),
(20, '2022-06-08 02:09:38', 7, '2021/01/05', '08-Pohuwato Madani & Legislator Bumi Panua | Edisi : Selasa, 5 Januari 2021', 'pdf', 23, 'Arsip Koran Digital Halaman 08-Pohuwato Madani & Legislator Bumi Panua | Edisi : Selasa, 5 Januari 2021', '15423_8 POHUWATO.pdf', 53),
(21, '2022-07-02 13:49:43', 7, '2021/01/05', '08-Pohuwato Madani & Legislator Bumi Panua', 'pdf', 22, 'Arsip Koran Digital Halaman 08-Pohuwato Madani & Legislator Bumi Panua | Edisi : Selasa, 5 Januari 2021', '598011853_32598_1 ETALASE 1.pdf', 45);

-- --------------------------------------------------------

--
-- Struktur dari tabel `kategori`
--

CREATE TABLE `kategori` (
  `kategori_id` int(11) NOT NULL,
  `kategori_nama` varchar(255) NOT NULL,
  `kategori_keterangan` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data untuk tabel `kategori`
--

INSERT INTO `kategori` (`kategori_id`, `kategori_nama`, `kategori_keterangan`) VALUES
(1, 'Tidak berkategori', 'Semua yang tidak memiliki kategori'),
(12, 'Etalase', 'Halaman Etalase'),
(13, 'Legis Puncak Botu', 'Halaman Legis Puncak Botu'),
(14, 'Limboto', 'Halaman Limboto'),
(15, 'Legislator Menara', 'Halaman Legislator Menara'),
(16, 'Legislator Tilongkabila', 'Halaman Legislator Tilongkabila'),
(17, 'Bonebolango Cemerlang', 'Halaman Bonebolango Cemerlang'),
(18, 'Boalemo Damai Bertasbih', 'Halaman Boalemo Damai Bertasbih'),
(20, 'Persepsi', 'Halaman Persepsi'),
(21, 'Sportivo', 'Halaman Sportivo'),
(22, 'Pohuwato Madani', 'Halaman Pohuwato Madani'),
(23, 'Legislator Bumi Panua', 'Halaman Legislator Bumi Panua'),
(24, 'Metropolis', 'Halaman Metropolis'),
(25, 'Universitas Negeri Gorontalo', 'Halaman Universitas Negeri Gorontalo'),
(26, 'Sambungan Halaman 9', 'Halaman Sambungan dari Halaman 9'),
(27, 'Gorontalo Kota Smart', 'Halaman Gorontalo Kota Smart'),
(28, 'Legislator Andalas', 'Halaman Legislator Andalas'),
(29, 'Legislator Pantura', 'Halaman Legislator Pantura'),
(30, 'Gorut Gerbang Emas', 'Halaman Gorut Gerbang Emas'),
(31, 'Kuliner', 'Halaman Kuliner'),
(32, 'Komunikasi Sosial', 'Halaman Komunikasi Sosial'),
(33, 'Ekonomi Bisnis', 'Halaman Ekonomi Bisnis'),
(34, 'Gorontalo Gemilang', 'Halaman Gorontalo Gemilang'),
(35, 'tes', 'tes');

-- --------------------------------------------------------

--
-- Struktur dari tabel `pengajuan`
--

CREATE TABLE `pengajuan` (
  `id_pengajuan` int(11) NOT NULL,
  `waktu_pengajuan` datetime NOT NULL,
  `instansi_pengajuan` varchar(255) CHARACTER SET utf8 NOT NULL,
  `pengajuan_user` int(11) NOT NULL,
  `kategori_pengajuan` varchar(255) CHARACTER SET utf8 NOT NULL,
  `data_terbit` date NOT NULL,
  `keterangan_pengajuan` text CHARACTER SET utf8 NOT NULL,
  `status_pengajuan` int(11) DEFAULT NULL,
  `bukti_pengajuan` varchar(255) CHARACTER SET utf8 NOT NULL,
  `jenis` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `pengajuan`
--

INSERT INTO `pengajuan` (`id_pengajuan`, `waktu_pengajuan`, `instansi_pengajuan`, `pengajuan_user`, `kategori_pengajuan`, `data_terbit`, `keterangan_pengajuan`, `status_pengajuan`, `bukti_pengajuan`, `jenis`) VALUES
(1, '2022-06-30 11:55:51', 'Yayasan BIna Taruna Gorontalo', 45, '12', '2022-01-01', 'Butuh besok pagi jam 9', 0, '5227867_Penguins.jpg', 'jpg'),
(2, '2022-06-30 12:02:31', 'Bank BTN', 45, '34', '2022-02-01', 'untuk keperluan arsip instansi', 0, '121806648_15423_8 POHUWATO.pdf', 'pdf'),
(3, '2022-07-02 11:59:28', 'Dahlil Hotel', 45, '25', '2022-01-01', 'Arsip untuk hotel', 1, '1680035493_Desert.jpg', 'jpg');

-- --------------------------------------------------------

--
-- Struktur dari tabel `petugas`
--

CREATE TABLE `petugas` (
  `petugas_id` int(11) NOT NULL,
  `petugas_nama` varchar(255) NOT NULL,
  `petugas_username` varchar(255) NOT NULL,
  `petugas_password` varchar(255) NOT NULL,
  `petugas_foto` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data untuk tabel `petugas`
--

INSERT INTO `petugas` (`petugas_id`, `petugas_nama`, `petugas_username`, `petugas_password`, `petugas_foto`) VALUES
(7, 'Riya Mokoginta', 'Iya', '202cb962ac59075b964b07152d234b70', ''),
(8, 'Agustinawaty Said', 'eyn', 'c689f55c55e9b52cf01fda8cfe68f836', '');

-- --------------------------------------------------------

--
-- Struktur dari tabel `riwayat`
--

CREATE TABLE `riwayat` (
  `riwayat_id` int(11) NOT NULL,
  `riwayat_waktu` datetime NOT NULL,
  `riwayat_user` int(11) NOT NULL,
  `riwayat_arsip` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data untuk tabel `riwayat`
--

INSERT INTO `riwayat` (`riwayat_id`, `riwayat_waktu`, `riwayat_user`, `riwayat_arsip`) VALUES
(1, '2019-10-11 15:32:29', 8, 3),
(2, '2019-10-12 17:09:31', 8, 10),
(3, '2019-10-12 17:09:45', 8, 9),
(4, '2019-10-12 17:09:50', 8, 8),
(5, '2019-10-12 17:09:53', 8, 3),
(6, '2019-10-12 17:10:07', 9, 10),
(7, '2019-10-12 17:10:16', 9, 9),
(8, '2019-10-12 17:10:19', 9, 8),
(9, '2019-10-12 17:10:22', 9, 6),
(10, '2019-10-12 17:10:26', 9, 2),
(11, '2022-06-14 12:37:44', 16, 20),
(12, '2022-06-15 10:39:51', 45, 20);

-- --------------------------------------------------------

--
-- Struktur dari tabel `user`
--

CREATE TABLE `user` (
  `user_id` int(11) NOT NULL,
  `user_nama` varchar(100) NOT NULL,
  `user_email` varchar(100) NOT NULL,
  `user_username` varchar(100) NOT NULL,
  `user_password` varchar(100) NOT NULL,
  `user_foto` varchar(100) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data untuk tabel `user`
--

INSERT INTO `user` (`user_id`, `user_nama`, `user_email`, `user_username`, `user_password`, `user_foto`) VALUES
(45, 'user', 'user@arsippdf.com', 'user', '6ad14ba9986e3615423dfca256d04e3f', ''),
(53, 'user1', 'user@arsippdf.com', 'as', '6ad14ba9986e3615423dfca256d04e3f', '');

--
-- Indexes for dumped tables
--

--
-- Indeks untuk tabel `admin`
--
ALTER TABLE `admin`
  ADD PRIMARY KEY (`admin_id`),
  ADD KEY `admin_id` (`admin_id`);

--
-- Indeks untuk tabel `arsip`
--
ALTER TABLE `arsip`
  ADD PRIMARY KEY (`arsip_id`),
  ADD KEY `arsip_petugas` (`arsip_petugas`),
  ADD KEY `arsip_kategori` (`arsip_kategori`);

--
-- Indeks untuk tabel `kategori`
--
ALTER TABLE `kategori`
  ADD PRIMARY KEY (`kategori_id`);

--
-- Indeks untuk tabel `pengajuan`
--
ALTER TABLE `pengajuan`
  ADD PRIMARY KEY (`id_pengajuan`),
  ADD KEY `pengajuan_user` (`pengajuan_user`);

--
-- Indeks untuk tabel `petugas`
--
ALTER TABLE `petugas`
  ADD PRIMARY KEY (`petugas_id`);

--
-- Indeks untuk tabel `riwayat`
--
ALTER TABLE `riwayat`
  ADD PRIMARY KEY (`riwayat_id`),
  ADD KEY `riwayat_user` (`riwayat_user`),
  ADD KEY `riwayat_arsip` (`riwayat_arsip`),
  ADD KEY `riwayat_arsip_2` (`riwayat_arsip`),
  ADD KEY `riwayat_user_2` (`riwayat_user`),
  ADD KEY `riwayat_arsip_3` (`riwayat_arsip`),
  ADD KEY `riwayat_user_3` (`riwayat_user`),
  ADD KEY `riwayat_arsip_4` (`riwayat_arsip`);

--
-- Indeks untuk tabel `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`user_id`);

--
-- AUTO_INCREMENT untuk tabel yang dibuang
--

--
-- AUTO_INCREMENT untuk tabel `admin`
--
ALTER TABLE `admin`
  MODIFY `admin_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT untuk tabel `arsip`
--
ALTER TABLE `arsip`
  MODIFY `arsip_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=22;

--
-- AUTO_INCREMENT untuk tabel `kategori`
--
ALTER TABLE `kategori`
  MODIFY `kategori_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=36;

--
-- AUTO_INCREMENT untuk tabel `pengajuan`
--
ALTER TABLE `pengajuan`
  MODIFY `id_pengajuan` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT untuk tabel `petugas`
--
ALTER TABLE `petugas`
  MODIFY `petugas_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT untuk tabel `riwayat`
--
ALTER TABLE `riwayat`
  MODIFY `riwayat_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;

--
-- AUTO_INCREMENT untuk tabel `user`
--
ALTER TABLE `user`
  MODIFY `user_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=54;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
