-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1:3306
-- Generation Time: Nov 03, 2023 at 06:57 AM
-- Server version: 10.4.28-MariaDB
-- PHP Version: 8.2.4

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
--

-- --------------------------------------------------------

--
-- Table structure for table `tbl_admin`
--

CREATE TABLE `tbl_admin` (
  `admin_id` int(11) NOT NULL,
  `full_name` varchar(100) DEFAULT NULL,
  `username` varchar(100) DEFAULT NULL,
  `password` varchar(100) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `tbl_admin`
--

INSERT INTO `tbl_admin` (`admin_id`, `full_name`, `username`, `password`) VALUES
(1, 'admin', 'admin', 'admin');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_answer`
--

CREATE TABLE `tbl_answer` (
  `answer_id` int(11) NOT NULL,
  `question_id` int(11) NOT NULL,
  `reponse_id` int(11) DEFAULT NULL,
  `rating` int(4) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Table structure for table `tbl_evaluators`
--

CREATE TABLE `tbl_evaluators` (
  `evaluator_id` int(11) NOT NULL,
  `username` varchar(100) NOT NULL,
  `full_name` varchar(100) NOT NULL,
  `email` varchar(100) NOT NULL,
  `password` varchar(100) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `tbl_evaluators`
--

INSERT INTO `tbl_evaluators` (`evaluator_id`, `username`, `full_name`, `email`, `password`) VALUES
(1, 'eval', 'evaluator', 'email@email.com', 'eval');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_participants`
--

CREATE TABLE `tbl_participants` (
  `participant_id` int(11) NOT NULL,
  `username` varchar(100) NOT NULL,
  `full_name` varchar(100) NOT NULL,
  `program` varchar(255) NOT NULL,
  `email` varchar(100) NOT NULL,
  `password` varchar(100) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `tbl_participants`
--

INSERT INTO `tbl_participants` (`participant_id`, `username`, `full_name`, `program`, `email`, `password`) VALUES
(1, 'part', 'participant', 'CSS', 'email@email.com', 'part'),
(2, 'sieroo', 'sieroo', 'sieroo', 'sieroo', 'sieroo');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_program`
--

CREATE TABLE `tbl_program` (
  `program_id` int(11) NOT NULL,
  `program_name` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Table structure for table `tbl_question`
--

CREATE TABLE `tbl_question` (
  `question_id` int(11) NOT NULL,
  `questionnaire_id` int(11) DEFAULT NULL,
  `question` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `tbl_question`
--

INSERT INTO `tbl_question` (`question_id`, `questionnaire_id`, `question`) VALUES
(1, 1, 'Question#1'),
(2, 1, 'Question#2'),
(3, 2, 'Question#3'),
(4, 1, 'Question#3');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_questionnaire`
--

CREATE TABLE `tbl_questionnaire` (
  `questionnaire_id` int(11) NOT NULL,
  `title` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `tbl_questionnaire`
--

INSERT INTO `tbl_questionnaire` (`questionnaire_id`, `title`) VALUES
(1, 'first try'),
(2, 'second attempt');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_response`
--

CREATE TABLE `tbl_response` (
  `response_id` int(11) NOT NULL,
  `questionnaire_id` int(11) DEFAULT NULL,
  `participant_id` int(11) NOT NULL,
  `evaluator_id` int(11) NOT NULL,
  `date_taken` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Indexes for dumped tables
--

--
-- Indexes for table `tbl_admin`
--
ALTER TABLE `tbl_admin`
  ADD PRIMARY KEY (`admin_id`);

--
-- Indexes for table `tbl_answer`
--
ALTER TABLE `tbl_answer`
  ADD PRIMARY KEY (`answer_id`);

--
-- Indexes for table `tbl_evaluators`
--
ALTER TABLE `tbl_evaluators`
  ADD PRIMARY KEY (`evaluator_id`);

--
-- Indexes for table `tbl_participants`
--
ALTER TABLE `tbl_participants`
  ADD PRIMARY KEY (`participant_id`);

--
-- Indexes for table `tbl_program`
--
ALTER TABLE `tbl_program`
  ADD PRIMARY KEY (`program_id`);

--
-- Indexes for table `tbl_question`
--
ALTER TABLE `tbl_question`
  ADD PRIMARY KEY (`question_id`);

--
-- Indexes for table `tbl_questionnaire`
--
ALTER TABLE `tbl_questionnaire`
  ADD PRIMARY KEY (`questionnaire_id`);

--
-- Indexes for table `tbl_response`
--
ALTER TABLE `tbl_response`
  ADD PRIMARY KEY (`response_id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `tbl_admin`
--
ALTER TABLE `tbl_admin`
  MODIFY `admin_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `tbl_answer`
--
ALTER TABLE `tbl_answer`
  MODIFY `answer_id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `tbl_evaluators`
--
ALTER TABLE `tbl_evaluators`
  MODIFY `evaluator_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `tbl_participants`
--
ALTER TABLE `tbl_participants`
  MODIFY `participant_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `tbl_program`
--
ALTER TABLE `tbl_program`
  MODIFY `program_id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `tbl_question`
--
ALTER TABLE `tbl_question`
  MODIFY `question_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `tbl_questionnaire`
--
ALTER TABLE `tbl_questionnaire`
  MODIFY `questionnaire_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `tbl_response`
--
ALTER TABLE `tbl_response`
  MODIFY `response_id` int(11) NOT NULL AUTO_INCREMENT;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
