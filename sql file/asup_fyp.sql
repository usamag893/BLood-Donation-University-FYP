-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Sep 14, 2023 at 10:01 PM
-- Server version: 10.4.24-MariaDB
-- PHP Version: 8.1.6

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `asup_fyp`
--

-- --------------------------------------------------------

--
-- Table structure for table `donor_details`
--

CREATE TABLE `donor_details` (
  `id` int(23) NOT NULL,
  `first_name` varchar(30) NOT NULL,
  `last_name` varchar(30) NOT NULL,
  `phone` varchar(30) NOT NULL,
  `email` varchar(30) NOT NULL,
  `gender` varchar(30) NOT NULL,
  `address` varchar(30) NOT NULL,
  `age` varchar(30) NOT NULL,
  `blood_group` varchar(30) NOT NULL,
  `state` varchar(30) NOT NULL,
  `district` varchar(30) NOT NULL,
  `pin` varchar(30) NOT NULL,
  `last_donation` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `donor_details`
--

INSERT INTO `donor_details` (`id`, `first_name`, `last_name`, `phone`, `email`, `gender`, `address`, `age`, `blood_group`, `state`, `district`, `pin`, `last_donation`) VALUES
(25, 'John', 'Doe', '123-456-7890', 'john.doe@example.com', '', '123 Main St', '30', 'A+', 'Punjab', 'Lahore', '54000', '2022-08-15'),
(26, 'Jane', 'Smith', '987-654-3210', 'jane.smith@example.com', '', '456 Elm St', '25', 'B-', 'Sindh', 'Karachi', '75500', '2022-09-20'),
(27, 'David', 'Johnson', '555-123-4567', 'david.johnson@example.com', '', '789 Oak St', '35', 'O+', 'Khyber Pakhtunkhwa', 'Peshawar', '25000', '2022-07-10'),
(28, 'Sarah', 'Wilson', '111-222-3333', 'sarah.wilson@example.com', '', '101 Pine St', '28', 'AB-', 'Balochistan', 'Quetta', '87300', '2022-10-05'),
(29, 'Michael', 'Brown', '222-333-4444', 'michael.brown@example.com', '', '202 Cedar St', '40', 'A-', 'Gilgit-Baltistan', 'Skardu', '15100', '2022-06-25'),
(30, 'Ayesha', 'Khan', '333-444-5555', 'ayesha.khan@example.com', '', '303 Walnut St', '29', 'B+', 'Azad Kashmir', 'Muzaffarabad', '13100', '2022-11-12'),
(31, 'Ali', 'Ahmed', '444-555-6666', 'ali.ahmed@example.com', '', '404 Oak St', '32', 'O-', 'Punjab', 'Rawalpindi', '46000', '2022-09-30'),
(32, 'Fatima', 'Akhtar', '777-888-9999', 'fatima.akhtar@example.com', '', '505 Maple St', '24', 'A+', 'Sindh', 'Hyderabad', '71000', '2022-08-20'),
(33, 'Zain', 'Malik', '666-777-8888', 'zain.malik@example.com', '', '606 Cedar St', '27', 'B-', 'Khyber Pakhtunkhwa', 'Abbottabad', '22000', '2022-07-05'),
(34, 'Mehmood', 'Hassan', '888-999-0000', 'mehmood.hassan@example.com', '', '707 Pine St', '38', 'AB+', 'Balochistan', 'Gwadar', '91300', '2022-12-10'),
(35, 'Nadia', 'Saeed', '999-000-1111', 'nadia.saeed@example.com', '', '808 Elm St', '23', 'O+', 'Gilgit-Baltistan', 'Gilgit', '15100', '2022-06-15'),
(36, 'Khalid', 'Riaz', '222-111-3333', 'khalid.riaz@example.com', '', '909 Walnut St', '41', 'A-', 'Azad Kashmir', 'Kotli', '13100', '2022-11-25'),
(37, 'Sana', 'Tariq', '111-555-7777', 'sana.tariq@example.com', '', '101 Oak St', '33', 'B+', 'Punjab', 'Faisalabad', '38000', '2022-10-15'),
(38, 'Aamir', 'Khan', '555-333-1111', 'aamir.khan@example.com', '', '202 Cedar St', '26', 'AB-', 'Sindh', 'Sukkur', '65200', '2022-07-20'),
(39, 'Hina', 'Zafar', '777-000-9999', 'hina.zafar@example.com', '', '303 Maple St', '30', 'B-', 'Khyber Pakhtunkhwa', 'Nowshera', '24100', '2022-08-05'),
(40, 'Usman', 'Iqbal', '111-999-6666', 'usman.iqbal@example.com', '', '404 Pine St', '29', 'O-', 'Balochistan', 'Khuzdar', '84300', '2022-09-10'),
(41, 'Aisha', 'Ali', '666-111-5555', 'aisha.ali@example.com', '', '505 Elm St', '36', 'A+', 'Gilgit-Baltistan', 'Skardu', '15100', '2022-12-30'),
(42, 'Rizwan', 'Akram', '555-777-0000', 'rizwan.akram@example.com', '', '606 Oak St', '27', 'B+', 'Azad Kashmir', 'Mirpur', '13100', '2022-11-05'),
(43, 'Nashit', 'Khalid', '999-666-3333', 'nashit.khalid@example.com', '', '707 Maple St', '31', 'AB-', 'Punjab', 'Lahore', '54000', '2022-07-01'),
(44, 'Amna', 'Rashid', '111-222-3333', 'amna.rashid@example.com', '', '808 Cedar St', '26', 'A+', 'Sindh', 'Karachi', '75500', '2022-08-25'),
(45, 'Ch Mehboob', 'Ali', '03334905101', 'alqaflatravelstoursint@gmail.c', 'female', '4 A a colony OTL OKARA', '23', 'AB-', 'Punjab', 'Bhera', '56300', '2023-08-29'),
(46, 'iqra', 'kanwal', '123', '123@gmail.com', 'female', '123', '12', 'A+', 'Azad Kashmir', 'Bhimbar', '123', '2023-08-30'),
(47, 'fjklaj', 'kjkljlk', '8789789', '87@gmail.com', 'female', '122', '545', 'A+', 'Azad Kashmir', 'Bhimbar', '122', '0000-00-00'),
(48, 'Muhammad', 'Usama', '03226997630', 'usamag893@gmail.com', 'male', '4 A a colony OTL OKARA', '24', 'O+', 'Punjab', 'Okara', '56300', '2023-08-03'),
(49, 'Muhammad', 'ahmad', '123-123-123', 'ahmad@gmail.com', 'male', 'okara', '24', 'O+', 'Punjab', 'Okara', '56300', '0000-00-00');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` int(23) NOT NULL,
  `name` varchar(30) NOT NULL,
  `email` varchar(23) NOT NULL,
  `pwd` varchar(23) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `name`, `email`, `pwd`) VALUES
(1, 'Muhammad Usama ', 'usamag893@gmail.com', 'Okara786'),
(2, 'Muhammad Ahmad', 'ahmad@gmail.com', '12344'),
(3, 'Saqib Awais', 'saqibbhatti@gmail.com', '321'),
(11, 'faizan', 'faizan@gmail.com', 'okara786'),
(12, 'basam ali', 'basama@gmail.com', 'basama'),
(13, 'malik airaf', 'airaf@gmail.com', 'airaf123'),
(14, 'John Doe', 'john.doe@example.com', 'password1'),
(15, 'Jane Smith', 'jane.smith@example.com', 'password2'),
(16, 'David Johnson', 'david.johnson@example.c', 'password3'),
(17, 'Sarah Wilson', 'sarah.wilson@example.co', 'password4'),
(18, 'Michael Brown', 'michael.brown@example.c', 'password5'),
(19, 'Ayesha Khan', 'ayesha.khan@example.com', 'password6'),
(20, 'Ali Ahmed', 'ali.ahmed@example.com', 'password7'),
(21, 'Fatima Akhtar', 'fatima.akhtar@example.c', 'password8'),
(22, 'Zain Malik', 'zain.malik@example.com', 'password9'),
(23, 'Mehmood Hassan', 'mehmood.hassan@example.', 'password10'),
(24, 'Nadia Saeed', 'nadia.saeed@example.com', 'password11'),
(25, 'Khalid Riaz', 'khalid.riaz@example.com', 'password12'),
(26, 'Sana Tariq', 'sana.tariq@example.com', 'password13'),
(27, 'Aamir Khan', 'aamir.khan@example.com', 'password14'),
(28, 'Hina Zafar', 'hina.zafar@example.com', 'password15'),
(29, 'Usman Iqbal', 'usman.iqbal@example.com', 'password16'),
(30, 'Aisha Ali', 'aisha.ali@example.com', 'password17'),
(31, 'Rizwan Akram', 'rizwan.akram@example.co', 'password18'),
(32, 'Nashit Khalid', 'nashit.khalid@example.c', 'password19'),
(33, 'Amna Rashid', 'amna.rashid@example.com', 'password20'),
(34, 'Faisal Kamran', 'faisal.kamran@example.c', 'password21'),
(35, 'Sara Khan', 'sara.khan@example.com', 'password22'),
(36, 'Imran Malik', 'imran.malik@example.com', 'password23'),
(37, 'Sadaf Ahmed', 'sadaf.ahmed@example.com', 'password24'),
(38, 'Kamran Ali', 'kamran.ali@example.com', 'password25'),
(39, 'Saima Butt', 'saima.butt@example.com', 'password26'),
(40, 'Bilal Shah', 'bilal.shah@example.com', 'password27'),
(41, 'Rabia Malik', 'rabia.malik@example.com', 'password28'),
(42, 'Tariq Abbas', 'tariq.abbas@example.com', 'password29'),
(43, 'Nabeel Ahmed', 'nabeel.ahmed@example.co', 'password30'),
(44, 'Fariha Qureshi', 'fariha.qureshi@example.', 'password31'),
(45, 'Kashif Khan', 'kashif.khan@example.com', 'password32'),
(46, 'Adeel Butt', 'adeel.butt@example.com', 'password33'),
(47, 'Safia Khan', 'safia.khan@example.com', 'password34'),
(48, 'Nashit Tariq', 'nashit.tariq@example.co', 'password35'),
(49, 'Amina Ali', 'amina.ali@example.com', 'password36'),
(50, 'Sami Ahmed', 'sami.ahmed@example.com', 'password37'),
(51, 'Fahad Malik', 'fahad.malik@example.com', 'password38'),
(52, 'Sadaf Qureshi', 'sadaf.qureshi@example.c', 'password39'),
(53, 'Imran Khan', 'imran.khan@example.com', 'password40'),
(54, 'Ayesha Iqbal', 'ayesha.iqbal@example.co', 'password41'),
(55, 'Kamran Riaz', 'kamran.riaz@example.com', 'password42'),
(56, 'Rabia Khan', 'rabia.khan@example.com', 'password43'),
(57, 'Tariq Ali', 'tariq.ali@example.com', 'password44'),
(58, 'Nadia Malik', 'nadia.malik@example.com', 'password45'),
(59, 'check1', 'check1@gmail.com', 'check1'),
(60, 'alpha', 'alpha@gmail', 'alpha'),
(61, 'alpha', 'alpha@gmail', 'alpha'),
(62, 'imdad', 'imdad@gmail.com', 'imdad');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `donor_details`
--
ALTER TABLE `donor_details`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `donor_details`
--
ALTER TABLE `donor_details`
  MODIFY `id` int(23) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=50;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` int(23) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=63;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
