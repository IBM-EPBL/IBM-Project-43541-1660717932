
CREATE TABLE IF NOT EXISTS `tabapplied` (
  `entryid` int(11) NOT NULL,
  `jobid` int(11) NOT NULL,
  `username` varchar(50) NOT NULL,
  `applieddate` varchar(20) NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `tabcandidates`
--

CREATE TABLE IF NOT EXISTS `tabcandidates` (
  `fullname` varchar(50) NOT NULL,
  `gender` varchar(50) NOT NULL,
  `mobile` varchar(50) NOT NULL,
  `username` varchar(50) NOT NULL,
  `password` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tabcandidates`
--

INSERT INTO `tabcandidates` (`fullname`, `gender`, `mobile`, `username`, `password`) VALUES
('Ravi', 'Male', '9991231234', 'ravi', 'abcd'),
('Sathish', 'Male', '9991122334', 'Satz', '112233');

-- --------------------------------------------------------

--
-- Table structure for table `tabexperience`
--

CREATE TABLE IF NOT EXISTS `tabexperience` (
  `entryid` int(11) NOT NULL,
  `username` varchar(50) NOT NULL,
  `companyname` varchar(50) NOT NULL,
  `designation` varchar(50) NOT NULL,
  `location` varchar(50) NOT NULL,
  `annualcost` int(11) NOT NULL,
  `fromdate` varchar(20) NOT NULL,
  `todate` varchar(20) NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tabexperience`
--

INSERT INTO `tabexperience` (`entryid`, `username`, `companyname`, `designation`, `location`, `annualcost`, `fromdate`, `todate`) VALUES
(1, 'ravi', 'Wipro', 'Desktop Support', 'Tirunelveli', 18000, '2018-12-30', '2020-02-29');

-- --------------------------------------------------------

--
-- Table structure for table `tabjobs`
--

CREATE TABLE IF NOT EXISTS `tabjobs` (
  `jobid` int(11) NOT NULL,
  `jobname` varchar(50) NOT NULL,
  `city` varchar(50) NOT NULL,
  `jobtype` varchar(50) NOT NULL,
  `candidates` int(11) NOT NULL,
  `qualification` varchar(50) NOT NULL,
  `gender` varchar(10) NOT NULL,
  `contactperson` varchar(50) NOT NULL,
  `contactmobile` varchar(10) NOT NULL,
  `contactemail` varchar(50) NOT NULL,
  `status` varchar(50) NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=5 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tabjobs`
--

INSERT INTO `tabjobs` (`jobid`, `jobname`, `city`, `jobtype`, `candidates`, `qualification`, `gender`, `contactperson`, `contactmobile`, `contactemail`, `status`) VALUES
(4, 'Desktop Support Executive', 'Chennai', 'Permanent', 50, 'Bachelor Degree', 'Male', 'Ajey', '9991234567', 'ajey@gmail.com', 'active');

-- --------------------------------------------------------

--
-- Table structure for table `tabpersonal`
--

CREATE TABLE IF NOT EXISTS `tabpersonal` (
  `username` varchar(50) NOT NULL,
  `fullname` varchar(50) NOT NULL,
  `addressline1` varchar(50) NOT NULL,
  `addressline2` varchar(50) NOT NULL,
  `addressline3` varchar(50) NOT NULL,
  `city` varchar(50) NOT NULL,
  `state` varchar(50) NOT NULL,
  `pin` int(11) NOT NULL,
  `phone` varchar(10) NOT NULL,
  `email` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tabpersonal`
--

INSERT INTO `tabpersonal` (`username`, `fullname`, `addressline1`, `addressline2`, `addressline3`, `city`, `state`, `pin`, `phone`, `email`) VALUES
('ravi', 'Ravi Raj', '123, 2nd Street', 'Trivandrum Road', 'Palayamkottai', 'Tirunelveli', 'Tamilnadu', 627002, '9994618909', 'ravi@gmail.com');

-- --------------------------------------------------------

--
-- Table structure for table `tabqualification`
--

CREATE TABLE IF NOT EXISTS `tabqualification` (
  `entryid` int(11) NOT NULL,
  `username` varchar(50) NOT NULL,
  `coursetype` varchar(20) NOT NULL,
  `coursename` varchar(50) NOT NULL,
  `institution` varchar(50) NOT NULL,
  `university` varchar(50) NOT NULL,
  `location` varchar(50) NOT NULL,
  `passingyear` int(11) NOT NULL,
  `percentage` int(11) NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=3 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tabqualification`
--

INSERT INTO `tabqualification` (`entryid`, `username`, `coursetype`, `coursename`, `institution`, `university`, `location`, `passingyear`, `percentage`) VALUES
(1, 'ravi', 'Bachelor Degree', 'B.Sc Computer Science', 'Xaviers College', 'Autonomous', 'Tirunelveli', 2018, 78),
(2, 'ravi', 'Post Graduate Degree', 'Msc Computer Science', 'Sadakathullah Appa College', 'Autonomous', 'Tirunelveli', 2019, 80);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `tabapplied`
--
ALTER TABLE `tabapplied`
  ADD PRIMARY KEY (`entryid`);

--
-- Indexes for table `tabcandidates`
--
ALTER TABLE `tabcandidates`
  ADD PRIMARY KEY (`username`);

--
-- Indexes for table `tabexperience`
--
ALTER TABLE `tabexperience`
  ADD PRIMARY KEY (`entryid`);

--
-- Indexes for table `tabjobs`
--
ALTER TABLE `tabjobs`
  ADD PRIMARY KEY (`jobid`);

--
-- Indexes for table `tabpersonal`
--
ALTER TABLE `tabpersonal`
  ADD PRIMARY KEY (`username`);

--
-- Indexes for table `tabqualification`
--
ALTER TABLE `tabqualification`
  ADD PRIMARY KEY (`entryid`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `tabapplied`
--
ALTER TABLE `tabapplied`
  MODIFY `entryid` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=2;
--
-- AUTO_INCREMENT for table `tabexperience`
--
ALTER TABLE `tabexperience`
  MODIFY `entryid` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=2;
--
-- AUTO_INCREMENT for table `tabjobs`
--
ALTER TABLE `tabjobs`
  MODIFY `jobid` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=5;
--
-- AUTO_INCREMENT for table `tabqualification`
--
ALTER TABLE `tabqualification`
  MODIFY `entryid` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=3;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
