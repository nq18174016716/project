-- phpMyAdmin SQL Dump
-- version phpStudy 2014
-- http://www.phpmyadmin.net
--
-- 主机: localhost
-- 生成日期: 2019 �?07 �?03 �?01:57
-- 服务器版本: 5.5.53
-- PHP 版本: 5.6.27

SET SQL_MODE="NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- 数据库: `jinling`
--

-- --------------------------------------------------------

--
-- 表的结构 `jl_config`
--

CREATE TABLE IF NOT EXISTS `jl_config` (
  `conf_id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `conf_name` varchar(100) NOT NULL,
  `conf_code` varchar(150) NOT NULL,
  `conf_value` varchar(255) NOT NULL,
  PRIMARY KEY (`conf_id`)
) ENGINE=MyISAM  DEFAULT CHARSET=utf8 COMMENT='网站配置表' AUTO_INCREMENT=10 ;

--
-- 转存表中的数据 `jl_config`
--

INSERT INTO `jl_config` (`conf_id`, `conf_name`, `conf_code`, `conf_value`) VALUES
(1, '地址', 'conf_address', '广东省广州市海珠区新港西路231号3栋4层'),
(2, '联系人', 'conf_admin', '乐 乐'),
(3, '移动电话', 'conf_phone', '13588888888'),
(4, '固定电话', 'conf_phone2', '020-1234567'),
(5, '传真', 'conf_numbers', '020-1234567'),
(6, '版权', 'conf_copy', 'Copyright @ 2014 文豆网络科技有限公司 版权所有 粤ICP备0000000号'),
(9, '天气接口', 'conf_weather', 'xbbPh7m3me5BlWUrCttGLNYz');

-- --------------------------------------------------------

--
-- 表的结构 `jl_kleage`
--

CREATE TABLE IF NOT EXISTS `jl_kleage` (
  `kleage_id` int(5) NOT NULL AUTO_INCREMENT COMMENT '行业知识id',
  `kleage_title` varchar(30) COLLATE utf8_danish_ci DEFAULT NULL COMMENT '行业知识标题',
  `kleage_content` varchar(255) COLLATE utf8_danish_ci DEFAULT NULL COMMENT '行业知识内容',
  `kleage_time` varchar(255) COLLATE utf8_danish_ci DEFAULT NULL COMMENT '发表时间',
  `nav_id` int(5) DEFAULT NULL COMMENT '对应导航id',
  PRIMARY KEY (`kleage_id`)
) ENGINE=MyISAM  DEFAULT CHARSET=utf8 COLLATE=utf8_danish_ci AUTO_INCREMENT=10 ;

--
-- 转存表中的数据 `jl_kleage`
--

INSERT INTO `jl_kleage` (`kleage_id`, `kleage_title`, `kleage_content`, `kleage_time`, `nav_id`) VALUES
(2, '公司项目完成了', NULL, '1147483641', 4),
(3, '天啊，你居然在做作业', NULL, '1111111111', 4),
(4, '东哥啊东哥', NULL, '1147483421', 4),
(5, '数据库数据表SQl语句', NULL, '1147483641', 4),
(8, 'baidu', '<p>&nbsp; &nbsp; &nbsp; &nbsp; 南大吧爱可登卡&nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp;</p>', '1561993665', 4),
(9, '结果积分', '<p>囊啊哦哦</p><p>&nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp;</p>', '1561996593', 4);

-- --------------------------------------------------------

--
-- 表的结构 `jl_link`
--

CREATE TABLE IF NOT EXISTS `jl_link` (
  `link_id` int(10) unsigned NOT NULL AUTO_INCREMENT COMMENT '链接id',
  `link_name` varchar(20) COLLATE utf8_danish_ci NOT NULL COMMENT '连接名称',
  `link_url` varchar(100) COLLATE utf8_danish_ci NOT NULL COMMENT '链接地址',
  PRIMARY KEY (`link_id`)
) ENGINE=MyISAM  DEFAULT CHARSET=utf8 COLLATE=utf8_danish_ci COMMENT='链接表' AUTO_INCREMENT=4 ;

--
-- 转存表中的数据 `jl_link`
--

INSERT INTO `jl_link` (`link_id`, `link_name`, `link_url`) VALUES
(1, '百度', 'https://www.baidu.com'),
(2, '菜鸟教程', 'https://www.runoob.com'),
(3, 'Bootstrap中文网', 'https://v3.bootcss.com');

-- --------------------------------------------------------

--
-- 表的结构 `jl_nav`
--

CREATE TABLE IF NOT EXISTS `jl_nav` (
  `nav_id` smallint(5) unsigned NOT NULL AUTO_INCREMENT COMMENT '导航id',
  `nav_name` varchar(20) COLLATE utf8_danish_ci NOT NULL COMMENT '导航名称',
  `nav_url` varchar(50) COLLATE utf8_danish_ci NOT NULL COMMENT '导航链接',
  PRIMARY KEY (`nav_id`)
) ENGINE=MyISAM  DEFAULT CHARSET=utf8 COLLATE=utf8_danish_ci COMMENT='导航表' AUTO_INCREMENT=14 ;

--
-- 转存表中的数据 `jl_nav`
--

INSERT INTO `jl_nav` (`nav_id`, `nav_name`, `nav_url`) VALUES
(1, '首页', 'index.php'),
(2, '公司简介', 'about_us.php'),
(3, '产品展示', 'product.php'),
(4, '行业知识', 'knowledge.php'),
(5, '客户留言', 'gbook.php'),
(6, '联系我们', 'contact.php');

-- --------------------------------------------------------

--
-- 表的结构 `jl_new`
--

CREATE TABLE IF NOT EXISTS `jl_new` (
  `new_id` int(5) unsigned NOT NULL AUTO_INCREMENT COMMENT '留言新闻id',
  `new_title` varchar(30) COLLATE utf8_danish_ci DEFAULT NULL COMMENT '留言新闻标题',
  `new_content` text COLLATE utf8_danish_ci COMMENT '留言新闻内容',
  `nav_id` int(5) DEFAULT NULL,
  `new_time` varchar(255) COLLATE utf8_danish_ci DEFAULT NULL COMMENT '新闻时间',
  PRIMARY KEY (`new_id`)
) ENGINE=MyISAM  DEFAULT CHARSET=utf8 COLLATE=utf8_danish_ci COMMENT='留言公告表' AUTO_INCREMENT=8 ;

--
-- 转存表中的数据 `jl_new`
--

INSERT INTO `jl_new` (`new_id`, `new_title`, `new_content`, `nav_id`, `new_time`) VALUES
(1, '祝贺公司网站成立', '', 5, '1147483691'),
(2, 'GDP是世界上最好的三人组', '', 5, '1147483641'),
(6, '哈哈哈今天有没有爱上我', '<p>阿达&nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp;</p>', 5, '1561991958'),
(7, 'baidu25', '<p>&nbsp; &nbsp; 爱德华 纽盖特&nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp;</p>', 5, '1561995141');

-- --------------------------------------------------------

--
-- 表的结构 `jl_product`
--

CREATE TABLE IF NOT EXISTS `jl_product` (
  `pro_id` int(5) NOT NULL AUTO_INCREMENT,
  `pro_name` varchar(255) COLLATE utf8_danish_ci DEFAULT NULL,
  `pro_desc` varchar(255) COLLATE utf8_danish_ci DEFAULT NULL,
  `pro_img` varchar(255) COLLATE utf8_danish_ci DEFAULT NULL,
  `pro_thumb` varchar(255) COLLATE utf8_danish_ci DEFAULT NULL,
  `pro_size` smallint(5) DEFAULT NULL,
  PRIMARY KEY (`pro_id`)
) ENGINE=MyISAM  DEFAULT CHARSET=utf8 COLLATE=utf8_danish_ci AUTO_INCREMENT=20 ;

--
-- 转存表中的数据 `jl_product`
--

INSERT INTO `jl_product` (`pro_id`, `pro_name`, `pro_desc`, `pro_img`, `pro_thumb`, `pro_size`) VALUES
(1, '网格布', NULL, 'images/aa.png', 'images/aa.png', 20),
(2, '塑料板', NULL, 'images/ab.png', 'images/ab.png', 30),
(3, '塑料管', NULL, 'images/ac.png', 'images/ac.png', 25),
(4, '高铝砖', NULL, 'images/product_04.png', 'images/product_04.png', 35),
(5, '网格布', NULL, 'images/aa.png', 'images/aa.png', 20),
(6, '塑料板', NULL, 'images/ab.png', 'images/ab.png', 30),
(7, '塑料管', NULL, 'images/ac.png', 'images/ac.png', 25),
(8, '高铝砖', NULL, 'images/product_04.png', 'images/product_04.png', 35),
(9, '网格布', NULL, 'images/aa.png', 'images/aa.png', 20),
(10, '塑料板', NULL, 'images/ab.png', 'images/ab.png', 30),
(11, '塑料管', NULL, 'images/ac.png', 'images/ac.png', 25),
(12, '高铝砖', NULL, 'images/product_04.png', 'images/product_04.png', 35),
(13, '高铝砖', NULL, 'images/product_04.png', 'images/product_04.png', 35);

-- --------------------------------------------------------

--
-- 表的结构 `jl_user`
--

CREATE TABLE IF NOT EXISTS `jl_user` (
  `user_id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `user_name` varchar(32) NOT NULL,
  `user_pwd` varchar(32) NOT NULL,
  `user_sex` int(11) NOT NULL,
  `user_email` varchar(50) NOT NULL,
  `user_phone` varchar(20) NOT NULL,
  `user_desc` text NOT NULL,
  PRIMARY KEY (`user_id`)
) ENGINE=MyISAM  DEFAULT CHARSET=utf8 COMMENT='会员表' AUTO_INCREMENT=30 ;

--
-- 转存表中的数据 `jl_user`
--

INSERT INTO `jl_user` (`user_id`, `user_name`, `user_pwd`, `user_sex`, `user_email`, `user_phone`, `user_desc`) VALUES
(1, 'nq', '4297f44b13955235245b2497399d7a93', 1, '110@.com', '11023456', ''),
(2, 'admin', '4297f44b13955235245b2497399d7a93', 1, '1599500153@qq.com', '1599500153', '');

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
