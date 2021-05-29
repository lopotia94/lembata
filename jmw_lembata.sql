-- phpMyAdmin SQL Dump
-- version 5.1.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: May 29, 2021 at 09:02 AM
-- Server version: 10.4.18-MariaDB
-- PHP Version: 7.4.16

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `jmw_lembata`
--

-- --------------------------------------------------------

--
-- Table structure for table `admin`
--

CREATE TABLE `admin` (
  `id` int(11) NOT NULL,
  `username` varchar(50) COLLATE latin1_general_ci NOT NULL,
  `password` varchar(50) COLLATE latin1_general_ci NOT NULL,
  `nama_lengkap` varchar(100) COLLATE latin1_general_ci NOT NULL,
  `email` varchar(100) COLLATE latin1_general_ci NOT NULL,
  `no_telp` varchar(20) COLLATE latin1_general_ci NOT NULL,
  `level` enum('admin','staf','super','') COLLATE latin1_general_ci NOT NULL DEFAULT 'staf',
  `status` enum('Aktif','Blokir') COLLATE latin1_general_ci NOT NULL DEFAULT 'Aktif',
  `id_session` varchar(100) COLLATE latin1_general_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1 COLLATE=latin1_general_ci;

--
-- Dumping data for table `admin`
--

INSERT INTO `admin` (`id`, `username`, `password`, `nama_lengkap`, `email`, `no_telp`, `level`, `status`, `id_session`) VALUES
(2, 'admin', '21232f297a57a5a743894a0e4a801fc3', 'DPRD Kabupaten Lembata', '', '', 'admin', 'Aktif', 'da2323rf23r2d13d2');

-- --------------------------------------------------------

--
-- Table structure for table `anggota`
--

CREATE TABLE `anggota` (
  `id_anggota` int(5) NOT NULL,
  `id_admin` int(11) NOT NULL,
  `judul` varchar(150) NOT NULL,
  `judul_seo` varchar(250) NOT NULL,
  `gambar` varchar(200) NOT NULL,
  `deskripsi` longtext NOT NULL,
  `keyword` varchar(4000) NOT NULL,
  `description` varchar(1560) NOT NULL,
  `tgl` datetime NOT NULL DEFAULT current_timestamp(),
  `status` enum('aktif','tidak aktif','Breaking News','Pilihan Editor') DEFAULT 'aktif',
  `unggulan` enum('No','Yes') NOT NULL,
  `dilihat` int(12) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `artikel`
--

CREATE TABLE `artikel` (
  `id_artikel` int(5) NOT NULL,
  `id_admin` int(11) NOT NULL,
  `judul` varchar(150) NOT NULL,
  `judul_seo` varchar(250) NOT NULL,
  `gambar` varchar(200) NOT NULL,
  `deskripsi` longtext NOT NULL,
  `keyword` varchar(4000) NOT NULL,
  `description` varchar(1560) NOT NULL,
  `tgl` datetime NOT NULL DEFAULT current_timestamp(),
  `status` enum('aktif','tidak aktif','Breaking News','Pilihan Editor') NOT NULL,
  `unggulan` enum('No','Yes') NOT NULL,
  `dilihat` int(12) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `artikel`
--

INSERT INTO `artikel` (`id_artikel`, `id_admin`, `judul`, `judul_seo`, `gambar`, `deskripsi`, `keyword`, `description`, `tgl`, `status`, `unggulan`, `dilihat`) VALUES
(80, 2, 'Sebanyak 142 Pelajar di MAN Bulungan Ikuti PPM', 'sebanyak-142-pelajar-di-man-bulungan-ikuti-ppm', 'sebanyak-142-pelajar-di-man-bulungan-ikuti-ppm-66.jpeg', '<p>&nbsp;</p>\r\n\r\n<p>Sebanyak 142 pelajar dari Madrasah Aliyah Negeri (MAN) Bulungan ikuti praktik pengabdian masyarakat (PPM) yang akan ditempatkan di beberapa kecamatan yang ada di Bulungan. Siswa-siswi tersebut dilepas secara resmi oleh Asisten Bidang Perekonomian dan Pembangunan Setkab Bulungan Khairul, di MAN Bulungan, Kamis (8/4/2021).</p>\r\n\r\n<p>Adapun pelajar yang dikirim untuk mengikuti PPM tersebut Disebutkan Kepala Sekolah MAN Bulungan Masran ialah siswa-siswi yang masih duduk dikelas XI (11) yang akan ditempatkan diempat kecamatan yang di Bulungan.</p>\r\n\r\n<p>&ldquo;Ada sebanyak 142 pelajar yang mengikuti kegiatan ini, yang merupakan program unggulan di MAN Bulungan,&rdquo; ungkapnya.</p>\r\n\r\n<p>Disebutkannya siswa-siswi tersebut akan ditempatkan di Kecamatan Tanjung Selor sebanyak 20 lokasi, Kecamatan Tanjung Palas Timur 3 lokasi, Kecamatan Tanjung Palas Tengah 1 lokasi yaitu Tias dan Kecamatan Tanjung Palas sebanyak 1 lokasi yaitu di Kelurahan Tanjung Palas Hulu.</p>\r\n\r\n<p>&ldquo;Maksud dan tujuannya adalah sebagai bahan evaluasi pembelajaran dan aplikasi terwujudnya misi MAN Bulungan. Kegiatan PPM ini satu-satunya di Bulungan bahkan Kaltara maupun MAN lainnya tidak ada program semacam ini, ini adalah ikon Bulungan,&rdquo; sebutnya.</p>\r\n\r\n<p>Sementara itu Asisten Bidang Perekonomian dan Pembangunan Setkab Bulungan Khairul menyebutkan ia atas nama Pemkab Bulungan menyampaikan ucapan selamat atas terlaksananya PPM tersebut.</p>\r\n\r\n<p>&ldquo;Sebagai kegiatan yang wajib diikuti setiap siswa Kelas XI, guna memenuhi salah satu prasyarat untuk mengikuti ujian akhir sekolah atau UAS,&rdquo; jelasnya.&nbsp;</p>\r\n\r\n<p>Ia lanjutkan Kegiatan ini dilaksanakan pada bulan Ramadhan dan waktu pelaksanaan kegiatan ini dimulai pada Awal Ramadhan hingga hari ke 25 Ramadhan, ia juga beranggapan kegiatan tersebut sebagai kegiatan yang sangat positif dan perlu diapresisasi.</p>\r\n\r\n<p>&nbsp;</p>\r\n\r\n<p>&ldquo;Guna pembinaan dan kemandirian pada setiap siswa-siswi. Dengan demikian akan terbentuk karakter yang tangguh dan shaleh pada diri setiap siswa peserta dengan keunggulan spiritual,&rdquo; sebutnya.</p>\r\n\r\n<p>&ldquo;Saya berharap agar melalui praktik pengabdian masyarakat ini, siswa/siswi peserta akan menjadi lebih mandiri, memiliki mental yang kuat, bermasyarakat dan memiliki nilai-nilai pengabdian serta semakin tekun dalam melaksanakan ibadah dan berdakwah,&rdquo; sambungnya.</p>\r\n\r\n<p>Ia juga berpesan agar pelajar ini tetap menjaga kesehatan dan senantiasa menerapkan protokol kesehatan dalam melaksanakan PPM ini sebagai upaya kbersama dalam memutus mata rantai penyebaran covid-19. &ldquo;Mengingat pandemi covid-19 di Kabupaten Bulungan belum berakhir,&rdquo; tutupnya<strong>.(MC Bulungan/sny)</strong></p>\r\n\r\n<p>Sumber :&nbsp;https://citrabenuanta.id/2021/04/08/sebanyak-142-pelajar-di-man-bulungan-ikuti-ppm/</p>\r\n', '', '', '2021-04-13 10:18:00', 'aktif', 'No', 46),
(81, 2, 'Disdikbud Bulungan Mengadakan Pelatihan Penguatan Website', 'disdikbud-bulungan-mengadakan-pelatihan-penguatan-website', 'disdikbud-bulungan-mengadakan-pelatihan-penguatan-website-1.jpeg', '<p>Dalam meningkatkan peran kinerja Organisasi Perangkat Daerah (OPD) dalam hal penyampaian informasi, Dinas Pendidikan dan Kebudayaan (Disdikbud) menyelenggarakan Pelatihan Penguatan Peran Website untuk Mendukung Peningkatan Mutu Pendidikan.</p>\r\n\r\n<p>Kegiatan pelatihan ini di buka dengan sambutan dari Kepala Dinas Pendidikan dan Kebudayaan Bulungan H. Jamaluddin Saleh S.Pd dan dihadiri oleh Kepala Dinas Komunikasi dan Informatika (Kominfo) yang diwakili oleh Kepala Bidang Komunikasi dan Informasi Publik Elya, S.Kom, M.A.P serta Kepala Bagian Humas dan Protokoler Setda Minarni, SE sebagai narasumber.</p>\r\n\r\n<p>Dijelaskan Kepala Dinas Pendidikan dan Kebudayaan, dengan adanya kegiatan ini diharapkan mampu mendukung penyebarluasan keberhasilan program Dinas Pendidikan dan Kebudayaan baik secara internal maupun ekstenal.</p>\r\n\r\n<p>Selain itu kata dia, &ldquo;Peradaban manusia sekarang ini telah tergantikan dengan adanya Informasi Teknologi (IT) dan perubahan-perubahan yang perlu adanya penyesuaian agar dalam pemanfaatan teknologi di abad yang luar biasa ini tidak ketinggalan kita&rdquo; ungkapnya (9/5)</p>\r\n\r\n<p>Dia juga mengingatkan agar selalu hati-hati dalam menyebarkan informasi yang ada agar tidak menjadi informasi palsu (Hoax) yang dapat merugikan masyarakat.</p>\r\n\r\n<p>&ldquo;Jadi kehati-hatian kita dalam dunia informasi itu sangat perlu, dan juga untuk menerangkan suatu program yang ada memang di perlukan suatu informasi yang mana informasi itu bisa dijadikan sebuah kebijakan, pegangan, dan juga sebagai bahan untuk evaluasi dimana segala sesuatu hal yang menarik itu nampak pada tulisan&rdquo; ungkapnya.</p>\r\n\r\n<p>Dalam kegiatan ini juga Disdikbud didukung oleh Program INOVASI, yang merupakan mitra&nbsp; Disdikbud dalam memajukan pendidikan di Kabupaten Bulungan.&nbsp;<strong>(MC Bulungan/hs)</strong></p>\r\n\r\n<p><strong>Sumber :&nbsp;https://citrabenuanta.id/2019/05/09/disdikbud-bulungan-mengadakan-pelatihan-penguatan-website/</strong></p>\r\n', '', '', '2021-02-15 02:00:00', 'aktif', 'No', 37),
(86, 2, 'Pemkab Bulungan  Komitmen Cegah Stunting', 'pemkab-bulungan--komitmen-cegah-stunting', 'pemkab-bulungan--komitmen-cegah-stunting-39.jpeg', '<p>Sebagai komitmen Pemerintah Daerah Kabupaten Bulungan dalam melakukan intervensi percepatan Pencegahan dan penurunan stunting terintegrasi, Pemerintah Kabupaten (Pemkab) menggelar rembuk stunting yang di gelar di ruang serbaguna lantai II Kantor Bupati Bulungan, Senin (12/4/2021).</p>\r\n\r\n<p>Kegiatan langsung dihadiri Bupati Bulungan Syarwani yang juga turut membuka secara resmi kegiatan yang digelar secara semi virtual tersebut. Bupati berterima kasih dan apresiasi atas kehadiran perwakilan Setwapres, Kemendagri, Bappeda dan Litbang Provinsi Kalimantan Utara, serta perwakilan OPD Kabupaten Bulungan yang hadir secara virtual.</p>\r\n\r\n<p>&ldquo;Nantinya kita akan melaksanakan penandatanganan komitmen rencana aksi KP2S atau Konvergensi Percepatan Penurunan Stunting di Kabupaten Bulungan Tahun 2022,&rdquo; ungkapnya.</p>\r\n\r\n<p>Dalam kegiatan ini lanjut bupati juga akan disiimak materi dari Deputi Setwapres Tentang&nbsp; TP2AK yaitu strategi nasional percepatan pencegahan stunting, kemudian dari kemendagri berupa pelaksanaan KP2S di pemerintah daerah, dari Bappeda dan Litbang Provinsi Kaltara yaitu &nbsp;kebijakan percepatan pencegahan stunting di Kalimantan Utara, serta dari Bappeda dan Litbang Kabupaten Bulungan yaitu paparan rancangan program kegiatan KP2S di Bulungan tahun 2022.</p>\r\n\r\n<p>&ldquo;Saya minta kepada seluruh peserta agar mengikuti kegiatan ini dengan sungguh-sungguh, karena acara ini merupakan bagian dari upaya Pemerintah Kabupaten Bulungan dalam mencapai tujuan pembangunan berkelanjutan atau&nbsp;<em>sustainable development goals</em>,&rdquo; sebutnya.</p>\r\n\r\n<p>&ldquo;Di mana salah satu tujuan yang ingin kita capai yaitu menghilangkan kelaparan, mencapai ketahanan pangan dan gizi yang baik serta meningkatkan pertanian berkelanjutan,&rdquo; sambungnya.</p>\r\n\r\n<p>Maka dari bupati mengatakan kegiatan tersbeut juga selaras dengan visi daerah, yaitu mewujudkan Kabupaten Bulungan yang berdaulat pangan, maju dan sejahtera. Ia berharap, segenap jajaran di Pemkab Bulungan dapat turut serta berperan mengakhiri segala bentuk malnutrisi.</p>\r\n\r\n<p>&ldquo;Termasuk stunting pada bayi dua tahun dan balita atau bayi lima tahun yang termasuk golongan rawan kekurangan gizi,&rdquo; imbuhnya.</p>\r\n\r\n<p>Bupati juga mengingatkan bahwa stunting merupakan persoalan serius yang harus di atasi bahkan harus diantisipasi sebab stunting lebih dari sekedar melihat pemandangan anak balita dalam kondisi yang menyedihkan.</p>\r\n\r\n<p>&ldquo;Tetapi stunting &nbsp;adalah kondisi gagal pertumbuhan&nbsp;pada anak&nbsp; baik pertumbuhan tubuh dan otak akibat kekurangan gizi dalam waktu yang lama. Sehingga,&nbsp;anak&nbsp;lebih pendek atau perawakan pendek dari&nbsp; anak&nbsp;normal seusianya dan memiliki keterlambatan dalam berpikir,&rdquo; jelas bupati mengakhiri<strong>.(MC Bulungan/sny)</strong></p>\r\n\r\n<p><strong>Sumber :&nbsp;https://citrabenuanta.id/2021/04/12/pemkab-bulungan-komitmen-cegah-stunting/</strong></p>\r\n', '', '', '2021-04-21 09:14:15', 'aktif', 'No', 5),
(87, 2, 'Pembayaran PDAM Bulungan dapat dilakukan di Kantor Pos', 'pembayaran-pdam-bulungan-dapat-dilakukan-di-kantor-pos', 'pembayaran-pdam-bulungan-dapat-dilakukan-di-kantor-pos-69.jpeg', '<p>Mulai Februari 2020, pembayaran tagihan rekening PDAM Bulungan dapat dilakukan di Kantor Pos. Hal ini ditandai dengan Launching Pembayaran Rekening Air PDAM Bulungan Melalui PT Pos Indonesia pada Kamis (13/2/2020) di Kantor Pos Tanjung Selor Jalan Kolonel Soetadji.</p>\r\n\r\n<p>Bupati Bulungan H. Sudjati, Sh saat memberikan sambutan di acara Launching</p>\r\n\r\n<p>Pembayaran Rekening Air PDAM Bulungan ini nantinya bukan hanya bisa dilakukan di Kantor Pos Tanjung Selor saja, akan tetapi dapat dilakukan di seluruh Kantor Pos seluruh Indonesia karena sistemnya sudah terintegrasi dan online di seluruh Indonesia.</p>\r\n\r\n<p>Dalam sambutannya, Bupati Bulungan H. Sudjati mengatakan pihak Pemerintah Kabupaten Bulungan selaku pemilik BUMD Danum Banuanta yang mengelola PDAM di Bulungan menyambut baik dengan adanya kerjasama yang dilakukan tersebut, &ldquo;Ini merupakan kerjasama yang ditunggu-tunggu oleh masyarakat khususnya pelanggan PDAM Bulungan karena PT Pos Indonesia menjangkau seluruh lapisan masyarakat dan ada di mana-mana.&rdquo; tambahnya. (MC-BULUNGAN/SGF)</p>\r\n\r\n<p>Sumber :&nbsp;https://citrabenuanta.id/2020/02/13/pembayaran-pdam-bulungan-dapat-dilakukan-di-kantor-pos/</p>\r\n', '', '', '2021-04-21 10:43:35', 'aktif', 'No', 10),
(88, 2, 'Susun RDTR Tanjung Selor, Pemkab Laksanakan Konsultasi Publik II', 'susun-rdtr-tanjung-selor-pemkab-laksanakan-konsultasi-publik-ii', 'susun-rdtr-tanjung-selor-pemkab-laksanakan-konsultasi-publik-ii-58.jpeg', '<p>Pemerintah Kabupaten (Pemkab) Bulungan melalui Dinas Pekerjaan Umum dan Penataan Ruang (DPU-PR) melaksanakan Konsultasi Publik II penyusunan rencana detil tata ruang (RDTR) Perkotaan Tanjung Selor yang bekerjasama dengan pihak UGM Fakultas Goegrafi secara daring di Ruang Serbaguna Lantai II Kantor Bupati Bulungan, Senin (19/4/2021).</p>\r\n\r\n<p>Dijelaskan Kepala DPU-PR Bulungan Adriani, kegiatan tersebut merupakan kegiatan lanjutan dari Konsultasi Publik yang pertama, yang telah dilaksanakan sebelumnya dalam upaya menyerap aspirasi masyarakat.</p>\r\n\r\n<p>&ldquo;Adapun fokus pembahasan yaitu mengenai pengembangan Bandara Tanjung Harapan, Pelabuhan Pesawan, Terminal tipe C dan Kawasan Pertahan dan Keamanan,&rdquo; ungkapnya.</p>\r\n\r\n<p>Sementara itu Bupati Bulungan Syarwani mengatakan RDTR tersebut secara aturan adalah turunan dari RTRW, yang mana juga telah dilakukan revisi dan dikeluarkan dalam bentuk Perda Nomor 1 Tahun 2021.</p>\r\n\r\n<p>&ldquo;Tentu mengakomodasi Tanjung Selor di dalamnya,&rdquo; sebutnya.</p>\r\n\r\n<p>Apa yang telah di skemakan di dalam RTRW menjadi pedoman dalam menurunkannya menjadi RDTR.</p>\r\n\r\n<p>Kemudian kata dia berkaiatan dengan bandara, tidak sepenuhnya menjadi kewenangan pihak Pemkab Bulungan, namun ada otorisasi, utamanya pada kementerian terkait pada proses maupun rencana pengembangan.</p>\r\n\r\n<p>&ldquo;Agar seluruh pihak sedikit bijak dalam masalah ini, jangan sampai mengorbankan yang lainnya. Yang kita butuhkan pada bandara ini adalah frekuensi penerbangannya,&rdquo; tegasnya.</p>\r\n\r\n<p>&ldquo;Namun apabila penerbangan itu ada setiap hari, maka pengembangan juga akan menjadi efektif,&rdquo; sambungnya.</p>\r\n\r\n<p>Pengembangan bandara yang saat ini utamanya pembebasan lahan masyarakat, dalam hal ini Pemkab Bulungan hanya sebatas memfasilitasi, sesuai dengan kewenangan yang ada.</p>\r\n\r\n<p>&ldquo;Terkait pembebasan kawasan tersebut tentu menjadi kepentingan semua pihak, tidak hanya dari Pemkab Bulungan, namun juga dari Pemprov dan juga Kementerian Perhubungan,&rdquo; jelasnya.<strong>(MC Bulungan/sny)</strong></p>\r\n\r\n<p><strong>Sumber :&nbsp;https://citrabenuanta.id/2021/04/19/susun-rdtr-tanjung-selor-pemkab-laksanakan-konsultasi-publik-ii/</strong></p>\r\n', '', '', '2021-04-21 11:09:30', 'aktif', 'No', 13),
(89, 2, 'Pemkab dan DPRD Tandatangani Kesepakatan Rancangan Awal RPJMD 2021-2026', 'pemkab-dan-dprd-tandatangani-kesepakatan-rancangan-awal-rpjmd-20212026', 'pemkab-dan-dprd-tandatangani-kesepakatan-rancangan-awal-rpjmd-20212026-26.jpeg', '<p>Pemerintah Kabupaten (Pemkab) Bulungan bersama dengan Dewan Perwakilan Rakyat Daerah (DPRD) Bulungan sepakat untuk rancangan awal Rencana Pembangunan Jangka Menengah Daerah (RPJMD) Bulungan 2021-2026, berdasarkan rapat paripurna ke-14 masa persidangan 1 tahun 2021 yang dilaksanakan, Rabu (21/4/2021).</p>\r\n\r\n<p>Bupati Bulungan Syarwani dalam sambutannya yang disampaikan oleh Asisten Bidang Perekonomian dan Pembangunan Setda Bulungan Khairul menyampaikan bahwa pihaknya sangat berterima kasih kepada segenap unsur DPRD atas penandatangan kesepakatan tersebut.</p>\r\n\r\n<p>&ldquo;Ranwal RPJMD ini kata dia tentunya memuat visi dan misi bupati dan wakil, yang juga telah disampaikan kepada KPU maupun sidang paripurna DPRD Bulungan,&rdquo; ungkapnya.</p>\r\n\r\n<p>Penyusunan RPJMD tersebut kata dia merupakan kewajiban pihaknya , utamanya bupati dan wakil bupati sebagai kepala daerah yang terpilih sebagai langkah awal dimana target RPJMD tersebut menjadi instrument visi misi bupati dan wakil dalam perencanaan pemerintah kedepannya.</p>\r\n\r\n<p>&ldquo;Untuk itu saya atas nama bupati mengucapkan terima kasih yang sebesar-besarnya kepada seluruh lapisan masyarakat dan unsur kelembagaan selaku pemangku kepentingan termasuk segenap pimpinan dan anggotan DPRD atas masukan yang positif dan konstruktif untuk penyempurnaan RPJMD ini agar lebih berkualitas,&rdquo; sebutnya.</p>\r\n\r\n<p>Khususnya dalam upaya menjalankan program dan pembangunan yang bertujuan meningkatkan kesejahteraan masyarakat Bulungan.</p>\r\n\r\n<p>Selanjutnya yang tak kalah pentingnya RPJMD Bulungan tahun 2021-2026 juga berbasis pada kondisi permasalahan dan isu strategis, penanganan Covid-19 sesuai dengan perundang-undangan yang berlaku serta prioritas provinsi dan nasional dalam rencana pembangunan jangka menengah nasional.</p>\r\n\r\n<p>&ldquo;Oleh karena itu saya juga berharap pimpinan dan seluruh anggota DPRD Bulungan serta elemen masyarakat untuk mendukung mendukung pelaksaan RPJMD dengan mengawal dan mengevaluasi serta memberikan masukan yang terbaik untuk pembangunan Bulungan yang berdaulat pangan, maju dan sejahtera,&rdquo; pungkasnya<strong>.(MC Bulungan/sny)</strong></p>\r\n\r\n<p><strong>Sumber :&nbsp;https://citrabenuanta.id/2021/04/21/pemkab-dan-dprd-tandatangani-kesepakatan-rancangan-awal-rpjmd-2021-2026/</strong></p>\r\n', '', '', '2021-04-21 11:10:26', 'aktif', 'No', 18);

-- --------------------------------------------------------

--
-- Table structure for table `artikel_tag`
--

CREATE TABLE `artikel_tag` (
  `id_artikel` int(11) NOT NULL,
  `id_anggota` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `bahan`
--

CREATE TABLE `bahan` (
  `id_bahan` int(5) NOT NULL,
  `judul` varchar(100) DEFAULT NULL,
  `deskripsi` text DEFAULT NULL,
  `gambar` varchar(120) DEFAULT NULL,
  `gambar_mobile` varchar(400) NOT NULL,
  `url` varchar(150) DEFAULT NULL,
  `harga_mulai` varchar(400) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `bahan`
--

INSERT INTO `bahan` (`id_bahan`, `judul`, `deskripsi`, `gambar`, `gambar_mobile`, `url`, `harga_mulai`) VALUES
(1, 'DRI-FIT BRAZIL', '<p>Dri-fit Brazil - Bahan jenis ini merupakan bahan impor<br />\r\nyang tidak di ragukan lagi kwalitasnya, bahan ini<br />\r\nbiasa di gunakan untuk jersey olahraga,&nbsp;<br />\r\nSeperti jersey sepeda,jersey basket , jersey futsal.&nbsp;<br />\r\nKarakter bahan lembut, sedikit elastis, kuat.<br />\r\nTingkat kepadatan warna setelah di sublim 85%<br />\r\ndari bahan celup.&nbsp;</p>\r\n', 'drifit-brazil-20.png', '', NULL, ''),
(2, 'DRI-FIT DOT MIKRO', '<p>Dri-fit Dot Mikro - Bahan drifit dot mikro lazim di gunakan&nbsp;<br />\r\nUntuk jersey printing sublimasi seperti Baju sepeda,&nbsp;<br />\r\nBaju basket, Baju volly dan Futsal.&nbsp;<br />\r\nKarakter bahan jenis ini keras , tidak begitu lentur , kuat<br />\r\nkelibihan bahan jenis ini warna yang muncul dalam&nbsp;<br />\r\nproses sublimasi terhitung cukup baik yaitu 85% dari&nbsp;<br />\r\nwarna kain celup</p>\r\n', 'drifit-dot-mikro-24.png', '', NULL, ''),
(3, 'LIKRA ', '<p>LIKRA - Bahan likra merupakan bahan yang sangat elastis&nbsp;<br />\r\nbahan jenis ini kurang menyerap keringat, lazimnya digunakan<br />\r\nuntuk celana pading sepeda road bike, jersey renang, dan&nbsp;<br />\r\njenis jersey slimfit lainnya.&nbsp;<br />\r\nkeunggulan bahan ini sangat elastis&nbsp;</p>\r\n', 'likra--42.png', '', NULL, ''),
(4, 'PARAGON', '<p>PARAGON - Bahan Paragon adalah bahan untuk jersey basket clasic<br />\r\nbahan ini memiliki tekture yang kuat dan mengkilat ,&nbsp;<br />\r\nbahan ini memiliki daya serap keringat yang cukup bagus,<br />\r\ntetapi bahan dengan tingkat polyester 80% ini tidak dapat di sublim.</p>\r\n', 'paragon-31.png', '', NULL, ''),
(5, 'DIADORA', '<p>DIADORA - Bahan Diadora adalah bahan untuk jaket sport&nbsp;<br />\r\nBahan ini lazim di gunakan untuk jaket dan traning olah raga&nbsp;<br />\r\nkarakter bahan diadora lebut , dan mudah menyerap keringat<br />\r\nkarna terdapat lapisan kapas lembut di dalamnya.</p>\r\n', 'diadora-28.png', '', NULL, ''),
(6, 'FLACE NIKE', '<p>FLACE NIKE - Bahan Flace Nike Adalah bahan jaket&nbsp;<br />\r\ndan bahan untuk celana traning , bahan ini merupakan jenis&nbsp;<br />\r\nbahan premium ,lembut dan sangat &nbsp;mudah menyerap keringat&nbsp;<br />\r\nkeunggulan bahan ini kuart</p>\r\n', 'flace-nike-28.png', '', NULL, ''),
(7, 'SERENA', '<p>SERENA - Bahan serena adalah bahan jersey futsal clasic&nbsp;<br />\r\nbiasa di gunakan untuk team futsal penyuka bahan tipis&nbsp;<br />\r\nbahan ini sangat ringan dan lembut ,<br />\r\nkeunggulan bahan jenis ini membuang keringat&nbsp;<br />\r\ndengan sangat mudah</p>\r\n', 'serena-33.png', '', NULL, '');

-- --------------------------------------------------------

--
-- Table structure for table `banner`
--

CREATE TABLE `banner` (
  `id_banner` int(11) NOT NULL,
  `nama` varchar(400) NOT NULL,
  `url` varchar(600) NOT NULL,
  `gambar` varchar(350) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `banner`
--

INSERT INTO `banner` (`id_banner`, `nama`, `url`, `gambar`) VALUES
(2, 'Laboratorium Kimia', 'https://drive.google.com/file/d/1CG2-lj3DI2l_EU7tzoeGsIZIOCRrMqAH/preview', 'laboratorium-kimia-11.jpeg');

-- --------------------------------------------------------

--
-- Table structure for table `client`
--

CREATE TABLE `client` (
  `id_client` int(11) NOT NULL,
  `nama` varchar(400) NOT NULL,
  `gambar` varchar(350) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `client`
--

INSERT INTO `client` (`id_client`, `nama`, `gambar`) VALUES
(2, 'UAJY', 'uajy-22.png'),
(3, 'UGM', 'ugm-71.png'),
(7, 'PEMKAB BANTUL', 'tupperware-41.png'),
(12, 'PEMDA DIY', 'universitas-islam-indonesia-60.png'),
(14, 'POLRI', 'jogja-kita-77.png'),
(16, 'TNI', 'tni-25.png');

-- --------------------------------------------------------

--
-- Table structure for table `contact`
--

CREATE TABLE `contact` (
  `id_contact` int(11) NOT NULL,
  `name` varchar(100) NOT NULL,
  `email` varchar(300) NOT NULL,
  `phone` varchar(400) DEFAULT NULL,
  `message` text DEFAULT NULL,
  `tgl` datetime NOT NULL DEFAULT current_timestamp(),
  `is_read` tinyint(1) NOT NULL DEFAULT 0,
  `zip_code` varchar(400) DEFAULT NULL,
  `city` varchar(400) DEFAULT NULL,
  `country` varchar(400) DEFAULT NULL,
  `address` varchar(400) DEFAULT NULL,
  `main_business` varchar(400) DEFAULT NULL,
  `company` varchar(400) DEFAULT NULL,
  `interest` varchar(400) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `contact`
--

INSERT INTO `contact` (`id_contact`, `name`, `email`, `phone`, `message`, `tgl`, `is_read`, `zip_code`, `city`, `country`, `address`, `main_business`, `company`, `interest`) VALUES
(10, 'Fernando Torres', 'bambang@gmail.com', '0865665677', NULL, '2021-04-16 15:20:00', 0, '55421', 'sleman', 'Indonesia', 'Jl. Sengon No.178 AA, Gowok, Caturtunggal, Kec. Depok, Kabupaten Sleman, Daerah Istimewa Yogyakarta', 'Jogja Media Web', 'Jogja Media Web', 'Chair,Table');

-- --------------------------------------------------------

--
-- Table structure for table `email`
--

CREATE TABLE `email` (
  `id_email` int(11) NOT NULL,
  `host` varchar(400) NOT NULL,
  `username` varchar(400) NOT NULL,
  `password` varchar(400) NOT NULL,
  `port` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `email`
--

INSERT INTO `email` (`id_email`, `host`, `username`, `password`, `port`) VALUES
(1, 'mail.lopotia.com', 'tako@lopotia.com', 'jogjamediaweb', 465);

-- --------------------------------------------------------

--
-- Table structure for table `faq`
--

CREATE TABLE `faq` (
  `id_faq` int(11) NOT NULL,
  `judul` varchar(300) NOT NULL,
  `judul_seo` varchar(400) NOT NULL,
  `deskripsi` text DEFAULT NULL,
  `gambar` varchar(600) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `faq`
--

INSERT INTO `faq` (`id_faq`, `judul`, `judul_seo`, `deskripsi`, `gambar`) VALUES
(1, 'Non consectetur a erat nam at lectus urna duis?', 'non-consectetur-a-erat-nam-at-lectus-urna-duis', 'Feugiat pretium nibh ipsum consequat. Tempus iaculis urna id volutpat lacus laoreet non curabitur gravida. Venenatis lectus magna fringilla urna porttitor rhoncus dolor purus non.', ''),
(2, 'Feugiat scelerisque varius morbi enim nunc faucibus a pellentesque?', 'feugiat-scelerisque-varius-morbi-enim-nunc-faucibus-a-pellentesque', 'Dolor sit amet consectetur adipiscing elit pellentesque habitant morbi. Id interdum velit laoreet id donec ultrices. Fringilla phasellus faucibus scelerisque eleifend donec pretium. Est pellentesque elit ullamcorper dignissim. Mauris ultrices eros in cursus turpis massa tincidunt dui.', ''),
(3, 'Dolor sit amet consectetur adipiscing elit pellentesque habitant morbi?', 'dolor-sit-amet-consectetur-adipiscing-elit-pellentesque-habitant-morbi', 'Eleifend mi in nulla posuere sollicitudin aliquam ultrices sagittis orci. Faucibus pulvinar elementum integer enim. Sem nulla pharetra diam sit amet nisl suscipit. Rutrum tellus pellentesque eu tincidunt. Lectus urna duis convallis convallis tellus. Urna molestie at elementum eu facilisis sed odio morbi quis', ''),
(4, 'Ac odio tempor orci dapibus. Aliquam eleifend mi in nulla?', 'ac-odio-tempor-orci-dapibus-aliquam-eleifend-mi-in-nulla', 'Dolor sit amet consectetur adipiscing elit pellentesque habitant morbi. Id interdum velit laoreet id donec ultrices. Fringilla phasellus faucibus scelerisque eleifend donec pretium. Est pellentesque elit ullamcorper dignissim. Mauris ultrices eros in cursus turpis massa tincidunt dui.', ''),
(5, 'Tempus quam pellentesque nec nam aliquam sem et tortor consequat?', 'tempus-quam-pellentesque-nec-nam-aliquam-sem-et-tortor-consequat', 'Molestie a iaculis at erat pellentesque adipiscing commodo. Dignissim suspendisse in est ante in. Nunc vel risus commodo viverra maecenas accumsan. Sit amet nisl suscipit adipiscing bibendum est. Purus gravida quis blandit turpis cursus in', ''),
(6, 'Tortor vitae purus faucibus ornare. Varius vel pharetra vel turpis nunc eget lorem dolor?', 'tortor-vitae-purus-faucibus-ornare-varius-vel-pharetra-vel-turpis-nunc-eget-lorem-dolor', 'Laoreet sit amet cursus sit amet dictum sit amet justo. Mauris vitae ultricies leo integer malesuada nunc vel. Tincidunt eget nullam non nisi est sit amet. Turpis nunc eget lorem dolor sed. Ut venenatis tellus in metus vulputate eu scelerisque. Pellentesque diam volutpat commodo sed egestas egestas fringilla phasellus faucibus. Nibh tellus molestie nunc non blandit massa enim nec.', '');

-- --------------------------------------------------------

--
-- Table structure for table `foto`
--

CREATE TABLE `foto` (
  `id_foto` int(11) NOT NULL,
  `id_foto_kategori` int(11) DEFAULT NULL,
  `id_admin` int(11) DEFAULT NULL,
  `judul` varchar(300) NOT NULL,
  `judul_seo` varchar(500) NOT NULL,
  `deskripsi` text DEFAULT NULL,
  `keyword` varchar(350) DEFAULT NULL,
  `description` varchar(350) DEFAULT NULL,
  `gambar` varchar(500) DEFAULT NULL,
  `harga` varchar(300) DEFAULT NULL,
  `unggulan` enum('Ya','Tidak') NOT NULL DEFAULT 'Tidak',
  `dilihat` int(11) NOT NULL DEFAULT 0,
  `tgl` date DEFAULT NULL,
  `stok` enum('Tersedia','Terbatas','Habis','Pre Order') NOT NULL,
  `berat` int(11) DEFAULT NULL,
  `kode_produk` varchar(200) DEFAULT NULL,
  `harga_diskon` varchar(400) DEFAULT NULL,
  `promo` enum('Ya','Tidak') NOT NULL DEFAULT 'Tidak'
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `foto`
--

INSERT INTO `foto` (`id_foto`, `id_foto_kategori`, `id_admin`, `judul`, `judul_seo`, `deskripsi`, `keyword`, `description`, `gambar`, `harga`, `unggulan`, `dilihat`, `tgl`, `stok`, `berat`, `kode_produk`, `harga_diskon`, `promo`) VALUES
(111, NULL, 2, '7 Jabatan Pimpinan Tinggi di Bulungan Dilantik', '7-jabatan-pimpinan-tinggi-di-bulungan-dilantik', '', '', '', '7-jabatan-pimpinan-tinggi-di-bulungan-dilantik-22.jpeg', NULL, 'Tidak', 0, '2021-04-23', 'Tersedia', NULL, NULL, NULL, 'Tidak'),
(112, NULL, 2, 'Pemkab Bulungan Turut Tandatangani PKS Optimalisasi Pajak', 'pemkab-bulungan-turut-tandatangani-pks-optimalisasi-pajak', '', '', '', 'pemkab-bulungan-turut-tandatangani-pks-optimalisasi-pajak-29.jpeg', NULL, 'Tidak', 0, '2021-04-23', 'Tersedia', NULL, NULL, NULL, 'Tidak'),
(113, NULL, 2, 'Pemkab Bulungan Lanjutkan Progam Inovasi', 'pemkab-bulungan-lanjutkan-progam-inovasi', '', '', '', 'pemkab-bulungan-lanjutkan-progam-inovasi-63.jpeg', NULL, 'Tidak', 0, '2021-04-23', 'Tersedia', NULL, NULL, NULL, 'Tidak');

-- --------------------------------------------------------

--
-- Table structure for table `gallery`
--

CREATE TABLE `gallery` (
  `id_gallery` int(11) NOT NULL,
  `nama` varchar(400) NOT NULL,
  `gambar` varchar(350) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `gallery`
--

INSERT INTO `gallery` (`id_gallery`, `nama`, `gambar`) VALUES
(48, 'galeri', 'galeri-59.jpeg'),
(49, 'galeri', 'galeri-8.jpeg'),
(50, 'galeri', 'galeri-16.jpeg'),
(51, 'galeri', 'galeri-89.jpeg');

-- --------------------------------------------------------

--
-- Table structure for table `gallery_foto`
--

CREATE TABLE `gallery_foto` (
  `id_gallery` int(11) NOT NULL,
  `gambar` varchar(200) NOT NULL,
  `id_foto` int(11) NOT NULL,
  `judul` varchar(400) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `gallery_foto`
--

INSERT INTO `gallery_foto` (`id_gallery`, `gambar`, `id_foto`, `judul`) VALUES
(54, 'atlantic-villa44.jpeg', 110, 'gallery'),
(55, 'atlantic-villa63.jpeg', 110, 'gallery'),
(56, 'atlantic-villa64.jpeg', 110, 'gallery'),
(57, 'atlantic-villa88.jpeg', 110, 'gallery'),
(58, 'atlantic-villa78.jpeg', 110, 'gallery'),
(59, 'atlantic-villa48.jpeg', 110, 'gallery'),
(60, 'pemkab-bulungan-lanjutkan-progam-inovasi69.jpeg', 113, 'gallery'),
(61, 'pemkab-bulungan-lanjutkan-progam-inovasi12.jpeg', 113, 'gallery'),
(68, '7-jabatan-pimpinan-tinggi-di-bulungan-dilantik91.jpeg', 111, 'gallery'),
(69, '7-jabatan-pimpinan-tinggi-di-bulungan-dilantik52.jpeg', 111, 'gallery'),
(70, '7-jabatan-pimpinan-tinggi-di-bulungan-dilantik20.jpeg', 111, 'gallery'),
(71, '7-jabatan-pimpinan-tinggi-di-bulungan-dilantik8.jpeg', 111, 'gallery');

-- --------------------------------------------------------

--
-- Table structure for table `gallery_produk`
--

CREATE TABLE `gallery_produk` (
  `id_gallery` int(11) NOT NULL,
  `gambar` varchar(200) NOT NULL,
  `id_produk` int(11) NOT NULL,
  `judul` varchar(400) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `gallery_produk`
--

INSERT INTO `gallery_produk` (`id_gallery`, `gambar`, `id_produk`, `judul`) VALUES
(3, 'plastisol0.jpeg', 4, 'Gambar 2'),
(4, 'plastisol75.jpeg', 4, 'Gambar 3'),
(5, 'oblong-sablon20.jpeg', 5, 'Gambar 2'),
(6, 'oblong-sablon31.jpeg', 5, 'Gambar 3'),
(7, 'oblong-sablon98.jpeg', 5, 'galeri'),
(8, 'oblong-sablon15.jpeg', 5, 'galeri'),
(9, 'oblong-sablon39.jpeg', 5, 'galeri'),
(10, 'oblong-sablon29.jpeg', 5, 'galeri'),
(11, 'oblong-sablon45.jpeg', 5, 'galeri'),
(12, 'oblong-sablon83.jpeg', 5, 'galeri'),
(13, 'oblong-sablon28.jpeg', 5, 'galeri'),
(14, 'oblong-sablon82.jpeg', 5, 'galeri'),
(15, 'oblong-sablon39.jpeg', 5, 'galeri'),
(16, 'oblong-sablon68.jpeg', 5, 'galeri'),
(17, 'oblong-sablon89.jpeg', 5, 'galeri'),
(18, 'oblong-sablon5.jpeg', 5, 'galeri'),
(19, 'oblong-sablon30.jpeg', 5, 'galeri'),
(20, 'oblong-sablon26.jpeg', 5, 'galeri'),
(21, 'oblong-sablon40.jpeg', 5, 'galeri'),
(22, 'oblong-sablon46.jpeg', 5, 'galeri'),
(23, 'oblong-sablon49.jpeg', 5, 'galeri'),
(24, 'kemeja18.jpeg', 6, 'galeri'),
(25, 'kemeja30.jpeg', 6, 'galeri'),
(27, 'jersey1.jpeg', 7, 'galeri'),
(28, 'jersey86.jpeg', 7, 'galeri'),
(30, 'jaket-hoodie79.jpeg', 8, 'galeri'),
(32, 'jaket-hoodie26.jpeg', 8, 'galeri'),
(33, 'setelan76.jpeg', 2, 'galeri'),
(34, 'setelan51.jpeg', 2, 'galeri'),
(35, 'setelan1.jpeg', 2, 'galeri'),
(36, 'jaket-hoodie69.jpeg', 8, 'galeri'),
(37, 'bikin-jersey-sepakbola-custom-jogja--rochester-jersey-75.jpeg', 3, 'galeri'),
(38, 'jersey-printing-sepeda-roadbike5.jpeg', 10, 'galeri'),
(39, 'jersey-sepeda-gowes-full-printing62.jpeg', 11, 'galeri'),
(40, 'jersey-sepeda-mtb-satuan--pln-76.jpeg', 12, 'galeri'),
(41, 'jersey-sepeda-mtb-satuan--pln-54.jpeg', 12, 'galeri');

-- --------------------------------------------------------

--
-- Table structure for table `gallery_referensi`
--

CREATE TABLE `gallery_referensi` (
  `id_gallery` int(11) NOT NULL,
  `gambar` varchar(200) NOT NULL,
  `id_produk` int(11) NOT NULL,
  `judul` varchar(400) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `icon`
--

CREATE TABLE `icon` (
  `id_icon` int(11) NOT NULL,
  `nama` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `icon`
--

INSERT INTO `icon` (`id_icon`, `nama`) VALUES
(1, 'fas fa-sync'),
(2, 'far fa-clock'),
(3, 'far fa-smile'),
(4, 'fas fa-piggy-bank'),
(5, 'fas fa-cogs'),
(6, 'far fa-comments'),
(7, 'fas fa-tshirt'),
(8, 'fas fa-clipboard-list'),
(9, 'far fa-smile'),
(10, 'fas fa-users');

-- --------------------------------------------------------

--
-- Table structure for table `kategorix`
--

CREATE TABLE `kategorix` (
  `id_kategori` int(11) NOT NULL,
  `judul` varchar(300) NOT NULL,
  `judul_seo` varchar(400) NOT NULL,
  `deskripsi` text DEFAULT NULL,
  `gambar` text DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `kategorix`
--

INSERT INTO `kategorix` (`id_kategori`, `judul`, `judul_seo`, `deskripsi`, `gambar`) VALUES
(14, 'Promo', 'promo', NULL, 'promo-90.jpeg'),
(16, 'Label Katun', 'label-katun', NULL, 'label-sablon-65.jpeg'),
(18, 'Label Katun Baby', 'label-katun-baby', NULL, 'label-katun-baby-77.jpeg'),
(19, 'Label Satin Impor', 'label-satin-impor', NULL, 'label-satin-impor-59.jpeg'),
(20, 'Label Woven Bordir', 'label-woven-bordir', NULL, 'label-woven-bordir-25.jpeg'),
(21, 'Hangtag', 'hangtag', NULL, 'hangtag-53.jpeg'),
(22, 'Accessories', 'accessories', NULL, 'accessories-36.jpeg'),
(23, 'Buku Tamu', 'buku-tamu', NULL, 'buku-tamu-36.jpeg'),
(24, 'Packaging', 'packaging', NULL, 'label-katun-40.jpeg');

-- --------------------------------------------------------

--
-- Table structure for table `kegiatan`
--

CREATE TABLE `kegiatan` (
  `id_kegiatan` int(11) NOT NULL,
  `nama` varchar(400) NOT NULL,
  `gambar` varchar(350) NOT NULL,
  `deskripsi` text DEFAULT NULL,
  `tgl` date DEFAULT NULL,
  `terunduh` int(11) DEFAULT 0,
  `dilihat` int(11) DEFAULT 0,
  `slug` varchar(600) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `kegiatan`
--

INSERT INTO `kegiatan` (`id_kegiatan`, `nama`, `gambar`, `deskripsi`, `tgl`, `terunduh`, `dilihat`, `slug`) VALUES
(3, '2. DAFTAR KEGIATAN BINA MARGA THN 2021', '2-daftar-kegiatan-bina-marga-thn-2021-20.pdf', '', '2021-05-27', 0, 0, '2-daftar-kegiatan-bina-marga-thn-2021'),
(4, '1. DAFTAR KEGIATAN BINA MARGA THN 2020', '1-daftar-kegiatan-bina-marga-thn-2020-9.pdf', '', '2021-05-27', 0, 0, '1-daftar-kegiatan-bina-marga-thn-2020');

-- --------------------------------------------------------

--
-- Table structure for table `keunggulan`
--

CREATE TABLE `keunggulan` (
  `id_keunggulan` int(5) NOT NULL,
  `judul` varchar(100) DEFAULT NULL,
  `deskripsi` text DEFAULT NULL,
  `telp` varchar(20) DEFAULT NULL,
  `gambar` varchar(120) DEFAULT NULL,
  `url` varchar(150) DEFAULT NULL,
  `tgl_update` date DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `keunggulan`
--

INSERT INTO `keunggulan` (`id_keunggulan`, `judul`, `deskripsi`, `telp`, `gambar`, `url`, `tgl_update`) VALUES
(1, 'Ramah di Kantong', 'Minimal order untuk label hanya 1Rol, selain itu harga ramah di kantong, kualitas kami utamakan. Jadi buat kamu para pemula ini STARTUP FRIENDLY banget.', NULL, 'ramah-di-kantong-32.png', NULL, '2020-10-16'),
(2, 'Proses Produksi', 'Proses produksi kami tepat waktu, 10-14hari kerja.', NULL, 'proses-produksi-31.png', NULL, '2020-10-16'),
(3, 'Customer Service', 'Didukung oleh Customer Service ramah, dan fast respon siap melayani dan memproses pesanan Anda.', NULL, 'customer-service-57.png', NULL, '2020-08-12'),
(4, 'Banya Pilihan', 'Banyak model dan pilihan bahan yang bisa Anda pilih dari beberapa kategori label kami : Woven, Katun, Katun Baby, Satin Impor, Hangtag, Packaging dll', NULL, 'banya-pilihan-36.png', NULL, '2020-11-14');

-- --------------------------------------------------------

--
-- Table structure for table `keuntungan`
--

CREATE TABLE `keuntungan` (
  `id_keuntungan` int(11) NOT NULL,
  `judul` varchar(300) NOT NULL,
  `judul_seo` varchar(400) NOT NULL,
  `deskripsi` text DEFAULT NULL,
  `gambar` varchar(600) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `keuntungan`
--

INSERT INTO `keuntungan` (`id_keuntungan`, `judul`, `judul_seo`, `deskripsi`, `gambar`) VALUES
(2, 'Pelanggan', 'pelanggan', '2,000', ''),
(3, 'Dilihat', 'dilihat', '5,000', ''),
(4, 'Negara', 'negara', '50', '');

-- --------------------------------------------------------

--
-- Table structure for table `listproject`
--

CREATE TABLE `listproject` (
  `id_listproject` int(11) NOT NULL,
  `judul` varchar(300) NOT NULL,
  `judul_seo` varchar(400) NOT NULL,
  `deskripsi` text DEFAULT NULL,
  `kategori` enum('INDONESIAN HOTEL PROJECT','HOTEL PROJECT ABROAD') NOT NULL DEFAULT 'INDONESIAN HOTEL PROJECT'
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `listproject`
--

INSERT INTO `listproject` (`id_listproject`, `judul`, `judul_seo`, `deskripsi`, `kategori`) VALUES
(2, 'Hotel Marriott, Yogyakarta, 2017', 'hotel-marriott-yogyakarta-2017', NULL, 'INDONESIAN HOTEL PROJECT'),
(3, 'Hotel Akiriki Ramada, Vanuatu, 2017', 'hotel-akiriki-ramada-vanuatu-2017', NULL, 'HOTEL PROJECT ABROAD'),
(4, 'Hospital Indriati, Solo, 2017', 'hospital-indriati-solo-2017', NULL, 'INDONESIAN HOTEL PROJECT'),
(5, 'Adaaran Select Meedhuparru, Maldives, 2016', 'adaaran-select-meedhuparru-maldives-2016', NULL, 'HOTEL PROJECT ABROAD'),
(6, 'The Alana Hotel, Solo, 2016', 'the-alana-hotel-solo-2016', NULL, 'INDONESIAN HOTEL PROJECT'),
(7, 'Negombo Beach Resort, Maldives, 2016', 'negombo-beach-resort-maldives-2016', NULL, 'HOTEL PROJECT ABROAD');

-- --------------------------------------------------------

--
-- Table structure for table `lokasi`
--

CREATE TABLE `lokasi` (
  `id_lokasi` int(11) NOT NULL,
  `judul` varchar(300) NOT NULL,
  `judul_seo` varchar(400) NOT NULL,
  `deskripsi` text DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `lokasi`
--

INSERT INTO `lokasi` (`id_lokasi`, `judul`, `judul_seo`, `deskripsi`) VALUES
(1, 'Jogja Utara', 'jogja-utara', NULL),
(2, 'Jogja Timur', 'jogja-timur', NULL),
(3, 'Jogja Tenggara', 'jogja-tenggara', NULL),
(4, 'Jogja Selatan', 'jogja-selatan', NULL);

-- --------------------------------------------------------

--
-- Table structure for table `material`
--

CREATE TABLE `material` (
  `id_material` int(5) NOT NULL,
  `judul` varchar(100) DEFAULT NULL,
  `judul_seo` varchar(500) NOT NULL,
  `deskripsi` text DEFAULT NULL,
  `harga` varchar(600) DEFAULT NULL,
  `gambar` varchar(120) DEFAULT NULL,
  `tgl` timestamp NULL DEFAULT current_timestamp(),
  `keyword` varchar(300) DEFAULT NULL,
  `description` varchar(300) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `material`
--

INSERT INTO `material` (`id_material`, `judul`, `judul_seo`, `deskripsi`, `harga`, `gambar`, `tgl`, `keyword`, `description`) VALUES
(1, 'TEAK', 'teak', '<p>Our Plantation teak is 100% Indonesian Legal wood.&nbsp;It is SVLK certified, meaning that the full process of Log to furniture is monitored and certified .Guaranteeing the sustainability of the wood itself and the plantation.</p>\r\n\r\n<p>We work with 2 main Grades</p>\r\n\r\n<p><strong>Premium A Grade Teak</strong></p>\r\n\r\n<ul>\r\n	<li>\r\n	<p>Sourced from Central Java (Cepu and Randublatung Perhutani/Forestry Trees are an average age of 40-50 years and up), the soils are rich in minerals from a volcanic eruption centuries ago. Which makes it a perfect slow-growing living habitat for teak to create the golden-brown color and the hardness that teak is known for.</p>\r\n	</li>\r\n	<li>\r\n	<p>While other areas alongside the equator such as East Java, West Java, and Sulawesi have teak plantations. The soil there is either too rich (making the teak grow too fast) or full of oil-substances causing tiger tears/spots (darker color in the grains and a rather pale white shade of golden brown/uneven color).</p>\r\n	</li>\r\n	<li>\r\n	<p>The uniform color of our teak wood is achieved through careful selection. Also, when it is left untreated and a constant contact with the air, the wood will over time develop a natural silver-grey patina.</p>\r\n	</li>\r\n</ul>\r\n\r\n<p>We contribute to the forestry sustainable program of having new saplings planted for every teak tree logged</p>\r\n\r\n<p>Each teak log is carefully selected with the aim of no wastage. In the conversion into furniture components, virtually nothing is wasted. Shavings and saw dust are either recycled into agricultural products or converted into incense sticks for use at places of worship, while offcuts are burnt to generate energy</p>\r\n\r\n<p>Strong, dense and durable, teak can last for generations in a wide variety of climates with low-to-no maintenance. This is due to the high rubber and oil content of teak wood that leaves it impervious to rain, and weather, making it virtually immune to rot</p>\r\n\r\n<p><strong>Premium A/B Grade Teak</strong></p>\r\n\r\n<p>This timber like our Premium A grade comes from the Government managed plantations in Central Java.</p>\r\n\r\n<p>With this teak is slightly below our top grade but suitable for use in larger pieces, whilst retaining the great structural quality and look of the A grade. It is more price effective to use this grade especially when we mix with metal components and what to show more character in the wood.</p>\r\n', '', 'teak-33.jpeg', '2021-04-15 05:49:06', '', ''),
(2, 'RECLAIMED TEAK', 'reclaimed-teak', '<p>This recycled or reclaimed teak is sourced from timber yards in Java which specialize in the demolition of old buildings and structures.</p>\r\n\r\n<p>These door frames, window frames and posts are now recycled into fantastic furniture. This wood shows all the character and flaws of age and its previous usage.</p>\r\n\r\n<p>We work with the timber to make sure it structurally intact whilst keeping the imperfections, when this is combined with Aluminium or Stainless steel it shines as a feature for any outdoor environment.</p>\r\n', '', 'reclaimed-teak-26.jpeg', '2021-04-15 05:50:39', '', '');

-- --------------------------------------------------------

--
-- Table structure for table `modul`
--

CREATE TABLE `modul` (
  `id_modul` int(5) NOT NULL,
  `nama` varchar(150) NOT NULL,
  `nama_seo` varchar(200) DEFAULT NULL,
  `gambar` varchar(200) DEFAULT NULL,
  `deskripsi` text DEFAULT NULL,
  `hapus` enum('Yes','No') DEFAULT NULL,
  `jenis_modul` enum('Text','Textarea','Judul & Text','Judul & Textarea','Text Images','Textarea Images','Images','Video','Select') DEFAULT NULL,
  `tgl_update` datetime DEFAULT NULL,
  `tampil` enum('Ya','Tidak') DEFAULT NULL,
  `status` enum('On','Off') DEFAULT NULL,
  `no_urut` int(1) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `modul`
--

INSERT INTO `modul` (`id_modul`, `nama`, `nama_seo`, `gambar`, `deskripsi`, `hapus`, `jenis_modul`, `tgl_update`, `tampil`, `status`, `no_urut`) VALUES
(0, 'Nama Web', 'nama-web', '', 'DPRD KAB. LEMBATA,lembata,lembata,lembata', 'No', '', '2017-11-01 02:22:09', 'Tidak', 'On', 0),
(1, 'Logo Web', 'logo-web', '6gagal migrasi data.png', '', 'No', 'Images', '2021-04-24 00:00:00', 'Ya', 'On', 1),
(2, 'Text Header', NULL, '', 'Mewujudkan kualitas hidup masyarakat yang tinggi, maju dan sejahtera', 'No', 'Text', '2021-04-23 00:00:00', 'Ya', 'On', 2),
(3, 'Alamat Header', 'home-footer', '', 'Jl. Jelarai Raya, Jelarai Selor, Tj. Selor, Kabupaten Bulungan, Kalimantan Utara 77211', 'No', 'Text', '2021-04-21 00:00:00', 'Ya', 'On', 2),
(7, 'No WA', 'no-wa', '', '6285701220210', 'No', 'Text', '2021-04-06 00:00:00', 'Ya', 'On', 7),
(9, 'Email', 'email', '', 'evalutfina@gmail.com', 'No', 'Text', '2020-11-16 00:00:00', 'Tidak', 'On', 9),
(10, 'Telepon', 'email', '', '(0272) 322482', 'No', 'Text', '2021-04-17 00:00:00', 'Ya', 'On', 3),
(18, 'Footer Information', 'visitor-embed', '', '', 'No', 'Textarea', '2021-03-05 00:00:00', 'Tidak', 'On', 3),
(19, 'Footer Pengiriman', 'visitor-counter', '', '<p><img alt=\"\" src=\"https://1.bp.blogspot.com/-fwtVBbL9r94/XnHvo7K4ZCI/AAAAAAAAAZI/ieK4XnQPR8M_9ZTiUEOKgg8I5mVVtFHeACLcBGAsYHQ/s1600/logo-jasa-kirim-pos-jne-tiki-jnt-jne.png\" style=\"width:100%\" /></p>\r\n', 'No', 'Textarea', '2021-02-17 00:00:00', 'Tidak', 'On', 3),
(20, 'Tawkto Script', 'fb', '', '<!--Start of Tawk.to Script-->\r\n<script type=\"text/javascript\">\r\nvar Tawk_API=Tawk_API||{}, Tawk_LoadStart=new Date();\r\n(function(){\r\nvar s1=document.createElement(\"script\"),s0=document.getElementsByTagName(\"script\")[0];\r\ns1.async=true;\r\ns1.src=\'https://embed.tawk.to/602cea799c4f165d47c4200b/1eunn7ujr\';\r\ns1.charset=\'UTF-8\';\r\ns1.setAttribute(\'crossorigin\',\'*\');\r\ns0.parentNode.insertBefore(s1,s0);\r\n})();\r\n</script>\r\n<!--End of Tawk.to Script-->', 'No', 'Text', '2021-02-17 00:00:00', 'Tidak', 'On', 3),
(22, 'Footer Alamat', 'logo-web-small', '', '<p><a href=\"https://g.page/CITRAJOGJA?share\">Cokrodiningratan No.174 JT II, Cokrodiningratan, Kec. Jetis, Kota Yogyakarta, Daerah Istimewa Yogyakarta 55233</a></p>\r\n', 'No', 'Textarea', '2021-03-05 00:00:00', 'Tidak', 'On', 0),
(77, 'Title', 'title', '', 'Jomblang Cave Tour', 'No', '', '2017-10-26 06:07:05', 'Tidak', 'Off', 0),
(78, 'Keywords', 'keywords', '', 'Keyword Adisukma', 'No', 'Text', '2017-12-20 00:07:46', 'Tidak', 'Off', 0),
(79, 'Description', 'description', '', 'Deskripsi Adisukma', 'No', 'Text', '2017-12-20 00:07:55', 'Tidak', 'Off', 0),
(80, 'Footer Contact', NULL, '', '<p>Dinas PU-PR Bulungan<br />\r\nJl. Jelarai Raya, Jelarai Selor, Tj. Selor, Kabupaten Bulungan, Kalimantan Utara 77211</p>\r\n', NULL, 'Textarea', '2021-04-21 00:00:00', 'Ya', 'On', 2),
(81, 'Google Map', NULL, '', '<iframe src=\"https://www.google.com/maps/embed?pb=!1m14!1m8!1m3!1d15939.719995669926!2d117.4039304!3d2.8365164!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x0%3A0x6d07c1c7787056e8!2sDinas%20PU-PR%20Bulungan!5e0!3m2!1sid!2sid!4v1618994047725!5m2!1sid!2sid\" width=\"100%\" height=\"250\" style=\"border:0;\" allowfullscreen=\"\" loading=\"lazy\"></iframe>', 'No', 'Text', '2021-04-21 00:00:00', 'Ya', 'On', 8),
(82, 'No telp', NULL, '', '(0619) 0624', 'No', 'Text', '2021-02-19 00:00:00', 'Tidak', 'On', 4),
(83, 'Payment Partner', NULL, '', '<p><img alt=\"\" loading=\"lazy\" src=\"https://www.sabilatransport.com/wp-content/uploads/2020/10/Logo-ovo.png\" style=\"height:34px; width:64px;margin-bottom:10px\" />&nbsp;<img alt=\"\" loading=\"lazy\" src=\"https://www.sabilatransport.com/wp-content/uploads/2020/10/LinkAja.png\" style=\"height:34px; width:64px;margin-bottom:10px\" />&nbsp;<img alt=\"\" loading=\"lazy\" src=\"https://www.sabilatransport.com/wp-content/uploads/2020/10/Gopay.png\" style=\"height:34px; width:64px;margin-bottom:10px\" />&nbsp;<img alt=\"\" loading=\"lazy\" src=\"https://www.sabilatransport.com/wp-content/uploads/2020/10/Bank-Mandiri.png\" style=\"height:34px; width:64px;margin-bottom:10px\" />&nbsp;<img alt=\"\" loading=\"lazy\" src=\"https://www.sabilatransport.com/wp-content/uploads/2020/10/Bank-BCA.png\" style=\"height:34px; width:64px;margin-bottom:10px\" /></p>\r\n', 'No', 'Textarea', '2021-03-02 00:00:00', 'Tidak', 'On', NULL),
(84, 'Script Head', NULL, '', '<meta name=\"google-site-verification\" content=\"1HqKeXOrDO9bezZJElwtDOBsmsx1jnbJAegdsoKP0k8\" />', 'No', 'Text', '2021-03-10 00:00:00', 'Ya', 'On', 5),
(85, 'Script Body', NULL, '', '<!-- Google Tag Manager (noscript) -->\r\n<noscript><iframe src=\"https://www.googletagmanager.com/ns.html?id=GTM-W72WTLW\"\r\nheight=\"0\" width=\"0\" style=\"display:none;visibility:hidden\"></iframe></noscript>\r\n<!-- End Google Tag Manager (noscript) -->\r\n		<!-- Navigation -->', 'No', 'Text', '2020-12-30 00:00:00', 'Ya', 'On', 5);

-- --------------------------------------------------------

--
-- Table structure for table `page`
--

CREATE TABLE `page` (
  `id_page` int(5) NOT NULL,
  `judul` varchar(180) NOT NULL,
  `judul_seo` varchar(200) NOT NULL,
  `gambar` varchar(128) NOT NULL,
  `deskripsi` mediumtext DEFAULT NULL,
  `hapus` enum('Yes','No') DEFAULT NULL,
  `jenis_modul` enum('Text','Textarea','Judul & Text','Judul & Textarea','Text Images','Textarea Images','Images','Images SEO','SEO','Images & Link','Textarea Keterangan') NOT NULL,
  `status` enum('On','Off') DEFAULT NULL,
  `tampil` enum('Ya','Tidak') DEFAULT NULL,
  `title` varchar(12800) DEFAULT NULL,
  `keyword` mediumtext DEFAULT NULL,
  `description` mediumtext DEFAULT NULL,
  `tgl_update` datetime DEFAULT NULL,
  `dilihat` int(11) DEFAULT 0,
  `keterangan` text DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `page`
--

INSERT INTO `page` (`id_page`, `judul`, `judul_seo`, `gambar`, `deskripsi`, `hapus`, `jenis_modul`, `status`, `tampil`, `title`, `keyword`, `description`, `tgl_update`, `dilihat`, `keterangan`) VALUES
(0, 'Welcome Text', '', 'enom-management-40.jpeg', '<h2 style=\"text-align:center\"><span style=\"font-size:26px\"><strong>JASA KONVEKSI TERMURAH DI JOGJA</strong></span><br />\r\n&nbsp;</h2>\r\n\r\n<p style=\"text-align:justify\">Berkah konveksi melayani pembuatan baju, jaket, seragam, dll. Kami melayani design costum untuk baju, seragam, komunitas, dll. Baju yang kami jahit dibuat dari bahan pilihan, yan nyaman digunakan. Anda dapat memesan keperluan seragam, baju, kaos, dll di tempat kami.&nbsp;Dengan mengedepankan profesionalitas, integritas, serta kualitas yang kami berikan.&nbsp;Tidak hanya unggul dalam kualitas, CV Berkah Jaya Konveksi berani memberikan&nbsp;<strong>garansi dari setiap produk</strong>. Jadi kamu tidak kuatir dan ragu untuk memilih kami sebagai partner solusi pembuatan seragam kamu.</p>\r\n', 'No', 'Textarea', 'On', 'Ya', 'DINAS PEKERJAAN UMUM DAN PENATAAN RUANG KABUPATEN BULUNGAN', '', '', '2021-03-22 00:00:00', 0, NULL),
(1, 'Welcome Text', '', 'header-9.png', '<p><span style=\"font-size:16px\"><span style=\"font-family:Lucida Sans Unicode,Lucida Grande,sans-serif\"><strong>SELAMAT DATANG DI WEBSITE SISTEM INFORMASI DATA TEKNIS PERENCANAAN JALAN DPUPR KABUPATEN BULUNGAN</strong></span></span></p>\r\n\r\n<p>Puji syukur kehadirat Allah SWT atas rahmat dan karunia-Nya, kita dapat menjalankan tugas dan kewajiban sehari-hari dalam melaksanakan amanah dari rakyat, tentunya dalam kondisi sehat wal&#39;afiat.&nbsp;</p>\r\n\r\n<p>Terbitnya website ini, selain bertujuan untuk menyajikan informasi seputar Sistem Informasi Data Teknis Perencanaan Jalan DPUPR&nbsp;Kabupaten Bulungan, juga diharapkan dapat memberikan informasi tentang apa yang akan dan sudah dilaksanakan oleh para wakil rakyat di Negeri Junjungan dalam melaksanakan fungsinya, yaitu legislasi, pengawasan dan anggaran.</p>\r\n\r\n<p>&nbsp;</p>\r\n', 'No', 'Textarea', 'Off', 'Tidak', 'DINAS PEKERJAAN UMUM DAN PENATAAN RUANG KABUPATEN BULUNGAN', '', '', '2021-04-29 00:00:00', 0, ''),
(2, 'Lokasi Kami', 'portofolio', 'catalogue-11.jpeg', '<h1><span style=\"font-size:22px\"><strong>Anda juga bisa langsung kunjungi workshop konveksi kami</strong></span></h1>\r\n\r\n<p><span style=\"font-size:18px\"><span style=\"font-family:Calibri,sans-serif\">Jl Semeru no.3 Ngabean Wetan Sinduharjo Ngaglik Sleman Yogyakarta</span></span></p>\r\n\r\n<p><span style=\"font-size:18px\"><span style=\"font-family:Calibri,sans-serif\"><strong>FB :</strong>&nbsp;&nbsp;<strong><a href=\"https://facebook.com/onedaycloth\" style=\"color:blue; text-decoration:underline\" target=\"_blank\">Oneday Cloth</a></strong> </span></span></p>\r\n\r\n<p><span style=\"font-size:18px\"><span style=\"font-family:Calibri,sans-serif\"><strong>IG :</strong>&nbsp;<strong><a href=\"https://instagram.com/onedaycloth\" style=\"color:blue; text-decoration:underline\" target=\"_blank\">@onedaycloth</a></strong> </span></span></p>\r\n', 'No', 'Textarea', 'On', 'Ya', 'DINAS PEKERJAAN UMUM DAN PENATAAN RUANG KABUPATEN BULUNGAN', '', '', '2021-03-09 00:00:00', 0, NULL),
(3, 'Our Network', 'event', '', '<h4 style=\"text-align:center\">HOTEL | RESTAURANT | CAFE | VILLA | RESORT | PRIVATE RESIDENCE | APARTMENT | BUYING AGENT | WHOLESALE | RETAIL | ARCHITECT | DESIGNER | ENGINEER | HOSPITALITY | GOVERNMENT PROJECT</h4>\r\n', 'No', 'Textarea', 'On', 'Tidak', 'DINAS PEKERJAAN UMUM DAN PENATAAN RUANG KABUPATEN BULUNGAN', '', '', '2021-04-14 00:00:00', 0, ''),
(4, 'About Us', 'seo-galeri', 'foto-99.jpeg', '<p><span style=\"font-size:16px\"><strong>CV Berkah Konveksi Jaya</strong> melayani pembuatan baju, jaket, seragam, dll. Kami melayani design costum untuk baju, seragam, komunitas, dll. Baju yang kami jahit dibuat dari bahan pilihan, yan nyaman digunakan. Anda dapat memesan keperluan seragam, baju, kaos, dll di tempat kami yang berada di&nbsp;Jl. Rejodadi, Sonopakis Kidul, Ngestiharjo, Kec. Kasihan, Bantul, Daerah Istimewa Yogyakarta 55184</span></p>\r\n', 'No', 'Textarea', 'On', 'Tidak', 'DINAS PEKERJAAN UMUM DAN PENATAAN RUANG KABUPATEN BULUNGAN', '', '', '2021-03-22 00:00:00', 0, NULL),
(8, 'Kontak Kami', '', 'kontak-kami-87.jpeg', '<h3><strong>Rochester Jersey</strong><br />\r\n<span style=\"font-size:14px\">Alamat Official Store :&nbsp;<br />\r\nJl. Pembela Tanah Air No 7, Tegalrejo, Yogyakarta.&nbsp;<br />\r\nHP / WhatsApp : 085701220210<br />\r\nEmail : antontriprasetyo@gmail.com</span></h3>\r\n', 'No', 'Textarea Keterangan', 'On', 'Tidak', 'DINAS PEKERJAAN UMUM DAN PENATAAN RUANG KABUPATEN BULUNGAN', '', '', '2021-04-06 00:00:00', 0, '<p><strong>Jam Buka :&nbsp;<br />\r\nSenin 09.00 - 17.00<br />\r\nSelasa 09.00 - 17.00<br />\r\nRabu &nbsp;09.00 - 17.00<br />\r\nKamis &nbsp;09.00 - 17.00<br />\r\nJumat &nbsp; 09.00 - 17.00<br />\r\nSabtu &nbsp;09.00 - 17.00<br />\r\nMinggu<span style=\"color:#e74c3c\"> LIBUR</span></strong></p>\r\n'),
(9, 'Berita', 'cara-order', 'berita-28.jpeg', '', 'No', 'Images SEO', 'On', 'Ya', 'DINAS PEKERJAAN UMUM DAN PENATAAN RUANG KABUPATEN BULUNGAN', '', '', '2021-02-20 00:00:00', 0, NULL),
(10, 'Open Position', '', 'open-position-30.jpeg', 'Join Karya Jasa Furniture Team', 'No', 'Text Images', 'On', 'Ya', 'DINAS PEKERJAAN UMUM DAN PENATAAN RUANG KABUPATEN BULUNGAN', '', '', '2021-04-15 00:00:00', 0, ''),
(11, 'Cek Ongkir', 'tentang-kami', '', '', 'No', 'Images', 'On', 'Ya', 'DINAS PEKERJAAN UMUM DAN PENATAAN RUANG KABUPATEN BULUNGAN', '', '', '2021-03-02 00:00:00', 0, NULL),
(12, 'Daftar Harga', 'info-iklan', 'pricelist-92.png', '', 'No', 'Images SEO', 'On', 'Ya', 'DINAS PEKERJAAN UMUM DAN PENATAAN RUANG KABUPATEN BULUNGAN', '', '', '2021-04-06 00:00:00', 0, ''),
(13, 'FAQ', 'prakata', '', '<p><strong>Why should WISANKA?</strong></p>\r\n\r\n<p><a href=\"http://wisanka.com/\"><span style=\"color:#2c3e50\"><strong>WISANKA</strong></span></a><span style=\"color:#2c3e50\">&nbsp;</span>is a manufacturer and worldwide exporter of&nbsp;<strong>Wooden Furniture, Rattan &amp; Natural Fiber Furniture, Craft and Home Accessories</strong>&nbsp;from Indonesia since 1993. Our&nbsp;<strong>furniture</strong>&nbsp;is available for&nbsp;<strong>indoor and outdoor</strong>&nbsp;use for retail, wholesale, and also project.</p>\r\n\r\n<p><strong>Where is the location ?</strong></p>\r\n\r\n<p>Our head office located in&nbsp;<a href=\"http://www.wisanka.com/contact-us/\"><span style=\"color:#2c3e50\"><strong>Surakarta (Solo)</strong></span></a>, Central Java, Indonesia. Our Showroom and production facilities located in Solo,&nbsp;<strong>Jepara</strong>, Cirebon and Jakarta.</p>\r\n\r\n<p><strong>Do you use kiln-dried wood and how is the moisture content?</strong></p>\r\n\r\n<p>Yes we do. The moisture contents of&nbsp;<strong>Wooden Furniture</strong>&nbsp;are:<br />\r\na. 1 &ndash; 2 cm thickness MC 12% &ndash; 15%<br />\r\nb. 3 &ndash; 4 cm thickness MC 16% &ndash; 18%<br />\r\nc. 5 cm thickness and up MC 19% &ndash; 20%</p>\r\n\r\n<p><strong>What kind of material is available?</strong></p>\r\n\r\n<p>Our&nbsp;<a href=\"https://www.wisanka.com/gallery/indoor-furniture/\"><span style=\"color:#2c3e50\"><strong>Indoor Wooden Furniture</strong></span></a>&nbsp;made of&nbsp;<strong>Teak</strong>, Mahogany, Mindy, Acacia and another type of&nbsp;<strong>Indonesian Wood</strong>. Our<span style=\"color:#2c3e50\">&nbsp;</span><a href=\"https://www.wisanka.com/gallery/outdoor-furniture/\"><span style=\"color:#2c3e50\"><strong>Outdoor Furniture</strong></span></a>&nbsp;made of&nbsp;<strong>Teak</strong>, Alloy Casting, Aluminum Pipe, Stainless Steel,&nbsp;<a href=\"https://www.teakbranchfurniture.com/\"><span style=\"color:#2c3e50\">teak branch</span></a>,&nbsp;<strong>Synthetic Rattan</strong>, and bathyline. Our Rattan &amp; Natural Fiber furniture made of skin of rattan, croco, water hyacinth, sea grass, and another natural fiber. Our craft and home accessories made of wood, terracotta, terrazzo, fabric, and various natural fibers assorted from all over Indonesia.</p>\r\n\r\n<p><strong>Can you accept buyers designs?</strong></p>\r\n\r\n<p>Yes we can, as long as the design is suitable with the material and production method requested. What you have to do is send us your designs by e-mail, complete with the measurement and specification you preference then we will carry on.</p>\r\n\r\n<p><strong>How long is the production lead-time?</strong></p>\r\n\r\n<p>a.&nbsp;<strong>Mahogany Furniture</strong>&nbsp;without carving 7-8 weeks<br />\r\nb.&nbsp;<strong>Mahogany Furniture</strong>&nbsp;with carving 9-10 weeks<br />\r\nc.&nbsp;<strong>Mahogany Furniture</strong>&nbsp;with exceptional design or hard carving 11-12 weeks<br />\r\nd.&nbsp;<a href=\"https://www.teakbranchfurniture.com/\"><strong>Indoor Teak Furniture</strong></a>&nbsp;8-9 weeks<br />\r\ne.&nbsp;<strong>Rattan and Natural Fiber</strong>&nbsp;Furniture 6-7 weeks<br />\r\nf.&nbsp;<strong>Bamboo Furniture</strong>&nbsp;6-7 weeks<br />\r\ng.&nbsp;<strong>Synthetic Rattan Furniture</strong>&nbsp;7-8 weeks<br />\r\nh.&nbsp;<strong>Garden Teak</strong>&nbsp;Furniture 8-10 weeks<br />\r\ni. Alloy Casting Furniture 8-10 weeks<br />\r\nj. Aluminum Pipe and Stainless Steel Furniture 7-8 weeks<br />\r\nl.&nbsp;<strong>Lighting, Craft and Home Accessories</strong>&nbsp;6-7 weeks</p>\r\n\r\n<p><strong>What is the minimum order?</strong></p>\r\n\r\n<p>The minimum order quantity is 1 x 20 feet container.</p>\r\n\r\n<p><strong>Do you guarantee the quality ?</strong></p>\r\n\r\n<p>Yes we do, all of our products are checked by our QC team in many production steps. We doing QC start from the selection of mateials until the finishing and packaging system. If you receive some damage, we are open discussion for the solution.</p>\r\n\r\n<p><strong>Compliance ?</strong></p>\r\n\r\n<p>If there is some defective product, please send us report with detail pictures maximum 1 months after unloaded. We can analyzes together the damage, if it couses from our side, we will responsible for this. Damage in shipping and unloading process are not covered.</p>\r\n\r\n<p><strong>What is the payment term?</strong></p>\r\n\r\n<p>a. Irrevocable L/C<br />\r\nb. T/T with 30% Down Payment and the rest 70% payment against documents.</p>\r\n\r\n<p><strong>Still need some other info and questions ?&nbsp;</strong></p>\r\n', NULL, 'Textarea', 'On', 'Ya', 'DINAS PEKERJAAN UMUM DAN PENATAAN RUANG KABUPATEN BULUNGAN', '', '', '2021-04-17 00:00:00', 0, ''),
(14, 'Project', '', 'prakata-custom-tour-6.png', '<h1 style=\"text-align:center\"><strong>FOREWORD HOTEL PROJECT</strong><br />\r\n&nbsp;</h1>\r\n\r\n<h3>With the world growth in many sectors including business across the globe, it gives good consequences for supplying facilities likes hotel, restaurant, resort, residences and public transportation. Activities that require travelling from one place to another impact the hospitality industries growing rapidly. These facts influence the expansion of furniture industries as well.</h3>\r\n\r\n<h3>Aside from that, the rapid sale of&nbsp;<em>furniture</em>&nbsp;to worldwide markets including to the&nbsp;<em>importer</em>,&nbsp;<em>wholesaler</em>&nbsp;and&nbsp;<em>retailer</em>&nbsp;of furniture that has become a regular customer of Wisanka and also doing some series of&nbsp;<em>hotel project</em>&nbsp;both locally and worldwide, that is why we conclude that in every new hotel built definitely need good furniture. That is why Wisanka Hotel and Resort project exists to supply those market.</h3>\r\n\r\n<h3 style=\"text-align:center\">We proudly present our serious commitment by supplying the finest<em>&nbsp;furniture for hotel and resort project</em>&nbsp;with our nine warehouses that always providing furniture in various range of materials, products and design both indoor and outdoor with banner under name of Wisanka Group, we do believe it would give you wider range for a better choice.&nbsp;<br />\r\n<br />\r\n<strong>Hotel Project Furniture&nbsp;|&nbsp;Hospitality Furniture&nbsp;|&nbsp;Java Furniture Hotel Project&nbsp;|&nbsp;Indonesia Furniture Hotel Project</strong></h3>\r\n', NULL, 'Textarea', 'On', 'Ya', 'DINAS PEKERJAAN UMUM DAN PENATAAN RUANG KABUPATEN BULUNGAN', '', '', '2021-04-16 00:00:00', 0, ''),
(15, 'Testimoni', '', 'sarana-prasarana-29.jpeg', '', 'No', 'Textarea', 'On', 'Ya', 'DINAS PEKERJAAN UMUM DAN PENATAAN RUANG KABUPATEN BULUNGAN', '', '', '2021-02-28 00:00:00', 0, NULL),
(16, 'Portofolio', '', 'prestasi-7.jpeg', '', 'No', 'Textarea', 'On', 'Ya', 'DINAS PEKERJAAN UMUM DAN PENATAAN RUANG KABUPATEN BULUNGAN', '', '', '2021-03-05 00:00:00', 0, NULL),
(17, 'Kontak', '', 'guru--staff-72.jpeg', '', 'No', 'Textarea', 'On', 'Ya', 'DINAS PEKERJAAN UMUM DAN PENATAAN RUANG KABUPATEN BULUNGAN', '', '', '2021-03-05 00:00:00', 0, NULL),
(18, 'Gallery', '', '', NULL, 'No', 'Text', 'On', 'Ya', 'DINAS PEKERJAAN UMUM DAN PENATAAN RUANG KABUPATEN BULUNGAN', '', '', '2021-04-05 00:00:00', 0, ''),
(19, 'Produk', '', '', '', 'No', 'Textarea', 'On', 'Ya', 'DINAS PEKERJAAN UMUM DAN PENATAAN RUANG KABUPATEN BULUNGAN', '', '', '2021-03-05 00:00:00', 0, NULL),
(20, 'About Top', '', '', '<h1 style=\"text-align:center\"><strong>KARYA JASA FURNITURE AT GLANCE</strong></h1>\r\n\r\n<p>We start our business as&nbsp;<a href=\"http://wisanka.com/\">indonesia furniture</a>&nbsp;exporter in 1993 and growing rapidly until now. We declare ourselves as a&nbsp;manufacture and exporter company&nbsp;with legal entity as PT in&nbsp;Indonesia&nbsp;and similar to Public Limited Company (PLC) or an Ltd in the United Kingdom, Ireland or the United States. Aspects of Law and Administration we have had since inception of this companys proofing our seriousness and commitment running this business.</p>\r\n\r\n<p>On its development Wisanka enlarge the scope of business into a company group under&nbsp;<strong>Wisanka Indonesia</strong>&nbsp;which is consist of five divisions covered seven products range&nbsp;<a href=\"https://www.wisanka.com/wooden-furniture-division/\"><strong>wooden furniture</strong></a>,&nbsp;<a href=\"https://www.wisanka.com/wisanka-indoor-outdoor-furniture/\"><strong>indoor teak</strong></a>,&nbsp;<a href=\"https://www.wisanka.com/rattan-natural-fibers-division/\"><strong>rattan and natural fibers</strong></a>,&nbsp;<a href=\"https://www.wisanka.com/classic-reclaimed-furniture-division/\"><strong>classic furniture</strong></a>,&nbsp;<a href=\"https://www.wisanka.com/wisanka-indoor-outdoor-furniture/\"><strong>outdoor furniture</strong></a><a>,&nbsp;</a><strong><a href=\"https://www.wisanka.com/gallery/rattan-furniture/syntheticrattan/\">synthetic rattan</a>,&nbsp;<a href=\"https://www.wisanka.com/furniture-lighting-and-craft-division/\">decorative lighting and craft</a></strong>. The idea is to be one-stop shop by offer multitude furniture product range to our clients moreover to create the opportunity for the company to sell more products.</p>\r\n\r\n<p>We believe skill and depth knowledge of furniture are the main foundation for everyone in this company. By those strength and supported with premium design, we will deliver &ldquo;value&rdquo; to our customers. We would like to create wide target market not only limited for wholesaler and retailer but also projects including&nbsp;<strong><a href=\"https://www.wisanka.com/project\">hotel project</a>, villa project, housing project or event restaurant project unexceptional private house and government office</strong>. During our 20 years existence in&nbsp;<strong>Indonesia Furniture</strong>&nbsp;industry those target market is complete adequately.</p>\r\n\r\n<p>Specify your choice here..!!</p>\r\n', 'No', 'Textarea', 'On', 'Ya', 'DINAS PEKERJAAN UMUM DAN PENATAAN RUANG KABUPATEN BULUNGAN', '', '', '2021-04-15 00:00:00', 0, ''),
(21, 'About Middle', '', '', '<h1 style=\"text-align:center\"><strong>VISION</strong></h1>\r\n\r\n<p>Being the leading role in furniture and craft industry in which combining Indonesian excellence craftsmanship, legal and environmental friendly material through a continuous Research, Design &amp; Development program to win the global hyper competition in furnishing industry.</p>\r\n\r\n<p>&nbsp;</p>\r\n\r\n<h1 style=\"text-align:center\"><strong>MISSION</strong></h1>\r\n\r\n<ol>\r\n	<li>Maintaining intensive communication along with valuable business partners to increase business acceleration and create a long term mutual business relationship.</li>\r\n	<li>Conducting a continuous program of Research, Design &amp; Development program to create a sustainable business concept.</li>\r\n	<li>Continuously developing original design products.</li>\r\n	<li>Exploring and maximizing the use of renewable and eco-friendly material.</li>\r\n	<li>Managing the human resources professionally.</li>\r\n	<li>Creating integrated management information system with the development of information and technology&nbsp;</li>\r\n</ol>\r\n', 'No', 'Textarea', 'On', 'Ya', 'DINAS PEKERJAAN UMUM DAN PENATAAN RUANG KABUPATEN BULUNGAN', '', '', '2021-04-15 00:00:00', 0, ''),
(22, 'About Bottom', '', '', '<h1 style=\"text-align:center\"><strong>ABOUT US</strong></h1>\r\n\r\n<p>&nbsp;</p>\r\n\r\n<table class=\"table table-striped\">\r\n	<tbody>\r\n		<tr>\r\n			<td>Establised</td>\r\n			<td>:</td>\r\n			<td>1993</td>\r\n		</tr>\r\n		<tr>\r\n			<td>Product Range</td>\r\n			<td>:</td>\r\n			<td>Indoor Furniture, Outdoor Furniture, Lighting and Craft</td>\r\n		</tr>\r\n		<tr>\r\n			<td>Market Established</td>\r\n			<td>:</td>\r\n			<td>Worldwide</td>\r\n		</tr>\r\n		<tr>\r\n			<td>Type of Business</td>\r\n			<td>:</td>\r\n			<td>Manufacturer and Exporter</td>\r\n		</tr>\r\n		<tr>\r\n			<td>Production Capacitiy</td>\r\n			<td>:</td>\r\n			<td>50 Containers / Month</td>\r\n		</tr>\r\n		<tr>\r\n			<td>Head Office</td>\r\n			<td>:</td>\r\n			<td>Jl. Solo Daleman No. 41 Baki, Sukoharjo 57556</td>\r\n		</tr>\r\n		<tr>\r\n			<td>&nbsp;</td>\r\n			<td>&nbsp;</td>\r\n			<td>Solo, Jawa tengah, Indonesia</td>\r\n		</tr>\r\n		<tr>\r\n			<td>Telephone</td>\r\n			<td>:</td>\r\n			<td>+62-271-623231/ 623232</td>\r\n		</tr>\r\n		<tr>\r\n			<td>Faximile</td>\r\n			<td>:</td>\r\n			<td>+62-271-623233</td>\r\n		</tr>\r\n		<tr>\r\n			<td>Website</td>\r\n			<td>:</td>\r\n			<td><a href=\"https://www.wisanka.com/\">www.wisanka.com</a></td>\r\n		</tr>\r\n		<tr>\r\n			<td>Email</td>\r\n			<td>:</td>\r\n			<td><a href=\"mailto:info@wisanka.com\">info@wisanka.com</a></td>\r\n		</tr>\r\n	</tbody>\r\n</table>\r\n', 'No', 'Textarea', 'On', 'Ya', 'DINAS PEKERJAAN UMUM DAN PENATAAN RUANG KABUPATEN BULUNGAN', '', '', '2021-04-15 00:00:00', 0, '');

-- --------------------------------------------------------

--
-- Table structure for table `paket`
--

CREATE TABLE `paket` (
  `id_paket` int(5) NOT NULL,
  `judul` varchar(100) DEFAULT NULL,
  `deskripsi` text DEFAULT NULL,
  `gambar` varchar(120) DEFAULT NULL,
  `gambar_mobile` varchar(400) NOT NULL,
  `url` varchar(150) DEFAULT NULL,
  `harga_mulai` varchar(400) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `portofolio`
--

CREATE TABLE `portofolio` (
  `id_portofolio` int(11) NOT NULL,
  `nama` varchar(400) NOT NULL,
  `gambar` varchar(350) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `portofolio`
--

INSERT INTO `portofolio` (`id_portofolio`, `nama`, `gambar`) VALUES
(2, 'galeri', 'galeri-62.jpeg'),
(3, 'galeri', 'galeri-15.jpeg'),
(4, 'galeri', 'galeri-32.jpeg'),
(5, 'galeri', 'galeri-22.jpeg');

-- --------------------------------------------------------

--
-- Table structure for table `produk`
--

CREATE TABLE `produk` (
  `id_produk` int(11) NOT NULL,
  `id_produk_kategori` int(11) DEFAULT NULL,
  `id_admin` int(11) DEFAULT NULL,
  `judul` varchar(300) NOT NULL,
  `judul_seo` varchar(500) NOT NULL,
  `deskripsi` text DEFAULT NULL,
  `keyword` varchar(350) DEFAULT NULL,
  `description` varchar(350) DEFAULT NULL,
  `gambar` varchar(500) DEFAULT NULL,
  `harga` varchar(300) DEFAULT NULL,
  `unggulan` enum('Ya','Tidak') NOT NULL DEFAULT 'Tidak',
  `dilihat` int(11) NOT NULL DEFAULT 0,
  `tgl` date NOT NULL DEFAULT current_timestamp(),
  `stok` enum('Tersedia','Terbatas','Habis','Pre Order') NOT NULL,
  `berat` int(11) DEFAULT NULL,
  `kode_produk` varchar(200) DEFAULT NULL,
  `harga_diskon` varchar(400) DEFAULT NULL,
  `promo` enum('Ya','Tidak') NOT NULL DEFAULT 'Tidak',
  `tokopedia` varchar(450) DEFAULT NULL,
  `bukalapak` varchar(450) DEFAULT NULL,
  `shopee` varchar(450) DEFAULT NULL,
  `lazada` varchar(450) DEFAULT NULL,
  `blibli` varchar(450) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `produk`
--

INSERT INTO `produk` (`id_produk`, `id_produk_kategori`, `id_admin`, `judul`, `judul_seo`, `deskripsi`, `keyword`, `description`, `gambar`, `harga`, `unggulan`, `dilihat`, `tgl`, `stok`, `berat`, `kode_produk`, `harga_diskon`, `promo`, `tokopedia`, `bukalapak`, `shopee`, `lazada`, `blibli`) VALUES
(14, 11, 2, 'KJ Barstool 1', 'kj-barstool-1', '<p>It is a long established fact that a reader will be distracted by the readable content of a page when looking at its layout. The point of using Lorem Ipsum is that it has a more-or-less normal distribution of letters, as opposed to using &#39;Content here, content here&#39;, making it look like readable English. Many desktop publishing packages and web page editors now use Lorem Ipsum as their default model text, and a search for &#39;lorem ipsum&#39; will uncover many web sites still in their infancy. Various versions have evolved over the years, sometimes by accident, sometimes on purpose (injected humour and the like).</p>\r\n', '', '', 'kj-barstool-1-98.jpeg', '230,000', 'Tidak', 16, '2021-04-15', '', NULL, NULL, NULL, '', '', '', '', '', ''),
(15, 11, 2, 'Ginger Chair', 'ginger-chair', '<p>It is a long established fact that a reader will be distracted by the readable content of a page when looking at its layout. The point of using Lorem Ipsum is that it has a more-or-less normal distribution of letters, as opposed to using &#39;Content here, content here&#39;, making it look like readable English. Many desktop publishing packages and web page editors now use Lorem Ipsum as their default model text, and a search for &#39;lorem ipsum&#39; will uncover many web sites still in their infancy. Various versions have evolved over the years, sometimes by accident, sometimes on purpose (injected humour and the like).</p>\r\n', '', '', 'ginger-chair-82.jpeg', '58,000', 'Tidak', 2, '2021-04-15', '', NULL, NULL, NULL, 'Tidak', '', '', '', '', ''),
(16, 11, 2, 'Peta Malas Chair', 'peta-malas-chair', '<p>It is a long established fact that a reader will be distracted by the readable content of a page when looking at its layout. The point of using Lorem Ipsum is that it has a more-or-less normal distribution of letters, as opposed to using &#39;Content here, content here&#39;, making it look like readable English. Many desktop publishing packages and web page editors now use Lorem Ipsum as their default model text, and a search for &#39;lorem ipsum&#39; will uncover many web sites still in their infancy. Various versions have evolved over the years, sometimes by accident, sometimes on purpose (injected humour and the like).</p>\r\n', '', '', 'peta-malas-chair-30.jpeg', '230,000', 'Tidak', 1, '2021-04-15', '', NULL, NULL, NULL, 'Tidak', '', '', '', '', ''),
(17, 11, 2, 'Sierra Arm Chair', 'sierra-arm-chair', '<p>It is a long established fact that a reader will be distracted by the readable content of a page when looking at its layout. The point of using Lorem Ipsum is that it has a more-or-less normal distribution of letters, as opposed to using &#39;Content here, content here&#39;, making it look like readable English. Many desktop publishing packages and web page editors now use Lorem Ipsum as their default model text, and a search for &#39;lorem ipsum&#39; will uncover many web sites still in their infancy. Various versions have evolved over the years, sometimes by accident, sometimes on purpose (injected humour and the like).</p>\r\n', '', '', 'sierra-arm-chair-54.jpeg', '500,000', 'Tidak', 7, '2021-04-15', '', NULL, NULL, NULL, 'Tidak', '', '', '', '', '');

-- --------------------------------------------------------

--
-- Table structure for table `produk_kategori`
--

CREATE TABLE `produk_kategori` (
  `id_produk_kategori` int(11) NOT NULL,
  `judul` varchar(300) NOT NULL,
  `judul_seo` varchar(400) NOT NULL,
  `deskripsi` text DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `produk_kategori`
--

INSERT INTO `produk_kategori` (`id_produk_kategori`, `judul`, `judul_seo`, `deskripsi`) VALUES
(7, 'KJ Flute Collection', 'kj-flute-collection', NULL),
(8, 'KJ Classic Chair Collection', 'kj-classic-chair-collection', NULL),
(9, 'KJ Folding Chair Collection', 'kj-folding-chair-collection', NULL),
(10, 'KJ Rocking Chair Collection', 'kj-rocking-chair-collection', NULL),
(11, 'KJ Barstool and Stool Collection', 'kj-barstool-and-stool-collection', NULL),
(12, 'Unique Furniture Collection', 'unique-furniture-collection', NULL),
(13, 'Rattan & Synthetic Collection', 'rattan--synthetic-collection', NULL);

-- --------------------------------------------------------

--
-- Table structure for table `quotation`
--

CREATE TABLE `quotation` (
  `id` int(11) NOT NULL,
  `name` varchar(200) NOT NULL,
  `email` varchar(200) NOT NULL,
  `company` varchar(200) DEFAULT NULL,
  `website` varchar(200) DEFAULT NULL,
  `phone` varchar(50) NOT NULL,
  `message` varchar(600) DEFAULT NULL,
  `sent_date` timestamp NOT NULL DEFAULT current_timestamp(),
  `is_read` enum('readed','unread') NOT NULL DEFAULT 'unread'
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `quotation`
--

INSERT INTO `quotation` (`id`, `name`, `email`, `company`, `website`, `phone`, `message`, `sent_date`, `is_read`) VALUES
(4, 'Aleksander Petruk', 'roberto@gmail.com', 'Jogja Media Web', 'https://www.jogjamediaweb.com', '0865665677', 'Dear Karya Jasa,\r\ncan the material change to plastic ?', '2021-04-16 07:22:47', 'unread');

-- --------------------------------------------------------

--
-- Table structure for table `quotation_detail`
--

CREATE TABLE `quotation_detail` (
  `id` int(11) NOT NULL,
  `id_quotation` int(11) NOT NULL,
  `nama` varchar(400) NOT NULL,
  `harga` int(11) DEFAULT NULL,
  `jumlah` int(11) DEFAULT NULL,
  `sub_total` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `quotation_detail`
--

INSERT INTO `quotation_detail` (`id`, `id_quotation`, `nama`, `harga`, `jumlah`, `sub_total`) VALUES
(6, 4, 'Flute Dressing Table', 4000000, 1, 4000000),
(7, 4, 'Sierra Arm Chair', 500000, 2, 1000000);

-- --------------------------------------------------------

--
-- Table structure for table `referensi`
--

CREATE TABLE `referensi` (
  `id_produk` int(5) NOT NULL,
  `judul` varchar(100) DEFAULT NULL,
  `judul_seo` varchar(500) NOT NULL,
  `deskripsi` text DEFAULT NULL,
  `harga` varchar(600) DEFAULT NULL,
  `gambar` varchar(120) DEFAULT NULL,
  `tgl` timestamp NULL DEFAULT current_timestamp(),
  `keyword` varchar(300) DEFAULT NULL,
  `description` varchar(300) DEFAULT NULL,
  `dilihat` int(11) DEFAULT 0
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `referensi`
--

INSERT INTO `referensi` (`id_produk`, `judul`, `judul_seo`, `deskripsi`, `harga`, `gambar`, `tgl`, `keyword`, `description`, `dilihat`) VALUES
(13, 'Flute Single Drawer Cupboard', 'flute-single-drawer-cupboard', '<p>Flute&nbsp;Single Drawer&nbsp;has a unique design, because we&nbsp;utilize&nbsp;small pieces of wood that cannot be used as furniture anymore, so we shape it like a flute and combine it with FJL - Teak which comes from pieces of wood too. And besides its prettiness, the dressing table is durable as well.</p>\r\n\r\n<p>Colour : Natural</p>\r\n', '3,750,000', 'flute-single-drawer-cupboard-25.jpeg', '2021-04-14 08:28:00', '', '', 0),
(14, 'Flute Double Drawer Cupboard', 'flute-double-drawer-cupboard', '<p>Flute&nbsp;Single Drawer has a unique design, because we&nbsp;utilize&nbsp;small pieces of wood that cannot be used as furniture anymore, so we shape it like a flute and combine it with FJL - Teak which comes from pieces of wood too. And besides its prettiness, the dressing table is durable as well.</p>\r\n\r\n<p>Colour : Natural</p>\r\n', '7,118,000', 'flute-double-drawer-cupboard-29.jpeg', '2021-04-14 08:30:23', '', '', 0),
(15, 'Flute Bedside Table', 'flute-bedside-table', '<p>Flute Bedside Table has a unique design, because we utilize small pieces of wood that cannot be used as furniture anymore, so we shape it like a flute and combine it with FJL - Teak which comes from pieces of wood too. And besides its prettiness, the dressing table is durable as well.<br />\r\nColour: Natural</p>\r\n', '1,475,000', 'flute-bedside-table-64.jpeg', '2021-04-14 08:31:09', '', '', 0),
(16, 'Flute Dressing Table', 'flute-dressing-table', '<p>Flute Dresser Table has a unique design, because we utilize small pieces of wood that cannot be used as furniture anymore, so we shape it like a flute and combine it with FJL - Teak which comes from pieces of wood too. And besides its prettiness, the dressing table is durable as well.<br />\r\nColour : Natural</p>\r\n', '4,000,000', 'flute-dressing-table-25.jpeg', '2021-04-14 08:32:44', '', '', 7),
(17, 'Bed Side Table', 'bed-side-table', '<p>Flute Bedside Table has a unique design, because we utilize small pieces of wood that cannot be used as furniture anymore, so we shape it like a flute and combine it with FJL - Teak which comes from pieces of wood too. And besides its prettiness, the dressing table is durable as well.<br />\r\nColour: Natural<br />\r\nDimension :<br />\r\nLength 63 cm,<br />\r\nWidth 46cm,<br />\r\nHeight 72 cm |<br />\r\nWeight : 16 kg</p>\r\n', '2,085,000', 'bed-side-table-43.jpeg', '2021-04-14 08:34:42', '', '', 1),
(18, 'sss', 'sss', '', '', 'sss-5.jpeg', '2021-04-21 04:17:12', '', '', 0);

-- --------------------------------------------------------

--
-- Table structure for table `referensi_kategori`
--

CREATE TABLE `referensi_kategori` (
  `id_referensi_kategori` int(11) NOT NULL,
  `judul` varchar(300) NOT NULL,
  `judul_seo` varchar(400) NOT NULL,
  `deskripsi` text DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `rekening`
--

CREATE TABLE `rekening` (
  `id_rekening` int(5) NOT NULL,
  `judul` varchar(100) DEFAULT NULL,
  `deskripsi` text DEFAULT NULL,
  `nama` varchar(150) DEFAULT NULL,
  `gambar` varchar(120) DEFAULT NULL,
  `url` varchar(150) DEFAULT NULL,
  `tgl_update` date DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `rekening`
--

INSERT INTO `rekening` (`id_rekening`, `judul`, `deskripsi`, `nama`, `gambar`, `url`, `tgl_update`) VALUES
(1, 'BCA', '8465423478', 'EVA LUTHFINA ROHMATIKA', NULL, NULL, '2020-12-15'),
(3, 'BRI', '051401000255537', 'EVA LUTHFINA ROCHMATIKA', NULL, NULL, '2020-12-15');

-- --------------------------------------------------------

--
-- Table structure for table `selor`
--

CREATE TABLE `selor` (
  `id_selor` int(11) NOT NULL,
  `nama` varchar(400) NOT NULL,
  `gambar` varchar(350) NOT NULL,
  `deskripsi` text DEFAULT NULL,
  `tgl` date DEFAULT NULL,
  `terunduh` int(11) DEFAULT 0,
  `dilihat` int(11) DEFAULT 0,
  `slug` varchar(600) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `selor`
--

INSERT INTO `selor` (`id_selor`, `nama`, `gambar`, `deskripsi`, `tgl`, `terunduh`, `dilihat`, `slug`) VALUES
(15, '6. Perencanaan Teknis Jalan Simp. Jelarai Raya Menuju Tanjung Rumbia - Korpri (Simpang Buloq)05252021', '6-perencanaan-teknis-jalan-simp-jelarai-raya-menuju-tanjung-rumbia--korpri-simpang-buloq05252021-94.pdf', '', '2021-05-27', 0, 0, '6-perencanaan-teknis-jalan-simp-jelarai-raya-menuju-tanjung-rumbia--korpri-simpang-buloq05252021'),
(16, '5. Perencanaan Teknis Jalan Bukit Indah', '5-perencanaan-teknis-jalan-bukit-indah-32.pdf', '', '2021-05-27', 0, 0, '5-perencanaan-teknis-jalan-bukit-indah'),
(17, '4. Perencanaan Teknis Jalan Ambalat', '4-perencanaan-teknis-jalan-ambalat-44.pdf', '', '2021-05-27', 0, 0, '4-perencanaan-teknis-jalan-ambalat'),
(18, '3. Perencanaan Teknis Pembangunan Jalan Belibis05252021', '3-perencanaan-teknis-pembangunan-jalan-belibis05252021-6.pdf', '', '2021-05-27', 0, 0, '3-perencanaan-teknis-pembangunan-jalan-belibis05252021'),
(19, '2. Perencanaan Teknis Jalan Perjuangan Ujung - Jalan AMD Sabanar Baru', '2-perencanaan-teknis-jalan-perjuangan-ujung--jalan-amd-sabanar-baru-52.pdf', '', '2021-05-27', 0, 0, '2-perencanaan-teknis-jalan-perjuangan-ujung--jalan-amd-sabanar-baru'),
(20, '1. Perencanaan Teknis Jalan PKMT-Selimau 3', '1-perencanaan-teknis-jalan-pkmtselimau-3-34.pdf', '', '2021-05-27', 0, 0, '1-perencanaan-teknis-jalan-pkmtselimau-3'),
(21, 'DD1 2020 TJG SELOR', 'dd1-2020-tjg-selor-1.pdf', '', '2021-05-27', 0, 0, 'dd1-2020-tjg-selor');

-- --------------------------------------------------------

--
-- Table structure for table `sizechart`
--

CREATE TABLE `sizechart` (
  `id_sizechart` int(11) NOT NULL,
  `nama` varchar(400) NOT NULL,
  `gambar` varchar(350) NOT NULL,
  `deskripsi` text DEFAULT NULL,
  `tgl` date DEFAULT NULL,
  `terunduh` int(11) DEFAULT 0,
  `dilihat` int(11) DEFAULT 0,
  `slug` varchar(600) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `sizechart`
--

INSERT INTO `sizechart` (`id_sizechart`, `nama`, `gambar`, `deskripsi`, `tgl`, `terunduh`, `dilihat`, `slug`) VALUES
(18, 'SK JALAN KAB. BULUNGAN', 'sk-jalan-kab-bulungan-83.pdf', '', '2021-05-20', 0, 0, 'sk-jalan-kab-bulungan');

-- --------------------------------------------------------

--
-- Table structure for table `slider`
--

CREATE TABLE `slider` (
  `id_slider` int(5) NOT NULL,
  `judul` varchar(100) DEFAULT NULL,
  `deskripsi` text DEFAULT NULL,
  `gambar` varchar(120) DEFAULT NULL,
  `gambar_mobile` varchar(400) NOT NULL,
  `url` varchar(150) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `slider`
--

INSERT INTO `slider` (`id_slider`, `judul`, `deskripsi`, `gambar`, `gambar_mobile`, `url`) VALUES
(70, 'Slider', '', 'slider-25.png', '', NULL);

-- --------------------------------------------------------

--
-- Table structure for table `social_media`
--

CREATE TABLE `social_media` (
  `id_social_media` int(11) NOT NULL,
  `judul` varchar(400) NOT NULL,
  `link` text NOT NULL,
  `tgl_update` date DEFAULT NULL,
  `status` enum('on','off') NOT NULL DEFAULT 'on'
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `social_media`
--

INSERT INTO `social_media` (`id_social_media`, `judul`, `link`, `tgl_update`, `status`) VALUES
(1, 'Facebook', 'https://facebook.com/', '2020-08-07', 'on'),
(2, 'Twitter', 'https://twitter.com/', '2020-07-08', 'on'),
(3, 'Youtube', 'https://www.youtube.com/', '2020-07-08', 'on'),
(4, 'Instagram', 'https://instagram.com/', '2020-08-07', 'on'),
(5, 'Pinterest', 'https://pinterest.com', '2020-08-07', 'off'),
(6, 'Email', 'ud.karyajasa@gmail.com', '2017-11-01', 'on');

-- --------------------------------------------------------

--
-- Table structure for table `statistik`
--

CREATE TABLE `statistik` (
  `id` int(5) NOT NULL,
  `ip` varchar(20) NOT NULL DEFAULT '',
  `tanggal` date NOT NULL,
  `hits` int(10) NOT NULL DEFAULT 1,
  `online` varchar(255) NOT NULL,
  `time` time NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `statistik`
--

INSERT INTO `statistik` (`id`, `ip`, `tanggal`, `hits`, `online`, `time`) VALUES
(361, '40.77.167.92', '2021-04-23', 1, '1619170492', '00:00:00'),
(360, '62.254.70.113', '2021-04-23', 2, '1619170401', '00:00:00'),
(359, '150.143.163.63', '2021-04-23', 2, '1619170400', '00:00:00'),
(358, '157.230.194.216', '2021-04-23', 2, '1619170400', '00:00:00'),
(357, '68.183.241.134', '2021-04-23', 2, '1619170400', '00:00:00'),
(356, '207.46.13.78', '2021-04-23', 1, '1619167182', '00:00:00'),
(355, '110.136.183.14', '2021-04-23', 9, '1619166802', '00:00:00'),
(362, '207.46.13.77', '2021-04-23', 1, '1619170849', '00:00:00'),
(363, '207.46.13.70', '2021-04-23', 1, '1619170915', '00:00:00'),
(364, '207.46.13.75', '2021-04-23', 1, '1619171400', '00:00:00'),
(365, '124.71.180.89', '2021-04-23', 2, '1619199054', '00:00:00'),
(366, '3.8.68.2', '2021-04-23', 1, '1619176943', '00:00:00'),
(367, '125.160.65.102', '2021-04-23', 9, '1619186176', '00:00:00'),
(368, '34.248.25.118', '2021-04-23', 1, '1619210491', '00:00:00'),
(369, '138.246.253.24', '2021-04-23', 1, '1619212623', '00:00:00'),
(370, '188.166.188.124', '2021-04-23', 2, '1619215328', '00:00:00'),
(371, '54.36.148.149', '2021-04-23', 1, '1619218558', '00:00:00'),
(372, '42.236.10.84', '2021-04-23', 1, '1619220788', '00:00:00'),
(373, '27.115.124.70', '2021-04-23', 1, '1619220876', '00:00:00'),
(374, '180.163.220.4', '2021-04-23', 1, '1619220982', '00:00:00'),
(375, '34.86.35.3', '2021-04-24', 1, '1619226705', '00:00:00'),
(376, '125.160.65.102', '2021-04-24', 4, '1619228823', '00:00:00'),
(377, '110.136.183.14', '2021-04-24', 5, '1619232470', '00:00:00'),
(378, '125.160.66.81', '2021-04-24', 14, '1619235451', '00:00:00'),
(379, '208.80.194.41', '2021-04-24', 1, '1619251910', '00:00:00'),
(380, '5.62.35.128', '2021-04-24', 2, '1619255195', '00:00:00'),
(381, '54.36.149.63', '2021-04-24', 1, '1619275250', '00:00:00'),
(382, '124.71.180.89', '2021-04-24', 1, '1619276442', '00:00:00'),
(383, '104.131.22.119', '2021-04-24', 1, '1619290846', '00:00:00'),
(384, '45.10.234.216', '2021-04-24', 2, '1619293238', '00:00:00'),
(385, '124.71.180.89', '2021-04-25', 2, '1619370754', '00:00:00'),
(386, '143.198.195.162', '2021-04-25', 2, '1619323192', '00:00:00'),
(387, '54.36.148.5', '2021-04-25', 1, '1619333526', '00:00:00'),
(388, '18.183.173.194', '2021-04-25', 1, '1619360054', '00:00:00'),
(389, '40.85.168.14', '2021-04-25', 2, '1619363270', '00:00:00'),
(390, '125.160.66.237', '2021-04-26', 12, '1619408553', '00:00:00'),
(391, '54.36.148.139', '2021-04-26', 1, '1619409039', '00:00:00'),
(392, '54.36.148.96', '2021-04-26', 1, '1619413518', '00:00:00'),
(393, '207.46.13.75', '2021-04-26', 2, '1619420943', '00:00:00'),
(394, '110.138.74.228', '2021-04-26', 1, '1619420680', '00:00:00'),
(395, '36.73.75.216', '2021-04-26', 25, '1619424340', '00:00:00'),
(396, '5.9.106.204', '2021-04-26', 2, '1619421211', '00:00:00'),
(397, '185.180.231.185', '2021-04-26', 1, '1619424981', '00:00:00'),
(398, '54.36.148.142', '2021-04-26', 3, '1619477268', '00:00:00'),
(399, '162.55.58.50', '2021-04-26', 1, '1619457238', '00:00:00'),
(400, '207.46.13.79', '2021-04-26', 1, '1619481102', '00:00:00'),
(401, '34.86.35.12', '2021-04-27', 1, '1619486643', '00:00:00'),
(402, '54.36.148.148', '2021-04-27', 1, '1619496642', '00:00:00'),
(403, '182.2.69.187', '2021-04-27', 7, '1619497582', '00:00:00'),
(404, '36.73.75.216', '2021-04-27', 13, '1619500977', '00:00:00'),
(405, '125.160.42.207', '2021-04-27', 3, '1619499663', '00:00:00'),
(406, '125.160.67.155', '2021-04-27', 5, '1619505567', '00:00:00'),
(407, '125.160.64.8', '2021-04-27', 1, '1619503061', '00:00:00'),
(408, '207.46.13.75', '2021-04-27', 1, '1619509806', '00:00:00'),
(409, '66.249.79.11', '2021-04-27', 2, '1619511868', '00:00:00'),
(410, '124.71.180.89', '2021-04-27', 2, '1619559779', '00:00:00'),
(411, '128.199.9.52', '2021-04-27', 1, '1619515801', '00:00:00'),
(412, '54.36.149.8', '2021-04-27', 1, '1619515845', '00:00:00'),
(413, '169.60.2.107', '2021-04-27', 1, '1619515866', '00:00:00'),
(414, '42.83.147.202', '2021-04-27', 1, '1619518117', '00:00:00'),
(415, '54.36.149.22', '2021-04-27', 1, '1619520042', '00:00:00'),
(416, '34.96.130.13', '2021-04-27', 1, '1619527230', '00:00:00'),
(417, '66.249.79.13', '2021-04-27', 1, '1619533422', '00:00:00'),
(418, '54.203.73.198', '2021-04-27', 1, '1619540777', '00:00:00'),
(419, '54.36.148.142', '2021-04-27', 1, '1619547886', '00:00:00'),
(420, '100.21.218.158', '2021-04-27', 2, '1619555558', '00:00:00'),
(421, '54.36.148.161', '2021-04-27', 1, '1619554703', '00:00:00'),
(422, '180.244.86.227', '2021-04-28', 3, '1619570375', '00:00:00'),
(423, '36.73.75.216', '2021-04-28', 28, '1619577376', '00:00:00'),
(424, '110.50.80.196', '2021-04-28', 1, '1619576839', '00:00:00'),
(425, '124.71.180.89', '2021-04-28', 4, '1619639759', '00:00:00'),
(426, '54.36.148.171', '2021-04-28', 1, '1619580917', '00:00:00'),
(427, '54.36.148.155', '2021-04-28', 1, '1619587730', '00:00:00'),
(428, '125.160.67.79', '2021-04-28', 1, '1619591519', '00:00:00'),
(429, '54.36.148.21', '2021-04-28', 1, '1619615533', '00:00:00'),
(430, '54.36.148.181', '2021-04-28', 1, '1619620392', '00:00:00'),
(431, '18.209.15.46', '2021-04-28', 1, '1619641690', '00:00:00'),
(432, '54.36.148.142', '2021-04-28', 2, '1619653669', '00:00:00'),
(433, '118.96.91.20', '2021-04-28', 4, '1619650331', '00:00:00'),
(434, '124.71.180.89', '2021-04-29', 5, '1619737931', '00:00:00'),
(435, '180.244.86.227', '2021-04-29', 3, '1619676452', '00:00:00'),
(436, '40.85.168.14', '2021-04-29', 2, '1619660954', '00:00:00'),
(437, '54.36.148.255', '2021-04-29', 1, '1619675267', '00:00:00'),
(438, '36.81.55.12', '2021-04-29', 23, '1619692483', '00:00:00'),
(439, '182.2.68.122', '2021-04-29', 2, '1619694057', '00:00:00'),
(440, '182.2.68.110', '2021-04-29', 1, '1619694073', '00:00:00'),
(441, '54.36.148.142', '2021-04-29', 2, '1619716278', '00:00:00'),
(442, '137.226.113.44', '2021-04-29', 1, '1619699583', '00:00:00'),
(443, '54.36.148.113', '2021-04-29', 1, '1619734633', '00:00:00'),
(444, '54.36.148.142', '2021-04-30', 2, '1619796859', '00:00:00'),
(445, '66.249.79.243', '2021-04-30', 3, '1619818706', '00:00:00'),
(446, '124.71.180.89', '2021-04-30', 4, '1619817753', '00:00:00'),
(447, '5.188.62.214', '2021-04-30', 1, '1619761918', '00:00:00'),
(448, '113.110.100.134', '2021-04-30', 1, '1619774054', '00:00:00'),
(449, '66.249.79.13', '2021-04-30', 1, '1619777136', '00:00:00'),
(450, '8.2.209.252', '2021-04-30', 1, '1619780221', '00:00:00'),
(451, '36.81.16.139', '2021-04-30', 1, '1619782691', '00:00:00'),
(452, '66.249.79.245', '2021-04-30', 1, '1619784631', '00:00:00'),
(453, '34.96.130.15', '2021-04-30', 1, '1619798886', '00:00:00'),
(454, '34.96.130.32', '2021-04-30', 1, '1619808170', '00:00:00'),
(455, '54.36.149.11', '2021-04-30', 1, '1619809574', '00:00:00'),
(456, '138.246.253.24', '2021-05-01', 1, '1619827259', '00:00:00'),
(457, '85.10.204.252', '2021-05-01', 1, '1619829399', '00:00:00'),
(458, '124.71.180.89', '2021-05-01', 4, '1619910390', '00:00:00'),
(459, '54.36.148.142', '2021-05-01', 2, '1619902622', '00:00:00'),
(460, '54.36.148.195', '2021-05-01', 1, '1619856047', '00:00:00'),
(461, '208.80.194.41', '2021-05-01', 1, '1619865266', '00:00:00'),
(462, '54.36.148.20', '2021-05-01', 1, '1619889488', '00:00:00'),
(463, '66.249.79.247', '2021-05-01', 4, '1619913587', '00:00:00'),
(464, '47.242.37.105', '2021-05-01', 1, '1619899001', '00:00:00'),
(465, '8.210.31.112', '2021-05-01', 1, '1619899002', '00:00:00'),
(466, '8.210.152.38', '2021-05-01', 1, '1619899003', '00:00:00'),
(467, '47.242.95.113', '2021-05-01', 1, '1619899003', '00:00:00'),
(468, '40.121.255.54', '2021-05-01', 1, '1619900521', '00:00:00'),
(469, '66.249.79.245', '2021-05-01', 4, '1619913018', '00:00:00'),
(470, '66.249.79.247', '2021-05-02', 1, '1619914721', '00:00:00'),
(471, '54.36.148.218', '2021-05-02', 1, '1619920634', '00:00:00'),
(472, '124.71.180.89', '2021-05-02', 4, '1619982939', '00:00:00'),
(473, '40.85.168.14', '2021-05-02', 2, '1619929261', '00:00:00'),
(474, '185.195.24.62', '2021-05-02', 2, '1619935823', '00:00:00'),
(475, '54.36.148.135', '2021-05-02', 1, '1619940159', '00:00:00'),
(476, '66.249.79.11', '2021-05-02', 1, '1619951075', '00:00:00'),
(477, '54.36.148.79', '2021-05-02', 1, '1619951163', '00:00:00'),
(478, '66.249.79.15', '2021-05-02', 1, '1619954484', '00:00:00'),
(479, '66.249.79.13', '2021-05-02', 2, '1619964142', '00:00:00'),
(480, '36.81.59.5', '2021-05-02', 1, '1619965346', '00:00:00'),
(481, '92.118.160.13', '2021-05-02', 1, '1619965370', '00:00:00'),
(482, '36.72.212.164', '2021-05-02', 2, '1619981401', '00:00:00'),
(483, '54.36.148.142', '2021-05-02', 1, '1619995212', '00:00:00'),
(484, '124.71.180.89', '2021-05-03', 5, '1620076737', '00:00:00'),
(485, '54.36.148.45', '2021-05-03', 1, '1620006437', '00:00:00'),
(486, '125.160.64.180', '2021-05-03', 1, '1620034323', '00:00:00'),
(487, '54.36.148.248', '2021-05-03', 1, '1620037505', '00:00:00'),
(488, '92.118.160.13', '2021-05-03', 1, '1620049372', '00:00:00'),
(489, '54.36.148.81', '2021-05-03', 1, '1620050751', '00:00:00'),
(490, '66.249.79.11', '2021-05-03', 1, '1620061276', '00:00:00'),
(491, '54.36.148.142', '2021-05-03', 1, '1620076558', '00:00:00'),
(492, '34.77.162.13', '2021-05-03', 1, '1620078997', '00:00:00'),
(493, '54.36.148.142', '2021-05-04', 2, '1620137317', '00:00:00'),
(494, '125.160.66.253', '2021-05-04', 5, '1620098292', '00:00:00'),
(495, '36.81.33.151', '2021-05-04', 3, '1620108740', '00:00:00'),
(496, '103.22.242.6', '2021-05-04', 1, '1620108736', '00:00:00'),
(497, '124.71.180.89', '2021-05-04', 2, '1620157691', '00:00:00'),
(498, '54.36.148.182', '2021-05-04', 1, '1620123950', '00:00:00'),
(499, '66.249.79.52', '2021-05-04', 1, '1620128871', '00:00:00'),
(500, '34.236.55.223', '2021-05-04', 1, '1620130804', '00:00:00'),
(501, '35.183.178.3', '2021-05-04', 1, '1620147926', '00:00:00'),
(502, '66.249.68.60', '2021-05-04', 1, '1620151024', '00:00:00'),
(503, '54.36.148.250', '2021-05-04', 1, '1620161551', '00:00:00'),
(504, '18.184.195.200', '2021-05-05', 1, '1620177060', '00:00:00'),
(505, '124.71.180.89', '2021-05-05', 3, '1620240799', '00:00:00'),
(506, '54.36.148.11', '2021-05-05', 1, '1620189067', '00:00:00'),
(507, '34.86.35.23', '2021-05-05', 1, '1620189884', '00:00:00'),
(508, '138.199.36.143', '2021-05-05', 1, '1620202708', '00:00:00'),
(509, '54.36.149.20', '2021-05-05', 1, '1620223058', '00:00:00'),
(510, '66.249.79.13', '2021-05-05', 1, '1620223950', '00:00:00'),
(511, '66.249.79.245', '2021-05-05', 1, '1620224729', '00:00:00'),
(512, '66.249.79.247', '2021-05-05', 2, '1620237375', '00:00:00'),
(513, '54.36.148.142', '2021-05-05', 1, '1620237027', '00:00:00'),
(514, '124.71.180.89', '2021-05-06', 4, '1620331479', '00:00:00'),
(515, '125.160.66.253', '2021-05-06', 2, '1620265103', '00:00:00'),
(516, '54.36.148.94', '2021-05-06', 1, '1620267046', '00:00:00'),
(517, '73.5.15.117', '2021-05-06', 1, '1620273141', '00:00:00'),
(518, '138.197.219.208', '2021-05-06', 1, '1620273306', '00:00:00'),
(519, '125.160.65.113', '2021-05-06', 1, '1620274947', '00:00:00'),
(520, '54.36.148.58', '2021-05-06', 1, '1620282034', '00:00:00'),
(521, '66.249.79.11', '2021-05-06', 4, '1620314563', '00:00:00'),
(522, '207.46.13.70', '2021-05-06', 1, '1620311006', '00:00:00'),
(523, '66.249.79.13', '2021-05-06', 1, '1620311722', '00:00:00'),
(524, '54.36.148.142', '2021-05-06', 1, '1620332259', '00:00:00'),
(525, '54.36.148.41', '2021-05-07', 1, '1620346493', '00:00:00'),
(526, '66.249.79.245', '2021-05-07', 1, '1620347209', '00:00:00'),
(527, '125.160.64.8', '2021-05-07', 9, '1620354618', '00:00:00'),
(528, '124.71.180.89', '2021-05-07', 4, '1620422716', '00:00:00'),
(529, '138.199.36.204', '2021-05-07', 1, '1620376456', '00:00:00'),
(530, '54.36.149.99', '2021-05-07', 1, '1620383208', '00:00:00'),
(531, '34.77.162.13', '2021-05-07', 1, '1620388715', '00:00:00'),
(532, '207.46.13.79', '2021-05-07', 1, '1620389625', '00:00:00'),
(533, '207.46.13.70', '2021-05-07', 1, '1620390957', '00:00:00'),
(534, '54.36.148.132', '2021-05-07', 1, '1620408391', '00:00:00'),
(535, '193.37.32.57', '2021-05-07', 2, '1620410779', '00:00:00'),
(536, '138.246.253.24', '2021-05-07', 1, '1620431594', '00:00:00'),
(537, '207.46.13.79', '2021-05-08', 2, '1620466371', '00:00:00'),
(538, '124.71.180.89', '2021-05-08', 4, '1620517467', '00:00:00'),
(539, '54.36.148.223', '2021-05-08', 1, '1620451069', '00:00:00'),
(540, '207.46.13.12', '2021-05-08', 1, '1620467142', '00:00:00'),
(541, '54.36.148.236', '2021-05-08', 1, '1620476754', '00:00:00'),
(542, '208.80.194.42', '2021-05-08', 1, '1620480905', '00:00:00'),
(543, '66.249.71.3', '2021-05-08', 1, '1620489193', '00:00:00'),
(544, '66.249.71.141', '2021-05-08', 2, '1620502150', '00:00:00'),
(545, '66.249.71.143', '2021-05-08', 1, '1620502718', '00:00:00'),
(546, '54.36.148.27', '2021-05-08', 1, '1620507238', '00:00:00'),
(547, '54.36.148.16', '2021-05-09', 1, '1620527766', '00:00:00'),
(548, '31.171.152.137', '2021-05-09', 1, '1620539356', '00:00:00'),
(549, '124.71.180.89', '2021-05-09', 3, '1620588359', '00:00:00'),
(550, '171.13.14.7', '2021-05-09', 1, '1620549327', '00:00:00'),
(551, '171.13.14.43', '2021-05-09', 1, '1620549349', '00:00:00'),
(552, '207.46.13.79', '2021-05-09', 1, '1620553083', '00:00:00'),
(553, '54.36.148.132', '2021-05-09', 1, '1620561100', '00:00:00'),
(554, '54.36.148.142', '2021-05-09', 1, '1620583293', '00:00:00'),
(555, '66.249.79.247', '2021-05-09', 1, '1620583477', '00:00:00'),
(556, '54.36.148.142', '2021-05-10', 1, '1620605582', '00:00:00'),
(557, '198.204.240.245', '2021-05-10', 1, '1620611082', '00:00:00'),
(558, '124.71.180.89', '2021-05-10', 4, '1620686963', '00:00:00'),
(559, '180.244.83.48', '2021-05-10', 5, '1620613611', '00:00:00'),
(560, '66.249.79.13', '2021-05-10', 4, '1620634517', '00:00:00'),
(561, '66.249.79.11', '2021-05-10', 6, '1620636767', '00:00:00'),
(562, '54.36.148.184', '2021-05-10', 1, '1620633968', '00:00:00'),
(563, '66.249.79.15', '2021-05-10', 2, '1620637903', '00:00:00'),
(564, '54.36.148.5', '2021-05-10', 1, '1620660600', '00:00:00'),
(565, '54.36.148.96', '2021-05-10', 1, '1620685221', '00:00:00'),
(566, '66.249.79.245', '2021-05-11', 1, '1620700259', '00:00:00'),
(567, '185.141.34.120', '2021-05-11', 1, '1620709902', '00:00:00'),
(568, '124.71.180.89', '2021-05-11', 3, '1620760451', '00:00:00'),
(569, '54.36.149.84', '2021-05-11', 1, '1620711415', '00:00:00'),
(570, '54.36.148.8', '2021-05-11', 1, '1620729111', '00:00:00'),
(571, '93.158.91.208', '2021-05-11', 1, '1620730391', '00:00:00'),
(572, '100.21.218.158', '2021-05-11', 1, '1620752946', '00:00:00'),
(573, '216.19.195.190', '2021-05-11', 1, '1620753988', '00:00:00'),
(574, '54.36.148.142', '2021-05-11', 1, '1620763086', '00:00:00'),
(575, '34.96.130.29', '2021-05-11', 1, '1620767803', '00:00:00'),
(576, '193.111.199.61', '2021-05-12', 1, '1620778916', '00:00:00'),
(577, '124.71.180.89', '2021-05-12', 3, '1620843836', '00:00:00'),
(578, '54.36.148.145', '2021-05-12', 1, '1620788829', '00:00:00'),
(579, '66.249.79.13', '2021-05-12', 2, '1620835025', '00:00:00'),
(580, '161.97.154.80', '2021-05-12', 10, '1620794062', '00:00:00'),
(581, '172.247.228.82', '2021-05-12', 1, '1620801263', '00:00:00'),
(582, '54.36.148.219', '2021-05-12', 1, '1620824132', '00:00:00'),
(583, '34.216.219.223', '2021-05-12', 1, '1620826738', '00:00:00'),
(584, '54.36.148.142', '2021-05-12', 1, '1620843315', '00:00:00'),
(585, '124.71.180.89', '2021-05-13', 3, '1620934080', '00:00:00'),
(586, '54.36.149.95', '2021-05-13', 1, '1620879568', '00:00:00'),
(587, '175.44.42.160', '2021-05-13', 1, '1620887718', '00:00:00'),
(588, '66.249.79.49', '2021-05-13', 2, '1620900661', '00:00:00'),
(589, '173.211.77.83', '2021-05-13', 1, '1620890007', '00:00:00'),
(590, '54.36.148.61', '2021-05-13', 1, '1620896918', '00:00:00'),
(591, '66.249.79.46', '2021-05-13', 1, '1620903493', '00:00:00'),
(592, '66.249.68.60', '2021-05-13', 1, '1620907462', '00:00:00'),
(593, '54.36.148.142', '2021-05-13', 1, '1620927104', '00:00:00'),
(594, '54.36.149.63', '2021-05-13', 1, '1620945998', '00:00:00'),
(595, '124.71.180.89', '2021-05-14', 3, '1621021389', '00:00:00'),
(596, '208.110.85.68', '2021-05-14', 1, '1620965502', '00:00:00'),
(597, '66.249.79.13', '2021-05-14', 1, '1620975060', '00:00:00'),
(598, '54.36.148.142', '2021-05-14', 3, '1621036441', '00:00:00'),
(599, '23.108.52.27', '2021-05-14', 1, '1620999136', '00:00:00'),
(600, '66.249.79.11', '2021-05-14', 1, '1621000566', '00:00:00'),
(601, '172.247.228.82', '2021-05-14', 2, '1621013814', '00:00:00'),
(602, '207.46.13.75', '2021-05-14', 2, '1621013705', '00:00:00'),
(603, '40.77.167.5', '2021-05-14', 3, '1621026886', '00:00:00'),
(604, '66.249.79.244', '2021-05-14', 1, '1621014982', '00:00:00'),
(605, '207.46.13.79', '2021-05-14', 2, '1621031688', '00:00:00'),
(606, '66.249.79.15', '2021-05-14', 1, '1621021234', '00:00:00'),
(607, '40.77.167.23', '2021-05-14', 2, '1621034030', '00:00:00'),
(608, '138.246.253.24', '2021-05-15', 1, '1621037617', '00:00:00'),
(609, '207.46.13.70', '2021-05-15', 1, '1621045536', '00:00:00'),
(610, '54.36.149.46', '2021-05-15', 1, '1621046182', '00:00:00'),
(611, '34.77.162.18', '2021-05-15', 1, '1621051200', '00:00:00'),
(612, '208.80.194.41', '2021-05-15', 1, '1621096507', '00:00:00'),
(613, '66.249.79.244', '2021-05-15', 1, '1621100195', '00:00:00'),
(614, '167.99.120.2', '2021-05-15', 1, '1621101956', '00:00:00'),
(615, '66.249.79.13', '2021-05-15', 1, '1621109837', '00:00:00'),
(616, '69.12.72.188', '2021-05-15', 1, '1621110812', '00:00:00'),
(617, '54.36.148.120', '2021-05-15', 1, '1621112355', '00:00:00'),
(618, '54.36.148.234', '2021-05-15', 1, '1621119617', '00:00:00'),
(619, '54.36.149.55', '2021-05-16', 1, '1621173355', '00:00:00'),
(620, '54.36.148.142', '2021-05-16', 1, '1621182884', '00:00:00'),
(621, '66.249.79.242', '2021-05-16', 1, '1621203625', '00:00:00'),
(622, '124.71.180.89', '2021-05-16', 1, '1621207832', '00:00:00'),
(623, '92.118.160.9', '2021-05-16', 1, '1621208447', '00:00:00'),
(624, '66.249.79.11', '2021-05-17', 1, '1621212516', '00:00:00'),
(625, '199.244.88.132', '2021-05-17', 2, '1621290109', '00:00:00'),
(626, '66.249.79.246', '2021-05-17', 3, '1621272684', '00:00:00'),
(627, '54.36.148.20', '2021-05-17', 1, '1621240121', '00:00:00'),
(628, '54.36.148.25', '2021-05-17', 1, '1621252046', '00:00:00'),
(629, '124.71.180.89', '2021-05-17', 1, '1621274695', '00:00:00'),
(630, '66.249.79.13', '2021-05-17', 1, '1621278979', '00:00:00'),
(631, '66.249.79.242', '2021-05-17', 1, '1621295131', '00:00:00'),
(632, '54.36.148.186', '2021-05-18', 1, '1621311281', '00:00:00'),
(633, '114.122.233.223', '2021-05-18', 8, '1621321442', '00:00:00'),
(634, '54.36.149.97', '2021-05-18', 1, '1621331319', '00:00:00'),
(635, '66.249.79.244', '2021-05-18', 1, '1621334136', '00:00:00'),
(636, '54.36.148.142', '2021-05-18', 1, '1621362408', '00:00:00'),
(637, '66.249.79.11', '2021-05-18', 2, '1621373866', '00:00:00'),
(638, '149.56.150.107', '2021-05-18', 12, '1621368096', '00:00:00'),
(639, '51.91.218.48', '2021-05-18', 1, '1621368110', '00:00:00'),
(640, '54.36.148.142', '2021-05-19', 1, '1621383431', '00:00:00'),
(641, '34.86.35.12', '2021-05-19', 1, '1621401706', '00:00:00'),
(642, '35.182.140.220', '2021-05-19', 1, '1621414139', '00:00:00'),
(643, '54.36.148.166', '2021-05-19', 1, '1621441435', '00:00:00'),
(644, '66.249.79.224', '2021-05-19', 2, '1621446017', '00:00:00'),
(645, '54.36.148.149', '2021-05-19', 1, '1621467466', '00:00:00'),
(646, '100.24.42.119', '2021-05-19', 1, '1621468609', '00:00:00'),
(647, '180.248.82.253', '2021-05-20', 10, '1621477781', '00:00:00'),
(648, '54.36.148.142', '2021-05-20', 1, '1621510056', '00:00:00'),
(649, '212.103.49.83', '2021-05-20', 2, '1621518260', '00:00:00'),
(650, '54.36.148.31', '2021-05-20', 1, '1621524094', '00:00:00'),
(651, '66.249.71.63', '2021-05-20', 1, '1621530665', '00:00:00'),
(652, '66.249.71.61', '2021-05-20', 1, '1621532354', '00:00:00'),
(653, '66.249.71.60', '2021-05-20', 2, '1621553331', '00:00:00'),
(654, '51.158.108.61', '2021-05-20', 1, '1621551436', '00:00:00'),
(655, '34.96.130.28', '2021-05-21', 1, '1621556124', '00:00:00'),
(656, '54.36.148.90', '2021-05-21', 1, '1621560572', '00:00:00'),
(657, '138.246.253.24', '2021-05-21', 1, '1621572510', '00:00:00'),
(658, '62.115.15.146', '2021-05-21', 1, '1621575493', '00:00:00'),
(659, '54.36.148.13', '2021-05-21', 1, '1621576620', '00:00:00'),
(660, '66.249.75.153', '2021-05-21', 1, '1621581208', '00:00:00'),
(661, '66.249.71.60', '2021-05-21', 2, '1621607519', '00:00:00'),
(662, '34.228.27.145', '2021-05-21', 1, '1621588916', '00:00:00'),
(663, '66.249.71.33', '2021-05-21', 1, '1621598337', '00:00:00'),
(664, '54.36.149.25', '2021-05-21', 1, '1621610711', '00:00:00'),
(665, '159.253.31.111', '2021-05-21', 1, '1621610903', '00:00:00'),
(666, '13.65.195.198', '2021-05-21', 2, '1621612799', '00:00:00'),
(667, '172.247.250.146', '2021-05-21', 1, '1621614023', '00:00:00'),
(668, '54.36.148.100', '2021-05-21', 1, '1621622907', '00:00:00'),
(669, '40.77.167.69', '2021-05-21', 1, '1621632595', '00:00:00'),
(670, '217.12.221.2', '2021-05-22', 1, '1621646156', '00:00:00'),
(671, '66.249.71.60', '2021-05-22', 2, '1621665525', '00:00:00'),
(672, '66.249.71.33', '2021-05-22', 1, '1621653613', '00:00:00'),
(673, '172.247.250.146', '2021-05-22', 1, '1621655424', '00:00:00'),
(674, '54.36.148.142', '2021-05-22', 2, '1621708940', '00:00:00'),
(675, '18.231.94.162', '2021-05-22', 1, '1621661561', '00:00:00'),
(676, '223.220.175.244', '2021-05-22', 1, '1621665577', '00:00:00'),
(677, '54.36.149.0', '2021-05-22', 1, '1621675088', '00:00:00'),
(678, '34.219.214.205', '2021-05-22', 1, '1621686517', '00:00:00'),
(679, '208.80.194.42', '2021-05-22', 1, '1621713640', '00:00:00'),
(680, '157.55.39.135', '2021-05-22', 1, '1621718760', '00:00:00'),
(681, '54.36.148.241', '2021-05-22', 1, '1621727675', '00:00:00'),
(682, '89.22.101.69', '2021-05-23', 1, '1621729587', '00:00:00'),
(683, '157.55.39.113', '2021-05-23', 1, '1621733822', '00:00:00'),
(684, '157.55.39.131', '2021-05-23', 1, '1621753476', '00:00:00'),
(685, '54.36.148.142', '2021-05-23', 1, '1621754168', '00:00:00'),
(686, '157.55.39.117', '2021-05-23', 1, '1621776958', '00:00:00'),
(687, '54.36.148.167', '2021-05-23', 1, '1621778423', '00:00:00'),
(688, '66.249.71.61', '2021-05-23', 1, '1621789818', '00:00:00'),
(689, '66.249.71.59', '2021-05-23', 1, '1621791922', '00:00:00'),
(690, '40.77.167.76', '2021-05-24', 1, '1621817235', '00:00:00'),
(691, '40.77.167.24', '2021-05-24', 1, '1621819851', '00:00:00'),
(692, '54.36.148.142', '2021-05-24', 2, '1621844130', '00:00:00'),
(693, '66.249.79.27', '2021-05-24', 1, '1621827341', '00:00:00'),
(694, '54.36.148.170', '2021-05-24', 1, '1621882507', '00:00:00'),
(695, '182.1.206.139', '2021-05-25', 1, '1621904933', '00:00:00'),
(696, '54.36.148.245', '2021-05-25', 1, '1621905534', '00:00:00'),
(697, '157.55.39.131', '2021-05-25', 1, '1621938639', '00:00:00'),
(698, '54.36.148.142', '2021-05-25', 1, '1621943390', '00:00:00'),
(699, '54.36.148.30', '2021-05-25', 1, '1621962474', '00:00:00'),
(700, '205.169.39.115', '2021-05-25', 2, '1621973188', '00:00:00'),
(701, '205.169.39.80', '2021-05-25', 2, '1621974287', '00:00:00'),
(702, '34.222.160.70', '2021-05-25', 1, '1621981669', '00:00:00'),
(703, '107.150.52.196', '2021-05-25', 1, '1621982471', '00:00:00'),
(704, '54.36.148.142', '2021-05-26', 1, '1622000555', '00:00:00'),
(705, '65.154.226.165', '2021-05-26', 1, '1622010519', '00:00:00'),
(706, '54.36.148.97', '2021-05-26', 1, '1622018973', '00:00:00'),
(707, '157.55.39.131', '2021-05-26', 1, '1622024527', '00:00:00'),
(708, '66.249.79.251', '2021-05-26', 1, '1622045345', '00:00:00'),
(709, '66.249.79.29', '2021-05-26', 1, '1622056163', '00:00:00'),
(710, '54.36.149.39', '2021-05-26', 1, '1622072204', '00:00:00'),
(711, '125.160.66.34', '2021-05-27', 7, '1622078752', '00:00:00'),
(712, '125.160.64.153', '2021-05-27', 4, '1622079295', '00:00:00'),
(713, '180.248.75.86', '2021-05-27', 1, '1622079338', '00:00:00'),
(714, '66.249.79.253', '2021-05-27', 1, '1622081329', '00:00:00'),
(715, '66.249.79.225', '2021-05-27', 1, '1622082240', '00:00:00'),
(716, '40.77.167.30', '2021-05-27', 1, '1622088586', '00:00:00'),
(717, '125.160.67.75', '2021-05-27', 1, '1622091625', '00:00:00'),
(718, '54.36.148.142', '2021-05-27', 2, '1622146276', '00:00:00'),
(719, '157.90.116.154', '2021-05-27', 1, '1622153932', '00:00:00'),
(720, '125.160.67.75', '2021-05-28', 5, '1622171554', '00:00:00'),
(721, '54.36.148.202', '2021-05-28', 1, '1622175775', '00:00:00'),
(722, '138.246.253.24', '2021-05-28', 1, '1622183345', '00:00:00'),
(723, '66.249.79.27', '2021-05-28', 1, '1622191217', '00:00:00'),
(724, '36.73.98.45', '2021-05-28', 3, '1622192602', '00:00:00'),
(725, '67.225.226.82', '2021-05-28', 1, '1622206098', '00:00:00'),
(726, '66.249.79.253', '2021-05-28', 1, '1622208920', '00:00:00'),
(727, '54.36.148.142', '2021-05-28', 1, '1622232672', '00:00:00'),
(728, '40.77.167.76', '2021-05-28', 1, '1622245951', '00:00:00'),
(729, '40.77.167.69', '2021-05-29', 1, '1622247639', '00:00:00'),
(730, '54.36.148.84', '2021-05-29', 1, '1622263960', '00:00:00'),
(731, '36.73.98.45', '2021-05-29', 1, '1622268661', '00:00:00'),
(732, '::1', '2021-05-29', 2, '1622269567', '00:00:00');

-- --------------------------------------------------------

--
-- Table structure for table `teknis`
--

CREATE TABLE `teknis` (
  `id_teknis` int(11) NOT NULL,
  `nama` varchar(400) NOT NULL,
  `gambar` varchar(350) NOT NULL,
  `deskripsi` text DEFAULT NULL,
  `tgl` date DEFAULT NULL,
  `terunduh` int(11) DEFAULT 0,
  `dilihat` int(11) DEFAULT 0,
  `slug` varchar(600) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `teknis`
--

INSERT INTO `teknis` (`id_teknis`, `nama`, `gambar`, `deskripsi`, `tgl`, `terunduh`, `dilihat`, `slug`) VALUES
(4, '1. Perencanaan Teknis Peningkatan Jalan Lingk. Desa Salimbatu Kec. Tanjung Palas Tengah05272021', '1-perencanaan-teknis-peningkatan-jalan-lingk-desa-salimbatu-kec-tanjung-palas-tengah05272021-78.pdf', '', '2021-05-27', 0, 0, '1-perencanaan-teknis-peningkatan-jalan-lingk-desa-salimbatu-kec-tanjung-palas-tengah05272021'),
(5, 'DD1 2020 TJG PALAS TENGAH', 'dd1-2020-tjg-palas-tengah-56.pdf', '', '2021-05-27', 0, 0, 'dd1-2020-tjg-palas-tengah');

-- --------------------------------------------------------

--
-- Table structure for table `tempat_wisata`
--

CREATE TABLE `tempat_wisata` (
  `id_tempat_wisata` int(11) NOT NULL,
  `id_lokasi` int(11) NOT NULL,
  `judul` varchar(300) NOT NULL,
  `judul_seo` varchar(400) NOT NULL,
  `deskripsi` text DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tempat_wisata`
--

INSERT INTO `tempat_wisata` (`id_tempat_wisata`, `id_lokasi`, `judul`, `judul_seo`, `deskripsi`) VALUES
(1, 1, 'Candi Borobudur', 'candi-borobudur', NULL),
(2, 2, 'Candi Prambanan', 'candi-prambanan', NULL),
(3, 1, 'Candi Mendut', 'candi-mendut', NULL),
(4, 1, 'Candi Pawon', 'candi-pawon', NULL),
(5, 1, 'Bukit Rhema', 'bukit-rhema', NULL),
(6, 1, 'Rumah Kamera', 'rumah-kamera', NULL),
(7, 2, 'Candi Ijo/Sunset', 'candi-ijosunset', NULL),
(8, 2, 'Candi Ratu Boko/Sunset', 'candi-ratu-bokosunset', NULL),
(9, 3, 'Gunung Api Purba', 'gunung-api-purba', NULL),
(10, 3, 'Embung Nglanggeran', 'embung-nglanggeran', NULL),
(11, 4, 'Pantai Parangkusumo', 'pantai-parangkusumo', NULL),
(12, 4, 'Kebun Buah Mangunan', 'kebun-buah-mangunan', NULL);

-- --------------------------------------------------------

--
-- Table structure for table `testimoni`
--

CREATE TABLE `testimoni` (
  `id_testimoni` int(11) NOT NULL,
  `nama` varchar(400) NOT NULL,
  `gambar` varchar(350) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `testimoni`
--

INSERT INTO `testimoni` (`id_testimoni`, `nama`, `gambar`) VALUES
(6, 'Testi', 'testi-44.jpeg'),
(7, 'Testi', 'testi-1.jpeg'),
(8, 'Testi', 'testi-76.jpeg'),
(9, 'Testi', 'testi-78.jpeg'),
(10, 'Testi', 'testi-95.jpeg'),
(11, 'Testi', 'testi-16.jpeg'),
(12, 'Testi', 'testi-2.jpeg'),
(13, 'Testi', 'testi-45.jpeg');

-- --------------------------------------------------------

--
-- Table structure for table `theme`
--

CREATE TABLE `theme` (
  `id` int(11) NOT NULL,
  `name` varchar(400) NOT NULL,
  `code` varchar(400) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `theme`
--

INSERT INTO `theme` (`id`, `name`, `code`) VALUES
(1, 'navbarbg', 'skin4'),
(2, 'logobg', 'skin5'),
(3, 'sidebarbg', 'skin5');

-- --------------------------------------------------------

--
-- Table structure for table `tour_kategori`
--

CREATE TABLE `tour_kategori` (
  `id_tour_kategori` int(11) NOT NULL,
  `judul` varchar(300) NOT NULL,
  `judul_seo` varchar(400) NOT NULL,
  `deskripsi` text DEFAULT NULL,
  `pien` varchar(400) DEFAULT NULL,
  `gambar` varchar(600) DEFAULT NULL,
  `harga_mulai` varchar(400) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tour_kategori`
--

INSERT INTO `tour_kategori` (`id_tour_kategori`, `judul`, `judul_seo`, `deskripsi`, `pien`, `gambar`, `harga_mulai`) VALUES
(1, 'Paket Wisata Jogja 1 Hari', 'paket-wisata-jogja-1-hari', 'Siapa yang tidak ingin ke Jogja? Kota yang terbilang nyaman dan banyak pariwisata membuat kota ini selalu masuk dalam list banyak orang. Tidak hanya untuk turis lokal saja, namun sudah terkenal hingga ke mancanegara', 'tour-jogja', 'paket-wisata-jogja-1-hari-14.jpeg', '245.000'),
(2, 'Paket Wisata 2 Hari 1 Malam', 'paket-wisata-2-hari-1-malam', '', 'tour-jogja', 'wisata-2-hari-1-malam-73.jpeg', '550.000'),
(3, 'Paket Wisata 3 Hari 2 Malam', 'paket-wisata-3-hari-2-malam', '', 'tour-jogja', 'wisata-3-hari-2-malam-21.jpeg', '890.000'),
(4, 'Paket Wisata 4 Hari 3 Malam', 'paket-wisata-4-hari-3-malam', '', 'tour-jogja', 'paket-wisata-4-hari-3-malam-32.jpeg', '1.435.000'),
(5, 'Paket Honeymoon Jogja', 'paket-honeymoon-jogja', 'Wisata 5 Hari 4 Malam', 'tour-jogja', 'paket-honeymoon-jogja-67.jpeg', '2.400.000'),
(8, 'SOLO', 'solo', 'Berkunjung ke berbagai destinasi membuat Anda akan lebih asyik menikmati secara beramai-ramai, karena perjalanan akan lebih terasa dan lebih seru. Apalagi berkunjung ke Kota Solo, Anda akan menikmati berbagai destinasi wisata yang sangat memukau. Ajak rombongan dan rasakan sensasi liburan yang luar biasa.', 'tour-lain', 'solo-11.jpeg', '400.000'),
(9, 'BROMO', 'bromo', NULL, 'tour-lain', NULL, NULL),
(10, 'SEMARANG', 'semarang', NULL, 'tour-lain', NULL, NULL),
(11, 'BANDUNG', 'bandung', NULL, 'tour-lain', NULL, NULL),
(12, 'MALANG', 'malang', NULL, 'tour-lain', NULL, NULL),
(13, 'DIENG', 'dieng', NULL, 'tour-lain', NULL, NULL),
(14, 'BALI', 'bali', NULL, 'tour-lain', NULL, NULL),
(15, 'LOMBOK', 'lombok', NULL, 'tour-lain', NULL, NULL),
(887, 'Paket Gathering Jogja', 'paket-gathering-jogja', 'bbb', 'tour-jogja', 'paket-gathering-jogja-70.jpeg', '1.040.000');

-- --------------------------------------------------------

--
-- Table structure for table `transportasi`
--

CREATE TABLE `transportasi` (
  `id_transportasi` int(5) NOT NULL,
  `judul` varchar(100) DEFAULT NULL,
  `deskripsi` text DEFAULT NULL,
  `gambar` varchar(120) DEFAULT NULL,
  `gambar_mobile` varchar(400) NOT NULL,
  `url` varchar(150) DEFAULT NULL,
  `harga_mulai` varchar(400) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `transportasi`
--

INSERT INTO `transportasi` (`id_transportasi`, `judul`, `deskripsi`, `gambar`, `gambar_mobile`, `url`, `harga_mulai`) VALUES
(1, '100% BERGARANSI', '<p>Kami memberikan garansi kepuasan &nbsp;kepada setiap klien dengan garansi 100 % uang kembali apabila produk kami tidak sesuai.</p>\r\n', '100-bergaransi-74.png', '', 'daily-rent-service', ''),
(2, 'HARGA BERSAING', '<p>Kami berikan harga yang pantas untuk setiap produk berkualitas tanpa ada penurunan kualitas bahan.</p>\r\n', 'harga-bersaing-52.png', '', 'transfer-in-out', ''),
(3, 'TEAM PROFESIONAL', '<p>Setiap produk yang kami kerjakan dikerjakan oleh para ahli yang sudah berpengalaman dibidangnya</p>\r\n', 'team-profesional-78.png', '', 'wedding-car', ''),
(4, 'PRODUK BERKUALITAS', '<p>Setiap produk kami menggunakan bahan berkualitas, melalui proses dan pengawasan ketat demi menghasilkan produk berkualitas</p>\r\n', 'produk-berkualitas-21.png', '', NULL, ''),
(5, 'TEPAT WAKTU', '<p>Kami memiliki puluhan tenaga penjahit berpengalaman dengan kapasitas produksi lebih dari 1000 pcs perbulan</p>\r\n', 'tepat-waktu-7.png', '', NULL, ''),
(6, 'KONVEKSI TERPERCAYA', '<p>Kami berdiri sejak 2010 dan telah melayani lebih dari 100 klien yang tersebar di seluruh indonesia</p>\r\n', 'konveksi-terpercaya-90.png', '', NULL, '');

-- --------------------------------------------------------

--
-- Table structure for table `z`
--

CREATE TABLE `z` (
  `id` int(5) NOT NULL,
  `z` text DEFAULT NULL,
  `d` datetime NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `z`
--

INSERT INTO `z` (`id`, `z`, `d`) VALUES
(1, '', '2017-11-14 19:41:54');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `admin`
--
ALTER TABLE `admin`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `anggota`
--
ALTER TABLE `anggota`
  ADD PRIMARY KEY (`id_anggota`);

--
-- Indexes for table `artikel`
--
ALTER TABLE `artikel`
  ADD PRIMARY KEY (`id_artikel`);

--
-- Indexes for table `bahan`
--
ALTER TABLE `bahan`
  ADD PRIMARY KEY (`id_bahan`);

--
-- Indexes for table `banner`
--
ALTER TABLE `banner`
  ADD PRIMARY KEY (`id_banner`);

--
-- Indexes for table `client`
--
ALTER TABLE `client`
  ADD PRIMARY KEY (`id_client`);

--
-- Indexes for table `contact`
--
ALTER TABLE `contact`
  ADD PRIMARY KEY (`id_contact`);

--
-- Indexes for table `email`
--
ALTER TABLE `email`
  ADD PRIMARY KEY (`id_email`);

--
-- Indexes for table `faq`
--
ALTER TABLE `faq`
  ADD PRIMARY KEY (`id_faq`);

--
-- Indexes for table `foto`
--
ALTER TABLE `foto`
  ADD PRIMARY KEY (`id_foto`);

--
-- Indexes for table `gallery`
--
ALTER TABLE `gallery`
  ADD PRIMARY KEY (`id_gallery`);

--
-- Indexes for table `gallery_foto`
--
ALTER TABLE `gallery_foto`
  ADD PRIMARY KEY (`id_gallery`);

--
-- Indexes for table `gallery_produk`
--
ALTER TABLE `gallery_produk`
  ADD PRIMARY KEY (`id_gallery`);

--
-- Indexes for table `gallery_referensi`
--
ALTER TABLE `gallery_referensi`
  ADD PRIMARY KEY (`id_gallery`);

--
-- Indexes for table `icon`
--
ALTER TABLE `icon`
  ADD PRIMARY KEY (`id_icon`);

--
-- Indexes for table `kategorix`
--
ALTER TABLE `kategorix`
  ADD PRIMARY KEY (`id_kategori`);

--
-- Indexes for table `kegiatan`
--
ALTER TABLE `kegiatan`
  ADD PRIMARY KEY (`id_kegiatan`);

--
-- Indexes for table `keunggulan`
--
ALTER TABLE `keunggulan`
  ADD PRIMARY KEY (`id_keunggulan`);

--
-- Indexes for table `keuntungan`
--
ALTER TABLE `keuntungan`
  ADD PRIMARY KEY (`id_keuntungan`);

--
-- Indexes for table `listproject`
--
ALTER TABLE `listproject`
  ADD PRIMARY KEY (`id_listproject`);

--
-- Indexes for table `lokasi`
--
ALTER TABLE `lokasi`
  ADD PRIMARY KEY (`id_lokasi`);

--
-- Indexes for table `material`
--
ALTER TABLE `material`
  ADD PRIMARY KEY (`id_material`);

--
-- Indexes for table `modul`
--
ALTER TABLE `modul`
  ADD PRIMARY KEY (`id_modul`);

--
-- Indexes for table `page`
--
ALTER TABLE `page`
  ADD PRIMARY KEY (`id_page`);

--
-- Indexes for table `paket`
--
ALTER TABLE `paket`
  ADD PRIMARY KEY (`id_paket`);

--
-- Indexes for table `portofolio`
--
ALTER TABLE `portofolio`
  ADD PRIMARY KEY (`id_portofolio`);

--
-- Indexes for table `produk`
--
ALTER TABLE `produk`
  ADD PRIMARY KEY (`id_produk`);

--
-- Indexes for table `produk_kategori`
--
ALTER TABLE `produk_kategori`
  ADD PRIMARY KEY (`id_produk_kategori`);

--
-- Indexes for table `quotation`
--
ALTER TABLE `quotation`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `quotation_detail`
--
ALTER TABLE `quotation_detail`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `referensi`
--
ALTER TABLE `referensi`
  ADD PRIMARY KEY (`id_produk`);

--
-- Indexes for table `referensi_kategori`
--
ALTER TABLE `referensi_kategori`
  ADD PRIMARY KEY (`id_referensi_kategori`);

--
-- Indexes for table `rekening`
--
ALTER TABLE `rekening`
  ADD PRIMARY KEY (`id_rekening`);

--
-- Indexes for table `selor`
--
ALTER TABLE `selor`
  ADD PRIMARY KEY (`id_selor`);

--
-- Indexes for table `sizechart`
--
ALTER TABLE `sizechart`
  ADD PRIMARY KEY (`id_sizechart`);

--
-- Indexes for table `slider`
--
ALTER TABLE `slider`
  ADD PRIMARY KEY (`id_slider`);

--
-- Indexes for table `social_media`
--
ALTER TABLE `social_media`
  ADD PRIMARY KEY (`id_social_media`);

--
-- Indexes for table `statistik`
--
ALTER TABLE `statistik`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `teknis`
--
ALTER TABLE `teknis`
  ADD PRIMARY KEY (`id_teknis`);

--
-- Indexes for table `tempat_wisata`
--
ALTER TABLE `tempat_wisata`
  ADD PRIMARY KEY (`id_tempat_wisata`);

--
-- Indexes for table `testimoni`
--
ALTER TABLE `testimoni`
  ADD PRIMARY KEY (`id_testimoni`);

--
-- Indexes for table `theme`
--
ALTER TABLE `theme`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `tour_kategori`
--
ALTER TABLE `tour_kategori`
  ADD PRIMARY KEY (`id_tour_kategori`);

--
-- Indexes for table `transportasi`
--
ALTER TABLE `transportasi`
  ADD PRIMARY KEY (`id_transportasi`);

--
-- Indexes for table `z`
--
ALTER TABLE `z`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `anggota`
--
ALTER TABLE `anggota`
  MODIFY `id_anggota` int(5) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `artikel`
--
ALTER TABLE `artikel`
  MODIFY `id_artikel` int(5) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=90;

--
-- AUTO_INCREMENT for table `bahan`
--
ALTER TABLE `bahan`
  MODIFY `id_bahan` int(5) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT for table `banner`
--
ALTER TABLE `banner`
  MODIFY `id_banner` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `client`
--
ALTER TABLE `client`
  MODIFY `id_client` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=18;

--
-- AUTO_INCREMENT for table `contact`
--
ALTER TABLE `contact`
  MODIFY `id_contact` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- AUTO_INCREMENT for table `email`
--
ALTER TABLE `email`
  MODIFY `id_email` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `faq`
--
ALTER TABLE `faq`
  MODIFY `id_faq` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `foto`
--
ALTER TABLE `foto`
  MODIFY `id_foto` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=114;

--
-- AUTO_INCREMENT for table `gallery`
--
ALTER TABLE `gallery`
  MODIFY `id_gallery` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=52;

--
-- AUTO_INCREMENT for table `gallery_foto`
--
ALTER TABLE `gallery_foto`
  MODIFY `id_gallery` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=72;

--
-- AUTO_INCREMENT for table `gallery_produk`
--
ALTER TABLE `gallery_produk`
  MODIFY `id_gallery` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=42;

--
-- AUTO_INCREMENT for table `gallery_referensi`
--
ALTER TABLE `gallery_referensi`
  MODIFY `id_gallery` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `icon`
--
ALTER TABLE `icon`
  MODIFY `id_icon` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- AUTO_INCREMENT for table `kategorix`
--
ALTER TABLE `kategorix`
  MODIFY `id_kategori` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=25;

--
-- AUTO_INCREMENT for table `kegiatan`
--
ALTER TABLE `kegiatan`
  MODIFY `id_kegiatan` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `keunggulan`
--
ALTER TABLE `keunggulan`
  MODIFY `id_keunggulan` int(5) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT for table `keuntungan`
--
ALTER TABLE `keuntungan`
  MODIFY `id_keuntungan` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT for table `listproject`
--
ALTER TABLE `listproject`
  MODIFY `id_listproject` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT for table `lokasi`
--
ALTER TABLE `lokasi`
  MODIFY `id_lokasi` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `material`
--
ALTER TABLE `material`
  MODIFY `id_material` int(5) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `modul`
--
ALTER TABLE `modul`
  MODIFY `id_modul` int(5) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=86;

--
-- AUTO_INCREMENT for table `page`
--
ALTER TABLE `page`
  MODIFY `id_page` int(5) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2227;

--
-- AUTO_INCREMENT for table `paket`
--
ALTER TABLE `paket`
  MODIFY `id_paket` int(5) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `portofolio`
--
ALTER TABLE `portofolio`
  MODIFY `id_portofolio` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `produk`
--
ALTER TABLE `produk`
  MODIFY `id_produk` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=18;

--
-- AUTO_INCREMENT for table `produk_kategori`
--
ALTER TABLE `produk_kategori`
  MODIFY `id_produk_kategori` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=20;

--
-- AUTO_INCREMENT for table `quotation`
--
ALTER TABLE `quotation`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `quotation_detail`
--
ALTER TABLE `quotation_detail`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT for table `referensi`
--
ALTER TABLE `referensi`
  MODIFY `id_produk` int(5) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=19;

--
-- AUTO_INCREMENT for table `referensi_kategori`
--
ALTER TABLE `referensi_kategori`
  MODIFY `id_referensi_kategori` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `rekening`
--
ALTER TABLE `rekening`
  MODIFY `id_rekening` int(5) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `selor`
--
ALTER TABLE `selor`
  MODIFY `id_selor` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=22;

--
-- AUTO_INCREMENT for table `sizechart`
--
ALTER TABLE `sizechart`
  MODIFY `id_sizechart` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=19;

--
-- AUTO_INCREMENT for table `slider`
--
ALTER TABLE `slider`
  MODIFY `id_slider` int(5) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=71;

--
-- AUTO_INCREMENT for table `social_media`
--
ALTER TABLE `social_media`
  MODIFY `id_social_media` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `statistik`
--
ALTER TABLE `statistik`
  MODIFY `id` int(5) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=733;

--
-- AUTO_INCREMENT for table `teknis`
--
ALTER TABLE `teknis`
  MODIFY `id_teknis` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `tempat_wisata`
--
ALTER TABLE `tempat_wisata`
  MODIFY `id_tempat_wisata` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;

--
-- AUTO_INCREMENT for table `testimoni`
--
ALTER TABLE `testimoni`
  MODIFY `id_testimoni` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=14;

--
-- AUTO_INCREMENT for table `theme`
--
ALTER TABLE `theme`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `tour_kategori`
--
ALTER TABLE `tour_kategori`
  MODIFY `id_tour_kategori` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=888;

--
-- AUTO_INCREMENT for table `transportasi`
--
ALTER TABLE `transportasi`
  MODIFY `id_transportasi` int(5) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `z`
--
ALTER TABLE `z`
  MODIFY `id` int(5) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
