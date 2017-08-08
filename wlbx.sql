-- phpMyAdmin SQL Dump
-- version phpStudy 2014
-- http://www.phpmyadmin.net
--
-- 主机: localhost
-- 生成日期: 2017 年 08 月 08 日 02:28
-- 服务器版本: 5.5.53
-- PHP 版本: 5.4.45

SET SQL_MODE="NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- 数据库: `wlbx`
--

-- --------------------------------------------------------

--
-- 表的结构 `repair`
--

CREATE TABLE IF NOT EXISTS `repair` (
  `repair_time` varchar(255) NOT NULL,
  `bulid_id` varchar(255) NOT NULL,
  `room` varchar(255) NOT NULL,
  `phone` varchar(255) NOT NULL,
  `repair_describe` varchar(255) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8;

--
-- 转存表中的数据 `repair`
--

INSERT INTO `repair` (`repair_time`, `bulid_id`, `room`, `phone`, `repair_describe`) VALUES
('www', '图书馆', 'www', 'wwww', 'www'),
('www', '图书馆', 'www', 'wwww', 'www'),
('www', '图书馆', 'www', 'wwww', 'www'),
('111', '图书馆', '111', 'aaa', '111'),
('111', '图书馆', '111', 'aaa', '111'),
('111', '图书馆', '111', 'aaa', '111'),
('admin', '文科楼', 'aaa', 'qw', 'aaa'),
('111', '图书馆', '111', '111', '111'),
('', '', '', '', '');

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
