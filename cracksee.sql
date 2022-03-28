-- phpMyAdmin SQL Dump
-- version 5.0.2
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jun 07, 2020 at 04:18 PM
-- Server version: 10.4.11-MariaDB
-- PHP Version: 7.4.6

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `cracksee`
--

-- --------------------------------------------------------

--
-- Table structure for table `answers`
--

CREATE TABLE `answers` (
  `ans_id` int(10) UNSIGNED NOT NULL,
  `answers` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `ans_figure` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `ques_id` int(10) UNSIGNED NOT NULL,
  `ans_created_by` int(10) UNSIGNED NOT NULL,
  `ans_updated_by` int(10) UNSIGNED DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `answers`
--

INSERT INTO `answers` (`ans_id`, `answers`, `ans_figure`, `ques_id`, `ans_created_by`, `ans_updated_by`, `created_at`, `updated_at`) VALUES
(1, 'K.P. Oli', NULL, 1, 1, NULL, '2020-06-07 13:04:08', '2020-06-07 13:04:08'),
(2, 'Sher Bahadur Deuba', NULL, 1, 1, NULL, '2020-06-07 13:04:09', '2020-06-07 13:04:09'),
(3, 'Prachanda', NULL, 1, 1, NULL, '2020-06-07 13:04:09', '2020-06-07 13:04:09'),
(4, 'Baburam Bhattrai', NULL, 1, 1, NULL, '2020-06-07 13:04:09', '2020-06-07 13:04:09'),
(5, 'Kathmandu', NULL, 2, 1, NULL, '2020-06-07 13:13:40', '2020-06-07 13:13:40'),
(6, 'Dipayal', NULL, 2, 1, NULL, '2020-06-07 13:13:40', '2020-06-07 13:13:40'),
(7, 'Naine Tal', NULL, 2, 1, NULL, '2020-06-07 13:13:40', '2020-06-07 13:13:40'),
(8, 'Pokhara', NULL, 2, 1, NULL, '2020-06-07 13:13:40', '2020-06-07 13:13:40'),
(9, '8848', NULL, 3, 1, NULL, '2020-06-07 13:14:42', '2020-06-07 13:14:42'),
(10, '8845', NULL, 3, 1, NULL, '2020-06-07 13:14:42', '2020-06-07 13:14:42'),
(11, '8842', NULL, 3, 1, NULL, '2020-06-07 13:14:42', '2020-06-07 13:14:42'),
(12, '8841', NULL, 3, 1, NULL, '2020-06-07 13:14:42', '2020-06-07 13:14:42');

-- --------------------------------------------------------

--
-- Table structure for table `categories`
--

CREATE TABLE `categories` (
  `c_id` int(10) UNSIGNED NOT NULL,
  `c_name` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `c_created_by` int(10) UNSIGNED NOT NULL,
  `c_updated_by` int(10) UNSIGNED DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `categories`
--

INSERT INTO `categories` (`c_id`, `c_name`, `c_created_by`, `c_updated_by`, `created_at`, `updated_at`) VALUES
(1, 'Quiz', 1, NULL, NULL, NULL),
(2, 'Maths', 1, NULL, NULL, NULL),
(3, 'Science', 1, NULL, NULL, NULL);

-- --------------------------------------------------------

--
-- Table structure for table `examdetails`
--

CREATE TABLE `examdetails` (
  `e_id` int(10) UNSIGNED NOT NULL,
  `e_name` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `s_ids` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `class_id` int(11) NOT NULL,
  `module_id` int(11) NOT NULL,
  `e_duration` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `e_start_time` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `e_end_time` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `e_date` date DEFAULT NULL,
  `e_marks` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `e_status` varchar(255) COLLATE utf8_unicode_ci NOT NULL DEFAULT 'A' COMMENT 'A for Active & I for Inactive',
  `is_completed` varchar(255) COLLATE utf8_unicode_ci NOT NULL DEFAULT 'N' COMMENT 'Y for Yes N for No',
  `e_created_by` int(10) UNSIGNED NOT NULL,
  `e_updated_by` int(10) UNSIGNED DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `examdetails`
--

INSERT INTO `examdetails` (`e_id`, `e_name`, `s_ids`, `class_id`, `module_id`, `e_duration`, `e_start_time`, `e_end_time`, `e_date`, `e_marks`, `e_status`, `is_completed`, `e_created_by`, `e_updated_by`, `created_at`, `updated_at`) VALUES
(1, 'Quiz Exam', '1', 10, 1, '1', '18:47', '18:50', '2020-06-07', NULL, 'A', 'N', 1, NULL, '2020-06-07 13:15:40', '2020-06-07 13:15:40');

-- --------------------------------------------------------

--
-- Table structure for table `feedbacks`
--

CREATE TABLE `feedbacks` (
  `f_id` int(10) UNSIGNED NOT NULL,
  `f_comment` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `user_id` int(11) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `feedbacks`
--

INSERT INTO `feedbacks` (`f_id`, `f_comment`, `user_id`, `created_at`, `updated_at`) VALUES
(1, 'Ok chha', 2, '2020-06-07 13:26:12', '2020-06-07 13:26:12'),
(2, 'gsdgs', 2, '2020-06-07 13:31:09', '2020-06-07 13:31:09'),
(3, 'gsdgs', 2, '2020-06-07 13:31:44', '2020-06-07 13:31:44'),
(4, 'dgsgasg', 2, '2020-06-07 13:32:01', '2020-06-07 13:32:01'),
(5, 'sgdgasg', 2, '2020-06-07 13:32:04', '2020-06-07 13:32:04'),
(6, 'dgsgasgd', 2, '2020-06-07 13:32:08', '2020-06-07 13:32:08'),
(7, 'dgasdgas', 2, '2020-06-07 13:32:20', '2020-06-07 13:32:20'),
(8, 'dgsdagas', 2, '2020-06-07 13:34:48', '2020-06-07 13:34:48'),
(9, 'gsdgsagasg', 2, '2020-06-07 13:34:59', '2020-06-07 13:34:59'),
(10, 'dgsdgadg', 2, '2020-06-07 13:35:04', '2020-06-07 13:35:04');

-- --------------------------------------------------------

--
-- Table structure for table `groups`
--

CREATE TABLE `groups` (
  `g_id` int(10) UNSIGNED NOT NULL,
  `g_name` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `g_created_by` int(10) UNSIGNED NOT NULL,
  `g_updated_by` int(10) UNSIGNED DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `groups`
--

INSERT INTO `groups` (`g_id`, `g_name`, `g_created_by`, `g_updated_by`, `created_at`, `updated_at`) VALUES
(1, 'Group A', 1, NULL, NULL, NULL),
(2, 'Group B', 1, NULL, NULL, NULL);

-- --------------------------------------------------------

--
-- Table structure for table `migrations`
--

CREATE TABLE `migrations` (
  `id` int(10) UNSIGNED NOT NULL,
  `migration` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `batch` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `migrations`
--

INSERT INTO `migrations` (`id`, `migration`, `batch`) VALUES
(1, '2014_10_12_000000_create_users_table', 1),
(2, '2019_01_22_181642_create_examdetails_table', 1),
(3, '2019_01_22_181642_create_questions_table', 1),
(4, '2019_01_22_181642_create_useranswers_table', 1),
(5, '2019_01_22_182345_create_answers_table', 1),
(6, '2019_01_22_182345_create_categories_table', 1),
(7, '2019_01_22_182345_create_feedbacks_table', 1),
(8, '2019_01_22_182345_create_groups_table', 1),
(9, '2019_01_22_182345_create_questionmodules_table', 1),
(10, '2019_01_22_182345_create_schools_table', 1),
(11, '2019_01_22_182345_create_userexam_table', 1);

-- --------------------------------------------------------

--
-- Table structure for table `questionmodules`
--

CREATE TABLE `questionmodules` (
  `m_id` int(10) UNSIGNED NOT NULL,
  `m_name` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `ques_ids` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `m_created_by` int(10) UNSIGNED DEFAULT NULL,
  `m_updated_by` int(10) UNSIGNED DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `questionmodules`
--

INSERT INTO `questionmodules` (`m_id`, `m_name`, `ques_ids`, `m_created_by`, `m_updated_by`, `created_at`, `updated_at`) VALUES
(1, 'Quiz Module', '1,2,3', NULL, NULL, '2020-06-07 13:15:04', '2020-06-07 13:15:04');

-- --------------------------------------------------------

--
-- Table structure for table `questions`
--

CREATE TABLE `questions` (
  `q_id` int(10) UNSIGNED NOT NULL,
  `category_id` int(10) UNSIGNED NOT NULL,
  `group_id` int(10) UNSIGNED NOT NULL,
  `q_text` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `q_figure` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `ans_id` int(10) UNSIGNED NOT NULL,
  `q_status` varchar(255) COLLATE utf8_unicode_ci NOT NULL COMMENT 'A for active I for inactive',
  `q_created_by` int(10) UNSIGNED NOT NULL,
  `q_updated_by` int(10) UNSIGNED DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `questions`
--

INSERT INTO `questions` (`q_id`, `category_id`, `group_id`, `q_text`, `q_figure`, `ans_id`, `q_status`, `q_created_by`, `q_updated_by`, `created_at`, `updated_at`) VALUES
(1, 1, 1, 'Who is the prime minster of Nepal?', NULL, 1, 'A', 1, NULL, '2020-06-07 13:04:08', '2020-06-07 13:04:08'),
(2, 1, 1, 'Where is the capital of Nepal?', NULL, 5, 'A', 1, NULL, '2020-06-07 13:13:40', '2020-06-07 13:13:40'),
(3, 1, 1, 'What is the height of Mount Everest?', NULL, 9, 'A', 1, NULL, '2020-06-07 13:14:42', '2020-06-07 13:14:42');

-- --------------------------------------------------------

--
-- Table structure for table `schools`
--

CREATE TABLE `schools` (
  `s_id` int(10) UNSIGNED NOT NULL,
  `s_name` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `s_contact` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `s_email` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `s_address` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `s_principle` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `s_vice_principle` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `s_created_by` int(10) UNSIGNED NOT NULL,
  `s_updated_by` int(10) UNSIGNED DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `schools`
--

INSERT INTO `schools` (`s_id`, `s_name`, `s_contact`, `s_email`, `s_address`, `s_principle`, `s_vice_principle`, `s_created_by`, `s_updated_by`, `created_at`, `updated_at`) VALUES
(1, 'Tribhuwan Adarsha Secondary School', '9110162028', NULL, NULL, NULL, NULL, 1, NULL, NULL, NULL),
(2, 'Cardinal International Boarding School', '9110162028', NULL, NULL, NULL, NULL, 1, NULL, NULL, NULL);

-- --------------------------------------------------------

--
-- Table structure for table `useranswers`
--

CREATE TABLE `useranswers` (
  `a_id` int(10) UNSIGNED NOT NULL,
  `u_id` int(10) UNSIGNED NOT NULL,
  `exam_id` int(10) UNSIGNED NOT NULL,
  `q_id` int(10) UNSIGNED NOT NULL,
  `user_option_id` int(10) UNSIGNED NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `useranswers`
--

INSERT INTO `useranswers` (`a_id`, `u_id`, `exam_id`, `q_id`, `user_option_id`, `created_at`, `updated_at`) VALUES
(1, 2, 1, 1, 3, '2020-06-07 13:20:00', '2020-06-07 13:20:00'),
(2, 2, 1, 2, 5, '2020-06-07 13:20:01', '2020-06-07 13:20:01'),
(3, 2, 1, 3, 9, '2020-06-07 13:20:01', '2020-06-07 13:20:01');

-- --------------------------------------------------------

--
-- Table structure for table `userexam`
--

CREATE TABLE `userexam` (
  `ue_id` int(10) UNSIGNED NOT NULL,
  `user_id` int(11) NOT NULL,
  `exam_id` int(11) NOT NULL,
  `is_completed` varchar(255) COLLATE utf8_unicode_ci NOT NULL DEFAULT 'N' COMMENT 'Y  for true and N for N',
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `userexam`
--

INSERT INTO `userexam` (`ue_id`, `user_id`, `exam_id`, `is_completed`, `created_at`, `updated_at`) VALUES
(1, 2, 1, 'Y', '2020-06-07 13:20:01', '2020-06-07 13:20:01');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` int(10) UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `email` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `password` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `user_type` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `status` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL COMMENT 'A for active I for Inactive',
  `school_id` int(11) NOT NULL,
  `class_id` int(11) DEFAULT NULL,
  `exam_frequency` int(11) DEFAULT NULL,
  `profile` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `remember_token` varchar(100) COLLATE utf8_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `name`, `email`, `password`, `user_type`, `status`, `school_id`, `class_id`, `exam_frequency`, `profile`, `remember_token`, `created_at`, `updated_at`) VALUES
(1, 'Binod Thakur', 'teacher@gmail.com', '$2y$10$JalQNQzkljzfhmqFKZC84OZTaE1bqRElypvZz9krktCU3Q5cpybfi', 'teacher', NULL, 1, 10, NULL, NULL, 'qMJzHXNQqh9ihVBBzpM8qQuwlgPkUn53ouqsKuFN4aiphxT4hw71baVkllR2', '2020-06-07 11:40:57', '2020-06-07 11:40:57'),
(2, 'Student', 'student@gmail.com', '$2y$10$l8h0T4XpISCXSeTHhAK1l.1dkBH48qx9S9Ho/FvZitpmmZ.E6pSAa', 'student', NULL, 1, 10, NULL, NULL, NULL, '2020-06-07 13:16:24', '2020-06-07 13:16:24');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `answers`
--
ALTER TABLE `answers`
  ADD PRIMARY KEY (`ans_id`);

--
-- Indexes for table `categories`
--
ALTER TABLE `categories`
  ADD PRIMARY KEY (`c_id`);

--
-- Indexes for table `examdetails`
--
ALTER TABLE `examdetails`
  ADD PRIMARY KEY (`e_id`);

--
-- Indexes for table `feedbacks`
--
ALTER TABLE `feedbacks`
  ADD PRIMARY KEY (`f_id`);

--
-- Indexes for table `groups`
--
ALTER TABLE `groups`
  ADD PRIMARY KEY (`g_id`);

--
-- Indexes for table `migrations`
--
ALTER TABLE `migrations`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `questionmodules`
--
ALTER TABLE `questionmodules`
  ADD PRIMARY KEY (`m_id`);

--
-- Indexes for table `questions`
--
ALTER TABLE `questions`
  ADD PRIMARY KEY (`q_id`);

--
-- Indexes for table `schools`
--
ALTER TABLE `schools`
  ADD PRIMARY KEY (`s_id`);

--
-- Indexes for table `useranswers`
--
ALTER TABLE `useranswers`
  ADD PRIMARY KEY (`a_id`);

--
-- Indexes for table `userexam`
--
ALTER TABLE `userexam`
  ADD PRIMARY KEY (`ue_id`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `users_email_unique` (`email`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `answers`
--
ALTER TABLE `answers`
  MODIFY `ans_id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;

--
-- AUTO_INCREMENT for table `categories`
--
ALTER TABLE `categories`
  MODIFY `c_id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `examdetails`
--
ALTER TABLE `examdetails`
  MODIFY `e_id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `feedbacks`
--
ALTER TABLE `feedbacks`
  MODIFY `f_id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- AUTO_INCREMENT for table `groups`
--
ALTER TABLE `groups`
  MODIFY `g_id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `migrations`
--
ALTER TABLE `migrations`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;

--
-- AUTO_INCREMENT for table `questionmodules`
--
ALTER TABLE `questionmodules`
  MODIFY `m_id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `questions`
--
ALTER TABLE `questions`
  MODIFY `q_id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `schools`
--
ALTER TABLE `schools`
  MODIFY `s_id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `useranswers`
--
ALTER TABLE `useranswers`
  MODIFY `a_id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `userexam`
--
ALTER TABLE `userexam`
  MODIFY `ue_id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
