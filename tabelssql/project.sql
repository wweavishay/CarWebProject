-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: דצמבר 24, 2023 בזמן 09:05 AM
-- גרסת שרת: 10.4.25-MariaDB
-- PHP Version: 8.1.10

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `project`
--

-- --------------------------------------------------------

--
-- מבנה טבלה עבור טבלה `cars`
--

CREATE TABLE `cars` (
  `carname` varchar(30) NOT NULL,
  `price` int(11) NOT NULL,
  `startdate` date NOT NULL,
  `enddate` date NOT NULL,
  `location` varchar(30) NOT NULL,
  `image` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- הוצאת מידע עבור טבלה `cars`
--

INSERT INTO `cars` (`carname`, `price`, `startdate`, `enddate`, `location`, `image`) VALUES
('mazzda', 150, '2022-12-20', '2022-12-26', 'tel aviv', 'mazzda1'),
('BMW', 1212, '2022-12-25', '2023-01-04', 'tel aviv', 'BMW1'),
('kia', 70, '2022-12-12', '2023-01-15', 'ramat gan', 'KIA1'),
('bmw', 12, '2022-12-21', '2022-12-23', 'tel aviv', 'BMW2'),
('bmw', 300, '2022-12-23', '2022-12-23', 'tel aviv', 'BMW3'),
('mazzda', 150, '2022-12-20', '2022-12-26', 'tel aviv', 'mazzda2'),
('BMW', 1212, '2022-12-25', '2023-01-04', 'tel aviv', 'bmw2'),
('kia', 70, '2022-12-12', '2023-01-15', 'ramat gan', 'kia2'),
('bmw', 12, '2022-12-21', '2022-12-23', 'tel aviv', 'bmw4'),
('bmw', 300, '2022-12-23', '2022-12-23', 'tel aviv', 'bmw5'),
('kia', 70, '2022-12-12', '2023-01-15', 'tel aviv', 'kia3'),
('mazzda', 150, '2022-12-20', '2022-12-26', 'ramat gan', 'mazzda1'),
('BMW', 1212, '2022-12-25', '2023-01-04', 'ramat gan', 'BMW1'),
('kia', 70, '2022-12-12', '2023-01-15', 'ramat gan', 'KIA1'),
('bmw', 12, '2022-12-21', '2022-12-23', 'ramat gan', 'BMW2'),
('bmw', 300, '2022-12-23', '2022-12-23', 'tel aviv', 'BMW3'),
('mazzda', 150, '2022-12-20', '2022-12-26', 'ashdod', 'mazzda2'),
('BMW', 1212, '2022-12-25', '2023-01-04', 'ashdod', 'bmw2'),
('kia', 70, '2022-12-12', '2023-01-15', 'ashdod', 'kia3'),
('bmw', 12, '2022-12-21', '2022-12-23', 'ashdod', 'bmw4'),
('bmw', 300, '2022-12-23', '2022-12-23', 'ashdod', 'bmw6'),
('kia', 70, '2022-12-12', '2023-01-15', 'ashdod', 'kia4');

-- --------------------------------------------------------

--
-- מבנה טבלה עבור טבלה `order`
--

CREATE TABLE `order` (
  `numorder` int(11) NOT NULL,
  `totalprice` varchar(24) NOT NULL,
  `dateorder` varchar(24) NOT NULL,
  `custname` varchar(25) NOT NULL,
  `startdate` varchar(24) NOT NULL,
  `enddate` varchar(24) NOT NULL,
  `carname` varchar(25) NOT NULL,
  `imgcar` varchar(10000) NOT NULL,
  `email` varchar(25) NOT NULL,
  `dropstation` varchar(25) NOT NULL,
  `pickstation` varchar(25) NOT NULL,
  `cardnum` varchar(25) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- הוצאת מידע עבור טבלה `order`
--

INSERT INTO `order` (`numorder`, `totalprice`, `dateorder`, `custname`, `startdate`, `enddate`, `carname`, `imgcar`, `email`, `dropstation`, `pickstation`, `cardnum`) VALUES
(4, '547$', '2023-1-3', 'daaaa', '2023-01-05', '2023-01-20', 'Skoda Fabia', '../images/cars/car2.jpg', 'acaaaaaac@gmail.com', 'Jerusalem', 'Jerusalem', '4'),
(5, '332$', '2023-1-3', 'danaa', '2023-01-04', '2023-01-19', 'Skoda Fabia', '../images/cars/car2.jpg', 'acaaaaaac@gmail.com', 'Tel Aviv', 'Jerusalem', '5'),
(6, '427$', '2023-1-5', 'abla als', '2023-01-19', '2023-01-21', 'Skoda Fabia', '../images/cars/car2.jpg', 'a@gmail.com', 'Tel Aviv', 'Jerusalem', '6'),
(7, '689$', '2023-1-12', 'dana', '2023-01-17', '2023-01-26', '                      Sko', '../images/cars/car3.jpg', 'a11@gmail.com', 'Jerusalem', 'Jerusalem', '4580 4646 4646 4646'),
(8, '689$', '2023-1-12', 'dani1', '2023-01-17', '2023-01-26', '                      Sko', '../images/cars/car3.jpg', 'a@gmail.com', 'Jerusalem', 'Jerusalem', '4580 6464 6546 4643'),
(9, '689$', '2023-1-12', 'avishayAAA', '2023-01-17', '2023-01-26', '                      Sko', '../images/cars/car3.jpg', 'a@gmail.com', 'Jerusalem', 'Jerusalem', '4580 6756 7676 7676'),
(10, '738$', '2023-1-12', 'avishay', '2023-01-17', '2023-01-19', '', '../images/cars/car2.jpg', 'a@gmail.com', 'Jerusalem', 'Jerusalem', '4580 6765 7676 7676'),
(11, '', '', '', '', '', '', '', '', '', '', ''),
(13, '555$', '2023-1-12', 'avishay', '2023-01-24', '2023-01-26', 'Skoda Fabia', '../images/cars/car2.jpg', 'a@gmail.com', 'Jerusalem', 'Jerusalem', '4580 5654 6566 4654');

--
-- Indexes for dumped tables
--

--
-- אינדקסים לטבלה `order`
--
ALTER TABLE `order`
  ADD PRIMARY KEY (`numorder`),
  ADD UNIQUE KEY `numorder` (`numorder`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
