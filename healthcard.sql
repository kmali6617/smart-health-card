-- phpMyAdmin SQL Dump
-- version 3.3.9
-- http://www.phpmyadmin.net
--
-- Host: localhost
-- Generation Time: Mar 26, 2020 at 08:03 AM
-- Server version: 5.5.8
-- PHP Version: 5.3.5

--
-- healthcard
--
SET SQL_MODE="NO_AUTO_VALUE_ON_ZERO";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `ssip`
--

-- --------------------------------------------------------

--
-- Table structure for table `admitpatient`
--

CREATE TABLE IF NOT EXISTS `admitpatient` (
  `patientid` int(10) NOT NULL,
  `hospitalid` int(11) NOT NULL,
  `doctorid` int(11) NOT NULL,
  `dateofadmit` date NOT NULL,
  `roomno` varchar(20) NOT NULL,
  `wardno` int(10) NOT NULL,
  `hdurequire` text NOT NULL,
  `casualty` text NOT NULL,
  `Fees` int(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `admitpatient`
--

INSERT INTO `admitpatient` (`patientid`, `hospitalid`, `doctorid`, `dateofadmit`, `roomno`, `wardno`, `hdurequire`, `casualty`, `Fees`) VALUES
(123, 456, 789, '2020-02-01', '15', 243, 'Male', 'jhgf ', 500);

-- --------------------------------------------------------

--
-- Table structure for table `allergy`
--

CREATE TABLE IF NOT EXISTS `allergy` (
  `reg_id` bigint(20) NOT NULL,
  `AllergyName` varchar(20) NOT NULL,
  `Adate` date NOT NULL,
  `Symptoms` varchar(20) NOT NULL,
  `Medication` varchar(20) NOT NULL,
  `Frequency` float NOT NULL,
  `message` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `allergy`
--

INSERT INTO `allergy` (`reg_id`, `AllergyName`, `Adate`, `Symptoms`, `Medication`, `Frequency`, `message`) VALUES
(7897999911, 'sldjjfnskdf ', '2020-03-27', 'ksmsmfksdf', 'smfm  ksdf', 8777, 'kmsnfkfsfka'),
(2222222, 'krunal', '2020-03-24', 'adkads ', 'snksa f', 22, 'dbakds aksd akssd ak'),
(33333, 'krunal', '2020-03-25', 'adkads ', 'snksa f', 22, 'dbakds aksd akssd ak'),
(152767030268, 'corona', '2020-03-05', 'oasndads', 'pera', 2, 'dnnassd assd  aisdnaksksm daksksdaik');

-- --------------------------------------------------------

--
-- Table structure for table `brand`
--

CREATE TABLE IF NOT EXISTS `brand` (
  `brand_id` int(10) NOT NULL AUTO_INCREMENT,
  `brand_name` varchar(20) NOT NULL,
  PRIMARY KEY (`brand_id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=5 ;

--
-- Dumping data for table `brand`
--

INSERT INTO `brand` (`brand_id`, `brand_name`) VALUES
(1, 'Samsung'),
(2, 'Sony'),
(3, 'Motorola'),
(4, 'Xiaomi');

-- --------------------------------------------------------

--
-- Table structure for table `chart`
--

CREATE TABLE IF NOT EXISTS `chart` (
  `student` varchar(20) NOT NULL,
  `marks` int(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `chart`
--

INSERT INTO `chart` (`student`, `marks`) VALUES
('krunal', 40),
('sp', 30),
('parth', 50),
('shrey', 45);

-- --------------------------------------------------------

--
-- Table structure for table `chartdata`
--

CREATE TABLE IF NOT EXISTS `chartdata` (
  `id` int(5) NOT NULL AUTO_INCREMENT,
  `disease` varchar(11) NOT NULL,
  `year1` int(11) NOT NULL,
  `city` varchar(11) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=13 ;

--
-- Dumping data for table `chartdata`
--

INSERT INTO `chartdata` (`id`, `disease`, `year1`, `city`) VALUES
(1, 'cancer', 2020, 'anand'),
(2, 'liver', 2019, 'bhavnagar'),
(5, 'cancer', 2020, 'anand'),
(10, 'liver', 2020, 'anand'),
(12, 'cancer', 2020, 'anand');

-- --------------------------------------------------------

--
-- Table structure for table `contactus`
--

CREATE TABLE IF NOT EXISTS `contactus` (
  `FullName` text NOT NULL,
  `Email` varchar(15) NOT NULL,
  `Phone` int(10) NOT NULL,
  `Message` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `contactus`
--

INSERT INTO `contactus` (`FullName`, `Email`, `Phone`, `Message`) VALUES
('', 'parthsabhadiya5', 2147483647, 'wedrfg'),
('', 'parthsabhadiya5', 2147483647, 'wedrfg'),
('', 'parthsabhadiya5', 2147483647, 'wedrfg'),
('', 'parthsabhadiya5', 2147483647, 'wedrfg'),
('12', 'hs@gmail.com', 23, 'we');

-- --------------------------------------------------------

--
-- Table structure for table `disease`
--

CREATE TABLE IF NOT EXISTS `disease` (
  `date` int(11) NOT NULL,
  `time` time NOT NULL,
  `docid` varchar(20) NOT NULL,
  `name` varchar(30) NOT NULL,
  `height` double NOT NULL,
  `weight` double NOT NULL,
  `diseasetype` varchar(30) NOT NULL,
  `diseasedescription` varchar(100) NOT NULL,
  `reporttype` varchar(20) NOT NULL,
  `reportname` varchar(30) NOT NULL,
  `bloodpress` varchar(30) NOT NULL,
  `Diabetes` varchar(10) NOT NULL,
  `myfile` longblob NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `disease`
--

INSERT INTO `disease` (`date`, `time`, `docid`, `name`, `height`, `weight`, `diseasetype`, `diseasedescription`, `reporttype`, `reportname`, `bloodpress`, `Diabetes`, `myfile`) VALUES
(12, '02:00:00', 'asd', 'abc', 5.2, 22, 'kjfad', 'skfsdf', 'fskdf', 'asdad', '180', 'no', '');

-- --------------------------------------------------------

--
-- Table structure for table `doctorreg`
--

CREATE TABLE IF NOT EXISTS `doctorreg` (
  `doctorid` bigint(11) NOT NULL,
  `regdate` date NOT NULL,
  `dfirstname` varchar(20) NOT NULL,
  `dlastname` varchar(20) NOT NULL,
  `password` varchar(10) NOT NULL,
  `hname` varchar(30) NOT NULL,
  `address` varchar(30) NOT NULL,
  `gender` varchar(15) NOT NULL,
  `birthdate` date NOT NULL,
  `phoneno` bigint(10) NOT NULL,
  `expertise` text NOT NULL,
  `licenseno` int(20) NOT NULL,
  `city` varchar(20) NOT NULL,
  `country` varchar(20) NOT NULL,
  `demail` varchar(20) DEFAULT NULL,
  `state` varchar(20) NOT NULL,
  PRIMARY KEY (`doctorid`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `doctorreg`
--

INSERT INTO `doctorreg` (`doctorid`, `regdate`, `dfirstname`, `dlastname`, `password`, `hname`, `address`, `gender`, `birthdate`, `phoneno`, `expertise`, `licenseno`, `city`, `country`, `demail`, `state`) VALUES
(0, '2020-03-03', 'krunal', 'barad', '123', 'cims', 'mota bazar', 'male', '2020-03-02', 7897894567, 'Neurologist ', 456789, 'Anand', 'India', 'kmali6617@gmail.com', 'Gujarat'),
(45, '0000-00-00', 'CHIRAG', 'DIYORA', '9873', '', 'ADIT BOYS HOSTEL', 'FEMALE', '2020-02-29', 9662613635, 'allergy ', 2589, 'anand', 'india', NULL, 'gujarat'),
(1223, '2020-03-02', 'cims', 'soni', '123123', 'cims', 'mota bazar', 'on', '2020-03-11', 7897894567, 'Neurologist ', 0, '123123123', 'Anand', 'Gujarat', 'India'),
(11117, '2020-03-26', 'krunal', 'barad', '123456', 'sterling', 'hill drive', 'on', '2020-03-03', 9377736022, '5 year ', 0, '111145', 'bhavnagar', 'banglor', 'us'),
(111112, '2020-03-26', 'krunal', 'barad', '123456', 'sterling', 'hill drive', 'on', '2016-11-01', 9377730662, 'Neurologist ', 456789, 'bhavnagar', 'India', 'kmali6617@gmail.com', 'Gujarat'),
(123123, '2020-03-06', 'qqqqqqq', 'eeee', '1111', 'cims', 'sdadaweq', 'male', '2020-03-06', 7897894567, 'Neurologist ', 123123123, 'Anand', 'India', 'kmali6617@gmail.com', 'Gujarat'),
(7987979, '2020-03-12', 'abc', 'lll', '798', 'cims', 'mota bazar', 'on', '2020-03-05', 745698569, 'eqweqwe ', 56478, 'Anand', 'India', 'abc111@gmail.com', 'Gujarat'),
(12333333, '2020-03-02', 'xyz', 'pqr', '456132', 'aaa', 'knqkweqke ', 'on', '2020-03-11', 7897894567, 'Neurologist ', 212312312, 'Anand', 'India', 'kmali6617@gmail.com', 'Gujarat');

-- --------------------------------------------------------

--
-- Table structure for table `enquiry`
--

CREATE TABLE IF NOT EXISTS `enquiry` (
  `id` int(15) NOT NULL AUTO_INCREMENT,
  `fname` varchar(15) NOT NULL,
  `lname` varchar(15) NOT NULL,
  `email` varchar(25) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=2 ;

--
-- Dumping data for table `enquiry`
--

INSERT INTO `enquiry` (`id`, `fname`, `lname`, `email`) VALUES
(1, 'adasd', 'kfksf', 'asdkads@gmail.com');

-- --------------------------------------------------------

--
-- Table structure for table `hospitalreg`
--

CREATE TABLE IF NOT EXISTS `hospitalreg` (
  `HospitalId` bigint(12) NOT NULL,
  `HospitalName` varchar(20) NOT NULL,
  `Password` varchar(20) NOT NULL,
  `EmailId` varchar(20) NOT NULL,
  `Address` varchar(20) NOT NULL,
  `CityName` varchar(10) NOT NULL,
  `StateName` varchar(10) NOT NULL,
  `CountryName` varchar(10) NOT NULL,
  `ContactNo` varchar(12) NOT NULL,
  `HospitalCategory` varchar(12) NOT NULL,
  `Website` varchar(20) NOT NULL,
  `LicenseNo` varchar(20) NOT NULL,
  `LicensePdf` longblob NOT NULL,
  PRIMARY KEY (`HospitalId`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `hospitalreg`
--


-- --------------------------------------------------------

--
-- Table structure for table `medicalhistory`
--

CREATE TABLE IF NOT EXISTS `medicalhistory` (
  `BloodPressure` int(10) NOT NULL,
  `BloodSuger` int(10) NOT NULL,
  `BodyTemprature` int(10) NOT NULL,
  `Weight` int(10) NOT NULL,
  `Prescription` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `medicalhistory`
--

INSERT INTO `medicalhistory` (`BloodPressure`, `BloodSuger`, `BodyTemprature`, `Weight`, `Prescription`) VALUES
(0, 0, 0, 0, ''),
(0, 0, 0, 10, ''),
(0, 0, 0, 0, ''),
(0, 0, 0, 8, ''),
(2, 6, 7, 7, 'vhj'),
(0, 0, 0, 43, ''),
(0, 0, 0, 43, ''),
(56, 89, 123, 98, 'hello');

-- --------------------------------------------------------

--
-- Table structure for table `patientbill`
--

CREATE TABLE IF NOT EXISTS `patientbill` (
  `patientid` bigint(20) NOT NULL DEFAULT '0',
  `bill_no` bigint(20) NOT NULL,
  `disease_type` varchar(25) NOT NULL,
  `medicine_charge` bigint(25) NOT NULL,
  `lab_charge` bigint(25) NOT NULL,
  `doctor_fee` bigint(50) NOT NULL,
  `nursing_charge` bigint(30) NOT NULL,
  `room_charge` bigint(30) NOT NULL,
  `operation_charge` bigint(30) NOT NULL,
  `advance_payment` bigint(30) NOT NULL,
  PRIMARY KEY (`patientid`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `patientbill`
--

INSERT INTO `patientbill` (`patientid`, `bill_no`, `disease_type`, `medicine_charge`, `lab_charge`, `doctor_fee`, `nursing_charge`, `room_charge`, `operation_charge`, `advance_payment`) VALUES
(0, 787, 'fever', 500, 20000, 500, 10000, 2500, 2000, 1000);

-- --------------------------------------------------------

--
-- Table structure for table `patientreg`
--

CREATE TABLE IF NOT EXISTS `patientreg` (
  `reg_id` bigint(15) NOT NULL DEFAULT '0',
  `patientid` bigint(15) NOT NULL,
  `pfname` varchar(12) NOT NULL,
  `plname` varchar(12) NOT NULL,
  `password` varchar(12) NOT NULL,
  `address` varchar(100) NOT NULL,
  `country` varchar(15) NOT NULL,
  `city` varchar(15) NOT NULL,
  `phone` bigint(12) NOT NULL,
  `email` varchar(20) NOT NULL,
  `bloodgroup` varchar(15) NOT NULL,
  `gender` varchar(10) NOT NULL,
  `birthdate` date NOT NULL,
  `emergency_name` varchar(20) NOT NULL,
  `emergency_no` bigint(15) NOT NULL,
  `allergy` varchar(15) NOT NULL,
  PRIMARY KEY (`reg_id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `patientreg`
--

INSERT INTO `patientreg` (`reg_id`, `patientid`, `pfname`, `plname`, `password`, `address`, `country`, `city`, `phone`, `email`, `bloodgroup`, `gender`, `birthdate`, `emergency_name`, `emergency_no`, `allergy`) VALUES
(152767030268, 93939393, 'kruunal', 'barad', '456123', 'asld asdlas dalslsd alsl dalksksdnalssd a/lds a ', 'India', 'Bhavnagar', 938887889, 'kadasda@gmail.com', 'b_1', 'on', '2020-03-03', 'adas dasd a', 79879879, 'no'),
(291176148931, 12312313, 'krunal', 'barad', '123456', ' aiszs dksd askda sdk as,sdm s', 'India', 'anand', 1235647899, 'kmali6617@gmail.com', 'b_1', 'on', '2020-03-02', '8200108262', 79879879, 'no');

-- --------------------------------------------------------

--
-- Table structure for table `pharmacyreg`
--

CREATE TABLE IF NOT EXISTS `pharmacyreg` (
  `ShopOwner` varchar(20) NOT NULL,
  `Password` varchar(10) NOT NULL,
  `ShopName` varchar(20) NOT NULL,
  `Address` varchar(50) NOT NULL,
  `ContactNo` int(10) NOT NULL,
  `State` text NOT NULL,
  `Country` text NOT NULL,
  `City` text NOT NULL,
  `CertificateLicense` varchar(20) NOT NULL,
  `ShopRegistrationNumber` int(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `pharmacyreg`
--

INSERT INTO `pharmacyreg` (`ShopOwner`, `Password`, `ShopName`, `Address`, `ContactNo`, `State`, `Country`, `City`, `CertificateLicense`, `ShopRegistrationNumber`) VALUES
('dsg', '55', 'swd', 'efrg', 234, 'fd', 'dfx', 'sdf ', 'aes', 123);

-- --------------------------------------------------------

--
-- Table structure for table `product`
--

CREATE TABLE IF NOT EXISTS `product` (
  `product_id` int(10) NOT NULL AUTO_INCREMENT,
  `product_name` varchar(20) NOT NULL,
  `brand_id` int(10) NOT NULL,
  PRIMARY KEY (`product_id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=7 ;

--
-- Dumping data for table `product`
--

INSERT INTO `product` (`product_id`, `product_name`, `brand_id`) VALUES
(1, 'samsung glax A9', 1),
(2, 'samsung glax s7', 1),
(3, 'samsung glax sg edgo', 1),
(4, 'xperia M5 dual', 2),
(5, 'mi note 7', 1),
(6, 'poco f1', 2);

-- --------------------------------------------------------

--
-- Table structure for table `worker`
--

CREATE TABLE IF NOT EXISTS `worker` (
  `Cs` text NOT NULL,
  `Cn` text NOT NULL,
  `degree` text NOT NULL,
  `Seat` int(20) NOT NULL,
  `Contact` int(20) NOT NULL,
  `Passeddate` date NOT NULL,
  `Fullname` text NOT NULL,
  `Bithdate` date NOT NULL,
  `address` varchar(20) NOT NULL,
  `Email` varchar(20) NOT NULL,
  `Adhar` int(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `worker`
--

INSERT INTO `worker` (`Cs`, `Cn`, `degree`, `Seat`, `Contact`, `Passeddate`, `Fullname`, `Bithdate`, `address`, `Email`, `Adhar`) VALUES
('sd', 'sadf', 'on', 123, 2020, '2020-02-07', 'sdvf', '2020-02-07', 'dfv', 'dsfs@gmail.com', 0);
