-- phpMyAdmin SQL Dump
-- version 3.5.2.2
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: Jan 15, 2015 at 06:51 AM
-- Server version: 5.5.27
-- PHP Version: 5.4.7

SET SQL_MODE="NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `ecommerce`
--

-- --------------------------------------------------------

--
-- Table structure for table `barang`
--

CREATE TABLE IF NOT EXISTS `barang` (
  `idbarang` int(11) NOT NULL,
  `nama` varchar(30) NOT NULL,
  `idkategori` int(11) NOT NULL,
  `keterangan` text NOT NULL,
  `file_gambar` varchar(100) NOT NULL,
  `tampil` int(11) NOT NULL,
  `harga` int(11) NOT NULL,
  `berat` int(11) NOT NULL,
  `stok` int(11) NOT NULL,
  `tgl_insert` datetime NOT NULL,
  `tgl_update` datetime NOT NULL,
  PRIMARY KEY (`idbarang`),
  KEY `idkategori` (`idkategori`),
  KEY `idkategori_2` (`idkategori`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `barang`
--

INSERT INTO `barang` (`idbarang`, `nama`, `idkategori`, `keterangan`, `file_gambar`, `tampil`, `harga`, `berat`, `stok`, `tgl_insert`, `tgl_update`) VALUES
(101001, 'JersiClothing TShirt Distro Th', 101, 'Sporty, Trendy & Casual\r\nNyaman dipakai dan tidak panas\r\n100% Cotton Combed 24''s \r\nVelvet/Flock Print\r\nCustom-Made', 'gambar/101001.jpg', 0, 95000, 1, 50, '2015-01-15 00:00:00', '2015-01-15 00:00:00'),
(101002, 'JersiClothing TShirt Distro Go', 101, 'Sporty, Trendy & Casual\r\nNyaman dipakai dan tidak panas\r\nBahan kaos Cotton Combed 24''s \r\nDesain dicetak dengan bahan polyflex timbul\r\nGratis Biaya Kirim Jabodetabek', 'gambar/101002.jpg', 0, 80000, 1, 20, '2015-01-15 00:00:00', '2015-01-15 00:00:00'),
(101003, 'Elfs Shop Vneck Spiderman List', 101, 'Sablon Unik\r\nNyaman dikenakan\r\nHarga terjangkau\r\n', 'gambar/101003.jpg', 0, 90000, 1, 10, '2015-01-15 00:00:00', '2015-01-15 00:00:00'),
(101004, 'Bloop Tshirt MG Misty', 101, 'Bahan Cotton\r\nSablon SW\r\nWarna Misty\r\nTidak Luntur', 'gambar/101004.jpg', 0, 80000, 1, 10, '2015-01-15 00:00:00', '2015-01-15 00:00:00'),
(101005, 'JersiClothing Custom TShirt ST', 101, 'Sporty, Trendy & Casual\r\nNyaman dipakai dan tidak panas\r\n100% Cotton Combed 24''s \r\nPolyflex printing\r\nHigh Quality Custom-Made', 'gambar/101005.jpg', 0, 90000, 1, 20, '2015-01-15 00:00:00', '2015-01-15 00:00:00'),
(102003, 'Elfs Shop Kemeja Formal Slim F', 102, 'bahan tidak lecek\r\nbahan awet dan tahan lama\r\nslimfit sehingga pas digunakan', 'gambar/102003.jpg', 0, 320000, 1, 32, '2015-01-15 00:00:00', '2015-01-15 00:00:00'),
(102004, 'Elfs Shop Kemeja Fashion slimf', 102, 'Model Fashion Terbaru\r\nUkuran Slimfit\r\nBahan Nyaman Digunakan', 'gambar/102004.jpg', 0, 280000, 1, 14, '2015-01-15 00:00:00', '2015-01-15 00:00:00'),
(102005, 'Elfs Shop Kemeja Fashion slimf', 102, 'Model Fashion Terbaru\r\nUkuran Slimfit\r\nBahan Nyaman Digunakan', 'gambar/102005.jpg', 0, 300000, 1, 24, '2015-01-15 00:00:00', '2015-01-15 00:00:00'),
(102006, 'Elfs Shop Kemeja Formal Slim F', 102, 'bahan tidak lecek\r\nbahan awet dan tahan lama\r\nslimfit sehingga pas digunakan', 'gambar/102006.jpg', 0, 254000, 1, 45, '2015-01-15 00:00:00', '2015-01-15 00:00:00'),
(102007, 'Salt and Pepper Kemeja Tangan ', 102, 'Kemeja tangan pendek\r\nDua kancing pada kerah\r\nBahan katun\r\nKancing depan\r\nAksen kantung', 'gambar/102007.jpg', 0, 426000, 1, 23, '2015-01-15 00:00:00', '2015-01-15 00:00:00'),
(103001, '2nd RED Jeans SlimFit 133290 B', 103, 'Bahan Katun Denim Stretch\r\ngramasi 11oz,\r\nteknik cucian memakai spray yang membuat tampilan celana ada gradasi warnanya\r\n5 pocket, jahitan dalam pocket pun rantai\r\nKancing 2nd RED dibuat dari bahan kuningan yang di cor (Die Casting)', 'gambar/103001.jpg', 0, 200000, 1, 10, '2015-01-15 00:00:00', '2015-01-15 00:00:00'),
(103002, '2nd RED Jeans SlimFit 133204 B', 103, 'Bahan Katun Denim Stretch\r\ngramasi 11oz,\r\nteknik cucian memakai spray yang membuat tampilan celana ada gradasi warnanya\r\n5 pocket, jahitan dalam pocket pun rantai', 'gambar/103002.jpg', 0, 280000, 1, 34, '2015-01-15 00:00:00', '2015-01-15 00:00:00'),
(103003, '2nd RED Jeans SlimFit 133212 B', 103, 'Bahan Katun Denim Stretch\r\ngramasi 11oz,\r\nteknik cucian memakai spray\r\n5 pocket, jahitan dalam pocket pun rantai\r\nKancing Die Casting', 'gambar/103003.jpg', 0, 430000, 1, 26, '2015-01-15 00:00:00', '2015-01-15 00:00:00'),
(103004, ' Hurley Chino Original Black', 103, '100% Original\r\nNyaman\r\nEnak di pakai\r\nTrendi dan modern', 'gambar/103004.jpg', 0, 450000, 1, 46, '2015-01-15 00:00:00', '2015-01-15 00:00:00'),
(201001, 'Adore Kemeja Kombinasi Batik P', 201, 'Bahan Cotton stretch \r\nJahitan Rapi\r\nNyaman dikenakan\r\nDesign Trendy\r\n', 'gambar/201001.jpg', 0, 230000, 1, 23, '2015-01-15 00:00:00', '2015-01-15 00:00:00'),
(201002, 'Amala Cita-Dress Bunga Daun Co', 201, 'Bahan Batik Pamekasa\r\nKain BErkualitas\r\nNyaman Digunakan\r\nTidak mudah luntur', 'gambar/201002.jpg', 0, 280000, 1, 23, '2015-01-15 00:00:00', '2015-01-15 00:00:00'),
(202003, 'LZD Open Back Dress', 202, 'Produk lebih kecil 1 ukuran dari UK 8. Lihat panduan ukuran.\r\nModel setinggi 178cm/5'' 10" dan mengenakan ukuran LZD 8 (S)\r\nUkuran LZD berdasarkan pasar Asia.\r\n', 'gambar/202003.jpg', 0, 245000, 1, 56, '2015-01-15 00:00:00', '2015-01-15 00:00:00'),
(202005, 'Lovadova Indonesia Brown-black', 202, 'Tinggi : 178 cm\r\nBerat : 50 kg\r\nLingkar dada : 84 cm\r\nLingkar pinggang : 62 cm\r\nLingkar pinggul : 90 cm', 'gambar/202005.jpg', 0, 321000, 1, 11, '2015-01-15 00:00:00', '2015-01-15 00:00:00'),
(203007, 'Adore Celana Panjang Chino Cre', 203, 'Bahan Stretch\r\nNyaman dikenakan\r\nJahitan rapi\r\nDesign Trendy', 'gambar/203007.jpg', 0, 214000, 1, 14, '2015-01-15 00:00:00', '2015-01-15 00:00:00'),
(203008, 'Adore Celana Panjang Basic Bir', 203, 'Bahan Garbadine\r\nNyaman Dipakai\r\nJahitan Rapi\r\nDesign Trendy\r\n', 'gambar/203008.jpg', 0, 245000, 1, 11, '2015-01-15 00:00:00', '2015-01-15 00:00:00');

-- --------------------------------------------------------

--
-- Table structure for table `detail_penjualan`
--

CREATE TABLE IF NOT EXISTS `detail_penjualan` (
  `nomor` int(11) NOT NULL AUTO_INCREMENT,
  `idpenjualan` varchar(20) NOT NULL,
  `idbarang` int(11) NOT NULL,
  `qty` int(11) NOT NULL,
  `harga` int(11) NOT NULL,
  PRIMARY KEY (`nomor`,`idpenjualan`,`idbarang`),
  KEY `idbarang` (`idbarang`),
  KEY `idpenjualan` (`idpenjualan`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=29 ;

--
-- Dumping data for table `detail_penjualan`
--

INSERT INTO `detail_penjualan` (`nomor`, `idpenjualan`, `idbarang`, `qty`, `harga`) VALUES
(28, '150115063602', 102004, 3, 1680000);

-- --------------------------------------------------------

--
-- Table structure for table `kategori`
--

CREATE TABLE IF NOT EXISTS `kategori` (
  `idkategori` int(11) NOT NULL,
  `nama` varchar(30) NOT NULL,
  `file_gambar` varchar(100) NOT NULL,
  PRIMARY KEY (`idkategori`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `kategori`
--

INSERT INTO `kategori` (`idkategori`, `nama`, `file_gambar`) VALUES
(101, 'Kaos Pria', 'gambar/101001.jpg'),
(102, 'Kemeja Pria', 'gambar/102001.jpg'),
(103, 'Celana Pria', 'gambar/103001.jpg'),
(201, 'Dress Wanita', 'gambar/201001.jpg'),
(202, 'Kaos Wanita', 'gambar/202003.jpg'),
(203, 'Celana Wanita', 'gambar/203001.jpg');

-- --------------------------------------------------------

--
-- Table structure for table `konfirm_pembayaran`
--

CREATE TABLE IF NOT EXISTS `konfirm_pembayaran` (
  `idpenjualan` varchar(20) NOT NULL,
  `nama_bank` int(11) NOT NULL,
  `no_rekening` int(11) NOT NULL,
  `nama` varchar(30) NOT NULL,
  `total_bayar` int(11) NOT NULL,
  `tgl_bayar` int(11) NOT NULL,
  `scan_struk` varchar(30) NOT NULL,
  `verifikasi` int(11) NOT NULL,
  `idpetugas` int(11) DEFAULT NULL,
  PRIMARY KEY (`idpenjualan`),
  KEY `idpetugas` (`idpetugas`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `konfirm_pembayaran`
--

INSERT INTO `konfirm_pembayaran` (`idpenjualan`, `nama_bank`, `no_rekening`, `nama`, `total_bayar`, `tgl_bayar`, `scan_struk`, `verifikasi`, `idpetugas`) VALUES
('150115063602', 0, 908122244, 'eko', 1712000, 15, 'bukti_bayar/150115063602.jpg', 0, NULL);

-- --------------------------------------------------------

--
-- Table structure for table `kota`
--

CREATE TABLE IF NOT EXISTS `kota` (
  `idkota` int(11) NOT NULL,
  `nama` varchar(30) NOT NULL,
  `idprovinsi` int(11) NOT NULL,
  PRIMARY KEY (`idkota`,`idprovinsi`),
  KEY `idprovinsi` (`idprovinsi`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `kota`
--

INSERT INTO `kota` (`idkota`, `nama`, `idprovinsi`) VALUES
(1, 'Jakarta Barat', 1),
(2, 'Jakarta Pusat', 1),
(3, 'Jakarta Selatan', 1),
(4, 'Jakarta Timur', 1),
(5, 'Jakarta Utara', 1),
(6, 'Denpasar', 2),
(7, 'Pangkal Pinang', 3),
(8, 'Cilegon', 4),
(9, 'Serang', 4),
(10, 'Tangerang', 4),
(11, 'Tangerang Selatan', 4),
(12, 'Bengkulu', 5),
(13, 'Yogyakarta', 6),
(14, 'Gorontalo', 7),
(15, 'Jambi', 8),
(16, 'Sungaipenuh', 8),
(17, 'Bandung', 9),
(18, 'Banjar', 9),
(19, 'Bekasi', 9),
(20, 'Bogor', 9),
(21, 'Cimahi', 9),
(22, 'Cirebon', 9),
(23, 'Depok', 9),
(24, 'Sukabumi', 9),
(25, 'Tasikmalaya', 9),
(26, 'Magelang', 10),
(27, 'Pekalongan', 10),
(28, 'Salatiga', 10),
(29, 'Semarang', 10),
(30, 'Surakarta (Solo)', 10),
(31, 'Tegal', 10),
(32, 'Blitar', 11),
(33, 'Kediri', 11),
(34, 'Madiun', 11),
(35, 'Malang', 11),
(36, 'Surabaya', 11),
(37, 'Pontianak', 12),
(38, 'Banjarmasin', 13),
(39, 'Palangka Raya', 14),
(40, 'Balikpapan', 15),
(41, 'Samarinda', 15),
(42, 'Tarakan', 16),
(43, 'Batam', 17),
(44, 'Bandar Lampung', 18),
(45, 'Ambon', 19),
(46, 'Ternate', 20),
(47, 'Banda Aceh', 21),
(48, 'Sabang', 21),
(49, 'Mataram', 22),
(50, 'Kupang', 23),
(51, 'Jayapura', 24),
(52, 'Sorong', 25),
(53, 'Pekanbaru', 26),
(54, 'Polewali Mandar', 27),
(55, 'Makassar', 28),
(56, 'Palu', 29),
(57, 'Kendari', 30),
(58, 'Manado', 31),
(59, 'Padang', 32),
(60, 'Palembang', 33),
(61, 'Medan', 34);

-- --------------------------------------------------------

--
-- Table structure for table `pelanggan`
--

CREATE TABLE IF NOT EXISTS `pelanggan` (
  `idpelanggan` int(11) NOT NULL,
  `nama` varchar(30) NOT NULL,
  `password` varchar(20) NOT NULL,
  `jenis_kelamin` varchar(10) NOT NULL,
  `alamat` varchar(50) NOT NULL,
  `idkota` int(11) NOT NULL,
  `email` varchar(30) NOT NULL,
  `no_telp` varchar(12) NOT NULL,
  PRIMARY KEY (`idpelanggan`,`idkota`),
  KEY `idkota` (`idkota`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `pelanggan`
--

INSERT INTO `pelanggan` (`idpelanggan`, `nama`, `password`, `jenis_kelamin`, `alamat`, `idkota`, `email`, `no_telp`) VALUES
(3413001, 'eko', 'wahyudi', 'L', 'Sleman Yogyakarta', 13, 'eko@wahyudi.com', '085878141675'),
(3417001, 'faqih', 'arifian', 'L', 'Bandung Bandung', 17, 'faqih@arifian.com', '082242345075');

-- --------------------------------------------------------

--
-- Table structure for table `penjualan`
--

CREATE TABLE IF NOT EXISTS `penjualan` (
  `idpenjualan` varchar(20) NOT NULL,
  `idpelanggan` int(11) NOT NULL,
  `tgl_penjualan` date NOT NULL,
  `total_harga` int(11) NOT NULL,
  `total_item` int(11) NOT NULL,
  `total_berat` int(11) NOT NULL,
  `ongkir` int(11) NOT NULL,
  `jenis_pengiriman` varchar(10) NOT NULL,
  `nama_kirim` varchar(20) NOT NULL,
  `alamat_kirim` varchar(50) NOT NULL,
  `idkota_kirim` int(11) NOT NULL,
  PRIMARY KEY (`idpenjualan`),
  KEY `idpelanggan` (`idpelanggan`),
  KEY `jenis_pengiriman` (`jenis_pengiriman`),
  KEY `idkota_kirim` (`idkota_kirim`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `penjualan`
--

INSERT INTO `penjualan` (`idpenjualan`, `idpelanggan`, `tgl_penjualan`, `total_harga`, `total_item`, `total_berat`, `ongkir`, `jenis_pengiriman`, `nama_kirim`, `alamat_kirim`, `idkota_kirim`) VALUES
('150115063602', 3413001, '2015-01-15', 1680000, 3, 3, 32000, 'Regular', 'eko wahyudi', 'gondang', 43);

-- --------------------------------------------------------

--
-- Table structure for table `petugas`
--

CREATE TABLE IF NOT EXISTS `petugas` (
  `idpetugas` int(11) NOT NULL,
  `nama` varchar(30) NOT NULL,
  `pass` varchar(10) NOT NULL,
  PRIMARY KEY (`idpetugas`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `petugas`
--

INSERT INTO `petugas` (`idpetugas`, `nama`, `pass`) VALUES
(901, 'adik', 'istanto'),
(902, 'muhammad', 'ihsan'),
(903, 'berry', 'orindi'),
(904, 'ficky', 'hidayat'),
(905, 'fachry', 'adhya');

-- --------------------------------------------------------

--
-- Table structure for table `provinsi`
--

CREATE TABLE IF NOT EXISTS `provinsi` (
  `idprovinsi` int(11) NOT NULL,
  `nama` varchar(30) NOT NULL,
  PRIMARY KEY (`idprovinsi`),
  KEY `idprovinsi` (`idprovinsi`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `provinsi`
--

INSERT INTO `provinsi` (`idprovinsi`, `nama`) VALUES
(1, 'DKI Jakarta'),
(2, 'Bali'),
(3, 'Bangka Belitung'),
(4, 'Banten'),
(5, 'Bengkulu'),
(6, 'DI Yogyakarta'),
(7, 'Gorontalo'),
(8, 'Jambi'),
(9, 'Jawa Barat'),
(10, 'Jawa Tengah'),
(11, 'Jawa Timur'),
(12, 'Kalimantan Barat'),
(13, 'Kalimantan Selatan'),
(14, 'Kalimantan Tengah'),
(15, 'Kalimantan Timur'),
(16, 'Kalimantan Utara'),
(17, 'Kepulauan Riau'),
(18, 'Lampung'),
(19, 'Maluku'),
(20, 'Maluku Utara'),
(21, 'Nanggroe Aceh Darussalam (NAD)'),
(22, 'Nusa Tenggara Barat (NTB)'),
(23, 'Nusa Tenggara Timur (NTT)'),
(24, 'Papua'),
(25, 'Papua Barat'),
(26, 'Riau'),
(27, 'Sulawesi Barat'),
(28, 'Sulawesi Selatan'),
(29, 'Sulawesi Tengah'),
(30, 'Sulawesi Tenggara'),
(31, 'Sulawesi Utara'),
(32, 'Sumatera Barat'),
(33, 'Sumatera Selatan'),
(34, 'Sumatera Utara');

-- --------------------------------------------------------

--
-- Table structure for table `status`
--

CREATE TABLE IF NOT EXISTS `status` (
  `idstatus` int(11) NOT NULL,
  `nama` varchar(30) NOT NULL,
  PRIMARY KEY (`idstatus`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `status`
--

INSERT INTO `status` (`idstatus`, `nama`) VALUES
(0, 'Belum Bayar'),
(1, 'Menunggu Verifikasi'),
(2, 'Dikirim');

-- --------------------------------------------------------

--
-- Table structure for table `status_penjualan`
--

CREATE TABLE IF NOT EXISTS `status_penjualan` (
  `idpenjualan` varchar(20) NOT NULL,
  `idstatus` int(11) NOT NULL,
  `tgl_update` datetime NOT NULL,
  `idpetugas` int(11) DEFAULT NULL,
  PRIMARY KEY (`idpenjualan`),
  KEY `idpetugas` (`idpetugas`),
  KEY `idstatus` (`idstatus`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `status_penjualan`
--

INSERT INTO `status_penjualan` (`idpenjualan`, `idstatus`, `tgl_update`, `idpetugas`) VALUES
('150115063602', 1, '2015-01-15 00:00:00', NULL);

-- --------------------------------------------------------

--
-- Table structure for table `tarif_ongkir`
--

CREATE TABLE IF NOT EXISTS `tarif_ongkir` (
  `idkota_tujuan` int(11) NOT NULL,
  `jenis_pengiriman` varchar(10) NOT NULL,
  `harga` int(11) NOT NULL,
  PRIMARY KEY (`idkota_tujuan`,`jenis_pengiriman`),
  KEY `jenis_pengiriman` (`jenis_pengiriman`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tarif_ongkir`
--

INSERT INTO `tarif_ongkir` (`idkota_tujuan`, `jenis_pengiriman`, `harga`) VALUES
(1, 'Express', 21000),
(1, 'Regular', 14000),
(2, 'Express', 21000),
(2, 'Regular', 14000),
(3, 'Express', 21000),
(3, 'Regular', 14000),
(4, 'Express', 21000),
(4, 'Regular', 14000),
(5, 'Express', 21000),
(5, 'Regular', 14000),
(6, 'Express', 19500),
(6, 'Regular', 13000),
(7, 'Express', 45000),
(7, 'Regular', 30000),
(8, 'Express', 24000),
(8, 'Regular', 16000),
(9, 'Express', 24000),
(9, 'Regular', 16000),
(10, 'Express', 24000),
(10, 'Regular', 16000),
(11, 'Express', 24000),
(11, 'Regular', 16000),
(12, 'Express', 45000),
(12, 'Regular', 30000),
(13, 'Express', 15000),
(13, 'Regular', 10000),
(14, 'Express', 75000),
(14, 'Regular', 50000),
(15, 'Express', 39000),
(15, 'Regular', 26000),
(16, 'Express', 39000),
(16, 'Regular', 26000),
(17, 'Express', 24000),
(17, 'Regular', 16000),
(18, 'Express', 24000),
(18, 'Regular', 16000),
(19, 'Express', 24000),
(19, 'Regular', 16000),
(20, 'Express', 24000),
(20, 'Regular', 16000),
(21, 'Express', 24000),
(21, 'Regular', 16000),
(22, 'Express', 24000),
(22, 'Regular', 16000),
(23, 'Express', 24000),
(23, 'Regular', 16000),
(24, 'Express', 24000),
(24, 'Regular', 16000),
(25, 'Express', 24000),
(25, 'Regular', 16000),
(26, 'Express', 18000),
(26, 'Regular', 12000),
(27, 'Express', 18000),
(27, 'Regular', 12000),
(28, 'Express', 15000),
(28, 'Regular', 10000),
(29, 'Express', 10500),
(29, 'Regular', 7000),
(30, 'Express', 15000),
(30, 'Regular', 10000),
(31, 'Express', 18000),
(31, 'Regular', 12000),
(32, 'Express', 22500),
(32, 'Regular', 15000),
(33, 'Express', 22500),
(33, 'Regular', 15000),
(34, 'Express', 22500),
(34, 'Regular', 15000),
(35, 'Express', 22500),
(35, 'Regular', 15000),
(36, 'Express', 22500),
(36, 'Regular', 15000),
(37, 'Express', 45000),
(37, 'Regular', 30000),
(38, 'Express', 42000),
(38, 'Regular', 28000),
(39, 'Express', 51000),
(39, 'Regular', 34000),
(40, 'Express', 45000),
(40, 'Regular', 30000),
(41, 'Express', 48000),
(41, 'Regular', 32000),
(42, 'Express', 69000),
(42, 'Regular', 46000),
(43, 'Express', 48000),
(43, 'Regular', 32000),
(44, 'Express', 37500),
(44, 'Regular', 25000),
(45, 'Express', 75000),
(45, 'Regular', 50000),
(46, 'Express', 82500),
(46, 'Regular', 55000),
(47, 'Express', 60000),
(47, 'Regular', 40000),
(48, 'Express', 67500),
(48, 'Regular', 45000),
(49, 'Express', 37500),
(49, 'Regular', 25000),
(50, 'Express', 67500),
(50, 'Regular', 45000),
(51, 'Express', 127500),
(51, 'Regular', 85000),
(52, 'Express', 135000),
(52, 'Regular', 90000),
(53, 'Express', 45000),
(53, 'Regular', 30000),
(54, 'Express', 72000),
(54, 'Regular', 48000),
(55, 'Express', 67500),
(55, 'Regular', 45000),
(56, 'Express', 67500),
(56, 'Regular', 45000),
(57, 'Express', 67500),
(57, 'Regular', 45000),
(58, 'Express', 72000),
(58, 'Regular', 48000),
(59, 'Express', 45000),
(59, 'Regular', 30000),
(60, 'Express', 40500),
(60, 'Regular', 27000),
(61, 'Express', 42500),
(61, 'Regular', 35000);

--
-- Constraints for dumped tables
--

--
-- Constraints for table `barang`
--
ALTER TABLE `barang`
  ADD CONSTRAINT `barang_ibfk_1` FOREIGN KEY (`idkategori`) REFERENCES `kategori` (`idkategori`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `detail_penjualan`
--
ALTER TABLE `detail_penjualan`
  ADD CONSTRAINT `detail_penjualan_ibfk_1` FOREIGN KEY (`idbarang`) REFERENCES `barang` (`idbarang`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `konfirm_pembayaran`
--
ALTER TABLE `konfirm_pembayaran`
  ADD CONSTRAINT `konfirm_pembayaran_ibfk_2` FOREIGN KEY (`idpenjualan`) REFERENCES `penjualan` (`idpenjualan`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `konfirm_pembayaran_ibfk_3` FOREIGN KEY (`idpetugas`) REFERENCES `petugas` (`idpetugas`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `kota`
--
ALTER TABLE `kota`
  ADD CONSTRAINT `kota_ibfk_1` FOREIGN KEY (`idprovinsi`) REFERENCES `provinsi` (`idprovinsi`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `pelanggan`
--
ALTER TABLE `pelanggan`
  ADD CONSTRAINT `pelanggan_ibfk_1` FOREIGN KEY (`idkota`) REFERENCES `kota` (`idkota`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `penjualan`
--
ALTER TABLE `penjualan`
  ADD CONSTRAINT `penjualan_ibfk_2` FOREIGN KEY (`idkota_kirim`) REFERENCES `kota` (`idkota`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `penjualan_ibfk_4` FOREIGN KEY (`idpenjualan`) REFERENCES `detail_penjualan` (`idpenjualan`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `penjualan_ibfk_5` FOREIGN KEY (`idpelanggan`) REFERENCES `pelanggan` (`idpelanggan`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `penjualan_ibfk_6` FOREIGN KEY (`jenis_pengiriman`) REFERENCES `tarif_ongkir` (`jenis_pengiriman`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `status_penjualan`
--
ALTER TABLE `status_penjualan`
  ADD CONSTRAINT `status_penjualan_ibfk_4` FOREIGN KEY (`idpenjualan`) REFERENCES `penjualan` (`idpenjualan`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `status_penjualan_ibfk_5` FOREIGN KEY (`idstatus`) REFERENCES `status` (`idstatus`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `status_penjualan_ibfk_6` FOREIGN KEY (`idpetugas`) REFERENCES `petugas` (`idpetugas`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `tarif_ongkir`
--
ALTER TABLE `tarif_ongkir`
  ADD CONSTRAINT `tarif_ongkir_ibfk_3` FOREIGN KEY (`idkota_tujuan`) REFERENCES `kota` (`idkota`) ON DELETE CASCADE ON UPDATE CASCADE;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
