-- phpMyAdmin SQL Dump
-- version 4.1.9
-- http://www.phpmyadmin.net
--
-- Host: localhost:8889
-- Generation Time: Aug 03, 2014 at 03:42 PM
-- Server version: 5.5.34
-- PHP Version: 5.5.10

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";

--
-- Database: `portfolio`
--

-- --------------------------------------------------------

--
-- Table structure for table `news`
--

CREATE TABLE `news` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `id_author` int(11) NOT NULL,
  `title` varchar(150) NOT NULL,
  `content` text NOT NULL,
  `date` datetime NOT NULL,
  PRIMARY KEY (`id`),
  KEY `id_author` (`id_author`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1 AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- Table structure for table `user`
--

CREATE TABLE `user` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `username` varchar(100) NOT NULL,
  `email` varchar(255) NOT NULL,
  `password` varchar(50) NOT NULL,
  PRIMARY KEY (`id`),
  UNIQUE KEY `username` (`username`),
  UNIQUE KEY `email` (`email`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=8 ;

--
-- Dumping data for table `user`
--

INSERT INTO `user` (`id`, `username`, `email`, `password`) VALUES
(2, 'nick', 'martinremi60@gmail.com', '403926033d001b5279df37cbbe5287b7c7c267fa'),
(4, 'test', 'test@test.com', 'a94a8fe5ccb19ba61c4c0873d391e987982fbbd3'),
(5, 'lol', 'lolilo@lol.lol', 'e54ca0f451fa67adfdc259e3a21a86b1a9f5dc67'),
(6, 'k:jjhkhjk', 'kjkjlkjljkl@lkkl.lk', 'bd010e486cd159dd005afeffb1eea2ff34fa0967'),
(7, 'sqdqsd', 'dsqdqs@kldk.kl', '435949bfeeaeb3136b8d5a9e7de7ae4425d3afc8');

--
-- Constraints for dumped tables
--

--
-- Constraints for table `news`
--
ALTER TABLE `news`
  ADD CONSTRAINT `fk_news_user` FOREIGN KEY (`id_author`) REFERENCES `user` (`id`);
