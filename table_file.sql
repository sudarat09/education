-- phpMyAdmin SQL Dump
-- version 4.9.1
-- https://www.phpmyadmin.net/
--
-- Host: localhost
-- Generation Time: Mar 02, 2022 at 10:35 AM
-- Server version: 8.0.17
-- PHP Version: 7.3.10

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `table_file`
--

-- --------------------------------------------------------

--
-- Table structure for table `afile`
--

CREATE TABLE `afile` (
  `a_id` int(11) NOT NULL,
  `a_file` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `afile`
--

INSERT INTO `afile` (`a_id`, `a_file`) VALUES
(28, '621b69cba645f.pdf');

-- --------------------------------------------------------

--
-- Table structure for table `bfile`
--

CREATE TABLE `bfile` (
  `b_id` int(11) NOT NULL,
  `b_file` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `bfile`
--

INSERT INTO `bfile` (`b_id`, `b_file`) VALUES
(8, '621f4110f3627.png');

-- --------------------------------------------------------

--
-- Table structure for table `cfile`
--

CREATE TABLE `cfile` (
  `c_id` int(11) NOT NULL,
  `c_file` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `cfile`
--

INSERT INTO `cfile` (`c_id`, `c_file`) VALUES
(3, '621b7fb3e9769.doc');

-- --------------------------------------------------------

--
-- Table structure for table `dfile`
--

CREATE TABLE `dfile` (
  `d_id` int(11) NOT NULL,
  `d_file` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `dfile`
--

INSERT INTO `dfile` (`d_id`, `d_file`) VALUES
(2, '6216264e08d85.pdf');

-- --------------------------------------------------------

--
-- Table structure for table `efile`
--

CREATE TABLE `efile` (
  `e_id` int(11) NOT NULL,
  `e_file` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `efile`
--

INSERT INTO `efile` (`e_id`, `e_file`) VALUES
(3, '621632408d735.doc');

-- --------------------------------------------------------

--
-- Table structure for table `gfile`
--

CREATE TABLE `gfile` (
  `g_id` int(11) NOT NULL,
  `g_file` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `gfile`
--

INSERT INTO `gfile` (`g_id`, `g_file`) VALUES
(3, '621b8223ba601.pdf');

-- --------------------------------------------------------

--
-- Table structure for table `hfile`
--

CREATE TABLE `hfile` (
  `h_id` int(11) NOT NULL,
  `h_file` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `hfile`
--

INSERT INTO `hfile` (`h_id`, `h_file`) VALUES
(3, '621b89859c9fc.pdf');

-- --------------------------------------------------------

--
-- Table structure for table `ifile`
--

CREATE TABLE `ifile` (
  `i_id` int(11) NOT NULL,
  `i_file` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `ifile`
--

INSERT INTO `ifile` (`i_id`, `i_file`) VALUES
(3, '621b8b8502825.doc');

-- --------------------------------------------------------

--
-- Table structure for table `jfile`
--

CREATE TABLE `jfile` (
  `j_id` int(11) NOT NULL,
  `j_file` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `jfile`
--

INSERT INTO `jfile` (`j_id`, `j_file`) VALUES
(2, '621c9def236ad.doc');

-- --------------------------------------------------------

--
-- Table structure for table `kfile`
--

CREATE TABLE `kfile` (
  `k_id` int(11) NOT NULL,
  `k_file` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `kfile`
--

INSERT INTO `kfile` (`k_id`, `k_file`) VALUES
(2, '621c9f33a6d87.doc');

-- --------------------------------------------------------

--
-- Table structure for table `lfile`
--

CREATE TABLE `lfile` (
  `l_id` int(11) NOT NULL,
  `l_file` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `lfile`
--

INSERT INTO `lfile` (`l_id`, `l_file`) VALUES
(2, '621c9f4bd01bf.doc');

-- --------------------------------------------------------

--
-- Table structure for table `mfile`
--

CREATE TABLE `mfile` (
  `m_id` int(11) NOT NULL,
  `m_file` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `mfile`
--

INSERT INTO `mfile` (`m_id`, `m_file`) VALUES
(2, '621c9f5d12f3f.doc');

-- --------------------------------------------------------

--
-- Table structure for table `nfile`
--

CREATE TABLE `nfile` (
  `n_id` int(11) NOT NULL,
  `n_file` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `nfile`
--

INSERT INTO `nfile` (`n_id`, `n_file`) VALUES
(2, '621ca9dac1859.pdf');

-- --------------------------------------------------------

--
-- Table structure for table `ofile`
--

CREATE TABLE `ofile` (
  `o_id` int(11) NOT NULL,
  `o_file` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `ofile`
--

INSERT INTO `ofile` (`o_id`, `o_file`) VALUES
(2, '621ca9eb177ab.pdf');

-- --------------------------------------------------------

--
-- Table structure for table `pfile`
--

CREATE TABLE `pfile` (
  `p_id` int(11) NOT NULL,
  `p_file` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `pfile`
--

INSERT INTO `pfile` (`p_id`, `p_file`) VALUES
(5, '621ca9f6d3954.pdf');

-- --------------------------------------------------------

--
-- Table structure for table `qfile`
--

CREATE TABLE `qfile` (
  `q_id` int(11) NOT NULL,
  `q_file` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `qfile`
--

INSERT INTO `qfile` (`q_id`, `q_file`) VALUES
(3, '621caa05615f1.doc');

-- --------------------------------------------------------

--
-- Table structure for table `rfile`
--

CREATE TABLE `rfile` (
  `r_id` int(11) NOT NULL,
  `r_file` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `rfile`
--

INSERT INTO `rfile` (`r_id`, `r_file`) VALUES
(2, '621caa12b9ce5.doc');

-- --------------------------------------------------------

--
-- Table structure for table `sfile`
--

CREATE TABLE `sfile` (
  `s_id` int(11) NOT NULL,
  `s_file` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `sfile`
--

INSERT INTO `sfile` (`s_id`, `s_file`) VALUES
(2, '621caa1ec814d.pdf');

-- --------------------------------------------------------

--
-- Table structure for table `tfile`
--

CREATE TABLE `tfile` (
  `t_id` int(11) NOT NULL,
  `t_file` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `tfile`
--

INSERT INTO `tfile` (`t_id`, `t_file`) VALUES
(3, '621caa31cdc04.jpeg');

-- --------------------------------------------------------

--
-- Table structure for table `ufile`
--

CREATE TABLE `ufile` (
  `u_id` int(11) NOT NULL,
  `u_file` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `ufile`
--

INSERT INTO `ufile` (`u_id`, `u_file`) VALUES
(2, '621caa393770c.jpeg');

-- --------------------------------------------------------

--
-- Table structure for table `uploads`
--

CREATE TABLE `uploads` (
  `file_id` int(11) NOT NULL,
  `file_name` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `uploads`
--

INSERT INTO `uploads` (`file_id`, `file_name`) VALUES
(10, '621608d349318.png'),
(11, '62160a4273973.png'),
(12, '62160a8e592f7.png'),
(13, '62160a96b4dcb.pdf'),
(14, '62160e796ffc8.pdf'),
(15, '62160e7b3882d.pdf'),
(16, '62160ed6e81bc.pdf');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `afile`
--
ALTER TABLE `afile`
  ADD PRIMARY KEY (`a_id`);

--
-- Indexes for table `bfile`
--
ALTER TABLE `bfile`
  ADD PRIMARY KEY (`b_id`);

--
-- Indexes for table `cfile`
--
ALTER TABLE `cfile`
  ADD PRIMARY KEY (`c_id`);

--
-- Indexes for table `dfile`
--
ALTER TABLE `dfile`
  ADD PRIMARY KEY (`d_id`);

--
-- Indexes for table `efile`
--
ALTER TABLE `efile`
  ADD PRIMARY KEY (`e_id`);

--
-- Indexes for table `gfile`
--
ALTER TABLE `gfile`
  ADD PRIMARY KEY (`g_id`);

--
-- Indexes for table `hfile`
--
ALTER TABLE `hfile`
  ADD PRIMARY KEY (`h_id`);

--
-- Indexes for table `ifile`
--
ALTER TABLE `ifile`
  ADD PRIMARY KEY (`i_id`);

--
-- Indexes for table `jfile`
--
ALTER TABLE `jfile`
  ADD PRIMARY KEY (`j_id`);

--
-- Indexes for table `kfile`
--
ALTER TABLE `kfile`
  ADD PRIMARY KEY (`k_id`);

--
-- Indexes for table `lfile`
--
ALTER TABLE `lfile`
  ADD PRIMARY KEY (`l_id`);

--
-- Indexes for table `mfile`
--
ALTER TABLE `mfile`
  ADD PRIMARY KEY (`m_id`);

--
-- Indexes for table `nfile`
--
ALTER TABLE `nfile`
  ADD PRIMARY KEY (`n_id`);

--
-- Indexes for table `ofile`
--
ALTER TABLE `ofile`
  ADD PRIMARY KEY (`o_id`);

--
-- Indexes for table `pfile`
--
ALTER TABLE `pfile`
  ADD PRIMARY KEY (`p_id`);

--
-- Indexes for table `qfile`
--
ALTER TABLE `qfile`
  ADD PRIMARY KEY (`q_id`);

--
-- Indexes for table `rfile`
--
ALTER TABLE `rfile`
  ADD PRIMARY KEY (`r_id`);

--
-- Indexes for table `sfile`
--
ALTER TABLE `sfile`
  ADD PRIMARY KEY (`s_id`);

--
-- Indexes for table `tfile`
--
ALTER TABLE `tfile`
  ADD PRIMARY KEY (`t_id`);

--
-- Indexes for table `ufile`
--
ALTER TABLE `ufile`
  ADD PRIMARY KEY (`u_id`);

--
-- Indexes for table `uploads`
--
ALTER TABLE `uploads`
  ADD PRIMARY KEY (`file_id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `afile`
--
ALTER TABLE `afile`
  MODIFY `a_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=29;

--
-- AUTO_INCREMENT for table `bfile`
--
ALTER TABLE `bfile`
  MODIFY `b_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT for table `cfile`
--
ALTER TABLE `cfile`
  MODIFY `c_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `dfile`
--
ALTER TABLE `dfile`
  MODIFY `d_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `efile`
--
ALTER TABLE `efile`
  MODIFY `e_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `gfile`
--
ALTER TABLE `gfile`
  MODIFY `g_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `hfile`
--
ALTER TABLE `hfile`
  MODIFY `h_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `ifile`
--
ALTER TABLE `ifile`
  MODIFY `i_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `jfile`
--
ALTER TABLE `jfile`
  MODIFY `j_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `kfile`
--
ALTER TABLE `kfile`
  MODIFY `k_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `lfile`
--
ALTER TABLE `lfile`
  MODIFY `l_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `mfile`
--
ALTER TABLE `mfile`
  MODIFY `m_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `nfile`
--
ALTER TABLE `nfile`
  MODIFY `n_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `ofile`
--
ALTER TABLE `ofile`
  MODIFY `o_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `pfile`
--
ALTER TABLE `pfile`
  MODIFY `p_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `qfile`
--
ALTER TABLE `qfile`
  MODIFY `q_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `rfile`
--
ALTER TABLE `rfile`
  MODIFY `r_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `sfile`
--
ALTER TABLE `sfile`
  MODIFY `s_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `tfile`
--
ALTER TABLE `tfile`
  MODIFY `t_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `ufile`
--
ALTER TABLE `ufile`
  MODIFY `u_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `uploads`
--
ALTER TABLE `uploads`
  MODIFY `file_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=17;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
