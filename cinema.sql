-- phpMyAdmin SQL Dump
-- version 4.9.0.1
-- https://www.phpmyadmin.net/
--
-- Hôte : localhost
-- Généré le :  mar. 20 août 2019 à 06:30
-- Version du serveur :  5.7.23
-- Version de PHP :  7.2.10

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de données :  `cinema`
--

-- --------------------------------------------------------

--
-- Structure de la table `acteurs`
--

CREATE TABLE `acteurs` (
  `idActeur` int(10) UNSIGNED NOT NULL,
  `nom` varchar(25) COLLATE utf8_bin DEFAULT NULL,
  `prenom` varchar(25) COLLATE utf8_bin DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_bin;

--
-- Déchargement des données de la table `acteurs`
--

INSERT INTO `acteurs` (`idActeur`, `nom`, `prenom`) VALUES
(1, 'Allen', 'Alfie'),
(2, 'Brando', 'Marlon'),
(3, 'Brasseur', 'Claude'),
(15, 'De Funes', 'Louis'),
(4, 'De Niro', 'Robert'),
(5, 'Fishburne', 'Laurence'),
(6, 'Keaton', 'Diane'),
(7, 'L. Jackson', 'Samuel'),
(8, 'Moss', 'Carrie-Anne'),
(9, 'Pacino', 'Al'),
(10, 'Ratinier', 'Claude'),
(11, 'Reeves', 'Keanu'),
(12, 'Rich', 'Claude'),
(13, 'Thurman', 'Uma'),
(14, 'Travolta', 'John'),
(18, 'rue', 'ta');

-- --------------------------------------------------------

--
-- Structure de la table `films`
--

CREATE TABLE `films` (
  `idFilm` int(10) UNSIGNED NOT NULL,
  `titre` varchar(25) COLLATE utf8_bin DEFAULT NULL,
  `realisateur` varchar(25) COLLATE utf8_bin DEFAULT NULL,
  `affiche` varchar(100) COLLATE utf8_bin DEFAULT NULL,
  `annee` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_bin;

--
-- Déchargement des données de la table `films`
--

INSERT INTO `films` (`idFilm`, `titre`, `realisateur`, `affiche`, `annee`) VALUES
(1, 'Matrix', 'Les Wachowski', 'http://fr.web.img6.acsta.net/r_1920_1080/medias/04/34/49/043449_af.jpg', 1999),
(2, 'La soupe aux choux', 'Jean Girault', 'http://fr.web.img6.acsta.net/r_1280_720/medias/nmedia/18/36/11/21/18478117.jpg', 1981),
(3, 'John Wick', 'David Leitch', 'http://fr.web.img4.acsta.net/pictures/14/10/08/11/49/255061.jpg', 2014),
(4, 'Le Parrain', 'Francis Ford Coppola', 'http://fr.web.img4.acsta.net/medias/nmedia/18/35/57/73/18660716.jpg', 1972),
(5, 'Le souper', 'Edouard Molinaro', 'http://www.cinemapassion.com/lesaffiches/Le-Souper-affiche-12388.jpg', 1992),
(6, 'Pulp Fiction', 'Quentin Tarantino', 'http://fr.web.img4.acsta.net/r_1920_1080/medias/nmedia/18/36/02/52/18686501.jpg', 1994),
(7, 'Le Parrain, 2eme Partie', 'Francis Ford Coppola', 'http://images.fan-de-cinema.com/affiches/large/79/37071.jpg', 1974);

-- --------------------------------------------------------

--
-- Structure de la table `role`
--

CREATE TABLE `role` (
  `idActeur` int(10) UNSIGNED NOT NULL,
  `idFilm` int(10) UNSIGNED NOT NULL,
  `personnage` varchar(25) COLLATE utf8_bin DEFAULT NULL,
  `idRole` int(11) NOT NULL,
  `test` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_bin;

--
-- Déchargement des données de la table `role`
--

INSERT INTO `role` (`idActeur`, `idFilm`, `personnage`, `idRole`, `test`) VALUES
(11, 1, 'Neo', 17, 0),
(11, 3, 'John Wick', 18, 0),
(5, 1, 'Morpheus', 19, 0),
(15, 2, 'Le Glaude', 20, 0),
(4, 4, 'Vito Corleone', 21, 0),
(9, 4, 'Mickael Corleone', 22, 0),
(9, 7, 'Mickael Corleone', 23, 0),
(6, 3, 'Iosef Tarasov', 24, 0),
(8, 1, 'Trinity ', 25, 0),
(3, 5, 'Joseph Fouché', 26, 0),
(12, 5, 'Talleyrand', 27, 0),
(14, 6, 'Vincent Vega', 28, 0),
(11, 6, 'Jules Winnfield', 29, 0),
(13, 6, 'Mia Wallace', 30, 0),
(6, 7, 'Kay Adams-Corleone', 31, 0),
(2, 4, 'Vito Corleone', 32, 0);

-- --------------------------------------------------------

--
-- Structure de la table `user`
--

CREATE TABLE `user` (
  `idUser` int(11) NOT NULL,
  `email` varchar(100) COLLATE utf8_bin NOT NULL,
  `password` varchar(100) COLLATE utf8_bin NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8 COLLATE=utf8_bin;

--
-- Déchargement des données de la table `user`
--

INSERT INTO `user` (`idUser`, `email`, `password`) VALUES
(1, 'aaa@a.fr', '123'),
(2, 'vince@afpa.fr', '123'),
(3, 'toto@rr.fr', '123');

--
-- Index pour les tables déchargées
--

--
-- Index pour la table `acteurs`
--
ALTER TABLE `acteurs`
  ADD PRIMARY KEY (`idActeur`),
  ADD UNIQUE KEY `acteur` (`nom`,`prenom`);

--
-- Index pour la table `films`
--
ALTER TABLE `films`
  ADD PRIMARY KEY (`idFilm`);

--
-- Index pour la table `role`
--
ALTER TABLE `role`
  ADD PRIMARY KEY (`idRole`),
  ADD KEY `fk_film_idx` (`idFilm`),
  ADD KEY `fk_acteur_idx` (`idActeur`),
  ADD KEY `unique` (`idActeur`,`idFilm`,`personnage`);

--
-- Index pour la table `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`idUser`);

--
-- AUTO_INCREMENT pour les tables déchargées
--

--
-- AUTO_INCREMENT pour la table `acteurs`
--
ALTER TABLE `acteurs`
  MODIFY `idActeur` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=20;

--
-- AUTO_INCREMENT pour la table `films`
--
ALTER TABLE `films`
  MODIFY `idFilm` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;

--
-- AUTO_INCREMENT pour la table `role`
--
ALTER TABLE `role`
  MODIFY `idRole` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=34;

--
-- AUTO_INCREMENT pour la table `user`
--
ALTER TABLE `user`
  MODIFY `idUser` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- Contraintes pour les tables déchargées
--

--
-- Contraintes pour la table `role`
--
ALTER TABLE `role`
  ADD CONSTRAINT `fk_acteur` FOREIGN KEY (`idActeur`) REFERENCES `acteurs` (`idActeur`) ON DELETE NO ACTION ON UPDATE NO ACTION,
  ADD CONSTRAINT `fk_film` FOREIGN KEY (`idFilm`) REFERENCES `films` (`idFilm`) ON DELETE NO ACTION ON UPDATE NO ACTION;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
