
-- --------------------------------------------------------

--
-- Table structure for table `contact`
--

DROP TABLE IF EXISTS `contact`;
CREATE TABLE IF NOT EXISTS `contact` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `name` text NOT NULL,
  `email` text NOT NULL,
  `mobile` text NOT NULL,
  `subject` text NOT NULL,
  `message` text NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=16 DEFAULT CHARSET=utf8;

--
-- Dumping data for table `contact`
--

INSERT INTO `contact` (`id`, `name`, `email`, `mobile`, `subject`, `message`) VALUES
(11, 'Herbert S.', 'pat@aneesho.com', '', 'Design Work', 'Do you need help with graphic design - brochures, banners, flyers, advertisements, social media posts, logos etc?\r\n\r\nWe charge a low fixed monthly fee.  Let me know if you\'re interested and would like to see our portfolio.'),
(12, 'Venkat', 'venkatiyer@arrkay.co.in', '', 'Business  Proposal', 'Dear Sir / Madam,\r\nGreetings, I am VENKAT  From ARRKAY ASSOCIATE TIRUPUR, INDIA,  \r\nRegarding for New Business PROPOSAL, \r\nARRKAY ASSOCIATE   A Professionally Managed Hi-Fashion Garments manufacturer Domestic and Exporter In Tirupur India Who maintaining the Name in the Industry for More Than 30 Years, Our company was Established in 1989. Keeping in line with our commitment to   ensure   safe and Ethical business standards. With a production capacity of 150000 pcs a month, covering various products – High Fashion Outerwear, Nightwear, for Women, Men , Children and Baby wears, Organic Products Garments , Towels, and promotional garments also.\r\nAlso I Have attached our Profile for your review, and expecting your feedback and support to start a best business Relationship. Expecting your favorable reply and don\'t hesitate to contact me for any enquiries. \r\nOur Motivation is to achieve 100% in customer Satisfaction Level. \r\nFor more details kindly contact me.\r\nWe look forward for your valuable inquiries.\r\nThanks and regards, \r\nVenkat\r\n9944199199\r\n'),
(13, 'Herbert S.', 'addison@seconsultancies.com', '', 'Website Development', 'Just wanted to ask if you\'re interested in getting a new website made or need some changes to your existing one? We have a large team of experienced website designers and developers who can help you.\r\n\r\nWe work with all platforms - Wordpress, Squarespace, Wix, Weebly etc and make all types of websites - informational, e-commerce etc. Would you like to see our portfolio?\r\n '),
(14, 'Reena', 'reena.s@tradesala.com', '', 'Welcome to Tradesala', 'Hello Sir\\ Madam,  \r\n  \r\nI hope you are doing well!   \r\n\r\nWe are from Tradesala an Indian B2BC E-commerce Platform. We aim to empower Indian Products and become the \"House of Indian Brands\", a one-stop solution for all the business needs of suppliers and customers. \r\n\r\nWe are inclined towards the procurement of suppliers from various streams and providing them with a better and easier platform to conduct their business online effectively with their customers.     \r\n\r\nWe have seen your company profile, which is quite impressive. I’ve attached a brochure for reference. \r\n\r\nCan we schedule 5 minutes meeting to take it further? \r\n \r\nKindly visit the following link to onboard on our platform:  \r\n\r\nhttps://vendor.tradesala.com  \r\nTradesala - Vendor Login/Signup | Sell your Products Online with us\r\nAre you an SME then you should be a part of Tradesala - Tradesala is India’s finest B2BC online marketplace and a one-stop solution for all the business needs of suppliers and customers.\r\nvendor.tradesala.com\r\n  \r\nBest Regards,'),
(15, 'Steve Cullen', 'steve@consumerprodemail.com', '', 'Expanding Distribution', 'Hello, I\'m Steve Cullen with Consumer Products International ( https://www.consumerproductsintl.com ).\r\n\r\nAt CPI, we specialize in helping domestic and international consumer brands expand their reach in the US market. With decades of experience and billions in generated revenue, we offer a comprehensive solution for manufacturers looking to enter or grow in America\'s consumer market.\r\n\r\nOur services include:\r\n* Distribution to major retailers (C-Stores, Food/Drug/Mass, Home Centers, Online)\r\n* FDA/Regulatory guidance\r\n* Sales and marketing support (TV, Public Relations Campaigns)\r\n* Warehousing and logistics\r\n\r\nWe pride ourselves on our turnkey approach and ability to quickly bring products to market. Our team\'s expertise and established relationships with national and regional retail chains give your brand a competitive edge.\r\n\r\nTo discuss how we can help your brand succeed in the US market, please contact us or schedule a call at https://calendly.com/stevecullen-nutricompanyinc/15-minute-call-cpi \r\n\r\nBest regards,\r\nSteve Cullen\r\nConsumer Products International\r\n\r\n');
