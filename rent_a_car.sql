-- phpMyAdmin SQL Dump
-- version 4.9.5
-- https://www.phpmyadmin.net/
--
-- Host: localhost:3306
-- Generation Time: Apr 24, 2021 at 11:32 PM
-- Server version: 10.2.37-MariaDB-cll-lve
-- PHP Version: 7.3.27

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `rent_a_car`
--

-- --------------------------------------------------------

--
-- Table structure for table `bookings`
--

CREATE TABLE `bookings` (
  `booking_id` int(11) NOT NULL,
  `booking_car_name` varchar(100) CHARACTER SET utf8 NOT NULL,
  `booking_bookie_name` varchar(250) NOT NULL,
  `booking_bookie_phone` varchar(20) NOT NULL,
  `booking_pickup_location` varchar(250) NOT NULL,
  `booking_drop_location` varchar(250) NOT NULL,
  `booking_pickup_time` varchar(100) NOT NULL,
  `booking_drop_time` varchar(100) NOT NULL,
  `booking_pickup_date` varchar(100) NOT NULL,
  `booking_drop_date` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `carousel`
--

CREATE TABLE `carousel` (
  `carousel_id` int(11) NOT NULL,
  `carousel_title` varchar(250) NOT NULL,
  `carousel_subtitle` varchar(200) NOT NULL,
  `carousel_image` varchar(150) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `carousel`
--

INSERT INTO `carousel` (`carousel_id`, `carousel_title`, `carousel_subtitle`, `carousel_image`) VALUES
(1, 'EXPENSIVE TO ECONOMY CARS', 'Whatever is your requirements, we can help you.', 'toyota-hiace.png'),
(2, 'WELCOME TO HASIB TRAVELS.', 'MAKE TRIPS BETTER.', 'sedan2013.png');

-- --------------------------------------------------------

--
-- Table structure for table `car_rental`
--

CREATE TABLE `car_rental` (
  `car_rental_id` int(11) NOT NULL,
  `car_rental_item` varchar(200) NOT NULL,
  `car_rental_price` varchar(200) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `car_rental`
--

INSERT INTO `car_rental` (`car_rental_id`, `car_rental_item`, `car_rental_price`) VALUES
(1, 'Toyota Hiace', '7000'),
(2, 'Microbus Noah', '5500'),
(3, 'Sedan Car Premium', '5000'),
(4, 'Tourist Destination', '3000'),
(5, 'Airport Pick & Drop', '2000');

-- --------------------------------------------------------

--
-- Table structure for table `drivers`
--

CREATE TABLE `drivers` (
  `driver_id` int(11) NOT NULL,
  `driver_image` varchar(256) NOT NULL,
  `driver_name` varchar(100) NOT NULL,
  `driver_dob` varchar(30) NOT NULL,
  `driver_father` varchar(100) NOT NULL,
  `driver_licence` varchar(50) NOT NULL,
  `driver_blood_group` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `drivers`
--

INSERT INTO `drivers` (`driver_id`, `driver_image`, `driver_name`, `driver_dob`, `driver_father`, `driver_licence`, `driver_blood_group`) VALUES
(1, 'default-driver.jpg', 'MD MEZANUR ROHOMAN', '23 DECEMBER 1990', 'MD ABDUL MALAK', 'CG0023733L00009', 'A+'),
(2, 'default-driver.jpg', 'MD NAZIM UDDIN', '01 JAN 1983', 'MD KURBAN ALI', 'CG0118427L00008', 'B+'),
(3, 'default-driver.jpg', 'MD KORSEDUL ALAM KASEM', '18 DEC 1986', 'SALEH AHAMMED', 'CG0054688L00002', 'AB+'),
(4, 'default-driver.jpg', 'MD OBIDUL HOQUE', '01 JAN 1985', 'LATE MD MOTHAR TALUKDER', 'CG0005952L00004', 'B+'),
(5, 'default-driver.jpg', 'MD ASGAR HOSSAIN (SHURUJ)', '01 FEB 1990', 'MD BELAYAT HOSSAIN', 'CG0105978L00003', 'B+'),
(6, 'default-driver.jpg', 'MOHAMMED NORUL ABSAR', '10 MAR 1986', 'MOHAMMED MUNSI MEAH', 'CG0079275L00009', 'A+');

-- --------------------------------------------------------

--
-- Table structure for table `fleet`
--

CREATE TABLE `fleet` (
  `fleet_id` int(11) NOT NULL,
  `image` varchar(256) NOT NULL,
  `alt` varchar(256) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `fleet`
--

INSERT INTO `fleet` (`fleet_id`, `image`, `alt`) VALUES
(1, 'toyota-hiace-2015-wallpaper-3.jpg', 'toyota-hiace-2015'),
(2, '2018-toyota-hilux-main-1544096415.jpg', '2018-toyota-hilux-main'),
(3, '2019-toyota-lc-prado-main-1547126137.jpg', '2019-toyota-lc-prado-main'),
(4, 'haice-1.jpg', 'haice-1'),
(5, 'tn-1.jpg', 'tn-1'),
(6, 'Toyota-hiace.png', 'Toyota-hiace'),
(7, 'toyota-premio-right_600x300-1.jpg', 'toyota-premio');

-- --------------------------------------------------------

--
-- Table structure for table `mop_description`
--

CREATE TABLE `mop_description` (
  `mop_id` int(11) NOT NULL,
  `mop_description` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `mop_description`
--

INSERT INTO `mop_description` (`mop_id`, `mop_description`) VALUES
(1, 'To contribute to positive change and achieve our sustainability goals, we partner with many extraordinary organizations around the world. Their expertise enables us to do far more than we could alone, and their passion and talent inspire us. It is our pleasure to introduce you to a handful of the organizations whose accomplishments and commitments are representative of all the organizations we are fortunate to call our partners.');

-- --------------------------------------------------------

--
-- Table structure for table `partners`
--

CREATE TABLE `partners` (
  `partner_id` int(11) NOT NULL,
  `partner_image` varchar(200) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `partners`
--

INSERT INTO `partners` (`partner_id`, `partner_image`) VALUES
(1, 'ict1.jpg'),
(2, 'mtb1.jpg'),
(3, 'iwe.jpg'),
(4, 'ew1.jpg '),
(5, 'cpp-logo.gif');

-- --------------------------------------------------------

--
-- Table structure for table `reviews`
--

CREATE TABLE `reviews` (
  `review_id` int(11) NOT NULL,
  `review` text CHARACTER SET utf8 NOT NULL,
  `reviewer` text CHARACTER SET utf8 NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `reviews`
--

INSERT INTO `reviews` (`review_id`, `review`, `reviewer`) VALUES
(1, 'We were driving around the country our whole visit, and if we didn&#039;t have a dependable, clean car, it would have made for a completely different experience. The car was comfortable, had a wonderful sound system and many upgrades that you definitely don&#039;t see in most rentals- it was absolutely perfect. And new!', 'Afrida Tasnim, Manager, BRAC, Chittagong'),
(2, 'HASIB TRAVELS Car Hire personnel were extremely friendly, helpful and prompt with their service. We were so pleased with our vehicles, which we took on their advice. They also helped us with other general questions we had. We couldn&#039;t have been more pleased, and highly recommend &quot;HASIB TRAVELS Car Hire&quot;.                                                                                   ', 'Ahsan Habib Tuhin, Journalist, Dhaka.'),
(3, 'We shopped around and used many different sites, but the U.S. News Best Price Program was by far the easiest and least time-consuming way to get the best deal on our new pickup.', 'Mizanur Rashid Chowdhury, National Ideal School and College.');

-- --------------------------------------------------------

--
-- Table structure for table `services`
--

CREATE TABLE `services` (
  `service_id` int(11) NOT NULL,
  `service_title` varchar(250) NOT NULL,
  `service_image` varchar(250) NOT NULL,
  `service_description` text CHARACTER SET utf8 NOT NULL,
  `service_link` varchar(200) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `services`
--

INSERT INTO `services` (`service_id`, `service_title`, `service_image`, `service_description`, `service_link`) VALUES
(1, 'Regular Packages', 'clock_cal.jpg', 'HASIB TRAVELS Car Hire is one of the leading car rental service provider in Bangladesh. We provide professional car hire services in Bangladesh. From expensive to economy cars ? whatever is your requirements, we can help you. We provide car rental service regularly in big projects, embassies, and big companies in Bangladesh.', ''),
(2, 'Airport Pick', 'airport-pick_and_drop.jpg', 'Whether you?re flying for business or pleasure, getting a car at the airport is quick and easy with HASIB TRAVELS. Simply take a ride from your airport to the destination with help of HASIB TRAVELS Car Hire. Choose from a great selection of vehicles to cater to your individual needs. pick up your car and you?re on your way!', ''),
(4, 'Monthly Subscription', 'ips.png', ' Excellent service with best royalty.', ''),
(5, 'Corporate Service ', 'crp.png', ' We do offer fleet management services as well as car hiring to the corporate clients. Just hand over the responsibility of your companyâ€™s transportation needs and our dedicated team will handle it in properly managed way. ', ''),
(9, 'Tourist Destination Packages ', 'tgl.jpg', ' Are you planning a trip to tourist spot? Now, you can simply reserve your car. Hiring our car is therefore a brilliant way of sightseeing at your own pace and allows you the freedom to go wherever you please. No matter whether it is a peak period or an off season to rent, your car reserved will be better secured. More favorable insurances and GPS facilities would be available at different destinations.', '');

-- --------------------------------------------------------

--
-- Table structure for table `socials`
--

CREATE TABLE `socials` (
  `social_id` int(11) NOT NULL,
  `facebook` varchar(256) NOT NULL,
  `twitter` varchar(256) NOT NULL,
  `google` varchar(256) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `socials`
--

INSERT INTO `socials` (`social_id`, `facebook`, `twitter`, `google`) VALUES
(1, '#', '#', '#');

-- --------------------------------------------------------

--
-- Table structure for table `user`
--

CREATE TABLE `user` (
  `user_id` int(11) NOT NULL,
  `user_name` text NOT NULL,
  `user_image` varchar(200) NOT NULL,
  `user_pass` text NOT NULL,
  `user_email` text NOT NULL,
  `user_email_token` text NOT NULL,
  `user_email_ver` int(11) NOT NULL,
  `user_pass_recovered` text NOT NULL,
  `user_join_date` text NOT NULL,
  `user_about` text NOT NULL,
  `user_tagline` text NOT NULL,
  `user_skill` text NOT NULL,
  `user_location` text NOT NULL,
  `user_city` text NOT NULL,
  `user_region` int(11) NOT NULL,
  `user_phone` text NOT NULL,
  `user_phone_ver` varchar(30) NOT NULL,
  `user_type` text NOT NULL,
  `user_verified` int(11) NOT NULL,
  `user_level` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `user`
--

INSERT INTO `user` (`user_id`, `user_name`, `user_image`, `user_pass`, `user_email`, `user_email_token`, `user_email_ver`, `user_pass_recovered`, `user_join_date`, `user_about`, `user_tagline`, `user_skill`, `user_location`, `user_city`, `user_region`, `user_phone`, `user_phone_ver`, `user_type`, `user_verified`, `user_level`) VALUES
(1, 'Mr Admin', 'images/user.png', '123456', '', '', 1, '', '', '', '', '', '', '', 1, '01521310261', '', 'admin', 1, 1);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `bookings`
--
ALTER TABLE `bookings`
  ADD PRIMARY KEY (`booking_id`);

--
-- Indexes for table `carousel`
--
ALTER TABLE `carousel`
  ADD PRIMARY KEY (`carousel_id`);

--
-- Indexes for table `car_rental`
--
ALTER TABLE `car_rental`
  ADD PRIMARY KEY (`car_rental_id`);

--
-- Indexes for table `drivers`
--
ALTER TABLE `drivers`
  ADD PRIMARY KEY (`driver_id`);

--
-- Indexes for table `fleet`
--
ALTER TABLE `fleet`
  ADD PRIMARY KEY (`fleet_id`);

--
-- Indexes for table `mop_description`
--
ALTER TABLE `mop_description`
  ADD PRIMARY KEY (`mop_id`);

--
-- Indexes for table `partners`
--
ALTER TABLE `partners`
  ADD PRIMARY KEY (`partner_id`);

--
-- Indexes for table `reviews`
--
ALTER TABLE `reviews`
  ADD PRIMARY KEY (`review_id`);

--
-- Indexes for table `services`
--
ALTER TABLE `services`
  ADD PRIMARY KEY (`service_id`);

--
-- Indexes for table `socials`
--
ALTER TABLE `socials`
  ADD PRIMARY KEY (`social_id`);

--
-- Indexes for table `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`user_id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `bookings`
--
ALTER TABLE `bookings`
  MODIFY `booking_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=35;

--
-- AUTO_INCREMENT for table `carousel`
--
ALTER TABLE `carousel`
  MODIFY `carousel_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `car_rental`
--
ALTER TABLE `car_rental`
  MODIFY `car_rental_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;

--
-- AUTO_INCREMENT for table `drivers`
--
ALTER TABLE `drivers`
  MODIFY `driver_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;

--
-- AUTO_INCREMENT for table `fleet`
--
ALTER TABLE `fleet`
  MODIFY `fleet_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT for table `mop_description`
--
ALTER TABLE `mop_description`
  MODIFY `mop_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `partners`
--
ALTER TABLE `partners`
  MODIFY `partner_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT for table `reviews`
--
ALTER TABLE `reviews`
  MODIFY `review_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `services`
--
ALTER TABLE `services`
  MODIFY `service_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;

--
-- AUTO_INCREMENT for table `socials`
--
ALTER TABLE `socials`
  MODIFY `social_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `user`
--
ALTER TABLE `user`
  MODIFY `user_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
