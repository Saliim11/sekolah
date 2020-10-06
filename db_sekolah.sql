-- phpMyAdmin SQL Dump
-- version 4.9.0.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Waktu pembuatan: 26 Nov 2019 pada 08.58
-- Versi server: 10.4.6-MariaDB
-- Versi PHP: 7.3.8

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `db_sekolah`
--

-- --------------------------------------------------------

--
-- Struktur dari tabel `tb_guru`
--

CREATE TABLE `tb_guru` (
  `id_guru` char(36) NOT NULL,
  `nama_guru` varchar(25) NOT NULL,
  `kelas` varchar(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `tb_guru`
--

INSERT INTO `tb_guru` (`id_guru`, `nama_guru`, `kelas`) VALUES
('01245b20-0f29-11ea-be4e-10e7c61c3ba1', 'hamzah', '10 IPK'),
('1', 'jon', '10 IPA'),
('9b18cdc7-0fed-11ea-b8a7-10e7c61c3ba1', 'hamzah', '10 IPK'),
('9ba721c1-0ce0-11ea-a00d-10e7c61c3ba1', 'Osas', '10 IPS');

-- --------------------------------------------------------

--
-- Struktur dari tabel `tb_kelas`
--

CREATE TABLE `tb_kelas` (
  `id_kelas` int(11) NOT NULL,
  `kelas` varchar(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `tb_kelas`
--

INSERT INTO `tb_kelas` (`id_kelas`, `kelas`) VALUES
(1, '10 IPA'),
(2, '10 IPS');

-- --------------------------------------------------------

--
-- Struktur dari tabel `tb_siswa`
--

CREATE TABLE `tb_siswa` (
  `id_siswa` char(36) NOT NULL,
  `nama_siswa` varchar(25) NOT NULL,
  `kelas` varchar(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `tb_siswa`
--

INSERT INTO `tb_siswa` (`id_siswa`, `nama_siswa`, `kelas`) VALUES
('35fd51a7-0f2b-11ea-be4e-10e7c61c3ba1', 'hamzah', '10 IPS'),
('96722d00-0fed-11ea-b8a7-10e7c61c3ba1', 'hamzah', '10 IPS'),
('ac3b8e79-0f2a-11ea-be4e-10e7c61c3ba1', 'nafis', '10 IPS');

-- --------------------------------------------------------

--
-- Struktur dari tabel `users`
--

CREATE TABLE `users` (
  `id_user` char(36) NOT NULL,
  `nama_user` varchar(30) NOT NULL,
  `vsusername` varchar(25) NOT NULL,
  `vspassword` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `users`
--

INSERT INTO `users` (`id_user`, `nama_user`, `vsusername`, `vspassword`) VALUES
('a66d2758-0ff6-11ea-b8a7-10e7c61c3ba1', 'jojoh', 'jojoh', '2b6dfd534e471509c448d719517a63bf'),
('d68a0bf5-0ff7-11ea-b8a7-10e7c61c3ba1', 'kok', 'kok', '6ab7ec99b6aa105aeab1acde2019b125'),
('d95b930e-101a-11ea-b72c-10e7c61c3ba1', 'loh', 'loh', '3ff1ea09b981d88e7c8752b329a7702e'),
('e0802ab9-1017-11ea-b72c-10e7c61c3ba1', 'loh', 'loh', '3ff1ea09b981d88e7c8752b329a7702e'),
('e81ba11d-0f38-11ea-be4e-10e7c61c3ba1', 'open', 'ojan', '57551cb51d38c51417f5abfeacfb9b13');

--
-- Indexes for dumped tables
--

--
-- Indeks untuk tabel `tb_guru`
--
ALTER TABLE `tb_guru`
  ADD PRIMARY KEY (`id_guru`);

--
-- Indeks untuk tabel `tb_kelas`
--
ALTER TABLE `tb_kelas`
  ADD PRIMARY KEY (`id_kelas`);

--
-- Indeks untuk tabel `tb_siswa`
--
ALTER TABLE `tb_siswa`
  ADD PRIMARY KEY (`id_siswa`);

--
-- Indeks untuk tabel `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id_user`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
