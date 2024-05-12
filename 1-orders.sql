CREATE TABLE `orders` (
  `order_id` int(11) NOT NULL,
  `dop` datetime NOT NULL DEFAULT current_timestamp(),
  `name` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `qty` int(5) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

ALTER TABLE `orders`
  ADD PRIMARY KEY (`order_id`),
  ADD KEY `dop` (`dop`);

ALTER TABLE `orders`
  MODIFY `order_id` int(11) NOT NULL AUTO_INCREMENT;
