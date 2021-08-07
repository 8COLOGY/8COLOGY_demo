-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- ホスト: localhost
-- 生成日時: 2021 年 8 月 07 日 15:26
-- サーバのバージョン： 10.4.19-MariaDB
-- PHP のバージョン: 8.0.7

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- データベース: `8COLOGY`
--

-- --------------------------------------------------------

--
-- テーブルの構造 `t_activites`
--

CREATE TABLE `t_activites` (
  `id` int(3) NOT NULL,
  `activites_date` varchar(10) COLLATE utf8mb4_unicode_ci NOT NULL,
  `activites_name` varchar(72) COLLATE utf8mb4_unicode_ci NOT NULL,
  `comment` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `img` varchar(128) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `is_deleted` int(1) NOT NULL DEFAULT 0,
  `created_at` datetime NOT NULL,
  `updated_at` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- テーブルのデータのダンプ `t_activites`
--

INSERT INTO `t_activites` (`id`, `activites_date`, `activites_name`, `comment`, `img`, `is_deleted`, `created_at`, `updated_at`) VALUES
(1, '20210801', '百道浜の清掃活動を始めました', '海洋ゴミ削減活動の一環として毎月1回百道浜海岸の清掃活動を始めました。', 'petcap.jpeg', 0, '2021-07-29 22:38:46', '2021-07-29 22:38:46'),
(2, '2021.07.30', 'ペットボトルキャップ回収始めました', 'ペットボトルキャップの回収をはじめました。集めたペットボトルキャップは、回収業者に買い取られ、その買取金額の一部が寄付になります。', 'upload/20210731111005d41d8cd98f00b204e9800998ecf8427e.jpeg', 0, '2021-07-31 18:10:05', '2021-07-31 18:10:05'),
(3, '2021.07.30', 'ペットボトルキャップ回収始めました', 'ペットボトルキャップの回収をはじめました。集めたペットボトルキャップは、回収業者に買い取られ、その買取金額の一部が寄付になります。', 'upload/20210731113554d41d8cd98f00b204e9800998ecf8427e.jpeg', 0, '2021-07-31 18:35:54', '2021-07-31 18:35:54');

-- --------------------------------------------------------

--
-- テーブルの構造 `t_inquiry`
--

CREATE TABLE `t_inquiry` (
  `id` int(3) NOT NULL,
  `last_name` varchar(16) COLLATE utf8mb4_unicode_ci NOT NULL,
  `first_name` varchar(16) COLLATE utf8mb4_unicode_ci NOT NULL,
  `tel` varchar(11) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `subject` varchar(72) COLLATE utf8mb4_unicode_ci NOT NULL,
  `message` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` datetime NOT NULL,
  `is_deleted` int(1) NOT NULL DEFAULT 0
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- テーブルのデータのダンプ `t_inquiry`
--

INSERT INTO `t_inquiry` (`id`, `last_name`, `first_name`, `tel`, `email`, `subject`, `message`, `created_at`, `is_deleted`) VALUES
(1, '環境', '良子', '09012345678', 'kankyo@test.co.jp', '回収BOXについて', '回収BOXの設置場所を増やして欲しいです。', '2021-07-28 07:10:19', 0),
(4, '地球', '太郎', '09011111111', 'earth@test.co.jp', 'LINEポイントについて', 'BOXに入れた個数に応じて付与するポイントも増やして欲しいです。ご検討よろしくおねがいします。', '2021-07-28 20:25:54', 0),
(6, '海山', '川子', '09012345678', 'sea@test.co.jp', 'LINEポイントについて', 'こんにちは。LINEポイントの付与がされていないようです。お手数ですがご確認をお願いします。', '2021-08-01 17:18:41', 0),
(7, '海野', '浜子', '09012345678', '0', '回収BOXの設置について', '回収BOXの設置場所を増やして欲しいです。ご検討よろしくおねがします。', '2021-08-07 20:22:31', 0),
(8, '河野', '幸子', '09012345678', '0', '回収BOX設置について', '佐賀県スーパー経営者です。当店にも回収BOXを設置したいので費用など詳細を教えてください。', '2021-08-07 20:37:05', 0),
(9, '海野', '洋子', '09012345678', '0', '回収BOXの設置追加について', '現在経営しているスーパーの店舗に追加で回収BOXを設置したいです。費用など詳細をご連絡ださい。', '2021-08-07 21:00:11', 0),
(10, '山川', '花子', '09012345678', '0', '回収BOXの追加設置について', '現在経営しているスーパーの店舗を増やすことになり、追加で回収BOXを設置したいです。費用など、詳細をご連絡ください。', '2021-08-07 21:06:44', 0);

-- --------------------------------------------------------

--
-- テーブルの構造 `t_users`
--

CREATE TABLE `t_users` (
  `id` int(12) NOT NULL,
  `user_name` varchar(128) COLLATE utf8mb4_unicode_ci NOT NULL,
  `password` varchar(128) COLLATE utf8mb4_unicode_ci NOT NULL,
  `is_admin` int(1) NOT NULL DEFAULT 0,
  `is_deleted` int(1) NOT NULL DEFAULT 0,
  `created_at` datetime NOT NULL,
  `updated_at` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- テーブルのデータのダンプ `t_users`
--

INSERT INTO `t_users` (`id`, `user_name`, `password`, `is_admin`, `is_deleted`, `created_at`, `updated_at`) VALUES
(5, 'namba', '12345', 1, 0, '2021-06-28 20:54:09', '2021-06-28 20:54:09'),
(6, 'koishi', '514514514', 1, 0, '2021-06-29 10:18:37', '2021-06-29 10:18:37'),
(7, 'costomerA', '12345', 0, 0, '2021-06-29 19:27:13', '2021-06-29 19:27:13'),
(8, 'costomerB', '98765', 0, 0, '2021-06-29 19:42:28', '2021-06-29 19:42:28');

--
-- ダンプしたテーブルのインデックス
--

--
-- テーブルのインデックス `t_activites`
--
ALTER TABLE `t_activites`
  ADD PRIMARY KEY (`id`);

--
-- テーブルのインデックス `t_inquiry`
--
ALTER TABLE `t_inquiry`
  ADD PRIMARY KEY (`id`);

--
-- テーブルのインデックス `t_users`
--
ALTER TABLE `t_users`
  ADD PRIMARY KEY (`id`);

--
-- ダンプしたテーブルの AUTO_INCREMENT
--

--
-- テーブルの AUTO_INCREMENT `t_activites`
--
ALTER TABLE `t_activites`
  MODIFY `id` int(3) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- テーブルの AUTO_INCREMENT `t_inquiry`
--
ALTER TABLE `t_inquiry`
  MODIFY `id` int(3) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- テーブルの AUTO_INCREMENT `t_users`
--
ALTER TABLE `t_users`
  MODIFY `id` int(12) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
