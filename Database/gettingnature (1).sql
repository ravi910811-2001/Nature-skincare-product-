-- phpMyAdmin SQL Dump
-- version 4.5.1
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: Jun 19, 2020 at 08:21 AM
-- Server version: 10.1.19-MariaDB
-- PHP Version: 5.6.28

SET SQL_MODE  : "NO_AUTO_VALUE_ON_ZERO";
SET time_zone  : "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `gettingnature`
--

-- --------------------------------------------------------

--
-- Table structure for table `orderinfo`
--

CREATE TABLE `orderinfo` (
  `orderno` int(11) NOT NULL,
  `orderdate` date NOT NULL,
  `amount` int(11) NOT NULL,
  `cid` int(11) NOT NULL,
  `cname` varchar(60) NOT NULL,
  `shipaddress` varchar(60) NOT NULL,
  `contact` bigint(20) NOT NULL,
  `mail` varchar(60) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `orderinfo`
--

INSERT INTO `orderinfo` (`orderno`, `orderdate`, `amount`, `cid`, `cname`, `shipaddress`, `contact`, `mail`) VALUES
(0, '2019-02-10', 1840, 0, 'ahila', 'plotno 7 indira nagar', 987897898, 'ahila@gmail.com'),
(0, '2019-02-23', 880, 0, 'Ahila', 'Park town, Madurai', 7092013708, 'ahiil@gmail.com');

-- --------------------------------------------------------

--
-- Table structure for table `productdetail`
--

CREATE TABLE `productdetail` (
  `productid` int(11) NOT NULL,
  `productname` varchar(100) NOT NULL,
  `shopname` varchar(80) NOT NULL,
  `ingredients` varchar(120) NOT NULL,
  `quantity` varchar(50) NOT NULL,
  `benefits` varchar(250) NOT NULL,
  `price` int(11) NOT NULL,
  `shelflife` varchar(80) NOT NULL,
  `image` varchar(80) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `productdetail`
--

INSERT INTO `productdetail` (`productid`, `productname`, `shopname`, `ingredients`, `quantity`, `benefits`, `price`, `shelflife`, `image`) VALUES
(1, 'Beetroot Pack', 'Spa In A Jar', 'Beetroot, Aloe vera, Vettiver, Neem, Flour', '50g', 'Beetroot face pack bids adieu to all dark spots and blemishes. It Eliminates toxins and leaves a healthy glowing skin. It also Maintains elasticity', 280, '6 months', 'bp1.jpg'),
(2, 'Glow Serum', 'Spa In A Jar', 'Extract of Herbs like Manjasthi, Sandal, Vettiver, Jada majal, Licorice, Flowers and Fruits', '20ml', ' Face glow serum rejuvenates and pampers your skin, say goodbye to dark circles and puffiness, itâ€™s a night care regimen helps maintain a healthy glowing skin! It Gives even skin tone and reduces pigmentations', 320, '6 months', 'gs1.jpg'),
(4, 'Coffee Scrub', 'Spa In A Jar', 'Coffee, Olive oil, Butter, Oatmeal, Essential oils, Lime, Honey, Vit e oil', '100g', 'Coffee scrub reduces wrinkles and cellulites, prevents sagging and premature aging. It has a good antioxidant property, acts as a good exfoliator removes all dead cells and gives a healthy glowing skin. It also makes your skin smooth and soft', 300, '6 months', 'cs1.jpg');

-- --------------------------------------------------------

--
-- Table structure for table `shopinfo`
--

CREATE TABLE `shopinfo` (
  `shopid` int(11) NOT NULL,
  `shopname` varchar(60) NOT NULL,
  `origin` varchar(70) NOT NULL,
  `foundername` varchar(100) NOT NULL,
  `description` varchar(500) NOT NULL,
  `link` varchar(100) NOT NULL,
  `logo` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `shopinfo`
--

INSERT INTO `shopinfo` (`shopid`, `shopname`, `origin`, `foundername`, `description`, `link`, `logo`) VALUES
(1, 'Spa In A Jar', 'Madurai', 'Mrs. Prarthana Krishna', 'I am a dentist by profession. Life fulfilling work is something you get only when you feel true passion towards something, this has always been my passion so I thought itâ€™s never late to start with what I have always wanted!', 'https://www.instagram.com/spainajar_2k18/', 'spa.jpg'),
(2, 'La Beaute Essentials', 'Chennai ', 'Ms. Sindhuja S.A and Ms.Hamsapriya .B', 'Basically with a super sensitive skin, commercial skin care and cosmetics never really suited me and my mom, a cosmetologist helped me make my own skin care products. Eventually I started experimenting most of the things from the kitchen on to my skin. This passion turned into career. We believe in providing the best for every skin types. Our ingredients are grown in our own garden and few which can''t be grown inside are sourced from authentic sources.', 'https://www.instagram.com/la_beaute_essentials/?hl=en', 'la.jpg'),
(4, 'Natural Beauty', 'Tiruppur', 'Ms.Kausalya. L', 'I have completed my Engineering degree. Basically, I am a nature lover and stand strongly against chemicals. Iâ€™ve been using homemade products for my skin and hair made from natural ingredients for many years which are prepared by my grandma and mom. One day, when I happened to surf about the ingredients used in popular soaps and shampoos, I was shell- shocke d to know that it contains hazardous chemicals such as parabens, triclosan, sodium lauryl sulphate, sodium laureth sulphate, silicones, ', 'https://www.instagram.com/naturalbeautytirupur/?hl=en', 'nb.jpg'),
(5, 'Thuyaa', 'Coimbatore', 'Mrs. Lakshmi Prabha Vijay', 'I care deeply for the world I live in. The world I wish to leave in a better shape to my children and theirâ€¦ As a mother of two children I wanted a simple and healthy lifestyle for my children. I wanted to give them the best of things that I received as a child from my parents like shikakai instead of shampoo, herbal powders instead of commercial soaps and many more including kitchen gardens. In search of giving them the same care, I began hunting for chemical free personal care products. I wa', 'https://www.instagram.com/thuyaaskincare/', 'thuyaa.jpg');

-- --------------------------------------------------------

--
-- Table structure for table `shopping`
--

CREATE TABLE `shopping` (
  `pid` int(11) NOT NULL,
  `pname` varchar(60) NOT NULL,
  `sname` varchar(70) NOT NULL,
  `price` int(11) NOT NULL,
  `quantity` int(11) NOT NULL,
  `amount` int(11) NOT NULL,
  `cid` int(11) NOT NULL,
  `pdate` date NOT NULL,
  `cname` varchar(60) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `shopping`
--

INSERT INTO `shopping` (`pid`, `pname`, `sname`, `price`, `quantity`, `amount`, `cid`, `pdate`, `cname`) VALUES
(1, 'Beetroot Pack', 'Spa In A Jar', 280, 2, 560, 0, '2019-02-10', 'ahila'),
(2, 'Glow Serum', 'Spa In A Jar', 320, 1, 320, 0, '2019-02-10', 'ahila'),
(2, 'Glow Serum', 'Spa In A Jar', 320, 3, 960, 0, '2019-02-10', 'ahila'),
(1, 'Beetroot Pack', 'Spa In A Jar', 280, 2, 560, 0, '2019-02-23', 'Ahila'),
(2, 'Glow Serum', 'Spa In A Jar', 320, 1, 320, 0, '2019-02-23', 'Ahila'),
(1, 'Beetroot Pack', 'Spa In A Jar', 280, 2, 560, 0, '2019-03-03', 'ahila'),
(3, 'Soft Touch', 'Natural Beauty', 125, 3, 375, 0, '2019-03-03', 'ahila');

-- --------------------------------------------------------

--
-- Table structure for table `userinfo`
--

CREATE TABLE `userinfo` (
  `uid` int(11) NOT NULL,
  `cusname` varchar(60) NOT NULL,
  `contact` bigint(20) NOT NULL,
  `address` varchar(60) NOT NULL,
  `email` varchar(70) NOT NULL,
  `password` varchar(60) NOT NULL,
  `confirm` varchar(60) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `userinfo`
--

INSERT INTO `userinfo` (`uid`, `cusname`, `contact`, `address`, `email`, `password`, `confirm`) VALUES
(0, 'ahila', 7877886757, 'Park Town Madurai', 'ahila@gmail.com', 'ahila', 'ahila'),
(0, 'Ahila', 7092013708, 'Park Town, Madurai', 'ahiil@gmail.com', '123', '123');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `productdetail`
--
ALTER TABLE `productdetail`
  ADD PRIMARY KEY (`productid`);

--
-- Indexes for table `shopinfo`
--
ALTER TABLE `shopinfo`
  ADD PRIMARY KEY (`shopid`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `productdetail`
--
ALTER TABLE `productdetail`
  MODIFY `productid` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;
--
-- AUTO_INCREMENT for table `shopinfo`
--
ALTER TABLE `shopinfo`
  MODIFY `shopid` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
