
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
(1, 'Checkout Our New Collection ', 0, '2024-01-30 06:32:25', '2024-09-22 11:00:35'),
(2, 'NEW PRODUCTS  WILL UPDATE SOON', 1, '2024-01-30 06:32:43', '2024-12-27 01:57:13');
