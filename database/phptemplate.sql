-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Mar 21, 2024 at 01:20 PM
-- Server version: 10.4.32-MariaDB
-- PHP Version: 8.2.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `phptemplate`
--

-- --------------------------------------------------------

--
-- Table structure for table `admin`
--

CREATE TABLE `admin` (
  `id` int(225) NOT NULL,
  `firstname` varchar(225) NOT NULL,
  `lastname` varchar(225) NOT NULL,
  `username` varchar(225) NOT NULL,
  `password` varchar(225) NOT NULL,
  `create_date` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `admin`
--

INSERT INTO `admin` (`id`, `firstname`, `lastname`, `username`, `password`, `create_date`) VALUES
(1, 'impact', 'admin', 'root', 'root', '2024-03-21 08:51:30');

-- --------------------------------------------------------

--
-- Table structure for table `genneral_settings`
--

CREATE TABLE `genneral_settings` (
  `id` int(100) NOT NULL,
  `section_type` varchar(100) NOT NULL,
  `field_type` varchar(100) NOT NULL,
  `field_value` text NOT NULL,
  `create_date` timestamp(6) NOT NULL DEFAULT current_timestamp(6) ON UPDATE current_timestamp(6)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `genneral_settings`
--

INSERT INTO `genneral_settings` (`id`, `section_type`, `field_type`, `field_value`, `create_date`) VALUES
(1, 'topbar', 'contact_email', 'template@gmail.com', '2024-03-09 04:31:48.000000'),
(2, 'topbar', 'contact_number', '+1 5589 55488 00', '2024-03-09 04:33:20.000000'),
(3, 'about', 'about_title', 'About', '0000-00-00 00:00:00.000000'),
(4, 'about', 'box1_img', 'https://media.istockphoto.com/id/1047259374/photo/programming-source-code-abstract-background.jpg?s=612x612&w=0&k=20&c=07DAFiujCb58Zgu5ZArLprHiSKew5pCGqbTnop9GclA=', '2024-03-13 04:11:06.000000'),
(5, 'about', 'box2_img', 'https://media.istockphoto.com/id/1075599562/photo/programmer-working-with-program-code.jpg?s=612x612&w=0&k=20&c=n3Vw5SMbMCWW1YGG6lnTfrwndNQ8B_R4Vw-BN7LkqpA=', '2024-03-13 04:12:27.000000'),
(6, 'about', 'box2_video', 'https://youtu.be/Lpz98bCaE_A?si=IHkgCpFrBrP56pFm', '2024-03-13 04:19:31.000000'),
(7, 'about', 'clients', '500', '2024-03-13 04:21:48.000000'),
(8, 'about', 'projects', '600', '2024-03-13 04:24:03.000000'),
(9, 'about', 'hours', '500', '2024-03-13 04:25:35.000000'),
(10, 'about', 'box3_title', 'Call To Coding', '2024-03-13 04:35:24.000000'),
(11, 'about', 'box3_btn_link', '#team', '2024-03-13 04:40:52.000000'),
(12, 'about', 'box3_video', 'https://www.youtube.com/watch?v=LXb3EKWsInQ', '2024-03-13 04:43:48.000000'),
(13, 'service', 'service_title', 'My Service', '2024-03-13 13:26:33.000000'),
(14, 'service', 'service_box1_logo', 'bi bi-activity', '2024-03-13 13:27:41.000000'),
(15, 'service', 'service_box1_title', 'Nesciunt Mete', '2024-03-13 13:28:56.000000'),
(16, 'service', 'service_box2_logo', 'bi bi-broadcast', '2024-03-13 13:37:37.000000'),
(17, 'service', 'service_box2_title', 'Eosle Commodi', '2024-03-13 13:43:32.000000'),
(18, 'service', 'service_box3_logo', 'bi bi-easel', '2024-03-13 13:47:49.245602'),
(19, 'service', 'service_box3_title', 'Ledo Markt', '2024-03-13 13:47:57.000000'),
(20, 'service', 'service_box4_logo', 'bi bi-bounding-box-circles', '2024-03-13 13:50:11.000000'),
(21, 'service', 'service_box4_title', 'Asperiores Commodit', '2024-03-13 13:50:52.000000'),
(22, 'service', 'service_box5_logo', 'bi bi-calendar4-week', '2024-03-13 13:53:28.000000'),
(23, 'service', 'service_box5_title', 'Velit Doloremque', '2024-03-13 13:54:07.000000'),
(24, 'service', 'service_box6_logo', 'bi bi-chat-square-text', '2024-03-13 13:56:12.000000'),
(25, 'service', 'service_box6_title', 'Dolori Architecto', '2024-03-13 13:56:55.000000'),
(26, 'test', 'test_title', 'Testimonial', '0000-00-00 00:00:00.000000'),
(27, 'test', 'test_box1_img', 'assets/img/testimonials/testimonials-1.jpg', '2024-03-13 14:19:02.000000'),
(28, 'test', 'test_box1_name', 'Saul Goodman', '2024-03-13 14:21:05.000000'),
(29, 'test', 'test_box1_job', 'Ceo & Founder', '2024-03-13 14:21:44.000000'),
(30, 'test', 'test_box1_desc', 'Proin iaculis purus consequat sem cure digni ssim donec porttitora entum suscipit rhoncus. Accusantium quam, ultricies eget id, aliquam eget nibh et. Maecen aliquam, risus at semper.', '2024-03-13 14:22:39.000000'),
(31, 'test', 'test_box2_img', 'assets/img/testimonials/testimonials-2.jpg', '2024-03-13 14:28:02.000000'),
(32, 'test', 'test_box2_name', 'Sara Wilsson', '2024-03-13 14:28:45.000000'),
(33, 'test', 'test_box2_job', 'Designer', '2024-03-13 14:29:26.000000'),
(34, 'test', 'test_box2_desc', 'Export tempor illum tamen malis malis eram quae irure esse labore quem cillum quid cillum eram malis quorum velit fore eram velit sunt aliqua noster fugiat irure amet legam anim culpa.', '2024-03-13 14:29:53.000000'),
(35, 'test', 'test_box3_img', 'assets/img/testimonials/testimonials-3.jpg', '2024-03-13 14:32:14.000000'),
(36, 'test', 'test_box3_name', 'Jena Karlis', '2024-03-13 14:32:52.000000'),
(37, 'test', 'test_box3_job', 'Store Owner', '2024-03-13 14:33:23.000000'),
(38, 'test', 'test_box3_desc', 'Enim nisi quem export duis labore cillum quae magna enim sint quorum nulla quem veniam duis minim tempor labore quem eram duis noster aute amet eram fore quis sint minim.', '2024-03-13 14:33:53.000000'),
(39, 'test', 'test_box4_img', 'assets/img/testimonials/testimonials-4.jpg', '2024-03-13 14:35:29.000000'),
(40, 'test', 'test_box4_name', 'Matt Brandon', '2024-03-13 14:36:26.000000'),
(41, 'test', 'test_box4_job', 'Freelancer', '2024-03-13 14:36:51.000000'),
(42, 'test', 'test_box4_desc', 'Fugiat enim eram quae cillum dolore dolor amet nulla culpa multos export minim fugiat minim velit minim dolor enim duis veniam ipsum anim magna sunt elit fore quem dolore.', '2024-03-13 14:37:15.000000'),
(43, 'test', 'test_box5_img', 'assets/img/testimonials/testimonials-5.jpg', '2024-03-13 14:39:48.000000'),
(44, 'test', 'test_box5_name', 'John Larson', '2024-03-13 14:40:08.000000'),
(45, 'test', 'test_box5_job', 'Entrepreneur', '2024-03-13 14:40:38.000000'),
(46, 'test', 'test_box5_desc', 'Quis quorum aliqua sint quem legam fore sunt eram irure aliqua veniam tempor noster veniam enim culpa labore duis sunt culpa nulla illum cillum fugiat legam esse veniam culpa fore.', '2024-03-13 14:41:15.000000'),
(47, 'port', 'port_title', 'My Portfolio', '2024-03-14 03:30:46.000000'),
(48, 'port', 'port_all', 'All', '2024-03-14 03:32:14.000000'),
(49, 'port', 'port_app', 'My App', '2024-03-14 03:33:09.000000'),
(50, 'port', 'port_product', 'My Products', '2024-03-14 03:36:25.000000'),
(51, 'port', 'port_brand', 'My Branding', '2024-03-14 03:37:38.000000'),
(52, 'port', 'port_books', 'My Books', '2024-03-14 03:38:05.000000'),
(53, 'port', 'port_app_box1_img', 'assets/img/portfolio/app-1.jpg', '2024-03-14 03:44:06.000000'),
(54, 'port', 'port_app_box1_title', 'Weather app', '2024-03-14 04:10:36.247694'),
(55, 'port', 'port_product_box1_img', 'assets/img/portfolio/product-1.jpg', '2024-03-14 03:47:38.000000'),
(56, 'port', 'port_product_box1_title', 'Smart Watch', '2024-03-14 03:48:21.000000'),
(57, 'port', 'port_brand_box1_img', 'assets/img/portfolio/branding-1.jpg', '2024-03-14 03:49:43.000000'),
(58, 'port', 'port_brand_box1_title', 'Cosmetic Branding', '2024-03-14 03:58:10.000000'),
(59, 'port', 'port_books_box1_img', 'assets/img/portfolio/books-1.jpg', '2024-03-14 03:58:51.000000'),
(60, 'port', 'port_books_box1_title', 'History', '2024-03-14 03:59:47.000000'),
(61, 'port', 'port_box2_app_img', 'assets/img/portfolio/app-2.jpg', '2024-03-14 04:12:45.000000'),
(62, 'port', 'port_box2_app_title', 'Wallet App', '2024-03-14 04:13:24.000000'),
(63, 'port', 'port_box2_product_img', 'assets/img/portfolio/product-2.jpg', '2024-03-14 04:14:17.000000'),
(64, 'port', 'port_box2_product_title', 'Accessories', '2024-03-14 04:15:17.000000'),
(65, 'port', 'port_box2_brand_img', 'assets/img/portfolio/branding-2.jpg', '2024-03-14 04:16:18.000000'),
(66, 'port', 'port_box2_brand_title', 'Cosmetic Branding', '2024-03-14 04:16:51.000000'),
(67, 'port', 'port_box2_books_img', 'assets/img/portfolio/books-2.jpg', '2024-03-14 04:17:54.000000'),
(68, 'port', 'port_box2_books_title', 'LITTLE BLACK BOOK', '2024-03-14 04:18:39.000000'),
(69, 'port', 'port_box3_app_img', 'assets/img/portfolio/app-3.jpg', '2024-03-14 04:26:09.000000'),
(70, 'port', 'port_box3_app_title', 'Classic App', '0000-00-00 00:00:00.000000'),
(71, 'port', 'port_box3_product_img', 'assets/img/portfolio/product-3.jpg', '2024-03-14 04:27:22.000000'),
(72, 'port', 'port_box3_product_title', 'Metal Wall Lamp', '2024-03-14 04:28:14.000000'),
(73, 'port', 'port_box3_brand_img', 'assets/img/portfolio/branding-3.jpg', '2024-03-14 04:29:17.000000'),
(74, 'port', 'port_box3_brand_title', 'RESILIENCE Protein Powder', '2024-03-14 04:29:53.000000'),
(75, 'port', 'port_box3_books_img', 'assets/img/portfolio/books-3.jpg', '2024-03-14 04:33:34.000000'),
(76, 'port', 'port_box3_books_title', 'LAGOM', '2024-03-14 04:34:09.000000'),
(77, 'port', 'port_detail_link', 'portfolio-details.php', '2024-03-14 04:39:56.000000'),
(78, 'team', 'team_title', 'Project Team', '2024-03-14 04:43:58.000000'),
(79, 'team', 'team_box1_img', 'assets/img/team/team-1.jpg', '2024-03-14 04:53:59.000000'),
(80, 'team', 'team_box1_name', 'Walter White', '2024-03-14 04:55:13.000000'),
(81, 'team', 'team_box1_job', 'Web Development', '2024-03-14 04:55:42.000000'),
(82, 'team', 'team_box2_img', 'assets/img/team/team-2.jpg', '2024-03-14 04:56:40.000000'),
(83, 'team', 'team_box2_name', 'Sarah Jhinson', '2024-03-14 04:57:23.000000'),
(84, 'team', 'team_box2_job', 'Marketing', '2024-03-14 04:58:07.000000'),
(85, 'team', 'team_box3_img', 'assets/img/team/team-3.jpg', '2024-03-14 04:59:08.000000'),
(86, 'team', 'team_box3_name', 'William Anderson', '2024-03-14 04:59:45.000000'),
(87, 'team', 'team_box3_job', 'Content Creater', '2024-03-14 05:00:09.000000'),
(88, 'team', 'team_box4_img', 'assets/img/team/team-4.jpg', '2024-03-14 05:01:35.000000'),
(89, 'team', 'team_box4_name', 'Amanda Jepson', '2024-03-14 05:02:11.000000'),
(90, 'team', 'team_box4_job', 'Accountant', '2024-03-14 05:02:46.000000'),
(91, 'price', 'price_title', 'Pricing', '2024-03-18 03:25:45.935139'),
(92, 'price', 'price_card1_title', 'Free Plan', '2024-03-18 03:29:37.000000'),
(93, 'price', 'price_card1_logo', 'bi bi-box', '2024-03-18 03:30:23.000000'),
(94, 'price', 'price_card1_price_currency', '&#8377;', '2024-03-18 03:31:02.000000'),
(95, 'price', 'price_card1_price', '0', '2024-03-18 03:35:26.000000'),
(96, 'price', 'price_card2_title', 'Business Plan', '2024-03-18 03:55:03.537942'),
(97, 'price', 'price_card2_logo', 'bi bi-airplane', '2024-03-18 03:57:03.763231'),
(98, 'price', 'price_card2_price_currency', '&#8377;', '2024-03-18 03:57:03.814761'),
(99, 'price', 'price_card2_price', '2,400', '2024-03-18 03:57:03.836614'),
(100, 'price', 'price_card3_title', 'Developer Plan', '2024-03-18 04:21:32.309668'),
(101, 'price', 'price_card3_logo', 'bi bi-airplane', '2024-03-18 04:21:32.377065'),
(102, 'price', 'price_card3_price_currency', '&#8377;', '2024-03-18 04:24:56.004288'),
(103, 'price', 'price_card3_price', '4,060', '2024-03-18 04:24:56.064867'),
(104, 'price', 'price_button_text', 'Buy Now', '2024-03-18 04:21:40.000000'),
(105, 'price', 'price_button_link', '#pricing', '2024-03-18 04:21:40.000000'),
(106, 'blog', 'blog_title', 'Recent Blogs', '2024-03-18 04:28:24.000000'),
(107, 'blog', 'blog_box1_img', 'assets/img/blog/blog-1.jpg', '2024-03-18 04:42:03.000000'),
(108, 'blog', 'blog_box1_category', 'Politics', '2024-03-18 04:42:03.000000'),
(109, 'blog', 'blog_box1_heading', 'Dolorum optio tempore voluptas dignissimos', '2024-03-18 04:42:03.000000'),
(110, 'blog', 'blog_box1_heading_link', 'blog-details.php', '2024-03-18 04:42:03.000000'),
(111, 'blog', 'blog_box1_author_img', 'assets/img/blog/blog-author.jpg', '2024-03-18 04:42:03.000000'),
(112, 'blog', 'blog_box1_author_name', 'Maria Doe', '2024-03-18 04:42:03.000000'),
(113, 'blog', 'blog_box1_date', 'Jan 1, 2022', '2024-03-18 04:42:03.000000'),
(114, 'blog', 'blog_box2_img', 'assets/img/blog/blog-2.jpg', '2024-03-18 04:45:42.000000'),
(115, 'blog', 'blog_box2_category', 'Sports', '2024-03-18 04:45:42.000000'),
(116, 'blog', 'blog_box2_heading', 'Nisi magni odit consequatur autem nulla dolorem', '2024-03-18 04:47:01.000000'),
(117, 'blog', 'blog_box2_heading_link', 'blog-details.php', '2024-03-18 04:47:01.000000'),
(118, 'blog', 'blog_box2_author_img', 'assets/img/blog/blog-author-2.jpg', '2024-03-18 04:47:01.000000'),
(119, 'blog', 'blog_box2_author_name', 'Allisa Mayer', '2024-03-18 04:47:01.000000'),
(120, 'blog', 'blog_box2_date', 'Jun 5, 2022', '2024-03-18 04:47:01.000000'),
(121, 'blog', 'blog_box3_img', 'assets/img/blog/blog-3.jpg', '2024-03-18 04:49:48.000000'),
(122, 'blog', 'blog_box3_category', 'Entertainment', '2024-03-18 04:49:48.000000'),
(123, 'blog', 'blog_box3_heading', 'Possimus soluta ut id suscipit ea ut in quo quia et soluta', '2024-03-18 04:49:48.000000'),
(124, 'blog', 'blog_box3_heading_link', 'blog-details.php', '2024-03-18 04:49:48.000000'),
(125, 'blog', 'blog_box3_author_img', 'assets/img/blog/blog-author-3.jpg', '2024-03-18 04:49:48.000000'),
(126, 'blog', 'blog_box3_author_name', 'Mark Dower', '2024-03-18 04:49:48.000000'),
(127, 'blog', 'blog_box3_date', 'Jun 22, 2022', '2024-03-18 04:49:48.000000'),
(128, 'contact', 'contact_heading', 'Contact', '2024-03-18 13:23:22.000000'),
(129, 'contact', 'contact_location_heading', 'Address:', '2024-03-18 14:00:49.000000'),
(130, 'contact', 'contact_location_logo', 'bi bi-geo-alt', '2024-03-18 14:00:49.000000'),
(131, 'contact', 'contact_location_address', '352/353, Silver Oak University,near Bhavik Publication,Gota, Ahmedabad, Gujarat 382481', '2024-03-18 14:00:49.000000'),
(132, 'contact', 'contact_email_heading', 'Email:', '2024-03-18 14:00:49.000000'),
(133, 'contact', 'contact_email_logo', 'bi bi-envelope', '2024-03-18 14:00:49.000000'),
(134, 'contact', 'contact_email', 'template@gmail.com', '2024-03-18 14:00:49.000000'),
(135, 'contact', 'contact_call_heading ', 'Phone Number:', '2024-03-18 14:00:49.000000'),
(136, 'contact', 'contact_call_logo', 'bi bi-phone', '2024-03-18 14:00:49.000000'),
(137, 'contact', 'contact_call_number', '+1 5589 55488 70', '2024-03-18 14:00:49.000000'),
(138, 'contact', 'contact_open_hours_heading', 'Timing:', '2024-03-18 14:00:49.000000'),
(139, 'contact', 'contact_open_hours_logo', 'bi bi-clock', '2024-03-18 14:00:49.000000'),
(140, 'contact', 'contact_open_time', 'Mon-Fri: 10AM - 9PM', '2024-03-18 14:00:49.000000');

-- --------------------------------------------------------

--
-- Table structure for table `impact_form`
--

CREATE TABLE `impact_form` (
  `id` int(200) NOT NULL,
  `name` varchar(50) NOT NULL,
  `email` text NOT NULL,
  `subject` text NOT NULL,
  `message` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `impact_form`
--

INSERT INTO `impact_form` (`id`, `name`, `email`, `subject`, `message`) VALUES
(1, 'Krish Khatikar', 'khatikarkrish18@gmail.com', 'developer', 'Any required for web developer.');

-- --------------------------------------------------------

--
-- Table structure for table `menubar`
--

CREATE TABLE `menubar` (
  `id` int(225) NOT NULL,
  `section_type` varchar(225) NOT NULL,
  `field_type` varchar(225) NOT NULL,
  `field_value` text NOT NULL,
  `create_date` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `menubar`
--

INSERT INTO `menubar` (`id`, `section_type`, `field_type`, `field_value`, `create_date`) VALUES
(1, 'menu', 'logo_text', 'Web', '2024-03-21 03:46:11'),
(2, 'menu', 'menu_home', 'Home', '2024-03-21 03:53:20'),
(3, 'menu', 'menu_home_link', '#hero', '2024-03-21 03:53:20'),
(4, 'menu', 'menu_about', 'About', '2024-03-21 03:53:20'),
(5, 'menu', 'menu_about_link', '#about', '2024-03-21 03:53:20'),
(6, 'menu', 'menu_services', 'Services', '2024-03-21 04:01:17'),
(7, 'menu', 'menu_services_link', '#services', '2024-03-21 03:53:20'),
(8, 'menu', 'menu_portfolio', 'Portfolio', '2024-03-21 03:53:20'),
(9, 'menu', 'menu_portfolio_link', '#portfolio', '2024-03-21 03:53:20'),
(10, 'menu', 'menu_team', 'Team', '2024-03-21 03:53:20'),
(11, 'menu', 'menu_team_link', '#team', '2024-03-21 03:53:20'),
(12, 'menu', 'menu_blog', 'Blog', '2024-03-21 03:53:20'),
(13, 'menu', 'menu_blog_link', 'blog.php', '2024-03-21 03:53:20'),
(14, 'menu', 'menu_contact', 'Contact', '2024-03-21 03:53:20'),
(15, 'menu', 'menu_contact_link', '#contact', '2024-03-21 03:53:20');

-- --------------------------------------------------------

--
-- Table structure for table `sliderbar`
--

CREATE TABLE `sliderbar` (
  `id` int(11) NOT NULL,
  `section_type` varchar(100) NOT NULL,
  `field_type` varchar(100) NOT NULL,
  `field_value` varchar(1000) NOT NULL,
  `create_date` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `sliderbar`
--

INSERT INTO `sliderbar` (`id`, `section_type`, `field_type`, `field_value`, `create_date`) VALUES
(1, 'slider', 'slider_title', 'Welcome, My Name is Krish', '2024-03-16 14:50:32'),
(2, 'slider', 'slider_desc', 'Hello, I Am a Frontend Developer.', '2024-03-16 14:35:44'),
(3, 'slider', 'button_text', 'Click Me', '2024-03-16 14:36:28'),
(4, 'slider', 'button_link', '#about', '2024-03-16 14:39:57'),
(5, 'slider', 'video_text', 'Visit Video', '2024-03-16 14:40:29'),
(6, 'slider', 'video_link', 'https://youtu.be/LXb3EKWsInQ?si=lA_tdwZcNuuUHTGX', '2024-03-16 14:41:16');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `admin`
--
ALTER TABLE `admin`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `impact_form`
--
ALTER TABLE `impact_form`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `sliderbar`
--
ALTER TABLE `sliderbar`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `admin`
--
ALTER TABLE `admin`
  MODIFY `id` int(225) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `impact_form`
--
ALTER TABLE `impact_form`
  MODIFY `id` int(200) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `sliderbar`
--
ALTER TABLE `sliderbar`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
