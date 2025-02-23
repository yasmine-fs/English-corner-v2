-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Hôte : 127.0.0.1
-- Généré le : lun. 16 déc. 2024 à 14:12
-- Version du serveur : 10.4.32-MariaDB
-- Version de PHP : 8.2.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de données : `pfe`
--

-- --------------------------------------------------------

--
-- Structure de la table `users`
--

CREATE TABLE `users` (
  `id` int(11) NOT NULL,
  `email` varchar(50) DEFAULT NOT NULL,
  `password` varchar(255) DEFAULT NOT NULL,
  `full_name` varchar(255) DEFAULT NOT NULL,
  `role` enum('admin','teacher','student','Guest') NOT NULL,
  `state` enum('enrolled','active','blocked','inactive') NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;



--
-- Index pour la table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`);



--
-- AUTO_INCREMENT pour la table `users`
--
ALTER TABLE `users`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- Table structure for table `courses`
--
CREATE TABLE `courses` (
  `id_crs` int(11) NOT NULL,
  `state` enum(posted,dropped,archived,pending) DEFAULT NULL,
  `title` varchar(255) NOT NULL,
  `user_id` int(11) NOT NULL,
  `duration` int(11) NOT NULL,
  `price` decimal(10,0) NOT NULL,
  `state` enum('posted','dropped','archived','pending','completed') DEFAULT NULL,
  `course_level` enum('beginner','intermediate','advanced') NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;



--
-- Indexes for table `courses`
--
ALTER TABLE `courses`
  ADD PRIMARY KEY (`id`);
--
-- AUTO_INCREMENT pour la table `courses`
--
  ALTER TABLE `courses`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- Table structure for table `coursecategories`
--
CREATE TABLE `coursecategories` (
  `id` int(11) NOT NULL,
  `name` varchar(255) NOT NULL,
  `description` text DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;


--
-- Indexes for table `coursecategories`
--
ALTER TABLE `coursecategories`
  ADD PRIMARY KEY (`id`);
--
-- AUTO_INCREMENT pour la table `coursecategories`
--
  ALTER TABLE `coursecategories`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;


 --
-- Table structure for table `quizzes`
--

CREATE TABLE `quizzes` (
  `id` int(11) NOT NULL,
  `state` enum('not_started','in_progress','completed') DEFAULT NULL,
  `types` enum('multiple_choice','true_false','single_choice') DEFAULT NULL,
  `question` varchar(255) DEFAULT NULL,
  `description` text DEFAULT NULL,
  `defficulty_level` enum('easy','medium','hard') DEFAULT NULL,
  `duration` int(11) DEFAULT NULL,
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;


--
-- Indexes for table `quizzes`
--
ALTER TABLE `quizzes`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for table `quizzes`
--
ALTER TABLE `quizzes`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- Indexes for table `reviews`
--
ALTER TABLE `reviews`
  ADD PRIMARY KEY (`id`);


  CREATE TABLE `reviews` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `user_id` int(11) NOT NULL, -- Links to the user who wrote the review
  `course_id` int(11) NOT NULL, -- ID of the course being reviewed 
  `rating` tinyint(1) NOT NULL, -- Rating (e.g., 1 to 5 stars)
  `comment` text DEFAULT NULL, -- Review comment
  PRIMARY KEY (`id_rv`),
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;
  --
-- AUTO_INCREMENT for table `reviews`
--
ALTER TABLE `reviews`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

  CREATE TABLE Chapters (
    id INT PRIMARY KEY AUTO_INCREMENT,
    chapter_number INT NOT NULL,
    chapter_title VARCHAR(255) NOT NULL
);
  --
-- AUTO_INCREMENT for table `Chapterss`
--
ALTER TABLE `Chapters`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;


CREATE TABLE ChapterContent (
    id INT PRIMARY KEY AUTO_INCREMENT,
    chapter_id INT NOT NULL,
    title VARCHAR(255) NOT NULL,
    content TEXT NOT NULL,
    teacher VARCHAR (255) NOT NULL,
    FOREIGN KEY (chapter_id) REFERENCES Chapters(id) ON DELETE CASCADE
);
  --
-- AUTO_INCREMENT for table `ChapterContent`
--
ALTER TABLE `ChapterContent`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;
