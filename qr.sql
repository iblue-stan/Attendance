-- phpMyAdmin SQL Dump
-- version 4.1.8
-- http://www.phpmyadmin.net
--
-- 主機: localhost
-- 產生時間： 2014 年 03 月 19 日 15:50
-- 伺服器版本: 5.5.36-MariaDB-log
-- PHP 版本： 5.5.9

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- 資料庫： `qr`
--

-- --------------------------------------------------------

--
-- 資料表結構 `board`
--

CREATE TABLE IF NOT EXISTS `board` (
  `id` int(11) NOT NULL AUTO_INCREMENT COMMENT '索引',
  `title` varchar(15) NOT NULL COMMENT '主題',
  `content` varchar(300) NOT NULL COMMENT '內容',
  `date` datetime NOT NULL COMMENT '日期',
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 AUTO_INCREMENT=4 ;

--
-- 資料表的匯出資料 `board`
--

INSERT INTO `board` (`id`, `title`, `content`, `date`) VALUES
(1, '2014年人事行政局休假日', '<img src=''images/2014-hr-gov.png''>', '2014-03-10 21:50:41'),
(2, '3月聚餐時間', '2014/3/15(六)  18:30      <br><a href="http://www.karuisawa.com.tw/" style="text-decoration:none;">輕井澤文心店</a>        <br>地址：台中市南屯區文心路一段536號 〈大業路口〉      <br>電話：04-23109681      <br>停車場：路邊收費停車格      <br><img src=''images/map.png'' width=''600'' height=''600''>', '2014-03-10 21:43:20'),
(3, '特別休假日數試算表', ' <p>\r\n	1. 特別休假，依所填受僱日、計算日之結果估算特別休假日數。\r\n	<br>2. 適用勞動基準法之事業單位於適用勞動基準法後，依勞動基準法第38條規定，勞工在同一雇主或事業單位，繼續工作滿一定期間者，每年應依下列規定給予特別休假：\r\n    </p>\r\n    <ul>\r\n      <li>一年以上三年未滿者七日。</li>\r\n      <li>三年以上五年未滿者十日。</li>\r\n      <li>五年以上十年未滿者十四日。</li>\r\n	  <li>十年以上者，每一年加給一日，加至三十日為止。</li>\r\n    </ul>\r\n    <p>\r\n	<br>3. 依勞動基準', '2014-03-10 22:08:23');

-- --------------------------------------------------------

--
-- 資料表結構 `user`
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
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 AUTO_INCREMENT=22 ;

--
-- 資料表的匯出資料 `user`
--

INSERT INTO `user` (`id`, `user_phone`, `user_pwd`, `user_name`, `user_class`, `user_join`, `user_permission`) VALUES
(1, '0958', 1228, '大大', '0', '0000-00-00', 1),
(13, '0923353569', 1228, '陳怡萍', '1', '0000-00-00', 2),
(14, '0923835218', 123, 'Sasaki Ando', '2', '0000-00-00', 2),
(15, '0928315053', 123, '張睿岑', '3', '0000-00-00', 2),
(16, '0928403376 ', 123, '林柏瀚', '1', '0000-00-00', 2),
(17, '0988600970', 123, '李柏宏', '3', '0000-00-00', 2),
(18, '0988106795', 123, '劉家伶', '2', '0000-00-00', 2),
(19, '0988380636', 123, '游錦雯', '2', '0000-00-00', 2),
(20, '0928829809', 123, '張宇綸 ', '3', '0000-00-00', 2),
(21, '0975785791 ', 123, '陳薇婷', '2', '0000-00-00', 2);

-- --------------------------------------------------------

--
-- 資料表結構 `var`
--

CREATE TABLE IF NOT EXISTS `var` (
  `pk` int(11) NOT NULL AUTO_INCREMENT,
  `var_phone` varchar(50) NOT NULL,
  `var_time` datetime NOT NULL,
  `id` int(11) NOT NULL,
  PRIMARY KEY (`pk`),
  KEY `id` (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=20 ;

--
-- 資料表的匯出資料 `var`
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
(19, '0988600970', '2014-02-11 17:22:00', 17);

-- --------------------------------------------------------

--
-- 資料表結構 `vk`
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
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 AUTO_INCREMENT=20 ;

--
-- 資料表的匯出資料 `vk`
--

INSERT INTO `vk` (`pk`, `l_phone`, `l_start`, `l_end`, `l_condition`, `l_memo`, `l_check`, `id`) VALUES
(18, '0928829809', '2014-03-12 15:00:00', '2014-03-12 17:00:00', '1', 'ddweeqw', 0, 20),
(19, '0928829809', '2014-03-12 12:00:00', '2014-03-12 17:00:00', '1', 'ddweeqw', 0, 20);

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
