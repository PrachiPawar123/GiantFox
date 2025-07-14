
-- --------------------------------------------------------

--
-- Table structure for table `coupen_code`
--

DROP TABLE IF EXISTS `coupen_code`;
CREATE TABLE IF NOT EXISTS `coupen_code` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `name` varchar(500) NOT NULL,
  `amount` varchar(110) NOT NULL,
  `type` int(11) NOT NULL,
  `coupen_type` int(1) NOT NULL COMMENT '1=checkout, 2 =product',
  `p_id` text NOT NULL,
  `expirey_date` date NOT NULL,
  `status` int(11) NOT NULL,
  `addeddate` datetime NOT NULL,
  `modifieddate` datetime NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=10 DEFAULT CHARSET=utf8;

--
-- Dumping data for table `coupen_code`
--

INSERT INTO `coupen_code` (`id`, `name`, `amount`, `type`, `coupen_type`, `p_id`, `expirey_date`, `status`, `addeddate`, `modifieddate`) VALUES
(9, 'GIANT15', '15', 1, 2, '[{\"p_id\":\"107\",\"name\":\"GIANT15\",\"amount\":\"15\",\"type\":\"1\",\"coupen_type\":\"2\",\"expirey_date\":\"2025-01-10\"}]', '2025-01-10', 0, '2024-01-26 08:05:09', '2024-12-27 03:32:42');
