-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Czas generowania: 06 Lis 2021, 00:09
-- Wersja serwera: 10.4.21-MariaDB
-- Wersja PHP: 8.0.10

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Baza danych: `przychodnia`
--

-- --------------------------------------------------------

--
-- Struktura tabeli dla tabeli `gabinety`
--

CREATE TABLE `gabinety` (
  `id_gabinetu` int(11) NOT NULL,
  `numer_gabinetu` varchar(4) COLLATE utf8_polish_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_polish_ci;

--
-- Zrzut danych tabeli `gabinety`
--

INSERT INTO `gabinety` (`id_gabinetu`, `numer_gabinetu`) VALUES
(1, '1'),
(2, '2');

-- --------------------------------------------------------

--
-- Struktura tabeli dla tabeli `lekarze`
--

CREATE TABLE `lekarze` (
  `id_lekarza` int(11) NOT NULL,
  `tytul` varchar(15) COLLATE utf8_polish_ci NOT NULL,
  `nazwisko_lekarza` varchar(25) COLLATE utf8_polish_ci NOT NULL,
  `imie_lekarza` varchar(15) COLLATE utf8_polish_ci NOT NULL,
  `id_specjonalnosci` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_polish_ci;

--
-- Zrzut danych tabeli `lekarze`
--

INSERT INTO `lekarze` (`id_lekarza`, `tytul`, `nazwisko_lekarza`, `imie_lekarza`, `id_specjonalnosci`) VALUES
(1, 'Lek.med', 'Szymanski', 'Artur', 1),
(2, 'Dr.Med', 'Zmijewski', 'Marcin', 2);

-- --------------------------------------------------------

--
-- Struktura tabeli dla tabeli `logowanie`
--

CREATE TABLE `logowanie` (
  `login` varchar(20) COLLATE utf8_polish_ci NOT NULL,
  `haslo` varchar(25) COLLATE utf8_polish_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_polish_ci;

--
-- Zrzut danych tabeli `logowanie`
--

INSERT INTO `logowanie` (`login`, `haslo`) VALUES
('login', 'haslo'),
('login', 'haslo'),
('login', 'haslo'),
('login', 'haslo');

-- --------------------------------------------------------

--
-- Struktura tabeli dla tabeli `pacjenci`
--

CREATE TABLE `pacjenci` (
  `id_pacjenta` int(11) NOT NULL,
  `nazwisko_pacjenta` varchar(25) COLLATE utf8_polish_ci NOT NULL,
  `imie_pacjenta` varchar(15) COLLATE utf8_polish_ci NOT NULL,
  `adres` varchar(25) COLLATE utf8_polish_ci NOT NULL,
  `telefon` bigint(9) NOT NULL,
  `pesel` bigint(11) NOT NULL,
  `ulica` varchar(12) COLLATE utf8_polish_ci NOT NULL,
  `nr_domu` int(4) NOT NULL,
  `nr_mieszkania` int(4) NOT NULL,
  `kod_pocztowy` varchar(6) COLLATE utf8_polish_ci NOT NULL,
  `miejscowosc` varchar(15) COLLATE utf8_polish_ci NOT NULL,
  `email` varchar(25) COLLATE utf8_polish_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_polish_ci;

--
-- Zrzut danych tabeli `pacjenci`
--

INSERT INTO `pacjenci` (`id_pacjenta`, `nazwisko_pacjenta`, `imie_pacjenta`, `adres`, `telefon`, `pesel`, `ulica`, `nr_domu`, `nr_mieszkania`, `kod_pocztowy`, `miejscowosc`, `email`) VALUES
(1, 'Mruk', 'Mateusz', '', 0, 11111111111, 'mila', 11, 22, '20-122', 'lublin', 'mati@mati.com'),
(2, 'Nowak', 'Ziemowit', '', 0, 22222222222, 'sloneczna', 22, 33, '20-116', 'warszawa', 'nowa@nowa.com'),
(3, 'testowy', 'albert', 'lublin', 111111111, 0, '', 0, 0, '', '', '');

-- --------------------------------------------------------

--
-- Struktura tabeli dla tabeli `specjonalnosci`
--

CREATE TABLE `specjonalnosci` (
  `id_specjonalnosci` int(11) NOT NULL,
  `nazwa_specjonalnosci` varchar(25) COLLATE utf8_polish_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_polish_ci;

--
-- Zrzut danych tabeli `specjonalnosci`
--

INSERT INTO `specjonalnosci` (`id_specjonalnosci`, `nazwa_specjonalnosci`) VALUES
(1, 'Lek.med'),
(2, 'Dr.Med');

-- --------------------------------------------------------

--
-- Struktura tabeli dla tabeli `wizyty`
--

CREATE TABLE `wizyty` (
  `id_wizyty` int(11) NOT NULL,
  `id_pacjenta` int(11) NOT NULL,
  `id_lekarza` int(11) NOT NULL,
  `data` date NOT NULL,
  `godzina` time NOT NULL,
  `id_gabinetu` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_polish_ci;

--
-- Zrzut danych tabeli `wizyty`
--

INSERT INTO `wizyty` (`id_wizyty`, `id_pacjenta`, `id_lekarza`, `data`, `godzina`, `id_gabinetu`) VALUES
(1, 1, 1, '2021-11-11', '19:28:14', 1),
(2, 2, 2, '2021-11-02', '14:47:17', 2),
(3, 3, 3, '2021-11-01', '19:28:14', 3);

--
-- Indeksy dla zrzutów tabel
--

--
-- Indeksy dla tabeli `gabinety`
--
ALTER TABLE `gabinety`
  ADD PRIMARY KEY (`id_gabinetu`),
  ADD KEY `id_gabinetu` (`id_gabinetu`);

--
-- Indeksy dla tabeli `lekarze`
--
ALTER TABLE `lekarze`
  ADD PRIMARY KEY (`id_lekarza`),
  ADD KEY `id_specjonalnosci` (`id_specjonalnosci`),
  ADD KEY `id_lekarza` (`id_lekarza`);

--
-- Indeksy dla tabeli `pacjenci`
--
ALTER TABLE `pacjenci`
  ADD PRIMARY KEY (`id_pacjenta`),
  ADD KEY `id_pacjenta` (`id_pacjenta`);

--
-- Indeksy dla tabeli `specjonalnosci`
--
ALTER TABLE `specjonalnosci`
  ADD PRIMARY KEY (`id_specjonalnosci`),
  ADD KEY `id_specjonalnosci` (`id_specjonalnosci`);

--
-- Indeksy dla tabeli `wizyty`
--
ALTER TABLE `wizyty`
  ADD PRIMARY KEY (`id_wizyty`),
  ADD KEY `id_lekarza` (`id_lekarza`),
  ADD KEY `id_pacjenta` (`id_pacjenta`),
  ADD KEY `id_gabinetu` (`id_gabinetu`);

--
-- AUTO_INCREMENT dla zrzuconych tabel
--

--
-- AUTO_INCREMENT dla tabeli `gabinety`
--
ALTER TABLE `gabinety`
  MODIFY `id_gabinetu` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT dla tabeli `lekarze`
--
ALTER TABLE `lekarze`
  MODIFY `id_lekarza` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT dla tabeli `pacjenci`
--
ALTER TABLE `pacjenci`
  MODIFY `id_pacjenta` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT dla tabeli `specjonalnosci`
--
ALTER TABLE `specjonalnosci`
  MODIFY `id_specjonalnosci` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT dla tabeli `wizyty`
--
ALTER TABLE `wizyty`
  MODIFY `id_wizyty` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- Ograniczenia dla zrzutów tabel
--

--
-- Ograniczenia dla tabeli `gabinety`
--
ALTER TABLE `gabinety`
  ADD CONSTRAINT `gabinety_ibfk_1` FOREIGN KEY (`id_gabinetu`) REFERENCES `wizyty` (`id_gabinetu`);

--
-- Ograniczenia dla tabeli `lekarze`
--
ALTER TABLE `lekarze`
  ADD CONSTRAINT `lekarze_ibfk_1` FOREIGN KEY (`id_lekarza`) REFERENCES `wizyty` (`id_lekarza`);

--
-- Ograniczenia dla tabeli `pacjenci`
--
ALTER TABLE `pacjenci`
  ADD CONSTRAINT `pacjenci_ibfk_1` FOREIGN KEY (`id_pacjenta`) REFERENCES `wizyty` (`id_pacjenta`);

--
-- Ograniczenia dla tabeli `specjonalnosci`
--
ALTER TABLE `specjonalnosci`
  ADD CONSTRAINT `specjonalnosci_ibfk_1` FOREIGN KEY (`id_specjonalnosci`) REFERENCES `lekarze` (`id_specjonalnosci`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
