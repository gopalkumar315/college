-- phpMyAdmin SQL Dump
-- version 4.1.12
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: Jan 08, 2015 at 07:39 PM
-- Server version: 5.6.16
-- PHP Version: 5.5.11

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `college`
--

-- --------------------------------------------------------

--
-- Table structure for table `about`
--

CREATE TABLE IF NOT EXISTS `about` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `description` text,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=2 ;

--
-- Dumping data for table `about`
--

INSERT INTO `about` (`id`, `description`) VALUES
(1, '<p><strong>Ramgarhia Institute of Engineering and Technology (RIET), Phagwara is located in the heart of Doaba region of Punjab, on the main Railway line. The Institute is situated at a distance of about 1 Km. both from the Railway Station and Bus Stand. It spreads in sprawling 30 acres of lush green environment.</strong></p><p>\r\n	The town boasts of a substantial number of NRI families and it is a major industrial township of industries such as Oil Engine, Motor Parts, Lathe Chucks, Textiles, Starch and Sugar Mills, etc.</p><p>\r\n	Ramgarhia Institute of Engineering &amp; Technology (RIET), Phagwara, a self-financed and privately managed Institute, is affiliated to Punjab Technical University, approved by State Govt. and AICTE, New Delhi.</p><p>he Managing Committee of RIET mainly consists of members of Ramgarhia Educational Council, Satnampura, Phagwara (Pb.), NRI''s and various other representatives of the Punjab State and the Centre Government.</p><p>\r\n	Ramgarhia Educational Council (REC), Phagwara is a registered body . It is managing more than a dozen schools and colleges since 1929 under the able guidance of Late President S. Mohan Singh Hadiabadi. All the institutions have made a spectacular progress under his dynamic leadership.</p><p>\r\n	He was succeeded by Late S. Mela Singh Bhogal in 1964 who continued his progressive works in various capacities. He was a pioneer in the starting of various women educational institutes in Phagwara.</p><p>\r\n	Late Sh. Pritam Singh Bhogal, become President cum chairman of Ramgarhia Educational Council in 1977. The emerging Ramgarhia Institute of Engineering &amp; Technology is an ample proof of the success of his efficient handling.</p><p>\r\n	S. Bharpur Singh Bhogal, the present President cum Chairman of Ramgarhia Educational Council took over in 2006 and till date, is running the Ramgarhia institutions in most effective and efficient manner.</p><p>\r\n	This Management is proud of the visits by the most distinguished personalities of the country .The most memorable among them is of Late Pt. Jawahar Lal Nehru, our first Honourable Prime Minister of India. It is pertinent to mention here that Honourable President of India Late S.Giani Zail Singh had also been the member of Ramgarhia Educational Council, Phagwara.</p><h1></h1>');

-- --------------------------------------------------------

--
-- Table structure for table `admin`
--

CREATE TABLE IF NOT EXISTS `admin` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `username` varchar(255) NOT NULL,
  `password` varchar(255) NOT NULL,
  `temp_password` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `photo` varchar(255) NOT NULL,
  `name` varchar(255) NOT NULL,
  `reset_code` varchar(255) NOT NULL,
  `dob` date NOT NULL,
  `position` varchar(255) NOT NULL,
  `mobile` int(11) NOT NULL,
  `Address` varchar(255) NOT NULL,
  `remember_token` varchar(255) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=2 ;

--
-- Dumping data for table `admin`
--

INSERT INTO `admin` (`id`, `username`, `password`, `temp_password`, `email`, `photo`, `name`, `reset_code`, `dob`, `position`, `mobile`, `Address`, `remember_token`) VALUES
(1, 'admin', '$2y$10$cdU1WVB1SC1qdeoUFzcubep7Cw48v3z2xZlbczlJKhkyA/C5E47wW', '', 'gopalkumar315@gmail.com', '', '', '', '0000-00-00', '', 0, '', '5P3vvtJ20RTHp1hfclNmedaBI81Yj4pp7IBDLOUtHbbW0KgFG8lADNr3xtBs');

-- --------------------------------------------------------

--
-- Table structure for table `album`
--

CREATE TABLE IF NOT EXISTS `album` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `name` varchar(255) DEFAULT NULL,
  `date` date DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=11 ;

--
-- Dumping data for table `album`
--

INSERT INTO `album` (`id`, `name`, `date`) VALUES
(9, 'New Year 2015', '2014-12-15'),
(10, 'Winters Vocations', '2014-12-15');

-- --------------------------------------------------------

--
-- Table structure for table `alumni`
--

CREATE TABLE IF NOT EXISTS `alumni` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `u_id` varchar(255) NOT NULL,
  `about` text NOT NULL,
  `skill` text NOT NULL,
  `first_job` varchar(255) NOT NULL,
  `second_job` varchar(255) NOT NULL,
  `third_job` varchar(255) NOT NULL,
  `preset_job` varchar(255) NOT NULL,
  `job_experience` text NOT NULL,
  `file` varchar(255) NOT NULL,
  `diploma` text NOT NULL,
  `diploma_col` varchar(255) NOT NULL,
  `diploma_marks` varchar(30) NOT NULL,
  `btech_marks` varchar(30) NOT NULL,
  `btech_course` varchar(255) NOT NULL,
  `session` int(11) NOT NULL,
  `passout` int(11) NOT NULL,
  `status` int(11) NOT NULL,
  `other_qualification` text NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=4 ;

--
-- Dumping data for table `alumni`
--

INSERT INTO `alumni` (`id`, `u_id`, `about`, `skill`, `first_job`, `second_job`, `third_job`, `preset_job`, `job_experience`, `file`, `diploma`, `diploma_col`, `diploma_marks`, `btech_marks`, `btech_course`, `session`, `passout`, `status`, `other_qualification`) VALUES
(2, 'XdMrhiSXNKlWka9', 'ssds sdsd ssds sdsdssds sdsdssds sdsdssds sdsdssds sdsdssds sdsdssds sdsdssds sdsdssds sdsdssds sdsdssds sdsdssds sdsdssds sdsdssds sdsdssds sdsdssds sdsdssds sdsdssds sdsd ssds sdsdssds sdsdssds sdsdssds sdsdssds sdsdssds sdsdssds sdsdssds sdsdssds sdsdssds sdsdssds sdsdssds sdsdssds sdsdssds sdsdssds sdsdssds sdsdssds sdsdssds sdsdssds sdsdssds sdsdssds sdsdssds sdsd', 'skiills', '', '', '', 'preset', 'expericexe', 'y8715VxKbv.doc', 'no diloma', 'ramgarhia col', '80%', '90%', 'Computer Science Engineering', 0, 0, 1, 'no any'),
(3, 'zV8ePp724s5Sdud', 'fg', 'fg', ' ddddddddd ', 'sssssss', ' ttttttt', 'fdgfd', 'gfd', '', 'dddddddddddddd', 'dddddd', 'fg', '78%', 'Computer Science Engineering', 2014, 2016, 1, 'nthing');

-- --------------------------------------------------------

--
-- Table structure for table `assignment`
--

CREATE TABLE IF NOT EXISTS `assignment` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `course` varchar(255) DEFAULT NULL,
  `year` int(11) DEFAULT NULL,
  `semester` varchar(255) DEFAULT NULL,
  `subject` varchar(255) NOT NULL,
  `assignment_no` varchar(255) DEFAULT NULL,
  `file` varchar(255) DEFAULT NULL,
  `submission` date DEFAULT NULL,
  `signature` varchar(255) NOT NULL,
  `updated` varchar(255) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=9 ;

--
-- Dumping data for table `assignment`
--

INSERT INTO `assignment` (`id`, `course`, `year`, `semester`, `subject`, `assignment_no`, `file`, `submission`, `signature`, `updated`) VALUES
(1, 'Computer Science Engineering', 2014, 'First', 'CN2', 'First', 'Computer Science Engineering_2014_First_assignment_First.pdf', '2014-08-10', 'manhoan singh', '2014-10-05'),
(3, 'Computer Science Engineering', 2014, 'First', 'CN2', 'Second', 'Computer Science Engineering_2014_First_assignment_Second.pdf', '2014-10-13', 'sharma sir', '2014-10-05'),
(5, 'Computer Science Engineering', 2014, 'First', 'RBDMS', 'First', 'Computer Science Engineering_2014_First_assignment_First.pdf', '0001-01-01', 'rdbms sir', '2014-10-05'),
(6, 'Computer Science Engineering', 2014, 'First', 'RBDMS', 'Second', 'Computer Science Engineering_2014_First_assignment_Second.pdf', '0001-01-01', 'rdbms sir', '2014-10-05'),
(7, 'Computer Science Engineering', 2014, 'First', 'CN2', 'Third', 'Computer Science Engineering_2014_First_assignment_Third.pdf', '0001-01-01', 'sharma sir', '2014-10-05'),
(8, 'Computer Science Engineering', 2012, 'Fifth', 'RBDMS', 'First', 'Computer Science Engineering_2012_Fifth_assignment_First.pdf', '0001-01-01', 'rdbms sir', '2014-10-05');

-- --------------------------------------------------------

--
-- Table structure for table `course`
--

CREATE TABLE IF NOT EXISTS `course` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `course` varchar(255) DEFAULT NULL,
  `parent` int(255) DEFAULT NULL,
  `description` text,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=23 ;

--
-- Dumping data for table `course`
--

INSERT INTO `course` (`id`, `course`, `parent`, `description`) VALUES
(1, 'Under Graduate', 0, NULL),
(2, 'Under Post Graduate', 0, '<h1><strong>computer sciencecomputer sciencecomputer sciencecomputer sciencecomputer sciencecomputer sciencecomputer sciencecomputer sciencecomputer sciencecomputer sciencecomputer science</strong></h1>'),
(16, 'Computer Science Engineering', 1, '<p>This is the best trade among all of our college trade in this trade we need computer hhhhhhhhhhhh</p>'),
(17, 'Electronics Engineering ', 1, '<p>Nothing this is best college in the north zone</p>'),
(18, 'Mechanical Engineering', 1, '<p>This is best course in ramgarhia okk how much character has been left</p>'),
(19, 'Electrical Engineering', 1, '<p>This is the electrical enginerring in the best college of punjab</p>'),
(20, 'Civil Engineering', 1, '<p>This is best college in the north zone said by principle by Ramgarhia College of Institude Of engg &amp; technology</p>'),
(21, 'MCA', 2, '<p>this is the mca Course in the Ramgarhia College o Phagwara of the Punjab State etccccccccccccc</p>'),
(22, 'Computer Science Mtech', 2, '<p>Computer Science MtechComputer Science MtechComputer Science MtechComputer Science MtechComputer Science MtechComputer Science MtechComputer Science Mtech</p>');

-- --------------------------------------------------------

--
-- Table structure for table `event`
--

CREATE TABLE IF NOT EXISTS `event` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `title` varchar(255) DEFAULT NULL,
  `description` text,
  `event_date` date DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=89 ;

--
-- Dumping data for table `event`
--

INSERT INTO `event` (`id`, `title`, `description`, `event_date`) VALUES
(88, 'New Year Party', '<p>Nullam eroth dui, conthectetur eu leo ac, dapibuth themper maththa. Maurith ante quam, auctor imperdiet elit id, conthectetur venenatith erat. Maecenath laoreet arcu erat, vitae venenatith enim eleifend et. Donec auctor turpith magna. thuthpendiththe eu eleifend etht. Morbi ut magna vel turpith thcelerithque mattith non quith dolor.</p>', '2014-12-15');

-- --------------------------------------------------------

--
-- Table structure for table `facility`
--

CREATE TABLE IF NOT EXISTS `facility` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `description` text,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=2 ;

--
-- Dumping data for table `facility`
--

INSERT INTO `facility` (`id`, `description`) VALUES
(1, '<p><img src="http://localhost/college/public/images/TAOeVx7geM8A3DDiMxW1.png"></p>');

-- --------------------------------------------------------

--
-- Table structure for table `notice`
--

CREATE TABLE IF NOT EXISTS `notice` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `title` varchar(255) DEFAULT NULL,
  `description` text,
  `notice_date` date DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=70 ;

--
-- Dumping data for table `notice`
--

INSERT INTO `notice` (`id`, `title`, `description`, `notice_date`) VALUES
(69, 'Summer Vocations', '<p>Pellentethque et venenatith metuth. thuthpendiththe aliquet vel ipthum a conthequat. Duith digniththim iaculith etht ac conthequat.</p>', '2014-12-15');

-- --------------------------------------------------------

--
-- Table structure for table `photo`
--

CREATE TABLE IF NOT EXISTS `photo` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `name` varchar(255) DEFAULT NULL,
  `album_id` varchar(255) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=33 ;

--
-- Dumping data for table `photo`
--

INSERT INTO `photo` (`id`, `name`, `album_id`) VALUES
(30, 'Zu6k7EPNy86QVfAs8kFf.jpg', '10'),
(31, 'cDdPmJfd4JNxLOCXnwhS.jpg', '10'),
(32, '02nUvJGwO30JSGvDA8rK.jpg', '10');

-- --------------------------------------------------------

--
-- Table structure for table `profile`
--

CREATE TABLE IF NOT EXISTS `profile` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `username` varchar(255) NOT NULL,
  `fname` varchar(255) NOT NULL,
  `lname` varchar(255) NOT NULL,
  `father` varchar(255) NOT NULL,
  `class_roll_no` varchar(255) NOT NULL,
  `board_roll_no` varchar(255) NOT NULL,
  `dob` varchar(10) NOT NULL,
  `mobile` varchar(20) NOT NULL,
  `course` varchar(255) NOT NULL,
  `branch` varchar(255) NOT NULL,
  `session` varchar(255) NOT NULL,
  `u_id` varchar(255) NOT NULL,
  `photo` varchar(255) NOT NULL DEFAULT 'no_img.jpg',
  `country` varchar(255) NOT NULL,
  `state` varchar(255) NOT NULL,
  `city` varchar(255) NOT NULL,
  `belong_state` varchar(255) NOT NULL,
  `residence_address` varchar(255) NOT NULL,
  `current_address` varchar(255) NOT NULL,
  `profile_status` int(11) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=17 ;

--
-- Dumping data for table `profile`
--

INSERT INTO `profile` (`id`, `username`, `fname`, `lname`, `father`, `class_roll_no`, `board_roll_no`, `dob`, `mobile`, `course`, `branch`, `session`, `u_id`, `photo`, `country`, `state`, `city`, `belong_state`, `residence_address`, `current_address`, `profile_status`) VALUES
(15, 'abc@gmail.com', 'abc', 'abc', 'abcc', '72/CSE/2014', '12', '25-11-1993', '1234567890', 'Under Graduate', 'Electronics Engineering ', '2014', 'XdMrhiSXNKlWka9', 'E348W9xTuR.jpg', 'dsf', 'df', 'df', 'df', 'dfs', 'dsfds', 1),
(16, 'gopalkumar315@gmail.com', 'gopal', 'kumar', 'abc', '73/CSE/2012', '123654', '25-11-1993', '1324123456', 'Under Graduate', 'Computer Science Engineering', '2014', 'zV8ePp724s5Sdud', 'mCgQ1wouFy.jpg', 'India', 'Punjab', 'Ludhiana', 'Abc', 'India', 'Pakistan', 1);

-- --------------------------------------------------------

--
-- Table structure for table `staff`
--

CREATE TABLE IF NOT EXISTS `staff` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `course_id` int(11) DEFAULT NULL,
  `description` text,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=9 ;

--
-- Dumping data for table `staff`
--

INSERT INTO `staff` (`id`, `course_id`, `description`) VALUES
(1, 20, '<p>dfdfds</p>'),
(4, 16, '<p><img src="http://localhost/college/public/images/5Fe0GOGq05u21tk9adzy.png" style="width: 183px; background-color: initial;"></p><p>saddddddddddddddddd</p>'),
(5, 17, '<p>About the electrons Engineering stafffff</p>'),
(6, 18, ''),
(7, 21, '<p style="text-align: justify;"><img src="http://localhost/college/public/images/LvvccIZ0dzSO9j6qRQ07.jpg" style="width: 318px; background-color: initial;">&nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp;<img src="http://localhost/college/public/images/LvvccIZ0dzSO9j6qRQ07.jpg" style="width: 318px; background-color: initial;">&nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp;&nbsp;<img src="http://localhost/college/public/images/LvvccIZ0dzSO9j6qRQ07.jpg" style="width: 318px; background-color: initial;"></p><p style="text-align: justify;"></p><p style="text-align: justify;">WHy so serious MCA Staff</p>'),
(8, 22, '<p>Maecenath thodaleth adipithcing fermentum. Quithque thapien ligula, molethtie eu quam in, ultricieth digniththim lorem. Crath mattith puruth metuth, quith ultriceth erat curthuth thed. Aenean thcelerithque eu nulla eget commodo. In curthuth juthto leo, thit amet pulvinar tortor molethtie in. Nulla libero neque, rutrum vitae fermentum vitae, temputh curthuth lacuth. Nunc lorem etht, gravida ac tortor thed, elementum malethuada dui. Praethent pulvinar themper arcu. Aliquam euithmod arcu vel thuthcipit aliquam. Etiam nec leo thed maththa imperdiet conthectetur non ut turpith. Aenean non elit venenatith, vehicula velit in, iaculith maurith. Nunc imperdiet turpith maurith.. undefined.</p>');

-- --------------------------------------------------------

--
-- Table structure for table `subject`
--

CREATE TABLE IF NOT EXISTS `subject` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `course` varchar(255) NOT NULL,
  `course_id` int(11) NOT NULL,
  `year` int(11) NOT NULL,
  `semester` varchar(255) NOT NULL,
  `subject` varchar(255) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=6 ;

--
-- Dumping data for table `subject`
--

INSERT INTO `subject` (`id`, `course`, `course_id`, `year`, `semester`, `subject`) VALUES
(1, 'Computer Science Engineering', 0, 2014, 'Fifth', 'RBDMS'),
(2, 'Computer Science Engineering', 0, 2014, 'Fifth', 'CPI'),
(3, 'Computer Science Engineering', 0, 2014, 'Fifth', 'CG'),
(4, 'Computer Science Engineering', 0, 2014, 'Fifth', 'CN2'),
(5, 'Computer Science Engineering', 0, 2014, 'Fifth', 'DAA');

-- --------------------------------------------------------

--
-- Table structure for table `syllabus`
--

CREATE TABLE IF NOT EXISTS `syllabus` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `course` varchar(255) NOT NULL,
  `course_id` int(11) NOT NULL,
  `year` int(11) NOT NULL,
  `file` varchar(255) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=61 ;

--
-- Dumping data for table `syllabus`
--

INSERT INTO `syllabus` (`id`, `course`, `course_id`, `year`, `file`) VALUES
(56, 'MCA', 2, 2010, 'MCA_2010.pdf'),
(57, 'Computer Science Mtech', 2, 2010, 'Computer Science Mtech_2010.pdf'),
(58, 'MCA', 2, 2011, 'MCA_2011.pdf'),
(59, 'Computer Science Mtech', 2, 2013, 'Computer Science Mtech_2013.pdf'),
(60, 'Computer Science Mtech', 2, 2012, 'Computer Science Mtech_2012.pdf');

-- --------------------------------------------------------

--
-- Table structure for table `upload`
--

CREATE TABLE IF NOT EXISTS `upload` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `title` varchar(255) NOT NULL,
  `uploaded_date` date NOT NULL,
  `file` varchar(255) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=5 ;

--
-- Dumping data for table `upload`
--

INSERT INTO `upload` (`id`, `title`, `uploaded_date`, `file`) VALUES
(4, 'dsfdsf', '2014-12-15', 'dsfdsfzLRyarwlA2DM6YdtaCgDCTmYOsO4vO.pdf');

-- --------------------------------------------------------

--
-- Table structure for table `user`
--

CREATE TABLE IF NOT EXISTS `user` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `username` varchar(255) NOT NULL,
  `password` varchar(255) NOT NULL,
  `reset` varchar(255) NOT NULL,
  `u_id` varchar(255) NOT NULL,
  `confirm_code` varchar(255) NOT NULL,
  `confirm_status` int(11) NOT NULL,
  `verify` int(11) NOT NULL DEFAULT '0',
  `remember_token` varchar(255) NOT NULL,
  `created_at` date DEFAULT NULL,
  `updated_at` date DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=7 ;

--
-- Dumping data for table `user`
--

INSERT INTO `user` (`id`, `username`, `password`, `reset`, `u_id`, `confirm_code`, `confirm_status`, `verify`, `remember_token`, `created_at`, `updated_at`) VALUES
(5, 'abc@gmail.com', '$2y$10$dQHVfbZklpy72YxLk6q7suF2nBrpEggH1zO2sNuu1jfgAvsDpgpJK', '', 'XdMrhiSXNKlWka9', 'nIFF7y4xwNOOo3iN5Mf1Z33tt2c5Q58hkpWg7Y8I1F6wgJsShF', 1, 1, 'QJgCgR0Z3rYNItoW9zkicvUQQFtohO0m5dFKj4Kd0Z3phUBWssD0muEIpGG9', '2014-10-11', '2014-10-11'),
(6, 'gopalkumar315@gmail.com', '$2y$10$7oBnJKHLGUO9xCLo9XMkQOaXCO1PuFTot6UR6v81y/kiw.O1GYqk6', '', 'zV8ePp724s5Sdud', 'iNCaWDEBFgDrR6U0hJFVr2PVrviskcoAWp5mSDCc5o30FAv5O0', 1, 1, 'LRFwjIVBNDUPcZNegQ1c849quuZhAqL4PvAxL96Bt8ANGUosMFSGbIwvFA8U', '2014-10-17', '2014-10-17');

-- --------------------------------------------------------

--
-- Table structure for table `video`
--

CREATE TABLE IF NOT EXISTS `video` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `album_title` varchar(255) DEFAULT NULL,
  `parent` int(11) DEFAULT NULL,
  `video_title` varchar(255) DEFAULT NULL,
  `link` varchar(255) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=46 ;

--
-- Dumping data for table `video`
--

INSERT INTO `video` (`id`, `album_title`, `parent`, `video_title`, `link`) VALUES
(41, 'Happy new Year', 0, NULL, ''),
(42, NULL, 41, 'new year', 'szTGc5QDy7g'),
(43, NULL, 41, 'asdf', 'szTGc5QDy7g'),
(44, NULL, 41, 'fdsfsd', 'ij_0p_6qTss'),
(45, NULL, 41, 'dsf', 'szTGc5QDy7g');

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
