-- phpMyAdmin SQL Dump
-- version 4.6.4
-- https://www.phpmyadmin.net/
--
-- Client :  127.0.0.1
-- Généré le :  Mar 16 Mai 2017 à 05:35
-- Version du serveur :  5.7.14
-- Version de PHP :  5.6.25

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de données :  `inte2`
--

-- --------------------------------------------------------

--
-- Structure de la table `aboutus`
--

CREATE TABLE `aboutus` (
  `id` int(10) UNSIGNED NOT NULL,
  `title` varchar(255) NOT NULL,
  `source` text NOT NULL,
  `alt` varchar(255) NOT NULL,
  `text` text NOT NULL,
  `href` text NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8;

--
-- Contenu de la table `aboutus`
--

INSERT INTO `aboutus` (`id`, `title`, `source`, `alt`, `text`, `href`) VALUES
(1, 'About us', 'http://placehold.it/215x90', 'test', 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nunc non diam erat. In fringilla massa ut nisi ullamcorper pellentesque. Quisque non luctus sem. Nullam non magna vel nisi posuere bibendum vitae sed dui. ', '#');

-- --------------------------------------------------------

--
-- Structure de la table `article`
--

CREATE TABLE `article` (
  `id` int(10) UNSIGNED NOT NULL,
  `title` varchar(255) NOT NULL,
  `source` varchar(255) NOT NULL,
  `alt` varchar(255) NOT NULL,
  `text` text NOT NULL,
  `href` text NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8;

--
-- Contenu de la table `article`
--

INSERT INTO `article` (`id`, `title`, `source`, `alt`, `text`, `href`) VALUES
(4, 'your <i>title here</i>', 'http://placehold.it/225x140', 'test', 'Vestibulumaccumsan egestibulum eu justo convallis augue estas aenean elit intesque sed. ', '#'),
(5, 'your <i>title here</i>', 'http://placehold.it/225x140', 'test', 'Vestibulumaccumsan egestibulum eu justo convallis augue estas aenean elit intesque sed. ', '#'),
(6, 'your <i>title here</i>', 'http://placehold.it/225x140', 'test', 'Vestibulumaccumsan egestibulum eu justo convallis augue estas aenean elit intesque sed. ', '#'),
(7, 'your <i>title here</i>', 'http://placehold.it/225x140', 'test', 'Vestibulumaccumsan egestibulum eu justo convallis augue estas aenean elit intesque sed. ', '#');

-- --------------------------------------------------------

--
-- Structure de la table `header`
--

CREATE TABLE `header` (
  `id` int(10) UNSIGNED NOT NULL,
  `title` varchar(255) NOT NULL,
  `text` text NOT NULL,
  `href` text NOT NULL,
  `source` text NOT NULL,
  `alt` varchar(255) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8;

--
-- Contenu de la table `header`
--

INSERT INTO `header` (`id`, `title`, `text`, `href`, `source`, `alt`) VALUES
(1, 'A HUGE<br/> TITLE HERE', 'Cursuspenatisaccum ut curabitur nulla tellus tor ames a in curabitur pede. Idet mollisi eros dis orci congue elis et curabitur consequam intesque. Curabiturpisametur in ante. ', '#', 'img/background-slider.jpg', 'slider');

-- --------------------------------------------------------

--
-- Structure de la table `lastblog`
--

CREATE TABLE `lastblog` (
  `id` int(10) UNSIGNED NOT NULL,
  `title` varchar(255) NOT NULL,
  `date` date NOT NULL,
  `text` text NOT NULL,
  `href` text NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8;

--
-- Contenu de la table `lastblog`
--

INSERT INTO `lastblog` (`id`, `title`, `date`, `text`, `href`) VALUES
(1, 'post title', '2016-05-25', 'Nulla facilisi. Ut fringilla. Suspendisse potenti. Nunc feugiat mi a tellus consequat imperdiet. ', '#'),
(2, 'post title', '2017-01-03', 'Nulla facilisi. Ut fringilla. Suspendisse potenti. Nunc feugiat mi a tellus consequat imperdiet. ', '');

-- --------------------------------------------------------

--
-- Structure de la table `menu`
--

CREATE TABLE `menu` (
  `id` int(10) UNSIGNED NOT NULL,
  `title` varchar(255) NOT NULL,
  `href` text NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8;

--
-- Contenu de la table `menu`
--

INSERT INTO `menu` (`id`, `title`, `href`) VALUES
(1, 'home', '#'),
(2, 'style demo', '#'),
(3, 'full width', '#'),
(5, 'drop down', '#'),
(6, 'portfolio', '#'),
(7, 'gallery', '#');

-- --------------------------------------------------------

--
-- Structure de la table `quicklink`
--

CREATE TABLE `quicklink` (
  `id` int(10) UNSIGNED NOT NULL,
  `text` varchar(255) NOT NULL,
  `href` text NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8;

--
-- Contenu de la table `quicklink`
--

INSERT INTO `quicklink` (`id`, `text`, `href`) VALUES
(1, 'Lorem ipsum dolor sit', '#'),
(2, 'Lorem ipsum dolor sit', '#'),
(3, 'Ament consectetur', '#'),
(4, 'Ament consectetur', '#'),
(5, 'Praesent vel sem id', '#'),
(6, 'Praesent vel sem id', '#'),
(7, 'Curabitur hendrerit est', '#'),
(8, 'Curabitur hendrerit est', '#'),
(9, 'Cras id augue nunc', '#'),
(10, 'Cras id augue nunc', '#');

--
-- Index pour les tables exportées
--

--
-- Index pour la table `aboutus`
--
ALTER TABLE `aboutus`
  ADD PRIMARY KEY (`id`);

--
-- Index pour la table `article`
--
ALTER TABLE `article`
  ADD PRIMARY KEY (`id`);

--
-- Index pour la table `header`
--
ALTER TABLE `header`
  ADD PRIMARY KEY (`id`);

--
-- Index pour la table `lastblog`
--
ALTER TABLE `lastblog`
  ADD PRIMARY KEY (`id`);

--
-- Index pour la table `menu`
--
ALTER TABLE `menu`
  ADD PRIMARY KEY (`id`);

--
-- Index pour la table `quicklink`
--
ALTER TABLE `quicklink`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT pour les tables exportées
--

--
-- AUTO_INCREMENT pour la table `aboutus`
--
ALTER TABLE `aboutus`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
--
-- AUTO_INCREMENT pour la table `article`
--
ALTER TABLE `article`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;
--
-- AUTO_INCREMENT pour la table `header`
--
ALTER TABLE `header`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
--
-- AUTO_INCREMENT pour la table `lastblog`
--
ALTER TABLE `lastblog`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
--
-- AUTO_INCREMENT pour la table `menu`
--
ALTER TABLE `menu`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;
--
-- AUTO_INCREMENT pour la table `quicklink`
--
ALTER TABLE `quicklink`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
