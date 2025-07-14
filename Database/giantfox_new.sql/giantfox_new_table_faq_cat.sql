
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
(3, 'ORDER ', 'order', 1, '2024-01-27 05:09:59', '2024-01-27 05:09:45'),
(5, 'PRODUCT', 'product', 1, '2024-03-21 04:58:11', '2024-01-27 05:09:45'),
(6, 'EXCHANGES', 'exchanges', 1, '2024-03-21 05:00:04', '2024-03-21 05:15:16');
