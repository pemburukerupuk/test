-- phpMyAdmin SQL Dump
-- version 4.7.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Feb 05, 2018 at 01:26 PM
-- Server version: 10.1.25-MariaDB
-- PHP Version: 5.6.31

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `test`
--

-- --------------------------------------------------------

--
-- Table structure for table `absensi`
--

CREATE TABLE `absensi` (
  `a_id` int(11) NOT NULL,
  `datetime_masuk` datetime NOT NULL,
  `datetime_keluar` datetime NOT NULL,
  `a_status` varchar(33) NOT NULL,
  `p_id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `absensi`
--

INSERT INTO `absensi` (`a_id`, `datetime_masuk`, `datetime_keluar`, `a_status`, `p_id`) VALUES
(595, '2018-01-02 07:20:16', '2018-01-02 16:20:16', 'Terlambat', 2),
(596, '2018-01-02 07:06:12', '2018-01-02 16:16:12', 'Terlambat', 3),
(597, '2018-01-02 07:28:48', '2018-01-02 16:28:48', 'Terlambat', 4),
(598, '2018-01-02 07:21:36', '2018-01-02 16:21:36', 'Terlambat', 8),
(599, '2018-01-02 07:07:15', '2018-01-02 16:16:15', 'Terlambat', 9),
(600, '2018-01-02 06:52:15', '2018-01-02 16:52:15', 'Tepat', 10),
(601, '2018-01-02 07:22:41', '2018-01-02 16:22:41', 'Terlambat', 11),
(602, '2018-01-02 07:22:31', '2018-01-02 16:22:31', 'Terlambat', 12),
(603, '2018-01-02 06:46:05', '2018-01-02 12:46:16', 'Jam Kurang', 13),
(604, '2018-01-02 06:47:21', '2018-01-02 12:47:21', 'Jam Kurang', 14),
(605, '2018-01-02 07:02:04', '2018-01-02 16:02:04', 'Terlambat', 15),
(606, '2018-01-02 08:16:53', '2018-01-02 16:16:53', 'Terlambat', 16),
(607, '2018-01-02 06:29:06', '2018-01-02 16:29:16', 'Tepat', 17),
(608, '2018-01-02 07:01:01', '2018-01-02 16:01:01', 'Terlambat', 18),
(609, '2018-01-02 06:59:09', '2018-01-02 16:59:16', 'Tepat', 19),
(610, '2018-01-02 06:43:21', '2018-01-02 16:43:21', 'Tepat', 20),
(611, '2018-01-02 07:01:35', '2018-01-02 16:01:35', 'Terlambat', 21),
(612, '2018-01-02 06:30:11', '2018-01-02 16:30:11', 'Tepat', 22),
(613, '2018-01-02 06:57:40', '2018-01-02 16:57:40', 'Tepat', 23),
(614, '2018-01-02 06:41:25', '2018-01-02 16:41:25', 'Tepat', 24),
(615, '2018-01-02 07:07:44', '2018-01-02 16:16:44', 'Terlambat', 25),
(616, '2018-01-02 06:42:22', '2018-01-02 16:42:22', 'Tepat', 26),
(617, '2018-01-02 06:42:28', '2018-01-02 16:42:28', 'Tepat', 27),
(618, '2018-01-02 05:46:51', '2018-01-02 16:46:51', 'Tepat', 28),
(619, '2018-01-02 07:19:38', '2018-01-02 16:19:38', 'Terlambat', 29),
(620, '2018-01-02 06:52:53', '2018-01-02 16:52:53', 'Tepat', 30),
(621, '2018-01-02 06:48:31', '2018-01-02 16:48:31', 'Tepat', 31),
(622, '2018-01-02 07:03:27', '2018-01-02 16:03:27', 'Terlambat', 32),
(623, '2018-01-02 07:24:45', '2018-01-02 16:24:45', 'Terlambat', 33),
(624, '2018-01-02 07:17:28', '2018-01-02 16:17:28', 'Terlambat', 34),
(625, '2018-01-02 05:42:56', '2018-01-02 16:42:56', 'Tepat', 35),
(626, '2018-01-02 06:47:25', '2018-01-02 16:47:25', 'Tepat', 36),
(627, '2018-01-02 06:55:45', '2018-01-02 16:55:45', 'Tepat', 37),
(628, '2018-01-02 07:01:58', '2018-01-02 16:01:58', 'Terlambat', 38),
(629, '2018-01-02 07:08:29', '2018-01-02 16:16:29', 'Terlambat', 39),
(630, '2018-01-02 06:00:25', '2018-01-02 16:00:25', 'Tepat', 40),
(631, '2018-01-02 06:37:45', '2018-01-02 16:37:45', 'Tepat', 41),
(632, '2018-01-02 06:58:46', '2018-01-02 12:58:46', 'Jam Kurang', 42),
(633, '2018-01-02 06:37:51', '2018-01-02 16:37:51', 'Tepat', 43),
(634, '2018-01-02 06:14:17', '2018-01-02 16:14:17', 'Tepat', 44),
(635, '2018-01-02 07:17:24', '2018-01-02 16:17:24', 'Terlambat', 45),
(636, '2018-01-02 07:30:50', '2018-01-02 16:30:50', 'Terlambat', 46),
(637, '2018-01-02 07:15:17', '2018-01-02 16:15:17', 'Terlambat', 47),
(638, '2018-01-02 07:30:44', '2018-01-02 16:30:44', 'Terlambat', 48),
(639, '2018-01-02 07:36:12', '2018-01-02 16:36:12', 'Terlambat', 49),
(640, '2018-01-02 07:21:25', '2018-01-02 16:21:25', 'Terlambat', 50),
(641, '2018-01-02 06:57:37', '2018-01-02 16:57:37', 'Tepat', 51),
(642, '2018-01-02 07:26:06', '2018-01-02 16:26:16', 'Terlambat', 52),
(643, '2018-01-02 07:28:34', '2018-01-02 16:28:34', 'Terlambat', 53),
(644, '2018-01-02 07:21:43', '2018-01-02 16:21:43', 'Terlambat', 54),
(645, '2018-01-02 07:20:58', '2018-01-02 16:20:58', 'Terlambat', 55),
(646, '2018-01-02 07:46:27', '2018-01-02 16:46:27', 'Terlambat', 56),
(647, '2018-01-02 07:20:55', '2018-01-02 16:20:55', 'Terlambat', 57),
(648, '2018-01-02 06:54:42', '2018-01-02 16:54:42', 'Tepat', 58),
(649, '2018-01-02 05:53:00', '2018-01-02 16:53:00', 'Tepat', 59),
(650, '2018-01-02 07:52:23', '2018-01-02 16:52:23', 'Terlambat', 60),
(651, '2018-01-02 06:31:06', '2018-01-02 16:31:16', 'Tepat', 61),
(652, '2018-01-02 07:38:23', '2018-01-02 16:38:23', 'Terlambat', 62),
(653, '2018-01-02 07:38:34', '2018-01-02 16:38:34', 'Terlambat', 63),
(654, '2018-01-02 07:36:16', '2018-01-02 16:36:16', 'Terlambat', 64),
(655, '2018-01-02 07:23:27', '2018-01-02 16:23:27', 'Terlambat', 65),
(656, '2018-01-02 07:38:40', '2018-01-02 16:38:40', 'Terlambat', 66),
(657, '2018-01-02 08:20:17', '2018-01-02 16:20:17', 'Terlambat', 67),
(658, '2018-01-02 07:21:23', '2018-01-02 16:21:23', 'Terlambat', 68),
(659, '2018-01-02 07:21:32', '2018-01-02 16:21:32', 'Terlambat', 69),
(660, '2018-01-02 06:54:39', '2018-01-02 16:54:39', 'Tepat', 70),
(661, '2018-01-02 06:51:17', '2018-01-02 16:51:17', 'Tepat', 71),
(662, '2018-01-02 06:08:56', '2018-01-02 16:16:56', 'Tepat', 72),
(663, '2018-01-02 06:37:55', '2018-01-02 11:37:55', 'Jam Kurang', 73),
(664, '2018-01-02 06:41:38', '2018-01-02 11:41:38', 'Jam Kurang', 74),
(665, '2018-01-02 06:50:47', '2018-01-02 11:50:47', 'Jam Kurang', 75),
(666, '2018-01-02 07:07:29', '2018-01-02 16:16:29', 'Terlambat', 76),
(667, '2018-01-02 07:09:36', '2018-01-02 16:16:36', 'Terlambat', 77),
(668, '2018-01-02 07:10:51', '2018-01-02 16:16:51', 'Terlambat', 78),
(669, '2018-01-02 07:32:50', '2018-01-02 16:32:50', 'Terlambat', 79),
(670, '2018-01-02 06:48:59', '2018-01-02 16:48:59', 'Tepat', 80),
(671, '2018-01-02 06:33:28', '2018-01-02 16:33:28', 'Tepat', 81),
(672, '2018-01-02 06:12:42', '2018-01-02 16:12:42', 'Tepat', 82),
(673, '2018-01-02 07:52:10', '2018-01-02 16:52:16', 'Terlambat', 83),
(674, '2018-01-02 07:57:00', '2018-01-02 16:57:00', 'Terlambat', 84),
(675, '2018-01-02 07:00:30', '2018-01-02 16:00:30', 'Terlambat', 85),
(676, '2018-01-02 06:14:48', '2018-01-02 16:14:48', 'Tepat', 86),
(677, '2018-01-02 06:41:15', '2018-01-02 16:41:15', 'Tepat', 87),
(678, '2018-01-02 06:56:53', '2018-01-02 16:56:53', 'Tepat', 88),
(679, '2018-01-02 05:49:19', '2018-01-02 16:49:19', 'Tepat', 89),
(680, '2018-01-02 07:36:08', '2018-01-02 16:36:16', 'Terlambat', 90),
(681, '2018-01-02 07:24:48', '2018-01-02 16:24:48', 'Terlambat', 91),
(682, '2018-01-02 06:28:54', '2018-01-02 16:28:54', 'Tepat', 92),
(683, '2018-01-02 07:26:39', '2018-01-02 16:26:39', 'Terlambat', 93),
(684, '2018-01-02 07:15:08', '2018-01-02 16:15:16', 'Terlambat', 94),
(685, '2018-01-02 07:07:39', '2018-01-02 16:16:39', 'Terlambat', 95),
(686, '2018-01-02 07:15:10', '2018-01-02 16:15:16', 'Terlambat', 96),
(687, '2018-01-02 07:29:24', '2018-01-02 16:29:24', 'Terlambat', 97),
(688, '2018-01-02 07:07:06', '2018-01-02 16:16:16', 'Terlambat', 98),
(689, '2018-01-02 07:04:05', '2018-01-02 16:04:16', 'Terlambat', 99),
(690, '2018-01-02 07:27:53', '2018-01-02 16:27:53', 'Terlambat', 100),
(691, '2018-01-02 07:29:40', '2018-01-02 16:29:40', 'Terlambat', 101),
(692, '2018-01-03 07:20:16', '2018-01-03 16:20:16', 'Terlambat', 2),
(693, '2018-01-03 07:06:12', '2018-01-03 16:16:12', 'Terlambat', 3),
(694, '2018-01-03 07:28:48', '2018-01-03 16:28:48', 'Terlambat', 4),
(695, '2018-01-03 07:25:35', '2018-01-03 16:25:35', 'Terlambat', 5),
(696, '2018-01-03 07:21:54', '2018-01-03 16:21:54', 'Terlambat', 6),
(697, '2018-01-03 07:25:31', '2018-01-03 16:25:31', 'Terlambat', 7),
(698, '2018-01-03 07:22:41', '2018-01-03 16:22:41', 'Terlambat', 11),
(699, '2018-01-03 07:22:31', '2018-01-03 16:22:31', 'Terlambat', 12),
(700, '2018-01-03 06:46:05', '2018-01-03 16:46:16', 'Tepat', 13),
(701, '2018-01-03 06:47:21', '2018-01-03 16:47:21', 'Tepat', 14),
(702, '2018-01-03 07:02:04', '2018-01-03 16:02:04', 'Terlambat', 15),
(703, '2018-01-03 08:16:53', '2018-01-03 16:16:53', 'Terlambat', 16),
(704, '2018-01-03 06:29:06', '2018-01-03 16:29:16', 'Tepat', 17),
(705, '2018-01-03 07:01:01', '2018-01-03 16:01:01', 'Terlambat', 18),
(706, '2018-01-03 06:59:09', '2018-01-03 16:59:16', 'Tepat', 19),
(707, '2018-01-03 06:43:21', '2018-01-03 16:43:21', 'Tepat', 20),
(708, '2018-01-03 07:01:35', '2018-01-03 16:01:35', 'Terlambat', 21),
(709, '2018-01-03 06:30:11', '2018-01-03 16:30:11', 'Tepat', 22),
(710, '2018-01-03 06:57:40', '2018-01-03 16:57:40', 'Tepat', 23),
(711, '2018-01-03 06:41:25', '2018-01-03 16:41:25', 'Tepat', 24),
(712, '2018-01-03 07:07:44', '2018-01-03 16:16:44', 'Terlambat', 25),
(713, '2018-01-03 06:42:22', '2018-01-03 16:42:22', 'Tepat', 26),
(714, '2018-01-03 06:42:28', '2018-01-03 16:42:28', 'Tepat', 27),
(715, '2018-01-03 05:46:51', '2018-01-03 16:46:51', 'Tepat', 28),
(716, '2018-01-03 07:19:38', '2018-01-03 16:19:38', 'Terlambat', 29),
(717, '2018-01-03 06:25:53', '2018-01-03 16:25:53', 'Tepat', 30),
(718, '2018-01-03 06:48:31', '2018-01-03 16:48:31', 'Tepat', 31),
(719, '2018-01-03 07:03:27', '2018-01-03 16:03:27', 'Terlambat', 32),
(720, '2018-01-03 07:24:45', '2018-01-03 16:24:45', 'Terlambat', 33),
(721, '2018-01-03 07:17:28', '2018-01-03 16:17:28', 'Terlambat', 34),
(722, '2018-01-03 05:42:56', '2018-01-03 16:42:56', 'Tepat', 35),
(723, '2018-01-03 06:47:25', '2018-01-03 16:47:25', 'Tepat', 36),
(724, '2018-01-03 06:55:45', '2018-01-03 16:55:45', 'Tepat', 37),
(725, '2018-01-03 07:01:58', '2018-01-03 16:01:58', 'Terlambat', 38),
(726, '2018-01-03 07:08:29', '2018-01-03 16:16:29', 'Terlambat', 39),
(727, '2018-01-03 06:00:25', '2018-01-03 16:00:25', 'Tepat', 40),
(728, '2018-01-03 06:37:45', '2018-01-03 16:37:45', 'Tepat', 41),
(729, '2018-01-03 06:58:46', '2018-01-03 16:58:46', 'Tepat', 42),
(730, '2018-01-03 06:37:51', '2018-01-03 16:37:51', 'Tepat', 43),
(731, '2018-01-03 06:14:17', '2018-01-03 16:14:17', 'Tepat', 44),
(732, '2018-01-03 07:17:24', '2018-01-03 16:17:24', 'Terlambat', 45),
(733, '2018-01-03 07:30:50', '2018-01-03 16:30:50', 'Terlambat', 46),
(734, '2018-01-03 07:15:17', '2018-01-03 16:15:17', 'Terlambat', 47),
(735, '2018-01-03 07:30:44', '2018-01-03 16:30:44', 'Terlambat', 48),
(736, '2018-01-03 07:36:12', '2018-01-03 16:36:12', 'Terlambat', 49),
(737, '2018-01-03 07:21:25', '2018-01-03 16:21:25', 'Terlambat', 50),
(738, '2018-01-03 06:57:37', '2018-01-03 16:57:37', 'Tepat', 51),
(739, '2018-01-03 07:26:06', '2018-01-03 16:26:16', 'Terlambat', 52),
(740, '2018-01-03 07:28:34', '2018-01-03 16:28:34', 'Terlambat', 53),
(741, '2018-01-03 07:21:43', '2018-01-03 16:21:43', 'Terlambat', 54),
(742, '2018-01-03 07:20:58', '2018-01-03 16:20:58', 'Terlambat', 55),
(743, '2018-01-03 07:46:27', '2018-01-03 16:46:27', 'Terlambat', 56),
(744, '2018-01-03 07:20:55', '2018-01-03 16:20:55', 'Terlambat', 57),
(745, '2018-01-03 06:54:42', '2018-01-03 16:54:42', 'Tepat', 58),
(746, '2018-01-03 05:53:00', '2018-01-03 16:53:00', 'Tepat', 59),
(747, '2018-01-03 07:11:23', '2018-01-03 16:11:23', 'Terlambat', 60),
(748, '2018-01-03 06:31:06', '2018-01-03 16:31:16', 'Tepat', 61),
(749, '2018-01-03 07:38:23', '2018-01-03 16:38:23', 'Terlambat', 62),
(750, '2018-01-03 07:38:34', '2018-01-03 16:38:34', 'Terlambat', 63),
(751, '2018-01-03 07:36:16', '2018-01-03 16:36:16', 'Terlambat', 64),
(752, '2018-01-03 07:23:27', '2018-01-03 16:23:27', 'Terlambat', 65),
(753, '2018-01-03 07:38:40', '2018-01-03 16:38:40', 'Terlambat', 66),
(754, '2018-01-03 08:20:17', '2018-01-03 16:20:17', 'Terlambat', 67),
(755, '2018-01-03 07:21:23', '2018-01-03 16:21:23', 'Terlambat', 68),
(756, '2018-01-03 07:21:32', '2018-01-03 16:21:32', 'Terlambat', 69),
(757, '2018-01-03 06:54:39', '2018-01-03 16:54:39', 'Tepat', 70),
(758, '2018-01-03 06:51:17', '2018-01-03 16:51:17', 'Tepat', 71),
(759, '2018-01-03 06:08:56', '2018-01-03 16:16:56', 'Tepat', 72),
(760, '2018-01-03 06:37:55', '2018-01-03 16:37:55', 'Tepat', 73),
(761, '2018-01-03 06:41:38', '2018-01-03 16:41:38', 'Tepat', 74),
(762, '2018-01-03 06:50:47', '2018-01-03 16:50:47', 'Tepat', 75),
(763, '2018-01-03 07:07:29', '2018-01-03 16:16:29', 'Terlambat', 76),
(764, '2018-01-03 07:09:36', '2018-01-03 16:16:36', 'Terlambat', 77),
(765, '2018-01-03 07:10:51', '2018-01-03 16:16:51', 'Terlambat', 78),
(766, '2018-01-03 07:32:50', '2018-01-03 16:32:50', 'Terlambat', 79),
(767, '2018-01-03 06:48:59', '2018-01-03 16:48:59', 'Tepat', 80),
(768, '2018-01-03 06:33:28', '2018-01-03 11:33:28', 'Jam Kurang', 81),
(769, '2018-01-03 06:12:42', '2018-01-03 16:12:42', 'Tepat', 82),
(770, '2018-01-03 07:11:10', '2018-01-03 16:11:16', 'Terlambat', 83),
(771, '2018-01-03 07:57:00', '2018-01-03 16:57:00', 'Terlambat', 84),
(772, '2018-01-03 07:00:30', '2018-01-03 16:00:30', 'Terlambat', 85),
(773, '2018-01-03 06:14:48', '2018-01-03 16:14:48', 'Tepat', 86),
(774, '2018-01-03 06:41:15', '2018-01-03 16:41:15', 'Tepat', 87),
(775, '2018-01-03 06:56:53', '2018-01-03 11:56:53', 'Jam Kurang', 88),
(776, '2018-01-03 05:49:19', '2018-01-03 16:49:19', 'Tepat', 89),
(777, '2018-01-03 07:36:08', '2018-01-03 16:36:16', 'Terlambat', 90),
(778, '2018-01-03 07:24:48', '2018-01-03 16:24:48', 'Terlambat', 91),
(779, '2018-01-03 06:28:54', '2018-01-03 16:28:54', 'Tepat', 92),
(780, '2018-01-03 07:26:39', '2018-01-03 16:26:39', 'Terlambat', 93),
(781, '2018-01-03 07:15:08', '2018-01-03 16:15:16', 'Terlambat', 94),
(782, '2018-01-03 07:07:39', '2018-01-03 16:16:39', 'Terlambat', 95),
(783, '2018-01-03 07:15:10', '2018-01-03 16:15:16', 'Terlambat', 96),
(784, '2018-01-03 07:29:24', '2018-01-03 16:29:24', 'Terlambat', 97),
(785, '2018-01-03 07:07:06', '2018-01-03 16:16:16', 'Terlambat', 98),
(786, '2018-01-03 07:04:05', '2018-01-03 16:04:16', 'Terlambat', 99),
(787, '2018-01-03 07:27:53', '2018-01-03 16:27:53', 'Terlambat', 100),
(788, '2018-01-03 07:29:40', '2018-01-03 16:29:40', 'Terlambat', 101),
(789, '2018-01-04 06:05:16', '2018-01-04 16:03:16', 'Tepat', 2),
(790, '2018-01-04 06:05:16', '2018-01-04 16:03:16', 'Tepat', 3),
(791, '2018-01-04 06:05:48', '2018-01-04 16:03:48', 'Tepat', 4),
(792, '2018-01-04 06:05:35', '2018-01-04 16:03:35', 'Tepat', 5),
(793, '2018-01-04 06:05:54', '2018-01-04 16:03:54', 'Tepat', 6),
(794, '2018-01-04 06:05:31', '2018-01-04 16:03:31', 'Tepat', 7),
(795, '2018-01-04 06:05:36', '2018-01-04 16:03:36', 'Tepat', 8),
(796, '2018-01-04 06:05:15', '2018-01-04 16:03:15', 'Tepat', 9),
(797, '2018-01-04 06:05:15', '2018-01-04 16:03:15', 'Tepat', 10),
(798, '2018-01-04 06:05:21', '2018-01-04 16:03:21', 'Tepat', 14),
(799, '2018-01-04 06:05:04', '2018-01-04 16:03:04', 'Tepat', 15),
(800, '2018-01-04 08:05:53', '2018-01-04 16:03:53', 'Terlambat', 16),
(801, '2018-01-04 06:05:06', '2018-01-04 16:03:16', 'Tepat', 17),
(802, '2018-01-04 06:05:01', '2018-01-04 16:03:01', 'Tepat', 18),
(803, '2018-01-04 06:05:09', '2018-01-04 16:03:16', 'Tepat', 19),
(804, '2018-01-04 06:05:21', '2018-01-04 16:03:21', 'Tepat', 20),
(805, '2018-01-04 06:05:35', '2018-01-04 16:03:35', 'Tepat', 21),
(806, '2018-01-04 06:05:11', '2018-01-04 16:03:11', 'Tepat', 22),
(807, '2018-01-04 06:05:40', '2018-01-04 16:03:40', 'Tepat', 23),
(808, '2018-01-04 06:05:25', '2018-01-04 16:03:25', 'Tepat', 24),
(809, '2018-01-04 06:05:44', '2018-01-04 16:03:44', 'Tepat', 25),
(810, '2018-01-04 06:05:22', '2018-01-04 16:03:22', 'Tepat', 26),
(811, '2018-01-04 06:05:28', '2018-01-04 16:03:28', 'Tepat', 27),
(812, '2018-01-04 05:05:51', '2018-01-04 16:03:51', 'Tepat', 28),
(813, '2018-01-04 06:05:38', '2018-01-04 16:03:38', 'Tepat', 29),
(814, '2018-01-04 06:05:53', '2018-01-04 16:03:53', 'Tepat', 30),
(815, '2018-01-04 06:05:31', '2018-01-04 16:03:31', 'Tepat', 31),
(816, '2018-01-04 06:05:27', '2018-01-04 16:03:27', 'Tepat', 32),
(817, '2018-01-04 06:05:45', '2018-01-04 16:03:45', 'Tepat', 33),
(818, '2018-01-04 06:05:28', '2018-01-04 16:03:28', 'Tepat', 34),
(819, '2018-01-04 05:05:56', '2018-01-04 16:03:56', 'Tepat', 35),
(820, '2018-01-04 06:05:25', '2018-01-04 16:03:25', 'Tepat', 36),
(821, '2018-01-04 06:05:45', '2018-01-04 16:03:45', 'Tepat', 37),
(822, '2018-01-04 06:05:58', '2018-01-04 16:03:58', 'Tepat', 38),
(823, '2018-01-04 06:05:29', '2018-01-04 16:03:29', 'Tepat', 39),
(824, '2018-01-04 06:05:25', '2018-01-04 16:03:25', 'Tepat', 40),
(825, '2018-01-04 06:05:45', '2018-01-04 16:03:45', 'Tepat', 41),
(826, '2018-01-04 06:05:46', '2018-01-04 16:03:46', 'Tepat', 42),
(827, '2018-01-04 06:05:51', '2018-01-04 16:03:51', 'Tepat', 43),
(828, '2018-01-04 06:05:17', '2018-01-04 16:03:17', 'Tepat', 44),
(829, '2018-01-04 06:05:24', '2018-01-04 16:03:24', 'Tepat', 45),
(830, '2018-01-04 06:05:50', '2018-01-04 16:03:50', 'Tepat', 46),
(831, '2018-01-04 06:05:17', '2018-01-04 16:03:17', 'Tepat', 47),
(832, '2018-01-04 06:05:44', '2018-01-04 16:03:44', 'Tepat', 48),
(833, '2018-01-04 06:05:16', '2018-01-04 16:03:16', 'Tepat', 49),
(834, '2018-01-04 06:05:25', '2018-01-04 16:03:25', 'Tepat', 50),
(835, '2018-01-04 06:05:37', '2018-01-04 16:03:37', 'Tepat', 51),
(836, '2018-01-04 06:05:06', '2018-01-04 16:03:16', 'Tepat', 52),
(837, '2018-01-04 06:05:34', '2018-01-04 16:03:34', 'Tepat', 53),
(838, '2018-01-04 06:05:43', '2018-01-04 16:03:43', 'Tepat', 54),
(839, '2018-01-04 06:05:58', '2018-01-04 16:03:58', 'Tepat', 55),
(840, '2018-01-04 06:05:27', '2018-01-04 16:03:27', 'Tepat', 56),
(841, '2018-01-04 06:05:55', '2018-01-04 16:03:55', 'Tepat', 57),
(842, '2018-01-04 06:05:42', '2018-01-04 16:03:42', 'Tepat', 58),
(843, '2018-01-04 05:05:00', '2018-01-04 16:03:00', 'Tepat', 59),
(844, '2018-01-04 06:05:23', '2018-01-04 16:03:23', 'Tepat', 60),
(845, '2018-01-04 06:05:06', '2018-01-04 16:03:16', 'Tepat', 61),
(846, '2018-01-04 06:05:23', '2018-01-04 16:03:23', 'Tepat', 62),
(847, '2018-01-04 06:05:34', '2018-01-04 16:03:34', 'Tepat', 63),
(848, '2018-01-04 06:05:16', '2018-01-04 16:03:16', 'Tepat', 64),
(849, '2018-01-04 06:05:27', '2018-01-04 16:03:27', 'Tepat', 65),
(850, '2018-01-04 06:05:40', '2018-01-04 16:03:40', 'Tepat', 66),
(851, '2018-01-04 08:05:17', '2018-01-04 16:03:17', 'Terlambat', 67),
(852, '2018-01-04 06:05:23', '2018-01-04 13:03:23', 'Jam Kurang', 68),
(853, '2018-01-04 06:05:32', '2018-01-04 12:03:32', 'Jam Kurang', 69),
(854, '2018-01-04 06:05:39', '2018-01-04 11:03:39', 'Jam Kurang', 70),
(855, '2018-01-04 06:05:28', '2018-01-04 16:03:28', 'Tepat', 81),
(856, '2018-01-04 06:05:42', '2018-01-04 16:03:42', 'Tepat', 82),
(857, '2018-01-04 06:05:10', '2018-01-04 16:03:16', 'Tepat', 83),
(858, '2018-01-04 06:05:00', '2018-01-04 16:03:00', 'Tepat', 84),
(859, '2018-01-04 06:05:30', '2018-01-04 16:03:30', 'Tepat', 85),
(860, '2018-01-04 06:05:48', '2018-01-04 16:03:48', 'Tepat', 86),
(861, '2018-01-04 06:05:15', '2018-01-04 16:03:15', 'Tepat', 87),
(862, '2018-01-04 06:05:53', '2018-01-04 16:03:53', 'Tepat', 88),
(863, '2018-01-04 05:05:19', '2018-01-04 16:03:19', 'Tepat', 89),
(864, '2018-01-04 06:05:08', '2018-01-04 16:03:16', 'Tepat', 90),
(865, '2018-01-04 06:05:48', '2018-01-04 16:03:48', 'Tepat', 91),
(866, '2018-01-04 06:05:54', '2018-01-04 16:03:54', 'Tepat', 92),
(867, '2018-01-04 06:05:39', '2018-01-04 16:03:39', 'Tepat', 93),
(868, '2018-01-04 06:05:08', '2018-01-04 16:03:16', 'Tepat', 94),
(869, '2018-01-04 06:05:39', '2018-01-04 16:03:39', 'Tepat', 95),
(870, '2018-01-04 06:05:10', '2018-01-04 16:03:16', 'Tepat', 96),
(871, '2018-01-04 06:05:24', '2018-01-04 16:03:24', 'Tepat', 97),
(872, '2018-01-04 06:05:06', '2018-01-04 16:03:16', 'Tepat', 98),
(873, '2018-01-04 06:05:05', '2018-01-04 16:03:16', 'Tepat', 99),
(874, '2018-01-04 06:05:53', '2018-01-04 16:03:53', 'Tepat', 100),
(875, '2018-01-04 06:05:40', '2018-01-04 16:03:40', 'Tepat', 101);

-- --------------------------------------------------------

--
-- Table structure for table `cuti`
--

CREATE TABLE `cuti` (
  `c_id` int(11) NOT NULL,
  `tanggal_mulai` date NOT NULL,
  `tanggal_masuk` date NOT NULL,
  `lama` int(2) NOT NULL,
  `keperluan` varchar(99) NOT NULL,
  `status_manager` varchar(10) NOT NULL,
  `status_hrd` varchar(10) NOT NULL,
  `p_id` int(11) NOT NULL,
  `sc_id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `cuti`
--

INSERT INTO `cuti` (`c_id`, `tanggal_mulai`, `tanggal_masuk`, `lama`, `keperluan`, `status_manager`, `status_hrd`, `p_id`, `sc_id`) VALUES
(1, '2018-02-07', '2018-02-09', 2, 'Liburan', 'Tunggu', 'Tunggu', 2, 2),
(2, '2018-02-14', '2018-02-15', 1, 'Liburan', 'Tunggu', 'Tunggu', 3, 2);

-- --------------------------------------------------------

--
-- Table structure for table `level`
--

CREATE TABLE `level` (
  `l_id` int(11) NOT NULL,
  `level` varchar(33) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `level`
--

INSERT INTO `level` (`l_id`, `level`) VALUES
(1, 'Administrator'),
(2, 'Manager'),
(3, 'Pegawai');

-- --------------------------------------------------------

--
-- Table structure for table `pegawai`
--

CREATE TABLE `pegawai` (
  `p_id` int(11) NOT NULL,
  `nip` varchar(33) NOT NULL,
  `nama` varchar(99) NOT NULL,
  `alamat` text NOT NULL,
  `tempat_lahir` varchar(33) NOT NULL,
  `tanggal_lahir` date NOT NULL,
  `jenis_kelamin` varchar(21) NOT NULL,
  `status` varchar(33) NOT NULL,
  `nomor_telp` varchar(21) NOT NULL,
  `pendidikan` varchar(99) NOT NULL,
  `foto` text NOT NULL,
  `l_id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `pegawai`
--

INSERT INTO `pegawai` (`p_id`, `nip`, `nama`, `alamat`, `tempat_lahir`, `tanggal_lahir`, `jenis_kelamin`, `status`, `nomor_telp`, `pendidikan`, `foto`, `l_id`) VALUES
(2, 'GS-001', 'DEWI SARFIKA', 'Jl Jakarta No 1', 'Jakarta', '1976-04-01', 'Laki-laki', 'Belum Menikah', '082345678', 'SMA Jakarta 1', '05022018114333_nip=GS-001_Chrysanthemum.jpg', 3),
(3, 'GS-002', 'KRISNANTO NUGROHO', 'Jl Jakarta No 2', 'Jakarta', '1976-04-02', 'Laki-laki', 'Belum Menikah', '082345679', 'SMA Jakarta 2', '', 3),
(4, 'GS-003', 'YUDHA NENGGALA', 'Jl Jakarta No 3', 'Jakarta', '1976-04-03', 'Laki-laki', 'Belum Menikah', '082345680', 'SMA Jakarta 3', '', 3),
(5, 'GS-004', 'WIDYANTI NURMALA WULAN', 'Jl Jakarta No 4', 'Jakarta', '1976-04-04', 'Laki-laki', 'Belum Menikah', '082345681', 'SMA Jakarta 4', '', 3),
(6, 'GS-005', 'ADRI', 'Jl Jakarta No 5', 'Jakarta', '1976-04-05', 'Laki-laki', 'Belum Menikah', '082345682', 'SMA Jakarta 5', '', 3),
(7, 'GS-006', 'FRANSISCA DYAH KUMORONINSOH', 'Jl Jakarta No 6', 'Jakarta', '1976-04-06', 'Laki-laki', 'Belum Menikah', '082345683', 'SMA Jakarta 6', '', 3),
(8, 'GS-007', 'YUNINGGAR DWI NUGROHO', 'Jl Jakarta No 7', 'Jakarta', '1976-04-07', 'Laki-laki', 'Belum Menikah', '082345684', 'SMA Jakarta 7', '', 3),
(9, 'GS-008', 'IFAL RAHMAN', 'Jl Jakarta No 8', 'Jakarta', '1976-04-08', 'Laki-laki', 'Belum Menikah', '082345685', 'SMA Jakarta 8', '', 3),
(10, 'GS-009', 'HANUSA SANABAKTI', 'Jl Jakarta No 9', 'Jakarta', '1976-04-09', 'Laki-laki', 'Belum Menikah', '082345686', 'SMA Jakarta 9', '', 3),
(11, 'GS-010', 'HENNY SIPAHUTAR', 'Jl Jakarta No 10', 'Jakarta', '1976-04-10', 'Laki-laki', 'Belum Menikah', '082345687', 'SMA Jakarta 10', '', 3),
(12, 'GS-011', 'GUNAWAN BAYU AJI', 'Jl Jakarta No 11', 'Jakarta', '1976-04-11', 'Laki-laki', 'Belum Menikah', '082345688', 'SMA Jakarta 11', '', 3),
(13, 'GS-012', 'ARIF RACHMAN', 'Jl Jakarta No 12', 'Jakarta', '1976-04-12', 'Laki-laki', 'Belum Menikah', '082345689', 'SMA Jakarta 12', '', 3),
(14, 'GS-013', 'DEO VRIMA APRILIUS', 'Jl Jakarta No 13', 'Jakarta', '1976-04-13', 'Laki-laki', 'Belum Menikah', '082345690', 'SMA Jakarta 13', '', 3),
(15, 'GS-014', 'DONNY HESYA PRADANA', 'Jl Jakarta No 14', 'Jakarta', '1976-04-14', 'Laki-laki', 'Belum Menikah', '082345691', 'SMA Jakarta 14', '', 3),
(16, 'GS-015', 'GUNADI', 'Jl Jakarta No 15', 'Jakarta', '1976-04-15', 'Laki-laki', 'Belum Menikah', '082345692', 'SMA Jakarta 15', '', 3),
(17, 'GS-016', 'IRFAN AZIZ PRATOMO', 'Jl Jakarta No 16', 'Jakarta', '1976-04-16', 'Laki-laki', 'Belum Menikah', '082345693', 'SMA Jakarta 16', '', 1),
(18, 'GS-017', 'JUMARDI SUDIRMAN', 'Jl Jakarta No 17', 'Jakarta', '1976-04-17', 'Laki-laki', 'Belum Menikah', '082345694', 'SMA Jakarta 17', '', 3),
(19, 'GS-018', 'LAMIJAN', 'Jl Jakarta No 18', 'Jakarta', '1976-04-18', 'Laki-laki', 'Belum Menikah', '082345695', 'SMA Jakarta 18', '', 3),
(20, 'GS-019', 'LINGGA GALIH WICAKSONO', 'Jl Jakarta No 19', 'Jakarta', '1976-04-19', 'Laki-laki', 'Belum Menikah', '082345696', 'SMA Jakarta 19', '', 3),
(21, 'GS-020', 'MOHAMMAD KAFI VALIANT', 'Jl Jakarta No 20', 'Jakarta', '1976-04-20', 'Laki-laki', 'Belum Menikah', '082345697', 'SMA Jakarta 20', '', 3),
(22, 'GS-021', 'MULYONO', 'Jl Jakarta No 21', 'Jakarta', '1976-04-21', 'Laki-laki', 'Belum Menikah', '082345698', 'SMA Jakarta 21', '', 3),
(23, 'GS-022', 'NABILAH DWI AMALIA', 'Jl Jakarta No 22', 'Jakarta', '1976-04-22', 'Laki-laki', 'Belum Menikah', '082345699', 'SMA Jakarta 22', '', 3),
(24, 'GS-023', 'RAHAYU WINARNI', 'Jl Jakarta No 23', 'Jakarta', '1976-04-23', 'Laki-laki', 'Belum Menikah', '082345700', 'SMA Jakarta 23', '', 3),
(25, 'GS-024', 'REZA MUHAMMAD', 'Jl Jakarta No 24', 'Jakarta', '1976-04-24', 'Laki-laki', 'Belum Menikah', '082345701', 'SMA Jakarta 24', '', 3),
(26, 'GS-025', 'RIAN ANTONI', 'Jl Jakarta No 25', 'Jakarta', '1989-12-01', 'Laki-laki', 'Belum Menikah', '082345702', 'SMA Jakarta 25', '', 3),
(27, 'GS-026', 'RIZCKY HADI SAPUTRO', 'Jl Jakarta No 26', 'Jakarta', '1989-12-02', 'Laki-laki', 'Belum Menikah', '082345703', 'SMA Jakarta 26', '', 3),
(28, 'GS-027', 'ROYANIH', 'Jl Jakarta No 27', 'Jakarta', '1989-12-03', 'Laki-laki', 'Belum Menikah', '082345704', 'SMA Jakarta 27', '', 3),
(29, 'GS-028', 'RULI HANDOKO', 'Jl Jakarta No 28', 'Jakarta', '1989-12-04', 'Laki-laki', 'Belum Menikah', '082345705', 'SMA Jakarta 28', '', 3),
(30, 'GS-029', 'RULLY TRISTANTO', 'Jl Jakarta No 29', 'Jakarta', '1989-12-05', 'Laki-laki', 'Belum Menikah', '082345706', 'SMA Jakarta 29', '', 3),
(31, 'GS-030', 'SADING', 'Jl Jakarta No 30', 'Jakarta', '1989-12-06', 'Laki-laki', 'Belum Menikah', '082345707', 'SMA Jakarta 30', '', 3),
(32, 'GS-031', 'SYAHRONI', 'Jl Jakarta No 31', 'Jakarta', '1989-12-07', 'Laki-laki', 'Belum Menikah', '082345708', 'SMA Jakarta 31', '', 3),
(33, 'GS-032', 'SAHRONIH', 'Jl Jakarta No 32', 'Jakarta', '1989-12-08', 'Laki-laki', 'Belum Menikah', '082345709', 'SMA Jakarta 32', '', 3),
(34, 'GS-033', 'SANADI', 'Jl Jakarta No 33', 'Jakarta', '1989-12-09', 'Laki-laki', 'Belum Menikah', '082345710', 'SMA Jakarta 33', '', 3),
(35, 'GS-034', 'SLAMET RIYADI', 'Jl Jakarta No 34', 'Jakarta', '1989-12-10', 'Laki-laki', 'Belum Menikah', '082345711', 'SMA Jakarta 34', '', 3),
(36, 'GS-035', 'WAWAN CAHYADI', 'Jl Jakarta No 35', 'Jakarta', '1989-12-11', 'Laki-laki', 'Belum Menikah', '082345712', 'SMA Jakarta 35', '', 2),
(37, 'GS-036', 'YOS ARUDIAN', 'Jl Jakarta No 36', 'Jakarta', '1989-12-12', 'Laki-laki', 'Belum Menikah', '082345713', 'SMA Jakarta 36', '', 3),
(38, 'GS-037', 'ZUFRIAN FIRLIANSYAH', 'Jl Jakarta No 37', 'Jakarta', '1989-12-13', 'Laki-laki', 'Belum Menikah', '082345714', 'SMA Jakarta 37', '', 3),
(39, 'GS-038', 'ABDUL HAKIM', 'Jl Jakarta No 38', 'Jakarta', '1989-12-14', 'Laki-laki', 'Belum Menikah', '082345715', 'SMA Jakarta 38', '', 3),
(40, 'GS-039', 'ACHMAD KOSASIH', 'Jl Jakarta No 39', 'Jakarta', '1989-12-15', 'Laki-laki', 'Belum Menikah', '082345716', 'SMA Jakarta 39', '', 3),
(41, 'GS-040', 'ADHITYAWARMAN', 'Jl Jakarta No 40', 'Jakarta', '1989-12-16', 'Laki-laki', 'Belum Menikah', '082345717', 'SMA Jakarta 40', '', 3),
(42, 'GS-041', 'AGUS PRATIKNO', 'Jl Jakarta No 41', 'Jakarta', '1989-12-17', 'Laki-laki', 'Belum Menikah', '082345718', 'SMA Jakarta 41', '', 3),
(43, 'GS-042', 'ANGGA ARISTA PUTRA', 'Jl Jakarta No 42', 'Jakarta', '1989-12-18', 'Laki-laki', 'Belum Menikah', '082345719', 'SMA Jakarta 42', '', 3),
(44, 'GS-043', 'FERIZAL ARIFIN', 'Jl Jakarta No 43', 'Jakarta', '1989-12-19', 'Laki-laki', 'Belum Menikah', '082345720', 'SMA Jakarta 43', '', 3),
(45, 'GS-044', 'YOGI DWIARTO', 'Jl Jakarta No 44', 'Jakarta', '1989-12-20', 'Laki-laki', 'Belum Menikah', '082345721', 'SMA Jakarta 44', '', 3),
(46, 'GS-045', 'FRISTY LITA', 'Jl Jakarta No 45', 'Jakarta', '1989-12-21', 'Laki-laki', 'Belum Menikah', '082345722', 'SMA Jakarta 45', '', 3),
(47, 'GS-046', 'MUHAMMAD REYHAN HAFIZ', 'Jl Jakarta No 46', 'Jakarta', '1989-12-22', 'Laki-laki', 'Belum Menikah', '082345723', 'SMA Jakarta 46', '', 3),
(48, 'GS-047', 'FERIANSYAH MUHADI', 'Jl Jakarta No 47', 'Jakarta', '1989-12-23', 'Laki-laki', 'Belum Menikah', '082345724', 'SMA Jakarta 47', '', 3),
(49, 'GS-048', 'RETNO APRIYANTI PUTRI', 'Jl Jakarta No 48', 'Jakarta', '1976-04-01', 'Laki-laki', 'Belum Menikah', '082345725', 'SMA Jakarta 48', '', 3),
(50, 'GS-049', 'MEIDY SAPUTRA AMIN', 'Jl Jakarta No 49', 'Jakarta', '1976-04-02', 'Laki-laki', 'Belum Menikah', '082345726', 'SMA Jakarta 49', '', 3),
(51, 'GS-050', 'AGUNG PRADITYA', 'Jl Jakarta No 50', 'Jakarta', '1976-04-03', 'Laki-laki', 'Belum Menikah', '082345727', 'SMA Jakarta 50', '', 3),
(52, 'GS-051', 'AGUS SETIAWAN', 'Jl Jakarta No 51', 'Jakarta', '1976-04-04', 'Laki-laki', 'Belum Menikah', '082345728', 'SMA Jakarta 51', '', 3),
(53, 'GS-052', 'ARDI ADHAIRI DWI PUTRA', 'Jl Jakarta No 52', 'Jakarta', '1976-04-05', 'Laki-laki', 'Belum Menikah', '082345729', 'SMA Jakarta 52', '', 3),
(54, 'GS-053', 'ARI WIBOWO', 'Jl Jakarta No 53', 'Jakarta', '1976-04-06', 'Laki-laki', 'Belum Menikah', '082345730', 'SMA Jakarta 53', '', 3),
(55, 'GS-054', 'BALANCE NATURANI', 'Jl Jakarta No 54', 'Jakarta', '1976-04-07', 'Laki-laki', 'Belum Menikah', '082345731', 'SMA Jakarta 54', '', 3),
(56, 'GS-055', 'BIMO PRASETYO', 'Jl Jakarta No 55', 'Jakarta', '1976-04-08', 'Laki-laki', 'Belum Menikah', '082345732', 'SMA Jakarta 55', '', 3),
(57, 'GS-056', 'DITEY FAMBUDI', 'Jl Jakarta No 56', 'Jakarta', '1976-04-09', 'Laki-laki', 'Belum Menikah', '082345733', 'SMA Jakarta 56', '', 3),
(58, 'GS-057', 'DODI ALIAN', 'Jl Jakarta No 57', 'Jakarta', '1976-04-10', 'Laki-laki', 'Belum Menikah', '082345734', 'SMA Jakarta 57', '', 3),
(59, 'GS-058', 'EKO BUDIONO WICAKSONO', 'Jl Jakarta No 58', 'Jakarta', '1976-04-11', 'Laki-laki', 'Belum Menikah', '082345735', 'SMA Jakarta 58', '', 3),
(60, 'GS-059', 'HENDRA FERDIAN', 'Jl Jakarta No 59', 'Jakarta', '1976-04-12', 'Laki-laki', 'Belum Menikah', '082345736', 'SMA Jakarta 59', '', 3),
(61, 'GS-060', 'IRWAN SUNANDAR', 'Jl Jakarta No 60', 'Jakarta', '1976-04-13', 'Laki-laki', 'Belum Menikah', '082345737', 'SMA Jakarta 60', '', 3),
(62, 'GS-061', 'LIZA ROSA INDAH', 'Jl Jakarta No 61', 'Jakarta', '1976-04-14', 'Laki-laki', 'Belum Menikah', '082345738', 'SMA Jakarta 61', '', 3),
(63, 'GS-062', 'MAHFUD SAIFUDIN', 'Jl Jakarta No 62', 'Jakarta', '1976-04-15', 'Laki-laki', 'Belum Menikah', '082345739', 'SMA Jakarta 62', '', 3),
(64, 'GS-063', 'MOH RAJIMAN MURRIYO', 'Jl Jakarta No 63', 'Jakarta', '1976-04-16', 'Laki-laki', 'Belum Menikah', '082345740', 'SMA Jakarta 63', '', 3),
(65, 'GS-064', 'MUGI HARTONO', 'Jl Jakarta No 64', 'Jakarta', '1976-04-17', 'Laki-laki', 'Belum Menikah', '082345741', 'SMA Jakarta 64', '', 3),
(66, 'GS-065', 'MURADIH', 'Jl Jakarta No 65', 'Jakarta', '1976-04-18', 'Laki-laki', 'Belum Menikah', '082345742', 'SMA Jakarta 65', '', 3),
(67, 'GS-066', 'RAY YUNAS MAHAPUTRA', 'Jl Jakarta No 66', 'Jakarta', '1976-04-19', 'Laki-laki', 'Belum Menikah', '082345743', 'SMA Jakarta 66', '', 3),
(68, 'GS-067', 'TOHANI', 'Jl Jakarta No 67', 'Jakarta', '1976-04-20', 'Laki-laki', 'Belum Menikah', '082345744', 'SMA Jakarta 67', '', 3),
(69, 'GS-068', 'ADHI ALHADI WIJAYA', 'Jl Jakarta No 68', 'Jakarta', '1976-04-21', 'Laki-laki', 'Belum Menikah', '082345745', 'SMA Jakarta 68', '', 3),
(70, 'GS-069', 'ADNAN ANSURI', 'Jl Jakarta No 69', 'Jakarta', '1976-04-22', 'Laki-laki', 'Belum Menikah', '082345746', 'SMA Jakarta 69', '', 3),
(71, 'GS-070', 'AL HAKIM', 'Jl Jakarta No 70', 'Jakarta', '1976-04-23', 'Laki-laki', 'Belum Menikah', '082345747', 'SMA Jakarta 70', '', 3),
(72, 'GS-071', 'AMINUDIN', 'Jl Jakarta No 71', 'Jakarta', '1976-04-24', 'Laki-laki', 'Belum Menikah', '082345748', 'SMA Jakarta 71', '', 3),
(73, 'GS-072', 'ANDIKA AL KAUTSAR', 'Jl Jakarta No 72', 'Jakarta', '1989-12-01', 'Laki-laki', 'Belum Menikah', '082345749', 'SMA Jakarta 72', '', 3),
(74, 'GS-073', 'ANDRE JULIANSYAH', 'Jl Jakarta No 73', 'Jakarta', '1989-12-02', 'Laki-laki', 'Belum Menikah', '082345750', 'SMA Jakarta 73', '', 3),
(75, 'GS-074', 'BAIHAKI', 'Jl Jakarta No 74', 'Jakarta', '1989-12-03', 'Laki-laki', 'Belum Menikah', '082345751', 'SMA Jakarta 74', '', 3),
(76, 'GS-075', 'DWI MULYANTO', 'Jl Jakarta No 75', 'Jakarta', '1989-12-04', 'Laki-laki', 'Belum Menikah', '082345752', 'SMA Jakarta 75', '', 3),
(77, 'GS-076', 'DHIKA PRADITYA', 'Jl Jakarta No 76', 'Jakarta', '1989-12-05', 'Laki-laki', 'Belum Menikah', '082345753', 'SMA Jakarta 76', '', 3),
(78, 'GS-077', 'ENGKU HARDI', 'Jl Jakarta No 77', 'Jakarta', '1989-12-06', 'Laki-laki', 'Belum Menikah', '082345754', 'SMA Jakarta 77', '', 3),
(79, 'GS-078', 'ERICK ARIYANTO', 'Jl Jakarta No 78', 'Jakarta', '1989-12-07', 'Laki-laki', 'Belum Menikah', '082345755', 'SMA Jakarta 78', '', 3),
(80, 'GS-079', 'FIRMAN RAMADHAN', 'Jl Jakarta No 79', 'Jakarta', '1989-12-08', 'Laki-laki', 'Belum Menikah', '082345756', 'SMA Jakarta 79', '', 3),
(81, 'GS-080', 'KERTA SANJAYA', 'Jl Jakarta No 80', 'Jakarta', '1989-12-09', 'Laki-laki', 'Belum Menikah', '082345757', 'SMA Jakarta 80', '', 3),
(82, 'GS-081', 'MUHAMMAD HARIYANTO', 'Jl Jakarta No 81', 'Jakarta', '1989-12-10', 'Laki-laki', 'Belum Menikah', '082345758', 'SMA Jakarta 81', '', 3),
(83, 'GS-082', 'NAS NASIY AHMAD', 'Jl Jakarta No 82', 'Jakarta', '1989-12-11', 'Laki-laki', 'Belum Menikah', '082345759', 'SMA Jakarta 82', '', 3),
(84, 'GS-083', 'RENO SAPUTRA', 'Jl Jakarta No 83', 'Jakarta', '1989-12-12', 'Laki-laki', 'Belum Menikah', '082345760', 'SMA Jakarta 83', '', 3),
(85, 'GS-084', 'RIVALDI TRI KURNIAWAN', 'Jl Jakarta No 84', 'Jakarta', '1989-12-13', 'Laki-laki', 'Belum Menikah', '082345761', 'SMA Jakarta 84', '', 3),
(86, 'GS-085', 'ZAINUDIN', 'Jl Jakarta No 85', 'Jakarta', '1989-12-14', 'Laki-laki', 'Belum Menikah', '082345762', 'SMA Jakarta 85', '', 3),
(87, 'GS-086', 'RIZKY AMALIA', 'Jl Jakarta No 86', 'Jakarta', '1989-12-15', 'Laki-laki', 'Belum Menikah', '082345763', 'SMA Jakarta 86', '', 3),
(88, 'GS-087', 'DANIEL FERRY KURNIAWAN', 'Jl Jakarta No 87', 'Jakarta', '1989-12-16', 'Laki-laki', 'Belum Menikah', '082345764', 'SMA Jakarta 87', '', 3),
(89, 'GS-088', 'SUTEKNO', 'Jl Jakarta No 88', 'Jakarta', '1989-12-17', 'Laki-laki', 'Belum Menikah', '082345765', 'SMA Jakarta 88', '', 3),
(90, 'GS-089', 'RYAN ZULMI', 'Jl Jakarta No 89', 'Jakarta', '1989-12-18', 'Laki-laki', 'Belum Menikah', '082345766', 'SMA Jakarta 89', '', 3),
(91, 'GS-090', 'ALFREDO', 'Jl Jakarta No 90', 'Jakarta', '1989-12-19', 'Laki-laki', 'Belum Menikah', '082345767', 'SMA Jakarta 90', '', 3),
(92, 'GS-091', 'SATRYO', 'Jl Jakarta No 91', 'Jakarta', '1989-12-20', 'Laki-laki', 'Belum Menikah', '082345768', 'SMA Jakarta 91', '', 3),
(93, 'GS-092', 'SHAFIRA', 'Jl Jakarta No 92', 'Jakarta', '1989-12-21', 'Laki-laki', 'Belum Menikah', '082345769', 'SMA Jakarta 92', '', 3),
(94, 'GS-093', 'RIFKI', 'Jl Jakarta No 93', 'Jakarta', '1989-12-22', 'Laki-laki', 'Belum Menikah', '082345770', 'SMA Jakarta 93', '', 3),
(95, 'GS-094', 'AGUS', 'Jl Jakarta No 94', 'Jakarta', '1989-12-23', 'Laki-laki', 'Belum Menikah', '082345771', 'SMA Jakarta 94', '', 3),
(96, 'GS-095', 'WINDA', 'Jl Jakarta No 95', 'Jakarta', '1989-12-17', 'Laki-laki', 'Belum Menikah', '082345772', 'SMA Jakarta 95', '', 3),
(97, 'GS-096', 'RAKHMAT', 'Jl Jakarta No 96', 'Jakarta', '1989-12-18', 'Laki-laki', 'Belum Menikah', '082345773', 'SMA Jakarta 96', '', 3),
(98, 'GS-097', 'PARAMITA', 'Jl Jakarta No 97', 'Jakarta', '1989-12-19', 'Laki-laki', 'Belum Menikah', '082345774', 'SMA Jakarta 97', '', 3),
(99, 'GS-098', 'FANIA', 'Jl Jakarta No 98', 'Jakarta', '1989-12-20', 'Laki-laki', 'Belum Menikah', '082345775', 'SMA Jakarta 98', '', 3),
(100, 'GS-099', 'MARIA', 'Jl Jakarta No 99', 'Jakarta', '1989-12-21', 'Laki-laki', 'Belum Menikah', '082345776', 'SMA Jakarta 99', '', 3),
(101, 'GS-100', 'ADJI', 'Jl Jakarta No 100', 'Jakarta', '1989-12-22', 'Laki-laki', 'Belum Menikah', '082345777', 'SMA Jakarta 100', '', 3);

-- --------------------------------------------------------

--
-- Table structure for table `standarcuti`
--

CREATE TABLE `standarcuti` (
  `sc_id` int(11) NOT NULL,
  `jumlah_cuti` int(2) NOT NULL,
  `tahun` int(4) NOT NULL,
  `status` varchar(15) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `standarcuti`
--

INSERT INTO `standarcuti` (`sc_id`, `jumlah_cuti`, `tahun`, `status`) VALUES
(1, 10, 2017, 'Tidak Aktif'),
(2, 12, 2018, 'Aktif');

-- --------------------------------------------------------

--
-- Table structure for table `user`
--

CREATE TABLE `user` (
  `u_id` int(11) NOT NULL,
  `username` varchar(99) NOT NULL,
  `email` varchar(99) NOT NULL,
  `password` varchar(99) NOT NULL,
  `create_at` datetime NOT NULL,
  `update_at` datetime NOT NULL,
  `p_id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `user`
--

INSERT INTO `user` (`u_id`, `username`, `email`, `password`, `create_at`, `update_at`, `p_id`) VALUES
(2, 'irfan', 'irfan@gmail.com', '$2y$10$yTg.ZMP2HEoLOTeQkkfRJOEH5G6Ti6b1mjK6oYo8GQzZh9zHZ7.Zm', '2018-02-04 01:52:47', '0000-00-00 00:00:00', 17),
(3, 'wawancahyadi', 'wawan@gmail.com', '$2y$10$62x3CzuhACukoZLk/uTDNOHHZvwaUG000HmkFo66c7OqoIATh6h3G', '2018-02-04 01:55:02', '0000-00-00 00:00:00', 36),
(4, 'nasnasiyahmad', 'nasnasiyahmad@gmail.com', '$2y$10$5/FtSokm5ij/CjsqrKxRQeakVM.tN8k693cQwdkUL2Vt//mcbW78.', '2018-02-04 01:55:48', '0000-00-00 00:00:00', 83);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `absensi`
--
ALTER TABLE `absensi`
  ADD PRIMARY KEY (`a_id`);

--
-- Indexes for table `cuti`
--
ALTER TABLE `cuti`
  ADD PRIMARY KEY (`c_id`);

--
-- Indexes for table `level`
--
ALTER TABLE `level`
  ADD PRIMARY KEY (`l_id`);

--
-- Indexes for table `pegawai`
--
ALTER TABLE `pegawai`
  ADD PRIMARY KEY (`p_id`),
  ADD UNIQUE KEY `nip` (`nip`);

--
-- Indexes for table `standarcuti`
--
ALTER TABLE `standarcuti`
  ADD PRIMARY KEY (`sc_id`),
  ADD UNIQUE KEY `tahun` (`tahun`);

--
-- Indexes for table `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`u_id`),
  ADD UNIQUE KEY `email` (`email`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `absensi`
--
ALTER TABLE `absensi`
  MODIFY `a_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=876;
--
-- AUTO_INCREMENT for table `cuti`
--
ALTER TABLE `cuti`
  MODIFY `c_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
--
-- AUTO_INCREMENT for table `level`
--
ALTER TABLE `level`
  MODIFY `l_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;
--
-- AUTO_INCREMENT for table `pegawai`
--
ALTER TABLE `pegawai`
  MODIFY `p_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=102;
--
-- AUTO_INCREMENT for table `standarcuti`
--
ALTER TABLE `standarcuti`
  MODIFY `sc_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
--
-- AUTO_INCREMENT for table `user`
--
ALTER TABLE `user`
  MODIFY `u_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
