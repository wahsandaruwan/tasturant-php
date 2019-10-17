-- phpMyAdmin SQL Dump
-- version 4.8.2
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Aug 07, 2018 at 10:28 AM
-- Server version: 10.1.34-MariaDB
-- PHP Version: 7.2.7

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `tasturant`
--

-- --------------------------------------------------------

--
-- Table structure for table `add_orders`
--

CREATE TABLE `add_orders` (
  `id` int(5) NOT NULL,
  `item_image` varchar(500) NOT NULL,
  `item_name` varchar(100) NOT NULL,
  `item_price` int(11) NOT NULL,
  `item_qty` int(11) NOT NULL,
  `item_cat1` varchar(100) NOT NULL,
  `item_cat2` varchar(100) NOT NULL,
  `item_cat3` varchar(100) NOT NULL,
  `toppings` varchar(100) NOT NULL,
  `size` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `admin_login`
--

CREATE TABLE `admin_login` (
  `id` int(3) NOT NULL,
  `username` varchar(111) NOT NULL,
  `password` varchar(111) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `admin_login`
--

INSERT INTO `admin_login` (`id`, `username`, `password`) VALUES
(1, 'himal', 'himal'),
(2, 'admin', 'admin');

-- --------------------------------------------------------

--
-- Table structure for table `confirm`
--

CREATE TABLE `confirm` (
  `id` int(255) NOT NULL,
  `item_image` varchar(500) NOT NULL,
  `item_name` varchar(100) NOT NULL,
  `item_price` int(100) NOT NULL,
  `item_qty` int(255) NOT NULL,
  `item_cat1` varchar(100) NOT NULL,
  `item_cat2` varchar(100) NOT NULL,
  `item_cat3` varchar(100) NOT NULL,
  `toppings` varchar(100) NOT NULL,
  `size` varchar(50) NOT NULL,
  `fullname` varchar(200) NOT NULL,
  `email` varchar(100) NOT NULL,
  `phone` varchar(10) NOT NULL,
  `address` varchar(200) NOT NULL,
  `postal_code` varchar(10) NOT NULL,
  `card_type` varchar(10) NOT NULL,
  `card_num` varchar(30) NOT NULL,
  `csv` varchar(4) NOT NULL,
  `expire_date` varchar(10) NOT NULL,
  `confirm` varchar(3) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `food`
--

CREATE TABLE `food` (
  `id` int(5) NOT NULL,
  `item_name` varchar(100) NOT NULL,
  `item_price` int(5) NOT NULL,
  `item_qty` int(5) NOT NULL,
  `item_image` varchar(500) NOT NULL,
  `item_cat1` varchar(100) NOT NULL,
  `item_cat2` varchar(100) NOT NULL,
  `item_cat3` varchar(100) NOT NULL,
  `item_desc` varchar(300) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `food`
--

INSERT INTO `food` (`id`, `item_name`, `item_price`, `item_qty`, `item_image`, `item_cat1`, `item_cat2`, `item_cat3`, `item_desc`) VALUES
(5, 'Green Pizza', 1000, 100, 'images/62c414ce1cda231d9fde640db7c03f63pic6.png', 'Pizza', 'Italian', 'Vege', 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Ipsa totam repudiandae sint exercitationem dolorem, consequuntur commodi non quia enim accusantium nemo, ea deleniti officia eveniet corrupti odit voluptas? Aspernatur, accusamus'),
(6, 'Cheese and Tomato Pizza', 1300, 100, 'images/e4584c7c25ae6ac8a2e86ba632902279pic20.png', 'Pizza', 'Italian', 'Vege', 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Ipsa totam repudiandae sint exercitationem dolorem, consequuntur commodi non quia enim accusantium nemo, ea deleniti officia eveniet corrupti odit voluptas? Aspernatur, accusamus'),
(7, 'Cheezy Onion Pizza', 900, 100, 'images/7dcc608397381630875b2f6de33298eepic17.png', 'Pizza', 'Italian', 'Vege', 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Ipsa totam repudiandae sint exercitationem dolorem, consequuntur commodi non quia enim accusantium nemo, ea deleniti officia eveniet corrupti odit voluptas? Aspernatur, accusamus'),
(8, 'Chicken Bacon Pizza', 1100, 100, 'images/06ff341e78db65829afef6c65172477fpic18.png', 'Pizza', 'Italian', 'Nonvege', 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Ipsa totam repudiandae sint exercitationem dolorem, consequuntur commodi non quia enim accusantium nemo, ea deleniti officia eveniet corrupti odit voluptas? Aspernatur, accusamus'),
(9, 'Chicken Hawaiian Pizza', 1150, 100, 'images/3f3f40348bd0621d13cea7d8afbe44f0pic21.png', 'Pizza', 'Italian', 'Nonvege', 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Ipsa totam repudiandae sint exercitationem dolorem, consequuntur commodi non quia enim accusantium nemo, ea deleniti officia eveniet corrupti odit voluptas? Aspernatur, accusamus'),
(10, 'Sausage Delight Pizza', 1050, 100, 'images/e1a558c2bdff4e206e44afed8ad40763pic23.png', 'Pizza', 'Italian', 'Nonvege', 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Ipsa totam repudiandae sint exercitationem dolorem, consequuntur commodi non quia enim accusantium nemo, ea deleniti officia eveniet corrupti odit voluptas? Aspernatur, accusamus'),
(11, 'Vege Supremo Pizza', 1000, 100, 'images/0d0e80c27e06a486e9097eeb0c8320dfpic12.png', 'Pizza', 'Indian', 'Vege', 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Ipsa totam repudiandae sint exercitationem dolorem, consequuntur commodi non quia enim accusantium nemo, ea deleniti officia eveniet corrupti odit voluptas? Aspernatur, accusamus'),
(12, 'Hot Garlic Prawns Pizza', 1050, 100, 'images/02969a8280c160da46cd908c8f9e0cecpic11.png', 'Pizza', 'Indian', 'Vege', 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Ipsa totam repudiandae sint exercitationem dolorem, consequuntur commodi non quia enim accusantium nemo, ea deleniti officia eveniet corrupti odit voluptas? Aspernatur, accusamus'),
(13, 'Masala Chilly Pizza', 1150, 100, 'images/9c58aabfc08efc2d6132252e8e2538fapic16.png', 'Pizza', 'Indian', 'Vege', 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Ipsa totam repudiandae sint exercitationem dolorem, consequuntur commodi non quia enim accusantium nemo, ea deleniti officia eveniet corrupti odit voluptas? Aspernatur, accusamus'),
(14, 'Thanduri Chicken Pizza', 1450, 100, 'images/e7e6d0a57661177ab74c255de81258bbpic8.png', 'Pizza', 'Indian', 'Nonvege', 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Ipsa totam repudiandae sint exercitationem dolorem, consequuntur commodi non quia enim accusantium nemo, ea deleniti officia eveniet corrupti odit voluptas? Aspernatur, accusamus'),
(15, 'Tropical Fish Pizza', 1200, 100, 'images/5014bc9b6341791a2582a8a39ae36992pic15.png', 'Pizza', 'Indian', 'Nonvege', 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Ipsa totam repudiandae sint exercitationem dolorem, consequuntur commodi non quia enim accusantium nemo, ea deleniti officia eveniet corrupti odit voluptas? Aspernatur, accusamus'),
(16, 'Butter Chicken Masala Pizza', 1100, 100, 'images/6fc9dfccf72b37209422387198c2a1depic19.png', 'Pizza', 'Indian', 'Nonvege', 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Ipsa totam repudiandae sint exercitationem dolorem, consequuntur commodi non quia enim accusantium nemo, ea deleniti officia eveniet corrupti odit voluptas? Aspernatur, accusamus'),
(17, 'Fried Cashew Pizza', 1170, 100, 'images/e715777968b71a0e1e7e5f2294b6c667pic13.png', 'Pizza', 'SriLankan', 'Vege', 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Ipsa totam repudiandae sint exercitationem dolorem, consequuntur commodi non quia enim accusantium nemo, ea deleniti officia eveniet corrupti odit voluptas? Aspernatur, accusamus'),
(18, 'Full Vegetable Pizza', 1000, 100, 'images/54e90c0f78d78f52381f8bd2a96d6d72pic12.png', 'Pizza', 'SriLankan', 'Vege', 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Ipsa totam repudiandae sint exercitationem dolorem, consequuntur commodi non quia enim accusantium nemo, ea deleniti officia eveniet corrupti odit voluptas? Aspernatur, accusamus'),
(19, 'Tomato Onion Pizza', 1050, 100, 'images/55fe3a42c74febf18bfc9ca51bbd8235pic14.png', 'Pizza', 'SriLankan', 'Vege', 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Ipsa totam repudiandae sint exercitationem dolorem, consequuntur commodi non quia enim accusantium nemo, ea deleniti officia eveniet corrupti odit voluptas? Aspernatur, accusamus'),
(20, 'Chilly Chicken Pizza', 1150, 100, 'images/74b8150c56a74b5a1eaca0b6ed5243f3pic8.png', 'Pizza', 'SriLankan', 'Nonvege', 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Ipsa totam repudiandae sint exercitationem dolorem, consequuntur commodi non quia enim accusantium nemo, ea deleniti officia eveniet corrupti odit voluptas? Aspernatur, accusamus'),
(21, 'Spicy Sea Food Pizza', 1190, 100, 'images/854292f2f37572f97f2ec353ba648d5dpic11.png', 'Pizza', 'SriLankan', 'Nonvege', 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Ipsa totam repudiandae sint exercitationem dolorem, consequuntur commodi non quia enim accusantium nemo, ea deleniti officia eveniet corrupti odit voluptas? Aspernatur, accusamus'),
(22, 'Special Egg Pizza', 1000, 100, 'images/046d2c02344fb30d1168d50edf1167d6pic24.png', 'Pizza', 'SriLankan', 'Nonvege', 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Ipsa totam repudiandae sint exercitationem dolorem, consequuntur commodi non quia enim accusantium nemo, ea deleniti officia eveniet corrupti odit voluptas? Aspernatur, accusamus'),
(23, 'Pottato Rice', 1000, 100, 'images/1c0e6ddc2a39ade8a5af5aedcaba76c3pic39.png', 'Rice', 'SriLankan', 'Vege', 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Ipsa totam repudiandae sint exercitationem dolorem, consequuntur commodi non quia enim accusantium nemo, ea deleniti officia eveniet corrupti odit voluptas? Aspernatur, accusamus'),
(24, 'Fried Vege Rice', 950, 100, 'images/ea629756c41409de07d77cd8c7a0e896pic40.png', 'Rice', 'SriLankan', 'Vege', 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Ipsa totam repudiandae sint exercitationem dolorem, consequuntur commodi non quia enim accusantium nemo, ea deleniti officia eveniet corrupti odit voluptas? Aspernatur, accusamus'),
(25, 'Hot Garlic Rice', 800, 100, 'images/388e79f2285f540d5eb52fd71ef9f764pic37.png', 'Rice', 'SriLankan', 'Vege', 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Ipsa totam repudiandae sint exercitationem dolorem, consequuntur commodi non quia enim accusantium nemo, ea deleniti officia eveniet corrupti odit voluptas? Aspernatur, accusamus'),
(26, 'Chicken Mixed Rice', 1200, 100, 'images/0d80f92b229c7b8972a2733c0e33b66cpic30.png', 'Rice', 'SriLankan', 'Nonvege', 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Ipsa totam repudiandae sint exercitationem dolorem, consequuntur commodi non quia enim accusantium nemo, ea deleniti officia eveniet corrupti odit voluptas? Aspernatur, accusamus'),
(27, 'Sea Food Rice', 1150, 100, 'images/76af805703dd2458f178bf155c2ed5f1pic28.png', 'Rice', 'SriLankan', 'Nonvege', 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Ipsa totam repudiandae sint exercitationem dolorem, consequuntur commodi non quia enim accusantium nemo, ea deleniti officia eveniet corrupti odit voluptas? Aspernatur, accusamus'),
(28, 'Nasi Guran Rice', 1180, 100, 'images/018af090c481184160432d8d5efe707cpic29.png', 'Rice', 'SriLankan', 'Nonvege', 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Ipsa totam repudiandae sint exercitationem dolorem, consequuntur commodi non quia enim accusantium nemo, ea deleniti officia eveniet corrupti odit voluptas? Aspernatur, accusamus'),
(29, 'Masala Rice', 1000, 100, 'images/ef29f8710ab144c8f3d88a1a01c4f073pic25.png', 'Rice', 'Indian', 'Vege', 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Ipsa totam repudiandae sint exercitationem dolorem, consequuntur commodi non quia enim accusantium nemo, ea deleniti officia eveniet corrupti odit voluptas? Aspernatur, accusamus'),
(30, 'Chilly Chapathi Rice', 1300, 100, 'images/e43fe6b2d3e8d42a31013a98ddc56b20pic26.png', 'Rice', 'Indian', 'Vege', 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Ipsa totam repudiandae sint exercitationem dolorem, consequuntur commodi non quia enim accusantium nemo, ea deleniti officia eveniet corrupti odit voluptas? Aspernatur, accusamus'),
(31, 'Tomato Mirchi Rice', 1100, 100, 'images/9ccf62568a24d8053c9d36be422dbb82pic27.png', 'Rice', 'Indian', 'Vege', 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Ipsa totam repudiandae sint exercitationem dolorem, consequuntur commodi non quia enim accusantium nemo, ea deleniti officia eveniet corrupti odit voluptas? Aspernatur, accusamus'),
(32, 'Thanduri Chicken Rice', 1150, 100, 'images/a0d274a19faeea7dfe59a0bc2ca4a0bbpic35.png', 'Rice', 'Indian', 'Nonvege', 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Ipsa totam repudiandae sint exercitationem dolorem, consequuntur commodi non quia enim accusantium nemo, ea deleniti officia eveniet corrupti odit voluptas? Aspernatur, accusamus'),
(33, 'Chicken Biriyani', 1050, 100, 'images/b8ea4553151be21d1b13fefb1f1e9525pic31.png', 'Rice', 'Indian', 'Nonvege', 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Ipsa totam repudiandae sint exercitationem dolorem, consequuntur commodi non quia enim accusantium nemo, ea deleniti officia eveniet corrupti odit voluptas? Aspernatur, accusamus'),
(34, 'Chicken Masala Rice', 1000, 100, 'images/1643cc94581b9d0295df40dcdedd8f60pic34.png', 'Rice', 'Indian', 'Nonvege', 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Ipsa totam repudiandae sint exercitationem dolorem, consequuntur commodi non quia enim accusantium nemo, ea deleniti officia eveniet corrupti odit voluptas? Aspernatur, accusamus'),
(35, 'Malay Vege Rice', 1000, 100, 'images/c25f5ba9d9eb0affba64aaac78eda972pic40.png', 'Rice', 'Malaysian', 'Vege', 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Ipsa totam repudiandae sint exercitationem dolorem, consequuntur commodi non quia enim accusantium nemo, ea deleniti officia eveniet corrupti odit voluptas? Aspernatur, accusamus'),
(37, 'Fried Cashew Rice', 1500, 100, 'images/220bcea3d756c8c9b973388a3c59f04fpic42.png', 'Rice', 'Malaysian', 'Vege', 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Ipsa totam repudiandae sint exercitationem dolorem, consequuntur commodi non quia enim accusantium nemo, ea deleniti officia eveniet corrupti odit voluptas? Aspernatur, accusamus'),
(38, 'Pottato Fried Rice', 1000, 100, 'images/99cb3121cb9299bdd64601757008734dpic41.png', 'Rice', 'Malaysian', 'Vege', 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Ipsa totam repudiandae sint exercitationem dolorem, consequuntur commodi non quia enim accusantium nemo, ea deleniti officia eveniet corrupti odit voluptas? Aspernatur, accusamus'),
(39, 'Fish Mixed Rice', 1150, 100, 'images/4c0ed4e22696dff9a799443742a8a514pic35.png', 'Rice', 'Malaysian', 'Nonvege', 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Ipsa totam repudiandae sint exercitationem dolorem, consequuntur commodi non quia enim accusantium nemo, ea deleniti officia eveniet corrupti odit voluptas? Aspernatur, accusamus'),
(40, 'Grilled Chicken Rice', 1050, 100, 'images/a40dcd0b31ee0007978ded907e47a123pic30.png', 'Rice', 'Malaysian', 'Nonvege', 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Ipsa totam repudiandae sint exercitationem dolorem, consequuntur commodi non quia enim accusantium nemo, ea deleniti officia eveniet corrupti odit voluptas? Aspernatur, accusamus'),
(41, 'Boiled Egg Rice', 1000, 100, 'images/5eb07202d18b47e8f41efca2f6b7b796pic38.png', 'Rice', 'Malaysian', 'Nonvege', 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Ipsa totam repudiandae sint exercitationem dolorem, consequuntur commodi non quia enim accusantium nemo, ea deleniti officia eveniet corrupti odit voluptas? Aspernatur, accusamus'),
(42, 'Faluda', 400, 100, 'images/a910c1173218730d917ef9c66be2d758pic5.png', 'Drinks', 'Cool Drinks', '', 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Ipsa totam repudiandae sint exercitationem dolorem, consequuntur commodi non quia enim accusantium nemo, ea deleniti officia eveniet corrupti odit voluptas? Aspernatur, accusamus'),
(50, 'Iced Coffee', 300, 100, 'images/8665dc198035a3c820cedfbc4060caf7pic3.png', 'Drinks', 'Cool Drinks', '', 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Ipsa totam repudiandae sint exercitationem dolorem, consequuntur commodi non quia enim accusantium nemo, ea deleniti officia eveniet corrupti odit voluptas? Aspernatur, accusamus'),
(51, 'Orange Juice', 200, 100, 'images/17c44753e31276f088b7cae052de2d17pic7.png', 'Drinks', 'Cool Drinks', '', 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Ipsa totam repudiandae sint exercitationem dolorem, consequuntur commodi non quia enim accusantium nemo, ea deleniti officia eveniet corrupti odit voluptas? Aspernatur, accusamus'),
(52, 'Iced Tea', 220, 100, 'images/7c4affa95283e975a3ff7266a51ed788pic53.png', 'Drinks', 'Cool Drinks', '', 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Ipsa totam repudiandae sint exercitationem dolorem, consequuntur commodi non quia enim accusantium nemo, ea deleniti officia eveniet corrupti odit voluptas? Aspernatur, accusamus'),
(53, 'Lemon Juice', 250, 100, 'images/0144c10f6c73ed522f4d181a4f8fd502pic50.png', 'Drinks', 'Cool Drinks', '', 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Ipsa totam repudiandae sint exercitationem dolorem, consequuntur commodi non quia enim accusantium nemo, ea deleniti officia eveniet corrupti odit voluptas? Aspernatur, accusamus'),
(54, 'Pineapple Juice', 280, 100, 'images/dcdefe7d136e7bc0c656f06c9def73acpic52.png', 'Drinks', 'Cool Drinks', '', 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Ipsa totam repudiandae sint exercitationem dolorem, consequuntur commodi non quia enim accusantium nemo, ea deleniti officia eveniet corrupti odit voluptas? Aspernatur, accusamus'),
(55, 'Plain Tea', 50, 100, 'images/6704243a6a89ab4a8197d1a33342e494pic45.png', 'Drinks', 'Hot Drinks', '', 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Ipsa totam repudiandae sint exercitationem dolorem, consequuntur commodi non quia enim accusantium nemo, ea deleniti officia eveniet corrupti odit voluptas? Aspernatur, accusamus'),
(56, 'Green Tea', 100, 100, 'images/93784429ef24dac70e88f015e319e518pic47.png', 'Drinks', 'Hot Drinks', '', 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Ipsa totam repudiandae sint exercitationem dolorem, consequuntur commodi non quia enim accusantium nemo, ea deleniti officia eveniet corrupti odit voluptas? Aspernatur, accusamus'),
(57, 'Coffee', 100, 100, 'images/ea2a53b4d4b55bc3ca7b9c2e9f605104pic43.png', 'Drinks', 'Hot Drinks', '', 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Ipsa totam repudiandae sint exercitationem dolorem, consequuntur commodi non quia enim accusantium nemo, ea deleniti officia eveniet corrupti odit voluptas? Aspernatur, accusamus'),
(58, 'Beli Tea', 100, 100, 'images/b8723c24de444bccf0cdd6c71f11de6dpic46.png', 'Drinks', 'Hot Drinks', '', 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Ipsa totam repudiandae sint exercitationem dolorem, consequuntur commodi non quia enim accusantium nemo, ea deleniti officia eveniet corrupti odit voluptas? Aspernatur, accusamus'),
(59, 'Tea', 150, 100, 'images/c678fc527e845418197bc0a193ed24f9pic44.png', 'Drinks', 'Hot Drinks', '', 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Ipsa totam repudiandae sint exercitationem dolorem, consequuntur commodi non quia enim accusantium nemo, ea deleniti officia eveniet corrupti odit voluptas? Aspernatur, accusamus'),
(60, 'Hot Chocolate', 200, 100, 'images/07e9f72f842f0b1b76d3fa6844740712pic1.png', 'Drinks', 'Hot Drinks', '', 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Ipsa totam repudiandae sint exercitationem dolorem, consequuntur commodi non quia enim accusantium nemo, ea deleniti officia eveniet corrupti odit voluptas? Aspernatur, accusamus');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `add_orders`
--
ALTER TABLE `add_orders`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `admin_login`
--
ALTER TABLE `admin_login`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `confirm`
--
ALTER TABLE `confirm`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `food`
--
ALTER TABLE `food`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `add_orders`
--
ALTER TABLE `add_orders`
  MODIFY `id` int(5) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `admin_login`
--
ALTER TABLE `admin_login`
  MODIFY `id` int(3) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `confirm`
--
ALTER TABLE `confirm`
  MODIFY `id` int(255) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `food`
--
ALTER TABLE `food`
  MODIFY `id` int(5) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=61;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
