-- phpMyAdmin SQL Dump
-- version 5.1.0
-- https://www.phpmyadmin.net/
--
-- 主機： 127.0.0.1
-- 產生時間： 2021-09-04 17:01:08
-- 伺服器版本： 10.4.18-MariaDB
-- PHP 版本： 7.3.27

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- 資料庫： `resume`
--

-- --------------------------------------------------------

--
-- 資料表結構 `admin`
--

CREATE TABLE `admin` (
  `id` int(5) UNSIGNED NOT NULL COMMENT '流水號',
  `acc` text COLLATE utf8mb4_unicode_ci NOT NULL COMMENT '帳號',
  `pw` text COLLATE utf8mb4_unicode_ci NOT NULL COMMENT '密碼'
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- 傾印資料表的資料 `admin`
--

INSERT INTO `admin` (`id`, `acc`, `pw`) VALUES
(1, 'admin', '1234'),
(2, 'guest', '1234');

-- --------------------------------------------------------

--
-- 資料表結構 `bg`
--

CREATE TABLE `bg` (
  `id` int(5) UNSIGNED NOT NULL,
  `img` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `text` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `sh` int(1) NOT NULL DEFAULT 0
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- 傾印資料表的資料 `bg`
--

INSERT INTO `bg` (`id`, `img`, `text`, `sh`) VALUES
(17, 'bg-1.jpg', 'background-1', 1),
(19, 'bg-2.jpg', 'background-2', 0);

-- --------------------------------------------------------

--
-- 資料表結構 `experience`
--

CREATE TABLE `experience` (
  `id` int(5) UNSIGNED NOT NULL,
  `name` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `company` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `time` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `content` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `sh` int(1) NOT NULL DEFAULT 0
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- 傾印資料表的資料 `experience`
--

INSERT INTO `experience` (`id`, `name`, `company`, `time`, `content`, `sh`) VALUES
(1, 'PHP資料庫網頁設計', 'at 泰山職訓局', '2021 - Present', '前端網頁排版 HTML/CSS<br>\r\n網頁動態技術 JavaScript/jQuery/Ajax<br>\r\n後端PHP與MySQL資料庫連結規劃<br>\r\nPhotoshop/Illustrator繪圖操作', 1),
(2, 'Tour Guide', 'at YOLO Taiwan', '2018 - 2020', '在地外語私人導遊,接待外籍遊客<br>\r\n北北基客製化一日遊行程<br>\r\nTripadvisor、Viator、GetYourGuide合作平台<br>\r\n<a href=\"#\" target=\"_blank\">5-stars reviews</a>', 1),
(3, 'Studying & traveling abroad', 'at Australia and Philippine', '2016 - 2018', '澳洲打工度假 Melbourne/Sydney/Cairns/Uluru<br>\r\n菲律賓語言學校 English Fella 2 -  Cebu English language school<br>\r\n考取多益 730-<a href=\"http://220.128.133.15/s1100217/resume_img/TOEIC.jpg\" target=\"_blank\">證書img</a>', 0),
(4, 'Field Application Engineer', 'at EDOM Technology', '2014 - 2016', '負責Broadcom產品線代理,其內容為被動式光纖網路(GPON)和WIFI模組環境的架設與測試<br>\r\n電子零件品保相關業務,Green  report ,SGS  report  ,歐盟RoHS ,REACH ,Halogen  free等', 1),
(5, '材料科學與工程學系畢業', 'at 國立東華大學', '2009 - 2013', '主修傳統及光電半導體材料相關實驗,如金屬金相、陶瓷壓電、微影光罩、PVD、CVD、奈米薄膜材料', 1),
(6, 'test', 'test', 'test', 'test', 0);

-- --------------------------------------------------------

--
-- 資料表結構 `icon`
--

CREATE TABLE `icon` (
  `id` int(5) UNSIGNED NOT NULL,
  `name` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `class` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `href` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `sh` int(1) NOT NULL DEFAULT 0
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- 傾印資料表的資料 `icon`
--

INSERT INTO `icon` (`id`, `name`, `class`, `href`, `sh`) VALUES
(1, 'Github', 'fab fa-github', 'https://github.com/redtea227', 1),
(2, 'Linkedin', 'fab fa-linkedin', 'https://linkedin.com/in/redtea227', 1),
(3, 'Line', 'fab fa-line', 'https://line.me/ti/p/RwbbhW9lDW', 1),
(4, 'Mail', 'fas fa-envelope', 'mailto:redtea227@hotmail.com', 1),
(5, 'google', 'fab fa-google', 'https://www.google.com.tw/', 0);

-- --------------------------------------------------------

--
-- 資料表結構 `intro`
--

CREATE TABLE `intro` (
  `id` int(5) UNSIGNED NOT NULL,
  `text` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `sh` int(1) NOT NULL DEFAULT 0
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- 傾印資料表的資料 `intro`
--

INSERT INTO `intro` (`id`, `text`, `sh`) VALUES
(2, 'Hello! I’m Roger Lo. I am passionate about Web Design. I am a skilled front-end developer and back-end developer such as HTML/CSS , JS and PHP. I am a quick learner and a team worker that gets the job done.<br>\r\n<br>', 0),
(3, '大家好!我是Roger，我的前份工作雖然因為在2020疫情期間受到了影響而停擺，但這也讓我有機會空出了時間並停下腳步，進一步規劃自己的職涯，而把方向設定在遠距及未來趨勢上，早期從數位媒體上對程式設計的世界就充滿了好奇心，這也符合我設定的目標，在書籍及Udemy線上課程中學習了Python，有了對程式語言的基礎認識後，就決定全心投入程式設計的領域，踏上了轉職的道路。<br>\r\n<br>\r\n在PHP資料庫網頁設計將近六個月扎實的課程裡，除了學習如何網頁排版、動態技術互動、資料庫規劃開發外，更注重的是前後端實作整合應用，這當中也包含API串接、RWD、Laravel framework技術操作以及Git版控，從各項專業技能與知識的累積上，期待著能成為理想目標中的網頁程式設計師。', 1);

-- --------------------------------------------------------

--
-- 資料表結構 `photo`
--

CREATE TABLE `photo` (
  `id` int(5) UNSIGNED NOT NULL,
  `img` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `sh` int(1) NOT NULL DEFAULT 0
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- 傾印資料表的資料 `photo`
--

INSERT INTO `photo` (`id`, `img`, `sh`) VALUES
(5, 'headshot_1.jpg', 0),
(8, 'headshot_2.jpg', 0),
(9, 'headshot_3.JPG', 1);

-- --------------------------------------------------------

--
-- 資料表結構 `portfolio`
--

CREATE TABLE `portfolio` (
  `id` int(5) UNSIGNED NOT NULL,
  `type` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `img` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `href1` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `href2` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `subject` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `text` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `sh` int(1) NOT NULL DEFAULT 0
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- 傾印資料表的資料 `portfolio`
--

INSERT INTO `portfolio` (`id`, `type`, `img`, `href1`, `href2`, `subject`, `text`, `sh`) VALUES
(1, 'frontend', 'frontend_walkingTrail.jpg', 'http://220.128.133.15/s1100217/portfolio/walkingTrail_api/', 'https://github.com/redtea227/OpenData-API_walkingTrail', '全台步道資訊網', '利用 Ajax 與政府 open data 做 api 串接應用66666666666666666666666666666666666', 1),
(2, 'frontend', 'frontend_walkingTrail.jpg', '', '', 'ph2', '222333', 1),
(3, 'backend', 'backend_calendar.jpg', 'http://220.128.133.15/s1100217/portfolio/calendar/', 'https://github.com/redtea227/calendar', '萬年曆', 'PHP製作年曆並利用自訂 data 屬性，結合hover顯示效果', 1),
(5, 'backend', 'backend_bquiz02.jpg', 'http://220.128.133.15/s1100217/portfolio/web17/', 'https://github.com/redtea227/bquiz02', '健康資訊網', '網頁設計乙級技術士題目', 1),
(6, 'frontend', '01D05.jpg', '', '', 'ph1', '555', 0),
(8, 'frontend', '', 'texet', 'text', 'text', 'text', 0),
(9, 'photo', 'photo_logoDesign.jpg', '', '', '個人logo設計', '', 1);

-- --------------------------------------------------------

--
-- 資料表結構 `skills`
--

CREATE TABLE `skills` (
  `id` int(5) UNSIGNED NOT NULL,
  `name` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `level` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `width` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `position` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `color` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `sh` int(1) NOT NULL DEFAULT 0
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- 傾印資料表的資料 `skills`
--

INSERT INTO `skills` (`id`, `name`, `level`, `width`, `position`, `color`, `sh`) VALUES
(1, 'HTML', 'ADVANCE', '80%', 'left', 'bg-info', 1),
(2, 'CSS', 'ADVANCE', '80%', 'left', 'bg-info', 1),
(3, 'JavaScript/jQuery', 'ADVANCE', '80%', 'left', 'bg-info', 1),
(4, 'AJAX', 'ADVANCE', '80%', 'left', 'bg-info', 1),
(5, 'English TOEIC 730', 'ADVANCE', '80%', 'right', 'bg-secondary', 1),
(6, 'PHP', 'ADVANCE', '80%', 'right', 'bg-secondary', 1),
(7, 'MySQL', 'ADVANCE', '80%', 'right', 'bg-secondary', 1),
(8, 'Photoshop / Illustrator', 'BEGINNER', '70%', 'right', 'bg-secondary', 1),
(13, 'test', 'test', '70%', 'left', 'bg-primary', 0);

-- --------------------------------------------------------

--
-- 資料表結構 `typewriter`
--

CREATE TABLE `typewriter` (
  `id` int(5) UNSIGNED NOT NULL,
  `first` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `second` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `third` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `sh` int(1) NOT NULL DEFAULT 0
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- 傾印資料表的資料 `typewriter`
--

INSERT INTO `typewriter` (`id`, `first`, `second`, `third`, `sh`) VALUES
(1, 'To make each day count', 'Roger Lo', 'Web developer', 1),
(2, '你好啊', 'amy', 'ghko', 0);

--
-- 已傾印資料表的索引
--

--
-- 資料表索引 `admin`
--
ALTER TABLE `admin`
  ADD PRIMARY KEY (`id`);

--
-- 資料表索引 `bg`
--
ALTER TABLE `bg`
  ADD PRIMARY KEY (`id`);

--
-- 資料表索引 `experience`
--
ALTER TABLE `experience`
  ADD PRIMARY KEY (`id`);

--
-- 資料表索引 `icon`
--
ALTER TABLE `icon`
  ADD PRIMARY KEY (`id`);

--
-- 資料表索引 `intro`
--
ALTER TABLE `intro`
  ADD PRIMARY KEY (`id`);

--
-- 資料表索引 `photo`
--
ALTER TABLE `photo`
  ADD PRIMARY KEY (`id`);

--
-- 資料表索引 `portfolio`
--
ALTER TABLE `portfolio`
  ADD PRIMARY KEY (`id`);

--
-- 資料表索引 `skills`
--
ALTER TABLE `skills`
  ADD PRIMARY KEY (`id`);

--
-- 資料表索引 `typewriter`
--
ALTER TABLE `typewriter`
  ADD PRIMARY KEY (`id`);

--
-- 在傾印的資料表使用自動遞增(AUTO_INCREMENT)
--

--
-- 使用資料表自動遞增(AUTO_INCREMENT) `admin`
--
ALTER TABLE `admin`
  MODIFY `id` int(5) UNSIGNED NOT NULL AUTO_INCREMENT COMMENT '流水號', AUTO_INCREMENT=4;

--
-- 使用資料表自動遞增(AUTO_INCREMENT) `bg`
--
ALTER TABLE `bg`
  MODIFY `id` int(5) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=21;

--
-- 使用資料表自動遞增(AUTO_INCREMENT) `experience`
--
ALTER TABLE `experience`
  MODIFY `id` int(5) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- 使用資料表自動遞增(AUTO_INCREMENT) `icon`
--
ALTER TABLE `icon`
  MODIFY `id` int(5) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- 使用資料表自動遞增(AUTO_INCREMENT) `intro`
--
ALTER TABLE `intro`
  MODIFY `id` int(5) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=14;

--
-- 使用資料表自動遞增(AUTO_INCREMENT) `photo`
--
ALTER TABLE `photo`
  MODIFY `id` int(5) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;

--
-- 使用資料表自動遞增(AUTO_INCREMENT) `portfolio`
--
ALTER TABLE `portfolio`
  MODIFY `id` int(5) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;

--
-- 使用資料表自動遞增(AUTO_INCREMENT) `skills`
--
ALTER TABLE `skills`
  MODIFY `id` int(5) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=14;

--
-- 使用資料表自動遞增(AUTO_INCREMENT) `typewriter`
--
ALTER TABLE `typewriter`
  MODIFY `id` int(5) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
