-- create table admin

CREATE TABLE `admin` (
  `SRN` int(11) NOT NULL AUTO_INCREMENT,
  `name` varchar(256) NOT NULL,
  `adminid` varchar(256) NOT NULL,
  `password` varchar(256) NOT NULL,
  PRIMARY KEY (`SRN`)
) ENGINE=InnoDB AUTO_INCREMENT=1 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- insert data into admin

INSERT INTO `admin` (`SRN`, `name`, `adminid`, `password`) VALUES (NULL, 'Yashpal Puri', 'yash@ss', 'yash1234');
INSERT INTO `admin` (`SRN`, `name`, `adminid`, `password`) VALUES (NULL, 'Vikram', 'vikram@ss', 'vikram1234');

-- create table complaint

CREATE TABLE `complaint` (
  `c_id` int(11) NOT NULL AUTO_INCREMENT,
  `uid` varchar(256) NOT NULL,
  `name` varchar(256) NOT NULL,
  `a_no` bigint(12) NOT NULL,
  `location` varchar(50) NOT NULL,
  `type_crime` varchar(50) NOT NULL,
  `d_o_c` date NOT NULL,
  `description` varchar(7000) NOT NULL,
  `status` varchar(256) NOT NULL DEFAULT 'PENDING',
  PRIMARY KEY (`c_id`)
) ENGINE=InnoDB AUTO_INCREMENT=1 DEFAULT CHARSET=latin1 COLLATE=latin1_swedish_ci;

-- create table user

CREATE TABLE `user` (
  `u_name` varchar(50) NOT NULL,
  `u_id` varchar(50) NOT NULL,
  `u_pass` varchar(50) NOT NULL,
  `u_addr` varchar(100) NOT NULL,
  `a_no` bigint(12) NOT NULL,
  `gen` varchar(15) NOT NULL,
  `mob` bigint(10) NOT NULL,
  PRIMARY KEY (`a_no`),
  UNIQUE KEY `u_id` (`u_id`),
  UNIQUE KEY `mob` (`mob`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1 COLLATE=latin1_swedish_ci;

-- insert data into user

INSERT INTO `user` (`u_name`, `u_id`, `u_pass`, `u_addr`, `a_no`, `gen`, `mob`) VALUES ('Ram Kumar', 'ram@gmail.com', 'ram', 'Faridkot', '885544779856', 'Male', '9854756258');
