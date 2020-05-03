-- phpMyAdmin SQL Dump
-- version 4.8.5
-- https://www.phpmyadmin.net/
--
-- 主机： localhost
-- 生成日期： 2020-04-27 16:14:28
-- 服务器版本： 5.7.26
-- PHP 版本： 7.3.4

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- 数据库： `studenttable`
--

-- --------------------------------------------------------

--
-- 表的结构 `1`
--

CREATE TABLE `1` (
  `ID` int(10) NOT NULL,
  `username1` varchar(20) CHARACTER SET utf8 NOT NULL,
  `class` varchar(20) CHARACTER SET utf8 DEFAULT NULL,
  `studentID` int(10) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- 转存表中的数据 `1`
--

INSERT INTO `1` (`ID`, `username1`, `class`, `studentID`) VALUES
(32, '1133', '12', 21),
(31, '4968459@qq.com', '12', 21),
(30, '21', '12', 21),
(33, '符祥吉', '12', 21),
(34, '4968459', '12', 21),
(35, '233', '12', 212);

--
-- 转储表的索引
--

--
-- 表的索引 `1`
--
ALTER TABLE `1`
  ADD PRIMARY KEY (`ID`),
  ADD UNIQUE KEY `username1` (`username1`);

--
-- 在导出的表使用AUTO_INCREMENT
--

--
-- 使用表AUTO_INCREMENT `1`
--
ALTER TABLE `1`
  MODIFY `ID` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=36;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
