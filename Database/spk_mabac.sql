-- phpMyAdmin SQL Dump
-- version 4.5.1
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: Dec 06, 2021 at 09:39 PM
-- Server version: 10.1.19-MariaDB
-- PHP Version: 5.6.28

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `spk_mabac`
--

-- --------------------------------------------------------

--
-- Table structure for table `guru`
--

CREATE TABLE `guru` (
  `id_guru` int(11) NOT NULL,
  `nama_guru` varchar(200) DEFAULT NULL,
  `nip` varchar(25) DEFAULT NULL,
  `ttl` varchar(50) DEFAULT NULL,
  `pendidikan` varchar(50) DEFAULT NULL,
  `jabatan` varchar(50) DEFAULT NULL,
  `studi` varchar(50) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `guru`
--

INSERT INTO `guru` (`id_guru`, `nama_guru`, `nip`, `ttl`, `pendidikan`, `jabatan`, `studi`) VALUES
(1, 'Andri Rohman, S.Kom', '2754 7446 4820 0035', 'Cirebon, 25-Jun-1992', 'S1/STIKOM', 'Kaprog TKJ', 'Produktif TKJ'),
(2, 'April Liyani, Amd. Kom', '0758 7706 7323 0231', 'Cirebon, 26-Apr-1992', 'S1/UNSWAGATI', 'Pembina OSIS', 'Matematika'),
(3, 'Abu Syahri, S.Pd.I', '8736 7656 6450 1102', 'Cirebon, 5-Apr-1987', 'S1/UPI BANDUNG', 'BK', 'B. Indonesia'),
(4, 'Meli Susanty, S.Pd', '8736 7656 6340 1012', 'Cirebon, 5-Apr-1987', 'S1/UNSWAGATI', 'Wali Kelas', 'Kimia'),
(5, 'Muhibin, S.Pd', '4746 7536 5920 5621', 'Cirebon, 24-Dec-1984', 'S1/IAIN SEMARANG', 'Wali Kelas', 'Produk Kreatif'),
(6, 'Sumiyati, S.Ag', '7436 7516 5430 0002', 'Cirebon, 4-Jan-1973', 'S1/IAIN SUNAN AMPEL', 'Wali Kelas', 'Sejarah Indonesia'),
(7, 'Ronidah, S.Kom', '4746 7236 5160 0123', 'Cirebon, 7-Oct-1990', 'S1/STIKOM', 'Wali Kelas', 'Produktif TKJ'),
(8, 'Rosyadi. S. Kom ', '4746 7553 5621 0271', 'Cirebon, 07 Des 1985', 'S1/AMIKOM Jogja', 'Wali Kelas', 'Produktif TKJ'),
(9, 'Saepudin, S.PdI', '4746 7537 5354 2201', 'Cirebon, 14-Apr-1975', 'S1/STAIN CIREBON', 'Wali Kelas', 'B. Inggris'),
(10, 'Moah An`amurrizal, ST', '9142 7486 5120 0063', 'Cirebon, 18-Apr-1985', 'S1/UNTAG', 'Kaprog TSM', 'Produktif TBSM');

-- --------------------------------------------------------

--
-- Table structure for table `keputusan`
--

CREATE TABLE `keputusan` (
  `id_bobot_keputusan` int(11) NOT NULL,
  `id_guru` int(11) DEFAULT NULL,
  `id_kriteria` int(11) DEFAULT NULL,
  `bobot_keputusan` varchar(10) NOT NULL DEFAULT '0.0000'
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `keputusan`
--

INSERT INTO `keputusan` (`id_bobot_keputusan`, `id_guru`, `id_kriteria`, `bobot_keputusan`) VALUES
(401, 1, 1, '20.0000'),
(402, 2, 1, '20.0000'),
(403, 3, 1, '20.0000'),
(404, 4, 1, '20.0000'),
(405, 5, 1, '20.0000'),
(406, 6, 1, '20.0000'),
(407, 7, 1, '20.0000'),
(408, 8, 1, '20.0000'),
(409, 9, 1, '20.0000'),
(410, 10, 1, '20.0000'),
(411, 1, 2, '30.0000'),
(412, 2, 2, '30.0000'),
(413, 3, 2, '20.0000'),
(414, 4, 2, '30.0000'),
(415, 5, 2, '40.0000'),
(416, 6, 2, '30.0000'),
(417, 7, 2, '30.0000'),
(418, 8, 2, '30.0000'),
(419, 9, 2, '30.0000'),
(420, 10, 2, '30.0000'),
(421, 1, 3, '30.0000'),
(422, 2, 3, '25.0500'),
(423, 3, 3, '25.0500'),
(424, 4, 3, '30.0000'),
(425, 5, 3, '30.0000'),
(426, 6, 3, '19.9500'),
(427, 7, 3, '25.0500'),
(428, 8, 3, '15.0000'),
(429, 9, 3, '19.9500'),
(430, 10, 3, '15.0000'),
(431, 1, 4, '37.5000'),
(432, 2, 4, '50.0000'),
(433, 3, 4, '37.5000'),
(434, 4, 4, '25.0000'),
(435, 5, 4, '50.0000'),
(436, 6, 4, '50.0000'),
(437, 7, 4, '37.5000'),
(438, 8, 4, '37.5000'),
(439, 9, 4, '50.0000'),
(440, 10, 4, '50.0000'),
(441, 1, 5, '20.0000'),
(442, 2, 5, '26.6000'),
(443, 3, 5, '26.6000'),
(444, 4, 5, '26.6000'),
(445, 5, 5, '33.4000'),
(446, 6, 5, '40.0000'),
(447, 7, 5, '33.4000'),
(448, 8, 5, '33.4000'),
(449, 9, 5, '26.6000'),
(450, 10, 5, '33.4000');

-- --------------------------------------------------------

--
-- Table structure for table `kriteria`
--

CREATE TABLE `kriteria` (
  `id_kriteria` int(11) NOT NULL,
  `kriteria` varchar(200) DEFAULT NULL,
  `bobot` varchar(5) NOT NULL DEFAULT '0',
  `tipe` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `kriteria`
--

INSERT INTO `kriteria` (`id_kriteria`, `kriteria`, `bobot`, `tipe`) VALUES
(1, 'Pendidikan', '20', 'benefit'),
(2, 'IPK', '20', 'benefit'),
(3, 'Usia', '15', 'benefit'),
(4, 'Ilmu Didaktik dan Ilmu Metodik', '25', 'benefit'),
(5, 'Masa Kerja', '20', 'benefit');

-- --------------------------------------------------------

--
-- Table structure for table `matriks_batas`
--

CREATE TABLE `matriks_batas` (
  `id_batas` int(11) NOT NULL,
  `id_kriteria` int(11) DEFAULT NULL,
  `nilai_batas` varchar(100) NOT NULL DEFAULT '0.0000'
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `matriks_batas`
--

INSERT INTO `matriks_batas` (`id_batas`, `id_kriteria`, `nilai_batas`) VALUES
(106, 1, '20.0000'),
(107, 2, '29.6487'),
(108, 3, '22.8027'),
(109, 4, '41.5807'),
(110, 5, '29.4958');

-- --------------------------------------------------------

--
-- Table structure for table `normalisasi`
--

CREATE TABLE `normalisasi` (
  `id_normalisasi` int(11) NOT NULL,
  `id_guru` int(11) DEFAULT NULL,
  `id_kriteria` int(11) DEFAULT NULL,
  `normalisasi` varchar(5) NOT NULL DEFAULT '0'
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `normalisasi`
--

INSERT INTO `normalisasi` (`id_normalisasi`, `id_guru`, `id_kriteria`, `normalisasi`) VALUES
(255, 1, 1, '0.00'),
(256, 2, 1, '0.00'),
(257, 3, 1, '0.00'),
(258, 4, 1, '0.00'),
(259, 5, 1, '0.00'),
(260, 6, 1, '0.00'),
(261, 7, 1, '0.00'),
(262, 8, 1, '0.00'),
(263, 9, 1, '0.00'),
(264, 10, 1, '0.00'),
(265, 1, 2, '0.50'),
(266, 2, 2, '0.50'),
(267, 3, 2, '0.00'),
(268, 4, 2, '0.50'),
(269, 5, 2, '1.00'),
(270, 6, 2, '0.50'),
(271, 7, 2, '0.50'),
(272, 8, 2, '0.50'),
(273, 9, 2, '0.50'),
(274, 10, 2, '0.50'),
(275, 1, 3, '1.00'),
(276, 2, 3, '0.67'),
(277, 3, 3, '0.67'),
(278, 4, 3, '1.00'),
(279, 5, 3, '1.00'),
(280, 6, 3, '0.33'),
(281, 7, 3, '0.67'),
(282, 8, 3, '0.00'),
(283, 9, 3, '0.33'),
(284, 10, 3, '0.00'),
(285, 1, 4, '0.50'),
(286, 2, 4, '1.00'),
(287, 3, 4, '0.50'),
(288, 4, 4, '0.00'),
(289, 5, 4, '1.00'),
(290, 6, 4, '1.00'),
(291, 7, 4, '0.50'),
(292, 8, 4, '0.50'),
(293, 9, 4, '1.00'),
(294, 10, 4, '1.00'),
(295, 1, 5, '0.00'),
(296, 2, 5, '0.33'),
(297, 3, 5, '0.33'),
(298, 4, 5, '0.33'),
(299, 5, 5, '0.67'),
(300, 6, 5, '1.00'),
(301, 7, 5, '0.67'),
(302, 8, 5, '0.67'),
(303, 9, 5, '0.33'),
(304, 10, 5, '0.67');

-- --------------------------------------------------------

--
-- Table structure for table `penilaian`
--

CREATE TABLE `penilaian` (
  `id_penilaian` int(11) NOT NULL,
  `id_guru` int(11) DEFAULT NULL,
  `id_kriteria` int(11) DEFAULT NULL,
  `nilai` varchar(50) NOT NULL DEFAULT '0',
  `keterangan` varchar(100) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `penilaian`
--

INSERT INTO `penilaian` (`id_penilaian`, `id_guru`, `id_kriteria`, `nilai`, `keterangan`) VALUES
(1, 1, 1, '5', 'S1'),
(2, 1, 2, '4', '3,2 '),
(3, 1, 3, '4', '30 Tahun'),
(4, 1, 4, '4', '75'),
(5, 1, 5, '2', '2 Tahun'),
(6, 2, 1, '5', 'S1'),
(7, 2, 2, '4', '3,4'),
(8, 2, 3, '3', '31 Tahun'),
(9, 2, 4, '5', '82'),
(10, 2, 5, '3', '3 Tahun'),
(11, 3, 1, '5', 'S1'),
(12, 3, 2, '3', '3,4'),
(13, 3, 3, '3', '34 Tahun'),
(14, 3, 4, '4', '80'),
(15, 3, 5, '3', '3 Tahun'),
(16, 4, 1, '5', 'S1'),
(17, 4, 2, '4', '3,1'),
(18, 4, 3, '4', '30 Tahun'),
(19, 4, 4, '3', '75'),
(20, 4, 5, '3', '3 Tahun'),
(21, 5, 1, '5', 'S1'),
(22, 5, 2, '5', '3,6 '),
(23, 5, 3, '4', '35 Tahun'),
(24, 5, 4, '5', '82'),
(25, 5, 5, '4', '4 Tahun'),
(26, 6, 1, '5', 'S1'),
(27, 6, 2, '4', '3,2'),
(28, 6, 3, '2', '42 Tahun'),
(29, 6, 4, '5', '82'),
(30, 6, 5, '5', '5 Tahun'),
(31, 7, 1, '5', 'S1'),
(32, 7, 2, '4', '3,4'),
(33, 7, 3, '3', '32 Tahun'),
(34, 7, 4, '4', '80'),
(35, 7, 5, '4', '4 Tahun'),
(36, 8, 1, '5', 'S1'),
(37, 8, 2, '4', '3,1'),
(38, 8, 3, '1', '41 Tahun'),
(39, 8, 4, '4', '80 '),
(40, 8, 5, '4', '4 Tahun'),
(41, 9, 1, '5', 'S1'),
(42, 9, 2, '4', '3,4'),
(43, 9, 3, '2', '40'),
(44, 9, 4, '5', '85'),
(45, 9, 5, '3', '3 Tahun'),
(46, 10, 1, '5', 'S1'),
(47, 10, 2, '4', '3,2'),
(48, 10, 3, '1', '42 Tahun'),
(49, 10, 4, '5', '85'),
(50, 10, 5, '4', '4 Tahun');

-- --------------------------------------------------------

--
-- Table structure for table `perkiraan_perbatasan`
--

CREATE TABLE `perkiraan_perbatasan` (
  `id_perkiraan` int(11) NOT NULL,
  `id_guru` int(11) DEFAULT NULL,
  `id_kriteria` int(11) DEFAULT NULL,
  `nilai_perkiraan` float(10,4) NOT NULL DEFAULT '0.0000'
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `perkiraan_perbatasan`
--

INSERT INTO `perkiraan_perbatasan` (`id_perkiraan`, `id_guru`, `id_kriteria`, `nilai_perkiraan`) VALUES
(351, 1, 1, 0.0000),
(352, 2, 1, 0.0000),
(353, 3, 1, 0.0000),
(354, 4, 1, 0.0000),
(355, 5, 1, 0.0000),
(356, 6, 1, 0.0000),
(357, 7, 1, 0.0000),
(358, 8, 1, 0.0000),
(359, 9, 1, 0.0000),
(360, 10, 1, 0.0000),
(361, 1, 2, 0.3513),
(362, 2, 2, 0.3513),
(363, 3, 2, -9.6487),
(364, 4, 2, 0.3513),
(365, 5, 2, 10.3513),
(366, 6, 2, 0.3513),
(367, 7, 2, 0.3513),
(368, 8, 2, 0.3513),
(369, 9, 2, 0.3513),
(370, 10, 2, 0.3513),
(371, 1, 3, 7.1973),
(372, 2, 3, 2.2473),
(373, 3, 3, 2.2473),
(374, 4, 3, 7.1973),
(375, 5, 3, 7.1973),
(376, 6, 3, -2.8527),
(377, 7, 3, 2.2473),
(378, 8, 3, -7.8027),
(379, 9, 3, -2.8527),
(380, 10, 3, -7.8027),
(381, 1, 4, -4.0807),
(382, 2, 4, 8.4193),
(383, 3, 4, -4.0807),
(384, 4, 4, -16.5807),
(385, 5, 4, 8.4193),
(386, 6, 4, 8.4193),
(387, 7, 4, -4.0807),
(388, 8, 4, -4.0807),
(389, 9, 4, 8.4193),
(390, 10, 4, 8.4193),
(391, 1, 5, -9.4958),
(392, 2, 5, -2.8958),
(393, 3, 5, -2.8958),
(394, 4, 5, -2.8958),
(395, 5, 5, 3.9042),
(396, 6, 5, 10.5042),
(397, 7, 5, 3.9042),
(398, 8, 5, 3.9042),
(399, 9, 5, -2.8958),
(400, 10, 5, 3.9042);

-- --------------------------------------------------------

--
-- Table structure for table `rangking`
--

CREATE TABLE `rangking` (
  `id_rangking` int(11) NOT NULL,
  `id_guru` int(11) DEFAULT NULL,
  `nama_guru` varchar(200) DEFAULT NULL,
  `nilai_rangking` float(10,4) NOT NULL DEFAULT '0.0000'
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `rangking`
--

INSERT INTO `rangking` (`id_rangking`, `id_guru`, `nama_guru`, `nilai_rangking`) VALUES
(116, 1, 'Andri Rohman, S.Kom', -6.0279),
(117, 2, 'April Liyani, Amd. Kom', 8.1221),
(118, 3, 'Abu Syahri, S.Pd.I', -14.3779),
(119, 4, 'Meli Susanty, S.Pd', -11.9279),
(120, 5, 'Muhibin, S.Pd', 29.8721),
(121, 6, 'Sumiyati, S.Ag', 16.4221),
(122, 7, 'Ronidah, S.Kom', 2.4221),
(123, 8, 'Rosyadi. S. Kom ', -7.6279),
(124, 9, 'Saepudin, S.PdI', 3.0221),
(125, 10, 'Moah An`amurrizal, ST', 4.8721);

-- --------------------------------------------------------

--
-- Table structure for table `user`
--

CREATE TABLE `user` (
  `id_user` int(11) NOT NULL,
  `nama_user` varchar(100) DEFAULT NULL,
  `email` varchar(100) DEFAULT NULL,
  `password` varchar(100) DEFAULT NULL,
  `image` varchar(100) DEFAULT NULL,
  `level` enum('admin','user') DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `user`
--

INSERT INTO `user` (`id_user`, `nama_user`, `email`, `password`, `image`, `level`) VALUES
(1, 'admin', 'admin@gmail.com', '21232f297a57a5a743894a0e4a801fc3', NULL, 'admin'),
(2, 'Andika', 'galihandika69@gmail.com', '21232f297a57a5a743894a0e4a801fc3', NULL, 'user');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `guru`
--
ALTER TABLE `guru`
  ADD PRIMARY KEY (`id_guru`);

--
-- Indexes for table `keputusan`
--
ALTER TABLE `keputusan`
  ADD PRIMARY KEY (`id_bobot_keputusan`);

--
-- Indexes for table `kriteria`
--
ALTER TABLE `kriteria`
  ADD PRIMARY KEY (`id_kriteria`);

--
-- Indexes for table `matriks_batas`
--
ALTER TABLE `matriks_batas`
  ADD PRIMARY KEY (`id_batas`);

--
-- Indexes for table `normalisasi`
--
ALTER TABLE `normalisasi`
  ADD PRIMARY KEY (`id_normalisasi`);

--
-- Indexes for table `penilaian`
--
ALTER TABLE `penilaian`
  ADD PRIMARY KEY (`id_penilaian`);

--
-- Indexes for table `perkiraan_perbatasan`
--
ALTER TABLE `perkiraan_perbatasan`
  ADD PRIMARY KEY (`id_perkiraan`);

--
-- Indexes for table `rangking`
--
ALTER TABLE `rangking`
  ADD PRIMARY KEY (`id_rangking`);

--
-- Indexes for table `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`id_user`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `guru`
--
ALTER TABLE `guru`
  MODIFY `id_guru` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;
--
-- AUTO_INCREMENT for table `keputusan`
--
ALTER TABLE `keputusan`
  MODIFY `id_bobot_keputusan` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=451;
--
-- AUTO_INCREMENT for table `kriteria`
--
ALTER TABLE `kriteria`
  MODIFY `id_kriteria` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;
--
-- AUTO_INCREMENT for table `matriks_batas`
--
ALTER TABLE `matriks_batas`
  MODIFY `id_batas` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=111;
--
-- AUTO_INCREMENT for table `normalisasi`
--
ALTER TABLE `normalisasi`
  MODIFY `id_normalisasi` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=305;
--
-- AUTO_INCREMENT for table `penilaian`
--
ALTER TABLE `penilaian`
  MODIFY `id_penilaian` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=51;
--
-- AUTO_INCREMENT for table `perkiraan_perbatasan`
--
ALTER TABLE `perkiraan_perbatasan`
  MODIFY `id_perkiraan` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=401;
--
-- AUTO_INCREMENT for table `rangking`
--
ALTER TABLE `rangking`
  MODIFY `id_rangking` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=126;
--
-- AUTO_INCREMENT for table `user`
--
ALTER TABLE `user`
  MODIFY `id_user` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
