
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
) ENGINE=InnoDB AUTO_INCREMENT=304 DEFAULT CHARSET=utf8;

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
(169, 5, 45, 'GFL', '500', 2, 2, '2024-01-30'),
(303, 9, 107, 'GIANT15', '15', 1, 2, '2025-01-10');
