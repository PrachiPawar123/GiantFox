
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
) ENGINE=InnoDB AUTO_INCREMENT=39 DEFAULT CHARSET=utf8;

--
-- Dumping data for table `size`
--

INSERT INTO `size` (`id`, `name`, `slug`, `status`, `addeddate`, `modifieddate`) VALUES
(26, 'XXS', 'xxs', 1, '2023-12-21 05:46:45', '2024-07-04 09:40:20'),
(27, 'XS', 'xs', 1, '2023-12-21 05:46:56', '2024-02-03 05:34:58'),
(28, 'S', 's', 1, '2023-12-21 05:47:02', '2024-02-03 05:34:56'),
(29, 'M', 'm', 1, '2023-12-21 05:47:06', '2024-02-03 05:34:54'),
(30, 'L', 'l', 1, '2023-12-26 01:34:12', '2024-02-03 05:34:52'),
(37, 'XL', 'xl', 1, '2024-12-27 01:40:17',  '2024-02-03 05:34:52'),
(38, 'XXXS', 'xxxs', 1, '2024-12-27 06:06:01',  '2024-02-03 05:34:52');
