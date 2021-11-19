-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Nov 19, 2021 at 04:27 AM
-- Server version: 10.4.20-MariaDB
-- PHP Version: 7.4.22

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `appkamar`
--

-- --------------------------------------------------------

--
-- Table structure for table `about`
--

CREATE TABLE `about` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `tittle` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `body` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `published_at` timestamp NULL DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `about`
--

INSERT INTO `about` (`id`, `tittle`, `body`, `published_at`, `created_at`, `updated_at`) VALUES
(1, 'Informasi', 'Lorem ipsum dolor, sit amet consectetur adipisicing elit. Nesciunt sint quia dolores magnam, dolor, exercitationem aliquam sunt cumque illum ullam consectetur.', NULL, '2021-11-18 19:18:45', '2021-11-18 19:37:30');

-- --------------------------------------------------------

--
-- Table structure for table `contactus`
--

CREATE TABLE `contactus` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `phone` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `subject` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `message` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `contactus`
--

INSERT INTO `contactus` (`id`, `name`, `email`, `phone`, `subject`, `message`, `created_at`, `updated_at`) VALUES
(48, 'mas wahyu', 'maswahyuu@gmail.com', '085123456789', 'zoom', 'zoom jam 18.00 WITA', '2021-11-18 19:43:50', '2021-11-18 19:43:50');

-- --------------------------------------------------------

--
-- Table structure for table `failed_jobs`
--

CREATE TABLE `failed_jobs` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `uuid` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `connection` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `queue` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `payload` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `exception` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `failed_at` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `migrations`
--

CREATE TABLE `migrations` (
  `id` int(10) UNSIGNED NOT NULL,
  `migration` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `batch` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `migrations`
--

INSERT INTO `migrations` (`id`, `migration`, `batch`) VALUES
(1, '2014_10_12_000000_create_users_table', 1),
(8, '2014_10_12_100000_create_password_resets_table', 2),
(9, '2019_08_19_000000_create_failed_jobs_table', 2),
(10, '2019_12_14_000001_create_personal_access_tokens_table', 2),
(11, '2021_10_28_080527_create_privacies_table', 2),
(12, '2021_11_01_041513_create_terms_table', 2),
(13, '2021_11_01_071634_create_refunds_table', 2),
(14, '2021_11_08_061744_contactus', 3),
(15, '2021_11_19_013243_about', 4);

-- --------------------------------------------------------

--
-- Table structure for table `password_resets`
--

CREATE TABLE `password_resets` (
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `token` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `personal_access_tokens`
--

CREATE TABLE `personal_access_tokens` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `tokenable_type` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `tokenable_id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `token` varchar(64) COLLATE utf8mb4_unicode_ci NOT NULL,
  `abilities` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `last_used_at` timestamp NULL DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `privacies`
--

CREATE TABLE `privacies` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `tittle` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `body` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `published_at` timestamp NULL DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `privacies`
--

INSERT INTO `privacies` (`id`, `tittle`, `body`, `published_at`, `created_at`, `updated_at`) VALUES
(1, 'Kebijakan Privasi Kamar', 'Kami adalah pemilik konten dan operator aplikasi dan situs web KAMAR, situs terkait dan microsites yang diakses melalui situs web tersebut (masing-masing disebut Situs dan secara kolektif disebut Situs-situs) (KAMAR, atau kami). Harap diperhatikan bahwa KAMAR tidak bertanggung jawab atas situs web lain yang dikelola oleh perusahaan lain dari grup KAMAR atau tautan ke situs atau konten lain di internet yang dimiliki atau dioperasikan oleh pihak ketiga. Situs atau konten terkait tidak berada di bawah kendali kami dan KAMAR tidak bertanggung jawab atas kesalahan, kelalaian, penundaan, pencemaran nama baik, fitnah, kebohongan, pornografi, konten cabul, ketidakakuratan atau materi lain yang terkandung dalam konten, atau konsekuensi dari mengakses situs web terkait.', NULL, '2021-11-01 00:58:54', '2021-11-01 00:58:54'),
(2, 'Pernyataan Privasi', 'Melindungi privasi Anda sangat penting bagi kami. Kami menghargai privasi Anda dan kami berkomitmen untuk melindungi setiap dan semua informasi pribadi yang mungkin diberikan oleh Anda dan oleh karena itu akan memastikan perlakuan yang adil, keandalan, kerahasiaan, dan keamanan informasi pribadi Anda. Kami merancang Kebijakan Privasi ini untuk menjelaskan kepada Anda bagaimana kami mengumpulkan, menggunakan, dan membagikan informasi pribadi Anda. Informasi pribadi berarti informasi apa pun yang dapat digunakan untuk mengidentifikasi Anda secara pribadi (tidak termasuk informasi apa pun yang telah dikumpulkan atau dibuat anonim) dan sebagaimana ditafsirkan berdasarkan Peraturan Menteri Komunikasi dan Teknologi Informasi No. 20 tahun 2016 tentang Perlindungan Data Pribadi dalam Sistem Elektronik (selanjutnya disebut sebagai Peraturan 20/2016). Informasi yang terdapat dalam Kebijakan Privasi ini telah dipersiapkan sehubungan dan sesuai dengan peraturan yang berlaku dan untuk digunakan khusus oleh KAMAR dan afiliasinya dan/atau penerima pengalihannya.', NULL, '2021-11-01 01:00:36', '2021-11-11 23:30:48'),
(3, 'Penerimaan dan Persetujuan Anda', 'Anda wajib membaca Kebijakan Privasi kami dari waktu ke waktu. Dengan mengakses atau menggunakan layanan atau produk kami serta Situs Web dan aplikasi kami, hal tersebut akan dianggap sebagai persetujuan dan penerimaan Anda terhadap Kebijakan Privasi kami, dengan demikian, Anda setuju untuk terikat pada setiap ketentuan yang tercantum dalam Kebijakan Privasi kami. Jika Anda tidak setuju dengan ketentuan atau ketentuan apa pun dalam Kebijakan Privasi ini, jangan gunakan layanan atau produk kami serta Situs Web kami. [Dengan mengirimkan pemberitahuan ke email Anda], kami memiliki hak untuk merevisi dan/atau memperbarui Kebijakan Privasi kami dari waktu ke waktu dan Anda setuju untuk terikat dengan Kebijakan Privasi yang direvisi dan/atau diperbarui tersebut. Jika Anda tidak setuju dengan ketentuan kami yang direvisi dan/atau diperbarui dalam Kebijakan Privasi, silakan berhenti mengakses layanan atau produk kami atau Situs Web kami. Penerimaan dan persetujuan Anda terhadap Kebijakan Privasi ini juga akan berkaitan dengan ketentuan yang tercantum berdasarkan Ketentuan Layanan dan akan dianggap dan tidak dapat dipisahkan dan satu perjanjian yang mengatur hak dan kewajiban kami kepada Anda.', NULL, '2021-11-01 01:01:42', '2021-11-05 03:21:40');

-- --------------------------------------------------------

--
-- Table structure for table `refunds`
--

CREATE TABLE `refunds` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `tittle` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `body` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `published_at` timestamp NULL DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `refunds`
--

INSERT INTO `refunds` (`id`, `tittle`, `body`, `published_at`, `created_at`, `updated_at`) VALUES
(1, 'Refund Policy', 'Our return policy lasts 30 days. If 30 days have gone by since your purchase, unfortunately we cant offer you a refund or exchange. To complete your return, we require a receipt or proof of purchase.', NULL, '2021-11-01 01:09:08', '2021-11-01 01:09:08'),
(2, 'Kebijakan Pengembalian', 'Kebijakan pengembalian kami berlangsung selama 30 hari. Jika 30 hari telah berlalu sejak pembelian Anda, mohon maaf kami tidak dapat menawarkan anda pengembalian uang atau pertukaran. Untuk menyelesaikan proses pengembalian, kami memerlukan bukti tanda terima atau bukti pembelian anda.', NULL, '2021-11-01 01:10:11', '2021-11-01 01:10:11');

-- --------------------------------------------------------

--
-- Table structure for table `terms`
--

CREATE TABLE `terms` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `tittle` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `body` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `published_at` timestamp NULL DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `terms`
--

INSERT INTO `terms` (`id`, `tittle`, `body`, `published_at`, `created_at`, `updated_at`) VALUES
(1, 'Ketentuan', 'Syarat dan ketentuan ini (Ketentuan) merupakan suatu perjanjian hukum antara anda dan KAMAR, untuk mengatur mengenai syarat dan ketentuan untuk penggunaan Layanan KAMAR oleh anda. Dalam Ketentuan ini, Layanan KAMAR berarti penjualan dan penyediaan suatu fitur, teknologi, benda, produk, perangkat lunak, perangkat keras, dan produk-produk, jasa-jasa, atau fungsi lain yang diberikan oleh produk atau jasa tersebut oleh KAMAR, termasuk aplikasi web desktop KAMAR (Aplikasi) dan kamar.co.id (Website) (secara bersama-sama disebut sebagai Layanan). Individu atau organisasi yang mengikatkan diri dalam Ketentuan ini sebagai pengguna Layanan, termasuk juga seluruh pengguna individu yang mengakses Layanan atas nama individu tersebut (secara bersama-sama disebut sebagai Anda atau Pengguna). KAMAR memberikan kepada anda suatu lisensi terbatas, non-eksklusif, tidak dapat dialihkan, dan dapat dibatalkan, untuk menggunakan Layanan (tergantung pada jenis akun anda) sesuai dengan Ketentuan ini. Anda diwajibkan untuk membaca Ketentuan dari waktu ke waktu. Dengan mengakses atau menggunakan layanan, tindakan tersebut dianggap sebagai persetujuan dan penerimaan anda terhadap Ketentuan kami, dengan demikian, anda setuju untuk terikat pada setiap aturan yang dituangkan dalam Ketentuan kami. Apabila anda tidak setuju dengan suatu syarat atau aturan dalam Ketentuan ini, silakan untuk menghentikan menggunakan Layanan. Seluruh hak yang tidak secara tegas diberikan kepada Pengguna dalam Ketentuan ini dimiliki oleh KAMAR.', NULL, '2021-11-01 01:04:16', '2021-11-07 18:56:47'),
(2, 'Amendemen', 'Kami memiliki hak untuk membuat suatu amendemen, revisi dan/atau memperbarui Ketentuan ini dari waktu ke waktu dan anda setuju untuk terikat dengan Ketentuan yang direvisi dan/atau diperbarui tersebut. Kami akan berusaha untuk memberitahu anda sehubungan dengan perubahan tersebut melalui email atau dengan menampilkan suatu pesan pada saat anda menggunakan Layanan pada kesempatan berikutnya. Apabila anda melanjutkan penggunaan Layanan, penggunaan anda akan diatur oleh dan tunduk pada Ketentuan yang telah diperbarui. Apabila anda tidak setuju dengan amendemen, revisi, dan/atau pembaruan kami terhadap aturan-aturan dalam Ketentuan ini, silakan menghentikan akses terhadap Layanan. Dari waktu ke waktu, kami dapat menambahkan, melakukan perubahan terhadap, atau menghilangkan seluruh fitur atau fungsi dalam Layanan. Apabila anda menggunakan Aplikasi, anda mungkin perlu untuk memasang versi baru atau yang diperbarui sebelum anda dapat menerima manfaat atas perubahan-perubahan tersebut. Kami juga dapat memutuskan untuk menghentikan penyediaan seluruh atau sebagian Layanan pada setiap waktu, dan tidak satupun dalam Ketentuan ini yang dianggap sebagai suatu jaminan bahwa Layanan akan terus tersedia, baik dalam bentuk saat ini atau bentuk lain apapun juga, atau bahwa kami akan mendukung, memelihara atau terus menawarkan Layanan, atau versi apapun dari Layanan. Pengunaan Layanan oleh anda akan selalu diatur dan tunduk pada Ketentuan yang diperbarui, meskipun adanya penambahan, perubahan, atau penyesuaian Layanan. Untuk menghindari keraguan, tambahan, perubahan, atau penyesuaian Layanan tersebut tidak membatalkan keberlakuan Ketentuan ini, kecuali secara tegas dinyatakan oleh KAMAR.', NULL, '2021-11-01 01:05:52', '2021-11-01 01:05:52'),
(3, 'Informasi Akun', 'Anda harus merupakan (i) penduduk individual berusia sekurang-kurangnya 18 tahun atau pernah menikah dan memiliki kapasitas hukum untuk mengikatkan diri dalam suatu perjanjian yang sah; atau (ii) badan hukum yang didirikan secara sah berdasarkan hukum jurisdiksi terkait dan memiliki domisili hukum, yang diwakili oleh perwakilan yang sah dan memiliki kapasitas hukum untuk mengikatkan diri dalam perjanjian yang sah, khususnya terkait aturan terkait Layanan, untuk mengakses dan menggunakan Layanan. Anda setuju untuk menyediakan informasi akun yang benar, akurat, terkini, dan lengkap pada saat proses pendaftaran, dan akan tetap menjaga dan segera memperbarui informasi akun untuk memastikan bahwa informasi akun tetap benar, akurat, terkini, dan lengkap. Anda menyatakan dan menjamin bahwa anda memiliki hak yang sah untuk menggunakan suatu kartu kredit, kartu debit, atau metode pembayaran lain yang anda gunakan sehubungan dengan Layanan. Untuk diketahui bahwa apabila anda termasuk kategori nomor (ii) dan dalam kapasitas untuk bertindak untuk dan atas nama suatu badan hukum, anda harus memperoleh persetujuan yang diperlukan dari badan hukum tersebut dan dari pihak ketiga lain yang terkait sehubungan dengan penggunaan dan tanggung jawab atas (i) tindakan anda sehubungan dengan Layanan; (ii) biaya terkait dengan penggunaan Layanan; dan (iii) penerimaan dan kepatuhan anda terhadap Ketentuan ini. Dengan melanjutkan penggunaan dan/atau menggunakan Layanan, kami mengasumsikan bahwa anda telah memperoleh segala persetujuan yang diperlukan dan berwenang untuk mengakses Layanan.', NULL, '2021-11-01 01:06:38', '2021-11-01 01:06:38');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `username` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email_verified_at` timestamp NULL DEFAULT NULL,
  `password` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `remember_token` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `name`, `username`, `email`, `email_verified_at`, `password`, `remember_token`, `created_at`, `updated_at`) VALUES
(1, 'Moch Famri', 'admin', 'zhemz2015@gmail.com', NULL, '$2y$10$0P6Uvmb..pD7h3N6mnRibO6TMMKwOO8lCpyTbeiKWRtegogC42R6C', NULL, '2021-10-28 00:37:41', '2021-10-28 00:37:41');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `about`
--
ALTER TABLE `about`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `contactus`
--
ALTER TABLE `contactus`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `failed_jobs`
--
ALTER TABLE `failed_jobs`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `failed_jobs_uuid_unique` (`uuid`);

--
-- Indexes for table `migrations`
--
ALTER TABLE `migrations`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `password_resets`
--
ALTER TABLE `password_resets`
  ADD KEY `password_resets_email_index` (`email`);

--
-- Indexes for table `personal_access_tokens`
--
ALTER TABLE `personal_access_tokens`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `personal_access_tokens_token_unique` (`token`),
  ADD KEY `personal_access_tokens_tokenable_type_tokenable_id_index` (`tokenable_type`,`tokenable_id`);

--
-- Indexes for table `privacies`
--
ALTER TABLE `privacies`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `refunds`
--
ALTER TABLE `refunds`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `terms`
--
ALTER TABLE `terms`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `users_email_unique` (`email`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `about`
--
ALTER TABLE `about`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `contactus`
--
ALTER TABLE `contactus`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=49;

--
-- AUTO_INCREMENT for table `failed_jobs`
--
ALTER TABLE `failed_jobs`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `migrations`
--
ALTER TABLE `migrations`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=16;

--
-- AUTO_INCREMENT for table `personal_access_tokens`
--
ALTER TABLE `personal_access_tokens`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `privacies`
--
ALTER TABLE `privacies`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=20;

--
-- AUTO_INCREMENT for table `refunds`
--
ALTER TABLE `refunds`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `terms`
--
ALTER TABLE `terms`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
