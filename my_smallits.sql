-- phpMyAdmin SQL Dump
-- version 4.8.3
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jun 19, 2021 at 09:58 AM
-- Server version: 10.1.37-MariaDB
-- PHP Version: 7.1.24

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `my_smallits`
--

-- --------------------------------------------------------

--
-- Table structure for table `data_gate`
--

CREATE TABLE `data_gate` (
  `id_gate` int(11) NOT NULL,
  `lokasi` varchar(100) NOT NULL,
  `kode` varchar(2) NOT NULL,
  `keterangan` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `data_gate`
--

INSERT INTO `data_gate` (`id_gate`, `lokasi`, `kode`, `keterangan`) VALUES
(1, 'Gate Utama', '1', ''),
(2, 'Gate Utama', '2', ''),
(3, 'Departemen A', '1', ''),
(4, 'Departemen A', '2', ''),
(5, 'Departemen B', '1', ''),
(6, 'Departemen B', '2', ''),
(7, 'Departemen C', '1', ''),
(8, 'Departemen C', '2', '');

-- --------------------------------------------------------

--
-- Table structure for table `data_in_out`
--

CREATE TABLE `data_in_out` (
  `id_in-out` int(11) NOT NULL,
  `pengguna` varchar(50) NOT NULL,
  `gate` varchar(50) NOT NULL,
  `jenis_kendaraan` varchar(2) NOT NULL,
  `no_kendaraan` varchar(20) NOT NULL,
  `keterangan` varchar(255) DEFAULT NULL,
  `created_at` datetime NOT NULL DEFAULT CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `data_in_out`
--

INSERT INTO `data_in_out` (`id_in-out`, `pengguna`, `gate`, `jenis_kendaraan`, `no_kendaraan`, `keterangan`, `created_at`) VALUES
(1, '13', '1', '1', 'L 1234 AA', '', '2021-06-13 13:33:36'),
(2, '13', '3', '1', 'L 1234 AA', '', '2021-06-13 13:34:11'),
(3, '13', '4', '1', 'L 1234 AA', '', '2021-06-13 13:34:35'),
(4, '13', '2', '1', 'L 1234 AA', '', '2021-06-13 13:34:57'),
(5, '14', '1', '2', 'L 1122 AA', NULL, '2021-06-13 16:22:50'),
(6, '14', '5', '2', 'L 1122 AA', NULL, '2021-06-13 16:23:28'),
(7, '14', '6', '2', 'L 1122 AA', NULL, '2021-06-13 16:24:06'),
(8, '14', '2', '2', 'L 1122 AA', NULL, '2021-06-13 16:24:40');

-- --------------------------------------------------------

--
-- Table structure for table `data_jabatan`
--

CREATE TABLE `data_jabatan` (
  `id_jabatan` int(11) NOT NULL,
  `nama_jabatan` varchar(120) NOT NULL,
  `gaji_pokok` varchar(50) NOT NULL,
  `tj_transport` varchar(50) NOT NULL,
  `uang_makan` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `data_jabatan`
--

INSERT INTO `data_jabatan` (`id_jabatan`, `nama_jabatan`, `gaji_pokok`, `tj_transport`, `uang_makan`) VALUES
(1, 'Staff Marketing', '4000000', '800000', '500000'),
(3, 'Staff Finance', '4500000', '800000', '540000'),
(4, 'Admin', '4700000', '850000', '500000'),
(5, 'Operator', '3000000', '700000', '500000');

-- --------------------------------------------------------

--
-- Table structure for table `data_kehadiran`
--

CREATE TABLE `data_kehadiran` (
  `id_kehadiran` int(11) NOT NULL,
  `bulan` varchar(15) NOT NULL,
  `nik` varchar(50) NOT NULL,
  `nama_pegawai` varchar(225) NOT NULL,
  `jenis_kelamin` varchar(50) NOT NULL,
  `nama_jabatan` varchar(50) NOT NULL,
  `hadir` int(11) NOT NULL,
  `sakit` int(11) NOT NULL,
  `alpha` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `data_kehadiran`
--

INSERT INTO `data_kehadiran` (`id_kehadiran`, `bulan`, `nik`, `nama_pegawai`, `jenis_kelamin`, `nama_jabatan`, `hadir`, `sakit`, `alpha`) VALUES
(4, '112020', '1234567893', 'Boy', 'Laki-laki', 'Staff Finance', 20, 1, 2),
(5, '112020', '1234567890', 'Doni', 'Laki-laki', 'Staff Marketing', 19, 1, 3),
(6, '122020', '1234567893', 'Boy', 'Laki-laki', 'Staff Finance', 20, 1, 2),
(7, '122020', '1234567890', 'Doni', 'Laki-laki', 'Staff Marketing', 19, 2, 2),
(8, '122020', '167856001', 'Andi', 'Laki-laki', 'Staff Marketing', 20, 1, 2),
(9, '122020', '123457778', 'Indah', 'Perempuan', 'Staff Marketing', 20, 2, 1),
(10, '122020', '1122334456', 'Sandi Nagoya', 'Laki-laki', 'Staff Finance', 19, 2, 2),
(11, '122020', '12789012', 'Tuti', 'Perempuan', 'Admin', 20, 2, 0);

-- --------------------------------------------------------

--
-- Table structure for table `data_keluhan`
--

CREATE TABLE `data_keluhan` (
  `id_keluhan` int(11) NOT NULL,
  `subject` varchar(50) NOT NULL,
  `isi_keluhan` text NOT NULL,
  `oleh` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `data_keluhan`
--

INSERT INTO `data_keluhan` (`id_keluhan`, `subject`, `isi_keluhan`, `oleh`) VALUES
(1, 'asd', 'asdasdasdasdasdasdasdasdasdasdasdasdasdasdasdasdasdasdasdasdasdasdasdasdasdasdasdasdasdasdasdasdasdasdasdasdasdasdasdasdasdasdasdasdasdasdasdasdasdasdasdasdasdasdasdasdasdasdasdasd', 13),
(2, 'Lorem ipsum dolor sit amet', 'Lorem ipsum dolor sit amet, consectetur adipisicing elit. Deserunt at quidem expedita tenetur voluptatum in officia ducimus molestiae aut neque, minima, pariatur odit porro dignissimos numquam sapiente minus quo dicta.\r\n', 14);

-- --------------------------------------------------------

--
-- Table structure for table `data_pegawai`
--

CREATE TABLE `data_pegawai` (
  `id_pegawai` int(11) NOT NULL,
  `nik` varchar(50) NOT NULL,
  `nama_pegawai` varchar(255) NOT NULL,
  `username` varchar(120) NOT NULL,
  `email` varchar(50) NOT NULL,
  `alamat` varchar(255) DEFAULT NULL,
  `password` varchar(120) NOT NULL,
  `jenis_kelamin` varchar(20) NOT NULL,
  `jabatan` varchar(50) NOT NULL,
  `tanggal_masuk` date NOT NULL,
  `status` varchar(50) NOT NULL,
  `photo` varchar(225) DEFAULT NULL,
  `hak_akses` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `data_pegawai`
--

INSERT INTO `data_pegawai` (`id_pegawai`, `nik`, `nama_pegawai`, `username`, `email`, `alamat`, `password`, `jenis_kelamin`, `jabatan`, `tanggal_masuk`, `status`, `photo`, `hak_akses`) VALUES
(4, '12789012', 'Administrator', 'admin', 'tuti@contoh.com', NULL, '827ccb0eea8a706c4c34a16891f84e7b', 'Perempuan', 'Admin', '2020-11-05', 'Pegawai Tetap', 'profil91.jpg', 1),
(12, '12341234', 'Arif Rusman', 'arif', 'arif@contoh.com', 'JL...', '827ccb0eea8a706c4c34a16891f84e7b', 'Laki-laki', 'Staff Marketing', '2021-06-11', 'Pegawai Tetap', NULL, 3),
(13, '6026202014', 'Ratna Nuringtyas', 'ratna', 'ratna@contoh.com', 'Jl. Dua', '81dc9bdb52d04dc20036dbd8313ed055', 'Perempuan', 'Staff Marketing', '2021-06-13', 'Pegawai Tetap', NULL, 3),
(14, '6026202006', 'Farouk Muzaki', 'farouk', 'farouk@contoh.com', 'Jl. Tiga', 'ec6a6536ca304edf844d1d248a4f08dc', 'Laki-laki', '', '2021-06-13', '', NULL, 3),
(15, '6026202010', 'Burhanuddin', 'burhan', 'burhan@contoh.com', 'Jl. Empat', '81dc9bdb52d04dc20036dbd8313ed055', 'Laki-laki', 'Staff Marketing', '2021-06-13', 'Pegawai Tetap', NULL, 2);

-- --------------------------------------------------------

--
-- Table structure for table `hak_akses`
--

CREATE TABLE `hak_akses` (
  `id` int(11) NOT NULL,
  `keterangan` varchar(50) NOT NULL,
  `hak_akses` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `hak_akses`
--

INSERT INTO `hak_akses` (`id`, `keterangan`, `hak_akses`) VALUES
(1, 'admin', 1),
(2, 'pegawai', 2);

-- --------------------------------------------------------

--
-- Table structure for table `potongan_gaji`
--

CREATE TABLE `potongan_gaji` (
  `id` int(11) NOT NULL,
  `potongan` varchar(120) NOT NULL,
  `jml_potongan` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `potongan_gaji`
--

INSERT INTO `potongan_gaji` (`id`, `potongan`, `jml_potongan`) VALUES
(1, 'Alpha', 100000);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `data_gate`
--
ALTER TABLE `data_gate`
  ADD PRIMARY KEY (`id_gate`);

--
-- Indexes for table `data_in_out`
--
ALTER TABLE `data_in_out`
  ADD PRIMARY KEY (`id_in-out`);

--
-- Indexes for table `data_jabatan`
--
ALTER TABLE `data_jabatan`
  ADD PRIMARY KEY (`id_jabatan`);

--
-- Indexes for table `data_kehadiran`
--
ALTER TABLE `data_kehadiran`
  ADD PRIMARY KEY (`id_kehadiran`);

--
-- Indexes for table `data_keluhan`
--
ALTER TABLE `data_keluhan`
  ADD PRIMARY KEY (`id_keluhan`);

--
-- Indexes for table `data_pegawai`
--
ALTER TABLE `data_pegawai`
  ADD PRIMARY KEY (`id_pegawai`);

--
-- Indexes for table `hak_akses`
--
ALTER TABLE `hak_akses`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `potongan_gaji`
--
ALTER TABLE `potongan_gaji`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `data_gate`
--
ALTER TABLE `data_gate`
  MODIFY `id_gate` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT for table `data_in_out`
--
ALTER TABLE `data_in_out`
  MODIFY `id_in-out` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT for table `data_jabatan`
--
ALTER TABLE `data_jabatan`
  MODIFY `id_jabatan` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `data_kehadiran`
--
ALTER TABLE `data_kehadiran`
  MODIFY `id_kehadiran` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;

--
-- AUTO_INCREMENT for table `data_keluhan`
--
ALTER TABLE `data_keluhan`
  MODIFY `id_keluhan` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `data_pegawai`
--
ALTER TABLE `data_pegawai`
  MODIFY `id_pegawai` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=16;

--
-- AUTO_INCREMENT for table `hak_akses`
--
ALTER TABLE `hak_akses`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `potongan_gaji`
--
ALTER TABLE `potongan_gaji`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
