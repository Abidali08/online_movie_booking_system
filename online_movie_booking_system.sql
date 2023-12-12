-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Mar 03, 2023 at 04:45 PM
-- Server version: 10.4.24-MariaDB
-- PHP Version: 8.1.6

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `online_movie_booking_system`
--

-- --------------------------------------------------------

--
-- Table structure for table `addmovie`
--

CREATE TABLE `addmovie` (
  `movie_id` int(11) NOT NULL,
  `movie_name` varchar(200) NOT NULL,
  `movie_cin_id` int(11) NOT NULL,
  `movie_genre_id` int(11) NOT NULL,
  `movie_indus_id` int(11) NOT NULL,
  `movie_lang_id` int(11) NOT NULL,
  `movie_date_id` int(11) NOT NULL,
  `movie_img` varchar(200) NOT NULL,
  `movie_trl_url` varchar(200) NOT NULL,
  `movie_duration` varchar(200) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `addmovie`
--

INSERT INTO `addmovie` (`movie_id`, `movie_name`, `movie_cin_id`, `movie_genre_id`, `movie_indus_id`, `movie_lang_id`, `movie_date_id`, `movie_img`, `movie_trl_url`, `movie_duration`) VALUES
(6, 'AVATAR: THE WAY OF WATER', 3, 6, 2, 1, 4, '1669887907-01-12-2022-1.jpg', 'https://www.youtube.com/embed/d9MyW72ELq0', '1PM to 2:15 PM'),
(7, 'THE LEGEND OF MAULA JATT', 3, 9, 4, 4, 4, '1665386521-10-10-2022-1.jpg', 'https://www.youtube.com/embed/pEWqOAcYgpQ', '9 PM to 11:30 PM'),
(8, 'BLACK ADAM', 8, 11, 2, 1, 10, 'TAyMDU@._V1_QL75.jpg', 'https://www.youtube.com/embed/X0tOpBuYasI', '3 PM to 5 PM'),
(9, 'OPERATION FORTUNE RUSE DE GUERRE', 7, 9, 2, 1, 23, '1672842750-04-01-2023-1.jpg', 'https://www.youtube.com/embed/W8Sqk1GcqxY', '3 PM TO 5 PM '),
(10, 'BLACK PANTHER: WAKANDA FOREVER', 5, 6, 2, 1, 22, '1665047293-06-10-2022-1.jpg', 'https://www.youtube.com/embed/_Z3QKkl1WyM', '7:25 PM to 9:10 PM'),
(11, 'PREY FOR THE DEVIL (PG)', 6, 8, 2, 1, 20, '1664539670-30-09-2022-1.jpg', 'https://www.youtube.com/embed/jO80S-bYUDs', '10:40 PM PM to 12:00 AM'),
(12, 'LYLE, LYLE, CROCODILE', 5, 1, 2, 1, 19, '1665398838-10-10-2022-1.jpg', 'https://www.youtube.com/embed/kSHecHtkXAc', '1:00 PM to 2:15 PM'),
(13, 'ZARRAR', 7, 3, 4, 2, 21, '1665570167-12-10-2022-1.jpg', 'https://www.youtube.com/embed/Cfm_fjT0L9o', '5:30 PM to 7:25 PM'),
(14, 'TICH BUTTON', 8, 6, 4, 2, 15, '1668687567-17-11-2022-1.jpg', 'https://www.youtube.com/embed/wnuNBXsV0t8', '9:10 PM PM to 10:40 PM'),
(15, 'Dangal', 9, 4, 3, 3, 15, 'dangal-et00033292-17-04-2017-17-54-21.png', 'https://www.youtube.com/embed/x_7YlGv9u1g', '7:25 PM to 9:10 PM'),
(16, 'BAJRANGI BHAIJAAN', 10, 6, 3, 3, 11, 'bajrangi-bhaijaan-et00025384-23-11-2017-08-20-17.jpg', 'https://www.youtube.com/embed/4nwAra0mz_Q', '2:15 PM to 4:00 PM');

-- --------------------------------------------------------

--
-- Table structure for table `admin_login`
--

CREATE TABLE `admin_login` (
  `id` int(11) NOT NULL,
  `email` varchar(100) NOT NULL,
  `password` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `admin_login`
--

INSERT INTO `admin_login` (`id`, `email`, `password`) VALUES
(2, 'danishkhan@gmail.com', '12345');

-- --------------------------------------------------------

--
-- Table structure for table `booking_details`
--

CREATE TABLE `booking_details` (
  `booking_id` int(11) NOT NULL,
  `user_name` varchar(200) NOT NULL,
  `user_email` varchar(200) NOT NULL,
  `user_movie_dur` varchar(200) NOT NULL,
  `user_movie_cinema` varchar(200) NOT NULL,
  `user_movie_name` varchar(200) NOT NULL,
  `user_date` varchar(200) NOT NULL,
  `user_price` varchar(200) NOT NULL,
  `user_seat` varchar(200) NOT NULL,
  `user_card` varchar(200) NOT NULL,
  `user_movie_img` varchar(200) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `booking_details`
--

INSERT INTO `booking_details` (`booking_id`, `user_name`, `user_email`, `user_movie_dur`, `user_movie_cinema`, `user_movie_name`, `user_date`, `user_price`, `user_seat`, `user_card`, `user_movie_img`) VALUES
(9, 'Demo', 'Demo@outlook.com', '1:00 PM to 2:15 PM', 'Atrium Cinemas', 'LYLE, LYLE, CROCODILE', '03-Feb-Friday', 'Economy : 1100', '6', '2121-2121-2121-2121', '1665398838-10-10-2022-1.jpg');

-- --------------------------------------------------------

--
-- Table structure for table `cinema`
--

CREATE TABLE `cinema` (
  `cin_id` int(11) NOT NULL,
  `cinema_name` varchar(200) NOT NULL,
  `cinema_location` varchar(200) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `cinema`
--

INSERT INTO `cinema` (`cin_id`, `cinema_name`, `cinema_location`) VALUES
(3, 'Nueplex Cinemas Askari', 'Rashid Minhas Road, Askari 4 - Karachi 75290'),
(5, 'Atrium Cinemas', 'MBL Panorama Karachi Cantonment, Karachi'),
(6, 'Nueplex Cinemas DHA', 'The Place, Khayaban-e-Shaheen, DHA Karachi Phase VIII'),
(7, 'The Arena Karachi', ' Bahria Town Tower, Tariq Rd, P.E.C.H.S Block 2'),
(8, 'Capri Cinema', 'M.A Jinnah Rd, Central Jacob Lines Karachi'),
(9, 'Cinepax Cinema', '5 Khayaban-e-Jami, Block 9 Clifton, Karachi'),
(10, 'Raiha Cinegold Plex ', 'Midway Commercial B, Phase 1 Bahria Town North Karachi');

-- --------------------------------------------------------

--
-- Table structure for table `date`
--

CREATE TABLE `date` (
  `date_id` int(11) NOT NULL,
  `date_name` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `date`
--

INSERT INTO `date` (`date_id`, `date_name`) VALUES
(3, '2023-01-24'),
(4, '2023-01-25'),
(6, '2023-01-26'),
(7, '2023-01-27'),
(8, '2023-01-28'),
(9, '2023-01-29'),
(10, '2023-01-30'),
(11, '2023-01-31'),
(14, '2023-02-01'),
(15, '2023-02-02'),
(16, '2023-02-03'),
(17, '2023-02-04'),
(19, '2023-02-05'),
(20, '2023-02-06'),
(21, '2023-02-07'),
(22, '2023-02-08'),
(23, '2023-02-09'),
(24, '2023-02-10');

-- --------------------------------------------------------

--
-- Table structure for table `genre`
--

CREATE TABLE `genre` (
  `gen_id` int(11) NOT NULL,
  `genre_name` varchar(200) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `genre`
--

INSERT INTO `genre` (`gen_id`, `genre_name`) VALUES
(1, 'Animation'),
(3, 'Drama'),
(4, 'Documentary'),
(5, 'Animals'),
(6, 'Entertainment'),
(7, 'Politics'),
(8, 'Horror'),
(9, 'Action/Adventure'),
(10, 'Kids'),
(11, 'Science Fiction'),
(12, 'Mystery'),
(13, 'Travel'),
(14, 'Education'),
(15, 'Biography'),
(16, 'Science'),
(17, 'Comedy');

-- --------------------------------------------------------

--
-- Table structure for table `industry`
--

CREATE TABLE `industry` (
  `indus_id` int(11) NOT NULL,
  `industry_name` varchar(200) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `industry`
--

INSERT INTO `industry` (`indus_id`, `industry_name`) VALUES
(2, 'HollyWood'),
(3, 'BollyWood'),
(4, 'LollyWood'),
(5, 'Tamil'),
(6, 'Chinese'),
(7, 'Portuguese');

-- --------------------------------------------------------

--
-- Table structure for table `language`
--

CREATE TABLE `language` (
  `lang_id` int(11) NOT NULL,
  `language_name` varchar(200) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `language`
--

INSERT INTO `language` (`lang_id`, `language_name`) VALUES
(1, 'English'),
(2, 'Urdu'),
(3, 'Hindi'),
(4, 'Punjabi'),
(5, 'Russian'),
(7, 'Portuguese');

-- --------------------------------------------------------

--
-- Table structure for table `movie_price`
--

CREATE TABLE `movie_price` (
  `price_id` int(11) NOT NULL,
  `movie_name_price` varchar(200) NOT NULL,
  `economy` varchar(200) NOT NULL,
  `business` varchar(200) NOT NULL,
  `first_class` varchar(200) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `movie_price`
--

INSERT INTO `movie_price` (`price_id`, `movie_name_price`, `economy`, `business`, `first_class`) VALUES
(2, 'AVATAR: THE WAY OF WATER', '1100', '1500', '2000'),
(3, 'THE LEGEND OF MAULA JATT', '1200', '1600', '2100'),
(4, 'BLACK ADAM', '1200', '1600', '2100'),
(5, 'OPERATION FORTUNE RUSE DE GUERRE', '1000', '1500', '2000'),
(6, 'BLACK PANTHER: WAKANDA FOREVER', '1200', '1400', '1900'),
(7, 'PREY FOR THE DEVIL (PG)', '1500', '2000', '2500'),
(8, 'LYLE, LYLE, CROCODILE', '1100', '1300', '1800'),
(9, 'ZARRAR', '1000', '1500', '2000'),
(10, 'TICH BUTTON', '1000', '1500', '2000'),
(11, 'Dangal', '1200', '1400', '1800'),
(12, 'BAJRANGI BHAIJAAN', '1200', '1500', '1900');

-- --------------------------------------------------------

--
-- Table structure for table `user_reg_login`
--

CREATE TABLE `user_reg_login` (
  `id` int(11) NOT NULL,
  `name` varchar(100) NOT NULL,
  `email` varchar(100) NOT NULL,
  `password` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `user_reg_login`
--

INSERT INTO `user_reg_login` (`id`, `name`, `email`, `password`) VALUES
(15, 'Demo', 'Demo@outlook.com', '123');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `addmovie`
--
ALTER TABLE `addmovie`
  ADD PRIMARY KEY (`movie_id`),
  ADD KEY `movie_cin_id` (`movie_cin_id`),
  ADD KEY `movie_date_id` (`movie_date_id`),
  ADD KEY `movie_genre_id` (`movie_genre_id`),
  ADD KEY `movie_indus_id` (`movie_indus_id`),
  ADD KEY `movie_lang_id` (`movie_lang_id`);

--
-- Indexes for table `admin_login`
--
ALTER TABLE `admin_login`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `booking_details`
--
ALTER TABLE `booking_details`
  ADD PRIMARY KEY (`booking_id`);

--
-- Indexes for table `cinema`
--
ALTER TABLE `cinema`
  ADD PRIMARY KEY (`cin_id`);

--
-- Indexes for table `date`
--
ALTER TABLE `date`
  ADD PRIMARY KEY (`date_id`);

--
-- Indexes for table `genre`
--
ALTER TABLE `genre`
  ADD PRIMARY KEY (`gen_id`);

--
-- Indexes for table `industry`
--
ALTER TABLE `industry`
  ADD PRIMARY KEY (`indus_id`);

--
-- Indexes for table `language`
--
ALTER TABLE `language`
  ADD PRIMARY KEY (`lang_id`);

--
-- Indexes for table `movie_price`
--
ALTER TABLE `movie_price`
  ADD PRIMARY KEY (`price_id`);

--
-- Indexes for table `user_reg_login`
--
ALTER TABLE `user_reg_login`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `addmovie`
--
ALTER TABLE `addmovie`
  MODIFY `movie_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=17;

--
-- AUTO_INCREMENT for table `admin_login`
--
ALTER TABLE `admin_login`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `booking_details`
--
ALTER TABLE `booking_details`
  MODIFY `booking_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;

--
-- AUTO_INCREMENT for table `cinema`
--
ALTER TABLE `cinema`
  MODIFY `cin_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- AUTO_INCREMENT for table `date`
--
ALTER TABLE `date`
  MODIFY `date_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=25;

--
-- AUTO_INCREMENT for table `genre`
--
ALTER TABLE `genre`
  MODIFY `gen_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=18;

--
-- AUTO_INCREMENT for table `industry`
--
ALTER TABLE `industry`
  MODIFY `indus_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT for table `language`
--
ALTER TABLE `language`
  MODIFY `lang_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT for table `movie_price`
--
ALTER TABLE `movie_price`
  MODIFY `price_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;

--
-- AUTO_INCREMENT for table `user_reg_login`
--
ALTER TABLE `user_reg_login`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=16;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `addmovie`
--
ALTER TABLE `addmovie`
  ADD CONSTRAINT `addmovie_ibfk_1` FOREIGN KEY (`movie_cin_id`) REFERENCES `cinema` (`cin_id`),
  ADD CONSTRAINT `addmovie_ibfk_2` FOREIGN KEY (`movie_date_id`) REFERENCES `date` (`date_id`),
  ADD CONSTRAINT `addmovie_ibfk_3` FOREIGN KEY (`movie_genre_id`) REFERENCES `genre` (`gen_id`),
  ADD CONSTRAINT `addmovie_ibfk_4` FOREIGN KEY (`movie_indus_id`) REFERENCES `industry` (`indus_id`),
  ADD CONSTRAINT `addmovie_ibfk_5` FOREIGN KEY (`movie_lang_id`) REFERENCES `language` (`lang_id`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
