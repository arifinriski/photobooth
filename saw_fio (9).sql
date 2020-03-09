-- phpMyAdmin SQL Dump
-- version 4.8.2
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Mar 10, 2020 at 12:20 AM
-- Server version: 10.1.34-MariaDB
-- PHP Version: 5.6.37

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `saw_fio`
--

-- --------------------------------------------------------

--
-- Table structure for table `bobot_harga`
--

CREATE TABLE `bobot_harga` (
  `id` int(11) NOT NULL,
  `id_tema` int(11) NOT NULL,
  `sangatmahal` double NOT NULL,
  `mahal` double NOT NULL,
  `sedang` double NOT NULL,
  `murah` double NOT NULL,
  `sangatmurah` double NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `bobot_layanan`
--

CREATE TABLE `bobot_layanan` (
  `id` int(11) NOT NULL,
  `id_tema` int(11) NOT NULL,
  `sangatbaik` double NOT NULL,
  `baik` double NOT NULL,
  `cukupbaik` double NOT NULL,
  `kurangbaik` double NOT NULL,
  `tidakbaik` double NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `customer`
--

CREATE TABLE `customer` (
  `id_customer` int(11) NOT NULL,
  `nama_customer` varchar(30) NOT NULL,
  `email` varchar(30) NOT NULL,
  `telepon` varchar(13) NOT NULL,
  `username` varchar(15) NOT NULL,
  `password` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `customer`
--

INSERT INTO `customer` (`id_customer`, `nama_customer`, `email`, `telepon`, `username`, `password`) VALUES
(1, 'Ayuni Refly', 'ayunirefly@gmail.com', '087877654328', 'ayunirefly', '5cec175b165e3d5e62c9e13ce848ef6feac81bff'),
(2, 'Oki Saputra', 'okisaputra@gmail.com', '0813155678543', 'okisaputra', '5cec175b165e3d5e62c9e13ce848ef6feac81bff'),
(3, 'Dewi Atika', 'dewiatika12@gmail.com', '087877543819', 'dewiatika', '5cec175b165e3d5e62c9e13ce848ef6feac81bff'),
(4, 'Diana Silfia', 'dianasilfia@gmail.com', '08788656312', 'dianasilfia', '5cec175b165e3d5e62c9e13ce848ef6feac81bff'),
(5, 'Tio Sadewo', 'tiosadewo@gmail.com', '08966548371', 'tiosadewo', '5cec175b165e3d5e62c9e13ce848ef6feac81bff');

-- --------------------------------------------------------

--
-- Table structure for table `hasil`
--

CREATE TABLE `hasil` (
  `id_hasil` int(11) NOT NULL,
  `hitung` float NOT NULL,
  `nama` varchar(30) NOT NULL,
  `bulan` varchar(30) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `hasil`
--

INSERT INTO `hasil` (`id_hasil`, `hitung`, `nama`, `bulan`) VALUES
(128, 0.68, 'Halloween', 'February'),
(127, 0.81, 'Kids', 'February'),
(126, 0.75, 'Vintage', 'February'),
(125, 0.85, 'Abstract', 'February'),
(124, 0.74, 'Christmas', 'February');

-- --------------------------------------------------------

--
-- Table structure for table `jenis_desain`
--

CREATE TABLE `jenis_desain` (
  `id_jenis` int(11) NOT NULL,
  `nama` varchar(30) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `jenis_desain`
--

INSERT INTO `jenis_desain` (`id_jenis`, `nama`) VALUES
(1, 'Wedding Desain'),
(2, 'Graduation Desain'),
(3, 'Gathering Desain'),
(4, 'Birthday Party Desain');

-- --------------------------------------------------------

--
-- Table structure for table `kriteria`
--

CREATE TABLE `kriteria` (
  `id_kriteria` int(11) NOT NULL,
  `id_user` int(11) NOT NULL,
  `kriteria` varchar(20) NOT NULL,
  `bobot` float NOT NULL,
  `nilai_atribut` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `kriteria`
--

INSERT INTO `kriteria` (`id_kriteria`, `id_user`, `kriteria`, `bobot`, `nilai_atribut`) VALUES
(1, 0, 'Harga', 0.25, 'Biaya'),
(2, 0, 'Kebutuhan ', 0.15, 'Keuntungan'),
(3, 0, 'Mutu', 0.3, 'Biaya'),
(4, 0, 'Layanan', 0.25, 'Biaya'),
(5, 0, 'Waktu', 0.05, 'Keuntungan');

-- --------------------------------------------------------

--
-- Table structure for table `order_desain`
--

CREATE TABLE `order_desain` (
  `id` int(11) NOT NULL,
  `id_customer` int(11) NOT NULL,
  `id_tema` int(11) NOT NULL,
  `id_jenis` int(11) NOT NULL,
  `id_ukuran` int(11) NOT NULL,
  `deskripsi` text NOT NULL,
  `tanggal_event` date NOT NULL,
  `lokasi_event` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `order_desain`
--

INSERT INTO `order_desain` (`id`, `id_customer`, `id_tema`, `id_jenis`, `id_ukuran`, `deskripsi`, `tanggal_event`, `lokasi_event`) VALUES
(1, 1, 1, 1, 1, 'Cream dan Putih', '2019-11-30', 'Jl. Tebet Barat Dalam Jakarta Selatan'),
(2, 2, 2, 2, 2, 'Biru', '2019-12-01', 'Jl. Pondok Ungu Permai Kaliabang, Bekasi Utara'),
(3, 3, 3, 1, 1, 'Hitam dan Putih', '2019-12-03', 'Jl. H. Naman Pondok Kelapa'),
(4, 4, 4, 4, 3, 'Oren dan Hitam', '2019-12-07', 'Jl. Otista Raya Kp. Melayu'),
(5, 5, 5, 2, 2, 'Merah dan Putih', '2019-12-25', 'Jl. Basuki Rahmat '),
(6, 0, 2, 1, 3, 'sadasa', '2019-11-13', 'Jl. Bendungan Hilir 56'),
(7, 0, 2, 2, 2, 'Hijau dan Kuning', '2019-11-14', 'Jl. Bintara 5 Kp. Setu'),
(8, 0, 3, 2, 3, 'Hijau dan Kuning', '2019-11-29', 'Jl. Bendungan Hilir 56'),
(9, 0, 1, 3, 2, 'Pink dan Ungu', '2019-11-22', 'Jl. Biji Kelot Satu'),
(10, 0, 4, 4, 2, 'Biru dan Merah', '2019-11-30', 'Jl. Pisangan  Lama, Klender'),
(11, 8, 4, 3, 1, 'Putih dan Oren', '2019-11-28', 'Jl. Biji Nangka'),
(12, 9, 1, 1, 2, 'Hijau dan Kuning', '2020-03-07', 'Pondok Labu');

-- --------------------------------------------------------

--
-- Table structure for table `saw_hasil`
--

CREATE TABLE `saw_hasil` (
  `id_tema` int(11) NOT NULL,
  `id_kriteria` int(11) NOT NULL,
  `nilai` float NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `saw_hasil`
--

INSERT INTO `saw_hasil` (`id_tema`, `id_kriteria`, `nilai`) VALUES
(2, 1, 40),
(2, 2, 30),
(2, 3, 40),
(2, 4, 50),
(2, 5, 50),
(3, 1, 30),
(3, 2, 55),
(3, 3, 65),
(3, 4, 45),
(3, 5, 50),
(4, 1, 65),
(4, 2, 48),
(4, 3, 60),
(4, 4, 50),
(5, 5, 40),
(5, 1, 65),
(5, 2, 55),
(5, 3, 45),
(5, 4, 65),
(5, 5, 55),
(4, 5, 40),
(1, 1, 50),
(1, 2, 60),
(1, 3, 50),
(1, 4, 60),
(1, 5, 50);

-- --------------------------------------------------------

--
-- Table structure for table `subkriteria`
--

CREATE TABLE `subkriteria` (
  `idSubKriteria` int(11) NOT NULL,
  `subKriteria` varchar(50) NOT NULL,
  `value` int(11) NOT NULL,
  `id_kriteria` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `subkriteria`
--

INSERT INTO `subkriteria` (`idSubKriteria`, `subKriteria`, `value`, `id_kriteria`) VALUES
(1, 'tidak memadai', 1, 3),
(2, 'kurang memadai', 2, 3),
(3, 'cukup memadai', 3, 3),
(4, 'memadai', 4, 3),
(5, 'sangat memadai', 5, 3),
(11, 'sangat mahal', 1, 5),
(12, 'mahal', 2, 5),
(13, 'sedang', 3, 5),
(14, 'murah', 4, 5),
(15, 'sangat murah', 5, 5),
(16, 'tidak kompeten', 1, 6),
(17, 'kurang kompeten', 2, 6),
(18, 'cukup kompeten', 3, 6),
(19, 'kompeten', 4, 6),
(20, 'sangat kompeten', 5, 6),
(21, 'tidak unggul', 1, 7),
(22, 'kurang unggul', 2, 7),
(23, 'cukup unggul', 3, 7),
(24, 'unggul', 4, 7),
(25, 'sangat unggul', 5, 7),
(26, 'sangat rendah', 1, 8),
(27, 'rendah', 2, 8),
(28, 'cukup', 3, 8),
(29, 'tinggi', 4, 8),
(30, 'sangat tinggi', 5, 8);

-- --------------------------------------------------------

--
-- Table structure for table `tema`
--

CREATE TABLE `tema` (
  `id` int(11) NOT NULL,
  `nama` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `tema_desain`
--

CREATE TABLE `tema_desain` (
  `id_tema` int(11) NOT NULL,
  `nama` varchar(50) NOT NULL,
  `harga` double NOT NULL,
  `gambar` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tema_desain`
--

INSERT INTO `tema_desain` (`id_tema`, `nama`, `harga`, `gambar`) VALUES
(1, 'Vintage', 1400000, 'vintage.jpg.jpg'),
(2, 'Kids', 1300000, 'BP-Kids.jpg'),
(3, 'Abstract', 1200000, 'slide-a.jpg'),
(4, 'Halloween', 1500000, 'slide-v.jpg'),
(5, 'Christmas', 1600000, 'BP-Christ.jpg');

-- --------------------------------------------------------

--
-- Table structure for table `ukuran`
--

CREATE TABLE `ukuran` (
  `id_ukuran` int(11) NOT NULL,
  `nama` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `ukuran`
--

INSERT INTO `ukuran` (`id_ukuran`, `nama`) VALUES
(1, '20x20cm'),
(2, '30x30cm'),
(3, '40x40cm'),
(4, '50x50cm');

-- --------------------------------------------------------

--
-- Table structure for table `user`
--

CREATE TABLE `user` (
  `id_user` int(11) NOT NULL,
  `nama` varchar(30) NOT NULL,
  `email` varchar(30) NOT NULL,
  `username` varchar(20) NOT NULL,
  `password` varchar(50) NOT NULL,
  `no_telp` varchar(13) NOT NULL,
  `status` varchar(15) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `user`
--

INSERT INTO `user` (`id_user`, `nama`, `email`, `username`, `password`, `no_telp`, `status`) VALUES
(1, 'Nino Razissa Putra', 'ninorzssaptr484@gmail.com', 'ninorazissa', '5cec175b165e3d5e62c9e13ce848ef6feac81bff', '089667323726', 'Admin'),
(2, 'Cindy Aprilia', 'cindyaprl@gmail.com', 'cindyaprl', '5cec175b165e3d5e62c9e13ce848ef6feac81bff', '08131668904', 'Admin'),
(3, 'Ahmad Fairuz Haikal', 'ahmadfairuz@gmail.com', 'ahmadfairuz', '5cec175b165e3d5e62c9e13ce848ef6feac81bff', '08136790142', 'Direktur');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id_user` int(3) NOT NULL,
  `email` varchar(30) NOT NULL,
  `password` varchar(50) NOT NULL,
  `username` varchar(20) NOT NULL,
  `nama` varchar(50) NOT NULL,
  `no_telp` varchar(13) NOT NULL,
  `level_id` int(20) NOT NULL,
  `status` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id_user`, `email`, `password`, `username`, `nama`, `no_telp`, `level_id`, `status`) VALUES
(1, 'ninorzssaptr484@gmail.com', '5cec175b165e3d5e62c9e13ce848ef6feac81bff', 'ninorazissa', 'Nino Razissa Putra', '089667323726', 0, 'Admin'),
(2, 'cindyaprl@gmail.com', '5cec175b165e3d5e62c9e13ce848ef6feac81bff', 'cindyaprl', 'Cindy Aprilia', '087877651323', 0, 'Admin'),
(3, 'ayunirefly@gmail.com', '5cec175b165e3d5e62c9e13ce848ef6feac81bff', 'ayunirefly', 'Ayuni Refly', '087877654328', 0, 'Customer'),
(7, 'ridhohidayat@gmail.com', '5cec175b165e3d5e62c9e13ce848ef6feac81bff', 'ridho', 'Ridho Hidayat', '089653637262', 2, ''),
(9, 'aliimron@gmail.com', 'fd0326ecde88042582c89d700193ecc4c2123259', 'aliimron', 'Ali Imron', '087886327352', 2, '');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `bobot_harga`
--
ALTER TABLE `bobot_harga`
  ADD PRIMARY KEY (`id`),
  ADD KEY `id_tema` (`id_tema`);

--
-- Indexes for table `bobot_layanan`
--
ALTER TABLE `bobot_layanan`
  ADD PRIMARY KEY (`id`),
  ADD KEY `id_tema` (`id_tema`);

--
-- Indexes for table `customer`
--
ALTER TABLE `customer`
  ADD PRIMARY KEY (`id_customer`);

--
-- Indexes for table `hasil`
--
ALTER TABLE `hasil`
  ADD PRIMARY KEY (`id_hasil`);

--
-- Indexes for table `jenis_desain`
--
ALTER TABLE `jenis_desain`
  ADD PRIMARY KEY (`id_jenis`);

--
-- Indexes for table `kriteria`
--
ALTER TABLE `kriteria`
  ADD PRIMARY KEY (`id_kriteria`);

--
-- Indexes for table `order_desain`
--
ALTER TABLE `order_desain`
  ADD PRIMARY KEY (`id`),
  ADD KEY `id_tema` (`id_tema`),
  ADD KEY `id_jenis` (`id_jenis`);

--
-- Indexes for table `subkriteria`
--
ALTER TABLE `subkriteria`
  ADD PRIMARY KEY (`idSubKriteria`),
  ADD KEY `kdKriteria` (`id_kriteria`);

--
-- Indexes for table `tema`
--
ALTER TABLE `tema`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `tema_desain`
--
ALTER TABLE `tema_desain`
  ADD PRIMARY KEY (`id_tema`);

--
-- Indexes for table `ukuran`
--
ALTER TABLE `ukuran`
  ADD PRIMARY KEY (`id_ukuran`);

--
-- Indexes for table `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`id_user`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id_user`),
  ADD UNIQUE KEY `nama` (`nama`,`email`,`no_telp`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `bobot_harga`
--
ALTER TABLE `bobot_harga`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `bobot_layanan`
--
ALTER TABLE `bobot_layanan`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `customer`
--
ALTER TABLE `customer`
  MODIFY `id_customer` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `hasil`
--
ALTER TABLE `hasil`
  MODIFY `id_hasil` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=129;

--
-- AUTO_INCREMENT for table `jenis_desain`
--
ALTER TABLE `jenis_desain`
  MODIFY `id_jenis` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `kriteria`
--
ALTER TABLE `kriteria`
  MODIFY `id_kriteria` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `order_desain`
--
ALTER TABLE `order_desain`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;

--
-- AUTO_INCREMENT for table `subkriteria`
--
ALTER TABLE `subkriteria`
  MODIFY `idSubKriteria` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=31;

--
-- AUTO_INCREMENT for table `tema`
--
ALTER TABLE `tema`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `tema_desain`
--
ALTER TABLE `tema_desain`
  MODIFY `id_tema` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `ukuran`
--
ALTER TABLE `ukuran`
  MODIFY `id_ukuran` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `user`
--
ALTER TABLE `user`
  MODIFY `id_user` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id_user` int(3) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
