# PLUG-INS
<img width="1680" alt="Screenshot 2024-06-30 at 2 40 25 PM" src="https://github.com/shadowisf/Plug-insDatabase/assets/97739695/b204619e-1b44-4db9-81b0-1c1c98451eb6">

&emsp;

## DEPENDENCIES
1. XAMPP

&emsp;

## SETUP
1. Clone this repo
2. Install XAMPP
3. Run XAMPP and turn on XAMPP SQL Database
4. Go to localhost in web browser > phpMyAdmin > SQL console
5. Paste the SQL query from `SQL.txt`, or from the last section of this README, to create the database
6. Place cloned repository to `htdocs/php` directory
     - Windows: `C:/XAMPP/htdocs/php/`
     - macOS: `Applications/XAMPP/xamppfiles/htdocs/php/`
7. Enter localhost/php/ in web browser and go to PlugInsDatabase folder
8. Run any .php file. Preferably index_customer.php

&emsp;

## SQL
```
CREATE DATABASE `plug-ins`;
USE `plug-ins`;

-- --------------------------------------------------------

--
-- Table structure for table `address`
--

CREATE TABLE `address` (
  `address_id` int(11) NOT NULL,
  `customer_id` int(11) DEFAULT NULL,
  `staff_id` int(11) DEFAULT NULL,
  `supplier_id` int(11) DEFAULT NULL,
  `emirate_id` int(11) NOT NULL,
  `area` varchar(55) NOT NULL,
  `street` varchar(55) NOT NULL
) ;

--
-- Dumping data for table `address`
--

INSERT INTO `address` (`address_id`, `customer_id`, `staff_id`, `supplier_id`, `emirate_id`, `area`, `street`) VALUES
(1, 1000, NULL, NULL, 1, 'Majaz 2', 'Jamal Abdul Nasser'),
(2, 1001, NULL, NULL, 2, 'Jumeirah 1', 'Al Wasl Road'),
(3, 1002, NULL, NULL, 3, 'Al Bateen', 'Khalifa Bin Shakhbout Street'),
(4, 1003, NULL, NULL, 4, 'Al Rashidiya', 'Mohammed Bin Zayed Road'),
(5, 1004, NULL, NULL, 7, 'Al Khalidiyah', 'Electra Street'),
(6, NULL, 2000, NULL, 1, 'Al Majaz 3', 'Buheira Corniche'),
(7, NULL, 2001, NULL, 2, 'Al Barsha 1', 'Sheikh Zayed Road'),
(8, NULL, 2002, NULL, 3, 'Tourist Club Area', 'Al Muroor Road'),
(9, NULL, 2003, NULL, 4, 'Al Hamidiyah', 'Al Rashidiya Road'),
(10, NULL, 2004, NULL, 5, 'Al Salamah', 'Sheikh Zayed Bin Sultan Street'),
(11, NULL, 2005, NULL, 6, 'Al Rams', 'Sheikh Mohammed Bin Salem Road'),
(12, NULL, 2006, NULL, 7, 'Al Hayl', 'Masafi-Dibba Road'),
(13, NULL, 2007, NULL, 1, 'Al Taawun', 'Al Taawun Road'),
(14, NULL, 2008, NULL, 2, 'Mirdif', 'Emirates Road'),
(15, NULL, 2009, NULL, 3, 'Khalifa City A', 'Abu Dhabi - Al Ain Road'),
(16, NULL, NULL, 3000, 1, 'Al Majaz 1', 'Corniche Road'),
(17, NULL, NULL, 3001, 2, 'Dubai Investment Park', 'Dubai - Abu Dhabi Road'),
(18, NULL, NULL, 3002, 3, 'Musaffah Industrial Area', 'Street 10'),
(19, NULL, NULL, 3003, 4, 'Al Jurf Industrial Area', 'Sheikh Mohammed Bin Zayed Road'),
(20, NULL, NULL, 3004, 5, 'Al Ittihad Road', 'Opposite UAQ Municipality'),
(21, 1005, NULL, NULL, 2, 'Jumeirah', 'JBR');

-- --------------------------------------------------------

--
-- Table structure for table `contact_number`
--

CREATE TABLE `contact_number` (
  `contact_number_id` int(11) NOT NULL,
  `customer_id` int(11) DEFAULT NULL,
  `staff_id` int(11) DEFAULT NULL,
  `supplier_id` int(11) DEFAULT NULL,
  `contact_number` varchar(13) NOT NULL
) ;

--
-- Dumping data for table `contact_number`
--

INSERT INTO `contact_number` (`contact_number_id`, `customer_id`, `staff_id`, `supplier_id`, `contact_number`) VALUES
(1, 1000, NULL, NULL, '+971501234567'),
(2, 1001, NULL, NULL, '+971509876543'),
(3, 1002, NULL, NULL, '+971502345678'),
(4, 1003, NULL, NULL, '+971503456789'),
(5, 1004, NULL, NULL, '+971508765432'),
(6, NULL, 2000, NULL, '+971501234567'),
(7, NULL, 2001, NULL, '+971501234568'),
(8, NULL, 2002, NULL, '+971501234569'),
(9, NULL, 2003, NULL, '+971501234570'),
(10, NULL, 2004, NULL, '+971501234571'),
(11, NULL, 2005, NULL, '+971501234572'),
(12, NULL, 2006, NULL, '+971501234573'),
(13, NULL, 2007, NULL, '+971501234574'),
(14, NULL, 2008, NULL, '+971501234575'),
(15, NULL, 2009, NULL, '+971501234576'),
(16, NULL, NULL, 3000, '+97124567890'),
(17, NULL, NULL, 3001, '+97124567891'),
(18, NULL, NULL, 3002, '+97124567892'),
(19, NULL, NULL, 3003, '+97124567893'),
(20, NULL, NULL, 3004, '+97124567894'),
(21, 1005, NULL, NULL, '+971567582647');

-- --------------------------------------------------------

--
-- Table structure for table `customer`
--

CREATE TABLE `customer` (
  `customer_id` int(11) NOT NULL,
  `customer_name` varchar(55) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `customer`
--

INSERT INTO `customer` (`customer_id`, `customer_name`) VALUES
(1000, 'Les Paul Ranalan'),
(1001, 'John Smith'),
(1002, 'Jane Doe'),
(1003, 'Mike Johnson'),
(1004, 'Sarah Lee'),
(1005, 'John Foxton');

-- --------------------------------------------------------

--
-- Table structure for table `deal`
--

CREATE TABLE `deal` (
  `deal_id` int(11) NOT NULL,
  `deal_name` varchar(55) NOT NULL,
  `deal_discount_percentage` int(3) NOT NULL,
  `deal_start` date NOT NULL,
  `deal_end` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `deal`
--

INSERT INTO `deal` (`deal_id`, `deal_name`, `deal_discount_percentage`, `deal_start`, `deal_end`) VALUES
(5000, 'Ramadan Deals', 10, '2023-03-22', '2023-04-22'),
(5001, 'Summer Sale', 15, '2023-06-01', '2023-06-30'),
(5002, 'Back to School Deals', 20, '2023-08-01', '2023-08-31'),
(5003, 'Halloween Sale', 25, '2023-10-01', '2023-11-01'),
(5004, 'Black Friday Deals', 30, '2023-11-22', '2023-11-30');

-- --------------------------------------------------------

--
-- Table structure for table `email`
--

CREATE TABLE `email` (
  `email_id` int(11) NOT NULL,
  `customer_id` int(11) DEFAULT NULL,
  `staff_id` int(11) DEFAULT NULL,
  `supplier_id` int(11) DEFAULT NULL,
  `email_address` varchar(55) NOT NULL
) ;

--
-- Dumping data for table `email`
--

INSERT INTO `email` (`email_id`, `customer_id`, `staff_id`, `supplier_id`, `email_address`) VALUES
(1, 1000, NULL, NULL, 'les.paul@gmail.com'),
(2, 1001, NULL, NULL, 'john.smith@yahoo.com'),
(3, 1002, NULL, NULL, 'jane.doe@outlook.com'),
(4, 1003, NULL, NULL, 'mike.johnson@protonmail.com'),
(5, 1004, NULL, NULL, 'sarah.lee@gmail.com'),
(6, NULL, 2000, NULL, 'mark.johnson@plug-ins.com'),
(7, NULL, 2001, NULL, 'emma.davis@plug-ins.com'),
(8, NULL, 2002, NULL, 'oliver.taylor@plug-ins.com'),
(9, NULL, 2003, NULL, 'isabella.martinez@plug-ins.com'),
(10, NULL, 2004, NULL, 'lucas.garcia@plug-ins.com'),
(11, NULL, 2005, NULL, 'sophie.clark@plug-ins.com'),
(12, NULL, 2006, NULL, 'liam.baker@plug-ins.com'),
(13, NULL, 2007, NULL, 'chloe.wong@plug-ins.com'),
(14, NULL, 2008, NULL, 'ethan.scott@plug-ins.com'),
(15, NULL, 2009, NULL, 'ava.lee@plug-ins.com'),
(16, NULL, NULL, 3000, 'abc.company@mycompanydomain.com'),
(17, NULL, NULL, 3001, 'xyz.inc@suppliersdomain.com'),
(18, NULL, NULL, 3002, '123.corporation@corpdomain.com'),
(19, NULL, NULL, 3003, 'acme.co@acmedomain.com'),
(20, NULL, NULL, 3004, 'best.suppliers.ltd@bestsuppliersdomain.com'),
(21, 1005, NULL, NULL, 'john.foxton@yahoo.com');

-- --------------------------------------------------------

--
-- Table structure for table `emirate`
--

CREATE TABLE `emirate` (
  `emirate_id` int(11) NOT NULL,
  `emirate_name` varchar(55) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `emirate`
--

INSERT INTO `emirate` (`emirate_id`, `emirate_name`) VALUES
(1, 'Sharjah'),
(2, 'Dubai'),
(3, 'Abu Dhabi'),
(4, 'Ajman'),
(5, 'Umm Al Quwain'),
(6, 'Ras Al Khaimah'),
(7, 'Fujairah');

-- --------------------------------------------------------

--
-- Table structure for table `order_`
--

CREATE TABLE `order_` (
  `order_id` int(11) NOT NULL,
  `customer_id` int(11) NOT NULL,
  `staff_id` int(11) NOT NULL,
  `order_total_price` float NOT NULL,
  `order_payment_method` varchar(55) NOT NULL,
  `order_date` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `order_`
--

INSERT INTO `order_` (`order_id`, `customer_id`, `staff_id`, `order_total_price`, `order_payment_method`, `order_date`) VALUES
(10000, 1000, 2001, 299.99, 'Credit Card', '2023-04-01'),
(10001, 1001, 2003, 49.99, 'Cash', '2023-04-02'),
(10002, 1003, 2006, 149.99, 'Credit Card', '2023-05-05'),
(10003, 1004, 2008, 399.99, 'Debit Card', '2023-05-08'),
(10004, 1002, 2005, 199.99, 'Debit Card', '2023-06-10'),
(10005, 1004, 2007, 99.99, 'Credit Card', '2023-06-15'),
(10006, 1000, 2002, 149.99, 'Debit Card', '2023-06-20'),
(10007, 1001, 2004, 449.99, 'Credit Card', '2023-07-25'),
(10008, 1002, 2009, 199.99, 'Cash', '2023-07-27'),
(10009, 1003, 2005, 99.99, 'Debit Card', '2023-08-30'),
(10010, 1004, 2007, 249.99, 'Credit Card', '2023-08-31'),
(10011, 1002, 2006, 149.99, 'Cash', '2023-09-10'),
(10012, 1001, 2009, 199.99, 'Credit Card', '2023-09-11'),
(10013, 1000, 2004, 299.99, 'Debit Card', '2023-09-15'),
(10014, 1005, 2005, 149.99, 'Credit Card', '2023-05-02');

-- --------------------------------------------------------

--
-- Table structure for table `order_items`
--

CREATE TABLE `order_items` (
  `serial_id` int(11) NOT NULL,
  `order_id` int(11) NOT NULL,
  `product_id` int(11) NOT NULL,
  `order_product_quantity` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `order_items`
--

INSERT INTO `order_items` (`serial_id`, `order_id`, `product_id`, `order_product_quantity`) VALUES
(1, 10002, 4005, 1),
(2, 10000, 4000, 2),
(3, 10001, 4001, 3),
(4, 10003, 4007, 2),
(5, 10004, 4009, 1),
(6, 10005, 4006, 3),
(7, 10006, 4001, 1),
(8, 10007, 4008, 3),
(9, 10008, 4004, 6),
(10, 10009, 4001, 3),
(11, 10010, 4006, 3),
(12, 10011, 4003, 1),
(13, 10012, 4012, 2),
(14, 10013, 4010, 1),
(15, 10014, 4003, 1);

-- --------------------------------------------------------

--
-- Table structure for table `product`
--

CREATE TABLE `product` (
  `product_id` int(11) NOT NULL,
  `product_name` varchar(55) NOT NULL,
  `product_category` varchar(55) NOT NULL,
  `product_price` float NOT NULL,
  `product_stock_quantity` int(11) NOT NULL,
  `product_availability` varchar(3) NOT NULL
) ;

--
-- Dumping data for table `product`
--

INSERT INTO `product` (`product_id`, `product_name`, `product_category`, `product_price`, `product_stock_quantity`, `product_availability`) VALUES
(4000, 'Motospeed CK61', 'Peripherals', 99.99, 100, 'YES'),
(4001, 'Logitech G502', 'Peripherals', 69.99, 150, 'YES'),
(4002, 'Razer DeathAdder', 'Peripherals', 49.99, 200, 'YES'),
(4003, 'Corsair K95', 'Peripherals', 149.99, 2, 'YES'),
(4004, 'SteelSeries Rival 600', 'Peripherals', 79.99, 175, 'YES'),
(4005, 'HyperX Cloud II', 'Headsets', 99.99, 100, 'YES'),
(4006, 'Sennheiser HD 599', 'Headsets', 199.99, 50, 'YES'),
(4007, 'Bose QuietComfort 35 II', 'Headsets', 299.99, 4, 'YES'),
(4008, 'Samsung 970 EVO', 'Storage', 149.99, 75, 'YES'),
(4009, 'WD Blue SN550', 'Storage', 99.99, 100, 'YES'),
(4010, 'Fujifilm Instax Mini 9', 'Cameras', 99.99, 0, 'NO'),
(4011, 'Kindle Paperwhite', 'Tablet', 499.99, 0, 'NO'),
(4012, 'BenQ GW2780', 'Monitor', 699.99, 1, 'YES');

-- --------------------------------------------------------

--
-- Stand-in structure for view `products_less_than_5`
-- (See below for the actual view)
--
CREATE TABLE `products_less_than_5` (
`product_id` int(11)
,`product_name` varchar(55)
,`product_category` varchar(55)
,`product_price` float
,`product_stock_quantity` int(11)
,`product_availability` varchar(3)
);

-- --------------------------------------------------------

--
-- Table structure for table `product_deal`
--

CREATE TABLE `product_deal` (
  `serial_id` int(11) NOT NULL,
  `product_id` int(11) NOT NULL,
  `deal_id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `product_deal`
--

INSERT INTO `product_deal` (`serial_id`, `product_id`, `deal_id`) VALUES
(1, 4000, 5001),
(2, 4001, 5002),
(3, 4002, 5004);

-- --------------------------------------------------------

--
-- Table structure for table `product_supplier`
--

CREATE TABLE `product_supplier` (
  `serial_id` int(11) NOT NULL,
  `product_id` int(11) NOT NULL,
  `supplier_id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `product_supplier`
--

INSERT INTO `product_supplier` (`serial_id`, `product_id`, `supplier_id`) VALUES
(1, 4000, 3000),
(2, 4001, 3003),
(3, 4002, 3000),
(4, 4003, 3002),
(5, 4004, 3001),
(6, 4005, 3004),
(7, 4006, 3000),
(8, 4007, 3004),
(9, 4008, 3003),
(10, 4009, 3001),
(11, 4010, 3002),
(12, 4011, 3001),
(13, 4012, 3004);

-- --------------------------------------------------------

--
-- Table structure for table `sales`
--

CREATE TABLE `sales` (
  `sales_id` int(11) NOT NULL,
  `product_id` int(11) NOT NULL,
  `staff_id` int(11) NOT NULL,
  `sales_quantity` int(11) NOT NULL,
  `sales_date` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `sales`
--

INSERT INTO `sales` (`sales_id`, `product_id`, `staff_id`, `sales_quantity`, `sales_date`) VALUES
(1, 4000, 2000, 5, '2023-04-01'),
(2, 4001, 2001, 10, '2023-04-02'),
(3, 4002, 2002, 7, '2023-05-03'),
(4, 4003, 2003, 2, '2023-05-04'),
(5, 4004, 2004, 8, '2023-05-05'),
(6, 4005, 2005, 12, '2023-06-06'),
(7, 4006, 2006, 3, '2023-07-07'),
(8, 4007, 2007, 6, '2023-08-08'),
(9, 4008, 2008, 9, '2023-09-09'),
(10, 4009, 2009, 4, '2023-10-10'),
(11, 4000, 2005, 3, '2023-11-11'),
(12, 4002, 2003, 5, '2023-12-12'),
(13, 4004, 2001, 2, '2024-01-13'),
(14, 4006, 2009, 6, '2024-02-14'),
(15, 4008, 2007, 8, '2024-03-15'),
(16, 4001, 2002, 7, '2024-04-16'),
(17, 4003, 2004, 1, '2024-05-17'),
(18, 4005, 2006, 4, '2024-06-18'),
(19, 4007, 2008, 10, '2024-07-19'),
(20, 4009, 2000, 9, '2024-08-20');

-- --------------------------------------------------------

--
-- Stand-in structure for view `sales_monthly_report`
-- (See below for the actual view)
--
CREATE TABLE `sales_monthly_report` (
`sales_id` int(11)
,`product_id` int(11)
,`staff_id` int(11)
,`sales_quantity` int(11)
,`sales_date` date
);

-- --------------------------------------------------------

--
-- Table structure for table `staff`
--

CREATE TABLE `staff` (
  `staff_id` int(11) NOT NULL,
  `staff_name` varchar(55) NOT NULL,
  `staff_department` varchar(55) NOT NULL,
  `staff_salary` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `staff`
--

INSERT INTO `staff` (`staff_id`, `staff_name`, `staff_department`, `staff_salary`) VALUES
(2000, 'Mark Johnson', 'Marketing', 5000),
(2001, 'Emma Davis', 'Sales', 6000),
(2002, 'Oliver Taylor', 'IT', 7000),
(2003, 'Isabella Martinez', 'Finance', 8000),
(2004, 'Lucas Garcia', 'HR', 5500),
(2005, 'Sophie Clark', 'Marketing', 4500),
(2006, 'Liam Baker', 'Sales', 6500),
(2007, 'Chloe Wong', 'IT', 7500),
(2008, 'Ethan Scott', 'Finance', 8500),
(2009, 'Ava Lee', 'HR', 6000);

-- --------------------------------------------------------

--
-- Table structure for table `supplier`
--

CREATE TABLE `supplier` (
  `supplier_id` int(11) NOT NULL,
  `supplier_name` varchar(55) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `supplier`
--

INSERT INTO `supplier` (`supplier_id`, `supplier_name`) VALUES
(3000, 'ABC Company'),
(3001, 'XYZ Inc.'),
(3002, '123 Corporation'),
(3003, 'Acme Co.'),
(3004, 'Best Suppliers Ltd.');

-- --------------------------------------------------------

--
-- Structure for view `products_less_than_5`
--
DROP TABLE IF EXISTS `products_less_than_5`;

CREATE ALGORITHM=UNDEFINED DEFINER=`root`@`localhost` SQL SECURITY DEFINER VIEW `products_less_than_5`  AS SELECT `product`.`product_id` AS `product_id`, `product`.`product_name` AS `product_name`, `product`.`product_category` AS `product_category`, `product`.`product_price` AS `product_price`, `product`.`product_stock_quantity` AS `product_stock_quantity`, `product`.`product_availability` AS `product_availability` FROM `product` WHERE `product`.`product_stock_quantity` < 55  ;

-- --------------------------------------------------------

--
-- Structure for view `sales_monthly_report`
--
DROP TABLE IF EXISTS `sales_monthly_report`;

CREATE ALGORITHM=UNDEFINED DEFINER=`root`@`localhost` SQL SECURITY DEFINER VIEW `sales_monthly_report`  AS SELECT `sales`.`sales_id` AS `sales_id`, `sales`.`product_id` AS `product_id`, `sales`.`staff_id` AS `staff_id`, `sales`.`sales_quantity` AS `sales_quantity`, `sales`.`sales_date` AS `sales_date` FROM `sales` WHERE month(`sales`.`sales_date`) = month(curdate()) AND year(`sales`.`sales_date`) = year(curdate())  ;

--
-- Indexes for dumped tables
--

--
-- Indexes for table `address`
--
ALTER TABLE `address`
  ADD PRIMARY KEY (`address_id`),
  ADD KEY `emirate_id` (`emirate_id`),
  ADD KEY `customer_id` (`customer_id`),
  ADD KEY `supplier_id` (`supplier_id`),
  ADD KEY `staff_id` (`staff_id`);

--
-- Indexes for table `contact_number`
--
ALTER TABLE `contact_number`
  ADD PRIMARY KEY (`contact_number_id`),
  ADD KEY `customer_id` (`customer_id`),
  ADD KEY `supplier_id` (`supplier_id`),
  ADD KEY `staff_id` (`staff_id`);

--
-- Indexes for table `customer`
--
ALTER TABLE `customer`
  ADD PRIMARY KEY (`customer_id`);

--
-- Indexes for table `deal`
--
ALTER TABLE `deal`
  ADD PRIMARY KEY (`deal_id`);

--
-- Indexes for table `email`
--
ALTER TABLE `email`
  ADD PRIMARY KEY (`email_id`),
  ADD KEY `customer_id` (`customer_id`),
  ADD KEY `supplier_id` (`supplier_id`),
  ADD KEY `staff_id` (`staff_id`);

--
-- Indexes for table `emirate`
--
ALTER TABLE `emirate`
  ADD PRIMARY KEY (`emirate_id`);

--
-- Indexes for table `order_`
--
ALTER TABLE `order_`
  ADD PRIMARY KEY (`order_id`),
  ADD KEY `customer_id` (`customer_id`),
  ADD KEY `staff_id` (`staff_id`);

--
-- Indexes for table `order_items`
--
ALTER TABLE `order_items`
  ADD PRIMARY KEY (`serial_id`),
  ADD KEY `order_id` (`order_id`),
  ADD KEY `product_id` (`product_id`);

--
-- Indexes for table `product`
--
ALTER TABLE `product`
  ADD PRIMARY KEY (`product_id`);

--
-- Indexes for table `product_deal`
--
ALTER TABLE `product_deal`
  ADD PRIMARY KEY (`serial_id`),
  ADD KEY `product_id` (`product_id`),
  ADD KEY `deal_id` (`deal_id`);

--
-- Indexes for table `product_supplier`
--
ALTER TABLE `product_supplier`
  ADD PRIMARY KEY (`serial_id`),
  ADD KEY `product_id` (`product_id`),
  ADD KEY `supplier_id` (`supplier_id`);

--
-- Indexes for table `sales`
--
ALTER TABLE `sales`
  ADD PRIMARY KEY (`sales_id`),
  ADD KEY `product_id` (`product_id`),
  ADD KEY `staff_id` (`staff_id`);

--
-- Indexes for table `staff`
--
ALTER TABLE `staff`
  ADD PRIMARY KEY (`staff_id`);

--
-- Indexes for table `supplier`
--
ALTER TABLE `supplier`
  ADD PRIMARY KEY (`supplier_id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `address`
--
ALTER TABLE `address`
  MODIFY `address_id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `contact_number`
--
ALTER TABLE `contact_number`
  MODIFY `contact_number_id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `customer`
--
ALTER TABLE `customer`
  MODIFY `customer_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=1006;

--
-- AUTO_INCREMENT for table `deal`
--
ALTER TABLE `deal`
  MODIFY `deal_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5005;

--
-- AUTO_INCREMENT for table `email`
--
ALTER TABLE `email`
  MODIFY `email_id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `emirate`
--
ALTER TABLE `emirate`
  MODIFY `emirate_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT for table `order_`
--
ALTER TABLE `order_`
  MODIFY `order_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10015;

--
-- AUTO_INCREMENT for table `order_items`
--
ALTER TABLE `order_items`
  MODIFY `serial_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=16;

--
-- AUTO_INCREMENT for table `product`
--
ALTER TABLE `product`
  MODIFY `product_id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `product_deal`
--
ALTER TABLE `product_deal`
  MODIFY `serial_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `product_supplier`
--
ALTER TABLE `product_supplier`
  MODIFY `serial_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=14;

--
-- AUTO_INCREMENT for table `sales`
--
ALTER TABLE `sales`
  MODIFY `sales_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=21;

--
-- AUTO_INCREMENT for table `staff`
--
ALTER TABLE `staff`
  MODIFY `staff_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2010;

--
-- AUTO_INCREMENT for table `supplier`
--
ALTER TABLE `supplier`
  MODIFY `supplier_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3005;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `address`
--
ALTER TABLE `address`
  ADD CONSTRAINT `address_ibfk_1` FOREIGN KEY (`emirate_id`) REFERENCES `emirate` (`emirate_id`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `address_ibfk_2` FOREIGN KEY (`customer_id`) REFERENCES `customer` (`customer_id`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `address_ibfk_3` FOREIGN KEY (`supplier_id`) REFERENCES `supplier` (`supplier_id`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `address_ibfk_4` FOREIGN KEY (`staff_id`) REFERENCES `staff` (`staff_id`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `contact_number`
--
ALTER TABLE `contact_number`
  ADD CONSTRAINT `contact_number_ibfk_1` FOREIGN KEY (`customer_id`) REFERENCES `customer` (`customer_id`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `contact_number_ibfk_2` FOREIGN KEY (`supplier_id`) REFERENCES `supplier` (`supplier_id`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `contact_number_ibfk_3` FOREIGN KEY (`staff_id`) REFERENCES `staff` (`staff_id`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `email`
--
ALTER TABLE `email`
  ADD CONSTRAINT `email_ibfk_1` FOREIGN KEY (`customer_id`) REFERENCES `customer` (`customer_id`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `email_ibfk_2` FOREIGN KEY (`supplier_id`) REFERENCES `supplier` (`supplier_id`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `email_ibfk_3` FOREIGN KEY (`staff_id`) REFERENCES `staff` (`staff_id`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `order_`
--
ALTER TABLE `order_`
  ADD CONSTRAINT `order__ibfk_1` FOREIGN KEY (`customer_id`) REFERENCES `customer` (`customer_id`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `order__ibfk_2` FOREIGN KEY (`staff_id`) REFERENCES `staff` (`staff_id`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `order_items`
--
ALTER TABLE `order_items`
  ADD CONSTRAINT `order_items_ibfk_1` FOREIGN KEY (`order_id`) REFERENCES `order_` (`order_id`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `order_items_ibfk_2` FOREIGN KEY (`product_id`) REFERENCES `product` (`product_id`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `product_deal`
--
ALTER TABLE `product_deal`
  ADD CONSTRAINT `product_deal_ibfk_1` FOREIGN KEY (`product_id`) REFERENCES `product` (`product_id`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `product_deal_ibfk_2` FOREIGN KEY (`deal_id`) REFERENCES `deal` (`deal_id`);

--
-- Constraints for table `product_supplier`
--
ALTER TABLE `product_supplier`
  ADD CONSTRAINT `product_supplier_ibfk_1` FOREIGN KEY (`product_id`) REFERENCES `product` (`product_id`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `product_supplier_ibfk_2` FOREIGN KEY (`supplier_id`) REFERENCES `supplier` (`supplier_id`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `sales`
--
ALTER TABLE `sales`
  ADD CONSTRAINT `sales_ibfk_1` FOREIGN KEY (`product_id`) REFERENCES `product` (`product_id`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `sales_ibfk_2` FOREIGN KEY (`staff_id`) REFERENCES `staff` (`staff_id`) ON DELETE CASCADE ON UPDATE CASCADE;
COMMIT;
```
