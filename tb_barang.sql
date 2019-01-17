-- phpMyAdmin SQL Dump
-- version 3.5.2.2
-- http://www.phpmyadmin.net
--
-- Inang: 127.0.0.1
-- Waktu pembuatan: 17 Jan 2019 pada 07.00
-- Versi Server: 5.5.27
-- Versi PHP: 5.4.7

SET SQL_MODE="NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Basis data: `db_barang`
--

-- --------------------------------------------------------

--
-- Struktur dari tabel `tb_barang`
--

CREATE TABLE IF NOT EXISTS `tb_barang` (
  `Id` int(11) NOT NULL AUTO_INCREMENT,
  `Kode` varchar(8) NOT NULL,
  `Nama` varchar(50) NOT NULL,
  `Deskripsi` text NOT NULL,
  `Stok` double(5,2) NOT NULL,
  `Harga` double(12,2) NOT NULL,
  `Berat` double(5,2) NOT NULL,
  PRIMARY KEY (`Id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=6 ;

--
-- Dumping data untuk tabel `tb_barang`
--

INSERT INTO `tb_barang` (`Id`, `Kode`, `Nama`, `Deskripsi`, `Stok`, `Harga`, `Berat`) VALUES
(4, '002', 'Buku', 'Novel', 10.00, 50000.00, 100.00),
(5, '001', 'Pensil WARNA', 'Warn', 10.00, 1000.00, 10.00);

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
