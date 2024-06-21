-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Waktu pembuatan: 21 Jun 2024 pada 15.50
-- Versi server: 10.4.24-MariaDB
-- Versi PHP: 8.1.6

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `dbbarang`
--

-- --------------------------------------------------------

--
-- Struktur dari tabel `barang`
--

CREATE TABLE `barang` (
  `id_barang` int(11) NOT NULL,
  `kode_barang` varchar(100) NOT NULL,
  `nama_barang` varchar(100) NOT NULL,
  `kategori_barang` varchar(100) NOT NULL,
  `deskripsi_barang` text DEFAULT NULL,
  `harga_beli` float DEFAULT NULL,
  `harga_jual` float DEFAULT NULL,
  `stok_barang` int(11) DEFAULT NULL,
  `supplier_barang` varchar(100) NOT NULL,
  `tanggal_masuk` date DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `barang`
--

INSERT INTO `barang` (`id_barang`, `kode_barang`, `nama_barang`, `kategori_barang`, `deskripsi_barang`, `harga_beli`, `harga_jual`, `stok_barang`, `supplier_barang`, `tanggal_masuk`) VALUES
(1, 'BRG001', 'Laptop Asus ROG', 'Elektronik', 'Laptop gaming dengan performa tinggi', 15000000, 20000000, 30, 'PT. Teknologi Nusantara', '2023-01-01'),
(2, 'BRG002', 'Laptop Dell XPS', 'Elektronik', 'Laptop dengan desain elegan dan performa tinggi', 18000000, 23000000, 20, 'PT. Elektronik Jaya', '2023-02-15'),
(3, 'BRG003', 'Laptop HP Spectre', 'Elektronik', 'Laptop ultrabook dengan desain tipis dan stylish', 16000000, 21000000, 25, 'PT. Komputer Maju', '2023-03-10'),
(4, 'BRG004', 'Laptop Apple MacBook Pro', 'Elektronik', 'Laptop premium dengan performa dan tampilan terbaik', 25000000, 30000000, 15, 'PT. Apple Indonesia', '2023-04-20'),
(5, 'BRG005', 'Laptop Lenovo ThinkPad', 'Elektronik', 'Laptop bisnis dengan keandalan tinggi', 14000000, 19000000, 35, 'PT. Lenovo Indonesia', '2023-05-25'),
(6, 'BRG006', 'Laptop Acer Predator', 'Elektronik', 'Laptop gaming dengan performa terbaik', 17000000, 22000000, 20, 'PT. Acer Indonesia', '2023-06-30'),
(7, 'BRG007', 'Laptop MSI Stealth', 'Elektronik', 'Laptop gaming dengan desain tipis dan performa tinggi', 18000000, 23000000, 18, 'PT. MSI Indonesia', '2023-07-15'),
(8, 'BRG008', 'Laptop Microsoft Surface', 'Elektronik', 'Laptop dengan fitur 2-in-1 dan performa tinggi', 20000000, 25000000, 12, 'PT. Microsoft Indonesia', '2023-08-10'),
(9, 'BRG009', 'Laptop Samsung Galaxy Book', 'Elektronik', 'Laptop dengan layar AMOLED dan performa tinggi', 15000000, 20000000, 22, 'PT. Samsung Indonesia', '2023-09-05'),
(10, 'BRG010', 'Laptop Huawei MateBook', 'Elektronik', 'Laptop dengan desain elegan dan performa tinggi', 16000000, 21000000, 25, 'PT. Huawei Indonesia', '2023-10-20');

-- --------------------------------------------------------

--
-- Struktur dari tabel `tbarang`
--

CREATE TABLE `tbarang` (
  `id_barang` int(11) NOT NULL,
  `kode_barang` varchar(100) NOT NULL,
  `nama_barang` varchar(100) NOT NULL,
  `kategori_barang` varchar(50) NOT NULL,
  `deskripsi_barang` text NOT NULL,
  `harga_beli` float DEFAULT NULL,
  `harga_jual` float DEFAULT NULL,
  `stok_barang` int(11) DEFAULT NULL,
  `supplier_barang` varchar(100) NOT NULL,
  `tanggal_masuk` date DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `tbarang`
--

INSERT INTO `tbarang` (`id_barang`, `kode_barang`, `nama_barang`, `kategori_barang`, `deskripsi_barang`, `harga_beli`, `harga_jual`, `stok_barang`, `supplier_barang`, `tanggal_masuk`) VALUES
(1, 'A01', 'Danilla tshirt', 'Baju', 'Lorem', 456, 500, 50, 'Gajah Jaya', '2024-05-22'),
(2, '002', 'Vans', 'Sepatu', 'Vans old 1998', 1.199, 1.6, 7, 'Gbtn Jakarta Utara', '2024-05-24'),
(3, '003', 'Hoddie Hello World', 'Hoddie', 'Warna Hitam & Putih', 399, 499, 19, 'Multi Ck', '2024-05-24'),
(4, '004', 'Bata', 'Sendal', 'Sendal Kulit Warna Coklat', 156, 218, 300, 'Bata KO', '2024-05-24'),
(5, '005', 'Palazzo', 'Tas Ransel', 'Lorem', 98, 130, 200, 'Khhs Jepara', '2024-05-24'),
(6, '006', 'Hefand', 'Tas ', 'Tas Slempang', 49, 98, 200, 'Hanbag Chacuo', '2024-05-24'),
(7, '007', 'Buffback', 'tas', 'Handbag Latto', 38, 79, 250, 'Puuch MH', '2024-05-24'),
(8, '008', 'Retro', 'Baju', 'Kaos Retro Pria', 76, 120, 50, 'Mc42 Fashion', '2024-05-24'),
(9, '009', 'Tshirt Horse', 'Baju', 'Lorem', 86, 149, 70, 'Anm Official Shop', '2024-05-24');

--
-- Indexes for dumped tables
--

--
-- Indeks untuk tabel `barang`
--
ALTER TABLE `barang`
  ADD PRIMARY KEY (`id_barang`);

--
-- Indeks untuk tabel `tbarang`
--
ALTER TABLE `tbarang`
  ADD PRIMARY KEY (`id_barang`);

--
-- AUTO_INCREMENT untuk tabel yang dibuang
--

--
-- AUTO_INCREMENT untuk tabel `barang`
--
ALTER TABLE `barang`
  MODIFY `id_barang` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=22;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
