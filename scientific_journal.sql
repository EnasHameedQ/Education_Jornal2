-- phpMyAdmin SQL Dump
-- version 5.0.3
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jul 17, 2021 at 10:44 PM
-- Server version: 10.4.14-MariaDB
-- PHP Version: 7.4.11

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `scientific_journal`
--

-- --------------------------------------------------------

--
-- Table structure for table `about_us`
--

CREATE TABLE `about_us` (
  `AB_id` int(2) NOT NULL,
  `AB_sub` varchar(50) NOT NULL,
  `AB_description` text NOT NULL,
  `AB_address` tinytext NOT NULL,
  `AB_mobile` int(15) NOT NULL,
  `AB_email` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `about_us`
--

INSERT INTO `about_us` (`AB_id`, `AB_sub`, `AB_description`, `AB_address`, `AB_mobile`, `AB_email`) VALUES
(1, 'Bio health', 'A Yemeni Pharmaceutical Company Interested in a Medical Scientific Journals.', 'Yemen_Snaa-Bihan st', 400700, 'Biohealth@info.com');

-- --------------------------------------------------------

--
-- Table structure for table `admin`
--

CREATE TABLE `admin` (
  `Id` int(2) NOT NULL,
  `name` varchar(50) NOT NULL,
  `email` varchar(30) NOT NULL,
  `password` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `admin`
--

INSERT INTO `admin` (`Id`, `name`, `email`, `password`) VALUES
(12, 'Enas Hameed', 'alqaadienas@gmail.com', '1234567890');

-- --------------------------------------------------------

--
-- Table structure for table `articles`
--

CREATE TABLE `articles` (
  `A_id` int(200) NOT NULL,
  `A_name` varchar(200) NOT NULL,
  `A_description` mediumtext NOT NULL,
  `A_img` mediumtext NOT NULL,
  `A_link` varchar(200) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `articles`
--

INSERT INTO `articles` (`A_id`, `A_name`, `A_description`, `A_img`, `A_link`) VALUES
(1, 'fol', 'gkgkh ', '', '	http://localhost/Education%20Jornal/'),
(3, 'ؤئيشئبئب', '56879696996', '24.jpg', 'http://localhost/Education%20Jornal/'),
(4, '68797', 'ث546679فاتبسفيف', '23.jpg', 'http://localhost/Education%20Jornal/Control_Panel/admin_control2.php'),
(5, 'soaad', 'soaadsoaa', 'girl.png', 'Control_Panel/admin_control2.php'),
(15, 'Nano', 'nmbhh', '', 'http://Education%20Jornal/Control_Panel/admin_control2.php'),
(16, 'fvg', 'vgbg', 'boy.png', 'http://Education%20Jornal/Control_Panel/admin_control2.php'),
(17, 'bbbbb', 'bbbb', 'girl.png', 'http://Education%20Jornal/Control_Panel/admin_control2.php'),
(18, 'ggggggggggg', 'ggggggggggggggggggg', 'girl chatting.png', 'http://Education%20Jornal/Control_Panel/admin_control2.php');

-- --------------------------------------------------------

--
-- Table structure for table `departments`
--

CREATE TABLE `departments` (
  `id` int(10) NOT NULL,
  `name` varchar(255) NOT NULL,
  `description` text NOT NULL,
  `img` mediumtext NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `departments`
--

INSERT INTO `departments` (`id`, `name`, `description`, `img`) VALUES
(10, 'المأمون_فرع شارع تعز', 'فرع شارع تعزفرع شارع تعزفرع شارع تعز', '../Control_Panel/uploaded_files/capsules.png'),
(13, 'nano', 'nano nanojdhtdrg', '../Control_Panel/uploaded_files/petri-dish.png'),
(14, 'the', 'ruyyg', '../Control_Panel/uploaded_files/capsules.png'),
(16, 'المأمون', 'fjymrjuyr', '../Control_Panel/uploaded_files/consulting (1).png'),
(17, '', '', ''),
(18, '', '', '');

-- --------------------------------------------------------

--
-- Table structure for table `email`
--

CREATE TABLE `email` (
  `E_id` int(2) NOT NULL,
  `E_email` varchar(100) NOT NULL,
  `E_name` varchar(30) NOT NULL,
  `E_phone` int(15) NOT NULL,
  `E_subject` varchar(30) NOT NULL,
  `E_description` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `home`
--

CREATE TABLE `home` (
  `H_id` int(10) NOT NULL,
  `H_img` varchar(10000) NOT NULL,
  `H_sub` varchar(30) NOT NULL,
  `H_desc` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `journals`
--

CREATE TABLE `journals` (
  `j_id` int(200) NOT NULL,
  `j_img` varchar(1000) NOT NULL,
  `j_name` text NOT NULL,
  `j_description` text NOT NULL,
  `j_pdf` varchar(300) NOT NULL,
  `d_id` int(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `journals`
--

INSERT INTO `journals` (`j_id`, `j_img`, `j_name`, `j_description`, `j_pdf`, `d_id`) VALUES
(23, '../Control_Panel/uploaded_files/capsules.png', 'capsules', 'capsulescapsulescapsulescapsulescapsulescapsulescapsulescapsules', 'uploaded_files/شهائد.pdf', 10),
(24, '../Control_Panel/uploaded_files/consulting(1).png', 'consulting(1)', 'c++ data structure', 'هياكل البيانات ++ c.pdf', 16),
(25, '../Control_Panel/uploaded_files/exercise.png', 'exercise', 'exeexerciseexercise rciseexercise', '../Control_Panel/uploaded_files/برمجة ويب للمبتدئين.pdf', 14);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `about_us`
--
ALTER TABLE `about_us`
  ADD PRIMARY KEY (`AB_id`);

--
-- Indexes for table `admin`
--
ALTER TABLE `admin`
  ADD PRIMARY KEY (`Id`);

--
-- Indexes for table `articles`
--
ALTER TABLE `articles`
  ADD PRIMARY KEY (`A_id`);

--
-- Indexes for table `departments`
--
ALTER TABLE `departments`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `home`
--
ALTER TABLE `home`
  ADD PRIMARY KEY (`H_id`);

--
-- Indexes for table `journals`
--
ALTER TABLE `journals`
  ADD PRIMARY KEY (`j_id`),
  ADD KEY `journals_ibfk_1` (`d_id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `about_us`
--
ALTER TABLE `about_us`
  MODIFY `AB_id` int(2) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `admin`
--
ALTER TABLE `admin`
  MODIFY `Id` int(2) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;

--
-- AUTO_INCREMENT for table `articles`
--
ALTER TABLE `articles`
  MODIFY `A_id` int(200) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=19;

--
-- AUTO_INCREMENT for table `departments`
--
ALTER TABLE `departments`
  MODIFY `id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=19;

--
-- AUTO_INCREMENT for table `home`
--
ALTER TABLE `home`
  MODIFY `H_id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=90;

--
-- AUTO_INCREMENT for table `journals`
--
ALTER TABLE `journals`
  MODIFY `j_id` int(200) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=36;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `journals`
--
ALTER TABLE `journals`
  ADD CONSTRAINT `journals_ibfk_1` FOREIGN KEY (`d_id`) REFERENCES `departments` (`id`) ON DELETE CASCADE ON UPDATE CASCADE;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
