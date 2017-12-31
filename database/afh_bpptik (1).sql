-- phpMyAdmin SQL Dump
-- version 4.1.12
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: Jul 12, 2017 at 04:44 AM
-- Server version: 5.6.16
-- PHP Version: 5.5.11

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `afh_bpptik`
--

-- --------------------------------------------------------

--
-- Table structure for table `afh_databuku`
--

CREATE TABLE IF NOT EXISTS `afh_databuku` (
  `kode_buku` varchar(25) NOT NULL,
  `judul_buku` varchar(100) NOT NULL,
  `pengarang` varchar(150) NOT NULL,
  `penerbit` varchar(200) NOT NULL,
  `tahun_terbit` int(4) NOT NULL,
  `harga` int(10) NOT NULL,
  PRIMARY KEY (`kode_buku`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `afh_databuku`
--

INSERT INTO `afh_databuku` (`kode_buku`, `judul_buku`, `pengarang`, `penerbit`, `tahun_terbit`, `harga`) VALUES
('1A2B', 'Cara membuat web part 2', 'Yoyy', 'Ase', 2013, 2500),
('1A2E', 'Kaskus Yuk', 'Kas', 'Kus', 2016, 3000),
('1A2F', 'Cara Membuat Robot', 'Naruto', 'Uzumaki', 2016, 40000),
('1A2G', 'Cara membuat kue', 'Koh', 'Koi', 2015, 29000),
('1A2X', 'Cara membenarkan Handphone', 'Andrean', 'Cecep', 2011, 5000),
('1A2Z', 'Cara Membuat Aplikasi Android', 'Jojo', 'Jeje', 2012, 80000);

-- --------------------------------------------------------

--
-- Table structure for table `afh_pemesanan`
--

CREATE TABLE IF NOT EXISTS `afh_pemesanan` (
  `kode_pesanan` int(11) NOT NULL AUTO_INCREMENT,
  `tgl_pemesan` text NOT NULL,
  `email_pemesan` varchar(250) NOT NULL,
  `kode_buku` varchar(250) NOT NULL,
  `jumlah_pesanan` int(11) NOT NULL,
  `keterangan` text NOT NULL,
  `kode_bayar` int(11) NOT NULL,
  PRIMARY KEY (`kode_pesanan`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=15 ;

--
-- Dumping data for table `afh_pemesanan`
--

INSERT INTO `afh_pemesanan` (`kode_pesanan`, `tgl_pemesan`, `email_pemesan`, `kode_buku`, `jumlah_pesanan`, `keterangan`, `kode_bayar`) VALUES
(1, '1970-01-01', 'anggafantiya@gmail.com', '1A2B', 20, 'belum bayar', 1),
(2, '1970-01-01', 'Kirito@gmail.com', '1A2E', 10, 'belum bayar', 1),
(3, '1970-01-01', 'uzumaki@gmail.com', '1A2F', 20, 'belum bayar', 1),
(4, '1970-01-01', 'Andre@gmail.com', '1A2Z', 15, 'belum bayar', 1),
(5, '1970-01-01', 'ahad@gmail.com', '1A2G', 12, 'belum bayar', 1),
(6, '1970-01-01', 'Kagawa@gmail.com', '1A2G', 10, 'belum bayar', 1),
(7, '1970-01-01', 'dadang@gmail.com', '1A2Z', 11, 'belum bayar', 1),
(8, '1970-01-01', 'as@gmail.com', '1A2F', 11, 'belum bayar', 1),
(9, '1970-01-01', 'tes@tes.cco', '1A2B', 2, 'belum bayar', 1),
(10, '1970-01-01', 'tes@tes.cco', '1A2B', 2, 'belum bayar', 1),
(11, '1970-01-01', 'kiki@gmail.com', '1A2G', 20, 'belum bayar', 1),
(12, '1970-01-01', 'kiki@gmail.com', '1A2G', 20, 'belum bayar', 1),
(13, '1970-01-01', 'tesaja@gmail.com', '1A2E', 25, 'belum bayar', 1),
(14, '1970-01-01', 'anggafantiya@gmail.com', '1A2G', 20, 'belum bayar', 1);

-- --------------------------------------------------------

--
-- Table structure for table `afh_user`
--

CREATE TABLE IF NOT EXISTS `afh_user` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `username` varchar(100) NOT NULL,
  `password` varchar(100) NOT NULL,
  `role` int(1) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=2 ;

--
-- Dumping data for table `afh_user`
--

INSERT INTO `afh_user` (`id`, `username`, `password`, `role`) VALUES
(1, 'admin', '21232f297a57a5a743894a0e4a801fc3', 1);

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
