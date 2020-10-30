CREATE TABLE `TinhTV_Admin` (
  `id` int(5) NOT NULL,
  `username` varchar(150) NOT NULL,
  `password` varchar(150) NOT NULL,
  `fullname` varchar(150) NOT NULL,
  `img_dd` varchar(100) NOT NULL,
  `gender` varchar(10) NOT NULL,
  `email` varchar(100) NOT NULL,
  `phone` varchar(11) NOT NULL,
  `department` varchar(150) NOT NULL,
  `DoB` varchar(15) NOT NULL,
  `permission` varchar(1) NOT NULL,
  `note` varchar(200) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8;

--
-- Dumping data for table `TinhTV_Admin`
--

INSERT INTO `TinhTV_Admin` (`id`, `username`, `password`, `fullname`, `img_dd`, `gender`, `email`, `phone`, `department`, `DoB`, `permission`, `note`) VALUES
(1, 'admin', '191020', 'Truong Van Tinh', 'AnhT19.jpg', 'Male', 'Tinhtvbhaf180186@fpt.edu.vn', '0974959028', 'Admin', '19-10-2000', '1', 'TRUONG VAN TINH IS ADMIN');

-- --------------------------------------------------------