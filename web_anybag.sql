-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Waktu pembuatan: 24 Jan 2022 pada 14.51
-- Versi server: 10.4.22-MariaDB
-- Versi PHP: 8.1.1

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `web_anybag`
--

-- --------------------------------------------------------

--
-- Struktur dari tabel `admin`
--

CREATE TABLE `admin` (
  `idAdmin` int(11) NOT NULL,
  `nmAdmin` varchar(100) NOT NULL,
  `username` char(50) NOT NULL,
  `password` char(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `admin`
--

INSERT INTO `admin` (`idAdmin`, `nmAdmin`, `username`, `password`) VALUES
(1, 'Admin Utama', 'admin', 'd033e22ae348aeb5660fc2140aec35850c4da997');

-- --------------------------------------------------------

--
-- Struktur dari tabel `produk`
--

CREATE TABLE `produk` (
  `idProduk` int(11) NOT NULL,
  `merk` char(50) NOT NULL,
  `harga` int(7) NOT NULL,
  `foto` char(50) NOT NULL,
  `nmPenjual` varchar(100) NOT NULL,
  `noHp` char(13) NOT NULL,
  `kondisi` char(6) NOT NULL,
  `deskripsi` text NOT NULL,
  `shopee` char(255) NOT NULL,
  `tokped` char(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `produk`
--

INSERT INTO `produk` (`idProduk`, `merk`, `harga`, `foto`, `nmPenjual`, `noHp`, `kondisi`, `deskripsi`, `shopee`, `tokped`) VALUES
(3, 'Palomino Kayana', 332000, 'palomino.jpg', 'Rifda Mumtaz', '08127827322', 'Baru', 'Shoulderbag dengan aksen detail gesper yang unik dan warna – warna yang mudah untuk dipadupadankan dengan outfit favoritmu serta tali rantai yang menambah kesan feminim. Siap untuk menemani hari - hari mu, jadikan tampilan mu lebih stylish !', 'product/98815631/13668277913/', 'afia-lite'),
(5, 'Afia Lite', 555000, 'afia.png', 'Mumtaz Azkia', '08127827322', 'Bekas', 'Small Crossbody with Adjustable Strap, Color : Grey', 'product/98815631/13668277913/', 'afia-lite'),
(6, 'POVILO - Habit', 669000, 'habit.jpg', 'Satria Aditya', '081318031803', 'Baru', 'HABIT terbuat dari material Nylon yang berkualitas tinggi dan kuat dipadu dengan aksen – aksen dari Genuine Leather serta memiliki strap yang memiliki bantalan sehingga nyaman di pundak. Terdapat dua kompartemen utama pada backpack ini.', 'product/98815631/13668277913/', 'afia-lite');

--
-- Indexes for dumped tables
--

--
-- Indeks untuk tabel `admin`
--
ALTER TABLE `admin`
  ADD PRIMARY KEY (`idAdmin`);

--
-- Indeks untuk tabel `produk`
--
ALTER TABLE `produk`
  ADD PRIMARY KEY (`idProduk`);

--
-- AUTO_INCREMENT untuk tabel yang dibuang
--

--
-- AUTO_INCREMENT untuk tabel `admin`
--
ALTER TABLE `admin`
  MODIFY `idAdmin` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT untuk tabel `produk`
--
ALTER TABLE `produk`
  MODIFY `idProduk` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
