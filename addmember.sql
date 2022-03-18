-- phpMyAdmin SQL Dump
-- version 4.9.1
-- https://www.phpmyadmin.net/
--
-- Host: localhost
-- Generation Time: Mar 16, 2022 at 08:03 AM
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
-- Database: `addmember`
--

-- --------------------------------------------------------

--
-- Table structure for table `aacademic`
--

CREATE TABLE `aacademic` (
  `a_id` int(11) NOT NULL,
  `Aautor` varchar(100) NOT NULL,
  `Ayear` varchar(100) NOT NULL,
  `Abook` varchar(100) NOT NULL,
  `Aedition` varchar(100) NOT NULL,
  `Alocation` varchar(100) NOT NULL,
  `Apublisher` varchar(100) NOT NULL,
  `Apage` varchar(100) NOT NULL,
  `lec_id` int(11) NOT NULL COMMENT 'id บุคลากร'
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `aacademic`
--

INSERT INTO `aacademic` (`a_id`, `Aautor`, `Ayear`, `Abook`, `Aedition`, `Alocation`, `Apublisher`, `Apage`, `lec_id`) VALUES
(16, '่สรเดกดดก ดกแอดป', '5451', 'ดกหำเะเเ้', '12', 'สา่เดแเปฟกแ', 'ทแดอมนนรม', '4', 3);

-- --------------------------------------------------------

--
-- Table structure for table `admin`
--

CREATE TABLE `admin` (
  `aid` int(6) NOT NULL,
  `auser` varchar(100) NOT NULL,
  `apwd` varchar(200) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=tis620;

--
-- Dumping data for table `admin`
--

INSERT INTO `admin` (`aid`, `auser`, `apwd`) VALUES
(1, 'admin', '827ccb0eea8a706c4c34a16891f84e7b'),
(2, 'admin1', '827ccb0eea8a706c4c34a16891f84e7b'),
(3, 'admin3', '827ccb0eea8a706c4c34a16891f84e7b'),
(4, 'admin4', '827ccb0eea8a706c4c34a16891f84e7b'),
(5, 'admin4', '827ccb0eea8a706c4c34a16891f84e7b');

-- --------------------------------------------------------

--
-- Table structure for table `bachelor`
--

CREATE TABLE `bachelor` (
  `bach_id` int(11) NOT NULL,
  `bach_code` varchar(100) NOT NULL,
  `bach_name` varchar(100) NOT NULL,
  `lec_id` int(11) NOT NULL COMMENT 'id บุคลากร'
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `bachelor`
--

INSERT INTO `bachelor` (`bach_id`, `bach_code`, `bach_name`, `lec_id`) VALUES
(24, '094451', 'การวิเคราะห์ระบบโปรแกรม', 7),
(27, '0900101', 'ความรู้เบื้องต้นเกี่ยวกับธุรกิจ', 3),
(30, '0901413', 'ทฤษฎีบัญชีและนโยบายการบัญชี', 3);

-- --------------------------------------------------------

--
-- Table structure for table `conferences`
--

CREATE TABLE `conferences` (
  `c_id` int(11) NOT NULL,
  `Cautor` varchar(100) NOT NULL,
  `Cyear` varchar(100) NOT NULL,
  `Ctite` varchar(100) NOT NULL,
  `Cditor` varchar(100) NOT NULL,
  `Ctopic` varchar(100) NOT NULL,
  `Cdate` varchar(100) NOT NULL,
  `Clocation` varchar(100) NOT NULL,
  `Cpublisher` varchar(100) NOT NULL,
  `Cpage` varchar(100) NOT NULL,
  `lec_id` int(11) NOT NULL COMMENT 'id บุคลากร'
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Table structure for table `course`
--

CREATE TABLE `course` (
  `course_id` int(11) NOT NULL,
  `course_code` varchar(100) NOT NULL,
  `course_name` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `course`
--

INSERT INTO `course` (`course_id`, `course_code`, `course_name`) VALUES
(1, '0105327', ' ภาษาอังกฤษธุรกิจ'),
(2, '0900101', ' ความรู้เบื้องต้นเกี่ยวกับธุรกิจ'),
(3, '0901111', ' หลักการบัญชีขั้นต้น 1'),
(4, '0901112', ' หลักการบัญชีขั้นต้น 2'),
(5, '0901251', ' การภาษีอากร 1'),
(6, '0902101', ' หลักการตลาด'),
(7, '0903101', ' การจัดการและพฤติกรรมองค์การ'),
(8, '0904101', ' คอมพิวเตอร์และเทคโนโลยีสารสนเทศธุรกิจ'),
(9, '0907104', ' เศรษฐศาสตร์จุลภาค  1'),
(10, '0907105', ' เศรษฐศาสตร์มหภาค 1'),
(11, '0909202', ' กฎหมายธุรกิจ'),
(12, '0909203', ' สถิติธุรกิจ'),
(13, '0909301', ' การจัดการการผลิตและปฏิบัติการ'),
(14, '0909303', ' วิทยาระเบียบวิธีวิจัยธุรกิจ'),
(15, '0909305', ' การบริหารการเงินสมัยใหม่'),
(16, '0909401', ' นโยบายธุรกิจและการจัดการเชิงกลยุทธ์'),
(17, '0901211', ' การบัญชีขั้นกลาง 1'),
(18, '0901212', ' การบัญชีขั้นกลาง 2'),
(19, '0901221', ' การบัญชีต้นทุน'),
(20, '0901311', ' การบัญชีขั้นสูง 1'),
(21, '0901321', ' การบัญชีบริหาร'),
(22, '0901331', ' ระบบสารสนเทศทางการบัญชี'),
(23, '0901332', ' การประยุกต์โปรแกรมสำเร็จรูปทางการบัญชี'),
(24, '0901341', ' การสอบบัญชีและงานที่ให้ความเชื่อมั่น'),
(25, '0901342', ' การตรวจสอบและการควบคุมภายใน'),
(26, '0901351', ' การภาษีอากร 2'),
(27, '0901411', ' การบัญชีขั้นสูง 2'),
(28, '0901412', ' รายงานทางการเงินและการวิเคราะห์งบการเงิน'),
(29, '0901413', ' ทฤษฎีบัญชีและนโยบายการบัญชี'),
(30, '0901414', ' สัมมนาการบัญชีการเงิน'),
(31, '0901400', ' การบัญชีสำหรับเครื่องมือทางการเงิน'),
(32, '0901415', ' การบัญชีสำหรับกิจการขนาดกลางและขนาดย่อม'),
(33, '0901416', ' การบัญชีสำหรับธุรกิจการเกษตร'),
(34, '0901417', ' การบัญชีสำหรับธุรกิจบริการ'),
(35, '0901418', ' การบัญชีหน่วยงานภาครัฐ'),
(36, '0901419', ' การบัญชีนานาชาติ'),
(37, '0901421', ' การวางแผนและควบคุมกำไร'),
(38, '0901422', ' การควบคุมทางการบริหาร'),
(39, '0901423', ' การบริหารต้นทุน'),
(40, '0901424', ' สัมมนาการบัญชีบริหาร'),
(41, '0901425', ' การบัญชีเพื่อการจัดการสิ่งแวดล้อม'),
(42, '0901431', ' โปรแกรมภาษาเพื่อการประมวลผลข้อมุลทางการบัญชี'),
(43, '0901432', ' การวางระบบบัญชี'),
(44, '0901433', ' การพัฒนาและการใช้ระบบสารสนเทศทางการบัญชี'),
(45, '0901434', ' สัมมนาระบบสารสนเทศทางการบัญชี'),
(46, '0901435', ' การจัดการฐานข้อมูลทางการบัญชี'),
(47, '0901436', ' โปรแกรมสำเร็จรูปการวางแผนทรัพยากรสำหรับงานบัญชี'),
(48, '0901437', ' การวิเคราะห์และออกแบบระบบสารสนเทศทางการบัญชี'),
(49, '0901441', ' การตรวจสอบและควบคุมระบบสารสนเทศ'),
(50, '0901442', ' สัมมนาการสอบบัญชี'),
(51, '0901443', ' สัมมนาการตรวจสอบภายใน'),
(52, '0901444', ' ปัญหาการตรวจสอบภายใน'),
(53, '0901445', ' การสอบบัญชีขั้นสูง'),
(54, '0901446', ' 	การตรวจสอบบัญชีภาครัฐ'),
(55, '0901447', ' การตรวจสอบระบบสารสนเทศขั้นสูง'),
(56, '0901448', ' การสอบบัญชีสำหรับผู้ตรวจสอบบัญชีภาษีอากร'),
(57, '0901451', ' การวางแผนภาษีอากร'),
(58, '0901452', ' สัมมนาการภาษีอากร'),
(59, '0901453', ' การบัญชีภาษีอากรระหว่างประเทศ'),
(60, '0901455', ' ปัญหากฎหมายห้างหุ้นส่วนนิติบุคคล'),
(61, '0901461', ' การวิจัยทางการบัญชี'),
(62, '0901462', ' นวัตกรรมทางการบัญชี'),
(63, '0901463', ' ภาษาอังกฤษสำหรับนักบัญชีมืออาชีพ'),
(64, '0901464', ' ความเป็นมืออาชีพทางการบัญชี'),
(65, '0199499', ' สหกิจศึกษา'),
(66, '0901404', ' การฝึกประสบการณ์วิชาชีพทางด้านการบัญชี');

-- --------------------------------------------------------

--
-- Table structure for table `doctorate`
--

CREATE TABLE `doctorate` (
  `doc_id` int(11) NOT NULL,
  `doc_code` varchar(100) NOT NULL,
  `doc_name` varchar(100) NOT NULL,
  `lec_id` int(11) NOT NULL COMMENT 'id บุคลากร'
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `doctorate`
--

INSERT INTO `doctorate` (`doc_id`, `doc_code`, `doc_name`, `lec_id`) VALUES
(8, '092421', 'กฎหมายธุรกิจ', 3),
(10, '095234', 'การจัดการการผลิต', 7),
(11, '095234', 'กฎหมายธุรกิจ', 7),
(14, '0901452', 'สัมมนาการภาษีอากร', 3),
(15, '0901331', 'ระบบสารสนเทศทางการบัญชี', 7);

-- --------------------------------------------------------

--
-- Table structure for table `education`
--

CREATE TABLE `education` (
  `Tr_id` int(11) NOT NULL,
  `Tb_year` varchar(100) NOT NULL,
  `Tb_educat` varchar(100) NOT NULL,
  `Tb_titute` varchar(100) NOT NULL,
  `lec_id` int(11) NOT NULL COMMENT 'id บุคลากร'
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `education`
--

INSERT INTO `education` (`Tr_id`, `Tb_year`, `Tb_educat`, `Tb_titute`, `lec_id`) VALUES
(2, '2/2556', 'การจัดการการตลาด', 'มหาสารคาม', 3),
(3, '1/2564', 'คอมพิวเตอร์ธุรกิจ', 'มหาวิทยาลัยมหาสารคาม', 5),
(4, '2/2563', 'การจัดการ', 'มหาวิทยาลัยขอนแก่น', 2),
(19, '2/2563', 'คอมพิวเตอร์ธุรกิจ', 'มหาวิทยาลัยมหาสารคาม', 3),
(28, '2/2563', 'การจัดการการบัญชี', 'มหาวิทยาลัยมหาสารคาม', 2),
(52, '2/2565', 'ธุรกิจระหว่างประเทศ', 'มหาวิทยาลัยเชียงใหม่', 7);

-- --------------------------------------------------------

--
-- Table structure for table `lecturer`
--

CREATE TABLE `lecturer` (
  `lec_id` int(8) NOT NULL,
  `fname` varchar(100) NOT NULL,
  `lname` varchar(100) NOT NULL,
  `position` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `lecturer`
--

INSERT INTO `lecturer` (`lec_id`, `fname`, `lname`, `position`) VALUES
(3, 'สมปอง', 'แสนสุข', 'หัวหน้าฝายพัฒนาหลักสูตร'),
(4, 'สมถวิล', 'แสนสบาย', 'หัวหน้าฝายวิชาการ'),
(7, 'จรรยา', 'หาญชัย', 'ฝ่ายวิชาการการศึกษา'),
(15, 'aa', 'aa', 'aa');

-- --------------------------------------------------------

--
-- Table structure for table `master1`
--

CREATE TABLE `master1` (
  `mast_id` int(11) NOT NULL,
  `mast_code` varchar(100) NOT NULL,
  `mast_name` varchar(100) NOT NULL,
  `lec_id` int(11) NOT NULL COMMENT 'id บุคลากร'
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `master1`
--

INSERT INTO `master1` (`mast_id`, `mast_code`, `mast_name`, `lec_id`) VALUES
(9, '054524', 'การจัดการการผลิต', 3),
(13, '091254', 'การจัดการการผลิต', 7),
(16, '0901413', 'ทฤษฎีบัญชีและนโยบายการบัญชี', 3),
(17, '0901331', '', 7),
(18, '0901452', 'สัมมนาการภาษีอากร', 3);

-- --------------------------------------------------------

--
-- Table structure for table `presenter`
--

CREATE TABLE `presenter` (
  `p_id` int(11) NOT NULL,
  `Pautor` varchar(100) NOT NULL,
  `Pyear` varchar(100) NOT NULL,
  `Ptite` varchar(100) NOT NULL,
  `Pditor` varchar(100) NOT NULL,
  `Ptopic` varchar(100) NOT NULL,
  `Pdate` varchar(100) NOT NULL,
  `Plocation` varchar(100) NOT NULL,
  `Ppublisher` varchar(100) NOT NULL,
  `Ppage` varchar(100) NOT NULL,
  `lec_id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `presenter`
--

INSERT INTO `presenter` (`p_id`, `Pautor`, `Pyear`, `Ptite`, `Pditor`, `Ptopic`, `Pdate`, `Plocation`, `Ppublisher`, `Ppage`, `lec_id`) VALUES
(11, 'สมปอง แสนตะกาน', '2564', 'หนังสือวิทยาศาสตร์หนอนผีเสื้อ', 'การสื่อสาร', 'วิทยาศาสตร์สิ่งมีชีวิต', '12 มีนาคม 2561', 'กรุงเทพ', 'สถานดินสอสี', '234', 3),
(16, 'aaa', 'aaa', 'aaa', 'aa', 'ttt', 'xx', 'uu', 'yy', '44', 15);

-- --------------------------------------------------------

--
-- Table structure for table `research`
--

CREATE TABLE `research` (
  `Res_id` int(8) NOT NULL,
  `Rautor` varchar(100) NOT NULL,
  `Ryear` varchar(100) NOT NULL,
  `Rtite` varchar(100) NOT NULL,
  `Rtite_jour` varchar(100) NOT NULL,
  `Rvolune` varchar(100) NOT NULL,
  `Rpage` varchar(100) NOT NULL,
  `lec_id` int(11) NOT NULL COMMENT 'id บุคลากร'
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `research`
--

INSERT INTO `research` (`Res_id`, `Rautor`, `Ryear`, `Rtite`, `Rtite_jour`, `Rvolune`, `Rpage`, `lec_id`) VALUES
(14, 'มานิตา ชานานนน', '2564', 'การวาดภาพเสมือนของดอกไม้', 'งานวิจัยแสดงความเห็น', '16', '45', 3);

-- --------------------------------------------------------

--
-- Table structure for table `teachmore`
--

CREATE TABLE `teachmore` (
  `teach_id` int(8) NOT NULL,
  `teach_code` varchar(100) NOT NULL,
  `teach_name` varchar(100) NOT NULL,
  `lec_id` int(11) NOT NULL COMMENT 'id บุคลากร'
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `teachmore`
--

INSERT INTO `teachmore` (`teach_id`, `teach_code`, `teach_name`, `lec_id`) VALUES
(9, '097124', 'การวิจัยการตลาด', 7),
(12, '0901331', 'ระบบสารสนเทศทางการบัญชี', 3);

-- --------------------------------------------------------

--
-- Table structure for table `treatise`
--

CREATE TABLE `treatise` (
  `tr_id` int(8) NOT NULL,
  `Tautor` varchar(100) NOT NULL,
  `Tyear` varchar(100) NOT NULL,
  `Tbook` varchar(100) NOT NULL,
  `Tedition` varchar(100) NOT NULL,
  `Tlocation` varchar(100) NOT NULL,
  `Tpublisher` varchar(100) NOT NULL,
  `Tpage` int(10) NOT NULL,
  `lec_id` int(11) NOT NULL COMMENT 'id บุคลากร'
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `treatise`
--

INSERT INTO `treatise` (`tr_id`, `Tautor`, `Tyear`, `Tbook`, `Tedition`, `Tlocation`, `Tpublisher`, `Tpage`, `lec_id`) VALUES
(35, 'รัตนากาล พรมสาภร', '2542', 'การเดินทางที่แสนพิเศษ', '12', 'กรุงเทพ', 'เครื่องเขียน', 245, 3),
(39, 'สุดารัตน์ เสวนา', '2542', 'การเดินทางที่แสนพิเศษ', '12', 'ขอนแก่น', 'เครื่องเขียน', 245, 3);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `aacademic`
--
ALTER TABLE `aacademic`
  ADD PRIMARY KEY (`a_id`);

--
-- Indexes for table `admin`
--
ALTER TABLE `admin`
  ADD PRIMARY KEY (`aid`);

--
-- Indexes for table `bachelor`
--
ALTER TABLE `bachelor`
  ADD PRIMARY KEY (`bach_id`);

--
-- Indexes for table `conferences`
--
ALTER TABLE `conferences`
  ADD PRIMARY KEY (`c_id`);

--
-- Indexes for table `course`
--
ALTER TABLE `course`
  ADD PRIMARY KEY (`course_id`);

--
-- Indexes for table `doctorate`
--
ALTER TABLE `doctorate`
  ADD PRIMARY KEY (`doc_id`);

--
-- Indexes for table `education`
--
ALTER TABLE `education`
  ADD PRIMARY KEY (`Tr_id`);

--
-- Indexes for table `lecturer`
--
ALTER TABLE `lecturer`
  ADD PRIMARY KEY (`lec_id`);

--
-- Indexes for table `master1`
--
ALTER TABLE `master1`
  ADD PRIMARY KEY (`mast_id`);

--
-- Indexes for table `presenter`
--
ALTER TABLE `presenter`
  ADD PRIMARY KEY (`p_id`);

--
-- Indexes for table `research`
--
ALTER TABLE `research`
  ADD PRIMARY KEY (`Res_id`);

--
-- Indexes for table `teachmore`
--
ALTER TABLE `teachmore`
  ADD PRIMARY KEY (`teach_id`);

--
-- Indexes for table `treatise`
--
ALTER TABLE `treatise`
  ADD PRIMARY KEY (`tr_id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `aacademic`
--
ALTER TABLE `aacademic`
  MODIFY `a_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=19;

--
-- AUTO_INCREMENT for table `admin`
--
ALTER TABLE `admin`
  MODIFY `aid` int(6) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `bachelor`
--
ALTER TABLE `bachelor`
  MODIFY `bach_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=31;

--
-- AUTO_INCREMENT for table `conferences`
--
ALTER TABLE `conferences`
  MODIFY `c_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;

--
-- AUTO_INCREMENT for table `course`
--
ALTER TABLE `course`
  MODIFY `course_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=67;

--
-- AUTO_INCREMENT for table `doctorate`
--
ALTER TABLE `doctorate`
  MODIFY `doc_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=16;

--
-- AUTO_INCREMENT for table `education`
--
ALTER TABLE `education`
  MODIFY `Tr_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=58;

--
-- AUTO_INCREMENT for table `lecturer`
--
ALTER TABLE `lecturer`
  MODIFY `lec_id` int(8) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=16;

--
-- AUTO_INCREMENT for table `master1`
--
ALTER TABLE `master1`
  MODIFY `mast_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=19;

--
-- AUTO_INCREMENT for table `presenter`
--
ALTER TABLE `presenter`
  MODIFY `p_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=17;

--
-- AUTO_INCREMENT for table `research`
--
ALTER TABLE `research`
  MODIFY `Res_id` int(8) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=16;

--
-- AUTO_INCREMENT for table `teachmore`
--
ALTER TABLE `teachmore`
  MODIFY `teach_id` int(8) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;

--
-- AUTO_INCREMENT for table `treatise`
--
ALTER TABLE `treatise`
  MODIFY `tr_id` int(8) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=44;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
