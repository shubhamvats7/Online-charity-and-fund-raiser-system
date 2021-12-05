-- phpMyAdmin SQL Dump
-- version 5.0.1
-- https://www.phpmyadmin.net/

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";



CREATE TABLE `charities` (
  `id` int(3) NOT NULL,
  `name` varchar(30) NOT NULL,
  `purpose` varchar(30) NOT NULL,
  `founder` varchar(30) NOT NULL,
  `cover` varchar(50) NOT NULL DEFAULT 'chars/default.jpg'
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;


INSERT INTO `charities` (`id`, `name`, `purpose`, `founder`, `cover`) VALUES
(16, 'Save_Trees', 'trees', 'admin', 'chars/1.jpeg'),
(17, 'Help_Poor', 'poor', 'admin', 'chars/default.jpg');



CREATE TABLE `doner` (
  `d_id` int(6) NOT NULL,
  `d_name` varchar(20) NOT NULL,
  `d_amount` int(15) NOT NULL,
  `d_purpose` varchar(40) NOT NULL,
  `d_date` date NOT NULL,
  `d_addr` varchar(40) NOT NULL,
  `d_cell` varchar(15) NOT NULL,
  `d_pay` varchar(25) NOT NULL,
  `d_paytype` varchar(25) NOT NULL,
  `founder` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;



INSERT INTO `doner` (`d_id`, `d_name`, `d_amount`, `d_purpose`, `d_date`, `d_addr`, `d_cell`, `d_pay`, `d_paytype`, `founder`) VALUES
(38, 'Preetham', 123, 'poor', '2021-11-14', 'Vellore', '9724352823', 'Paid', 'Cash', 'admin'),
(39, 'user1', 1000, 'Trees', '2021-11-14', 'Vellore', '9724352823', 'Paid', 'Cheque', 'admin'),
(40, 'user1', 1000, 'Save_trees', '2021-11-14', 'Vellore', '9724355234', 'Paid', 'Cheque', 'admin')


CREATE TABLE `raise` (
  `founder` varchar(50) NOT NULL,
  `name` varchar(50) NOT NULL,
  `purpose` varchar(50) NOT NULL,
  `cover` varchar(50) NOT NULL DEFAULT 'chars/default.jpg',
  `id` int(3) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;



CREATE TABLE `username` (
  `u_name` varchar(20) NOT NULL,
  `u_pass` varchar(16) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;



INSERT INTO `username` (`u_name`, `u_pass`) VALUES
('admin', 'admin'),
('root', 'root');



CREATE TABLE `users` (
  `u_name` varchar(50) NOT NULL,
  `u_pass` varchar(50) NOT NULL,
  `phno` varchar(15) NOT NULL,
  `email` varchar(50) NOT NULL,
  `address` varchar(200) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;



INSERT INTO `users` (`u_name`, `u_pass`, `phno`, `email`, `address`) VALUES
('Preetham', '19BCE2192', '9848675952', 'preetham.pasala2019@vitstident.ac.in', 'Hyderabad'),
('Shubham', '19BCE2181', '7838418147', 'shubham.vats2019@vitstident.ac.in', 'Delhi');


ALTER TABLE `charities`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `id` (`id`);


ALTER TABLE `doner`
  ADD PRIMARY KEY (`d_id`),
  ADD UNIQUE KEY `d_id` (`d_id`);


ALTER TABLE `raise`
  ADD PRIMARY KEY (`name`),
  ADD UNIQUE KEY `id` (`id`);


ALTER TABLE `username`
  ADD UNIQUE KEY `user` (`u_name`);


ALTER TABLE `users`
  ADD PRIMARY KEY (`u_name`),
  ADD UNIQUE KEY `phno` (`phno`),
  ADD UNIQUE KEY `email` (`email`);


ALTER TABLE `charities`
  MODIFY `id` int(3) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=22;

ALTER TABLE `doner`
  MODIFY `d_id` int(6) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=42;


ALTER TABLE `raise`
  MODIFY `id` int(3) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;
COMMIT;
