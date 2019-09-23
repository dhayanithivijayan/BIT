-- phpMyAdmin SQL Dump
-- version 4.8.5
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Sep 22, 2019 at 07:28 PM
-- Server version: 10.1.38-MariaDB
-- PHP Version: 7.3.4

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `db_bt`
--

-- --------------------------------------------------------

--
-- Table structure for table `r2c`
--





SUPPLIER_BAN_2;TAX_EXEMPT_[Y_N];USF_EXEMPT_[Y_N];US_TOUCHING [Y_N];COMMENTS;OTHER_1;OTHER_2;OTHER_2;OTHER_4;OTHER_5;OTHER_6;OTHER_7;OTHER_8

CREATE TABLE `r2c1` (
  `BT_CIRCUIT_ID` int(50) NOT NULL,
  `CONTROL_REVENUE_BUNDLE_UNBUNDLE` varchar(100) NOT NULL,
  `CONTROL_CATEGORY _COST_REVENUE` varchar(100) NOT NULL,
  `GROUP_NAME` varchar(100) NOT NULL,
  `ACCOUNT` varchar(100) NOT NULL,
  `ACCOUNT_NUMBER` varchar(100) NOT NULL,
  `INVOICE_NUMBER` int(50) NOT NULL,
  `BILLED_TO_DATE` date NOT NULL,
  `DUE_BY` date NOT NULL,
  `PSN` varchar(50) NOT NULL,
  `BILL_STRUCTURE_1` varchar(50) NOT NULL,
  `BILL_STRUCTURE_2` varchar(50) NOT NULL,
  `BILL_STRUCTURE_3` varchar(50) NOT NULL,
  `BILL_STRUCTURE_4` varchar(50) NOT NULL,
  `BILL_STRUCTURE_5` varchar(50) NOT NULL,
  `BILL_STRUCTURE_6` varchar(50) NOT NULL,
  `BILL_STRUCTURE_7` varchar(50) NOT NULL,
  `BILL_STRUCTURE_8` varchar(50) NOT NULL,
  `BILL_STRUCTURE_9` varchar(50) NOT NULL,
  `BILL_STRUCTURE_10` varchar(50) NOT NULL,
  `COUNTRY` varchar(50) NOT NULL,
  `CITY_ STATE` varchar(50) NOT NULL,
  `A SITE ADDRESS` varchar(50) NOT NULL,
  `Z SITE ADDRESS` varchar(50) NOT NULL,
  `NODE_ID_BT_POP` varchar(50) NOT NULL,
  `PRODUCT` varchar(50) NOT NULL,
  `SERVICE_CATEGORY` varchar(50) NOT NULL,
  `CAPACITY_MODEL` varchar(50) NOT NULL,
  `CLASSIC_SITE_ID` varchar(50) NOT NULL,
  `INVENTORY_DESCRIPTION` varchar(50) NOT NULL,
  `START_DATE` date NOT NULL,
  `END_DATE` date NOT NULL,
  `SERVICE_PERIOD` date NOT NULL,
  `INVOICE_AMOUNT` float NOT NULL,
  `CURRENCY` varchar(10) NOT NULL,
  `FOREX_RATE` float NOT NULL,
  `ITEM_PRICE_MRC` float NOT NULL,
  `ITEM_PRICE_MRC_USD` float NOT NULL,
  `ACTUAL_CHARGE` float NOT NULL,
  `ACTUAL_CHARGE_USD` float NOT NULL,
  `TAX` double NOT NULL,
  `DISCOUNT` double NOT NULL,
  `USF CODE [33_40]` double NOT NULL,
  `USF%` double NOT NULL,
  `ACTUAL_USF_CHARGE` double NOT NULL,
  `ACTUAL_USF_CHARGE_USD` double NOT NULL,
  `ACTUAL_SUPPLIER_COST_USD` double NOT NULL,
  `REVENUE_DERIVED_CHARGE_USD` varchar(50) NOT NULL,
  `COST_DERIVED_CHARGE_USD` varchar(50) NOT NULL,
  `GROSS_MARGIN_USD` varchar(50) NOT NULL,
  `GROSS_MARGIN_%` varchar(50) NOT NULL,
  `REVENUE_DERIVED_RECOVERY_USF` varchar(50) NOT NULL,
  `COST_DERIVED_CHARGE_USF` varchar(50) NOT NULL,
  `USF_DELTA_USD` varchar(50) NOT NULL,
  `SUPPLIER_NAME` varchar(50) NOT NULL,
  `SUPPLIER_CIRCUIT_ID_1` varchar(50) NOT NULL,
  `SUPPLIER_CIRCUIT_ID_2` varchar(50) NOT NULL,
  `SUPPLIER_BAN_1` varchar(50) NOT NULL,
  `SUPPLIER_BAN_2` varchar(50) NOT NULL,
  `TAX_EXEMPT_[Y_N]` varchar(10) NOT NULL,
  `USF_EXEMPT_[Y_N]` varchar(10) NOT NULL,
  `US_TOUCHING [Y_N]` varchar(10) NOT NULL,
  `COMMENTS` text NOT NULL,
  `OTHER_1` varchar(10) NOT NULL,
  `OTHER_2` varchar(10) NOT NULL,
  `OTHER_3` varchar(10) NOT NULL,
  `OTHER_4` varchar(10) NOT NULL,
  `OTHER_5` varchar(10) NOT NULL,
  `OTHER_6` varchar(10) NOT NULL,
  `OTHER_7` varchar(10) NOT NULL,
  `OTHER_8` varchar(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Indexes for dumped tables
--

--
-- Indexes for table `r2c`
--
ALTER TABLE `r2c`
  ADD KEY `control_revenue_bundle_unbundle` (`control_revenue_bundle_unbundle`),
  ADD KEY `control_category_cost_revenue` (`control_category_cost_revenue`),
  ADD KEY `group_name` (`group_name`),
  ADD KEY `account` (`account`),
  ADD KEY `account_number` (`account_number`),
  ADD KEY `invoice_number` (`invoice_number`),
  ADD KEY `product` (`product`),
  ADD KEY `city_state` (`city_state`),
  ADD KEY `service_category` (`service_category`),
  ADD KEY `classic_site_id` (`classic_site_id`),
  ADD KEY `supplier_name` (`supplier_name`),
  ADD KEY `supplier_circuit_id_1` (`supplier_circuit_id_1`),
  ADD KEY `supplier_circuit_id_2` (`supplier_circuit_id_2`),
  ADD KEY `supplier_ban_1` (`supplier_ban_1`),
  ADD KEY `supplier_ban_2` (`supplier_ban_2`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
