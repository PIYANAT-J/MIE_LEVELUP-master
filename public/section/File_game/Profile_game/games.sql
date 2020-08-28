-- phpMyAdmin SQL Dump
-- version 4.9.5
-- https://www.phpmyadmin.net/
--
-- Host: localhost
-- Generation Time: 27 ส.ค. 2020 เมื่อ 11:25 PM
-- เวอร์ชันของเซิร์ฟเวอร์: 5.7.26-29-log
-- PHP Version: 7.3.20

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `db2dnrkn6qbdk5`
--

-- --------------------------------------------------------

--
-- โครงสร้างตาราง `games`
--

CREATE TABLE `games` (
  `GAME_ID` bigint(20) UNSIGNED NOT NULL,
  `GAME_NAME` varchar(191) CHARACTER SET utf8 COLLATE utf8_unicode_ci NOT NULL,
  `GAME_IMG_PROFILE` varchar(191) CHARACTER SET utf8 COLLATE utf8_unicode_ci NOT NULL,
  `GAME_DESCRIPTION` text CHARACTER SET utf8 COLLATE utf8_unicode_ci,
  `GAME_DESCRIPTION_FULL` text CHARACTER SET utf8 COLLATE utf8_unicode_ci,
  `GAME_STATUS` set('อนุมัติ','ไม่อนุมัติ','รออนุมัติ') CHARACTER SET utf8 COLLATE utf8_unicode_ci NOT NULL DEFAULT 'รออนุมัติ',
  `GAME_DATE` timestamp NOT NULL,
  `GAME_EDIT_DATE` timestamp NULL DEFAULT NULL,
  `GAME_APPROVE_DATE` timestamp NULL DEFAULT NULL,
  `GAME_FILE` varchar(191) CHARACTER SET utf8 COLLATE utf8_unicode_ci NOT NULL,
  `GAME_SIZE` varchar(191) CHARACTER SET utf8 COLLATE utf8_unicode_ci DEFAULT NULL,
  `GAME_VDO_LINK` varchar(191) CHARACTER SET utf8 COLLATE utf8_unicode_ci DEFAULT NULL,
  `GAME_TYPE` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `RATED_ESRB` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `RATED_B_L` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `USER_ID` int(11) NOT NULL,
  `USER_EMAIL` varchar(191) CHARACTER SET utf8 COLLATE utf8_unicode_ci NOT NULL,
  `ADMIN_NAME` varchar(191) CHARACTER SET utf8 COLLATE utf8_unicode_ci DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- dump ตาราง `games`
--

INSERT INTO `games` (`GAME_ID`, `GAME_NAME`, `GAME_IMG_PROFILE`, `GAME_DESCRIPTION`, `GAME_DESCRIPTION_FULL`, `GAME_STATUS`, `GAME_DATE`, `GAME_EDIT_DATE`, `GAME_APPROVE_DATE`, `GAME_FILE`, `GAME_SIZE`, `GAME_VDO_LINK`, `GAME_TYPE`, `RATED_ESRB`, `RATED_B_L`, `USER_ID`, `USER_EMAIL`, `ADMIN_NAME`) VALUES
(1, 'ForzaHorizon4', 'GAME_IMG_PROFILE_1595564395.png', 'Forza Horizon 4 เป็นวิดีโอเกมแข่งรถ 2018 พัฒนาโดย Playground Games และเผยแพร่โดย Microsoft Studios เปิดตัวเมื่อวันที่ 2 ตุลาคม 2018', 'Forza Horizon 4 เป็นวิดีโอเกมแข่งรถ 2018 พัฒนาโดย Playground Games และเผยแพร่โดย Microsoft Studios เปิดตัวเมื่อวันที่ 2 ตุลาคม 2018 บน Xbox One และ Microsoft Windows หลังจากประกาศในการประชุม E3 2018 ของ Xbox เกมดังกล่าวตั้งอยู่ในพื้นที่สมมติของเกาะบริเตนใหญ่', 'อนุมัติ', '2020-07-24 11:15:20', NULL, '2020-07-24 14:16:59', 'GAME_FILE_1595564395.zip', '1.34 KB', 'https://www.youtube.com/embed/nONSyrNaG6w', 'Racing', 'RatingPending', 'Discrimination', 6, 'Devepol-2@Test.com', 'Admin-สมคิด'),
(2, 'SuperMash', 'GAME_IMG_PROFILE_1595564717.png', 'SuperMash คือเกมที่สร้างเกมได้ ผสานเกม JRPG เกมแพลตฟอร์ม เกมแนว Metrovania เกมลอบทำภารกิจ และเกมแอคชั่นผจญภัยเข้าด้วยกันเพื่อสร้างเกมแนวใหม่ไม่ซ้ำใคร', 'SuperMash คือเกมที่สร้างเกมได้ ผสานเกม JRPG เกมแพลตฟอร์ม เกมแนว Metrovania เกมลอบทำภารกิจ และเกมแอคชั่นผจญภัยเข้าด้วยกันเพื่อสร้างเกมแนวใหม่ไม่ซ้ำใคร แล้วท้าให้เพื่อนๆ มาลองเล่นให้ผ่านเลย', 'อนุมัติ', '2020-07-24 11:19:55', NULL, '2020-07-24 14:16:54', 'GAME_FILE_1595564717.zip', '1.34 KB', 'https://www.youtube.com/embed/oBWINuhyt80', 'Console', 'RatingPending', 'Discrimination', 6, 'Devepol-2@Test.com', 'Admin-สมคิด'),
(3, 'FORTNITE', 'GAME_IMG_PROFILE_1595566289.png', 'Fortnite เป็นวิดีโอเกมออนไลน์ที่เปิดตัวครั้งแรกใน พ.ศ. 2560 และพัฒนาโดย อีพิกเกมส์ (Epic Games) โดยให้บริการเป็นชุดซอฟต์แวร์แยกต่างหาก', 'Fortnite เป็นวิดีโอเกมออนไลน์ที่เปิดตัวครั้งแรกใน พ.ศ. 2560 และพัฒนาโดย อีพิกเกมส์ (Epic Games) โดยให้บริการเป็นชุดซอฟต์แวร์แยกต่างหากที่มีโหมดเกมที่แตกต่างกันซึ่งจะมีส่วนร่วมในเกมเพลย์และเอนจินเกม โหมดเกมยังรวมถึง ฟอร์ตไนต์: เซฟเดอะเวิลด์ วิดีโอเกมโหมดโคออฟแนวยิง-เอาชีวิตรอด สำหรับผู้เล่นสี่คนเพื่อต่อสู้กับสิ่งมีชีวิตที่เหมือนซอมบีและปกป้องวัตถุที่มีป้อมปราการที่พวกเขาสามารถสร้างได้ และ ฟอร์ตไนต์: แบตเทิลรอยัล วิดีโอเกมแนวแบตเทิลรอยัล‎เล่นฟรีเพื่อเล่นกับผู้เล่นที่มีถึง 100 คนซึ่งต้องต่อสู้เพื่อเป็นคนสุดท้าย ทั้งสองโหมดเกมได้เปิดตัวใน พ.ศ. 2560 ในฐานะวิดีโอเกมระหว่างการพัฒนา โดยภาค เซฟเดอะเวิลด์ จะให้บริการเฉพาะสำหรับ ไมโครซอฟท์ วินโดวส์ โอเอสเทน เพลย์สเตชัน 4 และเอกซ์บอกซ์ วัน ขณะที่ แบตเทิลรอยัล ได้รับการเปิดตัวสำหรับแพลตฟอร์มนอกเหนือจากนินเท็นโดสวิตช์ ไอโอเอส และแอนดรอยด์', 'อนุมัติ', '2020-07-24 11:25:17', NULL, '2020-07-24 14:16:49', 'GAME_FILE_1595566289.zip', '1.34 KB', 'https://www.youtube.com/embed/9FCRaSwU3W8', 'FPS', 'Teen', 'Violence', 6, 'Devepol-2@Test.com', 'Admin-สมคิด'),
(4, 'RagnarokOnline', 'GAME_IMG_PROFILE_1595566491.png', 'Ragnarok Online : RO เป็นเกม MMORPG มุมมองบุคคลที่สามจากด้านเฉียงบน ระบบกึ่งสามมิติ (ฉากเป็นภาพสามมิติ แต่ตัวละครและศัตรูเป็นภาพสองมิติ)', 'Ragnarok Online : RO เป็นเกม MMORPG มุมมองบุคคลที่สามจากด้านเฉียงบน ระบบกึ่งสามมิติ (ฉากเป็นภาพสามมิติ แต่ตัวละครและศัตรูเป็นภาพสองมิติ) ที่ถูกพัฒนาขึ้นโดยบริษัท กราวิตี้ คอร์ปอเรชั่น ประเทศเกาหลีใต้ เริ่มทดสอบระบบเซิร์ฟเวอร์วันที่ 1 พฤศจิกายน 2544 เป็นระยะเวลา 9 เดือน ก่อนเปิดให้บริการเป็นครั้งแรกในเกาหลีใต้เมื่อ 31 สิงหาคม พ.ศ. 2545 โดยเนื้อหาส่วนใหญ่มาจากการ์ตูนเรื่อง RAGNAROK ภูตเทพวิบัติ ซึ่งประพันธ์โดย อี มย็อง-จิน (Lee Myung-Jin) สำหรับในประเทศไทยเปิดให้บริการวันที่ 16 กันยายน 2545 แบบโคลสเบต้าจำนวน 3 เซิร์ฟเวอร์ได้แก่ เคออส โลกิ และไอริส วันที่ 25 ตุลาคม 2545 เปิดบริการแบบโอเพ่นเบต้าทั้งหมด 6 เซิร์ฟเวอร์ได้แก่ เคออส โลกิ ไอริส ลิเดีย เฟนรีร์ และซาราห์ โดยบริษัท เอเชียซอฟท์ คอร์ปอเรชั่น จำกัด มหาชน (Asiasoft Corporation PCL.) เป็นผู้ถือลิขสิทธิ์จนถึง พ.ศ. 2559 โดยได้ปิดให้บริการในวันที่ 30 มิถุนายน 2559 และเปลี่ยนผู้ถือลิขสิทธิ์เป็น บริษัท อิเลคทรอนิกส์ เอ็กซ์ตรีม จำกัด (Electronic Extreme Ltd.) ตั้งแต่ พ.ศ. 2559 โดยได้เปิดโอเพ่นเบต้าในวันที่ 13 กรกฎาคม 2559 ปัจจุบัน ได้ขยายสาขาการให้บริการเพิ่มเติมใน เอเชียตะวันออกเฉียงใต้ ได้แก่ ประเทศฟิลิปปินส์ ประเทศมาเลเซีย ประเทศไทย และ ประเทศสิงคโปร์', 'อนุมัติ', '2020-07-24 11:53:11', NULL, '2020-07-24 14:16:42', 'GAME_FILE_1595566491.zip', '1.34 KB', 'https://www.youtube.com/embed/C5hy-2TjHK8', 'MMORPG', 'Everyone', 'Online', 7, 'Devepol@Test.com', 'Admin-สมคิด'),
(5, 'SonicMania', 'GAME_IMG_PROFILE_1595566599.png', 'Sonic Mania เป็นเกมแพลตฟอร์มปี 2017 เผยแพร่โดย Sega สำหรับ Nintendo Switch, PlayStation 4, Xbox One และ Windows ผลิตขึ้นในการฉลองครบรอบ 25 ปีของโซนิค', 'Sonic Mania เป็นเกมแพลตฟอร์มปี 2017 เผยแพร่โดย Sega สำหรับ Nintendo Switch, PlayStation 4, Xbox One และ Windows ผลิตขึ้นในการฉลองครบรอบ 25 ปีของโซนิคเดอะเฮดจ์ฮ็อกโซนิค Mania เป็นเกมดั้งเดิมของ Sega Genesis Sonic ซึ่งเป็นเกมดั้งเดิมที่มีการเล่นเกมเลื่อนด้านข้างที่รวดเร็ว มันมีมากกว่า 12 ด่าน', 'อนุมัติ', '2020-07-24 11:54:51', NULL, '2020-07-24 14:16:36', 'GAME_FILE_1595566599.zip', '1.34 KB', 'https://www.youtube.com/embed/LQ1SbHLXlH8', 'Racing', 'Everyone10', 'Online', 7, 'Devepol@Test.com', 'Admin-สมคิด'),
(6, 'MafiaIII', 'GAME_IMG_PROFILE_1595566825.png', 'Mafia เป็นชุดวิดีโอเกมแอ็กชั่นผจญภัยที่พัฒนาโดย 2K Czech พร้อมกับภาคที่สามโดย Hangar 13 และเผยแพร่โดย 2K Games', 'Mafia เป็นชุดวิดีโอเกมแอ็กชั่นผจญภัยที่พัฒนาโดย 2K Czech พร้อมกับภาคที่สามโดย Hangar 13 และเผยแพร่โดย 2K Games', 'อนุมัติ', '2020-07-24 11:56:39', NULL, '2020-07-24 14:16:31', 'GAME_FILE_1595566825.zip', '1.56 KB', 'https://www.youtube.com/embed/ZNsibdkqmI8', 'Action', 'Teen', 'Violence', 7, 'Devepol@Test.com', 'Admin-สมคิด'),
(7, 'CrashBandicoot', 'GAME_IMG_PROFILE_1595567158.png', 'คู่สามีภรรยาชาวเบรนท์วูด, ชายเปอร์เซียนเจ้าของร้านขายของ, สองตำรวจนักสืบคู่รัก, ผู้กำกับรายการโทรทัศน์ลูกครึ่งแอฟริกัน-อเมริกัน และภรรยาของเขา', 'คู่สามีภรรยาชาวเบรนท์วูด, ชายเปอร์เซียนเจ้าของร้านขายของ, สองตำรวจนักสืบคู่รัก, ผู้กำกับรายการโทรทัศน์ลูกครึ่งแอฟริกัน-อเมริกัน และภรรยาของเขา, ช่างทำกุญแจชาวเม็กซิกัน, โจรปล้นรถ และคู่สามีภรรยาวัยกลางคนชาวเกาหลี ชีวิตพวกเขามารวมกันอยู่ที่ ลอสแอนเจลิส และอีก 36 ชั่วโมงต่อมา ชีวิตของพวกเขาก็โคจรมาบรรจบกัน ภาพยนตร์ที่ได้รับ การเสนอชื่อชิง หก รางวัลออสการ์ แต่สามารถคว้ามาได้ 3 รางวัล คือ ภาพยนตร์ยอดเยี่ยม ,ตัดต่อ ภาพยนตร์ยอดเยี่ยม และ บทภาพยนตร์ดั้งเดิมยอดเยี่ยม', 'อนุมัติ', '2020-07-24 12:01:37', NULL, '2020-07-24 14:16:24', 'GAME_FILE_1595567158.zip', '1.34 KB', 'https://www.youtube.com/embed/5qF5JrciMnU', 'Flight', 'Everyone10', 'Online', 8, 'Devepol-3@Test.com', 'Admin-สมคิด'),
(8, 'PlayerUnknownsBattlegrounds', 'GAME_IMG_PROFILE_1595567580.png', 'PlayerUnknown\'s Battlegrounds : PUBG is an online multiplayer battle royale game developed and published by PUBG Corporation', 'PlayerUnknown\'s Battlegrounds (PUBG) is an online multiplayer battle royale game developed and published by PUBG Corporation, a subsidiary of South Korean video game company Bluehole. The game is based on previous mods that were created by Brendan \"PlayerUnknown\" Greene for other games, inspired by the 2000 Japanese film Battle Royale, and expanded into a standalone game under Greene\'s creative direction. In the game, up to one hundred players parachute onto an island and scavenge for weapons and equipment to kill others while avoiding getting killed themselves. The available safe area of the game\'s map decreases in size over time, directing surviving players into tighter areas to force encounters. The last player or team standing wins the round.', 'อนุมัติ', '2020-07-24 12:06:04', NULL, '2020-07-24 14:16:18', 'GAME_FILE_1595567580.zip', '1.56 KB', 'https://www.youtube.com/embed/u7lDLBiOiZ4', 'FPS', 'Teen', 'Online', 8, 'Devepol-3@Test.com', 'Admin-สมคิด'),
(9, 'FIFA', 'GAME_IMG_PROFILE_1595571414.jpg', 'FIFA เป็นเกมที่เปิดตัวโดย Electronic Arts เป็นประจำทุกปีภายใต้ชื่อ EA Sports วิดีโอเกมฟุตบอลเช่น Sensible Soccer, Kick Off และ Match Day', 'FIFA เป็นเกมที่เปิดตัวโดย Electronic Arts เป็นประจำทุกปีภายใต้ชื่อ EA Sports วิดีโอเกมฟุตบอลเช่น Sensible Soccer, Kick Off และ Match Day ได้รับการพัฒนามาตั้งแต่ช่วงปลายทศวรรษ 1980', 'อนุมัติ', '2020-07-24 13:13:31', NULL, '2020-07-24 14:16:10', 'GAME_FILE_1595571414.zip', '1.56 KB', 'https://www.youtube.com/embed/Hq-cE9JLP4Q', 'Flight', 'Everyone10', 'Online', 8, 'Devepol-3@Test.com', 'Admin-สมคิด');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `games`
--
ALTER TABLE `games`
  ADD PRIMARY KEY (`GAME_ID`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `games`
--
ALTER TABLE `games`
  MODIFY `GAME_ID` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
