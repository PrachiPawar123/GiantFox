
-- --------------------------------------------------------

--
-- Table structure for table `tbl_admin`
--

DROP TABLE IF EXISTS `tbl_admin`;
CREATE TABLE IF NOT EXISTS `tbl_admin` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `first_name` text NOT NULL,
  `last_name` text NOT NULL,
  `username` text NOT NULL,
  `password` text NOT NULL,
  `email` varchar(100) NOT NULL,
  `mobile` varchar(15) NOT NULL,
  `address` text NOT NULL,
  `image` text NOT NULL,
  `gender` text NOT NULL,
  `dob` text NOT NULL,
  `martial` text NOT NULL,
  `age` text NOT NULL,
  `country` text NOT NULL,
  `state` text NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=4 DEFAULT CHARSET=utf8;

--
-- Dumping data for table `tbl_admin`
--

INSERT INTO `tbl_admin` (`id`, `first_name`, `last_name`, `username`, `password`, `email`, `mobile`, `address`, `image`, `gender`, `dob`, `martial`, `age`, `country`, `state`) VALUES
(1, 'Azmal', 'Ansari', 'azmal123', 'azmal123', 'admin@gmail.com', '46546', 'sfsfsdf sdefdsfs fsdf sdf', 'user2.jpg', 'male', '01/01/2022', 'single', '22', 'india', 'elhi'),
(2, 'Giant', 'Giant', 'Giant@2313', 'Giant@2313', 'giantfoxclothing@gmail.com', '9999117789', 'NewDelhi', '1677049590.jpg', 'Female', '13/10/1984', 'Married', '39', 'India', 'delhi'),
(3, 'Wolverine', 'logen', 'azmal', 'azmal', 'wolverine@gmail.com', '897989', 'sfsfsdf sdefdsfs fsdf sdf', 'user3.jpg', 'male', '01/01/2022', 'single', '22', 'india', 'delhi');
