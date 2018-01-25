-- phpMyAdmin SQL Dump
-- version 4.7.4
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jan 25, 2018 at 06:32 PM
-- Server version: 10.1.28-MariaDB
-- PHP Version: 5.6.32

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `login`
--

-- --------------------------------------------------------

--
-- Table structure for table `korisnici`
--

CREATE TABLE `korisnici` (
  `korisnik_id` int(10) NOT NULL,
  `ime` text COLLATE utf8_unicode_ci NOT NULL,
  `prezime` text COLLATE utf8_unicode_ci NOT NULL,
  `korisnicko` text COLLATE utf8_unicode_ci NOT NULL,
  `email` varchar(100) COLLATE utf8_unicode_ci NOT NULL,
  `sifra` varchar(32) COLLATE utf8_unicode_ci NOT NULL,
  `drzava` text COLLATE utf8_unicode_ci NOT NULL,
  `grad` text COLLATE utf8_unicode_ci NOT NULL,
  `adresa` text COLLATE utf8_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `korisnici`
--

INSERT INTO `korisnici` (`korisnik_id`, `ime`, `prezime`, `korisnicko`, `email`, `sifra`, `drzava`, `grad`, `adresa`) VALUES
(1, 'mladja', '', 'mladja', 'mladja@mladja.com', 'mladja', '', '', ''),
(2, 'pera', 'peric', 'pera95', 'mladen.93.ks@gmail.com', 'perapera', 'Srbija', 'KruÅ¡evac', 'Milosa Obilica 35'),
(3, 'mlade', 'Milosavljevic', 'mladja933', 'mladen.93.ks@gmail.com', 'mladja', 'Srbija', 'KruÅ¡evac', 'Milosa Obilica 35'),
(4, 'mika', 'mikic', 'mile', 'mile@miki.com', 'mikimile', 'Bosna', 'Sarajevo', 'Sarajevska'),
(5, 'mika', 'mikic', 'mile', 'mile@miki.com', 'mikimile', 'Bosna', 'Sarajevo', 'Sarajevska'),
(6, 'mika', 'mikic', 'mile', 'mile@miki.com', 'mikimile', 'Bosna', 'Sarajevo', 'Sarajevska'),
(7, 'mika', 'mikic', 'mile', 'mile@miki.com', 'sada', 'Bosna', 'Sarajevo', 'Sarajevska'),
(8, 'mika', 'mikic', 'mile', 'mile@miki.com', 'milelami', 'Bosna', 'Sarajevo', 'Sarajevska'),
(9, 'fsa', 'fsa', 'gdfa', 'sfa@gsd', 'fsafa', 'Makedonija', 'faf', 'fsaf'),
(10, 'fsa', 'gfd', 'gdf', 'aW3@gsdg', 'fsafsa', 'Hrvatska', 'asf', 'fsaf'),
(11, 'mladjo', 'milos', 'mladjko', 'mladja@maki.com', 'mladjamaki', 'Srbija', 'kraljevo', 'kraljevska'),
(12, 'gfdg', 'dgfdg', 'gfdgd', 'rsdfas@fsa', 'fsasa', 'Srbija', 'fsafa', 'sfas'),
(13, 'gfdg', 'dgfdg', 'gfdgd', 'rsdfas@fsa', 'fsasa', 'Srbija', 'fsafa', 'sfas'),
(14, 'mika', 'mile', 'miki ', 'mik@sda', 'mikamika', 'Bosna', 'mikic', 'mile'),
(15, 'fsafas', 'fsafsa', 'faaafs', 'fsa@fasf', 'fafsaf', 'Hrvatska', 'fsasf', 'fsafa'),
(16, 'fagfa', 'fdsa', 'gdsgs', 'faafa@safaf', 'fsasf', 'Slovenija', 'fsafsa', 'fsafas'),
(17, 'fsaf', 'fsaf', 'fsaf', 'asda@fsa', 'fsaf', 'Bosna', 'fassf', 'fsasf'),
(18, 'fsaf', 'fsaf', 'fsaf', 'asda@fsa', 'fsa', 'Bosna', 'fassf', 'fsasf'),
(19, 'fsa', 'fassf', 'sfaf', 'fsa@sfa', 'fsafa', 'Srbija', 'fas', 'fsa'),
(20, 'fas', 'fds', 'fs', 'fsa@fasf', 'asf', 'Bosna', 'safa', 'afaf');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `korisnici`
--
ALTER TABLE `korisnici`
  ADD PRIMARY KEY (`korisnik_id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `korisnici`
--
ALTER TABLE `korisnici`
  MODIFY `korisnik_id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=21;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
