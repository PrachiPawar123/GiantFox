
-- --------------------------------------------------------

--
-- Table structure for table `dela_of_day`
--

DROP TABLE IF EXISTS `dela_of_day`;
CREATE TABLE IF NOT EXISTS `dela_of_day` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `image` text NOT NULL,
  `sub_title` text NOT NULL,
  `title` text NOT NULL,
  `content` text NOT NULL,
  `video_link` text NOT NULL,
  `countdown` text NOT NULL COMMENT 'Sep 30, 2023 00:00:00',
  `url` text NOT NULL,
  `status` int(11) NOT NULL,
  `addeddate` datetime NOT NULL,
  `modifieddate` datetime NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;
