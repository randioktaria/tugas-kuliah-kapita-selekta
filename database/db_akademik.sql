-- phpMyAdmin SQL Dump
-- version 3.3.9
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: Jul 05, 2018 at 06:24 PM
-- Server version: 5.5.8
-- PHP Version: 5.3.5

SET SQL_MODE="NO_AUTO_VALUE_ON_ZERO";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `db_akademik`
--

-- --------------------------------------------------------

--
-- Table structure for table `admin`
--

CREATE TABLE IF NOT EXISTS `admin` (
  `idadmin` int(2) NOT NULL AUTO_INCREMENT,
  `username` varchar(15) NOT NULL,
  `password` varchar(100) NOT NULL,
  `namalengkap` varchar(25) NOT NULL,
  PRIMARY KEY (`idadmin`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=2 ;

--
-- Dumping data for table `admin`
--

INSERT INTO `admin` (`idadmin`, `username`, `password`, `namalengkap`) VALUES
(1, 'admin', 'admin', 'Randi Oktaria Rinanda');

-- --------------------------------------------------------

--
-- Table structure for table `berita`
--

CREATE TABLE IF NOT EXISTS `berita` (
  `idberita` int(11) NOT NULL AUTO_INCREMENT,
  `judulberita` text NOT NULL,
  `header` text NOT NULL,
  `isiberita` text NOT NULL,
  `foto` text NOT NULL,
  `tglpost` datetime NOT NULL DEFAULT '0000-00-00 00:00:00',
  PRIMARY KEY (`idberita`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=6 ;

--
-- Dumping data for table `berita`
--

INSERT INTO `berita` (`idberita`, `judulberita`, `header`, `isiberita`, `foto`, `tglpost`) VALUES
(1, 'UPI YPTK PADANG FOKUS CERDASKAN ANAK BANGSA', 'Padang, 13 April 2018 Universitas Putra Indonesia YPTK Padang menggelar acara wisuda periode II tahun akademik 2017-2018. Acara wisuda dilaksanakan 2 hari dalam sidang terbuka senat UPI YPTK Padang, Selasa 10 April 2018 dan Rabu 11 April 2018 di UPI<br />\r\n', 'Padang, 13 April 2018 Universitas Putra Indonesia YPTK Padang menggelar acara wisuda periode II tahun akademik 2017-2018. Acara wisuda dilaksanakan 2 hari dalam sidang terbuka senat UPI YPTK Padang, Selasa 10 April 2018 dan Rabu 11 April 2018 di UPI Convention Center, kampus Universitas Putra Indonesia YPTK Padang. Sidang senat langsung dipimpin oleh Rektor Universitas Putra Indonesia YPTK Padang, Prof. Dr. H Sarjon Desit, S. Kom, M. Sc. Universitas Putra Indonesia “YPTK” meluluskan 1,287 orang lulusan kepada masyarakat, bangsa dan negara. Ini berarti, sampai saat ini, Universitas Putra Indonesia “YPTK” telah meluluskan 39.546 orang alumni yang saat ini telah bekerja di berbagai instansi perusahaan baik dalam maupun luar negeri. Rektor juga menyampaikan kepada seluruh wisudawan diharapkan dapat terus menjaga 12 prinsip dasar dan karakter yang telah diterapkan selama mengikuti perkuliahan di kampus UPI YPTK Padang, kampus IT yang berbasis spiritual. Selanjutnya, Ketua Yayasan Perguruan Tinggi Komputer Padang menyampaikan selamat kepada seluruh wisudawan dan wisudawati yang telah menyelesaikan proses pembelajaran tepat pada waktunya. Herman Nawas menyampaikan bahwa kesuksesan para wisudawan ini merupakan pertolongan dari Allah SWT dan ridho dari orang tua. Pada kesempatan tersebut H, Herman Nawas menyampaikan bahwa untuk mencapai kesuksesan ada 4 hal yang harus dilakukan oleh wisudawan. Pertama keyakinan atas pertolongan Allah SWT, kedua semangat yang mengebu-gebu, ketiga Fokus dan terakhir Patuh. Inshaallah dengan 4 hal ini wisudawan/wati dapat mencapai kesuksesan dunia dan akhirat. Selanjutnya, Prof. Herry Koordinator Kopertis Wilayah X menyampaikan selamat dan sukses kepada seluruh wisudawan/wati serta apresiasi atas prestasi dan perkembangan UPI YPTK Padang yang kian pesat. Prof Herry sebagai perwakilan Kemenristekdikti menyampaikan ucapan terimakasih atas peranan UPI YPTK Padang dalam mencerdaskan anak bangsa semoga kedepannya UPI YPTK semakin berkembang dan bisa bersaing secara global. Pada kesempatan ini juga dilaksanakan penandatanganan MOU antara UPI YPTK dengan IMA (Indonesia Marketing Association) Chapter Padang tentang kerjasama dalam pelatihan marketing dan magang bagi mahasiswa UPI YPTK Padang. Penandatanganan dilakukan langsung oleh Rektor UPI YPTK Padang dan Darmawi Ketua IMA chapter Padang.', 'UPI-YPTK-13042018-18715.jpg', '2018-07-04 21:59:47'),
(2, 'Mahasiswa berprestasi UPI YPTK Padang Berangkat studi komparatif ke Malaysia dan Singapura', 'Padang, 12 Maret 2018. Sejumlah mahasiswa beserta studi komparatif dilepas secara resmi oleh ketua Yayasan Perguruan Tinggi Komputer Padang H. Herman Nawas selesai salat subuh berjamaah di Masjid Rahmatan lil alamin UPI YPTK Padang. Dalam sambutannya H ', 'Padang, 12 Maret 2018. Sejumlah mahasiswa beserta studi komparatif dilepas secara resmi oleh ketua Yayasan Perguruan Tinggi Komputer Padang H. Herman Nawas selesai salat subuh berjamaah di Masjid Rahmatan lil alamin UPI YPTK Padang. Dalam sambutannya H Herman Nawas menyampaikan kepada seluruh orang tua mahasiswa, mahasiswa yang diberangkatkan pada tahun ini merupakan mahasiswa yang berprestasi memperoleh nilai terbaik secara berturut-turut selama 2 semester. Disamping dibebaskan dari biaya uang kuliah mereka juga diberangkatkan selama satu minggu ke Malaysia dan Singapura untuk mengunjungi beberapa universitas yang sudah bekerja sama dengan UPI YPTK Padang. Seluruh biaya akomodasi transportasi dan pembuatan paspor ditanggung penuh oleh Yayasan Perguruan Tinggi Komputer Padang. Hal ini merupakan wujud reward yang diberikan oleh Yayasan Perguruan Tinggi Komputer Padang kepada mahasiswa berprestasi, diharapkan dapat memberikan wawasan baru, semangat dalam menyelesaikan pendidikan, serta dapat membuat inovasi-inovasi baru dalam pengembangan teknologi dan riset riset terkini. Universitas Putra Indonesia YPTK Padang sudah bekerja sama dengan beberapa universitas terbaik di Malaysia dan Singapura diantaranya, Universiti kebangsaan Malaysia, Universiti teknologi Mara Melaka Malaysia, Universiti Malaya, Universiti Teknologi Malaysia, Universiti Kuala Lumpur, dan beberapa Universitas lainnya. Rombongan study comparative tahun 2018 ini dipimpin langsung oleh Rektor Universitas Putra Indonesia YPTK Padang Prof. Dr. Sarjon Defit. Disamping itu diikuti oleh Dekan Fakultas Ilmu komputer Dr. Julius Santoni, Dekan Fakultas Ilmu pendidikan, Jhon Very, MM. Serta dosen dari berbagai fakultas, tim dokter klinik Yayasan Perguruan Tinggi Komputer Padang, dan karyawan. Kunjungan studi komparatif yang berlangsung selama satu minggu akan mengunjungi beberapa universitas universitas di Malaysia dan Singapura. Kegiatan tersebut berupa pertunjukan kebudayaan antara Indonesia dan Malaysia, mahasiswa UPI YPTK Padang menampilkan beberapa tarian tradisional seperti tari pasambahan dan tari piring diatas kaca. Selanjutnya dalam rangkaian kunjungan studi komparatif jika akan digelar simposium ilmu komputer dengan menghadirkan 2 orang narasumber dari mahasiswa UPI YPTK Padang, yang memaparkan kajian terkini ilmu komputer di masing-masing negara mereka akan memaparkan materi satu panggung dengan mahasiswa UITM Melaka. Rombongan akan melawat ke KLCC, pusat pemerintahan negara Malaysia di Putrajaya, serta beberapa objek lainnya di Malaysia. Sebelum bertolak ke Singapura rombongan mengunjungi Universiti Teknologi Malaysia di Johor Baru, dengan jadwal lawatan University mahasiswa UPI YPTK Padang akan mengunjungi dan melihat berbagai fasilitas yang terdapat di UTM Johor Baru. Mahasiswa studi komparatif yang berangkat pada tahun 2018 ini sangat terlihat antusias mempersiapkan berbagai kegiatan kunjungan mereka mulai dari pertunjukan seni, simposium kebudayaan hingga diskusi diskusi ilmiah yang digelar di berbagai kampus di Malaysia. Para peserta mengucapkan terima kasih kepada Yayasan Perguruan Tinggi Komputer Padang atas support full akomodasi dan transportasi hingga pembuatan paspor, hal ini menjadi pengalaman yang sangat berharga bagi mereka dalam aktivitas akademik internasional. Wakil Rektor 4 Bidang kerjasama dan inovasi UPI YPTK Padang Muhammad Ridwan, SE, MM. menyampaikan ini merupakan salah satu agenda dari kantor urusan internasional UPI YPTK Padang. Kita sudah memiliki beberapa kerjasama dengan perguruan tinggi luar negeri seperti Korea, Jepang, Australia, Turki, Usbekistan dan Kazakhstan. Ke depan program serupa akan terus dikembangkan dalam tingkat yang lebih tinggi seperti student mobility atau student exchange.', 'UPI-YPTK-23032018-52258.jpg', '2018-07-04 22:00:50'),
(3, 'Otoritas Jasa Keuangan Gelar Sosialisasi pada mahasiswa UPI YPTK Padang', 'Padang, 20 Maret 2018. Kantor perwakilan Otoritas Jasa Keuangan Sumatera Barat menggelar sosialisasi mengenai fungsi OJK kepada sivitas akademika Universitas Putra Indonesia YPTK Padang. Kegiatan tersebut berlangsung di UPI exhibition hall kampus UPI YPTK ', 'Padang, 20 Maret 2018. Kantor perwakilan Otoritas Jasa Keuangan Sumatera Barat menggelar sosialisasi mengenai fungsi OJK kepada sivitas akademika Universitas Putra Indonesia YPTK Padang. Kegiatan tersebut berlangsung di UPI exhibition hall kampus UPI YPTK Padang.<br />\r\n<br />\r\nKerjasama antara Otoritas Jasa Keuangan dengan Universitas Putra Indonesia YPTK Padang telah digelar semenjak tahun 2016 ditandai dengan peresmian galeri investasi Bursa Efek Indonesia UPI YPTK Padang, berselang 3 bulan setelah itu GIBEI UPI YPTK Padang memecahkan rekor Muri menciptakan investor terbanyak dalam satu perguruan tinggi. Selanjutnya pada tahun 2017 Universitas Putra Indonesia YPTK Padang memperoleh penghargaan dari Otoritas Jasa Keuangan sebagai pelopor inklusi keuangan yang diserahkan langsung oleh Presiden Republik Indonesia Joko Widodo.<br />\r\n<br />\r\nBob Haspian selaku pengawas senior Otoritas Jasa Keuangan kantor perwakilan Sumatera Barat memaparkan pentingnya edukasi mengenai literasi keuangan kepada masyarakat dalam berhubungan dengan industri keuangan. Rendahnya pemahaman masyarakat mengenai literasi keuangan memicu berbagai kendala dan permasalahan-permasalahan yang terjadi, yang saat ini ditangani oleh OJK. Dalam upaya perolehan dana kredit misalnya, nasabah cenderung tidak membaca poin per poin akad kredit yang dikeluarkan oleh industri keuangan sehingga, dalam waktu berjalan ada yang merasa dirugikan dan melaporkan ke OJK.<br />\r\n<br />\r\nRektor Universitas Putra Indonesia YPTK Padang Prof. Dr Sarjon Defit, M.Sc menyambut baik kegiatan ini. Dalam acara pembukaan sosialisasi tersebut Rektor Universitas Putra Indonesia YPTK Padang mengucapkan terima kasih kepada otoritas jasa keuangan kantor perwakilan Sumatera barat atas dipilihnya universitas Putra Indonesia YPTK Padang sebagai tempat sosialisasi pengetahuan mengenai literasi keuangan.<br />\r\n<br />\r\nDalam kesempatan tersebut tampak hadir Wakil Rektor 4 Universitas Putra Indonesia YPTK Padang Muhammad Ridwan S.E, MM., Dekan Fakultas Ekonomi UPI YPTK Padang Dr. Efiswandi, sejumlah dosen dan para peneliti yang fokus dalam bidang keuangan.<br />\r\n<br />\r\nSosialisasi yang berlangsung diikuti oleh peserta yang sangat antusias dengan Informasi yang disampaikan oleh para narasumber. Forum diskusi yang dibuka setelah presentasi terlihat aktif, berbagai permasalahan dibahas pada diskusi tersebut mulai dari hilangnya uang nasabah secara mendadak di salah satu bank, informasi mengenai debitur, dan berbagai industri jasa keuangan lainnya.', 'UPI-YPTK-22032018-35793.jpg', '2018-07-04 22:19:34'),
(4, 'UPI YPTK Padang Lantik Lulusan Berkarakter: Wisuda Periode I Tahun 2017/2018', 'Padang, 15 Oktober 2017 Universitas Putra Indonesia YPTK Padang mengelar upacara wisuda periode I tahun akademik 2017/2018 dalam sidang terbuka senat UPI YPTK Padang, Sabtu 14 Oktober 2017, dan Minggu 15 Oktober di UPI Convention Center, kampus Universitas ', 'Padang, 15 Oktober 2017 Universitas Putra Indonesia YPTK Padang mengelar upacara wisuda periode I tahun akademik 2017/2018 dalam sidang terbuka senat UPI YPTK Padang, Sabtu 14 Oktober 2017, dan Minggu 15 Oktober di UPI Convention Center, kampus Universitas Putra Indonesia YPTK Padang, Lubuk Begalung â€“ Padang.<br />\r\n<br />\r\n<br />\r\nSidang senat yang dimpimpin oleh Rektor Universitas Putra Indonesia YPTK Padang, Prof. Dr. Sarjon Defit, M.Sc melantik 1.243 wisudawan dari program diploma, sarjana, dan magister dari berbagai program studi. Dalam sambutannya, Rektor menyampaikan selamat kepada seluruh wisudawan yang telah menyelesaikan studi tepat pada waktunya, kepada seluruh wisudawan diharapkan dapat terus menjaga 12 prinsip dasar dan karakter yang telah ditanamankan selama mengikuti perkuliahan di kampus UPI YPTK Padang, kampus IT yang berbasis spiritual.<br />\r\n<br />\r\n<br />\r\nDalam rangkaian wisuda tersebut dihadapan Ketua Kopertis Wilayah X, Prof. Herri, Ketua Yayasan Perguruan Tinggi Komputer Padang, H. Herman Nawas, Senat, dan seluuh hadirin yang hadir Rektor UPI YPTK Padang menyampaikan hasil Akreditasi Instusi yang telah di assessment oleh Badan Akreditasi Nasional Perguruan Tinggi (BAN-PT), dengan hasil B. Sementara itu, program studi yang ada dilingkungan UPI YPTK Padang semua sudah terakreditasi B.<br />\r\n<br />\r\n<br />\r\nSelanjutnya, Ketua YPTK Padang, H. Herman Nawas mengucapkan terima kasih kepada para guru besar, dosen, dan pimpinan universitas yang telah bekerjasama untuk menyelenggarakan tri dharma perguruan tinggi. Pada kesempatan tersebut H Herman Nawas juga menyampaikan terima kasih kepada orang tua wisudawan, dan masyarakat yang telah mempercayakan pendidikan putra-putri mereka di Universitas Putra Indonesia YPTK Padang.<br />\r\n<br />\r\n<br />\r\nDalam sambutannya, H. Herman Nawas menyampaikan komitmennya dalam terus mendukung perubahan untuk kemanjuan UPI YPTK Padang, dalam beberapa waktu lagi akan lagi guru besar baru, dan sejumlah doktor dalam beberapa bidang dari UPI YPTK Padang. Pada saat ini yayasan sedang mengirim sejumlah dosen untuk tugas belajar di dalam dan ke luar negeri. Berbagai kerjasama dengan universitas luar negeri terus ditingkatkan, dan akvitas kolaborasi sudah berjalan dengan lancar.<br />\r\n<br />\r\n<br />\r\nPada kesempatan tersebut, H. Herman Nawas menyerahkan hadiah khusus kepada wisudawan terrbaik pada masing-masin program studi. Rasa haru terlihat dalam prosesi ini, karena wisudawan menjemput orang tua masing-masing dan membawanya naik ke panggung. H. Herman Nawas mengingatkan kepada seluruh yang hadir dalam ruangan, bahwa kita dapat hadir dan berdiri seperti saat sekarang ini karena kedua orang tua yang telah mendidik kita dengan penuh kasih sayang semenjak kita kecil. ', 'UPI-YPTK-14102017-10203.jpg', '2018-07-04 22:21:15'),
(5, ' Wakil Rektor IV Buka Sekolah Pasar Modal ', 'Rabu, 13 September 2017. Galeri investasi bursa efek Indonesia UPI YPTK Padang kembali mengelar sekolah pasar modal untuk mahasiswa. Kegiatan yang digelar di UPI Comvention Center tersebut diikuti lebih dari 100 orang peserta dari berbagai fakultas, dan ', 'Rabu, 13 September 2017. Galeri investasi bursa efek Indonesia UPI YPTK Padang kembali mengelar sekolah pasar modal untuk mahasiswa. Kegiatan yang digelar di UPI Comvention Center tersebut diikuti lebih dari 100 orang peserta dari berbagai fakultas, dan program studi yang terdapat di lingkungan universitas putra Indonesia YPTK Padang. <br />\r\n<br />\r\nPara peserta akan dibekali pengetahuan dasar mengenai pasar modal, dan pengenalan aplikasi trading yang akan digunakan oleh investor untuk bertransaksi di lantai saham. Pada kegiatan tersebut hadir Kepala Kantor Perwakilan Bursa Efek Indonesia Cabang Padang, Reza Shadat, MM. beserta perusahaan sekuritas Amrin Tarigan, dari First Asia Capital. <br />\r\n<br />\r\nDalam sambutannya, wakil rektor IV Univeristas Putra Indonesia YPTK Padang Muhammad Ridwan, SE.,MM. mengajak mahasiswa untuk peka dengan berbagai isu ekonomi yang berkembang di masyarakat, karena orang-orang yang menguasai informasilah yang akan menguasai pasar. Selanjutnya, Wakil rektor mengajak mahasiswa untuk terlibat sebagai pemilik perusahaan-perusahaan yang melantai di bursa. Sehingga mahasiswa UPI YPTK Padang terlibat langsung sebagai pelaku industri keuangan ini. <br />\r\n<br />\r\nSelanjutnya, wakil rektor menyampaikan apresiasi kepada galeri investasi bursa efek Indonesia (GIBEI) UPI YPTK Padang yang terus menorehkan berbagai prestasi. Tahun 2015 sebagai pemecah rekor MURI  sebagai investor terbanyak, beberapa waktu lalu GIBEI UPI YPTK Padang juga masuk dalam 10 galeri investasi terbaik di Indonesia. Tidak hanya itu, Kompetisi Nasional Stocklab Games  juga dimenangkan oleh mahasiswa Fakultas Ekonomi UPI YPTK Padang, Riza Hendriyanti wakili Sumatera Barat ke tingkat Nasional dan berhasil memperoleh  Juara II Nasional dalam kompetisi yang diikuti oleh mahasiswa se Indonesia tersebut. <br />\r\n<br />\r\nKegiatan sekolah pasar modal yang digelar GIBEI UPI YPTK Padang, diselenggarakan dengan melibatkan Kelompok Studi Pasar Modal (KSPM) UPI YPTK Padang yang terdiri dari mahasiswa Fakultas Ekonomi UPI YPTK Padang. KSPM Fakultas Ekonomi ini juga aktif melakukan berbagai kajian, dan studi mengenai pasar modal. [Humas UPI]', 'WhatsApp Image 2017-09-13 at 10.34.56 AM.jpeg', '2018-07-04 22:22:37');

-- --------------------------------------------------------

--
-- Table structure for table `dosen`
--

CREATE TABLE IF NOT EXISTS `dosen` (
  `kddosen` varchar(5) NOT NULL,
  `nmdosen` varchar(25) NOT NULL,
  `fotodosen` text NOT NULL,
  `password` varchar(100) NOT NULL,
  PRIMARY KEY (`kddosen`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `dosen`
--

INSERT INTO `dosen` (`kddosen`, `nmdosen`, `fotodosen`, `password`) VALUES
('D001', 'Dosen 1', '', 'dosen1'),
('D002', 'Dosen 2', '', 'dosen2'),
('D003', 'Dosen 3', '20170629_170940.jpg', 'dosen3');

-- --------------------------------------------------------

--
-- Table structure for table `fakultas`
--

CREATE TABLE IF NOT EXISTS `fakultas` (
  `kdfakultas` varchar(20) NOT NULL,
  `nmfakultas` varchar(50) NOT NULL,
  PRIMARY KEY (`kdfakultas`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `fakultas`
--

INSERT INTO `fakultas` (`kdfakultas`, `nmfakultas`) VALUES
('F01', 'ILMU KOMPUTER'),
('F02', 'ILMU EKONOMI'),
('F03', 'TEKNIK SIPIL DAN PERENCANAAN'),
('F04', 'TEKNOLOGI INDUSTRI'),
('F05', 'PSIKOLOGI'),
('F06', 'DESAIN KOMUNIKASI VISUAL'),
('F07', 'KEGURUAN DAN ILMU PENDIDIKAN');

-- --------------------------------------------------------

--
-- Table structure for table `jurusan`
--

CREATE TABLE IF NOT EXISTS `jurusan` (
  `kdjurusan` varchar(10) NOT NULL,
  `nmjurusan` varchar(30) NOT NULL,
  `kdfakultas` varchar(10) NOT NULL,
  PRIMARY KEY (`kdjurusan`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `jurusan`
--

INSERT INTO `jurusan` (`kdjurusan`, `nmjurusan`, `kdfakultas`) VALUES
('JAK02', 'AKUNTANSI', 'F02'),
('JIK01', 'ILMU KOMPUTER (S2)', 'F01'),
('JMI01', 'MANAJEMEN INFORMATIKA (DIII)', 'F01'),
('JMJ02', 'MANAJEMEN (S1)', 'F02'),
('JSI01', 'SISTEM INFORMASI (S1)', 'F01'),
('JSK01', 'SISTEM KOMPUTER (S1)', 'F01'),
('JTI01', 'TEKNIK INFORMATIKA (S1)', 'F01'),
('JTS03', 'TEKNIK SIPIL', 'F03');

-- --------------------------------------------------------

--
-- Table structure for table `mahasiswa`
--

CREATE TABLE IF NOT EXISTS `mahasiswa` (
  `nobp` varchar(15) NOT NULL,
  `nama` varchar(30) NOT NULL,
  `tmptgllahir` varchar(100) NOT NULL,
  `foto` text NOT NULL,
  `kdjurusan` varchar(10) NOT NULL,
  `password` varchar(100) NOT NULL,
  PRIMARY KEY (`nobp`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `mahasiswa`
--

INSERT INTO `mahasiswa` (`nobp`, `nama`, `tmptgllahir`, `foto`, `kdjurusan`, `password`) VALUES
('15101152610456', 'Randi', 'Padang Ganting 14 - 10 - 1996', '', 'JSI01', 'upi530yptk'),
('15101152610457', 'Oktaria', 'Padang 10 - 08 - 1997', '', 'JSI01', 'upi531yptk'),
('15101152610458', 'Rinanda', 'Bukittinggi 20 - 02 -1996', '', 'JTI01', 'upi532yptk'),
('151011526104589', 'Putra', 'Pariaman 07 - 07 -1997', '20170629_170940.jpg', 'JSK01', 'upi533yptk');

-- --------------------------------------------------------

--
-- Table structure for table `skripsi`
--

CREATE TABLE IF NOT EXISTS `skripsi` (
  `idskripsi` int(11) NOT NULL AUTO_INCREMENT,
  `nobp` varchar(20) NOT NULL,
  `judulskripsi` text NOT NULL,
  `temaskripsi` text NOT NULL,
  `objekskripsi` text NOT NULL,
  `ltrbelakangskripsi` text NOT NULL,
  `tgldiajukan` datetime NOT NULL DEFAULT '0000-00-00 00:00:00',
  `tglditerima` datetime NOT NULL DEFAULT '0000-00-00 00:00:00',
  `status` varchar(10) NOT NULL,
  `komentar` text NOT NULL,
  `judulke` int(11) NOT NULL,
  PRIMARY KEY (`idskripsi`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=5 ;

--
-- Dumping data for table `skripsi`
--

INSERT INTO `skripsi` (`idskripsi`, `nobp`, `judulskripsi`, `temaskripsi`, `objekskripsi`, `ltrbelakangskripsi`, `tgldiajukan`, `tglditerima`, `status`, `komentar`, `judulke`) VALUES
(1, '15101152610456', 'Perancangan Website Akademik Dan Pengajuan Judul Skripsi Online Menggunakan Bahasa Pemrograman PHP dan Database MYQL', 'Sistem Informasi Akademik', 'Universitas Putra Indonesia "YPTK" Padang', 'Perancangan Website Akademik Dan Pengajuan Judul Skripsi Online Menggunakan Bahasa Pemrograman PHP dan Database MYQL', '2018-07-05 15:41:26', '2018-07-05 16:03:26', 'acc', 'Selamat Mengerjakan Skripsi . .', 1),
(2, '15101152610458', 'Perancangan Website Penjualan Online Menggunaka Bahasa Pemrograman PHP dan Database MYSL', 'Website Penjualan', 'Toko Komputer Marapalam', 'Perancangan Website Penjualan Online Menggunaka Bahasa Pemrograman PHP dan Database MYSL', '2018-07-05 15:45:43', '2018-07-05 15:48:42', 'tolak', 'Judul Saudara Kurang Menarik, Coba Cari Judul Lain ...', 1),
(3, '15101152610458', 'Perancangan Website SIstem pakar Mendiagnosa Penyakit Jantung Meggunakan Metode SAW dengan bahasa Pemrograman PHP dan Database MYSQL', 'Sistem Pakar', 'Rumah Sakit Sumbar', 'Perancangan Website SIstem pakar Mendiagnosa Penyakit Jantung Meggunakan Metode SAW dengan bahasa Pemrograman PHP dan Database MYSQL', '2018-07-05 15:52:33', '2018-07-05 15:53:44', 'acc', 'Judul Saudara Sudah Diterima, Silahkan Kerjakan Skripsi dengan baik', 2),
(4, '15101152610457', 'Perancangan Website Sistem Penunjang Keputusan Siswa Berprestasi Menggunakan Metode AHP Dengan Bahasa Pemrograman PHP dan Database MYSQL', 'Sistem Penunjang Keputusan', 'Sekolah SMA 2 Padang', 'Perancangan Website Sistem Penunjang Keputusan Siswa Berprestasi Menggunakan Metode AHP Dengan Bahasa Pemrograman PHP dan Database MYSQL', '2018-07-05 16:07:37', '0000-00-00 00:00:00', '', '', 1);
