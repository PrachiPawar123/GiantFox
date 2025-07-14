
-- --------------------------------------------------------

--
-- Table structure for table `offer_banners`
--

DROP TABLE IF EXISTS `offer_banners`;
CREATE TABLE IF NOT EXISTS `offer_banners` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `mobile` int(11) NOT NULL,
  `type` int(11) NOT NULL,
  `image` text NOT NULL,
  `sub_title` text NOT NULL,
  `title` text NOT NULL,
  `link` text NOT NULL,
  `status` int(11) NOT NULL,
  `addeddate` datetime NOT NULL,
  `modifieddate` datetime NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=4 DEFAULT CHARSET=utf8;

--
-- Dumping data for table `offer_banners`
--

INSERT INTO `offer_banners` (`id`, `mobile`, `type`, `image`, `sub_title`, `title`, `link`, `status`, `addeddate`, `modifieddate`) VALUES
(1, 0, 0, '1743359606.50', '', '', 'https://www.giantfox.in/admin_con/offer_banners/edit/1', 1, '2024-12-27 03:43:31', '2025-03-31 12:03:26'),
(3, 0, 0, '1743359566.50', '', '', 'https://www.giantfox.in/admin_con/offer_banners/edit/3', 1, '2024-12-27 03:50:19', '2025-03-31 12:02:46');
