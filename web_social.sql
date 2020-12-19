-- phpMyAdmin SQL Dump
-- version 4.5.1
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: Dec 19, 2020 at 02:11 PM
-- Server version: 10.1.13-MariaDB
-- PHP Version: 5.5.34

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `web_social`
--

-- --------------------------------------------------------

--
-- Table structure for table `post_tb`
--

CREATE TABLE `post_tb` (
  `id_post` int(11) NOT NULL,
  `title` varchar(50) NOT NULL,
  `content` varchar(1000) NOT NULL,
  `image` varchar(40) NOT NULL,
  `id_user` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `post_tb`
--

INSERT INTO `post_tb` (`id_post`, `title`, `content`, `image`, `id_user`) VALUES
(1, 'Subsidi gaji Honorer cair', 'pencairan subisi gaji akan segera cair', 'photo_1.jpg', 1),
(4, 'Total Guru Honorer', '<p>700000 merupakan total dari guru honorer di indonesia</p>\r\n', 'DSC01283.JPG', 1),
(5, 'Ajarkan Kata maaf dan Terimakasih', 'Sandra dewi membagikan tips dalam mendidika anak', 'photo_5.jpg', 1),
(6, 'Syarat Cairkan Subsidi Honorer', 'Kemenag memberikan syarat dalam proses pencairan subsidi', 'photo_6.jpg', 2),
(7, 'Pendidikan Vokasi meminta libatkan DUDI', 'Organisisa pendidikan meminta bantuan DUDI dalam hal', 'photo_7.jpg', 2),
(8, 'Richese Membuka lowongan kerja', 'Formasi lowongan yang dibuka untuk SMK dan SMA', 'photo_8.jpg', 2),
(9, 'Pencairan Subsidi mengalami potongan', 'Subisidi gaji honorer yang cair mengalami potongan', 'photo_9.jpg', 3),
(10, 'Tahapan SMPTN 2021', '11 tahapan pendaftaran SMPTN telah dirilis', 'photo_10.jpg', 3),
(11, 'Hal yang perlu diperhatikan Freshgraduate', '3 Hal yang harus dipahami oleh freshgraduate', 'photo_11.jpg', 4),
(12, 'Dana Hibah Dari BANK AS', 'bank asal AS memberikan dana hibah sebesar 9 miliar kepada SMA', 'photo_12.jpg', 4),
(13, 'Kiat memilih sekolah untuk anak', '8 tips bagi orangtua untuk memilih sekolah untuk anak', 'photo_13.jpg', 5),
(14, 'Arti Lambang sila Ke-4', 'Siswa harus mengerti arti dari sebuah lambang dari sila-4', 'photo_14.jpg', 5),
(15, '4915 siswa menerima Beasiswa', 'Kemenag memberikan bantuan berupa besasiswa kepada anak SMK dan SMA', 'photo_15.jpg', 6),
(16, 'Bajir Kembali Datang di Wilayah bandung', '<p>Banjir Kembali datang di wilayah cigondewah kota bandung</p>\r\n', 'bajir_bandang.jpg', 1),
(17, 'Longsor Terjadi Lagi', '<p>Lagi lagi longsor terjadi . kejadiannya tepatnya kemari pagi pukul 09.00 saat warga sedang sibuk berkebun. akibatnya 20 orang tewas tertimbun longsor</p>\r\n', 'longsor.jpg', 2),
(18, 'Bangunan Sekolah berhasil di renovasi', '<p>Bangunan Sekolah SMK x Berhasil di renovasi. direnovasi bangunan ini dibiayai oleh pemerintah, dengan subsidi APBN 2020 sekolah x ini sudah memiliki standar internasional,&nbsp; dengan ini siswa tidak perlu takut kembali bangunan akan roboh</p>\r\n', 'images.jpg', 3);

-- --------------------------------------------------------

--
-- Table structure for table `user_tb`
--

CREATE TABLE `user_tb` (
  `id_user` int(11) NOT NULL,
  `name` varchar(40) NOT NULL,
  `photo` varchar(40) NOT NULL,
  `email` varchar(30) NOT NULL,
  `password` varchar(20) NOT NULL,
  `address` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `user_tb`
--

INSERT INTO `user_tb` (`id_user`, `name`, `photo`, `email`, `password`, `address`) VALUES
(1, 'admin', 'photo_1.jpg', 'admin@gmail.com', 'admin123', 'Cibeber Kota Cimahi'),
(2, 'Giofanny Mowoka', 'images.jpg', 'giomowoka@gmail.com', 'mowoka123', 'Cigugur kota Cimahi'),
(3, 'Jhon Doe', 'image2.jpg', 'jhon@gmail.com', 'jhon123', 'Selat Cau kota Cimahi'),
(4, 'Mokaz', 'image3.jpg', 'moka@gmail.com', 'moka123', 'Baros Kota cimahi'),
(5, 'Devina', 'image4.jpg', 'devina@gmail.com', 'devina123', 'Cigugur Kota Cimahi'),
(6, 'Santoz', 'image5.jpg', 'santoz@gmail.com', 'santoz123', 'BaleEndah Kota Bandung');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `post_tb`
--
ALTER TABLE `post_tb`
  ADD PRIMARY KEY (`id_post`,`id_user`),
  ADD KEY `id_user` (`id_user`);

--
-- Indexes for table `user_tb`
--
ALTER TABLE `user_tb`
  ADD PRIMARY KEY (`id_user`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `post_tb`
--
ALTER TABLE `post_tb`
  MODIFY `id_post` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=19;
--
-- AUTO_INCREMENT for table `user_tb`
--
ALTER TABLE `user_tb`
  MODIFY `id_user` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;
--
-- Constraints for dumped tables
--

--
-- Constraints for table `post_tb`
--
ALTER TABLE `post_tb`
  ADD CONSTRAINT `post_tb_ibfk_1` FOREIGN KEY (`id_user`) REFERENCES `user_tb` (`id_user`) ON DELETE CASCADE;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
