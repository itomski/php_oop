-- phpMyAdmin SQL Dump
-- version 5.2.3
-- https://www.phpmyadmin.net/
--
-- Host: mysql
-- Erstellungszeit: 20. Okt 2025 um 09:49
-- Server-Version: 9.4.0
-- PHP-Version: 8.3.26

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Datenbank: `test`
--

-- --------------------------------------------------------

--
-- Tabellenstruktur für Tabelle `buchungen`
--

CREATE TABLE `buchungen` (
  `id` int UNSIGNED NOT NULL,
  `start` date NOT NULL,
  `ende` date NOT NULL,
  `k_id` int UNSIGNED NOT NULL,
  `f_id` int UNSIGNED NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- Daten für Tabelle `buchungen`
--

INSERT INTO `buchungen` (`id`, `start`, `ende`, `k_id`, `f_id`) VALUES
(1, '2025-11-08', '2025-11-22', 1, 1);

-- --------------------------------------------------------

--
-- Tabellenstruktur für Tabelle `fahrzeuge`
--

CREATE TABLE `fahrzeuge` (
  `id` int UNSIGNED NOT NULL,
  `kennzeichen` varchar(12) NOT NULL,
  `marke` varchar(20) NOT NULL,
  `modell` varchar(50) NOT NULL,
  `baujahr` year NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- Daten für Tabelle `fahrzeuge`
--

INSERT INTO `fahrzeuge` (`id`, `kennzeichen`, `marke`, `modell`, `baujahr`) VALUES
(1, 'HH:AB123', 'Renault', 'Scenic', '2024');

-- --------------------------------------------------------

--
-- Tabellenstruktur für Tabelle `kunden`
--

CREATE TABLE `kunden` (
  `id` int UNSIGNED NOT NULL,
  `vorname` varchar(50) NOT NULL,
  `nachname` varchar(50) NOT NULL,
  `strasse` varchar(50) NOT NULL,
  `nr` varchar(10) NOT NULL,
  `plz` varchar(5) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- Daten für Tabelle `kunden`
--

INSERT INTO `kunden` (`id`, `vorname`, `nachname`, `strasse`, `nr`, `plz`) VALUES
(1, 'Peter', 'Parker', 'Musterweg', '22', '23456'),
(2, 'Bruce', 'Banner', 'Musterweg', '21', '23456');

-- --------------------------------------------------------

--
-- Tabellenstruktur für Tabelle `postleitzahlen`
--

CREATE TABLE `postleitzahlen` (
  `plz` varchar(5) NOT NULL,
  `ort` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- Daten für Tabelle `postleitzahlen`
--

INSERT INTO `postleitzahlen` (`plz`, `ort`) VALUES
('23456', 'Musterstedt');

--
-- Indizes der exportierten Tabellen
--

--
-- Indizes für die Tabelle `buchungen`
--
ALTER TABLE `buchungen`
  ADD PRIMARY KEY (`id`),
  ADD KEY `k_id` (`k_id`),
  ADD KEY `f_id` (`f_id`);

--
-- Indizes für die Tabelle `fahrzeuge`
--
ALTER TABLE `fahrzeuge`
  ADD PRIMARY KEY (`id`);

--
-- Indizes für die Tabelle `kunden`
--
ALTER TABLE `kunden`
  ADD PRIMARY KEY (`id`),
  ADD KEY `plz` (`plz`);

--
-- Indizes für die Tabelle `postleitzahlen`
--
ALTER TABLE `postleitzahlen`
  ADD PRIMARY KEY (`plz`);

--
-- AUTO_INCREMENT für exportierte Tabellen
--

--
-- AUTO_INCREMENT für Tabelle `buchungen`
--
ALTER TABLE `buchungen`
  MODIFY `id` int UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT für Tabelle `fahrzeuge`
--
ALTER TABLE `fahrzeuge`
  MODIFY `id` int UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT für Tabelle `kunden`
--
ALTER TABLE `kunden`
  MODIFY `id` int UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- Constraints der exportierten Tabellen
--

--
-- Constraints der Tabelle `buchungen`
--
ALTER TABLE `buchungen`
  ADD CONSTRAINT `buchungen_ibfk_1` FOREIGN KEY (`k_id`) REFERENCES `kunden` (`id`),
  ADD CONSTRAINT `buchungen_ibfk_2` FOREIGN KEY (`f_id`) REFERENCES `fahrzeuge` (`id`);

--
-- Constraints der Tabelle `kunden`
--
ALTER TABLE `kunden`
  ADD CONSTRAINT `kunden_ibfk_1` FOREIGN KEY (`plz`) REFERENCES `postleitzahlen` (`plz`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
