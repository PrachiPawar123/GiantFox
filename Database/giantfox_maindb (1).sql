-- phpMyAdmin SQL Dump
-- version 4.9.1
-- https://www.phpmyadmin.net/
--
-- Host: localhost:3306
-- Generation Time: Jul 13, 2025 at 01:06 AM
-- Server version: 5.7.31
-- PHP Version: 5.6.40

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `giantfox_maindb`
--
CREATE DATABASE IF NOT EXISTS `giantfox_maindb` DEFAULT CHARACTER SET utf8 COLLATE utf8_general_ci;
USE `giantfox_maindb`;

-- --------------------------------------------------------

--
-- Table structure for table `add_to_temp_cart`
--

DROP TABLE IF EXISTS `add_to_temp_cart`;
CREATE TABLE IF NOT EXISTS `add_to_temp_cart` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `temp_user_id` text NOT NULL,
  `p_id` int(11) NOT NULL,
  `quantity` text NOT NULL,
  `color_id` int(11) NOT NULL,
  `size_id` int(11) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=392 DEFAULT CHARSET=utf8;

--
-- Dumping data for table `add_to_temp_cart`
--

INSERT INTO `add_to_temp_cart` (`id`, `temp_user_id`, `p_id`, `quantity`, `color_id`, `size_id`) VALUES
(82, '53fd655b005b5e6470d6bae0d355a419740b9905', 50, '2', 2, 30),
(83, '53fd655b005b5e6470d6bae0d355a419740b9905', 50, '1', 2, 26),
(89, '53fd655b005b5e6470d6bae0d355a419740b9905', 43, '2', 2, 26),
(90, '53fd655b005b5e6470d6bae0d355a419740b9905', 48, '2', 2, 26),
(106, 'cca9a0bf71f9de56f69ab00704e98a75cf585aad', 43, '1', 2, 26),
(112, '1bce92870a008c67208ab88eed9182fd70fbf14a', 51, '1', 2, 26),
(114, '1bce92870a008c67208ab88eed9182fd70fbf14a', 43, '5', 2, 26),
(117, '589d31f9b2e3b1ab6015374dcc8209556ac780e2', 45, '3', 2, 29),
(120, '53fd655b005b5e6470d6bae0d355a419740b9905', 51, '3', 2, 26),
(150, 'd7c458bc4238c4aef2f0968d6fef96f5ec80bd49', 45, '1', 2, 26),
(177, '1cd7affcb9a1a93448288b78b67fc4376486289e', 51, '1', 2, 28),
(180, '594504702ff1af3cf7b3aff5cd3b4dfebf7b98b3', 45, '1', 2, 27),
(184, '39c8cd1ef2af3650555542a9e6493af8aa8a5839', 45, '1', 2, 26),
(185, 'e991e8715a64b4d9598043620a8f9cbb348267fe', 45, '1', 2, 28),
(188, '3d5514a2baf702dc79051ceebc1404dd7ab5c7a9', 51, '1', 2, 26),
(192, '5068b9c6d22a1c44a8522129e08132797e916cb6', 46, '2', 2, 26),
(204, '8711abedf0c13906028254117693c3e577b7e897', 43, '1', 26, 26),
(207, '8', 45, '1', 2, 26),
(212, '16e3899f592567cc4de1877d21446e54af86b865', 43, '1', 26, 26),
(213, 'b6701e0365fa4cbc253bda48c365a97107e1e152', 48, '1', 2, 29),
(214, 'b6701e0365fa4cbc253bda48c365a97107e1e152', 51, '1', 2, 29),
(215, 'b6701e0365fa4cbc253bda48c365a97107e1e152', 52, '1', 2, 29),
(216, '4761871eff2818359ce8bcfed526ca698a23e5bd', 46, '1', 22, 26),
(227, '4ec08998911f36f8507a432c272a44c783036bf7', 48, '1', 2, 26),
(229, '5453504776e72c587676108c8ab8d849da001791', 52, '1', 2, 33),
(231, '6017725fb377d218033c80c2da50d09ed730ab8d', 52, '1', 2, 26),
(232, '75527f14da500450a0326086768760f64ae7e22d', 51, '1', 2, 29),
(233, '51b05888fa20342f9b02df50cf03fa555c24c855', 51, '1', 2, 29),
(235, 'c22f81c490a5e9358db3ae99b5075de63045a0de', 51, '1', 2, 29),
(236, 'b721cabd600b4c7495792434246ed07c98927ac7', 51, '1', 2, 28),
(250, '8d26e558ac6d7ed5fa2fb283357b583458ae9b45', 52, '1', 2, 27),
(251, '8d26e558ac6d7ed5fa2fb283357b583458ae9b45', 46, '1', 22, 27),
(253, '8d26e558ac6d7ed5fa2fb283357b583458ae9b45', 48, '1', 2, 26),
(258, '8d26e558ac6d7ed5fa2fb283357b583458ae9b45', 51, '1', 2, 26),
(262, '36fea405b4ea7d91069d5516d66a13ca101e033a', 43, '1', 2, 30),
(263, '04b1d51168c13b7f52414bba73c47a5c90b2150f', 51, '1', 2, 33),
(273, '84cf4d40672f6d65812f93c9540c6779974a6796', 48, '1', 2, 30),
(275, '84cf4d40672f6d65812f93c9540c6779974a6796', 52, '1', 2, 29),
(276, '89ffb475213d6c6fea8415f5bae7106a1f0037d5', 43, '1', 2, 30),
(277, '89ffb475213d6c6fea8415f5bae7106a1f0037d5', 53, '1', 27, 30),
(298, 'fef7f904689bea283de60a9d4668c6c90962c63f', 48, '1', 2, 26),
(304, '10', 46, '1', 22, 33),
(306, '9c9bbded79cad03294e4afe9a0bb328a3fd0fdb5', 52, '1', 21, 27),
(308, 'f00065431821bdc96efafbe86219d5611bf20650', 46, '1', 22, 29),
(309, 'c7c61a91d14a81727a090dcbb28f713942321e67', 46, '1', 22, 26),
(312, '8d4a80d1b81fba431840dffb9548d218a25e337f', 46, '1', 22, 28),
(316, 'bfc0c0090570581d3bbef3175e1ed789a9ab211e', 43, '1', 2, 26),
(317, '4b8255496418d0d42c0bf388228bb5fc2046f86e', 48, '1', 2, 30),
(318, '4b8255496418d0d42c0bf388228bb5fc2046f86e', 48, '1', 2, 26),
(322, '10', 48, '1', 2, 26),
(324, '4976bd941acb994800fa778a41b513930ba29618', 43, '1', 2, 26),
(325, '4f85ae6b931e939c96023cb7495e4183da1aac67', 43, '1', 2, 26),
(326, 'cd018a18faaeb8fc9c95ab28d3141d903679d5af', 46, '1', 22, 29),
(332, 'de2a60fc4b81fe62b4eadc00d558d9414dc2f3e1', 46, '1', 22, 27),
(333, '1f8efc8bb6a8fbb02d4ff25df1ff75c8dcbe3e90', 43, '1', 2, 26),
(334, '4b9f7972b647e7ce44cbca4ce2aa62e7b5a18c33', 48, '1', 2, 26),
(345, 'f620e58918f3ef5de26e385814c6ae3b891f1d8b', 54, '1', 22, 27),
(353, '66670e864176ea7cd41b0006ab2d9ba54cd832b7', 46, '1', 22, 27),
(371, '271108a1f260451e8847298b2ef28d125e1cb0a6', 48, '1', 2, 26),
(372, '0c83a00b3db8fbc660cd43656351621fad4e3ee7', 65, '3', 11, 28),
(373, '0c83a00b3db8fbc660cd43656351621fad4e3ee7', 44, '1', 2, 26),
(374, '57911b7086836e2d8d472a2c20cb1b6aabbef50d', 44, '1', 2, 26),
(375, 'f787c8d4682f33f63fa25644dba35c4e665f4fef', 44, '1', 2, 26),
(376, 'f787c8d4682f33f63fa25644dba35c4e665f4fef', 46, '1', 29, 26),
(377, '98b209318ee8b682aaf6ba68e950c1b1c9cc8d05', 44, '1', 2, 27),
(380, '0cc86c0a50e1551fdcd8a04f33bcbf3f3ca48726', 46, '1', 29, 35),
(381, '0cc86c0a50e1551fdcd8a04f33bcbf3f3ca48726', 51, '1', 2, 35),
(382, '0c83a00b3db8fbc660cd43656351621fad4e3ee7', 48, '1', 2, 26),
(383, 'a35cb6267df700adf4bc4d3585725cc53422ae1a', 0, '16395004617MAHiPAL', 0, 0),
(384, '44aa3e596a792dc406829793ef0f1fcc991cefd2', 62, '1', 2, 26),
(385, 'ffc128d2ebd6f03d3fc5b53a06e449528bddf8ee', 0, '1', 0, 0),
(386, 'b2039d87878981f158c1b85b880f33be46010d65', 0, '1', 0, 0),
(387, 'c9efb117580010841fab09750dcd06d60a4047c2', 44, '1', 2, 26),
(388, 'f54ad34e0ef20ac7f76fbeb96f192322eeb190c2', 0, '1', 0, 0),
(389, '209163891e3e13fc04b9408e37fd374ee004b15d', 0, '1', 0, 0),
(390, 'd156349e90c7270af4a5980d27e0904bc65829ba', 0, '1', 0, 0),
(391, '11', 44, '1', 2, 29);

-- --------------------------------------------------------

--
-- Table structure for table `add_to_wishlist`
--

DROP TABLE IF EXISTS `add_to_wishlist`;
CREATE TABLE IF NOT EXISTS `add_to_wishlist` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `p_id` int(11) NOT NULL,
  `quantity` text NOT NULL,
  `temp_user_id` text NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=13 DEFAULT CHARSET=utf8;

--
-- Dumping data for table `add_to_wishlist`
--

INSERT INTO `add_to_wishlist` (`id`, `p_id`, `quantity`, `temp_user_id`) VALUES
(3, 46, '1', '604cc365c468fea9dac1361be6a42bef13b3c6f2'),
(5, 68, '1', '9'),
(6, 45, '1', '7487ea68fa8721fc4c082eb2ad1f08442fb56d2d'),
(7, 43, '1', 'a80331e896c745a18d81a629faed2d16da83a340'),
(8, 65, '1', '0c83a00b3db8fbc660cd43656351621fad4e3ee7'),
(10, 46, '1', '0cc86c0a50e1551fdcd8a04f33bcbf3f3ca48726'),
(11, 45, '1', '0c83a00b3db8fbc660cd43656351621fad4e3ee7'),
(12, 44, '1', '0c83a00b3db8fbc660cd43656351621fad4e3ee7');

-- --------------------------------------------------------

--
-- Table structure for table `all_images`
--

DROP TABLE IF EXISTS `all_images`;
CREATE TABLE IF NOT EXISTS `all_images` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `cat_id` int(11) NOT NULL,
  `sub_cat_id` int(11) NOT NULL,
  `p_id` int(11) NOT NULL,
  `size_id` int(11) NOT NULL,
  `color_id` int(11) NOT NULL,
  `image` text NOT NULL,
  `stock` text NOT NULL,
  `price` text NOT NULL,
  `cut_price` text NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=5891 DEFAULT CHARSET=utf8;

--
-- Dumping data for table `all_images`
--

INSERT INTO `all_images` (`id`, `cat_id`, `sub_cat_id`, `p_id`, `size_id`, `color_id`, `image`, `stock`, `price`, `cut_price`) VALUES
(3247, 33, 49, 55, 26, 2, '137759272100y7a3537-removebg-preview.png', '2', '', ''),
(3248, 33, 49, 55, 26, 2, '115377913410y7a3540-removebg-preview.png', '2', '', ''),
(3249, 33, 49, 55, 27, 2, '54394095200y7a3537-removebg-preview.png', '5', '', ''),
(3250, 33, 49, 55, 27, 2, '12911176110y7a3540-removebg-preview.png', '5', '', ''),
(3251, 33, 49, 55, 28, 2, '192475370600y7a3537-removebg-preview.png', '4', '', ''),
(3252, 33, 49, 55, 28, 2, '207154108610y7a3540-removebg-preview.png', '4', '', ''),
(3253, 33, 49, 55, 29, 2, '132192252000y7a3537-removebg-preview.png', '4', '', ''),
(3254, 33, 49, 55, 29, 2, '81446529210y7a3540-removebg-preview.png', '4', '', ''),
(3255, 33, 49, 55, 30, 2, '11735364300y7a3537-removebg-preview.png', '3', '', ''),
(3256, 33, 49, 55, 30, 2, '6668828910y7a3540-removebg-preview.png', '3', '', ''),
(3257, 33, 49, 55, 35, 2, '206004457600y7a3537-removebg-preview.png', '2', '', ''),
(3258, 33, 49, 55, 35, 2, '62727872510y7a3540-removebg-preview.png', '2', '', ''),
(3279, 33, 49, 57, 26, 28, '142117955400y7a3531-removebg-preview.png', '5', '', ''),
(3280, 33, 49, 57, 26, 28, '35042613010y7a3532-removebg-preview.png', '5', '', ''),
(3281, 33, 49, 57, 26, 28, '26118282100y7a3529-removebg-preview.png', '5', '', ''),
(3282, 33, 49, 57, 26, 28, '117343146030y7a3533-removebg-preview.png', '5', '', ''),
(3283, 33, 49, 57, 27, 28, '185114929300y7a3529-removebg-preview.png', '5', '', ''),
(3284, 33, 49, 57, 27, 28, '82993469410y7a3530-removebg-preview-2.png', '5', '', ''),
(3285, 33, 49, 57, 27, 28, '28100429720y7a3532-removebg-preview.png', '5', '', ''),
(3286, 33, 49, 57, 27, 28, '91822356730y7a3533-removebg-preview.png', '5', '', ''),
(3287, 33, 49, 57, 28, 28, '91534090800y7a3529-removebg-preview.png', '5', '', ''),
(3288, 33, 49, 57, 28, 28, '195381157410y7a3531-removebg-preview.png', '5', '', ''),
(3289, 33, 49, 57, 28, 28, '97849896020y7a3532-removebg-preview.png', '5', '', ''),
(3290, 33, 49, 57, 28, 28, '125393338330y7a3533-removebg-preview.png', '5', '', ''),
(3291, 33, 49, 57, 29, 28, '6953049500y7a3529-removebg-preview.png', '4', '', ''),
(3292, 33, 49, 57, 29, 28, '153574225010y7a3531-removebg-preview.png', '4', '', ''),
(3293, 33, 49, 57, 29, 28, '140760816320y7a3532-removebg-preview.png', '4', '', ''),
(3294, 33, 49, 57, 29, 28, '105722750830y7a3533-removebg-preview.png', '4', '', ''),
(3295, 33, 49, 57, 30, 28, '73299707700y7a3529-removebg-preview.png', '3', '', ''),
(3296, 33, 49, 57, 30, 28, '67981420010y7a3531-removebg-preview.png', '3', '', ''),
(3297, 33, 49, 57, 30, 28, '45422925120y7a3532-removebg-preview.png', '3', '', ''),
(3298, 33, 49, 57, 30, 28, '210391098430y7a3533-removebg-preview.png', '3', '', ''),
(3299, 37, 44, 54, 27, 22, '182984165600y7a3478-removebg-preview.png', '4', '', ''),
(3300, 37, 44, 54, 27, 22, '176223770010y7a3479-removebg-preview.png', '4', '', ''),
(3301, 37, 44, 54, 27, 22, '180360173020y7a3481-removebg-preview.png', '4', '', ''),
(3689, 37, 44, 69, 26, 2, '137721753602063281608.jpg', '32', '', ''),
(3690, 37, 44, 69, 27, 2, '137721753602063281608.jpg', '32', '', ''),
(3691, 37, 44, 69, 28, 2, '137721753602063281608.jpg', '32', '', ''),
(3692, 37, 44, 69, 30, 2, '137721753602063281608.jpg', '32', '', ''),
(3693, 37, 44, 69, 26, 22, '169225684002063281608.jpg', '50', '', ''),
(3694, 37, 44, 69, 27, 22, '169225684002063281608.jpg', '50', '', ''),
(3695, 37, 44, 69, 28, 22, '169225684002063281608.jpg', '50', '', ''),
(5263, 37, 44, 65, 26, 11, '3035077430malecostume-128.webp', '10', '99', ''),
(5264, 37, 44, 65, 26, 11, '14996223521person-girl-outline-filled-128x128.png', '10', '99', ''),
(5265, 37, 44, 65, 30, 11, '16370682690user.png', '', '99', ''),
(5266, 37, 44, 65, 30, 11, '20968472661user00.png', '', '99', ''),
(5267, 37, 44, 65, 30, 11, '14264752341supportmale-128.webp', '', '99', ''),
(5268, 37, 44, 65, 30, 11, '7077160262user.jpg', '', '99', ''),
(5269, 37, 44, 65, 29, 11, '16370682690user.png', '', '99', ''),
(5270, 37, 44, 65, 29, 11, '20968472661user00.png', '', '99', ''),
(5652, 33, 49, 62, 26, 2, '206940071408-removebg-preview.png', '5', '2599', ''),
(5653, 33, 49, 62, 26, 2, '56596472819-removebg-preview.png', '5', '2599', ''),
(5654, 33, 49, 62, 26, 2, '1706726034210-removebg-preview.png', '5', '2599', ''),
(5655, 33, 49, 62, 27, 2, '169926150808-removebg-preview.png', '5', '2599', ''),
(5656, 33, 49, 62, 27, 2, '193901057719-removebg-preview.png', '5', '2599', ''),
(5657, 33, 49, 62, 27, 2, '338317131210-removebg-preview.png', '5', '2599', ''),
(5658, 33, 49, 62, 28, 2, '89893161008-removebg-preview.png', '5', '2599', ''),
(5659, 33, 49, 62, 28, 2, '90615086819-removebg-preview.png', '5', '2599', ''),
(5660, 33, 49, 62, 28, 2, '290558451210-removebg-preview.png', '5', '2599', ''),
(5661, 33, 49, 62, 29, 2, '51456897508-removebg-preview.png', '5', '2599', ''),
(5662, 33, 49, 62, 29, 2, '177389233219-removebg-preview.png', '5', '2599', ''),
(5663, 33, 49, 62, 29, 2, '2107892099210-removebg-preview.png', '5', '2599', ''),
(5664, 33, 49, 62, 30, 2, '51801736708-removebg-preview.png', '5', '2599', ''),
(5665, 33, 49, 62, 30, 2, '137016015419-removebg-preview.png', '5', '2599', ''),
(5666, 33, 49, 62, 30, 2, '1625965709210-removebg-preview.png', '5', '2599', ''),
(5667, 33, 49, 62, 35, 2, '179071849408-removebg-preview.png', '2', '2599', ''),
(5668, 33, 49, 62, 35, 2, '79521061919-removebg-preview.png', '2', '2599', ''),
(5669, 33, 49, 62, 35, 2, '1977439112210-removebg-preview.png', '2', '2599', ''),
(5670, 33, 49, 61, 26, 27, '910354656012-removebg-preview.png', '5', '2599', ''),
(5671, 33, 49, 61, 26, 27, '478443547113-removebg-preview.png', '5', '2599', ''),
(5672, 33, 49, 61, 26, 27, '944144631214-removebg-preview.png', '5', '2599', ''),
(5673, 33, 49, 61, 27, 27, '604890229012-removebg-preview.png', '5', '2599', ''),
(5674, 33, 49, 61, 27, 27, '127395499113-removebg-preview.png', '5', '2599', ''),
(5675, 33, 49, 61, 27, 27, '141451154214-removebg-preview.png', '5', '2599', ''),
(5676, 33, 49, 61, 28, 27, '1311458134012-removebg-preview.png', '5', '2599', ''),
(5677, 33, 49, 61, 28, 27, '281027680113-removebg-preview.png', '5', '2599', ''),
(5678, 33, 49, 61, 28, 27, '1134203149214-removebg-preview.png', '5', '2599', ''),
(5679, 33, 49, 61, 29, 27, '1439088053012-removebg-preview.png', '5', '2599', ''),
(5680, 33, 49, 61, 29, 27, '446932266113-removebg-preview.png', '5', '2599', ''),
(5681, 33, 49, 61, 29, 27, '935684457214-removebg-preview.png', '5', '2599', ''),
(5682, 33, 49, 61, 30, 27, '184384637012-removebg-preview.png', '6', '2599', ''),
(5683, 33, 49, 61, 30, 27, '2012174848113-removebg-preview.png', '6', '2599', ''),
(5684, 33, 49, 61, 30, 27, '1757198572214-removebg-preview.png', '6', '2599', ''),
(5685, 33, 49, 61, 35, 27, '822310026012-removebg-preview.png', '5', '2599', ''),
(5686, 33, 49, 61, 35, 27, '944110727113-removebg-preview.png', '5', '2599', ''),
(5687, 33, 49, 61, 35, 27, '409043565214-removebg-preview.png', '5', '2599', ''),
(5697, 33, 49, 53, 26, 27, '5637438800dsc_9098.jpg', '2', '2799', ''),
(5698, 33, 49, 53, 26, 27, '11982670821dsc_9104.jpg', '2', '2799', ''),
(5699, 33, 49, 53, 27, 27, '17254301160dsc_9098.jpg', '3', '2799', ''),
(5700, 33, 49, 53, 27, 27, '14738149271dsc_9104.jpg', '3', '2799', ''),
(5701, 33, 49, 53, 28, 27, '8493939800dsc_9098.jpg', '5', '2799', ''),
(5702, 33, 49, 53, 28, 27, '16416367511dsc_9104.jpg', '5', '2799', ''),
(5703, 33, 49, 53, 29, 27, '17144708080dsc_9098.jpg', '4', '2799', ''),
(5704, 33, 49, 53, 29, 27, '4856919431dsc_9104.jpg', '4', '2799', ''),
(5705, 33, 49, 53, 30, 27, '11198180180dsc_9098.jpg', '4', '2799', ''),
(5706, 33, 49, 53, 30, 27, '9836373961dsc_9104.jpg', '4', '2799', ''),
(5707, 33, 49, 53, 35, 27, '7281569010dsc_9098.jpg', '2', '2799', ''),
(5708, 33, 49, 53, 35, 27, '15716301221dsc_9104.jpg', '2', '2799', ''),
(5709, 37, 44, 60, 28, 27, '72970394700y7a3523-removebg-preview.png', '5', '1499', ''),
(5710, 37, 44, 60, 28, 27, '85793160310y7a3524-removebg-preview.png', '5', '1499', ''),
(5711, 37, 44, 60, 28, 27, '174535358420y7a3526-removebg-preview.png', '5', '1499', ''),
(5712, 37, 44, 60, 29, 27, '174066987700y7a3523-removebg-preview.png', '5', '1499', ''),
(5713, 37, 44, 60, 29, 27, '110677426010y7a3524-removebg-preview.png', '5', '1499', ''),
(5714, 37, 44, 60, 29, 27, '45971345920y7a3526-removebg-preview.png', '5', '1499', ''),
(5715, 37, 44, 60, 30, 27, '50220316400y7a3523-removebg-preview.png', '4', '1499', ''),
(5716, 37, 44, 60, 30, 27, '73682791410y7a3524-removebg-preview.png', '4', '1499', ''),
(5717, 37, 44, 60, 30, 27, '62749203920y7a3526-removebg-preview.png', '4', '1499', ''),
(5718, 37, 44, 59, 28, 2, '199561127500y7a3460-removebg-preview.png', '5', '1499', ''),
(5719, 37, 44, 59, 28, 2, '98333303410y7a3464-removebg-preview.png', '5', '1499', ''),
(5720, 37, 44, 59, 28, 2, '187174058720y7a3465-removebg-preview.png', '5', '1499', ''),
(5721, 37, 44, 59, 29, 2, '72695613400y7a3460-removebg-preview.png', '5', '1499', ''),
(5722, 37, 44, 59, 29, 2, '96368633310y7a3464-removebg-preview.png', '5', '1499', ''),
(5723, 37, 44, 59, 29, 2, '206324620620y7a3465-removebg-preview.png', '5', '1499', ''),
(5724, 37, 44, 59, 30, 2, '77461124400y7a3460-removebg-preview.png', '5', '1499', ''),
(5725, 37, 44, 59, 30, 2, '12121420010y7a3464-removebg-preview.png', '5', '1499', ''),
(5726, 37, 44, 59, 30, 2, '103399864220y7a3465-removebg-preview.png', '5', '1499', ''),
(5727, 37, 44, 58, 28, 2, '166579275000y7a3478-removebg-preview.png', '4', '1499', ''),
(5728, 37, 44, 58, 28, 2, '121466921610y7a3479-removebg-preview.png', '4', '1499', ''),
(5729, 37, 44, 58, 28, 2, '170567806620y7a3482-removebg-preview.png', '4', '1499', ''),
(5730, 37, 44, 58, 29, 2, '81077008100y7a3478-removebg-preview.png', '4', '1499', ''),
(5731, 37, 44, 58, 29, 2, '103795578910y7a3479-removebg-preview.png', '4', '1499', ''),
(5732, 37, 44, 58, 29, 2, '89617673020y7a3481-removebg-preview.png', '4', '1499', ''),
(5733, 37, 44, 58, 30, 2, '174882778800y7a3478-removebg-preview.png', '5', '1499', ''),
(5734, 37, 44, 58, 30, 2, '172743952710y7a3479-removebg-preview.png', '5', '1499', ''),
(5735, 37, 44, 58, 30, 2, '210695513120y7a3481-removebg-preview.png', '5', '1499', ''),
(5749, 33, 49, 52, 26, 11, '93443891700y7a0102-removebg-preview.png', '5', '2499', ''),
(5750, 33, 49, 52, 26, 11, '17732286510y7a0103-removebg-preview.png', '5', '2499', ''),
(5751, 33, 49, 52, 26, 11, '14790387140size-chart1.24', '5', '2499', ''),
(5752, 33, 49, 52, 27, 11, '190599833600y7a0102-removebg-preview.png', '5', '2499', ''),
(5753, 33, 49, 52, 27, 11, '203743349610y7a0103-removebg-preview.png', '5', '2499', ''),
(5754, 33, 49, 52, 28, 11, '44009137600y7a0102-removebg-preview.png', '5', '2499', ''),
(5755, 33, 49, 52, 28, 11, '201116486510y7a0103-removebg-preview.png', '5', '2499', ''),
(5756, 33, 49, 52, 29, 11, '91525926100y7a0102-removebg-preview.png', '4', '2499', ''),
(5757, 33, 49, 52, 29, 11, '174176995610y7a0103-removebg-preview.png', '4', '2499', ''),
(5758, 33, 49, 52, 30, 11, '83238624200y7a0102-removebg-preview.png', '4', '2499', ''),
(5759, 33, 49, 52, 30, 11, '2148687710y7a0103-removebg-preview.png', '4', '2499', ''),
(5760, 33, 49, 52, 35, 11, '180878486700y7a0102-removebg-preview.png', '2', '2499', ''),
(5761, 33, 49, 52, 35, 11, '214658576210y7a0103-removebg-preview.png', '2', '2499', ''),
(5762, 33, 51, 51, 26, 2, '81569216200y7a0063-removebg-preview.png', '5', '3499', ''),
(5763, 33, 51, 51, 26, 2, '11315597410y7a0067-removebg-preview.png', '5', '3499', ''),
(5764, 33, 51, 51, 26, 2, '192190072820y7a0074-removebg-preview.png', '5', '3499', ''),
(5765, 33, 51, 51, 27, 2, '106475607600y7a0063-removebg-preview.png', '1', '3499', ''),
(5766, 33, 51, 51, 27, 2, '160779952510y7a0067-removebg-preview.png', '1', '3499', ''),
(5767, 33, 51, 51, 27, 2, '130866843520y7a0074-removebg-preview.png', '1', '3499', ''),
(5768, 33, 51, 51, 28, 2, '42091690000y7a0063-removebg-preview.png', '', '3499', ''),
(5769, 33, 51, 51, 28, 2, '87179163310y7a0067-removebg-preview.png', '', '3499', ''),
(5770, 33, 51, 51, 28, 2, '179456370320y7a0074-removebg-preview.png', '', '3499', ''),
(5771, 33, 51, 51, 29, 2, '31864215300y7a0063-removebg-preview.png', '1', '3499', ''),
(5772, 33, 51, 51, 29, 2, '50058786510y7a0067-removebg-preview.png', '1', '3499', ''),
(5773, 33, 51, 51, 29, 2, '125242329920y7a0074-removebg-preview.png', '1', '3499', ''),
(5774, 33, 51, 51, 30, 2, '134517814700y7a0063-removebg-preview.png', '2', '3499', ''),
(5775, 33, 51, 51, 30, 2, '108267937410y7a0067-removebg-preview.png', '2', '3499', ''),
(5776, 33, 51, 51, 30, 2, '149414564420y7a0074-removebg-preview.png', '2', '3499', ''),
(5777, 33, 51, 51, 35, 2, '207953689100y7a0063-removebg-preview.png', '2', '3499', ''),
(5778, 33, 51, 51, 35, 2, '12700074010y7a0067-removebg-preview.png', '2', '3499', ''),
(5779, 33, 51, 51, 35, 2, '70687809720y7a0074-removebg-preview.png', '2', '3499', ''),
(5780, 33, 50, 48, 26, 2, '212748804100y7a0085-removebg-preview.png', '1', '3199', ''),
(5781, 33, 50, 48, 26, 2, '123945913010y7a0088-removebg-preview.png', '1', '3199', ''),
(5782, 33, 50, 48, 26, 2, '1365416020y7a0090-removebg-preview.png', '1', '3199', ''),
(5783, 33, 50, 48, 27, 2, '201028092100y7a0085-removebg-preview.png', '4', '3199', ''),
(5784, 33, 50, 48, 27, 2, '211688043610y7a0088-removebg-preview.png', '4', '3199', ''),
(5785, 33, 50, 48, 27, 2, '100778457220y7a0090-removebg-preview.png', '4', '3199', ''),
(5786, 33, 50, 48, 28, 2, '19371140900y7a0085-removebg-preview.png', '', '3199', ''),
(5787, 33, 50, 48, 28, 2, '139377705610y7a0088-removebg-preview.png', '', '3199', ''),
(5788, 33, 50, 48, 28, 2, '114140599420y7a0090-removebg-preview.png', '', '3199', ''),
(5789, 33, 50, 48, 29, 2, '207676693200y7a0085-removebg-preview.png', '', '3199', ''),
(5790, 33, 50, 48, 29, 2, '74880211510y7a0088-removebg-preview.png', '', '3199', ''),
(5791, 33, 50, 48, 29, 2, '192286920120y7a0090-removebg-preview.png', '', '3199', ''),
(5792, 33, 50, 48, 30, 2, '171610901600y7a0085-removebg-preview.png', '2', '3199', ''),
(5793, 33, 50, 48, 30, 2, '48230810610y7a0088-removebg-preview.png', '2', '3199', ''),
(5794, 33, 50, 48, 30, 2, '57145157920y7a0090-removebg-preview.png', '2', '3199', ''),
(5795, 33, 50, 48, 35, 2, '171610901600y7a0085-removebg-preview.png', '2', '3199', ''),
(5796, 33, 50, 48, 35, 2, '48230810610y7a0088-removebg-preview.png', '2', '3199', ''),
(5797, 33, 50, 48, 35, 2, '57145157920y7a0090-removebg-preview.png', '2', '3199', ''),
(5798, 33, 49, 46, 26, 29, '537700370photo-2024-03-27-13-09-06-1.jpg', '', '2699', ''),
(5799, 33, 49, 46, 26, 29, '18508977231photo-2024-03-27-13-09-06-2.jpg', '', '2699', ''),
(5800, 33, 49, 46, 26, 29, '819503862photo-2024-03-27-13-59-28.jpg', '', '2699', ''),
(5801, 33, 49, 46, 27, 29, '4049433740photo-2024-03-27-13-09-06-1.jpg', '2', '2699', ''),
(5802, 33, 49, 46, 27, 29, '4882546611photo-2024-03-27-13-09-06-2.jpg', '2', '2699', ''),
(5803, 33, 49, 46, 27, 29, '17785000652photo-2024-03-27-13-59-28.jpg', '2', '2699', ''),
(5804, 33, 49, 46, 28, 29, '8149367570photo-2024-03-27-13-09-06-1.jpg', '4', '2699', ''),
(5805, 33, 49, 46, 28, 29, '8972203441photo-2024-03-27-13-09-06-2.jpg', '4', '2699', ''),
(5806, 33, 49, 46, 28, 29, '1851702802photo-2024-03-27-13-59-28.jpg', '4', '2699', ''),
(5807, 33, 49, 46, 29, 29, '20162945880photo-2024-03-27-13-09-06-1.jpg', '5', '2699', ''),
(5808, 33, 49, 46, 29, 29, '5422717841photo-2024-03-27-13-09-06-2.jpg', '5', '2699', ''),
(5809, 33, 49, 46, 29, 29, '3371938662photo-2024-03-27-13-59-28.jpg', '5', '2699', ''),
(5810, 33, 49, 46, 30, 29, '13485431580photo-2024-03-27-13-09-06-1.jpg', '2', '2699', ''),
(5811, 33, 49, 46, 30, 29, '9101558041photo-2024-03-27-13-09-06-2.jpg', '2', '2699', ''),
(5812, 33, 49, 46, 30, 29, '11081902062photo-2024-03-27-13-59-28.jpg', '2', '2699', ''),
(5813, 33, 49, 46, 35, 29, '19941223100photo-2024-03-27-13-09-06-1.jpg', '2', '2699', ''),
(5814, 33, 49, 46, 35, 29, '17622558051photo-2024-03-27-13-09-06-2.jpg', '2', '2699', ''),
(5815, 33, 49, 46, 35, 29, '8606210592photo-2024-03-27-13-59-28.jpg', '2', '2699', ''),
(5816, 33, 49, 45, 26, 2, '5779537870dsc_9113jpgJPG', '', '2199', ''),
(5817, 33, 49, 45, 26, 2, '21220319961dsc_9118jpgJPG', '', '2199', ''),
(5818, 33, 49, 45, 26, 2, '11574617292dsc_9119jpgJPG', '', '2199', ''),
(5819, 33, 49, 45, 27, 2, '10921645740dsc_9113jpgJPG', '', '2199', ''),
(5820, 33, 49, 45, 27, 2, '7519185751dsc_9118-1jpgJPG', '', '2199', ''),
(5821, 33, 49, 45, 27, 2, '20577311332dsc_9119-1jpgJPG', '', '2199', ''),
(5822, 33, 49, 45, 28, 2, '5444017910dsc_9113-1jpgJPG', '', '2199', ''),
(5823, 33, 49, 45, 28, 2, '17509123181dsc_9118jpgJPG', '', '2199', ''),
(5824, 33, 49, 45, 28, 2, '15634998462dsc_9119-1jpgJPG', '', '2199', ''),
(5825, 33, 49, 45, 29, 2, '12518673940dsc_9113-1jpgJPG', '', '2199', ''),
(5826, 33, 49, 45, 29, 2, '8636286521dsc_9118jpgJPG', '', '2199', ''),
(5827, 33, 49, 45, 29, 2, '1626220742dsc_9119-1jpgJPG', '', '2199', ''),
(5828, 33, 49, 45, 30, 2, '6884750370dsc_9113-1jpgJPG', '', '2199', ''),
(5829, 33, 49, 45, 30, 2, '14324790511dsc_9118jpgJPG', '', '2199', ''),
(5830, 33, 49, 45, 30, 2, '14820046182dsc_9119-1jpgJPG', '', '2199', ''),
(5831, 33, 49, 45, 35, 2, '2830173200dsc_9113-1jpgJPG', '1', '2199', ''),
(5832, 33, 49, 45, 35, 2, '17457359771dsc_9118-1jpgJPG', '1', '2199', ''),
(5833, 33, 49, 45, 35, 2, '7013866412dsc_9119-1jpgJPG', '1', '2199', ''),
(5834, 33, 49, 44, 26, 2, '3828606290dsc_9019.jpg', '1', '2499', ''),
(5835, 33, 49, 44, 26, 2, '746764711dsc_9024.jpg', '1', '2499', ''),
(5836, 33, 49, 44, 26, 2, '975713152dsc_9025.jpg', '1', '2499', ''),
(5837, 33, 49, 44, 27, 2, '4461353400dsc_9019.jpg', '2', '2499', ''),
(5838, 33, 49, 44, 27, 2, '10550945851dsc_9024.jpg', '2', '2499', ''),
(5839, 33, 49, 44, 27, 2, '11198200492dsc_9025.jpg', '2', '2499', ''),
(5840, 33, 49, 44, 28, 2, '3671917060dsc_9019.jpg', '3', '2499', ''),
(5841, 33, 49, 44, 28, 2, '13190318391dsc_9024.jpg', '3', '2499', ''),
(5842, 33, 49, 44, 28, 2, '17091553542dsc_9025.jpg', '3', '2499', ''),
(5843, 33, 49, 44, 29, 2, '17241520820dsc_9019.jpg', '1', '2499', ''),
(5844, 33, 49, 44, 29, 2, '4340591391dsc_9024.jpg', '1', '2499', ''),
(5845, 33, 49, 44, 29, 2, '17708867532dsc_9025.jpg', '1', '2499', ''),
(5846, 33, 49, 44, 30, 2, '4321395470dsc_9019.jpg', '3', '2499', ''),
(5847, 33, 49, 44, 30, 2, '556709721dsc_9024.jpg', '3', '2499', ''),
(5848, 33, 49, 44, 30, 2, '10051880312dsc_9025.jpg', '3', '2499', ''),
(5849, 33, 49, 44, 35, 2, '3067903110dsc_9019.jpg', '2', '2499', ''),
(5850, 33, 49, 44, 35, 2, '15918666381dsc_9024.jpg', '2', '2499', ''),
(5851, 33, 49, 44, 35, 2, '8468195902dsc_9025.jpg', '2', '2499', ''),
(5864, 33, 49, 43, 26, 2, '17993864090dsc_9046.jpg', '2', '2799', ''),
(5865, 33, 49, 43, 26, 2, '17329210891dsc_9051.jpg', '2', '2799', ''),
(5866, 33, 49, 43, 27, 2, '8245828140dsc_9046.jpg', '4', '2799', ''),
(5867, 33, 49, 43, 27, 2, '19949562041dsc_9051.jpg', '4', '2799', ''),
(5868, 33, 49, 43, 28, 2, '12639202060dsc_9046.jpg', '4', '2799', ''),
(5869, 33, 49, 43, 28, 2, '10799069291dsc_9051.jpg', '4', '2799', ''),
(5870, 33, 49, 43, 29, 2, '4850294240dsc_9046.jpg', '5', '2799', ''),
(5871, 33, 49, 43, 29, 2, '14593231151dsc_9051.jpg', '5', '2799', ''),
(5872, 33, 49, 43, 30, 2, '8073006870dsc_9046.jpg', '5', '2799', ''),
(5873, 33, 49, 43, 30, 2, '16911625691dsc_9051.jpg', '5', '2799', ''),
(5874, 33, 49, 43, 35, 2, '20582734810dsc_9046.jpg', '2', '2799', ''),
(5875, 33, 49, 43, 35, 2, '11138794131dsc_9051.jpg', '2', '2799', ''),
(5876, 33, 49, 63, 26, 2, '197275025404.jpg', '4', '2699', ''),
(5877, 33, 49, 63, 26, 2, '72371342315.jpg', '4', '2699', ''),
(5878, 33, 49, 63, 26, 2, '178258663726.jpg', '4', '2699', ''),
(5879, 33, 49, 63, 27, 2, '97525529904.jpg', '5', '2699', ''),
(5880, 33, 49, 63, 27, 2, '76618411415.jpg', '5', '2699', ''),
(5881, 33, 49, 63, 27, 2, '129375013126.jpg', '5', '2699', ''),
(5882, 33, 49, 63, 28, 2, '66244070404.jpg', '5', '2699', ''),
(5883, 33, 49, 63, 28, 2, '122239352515.jpg', '5', '2699', ''),
(5884, 33, 49, 63, 28, 2, '62822608226.jpg', '5', '2699', ''),
(5885, 33, 49, 63, 29, 2, '150765723504.jpg', '5', '2699', ''),
(5886, 33, 49, 63, 29, 2, '20830546615.jpg', '5', '2699', ''),
(5887, 33, 49, 63, 29, 2, '92010638626.jpg', '5', '2699', ''),
(5888, 33, 49, 63, 30, 2, '19952435104.jpg', '5', '2699', ''),
(5889, 33, 49, 63, 30, 2, '27997830515.jpg', '5', '2699', ''),
(5890, 33, 49, 63, 30, 2, '129436489526.jpg', '5', '2699', '');

-- --------------------------------------------------------

--
-- Table structure for table `blog`
--

DROP TABLE IF EXISTS `blog`;
CREATE TABLE IF NOT EXISTS `blog` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `image` text NOT NULL,
  `name` text NOT NULL,
  `slug` text NOT NULL,
  `content` longblob NOT NULL,
  `status` int(11) NOT NULL,
  `addeddate` datetime NOT NULL,
  `modifieddate` datetime NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Table structure for table `brand`
--

DROP TABLE IF EXISTS `brand`;
CREATE TABLE IF NOT EXISTS `brand` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `image` text NOT NULL,
  `name` text NOT NULL,
  `slug` text NOT NULL,
  `about_us` text NOT NULL,
  `email` text NOT NULL,
  `address` text NOT NULL,
  `mobile` text NOT NULL,
  `status` int(11) NOT NULL,
  `addeddate` datetime NOT NULL,
  `modifieddate` datetime NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Table structure for table `categories`
--

DROP TABLE IF EXISTS `categories`;
CREATE TABLE IF NOT EXISTS `categories` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `sort` int(11) NOT NULL,
  `image` text NOT NULL,
  `name` text NOT NULL,
  `slug` text NOT NULL,
  `status` int(11) NOT NULL,
  `addeddate` datetime NOT NULL,
  `modifieddate` datetime NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=38 DEFAULT CHARSET=utf8;

--
-- Dumping data for table `categories`
--

INSERT INTO `categories` (`id`, `sort`, `image`, `name`, `slug`, `status`, `addeddate`, `modifieddate`) VALUES
(31, 3, '1705470100.png', 'ACCESSORIES', 'accessories', 0, '2024-01-17 11:11:49', '2024-03-01 10:43:55'),
(33, 1, '1705470100.png', 'TOPS', 'tops', 1, '2024-01-17 11:12:02', '2024-03-01 10:42:04'),
(37, 2, '', 'KIDS', 'kids', 1, '2024-01-22 03:39:11', '2024-03-14 11:19:59');

-- --------------------------------------------------------

--
-- Table structure for table `color`
--

DROP TABLE IF EXISTS `color`;
CREATE TABLE IF NOT EXISTS `color` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `name` text NOT NULL,
  `slug` text NOT NULL,
  `color_code` text NOT NULL,
  `status` int(11) NOT NULL,
  `addeddate` datetime NOT NULL,
  `modifieddate` datetime NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=30 DEFAULT CHARSET=utf8;

--
-- Dumping data for table `color`
--

INSERT INTO `color` (`id`, `name`, `slug`, `color_code`, `status`, `addeddate`, `modifieddate`) VALUES
(1, 'Maroon', 'maroon', '#800000', 0, '2023-03-30 12:10:41', '2024-02-03 05:37:55'),
(2, 'Black', 'black', '#000000', 1, '2023-03-30 12:17:07', '2024-02-03 05:37:53'),
(3, 'Yellow', 'yellow', '#ffff00', 0, '2023-04-10 06:24:28', '2024-02-03 05:37:51'),
(4, 'Blue', 'blue', '#0c08fd', 0, '2023-04-10 06:24:47', '2024-02-03 05:37:49'),
(5, 'Sky Blue', 'sky-blue', '#87ceeb', 0, '2023-04-11 07:24:03', '2024-02-03 05:37:47'),
(6, 'Orange', 'orange', '#ffa500', 0, '2023-04-11 07:24:38', '2024-02-03 05:37:45'),
(7, 'Pink', 'pink', '#ffc0cb', 0, '2023-04-11 07:25:14', '2024-02-03 05:37:44'),
(8, 'Red', 'red', '#ff0000', 0, '2023-04-11 07:25:45', '2024-02-03 05:37:34'),
(11, 'Army Green', 'army-green', '#4b5320', 1, '2023-04-14 01:18:04', '2024-02-23 09:49:29'),
(27, 'NAVY BLUE T-SHIRT', 'navy-blue-t-shirt', '#0e0d54', 1, '2024-02-05 02:47:25', '2024-03-14 02:15:49'),
(28, 'Roasted coffee', 'roasted-coffee', '#271300', 0, '2024-03-14 01:28:50', '2024-03-14 02:15:49'),
(29, 'OFFWHITE', 'offwhite', '#fdfdfd', 1, '2024-03-25 02:48:59', '2024-03-14 02:15:49');

-- --------------------------------------------------------

--
-- Table structure for table `contact`
--

DROP TABLE IF EXISTS `contact`;
CREATE TABLE IF NOT EXISTS `contact` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `name` text NOT NULL,
  `email` text NOT NULL,
  `mobile` text NOT NULL,
  `subject` text NOT NULL,
  `message` text NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=11 DEFAULT CHARSET=utf8;

--
-- Dumping data for table `contact`
--

INSERT INTO `contact` (`id`, `name`, `email`, `mobile`, `subject`, `message`) VALUES
(10, 'Isha ', 'ishikarajput131084@gmail.com', '', 'Avail', 'Need small ');

-- --------------------------------------------------------

--
-- Table structure for table `coupen_code`
--

DROP TABLE IF EXISTS `coupen_code`;
CREATE TABLE IF NOT EXISTS `coupen_code` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `name` varchar(500) NOT NULL,
  `amount` varchar(110) NOT NULL,
  `type` int(11) NOT NULL,
  `coupen_type` int(1) NOT NULL COMMENT '1=checkout, 2 =product',
  `p_id` text NOT NULL,
  `expirey_date` date NOT NULL,
  `status` int(11) NOT NULL,
  `addeddate` datetime NOT NULL,
  `modifieddate` datetime NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=10 DEFAULT CHARSET=utf8;

--
-- Dumping data for table `coupen_code`
--

INSERT INTO `coupen_code` (`id`, `name`, `amount`, `type`, `coupen_type`, `p_id`, `expirey_date`, `status`, `addeddate`, `modifieddate`) VALUES
(5, 'GFL', '500', 2, 2, '[{\"p_id\":\"45\",\"name\":\"GFL\",\"amount\":\"500\",\"type\":\"2\",\"coupen_type\":\"2\",\"expirey_date\":\"2024-01-30\"}]', '2024-01-30', 0, '2024-01-23 03:45:11', '2024-01-31 02:16:04'),
(6, 'wolverine', '100', 2, 2, '[{\"p_id\":\"43\",\"name\":\"wolverine\",\"amount\":\"100\",\"type\":\"2\",\"coupen_type\":\"2\",\"expirey_date\":\"2024-01-26\"},{\"p_id\":\"51\",\"name\":\"wolverine\",\"amount\":\"100\",\"type\":\"2\",\"coupen_type\":\"2\",\"expirey_date\":\"2024-01-26\"}]', '2024-01-26', 0, '2024-01-24 12:00:11', '2024-01-28 12:06:59'),
(9, 'GIANTFOX10', '10', 1, 1, '0', '2024-03-31', 1, '2024-01-26 08:05:09', '2024-03-25 03:53:04');

-- --------------------------------------------------------

--
-- Table structure for table `coupen_product_wise`
--

DROP TABLE IF EXISTS `coupen_product_wise`;
CREATE TABLE IF NOT EXISTS `coupen_product_wise` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `coupon_id` int(11) NOT NULL,
  `p_id` int(11) NOT NULL,
  `name` text NOT NULL,
  `amount` text NOT NULL,
  `type` int(11) NOT NULL,
  `coupen_type` int(1) NOT NULL,
  `expirey_date` date NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=170 DEFAULT CHARSET=utf8;

--
-- Dumping data for table `coupen_product_wise`
--

INSERT INTO `coupen_product_wise` (`id`, `coupon_id`, `p_id`, `name`, `amount`, `type`, `coupen_type`, `expirey_date`) VALUES
(41, 4, 52, 'GIANT', '500', 1, 2, '2024-01-22'),
(83, 6, 43, 'wolverine', '100', 2, 2, '2024-01-26'),
(84, 6, 51, 'wolverine', '100', 2, 2, '2024-01-26'),
(163, 7, 44, 'GFDESIGN', '500', 2, 2, '2024-02-05'),
(164, 7, 45, 'GFDESIGN', '500', 2, 2, '2024-02-05'),
(165, 7, 46, 'GFDESIGN', '500', 2, 2, '2024-02-05'),
(166, 7, 48, 'GFDESIGN', '500', 2, 2, '2024-02-05'),
(167, 7, 51, 'GFDESIGN', '500', 2, 2, '2024-02-05'),
(168, 7, 52, 'GFDESIGN', '500', 2, 2, '2024-02-05'),
(169, 5, 45, 'GFL', '500', 2, 2, '2024-01-30');

-- --------------------------------------------------------

--
-- Table structure for table `dela_of_day`
--

DROP TABLE IF EXISTS `dela_of_day`;
CREATE TABLE IF NOT EXISTS `dela_of_day` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `image` text NOT NULL,
  `sub_title` text NOT NULL,
  `title` text NOT NULL,
  `content` text NOT NULL,
  `video_link` text NOT NULL,
  `countdown` text NOT NULL COMMENT 'Sep 30, 2023 00:00:00',
  `url` text NOT NULL,
  `status` int(11) NOT NULL,
  `addeddate` datetime NOT NULL,
  `modifieddate` datetime NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Table structure for table `faqs`
--

DROP TABLE IF EXISTS `faqs`;
CREATE TABLE IF NOT EXISTS `faqs` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `cat_id` int(11) NOT NULL,
  `question` text NOT NULL,
  `answere` text NOT NULL,
  `status` int(11) NOT NULL,
  `addeddate` date NOT NULL,
  `modifieddate` date NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=9 DEFAULT CHARSET=utf8;

--
-- Dumping data for table `faqs`
--

INSERT INTO `faqs` (`id`, `cat_id`, `question`, `answere`, `status`, `addeddate`, `modifieddate`) VALUES
(1, 6, 'CAN I EXCHANGE AN ITEM', 'WE HAVE EXCHANGE POLICY OF 7 DAYS FROM THE DATE OF RECEIVING THE PRODUCT FOR ONLINE ORDERS.TO INITIATE EXCHANGE , PLEASE WRITE TO SUPPORT@GIANTFOX.IN WITHIN 7 DAYS OF RECEIVING THE PRODUCT \r\n\r\nFOR HYGIENE ALL THE EXCHANGES RECEIVED WILL GO THROUGH A QUALITY CHECK BY OUR TEAM AND WOULD BE FURTHER APPROVED/DECLINED FOR EXCHANGE . WE RESERVE THE RIGHT TO NOT ACCEPT A RETURN IF \r\n: THE PRODUCTS ARE RETURNED AFTER USE\r\n: THE PRODUCTS DO NOT HAVE ALL THE TAGS\r\n', 1, '2024-01-27', '2024-03-21'),
(2, 3, 'HOW CAN I PAY FOR MY ORDER', 'ONLINE PURCHASES : CAN BE DONE THROUGH THE FOLLOWING PAYMENT METHODS :\r\n\r\nCARD , PAYTM ,UPI . PLEASE NOTE THAT WE DO NOT ACCEPT COD FOR ONLINE PURCHASES', 1, '2024-01-27', '2024-03-21'),
(3, 5, 'WHAT IS MY RIGHT SIZE', 'AS GIANTFOX PROVIDES TO THE OVERSIZE FIT , IF YOU\'RE UNSURE ABOUT SIZING ,WE RECOMMEND GOING ONE SIZE DOWN FROM YOUR REGULAR SIZE. FOR EXAMPLE ,IF YOU \r\n\r\n\r\nWEAR SIZE M, YOU CAN GO AHEAD WITH A SIZE S WITH US . WHEN YOU ARE COMFORTABLE YOU CAN UPSIZE IF YOU PREFER A LOOSER LOOK . WE HAVE PROVIDED THE  SIZE \r\n\r\n\r\nCHART ON OUR WEBSITE WHICH PROVIDE DETAILED MEASUREMENTS FOR EACH SIZE TO HELP YOU CHOOSE THE PERFECT FIT .', 1, '2024-01-30', '2024-03-21'),
(4, 2, 'WHERE DO WE DELIVER', 'WE SHIP AND DELIVER ALL OUR ORDERS PAN-INDIA', 1, '2024-03-21', '2024-03-21'),
(6, 3, 'test', 'vhnbmnbm', 0, '2024-03-22', '0000-00-00'),
(7, 3, 'Introduction to English Grammar', 'h', 0, '2024-03-22', '0000-00-00'),
(8, 2, 'yt', 'g', 1, '2024-03-23', '0000-00-00');

-- --------------------------------------------------------

--
-- Table structure for table `faq_cat`
--

DROP TABLE IF EXISTS `faq_cat`;
CREATE TABLE IF NOT EXISTS `faq_cat` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `name` text NOT NULL,
  `slug` text NOT NULL,
  `status` int(11) NOT NULL,
  `addeddate` datetime NOT NULL,
  `modifieddate` datetime NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=7 DEFAULT CHARSET=utf8;

--
-- Dumping data for table `faq_cat`
--

INSERT INTO `faq_cat` (`id`, `name`, `slug`, `status`, `addeddate`, `modifieddate`) VALUES
(2, 'DELIVERY', 'delivery', 1, '2024-01-27 04:54:40', '2024-01-27 05:09:45'),
(3, 'ORDER ', 'order', 1, '2024-01-27 05:09:59', '2024-03-14 02:15:49'),
(5, 'PRODUCT', 'product', 1, '2024-03-21 04:58:11', '2024-03-14 02:15:49'),
(6, 'EXCHANGES', 'exchanges', 1, '2024-03-21 05:00:04', '2024-03-21 05:15:16');

-- --------------------------------------------------------

--
-- Table structure for table `finalorder`
--

DROP TABLE IF EXISTS `finalorder`;
CREATE TABLE IF NOT EXISTS `finalorder` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `user_id` text NOT NULL,
  `order_id` text NOT NULL,
  `f_name` text NOT NULL,
  `l_name` text NOT NULL,
  `compony_name` text NOT NULL,
  `country` text NOT NULL,
  `address` text NOT NULL,
  `apartment` text NOT NULL,
  `house_str_no` text NOT NULL,
  `city` text NOT NULL,
  `state` text NOT NULL,
  `pincode` text NOT NULL,
  `email` text NOT NULL,
  `mobile` text NOT NULL,
  `order_note` text NOT NULL,
  `discount` text NOT NULL,
  `discount_amount` text NOT NULL,
  `shipping_charge` text NOT NULL,
  `sub_total` text NOT NULL,
  `finalprice` text NOT NULL,
  `after_discount_final_price` text NOT NULL,
  `payment_type` int(11) NOT NULL COMMENT '1=cod\r\n2=online',
  `status` int(11) NOT NULL,
  `addeddate` datetime NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=169 DEFAULT CHARSET=utf8;

--
-- Dumping data for table `finalorder`
--

INSERT INTO `finalorder` (`id`, `user_id`, `order_id`, `f_name`, `l_name`, `compony_name`, `country`, `address`, `apartment`, `house_str_no`, `city`, `state`, `pincode`, `email`, `mobile`, `order_note`, `discount`, `discount_amount`, `shipping_charge`, `sub_total`, `finalprice`, `after_discount_final_price`, `payment_type`, `status`, `addeddate`) VALUES
(43, '8711abedf0c13906028254117693c3e577b7e897', '1706368576', 'Vishwash ', 'Bharti ', '', 'India', 'House no - 170,171 ground floor pocket- 11, sector 22 rohini ', '', '', '', '', '110086', 'bhartivishwash38@gmail.com', '9811062129', 'Please dispatch it as early as possible', '15', '329.85', '0', '2199', '1869.15', '1869.15', 2, 4, '2024-01-27 00:00:00'),
(54, 'caca7509d10d8c72afcc33c34a77a7fafee85e78', '1707041409', 'Neetu', 'Singh', '', 'India', '1301,1302 Richmond building building hiranandani garden ', '', '', 'Mumbai ', '', '400076', 'Neetusingh.ns1001@gmail.com', '9870021001', '', '0', '0', '0', '7137', '7137', '7137', 2, 4, '2024-02-04 00:00:00'),
(63, '4d888d886fd557500266ffe15088ce9a826af2dc', '1707151240', 'Anikit (Sumit)', 'Mahipal (Garg)', '', 'India', 'CP-130', '', '', 'New Delhi', '', '110034', '', '9899135027', '', '0', '0', '0', '2449', '2449', '2449', 2, 4, '2024-02-05 00:00:00'),
(69, '384112060f32601b8b84d1b2dfc0a373b8044ec3', '1707231714', 'Bhawna', 'Babbar', '', 'India', 'A90 narangcolony firstfloor janakpuri', '', '', 'Delhi', '', '110058', 'bhawnababbar15@gmail.com', '09891921100', '', '0', '0', '0', '2449', '2449', '2449', 2, 4, '2024-02-06 00:00:00'),
(74, '94737d23a789dc70c55a72a4b3de0e5db2ddaf7c', '1707290172', 'Rashmi ', 'Singh ', '', 'India', 'F-202, SRK garden, kudlu main road Bangalore ', '', '', 'Bangalore ', '', '560068', 'Rashmeeesingh30@gmail.com', '7355363162', '', '0', '0', '0', '2499', '2499', '2499', 2, 4, '2024-02-07 00:00:00'),
(75, '4666d4024b7ef409c7e781dddde446f8aeb84b3b', '1707290698', 'Tanmay ', 'Singh', '', 'India', '116E/A nyay colony sulem sarai Prayagraj ', '', '', 'Allahabad ', '', '211011', 'Singhtanmay443@gmail.com', '8318756126', '', '0', '0', '0', '2449', '2449', '2449', 2, 4, '2024-02-07 00:00:00'),
(78, 'f1e34144b94b0c5ad73840abfdcadc34a19d277f', '1707407624', 'Saloni', 'Singh', '', 'India', 'flat 101, resort view building, thakur complex kandivali east ', '', '', 'Mumbai', '', '400101', 'saloni0703singh@gmail.com', '8879904082', '', '0', '0', '0', '2499', '2499', '2499', 2, 4, '2024-02-08 00:00:00'),
(84, '1e6c335ebb8012a6b1b6a39b0cf71c4452c57d7b', '1707458547', 'Gauri', 'Chabbra', '', 'India', 'CP-132,Pitampura ', '', '', 'New Delhi', '', '110034', '', '9999738741', '', '0', '0', '0', '4688', '4688', '4688', 1, 4, '2024-02-09 00:00:00'),
(108, '2d187873aa91fa3235e35071e6d1f2dec76d3ada', '1707801483', 'Ankur ', 'Chauhan ', '', 'India', 'C-10/24 ,2nd Floor, Sector-15,  Rohini , Delhi-110089 ', '', '', 'Delhi', '', '110089', 'ankurchauhan98@gmail.com', '9811127026', '', '0', '0', '0', '4948', '4948', '4948', 2, 4, '2024-02-13 00:00:00'),
(109, 'dde79afc2a0281b2e81ff317c9c6095163cd680c', '1707842243', 'Shweta ', 'Singh', '', 'India', '4805/4806, B wing, oberoi exquisite,Goregaon East, Mumbai 400063', '', '', 'Mumbai', '', '4000072', 'Shwetasingh3105@gmail.com', '9920770166', '', '0', '0', '0', '2449', '2449', '2449', 0, 4, '2024-02-13 00:00:00'),
(112, 'b7884bb1c6fb7b0e130ccc268afca658dd9f2fad', '1707973338', 'Anmol', '', '', 'India', '1301,Richmond Building Hiranandani Garden,Mumbai', '', '', 'Mumbai(Maharastra)', '', '400076', '', '9870021001', '', '0', '0', '0', '6928', '6928', '6928', 1, 4, '2024-02-15 00:00:00'),
(124, '7e145de6922ec60e0fff5dae92ab9910bdbecc96', '1708137701', 'Sneh ', 'Singh', '', 'India', ' ANIRUDH villa, Goregaon west, Near MTNL,  Behind Image Restaurant, SV Road', '', '', 'Mumbai ', '', '400062', 'Singh.sneh12@gmail.com', '9930534282', '', '0', '0', '200', '2699', '2899', '2899', 2, 4, '2024-02-17 00:00:00'),
(128, '2226967478806e0e080fc14f52234edd7baa2dbd', '1710144199', 'Nisha', 'Singh', '', '250', '201 vaibhav apartment, 13 union park, behind hotel le sutra, bandra (w) ', '', '', 'Mumbai', '', '400050', 'Nisha.singh@hotmail.com', '+91 99201 28155', '', '0', '0', '250', '2699', '2699', '2949', 2, 4, '2024-03-11 00:00:00'),
(164, '71b6ad0f77a1a4b88ca344b0e7dd0e79c9967a07', '1710478714', 'Neetu', 'Singh', '', '1500', '1301 Richmond building Hiranadani garden powai', '', '', 'Mumbai', '', '400076', 'neetusingh.ns1001@gmail.com', '09870021001', '', '0', '0', '1500', '8696', '8696', '10196', 2, 2, '2024-03-15 00:00:00'),
(168, '9a9cbe64cfc4a10e0f810f51cf0d179ed0c5d6f8', '1712824977', 'Manvi ', 'Shah', '', '250', '601, 6th floor , fortuna building , plot no. 248-A, Tardeo ,  Opposite bhatia hospital . ', '', '', 'Mumbai', '', '400007', 'manvieshah@gmail.com', '70658 48000', '', '0', '0', '250', '2499', '2499', '2749', 2, 0, '2024-04-11 00:00:00');

-- --------------------------------------------------------

--
-- Table structure for table `marquee`
--

DROP TABLE IF EXISTS `marquee`;
CREATE TABLE IF NOT EXISTS `marquee` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `name` text NOT NULL,
  `status` int(11) NOT NULL,
  `addeddate` datetime NOT NULL,
  `modifieddate` datetime NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=3 DEFAULT CHARSET=utf8;

--
-- Dumping data for table `marquee`
--

INSERT INTO `marquee` (`id`, `name`, `status`, `addeddate`, `modifieddate`) VALUES
(1, 'Checkout Our New Collection', 1, '2024-01-30 06:32:25', '2024-03-20 11:04:35'),
(2, 'GIANTFOX CLOTHING We Guarantee You for premium quality fabric & superior quality T-Shirts with unique designs', 1, '2024-01-30 06:32:43', '2024-02-02 11:09:55');

-- --------------------------------------------------------

--
-- Table structure for table `offer_banners`
--

DROP TABLE IF EXISTS `offer_banners`;
CREATE TABLE IF NOT EXISTS `offer_banners` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `mobile` int(11) NOT NULL,
  `type` int(11) NOT NULL,
  `image` text NOT NULL,
  `sub_title` text NOT NULL,
  `title` text NOT NULL,
  `link` text NOT NULL,
  `status` int(11) NOT NULL,
  `addeddate` datetime NOT NULL,
  `modifieddate` datetime NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=11 DEFAULT CHARSET=utf8;

--
-- Dumping data for table `offer_banners`
--

INSERT INTO `offer_banners` (`id`, `mobile`, `type`, `image`, `sub_title`, `title`, `link`, `status`, `addeddate`, `modifieddate`) VALUES
(6, 0, 0, '1710994544.jpg', '', '', 'https://www.giantfox.in/product-details/black-tribal-t-shirt', 1, '2024-01-22 06:12:58', '2024-03-25 03:28:07'),
(7, 0, 0, '1710994563.png', '', '', 'https://www.giantfox.in/product-details/the-hunt', 1, '2024-01-22 06:12:59', '2024-03-21 09:46:03'),
(8, 0, 0, '1708410398.png', '', '', 'https://giantfox.in/filter/tops', 0, '2024-02-20 11:56:38', '2024-03-09 11:47:02'),
(10, 0, 0, '1710994471.jpg', '', '', 'https://www.giantfox.in/product-details/the-hunt', 0, '2024-03-21 12:06:11', '2024-03-21 09:44:31');

-- --------------------------------------------------------

--
-- Table structure for table `orders`
--

DROP TABLE IF EXISTS `orders`;
CREATE TABLE IF NOT EXISTS `orders` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `user_id` text NOT NULL,
  `p_id` int(11) NOT NULL,
  `color_id` int(11) NOT NULL,
  `size_id` int(11) NOT NULL,
  `thumb_img` text NOT NULL,
  `name` text NOT NULL,
  `sale_price` varchar(200) NOT NULL,
  `order_id` bigint(20) NOT NULL,
  `quantity` varchar(250) NOT NULL,
  `status` int(10) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=300 DEFAULT CHARSET=utf8;

--
-- Dumping data for table `orders`
--

INSERT INTO `orders` (`id`, `user_id`, `p_id`, `color_id`, `size_id`, `thumb_img`, `name`, `sale_price`, `order_id`, `quantity`, `status`) VALUES
(52, '482ad747b6bf26bfc6c574d854046ac5ef92593a', 46, 3, 26, '1471844097.jpg', 'CRANE T-SHIRT', '3599', 1705647734, '1', 0),
(53, '482ad747b6bf26bfc6c574d854046ac5ef92593a', 46, 2, 27, '1471844097.jpg', 'CRANE T-SHIRT', '3599', 1705647734, '1', 0),
(54, '482ad747b6bf26bfc6c574d854046ac5ef92593a', 46, 2, 30, '1471844097.jpg', 'CRANE T-SHIRT', '3599', 1705647734, '1', 0),
(55, '2abbd66aaf743edf1e22c65eb36a54af4683e392', 47, 2, 26, '1256102647.58', 'Tribal T-shirt', '2199', 1705663133, '2', 0),
(56, 'beccb6663365eb076c75d0ed82b67a25ff6d30ed', 48, 2, 26, '1685795077.png', '            Gothic Element  Puffed Image ', '3199', 1705932546, '1', 0),
(57, '53fd655b005b5e6470d6bae0d355a419740b9905', 50, 2, 30, '665988266.JPG', 'Orange High Density ', '3499', 1705941025, '1', 0),
(58, '53fd655b005b5e6470d6bae0d355a419740b9905', 44, 2, 29, '708227627.57', 'Puff T-shirt', '2099', 1705941025, '1', 0),
(59, '53fd655b005b5e6470d6bae0d355a419740b9905', 48, 2, 29, '1685795077.png', '            Gothic Element  Puffed Image ', '3199', 1705941025, '1', 0),
(60, '53fd655b005b5e6470d6bae0d355a419740b9905', 52, 21, 26, '190945980.png', 'Tribal T-Shirt', '2499', 1705941025, '1', 0),
(61, '53fd655b005b5e6470d6bae0d355a419740b9905', 52, 2, 26, '190945980.png', 'Tribal T-Shirt', '2499', 1705941025, '1', 0),
(62, '53fd655b005b5e6470d6bae0d355a419740b9905', 52, 2, 26, '190945980.png', 'Tribal T-Shirt', '2499', 1705941571, '1', 0),
(63, '53fd655b005b5e6470d6bae0d355a419740b9905', 48, 2, 30, '1685795077.png', '            Gothic Element  Puffed Image ', '3199', 1705941571, '1', 0),
(64, '53fd655b005b5e6470d6bae0d355a419740b9905', 50, 2, 33, '665988266.JPG', 'Orange High Density ', '3499', 1705941571, '1', 0),
(65, 'f536554461d2960c95b10a75595761d30a5f8fa2', 46, 2, 26, '1449633447.20', 'CRANE T-SHIRT', '2099', 1706006090, '1', 0),
(66, 'cbb805483eb3a8c947bc2163e8dc8b28ddad3bb3', 48, 2, 26, '1685795077.png', '            Gothic Element  Puffed Image ', '3199', 1706173988, '1', 0),
(67, 'beccb6663365eb076c75d0ed82b67a25ff6d30ed', 52, 2, 26, '190945980.png', ' Tribal T-shirt', '2199', 1706260716, '1', 0),
(68, '594504702ff1af3cf7b3aff5cd3b4dfebf7b98b3', 45, 22, 26, '398824366.52', 'The Attaraction T-shirt', '2000', 1706279243, '1', 0),
(69, '594504702ff1af3cf7b3aff5cd3b4dfebf7b98b3', 45, 2, 26, '398824366.52', 'The Attaraction T-shirt', '2000', 1706279243, '1', 0),
(70, '969060ffa3aa067d7e0d641315e074d3f8a288ac', 45, 2, 27, '398824366.52', 'The Attaraction T-shirt', '2499', 1706363581, '1', 0),
(71, '969060ffa3aa067d7e0d641315e074d3f8a288ac', 45, 2, 26, '398824366.52', 'The Attaraction T-shirt', '2499', 1706363581, '1', 0),
(72, '62e268542c6bed6de6b188c226154390804527b9', 44, 2, 28, '708227627.57', 'Puff T-shirt', '2199', 1706366561, '1', 0),
(73, '62e268542c6bed6de6b188c226154390804527b9', 51, 2, 29, '554389514.JPG', 'Orange High Density', '3499', 1706366561, '1', 0),
(74, '8711abedf0c13906028254117693c3e577b7e897', 44, 2, 26, '708227627.57', 'Puff T-shirt', '2199', 1706368576, '1', 0),
(75, 'a61933fd337ab079469107ab55615fffd658c392', 48, 2, 28, '1685795077.png', '            Gothic Element  Puffed Image ', '3199', 1706379994, '1', 0),
(76, 'a3d95fec3a096baf6b40f10b9cc237df63a48cfa', 45, 2, 26, '178430296.JPG', 'The Attaraction T-shirt', '2499', 1706519397, '1', 0),
(79, '969060ffa3aa067d7e0d641315e074d3f8a288ac', 45, 2, 26, '178430296.JPG', 'The Attaraction T-shirt', '2199', 1706678142, '1', 0),
(80, 'e009241e862668dea4534165933a8d6914abc138', 43, 26, 26, '1791909292.55', 'BLACK FOREST T-shirt', '2799', 1706697429, '1', 0),
(81, 'e009241e862668dea4534165933a8d6914abc138', 48, 2, 27, '1685795077.png', '            Gothic Element  Puffed Image ', '2239', 1706697429, '1', 0),
(82, 'e8a10ff04ef7f69a7d2283614dfff12426859567', 51, 2, 29, '554389514.JPG', 'Orange High Density', '2449', 1706722537, '1', 0),
(83, '16e3899f592567cc4de1877d21446e54af86b865', 45, 2, 26, '178430296.JPG', 'The Attaraction T-shirt', '1999', 1706768987, '1', 0),
(86, '6', 51, 2, 26, '554389514.JPG', 'Orange High Density', '2449', 1706876961, '1', 1),
(87, '84cf4d40672f6d65812f93c9540c6779974a6796', 51, 2, 27, '554389514.JPG', 'Orange High Density', '2449', 1706877330, '1', 0),
(88, '2ebe5086617c37ba65cf4f49bff09d22e3438748', 45, 2, 28, '178430296.JPG', 'The Attaraction T-shirt', '1999', 1706976020, '1', 0),
(89, '2ebe5086617c37ba65cf4f49bff09d22e3438748', 46, 22, 28, '2105634137.jpg', 'Mysterious Snake T-shirt', '2699', 1706976020, '1', 0),
(90, 'caca7509d10d8c72afcc33c34a77a7fafee85e78', 52, 2, 29, '190945980.png', ' Tribal T-shirt', '2199', 1707041409, '1', 1),
(91, 'caca7509d10d8c72afcc33c34a77a7fafee85e78', 46, 22, 29, '2105634137.jpg', 'Mysterious Snake T-shirt', '2699', 1707041409, '1', 1),
(92, 'caca7509d10d8c72afcc33c34a77a7fafee85e78', 48, 2, 29, '1685795077.png', 'Gothic Element  Puffed Image ', '2239', 1707041409, '1', 1),
(93, 'ab457e3f8780393ee1175ad9ba4f92ccf81f1ac4', 43, 2, 29, '1791909292.55', 'BLACK FOREST T-shirt', '2799', 1707044384, '1', 0),
(94, '8d26e558ac6d7ed5fa2fb283357b583458ae9b45', 52, 21, 33, '190945980.png', ' Tribal T-shirt', '1', 1707108057, '1', 0),
(95, '8d26e558ac6d7ed5fa2fb283357b583458ae9b45', 52, 21, 33, '190945980.png', ' Tribal T-shirt', '1', 1707108705, '1', 0),
(96, '8d26e558ac6d7ed5fa2fb283357b583458ae9b45', 46, 22, 26, '2105634137.jpg', 'Mysterious Snake T-shirt', '2699', 1707108705, '1', 0),
(97, '620ca7f0a87f8af143329e4a52792a64a19229be', 52, 2, 27, '190945980.png', ' Tribal T-shirt', '1', 1707120737, '1', 1),
(98, '2ebe5086617c37ba65cf4f49bff09d22e3438748', 46, 22, 28, '2105634137.jpg', 'Mysterious Snake T-shirt', '2699', 1707120931, '1', 0),
(99, '6017725fb377d218033c80c2da50d09ed730ab8d', 52, 2, 26, '190945980.png', ' Tribal T-shirt', '2499', 1707121673, '1', 0),
(100, '75527f14da500450a0326086768760f64ae7e22d', 51, 2, 29, '554389514.JPG', 'Orange High Density', '2449', 1707147236, '1', 0),
(101, '51b05888fa20342f9b02df50cf03fa555c24c855', 51, 2, 29, '554389514.JPG', 'Orange High Density', '2449', 1707149296, '1', 0),
(102, '4d888d886fd557500266ffe15088ce9a826af2dc', 51, 2, 27, '554389514.JPG', 'Orange High Density', '2449', 1707151240, '1', 1),
(103, '2ebe5086617c37ba65cf4f49bff09d22e3438748', 46, 22, 26, '2105634137.jpg', 'Mysterious Snake T-shirt', '2699', 1707217126, '1', 0),
(104, '2ebe5086617c37ba65cf4f49bff09d22e3438748', 52, 2, 28, '190945980.png', ' Tribal T-shirt', '2499', 1707217126, '1', 0),
(105, '2ebe5086617c37ba65cf4f49bff09d22e3438748', 48, 2, 28, '1685795077.png', 'Gothic Element  Puffed Image ', '2239', 1707217126, '1', 0),
(106, '2ebe5086617c37ba65cf4f49bff09d22e3438748', 46, 22, 26, '2105634137.jpg', 'Mysterious Snake T-shirt', '2699', 1707217189, '1', 0),
(107, '2ebe5086617c37ba65cf4f49bff09d22e3438748', 52, 2, 28, '190945980.png', ' Tribal T-shirt', '2499', 1707217189, '1', 0),
(108, '2ebe5086617c37ba65cf4f49bff09d22e3438748', 48, 2, 28, '1685795077.png', 'Gothic Element  Puffed Image ', '2239', 1707217189, '1', 0),
(109, '8d26e558ac6d7ed5fa2fb283357b583458ae9b45', 52, 2, 27, '190945980.png', ' Tribal T-shirt', '2499', 1707218603, '1', 0),
(110, '8d26e558ac6d7ed5fa2fb283357b583458ae9b45', 46, 22, 27, '2105634137.jpg', 'Mysterious Snake T-shirt', '2699', 1707218603, '1', 0),
(111, '8d26e558ac6d7ed5fa2fb283357b583458ae9b45', 48, 2, 26, '1685795077.png', 'Gothic Element  Puffed Image ', '2239', 1707218603, '1', 0),
(112, '84cf4d40672f6d65812f93c9540c6779974a6796', 51, 2, 27, '554389514.JPG', 'Orange High Density', '2449', 1707218650, '1', 0),
(113, '706c6cd112474e51fcf866baf0186162dee49dfa', 48, 2, 29, '1685795077.png', 'Gothic Element  Puffed Image ', '2239', 1707218833, '1', 0),
(114, '706c6cd112474e51fcf866baf0186162dee49dfa', 46, 22, 29, '2105634137.jpg', 'Mysterious Snake T-shirt', '2699', 1707218833, '1', 0),
(115, '706c6cd112474e51fcf866baf0186162dee49dfa', 52, 2, 29, '190945980.png', ' Tribal T-shirt', '2499', 1707218833, '1', 0),
(116, '384112060f32601b8b84d1b2dfc0a373b8044ec3', 51, 2, 28, '554389514.JPG', 'Orange High Density', '2449', 1707231714, '1', 0),
(117, '384112060f32601b8b84d1b2dfc0a373b8044ec3', 51, 2, 28, '554389514.JPG', 'Orange High Density', '2449', 1707231715, '1', 1),
(118, 'a534f8233420d5e4e78c36a3113763a8cb04fb74', 48, 2, 27, '1685795077.png', 'Gothic Element  Puffed Image ', '2239', 1707232344, '1', 0),
(119, 'b721cabd600b4c7495792434246ed07c98927ac7', 51, 2, 28, '554389514.JPG', 'Orange High Density', '2449', 1707239455, '1', 0),
(120, '04b1d51168c13b7f52414bba73c47a5c90b2150f', 51, 2, 33, '554389514.JPG', 'Orange High Density', '2449', 1707250552, '1', 0),
(121, '94737d23a789dc70c55a72a4b3de0e5db2ddaf7c', 52, 21, 27, '190945980.png', ' Tribal T-shirt', '2499', 1707290172, '1', 1),
(122, '4666d4024b7ef409c7e781dddde446f8aeb84b3b', 51, 2, 29, '554389514.JPG', 'Orange High Density', '2449', 1707290698, '1', 1),
(123, 'aa6d05314799839d162ee273a93597de50d2c5c1', 52, 2, 26, '190945980.png', ' Tribal T-shirt', '2499', 1707370630, '1', 0),
(124, '8d26e558ac6d7ed5fa2fb283357b583458ae9b45', 52, 2, 27, '190945980.png', ' Tribal T-shirt', '2499', 1707370665, '1', 0),
(125, '8d26e558ac6d7ed5fa2fb283357b583458ae9b45', 46, 22, 27, '2105634137.jpg', 'Mysterious Snake T-shirt', '2699', 1707370665, '1', 0),
(126, '8d26e558ac6d7ed5fa2fb283357b583458ae9b45', 48, 2, 26, '1685795077.png', 'Gothic Element  Puffed Image ', '2239', 1707370665, '1', 0),
(127, '8d26e558ac6d7ed5fa2fb283357b583458ae9b45', 51, 2, 26, '554389514.JPG', 'Orange High Density', '2449', 1707370665, '1', 0),
(128, 'f1e34144b94b0c5ad73840abfdcadc34a19d277f', 44, 2, 27, '708227627.57', 'Puff  T-shirt', '2499', 1707407624, '1', 1),
(129, '1e6c335ebb8012a6b1b6a39b0cf71c4452c57d7b', 51, 2, 27, '554389514.JPG', 'Orange High Density', '2449', 1707457753, '1', 0),
(130, '1e6c335ebb8012a6b1b6a39b0cf71c4452c57d7b', 48, 2, 28, '1685795077.png', 'Gothic Element  Puffed Image ', '2239', 1707457753, '1', 0),
(131, '1e6c335ebb8012a6b1b6a39b0cf71c4452c57d7b', 51, 2, 27, '554389514.JPG', 'Orange High Density', '2449', 1707457893, '1', 0),
(132, '1e6c335ebb8012a6b1b6a39b0cf71c4452c57d7b', 48, 2, 28, '1685795077.png', 'Gothic Element  Puffed Image ', '2239', 1707457893, '1', 0),
(133, '1e6c335ebb8012a6b1b6a39b0cf71c4452c57d7b', 51, 2, 27, '554389514.JPG', 'Orange High Density', '2449', 1707458153, '1', 0),
(134, '1e6c335ebb8012a6b1b6a39b0cf71c4452c57d7b', 48, 2, 28, '1685795077.png', 'Gothic Element  Puffed Image ', '2239', 1707458153, '1', 0),
(135, '32bb68bcd5527c7521cd4adea92bb1e9c9aa6c13', 48, 2, 26, '1685795077.png', 'Gothic Element  Puffed Image ', '2239', 1707458350, '1', 0),
(136, '32bb68bcd5527c7521cd4adea92bb1e9c9aa6c13', 48, 2, 26, '1685795077.png', 'Gothic Element  Puffed Image ', '2239', 1707458367, '1', 0),
(137, '1e6c335ebb8012a6b1b6a39b0cf71c4452c57d7b', 51, 2, 27, '554389514.JPG', 'Orange High Density', '2449', 1707458547, '1', 0),
(138, '1e6c335ebb8012a6b1b6a39b0cf71c4452c57d7b', 48, 2, 28, '1685795077.png', 'Gothic Element  Puffed Image ', '2239', 1707458547, '1', 0),
(139, '84cf4d40672f6d65812f93c9540c6779974a6796', 51, 2, 27, '554389514.JPG', 'Orange High Density', '2449', 1707474143, '1', 0),
(140, '84cf4d40672f6d65812f93c9540c6779974a6796', 52, 2, 26, '190945980.png', ' Tribal T-shirt', '2499', 1707474143, '1', 0),
(141, '84cf4d40672f6d65812f93c9540c6779974a6796', 51, 2, 27, '554389514.JPG', 'Orange High Density', '2449', 1707474291, '1', 0),
(142, '84cf4d40672f6d65812f93c9540c6779974a6796', 52, 2, 26, '190945980.png', ' Tribal T-shirt', '2499', 1707474291, '1', 0),
(143, '84cf4d40672f6d65812f93c9540c6779974a6796', 51, 2, 27, '554389514.JPG', 'Orange High Density', '2449', 1707474409, '1', 0),
(144, '84cf4d40672f6d65812f93c9540c6779974a6796', 52, 2, 26, '190945980.png', ' Tribal T-shirt', '2499', 1707474409, '1', 0),
(145, '84cf4d40672f6d65812f93c9540c6779974a6796', 51, 2, 27, '554389514.JPG', 'Orange High Density', '2449', 1707474441, '1', 0),
(146, '84cf4d40672f6d65812f93c9540c6779974a6796', 52, 2, 26, '190945980.png', ' Tribal T-shirt', '2499', 1707474441, '1', 0),
(147, '84cf4d40672f6d65812f93c9540c6779974a6796', 51, 2, 27, '554389514.JPG', 'Orange High Density', '2449', 1707474509, '1', 0),
(148, '84cf4d40672f6d65812f93c9540c6779974a6796', 52, 2, 26, '190945980.png', ' Tribal T-shirt', '2499', 1707474509, '1', 0),
(149, '84cf4d40672f6d65812f93c9540c6779974a6796', 51, 2, 27, '554389514.JPG', 'Orange High Density', '2449', 1707474530, '1', 0),
(150, '84cf4d40672f6d65812f93c9540c6779974a6796', 52, 2, 26, '190945980.png', ' Tribal T-shirt', '2499', 1707474530, '1', 0),
(151, '84cf4d40672f6d65812f93c9540c6779974a6796', 51, 2, 27, '554389514.JPG', 'Orange High Density', '2449', 1707474614, '1', 0),
(152, '84cf4d40672f6d65812f93c9540c6779974a6796', 52, 2, 26, '190945980.png', ' Tribal T-shirt', '2499', 1707474614, '1', 0),
(153, '84cf4d40672f6d65812f93c9540c6779974a6796', 51, 2, 27, '554389514.JPG', 'Orange High Density', '2449', 1707474670, '1', 0),
(154, '84cf4d40672f6d65812f93c9540c6779974a6796', 52, 2, 26, '190945980.png', ' Tribal T-shirt', '2499', 1707474670, '1', 0),
(155, '84cf4d40672f6d65812f93c9540c6779974a6796', 51, 2, 27, '554389514.JPG', 'Orange High Density', '2449', 1707474793, '1', 0),
(156, '84cf4d40672f6d65812f93c9540c6779974a6796', 52, 2, 26, '190945980.png', ' Tribal T-shirt', '2499', 1707474793, '1', 0),
(157, '84cf4d40672f6d65812f93c9540c6779974a6796', 51, 2, 27, '554389514.JPG', 'Orange High Density', '2449', 1707474833, '1', 0),
(158, '84cf4d40672f6d65812f93c9540c6779974a6796', 52, 2, 26, '190945980.png', ' Tribal T-shirt', '2499', 1707474833, '1', 0),
(159, '84cf4d40672f6d65812f93c9540c6779974a6796', 51, 2, 27, '554389514.JPG', 'Orange High Density', '2449', 1707475093, '1', 0),
(160, '84cf4d40672f6d65812f93c9540c6779974a6796', 52, 2, 26, '190945980.png', ' Tribal T-shirt', '2499', 1707475093, '1', 0),
(161, '84cf4d40672f6d65812f93c9540c6779974a6796', 51, 2, 27, '554389514.JPG', 'Orange High Density', '2449', 1707475133, '1', 0),
(162, '84cf4d40672f6d65812f93c9540c6779974a6796', 52, 2, 26, '190945980.png', ' Tribal T-shirt', '2499', 1707475133, '1', 0),
(163, '84cf4d40672f6d65812f93c9540c6779974a6796', 51, 2, 27, '554389514.JPG', 'Orange High Density', '2449', 1707475161, '1', 0),
(164, '84cf4d40672f6d65812f93c9540c6779974a6796', 52, 2, 26, '190945980.png', ' Tribal T-shirt', '2499', 1707475161, '1', 0),
(165, '84cf4d40672f6d65812f93c9540c6779974a6796', 51, 2, 27, '554389514.JPG', 'Orange High Density', '2449', 1707475165, '1', 0),
(166, '84cf4d40672f6d65812f93c9540c6779974a6796', 52, 2, 26, '190945980.png', ' Tribal T-shirt', '2499', 1707475165, '1', 0),
(167, '84cf4d40672f6d65812f93c9540c6779974a6796', 51, 2, 27, '554389514.JPG', 'Orange High Density', '2449', 1707475190, '1', 0),
(168, '84cf4d40672f6d65812f93c9540c6779974a6796', 52, 2, 26, '190945980.png', ' Tribal T-shirt', '2499', 1707475190, '1', 0),
(169, '84cf4d40672f6d65812f93c9540c6779974a6796', 51, 2, 27, '554389514.JPG', 'Orange High Density', '2449', 1707475218, '1', 0),
(170, '84cf4d40672f6d65812f93c9540c6779974a6796', 52, 2, 26, '190945980.png', ' Tribal T-shirt', '2499', 1707475218, '1', 0),
(171, '84cf4d40672f6d65812f93c9540c6779974a6796', 51, 2, 27, '554389514.JPG', 'Orange High Density', '2449', 1707475249, '1', 0),
(172, '84cf4d40672f6d65812f93c9540c6779974a6796', 52, 2, 26, '190945980.png', ' Tribal T-shirt', '2499', 1707475249, '1', 0),
(173, '84cf4d40672f6d65812f93c9540c6779974a6796', 51, 2, 27, '554389514.JPG', 'Orange High Density', '2449', 1707475340, '1', 0),
(174, '84cf4d40672f6d65812f93c9540c6779974a6796', 52, 2, 26, '190945980.png', ' Tribal T-shirt', '2499', 1707475340, '1', 0),
(175, '84cf4d40672f6d65812f93c9540c6779974a6796', 48, 2, 30, '1685795077.png', 'Gothic Element  Puffed Image ', '2239', 1707475372, '1', 0),
(176, '32bb68bcd5527c7521cd4adea92bb1e9c9aa6c13', 48, 2, 26, '1685795077.png', 'Gothic Element  Puffed Image ', '2239', 1707476687, '1', 0),
(177, '32bb68bcd5527c7521cd4adea92bb1e9c9aa6c13', 46, 22, 26, '2105634137.jpg', 'Mysterious Snake T-shirt', '2699', 1707476687, '1', 0),
(178, '32bb68bcd5527c7521cd4adea92bb1e9c9aa6c13', 48, 2, 26, '1685795077.png', 'Gothic Element  Puffed Image ', '2239', 1707476810, '1', 0),
(179, '32bb68bcd5527c7521cd4adea92bb1e9c9aa6c13', 46, 22, 26, '2105634137.jpg', 'Mysterious Snake T-shirt', '2699', 1707476810, '1', 0),
(180, 'b7884bb1c6fb7b0e130ccc268afca658dd9f2fad', 53, 27, 26, '585481467.jpg', 'NAVY BLUE T-SHIRT', '2799', 1707552139, '1', 0),
(181, 'fef7f904689bea283de60a9d4668c6c90962c63f', 53, 27, 26, '585481467.jpg', 'NAVY BLUE T-SHIRT', '2799', 1707552838, '1', 0),
(182, '2d187873aa91fa3235e35071e6d1f2dec76d3ada', 44, 2, 28, '708227627.57', 'Puff  T-shirt', '2499', 1707801483, '1', 1),
(183, '2d187873aa91fa3235e35071e6d1f2dec76d3ada', 51, 2, 28, '554389514.JPG', 'Orange High Density', '2449', 1707801483, '1', 1),
(184, 'dde79afc2a0281b2e81ff317c9c6095163cd680c', 51, 2, 29, '554389514.JPG', 'Orange High Density', '2449', 1707842243, '1', 1),
(185, 'b7884bb1c6fb7b0e130ccc268afca658dd9f2fad', 48, 2, 30, '1685795077.png', 'Gothic Element  Puffed Image ', '3199', 1707967846, '1', 0),
(186, 'b7884bb1c6fb7b0e130ccc268afca658dd9f2fad', 48, 2, 28, '1685795077.png', 'Gothic Element  Puffed Image ', '3199', 1707968172, '1', 0),
(187, 'b7884bb1c6fb7b0e130ccc268afca658dd9f2fad', 48, 2, 29, '1685795077.png', 'Gothic Element  Puffed Image ', '2239', 1707973338, '1', 0),
(188, 'b7884bb1c6fb7b0e130ccc268afca658dd9f2fad', 48, 2, 28, '1685795077.png', 'Gothic Element  Puffed Image ', '2239', 1707973338, '1', 0),
(189, 'b7884bb1c6fb7b0e130ccc268afca658dd9f2fad', 51, 2, 29, '554389514.JPG', 'Orange High Density', '2450', 1707973338, '1', 0),
(190, '10', 52, 2, 26, '190945980.png', ' Tribal T-shirt', '2499', 1707977307, '1', 0),
(191, '10', 48, 2, 26, '1685795077.png', 'Gothic Element  Puffed Image ', '3199', 1707977307, '1', 0),
(192, '10', 46, 22, 26, '2105634137.jpg', 'Mysterious Snake T-shirt', '2699', 1707977307, '1', 0),
(193, '11', 48, 2, 26, '1685795077.png', 'Gothic Element  Puffed Image ', '3199', 1707977571, '1', 0),
(194, '10', 46, 22, 26, '2105634137.jpg', 'Mysterious Snake T-shirt', '2699', 1707977703, '1', 0),
(195, '10', 46, 22, 26, '2105634137.jpg', 'Mysterious Snake T-shirt', '2699', 1707980550, '1', 0),
(196, '573390cc49557b26d285cbc5fb26c4389c4e8bc4', 52, 2, 26, '190945980.png', ' Tribal T-shirt', '2499', 1707993502, '1', 0),
(197, '573390cc49557b26d285cbc5fb26c4389c4e8bc4', 52, 2, 26, '190945980.png', ' Tribal T-shirt', '2499', 1707994641, '1', 0),
(198, '573390cc49557b26d285cbc5fb26c4389c4e8bc4', 52, 2, 26, '190945980.png', ' Tribal T-shirt', '2499', 1707994647, '1', 0),
(199, '573390cc49557b26d285cbc5fb26c4389c4e8bc4', 52, 2, 26, '190945980.png', ' Tribal T-shirt', '2499', 1707997483, '1', 0),
(200, '573390cc49557b26d285cbc5fb26c4389c4e8bc4', 52, 2, 26, '190945980.png', ' Tribal T-shirt', '2499', 1707997885, '1', 0),
(201, '9c9bbded79cad03294e4afe9a0bb328a3fd0fdb5', 52, 21, 27, '190945980.png', ' Tribal T-shirt', '2499', 1708068383, '1', 0),
(202, 'c7c61a91d14a81727a090dcbb28f713942321e67', 46, 22, 26, '2105634137.jpg', 'Mysterious Snake T-shirt', '2699', 1708079494, '1', 0),
(203, '7e145de6922ec60e0fff5dae92ab9910bdbecc96', 46, 22, 26, '2105634137.jpg', 'Mysterious Snake T-shirt', '2699', 1708137701, '1', 1),
(240, '4b8255496418d0d42c0bf388228bb5fc2046f86e', 48, 2, 30, '1882120575.JPG', 'Gothic Element  Puffed Image ', '3199', 1708591242, '1', 0),
(241, '4b8255496418d0d42c0bf388228bb5fc2046f86e', 48, 2, 26, '1882120575.JPG', 'Gothic Element  Puffed Image ', '3199', 1708591242, '1', 0),
(242, '7eb620c11ed74b7adeb18baddfcf04f6a3a80815', 52, 21, 27, '190945980.png', ' Tribal T-shirt', '2499', 1708591554, '1', 0),
(243, '10', 46, 22, 33, '2105634137.jpg', 'Mysterious Snake T-shirt', '2699', 1708664628, '1', 0),
(244, '10', 48, 2, 26, '1882120575.JPG', 'Gothic Element  Puffed Image ', '3199', 1708664628, '1', 0),
(245, '10', 46, 22, 33, '2105634137.jpg', 'Mysterious Snake T-shirt', '2699', 1708664893, '1', 0),
(246, '10', 48, 2, 26, '1882120575.JPG', 'Gothic Element  Puffed Image ', '3199', 1708664893, '1', 0),
(250, '2226967478806e0e080fc14f52234edd7baa2dbd', 46, 22, 27, '2105634137.jpg', 'Mysterious Snake T-shirt', '2699', 1710144199, '1', 1),
(252, '4b9f7972b647e7ce44cbca4ce2aa62e7b5a18c33', 48, 2, 26, '419647784.png', 'Gothic Element  Puffed Image ', '3199', 1710310174, '1', 0),
(253, '7c6e5fd95ebb3b998dcfa1d84f558961298fe115', 54, 22, 26, '912263658.JPG', 'KIDS', '1499', 1710393848, '1', 0),
(286, '71b6ad0f77a1a4b88ca344b0e7dd0e79c9967a07', 52, 11, 26, '190945980.png', ' Tribal T-shirt', '2499', 1710478714, '1', 1),
(287, '71b6ad0f77a1a4b88ca344b0e7dd0e79c9967a07', 58, 22, 29, '1902188409.png', 'Mysterious Snake ', '1499', 1710478714, '1', 1),
(288, '71b6ad0f77a1a4b88ca344b0e7dd0e79c9967a07', 60, 27, 30, '1105163315.JPG', 'BUBBLE ', '1499', 1710478714, '1', 1),
(289, '71b6ad0f77a1a4b88ca344b0e7dd0e79c9967a07', 48, 2, 26, '419647784.png', 'Gothic Element  Puffed Image ', '3199', 1710478714, '1', 1),
(292, '85c26c436268f3f7e92fa0f05f09de0f09cdd8ee', 44, 2, 28, '708227627.57', 'Puff  T-shirt', '2499', 1711362596, '1', 0),
(295, '3e05d1895d136ec13a7e88892efd79057073692d', 63, 2, 26, '595198358.png', 'MYSTERIOUS SNAKE T-SHIRT-DARK', '2699', 1712407894, '1', 1),
(299, '9a9cbe64cfc4a10e0f810f51cf0d179ed0c5d6f8', 44, 2, 29, '708227627.57', 'PUFF T-SHIRT-BLACK', '2499', 1712824977, '1', 1);

-- --------------------------------------------------------

--
-- Table structure for table `order_coupon`
--

DROP TABLE IF EXISTS `order_coupon`;
CREATE TABLE IF NOT EXISTS `order_coupon` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `user_id` text NOT NULL,
  `coupon_id` int(11) NOT NULL,
  `coupon` varchar(100) NOT NULL,
  `type` int(2) NOT NULL,
  `coupen_type` int(11) NOT NULL,
  `order_id` varchar(100) NOT NULL,
  `discount` varchar(50) NOT NULL,
  `status` int(2) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=158 DEFAULT CHARSET=utf8;

--
-- Dumping data for table `order_coupon`
--

INSERT INTO `order_coupon` (`id`, `user_id`, `coupon_id`, `coupon`, `type`, `coupen_type`, `order_id`, `discount`, `status`) VALUES
(96, 'cbb805483eb3a8c947bc2163e8dc8b28ddad3bb3', 1, 'GIANTFOX20', 1, 1, '1706173988', '20', 1),
(97, 'beccb6663365eb076c75d0ed82b67a25ff6d30ed', 5, 'giantfox32', 2, 2, '1706260716', '500', 1),
(103, 'beccb6663365eb076c75d0ed82b67a25ff6d30ed', 1, 'GIANTFOX20', 1, 1, '1706260716', '20', 1),
(113, '594504702ff1af3cf7b3aff5cd3b4dfebf7b98b3', 7, 'Azmal', 1, 2, '1706279243', '10', 1),
(131, '8711abedf0c13906028254117693c3e577b7e897', 7, 'Azmal', 1, 2, '1706368576', '15', 1),
(132, 'a61933fd337ab079469107ab55615fffd658c392', 9, 'giantfox32', 2, 1, '1706379994', '500', 1),
(145, '1cd7affcb9a1a93448288b78b67fc4376486289e', 7, 'GIANTFOX20', 1, 2, '', '20', 0),
(149, 'e009241e862668dea4534165933a8d6914abc138', 9, 'GIANT', 2, 1, '1706697429', '500', 1),
(152, '16e3899f592567cc4de1877d21446e54af86b865', 9, 'GFD', 2, 1, '', '500', 0),
(155, '10', 9, 'GFD', 2, 1, '1707980550', '500', 1),
(157, '85c26c436268f3f7e92fa0f05f09de0f09cdd8ee', 9, 'GIANTFOX10', 1, 1, '1711362596', '10', 1);

-- --------------------------------------------------------

--
-- Table structure for table `pincode`
--

DROP TABLE IF EXISTS `pincode`;
CREATE TABLE IF NOT EXISTS `pincode` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `name` text NOT NULL,
  `pincode` text NOT NULL,
  `status` int(11) NOT NULL,
  `addeddate` datetime NOT NULL,
  `modifieddate` datetime NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=3 DEFAULT CHARSET=utf8;

--
-- Dumping data for table `pincode`
--

INSERT INTO `pincode` (`id`, `name`, `pincode`, `status`, `addeddate`, `modifieddate`) VALUES
(1, 'Janakpuri', '110058', 1, '2024-02-20 03:49:32', '2024-02-20 03:50:55'),
(2, 'rohini', '110025', 1, '2024-02-20 03:51:05', '2024-03-14 02:15:49');

-- --------------------------------------------------------

--
-- Table structure for table `product`
--

DROP TABLE IF EXISTS `product`;
CREATE TABLE IF NOT EXISTS `product` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `cat_id` int(11) NOT NULL,
  `sub_cat_id` int(11) NOT NULL,
  `thumb_img` text NOT NULL,
  `thumb_img2` text NOT NULL,
  `size_chart` text NOT NULL,
  `image` text NOT NULL,
  `all_images` longtext NOT NULL,
  `name` text NOT NULL,
  `slug` text NOT NULL,
  `mrp_price` float NOT NULL,
  `sale_price` float NOT NULL,
  `rating` text NOT NULL,
  `sku` text NOT NULL,
  `description` blob NOT NULL,
  `specification` blob NOT NULL,
  `top_selling` int(11) NOT NULL,
  `show_home` int(11) NOT NULL,
  `new_drops` int(11) NOT NULL,
  `show_sale` int(11) NOT NULL,
  `sold_out` int(11) NOT NULL COMMENT '1=yes',
  `free_shipping` float NOT NULL,
  `shipping_amt` float DEFAULT NULL,
  `status` int(11) NOT NULL,
  `addeddate` datetime NOT NULL,
  `modifieddate` datetime NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=64 DEFAULT CHARSET=utf8;

--
-- Dumping data for table `product`
--

INSERT INTO `product` (`id`, `cat_id`, `sub_cat_id`, `thumb_img`, `thumb_img2`, `size_chart`, `image`, `all_images`, `name`, `slug`, `mrp_price`, `sale_price`, `rating`, `sku`, `description`, `specification`, `top_selling`, `show_home`, `new_drops`, `show_sale`, `sold_out`, `free_shipping`, `shipping_amt`, `status`, `addeddate`, `modifieddate`) VALUES
(43, 33, 49, '523448839.jpg', '510523915.55', '685981532.24', '[\"141927423WhatsApp Image 2024-01-19 at 3.55.52 PM (1).jpeg\",\"299435275WhatsApp Image 2024-01-19 at 3.55.51 PM.jpeg\",\"1527227224WhatsApp Image 2024-01-19 at 3.55.52 PM.jpeg\"]', '[{\"size_id\":\"26\",\"color_id\":\"2\",\"stock\":\"2\",\"images\":[\"17993864090dsc_9046.jpg\",\"17329210891dsc_9051.jpg\"],\"cat_id\":\"33\",\"sub_cat_id\":\"49\",\"price\":\"2799\"},{\"size_id\":\"27\",\"color_id\":\"2\",\"stock\":\"4\",\"images\":[\"8245828140dsc_9046.jpg\",\"19949562041dsc_9051.jpg\"],\"cat_id\":\"33\",\"sub_cat_id\":\"49\",\"price\":\"2799\"},{\"size_id\":\"28\",\"color_id\":\"2\",\"stock\":\"4\",\"images\":[\"12639202060dsc_9046.jpg\",\"10799069291dsc_9051.jpg\"],\"cat_id\":\"33\",\"sub_cat_id\":\"49\",\"price\":\"2799\"},{\"size_id\":\"29\",\"color_id\":\"2\",\"stock\":\"5\",\"images\":[\"4850294240dsc_9046.jpg\",\"14593231151dsc_9051.jpg\"],\"cat_id\":\"33\",\"sub_cat_id\":\"49\",\"price\":\"2799\"},{\"size_id\":\"30\",\"color_id\":\"2\",\"stock\":\"5\",\"images\":[\"8073006870dsc_9046.jpg\",\"16911625691dsc_9051.jpg\"],\"cat_id\":\"33\",\"sub_cat_id\":\"49\",\"price\":\"2799\"},{\"size_id\":\"35\",\"color_id\":\"2\",\"stock\":\"2\",\"images\":[\"20582734810dsc_9046.jpg\",\"11138794131dsc_9051.jpg\"],\"cat_id\":\"33\",\"sub_cat_id\":\"49\",\"price\":\"2799\"}]', 'FOREST T-SHIRT-BLACK', 'forest-t-shirt-black', 2799, 2799, '5', 'SKU-21007', 0x3c703e5468697320542d73686972742064657369676e20746f206769766520612066756c6c206665656c206f66207374726565742077656172266e6273703b776869636820697320686967686c792064657369676e65642026616d703b20696e737069726564207769746820666f7265737420266e6273703b7072696e74206f6e206769616e7420666f783c2f703e0d0a0d0a3c703e54686520542d73686972742073686f77732074686520666f7265737420696d61676520617420746865206261636b2077686963682073686f77732069747320636f6f6c20616e6420706561636566756c20617320796f75206665656c20696e20666f7265737420616c6c207468652074696d6520796f7520776561722026616d703b206d616b6520796f75206665656c2065787472616f7264696e6172793c2f703e0d0a, 0x3c703e312e266e6273703b203130302520436f74746f6e3c2f703e0d0a0d0a3c703e322e266e6273703b205765696768742d323430266e6273703b47534d3c2f703e0d0a0d0a3c703e332e266e6273703b20486967682044656e736974793c2f703e0d0a0d0a3c703e342e266e6273703b204d61646520496e20496e6469613c2f703e0d0a0d0a3c703e3c7374726f6e673e5761736820436172653c2f7374726f6e673e3c2f703e0d0a0d0a3c703e312e266e6273703b2055736520636f6c6420776174657220746f2070726f7465637420616761696e737420666164696e672026616d703b20736872696e6b696e672e3c2f703e0d0a0d0a3c703e322e266e6273703b2041766f696420686172736820646574657267656e7420616e64207475726e207468656d20696e73696465206f757420666f722074686520776173682e3c2f703e0d0a0d0a3c703e266e6273703b3c2f703e0d0a, 1, 0, 1, 0, 0, 0, 0, 1, '2024-01-17 02:43:40', '2024-04-02 01:54:57'),
(44, 33, 49, '708227627.57', '434231033.57', '575400509.24', '[\"738269274WhatsApp Image 2024-01-19 at 3.57.07 PM.jpeg\",\"181441262WhatsApp Image 2024-01-19 at 3.57.06 PM.jpeg\",\"213618030WhatsApp Image 2024-01-19 at 3.57.05 PM.jpeg\"]', '[{\"size_id\":\"26\",\"color_id\":\"2\",\"stock\":\"1\",\"images\":[\"3828606290dsc_9019.jpg\",\"746764711dsc_9024.jpg\",\"975713152dsc_9025.jpg\"],\"cat_id\":\"33\",\"sub_cat_id\":\"49\",\"price\":\"2499\"},{\"size_id\":\"27\",\"color_id\":\"2\",\"stock\":\"2\",\"images\":[\"4461353400dsc_9019.jpg\",\"10550945851dsc_9024.jpg\",\"11198200492dsc_9025.jpg\"],\"cat_id\":\"33\",\"sub_cat_id\":\"49\",\"price\":\"2499\"},{\"size_id\":\"28\",\"color_id\":\"2\",\"stock\":3,\"images\":[\"3671917060dsc_9019.jpg\",\"13190318391dsc_9024.jpg\",\"17091553542dsc_9025.jpg\"],\"cat_id\":\"33\",\"sub_cat_id\":\"49\",\"price\":\"2499\"},{\"size_id\":\"29\",\"color_id\":\"2\",\"stock\":1,\"images\":[\"17241520820dsc_9019.jpg\",\"4340591391dsc_9024.jpg\",\"17708867532dsc_9025.jpg\"],\"cat_id\":\"33\",\"sub_cat_id\":\"49\",\"price\":\"2499\"},{\"size_id\":\"30\",\"color_id\":\"2\",\"stock\":\"3\",\"images\":[\"4321395470dsc_9019.jpg\",\"556709721dsc_9024.jpg\",\"10051880312dsc_9025.jpg\"],\"cat_id\":\"33\",\"sub_cat_id\":\"49\",\"price\":\"2499\"},{\"size_id\":\"35\",\"color_id\":\"2\",\"stock\":\"2\",\"images\":[\"3067903110dsc_9019.jpg\",\"15918666381dsc_9024.jpg\",\"8468195902dsc_9025.jpg\"],\"cat_id\":\"33\",\"sub_cat_id\":\"49\",\"price\":\"2499\"}]', 'PUFF T-SHIRT-BLACK', 'puff-t-shirt-black', 2499, 2499, '5', 'SKU-21006', 0x3c703e546869732050554646266e6273703b542d73686972742064657369676e266e6273703b74616b657320696e737069726174696f6e2066726f6d207468652073747265657473202e2054686520542d73686972742073686f777320746865207265666c6563746f7220617420746865206261636b266e6273703b776869636820617265206c696b656c792064657369676e656420666f7220736166657479206f7220656e68616e636564207669736962696c69747920696e206c6f77206c6967687420636f6e646974696f6e733c2f703e0d0a, 0x3c703e312e266e6273703b203130302520436f74746f6e20507566662044657369676e3c2f703e0d0a0d0a3c703e322e266e6273703b205765696768742d323430266e6273703b47534d3c2f703e0d0a0d0a3c703e332e266e6273703b20486967682044656e736974793c2f703e0d0a0d0a3c703e342e266e6273703b204d61646520496e20496e6469613c2f703e0d0a0d0a3c703e3c7374726f6e673e5761736820436172653c2f7374726f6e673e3c2f703e0d0a0d0a3c703e312e266e6273703b2055736520636f6c6420776174657220746f2070726f7465637420616761696e737420666164696e672026616d703b20736872696e6b696e672e3c2f703e0d0a0d0a3c703e322e266e6273703b2041766f696420686172736820646574657267656e7420616e64207475726e207468656d20696e73696465206f757420666f722074686520776173682e3c2f703e0d0a, 1, 1, 1, 0, 0, 0, 0, 1, '2024-01-17 02:44:45', '2024-04-02 01:54:04'),
(45, 33, 49, '178430296.JPG', '1673327480.JPG', '332967209.24', '[\"958236519DSC_9118.JPG\",\"1902703629DSC_9113.JPG\",\"1322793512DSC_9119.JPG\"]', '[{\"size_id\":\"26\",\"color_id\":\"2\",\"stock\":\"\",\"images\":[\"5779537870dsc_9113jpgJPG\",\"21220319961dsc_9118jpgJPG\",\"11574617292dsc_9119jpgJPG\"],\"cat_id\":\"33\",\"sub_cat_id\":\"49\",\"price\":\"2199\"},{\"size_id\":\"27\",\"color_id\":\"2\",\"stock\":\"\",\"images\":[\"10921645740dsc_9113jpgJPG\",\"7519185751dsc_9118-1jpgJPG\",\"20577311332dsc_9119-1jpgJPG\"],\"cat_id\":\"33\",\"sub_cat_id\":\"49\",\"price\":\"2199\"},{\"size_id\":\"28\",\"color_id\":\"2\",\"stock\":\"\",\"images\":[\"5444017910dsc_9113-1jpgJPG\",\"17509123181dsc_9118jpgJPG\",\"15634998462dsc_9119-1jpgJPG\"],\"cat_id\":\"33\",\"sub_cat_id\":\"49\",\"price\":\"2199\"},{\"size_id\":\"29\",\"color_id\":\"2\",\"stock\":\"\",\"images\":[\"12518673940dsc_9113-1jpgJPG\",\"8636286521dsc_9118jpgJPG\",\"1626220742dsc_9119-1jpgJPG\"],\"cat_id\":\"33\",\"sub_cat_id\":\"49\",\"price\":\"2199\"},{\"size_id\":\"30\",\"color_id\":\"2\",\"stock\":\"\",\"images\":[\"6884750370dsc_9113-1jpgJPG\",\"14324790511dsc_9118jpgJPG\",\"14820046182dsc_9119-1jpgJPG\"],\"cat_id\":\"33\",\"sub_cat_id\":\"49\",\"price\":\"2199\"},{\"size_id\":\"35\",\"color_id\":\"2\",\"stock\":\"1\",\"images\":[\"2830173200dsc_9113-1jpgJPG\",\"17457359771dsc_9118-1jpgJPG\",\"7013866412dsc_9119-1jpgJPG\"],\"cat_id\":\"33\",\"sub_cat_id\":\"49\",\"price\":\"2199\"}]', 'THE ATTRACTION -BLACK', 'the-attraction-black', 2499, 2199, '5', 'SKU-21003', 0x3c703e5468697320542d73686972742064657369676e2074616b657320696e737069726174696f6e2066726f6d207468652073747265657473202e2054686520542d73686972742073686f777320746865207265666c6563746f727320776869636820617265206c696b656c792064657369676e656420666f72266e6273703b204769616e74666f78207772697474656e206174206261636b20766572746963616c6c79206d616b657320746865206272616e64206d6f7265207072656d69756d20616e6420656e68616e636564207669736962696c69747920696e206c6f77206c6967687420676976657320796f752061206665656c696e6720746f20626520756e69717565206265747777656e20616c6c2e3c2f703e0d0a, 0x3c703e266e6273703b3c2f703e0d0a0d0a3c703e312e266e6273703b203130302520436f74746f6e3c2f703e0d0a0d0a3c703e322e266e6273703b205765696768742d323430266e6273703b47534d3c2f703e0d0a0d0a3c703e332e266e6273703b20486967682044656e736974793c2f703e0d0a0d0a3c703e342e266e6273703b204d61646520496e20496e6469613c2f703e0d0a0d0a3c703e3c7374726f6e673e5761736820436172653c2f7374726f6e673e3c2f703e0d0a0d0a3c703e312e266e6273703b2055736520636f6c6420776174657220746f2070726f7465637420616761696e737420666164696e672026616d703b20736872696e6b696e672e3c2f703e0d0a0d0a3c703e322e266e6273703b2041766f696420686172736820646574657267656e7420616e64207475726e207468656d20696e73696465206f757420666f722074686520776173682e3c2f703e0d0a, 1, 1, 1, 1, 1, 0, 0, 1, '2024-01-17 02:45:38', '2024-04-02 01:52:52'),
(46, 33, 49, '225356921.jpg', '1183654476.jpg', '1160520188.24', '[\"985120511DSC_9152.jpg\",\"1349967361DSC_9150.jpg\",\"1657254886DSC_9145.jpg\"]', '[{\"size_id\":\"26\",\"color_id\":\"29\",\"stock\":\"\",\"images\":[\"537700370photo-2024-03-27-13-09-06-1.jpg\",\"18508977231photo-2024-03-27-13-09-06-2.jpg\",\"819503862photo-2024-03-27-13-59-28.jpg\"],\"cat_id\":\"33\",\"sub_cat_id\":\"49\",\"price\":\"2699\"},{\"size_id\":\"27\",\"color_id\":\"29\",\"stock\":\"2\",\"images\":[\"4049433740photo-2024-03-27-13-09-06-1.jpg\",\"4882546611photo-2024-03-27-13-09-06-2.jpg\",\"17785000652photo-2024-03-27-13-59-28.jpg\"],\"cat_id\":\"33\",\"sub_cat_id\":\"49\",\"price\":\"2699\"},{\"size_id\":\"28\",\"color_id\":\"29\",\"stock\":\"4\",\"images\":[\"8149367570photo-2024-03-27-13-09-06-1.jpg\",\"8972203441photo-2024-03-27-13-09-06-2.jpg\",\"1851702802photo-2024-03-27-13-59-28.jpg\"],\"cat_id\":\"33\",\"sub_cat_id\":\"49\",\"price\":\"2699\"},{\"size_id\":\"29\",\"color_id\":\"29\",\"stock\":\"5\",\"images\":[\"20162945880photo-2024-03-27-13-09-06-1.jpg\",\"5422717841photo-2024-03-27-13-09-06-2.jpg\",\"3371938662photo-2024-03-27-13-59-28.jpg\"],\"cat_id\":\"33\",\"sub_cat_id\":\"49\",\"price\":\"2699\"},{\"size_id\":\"30\",\"color_id\":\"29\",\"stock\":\"2\",\"images\":[\"13485431580photo-2024-03-27-13-09-06-1.jpg\",\"9101558041photo-2024-03-27-13-09-06-2.jpg\",\"11081902062photo-2024-03-27-13-59-28.jpg\"],\"cat_id\":\"33\",\"sub_cat_id\":\"49\",\"price\":\"2699\"},{\"size_id\":\"35\",\"color_id\":\"29\",\"stock\":\"2\",\"images\":[\"19941223100photo-2024-03-27-13-09-06-1.jpg\",\"17622558051photo-2024-03-27-13-09-06-2.jpg\",\"8606210592photo-2024-03-27-13-59-28.jpg\"],\"cat_id\":\"33\",\"sub_cat_id\":\"49\",\"price\":\"2699\"}]', 'MYSTERIOUS  SNAKE- OFF WHITE', 'mysterious-snake-off-white', 2699, 2699, '5', 'SKU-21005', 0x3c703e54686520542d736869727420646973706c6179732074686520776f726420266c6471756f3b4769616e74466f7826726471756f3b20696e207265666c656374696e67206d6174657269616c20616464696e672064697374696e637469766520616e642076697369626c6520656c656d656e747320746f207468652064657369676e3c2f703e0d0a, 0x3c703e312e266e6273703b203130302520436f74746f6e3c2f703e0d0a0d0a3c703e322e266e6273703b205765696768742d323430266e6273703b47534d3c2f703e0d0a0d0a3c703e332e266e6273703b20486967682044656e736974793c2f703e0d0a0d0a3c703e342e266e6273703b204d61646520496e20496e6469613c2f703e0d0a0d0a3c703e3c7374726f6e673e5761736820436172653c2f7374726f6e673e3c2f703e0d0a0d0a3c703e312e266e6273703b2055736520636f6c6420776174657220746f2070726f7465637420616761696e737420666164696e672026616d703b20736872696e6b696e672e3c2f703e0d0a0d0a3c703e322e266e6273703b2041766f696420686172736820646574657267656e7420616e64207475726e207468656d20696e73696465206f757420666f722074686520776173682e3c2f703e0d0a, 1, 1, 1, 0, 0, 0, 0, 1, '2024-01-17 02:46:26', '2024-04-02 01:51:43'),
(48, 33, 50, '419647784.png', '1688827350.png', '1958990221.24', '[\"13217311750Y7A0085-removebg-preview.png\",\"6668189490Y7A0088-removebg-preview.png\",\"12097645400Y7A0090-removebg-preview.png\"]', '[{\"size_id\":\"26\",\"color_id\":\"2\",\"stock\":\"1\",\"images\":[\"212748804100y7a0085-removebg-preview.png\",\"123945913010y7a0088-removebg-preview.png\",\"1365416020y7a0090-removebg-preview.png\"],\"cat_id\":\"33\",\"sub_cat_id\":\"50\",\"price\":\"3199\"},{\"size_id\":\"27\",\"color_id\":\"2\",\"stock\":\"4\",\"images\":[\"201028092100y7a0085-removebg-preview.png\",\"211688043610y7a0088-removebg-preview.png\",\"100778457220y7a0090-removebg-preview.png\"],\"cat_id\":\"33\",\"sub_cat_id\":\"50\",\"price\":\"3199\"},{\"size_id\":\"28\",\"color_id\":\"2\",\"stock\":\"\",\"images\":[\"19371140900y7a0085-removebg-preview.png\",\"139377705610y7a0088-removebg-preview.png\",\"114140599420y7a0090-removebg-preview.png\"],\"cat_id\":\"33\",\"sub_cat_id\":\"50\",\"price\":\"3199\"},{\"size_id\":\"29\",\"color_id\":\"2\",\"stock\":\"\",\"images\":[\"207676693200y7a0085-removebg-preview.png\",\"74880211510y7a0088-removebg-preview.png\",\"192286920120y7a0090-removebg-preview.png\"],\"cat_id\":\"33\",\"sub_cat_id\":\"50\",\"price\":\"3199\"},{\"size_id\":\"30\",\"color_id\":\"2\",\"stock\":\"2\",\"images\":[\"171610901600y7a0085-removebg-preview.png\",\"48230810610y7a0088-removebg-preview.png\",\"57145157920y7a0090-removebg-preview.png\"],\"cat_id\":\"33\",\"sub_cat_id\":\"50\",\"price\":\"3199\"},{\"size_id\":\"35\",\"color_id\":\"2\",\"stock\":\"2\",\"images\":[\"171610901600y7a0085-removebg-preview.png\",\"48230810610y7a0088-removebg-preview.png\",\"57145157920y7a0090-removebg-preview.png\"],\"cat_id\":\"33\",\"sub_cat_id\":\"50\",\"price\":\"3199\"}]', 'GOTHIC ELEMENT -BLACK', 'gothic-element-black', 3199, 3199, '5', 'SKU-21002', 0x3c703e546865207479706f67726170687920656d70686173697a65732074686520476f7468696320656c656d656e7420776974682074686520736861727020656467657320616e64207468652064657369676e20697473656c662074616c6b73206f662064656d6f6e732077697468696e20796f752026616d703b20686f7720796f75206861766520736861636b6c6564207468656d2077697468696e20612063616c6d206578746572696f722e3c2f703e0d0a, 0x3c703e266e6273703b3c2f703e0d0a0d0a3c703e266e6273703b3c2f703e0d0a0d0a3c703e312e266e6273703b203130302520436f74746f6e3c2f703e0d0a0d0a3c703e322e266e6273703b205765696768742d3333302047534d3c2f703e0d0a0d0a3c703e332e266e6273703b20266e6273703b486967682044656e736974793c2f703e0d0a0d0a3c703e342e266e6273703b20266e6273703b4d61646520696e20696e6469613c2f703e0d0a0d0a3c703e3c7374726f6e673e5761736820436172653c2f7374726f6e673e3c2f703e0d0a0d0a3c703e312e266e6273703b2055736520636f6c6420776174657220746f2070726f7465637420616761696e737420666164696e672026616d703b20736872696e6b696e672e3c2f703e0d0a0d0a3c703e322e266e6273703b2041766f696420686172736820646574657267656e7420616e64207475726e207468656d20696e73696465206f757420666f722074686520776173682e3c2f703e0d0a, 1, 1, 1, 0, 0, 0, 0, 1, '2024-01-19 04:22:12', '2024-04-02 01:50:57'),
(51, 33, 51, '554389514.JPG', '1278698992.JPG', '43802284.jpg', '[\"7061065240Y7A0063.JPG\",\"20403567270Y7A0067.JPG\",\"20901904600Y7A0074.JPG\"]', '[{\"size_id\":\"26\",\"color_id\":\"2\",\"stock\":\"5\",\"images\":[\"81569216200y7a0063-removebg-preview.png\",\"11315597410y7a0067-removebg-preview.png\",\"192190072820y7a0074-removebg-preview.png\"],\"cat_id\":\"33\",\"sub_cat_id\":\"51\",\"price\":\"3499\"},{\"size_id\":\"27\",\"color_id\":\"2\",\"stock\":\"1\",\"images\":[\"106475607600y7a0063-removebg-preview.png\",\"160779952510y7a0067-removebg-preview.png\",\"130866843520y7a0074-removebg-preview.png\"],\"cat_id\":\"33\",\"sub_cat_id\":\"51\",\"price\":\"3499\"},{\"size_id\":\"28\",\"color_id\":\"2\",\"stock\":\"\",\"images\":[\"42091690000y7a0063-removebg-preview.png\",\"87179163310y7a0067-removebg-preview.png\",\"179456370320y7a0074-removebg-preview.png\"],\"cat_id\":\"33\",\"sub_cat_id\":\"51\",\"price\":\"3499\"},{\"size_id\":\"29\",\"color_id\":\"2\",\"stock\":\"1\",\"images\":[\"31864215300y7a0063-removebg-preview.png\",\"50058786510y7a0067-removebg-preview.png\",\"125242329920y7a0074-removebg-preview.png\"],\"cat_id\":\"33\",\"sub_cat_id\":\"51\",\"price\":\"3499\"},{\"size_id\":\"30\",\"color_id\":\"2\",\"stock\":\"2\",\"images\":[\"134517814700y7a0063-removebg-preview.png\",\"108267937410y7a0067-removebg-preview.png\",\"149414564420y7a0074-removebg-preview.png\"],\"cat_id\":\"33\",\"sub_cat_id\":\"51\",\"price\":\"3499\"},{\"size_id\":\"35\",\"color_id\":\"2\",\"stock\":\"2\",\"images\":[\"207953689100y7a0063-removebg-preview.png\",\"12700074010y7a0067-removebg-preview.png\",\"70687809720y7a0074-removebg-preview.png\"],\"cat_id\":\"33\",\"sub_cat_id\":\"51\",\"price\":\"3499\"}]', 'ORANGE HIGH DENSITY-BLACK', 'orange-high-density-black', 3499, 3499, '5', 'SKU-21001', 0x3c703e546865206f726967696e616c20626c61636b20686f6f646965266e6273703b686173206f76657273697a6520666974206d61646520696e20686561767920636f74746f6e20666c65656365202c737570657220736f667420616e642068696768207175616c697479206d6174657269616c2e205772697474656e20626f6c64204749414e54464f582077697468206f72616e676520686967682064656e7369747920617474726163742070656f706c65206e65617220796f752e266e6273703b3c2f703e0d0a, 0x3c703e312e266e6273703b203130302520436f74746f6e3c2f703e0d0a0d0a3c703e322e266e6273703b205765696768742d3333302047534d3c2f703e0d0a0d0a3c703e332e266e6273703b20486967682044656e736974793c2f703e0d0a0d0a3c703e3c7374726f6e673e5761736820436172653c2f7374726f6e673e3c2f703e0d0a0d0a3c703e312e266e6273703b2055736520636f6c6420776174657220746f2070726f7465637420616761696e737420666164696e672026616d703b20736872696e6b696e672e3c2f703e0d0a0d0a3c703e322e266e6273703b2041766f696420686172736820646574657267656e7420616e64207475726e207468656d20696e73696465206f757420666f722074686520776173682e3c2f703e0d0a, 1, 1, 1, 0, 0, 0, 0, 1, '2024-01-22 07:29:05', '2024-04-02 01:50:31'),
(52, 33, 49, '190945980.png', '448691723.png', '1145026397.24', '[\"1266427730Y7A0094.JPG\",\"4645143420Y7A0100.JPG\",\"1131852100Y7A0103.JPG\"]', '[{\"size_id\":\"26\",\"color_id\":\"11\",\"stock\":\"5\",\"images\":[\"93443891700y7a0102-removebg-preview.png\",\"17732286510y7a0103-removebg-preview.png\",\"14790387140size-chart1.24\"],\"cat_id\":\"33\",\"sub_cat_id\":\"49\",\"price\":\"2499\"},{\"size_id\":\"27\",\"color_id\":\"11\",\"stock\":\"5\",\"images\":[\"190599833600y7a0102-removebg-preview.png\",\"203743349610y7a0103-removebg-preview.png\"],\"cat_id\":\"33\",\"sub_cat_id\":\"49\",\"price\":\"2499\"},{\"size_id\":\"28\",\"color_id\":\"11\",\"stock\":\"5\",\"images\":[\"44009137600y7a0102-removebg-preview.png\",\"201116486510y7a0103-removebg-preview.png\"],\"cat_id\":\"33\",\"sub_cat_id\":\"49\",\"price\":\"2499\"},{\"size_id\":\"29\",\"color_id\":\"11\",\"stock\":\"4\",\"images\":[\"91525926100y7a0102-removebg-preview.png\",\"174176995610y7a0103-removebg-preview.png\"],\"cat_id\":\"33\",\"sub_cat_id\":\"49\",\"price\":\"2499\"},{\"size_id\":\"30\",\"color_id\":\"11\",\"stock\":\"4\",\"images\":[\"83238624200y7a0102-removebg-preview.png\",\"2148687710y7a0103-removebg-preview.png\"],\"cat_id\":\"33\",\"sub_cat_id\":\"49\",\"price\":\"2499\"},{\"size_id\":\"35\",\"color_id\":\"11\",\"stock\":\"2\",\"images\":[\"180878486700y7a0102-removebg-preview.png\",\"214658576210y7a0103-removebg-preview.png\"],\"cat_id\":\"33\",\"sub_cat_id\":\"49\",\"price\":\"2499\"}]', 'TRIBAL T-SHIRT-M GREEN', 'tribal-t-shirt-m-green', 2499, 2499, '5', 'SKU-21004', 0x3c703e54524942414c20542d5368697274266e6273703b646973706c6179732074686520776f7264202671756f743b3c656d3e4749414e54464f583c2f656d3e2671756f743b266e6273703b696e2074726962616c206c616e677561676520616464696e672063756c747572616c20616e6420617274697374696320746f75636820746f207468652064657369676e2e3c2f703e0d0a, 0x3c703e312e266e6273703b203130302520436f74746f6e3c2f703e0d0a0d0a3c703e322e266e6273703b205765696768742d323430266e6273703b47534d3c2f703e0d0a0d0a3c703e332e266e6273703b20486967682044656e736974793c2f703e0d0a0d0a3c703e342e266e6273703b204d61646520496e20496e6469613c2f703e0d0a0d0a3c703e3c7374726f6e673e5761736820436172653c2f7374726f6e673e3c2f703e0d0a0d0a3c703e312e266e6273703b2055736520636f6c6420776174657220746f2070726f7465637420616761696e737420666164696e672026616d703b20736872696e6b696e672e3c2f703e0d0a0d0a3c703e322e266e6273703b2041766f696420686172736820646574657267656e7420616e64207475726e207468656d20696e73696465206f757420666f722074686520776173682e3c2f703e0d0a, 1, 1, 1, 0, 0, 0, 0, 1, '2024-01-22 07:49:13', '2024-04-02 01:49:35'),
(53, 33, 49, '585481467.jpg', '482419157.jpg', '510385790.24', '[\"1964622502DSC_9098.jpg\",\"1221304271DSC_9104.jpg\"]', '[{\"size_id\":\"26\",\"color_id\":\"27\",\"stock\":\"2\",\"images\":[\"5637438800dsc_9098.jpg\",\"11982670821dsc_9104.jpg\"],\"cat_id\":\"33\",\"sub_cat_id\":\"49\",\"price\":\"2799\"},{\"size_id\":\"27\",\"color_id\":\"27\",\"stock\":\"3\",\"images\":[\"17254301160dsc_9098.jpg\",\"14738149271dsc_9104.jpg\"],\"cat_id\":\"33\",\"sub_cat_id\":\"49\",\"price\":\"2799\"},{\"size_id\":\"28\",\"color_id\":\"27\",\"stock\":\"5\",\"images\":[\"8493939800dsc_9098.jpg\",\"16416367511dsc_9104.jpg\"],\"cat_id\":\"33\",\"sub_cat_id\":\"49\",\"price\":\"2799\"},{\"size_id\":\"29\",\"color_id\":\"27\",\"stock\":\"4\",\"images\":[\"17144708080dsc_9098.jpg\",\"4856919431dsc_9104.jpg\"],\"cat_id\":\"33\",\"sub_cat_id\":\"49\",\"price\":\"2799\"},{\"size_id\":\"30\",\"color_id\":\"27\",\"stock\":\"4\",\"images\":[\"11198180180dsc_9098.jpg\",\"9836373961dsc_9104.jpg\"],\"cat_id\":\"33\",\"sub_cat_id\":\"49\",\"price\":\"2799\"},{\"size_id\":\"35\",\"color_id\":\"27\",\"stock\":\"2\",\"images\":[\"7281569010dsc_9098.jpg\",\"15716301221dsc_9104.jpg\"],\"cat_id\":\"33\",\"sub_cat_id\":\"49\",\"price\":\"2799\"}]', ' FOREST T-SHIRT- NAVY BLUE', 'forest-t-shirt-navy-blue', 2799, 2799, '5', 'SKU-21007', '', '', 1, 1, 1, 0, 0, 0, NULL, 1, '2024-02-05 02:42:12', '2024-04-02 01:47:38'),
(58, 37, 44, '1902188409.png', '1940468579.png', '', '[\"71650421\"]', '[{\"size_id\":\"28\",\"color_id\":\"2\",\"stock\":\"4\",\"images\":[\"166579275000y7a3478-removebg-preview.png\",\"121466921610y7a3479-removebg-preview.png\",\"170567806620y7a3482-removebg-preview.png\"],\"cat_id\":\"37\",\"sub_cat_id\":\"44\",\"price\":\"1499\"},{\"size_id\":\"29\",\"color_id\":\"2\",\"stock\":\"4\",\"images\":[\"81077008100y7a3478-removebg-preview.png\",\"103795578910y7a3479-removebg-preview.png\",\"89617673020y7a3481-removebg-preview.png\"],\"cat_id\":\"37\",\"sub_cat_id\":\"44\",\"price\":\"1499\"},{\"size_id\":\"30\",\"color_id\":\"2\",\"stock\":\"5\",\"images\":[\"174882778800y7a3478-removebg-preview.png\",\"172743952710y7a3479-removebg-preview.png\",\"210695513120y7a3481-removebg-preview.png\"],\"cat_id\":\"37\",\"sub_cat_id\":\"44\",\"price\":\"1499\"}]', 'MYSTERIOUS SNAKE T-SHIRT- OFF WHITE', 'mysterious-snake-t-shirt-off-white', 1499, 1499, '5', 'SKU-21008', '', '', 1, 1, 1, 0, 0, 0, NULL, 1, '2024-03-14 06:20:37', '2024-04-02 01:48:23'),
(59, 37, 44, '1756377028.png', '1610977981.png', '', '[\"381909729\"]', '[{\"size_id\":\"28\",\"color_id\":\"2\",\"stock\":\"5\",\"images\":[\"199561127500y7a3460-removebg-preview.png\",\"98333303410y7a3464-removebg-preview.png\",\"187174058720y7a3465-removebg-preview.png\"],\"cat_id\":\"37\",\"sub_cat_id\":\"44\",\"price\":\"1499\"},{\"size_id\":\"29\",\"color_id\":\"2\",\"stock\":\"5\",\"images\":[\"72695613400y7a3460-removebg-preview.png\",\"96368633310y7a3464-removebg-preview.png\",\"206324620620y7a3465-removebg-preview.png\"],\"cat_id\":\"37\",\"sub_cat_id\":\"44\",\"price\":\"1499\"},{\"size_id\":\"30\",\"color_id\":\"2\",\"stock\":\"5\",\"images\":[\"77461124400y7a3460-removebg-preview.png\",\"12121420010y7a3464-removebg-preview.png\",\"103399864220y7a3465-removebg-preview.png\"],\"cat_id\":\"37\",\"sub_cat_id\":\"44\",\"price\":\"1499\"}]', 'THE HUNT KIDS T-SHIRT- NAVY BLUE', 'the-hunt-kids-t-shirt-navy-blue', 1499, 1499, '5', 'SKU-21009', '', '', 1, 1, 1, 0, 0, 0, NULL, 1, '2024-03-14 09:31:58', '2024-04-02 01:48:08'),
(60, 37, 44, '1439835168.png', '1991242713.png', '', '[\"910390471\"]', '[{\"size_id\":\"28\",\"color_id\":\"27\",\"stock\":\"5\",\"images\":[\"72970394700y7a3523-removebg-preview.png\",\"85793160310y7a3524-removebg-preview.png\",\"174535358420y7a3526-removebg-preview.png\"],\"cat_id\":\"37\",\"sub_cat_id\":\"44\",\"price\":\"1499\"},{\"size_id\":\"29\",\"color_id\":\"27\",\"stock\":\"5\",\"images\":[\"174066987700y7a3523-removebg-preview.png\",\"110677426010y7a3524-removebg-preview.png\",\"45971345920y7a3526-removebg-preview.png\"],\"cat_id\":\"37\",\"sub_cat_id\":\"44\",\"price\":\"1499\"},{\"size_id\":\"30\",\"color_id\":\"27\",\"stock\":\"4\",\"images\":[\"50220316400y7a3523-removebg-preview.png\",\"73682791410y7a3524-removebg-preview.png\",\"62749203920y7a3526-removebg-preview.png\"],\"cat_id\":\"37\",\"sub_cat_id\":\"44\",\"price\":\"1499\"}]', ' BUBBLE T-SHIRT- BLACK', 'bubble-t-shirt-black', 1499, 1499, '5', 'SKU-21009', '', '', 1, 1, 1, 0, 0, 0, NULL, 1, '2024-03-14 09:41:55', '2024-04-02 01:47:54'),
(61, 33, 49, '1451688069.png', '1349946520.png', '304431285.24', '[\"819062784\"]', '[{\"size_id\":\"26\",\"color_id\":\"27\",\"stock\":\"5\",\"images\":[\"910354656012-removebg-preview.png\",\"478443547113-removebg-preview.png\",\"944144631214-removebg-preview.png\"],\"cat_id\":\"33\",\"sub_cat_id\":\"49\",\"price\":\"2599\"},{\"size_id\":\"27\",\"color_id\":\"27\",\"stock\":\"5\",\"images\":[\"604890229012-removebg-preview.png\",\"127395499113-removebg-preview.png\",\"141451154214-removebg-preview.png\"],\"cat_id\":\"33\",\"sub_cat_id\":\"49\",\"price\":\"2599\"},{\"size_id\":\"28\",\"color_id\":\"27\",\"stock\":\"5\",\"images\":[\"1311458134012-removebg-preview.png\",\"281027680113-removebg-preview.png\",\"1134203149214-removebg-preview.png\"],\"cat_id\":\"33\",\"sub_cat_id\":\"49\",\"price\":\"2599\"},{\"size_id\":\"29\",\"color_id\":\"27\",\"stock\":\"5\",\"images\":[\"1439088053012-removebg-preview.png\",\"446932266113-removebg-preview.png\",\"935684457214-removebg-preview.png\"],\"cat_id\":\"33\",\"sub_cat_id\":\"49\",\"price\":\"2599\"},{\"size_id\":\"30\",\"color_id\":\"27\",\"stock\":\"6\",\"images\":[\"184384637012-removebg-preview.png\",\"2012174848113-removebg-preview.png\",\"1757198572214-removebg-preview.png\"],\"cat_id\":\"33\",\"sub_cat_id\":\"49\",\"price\":\"2599\"},{\"size_id\":\"35\",\"color_id\":\"27\",\"stock\":\"5\",\"images\":[\"822310026012-removebg-preview.png\",\"944110727113-removebg-preview.png\",\"409043565214-removebg-preview.png\"],\"cat_id\":\"33\",\"sub_cat_id\":\"49\",\"price\":\"2599\"}]', 'THE HUNT T-SHIRT- NAVY BLUE', 'the-hunt-t-shirt-navy-blue', 2599, 2599, '5', 'SKU-21010', '', '', 1, 1, 1, 0, 0, 0, NULL, 1, '2024-03-20 11:32:27', '2024-04-02 01:46:29'),
(62, 33, 49, '1496653098.png', '1312495283.png', '1844678483.24', '[\"1778627289\"]', '[{\"size_id\":\"26\",\"color_id\":\"2\",\"stock\":\"5\",\"images\":[\"206940071408-removebg-preview.png\",\"56596472819-removebg-preview.png\",\"1706726034210-removebg-preview.png\"],\"cat_id\":\"33\",\"sub_cat_id\":\"49\",\"price\":\"2599\"},{\"size_id\":\"27\",\"color_id\":\"2\",\"stock\":\"5\",\"images\":[\"169926150808-removebg-preview.png\",\"193901057719-removebg-preview.png\",\"338317131210-removebg-preview.png\"],\"cat_id\":\"33\",\"sub_cat_id\":\"49\",\"price\":\"2599\"},{\"size_id\":\"28\",\"color_id\":\"2\",\"stock\":\"5\",\"images\":[\"89893161008-removebg-preview.png\",\"90615086819-removebg-preview.png\",\"290558451210-removebg-preview.png\"],\"cat_id\":\"33\",\"sub_cat_id\":\"49\",\"price\":\"2599\"},{\"size_id\":\"29\",\"color_id\":\"2\",\"stock\":\"5\",\"images\":[\"51456897508-removebg-preview.png\",\"177389233219-removebg-preview.png\",\"2107892099210-removebg-preview.png\"],\"cat_id\":\"33\",\"sub_cat_id\":\"49\",\"price\":\"2599\"},{\"size_id\":\"30\",\"color_id\":\"2\",\"stock\":\"5\",\"images\":[\"51801736708-removebg-preview.png\",\"137016015419-removebg-preview.png\",\"1625965709210-removebg-preview.png\"],\"cat_id\":\"33\",\"sub_cat_id\":\"49\",\"price\":\"2599\"},{\"size_id\":\"35\",\"color_id\":\"2\",\"stock\":\"2\",\"images\":[\"179071849408-removebg-preview.png\",\"79521061919-removebg-preview.png\",\"1977439112210-removebg-preview.png\"],\"cat_id\":\"33\",\"sub_cat_id\":\"49\",\"price\":\"2599\"}]', 'TRIBAL T-SHIRT-BLACK', 'tribal-t-shirt-black', 2599, 2599, '5', 'SKU-21011', '', '', 1, 1, 1, 0, 0, 0, NULL, 1, '2024-03-23 05:40:34', '2024-04-02 01:45:44'),
(63, 33, 49, '595198358.png', '1506582033.png', '2108204313.24', '[\"1427435239\"]', '[{\"size_id\":\"26\",\"color_id\":\"2\",\"stock\":\"4\",\"images\":[\"197275025404.jpg\",\"72371342315.jpg\",\"178258663726.jpg\"],\"cat_id\":\"33\",\"sub_cat_id\":\"49\",\"price\":\"2699\"},{\"size_id\":\"27\",\"color_id\":\"2\",\"stock\":\"5\",\"images\":[\"97525529904.jpg\",\"76618411415.jpg\",\"129375013126.jpg\"],\"cat_id\":\"33\",\"sub_cat_id\":\"49\",\"price\":\"2699\"},{\"size_id\":\"28\",\"color_id\":\"2\",\"stock\":\"5\",\"images\":[\"66244070404.jpg\",\"122239352515.jpg\",\"62822608226.jpg\"],\"cat_id\":\"33\",\"sub_cat_id\":\"49\",\"price\":\"2699\"},{\"size_id\":\"29\",\"color_id\":\"2\",\"stock\":\"5\",\"images\":[\"150765723504.jpg\",\"20830546615.jpg\",\"92010638626.jpg\"],\"cat_id\":\"33\",\"sub_cat_id\":\"49\",\"price\":\"2699\"},{\"size_id\":\"30\",\"color_id\":\"2\",\"stock\":\"5\",\"images\":[\"19952435104.jpg\",\"27997830515.jpg\",\"129436489526.jpg\"],\"cat_id\":\"33\",\"sub_cat_id\":\"49\",\"price\":\"2699\"},{\"size_id\":\"35\",\"color_id\":\"2\",\"stock\":\"2\",\"images\":[],\"cat_id\":\"33\",\"sub_cat_id\":\"49\",\"price\":\"2699\"}]', 'MYSTERIOUS SNAKE T-SHIRT-DARK', 'mysterious-snake-t-shirt-dark', 2699, 2699, '5', 'SKU-21013', '', '', 0, 1, 1, 0, 0, 0, NULL, 1, '2024-03-25 02:42:55', '2024-04-08 02:20:34');

-- --------------------------------------------------------

--
-- Table structure for table `product_review`
--

DROP TABLE IF EXISTS `product_review`;
CREATE TABLE IF NOT EXISTS `product_review` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `p_id` int(11) NOT NULL,
  `rating_star` text NOT NULL,
  `comment` text NOT NULL,
  `addeddate` datetime NOT NULL,
  `status` int(11) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Table structure for table `registration`
--

DROP TABLE IF EXISTS `registration`;
CREATE TABLE IF NOT EXISTS `registration` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `image` text NOT NULL,
  `username` varchar(50) NOT NULL,
  `firstname` varchar(200) NOT NULL,
  `lastname` varchar(150) NOT NULL,
  `email` varchar(50) NOT NULL,
  `mobile` bigint(20) NOT NULL,
  `password` varchar(50) NOT NULL,
  `city` text NOT NULL,
  `address` text NOT NULL,
  `post_code` text NOT NULL,
  `country` text NOT NULL,
  `state` text NOT NULL,
  `status` int(11) NOT NULL,
  `addeddate` datetime NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=12 DEFAULT CHARSET=utf8;

--
-- Dumping data for table `registration`
--

INSERT INTO `registration` (`id`, `image`, `username`, `firstname`, `lastname`, `email`, `mobile`, `password`, `city`, `address`, `post_code`, `country`, `state`, `status`, `addeddate`) VALUES
(10, 'user.jpg', 'admin', '', '', 'admin@gmail.com', 7011496870, '123456789', '', '', '', '', '', 1, '2024-02-15 11:24:10'),
(11, 'user.jpg', 'Manvi shah ', '', '', 'manvieshah@gmail.com', 7065848000, 'manvie,19', '', '', '', '', '', 1, '2024-04-11 14:15:49');

-- --------------------------------------------------------

--
-- Table structure for table `singlebanner`
--

DROP TABLE IF EXISTS `singlebanner`;
CREATE TABLE IF NOT EXISTS `singlebanner` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `image` text NOT NULL,
  `title` text NOT NULL,
  `content` text NOT NULL,
  `link` text NOT NULL,
  `status` int(11) NOT NULL,
  `addeddate` datetime NOT NULL,
  `modifieddate` datetime NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=7 DEFAULT CHARSET=utf8;

--
-- Dumping data for table `singlebanner`
--

INSERT INTO `singlebanner` (`id`, `image`, `title`, `content`, `link`, `status`, `addeddate`, `modifieddate`) VALUES
(6, '1705574931.jpg', '', '', 'https://giantfox.in/shop/tops', 1, '2024-01-18 04:18:51', '2024-03-20 11:41:07');

-- --------------------------------------------------------

--
-- Table structure for table `site_setting`
--

DROP TABLE IF EXISTS `site_setting`;
CREATE TABLE IF NOT EXISTS `site_setting` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `logo` text NOT NULL,
  `empty_img` text NOT NULL,
  `content` blob NOT NULL,
  `mobile` varchar(50) NOT NULL,
  `alt_mobile` varchar(50) NOT NULL,
  `email` varchar(100) NOT NULL,
  `alt_email` varchar(100) NOT NULL,
  `address` text NOT NULL,
  `facebook` text NOT NULL,
  `twitter` text NOT NULL,
  `instagram` text NOT NULL,
  `youtube` text NOT NULL,
  `linkdin` text NOT NULL,
  `map` text NOT NULL,
  `shipping` int(11) NOT NULL COMMENT '1=yes, 2=no',
  `amount` float NOT NULL,
  `other` varchar(50) NOT NULL,
  `express` varchar(50) NOT NULL,
  `cod_avali` int(11) NOT NULL COMMENT '1=yes, 2=no',
  `online_avali` int(11) NOT NULL COMMENT '1=yes, 2=no',
  `view_all` int(11) NOT NULL COMMENT '1=show,0=no',
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=18 DEFAULT CHARSET=utf8;

--
-- Dumping data for table `site_setting`
--

INSERT INTO `site_setting` (`id`, `logo`, `empty_img`, `content`, `mobile`, `alt_mobile`, `email`, `alt_email`, `address`, `facebook`, `twitter`, `instagram`, `youtube`, `linkdin`, `map`, `shipping`, `amount`, `other`, `express`, `cod_avali`, `online_avali`, `view_all`) VALUES
(1, '1705470035.png', '', '', '9999117789', '9999933273', 'support@giantfox.in', 'sales@giantfox.in', 'Address -CP -133, Pitampura, New Delhi -110034.', '', 'https://twitter.com/', 'https://www.instagram.com/giantfox.in?utm_source=ig_web_button_share_sheet&igsh=ZDNlZDc0MzIxNw==', 'https://www.youtube.com/', 'https://www.linkedin.com/', '<iframe src=\"https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3502.024852414841!2d77.0783872149481!3d28.62901724099117!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x390d04bf6ac2495d%3A0xfff07fc03531f009!2sJanakpuri%20District%20Center%2C%20Janakpuri%2C%20Delhi!5e0!3m2!1sen!2sin!4v1667453565010!5m2!1sen!2sin\" width=\"100%\" height=\"300\" style=\"border:0;\" allowfullscreen=\"\" loading=\"lazy\" referrerpolicy=\"no-referrer-when-downgrade\"></iframe>', 1, 100, '250', '1500', 2, 1, 1),
(2, '1710998846.Guru_20240224_105339753 (1) (1) (2) (1)', '', '', 'video', '', '', '', '', '', '', '', '', '', '', 0, 0, '', '', 0, 0, 0),
(3, 'About Us', '', 0x3c703e57656c636f6d6520746f204769616e7420466f782c207768657265207374796c65206d6565747320636f6d666f72742c20616e64206576657279207468726561642074656c6c7320612073746f72792e20576520617265206e6f74206a757374206120636c6f7468696e67206272616e643b2077652061726520612063656c6562726174696f6e206f6620696e646976696475616c6974792c20636f6e666964656e63652c20616e642074686520737069726974206f662073656c662d65787072657373696f6e2e204174204769616e7420466f782c2077652062656c696576652074686174207768617420796f75207765617220697320616e20657874656e73696f6e206f662077686f20796f75206172652e3c2f703e0d0a0d0a3c703e4f75722053746f72793c2f703e0d0a0d0a3c703e45737461626c6973686564207769746820612070617373696f6e20666f722066617368696f6e20616e64206120636f6d6d69746d656e7420746f207175616c6974792c204769616e7420466f782077617320666f756e64656420627920612067726f7570206f66206372656174697665206d696e64732077686f20656e766973696f6e65642061206272616e64207468617420676f6573206265796f6e64207472656e64732e204f7572206a6f75726e657920626567616e207769746820612073696d706c6520696465613a20746f2070726f7669646520636c6f7468696e672074686174206e6f74206f6e6c79206c6f6f6b7320676f6f6420627574206665656c7320676f6f6420746f6f2e20576520756e6465727374616e642074686520696d706f7274616e6365206f662073656c662d65787072657373696f6e207468726f7567682066617368696f6e2c20616e642077652073747269766520746f206f6666657220706965636573207468617420656d706f77657220796f7520746f2073686f776361736520796f757220756e69717565207374796c652e3c2f703e0d0a0d0a3c703e5175616c697479204372616674736d616e736869703c2f703e0d0a0d0a3c703e417420746865206865617274206f66204769616e7420466f7820697320612064656469636174696f6e20746f206372616674736d616e7368697020616e6420617474656e74696f6e20746f2064657461696c2e2045616368206761726d656e742069732074686f7567687466756c6c792064657369676e656420616e64206d65746963756c6f75736c79206372616674656420746f20656e7375726520746865207065726665637420626c656e64206f66207374796c652c20636f6d666f72742c20616e64206475726162696c6974792e20576520736f75726365207468652066696e657374206661627269637320616e64206d6174657269616c732c20776f726b696e67207769746820736b696c6c6564206172746973616e732077686f207368617265206f757220636f6d6d69746d656e7420746f20657863656c6c656e63652e3c2f703e0d0a0d0a3c703e4f7572204d697373696f6e3c2f703e0d0a0d0a3c703e4f7572206d697373696f6e20697320746f207265646566696e65207468652077617920796f7520657870657269656e63652066617368696f6e2e2057652077616e7420796f7520746f206665656c20636f6e666964656e742c20636f6d666f727461626c652c20616e64206566666f72746c6573736c79207374796c69736820696e206576657279204769616e7420466f782070696563652e205768657468657220796f75262333393b7265206472657373696e6720757020666f722061207370656369616c206f63636173696f6e206f7220656d62726163696e672063617375616c206368696320666f72206576657279646179206d6f6d656e74732c206f757220636f6c6c656374696f6e7320617265206375726174656420746f20636f6d706c656d656e7420796f7572206c6966657374796c652e3c2f703e0d0a0d0a3c703e4574686963616c20616e64205375737461696e61626c65205072616374696365733c2f703e0d0a0d0a3c703e4769616e7420466f78206973206e6f74206a7573742061626f75742066617368696f6e3b206974262333393b732061626f757420726573706f6e736962696c6974792e205765206172652064656469636174656420746f2070726f6d6f74696e67206574686963616c20616e64207375737461696e61626c652070726163746963657320696e207468652066617368696f6e20696e6475737472792e2046726f6d2065636f2d667269656e646c79206d6174657269616c7320746f2066616972206c61626f72207072616374696365732c2077652073747269766520746f206d616b65206120706f73697469766520696d70616374206f6e20626f7468207374796c6520616e642074686520656e7669726f6e6d656e742e3c2f703e0d0a0d0a3c703e4a6f696e20746865204769616e7420466f7820436f6d6d756e6974793c2f703e0d0a0d0a3c703e4769616e7420466f78206973206d6f7265207468616e2061206272616e643b206974262333393b73206120636f6d6d756e697479206f66206c696b652d6d696e64656420696e646976696475616c732077686f20617070726563696174652074686520617274206f66206472657373696e672077656c6c2e204a6f696e207573206f6e2074686973206a6f75726e6579206f662073656c662d65787072657373696f6e2c20616e64206c657420796f7572207374796c6520726f61722077697468204769616e7420466f782e3c2f703e0d0a0d0a3c703e5468616e6b20796f7520666f722063686f6f73696e67204769616e7420466f78266d646173683b77686572652066617368696f6e206d656574732070617373696f6e2e3c2f703e0d0a, '', '', '', '', '', '', '', '', '', '', '', 0, 0, '', '', 0, 0, 0),
(4, 'Term & Condition', '', 0x3c646976207374796c653d2270616464696e673a30696e2030696e2030696e2030696e223e0d0a3c646976207374796c653d222070616464696e673a30636d2030636d2030636d2030636d223e0d0a3c646976207374796c653d22312e3070743b2070616464696e673a30636d2030636d2030636d2030636d223e0d0a3c646976207374796c653d22312e3070743b2070616464696e673a30636d2030636d2030636d2030636d223e0d0a3c70207374796c653d226d617267696e2d6c6566743a30636d3b206d617267696e2d72696768743a30636d223e3c7370616e207374796c653d22666f6e742d73697a653a31317074223e3c7370616e207374796c653d22666f6e742d66616d696c793a43616c696272692c223e3c7374726f6e673e3c7370616e207374796c653d22666f6e742d73697a653a31322e307074223e3c7370616e207374796c653d22636f6c6f723a23333734313531223e5465726d7320616e6420436f6e646974696f6e733c2f7370616e3e3c2f7370616e3e3c2f7374726f6e673e3c2f7370616e3e3c2f7370616e3e3c2f703e0d0a0d0a3c70207374796c653d226d617267696e2d6c6566743a30636d3b206d617267696e2d72696768743a30636d223e3c7370616e207374796c653d22666f6e742d73697a653a31317074223e3c7370616e207374796c653d22666f6e742d66616d696c793a43616c696272692c223e3c7370616e207374796c653d22666f6e742d73697a653a31322e307074223e3c7370616e207374796c653d22636f6c6f723a23333734313531223e57656c636f6d6520746f204769616e7420466f782120506c656173652072656164207468657365205465726d7320616e6420436f6e646974696f6e73206361726566756c6c79206265666f7265207573696e67206f757220776562736974652e3c2f7370616e3e3c2f7370616e3e3c2f7370616e3e3c2f7370616e3e3c2f703e0d0a0d0a3c70207374796c653d226d617267696e2d6c6566743a30636d3b206d617267696e2d72696768743a30636d223e3c7370616e207374796c653d22666f6e742d73697a653a31317074223e3c7370616e207374796c653d22666f6e742d66616d696c793a43616c696272692c223e3c7370616e207374796c653d22666f6e742d73697a653a31322e307074223e3c7370616e207374796c653d22636f6c6f723a23333734313531223e427920616363657373696e67206f72207573696e67204769616e7420466f78262333393b73207765627369746520286769616e74666f782e696e292c20796f7520616772656520746f20636f6d706c79207769746820616e6420626520626f756e642062792074686520666f6c6c6f77696e67207465726d7320616e6420636f6e646974696f6e732e20496620796f7520646f206e6f7420616772656520746f207468657365207465726d732c20706c6561736520646f206e6f7420757365207468697320776562736974652e3c2f7370616e3e3c2f7370616e3e3c2f7370616e3e3c2f7370616e3e3c2f703e0d0a0d0a3c70207374796c653d226d617267696e2d6c6566743a30636d3b206d617267696e2d72696768743a30636d223e3c7370616e207374796c653d22666f6e742d73697a653a31317074223e3c7370616e207374796c653d22666f6e742d66616d696c793a43616c696272692c223e3c7374726f6e673e3c7370616e207374796c653d22666f6e742d73697a653a31322e307074223e3c7370616e207374796c653d22636f6c6f723a23333734313531223e312e20557365206f6620576562736974653c2f7370616e3e3c2f7370616e3e3c2f7374726f6e673e3c2f7370616e3e3c2f7370616e3e3c2f703e0d0a0d0a3c70207374796c653d226d617267696e2d6c6566743a30636d3b206d617267696e2d72696768743a30636d223e3c7370616e207374796c653d22666f6e742d73697a653a31317074223e3c7370616e207374796c653d22666f6e742d66616d696c793a43616c696272692c223e3c7370616e207374796c653d22666f6e742d73697a653a31322e307074223e3c7370616e207374796c653d22636f6c6f723a23333734313531223e312e3120596f75206d757374206265206174206c65617374203138207965617273206f6c6420746f20757365207468697320776562736974652e204279207573696e672074686973207765627369746520616e64206167726565696e6720746f207468657365207465726d732c20796f752077617272616e7420616e6420726570726573656e74207468617420796f7520617265206174206c65617374203138207965617273206f66206167652e3c2f7370616e3e3c2f7370616e3e3c2f7370616e3e3c2f7370616e3e3c2f703e0d0a0d0a3c70207374796c653d226d617267696e2d6c6566743a30636d3b206d617267696e2d72696768743a30636d223e3c7370616e207374796c653d22666f6e742d73697a653a31317074223e3c7370616e207374796c653d22666f6e742d66616d696c793a43616c696272692c223e3c7370616e207374796c653d22666f6e742d73697a653a31322e307074223e3c7370616e207374796c653d22636f6c6f723a23333734313531223e312e3220596f752061726520726573706f6e7369626c6520666f7220656e737572696e67207468617420616c6c20706572736f6e732077686f20616363657373206f75722077656273697465207468726f75676820796f757220696e7465726e657420636f6e6e656374696f6e20617265206177617265206f66207468657365207465726d7320616e6420636f6d706c792077697468207468656d2e3c2f7370616e3e3c2f7370616e3e3c2f7370616e3e3c2f7370616e3e3c2f703e0d0a0d0a3c70207374796c653d226d617267696e2d6c6566743a30636d3b206d617267696e2d72696768743a30636d223e3c7370616e207374796c653d22666f6e742d73697a653a31317074223e3c7370616e207374796c653d22666f6e742d66616d696c793a43616c696272692c223e3c7374726f6e673e3c7370616e207374796c653d22666f6e742d73697a653a31322e307074223e3c7370616e207374796c653d22636f6c6f723a23333734313531223e322e2050726f6475637420496e666f726d6174696f6e3c2f7370616e3e3c2f7370616e3e3c2f7374726f6e673e3c2f7370616e3e3c2f7370616e3e3c2f703e0d0a0d0a3c70207374796c653d226d617267696e2d6c6566743a30636d3b206d617267696e2d72696768743a30636d223e3c7370616e207374796c653d22666f6e742d73697a653a31317074223e3c7370616e207374796c653d22666f6e742d66616d696c793a43616c696272692c223e3c7370616e207374796c653d22666f6e742d73697a653a31322e307074223e3c7370616e207374796c653d22636f6c6f723a23333734313531223e322e312057652073747269766520746f2070726f7669646520616363757261746520616e642075702d746f2d6461746520696e666f726d6174696f6e2061626f7574206f75722070726f64756374732e20486f77657665722c20776520646f206e6f742077617272616e74207468652061636375726163792c20636f6d706c6574656e6573732c206f722072656c696162696c697479206f6620616e792070726f6475637420696e666f726d6174696f6e206f6e206f757220776562736974652e3c2f7370616e3e3c2f7370616e3e3c2f7370616e3e3c2f7370616e3e3c2f703e0d0a0d0a3c70207374796c653d226d617267696e2d6c6566743a30636d3b206d617267696e2d72696768743a30636d223e3c7370616e207374796c653d22666f6e742d73697a653a31317074223e3c7370616e207374796c653d22666f6e742d66616d696c793a43616c696272692c223e3c7370616e207374796c653d22666f6e742d73697a653a31322e307074223e3c7370616e207374796c653d22636f6c6f723a23333734313531223e322e3220436f6c6f727320616e6420696d61676573206f662070726f6475637473206d6179207661727920646570656e64696e67206f6e20796f757220646973706c61792073657474696e67732e2057652063616e6e6f742067756172616e746565207468617420796f757220646576696365262333393b7320646973706c6179206f6620616e7920636f6c6f722077696c6c2061636375726174656c79207265666c6563742074686520636f6c6f72206f66206f75722070726f64756374732e3c2f7370616e3e3c2f7370616e3e3c2f7370616e3e3c2f7370616e3e3c2f703e0d0a0d0a3c70207374796c653d226d617267696e2d6c6566743a30636d3b206d617267696e2d72696768743a30636d223e3c7370616e207374796c653d22666f6e742d73697a653a31317074223e3c7370616e207374796c653d22666f6e742d66616d696c793a43616c696272692c223e3c7374726f6e673e3c7370616e207374796c653d22666f6e742d73697a653a31322e307074223e3c7370616e207374796c653d22636f6c6f723a23333734313531223e332e204f72646572696e6720616e64205061796d656e74733c2f7370616e3e3c2f7370616e3e3c2f7374726f6e673e3c2f7370616e3e3c2f7370616e3e3c2f703e0d0a0d0a3c70207374796c653d226d617267696e2d6c6566743a30636d3b206d617267696e2d72696768743a30636d223e3c7370616e207374796c653d22666f6e742d73697a653a31317074223e3c7370616e207374796c653d22666f6e742d66616d696c793a43616c696272692c223e3c7370616e207374796c653d22666f6e742d73697a653a31322e307074223e3c7370616e207374796c653d22636f6c6f723a23333734313531223e332e31205768656e20796f7520706c61636520616e206f72646572206f6e206769616e74666f782e696e2c20796f7520616772656520746f2070726f7669646520616363757261746520616e6420636f6d706c65746520696e666f726d6174696f6e20666f72207468652070757263686173652e3c2f7370616e3e3c2f7370616e3e3c2f7370616e3e3c2f7370616e3e3c2f703e0d0a0d0a3c70207374796c653d226d617267696e2d6c6566743a30636d3b206d617267696e2d72696768743a30636d223e3c7370616e207374796c653d22666f6e742d73697a653a31317074223e3c7370616e207374796c653d22666f6e742d66616d696c793a43616c696272692c223e3c7370616e207374796c653d22666f6e742d73697a653a31322e307074223e3c7370616e207374796c653d22636f6c6f723a23333734313531223e332e3220576520726573657276652074686520726967687420746f20726566757365206f722063616e63656c20616e79206f7264657220666f7220616e7920726561736f6e2c20696e636c7564696e6720627574206e6f74206c696d6974656420746f2070726f6475637420617661696c6162696c6974792c206572726f727320696e2070726f6475637420696e666f726d6174696f6e2c206f7220737573706963696f6e206f66206672617564756c656e742061637469766974792e3c2f7370616e3e3c2f7370616e3e3c2f7370616e3e3c2f7370616e3e3c2f703e0d0a0d0a3c70207374796c653d226d617267696e2d6c6566743a30636d3b206d617267696e2d72696768743a30636d223e3c7370616e207374796c653d22666f6e742d73697a653a31317074223e3c7370616e207374796c653d22666f6e742d66616d696c793a43616c696272692c223e3c7370616e207374796c653d22666f6e742d73697a653a31322e307074223e3c7370616e207374796c653d22636f6c6f723a23333734313531223e332e33205061796d656e7473206172652070726f636573736564207365637572656c79207468726f756768206f7572207061796d656e7420676174657761792e20576520646f206e6f742073746f72652063726564697420636172642064657461696c732e3c2f7370616e3e3c2f7370616e3e3c2f7370616e3e3c2f7370616e3e3c2f703e0d0a0d0a3c70207374796c653d226d617267696e2d6c6566743a30636d3b206d617267696e2d72696768743a30636d223e3c7370616e207374796c653d22666f6e742d73697a653a31317074223e3c7370616e207374796c653d22666f6e742d66616d696c793a43616c696272692c223e3c7374726f6e673e3c7370616e207374796c653d22666f6e742d73697a653a31322e307074223e3c7370616e207374796c653d22636f6c6f723a23333734313531223e342e205368697070696e6720616e642052657475726e733c2f7370616e3e3c2f7370616e3e3c2f7374726f6e673e3c2f7370616e3e3c2f7370616e3e3c2f703e0d0a0d0a3c70207374796c653d226d617267696e2d6c6566743a30636d3b206d617267696e2d72696768743a30636d223e3c7370616e207374796c653d22666f6e742d73697a653a31317074223e3c7370616e207374796c653d22666f6e742d66616d696c793a43616c696272692c223e3c7370616e207374796c653d22666f6e742d73697a653a31322e307074223e3c7370616e207374796c653d22636f6c6f723a23333734313531223e342e3120506c6561736520726576696577206f7572205368697070696e6720616e642052657475726e7320706f6c6963792c20776869636820697320616e20696e74656772616c2070617274206f66207468657365207465726d7320616e6420636f6e646974696f6e732e3c2f7370616e3e3c2f7370616e3e3c2f7370616e3e3c2f7370616e3e3c2f703e0d0a0d0a3c70207374796c653d226d617267696e2d6c6566743a30636d3b206d617267696e2d72696768743a30636d223e3c7370616e207374796c653d22666f6e742d73697a653a31317074223e3c7370616e207374796c653d22666f6e742d66616d696c793a43616c696272692c223e3c7370616e207374796c653d22666f6e742d73697a653a31322e307074223e3c7370616e207374796c653d22636f6c6f723a23333734313531223e342e32205368697070696e672074696d65732061726520657374696d6174657320616e64206d61792076617279206261736564206f6e20796f7572206c6f636174696f6e20616e642065787465726e616c20666163746f72732e3c2f7370616e3e3c2f7370616e3e3c2f7370616e3e3c2f7370616e3e3c2f703e0d0a0d0a3c70207374796c653d226d617267696e2d6c6566743a30636d3b206d617267696e2d72696768743a30636d223e3c7370616e207374796c653d22666f6e742d73697a653a31317074223e3c7370616e207374796c653d22666f6e742d66616d696c793a43616c696272692c223e3c7374726f6e673e3c7370616e207374796c653d22666f6e742d73697a653a31322e307074223e3c7370616e207374796c653d22636f6c6f723a23333734313531223e352e20496e74656c6c65637475616c2050726f70657274793c2f7370616e3e3c2f7370616e3e3c2f7374726f6e673e3c2f7370616e3e3c2f7370616e3e3c2f703e0d0a0d0a3c70207374796c653d226d617267696e2d6c6566743a30636d3b206d617267696e2d72696768743a30636d223e3c7370616e207374796c653d22666f6e742d73697a653a31317074223e3c7370616e207374796c653d22666f6e742d66616d696c793a43616c696272692c223e3c7370616e207374796c653d22666f6e742d73697a653a31322e307074223e3c7370616e207374796c653d22636f6c6f723a23333734313531223e352e3120416c6c20636f6e74656e74206f6e206769616e74666f782e696e2c20696e636c7564696e6720746578742c2067726170686963732c206c6f676f732c20696d616765732c20616e6420736f6674776172652c206973207468652070726f7065727479206f66204769616e7420466f7820616e642069732070726f74656374656420627920636f70797269676874206c6177732e3c2f7370616e3e3c2f7370616e3e3c2f7370616e3e3c2f7370616e3e3c2f703e0d0a0d0a3c70207374796c653d226d617267696e2d6c6566743a30636d3b206d617267696e2d72696768743a30636d223e3c7370616e207374796c653d22666f6e742d73697a653a31317074223e3c7370616e207374796c653d22666f6e742d66616d696c793a43616c696272692c223e3c7370616e207374796c653d22666f6e742d73697a653a31322e307074223e3c7370616e207374796c653d22636f6c6f723a23333734313531223e352e3220596f75206d6179206e6f7420726570726f647563652c20646973747269627574652c20646973706c61792c2073656c6c2c206f72206d6f6469667920616e7920636f6e74656e74206f6e2074686973207765627369746520666f7220616e7920707572706f736520776974686f7574206f7572207072696f72207772697474656e20636f6e73656e742e3c2f7370616e3e3c2f7370616e3e3c2f7370616e3e3c2f7370616e3e3c2f703e0d0a0d0a3c70207374796c653d226d617267696e2d6c6566743a30636d3b206d617267696e2d72696768743a30636d223e3c7370616e207374796c653d22666f6e742d73697a653a31317074223e3c7370616e207374796c653d22666f6e742d66616d696c793a43616c696272692c223e3c7374726f6e673e3c7370616e207374796c653d22666f6e742d73697a653a31322e307074223e3c7370616e207374796c653d22636f6c6f723a23333734313531223e362e205072697661637920506f6c6963793c2f7370616e3e3c2f7370616e3e3c2f7374726f6e673e3c2f7370616e3e3c2f7370616e3e3c2f703e0d0a0d0a3c70207374796c653d226d617267696e2d6c6566743a30636d3b206d617267696e2d72696768743a30636d223e3c7370616e207374796c653d22666f6e742d73697a653a31317074223e3c7370616e207374796c653d22666f6e742d66616d696c793a43616c696272692c223e3c7370616e207374796c653d22666f6e742d73697a653a31322e307074223e3c7370616e207374796c653d22636f6c6f723a23333734313531223e362e3120506c6561736520726576696577206f7572205072697661637920506f6c69637920746f20756e6465727374616e6420686f7720776520636f6c6c6563742c207573652c20616e642070726f7465637420796f757220706572736f6e616c20696e666f726d6174696f6e2e3c2f7370616e3e3c2f7370616e3e3c2f7370616e3e3c2f7370616e3e3c2f703e0d0a0d0a3c70207374796c653d226d617267696e2d6c6566743a30636d3b206d617267696e2d72696768743a30636d223e3c7370616e207374796c653d22666f6e742d73697a653a31317074223e3c7370616e207374796c653d22666f6e742d66616d696c793a43616c696272692c223e3c7374726f6e673e3c7370616e207374796c653d22666f6e742d73697a653a31322e307074223e3c7370616e207374796c653d22636f6c6f723a23333734313531223e372e204368616e67657320746f205465726d7320616e6420436f6e646974696f6e733c2f7370616e3e3c2f7370616e3e3c2f7374726f6e673e3c2f7370616e3e3c2f7370616e3e3c2f703e0d0a0d0a3c70207374796c653d226d617267696e2d6c6566743a30636d3b206d617267696e2d72696768743a30636d223e3c7370616e207374796c653d22666f6e742d73697a653a31317074223e3c7370616e207374796c653d22666f6e742d66616d696c793a43616c696272692c223e3c7370616e207374796c653d22666f6e742d73697a653a31322e307074223e3c7370616e207374796c653d22636f6c6f723a23333734313531223e372e31204769616e7420466f782072657365727665732074686520726967687420746f20757064617465206f72206d6f64696679207468657365207465726d7320616e6420636f6e646974696f6e7320617420616e792074696d6520776974686f7574207072696f72206e6f746963652e20497420697320796f757220726573706f6e736962696c69747920746f2072657669657720746865207465726d7320726567756c61726c792e3c2f7370616e3e3c2f7370616e3e3c2f7370616e3e3c2f7370616e3e3c2f703e0d0a3c2f6469763e0d0a0d0a3c70207374796c653d226d617267696e2d6c6566743a30636d3b206d617267696e2d72696768743a30636d223e266e6273703b3c2f703e0d0a3c2f6469763e0d0a3c2f6469763e0d0a0d0a3c70207374796c653d226d617267696e2d6c6566743a30636d3b206d617267696e2d72696768743a30636d223e266e6273703b3c2f703e0d0a3c2f6469763e0d0a, '', '', '', '', '', '', '', '', '', '', '', 0, 0, '', '', 0, 0, 0),
(5, 'Privacy Policy', '', 0x3c646976207374796c653d22626f726465723a2e3070743b2070616464696e673a30696e2030696e2030696e2030696e223e0d0a3c70207374796c653d226d617267696e2d6c6566743a30696e3b206d617267696e2d72696768743a30696e223e3c7370616e207374796c653d22666f6e742d73697a653a31317074223e3c7370616e207374796c653d22666f6e742d66616d696c793a43616c696272692c73616e732d7365726966223e3c7374726f6e673e3c7370616e207374796c653d22666f6e742d73697a653a31322e307074223e3c7370616e207374796c653d22636f6c6f723a23333734313531223e5072697661637920506f6c6963793c2f7370616e3e3c2f7370616e3e3c2f7374726f6e673e3c2f7370616e3e3c2f7370616e3e3c2f703e0d0a0d0a3c70207374796c653d226d617267696e2d6c6566743a30696e3b206d617267696e2d72696768743a30696e223e3c7370616e207374796c653d22666f6e742d73697a653a31317074223e3c7370616e207374796c653d22666f6e742d66616d696c793a43616c696272692c73616e732d7365726966223e3c7370616e207374796c653d22666f6e742d73697a653a31322e307074223e3c7370616e207374796c653d22636f6c6f723a23333734313531223e4c61737420757064617465643a2032332f30312f323032343c2f7370616e3e3c2f7370616e3e3c2f7370616e3e3c2f7370616e3e3c2f703e0d0a0d0a3c70207374796c653d226d617267696e2d6c6566743a30696e3b206d617267696e2d72696768743a30696e223e3c7370616e207374796c653d22666f6e742d73697a653a31317074223e3c7370616e207374796c653d22666f6e742d66616d696c793a43616c696272692c73616e732d7365726966223e3c7370616e207374796c653d22666f6e742d73697a653a31322e307074223e3c7370616e207374796c653d22636f6c6f723a23333734313531223e4769616e7420466f7820697320636f6d6d697474656420746f2070726f74656374696e67207468652070726976616379206f66206f75722075736572732e2054686973205072697661637920506f6c696379206f75746c696e657320686f7720776520636f6c6c6563742c207573652c20646973636c6f73652c20616e642073616665677561726420796f757220706572736f6e616c20696e666f726d6174696f6e2e204279207573696e67206f7572207765627369746520286769616e74666f782e696e292c20796f7520616772656520746f20746865207465726d73206f75746c696e656420696e207468697320706f6c6963792e3c2f7370616e3e3c2f7370616e3e3c2f7370616e3e3c2f7370616e3e3c2f703e0d0a0d0a3c70207374796c653d226d617267696e2d6c6566743a30696e3b206d617267696e2d72696768743a30696e223e3c7370616e207374796c653d22666f6e742d73697a653a31317074223e3c7370616e207374796c653d22666f6e742d66616d696c793a43616c696272692c73616e732d7365726966223e3c7374726f6e673e3c7370616e207374796c653d22666f6e742d73697a653a31322e307074223e3c7370616e207374796c653d22636f6c6f723a23333734313531223e312e20496e666f726d6174696f6e20576520436f6c6c6563743c2f7370616e3e3c2f7370616e3e3c2f7374726f6e673e3c2f7370616e3e3c2f7370616e3e3c2f703e0d0a0d0a3c70207374796c653d226d617267696e2d6c6566743a30696e3b206d617267696e2d72696768743a30696e223e3c7370616e207374796c653d22666f6e742d73697a653a31317074223e3c7370616e207374796c653d22666f6e742d66616d696c793a43616c696272692c73616e732d7365726966223e3c7370616e207374796c653d22666f6e742d73697a653a31322e307074223e3c7370616e207374796c653d22636f6c6f723a23333734313531223e312e31203c7374726f6e673e506572736f6e616c20496e666f726d6174696f6e3a3c2f7374726f6e673e205765206d617920636f6c6c65637420706572736f6e616c6c79206964656e7469666961626c6520696e666f726d6174696f6e2c207375636820617320796f7572206e616d652c20656d61696c20616464726573732c207368697070696e6720616464726573732c20616e64207061796d656e742064657461696c73207768656e20796f75206d616b652061207075726368617365206f6e206f757220776562736974652e3c2f7370616e3e3c2f7370616e3e3c2f7370616e3e3c2f7370616e3e3c2f703e0d0a0d0a3c70207374796c653d226d617267696e2d6c6566743a30696e3b206d617267696e2d72696768743a30696e223e3c7370616e207374796c653d22666f6e742d73697a653a31317074223e3c7370616e207374796c653d22666f6e742d66616d696c793a43616c696272692c73616e732d7365726966223e3c7370616e207374796c653d22666f6e742d73697a653a31322e307074223e3c7370616e207374796c653d22636f6c6f723a23333734313531223e312e32203c7374726f6e673e4e6f6e2d506572736f6e616c20496e666f726d6174696f6e3a3c2f7374726f6e673e205765206d617920616c736f20636f6c6c656374206e6f6e2d706572736f6e616c20696e666f726d6174696f6e2c20737563682061732062726f7773657220747970652c206f7065726174696e672073797374656d2c20616e6420495020616464726573732c20746f20656e68616e636520746865207573657220657870657269656e636520616e6420696d70726f7665206f75722073657276696365732e3c2f7370616e3e3c2f7370616e3e3c2f7370616e3e3c2f7370616e3e3c2f703e0d0a0d0a3c70207374796c653d226d617267696e2d6c6566743a30696e3b206d617267696e2d72696768743a30696e223e3c7370616e207374796c653d22666f6e742d73697a653a31317074223e3c7370616e207374796c653d22666f6e742d66616d696c793a43616c696272692c73616e732d7365726966223e3c7374726f6e673e3c7370616e207374796c653d22666f6e742d73697a653a31322e307074223e3c7370616e207374796c653d22636f6c6f723a23333734313531223e322e20486f772057652055736520596f757220496e666f726d6174696f6e3c2f7370616e3e3c2f7370616e3e3c2f7374726f6e673e3c2f7370616e3e3c2f7370616e3e3c2f703e0d0a0d0a3c70207374796c653d226d617267696e2d6c6566743a30696e3b206d617267696e2d72696768743a30696e223e3c7370616e207374796c653d22666f6e742d73697a653a31317074223e3c7370616e207374796c653d22666f6e742d66616d696c793a43616c696272692c73616e732d7365726966223e3c7370616e207374796c653d22666f6e742d73697a653a31322e307074223e3c7370616e207374796c653d22636f6c6f723a23333734313531223e322e31203c7374726f6e673e4f726465722050726f63657373696e673a3c2f7374726f6e673e2057652075736520796f757220706572736f6e616c20696e666f726d6174696f6e20746f2070726f6365737320616e642066756c66696c6c20796f7572206f72646572732c20636f6d6d756e6963617465206f7264657220757064617465732c20616e642070726f7669646520637573746f6d657220737570706f72742e3c2f7370616e3e3c2f7370616e3e3c2f7370616e3e3c2f7370616e3e3c2f703e0d0a0d0a3c70207374796c653d226d617267696e2d6c6566743a30696e3b206d617267696e2d72696768743a30696e223e3c7370616e207374796c653d22666f6e742d73697a653a31317074223e3c7370616e207374796c653d22666f6e742d66616d696c793a43616c696272692c73616e732d7365726966223e3c7370616e207374796c653d22666f6e742d73697a653a31322e307074223e3c7370616e207374796c653d22636f6c6f723a23333734313531223e322e32203c7374726f6e673e4d61726b6574696e673a3c2f7374726f6e673e205769746820796f757220636f6e73656e742c207765206d61792073656e6420796f752070726f6d6f74696f6e616c20656d61696c7320616e64206e6577736c6574746572732061626f7574206f75722070726f64756374732c2073657276696365732c20616e64207370656369616c206f66666572732e20596f752063616e206f70742d6f7574206f6620746865736520636f6d6d756e69636174696f6e7320617420616e792074696d652e3c2f7370616e3e3c2f7370616e3e3c2f7370616e3e3c2f7370616e3e3c2f703e0d0a0d0a3c70207374796c653d226d617267696e2d6c6566743a30696e3b206d617267696e2d72696768743a30696e223e3c7370616e207374796c653d22666f6e742d73697a653a31317074223e3c7370616e207374796c653d22666f6e742d66616d696c793a43616c696272692c73616e732d7365726966223e3c7370616e207374796c653d22666f6e742d73697a653a31322e307074223e3c7370616e207374796c653d22636f6c6f723a23333734313531223e322e33203c7374726f6e673e5765627369746520496d70726f76656d656e743a3c2f7374726f6e673e20576520757365206e6f6e2d706572736f6e616c20696e666f726d6174696f6e20746f20616e616c797a6520776562736974652075736167652c20747261636b207472656e64732c20616e6420696d70726f7665206f75722077656273697465262333393b732066756e6374696f6e616c69747920616e6420706572666f726d616e63652e3c2f7370616e3e3c2f7370616e3e3c2f7370616e3e3c2f7370616e3e3c2f703e0d0a0d0a3c70207374796c653d226d617267696e2d6c6566743a30696e3b206d617267696e2d72696768743a30696e223e3c7370616e207374796c653d22666f6e742d73697a653a31317074223e3c7370616e207374796c653d22666f6e742d66616d696c793a43616c696272692c73616e732d7365726966223e3c7374726f6e673e3c7370616e207374796c653d22666f6e742d73697a653a31322e307074223e3c7370616e207374796c653d22636f6c6f723a23333734313531223e332e20496e666f726d6174696f6e2053686172696e673c2f7370616e3e3c2f7370616e3e3c2f7374726f6e673e3c2f7370616e3e3c2f7370616e3e3c2f703e0d0a0d0a3c70207374796c653d226d617267696e2d6c6566743a30696e3b206d617267696e2d72696768743a30696e223e3c7370616e207374796c653d22666f6e742d73697a653a31317074223e3c7370616e207374796c653d22666f6e742d66616d696c793a43616c696272692c73616e732d7365726966223e3c7370616e207374796c653d22666f6e742d73697a653a31322e307074223e3c7370616e207374796c653d22636f6c6f723a23333734313531223e332e31203c7374726f6e673e54686972642d506172747920536572766963652050726f7669646572733a3c2f7374726f6e673e205765206d617920736861726520796f757220706572736f6e616c20696e666f726d6174696f6e20776974682074686972642d706172747920736572766963652070726f7669646572732077686f2061737369737420757320696e20636f6e64756374696e67206f757220627573696e657373206f7065726174696f6e732c2073756368206173207061796d656e742070726f63657373696e6720616e64206f726465722066756c66696c6c6d656e742e3c2f7370616e3e3c2f7370616e3e3c2f7370616e3e3c2f7370616e3e3c2f703e0d0a0d0a3c70207374796c653d226d617267696e2d6c6566743a30696e3b206d617267696e2d72696768743a30696e223e3c7370616e207374796c653d22666f6e742d73697a653a31317074223e3c7370616e207374796c653d22666f6e742d66616d696c793a43616c696272692c73616e732d7365726966223e3c7370616e207374796c653d22666f6e742d73697a653a31322e307074223e3c7370616e207374796c653d22636f6c6f723a23333734313531223e332e32203c7374726f6e673e4c6567616c20436f6d706c69616e63653a3c2f7374726f6e673e205765206d617920646973636c6f736520796f757220696e666f726d6174696f6e206966207265717569726564206279206c6177206f7220696e20726573706f6e736520746f2061206c6567616c20726571756573742e3c2f7370616e3e3c2f7370616e3e3c2f7370616e3e3c2f7370616e3e3c2f703e0d0a0d0a3c70207374796c653d226d617267696e2d6c6566743a30696e3b206d617267696e2d72696768743a30696e223e3c7370616e207374796c653d22666f6e742d73697a653a31317074223e3c7370616e207374796c653d22666f6e742d66616d696c793a43616c696272692c73616e732d7365726966223e3c7374726f6e673e3c7370616e207374796c653d22666f6e742d73697a653a31322e307074223e3c7370616e207374796c653d22636f6c6f723a23333734313531223e342e20436f6f6b69657320616e6420547261636b696e6720546563686e6f6c6f676965733c2f7370616e3e3c2f7370616e3e3c2f7374726f6e673e3c2f7370616e3e3c2f7370616e3e3c2f703e0d0a0d0a3c70207374796c653d226d617267696e2d6c6566743a30696e3b206d617267696e2d72696768743a30696e223e3c7370616e207374796c653d22666f6e742d73697a653a31317074223e3c7370616e207374796c653d22666f6e742d66616d696c793a43616c696272692c73616e732d7365726966223e3c7370616e207374796c653d22666f6e742d73697a653a31322e307074223e3c7370616e207374796c653d22636f6c6f723a23333734313531223e342e31203c7374726f6e673e436f6f6b6965733a3c2f7374726f6e673e2057652075736520636f6f6b69657320746f20656e68616e636520796f75722062726f7773696e6720657870657269656e63652c20616e616c797a65207765627369746520747261666669632c20616e6420706572736f6e616c697a6520636f6e74656e742e20596f752063616e206d6f6469667920796f75722062726f777365722073657474696e677320746f20636f6e74726f6c206f722064697361626c6520636f6f6b6965732e3c2f7370616e3e3c2f7370616e3e3c2f7370616e3e3c2f7370616e3e3c2f703e0d0a0d0a3c70207374796c653d226d617267696e2d6c6566743a30696e3b206d617267696e2d72696768743a30696e223e3c7370616e207374796c653d22666f6e742d73697a653a31317074223e3c7370616e207374796c653d22666f6e742d66616d696c793a43616c696272692c73616e732d7365726966223e3c7374726f6e673e3c7370616e207374796c653d22666f6e742d73697a653a31322e307074223e3c7370616e207374796c653d22636f6c6f723a23333734313531223e352e2053656375726974793c2f7370616e3e3c2f7370616e3e3c2f7374726f6e673e3c2f7370616e3e3c2f7370616e3e3c2f703e0d0a0d0a3c70207374796c653d226d617267696e2d6c6566743a30696e3b206d617267696e2d72696768743a30696e223e3c7370616e207374796c653d22666f6e742d73697a653a31317074223e3c7370616e207374796c653d22666f6e742d66616d696c793a43616c696272692c73616e732d7365726966223e3c7370616e207374796c653d22666f6e742d73697a653a31322e307074223e3c7370616e207374796c653d22636f6c6f723a23333734313531223e352e31203c7374726f6e673e446174612053656375726974793a3c2f7374726f6e673e20576520696d706c656d656e74207365637572697479206d6561737572657320746f2070726f7465637420796f757220706572736f6e616c20696e666f726d6174696f6e2066726f6d20756e617574686f72697a6564206163636573732c20646973636c6f737572652c20616c7465726174696f6e2c20616e64206465737472756374696f6e2e3c2f7370616e3e3c2f7370616e3e3c2f7370616e3e3c2f7370616e3e3c2f703e0d0a0d0a3c70207374796c653d226d617267696e2d6c6566743a30696e3b206d617267696e2d72696768743a30696e223e3c7370616e207374796c653d22666f6e742d73697a653a31317074223e3c7370616e207374796c653d22666f6e742d66616d696c793a43616c696272692c73616e732d7365726966223e3c7374726f6e673e3c7370616e207374796c653d22666f6e742d73697a653a31322e307074223e3c7370616e207374796c653d22636f6c6f723a23333734313531223e362e20596f7572205269676874733c2f7370616e3e3c2f7370616e3e3c2f7374726f6e673e3c2f7370616e3e3c2f7370616e3e3c2f703e0d0a0d0a3c70207374796c653d226d617267696e2d6c6566743a30696e3b206d617267696e2d72696768743a30696e223e3c7370616e207374796c653d22666f6e742d73697a653a31317074223e3c7370616e207374796c653d22666f6e742d66616d696c793a43616c696272692c73616e732d7365726966223e3c7370616e207374796c653d22666f6e742d73697a653a31322e307074223e3c7370616e207374796c653d22636f6c6f723a23333734313531223e362e31203c7374726f6e673e41636365737320616e6420436f7272656374696f6e3a3c2f7374726f6e673e20596f7520686176652074686520726967687420746f2061636365737320616e6420636f727265637420796f757220706572736f6e616c20696e666f726d6174696f6e2e20596f752063616e2075706461746520796f7572206163636f756e7420696e666f726d6174696f6e206f7220636f6e7461637420757320666f7220617373697374616e63652e3c2f7370616e3e3c2f7370616e3e3c2f7370616e3e3c2f7370616e3e3c2f703e0d0a0d0a3c70207374796c653d226d617267696e2d6c6566743a30696e3b206d617267696e2d72696768743a30696e223e3c7370616e207374796c653d22666f6e742d73697a653a31317074223e3c7370616e207374796c653d22666f6e742d66616d696c793a43616c696272692c73616e732d7365726966223e3c7374726f6e673e3c7370616e207374796c653d22666f6e742d73697a653a31322e307074223e3c7370616e207374796c653d22636f6c6f723a23333734313531223e372e204368696c6472656e262333393b7320507269766163793c2f7370616e3e3c2f7370616e3e3c2f7374726f6e673e3c2f7370616e3e3c2f7370616e3e3c2f703e0d0a0d0a3c70207374796c653d226d617267696e2d6c6566743a30696e3b206d617267696e2d72696768743a30696e223e3c7370616e207374796c653d22666f6e742d73697a653a31317074223e3c7370616e207374796c653d22666f6e742d66616d696c793a43616c696272692c73616e732d7365726966223e3c7370616e207374796c653d22666f6e742d73697a653a31322e307074223e3c7370616e207374796c653d22636f6c6f723a23333734313531223e372e31204f75722077656273697465206973206e6f7420696e74656e64656420666f72206368696c6472656e20756e6465722074686520616765206f662031332e20576520646f206e6f74206b6e6f77696e676c7920636f6c6c656374206f722073746f726520706572736f6e616c20696e666f726d6174696f6e2066726f6d206368696c6472656e2e3c2f7370616e3e3c2f7370616e3e3c2f7370616e3e3c2f7370616e3e3c2f703e0d0a0d0a3c70207374796c653d226d617267696e2d6c6566743a30696e3b206d617267696e2d72696768743a30696e223e3c7370616e207374796c653d22666f6e742d73697a653a31317074223e3c7370616e207374796c653d22666f6e742d66616d696c793a43616c696272692c73616e732d7365726966223e3c7374726f6e673e3c7370616e207374796c653d22666f6e742d73697a653a31322e307074223e3c7370616e207374796c653d22636f6c6f723a23333734313531223e382e204368616e67657320746f2074686973205072697661637920506f6c6963793c2f7370616e3e3c2f7370616e3e3c2f7374726f6e673e3c2f7370616e3e3c2f7370616e3e3c2f703e0d0a0d0a3c70207374796c653d226d617267696e2d6c6566743a30696e3b206d617267696e2d72696768743a30696e223e3c7370616e207374796c653d22666f6e742d73697a653a31317074223e3c7370616e207374796c653d22666f6e742d66616d696c793a43616c696272692c73616e732d7365726966223e3c7370616e207374796c653d22666f6e742d73697a653a31322e307074223e3c7370616e207374796c653d22636f6c6f723a23333734313531223e382e3120576520726573657276652074686520726967687420746f20757064617465206f72206d6f646966792074686973205072697661637920506f6c69637920617420616e792074696d652e204368616e6765732077696c6c2062652065666665637469766520696d6d6564696174656c792075706f6e20706f7374696e67206f6e2074686520776562736974652e3c2f7370616e3e3c2f7370616e3e3c2f7370616e3e3c2f7370616e3e3c2f703e0d0a0d0a3c70207374796c653d226d617267696e2d6c6566743a30696e3b206d617267696e2d72696768743a30696e223e3c7370616e207374796c653d22666f6e742d73697a653a31317074223e3c7370616e207374796c653d22666f6e742d66616d696c793a43616c696272692c73616e732d7365726966223e3c7374726f6e673e3c7370616e207374796c653d22666f6e742d73697a653a31322e307074223e3c7370616e207374796c653d22636f6c6f723a23333734313531223e392e20436f6e746163742055733c2f7370616e3e3c2f7370616e3e3c2f7374726f6e673e3c2f7370616e3e3c2f7370616e3e3c2f703e0d0a0d0a3c70207374796c653d226d617267696e2d6c6566743a30696e3b206d617267696e2d72696768743a30696e223e3c7370616e207374796c653d22666f6e742d73697a653a31317074223e3c7370616e207374796c653d22666f6e742d66616d696c793a43616c696272692c73616e732d7365726966223e3c7370616e207374796c653d22666f6e742d73697a653a31322e307074223e3c7370616e207374796c653d22636f6c6f723a23333734313531223e392e3120496620796f752068617665207175657374696f6e73206f7220636f6e6365726e732061626f75742074686973205072697661637920506f6c6963792c20706c6561736520636f6e7461637420757320617420737570706f7274406769616e74666f782e696e3c2f7370616e3e3c2f7370616e3e3c2f7370616e3e3c2f7370616e3e3c2f703e0d0a0d0a3c70207374796c653d226d617267696e2d6c6566743a30696e3b206d617267696e2d72696768743a30696e223e3c7370616e207374796c653d22666f6e742d73697a653a31317074223e3c7370616e207374796c653d22666f6e742d66616d696c793a43616c696272692c73616e732d7365726966223e3c7370616e207374796c653d22666f6e742d73697a653a31322e307074223e3c7370616e207374796c653d22636f6c6f723a23333734313531223e5468616e6b20796f7520666f72207472757374696e67204769616e7420466f78207769746820796f757220706572736f6e616c20696e666f726d6174696f6e2e3c2f7370616e3e3c2f7370616e3e3c2f7370616e3e3c2f7370616e3e3c2f703e0d0a3c2f6469763e0d0a0d0a3c70207374796c653d226d617267696e2d6c6566743a30696e3b206d617267696e2d72696768743a30696e223e266e6273703b3c2f703e0d0a, '', '', '', '', '', '', '', '', '', '', '', 0, 0, '', '', 0, 0, 0);
INSERT INTO `site_setting` (`id`, `logo`, `empty_img`, `content`, `mobile`, `alt_mobile`, `email`, `alt_email`, `address`, `facebook`, `twitter`, `instagram`, `youtube`, `linkdin`, `map`, `shipping`, `amount`, `other`, `express`, `cod_avali`, `online_avali`, `view_all`) VALUES
(6, 'Shipping Policy', '', 0x3c646976207374796c653d2270616464696e673a30696e2030696e2030696e2030696e223e0d0a3c646976207374796c653d22312e3070743b2070616464696e673a30636d2030636d2030636d2030636d223e0d0a3c70207374796c653d226d617267696e2d6c6566743a30636d3b206d617267696e2d72696768743a30636d223e3c7370616e207374796c653d22666f6e742d73697a653a31317074223e3c7370616e207374796c653d22666f6e742d66616d696c793a43616c696272692c223e3c7374726f6e673e3c7370616e207374796c653d22666f6e742d73697a653a31322e307074223e3c7370616e207374796c653d22636f6c6f723a23333734313531223e5368697070696e6720506f6c6963793c2f7370616e3e3c2f7370616e3e3c2f7374726f6e673e3c2f7370616e3e3c2f7370616e3e3c2f703e0d0a0d0a3c70207374796c653d226d617267696e2d6c6566743a30636d3b206d617267696e2d72696768743a30636d223e3c7370616e207374796c653d22666f6e742d73697a653a31317074223e3c7370616e207374796c653d22666f6e742d66616d696c793a43616c696272692c223e3c7370616e207374796c653d22666f6e742d73697a653a31322e307074223e3c7370616e207374796c653d22636f6c6f723a23333734313531223e4c61737420757064617465643a2032332f30312f323032343c2f7370616e3e3c2f7370616e3e3c2f7370616e3e3c2f7370616e3e3c2f703e0d0a0d0a3c70207374796c653d226d617267696e2d6c6566743a30636d3b206d617267696e2d72696768743a30636d223e3c7370616e207374796c653d22666f6e742d73697a653a31317074223e3c7370616e207374796c653d22666f6e742d66616d696c793a43616c696272692c223e3c7370616e207374796c653d22666f6e742d73697a653a31322e307074223e3c7370616e207374796c653d22636f6c6f723a23333734313531223e5468616e6b20796f7520666f722073686f7070696e67206174204769616e7420466f782e2054686973205368697070696e6720506f6c696379206f75746c696e657320746865207465726d7320616e6420636f6e646974696f6e7320666f722074686520736869706d656e74206f66206f75722070726f64756374732e3c2f7370616e3e3c2f7370616e3e3c2f7370616e3e3c2f7370616e3e3c2f703e0d0a0d0a3c70207374796c653d226d617267696e2d6c6566743a30636d3b206d617267696e2d72696768743a30636d223e3c7370616e207374796c653d22666f6e742d73697a653a31317074223e3c7370616e207374796c653d22666f6e742d66616d696c793a43616c696272692c223e3c7374726f6e673e3c7370616e207374796c653d22666f6e742d73697a653a31322e307074223e3c7370616e207374796c653d22636f6c6f723a23333734313531223e312e2050726f63657373696e672054696d653c2f7370616e3e3c2f7370616e3e3c2f7374726f6e673e3c2f7370616e3e3c2f7370616e3e3c2f703e0d0a0d0a3c70207374796c653d226d617267696e2d6c6566743a30636d3b206d617267696e2d72696768743a30636d223e3c7370616e207374796c653d22666f6e742d73697a653a31317074223e3c7370616e207374796c653d22666f6e742d66616d696c793a43616c696272692c223e3c7370616e207374796c653d22666f6e742d73697a653a31322e307074223e3c7370616e207374796c653d22636f6c6f723a23333734313531223e312e3120416c6c206f7264657273206172652070726f6365737365642077697468696e205b585d20627573696e657373206461797320286578636c7564696e67207765656b656e647320616e6420686f6c69646179732920616674657220726563656976696e67207061796d656e7420636f6e6669726d6174696f6e2e20437573746f6d697a6564206f72206d6164652d746f2d6f72646572206974656d73206d61792068617665206c6f6e6765722070726f63657373696e672074696d65732c20616e64207375636820696e666f726d6174696f6e2077696c6c2062652070726f7669646564206f6e207468652070726f6475637420706167652e3c2f7370616e3e3c2f7370616e3e3c2f7370616e3e3c2f7370616e3e3c2f703e0d0a0d0a3c70207374796c653d226d617267696e2d6c6566743a30636d3b206d617267696e2d72696768743a30636d223e3c7370616e207374796c653d22666f6e742d73697a653a31317074223e3c7370616e207374796c653d22666f6e742d66616d696c793a43616c696272692c223e3c7374726f6e673e3c7370616e207374796c653d22666f6e742d73697a653a31322e307074223e3c7370616e207374796c653d22636f6c6f723a23333734313531223e322e205368697070696e672052617465733c2f7370616e3e3c2f7370616e3e3c2f7374726f6e673e3c2f7370616e3e3c2f7370616e3e3c2f703e0d0a0d0a3c70207374796c653d226d617267696e2d6c6566743a30636d3b206d617267696e2d72696768743a30636d223e3c7370616e207374796c653d22666f6e742d73697a653a31317074223e3c7370616e207374796c653d22666f6e742d66616d696c793a43616c696272692c223e3c7370616e207374796c653d22666f6e742d73697a653a31322e307074223e3c7370616e207374796c653d22636f6c6f723a23333734313531223e322e31205368697070696e672063686172676573206172652063616c63756c61746564206261736564206f6e2074686520776569676874206f6620796f7572206f7264657220616e6420746865207368697070696e672064657374696e6174696f6e2e20546865206170706c696361626c65207368697070696e672072617465732077696c6c20626520646973706c6179656420647572696e672074686520636865636b6f75742070726f636573732e3c2f7370616e3e3c2f7370616e3e3c2f7370616e3e3c2f7370616e3e3c2f703e0d0a0d0a3c70207374796c653d226d617267696e2d6c6566743a30636d3b206d617267696e2d72696768743a30636d223e3c7370616e207374796c653d22666f6e742d73697a653a31317074223e3c7370616e207374796c653d22666f6e742d66616d696c793a43616c696272692c223e3c7370616e207374796c653d22666f6e742d73697a653a31322e307074223e3c7370616e207374796c653d22636f6c6f723a23333734313531223e322e322046726565207368697070696e67206d617920626520617661696c61626c6520666f72206f72646572732074686174206d656574207370656369666965642063726974657269612e2044657461696c73206f6e20656c69676962696c69747920666f722066726565207368697070696e672077696c6c20626520636f6d6d756e696361746564206f6e2074686520776562736974652e3c2f7370616e3e3c2f7370616e3e3c2f7370616e3e3c2f7370616e3e3c2f703e0d0a0d0a3c70207374796c653d226d617267696e2d6c6566743a30636d3b206d617267696e2d72696768743a30636d223e3c7370616e207374796c653d22666f6e742d73697a653a31317074223e3c7370616e207374796c653d22666f6e742d66616d696c793a43616c696272692c223e3c7374726f6e673e3c7370616e207374796c653d22666f6e742d73697a653a31322e307074223e3c7370616e207374796c653d22636f6c6f723a23333734313531223e332e205368697070696e67204d6574686f64733c2f7370616e3e3c2f7370616e3e3c2f7374726f6e673e3c2f7370616e3e3c2f7370616e3e3c2f703e0d0a0d0a3c70207374796c653d226d617267696e2d6c6566743a30636d3b206d617267696e2d72696768743a30636d223e3c7370616e207374796c653d22666f6e742d73697a653a31317074223e3c7370616e207374796c653d22666f6e742d66616d696c793a43616c696272692c223e3c7370616e207374796c653d22666f6e742d73697a653a31322e307074223e3c7370616e207374796c653d22636f6c6f723a23333734313531223e332e31205765206f6666657220766172696f7573207368697070696e67206d6574686f647320746f206163636f6d6d6f6461746520796f757220707265666572656e63657320616e642064656c69766572792074696d6520726571756972656d656e74732e20417661696c61626c65207368697070696e67206d6574686f647320616e6420657374696d617465642064656c69766572792074696d65732077696c6c20626520646973706c6179656420647572696e672074686520636865636b6f75742070726f636573732e3c2f7370616e3e3c2f7370616e3e3c2f7370616e3e3c2f7370616e3e3c2f703e0d0a0d0a3c70207374796c653d226d617267696e2d6c6566743a30636d3b206d617267696e2d72696768743a30636d223e3c7370616e207374796c653d22666f6e742d73697a653a31317074223e3c7370616e207374796c653d22666f6e742d66616d696c793a43616c696272692c223e3c7370616e207374796c653d22666f6e742d73697a653a31322e307074223e3c7370616e207374796c653d22636f6c6f723a23333734313531223e332e3220506c65617365206e6f746520746861742064656c69766572792074696d65732061726520657374696d6174656420616e64206e6f742067756172616e746565642e2044656c617973206d6179206f636375722064756520746f20666163746f7273206265796f6e64206f757220636f6e74726f6c2c207375636820617320637573746f6d732070726f63657373696e672c207765617468657220636f6e646974696f6e732c206f722063617272696572206973737565732e3c2f7370616e3e3c2f7370616e3e3c2f7370616e3e3c2f7370616e3e3c2f703e0d0a0d0a3c70207374796c653d226d617267696e2d6c6566743a30636d3b206d617267696e2d72696768743a30636d223e3c7370616e207374796c653d22666f6e742d73697a653a31317074223e3c7370616e207374796c653d22666f6e742d66616d696c793a43616c696272692c223e3c7374726f6e673e3c7370616e207374796c653d22666f6e742d73697a653a31322e307074223e3c7370616e207374796c653d22636f6c6f723a23333734313531223e342e20496e7465726e6174696f6e616c205368697070696e673c2f7370616e3e3c2f7370616e3e3c2f7374726f6e673e3c2f7370616e3e3c2f7370616e3e3c2f703e0d0a0d0a3c70207374796c653d226d617267696e2d6c6566743a30636d3b206d617267696e2d72696768743a30636d223e3c7370616e207374796c653d22666f6e742d73697a653a31317074223e3c7370616e207374796c653d22666f6e742d66616d696c793a43616c696272692c223e3c7370616e207374796c653d22666f6e742d73697a653a31322e307074223e3c7370616e207374796c653d22636f6c6f723a23333734313531223e342e31204769616e7420466f7820736869707320746f2073656c65637420696e7465726e6174696f6e616c2064657374696e6174696f6e732e20496e7465726e6174696f6e616c207368697070696e6720726174657320616e6420657374696d617465642064656c69766572792074696d65732077696c6c2062652070726f766964656420647572696e672074686520636865636b6f75742070726f636573732e3c2f7370616e3e3c2f7370616e3e3c2f7370616e3e3c2f7370616e3e3c2f703e0d0a0d0a3c70207374796c653d226d617267696e2d6c6566743a30636d3b206d617267696e2d72696768743a30636d223e3c7370616e207374796c653d22666f6e742d73697a653a31317074223e3c7370616e207374796c653d22666f6e742d66616d696c793a43616c696272692c223e3c7370616e207374796c653d22666f6e742d73697a653a31322e307074223e3c7370616e207374796c653d22636f6c6f723a23333734313531223e342e3220496e7465726e6174696f6e616c20637573746f6d6572732061726520726573706f6e7369626c6520666f7220616e7920637573746f6d73206475746965732c2074617865732c206f72206665657320696d706f73656420627920746865697220636f756e747279262333393b7320637573746f6d7320617574686f7269746965732e204769616e7420466f78206973206e6f7420726573706f6e7369626c6520666f722064656c617973206f72206164646974696f6e616c20636861726765732064756520746f20637573746f6d732070726f63657373696e672e3c2f7370616e3e3c2f7370616e3e3c2f7370616e3e3c2f7370616e3e3c2f703e0d0a0d0a3c70207374796c653d226d617267696e2d6c6566743a30636d3b206d617267696e2d72696768743a30636d223e3c7370616e207374796c653d22666f6e742d73697a653a31317074223e3c7370616e207374796c653d22666f6e742d66616d696c793a43616c696272692c223e3c7374726f6e673e3c7370616e207374796c653d22666f6e742d73697a653a31322e307074223e3c7370616e207374796c653d22636f6c6f723a23333734313531223e352e204f7264657220547261636b696e673c2f7370616e3e3c2f7370616e3e3c2f7374726f6e673e3c2f7370616e3e3c2f7370616e3e3c2f703e0d0a0d0a3c70207374796c653d226d617267696e2d6c6566743a30636d3b206d617267696e2d72696768743a30636d223e3c7370616e207374796c653d22666f6e742d73697a653a31317074223e3c7370616e207374796c653d22666f6e742d66616d696c793a43616c696272692c223e3c7370616e207374796c653d22666f6e742d73697a653a31322e307074223e3c7370616e207374796c653d22636f6c6f723a23333734313531223e352e31204f6e636520796f7572206f726465722068617320736869707065642c20796f752077696c6c20726563656976652061207368697070696e6720636f6e6669726d6174696f6e20656d61696c20636f6e7461696e696e6720747261636b696e6720696e666f726d6174696f6e2e20596f752063616e20747261636b2074686520737461747573206f6620796f757220736869706d656e74207573696e67207468652070726f766964656420747261636b696e67206e756d6265722e3c2f7370616e3e3c2f7370616e3e3c2f7370616e3e3c2f7370616e3e3c2f703e0d0a0d0a3c70207374796c653d226d617267696e2d6c6566743a30636d3b206d617267696e2d72696768743a30636d223e3c7370616e207374796c653d22666f6e742d73697a653a31317074223e3c7370616e207374796c653d22666f6e742d66616d696c793a43616c696272692c223e3c7374726f6e673e3c7370616e207374796c653d22666f6e742d73697a653a31322e307074223e3c7370616e207374796c653d22636f6c6f723a23333734313531223e362e20556e64656c6976657261626c65206f722052657475726e6564205061636b616765733c2f7370616e3e3c2f7370616e3e3c2f7374726f6e673e3c2f7370616e3e3c2f7370616e3e3c2f703e0d0a0d0a3c70207374796c653d226d617267696e2d6c6566743a30636d3b206d617267696e2d72696768743a30636d223e3c7370616e207374796c653d22666f6e742d73697a653a31317074223e3c7370616e207374796c653d22666f6e742d66616d696c793a43616c696272692c223e3c7370616e207374796c653d22666f6e742d73697a653a31322e307074223e3c7370616e207374796c653d22636f6c6f723a23333734313531223e362e3120496e20746865206576656e7420746861742061207061636b6167652069732072657475726e656420746f20757320617320756e64656c6976657261626c652064756520746f20616e20696e636f727265637420616464726573732070726f76696465642062792074686520637573746f6d6572206f72206661696c75726520746f20726574726965766520746865207061636b6167652066726f6d2074686520636172726965722c2074686520637573746f6d65722077696c6c20626520726573706f6e7369626c6520666f7220616e79206164646974696f6e616c207368697070696e6720636861726765732e3c2f7370616e3e3c2f7370616e3e3c2f7370616e3e3c2f7370616e3e3c2f703e0d0a0d0a3c70207374796c653d226d617267696e2d6c6566743a30636d3b206d617267696e2d72696768743a30636d223e3c7370616e207374796c653d22666f6e742d73697a653a31317074223e3c7370616e207374796c653d22666f6e742d66616d696c793a43616c696272692c223e3c7374726f6e673e3c7370616e207374796c653d22666f6e742d73697a653a31322e307074223e3c7370616e207374796c653d22636f6c6f723a23333734313531223e372e20436f6e746163742055733c2f7370616e3e3c2f7370616e3e3c2f7374726f6e673e3c2f7370616e3e3c2f7370616e3e3c2f703e0d0a0d0a3c70207374796c653d226d617267696e2d6c6566743a30636d3b206d617267696e2d72696768743a30636d223e3c7370616e207374796c653d22666f6e742d73697a653a31317074223e3c7370616e207374796c653d22666f6e742d66616d696c793a43616c696272692c223e3c7370616e207374796c653d22666f6e742d73697a653a31322e307074223e3c7370616e207374796c653d22636f6c6f723a23333734313531223e372e3120496620796f75206861766520616e79207175657374696f6e732061626f7574206f7572205368697070696e6720506f6c6963792c20706c6561736520636f6e7461637420757320737570706f7274406769616e74666f782e696e3c2f7370616e3e3c2f7370616e3e3c2f7370616e3e3c2f7370616e3e3c2f703e0d0a0d0a3c70207374796c653d226d617267696e2d6c6566743a30636d3b206d617267696e2d72696768743a30636d223e3c7370616e207374796c653d22666f6e742d73697a653a31317074223e3c7370616e207374796c653d22666f6e742d66616d696c793a43616c696272692c223e3c7370616e207374796c653d22666f6e742d73697a653a31322e307074223e3c7370616e207374796c653d22636f6c6f723a23333734313531223e5468616e6b20796f7520666f722063686f6f73696e67204769616e7420466f78213c2f7370616e3e3c2f7370616e3e3c2f7370616e3e3c2f7370616e3e3c2f703e0d0a3c2f6469763e0d0a0d0a3c70207374796c653d226d617267696e2d6c6566743a30636d3b206d617267696e2d72696768743a30636d223e266e6273703b3c2f703e0d0a3c2f6469763e0d0a0d0a3c70207374796c653d226d617267696e2d6c6566743a30696e3b206d617267696e2d72696768743a30696e223e266e6273703b3c2f703e0d0a, '', '', '', '', '', '', '', '', '', '', '', 0, 0, '', '', 0, 0, 0),
(7, '1706612545.png', '1926571714.jpg', '', 'Shooping cart image', '', '', '', '', '', '', '', '', '', '', 0, 0, '', '', 0, 0, 0),
(8, 'FAQ', '', 0x3c703e464151262333393b533c2f703e0d0a, '', '', '', '', '', '', '', '', '', '', '', 0, 0, '', '', 0, 0, 0),
(9, 'Cancel & Refund', '', 0x3c70207374796c653d226d617267696e2d6c6566743a30636d3b206d617267696e2d72696768743a30636d223e3c7370616e207374796c653d22666f6e742d73697a653a31327078223e52657475726e20706572696f643c2f7370616e3e3c2f703e0d0a0d0a3c70207374796c653d226d617267696e2d6c6566743a30636d3b206d617267696e2d72696768743a30636d223e3c7370616e207374796c653d22666f6e742d73697a653a31327078223e3c7370616e207374796c653d22666f6e742d66616d696c793a5461686f6d612c223e3c7370616e207374796c653d22636f6c6f723a23306530623035223e54686520637573746f6d65722063616e20656173696c7920626f6f6b207468652072657475726e2077697468696e203420646179732061667465722064656c6976657279202e2052657475726e732077696c6c206e6f7420626520616363657074656420696620746865792061726520626f6f6b656420616674657220342064617973206f662064617465206f662064656c6976657279203c2f7370616e3e3c2f7370616e3e3c2f7370616e3e3c2f703e0d0a0d0a3c646976207374796c653d22626f726465722d626f74746f6d3a736f6c6964202337663766376620312e3070743b20626f726465722d6c6566743a6e6f6e653b20626f726465722d72696768743a6e6f6e653b20626f726465722d746f703a736f6c6964202332363236323620332e3070743b2070616464696e673a352e3070742030636d20352e3070742030636d223e0d0a3c6831207374796c653d226d617267696e2d6c6566743a30636d3b206d617267696e2d72696768743a30636d223e3c7370616e207374796c653d22666f6e742d73697a653a31327078223e3c7370616e207374796c653d22666f6e742d66616d696c793a5461686f6d612c223e3c7370616e207374796c653d22636f6c6f723a23306530623035223e526566756e642074696d696e673c2f7370616e3e3c2f7370616e3e3c2f7370616e3e3c2f68313e0d0a3c2f6469763e0d0a0d0a3c70207374796c653d226d617267696e2d6c6566743a30636d3b206d617267696e2d72696768743a30636d223e3c7370616e207374796c653d22666f6e742d73697a653a31327078223e3c7370616e207374796c653d22666f6e742d66616d696c793a5461686f6d612c223e3c7370616e207374796c653d22636f6c6f723a23376637663766223e54686520726566756e6420616d6f756e742077696c6c206265207472616e7366657272656420696e20332d34206461797320696e207468652077656273697465206166746572207468652070726f6475637420686173206265656e20726563656976656420696e206f75722077617265686f75736520616e642069742070617373657320746865207175616c69747920636865636b203c2f7370616e3e3c2f7370616e3e3c2f7370616e3e3c2f703e0d0a0d0a3c756c207374796c653d226c6973742d7374796c652d747970653a737175617265223e0d0a093c6c693e0d0a093c703e266e6273703b3c2f703e0d0a093c2f6c693e0d0a3c2f756c3e0d0a0d0a3c646976207374796c653d22626f726465722d626f74746f6d3a736f6c6964202337663766376620312e3070743b20626f726465722d6c6566743a6e6f6e653b20626f726465722d72696768743a6e6f6e653b20626f726465722d746f703a736f6c6964202332363236323620332e3070743b2070616464696e673a352e3070742030636d20352e3070742030636d223e0d0a3c6831207374796c653d226d617267696e2d6c6566743a30636d3b206d617267696e2d72696768743a30636d223e3c7370616e207374796c653d22666f6e742d73697a653a31327078223e3c7370616e207374796c653d22666f6e742d66616d696c793a5461686f6d612c223e3c7370616e207374796c653d22636f6c6f723a23306530623035223e526566756e64206d6574686f64203c2f7370616e3e3c2f7370616e3e3c2f7370616e3e3c2f68313e0d0a3c2f6469763e0d0a0d0a3c70207374796c653d226d617267696e2d6c6566743a30636d3b206d617267696e2d72696768743a30636d223e3c7370616e207374796c653d22666f6e742d73697a653a31327078223e3c7370616e207374796c653d22666f6e742d66616d696c793a5461686f6d612c223e3c7370616e207374796c653d22636f6c6f723a23376637663766223e54686520726566756e6420616d6f756e742077696c6c206265207472616e7366657272656420746f2074686520776562736974652077616c6c6574206f6e6c79202e20416e20616d6f756e74206f66203135302f2d2077696c6c2062652064656475637465642066726f6d207468652077616c6c65742061732072657475726e2063686172676573202f65786368616e67652063686172676573203c2f7370616e3e3c2f7370616e3e3c2f7370616e3e3c2f703e0d0a0d0a3c646976207374796c653d22626f726465722d626f74746f6d3a736f6c6964202337663766376620312e3070743b20626f726465722d6c6566743a6e6f6e653b20626f726465722d72696768743a6e6f6e653b20626f726465722d746f703a736f6c6964202332363236323620332e3070743b2070616464696e673a352e3070742030636d20352e3070742030636d223e0d0a3c6831207374796c653d226d617267696e2d6c6566743a30636d3b206d617267696e2d72696768743a30636d223e3c7370616e207374796c653d22666f6e742d73697a653a31327078223e3c7370616e207374796c653d22666f6e742d66616d696c793a5461686f6d612c223e3c7370616e207374796c653d22636f6c6f723a23306530623035223e436f6e746163742075733c2f7370616e3e3c2f7370616e3e3c2f7370616e3e3c2f68313e0d0a3c2f6469763e0d0a0d0a3c756c207374796c653d226c6973742d7374796c652d747970653a737175617265223e0d0a093c6c693e0d0a093c703e3c7370616e207374796c653d22666f6e742d73697a653a31327078223e3c7370616e207374796c653d22666f6e742d66616d696c793a5461686f6d612c223e3c7370616e207374796c653d22636f6c6f723a23376637663766223e54696d696e677320313020616d20746f203620706d2066726f6d204d6f6e64617920746f205361747572646179203c2f7370616e3e3c2f7370616e3e3c2f7370616e3e3c2f703e0d0a093c2f6c693e0d0a093c6c693e0d0a093c703e3c7370616e207374796c653d22666f6e742d73697a653a31327078223e3c7370616e207374796c653d22666f6e742d66616d696c793a5461686f6d612c223e3c7370616e207374796c653d22636f6c6f723a23376637663766223e4f757220637573746f6d657220737570706f72742073657276696365207465616d20697320726561647920746f2061737369737420796f75203c2f7370616e3e3c2f7370616e3e3c2f7370616e3e3c2f703e0d0a093c2f6c693e0d0a093c6c693e0d0a093c703e3c7370616e207374796c653d22666f6e742d73697a653a31327078223e3c7370616e207374796c653d22666f6e742d66616d696c793a5461686f6d612c223e3c7370616e207374796c653d22636f6c6f723a23376637663766223e576520617265206c6f636174656420696e2044656c686920617420506974616d70757261203c2f7370616e3e3c2f7370616e3e3c2f7370616e3e3c2f703e0d0a093c2f6c693e0d0a093c6c693e0d0a093c703e3c7370616e207374796c653d22666f6e742d73697a653a31327078223e3c7370616e207374796c653d22666f6e742d66616d696c793a5461686f6d612c223e3c7370616e207374796c653d22636f6c6f723a23376637663766223e456d61696c207573206174203c6120687265663d226d61696c746f3a737570706f7274406769616e74666f78636c6f7468696e672e636f6d22207374796c653d22636f6c6f723a233533633363373b20746578742d6465636f726174696f6e3a756e6465726c696e65223e737570706f7274406769616e74666f78636c6f7468696e672e636f6d3c2f613e3c2f7370616e3e3c2f7370616e3e3c2f7370616e3e3c2f703e0d0a093c2f6c693e0d0a093c6c693e0d0a093c703e3c7370616e207374796c653d22666f6e742d73697a653a31327078223e3c7370616e207374796c653d22666f6e742d66616d696c793a5461686f6d612c223e3c7370616e207374796c653d22636f6c6f723a23376637663766223e3c6120687265663d226d61696c746f3a48656c70406769616e74666f78636c6f7468696e672e636f6d22207374796c653d22636f6c6f723a233533633363373b20746578742d6465636f726174696f6e3a756e6465726c696e65223e48656c70406769616e74666f78636c6f7468696e672e636f6d3c2f613e3c2f7370616e3e3c2f7370616e3e3c2f7370616e3e3c2f703e0d0a093c2f6c693e0d0a093c6c693e0d0a093c703e3c7370616e207374796c653d22666f6e742d73697a653a31327078223e3c7370616e207374796c653d22666f6e742d66616d696c793a5461686f6d612c223e3c7370616e207374796c653d22636f6c6f723a23376637663766223e43414c4c2055532040202b393120393939393131373738393c2f7370616e3e3c2f7370616e3e3c2f7370616e3e3c2f703e0d0a093c2f6c693e0d0a3c2f756c3e0d0a0d0a3c70207374796c653d226d617267696e2d6c6566743a31302e3870743b206d617267696e2d72696768743a30636d223e3c7370616e207374796c653d22666f6e742d73697a653a31327078223e3c7370616e207374796c653d22666f6e742d66616d696c793a5461686f6d612c223e3c7370616e207374796c653d22636f6c6f723a23376637663766223e415645524147452070726f63657373696e672074696d653c2f7370616e3e3c2f7370616e3e3c2f7370616e3e3c2f703e0d0a0d0a3c70207374796c653d226d617267696e2d6c6566743a31302e3870743b206d617267696e2d72696768743a30636d223e3c7370616e207374796c653d22666f6e742d73697a653a31327078223e3c7370616e207374796c653d22666f6e742d66616d696c793a5461686f6d612c223e3c7370616e207374796c653d22636f6c6f723a23376637663766223e3c656d3e4d6574726f73203a204f52444552532077696c6c2062652064656c6976657265642077697468696e20352d3720427573696e6573732064617973206e6f7420696e636c7573697665206f66207075626c696320686f6c6964617973203c2f656d3e3c2f7370616e3e3c2f7370616e3e3c2f7370616e3e3c2f703e0d0a0d0a3c70207374796c653d226d617267696e2d6c6566743a31302e3870743b206d617267696e2d72696768743a30636d223e3c7370616e207374796c653d22666f6e742d73697a653a31327078223e3c7370616e207374796c653d22666f6e742d66616d696c793a5461686f6d612c223e3c7370616e207374796c653d22636f6c6f723a23376637663766223e3c656d3e52455354204f4620266e6273703b494e444941203a20372d313020627573696e6573732064617973206e6f7420696e636c7573697665206f66207075626c696320686f6c6964617973203c2f656d3e3c2f7370616e3e3c2f7370616e3e3c2f7370616e3e3c2f703e0d0a0d0a3c703e266e6273703b3c2f703e0d0a, '', '', '', '', '', '', '', '', '', '', '', 0, 0, '', '', 0, 0, 0),
(10, '1706612545.png', '', '', 'Checkout Image', '', '', '', '', '', '', '', '', '', '', 0, 0, '', '', 0, 0, 0),
(11, '1706612545.png', '', '', 'Contact Image', '', '', '', '', '', '', '', '', '', '', 0, 0, '', '', 0, 0, 0),
(12, '1706612545.png', '', '', 'About Image', '', '', '', '', '', '', '', '', '', '', 0, 0, '', '', 0, 0, 0),
(13, '1706612545.png', '', '', 'Term Condition Image', '', '', '', '', '', '', '', '', '', '', 0, 0, '', '', 0, 0, 0),
(14, '1706612545.png', '', '', 'Privacy Policy Image', '', '', '', '', '', '', '', '', '', '', 0, 0, '', '', 0, 0, 0),
(15, '1706612545.png', '', '', 'shipping Policy Image', '', '', '', '', '', '', '', '', '', '', 0, 0, '', '', 0, 0, 0),
(16, '1706612545.png', '', '', 'return refund Image', '', '', '', '', '', '', '', '', '', '', 0, 0, '', '', 0, 0, 0),
(17, '1706612545.png', '', '', 'FAQ Image', '', '', '', '', '', '', '', '', '', '', 0, 0, '', '', 0, 0, 0);

-- --------------------------------------------------------

--
-- Table structure for table `size`
--

DROP TABLE IF EXISTS `size`;
CREATE TABLE IF NOT EXISTS `size` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `name` text NOT NULL,
  `slug` text NOT NULL,
  `status` int(11) NOT NULL,
  `addeddate` datetime NOT NULL,
  `modifieddate` datetime NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=36 DEFAULT CHARSET=utf8;

--
-- Dumping data for table `size`
--

INSERT INTO `size` (`id`, `name`, `slug`, `status`, `addeddate`, `modifieddate`) VALUES
(26, 'XXs', 'xxs', 1, '2023-12-21 05:46:45', '2024-02-03 05:35:00'),
(27, 'XS', 'xs', 1, '2023-12-21 05:46:56', '2024-02-03 05:34:58'),
(28, 'S', 's', 1, '2023-12-21 05:47:02', '2024-02-03 05:34:56'),
(29, 'M', 'm', 1, '2023-12-21 05:47:06', '2024-02-03 05:34:54'),
(30, 'L', 'l', 1, '2023-12-26 01:34:12', '2024-02-03 05:34:52'),
(35, 'XL', 'xl', 1, '2024-03-14 12:52:41', '2024-03-14 02:15:49');

-- --------------------------------------------------------

--
-- Table structure for table `slider`
--

DROP TABLE IF EXISTS `slider`;
CREATE TABLE IF NOT EXISTS `slider` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `type` int(11) NOT NULL COMMENT '1=mobile,2=desktop',
  `image` text NOT NULL,
  `title` text NOT NULL,
  `sub_title` text NOT NULL,
  `content` text NOT NULL,
  `url` text NOT NULL,
  `status` int(11) NOT NULL,
  `addeddate` datetime NOT NULL,
  `modifieddate` datetime NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=18 DEFAULT CHARSET=utf8;

--
-- Dumping data for table `slider`
--

INSERT INTO `slider` (`id`, `type`, `image`, `title`, `sub_title`, `content`, `url`, `status`, `addeddate`, `modifieddate`) VALUES
(15, 0, '1705471119.jpg', '', '', '', '', 0, '2024-01-17 11:28:39', '2024-01-26 06:18:36'),
(16, 0, '1705471186.jpg', '', '', '', '', 0, '2024-01-17 11:29:46', '2024-01-26 06:18:48'),
(17, 0, '1706684132.png', '', '', '', '', 1, '2024-01-30 04:31:35', '2024-01-31 02:53:46');

-- --------------------------------------------------------

--
-- Table structure for table `sub_categories`
--

DROP TABLE IF EXISTS `sub_categories`;
CREATE TABLE IF NOT EXISTS `sub_categories` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `sort` int(11) NOT NULL,
  `cat_id` int(11) NOT NULL,
  `name` text NOT NULL,
  `slug` text NOT NULL,
  `status` int(11) NOT NULL,
  `addeddate` datetime NOT NULL,
  `modifieddate` datetime NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=56 DEFAULT CHARSET=utf8;

--
-- Dumping data for table `sub_categories`
--

INSERT INTO `sub_categories` (`id`, `sort`, `cat_id`, `name`, `slug`, `status`, `addeddate`, `modifieddate`) VALUES
(44, 1, 37, 'T-Shirts', 't-shirts', 1, '2024-01-19 01:02:52', '2024-03-20 10:53:46'),
(45, 3, 37, 'CARGOS', 'cargos', 1, '2024-01-19 01:03:03', '2024-03-14 06:23:13'),
(46, 4, 0, 'CARGO', 'cargo', 0, '2024-01-19 01:03:12', '2024-03-01 11:17:11'),
(47, 6, 31, 'BAGS', 'bags', 0, '2024-01-19 01:03:22', '2024-01-19 03:29:49'),
(48, 5, 31, 'BELTS', 'belts', 0, '2024-01-19 01:03:33', '2024-01-19 03:29:57'),
(49, 1, 33, 'T-SHIRT', 't-shirt', 1, '2024-01-19 01:03:48', '2024-03-20 10:57:31'),
(50, 2, 33, 'SWEATSHIRTS', 'sweatshirts', 1, '2024-01-19 01:03:59', '2024-03-01 11:16:23'),
(51, 3, 33, 'HOODIE', 'hoodie', 1, '2024-01-19 01:04:10', '2024-03-01 11:16:37'),
(55, 7, 31, 'CAPS', 'caps', 1, '2024-03-01 10:07:33', '2024-03-01 10:09:45');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_admin`
--

DROP TABLE IF EXISTS `tbl_admin`;
CREATE TABLE IF NOT EXISTS `tbl_admin` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `first_name` text NOT NULL,
  `last_name` text NOT NULL,
  `username` text NOT NULL,
  `password` text NOT NULL,
  `email` varchar(100) NOT NULL,
  `mobile` varchar(15) NOT NULL,
  `address` text NOT NULL,
  `image` text NOT NULL,
  `gender` text NOT NULL,
  `dob` text NOT NULL,
  `martial` text NOT NULL,
  `age` text NOT NULL,
  `country` text NOT NULL,
  `state` text NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=4 DEFAULT CHARSET=utf8;

--
-- Dumping data for table `tbl_admin`
--

INSERT INTO `tbl_admin` (`id`, `first_name`, `last_name`, `username`, `password`, `email`, `mobile`, `address`, `image`, `gender`, `dob`, `martial`, `age`, `country`, `state`) VALUES
(1, 'Azmal', 'Ansari', 'azmal123', 'azmal123', 'admin@gmail.com', '46546', 'sfsfsdf sdefdsfs fsdf sdf', 'user2.jpg', 'male', '01/01/2022', 'single', '22', 'india', 'elhi'),
(2, 'Admin', 'Admin', 'admin', 'admin', 'admin1@gmail.com', '95822980123', 'delhi', '1677049590.jpg', 'male', '01/01/2022', 'single', '22', 'india', 'delhi'),
(3, 'Wolverine', 'logen', 'azmal', 'azmal', 'wolverine@gmail.com', '897989', 'sfsfsdf sdefdsfs fsdf sdf', 'user3.jpg', 'male', '01/01/2022', 'single', '22', 'india', 'delhi');

-- --------------------------------------------------------

--
-- Table structure for table `testimonials`
--

DROP TABLE IF EXISTS `testimonials`;
CREATE TABLE IF NOT EXISTS `testimonials` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `image` text NOT NULL,
  `name` text NOT NULL,
  `position` text NOT NULL,
  `content` text NOT NULL,
  `rating` int(11) NOT NULL,
  `status` int(11) NOT NULL,
  `addeddate` datetime NOT NULL,
  `modifieddate` datetime NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
