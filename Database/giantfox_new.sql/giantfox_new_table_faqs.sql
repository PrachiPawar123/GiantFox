
-- --------------------------------------------------------

--
-- Table structure for table `faqs`
--

DROP TABLE IF EXISTS `faqs`;
CREATE TABLE IF NOT EXISTS `faqs` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `cat_id` int(11) NOT NULL,
  `question` text NOT NULL,
  `answere` text NOT NULL,
  `status` int(11) NOT NULL,
  `addeddate` date NOT NULL,
  `modifieddate` date NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=9 DEFAULT CHARSET=utf8;

--
-- Dumping data for table `faqs`
--

INSERT INTO `faqs` (`id`, `cat_id`, `question`, `answere`, `status`, `addeddate`, `modifieddate`) VALUES
(1, 6, 'CAN I EXCHANGE AN ITEM', 'WE HAVE EXCHANGE POLICY OF 7 DAYS FROM THE DATE OF RECEIVING THE PRODUCT FOR ONLINE ORDERS.TO INITIATE EXCHANGE , PLEASE WRITE TO SUPPORT@GIANTFOX.IN WITHIN 7 DAYS OF RECEIVING THE PRODUCT \r\n\r\nFOR HYGIENE ALL THE EXCHANGES RECEIVED WILL GO THROUGH A QUALITY CHECK BY OUR TEAM AND WOULD BE FURTHER APPROVED/DECLINED FOR EXCHANGE . WE RESERVE THE RIGHT TO NOT ACCEPT A RETURN IF \r\n: THE PRODUCTS ARE RETURNED AFTER USE\r\n: THE PRODUCTS DO NOT HAVE ALL THE TAGS\r\n', 1, '2024-01-27', '2024-03-21'),
(2, 3, 'HOW CAN I PAY FOR MY ORDER', 'ONLINE PURCHASES : CAN BE DONE THROUGH THE FOLLOWING PAYMENT METHODS :\r\n\r\nCARD , PAYTM ,UPI . PLEASE NOTE THAT WE DO NOT ACCEPT COD FOR ONLINE PURCHASES', 1, '2024-01-27', '2024-03-21'),
(3, 5, 'WHAT IS MY RIGHT SIZE', 'AS GIANTFOX PROVIDES TO THE OVERSIZE FIT , IF YOU\'RE UNSURE ABOUT SIZING ,WE RECOMMEND GOING ONE SIZE DOWN FROM YOUR REGULAR SIZE. FOR EXAMPLE ,IF YOU \r\n\r\n\r\nWEAR SIZE M, YOU CAN GO AHEAD WITH A SIZE S WITH US . WHEN YOU ARE COMFORTABLE YOU CAN UPSIZE IF YOU PREFER A LOOSER LOOK . WE HAVE PROVIDED THE  SIZE \r\n\r\n\r\nCHART ON OUR WEBSITE WHICH PROVIDE DETAILED MEASUREMENTS FOR EACH SIZE TO HELP YOU CHOOSE THE PERFECT FIT .', 1, '2024-01-30', '2024-03-21'),
(4, 2, 'WHERE DO WE DELIVER', 'WE SHIP AND DELIVER ALL OUR ORDERS PAN-INDIA', 1, '2024-03-21', '2024-03-21'),
(6, 3, 'test', 'vhnbmnbm', 0, '2024-03-22', '2024-03-22'),
(7, 3, 'Introduction to English Grammar', 'h', 0, '2024-03-22', '2024-03-22'),
(8, 2, 'yt', 'g', 1, '2024-03-23', '2024-03-22');
