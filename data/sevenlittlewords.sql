-- phpMyAdmin SQL Dump
-- version 4.8.3
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Nov 08, 2018 at 10:30 PM
-- Server version: 10.1.35-MariaDB
-- PHP Version: 7.2.9

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `sevenlittlewords`
--

-- --------------------------------------------------------

--
-- Table structure for table `words`
--

CREATE TABLE `words` (
  `word_id` int(11) NOT NULL,
  `title` varchar(25) NOT NULL,
  `subtitle` varchar(25) DEFAULT NULL,
  `word1` varchar(16) NOT NULL,
  `word2` varchar(16) NOT NULL,
  `word3` varchar(16) NOT NULL,
  `word4` varchar(16) NOT NULL,
  `word5` varchar(16) NOT NULL,
  `word6` varchar(16) NOT NULL,
  `word7` varchar(16) NOT NULL,
  `clue1` varchar(45) DEFAULT NULL,
  `clue2` varchar(45) DEFAULT NULL,
  `clue3` varchar(45) DEFAULT NULL,
  `clue4` varchar(45) DEFAULT NULL,
  `clue5` varchar(45) DEFAULT NULL,
  `clue6` varchar(45) DEFAULT NULL,
  `clue7` varchar(45) DEFAULT NULL,
  `topic` varchar(25) DEFAULT NULL,
  `comments` varchar(40) DEFAULT NULL,
  `image` varchar(20) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `words`
--

INSERT INTO `words` (`word_id`, `title`, `subtitle`, `word1`, `word2`, `word3`, `word4`, `word5`, `word6`, `word7`, `clue1`, `clue2`, `clue3`, `clue4`, `clue5`, `clue6`, `clue7`, `topic`, `comments`, `image`) VALUES
(1, 'Title 1', 'Subtitle 1', 'MAINSTREAM', 'ZENITH', 'ATRIUM', 'HELPLESS', 'TIMEPIECE', 'EXERT', 'PARADISE', 'Generally popular', 'The highest point reached', 'Open patio', 'Not able to defend oneself', 'Watch or clock', 'Apply as force', 'Perfect place', NULL, NULL, NULL),
(2, 'Title 2', 'Subtitle 2', 'HYDROGEN', 'COAX', 'ARMCHAIR', 'CHERRY', 'MEGABYTE', 'GLUTEN', 'MEMOIR', 'The first element', 'Gently encourage', 'Living room furniture', 'Small red fruit', 'Computer memory unit', 'Substance in wheat', 'Personal narrative', NULL, NULL, NULL),
(3, 'Title 3', 'Subtitle 3', 'LEGACY', 'FLEDGED', 'PROPAGATION', 'AMBIGUOUS', 'PORTENT', 'TAUT', 'ENIGMA', 'Something handed down from ancestors', 'Able to fly, trained, experienced', 'Increasing the number, spreading, extending', 'Doubtful, uncertain', 'Omen, marvelous, threatening', 'Tightly stretched', 'Something that is puzzling', NULL, NULL, NULL),
(4, 'Title 4', 'Subtitle 4', 'JABBER', 'ODIOUS', 'STEEPLY', 'FIDGET', 'INCULCATE', 'HARBINGER', 'IRKSOME', 'Talk excitedly, utter rapidly', 'Repulsive, hateful', 'Rising or falling sharply', 'Move restlessly, make nervous', 'Fix firmly by repetition', 'Smth or smb that foretells the coming of', 'Tiresome', NULL, NULL, NULL),
(5, 'Title 5', 'Subtitle 5', 'INFERNO', 'ASSIDUOUS', 'IMPIETY', 'OPAQUENESS', 'BEREFT', 'MINCE', 'PEDANTIC', 'Hell', 'Diligent, hard-working, sedulous', 'Lack of reverence or dutifulness', 'Dullness/not allowing light to pass through', 'Rob or dispossess of smth (material)', 'Pronounce or speak affectedly, euphemize', 'Bookish, showing off learning', NULL, NULL, NULL);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `words`
--
ALTER TABLE `words`
  ADD PRIMARY KEY (`word_id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `words`
--
ALTER TABLE `words`
  MODIFY `word_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
