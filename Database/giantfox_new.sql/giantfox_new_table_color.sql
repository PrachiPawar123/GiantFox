
-- --------------------------------------------------------

--
-- Table structure for table `color`
--

DROP TABLE IF EXISTS `color`;
CREATE TABLE IF NOT EXISTS `color` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `name` text NOT NULL,
  `slug` text NOT NULL,
  `color_code` text NOT NULL,
  `status` int(11) NOT NULL,
  `addeddate` datetime NOT NULL,
  `modifieddate` datetime NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=32 DEFAULT CHARSET=utf8;

--
-- Dumping data for table `color`
--

INSERT INTO `color` (`id`, `name`, `slug`, `color_code`, `status`, `addeddate`, `modifieddate`) VALUES
(2, 'BLACK', 'black', '#000000', 1, '2023-03-30 12:17:07', '2024-07-25 06:10:40'),
(11, 'ARMY GREEN', 'army-green', '#515436', 1, '2023-04-14 01:18:04', '2024-07-25 06:10:20'),
(27, 'NAVY BLUE T-SHIRT', 'navy-blue-t-shirt', '#0e0d54', 1, '2024-02-05 02:47:25', '2024-07-25 06:10:20'),
(29, 'OFFWHITE', 'offwhite', '#fcfbf4', 1, '2024-03-25 02:48:59', '2025-03-30 11:41:50'),
(30, 'LAVENDER', 'lavender', '#f5ccf4', 1, '2024-07-04 05:06:42', '2024-07-25 06:09:05'),
(31, 'PEACH', 'peach', '#ffeed1', 1, '2025-03-30 11:34:59', '2025-03-30 11:54:03');
