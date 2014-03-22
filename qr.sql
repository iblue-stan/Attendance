-- phpMyAdmin SQL Dump
-- version 4.0.4
-- http://www.phpmyadmin.net
--
-- 主機: localhost
<<<<<<< HEAD
-- 產生日期: 2014 年 03 月 21 日 16:44
=======
-- 產生日期: 2014 年 03 月 19 日 16:53
>>>>>>> 659b144d579a02b8573a8ffdce8a342e7716dc00
-- 伺服器版本: 5.6.12-log
-- PHP 版本: 5.4.16

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- 資料庫: `qr`
--
CREATE DATABASE IF NOT EXISTS `qr` DEFAULT CHARACTER SET utf8 COLLATE utf8_general_ci;
USE `qr`;

-- --------------------------------------------------------

--
-- 表的結構 `board`
--

CREATE TABLE IF NOT EXISTS `board` (
  `id` int(11) NOT NULL AUTO_INCREMENT COMMENT '索引',
  `title` varchar(15) NOT NULL COMMENT '主題',
  `content` varchar(300) NOT NULL COMMENT '內容',
  `date` datetime NOT NULL COMMENT '日期',
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 AUTO_INCREMENT=4 ;

--
-- 轉存資料表中的資料 `board`
--

INSERT INTO `board` (`id`, `title`, `content`, `date`) VALUES
(1, '2014年人事行政局休假日', '<p>test<img src="images/2014-hr-gov.png" /></p>\r\n', '2014-03-10 21:50:41'),
(2, '3月聚餐時間', '2014/3/15(六)  18:30      <br><a href="http://www.karuisawa.com.tw/" style="text-decoration:none;">輕井澤文心店</a>        <br>地址：台中市南屯區文心路一段536號 〈大業路口〉      <br>電話：04-23109681      <br>停車場：路邊收費停車格      <br><img src=''images/map.png'' width=''600'' height=''600''>', '2014-03-10 21:43:20'),
(3, '特別休假日數試算表', ' <p>\r\n	1. 特別休假，依所填受僱日、計算日之結果估算特別休假日數。\r\n	<br>2. 適用勞動基準法之事業單位於適用勞動基準法後，依勞動基準法第38條規定，勞工在同一雇主或事業單位，繼續工作滿一定期間者，每年應依下列規定給予特別休假：\r\n    </p>\r\n    <ul>\r\n      <li>一年以上三年未滿者七日。</li>\r\n      <li>三年以上五年未滿者十日。</li>\r\n      <li>五年以上十年未滿者十四日。</li>\r\n	  <li>十年以上者，每一年加給一日，加至三十日為止。</li>\r\n    </ul>\r\n    <p>\r\n	<br>3. 依勞動基準', '2014-03-10 22:08:23');

-- --------------------------------------------------------

--
-- 表的結構 `user`
--

CREATE TABLE IF NOT EXISTS `user` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `user_phone` varchar(50) NOT NULL,
  `user_pwd` int(11) NOT NULL COMMENT '預設生日',
  `user_name` varchar(50) NOT NULL COMMENT '姓名',
  `user_class` varchar(50) NOT NULL,
  `user_join` date NOT NULL,
  `user_permission` int(11) NOT NULL,
  PRIMARY KEY (`id`)
<<<<<<< HEAD
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 AUTO_INCREMENT=26 ;
=======
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 AUTO_INCREMENT=25 ;
>>>>>>> 659b144d579a02b8573a8ffdce8a342e7716dc00

--
-- 轉存資料表中的資料 `user`
--

INSERT INTO `user` (`id`, `user_phone`, `user_pwd`, `user_name`, `user_class`, `user_join`, `user_permission`) VALUES
(1, '0958', 1228, '大大', '0', '2013-03-03', 1),
(13, '0923353569', 1228, '陳怡萍', '1', '2012-03-03', 2),
(14, '0923835218', 123, 'Sasaki Ando', '2', '2010-03-03', 2),
(15, '0928315053', 123, '張睿岑', '3', '2009-03-03', 2),
(16, '0928403376 ', 123, '林柏瀚', '1', '0000-00-00', 2),
(17, '0988600970', 123, '李柏宏', '3', '2002-05-06', 2),
(18, '0988106795', 123, '劉家伶', '2', '2002-05-06', 2),
(19, '0988380636', 123, '游錦雯', '2', '0000-00-00', 2),
<<<<<<< HEAD
(20, '0928829809', 123, '張宇綸', '3', '2002-05-06', 2),
(21, '0975785791', 12323, '陳薇婷23', '2', '0000-00-00', 2),
(23, '321', 321, '098564454', '1', '2002-05-06', 2),
(24, '0958564596', 555, '54088', '1', '2002-05-06', 2),
(25, '123', 123, '大米', '1', '0000-00-00', 2);
=======
(20, '0928829809', 12345, '張宇綸 ', '3', '2002-05-06', 2),
(21, '0975785791', 12323, '陳薇婷23', '2', '0000-00-00', 2),
(23, '321', 321, '098564454', '1', '2002-05-06', 2),
(24, '0958564596', 555, '555', '1', '2002-05-06', 2);
>>>>>>> 659b144d579a02b8573a8ffdce8a342e7716dc00

-- --------------------------------------------------------

--
-- 表的結構 `var`
--

CREATE TABLE IF NOT EXISTS `var` (
  `pk` int(11) NOT NULL AUTO_INCREMENT,
  `var_phone` varchar(50) NOT NULL,
  `var_time` datetime NOT NULL,
  `id` int(11) NOT NULL,
  PRIMARY KEY (`pk`),
  KEY `id` (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=30 ;

--
-- 轉存資料表中的資料 `var`
--

INSERT INTO `var` (`pk`, `var_phone`, `var_time`, `id`) VALUES
(11, '0928829809', '2014-03-11 08:14:00', 20),
(12, '0988380636', '2014-03-11 08:08:00', 19),
(13, '0988106795', '2014-03-11 08:26:00', 18),
(14, '0988106795', '2014-03-11 17:00:00', 18),
(15, '0988380636', '2014-03-11 17:06:00', 19),
(16, '0928829809', '2014-03-11 07:53:00', 20),
(17, '0928829809', '2014-03-11 16:48:00', 20),
(18, '0988600970', '2014-02-11 08:22:00', 17),
(19, '0988600970', '2014-02-11 17:22:00', 17),
(20, '0928829809', '2014-03-11 20:14:00', 20),
(21, '0928829809', '2014-03-11 19:14:00', 20),
(22, '0928829809', '2014-03-12 08:14:00', 20),
(23, '0928829809', '2014-03-12 19:14:00', 20),
(24, '0928829809', '2014-03-13 19:14:00', 20),
(25, '0928829809', '2014-03-13 09:14:00', 20),
(26, '0928829809', '2014-03-16 08:14:00', 20),
(27, '0928829809', '2014-03-16 15:14:00', 20),
(28, '0928829809', '2014-03-17 16:30:00', 20),
(29, '0928829809', '2014-03-17 09:14:00', 20);

-- --------------------------------------------------------

--
-- 表的結構 `vk`
--

CREATE TABLE IF NOT EXISTS `vk` (
  `pk` int(11) NOT NULL AUTO_INCREMENT,
  `l_phone` varchar(50) NOT NULL,
  `l_start` datetime NOT NULL,
  `l_end` datetime NOT NULL,
  `l_condition` varchar(50) NOT NULL,
  `l_memo` text NOT NULL,
  `l_check` int(11) NOT NULL,
  `id` int(11) NOT NULL,
  PRIMARY KEY (`pk`),
  KEY `id` (`id`)
<<<<<<< HEAD
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 AUTO_INCREMENT=22 ;
=======
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 AUTO_INCREMENT=20 ;
>>>>>>> 659b144d579a02b8573a8ffdce8a342e7716dc00

--
-- 轉存資料表中的資料 `vk`
--

INSERT INTO `vk` (`pk`, `l_phone`, `l_start`, `l_end`, `l_condition`, `l_memo`, `l_check`, `id`) VALUES
(5, '', '2014-03-12 08:00:00', '2014-03-12 12:00:00', '5', '@@', 1, 20),
(6, '', '2014-03-13 13:00:00', '2014-03-13 18:00:00', '5', '><"', 1, 20),
(7, '', '2014-03-16 08:00:00', '2014-03-16 09:00:00', '5', '= =', 1, 17),
(9, '', '2014-03-12 09:00:00', '2014-03-12 08:00:00', '5', '', 1, 13),
(10, '', '2014-03-14 09:00:00', '2014-03-14 13:00:00', '5', '', 1, 13),
(13, '0923353569', '2014-03-15 13:00:00', '2014-03-15 17:00:00', '3', '有事有事', 0, 13),
(14, '0923353569', '2014-03-15 13:00:00', '2014-03-15 17:00:00', '3', '有事有事', 0, 13),
(15, '0923353569', '2014-03-15 13:00:00', '2014-03-15 17:00:00', '3', '有事有事', 0, 13),
(16, '', '2014-03-17 08:00:00', '2014-03-17 17:00:00', '3', 'jkhjghfxghjioihhjkl;', 0, 928829809),
(17, '', '2014-03-17 08:00:00', '2014-03-17 17:00:00', '3', 'jkhjghfxghjioihhjkl;', 0, 928829809),
(18, '', '2014-03-17 10:22:00', '2014-03-17 18:00:00', '4', 'test', 0, 928829809),
<<<<<<< HEAD
(19, '0928829809', '2014-03-17 11:00:00', '2014-03-17 15:00:00', '2', 'test', 0, 20),
(20, '0928829809', '2014-03-21 17:24:00', '2014-03-21 17:24:00', '6', 'sa', 0, 20),
(21, '0928829809', '2014-03-21 17:36:00', '2014-03-23 17:36:00', '6', 'sdf', 1, 20);
=======
(19, '0928829809', '2014-03-17 11:00:00', '2014-03-17 15:00:00', '2', 'test', 0, 20);
>>>>>>> 659b144d579a02b8573a8ffdce8a342e7716dc00

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
