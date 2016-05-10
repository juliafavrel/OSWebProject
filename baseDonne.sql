-- phpMyAdmin SQL Dump
-- version 4.4.10
-- http://www.phpmyadmin.net
--
-- Client :  localhost:8889
-- Généré le :  Lun 02 Mai 2016 à 17:52
-- Version du serveur :  5.5.42
-- Version de PHP :  5.6.10

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";

--
-- Base de données :  `club`
--

-- --------------------------------------------------------

--
-- Structure de la table `admin`
--

CREATE TABLE `admin` (
  `idPerson` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Structure de la table `evt`
--

CREATE TABLE `evt` (
  `idEvt` int(11) NOT NULL,
  `nameEvt` varchar(255) NOT NULL,
  `dateEvt` int(11) NOT NULL,
  `placeEvt` varchar(255) NOT NULL,
  `priceEvt` int(11) NOT NULL,
  `descEvt` varchar(255) NOT NULL,
  `nbEvt` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Structure de la table `person`
--

CREATE TABLE `person` (
  `idPerson` int(11) NOT NULL,
  `pseudo` varchar(255) NOT NULL,
  `password` varchar(255) NOT NULL,
  `firstName` varchar(255) NOT NULL,
  `lastName` varchar(255) NOT NULL,
  `birthDate` date NOT NULL,
  `mail` varchar(255) NOT NULL,
  `phone` varchar(255) NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=latin1;

--
-- Contenu de la table `person`
--

INSERT INTO `person` (`idPerson`, `pseudo`, `password`, `firstName`, `lastName`, `birthDate`, `mail`, `phone`) VALUES
(1, 'fanny.romo', 'club', 'Fanny', 'Romo', '1985-05-21', 'fanny.romo@live.fr', '0908070605');

-- --------------------------------------------------------

--
-- Structure de la table `preRegistr`
--

CREATE TABLE `preRegistr` (
  `idClient` int(11) NOT NULL,
  `idEvent` int(11) NOT NULL,
  `dateRegistration` date DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Structure de la table `registr`
--

CREATE TABLE `registr` (
  `idClient` int(11) NOT NULL,
  `idEvent` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Index pour les tables exportées
--

--
-- Index pour la table `admin`
--
ALTER TABLE `admin`
  ADD PRIMARY KEY (`idPerson`);

--
-- Index pour la table `evt`
--
ALTER TABLE `evt`
  ADD PRIMARY KEY (`idEvt`);

--
-- Index pour la table `person`
--
ALTER TABLE `person`
  ADD PRIMARY KEY (`idPerson`);

--
-- Index pour la table `preRegistr`
--
ALTER TABLE `preRegistr`
  ADD PRIMARY KEY (`idClient`,`idEvent`),
  ADD KEY `idEvent` (`idEvent`);

--
-- Index pour la table `registr`
--
ALTER TABLE `registr`
  ADD PRIMARY KEY (`idClient`,`idEvent`),
  ADD KEY `idEvent` (`idEvent`);

--
-- AUTO_INCREMENT pour les tables exportées
--

--
-- AUTO_INCREMENT pour la table `admin`
--
ALTER TABLE `admin`
  MODIFY `idPerson` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT pour la table `evt`
--
ALTER TABLE `evt`
  MODIFY `idEvt` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT pour la table `person`
--
ALTER TABLE `person`
  MODIFY `idPerson` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=2;
--
-- Contraintes pour les tables exportées
--

--
-- Contraintes pour la table `preRegistr`
--
ALTER TABLE `preRegistr`
  ADD CONSTRAINT `preregistr_ibfk_1` FOREIGN KEY (`idClient`) REFERENCES `person` (`idPerson`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `preregistr_ibfk_2` FOREIGN KEY (`idEvent`) REFERENCES `evt` (`idEvt`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Contraintes pour la table `registr`
--
ALTER TABLE `registr`
  ADD CONSTRAINT `registr_ibfk_1` FOREIGN KEY (`idClient`) REFERENCES `person` (`idPerson`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `registr_ibfk_2` FOREIGN KEY (`idEvent`) REFERENCES `evt` (`idEvt`) ON DELETE CASCADE ON UPDATE CASCADE;
