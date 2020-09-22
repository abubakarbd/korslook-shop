-- phpMyAdmin SQL Dump
-- version 4.9.4
-- https://www.phpmyadmin.net/
--
-- Host: localhost:3306
-- Generation Time: Apr 27, 2020 at 10:23 PM
-- Server version: 10.1.44-MariaDB-cll-lve
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
-- Database: `shakherhat_new_shop`
--

-- --------------------------------------------------------

--
-- Table structure for table `smc_acount`
--

CREATE TABLE `smc_acount` (
  `smc_usr_id` int(11) NOT NULL,
  `Username` varchar(100) NOT NULL,
  `Email` varchar(100) NOT NULL,
  `Password` varchar(255) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `tbl_admin`
--

CREATE TABLE `tbl_admin` (
  `adminId` int(11) NOT NULL,
  `adminName` varchar(255) NOT NULL,
  `adminUser` varchar(255) NOT NULL,
  `adminEmail` varchar(255) NOT NULL,
  `adminPass` varchar(32) NOT NULL,
  `level` tinyint(4) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tbl_admin`
--

INSERT INTO `tbl_admin` (`adminId`, `adminName`, `adminUser`, `adminEmail`, `adminPass`, `level`) VALUES
(1, 'Abubakar', 'admin', 'admin@gmail.com', '827ccb0eea8a706c4c34a16891f84e7b', 0);

-- --------------------------------------------------------

--
-- Table structure for table `tbl_brand`
--

CREATE TABLE `tbl_brand` (
  `brandId` int(11) NOT NULL,
  `brandName` varchar(155) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tbl_brand`
--

INSERT INTO `tbl_brand` (`brandId`, `brandName`) VALUES
(40, 'AKRIBOS'),
(39, 'Panasonic'),
(38, 'Canon'),
(37, 'LG'),
(36, 'Bose'),
(35, 'Sony'),
(34, 'Apple'),
(33, 'Samsung'),
(32, 'Lenovo'),
(41, 'Campus Electronics'),
(42, 'Transcend'),
(43, 'Miyako'),
(44, 'Philips'),
(45, 'Lokka'),
(46, 'Pure Bangla'),
(47, 'Aladdin Clothing'),
(48, 'One Touch Point'),
(49, 'Intermix'),
(50, 'Rain Fashion BD'),
(51, 'Shimoul Fashion'),
(52, 'Famous Online Shop');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_cart`
--

CREATE TABLE `tbl_cart` (
  `cartId` int(11) NOT NULL,
  `sId` varchar(255) NOT NULL,
  `productId` int(11) NOT NULL,
  `productName` varchar(255) NOT NULL,
  `price` float(10,2) NOT NULL,
  `quantity` int(11) NOT NULL,
  `image` varchar(255) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tbl_cart`
--

INSERT INTO `tbl_cart` (`cartId`, `sId`, `productId`, `productName`, `price`, `quantity`, `image`) VALUES
(124, 'fa0b21a75771433035a0ae956eb888f6', 29, 'A1 Bluetooth 3.0 Smart Watch with Camera Sim For Android', 540.00, 3, 'uploads/b58cd178a9.jpg'),
(125, 'a40e0565e23d0a50d64d02863164e9c4', 35, 'Transcend 120GB SSD220S 3D TLC SATA III 2.5Inch Solid State Drive', 2350.00, 1, 'uploads/6563f68bbe.jpg'),
(121, '8b068e2c067dcde9d4157ef737573568', 29, 'A1 Bluetooth 3.0 Smart Watch with Camera Sim For Android', 540.00, 1, 'uploads/b58cd178a9.jpg'),
(105, 'c538f6174fdbc046fc72d5f929769ba3', 30, 'Samsung Galaxy S9 Plus - Smartphone - 6.2â€œ - 6GB RAM - 64GB ROM - 12 MP Camera - Lilac Purple', 105.00, 1, 'uploads/e62dde08b1.jpg'),
(120, '8b068e2c067dcde9d4157ef737573568', 31, 'LG 22MK600M 21.5 inch IPS Full HD LED Monitor', 10.00, 10, 'uploads/bfd5a938da.jpg'),
(192, '0c8351e5ff387e48586862ca9d05684b', 44, 'abaya borka new borka collection 2019 new borka fashion irani.', 3650.00, 1, 'uploads/686708d0c4.jpg'),
(179, '9e51c53fab77565980201c5a9b73b1ef', 45, 'Semi-Stitched Black Georgette Embroidery Gown Dress For Women', 1795.00, 2, 'uploads/b1bedaeae8.jpg'),
(176, 'bb22f4ac0beee51954172f46e71f5ab0', 45, 'Semi-Stitched Black Georgette Embroidery Gown Dress For Women', 1795.00, 3, 'uploads/b1bedaeae8.jpg'),
(175, 'bb22f4ac0beee51954172f46e71f5ab0', 44, 'abaya borka new borka collection 2019 new borka fashion irani.', 3650.00, 1, 'uploads/686708d0c4.jpg');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_category`
--

CREATE TABLE `tbl_category` (
  `catId` int(11) NOT NULL,
  `catName` varchar(255) NOT NULL,
  `pCatName` varchar(255) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tbl_category`
--

INSERT INTO `tbl_category` (`catId`, `catName`, `pCatName`) VALUES
(94, 'WOMENS', ''),
(92, 'Automotive &amp; Motorbike', ''),
(93, 'Bird', ''),
(91, 'Sports &amp; Outdoor', ''),
(90, 'Watches &amp; Accessories', ''),
(89, 'Men\'s Fashion', ''),
(88, 'Women\'s Fashion', ''),
(87, 'Home &amp; Lifestyle', ''),
(86, 'Groceries &amp; Pets', ''),
(85, 'Babies &amp; Toys', ''),
(84, 'Health &amp; Beauty', ''),
(83, 'TV &amp; Home Appliances', ''),
(82, 'Electronic Accessories', ''),
(81, 'Electronic Devices', '');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_compae`
--

CREATE TABLE `tbl_compae` (
  `id` int(11) NOT NULL,
  `cmrId` int(11) NOT NULL,
  `productId` int(11) NOT NULL,
  `productName` varchar(255) NOT NULL,
  `price` float(10,2) NOT NULL,
  `image` varchar(255) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tbl_compae`
--

INSERT INTO `tbl_compae` (`id`, `cmrId`, `productId`, `productName`, `price`, `image`) VALUES
(16, 0, 31, 'LG 22MK600M 21.5 inch IPS Full HD LED Monitor', 10.00, 'uploads/bfd5a938da.jpg'),
(17, 0, 30, 'Samsung Galaxy S9 Plus - Smartphone - 6.2â€œ - 6GB RAM - 64GB ROM - 12 MP Camera - Lilac Purple', 105.00, 'uploads/e62dde08b1.jpg');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_contact`
--

CREATE TABLE `tbl_contact` (
  `id` int(11) NOT NULL,
  `contName` varchar(150) NOT NULL,
  `mobile` varchar(50) NOT NULL,
  `agentName` varchar(150) NOT NULL,
  `conttype` varchar(150) NOT NULL,
  `district` varchar(150) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tbl_contact`
--

INSERT INTO `tbl_contact` (`id`, `contName`, `mobile`, `agentName`, `conttype`, `district`) VALUES
(4, 'Yesuf', '0173725692', 'Select', 'MLM', 'Sahajatpur'),
(3, 'Md Jalal Hossain', '01714645864', 'Md Abubakar', 'MLM', 'Dhaka'),
(5, 'URMI AKTER LAKI', '017', 'Select', 'MLM', 'Sahajatpur'),
(6, 'Saydur Rahman', '01765785562', 'URMI AKTER LAKI', 'MLM', 'Rampura'),
(7, 'Abdul Ajij', '01854909877', 'Yesuf', 'MLM', 'Sahajatpur');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_customer`
--

CREATE TABLE `tbl_customer` (
  `id` int(11) NOT NULL,
  `name` varchar(255) NOT NULL,
  `address` text NOT NULL,
  `city` varchar(30) NOT NULL,
  `country` varchar(30) NOT NULL,
  `zip` varchar(30) NOT NULL,
  `phone` varchar(30) NOT NULL,
  `email` varchar(255) NOT NULL,
  `image` varchar(255) NOT NULL,
  `pass` varchar(32) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tbl_customer`
--

INSERT INTO `tbl_customer` (`id`, `name`, `address`, `city`, `country`, `zip`, `phone`, `email`, `image`, `pass`) VALUES
(1, 'Md Abubakar1', 'Barguna', 'Barguna', 'Bangladesh', '8700', '01726122917', 'asonlinebd19@gmail.com', '', '123'),
(2, 'Md Abubakar2', 'Barguna', 'Barguna', 'Bangladesh', '8700', '01726122917', 'phma23@gmail.com', '', '202cb962ac59075b964b07152d234b70'),
(3, 'Md Abubakar3', 'Barguna', 'Barguna Sador', 'Bangladesh', '87000', '01726122917', 'asonlinebd18@gmail.com', 'abubakar.jpg', '202cb962ac59075b964b07152d234b70'),
(4, 'Md Abubakar4', 'Barguna', 'Barguna', 'Bangladesh', '8700', '01726122917', 'phma234@gmail.com', '', '202cb962ac59075b964b07152d234b70'),
(5, 'Md Abubakar5', 'Barguna', 'Barguna', 'Bangladesh', '8700', '01726122917', 'asonlineb@gmail.com', '', '202cb962ac59075b964b07152d234b70'),
(6, 'Md Abubakar6', 'Barguna', 'Barguna', 'Bangladesh', '8700', '01726122917', 'asonlinebd190@gmail.com', '', '202cb962ac59075b964b07152d234b70'),
(7, 'Md Abubakar7', 'Barguna', 'Barguna', 'Bangladesh', '8700', '01726122917', 'asonlinebd191@gmail.com', '', '827ccb0eea8a706c4c34a16891f84e7b');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_order`
--

CREATE TABLE `tbl_order` (
  `id` int(11) NOT NULL,
  `cmrId` int(11) NOT NULL,
  `productId` int(11) NOT NULL,
  `productName` varchar(255) NOT NULL,
  `quantity` int(11) NOT NULL,
  `price` float(10,2) NOT NULL,
  `image` varchar(255) NOT NULL,
  `payment` varchar(255) NOT NULL DEFAULT '0',
  `date` datetime NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `status` int(11) NOT NULL DEFAULT '0'
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tbl_order`
--

INSERT INTO `tbl_order` (`id`, `cmrId`, `productId`, `productName`, `quantity`, `price`, `image`, `payment`, `date`, `status`) VALUES
(73, 3, 47, 'Black and Golden Georgette Saree', 2, 4598.00, 'uploads/97ff4dfda3.jpg', '', '2019-12-24 18:34:27', 2),
(72, 3, 51, 'LED 2W Wall Bracket Light Doubel - Gold', 2, 1998.00, 'uploads/86528716b4.jpg', '', '2019-12-24 18:32:28', 2),
(71, 3, 44, 'abaya borka new borka collection 2019 new borka fashion irani.', 1, 3650.00, 'uploads/686708d0c4.jpg', '', '2019-12-24 18:09:05', 0),
(62, 3, 46, 'Cotton Unstitched Three Piece For Women', 1, 850.00, 'uploads/d3cdc74eb8.jpg', '', '2019-12-22 22:00:49', 2),
(63, 3, 44, 'abaya borka new borka collection 2019 new borka fashion irani.', 1, 3650.00, 'uploads/686708d0c4.jpg', '', '2019-12-22 22:20:27', 2),
(64, 3, 31, 'LG 22MK600M 21.5 inch IPS Full HD LED Monitor', 1, 10.00, 'uploads/bfd5a938da.jpg', '', '2019-12-23 15:19:23', 2),
(65, 3, 45, 'Semi-Stitched Black Georgette Embroidery Gown Dress For Women', 1, 1795.00, 'uploads/b1bedaeae8.jpg', '', '2019-12-23 15:19:23', 2),
(66, 3, 40, 'EOS 6D DSLR Camera with 24-105mm f/4L Lens - 20.2MP - Black', 1, 142000.00, 'uploads/5006993314.jpg', '', '2019-12-23 15:19:23', 2),
(67, 3, 44, 'abaya borka new borka collection 2019 new borka fashion irani.', 1, 3650.00, 'uploads/686708d0c4.jpg', '', '2019-12-23 15:19:23', 2),
(68, 3, 47, 'Black and Golden Georgette Saree', 1, 2299.00, 'uploads/97ff4dfda3.jpg', '', '2019-12-23 15:19:23', 2),
(69, 3, 30, 'Samsung Galaxy S9 Plus - Smartphone - 6.2â€œ - 6GB RAM - 64GB ROM - 12 MP Camera - Lilac Purple', 1, 105.00, 'uploads/e62dde08b1.jpg', '', '2019-12-23 15:19:23', 2),
(70, 3, 46, 'Cotton Unstitched Three Piece For Women', 3, 2550.00, 'uploads/d3cdc74eb8.jpg', '', '2019-12-23 15:19:23', 2),
(74, 3, 44, 'abaya borka new borka collection 2019 new borka fashion irani.', 1, 3650.00, 'uploads/686708d0c4.jpg', '0', '2019-12-25 22:31:09', 0),
(75, 3, 45, 'Semi-Stitched Black Georgette Embroidery Gown Dress For Women', 1, 1795.00, 'uploads/b1bedaeae8.jpg', '0', '2019-12-28 13:53:15', 0),
(76, 3, 45, 'Semi-Stitched Black Georgette Embroidery Gown Dress For Women', 1, 1795.00, 'uploads/b1bedaeae8.jpg', '0', '2019-12-28 21:33:44', 0),
(77, 3, 45, 'Semi-Stitched Black Georgette Embroidery Gown Dress For Women', 3, 5385.00, 'uploads/b1bedaeae8.jpg', '0', '2020-02-12 16:32:54', 0),
(78, 3, 44, 'abaya borka new borka collection 2019 new borka fashion irani.', 1, 3650.00, 'uploads/686708d0c4.jpg', '0', '2020-02-12 18:24:14', 0),
(79, 3, 30, 'Samsung Galaxy S9 Plus - Smartphone - 6.2â€œ - 6GB RAM - 64GB ROM - 12 MP Camera - Lilac Purple', 1, 105.00, 'uploads/e62dde08b1.jpg', '0', '2020-03-10 14:22:37', 0),
(80, 3, 44, 'abaya borka new borka collection 2019 new borka fashion irani.', 1, 3650.00, 'uploads/686708d0c4.jpg', '0', '2020-03-10 14:22:37', 0);

-- --------------------------------------------------------

--
-- Table structure for table `tbl_product`
--

CREATE TABLE `tbl_product` (
  `productId` int(11) NOT NULL,
  `productName` varchar(255) NOT NULL,
  `catId` int(11) NOT NULL,
  `brandId` int(11) NOT NULL,
  `quantity` varchar(255) NOT NULL DEFAULT '0',
  `body` text NOT NULL,
  `price` float(10,2) NOT NULL,
  `Rprice` float(10,2) NOT NULL,
  `image` varchar(255) NOT NULL,
  `type` tinyint(4) NOT NULL DEFAULT '0',
  `dateTime` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tbl_product`
--

INSERT INTO `tbl_product` (`productId`, `productName`, `catId`, `brandId`, `quantity`, `body`, `price`, `Rprice`, `image`, `type`, `dateTime`) VALUES
(29, 'A1 Bluetooth 3.0 Smart Watch with Camera Sim For Android', 90, 41, '10', 'Product details of A1 Bluetooth 3.0 Smart Watch with Camera Sim For Android\r\nBlutooth 3.0 and 1.54 inch TFT OGS capacitive touch screen\r\nHigh quality pictures with 2.0MP camera\r\nBattery: capacity of 3.7V/350mAh rechargeable Li-polymer battery\r\nStorage 128M+64M Â¨Bup to 32GB TF card\r\nWith the function of selfie, anti-lost, pedometer, sleep monitor, sedentary reminder and etc.\r\nA1 Bluetooth 3.0 Smart Watch with Camera Sim For Android\r\n\r\nProduct Smart (BT) Watch\r\nCPU MTK6260AÂ¨B\r\nScreen 1.54 inch TFT LCD touch screenÂ¨B\r\nResolution 240*240 pixel\r\nTouch Screen OGS touch screen\r\nBluetooth Ver 3.0\r\nCamera 2.0 M\r\nBattery type Lithium-ion polymer battery\r\nShell material Metal\r\nWatch strap Silicone\r\nG-sensor Pedometer, sedentary reminder, sleep minitor,anti-lost\r\nPhone GSM/GPRS 850/900/1800/1900\r\ndial, hands-free call,call history,phone book;\r\nBluetooth phone\r\nMessgae local message\r\nBluetooth Sync push message\r\nMedia MP3yMP4yAVI\r\nBluetooth music play\r\nCall reminder Bell and vibration remind\r\nClock free change 3 sets clock display\r\nTwo-way anti-lost Anti-lost reminder\r\nTwo-way search\r\nPedometer Movement step gauge; calories calculate ; mileage record\r\nSedentary remind Support\r\nSleep monitor Support\r\nPhotograph Watch photographÂ¨Bstorage in watch\r\nRemote control cellphone to photographÂ¨Bstorage in cellphone\r\nPhoto format PNGyJPG\r\nCompass Support\r\nOther function Alarm, calendar, stopwatch,calculator and etc.', 540.00, 0.00, 'uploads/b58cd178a9.jpg', 0, '2019-12-22 13:13:00'),
(30, 'Samsung Galaxy S9 Plus - Smartphone - 6.2â€œ - 6GB RAM - 64GB ROM - 12 MP Camera - Lilac Purple', 81, 33, '10', 'Product details of Samsung Galaxy S9 Plus - Smartphone - 6.2â€œ - 6GB RAM - 64GB ROM - 12 MP Camera - Lilac Purple\r\nNO RETURN applicable if the seal is broken\r\nUp to 12-month EMI facility\r\n6.2\" Super AMOLED Infinity Display\r\nQualcomm Snapdragon 845 processor\r\nOcta-Core, 2.8GHz (2.65GHz) + 1.76GHz\r\n64GB ROM and 6GB RAM\r\n12MP Rear and 8MP Front Camera\r\nOS: Android Oreo 8.0.0\r\n3,500mAh Non-removable Battery\r\nWireless charging supported', 105.00, 0.00, 'uploads/e62dde08b1.jpg', 0, '2019-12-22 13:13:05'),
(31, 'LG 22MK600M 21.5 inch IPS Full HD LED Monitor', 81, 37, '10', 'Product details of LG 22MK600M 21.5 inch IPS Full HD LED Monitor\r\nSpecification:Display FeaturesScreen Size21.5\"Display TypeIPSResolution1920 X 1080\r\nBrightness250cd/m2(Typ.) 200cd/m2(Min.)\r\nResponse Time5ms(Faster)\r\nViewing Angle178/178\r\nContrast Ratio1000:1(Typ.)\r\nAspect Ratio16:9\r\nColor Support16.7M colors\r\nConnectivityHDMI2Audio Jack1Audio/Video FeaturesFreeSync supportedHDMIPowerTypeAdapterPower Consumption100-240Vac, 50/60Hz\r\nPhysical SpecificationDimension488.7x182x386.7Weight2.7 kgTilt-2~15', 10.00, 0.00, 'uploads/bfd5a938da.jpg', 0, '2019-12-22 13:13:09'),
(32, 'Lenovo IdeaPad IP S145-14IWL 8th Gen Intel Core i3 8145U (2.10GHz-3.90GHz, 4GB DDR4, 1TB HDD) 14 Inch FHD (1920x1080) Display, Win 10, Grey Notebook #81MU00BWIN', 81, 32, '10', 'Additional InformationBrandLenovoModelLenovo IdeaPad IP S145-14IWLProcessorIntel Core i3 8145UGeneration8thClock Speed2.10-3.90GHzCache4MBDisplay TypeFHD LEDDisplay Size14\"Display Resolution1920x1080 (WxH) FHDTouchNoRAM typeDDR4RAM4GBStorage1TB HDDGraphics chipsetIntel UHD Graphics 620Graphics memorySharedOptical deviceNo-ODDNetworkingWiFi, Bluetooth, Card Reader, WebCamDisplay portHDMIAudio portComboUSB Port2 x USB3.0, 1 x USB2.0Battery2 Cell Li-PolymerBackup timeUp to 6 Hrs.Weight1.6KgColorGrayOperating SystemWin-10 HomeOthersPanel Type : Non Touch & Anti Glare + 220 nits & 16:9 AR, Core: 2, Thread: 4, RPM: 5400RPM, Audio/Speaker: 2 x 1.5W Speakers, Dolby Audio, Camera + Mic: 0.3MP, fixed focus, integrated monaural microphone, Wireless Connectivity : WIFI 1X1 AC + BT, SecuritySpecialtyLED Backlight Monitor, 180 Degree Mechanical Rotation, 6-row with Multimedia Fn keys (Keyboard Feature), Buttonless mylar surface multi-touch touchpad (Mouse/Pad Feature)Part No81MU00BWINWarranty2 year (Battery, Adapter 1 year)Made in/ AssembleChinaCountry of OriginChina', 42.00, 0.00, 'uploads/21cc0350bd.jpg', 1, '2019-12-22 13:13:18'),
(41, 'GC0083/00 - Dry Irons - Black and Silver', 83, 44, '10', 'The Philips GC0083/00 has a temperature adjustment dial to set variable temperatures for different kind of fabrics. Higher temperature would be suitable for a cotton shirt with a lot of wrinkles and lower temperature for your delicate silk dresses. If you are unsure about the kind of fabric, then determine the required temperature by ironing a part of your dress that is not visible when you wear it. This Philips dry iron has a uniform heating panel which removes stubborn creases with minimum efforts.', 1413.00, 0.00, 'uploads/2fe53f3734.jpg', 1, '2019-12-22 15:20:26'),
(34, 'Desktop Hard Disk Drive - 1TB - Silver', 82, 33, '0', 'Type: Hard drive -Internal\r\nForm Factor: 3.5 x 1/3H\r\nDimensions (WxDxH): 10.2 cm x 14.7 cm x 2.6 cm\r\nWeight: 0.7 kg around.\r\nInterface Type:SATA\r\nConnector: SATA\r\nData Transfer Rate: 150 MBps\r\nAverage Seek Time: 8.9 ms\r\nSpindle Speed: 7200 rpm\r\nHeads (Physical): 2\r\nWarranty: 1 Year', 1899.00, 0.00, 'uploads/d8c217da30.jpg', 1, '2019-12-22 13:14:34'),
(35, 'Transcend 120GB SSD220S 3D TLC SATA III 2.5Inch Solid State Drive', 82, 42, '10', 'Taking full advantage of the SATA III 6Gb/s interface and built-in SLC caching technology, Transcend\'s SSD220S achieves exceptional transfer speeds of up to 540MB/s read and 500MB/s write.\r\nTranscend\'s SSD220S offers great Terabytes Written (TBW) values (up to 160 TB) indicating the total amount of data you can write into the drive over its lifetime.', 2350.00, 0.00, 'uploads/6563f68bbe.jpg', 1, '2019-12-22 13:13:23'),
(36, 'Transcend 1TB SATA III M.2 SSD 830S, 3D TLC, with DRAM', 82, 42, '10', 'Space-saving M.2 SATA form factor (80mm) for ultra-compact computing devices\r\n3D NAND flash memory\r\nDDR3 DRAM cache\r\nSATA III 6Gb/s interface and SLC caching technology for exceptional transfer speeds\r\nEngineered with a RAID engine and LDPC (Low-Density Parity Check) coding to ensure data integrity\r\nSupports Device Sleep Mode (DevSleep) to prolong notebook battery life by intelligently shutting down SATA interface when not in use\r\nSupports S.M.A.R.T., TRIM and NCQ commands', 11650.00, 0.00, 'uploads/6132fedfcb.jpg', 1, '2019-12-22 13:13:28'),
(37, 'MU7350 - UHD 4K Curved Smart TV - 49\" - Black', 83, 33, '4', 'Samsung MU7350 - UHD 4K Curved Smart TV - 49\"\r\n\r\nExperience vivid detail with 4X the resolution of UHD TV. Everything you watch will look better thanks to true-to-life colour and brightness.Get a natural color experience with Purcolour. Dive into your TV entertainment and see all the colours of nature in accurate detail.See images with true-to-life detail. With higher brightness, youâ€™ll get a true HDR experience.\r\nExperience another level of immersive viewing. Auto Depth Enhancer adjusts multi-layer contrast levels for an enhanced sense of depth.Revel in the beauty of the curved design. Taking its cue from nature, it embodies pure elegance, on or off.ust connect your mobile to your big screen and enjoy all your content. And with the Smart View app, you can seamlessly control everything from your mobile.\r\nSee everything in one place. One Depth gathers a variety of content for you on one screen. Get easy access to different content providers and check out the thumbnail previews before diving in.', 61500.00, 0.00, 'uploads/bbc3d36d4a.jpg', 1, '2019-12-22 13:13:40'),
(38, 'M6300 Curved Smart Full HD TV - 55 Inch', 83, 33, '10', 'Screen Size: 55\"\r\nResolution: 1920 x 1080\r\nScreen Curvature: 4,200 R\r\nHDMI: 3\r\nUSB: 2\r\nComponent In (Y/Pb/Pr): 1\r\nComposite In (AV): 1 (Common Use for Component Y)\r\nEthernet (LAN)\r\nK5500 design (FHD Slim)\r\nBezel Type: VNB\r\nPower Supply: AC100-240V 50/60Hz', 114900.00, 0.00, 'uploads/eadd9afa3e.jpg', 1, '2019-12-22 13:13:44'),
(39, 'DSLR Camera - EOS 80D Body Only - 24.2MP - Black', 81, 38, '4', 'Characterized by versatile imaging specs, the Canon EOS 80D further clarifies itself using a pair of robust focusing systems and an intuitive design. Featuring a 24.2MP APS-C CMOS sensor and DIGIC 6 image processor, this sleek DSLR is capable of capturing high-resolution images at up to 7 fps and Full HD 1080p60 video, both with reduced noise and high sensitivity up to an expanded ISO 25600 for working in difficult lighting conditions. When working with the optical viewfinder, an apt 45-point all cross-type AF system affords fast performance in a range of lighting conditions for tracking moving subjects and working in low light, while the Dual Pixel CMOS AF system benefits live view shooting and movie recording by providing a smooth, natural focusing quality akin to the way a camcorder acquires focus. Touch-to-focus is availed by the large 3.0\" 1.04m-dot touchscreen LCD, which also sports a swiveling vari-angle design for working from high and low angles with ease. Additionally, built-in Wi-Fi with NFC allows you to pair mobile devices with the camera to wirelessly transfer files for sharing your photos and movies online. More than just a well-connected DSLR, the 80D is equally matched in imaging versatility due to its inclusion of multimedia feature-sets for stills shooting and movie recording.', 64000.00, 0.00, 'uploads/53fa32e631.jpg', 0, '2019-12-27 13:25:53'),
(40, 'EOS 6D DSLR Camera with 24-105mm f/4L Lens - 20.2MP - Black', 81, 38, '7', 'EOS 6D DSLR Camera with 24-105mm f/4L Lens - 20.2MP\r\nConvenience through its design and features. When paired with the powerful DIGIC 5+ image processor and 14-bit A/D conversion, the full-frame sensor is capable of recording vivid imagery with expanded sensitivity up to ISO 102400. The 6D employs an 11-point autofocus system for acquiring precise focus regardless of the shooting situation, which is further enhanced by a center cross-type focus point for improved low-light focus sensitivity. The iFCL 63-zone dual-layer metering sensor also benefits from the autofocus system when making exposure measurements, and also analyzes color and luminance values within the scene to determine accurate exposure settings. Built-in Wi-Fi and GPS technologies also provide extensive connectivity to the 6D. The built-in Wi-Fi capability allows you to take remote control over the 6D when used in conjunction with the Canon EOS Remote app (available for iOS and Android), as well as instantly share the images from your camera to your phone or to the CANON iMAGE GATEWAY. The GPS receiver will automatically record locational data and embed this information into the metadata of your images, allowing you to geotag your shots and map out where each shot was taken. The 6D features a smaller form factor compared to other full-frame DSLRs, but still integrates a large 3.0\" 1,040K-dot TFT LCD monitor for clear playback and review of your imagery. The construction of the body integrates an aluminum alloy and polycarbonate chassis within a magnesium and polycarbonate shell for durability while still maintaining a lightweight profile.\r\nPeople Who Viewed This Item Also Viewed\r\n\r\nNikon D810 DSLR Camera with 24-120mm Lens\r\nà§³ 205,000\r\nEOS 4000D DSLR Camera with EF-S 18-55mm III Lens Kit â€“ Black\r\nà§³ 24,990\r\nà§³ 28,000-11%\r\n\r\nCanon 70-200mm Lens Coffee Mug\r\nà§³ 1,990\r\nà§³ 3,000-34%\r\nD5300 24.2 MP CMOS Digital SLR Camera with 18-55mm f/3.5-5.6G ED VRI AF-P DX NIKKOR Zoom Lens - Black\r\nà§³ 37,000\r\nà§³ 40,000-8%\r\n\r\nBest Sellers\r\nProfessional 3.0 Inch LCD Display 1080P Video Digital Camera 4X Zoom 24MP\r\nà§³ 5,915\r\nà§³ 15,986-63%\r\n\r\n3.5mm Direction External Microphone For Canon Nikon DSLR Camera DV Camcorder\r\nà§³ 1,434\r\nà§³ 2,868-50%\r\n\r\nNikon D7200 DSLR Camera (Body Only)\r\nà§³ 58,500\r\nà§³ 68,500-15%\r\nSK-MB4 Matte Box for DSLR Camera - Black\r\nà§³ 15,290\r\nà§³ 17,500-13%\r\n\r\nStore\r\n\r\nStill have questions, chat with seller now!', 142000.00, 0.00, 'uploads/5006993314.jpg', 0, '2019-12-24 12:17:26'),
(42, 'Panasonic Steam Iron NI -W410TS - Black and White', 83, 39, '0', 'Body Color: White. Sole Plate: Titanium. Output power: 2200W. Sole Plate Design: 360Degree Quick. Steam Vertical Shot: 75g/min. Steam Continuous: 30g/min. Anti Calcium System (Calc Cut): Yes Self Cleaning: Yes. Spray: Yes. Jet of steam: Yes. Water Tank: 200 cc. This appliance is not designed for use in Every where - only for countries that use 220V electrical outlets.\r\n\r\nSpecifications of Panasonic Steam Iron NI -W410TS - Black and White\r\nBrand\r\nPanasonic\r\nSKU\r\n100978869_BD-1014978592\r\nIron Type\r\nSteam Iron\r\nModel\r\nNI-W410TS\r\nWhatâ€™s in the box\r\nSteam Iron', 3900.00, 0.00, 'uploads/a7c9998d3a.jpg', 0, '2019-12-27 13:26:23'),
(43, 'Unstitched Pink Georgette Gown For Women', 88, 46, '0', 'Feel fabulous in a formal dress or long formal evening gown from the collection here at Simply Dresses. You will find formal evening gowns in a variety of styles and many colors. There are high-low dresses and long elegant evening dresses with sexy asymmetrical hemlines in solid colors and gorgeous prints. For a sexy evening dress that will make you stand out from the crowd, select a sequin or beaded evening dress.', 2000.00, 0.00, 'uploads/571c991d91.jpg', 1, '2019-12-22 13:15:13'),
(44, 'abaya borka new borka collection 2019 new borka fashion irani.', 88, 47, '3', 'Product details of abaya borka new borka collection 2019 new borka fashion irani borka dubai borka fashion dhaka stylish borka party borka hijab shop\r\nCode :AL-862\r\nPRICE :3650 tk\r\nMaterial : georgette fabric\r\nBody Size : 40-42-44-46\r\nLength : 50-52-54-56-58\r\nU can give us ur own measurement too\r\nAladdin Clothing\'s aims to meet the fashion needs of the modern Muslim women without having to compromise with style. We are here to aid our fellow sisters to figure out their own style in Hijab,we make all of our products in our own factory, so you can make your one required design & also according to your own measurement\r\nfor order send us ur measurement address visit us\r\nmirpur 1 fair plaza level 8 shop 4\r\nWe will call you for modified product', 3650.00, 0.00, 'uploads/686708d0c4.jpg', 0, '2019-12-24 12:51:25'),
(45, 'Semi-Stitched Black Georgette Embroidery Gown Dress For Women', 88, 48, '10', 'Shalwar Kameez also spelled salwar kameez or Shalwar Kameez is a traditional outfit originating in the subcontinent. It is a generic term used to describe different styles of dress. The shalwar kameez can be worn by women. The shalwar and the kameez are two garments which are combined to form the shalwar kameez.\r\n\r\nThe seller, One Touch Point, offers a wide selection of products from renowned brands in Bangladesh with a promise of fast, safe and easy online shopping experience through Daraz. The seller comes closer to the huge customers on this leading online shopping platform of all over Bangladesh and serving to the greater extent of achieving higher customer satisfaction. The brands working with Daraz are not only serving top class products but also are dedicated to acquiring brand loyalty.', 1795.00, 0.00, 'uploads/b1bedaeae8.jpg', 0, '2019-12-22 13:14:01'),
(46, 'Cotton Unstitched Three Piece For Women', 88, 49, '10', 'Shalwar kameez, also spelled salwar kameez or shalwar qameez, is a traditional outfit originating in the Indian subcontinent. It is a generic term used to describe different styles of dress. The shalwar kameez can be worn by women. The shalwar (baggy trousers) and the kameez (long shirt) are two garments which are combined to form the shalwar kameez. There are various types of designs for salwar kameez', 850.00, 0.00, 'uploads/d3cdc74eb8.jpg', 1, '2019-12-22 13:14:04'),
(47, 'Black and Golden Georgette Saree, Rain Fashion Online Shop', 88, 50, '0', 'About Rain Fashion BD\r\n\r\nRain Fashion Online Shop, committed to providing a delightful customer experience, through unique and branded products. We guarantee the most affordable for our products in the best quality. The main goal of our business is customer satisfaction.', 2299.00, 0.00, 'uploads/97ff4dfda3.jpg', 0, '2019-12-28 11:22:04'),
(48, 'Green Georgette Semi Stitched Anarkali for Women', 88, 51, '2', 'Offers a wide selection of products from renowned brands in Bangladesh with a promise of fast, safe and easy online shopping experience through Daraz. The seller comes closer to the huge customers on this leading online shopping platform of all over Bangladesh and serving to the greater extent of achieving higher customer satisfaction. The brands working with Daraz are not only serving top class products but also are dedicated to acquiring brand loyalty.', 1995.00, 0.00, 'uploads/fafd11765f.jpg', 1, '2019-12-22 13:14:15'),
(51, 'LED 2W Wall Bracket Light Doubel - Gold', 87, 52, '8', '100% Brand new and high quality bright Wall LED Light. Energy saving, low power consumption, long life expectancy. Suitable for home, restaurants, studio, exhibition lighting, Art galleries and Entertainment lighting, etc. Easy to use and install. This is new coming decor projector light. They can be used in bar, restaurant, cafe, store, hotel, home ,  It is very funny, when you turn on your power switch, it lights up and projects a picture onto your wall, floor or ceilin', 999.00, 14000.00, 'uploads/86528716b4.jpg', 1, '2019-12-24 12:33:06');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_sms`
--

CREATE TABLE `tbl_sms` (
  `smsId` int(11) NOT NULL,
  `smsTitle` varchar(255) NOT NULL,
  `smsBody` text NOT NULL,
  `smstype` int(11) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tbl_sms`
--

INSERT INTO `tbl_sms` (`smsId`, `smsTitle`, `smsBody`, `smstype`) VALUES
(8, '', '30 New Mega Sales. Upto 80% Off. Starting Everyday at 9 AM.', 1),
(2, 'FREE SHIPPING & RETURN*', 'For all orders over $500', 2),
(3, 'MONEY BACK GUARANTEE', 'Return Over 30 Days', 2),
(4, '25% ON STUDENT DISCOUNT', 'Excludes Sale In Store', 2),
(5, 'Be The First To Hear Our Exciting News', 'This ante posuere ac Mauris non turpis eu metus congue sagittis Fusce at.', 3),
(6, '', 'Contrary to popular belief, Lorem Ipsum is not simply random text. It has roots in a piece of classical Latin literature in Virginia', 4),
(7, '', 'Deals of the Day: Unbox Latest Offers & Deals Every Single Day at Store.', 5);

-- --------------------------------------------------------

--
-- Table structure for table `tbl_wlist`
--

CREATE TABLE `tbl_wlist` (
  `id` int(11) NOT NULL,
  `cmrId` int(11) NOT NULL,
  `productId` int(11) NOT NULL,
  `productName` varchar(255) NOT NULL,
  `price` float(10,2) NOT NULL,
  `image` varchar(255) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tbl_wlist`
--

INSERT INTO `tbl_wlist` (`id`, `cmrId`, `productId`, `productName`, `price`, `image`) VALUES
(20, 0, 31, 'LG 22MK600M 21.5 inch IPS Full HD LED Monitor', 10.00, 'uploads/bfd5a938da.jpg'),
(25, 0, 47, 'Black and Golden Georgette Saree, Rain Fashion Online Shop', 2299.00, 'uploads/97ff4dfda3.jpg');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `smc_acount`
--
ALTER TABLE `smc_acount`
  ADD PRIMARY KEY (`smc_usr_id`);

--
-- Indexes for table `tbl_admin`
--
ALTER TABLE `tbl_admin`
  ADD PRIMARY KEY (`adminId`);

--
-- Indexes for table `tbl_brand`
--
ALTER TABLE `tbl_brand`
  ADD PRIMARY KEY (`brandId`);

--
-- Indexes for table `tbl_cart`
--
ALTER TABLE `tbl_cart`
  ADD PRIMARY KEY (`cartId`);

--
-- Indexes for table `tbl_category`
--
ALTER TABLE `tbl_category`
  ADD PRIMARY KEY (`catId`);

--
-- Indexes for table `tbl_compae`
--
ALTER TABLE `tbl_compae`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `tbl_contact`
--
ALTER TABLE `tbl_contact`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `tbl_customer`
--
ALTER TABLE `tbl_customer`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `tbl_order`
--
ALTER TABLE `tbl_order`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `tbl_product`
--
ALTER TABLE `tbl_product`
  ADD PRIMARY KEY (`productId`);

--
-- Indexes for table `tbl_sms`
--
ALTER TABLE `tbl_sms`
  ADD PRIMARY KEY (`smsId`);

--
-- Indexes for table `tbl_wlist`
--
ALTER TABLE `tbl_wlist`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `smc_acount`
--
ALTER TABLE `smc_acount`
  MODIFY `smc_usr_id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `tbl_admin`
--
ALTER TABLE `tbl_admin`
  MODIFY `adminId` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `tbl_brand`
--
ALTER TABLE `tbl_brand`
  MODIFY `brandId` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=53;

--
-- AUTO_INCREMENT for table `tbl_cart`
--
ALTER TABLE `tbl_cart`
  MODIFY `cartId` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=195;

--
-- AUTO_INCREMENT for table `tbl_category`
--
ALTER TABLE `tbl_category`
  MODIFY `catId` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=95;

--
-- AUTO_INCREMENT for table `tbl_compae`
--
ALTER TABLE `tbl_compae`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=20;

--
-- AUTO_INCREMENT for table `tbl_contact`
--
ALTER TABLE `tbl_contact`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT for table `tbl_customer`
--
ALTER TABLE `tbl_customer`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT for table `tbl_order`
--
ALTER TABLE `tbl_order`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=81;

--
-- AUTO_INCREMENT for table `tbl_product`
--
ALTER TABLE `tbl_product`
  MODIFY `productId` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=52;

--
-- AUTO_INCREMENT for table `tbl_sms`
--
ALTER TABLE `tbl_sms`
  MODIFY `smsId` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;

--
-- AUTO_INCREMENT for table `tbl_wlist`
--
ALTER TABLE `tbl_wlist`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=26;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
