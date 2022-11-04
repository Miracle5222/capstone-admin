-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Nov 04, 2022 at 06:53 PM
-- Server version: 10.4.24-MariaDB
-- PHP Version: 7.4.30

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `capstone`
--

-- --------------------------------------------------------

--
-- Table structure for table `admin_tbl`
--

CREATE TABLE `admin_tbl` (
  `id` int(50) DEFAULT NULL,
  `username` varchar(50) DEFAULT NULL,
  `password` varchar(50) DEFAULT NULL,
  `email` varchar(50) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `admin_tbl`
--

INSERT INTO `admin_tbl` (`id`, `username`, `password`, `email`) VALUES
(1, 'admin', '5f4dcc3b5aa765d61d8327deb882cf99', 'roneilbansas5222@gmail.com');

-- --------------------------------------------------------

--
-- Table structure for table `answer_tbl`
--

CREATE TABLE `answer_tbl` (
  `answer_list` varchar(50) DEFAULT NULL,
  `questions_id` int(30) DEFAULT NULL,
  `isCorrect` varchar(30) DEFAULT NULL,
  `answer_list_id` int(30) NOT NULL,
  `coding_id` int(30) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `choices_tbl`
--

CREATE TABLE `choices_tbl` (
  `choices_id` int(50) NOT NULL,
  `answer` varchar(100) DEFAULT 'false',
  `choice_description` varchar(200) DEFAULT NULL,
  `question_id` int(30) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `choices_tbl`
--

INSERT INTO `choices_tbl` (`choices_id`, `answer`, `choice_description`, `question_id`) VALUES
(12, 'false', 'quick easy', 20),
(13, 'false', 'quick easy', 20),
(14, 'false', 'banning', 20),
(15, 'false', 'jflasdjflasdf', 21),
(16, 'true', 'manila', 21),
(17, 'false', 'Flow', 21);

-- --------------------------------------------------------

--
-- Table structure for table `code`
--

CREATE TABLE `code` (
  `language` varchar(100) DEFAULT NULL,
  `textCode` longtext DEFAULT NULL,
  `sub_lesson_id` int(100) DEFAULT NULL,
  `snippets_id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `code`
--

INSERT INTO `code` (`language`, `textCode`, `sub_lesson_id`, `snippets_id`) VALUES
('swift', ' import UIKit\r\nclass ViewController: UIViewController {\r\noverride func viewDidLoad() {\r\n  super.viewDidLoad()\r\n  // Do any additional setup after loading the view,\r\ntypically from a nib.\r\n}\r\noverride func didReceiveMemoryWarning() {\r\n  super.didReceiveMemoryWarning()\r\n  // Dispose of any resources that can be recreated.\r\n}\r\n@IBAction func showMessage(sender: UIButton) {\r\n  let alertController = UIAlertController(title:\r\n\"Welcome to My First App\", message: \"Hello World\",\r\npreferredStyle: UIAlertControllerStyle.alert)\r\n\r\n  alertController.addAction(UIAlertAction(title: \"OK\",\r\nstyle: UIAlertActionStyle.default, handler: nil))\r\n  present(alertController, animated: true, completion: nil)\r\n}\r\n}', 38, 8),
('haskell', ' global _start\r\nsection .text\r\n_start:\r\n  mov rax, 1 ; write(\r\n  mov rdi, 1 ; STDOUT_FILENO,\r\n  mov rsi, msg ; \"Hello, world!\r\n\",\r\n  mov rdx, msglen ; sizeof(\"Hello, world!\r\n\")\r\n  syscall ; );\r\n  mov rax, 60 ; exit(\r\n  mov rdi, 0 ; EXIT_SUCCESS\r\n  syscall ; );\r\nsection .rodata\r\n  msg: db \"Hello, world!\", 10\r\n  msglen: equ $ - msg ', 39, 9),
('javascript', '\"A1.(from the browser console) \nconsole.log(\'Hello world!\'); \nA2. (or, mixed in with the HTML) \n<button id=\'button\' href=\'#\' onclick=\'alert(\'Hello World\')\'>Click Me</a> \nA3. (or, away from HTML, inside its own <script> tags: \n<script> const btn = document.getElementById(\'button\'); \nbtn.addEventListener(\'click\', function() { alert(\'Hello World!\'); }); </script>\"', 36, 10);

-- --------------------------------------------------------

--
-- Table structure for table `coding_tbl`
--

CREATE TABLE `coding_tbl` (
  `coding_id` int(30) NOT NULL,
  `description` varchar(300) DEFAULT NULL,
  `time` varchar(30) DEFAULT NULL,
  `quiz_id` int(50) DEFAULT NULL,
  `answer` longtext DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `lesson_tbl`
--

CREATE TABLE `lesson_tbl` (
  `lesson_id` varchar(30) NOT NULL,
  `lesson_name` longtext DEFAULT NULL,
  `status` varchar(30) DEFAULT 'lock',
  `module_id` int(30) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `lesson_tbl`
--

INSERT INTO `lesson_tbl` (`lesson_id`, `lesson_name`, `status`, `module_id`) VALUES
('1.1', 'A Quick First Look at Computer Programming', 'unlock', 57),
('1.2', 'A Partial History of Computer Programming', 'lock', 57),
('1.3', 'Flowcharts in Programming', 'lock', 57),
('1.4', 'What is Java?', 'lock', 57),
('1.5', 'Summary', 'lock', 57),
('1.6', 'Quiz', 'lock', 57),
('2.0', 'Introduction & Objectives', 'lock', 58),
('2.1', 'Data', 'lock', 58),
('2.2', 'Data Storage', 'lock', 58),
('2.3', 'Arithmetic', 'lock', 58),
('2.4', 'Operator Precedence', 'lock', 58),
('2.5', 'Type Conversion and Casting', 'lock', 58),
('2.6', 'Summary', 'lock', 58),
('2.7', 'Quiz', 'lock', 58),
('3.0', 'Introduction and Objectives', 'lock', 59),
('3.1', 'If-Else Statement', 'lock', 59),
('3.2', 'If-Else-If Statement', 'lock', 59),
('3.3', 'Switch Statement', 'lock', 59),
('3.4', 'Summary', 'lock', 59),
('3.5', 'Quiz', 'lock', 59),
('4.0', 'Introduction and Objectives', 'lock', 60),
('4.1', 'While Loop', 'lock', 60),
('4.2', 'Do While Loop', 'lock', 60),
('4.3', 'Increment/Decrement Operators', 'lock', 60),
('4.4', 'For Loop', 'lock', 60),
('4.5', 'Summary', 'lock', 60),
('4.6', 'Quiz', 'lock', 60),
('5.0', 'Introduction and Objectives', 'lock', 61),
('5.1', 'Methods Defined', 'lock', 61),
('5.2', 'Calling a Method', 'lock', 61),
('5.3', 'Call Stacks', 'lock', 61),
('5.4', 'Void Methods', 'lock', 61),
('5.5', 'Passing Arguments by Value', 'lock', 61),
('5.6', 'Overloading Methods', 'lock', 61),
('5.7', 'The Scope of Variables', 'lock', 61),
('5.8', 'Summary', 'lock', 61),
('5.9', 'Quiz', 'lock', 61),
('6.0', 'Introduction and Objectives', 'lock', 62),
('6.1', 'Declaring and Creating Arrays', 'lock', 62),
('6.2', 'Using Subscript With an Array', 'lock', 62),
('6.3', 'Passing Arrays to a Methods', 'lock', 62),
('6.4', 'Returning an Array from a Method', 'lock', 62),
('6.5', 'Summary', 'lock', 62),
('6.6', 'Quiz', 'lock', 62);

-- --------------------------------------------------------

--
-- Table structure for table `modules_tbl`
--

CREATE TABLE `modules_tbl` (
  `module_id` int(30) NOT NULL,
  `status` varchar(30) DEFAULT 'lock',
  `title` varchar(200) DEFAULT NULL,
  `programming_id` varchar(200) DEFAULT NULL,
  `date_added` date DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `modules_tbl`
--

INSERT INTO `modules_tbl` (`module_id`, `status`, `title`, `programming_id`, `date_added`) VALUES
(57, 'unlock', 'Introduction', 'cc102', '2022-10-16'),
(58, 'lock', 'Primitive Data Types \nand Arithmetic', 'cc102', '2022-10-16'),
(59, 'lock', 'Conditional Statement', 'cc102', '2022-10-16'),
(60, 'lock', 'Repetition', 'cc102', '2022-10-16'),
(61, 'lock', 'Methods', 'cc102', '2022-10-16'),
(62, 'lock', 'Arrays', 'cc102', '2022-10-16');

-- --------------------------------------------------------

--
-- Table structure for table `programming_language_tbl`
--

CREATE TABLE `programming_language_tbl` (
  `programming_id` varchar(100) NOT NULL,
  `name` varchar(30) DEFAULT NULL,
  `student_id` int(30) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `programming_language_tbl`
--

INSERT INTO `programming_language_tbl` (`programming_id`, `name`, `student_id`) VALUES
('cc102', 'Java', 198);

-- --------------------------------------------------------

--
-- Table structure for table `questions_tbl`
--

CREATE TABLE `questions_tbl` (
  `question_id` int(30) NOT NULL,
  `description` varchar(100) DEFAULT NULL,
  `time` int(100) DEFAULT NULL,
  `quiz_id` int(30) DEFAULT NULL,
  `difficulty_level` varchar(50) DEFAULT NULL,
  `question_type` varchar(50) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `questions_tbl`
--

INSERT INTO `questions_tbl` (`question_id`, `description`, `time`, `quiz_id`, `difficulty_level`, `question_type`) VALUES
(20, 'Draw a flowchart that computes the area of a triangle. Use the formula AT = ½ x (base x height); bas', 15, 8, 'easy', 'Multiple Choice'),
(21, 'what is 4 > 5', 15, 8, 'easy', 'Multiple Choice');

-- --------------------------------------------------------

--
-- Table structure for table `quiz_tbl`
--

CREATE TABLE `quiz_tbl` (
  `quiz_id` int(30) NOT NULL,
  `module_id` int(30) DEFAULT NULL,
  `started_at` date DEFAULT NULL,
  `title` varchar(100) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `quiz_tbl`
--

INSERT INTO `quiz_tbl` (`quiz_id`, `module_id`, `started_at`, `title`) VALUES
(8, 57, '2022-11-01', 'Introduction');

-- --------------------------------------------------------

--
-- Table structure for table `quiz_type`
--

CREATE TABLE `quiz_type` (
  `quiz_type_id` int(30) NOT NULL,
  `coding_id` int(30) DEFAULT NULL,
  `quiz_id` int(30) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `result`
--

CREATE TABLE `result` (
  `result_id` int(100) NOT NULL,
  `quiz_id` int(30) DEFAULT NULL,
  `student_id` int(30) DEFAULT NULL,
  `score` int(50) DEFAULT NULL,
  `ended_at` datetime DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `student_tbl`
--

CREATE TABLE `student_tbl` (
  `student_id` int(50) NOT NULL,
  `username` varchar(30) DEFAULT NULL,
  `email` varchar(30) DEFAULT NULL,
  `password` varchar(30) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `student_tbl`
--

INSERT INTO `student_tbl` (`student_id`, `username`, `email`, `password`) VALUES
(198, 'test', 'test@gmail.com', 'test');

-- --------------------------------------------------------

--
-- Table structure for table `sub_lesson_tbl`
--

CREATE TABLE `sub_lesson_tbl` (
  `sub_lesson_id` int(30) NOT NULL,
  `video` varchar(200) DEFAULT NULL,
  `image` varchar(200) DEFAULT NULL,
  `heading` longtext DEFAULT NULL,
  `lesson_id` varchar(30) DEFAULT NULL,
  `paragraph` longtext DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `sub_lesson_tbl`
--

INSERT INTO `sub_lesson_tbl` (`sub_lesson_id`, `video`, `image`, `heading`, `lesson_id`, `paragraph`) VALUES
(32, 'vOEN65nm4YU', '', '', '1.1', ''),
(33, '', '', 'Programming (or coding) is writing software (computer programs or code). It\r\ninvolves describing processes and/or procedures (algorithms), that is, the steps it takes\r\nto do something.', '1.1', 'In computer programming, these processes/procedures are specified into\r\ndetailed lists of instructions – what is called the source code representation of software\r\n(Haas, 2016). This code or program comes in a variety of languages. A computer\r\nprogramming language, when compared to natural languages which man uses, simply\r\nserves to “bridge the gap between something the computer can understand (binary)\r\nand something that humans can understand, and are capable of crafting programs\r\nwith”. (Foord, n.d.)\r\nThe most common classification of computer languages is that of high-level and\r\nlow level, where the levels are, of course, relative.\r\n\r\nThe most common classification of computer languages is that of high-level and\r\nlow level, where the levels are, of course, relative.'),
(34, 'Hdf5OmERt0g', '', '', '1.1', ''),
(35, '', '', 'Two general types of programming languages:\r\nHigh-level language- code is very similar to English so that almost all computer\r\nprogramming these days are done with them.\r\nExamples: Ada, BASIC, C#, C++, Fortran, HTML, Hugo, Java, Javascript, Logo,\r\nModula, Perl, PHP, Python, R, RPG, Simula, Smalltalk, Swift, Visual LISP, ZetaLisp\r\n\r\nAdvantages:\r\na) easier to write, read, debug (fix errors on) and maintain\r\nb) portable – can be used on many types of computer\r\nc) produces much shorter code than low-level languages\r\n\r\nDisadvantages:\r\n  a) generally slower than low-level languages\r\n  b) less efficient in the use of computer resources than low-level languages\r\n  (Prakash, 2017) ', '1.1', ' Low-level language- code is similar to native* machine (computer) language,\r\nthat is, ones (1s) and zeroes (0s), also called binary values.\r\n\r\nExamples: assembly languages, such as IBM 360 assembler, PDP-10 assembler,\r\nIntel x86 assembler, Linux x86-64 assembler (*a computer has its own low-level\r\nassembler language unique to that computer) '),
(36, '', '', 'A. JavaScript (Jones, 2017) code; this is different from Java, programming language\r\nyou will be learning in this course:', '1.1', ' '),
(38, '', '', 'B. Swift (appcoda.com, 2017) program, the language used in Apple devices:', '1.1', ''),
(39, '', '', 'C. Linux x86-64 assembly (Fisher, 2018) program:', '1.1', ''),
(40, '', '', 'It took about 100 years between the time the first recorded program was\r\npublished (by English noblewoman and mathematician Ada Lovelace) and the time\r\nthe first electronic computers were built in the 1940s.\r\nIn 1840, Ada Lovelace’s friend, Charles Babbage (the Father of Computing)\r\ngave a lecture in Italy about his mechanical general-purpose computing machine (not\r\ncompleted) which he called the “Analytical Engine”. A transcript of his lecture was\r\ntranslated by Lovelace into English, to which she added her own notes.\r\n(softschools.com, n.d.) ', '1.2', ' '),
(41, '', '', 'When Lovelace published her notes (three times longer, took nine months to\r\nfinish) in 1843, it contained a section which described steps to be done by the\r\nAnalytical Engine on how to calculate Bernoulli numbers, a mathematical sequence.\r\nThese steps formed the algorithm of the first published computer program. Since\r\nBabbage’s computer had memory, an arithmetic logic unit (processor), and control\r\nflow for looping, “it would have had all of the key elements of a modern computer”.\r\n(softschools.com, n.d.)\r\nFast forward to ninety-six years after Babbage’s Analytical Engine, Alan\r\nTuring presented in 1936 the concept of a “universal machine, later called the Turing\r\nmachine”, which can “compute anything that is computable” (Zimmermann, 2017).\r\nThus was born the central concept of the modern computer and the notion of\r\nprogramming (instructions on how to compute any kind of what) at the machine level. ', '1.2', ' '),
(42, '', '', 'By 1941 John Atanasoff and his graduate student, Clifford Berry, designed a\r\ncomputer that can solve 29 equations simultaneously. This marked the first time a\r\ncomputer is able to store information on its main memory.\r\nIn 1953 Grace Hopper developed the first computer language, which\r\neventually became known as COBOL. The following year the FORTRAN programming\r\nlanguage, an acronym for FORmula TRANslation, was developed by a team of\r\nprogrammers at IBM led by John Backus, according to the University of Michigan. By\r\n1964 Douglas Engelbart showed a prototype of the modern computer, with a mouse\r\nand a graphical user interface (GUI). This marked the evolution of the computer from a\r\nspecialized machine for scientists and mathematicians to technology that was more\r\naccessible to the general public (Zimmermann, 2017). ', '1.2', ' '),
(43, '', '', 'A flowchart is one of most useful diagrams to show programs and processes.\r\nOut of many different classifications, the one below (programiz.com, n.d.) is among the\r\nmost useful to computing: ', '1.3', '4 types of flowcharts:\r\nDocument flowcharts – show controls over a document-flow through a system\r\nData flowcharts - show controls over a data flows in a system\r\nSystem flowcharts - show controls at a physical or resource level\r\nProgram flowchart - show the controls in a program within a system \r\nComputer program flowcharts are used to show control flow in a computer\r\nprogram. It is sometimes used to show an algorithm without writing the code.\r\nSometimes they are used for training purposes for beginner programmers who do not\r\nyet know about coding but can understand graphical symbols in flowcharts. '),
(44, '', './uploads/symbols.png', 'Symbols Used In Flowcharting\r\nThe table below describes all the symbols that are used in making flowchart   ', '1.3', '   '),
(45, '', './uploads/f1.jpg', 'The sample flowchart below illustrates how to calculate the sum of numbers from 1 to N.   ', '1.3', '   '),
(46, '', './uploads/f2.jpg', 'More examples of program flowcharts (programiz.com, n.d.):\r\n1. A flowchart which calculates N! (factorial of N):     ', '1.3', '     '),
(47, '', './uploads/f3.jpg', '1. A flowchart which checks if a number is prime :   ', '1.3', '   '),
(52, '', './uploads/f4.jpg', '2. A flowchart which shows all prime numbers smaller or equal to N :', '1.3', ''),
(53, '', './uploads/f5.jpg', '1. A flowchart which calculates all divisors of N :', '1.3', ''),
(54, '', './uploads/f6.jpg', 'A flowchart which checks if 3 numbers can be length of sides of a triangle:', '1.3', ''),
(55, '', '', 'By 1941 John Atanasoff and his graduate student, Clifford Berry, designed a\r\ncomputer that can solve 29 equations simultaneously. This marked the first time a\r\ncomputer is able to store information on its main memory.\r\nIn 1953 Grace Hopper developed the first computer language, which\r\neventually became known as COBOL. The following year the FORTRAN programming\r\nlanguage, an acronym for FORmula TRANslation, was developed by a team of\r\nprogrammers at IBM led by John Backus, according to the University of Michigan. By\r\n1964 Douglas Engelbart showed a prototype of the modern computer, with a mouse\r\nand a graphical user interface (GUI). This marked the evolution of the computer from a\r\nspecialized machine for scientists and mathematicians to technology that was more\r\naccessible to the general public (Zimmermann, 2017).', '1.2', ''),
(56, '', '', 'Why is it called Java? One of the more famous urban legends in the computing world\r\ngoes that Java’s first name Oak had to be changed due to a previous trademark. After\r\nmany hours of trying to come up with a new name, the development team went out for\r\ncoffee and the name Java was born. (MathBits.com, 2018)  ', '1.4', 'Why is it called Java? One of the more famous urban legends in the computing world\r\ngoes that Javas first name Oak had to be changed due to a previous trademark. After\r\nmany hours of trying to come up with a new name, the development team went out for\r\ncoffee and the name Java was born. (MathBits.com, 2018)'),
(57, '', '', 'At present, the latest versions of Java are: Java 14, released in March 2020, and\r\nJava 11, a currently supported long-term support (LTS) version, released on September\r\n25, 2018; Oracle released for the legacy Java 8 LTS the last free public update in January\r\n2019 for commercial use, while it will otherwise still support Java 8 with public updates\r\nfor personal use up to at least December 2020.', '1.4', 'For purposes of this class, however, you may download resources from\r\nhttps://www.oracle.com/java/technologies/mobile-devices-downloads.html. Or, you\r\ncan use a favorite alternative of your co-majors in the higher years- Learn Java:\r\nProgramming and Tutorials. You can download it from the Play Store into your\r\nsmartphone.'),
(58, '', '', 'Summary', '1.5', 'Two general types of programming languages:\r\n                \r\nHigh-level language - code is very similar to English so that almost all computer\r\nprogramming these days are done with them.\r\n\r\nLow-level language - code is similar to native* machine (computer) language,\r\nthat is, ones (1s) and zeroes (0s), also called binary values.'),
(60, '', '', '', '1.6', ''),
(61, '', '', '', '1.6', '');

-- --------------------------------------------------------

--
-- Table structure for table `summary_tbl`
--

CREATE TABLE `summary_tbl` (
  `summary_id` int(30) NOT NULL,
  `text` longtext DEFAULT NULL,
  `lesson_id` varchar(50) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `summary_tbl`
--

INSERT INTO `summary_tbl` (`summary_id`, `text`, `lesson_id`) VALUES
(1, 'live smarter', NULL);

-- --------------------------------------------------------

--
-- Table structure for table `text_content_tbl`
--

CREATE TABLE `text_content_tbl` (
  `text_content_id` int(50) NOT NULL,
  `h1` longtext DEFAULT NULL,
  `sub_lesson_id` int(30) DEFAULT NULL,
  `h2` longtext DEFAULT NULL,
  `paragraph` longtext DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Indexes for dumped tables
--

--
-- Indexes for table `answer_tbl`
--
ALTER TABLE `answer_tbl`
  ADD PRIMARY KEY (`answer_list_id`),
  ADD KEY `FK_coding_list` (`coding_id`),
  ADD KEY `FK_answer_tbl` (`questions_id`);

--
-- Indexes for table `choices_tbl`
--
ALTER TABLE `choices_tbl`
  ADD PRIMARY KEY (`choices_id`),
  ADD KEY `FK_choices_tbl` (`question_id`);

--
-- Indexes for table `code`
--
ALTER TABLE `code`
  ADD PRIMARY KEY (`snippets_id`),
  ADD KEY `FK_code` (`sub_lesson_id`);

--
-- Indexes for table `coding_tbl`
--
ALTER TABLE `coding_tbl`
  ADD PRIMARY KEY (`coding_id`),
  ADD KEY `FK_coding_tbl` (`quiz_id`);

--
-- Indexes for table `lesson_tbl`
--
ALTER TABLE `lesson_tbl`
  ADD PRIMARY KEY (`lesson_id`),
  ADD KEY `FK_lesson_tbl` (`module_id`);

--
-- Indexes for table `modules_tbl`
--
ALTER TABLE `modules_tbl`
  ADD PRIMARY KEY (`module_id`),
  ADD KEY `FK_modules_tbl` (`programming_id`);

--
-- Indexes for table `programming_language_tbl`
--
ALTER TABLE `programming_language_tbl`
  ADD PRIMARY KEY (`programming_id`),
  ADD KEY `FK_programming_language_tbl` (`student_id`);

--
-- Indexes for table `questions_tbl`
--
ALTER TABLE `questions_tbl`
  ADD PRIMARY KEY (`question_id`),
  ADD KEY `FK_questions_tbl` (`quiz_id`);

--
-- Indexes for table `quiz_tbl`
--
ALTER TABLE `quiz_tbl`
  ADD PRIMARY KEY (`quiz_id`),
  ADD KEY `FK_quizzes_tbl` (`module_id`);

--
-- Indexes for table `quiz_type`
--
ALTER TABLE `quiz_type`
  ADD PRIMARY KEY (`quiz_type_id`),
  ADD KEY `FK_quiz_type` (`quiz_id`);

--
-- Indexes for table `result`
--
ALTER TABLE `result`
  ADD PRIMARY KEY (`result_id`),
  ADD KEY `FK_result` (`quiz_id`),
  ADD KEY `FK_result_student` (`student_id`);

--
-- Indexes for table `student_tbl`
--
ALTER TABLE `student_tbl`
  ADD PRIMARY KEY (`student_id`);

--
-- Indexes for table `sub_lesson_tbl`
--
ALTER TABLE `sub_lesson_tbl`
  ADD PRIMARY KEY (`sub_lesson_id`),
  ADD KEY `FK_sub_lesson_tbl` (`lesson_id`);

--
-- Indexes for table `summary_tbl`
--
ALTER TABLE `summary_tbl`
  ADD PRIMARY KEY (`summary_id`),
  ADD KEY `FK_summary_tbl` (`lesson_id`);

--
-- Indexes for table `text_content_tbl`
--
ALTER TABLE `text_content_tbl`
  ADD PRIMARY KEY (`text_content_id`),
  ADD KEY `FK_sub_text_content_tbl` (`sub_lesson_id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `answer_tbl`
--
ALTER TABLE `answer_tbl`
  MODIFY `answer_list_id` int(30) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `choices_tbl`
--
ALTER TABLE `choices_tbl`
  MODIFY `choices_id` int(50) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=18;

--
-- AUTO_INCREMENT for table `code`
--
ALTER TABLE `code`
  MODIFY `snippets_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- AUTO_INCREMENT for table `coding_tbl`
--
ALTER TABLE `coding_tbl`
  MODIFY `coding_id` int(30) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `modules_tbl`
--
ALTER TABLE `modules_tbl`
  MODIFY `module_id` int(30) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=63;

--
-- AUTO_INCREMENT for table `questions_tbl`
--
ALTER TABLE `questions_tbl`
  MODIFY `question_id` int(30) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=22;

--
-- AUTO_INCREMENT for table `quiz_tbl`
--
ALTER TABLE `quiz_tbl`
  MODIFY `quiz_id` int(30) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT for table `quiz_type`
--
ALTER TABLE `quiz_type`
  MODIFY `quiz_type_id` int(30) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `result`
--
ALTER TABLE `result`
  MODIFY `result_id` int(100) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `student_tbl`
--
ALTER TABLE `student_tbl`
  MODIFY `student_id` int(50) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=199;

--
-- AUTO_INCREMENT for table `sub_lesson_tbl`
--
ALTER TABLE `sub_lesson_tbl`
  MODIFY `sub_lesson_id` int(30) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=62;

--
-- AUTO_INCREMENT for table `summary_tbl`
--
ALTER TABLE `summary_tbl`
  MODIFY `summary_id` int(30) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `text_content_tbl`
--
ALTER TABLE `text_content_tbl`
  MODIFY `text_content_id` int(50) NOT NULL AUTO_INCREMENT;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `answer_tbl`
--
ALTER TABLE `answer_tbl`
  ADD CONSTRAINT `FK_answer_tbl` FOREIGN KEY (`questions_id`) REFERENCES `questions_tbl` (`question_id`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `choices_tbl`
--
ALTER TABLE `choices_tbl`
  ADD CONSTRAINT `FK_choices_tbl` FOREIGN KEY (`question_id`) REFERENCES `questions_tbl` (`question_id`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `code`
--
ALTER TABLE `code`
  ADD CONSTRAINT `FK_code` FOREIGN KEY (`sub_lesson_id`) REFERENCES `sub_lesson_tbl` (`sub_lesson_id`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `coding_tbl`
--
ALTER TABLE `coding_tbl`
  ADD CONSTRAINT `FK_coding_tbl` FOREIGN KEY (`quiz_id`) REFERENCES `quiz_tbl` (`quiz_id`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `lesson_tbl`
--
ALTER TABLE `lesson_tbl`
  ADD CONSTRAINT `FK_lesson_tbl` FOREIGN KEY (`module_id`) REFERENCES `modules_tbl` (`module_id`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `modules_tbl`
--
ALTER TABLE `modules_tbl`
  ADD CONSTRAINT `FK_modules_tbl` FOREIGN KEY (`programming_id`) REFERENCES `programming_language_tbl` (`programming_id`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `programming_language_tbl`
--
ALTER TABLE `programming_language_tbl`
  ADD CONSTRAINT `FK_programming_language_tbl` FOREIGN KEY (`student_id`) REFERENCES `student_tbl` (`student_id`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `questions_tbl`
--
ALTER TABLE `questions_tbl`
  ADD CONSTRAINT `FK_questions_tbl` FOREIGN KEY (`quiz_id`) REFERENCES `quiz_tbl` (`quiz_id`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `quiz_tbl`
--
ALTER TABLE `quiz_tbl`
  ADD CONSTRAINT `FK_quizzes_tbl` FOREIGN KEY (`module_id`) REFERENCES `modules_tbl` (`module_id`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `result`
--
ALTER TABLE `result`
  ADD CONSTRAINT `FK_result` FOREIGN KEY (`quiz_id`) REFERENCES `quiz_tbl` (`quiz_id`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `FK_result_student` FOREIGN KEY (`student_id`) REFERENCES `student_tbl` (`student_id`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `sub_lesson_tbl`
--
ALTER TABLE `sub_lesson_tbl`
  ADD CONSTRAINT `FK_sub_lesson_tbl` FOREIGN KEY (`lesson_id`) REFERENCES `lesson_tbl` (`lesson_id`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `summary_tbl`
--
ALTER TABLE `summary_tbl`
  ADD CONSTRAINT `FK_summary_tbl` FOREIGN KEY (`lesson_id`) REFERENCES `lesson_tbl` (`lesson_id`);

--
-- Constraints for table `text_content_tbl`
--
ALTER TABLE `text_content_tbl`
  ADD CONSTRAINT `FK_sub_text_content_tbl` FOREIGN KEY (`sub_lesson_id`) REFERENCES `sub_lesson_tbl` (`sub_lesson_id`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `FK_text_content_tbl` FOREIGN KEY (`sub_lesson_id`) REFERENCES `sub_lesson_tbl` (`sub_lesson_id`) ON DELETE CASCADE ON UPDATE CASCADE;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
