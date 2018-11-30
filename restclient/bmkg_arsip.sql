-- phpMyAdmin SQL Dump
-- version 4.7.7
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Waktu pembuatan: 30 Nov 2018 pada 05.22
-- Versi server: 10.1.30-MariaDB
-- Versi PHP: 7.2.2

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `bmkg_arsip`
--

-- --------------------------------------------------------

--
-- Struktur dari tabel `surat_keluar`
--

CREATE TABLE `surat_keluar` (
  `no_agenda` int(10) NOT NULL,
  `tgl_surat` date NOT NULL,
  `kode_arsip` varchar(255) NOT NULL,
  `no_surat` int(20) NOT NULL,
  `tujuan` varchar(255) NOT NULL,
  `perihal` varchar(255) NOT NULL,
  `asli_copy` varchar(255) NOT NULL,
  `ket` varchar(255) NOT NULL,
  `sf_surat` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Struktur dari tabel `surat_masuk`
--

CREATE TABLE `surat_masuk` (
  `no_agenda` int(10) NOT NULL,
  `tgl_terima` date NOT NULL,
  `kd_arsip` varchar(255) NOT NULL,
  `no_surat` int(20) NOT NULL,
  `tgl_surat` date NOT NULL,
  `pengirim` varchar(255) NOT NULL,
  `perihal` varchar(255) NOT NULL,
  `lampiran` varchar(255) NOT NULL,
  `sifat_surat` varchar(255) NOT NULL,
  `pejabat_disposisi` varchar(255) NOT NULL,
  `tu` varchar(255) NOT NULL,
  `kapokdatin` varchar(255) NOT NULL,
  `kapokobs` varchar(255) NOT NULL,
  `kapokforcaster` varchar(255) NOT NULL,
  `kapokteknisi` varchar(255) NOT NULL,
  `ppk` varchar(255) NOT NULL,
  `bendahara_terima` varchar(255) NOT NULL,
  `bendahara_keluar` varchar(255) NOT NULL,
  `ppabp` varchar(255) NOT NULL,
  `saiba` varchar(255) NOT NULL,
  `bmn` varchar(255) NOT NULL,
  `asli_copy` varchar(255) NOT NULL,
  `info_dispo` varchar(255) NOT NULL,
  `sf_surat` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
