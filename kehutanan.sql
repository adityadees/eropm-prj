-- phpMyAdmin SQL Dump
-- version 4.7.9
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Waktu pembuatan: 14 Sep 2018 pada 09.10
-- Versi server: 10.1.31-MariaDB
-- Versi PHP: 7.2.3

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `kehutanan`
--

-- --------------------------------------------------------

--
-- Struktur dari tabel `bagian`
--

CREATE TABLE `bagian` (
  `bagian_id` int(11) NOT NULL,
  `kategori_id` int(11) NOT NULL,
  `bagian_judul` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `bagian`
--

INSERT INTO `bagian` (`bagian_id`, `kategori_id`, `bagian_judul`) VALUES
(1, 1, 'Pemulihan Keanekaragaman hayati (Biodiversity Recovery)'),
(2, 1, 'Remediasi tanah (Soil Remediation)'),
(3, 1, 'Penggunaan tanaman lokal (Planting of Local Plant)'),
(4, 1, 'Pelarangan penggunaan tanaman eksotik invasif (Prohibitition of planting Invasive exotic plant species'),
(5, 1, 'Monitoring dan evaluasi (Monitoring and evaluation)');

-- --------------------------------------------------------

--
-- Struktur dari tabel `hasil`
--

CREATE TABLE `hasil` (
  `hasil_kode` varchar(20) NOT NULL,
  `perusahaan_id` int(11) NOT NULL,
  `lokasi_id` int(11) NOT NULL,
  `hasil_selch` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `hasil`
--

INSERT INTO `hasil` (`hasil_kode`, `perusahaan_id`, `lokasi_id`, `hasil_selch`) VALUES
('KDR18014091827', 21, 21, 100),
('KDR34514091810', 20, 20, 79),
('KDR410140918010', 1, 1, 92);

-- --------------------------------------------------------

--
-- Struktur dari tabel `kategori`
--

CREATE TABLE `kategori` (
  `kategori_id` int(11) NOT NULL,
  `kategori_judul` text NOT NULL,
  `kategori_jenis` enum('bag','subag','selection','penilaian') NOT NULL,
  `kategori_ref` enum('tabel1','tabel2','tabel3','tabel4') NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `kategori`
--

INSERT INTO `kategori` (`kategori_id`, `kategori_judul`, `kategori_jenis`, `kategori_ref`) VALUES
(1, 'Kriteria Restorasi Ekologi (Ecological restoration criterias)', 'bag', 'tabel4'),
(2, 'Indikator penilaian (Valuation indicators)', 'subag', 'tabel4'),
(3, 'Permenhut Nomor P.4/Menhut-II/2011 tentang Pedoman Reklamasi Hutan (MoF Decree No P.4/Menhut-II/2011 concerning Forest Reclamation Guideline)', 'selection', 'tabel4'),
(4, 'Permenhut Nomor P.60/Menhut-II/2009 tentang Pedoman Keberhasilan Reklamasi Hutan (MoF Decree P.60/Menhut-II/2009 concerning Guidelines on the Success of Forest Reclamation)', 'selection', 'tabel4'),
(5, 'Permen ESDM Nomor 7 Tahun 2014 tentang Pelaksanaan Reklamasi dan Pasca-tambang pada Kegiatan Usaha Pertambangan Mineral dan Batubara (ESDM Decree No 7 Year 2014 concerning Reclamation and Post-mining Implementation on Mineral and Coal Mining Business Activities)', 'selection', 'tabel4'),
(6, 'Penataan Lahan (Area Setup)', 'penilaian', 'tabel2'),
(7, 'Pengendalian Erosi dan Sedimentasi (Sedimentation and erotion control)', 'penilaian', 'tabel2'),
(8, 'Revergetasi (Revegetation)', 'penilaian', 'tabel2'),
(9, 'Penatagunaan Lahan (Land use)', 'penilaian', 'tabel3'),
(10, 'Revegetasi (Revegetation)', 'penilaian', 'tabel3'),
(11, 'Penyelesaian AKhir (Finishin)', 'penilaian', 'tabel3');

-- --------------------------------------------------------

--
-- Struktur dari tabel `lokasi`
--

CREATE TABLE `lokasi` (
  `lokasi_id` int(11) NOT NULL,
  `lokasi_alamat` text NOT NULL,
  `lokasi_lat` decimal(10,8) NOT NULL,
  `lokasi_long` decimal(11,8) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `lokasi`
--

INSERT INTO `lokasi` (`lokasi_id`, `lokasi_alamat`, `lokasi_lat`, `lokasi_long`) VALUES
(1, 'Jl. Anggrek, Sungai Kedukan, Rambutan, Kabupaten Banyu Asin, Sumatera Selatan 30967, Indonesia', '-2.99186700', '104.85398580'),
(20, 'Desa Pandan, Tanah Abang, Pandan, Muara Enim, Penukal Abab Lematang Ilir, Sumatera Selatan 31314, Indonesia', '-3.30541450', '104.20579430'),
(21, 'Seri Bandung, Pemulutan Bar., Kabupaten Ogan Ilir, Sumatera Selatan, Indonesia', '-3.18805510', '104.72584430');

-- --------------------------------------------------------

--
-- Struktur dari tabel `penilaian`
--

CREATE TABLE `penilaian` (
  `penilaian_id` int(11) NOT NULL,
  `kategori_id` int(11) NOT NULL,
  `penilaian_judul` text NOT NULL,
  `penilaian_bobot` float DEFAULT '0',
  `penilaian_point` enum('primary','second') NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `penilaian`
--

INSERT INTO `penilaian` (`penilaian_id`, `kategori_id`, `penilaian_judul`, `penilaian_bobot`, `penilaian_point`) VALUES
(1, 6, 'Pengisian kembali lubang tambang', 7.5, 'primary'),
(2, 6, 'Luas area yang ditata', 7.5, 'primary'),
(3, 6, 'Kestabilan Lahan', 7.5, 'primary'),
(4, 6, 'Penaburan tanah pucuk', 7.5, 'primary'),
(5, 7, 'Bangunan konservasi tanah', 0, 'primary'),
(7, 7, 'Erosi dan sedimentasi', 5, 'primary'),
(8, 8, 'Luas areal penanaman', 10, 'primary'),
(9, 8, 'Persentase tumbuh', 10, 'primary'),
(10, 8, 'Jumlah tanaman', 10, 'primary'),
(11, 8, 'Komposisi jenis tanaman (Cepat tumbuh, lokal daur panjang, eksotik, MPTS)', 10, 'primary'),
(12, 8, 'Kesehatan tanaman', 10, 'primary'),
(13, 9, 'Penataan permukaan tanah dan penimbunan kembali lahan pasca-tambang', 40, 'primary'),
(14, 9, 'Penyebaran tanah zona pengakaran', 10, 'primary'),
(16, 10, 'Penanaman tanaman tertutup (Cover crop)', 2.5, 'primary'),
(17, 10, 'Penanaman tanaman cepat tumbuh', 7.5, 'primary'),
(18, 10, 'Penanaman tanaman jenis lokal', 5, 'primary'),
(19, 10, 'Pengendalian air asam tambang', 5, 'primary'),
(20, 11, 'Penutupan tajuk', 10, 'primary'),
(21, 11, 'Pemeliharaan / Perawatan Tanaman', 10, 'primary'),
(22, 7, 'Penanaman cover crop', 5, 'primary'),
(23, 9, 'Pengendalian erosi dan pengelolaan air', 10, 'primary');

-- --------------------------------------------------------

--
-- Struktur dari tabel `perusahaan`
--

CREATE TABLE `perusahaan` (
  `perusahaan_id` int(11) NOT NULL,
  `perusahaan_nama` varchar(50) NOT NULL,
  `perusahaan_alamat` text NOT NULL,
  `perusahaan_tel` varchar(12) NOT NULL,
  `perusahaan_fax` varchar(12) NOT NULL,
  `perusahaan_bidang` varchar(25) NOT NULL,
  `perusahaan_pj` varchar(50) NOT NULL,
  `perusahaan_jabatan` varchar(25) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `perusahaan`
--

INSERT INTO `perusahaan` (`perusahaan_id`, `perusahaan_nama`, `perusahaan_alamat`, `perusahaan_tel`, `perusahaan_fax`, `perusahaan_bidang`, `perusahaan_pj`, `perusahaan_jabatan`) VALUES
(1, 'PerusahaanX', 'jl.aaa', '082222', '08777', 'Industri', 'AdityaDS', 'Jabatan1'),
(20, 'XR', 'jl.aaa', '08222', '08777', 'Jasa', 'AdityaDS', 'Manager'),
(21, 'Perusahaan PT', 'Jl. antasari', '08333', '087777', 'Bidang1', 'AdityaDS', 'Direkturs');

-- --------------------------------------------------------

--
-- Struktur dari tabel `selection`
--

CREATE TABLE `selection` (
  `selection_id` int(11) NOT NULL,
  `kategori_id` int(11) NOT NULL,
  `subbag_id` int(11) NOT NULL,
  `status` enum('regulasi','nonregulasi') NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `selection`
--

INSERT INTO `selection` (`selection_id`, `kategori_id`, `subbag_id`, `status`) VALUES
(1, 3, 1, 'nonregulasi'),
(2, 3, 2, 'nonregulasi'),
(3, 3, 3, 'nonregulasi'),
(4, 3, 4, 'nonregulasi'),
(5, 3, 5, 'nonregulasi'),
(6, 3, 6, 'regulasi'),
(7, 3, 7, 'nonregulasi'),
(8, 3, 8, 'regulasi'),
(9, 3, 9, 'nonregulasi'),
(10, 3, 10, 'regulasi'),
(11, 3, 11, 'nonregulasi'),
(12, 3, 12, 'regulasi'),
(13, 3, 13, 'nonregulasi'),
(14, 3, 14, 'nonregulasi'),
(15, 3, 15, 'nonregulasi'),
(16, 3, 16, 'regulasi'),
(17, 3, 17, 'regulasi'),
(18, 4, 1, 'nonregulasi'),
(19, 4, 2, 'regulasi'),
(20, 4, 3, 'nonregulasi'),
(21, 4, 4, 'nonregulasi'),
(22, 4, 5, 'nonregulasi'),
(23, 4, 6, 'nonregulasi'),
(24, 4, 7, 'nonregulasi'),
(25, 4, 8, 'regulasi'),
(26, 4, 9, 'regulasi'),
(27, 4, 10, 'nonregulasi'),
(28, 4, 11, 'nonregulasi'),
(29, 4, 12, 'regulasi'),
(30, 4, 13, 'regulasi'),
(31, 4, 14, 'nonregulasi'),
(32, 4, 15, 'nonregulasi'),
(33, 4, 16, 'regulasi'),
(34, 4, 17, 'regulasi'),
(35, 5, 1, 'regulasi'),
(36, 5, 2, 'nonregulasi'),
(37, 5, 3, 'regulasi'),
(38, 5, 4, 'nonregulasi'),
(39, 5, 5, 'regulasi'),
(40, 5, 6, 'nonregulasi'),
(41, 5, 7, 'regulasi'),
(42, 5, 8, 'regulasi'),
(43, 5, 9, 'regulasi'),
(44, 5, 10, 'regulasi'),
(45, 5, 11, 'regulasi'),
(46, 5, 12, 'regulasi'),
(47, 5, 13, 'nonregulasi'),
(48, 5, 14, 'nonregulasi'),
(49, 5, 15, 'nonregulasi'),
(50, 5, 16, 'regulasi'),
(51, 5, 17, 'regulasi');

-- --------------------------------------------------------

--
-- Struktur dari tabel `subbag`
--

CREATE TABLE `subbag` (
  `subbag_id` int(11) NOT NULL,
  `kategori_id` int(11) NOT NULL,
  `bagian_id` int(11) NOT NULL,
  `subbag_judul` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `subbag`
--

INSERT INTO `subbag` (`subbag_id`, `kategori_id`, `bagian_id`, `subbag_judul`) VALUES
(1, 2, 1, 'Pernyataan secara eksplisit atau implisit dalam peraturan (Explicitly or implicitly statement in the regulation)'),
(2, 2, 1, 'Jumlah jenis tanaman per hektar (komposisi jenis) (Number of plant species per hectare (species composition)'),
(3, 2, 1, 'Luas dan lapisan tajuk pada umur tertentu (Width and layer of the canopy at the certain age)'),
(4, 2, 1, 'Distribusi diameter tanaman pada umur tertentu (Distribution of plant diameter at the certain age)'),
(5, 2, 2, 'Pernyataan secara eksplisit atau implisit dalam peraturan (Explicitly or implicitly statement in the regulation)'),
(6, 2, 2, 'Ketebalan lapisan top soil (Thicknes of top soil layer)'),
(7, 2, 2, 'Kualitas tanah (Soil quality)'),
(8, 2, 2, 'Pencegahan erosi (Erosion prevention)'),
(9, 2, 2, 'Pengendalian air asam tambang (Control of acid mine water)'),
(10, 2, 2, 'Perlakuan khusus terhadap toksik pada tanah (Special treatment of toxic to soil)'),
(11, 2, 3, 'Pernyataan secara elsplisit atau implisit dalam peraturan (Explicitly or implicitly statement in the regulation)'),
(12, 2, 3, 'Habutat asli spesies tanaman (Native habitat of plant species)'),
(13, 2, 3, 'Presentase per hektar (Precentage per hectare)'),
(14, 2, 4, 'Pernyataan secara eksplisit atau implisit dalam peraturan (Explicitly or implicitly statement in the regulation)'),
(15, 2, 4, 'Sanksi tegas (Strict sanction)'),
(16, 2, 5, 'Pernyataan secara eksplisit atau implisit dalam peraturan (Explicitly or implicitly statement in the regulation)'),
(17, 2, 5, 'Metode (Method)');

-- --------------------------------------------------------

--
-- Struktur dari tabel `sub_penilaian`
--

CREATE TABLE `sub_penilaian` (
  `sub_pid` int(11) NOT NULL,
  `penilaian_id` int(11) NOT NULL,
  `subp_judul` text NOT NULL,
  `subp_bobot` float NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `sub_penilaian`
--

INSERT INTO `sub_penilaian` (`sub_pid`, `penilaian_id`, `subp_judul`, `subp_bobot`) VALUES
(1, 5, 'Jumlah fisik bangunan', 5),
(2, 5, 'Manfaat Bangunan', 5);

-- --------------------------------------------------------

--
-- Struktur dari tabel `temp`
--

CREATE TABLE `temp` (
  `temp_id` int(11) NOT NULL,
  `temp_kode` varchar(20) NOT NULL,
  `temp_kat` int(11) NOT NULL,
  `tem_value` float NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `temp`
--

INSERT INTO `temp` (`temp_id`, `temp_kode`, `temp_kat`, `tem_value`) VALUES
(478, 'KDR410140918010', 6, 3.75),
(479, 'KDR410140918010', 6, 1.875),
(480, 'KDR410140918010', 6, 2.625),
(481, 'KDR410140918010', 6, 3.75),
(482, 'KDR410140918010', 7, 1),
(483, 'KDR410140918010', 7, 0.55),
(484, 'KDR410140918010', 8, 1.3),
(485, 'KDR410140918010', 8, 1.4),
(486, 'KDR410140918010', 8, 1.6),
(487, 'KDR410140918010', 8, 3.2),
(488, 'KDR410140918010', 8, 4.5),
(489, 'KDR410140918010', 9, 40),
(490, 'KDR410140918010', 9, 2.2),
(491, 'KDR410140918010', 9, 1.1),
(492, 'KDR410140918010', 10, 0.55),
(493, 'KDR410140918010', 10, 1.8),
(494, 'KDR410140918010', 10, 1.1),
(495, 'KDR410140918010', 10, 5),
(496, 'KDR410140918010', 11, 4.2),
(497, 'KDR410140918010', 11, 10),
(498, 'KDR410140918010', 7, 4.5),
(499, 'KDR410140918010', 7, 5),
(500, 'KDR34514091810', 6, 7.5),
(501, 'KDR34514091810', 6, 5.25),
(502, 'KDR34514091810', 6, 6),
(503, 'KDR34514091810', 6, 6.75),
(504, 'KDR34514091810', 7, 2.75),
(505, 'KDR34514091810', 7, 1.75),
(506, 'KDR34514091810', 8, 8.5),
(507, 'KDR34514091810', 8, 4.5),
(508, 'KDR34514091810', 8, 6.6),
(509, 'KDR34514091810', 8, 4.2),
(510, 'KDR34514091810', 8, 1.3),
(511, 'KDR34514091810', 9, 14),
(512, 'KDR34514091810', 9, 1.1),
(513, 'KDR34514091810', 9, 1),
(514, 'KDR34514091810', 10, 2.125),
(515, 'KDR34514091810', 10, 3.375),
(516, 'KDR34514091810', 10, 3.25),
(517, 'KDR34514091810', 10, 1.65),
(518, 'KDR34514091810', 11, 8.5),
(519, 'KDR34514091810', 11, 4.1),
(520, 'KDR34514091810', 7, 2.5),
(521, 'KDR34514091810', 7, 2.3),
(522, 'KDR18014091827', 6, 4.125),
(523, 'KDR18014091827', 6, 2.625),
(524, 'KDR18014091827', 6, 2.625),
(525, 'KDR18014091827', 6, 2.625),
(526, 'KDR18014091827', 7, 3),
(527, 'KDR18014091827', 7, 2),
(528, 'KDR18014091827', 8, 1.3),
(529, 'KDR18014091827', 8, 1.4),
(530, 'KDR18014091827', 8, 4.5),
(531, 'KDR18014091827', 8, 1.7),
(532, 'KDR18014091827', 8, 4.5),
(533, 'KDR18014091827', 9, 13.2),
(534, 'KDR18014091827', 9, 10),
(535, 'KDR18014091827', 9, 1.1),
(536, 'KDR18014091827', 10, 0.55),
(537, 'KDR18014091827', 10, 1.65),
(538, 'KDR18014091827', 10, 5),
(539, 'KDR18014091827', 10, 1.65),
(540, 'KDR18014091827', 11, 4.2),
(541, 'KDR18014091827', 11, 3.2),
(542, 'KDR18014091827', 7, 4.5),
(543, 'KDR18014091827', 7, 0.6);

-- --------------------------------------------------------

--
-- Struktur dari tabel `user`
--

CREATE TABLE `user` (
  `user_id` int(11) NOT NULL,
  `user_username` varchar(50) NOT NULL,
  `user_password` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `user`
--

INSERT INTO `user` (`user_id`, `user_username`, `user_password`) VALUES
(1, 'adityads', '202cb962ac59075b964b07152d234b70');

--
-- Indexes for dumped tables
--

--
-- Indeks untuk tabel `bagian`
--
ALTER TABLE `bagian`
  ADD PRIMARY KEY (`bagian_id`),
  ADD KEY `kategori_id` (`kategori_id`);

--
-- Indeks untuk tabel `hasil`
--
ALTER TABLE `hasil`
  ADD PRIMARY KEY (`hasil_kode`);

--
-- Indeks untuk tabel `kategori`
--
ALTER TABLE `kategori`
  ADD PRIMARY KEY (`kategori_id`);

--
-- Indeks untuk tabel `lokasi`
--
ALTER TABLE `lokasi`
  ADD PRIMARY KEY (`lokasi_id`);

--
-- Indeks untuk tabel `penilaian`
--
ALTER TABLE `penilaian`
  ADD PRIMARY KEY (`penilaian_id`),
  ADD KEY `kategori_id` (`kategori_id`);

--
-- Indeks untuk tabel `perusahaan`
--
ALTER TABLE `perusahaan`
  ADD PRIMARY KEY (`perusahaan_id`);

--
-- Indeks untuk tabel `selection`
--
ALTER TABLE `selection`
  ADD PRIMARY KEY (`selection_id`),
  ADD KEY `kategori_id` (`kategori_id`),
  ADD KEY `subbag_id` (`subbag_id`);

--
-- Indeks untuk tabel `subbag`
--
ALTER TABLE `subbag`
  ADD PRIMARY KEY (`subbag_id`),
  ADD KEY `kategori_id` (`kategori_id`),
  ADD KEY `bagian_id` (`bagian_id`);

--
-- Indeks untuk tabel `sub_penilaian`
--
ALTER TABLE `sub_penilaian`
  ADD PRIMARY KEY (`sub_pid`),
  ADD KEY `penilaian_id` (`penilaian_id`);

--
-- Indeks untuk tabel `temp`
--
ALTER TABLE `temp`
  ADD PRIMARY KEY (`temp_id`);

--
-- Indeks untuk tabel `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`user_id`);

--
-- AUTO_INCREMENT untuk tabel yang dibuang
--

--
-- AUTO_INCREMENT untuk tabel `bagian`
--
ALTER TABLE `bagian`
  MODIFY `bagian_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT untuk tabel `kategori`
--
ALTER TABLE `kategori`
  MODIFY `kategori_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;

--
-- AUTO_INCREMENT untuk tabel `lokasi`
--
ALTER TABLE `lokasi`
  MODIFY `lokasi_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=22;

--
-- AUTO_INCREMENT untuk tabel `penilaian`
--
ALTER TABLE `penilaian`
  MODIFY `penilaian_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=23;

--
-- AUTO_INCREMENT untuk tabel `perusahaan`
--
ALTER TABLE `perusahaan`
  MODIFY `perusahaan_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=22;

--
-- AUTO_INCREMENT untuk tabel `selection`
--
ALTER TABLE `selection`
  MODIFY `selection_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=52;

--
-- AUTO_INCREMENT untuk tabel `subbag`
--
ALTER TABLE `subbag`
  MODIFY `subbag_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=18;

--
-- AUTO_INCREMENT untuk tabel `sub_penilaian`
--
ALTER TABLE `sub_penilaian`
  MODIFY `sub_pid` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT untuk tabel `temp`
--
ALTER TABLE `temp`
  MODIFY `temp_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=544;

--
-- AUTO_INCREMENT untuk tabel `user`
--
ALTER TABLE `user`
  MODIFY `user_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- Ketidakleluasaan untuk tabel pelimpahan (Dumped Tables)
--

--
-- Ketidakleluasaan untuk tabel `bagian`
--
ALTER TABLE `bagian`
  ADD CONSTRAINT `bagian_ibfk_1` FOREIGN KEY (`kategori_id`) REFERENCES `kategori` (`kategori_id`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Ketidakleluasaan untuk tabel `penilaian`
--
ALTER TABLE `penilaian`
  ADD CONSTRAINT `penilaian_ibfk_1` FOREIGN KEY (`kategori_id`) REFERENCES `kategori` (`kategori_id`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Ketidakleluasaan untuk tabel `selection`
--
ALTER TABLE `selection`
  ADD CONSTRAINT `selection_ibfk_1` FOREIGN KEY (`kategori_id`) REFERENCES `kategori` (`kategori_id`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `selection_ibfk_2` FOREIGN KEY (`subbag_id`) REFERENCES `subbag` (`subbag_id`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Ketidakleluasaan untuk tabel `subbag`
--
ALTER TABLE `subbag`
  ADD CONSTRAINT `subbag_ibfk_1` FOREIGN KEY (`kategori_id`) REFERENCES `kategori` (`kategori_id`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `subbag_ibfk_2` FOREIGN KEY (`bagian_id`) REFERENCES `bagian` (`bagian_id`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Ketidakleluasaan untuk tabel `sub_penilaian`
--
ALTER TABLE `sub_penilaian`
  ADD CONSTRAINT `sub_penilaian_ibfk_1` FOREIGN KEY (`penilaian_id`) REFERENCES `penilaian` (`penilaian_id`) ON DELETE CASCADE ON UPDATE CASCADE;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
