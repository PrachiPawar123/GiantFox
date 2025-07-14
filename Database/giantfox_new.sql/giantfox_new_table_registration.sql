
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
) ENGINE=InnoDB AUTO_INCREMENT=10 DEFAULT CHARSET=utf8;

--
-- Dumping data for table `registration`
--

INSERT INTO `registration` (`id`, `image`, `username`, `firstname`, `lastname`, `email`, `mobile`, `password`, `city`, `address`, `post_code`, `country`, `state`, `status`, `addeddate`) VALUES
(9, 'user.jpg', 'Tanmay Singh ', '', '', 'singhtanmay443@gmail.com', 8318756126, 'tabamy831', '', '', '', '', '', 1, '2024-02-05 21:12:43');
