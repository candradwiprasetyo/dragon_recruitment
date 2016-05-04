-- phpMyAdmin SQL Dump
-- version 4.5.2
-- http://www.phpmyadmin.net
--
-- Host: localhost
-- Generation Time: May 04, 2016 at 10:09 AM
-- Server version: 10.1.10-MariaDB
-- PHP Version: 5.6.19

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `dragon_recruitment`
--

-- --------------------------------------------------------

--
-- Table structure for table `allergies`
--

CREATE TABLE `allergies` (
  `allergy_id` int(11) NOT NULL,
  `allergy_name` varchar(45) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `allergies`
--

INSERT INTO `allergies` (`allergy_id`, `allergy_name`) VALUES
(1, '-'),
(2, 'Telur'),
(3, 'Seafood'),
(4, 'Kacang');

-- --------------------------------------------------------

--
-- Table structure for table `answers`
--

CREATE TABLE `answers` (
  `answer_id` int(11) NOT NULL,
  `answer_basic_info_id` int(11) NOT NULL,
  `answer_question_id` int(11) NOT NULL,
  `answer_question_option_id` int(11) NOT NULL,
  `answer_value` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `answers`
--

INSERT INTO `answers` (`answer_id`, `answer_basic_info_id`, `answer_question_id`, `answer_question_option_id`, `answer_value`) VALUES
(11, 1, 2, 1, 1),
(12, 1, 3, 4, 2),
(13, 1, 4, 5, 1);

-- --------------------------------------------------------

--
-- Table structure for table `application_histories`
--

CREATE TABLE `application_histories` (
  `application_history_id` int(11) NOT NULL,
  `application_history_date` date DEFAULT NULL,
  `basic_info_id` int(11) NOT NULL,
  `application_history_status_id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `application_histories`
--

INSERT INTO `application_histories` (`application_history_id`, `application_history_date`, `basic_info_id`, `application_history_status_id`) VALUES
(1, '2016-04-21', 1, 1),
(74, '2016-04-26', 2, 1),
(86, '2016-04-26', 1, 5),
(87, '2016-04-26', 1, 8);

-- --------------------------------------------------------

--
-- Table structure for table `basic_infos`
--

CREATE TABLE `basic_infos` (
  `basic_info_id` int(11) NOT NULL,
  `basic_info_first_name` varchar(100) DEFAULT NULL,
  `basic_info_last_name` varchar(100) DEFAULT NULL,
  `basic_info_gender` varchar(1) DEFAULT NULL,
  `basic_info_birth_date` date DEFAULT NULL,
  `basic_info_birth_place` varchar(100) DEFAULT NULL,
  `basic_info_country_id` int(11) NOT NULL,
  `basic_info_npwp_number` varchar(45) DEFAULT NULL,
  `basic_info_city_id` int(11) NOT NULL,
  `basic_info_bpjs_number` varchar(45) DEFAULT NULL,
  `basic_info_license_type` varchar(5) DEFAULT NULL,
  `basic_info_license_number` varchar(45) DEFAULT NULL,
  `basic_info_religion_id` int(11) NOT NULL,
  `basic_info_email` varchar(45) DEFAULT NULL,
  `basic_info_phone_number` varchar(20) DEFAULT NULL,
  `basic_info_marital_status` varchar(1) DEFAULT NULL,
  `basic_info_child_number` decimal(10,0) DEFAULT NULL,
  `basic_info_address` text,
  `basic_info_join_reason` text,
  `basic_info_life_motto` text,
  `basic_info_status_id` int(11) NOT NULL,
  `basic_info_date` date DEFAULT NULL,
  `basic_info_ktp_number` varchar(45) DEFAULT NULL,
  `basic_info_last_education_type_id` int(11) DEFAULT NULL,
  `basic_info_test_date` date DEFAULT NULL,
  `basic_info_test_status` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `basic_infos`
--

INSERT INTO `basic_infos` (`basic_info_id`, `basic_info_first_name`, `basic_info_last_name`, `basic_info_gender`, `basic_info_birth_date`, `basic_info_birth_place`, `basic_info_country_id`, `basic_info_npwp_number`, `basic_info_city_id`, `basic_info_bpjs_number`, `basic_info_license_type`, `basic_info_license_number`, `basic_info_religion_id`, `basic_info_email`, `basic_info_phone_number`, `basic_info_marital_status`, `basic_info_child_number`, `basic_info_address`, `basic_info_join_reason`, `basic_info_life_motto`, `basic_info_status_id`, `basic_info_date`, `basic_info_ktp_number`, `basic_info_last_education_type_id`, `basic_info_test_date`, `basic_info_test_status`) VALUES
(1, 'Adri', 'Driyo Utomo', '1', '2016-04-20', 'Surabaya', 1, '20001', 1, '10001', '1', '932 210 111', 1, 'selubungers@gmail.com', '081 72007857', '1', '0', 'Jalan Gayungsari Timur X No 1 Surabaya', 'I want to be a Dragon', 'Do the best, and you will be the best', 8, '2016-04-25', '5000 567 23006', 8, '2016-04-26', 1),
(2, 'Deny', 'Darmono', '1', '2016-04-20', 'Surabaya', 1, '20001', 2, '10001', '1', '932 210 111', 1, 'selubungers@gmail.com', '0838 4506 4993', '1', '0', 'Jalan Gayungsari Timur X No 1 Surabaya', 'This is my passion', 'Do the best, and you will be the best', 1, '2016-04-26', '1200 567 5334', 4, '0000-00-00', 0);

-- --------------------------------------------------------

--
-- Table structure for table `city`
--

CREATE TABLE `city` (
  `city_id` int(11) NOT NULL,
  `city_name` varchar(45) DEFAULT NULL,
  `city_region_id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `city`
--

INSERT INTO `city` (`city_id`, `city_name`, `city_region_id`) VALUES
(1, 'Surabaya', 1),
(2, 'Sidoarjo', 1);

-- --------------------------------------------------------

--
-- Table structure for table `computers`
--

CREATE TABLE `computers` (
  `computer_id` int(11) NOT NULL,
  `computer_name` varchar(45) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `computers`
--

INSERT INTO `computers` (`computer_id`, `computer_name`) VALUES
(1, 'Laptop Windows'),
(2, 'Laptop Mac'),
(3, 'PC Windows'),
(4, 'PC Mac');

-- --------------------------------------------------------

--
-- Table structure for table `countries`
--

CREATE TABLE `countries` (
  `country_id` int(11) NOT NULL,
  `country_name` varchar(100) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `countries`
--

INSERT INTO `countries` (`country_id`, `country_name`) VALUES
(1, 'Indonesia'),
(2, 'WNA');

-- --------------------------------------------------------

--
-- Table structure for table `educations`
--

CREATE TABLE `educations` (
  `education_id` int(11) NOT NULL,
  `education_name` varchar(100) DEFAULT NULL,
  `education_major` varchar(100) DEFAULT NULL,
  `education_graduate_year` varchar(45) DEFAULT NULL,
  `education_basic_info_id` int(11) NOT NULL,
  `education_type_id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `educations`
--

INSERT INTO `educations` (`education_id`, `education_name`, `education_major`, `education_graduate_year`, `education_basic_info_id`, `education_type_id`) VALUES
(1, 'Vocational High School 2 Buduran', 'Software Engineering', '2011', 1, 4),
(2, 'Narotama University', 'Computer Systems', '2017', 1, 8);

-- --------------------------------------------------------

--
-- Table structure for table `education_types`
--

CREATE TABLE `education_types` (
  `education_type_id` int(11) NOT NULL,
  `education_type_name` varchar(100) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `education_types`
--

INSERT INTO `education_types` (`education_type_id`, `education_type_name`) VALUES
(1, 'SD'),
(2, 'SMP'),
(3, 'SMA'),
(4, 'SMK'),
(5, 'D1'),
(6, 'D2'),
(7, 'D3'),
(8, 'S1'),
(9, 'S2'),
(10, 'S3');

-- --------------------------------------------------------

--
-- Table structure for table `hard_skills`
--

CREATE TABLE `hard_skills` (
  `hard_skill_id` int(11) NOT NULL,
  `basic_info_id` int(11) NOT NULL,
  `hard_skill_type_id` int(11) NOT NULL,
  `hard_skill_value` decimal(10,0) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `hard_skills`
--

INSERT INTO `hard_skills` (`hard_skill_id`, `basic_info_id`, `hard_skill_type_id`, `hard_skill_value`) VALUES
(1, 1, 1, '2'),
(2, 1, 2, '8'),
(3, 1, 3, '8'),
(4, 1, 4, '7'),
(5, 1, 5, '8'),
(6, 1, 6, '3'),
(7, 1, 7, '6'),
(8, 1, 8, '1'),
(9, 1, 9, '3'),
(10, 1, 10, '8'),
(11, 1, 11, '4'),
(12, 1, 12, '3'),
(13, 1, 13, '10'),
(14, 1, 14, '9'),
(15, 1, 15, '3'),
(16, 1, 16, '9'),
(17, 1, 17, '4'),
(18, 1, 18, '9'),
(19, 1, 19, '9'),
(20, 1, 20, '8'),
(21, 1, 21, '3'),
(22, 1, 22, '4'),
(23, 1, 23, '7'),
(24, 1, 24, '3'),
(25, 1, 25, '7'),
(26, 1, 26, '8'),
(27, 1, 27, '7'),
(28, 1, 28, '1'),
(29, 1, 29, '6'),
(30, 1, 30, '9'),
(31, 1, 31, '3'),
(32, 1, 32, '7'),
(33, 1, 33, '6'),
(34, 1, 34, '1'),
(35, 1, 35, '4');

-- --------------------------------------------------------

--
-- Table structure for table `hard_skill_types`
--

CREATE TABLE `hard_skill_types` (
  `hard_skill_type_id` int(11) NOT NULL,
  `hard_skill_type_name` varchar(45) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `hard_skill_types`
--

INSERT INTO `hard_skill_types` (`hard_skill_type_id`, `hard_skill_type_name`) VALUES
(1, 'Microsoft Word'),
(2, 'Microsoft Powerpoint'),
(3, 'Microsoft Excell'),
(4, 'Microsoft Outlook'),
(5, 'Keyboard 10 jari'),
(6, 'Adobe Photoshop'),
(7, 'Adobe Illustrator'),
(8, 'Adobe inDesign'),
(9, 'Adobe Premierre'),
(10, 'Adobe After Effects'),
(11, 'Adobe Dreamweaver'),
(12, '3D Studio Max'),
(13, 'Wacom'),
(14, 'Mouse'),
(15, 'PHP'),
(16, 'HTML + CSS'),
(17, 'Wordpress'),
(18, 'Node JS'),
(19, 'Angular JS'),
(20, 'Java'),
(21, 'Javascript'),
(22, 'Jquery'),
(23, 'C++'),
(24, 'Phyton'),
(25, 'Ruby on Rails'),
(26, 'Oracle'),
(27, 'SQL'),
(28, 'MySQL'),
(29, 'PHPMyAdmin'),
(30, 'Linux OS'),
(31, 'Linux Server'),
(32, 'Windows OS'),
(33, 'Windows Server'),
(34, 'Mikrotik'),
(35, 'AWS');

-- --------------------------------------------------------

--
-- Table structure for table `house_status`
--

CREATE TABLE `house_status` (
  `house_status_id` int(11) NOT NULL,
  `house_status_name` varchar(45) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `house_status`
--

INSERT INTO `house_status` (`house_status_id`, `house_status_name`) VALUES
(1, 'Kost'),
(2, 'Pribadi'),
(3, 'Sewa/Kontrak'),
(4, 'Orang tua');

-- --------------------------------------------------------

--
-- Table structure for table `interview_types`
--

CREATE TABLE `interview_types` (
  `interview_type_id` int(11) NOT NULL,
  `interview_type_name` varchar(45) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `interview_types`
--

INSERT INTO `interview_types` (`interview_type_id`, `interview_type_name`) VALUES
(1, 'Direct Interview '),
(2, 'Online Interview (Skype)');

-- --------------------------------------------------------

--
-- Table structure for table `portfolios`
--

CREATE TABLE `portfolios` (
  `portfolio_id` int(11) NOT NULL,
  `basic_info_id` int(11) DEFAULT NULL,
  `portfolio_position_id` int(11) NOT NULL,
  `portfolio_position_level_id` int(11) NOT NULL,
  `portfolio_expected_salary` decimal(10,0) DEFAULT NULL,
  `portfolio_last_company` varchar(45) DEFAULT NULL,
  `portfolio_last_position` varchar(45) DEFAULT NULL,
  `portfolio_last_position_level_id` int(11) NOT NULL,
  `portfolio_last_salary` decimal(10,0) DEFAULT NULL,
  `portfolio_interview_date1` date DEFAULT NULL,
  `portfolio_interview_date2` date DEFAULT NULL,
  `portfolio_interview_type_id` int(11) NOT NULL,
  `portfolio_work_date` date DEFAULT NULL,
  `portfolio_file` text,
  `portfolio_link` text,
  `portfolio_linkedin` varchar(45) DEFAULT NULL,
  `portfolio_behance` varchar(45) DEFAULT NULL,
  `portfolio_facebook` varchar(45) DEFAULT NULL,
  `portfolio_instagram` varchar(45) DEFAULT NULL,
  `portfolio_reason_out_id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `portfolios`
--

INSERT INTO `portfolios` (`portfolio_id`, `basic_info_id`, `portfolio_position_id`, `portfolio_position_level_id`, `portfolio_expected_salary`, `portfolio_last_company`, `portfolio_last_position`, `portfolio_last_position_level_id`, `portfolio_last_salary`, `portfolio_interview_date1`, `portfolio_interview_date2`, `portfolio_interview_type_id`, `portfolio_work_date`, `portfolio_file`, `portfolio_link`, `portfolio_linkedin`, `portfolio_behance`, `portfolio_facebook`, `portfolio_instagram`, `portfolio_reason_out_id`) VALUES
(1, 1, 1, 1, '3000000', 'PT Elkabumi Caraka Daya', 'Web Developer', 1, '2000000', '2016-04-20', '2016-04-20', 1, '2016-04-20', 'project.pdf', 'https://www.adridriyoutomo.com/', 'https://www.linkedin.com/', 'https://www.behance.net/', 'https://www.facebook.com/', 'https://www.instagram.com/', 1),
(2, 2, 2, 1, '3000000', 'PT Sinar Mas', 'Back End Developer', 1, '3000000', '2016-04-20', '2016-04-20', 1, '2016-04-20', 'project2.jpg', 'https://www.denydarmono.com/', 'https://www.linkedin.com/', 'https://www.behance.net/', 'https://www.facebook.com/', 'https://www.instagram.com/', 2);

-- --------------------------------------------------------

--
-- Table structure for table `positions`
--

CREATE TABLE `positions` (
  `position_id` int(11) NOT NULL,
  `position_name` varchar(45) DEFAULT NULL,
  `position_description` text,
  `position_scope_id` int(11) NOT NULL,
  `position_file1` text,
  `position_file2` text,
  `position_file3` text
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `positions`
--

INSERT INTO `positions` (`position_id`, `position_name`, `position_description`, `position_scope_id`, `position_file1`, `position_file2`, `position_file3`) VALUES
(1, 'Front End Programmer', '', 1, '1_1461315385_12983190_1685244151742920_4353265797367665014_o.jpg', '1_1461315400_1_1461045081_profile_photo.jpg', '1_1461313324_CustomFileInputs.zip'),
(2, 'Back End Programmer', '', 1, '1_1461051151_dragon_recruitment.mwb', '', ''),
(3, 'UI Designer', '', 1, '', '1_1461046111_star.jpg', ''),
(4, 'UX Engineer', '', 1, '', '', ''),
(5, 'Javascript Programmer', '', 1, '', '', ''),
(6, 'Java Programmer', '', 1, '', '', ''),
(7, 'AWS Administrator', '', 1, '', '', ''),
(8, 'Network Administrator', '', 1, '', '', ''),
(9, 'IT Technician', '', 1, '', '', ''),
(10, 'Infrastructure Manager', '', 1, '', '', ''),
(11, 'iOS Developer', '', 1, '', '', ''),
(12, 'Android Developer', '', 1, '', '', ''),
(13, 'System Analyst', '', 1, '', '', ''),
(14, 'Algorithm Engineer', '', 1, '', '', '');

-- --------------------------------------------------------

--
-- Table structure for table `position_levels`
--

CREATE TABLE `position_levels` (
  `position_level_id` int(11) NOT NULL,
  `position_level_name` varchar(100) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `position_levels`
--

INSERT INTO `position_levels` (`position_level_id`, `position_level_name`) VALUES
(1, 'Intern'),
(4, 'Junior'),
(5, 'Staff'),
(6, 'Senior'),
(7, 'Supervisor'),
(8, 'Assistant Manager'),
(9, 'Manager'),
(10, 'General Manager'),
(11, 'Assistant to Director'),
(12, 'Director'),
(13, 'Chief'),
(14, 'Commissioner'),
(15, 'Advisor'),
(16, 'Owner');

-- --------------------------------------------------------

--
-- Table structure for table `questions`
--

CREATE TABLE `questions` (
  `question_id` int(11) NOT NULL,
  `question_name` text,
  `question_description` text
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `questions`
--

INSERT INTO `questions` (`question_id`, `question_name`, `question_description`) VALUES
(2, 'Bagaimana kondisi pintu tersebut tersebut ?', 'desc'),
(3, 'Bagaimana kondisi meja tersebut tersebut ?', 'Deskripsi soal'),
(4, 'Bagaimana kondisi orang tersebut ?', '');

-- --------------------------------------------------------

--
-- Table structure for table `question_options`
--

CREATE TABLE `question_options` (
  `question_option_id` int(11) NOT NULL,
  `question_option_name` text,
  `question_id` int(11) NOT NULL,
  `question_option_number` varchar(2) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `question_options`
--

INSERT INTO `question_options` (`question_option_id`, `question_option_name`, `question_id`, `question_option_number`) VALUES
(1, 'terbuka', 2, '1'),
(2, 'tertutup', 2, '2'),
(3, 'Bagus', 3, '1'),
(4, 'Buruk', 3, '2'),
(5, 'Sakit', 4, '1'),
(6, 'Sehat', 4, '2');

-- --------------------------------------------------------

--
-- Table structure for table `reason_out`
--

CREATE TABLE `reason_out` (
  `reason_out_id` int(11) NOT NULL,
  `reason_out_name` varchar(45) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `reason_out`
--

INSERT INTO `reason_out` (`reason_out_id`, `reason_out_name`) VALUES
(1, 'Bosan'),
(2, 'Mentok'),
(3, 'Ingin tantangan'),
(4, 'Gaji'),
(5, 'Masalah Internal');

-- --------------------------------------------------------

--
-- Table structure for table `recruitments`
--

CREATE TABLE `recruitments` (
  `recruitment_id` int(11) NOT NULL,
  `name` varchar(100) DEFAULT NULL,
  `address` varchar(100) DEFAULT NULL,
  `recruitmentscol` varchar(45) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Table structure for table `region`
--

CREATE TABLE `region` (
  `region_id` int(11) NOT NULL,
  `region_name` varchar(45) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `region`
--

INSERT INTO `region` (`region_id`, `region_name`) VALUES
(1, 'Jawa Timur');

-- --------------------------------------------------------

--
-- Table structure for table `religions`
--

CREATE TABLE `religions` (
  `religion_id` int(11) NOT NULL,
  `religion_name` varchar(45) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `religions`
--

INSERT INTO `religions` (`religion_id`, `religion_name`) VALUES
(1, 'Islam'),
(2, 'Kristen Katholik'),
(3, 'Kristen Protestan'),
(4, 'Budha'),
(5, 'Hindu'),
(6, 'Konghucu');

-- --------------------------------------------------------

--
-- Table structure for table `resume`
--

CREATE TABLE `resume` (
  `resume_id` int(11) NOT NULL,
  `basic_info_id` int(11) NOT NULL,
  `resume_total_work_year` varchar(45) DEFAULT NULL,
  `resume_total_work_month` varchar(45) DEFAULT NULL,
  `resume_computer_id` int(11) NOT NULL,
  `resume_monitor` int(11) DEFAULT NULL,
  `resume_wacom` int(11) DEFAULT NULL,
  `resume_keyboard` int(11) DEFAULT NULL,
  `resume_mouse` int(11) DEFAULT NULL,
  `resume_photo` text
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `resume`
--

INSERT INTO `resume` (`resume_id`, `basic_info_id`, `resume_total_work_year`, `resume_total_work_month`, `resume_computer_id`, `resume_monitor`, `resume_wacom`, `resume_keyboard`, `resume_mouse`, `resume_photo`) VALUES
(1, 1, '2', '0', 1, NULL, NULL, NULL, NULL, 'profile_photo.jpg'),
(2, 2, '3', '0', 2, NULL, NULL, NULL, NULL, 'business_user.png');

-- --------------------------------------------------------

--
-- Table structure for table `resume_tools`
--

CREATE TABLE `resume_tools` (
  `resume_tool_id` int(11) NOT NULL,
  `resume_tool_value` int(11) DEFAULT NULL,
  `resume_tool_basic_info_id` int(11) NOT NULL,
  `tool_id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `resume_tools`
--

INSERT INTO `resume_tools` (`resume_tool_id`, `resume_tool_value`, `resume_tool_basic_info_id`, `tool_id`) VALUES
(1, 1, 1, 1),
(2, 1, 1, 2),
(3, 0, 1, 3),
(4, 0, 1, 4);

-- --------------------------------------------------------

--
-- Table structure for table `scopes`
--

CREATE TABLE `scopes` (
  `scope_id` int(11) NOT NULL,
  `scope_name` varchar(45) DEFAULT NULL,
  `scope_description` text
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `scopes`
--

INSERT INTO `scopes` (`scope_id`, `scope_name`, `scope_description`) VALUES
(1, 'Developer', ''),
(2, 'Creative', ''),
(3, 'Illustrator', '');

-- --------------------------------------------------------

--
-- Table structure for table `secondary_infos`
--

CREATE TABLE `secondary_infos` (
  `secondary_info_id` int(11) NOT NULL,
  `basic_info_id` int(11) NOT NULL,
  `secondary_info_weight` varchar(10) DEFAULT NULL,
  `secondary_info_height` varchar(10) DEFAULT NULL,
  `secondary_info_blood_group` varchar(2) DEFAULT NULL,
  `secondary_info_blood_group_type` varchar(10) DEFAULT NULL,
  `secondary_info_blood_donation` varchar(10) DEFAULT NULL,
  `secondary_info_use_glasses` varchar(10) DEFAULT NULL,
  `secondary_info_smoker` int(11) DEFAULT NULL,
  `secondary_info_house_status` int(11) DEFAULT NULL,
  `secondary_info_house_status_id` int(11) NOT NULL,
  `secondary_info_allergy_id` int(11) NOT NULL,
  `secondary_info_sport_id` int(11) NOT NULL,
  `secondary_info_reference_letter` text
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `secondary_infos`
--

INSERT INTO `secondary_infos` (`secondary_info_id`, `basic_info_id`, `secondary_info_weight`, `secondary_info_height`, `secondary_info_blood_group`, `secondary_info_blood_group_type`, `secondary_info_blood_donation`, `secondary_info_use_glasses`, `secondary_info_smoker`, `secondary_info_house_status`, `secondary_info_house_status_id`, `secondary_info_allergy_id`, `secondary_info_sport_id`, `secondary_info_reference_letter`) VALUES
(1, 1, '60', '160', 'A', 'Positif', '2015', '2', 2, 1, 1, 1, 1, 'box_content2.png'),
(2, 2, '70', '165', 'B', 'Positif', '2014', '2', 2, 1, 2, 1, 1, 'box_content3.jpg');

-- --------------------------------------------------------

--
-- Table structure for table `soft_skills`
--

CREATE TABLE `soft_skills` (
  `soft_skill_id` int(11) NOT NULL,
  `basic_info_id` int(11) NOT NULL,
  `soft_skill_type_id` int(11) NOT NULL,
  `soft_skill_value` decimal(10,0) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `soft_skills`
--

INSERT INTO `soft_skills` (`soft_skill_id`, `basic_info_id`, `soft_skill_type_id`, `soft_skill_value`) VALUES
(2, 1, 2, '4'),
(3, 1, 3, '9'),
(4, 1, 4, '7'),
(5, 1, 5, '5'),
(6, 1, 6, '3'),
(7, 1, 7, '3'),
(8, 1, 8, '1'),
(9, 1, 9, '8'),
(10, 1, 10, '5'),
(11, 1, 11, '3'),
(12, 1, 12, '10'),
(13, 1, 13, '8'),
(14, 1, 14, '3'),
(15, 1, 15, '10'),
(16, 1, 16, '8'),
(17, 1, 17, '3'),
(18, 1, 18, '9'),
(19, 1, 19, '1');

-- --------------------------------------------------------

--
-- Table structure for table `soft_skill_types`
--

CREATE TABLE `soft_skill_types` (
  `soft_skill_type_id` int(11) NOT NULL,
  `soft_skill_type_name` varchar(45) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `soft_skill_types`
--

INSERT INTO `soft_skill_types` (`soft_skill_type_id`, `soft_skill_type_name`) VALUES
(2, 'Bahasa Indonesia'),
(3, 'Bahasa Inggris'),
(4, 'Bahasa Mandarin'),
(5, 'Public Speaking'),
(6, 'Presentasi'),
(7, 'Leadership'),
(8, 'Teamwork'),
(9, 'Planning'),
(10, 'Marketing'),
(11, 'Socializing'),
(12, 'Activation'),
(13, 'Branding'),
(14, 'Sales'),
(15, 'Mindmapping'),
(16, 'Drawing'),
(17, 'Openmind'),
(18, 'Passion'),
(19, 'Sport');

-- --------------------------------------------------------

--
-- Table structure for table `sports`
--

CREATE TABLE `sports` (
  `sport_id` int(11) NOT NULL,
  `sport_name` varchar(45) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `sports`
--

INSERT INTO `sports` (`sport_id`, `sport_name`) VALUES
(1, 'Basket'),
(2, 'Futsal'),
(3, 'Tenis Meja'),
(4, 'Renang'),
(5, 'Lari'),
(6, 'Gym');

-- --------------------------------------------------------

--
-- Table structure for table `status`
--

CREATE TABLE `status` (
  `status_id` int(11) NOT NULL,
  `status_name` varchar(100) DEFAULT NULL,
  `status_email_content` text
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `status`
--

INSERT INTO `status` (`status_id`, `status_name`, `status_email_content`) VALUES
(1, '<a>Review</a> by personalia', '<p>test</p>\n'),
(2, '<a>Rejected</a> Incomplete documents', '<h1 style="text-align:center">Dragon Capital Center</h1>\n\n<p>&nbsp;</p>\n\n<p>Dengan hormat,</p>\n\n<p>Melalui email ini kami ingin memberitahukan bahwa surat lamaran yang anda ajukan&nbsp;di PT. Dragon Capital Center&nbsp;sudah kami terima. Namun dengan sangat menyesal kami sampaikan bahwa surat lamaran anda tersebut kami tolak karena dokumen tidak lengkap. Mohon untuk melengkapi dokumen Anda terlebih dahulu. Kemudian silahkan mengirimkan lamaran berikutnya 6 bulan ke depan.</p>\n\n<p>Demikian surat ini kami sampaikan dan kami sangat menghargai partisipasi anda. &nbsp;</p>\n\n<p>Kami ucapkan terimakasih atas waktu yang telah anda luangkan untuk perusahaan kami.</p>\n\n<p>&nbsp;</p>\n\n<p>Hormat kami</p>\n\n<p>Admin Dragon Capital Center</p>\n'),
(3, '<a>Rejected</a> Does not fit the criteria', '<h1 style="text-align:center">Dragon Capital Center</h1>\n\n<p>&nbsp;</p>\n\n<p>Dengan hormat,</p>\n\n<p>Melalui email ini kami ingin memberitahukan bahwa surat lamaran yang anda ajukan&nbsp;di PT. Dragon Capital Center&nbsp;sudah kami terima. Namun dengan sangat menyesal kami sampaikan bahwa surat lamaran anda tersebut kami tolak karena ada beberapa hal yang masih di bawah kualifikasi yang kami tetapkan.</p>\n\n<p>Demikian surat ini kami sampaikan dan kami sangat menghargai partisipasi anda.&nbsp; Semoga anda sukses dalam mencari pekerjaan selanjutnya.</p>\n\n<p>Kami ucapkan terimakasih atas waktu yang telah anda luangkan untuk perusahaan kami.</p>\n\n<p>&nbsp;</p>\n\n<p>Hormat kami</p>\n\n<p>Admin Dragon Capital Center</p>\n'),
(4, '<a>Save</a> in draft', ''),
(5, '<a>Test</a> phase 1', ''),
(6, '<a>Test</a> phase 2', ''),
(7, '<a>Test</a> phase 3', ''),
(8, '<a>Psychological test</a>', '<h1 style="text-align:center">Dragon Capital Center</h1>\n\n<p style="text-align:center">&nbsp;</p>\n\n<p>Silahkan mengunjungi link dibawah&nbsp;untuk mengisi tes psikologi :</p>\n\n<p>Kami ucapkan terimakasih atas waktu yang telah anda luangkan untuk perusahaan kami.</p>\n\n<p>&nbsp;</p>\n'),
(9, '<a>Interview</a>', ''),
(10, '<a>Accepted</a> welcome to DCC', '');

-- --------------------------------------------------------

--
-- Table structure for table `tools`
--

CREATE TABLE `tools` (
  `tool_id` int(11) NOT NULL,
  `tool_name` varchar(100) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `tools`
--

INSERT INTO `tools` (`tool_id`, `tool_name`) VALUES
(1, 'Monitor'),
(2, 'Wacom'),
(3, 'Keyboard'),
(4, 'Mouse');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `user_id` int(11) NOT NULL,
  `user_name` varchar(100) DEFAULT NULL,
  `user_email` varchar(100) DEFAULT NULL,
  `user_password` varchar(100) DEFAULT NULL,
  `user_img` text,
  `user_active_status` int(11) DEFAULT NULL,
  `user_type_id` int(11) NOT NULL,
  `user_username` varchar(100) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`user_id`, `user_name`, `user_email`, `user_password`, `user_img`, `user_active_status`, `user_type_id`, `user_username`) VALUES
(1, 'Administrator', 'admin@dcc.center', '$2y$11$uvUqahyQ/TIyY0tltbK6JOfc.NsqDlX/hRv2kQYWCn9YKIIWdTvBa', '1_1460947410_candramelon.png', 1, 1, 'admin@dcc.center'),
(4, 'Candra', 'candra@gmail.com', '$2y$11$0O3Lk6A0gT0l39X2I0my8uBDYpgHiWVoKJKc2inrJ.NcKkMpbZCie', '1_1460951606_box_content.jpg', 1, 1, NULL);

-- --------------------------------------------------------

--
-- Table structure for table `user_types`
--

CREATE TABLE `user_types` (
  `user_type_id` int(11) NOT NULL,
  `user_type_name` varchar(45) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `user_types`
--

INSERT INTO `user_types` (`user_type_id`, `user_type_name`) VALUES
(1, 'Administrator');

-- --------------------------------------------------------

--
-- Table structure for table `work_experiences`
--

CREATE TABLE `work_experiences` (
  `work_experience_id` int(11) NOT NULL,
  `work_experience_company` varchar(45) DEFAULT NULL,
  `work_experience_from` varchar(5) DEFAULT NULL,
  `work_experience_to` varchar(5) DEFAULT NULL,
  `work_experience_position` varchar(45) DEFAULT NULL,
  `work_experience_basic_info_id` int(11) NOT NULL,
  `work_experience_company_industry_id` int(11) NOT NULL,
  `work_experience_position_level_id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `work_experiences`
--

INSERT INTO `work_experiences` (`work_experience_id`, `work_experience_company`, `work_experience_from`, `work_experience_to`, `work_experience_position`, `work_experience_basic_info_id`, `work_experience_company_industry_id`, `work_experience_position_level_id`) VALUES
(1, 'Trugee Inovation', '2009', '2010', 'Back End Developer', 1, 0, 4),
(2, 'PT Elkabumi Caraka Daya', '2011', '2015', 'Web Developer', 1, 0, 8),
(3, 'Webtocrat Motion', '2015', '2016', 'Web Developer', 1, 0, 6);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `allergies`
--
ALTER TABLE `allergies`
  ADD PRIMARY KEY (`allergy_id`);

--
-- Indexes for table `answers`
--
ALTER TABLE `answers`
  ADD PRIMARY KEY (`answer_id`,`answer_basic_info_id`),
  ADD KEY `fk_answers_basic_infos1_idx` (`answer_basic_info_id`),
  ADD KEY `fk_answers_questions1_idx` (`answer_question_id`),
  ADD KEY `fk_answers_question_options1_idx` (`answer_question_option_id`);

--
-- Indexes for table `application_histories`
--
ALTER TABLE `application_histories`
  ADD PRIMARY KEY (`application_history_id`),
  ADD KEY `fk_application_histories_basic_infos1_idx` (`basic_info_id`),
  ADD KEY `fk_application_histories_status1_idx` (`application_history_status_id`);

--
-- Indexes for table `basic_infos`
--
ALTER TABLE `basic_infos`
  ADD PRIMARY KEY (`basic_info_id`),
  ADD KEY `fk_applications_city1_idx` (`basic_info_city_id`),
  ADD KEY `fk_applications_application_status1_idx` (`basic_info_status_id`),
  ADD KEY `fk_applications_countries1_idx` (`basic_info_country_id`),
  ADD KEY `fk_applications_religions1_idx` (`basic_info_religion_id`);

--
-- Indexes for table `city`
--
ALTER TABLE `city`
  ADD PRIMARY KEY (`city_id`),
  ADD KEY `fk_city_region1_idx` (`city_region_id`);

--
-- Indexes for table `computers`
--
ALTER TABLE `computers`
  ADD PRIMARY KEY (`computer_id`);

--
-- Indexes for table `countries`
--
ALTER TABLE `countries`
  ADD PRIMARY KEY (`country_id`);

--
-- Indexes for table `educations`
--
ALTER TABLE `educations`
  ADD PRIMARY KEY (`education_id`,`education_basic_info_id`),
  ADD KEY `fk_educations_applications1_idx` (`education_basic_info_id`),
  ADD KEY `fk_educations_education_types1_idx` (`education_type_id`);

--
-- Indexes for table `education_types`
--
ALTER TABLE `education_types`
  ADD PRIMARY KEY (`education_type_id`);

--
-- Indexes for table `hard_skills`
--
ALTER TABLE `hard_skills`
  ADD PRIMARY KEY (`hard_skill_id`,`basic_info_id`),
  ADD KEY `fk_hard_skill_basic_info1_idx` (`basic_info_id`),
  ADD KEY `fk_hard_skill_hard_skill_types1_idx` (`hard_skill_type_id`);

--
-- Indexes for table `hard_skill_types`
--
ALTER TABLE `hard_skill_types`
  ADD PRIMARY KEY (`hard_skill_type_id`);

--
-- Indexes for table `house_status`
--
ALTER TABLE `house_status`
  ADD PRIMARY KEY (`house_status_id`);

--
-- Indexes for table `interview_types`
--
ALTER TABLE `interview_types`
  ADD PRIMARY KEY (`interview_type_id`);

--
-- Indexes for table `portfolios`
--
ALTER TABLE `portfolios`
  ADD PRIMARY KEY (`portfolio_id`),
  ADD KEY `fk_application2_application11_idx` (`basic_info_id`),
  ADD KEY `fk_application2_positions1_idx` (`portfolio_position_id`),
  ADD KEY `fk_application2_position_levels1_idx` (`portfolio_position_level_id`),
  ADD KEY `fk_application2_position_levels2_idx` (`portfolio_last_position_level_id`),
  ADD KEY `fk_application2_interview_types1_idx` (`portfolio_interview_type_id`),
  ADD KEY `fk_portfolios_reason_out1_idx` (`portfolio_reason_out_id`);

--
-- Indexes for table `positions`
--
ALTER TABLE `positions`
  ADD PRIMARY KEY (`position_id`),
  ADD KEY `fk_positions_scopes1_idx` (`position_scope_id`);

--
-- Indexes for table `position_levels`
--
ALTER TABLE `position_levels`
  ADD PRIMARY KEY (`position_level_id`);

--
-- Indexes for table `questions`
--
ALTER TABLE `questions`
  ADD PRIMARY KEY (`question_id`);

--
-- Indexes for table `question_options`
--
ALTER TABLE `question_options`
  ADD PRIMARY KEY (`question_option_id`,`question_id`),
  ADD KEY `fk_question_options_questions1_idx` (`question_id`);

--
-- Indexes for table `reason_out`
--
ALTER TABLE `reason_out`
  ADD PRIMARY KEY (`reason_out_id`);

--
-- Indexes for table `recruitments`
--
ALTER TABLE `recruitments`
  ADD PRIMARY KEY (`recruitment_id`);

--
-- Indexes for table `region`
--
ALTER TABLE `region`
  ADD PRIMARY KEY (`region_id`);

--
-- Indexes for table `religions`
--
ALTER TABLE `religions`
  ADD PRIMARY KEY (`religion_id`);

--
-- Indexes for table `resume`
--
ALTER TABLE `resume`
  ADD PRIMARY KEY (`resume_id`,`basic_info_id`),
  ADD KEY `fk_application3_application11_idx` (`basic_info_id`),
  ADD KEY `fk_application3_computers1_idx` (`resume_computer_id`);

--
-- Indexes for table `resume_tools`
--
ALTER TABLE `resume_tools`
  ADD PRIMARY KEY (`resume_tool_id`,`resume_tool_basic_info_id`),
  ADD KEY `fk_resume_tools_basic_infos1_idx` (`resume_tool_basic_info_id`),
  ADD KEY `fk_resume_tools_tools1_idx` (`tool_id`);

--
-- Indexes for table `scopes`
--
ALTER TABLE `scopes`
  ADD PRIMARY KEY (`scope_id`);

--
-- Indexes for table `secondary_infos`
--
ALTER TABLE `secondary_infos`
  ADD PRIMARY KEY (`secondary_info_id`,`basic_info_id`),
  ADD KEY `fk_application4_application11_idx` (`basic_info_id`),
  ADD KEY `fk_application4_house_status1_idx` (`secondary_info_house_status_id`),
  ADD KEY `fk_application4_allergies1_idx` (`secondary_info_allergy_id`),
  ADD KEY `fk_application4_sports1_idx` (`secondary_info_sport_id`);

--
-- Indexes for table `soft_skills`
--
ALTER TABLE `soft_skills`
  ADD PRIMARY KEY (`soft_skill_id`,`basic_info_id`),
  ADD KEY `fk_soft_skills_basic_infos1_idx` (`basic_info_id`),
  ADD KEY `fk_soft_skills_soft_skill_types1_idx` (`soft_skill_type_id`);

--
-- Indexes for table `soft_skill_types`
--
ALTER TABLE `soft_skill_types`
  ADD PRIMARY KEY (`soft_skill_type_id`);

--
-- Indexes for table `sports`
--
ALTER TABLE `sports`
  ADD PRIMARY KEY (`sport_id`);

--
-- Indexes for table `status`
--
ALTER TABLE `status`
  ADD PRIMARY KEY (`status_id`);

--
-- Indexes for table `tools`
--
ALTER TABLE `tools`
  ADD PRIMARY KEY (`tool_id`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`user_id`),
  ADD KEY `fk_users_user_types1_idx` (`user_type_id`);

--
-- Indexes for table `user_types`
--
ALTER TABLE `user_types`
  ADD PRIMARY KEY (`user_type_id`);

--
-- Indexes for table `work_experiences`
--
ALTER TABLE `work_experiences`
  ADD PRIMARY KEY (`work_experience_id`,`work_experience_basic_info_id`),
  ADD KEY `fk_work_experiences_applications1_idx` (`work_experience_basic_info_id`),
  ADD KEY `fk_work_experiences_position_levels1_idx` (`work_experience_position_level_id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `allergies`
--
ALTER TABLE `allergies`
  MODIFY `allergy_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;
--
-- AUTO_INCREMENT for table `answers`
--
ALTER TABLE `answers`
  MODIFY `answer_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=14;
--
-- AUTO_INCREMENT for table `application_histories`
--
ALTER TABLE `application_histories`
  MODIFY `application_history_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=88;
--
-- AUTO_INCREMENT for table `basic_infos`
--
ALTER TABLE `basic_infos`
  MODIFY `basic_info_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
--
-- AUTO_INCREMENT for table `city`
--
ALTER TABLE `city`
  MODIFY `city_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
--
-- AUTO_INCREMENT for table `computers`
--
ALTER TABLE `computers`
  MODIFY `computer_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;
--
-- AUTO_INCREMENT for table `countries`
--
ALTER TABLE `countries`
  MODIFY `country_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
--
-- AUTO_INCREMENT for table `educations`
--
ALTER TABLE `educations`
  MODIFY `education_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
--
-- AUTO_INCREMENT for table `education_types`
--
ALTER TABLE `education_types`
  MODIFY `education_type_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;
--
-- AUTO_INCREMENT for table `hard_skills`
--
ALTER TABLE `hard_skills`
  MODIFY `hard_skill_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=36;
--
-- AUTO_INCREMENT for table `hard_skill_types`
--
ALTER TABLE `hard_skill_types`
  MODIFY `hard_skill_type_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=36;
--
-- AUTO_INCREMENT for table `house_status`
--
ALTER TABLE `house_status`
  MODIFY `house_status_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;
--
-- AUTO_INCREMENT for table `interview_types`
--
ALTER TABLE `interview_types`
  MODIFY `interview_type_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
--
-- AUTO_INCREMENT for table `portfolios`
--
ALTER TABLE `portfolios`
  MODIFY `portfolio_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
--
-- AUTO_INCREMENT for table `positions`
--
ALTER TABLE `positions`
  MODIFY `position_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=15;
--
-- AUTO_INCREMENT for table `position_levels`
--
ALTER TABLE `position_levels`
  MODIFY `position_level_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=17;
--
-- AUTO_INCREMENT for table `questions`
--
ALTER TABLE `questions`
  MODIFY `question_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;
--
-- AUTO_INCREMENT for table `question_options`
--
ALTER TABLE `question_options`
  MODIFY `question_option_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;
--
-- AUTO_INCREMENT for table `reason_out`
--
ALTER TABLE `reason_out`
  MODIFY `reason_out_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;
--
-- AUTO_INCREMENT for table `recruitments`
--
ALTER TABLE `recruitments`
  MODIFY `recruitment_id` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `region`
--
ALTER TABLE `region`
  MODIFY `region_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
--
-- AUTO_INCREMENT for table `religions`
--
ALTER TABLE `religions`
  MODIFY `religion_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;
--
-- AUTO_INCREMENT for table `resume`
--
ALTER TABLE `resume`
  MODIFY `resume_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
--
-- AUTO_INCREMENT for table `resume_tools`
--
ALTER TABLE `resume_tools`
  MODIFY `resume_tool_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;
--
-- AUTO_INCREMENT for table `scopes`
--
ALTER TABLE `scopes`
  MODIFY `scope_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;
--
-- AUTO_INCREMENT for table `secondary_infos`
--
ALTER TABLE `secondary_infos`
  MODIFY `secondary_info_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
--
-- AUTO_INCREMENT for table `soft_skills`
--
ALTER TABLE `soft_skills`
  MODIFY `soft_skill_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=20;
--
-- AUTO_INCREMENT for table `soft_skill_types`
--
ALTER TABLE `soft_skill_types`
  MODIFY `soft_skill_type_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=20;
--
-- AUTO_INCREMENT for table `sports`
--
ALTER TABLE `sports`
  MODIFY `sport_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;
--
-- AUTO_INCREMENT for table `status`
--
ALTER TABLE `status`
  MODIFY `status_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;
--
-- AUTO_INCREMENT for table `tools`
--
ALTER TABLE `tools`
  MODIFY `tool_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;
--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `user_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;
--
-- AUTO_INCREMENT for table `user_types`
--
ALTER TABLE `user_types`
  MODIFY `user_type_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
--
-- AUTO_INCREMENT for table `work_experiences`
--
ALTER TABLE `work_experiences`
  MODIFY `work_experience_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;
--
-- Constraints for dumped tables
--

--
-- Constraints for table `answers`
--
ALTER TABLE `answers`
  ADD CONSTRAINT `fk_answers_basic_infos1` FOREIGN KEY (`answer_basic_info_id`) REFERENCES `basic_infos` (`basic_info_id`) ON DELETE NO ACTION ON UPDATE NO ACTION,
  ADD CONSTRAINT `fk_answers_questions1` FOREIGN KEY (`answer_question_id`) REFERENCES `questions` (`question_id`) ON DELETE NO ACTION ON UPDATE NO ACTION;

--
-- Constraints for table `application_histories`
--
ALTER TABLE `application_histories`
  ADD CONSTRAINT `fk_application_histories_basic_infos1` FOREIGN KEY (`basic_info_id`) REFERENCES `basic_infos` (`basic_info_id`) ON DELETE NO ACTION ON UPDATE NO ACTION,
  ADD CONSTRAINT `fk_application_histories_status1` FOREIGN KEY (`application_history_status_id`) REFERENCES `status` (`status_id`) ON DELETE NO ACTION ON UPDATE NO ACTION;

--
-- Constraints for table `basic_infos`
--
ALTER TABLE `basic_infos`
  ADD CONSTRAINT `fk_applications_application_status1` FOREIGN KEY (`basic_info_status_id`) REFERENCES `status` (`status_id`) ON DELETE NO ACTION ON UPDATE NO ACTION,
  ADD CONSTRAINT `fk_applications_city1` FOREIGN KEY (`basic_info_city_id`) REFERENCES `city` (`city_id`) ON DELETE NO ACTION ON UPDATE NO ACTION,
  ADD CONSTRAINT `fk_applications_countries1` FOREIGN KEY (`basic_info_country_id`) REFERENCES `countries` (`country_id`) ON DELETE NO ACTION ON UPDATE NO ACTION,
  ADD CONSTRAINT `fk_applications_religions1` FOREIGN KEY (`basic_info_religion_id`) REFERENCES `religions` (`religion_id`) ON DELETE NO ACTION ON UPDATE NO ACTION;

--
-- Constraints for table `city`
--
ALTER TABLE `city`
  ADD CONSTRAINT `fk_city_region1` FOREIGN KEY (`city_region_id`) REFERENCES `region` (`region_id`) ON DELETE NO ACTION ON UPDATE NO ACTION;

--
-- Constraints for table `educations`
--
ALTER TABLE `educations`
  ADD CONSTRAINT `fk_educations_applications1` FOREIGN KEY (`education_basic_info_id`) REFERENCES `basic_infos` (`basic_info_id`) ON DELETE NO ACTION ON UPDATE NO ACTION,
  ADD CONSTRAINT `fk_educations_education_types1` FOREIGN KEY (`education_type_id`) REFERENCES `education_types` (`education_type_id`) ON DELETE NO ACTION ON UPDATE NO ACTION;

--
-- Constraints for table `hard_skills`
--
ALTER TABLE `hard_skills`
  ADD CONSTRAINT `fk_hard_skill_basic_info1` FOREIGN KEY (`basic_info_id`) REFERENCES `basic_infos` (`basic_info_id`) ON DELETE NO ACTION ON UPDATE NO ACTION,
  ADD CONSTRAINT `fk_hard_skill_hard_skill_types1` FOREIGN KEY (`hard_skill_type_id`) REFERENCES `hard_skill_types` (`hard_skill_type_id`) ON DELETE NO ACTION ON UPDATE NO ACTION;

--
-- Constraints for table `portfolios`
--
ALTER TABLE `portfolios`
  ADD CONSTRAINT `fk_application2_application11` FOREIGN KEY (`basic_info_id`) REFERENCES `basic_infos` (`basic_info_id`) ON DELETE NO ACTION ON UPDATE NO ACTION,
  ADD CONSTRAINT `fk_application2_interview_types1` FOREIGN KEY (`portfolio_interview_type_id`) REFERENCES `interview_types` (`interview_type_id`) ON DELETE NO ACTION ON UPDATE NO ACTION,
  ADD CONSTRAINT `fk_application2_position_levels1` FOREIGN KEY (`portfolio_position_level_id`) REFERENCES `position_levels` (`position_level_id`) ON DELETE NO ACTION ON UPDATE NO ACTION,
  ADD CONSTRAINT `fk_application2_position_levels2` FOREIGN KEY (`portfolio_last_position_level_id`) REFERENCES `position_levels` (`position_level_id`) ON DELETE NO ACTION ON UPDATE NO ACTION,
  ADD CONSTRAINT `fk_application2_positions1` FOREIGN KEY (`portfolio_position_id`) REFERENCES `positions` (`position_id`) ON DELETE NO ACTION ON UPDATE NO ACTION,
  ADD CONSTRAINT `fk_portfolios_reason_out1` FOREIGN KEY (`portfolio_reason_out_id`) REFERENCES `reason_out` (`reason_out_id`) ON DELETE NO ACTION ON UPDATE NO ACTION;

--
-- Constraints for table `positions`
--
ALTER TABLE `positions`
  ADD CONSTRAINT `fk_positions_scopes1` FOREIGN KEY (`position_scope_id`) REFERENCES `scopes` (`scope_id`) ON DELETE NO ACTION ON UPDATE NO ACTION;

--
-- Constraints for table `question_options`
--
ALTER TABLE `question_options`
  ADD CONSTRAINT `fk_question_options_questions1` FOREIGN KEY (`question_id`) REFERENCES `questions` (`question_id`) ON DELETE NO ACTION ON UPDATE NO ACTION;

--
-- Constraints for table `resume`
--
ALTER TABLE `resume`
  ADD CONSTRAINT `fk_application3_application11` FOREIGN KEY (`basic_info_id`) REFERENCES `basic_infos` (`basic_info_id`) ON DELETE NO ACTION ON UPDATE NO ACTION,
  ADD CONSTRAINT `fk_application3_computers1` FOREIGN KEY (`resume_computer_id`) REFERENCES `computers` (`computer_id`) ON DELETE NO ACTION ON UPDATE NO ACTION;

--
-- Constraints for table `resume_tools`
--
ALTER TABLE `resume_tools`
  ADD CONSTRAINT `fk_resume_tools_basic_infos1` FOREIGN KEY (`resume_tool_basic_info_id`) REFERENCES `basic_infos` (`basic_info_id`) ON DELETE NO ACTION ON UPDATE NO ACTION,
  ADD CONSTRAINT `fk_resume_tools_tools1` FOREIGN KEY (`tool_id`) REFERENCES `tools` (`tool_id`) ON DELETE NO ACTION ON UPDATE NO ACTION;

--
-- Constraints for table `secondary_infos`
--
ALTER TABLE `secondary_infos`
  ADD CONSTRAINT `fk_application4_allergies1` FOREIGN KEY (`secondary_info_allergy_id`) REFERENCES `allergies` (`allergy_id`) ON DELETE NO ACTION ON UPDATE NO ACTION,
  ADD CONSTRAINT `fk_application4_application11` FOREIGN KEY (`basic_info_id`) REFERENCES `basic_infos` (`basic_info_id`) ON DELETE NO ACTION ON UPDATE NO ACTION,
  ADD CONSTRAINT `fk_application4_house_status1` FOREIGN KEY (`secondary_info_house_status_id`) REFERENCES `house_status` (`house_status_id`) ON DELETE NO ACTION ON UPDATE NO ACTION,
  ADD CONSTRAINT `fk_application4_sports1` FOREIGN KEY (`secondary_info_sport_id`) REFERENCES `sports` (`sport_id`) ON DELETE NO ACTION ON UPDATE NO ACTION;

--
-- Constraints for table `soft_skills`
--
ALTER TABLE `soft_skills`
  ADD CONSTRAINT `fk_soft_skills_basic_infos1` FOREIGN KEY (`basic_info_id`) REFERENCES `basic_infos` (`basic_info_id`) ON DELETE NO ACTION ON UPDATE NO ACTION,
  ADD CONSTRAINT `fk_soft_skills_soft_skill_types1` FOREIGN KEY (`soft_skill_type_id`) REFERENCES `soft_skill_types` (`soft_skill_type_id`) ON DELETE NO ACTION ON UPDATE NO ACTION;

--
-- Constraints for table `users`
--
ALTER TABLE `users`
  ADD CONSTRAINT `fk_users_user_types1` FOREIGN KEY (`user_type_id`) REFERENCES `user_types` (`user_type_id`) ON DELETE NO ACTION ON UPDATE NO ACTION;

--
-- Constraints for table `work_experiences`
--
ALTER TABLE `work_experiences`
  ADD CONSTRAINT `fk_work_experiences_applications1` FOREIGN KEY (`work_experience_basic_info_id`) REFERENCES `basic_infos` (`basic_info_id`) ON DELETE NO ACTION ON UPDATE NO ACTION,
  ADD CONSTRAINT `fk_work_experiences_position_levels1` FOREIGN KEY (`work_experience_position_level_id`) REFERENCES `position_levels` (`position_level_id`) ON DELETE NO ACTION ON UPDATE NO ACTION;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
