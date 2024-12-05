-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jun 23, 2023 at 11:24 AM
-- Server version: 10.4.24-MariaDB
-- PHP Version: 8.0.19

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `hfood`
--

-- --------------------------------------------------------

--
-- Table structure for table `artikels`
--

CREATE TABLE `artikels` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `title` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `author` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `path` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `context` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `description` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created at` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp(),
  `updated at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `artikels`
--

INSERT INTO `artikels` (`id`, `title`, `author`, `path`, `context`, `description`, `created at`, `updated at`) VALUES
(1, '10 Makanan Sehat yang Perlu Dikonsumsi untuk Gaya Hidup Sehat', 'Joshua Aldo', 'img/artikel/artikel1.jpg', 'Dalam upaya menjaga kesehatan dan gaya hidup yang sehat, makanan memainkan peran yang sangat penting. Memilih makanan yang tepat dan bergizi dapat memberikan nutrisi yang diperlukan oleh tubuh. Berikut ini adalah 10 makanan sehat yang perlu Anda konsumsi untuk mendukung gaya hidup sehat.\r\n<br><br>\r\n<strong>1. Alpukat </strong><br>\r\nAlpukat mengandung lemak sehat, serat, dan vitamin yang baik untuk jantung dan pencernaan. Anda dapat menambahkan alpukat pada salad, smoothie, atau membuat guacamole.\r\n<br>\r\n<strong>2. Brokoli</strong> <br>\r\nBrokoli kaya akan serat, vitamin C, dan antioksidan. Makan brokoli secara teratur dapat membantu meningkatkan sistem kekebalan tubuh dan menjaga kesehatan tulang.\r\n<br>\r\n<strong>3. Ikan Salmon</strong> <br>\r\nSalmon merupakan sumber protein tinggi dan kaya akan asam lemak omega-3. Konsumsi ikan salmon dapat membantu menjaga kesehatan otak, jantung, dan mengurangi risiko penyakit kronis.\r\n<br>\r\n<strong>4. Oatmeal </strong><br>\r\nOatmeal mengandung serat larut yang baik untuk pencernaan dan mengendalikan kadar gula darah. Makan oatmeal sebagai sarapan dapat memberikan energi yang tahan lama dan membantu menjaga berat badan.\r\n<br>\r\n<strong>5. Blueberry </strong><br>\r\nBlueberry kaya akan antioksidan, vitamin C, dan serat. Makan blueberry secara rutin dapat membantu meningkatkan kesehatan jantung, mengurangi risiko diabetes, dan meningkatkan kognisi.\r\n<br>\r\n<strong>6. Bayam </strong><br>\r\nBayam mengandung banyak nutrisi seperti zat besi, kalsium, vitamin A, dan vitamin K. Konsumsi bayam dapat membantu menjaga kesehatan tulang, meningkatkan sistem kekebalan tubuh, dan mengurangi risiko penyakit jantung.\r\n<br>\r\n<strong>7. Kacang-kacangan </strong><br>\r\nKacang-kacangan seperti almond, kenari, dan kacang merah merupakan sumber protein nabati, serat, dan lemak sehat. Konsumsi kacang-kacangan dapat membantu menjaga kesehatan jantung dan mengendalikan berat badan.\r\n<br>\r\n<strong>8. Yogurt Yunani</strong> <br>\r\nYogurt Yunani kaya akan protein, kalsium, dan probiotik yang baik untuk kesehatan pencernaan. Pilihlah yogurt Yunani rendah lemak dan tanpa tambahan gula untuk mendapatkan manfaat maksimal.\r\n<br>\r\n<strong>9. Tomat</strong> <br>\r\nTomat mengandung likopen, antioksidan kuat yang dapat melindungi tubuh dari radikal bebas. Konsumsi tomat segar atau dalam bentuk saus dapat membantu menjaga kesehatan jantung dan mencegah beberapa jenis kanker.\r\n<br>\r\n<strong>10. Quinoa</strong> <br>\r\nQuinoa merupakan sumber karbohidrat kompleks, protein, dan serat. Quinoa dapat digunakan sebagai pengganti nasi atau dalam salad untuk memberikan nutrisi yang lengkap.\r\n<br><br>\r\nDengan mengonsumsi makanan sehat seperti yang disebutkan di atas, Anda dapat memberikan nutrisi yang diperlukan oleh tubuh dan menjaga kesehatan secara keseluruhan. Jangan lupa untuk selalu mengimbanginya dengan gaya hidup aktif dan pola makan yang seimbang.', 'Dalam upaya menjaga kesehatan dan gaya hidup yang sehat, makanan memainkan peran yang sangat penting...', '2023-06-23 08:23:02', NULL),
(2, '5 Makanan Penambah Energi untuk Mengatasi Kelelahan', 'Joshua Aldo', 'img/artikel/artikel2.jpg', 'Rasa lelah dan kekurangan energi adalah masalah umum yang sering dialami oleh banyak orang. Namun, mengandalkan kafein dan gula untuk mendapatkan dorongan energi hanya memberikan efek sementara dan tidak sehat dalam jangka panjang. Berikut ini adalah 5 makanan penambah energi yang alami dan sehat untuk membantu mengatasi kelelahan.\r\n<br><br>\r\n<strong>1. Pisang</strong> <br>\r\nPisang mengandung karbohidrat kompleks, serat, dan kalium. Karbohidrat kompleks memberikan energi yang tahan lama, sedangkan kalium membantu menjaga keseimbangan cairan dan elektrolit dalam tubuh. Makan pisang sebagai camilan atau tambahkan dalam smoothie untuk mendapatkan dorongan energi yang sehat.\r\n<br>\r\n<strong>2. Kacang-kacangan</strong> <br>\r\nKacang-kacangan seperti almond, kenari, dan kacang mete mengandung lemak sehat, protein, dan serat. Lemak sehat memberikan energi yang stabil dan bertahan lama, sementara protein dan serat membantu menjaga rasa kenyang. Makan segenggam kacang-kacangan sebagai camilan di antara waktu makan untuk mengatasi kelelahan.\r\n<br>\r\n<strong>3. Bayam </strong><br>\r\nBayam kaya akan zat besi, magnesium, dan vitamin B. Zat besi membantu membawa oksigen ke seluruh tubuh, magnesium membantu mengatur fungsi otot dan saraf, dan vitamin B berperan dalam produksi energi. Tambahkan bayam dalam salad, tumis, atau smoothie untuk mendapatkan manfaat energi yang maksimal.\r\n<br>\r\n<strong>4. Quinoa </strong><br>\r\nQuinoa adalah sumber karbohidrat kompleks, protein, dan serat. Karbohidrat kompleks memberikan energi yang stabil, sementara protein dan serat membantu menjaga rasa kenyang. Gunakan quinoa sebagai pengganti nasi atau tambahkan dalam salad untuk mendapatkan dorongan energi yang seimbang.\r\n<br>\r\n<strong>5. Teh Hijau </strong><br>\r\nTeh hijau mengandung kafein dan antioksidan yang dapat meningkatkan energi dan memperbaiki fungsi kognitif. Kafein dalam teh hijau memberikan dorongan energi yang lebih lembut dan bertahan lebih lama dibandingkan kafein dalam kopi. Minum secangkir teh hijau di pagi hari atau sebagai camilan sore untuk mendapatkan energi tambahan.\r\n\r\n<br><br>\r\nDengan mengonsumsi makanan penambah energi yang alami dan sehat seperti yang disebutkan di atas, Anda dapat mengatasi kelelahan dengan cara yang lebih baik dan mendapatkan dorongan energi yang tahan lama. Tetaplah memperhatikan pola makan yang seimbang dan gaya hidup aktif untuk menjaga kesehatan secara keseluruhan.', 'Rasa lelah dan kekurangan energi adalah masalah umum yang sering dialami oleh banyak orang. Namun, mengandalkan kafein dan gula untuk mendapatkan dorongan energi hanya...', '2023-06-23 08:28:47', NULL);

-- --------------------------------------------------------

--
-- Table structure for table `dropships`
--

CREATE TABLE `dropships` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `alamat` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `ktpImage` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `kkImage` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `dropships`
--

INSERT INTO `dropships` (`id`, `email`, `alamat`, `ktpImage`, `kkImage`, `created_at`, `updated_at`) VALUES
(15, 'joshua.aldo.jac7@gmail.com', 'tandur', 'C:\\xampp\\tmp\\phpFB70.tmp', 'C:\\xampp\\tmp\\phpFB71.tmp', '2023-06-23 00:26:01', '2023-06-23 00:26:01');

-- --------------------------------------------------------

--
-- Table structure for table `dropship_orders`
--

CREATE TABLE `dropship_orders` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `dropshipperId` int(255) NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `address` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `jadwal` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `dropship_orders`
--

INSERT INTO `dropship_orders` (`id`, `dropshipperId`, `name`, `email`, `address`, `jadwal`, `created_at`, `updated_at`) VALUES
(2, 1, 'joshua', 'joshua.christiansen@is-gs.com', 'jl.tanjung duren utara 2', '1 Bulan', '2023-06-22 18:45:25', '2023-06-22 18:45:25'),
(3, 1, 'Ini hanya test', 'joshua.aldo.jac7@gmail.com', 'jl.tanjung duren utara 2', '1 Minggu', '2023-06-22 23:30:12', '2023-06-22 23:30:12'),
(4, 1, 'dropship1', 'pelanggan1@gmail.com', 'jl.tanjung duren utara 2', '1 Bulan', '2023-06-23 00:24:00', '2023-06-23 00:24:00');

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
-- Table structure for table `keranjangs`
--

CREATE TABLE `keranjangs` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `user_id` bigint(20) UNSIGNED NOT NULL,
  `menu_id` bigint(20) UNSIGNED NOT NULL,
  `jumlah` int(11) NOT NULL,
  `jadwal` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `status` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL DEFAULT 'Menunggu Pembayaran',
  `dropOrder_name` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `totalharga` int(11) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `deleted_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `keranjangs`
--

INSERT INTO `keranjangs` (`id`, `user_id`, `menu_id`, `jumlah`, `jadwal`, `status`, `dropOrder_name`, `totalharga`, `created_at`, `updated_at`, `deleted_at`) VALUES
(1, 1, 1, 3, '1 Minggu', 'Menunggu Pembayaran', NULL, 105000, '2023-06-23 00:23:22', '2023-06-23 00:24:21', '2023-06-23 00:24:21'),
(2, 1, 1, 1, '1 Bulan', 'Done', 'pelanggan1@gmail.com', 33250, '2023-06-23 00:24:03', '2023-06-23 00:24:21', '2023-06-23 00:24:21'),
(3, 1, 2, 1, NULL, 'Menunggu Pembayaran', NULL, 30000, '2023-06-23 01:53:26', '2023-06-23 01:53:38', '2023-06-23 01:53:38'),
(4, 1, 3, 1, NULL, 'Menunggu Pembayaran', NULL, 25000, '2023-06-23 01:53:53', '2023-06-23 01:53:57', '2023-06-23 01:53:57');

-- --------------------------------------------------------

--
-- Table structure for table `menus`
--

CREATE TABLE `menus` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `nama_Menu` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `harga` int(11) NOT NULL,
  `deskripsi` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `detail` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `kalori` int(11) NOT NULL,
  `path` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `stock` bigint(20) NOT NULL,
  `topSell` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `menus`
--

INSERT INTO `menus` (`id`, `nama_Menu`, `harga`, `deskripsi`, `detail`, `kalori`, `path`, `stock`, `topSell`, `created_at`, `updated_at`) VALUES
(1, 'Mediterranean Quinoa Salad', 35000, 'Salad yang menggunakan quinoa sebagai sumber karbohidrat, dengan tambahan sayuran segar seperti mentimun, tomat ceri, zaitun, dan keju feta. Disajikan dengan dressing khas Mediterania.', 'Karbohidrat: 40 gram, Protein: 10 gram, Serat: 8 gram, Lemak: 8 gram.', 300, 'img/menu/food1.jpg', 19996, 'yes', '2023-06-06 20:01:23', '2023-06-23 00:24:21'),
(2, 'Grilled Chicken with Roasted Veggies', 30000, 'Ayam panggang dengan tambahan sayuran panggang seperti brokoli, wortel, dan paprika. Disajikan dengan saus rendah lemak untuk hidangan yang lezat dan sehat.', 'Karbohidrat: 20 gram, Protein: 25 gram, Serat: 6 gram, Lemak: 10 gram.', 350, 'img/menu/food2.jpg', 19999, 'yes', '2023-06-06 20:08:22', '2023-06-23 01:53:38'),
(3, 'Fruit Salad Parfait', 25000, 'Salad buah dengan campuran berbagai buah segar seperti melon, jeruk, anggur, dan potongan pisang. Ditambahkan lapisan yogurt rendah lemak dan granola sebagai topping.', 'Karbohidrat: 30 gram, \r\nProtein: 5 gram, \r\nSerat: 3 gram, Lemak: 2 gram.', 200, 'img/menu/food3.jpg', 19999, 'yes', '2023-06-06 20:35:18', '2023-06-23 01:53:57'),
(4, 'Baked Salmon with Lemon-Dill Sauce', 35000, 'Ikan salmon panggang dengan saus lemon-dill yang segar. Disajikan dengan pilihan sayuran seperti brokoli panggang atau kentang panggang.', 'Karbohidrat: 0 gram, \r\nProtein: 30 gram, \r\nLemak: 15 gram. ', 250, 'img/menu/food4.jpg', 20000, 'yes', '2023-06-06 20:39:56', '2023-06-21 08:51:24'),
(5, 'Quinoa-Stuffed Bell Peppers', 30000, 'Paprika yang diisi dengan campuran quinoa, sayuran, dan keju rendah lemak. Dipanggang hingga matang dan lezat.', 'Karbohidrat: 35 gram, \r\nProtein: 15 gram, \r\nSerat: 7 gram, \r\nLemak: 7 gram.', 300, 'img/menu/food5.jpg', 20000, 'yes', '2023-06-11 02:45:50', '2023-06-21 08:51:08'),
(6, 'Turkey Lettuce Wraps', 33000, 'Gulungan selada dengan isian daging kalkun cincang, sayuran seperti mentimun, wortel, dan saus rendah sodium. Memberikan rasa yang kaya dan tekstur yang renyah.', 'Karbohidrat: 20 gram, \r\nProtein: 25 gram, \r\nSerat: 5 gram, \r\nLemak: 7 gram.', 250, 'img/menu/food6.jpg', 20000, 'yes', '2023-06-11 03:02:25', '2023-06-21 08:51:08'),
(7, 'Chia Seed Pudding with Mixed Berries', 25000, 'Puding biji chia dengan campuran beri segar seperti blueberry, raspberry, dan strawberry. Menyediakan rasa manis alami dan kaya serat.', 'Karbohidrat: 30 gram, \r\nProtein: 7 gram, \r\nSerat: 10 gram, \r\nLemak: 15 gram.', 250, 'img/menu/food7.jpg', 20000, 'no', '2023-06-11 03:02:25', '2023-06-21 08:51:08'),
(8, 'Dark Chocolate Avocado Mousse', 27000, 'Mousse cokelat hitam yang dibuat dengan alpukat sebagai bahan utama. Lezat dan mengandung lemak sehat serta antioksidan dari cokelat hitam.', 'Karbohidrat: 20 gram\r\nProtein: 7 gram\r\nSerat: 7 gram\r\nLemak: 20 gram.', 250, 'img/menu/food8.jpg', 20000, 'no', '2023-06-11 03:02:25', '2023-06-21 08:51:08'),
(9, 'Yogurt Parfait with Granola and Fresh Fruit', 25000, 'Parfait yogurt dengan lapisan granola dan potongan buah segar. Menyediakan keseimbangan antara protein, serat, dan rasa manis alami.', 'Karbohidrat: 35 gram, \r\nProtein: 15 gram, \r\nSerat: 5 gram, \r\nLemak: 7 gram.', 300, 'img/menu/food9.jpg', 20000, 'no', NULL, NULL),
(10, 'Green Smoothie', 20000, 'Sebuah minuman yang menyegarkan dan penuh dengan nutrisi, terbuat dari campuran bayam segar, pisang matang, potongan apel hijau, dan sejumput lemon. Green smoothie ini kaya akan serat, vitamin, dan mineral, serta memberikan efek detoks bagi tubuh.', 'Karbohidrat: 30 gram, \r\nProtein: 7 gram, \r\nSerat: 7 gram, \r\nLemak: 7 gram.', 200, 'img/menu/food10.jpg', 20000, 'no', NULL, NULL),
(11, 'Berry Blast Smoothie', 30000, 'Sebuah minuman smoothie dengan rasa manis dari campuran berbagai jenis buah berry seperti stroberi, blueberry, dan raspberry, yang dicampur dengan susu almond atau susu nabati lainnya. Smoothie ini kaya akan antioksidan dan vitamin, serta memberikan energ', 'Karbohidrat: 35 gram, \r\nProtein: 7 gram, \r\nSerat: 7 gram, \r\nLemak: 5 gram.', 200, 'img/menu/food11.jpg', 20000, 'no', NULL, NULL),
(12, 'Matcha Latte', 25000, 'Sebuah minuman yang terbuat dari bubuk matcha yang dikombinasikan dengan susu almond atau susu nabati lainnya. Matcha latte ini kaya akan antioksidan, memberikan energi yang berkepanjangan, dan memberikan rasa yang lezat dengan sentuhan rasa teh hijau.', 'Karbohidrat: 15 gram, \r\nProtein: 5 gram, \r\nSerat: 3 gram, \r\nLemak: 7 gram.', 150, 'img/menu/food12.jpg', 20000, 'no', NULL, NULL);

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
(1, '2014_10_12_100000_create_password_resets_table', 1),
(2, '2019_08_19_000000_create_failed_jobs_table', 1),
(3, '2019_12_14_000001_create_personal_access_tokens_table', 1),
(4, '2023_06_05_195719_create_menus_table', 1),
(5, '2023_06_05_200444_create_homes_table', 1),
(6, 'create_users_table', 1),
(7, '2023_06_07_005637_2023_06_05_200444_create_homes_table', 2),
(8, '2023_06_07_010110_create_menu_table', 3),
(9, '2023_06_11_120009_create_artikels_table', 4),
(10, '2023_06_11_122750_artikel', 5),
(11, '2023_06_11_150622_artikel', 6),
(12, '2023_06_12_1435598_create_users_table', 7),
(13, '2023_06_13_143559_create_testimonis_table', 7),
(14, '2023_06_12_1435598_create_users_table copy', 8),
(15, '2023_06_13_143559_create_testimonis_table copy', 9),
(16, '2023_06_14_003616_create_user_recoms_table', 10),
(17, '2023_06_14_003616_create_user_recoms_table copy', 11),
(18, '2023_06_14_003617_create_user_recoms_table copy', 12),
(19, '2023_06_14_003618_create_user_recoms_table copy', 13),
(20, '2023_06_14_003619_create_user_recoms_table copy', 14),
(21, '2023_06_14_003620_create_user_recoms_table copy', 15),
(22, '2023_06_14_003621_create_user_recoms_table copy', 16),
(23, '2023_06_14_003622_create_user_recoms_table copy', 17),
(24, '2023_06_11_150621_artikel', 18),
(25, '2023_06_14_003623_create_user_recoms_table copy', 19),
(26, '2023_06_18_134148_create_dropships_table', 20),
(27, '2023_06_19_191919_create_keranjang_table', 21),
(28, '2023_06_19_191919_create_keranjangs_table', 22),
(29, '2023_06_19_191920_create_keranjangs_table', 23),
(30, '2023_06_19_191921_create_keranjangs_table', 24),
(31, '2023_06_19_191922_create_keranjangs_table', 25),
(32, '2023_06_19_191923_create_keranjangs_table', 26),
(33, '2023_06_19_191924_create_keranjangs_table', 27),
(34, '2023_06_19_191925_create_keranjangs_table', 28),
(35, '2023_06_21_044428_add_deleted_at_to_keranjangs', 29),
(36, '2023_06_22_174948_create_dropship_orders_table', 30),
(37, '2023_06_19_191926_create_keranjangs_table', 31),
(38, '2023_06_21_044429_add_deleted_at_to_keranjangs', 32),
(39, '2023_06_19_191927_create_keranjangs_table', 33),
(40, '2023_06_21_044430_add_deleted_at_to_keranjangs', 34),
(41, '2023_06_19_191928_create_keranjangs_table', 35);

-- --------------------------------------------------------

--
-- Table structure for table `password_resets`
--

CREATE TABLE `password_resets` (
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `token` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `password_resets`
--

INSERT INTO `password_resets` (`email`, `token`, `created_at`) VALUES
('joshua.aldo.jac58@gmail.com', '$2y$10$FkrrqsOpg1.CQ2o3j6xCUecVg0Mw16vCxPPWZG3mc4TdGDsn5rbPK', '2023-06-22 08:13:13');

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
  `expires_at` timestamp NULL DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `testimonis`
--

CREATE TABLE `testimonis` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `user_id` bigint(20) UNSIGNED NOT NULL,
  `menu_id` bigint(20) UNSIGNED NOT NULL,
  `testimoni` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `testimonis`
--

INSERT INTO `testimonis` (`id`, `user_id`, `menu_id`, `testimoni`, `created_at`, `updated_at`) VALUES
(1, 1, 1, 'Ini testimoni test 1', '2023-06-23 00:27:36', '2023-06-23 00:27:36');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `address` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `age` int(11) NOT NULL,
  `password` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `confirmPassword` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `role` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL DEFAULT 'user',
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `name`, `email`, `address`, `age`, `password`, `confirmPassword`, `role`, `created_at`, `updated_at`) VALUES
(1, 'joshua', 'joshua.aldo.jac7@gmail.com', 'jl.tanjung duren utara 2', 22, '$2y$10$cluegkjxygcGv5sVW9/I5OoyEC.MT6AV9RvF5MBwhmDEX//vhEiPG', '$2y$10$8ycNjKBXAmXWyg.eKRqOCu7TZBDxuCJT15FLi2fNXaW8NeUF4KPHe', 'dropship', '2023-06-13 09:38:04', '2023-06-23 00:28:25');

-- --------------------------------------------------------

--
-- Table structure for table `user_recoms`
--

CREATE TABLE `user_recoms` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `age` int(11) NOT NULL,
  `weight` double(8,2) NOT NULL,
  `height` double(8,2) NOT NULL,
  `gender` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `activity_level` double(8,2) NOT NULL,
  `kalori` double(8,2) DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `user_recoms`
--

INSERT INTO `user_recoms` (`id`, `age`, `weight`, `height`, `gender`, `activity_level`, `kalori`, `created_at`, `updated_at`) VALUES
(1, 20, 60.00, 155.00, 'male', 1.00, 1500.00, NULL, NULL),
(2, 25, 55.00, 160.00, 'male', 4.00, 2500.00, '2023-06-18 11:01:11', '2023-06-18 11:01:11'),
(3, 30, 50.00, 150.00, 'male', 5.00, 2485.00, '2023-06-18 11:01:11', '2023-06-18 11:01:11'),
(4, 35, 65.00, 165.00, 'male', 3.00, 2400.00, '2023-06-18 11:01:11', '2023-06-18 11:01:11'),
(5, 40, 63.00, 170.00, 'male', 2.00, 2090.00, '2023-06-18 11:01:11', '2023-06-18 11:01:11'),
(6, 45, 70.00, 168.00, 'male', 1.00, 1890.00, '2023-06-18 11:01:11', '2023-06-18 11:01:11'),
(7, 50, 58.00, 166.00, 'male', 3.00, 2140.00, '2023-06-18 11:01:11', '2023-06-18 11:01:11'),
(8, 20, 60.00, 155.00, 'female', 3.00, 2165.00, '2023-06-18 11:01:11', '2023-06-18 11:01:11'),
(9, 25, 55.00, 160.00, 'female', 2.00, 1850.00, '2023-06-18 11:01:11', '2023-06-18 11:01:11'),
(10, 30, 50.00, 150.00, 'female', 5.00, 2370.00, '2023-06-18 11:01:11', '2023-06-18 11:01:11'),
(11, 35, 65.00, 165.00, 'female', 4.00, 2430.00, '2023-06-18 11:01:11', '2023-06-18 11:01:11'),
(12, 40, 63.00, 170.00, 'female', 3.00, 2150.00, '2023-06-18 11:01:11', '2023-06-18 11:01:11'),
(13, 45, 70.00, 168.00, 'female', 1.00, 1705.00, '2023-06-18 11:01:11', '2023-06-18 11:01:11'),
(14, 50, 58.00, 166.00, 'female', 2.00, 1763.00, '2023-06-18 11:01:11', '2023-06-18 11:01:11');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `artikels`
--
ALTER TABLE `artikels`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `dropships`
--
ALTER TABLE `dropships`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `dropship_orders`
--
ALTER TABLE `dropship_orders`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `failed_jobs`
--
ALTER TABLE `failed_jobs`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `failed_jobs_uuid_unique` (`uuid`);

--
-- Indexes for table `keranjangs`
--
ALTER TABLE `keranjangs`
  ADD PRIMARY KEY (`id`),
  ADD KEY `keranjangs_user_id_foreign` (`user_id`),
  ADD KEY `keranjangs_menu_id_foreign` (`menu_id`);

--
-- Indexes for table `menus`
--
ALTER TABLE `menus`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `migrations`
--
ALTER TABLE `migrations`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `password_resets`
--
ALTER TABLE `password_resets`
  ADD PRIMARY KEY (`email`);

--
-- Indexes for table `personal_access_tokens`
--
ALTER TABLE `personal_access_tokens`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `personal_access_tokens_token_unique` (`token`),
  ADD KEY `personal_access_tokens_tokenable_type_tokenable_id_index` (`tokenable_type`,`tokenable_id`);

--
-- Indexes for table `testimonis`
--
ALTER TABLE `testimonis`
  ADD PRIMARY KEY (`id`),
  ADD KEY `testimonis_user_id_foreign` (`user_id`),
  ADD KEY `testimonis_menu_id_foreign` (`menu_id`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `users_email_unique` (`email`);

--
-- Indexes for table `user_recoms`
--
ALTER TABLE `user_recoms`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `artikels`
--
ALTER TABLE `artikels`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `dropships`
--
ALTER TABLE `dropships`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=16;

--
-- AUTO_INCREMENT for table `dropship_orders`
--
ALTER TABLE `dropship_orders`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `failed_jobs`
--
ALTER TABLE `failed_jobs`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `keranjangs`
--
ALTER TABLE `keranjangs`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `menus`
--
ALTER TABLE `menus`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;

--
-- AUTO_INCREMENT for table `migrations`
--
ALTER TABLE `migrations`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=42;

--
-- AUTO_INCREMENT for table `personal_access_tokens`
--
ALTER TABLE `personal_access_tokens`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `testimonis`
--
ALTER TABLE `testimonis`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=21;

--
-- AUTO_INCREMENT for table `user_recoms`
--
ALTER TABLE `user_recoms`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=15;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `keranjangs`
--
ALTER TABLE `keranjangs`
  ADD CONSTRAINT `keranjangs_menu_id_foreign` FOREIGN KEY (`menu_id`) REFERENCES `menus` (`id`),
  ADD CONSTRAINT `keranjangs_user_id_foreign` FOREIGN KEY (`user_id`) REFERENCES `users` (`id`);

--
-- Constraints for table `testimonis`
--
ALTER TABLE `testimonis`
  ADD CONSTRAINT `testimonis_menu_id_foreign` FOREIGN KEY (`menu_id`) REFERENCES `menus` (`id`),
  ADD CONSTRAINT `testimonis_user_id_foreign` FOREIGN KEY (`user_id`) REFERENCES `users` (`id`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
