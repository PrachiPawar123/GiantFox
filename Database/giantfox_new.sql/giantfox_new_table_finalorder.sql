
-- --------------------------------------------------------

--
-- Table structure for table `finalorder`
--

DROP TABLE IF EXISTS `finalorder`;
CREATE TABLE IF NOT EXISTS `finalorder` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `user_id` text NOT NULL,
  `order_id` text NOT NULL,
  `f_name` text NOT NULL,
  `l_name` text NOT NULL,
  `compony_name` text NOT NULL,
  `country` text NOT NULL,
  `address` text NOT NULL,
  `apartment` text NOT NULL,
  `house_str_no` text NOT NULL,
  `city` text NOT NULL,
  `state` text NOT NULL,
  `pincode` text NOT NULL,
  `email` text NOT NULL,
  `mobile` text NOT NULL,
  `order_note` text NOT NULL,
  `discount` text NOT NULL,
  `discount_amount` text NOT NULL,
  `shipping_charge` text NOT NULL,
  `sub_total` text NOT NULL,
  `finalprice` text NOT NULL,
  `after_discount_final_price` text NOT NULL,
  `payment_type` int(11) NOT NULL COMMENT '1=cod\r\n2=online',
  `failed_status` int(11) NOT NULL COMMENT '1=yes,2=no',
  `status` int(11) NOT NULL,
  `addeddate` datetime NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=186 DEFAULT CHARSET=utf8;

--
-- Dumping data for table `finalorder`
--

INSERT INTO `finalorder` (`id`, `user_id`, `order_id`, `f_name`, `l_name`, `compony_name`, `country`, `address`, `apartment`, `house_str_no`, `city`, `state`, `pincode`, `email`, `mobile`, `order_note`, `discount`, `discount_amount`, `shipping_charge`, `sub_total`, `finalprice`, `after_discount_final_price`, `payment_type`, `failed_status`, `status`, `addeddate`) VALUES
(43, '8711abedf0c13906028254117693c3e577b7e897', '1706368576', 'Vishwash ', 'Bharti ', '', 'India', 'House no - 170,171 ground floor pocket- 11, sector 22 rohini ', '', '', '', '', '110086', 'bhartivishwash38@gmail.com', '9811062129', 'Please dispatch it as early as possible', '15', '329.85', '0', '2199', '1869.15', '1869.15', 2, 0, 4, '2024-01-27 00:00:00'),
(54, 'caca7509d10d8c72afcc33c34a77a7fafee85e78', '1707041409', 'Neetu', 'Singh', '', 'India', '1301,1302 Richmond building building hiranandani garden ', '', '', 'Mumbai ', '', '400076', 'Neetusingh.ns1001@gmail.com', '9870021001', '', '0', '0', '0', '7137', '7137', '7137', 2, 0, 4, '2024-02-04 00:00:00'),
(63, '4d888d886fd557500266ffe15088ce9a826af2dc', '1707151240', 'Anikit (Sumit)', 'Mahipal (Garg)', '', 'India', 'CP-130', '', '', 'New Delhi', '', '110034', '', '9899135027', '', '0', '0', '0', '2449', '2449', '2449', 2, 0, 4, '2024-02-05 00:00:00'),
(69, '384112060f32601b8b84d1b2dfc0a373b8044ec3', '1707231714', 'Bhawna', 'Babbar', '', 'India', 'A90 narangcolony firstfloor janakpuri', '', '', 'Delhi', '', '110058', 'bhawnababbar15@gmail.com', '09891921100', '', '0', '0', '0', '2449', '2449', '2449', 2, 0, 4, '2024-02-06 00:00:00'),
(74, '94737d23a789dc70c55a72a4b3de0e5db2ddaf7c', '1707290172', 'Rashmi ', 'Singh ', '', 'India', 'F-202, SRK garden, kudlu main road Bangalore ', '', '', 'Bangalore ', '', '560068', 'Rashmeeesingh30@gmail.com', '7355363162', '', '0', '0', '0', '2499', '2499', '2499', 2, 0, 4, '2024-02-07 00:00:00'),
(75, '4666d4024b7ef409c7e781dddde446f8aeb84b3b', '1707290698', 'Tanmay ', 'Singh', '', 'India', '116E/A nyay colony sulem sarai Prayagraj ', '', '', 'Allahabad ', '', '211011', 'Singhtanmay443@gmail.com', '8318756126', '', '0', '0', '0', '2449', '2449', '2449', 2, 0, 4, '2024-02-07 00:00:00'),
(78, 'f1e34144b94b0c5ad73840abfdcadc34a19d277f', '1707407624', 'Saloni', 'Singh', '', 'India', 'flat 101, resort view building, thakur complex kandivali east ', '', '', 'Mumbai', '', '400101', 'saloni0703singh@gmail.com', '8879904082', '', '0', '0', '0', '2499', '2499', '2499', 2, 0, 4, '2024-02-08 00:00:00'),
(84, '1e6c335ebb8012a6b1b6a39b0cf71c4452c57d7b', '1707458547', 'Gauri', 'Chabbra', '', 'India', 'CP-132,Pitampura ', '', '', 'New Delhi', '', '110034', '', '9999738741', '', '0', '0', '0', '4688', '4688', '4688', 1, 0, 4, '2024-02-09 00:00:00'),
(108, '2d187873aa91fa3235e35071e6d1f2dec76d3ada', '1707801483', 'Ankur ', 'Chauhan ', '', 'India', 'C-10/24 ,2nd Floor, Sector-15,  Rohini , Delhi-110089 ', '', '', 'Delhi', '', '110089', 'ankurchauhan98@gmail.com', '9811127026', '', '0', '0', '0', '4948', '4948', '4948', 2, 0, 4, '2024-02-13 00:00:00'),
(109, 'dde79afc2a0281b2e81ff317c9c6095163cd680c', '1707842243', 'Shweta ', 'Singh', '', 'India', '4805/4806, B wing, oberoi exquisite,Goregaon East, Mumbai 400063', '', '', 'Mumbai', '', '4000072', 'Shwetasingh3105@gmail.com', '9920770166', '', '0', '0', '0', '2449', '2449', '2449', 0, 0, 4, '2024-02-13 00:00:00'),
(112, 'b7884bb1c6fb7b0e130ccc268afca658dd9f2fad', '1707973338', 'Anmol', '', '', 'India', '1301,Richmond Building Hiranandani Garden,Mumbai', '', '', 'Mumbai(Maharastra)', '', '400076', '', '9870021001', '', '0', '0', '0', '6928', '6928', '6928', 1, 0, 4, '2024-02-15 00:00:00'),
(124, '7e145de6922ec60e0fff5dae92ab9910bdbecc96', '1708137701', 'Sneh ', 'Singh', '', 'India', ' ANIRUDH villa, Goregaon west, Near MTNL,  Behind Image Restaurant, SV Road', '', '', 'Mumbai ', '', '400062', 'Singh.sneh12@gmail.com', '9930534282', '', '0', '0', '200', '2699', '2899', '2899', 2, 0, 4, '2024-02-17 00:00:00'),
(128, '2226967478806e0e080fc14f52234edd7baa2dbd', '1710144199', 'Nisha', 'Singh', '', '250', '201 vaibhav apartment, 13 union park, behind hotel le sutra, bandra (w) ', '', '', 'Mumbai', '', '400050', 'Nisha.singh@hotmail.com', '+91 99201 28155', '', '0', '0', '250', '2699', '2699', '2949', 2, 0, 4, '2024-03-11 00:00:00'),
(164, '71b6ad0f77a1a4b88ca344b0e7dd0e79c9967a07', '1710478714', 'Neetu', 'Singh', '', '1500', '1301 Richmond building Hiranadani garden powai', '', '', 'Mumbai', '', '400076', 'neetusingh.ns1001@gmail.com', '09870021001', '', '0', '0', '1500', '8696', '8696', '10196', 2, 0, 4, '2024-03-15 00:00:00'),
(165, 'ba5c5106733fb16c67817625dd7d6adad6c1dd7f', '1715995972', ' Abhishek', 'Thakur', '', '250', '527 Annex , Command Mess , NOFRA, Colaba', '', '', 'Mumbai', '', '400005', 'abburocks.thakur.at@gmail.com', '95731 29541', '', '0', '0', '250', '2499', '2499', '2749', 1, 0, 4, '2024-05-18 00:00:00'),
(166, '259a5507061ab61057f216d16d24d27375ee7ca7', '1718184364', 'Neetu', 'Singh', '', '1500', '1301 Richmond building Hiranadani garden powai', '', '', 'Mumbai', '', '400076', 'neetusingh.ns1001@gmail.com', '09870021001', '', '0', '0', '1500', '2499', '2499', '3999', 2, 0, 4, '2024-06-12 00:00:00'),
(169, '4231a9ce080da7728c4044ab08a2261e4af6ace0', '1720789925', 'Adeepta', 'Bhowmik', '', '250', '24-6 sagar Society mhada telephone exchange', '', '', 'Mumbai', '', '400053', 'adeeptabhowmik420@gmail.com', '9930390768', '', '0', '0', '250', '2499', '2499', '2749', 2, 0, 4, '2024-07-12 00:00:00'),
(178, 'ef2b50bd6c6b09fd32d6a31b5d454900c6da3eb5', '1721907097', 'Abhishek', 'singh', '', '100', 'ghiuyfj', '', '', 'uigtuig', '', '110043', 'info@codediffusion.in', '7827114607', 'kjgbkuvbkjv', '0', '0', '100', '2799', '2799', '2899', 2, 0, 4, '2024-07-25 00:00:00'),
(180, 'b0141ae7821bf1f26ab3ead325331fdc85c41529', '1734286846', 'Ojas', 'Gupta ', '', '250', 'Triloki and Sons , Park Road ,Near Ganesh Misthan . Opp. Head post office , Golghar , Gorakhpur -273001 ', '', '', 'Gorakhpur ', '', '273001', 'guptaojas29@gmail.com', '09839226007', '', '0', '0', '250', '5898', '5898', '6148', 2, 0, 4, '2024-12-15 00:00:00'),
(181, 'b047c8260677d7c4f0ceacb84d4c184f021e186c', '1735216539', 'TARUSH', 'DHINGRA', '', '250', 'Vidya Ratan , Gandhi gali , Golghar ., Near IMS coaching, Near IMS coaching, Near IMS coaching, Near IMS coaching, Near IMS coaching, Near IMS coaching', '', '', 'Gorakhpur', '', '273001', 'tarushdhingra1@gmail.com', '07275581532', '', '0', '0', '250', '2499', '2499', '2749', 1, 0, 5, '2024-12-26 00:00:00'),
(182, '72176a8f0b798101d4a7ca5f0dc2260070bfcdd0', '1737564906', 'Neetu', 'Singh', '', '250', '1301 Richmond building Hiranadani garden powai', '', '', 'Mumbai', '', '400076', 'neetusingh.ns1001@gmail.com', '09870021001', '', '0', '0', '250', '14495', '14495', '14745', 2, 0, 4, '2025-01-22 00:00:00'),
(183, '30a8938f1305b57d3378a04e24f99f5f8f8f8292', '1741084634', 'Patrick ', 'Victor ', '', '250', 'Veena senterio B wing 1601', '', '', 'mumbai', '', '400071', 'lildude.patrick2010@gmail.com', '09773401169', '', '0', '0', '250', '2499', '2499', '2749', 2, 0, 5, '2025-03-04 00:00:00'),
(185, '20cf47c7956040d86dcf96c53b9a85669c9b655d', '1751906491', 'Neetu', 'Singh', '', '250', '1301 Richmond building Hiranadani garden powai', '', '', 'Mumbai', '', '400076', 'neetusingh.ns1001@gmail.com', '09870021001', '', '0', '0', '250', '30389', '30389', '30639', 2, 0, 0, '2025-07-07 00:00:00');
