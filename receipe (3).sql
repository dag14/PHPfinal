-- phpMyAdmin SQL Dump
-- version 5.0.2
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1:3306
-- Generation Time: Apr 12, 2021 at 07:49 AM
-- Server version: 5.7.31
-- PHP Version: 7.3.21

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `receipe`
--

-- --------------------------------------------------------

--
-- Table structure for table `comments`
--

DROP TABLE IF EXISTS `comments`;
CREATE TABLE IF NOT EXISTS `comments` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `comment` tinytext,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=6 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `comments`
--

INSERT INTO `comments` (`id`, `comment`) VALUES
(1, 'jjjkjkjkjkjjkjkkjkkkknj jjkkjkbkjbbjkbbkkj jnkbbkjbkjkjbkkbbkjbjkbkbjkbjkbkkbjbkjadblilefwbbiuewqbufequibfebubuwuebuiwieufbbiiyfebibeiibfbuiefubeifbiwbefnknakankankkankakaadjnfkjfbfjbjjksbfbkjsfbjkdbjkdfbdljala;a;a;;a;a'),
(2, 'wjjfjqk fjkwfkjwf'),
(3, 'migeb u ayitemem'),
(4, 'special'),
(5, 'good');

-- --------------------------------------------------------

--
-- Table structure for table `content`
--

DROP TABLE IF EXISTS `content`;
CREATE TABLE IF NOT EXISTS `content` (
  `Id` int(11) NOT NULL AUTO_INCREMENT,
  `file` varchar(300) NOT NULL,
  `type` varchar(300) NOT NULL,
  `size` varchar(300) NOT NULL,
  `ingredient` tinytext NOT NULL,
  PRIMARY KEY (`Id`)
) ENGINE=MyISAM AUTO_INCREMENT=14 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `content`
--

INSERT INTO `content` (`Id`, `file`, `type`, `size`, `ingredient`) VALUES
(1, '37688-1306064.jpg', 'image/jpeg', '259.7099609375', ' dan dan dandan dandandandandandadndandandandanddddddddddddddddd'),
(10, '55191-tropical-chicken-cauliflower-rice-bowls.docx', 'application/vnd.openxmlformats-officedocument.wordprocessingml.document', '14.763671875', ' hhwjhkjwhkbhefhbhjfqwkhb'),
(8, '71232-tropical-chicken-cauliflower-rice-bowls.jpg', 'image/jpeg', '249.615234375', ' qwqtqtqtq'),
(9, '64660-tropical-chicken-cauliflower-rice-bowls.jpg', 'image/jpeg', '249.615234375', ' â€¢	1 fresh pineapple, peeled, cored and cubed (about 3 cups), divided\r\nâ€¢	1/2 cup plain or coconut Greek yogurt\r\n\r\n'),
(11, '96973-corned-beef.jpg', 'image/jpeg', '16.955078125', ' kjjnjkwejnewjnjnfkwj'),
(12, '97619-1306038.jpg', 'image/jpeg', '1849.791015625', ' hjbhjbjh'),
(13, '18031-1843875.jpg', 'image/jpeg', '4769.4873046875', ' hjjjjjbjhbjh');

-- --------------------------------------------------------

--
-- Table structure for table `diabetic`
--

DROP TABLE IF EXISTS `diabetic`;
CREATE TABLE IF NOT EXISTS `diabetic` (
  `Id` int(11) NOT NULL AUTO_INCREMENT,
  `file` varchar(300) NOT NULL,
  `type` varchar(300) NOT NULL,
  `size` varchar(300) NOT NULL,
  `ingredient` varchar(300) NOT NULL,
  PRIMARY KEY (`Id`)
) ENGINE=MyISAM AUTO_INCREMENT=7 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `diabetic`
--

INSERT INTO `diabetic` (`Id`, `file`, `type`, `size`, `ingredient`) VALUES
(1, '43107-1843877.jpg', 'image/jpeg', '371.1005859375', ' hbhkjk'),
(2, '53322-1843875.jpg', 'image/jpeg', '4769.4873046875', ' hj qwhqh jhb jh f djh jdh dhj hjvdh'),
(3, '58911-1306038.jpg', 'image/jpeg', '1849.791015625', ' normal '),
(4, '49062-1306038.jpg', 'image/jpeg', '1849.791015625', ' h hj hjjh hj henormal normal'),
(5, '2582-1306038.jpg', 'image/jpeg', '1849.791015625', ' hjh hnormal normal'),
(6, '35065-images_off.bmp', 'image/bmp', '29.302734375', ' diabetic');

-- --------------------------------------------------------

--
-- Table structure for table `multiuser`
--

DROP TABLE IF EXISTS `multiuser`;
CREATE TABLE IF NOT EXISTS `multiuser` (
  `Id` int(11) NOT NULL AUTO_INCREMENT,
  `email` varchar(50) NOT NULL,
  `password` varchar(50) NOT NULL,
  `type` enum('Admin','Shef','') NOT NULL DEFAULT 'Shef',
  PRIMARY KEY (`Id`)
) ENGINE=MyISAM AUTO_INCREMENT=7 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `multiuser`
--

INSERT INTO `multiuser` (`Id`, `email`, `password`, `type`) VALUES
(1, 'dan@gmail.com', '12345', 'Admin');

-- --------------------------------------------------------

--
-- Table structure for table `normal`
--

DROP TABLE IF EXISTS `normal`;
CREATE TABLE IF NOT EXISTS `normal` (
  `Id` int(11) NOT NULL,
  `file` int(250) NOT NULL,
  `type` int(250) NOT NULL,
  `size` int(11) NOT NULL,
  `ingredient` int(11) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `normale`
--

DROP TABLE IF EXISTS `normale`;
CREATE TABLE IF NOT EXISTS `normale` (
  `Id` int(11) NOT NULL AUTO_INCREMENT,
  `file` varchar(250) NOT NULL,
  `type` varchar(250) NOT NULL,
  `size` varchar(250) NOT NULL,
  `ingredient` varchar(250) NOT NULL,
  PRIMARY KEY (`Id`)
) ENGINE=MyISAM AUTO_INCREMENT=2 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `normale`
--

INSERT INTO `normale` (`Id`, `file`, `type`, `size`, `ingredient`) VALUES
(1, '43635-barimage.bmp', 'image/bmp', '2.052734375', ' normal is normal');

-- --------------------------------------------------------

--
-- Table structure for table `reg`
--

DROP TABLE IF EXISTS `reg`;
CREATE TABLE IF NOT EXISTS `reg` (
  `firstname` varchar(50) NOT NULL,
  `lastname` varchar(50) NOT NULL,
  `password` varchar(25) NOT NULL,
  `cpass` varchar(25) NOT NULL,
  `email` varchar(50) NOT NULL,
  `sex` varchar(25) NOT NULL,
  `vegan` varchar(25) NOT NULL,
  `diabetic` varchar(25) NOT NULL,
  `weight` varchar(25) NOT NULL,
  PRIMARY KEY (`email`)
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `reg`
--

INSERT INTO `reg` (`firstname`, `lastname`, `password`, `cpass`, `email`, `sex`, `vegan`, `diabetic`, `weight`) VALUES
('bellerin', 'hector', '12345', '12345', 'lkme@gmail.com', 'male', 'non_vegan', 'diabetic', 'gain'),
('bebex', 'bubu', '123456', '123456', 'bebex@gmail.com', 'male', 'vegan', 'normal', 'lose_weight');

-- --------------------------------------------------------

--
-- Table structure for table `shefreg`
--

DROP TABLE IF EXISTS `shefreg`;
CREATE TABLE IF NOT EXISTS `shefreg` (
  `Id` int(11) NOT NULL AUTO_INCREMENT,
  `firstname` varchar(50) DEFAULT NULL,
  `lastname` varchar(50) DEFAULT NULL,
  `email` varchar(50) DEFAULT NULL,
  `password` varchar(50) DEFAULT NULL,
  `cpass` varchar(50) DEFAULT NULL,
  `sex` varchar(25) NOT NULL,
  PRIMARY KEY (`Id`)
) ENGINE=MyISAM AUTO_INCREMENT=8 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `shefreg`
--

INSERT INTO `shefreg` (`Id`, `firstname`, `lastname`, `email`, `password`, `cpass`, `sex`) VALUES
(5, 'dagim', 'asrat', 'asrat@gmail.com', '1234', '1234', 'female'),
(7, 'yohannnes', 'melaku', '', '12345', '12345', 'male');

-- --------------------------------------------------------

--
-- Table structure for table `upload`
--

DROP TABLE IF EXISTS `upload`;
CREATE TABLE IF NOT EXISTS `upload` (
  `Id` int(11) NOT NULL AUTO_INCREMENT,
  `file` varchar(250) NOT NULL,
  `type` varchar(300) NOT NULL,
  `size` varchar(300) NOT NULL,
  PRIMARY KEY (`Id`)
) ENGINE=MyISAM AUTO_INCREMENT=3 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `upload`
--

INSERT INTO `upload` (`Id`, `file`, `type`, `size`) VALUES
(1, '72193-1843877.jpg', 'image/jpeg', '371.1005859375'),
(2, '17158-login.js', 'text/javascript', '0.3837890625');
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
