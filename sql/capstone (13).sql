-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Nov 22, 2022 at 08:02 AM
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
(1, 'admins', '5f4dcc3b5aa765d61d8327deb882cf99', 'roneilbansas5222@gmail.com');

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
(18, 'true', 'java', 22),
(19, 'false', 'cobol', 22),
(20, 'false', 'fortran', 22),
(21, 'true', 'c#', 23),
(22, 'true', 'cobol', 23),
(23, 'false', 'c++', 23),
(24, 'true', 'Grace Hopper', 24),
(25, 'false', 'Albert einstein', 24),
(26, 'false', 'Charles Babage', 24),
(27, 'true', 'Charles Babbage', 25),
(28, 'false', 'Grace Hopper', 25),
(29, 'false', 'Douglas Engelbart', 25),
(30, 'false', 'Input/Output ', 26),
(31, 'true', 'Flow line', 26),
(32, 'false', 'Processing ', 26),
(33, 'true', 'Terminal(Stop/Start)', 27),
(34, 'false', 'Processing ', 27),
(35, 'false', 'Decision ', 27),
(36, 'true', 'Input/Output', 28),
(37, 'false', 'Decision', 28),
(38, 'false', 'Predefined Process/Function', 28),
(39, 'true', 'Processing', 29),
(40, 'false', 'Flow line ', 29),
(41, 'false', 'Input/Output', 29),
(42, 'true', 'Decision', 30),
(43, 'false', 'Flow line', 30),
(44, 'false', 'Predefined Process/Function', 30),
(45, 'true', 'Predefined Process/Function', 31),
(46, 'false', 'Decision ', 31),
(47, 'false', 'Processing ', 31),
(48, 'true', 'x = 2, y = 5, z = 6', 32),
(49, 'false', 'x = 2,  z = 6 ', 32),
(50, 'false', 'x = 2, y = 5,', 32),
(51, 'true', 'x + y = 7', 33),
(52, 'false', 'x + y + 2 ', 33),
(53, 'false', 'x = y = 8,', 33),
(54, 'true', 'z / x = 3', 34),
(55, 'false', 'z / x - 1', 34),
(56, 'false', 'z / x = 0.5', 34),
(57, 'true', '2 times 2 = 4', 35),
(58, 'false', '2 minus 2 = -4', 35),
(59, 'false', '2 times 2 = 8', 35),
(60, 'true', '0.5', 36),
(61, 'false', '2.5', 36),
(62, 'false', '5.0', 36),
(63, 'true', '24.5', 37),
(64, 'false', '25', 37),
(65, 'false', '45', 37),
(66, 'true', '37.6', 39),
(67, 'false', '76', 39),
(68, 'false', '36.7', 39),
(69, 'true', '0.3048', 40),
(70, 'true', '10', 41),
(71, 'true', 'x = 2, y = 5, z = 6', 38),
(72, 'false', 'x = 2,  z = 6 ', 38),
(73, 'false', 'x = 2, y = 5,', 38),
(74, 'true', 'x is greater than y', 42),
(75, 'false', 'x is less than y', 42),
(76, 'false', 'x is equal to y', 42),
(77, 'true', 'Good evening.', 43),
(78, 'false', 'Good', 43),
(79, 'false', 'Good day', 43),
(80, 'true', 'Odd', 44),
(81, 'false', 'Even', 44),
(82, 'false', 'Equal', 44),
(83, 'true', 'Looking forward to the Weekend', 45),
(84, 'false', 'Today is Sunday', 45),
(85, 'false', 'Today is Saturday ', 45),
(86, 'true', '78', 46),
(87, 'true', 'myNum is equal or less than yourNum', 47),
(88, 'false', 'myNum is greater than yourNum', 47),
(89, 'false', 'myNum is less than yourNum', 47),
(90, 'true', '2 4 6 8 10 ', 48),
(91, 'false', '2  6  10 ', 48),
(92, 'false', '3 7 9 11 13 ', 48),
(93, 'true', '55', 49),
(94, 'true', '30', 50),
(95, 'true', '4', 51),
(96, 'false', '6', 51),
(97, 'false', '5', 51),
(98, 'false', '33', 52),
(99, 'false', '16', 52),
(100, 'true', '27', 52),
(101, 'true', '48', 53),
(102, 'false', '99', 53),
(103, 'false', '64', 53),
(104, 'true', '5050', 54),
(105, 'true', 'For Loop, Do While Loop, while Loop', 55),
(106, 'false', 'Double Loop, Int Loop, String Loop', 55),
(107, 'false', 'Class, Function, Object', 55);

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
(' Swift', 'import UIKit\r\nclass ViewController: UIViewController {\r\noverride func viewDidLoad() {\r\n  super.viewDidLoad()\r\n  // Do any additional setup after loading the view,\r\ntypically from a nib.\r\n}\r\noverride func didReceiveMemoryWarning() {\r\n  super.didReceiveMemoryWarning()\r\n  // Dispose of any resources that can be recreated.\r\n}\r\n@IBAction func showMessage(sender: UIButton) {\r\n  let alertController = UIAlertController(title:\r\n\"Welcome to My First App\", message: \"Hello World\",\r\npreferredStyle: UIAlertControllerStyle.alert)\r\n\r\n  alertController.addAction(UIAlertAction(title: \"OK\",\r\nstyle: UIAlertActionStyle.default, handler: nil))\r\n  present(alertController, animated: true, completion: nil)\r\n}\r\n}', 67, 11),
('haskell', 'global _start\r\nsection .text\r\n_start:\r\n  mov rax, 1 ; write(\r\n  mov rdi, 1 ; STDOUT_FILENO,\r\n  mov rsi, msg ; &quot;Hello, world!\n&quot;,\r\n  mov rdx, msglen ; sizeof(&quot;Hello, world!\n&quot;)\r\n  syscall ; );\r\n  mov rax, 60 ; exit(\r\n  mov rdi, 0 ; EXIT_SUCCESS\r\n  syscall ; );\r\nsection .rodata\r\n  msg: db &quot;Hello, world!&quot;, 10\r\n  msglen: equ $ - msg ', 68, 12);

-- --------------------------------------------------------

--
-- Table structure for table `codefrom`
--

CREATE TABLE `codefrom` (
  `id` int(11) NOT NULL,
  `codeFrom` longtext DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `codefrom`
--

INSERT INTO `codefrom` (`id`, `codeFrom`) VALUES
(1, 'public class Main { public static void main(String[] args) {\n\n int  n [] = {98,89,88,86,90,100};\nint len = n.length;\n\nint sum = 0;\n\nfor(int i = 0; i < len; i++){\nsum += n[i];\n}\nSystem.out.println(sum / len);\n\n } }'),
(2, 'public class Main { public static void main(String[] args) {\n\n int  n [] = {98,89,88,86,90,100};\nint len = n.length;\n\nint sum = 0;\n\nfor(int i = 0; i < len; i++){\nsum += n[i];\n}\nSystem.out.println(sum / len);\n\n } }'),
(3, 'public class Main { public static void main(String[] args) {\n\n int  n [] = {98,89,88,86,90,100};\nint len = n.length;\n\nint sum = 0;\n\nfor(int i = 0; i < len; i++){\nsum += n[i];\n}\nSystem.out.println(sum / len);\n\n } }');

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
  `lesson_id` varchar(30) DEFAULT NULL,
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
('2.0', 'Introduction & Objectives', 'unlock', 58),
('2.1', 'Data', 'lock', 58),
('2.2', 'Data Storage', 'lock', 58),
('2.3', 'Arithmetic', 'lock', 58),
('2.4', 'Operator Precedence', 'lock', 58),
('2.5', 'Type Conversion and Casting', 'lock', 58),
('2.6', 'Summary', 'lock', 58),
('2.7', 'Quiz', 'lock', 58),
('3.0', 'Introduction and Objectives', 'unlock', 59),
('3.1', 'If-Else Statement', 'lock', 59),
('3.2', 'If-Else-If Statement', 'lock', 59),
('3.3', 'Switch Statement', 'lock', 59),
('3.4', 'Summary', 'lock', 59),
('3.5', 'Quiz', 'lock', 59),
('4.0', 'Introduction and Objectives', 'unlock', 60),
('4.1', 'While Loop', 'lock', 60),
('4.2', 'Do While Loop', 'lock', 60),
('4.3', 'Increment/Decrement Operators', 'lock', 60),
('4.4', 'For Loop', 'lock', 60),
('4.5', 'Summary', 'lock', 60),
('4.6', 'Quiz', 'lock', 60),
('5.0', 'Introduction and Objectives', 'unlock', 61),
('5.1', 'Methods Defined', 'lock', 61),
('5.2', 'Calling a Method', 'lock', 61),
('5.3', 'Call Stacks', 'lock', 61),
('5.4', 'Void Methods', 'lock', 61),
('5.5', 'Passing Arguments by Value', 'lock', 61),
('5.6', 'Overloading Methods', 'lock', 61),
('5.7', 'The Scope of Variables', 'lock', 61),
('5.8', 'Summary', 'lock', 61),
('5.9', 'Quiz', 'lock', 61),
('6.0', 'Introduction and Objectives', 'unlock', 62),
('6.1', 'Declaring and Creating Arrays', 'lock', 62),
('6.2', 'Using Subscript With an Array', 'lock', 62),
('6.3', 'Passing Arrays to a Methods', 'lock', 62),
('6.4', 'Returning an Array from a Method', 'lock', 62),
('6.5', 'Summary', 'lock', 62),
('6.6', 'Quiz', 'lock', 62);

-- --------------------------------------------------------

--
-- Table structure for table `les_tbl`
--

CREATE TABLE `les_tbl` (
  `lesson_id` int(100) NOT NULL,
  `lesson_name` varchar(100) DEFAULT NULL,
  `status` varchar(100) DEFAULT NULL,
  `module_id` int(100) DEFAULT NULL,
  `lessons` varchar(100) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `les_tbl`
--

INSERT INTO `les_tbl` (`lesson_id`, `lesson_name`, `status`, `module_id`, `lessons`) VALUES
(7, 'Introduction & objectives', 'unlock', 58, '2.0'),
(8, 'Data', 'lock', 58, '2.1'),
(9, 'Data storage', 'lock', 58, '2.2'),
(10, 'Arithmetic', 'lock', 58, '2.3'),
(11, 'Operator precedence', 'lock', 58, '2.4'),
(12, 'Type conversion and casting', 'lock', 58, '2.5'),
(13, 'Summary', 'lock', 58, '2.6'),
(14, 'Quiz', 'lock', 58, '2.7'),
(15, 'Introduction & objectives', 'unlock', 59, '3.0'),
(16, 'If-Else statements', 'lock', 59, '3.1'),
(17, 'If-Else-If statement', 'lock', 59, '3.2'),
(18, 'Switch statement', 'lock', 59, '3.3'),
(19, 'Summary', 'lock', 59, '3.4'),
(20, 'Quiz', 'lock', 59, '3.5'),
(21, 'Introduction & objectives', 'unlock', 60, '4.0'),
(22, 'While loop', 'lock', 60, '4.1'),
(23, 'Do while loop', 'lock', 60, '4.2'),
(24, 'Increment/Decrement operators', 'lock', 60, '4.3'),
(25, 'For loop', 'lock', 60, '4.4'),
(26, 'Summary', 'lock', 60, '4.5'),
(27, 'Quiz', 'lock', 60, '4.6'),
(28, 'Introduction & objectives', 'unlock', 61, '5.0'),
(29, 'Methods defined', 'lock', 61, '5.1'),
(30, 'Calling a method', 'lock', 61, '5.2'),
(31, 'Call stacks', 'lock', 61, '5.3'),
(32, 'Void methods', 'lock', 61, '5.4'),
(33, 'Passing arguments by value', 'lock', 61, '5.5'),
(34, 'Overloading methods', 'lock', 61, '5.6'),
(35, 'The scope of variables', 'lock', 61, '5.7'),
(36, 'Summary', 'lock', 61, '5.8'),
(37, 'Quiz', 'lock', 61, '5.9'),
(38, 'Introduction & objectives', 'unlock', 62, '6.0'),
(39, 'Declaring and creating arrays ', 'lock', 62, '6.1'),
(40, 'Using subscripts with an array', 'lock', 62, '6.2'),
(41, 'Passing arrays to a method', 'lock', 62, '6.3'),
(42, 'Returning an array from a method', 'lock', 62, '6.4'),
(43, 'Summary', 'lock', 62, '6.5'),
(44, 'Quiz', 'lock', 62, '6.6'),
(45, 'A quick first look at computer programming', 'unlock', 57, '1.1'),
(46, 'A partial history of computer programming', 'lock', 57, '1.2'),
(47, 'Flowcharts in programming', 'lock', 57, '1.3'),
(48, 'What is Java?', 'lock', 57, '1.4'),
(49, 'Summary', 'lock', 57, '1.5'),
(50, 'Quiz', 'lock', 57, '1.6'),
(108, 'A quick first look at computer programming', 'unlock', 628, '1.1'),
(109, 'A partial history of computer programming', 'lock', 628, '1.2'),
(110, 'Flowcharts in programming', 'lock', 628, '1.3'),
(111, 'What is Java?', 'lock', 628, '1.4'),
(112, 'Summary', 'lock', 628, '1.5'),
(113, 'Quiz', 'lock', 628, '1.6');

-- --------------------------------------------------------

--
-- Table structure for table `modules_tbl`
--

CREATE TABLE `modules_tbl` (
  `module_id` int(30) NOT NULL,
  `status` varchar(30) DEFAULT 'lock',
  `title` varchar(200) DEFAULT NULL,
  `programming_id` int(100) DEFAULT NULL,
  `date_added` date DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `modules_tbl`
--

INSERT INTO `modules_tbl` (`module_id`, `status`, `title`, `programming_id`, `date_added`) VALUES
(57, 'unlock', 'Introduction', 2, '2022-10-16'),
(58, 'lock', 'Primitive Data Types \r\nand Arithmetic', 2, '2022-10-16'),
(59, 'lock', 'Conditional Statement', 2, '2022-10-16'),
(60, 'lock', 'Repetition', 2, '2022-10-16'),
(61, 'lock', 'Methods', 2, '2022-10-16'),
(62, 'lock', 'Arrays', 2, '2022-10-16'),
(628, 'unlock', 'Introduction', 520, '2022-10-16'),
(629, 'lock', 'Primitive Data Types \r\nand Arithmetic', 520, '2022-10-16'),
(630, 'lock', 'Conditional Statement', 520, '2022-10-16'),
(631, 'lock', 'Repetition', 520, '2022-10-16'),
(632, 'lock', 'Methods', 520, '2022-10-16'),
(633, 'lock', 'Arrays', 520, '2022-10-16'),
(634, 'unlock', 'Introduction', 521, '2022-10-16'),
(635, 'lock', 'Primitive Data Types \r\nand Arithmetic', 521, '2022-10-16'),
(636, 'lock', 'Conditional Statement', 521, '2022-10-16'),
(637, 'lock', 'Repetition', 521, '2022-10-16'),
(638, 'lock', 'Methods', 521, '2022-10-16'),
(639, 'lock', 'Arrays', 521, '2022-10-16');

-- --------------------------------------------------------

--
-- Table structure for table `programming_language_tbl`
--

CREATE TABLE `programming_language_tbl` (
  `programming_id` int(100) NOT NULL,
  `name` varchar(30) DEFAULT NULL,
  `student_id` int(30) DEFAULT NULL,
  `course_code` varchar(100) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `programming_language_tbl`
--

INSERT INTO `programming_language_tbl` (`programming_id`, `name`, `student_id`, `course_code`) VALUES
(2, 'Java', 199, 'cc102'),
(520, 'Java', 322, 'java101'),
(521, 'Java', 323, 'java101');

-- --------------------------------------------------------

--
-- Table structure for table `questions_tbl`
--

CREATE TABLE `questions_tbl` (
  `question_id` int(30) NOT NULL,
  `description` longtext DEFAULT NULL,
  `time` int(100) DEFAULT NULL,
  `quiz_id` int(30) DEFAULT NULL,
  `difficulty_level` varchar(50) DEFAULT NULL,
  `question_type` varchar(50) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `questions_tbl`
--

INSERT INTO `questions_tbl` (`question_id`, `description`, `time`, `quiz_id`, `difficulty_level`, `question_type`) VALUES
(22, 'Choose one high level computer programming language', 15, 11, 'easy', 'Multiple Choice'),
(23, 'Choose one low level computer programming languages', 5, 11, 'easy', 'Multiple Choice'),
(24, 'Who develop the first computer language', 8, 11, 'easy', 'Multiple Choice'),
(25, 'Who is the father of computing', 5, 11, 'easy', 'Multiple Choice'),
(26, 'Used to indicate the flow of logic by connecting symbols.', 5, 11, 'easy', 'Multiple Choice'),
(27, 'Used to represent start and end of flowchart.', 15, 11, 'easy', 'Multiple Choice'),
(28, 'Used for input and output operation.', 15, 11, 'easy', 'Multiple Choice'),
(29, 'Used for arithmetic operations and data manipulations.', 15, 11, 'easy', 'Multiple Choice'),
(30, 'Used to represent the operation in which there are two alternatives: true and false.', 15, 11, 'easy', 'Multiple Choice'),
(31, 'Used to represent a group of statements performing one processing task.', 15, 11, 'easy', 'Multiple Choice'),
(32, 'Suppose X, Y, AND z are INT VARIABLES AND X = 2, Y = 5, AND z = 6. What IS the output of the following statements? System.out.println(\'x = \' + x + \', y = \' + y + \', z = \' + z);', 60, 12, 'medium', 'Multiple Choice'),
(33, 'Suppose x, y, and z are int variables and  x = 2, y = 5, and z = 6. What is the output of the following statements? : System.out.println(\"x + y = \" + (x + y));;', 45, 12, 'medium', 'Multiple Choice'),
(34, 'Suppose x, y, and z are int variables and x = 2, y = 5, and z = 6. What is the output of the following statements? : System.out.println(\"z / x = \" + (z / x));', 45, 12, 'medium', 'Multiple Choice'),
(35, '	Suppose x, y, and z are int variables and x = 2, y = 5, and z = 6. What is the output of the following statements? : System.out.println(\" 2 times \" + x + \" = \" + (2 * x));', 60, 12, 'medium', 'Multiple Choice'),
(36, 'What is the output of the following statements? Suppose a and b are int variables, c is a double variable, and a = 13, b = 5, and c = 17.5. : System.out.println(a + b - c);', 60, 12, 'medium', 'Multiple Choice'),
(37, 'What is the output of the following statements? Suppose a and b are int variables, c is a double variable, and a = 13, b = 5, and c = 17.5. : System.out.println(15 / 2 + c);', 50, 12, 'medium', 'Multiple Choice'),
(38, 'What is the output of the following statements? Suppose a and b are int variables, c is a double variable, and a = 13, b = 5, and c = 17.5. : System.out.println(a / (double)(b) + 2 * c);', 60, 12, 'medium', 'Multiple Choice'),
(39, '	What is the output of the following statements? Suppose a and b are int variables, c is a double variable, and a = 13, b = 5, and c = 17.5. :  System.out.println((int)(c)% 5 + a - b);', 60, 12, 'medium', 'Multiple Choice'),
(40, 'write a java program that convert 12 inches to meters', 5, 12, 'hard', 'Problem Solving'),
(41, 'write a java program that add 6 and 4.', 5, 12, 'easy', 'Problem Solving'),
(42, 'What is the output of the following prgram:\r\n\r\nint x = 20;\r\nint y = 18;\r\nif (x > y) {\r\nSystem.out.println(\"x is greater than y\");\r\n}', 45, 13, 'easy', 'Multiple Choice'),
(43, 'int time = 20;\r\nif (time < 18) {\r\n  System.out.println(\"Good day.\");\r\n} else {\r\n  System.out.println(\"Good evening.\");\r\n}', 30, 13, 'easy', 'Multiple Choice'),
(44, 'What is the output of the following program:\r\n\r\nint x = 45;\r\n     \r\nif (x%2 == 0) {\r\n     System.out.println(\"Even\");\r\n}else{\r\n      System.out.println(\"Odd\");\r\n}', 45, 13, 'easy', 'Multiple Choice'),
(45, 'What is the output of the following program:\r\nint day = 4;\r\nswitch (day) {\r\n  case 6:\r\n   System.out.println(\"Today is \r\n    Saturday\");\r\n   break;\r\n   default:\r\n   System.out.println(\"Looking forward to the Weekend\");}', 50, 13, 'medium', 'Multiple Choice'),
(46, 'write a java program that determine the max number of the array 34,67,78,22,34', 5, 13, 'medium', 'Problem Solving'),
(47, 'What is the output of the following program? \r\n    int myNum = 30;\r\n    int yourNum = 30;\r\n    if(myNum <= yourNum){\r\n         System.out.println(\"myNum is equal or less than yourNum\");\r\n    }else{\r\n         System.out.println(\"myNum is greater than yourNum\");\r\n    }', 35, 13, 'medium', 'Multiple Choice'),
(48, 'int[] egArray = { 2, 4, 6, 8, 10, 1, 3, 5, 7, 9 };\r\nfor ( int index= 0 ; index < 5 ; index++ )\r\nSystem.out.print( egArray[ index ] + \" \" );', 30, 16, 'medium', 'Multiple Choice'),
(49, 'Write a java program that add all integers between  1 and 10.', 5, 16, 'easy', 'Problem Solving'),
(50, 'Write a program that add all even numbers between 1 and 10;', 5, 16, 'easy', 'Problem Solving'),
(51, 'What is the output of the following program?\r\n\r\nint [] x = {4,5,6,7,8,9};\r\nSystem.out.println(x[0]);', 15, 16, 'easy', 'Multiple Choice'),
(52, 'What is the output of the following program?\r\n\r\nint [] x = {4,5,6,7,8,9};\r\nint [] y = {22,56,32};\r\nSystem.out.println(x[1] + y[0]);', 20, 16, 'easy', 'Multiple Choice'),
(53, 'What is the output of the following program?\r\n\r\nint [] x = {4,5,6,7,8,9};\r\nint [] y = {22,56,32};\r\nSystem.out.println(y[2] + y[0]  - x[2]);', 20, 16, 'easy', 'Multiple Choice'),
(54, 'Write a program that adds all integers from 1 to 100 using forloop and prints the total integers.', 5, 14, 'hard', 'Problem Solving'),
(55, 'What are the three types of loop in java programming', 45, 14, 'medium', 'Multiple Choice'),
(56, 'Write a program to calculate the sum of the following grades: 98,89,88,86,90,100 and prints the average;', 5, 14, 'medium', 'Problem Solving');

-- --------------------------------------------------------

--
-- Table structure for table `quizzes_tbl`
--

CREATE TABLE `quizzes_tbl` (
  `quizzes_id` int(11) NOT NULL,
  `quiz_id` int(100) DEFAULT NULL,
  `student_id` int(100) DEFAULT NULL,
  `module_id` int(100) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `quizzes_tbl`
--

INSERT INTO `quizzes_tbl` (`quizzes_id`, `quiz_id`, `student_id`, `module_id`) VALUES
(1, 11, 199, 57),
(7, 12, 199, 58),
(8, 13, 199, 59),
(11, 14, 199, 60),
(12, 15, 199, 61),
(13, 16, 199, 62);

-- --------------------------------------------------------

--
-- Table structure for table `quiz_tbl`
--

CREATE TABLE `quiz_tbl` (
  `quiz_id` int(30) NOT NULL,
  `started_at` date DEFAULT NULL,
  `title` varchar(100) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `quiz_tbl`
--

INSERT INTO `quiz_tbl` (`quiz_id`, `started_at`, `title`) VALUES
(11, '2022-11-14', 'Introduction'),
(12, '2022-11-14', 'Primitive Data Types'),
(13, '2022-11-14', 'Conditional Statement'),
(14, '2022-11-14', 'Repetition'),
(15, '2022-11-14', 'Methods'),
(16, '2022-11-14', 'Arrays');

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
  `ended_at` time DEFAULT NULL,
  `status` varchar(100) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `result`
--

INSERT INTO `result` (`result_id`, `quiz_id`, `student_id`, `score`, `ended_at`, `status`) VALUES
(99, 11, 199, 2, '10:48:41', 'Failed'),
(109, 11, 199, 6, '05:41:52', 'Failed'),
(110, 11, 199, 9, '05:42:36', 'Passed'),
(118, 12, 199, 6, '05:46:23', 'Failed'),
(119, 12, 199, 7, '05:49:46', 'Passed'),
(120, 12, 199, 0, '05:50:37', 'Failed'),
(124, 16, 199, 2, '11:05:38', 'Failed'),
(125, 11, 199, 3, '11:10:08', 'Failed'),
(126, 11, 199, 8, '11:11:00', 'Passed'),
(132, 11, 199, 3, '01:12:00', 'Failed'),
(133, 11, 199, 0, '05:50:11', 'Failed'),
(134, 11, 199, 3, '05:50:42', 'Failed'),
(135, 13, 199, 0, '07:33:16', 'Failed'),
(136, 13, 199, 0, '07:34:53', 'Failed'),
(137, 12, 199, 0, '07:35:16', 'Failed'),
(138, 12, 199, 0, '09:43:55', 'Failed'),
(139, 12, 199, 0, '09:46:16', 'Failed'),
(140, 12, 199, 0, '09:46:30', 'Failed'),
(141, 11, 199, 0, '10:57:05', 'Failed'),
(142, 11, 199, 2, '11:06:49', 'Failed'),
(143, 12, 199, 0, '11:10:19', 'Failed'),
(144, 12, 199, 0, '11:10:50', 'Failed'),
(145, 12, 199, 0, '11:12:22', 'Failed'),
(146, 12, 199, 0, '11:14:31', 'Failed'),
(147, 12, 199, 0, '11:32:09', 'Failed'),
(148, 12, 199, 0, '11:35:46', 'Failed'),
(149, 12, 199, 0, '11:45:55', 'Failed');

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
(199, 'Djavu', 'roneilbansas5222@gmail.com', 'qwe'),
(322, 'h', 'h', 'h'),
(323, 'k', 'k', 'k');

-- --------------------------------------------------------

--
-- Table structure for table `sub_lesson_tbl`
--

CREATE TABLE `sub_lesson_tbl` (
  `sub_lesson_id` int(30) NOT NULL,
  `video` varchar(200) DEFAULT NULL,
  `image` varchar(200) DEFAULT NULL,
  `heading` longtext DEFAULT NULL,
  `lesson_id` int(100) DEFAULT NULL,
  `paragraph` longtext DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `sub_lesson_tbl`
--

INSERT INTO `sub_lesson_tbl` (`sub_lesson_id`, `video`, `image`, `heading`, `lesson_id`, `paragraph`) VALUES
(62, 'vOEN65nm4YU', '', '', 108, ''),
(63, '', '', 'Programming (or coding) is writing software (computer programs or code). It\r\ninvolves describing processes and/or procedures (algorithms), that is, the steps it takes\r\nto do something', 108, 'In computer programming, these processes/procedures are specified into\r\ndetailed lists of instructions – what is called the source code representation of software\r\n(Haas, 2016). This code or program comes in a variety of languages. A computer\r\nprogramming language, when compared to natural languages which man uses, simply\r\nserves to “bridge the gap between something the computer can understand (binary)\r\nand something that humans can understand, and are capable of crafting programs\r\nwith”. (Foord, n.d.)\r\nThe most common classification of computer languages is that of high-level and\r\nlow level, where the levels are, of course, relative.\r\n\r\nThe most common classification of computer languages is that of high-level and\r\nlow level, where the levels are, of course, relative.'),
(64, 'Hdf5OmERt0g', '', '', 108, ''),
(65, '', '', 'Two general types of programming languages:\r\nHigh-level language- code is very similar to English so that almost all computer\r\nprogramming these days are done with them.\r\nExamples: Ada, BASIC, C#, C++, Fortran, HTML, Hugo, Java, Javascript, Logo,\r\nModula, Perl, PHP, Python, R, RPG, Simula, Smalltalk, Swift, Visual LISP, ZetaLisp\r\n\r\nAdvantages:\r\na) easier to write, read, debug (fix errors on) and maintain\r\nb) portable – can be used on many types of computer\r\nc) produces much shorter code than low-level languages\r\n\r\nDisadvantages:\r\n  a) generally slower than low-level languages\r\n  b) less efficient in the use of computer resources than low-level languages\r\n  (Prakash, 2017)', 108, 'Low-level language- code is similar to native* machine (computer) language,\r\nthat is, ones (1s) and zeroes (0s), also called binary values.\r\n\r\nExamples: assembly languages, such as IBM 360 assembler, PDP-10 assembler,\r\nIntel x86 assembler, Linux x86-64 assembler (*a computer has its own low-level\r\nassembler language unique to that computer)'),
(66, '', '', 'A. JavaScript (Jones, 2017) code; this is different from Java, programming language\r\nyou will be learning in this course:', 108, ''),
(67, '', '', 'B. Swift (appcoda.com, 2017) program, the language used in Apple devices:', 108, ''),
(68, '', '', 'C. Linux x86-64 assembly (Fisher, 2018) program:', 108, '');

-- --------------------------------------------------------

--
-- Table structure for table `summary_tbl`
--

CREATE TABLE `summary_tbl` (
  `summary_id` int(30) NOT NULL,
  `text` longtext DEFAULT NULL,
  `lesson_id` int(100) DEFAULT NULL
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
-- Indexes for table `codefrom`
--
ALTER TABLE `codefrom`
  ADD PRIMARY KEY (`id`);

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
  ADD KEY `FK_lesson_tbl` (`module_id`);

--
-- Indexes for table `les_tbl`
--
ALTER TABLE `les_tbl`
  ADD PRIMARY KEY (`lesson_id`),
  ADD KEY `FK_les_tbl` (`module_id`);

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
-- Indexes for table `quizzes_tbl`
--
ALTER TABLE `quizzes_tbl`
  ADD PRIMARY KEY (`quizzes_id`),
  ADD KEY `FK_quizzes_tbls` (`module_id`),
  ADD KEY `FK_quizzes_tbl_student` (`student_id`);

--
-- Indexes for table `quiz_tbl`
--
ALTER TABLE `quiz_tbl`
  ADD PRIMARY KEY (`quiz_id`);

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
  MODIFY `choices_id` int(50) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=108;

--
-- AUTO_INCREMENT for table `code`
--
ALTER TABLE `code`
  MODIFY `snippets_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;

--
-- AUTO_INCREMENT for table `codefrom`
--
ALTER TABLE `codefrom`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `coding_tbl`
--
ALTER TABLE `coding_tbl`
  MODIFY `coding_id` int(30) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `les_tbl`
--
ALTER TABLE `les_tbl`
  MODIFY `lesson_id` int(100) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=117;

--
-- AUTO_INCREMENT for table `modules_tbl`
--
ALTER TABLE `modules_tbl`
  MODIFY `module_id` int(30) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=640;

--
-- AUTO_INCREMENT for table `programming_language_tbl`
--
ALTER TABLE `programming_language_tbl`
  MODIFY `programming_id` int(100) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=522;

--
-- AUTO_INCREMENT for table `questions_tbl`
--
ALTER TABLE `questions_tbl`
  MODIFY `question_id` int(30) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=57;

--
-- AUTO_INCREMENT for table `quizzes_tbl`
--
ALTER TABLE `quizzes_tbl`
  MODIFY `quizzes_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=14;

--
-- AUTO_INCREMENT for table `quiz_tbl`
--
ALTER TABLE `quiz_tbl`
  MODIFY `quiz_id` int(30) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=17;

--
-- AUTO_INCREMENT for table `quiz_type`
--
ALTER TABLE `quiz_type`
  MODIFY `quiz_type_id` int(30) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `result`
--
ALTER TABLE `result`
  MODIFY `result_id` int(100) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=150;

--
-- AUTO_INCREMENT for table `student_tbl`
--
ALTER TABLE `student_tbl`
  MODIFY `student_id` int(50) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=324;

--
-- AUTO_INCREMENT for table `sub_lesson_tbl`
--
ALTER TABLE `sub_lesson_tbl`
  MODIFY `sub_lesson_id` int(30) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=69;

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
-- Constraints for table `les_tbl`
--
ALTER TABLE `les_tbl`
  ADD CONSTRAINT `FK_les_tbl` FOREIGN KEY (`module_id`) REFERENCES `modules_tbl` (`module_id`) ON DELETE CASCADE ON UPDATE CASCADE;

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
-- Constraints for table `quizzes_tbl`
--
ALTER TABLE `quizzes_tbl`
  ADD CONSTRAINT `FK_quizzes_tbl_student` FOREIGN KEY (`student_id`) REFERENCES `student_tbl` (`student_id`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `FK_quizzes_tbls` FOREIGN KEY (`module_id`) REFERENCES `modules_tbl` (`module_id`) ON DELETE CASCADE ON UPDATE CASCADE;

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
  ADD CONSTRAINT `FK_sub_lesson_tbl` FOREIGN KEY (`lesson_id`) REFERENCES `les_tbl` (`lesson_id`) ON DELETE CASCADE ON UPDATE CASCADE;

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
