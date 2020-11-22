-- phpMyAdmin SQL Dump
-- version 4.9.0.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Waktu pembuatan: 22 Nov 2020 pada 21.34
-- Versi server: 10.4.6-MariaDB
-- Versi PHP: 7.1.31

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `kki_real`
--

-- --------------------------------------------------------

--
-- Struktur dari tabel `tb_absense`
--

CREATE TABLE `tb_absense` (
  `id` int(11) NOT NULL,
  `akses_id` int(11) DEFAULT NULL,
  `indicator` varchar(255) DEFAULT NULL,
  `key_result` varchar(255) DEFAULT NULL,
  `bobot` varchar(255) DEFAULT NULL,
  `target` varchar(255) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 ROW_FORMAT=DYNAMIC;

--
-- Dumping data untuk tabel `tb_absense`
--

INSERT INTO `tb_absense` (`id`, `akses_id`, `indicator`, `key_result`, `bobot`, `target`) VALUES
(1, 3, 'Attendance\r\n Effectiveness', 'Sesuai hari kerja efektif dan\r\nPeraturan Perijinan dari LP3I', '5', '100%');

-- --------------------------------------------------------

--
-- Struktur dari tabel `tb_akses`
--

CREATE TABLE `tb_akses` (
  `id` int(11) NOT NULL,
  `akses_id` varchar(255) DEFAULT NULL,
  `nama_akses` varchar(255) DEFAULT NULL,
  `label` varchar(255) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 ROW_FORMAT=DYNAMIC;

--
-- Dumping data untuk tabel `tb_akses`
--

INSERT INTO `tb_akses` (`id`, `akses_id`, `nama_akses`, `label`) VALUES
(1, '1', 'Admin', 'Administrator'),
(2, '2', 'Staff', 'Staff'),
(3, '3', 'Middle ', 'Middle '),
(4, '4', 'Direktur', 'Direktur'),
(5, '5', 'HRD', 'HRD');

-- --------------------------------------------------------

--
-- Struktur dari tabel `tb_corporate`
--

CREATE TABLE `tb_corporate` (
  `id` int(11) NOT NULL,
  `akses_id` int(11) DEFAULT NULL,
  `indicator` varchar(255) DEFAULT NULL,
  `key_result` varchar(255) DEFAULT NULL,
  `bobot` varchar(255) DEFAULT NULL,
  `target` varchar(255) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 ROW_FORMAT=DYNAMIC;

--
-- Dumping data untuk tabel `tb_corporate`
--

INSERT INTO `tb_corporate` (`id`, `akses_id`, `indicator`, `key_result`, `bobot`, `target`) VALUES
(1, 3, 'Zakat 2,5 %', 'Membayar zakat setiap bulan', '1', '100%'),
(2, 3, 'Itikaf / Ta’lim', '1 kali setiap bulan / 2 kali\r\nsetiap bulan', '1', '100%'),
(3, 3, 'Yasinan Bersama', '4 kali dalam sebulan', '2', '100%'),
(4, 3, 'Resume Buku', '1 buku sebulan', '1', '100%');

-- --------------------------------------------------------

--
-- Struktur dari tabel `tb_hasil_form_absense_detail`
--

CREATE TABLE `tb_hasil_form_absense_detail` (
  `id` int(11) NOT NULL,
  `id_form_header` varchar(255) DEFAULT NULL,
  `absense_nilai_sendiri` varchar(255) DEFAULT NULL,
  `absense_nilai_atasan` varchar(255) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 ROW_FORMAT=DYNAMIC;

--
-- Dumping data untuk tabel `tb_hasil_form_absense_detail`
--

INSERT INTO `tb_hasil_form_absense_detail` (`id`, `id_form_header`, `absense_nilai_sendiri`, `absense_nilai_atasan`) VALUES
(207, '1', 'tesaad', NULL),
(208, '2', 't', NULL);

-- --------------------------------------------------------

--
-- Struktur dari tabel `tb_hasil_form_absense_header`
--

CREATE TABLE `tb_hasil_form_absense_header` (
  `id` int(11) NOT NULL,
  `user_id` int(11) DEFAULT NULL,
  `nmkryawn` varchar(255) DEFAULT NULL,
  `tanggal_pengisiian` date DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 ROW_FORMAT=DYNAMIC;

--
-- Dumping data untuk tabel `tb_hasil_form_absense_header`
--

INSERT INTO `tb_hasil_form_absense_header` (`id`, `user_id`, `nmkryawn`, `tanggal_pengisiian`) VALUES
(1, 3, ' ', '2020-11-16'),
(2, 4, ' ', '2020-11-22');

-- --------------------------------------------------------

--
-- Struktur dari tabel `tb_hasil_form_corporate_detail`
--

CREATE TABLE `tb_hasil_form_corporate_detail` (
  `id` int(11) NOT NULL,
  `id_form_header` varchar(255) DEFAULT NULL,
  `corporate_nilai_sendiri` varchar(255) DEFAULT NULL,
  `corporate_nilai_atasan` varchar(255) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 ROW_FORMAT=DYNAMIC;

-- --------------------------------------------------------

--
-- Struktur dari tabel `tb_hasil_form_corporate_header`
--

CREATE TABLE `tb_hasil_form_corporate_header` (
  `id` int(11) NOT NULL,
  `user_id` int(11) DEFAULT NULL,
  `nmkryawn` varchar(255) DEFAULT NULL,
  `tanggal_pengisiian` date DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 ROW_FORMAT=DYNAMIC;

-- --------------------------------------------------------

--
-- Struktur dari tabel `tb_hasil_form_manager_detail`
--

CREATE TABLE `tb_hasil_form_manager_detail` (
  `id` int(11) NOT NULL,
  `id_form_header` varchar(255) DEFAULT NULL,
  `manager_persen` varchar(255) DEFAULT NULL,
  `manager_score` varchar(255) DEFAULT NULL,
  `manager_nilai` varchar(255) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 ROW_FORMAT=DYNAMIC;

--
-- Dumping data untuk tabel `tb_hasil_form_manager_detail`
--

INSERT INTO `tb_hasil_form_manager_detail` (`id`, `id_form_header`, `manager_persen`, `manager_score`, `manager_nilai`) VALUES
(235, '1', 'asd', 'ad', '1'),
(236, '1', 'ada', 'dad', '2'),
(237, '1', 'asd', 'adsa', '3'),
(238, '1', 'dad', 'asd', '4'),
(239, '1', 'asds', 'ada', '5'),
(240, '1', 'dsad', 'ad', '6'),
(241, '2', 'asd', 'ad', NULL),
(242, '2', 'ada', '', NULL),
(243, '2', 'asd', 'dad', NULL),
(244, '2', 'dad', '', NULL),
(245, '2', 'asds', 'adsa', NULL),
(246, '2', 'dsad', '', NULL);

-- --------------------------------------------------------

--
-- Struktur dari tabel `tb_hasil_form_manager_header`
--

CREATE TABLE `tb_hasil_form_manager_header` (
  `id` int(11) NOT NULL,
  `user_id` int(11) DEFAULT NULL,
  `nmkryawn` varchar(255) DEFAULT NULL,
  `tanggal_pengisiian` date DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 ROW_FORMAT=DYNAMIC;

--
-- Dumping data untuk tabel `tb_hasil_form_manager_header`
--

INSERT INTO `tb_hasil_form_manager_header` (`id`, `user_id`, `nmkryawn`, `tanggal_pengisiian`) VALUES
(1, 3, 'Dimas Ferdana', '2020-11-16'),
(2, 4, ' ', '2020-11-20');

-- --------------------------------------------------------

--
-- Struktur dari tabel `tb_hasil_form_personal_detail`
--

CREATE TABLE `tb_hasil_form_personal_detail` (
  `id` int(11) NOT NULL,
  `id_form_header` varchar(255) DEFAULT NULL,
  `personal_persen` varchar(255) DEFAULT NULL,
  `personal_score` varchar(255) DEFAULT NULL,
  `personal_nilai` varchar(255) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 ROW_FORMAT=DYNAMIC;

--
-- Dumping data untuk tabel `tb_hasil_form_personal_detail`
--

INSERT INTO `tb_hasil_form_personal_detail` (`id`, `id_form_header`, `personal_persen`, `personal_score`, `personal_nilai`) VALUES
(222, '1', NULL, NULL, NULL),
(223, '1', NULL, NULL, NULL),
(224, '1', NULL, NULL, NULL),
(225, '1', NULL, NULL, NULL),
(226, '1', NULL, NULL, NULL),
(227, '1', NULL, NULL, NULL);

-- --------------------------------------------------------

--
-- Struktur dari tabel `tb_hasil_form_personal_header`
--

CREATE TABLE `tb_hasil_form_personal_header` (
  `id` int(11) NOT NULL,
  `user_id` int(11) DEFAULT NULL,
  `nmkryawn` varchar(255) DEFAULT NULL,
  `tanggal_pengisiian` date DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 ROW_FORMAT=DYNAMIC;

--
-- Dumping data untuk tabel `tb_hasil_form_personal_header`
--

INSERT INTO `tb_hasil_form_personal_header` (`id`, `user_id`, `nmkryawn`, `tanggal_pengisiian`) VALUES
(4, 4, ' ', '2020-11-20');

-- --------------------------------------------------------

--
-- Struktur dari tabel `tb_hasil_staff`
--

CREATE TABLE `tb_hasil_staff` (
  `id` int(11) NOT NULL,
  `user_id` int(11) DEFAULT NULL,
  `prsn_target_1_1` varchar(255) DEFAULT NULL,
  `prsn_persen_1_1` varchar(255) DEFAULT NULL,
  `prsn_score_1_1` varchar(255) DEFAULT NULL,
  `prsn_target_1_2` varchar(255) DEFAULT NULL,
  `prsn_persen_1_2` varchar(255) DEFAULT NULL,
  `prsn_score_1_2` varchar(255) DEFAULT NULL,
  `prsn_target_1_3` varchar(255) DEFAULT NULL,
  `prsn_persen_1_3` varchar(255) DEFAULT NULL,
  `prsn_score_1_3` varchar(255) DEFAULT NULL,
  `prsn_target_2_1` varchar(255) DEFAULT NULL,
  `prsn_persen_2_1` varchar(255) DEFAULT NULL,
  `prsn_score_2_1` varchar(255) DEFAULT NULL,
  `prsn_target_2_2` varchar(255) DEFAULT NULL,
  `prsn_persen_2_2` varchar(255) DEFAULT NULL,
  `prsn_score_2_2` varchar(255) DEFAULT NULL,
  `prsn_target_2_3` varchar(255) DEFAULT NULL,
  `prsn_persen_2_3` varchar(255) DEFAULT NULL,
  `prsn_score_2_3` varchar(255) DEFAULT NULL,
  `corp_target_1_1` varchar(255) DEFAULT NULL,
  `corp_nilai_1_2` varchar(255) DEFAULT NULL,
  `corp_target_2_1` varchar(255) DEFAULT NULL,
  `corp_nilai_2_2` varchar(255) DEFAULT NULL,
  `corp_target_3_1` varchar(255) DEFAULT NULL,
  `corp_nilai_3_2` varchar(255) DEFAULT NULL,
  `corp_target_4_1` varchar(255) DEFAULT NULL,
  `corp_nilai_4_2` varchar(255) DEFAULT NULL,
  `target_1` varchar(255) DEFAULT NULL,
  `nilai_1` varchar(255) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 ROW_FORMAT=DYNAMIC;

--
-- Dumping data untuk tabel `tb_hasil_staff`
--

INSERT INTO `tb_hasil_staff` (`id`, `user_id`, `prsn_target_1_1`, `prsn_persen_1_1`, `prsn_score_1_1`, `prsn_target_1_2`, `prsn_persen_1_2`, `prsn_score_1_2`, `prsn_target_1_3`, `prsn_persen_1_3`, `prsn_score_1_3`, `prsn_target_2_1`, `prsn_persen_2_1`, `prsn_score_2_1`, `prsn_target_2_2`, `prsn_persen_2_2`, `prsn_score_2_2`, `prsn_target_2_3`, `prsn_persen_2_3`, `prsn_score_2_3`, `corp_target_1_1`, `corp_nilai_1_2`, `corp_target_2_1`, `corp_nilai_2_2`, `corp_target_3_1`, `corp_nilai_3_2`, `corp_target_4_1`, `corp_nilai_4_2`, `target_1`, `nilai_1`) VALUES
(0, NULL, 'asd', 'ad', 'ad', 'ada', 'a', 'ad', 'da', 'dsa', 'dasd', 'asd', 'asd', 'adas', 'ada', 'ad', 'dad', 'da', 'dad', 'ad', 'asd', 'ad', 'asd', 'asd', 'asd', 'asd', 'asd', 'asd', 'asd', 'asd');

-- --------------------------------------------------------

--
-- Struktur dari tabel `tb_indicator`
--

CREATE TABLE `tb_indicator` (
  `id` int(11) NOT NULL,
  `akses_id` int(11) DEFAULT NULL,
  `indicator` varchar(255) DEFAULT NULL,
  `kata_kunci` varchar(255) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 ROW_FORMAT=DYNAMIC;

--
-- Dumping data untuk tabel `tb_indicator`
--

INSERT INTO `tb_indicator` (`id`, `akses_id`, `indicator`, `kata_kunci`) VALUES
(1, 3, 'LEADING THE TALENT', 'Motivive Others, Develop Others, Planning, Organizing, Controlling, Evaluating'),
(2, 3, 'ACHIEVEMENT MOTIVATION', 'Self Confidence, Adaptability to Change, Street Toleransi');

-- --------------------------------------------------------

--
-- Struktur dari tabel `tb_indicator_personal`
--

CREATE TABLE `tb_indicator_personal` (
  `id` int(11) NOT NULL,
  `akses_id` int(11) DEFAULT NULL,
  `indicator` varchar(255) DEFAULT NULL,
  `kata_kunci` varchar(255) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 ROW_FORMAT=DYNAMIC;

--
-- Dumping data untuk tabel `tb_indicator_personal`
--

INSERT INTO `tb_indicator_personal` (`id`, `akses_id`, `indicator`, `kata_kunci`) VALUES
(1, 3, 'ACT WITH INTEGRITY', 'Honesty,\r\nLoyalty,\r\nTrusthworthy,\r\nEffective\r\nCommunication,\r\nCustomer Focus'),
(2, 3, 'ACHIEVEMENT \r\nMOTIVATION', 'Self Confidence \r\nAdaptability to\r\nChange\r\nStress Tolerance');

-- --------------------------------------------------------

--
-- Struktur dari tabel `tb_key_result`
--

CREATE TABLE `tb_key_result` (
  `id` int(11) NOT NULL,
  `indicator_id` int(11) DEFAULT NULL,
  `key_result` varchar(255) DEFAULT NULL,
  `bobot` varchar(255) DEFAULT NULL,
  `target` varchar(255) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 ROW_FORMAT=DYNAMIC;

--
-- Dumping data untuk tabel `tb_key_result`
--

INSERT INTO `tb_key_result` (`id`, `indicator_id`, `key_result`, `bobot`, `target`) VALUES
(1, 1, 'Pencapaian Target IJR optimal di unit kerja yang dipimpinya secara terstruktur (POCE)', '4', '100%'),
(2, 1, 'Rutin Melakukan Pengembangan Peformance Kinerja(Pengembangan Metode Kerja, Pelatihan, Penugasan,Coaching, Mentoring, dll) serta pengembangan kompetensi dan potensi diri serta kelompok kerja', '3', '100%'),
(3, 1, 'Melaksanakan program pengembangan kinerja yang ditentukan oleh manajemen', '3', '100%'),
(4, 2, 'Memahami seluruh rule dan regulasi kinerja di unit kerja masing - masing secara detail. a. Corprate Culture b.Standar Oprational Procedure c.Scope Of Word d.Petunjuk Teknis Kerja e.Kebijakan Resmi', '4', '100%'),
(5, 2, 'Mampu mengidentifikasi masalah dan kesenjangan yang muncul di unit kerja yang dipimpinnya dan memberikan solusi yang sesuai dengan situasi yang\r\ndibutuhkan\r\n', '3', '100%'),
(6, 2, 'Mampu mengimplementasika n rule dan regulasi dalam proses pekerjaan secara optimal (efisien dan\r\nefektif.\r\n', '3', '100%');

-- --------------------------------------------------------

--
-- Struktur dari tabel `tb_key_result_personal`
--

CREATE TABLE `tb_key_result_personal` (
  `id` int(11) NOT NULL,
  `indicator_id` int(11) DEFAULT NULL,
  `key_result` varchar(255) DEFAULT NULL,
  `bobot` varchar(255) DEFAULT NULL,
  `target` varchar(255) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 ROW_FORMAT=DYNAMIC;

--
-- Dumping data untuk tabel `tb_key_result_personal`
--

INSERT INTO `tb_key_result_personal` (`id`, `indicator_id`, `key_result`, `bobot`, `target`) VALUES
(1, 1, 'Tidak melakukan\r\npelanggaran yang\r\nmenimbulkan sanksi\r\netika dan\r\nkedisiplinan', '2', '100%'),
(2, 1, 'Standar layanan\r\nprima yang rapi,\r\nsangat cepat, dan\r\ntuntas dengan zero\r\ncomplain dan zero\r\ndefect\r', '2', '100%'),
(3, 1, 'Memahami posisi\r\njabatan dan etika\r\nkerja', '1', '100%'),
(4, 2, 'Berani menghadapi\r\ndan menerima\r\ntantangan baru dan\r\nmemiliki dorongan\r\nuntuk mencapai hasil\r\ndan sukses,\r\nmenunjukan rasa\r\nurgensi dan\r\nmenuntaskan\r\npekerjaan serta\r\ndapat bertahan\r\nuntuk dapat\r\nmelakukan sesuatu\r\nwalaupun\r\nmenghadapi\r\nhambatan.', '2', '100%'),
(5, 2, 'Menunjukan\r\nfleksibilitas dan\r\nadaptibilitas dalam\r\nmenghadapi\r\nperubahan\r\nlingkungan, prioritas\r\npermintaan, dan\r\ntuntutan pekerjaan', '2', '100%'),
(6, 2, 'Mengendalikan\r\nemosi yang potensial\r\ndapat mengganggu\r\npekerjaan agar\r\nterkendali, tetap\r\ntenang dan tidak\r\ngoyah dalam\r\ntekanan, serta\r\nmenanggapi situasi\r\nstress secara\r\nkonstruktif\r', '1', '100%');

-- --------------------------------------------------------

--
-- Struktur dari tabel `tb_m_jabatan`
--

CREATE TABLE `tb_m_jabatan` (
  `id` int(11) NOT NULL,
  `kode_jabatan` varchar(5) DEFAULT NULL,
  `nama_jabatan` varchar(30) DEFAULT NULL,
  `akses_id` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 ROW_FORMAT=COMPACT;

--
-- Dumping data untuk tabel `tb_m_jabatan`
--

INSERT INTO `tb_m_jabatan` (`id`, `kode_jabatan`, `nama_jabatan`, `akses_id`) VALUES
(1, '1', 'PRESIDENT DIRECTOR\r\n', 3),
(2, '2', 'ASS. DIREKTUR/ DIREKTUR\r\n', 3),
(3, '3', 'GENERAL MANAGER\r\n', 3),
(4, '4', 'SENIOR MANAGER\r\n', 3),
(5, '5', 'MANAGER\r\n', 3),
(6, '6', 'ASSISTANT MANAGER\r\n', 3),
(7, '7', 'JUNIOR MANAGER\r\n', 3),
(8, '8', 'SUPERVISOR/SUPERITENDENT\r\n', 3),
(9, '9', 'SENIOR STAFF\r\n', 2),
(10, '10', 'STAFF\r\n', 2),
(11, '11', 'JUNIOR STAFF\r\n', 2),
(12, '12', 'NON STAFF/NON EXECUTIVE\r\n', 2);

-- --------------------------------------------------------

--
-- Struktur dari tabel `tb_user`
--

CREATE TABLE `tb_user` (
  `id` int(11) NOT NULL,
  `username` varchar(255) DEFAULT NULL,
  `password` varchar(255) DEFAULT NULL,
  `id_akses` varchar(255) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 ROW_FORMAT=DYNAMIC;

--
-- Dumping data untuk tabel `tb_user`
--

INSERT INTO `tb_user` (`id`, `username`, `password`, `id_akses`) VALUES
(2, 'irfan', 'tes123', '2'),
(3, 'dimas', 'tes123', '3'),
(4, 'mutiara', 'tes123', '4'),
(5, 'choir', 'tes123', '5');

-- --------------------------------------------------------

--
-- Struktur dari tabel `tb_user_detail`
--

CREATE TABLE `tb_user_detail` (
  `id` int(11) NOT NULL,
  `user_id` int(11) DEFAULT NULL,
  `nama_depan` varchar(255) DEFAULT NULL,
  `nama_belakang` varchar(255) DEFAULT NULL,
  `tempat_lahir` varchar(255) DEFAULT NULL,
  `tanggal_lahir` date DEFAULT NULL,
  `email` varchar(255) DEFAULT NULL,
  `agama` varchar(255) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 ROW_FORMAT=DYNAMIC;

--
-- Dumping data untuk tabel `tb_user_detail`
--

INSERT INTO `tb_user_detail` (`id`, `user_id`, `nama_depan`, `nama_belakang`, `tempat_lahir`, `tanggal_lahir`, `email`, `agama`) VALUES
(1, 1, 'Khaerul', 'Istafa', 'Jakarta', '2020-10-11', 'khaerulistafa@gmail.com', 'islam'),
(2, 2, 'Irfan', 'Zainal', 'Jakarta', '2020-10-11', 'khaerulistafa@gmail.com', 'islam'),
(3, 3, 'Dimas', 'Ferdana', 'Jakarta', '2020-10-11', 'khaerulistafa@gmail.com', 'islam'),
(4, 4, 'Mutiara', 'Ambarsari', 'Bandung', '2020-11-15', 'khaerulistafa@gmail.com', 'islam'),
(5, 5, 'Chorun', 'Nisa', 'Surabaya', '2020-11-01', 'khaerulistafa@gmail.com', 'islam');

--
-- Indexes for dumped tables
--

--
-- Indeks untuk tabel `tb_absense`
--
ALTER TABLE `tb_absense`
  ADD PRIMARY KEY (`id`) USING BTREE;

--
-- Indeks untuk tabel `tb_akses`
--
ALTER TABLE `tb_akses`
  ADD PRIMARY KEY (`id`) USING BTREE;

--
-- Indeks untuk tabel `tb_corporate`
--
ALTER TABLE `tb_corporate`
  ADD PRIMARY KEY (`id`) USING BTREE;

--
-- Indeks untuk tabel `tb_hasil_form_absense_detail`
--
ALTER TABLE `tb_hasil_form_absense_detail`
  ADD PRIMARY KEY (`id`) USING BTREE;

--
-- Indeks untuk tabel `tb_hasil_form_absense_header`
--
ALTER TABLE `tb_hasil_form_absense_header`
  ADD PRIMARY KEY (`id`) USING BTREE;

--
-- Indeks untuk tabel `tb_hasil_form_corporate_detail`
--
ALTER TABLE `tb_hasil_form_corporate_detail`
  ADD PRIMARY KEY (`id`) USING BTREE;

--
-- Indeks untuk tabel `tb_hasil_form_corporate_header`
--
ALTER TABLE `tb_hasil_form_corporate_header`
  ADD PRIMARY KEY (`id`) USING BTREE;

--
-- Indeks untuk tabel `tb_hasil_form_manager_detail`
--
ALTER TABLE `tb_hasil_form_manager_detail`
  ADD PRIMARY KEY (`id`) USING BTREE;

--
-- Indeks untuk tabel `tb_hasil_form_manager_header`
--
ALTER TABLE `tb_hasil_form_manager_header`
  ADD PRIMARY KEY (`id`) USING BTREE;

--
-- Indeks untuk tabel `tb_hasil_form_personal_detail`
--
ALTER TABLE `tb_hasil_form_personal_detail`
  ADD PRIMARY KEY (`id`) USING BTREE;

--
-- Indeks untuk tabel `tb_hasil_form_personal_header`
--
ALTER TABLE `tb_hasil_form_personal_header`
  ADD PRIMARY KEY (`id`) USING BTREE;

--
-- Indeks untuk tabel `tb_hasil_staff`
--
ALTER TABLE `tb_hasil_staff`
  ADD PRIMARY KEY (`id`) USING BTREE;

--
-- Indeks untuk tabel `tb_indicator`
--
ALTER TABLE `tb_indicator`
  ADD PRIMARY KEY (`id`) USING BTREE;

--
-- Indeks untuk tabel `tb_indicator_personal`
--
ALTER TABLE `tb_indicator_personal`
  ADD PRIMARY KEY (`id`) USING BTREE;

--
-- Indeks untuk tabel `tb_key_result`
--
ALTER TABLE `tb_key_result`
  ADD PRIMARY KEY (`id`) USING BTREE;

--
-- Indeks untuk tabel `tb_key_result_personal`
--
ALTER TABLE `tb_key_result_personal`
  ADD PRIMARY KEY (`id`) USING BTREE;

--
-- Indeks untuk tabel `tb_m_jabatan`
--
ALTER TABLE `tb_m_jabatan`
  ADD PRIMARY KEY (`id`) USING BTREE;

--
-- Indeks untuk tabel `tb_user`
--
ALTER TABLE `tb_user`
  ADD PRIMARY KEY (`id`) USING BTREE;

--
-- Indeks untuk tabel `tb_user_detail`
--
ALTER TABLE `tb_user_detail`
  ADD PRIMARY KEY (`id`) USING BTREE;

--
-- AUTO_INCREMENT untuk tabel yang dibuang
--

--
-- AUTO_INCREMENT untuk tabel `tb_hasil_form_absense_detail`
--
ALTER TABLE `tb_hasil_form_absense_detail`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=209;

--
-- AUTO_INCREMENT untuk tabel `tb_hasil_form_absense_header`
--
ALTER TABLE `tb_hasil_form_absense_header`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT untuk tabel `tb_hasil_form_corporate_detail`
--
ALTER TABLE `tb_hasil_form_corporate_detail`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=221;

--
-- AUTO_INCREMENT untuk tabel `tb_hasil_form_corporate_header`
--
ALTER TABLE `tb_hasil_form_corporate_header`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT untuk tabel `tb_hasil_form_manager_detail`
--
ALTER TABLE `tb_hasil_form_manager_detail`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=247;

--
-- AUTO_INCREMENT untuk tabel `tb_hasil_form_manager_header`
--
ALTER TABLE `tb_hasil_form_manager_header`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT untuk tabel `tb_hasil_form_personal_detail`
--
ALTER TABLE `tb_hasil_form_personal_detail`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=228;

--
-- AUTO_INCREMENT untuk tabel `tb_hasil_form_personal_header`
--
ALTER TABLE `tb_hasil_form_personal_header`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT untuk tabel `tb_key_result`
--
ALTER TABLE `tb_key_result`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT untuk tabel `tb_key_result_personal`
--
ALTER TABLE `tb_key_result_personal`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT untuk tabel `tb_m_jabatan`
--
ALTER TABLE `tb_m_jabatan`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
