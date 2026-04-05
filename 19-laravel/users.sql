-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Servidor: 127.0.0.1
-- Tiempo de generación: 19-02-2026 a las 02:28:38
-- Versión del servidor: 10.4.32-MariaDB
-- Versión de PHP: 8.2.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de datos: `larapets2929061b`
--

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `users`
--

CREATE TABLE `users` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `document` bigint(20) NOT NULL,
  `fullname` varchar(255) NOT NULL,
  `gender` varchar(255) NOT NULL,
  `birthdate` date NOT NULL,
  `photo` varchar(255) NOT NULL DEFAULT 'no-photo.png',
  `phone` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `email_verified_at` varchar(255) DEFAULT NULL,
  `password` varchar(255) NOT NULL,
  `active` tinyint(1) NOT NULL DEFAULT 1,
  `role` varchar(255) NOT NULL DEFAULT 'Customer',
  `remember_token` varchar(100) DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Volcado de datos para la tabla `users`
--

INSERT INTO `users` (`id`, `document`, `fullname`, `gender`, `birthdate`, `photo`, `phone`, `email`, `email_verified_at`, `password`, `active`, `role`, `remember_token`, `created_at`, `updated_at`) VALUES
(1, 75963123, 'Ambrose Dach', 'Male', '1979-09-05', 'user1.png', '32068260660', 'orie13@example.com', '2026-02-19 01:24:02', '$2y$12$dxjxoAy6wWRrTn7unDkgl.snygZ.xZau5lQYee8Z9PEp32eXqAmFe', 1, 'Customer', '1NL9kwRHiW', '2026-02-19 06:24:02', '2026-02-19 06:24:02'),
(2, 75939688, 'Connie Reynolds', 'Female', '1978-11-09', 'user2.png', '32054589199', 'collier.alek@example.org', '2026-02-19 01:24:02', '$2y$12$AjOUePYnuOhdAPCDOh.QqexbcTlmoBBgTOMnYJS1vDVZENjEpn6yO', 1, 'Customer', 'IPn6tT6dxk', '2026-02-19 06:24:02', '2026-02-19 06:24:02'),
(3, 75670980, 'Charity O\'Keefe', 'Female', '1991-03-27', 'user3.png', '32045162021', 'wtowne@example.net', '2026-02-19 01:24:02', '$2y$12$h772kXnu2o4NUVRy2A/LXe4zkSj37WOBa/0SZuaxFtEFoh4hD3Nam', 1, 'Customer', '4RLLZDXAHb', '2026-02-19 06:24:02', '2026-02-19 06:24:02'),
(4, 75074919, 'Irma Weissnat', 'Female', '1981-06-15', 'user4.png', '32028576656', 'ernser.deonte@example.org', '2026-02-19 01:24:02', '$2y$12$5dCBzfXU3jb2V4zzPQUEBe97x8sbktRubRT87wYxYMgOdFxXatMBC', 1, 'Customer', 'uISRev74Ef', '2026-02-19 06:24:02', '2026-02-19 06:24:02'),
(5, 75442976, 'Rupert Olson', 'Male', '1979-01-13', 'user5.png', '32054284191', 'raynor.henry@example.com', '2026-02-19 01:24:02', '$2y$12$GpU7HC63DDWpY2gMkG.Wmu/u2xuSHL07gprJmbxausnrs/rDlbhSK', 1, 'Customer', '0Zu8kef0Ju', '2026-02-19 06:24:03', '2026-02-19 06:24:03'),
(6, 75287974, 'Gladyce Spencer', 'Female', '1997-03-26', 'user6.png', '32079428414', 'schuster.bryon@example.net', '2026-02-19 01:24:03', '$2y$12$qb9cu.Me1jurrKgGmlQv3eWMN7OFn.dnuQrEssbfxgdKbHMUbAIcG', 1, 'Customer', 'AO3QuKpLUS', '2026-02-19 06:24:03', '2026-02-19 06:24:03'),
(7, 75474112, 'Pink Klein', 'Female', '1998-11-12', 'user7.png', '32097876164', 'skylar75@example.net', '2026-02-19 01:24:03', '$2y$12$d0oDnqzdl7efaooiUfaLs.4NtzLYvOGf31eh0uPo6PxIyTLbEYLE.', 1, 'Customer', 'ItZ0qXz0Ap', '2026-02-19 06:24:03', '2026-02-19 06:24:03'),
(8, 75381632, 'Kellie Beier', 'Female', '1988-04-29', 'user8.png', '32059922270', 'flavio53@example.com', '2026-02-19 01:24:03', '$2y$12$iZ6hSysYVPpxj8.zqxosoOIaDbisnzRZCpakX9zhX/rfJ7Z.q5HFa', 1, 'Customer', 'AaCKC1rFtL', '2026-02-19 06:24:03', '2026-02-19 06:24:03'),
(9, 75118261, 'Sanford Keebler', 'Male', '1992-05-26', 'user9.png', '32019716320', 'sylvia.funk@example.org', '2026-02-19 01:24:03', '$2y$12$AQphn6MpOEchavobGrRPCu8XNbSg/pg4Caw3mSYuld3CLv5L8Smeu', 1, 'Customer', '8CL0YS2hrs', '2026-02-19 06:24:03', '2026-02-19 06:24:03'),
(10, 75437744, 'Nina Beer', 'Female', '1991-12-19', 'user10.png', '32083176492', 'lind.agustina@example.org', '2026-02-19 01:24:03', '$2y$12$hh3Y02MBES7wxEFVGG6BW./kvhPGKlzLWrgyipg4UmQaT6ugeYIwC', 1, 'Customer', '37Z0TbCsff', '2026-02-19 06:24:04', '2026-02-19 06:24:04'),
(11, 75751936, 'Marielle Wuckert', 'Female', '1984-07-10', 'user11.png', '32089448714', 'rutherford.clement@example.org', '2026-02-19 01:24:04', '$2y$12$ugw/rzK4Wu9oeHCxx0QitOYDq2vKwY/0XMEo10OodqWECQ8RdkI0K', 1, 'Customer', 'rI2LLtH0g0', '2026-02-19 06:24:04', '2026-02-19 06:24:04'),
(12, 75968213, 'Gabrielle Wuckert', 'Female', '1984-07-04', 'user12.png', '32027121286', 'cordie55@example.net', '2026-02-19 01:24:04', '$2y$12$eBvduBuYWPDDtbez6JAWfu.FlGSpZOn5phyclpB6abasAE/96zpwy', 1, 'Customer', 'Y6HrNoTZ5O', '2026-02-19 06:24:04', '2026-02-19 06:24:04'),
(13, 75594977, 'Lavina Haley', 'Female', '2003-01-25', 'user13.png', '32040436253', 'witting.johnathan@example.org', '2026-02-19 01:24:04', '$2y$12$tcxug2Nn69Q/xsBQUqvBmu4dlV0y3ZttDEgiMqDQj7GQfh0iydAt6', 1, 'Customer', 'hMzxbeNqpA', '2026-02-19 06:24:04', '2026-02-19 06:24:04'),
(14, 75318005, 'Rosalia Von', 'Female', '1988-05-16', 'user14.png', '32035261941', 'ross.cummings@example.net', '2026-02-19 01:24:04', '$2y$12$2Jtq6uXFGeotFgSMorBMlu9PO9s2y8OMpc67skyomGCNW1RiHtv5e', 1, 'Customer', 'ZkOUYG3QbL', '2026-02-19 06:24:04', '2026-02-19 06:24:04'),
(15, 75106118, 'Nicholas Rosenbaum', 'Male', '1974-01-05', 'user15.png', '32057429101', 'pbartell@example.net', '2026-02-19 01:24:04', '$2y$12$EnYUExZ85FuFM0q2XvpBouB3kUEFHeh0MtE5CX7R2NGf41wwCQkYK', 1, 'Customer', 'Hm9F4BjQ05', '2026-02-19 06:24:05', '2026-02-19 06:24:05'),
(16, 75313206, 'Savanna Nitzsche', 'Female', '1979-04-09', 'user16.png', '32026292596', 'zstamm@example.com', '2026-02-19 01:24:05', '$2y$12$hR5jEbznqPzI3cMjJpivl.Vt8jH.aQ2Yl4R3eic/aBnzjmxZ.xgXq', 1, 'Customer', 'iow8GOmPtG', '2026-02-19 06:24:05', '2026-02-19 06:24:05'),
(17, 75615981, 'Aniyah Upton', 'Female', '1979-10-20', 'user17.png', '32075838556', 'nathen.lang@example.com', '2026-02-19 01:24:05', '$2y$12$sUcQVsPUURWmF3lnuEiIq.OXfMY3uZNFDqkbvdljCKKPWgh3L5./2', 1, 'Customer', '5cTrQwWQvV', '2026-02-19 06:24:05', '2026-02-19 06:24:05'),
(18, 75237899, 'Orin Terry', 'Male', '1975-02-02', 'user18.png', '32085306968', 'paris44@example.net', '2026-02-19 01:24:05', '$2y$12$1l6pT8ZZdFYpYSxfsdQeNe.WOh6FASsUWtEJYCGoao5aDgnr7J.ym', 1, 'Customer', 'wrFVwSKn2t', '2026-02-19 06:24:05', '2026-02-19 06:24:05'),
(19, 75781779, 'Jamey Gottlieb', 'Male', '1983-11-15', 'user19.png', '32070369145', 'auer.lillian@example.com', '2026-02-19 01:24:05', '$2y$12$tVBJiHTFhJftHYubwFX9m.pTUYziwdj.oIG/DzWYN0RdytdSgVdBe', 1, 'Customer', 'lbSg9TOl9l', '2026-02-19 06:24:05', '2026-02-19 06:24:05'),
(20, 75541459, 'Hope Beatty', 'Female', '1979-07-31', 'user20.png', '32097347266', 'whomenick@example.org', '2026-02-19 01:24:05', '$2y$12$RYqW4XaKqSmpU9WMAp0uruJV/K6YjIwUyOpkGe3ixunWVgl2HP78S', 1, 'Customer', 'E9ScSlcyfn', '2026-02-19 06:24:06', '2026-02-19 06:24:06'),
(21, 75363593, 'Karson Lubowitz', 'Male', '1979-03-16', 'user21.png', '32017882295', 'ztowne@example.com', '2026-02-19 01:24:06', '$2y$12$JuGxEgXMUb1TsUHoOG24def2iJ9u.7C3XT1cmTWgqGs/gm6Pc12r.', 1, 'Customer', 'zu5j0fKIG0', '2026-02-19 06:24:06', '2026-02-19 06:24:06'),
(22, 75375210, 'Lera Friesen', 'Female', '1988-12-25', 'user22.png', '32088496852', 'anita16@example.com', '2026-02-19 01:24:06', '$2y$12$sSYyiJBD38UakvBQsX1Bfu1QFH.msnseKZHfEd8dWhvU/pYK25t1O', 1, 'Customer', 'g10gw5mq38', '2026-02-19 06:24:06', '2026-02-19 06:24:06'),
(23, 75652433, 'Travis Walsh', 'Male', '1996-06-18', 'user23.png', '32081723134', 'markus.senger@example.net', '2026-02-19 01:24:06', '$2y$12$qp8gGrLbR.cwgtdp1Rs4aeEkU7l8WTZLbt37JGLb8r6GdeKgpoCnC', 1, 'Customer', 'FqKJDc9QIA', '2026-02-19 06:24:06', '2026-02-19 06:24:06'),
(24, 75819726, 'Beatrice DuBuque', 'Female', '2002-02-15', 'user24.png', '32068071132', 'mann.german@example.net', '2026-02-19 01:24:06', '$2y$12$1QtZQjqDlmPWK4gPwHPJa.0CZcb.XNmG5FmVBjK/E/Xbsu8Gzh/dG', 1, 'Customer', 'enjsgVZyJn', '2026-02-19 06:24:06', '2026-02-19 06:24:06'),
(25, 75731201, 'Anastasia Paucek', 'Female', '1990-10-09', 'user25.png', '32018912573', 'raegan71@example.org', '2026-02-19 01:24:07', '$2y$12$ZYdcut7D7l.6oexfVaWLn.sCjqQkAQz.4vc9DuZZBrh8vGumySe4.', 1, 'Customer', 'jUI3iQB9K8', '2026-02-19 06:24:07', '2026-02-19 06:24:07'),
(26, 75700200, 'Matteo Mueller', 'Male', '2004-05-25', 'user26.png', '32070463216', 'xkeeling@example.net', '2026-02-19 01:24:07', '$2y$12$ptsF3Nr8euduM1okR5WeJ.NXR8ywwlUdoGRqpoRb5JBE2Oz82N56G', 1, 'Customer', 'oElLOBjWvY', '2026-02-19 06:24:07', '2026-02-19 06:24:07'),
(27, 75214952, 'Florence Kuhic', 'Female', '1975-03-11', 'user27.png', '32054126656', 'damien62@example.org', '2026-02-19 01:24:07', '$2y$12$S12Wbe8NDOdgTsKZnDVC1u7MGq6zowZ1joyAzuqHMRqVByc3JN6Su', 1, 'Customer', 'cwOIyFyLU2', '2026-02-19 06:24:07', '2026-02-19 06:24:07'),
(28, 75352809, 'Maverick Morar', 'Male', '1985-10-30', 'user28.png', '32066508880', 'wwintheiser@example.org', '2026-02-19 01:24:07', '$2y$12$J.0.r6htTA4i42WFpWk4pOtqhfzwGysCZCOvYmBA.Ngnd3lzRD6JO', 1, 'Customer', 'sGbS0jxJhF', '2026-02-19 06:24:07', '2026-02-19 06:24:07'),
(29, 75824181, 'Madilyn Lakin', 'Female', '1993-08-07', 'user29.png', '32041303425', 'jabernathy@example.com', '2026-02-19 01:24:07', '$2y$12$SlKv9us6hcr5u2CKVFtxTO6nOqJhxIbRnKmaRJZY0zAhk/hNo/bx2', 1, 'Customer', 'S21Qj5oMvO', '2026-02-19 06:24:07', '2026-02-19 06:24:07'),
(30, 75609424, 'Anabelle Conn', 'Female', '1976-02-27', 'user30.png', '32007539483', 'grimes.myles@example.org', '2026-02-19 01:24:07', '$2y$12$wo9hS79g1zIwquxLHpFgXu8LydYhLUTfk.E3ymJEYlE2ItpPOLeH.', 1, 'Customer', 'vR4akORY85', '2026-02-19 06:24:08', '2026-02-19 06:24:08'),
(31, 75458928, 'Monte Casper', 'Male', '1987-01-23', 'user31.png', '32098228452', 'cchamplin@example.com', '2026-02-19 01:24:08', '$2y$12$3dPG.3trSPQmzmlyXPsfnuErL.PjdOjNaaslx8YWfvKgDntZslN16', 1, 'Customer', 'OlGIK2aWuk', '2026-02-19 06:24:08', '2026-02-19 06:24:08'),
(32, 75591729, 'Reed Steuber', 'Male', '1978-11-17', 'user32.png', '32024371413', 'robel.nathaniel@example.org', '2026-02-19 01:24:08', '$2y$12$6buw6uTR43hSQvZURC98keqAGVSCH83M7lYnc49qlQNuh/ddXZWVK', 1, 'Customer', 'UPJjyJNVZo', '2026-02-19 06:24:08', '2026-02-19 06:24:08'),
(33, 75540275, 'Deontae Friesen', 'Male', '1981-12-05', 'user33.png', '32070395038', 'shana85@example.com', '2026-02-19 01:24:08', '$2y$12$dcZOkAJHXuKCZ4AJmH7xAOpOKKMJIhctQ3p/V1QLOJdu95OwqWF/m', 1, 'Customer', 'TaF1NoF9ox', '2026-02-19 06:24:08', '2026-02-19 06:24:08'),
(34, 75046935, 'Lucas Rempel', 'Male', '1993-12-26', 'user34.png', '32032293082', 'aparisian@example.org', '2026-02-19 01:24:08', '$2y$12$tacdxC4xXoiJNiERHc7kSubhawBBFeRTJ1.NYiFdQKrNVyqR7ax1C', 1, 'Customer', 'RDhfvLbF2e', '2026-02-19 06:24:08', '2026-02-19 06:24:08'),
(35, 75243143, 'Cordelia Hintz', 'Male', '1990-11-30', 'user35.png', '32067561058', 'dietrich.golden@example.com', '2026-02-19 01:24:08', '$2y$12$AioBb6392B4sCsCPMBrczeyyryXhASQPCddVGVKnYTH6QFAyknV.G', 1, 'Customer', 'pAJXf1dn8g', '2026-02-19 06:24:09', '2026-02-19 06:24:09'),
(36, 75508336, 'Joshuah Sporer', 'Male', '1997-04-14', 'user36.png', '32082955249', 'dagmar34@example.org', '2026-02-19 01:24:09', '$2y$12$Yn83iLrmgk8aKDUQaiP6yuH72uPMJrx3wwNiA8h3lQ8pnW8vpN1Je', 1, 'Customer', 'jOwla7kHkI', '2026-02-19 06:24:09', '2026-02-19 06:24:09'),
(37, 75245961, 'Denis Mills', 'Male', '1994-03-31', 'user37.png', '32058221293', 'verner.yost@example.net', '2026-02-19 01:24:09', '$2y$12$nIVI8Hv45SLoyVwmo6AxburQiOkJdztr79lGyRILnVzfamgGETC7y', 1, 'Customer', 'IZ91rFYY0Y', '2026-02-19 06:24:09', '2026-02-19 06:24:09'),
(38, 75905383, 'Ava Reynolds', 'Female', '1993-06-09', 'user38.png', '32002311051', 'hermann.ola@example.net', '2026-02-19 01:24:09', '$2y$12$ZRVvvNurmFO67ydma6V0V.xv7hkIu3dO/JPyPiCFvRdzQl8Xaa2fq', 1, 'Customer', 'lMATGSxC7b', '2026-02-19 06:24:09', '2026-02-19 06:24:09'),
(39, 75144469, 'Chaim Ferry', 'Male', '2003-01-15', 'user39.png', '32059100665', 'qbrekke@example.net', '2026-02-19 01:24:09', '$2y$12$GVPkmc3j4y75wtOiyZ1xH.fv4uG5QVLDJNAgYhMeS1Ws68Z9RADQC', 1, 'Customer', 'dMVqtPIucQ', '2026-02-19 06:24:09', '2026-02-19 06:24:09'),
(40, 75544471, 'Blanche Lang', 'Female', '2003-02-06', 'user40.png', '32055184492', 'mariana.runte@example.net', '2026-02-19 01:24:09', '$2y$12$OFr3zFfkX1ywINADbtVyRegY00v5h99NNVGB/Mp8kh8bfZzFpMO1u', 1, 'Customer', 'ixWwEi9971', '2026-02-19 06:24:10', '2026-02-19 06:24:10'),
(41, 75502058, 'Oswaldo Pollich', 'Male', '1998-02-13', 'user41.png', '32008723121', 'szieme@example.net', '2026-02-19 01:24:10', '$2y$12$J3fiXXIy4NStqSf8OnB.l.bM4EMpYHZspcpZdfJEsGm28vr11nQ0W', 1, 'Customer', '5hrrRM3m7A', '2026-02-19 06:24:10', '2026-02-19 06:24:10'),
(42, 75385456, 'Reanna McClure', 'Female', '1981-10-28', 'user42.png', '32060092764', 'effertz.bernadette@example.com', '2026-02-19 01:24:10', '$2y$12$kB30r72S2H/6RgnFyGcSYu.htQxc6jbk8XlTfHuauqjiDg7m2kmwG', 1, 'Customer', 'qA0eJ80Agh', '2026-02-19 06:24:10', '2026-02-19 06:24:10'),
(43, 75842818, 'Lois Shields', 'Female', '1995-01-26', 'user43.png', '32062417949', 'kassulke.chelsie@example.net', '2026-02-19 01:24:10', '$2y$12$N/AN8ps1d0QsdgQ4WPL4HeZA/BbgJNIiyVxo0foqqaEbPWts4logy', 1, 'Customer', '2GHe1v5Gqx', '2026-02-19 06:24:10', '2026-02-19 06:24:10'),
(44, 75423836, 'Dewitt Price', 'Male', '1980-11-03', 'user44.png', '32069250959', 'vernie.white@example.com', '2026-02-19 01:24:10', '$2y$12$NZZeZeFzacPmiWlABSTL7ue2SSLXOTL5k11/WDNtOd3bFD.1i6OA2', 1, 'Customer', 'uvTezRv7Rz', '2026-02-19 06:24:10', '2026-02-19 06:24:10'),
(45, 75141510, 'Ryleigh Morar', 'Male', '1996-04-11', 'user45.png', '32015951435', 'vgaylord@example.com', '2026-02-19 01:24:10', '$2y$12$deSIP7z/kq1E7.KkwQYYCertP4sbVvBPIkiOoy/u2be4G1d9wxf1S', 1, 'Customer', 'ChdiNLOlw1', '2026-02-19 06:24:11', '2026-02-19 06:24:11'),
(46, 75866268, 'Nyasia Thiel', 'Female', '1984-07-23', 'user46.png', '32064318499', 'wkozey@example.com', '2026-02-19 01:24:11', '$2y$12$7ko5gKz6JN76As4SNB1Y6eo5xMMPw5t/fSOQqKngen1xOegN6VPuu', 1, 'Customer', 'CFX3BplEzd', '2026-02-19 06:24:11', '2026-02-19 06:24:11'),
(47, 75002811, 'Wilhelmine Mraz', 'Female', '1996-10-18', 'user47.png', '32097746418', 'phayes@example.net', '2026-02-19 01:24:11', '$2y$12$H3AQ6t8z05R.shei9rsJjergJY.lZYHal.gNYHEl8Bi3ko6lIL4du', 1, 'Customer', 'cchQANqtTz', '2026-02-19 06:24:11', '2026-02-19 06:24:11'),
(48, 75598637, 'Stanley Moore', 'Male', '1978-04-29', 'user48.png', '32034165076', 'martin73@example.net', '2026-02-19 01:24:11', '$2y$12$Pnn3DSDifu8hFG1AMLhQduKxVzsSDcwH5XxjjvVThAngbVbD8OHG.', 1, 'Customer', 'z53ukPdIXc', '2026-02-19 06:24:11', '2026-02-19 06:24:11'),
(49, 75535967, 'Paolo Lubowitz', 'Male', '1984-08-15', 'user49.png', '32083383895', 'samson52@example.com', '2026-02-19 01:24:11', '$2y$12$2JzRqglqp0pLfqIdY/6nOew7pVktj7KV.9WBioaiPXklajlhoZRQq', 1, 'Customer', 'YRHaWe65E7', '2026-02-19 06:24:11', '2026-02-19 06:24:11'),
(50, 75142411, 'Domenic Runte', 'Male', '2004-08-23', 'user50.png', '32012560846', 'chelsey95@example.net', '2026-02-19 01:24:11', '$2y$12$Jb89RYqXJ59ZU236JCsYr.7/8.e3ZwWK4lbOhFVk3o2PWYHHW8S7a', 1, 'Customer', 'NL8pYiK3Wi', '2026-02-19 06:24:12', '2026-02-19 06:24:12');

--
-- Índices para tablas volcadas
--

--
-- Indices de la tabla `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `users_document_unique` (`document`),
  ADD UNIQUE KEY `users_email_unique` (`email`);

--
-- AUTO_INCREMENT de las tablas volcadas
--

--
-- AUTO_INCREMENT de la tabla `users`
--
ALTER TABLE `users`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=51;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
