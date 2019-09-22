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

CREATE TABLE `r2c` (
  `bt_circuit_id` int(50) NOT NULL,
  `control_revenue_bundle_unbundle` varchar(100) NOT NULL,
  `control_category_cost_revenue` varchar(100) NOT NULL,
  `group_name` varchar(100) NOT NULL,
  `account` varchar(100) NOT NULL,
  `account_number` varchar(100) NOT NULL,
  `invoice_number` int(50) NOT NULL,
  `billed_to_date` date NOT NULL,
  `due_by` date NOT NULL,
  `psn` varchar(50) NOT NULL,
  `bill_structure_1` varchar(50) NOT NULL,
  `bill_structure_2` varchar(50) NOT NULL,
  `bill_structure_3` varchar(50) NOT NULL,
  `bill_structure_4` varchar(50) NOT NULL,
  `bill_structure_5` varchar(50) NOT NULL,
  `bill_structure_6` varchar(50) NOT NULL,
  `bill_structure_7` varchar(50) NOT NULL,
  `bill_structure_8` varchar(50) NOT NULL,
  `bill_structure_9` varchar(50) NOT NULL,
  `bill_structure_10` varchar(50) NOT NULL,
  `country` varchar(50) NOT NULL,
  `city_state` varchar(50) NOT NULL,
  `a_site_address` varchar(50) NOT NULL,
  `z_site_address` varchar(50) NOT NULL,
  `node_id_bt_pop` varchar(50) NOT NULL,
  `product` varchar(50) NOT NULL,
  `service_category` varchar(50) NOT NULL,
  `capacity_model` varchar(50) NOT NULL,
  `classic_site_id` varchar(50) NOT NULL,
  `inventory_description` varchar(50) NOT NULL,
  `start_date` date NOT NULL,
  `end_date` date NOT NULL,
  `service_period` date NOT NULL,
  `invoice_amount` float NOT NULL,
  `currency` varchar(10) NOT NULL,
  `forex_rate` float NOT NULL,
  `item_price_mrc` float NOT NULL,
  `item_price_mrc_usd` float NOT NULL,
  `actual_charge` float NOT NULL,
  `actual_charge_usd` float NOT NULL,
  `tax` double NOT NULL,
  `discount` double NOT NULL,
  `usf_code` double NOT NULL,
  `usf_percentage` double NOT NULL,
  `actual_usf_charge` double NOT NULL,
  `actual_usf_charge_usd` double NOT NULL,
  `actual_supplier_cost_usdrge` double NOT NULL,
  `revenue_derived_charge_usd` varchar(50) NOT NULL,
  `cost_derived_charge_usd` varchar(50) NOT NULL,
  `gross_margin_usd` varchar(50) NOT NULL,
  `gross_margin_percentage` varchar(50) NOT NULL,
  `revenue_derived_recovery_usf` varchar(50) NOT NULL,
  `cost_derived_charge_usf` varchar(50) NOT NULL,
  `usf_delta_usd` varchar(50) NOT NULL,
  `supplier_name` varchar(50) NOT NULL,
  `supplier_circuit_id_1` varchar(50) NOT NULL,
  `supplier_circuit_id_2` varchar(50) NOT NULL,
  `supplier_ban_1` varchar(50) NOT NULL,
  `supplier_ban_2` varchar(50) NOT NULL,
  `tax_exempt` varchar(10) NOT NULL,
  `usf_exempt` varchar(10) NOT NULL,
  `usf_touching` varchar(10) NOT NULL,
  `comments` text NOT NULL,
  `other_1` varchar(10) NOT NULL,
  `other_2` varchar(10) NOT NULL,
  `other_3` varchar(10) NOT NULL,
  `other_4` varchar(10) NOT NULL,
  `other_5` varchar(10) NOT NULL,
  `other_6` varchar(10) NOT NULL,
  `other_7` varchar(10) NOT NULL,
  `other_8` varchar(10) NOT NULL
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
