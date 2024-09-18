-- phpMyAdmin SQL Dump
-- version 4.8.5
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Waktu pembuatan: 09 Mar 2022 pada 05.02
-- Versi server: 10.1.38-MariaDB
-- Versi PHP: 7.3.2

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `perpustakaan`
--

-- --------------------------------------------------------

--
-- Struktur dari tabel `anggota`
--

CREATE TABLE `anggota` (
  `nis` int(11) NOT NULL,
  `nama` varchar(50) DEFAULT NULL,
  `tempat_lahir` varchar(100) DEFAULT NULL,
  `tanggal_lahir` date DEFAULT NULL,
  `jenis_kelamin` enum('L','P') DEFAULT NULL,
  `jurusan` varchar(50) DEFAULT NULL,
  `tahun_masuk` varchar(15) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `anggota`
--

INSERT INTO `anggota` (`nis`, `nama`, `tempat_lahir`, `tanggal_lahir`, `jenis_kelamin`, `jurusan`, `tahun_masuk`) VALUES
(2, 'tikarahmawati', 'Wonogiri', '2003-07-05', 'P', 'rekayasa perangkat lunak', '2020'),
(3, 'orang', 'Bekasi', '2004-01-30', 'P', 'multimedia', '2010');

-- --------------------------------------------------------

--
-- Struktur dari tabel `buku`
--

CREATE TABLE `buku` (
  `isbn` char(20) DEFAULT NULL,
  `judul` varchar(50) DEFAULT NULL,
  `pengarang` varchar(50) DEFAULT NULL,
  `penerbit` varchar(50) DEFAULT NULL,
  `thn_terbit` varchar(15) DEFAULT NULL,
  `jumlah_buku` int(4) DEFAULT NULL,
  `lokasi` enum('rak1','rak2','rak3') DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `buku`
--

INSERT INTO `buku` (`isbn`, `judul`, `pengarang`, `penerbit`, `thn_terbit`, `jumlah_buku`, `lokasi`) VALUES
('333', 'Pergi', 'Tere Liye', 'Republika Penerbit', 'Pilih Tahun', 10, 'rak1'),
('052', 'Mencari Ilmu', 'Admin', 'media perpustakaan', '2017', 10, 'rak3'),
('88', 'dd', 'ss', 'iiii', '2019', 15, 'rak3'),
('55555555', 'hmm', 'mmm', 'YNTKTS', '2018', 3, 'rak2');

-- --------------------------------------------------------

--
-- Struktur dari tabel `transaksi`
--

CREATE TABLE `transaksi` (
  `id` int(11) NOT NULL,
  `judul` varchar(50) DEFAULT NULL,
  `nama` varchar(50) DEFAULT NULL,
  `tgl_pinjam` date DEFAULT NULL,
  `tgl_kembali` date DEFAULT NULL,
  `status` enum('admin','petugas','guru','siswa') DEFAULT NULL,
  `keterangan` enum('dipinjam','dikembalikan') DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `transaksi`
--

INSERT INTO `transaksi` (`id`, `judul`, `nama`, `tgl_pinjam`, `tgl_kembali`, `status`, `keterangan`) VALUES
(12345, 'ya', 'gatau', '2020-08-10', '2021-08-15', 'guru', 'dipinjam');

-- --------------------------------------------------------

--
-- Struktur dari tabel `user`
--

CREATE TABLE `user` (
  `id` int(11) NOT NULL,
  `username` varchar(50) DEFAULT NULL,
  `password` varchar(100) DEFAULT NULL,
  `nama` varchar(50) DEFAULT NULL,
  `akses` varchar(50) DEFAULT NULL,
  `email` varchar(50) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `user`
--

INSERT INTO `user` (`id`, `username`, `password`, `nama`, `akses`, `email`) VALUES
(1, 'admin', '$2y$10$PSJdCj7TS4C0GH2P5Nrg7uJTG9nkBQouNCcL.JHRJvWz4f1ho0R3S', 'Tika Rahmawati', 'admin', 'tikarahmawati2442@gmail.com'),
(2, 'rahmacan', '$2y$10$4Sh5riQRI4CSfM2e3CWBieZnZrKn8vDxI3op2hivLbqZgCikZx7jq', 'Rahma Wulan', 'admin', 'shimizutanaka@gmail.com'),
(3, 'chika', '$2y$10$zxHXzuWdvE1Y4uJJ1cPLfOHF6fMJ2reJ7J24uMipw6/kBcObwUS6S', 'chika', 'admin', 'chikaagustin2004@gmail.com'),
(4, 'tikarahmawati', '$2y$10$RLDohdt8u1d0zeqLKgNcIeMhrrBkV9Bm6WI51JstRUAa2uYV3yE1q', 'tikarahmawati', 'admin', 'tikarahmawati2442@gmail.com'),
(5, 'tik', '$2y$10$jE1VCPExWXTDlCIZlK0DMeRBWnOoI64JvNRHnZm0Aeg.XWvXVBOdq', 'Tika Rahmawati', 'admin', 'tikarahmawati2442@gmail.com'),
(6, '1', '$2y$10$PeROTzAxHBY9IK.mjJR3qOEyo1JAPAA3QbLN9raUfLCLwA1oOFnL.', '1', 'admin', 'ardy@gmail.com'),
(7, 'hello', '$2y$10$88.ZXzu6EAkXM7KNMt4P3eetyadtHYc.z9hbj8PiSml1co2DFDlMK', 'tika rahmawati', 'petugas', 'tikarahmawati2442@gmail.com'),
(8, 'woe', '$2y$10$j8MWxGvtGG8qAJCcZV34kebNUhIJkCj/ouHurfmuCYesSwkTzIq7O', 'aku', 'admin', 'tikarahmawati2442@gmail.com');

--
-- Indexes for dumped tables
--

--
-- Indeks untuk tabel `anggota`
--
ALTER TABLE `anggota`
  ADD PRIMARY KEY (`nis`);

--
-- Indeks untuk tabel `transaksi`
--
ALTER TABLE `transaksi`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT untuk tabel yang dibuang
--

--
-- AUTO_INCREMENT untuk tabel `user`
--
ALTER TABLE `user`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
