
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
(2, 'rohini', '110025', 1, '2024-02-20 03:51:05', '2024-02-20 03:50:55');
