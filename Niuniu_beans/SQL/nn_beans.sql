-- phpMyAdmin SQL Dump
-- version phpStudy 2014
-- http://www.phpmyadmin.net
--
-- 主机: localhost
-- 生成日期: 2019 �?07 �?14 �?14:48
-- 服务器版本: 5.5.53
-- PHP 版本: 5.6.27

SET SQL_MODE="NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- 数据库: `nn_beans`
--

-- --------------------------------------------------------

--
-- 表的结构 `nnb_about`
--

CREATE TABLE IF NOT EXISTS `nnb_about` (
  `about_id` int(5) NOT NULL AUTO_INCREMENT,
  `about_title` varchar(255) DEFAULT NULL,
  `about_eng` varchar(255) DEFAULT NULL,
  `about_content` varchar(255) DEFAULT NULL,
  `about_img` varchar(255) DEFAULT NULL,
  PRIMARY KEY (`about_id`)
) ENGINE=MyISAM  DEFAULT CHARSET=gbk AUTO_INCREMENT=8 ;

--
-- 转存表中的数据 `nnb_about`
--

INSERT INTO `nnb_about` (`about_id`, `about_title`, `about_eng`, `about_content`, `about_img`) VALUES
(1, '公司简介', 'COMPANY INTRODUCTION', '文豆，是一家提供互联网服务的高科技集团公司， 集策划、设计、前端优化、研发、测试、系统运维、 网站推广、运营、团队外包及互联网人才培养为一体 的成熟业务体系。总部位于广州市客村立交财智大厦楼', 'images/ak.jpg'),
(2, '公司的运营理念', 'COMPANY OPERATION IDEA', '携手共进，共赢天下。以结果为导向，树立好工作目标，监督过程， 实现理想效果。打造一流的团队，创造一流的服务，成为一流的 行业标志。', 'images/al.jpg'),
(3, '公司的业务范围', 'SPHERE OF BUSINESS', '文豆主要提供高品质网站建设方案，电子商务平台解决方案， 移动端应用开发方案（基于Android、iOS APP及移动端网站）， 微应用、微商城、微官网、微互动营销解决方案， 企业信息化解决方案（OA、CRM），以及PHP网站开发、 Java开发、UI设计、淘宝美工人才培养服务，人才外包服务， 高端IT人才猎头服务。', 'images/am.jpg'),
(4, '员工职业发展', 'CAREER DEVELOPMENT', '我们非常清楚职业发展计划对于每个员工的重要性。 公司对人员的要求，更加看重心态，只要愿意成为文豆 的一份子，公司都会让员工充分展示自己，发挥他们的潜力 、才干和热情，在文豆走向职业的成功。', 'images/an.png');

-- --------------------------------------------------------

--
-- 表的结构 `nnb_banner`
--

CREATE TABLE IF NOT EXISTS `nnb_banner` (
  `banner_id` smallint(5) NOT NULL AUTO_INCREMENT,
  `banner_name` varchar(255) DEFAULT NULL,
  `banner_img` varchar(255) DEFAULT NULL,
  `banner_thumb` varchar(255) DEFAULT NULL,
  PRIMARY KEY (`banner_id`)
) ENGINE=MyISAM  DEFAULT CHARSET=gbk AUTO_INCREMENT=8 ;

--
-- 转存表中的数据 `nnb_banner`
--

INSERT INTO `nnb_banner` (`banner_id`, `banner_name`, `banner_img`, `banner_thumb`) VALUES
(1, '第一张', 'images/aa.png', NULL),
(2, '第二张', 'images/b1.png', NULL),
(3, '第三张', 'images/aa.png', NULL),
(7, '章鱼哥', 'uploads/2019-07-10/156276838165927.jpg', 'thumb/2019-07-10/thumb_156276838165927.jpg');

-- --------------------------------------------------------

--
-- 表的结构 `nnb_case`
--

CREATE TABLE IF NOT EXISTS `nnb_case` (
  `case_id` int(5) NOT NULL,
  `case_name` varchar(255) DEFAULT NULL,
  `case_desc` varchar(255) DEFAULT NULL,
  `case_img` varchar(255) DEFAULT NULL,
  PRIMARY KEY (`case_id`)
) ENGINE=MyISAM DEFAULT CHARSET=gbk;

--
-- 转存表中的数据 `nnb_case`
--

INSERT INTO `nnb_case` (`case_id`, `case_name`, `case_desc`, `case_img`) VALUES
(1, '优购网', '优购网品牌旗舰店热销耐克、阿迪达斯', 'images/ca.png'),
(2, '新居网', '新居网（www homekoo）,全国最大整体', 'images/cb.png'),
(3, '寺库中国', '新居网（www homekoo）,全国最大整体', 'images/cc.png'),
(4, 'YOHO有货', 'YOHO！有货，年轻人潮流购物中心，中国', 'images/cd.png'),
(5, '广百荟', '广百荟是广州最大零售百货企业广百股份', 'images/ce.png'),
(6, '考拉海购', '考拉海购是网易旗下自营海外正品特卖网', 'images/cf.png'),
(7, '乐天狗', 'Lotte,相比于Gmarket的优点就是里面所', 'images/cg.png'),
(8, '尚品网', '尚品网奢侈品网站（www shangpin com.', 'images/ch.png'),
(9, '识货网', '识货网是虎扑体育旗下的导购网站，致力', 'images/ci.png');

-- --------------------------------------------------------

--
-- 表的结构 `nnb_config`
--

CREATE TABLE IF NOT EXISTS `nnb_config` (
  `conf_id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `conf_name` varchar(100) NOT NULL,
  `conf_code` varchar(150) NOT NULL,
  `conf_value` varchar(255) NOT NULL,
  PRIMARY KEY (`conf_id`)
) ENGINE=MyISAM  DEFAULT CHARSET=utf8 COMMENT='网站配置表' AUTO_INCREMENT=10 ;

--
-- 转存表中的数据 `nnb_config`
--

INSERT INTO `nnb_config` (`conf_id`, `conf_name`, `conf_code`, `conf_value`) VALUES
(1, '地址', 'conf_address', '广东省广州市海珠区新港西路231号3栋4层'),
(2, '版权', 'conf_copy', 'Copyright @ 2014 文豆网络科技有限公司 版权所有 粤ICP备0000000号'),
(3, '法律顾问', 'conf_people', '粤ICP备12022584号-3 法律顾问：广东晟晨律师事务所-张勇律师');

-- --------------------------------------------------------

--
-- 表的结构 `nnb_nav`
--

CREATE TABLE IF NOT EXISTS `nnb_nav` (
  `nav_id` int(5) NOT NULL AUTO_INCREMENT COMMENT '导航id',
  `nav_name` varchar(255) NOT NULL COMMENT '导航名字',
  `nav_url` varchar(255) NOT NULL COMMENT '导航链接',
  `parent_id` int(1) NOT NULL COMMENT '二级导航',
  PRIMARY KEY (`nav_id`)
) ENGINE=MyISAM  DEFAULT CHARSET=gbk COMMENT='导航表' AUTO_INCREMENT=12 ;

--
-- 转存表中的数据 `nnb_nav`
--

INSERT INTO `nnb_nav` (`nav_id`, `nav_name`, `nav_url`, `parent_id`) VALUES
(1, '首页', 'index.php', 0),
(2, '解决方案', 'solve.php', 0),
(3, '资讯中心', 'news.php', 0),
(4, '案列展示', 'case.php', 0),
(5, '了解牛牛豆', 'about_us.php', 0),
(6, '总结2015，展望2016', 'news_01.php', 3),
(7, '案例展示——优购网', 'case_01.php', 4),
(10, '百度一下', 'http://www.baidu.com', 5);

-- --------------------------------------------------------

--
-- 表的结构 `nnb_news`
--

CREATE TABLE IF NOT EXISTS `nnb_news` (
  `new_id` int(5) NOT NULL AUTO_INCREMENT,
  `new_title` varchar(255) DEFAULT NULL,
  `new_time` varchar(255) DEFAULT NULL,
  `new_content` varchar(255) DEFAULT NULL,
  `new_img` varchar(255) DEFAULT NULL,
  PRIMARY KEY (`new_id`)
) ENGINE=MyISAM  DEFAULT CHARSET=gbk AUTO_INCREMENT=27 ;

--
-- 转存表中的数据 `nnb_news`
--

INSERT INTO `nnb_news` (`new_id`, `new_title`, `new_time`, `new_content`, `new_img`) VALUES
(1, '总结2015，展望2016，文豆继续创造辉煌2015年会回顾', '1561996593', '回顾2015年，在整个经济大环境不好的情况下，但是我们文豆人创造了很多 优异的成绩，这是所有文豆人一起努力的结果。2016年，我们一定会继续创 造辉煌，为更多人提供专业的IT服务，文豆值得你信赖', 'images/b2.png'),
(2, 'Ghost 博客中文版0.5.5正式发布', '1561996594', 'Ghost 官方昨日正式发布Ghost-0.5.5版本，并公布0.6版RodeMap。计划 完善Ghost API，站点地图等功能。由点云DianCloud本地化的Ghost博客 中文版本0.5.5源码Docker Image同日公布。', 'images/b3.png'),
(3, '10款提高IOS开发效率的XCode插件', '1561996595', '一套理想插件架构几乎能够决定整个集成开发环境的差异和特性。Sublime Text与TextMate就是很好的案例。但大家可能不了解的是，Xcode也支持 插件的应用...', 'images/b4.png'),
(4, 'ONES-PHP开源企业管理软件', '1561996596', 'ONES-ONS ,基于AngularJS+ThnkPHP开发的企业管理者系统平台，名字 可以理解为ONESisaNiubilityERPSystem或\r\n者ONESNotonlyanERPSystem...', 'images/b5.png'),
(5, 'PHP系统设计与云架构', '1561996597', '这几年我比较少写PHP了，有阵子很迷它，但是因为工作关系，把较多的时 间花在网络封包和数据库的分析工作上，而且因为年纪大了所以也很难找到 写程序的工作多半是做工程师的工头。', 'images/b6.png'),
(6, 'ONES-PHP开源企业管理软件', '1561996598', 'ONES-ONS ,基于AngularJS+ThnkPHP开发的企业管理者系统平台，名字 可以理解为ONESisaNiubilityERPSystem或者\r\ncol-md-5 ONESNotonlyanERPSystem.', 'images/b7.png'),
(26, '测试成功了吗', '1563098802', '测试成功了', NULL);

-- --------------------------------------------------------

--
-- 表的结构 `nnb_news_con`
--

CREATE TABLE IF NOT EXISTS `nnb_news_con` (
  `new_con_id` int(5) NOT NULL AUTO_INCREMENT,
  `new_con_name` varchar(255) DEFAULT NULL,
  `new_con_time` varchar(255) DEFAULT NULL,
  `new_id` int(5) DEFAULT NULL,
  `new_con_content` text,
  PRIMARY KEY (`new_con_id`) USING BTREE
) ENGINE=MyISAM  DEFAULT CHARSET=gbk AUTO_INCREMENT=19 ;

--
-- 转存表中的数据 `nnb_news_con`
--

INSERT INTO `nnb_news_con` (`new_con_id`, `new_con_name`, `new_con_time`, `new_id`, `new_con_content`) VALUES
(1, '总结2015，展望2016，文豆继续创造辉煌2015年会回顾', '1563088333', 1, '回顾2015年，在整个经济大环境不好的情况下，但是我们文豆人创造了很多优异的成绩， 这是所有文豆人一起努力的结果。2016年，我们一定会继续创造辉煌，为更多的人提供 专业的IT服务。 文豆是一家IT服务型公司，也是为梦想助力的一个平台,我们服务于社 会，让更多的有志青年可以有一门技术并以此作为人生的一个起点， 我们服务于企业，为更多的企业更好的实现他们的梦想，创造出更多 的价值，我们服务于我们文豆人，为更多文豆人实现自己的梦想。'),
(2, 'Ghost 博客中文版0.5.5正式发布', '1563088333', 2, 'Ghost官方昨日正式发布Ghost-0.5.5版，并公布0.6版RodeMap。计划完善 Ghost API  ，站点地图等功能。由点云DianCloud本地化的Ghost博客中文版0.5.5源码和Docker Image 同日发布。不熟悉NodeJS或者还没有VPS的同学，还可以使用点云的 Ghost博客托管服务，一键安装，自动配置，无需任何技术基础。Ghost是迄今为止最好用的开源博客平台。Ghost博客由前WordPress主管 John O''Nolan 和美女工程师 Hannah Wolfe 创立。开源社区支持率远超WordPress。\r\n\r\nGhost中文版由云应用托管服务商点云主导开发和在中国区推广。中文版代码将在与官方版保持一致的前提下，加入一些特有功能。 比如：可以将博文转换成长微博，自动发布到用户绑定的微博上； 可以与用户的公众账号关联，自动生成图文消息并推送等等'),
(3, '10款提高IOS开发效率的XCode插件', '1563088333', 3, '看起来很装逼的Xcode插件，但其实用性一点也不差。因为它可以让你在敲代码的时候更有节奏感！没错，就是节奏感！每敲击一次键盘都会有雪花效果（视觉）和声音效果（听觉），从视觉和听觉上让敲代码变得不再枯燥（震动效果可以关闭）。Xcode 有自带的高亮度同一个标识符的功能，但它的高亮度只是为每个标识符底部加上虚线，所以很难让人注意到。這个插件加强了原有的功能，当选中某个标识符的時候，同一个标识符都会自动加上背景高亮度'),
(4, 'ONES-PHP开源企业管理软件', '1563088333', 4, '智能化：\r\nOA通过智能语音来交互，消除软件界面；\r\n让组织每位成员拥有一位7*24小时的智能办公助理!\r\n\r\n平台化：\r\nOA平台与其他异构系统集成构建统一工作平台，\r\n\r\n7大引擎满足组织灵活变化需求，实现按需应变！\r\n\r\n全程电子化：\r\n电子印章、电子签名、电子合同、电子存证，\r\n彻底告别纸张办公，让组织的整个运营流程完全电子化！'),
(5, 'PHP系统设计与云架构', '1563088333', 5, 'a.让你可以把从 DB 的资料捞到快取一份到 MEMCACHE ,来减轻资料库的工作负担, 这在大型而且流量很高的系统上, 它辨演很重要的角色就是可以减轻 DB 的工作量.\r\n*我们这裡不多介绍 Memcahe 的使用及方式, 您可以多参考官方网站或其它网络上的教程.\r\n\r\nb.有一些不用储存用完就不要的资料, 也可以利用 memcache 直接存取不用再交给 DB 去处理.\r\n\r\nc.注意一件事:\r\n在过去裡我的下属们在使用它时常会犯一个错就是烂用 Memcache ,\r\n\r\nmemcache 本身是一个 TCP 的服务在单台 linux 伺服器下最多只能使用1024个请求, 当然你可以用 ulimit 提高它, 但是请先了解它的本质用对地方.'),
(6, 'ONES-PHP开源企业管理软件', '1563088333', 6, '核心+扩展应用架构，模块之间相对独立又可有机结合。\r\n\r\n可视化的的工作流设定。\r\n\r\nRBAC + 工作流节点权限 + 行级权限接口，丰富的权限控制组合\r\n\r\n独特的数据模型功能，用于扩展数据字段。\r\n\r\n简单的模块开发，无论是简单的小插件还是大型业务功能，均得心应手。\r\n\r\n独特的通用视图功能，通过约定和配置，写最少的代码完成更多的模块功能。\r\n\r\n完善的前后端缓存接口和插件机制。\r\n\r\n多TAB管理界面'),
(18, '测试成功了吗', '1563098802', 26, '就哈哈空间大框架按顾客的骄傲高科技');

-- --------------------------------------------------------

--
-- 表的结构 `nnb_service`
--

CREATE TABLE IF NOT EXISTS `nnb_service` (
  `ser_id` int(5) NOT NULL AUTO_INCREMENT,
  `ser_name` varchar(255) DEFAULT NULL,
  `ser_desc` varchar(255) DEFAULT NULL,
  `ser_img` varchar(255) DEFAULT NULL,
  PRIMARY KEY (`ser_id`)
) ENGINE=MyISAM  DEFAULT CHARSET=gbk AUTO_INCREMENT=8 ;

--
-- 转存表中的数据 `nnb_service`
--

INSERT INTO `nnb_service` (`ser_id`, `ser_name`, `ser_desc`, `ser_img`) VALUES
(1, '移动端应用开发解决方案', '牛牛豆为各个行业提供专业的APP开发方案，\r\n互动营销小游戏解决方案', 'images/a1.png'),
(2, '高品质网站解决方案', '牛牛豆作为专业的广州网站建设公司，\r\n集团队智慧为您提供专业的企业门户解决方案', 'images/a2.png'),
(3, '微信应用解决方案', '牛牛豆有着的微信应用开发经验，\r\n积累了众多互动社区的开发经验', 'images/a3.png'),
(4, '移动端应用开发解决方案', '牛牛豆为各个行业提供专业的APP开发方案，\r\n互动营销小游戏解决方案', 'images/a4.png'),
(5, '移动端应用开发解决方案', '牛牛豆为各个行业提供专业的APP开发方案，\r\n互动营销小游戏解决方案', 'images/a5.png'),
(6, '移动端应用开发解决方案', '牛牛豆为各个行业提供专业的APP开发方案，\r\n互动营销小游戏解决方案', 'images/a6.png');

-- --------------------------------------------------------

--
-- 表的结构 `nnb_solve`
--

CREATE TABLE IF NOT EXISTS `nnb_solve` (
  `sol_id` int(5) NOT NULL AUTO_INCREMENT,
  `sol_name` varchar(255) DEFAULT NULL,
  `sol_eng` varchar(255) DEFAULT NULL,
  `sol_content` varchar(255) DEFAULT NULL,
  `sol_img` varchar(255) DEFAULT NULL,
  `sol_time` varchar(255) DEFAULT NULL,
  PRIMARY KEY (`sol_id`)
) ENGINE=MyISAM  DEFAULT CHARSET=gbk AUTO_INCREMENT=46 ;

--
-- 转存表中的数据 `nnb_solve`
--

INSERT INTO `nnb_solve` (`sol_id`, `sol_name`, `sol_eng`, `sol_content`, `sol_img`, `sol_time`) VALUES
(1, 'APP、互动营销小游戏', 'Android ios HTML5', '我们为各个行业提供：\r\n移动端应用开发解决方案；互动营销小游戏解决方案；\r\n基于微信的应用解决；微信小程序解决方案', 'images/ao.png', NULL),
(2, '网站建设公司', '互动、营销', '文豆作为专业的广州网站建设公司，集团队智慧为您提供专业企业门户\r\n解决方案，从网站设计，技术结构，多方面为您考虑，助您塑造品牌，\r\n决胜未来并提供顾问、设计、建设、运营以及推广等一站式企业服务解\r\n决方案', 'images/ap.png', NULL),
(3, '电子商务		', 'B2B , B2C , SEO', '基于多年网络营销和自身在电子商务运营的基础上形成的解决方案。电\r\n子商务（E-COMMERCE）：从广义来说，是指以电子设备为媒介进行\r\n的商务活动；从狭义来说，是指以计算机网络为基础所进行的各种商务\r\n活动，包括商品和服务的提供者、广告商、消费者、中介商等有关各方\r\n行为的总和。根据交易对象的不同，电子商务可以被划分为三种典型模\r\n式：B2B（Business to Business，企业对企业），B2C（Business to\r\nCustomer，企业对消费者）和C2C（Customer to Cus', 'images/aq.png', NULL),
(4, '解决方案', '小程序、微应用、微商城、微网站', '文豆有着微信应用开发的经验，也通过开发不同的互动功能，积累了众\r\n多互动社区的开发经验，互动社区是基于社会网络关系系统思想的网站，\r\n这类型的网站以人为本。现在许多互动类型的营销推广方式都会采用微\r\n信应用互动来推广；我们也提供微商城、微官网等微信上的应用解决方\r\n案，为用户提升盈利，也提升用户的线上线下互动', 'images/ar.png', NULL),
(5, 'WEB前端技术人员', 'web seo', '文豆有着多年在PHP网站开发经验、Web前端开发经验以及设计经验，\r\n同时我们也把这些经验传授给想往互联网发展的人士；我们也为各个企\r\n业提供PHP、UI设计、Web前端的人才；我们也为各企业提供技术团队\r\n组建及外包等相关业务', 'images/as.png', NULL),
(6, 'B/S系统', 'web seo', '文豆采用B/S方式，提供OA系统系统、ERP、CRM等常见的B/S管理系\r\n统的解决方案，同时也根据用户需求量身定制各类管理系统的解决方案。\r\nB/S结构的系统有着异地浏览和信息采集的灵活性的特点。任何时间、\r\n任何地点、任何系统，只要可以浏览上网，就可以使用B/S系统的终端。\r\n目前，国外大型企业管理软件要么已经是B/S结构的，要么正在经历从\r\nC/S到B/S结构的转变。从国内诸多软件厂商积极投入开发B/S结构软件\r\n的趋势来看，B/S结构的大型管理软件可能在将来的几年内占据管理软\r\n件领域的主导地位', 'images/at.png', NULL);

-- --------------------------------------------------------

--
-- 表的结构 `nnb_user`
--

CREATE TABLE IF NOT EXISTS `nnb_user` (
  `user_id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `user_name` varchar(32) NOT NULL,
  `user_pwd` varchar(32) NOT NULL,
  `user_sex` int(11) NOT NULL,
  `user_email` varchar(50) NOT NULL,
  `user_phone` varchar(20) NOT NULL,
  `user_desc` text NOT NULL,
  PRIMARY KEY (`user_id`)
) ENGINE=MyISAM  DEFAULT CHARSET=utf8 COMMENT='会员表' AUTO_INCREMENT=31 ;

--
-- 转存表中的数据 `nnb_user`
--

INSERT INTO `nnb_user` (`user_id`, `user_name`, `user_pwd`, `user_sex`, `user_email`, `user_phone`, `user_desc`) VALUES
(1, 'nq', '4297f44b13955235245b2497399d7a93', 1, '1643114579@qq.com', '11023456', '成功了吗\r\n'),
(2, 'admin', '4297f44b13955235245b2497399d7a93', 1, '1599500153@qq.com', '1599500153', ''),
(30, 'aigin', '4297f44b13955235245b2497399d7a93', 0, '1643114579@qq.com', '13231313113', '爱的');

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
