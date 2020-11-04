-- phpMyAdmin SQL Dump
-- version 4.9.2
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Aug 03, 2020 at 07:47 PM
-- Server version: 10.4.10-MariaDB
-- PHP Version: 7.3.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `gadgetskart`
--

-- --------------------------------------------------------

--
-- Table structure for table `admin`
--

CREATE TABLE `admin` (
  `email` varchar(40) NOT NULL,
  `password` varchar(40) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `admin`
--

INSERT INTO `admin` (`email`, `password`) VALUES
('admin@gadgetskart.in', 'admin123');

-- --------------------------------------------------------

--
-- Table structure for table `cart`
--

CREATE TABLE `cart` (
  `id` int(6) NOT NULL,
  `product_id` int(6) NOT NULL,
  `product_name` varchar(40) NOT NULL,
  `category` varchar(20) NOT NULL,
  `price` int(6) NOT NULL,
  `quantity` int(3) DEFAULT 1,
  `email` varchar(40) NOT NULL,
  `seller_email` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `cart`
--

INSERT INTO `cart` (`id`, `product_id`, `product_name`, `category`, `price`, `quantity`, `email`, `seller_email`) VALUES
(50, 16, 'sanDisk SD card 16GB', 'SD card', 299, 1, 'sowndharyasivaraj@gmail.com', 'gopal@gmail.com'),
(55, 6, 'JBL bluetooth speaker', 'speaker', 3699, 1, 'maalik@gmail.com', 'gopal@gmail.com');

-- --------------------------------------------------------

--
-- Table structure for table `products`
--

CREATE TABLE `products` (
  `product_id` int(5) NOT NULL,
  `product_name` varchar(70) NOT NULL,
  `category` varchar(20) NOT NULL,
  `brand` varchar(20) NOT NULL,
  `color` varchar(20) NOT NULL,
  `aprice` int(6) NOT NULL,
  `oprice` int(6) NOT NULL,
  `path` varchar(200) NOT NULL,
  `description` varchar(400) NOT NULL,
  `quantity` int(4) NOT NULL,
  `user` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `products`
--

INSERT INTO `products` (`product_id`, `product_name`, `category`, `brand`, `color`, `aprice`, `oprice`, `path`, `description`, `quantity`, `user`) VALUES
(1, 'sony wired headphone', 'earphone', 'sony', 'red', 2499, 2000, 'images/earphone.png', 'Smart Listening by Adaptive Sound Control automatically adjusts ambient sound to your activity', 50, 'nandalal@gmail.com'),
(2, 'Charger for Samsung Galaxy', 'charger', 'samsung', 'black', 999, 449, 'images/charger1.png', 'Power up your Smartphone anywhere, anytime with Shopbell 2.1A portable USB Charger. It is compatible with most Smartphones and is your perfect companion in providing your Smartphone with required charging and it is your perfect companion in providing your Smartphone with required charging. Constant voltage charging mode for safe usage.', 47, 'gopal@gmail.com'),
(3, 'iphone 10 - 3GB - 32GB', 'mobile', 'apple', 'white', 54999, 50000, 'images/iphone.png', 'The iPhone XR has arrived to scintillate our senses with a host of features, such as the Liquid Retina Display etc.,', 49, 'nandalal@gmail.com'),
(4, 'apple watch 3 with GPS', 'watch', 'apple', 'white', 14999, 10000, 'images/watch.png', 'The Apple Watch 3 is a sleek accessory that\'s a must-have if you\'re all about staying fit.', 50, 'nandalal@gmail.com'),
(5, 'mi powerbank 2i 10000mAh', 'powerbank', 'redmi', 'matte blue', 899, 700, 'images/mipowerbank.png', 'Compatible with all smartphones \r\nCharging Cable Included', 48, 'nandalal@gmail.com'),
(6, 'JBL bluetooth speaker', 'speaker', 'JBL', 'blue', 4500, 3699, 'images/jblbluetoothspeaker.png', 'With this speaker from JBL, you can breathe life into your party with the legendary JBL Signature Sound. Thanks to its One-touch Button and Noise-cancelling Speakerphone, you can talk to your loved ones seamlessly.', 50, 'gopal@gmail.com'),
(7, 'boat earphones wireless', 'earphone', 'boat', 'black', 3000, 2399, 'images/boatbtearphone.png', 'This powerful headset features 40-mm Dynamic Drivers, a Passive Noise Cancellation technology, and a Dual Mode to let you dive into your favorite music without interruption or physical limitations.', 50, 'gopal@gmail.com'),
(8, 'JBL bluetooth headphone', 'earphone', 'JBL', 'blue', 3000, 2299, 'images/jblbtearphone.png', 'Shake a leg, headbang, or groove to your favorite songs without disturbing others with the JBL T450 BT Bluetooth Headset. This mobile accessory features a Flat and Foldable Design, Bluetooth Connectivity, and JBL Pure Bass Sound for an immersive aural experience wherever you go.', 49, 'gopal@gmail.com'),
(9, 'sony bluetooth speaker', 'speaker', 'sony', 'black', 3000, 1999, 'images/sonybtspeaker.png', 'Compact yet powerful, the SRS-XB12 portable wireless speaker features the EXTRA BASS technology for deep, punchy sound and a battery life of up to 16 hours.', 48, 'gopal@gmail.com'),
(10, 'apple airpods wireless', 'earphone', 'apple', 'black', 15000, 13999, 'images/apple_airpods.png', 'Now with more talk time, voice-activated Siri access — and a wireless charging case — AirPods deliver an unparalleled wireless headphone experience. Simply take them out and they’re ready to use with all your devices.', 50, 'gopal@gmail.com'),
(11, 'beats headphone wireless', 'earphone', 'beats', 'black', 3000, 2499, 'images/beats_earphone1.png', 'Up to 22 hours of listening time. Up to 40 hours without Noise Cancelling or Transparency & on ear performance', 50, 'gopal@gmail.com'),
(12, 'skullcandy earphone', 'earphone', 'skullcandy', 'black', 3500, 1899, 'images/skullcandybtearphone.png', 'Flatwire: Stays tangle free even in your pocket\r\nExtra bass: Add extra thump to your music\r\nOne button universal remote to answer and manage your calls', 46, 'nandalal@gmail.com'),
(13, 'mi smart band 3 regular', 'watch', 'redmi', 'black', 2599, 1899, 'images/mi-band_3.png', 'With the Mi Band 3 wrist wear, keep an eye on your daily fitness activities, and also, do not miss any important call, text, and/or app notification on your smartphone. This smart wearable device features an OLED Touchscreen, a 5ATM (up to 50 M) Water-resistant Rating, and a Daily Step Count and Heart Rate Monitor to ensure that you monitor your physical activities all the time.', 48, 'gopal@gmail.com'),
(14, 'iphone SE 2020 64GB', 'mobile', 'apple', 'red', 45999, 42499, 'images/iphonesered.png', 'iPhone SE is the most powerful 11.94-cm (4.7) iPhone ever. It features the incredibly-fast A13 Bionic for incredible performance in apps, games, and photography, Portrait mode for studio-quality portraits and six lighting effects, Next-generation Smart HDR for incredible detail across highlights and shadows, Cinematic-quality 4K video, and all the advanced features of iOS. With long battery life.', 49, 'gopal@gmail.com'),
(15, 'sanDisk Cruzer Blade 16GB ', 'pendrive', 'sandisk', 'black', 450, 349, 'images/sandisk16gbcb.png', 'Higadget SanDisk Cruzer Blade 16GB USB 2.0 flash drive boasts a classy compact design featuring a large data storage capacity. Now you can conveniently backup, transfer, share and carry your favourite media like movies, music, video clips or pictures with you everywhere you go.', 46, 'nandalal@gmail.com'),
(16, 'sanDisk SD card 16GB', 'SD card', 'sanDisk', 'black', 400, 299, 'images/sandisksdcard16gb.png', 'With the SanDisk Ultra 16 GB MicroSDHC Class 10 Memory Card, you can now bid goodbye to storage-related issues on your phone. It also delivers smooth performance. It comes with a fast transfer speed, which lets you quickly transfer photos and videos to your computer.', 46, 'gopal@gmail.com'),
(17, 'MicroSDXC PRO+ Memory Card w/ ', 'SD card', 'samsung', 'black', 3599, 1999, 'images/samsungsdcard128gb.png', 'Up to 95MB/s Read and 90MB/s Write speed with Class 10 and U3 compatibility\r\n\r\nGreat Performance in Action Cameras, DSLRs, High-End Smartphones, and Tablet PCs', 49, 'gopal@gmail.com'),
(18, 'realme 10000 mAh Power Bank', 'powerbank', 'realme', 'yellow', 1699, 1299, 'images/5f0ffeb548eb18.94658975.realmepowebank.png', 'Don’t panic and rush to find a plug point if you’re low on charge. This 10,000 mAh powerbank from Realme will have your back with its premium features. It features a Type-C port with simultaneous fast-charging, Power Delivery mode to help you charge your laptop too.', 49, 'nandalal@gmail.com'),
(19, 'Samsung Level U Headphone', 'earphone', 'samsung', 'blue', 3000, 2199, 'images/5f101d60ef3db6.91229959.samsunglevel2.png', 'The Samsung Level U Wireless Headset offers a Comfortable Fit and More Battery Power so that your day is filled with your favourite music. It also comes with Microphones that you can use to enjoy crystal-clear voice quality.', 50, 'nandalal@gmail.com');

-- --------------------------------------------------------

--
-- Table structure for table `purchase`
--

CREATE TABLE `purchase` (
  `id` int(6) NOT NULL,
  `name` varchar(100) NOT NULL,
  `email` varchar(50) NOT NULL,
  `mobile` int(10) NOT NULL,
  `total` varchar(8) NOT NULL,
  `city` varchar(30) NOT NULL,
  `landmark` varchar(100) NOT NULL,
  `pincode` int(7) NOT NULL,
  `mode` varchar(30) NOT NULL,
  `date` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `purchase`
--

INSERT INTO `purchase` (`id`, `name`, `email`, `mobile`, `total`, `city`, `landmark`, `pincode`, `mode`, `date`) VALUES
(1, 'Sowndharya S', 'sowndharyasivaraj@gmail.com', 2147483647, '₹.2299', 'tirupur', 'pnn', 123456, 'debit card', '01:12:20 21-07-2020'),
(2, 'Sowndharya S', 'sowndharyasivaraj@gmail.com', 2147483647, '₹.1899', 'tirupur', 'pnn', 123456, 'credit card', '02:31:49 21-07-2020'),
(3, 'Sowndharya S', 'sowndharyasivaraj@gmail.com', 2147483647, '₹.50000', 'tirupur', 'pnn', 123456, 'UPI', '02:32:32 21-07-2020'),
(4, 'Tamil Arasu', 'tamilarasu@gmail.com', 2147483647, '₹.748', 'Tirupur', 'pn road', 741852, 'credit card', '11:34:59 28-07-2020'),
(5, 'Tamil Arasu', 'tamilarasu@gmail.com', 2147483647, '₹.748', 'Tirupur', 'pn road', 741852, 'credit card', '11:34:59 28-07-2020'),
(6, 'Tamil Arasu', 'tamilarasu@gmail.com', 2147483647, '₹.598', 'Tirupur', 'pn road', 741852, 'UPI', '03:01:54 28-07-2020'),
(7, 'Maalik Arjun', 'maalik@gmail.com', 2147483647, '₹.3798', 'Chennai', 'T.Nagar', 600028, 'UPI', '10:05:48 03-08-2020');

-- --------------------------------------------------------

--
-- Table structure for table `sales`
--

CREATE TABLE `sales` (
  `product_id` int(10) NOT NULL,
  `product_name` varchar(50) NOT NULL,
  `quantity` int(6) NOT NULL,
  `price` int(7) NOT NULL,
  `user` varchar(50) NOT NULL,
  `seller` varchar(50) NOT NULL,
  `date` varchar(30) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `sales`
--

INSERT INTO `sales` (`product_id`, `product_name`, `quantity`, `price`, `user`, `seller`, `date`) VALUES
(8, 'JBL bluetooth headphone', 1, 2299, 'sowndharyasivaraj@gmail.com', 'gopal@gmail.com', '01:12:20 21-07-2020'),
(13, 'mi smart band 3 regular', 1, 1899, 'sowndharyasivaraj@gmail.com', 'gopal@gmail.com', '02:31:49 21-07-2020'),
(3, 'iphone 10 - 3GB - 32GB', 1, 50000, 'sowndharyasivaraj@gmail.com', 'nandalal@gmail.com', '02:32:32 21-07-2020'),
(16, 'sanDisk SD card 16GB', 1, 299, 'tamilarasu@gmail.com', 'gopal@gmail.com', '11:34:59 28-07-2020'),
(2, 'Charger for Samsung Galaxy', 1, 449, 'tamilarasu@gmail.com', 'gopal@gmail.com', '11:35:00 28-07-2020'),
(16, 'sanDisk SD card 16GB', 2, 299, 'tamilarasu@gmail.com', 'gopal@gmail.com', '03:01:54 28-07-2020'),
(12, 'skullcandy earphone wireless', 2, 1899, 'maalik@gmail.com', 'nandalal@gmail.com', '10:05:48 03-08-2020');

-- --------------------------------------------------------

--
-- Table structure for table `seller`
--

CREATE TABLE `seller` (
  `id` int(5) NOT NULL,
  `firmname` varchar(40) NOT NULL,
  `owner` varchar(20) NOT NULL,
  `email` varchar(40) NOT NULL,
  `mobile` bigint(10) NOT NULL,
  `gender` varchar(10) NOT NULL,
  `password` varchar(40) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `seller`
--

INSERT INTO `seller` (`id`, `firmname`, `owner`, `email`, `mobile`, `gender`, `password`) VALUES
(1, 'baba gadget store', 'nanda lala', 'nandalal@gmail.com', 9517894562, 'male', 'd6a9a933c8aafc51e55ac0662b6e4d4a'),
(11, 'gadgets ghazana', 'gopal', 'gopal@gmail.com', 7894562582, 'male', '8ea98bf1150a5076d408c50f116901ab'),
(13, 'mango accessories', 'markus', 'markus@gmail.com', 7894562582, 'male', 'd6a9a933c8aafc51e55ac0662b6e4d4a'),
(14, 'apple accessories', 'stephanie', 'stephanie@gmail.com', 9638527123, 'female', 'd6a9a933c8aafc51e55ac0662b6e4d4a'),
(22, 'manly gadgets', 'mandana', 'mandana@gmail.com', 7485961425, 'female', 'd6a9a933c8aafc51e55ac0662b6e4d4a');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` int(5) NOT NULL,
  `firstname` varchar(20) NOT NULL,
  `lastname` varchar(20) NOT NULL,
  `email` varchar(40) NOT NULL,
  `mobile` bigint(10) DEFAULT NULL,
  `gender` varchar(10) NOT NULL,
  `password` varchar(40) NOT NULL,
  `city` varchar(30) NOT NULL,
  `landmark` varchar(50) NOT NULL,
  `pincode` int(6) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `firstname`, `lastname`, `email`, `mobile`, `gender`, `password`, `city`, `landmark`, `pincode`) VALUES
(1, 'Tamil', 'Arasu', 'tamilarasu@gmail.com', 9638527421, 'male', 'e10adc3949ba59abbe56e057f20f883e', 'Tirupur', 'pn road', 741852),
(2, 'Sowndharya', 'S', 'sowndharyas@gmail.com', 7894561230, 'female', 'e10adc3949ba59abbe56e057f20f883e', 'tirupur', 'pnn', 785412),
(4, 'Maalik', 'Arjun', 'maalik@gmail.com', 7894562582, 'male', 'e10adc3949ba59abbe56e057f20f883e', 'Chennai', 'T.Nager', 600028);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `admin`
--
ALTER TABLE `admin`
  ADD PRIMARY KEY (`email`);

--
-- Indexes for table `cart`
--
ALTER TABLE `cart`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `products`
--
ALTER TABLE `products`
  ADD PRIMARY KEY (`product_id`);

--
-- Indexes for table `purchase`
--
ALTER TABLE `purchase`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `seller`
--
ALTER TABLE `seller`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `cart`
--
ALTER TABLE `cart`
  MODIFY `id` int(6) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=56;

--
-- AUTO_INCREMENT for table `products`
--
ALTER TABLE `products`
  MODIFY `product_id` int(5) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=20;

--
-- AUTO_INCREMENT for table `purchase`
--
ALTER TABLE `purchase`
  MODIFY `id` int(6) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT for table `seller`
--
ALTER TABLE `seller`
  MODIFY `id` int(5) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=25;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` int(5) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
