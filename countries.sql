-- phpMyAdmin SQL Dump
-- version 4.8.3
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jan 08, 2019 at 06:48 AM
-- Server version: 10.1.35-MariaDB
-- PHP Version: 7.2.9

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `onlinezeal_ombuddha`
--

-- --------------------------------------------------------

--
-- Table structure for table `countries`
--

CREATE TABLE `countries` (
  `id` int(10) UNSIGNED NOT NULL,
  `name` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `countries`
--

INSERT INTO `countries` (`id`, `name`, `created_at`, `updated_at`) VALUES
(1, 'Afghanistan', NULL, NULL),
(2, 'Albania', NULL, NULL),
(3, 'Algeria', NULL, NULL),
(4, 'American Samoa', NULL, NULL),
(5, 'Andorra', NULL, NULL),
(6, 'Angola', NULL, NULL),
(7, 'Anguilla', NULL, NULL),
(8, 'Antarctica', NULL, NULL),
(9, 'Antigua and Barbuda', NULL, NULL),
(10, 'Argentina', NULL, NULL),
(11, 'Armenia', NULL, NULL),
(12, 'Aruba', NULL, NULL),
(13, 'Australia', NULL, NULL),
(14, 'Austria', NULL, NULL),
(15, 'Azerbaijan', NULL, NULL),
(16, 'Bahamas', NULL, NULL),
(17, 'Bahrain', NULL, NULL),
(18, 'Bangladesh', NULL, NULL),
(19, 'Barbados', NULL, NULL),
(20, 'Belarus', NULL, NULL),
(21, 'Belgium', NULL, NULL),
(22, 'Belize', NULL, NULL),
(23, 'Benin', NULL, NULL),
(24, 'Bermuda', NULL, NULL),
(25, 'Bhutan', NULL, NULL),
(26, 'Bolivia', NULL, NULL),
(27, 'Bosnia and Herzegowina', NULL, NULL),
(28, 'Botswana', NULL, NULL),
(29, 'Bouvet Island', NULL, NULL),
(30, 'Brazil', NULL, NULL),
(31, 'British Indian Ocean Territory', NULL, NULL),
(32, 'Brunei Darussalam', NULL, NULL),
(33, 'Bulgaria', NULL, NULL),
(34, 'Burkina Faso', NULL, NULL),
(35, 'Burundi', NULL, NULL),
(36, 'Cambodia', NULL, NULL),
(37, 'Cameroon', NULL, NULL),
(38, 'Canada', NULL, NULL),
(39, 'Cape Verde', NULL, NULL),
(40, 'Cayman Islands', NULL, NULL),
(41, 'Central African Republic', NULL, NULL),
(42, 'Chad', NULL, NULL),
(43, 'Chile', NULL, NULL),
(44, 'China', NULL, NULL),
(45, 'Christmas Island', NULL, NULL),
(46, 'Cocos (Keeling) Islands', NULL, NULL),
(47, 'Colombia', NULL, NULL),
(48, 'Comoros', NULL, NULL),
(49, 'Congo', NULL, NULL),
(50, 'Cook Islands', NULL, NULL),
(51, 'Costa Rica', NULL, NULL),
(52, 'Cote D\\Ivoire', NULL, NULL),
(53, 'Croatia', NULL, NULL),
(54, 'Cuba', NULL, NULL),
(55, 'Cyprus', NULL, NULL),
(56, 'Czech Republic', NULL, NULL),
(57, 'Denmark', NULL, NULL),
(58, 'Djibouti', NULL, NULL),
(59, 'Dominica', NULL, NULL),
(60, 'Dominican Republic', NULL, NULL),
(61, 'East Timor', NULL, NULL),
(62, 'Ecuador', NULL, NULL),
(63, 'Egypt', NULL, NULL),
(64, 'El Salvador', NULL, NULL),
(65, 'Equatorial Guinea', NULL, NULL),
(66, 'Eritrea', NULL, NULL),
(67, 'Estonia', NULL, NULL),
(68, 'Ethiopia', NULL, NULL),
(69, 'Falkland Islands (Malvinas)', NULL, NULL),
(70, 'Faroe Islands', NULL, NULL),
(71, 'Fiji', NULL, NULL),
(72, 'Finland', NULL, NULL),
(73, 'France', NULL, NULL),
(74, 'France', NULL, NULL),
(75, 'French Guiana', NULL, NULL),
(76, 'French Polynesia', NULL, NULL),
(77, 'French Southern Territories', NULL, NULL),
(78, 'Gabon', NULL, NULL),
(79, 'Gambia', NULL, NULL),
(80, 'Georgia', NULL, NULL),
(81, 'Germany', NULL, NULL),
(82, 'Ghana', NULL, NULL),
(83, 'Gibraltar', NULL, NULL),
(84, 'Greece', NULL, NULL),
(85, 'Greenland', NULL, NULL),
(86, 'Grenada', NULL, NULL),
(87, 'Guadeloupe', NULL, NULL),
(88, 'Guam', NULL, NULL),
(89, 'Guatemala', NULL, NULL),
(90, 'Guinea', NULL, NULL),
(91, 'Guinea-bissau', NULL, NULL),
(92, 'Guyana', NULL, NULL),
(93, 'Haiti', NULL, NULL),
(94, 'Heard and Mc Donald Islands', NULL, NULL),
(95, 'Honduras', NULL, NULL),
(96, 'Hong Kong', NULL, NULL),
(97, 'Hungary', NULL, NULL),
(98, 'Iceland', NULL, NULL),
(99, 'India', NULL, NULL),
(100, 'Indonesia', NULL, NULL),
(101, 'Iran (Islamic Republic of)', NULL, NULL),
(102, 'Iraq', NULL, NULL),
(103, 'Ireland', NULL, NULL),
(104, 'Israel', NULL, NULL),
(105, 'Italy', NULL, NULL),
(106, 'Jamaica', NULL, NULL),
(107, 'Japan', NULL, NULL),
(108, 'Jordan', NULL, NULL),
(109, 'Kazakhstan', NULL, NULL),
(110, 'Kenya', NULL, NULL),
(111, 'Kiribati', NULL, NULL),
(112, 'North Korea', NULL, NULL),
(113, 'Korea', NULL, NULL),
(114, 'Kuwait', NULL, NULL),
(115, 'Kyrgyzstan', NULL, NULL),
(116, 'Lao People\\s Democratic Republic', NULL, NULL),
(117, 'Latvia', NULL, NULL),
(118, 'Lebanon', NULL, NULL),
(119, 'Lesotho', NULL, NULL),
(120, 'Liberia', NULL, NULL),
(121, 'Libyan Arab Jamahiriya', NULL, NULL),
(122, 'Liechtenstein', NULL, NULL),
(123, 'Lithuania', NULL, NULL),
(124, 'Luxembourg', NULL, NULL),
(125, 'Macau', NULL, NULL),
(126, 'Macedonia', NULL, NULL),
(127, 'Madagascar', NULL, NULL),
(128, 'Malawi', NULL, NULL),
(129, 'Malaysia', NULL, NULL),
(130, 'Maldives', NULL, NULL),
(131, 'Mali', NULL, NULL),
(132, 'Malta', NULL, NULL),
(133, 'Marshall Islands', NULL, NULL),
(134, 'Martinique', NULL, NULL),
(135, 'Mauritania', NULL, NULL),
(136, 'Mauritius', NULL, NULL),
(137, 'Mayotte', NULL, NULL),
(138, 'Mexico', NULL, NULL),
(139, 'Micronesia', NULL, NULL),
(140, 'Moldova', NULL, NULL),
(141, 'Monaco', NULL, NULL),
(142, 'Mongolia', NULL, NULL),
(143, 'Montserrat', NULL, NULL),
(144, 'Morocco', NULL, NULL),
(145, 'Mozambique', NULL, NULL),
(146, 'Myanmar', NULL, NULL),
(147, 'Namibia', NULL, NULL),
(148, 'Nauru', NULL, NULL),
(149, 'Nepal', NULL, NULL),
(150, 'Netherlands', NULL, NULL),
(151, 'Netherlands Antilles', NULL, NULL),
(152, 'New Caledonia', NULL, NULL),
(153, 'New Zealand', NULL, NULL),
(154, 'Nicaragua', NULL, NULL),
(155, 'Niger', NULL, NULL),
(156, 'Nigeria', NULL, NULL),
(157, 'Niue', NULL, NULL),
(158, 'Norfolk Island', NULL, NULL),
(159, 'Northern Mariana Islands', NULL, NULL),
(160, 'Norway', NULL, NULL),
(161, 'Oman', NULL, NULL),
(162, 'Pakistan', NULL, NULL),
(163, 'Palau', NULL, NULL),
(164, 'Panama', NULL, NULL),
(165, 'Papua New Guinea', NULL, NULL),
(166, 'Paraguay', NULL, NULL),
(167, 'Peru', NULL, NULL),
(168, 'Philippines', NULL, NULL),
(169, 'Pitcairn', NULL, NULL),
(170, 'Poland', NULL, NULL),
(171, 'Portugal', NULL, NULL),
(172, 'Puerto Rico', NULL, NULL),
(173, 'Qatar', NULL, NULL),
(174, 'Reunion', NULL, NULL),
(175, 'Romania', NULL, NULL),
(176, 'Russian Federation', NULL, NULL),
(177, 'Rwanda', NULL, NULL),
(178, 'Saint Kitts and Nevis', NULL, NULL),
(179, 'Saint Lucia', NULL, NULL),
(180, 'Saint Vincent and the Grenadines', NULL, NULL),
(181, 'Samoa', NULL, NULL),
(182, 'San Marino', NULL, NULL),
(183, 'Sao Tome and Principe', NULL, NULL),
(184, 'Saudi Arabia', NULL, NULL),
(185, 'Senegal', NULL, NULL),
(186, 'Seychelles', NULL, NULL),
(187, 'Sierra Leone', NULL, NULL),
(188, 'Singapore', NULL, NULL),
(189, 'Slovak Republic', NULL, NULL),
(190, 'Slovenia', NULL, NULL),
(191, 'Solomon Islands', NULL, NULL),
(192, 'Somalia', NULL, NULL),
(193, 'South Africa', NULL, NULL),
(194, 'South Georgia &amp; South Sandwich Islands', NULL, NULL),
(195, 'Spain', NULL, NULL),
(196, 'Sri Lanka', NULL, NULL),
(197, 'St. Helena', NULL, NULL),
(198, 'St. Pierre and Miquelon', NULL, NULL),
(199, 'Sudan', NULL, NULL),
(200, 'Suriname', NULL, NULL),
(201, 'Svalbard and Jan Mayen Islands', NULL, NULL),
(202, 'Swaziland', NULL, NULL),
(203, 'Sweden', NULL, NULL),
(204, 'Switzerland', NULL, NULL),
(205, 'Syrian Arab Republic', NULL, NULL),
(206, 'Taiwan', NULL, NULL),
(207, 'Tajikistan', NULL, NULL),
(208, 'Tanzania', NULL, NULL),
(209, 'Thailand', NULL, NULL),
(210, 'Togo', NULL, NULL),
(211, 'Tokelau', NULL, NULL),
(212, 'Tonga', NULL, NULL),
(213, 'Trinidad and Tobago', NULL, NULL),
(214, 'Tunisia', NULL, NULL),
(215, 'Turkey', NULL, NULL),
(216, 'Turkmenistan', NULL, NULL),
(217, 'Turks and Caicos Islands', NULL, NULL),
(218, 'Tuvalu', NULL, NULL),
(219, 'Uganda', NULL, NULL),
(220, 'Ukraine', NULL, NULL),
(221, 'United Arab Emirates', NULL, NULL),
(222, 'United Kingdom', NULL, NULL),
(223, 'United States', NULL, NULL),
(224, 'United States Minor Outlying Islands', NULL, NULL),
(225, 'Uruguay', NULL, NULL),
(226, 'Uzbekistan', NULL, NULL),
(227, 'Vanuatu', NULL, NULL),
(228, 'Vatican City State (Holy See)', NULL, NULL),
(229, 'Venezuela', NULL, NULL),
(230, 'Viet Nam', NULL, NULL),
(231, 'Virgin Islands (British)', NULL, NULL),
(232, 'Virgin Islands (U.S.)', NULL, NULL),
(233, 'Wallis and Futuna Islands', NULL, NULL),
(234, 'Western Sahara', NULL, NULL),
(235, 'Yemen', NULL, NULL),
(236, 'Yugoslavia', NULL, NULL),
(237, 'Democratic Republic of Congo', NULL, NULL),
(238, 'Zambia', NULL, NULL),
(239, 'Zimbabwe', NULL, NULL);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `countries`
--
ALTER TABLE `countries`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `countries`
--
ALTER TABLE `countries`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=240;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
