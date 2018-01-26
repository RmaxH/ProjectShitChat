-- phpMyAdmin SQL Dump
-- version 4.7.4
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Erstellungszeit: 26. Jan 2018 um 20:12
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
(1, '', 'Mona', '2018-01-25 20:32:57'),
(2, '', 'Mona', '2018-01-25 20:35:14'),
(3, '', 'Mona', '2018-01-26 18:39:09'),
(4, '', 'Mona', '2018-01-26 18:41:32'),
(5, '', 'Mona', '2018-01-26 18:41:47'),
(6, '', 'Mona', '2018-01-26 18:41:50'),
(7, '', 'Mona', '2018-01-26 18:46:28'),
(8, '', 'Mona', '2018-01-26 18:55:49'),
(9, '', 'Mona', '2018-01-26 18:58:37'),
(10, 'hallo', 'Mona', '2018-01-26 18:59:53'),
(11, 'hallo', 'Mona', '2018-01-26 19:01:32'),
(12, 'hallotest', 'Mona', '2018-01-26 19:01:37');

-- --------------------------------------------------------

--
-- Tabellenstruktur für Tabelle `registriere`
--

CREATE TABLE `registriere` (
  `uid` int(11) NOT NULL,
  `username` varchar(255) CHARACTER SET utf8 NOT NULL,
  `email` varchar(255) CHARACTER SET utf8 NOT NULL,
  `passwort` varchar(255) CHARACTER SET utf8 NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Daten für Tabelle `registriere`
--

INSERT INTO `registriere` (`uid`, `username`, `email`, `passwort`) VALUES
(7, 'RmaxH', 'meine@email.de', 'Test123'),
(8, 'Mona', 'monas@email.de', 'mona');

--
-- Indizes der exportierten Tabellen
--

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
-- AUTO_INCREMENT für Tabelle `posts`
--
ALTER TABLE `posts`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;

--
-- AUTO_INCREMENT für Tabelle `registriere`
--
ALTER TABLE `registriere`
  MODIFY `uid` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
