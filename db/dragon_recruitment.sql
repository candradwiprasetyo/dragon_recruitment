-- phpMyAdmin SQL Dump
-- version 4.5.2
-- http://www.phpmyadmin.net
--
-- Host: localhost
-- Generation Time: Apr 15, 2016 at 12:55 PM
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
(1, 'Kacang'),
(2, 'Telur'),
(3, 'Seafood');

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
  `basic_infos_join_reason` text,
  `basic_info_life_motto` text,
  `basic_info_status_id` int(11) NOT NULL,
  `basic_info_decision_status_id` int(11) NOT NULL,
  `basic_info_date` date DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Table structure for table `city`
--

CREATE TABLE `city` (
  `city_id` int(11) NOT NULL,
  `city_name` varchar(45) DEFAULT NULL,
  `city_region_id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

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

-- --------------------------------------------------------

--
-- Table structure for table `decision_status`
--

CREATE TABLE `decision_status` (
  `decision_status_id` int(11) NOT NULL,
  `decision_status_name` text
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

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

-- --------------------------------------------------------

--
-- Table structure for table `education_types`
--

CREATE TABLE `education_types` (
  `education_type_id` int(11) NOT NULL,
  `education_type_name` varchar(100) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

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

-- --------------------------------------------------------

--
-- Table structure for table `interview_types`
--

CREATE TABLE `interview_types` (
  `interview_type_id` int(11) NOT NULL,
  `interview_type_name` varchar(45) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

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
  `portfolio_reason_out` text,
  `portfolio_interview_date1` date DEFAULT NULL,
  `portfolio_interview_date2` date DEFAULT NULL,
  `portfolio_interview_type_id` int(11) NOT NULL,
  `portfolio_work_date` date DEFAULT NULL,
  `portfolio_portfolio_file` text,
  `portfolio_portfolio_link` text,
  `portfolio_linkedin` varchar(45) DEFAULT NULL,
  `portfolio_behance` varchar(45) DEFAULT NULL,
  `portfolio_facebook` varchar(45) DEFAULT NULL,
  `portfolio_instagram` varchar(45) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Table structure for table `positions`
--

CREATE TABLE `positions` (
  `position_id` int(11) NOT NULL,
  `position_name` varchar(45) DEFAULT NULL,
  `position_description` text,
  `position_scope_id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `positions`
--

INSERT INTO `positions` (`position_id`, `position_name`, `position_description`, `position_scope_id`) VALUES
(1, 'Front End Programmer', '', 1),
(2, 'Back End Programmer', '', 1),
(3, 'UI Designer', '', 1),
(4, 'UX Engineer', '', 1),
(5, 'Javascript Programmer', '', 1),
(6, 'Java Programmer', '', 1),
(7, 'AWS Administrator', '', 1),
(8, 'Network Administrator', '', 1),
(9, 'IT Technician', '', 1),
(10, 'Infrastructure Manager', '', 1),
(11, 'iOS Developer', '', 1),
(12, 'Android Developer', '', 1),
(13, 'System Analyst', '', 1),
(14, 'Algorithm Engineer', '', 1);

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
-- Table structure for table `region`
--

CREATE TABLE `region` (
  `region_id` int(11) NOT NULL,
  `region_name` varchar(45) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Table structure for table `religions`
--

CREATE TABLE `religions` (
  `religion_id` int(11) NOT NULL,
  `religion_name` varchar(45) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

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
(2, 'Bahasa Indonesia');

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
  `status_name` varchar(100) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

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
(1, 'Administrator', 'admin@dcc.center', '21232f297a57a5a743894a0e4a801fc3', NULL, 1, 1, 'admin@dcc.center');

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
-- Indexes for dumped tables
--

--
-- Indexes for table `allergies`
--
ALTER TABLE `allergies`
  ADD PRIMARY KEY (`allergy_id`);

--
-- Indexes for table `basic_infos`
--
ALTER TABLE `basic_infos`
  ADD PRIMARY KEY (`basic_info_id`),
  ADD KEY `fk_applications_city1_idx` (`basic_info_city_id`),
  ADD KEY `fk_applications_application_status1_idx` (`basic_info_status_id`),
  ADD KEY `fk_applications_countries1_idx` (`basic_info_country_id`),
  ADD KEY `fk_applications_religions1_idx` (`basic_info_religion_id`),
  ADD KEY `fk_basic_infos_decision_status1_idx` (`basic_info_decision_status_id`);

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
-- Indexes for table `decision_status`
--
ALTER TABLE `decision_status`
  ADD PRIMARY KEY (`decision_status_id`);

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
  ADD KEY `fk_application2_interview_types1_idx` (`portfolio_interview_type_id`);

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
  MODIFY `allergy_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;
--
-- AUTO_INCREMENT for table `basic_infos`
--
ALTER TABLE `basic_infos`
  MODIFY `basic_info_id` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `city`
--
ALTER TABLE `city`
  MODIFY `city_id` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `computers`
--
ALTER TABLE `computers`
  MODIFY `computer_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;
--
-- AUTO_INCREMENT for table `countries`
--
ALTER TABLE `countries`
  MODIFY `country_id` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `decision_status`
--
ALTER TABLE `decision_status`
  MODIFY `decision_status_id` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `educations`
--
ALTER TABLE `educations`
  MODIFY `education_id` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `education_types`
--
ALTER TABLE `education_types`
  MODIFY `education_type_id` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `hard_skills`
--
ALTER TABLE `hard_skills`
  MODIFY `hard_skill_id` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `hard_skill_types`
--
ALTER TABLE `hard_skill_types`
  MODIFY `hard_skill_type_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=36;
--
-- AUTO_INCREMENT for table `house_status`
--
ALTER TABLE `house_status`
  MODIFY `house_status_id` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `interview_types`
--
ALTER TABLE `interview_types`
  MODIFY `interview_type_id` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `portfolios`
--
ALTER TABLE `portfolios`
  MODIFY `portfolio_id` int(11) NOT NULL AUTO_INCREMENT;
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
-- AUTO_INCREMENT for table `region`
--
ALTER TABLE `region`
  MODIFY `region_id` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `religions`
--
ALTER TABLE `religions`
  MODIFY `religion_id` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `resume`
--
ALTER TABLE `resume`
  MODIFY `resume_id` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `scopes`
--
ALTER TABLE `scopes`
  MODIFY `scope_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;
--
-- AUTO_INCREMENT for table `secondary_infos`
--
ALTER TABLE `secondary_infos`
  MODIFY `secondary_info_id` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `soft_skills`
--
ALTER TABLE `soft_skills`
  MODIFY `soft_skill_id` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `soft_skill_types`
--
ALTER TABLE `soft_skill_types`
  MODIFY `soft_skill_type_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
--
-- AUTO_INCREMENT for table `sports`
--
ALTER TABLE `sports`
  MODIFY `sport_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;
--
-- AUTO_INCREMENT for table `status`
--
ALTER TABLE `status`
  MODIFY `status_id` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `user_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
--
-- AUTO_INCREMENT for table `user_types`
--
ALTER TABLE `user_types`
  MODIFY `user_type_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
--
-- AUTO_INCREMENT for table `work_experiences`
--
ALTER TABLE `work_experiences`
  MODIFY `work_experience_id` int(11) NOT NULL AUTO_INCREMENT;
--
-- Constraints for dumped tables
--

--
-- Constraints for table `basic_infos`
--
ALTER TABLE `basic_infos`
  ADD CONSTRAINT `fk_applications_application_status1` FOREIGN KEY (`basic_info_status_id`) REFERENCES `status` (`status_id`) ON DELETE NO ACTION ON UPDATE NO ACTION,
  ADD CONSTRAINT `fk_applications_city1` FOREIGN KEY (`basic_info_city_id`) REFERENCES `city` (`city_id`) ON DELETE NO ACTION ON UPDATE NO ACTION,
  ADD CONSTRAINT `fk_applications_countries1` FOREIGN KEY (`basic_info_country_id`) REFERENCES `countries` (`country_id`) ON DELETE NO ACTION ON UPDATE NO ACTION,
  ADD CONSTRAINT `fk_applications_religions1` FOREIGN KEY (`basic_info_religion_id`) REFERENCES `religions` (`religion_id`) ON DELETE NO ACTION ON UPDATE NO ACTION,
  ADD CONSTRAINT `fk_basic_infos_decision_status1` FOREIGN KEY (`basic_info_decision_status_id`) REFERENCES `decision_status` (`decision_status_id`) ON DELETE NO ACTION ON UPDATE NO ACTION;

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
  ADD CONSTRAINT `fk_application2_positions1` FOREIGN KEY (`portfolio_position_id`) REFERENCES `positions` (`position_id`) ON DELETE NO ACTION ON UPDATE NO ACTION;

--
-- Constraints for table `positions`
--
ALTER TABLE `positions`
  ADD CONSTRAINT `fk_positions_scopes1` FOREIGN KEY (`position_scope_id`) REFERENCES `scopes` (`scope_id`) ON DELETE NO ACTION ON UPDATE NO ACTION;

--
-- Constraints for table `resume`
--
ALTER TABLE `resume`
  ADD CONSTRAINT `fk_application3_application11` FOREIGN KEY (`basic_info_id`) REFERENCES `basic_infos` (`basic_info_id`) ON DELETE NO ACTION ON UPDATE NO ACTION,
  ADD CONSTRAINT `fk_application3_computers1` FOREIGN KEY (`resume_computer_id`) REFERENCES `computers` (`computer_id`) ON DELETE NO ACTION ON UPDATE NO ACTION;

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
