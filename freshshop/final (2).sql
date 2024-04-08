-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Oct 16, 2021 at 08:52 AM
-- Server version: 10.4.20-MariaDB
-- PHP Version: 8.0.8

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `final`
--

-- --------------------------------------------------------

--
-- Table structure for table `admin`
--

CREATE TABLE `admin` (
  `id` int(11) NOT NULL,
  `user_name` varchar(255) NOT NULL,
  `password` varchar(255) NOT NULL,
  `name` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `admin`
--

INSERT INTO `admin` (`id`, `user_name`, `password`, `name`, `email`) VALUES
(1, 'sachintha', '123', 'sachintha', ''),
(2, 'isuru', 'abc', 'isuru', '');

-- --------------------------------------------------------

--
-- Table structure for table `buyer`
--

CREATE TABLE `buyer` (
  `id` int(11) NOT NULL,
  `fname` varchar(255) NOT NULL,
  `lname` varchar(255) NOT NULL,
  `username` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `address` varchar(255) NOT NULL,
  `contactno` varchar(10) NOT NULL,
  `password` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `buyer`
--

INSERT INTO `buyer` (`id`, `fname`, `lname`, `username`, `email`, `address`, `contactno`, `password`) VALUES
(26, 'siri', 'max', 'siri', 'siri1@gmail.com', 'kandy', '0781234567', '$2y$04$GXYeC6HDPPh4vQNMGI.gH.o3fv4C09yfOazbJEk97rb19FaWVomme'),
(27, 'nimal', 'perera', 'nimal', 'nimal@gmail.com', 'colombo', '0787654321', '$2y$04$9jUQe8O4LIEM5g7uI3McTOlP5DHMmc3FEyZ2nbRVIFwVvS.iQA0zS'),
(28, 'kavindu', 'lakshan', 'kavindu', 'kavindu@gmail.com', 'Mathale', '0785674568', '$2y$04$AE7FBwb2s.r5QaAZN41Amew.asUQX6KKOUlsqw94D/p.UreFwHixm'),
(29, 'kamal', 'silwa', 'kamal', 'kamla@gmail.com', 'Mathale', '0785675674', '$2y$04$H91sItbz2OwiW0H9GuNlkuxv2NEH9C1o7QZ/U4X3ccJ8DoamUYFz6'),
(31, 'malan', 'kumara', 'malankumara', 'malankumra@gmail.com', 'Kurunegala', '0787654321', '$2y$04$7JAvlcKGpIC8HOA81h8Q4eq8b0KPvtyijFL.NXMFqlE2XYisQGFS6'),
(33, 'kelum', 'kumara', 'kelum', 'kelum@gmail.com', 'Kurunegala', '0781234567', '$2y$04$70pxYq.Hy8z0BNQXCeRy1e78RW5Rlg.DXiKciFTtcFX0Gbh7JBSXy'),
(34, 'saman', 'Geeth', 'Geeth', 'geeth@gmail.com', 'Kurunegala', '0785675690', '$2y$04$yRN/hkAxrwI.mIZiidm9susRkLA3qkO.g7BB.sLwKjY1y1yS.cIdC'),
(35, 'sehan', 'tharindu', 'sehantharindu', 'sehan1@gmail.com', 'Kurunegala', '0764455367', '$2y$04$JpNSAYD6/IapeeHAVgnuY.CGgYFBTBY3NyaTcB5/Wx.9o.IsxjAPO'),
(36, 'sachintha', 'yomal', 'sachinthayomal', 'yomalsachintha4@gmail.com', 'kandy', '0785675674', '$2y$04$sQ8RdnlotUlVCd42FpxCA.bAc88TQwRtAJxWipxNSMjxPXSHLuZz6');

-- --------------------------------------------------------

--
-- Table structure for table `contact_us`
--

CREATE TABLE `contact_us` (
  `mail_Id` int(11) NOT NULL,
  `sender_name` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `telephone` int(10) NOT NULL,
  `subject` varchar(255) NOT NULL,
  `message` longtext NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `contact_us`
--

INSERT INTO `contact_us` (`mail_Id`, `sender_name`, `email`, `telephone`, `subject`, `message`) VALUES
(39, 'sachintha', 'yomal@gmail.com', 785675674, 'About orders', 'Please send contact no'),
(40, 'yomal', 'yomal12@gmail.com', 764545235, 'About orders', 'I want to change orders.'),
(41, 'Kelum', 'kelum@gmail.com', 715566998, 'Orders', 'please contact me.'),
(42, 'pathum', 'pathum@gmail.com', 753478900, 'orders', 'please send contact no.');

-- --------------------------------------------------------

--
-- Table structure for table `order`
--

CREATE TABLE `order` (
  `O-ID` int(11) NOT NULL,
  `O-Quantity` int(5) NOT NULL,
  `Totail-Price` double(10,2) NOT NULL,
  `O-Date` date NOT NULL,
  `P-ID` int(11) NOT NULL,
  `P-Name` varchar(100) NOT NULL,
  `Price` double(8,2) NOT NULL,
  `B-ID` int(11) NOT NULL,
  `B-Name` varchar(100) NOT NULL,
  `B-Contact-No` int(10) NOT NULL,
  `B-Address` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `order`
--

INSERT INTO `order` (`O-ID`, `O-Quantity`, `Totail-Price`, `O-Date`, `P-ID`, `P-Name`, `Price`, `B-ID`, `B-Name`, `B-Contact-No`, `B-Address`) VALUES
(40, 5, 1500.00, '2021-10-01', 50, 'Onions', 300.00, 31, 'malan', 787654321, 'Kurunegala'),
(41, 8, 3040.00, '2021-10-01', 51, 'Parsnips', 380.00, 31, 'malan', 787654321, 'Kurunegala'),
(43, 6, 1800.00, '2021-10-01', 52, 'potatoes', 300.00, 26, 'siri', 781234567, 'kandy'),
(49, 10, 2500.00, '2021-10-04', 58, 'Cucumber', 250.00, 26, 'siri', 781234567, 'kandy'),
(50, 12, 3240.00, '2021-10-04', 70, 'Carrot', 270.00, 26, 'siri', 781234567, 'kandy'),
(51, 10, 3800.00, '2021-10-05', 75, 'Cucumber', 380.00, 26, 'siri', 781234567, 'kandy'),
(52, 10, 3800.00, '2021-10-05', 75, 'Cucumber', 380.00, 26, 'siri', 781234567, 'kandy'),
(53, 5, 1900.00, '2021-10-05', 75, 'Cucumber', 380.00, 26, 'siri', 781234567, 'kandy'),
(54, 5, 1900.00, '2021-10-05', 75, 'Cucumber', 380.00, 35, 'sehan', 764455367, 'Kurunegala'),
(55, 5, 1900.00, '2021-10-05', 75, 'Cucumber', 380.00, 35, 'sehan', 764455367, 'Kurunegala'),
(56, 5, 1900.00, '2021-10-05', 75, 'Cucumber', 380.00, 35, 'sehan', 764455367, 'Kurunegala'),
(57, 5, 1900.00, '2021-10-05', 75, 'Cucumber', 380.00, 35, 'sehan', 764455367, 'Kurunegala'),
(58, 7, 2660.00, '2021-10-05', 75, 'Cucumber', 380.00, 35, 'sehan', 764455367, 'Kurunegala'),
(59, 7, 2660.00, '2021-10-05', 75, 'Cucumber', 380.00, 35, 'sehan', 764455367, 'Kurunegala');

-- --------------------------------------------------------

--
-- Table structure for table `pass_reset`
--

CREATE TABLE `pass_reset` (
  `id` int(11) NOT NULL,
  `email` varchar(255) NOT NULL,
  `token` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `pass_reset`
--

INSERT INTO `pass_reset` (`id`, `email`, `token`) VALUES
(26, 'yomalsachintha4@gmail.com', '18f39073988f3a5acaa8fcdc5e5cedaf9ba71b06837702006403f0f866edf95b578ed2dcd634ba7b64d65c713e4939abfaf2'),
(27, 'yomalsachintha4@gmail.com', '036eba72785ff020e0ccd6ecce695091c326a6a9324fb82e7870df3ba0eda94a08e7f9f031876694868d24a5c68b61f59d0d'),
(28, 'yomalsachintha4@gmail.com', '7e1124c0aec070bc8e55b5ec5050d8f0931f3f7ae8e8c4a4f61c27833239be300d76b9f596e2f3a8a2d8b0b5c0492e0b2149'),
(29, 'sasanka1piumalrch@gmail.com', 'f3c24ed6d8b0febc4ec2fabd1973a5ad9ca0c49672154fd04d087e33a7f9933838309a5429ca1a8b9454c9ef68a12a110ec9'),
(30, 'anta123@gmail.com', '3d62ec2c4a727a033a19d7e8d25e73d31f3f92a9cbd3866f2b777a4b3cac21f04afed02f8f3b06e43954e171c2739c6d7ecc'),
(31, 'siri1@gmail.com', '38ec4c283c212eea19ddf1c41baf04abc8444660e1e01e97aa5c51b246adc4945192b02747e665ab71971c6312f92a2a5fcd'),
(32, 'siri1@gmail.com', 'd689a1c5fe6d7fe55024f04f0db91f48a001d783f922f9edd89a5480bfe6368687f0c7585f0a3444a37de003c6690860b3fb'),
(33, 'siri1@gmail.com', '35f03c58fe60f37eebfe3e8e60fa27029dac1a0fd9e8b3d74ebe6df7a49737eb92136db08cca6623d550bb5d115bb5434402'),
(34, 'siri1@gmail.com', '483c9f0cac0f8b9e721559b4a12700c2a171df69abe0395c1528f549e41912c0e9eab46b4e54f6ba72d1a2b6e399946ca2eb'),
(35, 'palitha@gmail.com', 'f8152d391b16d7fc74b8e5df99d86e0b693c68e9eac1b143fafe81ab71f74120c768030b8398e56939d21c28832163c1066f'),
(36, 'siri1@gmail.com', '90433765af89fc84c105bfde5ef4293768ef2b96e4652cd7aebdbf45cda845fc20c9e7e587a1f0fda963c423227d2ee97c82'),
(37, 'palitha@gmail.com', 'edc11d3d0e9316576eb99656b06f35d071031225ee4f6b8d30708847325813981acee17513c62fa40dd30407522845350cd8'),
(38, 'siri1@gmail.com', '14451ecfbf55269f04faba4f150b1da77d4c29721b5a7139c295901d9af2b6a4c70cdc9665bf8178ee247885602ea8fc40bd'),
(39, 'palitha@gmail.com', 'f0963a6a6836823eab324600db0f0ba42286f703d72534d89709384e3aa594fefdd700199485d5031ea513afa914449f119a'),
(40, 'siri1@gmail.com', 'b8e288aa34580164042c348155fcbf3f8e9b50528545897c5c98b828c9e3104a69e49ade2fef151f2340ca9107fe22a52d62'),
(41, 'siri1@gmail.com', '1ba691daf1ad4b1ab37071eba267d0ab793eb7c4fb9faab5fa179b3cb317a4dc64567ba001a346ace467d7e723b652b008c2'),
(42, 'siri1@gmail.com', 'f8f037ba13c64350bb027006c121f2203d862c5b2fb2ca1bafc1eccb163d5aad9525ae78fbfdb4d07da0e4930596de1fbbca'),
(43, 'siri1@gmail.com', 'fdff505e3b01886de119906dc4872b5067bc3eae3699b77844c4a8c803d93cc29c5e832ca6ddba44fd24b418e6b7f1f1dcce'),
(44, 'siri1@gmail.com', '4e103176583958b3f5244facbe753c6a469e60bbbdb57e8dbf0afa24cb7d793d963a9c6b6e472f6c8f3347f41be6f30bd6fb'),
(45, 'yomalsachintha4@gmail.com', 'e922c681fabdb2a8dd033615b6c230ceb5313e87f565b207d6f20a9d6718c9a59d80139b2c8d991cd7392b899c3804d3a167'),
(46, 'siri1@gmail.com', '47caf6f695fd94c0c8cc69db6bdc388a526f3c3115915e2145cacd09d8efaa8a605c0cd377fb09661f9dfeeb90c60d237a0c'),
(47, 'yomalsachintha4@gmail.com', '2265543c4eb2f5a977f1f26fedd5833397a24f65e06f965789ee1f0f893d9182031f4c814b197d990ca097534bf777991ce8'),
(48, 'yomalsachintha4@gmail.com', '3c791c295af53a7242defcb4b94450504091c1ce113d95bb21a335d68631e0164d6494a4d5958d1667247f0484cc65d33115'),
(49, 'yomalsachintha4@gmail.com', '3d09a1968ad66cf327ad035ef43d7c04895525ee5d43a51dcd345edeaae1d23bd56cc4753d84be47692c3e27f622e1fd5f66'),
(50, 'yomalsachintha4@gmail.com', '094baeaeb683bf490f6cb1fcd3e600d7f99e9822a5f7b00a78d372365627762148d2716ba2f942431871e3008adab180b00c'),
(51, 'yomalsachintha4@gmail.com', 'b26fe719d486526352074646a665392d903adad7dab9082c2af23f8a48732308e24dffd175f2917a2343173209c7d566ed78'),
(52, 'yomalsachintha4@gmail.com', '33a25631037ad73a1bdebf86cb9c27f1dfd4a501a648256138b642e5a4ebb6c313bc9b79476de98193751de027383b1809d1'),
(53, 'yomalsachintha4@gmail.com', '2604f09fc3c9e8e8b6fa2e2cdd70ba50194b224b302243115e7d10391c433ffda04087495632f99451c011d15fd90f4a1aa6'),
(54, 'yomalsachintha4@gmail.com', 'da6687f65464b10b8c42ce76736e4ded0153ee054e91ef89759008a6e34efbd99ec31d7d4ddf2b9c9f833ebc79ad8748a5d0'),
(55, 'yomalsachintha4@gmail.com', '08c350082567e0efac470dde5b064e79c21e9eb3ad0c1cd323a43be119d261155a4e5d5b3b483456f8ec4b3b04eac6ffeb5b'),
(56, 'yomalsachintha4@gmail.com', '6ee2c9460ab09d44b4a2d4e173cff733da9b2aa13a6b7ce4393d196696c8af358ec48a8a2c017eebec3490c75ec4b31d5d5d'),
(57, 'yomalsachintha4@gmail.com', '1048b0bf4c341e29f125bdc4edcc2e291b7ecd0a793b8cf8719957e65ef7ca4472fb93523607e8595f887e8b330852391204'),
(58, 'yomalsachintha4@gmail.com', 'f7883550eb500128dba93933d2f2a61f10bb31ba0630362ac83f96389753d4d8f06eb14eede8dcddc67fdcf181f6e11811d4'),
(59, 'yomalsachintha4@gmail.com', '90f3c891d6f40aafc3bb7cdcb286ca7c0629376cb021bf52d5137d18a717951608dd61ffd323211e9f57cea9aa8505179bb5'),
(60, 'yomalsachintha4@gmail.com', '06fb1758047a309e946d52ac7fe9687da5d5f7bfd3648f307712d07570f3a86d7dbf673c6a04d1635a51722d15e6bd0671a5'),
(61, 'yomalsachintha4@gmail.com', '2018e2ded334234c9a52e210a120c406d432412defabb707f8e63bc8a16166661cbdfc44021d1e9d544d1eabe4535bf99c5f'),
(62, 'yomalsachintha4@gmail.com', '95f898c4348eeab8354910597cd570fb92cad4f01af96871317fcfca7d4b94c4c9bbf37f0ae5591e69dc1d553745533d5549'),
(63, 'yomalsachintha4@gmail.com', '655b8755eda924a35b7af23bbeb5454ef82375ca9f2739aaad6170e7d177bfbdece16454278b18b8dff7fb05f625fb3a75fe'),
(64, 'yomalsachintha4@gmail.com', '5489da733d1c4a31ee8b80192aa042dc0ebb3289c8fd1139808bbad67d2d140d2c375437e253287586c62da50350a9be74e6'),
(65, 'yomalsachintha4@gmail.com', 'f799ceecd010beba86630d49d05ee105afdd8e568b7d72016604ed5e45f3d33a75250d39b737cca8ff49f5650cbd70b16e4b'),
(66, 'yomalsachintha4@gmail.com', 'a780bbb476f535ebbb62dd91fc2ce91b610219b90f73f26448ccd094de2c68ee781a54488f27c6d1fa60143f1af1b9fcf194'),
(67, 'yomalsachintha4@gmail.com', '74e55f6a1ae956ae2b06e5c4b837dc3c8630c4b778dfb67720d13ea0d479735c9a9b5dcc35fb26f4bcafda69bff3f703e27a');

-- --------------------------------------------------------

--
-- Table structure for table `productstb`
--

CREATE TABLE `productstb` (
  `id` int(11) NOT NULL,
  `productname` varchar(100) NOT NULL,
  `productquantity` int(5) NOT NULL,
  `productprice` double(8,2) NOT NULL,
  `productdescription` varchar(100) NOT NULL,
  `date` date NOT NULL,
  `image` varchar(100) NOT NULL,
  `sellerid` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `productstb`
--

INSERT INTO `productstb` (`id`, `productname`, `productquantity`, `productprice`, `productdescription`, `date`, `image`, `sellerid`) VALUES
(50, 'Onions', 62, 300.00, 'D.B.kumara<br>Kandy<br>0767778889', '2021-09-29', 'R-Onions.jpg', 13),
(51, 'Parsnips', 29, 380.00, 'N.M.Salith<br>Medirigiriya<br>0772872871', '2021-09-29', 'R-Parsnips.jpg', 13),
(52, 'potatoes', 24, 300.00, 'J.M.Piumali<br>Kandy<br>0767778889', '2021-09-29', 'R-POTATOES.jpg', 13),
(58, 'Cucumber', 40, 250.00, 'K.M.Mayura<br>Polonnaruwa<br>0767787879', '2021-09-29', 'M-cucumber.jpg', 13),
(68, 'potatoes', 98, 270.00, 'K.M.Mahesh<br>Mawanella<br>0764554553', '2021-09-30', 'R-POTATOES.jpg', 15),
(69, 'Sweet Potatoes', 70, 300.00, 'C.P.Shanika<br>Polonnaruwa<br>0789905778', '2021-09-30', 'R-Sweet potato.jpg', 15),
(70, 'Carrot', 68, 270.00, 'N.M.Pathum<br>Moratuwa<br>0788989347', '2021-10-01', 'R-Carrot.jpg', 13),
(71, 'Cucumber', 65, 320.00, 'B.D.Priyantha<br>0764545234', '2021-10-01', 'M-cucumber.jpg', 13),
(72, 'Gem Squash', 70, 260.00, 'N.M.Samantha<br>Medirigiriya<br>0772873441', '2021-10-01', 'M-Gem Squash.jpg', 13),
(75, 'Cucumber', 41, 380.00, 'sachintha<br>kandy<br>0785504545', '2021-10-05', 'M-cucumber.jpg', 16);

-- --------------------------------------------------------

--
-- Table structure for table `seller`
--

CREATE TABLE `seller` (
  `id` int(11) NOT NULL,
  `fname` varchar(255) NOT NULL,
  `lname` varchar(255) NOT NULL,
  `contactno` varchar(15) NOT NULL,
  `username` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `address` varchar(255) NOT NULL,
  `password` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `seller`
--

INSERT INTO `seller` (`id`, `fname`, `lname`, `contactno`, `username`, `email`, `address`, `password`) VALUES
(11, 'Sanka', 'madu', '0712345689', 'Goviya', 'Goviya@gmail.com', 'Colombo', '$2y$04$PxEZ3U07gERd/Byds1yaeeFx0i6AG3kbqMDZ5wbieiMcqpIqdvESi'),
(12, 'saman', 'kumara', '0787654321', 'saman', 'saman@gmail.com', 'kandy', '$2y$04$nAxgtQLtePjReYTeThQUv.MvZKVUs6cW8Zyt7pbExjmEcvLFENA/6'),
(13, 'palitha', 'kumara', '0785556667', 'palitha', 'palitha@gmail.com', 'kandy', '$2y$04$WL9VXSx5tLJZ0s3fZTinneTZUwxQFpHr4tU0inbkhWhP9u7f.A.c2'),
(14, 'malith', 'perera', '0715566779', 'malith', 'malith@gmail.com', 'Kurunegala', '$2y$04$VUNetcI8TOyQIgrpga7Xle5MfffM0yycOCGzFkufwmw1S/CO.7YnW'),
(15, 'lahiru', 'perera', '0785556667', 'lahiru', 'lahiru@gmail.com', 'kandy', '$2y$04$Tnrl8zFMyUDcVvIdUfAJ0.KvDcmu8vhzO0lenf4Ax6/7u2fTrgtSy'),
(16, 'sachintha', 'yomal', '0785504545', 'yomal', 'yomalsachintha4@gmail.com', 'kandy', '$2y$04$.ziSJZBmzO6ukTkk11rNEe.AKi6EblpUuGwzK2bK05xbhEZT8O81.');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `buyer`
--
ALTER TABLE `buyer`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `contact_us`
--
ALTER TABLE `contact_us`
  ADD PRIMARY KEY (`mail_Id`);

--
-- Indexes for table `order`
--
ALTER TABLE `order`
  ADD PRIMARY KEY (`O-ID`),
  ADD KEY `B-ID` (`B-ID`),
  ADD KEY `P-ID` (`P-ID`);

--
-- Indexes for table `pass_reset`
--
ALTER TABLE `pass_reset`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `productstb`
--
ALTER TABLE `productstb`
  ADD PRIMARY KEY (`id`),
  ADD KEY `sellerid` (`sellerid`);

--
-- Indexes for table `seller`
--
ALTER TABLE `seller`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `buyer`
--
ALTER TABLE `buyer`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=37;

--
-- AUTO_INCREMENT for table `contact_us`
--
ALTER TABLE `contact_us`
  MODIFY `mail_Id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=43;

--
-- AUTO_INCREMENT for table `order`
--
ALTER TABLE `order`
  MODIFY `O-ID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=60;

--
-- AUTO_INCREMENT for table `pass_reset`
--
ALTER TABLE `pass_reset`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=68;

--
-- AUTO_INCREMENT for table `productstb`
--
ALTER TABLE `productstb`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=76;

--
-- AUTO_INCREMENT for table `seller`
--
ALTER TABLE `seller`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=17;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `order`
--
ALTER TABLE `order`
  ADD CONSTRAINT `order_ibfk_1` FOREIGN KEY (`B-ID`) REFERENCES `buyer` (`id`),
  ADD CONSTRAINT `order_ibfk_2` FOREIGN KEY (`P-ID`) REFERENCES `productstb` (`id`);

--
-- Constraints for table `productstb`
--
ALTER TABLE `productstb`
  ADD CONSTRAINT `productstb_ibfk_1` FOREIGN KEY (`sellerid`) REFERENCES `seller` (`id`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
