-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: May 02, 2025 at 02:42 PM
-- Server version: 10.4.32-MariaDB
-- PHP Version: 8.0.30

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `learning_lounge`
--

-- --------------------------------------------------------

--
-- Table structure for table `admin`
--

CREATE TABLE `admin` (
  `id` int(11) NOT NULL,
  `email` varchar(50) NOT NULL,
  `password` varchar(50) NOT NULL,
  `status` varchar(50) NOT NULL DEFAULT 'activated',
  `created_at` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `admin`
--

INSERT INTO `admin` (`id`, `email`, `password`, `status`, `created_at`) VALUES
(1, 'pault3873@gmail.com', '81dc9bdb52d04dc20036dbd8313ed055', 'activated', '2025-03-18 05:38:14');

-- --------------------------------------------------------

--
-- Table structure for table `course_category`
--

CREATE TABLE `course_category` (
  `id` int(5) NOT NULL,
  `image` varchar(100) NOT NULL,
  `course_name` varchar(50) NOT NULL,
  `course_price` int(6) NOT NULL,
  `description` longtext NOT NULL,
  `free_video` varchar(100) NOT NULL,
  `status` varchar(50) NOT NULL DEFAULT 'activated',
  `created_at` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `course_category`
--

INSERT INTO `course_category` (`id`, `image`, `course_name`, `course_price`, `description`, `free_video`, `status`, `created_at`) VALUES
(5, '478487348-5-ways-msc-digital-marketing-will-advance-your-career.webp', 'Digital Marketing', 1500, 'Digital marketing is the use of online platforms and digital technologies to promote products or services. It includes strategies like SEO, social media marketing, email campaigns, and paid advertising to reach and engage audiences, drive traffic, and increase sales. Its measurable, cost-effective, and essential in todays digital-driven world.\r\n', 'https://www.youtube.com/embed/kunkYTKFNtI?si=zQ-r5UEpTKIGRAzF', 'activated', '2025-03-25 06:32:25'),
(6, '1171397308-1_V-Jp13LvtVc2IiY2fp4qYw.jpg', 'Web Development', 5000, 'Master Front-End and Back-End technologies to build dynamic, responsive websites from scratch. Perfect for aspiring developers ready to code their futures.', 'https://www.youtube.com/embed/4WjtQjPQGIs?si=2rYqQqy6LXyX7eID', 'activated', '2025-04-21 16:48:04'),
(7, '944356982-Cyber-Security-Icon-Concept-2-1.jpeg', 'Cyber Security', 15000, 'Cybersecurity is the practice of protecting systems, networks, and data from digital attacks, unauthorized access, and damage. It involves tools, processes, and best practices designed to safeguard sensitive information, ensure data integrity, and maintain privacy. Cybersecurity is essential for individuals, businesses, and governments in today’s connected digital world.', 'https://www.youtube.com/embed/W013Y3UInoQ?si=lh4cuuE8ERpHXoUQ', 'activated', '2025-05-02 06:39:30'),
(8, '44179929-Difference-Between-Machine-Learning-and-Artificial-Intelligence.jpg', 'AL & ML', 20000, 'Artificial Intelligence (AI) and Machine Learning (ML) are closely related fields that focus on enabling machines to perform tasks that typically require human intelligence.\r\n\r\nAI is the broader concept where machines are designed to mimic human thinking and decision-making.\r\n\r\nML is a subset of AI that involves training algorithms to learn patterns from data and make predictions or decisions without being explicitly programmed.\r\n\r\nTogether, AI and ML power technologies like speech recognition, recommendation systems, self-driving cars, fraud detection, and more.', 'https://www.youtube.com/embed/C6YtPJxNULA?si=4Q4aD3zsJpIRCWhu', 'activated', '2025-05-02 07:34:10'),
(9, '1432103068-prompt-engineering.jpg', 'Prompt Engineering', 12000, 'Prompt Engineering is the practice of crafting effective inputs (prompts) to guide AI models like ChatGPT or image generators to produce accurate, useful, or creative responses. It involves understanding how the model interprets language, structuring questions or commands clearly, and iterating to improve results.\r\n\r\nThis skill is increasingly important in fields like AI development, content creation, data analysis, and automation.', 'https://www.youtube.com/embed/IbVjxg9bHAw?si=ZDOK0XYgqVG8WL6j', 'activated', '2025-05-02 07:43:04');

-- --------------------------------------------------------

--
-- Table structure for table `purchase`
--

CREATE TABLE `purchase` (
  `id` int(5) NOT NULL,
  `user` varchar(50) NOT NULL,
  `course` varchar(50) NOT NULL,
  `amount` varchar(50) NOT NULL,
  `payment_mode` varchar(50) NOT NULL,
  `card number` varchar(20) NOT NULL,
  `date` date NOT NULL,
  `transaction` varchar(50) NOT NULL,
  `status` varchar(20) NOT NULL DEFAULT 'activated',
  `created_at` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `purchase`
--

INSERT INTO `purchase` (`id`, `user`, `course`, `amount`, `payment_mode`, `card number`, `date`, `transaction`, `status`, `created_at`) VALUES
(3, 'arsh@gmail.com', '4', '2000', 'Online', '234566', '2025-04-02', 'LL-1147087230', 'activated', '2025-04-02 06:18:44'),
(4, 'janki@gmail.com', '5', '1500', 'Online', '87878797978798', '2025-04-02', 'LL-1950158836', 'activated', '2025-04-02 06:49:17'),
(5, 'aaaa@gmail.com', '5', '1500', 'Online', '122222', '2025-04-03', 'LL-532158100', 'activated', '2025-04-03 06:38:32'),
(6, 'pault3873@gmail.com', '5', '1500', 'Online', '1234567890123456', '2025-05-02', 'LL-1752110775', 'activated', '2025-05-02 07:44:32'),
(7, 'pault3873@gmail.com', '6', '5000', 'Online', '1234567890123456', '2025-05-02', 'LL-181170756', 'activated', '2025-05-02 07:59:36'),
(8, 'pault3873@gmail.com', '7', '15000', 'Online', '1234567890123456', '2025-05-02', 'LL-1270744957', 'activated', '2025-05-02 09:05:05'),
(9, 'pault3873@gmail.com', '8', '20000', 'Online', '1234567890123456', '2025-05-02', 'LL-328612803', 'activated', '2025-05-02 11:45:51'),
(10, 'pault3873@gmail.com', '9', '12000', 'Online', '1234567890123456', '2025-05-02', 'LL-1481669131', 'activated', '2025-05-02 11:53:23');

-- --------------------------------------------------------

--
-- Table structure for table `student`
--

CREATE TABLE `student` (
  `id` int(4) NOT NULL,
  `username` varchar(20) NOT NULL,
  `email` varchar(50) NOT NULL,
  `password` varchar(50) NOT NULL,
  `contact` bigint(10) NOT NULL,
  `address` longtext NOT NULL,
  `status` varchar(50) NOT NULL DEFAULT 'activated',
  `created_at` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `student`
--

INSERT INTO `student` (`id`, `username`, `email`, `password`, `contact`, `address`, `status`, `created_at`) VALUES
(27, 'jkjkk', 'wd@gmail.com', '', 45667777769, 'zXDfffd', 'activated', '2025-03-24 06:52:35'),
(28, 'tjj', 'jjh@gmail.com', '1222e', 5555667767, 'aSsdsd', 'activated', '2025-03-24 07:02:04'),
(29, 'janki', 'janki@gmail.com', '202cb962ac59075b964b07152d234b70', 87678878787, 'jalandhar', 'activated', '2025-04-01 06:20:33'),
(30, 'arsh', 'arsh@gmail.com', '202cb962ac59075b964b07152d234b70', 2345678922, 'q', 'activated', '2025-04-02 06:17:35'),
(31, 'aaaa', 'aaaa@gmail.com', '81dc9bdb52d04dc20036dbd8313ed055', 7878787878, 'kapt', 'activated', '2025-04-03 06:37:02'),
(32, 'tania', 'tania@gmail.com', '99c5e07b4d5de9d18c350cdf64c5aa3d', 2345678922, 'jalandhar', 'activated', '2025-04-21 16:50:30');

-- --------------------------------------------------------

--
-- Table structure for table `tutorial`
--

CREATE TABLE `tutorial` (
  `id` int(5) NOT NULL,
  `name` varchar(50) NOT NULL,
  `course` varchar(50) NOT NULL,
  `thumbnail` varchar(50) NOT NULL,
  `video_link` varchar(90) NOT NULL,
  `description` longtext NOT NULL,
  `tags` varchar(100) NOT NULL,
  `status` varchar(50) NOT NULL DEFAULT 'activated',
  `created_at` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `tutorial`
--

INSERT INTO `tutorial` (`id`, `name`, `course`, `thumbnail`, `video_link`, `description`, `tags`, `status`, `created_at`) VALUES
(6, 'Part 1', '5', '474561780-', 'https://www.youtube.com/embed/nkNHn0VqVBA?si=ZhlMbOkUbm-mBew3', '\r\nThis Edureka Digital Marketing Full Course is a complete guide to learning Digital Marketing from scratch which covers in-depth knowledge about different concepts of Digital Marketing, Types of Marketing, SEO, and Career opportunities in Digital Marketing. This Digital Marketing tutorial is ideal for beginners and experienced professionals. ', 'First , Start', 'activated', '2025-05-02 07:54:45'),
(7, 'Part 2', '5', '1481520665-', 'https://www.youtube.com/embed/hiEb1m7CXH4?si=p0sLrcuj9WvfbWDW', 'At the intermediate stage, digital marketing dives deeper into campaign strategies, audience segmentation, content creation, analytics, and conversion optimization. Learners start working with tools like Google Analytics, Facebook Business Manager, and CRM platforms to manage and improve marketing performance across channels.', 'Second ,Inter', 'activated', '2025-05-02 07:57:20'),
(8, 'Part 3', '5', '1113343404-', 'https://www.youtube.com/embed/RPw51rZwKkM?si=xtPyjb8EowG5kRkH', 'Advanced digital marketing focuses on data-driven decision-making, automation, multi-channel integration, and ROI optimization. It includes A/B testing, advanced SEO, machine learning applications, and strategic planning. Professionals at this level manage large-scale campaigns and align marketing with business goals for maximum impact.', 'Third, Advance', 'activated', '2025-05-02 07:58:56'),
(9, 'Part 1', '6', '2137476695-', 'https://www.youtube.com/embed/Vi9bxu-M-ag?si=PdkoAghdhWf11lgF', 'Web development for beginners introduces the basics of building websites using HTML, CSS, and JavaScript. Learners gain hands-on experience creating simple, static web pages and understanding how the web works, including domains, browsers, and responsive design.', 'start , First', 'activated', '2025-05-02 08:19:02'),
(10, 'Part 2', '6', '138021097-', 'https://www.youtube.com/embed/aRUhd1Wd3Sw?si=5PgMc3qoUlZfgGvC', 'Intermediate web development covers dynamic websites using frameworks like React, and backend technologies like Node.js or PHP. Learners build full-stack applications, connect to databases (like MongoDB or MySQL), and implement user authentication, APIs, and version control with Git.', 'Second ,Inter', 'activated', '2025-05-02 08:21:09'),
(11, 'Part 3', '6', '591208842-', 'https://www.youtube.com/embed/ofHYRdWQESo?si=QzF_jGIUlbZzTFZg', 'At the advanced level, web development focuses on performance optimization, scalability, security, and DevOps. Developers work with advanced frameworks, CI/CD pipelines, containerization (e.g., Docker), serverless architectures, and cloud platforms (AWS, Azure) to build robust, production-ready applications.', 'Third, Advance', 'activated', '2025-05-02 08:37:58'),
(12, 'Part 1', '7', '32554482-', 'https://www.youtube.com/embed/cKEf8H9cQGM?si=wxVGriYascIo68xz', 'Cybersecurity for beginners covers the basics of digital safety, including common threats like viruses, phishing, and password attacks. Learners are introduced to concepts such as firewalls, antivirus software, encryption, and safe online practices. Its ideal for building awareness and foundational skills in digital protection.', 'start , First', 'activated', '2025-05-02 09:06:19'),
(13, 'Part 2', '7', '335268058-', 'https://www.youtube.com/embed/xYc4Tp-Rt8w?si=oCpPajH7leB6uSxS', 'At the intermediate level, cybersecurity focuses on network security, ethical hacking, system hardening, and incident response. Learners work with tools like Wireshark, Metasploit, and basic scripting to detect and respond to threats, and begin understanding compliance standards like ISO and GDPR.', 'Second ,Inter', 'activated', '2025-05-02 09:07:34'),
(14, 'Part 3', '7', '231835467-', 'https://www.youtube.com/embed/PhYmmD84oFY?si=gUaQd_xBybwhgzYq', 'Advanced cybersecurity involves penetration testing, threat hunting, malware analysis, and securing cloud environments. Professionals at this level use advanced tools and techniques to defend against sophisticated attacks, manage security operations centers (SOCs), and design enterprise-wide security strategies.', 'Third, Advance', 'activated', '2025-05-02 09:08:39'),
(16, 'Part 1', '8', '1592401753-', 'https://www.youtube.com/embed/8Pyy2d3SZuM?si=yvMJNhe5DtnQPDfv', 'Artificial Intelligence (AI) is when computers or machines do things that usually need human thinking—like talking, recognizing pictures, or making choices.\r\nMachine Learning (ML) is a part of AI that helps computers learn from data—like when your phone learns your typing style or suggests songs you like.', 'start , First', 'activated', '2025-05-02 11:48:48'),
(17, 'Part 2', '8', '1948413692-', 'https://www.youtube.com/embed/LvC68w9JS4Y?si=68xP-XboZ5TyOiAF', 'AI is a branch of computer science focused on building systems that can simulate human intelligence, such as recognizing speech, making decisions, or solving problems.\r\nML is a subfield of AI that enables machines to learn from data and improve their performance over time without being explicitly programmed for each task.\r\n\r\n', 'Second ,Inter', 'activated', '2025-05-02 11:50:38'),
(18, 'Part 3', '8', '1819366794-', 'https://www.youtube.com/embed/MqffbpjhriQ?si=SPQghTd3BqHegXHm', 'Artificial Intelligence (AI) is a multidisciplinary domain concerned with creating intelligent agents that perceive their environment and take actions to maximize goal achievement.\r\nMachine Learning (ML), a subset of AI, involves developing algorithms that allow systems to learn statistical patterns from data, optimizing performance through techniques like supervised learning, unsupervised learning, and reinforcement learning.', 'Third, Advance', 'activated', '2025-05-02 11:52:09'),
(19, 'Part 1', '9', '581393254-', 'https://www.youtube.com/embed/AyXjHQh_vPg?si=Bn9cpnPvK4lyDH8C', 'Prompt Engineering is the way we talk to AI tools (like ChatGPT) to get the answers or results we want. It’s like asking smart questions in the right way so the AI understands better.\r\n\r\n', 'First , Start', 'activated', '2025-05-02 11:58:23'),
(20, 'Part 2', '9', '277124886-', 'https://www.youtube.com/embed/PX5O35TR2QM?si=Oxuxk4HtailUjXse', 'Prompt Engineering is the process of designing and structuring inputs (prompts) to guide AI models, especially large language models (LLMs), to generate accurate, relevant, and useful responses. It involves choosing the right words, format, and context to get optimal results.', 'Second ,Inter', 'activated', '2025-05-02 11:59:23'),
(21, 'Part 3', '9', '829042616-', 'https://www.youtube.com/embed/IjKR5jFAfkI?si=LIMRk8oamKmToz6J', 'Prompt Engineering is a strategic discipline within human-AI interaction that involves crafting precise, context-aware input formulations to elicit targeted behaviors from language models. It often incorporates techniques such as zero-shot, few-shot learning, chain-of-thought prompting, and role conditioning to maximize model effectiveness and reliability.\r\n\r\n', 'third, Advance', 'activated', '2025-05-02 12:00:27');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `admin`
--
ALTER TABLE `admin`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `course_category`
--
ALTER TABLE `course_category`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `purchase`
--
ALTER TABLE `purchase`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `student`
--
ALTER TABLE `student`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `tutorial`
--
ALTER TABLE `tutorial`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `admin`
--
ALTER TABLE `admin`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `course_category`
--
ALTER TABLE `course_category`
  MODIFY `id` int(5) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;

--
-- AUTO_INCREMENT for table `purchase`
--
ALTER TABLE `purchase`
  MODIFY `id` int(5) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- AUTO_INCREMENT for table `student`
--
ALTER TABLE `student`
  MODIFY `id` int(4) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=33;

--
-- AUTO_INCREMENT for table `tutorial`
--
ALTER TABLE `tutorial`
  MODIFY `id` int(5) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=22;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
