-- phpMyAdmin SQL Dump
-- version 4.9.4
-- https://www.phpmyadmin.net/
--
-- Host: localhost:3306
-- Generation Time: Oct 17, 2020 at 11:21 PM
-- Server version: 10.3.24-MariaDB-log-cll-lve
-- PHP Version: 7.3.6

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `reinhuci_marble`
--

-- --------------------------------------------------------

--
-- Table structure for table `admin`
--

CREATE TABLE `admin` (
  `id` int(11) NOT NULL,
  `username` varchar(100) NOT NULL,
  `email` varchar(50) NOT NULL,
  `password` varchar(500) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `admin`
--

INSERT INTO `admin` (`id`, `username`, `email`, `password`) VALUES
(1, 'admin', 'admin@gmail.com', 'e6e061838856bf47e1de730719fb2609');

-- --------------------------------------------------------

--
-- Table structure for table `architecture_design`
--

CREATE TABLE `architecture_design` (
  `id` int(11) NOT NULL,
  `images` varchar(10000) NOT NULL,
  `title` varchar(100) NOT NULL,
  `description` varchar(1000) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `architecture_design`
--

INSERT INTO `architecture_design` (`id`, `images`, `title`, `description`) VALUES
(1, 'service-2.jpg', 'Design 1', 'New Design Here'),
(2, 'Selfridges-London-designer-fashion-retail-Jamie-Fobert-Architects-shop-marble-floor-womenswear-2-389x296@2x.jpg', 'Design 2', 'This is Design 2nd'),
(3, 'marble-bathroom-designs-ideas-69.jpg', 'Design 3 ', 'This is Design 3'),
(4, '17-43-630x418.jpg', 'Design 4 ', 'This is Design 4'),
(5, '18-32.jpg', 'Design 5', 'This is Design 5'),
(6, 'e95a67e921803956395b5a057683b624.jpg', 'Design 6', 'This is Design 6');

-- --------------------------------------------------------

--
-- Table structure for table `architecture_query`
--

CREATE TABLE `architecture_query` (
  `id` int(11) NOT NULL,
  `name` varchar(50) NOT NULL,
  `email` varchar(100) NOT NULL,
  `phno` varchar(20) NOT NULL,
  `subject` varchar(500) NOT NULL,
  `date` varchar(100) NOT NULL,
  `query` varchar(500) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `chat_message`
--

CREATE TABLE `chat_message` (
  `id` int(11) NOT NULL,
  `to_user_id` int(10) NOT NULL,
  `from_user_id` int(10) NOT NULL,
  `chat_message` varchar(500) NOT NULL,
  `date_time` varchar(205) NOT NULL,
  `status` varchar(20) NOT NULL,
  `read_status` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `chat_message`
--

INSERT INTO `chat_message` (`id`, `to_user_id`, `from_user_id`, `chat_message`, `date_time`, `status`, `read_status`) VALUES
(53, 1, 2, 'HI how are you', '1588346823', '1', 'Red'),
(54, 2, 1, 'Ffine bro', '1588348621', '1', 'Unread'),
(55, 3, 1, 'Hello', '1588348748', '1', 'Unread');

-- --------------------------------------------------------

--
-- Table structure for table `construction`
--

CREATE TABLE `construction` (
  `id` int(11) NOT NULL,
  `title` varchar(50) NOT NULL,
  `images` varchar(5000) NOT NULL,
  `status` varchar(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `construction`
--

INSERT INTO `construction` (`id`, `title`, `images`, `status`) VALUES
(3, 'Marble Project', 'marble1.jpg, marble2.jpg, marble3.jpg, marble4.jpg, marble5.jpg, marble6.jpg, marble7.jpg', 'ongoing'),
(4, 'Marble project 34', 'marble6.jpg, marble7.jpg', 'ongoing'),
(5, 'marble project 3555', 'marble3.jpg, marble4.jpg, marble5.jpg', 'ongoing'),
(6, 'Marble project 34937', 'marble4.jpg, marble5.jpg', 'ongoing');

-- --------------------------------------------------------

--
-- Table structure for table `construction_order_history`
--

CREATE TABLE `construction_order_history` (
  `id` int(11) NOT NULL,
  `title` varchar(50) NOT NULL,
  `customer_id` int(20) NOT NULL,
  `address` varchar(100) NOT NULL,
  `date` varchar(500) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `construction_query`
--

CREATE TABLE `construction_query` (
  `id` int(11) NOT NULL,
  `name` varchar(50) NOT NULL,
  `email` varchar(100) NOT NULL,
  `phno` varchar(20) NOT NULL,
  `subject` varchar(500) NOT NULL,
  `date` varchar(100) NOT NULL,
  `query` varchar(500) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `construction_query`
--

INSERT INTO `construction_query` (`id`, `name`, `email`, `phno`, `subject`, `date`, `query`) VALUES
(5, 'safdfjjfd', 'abhi@gmldfj', '39479437', 'ldjfldj', '1', 'dlfjdlj'),
(6, 'sdffja', 'efjj@ldfjlf', '9479374374', 'ldfj', '1', 'ldfjddf');

-- --------------------------------------------------------

--
-- Table structure for table `contact_us`
--

CREATE TABLE `contact_us` (
  `id` int(11) NOT NULL,
  `name` varchar(50) NOT NULL,
  `email` varchar(100) NOT NULL,
  `mobile` varchar(20) NOT NULL,
  `subject` varchar(100) NOT NULL,
  `message` varchar(5000) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `contact_us`
--

INSERT INTO `contact_us` (`id`, `name`, `email`, `mobile`, `subject`, `message`) VALUES
(1, 'abhi', 'abhi@gmail.com', '93749374', 'HI', 'Contacted'),
(2, 'kusus', 'abhi@347937', '39479374', 'dfusfjlj', 'ldfjlsfddf'),
(3, 'abhi', 'abhi@gia.com', '349793479', '3749', 'dlfjsf');

-- --------------------------------------------------------

--
-- Table structure for table `customer`
--

CREATE TABLE `customer` (
  `id` int(11) NOT NULL,
  `name` varchar(100) NOT NULL,
  `email` varchar(200) NOT NULL,
  `password` varchar(5000) NOT NULL,
  `mobile` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `customer`
--

INSERT INTO `customer` (`id`, `name`, `email`, `password`, `mobile`) VALUES
(2, 'abhi lash', 'abhilash@gmail.com', '167784d36ab99e49738fe6a6a98798b7', '39479374'),
(3, 'yogesh kumar', 'yogesh@gmail.com', '167784d36ab99e49738fe6a6a98798b7', '374934343');

-- --------------------------------------------------------

--
-- Table structure for table `ipaddress`
--

CREATE TABLE `ipaddress` (
  `id` int(11) NOT NULL,
  `ip` varchar(200) NOT NULL,
  `time` varchar(500) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `ipaddress`
--

INSERT INTO `ipaddress` (`id`, `ip`, `time`) VALUES
(9, '106.66.135.43', '12-05-2020 08:47:55pm'),
(11, '157.39.107.21', '13-05-2020 01:30:02pm'),
(14, '106.66.139.205', '13-05-2020 07:46:36pm'),
(16, '137.97.240.96', '15-05-2020 09:10:39am'),
(17, '137.97.250.138', '15-05-2020 09:34:19am'),
(18, '157.45.234.22', '15-05-2020 02:29:40pm'),
(19, '157.45.199.121', '15-05-2020 09:08:20pm'),
(20, '137.97.36.73', '17-05-2020 09:19:28am'),
(21, '137.97.48.173', '17-05-2020 11:48:55am'),
(22, '137.97.32.45', '18-05-2020 09:15:47am'),
(23, '137.97.34.199', '18-05-2020 09:51:30pm'),
(24, '112.79.80.42', '20-05-2020 10:14:47am'),
(25, '157.45.244.100', '20-05-2020 07:02:39pm'),
(26, '157.49.206.33', '21-05-2020 10:50:41pm'),
(27, '157.49.233.18', '22-05-2020 06:12:33am'),
(28, '157.49.244.214', '22-05-2020 09:32:08pm'),
(29, '157.49.202.141', '23-05-2020 01:23:47pm'),
(30, '157.49.199.208', '24-05-2020 10:33:34am'),
(31, '157.49.224.16', '24-05-2020 01:20:51pm'),
(32, '157.49.162.138', '02-07-2020 07:10:35pm'),
(33, '132.154.176.11', '02-07-2020 07:11:39pm'),
(34, '157.49.78.0', '11-10-2020 01:28:16pm'),
(35, '157.39.1.199', '11-10-2020 12:52:06pm'),
(36, '47.247.184.100', '11-10-2020 12:52:50pm'),
(37, '157.34.26.232', '11-10-2020 01:05:01pm'),
(38, '157.49.69.252', '11-10-2020 05:24:34pm'),
(39, '157.45.16.137', '17-10-2020 02:30:34pm');

-- --------------------------------------------------------

--
-- Table structure for table `newsletter`
--

CREATE TABLE `newsletter` (
  `id` int(11) NOT NULL,
  `email` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `newsletter`
--

INSERT INTO `newsletter` (`id`, `email`) VALUES
(1, 'abhi@gmail.com'),
(2, 'sldjfl@gmail.com'),
(3, 'lfdjsf;j@gmail.com'),
(4, 'asfd@gmail.com'),
(5, 'fsdf@gmailcom');

-- --------------------------------------------------------

--
-- Table structure for table `payu`
--

CREATE TABLE `payu` (
  `id` int(11) NOT NULL,
  `history_id` int(11) NOT NULL,
  `txnid` varchar(5000) NOT NULL,
  `amount` varchar(100) NOT NULL,
  `product_info` varchar(500) NOT NULL,
  `name_given` varchar(100) NOT NULL,
  `email_given` varchar(500) NOT NULL,
  `mobile_given` varchar(5000) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `payu`
--

INSERT INTO `payu` (`id`, `history_id`, `txnid`, `amount`, `product_info`, `name_given`, `email_given`, `mobile_given`) VALUES
(1, 1, 'Txn6061388', '1.00', 'Marble 7', 'abhi', 'abhilash@gmail.com', '');

-- --------------------------------------------------------

--
-- Table structure for table `products`
--

CREATE TABLE `products` (
  `id` int(11) NOT NULL,
  `product_name` varchar(500) NOT NULL,
  `product_images` mediumtext NOT NULL,
  `category_id` int(50) NOT NULL,
  `sub_category_id` int(50) NOT NULL,
  `description` varchar(500) NOT NULL,
  `price` varchar(500) NOT NULL,
  `volume` varchar(500) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `products`
--

INSERT INTO `products` (`id`, `product_name`, `product_images`, `category_id`, `sub_category_id`, `description`, `price`, `volume`) VALUES
(8, 'Marble 7', 'marble5.jpg', 2, 3, 'Its marble 7', '500', 'mtr');

-- --------------------------------------------------------

--
-- Table structure for table `stone_category`
--

CREATE TABLE `stone_category` (
  `id` int(11) NOT NULL,
  `category_name` varchar(100) NOT NULL,
  `category_image` varchar(5000) NOT NULL,
  `parent_id` int(20) NOT NULL,
  `date_time` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `stone_category`
--

INSERT INTO `stone_category` (`id`, `category_name`, `category_image`, `parent_id`, `date_time`) VALUES
(2, 'Stone2', 'marble1.jpg, marble2.jpg, marble3.jpg, marble4.jpg, marble5.jpg, marble6.jpg, marble7.jpg', 0, '05-05-2020 08:48:56am'),
(3, 'STone3', 'marble1.jpg, marble2.jpg, marble3.jpg, marble4.jpg, marble5.jpg, marble6.jpg, marble7.jpg', 2, '05-05-2020 08:49:15am'),
(5, 'Stone4', 'marble4.jpg', 0, '434646'),
(6, 'STone5', 'idlf.jpg', 5, '564644');

-- --------------------------------------------------------

--
-- Table structure for table `stone_category_order_history`
--

CREATE TABLE `stone_category_order_history` (
  `id` int(11) NOT NULL,
  `stone_category_name` varchar(100) NOT NULL,
  `product_name` varchar(100) NOT NULL,
  `customer_id` int(50) NOT NULL,
  `address` varchar(100) NOT NULL,
  `pincode` int(10) NOT NULL,
  `date` varchar(50) NOT NULL,
  `quantity` int(20) NOT NULL,
  `amount` varchar(200) NOT NULL,
  `landmark` varchar(500) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `stone_category_order_history`
--

INSERT INTO `stone_category_order_history` (`id`, `stone_category_name`, `product_name`, `customer_id`, `address`, `pincode`, `date`, `quantity`, `amount`, `landmark`) VALUES
(14, 'Stone2', 'Marble 7', 2, 'sdsddsdssd', 560091, '09-05-2020 02:59:46pm', 2, '1000', ''),
(15, 'Stone2', 'Marble 7', 3, '13131', 560011, '09-05-2020 03:01:58pm', 1, '500', '');

-- --------------------------------------------------------

--
-- Table structure for table `stone_category_query`
--

CREATE TABLE `stone_category_query` (
  `id` int(11) NOT NULL,
  `name` varchar(50) NOT NULL,
  `email` varchar(100) NOT NULL,
  `phno` varchar(20) NOT NULL,
  `subject` varchar(500) NOT NULL,
  `date` varchar(100) NOT NULL,
  `query` varchar(500) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Indexes for dumped tables
--

--
-- Indexes for table `admin`
--
ALTER TABLE `admin`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `architecture_design`
--
ALTER TABLE `architecture_design`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `architecture_query`
--
ALTER TABLE `architecture_query`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `chat_message`
--
ALTER TABLE `chat_message`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `construction`
--
ALTER TABLE `construction`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `construction_order_history`
--
ALTER TABLE `construction_order_history`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `construction_query`
--
ALTER TABLE `construction_query`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `contact_us`
--
ALTER TABLE `contact_us`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `customer`
--
ALTER TABLE `customer`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `ipaddress`
--
ALTER TABLE `ipaddress`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `newsletter`
--
ALTER TABLE `newsletter`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `payu`
--
ALTER TABLE `payu`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `products`
--
ALTER TABLE `products`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `stone_category`
--
ALTER TABLE `stone_category`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `stone_category_order_history`
--
ALTER TABLE `stone_category_order_history`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `stone_category_query`
--
ALTER TABLE `stone_category_query`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `admin`
--
ALTER TABLE `admin`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `architecture_design`
--
ALTER TABLE `architecture_design`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `architecture_query`
--
ALTER TABLE `architecture_query`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT for table `chat_message`
--
ALTER TABLE `chat_message`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=56;

--
-- AUTO_INCREMENT for table `construction`
--
ALTER TABLE `construction`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `construction_order_history`
--
ALTER TABLE `construction_order_history`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `construction_query`
--
ALTER TABLE `construction_query`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `contact_us`
--
ALTER TABLE `contact_us`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `customer`
--
ALTER TABLE `customer`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `ipaddress`
--
ALTER TABLE `ipaddress`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=40;

--
-- AUTO_INCREMENT for table `newsletter`
--
ALTER TABLE `newsletter`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `payu`
--
ALTER TABLE `payu`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `products`
--
ALTER TABLE `products`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT for table `stone_category`
--
ALTER TABLE `stone_category`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `stone_category_order_history`
--
ALTER TABLE `stone_category_order_history`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=16;

--
-- AUTO_INCREMENT for table `stone_category_query`
--
ALTER TABLE `stone_category_query`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
