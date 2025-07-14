
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
) ENGINE=InnoDB AUTO_INCREMENT=37 DEFAULT CHARSET=utf8;

--
-- Dumping data for table `categories`
--

INSERT INTO `categories` (`id`, `sort`, `image`, `name`, `slug`, `status`, `addeddate`, `modifieddate`) VALUES
(34, 1, '', 'T-SHIRTS', 't-shirts', 1, '2024-07-11 04:25:03', '2024-07-11 04:27:39'),
(35, 2, '', 'HOODIES', 'hoodies', 1, '2024-07-11 04:26:03', '2024-07-11 04:27:49'),
(36, 3, '', 'SWEATSHIRTS', 'sweatshirts', 1, '2024-07-11 04:26:26', '2024-07-11 04:28:00');
