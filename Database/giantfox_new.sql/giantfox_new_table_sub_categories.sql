
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
) ENGINE=InnoDB AUTO_INCREMENT=59 DEFAULT CHARSET=utf8;

--
-- Dumping data for table `sub_categories`
--

INSERT INTO `sub_categories` (`id`, `sort`, `cat_id`, `name`, `slug`, `status`, `addeddate`, `modifieddate`) VALUES
(56, 1, 34, 'URBAN T-SHIRTS', 'urban-t-shirts', 1, '2024-07-11 04:31:07', '2024-07-11 04:31:07'),
(57, 1, 35, 'HOODIES', 'hoodies', 1, '2024-07-11 04:48:43', '2024-07-11 05:00:00'),
(58, 1, 36, 'SWEATSHIRTS', 'sweatshirts', 1, '2024-07-11 04:49:43', '2024-12-27 01:45:43');
