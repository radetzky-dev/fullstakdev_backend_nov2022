-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: localhost
-- Creato il: Feb 16, 2023 alle 21:10
-- Versione del server: 10.4.27-MariaDB
-- Versione PHP: 8.1.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `marketplacemusa`
--

-- --------------------------------------------------------

--
-- Struttura della tabella `category`
--

CREATE TABLE `category` (
  `id` tinyint(3) UNSIGNED NOT NULL,
  `name` varchar(30) NOT NULL,
  `description` varchar(100) NOT NULL,
  `creation_date` datetime NOT NULL,
  `last_update` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dump dei dati per la tabella `category`
--

INSERT INTO `category` (`id`, `name`, `description`, `creation_date`, `last_update`) VALUES
(1, 'utensili', 'ferramenta e brico', '2023-02-16 00:00:00', '2023-02-16 19:42:34'),
(2, 'elettronica', 'computer e cellulari', '2023-02-16 00:00:00', '2023-02-16 19:54:23'),
(3, 'alimentari', 'gastronomia e cibi pronti', '2023-02-16 00:00:00', '2023-02-16 19:54:50');

-- --------------------------------------------------------

--
-- Struttura della tabella `customer`
--

CREATE TABLE `customer` (
  `id` smallint(6) UNSIGNED NOT NULL,
  `name` varchar(35) NOT NULL,
  `surname` varchar(45) NOT NULL,
  `username` varchar(16) NOT NULL,
  `password` varchar(16) NOT NULL,
  `email` varchar(45) NOT NULL,
  `creation_date` datetime NOT NULL,
  `last_update` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dump dei dati per la tabella `customer`
--

INSERT INTO `customer` (`id`, `name`, `surname`, `username`, `password`, `email`, `creation_date`, `last_update`) VALUES
(1, 'mario', 'rossi', 'guest', 'guest', 'mario.red@guest.it', '2023-02-16 00:00:00', '2023-02-16 20:02:27');

-- --------------------------------------------------------

--
-- Struttura della tabella `orders`
--

CREATE TABLE `orders` (
  `id` smallint(5) UNSIGNED NOT NULL,
  `order_num` varchar(30) NOT NULL,
  `payed` bit(1) NOT NULL,
  `pay_date` datetime DEFAULT NULL,
  `customer_id` smallint(5) UNSIGNED NOT NULL,
  `order_date` datetime NOT NULL,
  `last_update` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dump dei dati per la tabella `orders`
--

INSERT INTO `orders` (`id`, `order_num`, `payed`, `pay_date`, `customer_id`, `order_date`, `last_update`) VALUES
(1, 'CUST1-a', b'1', '2023-02-16 00:00:00', 1, '2023-02-16 00:00:00', '2023-02-16 20:04:50'),
(2, 'CUST2-B', b'1', '2023-02-16 00:00:00', 1, '2023-02-16 00:00:00', '2023-02-16 20:05:04');

-- --------------------------------------------------------

--
-- Struttura della tabella `order_details`
--

CREATE TABLE `order_details` (
  `id` mediumint(8) UNSIGNED NOT NULL,
  `product_id` smallint(5) UNSIGNED NOT NULL,
  `order_id` smallint(5) UNSIGNED NOT NULL,
  `sell_price` decimal(10,2) NOT NULL,
  `quantity` tinyint(3) UNSIGNED NOT NULL DEFAULT 1,
  `creation_date` datetime NOT NULL,
  `last_update` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dump dei dati per la tabella `order_details`
--

INSERT INTO `order_details` (`id`, `product_id`, `order_id`, `sell_price`, `quantity`, `creation_date`, `last_update`) VALUES
(1, 1, 2, '7.99', 2, '2023-02-16 00:00:00', '2023-02-16 20:07:12'),
(2, 2, 2, '199.99', 1, '2023-02-16 00:00:00', '2023-02-16 20:08:03'),
(3, 3, 1, '3.50', 2, '2023-02-16 00:00:00', '2023-02-16 20:08:31');

-- --------------------------------------------------------

--
-- Struttura della tabella `product`
--

CREATE TABLE `product` (
  `id` smallint(5) UNSIGNED NOT NULL,
  `name` varchar(30) NOT NULL,
  `price` decimal(10,2) NOT NULL,
  `quantity` tinyint(3) UNSIGNED NOT NULL DEFAULT 1,
  `description` text NOT NULL,
  `photo` varchar(200) DEFAULT NULL COMMENT 'url della foto',
  `category_id` tinyint(4) UNSIGNED NOT NULL,
  `creation_date` datetime NOT NULL,
  `last_update` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dump dei dati per la tabella `product`
--

INSERT INTO `product` (`id`, `name`, `price`, `quantity`, `description`, `photo`, `category_id`, `creation_date`, `last_update`) VALUES
(1, 'martello', '5.99', 3, 'serve coi chiodi', NULL, 1, '2023-02-16 00:00:00', '2023-02-16 19:56:53'),
(2, 'laptop', '182.99', 7, 'HP con 2,5ghz', NULL, 2, '2023-02-16 00:00:00', '2023-02-16 19:57:34'),
(3, 'pane', '0.86', 4, 'pagnotte', NULL, 3, '2023-02-16 00:00:00', '2023-02-16 19:58:13');

-- --------------------------------------------------------

--
-- Struttura della tabella `user`
--

CREATE TABLE `user` (
  `id` smallint(5) UNSIGNED NOT NULL,
  `name` varchar(35) NOT NULL,
  `surname` varchar(45) NOT NULL,
  `username` varchar(16) NOT NULL,
  `password` varchar(16) NOT NULL,
  `email` varchar(45) NOT NULL,
  `creation_date` datetime NOT NULL,
  `last_update` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dump dei dati per la tabella `user`
--

INSERT INTO `user` (`id`, `name`, `surname`, `username`, `password`, `email`, `creation_date`, `last_update`) VALUES
(2, 'mark', 'red', 'admin', 'admin', 'mark.red@guest.it', '2023-02-16 00:00:00', '2023-02-16 20:01:03');

--
-- Indici per le tabelle scaricate
--

--
-- Indici per le tabelle `category`
--
ALTER TABLE `category`
  ADD PRIMARY KEY (`id`);

--
-- Indici per le tabelle `customer`
--
ALTER TABLE `customer`
  ADD PRIMARY KEY (`id`);

--
-- Indici per le tabelle `orders`
--
ALTER TABLE `orders`
  ADD PRIMARY KEY (`id`),
  ADD KEY `fk_orders_customers` (`customer_id`);

--
-- Indici per le tabelle `order_details`
--
ALTER TABLE `order_details`
  ADD PRIMARY KEY (`id`),
  ADD KEY `fk_orderdetails_product` (`product_id`),
  ADD KEY `fk_orderdetails_order` (`order_id`);

--
-- Indici per le tabelle `product`
--
ALTER TABLE `product`
  ADD PRIMARY KEY (`id`),
  ADD KEY `fk_product_category` (`category_id`);

--
-- Indici per le tabelle `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT per le tabelle scaricate
--

--
-- AUTO_INCREMENT per la tabella `category`
--
ALTER TABLE `category`
  MODIFY `id` tinyint(3) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT per la tabella `customer`
--
ALTER TABLE `customer`
  MODIFY `id` smallint(6) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT per la tabella `orders`
--
ALTER TABLE `orders`
  MODIFY `id` smallint(5) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT per la tabella `order_details`
--
ALTER TABLE `order_details`
  MODIFY `id` mediumint(8) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT per la tabella `product`
--
ALTER TABLE `product`
  MODIFY `id` smallint(5) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT per la tabella `user`
--
ALTER TABLE `user`
  MODIFY `id` smallint(5) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- Limiti per le tabelle scaricate
--

--
-- Limiti per la tabella `orders`
--
ALTER TABLE `orders`
  ADD CONSTRAINT `fk_orders_customers` FOREIGN KEY (`customer_id`) REFERENCES `customer` (`id`) ON DELETE CASCADE;

--
-- Limiti per la tabella `order_details`
--
ALTER TABLE `order_details`
  ADD CONSTRAINT `fk_orderdetails_order` FOREIGN KEY (`order_id`) REFERENCES `orders` (`id`) ON DELETE CASCADE,
  ADD CONSTRAINT `fk_orderdetails_product` FOREIGN KEY (`product_id`) REFERENCES `product` (`id`) ON DELETE CASCADE;

--
-- Limiti per la tabella `product`
--
ALTER TABLE `product`
  ADD CONSTRAINT `fk_product_category` FOREIGN KEY (`category_id`) REFERENCES `category` (`id`) ON DELETE CASCADE;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
