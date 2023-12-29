-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: localhost:3306
-- Generation Time: Dec 29, 2023 at 04:30 AM
-- Server version: 8.0.30
-- PHP Version: 7.4.9

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `project_cannery`
--

-- --------------------------------------------------------

--
-- Table structure for table `resume_cannery_a`
--

CREATE TABLE `resume_cannery_a` (
  `id` int NOT NULL,
  `tanggal` date NOT NULL,
  `shift` enum('A') CHARACTER SET utf8mb3 COLLATE utf8mb3_general_ci NOT NULL,
  `tkline` varchar(20) NOT NULL,
  `tktidakhadir` varchar(20) NOT NULL,
  `tkproduksi` varchar(20) NOT NULL,
  `tonaseproses` varchar(20) NOT NULL,
  `tonasekirim` varchar(20) NOT NULL,
  `stock` varchar(20) NOT NULL,
  `jamkerja` varchar(20) NOT NULL,
  `sc` varchar(20) NOT NULL,
  `scjam` varchar(20) NOT NULL,
  `mppsc` varchar(20) NOT NULL,
  `kapasitas` varchar(20) NOT NULL,
  `recovery` varchar(20) NOT NULL,
  `akumrec` varchar(20) NOT NULL,
  `akumkap` varchar(20) NOT NULL,
  `mppkg` varchar(20) NOT NULL,
  `choice` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `resume_cannery_a`
--

INSERT INTO `resume_cannery_a` (`id`, `tanggal`, `shift`, `tkline`, `tktidakhadir`, `tkproduksi`, `tonaseproses`, `tonasekirim`, `stock`, `jamkerja`, `sc`, `scjam`, `mppsc`, `kapasitas`, `recovery`, `akumrec`, `akumkap`, `mppkg`, `choice`) VALUES
(101, '2022-07-01', 'A', '1080', '31', '1049', ' 1.288 ', ' 1720.40', ' 1184.73', '10.00', ' 19028.23 ', ' 1929.56 ', ' 1.84 ', ' 128.83 ', '14.98 ', '14.98 ', '128.83 ', '122.82 ', '56.37'),
(102, '2022-07-02', 'A', '1080', '31', '1049', ' 1.395 ', ' 1513.85 ', ' 1260.73 ', ' 10.00 ', ' 19275.30 ', ' 1966.07 ', ' 1.87 ', ' 139.53 ', '14.09 ', '14.52 ', '134.18 ', '133.01 ', '54.57'),
(103, '2022-07-04', 'A', '1096', '31', '1065', ' 1.394 ', ' 1168.30 ', ' 211.92 ', ' 10.00 ', ' 21272.71 ', ' 2131.00 ', ' 2.00 ', ' 139.43 ', '15.28 ', '14.78 ', '135.93 ', '130.92 ', '54.21'),
(104, '2022-07-05', 'A', '1096', '31', '1065', ' 1.361 ', ' 1007.44 ', ' 1086.67 ', ' 10.00 ', ' 20509.43 ', ' 2076.21 ', ' 1.95 ', ' 136.11 ', '15.25 ', '14.90 ', '135.97 ', '127.80 ', '51.37'),
(105, '2022-07-06', 'A', '1097', '31', '1066', ' 1.370 ', ' 997.40 ', ' 940.84 ', ' 10.00 ', ' 20588.87 ', ' 2083.53 ', ' 1.95 ', ' 137.01 ', '15.21 ', '14.96 ', '136.18 ', '128.53 ', '50.58'),
(106, '2022-07-07', 'A', '1096', '31', '1065', ' 1.377 ', ' 1002.72 ', ' 995.43 ', ' 10.00 ', ' 20376.46 ', ' 2065.94 ', ' 1.94 ', ' 137.75 ', '15.00 ', '14.97 ', '136.44 ', '129.34 ', '87.54'),
(107, '2022-07-08', 'A', '1096', '31', '1065', ' 1.370 ', ' 856.22 ', ' 908.85 ', ' 10.00 ', ' 20868.02 ', ' 2118.13 ', ' 1.99 ', ' 137.03 ', '15.46 ', '15.04 ', '136.53 ', '128.67 ', '21.30'),
(108, '2022-07-09', 'A', '1096', '31', '1065', ' 343 ', ' -   ', ' 839.80 ', ' 2.50 ', ' 6190.77 ', ' 2504.09 ', ' 2.35 ', ' 137.32 ', '18.24 ', '15.15 ', '136.55 ', '128.94 ', '56.89'),
(109, '2022-07-11', 'A', '1096', '31', '1065', ' 952 ', ' 1772.86 ', ' -   ', ' 7.00 ', ' 14699.47 ', ' 2126.31 ', ' 2.00 ', ' 136.06 ', '15.63 ', '15.19 ', '136.51 ', '127.76 ', '55.31'),
(110, '2022-07-12', 'A', '1094', '31', '1063', ' 1.264 ', ' 1711.10 ', ' 511.85 ', ' 10.00 ', ' 19639.68 ', ' 2001.36 ', ' 1.88 ', ' 126.41 ', '15.83 ', '15.26 ', '135.38 ', '118.92 ', '32.12'),
(111, '2022-07-13', 'A', '1094', '31', '1063', ' 1.331 ', ' 1897.04 ', ' 552.89 ', ' 10.00 ', ' 20266.36 ', ' 2075.48 ', ' 1.95 ', ' 133.11 ', '15.59 ', '15.29 ', '135.15 ', '125.22 ', '21.12'),
(112, '2022-07-14', 'A', '1093', '72', '1021', '947', '1818.20', '593.09', '7.50', '14253.95', '1931.37', '1.89', '126.25', '15.30', '15.29', '134.53', '123.65', '32.45'),
(113, '2022-07-15', 'A', '1093', '56', '1037', ' 1.326 ', ' 1873.92 ', ' 1080.49 ', ' 9.50 ', ' 20413.68 ', ' 2190.02 ', ' 2.11 ', ' 139.62 ', '15.69 ', '15.32 ', '134.94 ', '134.64 ', '67.89'),
(114, '2022-07-16', 'A', '1094', '48', '1046', ' 1.278 ', ' 1620.54 ', ' 1163.14 ', ' 10.00 ', ' 21151.26 ', ' 2158.91 ', ' 2.06 ', ' 127.77 ', '16.90 ', '15.44 ', '134.38 ', '122.16 ', '66.32'),
(115, '2022-07-17', 'A', '1094', '48', '1046', ' 1.346 ', ' 1137.55 ', ' 1170.39 ', ' 10.00 ', ' 19336.14 ', ' 1978.23 ', ' 1.89 ', ' 134.63 ', '14.69 ', '15.39 ', '134.40 ', '128.71 ', '56.45'),
(116, '2022-07-18', 'A', '1093', '53', '1040', ' 590 ', ' 680.56 ', ' 961.64 ', ' 4.50 ', ' 7490.03 ', ' 1706.27 ', ' 1.64 ', ' 131.02 ', '13.02 ', '15.31 ', '134.29 ', '125.98 ', '21.35'),
(117, '2022-07-19', 'A', '1093', '57', '1036', ' 1.337 ', ' 509.86 ', ' 1299.19 ', ' 10.00 ', ' 18747.31 ', ' 1912.88 ', ' 1.85 ', ' 133.74 ', '14.30 ', '15.25 ', '134.25 ', '129.09 ', '53.21'),
(118, '2022-07-20', 'A', '1092', '61', '1031', ' 1.322 ', ' 864.72 ', ' 654.56 ', ' 10.00 ', ' 20817.28 ', ' 2128.63 ', ' 2.06 ', ' 132.24 ', '16.10 ', '15.30 ', '134.13 ', '128.27 ', '88.88'),
(119, '2022-07-21', 'A', '1092', '62', '1030', ' 1.422 ', ' 957.24 ', ' 675.39 ', ' 10.00 ', ' 22204.39 ', ' 2278.29 ', ' 2.21 ', ' 142.23 ', '16.02 ', '15.34 ', '134.60 ', '138.08 ', '42.88'),
(120, '2022-07-22', 'A', '1092', '68', '1024', ' 1.413 ', ' 638.72 ', ' 1036.08 ', ' 10.00 ', ' 22212.35 ', ' 2274.56 ', ' 2.22 ', ' 141.32 ', '16.10 ', '15.39 ', '134.97 ', '138.01 ', '90.55'),
(121, '2022-07-23', 'A', '1092', '90', '1002', ' 1.351 ', ' 758.04 ', ' 625.80 ', ' 10.00 ', ' 22429.47 ', ' 2242.95 ', ' 2.24 ', ' 135.11 ', '16.60 ', '15.45 ', '134.98 ', '134.84 ', '77.72'),
(122, '2022-07-24', 'A', '1092', '90', '1002', ' -   ', ' -   ', ' -   ', ' -   ', ' -   ', ' -   ', ' -   ', ' -   ', ' -   ', ' -   ', ' -   ', ' -   ', ' -   '),
(123, '2022-07-25', 'A', '1092', '63', '1029', ' 1.410 ', ' 1721.68 ', ' 583.19 ', ' 10.00 ', ' 21080.86 ', ' 2130.46 ', ' 2.07 ', ' 141.00 ', '15.11 ', '15.43 ', '135.28 ', '137.02 ', '22.22'),
(124, '2022-07-26', 'A', '1091', '57', '1034', ' 1.320 ', ' 1649.66 ', ' 568.82 ', ' 10.00 ', ' 19548.53 ', ' 1999.72 ', ' 1.93 ', ' 131.96 ', '15.15 ', '15.42 ', '135.12 ', '127.62 ', '88.44'),
(125, '2022-07-27', 'A', '1089', '43', '1046', ' 1.242 ', ' 1580.36 ', ' 282.80 ', ' 9.00 ', ' 18529.81 ', ' 2102.32 ', ' 2.01 ', ' 137.98 ', '15.24 ', '15.41 ', '135.24 ', '131.91 ', '22.16'),
(126, '2022-07-28', 'A', '1067', '49', '1018', ' 1.218 ', ' 1674.76 ', ' 392.03 ', ' 9.00 ', ' 18369.00 ', ' 2064.62 ', ' 2.03 ', ' 135.36 ', '15.25 ', '15.41 ', '135.24 ', '132.97 ', '78.65'),
(127, '2022-07-29', 'A', '1067', '32', '1035', ' 1.178 ', ' 1600.66 ', ' 781.17 ', ' 9.00 ', ' 17712.64 ', ' 2008.28 ', ' 1.94 ', ' 130.87 ', '15.35 ', '15.40 ', '135.08 ', '126.45 ', '22.76'),
(128, '2022-07-30', 'A', '1067', '32', '1035', ' 1.221 ', ' 1579.24 ', ' 1070.47 ', ' 9.00 ', ' 18032.08 ', ' 2042.38 ', ' 1.97 ', ' 135.66 ', '15.06 ', '15.39 ', '135.10 ', '131.07 ', '33.53'),
(129, '2022-07-31', 'A', '1067', '32', '1035', ' 1.198 ', ' 1043.26 ', ' 1008.36 ', ' 9.00 ', ' 16951.46 ', ' 1913.38 ', ' 1.85 ', ' 133.15 ', ' 14.37 ', '15.36 ', '135.03 ', '128.65 ', '22.12'),
(130, '2022-08-01', 'A', '1072', '37', '1035', ' 976 ', ' 581.64 ', ' 853.23 ', ' 8.00 ', ' 15730.52 ', ' 1992.07 ', ' 1.92 ', ' 122.03 ', '16.32 ', '16.32 ', '122.03 ', '117.91 ', '23.90');

-- --------------------------------------------------------

--
-- Table structure for table `resume_cannery_all`
--

CREATE TABLE `resume_cannery_all` (
  `id` int NOT NULL,
  `tanggal` date NOT NULL,
  `shift` enum('ALL') CHARACTER SET utf8mb3 COLLATE utf8mb3_general_ci NOT NULL,
  `tkline` varchar(20) NOT NULL,
  `tktidakhadir` varchar(20) NOT NULL,
  `tkproduksi` varchar(20) NOT NULL,
  `tonaseproses` varchar(20) NOT NULL,
  `tonasekirim` varchar(20) NOT NULL,
  `stock` varchar(20) NOT NULL,
  `jamkerja` varchar(20) NOT NULL,
  `sc` varchar(20) NOT NULL,
  `scjam` varchar(20) NOT NULL,
  `mppsc` varchar(20) NOT NULL,
  `kapasitas` varchar(20) NOT NULL,
  `recovery` varchar(20) NOT NULL,
  `akumrec` varchar(20) NOT NULL,
  `akumkap` varchar(20) NOT NULL,
  `mppkg` varchar(20) NOT NULL,
  `choice` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `resume_cannery_all`
--

INSERT INTO `resume_cannery_all` (`id`, `tanggal`, `shift`, `tkline`, `tktidakhadir`, `tkproduksi`, `tonaseproses`, `tonasekirim`, `stock`, `jamkerja`, `sc`, `scjam`, `mppsc`, `kapasitas`, `recovery`, `akumrec`, `akumkap`, `mppkg`, `choice`) VALUES
(12, '2022-07-01', 'ALL', '2181', '94', '2087', ' 2.627 ', ' 2702.98 ', ' 1184.73 ', ' 20.00 ', ' 40336.11 ', ' 2041.01 ', ' 0.98 ', ' 131,35 ', '15.54 ', '15.54 ', '131.35 ', '125.21 ', '87.67'),
(13, '2022-07-02', 'ALL', '2181', '94', '2087', ' 2.722 ', ' 1673.21 ', ' 1260.73 ', ' 20.00 ', ' 39407.70 ', ' 1999.03 ', ' 0.96 ', ' 136.10 ', '14.69 ', '15.11 ', '133.73 ', '129.74 ', '53.77'),
(14, '2022-07-04', 'ALL', '2213', '94', '2119', ' 2.497 ', ' 3371.60 ', ' 211.92 ', ' 18.50 ', ' 36629.68 ', ' 1994.10 ', ' 0.94 ', ' 134.96 ', '14.77 ', '15.00 ', '134.12 ', '126.73 ', '65.76'),
(15, '2022-07-05', 'ALL', '2213', '94', '2119', ' 2.762 ', '  2615.84 ', ' 1086.67 ', ' 20.00 ', ' 41360.55 ', ' 2095.56 ', ' 0.99 ', ' 138.08 ', '15.18 ', '15.05 ', '135.13 ', '129.66 ', '76.43'),
(16, '2022-07-06', 'ALL', '2214', '94', '2120', '  2.741 ', ' 2796.08 ', ' 940.84 ', ' 20.00 ', ' 41413.03 ', ' 2088.79 ', ' 0.99 ', ' 137.07 ', '15.24 ', '15.09 ', '135.52 ', '128.59 ', '86.76'),
(17, '2022-07-07', 'ALL', '2213', '94', '2119', ' 2.743 ', ' 2656.06 ', ' 995.43 ', ' 20.00 ', ' 40655.08 ', ' 2057.68 ', ' 0.97 ', ' 137.13 ', '15.01 ', '15.07 ', '135.79 ', '128.76 ', '34.54'),
(18, '2022-07-08', 'ALL', '2213', '94', '2119', ' 2.711 ', ' 2641.46 ', ' 908.85 ', ' 19.50 ', ' 40072.73 ', ' 2080.31 ', ' 0.98 ', ' 139.00 ', '14.97 ', '15.06 ', '136.25 ', '130.52 ', '76.67'),
(19, '2022-07-09', 'ALL', '2213', '94', '2119', ' 1.742 ', ' 902.38 ', ' 839.80 ', ' 12.50 ', ' 27252.33 ', ' 2201.46 ', ' 1.04 ', ' 139.37 ', '15.80 ', '15.12 ', '136.51 ', '130.87 ', '88.53'),
(20, '2022-07-11', 'ALL', '2213', '94', '2119', ' 1.989 ', ' 2500.86 ', ' -   ', ' 15.00 ', ' 30815.48 ', ' 2080.92 ', ' 0.98 ', ' 132.60 ', '15.69 ', '15.17 ', '136.15 ', '124.51 ', '33.45'),
(21, '2022-07-12', 'ALL', '2211', '94', '2117', ' 2.486 ', ' 2527.14 ', ' 511.85 ', ' 19.00 ', ' 38794.52 ', ' 2088.41 ', ' 0.99 ', ' 130.85 ', '15.96 ', '15.25 ', '135.61 ', '123.09 ', '55.56'),
(22, '2022-07-13', 'ALL', '2209', '94', '2115', ' 2.679 ', ' 2719.68 ', ' 552.89 ', ' 20.00 ', ' 4134.28 ', ' 2108.82 ', ' 1.00 ', ' 133.97 ', '15.74 ', '15.30 ', '135.45 ', '126.03 ', '44.78'),
(23, '2022-07-14', 'ALL', '2208', '126', '2082', '2.311', '2798.30', '593.09', '17.50', '36374.14', '2116.30', '1.02', '132.05', '16.03', '15.35', '135.18', '124.46', '77.76'),
(24, '2022-07-15', 'ALL', '2207', '111', '2096', ' 2.641 ', ' 2723.96 ', ' 1080.49 ', ' 19.50 ', ' 42368.66 ', ' 2206.61 ', ' 1.05 ', ' 135.45 ', '16.29 ', '15.43 ', '135.20 ', '127.91 ', '75.33'),
(25, '2022-07-16', 'ALL', '2210', '119', '2091', ' 2.564 ', ' 2571.14 ', ' 1163.14 ', ' 20.00 ', ' 42537.42 ', ' 2156.49 ', ' 1.03 ', ' 128.19 ', '16.82 ', '15.53 ', '134.67 ', '122.56 ', '55.32'),
(26, '2022-07-17', 'ALL', '2210', '119', '2091', ' 1.346 ', ' 1137.55 ', ' 1170.39 ', ' 10.00 ', ' 19336.14 ', ' 1978.23 ', ' 0.95 ', ' 134.63 ', '14.69 ', '15.50 ', '134.66 ', '128.71 ', '11.11'),
(27, '2022-07-18', 'ALL', '2209', '114', '2095', ' 1.884 ', ' 2221.93 ', ' 961.64 ', ' 14.00 ', ' 22931.65 ', ' 1672.55 ', ' 0.80 ', ' 134.60 ', '12.43 ', '15.35 ', '134.66 ', '127.58 ', '33.21'),
(28, '2022-07-19', 'ALL', '2209', '103', '2106', ' 2.636 ', ' 1991.02 ', ' 1299.19 ', ' 20.00 ', ' 35759.17 ', ' 1826.85 ', ' 0.87 ', ' 131.78 ', '13.86 ', '15.25 ', '134.47 ', '123.16 ', '77.18'),
(29, '2022-07-20', 'ALL', '2208', '100', '2108', ' 2.626 ', ' 2646.76 ', ' 654.56 ', ' 20.00 ', ' 39386.17 ', ' 2013.02 ', ' 0.95 ', ' 131.30 ', '15.33 ', '15.26 ', '134.28 ', '121.91 ', '22.21'),
(30, '2022-07-21', 'ALL', '2208', '93', '2115', ' 2.811 ', ' 3171.56 ', ' 675.39 ', ' 20.00 ', ' 43992.47 ', ' 2247.83 ', ' 1.06 ', ' 140.54 ', '15.99 ', '15.30 ', '134.64 ', '129.53 ', '66.67'),
(31, '2022-07-22', 'ALL', '2208', '94', '2114', ' 2.785 ', ' 2374.54 ', ' 1036.08 ', ' 19.50 ', ' 43750.68 ', ' 2293.54 ', ' 1.08 ', ' 142.81 ', '16.06 ', '15.35 ', '135.08 ', '131.02 ', '90.66'),
(32, '2022-07-23', 'ALL', '2208', '132', '2076', ' 2.772 ', ' 2591.50 ', ' 625.80 ', ' 20.00 ', ' 45085.54 ', ' 2273.06 ', ' 1.09 ', ' 138.58 ', '16.40 ', '15.40 ', '135.26 ', '129.03 ', '44.43'),
(33, '2022-07-24', 'ALL', '2208', '132', '2076', ' 1.276 ', ' 1413.57 ', ' 445.71 ', ' 9.00 ', ' 19735.83 ', ' 2192.87 ', ' 1.06 ', ' 141.79 ', '15.47 ', '15.40 ', '135.41 ', '132.02 ', '32.77'),
(34, '2022-07-25', 'ALL', '2208', '117', '2091', ' 2.382 ', ' 2368.10 ', ' 583.19 ', ' 17.00 ', ' 36459.73 ', ' 2178.05 ', ' 1.04 ', ' 140.14 ', '15.54 ', '15.41 ', '135.60 ', '131.96 ', '99.21'),
(35, '2022-07-26', 'ALL', '2207', '133', '2074', ' 2.523 ', ' 2237.00 ', ' 568.82 ', ' 19.00 ', ' 39419.23 ', ' 2119.41 ', ' 1.02 ', ' 132.79 ', '15.96 ', '15.43 ', '135.48 ', '127.68 ', '67.78'),
(36, '2022-07-27', 'ALL', '2205', '134', '2071', ' 2.315 ', ' 2424.70 ', ' 282.80 ', ' 17.00 ', ' 35595.64 ', ' 2131.84 ', ' 1.03 ', ' 136.20 ', '15.65 ', '15.44 ', '135.51 ', '130.21 ', '55.24'),
(37, '2022-07-28', 'ALL', '2179', '117', '2062', ' 2.296 ', ' 2685.22 ', ' 392.03 ', ' 17.50 ', ' 36105.84 ', ' 2090.09 ', ' 1,01 ', ' 131.20 ', '15.93 ', '15.46 ', '135.34 ', '125.67 ', '11.11'),
(38, '2022-07-29', 'ALL', '2166', '78', '2088', ' 2.283 ', ' 2572.54 ', ' 781.17 ', ' 17.50 ', ' 35884.39 ', ' 2092.52 ', ' 1.00 ', ' 130.47 ', '16.04 ', '15.48 ', '135.17 ', '123.90 ', '38.92'),
(39, '2022-07-30', 'ALL', '2166', '78', '2088', ' 2.302 ', ' 2239.70 ', ' 1070.47 ', ' 17.50 ', ' 36178.54 ', ' 2097.51 ', ' 1.00 ', ' 131.53 ', '15.95 ', '15.50 ', '135.04 ', '124.91 ', '22.94'),
(40, '2022-07-31', 'ALL', '2166', '78', '2088', ' 1.198 ', ' 1043.26 ', ' 1008.36 ', ' 9.00 ', ' 16951.46 ', ' 1913.38 ', ' 0.92 ', ' 133.15 ', '14.37 ', '15.48 ', '135.01 ', '126.45 ', '47.77'),
(41, '2022-08-01', 'ALL', '2159', '71', '2088', ' 2.044 ', ' 2389.20 ', ' 853.23 ', ' 16.00 ', ' 31863.03 ', ' 2017.64 ', ' 0.97 ', ' 127.77 ', '15.79 ', '15.79 ', '127.77 ', '121.34 ', '86.43');

-- --------------------------------------------------------

--
-- Table structure for table `resume_cannery_b`
--

CREATE TABLE `resume_cannery_b` (
  `id` int NOT NULL,
  `tanggal` date NOT NULL,
  `shift` enum('B') CHARACTER SET utf8mb3 COLLATE utf8mb3_general_ci NOT NULL,
  `tkline` varchar(20) NOT NULL,
  `tktidakhadir` varchar(20) NOT NULL,
  `tkproduksi` varchar(20) NOT NULL,
  `tonaseproses` varchar(20) NOT NULL,
  `tonasekirim` varchar(20) NOT NULL,
  `stock` varchar(20) NOT NULL,
  `jamkerja` varchar(20) NOT NULL,
  `sc` varchar(20) NOT NULL,
  `scjam` varchar(20) NOT NULL,
  `mppsc` varchar(20) NOT NULL,
  `kapasitas` varchar(20) NOT NULL,
  `recovery` varchar(20) NOT NULL,
  `akumrec` varchar(20) NOT NULL,
  `akumkap` varchar(20) NOT NULL,
  `mppkg` varchar(20) NOT NULL,
  `choice` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `resume_cannery_b`
--

INSERT INTO `resume_cannery_b` (`id`, `tanggal`, `shift`, `tkline`, `tktidakhadir`, `tkproduksi`, `tonaseproses`, `tonasekirim`, `stock`, `jamkerja`, `sc`, `scjam`, `mppsc`, `kapasitas`, `recovery`, `akumrec`, `akumkap`, `mppkg`, `choice`) VALUES
(9, '2022-07-01', 'B', '1101', '63', '1038', '1.339', ' 982.58 ', ' 1184.73 ', ' 10.00 ', ' 21307.88 ', ' 2152.47 ', ' 2.07 ', ' 133.86 ', '16.08 ', '16.08 ', '133.86 ', '128.96 ', '54.30'),
(10, '2022-07-02', 'B', '1101', '63', '1038', ' 1.327 ', ' 159.36 ', ' 1260.73 ', ' 10.00 ', ' 20132.40 ', ' 2032 ', ' 1.96 ', ' 132.68 ', '15.32 ', '15.70 ', '133.27 ', '127.82 ', '52.46'),
(11, '2022-07-04', 'B', '1117', '63', '1054', ' 1.103 ', ' 2203.30 ', ' 211.92 ', ' 8.50 ', ' 15356.97 ', ' 1833.05 ', ' 1.74 ', ' 129.71 ', '14.13 ', '15.24 ', '132.21 ', '123.07 ', '50.58'),
(12, '2022-07-05', 'B', '1117', '63', '1054', ' 1.401 ', ' 1608.40 ', ' 1086.67 ', ' 10.00 ', ' 20851.12 ', ' 2114.90 ', ' 2.01 ', ' 140.06 ', '15.10 ', '15.20 ', '134.25 ', '132.88 ', '48.70'),
(13, '2022-07-06', 'B', '1117', '63', '1054', ' 1.371 ', ' 1798.68 ', ' 940.84 ', ' 10.00 ', ' 20824.16 ', ' 2094.05 ', ' 1.99 ', ' 137.14 ', '15.27 ', '15.22 ', '134.84 ', '130.11 ', '50.33'),
(14, '2022-07-07', 'B', '1117', '63', '1054', ' 1.365 ', ' 1653.34 ', ' 995.43 ', ' 10.00 ', ' 20278.62 ', ' 2049.42 ', ' 1.94 ', ' 136.52 ', '15.01 ', '15.18 ', '135.13 ', '129.52 ', '43.12'),
(15, '2022-07-08', 'B', '1117', '63', '1054', ' 1.340 ', ' 1785.24 ', ' 908.85 ', ' 9.50 ', ' 19204.70 ', ' 2040.50 ', ' 1.94 ', ' 141.07 ', '14.46 ', '15.08 ', '135.96 ', '133.85 ', '65.75'),
(16, '2022-07-09', 'B', '1117', '63', '1054', ' 1.399 ', ' 902.38 ', ' 839.80 ', ' 10.00 ', ' 21061.56 ', ' 2125.80 ', ' 2.02 ', ' 139.89 ', '15.20 ', '15.09 ', '136.46 ', '132.72 ', '65.56'),
(17, '2022-07-11', 'B', '1117', '63', '1054', ' 1.037 ', ' 728.00 ', ' -   ', ' 8.00 ', ' 16116.01 ', ' 2041.21 ', ' 1.94 ', ' 129.57 ', '15.75 ', '15.15 ', '135.82 ', '122.93 ', '83.33'),
(18, '2022-07-12', 'B', '1117', '63', '1054', ' 1.222 ', ' 816.04 ', ' 511.85 ', ' 9.00 ', ' 19154.84 ', ' 2185.13 ', ' 2.07 ', ' 135.78 ', '16.09 ', '15.24 ', '135.82 ', '128.82 ', '34.45'),
(19, '2022-07-13', 'B', '1115', '63', '1052', ' 1.348 ', ' 822.64 ', ' 552.89 ', ' 10.00 ', ' 21075.92 ', ' 2142.16 ', ' 2.04 ', ' 134.84 ', '15.89 ', '15.30 ', '135.73 ', '128.18 ', '66.43'),
(20, '2022-07-14', 'B', '1115', '54', '1061', '1.364', '980.10', '593.09', '10.00', '22120.20', '2254.99', '2.13', '136.40', '16.53', '15.41', '135.78', '128.56', '32.12'),
(21, '2022-07-15', 'B', '1114', '55', '1059', ' 1.315 ', ' 850.04 ', ' 1080.49 ', ' 10.00 ', ' 21954.98 ', ' 2222.38 ', ' 2.10 ', ' 131.49 ', '16.90 ', '15.53 ', '135.44 ', '124.16 ', '45.89'),
(22, '2022-07-16', 'B', '1116', '71', '1045', ' 1.286 ', ' 950.60 ', ' 1163.14 ', ' 10.00 ', ' 21386.16 ', ' 2154.06 ', ' 2.06 ', ' 128.61 ', '16.75 ', '15.61 ', '134.94 ', '123.08 ', '65.79'),
(23, '2022-07-17', 'B', '1116', '71', '1045', ' -   ', ' -   ', ' -   ', ' -   ', ' -   ', ' -   ', ' -   ', ' -   ', ' -   ', ' -   ', ' -   ', ' -   ', ' -   '),
(24, '2022-07-18', 'B', '1116', '61', '1055', ' 1.295 ', ' 1541.37 ', ' 961.64 ', ' 9.50 ', ' 15441.63 ', ' 1656.58 ', ' 1.57 ', ' 136.29 ', '12.15 ', '15.38 ', '135.02 ', '129.19 ', '65.90'),
(25, '2022-07-19', 'B', '1116', '46', '1070', ' 1.298 ', ' 1481.16 ', ' 1299.19 ', ' 10.00 ', ' 17011.86 ', ' 1740.82 ', ' 1.63 ', ' 129.83 ', '13.41 ', '15.26 ', '134.69 ', '121.33 ', '43.99'),
(26, '2022-07-20', 'B', '1116', '39', '1077', ' 1.303 ', ' 1782.04 ', ' 654.56 ', ' 10.00 ', ' 18568.89 ', ' 1897.40 ', ' 1.76 ', ' 130.35 ', '14.56 ', '15.22 ', '134.42 ', '121.03 ', '66.21'),
(27, '2022-07-21', 'B', '1116', '31', '1085', ' 1.389 ', ' 2214.32 ', ' 675.39 ', ' 10.00 ', ' 21788.08 ', ' 2217.36 ', ' 2.04 ', ' 138.86 ', '15.97 ', '15.26 ', '134.68 ', '127.98 ', '86.32'),
(28, '2022-07-22', 'B', '1116', '26', '1090', ' 1.372 ', ' 1735.82 ', ' 1036.08 ', ' 9.50 ', ' 21538.33 ', ' 2313.52 ', ' 2.12 ', ' 144.38 ', '16.02 ', '15.30 ', '135.18 ', '132.46 ', '22.98'),
(29, '2022-07-23', 'B', '1116', '42', '1074', ' 1.421 ', ' 1833.46 ', ' 625.80 ', ' 10.00 ', ' 22656.08 ', ' 2303.17 ', ' 2.14 ', ' 142.05 ', '16.21 ', '15.35 ', '135.53 ', '132.27 ', '66.21'),
(30, '2022-07-24', 'B', '1116', '42', '1074', ' 1.276 ', '  1413.57 ', ' 445.71 ', ' 9.00 ', ' 19735.83 ', ' 2192.87 ', ' 2.04 ', ' 141.79 ', '15.47 ', '15.36 ', '135.81 ', '132.02 ', '45.56'),
(31, '2022-07-25', 'B', '1116', '54', '1062', ' 972 ', ' 646.42 ', ' 583.19 ', ' 7.00 ', ' 15378.87 ', ' 2246.03 ', ' 2.11 ', ' 138.93 ', '16.17 ', '15.39 ', '135.91 ', '130.82 ', '22.21'),
(32, '2022-07-26', 'B', '1116', '76', '1040', ' 1.203 ', ' 587.34 ', ' 568.82 ', ' 9.00 ', ' 19870.70 ', ' 2252.40 ', ' 2.17 ', ' 133.72 ', '16.84 ', '15.44 ', '135.82 ', '128.58 ', '43.77'),
(33, '2022-07-27', 'B', '1116', '91', '1025', ' 1.074 ', ' 844.34 ', ' 282.80 ', ' 8.00 ', ' 17065.83 ', ' 2165.05 ', ' 2.11 ', ' 134.21 ', '16.13 ', '15.47 ', '135.77 ', '130.94 ', '83.43'),
(34, '2022-07-28', 'B', '1112', '68', '1044', ' 1.078 ', ' 1010.46 ', ' 392.03 ', ' 8.50 ', ' 17736.83 ', ' 2117.05 ', ' 2.03 ', ' 126.80 ', '16.70 ', '15.51 ', '135.44 ', '121.46 ', '22.22'),
(35, '2022-07-29', 'B', '1099', '46', '1053', ' 1.105 ', ' 971.88 ', ' 781.17 ', ' 8.50 ', ' 18171.75 ', ' 2181.71 ', ' 2.07 ', ' 130.05 ', '16.78 ', '15.55 ', '135.26 ', '123.50 ', '34.57'),
(36, '2022-07-30', 'B', '1099', '46', '1053', ' 1.081 ', ' 660.46 ', ' 1070.47 ', ' 8.50 ', ' 18146.46 ', ' 2155.88 ', ' 2.05 ', ' 127.16 ', '16.95 ', '15.60 ', '134.98 ', '120.76 ', '47.87'),
(37, '2022-07-31', 'B', '1099', '46', '1053', '-', '-', '-', '-', '-', '-', '-', '-', '-', '-', '-', '-', '-'),
(38, '2022-08-01', 'B', '1087', '34', '1053', ' 1.068 ', ' 1807.56 ', ' 853.23 ', ' 8.00 ', ' 16132.50 ', ' 2043.20 ', ' 1.94 ', ' 133.51 ', '15.30 ', '15.30 ', '133.51 ', '126.79 ', '23.45');

-- --------------------------------------------------------

--
-- Table structure for table `resume_cannery_bulanan`
--

CREATE TABLE `resume_cannery_bulanan` (
  `id` int NOT NULL,
  `bulan` enum('januari','februari','maret','april','mei','juni','juli','agustus','september','oktober','november','desember') CHARACTER SET utf8mb3 COLLATE utf8mb3_general_ci NOT NULL,
  `tahun` enum('2022','2023','2024','2025') CHARACTER SET utf8mb3 COLLATE utf8mb3_general_ci NOT NULL,
  `tkline` varchar(20) NOT NULL,
  `tktidakhadir` varchar(20) NOT NULL,
  `tkproduksi` varchar(20) NOT NULL,
  `tonaseproses` varchar(20) NOT NULL,
  `tonasekirim` varchar(20) NOT NULL,
  `stock` varchar(20) NOT NULL,
  `jamkerja` varchar(20) NOT NULL,
  `sc` varchar(20) NOT NULL,
  `scjam` varchar(20) NOT NULL,
  `mppsc` varchar(20) NOT NULL,
  `kapasitas` varchar(20) NOT NULL,
  `recovery` varchar(20) NOT NULL,
  `akumrec` varchar(20) NOT NULL,
  `akumkap` varchar(20) NOT NULL,
  `mppkg` varchar(20) NOT NULL,
  `choice` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `resume_cannery_bulanan`
--

INSERT INTO `resume_cannery_bulanan` (`id`, `bulan`, `tahun`, `tkline`, `tktidakhadir`, `tkproduksi`, `tonaseproses`, `tonasekirim`, `stock`, `jamkerja`, `sc`, `scjam`, `mppsc`, `kapasitas`, `recovery`, `akumrec`, `akumkap`, `mppkg`, `choice`) VALUES
(23, 'januari', '2022', '2234', '110', '2124', ' 61.597 ', ' 62083.41 ', ' -   ', ' 496 ', ' 940309.68 ', ' 1923.58 ', '1.61', ' 124.19 ', '15.49', '15.49', '124.19', '112.8', '78.9'),
(24, 'februari', '2022', '2219', '70', '2149', ' 58.580 ', ' 58858.93 ', ' 486.45 ', ' 469 ', ' 933392.68 ', ' 2014.21 ', '1.69', ' 124.90 ', '16.13', '15.8', '124.54', '113.45', '98.9'),
(25, 'maret', '2022', '2234', '110', '2124', ' 74.229 ', ' 74355.64 ', ' 765.84 ', ' 564 ', ' 1182805.96 ', ' 2121.50 ', '1.75', ' 131.73 ', '16.11', '15.92', '127.19', '119.64', '58.89'),
(26, 'april', '2022', '2219', '70', '2149', ' 61.758 ', ' 60865.88 ', ' 892.55 ', ' 466 ', ' 1004378.29 ', ' 2178.34 ', '1.77', ' 132.53 ', '16.44', '16.04', '128.44', '120.37', '43.12'),
(27, 'mei', '2022', '2234', '110', '2124', ' 61.762 ', ' 617857.54 ', ' -   ', ' 448 ', ' 933397.79 ', ' 2120.38 ', '1.74', ' 137.86 ', '15.38', '15.91', '130.16', '125.22', '23.78'),
(28, 'juni', '2022', '2207', '94', '2113', ' 77.506 ', ' 786677.62 ', ' 23.40 ', ' 551 ', ' 1143957.49 ', ' 2106.65 ', '1.72', ' 140.79 ', '14.96', '15.73', '132.12', '131.58', '67.89'),
(29, 'januari', '2023', '212', '2121', '2121', '2121', '2121', '2121', '2121', '2121', '2121', '2121', '21212', '2121', '2121', '2122', '2122', '21212');

-- --------------------------------------------------------

--
-- Table structure for table `settings`
--

CREATE TABLE `settings` (
  `id` int NOT NULL,
  `tentang_kami` longtext NOT NULL,
  `contact_person` varchar(256) NOT NULL,
  `alamat` varchar(256) NOT NULL,
  `embed` longtext CHARACTER SET utf8mb4 COLLATE utf8mb4_0900_ai_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- Dumping data for table `settings`
--

INSERT INTO `settings` (`id`, `tentang_kami`, `contact_person`, `alamat`, `embed`) VALUES
(1, '&lt;p&gt;Lorem ipsum dolor sit amet, consectetur adipiscing elit. Suspendisse potenti. Quisque at convallis justo. In hac habitasse platea dictumst. Proin non fringilla libero. Integer hendrerit facilisis arcu, vel varius metus tempor a. Duis fermentum purus vel lacus ullamcorper, eget tincidunt mi pellentesque. Suspendisse potenti. Nullam tristique felis ut luctus laoreet. Integer quis dui vel sapien gravida interdum. Nunc pulvinar augue vitae felis bibendum, eu gravida justo luctus. Maecenas cursus urna eu elit consectetur, in ultrices quam sagittis. Sed tincidunt ligula ut justo auctor, id cursus odio bibendum. Nullam in facilisis purus.&lt;/p&gt;\r\n', '082244812291', 'Malang', 'https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d15796.154931393983!2d112.58410744999999!3d-8.19885275!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x2e78a18b5eed866d%3A0x1eb1edfba14233ac!2sPT%20Erasites%20Citra%20Digital%20Indonesia!5e0!3m2!1sid!2sid!4v1703823497910!5m2!1sid!2sid');

-- --------------------------------------------------------

--
-- Table structure for table `slider`
--

CREATE TABLE `slider` (
  `id` int NOT NULL,
  `title` varchar(256) NOT NULL,
  `image` varchar(256) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- Dumping data for table `slider`
--

INSERT INTO `slider` (`id`, `title`, `image`) VALUES
(3, 'Judul 1', '787886297_Picture1.jpg');

-- --------------------------------------------------------

--
-- Table structure for table `user`
--

CREATE TABLE `user` (
  `user_id` int NOT NULL,
  `user_nama` varchar(100) NOT NULL,
  `user_username` varchar(100) NOT NULL,
  `user_password` varchar(100) NOT NULL,
  `user_foto` varchar(100) DEFAULT NULL,
  `user_level` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb3;

--
-- Dumping data for table `user`
--

INSERT INTO `user` (`user_id`, `user_nama`, `user_username`, `user_password`, `user_foto`, `user_level`) VALUES
(1, 'furqon tedy pratama', 'admin', '0192023a7bbd73250516f069df18b500', '1513039713_foto profil wa.jpeg', 'administrator'),
(14, 'ridho', 'rido901', 'fa20b535a2c8e3a2b28b22cd9e7d89a2', '', 'member'),
(15, 'Rama Dhana Virantau', 'ramakun72', '25d55ad283aa400af464c76d713c07ad', '135925825_Picture1.jpg', 'administrator');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `resume_cannery_a`
--
ALTER TABLE `resume_cannery_a`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `resume_cannery_all`
--
ALTER TABLE `resume_cannery_all`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `resume_cannery_b`
--
ALTER TABLE `resume_cannery_b`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `resume_cannery_bulanan`
--
ALTER TABLE `resume_cannery_bulanan`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `settings`
--
ALTER TABLE `settings`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `slider`
--
ALTER TABLE `slider`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`user_id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `resume_cannery_a`
--
ALTER TABLE `resume_cannery_a`
  MODIFY `id` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=131;

--
-- AUTO_INCREMENT for table `resume_cannery_all`
--
ALTER TABLE `resume_cannery_all`
  MODIFY `id` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=42;

--
-- AUTO_INCREMENT for table `resume_cannery_b`
--
ALTER TABLE `resume_cannery_b`
  MODIFY `id` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=39;

--
-- AUTO_INCREMENT for table `resume_cannery_bulanan`
--
ALTER TABLE `resume_cannery_bulanan`
  MODIFY `id` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=30;

--
-- AUTO_INCREMENT for table `settings`
--
ALTER TABLE `settings`
  MODIFY `id` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `slider`
--
ALTER TABLE `slider`
  MODIFY `id` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `user`
--
ALTER TABLE `user`
  MODIFY `user_id` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=16;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;