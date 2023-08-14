-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Aug 14, 2023 at 02:24 AM
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
-- Database: `linkedin_resume`
--

-- --------------------------------------------------------

--
-- Table structure for table `new_job_posting`
--

CREATE TABLE `new_job_posting` (
  `ID` int(11) NOT NULL,
  `Designation` varchar(1000) NOT NULL,
  `Location` varchar(1000) NOT NULL,
  `JobDescription` mediumtext NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `new_job_posting`
--

INSERT INTO `new_job_posting` (`ID`, `Designation`, `Location`, `JobDescription`) VALUES
(1, 'Front-End Developer', 'Toronto, Canada', 'We are looking for a skilled Front-End Developer with expertise in HTML, CSS, and JavaScript. You should have a strong understanding of responsive design principles and experience with front-end frameworks such as React or Angular. Collaborate with UI/UX designers to implement seamless user experiences and translate mockups into interactive web applications.'),
(2, 'Back-End Developer (Node.js)', 'Windsor, Canada', 'Join our team as a Back-End Developer with proficiency in Node.js. You should have hands-on experience in building scalable and efficient server-side applications. Familiarity with databases like MongoDB and RESTful API development is essential. Strong problem-solving skills and the ability to work in a collaborative environment are crucial.'),
(3, 'Full Stack Developer (Java)', 'Calgary, Canada', 'We are seeking a versatile Full Stack Developer skilled in Java programming. You should be comfortable working on both front-end and back-end aspects of web applications. Proficiency in Spring Framework, Hibernate, and experience with front-end technologies like HTML, CSS, and JavaScript are required. Bring your expertise to contribute to end-to-end development and deliver innovative solutions.'),
(4, 'Mobile App Developer (iOS)', 'Manitoba, Canada', 'If you have a passion for iOS app development, we want you on our team. As a Mobile App Developer, you should be adept in Swift and have experience with Xcode. Familiarity with Apple\'s Human Interface Guidelines and the ability to create intuitive user interfaces are important. Join us to bring creative and functional mobile applications to life.'),
(5, 'Software Engineer (Python)', 'London, Canada', 'We\'re looking for a Software Engineer with proficiency in Python. You should have a solid understanding of software development principles, algorithms, and data structures. Experience with frameworks like Django or Flask is desired. Collaborate with cross-functional teams to deliver high-quality software solutions while adhering to coding standards and best practices.'),
(6, ' Quality Assurance Engineer', 'Detroit, USA', 'Join our Quality Assurance team as an Engineer with strong attention to detail and problem-solving skills. You should have experience in manual and automated testing, and familiarity with testing methodologies. Understanding of software development processes, debugging tools, and test case creation is essential. Collaborate with developers to identify, report, and track defects to ensure the delivery of reliable software products.');

-- --------------------------------------------------------

--
-- Table structure for table `questions`
--

CREATE TABLE `questions` (
  `ID` int(11) NOT NULL,
  `Question` varchar(1000) NOT NULL,
  `Answer` varchar(1000) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `questions`
--

INSERT INTO `questions` (`ID`, `Question`, `Answer`) VALUES
(1, 'What is Software Testing?', 'Software testing is the process of evaluating a software application to identify defects, errors, and ensure its quality and functionality meet the specified requirements.'),
(2, 'What is the difference between Black Box and White Box testing?', 'Black Box Testing: Testing without knowledge of the internal code or logic, focusing on input/output and functionality. White Box Testing: Testing with knowledge of the internal code and logic, focusing on code coverage and internal paths.'),
(3, 'What is the difference between Smoke Testing and Sanity Testing?', 'Smoke Testing: A high-level testing to check if the basic functionality of the application is working. Sanity Testing: Testing specific new features or changes to ensure they work as expected without performing a comprehensive test.'),
(4, 'Explain the difference between Verification and Validation.', 'Verification: Confirming that a product meets specified requirements and adheres to design specifications. Validation: Ensuring that the product actually meets user needs and expectations.');
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
