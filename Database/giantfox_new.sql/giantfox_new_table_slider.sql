
-- --------------------------------------------------------

--
-- Table structure for table `slider`
--

DROP TABLE IF EXISTS `slider`;
CREATE TABLE IF NOT EXISTS `slider` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `type` int(11) NOT NULL COMMENT '1=mobile,2=desktop',
  `image` text NOT NULL,
  `title` text NOT NULL,
  `sub_title` text NOT NULL,
  `content` text NOT NULL,
  `url` text NOT NULL,
  `status` int(11) NOT NULL,
  `addeddate` datetime NOT NULL,
  `modifieddate` datetime NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=18 DEFAULT CHARSET=utf8;

--
-- Dumping data for table `slider`
--

INSERT INTO `slider` (`id`, `type`, `image`, `title`, `sub_title`, `content`, `url`, `status`, `addeddate`, `modifieddate`) VALUES
(15, 0, '1705471119.jpg', '', '', '', '', 0, '2024-01-17 11:28:39', '2024-01-26 06:18:36'),
(17, 0, '1706684132.png', '', '', '', '', 1, '2024-01-30 04:31:35', '2024-01-31 02:53:46');
