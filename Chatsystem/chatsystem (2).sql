-- phpMyAdmin SQL Dump
-- version 4.7.4
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Erstellungszeit: 28. Jan 2018 um 16:00
-- Server-Version: 10.1.26-MariaDB
-- PHP-Version: 7.1.9

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Datenbank: `chatsystem`
--

-- --------------------------------------------------------

--
-- Tabellenstruktur für Tabelle `gastzugang`
--

CREATE TABLE `gastzugang` (
  `id` int(11) NOT NULL,
  `username` varchar(255) CHARACTER SET utf8 NOT NULL,
  `message` varchar(255) CHARACTER SET utf8 NOT NULL,
  `date` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Daten für Tabelle `gastzugang`
--

INSERT INTO `gastzugang` (`id`, `username`, `message`, `date`) VALUES
(20, 'gunter', '', '2018-01-28 14:39:29'),
(21, '', '', '2018-01-28 14:42:55'),
(22, '', '', '2018-01-28 14:44:20'),
(23, '', '', '2018-01-28 14:47:27'),
(24, 'adsf', '', '2018-01-28 14:48:08'),
(25, '', 'haha', '2018-01-28 14:48:12'),
(26, '', 'naaaa wie gehts dir du kleiner apfel bauer? wieder mal deinen Traktor abgewÃ¼rgt? ', '2018-01-28 14:51:55'),
(27, '', 'sdfadsf', '2018-01-28 14:51:59'),
(28, 'haha', '', '2018-01-28 14:52:30'),
(29, '', 'jo', '2018-01-28 14:52:36'),
(30, 'gunter', '', '2018-01-28 14:54:16');

-- --------------------------------------------------------

--
-- Tabellenstruktur für Tabelle `posts`
--

CREATE TABLE `posts` (
  `id` int(11) NOT NULL,
  `message` varchar(255) CHARACTER SET utf8 NOT NULL,
  `name` varchar(255) CHARACTER SET utf8 NOT NULL,
  `date` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Daten für Tabelle `posts`
--

INSERT INTO `posts` (`id`, `message`, `name`, `date`) VALUES
(83, 'Hallo', 'RmaxH', '2018-01-27 14:49:30'),
(84, 'faaa', 'RmaxH', '2018-01-27 14:55:19'),
(85, 'faa', 'Test', '2018-01-27 14:56:21'),
(86, 'jaauu', 'Test', '2018-01-27 14:58:15'),
(87, 'nichrs', 'RmaxH', '2018-01-27 14:58:38'),
(88, 'pulled', 'Test', '2018-01-27 17:55:46'),
(89, 'asdfasdf', 'RmaxH', '2018-01-27 17:55:58'),
(90, 'ff', 'RmaxH', '2018-01-28 10:47:50'),
(91, 'fdsa', 'RmaxH', '2018-01-28 10:47:54'),
(92, 'f', 'RmaxH', '2018-01-28 10:47:55'),
(93, 'a', 'RmaxH', '2018-01-28 10:47:56'),
(94, 'a', 'RmaxH', '2018-01-28 10:47:58'),
(95, 'wahrscheinlichkeits', 'Test', '2018-01-28 10:58:04'),
(96, 'hihi', 'RmaxH', '2018-01-28 14:48:44');

-- --------------------------------------------------------

--
-- Tabellenstruktur für Tabelle `registriere`
--

CREATE TABLE `registriere` (
  `uid` int(11) NOT NULL,
  `username` varchar(255) CHARACTER SET utf8 NOT NULL,
  `email` varchar(255) CHARACTER SET utf8 NOT NULL,
  `passwort` varchar(255) CHARACTER SET utf8 NOT NULL,
  `isOnline` tinyint(255) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Daten für Tabelle `registriere`
--

INSERT INTO `registriere` (`uid`, `username`, `email`, `passwort`, `isOnline`) VALUES
(10, 'RmaxH', 'rouv@email.de', 'd41d8cd98f00b204e9800998ecf8427e', 0),
(11, 'Test', 'test@test.de', 'd41d8cd98f00b204e9800998ecf8427e', 0),
(12, 'gunter', 'gunter@email.de', 'd41d8cd98f00b204e9800998ecf8427e', NULL);

--
-- Indizes der exportierten Tabellen
--

--
-- Indizes für die Tabelle `gastzugang`
--
ALTER TABLE `gastzugang`
  ADD PRIMARY KEY (`id`);

--
-- Indizes für die Tabelle `posts`
--
ALTER TABLE `posts`
  ADD PRIMARY KEY (`id`);

--
-- Indizes für die Tabelle `registriere`
--
ALTER TABLE `registriere`
  ADD PRIMARY KEY (`uid`);

--
-- AUTO_INCREMENT für exportierte Tabellen
--

--
-- AUTO_INCREMENT für Tabelle `gastzugang`
--
ALTER TABLE `gastzugang`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=31;

--
-- AUTO_INCREMENT für Tabelle `posts`
--
ALTER TABLE `posts`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=97;

--
-- AUTO_INCREMENT für Tabelle `registriere`
--
ALTER TABLE `registriere`
  MODIFY `uid` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
