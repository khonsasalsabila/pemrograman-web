-- phpMyAdmin SQL Dump
-- version 4.8.5
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Waktu pembuatan: 28 Okt 2020 pada 09.45
-- Versi server: 10.1.38-MariaDB
-- Versi PHP: 7.3.3

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `profile`
--

-- --------------------------------------------------------

--
-- Struktur dari tabel `abilities`
--

CREATE TABLE `abilities` (
  `leadership` varchar(20) NOT NULL,
  `publicspeaking` varchar(20) NOT NULL,
  `teamwork` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `abilities`
--

INSERT INTO `abilities` (`leadership`, `publicspeaking`, `teamwork`) VALUES
('Leadership', 'Public Speaking', 'Teamwork');

-- --------------------------------------------------------

--
-- Struktur dari tabel `contacts`
--

CREATE TABLE `contacts` (
  `phone` varchar(20) NOT NULL,
  `gmail` varchar(40) NOT NULL,
  `alamat` varchar(200) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `contacts`
--

INSERT INTO `contacts` (`phone`, `gmail`, `alamat`) VALUES
('082331574790', 'salsabilakhonsa043@gmail.com', 'Tuntang street, number 34, Madiun');

-- --------------------------------------------------------

--
-- Struktur dari tabel `education`
--

CREATE TABLE `education` (
  `nama_sd` varchar(30) NOT NULL,
  `tahun_sd` varchar(20) NOT NULL,
  `nama_smp` varchar(30) NOT NULL,
  `tahun_smp` varchar(20) NOT NULL,
  `nama_sma` varchar(30) NOT NULL,
  `tahun_sma` varchar(20) NOT NULL,
  `nama_univ` varchar(30) NOT NULL,
  `tahun_univ` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `education`
--

INSERT INTO `education` (`nama_sd`, `tahun_sd`, `nama_smp`, `tahun_smp`, `nama_sma`, `tahun_sma`, `nama_univ`, `tahun_univ`) VALUES
('SDN 02 PANDEAN', '(2006-2012)', 'SMPN 07 MADIUN', '(2012-2015)', 'SMAN 06 MADIUN', '(2015-2018)', 'UPN \"Veteran\" Jatim', '(2018-Now)');

-- --------------------------------------------------------

--
-- Struktur dari tabel `hobby`
--

CREATE TABLE `hobby` (
  `book` varchar(20) NOT NULL,
  `movie` varchar(20) NOT NULL,
  `music` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `hobby`
--

INSERT INTO `hobby` (`book`, `movie`, `music`) VALUES
('Reading Book', 'Watching Movie', 'Listening Music');

-- --------------------------------------------------------

--
-- Struktur dari tabel `sosmed`
--

CREATE TABLE `sosmed` (
  `instagram` varchar(20) NOT NULL,
  `twitter` varchar(20) NOT NULL,
  `line` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `sosmed`
--

INSERT INTO `sosmed` (`instagram`, `twitter`, `line`) VALUES
('@salsabila.khns', '@salsabilakhns99', '@khonsa99');
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
