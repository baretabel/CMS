-- phpMyAdmin SQL Dump
-- version 4.6.6deb5
-- https://www.phpmyadmin.net/
--
-- Client :  localhost:3306
-- Généré le :  Jeu 01 Août 2019 à 16:46
-- Version du serveur :  5.7.26-0ubuntu0.18.04.1
-- Version de PHP :  7.2.19-0ubuntu0.18.04.1

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de données :  `CMS`
--

-- --------------------------------------------------------

--
-- Structure de la table `Articles`
--

CREATE TABLE `Articles` (
  `ID` int(11) NOT NULL,
  `Type` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `Couv` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `Catégories` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `Date` date NOT NULL,
  `Auteur` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `Titre` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `Texte` text COLLATE utf8_unicode_ci NOT NULL,
  `etat` varchar(255) COLLATE utf8_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Contenu de la table `Articles`
--

INSERT INTO `Articles` (`ID`, `Type`, `Couv`, `Catégories`, `Date`, `Auteur`, `Titre`, `Texte`, `etat`) VALUES
(11, 'Article', 'https://cutt.ly/m1IFJo', 'Animaux', '2019-07-30', 'Admin', 'Chien', 'Le Chien (Canis lupus familiaris) est la sous-espèce domestique de Canis lupus, un mammifère de la famille des Canidés (Canidae), laquelle comprend également le Loup gris et le dingo, chien domestique redevenu sauvage.\r\n\r\nLe Loup est la première espèce animale à avoir été domestiquée par l\'Homme pour l\'usage de la chasse dans une société humaine paléolithique qui ne maîtrise alors ni l\'agriculture ni l\'élevage. La lignée du chien s\'est différenciée génétiquement de celle du Loup gris il y a environ 100 000 ans1, et les plus anciens restes confirmés de canidé différencié de la lignée du Loup sont vieux, selon les sources, de 33 000 ans2,3 ou de 12 000 ans4, donc antérieurs de plusieurs dizaines de milliers d\'années à ceux de toute autre espèce domestique connue. Depuis la Préhistoire, le chien a accompagné l\'être humain durant toute sa phase de sédentarisation, marquée par l\'apparition des premières civilisations agricoles. C\'est à ce moment qu\'il a acquis la capacité de digérer l\'amidon5, et que ses fonctions d\'auxiliaire d\'Homo sapiens se sont étendues. Ces nouvelles fonctions ont entraîné une différenciation accrue de la sous-espèce et l\'apparition progressive de races canines identifiables. Le chien est aujourd\'hui utilisé à la fois comme animal de travail et comme animal de compagnie. Son instinct de meute, sa domestication précoce et les caractéristiques comportementales qui en découlent lui valent familièrement le surnom de « meilleur ami de l\'Homme »6.', 'Publié'),
(12, 'Article', 'https://cutt.ly/VN4n4e', 'Animaux', '2019-07-31', 'Admin', 'Rat ', 'dhggfiujkj', 'Publié');

-- --------------------------------------------------------

--
-- Structure de la table `Compte`
--

CREATE TABLE `Compte` (
  `ID` int(11) NOT NULL,
  `Email` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `Pseudo` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `Pass` blob NOT NULL,
  `Role` varchar(255) COLLATE utf8_unicode_ci DEFAULT 'Inscrit'
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Contenu de la table `Compte`
--

INSERT INTO `Compte` (`ID`, `Email`, `Pseudo`, `Pass`, `Role`) VALUES
(1, 'admin@root.src', 'root', 0x61646d696e, 'Admin');

--
-- Index pour les tables exportées
--

--
-- Index pour la table `Articles`
--
ALTER TABLE `Articles`
  ADD PRIMARY KEY (`ID`);

--
-- Index pour la table `Compte`
--
ALTER TABLE `Compte`
  ADD PRIMARY KEY (`ID`);

--
-- AUTO_INCREMENT pour les tables exportées
--

--
-- AUTO_INCREMENT pour la table `Articles`
--
ALTER TABLE `Articles`
  MODIFY `ID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;
--
-- AUTO_INCREMENT pour la table `Compte`
--
ALTER TABLE `Compte`
  MODIFY `ID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
