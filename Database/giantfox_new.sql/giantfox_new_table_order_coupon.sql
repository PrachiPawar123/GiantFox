
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
) ENGINE=InnoDB AUTO_INCREMENT=171 DEFAULT CHARSET=utf8;

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
(157, '85c26c436268f3f7e92fa0f05f09de0f09cdd8ee', 9, 'GIANTFOX10', 1, 1, '1711362596', '10', 1),
(159, 'd796f19d7c47010fa735dfe7a54edfafaea3edc0', 9, 'GIANTFOX20', 1, 2, '', '20', 0),
(161, '051af476083425c41ba95b839cddf204bb4be551', 9, 'GIANTFOX20', 1, 2, '', '20', 0),
(163, 'b1726b68e622cd0db006cd380682f8142c453afc', 9, 'GIANTFOX30', 1, 2, '', '30', 0),
(170, 'b32ebb78d0f822d12cbe11a151f0d9e07a5b51f5', 9, 'GIANTFOX10', 1, 2, '', '20', 0);
