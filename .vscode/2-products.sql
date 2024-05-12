-- (A) PRODUCTS TABLE
CREATE TABLE `products` (
  `pid` bigint(20) NOT NULL,
  `name` varchar(255) NOT NULL,
  `image` varchar(255) NOT NULL,
  `price` decimal(10,2) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

ALTER TABLE `products`
  ADD PRIMARY KEY (`pid`);

ALTER TABLE `products`
  MODIFY `pid` bigint(20) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=1;

-- (B) DUMMY PRODUCTS
INSERT INTO `products` (`pid`, `name`, `image`, `price`) VALUES
(1, 'Apple', 'apple.png', '1.23'),
(2, 'Orange', 'orange.png', '2.34'),
(3, 'Pear', 'pear.png', '3.21'),
(4, 'Mango', 'mango.png', '6.54');
