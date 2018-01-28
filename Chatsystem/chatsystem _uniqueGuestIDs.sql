-- phpMyAdmin SQL Dump
-- version 4.7.4
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Erstellungszeit: 28. Jan 2018 um 19:06
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
(1, 'test', '', '2018-01-28 17:49:19'),
(2, 'fzt', '', '2018-01-28 17:54:32'),
(3, 'sgf', '', '2018-01-28 17:57:05'),
(4, 'dsg', '', '2018-01-28 17:59:23'),
(5, 'dsg', '', '2018-01-28 18:00:26'),
(6, 'dsgafs', '', '2018-01-28 18:01:26'),
(7, '', 'msg', '2018-01-28 18:02:21'),
(8, '', 'test', '2018-01-28 18:04:46');

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
(12, 'hallotest', 'Mona', '2018-01-26 19:01:37'),
(13, 'grd', 'User1', '2018-01-26 19:47:29'),
(14, 'yeah', 'User1', '2018-01-26 19:49:10'),
(15, 'yeah', 'User1', '2018-01-26 19:49:17'),
(16, '', 'User1', '2018-01-27 15:43:14'),
(17, 'lololo', 'User1', '2018-01-27 19:29:19'),
(18, 'hÃ¤Ã¤', 'User1', '2018-01-27 19:44:35'),
(19, 'ad wdawd hwadhuwioaduid uawhdwuhd wuadoahpf asf hioafw iofhwa hgfwif hiwahfpwahfipoafowÃ¼ahfwiahf ioÃ¼whf oahfawh f', 'User1', '2018-01-27 20:10:46'),
(20, 'blub', 'User1', '2018-01-27 20:21:30'),
(21, 'dw', 'User1', '2018-01-27 20:22:09'),
(22, 'ddddddddddddddddddddddddddddddddddddddddddddddddddddddddddddddddddddddddddddddddddddddddddddddddddddddddddddddddddddddddddddddddddddddddddddddddddddddddddd', 'User1', '2018-01-27 21:10:54'),
(23, 'ich bin der neue hier', 'User1', '2018-01-27 21:24:29'),
(24, 'dddddddddddddddddddddddddddddddddddddddddddddddddddddddddddddddddddddddddddddddddddddddddddddddddddddddddddddddddddddddddddddddddddddddddddddddddddddddddddddddddddddddddddddddddddddddddddddddddddddddddddddddddddddddddddddddddddddddddddddddddddddd', 'User1', '2018-01-27 21:34:03'),
(25, 'ok tun wir mal so als wÃ¤re das hier eine Unterhaltung', 'User1', '2018-01-27 21:47:22'),
(26, 'mit realistischen Texten!!!', 'User1', '2018-01-27 21:47:30'),
(27, 'Damit mal mal sieht wie das so wÃ¤re wenn man hier schreiben wÃ¼rde', 'User1', '2018-01-27 21:47:43'),
(28, 'und nicht einfach nur son Test-Kram den eh nie einer posten wÃ¼rde', 'User1', '2018-01-27 21:47:59'),
(29, 'so sieht man halt auch viel besser wie gut man die Zeilen so auseinander halten kann', 'User1', '2018-01-27 21:48:14'),
(30, 'das geht im moment eher medium-gut', 'User1', '2018-01-27 21:48:33'),
(31, 'wie viel muss ich noch schreiben bis die ganzen ds aus dem screen sind?', 'User1', '2018-01-27 21:48:55'),
(32, 'gleich ist die Datenbank voll :P', 'User1', '2018-01-27 21:49:04'),
(33, 'noch', 'User1', '2018-01-27 21:49:21'),
(34, '2 Nachrichten!', 'User1', '2018-01-27 21:49:26'),
(35, 'mal jemand anders ^^', 'lara', '2018-01-27 21:58:45'),
(36, 'teeeest', 'NaWieWÃ¤rsMalMitNemUserMitNemRichtigÃœbelLangenNamen', '2018-01-27 22:28:47'),
(37, '', 'NaWieWÃ¤rsMalMitNemUserMitNemRichtigÃœbelLangenNamen', '2018-01-27 23:38:16'),
(38, 'warte', 'NaWieWÃ¤rsMalMitNemUserMitNemRichtigÃœbelLangenNamen', '2018-01-27 23:38:30'),
(39, 'test', 'NaWieWÃ¤rsMalMitNemUserMitNemRichtigÃœbelLangenNamen', '2018-01-27 23:38:44'),
(40, 'jesusChris', 'lara', '2018-01-27 23:44:18'),
(41, 't', 'lara', '2018-01-27 23:44:27'),
(42, '', 'lara', '2018-01-27 23:47:33'),
(43, '', 'lara', '2018-01-27 23:47:34'),
(44, '', 'lara', '2018-01-27 23:47:35'),
(45, '', 'lara', '2018-01-27 23:47:36'),
(46, '', 'lara', '2018-01-27 23:47:37'),
(47, '', 'lara', '2018-01-27 23:47:38'),
(48, '', 'lara', '2018-01-27 23:47:38'),
(49, '', 'lara', '2018-01-27 23:47:38'),
(50, '', 'lara', '2018-01-27 23:47:39'),
(51, '', 'lara', '2018-01-27 23:47:41'),
(52, '', 'lara', '2018-01-27 23:47:50'),
(53, 'WUUUUUUUUU FUCKING HUUUUUUU ', 'lara', '2018-01-28 00:00:31'),
(54, 'hÃ¤ warte', 'lara', '2018-01-28 00:00:56'),
(55, '', 'lara', '2018-01-28 00:01:24'),
(56, '\'\'\'\'\'\'', 'lara', '2018-01-28 00:01:29'),
(57, '  ', 'lara', '2018-01-28 00:01:44'),
(58, '\'\'\'\'\'', 'lara', '2018-01-28 00:01:51'),
(59, '\'', 'lara', '2018-01-28 00:01:55'),
(60, 'Note: Wenn man nur eins davon \' schreibt wird die nachricht nicht geschickt.. wÃ¤r doof ne', 'lara', '2018-01-28 00:02:20'),
(61, '(bei 2 gehts)', 'lara', '2018-01-28 00:02:43'),
(62, 'ne quatsch: Bei einer ungeraden anzahl gehts', 'lara', '2018-01-28 00:03:01'),
(63, 'warte ist es jetzt kauptt', 'lara', '2018-01-28 00:03:56'),
(64, 'fucking hell', 'lara', '2018-01-28 00:04:05'),
(65, 'test', 'lara', '2018-01-28 00:04:21'),
(66, 'NICENSTEIN', 'lara', '2018-01-28 00:04:31'),
(67, 'wo ist mein nobel preis?!', 'lara', '2018-01-28 00:04:41'),
(68, 'so ', 'lara', '2018-01-28 00:05:06'),
(69, 'test #5002', 'lara', '2018-01-28 00:05:24'),
(70, 'tests sind ein wichtiger Bestandteil der Softwareentwicklung! ', 'lara', '2018-01-28 00:09:14'),
(71, 'Ein Test ist erst erfolgreich, wenn das was man will NICHT klappt', 'lara', '2018-01-28 00:09:31'),
(72, 'Also: immer', 'lara', '2018-01-28 00:09:49'),
(73, 'Bei einer ungeraden Zahl an \'s geht\'s Ã¼brigens NICHT... wenn dann 2 davon oder 4 oder so ', 'lara', '2018-01-28 00:11:23'),
(74, 'h', 'lara', '2018-01-28 00:20:23'),
(75, 'waaaarrrrruuuuummm', 'lara', '2018-01-28 00:24:16'),
(76, 'test', 'fail', '2018-01-28 14:07:45'),
(77, 'waiiit', 'fail', '2018-01-28 14:07:50'),
(78, 'omg', '', '2018-01-28 14:08:04'),
(79, 'testtest', 'fail', '2018-01-28 14:08:41'),
(80, 'tset', '', '2018-01-28 14:14:54'),
(81, 'mehr test!', '', '2018-01-28 14:15:15'),
(82, 'hÃ¤', '', '2018-01-28 14:15:24'),
(83, 'wait', '', '2018-01-28 14:15:41'),
(84, 'menno', '', '2018-01-28 16:25:28'),
(85, 'mmmmmeeeeeennnnooooo', '', '2018-01-28 16:41:17'),
(86, 'warum geht der rotz nicht einfach?', '', '2018-01-28 16:41:32');

-- --------------------------------------------------------

--
-- Tabellenstruktur für Tabelle `registriere`
--

CREATE TABLE `registriere` (
  `uid` int(11) NOT NULL,
  `username` varchar(255) CHARACTER SET utf8 NOT NULL,
  `email` varchar(255) CHARACTER SET utf8 NOT NULL,
  `passwort` varchar(255) CHARACTER SET utf8 NOT NULL,
  `isOnline` tinyint(255) NOT NULL DEFAULT '0'
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Daten für Tabelle `registriere`
--

INSERT INTO `registriere` (`uid`, `username`, `email`, `passwort`, `isOnline`) VALUES
(7, 'RmaxH', 'meine@email.de', 'Test123', 0),
(8, 'Mona', 'monas@email.de', 'mona', 0),
(9, 'User1', 'u@u', 'asdf', 0),
(10, 'lara', 'l@l', 'd41d8cd98f00b204e9800998ecf8427e', 0),
(11, 'NaWieWÃ¤rsMalMitNemUserMitNemRichtigÃœbelLangenNamen', 'test@test.de', 'd41d8cd98f00b204e9800998ecf8427e', 0),
(12, 'User1', 'o@o', 'd41d8cd98f00b204e9800998ecf8427e', 0),
(13, 'User2', 'em@il', 'd41d8cd98f00b204e9800998ecf8427e', 0),
(14, 'mehrUser', 'bla@blub', 'd41d8cd98f00b204e9800998ecf8427e', 0),
(15, 'fail', 'f@ail', 'd41d8cd98f00b204e9800998ecf8427e', 1);

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
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT für Tabelle `posts`
--
ALTER TABLE `posts`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=87;

--
-- AUTO_INCREMENT für Tabelle `registriere`
--
ALTER TABLE `registriere`
  MODIFY `uid` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=16;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
