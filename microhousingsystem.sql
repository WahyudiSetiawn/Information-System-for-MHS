-- phpMyAdmin SQL Dump
-- version 4.8.5
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Waktu pembuatan: 06 Bulan Mei 2020 pada 09.07
-- Versi server: 10.1.38-MariaDB
-- Versi PHP: 7.3.3

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `microhousingsystem`
--

-- --------------------------------------------------------

--
-- Struktur dari tabel `tb_allocation`
--

CREATE TABLE `tb_allocation` (
  `allocation_ID` int(255) NOT NULL,
  `from_Date` date NOT NULL,
  `duration` int(255) NOT NULL,
  `end_Date` date NOT NULL,
  `unit_ID` int(255) NOT NULL,
  `application_ID` int(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Struktur dari tabel `tb_applicant`
--

CREATE TABLE `tb_applicant` (
  `email` varchar(255) NOT NULL,
  `monthly_Income` decimal(21,0) NOT NULL,
  `username` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Struktur dari tabel `tb_application`
--

CREATE TABLE `tb_application` (
  `application_ID` int(255) NOT NULL,
  `application_Date` int(255) NOT NULL,
  `required_Month` varchar(255) NOT NULL,
  `required_Year` varchar(255) NOT NULL,
  `status` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `residence_ID` int(255) NOT NULL,
  `staff_ID` int(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `tb_application`
--

INSERT INTO `tb_application` (`application_ID`, `application_Date`, `required_Month`, `required_Year`, `status`, `email`, `residence_ID`, `staff_ID`) VALUES
(1, 2020, '2020-06', '2020', 'New', 'cemboleke@gmail.com', 1, 1),
(37, 2020, '2021-01', '2021', 'New', 'twicejang@gmail.com', 2, 1),
(38, 2020, '2020-06', '2020', 'New', 'bagusparadhita@gmail.com', 4, 2),
(39, 2020, '2021-01', '2021', 'New', 'cemboleke@gmail.com', 1, 1),
(40, 2020, '2021-01', '2021', 'New', 'cemboleke@gmail.com', 1, 1),
(41, 2020, '2021-01', '2021', 'New', 'cemboleke@gmail.com', 1, 1);

-- --------------------------------------------------------

--
-- Struktur dari tabel `tb_housing_officer`
--

CREATE TABLE `tb_housing_officer` (
  `staff_ID` int(255) NOT NULL,
  `username` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Struktur dari tabel `tb_residence`
--

CREATE TABLE `tb_residence` (
  `residence_ID` int(255) NOT NULL,
  `address` varchar(255) NOT NULL,
  `num_Units` int(255) NOT NULL,
  `size_Per_Unit` decimal(21,0) NOT NULL,
  `monthly_Rental` decimal(21,0) NOT NULL,
  `staff_ID` int(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `tb_residence`
--

INSERT INTO `tb_residence` (`residence_ID`, `address`, `num_Units`, `size_Per_Unit`, `monthly_Rental`, `staff_ID`) VALUES
(1, 'Kuala Lumpur', 10, '11', '500', 1),
(2, 'Kuala Lumpur', 20, '7', '250', 1),
(3, 'Kuala Lumpur', 15, '10', '300', 2),
(4, 'Kuala Lumpur', 26, '25', '1500', 2),
(5, 'Kuala Lumpur', 15, '7', '250', 2),
(6, 'Kuala Lumpur', 10, '10', '300', 1),
(7, 'Kuala Lumpur', 10, '10', '300', 1),
(8, 'Kuala Lumpur', 26, '15', '700', 2),
(9, 'Kuala Lumpur', 13, '7', '250', 1),
(10, 'Kuala Lumpur', 13, '7', '250', 1);

-- --------------------------------------------------------

--
-- Struktur dari tabel `tb_unit`
--

CREATE TABLE `tb_unit` (
  `unit_ID` int(255) NOT NULL,
  `unit_No` int(255) NOT NULL,
  `availability` varchar(255) NOT NULL,
  `residence_ID` int(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Struktur dari tabel `tb_user`
--

CREATE TABLE `tb_user` (
  `username` varchar(255) NOT NULL,
  `password` varchar(255) NOT NULL,
  `fullname` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `user_type` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `tb_user`
--

INSERT INTO `tb_user` (`username`, `password`, `fullname`, `email`, `user_type`) VALUES
('', '', '', '', ''),
('bagus53', '1234', 'I Kadek Bagus Paradhita Utama', 'bagusparadhita@gmail.com', 'applicant'),
('cemboleke', '1234', 'cemboleke aselole', 'cemboleke@gmail.com', 'housing officer'),
('cemboleke69', '1234', 'cemboleke asemlehoy', 'cemboleke@gmail.com', 'housing officer'),
('chacha', '2345', 'chacha maricha', 'chacha@gmail.com', 'housing officer'),
('gantul', '4567', 'gantoelz', 'gantulmentalmentul@gmail.com', 'applicant'),
('jono', '4567', 'jono joni', 'jono@gmail.com', 'housing officer');

--
-- Indexes for dumped tables
--

--
-- Indeks untuk tabel `tb_allocation`
--
ALTER TABLE `tb_allocation`
  ADD PRIMARY KEY (`allocation_ID`),
  ADD KEY `unit_ID` (`unit_ID`),
  ADD KEY `unit_ID_2` (`unit_ID`),
  ADD KEY `application_ID` (`application_ID`);

--
-- Indeks untuk tabel `tb_applicant`
--
ALTER TABLE `tb_applicant`
  ADD PRIMARY KEY (`email`);

--
-- Indeks untuk tabel `tb_application`
--
ALTER TABLE `tb_application`
  ADD PRIMARY KEY (`application_ID`),
  ADD KEY `email` (`email`);

--
-- Indeks untuk tabel `tb_housing_officer`
--
ALTER TABLE `tb_housing_officer`
  ADD PRIMARY KEY (`staff_ID`),
  ADD KEY `username` (`username`);

--
-- Indeks untuk tabel `tb_residence`
--
ALTER TABLE `tb_residence`
  ADD PRIMARY KEY (`residence_ID`),
  ADD KEY `staff_ID` (`staff_ID`);

--
-- Indeks untuk tabel `tb_unit`
--
ALTER TABLE `tb_unit`
  ADD PRIMARY KEY (`unit_ID`),
  ADD KEY `residence_ID` (`residence_ID`);

--
-- Indeks untuk tabel `tb_user`
--
ALTER TABLE `tb_user`
  ADD PRIMARY KEY (`username`);

--
-- AUTO_INCREMENT untuk tabel yang dibuang
--

--
-- AUTO_INCREMENT untuk tabel `tb_application`
--
ALTER TABLE `tb_application`
  MODIFY `application_ID` int(255) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=42;

--
-- AUTO_INCREMENT untuk tabel `tb_residence`
--
ALTER TABLE `tb_residence`
  MODIFY `residence_ID` int(255) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
