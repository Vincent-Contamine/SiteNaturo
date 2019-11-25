-- phpMyAdmin SQL Dump
-- version 4.9.0.1
-- https://www.phpmyadmin.net/
--
-- Hôte : localhost:8889
-- Généré le :  lun. 25 nov. 2019 à 09:04
-- Version du serveur :  5.7.26
-- Version de PHP :  7.3.8

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de données :  `SiteNaturo`
--

-- --------------------------------------------------------

--
-- Structure de la table `Category`
--

CREATE TABLE `Category` (
  `Id` tinyint(3) UNSIGNED NOT NULL,
  `Name` varchar(70) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Déchargement des données de la table `Category`
--

INSERT INTO `Category` (`Id`, `Name`) VALUES
(1, 'Phytothérapie'),
(2, 'Alimentation'),
(3, 'Energetique'),
(4, 'Naturopathie générale ');

-- --------------------------------------------------------

--
-- Structure de la table `Post`
--

CREATE TABLE `Post` (
  `Id` smallint(5) UNSIGNED NOT NULL,
  `Title` varchar(150) NOT NULL,
  `Content` text NOT NULL,
  `CreationTimestamp` datetime NOT NULL,
  `Category_id` tinyint(3) UNSIGNED NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Déchargement des données de la table `Post`
--

INSERT INTO `Post` (`Id`, `Title`, `Content`, `CreationTimestamp`, `Category_id`) VALUES
(5, 'Les bienfaits des graines germées !!', ' Lorem ipsum dolor sit amet, consectetur adipiscing elit. Vivamus varius mi et diam tristique lacinia. Ut condimentum blandit lectus, sed imperdiet nisl. Aenean urna lorem, hendrerit non interdum in, aliquam in nulla. Morbi sed orci eget risus mollis semper a ut dolor. Nulla at nisl non lectus pharetra lobortis sit amet nec erat. Maecenas porttitor rhoncus lacus, id vehicula purus. Curabitur gravida orci eu odio feugiat, at vehicula odio hendrerit. Sed rhoncus lorem in ipsum pulvinar, sit amet viverra odio tempus. Proin hendrerit ligula vel venenatis tempor. Cras a dictum libero. Fusce sed nulla nisl. Integer sed diam velit. Duis interdum facilisis ex id porta. Proin eget luctus justo, vel vulputate est. Integer finibus vitae sapien quis vulputate. Aliquam felis massa, semper ac ornare in, blandit ut sem.\r\n\r\nSuspendisse viverra tortor nec orci lacinia dictum nec ac mi. Nam tempor odio id dapibus semper. Ut posuere tempor aliquam. Duis rutrum dui mollis erat cursus, ut gravida massa condimentum. Donec porttitor ante quam, ac sollicitudin diam bibendum id. Morbi finibus ex felis, ac tristique tellus luctus eu. Curabitur at mauris accumsan, consequat metus at, tempor neque. Mauris eget pretium metus. Vivamus faucibus metus erat, nec suscipit sapien egestas vel.', '2019-11-23 08:22:19', 2),
(6, 'ACHILLEE MILLEFEUILLE - Sourcil de Vénus', 'Fusce tellus tortor, venenatis sed ornare nec, consequat vel nibh. Maecenas egestas nisi venenatis ante tempus, mattis condimentum nibh pretium. Suspendisse tempor, ligula non sagittis faucibus, sem ante auctor dolor, vitae interdum erat nulla at massa.\r\n\r\nIn vitae porta orci, eget egestas magna. Integer a odio elit. Curabitur sit amet rhoncus mi. Sed sed eleifend nibh, et euismod leo. Donec vitae massa metus. Nunc at purus et libero ultrices gravida eget at purus. Maecenas consequat odio magna, non ultricies justo condimentum eu. Cras ligula leo, semper at libero at, interdum varius est. Aenean convallis facilisis mauris et egestas. Class aptent taciti sociosqu ad litora torquent per conubia nostra, per inceptos himenaeos. Nullam eget vulputate enim. Suspendisse potenti. Fusce vitae consectetur magna, at interdum augue. ', '2019-11-23 08:25:19', 1),
(7, 'Conférence d\'Isabelle Mansuy, neurogénéticienne.', ' Donec auctor tempor tortor, ut cursus ipsum eleifend a. Nulla faucibus mauris nunc. Mauris eget luctus ante, vitae varius arcu. Nullam sed dolor nec lorem ultrices faucibus quis et quam. Suspendisse et tempus neque, quis suscipit turpis. Mauris eleifend orci non semper luctus. Sed euismod lobortis lorem, in interdum elit semper eget. Integer ut purus dapibus, posuere mi eget, eleifend quam. Duis molestie turpis nec justo ultrices, ut porta nibh vulputate. Donec velit massa, viverra eget urna ut, maximus bibendum leo. Aliquam erat elit, volutpat quis eleifend fermentum, pretium aliquam dui. Nullam lorem dui, fermentum nec porttitor non, commodo at elit. Interdum et malesuada fames ac ante ipsum primis in faucibus.\r\n\r\nNullam aliquam fringilla sapien pulvinar rutrum. Curabitur viverra turpis nec porttitor sagittis. Suspendisse a laoreet ante. Nam non erat lacus. Mauris lorem quam, blandit vel porttitor in, scelerisque sed massa.', '2019-11-23 08:26:15', 4);

-- --------------------------------------------------------

--
-- Structure de la table `RendezVous`
--

CREATE TABLE `RendezVous` (
  `rdv_id` int(11) NOT NULL,
  `name` varchar(25) NOT NULL,
  `date` date NOT NULL,
  `start_hour` time NOT NULL,
  `content` text NOT NULL,
  `user_id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Déchargement des données de la table `RendezVous`
--

INSERT INTO `RendezVous` (`rdv_id`, `name`, `date`, `start_hour`, `content`, `user_id`) VALUES
(16, 'naturo1h30', '2019-11-01', '10:00:00', 'Mox dicta finierat, multitudo omnis ad, quae imperator voluit, promptior laudato consilio consensit in pacem ea ratione maxime percita, quod norat expeditionibus crebris fortunam eius in malis tantum civilibus vigilasse, cum autem bella moverentur externa, accidisse plerumque luctuosa, icto post haec foedere gentium ritu perfectaque sollemnitate imperator Mediolanum ad hiberna discessit.\r\n\r\nAccedat huc suavitas quaedam oportet sermonum atque morum, haudquaquam mediocre condimentum amicitiae. Tristitia autem et in omni re severitas habet illa quidem gravitatem, sed amicitia remissior esse debet et liberior et dulcior et ad omnem comitatem facilitatemque proclivior.', 33),
(17, 'naturo1h', '2019-11-23', '15:45:00', 'Rendez-vous de suivi', 33),
(18, 'reiki45', '2019-12-21', '09:30:00', 'Bilan et premier soin Reïki', 33),
(19, 'reiki30', '2020-01-09', '14:30:00', 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Aenean a.', 34),
(20, 'naturo1h', '2020-01-23', '08:30:00', 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Aenean a.', 36),
(21, 'reiki45', '2020-01-07', '13:30:00', 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Aenean a.Lorem ipsum dolor sit amet, consectetur adipiscing elit. Aenean a.', 37),
(22, '', '2020-01-17', '15:30:00', 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Duis eget tincidunt tortor. Suspendisse dapibus vulputate.', 38);

-- --------------------------------------------------------

--
-- Structure de la table `User`
--

CREATE TABLE `User` (
  `user_id` int(11) NOT NULL,
  `email` varchar(50) DEFAULT NULL,
  `password` varchar(100) DEFAULT NULL,
  `firstName` varchar(50) NOT NULL,
  `lastName` varchar(50) NOT NULL,
  `birthday` date DEFAULT NULL,
  `sex` varchar(20) DEFAULT NULL,
  `height` int(3) DEFAULT NULL,
  `weight` int(3) DEFAULT NULL,
  `diet` varchar(50) DEFAULT NULL,
  `phone` varchar(10) DEFAULT NULL,
  `reason` varchar(255) DEFAULT NULL,
  `pathology` text,
  `treatment` text,
  `emunctory` text,
  `other` text
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Déchargement des données de la table `User`
--

INSERT INTO `User` (`user_id`, `email`, `password`, `firstName`, `lastName`, `birthday`, `sex`, `height`, `weight`, `diet`, `phone`, `reason`, `pathology`, `treatment`, `emunctory`, `other`) VALUES
(1, 'admin@mail.com', '$2y$11$1aba05db57cb8409cb900uYNGoNh4feQ6FTDjk10cXXl99q4p9J8u', 'Admin', 'Dusite', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(33, 'john@mail.com', '$2y$11$2144acd591f097ae8b88auvMIE0X7HqWM2DExiioGD011wwWW6STi', 'John', 'Doe', '2000-01-10', 'Inconnu', 163, 65, 'Végetarien', '0612345678', 'Trouble du sommeil', NULL, NULL, NULL, 'Durée des nuits inférieur à 4h'),
(34, 'albert@mail.com', '$2y$11$7edc799785827218aa6c6u/EE658I4ye4DxxWGXzs4dXnDfRNQay6', 'Albert', 'Einstein', '1879-03-14', 'Homme', 183, 77, 'sans gluten', '0325881730', 'Rhume de cerveau', NULL, NULL, NULL, NULL),
(35, 'alan@mail.com', '$2y$11$5039bf3b69d07c26b752beFaSCmBA3fdKtl6DFXKwcptEQG8atX3e', 'Alan', 'Turing', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(36, 'margaret@mail.com', '$2y$11$993f1b039c3be7b7a299auD3tQCIyZVyGYcazTgR1119toXNzDFUi', 'Margaret', 'Hamilton', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(37, 'hedy@mail.com', '$2y$11$aa91d705e075ba5e9832cuLiZ2DpsaFFvRmU2kVRhUK45kjYCTa7K', 'Hedy', 'Lamarr', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(38, 'marie@mail.com', '$2y$11$297017e79eb2c9d3c31f4umpzV4nkvRGB2PWrJRwIPcG0n8E.WMba', 'Marie', 'Curie', '1867-11-07', 'Femme', 165, 57, 'Vegetarien', '0175276543', 'Rhinite chronique et fatigue', NULL, 'Homéopathie', NULL, 'Pas de résultats suite au traitement homéopathique');

--
-- Index pour les tables déchargées
--

--
-- Index pour la table `Category`
--
ALTER TABLE `Category`
  ADD PRIMARY KEY (`Id`);

--
-- Index pour la table `Post`
--
ALTER TABLE `Post`
  ADD PRIMARY KEY (`Id`),
  ADD KEY `CreationTimestamp` (`CreationTimestamp`),
  ADD KEY `Category_id` (`Category_id`);

--
-- Index pour la table `RendezVous`
--
ALTER TABLE `RendezVous`
  ADD PRIMARY KEY (`rdv_id`),
  ADD KEY `user_id` (`user_id`);

--
-- Index pour la table `User`
--
ALTER TABLE `User`
  ADD PRIMARY KEY (`user_id`),
  ADD UNIQUE KEY `email` (`email`);

--
-- AUTO_INCREMENT pour les tables déchargées
--

--
-- AUTO_INCREMENT pour la table `Category`
--
ALTER TABLE `Category`
  MODIFY `Id` tinyint(3) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT pour la table `Post`
--
ALTER TABLE `Post`
  MODIFY `Id` smallint(5) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT pour la table `RendezVous`
--
ALTER TABLE `RendezVous`
  MODIFY `rdv_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=23;

--
-- AUTO_INCREMENT pour la table `User`
--
ALTER TABLE `User`
  MODIFY `user_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=39;

--
-- Contraintes pour les tables déchargées
--

--
-- Contraintes pour la table `Post`
--
ALTER TABLE `Post`
  ADD CONSTRAINT `post_ibfk_1` FOREIGN KEY (`Category_id`) REFERENCES `Category` (`Id`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Contraintes pour la table `RendezVous`
--
ALTER TABLE `RendezVous`
  ADD CONSTRAINT `rendezvous_ibfk_1` FOREIGN KEY (`user_id`) REFERENCES `User` (`user_id`) ON DELETE CASCADE ON UPDATE CASCADE;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
