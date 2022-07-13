-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: localhost:3306
-- Generation Time: Jul 13, 2022 at 02:40 PM
-- Server version: 5.7.33
-- PHP Version: 7.4.19

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `penyewaan_kamera`
--

-- --------------------------------------------------------

--
-- Table structure for table `pembayaran`
--

CREATE TABLE `pembayaran` (
  `id` int(11) NOT NULL,
  `id_product` int(11) NOT NULL,
  `email_penyewa` varchar(255) NOT NULL,
  `nama_penyewa` varchar(255) NOT NULL,
  `alamat` varchar(255) NOT NULL,
  `total` int(11) NOT NULL,
  `lama_sewa` int(11) NOT NULL,
  `tanggal_sewa` varchar(30) NOT NULL,
  `tanggal_kembali` varchar(30) NOT NULL,
  `status` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `pembayaran`
--

INSERT INTO `pembayaran` (`id`, `id_product`, `email_penyewa`, `nama_penyewa`, `alamat`, `total`, `lama_sewa`, `tanggal_sewa`, `tanggal_kembali`, `status`) VALUES
(3, 4, 'gilang.arya.paradan272001@hotmail.com', 'Gilang', 'Jl. Raya Tembelang', 825000, 3, '2022-07-15', '2022-07-18', 'Pending'),
(4, 2, 'dodo001@gmail.com', 'Dodo', 'Jl. Raya Surabaya', 400000, 2, '2022-07-14', '2022-07-16', 'Pending');

-- --------------------------------------------------------

--
-- Table structure for table `product`
--

CREATE TABLE `product` (
  `id` int(11) NOT NULL,
  `gambar` varchar(255) NOT NULL,
  `nama` varchar(255) NOT NULL,
  `brand` varchar(255) NOT NULL,
  `deskripsi` varchar(1000) NOT NULL,
  `kelengkapan` varchar(500) NOT NULL,
  `spek` varchar(500) NOT NULL,
  `stok` int(11) NOT NULL,
  `harga` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `product`
--

INSERT INTO `product` (`id`, `gambar`, `nama`, `brand`, `deskripsi`, `kelengkapan`, `spek`, `stok`, `harga`) VALUES
(2, '62cbf1a0a7437.jpg', 'Canon EOS 5D Mark III', 'Canon', 'EOS 5D Mark III tidak hanya menawarkan pemrosesan sinyal 14 bit untuk gradasi gambar yang sangat baik, namun juga memberikan standar dan ISO yang lebih tinggi, dan opsi baru untuk meningkatkan pengambilan gambar dalam situasi pencahayaan bervariasi dan cepat berubah. Dengan kisaran standar ISO 100-25600, EOS 5D Mark III mewakili peningkatan sensitivitas 2-stop dibandingkan kamera sebelumnya. Berkat rasio signal-to-noise yang ditingkatkan dari sensor baru dan pengurangan kebisingan yang kuat, EOS 5D Mark III dapat memotret sensitivitas yang diperluas sampai ISO 50 (L) dan sampai 51200 (H1), dan bahkan 102400 (H2) ! Selain keuntungan yang jelas dari rentang ISO yang lebar, EOS 5D Mark III memiliki pengaturan ISO otomatis, terdapat pada menu ISO khusus. Pengaturan minimum dan maksimum ISO dapat ditentukan, seperti juga kisaran yang ditentukan pengguna, ditambah auto dan manual penuh.', '2 buah Memory SD Card 32GB\r\n2 buah Baterai\r\nCharger', '22.3 MP Full-Frame CMOS Sensor\r\nDIGIC 5+ Image Processor\r\n3.2&quot; 1.04m-Dot ClearView II LCD Monitor\r\nFull HD 1080p Video Recording at 30 fps\r\n61-Point High Density Reticular AF\r\nNative ISO 25600, Extended to ISO 102400\r\n6 fps Shooting in RAW+JPEG\r\n63-Zone Dual Layer Metering Sensor\r\n14-Bit RAW Files and S-RAW Format\r\nMagnesium Alloy Body, SD/CF Card Slots', 5, 200000),
(3, '62cbf2aa44572.jpg', 'Sony Alpha a6100', 'Sony Alpha a6100', 'Sony A6100, Sony Menghadirkan fitur serbaguna yang diatur dalam desain yang sangat ringkas, Sony a6100 adalah kamera mirrorless format APS-C yang sangat cocok untuk foto dan video. Dengan sensor CMOS 24.2MP dan prosesor BIONZ X. Menangkap gambar diam resolusi tinggi dengan rentang sensitivitas luas dan noise rendah dimungkinkan. Kombinasi sensor dan prosesor juga memungkinkan perekaman video UHD 4K bersama dengan pemotretan cepat hingga 11 fps untuk bekerja dengan objek yang bergerak.', '2 buah Memory Sandisk SDXC Extreme 64GB\r\n4 buah Battery NP-FW50\r\nTriple Dock Charger\r\nï»¿Bag', '24-megapixel APS-C CMOS sensor\r\nï»¿BIONZ X image processor\r\nï»¿425-point hybrid autofocus system\r\n3-inch tilting touchscreen LCD with 921.6K dots of resolution\r\n1.44-million-dot electronic viewfinder\r\nISO range of 100-32000 (expandable to 51200)\r\n11 fps continuous shooting\r\n4K video\r\nï»¿Built-in wireless and Bluetooth', 4, 140000),
(4, '62cbf3aa31d1a.jpg', 'Fujifilm X-T4', 'Fujifilm', 'Fujifilm X-T4 Body adalah kamera tanpa cermin/mirrorless serbaguna yang memadukan kemampuan foto dan video yang canggih bersama dengan alur kerja yang ditingkatkan. Memanfaatkan sensor APS-C-format 26.1MP X-Trans CMOS 4, X-T4 mampu merekam dengan resolusi tinggi bersama dengan dukungan untuk video DCI / UHD 4K pada 60 fps, perekaman Full HD hingga 240 fps, sensitivitas dari ISO 160-12800, dan pemotretan bersambungan hingga 15 fps dengan rana mekanis. Desain BSI dari sensor menghasilkan pengurangan noise dan kejernihan keseluruhan yang lebih besar dan dipasangkan dengan X-Processor 4. Desain sensor juga memungkinkan sistem fokus otomatis hibrida yang menggabungkan 425 titik deteksi fase dengan sistem deteksi kontras untuk kinerja AF yang cepat dan akurat.', '2 buah Memory SDXC Extreme 64GB\r\n2 buah Battery\r\nDual Charger\r\nStrap (*by request)\r\nBag', '26.1MP APS-C X-Trans BSI CMOS 4 Sensor\r\nX-Processor 4 Image Processor\r\n5-Axis In-Body Image Stabilization\r\nDCI/UHD 4K at 60 fps, Full HD at 240 fps\r\n425-Point Hybrid AF System\r\n3.69m-Dot 0.75x OLED EVF\r\n3.0&quot; 1.62m-Dot Vari-Angle Touchscreen\r\nISO 160-12800, up to 15-fps Shooting\r\nBluetooth and Wi-Fi Connectivity\r\nFilm Simulation Modes', 6, 275000),
(5, '62cbf4911aa3b.jpg', 'Nikon D750', 'Nikon D750', 'Nikon D750 Body menampilkan sensor CMOS 24.3MP, bersama dengan prosesor gambar EXPEED 4, kamera ini mampu menghasilkan resolusi tinggi dengan gradasi warna yang halus, noise rendah, dan sensitivitas terhadap ISO 51200 yang dapat diperluas, dengan kecepatan pengambilan gambar terus menerus hingga 6,5 fps. Untuk perekaman video didukung dengan Full HD 1080p/60. Serta didukung dengan LCD 3.2 &quot;1.222k dot yang dapat dilipat 180 Derajat. D750 juga memiliki fitur konektivitas Wi-Fi.', '2 buah Memory SDHC 32GB\r\n2 buah Battery\r\nCharger\r\nBag', '24.3MP FX-Format CMOS Sensor\r\nï»¿EXPEED 4 Image Processor\r\nï»¿3.2&quot; 1,229k-Dot RGBW Tilting LCD Monitor\r\nï»¿Full HD 1080p Video Recording at 60 fps\r\nï»¿Multi-CAM 3500FX II 51-Point AF Sensor\r\nï»¿Native ISO 12800, Extended to ISO 51200\r\nContinuous Shooting Up to 6.5 fps\r\nï»¿91k-Pixel RGB Sensor and Group Area AF\r\nBuilt-In Wi-Fi Connectivity\r\nï»¿Time Lapse Shooting &amp; Exposure Smoothing', 2, 230000);

-- --------------------------------------------------------

--
-- Table structure for table `user`
--

CREATE TABLE `user` (
  `id` int(11) NOT NULL,
  `nama` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `password` varchar(255) NOT NULL,
  `gambar` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `user`
--

INSERT INTO `user` (`id`, `nama`, `email`, `password`, `gambar`) VALUES
(3, 'Gilang Pradana', 'gilang.arya.pradana272001@gmail.com', '202cb962ac59075b964b07152d234b70', 'Profile.jpg');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `pembayaran`
--
ALTER TABLE `pembayaran`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `product`
--
ALTER TABLE `product`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `pembayaran`
--
ALTER TABLE `pembayaran`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `product`
--
ALTER TABLE `product`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `user`
--
ALTER TABLE `user`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
