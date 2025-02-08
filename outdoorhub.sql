-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Feb 08, 2025 at 09:38 PM
-- Server version: 10.4.32-MariaDB
-- PHP Version: 8.2.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `outdoorhub`
--

-- --------------------------------------------------------

--
-- Table structure for table `toko`
--

CREATE TABLE `toko` (
  `id` int(11) NOT NULL,
  `nama` varchar(255) NOT NULL,
  `alamat` text NOT NULL,
  `deskripsi` varchar(255) NOT NULL,
  `jam_operasional` varchar(20) NOT NULL,
  `lat` varchar(30) NOT NULL,
  `lon` varchar(30) NOT NULL,
  `rating` double NOT NULL,
  `notelp` varchar(15) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `toko`
--

INSERT INTO `toko` (`id`, `nama`, `alamat`, `deskripsi`, `jam_operasional`, `lat`, `lon`, `rating`, `notelp`) VALUES
(1, 'Green Camp', 'Jl. Gagak No.174, Sadang Serang, Kecamatan Coblong, Kota Bandung, Jawa Barat 40133', 'Green camp sewa alat camping terbaik', '8.00 - 20.00', '-6.8932225', '107.6275743', 4.5, ''),
(2, 'Alment Rentalkemp', 'Jl. Puyuh Dalam II No.5, RT.05/RW.09, Sadang Serang, Kecamatan Coblong, Kota Bandung, Jawa Barat 40133', 'Sewa alat camping Bandung Terlengkap termurah dan terbaik versi google', '8.00 – 21.00', '-6.8973593', '107.6239368', 4.3, '082123450709'),
(3, 'Potong Kompas', 'Jl. Gagak No.158A, Sukaluyu, Kec. Cibeunying Kaler, Kota Bandung, Jawa Barat 40123', 'Potong kompas menyediakan segala alat camping', '9.00 - 22.00', '-6.8939638', '107.6278913', 4.6, ''),
(4, 'Ngawana Outdoor Rental', 'Jl. Manteron No.18, Sukaluyu, Kec. Cibeunying Kaler, Kota Bandung, Jawa Barat 40123', 'Toko rental yang menyediakan tenda hingga alat masak terlengkap', '8.00 - 21.00', '-6.89553', '107.6304452', 4.3, ''),
(5, 'Sam Outdoor Shop', 'Jl. Haur Pancuh No.86, Lebakgede, Kecamatan Coblong, Kota Bandung, Jawa Barat 40132', 'Toko terlengkap dan termurah untuk rental alat camping', '7.00 - 21.00', '-6.8950332', '107.6190435', 4.5, ''),
(6, 'BUVER ADVENTURE', 'Jl. Randu Sari Raya No.30, Antapani Kidul, Kec. Antapani, Kota Bandung, Jawa Barat 40291', 'Buver Adventure merupakan tempat sewa alat camping yang paling populer di Kota Bandung. Telah melayani lebih dari 10000 kegiatan camping, baik itu perusahaan, komunitas, instansi dan perorangan. Peralatan berkualitas & kumplit, harga terjangkau, pelayanan', '9.00 - 21.00', '-6.9272525', '107.6597326', 4.6, '083817594575'),
(7, 'VENUS OUTDOOR', 'Jalan GUMURUH NO. 113 Gumuruh Batununggal, Turangga, Lengkong, Bandung City, West Java 40264', 'sewa alat camping bandung rental alat camping bandung sewa kompor portable bandung rental kompor portable bandung sewa sepatu gunung bandung rental sepatu gunung bandung rental tenda bandung sewa tenda bandung rental kursi meja lipat bandung\"', '7.00 – 21.00', '-6.9349581', '107.6383314', 4.8, '082316410813'),
(8, 'Rental Camping Bandung 5mg.Active', 'Blok 4 no 114, Jl. Sarirasa, Sarijadi, Kec. Sukasari, Kota Bandung, Jawa Barat 40151', 'Menyewakan dan Menjual Berbagai Macam Perlengkapan camping, sewa tas carrier, sewa sleeping bag, sewa matrass, sewa sepatu gunung, sewa senter, kompor portable, topi rimba, cooking set, headlamp, sewa tenda camping, tenda pleton', '9.00 – 20.00', '-6.8630255', '107.5891088', 4.9, '0895386267900'),
(9, 'Bullhead Rental alat Camping Cimahi', 'Jl. Puri Cipageran Indah 2 No.6 Blok D12, Tanimulya, Kec. Ngamprah, Kabupaten Bandung Barat, Jawa Barat 40552', 'Tempat penyewaan dan penjualan alat-alat kemping', '6.00 – 21.00', '-6.8593662', '107.5320923', 4.9, '08112296692'),
(10, 'Samara Outdoor Gear', 'Jl. Soekarno Hatta Gg. Assalaam RT. 07/05 No. 67, Babakan Ciparay, Kec. Babakan Ciparay, Kota Bandung, Jawa Barat 40223', 'Rental/Sewa Alat Camping Outdoor Bandung', '6.00 – 21.00', '-6.9404684', '107.5808768', 4.9, '085659261999'),
(11, 'Erabarala Outdoor', 'jalan manisi, kebon terong, Rt 04/R 03, No.150, Pasir Biru, Kec. Cibiru, Kota Bandung, Jawa Barat 40615', 'Menyewakan dan menjual alat camping -Jasa bongkar pasang tenda -Pengadaan barang untuk kegiatan gathering, ospek, kopdar dll -Laundry alat kemping -Tourguide, porter dll -Service tenda dome -Sewa Tenda Camping -Layanan Even Organizer -Rental Alat camping', '6.00 – 21.00', '-6.9317431', '107.7202073', 4.9, '081224090292'),
(12, 'Rental Sewa Alat Camping Pelmus Outdoor', 'Jl. Parakan Saat No.253, Cisaranten Endah, Kec. Arcamanik, Kota Bandung, Jawa Barat 40291', 'Jual dan rental alat camping', '6.00 – 21.00', '-6.9344769', '107.6682584', 4.8, '089517813661'),
(13, 'Everest Outdoor Gear & Equipmentr', 'Jl. Gagak No.164, RT.01/RW.05, Sukaluyu, Kec. Cibeunying Kaler, Kota Bandung, Jawa Barat 40123', 'menyewakan dan menjual berbagai peralatan dan perlengkapan outdoor khususnya untuk berkemah (camping)', '9.00 – 21.30', '-6.892637', '107.6275447', 4.7, '081395180809'),
(14, 'Cibiru Outdoor Rental Alat Camping', 'Jl. A.H. Nasution, Cipadung Wetan, Kec. Panyileukan, Kota Bandung, Jawa Barat 40614', 'Layanan Sewa Alat Camping : Lokasi di Jalan Raya AH. Nasution No 98B Cipadung Cibiru (Kampus UIN) ☎️ WA admin: 082121296231 IG : @cibiruoutdoorcamp Menyediakan Alat Camping Seperti: Tenda dome, Tas Carrier, Sepatu, Sleeping Bag, Matras, Topi, Alat Masak, ', '6.00 – 21.00', '-6.9335863', '107.7162142', 5, '082121296231'),
(15, 'Bumi Sakala Adventure', 'Gg. Sumur Bor II, Setiamanah, Kec. Cimahi Tengah, Kota Cimahi, Jawa Barat 40524', 'Bumi Sakala Adventure adalah bisnis yang bergerak di bidang rental alat camping yang berlokasikan di Cimahi, Kami melayani antar jemput barang dengan cakupan daerah tertentu, Kami mengedepankan tingkat kenyamanan pelanggan dalam menyewa alat kami baik dar', '8.00 – 21.00', '-6.8772526', '107.5339461', 5, '0895403974244'),
(16, 'Kauri Adventure Sewa Alat Camping Bandung', 'Jl. Cipamokolan No.58A, RT.01/RW.08, Cipamokolan, Kec. Rancasari, Kota Bandung, Jawa Barat 40292', 'Kauri Adventure melayani rental alat camping. Berdiri sejak tahun 2022 dengan nama awalnya adalah Pinales Outdoor. Kauri Adventure juga melayani: Sewa alat camping bandung', '8.00 – 20.00', '-6.9424349', '107.6771087', 5, '085179645850'),
(17, 'Erabarala Outdoor', 'TOKO RIA, Gg. Raden Dewi 3 Jl. Babakan Tarogong No.69, RT.5/RW.2, Jamika, Kec. Bojongloa Kaler, Kota Bandung, Jawa Barat 40232', 'Ready silakan di-booking. Kontak WhatsApp 0895707775777 atau 0895707775700. Informasi harga, lokasi dan katalog terbaru cek link kami ♥️ Tempat sewa tenda dan alat camping berkualitas.', '6.00 am–7.30 pm', '-6.9267932', '107.5910998', 5, '081224090292'),
(18, 'RR Outdoor', 'Jl. Padasuka Atas No.55, RT.002/RW.005, Cimenyan, Kec. Cimenyan, Kabupaten Bandung, Jawa Barat 40197', 'Sewa Peralatan camping, berlokasi di Cimenyan Bandung.', '8.00 am–10.00 pm', '-6.8818828', '107.6632497', 4.8, '0895361069197'),
(19, 'ADF ADVENTURE', 'Jl. Leuwianyar Raya raya No.24, RT.04/RW.04, Situsaeur, Kec. Bojongloa Kidul, Kota Bandung, Jawa Barat 40234', 'Rental alat camp lebih murah dan barang berkualitas semua. Jangan lupa chat admin langsung ya sob.', 'Open 24 Hours', '-6.9422333', '107.5946454', 4.8, '082121154431'),
(20, 'SARANA OUTDOOR Sewa Alat Camping Bandung Selatan', 'Jl. Kp. Kalapatilu Rumah No.10, RT.03/RW.02, Rancatungku, Kec. Pameungpeuk, Kabupaten Bandung, Jawa Barat 40376', 'Rental alat camping terbaik di Bandung Selatan. Sarana Outdoor merupakan tempat Penyewaan dan Penjualan Peralatan Outdoor.', '9.00 am–10.00 pm', '-7.021757', '107.5817915', 4.8, '081322677765'),
(21, 'Merapeak Outdoor', 'Komp. Margahayu Raya, Jl. Saturnus Sel. III Blk. H No.1, Margasari, Kec. Buahbatu, Kota Bandung, Jawa Barat 40286', 'Merapeak Outdoor adalah jenis bisnis yang menyediakan berbagai macam peralatan outdoor untuk disewakan kepada konsumen yang membutuhkan.', '9.00 am–5.00 pm', '-6.9540938', '107.6629617', 5, '089673625008'),
(22, 'Halfmoon Outdoor Sewa Alat Camp', 'Jl. Padasuka Atas No.55, RT.002/RW.005, Cimenyan, Kec. Cimenyan, Kabupaten Bandung, Jawa Barat 40197', 'Tempat sewa peralatan camping.', '8.00 am–10.00 pm', '-7.0040597', '107.5659051', 5, '0895361069197'),
(23, 'Rental Camping dan handytalkie Bandung', 'Jl. Manteron No.18, Sukaluyu, Kec. Cibeunying Kaler, Kota Bandung, Jawa Barat 40123', 'Sewa Peralatan camping, berlokasi di Cimenyan Bandung.', '9.00 am–9.00 pm', '-6.89553', '107.6304452', 4.3, '0895361069197'),
(24, 'Rental Camping Mapag Mega', 'kios bu lilis, Jl. Sendi Kencana jalan, Suka Asih, ujung, Kota Bandung, Jawa Barat 40233', 'Menyewakan alat alat outdoor seperti tenda dome, carrier dan sebagainya.', '8.00 am–10.00 pm', '-6.9328376', '107.5889805', 5, '089682316472'),
(25, 'TikDuk Outdoor Rental Camping', 'Jl. Anggaran I No.39, Cijaura, Kec. Buahbatu, Kota Bandung, Jawa Barat 40287', 'Sewa Peralatan camping, berlokasi di Bandung.', '6.00 am–10.00 pm', '-6.9556297', '107.6427381', 5, '085759677264'),
(26, 'Rental Alat Camping glester camp', 'Komplek Margaasih Permai, Jl. Jatiwangi Raya Blk. D11 No.9, Margaasih, Kec. Margaasih, Kabupaten Bandung, Jawa Barat 40125', 'SEWA PERALATAN OUTDOOR MURAH & TANPA RIBET. Katalog cek di @glester.camp WA 085798123373.', 'Open 24 hours', '-6.9393492', '107.5420268', 5, '085798123373'),
(27, 'KAI Outdoor Gear Rental', 'Jl. Boko I No.3, Melong, Kec. Cimahi Sel., Kota Cimahi, Jawa Barat 40534', 'Menyewakan peralatan camping terlengkap dengan harga terjangkau disertai kualitas produk yang baik.', '7.00 am–7.00 pm', '-6.918284', '107.559896', 4.8, '085150696961'),
(28, 'NINETHREE OUTDOOR Rental Alat Camping Bandung (Cicadas)', 'Jl Asber Gg. Bunga II No.10B 143d, Cicadas, Kec. Cibeunying Kidul, Kota Bandung, Jawa Barat 40121', 'Sewa Peralatan camping, berlokasi di Cibeunying Bandung.', '8.00 am–9.00 pm', '-6.9065922', '107.638648', 5, '083137724473'),
(29, 'Green Campus Outdoor', 'Jl. Cisasawi RT/RW 2/5 No 99, Jl. Cihanjuang No.KM 4 No.101, RT.01/RW.13, Cihanjuang, Kec. Parongpong, Kabupaten Bandung Barat, Jawa Barat 40559', 'Penyewaan perlengkapan alat outdoor, gunung dan camping di Bandung.', '8.00 am–10.00 pm', '-6.8525218', '107.5688661', 5, '082215598650'),
(30, 'RENTAL CAMPING HARDER MOUNTAIN', 'KP Jl. Babakan Cianjur No.19, RT.03/RW.10, Gadobangkong, Kec. Ngamprah, Kabupaten Bandung Barat, Jawa Barat 40552', 'Sewa Peralatan camping, berlokasi di Bandung.', '10.00 am–10.00 pm', '-6.871857', '107.5082123', 4.9, '082127442944'),
(31, 'Three Outdoor Rental Alat Camping', 'Gg. Ab0 No.19-30, Sekejati, Kec. Buahbatu, Kota Bandung, Jawa Barat 40286', 'Three_outdoor adalah tempat persewaan peralatan camping dengan pelayanan antar barang atau ambil di tempat.', '8.00 am–9.00 pm', '-6.9462101', '107.6507173', 5, '0895110006064'),
(32, 'Pesagi Outdoor Equipment Rental Alat Camping Bandung', 'Jl. Sukahaji Wetan No.38, RT.04/RW.07, Sukarasa, Kec. Sukasari, Kota Bandung, Jawa Barat 40152', 'Sewa Peralatan camping Tenda dll.', '9.00 am–5.00 pm', '-6.8727649', '107.5853866', 4.8, '085609556216'),
(33, 'Rental Camping Alf Gear Adventure', 'Gg. Perikanan 2 No.56, RT./RW/RW.003/005, Pelindung Hewan, Kec. Astanaanyar, Kota Bandung, Jawa Barat 40242', 'Menyewakan berbagai macam jenis kebutuhan camping', '6:00 am–11:00 pm', '-6.9395308', '107.6028211', 5, '08122177723'),
(34, 'Kalimaya Outdoor Gear Rental/Sewa Alat Camping', 'Komplek permata cimahi, Jl. Kalimaya Raya No.29 Blok M4, Tanimulya, Kec. Ngamprah, Kabupaten Bandung Barat, Jawa Barat 40552', 'Menyediakan perlengkapan Hiking, Camping, Naik Gunung', '8:00 am–9:00 pm', '-6.8606134', '107.5188338', 5, '082337487577'),
(35, 'Edelweis Outdoor jual&rental alat camping padalarang', 'Jl. Ciloa No.84, Mekarsari, Kec. Ngamprah, Kabupaten Bandung Barat, Jawa Barat 40552', '\"Edelwies Outdoor\" Merupakan Toko Perlengkapan Alat Gunung & layanan Sewa Alat Camping Padalarang dan sekitarnya.', '9:00 am–11:30 pm', '-6.8400526', '107.5081218', 5, '085210008996'),
(36, 'NEPTUNUS OUTDOOR', 'Jl. Abdulrahman No.13 A, Setiamanah, Kec. Cimahi Tengah, Kota Cimahi, Jawa Barat 40524', 'Sudah di buka Rental alat camping neptunus outdoor', '8:00 am–10:00 pm', '-6.8845', '107.5306029', 4.8, '085795832743'),
(37, 'NUANSA OUTDOOR', 'Kp Nyalindung No.26, Singajaya, Kec. Cihampelas, Kabupaten Bandung Barat, Jawa Barat 40767', 'Rental Peralatan Camping & Pendakian di Bandung Barat', '8:00 am–8:00 pm', '-6.9372323', '107.4764309', 5, '081221428681'),
(38, 'GHAZI OUTDOOR', 'Jatihandap No 2 RT 04/09, Depan mesjid As-Siraj, Jl. Jatihandap No.2, Jatihandap, Kec. Mandalajati, Kota Bandung, Jawa Barat 40195', 'Sewa Rental dan jual peralatan Camping / Outdoor', 'Open 24 hours', '-6.8932974', '107.6615151', 4.5, '0895361069197'),
(39, 'SABANA Camp Adventure Equipment', 'Jl. Panembakan Utara Jl. Warung Contong No.16, RT.01/RW.05, Setiamanah, Kec. Cimahi Tengah, Kota Cimahi, Jawa Barat 40526', 'Tempat penyewaan berbagai peralatan outdoor untuk camping', '8:00 am–10:00 pm', '-6.8805191', '107.5308819', 4.7, '081286387680'),
(40, 'Zangkar Outdoor', 'Jl. Gegerkalong Hilir No.114, Gegerkalong, Kec. Sukasari, Kota Bandung, Jawa Barat 40153', 'Sewa Peralatan camping, berlokasi di bandung', '8:00 am - 8:00 pm', '-6.8685949', '107.5864723', 4.1, '0895361069197'),
(41, 'REDLINE OUTDOOR EQUIPMENT', 'Jl. Sangkuriang Mukti No.109, Padasuka, Kec. Cimahi Tengah, Kota Cimahi, Jawa Barat 40526', 'REDLINE OUTDOORS EQUIPMENT menyewakan peralatan kemping.', '7:00 am–10:00 pm', '-6.8734665', '107.5247997', 4.9, '081220640799'),
(42, 'GeoCamp', 'Komp. Puri Dago, Jl. Puri Dago IV No.4, Sukamiskin, Kec. Antapani, Kota Bandung, Jawa Barat 40293', 'Melayani jasa penyewaan (rental) peralatan camping', '9:00 am–5:00 pm', '-6.9184503', '107.6686732', 4.9, '08112346630'),
(43, 'Oase Outdoor Bandung', 'Jl. Terusan Buah Batu No.161, Kujangsari, Kec. Bandung Kidul, Kota Bandung, Jawa Barat 40288', 'Toko kami tersedia berbagai macam peralatan Outdoor', '8:00 am–10:00 pm', '-6.9572882', '107.6396379', 4.9, '081321704210'),
(44, 'Malabar Outdoor Rental Sewa Alat Camping Bandung', 'Jalan Raya Bojongsoang 175, Gang Desa No.42A, Kec. Bojongsoang, Kabupaten Bandung, Jawa Barat 40287', 'Menjual dan menyewakan peralatan outdoor dan camping', '9.00 am–8.00 pm', '-6.9762469', '107.6349449', 4.9, '08997898894'),
(45, 'Jejaka Outdoor, Rental Alat Camping Bandung', 'Komplek Cibogo Indah No.36 A, Cangkuang Kulon, Kec. Dayeuhkolot, Kabupaten Bandung, Jawa Barat 40239', 'Tempat Sewa Alat Camping Bandung', '8.00 am–8.00 pm', '-6.9725147', '107.5946833', 4.8, '08999016417'),
(46, 'May camp adventure', 'Bojong Koneng Barat RT 06 RW 06 No 44 Kelurahan, Campaka, Kec. Andir, Kota Bandung, Jawa Barat 40184', 'Menyewakan alat alat camp mulai dari tenda kapasitas 2-3 3-4 orang carier kapasitas 45-80lt dan masih banyak lagi. Mudah kan petualangan anda dengan menyewa di May Camp Adventure, salam rimba!', '8.00 am–10.00 pm', '-6.8965014', '107.5671498', 4.8, '08953610691'),
(47, 'MOUNTGEAR Rental Alat Camping Bandung (Garasi Cempor)', 'Garasi Cempor- Gelanggang Taruna Karees, Jl. Martanegara No.4, Turangga, Kec. Lengkong, Kota Bandung, Jawa Barat 40263', 'Rental Alat Camping Bandung, Sewa Alat Camping Bandung', '8.00 am–8.30 pm', '-6.9330518', '107.6268184', 5, '083137724473'),
(48, 'Rental Alat Camping Bandung VIKTOR OUTDOOR BANDUNG Cibiru', 'Jalan Pandanwangi 3 RT 1 RW 19 Kelurahan Cinunuk Kecamatan Cileunyi Kabupaten Bandung, 50 meter dari Indomaret Pandanwangi samping pom mini, Kota Bandung, Jawa Barat 40622', 'Rental/sewa peralatan camping bandung, dan terima jasa bongkar pasang dan menerima buat acara event besar kantor maupun instansi dll.', '7.00 am–9.00 pm', '-6.9441254', '107.7258448', 4.9, '082129191124'),
(49, 'ALPEN OUTDOOR GEAR RENT', 'Jl. Haur Pancuh Gg I Haurmekar RT.01, RT.01/RW.01, Sadang Serang, Kecamatan Coblong, Kota Bandung, Jawa Barat 40133', 'Toko pusatnya penyewaan peralatan/perlengkapan naik Gunung dan peralatan/pelengkapan Camping terlengkap di pusat kota Bandung. Lokasi strategis dekat Gedung Sate, Unpad Dipati Ukur, dan Monumen Perjuangan Rakyat Jawa Barat.', '8.00 am–9.00 pm', '-6.8939381', '107.6194547', 4.8, '082127972299'),
(50, 'Lamping Adventure Camping Equipment Rental and Outdoor Equipment Shop', 'Jl. Komp. Mega Brata, Margasari, Kec. Buahbatu, Kota Bandung, Jawa Barat 40286', 'Lamping Adventure jual dan sewa alat camping yang lengkap, dengan harga terjangkau untuk semua kalangan. Untuk peminjaman alat bisa konfirmasi melalui WA 081399069342.', '8.00 am–9.30 pm', '-6.9579251', '107.6579928', 4.7, '081399069342'),
(51, 'YUNSUKA Rental Camp Kopo', 'Jl. Raya Kopo Gg. Babakan Asih, RT.08/RW.01, Panjunan, Kec. Bojongloa Kaler, Kota Bandung, Jawa Barat 40232', 'Menyewakan berbagai macam alat camping, hiking, touring. Menerima jasa pengiriman, pemasangan untuk event dan gathering komunitas, kantor, dan family camp, serta layanan laundry tenda.', '7.00 am–7.00 pm', '-6.9303925', '107.5956866', 4.8, '087700149614'),
(52, 'Odyssey Outdoor', 'Jln Babakan Sari No.15, Cipatik, Kec. Cihampelas, Kabupaten Bandung Barat, Jawa Barat 40562', 'Menjual dan menyewakan perlengkapan alat outdoor dan camping.', '9.00 am–9.00 pm', '-6.9409184', '107.5075594', 5, '081314150752'),
(53, 'Saboga Rental Camping', 'Puspa Regency Blok B No. 188, Bandung, Jawa Barat 40561', 'Sewa peralatan camping, berlokasi di Cimenya Bandung.', '8.00 am–10.00 pm', '-6.9170131', '107.4983142', 4.9, '081909432000');

-- --------------------------------------------------------

--
-- Table structure for table `user`
--

CREATE TABLE `user` (
  `id` int(11) NOT NULL,
  `username` varchar(20) NOT NULL,
  `password` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `user`
--

INSERT INTO `user` (`id`, `username`, `password`) VALUES
(1, 'admin', 'admin');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` int(11) NOT NULL,
  `username` varchar(50) NOT NULL,
  `password` varchar(255) NOT NULL,
  `alamat` varchar(100) NOT NULL,
  `tanggal_lahir` date NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Indexes for dumped tables
--

--
-- Indexes for table `toko`
--
ALTER TABLE `toko`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `username` (`username`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `toko`
--
ALTER TABLE `toko`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=54;

--
-- AUTO_INCREMENT for table `user`
--
ALTER TABLE `user`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
