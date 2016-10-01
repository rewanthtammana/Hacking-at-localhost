-- phpMyAdmin SQL Dump
-- version 4.4.14
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: Feb 28, 2016 at 06:39 AM
-- Server version: 5.6.26
-- PHP Version: 5.6.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `my website`
--

-- --------------------------------------------------------

--
-- Table structure for table `guestbook`
--

CREATE TABLE IF NOT EXISTS `guestbook` (
  `comment` text NOT NULL,
  `name` text NOT NULL,
  `logged_by` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `guestbook`
--

INSERT INTO `guestbook` (`comment`, `name`, `logged_by`) VALUES
('<Script>alert(''worked'')</script>', 'ruoiweuo', 'cool'),
('alert(''adfad'');', 'rioepw', 'cool'),
('&lt;Script&gt;alert(''asdf'')&lt;/script&gt;', 'rquoiwe', 'cool'),
('alert(''rewanth'');', 'rewanth', 'kkr connection'),
('<Script>alert(''hopeitsdone'')</script>', 'rewanth1', 'kkr connection'),
('<script>alert(''XXX'')</script>', 'ugbu', 'abcd'),
('<script>alert(''XXX'')</script>', 'ugbu', 'abcd'),
('&lt;script&gt;alert(&quot;Hacked&quot;)&lt;/script&gt;', 'roger', 'admin'),
('<script>alert(''XXX'')</script>', 'rewanth', 'admin'),
('jfalsd', 'fjdl', 'rewanth'),
('<script>alert(''asd'')</script>', 'jdfl', 'rewanth');

-- --------------------------------------------------------

--
-- Table structure for table `user`
--

CREATE TABLE IF NOT EXISTS `user` (
  `username` text NOT NULL,
  `pass` text NOT NULL,
  `security` text NOT NULL,
  `Salt` text NOT NULL,
  `ID` int(11) NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=40 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `user`
--

INSERT INTO `user` (`username`, `pass`, `security`, `Salt`, `ID`) VALUES
('admin', 'password', 'low', '362a79e889049ab1ec223665486f71acd53edb98083b8d4a011b5151c13c7854348a560731be751edba30305c6a9d90492a088f5affa81f8bc6c4c3614704208', 1),
('rewanth', '123', 'low', '362a79e889049ab1ec223665486f71acd53edb98083b8d4a011b5151c13c7854348a560731be751edba30305c6a9d90492a088f5affa81f8bc6c4c3614704208', 4),
('cool', 'rewanth', 'low', '362a79e889049ab1ec223665486f71acd53edb98083b8d4a011b5151c13c7854348a560731be751edba30305c6a9d90492a088f5affa81f8bc6c4c3614704208', 6),
('awsome', 'pinky', 'low', '362a79e889049ab1ec223665486f71acd53edb98083b8d4a011b5151c13c7854348a560731be751edba30305c6a9d90492a088f5affa81f8bc6c4c3614704208', 7),
('kkr connection', 'done', 'low', '362a79e889049ab1ec223665486f71acd53edb98083b8d4a011b5151c13c7854348a560731be751edba30305c6a9d90492a088f5affa81f8bc6c4c3614704208', 11),
('abcd', 'abcde', 'low', '362a79e889049ab1ec223665486f71acd53edb98083b8d4a011b5151c13c7854348a560731be751edba30305c6a9d90492a088f5affa81f8bc6c4c3614704208', 12),
('adminone', 'admin', 'low', '362a79e889049ab1ec223665486f71acd53edb98083b8d4a011b5151c13c7854348a560731be751edba30305c6a9d90492a088f5affa81f8bc6c4c3614704208', 13),
('abgh', '123', 'high', '362a79e889049ab1ec223665486f71acd53edb98083b8d4a011b5151c13c7854348a560731be751edba30305c6a9d90492a088f5affa81f8bc6c4c3614704208', 14),
('fjald', 'jfklsa', 'low', '362a79e889049ab1ec223665486f71acd53edb98083b8d4a011b5151c13c7854348a560731be751edba30305c6a9d90492a088f5affa81f8bc6c4c3614704208', 15),
('poip', 'jklasd', 'low', '362a79e889049ab1ec223665486f71acd53edb98083b8d4a011b5151c13c7854348a560731be751edba30305c6a9d90492a088f5affa81f8bc6c4c3614704208', 16),
('dajflk', 'jals', 'low', '362a79e889049ab1ec223665486f71acd53edb98083b8d4a011b5151c13c7854348a560731be751edba30305c6a9d90492a088f5affa81f8bc6c4c3614704208', 17),
('asdjlk', 'jfals', 'low', '362a79e889049ab1ec223665486f71acd53edb98083b8d4a011b5151c13c7854348a560731be751edba30305c6a9d90492a088f5affa81f8bc6c4c3614704208', 18),
('afjsdl', 'fjlasd', 'low', '362a79e889049ab1ec223665486f71acd53edb98083b8d4a011b5151c13c7854348a560731be751edba30305c6a9d90492a088f5affa81f8bc6c4c3614704208', 19),
('ajfsldk', 'fjlkdsa', 'low', '362a79e889049ab1ec223665486f71acd53edb98083b8d4a011b5151c13c7854348a560731be751edba30305c6a9d90492a088f5affa81f8bc6c4c3614704208', 20),
('afdjslk', 'jalsd', 'low', '362a79e889049ab1ec223665486f71acd53edb98083b8d4a011b5151c13c7854348a560731be751edba30305c6a9d90492a088f5affa81f8bc6c4c3614704208', 21),
('asdjlkuio', 'fasljdk', 'low', '362a79e889049ab1ec223665486f71acd53edb98083b8d4a011b5151c13c7854348a560731be751edba30305c6a9d90492a088f5affa81f8bc6c4c3614704208', 22),
('ajsdllajsf', 'fjldsa', 'low', '362a79e889049ab1ec223665486f71acd53edb98083b8d4a011b5151c13c7854348a560731be751edba30305c6a9d90492a088f5affa81f8bc6c4c3614704208', 23),
('ajsldlfjals', 'jasldjflksa', 'low', '362a79e889049ab1ec223665486f71acd53edb98083b8d4a011b5151c13c7854348a560731be751edba30305c6a9d90492a088f5affa81f8bc6c4c3614704208', 24),
('ajdslk', 'jafsld', 'low', '362a79e889049ab1ec223665486f71acd53edb98083b8d4a011b5151c13c7854348a560731be751edba30305c6a9d90492a088f5affa81f8bc6c4c3614704208', 25),
('afjslkdlafk', 'jfalsdjfl', 'low', '362a79e889049ab1ec223665486f71acd53edb98083b8d4a011b5151c13c7854348a560731be751edba30305c6a9d90492a088f5affa81f8bc6c4c3614704208', 26),
('akljsdlfjlsjd', 'jfalsdjf', 'low', '362a79e889049ab1ec223665486f71acd53edb98083b8d4a011b5151c13c7854348a560731be751edba30305c6a9d90492a088f5affa81f8bc6c4c3614704208', 27),
('aksjdlkfjals', 'jalsdfj', 'low', '362a79e889049ab1ec223665486f71acd53edb98083b8d4a011b5151c13c7854348a560731be751edba30305c6a9d90492a088f5affa81f8bc6c4c3614704208', 28),
('akjsdljflasd', 'jaklsdjflasd', 'low', '362a79e889049ab1ec223665486f71acd53edb98083b8d4a011b5151c13c7854348a560731be751edba30305c6a9d90492a088f5affa81f8bc6c4c3614704208', 29),
('captcha', 'ajfdl', 'low', '362a79e889049ab1ec223665486f71acd53edb98083b8d4a011b5151c13c7854348a560731be751edba30305c6a9d90492a088f5affa81f8bc6c4c3614704208', 30),
('', '', 'low', '362a79e889049ab1ec223665486f71acd53edb98083b8d4a011b5151c13c7854348a560731be751edba30305c6a9d90492a088f5affa81f8bc6c4c3614704208', 31),
('alkjsd', 'lkjaslkdfj', 'low', '362a79e889049ab1ec223665486f71acd53edb98083b8d4a011b5151c13c7854348a560731be751edba30305c6a9d90492a088f5affa81f8bc6c4c3614704208', 32),
('ajsdlkf', 'kasjldkf', 'low', '362a79e889049ab1ec223665486f71acd53edb98083b8d4a011b5151c13c7854348a560731be751edba30305c6a9d90492a088f5affa81f8bc6c4c3614704208', 33),
('eriwpo', 'alsfdj', 'low', '362a79e889049ab1ec223665486f71acd53edb98083b8d4a011b5151c13c7854348a560731be751edba30305c6a9d90492a088f5affa81f8bc6c4c3614704208', 34),
('akljsfdl', 'klasjdlkfj', 'low', '362a79e889049ab1ec223665486f71acd53edb98083b8d4a011b5151c13c7854348a560731be751edba30305c6a9d90492a088f5affa81f8bc6c4c3614704208', 35),
('asldkfjal', 'aljksdfjlajsdl', 'low', '362a79e889049ab1ec223665486f71acd53edb98083b8d4a011b5151c13c7854348a560731be751edba30305c6a9d90492a088f5affa81f8bc6c4c3614704208', 36),
('test', 'test', 'low', '362a79e889049ab1ec223665486f71acd53edb98083b8d4a011b5151c13c7854348a560731be751edba30305c6a9d90492a088f5affa81f8bc6c4c3614704208', 37),
('dir', 'test', 'low', '362a79e889049ab1ec223665486f71acd53edb98083b8d4a011b5151c13c7854348a560731be751edba30305c6a9d90492a088f5affa81f8bc6c4c3614704208', 38),
('NULL', 'test', 'low', '362a79e889049ab1ec223665486f71acd53edb98083b8d4a011b5151c13c7854348a560731be751edba30305c6a9d90492a088f5affa81f8bc6c4c3614704208', 39);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`ID`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `user`
--
ALTER TABLE `user`
  MODIFY `ID` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=40;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
