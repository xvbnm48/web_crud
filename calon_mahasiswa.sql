-- phpMyAdmin SQL Dump
-- version 5.0.2
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Waktu pembuatan: 26 Feb 2021 pada 16.23
-- Versi server: 10.4.13-MariaDB
-- Versi PHP: 7.4.8

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `penerimaan_mahasiswa`
--

-- --------------------------------------------------------

--
-- Struktur dari tabel `calon_mahasiswa`
--

CREATE TABLE `calon_mahasiswa` (
  `id` int(11) NOT NULL,
  `nama` varchar(64) NOT NULL,
  `alamat` varchar(255) NOT NULL,
  `jenis_kelamin` varchar(16) NOT NULL,
  `agama` varchar(16) NOT NULL,
  `sekolah_asal` varchar(64) NOT NULL,
  `jurusan` varchar(50) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `calon_mahasiswa`
--

INSERT INTO `calon_mahasiswa` (`id`, `nama`, `alamat`, `jenis_kelamin`, `agama`, `sekolah_asal`, `jurusan`) VALUES
(4, 'AKARI KITOU', 'japan tokyo', 'perempuan', 'Islam', 'smkn8 palembang', 'teknik komputer'),
(6, 'tanaka miku', 'jepaNG ', 'perempuan', 'Islam', 'smkn8 palembang', 'teknik komputer'),
(8, 'akari kitou', 'jepang tokyo', 'perempuan', 'Islam', 'smkn8 palembang', 'teknik komputer'),
(9, 'AKARI KITOUuuu', 'jepang tokyo', 'laki_laki', 'Kristen', 'smkn8 palembang', 'teknik komputer');

--
-- Indexes for dumped tables
--

--
-- Indeks untuk tabel `calon_mahasiswa`
--
ALTER TABLE `calon_mahasiswa`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT untuk tabel yang dibuang
--

--
-- AUTO_INCREMENT untuk tabel `calon_mahasiswa`
--
ALTER TABLE `calon_mahasiswa`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
