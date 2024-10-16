-- phpMyAdmin SQL Dump
-- version 5.0.3
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Feb 27, 2023 at 11:01 AM
-- Server version: 10.4.14-MariaDB
-- PHP Version: 7.4.11

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `baf_lan`
--

-- --------------------------------------------------------

--
-- Table structure for table `application_soft`
--

CREATE TABLE `application_soft` (
  `id` int(11) NOT NULL,
  `full_name` varchar(256) COLLATE utf8_unicode_ci NOT NULL,
  `short_name` varchar(256) COLLATE utf8_unicode_ci DEFAULT NULL,
  `url` varchar(512) COLLATE utf8_unicode_ci NOT NULL,
  `icon` varchar(256) COLLATE utf8_unicode_ci DEFAULT NULL,
  `delay` varchar(128) COLLATE utf8_unicode_ci DEFAULT NULL,
  `color` varchar(128) COLLATE utf8_unicode_ci DEFAULT NULL,
  `created_at` date DEFAULT NULL,
  `updated_at` date DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `application_soft`
--

INSERT INTO `application_soft` (`id`, `full_name`, `short_name`, `url`, `icon`, `delay`, `color`, `created_at`, `updated_at`) VALUES
(1, 'Airmen Personal Management Information System', '1. Airmen Personal Management Information System', 'http://apmis.baf.org/', 'ri-database-2-line', '50', '#b2904f', '2023-02-25', '2023-02-27'),
(3, 'Civilian Personal Management Information System(CPMIS)', '2. Civilian Personal Management Information System', 'http://cpmis.baf.org/', 'ri-bar-chart-box-line', '100', '#5578ff', '2023-02-26', '2023-02-27'),
(4, 'BAF Shaheen School & College Data Entry ', '3. BAF Shaheen School & College Data Entry ', 'http://bafsc.baf.org/', 'ri-calendar-todo-line', '150', '#e80368', '2023-02-26', '2023-02-27'),
(11, 'Officer Personal Information System', '4. Officer Personal Information System', 'http://opmis.baf.org/', 'ri-paint-brush-line', '200', '#e361ff', NULL, '2023-02-27'),
(12, 'Aircraft Maintenance Information System(MCIS)', '5. Aircraft Maintenance Information System', 'http://mcis.baf.org/', 'ri-file-list-3-line', '250', '#11dbcf', NULL, '2023-02-27'),
(13, 'Finance & Accounting Information System (ACCTIS)', '6. Finance & Accounting Information System ', 'http://acctis.baf.org/', 'ri-safe-fill', '300', '#ffa76e', NULL, '2023-02-27'),
(14, 'Catering Information System(ACCTIS)', '7. Catering Information System', 'http://acctis.baf.org/', 'ri-safe-fill', '300', '#5fa456', '2023-02-27', '2023-02-27'),
(15, 'Library Management Information System(LiMIS) ', '8. Library Management Information System', 'http://libis.baf.org/', 'ri-book-2-fill', '400', '#a20680', '2023-02-27', '2023-02-27'),
(16, 'Mess Accounting Information System', '9. Mess Accounting Information System', 'http://messis.baf.org/', 'ri-store-line', '450', '#4eb2c6', '2023-02-27', '2023-02-27'),
(17, 'AFI AFO AFM & JSI Archive', '10. AFI AFO AFM & JSI Archive', 'http://baf.org/afo/All/mainpage.html', 'ri-archive-drawer-line', '500', '#6e479e', '2023-02-27', '2023-02-27'),
(18, 'PDO Archive', '11. PDO Archive', 'http://192.35.65.215/pdo/index.php', 'ri-archive-drawer-line', '550', '#d5b8b8', '2023-02-27', '2023-02-27'),
(19, 'Security Information System', '12. Security Information System', 'http://sis.baf.org/login.php', 'ri-lock-2-fill', '600', '#5da7b6', '2023-02-27', '2023-02-27'),
(20, 'Communication Information System', '13. Communication Information System', 'http://commuis.baf.org/', 'ri-base-station-line', '650', '#aa7cb1', '2023-02-27', '2023-02-27'),
(21, 'School of Security and Intelligence Information System', '14. School of Security and Intelligence Information System', 'http://ssiis.baf.org/', 'ri-tools-fill', '700', '#9d9f3c', '2023-02-27', '2023-02-27'),
(22, 'Item Issue Management System', '15. Item Issue Management System', 'http://iims.baf.org/', 'ri-t-shirt-2-fill', '750', '#2b51e9', '2023-02-27', '2023-02-27'),
(23, ' Air Force Inventory Management Software (AIMS)', ' 16. Air Force Inventory Management Software (AIMS)', 'http://aims.baf.org/', 'ri-database-fill', '800', '#24c67b', '2023-02-27', '2023-02-27'),
(24, 'DAI Briefing / De-Briefing Visit/UN Mission/Training', '17. DAI Briefing / De-Briefing Visit/UN Mission/Training', 'http://dai.baf.org/briefing', 'ri-lock-2-fill', '850', '#04e79b', '2023-02-27', '2023-02-27'),
(25, 'Airpassage Request Form', '18. Airpassage Request Form', 'http://airpassage.baf.org/', 'ri-flight-takeoff-fill', '900', '#3f12f3', '2023-02-27', '2023-02-27'),
(26, 'Maint Wing Information System', '19. Maint Wing Information System', 'http://maintwg.baf.org/', 'ri-file-user-fill', '950', '#401adb', '2023-02-27', '2023-02-27'),
(27, '205 MU Information System', '20. 205 MU Information System', 'http://mu205.baf.org/', 'ri-todo-fill', '1000', '#f40bc1', '2023-02-27', '2023-02-27'),
(28, 'Aircraft Occurrence Investigation Archive (AOIA)', '21. Aircraft Occurrence Investigation Archive (AOIA)', 'http://aoia.baf.org/', 'ri-list-settings-fill', '1050', '#864141', '2023-02-27', '2023-02-27'),
(31, 'Flying Information System (New)', '22. Flying Information System ', 'http://flyingis.baf.org/', 'ri-flight-takeoff-line', '1100', '#0179f9', '2023-02-27', '2023-02-27'),
(32, ' Air Traffic Management System (ATMS)', ' 23. Air Traffic Management System', 'http://atms.baf.org/', 'ri-radar-line', '1150', '#04fb2d', '2023-02-27', '2023-02-27'),
(33, 'Vehicle Requisition Form (F-793)', '24. Vehicle Requisition Form (F-793)', 'http://f793.baf.org/', 'ri-car-fill', '1200', '#ce0dbe', '2023-02-27', '2023-02-27'),
(34, 'Ground Support & Tester/Test Equipment Inventory Software', '25. Ground Support & Tester/Test Equipment Inventory Software', 'http://gsteis.baf.org/', 'ri-swap-box-fill', '1250', '#0eeca2', '2023-02-27', '2023-02-27'),
(35, 'PDC Information System', '26. PDC Information System', 'http://pdc.baf.org/', 'ri-file-list-3-line', '1300', '#03ecfc', '2023-02-27', '2023-02-27'),
(36, 'AC, Radar & Wx Info Sys (ARWIS)', '27. AC, Radar & Wx Info Sys (ARWIS)', 'http://arwis.baf.org/', 'ri-radar-line', '1350', '#3f1bf3', '2023-02-27', '2023-02-27'),
(37, 'Legal Info System (LIS)', '28. Legal Info System', 'http://jagbr.baf.org/', 'ri-safe-fill', '1400', '#f708c3', '2023-02-27', '2023-02-27'),
(38, 'IT Equipment Inventory Software (ITEIS)', '29. IT Equipment Inventory Software', 'http://itequipment.baf.org/', 'ri-list-settings-line', '1450', '#0de71c', '2023-02-27', '2023-02-27'),
(39, 'Prototype Aircraft Manufacturing Project Inventory Management Software (PAMIS)', '30. Prototype Aircraft Manufacturing Project Inventory Management Software', 'http://pamis.baf.org/', 'ri-safe-fill', '1500', '#f28202', '2023-02-27', '2023-02-27'),
(40, 'BAF Walfare Trust Accounting System', '31. BAF Walfare Trust Accounting System', 'http://bafwt.baf.org/', 'ri-file-list-3-line', '1550', '#0937f1', '2023-02-27', '2023-02-27');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` int(11) NOT NULL,
  `uname` varchar(512) COLLATE utf8_unicode_ci NOT NULL,
  `user_name` varchar(256) COLLATE utf8_unicode_ci NOT NULL,
  `password` varchar(256) COLLATE utf8_unicode_ci NOT NULL,
  `status` varchar(128) COLLATE utf8_unicode_ci NOT NULL DEFAULT 'Pending',
  `user_type` varchar(128) COLLATE utf8_unicode_ci NOT NULL,
  `created_at` date NOT NULL,
  `updated_at` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `uname`, `user_name`, `password`, `status`, `user_type`, `created_at`, `updated_at`) VALUES
(1, 'Omar Faruq', 'omar', '280', 'Active', 'Admin', '2023-02-20', '2023-02-20'),
(3, 'Md Rahmat Ullah', 'rahmat', '123', 'Active', 'Admin', '0000-00-00', '0000-00-00');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `application_soft`
--
ALTER TABLE `application_soft`
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
-- AUTO_INCREMENT for table `application_soft`
--
ALTER TABLE `application_soft`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=41;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
