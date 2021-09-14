-- phpMyAdmin SQL Dump
-- version 5.1.0
-- https://www.phpmyadmin.net/
--
-- 主機： 127.0.0.1
-- 產生時間： 2021-09-14 15:21:00
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
(1, 'roger', '8883'),
(2, 'guest', '952759');

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
(17, 'bg-1.jpg', 'background-1', 0),
(19, 'bg-2.jpg', 'background-2', 1);

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
(1, 'PHP資料庫網頁設計', 'at 泰山職訓局', '2021/03 - 2021/09 (6m)', '學習如何網頁排版、動態技術互動、資料庫規劃開發，更注重的是前後端實作整合應用<br>\r\n包含了AJAX API串接、Laravel framework技術操作<br>\r\n<br>\r\n•前端RWD切版boostrap5框架開發經驗<br>\r\n•Chart.js DataTables Moment.js等套件應用<br>\r\n•了解MVC架構開發 RESTful API運用<br>\r\n•基礎Git版本控制、npm套件管理程式', 1),
(2, 'Tour Guide', 'at YOLO Taiwan', '2018/03 - 2020/03 (2y)', 'Tripadvisor、Viator、GetYourGuide旅遊合作平台，在地外語私人導遊，接待外籍遊客<br>\r\n結合在地觀光特色推廣歷史人文及美食文化，以良好服務滿意度推動國民外交\r\n<a href=\"#\" target=\"_blank\">好評點我</a><br>\r\n<br>\r\n•依客製化需求提前協調完成旅程規劃<br>\r\n•培養良好溝通技巧與情緒管理<br>\r\n•分析問題、解決問題的靈活應變能力<br>\r\n•對旅客應有的責任感兼具細心、耐心和誠心', 1),
(4, 'Field Application Engineer', 'at EDOM Technology', '2014/09 - 2016/05 (1y8m)', '負責Broadcom產品線代理，其內容為被動式光纖網路(GPON)和WIFI模組環境的架設與測試<br>\r\n綠色供應鏈品保業務窗口，熟悉國際相關綠色文件規範<br>\r\n<br>\r\n•能夠獨立作業及原廠客戶端溝通協調能力<br>\r\n•追蹤專案時程進度掌控<br>\r\n•協助業務團隊解決銷售過程中的技術問題及提供售後的技術支援<br>\r\n•產品安全規範文件的更新維護<br>\r\n•熟悉職場英文書信用語', 1),
(5, '材料科學與工程學系畢業', 'at 國立東華大學', '2009 - 2013 (4y)', '主修金屬、陶瓷、電子半導體材料等之原理、製程與應用<br>\r\n<br>\r\n•運用數學、科學及材料工程知識<br>\r\n•設計與執行材料實驗及分析數據<br>\r\n•製程整合及元件實作<br>', 1);

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
(3, '我是Roger，出生於1991年，熱愛運動及旅遊冒險，擁有兩年外語導遊與一年半科技業硬體工程師工作經驗，擅長與人溝通且樂於嘗試新的事物，主動學習並勇於接受過程中的挑戰。<br>\r\n在Udemy與六角學院的自學課程中，開發出對於程式設計的興趣，進而全心投入其領域後踏上了轉職的道路，希望從學習歷程中累積的各項專業技術與知識，持續精進自己並充分運用於網頁程式設計。<br>', 1);

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
(8, 'headshot_2.jpg', 1);

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
(1, 'frontend', 'frontend_walkingTrail.jpg', 'http://220.128.133.15/s1100217/portfolio/walkingTrail_api/', 'https://github.com/redtea227/OpenData-API_walkingTrail', '全台步道資訊網', '。使用AJAX與open data api串接應用<br>\r\n。Google Analytics網站流量統計服務，分析使用者與網站互動數據<br>\r\n。運用Chart.js DataTables等套件效果<br>\r\n。RWD響應式設計<br>', 1),
(2, 'frontend', 'frontend_hamster.jpg', 'http://220.128.133.15/s1100217/portfolio/Hamster/', 'https://github.com/redtea227/Hamster_ninja', '打地鼠小遊戲', '。原生JS 互動<br>\r\n。settimeout, event, dom 的控制<br>\r\n。鍵盤事件的調整與控制', 1),
(3, 'backend', 'backend_resume.jpg', '', 'https://github.com/redtea227/resume_backend', '後台履歷系統', '。後台CMS更新維護與前台串接<br>\r\n。PHP+MySQL 資料庫CRUD整合運用<br>\r\n。boostrap 5套件美化介面<br>', 1),
(5, 'backend', 'backend_bquiz02.jpg', 'http://220.128.133.15/s1100217/portfolio/web17/', 'https://github.com/redtea227/bquiz02', '健康資訊網', '。前端JS與後端API串接資料驗證功能<br>\r\n。PHP+MySQL 後台分類功能管理<br>\r\n。問卷調查投票與結果統計<br>', 1),
(6, 'backend', 'backend_calendar.jpg', 'http://220.128.133.15/s1100217/portfolio/calendar/', 'https://github.com/redtea227/calendar', '萬年曆', '。PHP date( ) mktime( ) 日期時間格式化<br>\r\n。自訂 data 屬性，結合hover顯示效果<br>', 1),
(8, 'photo', 'photo_logoDesign.jpg', 'http://220.128.133.15/s1100217/portfolio/photo/photo_logoDesign.jpg', '', '個人logo設計', '', 1),
(9, 'photo', 'photo_dm.jpg', 'http://220.128.133.15/s1100217/portfolio/photo/photo_dm.jpg', '', '旅遊DM', '', 1),
(11, 'photo', 'photo_calendar.jpg', 'http://220.128.133.15/s1100217/portfolio/photo/photo_calendar.jpg', '', '牛年曆', '', 1);

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
(4, 'AJAX', 'BEGINNER', '70%', 'left', 'bg-info', 1),
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
(1, 'There is no end to learning', '羅鼎傑 | Roger Lo', 'Web developer', 1),
(2, 'To make each day count', 'Anthony', 'Engineer', 0);

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
  MODIFY `id` int(5) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=22;

--
-- 使用資料表自動遞增(AUTO_INCREMENT) `experience`
--
ALTER TABLE `experience`
  MODIFY `id` int(5) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;

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
  MODIFY `id` int(5) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- 使用資料表自動遞增(AUTO_INCREMENT) `portfolio`
--
ALTER TABLE `portfolio`
  MODIFY `id` int(5) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;

--
-- 使用資料表自動遞增(AUTO_INCREMENT) `skills`
--
ALTER TABLE `skills`
  MODIFY `id` int(5) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=14;

--
-- 使用資料表自動遞增(AUTO_INCREMENT) `typewriter`
--
ALTER TABLE `typewriter`
  MODIFY `id` int(5) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
