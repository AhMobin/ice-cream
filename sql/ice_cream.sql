-- phpMyAdmin SQL Dump
-- version 4.4.15.9
-- https://www.phpmyadmin.net
--
-- Host: localhost
-- Generation Time: Sep 19, 2019 at 03:30 PM
-- Server version: 5.6.37
-- PHP Version: 5.6.31

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `ice_cream`
--

-- --------------------------------------------------------

--
-- Table structure for table `admins`
--

CREATE TABLE IF NOT EXISTS `admins` (
  `admin_id` int(11) NOT NULL,
  `admin_name` varchar(255) NOT NULL,
  `admin_email` varchar(255) NOT NULL,
  `admin_password` varchar(255) NOT NULL,
  `admin_role` int(15) NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `admins`
--

INSERT INTO `admins` (`admin_id`, `admin_name`, `admin_email`, `admin_password`, `admin_role`) VALUES
(1, 'Abu Huraira', 'admin@mail.com', '698d51a19d8a121ce581499d7b701668', 1);

-- --------------------------------------------------------

--
-- Table structure for table `contacts`
--

CREATE TABLE IF NOT EXISTS `contacts` (
  `contact_id` int(11) NOT NULL,
  `contact_name` varchar(255) NOT NULL,
  `contact_email` varchar(255) NOT NULL,
  `contact_subject` varchar(255) NOT NULL,
  `contact_message` varchar(255) NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `contacts`
--

INSERT INTO `contacts` (`contact_id`, `contact_name`, `contact_email`, `contact_subject`, `contact_message`) VALUES
(1, 'Abu Huraira', 'ahexample@mail.com', 'test', 'this is test message');

-- --------------------------------------------------------

--
-- Table structure for table `footers`
--

CREATE TABLE IF NOT EXISTS `footers` (
  `foo_id` int(11) NOT NULL,
  `foo_heading` varchar(255) NOT NULL,
  `foo_desc` varchar(255) NOT NULL,
  `foo_location` varchar(255) NOT NULL,
  `foo_phone` varchar(100) NOT NULL,
  `foo_email` varchar(255) NOT NULL,
  `foo_copyright` varchar(100) NOT NULL,
  `foo_devname` varchar(255) NOT NULL,
  `foo_devlink` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `footers`
--

INSERT INTO `footers` (`foo_id`, `foo_heading`, `foo_desc`, `foo_location`, `foo_phone`, `foo_email`, `foo_copyright`, `foo_devname`, `foo_devlink`) VALUES
(1, 'we are best in making ice creams', 'Sed ut perspiciatis unde omnis iste natus error sit voluptatem accusantium doloremque laudantium, totam rem aperiam, doloremque laudantium, totam rem aperiam', '#5 Dhanmondi, Dhaka', '+88(01) 1234 567 891.', 'example@gmail.com', '2019 Ice Cream. All rights reserved | Developed by', 'Abu Huraira', '');

-- --------------------------------------------------------

--
-- Table structure for table `galleries`
--

CREATE TABLE IF NOT EXISTS `galleries` (
  `gl_img_id` int(11) NOT NULL,
  `gl_img_heading` varchar(255) NOT NULL,
  `gl_img_desc` text NOT NULL,
  `gl_img_name` varchar(100) NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=11 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `galleries`
--

INSERT INTO `galleries` (`gl_img_id`, `gl_img_heading`, `gl_img_desc`, `gl_img_name`) VALUES
(5, 'Chocolate Ice Cream', 'Enim a viverra tincidunt, tortorin urna porta ligula, venenatis vestibulum sapien augue vitae ligula. ', '5.jpg'),
(6, 'Chocolate Vanela', 'Phasellus vel augue sem. Nulla auctor elit augue, eu volutpat risus tincidunt ullamcorper.', '6.jpg'),
(7, 'Chocolate Vanela', 'Phasellus vel augue sem. Nulla auctor elit augue, eu volutpat risus tincidunt ullamcorper.', '7.jpg'),
(8, ' French Vanilla Cream ', 'Phasellus vel augue sem. Nulla auctor elit augue, eu volutpat risus tincidunt ullamcorper.', '8.jpg'),
(9, 'Chocolate Frosted Cupcake', 'Phasellus vel augue sem. Nulla auctor elit augue, eu volutpat risus tincidunt ullamcorper.', '9.jpg'),
(10, ' Banana Berry Smoothie ', 'Phasellus vel augue sem. Nulla auctor elit augue, eu volutpat risus tincidunt ullamcorper.', '10.jpg');

-- --------------------------------------------------------

--
-- Table structure for table `menus`
--

CREATE TABLE IF NOT EXISTS `menus` (
  `menu_id` int(11) NOT NULL,
  `menu_category` varchar(255) NOT NULL,
  `menu_name` varchar(255) NOT NULL,
  `menu_desc` varchar(255) NOT NULL,
  `menu_price` int(100) NOT NULL,
  `menu_img` varchar(250) NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=8 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `menus`
--

INSERT INTO `menus` (`menu_id`, `menu_category`, `menu_name`, `menu_desc`, `menu_price`, `menu_img`) VALUES
(1, 'special', ' French Vanilla Cream ', ' Nam libero tempore cum soluta nobis.', 25, '1.png'),
(2, 'special', ' Chocolate Frosted Cupcake ', ' Nam libero tempore cum soluta nobis.', 25, '2.png'),
(3, 'special', ' Banana Berry Smoothie ', ' Nam libero tempore cum soluta nobis.', 36, '3.png'),
(4, 'scoops', ' Grape ice cream ', ' Nam libero tempore cum soluta nobis.', 58, '4.png'),
(5, 'scoops', ' Coffee ice cream ', ' Nam libero tempore cum soluta nobis.', 88, '5.png'),
(6, 'scoops', ' Cherry ice cream ', ' Nam libero tempore cum soluta nobis.', 78, '6.png'),
(7, 'srobet', ' Chocolate Frosted Cupcake ', ' Nam libero tempore cum soluta nobis.', 30, '7.png');

-- --------------------------------------------------------

--
-- Table structure for table `subscribers`
--

CREATE TABLE IF NOT EXISTS `subscribers` (
  `subs_id` int(11) NOT NULL,
  `subs_email` varchar(255) NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `subscribers`
--

INSERT INTO `subscribers` (`subs_id`, `subs_email`) VALUES
(1, 'subscribed@mail.com');

-- --------------------------------------------------------

--
-- Table structure for table `testimonials`
--

CREATE TABLE IF NOT EXISTS `testimonials` (
  `testi_id` int(11) NOT NULL,
  `testis_name` varchar(255) NOT NULL,
  `testis_review` varchar(255) NOT NULL,
  `testis_photo` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Indexes for dumped tables
--

--
-- Indexes for table `admins`
--
ALTER TABLE `admins`
  ADD PRIMARY KEY (`admin_id`);

--
-- Indexes for table `contacts`
--
ALTER TABLE `contacts`
  ADD PRIMARY KEY (`contact_id`);

--
-- Indexes for table `footers`
--
ALTER TABLE `footers`
  ADD PRIMARY KEY (`foo_id`);

--
-- Indexes for table `galleries`
--
ALTER TABLE `galleries`
  ADD PRIMARY KEY (`gl_img_id`);

--
-- Indexes for table `menus`
--
ALTER TABLE `menus`
  ADD PRIMARY KEY (`menu_id`);

--
-- Indexes for table `subscribers`
--
ALTER TABLE `subscribers`
  ADD PRIMARY KEY (`subs_id`);

--
-- Indexes for table `testimonials`
--
ALTER TABLE `testimonials`
  ADD PRIMARY KEY (`testi_id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `admins`
--
ALTER TABLE `admins`
  MODIFY `admin_id` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=2;
--
-- AUTO_INCREMENT for table `contacts`
--
ALTER TABLE `contacts`
  MODIFY `contact_id` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=2;
--
-- AUTO_INCREMENT for table `galleries`
--
ALTER TABLE `galleries`
  MODIFY `gl_img_id` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=11;
--
-- AUTO_INCREMENT for table `menus`
--
ALTER TABLE `menus`
  MODIFY `menu_id` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=8;
--
-- AUTO_INCREMENT for table `subscribers`
--
ALTER TABLE `subscribers`
  MODIFY `subs_id` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=2;
--
-- AUTO_INCREMENT for table `testimonials`
--
ALTER TABLE `testimonials`
  MODIFY `testi_id` int(11) NOT NULL AUTO_INCREMENT;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
