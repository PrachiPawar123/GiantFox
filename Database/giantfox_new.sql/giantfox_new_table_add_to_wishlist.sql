
-- --------------------------------------------------------

--
-- Table structure for table `add_to_wishlist`
--

DROP TABLE IF EXISTS `add_to_wishlist`;
CREATE TABLE IF NOT EXISTS `add_to_wishlist` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `p_id` int(11) NOT NULL,
  `quantity` text NOT NULL,
  `temp_user_id` text NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=18 DEFAULT CHARSET=utf8;

--
-- Dumping data for table `add_to_wishlist`
--

INSERT INTO `add_to_wishlist` (`id`, `p_id`, `quantity`, `temp_user_id`) VALUES
(3, 46, '1', '604cc365c468fea9dac1361be6a42bef13b3c6f2'),
(5, 68, '1', '9'),
(6, 45, '1', '7487ea68fa8721fc4c082eb2ad1f08442fb56d2d'),
(7, 43, '1', 'a80331e896c745a18d81a629faed2d16da83a340'),
(8, 82, '1', 'u1h381g9ljnfed117vjq44smtk63qag1'),
(9, 0, '1', 'b48af41e6174d2dd77bc2c96ea8f2c9f8cfc8fd0'),
(10, 90, '1', 'ae18b8801d941d1dd92a3c19c210d753058c3e7f'),
(11, 98, '1', '193f2f17d105765bb988d3c5daf82eea4d6c9825'),
(12, 89, '1', '74412bc31ab16b84d05a91b8a655c774ef19ec87'),
(13, 98, '1', '8ee4d2fc218d9561979ffe1803688fab07291da8'),
(16, 110, '1', '20cf47c7956040d86dcf96c53b9a85669c9b655d'),
(17, 108, '1', '183daff748bb66f8e412b622d30188e23c3908a0');
