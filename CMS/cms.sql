-- phpMyAdmin SQL Dump
-- version 4.8.5
-- https://www.phpmyadmin.net/
--
-- Hôte : 127.0.0.1:3306
-- Généré le :  sam. 03 août 2019 à 19:01
-- Version du serveur :  5.7.26
-- Version de PHP :  7.2.18

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de données :  `cms`
--

-- --------------------------------------------------------

--
-- Structure de la table `articles`
--

DROP TABLE IF EXISTS `articles`;
CREATE TABLE IF NOT EXISTS `articles` (
  `ID` int(11) NOT NULL AUTO_INCREMENT,
  `Type` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `Couv` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `Catégories` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `Date` date NOT NULL,
  `Auteur` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `Titre` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `Texte` text COLLATE utf8_unicode_ci NOT NULL,
  `etat` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  PRIMARY KEY (`ID`)
) ENGINE=InnoDB AUTO_INCREMENT=17 DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Déchargement des données de la table `articles`
--

INSERT INTO `articles` (`ID`, `Type`, `Couv`, `Catégories`, `Date`, `Auteur`, `Titre`, `Texte`, `etat`) VALUES
(11, 'Article', 'https://cutt.ly/m1IFJo', 'Canidé', '2019-07-30', 'Admin', 'Le Chien', 'Le Chien (Canis lupus familiaris) est la sous-espèce domestique de Canis lupus, un mammifère de la famille des Canidés (Canidae), laquelle comprend également le Loup gris et le dingo, chien domestique redevenu sauvage.\r\n\r\nLe Loup est la première espèce animale à avoir été domestiquée par l\'Homme pour l\'usage de la chasse dans une société humaine paléolithique qui ne maîtrise alors ni l\'agriculture ni l\'élevage. La lignée du chien s\'est différenciée génétiquement de celle du Loup gris il y a environ 100 000 ans1, et les plus anciens restes confirmés de canidé différencié de la lignée du Loup sont vieux, selon les sources, de 33 000 ans2,3 ou de 12 000 ans4, donc antérieurs de plusieurs dizaines de milliers d\'années à ceux de toute autre espèce domestique connue. Depuis la Préhistoire, le chien a accompagné l\'être humain durant toute sa phase de sédentarisation, marquée par l\'apparition des premières civilisations agricoles. C\'est à ce moment qu\'il a acquis la capacité de digérer l\'amidon5, et que ses fonctions d\'auxiliaire d\'Homo sapiens se sont étendues. Ces nouvelles fonctions ont entraîné une différenciation accrue de la sous-espèce et l\'apparition progressive de races canines identifiables. Le chien est aujourd\'hui utilisé à la fois comme animal de travail et comme animal de compagnie. Son instinct de meute, sa domestication précoce et les caractéristiques comportementales qui en découlent lui valent familièrement le surnom de « meilleur ami de l\'Homme »6.', 'Publié'),
(12, 'Article', 'https://cutt.ly/VN4n4e', 'Rongeur', '2019-07-31', 'Admin', 'Le Rat ', 'Le mot « rat » est un nom vernaculaire ambigu qui peut désigner, en français, des centaines d\'espèces différentes dans le monde de mammifères rongeurs omnivores, dont la queue est nue, les dents tranchantes et le museau pointu. Les rats sont le plus souvent de la famille des Muridés ou, de façon plus restrictive, du genre Rattus, lequel regroupe les espèces les plus communes : Rattus rattus, le rat noir, et Rattus norvegicus, le rat d\'égout, qui a donné le rat domestique en élevage. Néanmoins, par analogie, le terme désigne aussi quelques espèces de rongeurs qui ne font pas partie de la famille des Muridés, comme le Rat palmiste, le Rat-chinchilla, etc.\r\n\r\nL\'Homme étudie ces rongeurs, les utilise à son profit, les apprivoise ou bien, au contraire, les considère comme des nuisibles et cherche à les exterminer. Les rats font ainsi partie intégrante de la symbolique, de la culture et de l’histoire humaine, et de nombreuses œuvres y font référence.', 'Publié'),
(13, 'Article', 'https://cutt.ly/27ChBt', 'Félin', '2019-08-03', 'Admin', 'Le Chat', 'Le Chat domestique (Felis silvestris catus) est la sous-espèce issue de la domestication du Chat sauvage, mammifère carnivore de la famille des Félidés.\r\n\r\nIl est l’un des principaux animaux de compagnie et compte aujourd’hui une cinquantaine de races différentes reconnues par les instances de certification. Dans de très nombreux pays, le chat entre dans le cadre de la législation sur les carnivores domestiques à l’instar du chien et du furet. Essentiellement territorial, le chat est un prédateur de petites proies comme les rongeurs ou les oiseaux. Les chats ont diverses vocalisations dont les ronronnements, les miaulements, les feulements ou les grognements, bien qu’ils communiquent principalement par des positions faciales et corporelles et des phéromones.', 'Publié'),
(14, 'Article', 'https://cutt.ly/m7CmZI', 'Félin', '2019-08-03', 'Admin', 'Le  Margay', 'Le margay, dit aussi chat-tigre, chat sauvage de la Nouvelle Espagne1 (Leopardus wiedii, anciennement Felis wiedii), est un petit félin rencontré dans les forêts tropicales et les milieux broussailleux d\'Amérique centrale et du Sud. En France, sa présence à l\'état sauvage se limite à la forêt guyanaise.', 'Publié'),
(15, 'Article', 'https://urlz.fr/agoQ', 'Canidé', '2019-08-03', 'Admin', 'Le  Dhole', 'Le dhole s\'apparente au loup ou au lycaon. Sa robe est d\'une couleur brun-roux. Il vit principalement en Asie centrale et orientale mais s\'adapte facilement à de nouveaux environnements. Le mâle est beaucoup plus grand que la femelle. Il mesure de 75 cm à 1 m de long, de 42 à 55 cm au garrot et pèse entre 10 et 25 kg. Sa queue mesure environ 40 cm de long et son extrémité est noire. Il possède 40 dents, à la différence de la plupart des autres canidés qui en ont 42.', 'Publié'),
(16, 'Article', 'https://urlz.fr/agoW', 'Rongeur', '2019-08-03', 'Admin', 'Le  Chinchilla', 'Les chinchillas sont des mammifères rongeurs du genre Chinchilla, famille des Chinchillidae. Ce genre comprend deux espèces sauvages et une forme domestiquée, issue très probablement du croisement en élevage des deux premières. Les chinchillas sont des animaux nocturnes, de la taille d’un lapin nain. Proches des Viscaches, ils sont originaires comme celles-ci de la cordillère des Andes, en Amérique du Sud. Les espèces sauvages sont des espèces en péril. Elles ont été chassées pour leur fourrure particulièrement recherchée au xixe siècle et ont été progressivement adaptées à la captivité pour donner le chinchilla domestique. Ce dernier est principalement élevé lui aussi pour sa fourrure, mais c\'est aussi l\'un des nouveaux animaux de compagnie.\r\n\r\nBien que très proches d\'aspect et de mœurs, on distingue plusieurs espèces du genre Chinchilla ainsi que des variétés domestiques. Les seules espèces sauvages actuellement connues sont des animaux d’Amérique du Sud devenus très rares. Toutes deux sont des espèces protégées :', 'Publié');

-- --------------------------------------------------------

--
-- Structure de la table `compte`
--

DROP TABLE IF EXISTS `compte`;
CREATE TABLE IF NOT EXISTS `compte` (
  `ID` int(11) NOT NULL AUTO_INCREMENT,
  `Email` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `Pseudo` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `Pass` blob NOT NULL,
  `Role` varchar(255) COLLATE utf8_unicode_ci DEFAULT 'Inscrit',
  PRIMARY KEY (`ID`)
) ENGINE=InnoDB AUTO_INCREMENT=3 DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Déchargement des données de la table `compte`
--

INSERT INTO `compte` (`ID`, `Email`, `Pseudo`, `Pass`, `Role`) VALUES
(1, 'admin@root.src', 'root', 0x61646d696e, 'Admin'),
(2, 'contrib@zoo.blog', 'contrib', 0x617a65727479, 'Contributeur');
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
