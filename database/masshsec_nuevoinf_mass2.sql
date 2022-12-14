-- phpMyAdmin SQL Dump
-- version 4.8.3
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jun 30, 2020 at 06:34 AM
-- Server version: 10.1.37-MariaDB
-- PHP Version: 7.2.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `masshsec_nuevoinf_mass2`
--

-- --------------------------------------------------------

--
-- Table structure for table `admin_user`
--

CREATE TABLE `admin_user` (
  `id` int(12) NOT NULL,
  `username` varchar(60) NOT NULL,
  `password` varchar(60) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `admin_user`
--

INSERT INTO `admin_user` (`id`, `username`, `password`) VALUES
(1, 'admin', 'admin');

-- --------------------------------------------------------

--
-- Table structure for table `cart`
--

CREATE TABLE `cart` (
  `cart_id` int(12) NOT NULL,
  `cart_s_id` int(12) NOT NULL,
  `cart_s_civil` varchar(60) NOT NULL,
  `cart_c_id` int(12) NOT NULL,
  `cart_c_name` text NOT NULL,
  `cart_item_price` varchar(90) NOT NULL,
  `cart_datetime` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `category`
--

CREATE TABLE `category` (
  `cat_id` int(11) NOT NULL,
  `cat_name` varchar(60) NOT NULL,
  `cat_image` varchar(80) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `category`
--

INSERT INTO `category` (`cat_id`, `cat_name`, `cat_image`) VALUES
(1, 'Customized Courses', '75dba1d3f6fe7c5db9b53630561e770c.jpeg'),
(2, 'International Courses', 'b28f9c1fbe54804d8cc5a1c8c17cd843.png'),
(3, 'Latest Offers', 'dde55a4855f1b339867d0713cc6476bf.jpg'),
(4, 'TOT (Train Of The Trainer-Online Courses)', 'e3527a8e5c6ca9a1337ab3566c87f6f4.jpg');

-- --------------------------------------------------------

--
-- Table structure for table `certification`
--

CREATE TABLE `certification` (
  `cert_id` int(15) NOT NULL,
  `st_pasport` varchar(80) NOT NULL,
  `st_name` varchar(80) NOT NULL,
  `cert_sr_no` text NOT NULL,
  `st_cert_name` varchar(80) NOT NULL,
  `cert_file` text NOT NULL,
  `c_ins_date` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `certification`
--

INSERT INTO `certification` (`cert_id`, `st_pasport`, `st_name`, `cert_sr_no`, `st_cert_name`, `cert_file`, `c_ins_date`) VALUES
(2, '125478986536', 'Anseb a', 'MASS-20-05-12-001', 'Authorized Gas Tester (AGT) ', 'hse_2477_125478986536.pdf', '2020-05-12'),
(3, 'IND123E01', 'Test Member', 'MASS-20-05-12-002', 'Defensive Driving Course (DDC) (Theory & Practical)', 'hse_7843_IND123E01.pdf', '2020-05-12'),
(4, 'IND7D1365', 'Student a', 'MASS-20-05-12-003', 'H2S Safety Awareness SCBA Training Course', 'hse_9844_IND7D1365.pdf', '2020-05-12');

-- --------------------------------------------------------

--
-- Table structure for table `checkouts`
--

CREATE TABLE `checkouts` (
  `checkouts_id` int(10) NOT NULL,
  `checkouts_u_id` int(10) NOT NULL,
  `checkouts_c_id` int(10) NOT NULL,
  `checkout_orderid` varchar(90) NOT NULL,
  `checkouts_validity` varchar(90) NOT NULL,
  `checkouts_price` varchar(90) NOT NULL,
  `checkouts_coupon` varchar(90) NOT NULL,
  `checkouts_date` date NOT NULL,
  `checkouts_expdate` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `college`
--

CREATE TABLE `college` (
  `id` int(15) NOT NULL,
  `college_name` varchar(60) NOT NULL,
  `description` varchar(60) NOT NULL,
  `picture` varchar(60) NOT NULL,
  `priority` varchar(60) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `college`
--

INSERT INTO `college` (`id`, `college_name`, `description`, `picture`, `priority`) VALUES
(8, 'Venketeswara College', 'Bangalore', '347a1ee3fe0883071e016b5109f51688.jpg', '0'),
(9, 'St.Benedict Academy', 'Bangalore', '376c842ed08b5316614d271254416ff6.jpg', '0'),
(10, 'East West College', 'Bangalore', '87d99b5f73950960def2ad4a9f5f137f.jpg', '0'),
(11, 'carmel college', 'thrissur', '444122db617b6453eb8c9841355beb76.jpg', '0'),
(12, 'thygaraja polytechnic', 'amballur', '916ee61bd302e0a74121f5cffc11c6b3.jpg', '0'),
(13, 'st.marries', 'thrissur', '1aabb8673e1e2e09faeed7ac42a59c00.jpg', '0'),
(14, 'st.Thomas college', 'thrissur', '106787072388d96f6520280f92685da6.jpg', '0');

-- --------------------------------------------------------

--
-- Table structure for table `company`
--

CREATE TABLE `company` (
  `company_id` int(10) NOT NULL,
  `company_regno` text NOT NULL,
  `company_name` text NOT NULL,
  `company_project` text NOT NULL,
  `company_certtype` varchar(60) NOT NULL,
  `company_cors` text NOT NULL,
  `company_serv` text NOT NULL,
  `company_location` text NOT NULL,
  `company_certificate` text NOT NULL,
  `company_date` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `company`
--

INSERT INTO `company` (`company_id`, `company_regno`, `company_name`, `company_project`, `company_certtype`, `company_cors`, `company_serv`, `company_location`, `company_certificate`, `company_date`) VALUES
(7, '', 'cdfgfdgdsg', 'sdfsdf324', 'Service', 'N/A', '4', 'dsfsdgfdfgsfdg', '', '2020-05-04'),
(8, '102er14sr', 'test company', '23123sadasd', 'Service', 'N/A', '4', 'test site location', '2eb0e98908fac2df85f962da9cd8452c.pdf', '2020-06-12'),
(9, '102er14sr', 'test company', 'sdfsdf324213', 'Service', 'N/A', '5', 'dwdwe edwedwqdwq', '79fc393a394ede66ef0f3e18c0161459.pdf', '2020-06-12'),
(10, '102er14sr', 'test company', 'sdfsdf3244343242432', 'Course', '35', 'N/A', 'erfwerfxr rfrfrfrg', 'b752406b819a8914308b63e90bc653d9.pdf', '2020-06-12'),
(11, '102er14sr', 'test company', 'sdfsdf324213123', 'Course', '25', 'N/A', 'ctgtgrtgrgr', 'e964816058a2d520128b0b5647b3c1d8.pdf', '2020-06-12');

-- --------------------------------------------------------

--
-- Table structure for table `company_info`
--

CREATE TABLE `company_info` (
  `company_info_id` int(10) NOT NULL,
  `company_info_regno` text NOT NULL,
  `company_info_pwd` text NOT NULL,
  `company_info_name` text NOT NULL,
  `company_info_mail` varchar(100) NOT NULL,
  `company_info_phon` varchar(100) NOT NULL,
  `company_info_date` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `company_info`
--

INSERT INTO `company_info` (`company_info_id`, `company_info_regno`, `company_info_pwd`, `company_info_name`, `company_info_mail`, `company_info_phon`, `company_info_date`) VALUES
(1, '102er14sr', '12345678', 'test company', 'testc@ma1il.com', '24234244', '2020-06-12'),
(3, '20200612_010_COMP_MASS', '12345678', 'test company2', 'testc@mai12l.com', '9747738699', '2020-06-12'),
(4, '20200612_011_COMP_MASS', '12345678', 'test company3', 'testc@ma14il.com', '24234244', '2020-06-12');

-- --------------------------------------------------------

--
-- Table structure for table `coupon`
--

CREATE TABLE `coupon` (
  `coupon_id` int(10) NOT NULL,
  `coupon_name` text NOT NULL,
  `coupon_code` text NOT NULL,
  `coupon_type` varchar(90) NOT NULL,
  `coupon_validity` varchar(60) NOT NULL,
  `coupon_status` int(10) NOT NULL,
  `coupon_ create` date NOT NULL,
  `coupon_ expiry` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `coupon`
--

INSERT INTO `coupon` (`coupon_id`, `coupon_name`, `coupon_code`, `coupon_type`, `coupon_validity`, `coupon_status`, `coupon_ create`, `coupon_ expiry`) VALUES
(1, '1 month trial', '10masshse2020month1days30', 'single', '30 days', 1, '2020-05-08', '2021-05-08');

-- --------------------------------------------------------

--
-- Table structure for table `course`
--

CREATE TABLE `course` (
  `id` int(15) NOT NULL,
  `course` varchar(60) NOT NULL,
  `course_cat` varchar(60) NOT NULL,
  `priority` varchar(60) NOT NULL,
  `course_desc` text NOT NULL,
  `course_code` varchar(90) NOT NULL,
  `course_pic` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `course`
--

INSERT INTO `course` (`id`, `course`, `course_cat`, `priority`, `course_desc`, `course_code`, `course_pic`) VALUES
(17, 'NASP  Diploma ', '2', '0', 'Important Things To Note:\r\n•NASP exams allow three (3) attempts to make a passing score of 80%. After threeattempts, that exam is no longer accessible.\r\n•If you feel there is a mistake with any exam score, please feel free to contact us.Please be sure to include: Client ID #, Name, Exam Certification Name and QuestionNumber/Answer you are inquiring about. A representative will get back with you asquickly as possible.\r\n•All certifications require a refresher course every 3 years. You will receive notification byemail when your recertification date is nearing. All original course materials will beavailable for download in your client area as well as the Recertification Exam.', 'xewrc', '7d60af9a9b1f5de385adf1223cda23b6.png'),
(18, 'Authorized Gas Tester (AGT) ', '1', '0', 'Course outline\r\nMODULE 1 :\r\nElement 1.1 Testing in confined spaces\r\nElement 1.2 Relevant legislative controls\r\nElement 1.3 Atmosphere measuring and monitoring equipment\r\nElement 1.4 Gas testing in confined spaces\r\nElement 1.5 Interpreting and documenting the results\r\nMODULE 2 :\r\nElement 2.1 Testing for hot work\r\nElement 2.2 Relevant legislative controls\r\nElement 2.3 Atmosphere measuring and monitoring equipment\r\nElement 2.4 Gas testing for hot work\r\nElement 2.5 Interpreting and documenting the results\r\nMODULE 3 :\r\nElement 3.1 Providing safety watches duties for hot work sites', 'vgfvdfcd', 'd88a2ebf64c9b04c39f7d87211aa73ef.jpg'),
(19, 'OSH 30H GENERAL CONSTRUCTION ', '2', '0', 'OSH 30-Hour Training courses for Construction and General Industry teach health and safety awareness by helping supervisors and workers reduce the risk of workplace hazards. This OSH-authorized safety training is 100% online and accessible 24/7 from any web-enabled device. Additional benefits of OSH 30-Hour Training include prevention of possible worksite hazards, understanding workers\' rights, employer responsibilities and more.\r\n\r\nBecause the courses are divided into sections, you can progress through training at your own pace. This means you won\'t have to take time off from work in order to complete OSH Outreach training. Once you enroll, you will be on your way to meeting OSH training requirements for a safer workplace!', 'wqqqzd', '4bf96258620ce28bd47b6d94990a1a81.jpeg'),
(20, 'H2S Safety Awareness SCBA Training Course', '1', '', 'Overview\r\n\r\nThe Hydrogen Sulfide (H2S) course allow delegates to learn on how to recognize when Hydrogen Sulfide is present in work area and how to describe the precautions taken and necessary to work with Hydrogen Sulfide environment safely. The course is both theoretical and practical on which delegates will be required to show their level of knowledge and understanding gained from the training as they will be assessed base on the result.\r\n\r\nObjectives:H2S\r\n\r\nAt the end of the training candidates will be able to:\r\n\r\nUnderstand the properties and hazards associated with H2S gas.\r\nIdentify the types and use of H2S detector systems.\r\nApply safe practices of work in an H2S environment.\r\nCorrectly use Respiratory protective equipment.\r\nFamiliarize to H2S emergency procedure.\r\nTarget Audience\r\n\r\nThis training program aimed to all personnel that work in areas where H2S is known or suspected\r\n\r\nand as part of the minimum training requirement of employees working in a potential H2S Environment.\r\n\r\nCertification\r\n\r\nOn completion of this course successful candidates will receive an  Certificate on H2S awareness.\r\n\r\nRevalidation\r\n\r\nThere is no revalidation period for this type of training, however refresher training is recommended every 2 years', 'wef4f', '90a04c20289965ad9c434b434aea9817.jpg'),
(21, 'Confined Space Safety and Rescue (Theory and Practical).', '1', '', 'Confined Space Safety and Rescue (Theory and Practical).\r\nCourse Outlines:\r\nConfined space operation & SCBA:\r\n1-Confined Spaces Operation:\r\n? Understand the legislation applying to Confined Spaces working\r\n? Principles of Confined Space Hazards\r\n? Awareness of Confined Space Risk Assessments\r\n? Principles of a Permit to Work System\r\n? Use equipment and tools safely and in accordance with the Manufacturers\' instructions\r\n? Understand and demonstrate the duties of the Safety Attendant\r\n? Understanding of the principles of Confined Space Communications (methods, types and limitations)\r\n? procedures for Atmospheric Monitoring\r\n? Ventilation (methods, types, limitations)\r\n? Prepare and use self contained and/or airline Breathing Apparatus in accordance with the Manufacturer\'s specifications\r\n? Follow procedures and work safely\r\n? Prepare to enter, work and exit a Low, Medium and High Risk Confined Space safely\r\n? Principles of Confined Space Hygiene\r\n2-SCBA:\r\n? Respiratory Hazards\r\n? Effects of Low Oxygen on the Body\r\n? Effects of Gasses and Inhaled Chemicals on the Body\r\n? Components of the SCBA\r\n? Advantages of the SCBA Units\r\n? Limitations of the SCBA Units\r\n? When is and SCBA Needed\r\n? Maintenance Requirements\r\n? Donning Procedures\r\n? Emergency Procedures\r\n? Buddy Breathing\r\n? Fit Testing of Masks\r\n? ELSA (Emergency Life Support Apparatus) is designed for rapid escape from hazardous industrial and marine environments such as confined spaces.\r\n? Drills with SCBA Units - Customized to Your Operation\r\n? Hands-on Practical Exercises\r\n3-Confined space Rescue\r\n? Demonstrate an understanding of the principles of Confined Space Entry Rescue (Confined Space Emergencies and how to deal with them)\r\n? Medical aspects/victim stabilization\r\n? Rescue systems\r\n? Rigging systems\r\n? Knot tying\r\n? Anchor systems\r\n? Belaying and safety\r\n? Use specialist equipment and tools safely and in accordance with the Manufacturer\'s instructions for the purpose of casualty handling and recovery\r\n? Follow and demonstrate the CPR & First Aid\r\n? Rescue simulations\r\n? Practical Evaluation', 'xgr4xf', '277fd3ac3720703eb463fd38e680cf98.jpg'),
(22, 'Crane Operator Competency Training Course', '1', '', '\r\nCourse outline\r\n? Definitions\r\n? Crane Types & Components\r\n? Crane Set up\r\n? Crane Safety\r\n? Operator Responsibilities\r\n? Rigging Principles\r\n? Assembly and Disassembly\r\n? Crane Operation\r\n? Capacities and Load Charts\r\n? Technical Accuracy\r\n? Depth Perception', '3454w2', '146b5aa45388278a8f800cffc6544dbf.jpg'),
(23, 'Defensive Driving Course (DDC) (Theory & Practical)', '1', '', 'Defensive Driving Course (DDC) (Theory & Practical)\r\nCourse Outlines\r\nSession 1: Defensive Driving Concept & Definitions\r\n•Introduction\r\n•Accidents statistics\r\n•Defensive driving definition\r\n•Defensive driving concept\r\n•Preventable accidents definition\r\n•Collision prevention formula\r\n•Scanning Technique\r\n•Driver’s self assessment activity\r\nSession 2 : Driver On?Road Behavior & Its Impact on Safety\r\n•Avoiding unsafe driving behavior that results in crashes\r\nSession 3 : Driver’s Condition and Its Impact on His Safety\r\n•Aggressive driving and road rage\r\n•Distraction\r\n•Driving under influence of alcohols, drugs and medication\r\nSession 4 : Dealing With External Surrounding Conditions\r\n•Light Condition\r\n•Weather Condition\r\n•Road Condition\r\n•Traffic Condition\r\nSession 5: Vehicle’s Condition & Occupant Restraint System\r\n•Pre?drive preparedness\r\n•The three stages of a crash\r\n•Vehicles occupant restraint system\r\n•ABS Brakes demonstration\r\nAnti?Lock Braking Systems (ABS)\r\nAir Bags?\r\n•Emergency stopping\r\n•Vehicle condition and Pre?Trip Inspection\r\n•Tires\r\nSession 6: Practice Defensive Driving (Post-Test & the practical session):\r\n•The Five seeing Habits and commentary drive.', 'dxfwefxe', '5ea7cba03d11e4a8d457fce548b6ee4a.jpg'),
(24, 'behavior-based safety BBS', '1', '', 'behavior-based safety BBS\r\nCourse outline\r\n? What is behavior-based safety?\r\n? Implementation phases of BBS\r\n? The corporate safety culture\r\n? The Safety Triad\r\n? Critical behaviors and barriers to safety\r\n? Motivation\r\n? The “DO IT” process\r\n? Principles of behavior-based safety\r\n? Summary Behavior-based safety', '23zd', '08e128ee838a8d1fdb451cc84857d761.jpg'),
(25, 'Banksman training', '1', '', '\r\nCourse outline\r\n• BANKSMAN and DRIVER responsibilities.\r\n• The correct procedures in assisting a vehicle’s safe operation.\r\n• Ensure that there is a TSTI.\r\n• Assess the area with the Banksman prior to the start.\r\n• Agree on signals to be given with the Banksman.\r\n• Ensure you only operate vehicle with a Banksman.\r\n• STOP WORK PROCEDURE\r\n• Controlling the operation of a vehicle on site\r\n• BANKSMAN tools\r\n• BANKSMAN signal\r\n• Hand signal\r\n• Hand on training', '423ss', '144bc8054c16d3be976c75644c3c7a8b.jpg'),
(26, 'Occupational health (OH)', '2', '', '\r\nCourse outline\r\n? Need for OH Program\r\n? Occupational Health Hazards\r\n? Routes of entry into body\r\n? Types of health effects\r\n? Effects of air contaminants on the body\r\n? Noise\r\n? Radiation\r\n? Ergonomics\r\n? Occupational Health\r\n? OH Hazard Hierarchy of controls\r\n? National / International Basis for OH Programs\r\n? OH PROGRAMS\r\n? Exposure Assessment Program', 'ddzseddee', 'c05853d6eb5a6f13a1cbb4dc29c2b89c.jpeg'),
(27, 'Accident Incident Investigation ', '2', '', '<p><b>&nbsp; &nbsp;&nbsp;<u>Course outline</u></b></p><ul><li><b>Traditional approach to accident prevention&nbsp;</b></li><li>&nbsp;Overview of HSE incident types and categories.</li><li>Why we prevent accidents?&nbsp;</li><li>Major accident history</li><li><b>Accident Causation</b></li><li>Overview of incident causation theories</li><li>Role of investigation in controlling risk and relation between near miss and incidents</li><li>Unsafe Acts</li><li>Unsafe Conditions (Environmental)&nbsp;</li><li>Unsafe Personal Factors</li><li><b>Root Causes Analysis</b></li><li>What is RCA?</li><li>Why do an RCA</li><li>Where did it come from?</li><li>RCA model&nbsp;</li><li>When is an RCA done?</li><li>Why is an RCA important?</li><li>When not to do an RCA?</li><li>How RCA\'s Work</li><li>Key RCA roles</li><li><b>Accident Prevention Program</b></li><li>Formation of Investigation committee&nbsp;</li><li>Composition of investigation committee</li><li>Roles &amp; responsibilities of investigation committee members</li><li>Terms of Reference &amp; types of investigation committee based on incident category</li><li>Principles of the accident prevention process success.</li><li>Key elements of an accident prevention program.<br><br></li></ul>', 'wdsadsd', '8dd1ccffbbac9ae0cdff89c0aa218d2f.jpg'),
(28, 'Electrical safety', '2', '', '\r\nCourse outline\r\n? Common Electrical Hazards\r\n? It’s Your Life – Protect it!\r\n? How Much Electricity is Dangerous\r\n? Burn Hazards Associated With Electricity\r\n? Definition of “Arc Flash\r\n? Typical Results from an Arc Flash\r\n? Approach / Protection Boundaries\r\n? How to Determine the Approach Boundaries\r\n? Nature of Electrical Accidents\r\n? Ways to Protect the Workers\r\n? What if we Can’t Deenergize the Equipment\r\n? Lockout and Tagout\r\n? If You Must Work on Energized Circuits\r\n? Who is a Qualified Worker\r\n? Personal Protective Equipment\r\n? Hazardous (Classified) Locations\r\n? Hazardous Location Types\r\n? Hazardous Location Conditions\r\n? Nature of Hazardous Substances\r\n? An Alternate to Divisions\r\n? Protecting Employees\r\n? What is a GFCI\r\n? Where are Temporary GFCI’s Required\r\n? Where are Permanent GFCI’s Required\r\n? What About Protection on Other Systems\r\n? Are Extension Cords Allowable by OSHA', 'awsdasds', '5ee1f366b5c2bd17c8d1f3f1e42a99da.jpg'),
(29, 'Emergency Evacuation Training Course', '2', '', 'Emergency Evacuation Training Course\r\nCourse outline\r\n? Purpose of an emergency plan – dealing with SHE emergencies\r\n? Fire Safety – Housekeeping\r\n? Evacuation procedures – the Need to Know\r\n? Preplanning\r\n? The emergency scene\r\n? Zone sweep\r\n? Types of emergencies\r\n? Specific emergencies and responses\r\n? Communication channels\r\n? General evacuation and duties\r\n? Emergency response personnel\r\n? Authorities and responsibilities ? The person discovering the incident ? Emergency Controller ? Communications Controller ? Zone Marshall ? Fire Team Leader ? Fire Team Member ? First Aid Team Leader ? First Aider ? Deputies ? ? The Evacuation ? ? Emergency Drill – Role Play Exercise', '3ewdw', 'ba3806e8b4657a28f8eff130b5e87856.jpg'),
(30, 'Fire Fighting Training Course', '2', '', 'Fire Fighting Training Course\r\nCourse outline\r\nThis Fire fighting course covers all aspects of fire fighting from prevention and detection to extinguishments. Great emphasis is placed on communication throughout the process.\r\nThe following topics will be covered:\r\n? Introduction to what’s fire ?\r\n? Elements of Fire\r\n? Fire Triangle and Tetrahedron\r\n? Gases\r\n? Liquids\r\n? Solids\r\n? Ignition in the triangle\r\n? Chemical\r\n? Electrical\r\n? Mechanical\r\n? Oxygen percentages\r\n? Chain reaction\r\n? Phases and nature of fire\r\n? Flammability\r\n? Combustibility\r\n? Phases of Fire\r\n? Incipient Phase\r\n? Free Burning Phase(flashover)\r\n? Smoldering Phase(back draft)\r\n? Classes of Fires\r\n? Fire Extinguisher Basics\r\n? Classes of Fire Extinguishers\r\n? Rating System of Fire Extinguishers\r\n? Limitations of Portable Fire Extinguishers\r\n? Inspection and Use of Fire Extinguishers\r\n? Fire Detection and Alarm Systems\r\n? Fire Marshal responsibilities.\r\n? Evacuation Routes and Exits\r\n? To Fight or Flee? The teacher\'s Decision\r\n? Medical Assistance\r\n? Practical Session using all types of fire extinguishers to fight a real fire Simulation.', 'sxaxdd', '0ab243797d3ffb4b816dde6de5f8c658.jpg'),
(31, 'Forklift safety', '2', '', 'Forklift safety\r\n? What is meant by a Forklift Truck\r\n? Your Truck is made up of -\r\n? Types of Forklifts in General Use\r\n? Types of Propulsion\r\n? Tyres, Controls and Instruments\r\n? Fork Types, Lengths, Extensions, Spacing, Height Terms\r\n? Rear Wheel Steering and Lift Truck Steering Features\r\n? Accidents, Safety Code, Accident Pie-Chart\r\n? Principles of Operation, See-Saw, Undercutting the Load Recap\r\n? Stability Triangle, Centre of Gravity, Data Plates\r\n? Load Centre Definition\r\n? Load Centre and Lift Capacity\r\n? Forklift Truck Operation, Pre-Shift Checks\r\n? Basic Stacking and De-Stacking Rules\r\n? Reach Truck Introduction, Load Table, Load Centre\r\n? Reach Truck Stacking and De-Stacking Rules\r\n? Safety Rules, Pictorial, LPG Cylinder Exchange Procedure', 'sxsxs', '742784b9fdebc3956e0c4cf47f81373f.jpg'),
(32, 'Hazard Identification, and Risk Assessment', '2', '', 'Hazard Identification, and Risk Assessment\r\nCourse Outline\r\n? Identify hazards & conduct Risk Assessments\r\n? Investigate and report accidents and incidents\r\n? Conduct Workplace Inspections\r\n? Determine personal protective equipment and clothing requirements\r\n? Understand and put in place ‘Working at Height’ protective procedures\r\n? Develop and put in place traffic safety management plans\r\n? Ensure that they manage contractors formally and safely Specific Areas Covered\r\n? The legal requirement and roles and responsibilities of managers in the area of Hazard Identification And Risk Assessment\r\n? The key concepts of Hazard Identification and Risk Assessment (harm, a hazard, a risk, a control)\r\n? Consultation within the workplace\r\n? Steps to control hazards and risks(identify, assess, control and check controls)\r\n? Types of common workplace hazards\r\n? Risk Matrix and assessment criteria.\r\n? The hierarchy of controls\r\n? Risk control process & control hierarchy\r\n? Monitor and review the processes of risk management systems\r\n? When to do a risk assessment\r\n? Accident and Incident investigation and reporting\r\n? Why accident incident happen & Action plans\r\n? Supervisors responsibilities in relation to accident/incident investigation\r\n? Accident incident report form\r\n? Hazard identification program & Hazard Alert Form\r\n? Workplace Inspections\r\n? Follow up action items from the workplace inspections\r\n? Slips, trips and falls\r\n? Slippery uneven surfaces\r\n? Hazardous substances, dangerous goods and Material Safety Data Sheets (MSDS)\r\n? Asbestos & Chemical and substance spills\r\n? Working at heights\r\n? Traffic Management\r\n? Contractor Management WORK SHOP AND CASE STUDYS DURING THE TRAINING (HANDS ON TRAINING)\r\n? A real case study from KWTSTEEL factory to apply the following :\r\no Assess risk using the risk matrix\r\no Decide risk control strategies\r\no Address hazards through planning\r\no Conduct risk assessments\r\no Investigate a breach and develop a plan to fix it\r\no Implement the plan\r\no Monitor the actions taken to rectify the breach', 'dzdwezwe', '274a60ebbfcb0b80a52489f2ea1f2890.jpg'),
(33, 'Hazcom (Hazard communication)', '2', '', 'Hazcom (Hazard communication)\r\nCourse outline\r\nI. INTRODUCTION\r\nA. Why do we need a Model Training Program?\r\nB. What are the training requirements of the HCS?\r\nC. What do these information and training requirements mean?\r\nD. What are some common problems encountered with training?\r\nE. What is in the Model Training Program, and how can it help me?\r\nII. GUIDANCE FOR SITE SPECIFIC TRAINING\r\nA. What should I do first?\r\nB. How do I identify training needs?\r\nC. How do I prepare training goals and objectives?\r\nD. How do I put a program together?\r\nE. How do I conduct the training?\r\nF. How do I evaluate program effectiveness?\r\nG. What do I do with evaluation results?\r\nH. Summary\r\nIII. GENERAL ELEMENTS\r\nA. Introduction\r\nB. How to Use the Lesson Plans\r\nC. Preparation for Training', '3214132', 'd8bbfb9edcb0be427998a003e01941d7.jpg'),
(34, 'Heavy equipment operation', '1', '', 'Heavy equipment operation\r\nCourse outline\r\nModule 1:Heavy Equipment Introduction :\r\nIntroduction to Construction Math\r\nThis module introduces basic mathematical procedures commonly used in the construction and maintenance crafts. It relates the use of math to various career options available in the industry. The information is tied to everyday activities that trainees are likely to encounter on the job and illustrates how mathematics is a valuable tool for the workers.\r\nIntroduction to Hand Tools\r\nThis module introduces basic hand tools used in construction and maintenance. The module shows trainees how to use common tools safely and how to maintain those tools. It also introduces some specialty tools used by different crafts. Recognizing and caring for tools is an important job skill for all workers.\r\nBasic Rigging\r\nThis module introduces basic principles and practices behind safe and efficient rigging operations. At this level of training, no trainee should perform rigging operations. Only a qualified person should perform the rigging and moving of any size load on a job. Trainees need only be aware of basic equipment requirements and selection criteria at this stage of their training. They will be introduced to factors such as load stress in this module.\r\nIdentification of Heavy Equipment\r\nIntroduces the ten most used pieces of heavy equipment such as dump trucks, backhoes, and Boom truck, Crane, JCB\'s, Earth Movers and bulldozers. Describes the functional operation and uses for each piece of equipment.\r\nEquipment Preventive Maintenance\r\nThis module covers preventive maintenance responsibilities of the operator including specifying basic equipment subsystems and major mechanical systems; knowing how and when to service equipment, and how and when to complete routine maintenance.\r\nBackhoe, Part 1\r\nThis module presents types and designs of backhoe excavators, safer operating techniques of the backhoe and front bucket tractor, and use of the backhoe for trenching and digging foundations. Setting up the backhoe safely is emphasized.\r\nLoader,\r\nHere the student will be presented an introduction to the use and maintenance of the loader, periodic maintenances, safer operation, and operator safety. The different types of loaders are described along with the various attachments that loaders may utilize.\r\nTractors\r\nThis module covers operation of general utility tractors in the construction and excavation industry. Describes duties and responsibilities of the operator, safety rules for operation, the attachment of implements and basic preventive maintenance practices.\r\nDump Trucks\r\nThis module covers operation of dump trucks used in the excavation industry. Describes duties and responsibilities of the operator, safety rules for operation, the attachment of implements, and basic preventive maintenance practices.\r\nSoils,\r\nProvides an overview of soil composition and characteristics. Describes different types of soil classification methods and how to use them. Introduces concept of soil compaction in highway and building construction.\r\nGrades,\r\nThis module introduces the concept of preparing graded surfaces using heavy equipment. Covers identification of construction stakes and interpretation of marks on each type of stake. Describes process for grading slopes.\r\nModule 2: The Riggers BANKSMAN’S ROLE\r\n1. The importance of the Riggers/ banksman’s role\r\n2. Checking the cargo manifest and reviewing the load\r\n3. Checking the load for dropped objects\r\n4. Checking the balance and security of the load\r\n5. Difficulties that might occur during the lifting and moving operations\r\n6. The need for high visibility vests\r\n7. The need for communicating hand signals clearly\r\n8. What is meant by ‘line of sight’ and a ‘blind lift’\r\n9. The hand signal for ‘emergency stop’\r\n10. Establishing and using two way radio communication\r\nModule 3: Practical session includes:\r\n1. Heavy equipment operator assessment.\r\n2. Signaling\r\n3. Heavy equipment Checking\r\n4. Slings, chains, clamps, etc… checking.\r\n5. The use of hand signals and radio communications\r\n6. The Rigger/banksman’s role in a simple pre-slung lift\r\n7. How to prepare a standard load which requires a single leg sling\r\n8. How to prepare a standard load which requires more than one sling\r\n9. The slinger’s role during a free access lift, a restricted access lift, a single tubular lift, a bundled tubular lift, a load with an offset centre of gravity, a lift with a cargo carrying unit and a blind lift\r\n10. The banksman’s role during a free access lift, a restricted access lift, a single tubular lift, a bundled tubular lift, a lift with an offset centre of gravity, a lift with a cargo carrying unit.\r\n11. Written exams', 'w45rwdc', '067c55e9d050613427feb51b2baede58.jpg'),
(35, 'Lockout Tag out', '2', '', 'Lockout Tag out\r\nCourse outline\r\nThe course presents interactive instruction covering the following topical areas:\r\n? The Lockout/ Tag out Program\r\no Defining lockout/tagout\r\no Authorized and affected employees\r\no The written program\r\n? Hazardous Energy\r\no Forms of hazardous energy\r\no Energy risks\r\no Isolating devices\r\no Energy control devices\r\no Equipment differences\r\no Individual locks and keys\r\no Using tags\r\n? Lockout/Tag out Procedures\r\no Proper order of lockout/tagout steps\r\no Step one: preparation\r\no Step two: control the energy source\r\no Step three: isolate the equipment\r\no Step four: attach the lock and tag\r\no Step five: control stored energy\r\no Step six: verify zero energy state\r\n? Start-Up Procedures\r\no Proper order of startup steps\r\no Step one: preparation\r\no Step two: remove lockout device and tags\r\no Step three: notify affected employees', 'Sqswd', '881c4f2db93743e1f84920764f742164.png'),
(36, 'SDS', '2', '', 'SDS\r\nCourse outline\r\n? SDS INTRODUCTION\r\n? MSDS Information\r\n? Hazardous Chemical Risk Assessment (HCRA)\r\n? INFORMING OTHERS\r\n? HAZmat handling & management\r\n? Working With Hazmat\r\n? DETERMINING THE HAZARDS\r\n? Tips for Hazmat Employees\r\n? HAZMAT PROCUREMENT\r\n? HAZMAT STORAGE\r\n? Correct Method Of Chemical Storage\r\n? Conclusion', 'wec 232', '948301567a4d14c23998499f16ea5c05.jpg'),
(37, 'Permit to Work (PTW)', '1', '', 'Permit to Work (PTW)\r\nCourse Outlines\r\n• What is a Permit to Work • Activities/ Jobs that Require a PTW • Authorized Persons • PTW Procedures and Forms • Legal Background • Effective Implementation - Case Studies • Record Keeping\r\nDelegates will be required to undertake a short written assessment', '5fds4', 'fc35fa8421d53f6374ff37559080234d.jpg'),
(38, 'Riggers safety: Inspection Rigging Equipment & Hands Signals', '1', '', 'Riggers safety: Inspection Rigging Equipment & Hands Signals Training Course\r\nCourse out line\r\nThis course will provide an understanding and a practical application of the following:\r\nModule 1:\r\n? The Rigging Plan (Risk Management)\r\n? Load Control\r\n? The Rigging Triangle\r\n? Basic rigging hitches\r\n? Required PPE\r\n? Riggers duties & review of the standard\r\n? Hand signals and communication\r\n? Application & inspection of rigging hardware\r\n? Application & inspection of slings\r\n? Working with blocks\r\n? Wire rope clips and other terminations\r\n? Inspection of hardware\r\nModule 2: (Assessment):\r\n? Engineering Static’s – Basic understanding of force calculations for static conditions\r\n? Centre of Gravity – Determine the centre of gravity of complex shapes, using mathematical and practical methods in the field.\r\n? Lifting Points – Determining suitable lifting points on a load, and understand the design and testing requirements for lifting lugs\r\n? Tension in Slings – for non-symmetrical lifts\r\n? Ground Conditions – Importance of ground conditions for lifting operations, including distribution of the cranes load on the supporting surface', 'dzer423', '1ae419eb24a7a9cc8a57476977356f24.jpeg'),
(39, 'Hse visual inspection', '2', '', 'Hse visual inspection\r\nCourse outline\r\nInspection Basics\r\n? Types of inspections\r\n? The why and who of inspections\r\n? How frequent inspections should be done\r\n? What is the activity of an inspection?\r\n? What is the outcome?\r\n? Definitions\r\n? Review the Occupational Health and Safety Act - Section 9\r\n? OHS - Workplace Inspections\r\n? Workplace Hazard Classification\r\n? KPR Hazard Classification\r\n? Asbestos & Vermiculite\r\n? Wrap Up\r\nPre-Inspection Activity\r\n? Exercise\r\n? Plan the inspection route\r\n? Delegate team members\r\n? Obtain supplies\r\n? Familiarize yourself with the inspection checklist\r\n? Diagram or floor plan\r\n? Review information from previous inspection reports\r\n? Meet with supervisors prior to inspection\r\n? Gather information from management\r\n? Allow ample time for the inspection\r\n? Module review and quiz\r\nPerforming the Inspection\r\n? Wear appropriate personal protective equipment (PPE) in areas where applicable\r\n? Remain objective and make uninfluenced observations\r\n? Previous documentation by inspection teams will assist in current work inspections\r\n? Identify substandard actions and practices, your role is not to enforce and discipline\r\n? Clearly describe each hazard and its exact location\r\n? Draw attention to the presence of any immediate danger and take appropriate action\r\n? While inspecting equipment, ask operator to demonstrate if you are unfamiliar\r\n? Ask questions but do not unnecessarily disrupt work activities\r\n? Observe static (stop position) and dynamic (in motion) conditions of the item you are inspecting\r\n? If you are unable to clearly describe a particular situation take a photograph or draw a sketch\r\n? Look for new equipment, new workers, new processes, new products that may have been introduced to the workplace\r\n? Sample issues\r\n? Sample areas for inspection\r\n? Module review and quiz', 'aweasasxsas', 'edc5eb83a6749397f1d302227a092a80.jpg'),
(40, 'Working at Heights & Rescue Training ', '2', '', 'Working at Heights & Rescue Training Course Inspector\r\nCourse Outline:\r\n? Introduction\r\n? Problems Associated with Safe Working at Heights\r\n? Legislation\r\n? Employers Responsibility\r\n? Employees Responsibility\r\n? Risk Assessment\r\n? Safe Systems of Working\r\n? Passive Safety Systems\r\n? Restraint Systems\r\n? Fall Arrest Systems\r\n? Fall Arrest Equipment Introduction\r\n? Pre Use Inspection\r\n? Donning a Safety Harness\r\n? Safe Use of Associated Equipment\r\n? Anchorage Point Identification\r\n? Horizontal Safety Systems\r\n? Vertical Safety Systems\r\n? Temporary Safety Products\r\n? Maintenance & Checking of Equipment\r\n? Cleaning & Storage\r\n? Equipment selection and use\r\n? Anchor systems, selecting solid and reliable anchorage\r\n? Fall restraint systems, selection of equipment and correct use\r\n? Work positioning systems, selection of equipment and correct use\r\n? Fall arrest systems (avoidance)\r\n? Using energy absorbing lanyards\r\n? Rope management and house-keeping\r\n? Emergency plan\r\n? Fallen worker retrieval skills (hands-on rescue training)\r\n? Plenty of practical hands on training to ensure workers can be safe at height\r\n? Practical Examination & Review', '32ae4zdr', '2a6593e8feb83feeec036ac29b467469.jpg'),
(41, 'Scaffolding training institute training course ', '2', '', 'STI\r\nCourse Details\r\nThis course is designed for personnel who need to be\r\ntrained as a Competent Person in scaffolding. course\r\nincludes overview of the 25 different types of scaffolds\r\nin the OSHA regulations. The course consists of\r\nclassroom instruction, group participation and practical\r\nhands-on erection and dismantling of several types of\r\nframe, tube & coupler, and system scaffolds.\r\nRecommended for anyone required to inspect\r\nscaffolding or for anyone who assembles and uses\r\nscaffolding on a regular basis. This class is a\r\nprerequisite for the Scaffolding Train-the-Trainer\r\ncourse.\r\nPROGRAM TOPICS\r\n? Training and inspection for various scaffolding systems\r\no Frame, tube and coupler\r\no System type scaffolding\r\n? Review of OSHA scaffold regulations\r\n? Assembly procedures\r\n? Hands-on exercises\r\n? Final summary & assessment', 'xrferxf', 'cd0cbeda3f2960912ff9050c41369676.jpeg'),
(42, 'scaffolding competent person ', '1', '', 'Course Details\r\nThis course is designed for personnel who need to be\r\ntrained as a Competent Person in scaffolding. course\r\nincludes overview of the 25 different types of scaffolds\r\nin the OSHA regulations. The course consists of\r\nclassroom instruction, group participation and practical\r\nhands-on erection and dismantling of several types of\r\nframe, tube & coupler, and system scaffolds.\r\nRecommended for anyone required to inspect\r\nscaffolding or for anyone who assembles and uses\r\nscaffolding on a regular basis. This class is a\r\nprerequisite for the Scaffolding Train-the-Trainer\r\ncourse.\r\nPROGRAM TOPICS\r\n? Training and inspection for various scaffolding systems\r\no Frame, tube and coupler\r\no System type scaffolding\r\n? Review of OSHA scaffold regulations\r\n? Assembly procedures\r\n? Hands-on exercises\r\n? Final summary & assessment', '34frftc4', 'a716bebc500c313eabf2a0ed29507961.jpg'),
(43, 'FIRST AID  &CPR ', '2', '', 'CPR and First-Aid\r\nWith doctors and other qualified professionals available, why is it important for everyday people to learn about CPR and First-Aid? The truth is that, while a high-level medical professional is always the best recourse for a patient in need, it is often the first responders who are able to keep them in stable condition until help arrives. CPR and First-Aid training allows average people to respond to a wide assortment of common, everyday conditions making them an invaluable resource for on-the-spot emergencies. After a quick survey of the material covered by our course modules, you may be surprised at the number of topics we cover.\r\n\r\nCPR and First-Aid certification\r\nWe offer our CPR and First-Aid certification course as an option for those who want to expand their knowledge beyond the standard CPR or First-Aid training courses. The CPR and First-Aid certification program covers all of the necessary information and can be completed in as little as 25 minutes. While it may seem like a lot of information to cover in a short amount of time, the step-by-step instruction and helpful illustrations make the entire process a breeze.', 'wdasda', '5324e1b0fe4bfb4f54e06dc4113e9f1e.PNG'),
(44, 'IADC RIG PASS ', '2', '', '', 'ddasdasdx', '1738bf82f58d1aa551945a4d7f8e595b.jpg'),
(45, 'ISO 45001', '3', '', 'ISO 45001 with NASP HSE Diploma', 'scdxsadasdxa', '6643d6fb263d878870f43970e5e55ffa.jpg'),
(46, 'International Courses', '4', '', '<ul><li>NASP DIPLOMA</li><li>OSH 30H General Construction</li><li>Occupational Health(OH)</li><li>Accident Incident Investigation</li><li>Electrical Safety</li><li>Emergency Evacuation Training Course </li><li>Fire Fighting Training Course </li><li>Forklift Safety&nbsp; Hazard Identification, and Risk Assessment&nbsp; </li><li>Hazcom (Hazard Communication)&nbsp; </li><li>Lockout Tag out&nbsp;&nbsp;</li><li>SDS</li><li>HSE Visual Inspection&nbsp; </li><li>Working at Heights &amp; Rescue Training</li><li>Scaffolding Training Institute Training Course&nbsp; </li><li>First Aid &amp; CPR </li><li>IADC Rig Pass</li></ul>', 'weqwsdas', '9b8dac3b649718d464be8cfccd897b5e.jpg'),
(47, 'test course1', '2', '', '<p>test desc</p>', '1234ed', '4320a7c79a5d07c6a81336b90c792e7e.jpg');

-- --------------------------------------------------------

--
-- Table structure for table `exam`
--

CREATE TABLE `exam` (
  `exam_id` int(10) NOT NULL,
  `s_reg_no` varchar(90) NOT NULL,
  `qp_code` varchar(90) NOT NULL,
  `s_score` varchar(90) NOT NULL,
  `cutoff` varchar(90) NOT NULL,
  `xam_status` int(10) NOT NULL,
  `rem_attempt` int(10) NOT NULL,
  `xam_time_start` datetime NOT NULL,
  `xam_time_end` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `exam`
--

INSERT INTO `exam` (`exam_id`, `s_reg_no`, `qp_code`, `s_score`, `cutoff`, `xam_status`, `rem_attempt`, `xam_time_start`, `xam_time_end`) VALUES
(1, '20200512_010_MASS', 'AA2020', '4', '2.8', 1, 0, '2020-05-31 08:39:50', '2020-05-31 08:40:16'),
(2, '20200512_010_MASS', 'ACIN2020', '2', '1.4', 1, 0, '2020-05-31 09:06:32', '2020-05-31 09:06:42');

-- --------------------------------------------------------

--
-- Table structure for table `fees`
--

CREATE TABLE `fees` (
  `id` int(15) NOT NULL,
  `file` varchar(60) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `fees`
--

INSERT INTO `fees` (`id`, `file`) VALUES
(2, '2fe832cdb6cf3c93d46d19ed4ab04006.pdf');

-- --------------------------------------------------------

--
-- Table structure for table `home_slider`
--

CREATE TABLE `home_slider` (
  `slider_id` int(15) NOT NULL,
  `slider_name` varchar(60) NOT NULL,
  `slide_priority` int(15) NOT NULL,
  `slide_image` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `home_slider`
--

INSERT INTO `home_slider` (`slider_id`, `slider_name`, `slide_priority`, `slide_image`) VALUES
(3, 'FIRST AID TRAINING ', 3, '11122470296e0d7c62ee4cb2a1d1feb5.jpg'),
(4, 'C.S TRAINING ', 2, '46aa5aea671366172a7e61cb08ebc2ea.jpeg'),
(8, 'OSH 30 H General construction ', 1, '43144cc327da8b2862a9ddb7429970f8.jpeg'),
(9, 'rigger training ', 4, '8708fe067bd83c10d72a03c7a608c8f5.jpeg'),
(10, 'PTW Training ', 5, '72e78e042ff500cf975c7cdb2fadc79d.jpeg'),
(11, ' communication tower  safety', 7, '2f3368faff3630870db6933eb15e1f2b.PNG'),
(12, 'fire fighting ', 6, '2e8ef7d15434bfd911861ceb30c590bd.jpg'),
(13, 'HSE Diploma ', 8, '7f278bf45bb0deea7c410d1452b0dfd0.jpeg'),
(14, 'scaffold inspection ', 9, '0953e8acfdfe397e1a160a28a252a77a.jpeg'),
(15, 'rescue training ', 10, '');

-- --------------------------------------------------------

--
-- Table structure for table `idcard`
--

CREATE TABLE `idcard` (
  `card_id` int(10) NOT NULL,
  `st_id_regno` text NOT NULL,
  `st_id_pasport` varchar(80) NOT NULL,
  `st_id_name` text NOT NULL,
  `st_id_cert_name` text NOT NULL,
  `cert_id_file` text NOT NULL,
  `c_id_ins_date` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `idcard`
--

INSERT INTO `idcard` (`card_id`, `st_id_regno`, `st_id_pasport`, `st_id_name`, `st_id_cert_name`, `cert_id_file`, `c_id_ins_date`) VALUES
(4, 'MHC2004089', '125478986536', 'Anseb a', 'Authorized Gas Tester (AGT) ', 'hse_Id_8526_125478986536.pdf', '2020-04-13'),
(68, 'MHC20040811', '125478986534', 'sus mid', 'Riggers safety: Inspection Rigging Equipment & Hands Signals', 'hse_Id_9581_125478986534.pdf', '2020-04-23'),
(69, '20200512_010_MASS', '125478986536', 'Anseb a', 'Banksman training', 'hse_Id_6377_125478986536.pdf', '2020-05-30'),
(70, '20200512_010_MASS', '125478986536', 'Anseb a', 'Crane Operator Competency Training Course', 'hse_Id_4937_125478986536.pdf', '2020-05-30');

-- --------------------------------------------------------

--
-- Table structure for table `meeting`
--

CREATE TABLE `meeting` (
  `meeting_id` int(10) NOT NULL,
  `meeting_title` text NOT NULL,
  `meeting_course` int(10) NOT NULL,
  `meeting_date` date NOT NULL,
  `meeting_time` time NOT NULL,
  `meeting_link` text NOT NULL,
  `meeting_viewstat` int(10) NOT NULL,
  `meeting_ins_date` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `meeting`
--

INSERT INTO `meeting` (`meeting_id`, `meeting_title`, `meeting_course`, `meeting_date`, `meeting_time`, `meeting_link`, `meeting_viewstat`, `meeting_ins_date`) VALUES
(2, 'zoom meeting 1', 35, '2020-06-18', '12:00:00', 'sasdasdasdasdasd', 1, '2020-06-19'),
(3, 'zoom meeting 2', 29, '2020-06-17', '14:00:00', 'fyfduwdgiehdopediweasda', 1, '2020-06-19');

-- --------------------------------------------------------

--
-- Table structure for table `meterials`
--

CREATE TABLE `meterials` (
  `module_id` int(10) NOT NULL,
  `module_name` text NOT NULL,
  `module_no` varchar(90) NOT NULL,
  `module_course` int(10) NOT NULL,
  `module_file` text NOT NULL,
  `module_video` text NOT NULL,
  `module_view_status` int(10) NOT NULL,
  `module_status` int(10) NOT NULL,
  `module_date` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `meterials`
--

INSERT INTO `meterials` (`module_id`, `module_name`, `module_no`, `module_course`, `module_file`, `module_video`, `module_view_status`, `module_status`, `module_date`) VALUES
(1, 'module 1', '1', 17, 'e4f95a3e9dd545aca9df3439045a1720.pdf', 'b7bdd1b006d60d21da0021715e350f63.mp4', 1, 1, '2020-05-30'),
(3, 'module 11', '1', 30, 'edab1da5f5929a9f990d125a902bebb9.pdf', '', 1, 1, '2020-04-15'),
(4, 'module 2', '2', 30, '20704ef70a0ef62b5bc3614b44e01831.pdf', '', 1, 1, '2020-04-15'),
(5, 'test module', '123123131', 18, '0e522290ebe55616948d15907aadc308.pdf', '', 1, 1, '2020-05-30'),
(6, 'test module1', '444234', 18, '', '', 1, 1, '2020-05-30'),
(7, 'module 124212', '23', 18, '1334bac15afe8236a46b417bbf7c25ba.pdf', '15775e030cb44402c4e2028e521236bd.mp4', 1, 1, '2020-05-30'),
(8, 'module 2wqe', '21132', 18, 'b8b4f9d0bba5eb9c7d71ae62184fedac.pdf', '6dbd723751bfb41407131e2ceb07686f.mp4', 1, 1, '2020-05-30'),
(9, 'dqweq', '32114', 21, 'd46772bddf65524db38deb11c67d0330.pdf', '', 1, 1, '2020-05-30'),
(10, 'qweqwdqwd', '232133', 19, '647edbd6a71796f615660faccf8420f6.pdf', '', 1, 1, '2020-05-30'),
(11, 'edwedwdwd', '231212', 17, '391aa517edf62821b0fa661fb2ccc044.pdf', '', 1, 1, '2020-05-30'),
(12, 'dsdasd', '23123', 18, '9a33cc93baa8aabcd5059655b7754dd8.pdf', '', 1, 1, '2020-05-30'),
(13, 'sdasd', '23123', 20, '', '', 1, 1, '2020-05-30'),
(14, 'test modulesdqwdasd', '232131233', 23, '4f8fb37be7a59d7f31be99f63fc35f2e.pdf', 'e0ff82e6888421aca3f82f708b906794.mp4', 1, 1, '2020-05-30'),
(15, 'sdsadas', '12322', 19, 'edcb51db516be0053c9190764c5e5cf9.pdf', '5465e081f5fd52bded71d5ef1f415198.mp4', 1, 1, '2020-05-30');

-- --------------------------------------------------------

--
-- Table structure for table `offer_banner`
--

CREATE TABLE `offer_banner` (
  `ban_id` int(15) NOT NULL,
  `ban_name` varchar(60) NOT NULL,
  `ban_image` varchar(80) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `offer_banner`
--

INSERT INTO `offer_banner` (`ban_id`, `ban_name`, `ban_image`) VALUES
(1, 'we are committed to providing for all our clients  The best ', 'f87b52f1e42e169583c7541da4394026.jpg');

-- --------------------------------------------------------

--
-- Table structure for table `qpaper`
--

CREATE TABLE `qpaper` (
  `qpaper_id` int(11) NOT NULL,
  `qpaper_code` varchar(90) NOT NULL,
  `qpaper_exam_name` text NOT NULL,
  `qpaper_course` varchar(90) NOT NULL,
  `qpaper_status` int(10) NOT NULL,
  `qpaper_date` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `qpaper`
--

INSERT INTO `qpaper` (`qpaper_id`, `qpaper_code`, `qpaper_exam_name`, `qpaper_course`, `qpaper_status`, `qpaper_date`) VALUES
(1, 'AB2020', 'Final Hse Exam 2020', '17', 1, '2020-04-17'),
(3, 'AA2020', 'Final MASS Exam 2020', '18', 1, '2020-04-17'),
(4, 'ES2020', 'HSE online exam for Electrical safety 2020', '28', 1, '2020-04-18'),
(5, 'ACIN2020', 'Accident Incident Exam 2020', '27', 1, '2020-05-31');

-- --------------------------------------------------------

--
-- Table structure for table `questions`
--

CREATE TABLE `questions` (
  `questions_id` int(10) NOT NULL,
  `questions_xam` text NOT NULL,
  `questions_qcode` varchar(90) NOT NULL,
  `questions_course` varchar(90) NOT NULL,
  `questions_question` text NOT NULL,
  `Option_A` text NOT NULL,
  `Option_B` text NOT NULL,
  `Option_C` text NOT NULL,
  `Option_D` text NOT NULL,
  `questions_answer` varchar(90) NOT NULL,
  `questions_status` int(10) NOT NULL,
  `questions_date` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `questions`
--

INSERT INTO `questions` (`questions_id`, `questions_xam`, `questions_qcode`, `questions_course`, `questions_question`, `Option_A`, `Option_B`, `Option_C`, `Option_D`, `questions_answer`, `questions_status`, `questions_date`) VALUES
(2, 'Final MASS Exam 2020', 'AA2020', '18', 'who invent gravity', 'Isac nuton', 'chalse babache', 'albert Einstien', 'stephen hawking', 'Option_A', 1, '2020-04-18'),
(3, 'HSE online exam for Electrical safety 2020', 'ES2020', '28', 'who is the us president ', 'Barak Obama', 'Donald Trump', 'George Bush', 'Bill chlinton', 'Option_B', 1, '2020-04-20'),
(4, 'HSE online exam for Electrical safety 2020', 'ES2020', '28', 'capital of india', 'kolkata', 'kochi', 'delhi', 'mumbai', 'Option_C', 1, '2020-04-20'),
(5, 'HSE online exam for Electrical safety 2020', 'ES2020', '28', 'capital of kerala', 'kochi', 'thrissur', 'trivandrum', 'kannur', 'Option_C', 1, '2020-04-20'),
(6, 'HSE online exam for Electrical safety 2020', 'ES2020', '28', 'we are living in a ', '2D world', '3D world', '1D world', '4D world', 'Option_B', 1, '2020-04-20'),
(7, 'Final MASS Exam 2020', 'AA2020', '18', 'why  we always keep sneez on the winder time or it is cold climate. quick answer should give and take option from your pic', 'because of cold', 'because of colda', 'because of coldc', 'because of colde', 'Option_A', 1, '2020-05-04'),
(8, 'Accident Incident Exam 2020', 'ACIN2020', '27', 'apple is a', 'tree', 'fruit', 'flower', 'non', 'Option_B', 1, '2020-05-31');

-- --------------------------------------------------------

--
-- Table structure for table `service`
--

CREATE TABLE `service` (
  `service_id` int(10) NOT NULL,
  `service_name` varchar(80) NOT NULL,
  `service_desc` text NOT NULL,
  `service_image` varchar(90) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `service`
--

INSERT INTO `service` (`service_id`, `service_name`, `service_desc`, `service_image`) VALUES
(2, 'confined space inspection, third party C.S  safety design and gas testing ', 'Mass HSE consultant provide supervision and management of confined space access for third parties, including:\r\n\r\nThe development of suitable safe systems of work in the form of a detailed risk assessment and method statement developed by an Institute of Occupational Safety and Health (IOSH) qualified project manager.\r\nSpecification and supply of all safety critical equipment including escape sets, air monitors, harnesses and winches.\r\nMobilisation of confined space and confined space rescue teams.', '613ce6fa171f2e8956680058991ca1f3.JPG'),
(4, 'Heavy equipment inspection & third party certification ', 'Why should you hire MASS?\r\nMASS  should become your partner for machinery inspections because we do nothing else than heavy equipment inspections every day. Certainly there are other companies available. But with more than 600 inspected machines each year we are proud to be the major player in this sector in Europe. Check out a selection of our valued customers. We offer machine expertise, consulting, valuation and remote service support.\r\nEarthmover Inspections\r\nOur engineers have many years of experience. Most of them have a background as technicians with a Caterpillar-, Komatsu-, or a Crane distributor. Some of our inspectors still repair machines and trucks. If you need a quality check for a backhoe loader, a used wheel loader or a crawler excavator we can help because it is our daily business.\r\n\r\nTrucks and Concrete Equipment\r\nHere you can find the right inspector for used trucks. Mevas technicians know about road trucks, tractor heads, trucks with cranes and trucks for ready-mix concrete. No matter what brand you buy, we can inspect Mercedes, MAN, Iveco, Scania, Renault or any other make. We are qualified to inspect concrete pumps of Schwing, Liebherr, Stetter, Putzmeister or Sanny.\r\n\r\nQuarry and Mining Equipment\r\nWe love the big stuff and it is a pleasure for our specialists to inspect machinery for quarry and mining. We have no fear to perform qualified inspections for big Komatsu or Caterpillar trucks. We can offer a profound check of blast hole rock drills and of course also for compressors and large generators.\r\n\r\nCrusher and Screens\r\nVery specific and often with hidden problems. Crushers and screening equipment is difficult to evaluate. Since we are now over 10 years in the machinery inspection business we can pretend having many processing plants inspected. Cone crushers, jaw crushers, impact crushers and various screens have been inspected by our specialists.\r\n\r\nFoundation Engineering Machines\r\nThe inspection of used rotary drilling rigs, diaphragm wall equipment, piling machines and anchor drilling rigs is a very difficult job. We are not the engineering specialists but we can look back to inspection of some larger machines. Evaluation of these engineering machines can be offered and would be performed by the Mevas company owner.\r\n\r\nLifting Equipment Inspections\r\nSome inspectors in the Mevas network have been trained to perform safety and quality inspections for cranes. Checking out an LMB or measuring the play in the swing bearing of a crane is a procedure the technicians are used to do. We inspect reach stackers and fork-lifts from 1 to 100 ton lift capacity.\r\n\r\nSpecializing in CAT & Volvo\r\nWe are specialized in Caterpillar and Volvo equipment. In most areas we can offer qualified inspections including reading of internal machine computers. We can gain access to the so-called ECM and store a CAT-PSR or a Volvo-Matris. For Caterpillar we offer remote-service.\r\n\r\nTÜV approved engineers\r\nSome of our engineers are approved and certified by TÜV Germany for machine safety inspections or statutory inspections. Appraisal and valuation of machines is another part of our business.\r\n\r\nSpecial Equipment Inspections\r\nWe have some experience with special equipment. Some inspections have been done in the past on forestry equipment and blast hole rock drills for quarry and mining. Due our long experience in heavy machinery we are even able to offer inspections for used drill rigs and piling machines.\r\n\r\n', 'b72890ecc0646e5b40bb49a8d876d252.jpg'),
(5, 'Scaffold third party inspection ', 'we are fulfilling the varied requirements of clients by offering Third Party Inspection For Scaffold. To maintain efficiency, promptness and timely execution, our professionals use the latest tools while imparting these inspection services in accordance with the global set standards. As per the different needs of the clients, we provide these inspection services in customized solution at most genuine rates. Offered inspection services are appreciated due to their excellent work quality, reliability, hassle free management, flexibility, affordable rates and client focused approach.\r\n\r\nWe are having a approved and certify team for scaffold load test certification.\r\nWe provide certificates for scaffold inspection and load bearing capacity.', '3dcea4226e991ae4fe258ba290174378.jpg'),
(7, 'Fire System & Fire Extinguisher Inspection Services', 'well known for their expertise in all things related to fire systems, including fire extinguisher inspection requirements. MASS employs experts in the industry that will design your fire alarm system with AutoCAD software, adapted to your unique building layout.\r\n\r\nAs part of your unique fire alarm system design, we determine the most appropriate Class of portable fire extinguisher required for your environment, and ensure proper placement for maximum fire protection. All fire extinguisher services adhere to NFPA10, which details the requirements for portable fire extinguishers to ensure optimum performance in time of need.\r\n\r\nOur knowledge of the industry including all regulatory code requirements combined with our in-house design engineers and technicians make MASS  the only fire system expert you need to call. We provide full service fire and safety alarm and monitoring services, including licensed portable fire extinguisher inspection services.\r\n\r\nWe can provide your initial inspection and testing after equipment installation, annual fire alarm inspections, along with the required annual fire extinguisher inspections.', 'd45e259730e6ce00d9db2c4e7a00365b.jpg'),
(8, 'GAS DETECTOR CALIBRATION & MAINTENANCE', 'we provide maintenance and on site calibration services in Kuwait,Egypt and in specific locations abroad. We also propose faster and cheaper « return to workshop » periodical checkings. In order to simplify the process.\r\nA gas monitor calibration consists of setting air zero grade and sensitivity (span). It is required to perform it regularly for both portable gas detectors and fixed gas detection systems. \r\n\r\nAir zero grade setting\r\nThe « air zero grade setting » of a sensor sets ambient air as reference value. It is therefore essential that this « reference air » is pure in order to avoid false measurements. In case of any doubt, it is recommended to use an « air zero grade » cylinder (synthetic air) rather than ambient air.\r\n\r\nThis is all the more important for CO2 detectors (carbon dioxide) as it is naturally present in ambient air (about 400 ppm) and will distort CO2 measured values. For this gas, the « zero » shall be set with an « air zero grade » cylinder.\r\n\r\nSensitivity setup (calibration) \r\nThe sensitivity setting (gas detector calibration) shall ideally be done with a calibration gas cylinder of the targeted gas. The concentration has to be set between 20 and 80% of the measuring range while making sure of being able to activate every gas detectors alarm thresholds.\r\n\r\nIn some cases there is no calibration gas cylinders (some gases are not available for sale). Thus using an interfering gas with precaution is therefore recommended.\r\n\r\nGas detector calibration certificate \r\nA calibration certificate must be edited after any calibration of a gas detector. This certificate clearly indicates references and features of the device, each sensor measuring range, batch numbers and validity date of used cylinders.\r\n\r\nThis calibration certificate must also contain the calibration date and its validity period (next calibration date). GazDetect provides calibration certificates for all monitoring devices: portable multi gas detectors, portable single gas detectors, and fixed gas monitors.\r\n\r\nBUMP TEST\r\nPerforming a bump test is highly recommended in order to control the proper operation of any device between two calibrations or before entering confined spaces.\r\n\r\nThis gas detector check is made by injecting a known concentration of gas to confirm the proper operation of the sensor (response time to the gas) and the alarms activation on the device.\r\n\r\nCALIBRATION GAS\r\nFor maintenance, periodical checkings and calibration of gas detectors we offer a wide range of classic or customizable gaseous mixtures in lightweight disposable single use cylinders. Our available offer gathers a full range of gases from classic LEL binary mixtures up to complex and multiple mixtures used in laboratories with very low level concentrations.\r\n\r\nGaseous mixtures are gravimetrically mixed under the requirements of the ISO6142 standard. They ensure accuracy, optimal stability and maximal shelf life.', 'f4111c0ab39fb8ea89f16340616a1781.jpg');

-- --------------------------------------------------------

--
-- Table structure for table `students`
--

CREATE TABLE `students` (
  `student_id` int(15) NOT NULL,
  `student_civil_id` varchar(20) NOT NULL,
  `pass_no` varchar(80) NOT NULL,
  `first_name` varchar(60) NOT NULL,
  `last_name` varchar(60) NOT NULL,
  `gender` varchar(60) NOT NULL,
  `dob` date NOT NULL,
  `email` varchar(60) NOT NULL,
  `phno` varchar(60) NOT NULL,
  `qualification` varchar(60) NOT NULL,
  `p_course` varchar(60) NOT NULL,
  `picture` varchar(70) NOT NULL,
  `student_reg` text NOT NULL,
  `student_pwd` varchar(60) NOT NULL,
  `ins_date` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `students`
--

INSERT INTO `students` (`student_id`, `student_civil_id`, `pass_no`, `first_name`, `last_name`, `gender`, `dob`, `email`, `phno`, `qualification`, `p_course`, `picture`, `student_reg`, `student_pwd`, `ins_date`) VALUES
(10, '125478986532', '125478986536', 'Anseb', 'a', 'Male', '1995-05-11', 'anzu@a.com', '9747738699', 'Btech', '29,35', '3e53f3586ef2a90d01035ab565cc877e.jpg', '20200512_010_MASS', '123456', '2020-04-08'),
(18, '123456789012', 'IND123E01', 'Test', 'Member', 'Male', '1997-05-07', 'testmember@gmail.com', '9001010101', 'BCA', '21', '76f2e7b2d341ea5e835717ede60ee919.jpg', '20200512_011_MASS', '123456', '2020-05-12'),
(19, '416321854682', 'IND7D1365', 'Student', 'a', 'Male', '1994-11-05', 'stdenta@hmail.com', '26439915283', 'BCA', '28', '0387a036185511bdb7aac8a998ecf5af.jpg', '20200512_012_MASS', '123456', '2020-05-12'),
(20, '192432614239', 'IND23164', 'anseb', 'testing', 'Male', '1996-11-03', 'ansebali2@gmail.com', '9747738699', 'BCA', '17', 'c84d4d8d2cef88169cd165cbb060c0a8.png', 'MHC20052520', 'anseb328', '2020-05-25');

-- --------------------------------------------------------

--
-- Table structure for table `trainers`
--

CREATE TABLE `trainers` (
  `trainer_id` int(15) NOT NULL,
  `trainer_name` varchar(60) NOT NULL,
  `trainer_mailid` varchar(60) NOT NULL,
  `trainer_gender` varchar(60) NOT NULL,
  `trainer_dob` date NOT NULL,
  `trainer_phone` varchar(60) NOT NULL,
  `trainer_password` varchar(60) NOT NULL,
  `trainer_qualification` varchar(60) NOT NULL,
  `trainer_pic` varchar(90) NOT NULL,
  `trainer_teaching1` varchar(90) NOT NULL,
  `trainer_teaching2` varchar(90) NOT NULL,
  `trainer_teaching3` varchar(90) NOT NULL,
  `ins_date` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `trainers`
--

INSERT INTO `trainers` (`trainer_id`, `trainer_name`, `trainer_mailid`, `trainer_gender`, `trainer_dob`, `trainer_phone`, `trainer_password`, `trainer_qualification`, `trainer_pic`, `trainer_teaching1`, `trainer_teaching2`, `trainer_teaching3`, `ins_date`) VALUES
(11, 'ram', 'sdfsd@132614.com', 'Male', '2020-02-10', '97477354454', '123456', 'BCA', '1819bf713709345220d60ea2e5644c5c.jpeg', '22', '24;behavior-based safety BBS', '28;Electrical safety', '2020-02-29'),
(12, 'shef', 'sheffinjoy@gmail.com', 'Male', '1995-08-05', '34564663', '123456', 'BCA', '60c2d99c5e4f8f204c273eaeee4cc7b2.png', '30', '', '', '2020-02-29');

-- --------------------------------------------------------

--
-- Table structure for table `training_req`
--

CREATE TABLE `training_req` (
  `t_id` int(10) NOT NULL,
  `t_s_regno` varchar(80) NOT NULL,
  `t_s_name` varchar(80) NOT NULL,
  `t_s_course` varchar(80) NOT NULL,
  `t_s_score` varchar(80) NOT NULL,
  `t_s_adrs` text NOT NULL,
  `t_s_city` varchar(80) NOT NULL,
  `t_s_state` varchar(80) NOT NULL,
  `t_s_pincod` varchar(80) NOT NULL,
  `t_s_country` varchar(80) NOT NULL,
  `t_s_status` varchar(10) NOT NULL,
  `t_s_date` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Indexes for dumped tables
--

--
-- Indexes for table `admin_user`
--
ALTER TABLE `admin_user`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `cart`
--
ALTER TABLE `cart`
  ADD PRIMARY KEY (`cart_id`);

--
-- Indexes for table `category`
--
ALTER TABLE `category`
  ADD PRIMARY KEY (`cat_id`);

--
-- Indexes for table `certification`
--
ALTER TABLE `certification`
  ADD PRIMARY KEY (`cert_id`);

--
-- Indexes for table `checkouts`
--
ALTER TABLE `checkouts`
  ADD PRIMARY KEY (`checkouts_id`);

--
-- Indexes for table `college`
--
ALTER TABLE `college`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `company`
--
ALTER TABLE `company`
  ADD PRIMARY KEY (`company_id`);

--
-- Indexes for table `company_info`
--
ALTER TABLE `company_info`
  ADD PRIMARY KEY (`company_info_id`);

--
-- Indexes for table `coupon`
--
ALTER TABLE `coupon`
  ADD PRIMARY KEY (`coupon_id`);

--
-- Indexes for table `course`
--
ALTER TABLE `course`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `exam`
--
ALTER TABLE `exam`
  ADD PRIMARY KEY (`exam_id`);

--
-- Indexes for table `fees`
--
ALTER TABLE `fees`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `home_slider`
--
ALTER TABLE `home_slider`
  ADD PRIMARY KEY (`slider_id`);

--
-- Indexes for table `idcard`
--
ALTER TABLE `idcard`
  ADD PRIMARY KEY (`card_id`);

--
-- Indexes for table `meeting`
--
ALTER TABLE `meeting`
  ADD PRIMARY KEY (`meeting_id`);

--
-- Indexes for table `meterials`
--
ALTER TABLE `meterials`
  ADD PRIMARY KEY (`module_id`);

--
-- Indexes for table `offer_banner`
--
ALTER TABLE `offer_banner`
  ADD PRIMARY KEY (`ban_id`);

--
-- Indexes for table `qpaper`
--
ALTER TABLE `qpaper`
  ADD PRIMARY KEY (`qpaper_id`);

--
-- Indexes for table `questions`
--
ALTER TABLE `questions`
  ADD PRIMARY KEY (`questions_id`);

--
-- Indexes for table `service`
--
ALTER TABLE `service`
  ADD PRIMARY KEY (`service_id`);

--
-- Indexes for table `students`
--
ALTER TABLE `students`
  ADD PRIMARY KEY (`student_id`);

--
-- Indexes for table `trainers`
--
ALTER TABLE `trainers`
  ADD PRIMARY KEY (`trainer_id`);

--
-- Indexes for table `training_req`
--
ALTER TABLE `training_req`
  ADD PRIMARY KEY (`t_id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `admin_user`
--
ALTER TABLE `admin_user`
  MODIFY `id` int(12) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `cart`
--
ALTER TABLE `cart`
  MODIFY `cart_id` int(12) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `category`
--
ALTER TABLE `category`
  MODIFY `cat_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `certification`
--
ALTER TABLE `certification`
  MODIFY `cert_id` int(15) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `checkouts`
--
ALTER TABLE `checkouts`
  MODIFY `checkouts_id` int(10) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `college`
--
ALTER TABLE `college`
  MODIFY `id` int(15) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=15;

--
-- AUTO_INCREMENT for table `company`
--
ALTER TABLE `company`
  MODIFY `company_id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;

--
-- AUTO_INCREMENT for table `company_info`
--
ALTER TABLE `company_info`
  MODIFY `company_info_id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `coupon`
--
ALTER TABLE `coupon`
  MODIFY `coupon_id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `course`
--
ALTER TABLE `course`
  MODIFY `id` int(15) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=48;

--
-- AUTO_INCREMENT for table `exam`
--
ALTER TABLE `exam`
  MODIFY `exam_id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `fees`
--
ALTER TABLE `fees`
  MODIFY `id` int(15) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `home_slider`
--
ALTER TABLE `home_slider`
  MODIFY `slider_id` int(15) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=16;

--
-- AUTO_INCREMENT for table `idcard`
--
ALTER TABLE `idcard`
  MODIFY `card_id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=71;

--
-- AUTO_INCREMENT for table `meeting`
--
ALTER TABLE `meeting`
  MODIFY `meeting_id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `meterials`
--
ALTER TABLE `meterials`
  MODIFY `module_id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=16;

--
-- AUTO_INCREMENT for table `offer_banner`
--
ALTER TABLE `offer_banner`
  MODIFY `ban_id` int(15) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `qpaper`
--
ALTER TABLE `qpaper`
  MODIFY `qpaper_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `questions`
--
ALTER TABLE `questions`
  MODIFY `questions_id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT for table `service`
--
ALTER TABLE `service`
  MODIFY `service_id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;

--
-- AUTO_INCREMENT for table `students`
--
ALTER TABLE `students`
  MODIFY `student_id` int(15) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=21;

--
-- AUTO_INCREMENT for table `trainers`
--
ALTER TABLE `trainers`
  MODIFY `trainer_id` int(15) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;

--
-- AUTO_INCREMENT for table `training_req`
--
ALTER TABLE `training_req`
  MODIFY `t_id` int(10) NOT NULL AUTO_INCREMENT;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
