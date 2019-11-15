-- phpMyAdmin SQL Dump
-- version 4.9.0.1
-- https://www.phpmyadmin.net/
--
-- 主機： 127.0.0.1
-- 產生時間： 2019-11-15 13:22:45
-- 伺服器版本： 10.4.6-MariaDB
-- PHP 版本： 7.3.9

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- 資料庫： `mydb`
--

-- --------------------------------------------------------

--
-- 資料表結構 `prize`
--

CREATE TABLE `prize` (
  `id` int(5) NOT NULL,
  `period` varchar(6) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `year` year(4) DEFAULT NULL,
  `prize_1` varchar(12) COLLATE utf8mb4_unicode_ci DEFAULT NULL COMMENT '特別獎',
  `prize_2` varchar(12) COLLATE utf8mb4_unicode_ci DEFAULT NULL COMMENT '特獎',
  `prize_3` varchar(12) COLLATE utf8mb4_unicode_ci DEFAULT NULL COMMENT '頭獎',
  `prize_4` varchar(12) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `prize_5` varchar(12) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `prize_6` varchar(12) COLLATE utf8mb4_unicode_ci DEFAULT NULL COMMENT '六獎',
  `prize_7` varchar(12) COLLATE utf8mb4_unicode_ci DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- 傾印資料表的資料 `prize`
--

INSERT INTO `prize` (`id`, `period`, `year`, `prize_1`, `prize_2`, `prize_3`, `prize_4`, `prize_5`, `prize_6`, `prize_7`) VALUES
(1, '4', 2019, '45698621', '19614436', '96182420', '47464012', '62781818', '928', '899');

--
-- 已傾印資料表的索引
--

--
-- 資料表索引 `prize`
--
ALTER TABLE `prize`
  ADD PRIMARY KEY (`id`);

--
-- 在傾印的資料表使用自動遞增(AUTO_INCREMENT)
--

--
-- 使用資料表自動遞增(AUTO_INCREMENT) `prize`
--
ALTER TABLE `prize`
  MODIFY `id` int(5) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
