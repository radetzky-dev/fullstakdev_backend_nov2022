-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: localhost
-- Creato il: Feb 23, 2023 alle 21:15
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
(1, 'mario', 'rossi', 'guest', 'guest', 'mario.red@guest.it', '2023-02-16 00:00:00', '2023-02-16 20:02:27'),
(2, 'Paola', 'Green', 'cbrinklow0', 'YOvYlczSc', 'cbrinklow0.green@green.com', '2023-02-23 20:57:52', '2023-02-23 19:57:52'),
(3, 'Gianni', 'Blue', 'lquig1', 'P1Duid', 'lquig1.blue@blue.com', '2023-02-23 20:57:52', '2023-02-23 19:57:52'),
(4, 'Gianni', 'Yellow', 'egreep2', 'xPiINg', 'egreep2.yellow@yellow.com', '2023-02-23 20:57:52', '2023-02-23 19:57:52'),
(5, 'Boh', 'Clinton', 'jboundey3', 'Ki06L1ImPmD', 'jboundey3.clinton@clinton.com', '2023-02-23 20:57:52', '2023-02-23 19:57:52'),
(6, 'Fulvio', 'Yellow', 'mcobbin4', 'TelBEKtQt', 'mcobbin4.yellow@yellow.com', '2023-02-23 20:57:52', '2023-02-23 19:57:52'),
(7, 'Fulvio', 'White', 'cohanley5', 'iYu4pZC', 'cohanley5.white@white.com', '2023-02-23 20:57:52', '2023-02-23 19:57:52'),
(8, 'Giulia', 'Clinton', 'sgroucutt6', 'l8sfD6Sp', 'sgroucutt6.clinton@clinton.com', '2023-02-23 20:57:52', '2023-02-23 19:57:52'),
(9, 'Gianni', 'Clinton', 'oliveing7', 'fgsbYK', 'oliveing7.clinton@clinton.com', '2023-02-23 20:57:52', '2023-02-23 19:57:52'),
(10, 'Gianni', 'Blue', 'hsymers8', 'AtE3KZB', 'hsymers8.blue@blue.com', '2023-02-23 20:57:52', '2023-02-23 19:57:52'),
(11, 'Paola', 'Simpson', 'iaykroyd9', 'Mivi8Q9fFdc', 'iaykroyd9.simpson@simpson.com', '2023-02-23 20:57:52', '2023-02-23 19:57:52'),
(12, 'Boh', 'Green', 'relkinsa', '9g4HzbS', 'relkinsa.green@green.com', '2023-02-23 20:57:52', '2023-02-23 19:57:52'),
(13, 'Gianni', 'Clinton', 'ltrinemanb', 't4yIwJjX', 'ltrinemanb.clinton@clinton.com', '2023-02-23 20:57:52', '2023-02-23 19:57:52'),
(14, 'Gianni', 'Simpson', 'rwestmorelandc', 'm2WkLUYii', 'rwestmorelandc.simpson@simpson.com', '2023-02-23 20:57:52', '2023-02-23 19:57:52'),
(15, 'Rachel', 'Blue', 'stumultyd', 'Xvby0XNg', 'stumultyd.blue@blue.com', '2023-02-23 20:57:52', '2023-02-23 19:57:52'),
(16, 'Fulvio', 'Pink', 'mgiacoppoe', 'rbLamKAD', 'mgiacoppoe.pink@pink.com', '2023-02-23 20:57:52', '2023-02-23 19:57:52'),
(17, 'Fulvio', 'Green', 'edanielutf', 'GamgnnnJw1GE', 'edanielutf.green@green.com', '2023-02-23 20:57:52', '2023-02-23 19:57:52'),
(18, 'Fulvio', 'Blue', 'eowersg', 'pLCjhrxb1DA2', 'eowersg.blue@blue.com', '2023-02-23 20:57:52', '2023-02-23 19:57:52'),
(19, 'Gianni', 'Blue', 'ashawdforthh', 'p8c8AoCn', 'ashawdforthh.blue@blue.com', '2023-02-23 20:57:52', '2023-02-23 19:57:52'),
(20, 'Paola', 'Yellow', 'bdohertyi', 'juQpiMmFQS6', 'bdohertyi.yellow@yellow.com', '2023-02-23 20:57:52', '2023-02-23 19:57:52'),
(21, 'Boh', 'Blue', 'rarnattj', 'oZxo9n6K', 'rarnattj.blue@blue.com', '2023-02-23 20:57:52', '2023-02-23 19:57:52'),
(22, 'Giulia', 'Pink', 'wscheuk', 'DKvwYgHho', 'wscheuk.pink@pink.com', '2023-02-23 20:57:52', '2023-02-23 19:57:52'),
(23, 'Rachel', 'Pink', 'baveralll', 'dMTuCp9', 'baveralll.pink@pink.com', '2023-02-23 20:57:52', '2023-02-23 19:57:52'),
(24, 'Giulia', 'Red', 'dbehnem', 'pUubiShvbmv', 'dbehnem.red@red.com', '2023-02-23 20:57:52', '2023-02-23 19:57:52'),
(25, 'Boh', 'Pink', 'itrown', 'FYgS6IQ5gVy', 'itrown.pink@pink.com', '2023-02-23 20:57:52', '2023-02-23 19:57:52'),
(26, 'Fulvio', 'Simpson', 'csextyo', '77wEluLoL5rJ', 'csextyo.simpson@simpson.com', '2023-02-23 20:57:52', '2023-02-23 19:57:52'),
(27, 'Rachel', 'Simpson', 'lkirwanp', 'fiVAQlJLy', 'lkirwanp.simpson@simpson.com', '2023-02-23 20:57:52', '2023-02-23 19:57:52'),
(28, 'Paola', 'Yellow', 'bbetzq', 'EG9I0Bv2SVao', 'bbetzq.yellow@yellow.com', '2023-02-23 20:57:52', '2023-02-23 19:57:52'),
(29, 'Fulvio', 'White', 'rhawksbyr', 'jgpxQlIodi', 'rhawksbyr.white@white.com', '2023-02-23 20:57:52', '2023-02-23 19:57:52'),
(30, 'Giulia', 'Green', 'wgowlers', 'oVqs1A9s', 'wgowlers.green@green.com', '2023-02-23 20:57:52', '2023-02-23 19:57:52'),
(31, 'Paola', 'Yellow', 'ijebbt', 'LwTW67', 'ijebbt.yellow@yellow.com', '2023-02-23 20:57:52', '2023-02-23 19:57:52');

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
-- Struttura stand-in per le viste `order_customer_product_list`
-- (Vedi sotto per la vista effettiva)
--
CREATE TABLE `order_customer_product_list` (
`Numero Ordine` varchar(30)
,`Nome` varchar(35)
,`Cognome` varchar(45)
,`Prezzo` decimal(10,2)
,`Prodotto` varchar(30)
);

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
(3, 'pane', '0.86', 4, 'pagnotte', NULL, 3, '2023-02-16 00:00:00', '2023-02-16 19:58:13'),
(5, 'Friggitrice', '319.00', 4, 'loren ipsum', NULL, 1, '2023-02-23 21:10:16', '2023-02-23 20:10:16'),
(6, 'Tappi da bottiglia', '658.00', 11, 'loren ipsum', NULL, 3, '2023-02-23 21:10:16', '2023-02-23 20:10:16'),
(7, 'Zerbino', '368.00', 9, 'loren ipsum', NULL, 1, '2023-02-23 21:10:16', '2023-02-23 20:10:16'),
(8, 'Mp3 player', '824.00', 5, 'loren ipsum', NULL, 2, '2023-02-23 21:10:16', '2023-02-23 20:10:16'),
(9, 'Lampada a olio', '281.00', 4, 'loren ipsum', NULL, 2, '2023-02-23 21:10:16', '2023-02-23 20:10:16'),
(10, 'Zerbino', '551.00', 7, 'loren ipsum', NULL, 2, '2023-02-23 21:10:16', '2023-02-23 20:10:16'),
(11, 'Scatola di chiodi', '667.00', 6, 'loren ipsum', NULL, 1, '2023-02-23 21:10:16', '2023-02-23 20:10:16'),
(12, 'Stendipanni', '412.00', 8, 'loren ipsum', NULL, 2, '2023-02-23 21:10:16', '2023-02-23 20:10:16'),
(13, 'Friggitrice', '277.00', 4, 'loren ipsum', NULL, 3, '2023-02-23 21:10:16', '2023-02-23 20:10:16'),
(14, 'Chocolate - Milk Coating', '656.00', 4, 'loren ipsum', NULL, 3, '2023-02-23 21:14:36', '2023-02-23 20:14:36'),
(15, 'Roe - Flying Fish', '610.00', 7, 'loren ipsum', NULL, 2, '2023-02-23 21:14:36', '2023-02-23 20:14:36'),
(16, 'Oil', '767.00', 5, 'loren ipsum', NULL, 3, '2023-02-23 21:14:36', '2023-02-23 20:14:36'),
(17, 'Wine - Cahors Ac 2000, Clos', '832.00', 6, 'loren ipsum', NULL, 3, '2023-02-23 21:14:36', '2023-02-23 20:14:36'),
(18, 'Shrimp - Baby, Cold Water', '87.00', 6, 'loren ipsum', NULL, 2, '2023-02-23 21:14:36', '2023-02-23 20:14:36'),
(19, 'Roe - Flying Fish', '321.00', 9, 'loren ipsum', NULL, 2, '2023-02-23 21:14:36', '2023-02-23 20:14:36'),
(20, 'Carbonated Water - Blackberry', '468.00', 4, 'loren ipsum', NULL, 3, '2023-02-23 21:14:36', '2023-02-23 20:14:36'),
(21, 'Carbonated Water - Blackberry', '99.00', 11, 'loren ipsum', NULL, 3, '2023-02-23 21:14:36', '2023-02-23 20:14:36'),
(22, 'Wine', '834.00', 3, 'loren ipsum', NULL, 1, '2023-02-23 21:14:36', '2023-02-23 20:14:36'),
(23, 'Cheese - Swiss Sliced', '919.00', 8, 'loren ipsum', NULL, 3, '2023-02-23 21:14:36', '2023-02-23 20:14:36'),
(24, 'Cheese - Swiss Sliced', '193.00', 12, 'loren ipsum', NULL, 3, '2023-02-23 21:14:36', '2023-02-23 20:14:36'),
(25, 'Peas - Pigeon, Dry', '50.00', 3, 'loren ipsum', NULL, 3, '2023-02-23 21:14:36', '2023-02-23 20:14:36'),
(26, 'Chocolate - Milk Coating', '69.00', 5, 'loren ipsum', NULL, 1, '2023-02-23 21:14:36', '2023-02-23 20:14:36'),
(27, 'Sauce - Thousand Island', '12.00', 10, 'loren ipsum', NULL, 1, '2023-02-23 21:14:36', '2023-02-23 20:14:36'),
(28, 'Sauce - Thousand Island', '162.00', 4, 'loren ipsum', NULL, 2, '2023-02-23 21:14:36', '2023-02-23 20:14:36'),
(29, 'Cake - Miini Cheesecake Cherry', '548.00', 10, 'loren ipsum', NULL, 2, '2023-02-23 21:14:36', '2023-02-23 20:14:36'),
(30, 'Irish Cream - Baileys', '176.00', 11, 'loren ipsum', NULL, 3, '2023-02-23 21:14:36', '2023-02-23 20:14:36'),
(31, 'Yogurt - Cherry, 175 Gr', '646.00', 8, 'loren ipsum', NULL, 1, '2023-02-23 21:14:36', '2023-02-23 20:14:36');

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

-- --------------------------------------------------------

--
-- Struttura per vista `order_customer_product_list`
--
DROP TABLE IF EXISTS `order_customer_product_list`;

CREATE ALGORITHM=UNDEFINED DEFINER=`root`@`localhost` SQL SECURITY DEFINER VIEW `order_customer_product_list`  AS SELECT `orderTbl`.`order_num` AS `Numero Ordine`, `customerTbl`.`name` AS `Nome`, `customerTbl`.`surname` AS `Cognome`, `orderDetailsTbl`.`sell_price` AS `Prezzo`, `productTbl`.`name` AS `Prodotto` FROM (((`order_details` `orderDetailsTbl` join `orders` `orderTbl` on(`orderDetailsTbl`.`order_id` = `orderTbl`.`id`)) join `product` `productTbl` on(`orderDetailsTbl`.`product_id` = `productTbl`.`id`)) join `customer` `customerTbl` on(`orderTbl`.`customer_id` = `customerTbl`.`id`))  ;

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
  MODIFY `id` smallint(6) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=32;

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
  MODIFY `id` smallint(5) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=32;

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
