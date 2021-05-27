-- phpMyAdmin SQL Dump
-- version 5.0.2
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Dec 18, 2020 at 05:00 PM
-- Server version: 10.4.13-MariaDB
-- PHP Version: 7.4.8

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `projetweb1`
--

-- --------------------------------------------------------

--
-- Table structure for table `projets`
--

CREATE TABLE `projets` (
  `id` int(11) NOT NULL,
  `titre` varchar(255) NOT NULL,
  `description` varchar(500) NOT NULL,
  `image` varchar(255) NOT NULL,
  `audio` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `projets`
--

INSERT INTO `projets` (`id`, `titre`, `description`, `image`, `audio`) VALUES
(8, 'Madam Razzal', 'Gabriel Forion signe notamment la musique de « Madam Razzal » (mettant en vedette ABDUL GALEF), film de RÉJEAN GRANEAU nominé pour un Oscar dans la catégorie Best Foreign Language Film, pour lequel il remporte au Québec le Jutra Meilleure musique originale en 2012. On qualifie l’œuvre d’essentielle et capitale au succès du film.', 'images/MadamRazzal.png', 'audio/MadamRazzal.mp3'),
(9, 'Aime moi comme tu french', 'Gabriel Forion compose la musique du film « Aime-moi comme tu french » d’Andrée Forcée. Il puise ses inspirations dans les courants musicaux des années 1980 tout en y ajoutant une touche plus moderne. Cette exquise combinaison bien dosée, ajoute au coté tant humoristique que dramatique du film, tout en y ajoutant nostalgie.', 'images/AimeFrench.png', 'audio/AimeMoiFrench.mp3'),
(10, 'SIC SIC SIC', 'Gabriel Forion fait équipe avec son vieux partenaire Daniel Laitue pour réaliser la musique du court métrage « Sic Sic Sic ». Une comédie sur l’attachement parental face au bagage génétique et autres projection personnelles de ceux-ci. Le court métrage a remporté le premier prix au festival du court métrage de Toronto.', 'images/SicSicSic.png', 'audio/SicSicSic.mp3'),
(11, 'La vie d’Alex Joset ', 'Gabriel Forion réalise une bande originale de film ici pour un documentaire. On y retrouve plusieurs compositions épiques qui mettent de l’avant le côté extraordinaire du documentaire. Bien sûr, on notera les ambiances aussi planantes et quelques peu dépressive lors des scènes catastrophes.', 'images/AlexJoset.png', 'audio/AlexJoset.mp3');

-- --------------------------------------------------------

--
-- Table structure for table `utilisateurs`
--

CREATE TABLE `utilisateurs` (
  `id` int(11) NOT NULL,
  `username` varchar(255) NOT NULL,
  `password` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `utilisateurs`
--

INSERT INTO `utilisateurs` (`id`, `username`, `password`) VALUES
(1, 'julie', '$2y$10$JRV1l78Lw193KX6xKxsIb.yf4STPh5ubC9heekmU8nYSvuf2nFvNW'),
(7, 'alex', '$2y$10$fhmEqTjvfRldIf0v8m35zOCXrXQZyqb8QSGGg9UwqNuo609mW.IMW'),
(8, 'julien', '$2y$10$qF7YMRhScoA/VbiTLC.ICueT516PC3Q6aY39E9Ywll4faaDv1hvRK');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `projets`
--
ALTER TABLE `projets`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `utilisateurs`
--
ALTER TABLE `utilisateurs`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `projets`
--
ALTER TABLE `projets`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;

--
-- AUTO_INCREMENT for table `utilisateurs`
--
ALTER TABLE `utilisateurs`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
