-- phpMyAdmin SQL Dump
-- version 5.0.2
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Aug 13, 2023 at 05:51 AM
-- Server version: 10.4.14-MariaDB
-- PHP Version: 7.4.10

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
-- Table structure for table `job_posting`
--

CREATE TABLE `job_posting` (
  `id` int(11) NOT NULL,
  `text` varchar(4096) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `job_posting`
--

INSERT INTO `job_posting` (`id`, `text`) VALUES
(1, 'Verifone:\r\nSoftware QA Engineer:\r\nTwo- or four-year degree in Computer Science or a related field. 3-5 years of experience in software quality assurance software/product validation. 3-5 years of experience in Manual software testing. 3-5 years of experience with Windows operating system. Basic understanding of Linux Operating System directory structure. Basic understanding of XML. Excellent inter-personal, written, and verbal communication skills. Strong understanding of Agile and different COMM types such as TCPIP, Serial, USB, Wi-Fi. Flexible to work overtime when needed for mission critical customer projects and/or field issues. The Software QA Engineer will work on our Petroleum solution for the Petro Industry. Experience in the Payment Card Industry is highly desired.\r\n'),
(3, 'Konrad Group:\r\nSoftware Developer Intern:\r\nQualifications:\r\nStarted and currently be enrolled in a Computer Science, Software Engineering, or similar program in a University or College. Strong command of important core programming and computer science concepts. Fundamental knowledge of core web principals (HTTP, browsers, the DOM, SSL, web servers). Good understanding & experience in HTML/CSS/JavaScript or native Android/iOS development. Great interpersonal skills - we work very closely together as a team and require a lot of communication. Proactive personality, and a desire to deliver your best work . A love for improving software development workflows/process\r\n'),
(4, 'Luxoft:\r\nSoftware Developer in Test:\r\nDuties include providing high-quality services and applications by coding, testing, debugging, documenting, and maintaining programs. Developing and modifying moderately complex information systems involving most phases of systems analysis and programming. Analyze, code, test, and document programs and enhancements. Conduct code walkthroughs to assure the quality of programs developed by other associates. 4+ years of Python Experience. 2+ years of PyTest Experience . 1+ year of Selenium Experience.\r\n'),
(7, 'HP:\r\nSoftware Application Engineer:\r\nKnowledge and Skills:\r\nStrong technical knowledge of complex software systems, including enterprise, middleware, firmware, and embedded systems. Adept at collecting and analyzing input from multiple sources (customers, sales, engineering, marketing, competitor, and management).  Significant experience in software development, systems engineering, software product management. Experience specifically in deploying, optimizing, and maintaining software preferred. Using software applications design tools and languages.. such as Java, SQL, .NET, and C. Strong analytical and problem solving skills. Designing software applications running on multiple platform types. Software applications testing methodology, including writing and execution of test plans, debugging, and testing scripts and tools. Excellent written and verbal communication skills; mastery in English and local language. Ability to effectively communicate product architectures, design proposals and negotiate options at management levels\r\n'),
(8, 'Citi\r\nJava Developer\r\nResponsibilities\r\nConduct tasks related to feasibility studies, time and cost estimates, IT planning, risk technology, applications development, model development, and establish and implement new or revised applications systems and programs to meet specific business needs or user areas. Monitor and control all phases of development process and analysis, design, construction, testing, and implementation as well as provide user and operational support on applications to business users. Utilize in-depth specialty knowledge of applications development to analyze complex problems/issues, provide evaluation of business process, system process, and industry standards, and make evaluative judgement. Recommend and develop security measures in post implementation analysis of business usage to ensure successful system design and functionality. Consult with users/clients and other technology groups on issues, recommend advanced programming solutions, and install and assist customer exposure systems. Ensure essential procedures are followed and help define operating standards and processes. Serve as advisor or coach to new or lower level analysts. Has the ability to operate with a limited level of direct supervision. Can exercise independence of judgement and autonomy. Acts as SME to senior stakeholders and /or other team members. Appropriately assess risk when business decisions are made, demonstrating particular consideration for the firm\'s reputation and safeguarding Citigroup, its clients and assets, by driving compliance with applicable laws, rules and regulations, adhering to Policy, applying sound ethical judgment regarding personal behavior, conduct and business practices, and escalating, managing and reporting control issues with transparency.\r\n'),
(9, 'Veeva Systems\r\nSoftware Engineer Test\r\nHighly skilled in one or more of the following languages: Java, C#, Javascript, Python. Proven experience in common automation tools and BDD testing frameworks. 3+ years of work experience in a software test automation or software development role. Comfortable working in a self-guided manner with the ability to prioritize tasks and manage your own time efficiently with minimal supervision. Champions a high-performance environment and contributes to an inclusive work environment. Understanding of software QA methodologies, tools and approaches. Experience with unit test frameworks (e.g. Junit, TestNg). Experience with automated UI test frameworks (e.g. Selenium, Cypress). BS in Engineering/Computer Science or equivalent\r\n');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `job_posting`
--
ALTER TABLE `job_posting`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `job_posting`
--
ALTER TABLE `job_posting`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
