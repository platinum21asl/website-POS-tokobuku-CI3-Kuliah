-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jun 18, 2022 at 07:44 PM
-- Server version: 10.4.20-MariaDB
-- PHP Version: 7.3.29

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `tokobuku`
--

-- --------------------------------------------------------

--
-- Table structure for table `author`
--

CREATE TABLE `author` (
  `author_id` int(5) NOT NULL,
  `fullname` varchar(250) NOT NULL,
  `email` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `author`
--

INSERT INTO `author` (`author_id`, `fullname`, `email`) VALUES
(1, 'Daniel Renato Marlen', 'silverdaniel21@gmail.com'),
(2, 'Sangonomiya Kokomi', 'sangokokomi25@gmail.com'),
(3, 'Ganyu', 'ganyu90@gmail.com'),
(4, 'Keqing', 'keqing25@gmail.com'),
(5, 'Barbara', 'barbara21@gmail.com'),
(6, 'Amber', 'amber25@gmail.com');

-- --------------------------------------------------------

--
-- Table structure for table `book`
--

CREATE TABLE `book` (
  `book_id` int(11) NOT NULL,
  `title` varchar(150) NOT NULL,
  `description` varchar(500) NOT NULL,
  `release_year` varchar(5) NOT NULL,
  `pages` int(11) NOT NULL,
  `price` int(11) NOT NULL,
  `discount` decimal(2,2) NOT NULL,
  `stock` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `book`
--

INSERT INTO `book` (`book_id`, `title`, `description`, `release_year`, `pages`, `price`, `discount`, `stock`) VALUES
(1, 'Sango', 'Kokomi', '2021', 23, 50000, '0.99', 3199),
(2, 'Sango', 'Kokomi', '2021', 23, 50000, '0.99', 1512),
(3, 'Renato', 'Karena', '2029', 12, 170000, '0.99', 2746),
(4, 'Case', 'Sebuah kasus di wilayah inggris', '1890', 32, 99000, '0.99', 1799);

-- --------------------------------------------------------

--
-- Table structure for table `book_author`
--

CREATE TABLE `book_author` (
  `book_author_id` int(11) NOT NULL,
  `author_id` int(11) NOT NULL,
  `book_id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `book_author`
--

INSERT INTO `book_author` (`book_author_id`, `author_id`, `book_id`) VALUES
(1, 5, 3),
(2, 1, 4),
(3, 4, 1),
(4, 3, 2);

-- --------------------------------------------------------

--
-- Table structure for table `book_bookcat`
--

CREATE TABLE `book_bookcat` (
  `book_bookcat_id` int(11) NOT NULL,
  `book_id` int(11) NOT NULL,
  `book_category_id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `book_bookcat`
--

INSERT INTO `book_bookcat` (`book_bookcat_id`, `book_id`, `book_category_id`) VALUES
(1, 3, 3),
(2, 4, 1),
(3, 1, 2),
(4, 2, 2),
(5, 2, 3);

-- --------------------------------------------------------

--
-- Table structure for table `book_category`
--

CREATE TABLE `book_category` (
  `book_category_id` int(11) NOT NULL,
  `name` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `book_category`
--

INSERT INTO `book_category` (`book_category_id`, `name`) VALUES
(1, 'Novel'),
(2, 'Bussiness'),
(3, 'Computer'),
(4, 'Manga'),
(5, 'Pengetahuan Alam'),
(6, 'Bahasa'),
(10, 'Nihono');

-- --------------------------------------------------------

--
-- Table structure for table `customer`
--

CREATE TABLE `customer` (
  `customer_id` int(11) NOT NULL,
  `name` varchar(100) NOT NULL,
  `email` varchar(100) NOT NULL,
  `no_member` varchar(100) NOT NULL,
  `gender` varchar(100) NOT NULL,
  `phone` varchar(100) NOT NULL,
  `address` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `customer`
--

INSERT INTO `customer` (`customer_id`, `name`, `email`, `no_member`, `gender`, `phone`, `address`) VALUES
(1, 'Daniel Renato Marlen', 'sherlockdaniel48691@gmail.com', '0009', 'Laki-laki', '082329415585', 'Pontianak'),
(2, 'Richard Gunawan ', 'richard24@gmail.com', '002', 'Laki-laki', '082625234512', 'Yogyakarta'),
(3, 'Yohanes Malvin Buntoro', 'buntoro23@gmail.com', '003', 'Laki-laki', '082356516635', 'Putusibau'),
(4, 'Michael Ezra Lianto', 'lianto32@gmail.com', '004', 'Laki-laki', '085625365542', 'Solo'),
(5, 'Lolita Chandra Budikusuma', 'budi42@gmail.com', '005', 'Perempuan', '086535441662', 'Lampung'),
(6, 'Tiffany', 'tiff99@gmail.com', '006', 'Perempuan', '082329415585', 'Pontianak');

-- --------------------------------------------------------

--
-- Table structure for table `d_pembelian`
--

CREATE TABLE `d_pembelian` (
  `d_pembelian_id` int(11) NOT NULL,
  `book_id` int(11) NOT NULL,
  `discount` decimal(5,2) NOT NULL,
  `amount` int(11) NOT NULL,
  `buy_price_pcs` int(11) NOT NULL,
  `total_price` int(11) NOT NULL,
  `pembelian_id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `d_pembelian`
--

INSERT INTO `d_pembelian` (`d_pembelian_id`, `book_id`, `discount`, `amount`, `buy_price_pcs`, `total_price`, `pembelian_id`) VALUES
(1, 1, '0.00', 1, 0, 49505, 1),
(2, 2, '0.00', 1, 0, 49505, 1),
(3, 1, '0.00', 1, 0, 49505, 2),
(4, 2, '0.00', 2, 0, 99010, 2),
(5, 3, '0.00', 1, 0, 168317, 3),
(6, 1, '0.00', 1, 0, 75000000, 4),
(7, 2, '0.00', 1, 0, 75000000, 5),
(8, 3, '0.00', 2, 0, 442000000, 5),
(9, 4, '0.00', 1, 0, 178200000, 5),
(10, 1, '0.00', 500, 0, 25000000, 6);

-- --------------------------------------------------------

--
-- Table structure for table `d_penjualan`
--

CREATE TABLE `d_penjualan` (
  `d_penjualan_id` int(11) NOT NULL,
  `book_id` int(11) NOT NULL,
  `amount` int(5) NOT NULL,
  `total_price` int(11) NOT NULL,
  `penjualan_id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `d_penjualan`
--

INSERT INTO `d_penjualan` (`d_penjualan_id`, `book_id`, `amount`, `total_price`, `penjualan_id`) VALUES
(1, 3, 1, 168317, 1),
(2, 4, 3, 294060, 2),
(3, 2, 1, 49505, 3),
(4, 4, 4, 392080, 3),
(5, 3, 2, 336634, 4),
(6, 1, 600, 29703000, 5);

-- --------------------------------------------------------

--
-- Table structure for table `employee`
--

CREATE TABLE `employee` (
  `employee_id` int(11) NOT NULL,
  `nip` varchar(255) NOT NULL,
  `name` varchar(255) NOT NULL,
  `gender` varchar(255) NOT NULL,
  `phone` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `password` varchar(255) NOT NULL,
  `address` varchar(255) NOT NULL,
  `level_id` int(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `employee`
--

INSERT INTO `employee` (`employee_id`, `nip`, `name`, `gender`, `phone`, `email`, `password`, `address`, `level_id`) VALUES
(9, '191710096', 'Daniel Renato Marlen', 'Laki-Laki', '082329415585', '191710096@students.uajy.ac.id', '$2y$10$25dpAghoL5VqqFRVeD1l4eO17HyZLiTvzwJhIBRa3dvb1I12oyUcK', 'Balai sebut, dusun perintis. JL. Macan Luar', 3),
(10, '12345', 'abc', 'Laki', '0523', 'sherlockdaniel4869@gmail.com', '$2y$10$251buLJGkNUo9DC96GI2uuB80fxyH1j7N6dvf5Ja/PUJrT19zejdS', 'sembarang', 3),
(11, '456', 'vanny', 'Laki-laki', '456789', 'vanny23@gmail.com', '$2y$10$qmK1GjTWRUT6.9CKzM5ZUO.XzRwXsiRgERf8/T86ay61vq91w0oXO', 'Kuliah', 4);

-- --------------------------------------------------------

--
-- Table structure for table `level`
--

CREATE TABLE `level` (
  `level_id` int(11) NOT NULL,
  `name` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `level`
--

INSERT INTO `level` (`level_id`, `name`) VALUES
(1, 'Bintang 1'),
(2, 'Bintang 2'),
(3, 'Bintang 3'),
(4, 'Bintang 4'),
(5, 'Bintang 5'),
(6, 'Bintang 6');

-- --------------------------------------------------------

--
-- Table structure for table `pembelian`
--

CREATE TABLE `pembelian` (
  `pembelian_id` int(11) NOT NULL,
  `kode_beli` varchar(50) NOT NULL,
  `employee_id` int(11) NOT NULL,
  `supplier_id` int(11) NOT NULL,
  `buy_date` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `pembelian`
--

INSERT INTO `pembelian` (`pembelian_id`, `kode_beli`, `employee_id`, `supplier_id`, `buy_date`) VALUES
(1, 'PNB000000001', 9, 1, '2021-11-09 13:39:48'),
(2, 'PNB000000002', 9, 3, '2021-11-16 13:40:40'),
(3, 'PNB000000003', 9, 4, '2021-10-31 14:08:53'),
(4, ' PNB000000004', 9, 1, '2021-10-01 20:56:00'),
(5, ' PNB000000005', 9, 2, '2021-10-15 21:19:57'),
(6, ' PNB000000006', 9, 4, '2021-11-28 22:08:28');

-- --------------------------------------------------------

--
-- Table structure for table `penjualan`
--

CREATE TABLE `penjualan` (
  `penjualan_id` int(11) NOT NULL,
  `kode_jual` varchar(50) NOT NULL,
  `customer_id` int(11) NOT NULL,
  `employee_id` int(11) NOT NULL,
  `sale_date` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `penjualan`
--

INSERT INTO `penjualan` (`penjualan_id`, `kode_jual`, `customer_id`, `employee_id`, `sale_date`) VALUES
(1, 'PNJ000000001', 1, 9, '2021-10-28 14:25:52'),
(2, 'PNJ000000002', 6, 9, '2021-11-13 14:28:25'),
(3, 'PNJ000000003', 2, 9, '2021-10-31 14:37:00'),
(4, 'PNJ000000004', 1, 9, '2021-11-16 14:07:21'),
(5, 'PNJ000000005', 4, 9, '2021-10-01 20:56:54');

-- --------------------------------------------------------

--
-- Table structure for table `supplier`
--

CREATE TABLE `supplier` (
  `supplier_id` int(11) NOT NULL,
  `name` varchar(100) NOT NULL,
  `email` varchar(100) NOT NULL,
  `phone` varchar(100) NOT NULL,
  `address` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `supplier`
--

INSERT INTO `supplier` (`supplier_id`, `name`, `email`, `phone`, `address`) VALUES
(1, 'Amazon', 'amazom24@gmail.com', '62516126', 'Amerika'),
(2, 'Gramedia', 'gramedia34@gmail.com', '15185315', 'Pontianak'),
(3, 'bukujd', 'bukujd32@gmail.com', '13531462', 'Putusibau'),
(4, 'tokopedia', 'tokopedia243@gmail.com', '654535', 'Jakarta'),
(5, 'bukalapak', 'bukalapak78@gmail.com', '3513138581', 'Bandung'),
(6, 'toko jaya buku', 'jayabuku28@gmail.com', '15453135', 'Sanggau');

-- --------------------------------------------------------

--
-- Table structure for table `user`
--

CREATE TABLE `user` (
  `id` int(11) NOT NULL,
  `name` varchar(128) NOT NULL,
  `email` varchar(158) NOT NULL,
  `password` varchar(255) NOT NULL,
  `level_id` int(11) NOT NULL,
  `data_created` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `user`
--

INSERT INTO `user` (`id`, `name`, `email`, `password`, `level_id`, `data_created`) VALUES
(6, 'Daniel Renato Marlen', 'silverdaniel21@gmail.com', '$2y$10$HFg9lIQmM9AUQnoMK9qKWusO3VMZ5emGw92B6ZW///gwVBI3bU75e', 1, 1636441903),
(7, 'Fullname', 'lok@gmail.com', '$2y$10$FYk4kzTY4i5wzvLOWmE8HOHlxIl3mBy9trudS9mlxBJ6wv2cfctzi', 1, 1639640026),
(8, 'Anya', 'data@gmail.com', '$2y$10$.xhYS8qOIyLAzL/mDfw6oeyv5LAgsjRYAHY3.o4ZT3Y.IWSxOVl5y', 1, 1654971526);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `author`
--
ALTER TABLE `author`
  ADD PRIMARY KEY (`author_id`);

--
-- Indexes for table `book`
--
ALTER TABLE `book`
  ADD PRIMARY KEY (`book_id`);

--
-- Indexes for table `book_author`
--
ALTER TABLE `book_author`
  ADD PRIMARY KEY (`book_author_id`),
  ADD KEY `book_author` (`author_id`),
  ADD KEY `book-author` (`book_id`);

--
-- Indexes for table `book_bookcat`
--
ALTER TABLE `book_bookcat`
  ADD PRIMARY KEY (`book_bookcat_id`),
  ADD KEY `book_id` (`book_id`),
  ADD KEY `book_category_id` (`book_category_id`);

--
-- Indexes for table `book_category`
--
ALTER TABLE `book_category`
  ADD PRIMARY KEY (`book_category_id`);

--
-- Indexes for table `customer`
--
ALTER TABLE `customer`
  ADD PRIMARY KEY (`customer_id`);

--
-- Indexes for table `d_pembelian`
--
ALTER TABLE `d_pembelian`
  ADD PRIMARY KEY (`d_pembelian_id`),
  ADD KEY `d_pembelian` (`book_id`),
  ADD KEY `pembelian_id` (`pembelian_id`);

--
-- Indexes for table `d_penjualan`
--
ALTER TABLE `d_penjualan`
  ADD PRIMARY KEY (`d_penjualan_id`),
  ADD KEY `d_penjualan` (`book_id`),
  ADD KEY `d-penjualan` (`penjualan_id`);

--
-- Indexes for table `employee`
--
ALTER TABLE `employee`
  ADD PRIMARY KEY (`employee_id`),
  ADD KEY `Employee` (`level_id`);

--
-- Indexes for table `level`
--
ALTER TABLE `level`
  ADD PRIMARY KEY (`level_id`);

--
-- Indexes for table `pembelian`
--
ALTER TABLE `pembelian`
  ADD PRIMARY KEY (`pembelian_id`),
  ADD KEY `employee_id` (`employee_id`),
  ADD KEY `supplier_id` (`supplier_id`);

--
-- Indexes for table `penjualan`
--
ALTER TABLE `penjualan`
  ADD PRIMARY KEY (`penjualan_id`),
  ADD KEY `customer_id` (`customer_id`),
  ADD KEY `employee_id` (`employee_id`);

--
-- Indexes for table `supplier`
--
ALTER TABLE `supplier`
  ADD PRIMARY KEY (`supplier_id`);

--
-- Indexes for table `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `author`
--
ALTER TABLE `author`
  MODIFY `author_id` int(5) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=32;

--
-- AUTO_INCREMENT for table `book`
--
ALTER TABLE `book`
  MODIFY `book_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `book_author`
--
ALTER TABLE `book_author`
  MODIFY `book_author_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `book_bookcat`
--
ALTER TABLE `book_bookcat`
  MODIFY `book_bookcat_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `book_category`
--
ALTER TABLE `book_category`
  MODIFY `book_category_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=15;

--
-- AUTO_INCREMENT for table `customer`
--
ALTER TABLE `customer`
  MODIFY `customer_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;

--
-- AUTO_INCREMENT for table `d_pembelian`
--
ALTER TABLE `d_pembelian`
  MODIFY `d_pembelian_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- AUTO_INCREMENT for table `d_penjualan`
--
ALTER TABLE `d_penjualan`
  MODIFY `d_penjualan_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `employee`
--
ALTER TABLE `employee`
  MODIFY `employee_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;

--
-- AUTO_INCREMENT for table `level`
--
ALTER TABLE `level`
  MODIFY `level_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;

--
-- AUTO_INCREMENT for table `pembelian`
--
ALTER TABLE `pembelian`
  MODIFY `pembelian_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `penjualan`
--
ALTER TABLE `penjualan`
  MODIFY `penjualan_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `supplier`
--
ALTER TABLE `supplier`
  MODIFY `supplier_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;

--
-- AUTO_INCREMENT for table `user`
--
ALTER TABLE `user`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `book_author`
--
ALTER TABLE `book_author`
  ADD CONSTRAINT `book-author` FOREIGN KEY (`book_id`) REFERENCES `book` (`book_id`),
  ADD CONSTRAINT `book_author` FOREIGN KEY (`author_id`) REFERENCES `author` (`author_id`);

--
-- Constraints for table `book_bookcat`
--
ALTER TABLE `book_bookcat`
  ADD CONSTRAINT `book_bookcat_ibfk_1` FOREIGN KEY (`book_id`) REFERENCES `book_category` (`book_category_id`),
  ADD CONSTRAINT `book_bookcat_ibfk_2` FOREIGN KEY (`book_category_id`) REFERENCES `book_category` (`book_category_id`);

--
-- Constraints for table `d_pembelian`
--
ALTER TABLE `d_pembelian`
  ADD CONSTRAINT `d_pembelian` FOREIGN KEY (`book_id`) REFERENCES `book` (`book_id`),
  ADD CONSTRAINT `d_pembelian_ibfk_1` FOREIGN KEY (`pembelian_id`) REFERENCES `pembelian` (`pembelian_id`);

--
-- Constraints for table `d_penjualan`
--
ALTER TABLE `d_penjualan`
  ADD CONSTRAINT `d-penjualan` FOREIGN KEY (`penjualan_id`) REFERENCES `penjualan` (`penjualan_id`),
  ADD CONSTRAINT `d_penjualan` FOREIGN KEY (`book_id`) REFERENCES `book` (`book_id`);

--
-- Constraints for table `employee`
--
ALTER TABLE `employee`
  ADD CONSTRAINT `Employee` FOREIGN KEY (`level_id`) REFERENCES `level` (`level_id`);

--
-- Constraints for table `pembelian`
--
ALTER TABLE `pembelian`
  ADD CONSTRAINT `pembelian_ibfk_1` FOREIGN KEY (`employee_id`) REFERENCES `employee` (`employee_id`),
  ADD CONSTRAINT `pembelian_ibfk_2` FOREIGN KEY (`supplier_id`) REFERENCES `supplier` (`supplier_id`);

--
-- Constraints for table `penjualan`
--
ALTER TABLE `penjualan`
  ADD CONSTRAINT `penjualan_ibfk_1` FOREIGN KEY (`customer_id`) REFERENCES `customer` (`customer_id`),
  ADD CONSTRAINT `penjualan_ibfk_2` FOREIGN KEY (`employee_id`) REFERENCES `employee` (`employee_id`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
