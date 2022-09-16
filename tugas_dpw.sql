-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Sep 16, 2022 at 10:12 AM
-- Server version: 10.4.24-MariaDB
-- PHP Version: 8.0.19

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `tugas_dpw`
--

-- --------------------------------------------------------

--
-- Table structure for table `artikel`
--

CREATE TABLE `artikel` (
  `id` int(11) NOT NULL,
  `judul` varchar(255) DEFAULT NULL,
  `penulis` varchar(255) DEFAULT NULL,
  `tanggal` date DEFAULT NULL,
  `deskripsi` longtext DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT current_timestamp() ON UPDATE current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `artikel`
--

INSERT INTO `artikel` (`id`, `judul`, `penulis`, `tanggal`, `deskripsi`, `created_at`, `updated_at`) VALUES
(6, 'Utak-atik subsidi BBM', 'iskandar', '2022-09-01', 'Jakarta (ANTARA) - Sabtu, 3 September 2022 adalah hari yang cukup mengejutkan bagi sebagian besar rakyat Indonesia lantaran pemerintah mengumumkan kenaikan harga BBM jenis pertalite, solar, dan pertamax dengan persentase penyesuaian harga berkisar 16 persen sampai 32 persen.\r\n\r\nDi belakang meja kayu berhias bunga warna-warni, Presiden Joko Widodo yang didampingi oleh Menteri Keuangan Sri Mulyani, Menteri ESDM Arifin Tasrif, Menteri Sosial Tri Rismaharini, dan Menteri Sekretaris Negara Pratikno menyampaikan pernyataan resmi tentang kenaikan harga BBM tersebut dari Istana Negara.\r\n\r\nPemerintah mengambil keputusan menaikkan ketiga harga BBM itu di tengah situasi masih tingginya harga komoditas pangan yang tercermin dari kelompok volatile foods mengalami inflasi 8,93 persen pada Agustus 2022.\r\n\r\nPemerintah mengklaim kenaikan harga minyak mentah dunia telah membuat anggaran energi tahun ini naik tiga kali lipat dari Rp152,5 triliun menjadi Rp502,4 triliun, sehingga menaikkan harga jual BBM adalah opsi pamungkas untuk menyelamatkan APBN.\r\n\r\nDalam konferensi pers itu, pemerintah memutuskan menaikkan harga pertalite sebesar Rp2.350 per liter atau setara 30,7 persen dari sebelumnya Rp7.650 per liter menjadi Rp10.000 per liter, harga solar naik sebesar Rp1.650 per liter atau setara 32 persen dari sebelumnya Rp5.150 per liter menjadi Rp6.800 per liter, dan penyesuaian pertamax adalah yang paling kecil, naik Rp2.000 per liter atau setara 16 persen dari sebelumnya Rp12.500 per liter menjadi Rp14.500 per liter.\r\n\r\nKebijakan menaikkan harga BBM pertalite, solar, dan pertamax memang dapat mengurangi defisit anggaran, tapi di sisi lain beban hidup rakyat juga meningkat yang dapat berimbas terhadap penurunan daya beli dan terganggunya pertumbuhan ekonomi ke depan.', '2022-09-09 05:27:38', '2022-09-10 03:28:34'),
(7, 'Airlangga Hartarto dan Kebijakan Sawit Berkelanjutan Indonesia', 'budi tak budi', '2022-08-25', 'Serangkaian langkah dan kebijakan terus dipersiapkan pemerintah bagi industri sawit nasional. Upaya tersebut tidak lepas dari posisi strategis komoditas ini sebagai salah satu sektor andalan ekonomi nasional sekaligus penyumbang besar untuk devisa negara.\r\n \r\nIndonesia telah menjadi produsen sawit terbesar dunia sejak tahun 2016, posisi yang terus bertahan hingga saat ini dimana Indonesia telah menjadi pemasok total 54 persen kebutuhan sawit dunia. Posisi yang secara langsung juga menempatkan negara kita sebagai pemasok utama minyak nabati global. Dengan persentase sebesar itu, minyak sawit Indonesia mampu menjangkau lebih dari 125 negara yang terkait keperluan pangan, energi dan aneka industri hilir lainnya.\r\n\r\nDalam hal dalam negeri,  peran strategis industri kelapa sawit bisa dilihat dari data serta pihak-pihak yang terkait langsung maupun tidak dengan budidanya.  Dimana tidak kurang 12 juta jiwa menggantungkan hidup kepada usaha perkebunan ini. Selain menyerap jumlah tenaga kerja dalam jumlah besar, industri ini juga turut menopang kemajuan pedesaan serta mengurangi kemiskinan  secara signifikan. Peluang dan kemungkinan untuk terus bertumbuh juga semakin besar karena permintaan kepada minyak nabati ini juga kian tinggi.\r\n\r\nMeski punya gambaran positif dan menggembirakan, namun dari sisi pemerintah dorongan kepada industri ini untuk bergerak ke level yang lebih tinggi dalam penguatan nilai tambah juga terus disuarakan.  Bentuknya mulai dari pengembangan industri hilir dan tidak terkonsentrasi hanya pada bahan baku, namun juga mulai bergerak ke hilir bahkan sampai produk akhir.\r\n\r\nSupport itu dikemukakan pemerintah melalui berbagai kerangka kebijakan komprehensif dan kerja sama antar para pihak demi terus berkembangnya industri ini dalam ruang lingkup isu keberlanjutan usaha yang ramah lingkungan. Bentuk dukungan itu antara lain dalam bentuk Sertifikasi Indonesia Sustainable Palm Oil (ISPO), Rencana Aksi Nasional Kelapa Sawit Berkelanjutan (RAN-KSB) 2019-2024, hingga Program Strategis Nasional tentang Peremajaan Sawit Rakyat (PSR).', '2022-09-10 00:28:52', '2022-09-10 00:45:30');

-- --------------------------------------------------------

--
-- Table structure for table `kategori`
--

CREATE TABLE `kategori` (
  `id` int(11) NOT NULL,
  `nama` varchar(255) DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT current_timestamp() ON UPDATE current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `komen`
--

CREATE TABLE `komen` (
  `id` int(11) NOT NULL,
  `nama` varchar(255) DEFAULT NULL,
  `isi` longtext DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT current_timestamp() ON UPDATE current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `komen`
--

INSERT INTO `komen` (`id`, `nama`, `isi`, `created_at`, `updated_at`) VALUES
(1, 'oye', 'keren', '2022-09-10 01:41:19', '2022-09-10 01:41:19'),
(2, 'Fitri Kusuma Wardani', 'ipit said \"nanti ku repek wkwkwk\"', '2022-09-10 02:57:40', '2022-09-10 02:57:40'),
(3, 'kik', 'wow', '2022-09-10 03:29:27', '2022-09-10 03:29:27');

-- --------------------------------------------------------

--
-- Table structure for table `user`
--

CREATE TABLE `user` (
  `id` int(11) NOT NULL,
  `username` varchar(255) DEFAULT NULL,
  `email` varchar(255) DEFAULT NULL,
  `nama` varchar(255) DEFAULT NULL,
  `password` varchar(255) DEFAULT NULL,
  `remember_token` varchar(255) DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT current_timestamp() ON UPDATE current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `user`
--

INSERT INTO `user` (`id`, `username`, `email`, `nama`, `password`, `remember_token`, `created_at`, `updated_at`) VALUES
(7, 'fitrikusuma', 'fitrikusuma@gmail.com', 'Fitri Kusuma Wardani', '$2y$10$g/43ZSVRCixMS6MdMAFLb.lu1B8t564NUXoALFkkniK3YNT4vgtJG', NULL, '2022-09-03 20:06:37', '2022-09-10 02:58:18'),
(8, 'kusumaa', 'wardani@gmail.com', 'kusuma', '$2y$10$3nz/ofg9aYrLGIkMc.djMe17LaY83Eb5mQi5kWYNKh4WyRTK4S/2u', NULL, '2022-09-03 20:56:57', '2022-09-09 06:26:53');

-- --------------------------------------------------------

--
-- Table structure for table `user_detail`
--

CREATE TABLE `user_detail` (
  `id` int(11) NOT NULL,
  `id_user` int(11) DEFAULT NULL,
  `no_handphone` varchar(255) DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT current_timestamp() ON UPDATE current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `user_detail`
--

INSERT INTO `user_detail` (`id`, `id_user`, `no_handphone`, `created_at`, `updated_at`) VALUES
(1, 7, '+6281020304050', '2022-09-03 20:06:37', '2022-09-03 20:06:37'),
(2, 8, '+6281020304051', '2022-09-03 20:56:57', '2022-09-03 20:56:57'),
(3, 9, '081020304050', '2022-09-03 21:41:38', '2022-09-03 21:41:38'),
(4, 10, '+6281022679855', '2022-09-09 06:29:16', '2022-09-09 06:29:16'),
(5, 11, '+6281022679855', '2022-09-09 06:31:08', '2022-09-09 06:31:08'),
(6, 12, '+6281020304051', '2022-09-09 06:33:52', '2022-09-09 06:33:52');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `artikel`
--
ALTER TABLE `artikel`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `kategori`
--
ALTER TABLE `kategori`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `komen`
--
ALTER TABLE `komen`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `user_detail`
--
ALTER TABLE `user_detail`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `artikel`
--
ALTER TABLE `artikel`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;

--
-- AUTO_INCREMENT for table `kategori`
--
ALTER TABLE `kategori`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `komen`
--
ALTER TABLE `komen`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `user`
--
ALTER TABLE `user`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;

--
-- AUTO_INCREMENT for table `user_detail`
--
ALTER TABLE `user_detail`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
