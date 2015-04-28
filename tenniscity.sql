USE tenniscity;

CREATE TABLE `personalise` (
  `framecolour` varchar(10) NOT NULL,
  `bumpercolour` varchar(10) NOT NULL,
  `customtext` varchar(20) NOT NULL,
  `comment` varchar(150) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;
-- --------------------------------------------------------

--
-- Table structure for table `tblAccessories`
--

CREATE TABLE `tblAccessories` (
  `pname` varchar(20) NOT NULL DEFAULT '',
  `image` varchar(30) DEFAULT NULL,
  `description` varchar(20) DEFAULT NULL,
  `price` float DEFAULT NULL,
  PRIMARY KEY (`pname`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tblAccessories`
--

INSERT INTO `tblAccessories` (`pname`, `image`, `description`, `price`) VALUES
('Ruffle Bag', 'images/ruffleBag.png', 'rwebtbrefsd', 10),
('TennisBall', 'images/tennisBall.png', 'gergtretg', 5);

-- --------------------------------------------------------

--
-- Table structure for table `tblCustomer`
--

CREATE TABLE `tblCustomer` (
  `fname` varchar(20) DEFAULT NULL,
  `lname` varchar(20) DEFAULT NULL,
  `email` varchar(255) NOT NULL DEFAULT '',
  `password` varchar(42) DEFAULT NULL,
  `housenumber` int(4) NOT NULL,
  `streetname` varchar(20) NOT NULL,
  `city` varchar(20) NOT NULL,
  `postcode` varchar(10) NOT NULL,
  PRIMARY KEY (`email`)
)

--
-- Dumping data for table `tblCustomer`
--

INSERT INTO `tblCustomer` (`fname`, `lname`, `email`, `password`, `housenumber`, `streetname`, `city`, `postcode`) VALUES
('Bob', 'Bobby', 'bob@gmail.com', '2acba7f51acfd4fd5102ad090fc612ee', 12, 'City Road', 'London', 'EC1V 0HB');

-- --------------------------------------------------------

--
-- Table structure for table `tblOrder`
--

CREATE TABLE `tblOrder` (
  `orderNo` smallint(6) NOT NULL AUTO_INCREMENT,
  `email` varchar(255) DEFAULT NULL,
  `pname` varchar(20) DEFAULT NULL,
  `qty` smallint(6) DEFAULT NULL,
  PRIMARY KEY (`orderNo`),
  KEY `email` (`email`),
  KEY `pname` (`pname`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1 AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- Table structure for table `tblProduct`
--

CREATE TABLE `tblProduct` (
  `pname` varchar(20) NOT NULL DEFAULT '',
  `image` varchar(30) DEFAULT NULL,
  `description` varchar(200) NOT NULL,
  `price` float NOT NULL,
  PRIMARY KEY (`pname`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tblProduct`
--

INSERT INTO `tblProduct` (`pname`, `image`, `description`, `price`) VALUES
('TC Blade', 'images/racket2.png', 'TC Blade is perfect for intermediate tennis players. For those wanting a racquet closer to professional-grade but unwilling to pay a premium.\nTC Blade features a narrower frame to TC Zero, to provide', 120),
('TC Pro', 'images/racket3.png', 'TC Pro: the world’s most advanced tennis racquet. \r\nTC Pro is our elite tennis racquet, designed to be the best. For those who will not settle for second-best, only TC Pro will satisfy their requireme', 150),
('TC Zero', 'images/racket1.png', 'Ideal for those who are learning how to play tennis, the TC Zero is our racquet designed specifically for beginners. \r\nTC Zero features a widened frame, which will provide a more forgiving tennis expe', 100);

--
