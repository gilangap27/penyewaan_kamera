-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: localhost:3306
-- Generation Time: Jul 21, 2022 at 03:43 AM
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
-- Table structure for table `admin`
--

CREATE TABLE `admin` (
  `id` int(11) NOT NULL,
  `username` varchar(255) NOT NULL,
  `password` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `admin`
--

INSERT INTO `admin` (`id`, `username`, `password`) VALUES
(1, 'admin', '0192023a7bbd73250516f069df18b500');

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
  `dp` int(11) NOT NULL,
  `metode` varchar(20) NOT NULL,
  `status` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `pembayaran`
--

INSERT INTO `pembayaran` (`id`, `id_product`, `email_penyewa`, `nama_penyewa`, `alamat`, `total`, `lama_sewa`, `tanggal_sewa`, `tanggal_kembali`, `dp`, `metode`, `status`) VALUES
(2, 1, 'reza.akbar@gmail.com', 'Reza Akbar', 'Jl. Ahmad Yani, Surabaya', 500000, 2, '2022-07-20', '2022-07-22', 25000, 'bca', 'Complete'),
(3, 5, 'dodi.firmansyah@gmail.com', 'Dodi Firmansyah', 'Jl. Raya Jombang', 375000, 3, '2022-07-21', '2022-07-24', 18750, 'dana', 'Complete'),
(4, 4, 'gilang.arya.pradana@gmail.com', 'Gilang Arya Pradana', 'Jl. Raya Malang', 400000, 2, '2022-07-23', '2022-07-25', 20000, 'visa', 'Pending'),
(5, 4, 'reza.akbar@gmail.com', 'Reza Akbar', 'Jl. Ahmad Yani, Surabaya', 800000, 4, '2022-07-25', '2022-07-25', 40000, 'dana', 'Canceled'),
(6, 3, 'fahmi.ilman@gmail.com', 'Fahmi Ilman', 'Jl. Raya Magelang', 825000, 3, '2022-07-22', '2022-07-25', 41250, 'bca', 'Pending'),
(7, 2, 'gilang.arya.pradana@gmail.com', 'Gilang Arya Pradana', 'Jl. Raya Jombang', 750000, 5, '2022-07-21', '2022-07-26', 37500, 'visa', 'Complete');

-- --------------------------------------------------------

--
-- Table structure for table `product`
--

CREATE TABLE `product` (
  `id` int(11) NOT NULL,
  `gambar` varchar(255) NOT NULL,
  `nama` varchar(255) NOT NULL,
  `brand` varchar(100) NOT NULL,
  `deskripsi` varchar(500) NOT NULL,
  `kelengkapan` varchar(500) NOT NULL,
  `spek` varchar(500) NOT NULL,
  `stok` int(11) NOT NULL,
  `harga` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `product`
--

INSERT INTO `product` (`id`, `gambar`, `nama`, `brand`, `deskripsi`, `kelengkapan`, `spek`, `stok`, `harga`) VALUES
(1, '62d75cabb573b.jpg', 'Canon EOS 6D Mark II', 'Canon', 'Hadir sebagai DSLR paling ringan dalam jajaran EOS full-frame DSLR, EOS 6D Mark II adalah kamera DSLR yang dahsyat namun tetap ringkas, yang mampu membawa karya Anda ke level berikutnya. Sensor 26,2 megapiksel, Dual Pixel CMOS AF, dan layar sentuh LCD Vari-angle yang dimiliki kamera ini memberikan Anda kemudahan untuk mengambil foto dan video yang memukau. Anda dapat mengabadikan momen dengan AF cepat, yang dapat dioperasikan melalui layar sentuh dan dari sudut yang berbeda-beda.', 'SDHC Sandisk Ultra 32GB x2\r\nBaterai x2\r\nCharger\r\nBag', '26.2MP Full-Frame CMOS Sensor\r\nDIGIC 7 Image Processor\r\n45-Point All-Cross Type AF System\r\nFull HD Video at 60 fps; Digital IS\r\n3&quot; 1.04m-Dot Vari-Angle Touchscreen LCD\r\nDual Pixel CMOS AF and Movie Servo AF\r\nNative ISO 40000, Expanded to ISO 102400\r\n6.5 fps Shooting; Time-Lapse &amp; HDR Movie\r\nBuilt-In GPS, Bluetooth &amp; Wi-Fi with NFC\r\nDust and Water-Resistant; SD Card Slot', 12, 250000),
(2, '62d75d97e829f.jpg', 'Fujifilm X-T30', 'Fujifilm', 'FUJIFILM X-T30 baru, menawarkan kinerja serupa dengan FUJIFILM X-T3, dalam bodi yang lebih kecil dan lebih ringan. Kamera ini memiliki sistem AF deteksi fase yang sama dengan cakupan bingkai hampir 100%, pemotretan beruntun berkecepatan tinggi bebas-blackout hingga 30fps, fungsi penyesuaian monokrom, efek Chrome Warna, dan mode Jendela Bidik Olahraga. Kamera ini juga menawarkan fungsi yang memenuhi kebutuhan yang kurang profesional, seperti fungsi Advanced SR Auto.', 'Memory SDXC 64GB x1, SDHC 32GB x1\r\nBattery x2\r\nCharger\r\nStrap (*by request)\r\nBag', '26.1MP APS-C X-Trans BSI CMOS 4 Sensor\r\nX-Processor 4 with Quad CPU\r\nDCI and UHD 4K30 Video; F-Log Gamma\r\n2.36m-Dot OLED Electronic Viewfinder\r\n3.0&quot; 1.04m-Dot Tilting LCD Touchscreen\r\n425-Point Phase-Detection Autofocus\r\nExtended ISO 80-51200, 30 fps Shooting\r\nBluetooth and Wi-Fi; Sports Finder Mode\r\nXF 18-55mm f/2.8-4 R LM OIS Lens', 19, 150000),
(3, '62d75ebc69f8f.jpg', 'Nikon D810', 'Nikon', 'Nikon D810 hadir setelah kurang lebih 2 tahun . Kamera Nikon seri 800 ini hadir dengan sensor kamera 36.3 Megapiksel yang masih sama dengan pendahulunya. Nikon D810 juga tidak memiliki Low-Pass Filter sama seperti seri D800E ', 'Memory SDHC 32GB x2\r\nBattery x2\r\nCharger\r\nBag', '36.3MP FX-Format CMOS Sensor\r\nEXPEED 4 Image Processor\r\nNo Optical Low Pass Filter\r\n3.2&quot; 1,229k-Dot LCD Monitor\r\nFull HD 1080p Video at 60/30/24 fps\r\nMulti-CAM 3500FX 51-Point AF Sensor\r\nNative ISO 12800, Extended to ISO 51200\r\n5 fps Shooting at Full Resolution\r\nElectronic Front Curtain Shutter\r\n14-Bit RAW Files and 12-Bit RAW S Format', 14, 275000),
(4, '62d75f8a8c047.jpg', 'Sony Alpha a7 Mark II', 'Sony', 'Sony Alpha a7 Mark II adalah kamera full-frame pertama di dunia dengan stabilisasi gambar 5-poros dan memberikan kompensasi guncangan kamera untuk beragam lensa lepas pasang. Berbentuk ringkas dan disesuaikan untuk penggunaan yang intuitif, menawarkan Fast Hybrid AF yang disempurnakan, yang menghadirkan fokus super cepat, cakupan super lebar, dan pelacakan efektif untuk subjek yang bergerak dengan cepat.', 'Memory SDXC 64GB x1\r\nï»¿Memory SDHC 32GB x1\r\nï»¿Battery NP-FW50 x4\r\nTriple Dock Charger\r\nï»¿Bag', '24.3MP Full-Frame Exmor CMOS Sensor\r\nï»¿BIONZ X Image Processor\r\nï»¿5-Axis SteadyShot INSIDE Stabilization\r\nï»¿Enhanced Fast Hybrid AF and 5 fps Burst\r\nï»¿Full HD XAVC S Video and S-Log2 Gamma\r\nï»¿3.0&quot; 1,228.8k-Dot Tilting LCD Monitor\r\nï»¿XGA 2.36M-Dot OLED Electronic Viewfinder\r\nï»¿Weather-Resistant Magnesium Alloy Body\r\nï»¿Refined Grip &amp; Robust Lens Mount\r\nï»¿Built-In Wi-Fi Connectivity with NFC', 23, 200000),
(5, '62d76023f1949.jpg', 'Canon G7 X Mark II', 'Canon', 'Kamera terlaris yang dikemas dengan sensor besar dalam bodi yang ramping dan ringkas, sekarang memiliki model generasi kedua yang baru dan lebih baik. Kamera ini menampilkan prosesor gambar DIGIC 7 baru, yang tidak hanya menyempurnakan penampilan foto yang diambil dalam kondisi rendah cahaya, tetapi juga memungkinkan penggambaran kontras yang lebih alami pada pemandangan cahaya latar, sehingga bidikan menghasilkan resolusi tinggi yang tampak nyata. ', 'Memory SDXC 64GB\r\nMemory SDHC 32GB\r\nBattery x3\r\nCharger\r\nBag', 'Sensor: 20.1MP 1-inch CMOS sensor.\r\nLens: 24-100mm f/1.8-2.8.\r\nScreen: 3.0-inch tilting touchscreen, 1,040,000 dots.\r\nViewfinder: N/A.\r\nBurst shooting: 8fps.\r\nAutofocus: 31-point AF.\r\nVideo: 1080p.\r\nConnectivity: Wi-Fi and NFC.', 28, 125000);

-- --------------------------------------------------------

--
-- Table structure for table `ulasan`
--

CREATE TABLE `ulasan` (
  `id` int(11) NOT NULL,
  `id_product` int(11) NOT NULL,
  `id_user` int(11) NOT NULL,
  `rating` int(11) NOT NULL,
  `pesan` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `ulasan`
--

INSERT INTO `ulasan` (`id`, `id_product`, `id_user`, `rating`, `pesan`) VALUES
(1, 1, 3, 5, 'Fast respond, Produk bagus, pelayanan ramah'),
(2, 5, 2, 5, 'Saya sangat terbantu sekali dengan adanya Sewakamera ini. Pelayanannya oke banget pokoknya. sukses terus SewaKamera'),
(3, 2, 1, 5, 'Selama saya menggunakan dan memilih jasa SewaKamera sangat MEMUASKAN! Fast respond, Kondisi barang terawat, Selalu memberikan saran pemakaian barang dengan ramah &amp; baik'),
(4, 3, 2, 1, 'Produk kuarang bagus');

-- --------------------------------------------------------

--
-- Table structure for table `user`
--

CREATE TABLE `user` (
  `id` int(11) NOT NULL,
  `nama` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `password` varchar(255) NOT NULL,
  `gambar` varchar(255) NOT NULL,
  `noHP` varchar(30) NOT NULL,
  `alamat` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `user`
--

INSERT INTO `user` (`id`, `nama`, `email`, `password`, `gambar`, `noHP`, `alamat`) VALUES
(1, 'Gilang Arya Pradana', 'gilang.arya.pradana@gmail.com', '6d8f8a1a4837f099459ec46a72660f30', '62d8c15534cf5.jpg', '081318539151', 'Jl. Raya Jombang'),
(2, 'Dodi Firmansyah', 'dodi.firmansyah@gmail.com', 'bcfeb3c97660cbaabb9fc3a345465f3f', 'Profile.jpg', '', ''),
(3, 'Reza Akbar', 'reza.akbar@gmail.com', '3ed6e995474bc6dddef7a6fc9b97c965', '62d8c31f609d1.jpg', '0821101014143', 'Jl. Ahmad Yani, Surabaya'),
(4, 'Fahmi Ilman', 'fahmi.ilman@gmail.com', '41851c2c39e9729d51870dc74e098950', 'Profile.jpg', '', '');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `admin`
--
ALTER TABLE `admin`
  ADD PRIMARY KEY (`id`);

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
-- Indexes for table `ulasan`
--
ALTER TABLE `ulasan`
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
-- AUTO_INCREMENT for table `admin`
--
ALTER TABLE `admin`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `pembayaran`
--
ALTER TABLE `pembayaran`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT for table `product`
--
ALTER TABLE `product`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `ulasan`
--
ALTER TABLE `ulasan`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `user`
--
ALTER TABLE `user`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
