-- phpMyAdmin SQL Dump
-- version 4.5.1
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: 26 Nov 2019 pada 09.45
-- Versi Server: 10.1.19-MariaDB
-- PHP Version: 5.6.28

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `travel`
--

-- --------------------------------------------------------

--
-- Struktur dari tabel `hak_akses`
--

CREATE TABLE `hak_akses` (
  `id` int(11) NOT NULL,
  `jenis` varchar(25) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `hak_akses`
--

INSERT INTO `hak_akses` (`id`, `jenis`) VALUES
(0, 'SUPER ADMIN'),
(1, 'ADMIN'),
(2, 'PENGEMUDI');

-- --------------------------------------------------------

--
-- Struktur dari tabel `harga`
--

CREATE TABLE `harga` (
  `id_harga` int(11) NOT NULL,
  `id_kota_asal` int(11) NOT NULL,
  `id_kota_tujuan` int(11) NOT NULL,
  `harga` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Struktur dari tabel `jadwal_berangkat`
--

CREATE TABLE `jadwal_berangkat` (
  `id_jadwal` int(11) NOT NULL,
  `kode_jadwal` int(11) NOT NULL,
  `tanggal_berangkat` date NOT NULL,
  `jam_berangkat` time NOT NULL,
  `id_pemesanan` char(8) NOT NULL,
  `id_pengemudi` int(11) NOT NULL,
  `id_kota_asal` int(11) NOT NULL,
  `id_kota_tujuan` int(11) NOT NULL,
  `jumlah_pemesanan` int(11) NOT NULL,
  `status` char(2) NOT NULL,
  `waktu_order` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `jadwal_berangkat`
--

INSERT INTO `jadwal_berangkat` (`id_jadwal`, `kode_jadwal`, `tanggal_berangkat`, `jam_berangkat`, `id_pemesanan`, `id_pengemudi`, `id_kota_asal`, `id_kota_tujuan`, `jumlah_pemesanan`, `status`, `waktu_order`) VALUES
(4, 1, '2019-11-12', '16:05:00', '19PSN000', 3, 1, 2, 1, '3', '0000-00-00 00:00:00'),
(5, 1, '2019-11-12', '06:00:00', '19PSN001', 3, 1, 2, 1, '3', '0000-00-00 00:00:00'),
(6, 2, '2019-11-12', '07:15:00', '19PSN002', 6, 1, 2, 2, '1', '0000-00-00 00:00:00');

-- --------------------------------------------------------

--
-- Struktur dari tabel `kota_asal`
--

CREATE TABLE `kota_asal` (
  `id_kota_asal` int(11) NOT NULL,
  `nama_kota_asal` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `kota_asal`
--

INSERT INTO `kota_asal` (`id_kota_asal`, `nama_kota_asal`) VALUES
(1, 'BREBES'),
(2, 'BUMIAYU');

-- --------------------------------------------------------

--
-- Struktur dari tabel `kota_tujuan`
--

CREATE TABLE `kota_tujuan` (
  `id_kota_tujuan` int(11) NOT NULL,
  `nama_kota_tujuan` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `kota_tujuan`
--

INSERT INTO `kota_tujuan` (`id_kota_tujuan`, `nama_kota_tujuan`) VALUES
(1, 'BREBES'),
(2, 'BUMIAYU');

-- --------------------------------------------------------

--
-- Struktur dari tabel `pemesanan`
--

CREATE TABLE `pemesanan` (
  `id_pemesanan` char(8) NOT NULL,
  `kode_jadwal` int(11) NOT NULL,
  `nama_pemesan` varchar(50) NOT NULL,
  `telp_pemesan` varchar(13) NOT NULL,
  `jumlah_pemesanan` int(11) NOT NULL,
  `tanggal_berangkat` date NOT NULL,
  `jam_berangkat` time NOT NULL,
  `id_kota_asal` int(11) NOT NULL,
  `id_kota_tujuan` int(11) NOT NULL,
  `lokasi_penjemputan` text NOT NULL,
  `harga` int(11) NOT NULL,
  `id_pengemudi` int(11) DEFAULT NULL,
  `status` char(2) NOT NULL,
  `waktu_order` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `pemesanan`
--

INSERT INTO `pemesanan` (`id_pemesanan`, `kode_jadwal`, `nama_pemesan`, `telp_pemesan`, `jumlah_pemesanan`, `tanggal_berangkat`, `jam_berangkat`, `id_kota_asal`, `id_kota_tujuan`, `lokasi_penjemputan`, `harga`, `id_pengemudi`, `status`, `waktu_order`) VALUES
('19PSN000', 0, 'reza', '082329672695', 1, '2019-11-12', '16:05:00', 1, 2, 'disini aja', 0, 3, '3', '2019-11-21 16:07:11'),
('19PSN001', 0, 'dika', '123435', 1, '2019-11-12', '06:00:00', 1, 2, 'dimana aja', 0, 3, '3', '0000-00-00 00:00:00'),
('19PSN002', 0, 'didi', '082326594233', 2, '2019-11-12', '07:15:00', 1, 2, 'dimana aja\r\n', 0, 6, '1', '2019-11-25 19:29:36'),
('19PSN003', 0, 'ebet', '123456789', 1, '2019-11-12', '12:10:00', 2, 1, 'yoi', 0, 0, '5', '2019-11-25 22:09:05');

-- --------------------------------------------------------

--
-- Struktur dari tabel `status_pemesanan`
--

CREATE TABLE `status_pemesanan` (
  `id_status` int(11) NOT NULL,
  `status` char(2) NOT NULL,
  `keterangan` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `status_pemesanan`
--

INSERT INTO `status_pemesanan` (`id_status`, `status`, `keterangan`) VALUES
(1, 'P', 'PROSES'),
(2, 'D', 'DITOLAK'),
(3, 'S', 'SELESAI'),
(4, 'DI', 'DITERIMA'),
(5, 'M', 'MASUK');

-- --------------------------------------------------------

--
-- Struktur dari tabel `users`
--

CREATE TABLE `users` (
  `id_user` int(11) NOT NULL,
  `nama` varchar(50) NOT NULL,
  `username` varchar(25) NOT NULL,
  `password` varchar(50) NOT NULL,
  `hak_akses` int(11) NOT NULL,
  `status` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `users`
--

INSERT INTO `users` (`id_user`, `nama`, `username`, `password`, `hak_akses`, `status`) VALUES
(1, '', 'superadmin123', 'qwerty123', 0, 1),
(2, 'admin ganteng', 'admin1', 'admin1', 1, 1),
(3, 'driver ganteng', 'driver', 'driver', 2, 1),
(4, '', 'admin2', 'admin2', 1, 1),
(6, 'reza', 'driver1', 'driver1', 2, 1);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `hak_akses`
--
ALTER TABLE `hak_akses`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `harga`
--
ALTER TABLE `harga`
  ADD PRIMARY KEY (`id_harga`);

--
-- Indexes for table `jadwal_berangkat`
--
ALTER TABLE `jadwal_berangkat`
  ADD PRIMARY KEY (`id_jadwal`);

--
-- Indexes for table `kota_asal`
--
ALTER TABLE `kota_asal`
  ADD PRIMARY KEY (`id_kota_asal`);

--
-- Indexes for table `kota_tujuan`
--
ALTER TABLE `kota_tujuan`
  ADD PRIMARY KEY (`id_kota_tujuan`);

--
-- Indexes for table `pemesanan`
--
ALTER TABLE `pemesanan`
  ADD PRIMARY KEY (`id_pemesanan`);

--
-- Indexes for table `status_pemesanan`
--
ALTER TABLE `status_pemesanan`
  ADD PRIMARY KEY (`id_status`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id_user`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `harga`
--
ALTER TABLE `harga`
  MODIFY `id_harga` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `jadwal_berangkat`
--
ALTER TABLE `jadwal_berangkat`
  MODIFY `id_jadwal` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;
--
-- AUTO_INCREMENT for table `kota_asal`
--
ALTER TABLE `kota_asal`
  MODIFY `id_kota_asal` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
--
-- AUTO_INCREMENT for table `kota_tujuan`
--
ALTER TABLE `kota_tujuan`
  MODIFY `id_kota_tujuan` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
--
-- AUTO_INCREMENT for table `status_pemesanan`
--
ALTER TABLE `status_pemesanan`
  MODIFY `id_status` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;
--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id_user` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
