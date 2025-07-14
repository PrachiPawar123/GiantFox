
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
) ENGINE=InnoDB AUTO_INCREMENT=3 DEFAULT CHARSET=utf8;

--
-- Dumping data for table `singlebanner`
--

INSERT INTO `singlebanner` (`id`, `image`, `title`, `content`, `link`, `status`, `addeddate`, `modifieddate`) VALUES
(2, '1743359181.51', '', '', 'https://www.giantfox.in/admin_con/singlebanner/edit/2', 1, '2024-12-27 03:40:27', '2025-03-30 11:56:21');
