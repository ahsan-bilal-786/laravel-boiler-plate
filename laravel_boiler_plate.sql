-- phpMyAdmin SQL Dump
-- version 4.4.14
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: May 08, 2018 at 08:16 PM
-- Server version: 5.6.26
-- PHP Version: 5.6.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `laravel_boiler_plate`
--

-- --------------------------------------------------------

--
-- Table structure for table `attachments`
--

CREATE TABLE IF NOT EXISTS `attachments` (
  `id` int(10) unsigned NOT NULL,
  `original_name` varchar(255) NOT NULL,
  `attachment_type` varchar(255) DEFAULT NULL,
  `path` varchar(500) DEFAULT NULL,
  `created_at` datetime DEFAULT NULL,
  `updated_at` datetime DEFAULT NULL
) ENGINE=InnoDB AUTO_INCREMENT=152 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `attachments`
--

INSERT INTO `attachments` (`id`, `original_name`, `attachment_type`, `path`, `created_at`, `updated_at`) VALUES
(1, '', 'vehicle_maintenance_payments', 'vehicle_maintenance_payments/701ee812789407c010d0b22a9ecc3a74011fcd4f.jpg', '2017-11-15 19:22:27', '2017-11-15 19:22:27'),
(2, '', 'vehicle_maintenance_payments', 'vehicle_maintenance_payments/af6bef8232a93b7d0ace3b6eec23c4576240a24d.jpg', '2017-11-15 19:22:27', '2017-11-15 19:22:27'),
(3, '', 'vehicle_maintenance_payments', 'vehicle_maintenance_payments/b02fa0ec907a080eb13c1e7db5d8d04ae7fa3bfc.jpg', '2017-11-15 19:22:27', '2017-11-15 19:22:27'),
(4, '', 'vehicle_maintenance_payments', 'vehicle_maintenance_payments/5fd4ddee2517891e8ab1da5d82b71308caf79d4a.jpg', '2017-11-15 19:22:55', '2017-11-15 19:22:55'),
(5, '', 'vehicle_maintenance_payments', 'vehicle_maintenance_payments/9dae6625084b9e8f10f7b0ad79247b16e0d5b133.jpg', '2017-11-15 19:22:55', '2017-11-15 19:22:55'),
(6, '', 'vehicle_maintenance_payments', 'vehicle_maintenance_payments/be4caf4bd7b8762b91890fa401370e7e1b948f19.jpg', '2017-11-15 19:22:55', '2017-11-15 19:22:55'),
(7, '', 'order_email_attachments', 'order_email_attachments/7e9d48e55ddc910fd6cff1defe8d842697651ad5.jpg', '2017-11-15 19:24:23', '2017-11-15 19:24:23'),
(8, '', 'order_email_attachments', 'order_email_attachments/ac95712320b67d422dc8e8c0c98544011ae0a482.jpg', '2017-11-15 19:24:23', '2017-11-15 19:24:23'),
(9, '', 'order_email_attachments', 'order_email_attachments/cb058e5d7dce8cc07ddd6e7ee64055a07e55a413.jpg', '2017-11-15 19:24:23', '2017-11-15 19:24:23'),
(10, '', 'order_email_attachments', 'order_email_attachments/e797cf4544208e81c1621fecaadb54ce1f9f3e07.jpg', '2017-11-15 19:34:43', '2017-11-15 19:34:43'),
(11, '', 'order_email_attachments', 'order_email_attachments/c8f08c78bfea2aa68d61c8f80f138429c971f67d.jpg', '2017-11-15 19:34:43', '2017-11-15 19:34:43'),
(12, '', 'order_email_attachments', 'order_email_attachments/86d94bb85149d413afda5d64e60d96fdf1c48e9d.jpg', '2017-11-15 19:34:43', '2017-11-15 19:34:43'),
(13, '', 'order_email_attachments', 'order_email_attachments/ec063189079d1135a61314efc5b32ba43881984f.jpg', '2017-11-15 19:35:11', '2017-11-15 19:35:11'),
(14, '', 'order_email_attachments', 'order_email_attachments/2615c52b806b92ee3de93d10421440f77d47c324.jpg', '2017-11-15 19:35:11', '2017-11-15 19:35:11'),
(15, '', 'order_email_attachments', 'order_email_attachments/f45c63b1fb328ba3999516851cf1501a714fda92.jpg', '2017-11-15 19:35:11', '2017-11-15 19:35:11'),
(16, '', 'order_email_attachments', 'order_email_attachments/2c1219f3d425bd81a3f15e3b908dca834761fedd.jpg', '2017-11-15 19:35:26', '2017-11-15 19:35:26'),
(17, '', 'order_email_attachments', 'order_email_attachments/ef4e9cbc15f56fa01dd3c9f69e68a1537c4edeba.jpg', '2017-11-15 19:35:26', '2017-11-15 19:35:26'),
(18, '', 'order_email_attachments', 'order_email_attachments/13a566e19a12298c02942263f711fba894194b42.jpg', '2017-11-15 19:35:26', '2017-11-15 19:35:26'),
(19, '', 'order_email_attachments', 'order_email_attachments/ad81a662ecd1dff5806644c5baf5fc13f8cd526b.jpg', '2017-11-15 19:35:59', '2017-11-15 19:35:59'),
(20, '', 'order_email_attachments', 'order_email_attachments/270d55b03994e529bf337ff0871513f763b586f3.jpg', '2017-11-15 19:35:59', '2017-11-15 19:35:59'),
(21, '', 'order_email_attachments', 'order_email_attachments/89070aca62fd371fc627da13632c5ada2f6b57e6.jpg', '2017-11-15 19:35:59', '2017-11-15 19:35:59'),
(22, '', 'order_other_attachments', 'order_other_attachments/92a8b65f37444a6c82f6f0749b5652c013d37065.jpg', '2017-11-15 19:35:59', '2017-11-15 19:35:59'),
(23, '', 'order_other_attachments', 'order_other_attachments/7a556e525a47f00c42d9bed0376b578fe4fe8544.jpg', '2017-11-15 19:35:59', '2017-11-15 19:35:59'),
(24, '', 'order_other_attachments', 'order_other_attachments/670de8c3a36cdbd1994a435e96b56b2c11c1c5a8.jpg', '2017-11-15 19:35:59', '2017-11-15 19:35:59'),
(25, '', 'order_email_attachments', 'order_email_attachments/1fb3fc8987801d8ccaa253ab8ae3f27da6b1915e.jpg', '2017-11-15 19:36:54', '2017-11-15 19:36:54'),
(26, '', 'order_email_attachments', 'order_email_attachments/e9bcff6f9d77d02119004ccb82466e18cf9ad69f.jpg', '2017-11-15 19:36:54', '2017-11-15 19:36:54'),
(27, '', 'order_email_attachments', 'order_email_attachments/09cf5d06129a8dfa5aa59f634337513b4c089baf.jpg', '2017-11-15 19:36:54', '2017-11-15 19:36:54'),
(28, '', 'order_other_attachments', 'order_other_attachments/e5507313c1dc1a798f64896085069f986569e11d.jpg', '2017-11-15 19:36:54', '2017-11-15 19:36:54'),
(29, '', 'order_other_attachments', 'order_other_attachments/a796a688435c7d0dedd5e42be962afd40f4acfa7.jpg', '2017-11-15 19:36:54', '2017-11-15 19:36:54'),
(30, '', 'order_other_attachments', 'order_other_attachments/1997cb3a5d483e933aa988a4bf81ea2af99fdb4c.jpg', '2017-11-15 19:36:54', '2017-11-15 19:36:54'),
(31, '', 'order_email_attachments', 'order_email_attachments/ea66c0272a7f1afb7d1de143d46d113b232514e9.jpg', '2017-11-15 19:37:24', '2017-11-15 19:37:24'),
(32, '', 'order_email_attachments', 'order_email_attachments/9c6b5b70b68ae2667dd065471bf975a3637b980b.jpg', '2017-11-15 19:37:24', '2017-11-15 19:37:24'),
(33, '', 'order_email_attachments', 'order_email_attachments/3f2c1620ff201d5e0a2b7709556e0a619d8f90d2.jpg', '2017-11-15 19:37:24', '2017-11-15 19:37:24'),
(34, '', 'order_other_attachments', 'order_other_attachments/e420ee164e8d31f9865844538c51eab657e359cd.jpg', '2017-11-15 19:37:24', '2017-11-15 19:37:24'),
(35, '', 'order_other_attachments', 'order_other_attachments/29c938604b31fa99ac939751af2505b964b444b1.jpg', '2017-11-15 19:37:24', '2017-11-15 19:37:24'),
(36, '', 'order_other_attachments', 'order_other_attachments/078476f0b900a62166495becf9e99259f357f151.jpg', '2017-11-15 19:37:24', '2017-11-15 19:37:24'),
(37, '', 'order_email_attachments', 'order_email_attachments/46de4eaa34517b6e20bb0f6412c3e6dfd5acff4e.jpg', '2017-11-15 19:37:33', '2017-11-15 19:37:33'),
(38, '', 'order_email_attachments', 'order_email_attachments/3125107ece42167b7f2e8824efe4c254839b771e.jpg', '2017-11-15 19:37:33', '2017-11-15 19:37:33'),
(39, '', 'order_email_attachments', 'order_email_attachments/cb06a98242c2be0f555eaede33b62646022672a1.jpg', '2017-11-15 19:37:33', '2017-11-15 19:37:33'),
(40, '', 'order_other_attachments', 'order_other_attachments/ba66d15a7c5018e6c47906f149aa48752851af3e.jpg', '2017-11-15 19:37:33', '2017-11-15 19:37:33'),
(41, '', 'order_other_attachments', 'order_other_attachments/edaa6c55ae04627e68b4b62e11e8c01ebe63835b.jpg', '2017-11-15 19:37:33', '2017-11-15 19:37:33'),
(42, '', 'order_other_attachments', 'order_other_attachments/0dcca246278031c7ca711dfe4fa619a14539cf05.jpg', '2017-11-15 19:37:33', '2017-11-15 19:37:33'),
(43, '', 'order_email_attachments', 'order_email_attachments/ae116cc95287cb70e98a40fcb126c6613186b77d.jpg', '2017-11-15 19:46:41', '2017-11-15 19:46:41'),
(44, '', 'order_email_attachments', 'order_email_attachments/b630f3fb8f889b79784ead7c7fc2160661abff08.jpg', '2017-11-15 19:46:41', '2017-11-15 19:46:41'),
(45, '', 'order_other_attachments', 'order_other_attachments/3710e9be3bf0d1bcecf0f8243dacf917c71f605c.jpg', '2017-11-15 19:46:41', '2017-11-15 19:46:41'),
(46, '', 'order_other_attachments', 'order_other_attachments/07ca1d2ec81f5b827423a910f7ebe9b81358c296.jpg', '2017-11-15 19:46:41', '2017-11-15 19:46:41'),
(47, '', 'order_other_attachments', 'order_other_attachments/1045947911c414f4313fc22147378c35193a39d2.jpg', '2017-11-15 19:46:41', '2017-11-15 19:46:41'),
(48, '', 'order_other_attachments', 'order_other_attachments/1a5a0eb24b20a0bc4b287bb2d030438b6406f989.jpg', '2017-11-15 19:46:41', '2017-11-15 19:46:41'),
(49, '', 'product_extra_documentation', 'product_extra_documentation/c63d9e6e570950c01e58dc89a5d7e9637b2369a2.jpg', '2017-11-15 21:10:00', '2017-11-15 21:10:00'),
(50, '', 'product_extra_documentation', 'product_extra_documentation/22e30136141886c5fc71d2465ae11675a3844e0d.jpg', '2017-11-15 21:10:00', '2017-11-15 21:10:00'),
(51, '', 'product_extra_documentation', 'product_extra_documentation/480093e490400506ced04054823c3b99797a4e75.jpg', '2017-11-15 21:10:00', '2017-11-15 21:10:00'),
(52, '', 'product_extra_documentation', 'product_extra_documentation/ac9a10baa44591911ff1d214d48b584a47d2039d.jpg', '2017-11-15 21:10:42', '2017-11-15 21:10:42'),
(53, '', 'product_extra_documentation', 'product_extra_documentation/859b9a6f857294a43e76e3b7e10a7464b67011a1.jpg', '2017-11-15 21:10:42', '2017-11-15 21:10:42'),
(54, '', 'product_extra_documentation', 'product_extra_documentation/cc5e3b15efdcac19081a8b15e860cfcbffc4d6b9.jpg', '2017-11-15 21:10:42', '2017-11-15 21:10:42'),
(55, '', 'product_extra_documentation', 'product_extra_documentation/4c2ddf8dc1ea410ae4764c63e3570f22d2208e41.jpg', '2017-11-15 21:12:05', '2017-11-15 21:12:05'),
(56, '', 'product_extra_documentation', 'product_extra_documentation/606fad8f7c9de7fed0a8cdfcebaf30795ffcb2b5.jpg', '2017-11-15 21:12:05', '2017-11-15 21:12:05'),
(57, '', 'product_extra_documentation', 'product_extra_documentation/e9e19685a7df0dffd07bbdd3851b631ca4536725.jpg', '2017-11-15 21:12:05', '2017-11-15 21:12:05'),
(58, '', 'product_extra_documentation', 'product_extra_documentation/11f34374c6c9438698003ed81d0be006a899fdbc.jpg', '2017-11-15 21:12:13', '2017-11-15 21:12:13'),
(59, '', 'product_extra_documentation', 'product_extra_documentation/178b2737b8559e81afa59696e95ddb665ddb928f.jpg', '2017-11-15 21:12:13', '2017-11-15 21:12:13'),
(60, '', 'product_extra_documentation', 'product_extra_documentation/cbca51f8891e4268ad952dbbee284015ed4becdd.jpg', '2017-11-15 21:12:13', '2017-11-15 21:12:13'),
(61, '', 'product_extra_documentation', 'product_extra_documentation/c077dbd0b3fcc0bbc0d4614755860eb774a1c249.jpg', '2017-11-15 21:17:52', '2017-11-15 21:17:52'),
(62, '', 'product_extra_documentation', 'product_extra_documentation/bc13278cbb09a7e8a273759053b02f9c55110100.jpg', '2017-11-15 21:17:52', '2017-11-15 21:17:52'),
(63, '', 'product_extra_documentation', 'product_extra_documentation/eeb3a2319a6b771ba2a16135f377352011b8eebd.jpg', '2017-11-15 21:17:52', '2017-11-15 21:17:52'),
(64, '', 'order_email_attachments', 'order_email_attachments/b951cc22a28277a5955e59f3e199a3db5a325fc2.jpg', '2017-11-19 12:01:00', '2017-11-19 12:01:00'),
(65, '', 'order_other_attachments', 'order_other_attachments/9d77b5e380e241182e495354aa592d077ac7ddc5.jpg', '2017-11-19 12:01:00', '2017-11-19 12:01:00'),
(67, '', 'order_other_attachments', 'order_other_attachments/308ad2ee844a473b72816c2893aae8cbecd2beed.jpg', '2017-11-19 12:01:24', '2017-11-19 12:01:24'),
(69, '', 'order_other_attachments', 'order_other_attachments/e2b3a94ef148d9080c3ef33d507930386b353600.jpg', '2017-11-19 12:01:49', '2017-11-19 12:01:49'),
(70, '', 'order_other_attachments', 'order_other_attachments/fc7baf898fb4257ace1e7562be0874dd8c6ab22b.jpg', '2017-11-19 12:02:14', '2017-11-19 12:02:14'),
(72, '', 'order_other_attachments', 'order_other_attachments/f9c7403be8b059c779078fcfafabb35252e6729f.jpg', '2017-11-19 12:03:24', '2017-11-19 12:03:24'),
(73, '', 'order_other_attachments', 'order_other_attachments/bd2142793857e1188a468cc99e707286d34fe38f.jpg', '2017-11-19 12:03:24', '2017-11-19 12:03:24'),
(74, '', 'order_other_attachments', 'order_other_attachments/fdc982c796255565d9f95898307cb5cd3adf832c.jpg', '2017-11-19 12:03:38', '2017-11-19 12:03:38'),
(75, '', 'order_other_attachments', 'order_other_attachments/58f7e31b728287f62dd33bd16e02e8d8d26fe18a.jpg', '2017-11-19 12:03:38', '2017-11-19 12:03:38'),
(76, '', 'order_other_attachments', 'order_other_attachments/4dcc73d832ff56b1a6e7353787a2bf41b6b6efc9.jpg', '2017-11-19 12:03:38', '2017-11-19 12:03:38'),
(77, '', 'order_other_attachments', 'order_other_attachments/ebeda5ad76059a0fc08af849b2831840dfc1e1d8.jpg', '2017-11-19 12:04:06', '2017-11-19 12:04:06'),
(78, '', 'order_other_attachments', 'order_other_attachments/516f2153d80d13dbae0b6e080ab18b8c2c68dfb4.jpg', '2017-11-19 12:05:10', '2017-11-19 12:05:10'),
(79, '', 'order_other_attachments', 'order_other_attachments/7ffd5f46a2f650f5f1446d9aa60aa4f48f0cd1c3.jpg', '2017-11-19 12:05:10', '2017-11-19 12:05:10'),
(80, '', 'order_other_attachments', 'order_other_attachments/c993ecdc319969f6e87738e4cb135e49418e8fe7.jpg', '2017-11-19 12:05:10', '2017-11-19 12:05:10'),
(81, '', 'order_other_attachments', 'order_other_attachments/567f2f289394309aac0bb1f6bef33f7b8f646ebc.jpg', '2017-11-19 12:09:20', '2017-11-19 12:09:20'),
(82, '', 'order_other_attachments', 'order_other_attachments/6a59a193a2707b99fde129624c5b7edd75f6581e.jpg', '2017-11-19 12:09:20', '2017-11-19 12:09:20'),
(83, '', 'order_other_attachments', 'order_other_attachments/1a93480bdce167e67c4676849c342c8e3082545a.jpg', '2017-11-19 12:09:20', '2017-11-19 12:09:20'),
(84, '', 'order_other_attachments', 'order_other_attachments/96ef2c315732d05c73c68af86fbb78e68c6b0a0d.jpg', '2017-11-19 12:09:55', '2017-11-19 12:09:55'),
(85, '', 'order_other_attachments', 'order_other_attachments/b6a52ae5341792771993186c96b2ec78d7befcc5.jpg', '2017-11-19 12:09:55', '2017-11-19 12:09:55'),
(86, '', 'order_other_attachments', 'order_other_attachments/cee14d29fad84d1282685310495cd3b9253e1ed3.jpg', '2017-11-19 12:09:55', '2017-11-19 12:09:55'),
(88, '', 'order_other_attachments', 'order_other_attachments/73db4f17b4844f1825ef711aa974bcf930e39de2.jpg', '2017-11-19 12:10:07', '2017-11-19 12:10:07'),
(89, '', 'order_other_attachments', 'order_other_attachments/2cae5c442ee2564401d5f78daca793905373cae3.jpg', '2017-11-19 12:10:07', '2017-11-19 12:10:07'),
(91, '', 'order_email_attachments', 'order_email_attachments/8ff74064abb4ce45f9272e1534d32ebf87f8e4f3.jpg', '2017-11-19 12:10:29', '2017-11-19 12:10:29'),
(92, '', 'product_extra_documentation', 'product_extra_documentation/ccb4e4eb515b26e1c91fc9dac5966ef50e21b00c.jpg', '2017-11-19 12:11:37', '2017-11-19 12:11:37'),
(93, '', 'product_extra_documentation', 'product_extra_documentation/c25f9745e9ec75d09bca8aeaf1544d9159da34d5.jpg', '2017-11-19 12:13:50', '2017-11-19 12:13:50'),
(94, '', 'product_extra_documentation', 'product_extra_documentation/325cf4a90cb771166130461d5e70e3a169d6b031.jpg', '2017-11-19 12:13:50', '2017-11-19 12:13:50'),
(95, '', 'product_extra_documentation', 'product_extra_documentation/7c26b8efda2e802998d0141a96447b07b4663cb4.jpg', '2017-11-19 12:13:50', '2017-11-19 12:13:50'),
(96, '', 'product_extra_documentation', 'product_extra_documentation/4144dab99c2d99814f452de6665bdfde361f09a6.jpg', '2017-11-19 12:14:03', '2017-11-19 12:14:03'),
(97, '', 'product_extra_documentation', 'product_extra_documentation/725992a229836909d3abc673c703ac61c8135527.jpg', '2017-11-19 12:14:03', '2017-11-19 12:14:03'),
(98, '', 'product_extra_documentation', 'product_extra_documentation/c431b5772da427231e8f15a3eca1a40e685763fe.jpg', '2017-11-19 12:14:03', '2017-11-19 12:14:03'),
(99, '', 'vehicle_maintenance_payments', 'vehicle_maintenance_payments/1cb67d66e9cd5208c3546902cf89542a27b3569f.jpg', '2017-11-19 12:33:28', '2017-11-19 12:33:28'),
(100, '', 'vehicle_maintenance_payments', 'vehicle_maintenance_payments/f80ac741b06e329e19d2a861207676f6f1ff4f82.jpg', '2017-11-19 12:33:28', '2017-11-19 12:33:28'),
(101, '', 'vehicle_maintenance_payments', 'vehicle_maintenance_payments/278731d51bd11860f7b428402648e4024cc8f237.jpg', '2017-11-19 12:33:41', '2017-11-19 12:33:41'),
(102, '', 'vehicle_maintenance_payments', 'vehicle_maintenance_payments/74abff0865524914cade10c9b04b9cb2f81b7776.jpg', '2017-11-19 14:58:56', '2017-11-19 14:58:56'),
(103, '', 'vehicle_maintenance_payments', 'vehicle_maintenance_payments/c4c86755a88c809503dc3bcee55d7bb90acd8cdf.jpg', '2017-11-19 14:59:39', '2017-11-19 14:59:39'),
(104, '', 'vehicle_maintenance_payments', 'vehicle_maintenance_payments/e0401ecac27493861505950aff41b1942178d708.jpg', '2017-11-19 14:59:54', '2017-11-19 14:59:54'),
(105, '', 'vehicle_maintenance_payments', 'vehicle_maintenance_payments/3c8a32c60ae2eafe34e282d770551fd923f2d395.jpg', '2017-11-19 15:00:07', '2017-11-19 15:00:07'),
(106, '', 'vehicle_maintenance_payments', 'vehicle_maintenance_payments/93ae5f58f5dc0c4f14d4796503f0af56e247d07a.jpg', '2017-11-19 15:00:07', '2017-11-19 15:00:07'),
(107, '', 'vehicle_maintenance_payments', 'vehicle_maintenance_payments/2e81ed0ff26a9768843c3d2c82b0edd9421b2466.jpg', '2017-11-19 15:00:07', '2017-11-19 15:00:07'),
(108, '', 'vehicle_maintenance_payments', 'vehicle_maintenance_payments/3c8a32c60ae2eafe34e282d770551fd923f2d395.jpg', '2017-11-19 15:00:07', '2017-11-19 15:00:07'),
(109, '', 'vehicle_maintenance_payments', 'vehicle_maintenance_payments/93ae5f58f5dc0c4f14d4796503f0af56e247d07a.jpg', '2017-11-19 15:00:07', '2017-11-19 15:00:07'),
(110, '', 'vehicle_maintenance_payments', 'vehicle_maintenance_payments/df132ee8c8bc244a134b537ebb4930845016e3bf.jpg', '2017-11-19 15:00:07', '2017-11-19 15:00:07'),
(111, '', 'vehicle_maintenance_payments', 'vehicle_maintenance_payments/76bd7ca0432893ad7ccc76b7b362c8c6778f3c19.jpg', '2017-11-19 15:05:39', '2017-11-19 15:05:39'),
(112, '', 'vehicle_maintenance_payments', 'vehicle_maintenance_payments/5ecbb10b3254e2630dd6b5e792a23a618a6d3330.jpg', '2017-11-19 15:05:39', '2017-11-19 15:05:39'),
(113, '', 'vehicle_maintenance_payments', 'vehicle_maintenance_payments/76bd7ca0432893ad7ccc76b7b362c8c6778f3c19.jpg', '2017-11-19 15:05:39', '2017-11-19 15:05:39'),
(114, '', 'vehicle_maintenance_payments', 'vehicle_maintenance_payments/f1026274834685ec6f176a4082792c95bd134f1a.jpg', '2017-11-19 15:09:08', '2017-11-19 15:09:08'),
(115, '', 'vehicle_maintenance_payments', 'vehicle_maintenance_payments/71056ddbda329f36ad50ae4058789b76b6dd3dec.jpg', '2017-11-19 15:09:08', '2017-11-19 15:09:08'),
(116, '', 'vehicle_maintenance_payments', 'vehicle_maintenance_payments/a3fe871dd1e01150a67531305334bfc65e49b6ff.jpg', '2017-11-19 15:09:08', '2017-11-19 15:09:08'),
(121, '', 'vehicle_maintenance_payments', 'vehicle_maintenance_payments/c80c2f77dcea48dedc0b8b411ae1945cd784d457.jpg', '2017-11-19 15:24:22', '2017-11-19 15:24:22'),
(122, '', 'vehicle_maintenance_payments', 'vehicle_maintenance_payments/a48bfc1192aff0f791ac5d97dbcebb7ee3b6f0c8.jpg', '2017-11-19 15:24:22', '2017-11-19 15:24:22'),
(123, '', 'vehicle_maintenance_payments', 'vehicle_maintenance_payments/5680e71f7fd3025c3eb09a8d4944c21cd42882f7.jpg', '2017-11-19 15:24:32', '2017-11-19 15:24:32'),
(124, '', 'vehicle_maintenance_payments', 'vehicle_maintenance_payments/6b81d057ee46a5bbe1f558b23cedf0b94c2ca7b6.jpg', '2017-11-19 15:24:41', '2017-11-19 15:24:41'),
(125, 'kaitlin-gentry-1252.jpg', 'order_other_attachments', 'order_other_attachments/4a035a7d934cdf4eacf18fcf0e2cb7b41bec6bee.jpg', '2017-11-22 22:03:53', '2017-11-22 22:03:53'),
(126, 'naturecorn.jpg', 'vehicle_maintenance_payments', 'vehicle_maintenance_payments/640bdd9dfdbee072488922687eac940025b84733.jpg', '2017-11-22 22:09:07', '2017-11-22 22:09:07'),
(127, 'peppers.jpg', 'vehicle_maintenance_payments', 'vehicle_maintenance_payments/0a3b0042cc7821d9b712f7db63f9f1057ca1630d.jpg', '2017-11-22 22:09:34', '2017-11-22 22:09:34'),
(128, 'naturecorn.jpg', 'product_extra_documentation', 'product_extra_documentation/813bae39fe13f1ed74e63d8c9704570866b1ad0e.jpg', '2017-11-23 15:32:17', '2017-11-23 15:32:17'),
(129, '75a7f769305a48fb7f25820b917241a1b90d0c04.jpg', 'profile_photo', 'user_profile/0fc98cfb8f08f0bc7d41c25eca75ea0a8d6a868e.jpg', '2017-11-29 13:28:18', '2017-11-29 13:28:18'),
(130, '75a7f769305a48fb7f25820b917241a1b90d0c04.jpg', 'order_comments_attachments', 'order_comments_attachments/a84d9a22a47355419233b0df20f40be5952908aa.jpg', '2017-11-29 13:46:14', '2017-11-29 13:46:14'),
(131, '17a080cc28b8ac023f687549fe3bef27ed557a58.jpg', 'order_comments_attachments', 'order_comments_attachments/513c73c0433b187501ec0d35451b40f9908a981d.jpg', '2017-11-29 13:46:14', '2017-11-29 13:46:14'),
(132, 'IMG_9359.jpg', 'profile_photo', 'user_profile/cab35be0d49dd3fea627b96bbb0384951a008625.jpg', '2017-12-13 09:17:30', '2017-12-13 09:17:30'),
(134, 'RE PICK UP   LCL export request MEDICAL LATEX SENAI  4530-0960-712.011  pick up on 26122017.msg', 'order_email_attachments', 'order_email_attachments/a9c44b305cd645575392a58533c2bb197ca631de.msg', '2017-12-15 03:28:04', '2017-12-15 03:28:04'),
(135, 'SHIPPING MARK JALEN.docx', 'order_other_attachments', 'order_other_attachments/410bf5d163ae970240e31be408715aa464b7c523.docx', '2017-12-15 03:28:04', '2017-12-15 03:28:04'),
(136, 'PICK UP   LCL export request MEDICAL LATEX SENAI  4530-0960-712.011  pick up on 26122017.msg', 'order_email_attachments', 'order_email_attachments/a34269cdd468156027bcd84cb6b1b7ada99b3e27.msg', '2017-12-15 03:28:39', '2017-12-15 03:28:39'),
(137, 'PICK UP   LCL export request MEDICAL LATEX SENAI  4530-0960-712.011  pick up on 26122017.msg', 'order_email_attachments', 'order_email_attachments/331b63428a9eb4412eda13651c0ab6ccd61698a2.msg', '2017-12-15 03:28:50', '2017-12-15 03:28:50'),
(138, 'colorschememapping.xml', 'order_email_attachments', 'order_email_attachments/c2dacea626649056cf9496d1f27186157d493e2e.xml', '2017-12-15 04:23:47', '2017-12-15 04:23:47'),
(139, 'filelist.xml', 'order_email_attachments', 'order_email_attachments/69c45325260cf56d7afa88fe79fc22b46f63e1f3.xml', '2017-12-15 04:23:47', '2017-12-15 04:23:47'),
(140, 'image001.jpg', 'order_email_attachments', 'order_email_attachments/fc3c5f115da609195b32011e9637c96b48d0c630.jpg', '2017-12-15 04:23:47', '2017-12-15 04:23:47'),
(141, 'image002.jpg', 'order_email_attachments', 'order_email_attachments/cdefdc1c1eb7650e0803f5c3af59820f560ac236.jpg', '2017-12-15 04:23:47', '2017-12-15 04:23:47'),
(142, 'themedata.thmx', 'order_email_attachments', 'order_email_attachments/6f5561ffadd211a20aaf3469e954573555222768.thmx', '2017-12-15 04:23:47', '2017-12-15 04:23:47'),
(148, 'hscargo.png', 'profile_photo', 'user_profile/a7367826ddcca8844846dacaca469bdddc1238e7.png', '2018-01-02 08:24:10', '2018-01-02 08:24:10'),
(149, 'WhatsApp Image 2017-08-20 at 12.39.39.jpeg', 'profile_photo', 'user_profile/a2e26fa84add2824e1933f90f2ef6939d6d45dbe.jpeg', '2018-01-02 08:28:43', '2018-01-02 08:28:43'),
(150, '1.png', 'driver_advance_payments', 'driver_advance_payments/2249ce48a684a323e6bcbcd4c29d9e1541b2023b.png', '2018-04-04 20:44:25', '2018-04-04 20:44:25'),
(151, 'photo-1437652010333-fbf2cd02a4f8.jpg', 'profile_photo', 'user_profile/a09b5827d8cd1809e0c2f7ea2c8df9ce93568d22.jpg', '2018-05-08 16:54:07', '2018-05-08 16:54:07');

-- --------------------------------------------------------

--
-- Table structure for table `migrations`
--

CREATE TABLE IF NOT EXISTS `migrations` (
  `id` int(10) unsigned NOT NULL,
  `migration` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `batch` int(11) NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=4 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `migrations`
--

INSERT INTO `migrations` (`id`, `migration`, `batch`) VALUES
(1, '2014_10_12_000000_create_users_table', 1),
(2, '2014_10_12_100000_create_password_resets_table', 1),
(3, '2017_08_10_165309_entrust_setup_tables', 1);

-- --------------------------------------------------------

--
-- Table structure for table `password_resets`
--

CREATE TABLE IF NOT EXISTS `password_resets` (
  `email` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `token` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `permissions`
--

CREATE TABLE IF NOT EXISTS `permissions` (
  `id` int(10) unsigned NOT NULL,
  `name` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `display_name` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `description` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB AUTO_INCREMENT=9 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `permissions`
--

INSERT INTO `permissions` (`id`, `name`, `display_name`, `description`, `created_at`, `updated_at`) VALUES
(1, 'role-list', 'Display Role Listing', 'See only Listing Of Role', '2017-08-10 12:42:04', '2017-08-10 12:42:04'),
(2, 'role-create', 'Create Role', 'Create New Role', '2017-08-10 12:42:04', '2017-08-10 12:42:04'),
(3, 'role-edit', 'Edit Role', 'Edit Role', '2017-08-10 12:42:04', '2017-08-10 12:42:04'),
(4, 'role-delete', 'Delete Role', 'Delete Role', '2017-08-10 12:42:04', '2017-08-10 12:42:04'),
(5, 'item-list', 'Display Item Listing', 'See only Listing Of Item', '2017-08-10 12:42:04', '2017-08-10 12:42:04'),
(6, 'item-create', 'Create Item', 'Create New Item', '2017-08-10 12:42:04', '2017-08-10 12:42:04'),
(7, 'item-edit', 'Edit Item', 'Edit Item', '2017-08-10 12:42:04', '2017-08-10 12:42:04'),
(8, 'item-delete', 'Delete Item', 'Delete Item', '2017-08-10 12:42:04', '2017-08-10 12:42:04');

-- --------------------------------------------------------

--
-- Table structure for table `permission_role`
--

CREATE TABLE IF NOT EXISTS `permission_role` (
  `permission_id` int(10) unsigned NOT NULL,
  `role_id` int(10) unsigned NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `posts`
--

CREATE TABLE IF NOT EXISTS `posts` (
  `id` int(11) NOT NULL,
  `name` varchar(255) NOT NULL,
  `content` text,
  `featured_image` int(11) DEFAULT NULL,
  `created_at` datetime NOT NULL,
  `updated_at` datetime NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=5 DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `roles`
--

CREATE TABLE IF NOT EXISTS `roles` (
  `id` int(10) unsigned NOT NULL,
  `name` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `display_name` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `description` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB AUTO_INCREMENT=8 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `roles`
--

INSERT INTO `roles` (`id`, `name`, `display_name`, `description`, `created_at`, `updated_at`) VALUES
(1, 'admin', 'SuperAdmin', 'admin is allowed to manage and edit other users', '2017-08-10 12:55:06', '2017-08-10 12:55:06'),
(7, 'editor', 'Editor', 'Editor Group', '2017-08-10 12:56:52', '2017-08-10 12:56:52');

-- --------------------------------------------------------

--
-- Table structure for table `role_user`
--

CREATE TABLE IF NOT EXISTS `role_user` (
  `user_id` int(10) unsigned NOT NULL,
  `role_id` int(10) unsigned NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `role_user`
--

INSERT INTO `role_user` (`user_id`, `role_id`) VALUES
(1, 1);

-- --------------------------------------------------------

--
-- Table structure for table `settings`
--

CREATE TABLE IF NOT EXISTS `settings` (
  `id` int(11) NOT NULL,
  `key` varchar(255) NOT NULL,
  `value` text NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=7 DEFAULT CHARSET=utf8;

--
-- Dumping data for table `settings`
--

INSERT INTO `settings` (`id`, `key`, `value`) VALUES
(1, 'order_id_start', '31031'),
(2, 'tel_1', '99867tgghghj'),
(3, 'tel_2', '9uiljjpoj-kopkk-0'),
(4, 'fax_1', '0-i-0koiopk;lk;l'),
(5, 'fax_2', '09iokjl;kpokpokp'),
(6, 'address', 'Attia Martin RD.');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE IF NOT EXISTS `users` (
  `id` int(10) unsigned NOT NULL,
  `name` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `password` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `address` varchar(500) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `contact_no` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `contact_no_2` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `photo_id` int(10) DEFAULT NULL,
  `is_active` int(10) DEFAULT NULL,
  `remember_token` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_by` int(11) DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `deleted_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB AUTO_INCREMENT=186 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `name`, `email`, `password`, `address`, `contact_no`, `contact_no_2`, `photo_id`, `is_active`, `remember_token`, `created_by`, `created_at`, `updated_at`, `deleted_at`) VALUES
(1, 'SuperAdmin', 'admin@admin.com', '$2y$10$JoaN/1DAPxMjCYU3eRXmhOXPI7jph61iUYS6KBIby2kfgGUxRrrS6', NULL, '03136168282', NULL, 151, NULL, '3N892dcfgpvNFZ7oBNCt1CHbUqwhFXyedP6sbXoddntD1oDrrtGIgF4MVr47', NULL, '2017-08-10 13:22:10', '2018-05-08 11:54:08', NULL);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `attachments`
--
ALTER TABLE `attachments`
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
  ADD KEY `password_resets_email_index` (`email`);

--
-- Indexes for table `permissions`
--
ALTER TABLE `permissions`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `permissions_name_unique` (`name`);

--
-- Indexes for table `permission_role`
--
ALTER TABLE `permission_role`
  ADD PRIMARY KEY (`permission_id`,`role_id`),
  ADD KEY `permission_role_role_id_foreign` (`role_id`);

--
-- Indexes for table `posts`
--
ALTER TABLE `posts`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `roles`
--
ALTER TABLE `roles`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `roles_name_unique` (`name`);

--
-- Indexes for table `role_user`
--
ALTER TABLE `role_user`
  ADD PRIMARY KEY (`user_id`,`role_id`),
  ADD KEY `role_user_role_id_foreign` (`role_id`);

--
-- Indexes for table `settings`
--
ALTER TABLE `settings`
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
-- AUTO_INCREMENT for table `attachments`
--
ALTER TABLE `attachments`
  MODIFY `id` int(10) unsigned NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=152;
--
-- AUTO_INCREMENT for table `migrations`
--
ALTER TABLE `migrations`
  MODIFY `id` int(10) unsigned NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=4;
--
-- AUTO_INCREMENT for table `permissions`
--
ALTER TABLE `permissions`
  MODIFY `id` int(10) unsigned NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=9;
--
-- AUTO_INCREMENT for table `posts`
--
ALTER TABLE `posts`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=5;
--
-- AUTO_INCREMENT for table `roles`
--
ALTER TABLE `roles`
  MODIFY `id` int(10) unsigned NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=8;
--
-- AUTO_INCREMENT for table `settings`
--
ALTER TABLE `settings`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=7;
--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` int(10) unsigned NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=186;
--
-- Constraints for dumped tables
--

--
-- Constraints for table `permission_role`
--
ALTER TABLE `permission_role`
  ADD CONSTRAINT `permission_role_permission_id_foreign` FOREIGN KEY (`permission_id`) REFERENCES `permissions` (`id`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `permission_role_role_id_foreign` FOREIGN KEY (`role_id`) REFERENCES `roles` (`id`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `role_user`
--
ALTER TABLE `role_user`
  ADD CONSTRAINT `role_user_role_id_foreign` FOREIGN KEY (`role_id`) REFERENCES `roles` (`id`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `role_user_user_id_foreign` FOREIGN KEY (`user_id`) REFERENCES `users` (`id`) ON DELETE CASCADE ON UPDATE CASCADE;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
