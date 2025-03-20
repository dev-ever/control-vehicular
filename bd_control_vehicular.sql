-- phpMyAdmin SQL Dump
-- version 4.9.5deb2
-- https://www.phpmyadmin.net/
--
-- Servidor: localhost:3306
-- Tiempo de generación: 12-12-2024 a las 17:05:08
-- Versión del servidor: 8.0.40-0ubuntu0.20.04.1
-- Versión de PHP: 7.4.33

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de datos: `bd_control_vehicular`
--

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `log`
--

CREATE TABLE `log` (
  `idLog` int NOT NULL,
  `actividad` varchar(255) CHARACTER SET utf8mb3 COLLATE utf8mb3_spanish_ci NOT NULL,
  `tipo` varchar(50) CHARACTER SET utf8mb3 COLLATE utf8mb3_spanish_ci NOT NULL,
  `usuario_id` int NOT NULL,
  `private_id` varchar(50) CHARACTER SET utf8mb3 COLLATE utf8mb3_spanish_ci NOT NULL,
  `public_id` varchar(50) CHARACTER SET utf8mb3 COLLATE utf8mb3_spanish_ci NOT NULL,
  `eject` datetime NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb3 COLLATE=utf8mb3_spanish_ci;

--
-- Volcado de datos para la tabla `log`
--

INSERT INTO `log` (`idLog`, `actividad`, `tipo`, `usuario_id`, `private_id`, `public_id`) VALUES
(162, 'El usuario: everardo mauro ramirez agregó el perfil: CONTROL VEHICULAR', 'Alta', 23, '_gateway', '192.168.0.1'),
(163, 'Ingreso al sistema Zita Ruiz Santos', 'Ingreso', 14, '_gateway', '192.168.0.1'),
(164, 'Ingreso al sistema Zita Ruiz Santos', 'Ingreso', 14, '_gateway', '192.168.0.1'),
(165, 'Ingreso al sistema everardo mauro ramirez', 'Ingreso', 23, '_gateway', '192.168.0.1'),
(166, 'Ingreso al sistema Zita Ruiz Santos', 'Ingreso', 14, '_gateway', '192.168.0.1'),
(167, 'Ingreso al sistema everardo mauro ramirez', 'Ingreso', 23, '_gateway', '192.168.0.1'),
(168, 'Ingreso al sistema Zita Ruiz Santos', 'Ingreso', 14, '_gateway', '192.168.0.1'),
(169, 'Ingreso al sistema Zita Ruiz Santos', 'Ingreso', 14, '_gateway', '192.168.0.1'),
(170, 'Ingreso al sistema Zita Ruiz Santos', 'Ingreso', 14, '_gateway', '192.168.0.1'),
(171, 'Ingreso al sistema Zita Ruiz Santos', 'Ingreso', 14, '_gateway', '192.168.0.1'),
(172, 'Se eliminó el vehiculo 0272', 'Eliminación', 14, '_gateway', '192.168.0.1'),
(173, 'Registro de nuevo servicio para el vehículo folio: 0070 - Corolla le Sedan, serie: 5YFBPRBE9NP273095', 'Alta', 14, '_gateway', '192.168.0.1'),
(174, 'Registro de nuevo trámite BAJA DE PLACAS ', 'Alta', 14, '_gateway', '192.168.0.1'),
(175, 'Ingreso al sistema everardo mauro ramirez', 'Ingreso', 23, '_gateway', '192.168.0.1'),
(176, 'Ingreso al sistema Zita Ruiz Santos', 'Ingreso', 14, '_gateway', '192.168.0.1'),
(177, 'Ingreso al sistema Zita Ruiz Santos', 'Ingreso', 14, '_gateway', '192.168.0.1'),
(178, 'Ingreso al sistema Ezequiel Becerril', 'Ingreso', 26, '_gateway', '192.168.0.1'),
(179, 'Ingreso al sistema Zita Ruiz Santos', 'Ingreso', 14, '_gateway', '192.168.0.1'),
(180, 'Ingreso al sistema Zita Ruiz Santos', 'Ingreso', 14, '_gateway', '192.168.0.1'),
(181, 'Ingreso al sistema Zita Ruiz Santos', 'Ingreso', 14, '_gateway', '192.168.0.1'),
(182, 'El usuario: Zita Ruiz Santos agregó solicitud de inventario: Invenario inicial del vehiculo XYZ', 'Alta', 14, '_gateway', '192.168.0.1'),
(183, 'El usuario: Zita Ruiz Santos agregó solicitud de inventario: Inventario de vehiculo ABCD', 'Alta', 14, '_gateway', '192.168.0.1'),
(184, 'El usuario: Zita Ruiz Santos agregó solicitud de inventario: Inventario VEHIOCULO XYZ', 'Alta', 14, '_gateway', '192.168.0.1'),
(185, 'Ingreso al sistema everardo mauro ramirez', 'Ingreso', 23, '_gateway', '192.168.0.1'),
(186, 'Ingreso al sistema everardo mauro ramirez', 'Ingreso', 23, '_gateway', '192.168.0.1'),
(187, 'Ingreso al sistema everardo mauro ramirez', 'Ingreso', 23, '_gateway', '192.168.0.1'),
(188, 'Ingreso al sistema Alejandra Jimenez Reynoso', 'Ingreso', 1, '_gateway', '192.168.0.1'),
(189, 'Ingreso al sistema Alejandra Jimenez Reynoso', 'Ingreso', 1, '_gateway', '192.168.0.1'),
(190, 'Ingreso al sistema everardo mauro ramirez', 'Ingreso', 23, '_gateway', '192.168.0.1'),
(191, 'Ingreso al sistema Zita Ruiz Santos', 'Ingreso', 14, '_gateway', '192.168.0.1'),
(192, 'Ingreso al sistema Josue Agustin Balladares', 'Ingreso', 18, '_gateway', '192.168.0.1'),
(193, 'Se edito el vehiculo serie: JTDKDTB33M1143143, modelo: Hatchback', 'Edición', 14, '_gateway', '192.168.0.1'),
(194, 'Ingreso al sistema Ezequiel Becerril', 'Ingreso', 26, '_gateway', '192.168.0.1'),
(195, 'Ingreso al sistema Santiago Guerrero', 'Ingreso', 27, '_gateway', '192.168.0.1'),
(196, 'Ingreso al sistema Diana Torres Green', 'Ingreso', 28, '_gateway', '192.168.0.1'),
(197, 'Ingreso al sistema Christopher Carlos Hernández', 'Ingreso', 29, '_gateway', '192.168.0.1'),
(198, 'Ingreso al sistema Karla Salgado', 'Ingreso', 30, '_gateway', '192.168.0.1'),
(199, 'Ingreso al sistema Astrid Loya', 'Ingreso', 31, '_gateway', '192.168.0.1'),
(200, 'Ingreso al sistema Astrid Loya', 'Ingreso', 31, '_gateway', '192.168.0.1'),
(201, 'Ingreso al sistema Manuel Alejandro Omaña Covarrubias', 'Ingreso', 33, '_gateway', '192.168.0.1'),
(202, 'Ingreso al sistema everardo mauro ramirez', 'Ingreso', 23, '_gateway', '192.168.0.1'),
(203, 'Ingreso al sistema everardo mauro ramirez', 'Ingreso', 23, '_gateway', '192.168.0.1'),
(204, 'Ingreso al sistema Administrador Sistema1', 'Ingreso', 24, '_gateway', '192.168.0.1'),
(205, 'Ingreso al sistema Administrador Sistema1', 'Ingreso', 24, '_gateway', '192.168.0.1'),
(206, 'Ingreso al sistema Administrador Sistema1', 'Ingreso', 24, '_gateway', '192.168.0.1'),
(207, 'Ingreso al sistema Victor Gerardo Zamudio Lozano Girsa', 'Ingreso', 13, '_gateway', '192.168.0.1'),
(208, 'Ingreso al sistema Victor Gerardo Zamudio Lozano Green', 'Ingreso', 34, '_gateway', '192.168.0.1'),
(209, 'Ingreso al sistema Josue Agustin Balladares', 'Ingreso', 18, '_gateway', '192.168.0.1'),
(210, 'Ingreso al sistema everardo mauro ramirez', 'Ingreso', 23, '_gateway', '192.168.0.1'),
(211, 'Ingreso al sistema everardo mauro ramirez', 'Ingreso', 23, '_gateway', '192.168.0.1'),
(212, 'Ingreso al sistema Zita Ruiz Santos', 'Ingreso', 14, '_gateway', '192.168.0.1'),
(213, 'Ingreso al sistema everardo mauro ramirez', 'Ingreso', 23, '_gateway', '192.168.0.1'),
(214, 'Ingreso al sistema everardo mauro ramirez', 'Ingreso', 23, '_gateway', '192.168.0.1'),
(215, 'Ingreso al sistema Zita Ruiz Santos', 'Ingreso', 14, '_gateway', '192.168.0.1'),
(216, 'Ingreso al sistema Zita Ruiz Santos', 'Ingreso', 14, '_gateway', '192.168.0.1'),
(217, 'Ingreso al sistema Zita Ruiz Santos', 'Ingreso', 14, '_gateway', '192.168.0.1'),
(218, 'Ingreso al sistema everardo mauro ramirez', 'Ingreso', 23, '_gateway', '192.168.0.1'),
(219, 'Ingreso al sistema KARLA SALGADO MARTINEZ', 'Ingreso', 30, '_gateway', '192.168.0.1'),
(220, 'Ingreso al sistema Christopher Carlos Hernández', 'Ingreso', 29, '_gateway', '192.168.0.1'),
(221, 'Ingreso al sistema Zita Ruiz Santos', 'Ingreso', 14, '_gateway', '192.168.0.1'),
(222, 'Ingreso al sistema everardo mauro ramirez', 'Ingreso', 23, '_gateway', '192.168.0.1'),
(223, 'Ingreso al sistema Zita Ruiz Santos', 'Ingreso', 14, '_gateway', '192.168.0.1'),
(224, 'Ingreso al sistema Zita Ruiz Santos', 'Ingreso', 14, '_gateway', '192.168.0.1'),
(225, 'Ingreso al sistema everardo mauro ramirez', 'Ingreso', 23, '_gateway', '192.168.0.1'),
(226, 'Ingreso al sistema Ernesto Ibarra', 'Ingreso', 35, '_gateway', '192.168.0.1'),
(227, 'Ingreso al sistema everardo mauro ramirez', 'Ingreso', 23, '_gateway', '192.168.0.1'),
(228, 'Ingreso al sistema everardo mauro ramirez', 'Ingreso', 23, '_gateway', '192.168.0.1'),
(229, 'Ingreso al sistema Ezequiel Becerril', 'Ingreso', 26, '_gateway', '192.168.0.1'),
(230, 'Ingreso al sistema Victor Gerardo Zamudio Lozano Girsa', 'Ingreso', 13, '_gateway', '192.168.0.1'),
(231, 'Ingreso al sistema Zita Ruiz Santos', 'Ingreso', 14, '_gateway', '192.168.0.1'),
(232, 'Ingreso al sistema Santiago Guerrero', 'Ingreso', 27, '_gateway', '192.168.0.1'),
(233, 'Se edito el vehiculo serie: 5274D, modelo: S', 'Edición', 23, '_gateway', '192.168.0.1'),
(234, 'Se edito el vehiculo serie: 1FDAF56F31EA15572, modelo: F-550', 'Edición', 23, '_gateway', '192.168.0.1'),
(235, 'Se edito el vehiculo serie: 16V6X2023D2670077, modelo: No visible', 'Edición', 23, '_gateway', '192.168.0.1'),
(236, 'Se edito el vehiculo serie: Sin datos, modelo: No visible', 'Edición', 23, '_gateway', '192.168.0.1'),
(237, 'Se edito el vehiculo serie: 1FVABTBV52HKD7310, modelo: F70', 'Edición', 23, '_gateway', '192.168.0.1'),
(238, 'Se edito el vehiculo serie: 515815054, modelo: 753', 'Edición', 23, '_gateway', '192.168.0.1'),
(239, 'Se edito el vehiculo serie: 1HTLAHEM2GHA22667, modelo: S 1600', 'Edición', 23, '_gateway', '192.168.0.1'),
(240, 'Se edito el vehiculo serie: Sin datos, modelo: No visible', 'Edición', 23, '_gateway', '192.168.0.1'),
(241, 'Se edito el vehiculo serie: 1FDSF30L53ED60144, modelo: F-350', 'Edición', 23, '_gateway', '192.168.0.1'),
(242, 'Se edito el vehiculo serie: 4AB00792, modelo: D7H', 'Edición', 23, '_gateway', '192.168.0.1'),
(243, 'Se edito el vehiculo serie: 87X01230, modelo: 826C', 'Edición', 23, '_gateway', '192.168.0.1'),
(244, 'Se edito el vehiculo serie: 79Z05564, modelo: D7H', 'Edición', 23, '_gateway', '192.168.0.1'),
(245, 'Se edito el vehiculo serie: CAT0416ECMFG12830, modelo: 416E', 'Edición', 23, '_gateway', '192.168.0.1'),
(246, 'Se edito el vehiculo serie: 87X01454, modelo: 826C', 'Edición', 23, '_gateway', '192.168.0.1'),
(247, 'Se edito el vehiculo serie: ME1RG4256J2019162, modelo: FZ25', 'Edición', 23, '_gateway', '192.168.0.1'),
(248, 'Se edito el vehiculo serie: 5BF00629, modelo: D7H', 'Edición', 23, '_gateway', '192.168.0.1'),
(249, 'Se edito el vehiculo serie: 79Z01854, modelo: D7H', 'Edición', 23, '_gateway', '192.168.0.1'),
(250, 'Se edito el vehiculo serie: CAT0143HLAPN01024, modelo: 143H', 'Edición', 23, '_gateway', '192.168.0.1'),
(251, 'Se edito el vehiculo serie: HHKHZ701CC0000318, modelo: ROBEX 250LC-9', 'Edición', 23, '_gateway', '192.168.0.1'),
(252, 'Se edito el vehiculo serie: 1405850, modelo: MLT3060M', 'Edición', 23, '_gateway', '192.168.0.1'),
(253, 'Se edito el vehiculo serie: 1404264, modelo: MLT3060K', 'Edición', 23, '_gateway', '192.168.0.1'),
(254, 'Se edito el vehiculo serie: 87X01412, modelo: 826C', 'Edición', 23, '_gateway', '192.168.0.1'),
(255, 'Se edito el vehiculo serie: 3HSDJSJR4CN087217, modelo: TRACTOR DE CARRETERA 6 CIL', 'Edición', 23, '_gateway', '192.168.0.1'),
(256, 'Se edito el vehiculo serie: MR0EX3DD0L0003907, modelo: Hilux Doble Cabina', 'Edición', 23, '_gateway', '192.168.0.1'),
(257, 'Se edito el vehiculo serie: MR0EX8CB7L1409562, modelo: Hilux Cabina sencilla', 'Edición', 23, '_gateway', '192.168.0.1'),
(258, 'Se edito el vehiculo serie: 6582US0816, modelo: CA250D', 'Edición', 23, '_gateway', '192.168.0.1'),
(259, 'Se edito el vehiculo serie: 76095-0046, modelo: US636HCC-1', 'Edición', 23, '_gateway', '192.168.0.1'),
(260, 'Se edito el vehiculo serie: MR2B29F31L1201065, modelo: Sedan', 'Edición', 23, '_gateway', '192.168.0.1'),
(261, 'Se edito el vehiculo serie: MR2B29F3XL1198697, modelo: Sedan', 'Edición', 23, '_gateway', '192.168.0.1'),
(262, 'Se edito el vehiculo serie: MR0EX3DDXL0004840, modelo: Pick Up D-CAB', 'Edición', 23, '_gateway', '192.168.0.1'),
(263, 'Se edito el vehiculo serie: 1FDRF3G65LEC08377, modelo: F-350', 'Edición', 23, '_gateway', '192.168.0.1'),
(264, 'Se edito el vehiculo serie: 5648116, modelo: RD11A', 'Edición', 23, '_gateway', '192.168.0.1'),
(265, 'Se edito el vehiculo serie: 1HTWGADT13J069569, modelo: SD40D', 'Edición', 23, '_gateway', '192.168.0.1'),
(266, 'Se edito el vehiculo serie: JNALC80HX5AN50187, modelo: UD2300', 'Edición', 23, '_gateway', '192.168.0.1'),
(267, 'Se edito el vehiculo serie: 1HTMMAAM2CH608852, modelo: 4300 SBA 4X2', 'Edición', 23, '_gateway', '192.168.0.1'),
(268, 'Se edito el vehiculo serie: 1HTMSAAR6DJ482474, modelo: 4400 SBA 6X4', 'Edición', 23, '_gateway', '192.168.0.1'),
(269, 'Se edito el vehiculo serie: 3HAMMAAR8JL736452, modelo: 4300 SBA 4X2', 'Edición', 23, '_gateway', '192.168.0.1'),
(270, 'Se edito el vehiculo serie: 3HAMMAAR8JL736452, modelo: 4300 SBA 4X2', 'Edición', 23, '_gateway', '192.168.0.1'),
(271, 'Se edito el vehiculo serie: 1FDRF3G62LED13717, modelo: Camioneta Caja con Copete', 'Edición', 23, '_gateway', '192.168.0.1'),
(272, 'Se edito el vehiculo serie: 1FDRF3G62LED13717, modelo: Camioneta Caja con Copete', 'Edición', 23, '_gateway', '192.168.0.1'),
(273, 'Se edito el vehiculo serie: 8AFRR5AA6G6394654, modelo: Pick Up D-Cab', 'Edición', 23, '_gateway', '192.168.0.1'),
(274, 'Se edito el vehiculo serie: NMTKH38X4JR049082, modelo: CH-R 5 Ptas', 'Edición', 23, '_gateway', '192.168.0.1'),
(275, 'Se edito el vehiculo serie: MR0EX8CB7H1398439, modelo: Hilux 2 y 4 ptas', 'Edición', 23, '_gateway', '192.168.0.1'),
(276, 'Se edito el vehiculo serie: 1947400029, modelo: POWRLINER 6955', 'Edición', 23, '_gateway', '192.168.0.1'),
(277, 'Se edito el vehiculo serie: 1947400028, modelo: POWRLINER 6955', 'Edición', 23, '_gateway', '192.168.0.1'),
(278, 'Se edito el vehiculo serie: 1947400028, modelo: POWRLINER 6955', 'Edición', 23, '_gateway', '192.168.0.1'),
(279, 'Se edito el vehiculo serie: 1947400035, modelo: POWRLINER 6955', 'Edición', 23, '_gateway', '192.168.0.1'),
(280, 'Se edito el vehiculo serie: 1947400036, modelo: POWRLINER 6955', 'Edición', 23, '_gateway', '192.168.0.1'),
(281, 'Se edito el vehiculo serie: 9C6DG271XK0003104, modelo: XTZ250', 'Edición', 23, '_gateway', '192.168.0.1'),
(282, 'Se edito el vehiculo serie: MR0CX3DD5M1318124, modelo: Hilux 4 puertas', 'Edición', 23, '_gateway', '192.168.0.1'),
(283, 'Se edito el vehiculo serie: 9C6DG2712K0003130, modelo: XTZ250', 'Edición', 23, '_gateway', '192.168.0.1'),
(284, 'Se edito el vehiculo serie: KMTPC180T54A90202, modelo: PC200LC-8', 'Edición', 23, '_gateway', '192.168.0.1'),
(285, 'Se edito el vehiculo serie: 1A9AS432XK2228229, modelo: GP432T E1', 'Edición', 23, '_gateway', '192.168.0.1'),
(286, 'Se edito el vehiculo serie: 1A9AS4326K2228230, modelo: GP432T E1', 'Edición', 23, '_gateway', '192.168.0.1'),
(287, 'Se edito el vehiculo serie: 1HTSDADR0TH263190, modelo: 4900 4x2', 'Edición', 23, '_gateway', '192.168.0.1'),
(288, 'Se edito el vehiculo serie: 1FVHGSCY4GHHC7363, modelo: 108SD', 'Edición', 23, '_gateway', '192.168.0.1'),
(289, 'Se edito el vehiculo serie: CAT0953DKLBP01390, modelo: 953D', 'Edición', 23, '_gateway', '192.168.0.1'),
(290, 'Se edito el vehiculo serie: 3C6SRBDT4LG133558, modelo: RAM 1500 CREW CAB 4X4', 'Edición', 23, '_gateway', '192.168.0.1'),
(291, 'Se edito el vehiculo serie: 2C3CDXAGXLH106479, modelo: Charger policia V6', 'Edición', 23, '_gateway', '192.168.0.1'),
(292, 'Se edito el vehiculo serie: 2C3CDXAG9LH106540, modelo: Charger policia V6', 'Edición', 23, '_gateway', '192.168.0.1'),
(293, 'Se edito el vehiculo serie: 2C3CDXAG9LH106540, modelo: Charger policia V6', 'Edición', 23, '_gateway', '192.168.0.1'),
(294, 'Se edito el vehiculo serie: 2C3CDXAG8LH106559, modelo: Charger policia V6', 'Edición', 23, '_gateway', '192.168.0.1'),
(295, 'Se edito el vehiculo serie: 2C3CDXAG7LH106472, modelo: Charger policia V6', 'Edición', 23, '_gateway', '192.168.0.1'),
(296, 'Se edito el vehiculo serie: 2C3CDXAG7LH106472, modelo: Charger policia V6', 'Edición', 23, '_gateway', '192.168.0.1'),
(297, 'Se edito el vehiculo serie: 2C3CDXAG4LH106574, modelo: Charger policia V6', 'Edición', 23, '_gateway', '192.168.0.1'),
(298, 'Se edito el vehiculo serie: 2C3CDXAG0LH106491, modelo: Charger policia V6', 'Edición', 23, '_gateway', '192.168.0.1'),
(299, 'Se edito el vehiculo serie: 2C3CDXAG3LH106579, modelo: Charger policia V6', 'Edición', 23, '_gateway', '192.168.0.1'),
(300, 'Se edito el vehiculo serie: 1M9BU2025HH774314, modelo: DB-500', 'Edición', 23, '_gateway', '192.168.0.1'),
(301, 'Se edito el vehiculo serie: 1FTYR1CM8KKB04059, modelo: Transit Van 3', 'Edición', 23, '_gateway', '192.168.0.1'),
(302, 'Se edito el vehiculo serie: 13733, modelo: BX25DLB', 'Edición', 23, '_gateway', '192.168.0.1'),
(303, 'Se edito el vehiculo serie: 13733, modelo: BX25DLB', 'Edición', 23, '_gateway', '192.168.0.1'),
(304, 'Se edito el vehiculo serie: 3C6TRVCG1KE526406, modelo: RAM PROMASTER (Nac)', 'Edición', 23, '_gateway', '192.168.0.1'),
(305, 'Se edito el vehiculo serie: 28031, modelo: BX25DLB', 'Edición', 23, '_gateway', '192.168.0.1'),
(306, 'Se edito el vehiculo serie: JAFOL225JKM481150, modelo: L225 NR', 'Edición', 23, '_gateway', '192.168.0.1'),
(307, 'Se edito el vehiculo serie: 46468, modelo: 8FGU25', 'Edición', 23, '_gateway', '192.168.0.1'),
(308, 'Se edito el vehiculo serie: 46632, modelo: 8FGU25', 'Edición', 23, '_gateway', '192.168.0.1'),
(309, 'Se edito el vehiculo serie: 39923, modelo: 8FGU25', 'Edición', 23, '_gateway', '192.168.0.1'),
(310, 'Se edito el vehiculo serie: 13517, modelo: 8FGU18', 'Edición', 23, '_gateway', '192.168.0.1'),
(311, 'Se edito el vehiculo serie: 85117, modelo: 7FGCU25', 'Edición', 23, '_gateway', '192.168.0.1'),
(312, 'Se edito el vehiculo serie: 45582, modelo: 8FGCU25', 'Edición', 23, '_gateway', '192.168.0.1'),
(313, 'Se edito el vehiculo serie: 45582, modelo: 8FGCU25', 'Edición', 23, '_gateway', '192.168.0.1'),
(314, 'Se edito el vehiculo serie: 67899, modelo: 7FGU30', 'Edición', 23, '_gateway', '192.168.0.1'),
(315, 'Se edito el vehiculo serie: 60232, modelo: 30-7FBCU30', 'Edición', 23, '_gateway', '192.168.0.1'),
(316, 'Se edito el vehiculo serie: S005V04683M, modelo: DP40N1', 'Edición', 23, '_gateway', '192.168.0.1'),
(317, 'Se edito el vehiculo serie: S005V04683M, modelo: DP40N1', 'Edición', 23, '_gateway', '192.168.0.1'),
(318, 'Se edito el vehiculo serie: 39927, modelo: 8FGCU25', 'Edición', 23, '_gateway', '192.168.0.1'),
(319, 'Se edito el vehiculo serie: 39927, modelo: 8FGCU25', 'Edición', 23, '_gateway', '192.168.0.1'),
(320, 'Se edito el vehiculo serie: C815N01671Y, modelo: NR040AENL36TE107', 'Edición', 23, '_gateway', '192.168.0.1'),
(321, 'Se edito el vehiculo serie: NPR345-0276-9517FG, modelo: NPR-17', 'Edición', 23, '_gateway', '192.168.0.1'),
(322, 'Se edito el vehiculo serie: B883N03479M, modelo: ESC035ACN36TE088', 'Edición', 23, '_gateway', '192.168.0.1'),
(323, 'Se edito el vehiculo serie: 200224384, modelo: 2030ES', 'Edición', 23, '_gateway', '192.168.0.1'),
(324, 'Se edito el vehiculo serie: B200006626, modelo: 2030ES', 'Edición', 23, '_gateway', '192.168.0.1'),
(325, 'Se edito el vehiculo serie: 5AM06542, modelo: GP25', 'Edición', 23, '_gateway', '192.168.0.1'),
(326, 'Se edito el vehiculo serie: 84912, modelo: 7FGU25', 'Edición', 23, '_gateway', '192.168.0.1'),
(327, 'Se edito el vehiculo serie: AF17D40721, modelo: FG25N', 'Edición', 23, '_gateway', '192.168.0.1'),
(328, 'Se edito el vehiculo serie: 3AKJC5CV0KDKN4178, modelo: M210635K', 'Edición', 23, '_gateway', '192.168.0.1'),
(329, 'Se edito el vehiculo serie: 3HAMMAAR0JL567771, modelo: 4300 SBA 4X2', 'Edición', 23, '_gateway', '192.168.0.1'),
(330, 'Se edito el vehiculo serie: 1FDRF3G66LED23490, modelo: Camioneta de Redilas', 'Edición', 23, '_gateway', '192.168.0.1'),
(331, 'Se edito el vehiculo serie: 3HAMSAAR2FL679601, modelo: 4400 SBA 6X4', 'Edición', 23, '_gateway', '192.168.0.1'),
(332, 'Se edito el vehiculo serie: 17721706, modelo: Tren miniatura', 'Edición', 23, '_gateway', '192.168.0.1'),
(333, 'Ingreso al sistema Christopher Carlos Hernández', 'Ingreso', 29, '_gateway', '192.168.0.1'),
(334, 'Se edito el vehiculo serie: 9C6DG2715K0003138, modelo: XTZ250', 'Edición', 23, '_gateway', '192.168.0.1'),
(335, 'Ingreso al sistema ASTRID CAROLINA LOYA CRUZ ', 'Ingreso', 31, '_gateway', '192.168.0.1'),
(336, 'Ingreso al sistema ASTRID CAROLINA LOYA CRUZ ', 'Ingreso', 31, '_gateway', '192.168.0.1'),
(337, 'Ingreso al sistema Ezequiel Becerril', 'Ingreso', 26, '_gateway', '192.168.0.1'),
(338, 'Ingreso al sistema everardo mauro ramirez', 'Ingreso', 23, '_gateway', '192.168.0.1'),
(339, 'Ingreso al sistema Christopher Carlos Hernández', 'Ingreso', 29, '_gateway', '192.168.0.1'),
(340, 'Ingreso al sistema Santiago Guerrero', 'Ingreso', 27, '_gateway', '192.168.0.1'),
(341, 'Ingreso al sistema Josue Agustin Balladares', 'Ingreso', 18, '_gateway', '192.168.0.1'),
(342, 'Se edito el vehiculo serie: 9C6DG2712K0003128, modelo: XTZ250', 'Edición', 23, '_gateway', '192.168.0.1'),
(343, 'Ingreso al sistema Hector Antonio  Torres Garcia', 'Ingreso', 7, '_gateway', '192.168.0.1'),
(344, 'Se edito el vehiculo serie: 9C6DG2712K0003128, modelo: XTZ250', 'Edición', 23, '_gateway', '192.168.0.1'),
(345, 'Ingreso al sistema Zita Ruiz Santos', 'Ingreso', 14, '_gateway', '192.168.0.1'),
(346, 'Ingreso al sistema Zita Ruiz Santos', 'Ingreso', 14, '_gateway', '192.168.0.1'),
(347, 'Ingreso al sistema everardo mauro ramirez', 'Ingreso', 23, '_gateway', '192.168.0.1');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `tb_areas_vehiculos`
--

CREATE TABLE `tb_areas_vehiculos` (
  `idAreaVehiculo` int NOT NULL,
  `area` varchar(255) CHARACTER SET utf8mb3 COLLATE utf8mb3_spanish_ci NOT NULL,
  `created_at` datetime NOT NULL,
  `usuario_id` int NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb3 COLLATE=utf8mb3_spanish_ci;

--
-- Volcado de datos para la tabla `tb_areas_vehiculos`
--

INSERT INTO `tb_areas_vehiculos` (`idAreaVehiculo`, `area`, `created_at`, `usuario_id`) VALUES
(1, 'VISION MX', '2024-11-13 14:04:42', 14),
(2, 'FRASAN COLORS', '2024-11-13 14:04:56', 14),
(3, 'FRASAN GLOBAL', '2024-11-13 14:05:12', 14),
(4, 'FRASAN GREEN', '2024-11-13 14:05:38', 14),
(5, 'GIRSA', '2024-11-13 14:05:51', 14),
(6, 'GIRSA VALLE DE MEXICO', '2024-11-13 14:06:07', 14),
(7, 'FRANSANCO', '2024-11-13 14:06:30', 14),
(8, 'FRASAN GROUP', '2024-11-13 14:06:53', 14),
(9, 'CONSTRUCTORA PACIFICO', '2024-11-13 14:07:25', 14),
(10, 'CONTRALORIA', '2024-11-13 14:07:43', 14),
(11, 'RECURSOS HUMANOS', '2024-11-13 14:08:00', 14),
(12, 'FINANZAS', '2024-11-13 14:08:10', 14),
(13, 'CONTROL VEHICULAR', '2024-11-13 14:08:29', 14);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `tb_clases`
--

CREATE TABLE `tb_clases` (
  `idClase` int NOT NULL,
  `clase` varchar(255) NOT NULL,
  `created_at` datetime NOT NULL,
  `usuario_id` int NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Volcado de datos para la tabla `tb_clases`
--

INSERT INTO `tb_clases` (`idClase`, `clase`, `created_at`, `usuario_id`) VALUES
(1, 'Maquinaria Ligera', '2024-03-01 15:13:20', 26),
(2, 'Maquinaria Pesada', '2024-03-01 15:13:39', 26),
(3, 'Transporte Interno', '2024-03-01 15:14:21', 26),
(4, 'Vehículos de Servicio', '2024-08-20 11:50:34', 26);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `tb_combustibles`
--

CREATE TABLE `tb_combustibles` (
  `idCombustible` int NOT NULL,
  `combustible` varchar(255) NOT NULL,
  `created_at` datetime NOT NULL,
  `usuario_id` int NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Volcado de datos para la tabla `tb_combustibles`
--

INSERT INTO `tb_combustibles` (`idCombustible`, `combustible`, `created_at`, `usuario_id`) VALUES
(1, 'Diesel', '2024-01-18 23:50:20', 26),
(2, 'Gasolina', '2024-01-19 15:16:09', 26),
(3, 'Hibrido', '2024-01-22 17:34:27', 26),
(4, 'Eléctrico', '2024-08-20 11:41:42', 26),
(6, 'Aceite', '2024-03-04 12:37:06', 26),
(7, 'N/A', '2024-03-04 12:58:42', 26),
(8, 'Gas', '2024-03-07 10:43:22', 26);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `tb_documentacion_vehiculos`
--

CREATE TABLE `tb_documentacion_vehiculos` (
  `idDocumentoVeh` int NOT NULL,
  `factura` varchar(255) NOT NULL,
  `checkFactura` int NOT NULL,
  `poliza` varchar(255) NOT NULL,
  `checkPoliza` int NOT NULL,
  `tenencia` varchar(255) NOT NULL,
  `checkTenencia` int NOT NULL,
  `verificacion` varchar(255) NOT NULL,
  `checkVerificacion` int NOT NULL,
  `pedimento` varchar(255) NOT NULL,
  `checkPedimento` int NOT NULL,
  `tarjeta` varchar(255) NOT NULL,
  `checkTarjeta` int NOT NULL,
  `garantia` varchar(255) NOT NULL,
  `checkGarantia` int NOT NULL,
  `permiso` varchar(255) NOT NULL,
  `checkPermiso` int NOT NULL,
  `compraVenta` varchar(255) NOT NULL,
  `checkCompraVenta` int NOT NULL,
  `ultimoTramite` varchar(255) NOT NULL,
  `checkUltimoTramite` int NOT NULL,
  `facturaOrigen` varchar(255) NOT NULL,
  `checkFacturaOrigen` int NOT NULL,
  `vehiculo_id` int NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Volcado de datos para la tabla `tb_documentacion_vehiculos`
--

INSERT INTO `tb_documentacion_vehiculos` (`idDocumentoVeh`, `factura`, `checkFactura`, `poliza`, `checkPoliza`, `tenencia`, `checkTenencia`, `verificacion`, `checkVerificacion`, `pedimento`, `checkPedimento`, `tarjeta`, `checkTarjeta`, `garantia`, `checkGarantia`, `permiso`, `checkPermiso`, `compraVenta`, `checkCompraVenta`, `ultimoTramite`, `checkUltimoTramite`, `facturaOrigen`, `checkFacturaOrigen`, `vehiculo_id`) VALUES
(1, 'NULL', 0, 'NULL', 0, 'NULL', 0, 'NULL', 0, 'NULL', 0, 'NULL', 0, 'NULL', 0, 'NULL', 0, 'NULL', 0, 'NULL', 0, 'NULL', 0, 1),
(2, 'vistas/img/vehiculos/0002/FACTURA-COMPRA-0002-240527141251.pdf', 1, 'NULL', 0, '', 0, '', 0, 'vistas/img/vehiculos/0002/PEDIMENTO-0002-240527141333.pdf', 1, '', 0, '', 0, '', 0, '', 0, '', 0, '', 0, 2),
(3, 'NULL', 0, '', 0, '', 0, '', 0, '', 0, '', 0, '', 0, '', 0, '', 0, '', 0, '', 0, 3),
(4, 'NULL', 0, '', 0, 'vistas/img/vehiculos/0004/TENENCIA-0004-240614090526.pdf', 1, '', 0, 'vistas/img/vehiculos/0004/PEDIMENTO-0004-240613172042.pdf', 1, 'vistas/img/vehiculos/0004/TARJETA-DE-CIRCULACION-0004-240614090510.pdf', 1, '', 0, '', 0, '', 0, '', 0, 'vistas/img/vehiculos/0004/FACTURA-ORIGEN-0004-240613172058.pdf', 1, 4),
(5, 'NULL', 0, '', 0, '', 0, '', 0, '', 0, '', 0, '', 0, '', 0, '', 0, '', 0, '', 0, 5),
(6, 'NULL', 0, '', 0, '', 0, '', 0, '', 0, '', 0, '', 0, '', 0, '', 0, '', 0, '', 0, 6),
(7, 'NULL', 0, '', 0, '', 0, '', 0, '', 0, '', 0, '', 0, '', 0, '', 0, '', 0, '', 0, 7),
(8, 'NULL', 0, '', 0, '', 0, '', 0, 'vistas/img/vehiculos/0008/PEDIMENTO-0008-240527141821.pdf', 1, '', 0, '', 0, '', 0, '', 0, '', 0, '', 0, 8),
(9, 'vistas/img/vehiculos/0009/FACTURA-COMPRA-0009-240527141928.pdf', 1, '', 0, '', 0, '', 0, 'vistas/img/vehiculos/0009/PEDIMENTO-0009-240527142010.pdf', 1, '', 0, '', 0, '', 0, '', 0, '', 0, '', 0, 9),
(10, 'NULL', 0, '', 0, '', 0, '', 0, 'vistas/img/vehiculos/0010/PEDIMENTO-0010-240527142302.pdf', 1, '', 0, '', 0, '', 0, '', 0, '', 0, 'vistas/img/vehiculos/0010/FACTURA-ORIGEN-0010-240527143206.pdf', 1, 10),
(11, 'vistas/img/vehiculos/0011/FACTURA-COMPRA-0011-240614110358.pdf', 1, '', 0, '', 0, '', 0, '', 0, '', 0, '', 0, '', 0, '', 0, '', 0, '', 0, 11),
(12, 'vistas/img/vehiculos/0012/FACTURA-COMPRA-0012-240527143334.pdf', 1, '', 0, '', 0, '', 0, 'vistas/img/vehiculos/0012/PEDIMENTO-0012-240527143413.pdf', 1, '', 0, '', 0, '', 0, '', 0, '', 0, '', 0, 12),
(13, 'vistas/img/vehiculos/0013/FACTURA-COMPRA-0013-240527143609.pdf', 1, '', 0, '', 0, '', 0, '', 0, '', 0, '', 0, '', 0, 'vistas/img/vehiculos/0013/COMPRA-VENTA-0013-240614111525.pdf', 1, '', 0, '', 0, 13),
(14, 'NULL', 0, '', 0, '', 0, '', 0, 'vistas/img/vehiculos/0014/PEDIMENTO-0014-240523171336.pdf', 1, 'vistas/img/vehiculos/0014/TARJETA-DE-CIRCULACION-0014-240523171210.pdf', 1, '', 0, '', 0, '', 0, '', 0, '', 0, 14),
(15, 'NULL', 0, '', 0, '', 0, '', 0, '', 0, '', 0, '', 0, '', 0, '', 0, '', 0, '', 0, 15),
(16, 'NULL', 0, '', 0, '', 0, 'vistas/img/vehiculos/0016/VERIFICACION-0016-240614113709.pdf', 1, 'vistas/img/vehiculos/0016/PEDIMENTO-0016-240614113819.pdf', 1, 'vistas/img/vehiculos/0016/TARJETA-DE-CIRCULACION-0016-240614113846.pdf', 1, '', 0, '', 0, '', 0, '', 0, '', 0, 16),
(17, 'NULL', 0, '', 0, '', 0, '', 0, 'vistas/img/vehiculos/0017/PEDIMENTO-0017-240614142442.pdf', 1, '', 0, '', 0, '', 0, '', 0, '', 0, 'vistas/img/vehiculos/0017/FACTURA-ORIGEN-0017-240614142452.pdf', 1, 17),
(18, 'vistas/img/vehiculos/0018/FACTURA-COMPRA-0018-240527143911.pdf', 1, '', 0, '', 0, '', 0, 'vistas/img/vehiculos/0018/PEDIMENTO-0018-240527143923.pdf', 1, '', 0, '', 0, '', 0, '', 0, '', 0, '', 0, 18),
(19, 'vistas/img/vehiculos/0019/FACTURA-COMPRA-0019-240527144200.pdf', 1, '', 0, '', 0, '', 0, 'vistas/img/vehiculos/0019/PEDIMENTO-0019-240527144133.pdf', 1, '', 0, '', 0, '', 0, '', 0, '', 0, '', 0, 19),
(20, 'vistas/img/vehiculos/0020/FACTURA-COMPRA-0020-240527144306.pdf', 1, '', 0, '', 0, '', 0, 'vistas/img/vehiculos/0020/PEDIMENTO-0020-240527144317.pdf', 1, '', 0, '', 0, '', 0, '', 0, '', 0, '', 0, 20),
(21, 'vistas/img/vehiculos/0021/FACTURA-COMPRA-0021-241111132001.pdf', 1, '', 0, '', 0, '', 0, '', 0, '', 0, '', 0, '', 0, '', 0, '', 0, 'vistas/img/vehiculos/0021/FACTURA-ORIGEN-0021-240614145708.pdf', 1, 21),
(22, 'vistas/img/vehiculos/0022/FACTURA-COMPRA-0022-240614174907.pdf', 1, '', 0, '', 0, '', 0, 'vistas/img/vehiculos/0022/PEDIMENTO-0022-240527144557.pdf', 1, '', 0, '', 0, '', 0, '', 0, '', 0, '', 0, 22),
(23, 'vistas/img/vehiculos/0023/FACTURA-COMPRA-0023-240527144651.pdf', 1, 'vistas/img/vehiculos/0023/POLIZA-SEGURO-0023-240524111758.pdf', 1, '', 0, '', 0, '', 0, 'vistas/img/vehiculos/0023/TARJETA-DE-CIRCULACION-0023-240617114616.pdf', 1, '', 0, '', 0, '', 0, '', 0, 'vistas/img/vehiculos/0023/FACTURA-ORIGEN-0023-240617114244.pdf', 1, 23),
(24, 'vistas/img/vehiculos/0024/FACTURA-COMPRA-0024-240527144801.pdf', 1, '', 0, '', 0, '', 0, 'vistas/img/vehiculos/0024/PEDIMENTO-0024-241111134220.pdf', 1, '', 0, '', 0, '', 0, '', 0, '', 0, '', 0, 24),
(25, 'vistas/img/vehiculos/0025/FACTURA-COMPRA-0025-240617120505.pdf', 1, '', 0, '', 0, '', 0, 'vistas/img/vehiculos/0025/PEDIMENTO-0025-240527145019.pdf', 1, '', 0, '', 0, '', 0, '', 0, '', 0, '', 0, 25),
(26, 'NULL', 0, '', 0, '', 0, '', 0, 'vistas/img/vehiculos/0026/PEDIMENTO-0026-240527145255.pdf', 1, '', 0, '', 0, '', 0, '', 0, '', 0, 'vistas/img/vehiculos/0026/FACTURA-ORIGEN-0026-240617122027.pdf', 1, 26),
(27, 'vistas/img/vehiculos/0027/FACTURA-COMPRA-0027-241111140600.pdf', 1, '', 0, '', 0, '', 0, 'vistas/img/vehiculos/0027/PEDIMENTO-0027-240527145533.pdf', 1, '', 0, '', 0, '', 0, '', 0, '', 0, '', 0, 27),
(28, 'vistas/img/vehiculos/0028/FACTURA-COMPRA-0028-240527145739.pdf', 1, '', 0, '', 0, '', 0, 'vistas/img/vehiculos/0028/PEDIMENTO-0028-240617124146.pdf', 1, '', 0, '', 0, '', 0, '', 0, '', 0, '', 0, 28),
(29, 'vistas/img/vehiculos/0029/FACTURA-COMPRA-0029-240527145916.pdf', 1, '', 0, '', 0, '', 0, 'vistas/img/vehiculos/0029/PEDIMENTO-0029-240527145932.pdf', 1, '', 0, '', 0, '', 0, '', 0, '', 0, '', 0, 29),
(30, 'vistas/img/vehiculos/0030/FACTURA-COMPRA-0030-241111143008.pdf', 1, '', 0, '', 0, '', 0, 'vistas/img/vehiculos/0030/PEDIMENTO-0030-240527150018.pdf', 1, '', 0, '', 0, '', 0, '', 0, '', 0, '', 0, 30),
(31, 'vistas/img/vehiculos/0031/FACTURA-COMPRA-0031-240527150857.pdf', 1, '', 0, '', 0, '', 0, 'vistas/img/vehiculos/0031/PEDIMENTO-0031-240527150906.pdf', 1, '', 0, '', 0, '', 0, '', 0, '', 0, 'vistas/img/vehiculos/0031/FACTURA-ORIGEN-0031-240527150940.pdf', 1, 31),
(32, 'vistas/img/vehiculos/0032/FACTURA-COMPRA-0032-240527163706.pdf', 1, '', 0, '', 0, '', 0, 'vistas/img/vehiculos/0032/PEDIMENTO-0032-240527163821.pdf', 1, 'vistas/img/vehiculos/0032/TARJETA-DE-CIRCULACION-0032-240617125121.pdf', 1, '', 0, '', 0, '', 0, '', 0, 'vistas/img/vehiculos/0032/FACTURA-ORIGEN-0032-240527163841.pdf', 1, 32),
(33, 'NULL', 0, 'vistas/img/vehiculos/0033/POLIZA-SEGURO-0033-240524112003.pdf', 1, 'vistas/img/vehiculos/0033/TENENCIA-0033-240617141607.pdf', 1, '/cxpagar/vistas/img/vehiculos/0033/VERIFICACION-0033-241002124625.pdf', 1, '', 0, 'vistas/img/vehiculos/0033/TARJETA-DE-CIRCULACION-0033-240617130915.pdf', 1, '', 0, '', 0, '', 0, '', 0, 'vistas/img/vehiculos/0033/FACTURA-ORIGEN-0033-240527164352.pdf', 1, 33),
(34, 'NULL', 0, 'vistas/img/vehiculos/0034/POLIZA-SEGURO-0034-240524112050.pdf', 1, 'vistas/img/vehiculos/0034/TENENCIA-0034-240617140449.pdf', 1, '/cxpagar/vistas/img/vehiculos/0034/VERIFICACION-0034-240909133737.pdf', 1, '', 0, 'vistas/img/vehiculos/0034/TARJETA-DE-CIRCULACION-0034-240617162211.pdf', 1, '', 0, '', 0, '', 0, '', 0, 'vistas/img/vehiculos/0034/FACTURA-ORIGEN-0034-240527164437.pdf', 1, 34),
(35, 'vistas/img/vehiculos/0035/FACTURA-COMPRA-0035-240527165110.pdf', 1, '', 0, '', 0, '', 0, 'vistas/img/vehiculos/0035/PEDIMENTO-0035-240527165131.pdf', 1, '', 0, '', 0, '', 0, '', 0, '', 0, '', 0, 35),
(36, 'vistas/img/vehiculos/0036/FACTURA-COMPRA-0036-240527165307.pdf', 1, '', 0, '', 0, '', 0, 'vistas/img/vehiculos/0036/PEDIMENTO-0036-240527165322.pdf', 1, '', 0, '', 0, '', 0, '', 0, '', 0, '', 0, 36),
(37, 'vistas/img/vehiculos/0037/FACTURA-COMPRA-0037-240527165412.pdf', 1, '', 0, '', 0, '', 0, 'vistas/img/vehiculos/0037/PEDIMENTO-0037-240527165450.pdf', 1, '', 0, '', 0, '', 0, '', 0, '', 0, '', 0, 37),
(38, 'vistas/img/vehiculos/0038/FACTURA-COMPRA-0038-240527165550.pdf', 1, '', 0, '', 0, '', 0, 'vistas/img/vehiculos/0038/PEDIMENTO-0038-240527165601.pdf', 1, '', 0, '', 0, '', 0, '', 0, '', 0, '', 0, 38),
(39, 'vistas/img/vehiculos/0039/FACTURA-COMPRA-0039-240527165638.pdf', 1, '', 0, '', 0, '', 0, 'vistas/img/vehiculos/0039/PEDIMENTO-0039-240527165651.pdf', 1, '', 0, '', 0, '', 0, '', 0, '', 0, '', 0, 39),
(40, 'vistas/img/vehiculos/0040/FACTURA-COMPRA-0040-240527165741.pdf', 1, '', 0, '', 0, '', 0, 'vistas/img/vehiculos/0040/PEDIMENTO-0040-240527165838.pdf', 1, '', 0, '', 0, '', 0, '', 0, '', 0, '', 0, 40),
(41, 'vistas/img/vehiculos/0041/FACTURA-COMPRA-0041-240527180041.pdf', 1, '', 0, '', 0, '', 0, 'vistas/img/vehiculos/0041/PEDIMENTO-0041-240527180100.pdf', 1, '', 0, '', 0, '', 0, '', 0, '', 0, '', 0, 41),
(42, 'vistas/img/vehiculos/0042/FACTURA-COMPRA-0042-240527180334.pdf', 1, '', 0, '', 0, '', 0, 'vistas/img/vehiculos/0042/PEDIMENTO-0042-240527180406.pdf', 1, '', 0, '', 0, '', 0, '', 0, '', 0, '', 0, 42),
(43, 'vistas/img/vehiculos/0043/FACTURA-COMPRA-0043-240527180500.pdf', 1, '', 0, '', 0, '', 0, 'vistas/img/vehiculos/0043/PEDIMENTO-0043-240527180505.pdf', 1, '', 0, '', 0, '', 0, '', 0, '', 0, '', 0, 43),
(44, 'vistas/img/vehiculos/0044/FACTURA-COMPRA-0044-240527180700.pdf', 1, '', 0, '', 0, '', 0, 'vistas/img/vehiculos/0044/PEDIMENTO-0044-240527180814.pdf', 1, '', 0, '', 0, '', 0, '', 0, '', 0, '', 0, 44),
(45, 'NULL', 0, 'vistas/img/vehiculos/0045/POLIZA-SEGURO-0045-240524112217.pdf', 1, 'vistas/img/vehiculos/0045/TENENCIA-0045-240617135328.pdf', 1, '', 0, '', 0, 'vistas/img/vehiculos/0045/TARJETA-DE-CIRCULACION-0045-240617135316.pdf', 1, '', 0, '', 0, '', 0, '', 0, 'vistas/img/vehiculos/0045/FACTURA-ORIGEN-0045-240528094206.pdf', 1, 45),
(46, 'NULL', 0, 'vistas/img/vehiculos/0046/POLIZA-SEGURO-0046-240524112527.pdf', 1, 'vistas/img/vehiculos/0046/TENENCIA-0046-240617145229.pdf', 1, '/cxpagar/vistas/img/vehiculos/0046/VERIFICACION-0046-240909133528.pdf', 1, '', 0, 'vistas/img/vehiculos/0046/TARJETA-DE-CIRCULACION-0046-240617145249.pdf', 1, '', 0, '', 0, '', 0, '', 0, 'vistas/img/vehiculos/0046/FACTURA-ORIGEN-0046-240528094707.pdf', 1, 46),
(47, 'NULL', 0, 'vistas/img/vehiculos/0047/POLIZA-SEGURO-0047-240524112550.pdf', 1, 'vistas/img/vehiculos/0047/TENENCIA-0047-240617165120.pdf', 1, '/cxpagar/vistas/img/vehiculos/0047/VERIFICACION-0047-241107164928.pdf', 1, '', 0, 'vistas/img/vehiculos/0047/TARJETA-DE-CIRCULACION-0047-240617165135.pdf', 1, '', 0, '', 0, '', 0, '', 0, 'vistas/img/vehiculos/0047/FACTURA-ORIGEN-0047-240617165058.pdf', 1, 47),
(48, 'vistas/img/vehiculos/0048/FACTURA-COMPRA-0048-240617172220.pdf', 1, '', 0, 'vistas/img/vehiculos/0048/TENENCIA-0048-240617172324.pdf', 1, '', 0, '', 0, 'vistas/img/vehiculos/0048/TARJETA-DE-CIRCULACION-0048-240617172334.pdf', 1, '', 0, '', 0, '', 0, 'vistas/img/vehiculos/0048/ULTIMO-TRAMITE-0048-241029103220.pdf', 1, 'vistas/img/vehiculos/0048/FACTURA-ORIGEN-0048-240617172250.pdf', 1, 48),
(49, 'vistas/img/vehiculos/0049/FACTURA-COMPRA-0049-240528122018.pdf', 1, '', 0, '', 0, '', 0, '', 0, '', 0, '', 0, '', 0, '', 0, '', 0, 'vistas/img/vehiculos/0049/FACTURA-ORIGEN-0049-240528122049.pdf', 1, 49),
(50, 'NULL', 0, 'vistas/img/vehiculos/0050/POLIZA-SEGURO-0050-240524112808.pdf', 1, 'vistas/img/vehiculos/0050/TENENCIA-0050-240617174856.pdf', 1, '/cxpagar/vistas/img/vehiculos/0050/VERIFICACION-0050-241113093005.pdf', 1, '', 0, '', 0, '', 0, '', 0, '', 0, '', 0, 'vistas/img/vehiculos/0050/FACTURA-ORIGEN-0050-240528122150.pdf', 1, 50),
(51, 'NULL', 0, 'vistas/img/vehiculos/0051/POLIZA-SEGURO-0051-240524113835.pdf', 1, '', 0, 'vistas/img/vehiculos/0051/VERIFICACION-0051-240618113120.pdf', 1, '', 0, '', 0, '', 0, '', 0, '', 0, '', 0, 'vistas/img/vehiculos/0051/FACTURA-ORIGEN-0051-240618112951.pdf', 1, 51),
(52, 'vistas/img/vehiculos/0052/FACTURA-COMPRA-0052-240618115255.pdf', 1, '', 0, '', 0, '', 0, '', 0, '', 0, '', 0, '', 0, '', 0, '', 0, '', 0, 52),
(53, 'vistas/img/vehiculos/0053/FACTURA-COMPRA-0053-240528123017.pdf', 1, '', 0, '', 0, '', 0, '', 0, '', 0, '', 0, '', 0, '', 0, '', 0, 'vistas/img/vehiculos/0053/FACTURA-ORIGEN-0053-240618120503.pdf', 1, 53),
(54, 'vistas/img/vehiculos/0054/FACTURA-COMPRA-0054-240528123202.pdf', 1, '', 0, '', 0, '', 0, '', 0, '', 0, '', 0, '', 0, '', 0, '', 0, '', 0, 54),
(55, 'vistas/img/vehiculos/0055/FACTURA-COMPRA-0055-240528124911.pdf', 1, 'vistas/img/vehiculos/0055/POLIZA-SEGURO-0055-240524113920.pdf', 1, 'vistas/img/vehiculos/0055/TENENCIA-0055-240618123739.pdf', 1, 'vistas/img/vehiculos/0055/VERIFICACION-0055-240618123750.pdf', 1, '', 0, 'vistas/img/vehiculos/0055/TARJETA-DE-CIRCULACION-0055-240618123936.pdf', 1, '', 0, '', 0, '', 0, '', 0, 'vistas/img/vehiculos/0055/FACTURA-ORIGEN-0055-240528124955.pdf', 1, 55),
(56, 'vistas/img/vehiculos/0056/FACTURA-COMPRA-0056-240528125354.pdf', 1, 'vistas/img/vehiculos/0056/POLIZA-SEGURO-0056-240524114008.pdf', 1, 'vistas/img/vehiculos/0056/TENENCIA-0056-240618125957.pdf', 1, 'vistas/img/vehiculos/0056/VERIFICACION-0056-240618130018.pdf', 1, 'vistas/img/vehiculos/0056/PEDIMENTO-0056-240528125439.pdf', 1, 'vistas/img/vehiculos/0056/TARJETA-DE-CIRCULACION-0056-240618130044.pdf', 1, '', 0, '', 0, '', 0, '', 0, 'vistas/img/vehiculos/0056/FACTURA-ORIGEN-0056-240528125735.pdf', 1, 56),
(57, 'vistas/img/vehiculos/0057/FACTURA-COMPRA-0057-240528130214.pdf', 1, 'vistas/img/vehiculos/0057/POLIZA-SEGURO-0057-240524114051.pdf', 1, 'vistas/img/vehiculos/0057/TENENCIA-0057-240618141135.pdf', 1, 'vistas/img/vehiculos/0057/VERIFICACION-0057-240819143550.pdf', 1, 'vistas/img/vehiculos/0057/PEDIMENTO-0057-240528130234.pdf', 1, '', 0, '', 0, '', 0, '', 0, '', 0, 'vistas/img/vehiculos/0057/FACTURA-ORIGEN-0057-240528130244.pdf', 1, 57),
(58, 'vistas/img/vehiculos/0058/FACTURA-COMPRA-0058-240528130856.pdf', 1, 'vistas/img/vehiculos/0058/POLIZA-SEGURO-0058-240524114131.pdf', 1, 'vistas/img/vehiculos/0058/TENENCIA-0058-240618142719.pdf', 1, '/cxpagar/vistas/img/vehiculos/0058/VERIFICACION-0058-240913173302.pdf', 1, 'vistas/img/vehiculos/0058/PEDIMENTO-0058-240528130930.pdf', 1, 'vistas/img/vehiculos/0058/TARJETA-DE-CIRCULACION-0058-240618142823.pdf', 1, '', 0, '', 0, '', 0, '', 0, 'vistas/img/vehiculos/0058/FACTURA-ORIGEN-0058-240528130940.pdf', 1, 58),
(59, 'vistas/img/vehiculos/0059/FACTURA-COMPRA-0059-240603125404.pdf', 1, '', 0, 'vistas/img/vehiculos/0059/TENENCIA-0059-240618144134.pdf', 1, '', 0, '', 0, 'vistas/img/vehiculos/0059/TARJETA-DE-CIRCULACION-0059-240618144145.pdf', 1, '', 0, '', 0, '', 0, '', 0, 'vistas/img/vehiculos/0059/FACTURA-ORIGEN-0059-240611102517.pdf', 1, 59),
(60, 'NULL', 0, 'vistas/img/vehiculos/0060/POLIZA-SEGURO-0060-240524114247.pdf', 1, 'vistas/img/vehiculos/0060/TENENCIA-0060-240618150041.pdf', 1, 'vistas/img/vehiculos/0060/VERIFICACION-0060-240618150054.pdf', 1, '', 0, 'vistas/img/vehiculos/0060/TARJETA-DE-CIRCULACION-0060-240618150103.pdf', 1, '', 0, '', 0, '', 0, '', 0, 'vistas/img/vehiculos/0060/FACTURA-ORIGEN-0060-240618150014.pdf', 1, 60),
(61, 'NULL', 0, '', 0, '', 0, '/cxpagar/vistas/img/vehiculos/0061/VERIFICACION-0061-241030170416.pdf', 1, '', 0, 'vistas/img/vehiculos/0061/TARJETA-DE-CIRCULACION-0061-240618173245.pdf', 1, '', 0, '', 0, '', 0, '', 0, 'vistas/img/vehiculos/0061/FACTURA-ORIGEN-0061-240618172637.pdf', 1, 61),
(62, 'NULL', 0, 'vistas/img/vehiculos/0062/POLIZA-SEGURO-0062-240524114410.pdf', 1, '', 0, '/cxpagar/vistas/img/vehiculos/0062/VERIFICACION-0062-240909133440.pdf', 1, '', 0, '', 0, '', 0, '', 0, '', 0, '', 0, '', 0, 62),
(63, 'vistas/img/vehiculos/0063/FACTURA-COMPRA-0063-240618175121.pdf', 1, 'vistas/img/vehiculos/0063/POLIZA-SEGURO-0063-240524114513.pdf', 1, 'vistas/img/vehiculos/0063/TENENCIA-0063-240618175146.pdf', 1, '/cxpagar/vistas/img/vehiculos/0063/VERIFICACION-0063-240909133903.pdf', 1, '', 0, 'vistas/img/vehiculos/0063/TARJETA-DE-CIRCULACION-0063-240618175407.pdf', 1, '', 0, '', 0, '', 0, '', 0, 'vistas/img/vehiculos/0063/FACTURA-ORIGEN-0063-240618175215.pdf', 1, 63),
(64, 'vistas/img/vehiculos/0064/FACTURA-COMPRA-0064-240619100723.pdf', 1, 'vistas/img/vehiculos/0064/POLIZA-SEGURO-0064-240524114643.pdf', 1, 'vistas/img/vehiculos/0064/TENENCIA-0064-240619100744.pdf', 1, '/cxpagar/vistas/img/vehiculos/0064/VERIFICACION-0064-241114180213.pdf', 1, '', 0, '', 0, '', 0, '', 0, '', 0, '', 0, 'vistas/img/vehiculos/0064/FACTURA-ORIGEN-0064-240619100821.pdf', 1, 64),
(65, 'vistas/img/vehiculos/0065/FACTURA-COMPRA-0065-240619102924.pdf', 1, '', 0, 'vistas/img/vehiculos/0065/TENENCIA-0065-240619103014.pdf', 1, '', 0, '', 0, 'vistas/img/vehiculos/0065/TARJETA-DE-CIRCULACION-0065-240619103031.pdf', 1, '', 0, '', 0, '', 0, '', 0, '', 0, 65),
(66, 'NULL', 0, 'vistas/img/vehiculos/0066/POLIZA-SEGURO-0066-240524114756.pdf', 1, 'vistas/img/vehiculos/0066/TENENCIA-0066-240619104240.pdf', 1, '/cxpagar/vistas/img/vehiculos/0066/VERIFICACION-0066-241016170250.pdf', 1, '', 0, 'NULL', 0, '', 0, '', 0, '', 0, '', 0, 'vistas/img/vehiculos/0066/FACTURA-ORIGEN-0066-240619104227.pdf', 1, 66),
(67, 'NULL', 0, 'vistas/img/vehiculos/0067/POLIZA-SEGURO-0067-240524114851.pdf', 1, 'vistas/img/vehiculos/0067/TENENCIA-0067-240619110331.pdf', 1, 'vistas/img/vehiculos/0067/VERIFICACION-0067-240619110345.pdf', 1, '', 0, 'vistas/img/vehiculos/0067/TARJETA-DE-CIRCULACION-0067-240619110354.pdf', 1, '', 0, '', 0, '', 0, '', 0, 'vistas/img/vehiculos/0067/FACTURA-ORIGEN-0067-240619110242.pdf', 1, 67),
(68, 'NULL', 0, '', 0, '', 0, '', 0, '', 0, '', 0, '', 0, '', 0, '', 0, '', 0, 'vistas/img/vehiculos/0068/FACTURA-ORIGEN-0068-240619112624.pdf', 1, 68),
(69, 'NULL', 0, 'vistas/img/vehiculos/0069/POLIZA-SEGURO-0069-240524114955.pdf', 1, 'vistas/img/vehiculos/0069/TENENCIA-0069-240619114305.pdf', 1, '', 0, '', 0, 'vistas/img/vehiculos/0069/TARJETA-DE-CIRCULACION-0069-240619114255.pdf', 1, '', 0, '', 0, '', 0, '', 0, 'vistas/img/vehiculos/0069/FACTURA-ORIGEN-0069-240619114211.pdf', 1, 69),
(70, 'NULL', 0, 'vistas/img/vehiculos/0070/POLIZA-SEGURO-0070-240524115044.pdf', 1, 'vistas/img/vehiculos/0070/TENENCIA-0070-240619120211.pdf', 1, '', 0, '', 0, 'vistas/img/vehiculos/0070/TARJETA-DE-CIRCULACION-0070-240905175139.pdf', 1, '', 0, '', 0, '', 0, '', 0, 'vistas/img/vehiculos/0070/FACTURA-ORIGEN-0070-240905175046.pdf', 1, 70),
(71, 'vistas/img/vehiculos/0071/FACTURA-COMPRA-0071-240603125627.pdf', 1, 'vistas/img/vehiculos/0071/POLIZA-SEGURO-0071-240524115139.pdf', 1, 'vistas/img/vehiculos/0071/TENENCIA-0071-240619123235.pdf', 1, '', 0, '', 0, '', 0, '', 0, '', 0, '', 0, '', 0, 'vistas/img/vehiculos/0071/FACTURA-ORIGEN-0071-240619123247.pdf', 1, 71),
(72, 'NULL', 0, 'vistas/img/vehiculos/0072/POLIZA-SEGURO-0072-240524115210.pdf', 1, 'vistas/img/vehiculos/0072/TENENCIA-0072-240619125045.pdf', 1, '/cxpagar/vistas/img/vehiculos/0072/VERIFICACION-0072-241107165955.pdf', 1, '', 0, 'vistas/img/vehiculos/0072/TARJETA-DE-CIRCULACION-0072-240619125112.pdf', 1, '', 0, '', 0, '', 0, '', 0, 'vistas/img/vehiculos/0072/FACTURA-ORIGEN-0072-240619125026.pdf', 1, 72),
(73, 'NULL', 0, 'vistas/img/vehiculos/0073/POLIZA-SEGURO-0073-240524115310.pdf', 1, 'vistas/img/vehiculos/0073/TENENCIA-0073-240619131015.pdf', 1, 'vistas/img/vehiculos/0073/VERIFICACION-0073-240619131027.pdf', 1, '', 0, 'vistas/img/vehiculos/0073/TARJETA-DE-CIRCULACION-0073-240619131039.pdf', 1, '', 0, '', 0, '', 0, '', 0, 'vistas/img/vehiculos/0073/FACTURA-ORIGEN-0073-240603130943.pdf', 1, 73),
(74, 'vistas/img/vehiculos/0074/FACTURA-COMPRA-0074-240603131216.pdf', 1, 'vistas/img/vehiculos/0074/POLIZA-SEGURO-0074-240524115341.pdf', 1, 'vistas/img/vehiculos/0074/TENENCIA-0074-240619135019.pdf', 1, '/cxpagar/vistas/img/vehiculos/0074/VERIFICACION-0074-240930163214.pdf', 1, '', 0, 'vistas/img/vehiculos/0074/TARJETA-DE-CIRCULACION-0074-241022125559.pdf', 1, '', 0, '', 0, '', 0, 'vistas/img/vehiculos/0074/ULTIMO-TRAMITE-0074-241022124519.pdf', 1, 'vistas/img/vehiculos/0074/FACTURA-ORIGEN-0074-240603132701.pdf', 1, 74),
(75, 'vistas/img/vehiculos/0075/FACTURA-COMPRA-0075-240603131603.pdf', 1, '', 0, 'vistas/img/vehiculos/0075/TENENCIA-0075-240619140912.pdf', 1, '', 0, '', 0, 'vistas/img/vehiculos/0075/TARJETA-DE-CIRCULACION-0075-240603133717.pdf', 1, '', 0, '', 0, '', 0, '', 0, 'vistas/img/vehiculos/0075/FACTURA-ORIGEN-0075-241021145853.pdf', 1, 75),
(76, 'vistas/img/vehiculos/0076/FACTURA-COMPRA-0076-240603131912.pdf', 1, '', 0, 'vistas/img/vehiculos/0076/TENENCIA-0076-240619141930.pdf', 1, '', 0, '', 0, 'vistas/img/vehiculos/0076/TARJETA-DE-CIRCULACION-0076-240619141952.pdf', 1, '', 0, '', 0, '', 0, '', 0, 'vistas/img/vehiculos/0076/FACTURA-ORIGEN-0076-240603140300.pdf', 1, 76),
(77, 'vistas/img/vehiculos/0077/FACTURA-COMPRA-0077-240603141145.pdf', 1, 'vistas/img/vehiculos/0077/POLIZA-SEGURO-0077-240524120021.pdf', 1, '', 0, '', 0, '', 0, '', 0, '', 0, '', 0, '', 0, '', 0, 'vistas/img/vehiculos/0077/FACTURA-ORIGEN-0077-240603141055.pdf', 1, 77),
(78, 'vistas/img/vehiculos/0078/FACTURA-COMPRA-0078-240603141519.pdf', 1, '', 0, '', 0, '', 0, 'vistas/img/vehiculos/0078/PEDIMENTO-0078-240619145044.pdf', 1, '', 0, '', 0, '', 0, '', 0, '', 0, 'vistas/img/vehiculos/0078/FACTURA-ORIGEN-0078-240619144956.pdf', 1, 78),
(79, 'vistas/img/vehiculos/0079/FACTURA-COMPRA-0079-240603141712.pdf', 1, '', 0, '', 0, '', 0, 'vistas/img/vehiculos/0079/PEDIMENTO-0079-240619164236.pdf', 1, '', 0, '', 0, '', 0, '', 0, '', 0, '', 0, 79),
(80, 'vistas/img/vehiculos/0080/FACTURA-COMPRA-0080-240603141804.pdf', 1, '', 0, '', 0, '', 0, '', 0, '', 0, '', 0, '', 0, '', 0, '', 0, '', 0, 80),
(81, 'NULL', 0, '', 0, '', 0, '', 0, '', 0, '', 0, '', 0, '', 0, '', 0, '', 0, '', 0, 81),
(82, 'vistas/img/vehiculos/0082/FACTURA-COMPRA-0082-240603141910.pdf', 1, '', 0, '', 0, '', 0, '', 0, '', 0, '', 0, '', 0, '', 0, '', 0, '', 0, 82),
(83, 'vistas/img/vehiculos/0083/FACTURA-COMPRA-0083-240603142337.pdf', 1, '', 0, '', 0, '', 0, '', 0, 'vistas/img/vehiculos/0083/TARJETA-DE-CIRCULACION-0083-241023180004.pdf', 1, '', 0, '', 0, '', 0, 'vistas/img/vehiculos/0083/ULTIMO-TRAMITE-0083-241023175952.pdf', 1, 'vistas/img/vehiculos/0083/FACTURA-ORIGEN-0083-240603142330.pdf', 1, 83),
(84, 'vistas/img/vehiculos/0084/FACTURA-COMPRA-0084-240619171431.pdf', 1, '', 0, '', 0, '', 0, '', 0, '', 0, '', 0, '', 0, '', 0, '', 0, '', 0, 84),
(85, 'vistas/img/vehiculos/0085/FACTURA-COMPRA-0085-240603142515.pdf', 1, '', 0, 'vistas/img/vehiculos/0085/TENENCIA-0085-240619172522.pdf', 1, '', 0, '', 0, 'vistas/img/vehiculos/0085/TARJETA-DE-CIRCULACION-0085-241029102202.pdf', 1, '', 0, '', 0, '', 0, 'vistas/img/vehiculos/0085/ULTIMO-TRAMITE-0085-241029101548.pdf', 1, 'vistas/img/vehiculos/0085/FACTURA-ORIGEN-0085-241003110628.pdf', 1, 85),
(86, 'NULL', 0, 'vistas/img/vehiculos/0086/POLIZA-SEGURO-0086-240524120302.pdf', 1, 'vistas/img/vehiculos/0086/TENENCIA-0086-240619175100.pdf', 1, 'vistas/img/vehiculos/0086/VERIFICACION-0086-240619175110.pdf', 1, '', 0, 'vistas/img/vehiculos/0086/TARJETA-DE-CIRCULACION-0086-240619175118.pdf', 1, '', 0, '', 0, '', 0, '', 0, 'vistas/img/vehiculos/0086/FACTURA-ORIGEN-0086-240619174858.pdf', 1, 86),
(87, 'NULL', 0, 'vistas/img/vehiculos/0087/POLIZA-SEGURO-0087-240524120523.pdf', 1, '', 0, '', 0, '', 0, 'vistas/img/vehiculos/0087/TARJETA-DE-CIRCULACION-0087-240620104156.pdf', 1, '', 0, '', 0, '', 0, '', 0, 'vistas/img/vehiculos/0087/FACTURA-ORIGEN-0087-240620104123.pdf', 1, 87),
(88, 'NULL', 0, 'vistas/img/vehiculos/0088/POLIZA-SEGURO-0088-240524120614.pdf', 1, 'vistas/img/vehiculos/0088/TENENCIA-0088-240620104441.pdf', 1, '', 0, '', 0, 'vistas/img/vehiculos/0088/TARJETA-DE-CIRCULACION-0088-240620104434.pdf', 1, '', 0, '', 0, '', 0, '', 0, 'vistas/img/vehiculos/0088/FACTURA-ORIGEN-0088-240620104355.pdf', 1, 88),
(89, 'NULL', 0, '', 0, '', 0, '', 0, 'vistas/img/vehiculos/0089/PEDIMENTO-0089-240620105135.pdf', 1, '', 0, '', 0, '', 0, '', 0, '', 0, 'vistas/img/vehiculos/0089/FACTURA-ORIGEN-0089-240620105237.pdf', 1, 89),
(90, 'NULL', 0, 'vistas/img/vehiculos/0090/POLIZA-SEGURO-0090-240524120723.pdf', 1, 'vistas/img/vehiculos/0090/TENENCIA-0090-240620111924.pdf', 1, 'vistas/img/vehiculos/0090/VERIFICACION-0090-240620111932.pdf', 1, '', 0, 'vistas/img/vehiculos/0090/TARJETA-DE-CIRCULACION-0090-240620111941.pdf', 1, '', 0, '', 0, '', 0, '', 0, 'vistas/img/vehiculos/0090/FACTURA-ORIGEN-0090-240603143837.pdf', 1, 90),
(91, 'vistas/img/vehiculos/0091/FACTURA-COMPRA-0091-240620113545.pdf', 1, '', 0, '', 0, '', 0, 'vistas/img/vehiculos/0091/PEDIMENTO-0091-240620113457.pdf', 1, '', 0, '', 0, '', 0, '', 0, '', 0, '', 0, 91),
(92, 'NULL', 0, 'vistas/img/vehiculos/0092/POLIZA-SEGURO-0092-240524120844.pdf', 1, 'vistas/img/vehiculos/0092/TENENCIA-0092-240620120748.pdf', 1, '/cxpagar/vistas/img/vehiculos/0092/VERIFICACION-0092-241101132505.pdf', 1, '', 0, 'vistas/img/vehiculos/0092/TARJETA-DE-CIRCULACION-0092-240620120759.pdf', 1, '', 0, '', 0, '', 0, '', 0, 'vistas/img/vehiculos/0092/FACTURA-ORIGEN-0092-240603144057.pdf', 1, 92),
(93, 'vistas/img/vehiculos/0093/FACTURA-COMPRA-0093-240603150228.pdf', 1, '', 0, 'vistas/img/vehiculos/0093/TENENCIA-0093-240620122417.pdf', 1, '', 0, '', 0, 'vistas/img/vehiculos/0093/TARJETA-DE-CIRCULACION-0093-241024092111.pdf', 1, '', 0, '', 0, '', 0, 'vistas/img/vehiculos/0093/ULTIMO-TRAMITE-0093-241023174813.pdf', 1, 'NULL', 0, 93),
(94, 'vistas/img/vehiculos/0094/FACTURA-COMPRA-0094-240603160257.pdf', 1, '', 0, 'vistas/img/vehiculos/0094/TENENCIA-0094-240620123944.pdf', 1, '', 0, '', 0, 'vistas/img/vehiculos/0094/TARJETA-DE-CIRCULACION-0094-240722140656.pdf', 1, '', 0, '', 0, '', 0, '', 0, 'vistas/img/vehiculos/0094/FACTURA-ORIGEN-0094-240603160128.pdf', 1, 94),
(95, 'vistas/img/vehiculos/0095/FACTURA-COMPRA-0095-240620130616.pdf', 1, '', 0, 'vistas/img/vehiculos/0095/TENENCIA-0095-240620130642.pdf', 1, '', 0, '', 0, 'vistas/img/vehiculos/0095/TARJETA-DE-CIRCULACION-0095-240620130634.pdf', 1, '', 0, '', 0, '', 0, '', 0, '', 0, 95),
(96, 'vistas/img/vehiculos/0096/FACTURA-COMPRA-0096-241021142432.pdf', 1, '', 0, 'vistas/img/vehiculos/0096/TENENCIA-0096-240620163120.pdf', 1, '', 0, '', 0, 'vistas/img/vehiculos/0096/TARJETA-DE-CIRCULACION-0096-241022123117.pdf', 1, '', 0, '', 0, '', 0, 'vistas/img/vehiculos/0096/ULTIMO-TRAMITE-0096-241022122717.pdf', 1, 'vistas/img/vehiculos/0096/FACTURA-ORIGEN-0096-241021145405.pdf', 1, 96),
(97, 'vistas/img/vehiculos/0097/FACTURA-COMPRA-0097-240620170811.pdf', 1, '', 0, '', 0, '', 0, '', 0, '', 0, '', 0, '', 0, '', 0, '', 0, '', 0, 97),
(98, 'vistas/img/vehiculos/0098/FACTURA-COMPRA-0098-240620171404.pdf', 1, '', 0, '', 0, '', 0, '', 0, '', 0, '', 0, '', 0, '', 0, '', 0, '', 0, 98),
(99, 'NULL', 0, 'vistas/img/vehiculos/0099/POLIZA-SEGURO-0099-240524120954.pdf', 1, 'vistas/img/vehiculos/0099/TENENCIA-0099-240624101200.pdf', 1, 'vistas/img/vehiculos/0099/VERIFICACION-0099-240624101213.pdf', 1, '', 0, 'vistas/img/vehiculos/0099/TARJETA-DE-CIRCULACION-0099-240624101224.pdf', 1, '', 0, '', 0, '', 0, '', 0, 'vistas/img/vehiculos/0099/FACTURA-ORIGEN-0099-240624101326.pdf', 1, 99),
(100, 'NULL', 0, 'vistas/img/vehiculos/0100/POLIZA-SEGURO-0100-240812113045.pdf', 1, 'vistas/img/vehiculos/0100/TENENCIA-0100-240624112306.pdf', 1, '', 0, '', 0, 'vistas/img/vehiculos/0100/TARJETA-DE-CIRCULACION-0100-240624112314.pdf', 1, '', 0, '', 0, '', 0, '', 0, 'vistas/img/vehiculos/0100/FACTURA-ORIGEN-0100-240624112247.pdf', 1, 100),
(101, 'NULL', 0, 'vistas/img/vehiculos/0101/POLIZA-SEGURO-0101-240524121114.pdf', 1, 'vistas/img/vehiculos/0101/TENENCIA-0101-240624112730.pdf', 1, 'vistas/img/vehiculos/0101/VERIFICACION-0101-240624112742.pdf', 1, '', 0, 'vistas/img/vehiculos/0101/TARJETA-DE-CIRCULACION-0101-240624112751.pdf', 1, '', 0, '', 0, '', 0, '', 0, 'vistas/img/vehiculos/0101/FACTURA-ORIGEN-0101-240624112708.pdf', 1, 101),
(102, 'NULL', 0, '', 0, '', 0, '', 0, '', 0, 'vistas/img/vehiculos/0102/TARJETA-DE-CIRCULACION-0102-240624113406.pdf', 1, '', 0, '', 0, '', 0, '', 0, 'vistas/img/vehiculos/0102/FACTURA-ORIGEN-0102-240624113329.pdf', 1, 102),
(103, 'NULL', 0, '', 0, '', 0, '', 0, 'vistas/img/vehiculos/0103/PEDIMENTO-0103-240624113628.pdf', 1, '', 0, '', 0, '', 0, '', 0, '', 0, 'vistas/img/vehiculos/0103/FACTURA-ORIGEN-0103-240624113838.pdf', 1, 103),
(104, 'NULL', 0, '', 0, '', 0, '', 0, '', 0, '', 0, '', 0, '', 0, '', 0, '', 0, '', 0, 104),
(105, 'NULL', 0, '', 0, '', 0, '', 0, '', 0, '', 0, '', 0, '', 0, '', 0, '', 0, '', 0, 105),
(106, 'NULL', 0, '', 0, '', 0, '', 0, '', 0, '', 0, '', 0, '', 0, '', 0, '', 0, '', 0, 106),
(107, 'NULL', 0, '', 0, '', 0, '', 0, '', 0, '', 0, '', 0, '', 0, '', 0, '', 0, '', 0, 107),
(108, 'vistas/img/vehiculos/0108/FACTURA-COMPRA-0108-240624120539.pdf', 1, '', 0, '', 0, '', 0, 'vistas/img/vehiculos/0108/PEDIMENTO-0108-240624120523.pdf', 1, '', 0, '', 0, '', 0, '', 0, '', 0, '', 0, 108),
(109, 'NULL', 0, '', 0, 'NULL', 0, '', 0, '', 0, 'vistas/img/vehiculos/0109/TARJETA-DE-CIRCULACION-0109-240626112408.pdf', 1, '', 0, '', 0, '', 0, '', 0, 'vistas/img/vehiculos/0109/FACTURA-ORIGEN-0109-240626112419.pdf', 1, 109),
(110, 'NULL', 0, 'vistas/img/vehiculos/0110/POLIZA-SEGURO-0110-240524121253.pdf', 1, '', 0, '', 0, '', 0, '', 0, '', 0, '', 0, '', 0, '', 0, '', 0, 110),
(111, 'vistas/img/vehiculos/0111/FACTURA-COMPRA-0111-240626112905.pdf', 1, 'vistas/img/vehiculos/0111/POLIZA-SEGURO-0111-240524122828.pdf', 1, 'vistas/img/vehiculos/0111/TENENCIA-0111-240626112944.pdf', 1, '/cxpagar/vistas/img/vehiculos/0111/VERIFICACION-0111-241113092530.pdf', 1, '', 0, 'vistas/img/vehiculos/0111/TARJETA-DE-CIRCULACION-0111-240626112917.pdf', 1, '', 0, '', 0, '', 0, '', 0, '', 0, 111),
(112, 'NULL', 0, '', 0, '', 0, '', 0, '', 0, '', 0, '', 0, '', 0, '', 0, '', 0, '', 0, 112),
(113, 'vistas/img/vehiculos/0113/FACTURA-COMPRA-0113-240626113622.pdf', 1, '', 0, '', 0, '', 0, '', 0, '', 0, '', 0, '', 0, '', 0, '', 0, 'vistas/img/vehiculos/0113/FACTURA-ORIGEN-0113-240626113543.pdf', 1, 113),
(114, 'vistas/img/vehiculos/0114/FACTURA-COMPRA-0114-240626114400.pdf', 1, '', 0, 'vistas/img/vehiculos/0114/TENENCIA-0114-240626115014.pdf', 1, '/cxpagar/vistas/img/vehiculos/0114/VERIFICACION-0114-241002125537.pdf', 1, '', 0, 'vistas/img/vehiculos/0114/TARJETA-DE-CIRCULACION-0114-240626120008.pdf', 1, '', 0, '', 0, '', 0, '', 0, 'vistas/img/vehiculos/0114/FACTURA-ORIGEN-0114-240626114410.pdf', 1, 114),
(115, 'vistas/img/vehiculos/0115/FACTURA-COMPRA-0115-240829130925.pdf', 1, '', 0, '', 0, '', 0, '', 0, '', 0, '', 0, '', 0, '', 0, '', 0, 'vistas/img/vehiculos/0115/FACTURA-ORIGEN-0115-240829130937.pdf', 1, 115),
(116, 'vistas/img/vehiculos/0116/FACTURA-COMPRA-0116-241023171008.pdf', 1, '', 0, 'vistas/img/vehiculos/0116/TENENCIA-0116-240626120541.pdf', 1, 'vistas/img/vehiculos/0116/VERIFICACION-0116-240626120608.pdf', 1, '', 0, '', 0, '', 0, '', 0, '', 0, '', 0, 'vistas/img/vehiculos/0116/FACTURA-ORIGEN-0116-240626120506.pdf', 1, 116),
(117, 'vistas/img/vehiculos/0117/FACTURA-COMPRA-0117-240626125129.pdf', 1, '', 0, '', 0, '', 0, '', 0, '', 0, '', 0, '', 0, '', 0, '', 0, '', 0, 117),
(118, 'vistas/img/vehiculos/0118/FACTURA-COMPRA-0118-240626125501.pdf', 1, '', 0, '', 0, '', 0, '', 0, '', 0, '', 0, '', 0, '', 0, '', 0, '', 0, 118),
(119, 'vistas/img/vehiculos/0119/FACTURA-COMPRA-0119-240626125825.pdf', 1, '', 0, '', 0, '', 0, '', 0, '', 0, '', 0, '', 0, '', 0, '', 0, '', 0, 119),
(120, 'vistas/img/vehiculos/0120/FACTURA-COMPRA-0120-240626133922.pdf', 1, '', 0, '', 0, '', 0, '', 0, '', 0, '', 0, '', 0, '', 0, '', 0, 'vistas/img/vehiculos/0120/FACTURA-ORIGEN-0120-241022170955.pdf', 1, 120),
(121, 'vistas/img/vehiculos/0121/FACTURA-COMPRA-0121-240626134730.pdf', 1, '', 0, '', 0, '', 0, '', 0, '', 0, '', 0, '', 0, '', 0, '', 0, '', 0, 121),
(122, 'NULL', 0, '', 0, '', 0, '', 0, '', 0, '', 0, '', 0, '', 0, '', 0, '', 0, '', 0, 122),
(123, 'vistas/img/vehiculos/0123/FACTURA-COMPRA-0123-240626135226.pdf', 1, '', 0, '', 0, '', 0, '', 0, '', 0, '', 0, '', 0, '', 0, '', 0, '', 0, 123),
(124, 'vistas/img/vehiculos/0124/FACTURA-COMPRA-0124-240626135403.pdf', 1, '', 0, '', 0, '', 0, '', 0, '', 0, '', 0, '', 0, '', 0, '', 0, '', 0, 124),
(125, 'NULL', 0, '', 0, '', 0, '', 0, '', 0, '', 0, '', 0, '', 0, '', 0, '', 0, '', 0, 125),
(126, 'vistas/img/vehiculos/0126/FACTURA-COMPRA-0126-240611113814.pdf', 1, '', 0, '', 0, '', 0, '', 0, '', 0, '', 0, '', 0, '', 0, '', 0, '', 0, 126),
(127, 'NULL', 0, '', 0, '', 0, '', 0, '', 0, '', 0, '', 0, '', 0, '', 0, '', 0, '', 0, 127),
(128, 'NULL', 0, '', 0, '', 0, '', 0, '', 0, '', 0, '', 0, '', 0, '', 0, '', 0, '', 0, 128),
(129, 'NULL', 0, '', 0, '', 0, '', 0, '', 0, '', 0, '', 0, '', 0, '', 0, '', 0, '', 0, 129),
(130, 'vistas/img/vehiculos/0130/FACTURA-COMPRA-0130-240729111835.pdf', 1, 'vistas/img/vehiculos/0130/POLIZA-SEGURO-0130-240827171028.pdf', 1, 'vistas/img/vehiculos/0130/TENENCIA-0130-240626170402.pdf', 1, '', 0, '', 0, 'vistas/img/vehiculos/0130/TARJETA-DE-CIRCULACION-0130-240626170330.pdf', 1, '', 0, '', 0, '', 0, '', 0, 'NULL', 0, 130),
(131, 'vistas/img/vehiculos/0131/FACTURA-COMPRA-0131-240626170957.pdf', 1, '', 0, '', 0, '', 0, 'vistas/img/vehiculos/0131/PEDIMENTO-0131-240626171021.pdf', 1, '', 0, '', 0, '', 0, '', 0, '', 0, '', 0, 131),
(132, 'vistas/img/vehiculos/0132/FACTURA-COMPRA-0132-240626173303.pdf', 1, '', 0, 'vistas/img/vehiculos/0132/TENENCIA-0132-240626173340.pdf', 1, '', 0, '', 0, 'vistas/img/vehiculos/0132/TARJETA-DE-CIRCULACION-0132-240626173325.pdf', 1, '', 0, '', 0, '', 0, '', 0, '', 0, 132),
(133, 'vistas/img/vehiculos/0133/FACTURA-COMPRA-0133-240626173741.pdf', 1, '', 0, '', 0, '', 0, '', 0, 'vistas/img/vehiculos/0133/TARJETA-DE-CIRCULACION-0133-240626173806.pdf', 1, '', 0, '', 0, '', 0, '', 0, '', 0, 133),
(134, 'NULL', 0, '', 0, '', 0, '', 0, 'vistas/img/vehiculos/0134/PEDIMENTO-0134-240626175850.pdf', 1, '', 0, '', 0, '', 0, '', 0, '', 0, 'vistas/img/vehiculos/0134/FACTURA-ORIGEN-0134-240626175826.pdf', 1, 134),
(135, 'NULL', 0, '', 0, '', 0, '', 0, '', 0, '', 0, '', 0, '', 0, '', 0, '', 0, '', 0, 135),
(136, 'NULL', 0, 'NULL', 0, '', 0, '', 0, '', 0, '', 0, '', 0, '', 0, '', 0, '', 0, '', 0, 136),
(137, 'vistas/img/vehiculos/0137/FACTURA-COMPRA-0137-240627144432.pdf', 1, '', 0, '', 0, '', 0, 'vistas/img/vehiculos/0137/PEDIMENTO-0137-240627144450.pdf', 1, '', 0, '', 0, '', 0, '', 0, '', 0, '', 0, 137),
(138, 'vistas/img/vehiculos/0138/FACTURA-COMPRA-0138-240627170713.pdf', 1, '', 0, '', 0, '', 0, 'vistas/img/vehiculos/0138/PEDIMENTO-0138-240627170751.pdf', 1, '', 0, '', 0, '', 0, '', 0, '', 0, '', 0, 138),
(139, 'vistas/img/vehiculos/0139/FACTURA-COMPRA-0139-240627170917.pdf', 1, '', 0, '', 0, '', 0, 'vistas/img/vehiculos/0139/PEDIMENTO-0139-240627170946.pdf', 1, '', 0, '', 0, '', 0, '', 0, '', 0, '', 0, 139),
(140, 'vistas/img/vehiculos/0140/FACTURA-COMPRA-0140-240627173147.pdf', 1, '', 0, '', 0, '', 0, 'vistas/img/vehiculos/0140/PEDIMENTO-0140-240627173156.pdf', 1, '', 0, '', 0, '', 0, '', 0, '', 0, '', 0, 140),
(141, 'vistas/img/vehiculos/0141/FACTURA-COMPRA-0141-240627174241.pdf', 1, '', 0, '', 0, '', 0, 'vistas/img/vehiculos/0141/PEDIMENTO-0141-240627174325.pdf', 1, '', 0, '', 0, '', 0, '', 0, '', 0, '', 0, 141),
(142, 'NULL', 0, '', 0, '', 0, '', 0, 'vistas/img/vehiculos/0142/PEDIMENTO-0142-240628140559.pdf', 1, '', 0, '', 0, '', 0, '', 0, '', 0, '', 0, 142),
(143, 'vistas/img/vehiculos/0143/FACTURA-COMPRA-0143-240628144029.pdf', 1, '', 0, '', 0, '', 0, 'vistas/img/vehiculos/0143/PEDIMENTO-0143-240628144038.pdf', 1, '', 0, '', 0, '', 0, '', 0, '', 0, '', 0, 143),
(144, 'vistas/img/vehiculos/0144/FACTURA-COMPRA-0144-240628170253.pdf', 1, '', 0, '', 0, '', 0, 'vistas/img/vehiculos/0144/PEDIMENTO-0144-240628170306.pdf', 1, '', 0, '', 0, '', 0, '', 0, '', 0, '', 0, 144),
(145, 'vistas/img/vehiculos/0145/FACTURA-COMPRA-0145-240628170810.pdf', 1, 'vistas/img/vehiculos/0145/POLIZA-SEGURO-0145-240524102315.pdf', 1, 'vistas/img/vehiculos/0145/TENENCIA-0145-240628170824.pdf', 1, '', 0, '', 0, 'vistas/img/vehiculos/0145/TARJETA-DE-CIRCULACION-0145-241113104956.pdf', 1, '', 0, '', 0, '', 0, 'vistas/img/vehiculos/0145/ULTIMO-TRAMITE-0145-241113105007.pdf', 1, 'vistas/img/vehiculos/0145/FACTURA-ORIGEN-0145-240628170858.pdf', 1, 145),
(146, 'vistas/img/vehiculos/0146/FACTURA-COMPRA-0146-240628173535.pdf', 1, '', 0, '', 0, '', 0, '', 0, '', 0, '', 0, '', 0, '', 0, '', 0, '', 0, 146),
(147, 'vistas/img/vehiculos/0147/FACTURA-COMPRA-0147-240628173747.pdf', 1, '', 0, '', 0, '', 0, 'vistas/img/vehiculos/0147/PEDIMENTO-0147-240628173823.pdf', 1, 'vistas/img/vehiculos/0147/TARJETA-DE-CIRCULACION-0147-240628173841.pdf', 1, '', 0, '', 0, '', 0, '', 0, 'vistas/img/vehiculos/0147/FACTURA-ORIGEN-0147-240628173759.pdf', 1, 147),
(148, 'vistas/img/vehiculos/0148/FACTURA-COMPRA-0148-240701131509.pdf', 1, '', 0, '', 0, '', 0, 'vistas/img/vehiculos/0148/PEDIMENTO-0148-240701131519.pdf', 1, '', 0, '', 0, '', 0, '', 0, '', 0, '', 0, 148),
(149, 'vistas/img/vehiculos/0149/FACTURA-COMPRA-0149-240701134207.pdf', 1, '', 0, '', 0, '', 0, 'vistas/img/vehiculos/0149/PEDIMENTO-0149-240701134232.pdf', 1, '', 0, '', 0, '', 0, '', 0, '', 0, '', 0, 149),
(150, 'NULL', 0, '', 0, 'vistas/img/vehiculos/0150/TENENCIA-0150-240701143303.pdf', 1, '', 0, '', 0, 'vistas/img/vehiculos/0150/TARJETA-DE-CIRCULACION-0150-240701143324.pdf', 1, '', 0, '', 0, '', 0, '', 0, 'vistas/img/vehiculos/0150/FACTURA-ORIGEN-0150-240701143214.pdf', 1, 150),
(151, 'NULL', 0, '', 0, '', 0, '', 0, '', 0, '', 0, '', 0, '', 0, '', 0, '', 0, '', 0, 151),
(152, 'NULL', 0, 'vistas/img/vehiculos/0152/POLIZA-SEGURO-0152-240524102822.pdf', 1, '', 0, '', 0, '', 0, 'vistas/img/vehiculos/0152/TARJETA-DE-CIRCULACION-0152-241113104306.pdf', 1, '', 0, '', 0, '', 0, 'vistas/img/vehiculos/0152/ULTIMO-TRAMITE-0152-241113104340.pdf', 1, 'vistas/img/vehiculos/0152/FACTURA-ORIGEN-0152-240611111801.pdf', 1, 152),
(153, 'vistas/img/vehiculos/0153/FACTURA-COMPRA-0153-240702143038.pdf', 1, '', 0, '', 0, '', 0, '', 0, '', 0, '', 0, '', 0, '', 0, '', 0, '', 0, 153),
(154, 'vistas/img/vehiculos/0154/FACTURA-COMPRA-0154-240703120120.pdf', 1, '', 0, '', 0, '', 0, 'vistas/img/vehiculos/0154/PEDIMENTO-0154-240703120129.pdf', 1, '', 0, '', 0, '', 0, '', 0, '', 0, '', 0, 154),
(155, 'vistas/img/vehiculos/0155/FACTURA-COMPRA-0155-240610115405.pdf', 1, '', 0, 'vistas/img/vehiculos/0155/TENENCIA-0155-240703131507.pdf', 1, '', 0, '', 0, '', 0, '', 0, '', 0, '', 0, '', 0, 'vistas/img/vehiculos/0155/FACTURA-ORIGEN-0155-240703131353.pdf', 1, 155),
(156, 'vistas/img/vehiculos/0156/FACTURA-COMPRA-0156-240703132124.pdf', 1, 'vistas/img/vehiculos/0156/POLIZA-SEGURO-0156-240524101539.pdf', 1, 'vistas/img/vehiculos/0156/TENENCIA-0156-240703143111.pdf', 1, '/cxpagar/vistas/img/vehiculos/0156/VERIFICACION-0156-240924165629.pdf', 1, '', 0, 'vistas/img/vehiculos/0156/TARJETA-DE-CIRCULACION-0156-240703132222.pdf', 1, '', 0, '', 0, '', 0, '', 0, 'vistas/img/vehiculos/0156/FACTURA-ORIGEN-0156-240703132011.pdf', 1, 156),
(157, 'vistas/img/vehiculos/0157/FACTURA-COMPRA-0157-240703144101.pdf', 1, 'vistas/img/vehiculos/0157/POLIZA-SEGURO-0157-240524101737.pdf', 1, 'vistas/img/vehiculos/0157/TENENCIA-0157-240703144216.pdf', 1, '', 0, '', 0, 'vistas/img/vehiculos/0157/TARJETA-DE-CIRCULACION-0157-241108130012.pdf', 1, '', 0, '', 0, '', 0, 'vistas/img/vehiculos/0157/ULTIMO-TRAMITE-0157-241108130031.pdf', 1, 'vistas/img/vehiculos/0157/FACTURA-ORIGEN-0157-240703144152.pdf', 1, 157),
(158, 'vistas/img/vehiculos/0158/FACTURA-COMPRA-0158-240703171557.pdf', 1, '', 0, '', 0, '', 0, 'vistas/img/vehiculos/0158/PEDIMENTO-0158-240703171608.pdf', 1, '', 0, '', 0, '', 0, '', 0, '', 0, '', 0, 158),
(159, 'vistas/img/vehiculos/0159/FACTURA-COMPRA-0159-240703172040.pdf', 1, 'vistas/img/vehiculos/0159/POLIZA-SEGURO-0159-240524102910.pdf', 1, 'vistas/img/vehiculos/0159/TENENCIA-0159-240703172105.pdf', 1, 'vistas/img/vehiculos/0159/VERIFICACION-0159-240703172205.pdf', 1, '', 0, 'vistas/img/vehiculos/0159/TARJETA-DE-CIRCULACION-0159-240703172114.pdf', 1, '', 0, '', 0, '', 0, '', 0, 'vistas/img/vehiculos/0159/FACTURA-ORIGEN-0159-240703172048.pdf', 1, 159),
(160, 'vistas/img/vehiculos/0160/FACTURA-COMPRA-0160-240704172147.pdf', 1, '', 0, '', 0, '', 0, '', 0, '', 0, '', 0, '', 0, '', 0, '', 0, '', 0, 160),
(161, 'vistas/img/vehiculos/0161/FACTURA-COMPRA-0161-240704172658.pdf', 1, 'vistas/img/vehiculos/0161/POLIZA-SEGURO-0161-240524103032.pdf', 1, '', 0, 'vistas/img/vehiculos/0161/VERIFICACION-0161-240704172908.pdf', 1, '', 0, 'vistas/img/vehiculos/0161/TARJETA-DE-CIRCULACION-0161-240704172838.pdf', 1, '', 0, '', 0, '', 0, '', 0, 'vistas/img/vehiculos/0161/FACTURA-ORIGEN-0161-240704172708.pdf', 1, 161),
(162, 'vistas/img/vehiculos/0162/FACTURA-COMPRA-0162-240628140103.pdf', 1, '', 0, '', 0, '', 0, 'vistas/img/vehiculos/0162/PEDIMENTO-0162-240628140722.pdf', 1, '', 0, '', 0, '', 0, '', 0, '', 0, '', 0, 162),
(163, 'vistas/img/vehiculos/0163/FACTURA-COMPRA-0163-240705121912.pdf', 1, '', 0, '', 0, '', 0, 'vistas/img/vehiculos/0163/PEDIMENTO-0163-240705122217.pdf', 1, '', 0, '', 0, '', 0, '', 0, '', 0, '', 0, 163),
(164, 'vistas/img/vehiculos/0164/FACTURA-COMPRA-0164-240705122437.pdf', 1, '', 0, '', 0, '', 0, 'vistas/img/vehiculos/0164/PEDIMENTO-0164-240705122446.pdf', 1, '', 0, '', 0, '', 0, '', 0, '', 0, '', 0, 164),
(165, 'vistas/img/vehiculos/0165/FACTURA-COMPRA-0165-240705124819.pdf', 1, '', 0, '', 0, '', 0, 'vistas/img/vehiculos/0165/PEDIMENTO-0165-240705124831.pdf', 1, '', 0, '', 0, '', 0, '', 0, '', 0, '', 0, 165),
(166, 'vistas/img/vehiculos/0166/FACTURA-COMPRA-0166-240705125525.pdf', 1, '', 0, '', 0, '', 0, 'vistas/img/vehiculos/0166/PEDIMENTO-0166-240705125604.pdf', 1, '', 0, '', 0, '', 0, '', 0, '', 0, '', 0, 166),
(167, 'NULL', 0, '', 0, '', 0, '', 0, '', 0, '', 0, '', 0, '', 0, '', 0, '', 0, '', 0, 167),
(168, 'vistas/img/vehiculos/0168/FACTURA-COMPRA-0168-240705135340.pdf', 1, '', 0, '', 0, '', 0, 'vistas/img/vehiculos/0168/PEDIMENTO-0168-240705135407.pdf', 1, '', 0, '', 0, '', 0, '', 0, '', 0, '', 0, 168),
(169, 'vistas/img/vehiculos/0169/FACTURA-COMPRA-0169-240705140225.pdf', 1, '', 0, '', 0, '', 0, 'vistas/img/vehiculos/0169/PEDIMENTO-0169-240705140729.pdf', 1, '', 0, '', 0, '', 0, '', 0, '', 0, '', 0, 169),
(170, 'vistas/img/vehiculos/0170/FACTURA-COMPRA-0170-240705142723.pdf', 1, '', 0, '', 0, '', 0, 'vistas/img/vehiculos/0170/PEDIMENTO-0170-240705142613.pdf', 1, '', 0, '', 0, '', 0, '', 0, '', 0, '', 0, 170),
(171, 'vistas/img/vehiculos/0171/FACTURA-COMPRA-0171-240705163358.pdf', 1, '', 0, '', 0, '', 0, 'vistas/img/vehiculos/0171/PEDIMENTO-0171-240705163418.pdf', 1, '', 0, '', 0, '', 0, '', 0, '', 0, '', 0, 171),
(172, 'vistas/img/vehiculos/0172/FACTURA-COMPRA-0172-240528123236.pdf', 1, '', 0, '', 0, '', 0, 'vistas/img/vehiculos/0172/PEDIMENTO-0172-240705163740.pdf', 1, '', 0, '', 0, '', 0, '', 0, '', 0, '', 0, 172),
(173, 'vistas/img/vehiculos/0173/FACTURA-COMPRA-0173-240705173117.pdf', 1, '', 0, '', 0, '', 0, 'vistas/img/vehiculos/0173/PEDIMENTO-0173-240705173704.pdf', 1, '', 0, '', 0, '', 0, '', 0, '', 0, '', 0, 173),
(174, 'vistas/img/vehiculos/0174/FACTURA-COMPRA-0174-240705172258.pdf', 1, '', 0, '', 0, '', 0, 'vistas/img/vehiculos/0174/PEDIMENTO-0174-240705172306.pdf', 1, '', 0, '', 0, '', 0, '', 0, '', 0, '', 0, 174),
(175, 'vistas/img/vehiculos/0175/FACTURA-COMPRA-0175-240708141814.pdf', 1, '', 0, '', 0, '', 0, 'vistas/img/vehiculos/0175/PEDIMENTO-0175-240708141823.pdf', 1, '', 0, '', 0, '', 0, '', 0, '', 0, '', 0, 175),
(176, 'vistas/img/vehiculos/0176/FACTURA-COMPRA-0176-240708142309.pdf', 1, '', 0, '', 0, '', 0, 'vistas/img/vehiculos/0176/PEDIMENTO-0176-240708142320.pdf', 1, '', 0, '', 0, '', 0, '', 0, '', 0, '', 0, 176),
(177, 'vistas/img/vehiculos/0177/FACTURA-COMPRA-0177-240708174707.pdf', 1, '', 0, '', 0, '', 0, 'vistas/img/vehiculos/0177/PEDIMENTO-0177-240708174716.pdf', 1, '', 0, '', 0, '', 0, '', 0, '', 0, '', 0, 177),
(178, 'vistas/img/vehiculos/0178/FACTURA-COMPRA-0178-240528123536.pdf', 1, '', 0, '', 0, '', 0, 'vistas/img/vehiculos/0178/PEDIMENTO-0178-240709105237.pdf', 1, '', 0, '', 0, '', 0, '', 0, '', 0, '', 0, 178),
(179, 'vistas/img/vehiculos/0179/FACTURA-COMPRA-0179-240709110329.pdf', 1, '', 0, '', 0, '', 0, 'vistas/img/vehiculos/0179/PEDIMENTO-0179-240709110338.pdf', 1, '', 0, '', 0, '', 0, '', 0, '', 0, '', 0, 179),
(180, 'vistas/img/vehiculos/0180/FACTURA-COMPRA-0180-240709114217.pdf', 1, '', 0, '', 0, '', 0, 'vistas/img/vehiculos/0180/PEDIMENTO-0180-240709114225.pdf', 1, '', 0, '', 0, '', 0, '', 0, '', 0, '', 0, 180),
(181, 'vistas/img/vehiculos/0181/FACTURA-COMPRA-0181-240709114420.pdf', 1, '', 0, '', 0, '', 0, 'vistas/img/vehiculos/0181/PEDIMENTO-0181-240709114512.pdf', 1, '', 0, '', 0, '', 0, '', 0, '', 0, '', 0, 181),
(182, 'vistas/img/vehiculos/0182/FACTURA-COMPRA-0182-240709120923.pdf', 1, '', 0, '', 0, '', 0, '', 0, '', 0, '', 0, '', 0, '', 0, '', 0, '', 0, 182),
(183, 'vistas/img/vehiculos/0183/FACTURA-COMPRA-0183-240909120409.pdf', 1, '', 0, '', 0, '', 0, '', 0, '', 0, '', 0, '', 0, '', 0, '', 0, '', 0, 183),
(184, 'vistas/img/vehiculos/0184/FACTURA-COMPRA-0184-240909120421.pdf', 1, '', 0, '', 0, '', 0, '', 0, '', 0, '', 0, '', 0, '', 0, '', 0, '', 0, 184),
(185, 'vistas/img/vehiculos/0185/FACTURA-COMPRA-0185-240909120433.pdf', 1, '', 0, '', 0, '', 0, '', 0, '', 0, '', 0, '', 0, '', 0, '', 0, '', 0, 185),
(186, 'vistas/img/vehiculos/0186/FACTURA-COMPRA-0186-240909120443.pdf', 1, '', 0, '', 0, '', 0, '', 0, '', 0, '', 0, '', 0, '', 0, '', 0, '', 0, 186),
(187, 'vistas/img/vehiculos/0187/FACTURA-COMPRA-0187-240909120459.pdf', 1, '', 0, '', 0, '', 0, '', 0, '', 0, '', 0, '', 0, '', 0, '', 0, '', 0, 187),
(188, 'vistas/img/vehiculos/0188/FACTURA-COMPRA-0188-240909120509.pdf', 1, '', 0, '', 0, '', 0, '', 0, '', 0, '', 0, '', 0, '', 0, '', 0, '', 0, 188),
(189, 'vistas/img/vehiculos/0189/FACTURA-COMPRA-0189-240909120617.pdf', 1, '', 0, '', 0, '', 0, '', 0, '', 0, '', 0, '', 0, '', 0, '', 0, '', 0, 189),
(190, 'vistas/img/vehiculos/0190/FACTURA-COMPRA-0190-240909120627.pdf', 1, '', 0, '', 0, '', 0, '', 0, '', 0, '', 0, '', 0, '', 0, '', 0, '', 0, 190),
(191, 'vistas/img/vehiculos/0191/FACTURA-COMPRA-0191-240909120639.pdf', 1, '', 0, '', 0, '', 0, '', 0, '', 0, '', 0, '', 0, '', 0, '', 0, '', 0, 191),
(192, 'vistas/img/vehiculos/0192/FACTURA-COMPRA-0192-240909120913.pdf', 1, '', 0, '', 0, '', 0, '', 0, '', 0, '', 0, '', 0, '', 0, '', 0, '', 0, 192),
(193, 'vistas/img/vehiculos/0193/FACTURA-COMPRA-0193-240909120924.pdf', 1, '', 0, '', 0, '', 0, '', 0, '', 0, '', 0, '', 0, '', 0, '', 0, '', 0, 193),
(194, 'vistas/img/vehiculos/0194/FACTURA-COMPRA-0194-240909120933.pdf', 1, '', 0, '', 0, '', 0, '', 0, '', 0, '', 0, '', 0, '', 0, '', 0, '', 0, 194),
(195, 'vistas/img/vehiculos/0195/FACTURA-COMPRA-0195-240909120944.pdf', 1, '', 0, '', 0, '', 0, '', 0, '', 0, '', 0, '', 0, '', 0, '', 0, '', 0, 195),
(196, 'vistas/img/vehiculos/0196/FACTURA-COMPRA-0196-240909120954.pdf', 1, '', 0, '', 0, '', 0, '', 0, '', 0, '', 0, '', 0, '', 0, '', 0, '', 0, 196),
(197, 'vistas/img/vehiculos/0197/FACTURA-COMPRA-0197-240909121003.pdf', 1, '', 0, '', 0, '', 0, '', 0, '', 0, '', 0, '', 0, '', 0, '', 0, '', 0, 197),
(198, 'vistas/img/vehiculos/0198/FACTURA-COMPRA-0198-240909121018.pdf', 1, '', 0, '', 0, '', 0, '', 0, '', 0, '', 0, '', 0, '', 0, '', 0, '', 0, 198),
(199, 'vistas/img/vehiculos/0199/FACTURA-COMPRA-0199-240909121047.pdf', 1, '', 0, '', 0, '', 0, '', 0, '', 0, '', 0, '', 0, '', 0, '', 0, '', 0, 199),
(200, 'vistas/img/vehiculos/0200/FACTURA-COMPRA-0200-240909121100.pdf', 1, '', 0, '', 0, '', 0, '', 0, '', 0, '', 0, '', 0, '', 0, '', 0, '', 0, 200),
(201, 'vistas/img/vehiculos/0201/FACTURA-COMPRA-0201-240909121113.pdf', 1, '', 0, '', 0, '', 0, '', 0, '', 0, '', 0, '', 0, '', 0, '', 0, '', 0, 201),
(202, 'vistas/img/vehiculos/0202/FACTURA-COMPRA-0202-240909121130.pdf', 1, '', 0, '', 0, '', 0, '', 0, '', 0, '', 0, '', 0, '', 0, '', 0, '', 0, 202),
(203, 'vistas/img/vehiculos/0203/FACTURA-COMPRA-0203-240909121142.pdf', 1, '', 0, '', 0, '', 0, '', 0, '', 0, '', 0, '', 0, '', 0, '', 0, '', 0, 203),
(204, 'vistas/img/vehiculos/0204/FACTURA-COMPRA-0204-240909121155.pdf', 1, '', 0, '', 0, '', 0, '', 0, '', 0, '', 0, '', 0, '', 0, '', 0, '', 0, 204),
(205, 'vistas/img/vehiculos/0205/FACTURA-COMPRA-0205-240909121209.pdf', 1, '', 0, '', 0, '', 0, '', 0, '', 0, '', 0, '', 0, '', 0, '', 0, '', 0, 205),
(206, 'vistas/img/vehiculos/0206/FACTURA-COMPRA-0206-240909121220.pdf', 1, '', 0, '', 0, '', 0, '', 0, '', 0, '', 0, '', 0, '', 0, '', 0, '', 0, 206),
(207, 'vistas/img/vehiculos/0207/FACTURA-COMPRA-0207-240909121233.pdf', 1, '', 0, '', 0, '', 0, '', 0, '', 0, '', 0, '', 0, '', 0, '', 0, '', 0, 207),
(208, 'vistas/img/vehiculos/0208/FACTURA-COMPRA-0208-240909121244.pdf', 1, '', 0, '', 0, '', 0, '', 0, '', 0, '', 0, '', 0, '', 0, '', 0, '', 0, 208),
(209, 'vistas/img/vehiculos/0209/FACTURA-COMPRA-0209-240909121255.pdf', 1, '', 0, '', 0, '', 0, '', 0, '', 0, '', 0, '', 0, '', 0, '', 0, '', 0, 209),
(210, 'vistas/img/vehiculos/0210/FACTURA-COMPRA-0210-240709125648.pdf', 1, 'vistas/img/vehiculos/0210/POLIZA-SEGURO-0210-240523145840.pdf', 1, 'vistas/img/vehiculos/0210/TENENCIA-0210-240709125752.pdf', 1, '', 0, '', 0, 'vistas/img/vehiculos/0210/TARJETA-DE-CIRCULACION-0210-240709125802.pdf', 1, '', 0, '', 0, '', 0, '', 0, 'vistas/img/vehiculos/0210/FACTURA-ORIGEN-0210-240709125722.pdf', 1, 210),
(211, 'vistas/img/vehiculos/0211/FACTURA-COMPRA-0211-240610113420.pdf', 1, 'vistas/img/vehiculos/0211/POLIZA-SEGURO-0211-240524121710.pdf', 1, 'vistas/img/vehiculos/0211/TENENCIA-0211-240709133545.pdf', 1, '/cxpagar/vistas/img/vehiculos/0211/VERIFICACION-0211-240909134138.pdf', 1, '', 0, 'vistas/img/vehiculos/0211/TARJETA-DE-CIRCULACION-0211-240709134319.pdf', 1, '', 0, '', 0, '', 0, '', 0, 'vistas/img/vehiculos/0211/FACTURA-ORIGEN-0211-240610113219.pdf', 1, 211),
(212, 'vistas/img/vehiculos/0212/FACTURA-COMPRA-0212-240701125244.pdf', 1, '', 0, 'vistas/img/vehiculos/0212/TENENCIA-0212-240701124946.pdf', 1, 'vistas/img/vehiculos/0212/VERIFICACION-0212-240729102419.pdf', 1, '', 0, '', 0, '', 0, '', 0, '', 0, '', 0, 'vistas/img/vehiculos/0212/FACTURA-ORIGEN-0212-240610120504.pdf', 1, 212);
INSERT INTO `tb_documentacion_vehiculos` (`idDocumentoVeh`, `factura`, `checkFactura`, `poliza`, `checkPoliza`, `tenencia`, `checkTenencia`, `verificacion`, `checkVerificacion`, `pedimento`, `checkPedimento`, `tarjeta`, `checkTarjeta`, `garantia`, `checkGarantia`, `permiso`, `checkPermiso`, `compraVenta`, `checkCompraVenta`, `ultimoTramite`, `checkUltimoTramite`, `facturaOrigen`, `checkFacturaOrigen`, `vehiculo_id`) VALUES
(213, 'vistas/img/vehiculos/0213/FACTURA-COMPRA-0213-240701130012.pdf', 1, '', 0, '', 0, '/cxpagar/vistas/img/vehiculos/0213/VERIFICACION-0213-241113092056.pdf', 1, '', 0, '', 0, '', 0, '', 0, '', 0, 'vistas/img/vehiculos/0213/ULTIMO-TRAMITE-0213-240701130035.pdf', 1, 'vistas/img/vehiculos/0213/FACTURA-ORIGEN-0213-240610122015.pdf', 1, 213),
(214, 'vistas/img/vehiculos/0214/FACTURA-COMPRA-0214-240701133217.pdf', 1, 'vistas/img/vehiculos/0214/POLIZA-SEGURO-0214-240524121532.pdf', 1, 'vistas/img/vehiculos/0214/TENENCIA-0214-240701133229.pdf', 1, '/cxpagar/vistas/img/vehiculos/0214/VERIFICACION-0214-241002130024.pdf', 1, '', 0, '', 0, '', 0, '', 0, '', 0, 'vistas/img/vehiculos/0214/ULTIMO-TRAMITE-0214-240701133255.pdf', 1, 'vistas/img/vehiculos/0214/FACTURA-ORIGEN-0214-241021140449.pdf', 1, 214),
(215, 'NULL', 0, '', 0, '', 0, 'vistas/img/vehiculos/0215/VERIFICACION-0215-240716121910.pdf', 1, '', 0, 'vistas/img/vehiculos/0215/TARJETA-DE-CIRCULACION-0215-240716121918.pdf', 1, '', 0, '', 0, '', 0, '', 0, 'vistas/img/vehiculos/0215/FACTURA-ORIGEN-0215-240716121855.pdf', 1, 215),
(216, 'NULL', 0, 'vistas/img/vehiculos/0216/POLIZA-SEGURO-0216-240524121623.pdf', 1, 'vistas/img/vehiculos/0216/TENENCIA-0216-240716122021.pdf', 1, '/cxpagar/vistas/img/vehiculos/0216/VERIFICACION-0216-241113093540.pdf', 1, '', 0, 'vistas/img/vehiculos/0216/TARJETA-DE-CIRCULACION-0216-240716122036.pdf', 1, '', 0, '', 0, '', 0, '', 0, 'vistas/img/vehiculos/0216/FACTURA-ORIGEN-0216-240716121942.pdf', 1, 216),
(217, 'NULL', 0, '', 0, 'vistas/img/vehiculos/0217/TENENCIA-0217-240909100846.pdf', 1, '/cxpagar/vistas/img/vehiculos/0217/VERIFICACION-0217-240909100910.pdf', 1, '', 0, 'vistas/img/vehiculos/0217/TARJETA-DE-CIRCULACION-0217-240909101334.pdf', 1, '', 0, '', 0, '', 0, 'vistas/img/vehiculos/0217/ULTIMO-TRAMITE-0217-240909100855.pdf', 1, 'vistas/img/vehiculos/0217/FACTURA-ORIGEN-0217-240909100705.pdf', 1, 217),
(218, 'NULL', 0, '', 0, 'vistas/img/vehiculos/0218/TENENCIA-0218-240819121547.pdf', 1, 'vistas/img/vehiculos/0218/VERIFICACION-0218-240819121607.pdf', 1, '', 0, 'vistas/img/vehiculos/0218/TARJETA-DE-CIRCULACION-0218-240819121558.pdf', 1, '', 0, '', 0, '', 0, '', 0, 'vistas/img/vehiculos/0218/FACTURA-ORIGEN-0218-240819121459.pdf', 1, 218),
(219, 'vistas/img/vehiculos/0219/FACTURA-COMPRA-0219-240701130220.pdf', 1, '', 0, 'vistas/img/vehiculos/0219/TENENCIA-0219-240701130229.pdf', 1, 'vistas/img/vehiculos/0219/VERIFICACION-0219-240712093058.pdf', 1, '', 0, '', 0, '', 0, '', 0, '', 0, 'vistas/img/vehiculos/0219/ULTIMO-TRAMITE-0219-240701130241.pdf', 1, 'vistas/img/vehiculos/0219/FACTURA-ORIGEN-0219-240611103801.pdf', 1, 219),
(220, 'vistas/img/vehiculos/0220/FACTURA-COMPRA-0220-240610132649.pdf', 1, 'vistas/img/vehiculos/0220/POLIZA-SEGURO-0220-241030163902.pdf', 1, 'NULL', 0, '', 0, '', 0, 'NULL', 0, '', 0, '', 0, '', 0, '', 0, 'vistas/img/vehiculos/0220/FACTURA-ORIGEN-0220-240610132659.pdf', 1, 220),
(221, 'vistas/img/vehiculos/0221/FACTURA-COMPRA-0221-240610125540.pdf', 1, '', 0, 'vistas/img/vehiculos/0221/TENENCIA-0221-240819173906.pdf', 1, 'vistas/img/vehiculos/0221/VERIFICACION-0221-240819173858.pdf', 1, '', 0, 'vistas/img/vehiculos/0221/TARJETA-DE-CIRCULACION-0221-240819173917.pdf', 1, '', 0, '', 0, '', 0, '', 0, 'vistas/img/vehiculos/0221/FACTURA-ORIGEN-0221-241010144859.pdf', 1, 221),
(222, 'vistas/img/vehiculos/0222/FACTURA-COMPRA-0222-240611104629.pdf', 1, '', 0, '', 0, '', 0, '', 0, '', 0, '', 0, '', 0, '', 0, '', 0, 'vistas/img/vehiculos/0222/FACTURA-ORIGEN-0222-240611104638.pdf', 1, 222),
(223, 'vistas/img/vehiculos/0223/FACTURA-COMPRA-0223-241016173911.pdf', 1, 'vistas/img/vehiculos/0223/POLIZA-SEGURO-0223-241030164407.pdf', 1, '', 0, '', 0, '', 0, '', 0, '', 0, '', 0, '', 0, '', 0, 'vistas/img/vehiculos/0223/FACTURA-ORIGEN-0223-241016173835.pdf', 1, 223),
(224, 'vistas/img/vehiculos/0224/FACTURA-COMPRA-0224-240828135723.pdf', 1, '', 0, 'vistas/img/vehiculos/0224/TENENCIA-0224-240828135753.pdf', 1, '/cxpagar/vistas/img/vehiculos/0224/VERIFICACION-0224-240828135844.pdf', 1, '', 0, 'vistas/img/vehiculos/0224/TARJETA-DE-CIRCULACION-0224-240828135815.pdf', 1, '', 0, '', 0, '', 0, '', 0, 'vistas/img/vehiculos/0224/FACTURA-ORIGEN-0224-240828135731.pdf', 1, 224),
(225, 'vistas/img/vehiculos/0225/FACTURA-COMPRA-0225-240828142111.pdf', 1, '', 0, '', 0, '', 0, '', 0, '', 0, '', 0, '', 0, '', 0, '', 0, 'vistas/img/vehiculos/0225/FACTURA-ORIGEN-0225-240828142151.pdf', 1, 225),
(226, 'vistas/img/vehiculos/0226/FACTURA-COMPRA-0226-240610143530.pdf', 1, '', 0, '', 0, '', 0, '', 0, '', 0, '', 0, '', 0, '', 0, '', 0, 'vistas/img/vehiculos/0226/FACTURA-ORIGEN-0226-240610143537.pdf', 1, 226),
(227, 'vistas/img/vehiculos/0227/FACTURA-COMPRA-0227-240610122726.pdf', 1, '', 0, '', 0, '', 0, '', 0, '', 0, '', 0, '', 0, '', 0, '', 0, 'vistas/img/vehiculos/0227/FACTURA-ORIGEN-0227-240610122736.pdf', 1, 227),
(228, 'vistas/img/vehiculos/0228/FACTURA-COMPRA-0228-240701130428.pdf', 1, 'vistas/img/vehiculos/0228/POLIZA-SEGURO-0228-241030164538.pdf', 1, 'vistas/img/vehiculos/0228/TENENCIA-0228-240701130440.pdf', 1, 'vistas/img/vehiculos/0228/VERIFICACION-0228-240715123609.pdf', 1, '', 0, '', 0, '', 0, '', 0, '', 0, 'vistas/img/vehiculos/0228/ULTIMO-TRAMITE-0228-240701130452.pdf', 1, 'vistas/img/vehiculos/0228/FACTURA-ORIGEN-0228-240610133108.pdf', 1, 228),
(229, 'vistas/img/vehiculos/0229/FACTURA-COMPRA-0229-240828145351.pdf', 1, '', 0, 'vistas/img/vehiculos/0229/TENENCIA-0229-240828145424.pdf', 1, '', 0, '', 0, '', 0, '', 0, '', 0, '', 0, '', 0, 'vistas/img/vehiculos/0229/FACTURA-ORIGEN-0229-240809175304.pdf', 1, 229),
(230, 'vistas/img/vehiculos/0230/FACTURA-COMPRA-0230-240828164739.pdf', 1, '', 0, 'vistas/img/vehiculos/0230/TENENCIA-0230-240828164830.pdf', 1, '/cxpagar/vistas/img/vehiculos/0230/VERIFICACION-0230-240828164836.pdf', 1, '', 0, 'vistas/img/vehiculos/0230/TARJETA-DE-CIRCULACION-0230-240828164842.pdf', 1, '', 0, '', 0, '', 0, '', 0, 'vistas/img/vehiculos/0230/FACTURA-ORIGEN-0230-240828164801.pdf', 1, 230),
(231, 'NULL', 0, '', 0, 'vistas/img/vehiculos/0231/TENENCIA-0231-240829143206.pdf', 1, '/cxpagar/vistas/img/vehiculos/0231/VERIFICACION-0231-241120120136.pdf', 1, '', 0, '', 0, '', 0, '', 0, '', 0, '', 0, 'vistas/img/vehiculos/0231/FACTURA-ORIGEN-0231-240829143129.pdf', 1, 231),
(232, 'vistas/img/vehiculos/0232/FACTURA-COMPRA-0232-240701125458.pdf', 1, 'vistas/img/vehiculos/0232/POLIZA-SEGURO-0232-241030164614.pdf', 1, 'vistas/img/vehiculos/0232/TENENCIA-0232-240701125507.pdf', 1, 'vistas/img/vehiculos/0232/VERIFICACION-0232-240715123630.pdf', 1, '', 0, '', 0, '', 0, '', 0, '', 0, 'vistas/img/vehiculos/0232/ULTIMO-TRAMITE-0232-240701125528.pdf', 1, 'vistas/img/vehiculos/0232/FACTURA-ORIGEN-0232-240610124249.pdf', 1, 232),
(233, 'vistas/img/vehiculos/0233/FACTURA-COMPRA-0233-240909112200.pdf', 1, 'vistas/img/vehiculos/0233/POLIZA-SEGURO-0233-241030164645.pdf', 1, 'vistas/img/vehiculos/0233/TENENCIA-0233-240909112208.pdf', 1, '/cxpagar/vistas/img/vehiculos/0233/VERIFICACION-0233-240909112225.pdf', 1, '', 0, 'vistas/img/vehiculos/0233/TARJETA-DE-CIRCULACION-0233-240909112219.pdf', 1, '', 0, '', 0, '', 0, 'vistas/img/vehiculos/0233/ULTIMO-TRAMITE-0233-240909112234.pdf', 1, 'vistas/img/vehiculos/0233/FACTURA-ORIGEN-0233-241010145058.pdf', 1, 233),
(234, 'vistas/img/vehiculos/0234/FACTURA-COMPRA-0234-240909125539.pdf', 1, '', 0, '', 0, '', 0, '', 0, '', 0, '', 0, '', 0, '', 0, '', 0, '', 0, 234),
(235, 'NULL', 0, '', 0, '', 0, '', 0, '', 0, '', 0, '', 0, '', 0, '', 0, '', 0, '', 0, 235),
(236, 'vistas/img/vehiculos/0236/FACTURA-COMPRA-0236-240701130634.pdf', 1, 'vistas/img/vehiculos/0236/POLIZA-SEGURO-0236-240701130716.pdf', 1, 'vistas/img/vehiculos/0236/TENENCIA-0236-240701130746.pdf', 1, 'vistas/img/vehiculos/0236/VERIFICACION-0236-240617130253.pdf', 1, '', 0, '', 0, '', 0, '', 0, '', 0, 'vistas/img/vehiculos/0236/ULTIMO-TRAMITE-0236-240701130758.pdf', 1, 'vistas/img/vehiculos/0236/FACTURA-ORIGEN-0236-240610142728.pdf', 1, 236),
(237, 'vistas/img/vehiculos/0237/FACTURA-COMPRA-0237-240610131020.pdf', 1, '', 0, '', 0, '', 0, '', 0, '', 0, '', 0, '', 0, '', 0, '', 0, 'vistas/img/vehiculos/0237/FACTURA-ORIGEN-0237-240610131028.pdf', 1, 237),
(238, 'vistas/img/vehiculos/0238/FACTURA-COMPRA-0238-240610134340.pdf', 1, 'vistas/img/vehiculos/0238/POLIZA-SEGURO-0238-241030164705.pdf', 1, '', 0, '', 0, '', 0, '', 0, '', 0, '', 0, '', 0, '', 0, 'vistas/img/vehiculos/0238/FACTURA-ORIGEN-0238-240610134356.pdf', 1, 238),
(239, 'vistas/img/vehiculos/0239/FACTURA-COMPRA-0239-240610144649.pdf', 1, 'vistas/img/vehiculos/0239/POLIZA-SEGURO-0239-241030164724.pdf', 1, '', 0, '', 0, '', 0, '', 0, '', 0, '', 0, '', 0, '', 0, 'vistas/img/vehiculos/0239/FACTURA-ORIGEN-0239-240610144700.pdf', 1, 239),
(240, 'vistas/img/vehiculos/0240/FACTURA-COMPRA-0240-240701125723.pdf', 1, 'vistas/img/vehiculos/0240/POLIZA-SEGURO-0240-241030164741.pdf', 1, 'vistas/img/vehiculos/0240/TENENCIA-0240-240701125737.pdf', 1, 'vistas/img/vehiculos/0240/VERIFICACION-0240-240712092849.pdf', 1, '', 0, '', 0, '', 0, '', 0, '', 0, 'vistas/img/vehiculos/0240/ULTIMO-TRAMITE-0240-240701125752.pdf', 1, 'vistas/img/vehiculos/0240/FACTURA-ORIGEN-0240-240610141027.pdf', 1, 240),
(241, 'vistas/img/vehiculos/0241/FACTURA-COMPRA-0241-240610144345.pdf', 1, '', 0, '', 0, '', 0, '', 0, '', 0, '', 0, '', 0, '', 0, '', 0, 'vistas/img/vehiculos/0241/FACTURA-ORIGEN-0241-240610144355.pdf', 1, 241),
(242, 'vistas/img/vehiculos/0242/FACTURA-COMPRA-0242-240627164458.pdf', 1, 'vistas/img/vehiculos/0242/POLIZA-SEGURO-0242-240524111614.pdf', 1, 'vistas/img/vehiculos/0242/TENENCIA-0242-240627164527.pdf', 1, '', 0, '', 0, 'vistas/img/vehiculos/0242/TARJETA-DE-CIRCULACION-0242-240627164536.pdf', 1, '', 0, '', 0, 'vistas/img/vehiculos/0242/COMPRA-VENTA-0242-240627164559.pdf', 1, '', 0, 'vistas/img/vehiculos/0242/FACTURA-ORIGEN-0242-240627164613.pdf', 1, 242),
(243, 'vistas/img/vehiculos/0243/FACTURA-COMPRA-0243-240627164649.pdf', 1, 'vistas/img/vehiculos/0243/POLIZA-SEGURO-0243-240524085646.pdf', 1, 'vistas/img/vehiculos/0243/TENENCIA-0243-240627164701.pdf', 1, '', 0, '', 0, 'vistas/img/vehiculos/0243/TARJETA-DE-CIRCULACION-0243-240627164712.pdf', 1, '', 0, '', 0, '', 0, '', 0, 'vistas/img/vehiculos/0243/FACTURA-ORIGEN-0243-240627164724.pdf', 1, 243),
(244, 'vistas/img/vehiculos/0244/FACTURA-COMPRA-0244-240627164746.pdf', 1, '', 0, '', 0, '', 0, '', 0, '', 0, '', 0, '', 0, '', 0, '', 0, 'vistas/img/vehiculos/0244/FACTURA-ORIGEN-0244-240627164823.pdf', 1, 244),
(245, 'vistas/img/vehiculos/0245/FACTURA-COMPRA-0245-240619144217.pdf', 1, 'vistas/img/vehiculos/0245/POLIZA-SEGURO-0245-240524085854.pdf', 1, 'vistas/img/vehiculos/0245/TENENCIA-0245-240619144230.pdf', 1, '', 0, '', 0, 'vistas/img/vehiculos/0245/TARJETA-DE-CIRCULACION-0245-240619144242.pdf', 1, '', 0, '', 0, '', 0, '', 0, 'vistas/img/vehiculos/0245/FACTURA-ORIGEN-0245-240619144251.pdf', 1, 245),
(246, 'vistas/img/vehiculos/0246/FACTURA-COMPRA-0246-240619162903.pdf', 1, 'vistas/img/vehiculos/0246/POLIZA-SEGURO-0246-240619163045.pdf', 1, 'vistas/img/vehiculos/0246/TENENCIA-0246-240619162914.pdf', 1, '', 0, '', 0, 'vistas/img/vehiculos/0246/TARJETA-DE-CIRCULACION-0246-240619162929.pdf', 1, '', 0, '', 0, '', 0, '', 0, 'vistas/img/vehiculos/0246/FACTURA-ORIGEN-0246-240619162945.pdf', 1, 246),
(247, 'vistas/img/vehiculos/0247/FACTURA-COMPRA-0247-240619165218.pdf', 1, 'vistas/img/vehiculos/0247/POLIZA-SEGURO-0247-240619164948.pdf', 1, 'vistas/img/vehiculos/0247/TENENCIA-0247-240619165257.pdf', 1, '', 0, '', 0, 'vistas/img/vehiculos/0247/TARJETA-DE-CIRCULACION-0247-240619165601.pdf', 1, '', 0, '', 0, '', 0, '', 0, 'vistas/img/vehiculos/0247/FACTURA-ORIGEN-0247-240610114531.pdf', 1, 247),
(248, 'vistas/img/vehiculos/0248/FACTURA-COMPRA-0248-240619171022.pdf', 1, '', 0, 'vistas/img/vehiculos/0248/TENENCIA-0248-240619171113.pdf', 1, '', 0, '', 0, 'vistas/img/vehiculos/0248/TARJETA-DE-CIRCULACION-0248-241030171933.pdf', 1, '', 0, '', 0, '', 0, 'vistas/img/vehiculos/0248/ULTIMO-TRAMITE-0248-241030171409.pdf', 1, 'vistas/img/vehiculos/0248/FACTURA-ORIGEN-0248-240619171127.pdf', 1, 248),
(249, 'vistas/img/vehiculos/0249/FACTURA-COMPRA-0249-240620125354.pdf', 1, 'vistas/img/vehiculos/0249/POLIZA-SEGURO-0249-240524100511.pdf', 1, 'vistas/img/vehiculos/0249/TENENCIA-0249-240620125412.pdf', 1, '', 0, '', 0, 'vistas/img/vehiculos/0249/TARJETA-DE-CIRCULACION-0249-240620125422.pdf', 1, '', 0, '', 0, '', 0, '', 0, 'vistas/img/vehiculos/0249/FACTURA-ORIGEN-0249-240620125434.pdf', 1, 249),
(250, 'vistas/img/vehiculos/0250/FACTURA-COMPRA-0250-240620125501.pdf', 1, 'vistas/img/vehiculos/0250/POLIZA-SEGURO-0250-240524101134.pdf', 1, 'vistas/img/vehiculos/0250/TENENCIA-0250-240620125515.pdf', 1, '', 0, '', 0, 'vistas/img/vehiculos/0250/TARJETA-DE-CIRCULACION-0250-240620125524.pdf', 1, '', 0, '', 0, '', 0, '', 0, 'vistas/img/vehiculos/0250/FACTURA-ORIGEN-0250-240620125535.pdf', 1, 250),
(251, 'vistas/img/vehiculos/0251/FACTURA-COMPRA-0251-240620125604.pdf', 1, '', 0, 'vistas/img/vehiculos/0251/TENENCIA-0251-240620125628.pdf', 1, 'vistas/img/vehiculos/0251/VERIFICACION-0251-240620125635.pdf', 1, '', 0, 'vistas/img/vehiculos/0251/TARJETA-DE-CIRCULACION-0251-240620125643.pdf', 1, '', 0, '', 0, '', 0, '', 0, 'vistas/img/vehiculos/0251/FACTURA-ORIGEN-0251-240620125654.pdf', 1, 251),
(252, 'vistas/img/vehiculos/0252/FACTURA-COMPRA-0252-240620125719.pdf', 1, 'vistas/img/vehiculos/0252/POLIZA-SEGURO-0252-240524101220.pdf', 1, 'vistas/img/vehiculos/0252/TENENCIA-0252-240620125737.pdf', 1, '', 0, '', 0, 'vistas/img/vehiculos/0252/TARJETA-DE-CIRCULACION-0252-240620125740.pdf', 1, '', 0, '', 0, '', 0, '', 0, 'vistas/img/vehiculos/0252/FACTURA-ORIGEN-0252-240620125752.pdf', 1, 252),
(253, 'vistas/img/vehiculos/0253/FACTURA-COMPRA-0253-240620125810.pdf', 1, 'vistas/img/vehiculos/0253/POLIZA-SEGURO-0253-240524101502.pdf', 1, 'vistas/img/vehiculos/0253/TENENCIA-0253-240620125820.pdf', 1, '', 0, '', 0, 'vistas/img/vehiculos/0253/TARJETA-DE-CIRCULACION-0253-240620125828.pdf', 1, '', 0, '', 0, '', 0, '', 0, 'vistas/img/vehiculos/0253/FACTURA-ORIGEN-0253-241010145214.pdf', 1, 253),
(254, 'vistas/img/vehiculos/0254/FACTURA-COMPRA-0254-240619124302.pdf', 1, 'vistas/img/vehiculos/0254/POLIZA-SEGURO-0254-240524103713.pdf', 1, 'vistas/img/vehiculos/0254/TENENCIA-0254-240619124311.pdf', 1, '/cxpagar/vistas/img/vehiculos/0254/VERIFICACION-0254-241029095140.pdf', 1, '', 0, '', 0, '', 0, '', 0, '', 0, 'vistas/img/vehiculos/0254/ULTIMO-TRAMITE-0254-240927172711.pdf', 1, 'vistas/img/vehiculos/0254/FACTURA-ORIGEN-0254-240619124327.pdf', 1, 254),
(255, 'vistas/img/vehiculos/0255/FACTURA-COMPRA-0255-240619131205.pdf', 1, 'vistas/img/vehiculos/0255/POLIZA-SEGURO-0255-240524104126.pdf', 1, 'vistas/img/vehiculos/0255/TENENCIA-0255-240619131217.pdf', 1, '', 0, '', 0, '', 0, '', 0, '', 0, '', 0, '', 0, 'vistas/img/vehiculos/0255/FACTURA-ORIGEN-0255-240619131233.pdf', 1, 255),
(256, 'NULL', 0, '', 0, 'vistas/img/vehiculos/0256/TENENCIA-0256-240619140458.pdf', 1, '', 0, '', 0, 'vistas/img/vehiculos/0256/TARJETA-DE-CIRCULACION-0256-241112165114.pdf', 1, '', 0, '', 0, '', 0, 'vistas/img/vehiculos/0256/ULTIMO-TRAMITE-0256-241112165022.pdf', 1, 'vistas/img/vehiculos/0256/FACTURA-ORIGEN-0256-240619140544.pdf', 1, 256),
(257, 'vistas/img/vehiculos/0257/FACTURA-COMPRA-0257-240619134426.pdf', 1, 'vistas/img/vehiculos/0257/POLIZA-SEGURO-0257-240524104421.pdf', 1, 'vistas/img/vehiculos/0257/TENENCIA-0257-240619134435.pdf', 1, '', 0, '', 0, '', 0, '', 0, '', 0, '', 0, 'vistas/img/vehiculos/0257/ULTIMO-TRAMITE-0257-240927172014.pdf', 1, 'vistas/img/vehiculos/0257/FACTURA-ORIGEN-0257-240619134446.pdf', 1, 257),
(258, 'vistas/img/vehiculos/0258/FACTURA-COMPRA-0258-240619113906.pdf', 1, 'vistas/img/vehiculos/0258/POLIZA-SEGURO-0258-241111174919.pdf', 1, '', 0, '/cxpagar/vistas/img/vehiculos/0258/VERIFICACION-0258-240927175833.pdf', 1, '', 0, 'vistas/img/vehiculos/0258/TARJETA-DE-CIRCULACION-0258-240704134930.pdf', 1, '', 0, '', 0, '', 0, '', 0, 'vistas/img/vehiculos/0258/FACTURA-ORIGEN-0258-240619113915.pdf', 1, 258),
(259, 'vistas/img/vehiculos/0259/FACTURA-COMPRA-0259-240619112655.pdf', 1, 'vistas/img/vehiculos/0259/POLIZA-SEGURO-0259-240619112703.pdf', 1, '', 0, '/cxpagar/vistas/img/vehiculos/0259/VERIFICACION-0259-240919172826.pdf', 1, '', 0, 'vistas/img/vehiculos/0259/TARJETA-DE-CIRCULACION-0259-240704135305.pdf', 1, '', 0, '', 0, '', 0, '', 0, 'vistas/img/vehiculos/0259/FACTURA-ORIGEN-0259-240619112730.pdf', 1, 259),
(260, 'NULL', 0, '', 0, '', 0, '', 0, 'vistas/img/vehiculos/0260/PEDIMENTO-0260-240619111216.pdf', 1, '', 0, '', 0, '', 0, 'vistas/img/vehiculos/0260/COMPRA-VENTA-0260-240619111235.pdf', 1, '', 0, '', 0, 260),
(261, 'vistas/img/vehiculos/0261/FACTURA-COMPRA-0261-240619105607.pdf', 1, 'vistas/img/vehiculos/0261/POLIZA-SEGURO-0261-240523143127.pdf', 1, 'vistas/img/vehiculos/0261/TENENCIA-0261-240619105615.pdf', 1, '/cxpagar/vistas/img/vehiculos/0261/VERIFICACION-0261-241113145459.pdf', 1, '', 0, 'vistas/img/vehiculos/0261/TARJETA-DE-CIRCULACION-0261-240619105632.pdf', 1, '', 0, '', 0, '', 0, '', 0, 'vistas/img/vehiculos/0261/FACTURA-ORIGEN-0261-240619105643.pdf', 1, 261),
(262, 'vistas/img/vehiculos/0262/FACTURA-COMPRA-0262-240619104632.pdf', 1, 'vistas/img/vehiculos/0262/POLIZA-SEGURO-0262-240523141845.pdf', 1, 'vistas/img/vehiculos/0262/TENENCIA-0262-240619104653.pdf', 1, '/cxpagar/vistas/img/vehiculos/0262/VERIFICACION-0262-241016162133.pdf', 1, '', 0, 'vistas/img/vehiculos/0262/TARJETA-DE-CIRCULACION-0262-240619104711.pdf', 1, '', 0, '', 0, '', 0, '', 0, 'vistas/img/vehiculos/0262/FACTURA-ORIGEN-0262-240619104643.pdf', 1, 262),
(263, 'vistas/img/vehiculos/0263/FACTURA-COMPRA-0263-240619101532.pdf', 1, 'vistas/img/vehiculos/0263/POLIZA-SEGURO-0263-240523132620.pdf', 1, 'vistas/img/vehiculos/0263/TENENCIA-0263-240619101535.pdf', 1, 'vistas/img/vehiculos/0263/VERIFICACION-0263-240619101538.pdf', 1, '', 0, 'vistas/img/vehiculos/0263/TARJETA-DE-CIRCULACION-0263-240619101541.pdf', 1, '', 0, '', 0, '', 0, '', 0, 'vistas/img/vehiculos/0263/FACTURA-ORIGEN-0263-240619101546.pdf', 1, 263),
(264, 'vistas/img/vehiculos/0264/FACTURA-COMPRA-0264-240619100253.pdf', 1, 'vistas/img/vehiculos/0264/POLIZA-SEGURO-0264-240523143030.pdf', 1, 'vistas/img/vehiculos/0264/TENENCIA-0264-240619100247.pdf', 1, 'vistas/img/vehiculos/0264/VERIFICACION-0264-240814172950.pdf', 1, '', 0, 'vistas/img/vehiculos/0264/TARJETA-DE-CIRCULACION-0264-240619100238.pdf', 1, '', 0, '', 0, '', 0, '', 0, 'vistas/img/vehiculos/0264/FACTURA-ORIGEN-0264-240619100233.pdf', 1, 264),
(265, 'vistas/img/vehiculos/0265/FACTURA-COMPRA-0265-240619095332.pdf', 1, 'vistas/img/vehiculos/0265/POLIZA-SEGURO-0265-240523142155.pdf', 1, 'vistas/img/vehiculos/0265/TENENCIA-0265-240619095334.pdf', 1, 'vistas/img/vehiculos/0265/VERIFICACION-0265-240619095338.pdf', 1, '', 0, 'vistas/img/vehiculos/0265/TARJETA-DE-CIRCULACION-0265-240619095342.pdf', 1, '', 0, '', 0, '', 0, '', 0, 'vistas/img/vehiculos/0265/FACTURA-ORIGEN-0265-240619095347.pdf', 1, 265),
(266, 'vistas/img/vehiculos/0266/FACTURA-COMPRA-0266-240619093711.pdf', 1, 'vistas/img/vehiculos/0266/POLIZA-SEGURO-0266-240523142123.pdf', 1, 'vistas/img/vehiculos/0266/TENENCIA-0266-240619093736.pdf', 1, '/cxpagar/vistas/img/vehiculos/0266/VERIFICACION-0266-240924170027.pdf', 1, '', 0, 'vistas/img/vehiculos/0266/TARJETA-DE-CIRCULACION-0266-240619093759.pdf', 1, '', 0, '', 0, '', 0, '', 0, 'vistas/img/vehiculos/0266/FACTURA-ORIGEN-0266-240619093847.pdf', 1, 266),
(267, 'NULL', 0, 'vistas/img/vehiculos/0267/POLIZA-SEGURO-0267-240524122457.pdf', 1, '', 0, 'vistas/img/vehiculos/0267/VERIFICACION-0267-240703120603.pdf', 1, '', 0, '', 0, '', 0, '', 0, '', 0, '', 0, '', 0, 267),
(268, 'NULL', 0, 'NULL', 0, 'NULL', 0, 'NULL', 0, 'NULL', 0, 'NULL', 0, 'NULL', 0, 'NULL', 0, 'NULL', 0, 'NULL', 0, 'vistas/img/vehiculos/0268/FACTURA-ORIGEN-0268-240801114021.pdf', 1, 268),
(269, 'vistas/img/vehiculos/0269/FACTURA-COMPRA-0269-240909171839.pdf', 1, 'NULL', 0, 'NULL', 0, 'NULL', 0, 'NULL', 0, 'NULL', 0, 'NULL', 0, 'NULL', 0, 'NULL', 0, 'NULL', 0, 'vistas/img/vehiculos/0269/FACTURA-ORIGEN-0269-240909171849.pdf', 1, 269),
(270, 'NULL', 0, 'NULL', 0, 'NULL', 0, 'NULL', 0, 'NULL', 0, 'NULL', 0, 'NULL', 0, 'NULL', 0, 'NULL', 0, 'NULL', 0, 'NULL', 0, 270),
(271, 'NULL', 0, 'NULL', 0, 'NULL', 0, 'NULL', 0, 'NULL', 0, 'NULL', 0, 'NULL', 0, 'NULL', 0, 'NULL', 0, 'NULL', 0, 'NULL', 0, 271);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `tb_incidencia_inventarios`
--

CREATE TABLE `tb_incidencia_inventarios` (
  `idIncidenciaInv` int NOT NULL,
  `vehiculo_id` int NOT NULL,
  `responsable_id` int NOT NULL,
  `fecha` date NOT NULL,
  `titulo` varchar(255) COLLATE utf8mb3_spanish_ci NOT NULL,
  `descripcion` text COLLATE utf8mb3_spanish_ci NOT NULL,
  `created_at` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb3 COLLATE=utf8mb3_spanish_ci;

--
-- Volcado de datos para la tabla `tb_incidencia_inventarios`
--

INSERT INTO `tb_incidencia_inventarios` (`idIncidenciaInv`, `vehiculo_id`, `responsable_id`, `fecha`, `titulo`, `descripcion`, `created_at`) VALUES
(1, 1, 23, '2024-12-09', 'abc', 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Quidem perferendis, dolorem doloremque quas porro atque cumque accusantium itaque ad. Nihil et rem quaerat soluta, sunt fuga id laboriosam? Molestiae, pariatur?\r\n', '2024-12-09 17:31:23'),
(2, 4, 14, '2024-12-10', 'Invenario inicial del vehiculo XYZ', ' Lorem ipsum dolor sit amet consectetur adipisicing elit. Modi totam minus similique odio perferendis ut, quo beatae eum animi eaque consequatur sapiente mollitia ex, libero dolor ea? Molestias, architecto, nam.\r\n Lorem ipsum dolor sit amet consectetur adipisicing elit. Modi totam minus similique odio perferendis ut, quo beatae eum animi eaque consequatur sapiente mollitia ex, libero dolor ea? Molestias, architecto, nam.\r\n Lorem ipsum dolor sit amet consectetur adipisicing elit. Modi totam minus similique odio perferendis ut, quo beatae eum animi eaque consequatur sapiente mollitia ex, libero dolor ea? Molestias, architecto, nam.\r\nSe toma como base de invenatrio a vehiculo XYZ ubicado en ...  Lorem ipsum dolor sit amet consectetur adipisicing elit. Modi totam minus similique odio perferendis ut, quo beatae eum animi eaque consequatur sapiente mollitia ex, libero dolor ea? Molestias, architecto, nam.\r\n Lorem ipsum dolor sit amet consectetur adipisicing elit. Modi totam minus similique odio perferendis ut, quo beatae eum animi eaque consequatur sapiente mollitia ex, libero dolor ea? Molestias, architecto, nam.\r\n Lorem ipsum dolor sit amet consectetur adipisicing elit. Modi totam minus similique odio perferendis ut, quo beatae eum animi eaque consequatur sapiente mollitia ex, libero dolor ea? Molestias, architecto, nam.\r\n', '2024-12-10 10:07:08'),
(3, 13, 26, '2024-12-09', 'Inventario de vehiculo ABCD', 'Inicial ubicado en coyote', '2024-12-10 10:11:01'),
(4, 4, 14, '2024-12-11', 'Inventario VEHIOCULO XYZ', 'Segundo mrpcoesos de invebtarios', '2024-12-10 10:41:16');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `tb_marca`
--

CREATE TABLE `tb_marca` (
  `idMarca` int NOT NULL,
  `marca` varchar(255) NOT NULL,
  `created_at` datetime NOT NULL,
  `usuario_id` int NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Volcado de datos para la tabla `tb_marca`
--

INSERT INTO `tb_marca` (`idMarca`, `marca`, `created_at`, `usuario_id`) VALUES
(1, 'Caterpillar', '2024-02-28 17:04:43', 26),
(2, 'Dodge', '2024-02-28 17:04:57', 26),
(3, 'Ford', '2024-02-28 17:05:10', 26),
(4, 'Fruehauf', '2024-02-28 17:05:30', 26),
(5, 'Generac Mobile Products LLC', '2024-02-28 17:07:29', 26),
(6, 'Hilti', '2024-02-28 17:07:42', 26),
(7, 'Husqvarna', '2024-02-28 17:07:56', 26),
(8, 'Italika', '2024-02-29 12:04:26', 26),
(9, 'JLG', '2024-02-28 17:08:33', 26),
(10, 'Kubota', '2024-02-28 17:11:06', 26),
(11, 'Magnum Power Products, LLC', '2024-02-28 17:11:29', 26),
(12, 'Mercedes Benz', '2024-02-28 17:11:45', 26),
(13, 'Mustang', '2024-02-28 17:12:00', 26),
(14, 'Newholland', '2024-02-28 17:12:15', 26),
(15, 'Nissan', '2024-02-28 17:12:31', 26),
(16, 'Titan Cool Inc', '2024-02-28 17:12:49', 26),
(17, 'Toyota', '2024-02-28 17:13:02', 26),
(18, 'Vermeer', '2024-02-28 17:13:16', 26),
(19, 'Volvo', '2024-02-28 17:13:34', 26),
(20, 'Yamaha', '2024-02-28 17:13:47', 26),
(21, 'John Deere', '2024-02-28 17:14:01', 26),
(22, 'Elgin Pelikan', '2024-02-28 17:14:19', 26),
(23, 'Bobcat', '2024-02-28 17:14:33', 26),
(24, 'Hypac', '2024-02-28 17:18:29', 26),
(25, 'International', '2024-02-29 14:24:58', 26),
(26, 'Hyundai', '2024-02-28 17:20:13', 26),
(27, 'Dynapac', '2024-02-28 17:20:27', 26),
(28, 'Barnes Pump', '2024-02-28 17:20:48', 26),
(29, 'Fueukawa', '2024-02-28 17:21:07', 26),
(30, 'Vilchis', '2024-02-28 17:22:12', 26),
(31, ' Wells Cargo', '2024-02-29 12:05:24', 26),
(32, 'Wacker', '2024-02-28 17:22:40', 26),
(33, 'Ingersoll Rand', '2024-02-28 17:22:54', 26),
(34, 'VW', '2024-02-28 17:23:13', 26),
(35, 'Jeep', '2024-02-28 17:23:24', 26),
(36, 'Komatsu', '2024-02-28 17:23:37', 26),
(37, 'W-RES', '2024-02-28 17:23:50', 26),
(38, 'BOMAG', '2024-02-28 17:25:57', 26),
(39, 'Cadillac', '2024-02-28 17:26:13', 26),
(40, 'Shantui Vandel', '2024-02-28 17:26:26', 26),
(41, 'Navistar', '2024-02-28 17:29:14', 26),
(42, 'ROLLS ROYCE', '2024-02-28 17:29:26', 26),
(43, 'LEXUS', '2024-02-28 17:29:35', 26),
(44, 'American Signal', '2024-02-29 12:06:21', 26),
(45, 'Clark', '2024-02-28 17:29:56', 26),
(46, 'Mitsubishi', '2024-02-28 17:30:08', 26),
(47, 'BMW', '2024-02-29 12:08:01', 26),
(48, 'Chevrolet', '2024-02-29 12:08:41', 26),
(49, 'Freighliner', '2024-02-29 12:09:56', 26),
(50, 'Krupp', '2024-02-29 12:10:44', 26),
(51, 'Case', '2024-03-01 12:57:49', 26),
(52, 'Yale', '2024-03-01 13:53:10', 26),
(53, 'Internacional', '2024-03-01 13:56:50', 26),
(54, 'Forte', '2024-03-01 14:07:38', 26),
(55, 'No Visible', '2024-03-01 14:16:12', 26),
(56, 'FAW', '2024-10-23 16:56:49', 26);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `tb_perfil_responsable`
--

CREATE TABLE `tb_perfil_responsable` (
  `idPerfil` int NOT NULL,
  `perfil` varchar(255) COLLATE utf8mb3_spanish_ci NOT NULL,
  `observaciones` varchar(255) COLLATE utf8mb3_spanish_ci NOT NULL,
  `created_at` datetime NOT NULL,
  `usuario_id` int NOT NULL,
  `perfilActivo` int NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb3 COLLATE=utf8mb3_spanish_ci;

--
-- Volcado de datos para la tabla `tb_perfil_responsable`
--

INSERT INTO `tb_perfil_responsable` (`idPerfil`, `perfil`, `observaciones`, `created_at`, `usuario_id`, `perfilActivo`) VALUES
(1, 'root', 'Es el usuario que desarrolla módulos nuevos en el sistema', '2024-11-22 10:44:46', 23, 0),
(2, 'administrador', 'Es el usuario que lleva la gestión de procesos en el sistema, para que cada módulo sea funcional', '2024-11-22 10:44:46', 23, 0),
(3, 'responsable de unidad', 'Usuario quien coordina una unidad de negocio y parte de sus procesos en el sistema', '2024-11-22 10:45:43', 23, 0),
(4, 'usuario', 'Usuario habilitado de gestión administrativo que controla mediante diferentes permisos de ejecución', '2024-11-22 10:45:43', 23, 1),
(5, 'CONTROL VEHICULAR', 'PROCESO VEHICULARES', '2024-12-06 13:08:35', 23, 1);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `tb_propietarios`
--

CREATE TABLE `tb_propietarios` (
  `idPropietario` int NOT NULL,
  `propietario` varchar(255) NOT NULL,
  `created_at` datetime NOT NULL,
  `usuario_id` int NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Volcado de datos para la tabla `tb_propietarios`
--

INSERT INTO `tb_propietarios` (`idPropietario`, `propietario`, `created_at`, `usuario_id`) VALUES
(1, 'CONSTRUCTORA Y DESARROLLADORA GRUPO FRASAN SA DE CV', '2024-01-19 20:54:54', 14),
(2, 'LUMO/ Lease and Fleet', '2024-02-27 14:57:09', 14),
(3, 'GIRSA VALLE DE MEXICO', '2024-01-19 15:17:04', 14),
(4, 'LUNA FINANCIERA DEL CENTRO', '2024-01-19 15:49:38', 14),
(6, 'Endoso', '2024-02-27 14:52:26', 14),
(7, 'Francisco Javier Santos Arreola', '2024-02-27 14:53:29', 14),
(8, 'Frasan Global', '2024-02-27 14:54:10', 14),
(9, 'Frasan Green de México', '2024-08-20 11:30:38', 14),
(10, 'Girsa', '2024-02-27 14:55:32', 14),
(11, 'Jenifer Santos Zamudio', '2024-02-27 14:56:21', 14),
(12, 'Simón Vaca Velázquez', '2024-08-20 11:31:02', 14),
(13, 'Vendido', '2024-03-11 10:10:41', 14),
(14, 'Sin Documentos', '2024-03-04 12:31:19', 14);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `tb_responsables`
--

CREATE TABLE `tb_responsables` (
  `idResponsable` int NOT NULL,
  `responsable` varchar(255) NOT NULL,
  `usuario` varchar(255) NOT NULL,
  `email` varchar(150) NOT NULL,
  `password` varchar(255) NOT NULL,
  `foto` varchar(255) NOT NULL,
  `perfil_id` int NOT NULL,
  `estado` int NOT NULL,
  `fecha` date NOT NULL,
  `ultimoLogin` datetime NOT NULL,
  `unidad_id` int NOT NULL,
  `session_log` int NOT NULL,
  `autorizador` int NOT NULL,
  `created_at` datetime NOT NULL,
  `usuario_id` int NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Volcado de datos para la tabla `tb_responsables`
--

INSERT INTO `tb_responsables` (`idResponsable`, `responsable`, `usuario`, `email`, `password`, `foto`, `perfil_id`, `estado`, `fecha`, `ultimoLogin`, `unidad_id`, `session_log`, `autorizador`, `created_at`, `usuario_id`) VALUES
(1, 'Alejandra Jimenez Reynoso', 'a4nYOh', 'mjimenez@frasangroup.com', '$2a$07$asxx54ahjppf45sd87a5auFL5K1.Cmt9ZheoVVuudOi5BCi10qWly', 'vistas/img/usuarios/a4nYOh/586.png', 4, 1, '2024-11-01', '2024-12-10 14:01:34', 3, 0, 6, '2024-02-22 12:57:30', 23),
(2, 'Brenda Santos Zamudio', 'LODDqv', 'bsantos@frasangroup.com', '$2a$07$asxx54ahjppf45sd87a5auFL5K1.Cmt9ZheoVVuudOi5BCi10qWly', 'vistas/img/usuarios/LODDqv/202.png', 4, 1, '2024-11-01', '2024-11-15 14:07:39', 1, 0, 9, '2024-01-19 23:04:48', 23),
(3, 'Daniel Cadeñanez Alvarez', 'YkyeSO', 'dcadenanez@girvame.com.mx', '$2a$07$asxx54ahjppf45sd87a5aunqkVWUvBblok2UII05qO4.NZ/N6lKKm', 'vistas/img/usuarios/YkyeSO/872.png', 4, 1, '2024-11-01', '2024-11-22 14:07:44', 6, 0, 3, '2024-08-20 11:31:35', 23),
(4, 'Victor Manuel Resendiz', 'UbQhyU', 'demos@gmail.com', '$2a$07$asxx54ahjppf45sd87a5auJ2x6sr20FrpLKqvdXu6CczgTSZTTI5K', 'vistas/img/usuarios/UbQhyU/511.png', 4, 1, '2024-11-01', '2024-11-22 14:07:47', 8, 0, 4, '2024-03-11 12:40:26', 23),
(5, 'Eva Mariana López Olvera', 'kIBywC', 'eva@gmail.com', '$2a$07$asxx54ahjppf45sd87a5auFL5K1.Cmt9ZheoVVuudOi5BCi10qWly', 'vistas/img/usuarios/kIBywC/901.png', 4, 1, '2024-11-01', '2024-11-22 14:07:50', 8, 0, 5, '2024-08-20 11:31:49', 23),
(6, 'Gerardo González León', 'JbsjjF', 'ggonzalez@frasangroup.com', '$2a$07$asxx54ahjppf45sd87a5auZ5UzqwozHkSwIrRaVAVlnewSy.CcUiW', 'vistas/img/usuarios/JbsjjF/424.png', 4, 1, '2024-11-01', '2024-11-22 14:07:52', 2, 0, 6, '2024-08-20 11:32:06', 23),
(7, 'Hector Antonio  Torres Garcia', 'NirZBi', 'htorres@frasangroup.com', '$2a$07$asxx54ahjppf45sd87a5audzpR5/EtRTSl0R1On9uhGCNOoObLsSm', 'vistas/img/usuarios/NirZBi/830.png', 4, 1, '2024-11-01', '2024-12-12 14:58:44', 9, 0, 7, '2024-02-27 15:03:18', 23),
(8, 'Sin Datos', 'AVuyaP', 'sinemail@gmail.com', '$2a$07$asxx54ahjppf45sd87a5auFL5K1.Cmt9ZheoVVuudOi5BCi10qWly', 'vistas/img/usuarios/AVuyaP/412.png', 4, 1, '2024-11-01', '2024-11-22 14:08:22', 8, 0, 8, '2024-04-01 14:08:16', 23),
(9, 'Luz Elena Zamudio Villagrana', 'slh9SC', 'lzamudio@frasangroup.com', '$2a$07$asxx54ahjppf45sd87a5auKTqBIo8wY4WbGxMqPau6pxUieS777R2', 'vistas/img/usuarios/slh9SC/677.png', 4, 1, '2024-11-01', '2024-11-22 14:08:25', 0, 0, 9, '2024-01-19 17:41:58', 23),
(10, 'Marco Antonio Colin Hernandez', 'bFOgOs', 'mcolin@fransanco.com.mx', '$2a$07$asxx54ahjppf45sd87a5auFL5K1.Cmt9ZheoVVuudOi5BCi10qWly', 'vistas/img/usuarios/bFOgOs/945.png', 4, 1, '2024-11-01', '2024-11-22 14:08:27', 7, 0, 10, '2024-01-19 17:42:09', 23),
(11, 'Osvaldo Bejarano Luviano', 'vYWbLo', 'osvaldo@gmail.com', '$2a$07$asxx54ahjppf45sd87a5auT72YQ4QpQrqePgoFaXr194l3vcaddNW', 'vistas/img/usuarios/vYWbLo/156.png', 4, 1, '2024-11-01', '2024-11-22 14:08:30', 8, 0, 11, '2024-01-19 17:42:21', 23),
(12, 'Simon Vaca Velazquez', 'WANrwa', 'svaca@frasangroup.com', '$2a$07$asxx54ahjppf45sd87a5auOdzfj.qbyk/.L2GSGuAhwuoo5wHN2Om', 'vistas/img/usuarios/WANrwa/710.png', 4, 1, '2024-11-01', '2024-11-22 14:08:32', 7, 0, 12, '2024-01-19 17:42:30', 23),
(13, 'Victor Gerardo Zamudio Lozano Girsa', 'IRNQXH', 'vzamudio@frasangroup.com', '$2a$07$asxx54ahjppf45sd87a5au5oLj1I1KH3.oVsF8wkfumhwudpK0Xpu', 'vistas/img/usuarios/IRNQXH/215.png', 4, 1, '2024-10-01', '2024-12-12 10:25:00', 5, 0, 13, '2024-01-19 17:42:37', 23),
(14, 'Zita Ruiz Santos', 'TTjPTW', 'zruiz@frasangroup.com', '$2a$07$asxx54ahjppf45sd87a5auUnn6E0tmFKn9EqkG4mWBsIr8NXH/VoG', 'vistas/img/usuarios/TTjPTW/784.png', 5, 1, '2024-10-01', '2024-12-12 16:49:16', 8, 0, 14, '2024-01-19 17:42:46', 23),
(15, 'Lumo', 'JVsHNn', 'gmai@gmail.com', '$2a$07$asxx54ahjppf45sd87a5auFL5K1.Cmt9ZheoVVuudOi5BCi10qWly', 'vistas/img/usuarios/JVsHNn/158.png', 4, 1, '2024-11-01', '2024-11-22 14:08:47', 8, 0, 15, '2024-01-19 17:42:54', 23),
(16, 'Alejandro Avalos Martin', 'iVmLOT', 'aavalos@frasangroup.com', '$2a$07$asxx54ahjppf45sd87a5auedLaJjCEbMwUDcPzBozR5h/IEWOxhpO', 'vistas/img/usuarios/iVmLOT/702.png', 4, 1, '2024-11-01', '2024-11-22 14:08:50', 8, 0, 16, '2024-02-27 15:01:40', 23),
(17, 'Erick Ernesto Velarde Mantilla', 'BzvYln', 'evelarde@frasangroup.com', '$2a$07$asxx54ahjppf45sd87a5auOEzZzRFlAlpmYvIKM3bddebidYoarXa', 'vistas/img/usuarios/BzvYln/880.png', 4, 1, '2024-11-01', '2024-11-22 14:08:53', 5, 0, 13, '2024-02-27 15:02:34', 23),
(18, 'Josue Agustin Balladares', 'BS6WIl', 'jballadares@frasangroup.com', '$2a$07$asxx54ahjppf45sd87a5auJUB.85oLkQAUySpyPZ885HcKOoDzJ/i', 'vistas/img/usuarios/BS6WIl/474.png', 4, 1, '2024-11-01', '2024-12-12 14:54:04', 1, 0, 18, '2024-08-20 11:33:32', 23),
(19, 'Ricardo Corral Esparza', 'wdTKup', 'ricardo@gmail.com', '$2a$07$asxx54ahjppf45sd87a5auFL5K1.Cmt9ZheoVVuudOi5BCi10qWly', 'vistas/img/usuarios/wdTKup/775.png', 4, 1, '2024-11-01', '2024-11-22 14:08:58', 8, 0, 19, '2024-02-27 15:10:41', 23),
(20, 'Vendida', 'Co8MuD', 'vendida@gmail.com', '$2a$07$asxx54ahjppf45sd87a5auFL5K1.Cmt9ZheoVVuudOi5BCi10qWly', 'vistas/img/usuarios/Co8MuD/812.png', 4, 1, '2024-11-01', '2024-11-22 14:09:01', 8, 0, 0, '2024-02-27 15:12:43', 23),
(21, 'Fransanco', 'mvaAf0', 'frasanco@gmail.com', '$2a$07$asxx54ahjppf45sd87a5auFL5K1.Cmt9ZheoVVuudOi5BCi10qWly', 'vistas/img/usuarios/mvaAf0/495.png', 4, 1, '2024-11-01', '2024-11-22 14:09:03', 7, 0, 0, '2024-03-01 10:29:07', 23),
(22, 'Johatan Castañeda ', 'mFDv6O', 'emr_123@hotmail.com', '$2a$07$asxx54ahjppf45sd87a5auabbz1spQDjPEhQbyDTSAtzAVO9JX8Nm', 'vistas/img/usuarios/mFDv6O/116.png', 4, 1, '2024-11-01', '2024-11-22 14:09:06', 8, 0, 0, '2024-08-20 11:32:23', 23),
(23, 'Administrador del Sistema', 'admin', 'emauro@frasangroup.com', '$2a$07$asxx54ahjppf45sd87a5auXBm1Vr2M1NV5t/zNQtGHGpS5fFirrbG', 'vistas/img/usuarios/admin/383.png', 1, 1, '2024-11-22', '2024-12-12 16:55:27', 8, 0, 23, '2024-11-22 10:49:32', 23),
(24, 'Administrador Sistema1', 'tclyzP', 'emr_14@hotmail.com', '$2a$07$asxx54ahjppf45sd87a5auXBm1Vr2M1NV5t/zNQtGHGpS5fFirrbG', 'vistas/img/usuarios/tclyzP/297.png', 2, 1, '2024-11-22', '2024-12-10 17:04:21', 2, 0, 23, '2024-11-22 16:44:25', 23),
(26, 'Ezequiel Becerril', 'NEoveZ', 'ebecerril@frasangroup.com', '$2a$07$asxx54ahjppf45sd87a5auEtBDcVl4MxYLIquMl7nn1nbgzdEhw/W', 'vistas/img/usuarios/NEoveZ/286.png', 5, 1, '2024-12-05', '2024-12-12 13:59:17', 8, 0, 14, '2024-12-05 14:45:46', 23),
(27, 'Santiago Guerrero', 'wRcN8p', 'sguerrero@fransanco.com.mx', '$2a$07$asxx54ahjppf45sd87a5auX9W2CAUqZY25nsE2GVDv.mG12hS60X2', 'vistas/img/usuarios/wRcN8p/151.png', 4, 1, '2024-12-05', '2024-12-12 14:53:29', 7, 0, 12, '2024-12-05 15:11:07', 23),
(28, 'Diana Torres Green', 'VuNW7R', 'dtorres@frasangreenmexico.com', '$2a$07$asxx54ahjppf45sd87a5auSAQlrVycUMUDaue6J2avQkZhArLjeVi', 'vistas/img/usuarios/VuNW7R/438.png', 4, 1, '2024-12-05', '2024-12-10 16:54:06', 4, 0, 13, '2024-12-05 17:14:36', 23),
(29, 'Christopher Carlos Hernández', 'aRJ0oP', 'develop_code@hotmail.com', '$2a$07$asxx54ahjppf45sd87a5auByQHEDpQPI/7bOGv4KZ4S8Eiv67oi86', 'vistas/img/usuarios/aRJ0oP/394.png', 4, 1, '2024-12-05', '2024-12-12 14:50:29', 2, 0, 6, '2024-12-05 17:54:19', 23),
(30, 'KARLA SALGADO MARTINEZ', 'YSSG64', 'ksalgado@somosvisionmx.com', '$2a$07$asxx54ahjppf45sd87a5audV7EaFGMlrNSN84yOJSBdbd/KfHQcTW', 'vistas/img/usuarios/YSSG64/185.png', 4, 1, '2024-12-06', '2024-12-11 11:01:16', 1, 0, 18, '2024-12-06 09:36:20', 23),
(31, 'ASTRID CAROLINA LOYA CRUZ ', 'CNSY3O', 'aloya@frasangroup.com', '$2a$07$asxx54ahjppf45sd87a5auByqVuGJIFccIS7oKTdpvXooMmiyfh0m', 'vistas/img/usuarios/CNSY3O/690.png', 4, 1, '2024-12-06', '2024-12-12 13:51:06', 8, 0, 16, '2024-12-06 09:56:03', 23),
(32, 'Usuario Prueba Solicitante', 'QrnR1b', 'emr_123@frasangroup.com', '$2a$07$asxx54ahjppf45sd87a5auGNn8IvrZXXP8NQnqkklRJWH/oGI94hO', 'vistas/img/usuarios/QrnR1b/789.png', 4, 1, '2024-12-06', '2024-12-06 11:51:10', 8, 0, 23, '2024-12-06 11:51:10', 23),
(33, 'Manuel Alejandro Omaña Covarrubias', 'jis7cM', 'a.omana@frasangroup.com', '$2a$07$asxx54ahjppf45sd87a5au.vgWZapaILf7OgAiqCV1iT3W4SKuC5W', 'vistas/img/usuarios/jis7cM/806.png', 4, 1, '2024-12-06', '2024-12-10 16:57:54', 8, 0, 33, '2024-12-06 12:04:57', 23),
(34, 'Victor Gerardo Zamudio Lozano Green', 'N3KhLo', 'vzamudio@frasangreenmexico.com', '$2a$07$asxx54ahjppf45sd87a5au/rh7ebefEo820GD2pFlHdoXcv5OKBrm', 'vistas/img/usuarios/N3KhLo/115.png', 4, 1, '2024-12-10', '2024-12-10 17:29:09', 4, 0, 0, '2024-12-10 17:15:01', 24),
(35, 'Ernesto Ibarra', 'oSE1cr', 'compras@frasangroup.com', '$2a$07$asxx54ahjppf45sd87a5auLvY.45jisRvbqvlsoNbcONS6I0PDKbW', 'vistas/img/usuarios/oSE1cr/464.png', 4, 1, '2023-09-05', '2024-12-11 16:51:58', 8, 0, 0, '2024-12-10 17:43:43', 23);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `tb_seguros`
--

CREATE TABLE `tb_seguros` (
  `idSeguro` int NOT NULL,
  `seguro` varchar(255) NOT NULL,
  `created_at` datetime NOT NULL,
  `usuario_id` int NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Volcado de datos para la tabla `tb_seguros`
--

INSERT INTO `tb_seguros` (`idSeguro`, `seguro`, `created_at`, `usuario_id`) VALUES
(1, 'Sin Documentos', '2024-03-04 13:00:48', 26),
(2, 'N/A', '2024-03-04 13:01:08', 26),
(3, 'AFIRME', '2024-03-06 10:36:55', 26),
(4, 'GNP', '2024-03-08 13:19:21', 26),
(5, 'HDI', '2024-03-08 13:19:43', 26),
(6, 'Zurich', '2024-03-11 15:33:18', 14);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `tb_subMarca`
--

CREATE TABLE `tb_subMarca` (
  `idSubmarca` int NOT NULL,
  `submarca` varchar(250) NOT NULL,
  `created_at` datetime NOT NULL,
  `usuario_id` int NOT NULL,
  `marca_id` int NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Volcado de datos para la tabla `tb_subMarca`
--

INSERT INTO `tb_subMarca` (`idSubmarca`, `submarca`, `created_at`, `usuario_id`, `marca_id`) VALUES
(1, 'X6', '2024-02-29 12:15:56', 26, 47),
(2, 'Z4', '2024-02-29 12:16:27', 26, 47),
(3, 'Aveo', '2024-02-29 12:19:14', 26, 48),
(4, 'Tornado', '2024-02-29 12:22:13', 26, 48),
(5, 'Attitude', '2024-02-29 12:26:32', 26, 2),
(6, 'Charger', '2024-02-29 12:26:59', 26, 2),
(7, 'RAM', '2024-02-29 12:30:26', 26, 2),
(8, 'F-350', '2024-02-29 12:33:45', 26, 3),
(9, 'Edge', '2024-02-29 12:32:20', 26, 3),
(10, 'Expedition', '2024-02-29 12:32:54', 26, 3),
(11, 'F-550', '2024-02-29 12:33:28', 26, 3),
(12, 'Transit', '2024-02-29 12:35:23', 26, 3),
(13, 'Ranger', '2024-02-29 12:35:50', 26, 3),
(14, 'Tracto Chasis Cabina Bussines Class', '2024-02-29 12:39:56', 26, 49),
(15, 'Chasis Cabina M2', '2024-02-29 12:40:41', 26, 49),
(16, 'Vactor', '2024-02-29 12:41:04', 26, 49),
(17, 'FRHT', '2024-02-29 12:43:18', 26, 49),
(18, 'Cargotrac', '2024-02-29 12:46:17', 26, 31),
(19, 'Jeta', '2024-02-29 12:48:16', 26, 34),
(20, 'Willys', '2024-02-29 12:48:52', 26, 35),
(21, 'Escalade', '2024-02-29 12:49:58', 26, 39),
(22, 'Hilux', '2024-02-29 12:53:19', 26, 17),
(23, 'Yaris', '2024-02-29 12:53:46', 26, 17),
(24, 'Corolla', '2024-02-29 12:54:18', 26, 17),
(25, 'CHR', '2024-02-29 12:56:10', 26, 17),
(26, 'Prius C', '2024-02-29 12:56:47', 26, 17),
(27, 'Prius Sedan', '2024-02-29 12:57:24', 26, 17),
(28, 'HIACE', '2024-02-29 12:59:14', 26, 17),
(29, 'Tundra', '2024-02-29 12:59:33', 26, 17),
(30, 'Postar Premium', '2024-02-29 13:17:00', 26, 25),
(31, 'Durastar', '2024-02-29 13:18:23', 26, 25),
(32, 'Sienna', '2024-02-29 13:27:36', 26, 17),
(33, 'Harvester', '2024-02-29 14:25:35', 26, 25),
(34, 'Caterpillar', '2024-02-29 14:27:42', 26, 1),
(35, 'Fruehauf', '2024-02-29 14:28:42', 26, 4),
(36, 'Generac Mobile Products LLC', '2024-02-29 14:29:40', 26, 5),
(37, 'Hilti', '2024-02-29 14:30:04', 26, 6),
(38, 'Husqvarna', '2024-02-29 14:31:26', 26, 7),
(39, 'JLG', '2024-02-29 14:31:58', 26, 9),
(40, 'Kubota', '2024-02-29 14:32:32', 26, 10),
(41, 'Magnum Power Products,LLC', '2024-02-29 14:33:25', 26, 11),
(42, 'Mercedes Benz', '2024-02-29 14:34:08', 26, 12),
(43, 'Mustang', '2024-02-29 14:34:47', 26, 13),
(44, 'Newholland', '2024-02-29 14:35:49', 26, 14),
(45, 'Nissan', '2024-02-29 14:36:14', 26, 15),
(46, 'Titan Cool Inc', '2024-02-29 14:36:50', 26, 16),
(47, 'Vermeer', '2024-02-29 14:37:47', 26, 18),
(48, 'Volvo', '2024-02-29 14:38:25', 26, 19),
(49, 'Yamaha', '2024-02-29 14:38:53', 26, 20),
(50, 'Jhon Deere', '2024-02-29 14:39:22', 26, 21),
(51, 'Elgin Pelikan', '2024-02-29 14:39:52', 26, 22),
(52, 'Bobcat', '2024-02-29 14:40:25', 26, 23),
(53, 'Hypac', '2024-02-29 14:41:08', 26, 24),
(54, 'Hyundai', '2024-02-29 14:41:58', 26, 26),
(55, 'Dynapac', '2024-02-29 14:42:58', 26, 27),
(56, 'Barnes Pump', '2024-02-29 14:43:50', 26, 28),
(57, 'Fueukawa', '2024-02-29 14:47:39', 26, 29),
(58, 'Vilchis', '2024-02-29 14:48:10', 26, 30),
(59, 'Wacker', '2024-02-29 14:50:27', 26, 32),
(60, 'Ingersoll Rand', '2024-02-29 14:51:22', 26, 33),
(62, 'Komatsu', '2024-02-29 14:53:13', 26, 36),
(63, 'W-RES', '2024-02-29 14:56:30', 26, 37),
(64, 'BOMAG', '2024-02-29 14:56:54', 26, 38),
(65, 'Shantui Vandel', '2024-02-29 14:57:40', 26, 40),
(66, 'Navistar', '2024-02-29 14:58:14', 26, 41),
(67, 'ROLLS ROYCE', '2024-02-29 14:58:41', 26, 42),
(68, 'LEXUS', '2024-02-29 14:59:12', 26, 43),
(69, 'Clark', '2024-02-29 14:59:35', 26, 45),
(70, 'Mitsubishi', '2024-02-29 15:00:20', 26, 46),
(71, 'Italika', '2024-02-29 15:21:52', 26, 8),
(72, 'Krupp', '2024-02-29 15:22:59', 26, 50),
(73, 'American Signal', '2024-03-01 11:49:12', 26, 44),
(74, 'Case', '2024-03-01 12:58:09', 26, 51),
(75, 'Liebherr', '2024-03-01 13:17:55', 26, 44),
(76, 'Sprinter', '2024-03-01 13:20:36', 26, 12),
(77, 'G500', '2024-03-01 13:20:54', 26, 12),
(78, 'Montacargas', '2024-03-01 13:44:39', 26, 17),
(79, 'Yale', '2024-03-01 13:53:32', 26, 52),
(80, 'Internacional', '2024-03-01 13:57:37', 26, 53),
(81, 'Forte', '2024-03-01 14:08:31', 26, 54),
(82, 'No visible', '2024-03-01 14:17:09', 26, 55),
(83, 'MAMUT T80', '2024-10-23 16:57:18', 26, 56);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `tb_tipoTransporte`
--

CREATE TABLE `tb_tipoTransporte` (
  `idTransporte` int NOT NULL,
  `transporte` varchar(255) NOT NULL,
  `created_at` datetime NOT NULL,
  `usuario_id` int NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Volcado de datos para la tabla `tb_tipoTransporte`
--

INSERT INTO `tb_tipoTransporte` (`idTransporte`, `transporte`, `created_at`, `usuario_id`) VALUES
(1, 'Ambulancia', '2024-02-28 16:34:01', 14),
(2, 'Anuncios viales', '2024-02-28 16:34:24', 14),
(3, 'Astilladora', '2024-02-28 16:34:48', 14),
(4, 'Automovil', '2024-02-28 16:35:16', 14),
(5, 'Barredora', '2024-02-28 16:36:01', 14),
(6, 'Bote Triturador', '2024-02-28 16:36:37', 14),
(7, 'Camión', '2024-08-20 11:34:05', 14),
(8, 'Camioneta', '2024-02-28 16:39:47', 14),
(9, 'Cargador', '2024-02-28 16:40:31', 14),
(10, 'Carrito de Golf', '2024-02-28 16:41:11', 14),
(11, 'Casa Rodante', '2024-02-28 16:41:45', 14),
(12, 'Compactador', '2024-02-28 16:42:22', 14),
(13, 'Desazolve', '2024-02-28 16:43:08', 14),
(14, 'Excavadora', '2024-02-28 16:43:41', 14),
(15, 'FURGON', '2024-02-28 16:44:17', 14),
(16, 'LUMINARIA', '2024-02-28 16:44:44', 14),
(17, 'Martillo Hidráulico', '2024-08-20 11:38:23', 14),
(18, 'Minicargador', '2024-02-28 16:46:03', 14),
(19, 'Mini Retro Excavadora', '2024-02-28 16:46:58', 14),
(20, 'Minivibrocompactador', '2024-02-28 16:48:16', 14),
(21, 'Montacargas', '2024-02-28 16:49:00', 14),
(22, 'Motocicleta', '2024-02-28 16:49:35', 14),
(23, 'Moto Conformadora', '2024-02-28 16:50:27', 14),
(24, 'Pinta Rayas', '2024-02-28 16:51:30', 14),
(25, 'Pipa', '2024-02-28 16:55:03', 14),
(26, 'Plataforma de elevación', '2024-08-20 11:38:42', 14),
(27, 'Remolque', '2024-02-28 16:56:35', 14),
(28, 'Retroexcavadora', '2024-02-28 16:57:42', 14),
(29, 'Rodillo Mono cilíndrico', '2024-08-20 11:39:02', 14),
(30, 'Topador Frontal', '2024-02-28 16:58:56', 14),
(31, 'Tractor', '2024-02-28 16:59:28', 14),
(32, 'Tráiler', '2024-08-20 11:39:21', 14),
(33, 'Trascabo', '2024-02-28 17:01:14', 14),
(34, 'Vehiculo de Servicio', '2024-08-20 11:39:49', 14),
(36, 'Grúa', '2024-08-20 11:34:41', 14),
(37, 'Convertidores ', '2024-03-05 11:33:14', 14),
(38, 'Maquinaria Ligera', '2024-03-05 11:37:48', 14),
(39, 'Maquinaria Pesada', '2024-04-01 11:02:19', 14);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `tb_tramites`
--

CREATE TABLE `tb_tramites` (
  `idTramite` int NOT NULL,
  `tramite` varchar(255) NOT NULL,
  `created_at` datetime NOT NULL,
  `usuario_id` int NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Volcado de datos para la tabla `tb_tramites`
--

INSERT INTO `tb_tramites` (`idTramite`, `tramite`, `created_at`, `usuario_id`) VALUES
(1, 'Cambio de Propietario con mismas placas', '2024-06-06 11:11:23', 14),
(2, 'Cambio de propietario y placas', '2024-06-06 11:11:49', 14),
(3, 'Alta de vehículos con placas de otra entidad', '2024-08-20 11:42:09', 14),
(4, 'Alta de vehículos con placas de otra entidad', '2024-08-20 11:42:25', 14),
(5, 'Alta de vehículos usados (Sin antecedente de registro)', '2024-08-20 11:42:41', 14),
(6, 'Renovación de placas en el Edo de Méx', '2024-08-20 11:43:02', 14),
(7, 'BAJA DE PLACAS ', '2024-12-06 17:33:52', 14);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `tb_vehiculos`
--

CREATE TABLE `tb_vehiculos` (
  `idVehiculo` int NOT NULL,
  `folio` varchar(50) NOT NULL,
  `eco` varchar(100) NOT NULL,
  `propietario_id` int NOT NULL,
  `nombreTarjeta` varchar(255) NOT NULL,
  `facturaOrigen` varchar(255) NOT NULL,
  `gps` varchar(5) NOT NULL,
  `duplicadoLlaves` varchar(5) NOT NULL,
  `clase_id` int NOT NULL,
  `marca_id` int NOT NULL,
  `subMarca_id` int NOT NULL,
  `transporte_id` int NOT NULL,
  `serie` varchar(100) NOT NULL,
  `modelo` varchar(255) NOT NULL,
  `anio` varchar(20) NOT NULL,
  `placas` varchar(50) NOT NULL,
  `numTarjeta` varchar(100) NOT NULL,
  `combustible_id` int NOT NULL,
  `motor` varchar(150) NOT NULL,
  `km` varchar(50) NOT NULL,
  `hrs` varchar(50) NOT NULL,
  `color` varchar(100) NOT NULL,
  `estadoFisico` varchar(50) NOT NULL,
  `estadoOperativo` varchar(50) NOT NULL,
  `fechaCompra` date NOT NULL,
  `noFactura` varchar(100) NOT NULL,
  `seguro_id` int NOT NULL,
  `proveedorCompra` varchar(255) NOT NULL,
  `ubicacion` varchar(100) NOT NULL,
  `estatus` varchar(50) NOT NULL,
  `descripcionVehiculo` varchar(255) NOT NULL,
  `accesoriosVehiculo` varchar(255) NOT NULL,
  `stock` int NOT NULL,
  `responsable_id` int NOT NULL,
  `observaciones` text NOT NULL,
  `created_at` datetime NOT NULL,
  `usuario_id` int NOT NULL,
  `area_id` int NOT NULL,
  `usuario_asignado_id` int NOT NULL,
  `unidad_id` int NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Volcado de datos para la tabla `tb_vehiculos`
--

INSERT INTO `tb_vehiculos` (`idVehiculo`, `folio`, `eco`, `propietario_id`, `nombreTarjeta`, `facturaOrigen`, `gps`, `duplicadoLlaves`, `clase_id`, `marca_id`, `subMarca_id`, `transporte_id`, `serie`, `modelo`, `anio`, `placas`, `numTarjeta`, `combustible_id`, `motor`, `km`, `hrs`, `color`, `estadoFisico`, `estadoOperativo`, `fechaCompra`, `noFactura`, `seguro_id`, `proveedorCompra`, `ubicacion`, `estatus`, `descripcionVehiculo`, `accesoriosVehiculo`, `stock`, `responsable_id`, `observaciones`, `created_at`, `usuario_id`, `area_id`, `usuario_asignado_id`, `unidad_id`) VALUES
(1, '0001', '1', 14, 'N/A', 'Sin documentos', '0', '0', 4, 22, 51, 5, '5274D', 'S', '0', 'Sin placas', 'Sin documentos', 1, 'Sin datos', '0', '0', 'Blanco con rojo', 'Bueno', 'Bueno', '0001-01-01', 'Sin documentos', 1, 'Sin documentos', 'Terreno Coyotepec', 'Activo', 'Barredora doble volante', 'Sin datos', 1, 12, 'No cuenta con documentación. Requiere dos baterías. llantas delanteras (2). cambio de aceite hidráulico y pintura... En Renta a partir del 4 de Agosto de 2021 Tandem Ride Pachuca Físicamente en Tandem Pachuca durante inventario Dic 2023 funcionando pero no se usa. Físicamente durante inventario de Febrero 2024 en Tandem Pachuca. En Terreno Coyotepec Diciembre 2024 de acuerdo a inventario.', '2024-12-12 11:35:26', 23, 8, 27, 7),
(4, '0004', '6', 7, 'FRANCISCO JAVIER SANTOS ARREOLA', '123035842007817', '0', '0', 4, 3, 11, 13, '1FDAF56F31EA15572', 'F-550', '2001', 'N/A', 'CAC8509579', 1, 'Sin datos', '0', '0', 'Blanco', 'Regular', 'Regular', '2012-12-07', 'Sin documentos', 1, 'Sin documentos', 'Terreno Coyotepec', 'Activo', 'Vac-Con Desasolve', 'Sin datos', 1, 12, 'Cuenta con pedimento y titulo originales. Requiere reparación pendiente a motor inyectores dañados...en las mismas condiciones de acuerdo a inventario del 6 de diciembre de 2023. En Terreno Coyotepec Febrero 2024 de acuerdo a inventario descompuesto. En Terreno Coyotepec diciembre 2024 de acuerdo a inventario descompuesto.', '2024-12-12 11:35:43', 23, 8, 27, 7),
(5, '0005', '9', 14, 'Sin documentos', 'Sin documentos', '0', '0', 4, 55, 82, 27, '16V6X2023D2670077', 'No visible', '0', 'Sin placas', 'Sin documentos', 7, 'N/A', '0', '0', 'Negro', 'Regular', 'Regular', '2017-01-01', 'Sin documentos', 1, 'Sin documentos', 'Terreno Coyotepec', 'Activo', 'Remolque cuello de ganso', 'Sin datos', 1, 12, 'Sin documentos. Requiere de reparación a sistema eléctrico y de pintura...en las mismas condiciones de acuerdo a inventario del 6 de dic 2023. En Terreno Coyotepec Febrero 2024 de acuerdo a inventario. En Terreno Coyotepec Mayo 2024 de acuerdo a inventario. En Terreno Coyotepec diciembre 2024 de acuerdo a inventario. En Terreno Coyotepec Diciembre 2024 de acuerdo a inventario.', '2024-12-12 11:35:59', 23, 8, 27, 7),
(6, '0006', '10', 14, 'Sin documentos', 'Sin documentos', '0', '0', 4, 55, 82, 25, 'Sin datos', 'No visible', '0', 'Sin placas', 'Sin documentos', 7, 'N/A', '0', '0', ' Sin datos', 'Regular', 'Regular', '0000-00-00', 'Sin documentos', 1, 'Sin documentos', 'GIRSA Tlane', 'Activo', 'Sin datos', 'Sin datos', 1, 13, 'Sin documentos. Salida 12-6-\r\n12. Requiere de pintura... Se adapto para casa de resguardo en Relleno Sanitario Fisicamente en GIRSA Tlalnepantla al realizar inventario de Diciembre 2023. Fisicamente  en GIRSA inventario Febrero 2024', '2024-12-12 11:36:25', 23, 5, 17, 5),
(7, '0007', '11', 14, 'Sin documentos', 'Sin documentos', '0', '0', 4, 55, 82, 25, '49TSB1428D1010039', 'No visible', '0', 'Sin placas', 'Sin documentos', 7, 'N/A', '0', '0', ' Sin datos', 'Bueno', 'Bueno', '0000-00-00', 'Sin documentos', 1, 'Sin documentos', 'Sta Ma Huecatitla', 'Activo', 'Sin datos', 'Sin datos', 1, 11, 'Sin documentos. Salida 12/6/2019. Físicamente en Casa Sta Ma Huecatitla durante inventario de Dic 2023', '2024-11-13 18:01:03', 14, 8, 0, 0),
(8, '0008', '12', 14, 'Sin documentos', '183010688011984', '0', '0', 2, 1, 34, 13, 'CAT0330CVDKY04039', '330C', '0', 'N/A', 'N/A', 1, 'Sin datos', '0', '0', 'Sin Datos', 'Regular', 'Regular', '2018-11-07', 'Sin documentos', 2, 'Desarrollo industrIaL valkenn SA de CV', 'Con el Cliente', 'Renta', 'La Excavadora de orugas esta equipada con un potente motor Caterpillar con el cual puede alcanzar hasta 181kW o 242PS. La maquina tiene un peso de 32.4t. La Caterpillar 330 C LN pertenece al segmento mÃ¡s grande de las excavadoras de orugas. El modelo s', 'Sin datos', 1, 12, 'Cuenta con factura y pedimento no. 18301068811984. proporcionados por el Sr. Francisco Santos A. Luis Correa. Requiere de reparación cambio de buje de toda la pluma. apretar zapatas. mole. servicio a motor. giro de bujes de cadena. cambio de roles superiores (2) y dos inferiores. servicio hidráulico. tapicerí­a y perno de bote. Sale 16 de febrero de 2022 a San Andres Tuxtla se entrega a Pedro Olivares Cortes', '2024-03-11 00:00:00', 14, 0, 0, 0),
(9, '0009', '13', 1, 'Sin documentos', '163035846000992', '0', '0', 2, 1, 34, 12, '91P847', '815', '1974', 'N/A', 'N/A', 1, 'Sin datos', '0', '0', 'Sin datos', 'Regular', 'Regular', '2019-05-23', '102', 2, 'GVA MAQUINARIA SA  DE CV', 'GIRSA DEL VALLE DE MEXICO', 'Activo', 'TRACTOR COMPACTADOR PATA DE CABRA', 'CON RIPPER', 1, 3, 'Factura original y copia de pedimento. Proveedor GVA Maquinaria S.A. DE C.V. $500.000.00 Requiere de reparación de los gatos swing. fugas aceite de transmision por yugos.cambiar tornillos de brazo de cuchillas. sondear radiador. reten de aguenal delantero. fugs en disel y de aire y tapón de disel... Sale en renta a Miguel Valdez en Atitalaquia 29 de Octubre de 2021 Regresa a Patio Coyotepec de Atitalaquia 1 de diciembre de 2021 Se encuentra físicamente en GIRSA Valle de México durante inventario Dic 2023. Fisicamente en GIRSA Valle de México durante inventario de Febrero de 2024. La maquina esta parada indica Daniel Cadeñanez que no le sirve para la operación', '2024-11-13 17:44:47', 26, 6, 0, 0),
(10, '0010', '15', 1, 'Sin documentos', '123035842007816', '0', '0', 2, 49, 14, 5, '1FVABTBV52HKD7310', 'F70', '2002', 'Sin placas', 'Sin documentos', 1, 'FL70', '0', '0', 'Sin datos', 'Regular', 'Regular', '2012-12-07', 'Sin documentos', 1, 'DIA IMPORT EXPORT LLC', 'Con el Cliente', 'Renta', 'CAMION BARREDORA FREIGHTLINER FL70 CON MOTOR DIESEL CUMMINS B5.9 DE 6 CILINDROS. TRANSMISION AUTOMATICA', 'Sin datos', 1, 12, 'CUENTA CON PEDIMENTO Y TITULO ORIGINAL. 162961.0 Horas. Requiere servicio eléctrico. baterías (2). servicio a dos motores. pintura y reparación de las chapas de las puertas. Sale para Nicolas Romero el 7 de diciembre de 2019 en prestamo', '2024-12-12 11:36:59', 23, 8, 27, 7),
(11, '0011', '17', 14, 'Sin documentos', 'Sin documentos', '0', '0', 2, 23, 52, 17, '515815054', '753', '0', 'Sin placas', 'Sin documentos', 1, 'Sin datos', '0', '0', 'Amarillo', 'Regular', 'Regular', '0000-00-00', 'Sin documentos', 1, 'Comercializadora  Barrera', 'Terreno Coyotepec', 'Activo', 'MINICARGADOR BOBCAT MODELO 753 INGERSON RAND', 'Sin datos', 1, 12, 'Factura a nombre de Ma. Magdalena Lozano S. no. 2061 5103.0 Has. Requiere bateria. pintura. reparacion de brazo derecho y reparacion de bote... Sale al relleno de Tlanepantla el 17 de Nov de 2019 Regresa a Taller en Coyotepec del Relleno Sanitario 14 de Enero de 2021 1 de Marzo 2021 se presta para obra en Relleno Sanitario En Terreno Coyotepec de acuerdo a inventario del 6 de diciembre de 2023. En Terreno Coyotepec Febrero 2024 de acuerdo a inventario.En Terreno Coyotepec Diciembre 2024 de acuerdo a inventario.', '2024-12-12 11:37:17', 23, 8, 27, 7),
(12, '0012', '18', 1, 'Sin documentos', '143035844000339', '0', '0', 2, 24, 53, 12, '109A22901551', 'C784A', '0', 'Sin placas', 'Sin documentos', 1, 'Cummins', '0', '0', 'Sin datos', 'Regular', 'Regular', '2014-01-28', '33 folio F', 1, 'IMPORTACIONES Y EXPORTACIONES ED SINAI SA DE CV', 'Terreno Coyotepec', 'Activo', 'COMPACTADOR DOBLE RODILLO USADO MODELO C784A', 'Sin datos', 1, 12, 'Cuenta con factura original de Importaciones y Exportaciones El Sinai de $ 156.032.38 y copia de pedimento. Requiere baterí­a. pintura y servicio eléctrico... En Terreno Coyotepec de acuerdo a inventario del 6 de diciembre de 2023. En Terreno Coyotepec Febrero 2024 de acuerdo a inventario', '2024-03-11 00:00:00', 14, 0, 0, 0),
(13, '0013', '19', 12, 'Sin documentos', 'Sin documentos', '0', '0', 2, 19, 48, 7, '5549', '5350 B', '0', 'Sin placas', 'Sin documentos', 1, 'TD70G', '0', '0', 'Sin datos', 'Regular', 'Regular', '2016-12-01', '222 serie A', 1, 'ACEROSLICEAGA S DE RL DE CV', 'GIRSA DEL VALLE DE MEXICO', 'Activo', 'FUERA DE CARRETERA 6X6 MODELO 5350', 'Sin datos', 1, 3, 'Cuenta con factura original de Aceros Liceaga S. de RL de C. V. a nombre de Simón Vaca Velazquez con un monto de $ 215.000.00 y contrato de compra venta. Requiere empacar gatos direccion. reparar mofle y silenciador. reparar base espejos laterales y dos baterias... En GIRSA Valle de México durante inventario dic 2023 en funcionamiento. Fisicamente en GIRSA Valle de México durante inventario de Febrero de 2024', '2024-11-13 17:54:36', 26, 6, 0, 0),
(14, '0014', '20', 1, 'CONSTRUCTORA Y DESARROLLADORA GRUPO FRASAN', '103035840000387', '0', '0', 4, 25, 33, 36, '1HTLAHEM2GHA22667', 'S 1600', '1986', 'LD07510', 'CAC8509575', 1, 'Sin datos', '0', '0', 'Blanco', 'Regular', 'Regular', '2010-01-19', 'Sin documentos', 1, 'Sin documentos', 'GIRSA Tlane', 'Activo', 'Vehículo automovil tipo camión grua. aislada de tipo canastilla de accionamiento hidraulico usada marca International Harvester.', 'Equipo de grua marca Hi-Ranger modelo 4FI-35PBI', 1, 13, 'Cuenta con pedimento original. copia de factura a nombre de A. Avril Kenny Calzada con monto de $78.867.00. de fecha 01/12/2016. Requiere de dos bacterias y servicio eléctrico... Sale prestada a Mpio de Nicolás Romero 17 de Nov de 2019 Regresa a Terreno el miércoles 1 de Abril de 2020 Sale 7 de Abril a empresa Ecologí­a y expertos en desarrollo sustentable P&R S de RL de CV en calidad de Renta indefinida Regresa a terreno Coyotepec 6 de Julio de 2020 Se entrega a Ecologí­a 10 de Febrero de 2021 Regresa de Ecologí­a 19 de Julio de 2021 a Terreno en Coyotepec Marco Colin reporta que se encuentra en Mpio Cuautitlán Izcalli de acuerdo a inventario del 6 de dic de 2023. Fisicamente  en GIRSA inventario Febrero 2024', '2024-12-12 11:37:40', 23, 4, 28, 4),
(15, '0015', '21', 14, 'Sin documentos', 'Sin documentos', '0', '0', 2, 55, 82, 6, 'Sin datos', 'No visible', '0', 'N/A', 'N/A', 1, 'Sin datos', '0', '0', 'Naranja', 'Bueno', 'Bueno', '0000-00-00', 'Sin documentos', 2, 'Sin documentos', 'Terreno Coyotepec', 'Activo', 'Bote triturador Allu', 'Sin datos', 1, 12, 'Sin documentos. A cambio excavadora marca Jhon Dear 320. En Terreno Coyotepec Febrero 2024 de acuerdo a inventario. En Terreno Coyotepec diciembre 2024 de acuerdo a inventario.', '2024-12-12 11:38:00', 23, 8, 27, 7),
(16, '0016', '27', 1, 'Sin documentos', '122439392036034', '0', '0', 4, 3, 8, 8, '1FDSF30L53ED60144', 'F-350', '2003', 'LD07500', 'CAC8509251', 2, 'Sin datos', '0', '0', 'Blanca', 'Bueno', 'Bueno', '2012-08-23', 'Sin documentos', 1, 'Sin documentos', 'GIRSA Tlane', 'Activo', 'submarca: F/350 T/M 4VEL.XL 5.0 L.MPFI V8 TELA', 'Sin datos', 1, 13, 'Cuenta con pedimento original y formato de pago de autorización del gobierno del estado de México. Requiere servicio a motor... Físicamente en GIRSA Tlalnepantla al momento de hacer inventario Diciembre 2023. Fisicamente  en GIRSA inventario Febrero 2024', '2024-12-12 11:38:22', 23, 5, 17, 5),
(17, '0017', '39', 8, 'Sin documentos', '183010688007771', '0', '0', 3, 55, 82, 10, 'EGCAHE4297CN03899', 'HUMMER H3', '2015', 'Sin placas', 'Sin documentos', 4, 'Sin datos', '0', '0', 'Café', 'Bueno', 'Bueno', '2018-08-17', 'Sin documentos', 1, 'JESSIE WAYNE WALLCER', 'Club de Golf Hacienda', 'Activo', 'Sin datos', 'Sin datos', 1, 11, 'Cuenta con pedimento y certificado originales. Se encuentra en la casa del Lic. Francisco Santos A. Físicamente en Casa Club de golf durante inventario de Dic 2023 indica Osvaldo que requiere Ajuste por que vibra', '2024-10-11 11:42:49', 26, 0, 0, 0),
(18, '0018', '41', 1, 'Sin documentos', '033035913007226', '0', '0', 2, 1, 34, 30, '4AB00792', 'D7H', '0', 'Sin placas', 'Sin documentos', 1, '3306DI', '0', '0', 'Sin datos', 'Bueno', 'Bueno', '2019-04-03', '99', 1, 'GVA MAQUINARIA SA  DE CV', 'GIRSA Tlane', 'Activo', 'CATERPILLAR D7H (2) MITSUBISHI LTD. SAGAMIHARA. KANAGAWA SERIAL 10Z08525', 'Sin datos', 1, 13, 'Cuenta con factura original de GVA Maquinaria S.A. DE C.V. $ 116.000.00. Pedimento original y factura de venta de piso... Físicamente en GIRSA Tlalnepantla deshuesado y se están usando partes para refacciones durante inventario de Diciembre 2023. Físicamente  en GIRSA inventario Febrero 2024', '2024-12-12 11:40:15', 23, 5, 17, 5),
(19, '0019', '42', 1, 'Sin documentos', '171738857006556', '0', '0', 2, 1, 34, 12, '87X01230', '826C', '0', 'Sin placas', 'Sin documentos', 1, '3406B', '0', '0', 'Sin datos', 'Bueno', 'Bueno', '2019-04-03', 'F-72', 1, 'ABASTECEDORA INDUSTRIAL VIESA SA DE CV', 'GIRSA Tlane', 'Activo', 'Compactador 826C (1)', 'Sin datos', 1, 13, 'Cuenta con factura original de Abastecedora Industrial Viesa S. DE R.L. DE C.V. de $ 846.800.000. Copia de pedimento y comprobante fiscal... Físicamente en GIRSA Tlalnepantla deshuesado y se están usando partes para refacciones durante inventario de Diciembre 2023. Físicamente  en GIRSA inventario Febrero 2024', '2024-12-12 11:40:32', 23, 5, 17, 5),
(20, '0020', '43', 1, 'Sin documentos', '063012976030976', '0', '0', 2, 1, 34, 30, '79Z05564', 'D7H', '0', 'Sin placas', 'Sin documentos', 1, 'Sin datos', '0', '0', 'Sin datos', 'Bueno', 'Bueno', '2019-04-23', '642', 1, 'HYGY COMPAÑIA SA DE CV ', 'GIRSA Tlane', 'Activo', 'Topador Frontal D7H (1)PIN 3NB02696', 'Ripper sin marca', 1, 13, 'Cuenta con factura original de HYGY COMPAÑIA S.A. DE C.V. de $ 300.000.00. Pedimento original. Físicamente en GIRSA Tlalnepantla durante inventario de Diciembre 2023. Físicamente  en GIRSA inventario Febrero 2024', '2024-12-12 11:41:00', 23, 5, 17, 5),
(21, '0021', '59', 3, 'Sin documentos', 'Sin documentos', '0', '0', 2, 1, 34, 28, 'CAT0416ECMFG12830', '416E', '2016', 'Sin placas', 'Sin documentos', 1, 'Sin datos', '0', '0', 'AMARILLO', 'Bueno', 'Bueno', '2019-06-28', '32', 1, 'CONSTRUCTORA Y DESARROLLADORA GRUPO FRASAN SA DE CV', 'GIRSA Tlane', 'Activo', 'RETROEXCAVADORA CAT416', 'Sin datos', 1, 13, 'Cuenta con factura original de ARRENDADORA LUMO S.A. DE C.V. con un monto de $1.300.000.00... Se factura a GIRSA 31 de mayo de 2022 Fact A 496 Físicamente en GIRSA Tlalnepantla durante inventario Dic 2023. Físicamente en GIRSA inventario febrero 2024', '2024-12-12 11:41:29', 23, 5, 17, 5),
(22, '0022', '60', 14, 'Sin documentos', '030708453013185', '0', '0', 2, 1, 34, 12, '87X01454', '826C', '0', 'Sin placas', 'Sin documentos', 1, 'Sin datos', '0', '0', 'Sin datos', 'Bueno', 'Bueno', '2003-03-25', 'Sin documentos', 1, 'HERMANOS ARAMBULA SA DE CV', 'GIRSA Tlane', 'Activo', 'COMPACTADOR 826C PIN 9C5073', 'Sin datos', 1, 13, 'Cuenta con factura original de HERMANOS ARAMBULA S.A. DE C.V. con un monto de $69.000.00 de fecha 21/07/2003. copia de pedimento... Físicamente en GIRSA Tlalnepantla durante inventario de diciembre 2023. Físicamente en GIRSA inventario febrero 2024', '2024-12-12 11:41:54', 23, 5, 17, 5),
(23, '0023', '76', 1, 'CONSTRUCTORA Y DESARROLLADORA GRUPO FRASAN', 'Sin documentos', '1', '1', 3, 20, 49, 22, 'ME1RG4256J2019162', 'FZ25', '2018', '1Z8XE', 'MTC7841069', 2, 'Yamaha 250', '0', '0', 'Azul', 'Bueno', 'Bueno', '2019-06-25', 'EMNC002077', 1, 'Soluciones sobre Ruedas SA de CV', 'Bodega Xhala', 'Activo', 'Submarca: HASTA 250 CC FZ25', 'Sin datos', 1, 12, 'Cuenta con carta-factura no. EMNC002077 de Soluciones sobre ruedas S.A. de C.V. de fecha 25 de junio del 2019. Con un monto de $70.998.99. En bodega Xhala 6 de Dic 2023 de acuerdo a Inventario 15.810 Km. En bodega Xhala Febrero 2024 de acuerdo a Inventario', '2024-12-12 11:42:24', 23, 7, 27, 7),
(24, '0024', '87', 1, 'Sin documentos', '183035848006439', '0', '0', 2, 1, 34, 30, '5BF00629', 'D7H', '1988', 'Sin placas', 'Sin documentos', 1, 'Sin datos', '0', '0', 'Sin datos', 'Bueno', 'Bueno', '2019-10-30', 'A 223', 1, 'ALDO VALDEZ AGUIRRE IMAQAVA', 'Terreno Coyotepec', 'Activo', 'TRACTOR TOPADOR FRONTAL D7H (3) USADO C/RIPPER INTEGRADO SERIAL 08Z45654', 'Ripper sin Marca. sin modelo ', 1, 12, 'Se cuenta con factura de compra por $200.000. contrato de compra venta del 25 de Septiembre de 2019. copia de Pedimento 18 30 3584 8006439 y factura de compra del proveedor de Dic del 2018 Regresa a Terreno de Coyotepec 29 de junio de 2020 Se presta refacción de mando formal para tractor D7H 08245654 - 2we00623 al Relleno Sanitario en Tlalnepantla Descompuesto se utiliza para refacciones de acuerdo a inventario 6 de dic 2023. En Terreno Coyotepec febrero 2024 de acuerdo a inventario', '2024-12-12 11:53:26', 23, 8, 27, 7),
(25, '0025', '89', 3, 'Sin documentos', '19 30 35849006241', '0', '0', 2, 1, 34, 30, '79Z01854', 'D7H', '0', 'Sin placas', 'Sin documentos', 1, 'Sin datos', '0', '0', 'VERDE', 'Bueno', 'Bueno', '2019-12-17', '222', 1, 'CONSTRUCTORA Y DESARROLLADORA GRUPO FRASAN SA DE CV', 'GIRSA Tlane', 'Activo', 'Tractor Topador Frontal de Orugas usado sin Ripper/sin cuchillas MODELO D7H', 'Ripper trasero sin marca', 1, 13, 'Sale del Terreno de Coyotepec 15 de abril a Relleno Sanitario Tlalnepantla Se factura a GIRSA 31 de mayo de 2022 Fact A 497 Físicamente en GIRSA Tlalnepantla durante inventario de diciembre 2023. Físicamente en GIRSA inventario febrero 2024', '2024-12-12 11:53:50', 23, 5, 17, 5),
(26, '0026', '90', 1, 'Sin documentos', '19 30 35849006286', '0', '0', 2, 1, 34, 23, 'CAT0143HLAPN01024', '143H', '2006', 'Sin placas', 'Sin documentos', 1, 'Caterpila 3176C', '0', '0', 'Sin datos', 'Bueno', 'Bueno', '2019-12-13', 'Sin documentos', 1, 'HECTOR LUIS GOMEZ GOMEZ TRHEGO', 'Con el Cliente', 'Renta', 'Motoconformadora (Niveladora) Usada con Ripper integrado', 'Ripper Sin Marca. sin modelo Serie 9W3155-08', 1, 12, 'Sale en Renta para AFCA Construcción más Comercialización 28 de enero de 2020 Regresa a Terreno de Coyotepec de AFCA 1 de agosto de 2020 Sale a Relleno Sanitario 8 de septiembre de 2020 En obra Relleno Sanitario a partir de junio del 2021 (Ficha técnica 66) En Renta Nicolas Romero 8 de marzo de 2023 Inventario diciembre 2023 en funcionamiento en Obras Publicas en Nicolas Romero', '2024-12-12 11:54:18', 23, 8, 27, 7),
(27, '0027', '93', 3, 'Sin documentos', '19 30 3584 9006290', '0', '0', 2, 26, 54, 14, 'HHKHZ701CC0000318', 'ROBEX 250LC-9', '2012', 'Sin placas', 'Sin documentos', 1, 'Sin datos', '0', '0', 'Sin datos', 'Bueno', 'Bueno', '2019-12-13', 'Sin documentos', 1, 'CONSTRUCTORA Y DESARROLLADORA GRUPO FRASAN SA DE CV', 'GIRSA Tlane', 'Activo', 'EXCAVADORA HYUNDAI DE ACONDICIONAMIENTO HIDRAULICO USADA MONTADA SOBRE ORUGAS', 'Sin datos', 1, 13, 'Sale en renta para Ayuntamiento de Nicolas Romero 22 de enero de 2020. Sale a Relleno en cambio fisico por Lovol 220D 1 de febrero de 2020. Indica movimientos Simon Vaca. no tenemos orden de salida Se factura a GIRSA 31 de mayo de 2022 Fact 498 Físicamente en GIRSA Tlalnepantla durante inventario de diciembre 2023. Físicamente en GIRSA inventario febrero 2024', '2024-12-12 11:54:45', 23, 5, 17, 5),
(28, '0028', '95', 1, 'N/A', '193035849001921', '0', '0', 2, 11, 41, 37, '1405850', 'MLT3060M', '2014', 'N/A', 'N/A', 1, 'Sin datos', '0', '0', 'BLANCO', 'Bueno', 'Bueno', '2020-01-15', '617', 2, 'LOGISTICA SHADDAI CC S.A. DE C.V.', 'GIRSA Tlane', 'Activo', 'CONVERTIDORES ROTATIVOS ELECTRICOS USADO Grupos electrógenos con motor a diesel montado en chasis sobre ruedas remolcable', 'Torre de luces', 1, 13, 'No de Pedimento 19 30 3584 9001921 Sale a Relleno Sanitario de Tlane 15 de abril de 2020 Llega a Bodega azul 27 de febrero de 2023 en buen estado (95 o 95A) no viene No serie Físicamente en GIRSA Tlalnepantla durante inventario de diciembre 2023. Físicamente en GIRSA inventario febrero 2024', '2024-12-12 11:55:17', 23, 5, 17, 5),
(29, '0029', '96', 1, 'N/A', '193035849001921', '0', '0', 2, 11, 41, 37, '1404264', 'MLT3060K', '2014', 'N/A', 'N/A', 1, 'Sin datos', '0', '0', 'BLANCO', 'Bueno', 'Bueno', '2020-01-15', '616', 2, 'LOGISTICA SHADDAI CC S.A. DE C.V.', 'GIRSA Tlane', 'Activo', 'CONVERTIDORES ROTATIVOS ELECTRICOS USADO Grupos electrógenos con motor diesel. montado en chasis sobre ruedas. remolcable.', 'Torre de luces', 1, 13, 'No de pedimento 19 30 3584 9001921 Salió a relleno Sanitario 12 de mayo de 2020 Físicamente en GIRSA Tlalnepantla durante inventario de diciembre 2023. Físicamente en GIRSA inventario febrero 2024', '2024-12-12 11:55:39', 23, 5, 17, 5),
(30, '0030', '98', 3, 'Sin documentos', '203035840000797', '0', '1', 2, 1, 34, 12, '87X01412', '826C', '1992', 'Sin placas', 'Sin documentos', 1, 'Sin datos', '0', '0', 'Sin datos', 'Bueno', 'Bueno', '2020-01-30', '641', 1, 'CONSTRUCTORA Y DESARROLLADORA GRUPO FRASAN SA DE CV', 'GIRSA Tlane', 'Activo', 'COMPACTADOR DE RODILLO TIPO PATA DE CABRA USADO 9C5073 MODELO 826C', 'HOJA TOPADORA', 1, 13, 'Pedimento 20 30 3584 0000797 Se factura a GIRSA 31 de mayo de 2022 Fact A 499 Físicamente en GIRSA Tlalnepantla durante inventario de diciembre 2023. Físicamente en GIRSA inventario febrero 2024', '2024-12-12 11:56:03', 23, 5, 17, 5),
(31, '0031', '99', 1, 'CONSTRUCTORA Y DESARROLLADORA GRUPO FRASAN', '20 30 1031 0000719', '1', '0', 4, 25, 30, 31, '3HSDJSJR5CN087209', 'TRACTOR DE CARRETERA 6 CIL', '2012', 'LE-44-725', 'CAC10232828', 1, '125HM2Y4133870', '0', '0', 'Sin datos', 'Bueno', 'Bueno', '2020-01-04', '633', 1, 'IDN SERVICIOS ADUANALES Y LOGISTICA EN COMERSIO EXTERIOR S DE RL DE CV', 'GIRSA DEL VALLE DE MEXICO', 'Activo', 'Submarca: TRACTO CAM.861 5A.RUEDA 6X4 Y 6X2 TRACTOR DE CARRETERA 6 CIL', 'MOTOR DIESEL MARCA MAXXFORCE', 1, 3, 'LLEGA A PATIO 28 DE ENERO DE 2020 CON TITULO DE PROPIEDAD 10122342561153832 Y REPUVE Salió 17 de febrero para pintura a Texcoco y regreso a Patio el 19 de febrero de 2020 Sale a Relleno Sanitario de Tlane 15 de abril de 2020 Físicamente en Tándem Pachuca durante inventario Dic 2023. Descompuesto modulo desconfigurado lo identifican como TP 150. Físicamente en GIRSA Valle de México durante inventario de febrero de 2024', '2024-11-14 10:49:09', 26, 4, 0, 0),
(32, '0032', '100', 1, 'CONSTRUCTORA Y DESARROLLADORA GRUPO FRASAN', '20 30 1031 0000731', '0', '0', 4, 25, 30, 31, '3HSDJSJR4CN087217', 'TRACTOR DE CARRETERA 6 CIL', '2012', 'LE-44-743', 'CAC10232826', 1, '125HM2Y4133871', '0', '0', 'Sin datos', 'Bueno', 'Bueno', '2020-01-04', '634', 1, 'IDN SERVICIOS ADUANALES Y LOGISTICA EN COMERSIO EXTERIOR S DE RL DE CV', 'Terreno Coyotepec', 'Activo', 'submarca: TRACTO CAM.861 5A.RUEDA 6X4 Y 6X2 TRACTOR DE CARRETERA 6 CIL', 'MOTOR DIESEL MARCA MAXXFORCE SERIE 125HM2Y4133871', 1, 12, 'LLEGA 278 DE ENERO DE 2020 con Titulo de Propiedad 10122342561154106 Salió para Pintura 19 de febrero de 2020 a Texcoco Salió al relleno Sanitario 24 de abril de 2020 Físicamente en Tándem Pachuca durante inventario Dic 2023.Descompuesto de transmision TP151. Físicamente durante inventario de febrero 2024 en Tándem Pachuca', '2024-12-12 11:57:22', 23, 8, 27, 7),
(33, '0033', '122', 1, 'CONSTRUCTORA Y DESARROLLADORA GRUPO FRASAN', 'Sin documentos', '1', '1', 4, 17, 22, 8, 'MR0EX3DD0L0003907', 'Hilux Doble Cabina', '2020', 'NVY8878', 'AUC9944903', 2, '2TR-A690180', '0', '0', 'Blanco', 'Bueno', 'Bueno', '2020-01-24', '3879', 1, 'CACHO MOTORS S. DE R.L. DE C.V.', 'Bodega Tultitlan ', 'Activo', 'CAMIONETA PICK UP D-CAB HILUX DOBLE CABINA BASE BLANCA CON INTERIORES NEGROS 4 PUERTAS submarca:HILUX 4 PTAS T/M PICK UP L4 16 VAL 5 VEL Hilux Doble Cabina', 'Sin datos', 1, 13, 'ENTREGAN CON CARTA FACTURA Físicamente en Tándem Pachuca durante inventario Dic 2023. En ruta con Joan durante inventario de febrero 2024 en Tándem Pachuca', '2024-12-12 11:58:08', 23, 4, 28, 4),
(34, '0034', '123', 1, 'CONSTRUCTORA Y DESARROLLADORA GRUPO FRASAN', 'Sin documentos', '1', '1', 4, 17, 22, 8, 'MR0EX8CB7L1409562', 'Hilux Cabina sencilla', '2020', 'LE72926', 'CAC12396976', 2, '2TR-A700331', '0', '0', 'Blanco', 'Bueno', 'Bueno', '2020-01-24', '3877', 1, 'CACHO MOTORS S. DE R.L. DE C.V.', 'Bodega Xhala', 'Activo', 'CAMIONETA PICK UP B-CAP HILUX CABINA SENCILLA IMPORTADA 2 PUERTAS BLANCA INTERIORES NEGROS submarca: HILUX 2 PTAS T/M PICK UP L4 5 VEL AC Hilux Cabina sencilla', 'Sin datos', 1, 12, 'ENTREGAN CON CARTA FACTURA En bodega Xhala 6 de Dic 2023 de acuerdo a inventario 79.017 Km Servicio básico preventivo realizado en FRANSANCO 9 de junio de 2023. En bodega Xhala febrero 2024 de acuerdo a Inventario', '2024-12-12 11:58:30', 23, 7, 27, 7),
(35, '0035', '124', 3, 'Sin documentos', '203031670001893', '0', '0', 2, 1, 34, 28, 'CAT0416ECSHA06842', '416E', '2009', 'Sin placas', 'Sin documentos', 1, 'Sin datos', '0', '0', 'Sin datos', 'Bueno', 'Bueno', '2020-02-20', 'A-1392', 1, 'CONSTRUCTORA Y DESARROLLADORA GRUPO FRASAN SA DE CV', 'GIRSA DEL VALLE DE MEXICO', 'Activo', 'RETROEXCAVADORA USADA MODELO 416E', 'Sin datos', 1, 3, 'Pedimento 20 30 3167 0001893 Prestada para obra en Bodega Tultitlan a partir del 2020 En obra del Relleno Sanitario de Tlalnepantla a partir de Junio de 2021 (Ficha técnica 66) Regresa a Terreno Coyotepec para reparación 13 de Septiembre de 2021 Sale a Relleno Sanitario en Tlalnepantla 20 de Abril de 2022 de acuerdo a orden de salida 41 Se factura a GIRSA 31 Agosto 2022 Fact A 539 Sale prestada a Bodega en San Antonio Tultitlan 10 de Nov de 2022 Regresa a GIRSA 8 de Septiembre de 2023 Se encontró en GIRSA Valle de México durante inventario dic 2023. Físicamente en GIRSA Valle de México durante inventario de febrero de 2024', '2024-11-14 10:57:32', 26, 6, 0, 0),
(36, '0036', '125', 3, 'Sin documentos', '203031670001892', '0', '0', 2, 27, 55, 12, '6582US0816', 'CA250D', '2006', 'Sin placas', 'Sin documentos', 1, 'Sin datos', '0', '0', 'Amarillo con rojo', 'Bueno', 'Bueno', '2020-02-20', 'A-1391', 1, 'CONSTRUCTORA Y DESARROLLADORA GRUPO FRASAN SA DE CV', 'GIRSA Tlane', 'Activo', 'VIBROCOMPACTADOR DE RODILLO USADO', 'Sin datos', 1, 13, 'Pedimento 20 30 3167 0001892 En renta AFCA Construcción más Comercialización 28 Feb 2020 Regresa a terreno 1 de Agosto de 2020 Prestado a terreno en San Antonio Tultitlán 4 de Noviembre de 2020 En renta 4 de Noviembre de 2020 destino Coacalco En otra del Relleno Sanitario de Tlalnepantla a partir de Junio de 2021 (Ficha técnica 66) Regresa a Terreno Coyotepec 30 de Noviembre de 2021 del Relleno Sanitario  Vendido a GIRSA 15 de Noviembre de 2022 reportado por FRANSANCO Oct 2023 En Reparación Terreno Coyotepec de acuerdo a inventario 6 de Diciembre de 2023. En Terreno Coyotepec Febrero 2024 de acuerdo a inventario', '2024-12-12 11:59:05', 23, 5, 17, 5),
(37, '0037', '133', 1, 'Sin documentos', '20 30 3167 0001899', '0', '0', 2, 28, 56, 25, '76095-0046', 'US636HCC-1', '0', 'Sin placas', 'Sin documentos', 7, 'N/A', '0', '0', 'Sin datos', 'Bueno', 'Bueno', '2020-02-29', 'A-1456', 1, 'CONSORCIO ADUANAL DE REYNOSA IP S.A. DE C.V.', 'Terreno Coyotepec', 'Activo', 'Bomba de Agua Remolcable usada', 'Sin datos', 1, 12, 'Llega a Terreno Coyotepec 13 de febrero de 2023 con llantas ponchadas y rotas. no funciona Ya funciona de acuerdo a información de Alonso en inventario del 6 de Dic 2023. En Terreno Coyotepec febrero 2024 de acuerdo a inventario', '2024-12-12 11:59:33', 23, 8, 27, 7),
(45, '0045', '143', 1, 'CONSTRUCTORA Y DESARROLLADORA GRUPO FRASAN', 'Sin documentos', '1', '1', 3, 17, 23, 4, 'MR2B29F31L1201065', 'Sedan', '2020', 'NXL4288', 'AUC10238353', 2, '2NR-5428711', '0', '0', 'Blanco', 'Bueno', 'Bueno', '2020-03-24', 'CNC000000276', 1, 'CACHO MOTORS S. DE R.L. DE C.V.', 'FRASAN Colors', 'Activo', 'Yaris Sedan Core CVT tipo Sedan Importado 4 puertas. 4 cilindros.', 'Sin datos', 1, 14, 'Asignado a Zita Ruiz Santos Físicamente se revisó en FRASAN Colors durante inventario Dic 2023', '2024-12-12 11:59:50', 23, 13, 26, 8),
(46, '0046', '144', 1, 'CONSTRUCTORA Y DESARROLLADORA GRUPO FRASAN', 'Sin documentos', '1', '1', 3, 17, 22, 8, 'MR0EX8CB4L1410085', 'Cabina Sencilla ', '2020', 'LE72665', 'CAC12303709', 2, '2TR-A712863', '0', '0', 'Blanco', 'Bueno', 'Bueno', '2020-03-24', 'CNC000000275', 1, 'CACHO MOTORS S. DE R.L. DE C.V.', 'Bodega de xhala', 'Activo', 'Hilux Cabina Sencilla tipo Pick Up B-Cab Importada 2 puertas 4 cilindros submarca: HILUX 2 PTAS T/M PICK UP L4 5 VEL AC Hilux Cabina sencilla', 'Sin datos', 1, 7, 'Asignado a Constructora Pacifico en FRASAN Colors 7 de dic del 2023 de acuerdo a inventario. En FRASAN Colors febrero 2024 de acuerdo a inventario', '2024-11-13 17:33:40', 26, 9, 0, 0),
(47, '0047', '145', 1, 'CONSTRUCTORA Y DESARROLLADORA GRUPO FRASAN', 'Sin documentos', '1', '0', 3, 17, 23, 4, 'MR2B29F3XL1198697', 'Sedan', '2020', 'NXL4291', 'AUC10238363', 2, '2NR-5421928', '0', '0', 'Plata', 'Bueno', 'Bueno', '2020-03-24', 'CNC000000277', 1, 'CACHO MOTORS S. DE R.L. DE C.V.', 'FRASAN Colors', 'Activo', 'Yaris Sedan Core MT tipo sedan importada 4 pueras 4 cilindros submarca: YARIS 4 PTAS T/A CORE SEDAN L4 16 VALVULAS 15 VEL AC', 'Sin datos', 1, 6, 'Físicamente en FRASAN Colors durante inventario 2023. En FRASAN Colors febrero 2024 de acuerdo a inventario', '2024-12-12 12:00:16', 23, 2, 29, 2),
(48, '0048', '146', 1, 'CONSTRUCTORA Y DESARROLLADORA GRUPO FRASAN', 'Sin documentos', '0', '0', 2, 30, 58, 27, '3G9VA703881003864', 'VA-30-3M APOLO', '2008', '7HU5463', 'RMC14588678', 7, 'N/A', '0', '0', 'Blanco', 'Bueno', 'Bueno', '2020-03-24', '1-200 122', 1, 'CAMHE CONSTRUCTORA Y DESARROLLADORA SA DE CV', 'GIRSA DEL VALLE DE MEXICO', 'Activo', 'GONDOLA Semirremolque tipo volteo usado con capacidad para 30 mts (36 toneladas) largo 8.10 mts. ancho 2.37 mts alto 1.53 mts; suspensión invertida tipo balancín con 4 peines de 7 hojas de 3/4\" x 4\"; 3 ejes de 30 lbs c/u. 12 rines de 24.5. 2 cinchos; piso', 'Sin datos', 1, 3, 'En Tándem Pachuca durante inventario Dic 2023. Reportan que está en Mercado Mal en recolección. Físicamente en GIRSA Valle de México durante inventario de febrero de 2024', '2024-11-13 17:37:55', 26, 6, 0, 0),
(49, '0049', '147', 1, 'FRANCISCO JAVIER SANTOS ARREOLA', '17 30 3943 7002476', '0', '0', 3, 31, 18, 27, '575200G27HT346301', 'CT 7X162', '2017', '5HU6671', 'RMC5858740', 7, 'N/A', '0', '0', 'Plata', 'Bueno', 'Bueno', '2020-04-02', '348', 1, 'COMERCIALIZADORA DE RECUBRIMIENTOS ARQUITECTONICOS S.A DE C.V', 'Mc Allen', 'Activo', 'Semi remolque cerrado para carga nuevo', 'Sin datos', 1, 11, 'Estaba en Mc Allen y llegÃ³ a MÃ¨xico el 28 de Marzo con las herramientas de jardinerÃ­a', '2024-03-11 00:00:00', 14, 0, 0, 0),
(50, '0050', '148', 1, 'CONSTRUCTORA Y DESARROLLADORA GRUPO FRASAN', 'Sin documentos', '1', '1', 3, 17, 22, 8, 'MR0EX3DDXL0004840', 'Pick Up D-CAB', '2020', 'LE72931', 'AUC10238362', 2, '2TR-A719953', '0', '0', 'Blanco', 'Bueno', 'Bueno', '2020-04-02', 'CNC000000324', 1, 'CACHO MOTORS S. DE R.L. DE C.V.', 'GIRSA Tlane', 'Activo', 'Hilux doble cabina base submarca: HILUX 4 PTAS T/M PICK UP L4 16 CAL 5 VEL', 'Sin datos', 1, 13, 'Físicamente en GIRSA Tlalnepantla durante inventario de diciembre 2023. Físicamente en GIRSA inventario febrero 2024', '2024-12-12 12:00:49', 23, 5, 17, 5),
(51, '0051', '149', 1, 'CONSTRUCTORA Y DESARROLLADORA GRUPO FRASAN', 'Sin documentos', '1', '1', 3, 3, 8, 8, '1FDRF3G65LEC08377', 'F-350', '2020', 'LC37759', 'CAC10231994', 2, 'HECHO EN EEUU', '0', '0', 'Blanco', 'Bueno', 'Bueno', '2020-04-03', 'AN000012751', 1, 'ECATEPEC SA DE CV', 'FRASAN Colors', 'Activo', 'Vehículo de transporte de productos F-350 Super Duty XL Chas Cab color exterior blanco oxford color interior gris roca medio con adecuación para Caja seca submarca: F350 2 PTAS (IMP) T/M XL 6.2M V8 TELA', 'Sin datos', 1, 6, 'Las recibe Alejandro y las lleva para adecuación Caja seca Físicamente en FRASAN Colors durante inventario Dic 2023. En FRASAN Colors Febrero 2024 de acuerdo a inventario', '2024-12-12 12:01:08', 23, 2, 29, 2),
(52, '0052', '153', 12, 'GREGORIO TOVAR CRUZ', 'Sin documentos', '0', '0', 2, 4, 35, 27, 'FM3645', '1977', '1977', '843UN6', '2465678', 7, 'Sin datos', '0', '0', 'Sin datos', 'Bueno', 'Bueno', '2020-04-17', '32', 1, 'PATRICIA CRUZ SOLIS', 'GIRSA DEL VALLE DE MEXICO', 'Activo', 'GONDOLA Semiremolque tipo volteo de dos ejes longitud de 11.50 alto de 3.50 ancho de 2.50 Usado', 'Sin datos', 1, 3, 'Se compra a Jibran Javier Mendoza Cruz en Tula Hidalgo el 8 de Abril de 2020 a nombre de Simón Vaca En Tándem Pachuca durante inventario Dic 2023. Reportan que se encuentra en mercado mpal en recolección de basura. Físicamente en GIRSA Valle de México durante inventario de Febrero de 2024', '2024-11-14 11:07:20', 26, 6, 0, 0),
(53, '0053', '154', 10, 'Sin documentos', '20 30 3584 0003466', '0', '0', 2, 32, 59, 20, '5648116', 'RD11A', '0', 'Sin placas', 'Sin documentos', 1, 'Sin datos', '0', '0', 'Sin datos', 'Bueno', 'Bueno', '2021-07-05', '551', 1, 'CONSTRUCTORA Y DESARROLLADORA GRUPO FRASAN SA DE CV', 'Terreno Coyotepec', 'Activo', 'Minivibrocompactador de rodillos usado', 'Sin datos', 1, 12, 'Llego de Reynosa al terreno sábado 16 de mayo de 2020 Salida de Bodega Azul a Tlalnepantla 6 de enero de 2022 Vendido a GIRSA 15 de noviembre de 2022 reportado por FRANSANCO Oct 2023 En reparación Terreno Coyotepec 6 de diciembre de 2023 de acuerdo a inventario. En Terreno Coyotepec febrero 2024 de acuerdo a inventario', '2024-12-12 12:01:30', 23, 8, 27, 7),
(54, '0054', '155', 1, 'Sin documentos', '20 30 3584 0003466', '0', '0', 2, 33, 60, 12, '1HTWGADT13J069569', 'SD40D', '0', 'Sin placas', 'Sin documentos', 1, 'Sin datos', '0', '0', 'Amarillo claro', 'Bueno', 'Bueno', '2021-07-05', 'A3261', 1, 'CONSORCIO ADUANAL DE REYNOSA IP S.A. DE C.V.', 'Terreno Coyotepec', 'Activo', 'Vibro compactador de rodillo pata de cabra usado', 'Sin datos', 1, 12, 'Llego de Reynosa al Terreno el 16 de Mayo de 2020 En Terreno Coyotepec de acuerdo a inventario del 6 de dic del 2023. En Terreno Coyotepec Febrero 2024 de acuerdo a inventario', '2024-12-12 12:01:51', 23, 8, 27, 7),
(55, '0055', '156', 1, 'CONSTRUCTORA Y DESARROLLADORA GRUPO FRASAN', '20 30 3584 0003468', '0', '0', 4, 3, 11, 7, '1FDAF56F13EB16029', 'F-550', '2003', 'LF17742', 'CAC10656576', 1, 'V8 TURBODIESEL 6.7', '0', '0', 'Blanco', 'Bueno', 'Bueno', '2020-07-30', 'A1838', 1, 'CONSORCIO ADUANAL DE REYNOSA IP S.A. DE C.V.', 'Terreno coyotepec', 'Activo', 'VehÃ­culo especial tipo canastilla usado submarca: F550 2 PTAS (IMP) T/A XL 6.7L DIESEL V8 TELA 8 CIL', 'Canastilla serie DB05327 modelo 132-sb', 1, 5, 'Llego a Patio de Coyotepec 27 de mayo de 2020 y salió a Soluciones Ecológicas 29 de mayo de 2020 Llega a Patio de Coyotepec 12 de agosto de 2021 de Soluciones Ecológicas Sale a Tlalnepantla 12 de octubre de 2022 Físicamente en GIRSA Tlalnepantla durante inventario de diciembre 2023. Físicamente en GIRSA inventario febrero 2024', '2024-12-05 17:59:38', 23, 8, 24, 2),
(56, '0056', '158', 1, 'CONSTRUCTORA Y DESARROLLADORA GRUPO FRASAN', '20 30 3591 0002195', '1', '0', 4, 15, 45, 7, 'JNALC80HX5AN50187', 'UD2300', '2005', 'LF17097', 'CAC10632419', 1, 'Hino Motors j08e-te', '0', '0', 'Sin Datos', 'Bueno', 'Bueno', '2020-07-30', '817', 1, 'IDN SERVICIOS ADUANALES Y LOGISTICA EN COMERSIO EXTERIOR S DE RL DE CV', 'Bodega Xhala', 'Activo', 'VEHICULO DE AUXILIO MECANICO CON PLATAFORMA DESLIZABLE submarca: CHASIS EXTR (CAMIONES DE HASTA 7.5 TONELADAS) UD2300', 'Sin datos', 1, 12, 'LLEGA A TERRENO 19 DE JUNIO DE 2020 LLEGA A BODEGA EN XHALA 20 DE JUNIO DE 2022 SALE A POLANCO 29 DE JUNIO DE 2022 LLEGA A TERRENO COYOTEPEC 13 DE FEBRERO DE 2023 En Bodega Xhala de acuerdo a inventario 6 de dic del 2023 Con 251.090 millas. En bodega Xhala Febrero 2024 de acuerdo a Inventario', '2024-12-12 12:02:46', 23, 7, 27, 7),
(57, '0057', '159', 1, 'CONSTRUCTORA Y DESARROLLADORA GRUPO FRASAN', '20 30 1068 0008376', '1', '0', 4, 53, 80, 7, '1HTMMAAM2CH608852', '4300 SBA 4X2', '2012', 'LF17096', 'CAC10632414', 1, '466HM2Y3405555', '0', '0', 'Sin Datos', 'Bueno', 'Bueno', '2020-07-30', '818', 1, 'IDN SERVICIOS ADUANALES Y LOGISTICA EN COMERSIO EXTERIOR S DE RL DE CV', 'FRASAN Colors', 'Activo', 'VEHICULO PARA EL TRANSPORTE DE MERCANCIAS submarca: CAMION T/M 6 CIL 4300 SBA 4X2', 'MOTOR MARCA MAXXFORCE NAVISTAR SERIE 466HM2Y3405555 CAJA SECA MARCA SUPREME CORPORATION SERIE SVA24097102C0302212 EQUIPADO CON RAMPA MARCA WALTCO', 1, 6, 'Llega a Terreno 9 de julio de 2020 de Reynosa Tamaulipas En reparación reportado en revisión del 14 de Nov 2022 17 de enero sale de Terreno Coyotepec a Frasan Colors Físicamente en FRASAN Colors durante inventario de Dic 2023. En FRASAN Colors Febrero 2024 de acuerdo a inventario', '2024-12-12 12:03:04', 23, 2, 29, 2),
(58, '0058', '160', 1, 'CONSTRUCTORA Y DESARROLLADORA GRUPO FRASAN', '203031670006652', '1', '0', 4, 53, 80, 7, '1HTMSAAR6DJ482474', '4400 SBA 6X4', '2013', 'LF19174', 'CAC10693858', 1, 'A285', '0', '0', 'Blanco', 'Bueno', 'Bueno', '2020-06-26', '20', 1, 'Sergio Angel Rojas Vizcarra', 'FRASAN Colors', 'Activo', 'VEHICULO ESPECIAL TIPO CAMION TALLER USADO submarca: CAMION T/M 6 CIL 4400 SBA 6X4', 'MOTOR MARCA NAVISTAR INTERNATINAL MODELO A285 SERIE 466HM2Y3443976', 1, 6, 'LLEGA A TERRENO 10 DE JULIO DE 2020 17 de Enero Llega de Frasan Colors a Terreno Coyotepec En FRASAN Colors de acuerdo a inventario del 7 de Dic del 2023. En FRASAN Colors Febrero 2024 de acuerdo a inventario', '2024-12-12 12:03:26', 23, 2, 29, 2),
(59, '0059', '173', 1, 'LUMO FINANCIERA DEL CENTRO SA DE CV SOFOMENR', 'Sin documentos', '0', '0', 4, 53, 80, 7, '3HAMMAAR8JL736452', '4300 SBA 4X2', '2018', 'LF21338', 'CAC10777180', 1, 'International 4300-210', '0', '0', 'Blanco', 'Bueno', 'Bueno', '2022-05-31', 'C 8817', 1, 'LUMO FINANCIERA DEL CENTRO', 'Terreno Coyotepec', 'Activo', 'Camion compactador con motor Navistar y caja de 20 yardas submarca: CAMIONES DE MAS DE 7.5 TONELADAS 4300 SBA 4X2', 'Sin datos', 1, 13, 'Sin documentos. se da alta con dato proporcionados por Victor Gerardo Zumidio 29 de sept 2020 Prestado a Nicolas Romero Marzo de 2021 Llega a Terreno en Coyotepec 12 de Abril de 2022 de acuerdo a orden de entrada folio 50 Sale a Pachuca 12 de Abril de 2022 de acuerdo a orden de salida folio 40 Se compra a Lumo 31 de mayo de 2022 Físicamente en Tándem Pachuca durante inventario Dic 2023. Descompuesto en Reparación mayor tiene el cofre del TP07 lo identifican como P42. Físicamente durante inventario de febrero 2024 en Tándem Pachuca', '2024-12-12 12:03:50', 23, 4, 28, 4),
(60, '0060', '181', 1, 'CONSTRUCTORA Y DESARROLLADORA GRUPO FRASAN', 'Sin documentos', '1', '0', 3, 3, 8, 8, '1FDRF3G62LED13717', 'Camioneta Caja con Copete', '2020', 'LF85295', 'CAC13239379', 2, 'HECHO EN EE UU', '0', '0', 'Blanco', 'Bueno', 'Bueno', '2020-09-07', 'AN000012873', 1, 'ECATEPEC SA DE CV', 'FRASAN Colors', 'Activo', 'Camioneta blanca con caja seca submarca: F350 2 PTAS (IMP) T/M XL 6.2M V8 TELA', 'Caja Seca usada con copete', 1, 6, 'Lucy Entrega formato de pago de tenencia y expedición inicial de placas sin factura ni documentos del vehículo lunes 19 de octubre de 2020 Asignada a programa entrega de despensas noviembre de 2022 Físicamente en FRASAN Colors durante inventario de Dic 2023. En FRASAN Colors febrero 2024 de acuerdo a inventario', '2024-12-12 12:04:28', 23, 2, 29, 2),
(61, '0061', '183', 1, 'CONSTRUCTORA Y DESARROLLADORA GRUPO FRASAN', 'Sin documentos', '1', '0', 3, 3, 13, 8, '8AFRR5AA6G6394654', 'Pick Up D-Cab', '2016', 'PBD6633', 'AUC11434758', 2, 'MXR5393', '0', '0', 'Blanco', 'Bueno', 'Bueno', '2016-02-26', 'VN 1430', 1, 'ACASA PERINORTE. S.A. DE C.V.', 'Bodega Xhala', 'Activo', 'CAMIONETA RANGER 4 PUERTAS T/M CREW CAB XL 2.5L 4 CIL 5 VEL submarca: FORD RANGER 4 PTAS (IMP) T/M CREW CAB XL 2.5 L 4 CIL 5 VEL TELA', 'Sin datos', 1, 12, 'Registrada en sistema 6 de Nov 2020. Resguardo Marco A Colin En trabajo de campo 183.900 Km 6 de Diciembre de 2023 de acuerdo a inventario. En Terreno Coyotepec Febrero 2024 de acuerdo a Inventario', '2024-12-12 12:04:50', 23, 7, 27, 7),
(62, '0062', '188', 1, 'CONSTRUCTORA Y DESARROLLADORA GRUPO FRASAN', 'Sin documentos', '1', '0', 3, 17, 25, 4, 'NMTKH38X4JR049082', 'CH-R 5 Ptas', '2018', 'LHY635A', 'AUC6572676', 2, '3ZR-C182394', '0', '0', 'Verde', 'Bueno', 'Bueno', '2018-02-20', 'A20039', 1, 'CEVER LOMAS VERDES S DE R.L DE C.V', 'Vision México', 'Activo', 'Automovil nuevo color verde con interiores negros submarca: CH-R 5 PTAS T/A HATCHBACK L4 16 VALVULAS CH-R 5 Ptas submarca: CH-R 5 PTAS T/A HATCHBACK L4 16 VALVULAS CH-R 5 Ptas', 'Sin datos', 1, 18, 'Asignado a Visión México para uso de Brenda Santos Físicamente en FRASAN Colors durante inventario de Dic 2023 Asignado a Contraloría. En Visión México Febrero 2024 de acuerdo a inventario', '2024-12-12 12:05:12', 23, 1, 30, 1),
(63, '0063', '190', 1, 'LUMO FINANCIERA DEL CENTRO SA DE CV SOFOMENR', 'Sin documentos', '1', '0', 3, 17, 22, 8, 'MR0EX8CB7H1398439', 'Hilux 2 y 4 ptas', '2017', 'PEH9286', 'AUC1212551', 2, '2TRA261199', '0', '0', 'Blanca', 'Bueno', 'Bueno', '2022-11-04', 'C 10353', 1, 'LUMO FINANCIERA DEL CENTRO', 'GIRSA Tlane', 'Activo', 'Camioneta Pick up Nacional submarca: HILUX 2 PTAS PICK UP Hilux 2 y 4 ptas', 'Sin datos', 1, 13, 'Físicamente en GIRSA Tlalnepantla durante inventario de diciembre 2023. Reportan que está en Taller de hojalatería y Pintura inventario GIRSA febrero 2024', '2024-12-12 12:05:27', 23, 5, 17, 5),
(64, '0064', '193', 1, 'LUMO FINANCIERA DEL CENTRO SA DE CV SOFOMENR', 'Sin documentos', '1', '0', 3, 34, 19, 4, '3VW2K1AJ7HM323161', 'JETTA MK VI 4 PTAS', '2017', 'PEH9281', 'AUC12512521', 2, 'CBP758738', '0', '0', 'Blanco', 'Bueno', 'Bueno', '2022-11-04', 'C 10352', 1, 'LUMO FINANCIERA DEL CENTRO', 'Pacifico', 'Activo', 'Automovil submarca: JETTA MK VI 4 PTAS SEDAN', 'Sin datos', 1, 7, 'Asignado a Hector Torres', '2024-11-14 11:33:00', 26, 8, 0, 0),
(65, '0065', '194', 1, 'CONSTRUCTORA Y DESARROLLADORA GRUPO FRASAN', 'Sin documentos', '1', '0', 3, 3, 10, 8, '1FMJK1MT7LEA12934', 'EXPEDITION PLATINUM MAX 4X4', '2020', 'NRX8033', 'AUC9912290', 2, 'HECHO EN ESTADOS UNIDOS', '0', '0', 'Blanco metÃ¡lico', 'Bueno', 'Bueno', '2020-01-22', 'Sin documentos', 1, 'ECATEPEC VALLEGO AUTOMOTRIZ S.A DE C.V', 'Cancun', 'Activo', 'Automovil Suv Nacional 6 cilindros 7 personas', 'Sin datos', 1, 11, 'Uso Lic Francisco Santos Arreola Físicamente en Cancún reporta Osvaldo durante inventario Dic 2023', '2024-03-11 00:00:00', 14, 0, 0, 0),
(66, '0066', '195', 7, 'FRANCISCO JAVIER SANTOS ARREOLA', 'Sin documentos', '1', '0', 3, 3, 9, 8, '2FMPK3APXHBB01252', 'Edge 4 ptas importado', '2017', 'NHV5819', 'AUC7200777', 2, 'HECHO EN CANADA', '0', '0', 'Vino', 'Bueno', 'Bueno', '2019-01-05', 'N00007130', 1, 'Sin documentos', 'Club de Golf Hacienda', 'Activo', 'Automovil Suv 6 cilindros 5 personas submarca: EDGE 4 PTAS (IMP) T/A SPORT 2.7L V6 6 VEL PIEL', 'Sin datos', 1, 11, 'Para uso en casa Lic Francisco Santos Arreola a nombre de Francisco Santos Arreola FÃ­sicamente en Casa Club de golf durante inventario Dic 2023', '2024-03-11 00:00:00', 14, 0, 0, 0),
(67, '0067', '196', 1, 'LUMO FINANCIERA DEL CENTRO SA DE CV SOFOMENR', 'Sin documentos', '1', '0', 3, 2, 5, 4, 'ML3AB26J6HH014057', 'Attitude SE MT', '2017', 'PEH9274', 'AUC12512505', 2, 'Hecho en Tailandia', '0', '0', 'Blanco', 'Bueno', 'Bueno', '2022-11-04', 'C 10354', 1, 'LUMO FINANCIERA DEL CENTRO', 'FRASAN Colors', 'Activo', 'Vehículo usado submarca: ATTITUDE 4 PTAS (IMP)', 'Sin datos', 1, 4, 'Físicamente en FRASAN Colors durante inventario de Dic 2023 Asignado a Victor Resendiz. En FRASAN Colors Febrero 2024 de acuerdo a inventario', '2024-12-06 09:40:18', 23, 2, 24, 2),
(68, '0068', '198', 6, 'Sabino Manuel Bastidas Yfert (factura endosada)', 'Sin documentos', '0', '0', 3, 47, 2, 4, 'WBALL1103GP876553', 'Z Z4 SDRIVE 18IA AUTOMATICA', '2016', 'PZB672A', '55190', 2, 'B1381211', '0', '0', 'Blanco mineral', 'Bueno', 'Bueno', '2021-01-31', 'V001304 / endosada', 1, 'AUTOS PREMIUM DE AGUAS CALIENTES S.A DE C.V', 'Cancun', 'Activo', 'Camioneta usada submarca: SERIE 4.2 PUERTAS', 'Sin datos', 1, 11, 'Factura a nombre de Sabino Manuel Bastidas Yffert endosada', '2024-03-11 00:00:00', 14, 0, 0, 0),
(69, '0069', '199', 1, 'CONSTRUCTORA Y DESARROLLADORA GRUPO FRASAN', 'Sin documentos', '0', '0', 4, 17, 32, 8, '5TDGRKEC1MS055305', 'Minivan', '2021', '22J452', 'ECC11628540', 3, 'A25-AK525623', '0', '0', 'Blanco aperlado', 'Bueno', 'Bueno', '2021-07-30', 'CNC000001823', 1, 'CACHO MOTORS S. DE R.L. DE C.V.', 'Club de Golf Hacienda', 'Activo', 'Sienna Hibrido 5 ptas. Hibrido Minivan submarca: SIENNA HIBRIDO 5 PTAS MINIVAN', 'Sin datos', 1, 11, 'Físicamente en Casa Club de golf durante inventario Dic 2023', '2024-10-10 11:57:55', 26, 0, 0, 0),
(70, '0070', '200', 1, 'CONSTRUCTORA Y DESARROLLADORA GRUPO FRASAN', 'Sin documentos', '1', '0', 3, 17, 24, 4, '5YFBPRBE9NP273095', 'Corolla le Sedan', '2022', 'PCD4056', 'AUC11729351', 2, '2ZR-3430317', '0', '0', 'Blanco', 'Bueno', 'Bueno', '2021-09-21', 'CNC000002063', 1, 'CACHO MOTORS S. DE R.L. DE C.V.', 'FRASAN Colors', 'Activo', 'Corolla transmisión CVT 4 puertas. 5 personas Sedan importado. vestiduras negras submarca: COROLLA LE 4 PTAS 4 CIL', 'Sin datos', 1, 8, 'Asignado a Luz Elena Zamudio Villagrana Físicamente en FRASAN Colors durante inventario de Dic 2023. En FRASAN Colors febrero 2024 de acuerdo a inventario', '2024-11-14 11:39:40', 26, 11, 0, 0),
(71, '0071', '201', 1, 'CONSTRUCTORA Y DESARROLLADORA GRUPO FRASAN', 'Sin documentos', '1', '0', 3, 17, 26, 4, 'JTDKDTB39M1144992', 'HATCH BACK HIBRIDO', '2021', '24J215', 'ECC11732081', 3, '1NZ9230098', '0', '0', 'Blanco', 'Bueno', 'Bueno', '2021-09-22', 'CNC000002076', 1, 'CACHO MOTORS S. DE R.L. DE C.V.', 'Frasan Colors', 'Activo', 'Toyota Prius C 5 puertas 4 cilindros interior gris submarca: PRIUS HIBRIDO 5 PTAS T/A HATCHBACK L4 16 VALVULAS', 'Sin datos', 1, 6, 'Revisión de la unidad en la Bodega de Xhala durante inventario de maquinaria ligera diciembre 2023', '2024-12-06 09:42:11', 23, 2, 29, 2),
(72, '0072', '205', 1, 'CONSTRUCTORA Y DESARROLLADORA GRUPO FRASAN', 'Sin documentos', '1', '0', 3, 17, 22, 8, 'MR0CX3DD8M1321048', 'Hilux doble cabina 4 ptas', '2021', 'PCD4151', 'AUC11740945', 2, '2TR-A865119', '0', '0', 'Blanco', 'Bueno', 'Bueno', '2021-09-22', 'CNC000002075', 1, 'CACHO MOTORS S. DE R.L. DE C.V.', 'FRASAN Colors', 'Activo', 'Toyota Hilux doble cabina Pick up submarca: HILUX 4 PTAS T/M PICK UP L4 16 VAL 5 VEL Hilux doble cabina 4 ptas', 'Sin datos', 1, 6, 'Físicamente en FRASAN Colors durante inventario de Dic 2023. En FRASAN Colors febrero 2024 de acuerdo a inventario', '2024-12-06 09:43:30', 23, 2, 29, 2),
(73, '0073', '207', 1, 'CONSTRUCTORA Y DESARROLLADORA GRUPO FRASAN', 'Sin documentos', '1', '0', 4, 17, 22, 8, 'MR0CX3DD0N1420674', 'Hilux doble cabina 4 puertas', '2022', 'LF73228', 'CAC12703831', 2, '2TR-A993542', '0', '0', 'Blanco', 'Bueno', 'Bueno', '2022-08-23', 'CNC000002986', 1, 'CACHO MOTORS S. DE R.L. DE C.V.', 'GIRSA Tlane', 'Activo', 'Vehículo nuevo', 'Sin datos', 1, 13, 'Ernesto entrega archivo en PDF 6 de septiembre de 2022 e informa que la camioneta fue entregada a Victo Gerardo Zamudio Lozano Físicamente en GIRSA Tlalnepantla durante inventario de diciembre 2023. Físicamente en GIRSA inventario febrero 2024', '2024-12-06 09:45:39', 23, 5, 28, 4),
(74, '0074', '209', 1, 'LEASE AND FLEET SOLUTIONS SA DE CV', 'Sin documentos', '1', '0', 4, 48, 3, 4, 'LSGHD52H7KD104413', 'AVEO SEDAN', '2019', 'NGH1258', 'AUC15877236', 2, 'Hecho en China', '0', '0', 'Blanco', 'Bueno', 'Bueno', '2022-10-21', 'C10310', 1, 'LUMO FINANCIERA DEL CENTRO', 'FRASANCO', 'Activo', 'Automovil 4 cilindros. 5 personas uso particular', 'Sin datos', 1, 7, 'Se da de alta con copia de Tarjeta de Circulación no contamos con papeles 12/09/2022 En Bodega Xhala 6 de diciembre de 2023 asignada a Marco Colin 74.580 km Se adjunta hoja de servicio a expediente. Asignado a Marco Colin Feb 2024 ', '2024-11-14 11:50:36', 26, 7, 0, 0),
(75, '0075', '211', 1, 'LEASE AND FLEET SOLUTIONS SA DE CV', 'Sin documentos', '1', '0', 4, 20, 49, 22, '9C6DG2715K0003138', 'XTZ250', '2019', '9888K8', 'MTC16443935', 2, 'G3F2E-011792', '0', '0', 'Verde', 'Bueno', 'Bueno', '2022-10-21', 'C 3377', 3, 'LEASE AND FLEET SOLUTIONS. S.A. DE C.V.', 'GIRSA DEL VALLE DE MEXICO', 'Activo', 'Motocicleta usada', 'Sin datos', 1, 3, 'Reporta Erika entrada física a bodega 7 de Sept 2022 Ernesto entrega factura original 27 de Octubre 2022 Asignada a vigilancia reportan Simón y Joan el lunes 14 de Nov 2022 Físicamente en GIRSA Valle de México durante inventario de Dic 2023 Asignada a Jonathan Castañeda. Físicamente en GIRSA Valle de México durante inventario de Febrero de 2024', '2024-12-12 13:06:41', 23, 6, 24, 2),
(76, '0076', '212', 1, 'LEASE AND FLEET SOLUTIONS SA DE CV', 'Sin documentos', '0', '0', 3, 20, 49, 22, '9C6DG2712K0003128', 'XTZ250', '2019', '78BYB1', 'MTC15433226', 2, 'G3F2E-011781', '0', '0', 'Verde', 'Bueno', 'Bueno', '2022-10-21', 'C 3379', 1, 'LEASE AND FLEET SOLUTIONS. S.A. DE C.V.', 'Vision México', 'Activo', 'Motocicleta usada', 'Sin datos', 1, 18, 'Reporta Erika entrada física a bodega 7 de Sept 2022 Ernesto entrega factura original 27 de octubre 2022 Erika Euroza indica que se encuentra en Relleno Sanitario de Tlane bajo resguardo de Jonathan Castañeda 6 de diciembre de 2023 pero se encuentra en FRASAN Colors durante inventario físico de Dic de 2023 y Jonathan indica que se entrego a Administración y Finanzas. En FRASAN Colors Febrero 2024 de acuerdo a inventario', '2024-12-12 15:00:07', 23, 9, 30, 1);
INSERT INTO `tb_vehiculos` (`idVehiculo`, `folio`, `eco`, `propietario_id`, `nombreTarjeta`, `facturaOrigen`, `gps`, `duplicadoLlaves`, `clase_id`, `marca_id`, `subMarca_id`, `transporte_id`, `serie`, `modelo`, `anio`, `placas`, `numTarjeta`, `combustible_id`, `motor`, `km`, `hrs`, `color`, `estadoFisico`, `estadoOperativo`, `fechaCompra`, `noFactura`, `seguro_id`, `proveedorCompra`, `ubicacion`, `estatus`, `descripcionVehiculo`, `accesoriosVehiculo`, `stock`, `responsable_id`, `observaciones`, `created_at`, `usuario_id`, `area_id`, `usuario_asignado_id`, `unidad_id`) VALUES
(77, '0077', '213', 1, 'LEASE AND FLEET SOLUTIONS SA DE CV', 'F02D77EA-FB7B-4B71-B1C2-6BB45C20B38D', '0', '0', 3, 20, 49, 22, 'MH3RH07P2KK007916', 'MT-03', '2019', 'W61HX', 'MTC7731247', 2, 'H402E-0063763', '0', '0', 'Negro mate', 'Bueno', 'Bueno', '2022-10-21', 'C 3381', 3, 'LEASE AND FLEET SOLUTIONS. S.A. DE C.V.', 'CON EL CLIENTE', 'Ventas', 'Motocicleta usada', 'Sin datos', 1, 20, 'Reporta Erika entrada física a bodega 7 de Sept 2022 Ernesto entrega factura original 27 de Octubre 2022 Se encuentra físicamente en GIRSA Valle de México durante inventario Dic 2023. Físicamente en GIRSA Valle de México durante inventario de Feb 2024. ', '2024-12-06 09:52:55', 23, 8, 24, 2),
(78, '0078', '214', 1, 'Sin documentos', '137 / 138 PED 193031679007055', '0', '0', 1, 16, 46, 24, '1947400029', 'POWRLINER 6955', '0', 'N/A', 'N/A', 2, 'Motor 850-3300', '0', '0', 'Sin datos', 'Bueno', 'Bueno', '2022-10-21', 'C 3388', 1, 'LEASE AND FLEET SOLUTIONS. S.A. DE C.V.', 'Terreno Coyotepec', 'Activo', 'Maquina pintarrayas usada', 'Trazador de líneas sin aire con sistema airless impulsada por motor a gasolina. Recomendada para aplicación de pinturas vinílicas base agua. base solvente. esmaltes. alquílicos. poliuretanos. alquitrane ulla. hule clorado. impermeabilizantes. y mate', 1, 12, 'Ernesto entrega factura original 27 de Octubre 2022 En Terreno Coyotepec de acuerdo a inventario del 6 de dic del 2023. En Terreno Coyotepec Febrero 2024 de acuerdo a inventario', '2024-12-12 12:06:43', 23, 8, 27, 7),
(79, '0079', '215', 1, 'Sin documentos', '137 y 138 PED 193031679007055', '0', '0', 1, 16, 46, 24, '1947400028', 'POWRLINER 6955', '0', 'No Aplica', 'No Aplica', 2, 'Motor 850-3300', '0', '0', 'Sin datos', 'Bueno', 'Bueno', '2022-10-21', 'C 3389', 1, 'LEASE AND FLEET SOLUTIONS. S.A. DE C.V.', 'Terreno Coyotepec', 'Activo', 'Maquina pintarrayas usada', 'Trazador de líneas sin aire con sistema airless impulsada por motor a gasolina Recomendada para aplicación de pinturas vinílicas base agua base solvente esmaltes alquílicos poliuretanos alquitrane Ulla hule clorado impermeabilizantes y mate', 1, 12, 'Ernesto entrega factura original 27 de Octubre 2022 En Terreno Coyotepec de acuerdo a inventario del 6 de Dic del 2023 En Terreno Coyotepec Febrero 2024 de acuerdo a inventario', '2024-12-12 12:07:15', 23, 8, 27, 7),
(80, '0080', '216', 1, 'Sin documentos', '137 / 138 PED 193031679007055', '0', '0', 1, 16, 46, 24, '1947400035', 'POWRLINER 6955', '0', 'N/A', 'N/A', 2, 'Motor 850-3300', '0', '0', 'Sin datos', 'Bueno', 'Bueno', '2022-10-21', 'C 3390', 1, 'LEASE AND FLEET SOLUTIONS. S.A. DE C.V.', 'Terreno Coyotepec', 'Activo', 'Maquina pintarrayas usada', 'Trazador de lineas sin aire con sistema airless impulsada por motor a gasolina. Recomendada para aplicación de pinturas vinílicas base agua. base solvente. esmaltes. alquílicos. poliuretanos. alquitrane ulla. hule clorado. impermeabilizantes. y mate', 1, 12, 'Ernesto entrega factura original 27 de Octubre 2022 En Terreno Coyotepec de acuerdo a inventario del 6 de dic del 2023. En Terreno Coyotepec Febrero 2024 de acuerdo a inventario', '2024-12-12 12:07:41', 23, 8, 27, 7),
(81, '0081', '217', 7, 'Sin documentos', '203035910002288', '0', '0', 3, 35, 20, 4, 'CJ2A17952', 'Willys', '1946', 'DP993', '14537049164', 2, 'Sin datos', '0', '0', 'Verde olivo', 'Bueno', 'Bueno', '2020-06-17', '748', 1, 'IDN SERVICIOS ADUANALES Y LOGISTICA EN COMERSIO EXTERIOR S DE RL DE CV', 'Club de Golf Hacienda', 'Activo', 'AutomÃ³vil clÃ¡sico', 'Sin datos', 1, 11, 'Fá­sicamente en casa Club de golf durante inventario de Dic 2023 a nombre de FRANCISCO JAVIER SANTOS ARREOLA', '2024-03-11 00:00:00', 14, 0, 0, 0),
(82, '0082', '218', 1, 'Sin documentos', '137 / 138 PED 193031679007055', '0', '0', 2, 16, 46, 24, '1947400036', 'POWRLINER 6955', '0', 'N/A', 'N/A', 2, 'Motor 850-3300', '0', '0', 'Sin datos', 'Bueno', 'Bueno', '2022-10-21', 'C 3391', 1, 'LEASE AND FLEET SOLUTIONS. S.A. DE C.V.', 'Terreno Coyotepec', 'Activo', 'Maquina pintarrayas usada', 'Trazador de líneas sin aire con sistema airless impulsada por motor a gasolina. Recomendada para aplicación de pinturas vinílicas base agua. base solvente. esmaltes. alquidalicos. poliuretanos. alquitrane ulla. hule clorado. impermeabilizantes. y mate', 1, 12, 'Ernesto entrega factura original 27 de Octubre 2022 En Terreno Coyotepec de acuerdo a inventario del 6 de dic del 2023. En Terreno Coyotepec Febrero 2024 de acuerdo a inventario', '2024-12-12 12:08:00', 23, 8, 27, 7),
(83, '0083', '220', 1, 'CONSTRUCTORA Y DESARROLLADORA GRUPO FRASAN', 'Sin documentos', '0', '0', 3, 20, 49, 22, '9C6DG2712K0003149', 'XTZ250', '2019', '3299K3', 'MTC13734012', 2, 'G3F2E-011764', '0', '0', 'Sin datos', 'Bueno', 'Bueno', '2022-09-07', 'C 3378', 1, 'LEASE AND FLEET SOLUTIONS. S.A. DE C.V.', 'GIRSA Tlane', 'Activo', 'Motocicleta usada', 'Sin datos', 1, 13, 'Reporta Erika entrada física a bodega 7 de Sept 2022 Ernesto entrega factura original 27 de octubre 2022 GIRSA Tlalnepantla Inventario Dic 2023. En Taller Mecánico inventario GIRSA febrero 2024', '2024-11-20 17:48:49', 14, 5, 17, 6),
(84, '0084', '221', 1, 'Sin documentos', '1000000405999910', '0', '0', 4, 20, 49, 22, '9C6DG271XK0003104', 'XTZ250', '2019', 'Sin placas', 'Sin documentos', 2, 'G3F2E-011754', '0', '0', 'Verde', 'Bueno', 'Bueno', '2022-10-21', 'C 3374', 1, 'LEASE AND FLEET SOLUTIONS. S.A. DE C.V.', 'Bodega Xhala', 'Activo', 'Motocicleta usada', 'Sin datos', 1, 12, 'Reporta Erika entrada física a bodega 7 de Sept 2022 Ernesto entrega factura original 27 de octubre 2022 En bodega Xhala 6 de diciembre de 2023 descompuesta se utiliza para refacciones de otras motos. En bodega Xhala febrero 2024 de acuerdo a Inventario', '2024-12-12 12:08:24', 23, 7, 27, 7),
(85, '0085', '222', 1, 'LEASE AND FLEET SOLUTIONS SA DE CV', 'Sin documentos', '0', '0', 3, 20, 49, 22, '9C6DG2712K0003130', 'XTZ250', '2019', '43BYS9', 'MTC15995999', 2, 'G3F2E-011782', '0', '0', 'Verde', 'Bueno', 'Bueno', '2022-10-21', 'C 3376', 1, 'LEASE AND FLEET SOLUTIONS. S.A. DE C.V.', 'GIRSA Tlane', 'Activo', 'Motocicleta Usada', 'Sin datos', 1, 13, 'Reporta Erika entrada física a bodega 7 de Sept 2022 Ernesto entrega factura original 27 de octubre 2022 Vigilancia GIRSA Tlalnepantla Inventario 15 dic 2023. Físicamente  en GIRSA inventario febrero 2024', '2024-12-12 12:09:09', 23, 5, 17, 5),
(86, '0086', '226', 1, 'CONSTRUCTORA Y DESARROLLADORA GRUPO FRASAN', 'Sin documentos', '1', '0', 3, 17, 22, 8, 'MR0CX3DD5M1318124', 'Hilux 4 puertas', '2021', 'NYK1540', 'AUC11131048', 2, '2TR-A802139', '0', '0', 'GRIS', 'Bueno', 'Bueno', '2021-04-13', 'CNC000001244', 1, 'CACHO MOTORS S. DE R.L. DE C.V.', 'Bodega Xhala', 'Activo', 'CAMIONETA TOYOTA HILUX NUEVA COLOR GRIS OXFORD submarca: HILUX 4 PTAS PICK UP DOBLE CABINA 4 CIL', 'Logos amarillos de Tandem', 1, 12, 'Seguro GNP vigencia 17 de Marzo 2021 al 1 de Abril de 2022 Físicamente en Tándem Pachuca durante inventario Dic 2023.Asignada a Simón Vaca a partir de Febrero de 2024', '2024-12-12 12:08:44', 23, 7, 27, 7),
(87, '0087', '227', 1, 'CONSTRUCTORA Y DESARROLLADORA GRUPO FRASAN', 'Sin documentos', '1', '0', 3, 17, 26, 4, 'JTDKDTB38M1143140', 'Hatchback', '2021', '15J352', 'ECC11141788', 3, '1NZ-9204017', '0', '0', 'Verde', 'Bueno', 'Bueno', '2021-03-12', 'CNC000001246', 1, 'CACHO MOTORS S. DE R.L. DE C.V.', 'FRASAN Colors', 'Activo', 'AUTOMOVIL TIPO HATCHBACK 4 PUERTAS VERSION PRIUS C submarca: PRIUS HIBRIDO 5 PTAS T/A HATCHBACK L4 16 VALVULAS', 'Sin datos', 1, 16, 'VEHICULO NUEVO CON SEGURO GNP CON VIGENCIA DEL 1 DE MARZO DEL 2021 AL 16 DE MARZO DE 2022 Revisión física de la unidad durante inventario Diciembre de 2023. En FRASAN Colors Febrero 2024 de acuerdo a inventario', '2024-12-06 09:57:12', 23, 10, 31, 8),
(88, '0088', '228', 1, 'CONSTRUCTORA Y DESARROLLADORA GRUPO FRASAN', 'Sin documentos', '1', '1', 3, 17, 26, 4, 'JTDKDTB33M1143143', 'Hatchback', '2021', '15J348', 'ECC11131033', 3, '1NZ-9204042', '0', '0', 'Amarillo', 'Bueno', 'Bueno', '2021-03-12', 'CNC000001245', 1, 'CACHO MOTORS S. DE R.L. DE C.V.', 'Vision México', 'Activo', 'AUTOMOVIL TIPO HATCHBACK 4 PUERTAS VERSION PRIUS C submarca: PRIUS HIBRIDO 5 PTAS T/A HATCHBACK L4 16 VALVULAS', 'Sin datos', 1, 18, 'VEHICULO NUEVO CON SEGURO GNP CON VIGENCIA DEL 1 DE MARZO DE 2021 AL 16 DE MARZO DE 2022 Revisión física durante inventario de diciembre de 2023. En Visión México febrero 2024 de acuerdo a inventario', '2024-12-10 15:15:19', 14, 1, 18, 1),
(89, '0089', '229', 1, 'Sin documentos', '213035841002655', '0', '0', 2, 36, 62, 14, 'KMTPC180T54A90202', 'PC200LC-8', '0', 'Sin placas', 'Sin documentos', 1, 'Sin datos', '0', '0', 'Sin datos', 'Bueno', 'Bueno', '2021-04-26', 'A2904', 1, 'CONSORCIO ADUANAL DE REYNOSA IP S.A. DE C.V.', 'Terreno Coyotepec', 'Activo', 'EXCAVADORA USADA', 'Sin datos', 1, 12, 'Llega de Mc Allen Texas 23 de Abril de 2021 En obra en Relleno Sanitario de Tlalnepantla a partir de junio de 2021 (Ficha tecnica 66) 11 de agosto regresa de Relleno Sanitario a Terreno en Coyotepec En Terreno Coyotepec de acuerdo a inventario del 6 de Dic del 2023. En Terreno Coyotepec Febrero 2024 de acuerdo a inventario', '2024-12-12 12:09:32', 23, 8, 27, 7),
(90, '0090', '230', 1, 'CONSTRUCTORA Y DESARROLLADORA GRUPO FRASAN', 'Sin documentos', '1', '0', 4, 17, 22, 8, 'MR0CX3DDXM1316224', 'Hilux pick up', '2021', 'PAL5648', 'AUC1120102', 2, '2TR-A782265', '0', '0', 'Blanco', 'Bueno', 'Bueno', '2021-03-26', 'CNC000001296', 1, 'CACHO MOTORS S. DE R.L. DE C.V.', 'Bodega Xhala', 'Activo', 'Camioneta nueva Toyota Hilux tipo Pick up doble cabina submarca: HILUX 4 PTAS T/M PICK UP L4 16 VAL 5 VEL DOBLE CABINA', 'Sin datos', 1, 12, 'A resguardo de Simón Vaca 9 de abril de 2021 En Bodega Xhala 6 de dic 2023 de acuerdo a inventario 104.461 Km Se adjunta hoja de servicio realizado por Simón Vaca $3.000 9 de Nov 2023. En bodega Xhala febrero 2024 de acuerdo a Inventario', '2024-11-14 12:22:09', 26, 7, 0, 0),
(91, '0091', '231', 1, 'Sin documentos', '213035841002845', '0', '0', 2, 19, 48, 14, 'VCEC340DH00210316', 'EC340DL', '2013', 'Sin placas', 'Sin documentos', 1, 'Sin datos', '0', '0', 'Sin datos', 'Bueno', 'Bueno', '2021-04-26', 'A-2905', 1, 'CONSORCIO ADUANAL DE REYNOSA IP S.A. DE C.V.', 'GIRSA DEL VALLE DE MEXICO', 'Activo', 'Excavadora usada de acondicionamiento hidráulico montada sobre orugas con un giro de 360 grados', 'Sin datos', 1, 3, 'Pedimento 21303584 1002845 9 de Agosto Sale a obra en relleno sanitario Tlalnepantla (Ficha tecnica 66 ) Regresa a Terreno Coyotepec del Relleno Sanitario 1 de Diciembre de 2021 Sale 13 de julio de 2022 a Relleno Tlane Físicamente en GIRSA Valle de México durante inventario de Dic 2023 En reparación mando final del Tránsito. Físicamente en GIRSA Valle de México durante inventario de febrero de 2024', '2024-11-14 16:05:49', 26, 6, 0, 0),
(92, '0092', '232', 1, 'CONSTRUCTORA Y DESARROLLADORA GRUPO FRASAN', 'Sin documentos', '1', '1', 3, 17, 22, 8, 'MR0CX3DD0M1318600', 'Hilux pick up D cabina', '2021', 'LE74224', 'CAC12645511', 2, '2TR-A825447', '0', '0', 'Blanco', 'Bueno', 'Bueno', '2021-04-21', 'CNC000001398', 1, 'CACHO MOTORS S. DE R.L. DE C.V.', 'GIRSA Tlane ', 'Activo', 'Camioneta nueva submarca: HILUX 4 PTAS T/M PICK UP L4 16 VAL 5 VEL DOBLE CABINA', 'Logos azules de Constructora Pacifico', 1, 13, 'Asegurada con GNP del 16 de abril 2021 al 1 de mayo 2022 Asignada para campaña 100% Asignada a Constructora Pacifico. se queda en FRASAN Colors Asignada a Erick Velarde se la lleva a su casa Físicamente en Tándem Pachuca durante inventario Dic 2023. En ruta asignada a Erick Velarde durante inventario de febrero 2024 en Tándem Pachuca', '2024-11-21 12:33:47', 26, 5, 17, 6),
(93, '0093', '233', 1, 'CONSTRUCTORA Y DESARROLLADORA GRUPO FRASAN', 'Sin documentos', '0', '0', 3, 20, 49, 22, '9C6DG2712K0003121', 'XTZ250', '2019', '8902k2', 'MTC7637340', 2, 'G3F2E-011774', '0', '0', 'Verde', 'Bueno', 'Bueno', '2022-09-07', 'C 3375', 1, 'LEASE AND FLEET SOLUTIONS. S.A. DE C.V.', 'GIRSA Tlane', 'Activo', 'MOTOCICLETA USADA', 'Sin datos', 1, 13, 'Reporta Erika entrada física a bodega 7 de Sept 2022 Ernesto entrega factura original 27 de octubre 2022 GIRSA Tlalnepantla Inventario Dic 2023. Físicamente en GIRSA inventario febrero 2024', '2024-11-14 16:09:47', 26, 5, 0, 0),
(94, '0094', '234', 1, 'CONSTRUCTORA Y DESARROLLADORA GRUPO FRASAN', 'Sin documentos', '0', '0', 3, 20, 49, 22, '9C6DG2716K0003102', 'XTZ250', '2019', '27BUA3', 'MTC14815126', 2, 'G3F2E-011752', '0', '0', 'Verde', 'Bueno', 'Bueno', '2022-09-07', 'C 3373', 1, 'LEASE AND FLEET SOLUTIONS. S.A. DE C.V.', 'GIRSA Tlane', 'Activo', 'Motocicleta usada', 'Sin datos', 1, 13, 'Reporta Erika entrada física a bodega 7 de Sept 2022 Ernesto entrega factura original 27 de octubre 2022 GIRSA Tlalnepantla inventario 15 dic 2023. Físicamente en GIRSA inventario febrero 2024', '2024-11-14 16:12:15', 26, 5, 0, 0),
(95, '0095', '235', 1, 'LEASE AND FLEET SOLUTIONS SA DE CV', 'Sin documentos', '0', '0', 3, 20, 49, 22, '9C6DG2711K0003122', 'TENERE', '2019', 'W73HW', 'MTC7650178', 2, 'G3F2E011775', '0', '0', 'Verde', 'Bueno', 'Bueno', '2022-10-21', 'C 3394', 3, 'LEASE AND FLEET SOLUTIONS. S.A. DE C.V.', 'GIRSA DEL VALLE DE MEXICO', 'Activo', 'Motocicleta usada Yamaha doble propósito', 'Sin datos', 1, 3, 'Reporta Erika entrada física a bodega 7 de Sept 2022 Ernesto entrega factura original 27 de octubre 2022 Físicamente en GIRSA Valle de México durante inventario de Dic 2023. Físicamente en GIRSA Valle de México durante inventario de febrero de 2024', '2024-11-14 16:14:18', 26, 6, 0, 0),
(96, '0096', '236', 1, 'LEASE AND FLEET SOLUTIONS SA DE CV', '1000000405999910', '0', '0', 3, 20, 49, 22, '9C6DG2715K0003124', 'XTZ250 Tenere', '2019', '1275K3', 'MTC15877238', 2, 'G3F2E-011773', '0', '0', 'Verde', 'Bueno', 'Bueno', '2022-10-21', 'C 3380', 3, 'LEASE AND FLEET SOLUTIONS. S.A. DE C.V.', 'GIRSA DEL VALLE DE MEXICO', 'Activo', 'Motocicleta usada', 'Sin datos', 1, 3, 'Reporta Erika entrada física a bodega 7 de Sept 2022 Ernesto entrega factura original 27 de octubre 2022 Físicamente en GIRSA Valle de México durante inventario de Dic 2023. Físicamente en GIRSA Valle de México durante inventario de febrero de 2024', '2024-11-14 16:14:58', 26, 6, 0, 0),
(97, '0097', '237', 1, 'N/A', 'Sin documentos', '0', '0', 1, 44, 73, 2, '1A9AS432XK2228229', 'GP432T E1', '0', 'N/A', 'N/A', 4, 'Sin datos', '0', '0', 'Naranja', 'Bueno', 'Bueno', '2022-10-21', 'C 3384', 1, 'LEASE AND FLEET SOLUTIONS. S.A. DE C.V.', 'Terreno Coyotepec', 'Activo', 'Anuncio All LED. Full Matrix con capacidad para gráficos tanto estáticos como dinámicos', 'Utiliza led ámbar ITE de 30 grados Cuenta con panel solar y banco de baterías propios', 1, 12, 'Ernesto entrega factura original 27 de Octubre 2022 Llega a bodega azul 27 de Febrero de 2023 en buen estado En Terreno Coyotepec 6 de Dic 2023 de acuerdo a inventario. En Terreno Coyotepec Febrero 2024 de acuerdo a inventario', '2024-12-12 12:09:55', 23, 8, 27, 7),
(98, '0098', '238', 1, 'N/A', 'Sin documentos', '0', '0', 1, 44, 73, 2, '1A9AS4326K2228230', 'GP432T E1', '2019', 'N/A', 'N/A', 4, 'Sin datos', '0', '0', 'Naranja', 'Bueno', 'Bueno', '2022-10-21', 'C 3385', 1, 'LEASE AND FLEET SOLUTIONS. S.A. DE C.V.', 'Terreno Coyotepec', 'Activo', 'Anuncio All LED. Full Matrix con capacidad para gráficos tanto estáticos como dinámicos', 'Utiliza LED Ámbar ITE de 30 grados Cuenta con panel solar y banco de baterías propios', 1, 12, 'Ernesto entrega factura original 27 de Octubre 2022 Llega a bodega azul 27 de Febrero de 2023 En terreno Coyotepec 6 de dic 2023 de acuerdo a Inventario. En Terreno Coyotepec Febrero 2024 de acuerdo a inventario', '2024-12-12 12:10:10', 23, 8, 27, 7),
(99, '0099', '239', 1, 'CONSTRUCTORA Y DESARROLLADORA GRUPO FRASAN', 'Sin documentos', '1', '0', 4, 17, 22, 8, 'MR0CX3DD1N1333611', 'Hilux doble cabina 4 ptas', '2022', 'LF77199', 'CAC12849492', 2, '2TR-B003060', '0', '0', 'Gris plata', 'Bueno', 'Bueno', '2022-10-12', 'CNC000003076', 3, 'CACHO MOTORS S. DE R.L. DE C.V.', 'GIRSA DEL VALLE DE MEXICO', 'Activo', 'Camioneta nueva', 'Sin datos', 1, 3, 'Ernesto entrega factura Carta factura y copia de TC y placas 27 de Octubre 2022 Físicamente en GIRSA Valle de México durante inventario de Dic 2023. Asignada a Daniel Cadeñanez. Físicamente en GIRSA Valle de México durante inventario de Febrero de 2024', '2024-11-14 16:17:12', 26, 6, 0, 0),
(100, '0100', '243', 11, 'JENIFER SANTOS ZAMUDIO', 'Sin documentos', '1', '0', 3, 17, 27, 4, 'JTDKAMFUXN3184781', 'Prius Sedan', '2022', '33J441', 'ECC12959794', 3, '2ZR2S83949', '0', '0', 'Blanco', 'Bueno', 'Bueno', '2022-11-26', 'CNC000003171', 5, 'CACHO MOTORS S. DE R.L. DE C.V.', 'FRASAN Colors', 'Activo', 'Prius hibrido Sedan 5 puertas', 'Sin datos', 1, 9, 'Unidad Asignada a Luz Elena Zamudio Villagrana Se reviso físicamente durante inventario de Dic 2023 en FRASAN Colors. En FRASAN Colors Febrero 2024 de acuerdo a inventario', '2024-11-14 16:20:21', 26, 2, 0, 0),
(101, '0101', '244', 1, 'CONSTRUCTORA Y DESARROLLADORA GRUPO FRASAN', 'Sin documentos', '1', '0', 4, 17, 28, 4, 'JTFJM9CP3P6006153', 'HIACE PASAJEROS', '2023', 'LPK092A', 'AUC13018304', 2, '7GRN161352', '0', '0', 'Blanco', 'Bueno', 'Bueno', '2022-12-14', 'CNC000003228', 4, 'CACHO MOTORS S. DE R.L. DE C.V.', 'FRASAN Colors', 'Activo', 'Automovil Van Hiace V6 T/M Panel 12 Pasajeros', 'Sin datos', 1, 7, 'FÃ­sicamente en FRASAN Colors durante inventario de Dic 2023 Asignada HÃ©ctor Torres. En FRASAN Colors Febrero 2024 de acuerdo a inventario', '2024-03-11 00:00:00', 14, 0, 0, 0),
(102, '0102', '245', 1, 'Sin documentos', 'Sin documentos', '0', '0', 3, 47, 1, 4, 'WBACY6106P9P64817', 'X6 xDrive40i M Sport (Automático)', '2023', 'RAT063D', 'A3954815', 2, '12036874', '0', '0', 'Gris claro', 'Bueno', 'Bueno', '2022-12-13', 'AM001518', 1, 'CEVER AUTOMOTRIZ S DE R.L DE C.V', 'Club de Golf Hacienda', 'Activo', 'Automóvil nuevo', 'Placas de Morelos', 1, 11, 'Solo se cuenta con copia de factura. Osvaldo reporta que Mariana va a emplacar en Morelos. el lunes 23 de enero Se recoge carta factura actualizada en agencia para hacer tramite en Morelos Fisicamente en Club de Golf durante inventario Dic 2023', '2024-08-22 12:46:27', 14, 0, 0, 0),
(103, '0103', '246', 8, 'Sin documentos', '233034823000164', '0', '0', 4, 53, 80, 7, '1HTSDADR0TH263190', '4900 4x2', '1996', 'Sin placas', 'Sin documentos', 1, 'AF300 SERIE 1824731 C1', '0', '0', 'Sin Datos', 'Bueno', 'Bueno', '2023-02-09', 'Sin documentos', 1, 'Sin documentos', 'Terreno Coyotepec', 'Activo', 'Camion de bomberos usado', 'Bomba de agua marca WATEROUS COMPANY Modelo CMU SERIE 34020W Motor marca INTERNATIONAL Modelo AF300 Transmisión de bomba de agua Marca WATEROUS COMPANY. Modelo YCX Serie 34022T', 1, 12, 'PEDIMIENTO 233034823000164 En Terreno Coyotepec de acuerdo a inventario del 6 de Dic del 2023. En Terreno Coyotepec Febrero 2024 de acuerdo a inventario', '2024-12-12 12:10:35', 23, 8, 27, 7),
(104, '0104', '248', 8, 'Sin documentos', '233034823000767', '0', '0', 2, 49, 16, 13, '1FVHGSCY4GHHC7363', '108SD', '2016', 'Sin placas', 'Sin documentos', 1, '73820093', '0', '0', 'Sin Datos', 'Bueno', 'Bueno', '2023-03-02', 'Sin documentos', 1, 'Sin documentos', 'Con el cliente', 'Ventas', 'CAMION DE DESASOLVE TIPO VACTOR USADO', 'Motor marca Cummins. modelo ISL350. Serie 73820093 Unidad de succión y almacenamiento Marca Aquatech. Modelo B-10 Serie 20151024 Bomba de Agua s/M serie 15040009', 1, 12, 'PEDIMENTO 233034823000167 LLEGA A TERRENO COYOTEPEC 11 DE MARZO DE 2023 En Terreno Coyotepec de acuerdo a inventario del 6 de dic del 2023. En Terreno Coyotepec Febrero 2024 de acuerdo a inventario-En Nicolas Romero Mayo 2024 falta factura de venta ', '2024-12-12 12:10:54', 23, 8, 27, 7),
(105, '0105', '249', 14, 'Sin documentos', 'Sin documentos', '0', '0', 2, 1, 34, 30, '7ZR24135', 'D7R', '0', 'Sin placas', 'Sin documentos', 1, 'Sin datos', '0', '0', 'Sin datos', 'Bueno', 'Bueno', '0000-00-00', 'Sin documentos', 1, 'Sin documentos', 'GIRSA DEL VALLE DE MEXICO', 'Activo', 'Tractor Usado', 'Sin datos', 1, 3, 'No contamos con documentos se da de alta con entrada a Terreno llega a terreno Coyotepec 19 de febrero de Relleno Tlane Sale 5 de Julio 2023 a Relleno Sanitario Tlalnepantla Físicamente en GIRSA Valle de México durante inventario de Dic 2023. Físicamente en GIRSA Valle de México durante inventario de Febrero de 2024', '2024-11-14 16:45:23', 26, 6, 0, 0),
(106, '0106', '250', 14, 'Sin documentos', 'Sin documentos', '0', '0', 2, 1, 34, 12, 'CAT0816FTBZR00239', '816F', '0', 'Sin placas', 'Sin documentos', 1, 'Sin datos', '0', '0', 'Verde', 'Bueno', 'Bueno', '0000-00-00', 'Sin documentos', 1, 'Sin documentos', 'GIRSA DEL VALLE DE MEXICO', 'Activo', 'Sin datos', 'Sin datos', 1, 3, 'No contamos con documentos se da de alta con entrada a Terreno 19 de febrero 2023 Sale 5 de Julio de 2023 al Relleno sanitario de Tlalnepantla. Llega de Relleno Sanitario Tlane 4 de octubre de 2023 a Terreno Coyotepec para reparación. Se mando a GIRSA Valle de México octubre de 2023 reportado por FRANSANCO 30 de Oct. Físicamente en GIRSA Valle de México durante inventario de Dic 2023 EN FUNCIONAMIENTO. Físicamente en GIRSA Valle de México durante inventario de febrero de 2024', '2024-11-14 16:46:31', 26, 6, 0, 0),
(107, '0107', '251', 14, 'Sin documentos', 'Sin documentos', '0', '0', 2, 1, 34, 33, 'CAT0953DKLBP01390', '953D', '0', 'N/A', 'N/A', 1, 'C6.6 ACERT', '0', '0', 'Verde', 'Bueno', 'Bueno', '2017-01-01', 'Sin documentos', 2, 'Sin documentos', 'Terreno Coyotepec', 'Activo', 'Cargador sobre orugas', 'Sin datos', 1, 12, 'No contamos con documentos se da de alta con entrada a terreno 19 de febrero 2023 En Terreno Coyotepec de acuerdo a inventario del 6 de dic del 2023. En Terreno Coyotepec Febrero 2024 de acuerdo a inventario', '2024-12-12 12:11:14', 23, 8, 27, 7),
(108, '0108', '252', 14, 'N/A', '113035841002577', '0', '0', 2, 1, 34, 23, '72V1609', '140G', '0', 'N/A', 'N/A', 1, 'Caterpila Euro 3', '0', '0', 'Sin datos', 'Bueno', 'Bueno', '2011-04-19', 'Sin documentos', 2, 'UNIVERSAL TRUCKS & EQUIPEMENT SALES', 'GIRSA Tlane', 'Activo', 'Motoniveladora usada con Ripper', 'Sin datos', 1, 13, 'llega 15 de marzo de 2023 de San Lorenzo Tensunco Xochimilco Recibe el viernes 24 de Marzo de 2023 Contrato de Compra venta de Guillermo Gómez a Adolfo Reyes. Factura F 522 del 17 de febrero de 2012 y pedimento 11303584 1002577 27 de Julio 2023 Sale de Terreno Coyote a Relleno Sanitario Físicamente en GIRSA Valle de México durante inventario de Dic 2023. Físicamente en GIRSA durante inventario de Febrero de 2024', '2024-11-21 12:44:17', 26, 5, 17, 6),
(109, '0109', '253', 1, 'CONSTRUCTORA Y DESARROLLADORA GRUPO FRASAN', 'Sin documentos', '0', '0', 3, 17, 29, 8, '5TFNC5DB6PX023273', 'Tundra platinum HV', '2023', '34J330', 'ECC13372558', 3, 'V35-AA156817', '0', '0', 'Rojo', 'Bueno', 'Bueno', '2023-03-15', 'CNC000003433', 4, 'CACHO MOTORS S. DE R.L. DE C.V.', 'Mc Allen', 'Activo', 'Camioneta nueva importada tipo Pick up doble cabina', 'Sin datos', 1, 11, 'Se cuenta con copia de factura Reporta Osvaldo durante inventario de Dic 22023 que la mandaron a Mc Allen', '2024-03-11 00:00:00', 14, 0, 0, 0),
(110, '0110', '254', 1, 'LUMO FINANCIERA DEL CENTRO SA DE CV SOFOMENR', 'AG000006377', '1', '0', 4, 2, 7, 8, '3C6SRBDT2LG137530', 'RAM 1500 CREW CAB 4X4', '2020', 'LWU407A', 'AUC13614701', 2, 'HECHO EN MEXICO', '0', '0', 'Blanco', 'Bueno', 'Bueno', '2023-03-29', 'C 11708', 1, 'LUMO FINANCIERA DEL CENTRO', 'GIRSA Tlane', 'Ventas', 'Camioneta RAM 1500', 'Sin datos', 1, 13, 'Unidad asignada a Constructora Pacifico Septiembre 2023 Durante inventario de Dic 2023 se encuentra físicamente en Relleno Tlalnepantla en funcionamiento. Físicamente  en GIRSA inventario Febrero 2024', '2024-11-21 12:44:48', 26, 5, 17, 6),
(111, '0111', '255', 1, 'LUMO FINANCIERA DEL CENTRO SA DE CV SOFOMENR', 'A87007', '1', '0', 3, 2, 6, 4, '2C3CDXAG3LH106498', 'Charger policia V6', '2020', 'LWU408A', 'AUC13614710', 2, 'HECHO EN USA', '0', '0', 'Blanco', 'Bueno', 'Bueno', '2023-03-29', 'C 11699', 1, 'LUMO FINANCIERA DEL CENTRO', 'Pacifico', 'Activo', 'Camioneta de Policia V6', 'Sin datos', 1, 7, 'Asignado a Constructora Pacifico Se revisa en FRASAN Colors el 7 de dic 2023 considerando inventario. Cuenta con 260.013 Km. Prestado a Diputado Anuar por instrucciones de Paco indica Hector Torres', '2024-11-14 16:54:55', 26, 9, 0, 0),
(112, '0112', '258', 1, 'LUMO FINANCIERA DEL CENTRO SA DE CV SOFOMENR', 'AG000006271', '0', '0', 4, 2, 7, 8, '3C6SRBDT8LG137578', 'RAM 1500 CREW CAB 4X4', '2020', 'Sin placas', 'Sin documentos', 2, 'HECHO EN MEXICO', '0', '0', 'Blanco brillante', 'Bueno', 'Bueno', '2023-03-29', 'C 11706', 1, 'LUMO FINANCIERA DEL CENTRO', 'FRASAN Colors', 'Activo', 'Camioneta RAM 1500 CREW 4X4', 'Sin datos', 1, 7, 'Se recibe factura por correo 26 de Abril 2023 Se lleva a resguardo a Terreno Coyotepec 15 de Junio de 2023 En pintura y reparación FRASAN Colors 7 de Dic 2023. En FRASAN Colors Febrero 2024 de acuerdo a inventario', '2024-12-06 10:05:09', 23, 9, 7, 9),
(113, '0113', '259', 1, 'LUMO FINANCIERA DEL CENTRO SA DE CV SOFOMENR', 'AG000006330', '0', '0', 4, 2, 7, 8, '3C6SRBDT6LG133612', 'RAM 1500 CREW CAB 4X4', '2020', 'EF56347', 'Sin documentos', 2, 'HECHO EN MEXICO', '0', '0', 'Blanco brillante', 'Bueno', 'Bueno', '2023-03-29', 'C 11713', 1, 'LUMO FINANCIERA DEL CENTRO', 'FRASAN Colors', 'Activo', 'Camioneta RAM 1500 CREW 4X4', 'Sin datos', 1, 7, 'Se reciben facturas x correo 26 de Abril 2023 Físicamente en FRASAN Colors durante inventario Dic 2023 En Reparación. En FRASAN Colors Febrero 2024 de acuerdo a inventario', '2024-11-13 17:27:12', 26, 8, 0, 0),
(114, '0114', '260', 3, 'GIRSA VALLE DE MEXICO', 'AG000006323', '0', '0', 4, 2, 7, 8, '3C6SRBDT4LG137514', 'RAM 1500 CREW CAB 4X4', '2020', 'MVE578A', 'Sin documentos', 1, 'HECHO EN MEXICO', '0', '0', 'Blanco brillante', 'Bueno', 'Bueno', '2023-03-29', 'C 11707', 1, 'LUMO FINANCIERA DEL CENTRO', 'GIRSA DEL VALLE DE MEXICO', 'Activo', 'camioneta ram 4x4', 'Sin datos', 1, 3, 'Se reciben facturas x correo 26 de Abr 2023 Se lleva a resguardo a Terreno Coyotepec 15 de junio de 2023 29 de agosto 2023 Sale de Terreno Coyotepec a Villa Nicolas Romero Físicamente en GIRSA Valle de México durante inventario de Dic 2023. Le falta modulo ABC en reparación. Físicamente en GIRSA Valle de México durante inventario de febrero de 2024', '2024-11-14 17:04:01', 26, 6, 0, 0),
(115, '0115', '261', 1, 'LUMO FINANCIERA DEL CENTRO SA DE CV SOFOMENR', 'AG000006308', '0', '0', 4, 2, 7, 8, '3C6SRBDT4LG133558', 'RAM 1500 CREW CAB 4X4', '2020', 'EF58206', 'Sin documentos', 2, 'HECHO EN MEXICO', '0', '0', 'Blanco brillante', 'Bueno', 'Bueno', '2023-03-31', 'C 11733', 1, 'LUMO FINANCIERA DEL CENTRO', 'Terreno Coyotepec', 'Activo', 'Camioneta RAM 1500 CREW 4X4', 'Sin datos', 1, 12, 'Se reciben facturas x correo 26 de Abril de 2023 Se lleva a resguardo a Terreno Coyotepec 15 de Junio de 2023 En Terreno Coyotepec de acuerdo a inventario del 6 de dic del 2023. En Terreno Coyotepec Febrero 2024 de acuerdo a inventario', '2024-12-12 12:11:42', 23, 8, 27, 7),
(116, '0116', '263', 3, 'GIRSA VALLE DE MEXICO', 'AG000006278', '0', '0', 4, 2, 7, 8, '3C6SRBDT1LG133582', 'RAM 1500 CREW CAB 4X4', '2020', 'MVE593A', 'Sin documentos', 1, 'HECHO EN MEXICO', '0', '0', 'Blanco brillante', 'Bueno', 'Bueno', '2023-03-29', 'C 11704', 1, 'LUMO FINANCIERA DEL CENTRO', 'GIRSA DEL VALLE DE MEXICO', 'Activo', 'camioneta ram 4x4', 'Sin datos', 1, 3, 'Se reciben facturas x correo 26 Abril 2023 Se lleva a resguardo a Terreno Coyotepec 15 de junio de 2023 29 agosto 2023 Sale de Terreno Coyotepec a Villa Nicolas Romero Físicamente en GIRSA Valle de México durante inventario de Dic 2023 (Golpe abajo de puerta del conductor. Indica Johatan que lo repara jefe de turno por descuido). Físicamente en GIRSA Valle de México durante inventario de febrero de 2024 golpe arreglado', '2024-11-14 17:10:33', 26, 6, 0, 0),
(117, '0117', '265', 1, 'LUMO FINANCIERA DEL CENTRO SA DE CV SOFOMENR', 'A87721', '0', '0', 4, 2, 6, 4, '2C3CDXAGXLH106479', 'Charger policia V6', '2020', 'ENU4481', 'Sin documentos', 2, 'Hecho en USA', '0', '0', 'Blanco brillante', 'Bueno', 'Bueno', '2023-03-29', 'C 11697', 1, 'LUMO FINANCIERA DEL CENTRO', 'Terreno Coyotepec', 'Activo', 'Dodge Charger Policia v6 modelo 2020 6 cilindros', 'Sin datos', 1, 12, 'se recibieron facturas 26 abril 2023 Se lleva a resguardo a Terreno Coyotepec 15 de Junio de 2023 En Terreno Coyotepec de acuerdo a inventario del 6 de dic del 2023. En Terreno Coyotepec Febrero 2024 de acuerdo a inventario', '2024-12-12 12:12:03', 23, 8, 27, 7),
(118, '0118', '266', 1, 'LUMO FINANCIERA DEL CENTRO SA DE CV SOFOMENR', 'A87017', '0', '0', 4, 2, 6, 4, '2C3CDXAG9LH106540', 'Charger policia V6', '2020', 'ENU4373', 'Sin documentos', 2, 'Hecho en USA', '0', '0', 'Blanco brillante', 'Bueno', 'Bueno', '2023-03-29', 'C 11712', 1, 'LUMO FINANCIERA DEL CENTRO', 'Terreno Coyotepec', 'Activo', 'Dodge Charger Policia v6 modelo 2020 6 cilindros', 'Sin datos', 1, 12, 'Se reciben facturas por correo 26 abril de 2023 Se encuentra en Terreno de Coyotepec el 6 de diciembre de 2023 de acuerdo a inventario. falta placa trasera. En Terreno Coyotepec Febrero 2024 de acuerdo a inventario', '2024-12-12 12:12:51', 23, 8, 27, 7),
(119, '0119', '267', 1, 'LUMO FINANCIERA DEL CENTRO SA DE CV SOFOMENR', 'A87021', '0', '0', 4, 2, 6, 4, '2C3CDXAG8LH106559', 'Charger policia V6', '2020', 'ENU4369', 'Sin documentos', 2, 'Hecho en USA', '0', '0', 'Blanco brillante', 'Bueno', 'Bueno', '2023-03-29', 'C 11700', 1, 'LUMO FINANCIERA DEL CENTRO', 'Terreno Coyotepec', 'Activo', 'Dodge Charger Policia v6 modelo 2020 6 cilindros', 'Sin datos', 1, 12, 'Se reciben facturas x correo 26 Abril 2023 Se lleva a resguardo a Terreno Coyotepec 15 de Junio de 2023 En Terreno Coyotepec de acuerdo a inventario del 6 de dic del 2023. En Terreno Coyotepec Febrero 2024 de acuerdo a inventario', '2024-12-12 12:13:16', 23, 8, 27, 7),
(120, '0120', '269', 1, 'LUMO FINANCIERA DEL CENTRO SA DE CV SOFOMENR', 'A87001', '0', '0', 4, 2, 6, 4, '2C3CDXAG7LH106472', 'Charger policia V6', '2020', 'ENU4387', 'Sin documentos', 2, 'Hecho en USA', '0', '0', 'Blanco brillante', 'Bueno', 'Bueno', '2023-03-29', 'C 11698', 1, 'LUMO FINANCIERA DEL CENTRO', 'FRASAN Colors', 'Activo', 'Dodge Charger Policia v6 modelo 2020 6 cilindros', 'Sin datos', 1, 7, 'Se reciben facturas x correo 26 de Abril de 2023 Físicamente en FRASAN Colors durante inventario Dic 2023. En FRASAN Colors Febrero 2024 de acuerdo a inventario', '2024-12-12 12:14:34', 23, 8, 27, 7),
(121, '0121', '271', 1, 'LUMO FINANCIERA DEL CENTRO SA DE CV SOFOMENR', 'A87025', '0', '0', 4, 2, 6, 4, '2C3CDXAG4LH106574', 'Charger policia V6', '2020', 'ENU4365', 'Sin documentos', 2, 'Hecho en USA', '0', '0', 'Blanco brillante', 'Bueno', 'Bueno', '2023-03-29', 'C 11701', 1, 'LUMO FINANCIERA DEL CENTRO', 'Terreno Coyotepec', 'Ventas', 'Dodge Charger Policia v6 modelo 2020 6 cilindros', 'Sin datos', 1, 12, 'Se reciben facturas x correo 26 Abril 2023 Fsicamente en FRASAN Colors durante inventario Dic 2023. En Reparacion sin placas. En Terreno Coyotepec Febrero 2024 de acuerdo a inventario', '2024-12-12 12:15:11', 23, 8, 27, 7),
(122, '0122', '272', 1, 'LUMO FINANCIERA DEL CENTRO SA DE CV SOFOMENR', 'A87712', '0', '0', 4, 2, 6, 4, '2C3CDXAG1LH106466', 'Charger policia V6', '2020', 'ENU6949', 'Sin documentos', 2, 'Hecho en USA', '0', '0', 'Blanco brillante', 'Bueno', 'Bueno', '2023-03-29', 'C 11696', 1, 'LUMO FINANCIERA DEL CENTRO', 'FRASAN Colors', 'Ventas', 'Dodge Charger Policia v6 modelo 2020 6 cilindros', 'Sin datos', 1, 7, 'Se reciben facturas x correo 26 Abril 2023 Físicamente en FRASAN Colors durante inventario Dic 2023. En Reparación. En FRASAN Colors Febrero 2024 de acuerdo a inventario', '2024-11-14 17:18:55', 26, 8, 0, 0),
(123, '0123', '273', 1, 'LUMO FINANCIERA DEL CENTRO SA DE CV SOFOMENR', 'A87003', '0', '0', 4, 2, 6, 4, '2C3CDXAG0LH106491', 'Charger policia V6', '2020', 'Sin placas', 'Sin documentos', 2, 'Hecho en USA', '0', '0', 'Blanco brillante', 'Bueno', 'Bueno', '2023-03-29', 'C 11702', 1, 'LUMO FINANCIERA DEL CENTRO', 'Terreno Coyotepec', 'Activo', 'Dodge Charger Policia v6 modelo 2020 6 cilindros', 'Sin datos', 1, 12, 'Se reciben facturas x correo 26 abril 2023 Se encuentra en Terreno Coyotepec 6 de diciembre de 2023 de acuerdo a inventario. En Terreno Coyotepec Febrero 2024 de acuerdo a inventario', '2024-12-12 12:15:32', 23, 8, 27, 7),
(124, '0124', '275', 1, 'LUMO FINANCIERA DEL CENTRO SA DE CV SOFOMENR', 'A87027', '0', '0', 4, 2, 6, 4, '2C3CDXAG3LH106579', 'Charger policia V6', '2020', 'ENU4363', 'Sin documentos', 2, 'Hecho en USA', '0', '0', 'Blanco brillante', 'Bueno', 'Bueno', '2023-03-29', 'C 11695', 1, 'LUMO FINANCIERA DEL CENTRO', 'Terreno Coyotepec', 'Activo', 'Dodge Charger Policia v6 modelo 2020 6 cilindros', 'Sin datos', 1, 12, 'Se recibe factura de Lumo 26 Abril 2023 x correo falta factura origen Físicamente en FRASAN Color durante inventario Dic 2023. En Reparación. En Terreno Coyotepec febrero 2024 de acuerdo a inventario', '2024-12-12 12:15:51', 23, 8, 27, 7),
(125, '0125', '276', 1, 'CONSTRUCTORA Y DESARROLLADORA GRUPO FRASAN', 'Sin documentos', '0', '0', 3, 17, 29, 8, '5TFAY5F16KX791459', 'Camioneta doble cabina', '2019', 'NHY7739', 'AUC7145464', 2, '3UR6423393', '0', '0', 'Cafe perlado', 'Bueno', 'Bueno', '2019-01-30', 'AA27070', 1, 'Alden Satelite S de PL de CV', 'Club de Golf Hacienda', 'Ventas', 'Camioneta nueva Tundra Version 1794 4 ptas doble cabina', 'Sin datos', 1, 11, 'Llega de Mc allen FÃ­sicamente en Club de Golf durante inventario de Dic 2023-falta factura de venta ', '2024-04-30 12:15:39', 26, 0, 0, 0),
(126, '0126', '277', 1, 'Sin documentos', '233034823000221', '0', '0', 4, 37, 63, 27, '1M9BU2025HH774314', 'DB-500', '2017', 'Sin placas', 'Sin documentos', 7, 'N/A', '0', '0', 'Sin datos', 'Bueno', 'Bueno', '2023-10-31', 'A 1301', 1, 'GRUPO IMPORTADOR Y EXPORTADOR DAGUN Y ASOCIADOS', 'Terreno Coyotepec', 'Activo', 'MAQUINA PARA LIMPIEZA POR CHORRO Y/O SOBRECALENTADA MONTADA EN REMOLQUE MARCA W-RES 69L17', 'REMOLQUE DE 2 EJES DE 18 PIES MARCA MMLJINC SERIE 1M9BU2025HH774314 COMPRESOR DE AIRE MARCA ROTAIR MODELO D185T4F-DB SERIE C40726', 1, 17, 'Llega 30 de mayo a terreo Coyotepec llega con pedimento No 23303482 3000221 Físicamente en Tándem Pachuca durante inventario Dic 2023. Físicamente durante inventario de febrero 2024 en Tándem Pachuca', '2024-12-12 12:16:11', 23, 8, 27, 7),
(127, '0127', '279', 14, 'Proactiva Medi Am MM SA de CV', 'Sin documentos', '0', '0', 4, 41, 66, 25, '3HTSCAAR8WG103905', 'INTERNATIONAL CHASIS CORAZA', '1998', 'KZ88315', 'CAC6550172', 1, '469HM2U1093916', '0', '0', 'Sin datos', 'Bueno', 'Bueno', '0000-00-00', 'Sin documentos', 2, 'Sin documentos', 'GIRSA Tlane', 'Activo', ' Camion Prostar daycab chasis cabina', 'Sin datos', 1, 13, 'Unidad de VEOLIA reportada por FRANSANCO para dar de alta para servicios 7 de AGOSTO DE 2023 Físicamente en GIRSA Tlalnepantla durante inventario de diciembre 2023. Físicamente  en GIRSA inventario febrero 2024', '2024-11-21 12:57:18', 26, 5, 17, 6),
(128, '0128', '280', 1, 'N/A', '233034823002084', '0', '0', 2, 1, 34, 12, '5FN00304', '816F', '2010', 'N/A', 'N/A', 1, '3306 DITA', '0', '0', 'Amarillo', 'Bueno', 'Bueno', '2023-08-24', 'A 1237', 2, 'GRUPO IMPORTADOR Y EXPORTADOR DAGUN Y ASOCIADOS', 'GIRSA Tlane', 'Activo', 'Vibrocompactador de rodillos tipo Pata de cabra', 'Sin datos', 1, 13, 'Llega a GIRSA 23 de Agosto de 2023 Físicamente en GIRSA Tlalnepantla durante inventario de diciembre 2023. Físicamente  en GIRSA inventario febrero 2024', '2024-11-21 12:57:54', 26, 5, 17, 6),
(129, '0129', '281', 1, 'CONSTRUCTORA Y DESARROLLADORA GRUPO FRASAN', 'Sin documentos', '0', '0', 3, 12, 77, 8, 'W1NYC6AJ6PX474596', 'G 500 Biturbo', '2023', 'RCY957D', 'Sin documentos', 2, '17698030173048', '0', '0', 'Blanco', 'Bueno', 'Bueno', '2023-08-21', '17177', 4, 'AUTOSAT DE MEXICO SA DE CV', 'Club de Golf Hacienda', 'Activo', 'Camioneta Modelo 2023 Mercedes Benz Blanco polar con vestiduras color Napa rojo clÃ¡sico/negro', 'Placas de Cuernavaca', 1, 11, 'Pedimento de importaciÃ³n 234316693010632 del 17/05/2023 en Aduana Veracruz FÃ­sicamente en Club de Golf durante inventario de Dic 2023', '2024-03-11 00:00:00', 14, 0, 0, 0),
(130, '0130', '282', 1, 'CONSTRUCTORA Y DESARROLLADORA GRUPO FRASAN', 'Sin documentos', '0', '1', 3, 48, 4, 8, 'LZWNNNGM4PC867999', 'Tornado paq B Cargo LS', '2023', 'MPD874A', 'AUC13828192', 2, 'Hecho en China', '0', '0', 'Blanco', 'Bueno', 'Bueno', '2023-08-21', 'FAUEAN 31290', 1, 'EXELENCIA AUTOMOTRIZ DEL NORTE SA DE CV', 'Tienda Tlane', 'Activo', 'Camioneta nueva color blanco interiores beige', 'Sin datos', 1, 6, 'Pedimento Aduanal 3750F33000109 DEL 7 DE SEPTIEMBRE DE 2023 Físicamente en FRASAN Colors durante inventario Dic 2023. En FRASAN Colors Febrero 2024 de acuerdo a inventario', '2024-12-06 10:10:45', 23, 3, 29, 2),
(131, '0131', '283', 1, 'N/A', '233034823002079', '0', '0', 2, 38, 64, 12, '101570821045.00', 'BC972RB', '0', 'N/A', 'N/A', 1, 'Sin datos', '0', '0', 'Sin datos', 'Bueno', 'Bueno', '2023-09-19', 'A 22', 2, 'GADICC SERVICIOS ADUANEROS S DE RL DE CV', 'GIRSA Valle de México', 'Activo', 'Vibrocompactador tipo pata de cabra con su cuchilla y rodillos desensamblados. 4 ruedas tipo rodillos pata de cabra.', '1 cuchilla grande. 25 limpiadores. 17 aumentos. 2 cuchillas. 1 union. 4 cubetas con 24 tornillos y 24 arandelas c/u', 1, 3, 'Llega de FRASAN Global a Pachuca 12 de Sept de 2023 Físicamente en Tandem Pachuca durante inventario Dic 2023. Fisicamente durante inventario de Febrero 2024 en Tandem Pachuca', '2024-11-14 17:43:01', 26, 6, 0, 0),
(132, '0132', '284', 1, 'CONSTRUCTORA Y DESARROLLADORA GRUPO FRASAN', 'Sin documentos', '0', '0', 4, 12, 76, 7, 'WD9XD44325R716142', 'SPRINTER CHASIS CTRL DELANTERO', '2005', 'LC90757', 'CAC8435391', 1, '64798150965248', '0', '0', 'Blanco', 'Bueno', 'Bueno', '2023-03-01', 'Sin documentos', 1, 'Sin documentos', 'FRASANANCO', 'Activo', 'Camioneta Sprinter blanca USADA', 'Motor marca MBE CDI OM 612 D 27 LA. 156 HP 3800 RPM', 1, 7, 'Ernesto entrega documentos 3 de Nov 2023 Físicamente en FRASAN Colors durante inventario Dic 2023. En FRASAN Colors Febrero 2024 de acuerdo a inventario', '2024-11-14 17:49:59', 26, 8, 0, 0),
(133, '0133', '285', 1, 'CONSTRUCTORA Y DESARROLLADORA GRUPO FRASAN', 'Sin documentos', '0', '0', 3, 39, 21, 8, '1GYS48KL2PR479959', 'Escalade', '2023', 'RDP601D', 'Sin documentos', 2, 'Sin datos', '0', '0', 'Blanco Cristal', 'Bueno', 'Bueno', '2023-10-18', 'V752', 4, 'Impulso Premium Motors SA de CV', 'Club de Golf Hacienda', 'Activo', 'Camioneta nueva emplacada en Morelos', 'Sin datos', 1, 11, 'En ruta de trabajo durante inventario de Dic 2023 reporta Osvaldo en Club de golf', '2024-03-11 00:00:00', 14, 0, 0, 0),
(134, '0134', '286', 1, 'N/A', '145132304000675', '0', '0', 2, 40, 65, 12, 'CHSR33YRTE3000210', 'QS300', '2014', 'N/A', 'N/A', 1, 'Cummins QSM11', '0', '0', 'Amarillo', 'Bueno', 'Bueno', '2023-09-27', 'P 1564', 0, 'CONSTRUCTEC QUERETARO SA DE CV', 'GIRSA Tlane', 'Activo', 'Compactador Pata de cabra', 'Cuchilla recta. cabina motor Cummins', 1, 13, 'Héctor Torres entrega documentos 4 de diciembre de 2023 Físicamente en GIRSA Tlalnepantla durante inventario Diciembre 2023. Físicamente  en GIRSA inventario Febrero 2024', '2024-11-21 13:03:24', 26, 5, 17, 6),
(135, '0135', '287', 14, 'Sin documentos', 'Sin documentos', '0', '0', 4, 54, 81, 27, '33ZBP1', 'CR7016MR30T', '0', 'Sin placas', 'Sin documentos', 7, 'N/A', '0', '0', 'Blanco', 'Bueno', 'Bueno', '0000-00-00', 'Sin documentos', 0, 'Sin documentos', 'GIRSA Tlane', 'Activo', 'Remolque para exposiciones', 'Sin datos', 1, 13, 'Físicamente en Relleno Sanitario durante inventario de Diciembre 2023. Físicamente en GIRSA inventario Febrero 2024', '2024-11-21 13:04:06', 26, 5, 17, 6),
(136, '0136', '288', 14, 'Sin documentos', 'Sin documentos', '0', '0', 4, 12, 42, 7, '3ALACYC549DAD9964', 'M210635K', '0', 'Sin placas', 'Sin documentos', 1, 'Sin datos', '0', '0', 'Blanco', 'Bueno', 'Bueno', '0000-00-00', 'Sin documentos', 0, 'Sin documentos', 'GIRSA Tlane', 'Activo', 'Camion de volteo blanco', 'Sin datos', 1, 13, 'Físicamente en GIRSA Tlalnepantla durante inventario Dic 2023 (VEOLIA). Físicamente  en GIRSA inventario febrero 2024', '2024-11-21 13:05:49', 26, 5, 17, 6),
(137, '0137', '289', 1, 'N/A', '233034823003629 y 3004260', '0', '0', 1, 5, 36, 37, '1601050', 'MLT6S', '0', 'N/A', 'N/A', 1, 'Sin datos', '0', '0', 'Sin datos', 'Bueno', 'Bueno', '2023-12-27', 'A 143', 2, 'GADICC SERVICIOS ADUANEROS S DE RL DE CV', 'GIRSA Tlane', 'Activo', 'Grupo Electrogeno Remolcable con Torre de Luz', 'Sin datos', 1, 13, 'Llega de Reynosa Tamps 23 de dic 2023 a Bodega Xhala. En Terreno Coyotepec Febrero 2024 de acuerdo a inventario', '2024-11-21 13:07:19', 26, 5, 17, 6),
(138, '0138', '290', 1, 'N/A', '233034823003629 y 3004260', '0', '0', 1, 5, 36, 37, '5AJLS1014GB207012', 'MLT6S', '0', 'N/A', 'N/A', 1, 'Sin datos', '0', '0', 'Sin datos', 'Bueno', 'Bueno', '2023-12-27', 'A 143', 0, 'GADICC SERVICIOS ADUANEROS S DE RL DE CV', 'GIRSA DEL VALLE DE MEXICO', 'Activo', 'Grupo Electrógeno Remolcable con torre de Luz', 'Sin datos', 1, 3, 'Llega de Reynosa Tamps 23 de dic 2023 a Terreno Coyotepec.\r\nSale de Terreno Coyotepec a GIRSA Valle de México 13 Ene 2024. Físicamente en GIRSA Valle de México durante inventario de Febrero de 2024', '2024-11-15 09:25:45', 26, 6, 0, 0),
(139, '0139', '291', 1, 'N/A', '233034823003629 y 3004260', '0', '0', 1, 5, 36, 37, '1600336', 'MLT6S', '0', 'N/A', 'N/A', 1, 'Sin datos', '0', '0', 'Sin datos', 'Bueno', 'Bueno', '2023-12-27', 'A 143', 0, 'GADICC SERVICIOS ADUANEROS S DE RL DE CV', 'Terreno Coyotepec', 'Activo', 'Grupo Electrogeno remolcable con torre de Luz', 'Sin datos', 1, 12, 'Llega de Reynosa Tamps 23 de dic 2023 a Bodega Xhala. En Terreno Coyotepec Febrero 2024 de acuerdo a inventario', '2024-12-06 10:12:06', 23, 8, 24, 2),
(140, '0140', '292', 1, 'N/A', '233034823003629 y 3004260', '0', '0', 1, 5, 36, 37, '5AJLS1014GB600153', 'MLT6S', '0', 'N/A', 'N/A', 1, 'Sin datos', '0', '0', 'Sin datos', 'Bueno', 'Bueno', '2023-12-27', 'A 143', 0, 'GADICC SERVICIOS ADUANEROS S DE RL DE CV', 'GIRSA DEL VALLE DE MEXICO', 'Activo', 'Grupo Electrogeno remolcable con Torre de Luz', 'Sin datos', 1, 3, 'Llega de Reynosa Tamps 23 de dic 2023 a Terreno Coyotepec.\r\nSale de Terreno Coyotepec a GIRSA Valle de México 13 Ene 2024. Físicamente en GIRSA Valle de México durante inventario de Febrero de 2024', '2024-11-15 09:27:06', 26, 6, 0, 0),
(141, '0141', '293', 1, 'N/A', '233034823003631', '0', '0', 2, 1, 34, 30, 'BET00792 / 6Y700559', 'D8R', '0', 'Sin placas', 'Sin documentos', 1, 'Sin datos', '0', '0', 'Sin datos', 'Bueno', 'Bueno', '2023-12-27', 'A 142', 0, 'GADICC SERVICIOS ADUANEROS S DE RL DE CV', 'GIRSA DEL VALLE DE MEXICO', 'Activo', 'Topador frontal', 'Sin datos', 1, 3, 'Llega a GIRSA Valle de México 20 de dic 2023 de Reynosa Tamps. Físicamente en GIRSA Valle de México durante inventario de Febrero de 2024', '2024-11-15 09:28:02', 26, 6, 0, 0),
(142, '0142', '294', 14, 'Sin documentos', 'Sin documentos', '0', '0', 2, 44, 75, 9, 'VATZ1287CZB038127', 'L550', '0', 'Sin placas', 'Sin documentos', 1, 'Sin datos', '0', '0', 'Sin datos', 'Bueno', 'Bueno', '2024-02-12', 'Sin documentos', 0, 'Sin documentos', 'GIRSA Tlane', 'Activo', 'Cargador Frontal usado. montado sobre neumáticos', 'Sin datos', 1, 13, 'Llega de Reynosa Tamaulipas 17 de Feb 2024 a GIRSA Tlalnepantla. Físicamente  en GIRSA inventario Febrero 2024 en reparación', '2024-11-21 13:10:03', 26, 5, 17, 6),
(143, '0143', '1238', 1, 'N/A', '223034822002907', '0', '0', 2, 1, 34, 9, 'CAT0966KJTFS01238', '966K', '0', 'Sin placas', 'Sin documentos', 1, 'Sin datos', '0', '0', 'Sin datos', 'Bueno', 'Bueno', '2022-08-31', '2592', 0, 'IDN SERVICIOS ADUANALES Y LOGISTICA EN COMERSIO EXTERIOR S DE RL DE CV', 'GIRSA DEL VALLE DE MEXICO', 'Activo', 'Cargador frontal usado montado sobre neumaticos', 'Sin datos', 1, 3, 'Erika entrega pedimento 26 de Septiembre de 2022 Vendido a GIRSA 15 de Noviembre de 2022 reportado por FRANSANCO Oct 2023 Físicamente en GIRSA Valle de México durante inventario de Dic 2023. Físicamente en GIRSA Valle de México durante inventario de Febrero de 2024', '2024-11-15 09:34:49', 26, 6, 0, 0),
(144, '0144', '1545', 1, 'N/A', '223034822002906', '0', '0', 2, 1, 34, 30, 'CAT00D6TELAY01545', 'D6T', '0', 'N/A', 'N/A', 1, 'Sin datos', '0', '0', 'Sin datos', 'Bueno', 'Bueno', '2022-08-31', '2589', 0, 'IDN SERVICIOS ADUANALES Y LOGISTICA EN COMERSIO EXTERIOR S DE RL DE CV', 'GIRSA Tlane', 'Activo', 'Topador Frontal con Ripper integrado', 'Ripper marca caterpillar Serie 1EH05474', 1, 13, 'Se reciben documentos 7 de Septiembre de 2022 Aun no se cuenta con hoja de entrada Físicamente en GIRSA Tlalnepantla durante inventario de Diciembre 2023. Físicamente  en GIRSA inventario Febrero 2024', '2024-11-21 13:08:39', 26, 5, 17, 6),
(145, '0145', '4059', 1, 'LEASE AND FLEET SOLUTIONS SA DE CV', 'Sin documentos', '1', '0', 4, 3, 12, 1, '1FTYR1CM8KKB04059', 'Transit Van 3', '2019', 'MTH844B', 'AUC16213126', 2, 'KKB04059', '0', '0', 'Sin Datos', 'Bueno', 'Bueno', '2022-10-21', 'C 3382', 3, 'LEASE AND FLEET SOLUTIONS. S.A. DE C.V.', 'Con el Cliente', 'Renta', 'Ambulancia Camioneta Vannete 6 Cilindros', 'Sin datos', 1, 12, 'No se cuenta con papeles se da de alta con foto de TC que envía Joan 6 de Oct 2022 Llega a Terreno Coyotepec 13 de febrero de 2023 de Bodega Azul Sale de Terreno Coyotepec 24 de febrero de 2023 a Nextlalpan Edo de México Sale a NR 6 de Mzo 2023. Renta Nicolas Romero 8 de marzo de 2023 Descompuesta en reparación en inventario de Dic de 2023 en Protección Civil y Bomberos Nicolas R.', '2024-12-12 12:17:00', 23, 8, 27, 7),
(146, '0146', '9214', 14, 'N/A', 'Sin documentos', '0', '0', 2, 18, 47, 3, '1VR2161V9J1009214', 'BC1500', '0', 'N/A', 'N/A', 1, 'JHON DEERE 125HP', '0', '0', 'Sin datos', 'Bueno', 'Bueno', '0000-00-00', 'Sin documentos', 0, 'Sin documentos', 'GIRSA Tlane', 'Activo', 'SU-EP-042', 'Sin datos', 1, 13, 'Sale a Relleno Sanitario Tlalnepantla Prestada 7 de Septiembre de 2022 Llega a Terreno Coyotepec 22 de Junio de 2023 Sale a Relleno Sanitario Tlane 13 de Sept 2023 Físicamente en GIRSA Tlalnepantla durante inventario de Diciembre 2023. Fisicamente  en GIRSA inventario Febrero 2024', '2024-11-21 13:11:22', 26, 5, 17, 6),
(147, '0147', '12443', 7, 'FRANCISCO JAVIER SANTOS ARREOLA', '203035910002282', '0', '0', 4, 42, 67, 4, 'SCAZN42A3FCX12443', 'SILVER SPUR', '7985', 'DP994', '14537079045', 2, 'Sin datos', '0', '0', 'Sin Datos', 'Bueno', 'Bueno', '2020-06-15', '736', 1, 'IND', 'Club de Golf Hacienda', 'Activo', 'Auto clasico', 'Sin datos', 1, 11, 'Descompuesto en reparaciÃ³n durante inventario de Dic 2023 Casa Club de golf', '2024-03-11 00:00:00', 14, 0, 0, 0),
(148, '0148', '13733', 1, 'N/A', '223034842002882', '0', '0', 2, 10, 40, 19, '13733', 'BX25DLB', '0', 'N/A', 'N/A', 1, 'Sin datos', '0', '0', 'Sin datos', 'Bueno', 'Bueno', '2022-08-31', '2590', 2, 'IDN SERVICIOS ADUANALES Y LOGISTICA EN COMERSIO EXTERIOR S DE RL DE CV', 'Terreno Coyotepec', 'Activo', 'Miniretroexcavdora usada', 'Sin datos', 1, 12, 'Se recibe pedimento 7/09/2022 Aun no se cuenta con hoja de entrada En Terreno Coyotepec de acuerdo a inventario del 6 de dic del 2023 (No cuenta con No de serie). En Terreno Coyotepec Febrero 2024 de acuerdo a inventario', '2024-12-12 12:17:56', 23, 8, 27, 7),
(149, '0149', '14279', 3, 'N/A', '223034822002905', '0', '0', 2, 21, 50, 14, '1FF450DXPBD914279', '450DLC', '0', 'N/A', 'N/A', 1, 'Sin datos', '0', '0', 'Sin datos', 'Bueno', 'Bueno', '2022-08-31', '2591', 0, 'CONSTRUCTORA Y DESARROLLADORA GRUPO FRASAN SA DE CV', 'GIRSA Tlane', 'Activo', 'Excavadora usada montada sobre orugas con giro de 360 grados', 'Sin datos', 1, 13, 'Erika entrega pedimento 26 de Septiembre de 2022 Se factura a GIRSA 11 de Octubre de 2022 Fact A 546 Físicamente en GIRSA Tlalnepantla durante inventario de Diciembre 2023. Físicamente  en GIRSA inventario Febrero 2024', '2024-11-21 13:17:28', 26, 5, 17, 6),
(150, '0150', '19548', 1, 'CONSTRUCTORA Y DESARROLLADORA GRUPO FRASAN', 'Sin documentos', '0', '0', 3, 43, 68, 4, '58ADA1C12NU019548', 'ES300h HIBRIDO SEDAN 2.5L', '2022', '29J095', 'ECC12430267', 3, 'A25A-G728836', '0', '0', 'Blanco', 'Bueno', 'Bueno', '2022-05-06', 'AN89', 1, 'ALDO VALDEZ AGUIRRE IMAQAVA', 'Mc Allen', 'Activo', 'AUTOMOVIL LEXUS COLOR BLANCO PERLA CON INTERIORES COLOR PALOMINO 4 PUERTAS. TRANSMISION AUTOMATICA. 4 CILINDROS', 'Sin datos', 1, 11, 'Reporta Osvaldo durante inventario de Dic 2023 que lo mandaron a Mc Allen', '2024-03-11 00:00:00', 14, 0, 0, 0),
(151, '0151', '20672', 14, 'Sin documentos', 'Sin documentos', '0', '0', 2, 18, 47, 3, '1VRY11199E1020672', 'BC1000XL', '0', 'N/A', 'N/A', 1, 'Sin datos', '0', '0', 'Sin datos', 'Bueno', 'Bueno', '0000-00-00', 'Sin documentos', 0, 'Sin documentos', 'GIRSA Tlane', 'Activo', 'ASTIILLADOR VERMEER', 'Sin datos', 1, 13, 'Sale a Tlalnepantla 7 de Julio de 2022 llega de Tlalnepantla 7 de Sept de 2022 para reparación Sale a Tlalnepantla 12 de octubre de 2022 Llega a Terreno Coyotepec 13 de Sept 2023 para reparación Sale a Atizapán 21 de septiembre de 2023 Físicamente en Terreno Coyotepec durante inventario de Diciembre 2023. En GIRSA Tlalnepantla Febrero 2024 de acuerdo a inventario.', '2024-11-21 13:19:19', 26, 5, 17, 6);
INSERT INTO `tb_vehiculos` (`idVehiculo`, `folio`, `eco`, `propietario_id`, `nombreTarjeta`, `facturaOrigen`, `gps`, `duplicadoLlaves`, `clase_id`, `marca_id`, `subMarca_id`, `transporte_id`, `serie`, `modelo`, `anio`, `placas`, `numTarjeta`, `combustible_id`, `motor`, `km`, `hrs`, `color`, `estadoFisico`, `estadoOperativo`, `fechaCompra`, `noFactura`, `seguro_id`, `proveedorCompra`, `ubicacion`, `estatus`, `descripcionVehiculo`, `accesoriosVehiculo`, `stock`, `responsable_id`, `observaciones`, `created_at`, `usuario_id`, `area_id`, `usuario_asignado_id`, `unidad_id`) VALUES
(152, '0152', '26406', 1, 'LEASE AND FLEET SOLUTIONS SA DE CV', 'Sin documentos', '1', '0', 4, 2, 7, 1, '3C6TRVCG1KE526406', 'RAM PROMASTER (Nac)', '2019', 'NMR7413', 'AUC16213128', 2, 'Hecho en Mexico', '0', '0', 'Blanco Brillante', 'Bueno', 'Bueno', '2022-10-21', 'C 3383', 3, 'LEASE AND FLEET SOLUTIONS. S.A. DE C.V.', 'Con el Cliente', 'Renta', 'Ambulancia Camioneta Vannete', 'Sin datos', 1, 12, 'No se cuenta con documentos se da de alta con foto de TC que manda Joan Llega de Bodega azul a Terreno Coyotepec 13 de febrero de 2023 Sale de Terreno Coyotepec a Nextlalpan Edo de México 24 de febrero de 2023 Sale a NR 6 Mzo 2023. Renta Nicolas Romero 8 de marzo de 2023 Se lleva a reparación y regresa a Nicolas Romero 24 de abril 2023 Descompuesta en reparación en Protección Civil y Bomberos Nicolas Romero Inventario 15 Dic 2023', '2024-12-12 12:18:30', 23, 8, 27, 7),
(153, '0153', '27319', 1, 'N/A', 'Sin documentos', '1', '0', 2, 14, 44, 18, '00000000NHM427319', 'L225', '2020', 'N/A', 'N/A', 1, '338196', '0', '0', 'Sin datos', 'Bueno', 'Bueno', '2022-11-11', 'C10364', 0, 'LUMO FINANCIERA DEL CENTRO', 'Con el Cliente', 'Renta', 'Minicargador con orugas', 'Motor Diesel turbo potencia neta de 74 HP 4 cilindros Desplazamiento 3.2 lts Capacidad maxima de levante1.135 kg fuerza de rompimiento 8.565 kg Cabina cubierta. cucharon utilitario con capacidad de 0.79 m3 ancho de cucharon 84 pilg altura al perno 3.25 mt', 1, 12, 'Sale a NR 6 Mzo 2023. Rentado en NR entregado 7 de marzo de 2023 Inventario 15 Dic 2023 en Bodega Obras Publicas Nicolas Romero', '2024-12-06 10:15:32', 23, 8, 24, 2),
(154, '0154', '28031', 1, 'N/A', '223034822002882', '0', '0', 2, 10, 40, 19, '28031', 'BX25DLB', '0', 'N/A', 'N/A', 1, 'Sin datos', '0', '0', 'Sin datos', 'Bueno', 'Bueno', '2022-08-31', '2590', 2, 'IDN SERVICIOS ADUANALES Y LOGISTICA EN COMERSIO EXTERIOR S DE RL DE CV', 'Tienda Tlalnepantla', 'Activo', 'Miniretroexcavadora usada', 'Sin datos', 1, 12, 'Se recibe pedimento 7 de Sept de 2022 Aun no se cuenta con hoja de entrada En Terreno Coyotepec de acuerdo a inventario del 6 de Dic del 2023 (No cuenta con No de serie). En Terreno Coyotepec Febrero 2024 de acuerdo a inventario', '2024-12-12 12:19:12', 23, 3, 27, 7),
(155, '0155', '35001', 9, 'FRASAN GREEN DE MEXICO', 'Sin documentos', '0', '0', 4, 4, 35, 27, '3AWV1402XLX135001', 'JGHB-H72-40W', '2020', '7HU5245', 'RMC12872747', 7, 'N/A', '0', '0', 'Sin datos', 'Bueno', 'Bueno', '2022-08-29', 'C 3057', 2, 'LEASE AND FLEET SOLUTIONS. S.A. DE C.V.', 'GIRSA Tlane', 'Activo', '1979 FRUEHAUF FURGONETA SECA DE ALMACENAMIENTO DE 45 DV-2993 48 X 96 X 136 36 PIN KING DESLIZADOR DE RESORTE EN TANDEM NEUMATICOS 295/24.5 RUEDAS DE ACERO PUERTA ENROLLABLE PISO DE MADERA TECHO DE ALUMINIO ROSCA DE POLI', 'Sin datos', 1, 12, 'Unidad sin documentos reportada con Joan el 31 de Mayo de 2022 Se reciben documentos a nombre de FRASAN Green 6 de Septiembre de 2022 En Terreno Coyotepec de acuerdo a inventario del 6 de dic del 2023 Llega a Tandem Pachuca durante inventario del 21 de Dic 2023\r\nRegresa de Pachuca a Terreno Coyotepec 11 de enero de 2024. En Terreno Coyotepec Febrero 2024 de acuerdo a inventario', '2024-12-06 10:17:54', 23, 5, 24, 2),
(156, '0156', '41894', 1, 'CONSTRUCTORA Y DESARROLLADORA GRUPO FRASAN', 'Sin documentos', '1', '0', 4, 2, 7, 8, '3C7WRBLJ6KG541894', 'Sin Datos', '2019', 'LE40404', 'Sin documentos', 1, 'Sin datos', '0', '0', 'Sin datos', 'Bueno', 'Bueno', '2022-10-21', 'C 3392', 3, 'LUMO FINANCIERA DEL CENTRO', 'Con el Cliente', 'Renta', 'Camioneta Volteo', 'Sin datos', 1, 12, 'Unidad sin documentos reportada por Joan el 31 de Mayo de 2022 Joan reporta entrega a Pacifico el 27 de Junio de 2022 Llega a Bodega Xhala 23 de Sept de 2022 Sale de Terreno Coyotepec 24 de Febrero de 2023 a Nextlalpan Edo de Mex. Sale a NR 6 de Mzo de 2023. Renta en Nicolas Romero 8 de Mzo de 2023 Patio Obras Publicas en Nicolas romero Inventario 15 Dic 2023', '2024-12-06 10:18:41', 23, 8, 24, 2),
(157, '0157', '41910', 1, 'Sin documentos', 'Sin documentos', '1', '0', 4, 2, 7, 8, '3C7WRBLJ0KG541910', 'RAM 4000', '2019', 'LG82446', 'CAC16187934', 2, 'Hecho en Mexico', '0', '0', 'Blanco', 'Bueno', 'Bueno', '2022-10-21', 'C 3393', 3, 'LUMO FINANCIERA DEL CENTRO', 'Con el Cliente', 'Renta', 'CAMIONETA VOLTEO', 'Sin datos', 1, 12, 'Unidad sin documentos reportada por Joan el 31 de Mayo de 2022 Joan reporta entrega a Pacafico el 27 de Junio de 2022 llega a bodega Xhala 24 de Sept 2022 Sale de Terreno coyotepec a Nextlalpan Edo de Mexico 24 de Febrero de 2023 Sale a NR 6 Mzo 2023. Renta Nicolas Romero 8 Marzo 2023 En funcionamiento durante inventario 15 de Dic 2023 en pario Servicios Publicos', '2024-12-06 10:19:18', 23, 8, 24, 2),
(158, '0158', '54445', 1, 'N/A', '223034822002882', '0', '0', 2, 10, 40, 19, '54445', 'B26', '0', 'N/A', 'N/A', 1, 'Sin datos', '0', '0', 'Sin datos', 'Bueno', 'Bueno', '2022-08-31', '2590', 0, 'IDN SERVICIOS ADUANALES Y LOGISTICA EN COMERSIO EXTERIOR S DE RL DE CV', 'Terreno Coyotepec', 'Activo', 'Miniretroexcavadora Usada', 'Sin datos', 1, 12, 'Se recibe Pedimento 7 de Septiembre aun no se cuenta con reporte de entrada En Terreno Coyotepec de acuerdo a inventario del 6 de dic del 2023 (No tiene No de serie). En Terreno Coyotepec Febrero 2024 de acuerdo a inventario', '2024-12-06 10:19:51', 23, 8, 24, 2),
(159, '0159', '57864', 1, 'N/A', 'Sin documentos', '1', '0', 4, 2, 7, 8, '3C7WRAHT5KG557864', 'RAM 4000', '2019', 'LE35145', 'Sin documentos', 1, 'Sin datos', '0', '0', 'Sin datos', 'Bueno', 'Bueno', '2022-10-21', 'C 10311', 3, 'LUMO FINANCIERA DEL CENTRO', 'Con el Cliente', 'Renta', 'Camioneta Usada', 'Sin datos', 1, 12, 'Unidad sin documentos reportada por Joan el 31 de mayo de 2022 Llega a Terreno de coyotepec de bodega Azul 13 de Febrero de 2023 Sale de Terrno coyotepec 24 de Febrero de 2023 Sale 6 de Mzo 2023 a NR. En Renta Nicolas Romero 8 de Marzo de 2023 En funcionamiento Servicios Publicos Nicolas Romero durante Inventario 15 Dic 2023', '2024-12-06 10:20:25', 23, 8, 24, 2),
(160, '0160', '81150', 14, 'Sin documentos', 'Sin documentos', '1', '0', 2, 14, 44, 18, 'JAFOL225JKM481150', 'L225 NR', '2020', 'N/A', 'N/A', 1, '559162', '0', '0', 'Sin datos', 'Bueno', 'Bueno', '2022-11-04', '10350', 1, 'LUMO FINANCIERA DEL CENTRO', 'Con el Cliente', 'Renta', 'Minicargador usado con orugas turbopotencia neta de 74 HP 4 cilindros. desplazamiento 3.2 lts capacidad maxima de levante 1.135 kg. fuerza de rompimiento 8.565 kg. cabina abierta. cucharon utilitario con capacidad de 0.79 m3.', 'Ancho de cucharon 84 pulgadas. altura al perno 3.29 mts flujo hidráulico 22.5 rpm peso de operación 3.580 kg. neumáticos delanteros y traseros 12 x 16.5', 1, 12, 'Unidad sin documentos reportada por Joan el 31 de mayo de 2022 Sale a NR 6 Mzo 2023. Renta Nicolas Romero 8 de Marzo 2023 En bodega Obras Publicas durante inventario 15 dic 2023', '2024-12-12 12:19:57', 23, 8, 27, 7),
(161, '0161', '89674', 1, 'LEASE AND FLEET SOLUTIONS SA DE CV', 'Sin documentos', '1', '0', 4, 2, 7, 8, '3C7WRAHT6KG589674', 'RAM_400', '2019', 'LF52455', 'CAC14092502', 2, 'Hemmi vvt v8', '0', '0', 'Blanco', 'Bueno', 'Bueno', '2022-10-21', 'C 3386', 3, 'LUMO FINANCIERA DEL CENTRO', 'Con el Cliente', 'Renta', 'CAMIONETA CANASTILLA', 'Sin datos', 1, 12, 'Unidad sin documentos reportada por Joan el 31 de Mayo de 2022 llega a Terreno Coyotepec de bodega Azul 13 de febrero de 2023 Sale de Terreno Coyotepec 24 de febrero de 2023 Sale a NR 6 Mzo 2023. En renta Nicolas Romero 8 de Marzo de 2023 En Patio servicios Públicos Nicolas Romero Inventario 15 Dic 2023', '2024-12-06 10:21:21', 23, 8, 24, 2),
(162, '0162', '95A', 1, 'N/A', '193035849001921', '0', '0', 1, 11, 41, 37, '5AJLS1410EB413189', 'MLT3060M', '2014', 'N/A', 'N/A', 1, 'Magnum Power', '0', '0', 'Sin datos', 'Bueno', 'Bueno', '2020-01-14', '617', 1, 'LOGISTICA SHADDAI CC S.A. DE C.V.', 'GIRSA DEL VALLE DE MEXICO', 'Activo', 'Grupos electrogenos con motor a diesel montado en chasis sobre ruedas remolcable con torre de luces usado', 'Sin datos', 1, 3, 'Pedimento 19 30 3584 9001921 Sale a Relleno Sanitario de Tlane 15 de Abril de 2020 Llega a Bodega azul 21 de Agosto de 2023 de Terreno Coyotepec en reparación. Físicamente en GIRSA Valle de México durante inventario de Dic 2023. Físicamente en GIRSA Valle de México durante inventario de Febrero de 2024', '2024-12-06 10:22:08', 23, 6, 24, 2),
(163, '0163', 'F001', 1, 'N/A', '193035849001921', '0', '0', 1, 17, 78, 21, '46468', '8FGU25', '2013', 'N/A', 'N/A', 3, 'Toyota', '0', '0', 'Rojo', 'Bueno', 'Bueno', '2020-01-15', '610', 1, 'LOGISTICA SHADDAI CC S.A. DE C.V.', 'Con el Cliente', 'Renta', 'Montacargas de combustión interna. modelo 8FGU25. sistema dual gas/ gasolina para carga frontal usado. mástil triple contraído a 2.0 m. altura máxima de horquillas a 4.30m. con deslizador lateral. transmisión automática una velocidad ambos sentidos.', 'Deslizador lateral. tanque de gas. kit de seguridad', 1, 12, 'No de Pedimento 19 30 3584 9001921 Rentado a SMS FOREMEX 6 de Dic 2023 Sigue rentado al mismo Cte de acuerdo a inventario', '2024-12-12 12:20:56', 23, 8, 27, 7),
(164, '0164', 'F002', 1, 'N/A', '193035849001921', '0', '0', 1, 17, 78, 21, '46632', '8FGU25', '2013', 'N/A', 'N/A', 3, 'Toyota', '9431', '0', 'Rojo', 'Bueno', 'Bueno', '2020-01-15', '611', 1, 'LOGISTICA SHADDAI CC S.A. DE C.V.', 'Con el Cliente', 'Renta', 'Montacargas de combustión interna. modelo 8FGU25. sistema dual gas/ gasolina para carga frontal usado. mástil triple contraído a 2.20 m. altura máxima de horquillas a 4.70m. con deslizador lateral. transmisión automática una velocidad ambos sentidos', 'Deslizador lateral. kit de seguridad', 1, 12, 'No de Pedimento 19 30 3584 9001921. adquirido en subasta Ritchie Bros Houston 5 nov 2019 Rentado a Robótica y Diseño 6 de dic 2023 Sigue rentado al mismo Cte de acuerdo a inventario', '2024-12-12 12:21:26', 23, 8, 27, 7),
(165, '0165', 'F003', 1, 'N/A', '193035849001921', '0', '0', 1, 17, 78, 21, '39923', '8FGU25', '2012', 'N/A', 'N/A', 3, 'Toyota', '3187', '0', 'Rojo / Gris', 'Bueno', 'Bueno', '2020-01-15', '612', 1, 'LOGISTICA SHADDAI CC S.A. DE C.V.', 'Con el Cliente', 'Renta', 'Montacargas de combustión interna modelo 8FGU25. capacidad 5000 libras. sistema dual gas gasolina para carga frontal usado. mástil triple contraído a 2.20. altura máxima de horquillas 4.7 con deslizador lateral. transmisión automática una velocidad ', 'kit de seguridad', 1, 12, 'Pedimento 19 30 3584 9001921 Rentado a PEMBAR 6 de dic 2023 Sigue rentado con el mismo cliente de acuerdo a inventario', '2024-12-12 12:21:57', 23, 8, 27, 7),
(166, '0166', 'F004', 1, 'N/A', '193035849001921', '0', '0', 1, 17, 78, 21, '13517', '8FGU18', '2016', 'N/A', 'N/A', 8, 'Dual Toyota 4Y ', '3372', '0', 'Rojo / Gris', 'Bueno', 'Bueno', '2020-01-15', '613', 1, 'LOGISTICA SHADDAI CC S.A. DE C.V.', 'Con el Cliente', 'Renta', 'Montacargas de combustión interna modelo 8FGCU18. serie 13517. capacidad 3500 libras. motor 4 cilindros a gas. mástil triple contraído a 2.20m altura de horquillas 4.6 m con deslizador lateral. transmisión automática. dirección hidráulica. llantas tipo ', 'kit de seguridad', 1, 12, 'Pedimento 19 30 3584 9001921 En Renta a Anabel Fernandez Correa', '2024-12-12 12:22:32', 23, 8, 27, 7),
(167, '0167', 'F007', 1, 'N/A', '20 30 3167 0001898 y 0002792', '0', '0', 1, 17, 78, 21, '85117', '7FGCU25', '2010', 'N/A', 'N/A', 2, 'Dual Toyota 4Y ', '0', '0', 'Rojo / Gris', 'Bueno', 'Bueno', '2020-02-29', 'A 1457', 1, 'CONSORCIO ADUANAL DE REYNOSA IP S.A. DE C.V.', 'Con el Cliente', 'Ventas', 'Montacargas usado de combustión interna. para carga frontal. capacidad de 500 libras. mástil cuádruple contraído a 2.20. altura de elevación 6 mts. transmisión automática una velocidad ambos sentidos. dirección hidráulica. llantas tipo cushion blan', 'Deslizador lateral', 1, 12, '6 de dic 2023 Rentado a LOGAN reportado en inventario 6 de Dic 2023-Vendido a Logan textil company ', '2024-12-12 12:22:56', 23, 8, 27, 7),
(168, '0168', 'F008', 1, 'N/A', '20 30 3167 0001898 y 0002792', '0', '0', 1, 17, 78, 21, '45582', '8FGCU25', '2014', 'N/A', 'N/A', 8, 'Dual Toyota 4Y ', '0', '0', 'Rojo / Gris', 'Bueno', 'Bueno', '2020-02-29', 'A 1457', 1, 'CONSORCIO ADUANAL DE REYNOSA IP S.A. DE C.V.', 'FRASAN Colors', 'Renta', 'Montacargas usado de combustión interna. para carga frontal. capacidad de 5000 libras mástil cuádruple contraído a 2.20. altura de elevación 6 m. trasmisión automática una velocidad ambos sentidos. dirección hidráulica. llantas tipo cushion blanca', 'deslizador lateral', 1, 12, 'Rentado a Frasan Colors. En FRASAN Colors Febrero 2024 de acuerdo a inventario', '2024-12-12 12:24:35', 23, 8, 27, 7),
(169, '0169', 'F009', 1, 'N/A', '20 30 3167 0001898 y 0002792', '0', '0', 1, 17, 78, 21, '67899', '7FGU30', '2006', 'N/A', 'N/A', 8, 'Dual Toyota 4Y ', '0', '0', 'Rojo / Gris', 'Bueno', 'Bueno', '2020-02-29', 'A 1457', 1, 'CONSORCIO ADUANAL DE REYNOSA IP S.A. DE C.V.', 'Con el Cliente', 'Renta', 'Montacargas usado de combustion interna. para carga frontal. capacidad de 6000 libras mástil triple contraído a 2.20. altura de elevación 4.7 m. trasmisión automática una velocidad ambos sentidos. dirección hidráulica. llantas tipo rudo maticas en', 'Sin datos', 1, 12, 'En Renta a Scrap MS México FOREMEX En Renta Corporación Wegar. sigue en renta de acuerdo a inventario de 6 de dic 2023', '2024-12-12 12:25:02', 23, 8, 27, 7),
(170, '0170', 'F011', 1, 'N/A', '20 30 3167 0001898 y 0002792', '0', '0', 1, 17, 78, 21, '60232', '30-7FBCU30', '2009', 'N/A', 'N/A', 4, 'Dual Toyota 4Y ', '0', '0', 'Rojo / Gris', 'Bueno', 'Bueno', '2020-02-29', 'A 1457', 1, 'CONSTRUCTORA Y DESARROLLADORA GRUPO FRASAN SA DE CV', 'Bodega Xhala', 'Activo', 'Montacargas usado ELECTRICO DE 36 Volts. para carga frontal. capacidad de 6000 libras mástil triple contraído a 2.20. altura de elevación 4.7 m. llantas tipo cushion negras', 'Sin datos', 1, 12, 'En Bodega Xhala de acuerdo ainventario del 6 de dic del 2023. En bodega Xhala Febrero 2024 de acuerdo a Inventario', '2024-12-12 12:25:31', 23, 8, 27, 7),
(171, '0171', 'F015', 1, 'N/A', '20 30 3167 0001899', '0', '0', 1, 1, 34, 21, 'S005V04683M', 'DP40N1', '2018', 'N/A', 'N/A', 1, 'Caterpillar v60', '0', '0', 'Blanco', 'Bueno', 'Bueno', '2020-02-29', 'A 1456', 1, 'CONSORCIO ADUANAL DE REYNOSA IP S.A. DE C.V.', 'Terreno Coyotepec', 'Activo', 'Montacargas usado de combustión interna. para carga frontal. capacidad de 8000 libras mástil triple contado a 2.40. altura de elevación 4.9 m. trasmisión automática dos velocidades ambos sentidos. dirección hidráulica. llantas tipo neumáticas net.', 'Deslizador lateral', 1, 12, 'se adquirio en subasta ritchie bros en houston tx Renta en Cd Sahagun Hidalgo 4 de Dic 2020 Regresa a FRANSANCO 16 de Dic de 2020 2 de Abril regresa de renta a Terreno Coyotepec 14 de Julio de 2021 En Renta San Antonio Tultitlán estado de México 25 de mayo de 2023 Prestado para maniobras en Obra San Antonio Tultitlán 06 de diciembre de 2023 Marco Colin indica durante inventario que esta Rentado en Inmobiliaria y Arrendadora VISA. En bodega Xhala febrero 2024 de acuerdo a Inventario', '2024-12-12 12:26:17', 23, 8, 27, 7),
(172, '0172', 'F016', 1, 'N/A', '20 30 3584 0003466', '0', '0', 1, 17, 78, 21, '39927', '8FGCU25', '0', 'N/A', 'N/A', 8, 'Dual Toyota 4Y ', '0', '0', 'Rojo / Gris', 'Bueno', 'Bueno', '2021-07-05', 'A 3261', 1, 'CONSORCIO ADUANAL DE REYNOSA IP S.A. DE C.V.', 'Bodega Xhala', 'Activo', 'Montacargas usado', 'Sin datos', 1, 12, 'Llego de Reynosa a bodega 16 de Mayo de 2020 Rentado a SMS Foremex En Bodega Xhala de acuerdo a inventario de 6 de Dic de 2023. En bodega Xhala Febrero 2024 de acuerdo a Inventario', '2024-12-12 12:27:01', 23, 8, 27, 7),
(173, '0173', 'F017', 1, 'N/A', '20 30 3584 0003466', '0', '0', 1, 52, 79, 21, 'C815N01671Y', 'NR040AENL36TE107', '0', 'N/A', 'N/A', 4, 'Bateria 24V 12-25', '0', '0', 'Sin datos', 'Bueno', 'Bueno', '2021-07-05', 'A 3261', 1, 'CONSORCIO ADUANAL DE REYNOSA IP S.A. DE C.V.', 'Bodega Xhala', 'Activo', 'Montacargas Eléctrico parado usado', 'Sin datos', 1, 12, 'Llega de Reynosa a bodega 16 de Mayo de 2020 6 de dic 2023 Inventario en Bodega lista para venta o renta. En bodega Xhala Febrero 2024 de acuerdo a Inventario', '2024-12-12 12:27:23', 23, 8, 27, 7),
(174, '0174', 'F018', 1, 'N/A', '20 30 3584 0003466', '0', '0', 1, 45, 69, 21, 'NPR345-0276-9517FG', 'NPR-17', '0', 'N/A', 'N/A', 4, 'Baterias 24v', '0', '0', 'Sin datos', 'Bueno', 'Bueno', '2021-07-05', 'A 3261', 1, 'CONSORCIO ADUANAL DE REYNOSA IP S.A. DE C.V.', 'Bodega Xhala', 'Activo', 'Montacargas eléctrico usado', 'Sin datos', 1, 12, 'Llego de Reynosa a Bodega 16 de Mayo de 2020 6 de dic 2023 inventario en Bodega lista para renta o venta. En bodega Xhala Febrero 2024 de acuerdo a Inventario', '2024-12-12 12:27:43', 23, 8, 27, 7),
(175, '0175', 'F019', 1, 'N/A', '20 30 3584 0003466', '0', '0', 1, 52, 79, 21, 'B883N03479M', 'ESC035ACN36TE088', '0', 'N/A', 'N/A', 4, 'Dual Toyota 4Y ', '0', '0', 'Rojo / Gris', 'Bueno', 'Bueno', '2021-07-05', 'A 3261', 1, 'CONSORCIO ADUANAL DE REYNOSA IP S.A. DE C.V.', 'Bodega Xhala', 'Activo', 'Montacargas eléctrico Parado. usado', 'Sin datos', 1, 12, 'Llego de Reynosa a Bodega 16 de Mayo de 2020 6 de Dic 2023 inventario en bodega. lista para venta o renta. En bodega Xhala Febrero 2024 de acuerdo a Inventario', '2024-12-12 12:28:21', 23, 8, 27, 7),
(176, '0176', 'F021', 1, 'N/A', '20 30 3584 0003466', '0', '0', 1, 9, 39, 26, '200224384', '2030ES', '2014', 'N/A', 'N/A', 4, 'Sin datos', '0', '0', 'Sin datos', 'Bueno', 'Bueno', '2021-07-05', 'A 3261', 1, 'CONSORCIO ADUANAL DE REYNOSA IP S.A. DE C.V.', 'Bodega Xhala', 'Activo', 'Aparato de elevación tipo tijera Usado', 'Sin datos', 1, 12, 'Llega de Reynosa a bodega Xhala 16 de mayo de 2020 Físicamente en bodega Tultitlán durante inventario diciembre 2023\r\nRegresa de Bodega Tultitlán a Bodega Xhala 25 enero 2024. En bodega Xhala febrero 2024 de acuerdo a Inventario', '2024-12-12 12:31:05', 23, 8, 27, 7),
(177, '0177', 'F022', 1, 'N/A', '20 30 3584 0003466', '0', '0', 1, 9, 39, 26, 'B200006626', '2030ES', '0', 'N/A', 'N/A', 4, 'Sin datos', '0', '0', 'Sin datos', 'Bueno', 'Bueno', '2021-07-05', 'A 3261', 1, 'CONSORCIO ADUANAL DE REYNOSA IP S.A. DE C.V.', 'FRASAN Colors', 'Activo', 'Aparato de elevación tipo tijera usado', 'Sin datos', 1, 12, 'Llego de Reynosa a Bodega 16 de Mayo de 2020 Prestada en FRASAN Colors 18 de Agosto de 2021 Sigue en FRASAN Colors de acuerdo a inventario del 7 de Dic 2023 (Reportan que no funciona). En FRASAN Colors Febrero 2024 de acuerdo a inventario', '2024-12-12 12:31:24', 23, 8, 27, 7),
(178, '0178', 'F023', 1, 'N/A', '20 30 3584 0003466', '0', '0', 1, 9, 39, 26, '200210589', '3369LE', '0', 'N/A', 'N/A', 4, 'Sin datos', '0', '0', 'Sin datos', 'Bueno', 'Bueno', '2021-07-05', 'A 3261', 1, 'CONSORCIO ADUANAL DE REYNOSA IP S.A. DE C.V.', 'GIRSA Tlane', 'Activo', 'Aparato de elevación tipo tijera usado', 'Sin datos', 1, 13, 'Llega de Reynosa a Bodega 16 de mayo de 2020 Llega de FRASAN Colors a Terreno Coyotepec 18 de Agosto de 2021 Sale en renta a colonia Roma 13 de Septiembre de 2021 Regresa a Terreno Coyotepec 20 de Septiembre de 2021 Llega de Relleno Sanitario 9 de Junio de 2022 a Bodega Xhala Sale a FRASAN Colors 20 de julio de 2022 Sale de Terreno Coyotepec 27 de Enero de 2023 a FRASAN Colors Físicamente en GIRSA Tlalnepantla durante inventario Dic 2023.\r\nRegresa de GIRSA a Bodega Xhala 24 enero 2024. 9 de Febrero se entrega a GIRSA en Tlalnepantla. Fisicamente  en GIRSA inventario Febrero 2024', '2024-11-21 15:13:06', 26, 5, 17, 6),
(179, '0179', 'F24', 1, 'N/A', '233034823003629', '0', '0', 1, 1, 34, 21, '5AM06542', 'GP25', '0', 'N/A', 'N/A', 8, 'Sin datos', '0', '0', 'Sin datos', 'Bueno', 'Bueno', '2023-12-27', 'A 144', 1, 'GADICC SERVICIOS ADUANEROS S DE RL DE CV', 'Bodega Xhala', 'Activo', 'Montacargas a Gas Butano', 'Sin datos', 1, 12, 'llega de Reynosa Tamps 23 de dic 2023. Sale de Terreno Coyotepec a Bodega Xhala. En bodega Xhala Febrero 2024 de acuerdo a Inventario', '2024-12-12 12:31:43', 23, 8, 27, 7),
(180, '0180', 'F25', 1, 'N/A', '233034823003629', '0', '0', 1, 17, 78, 21, '84912', '7FGU25', '0', 'N/A', 'N/A', 8, 'Sin datos', '0', '0', 'Sin datos', 'Bueno', 'Bueno', '2023-12-27', 'A 144', 1, 'GADICC SERVICIOS ADUANEROS S DE RL DE CV', 'Bodega Xhala', 'Activo', 'Montacargas a Gas butano', 'Sin datos', 1, 21, 'llega de Reynosa Tamps 23 de dic 2023. Sale de Terreno Coyotepec a Bodega Xhala. En bodega Xhala Febrero 2024 de acuerdo a Inventario', '2024-12-12 12:32:45', 23, 8, 27, 7),
(181, '0181', 'F26', 1, 'N/A', '233034823003629', '0', '0', 1, 46, 70, 21, 'AF17D40721', 'FG25N', '0', 'N/A', 'N/A', 8, 'Sin datos', '0', '0', 'Sin datos', 'Bueno', 'Bueno', '2023-12-27', 'A 144', 1, 'GADICC SERVICIOS ADUANEROS S DE RL DE CV', 'Con el Cliente', 'Renta', 'Montacargas a gas butano', 'Sin datos', 1, 12, 'llega de Reynosa Tamps el 23 de dic de 2023 a Bodega Xhala\r\nSale en Renta a Armando Arturo Torres Ángeles 15 de enero de 2024', '2024-12-12 12:33:30', 23, 8, 27, 7),
(210, '0210', 'L2165', 1, 'LUMO FINANCIERA DEL CENTRO SA DE CV SOFOMENR', 'Sin documentos', '0', '0', 4, 49, 15, 7, '3ALACYCS9KDKL2165', 'M210635K', '2019', 'LC45800', 'CAC7323081', 1, '902919C1148982', '0', '0', 'Blanco', 'Bueno', 'Bueno', '2022-11-11', 'C10363', 3, 'LUMO FINANCIERA DEL CENTRO', 'Toluca de Lerdo. Edo de Mex.', 'Activo', 'Chasis cambina', 'Sin datos', 1, 15, 'Sin datos', '2024-10-22 14:07:23', 26, 0, 0, 0),
(211, '0211', 'N4178', 9, 'FRASAN GREEN DE MEXICO', 'Sin documentos', '0', '0', 4, 49, 14, 7, '3AKJC5CV0KDKN4178', 'M210635K', '2019', 'LE35136', 'CAC12872741', 1, 'MBE-4000-45012.8L450', '0', '0', 'blanco', 'Bueno', 'Bueno', '2022-08-29', 'C 3058', 2, 'LUMO FINANCIERA DEL CENTRO', 'Terreno Coyotepec', 'Activo', 'Especificaciones detalladas Tipo de camioneta Cabina y chasis GVWR 33.000 Marca del motor Cummins Ruedas delanteras Aluminio Modelo de motor L9 Ruedas traseras Motor de aluminio HP 350 Velocidad de transmision 6 velocidades Transmision automatica Marca', 'Sin datos', 1, 12, 'Unidad sin documentos reportada por Joan el 31 de Mayo de 2022 Ernesto entrega documentos a nombre de FRASAN Green 5 de Septiembre de 2022 6 de Dic 2023 en Terreno Coyotepec de acuerdo a Inventario 21 de dic 2023 llega a Tandem Pachuca durante inventario\r\nRegresa de Pachuca a Terreno Coyotepec 11 de enero de 2024. En Terreno Coyotepec Febrero 2024 de acuerdo a inventario', '2024-12-12 12:33:51', 23, 8, 27, 7),
(212, '0212', 'P1', 9, 'FRASAN GREEN DE MEXICO', 'AA505432', '1', '0', 4, 53, 80, 7, '3HAMMAAR0JL567771', '4300 SBA 4X2', '2018', 'LG30039', 'CA-C-15139650', 1, 'NAVISTAR', '0', '0', 'Sin datos', 'Bueno', 'Bueno', '2022-05-31', 'C-8813', 1, 'LUMO FINANCIERA DEL CENTRO', 'GIRSA Tlane', 'Activo', 'Camion compactador con caja Mcneilus de 20 yardas modelo 2014', 'Sin datos', 1, 13, 'Sin documentos Víctor Gerardo Zamudio envía relación 05 de Enero 2021 Se compro a Lumo 31 de Mayo de 2022 físicamente en Tandem Pachuca durante inventario Dic 2023. Lo reportan en ruta. Físicamente durante inventario de Febrero 2024 en Tandem Pachuca', '2024-12-12 12:34:15', 23, 4, 27, 7),
(213, '0213', 'P10', 9, 'FRASAN GREEN DE MEXICO', '00032-0336', '1', '0', 4, 53, 80, 7, '3HAMMAAR1JL551014', '4300 SBA 4X2', '2018', 'LG30041', 'CA-C-15130143', 1, 'NAVISTAR serie 177676', '13424', '0', 'Blanco', 'Bueno', 'Bueno', '2022-05-31', 'C 8814', 1, 'LUMO FINANCIERA DEL CENTRO', 'GIRSA Tlane', 'Activo', 'Camion compactador con caja Mcneilus de 20 yardas modelo 2014', 'Sin datos', 1, 13, 'Sin documentos Victor Gerardo Zamudio envia relacion 05 de Enero 2021 Se compro a Lumo 31 de Mayo de 2022 Fisicamente en Tandem Pachuca durante inventario Dic 2023. En mtto temporal del compactador pero esta en operacion. Fisicamente durante inventario de Febrero 2024 en Tandem Pachuca', '2024-11-21 15:40:58', 26, 5, 17, 6),
(214, '0214', 'P100', 2, 'LEASE AND FLEET SOLUTIONS SA DE CV', 'Sin documentos', '0', '0', 4, 15, 45, 8, '3N6AD35C1JK898192', 'NP300', '2018', 'LE78587', 'CAC14650671', 2, 'QR25253429H', '28551', '0', 'Blanco', 'Bueno', 'Bueno', '2023-02-15', 'Sin documentos', 3, 'Sin documentos', 'GIRSA DEL VALLE DE MEXICO', 'Activo', 'Camioneta usada', 'Sin datos', 1, 3, 'Sin documentos Víctor Gerardo Zamudio envía relación 05 de Enero 2021 Físicamente en Tándem Pachuca durante inventario Dic 2023. Lo reportan en ruta. Físicamente en GIRSA Valle de México durante inventario de Febrero de 2024', '2024-12-06 10:26:05', 23, 6, 24, 2),
(215, '0215', 'P101', 1, 'CONSTRUCTORA Y DESARROLLADORA GRUPO FRASAN', 'Sin documentos', '1', '0', 4, 3, 8, 8, '1FDRF3G61LED25728', 'Camioneta de Rodillas ', '2020', 'LE61068', 'CAC10746701', 2, 'Hecho en USA', '0', '0', 'Blanco', 'Bueno', 'Bueno', '2020-10-27', 'AN000012939', 1, 'ECATEPEC SA DE CV', 'Bodega Tultitlan ', 'Activo', 'Camioneta nueva con redilas', 'Sin datos', 1, 13, 'Sin documentos Víctor Gerardo Zamudio envía relación 05 de enero 2021 Físicamente en Tándem Pachuca durante inventario Dic 2023. Descompuesto de carcasa de transmisiones. Físicamente durante inventario de febrero 2024 en Tándem Pachuca', '2024-12-06 10:27:05', 23, 4, 28, 4),
(216, '0216', 'P102', 1, 'CONSTRUCTORA Y DESARROLLADORA GRUPO FRASAN', 'Sin documentos', '1', '0', 4, 3, 8, 8, '1FDRF3G63LED25729', 'Camioneta de Redilas', '2020', 'LE61071', 'CAC10748241', 2, 'Hecho en USA', '6951', '0', 'Blanco', 'Bueno', 'Bueno', '2020-10-29', 'AN000012944', 1, 'ECATEPEC SA DE CV', 'GIRSA Tlane', 'Activo', 'Camioneta nueva', 'Sin datos', 1, 13, 'Sin documentos Víctor Gerardo Zamudio envía relación 05 de enero 2021 Físicamente en Tándem Pachuca durante inventario Dic 2023. Lo reportan en ruta. Físicamente en GIRSA inventario febrero 2024', '2024-11-21 15:19:51', 26, 5, 17, 6),
(217, '0217', 'P103', 1, 'CONSTRUCTORA Y DESARROLLADORA GRUPO FRASAN', 'Sin documentos', '1', '0', 4, 3, 8, 8, '1FDRF3G66LED23490', 'Camioneta de Redilas', '2020', 'LE61072', 'CAC15286503', 2, 'Hecho en USA', '0', '0', 'Blanco', 'Bueno', 'Bueno', '2020-10-29', 'AN000012943', 1, 'ECATEPEC SA DE CV', 'FRASAN Colors', 'Activo', 'Camioneta nueva', 'Sin datos', 1, 6, 'Sin documentos Víctor Gerardo Zamudio envía relación 05 de enero 2021 En Tándem Pachuca durante inventario Dic 2023. Lo reportan en ruta. Físicamente durante inventario de febrero 2024 en Tándem Pachuca', '2024-12-12 12:35:03', 23, 2, 27, 7),
(218, '0218', 'P104', 1, 'CONSTRUCTORA Y DESARROLLADORA GRUPO FRASAN', 'Sin documentos', '1', '0', 3, 3, 8, 8, '1FDRF3G6XLEC08374', 'Camioneta de Redilas', '2020', 'LC37760', 'CAC10231996', 2, 'HECHO EN EE UU', '0', '0', 'Blanco', 'Bueno', 'Bueno', '2020-04-03', 'AN000012750', 1, 'ECATEPEC SA DE CV', 'Bodega Tultitlan ', 'Activo', 'Vehículo de transporte de productos F-350 Super Duty XL Chas Cab color blanco Oxford interior gris roca medio con adecuación Carrocería de camión de carga con redilas', 'Sin datos', 1, 13, 'La recoge Alejandro y la lleva a Tultitlán para adecuación para Redilas Asignada a Víctor Zamudio en Pachuca 1 de Oct de 2020 7 de mayo de 2021 reporta Jesús que llega a Colors para apoyo en campaña asignada a Chofer Oscar En Tándem Pachuca durante inventario Dic 2023. Lo reportan en ruta. Físicamente durante inventario de febrero 2024 en Tándem Pachuca', '2024-12-06 10:29:22', 23, 4, 28, 4),
(219, '0219', 'P11', 9, 'FRASAN GREEN DE MEXICO', 'AA000005436', '1', '0', 4, 53, 80, 7, '3HAMMAAR9JL567770', '4300 SBA 4X2', '2018', 'LG30044', 'CA-C-15130144', 1, 'NAVISTAR serie 177656', '14690', '0', 'Blanco', 'Bueno', 'Bueno', '2022-05-31', 'C 8824', 1, 'LUMO FINANCIERA DEL CENTRO', 'GIRSA Tlane', 'Activo', 'Camion compactador con caja Mcneilus de 20 yardas modelo 2014', 'Sin datos', 1, 13, 'Sin documentos Victor Gerardo Zamudio envia relacion 05 de Enero 2021 Se compro a Lumo 31 de Mayo de 2022 Fisicamente en Tandem Pachuca durante inventario Dic 2023. En mtto temporal del compactador pero esta en operacion. Fisicamente durante inventario de Febrero 2024 en Tandem Pachuca', '2024-11-20 16:32:45', 26, 5, 17, 6),
(220, '0220', 'P12', 1, 'Sin documentos', 'AA000005440', '1', '0', 4, 53, 80, 7, '3HAMMAAR2JL685028', '4300 SBA 4X2', '2018', 'Sin placas', 'Sin documentos', 1, 'NAVISTAR', '67444', '0', 'Blanco', 'Bueno', 'Bueno', '2022-05-31', 'C 8825', 1, 'LUMO FINANCIERA DEL CENTRO', 'Chalco', 'Renta', 'Camion compactador con caja Mcneilus de 20 yardas modelo 2014', 'Sin datos', 1, 13, 'Sin documentos Víctor Gerardo Zamudio envía relación 05 de enero 2021 Se compro a Lumo 31 de mayo de 2022 En Tándem Pachuca durante inventario Dic 2023. Lo reporta en ruta. Físicamente durante inventario de febrero 2024 en Tándem Pachuca', '2024-11-20 17:58:19', 26, 4, 28, 18),
(221, '0221', 'P13', 1, 'INTEGRADORA DE APOYO MUNICIPAL SA DE CV', 'C1176', '0', '0', 4, 53, 80, 7, '3HAMMAAR2GL280733', '4300 SBA 4X2', '2016', 'LF23066', 'CAC10848891', 1, '466HM2U2211070', '15056', '0', 'Blanco', 'Bueno', 'Bueno', '2022-05-31', 'C 8818', 1, 'LUMO FINANCIERA DEL CENTRO', 'Terreno Coyotepec', 'Activo', 'Camion compactador con motor Navistar y caja Hepsa de 20 yardas', 'Sin datos', 1, 13, 'Sin documentos. se da de alta con documentos proporcionados por Victor Gerardo Zamudio 29 Sept 2020 Se compro a Lumo 31 de Mayo de 2022 En Tandem Pachuca durante inventario Dic 2023. Lo reportan en Torno. En taller externo durante inventario de Febrero 2024 en Tandem Pachuca', '2024-12-06 10:35:16', 23, 8, 28, 4),
(222, '0222', 'P14', 1, 'Sin documentos', '332261', '0', '0', 4, 53, 80, 7, '3HAMMAAR9JL651183', '4300 SBA 4X2', '2018', 'Sin placas', 'Sin documentos', 1, 'NAVISTAR serie 188124', '11894', '0', 'Blanco', 'Bueno', 'Bueno', '2022-05-31', 'C 8809', 1, 'LUMO FINANCIERA DEL CENTRO', 'Bodega Tultitlan ', 'Activo', 'Camión compactador de basura con caja Macneilus de 20 yds 2014', 'Sin datos', 1, 13, 'Sin documentos Víctor Gerardo Zamudio envía relación 05 de Enero 2021 Se compro a Lumo 31 de Mayo de 2022 En Tandem Pachuca durante inventario Dic 2023. Lo reportan en torno. Físicamente durante inventario de Febrero 2024 en Tandem Pachuca', '2024-11-21 15:42:56', 26, 4, 28, 18),
(223, '0223', 'P16', 1, 'Sin documentos', '320063', '1', '0', 4, 53, 80, 7, '3HAMMAARXJL651175', '4300 SBA 4X2', '2018', 'Sin placas', 'Sin documentos', 1, 'NAVISTAR', '11754', '0', 'Blanco', 'Bueno', 'Bueno', '2022-05-31', 'C 8810', 1, 'LUMO FINANCIERA DEL CENTRO', 'Chalco', 'Renta', 'Camion compactador con caja Mcneilus de 20 yardas modelo 2014 serie 188123', 'Sin datos', 1, 13, 'Sin documentos Víctor Gerardo Zamudio envía relación 05 de enero 2021 Se compro a Lumo 31 de mayo de 2022 En Tándem Pachuca durante inventario Dic 2023. Lo reportan en ruta. Físicamente durante inventario de febrero 2024 en Tándem Pachuca', '2024-11-21 15:45:06', 26, 4, 28, 18),
(224, '0224', 'P17', 1, 'LUMO FINANCIERA DEL CENTRO SA DE CV SOFOMENR', '290033', '0', '0', 4, 53, 80, 7, '3HAMMAAR8JL331191', '4300 SBA 4X2', '2018', 'LF20934', 'CAC10788058', 1, '466HM2U2216157', '10888', '0', 'Blanco', 'Bueno', 'Bueno', '2022-10-05', 'C10278', 1, 'LUMO FINANCIERA DEL CENTRO', 'Bodega Tultitlan ', 'Activo', 'Camion compactador con motor Navistar y caja Hepsa de 20 yardas', 'Sin datos', 1, 13, 'Sin documentos se da de alta con información proporcionada por Víctor Gerardo Zamudio 29 Sept 2020 En Tándem Pachuca durante inventario Dic 2023. Lo reportan en taller. Físicamente durante inventario de febrero 2024 en Tándem Pachuca', '2024-11-21 15:45:41', 26, 4, 28, 18),
(225, '0225', 'P18', 1, 'Sin documentos', 'AA000005014', '0', '0', 4, 53, 80, 7, '3HAMMAAR9JL552489', '4300 SBA 4X2', '2018', 'Sin placas', 'Sin documentos', 1, 'NAVISTAR', '0', '0', 'Blanco', 'Bueno', 'Bueno', '2022-05-31', 'C 8816', 1, 'LUMO FINANCIERA DEL CENTRO', 'Bodega Tultitlan ', 'Activo', 'Camion compactador con caja Mcneilus de 20 yardas modelo 2014 serie 177729', 'Sin datos', 1, 13, 'Sin documentos Víctor Gerardo Zamudio envía relacion 05 de enero 2021 Se compro a Lumo 31 de mayo de 2022 En Tándem Pachuca durante inventario Dic 2023. Lo reportan en ruta. Físicamente durante inventario de febrero 2024 en Tándem Pachuca', '2024-11-21 15:46:34', 26, 4, 28, 18),
(226, '0226', 'P19', 1, 'Sin documentos', 'AA000005017', '0', '0', 4, 53, 80, 7, '3HAMMAAR5JL552490', '4300 SBA 4X2', '2018', 'Sin placas', 'Sin documentos', 1, 'NAVISTAR', '11505', '0', 'Blanco', 'Bueno', 'Bueno', '2022-05-31', 'C 8808', 1, 'LUMO FINANCIERA DEL CENTRO', 'Bodega Tultitlan', 'Activo', 'Camión compactador de basura con caja Macneilus de 20 yds 2014 serie 177725', 'Sin datos', 1, 13, 'Sin documentos Víctor Gerardo Zamudio enviada relación 05 de enero 2021 Se compro a Lumo 31 de mayo de 2022 En Tándem Pachuca durante inventario Dic 2023. Lo reportan en ruta. Físicamente durante inventario de febrero 2024 en Tándem Pachuca', '2024-11-21 15:47:07', 26, 4, 28, 18),
(227, '0227', 'P-2', 1, 'Sin documentos', 'AA000005438', '0', '0', 4, 53, 80, 7, '3HAMMAAR1JL567780', '4300 SBA 4X2', '2018', 'Sin placas', 'Sin documentos', 1, 'NAVISTAR', '13104', '0', 'Blanco', 'Bueno', 'Bueno', '2022-05-31', 'C 8812', 1, 'LUMO FINANCIERA DEL CENTRO', 'Terreno Coyotepec', 'Activo', 'Camion compactador con caja Mcneilus de 20 yardas modelo 2014', 'Sin datos', 1, 13, 'Sin documentos Víctor Gerardo Zamudio envía relación 05 de enero 2021 Se compro a Lumo 31 de mayo de 2022 En Tándem Pachuca durante inventario Dic 2023. Descompuesto 1/2 ajuste de motor. Físicamente en reparación durante inventario de febrero 2024 en Tándem Pachuca', '2024-12-06 10:37:15', 23, 4, 28, 4),
(228, '0228', 'P20', 9, 'FRASAN GREEN DE MEXICO', 'AA000005442', '1', '0', 4, 53, 80, 7, '3HAMMAAR2JL685031', '4300 SBA 4X2', '2018', 'LG30046', 'CA-C-15139690', 1, 'NAVISTAR', '36136', '0', 'Blanco', 'Bueno', 'Bueno', '2022-05-31', 'C 8826', 1, 'LUMO FINANCIERA DEL CENTRO', 'Chalco', 'Renta', 'Camion compactador con caja Mcneilus de 20 yardas modelo 2014 serie 177691', 'Sin datos', 1, 13, 'Sin documentos Víctor Gerardo Zamudio envía relación 05 de Enero 2021 Se compro a Lumo 31 de Mayo de 2022 Físicamente en Tandem Pachuca durante inventario Dic 2023. En mtto temporal del compactador pero esta en operación. Físicamente durante inventario de Febrero 2024 en Tandem Pachuca', '2024-12-06 10:37:55', 23, 4, 28, 4),
(229, '0229', 'P25', 1, 'UNIFIN FINANCIERA SAB DE CV', '30418', '0', '0', 4, 53, 80, 7, '3HAMMAAR3EL099797', '4300 SBA 4X2', '2014', 'LF21886', 'CAC10818388', 1, '466HM2U2206058', '11754', '0', 'Blanco', 'Bueno', 'Bueno', '2022-11-14', 'C10365', 1, 'LUMO FINANCIERA DEL CENTRO', 'Con el Cliente ', 'Baja', 'Camion compactador con motor Navistar caja Mcneilus de 20 yardas serie 146104 modelo 2014', 'Sin datos', 1, 13, 'Sin documentos se da de alta con datos proporcionados por Victor Gerardo Zamudio 29 Sept 2020 Fisicamente en Tandem Pachuca durante inventario Dic 2023 Deshuesado en un 70 por ciento Fisicamente durante inventario de Febrero 2024 en Tandem Pachuca', '2024-12-06 10:38:30', 23, 4, 28, 4),
(230, '0230', 'P26', 1, 'LUMO FINANCIERA DEL CENTRO SA DE CV SOFOMENR', 'C-693', '0', '0', 4, 53, 80, 7, '3HAMMAARXGL262836', '4300 SBA 4X2', '2016', 'LF21311', 'CAC10777164', 1, '466HM2U2210824', '20544', '0', 'Blanco', 'Bueno', 'Bueno', '2022-05-31', 'C 8819', 1, 'LUMO FINANCIERA DEL CENTRO', 'Con el Cliente ', 'Baja', 'Camion compactador con motor Navistar Caja Hepsa de 20 yardas', 'Sin datos', 1, 13, 'Sin documentos se da de alta con datos proporcionados por Victor Gerardo Zamudio 29 Sept 2020 Se entrega a Francisco J Lopez Valencia para trabajo en Chihuahua 04/03/2021 Se compro a Lumo 31 de Mayo de 2022 Fisicamente en Tandem Pachuca durante inventario Dic 2023 Deshuesado casi totalmente. Fisicamente durante inventario de Febrero 2024 en Tandem Pachuca', '2024-12-06 10:40:04', 23, 4, 28, 4),
(231, '0231', 'P29', 1, 'CONSTRUCTORA Y DESARROLLADORA GRUPO FRASAN', 'Sin documentos', '1', '0', 4, 53, 80, 7, '3HAMSAAR2FL679601', '4400 SBA 6X4', '2015', 'LE45997', 'CAC10176037', 1, '466HM2U2207715', '20179', '0', 'Sin pintar', 'Bueno', 'Bueno', '2019-07-26', '17476', 1, 'GESTION E INOVACION  EN SERVICIOS AMBIENTALES SA DE CV', 'Terreno Coyotepec', 'Activo', 'Camion International 2015 Chasis Cabina Dura star 4400 260 52k 6x4', '2 LLANTAS NUEVAS. BATERIA', 1, 12, 'INGRESO EL 27/07/2019 RENTADO A LA CD DE MEXICO con el SR MIGUEL VALDEZ el 4 de enero de 2020 km 193734 Regreso a terreno de Coyotepec 4 de Julio de 2020 Regresa de Nicolas Romero para resguardo a Coyotepec 11 enero 2021 Sale a Tándem Pachuca 26 de marzo de 2021 Físicamente en Tándem Pachuca durante inventario Dic 2023. El camión funciona, pero la caja compactadora esta descompuesta por lo que no lo sacan a ruta por que no costea el gasto de combustible por lo poco que puede recolectar. Físicamente durante inventario de febrero 2024 en Tándem Pachuca', '2024-12-12 12:35:53', 23, 8, 27, 7),
(232, '0232', 'P-3', 9, 'FRASAN GREEN DE MEXICO', '332249', '1', '0', 4, 53, 80, 7, '3HAMMAAR1JL651176', '4300 SBA 4X2', '2018', 'LG30036', 'CA-C-15139656', 1, 'NAVISTAR serie 188126', '12012', '0', 'Blanco', 'Bueno', 'Bueno', '2022-05-31', 'C 8811', 1, 'LUMO FINANCIERA DEL CENTRO', 'Chalco', 'Renta', 'Camion compactador con caja Mcneilus de 20 yardas modelo 2014', 'Sin datos', 1, 13, 'Sin documentos Víctor Gerardo Zamudio envía relación 05 de Enero 2021 Se compro a Lumo 31 de Mayo de 2022 En Tandem Pachuca durante inventario Dic 2023. Lo reportan en torno. Físicamente durante inventario de Febrero 2024 en Tandem Pachuca', '2024-12-06 10:41:17', 23, 4, 28, 4),
(233, '0233', 'P30', 1, 'UNIFIN FINANCIERA SAB DE CV', 'Sin documentos', '1', '0', 4, 53, 80, 7, '3HAMMMMR1HL378134', '4300 SBA 4X2', '2017', 'LF20689', 'CAC10770333', 1, '73969924', '0', '0', 'Blanco', 'Bueno', 'Bueno', '2021-05-19', 'C 43', 1, 'ARRENDADORA LUMA SA DE CV ', 'Chalco', 'Renta', 'Camion compactador con motor marca Cummins y caja USIMECA de 20 yardas serie HB0913 modelo Delta 20', 'Sin datos', 1, 13, 'Sin documentos. se da de alta con datos proporcionados por Victor Gerardo Zamudio Físicamente en Tandem Pachuca durante inventario Dic 2023. Descompuesto en reparación modulo desconfigurado. Físicamente durante inventario de Febrero 2024 en Tándem Pachuca', '2024-12-06 10:41:38', 23, 4, 28, 4),
(234, '0234', 'P32', 1, 'UNIFIN FINANCIERA SAB DE CV', 'Sin documentos', '1', '0', 4, 53, 80, 7, '3HAMMAAR4EL096343', '4300 SBA 4X2', '2014', 'LF21438', 'CAC10794575', 1, '466HM202205780', '0', '0', 'Blanco', 'Bueno', 'Bueno', '2020-12-30', 'C 42', 1, 'ARRENDADORA LUMA SA DE CV ', 'Con el Cliente', 'Baja', 'Camion compactador con motor Navistar caja Mcneilus de 20 yardas serie 146099 modelo 2014', 'Sin datos', 1, 13, 'Sin documentos se da de alta con datos proporcionados por Victor Gerardo Zamudio 29 sept 2020 En Tandem Pachuca durante inventario Dic 2023. Lo reportan en torno. Fisicamente durante inventario de Febrero 2024 en Tandem Pachuca', '2024-12-06 10:42:00', 23, 4, 28, 4),
(235, '0235', 'P33', 1, 'Sin documentos', 'Sin documentos', '0', '0', 4, 53, 80, 7, '3HAMMAAR4FL526471', 'DURASTAR 4300', '2015', 'Sin placas', 'Sin documentos', 1, '466HM2U2206667', '0', '0', 'Blanco', 'Bueno', 'Bueno', '2023-05-11', 'P 146', 1, 'ESPINOZA MAQUINARIA', 'Bodega Tultitlan ', 'Activo', 'CAMION USADO EN LAS CONDICIONES EN QUE SE ENCUENTRA CON CAJA COMPACTADORA DE BASURA DE CARGA TRASERA', 'CAJACOMPACTADORA CON CAPACIDAD DE 21 YDS MARCA REPSA MODELO SF21Z AÑO 2014 NO DE SERIE CT21F14062 CON WINCH USADO', 1, 13, 'Llega a Colors y se envía a Pachuca En Tándem Pachuca durante inventario Dic 2023. Lo reportan en ruta lo identifican como TP32. En torno durante inventario de febrero 2024 en Tándem Pachuca', '2024-12-06 10:42:40', 23, 4, 28, 4),
(236, '0236', 'P-4', 1, 'FRASAN GREEN', '332249', '0', '0', 4, 53, 80, 7, '3HAMMAAR5JL330256', '4300 SBA 4X2', '2018', 'LG29362', 'CA-C-15130147', 1, 'NAVISTAR SERIE 188120', '11674', '0', 'Blanco', 'Bueno', 'Bueno', '2022-05-31', 'C 8807', 4, 'LUMO FINANCIERA DEL CENTRO', 'GIRSA Tlane', 'Activo', 'Camion compactador con caja Mcneilus de 20 yardas modelo 2014', 'Sin datos', 1, 13, 'Sin documentos Victor Gerardo Zamudio envia relacion 05 de Enero 2021 Se compro a Lumo 31 de Mayo de 2022 En Tandem Pachuca durante inventario Dic 2023. Lo reportan en ruta. Fisicamente durante inventario de Febrero 2024 en Tandem Pachuca', '2024-11-21 15:51:12', 26, 5, 17, 6),
(237, '0237', 'P-5', 1, 'Sin documentos', 'AA000005431', '0', '0', 4, 53, 80, 7, '3HAMMAAR2JL567772', '4300 SBA 4X2', '2018', 'Sin placas', 'Sin documentos', 1, 'NAVISTAR serie 177678', '10039', '0', 'Blanco', 'Bueno', 'Bueno', '2022-05-31', 'C 8804', 1, 'LUMO FINANCIERA DEL CENTRO', 'Bodega Tultitlan', 'Activo', 'Camion compactador con caja Mcneilus de 20 yardas modelo 2014', 'Sin datos', 1, 13, 'Sin documentos Víctor Gerardo Zamudio envía relación 05 de enero 2021 Se compro a Lumo 31 de mayo de 2022 En Tándem Pachuca durante inventario Dic 2023. Lo reportan en ruta. Físicamente en reparación durante inventario de febrero 2024 en Tándem Pachuca', '2024-12-06 10:43:08', 23, 4, 28, 4),
(238, '0238', 'P-6', 1, 'Sin documentos', '320060', '1', '0', 4, 53, 80, 7, '3HAMMAAR3JL330255', '4300 SBA 4X2', '2018', 'Sin placas', 'Sin documentos', 1, 'NAVISTAR serie 188119', '11115', '0', 'Blanco', 'Bueno', 'Bueno', '2022-05-31', 'C 8806', 1, 'LUMO FINANCIERA DEL CENTRO', 'Chalco', 'Renta', 'Camion compactador con caja Mcneilus de 20 yardas modelo 2014', 'Sin datos', 1, 13, 'Sin documentos Víctor Gerardo Zamudio envía relación 05 de enero 2021 Se compro a Lumo 31 de mayo de 2022 En Tándem Pachuca durante inventario Dic 2023. Lo reportan en torno. Físicamente durante inventario de febrero 2024 en Tándem Pachuca', '2024-12-06 10:43:50', 23, 4, 28, 4),
(239, '0239', 'P-7', 1, 'Sin documentos', '320060', '1', '0', 4, 53, 80, 7, '3HAMMAAR7JL550952', '4300 SBA 4X2', '2018', 'Sin placas', 'Sin documentos', 1, 'NAVISTAR', '48466', '0', 'Blanco', 'Bueno', 'Bueno', '2022-05-31', 'C 8827', 1, 'LUMO FINANCIERA DEL CENTRO', 'Chalco', 'Activo', 'Camion compactador con caja Mcneilus de 20 yardas modelo 2014', 'Sin datos', 1, 13, 'Sin documentos Víctor Gerardo Zamudio enviada relación 05 de enero 2021 Se compro a Lumo 31 de mayo de 2022 En Tándem Pachuca durante inventario Dic 2023. Lo reportan en Torno. En Taller eléctrico durante inventario de Febrero 2024 en Tandem Pachuca', '2024-12-06 10:44:12', 23, 4, 28, 4),
(240, '0240', 'P-8', 9, 'FRASAN GREEN DE MEXICO', 'AA000005437', '1', '0', 4, 53, 80, 7, '3HAMMAAR4JL567790', '4300 SBA 4X2', '2018', 'LG30049', 'C-A-C15130142', 1, 'NAVISTAR serie 177688', '15366', '0', 'Blanco', 'Bueno', 'Bueno', '2022-05-31', 'C 8815', 1, 'LUMO FINANCIERA DEL CENTRO', 'Chalco ', 'Renta', 'Camion compactador con caja Mcneilus de 20 yardas modelo 2014', 'Sin datos', 1, 13, 'Sin documentos Victor Gerardo Zamudio envia relacion 05 de Enero 2021 Se compro a Lumo 31 de Mayo de 2022 Fisicamente en Tandem Pachuca durante inventario Dic 2023. En mtto temporal del compactador pero esta en operacion. Fisicamente durante inventario de Febrero 2024 en Tandem Pachuca', '2024-12-06 10:44:41', 23, 4, 28, 4),
(241, '0241', 'P-9', 1, 'Sin documentos', '332250', '0', '0', 4, 53, 80, 7, '3HAMMAAR7JL330257', '4300 SBA 4X2', '2018', 'Sin placas', 'Sin documentos', 1, 'NAVISTAR serie 188121', '10648', '0', 'Blanco', 'Bueno', 'Bueno', '2022-05-31', 'C 8805', 1, 'LUMO FINANCIERA DEL CENTRO', 'Bodega Tultitlan ', 'Activo', 'Camion compactador con caja Mcneilus de 20 yardas modelo 2014', 'Sin datos', 1, 17, 'Sin documentos Víctor Gerardo Zamudio envía relación 05 de enero 2021 Se compro a Lumo 31 de mayo de 2022 Físicamente en Tándem Pachuca durante inventario Dic 2023. Descompuesto en reparación mayor. Físicamente durante inventario de febrero 2024 en Tándem Pachuca', '2024-10-14 17:40:26', 26, 0, 0, 0),
(242, '0242', 'P9173', 13, 'CONSTRUCTORA Y DESARROLLADORA GRUPO FRASAN', 'CTVN12721', '0', '0', 4, 49, 15, 7, '3ALHCYDJ6KDKP9173', 'M252k', '2019', 'LC83263', 'CAC13429508', 1, '926928C1151322', '0', '0', 'Blanco', 'Bueno', 'Bueno', '2022-03-11', 'C 2668', 3, 'CONSTRUCTORA Y DESARROLLADORA GRUPO FRASAN SA DE CV', 'Toluca de Lerdo. Edo de Mex.', 'Venta', 'Chasis Cabina', 'Sin datos', 1, 15, 'Sin datos', '2024-10-22 14:13:58', 26, 0, 0, 0),
(243, '0243', 'P9174', 1, 'CONSTRUCTORA Y DESARROLLADORA GRUPO FRASAN', 'CTVN12722', '0', '0', 4, 49, 15, 7, '3ALHCYDJ8KDKP9174', 'M252K', '2019', 'LC83255', 'CAC13429545', 1, '926928C1150956', '0', '0', 'Blanco', 'Bueno', 'Bueno', '2022-03-11', 'C 2669', 3, 'LEASE AND FLEET SOLUTIONS. S.A. DE C.V.', 'Toluca de Lerdo. Edo de Mex.', 'Activo', 'Chasis Cabina', 'Sin datos', 1, 15, 'Se realiza cambio de propietario nueva TC 13 Abr 2023', '2024-10-22 14:07:44', 26, 0, 0, 0),
(244, '0244', 'R6325', 1, 'LUMO FINANCIERA DEL CENTRO SA DE CV SOFOMENR', 'AN9009', '0', '0', 4, 49, 15, 7, '3ALACYCS6KDKR6325', 'M210635K', '2019', 'LC47801', 'CAC7321874', 1, '902919C1154164', '0', '0', 'Blanco', 'Bueno', 'Bueno', '2022-11-04', 'C 10343', 3, 'LUMO FINANCIERA DEL CENTRO', 'Toluca de Lerdo. Edo de Mex.', 'Activo', 'Camión tipo M2 106 35K4x2. eje delantero sencillo AF1203 de 12000 lbs. dirección hidráulica TRW THP60. Suspension delantera hoja angosta de 12.000 lbs. eje trasero sencillo ARS-230/4 serie R 23000 lb suspensión trasera multi-leaf de 23.000lbs', 'Con aire acondicionado. motor MBE900-210 6.4L 210 HP 2200RPM 2500 GOV 520 LB/FT. Transmisión manual mercedes MBT520S-6D de 6 vel. Sistema de frenos antibloqueo ABS WABCO 4. RECOLECTOR COMPACTADOR CARGA TRASERA MARCA REPSA AÃ‘O 2019 CON CAPACIDAD DE CARGA ', 1, 15, 'Sin datos', '2024-10-22 14:09:23', 26, 0, 0, 0),
(245, '0245', 'U0541', 1, 'CONSTRUCTORA Y DESARROLLADORA GRUPO FRASAN', '0000005214CGVN', '0', '0', 4, 49, 15, 7, '3ALACYCS1LDLU0541', 'M210633K', '2020', 'LD12241', 'CAC13429519', 1, '902919C1155627', '0', '0', 'Blanco', 'Bueno', 'Bueno', '2022-03-11', 'C 2663', 3, 'LEASE AND FLEET SOLUTIONS. S.A. DE C.V.', 'Toluca de Lerdo. Edo de Mex.', 'Activo', 'Camionn caja Chasis Cabina Nacional 6 cilindros para 3 personas 8000 kg de capacidad de carga', 'Sin datos', 1, 15, 'Se realiza cambio de propietario nueva TC 13 Abr 2023', '2024-10-22 14:09:45', 26, 0, 0, 0),
(246, '0246', 'U0545', 1, 'CONSTRUCTORA Y DESARROLLADORA GRUPO FRASAN', '0000005215CGVN', '0', '0', 4, 49, 15, 7, '3ALACYCS9LDLU0545', 'M210633K', '2020', 'LC83259', 'CAC13429530', 1, '902919C1155637', '0', '0', 'Blanco', 'Bueno', 'Bueno', '2022-03-11', 'C 2660', 3, 'LEASE AND FLEET SOLUTIONS. S.A. DE C.V.', 'Toluca de Lerdo. Edo de Mex.', 'Activo', 'Camión caja Chasis Cabina Nacional 6 cilindros para 3 personas 8000 kg de capacidad de carga', 'Sin datos', 1, 15, 'Se realiza cambio de propietario nueva TC 13 Abr 2023', '2024-10-22 14:13:34', 26, 0, 0, 0),
(247, '0247', 'U0546', 1, 'CONSTRUCTORA Y DESARROLLADORA GRUPO FRASAN', '0000005216CGVN', '0', '0', 4, 49, 15, 7, '3ALACYCS0LDLU0546', 'M210633K', '2020', 'LC83260', 'CAC13429557', 1, '902919C1155616', '0', '0', 'Blanco', 'Bueno', 'Bueno', '2022-03-11', 'C 2664', 3, 'LEASE AND FLEET SOLUTIONS. S.A. DE C.V.', 'Toluca de Lerdo. Edo de Mex.', 'Activo', 'Camion caja Chasis Cabina Nacional 6 cilindros para 3 personas 8000 kg de capacidad de carga', 'Sin datos', 1, 15, 'Se realiza cambio de propietario nueva TC 13 Abr 2023', '2024-10-22 14:10:47', 26, 0, 0, 0),
(248, '0248', 'U0547', 1, 'LEASE AND FLEET SOLUTIONS SA DE CV', '0000005217CGVN', '0', '0', 4, 49, 15, 7, '3ALACYCS2LDLU0547', 'M210633K', '2020', 'LG77977', 'CAC16045390', 1, '902919C1156249', '0', '0', 'Blanco', 'Bueno', 'Bueno', '2022-03-11', 'C 2661', 1, 'LEASE AND FLEET SOLUTIONS. S.A. DE C.V.', 'Bodega Tultitlan', 'Activo', 'Camión caja Chasis Cabina Nacional 6 cilindros para 3 personas 8000 kg de capacidad de carga', 'Sin datos', 1, 17, 'Físicamente en Tándem Pachuca durante inventario Dic 2023. Físicamente durante inventario de febrero 2024 en Tándem Pachuca', '2024-10-30 17:09:51', 26, 0, 0, 0),
(249, '0249', 'U0548', 1, 'CONSTRUCTORA Y DESARROLLADORA GRUPO FRASAN', '0000005218CGVN', '0', '0', 4, 49, 15, 7, '3ALACYCS4LDLU0548', 'M210633K', '2020', 'LD12235', 'CAC8538780', 1, '902019C1155645', '0', '0', 'Blanco', 'Bueno', 'Bueno', '2022-03-11', 'C 2667', 3, 'LEASE AND FLEET SOLUTIONS. S.A. DE C.V.', 'Toluca de Lerdo. Edo de Mex.', 'Activo', 'Camion caja Chasis Cabina Nacional 6 cilindros para 3 personas 8000 kg de capacidad de carga', 'Sin datos', 1, 15, 'Sin datos', '2024-10-22 14:11:10', 26, 0, 0, 0),
(250, '0250', 'U0551', 1, 'CONSTRUCTORA Y DESARROLLADORA GRUPO FRASAN', '0000005219CGVN', '0', '0', 4, 49, 15, 7, '3ALACYCS4LDLU0551', 'M210633K', '2020', 'LD12236', 'CAC8538928', 1, '902019C1156549', '0', '0', 'Blanco', 'Bueno', 'Bueno', '2022-03-11', 'C 2659', 3, 'LEASE AND FLEET SOLUTIONS. S.A. DE C.V.', 'Toluca de Lerdo. Edo de Mex.', 'Activo', 'Camionn caja Chasis Cabina Nacional 6 cilindros para 3 personas 8000 kg de capacidad de carga', 'Sin datos', 1, 15, 'Sin datos', '2024-10-22 14:11:32', 26, 0, 0, 0),
(251, '0251', 'U0552', 1, 'CONSTRUCTORA Y DESARROLLADORA GRUPO FRASAN', '0000005220CGVN', '0', '0', 4, 49, 15, 7, '3ALACYCS6LDLU0552', 'M210633K', '2020', 'LE79209', 'CAC14997710', 1, '902919C1157367', '0', '0', 'Blanco', 'Bueno', 'Bueno', '2022-03-11', 'C 2666', 1, 'LEASE AND FLEET SOLUTIONS. S.A. DE C.V.', 'Bodega Tultitlan', 'Activo', 'Camión caja Chasis Cabina Nacional 6 cilindros para 3 personas 8000 kg de capacidad de carga', 'Sin datos', 1, 17, 'Físicamente en Tándem Pachuca durante inventario Dic 2023. Físicamente durante inventario de febrero 2024 en Tándem Pachuca', '2024-10-22 14:25:32', 26, 0, 0, 0);
INSERT INTO `tb_vehiculos` (`idVehiculo`, `folio`, `eco`, `propietario_id`, `nombreTarjeta`, `facturaOrigen`, `gps`, `duplicadoLlaves`, `clase_id`, `marca_id`, `subMarca_id`, `transporte_id`, `serie`, `modelo`, `anio`, `placas`, `numTarjeta`, `combustible_id`, `motor`, `km`, `hrs`, `color`, `estadoFisico`, `estadoOperativo`, `fechaCompra`, `noFactura`, `seguro_id`, `proveedorCompra`, `ubicacion`, `estatus`, `descripcionVehiculo`, `accesoriosVehiculo`, `stock`, `responsable_id`, `observaciones`, `created_at`, `usuario_id`, `area_id`, `usuario_asignado_id`, `unidad_id`) VALUES
(252, '0252', 'U0553', 1, 'CONSTRUCTORA Y DESARROLLADORA GRUPO FRASAN', '0000005221CGVN', '0', '0', 4, 49, 15, 7, '3ALACYCS8LDLU0553', 'M210633K', '2020', 'LC83241', 'CAC8343533', 1, '902919C1157374', '0', '0', 'Blanco', 'Bueno', 'Bueno', '2022-03-11', 'C 2662', 3, 'LEASE AND FLEET SOLUTIONS. S.A. DE C.V.', 'Toluca de Lerdo. Edo de Mex.', 'Activo', 'Camion caja Chasis cabina Nacional Capacidad de carga 8.000 kg 6 cilindros 3 personas', 'Sin datos', 1, 15, 'Sin datos', '2024-10-22 14:11:54', 26, 0, 0, 0),
(253, '0253', 'U0554', 1, 'CONSTRUCTORA Y DESARROLLADORA GRUPO FRASAN', 'CTVN-12796', '0', '0', 4, 49, 15, 7, '3ALACYCSXLDLU0554', 'M210633K', '2020', 'LC83224', 'CAC8319513', 1, '902919C1157388', '0', '0', 'Blanco', 'Bueno', 'Bueno', '2022-03-11', 'C 2665', 3, 'LEASE AND FLEET SOLUTIONS. S.A. DE C.V.', 'Toluca de Lerdo. Edo de Mex.', 'Activo', 'Camion caja Chasis Cabina Nacional 6 cilindros para 3 personas 8000 kg de capacidad de carga', 'Sin datos', 1, 15, 'Sin datos', '2024-10-22 14:12:51', 26, 0, 0, 0),
(254, '0254', 'U3952', 4, 'Sin documentos', 'Sin documentos', '1', '0', 4, 29, 14, 7, '3ALACYCS4LDLU3952', 'M210633K', '2019', 'LG52723', 'Sin documentos', 1, 'MBE900-1906', '0', '0', 'Blanco', 'Bueno', 'Bueno', '2023-02-13', 'C 3423', 3, 'LEASE AND FLEET SOLUTIONS. S.A. DE C.V.', 'Con el Cliente', 'Renta', 'Camion Freightliner modelo 2020 mbe900-1906 4l 190hp gondola 7m3', 'Sin datos', 1, 12, 'Unidad sin documentos reportada por Joan el 31 de Mayo de 2022 Llega a bodega azul 23 de septiembre de 2022 llega a Terreno Coyotepec 23 de Enero 2023 Sale a NR 7 Mzo 2023. En Renta Nicolas Romero 8 de Marzo de 2023 Funcionando en Obras Publicas Nicolas romero Inventario 15 dic 2023', '2024-10-08 17:55:27', 26, 0, 0, 0),
(255, '0255', 'U3956', 4, 'Sin documentos', 'Sin documentos', '1', '0', 4, 49, 14, 7, '3ALACYCS1LDLU3956', 'M210633K', '2019', 'LC83235', 'Sin documentos', 1, 'MB900-1906', '0', '0', 'Blanco', 'Bueno', 'Bueno', '2023-02-13', 'C 3421', 3, 'LUMO FINANCIERA DEL CENTRO', 'Con el Cliente', 'Renta', 'Camion Freightliner modelo 2020 mbe900-1906 4l 190hp gondola 7m3', 'Sin datos', 1, 12, 'Unidad sin documentos reportada por Joan el 31 de Mayo de 2022 llega de Relleno Talne a terreno coyotepec 27 Feb 2023 Sale a NR 7 Mzo 2023. Rentada en Nicolas Romero 8 de Marzo 2023 En funcionamiento con calaveras rotas en Obras Publicas Inventario 15 Dic 2023 Nicolas Romero', '2024-10-08 17:56:01', 26, 0, 0, 0),
(256, '0256', 'U3957', 4, 'LEASE AND FLEET SOLUTIONS SA DE CV', '0000012796CTVN', '0', '0', 4, 49, 14, 7, '3ALACYCS3LDLU3957', 'M210633K', '2020', 'LC83238', 'CAC16206854', 1, 'Sin datos', '0', '0', 'Blanco', 'Bueno', 'Bueno', '2023-02-13', 'C 3422', 3, 'LUMO FINANCIERA DEL CENTRO', 'GIRSA Tlane', 'Activo', 'Camion Freightliner 6.4l 210hp', 'Sin datos', 1, 13, 'Unidad sin documentos reportada por Joan el 31 de mayo de 2022 Físicamente en GIRSA Tlalnepantla durante inventario de diciembre 2023. Físicamente en GIRSA inventario febrero 2024', '2024-11-12 17:33:46', 26, 0, 0, 0),
(257, '0257', 'U3958', 1, 'Sin documentos', 'Sin documentos', '1', '0', 4, 49, 14, 7, '3ALACYCS5LDLU3958', 'M210633K', '2020', 'LG52722', 'Sin documentos', 1, 'Sin datos', '0', '0', 'Blanco', 'Bueno', 'Bueno', '2023-02-13', 'C 3424', 3, 'Sin documentos', 'Con el Cliente', 'Renta', 'Camion Freightliner modelo 2020 mbe900-1906 4l 190hp gondola 7m3', 'Sin datos', 1, 13, 'Sale de Terreno Coyotepec a Bodega en Cuautitan 8 de Febrero de 2022 llega de Relleno sanitario a Terreno Coyotepec 23 de Enero de 2023 Sale de Terreno Coyotepec a Relleno Sanitario Tlalnepantla en prestamo 7 de Febrero de 2023 Sale de NR 7 Mzo 2023. En renta Nicolas Romero 8 de Marzo de 2023 En funcionamiento con calaveras rotas en Obras Publicas Inv 15 Dic 2023 Nicolas Romero', '2024-12-06 10:45:42', 23, 4, 28, 4),
(258, '0258', '258', 1, 'Pendiente', 'AN000015281', '0', '1', 3, 3, 12, 8, 'WF0WSANB1RTH39279', 'TRANSIT BUS ELWB AC', '2024', 'NZ3533B', 'Pendiente', 1, 'Hecho en Turquia', '0', '0', 'Blanco nieve', 'Bueno', 'Bueno', '2024-03-06', 'AN000015281', 6, 'Ecatepec SA de CV', 'FRASAN Colors', 'Activo', 'Camioneta Ford Transit Bus extra larga Elwd M4B Van Std  Nueva', 'AA EE MP3 USB BA 167HP ABS 2L 4CIL 4P 180CUP', 1, 8, 'Se da de alta con copia de factura 11 Marzo 2024 aun no llega la unidad fisicamente', '2024-10-23 14:52:56', 26, 0, 0, 0),
(259, '0259', '259', 1, 'Pendiente', 'AN000015282', '0', '0', 3, 3, 12, 8, 'WF0WS4NB8RTH32362', 'TRANSIT BUS ELWB AC', '2024', 'NZ3538B', 'Pendiente', 1, 'Hecho en Turquía', '0', '0', 'Blanco Nieve', 'Bueno', 'Bueno', '2024-03-06', 'AN000015282', 6, 'Ecatepec SA de CV', 'FRASAN Colors', 'Activo', 'Vehículo nuevo Transit bus Color Blanco nieve con interiores gris con negro 4 cilindros Transmisión manual ', 'AA EE MP3 USB BA 167HP ABS 2L 4CIL 4P 180CUP', 1, 8, 'Se da de alta con copia de factura el 11 de marzo de 2024 aun no llega la unidad físicamente', '2024-10-23 14:51:42', 26, 0, 0, 0),
(260, '0260', '260', 13, 'N/A', '24303482 4001300', '0', '0', 2, 1, 34, 23, 'CAT0140MHM9D01663', '140M2', '2013', 'N/A', 'N/A', 1, 'MYE05761', '0', '0', 'Amarillo', 'Bueno', 'Bueno', '2024-03-07', 'Pendiente', 1, 'IDN Servicios aduanales y Logistica en comercio exterior', 'Con el cliente', 'Ventas', 'Moto conformadora usada', 'n/a', 1, 20, 'Llega a GIRSA Valle de México 12 de Marzo de 2024 y se vende a CRAVIL CONSTRUCCIONES el 20 de Febrero del 2024', '2024-11-13 18:00:22', 14, 8, 0, 0),
(261, '0261', '0261', 8, 'SIN DOCUMENTOS ', 'C 936', '0', '1', 4, 56, 83, 2, 'LFWA22183RJT00139', 'ELAM FAW MAMUT T80', '2024', 'LE78040', 'CAC14625862', 2, 'CA4GX15*203324*', '0', '0', 'BLANCO', 'Bueno', 'Bueno', '2024-04-25', '936', 1, 'FAW TOLUCA', 'Bodega Xhala', 'Activo', 'VEHICULO NUEVO FAW ELAM ', 'EQUIPADO CON VALLA PUBLICITARIA BOCINA DE AUDIO Y GENERADOR DE LUZ', 1, 7, 'UNIDAD ASIGNADA A COMPAÑA, RECIBE LAURA RAMIREZ 26 DE ABRIL DE 2024 ', '2024-11-13 17:59:02', 14, 8, 0, 0),
(262, '0262', '0262', 8, 'SIN DOCUMENTOS', 'C-938', '0', '1', 4, 56, 83, 2, 'LFWA22187RJT00127', 'ELAM FAW MAMUT T80', '2024', 'LE78032', 'CAC-14625777', 2, 'CA4GX15*203303*', '0', '0', 'BLANCO', 'Bueno', 'Bueno', '2024-04-25', '938', 1, 'FAW TOLUCA', 'Bodega Xhala', 'Baja', 'VEHICULO NUEVO FAW ELAM ', 'EQUIPADO CON VALLA PUBLICITARIA BOCINA DE AUDIO GENERADOR DE LUZ', 1, 7, 'UNIDAD ASIGNADA A CAMPAÑA RECIBE LAURA RAMIREZ ', '2024-11-13 17:58:28', 14, 8, 0, 0),
(263, '0263', '0263', 8, 'SIN DOCUMENTOS', 'C-934', '0', '1', 4, 56, 83, 2, 'LFWA22187RJT00158', 'ELAM FAW MAMUT T80', '2024', 'LE78025', 'CAC-14625783', 2, 'CA4GX15*203310*', '0', '0', 'BLANCO', 'Bueno', 'Bueno', '2024-04-24', '938', 1, 'FAW TOLUCA', 'Bodega Xhala', 'Activo', 'VEHICULO NUEVO FAW ELAM ', 'EQUIPADO CON VALLA PUBLICITARIA BOCINA DE AUDIO GENERADOR DE LUZ', 1, 7, 'UNIDAD ASIGNADA A CAMPAÑA RECIBE LAURA RAMIREZ ', '2024-11-13 17:29:03', 26, 8, 0, 0),
(264, '0264', '0264', 8, 'SIN DOCUMENTOS', 'C-935', '0', '1', 4, 56, 83, 2, 'LFWA22186RJT00149', 'ELAM FAW MAMUT T80', '2024', 'LE78035', 'CAC-14625787', 2, 'CA4GX15*203306*', '0', '0', 'BLANCO', 'Bueno', 'Bueno', '2024-04-24', '935', 1, 'FAW TOLUCA', 'Bodega Xhala', 'Activo', 'VEHICULO NUEVO FAW ELAM ', 'EQUIPADO CON VALLA PUBLICITARIA BOCINA DE AUDIO GENERADOR DE LUZ', 1, 7, 'UNIDAD ASIGNADA A CAMPAÑA RECIBE LAURA RAMIREZ ', '2024-11-13 17:27:48', 26, 8, 0, 0),
(265, '0265', '0265', 8, 'SIN DOCUMENTOS', 'C-937', '0', '1', 4, 56, 83, 2, 'LFWA22180RJT00115', 'ELAM FAW MAMUT T80', '2024', 'LE78039', 'CAC-14625855', 2, 'CA4GX15*203308', '0', '0', 'BLANCO', 'Bueno', 'Bueno', '2024-04-25', '937', 1, 'FAW TOLUCA', 'FRASAN colors ', 'Activo', 'VEHICULO NUEVO FAW ELAM', 'EQUIPADO CON VALLA PUBLICITARIA, BOCINA DE AUDIO , GENERADOR DE LUZ ', 1, 6, 'UNIDAD ASIGANADA A COMPAÑA RECIBE LAURA RAMIREZ 26 DE ABRIL 2024', '2024-11-13 17:29:39', 26, 2, 0, 0),
(266, '0266', '0266', 8, 'SIN DOCUMENTOS', 'C-933', '0', '1', 4, 56, 83, 2, 'LFWA22189RJT00145', 'ELAM FAW MAMUT T80', '2024', 'LE78038', 'CAC-14625819', 2, 'CA4GX15*203300*', '0', '0', 'BLANCO', 'Bueno', 'Bueno', '2024-04-24', '933', 1, 'FAW TOLUCA ', 'FRASAN colors', 'Activo', 'VEHICULO NUEVO FAW ELAM ', 'EQUIPADO CON VALLA PUBLICITARIA, BOCINA DE AUDIO, GENERADOR DE LUZ ', 1, 6, 'UNIDAD ASIGNADA A COMPAÑA, RECIBE LAURA RAMIREZ ', '2024-12-06 10:46:38', 23, 2, 29, 2),
(267, '0267', '0267', 8, 'JORGE LUIS BARIRENTOS ', 'SIN DOCUMENTOS ', '0', '1', 3, 47, 82, 4, 'WBACX6102L9C28527', 'X7-M501', '2020', 'RBZ925C', '1760092', 2, 'SIN DATOS ', '0', '0', 'SIN DATOS ', 'Bueno', 'Bueno', '2024-04-01', 'SIN DOCUMETOS ', 1, 'DIPUTADO OSVALDO ', 'Club de Golf Hacienda', 'Activo', 'VEHICULO DE USO PERSONAL ', 'SIN DATOS ', 1, 8, 'VERIFICARION VENCIDA A SU REGRESO, PAGAR MULTA, Y PONER AL CORRIENTE ', '2024-11-13 17:57:39', 14, 8, 0, 0),
(268, '0268', '268', 1, 'S/TC', 'CNN000005118', '0', '1', 3, 17, 82, 8, '3TYLC5LN4RT005161', 'Pick Up D-Cab', '2024', 'S/P', 'S/TC', 3, 'T24TBR065115', '0', '0', 'BLANCO', 'Bueno', 'Bueno', '2024-07-30', 'CNN000005118', 1, 'CACHO MOTORS', 'FRASAN COLORS', 'Activo', 'CAMIONETA TOYOTA TACOMA NUEVA, COLOR BLANCO, HIBRIDA, ', 'SIN DATOS', 1, 8, 'UNIDAD NUEVA ', '2024-11-13 17:57:07', 14, 8, 0, 0),
(269, '0269', '269', 14, 'NA', '10138', '0', '0', 1, 55, 82, 38, '17721706', 'Tren miniatura', '2024', 'NA', 'NA', 7, '231700161', '0', '1200', 'GRIS CON NEGRO', 'Bueno', 'Regular', '2024-03-07', '10138', 2, 'PARTICULAR', 'BODEGA XHALA', 'Inactivo', 'TREN MINIATURA COLOR NEGRO CON GRIS', 'NINGUNO ', 1, 12, 'EN BODEGA DE XHALA, INACTIVO ', '2024-12-12 12:36:35', 23, 7, 27, 7),
(270, '0270', '270', 1, 'Constructora y Desarrolladora Grupo FRASAN', 'CNC000005373', '0', '1', 4, 17, 27, 4, 'JTDAE3AU9R3007565', 'LIFTBACK', '2024', '66J871', 'ECC15814818', 3, '2ZR 3B50336', '0', '0', 'Plata', 'Bueno', 'Bueno', '2024-09-23', 'CNC000005373', 4, 'CACHO MOTORS', 'Club de Golf Hacienda', 'Activo', 'Prius Premium XVN importado ', 'Transmisión Engranes planetarios', 1, 11, 'Ernesto entrega copia de factura 8 de Oct del 2024 para abrir archivo', '2024-11-13 17:53:40', 14, 8, 0, 0),
(271, '0271', 'CV271', 1, 'N/A', 'Pendiente', '0', '0', 2, 1, 34, 14, 'CAT0226EVFJH00624', '336EL', 'Pendiente', 'N/A', 'N/A', 1, 'Pendiente', '0', '0', 'Pendiente', 'Bueno', 'Bueno', '2024-11-08', 'Pendiente', 2, 'GADICC SERVICIOS ADUANEROS', 'GIRSA VALLE DE MEXICO', 'Activo', 'Excavadora importada', 'Pendiente', 1, 3, 'Llega 5 de Nov a GIRSA Valle de México', '2024-12-06 10:48:02', 23, 6, 24, 2);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `tb_vehiculos_seguros`
--

CREATE TABLE `tb_vehiculos_seguros` (
  `idSegVeh` int NOT NULL,
  `vehiculo_id` int NOT NULL,
  `seguro_id` int NOT NULL,
  `poliza` varchar(255) NOT NULL,
  `inciso` varchar(10) NOT NULL,
  `vigencia` varchar(255) NOT NULL,
  `observaciones` text NOT NULL,
  `usuario_id` int NOT NULL,
  `created_at` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Volcado de datos para la tabla `tb_vehiculos_seguros`
--

INSERT INTO `tb_vehiculos_seguros` (`idSegVeh`, `vehiculo_id`, `seguro_id`, `poliza`, `inciso`, `vigencia`, `observaciones`, `usuario_id`, `created_at`) VALUES
(1, 210, 3, '3201-028523-00', '10', '20-01-2024 - 20-01-2025', 'Pagado 1er trimestre', 14, '2024-03-28 12:42:23'),
(2, 243, 3, '3201-028523-00', '11', '20-01-2024 - 20-01-2025', 'Pagado 1er trimestre', 14, '2024-03-28 12:44:05'),
(3, 244, 3, '3201-028523-00', '12', '20-01-2024 - 20-01-2025', '1er Trimestre pagado', 14, '2024-04-30 12:50:49'),
(4, 245, 3, '3201-028523-00', '13', '20-01-2024 - 20-01-2025', 'Pagado 1er trimestre', 14, '2024-03-28 12:51:59'),
(5, 246, 3, '3201-028523-00', '14', '20-01-2024 - 20-01-2025', 'Pagado 1er trimestre', 14, '2024-03-28 12:53:32'),
(6, 247, 3, '3201-028523-00', '15', '20-01-2024 - 20-01-2025', 'Pagado 1er trimestre', 14, '2024-03-28 12:54:56'),
(7, 249, 3, '3201-028523-00', '16', '20-01-2024 - 20-01-2025', 'Pagado 1er trimestre', 14, '2024-03-28 12:56:06'),
(8, 250, 3, '3201-028523-00', '17', '20-01-2024 - 20-01-2025', 'Pagado 1er trimestre', 14, '2024-04-29 12:32:08'),
(9, 252, 3, '3201-028523-00', '18', '20-01-2024 - 20-01-2025', 'Pagado 1er trimestre', 14, '2024-03-28 12:58:33'),
(10, 253, 3, '3201-028523-00', '19', '20-01-2024 - 20-01-2025', 'Pagado 1er trimestre', 14, '2024-03-28 13:00:17'),
(11, 145, 3, '3201-028523-00', '3', '20-01-2024 - 20-01-2025', 'Pagado 1er trimestre', 14, '2024-03-28 13:06:49'),
(12, 152, 3, '3201-028523-00', '4', '20-01-2024 - 20-01-2025', 'Pagado 1er trimestre', 14, '2024-03-28 13:07:49'),
(13, 157, 3, '3201-028523-00', '2', '20-01-2024 - 20-01-2025', 'Pagado 1er trimestre', 14, '2024-03-28 13:08:40'),
(14, 161, 3, '3201-028523-00', '6', '20-01-2024 - 20-01-2025', 'Pagado 1er trimestre', 14, '2024-03-28 13:10:12'),
(15, 156, 3, '3201-028523-00', '1', '20-01-2024 - 20-01-2025', 'Pagado 1er trimestre', 14, '2024-03-28 13:11:35'),
(16, 159, 3, '3201-028523-00', '5', '20-01-2024 - 20-01-2025', '', 14, '2024-03-28 13:12:29'),
(17, 254, 3, '3201-028523-00', '7', '20-01-2024 - 20-01-2025', 'Pagado 1er trimestre', 14, '2024-03-28 13:13:25'),
(18, 255, 3, '3201-028523-00', '8', '20-01-2024 - 20-01-2025', 'Pagado 1er trimestre', 14, '2024-03-28 13:14:22'),
(19, 257, 3, '3201-028523-00', '9', '20-01-2024 - 20-01-2025', 'Pagado 1er trimestre', 14, '2024-03-28 13:15:17'),
(20, 100, 5, '772-1004038043', '0', '16-11-2022 - 01-12-2024', 'Seguro por financiamiento', 14, '2024-03-28 13:30:28'),
(21, 101, 4, 'TFSM0000153358', '00', '01-12-2022 - 16-12-2023', 'Seguro de financiamiento', 14, '2024-04-30 12:52:55'),
(22, 109, 4, 'TFSM0000161447', '0', '17-03-2023 - 01-04-2024', 'Seguro por financiamiento', 14, '2024-03-28 13:36:53'),
(23, 129, 4, 'GMF17552710', '0', '23-08-2023 - 23-08-2024', 'Seguro por financiamiento', 14, '2024-03-28 13:38:24'),
(24, 130, 4, 'GMF1752710', '0', '23-08-2023 - 23-08-2024', 'Seguro por financiamiento', 14, '2024-03-28 13:41:48'),
(25, 133, 4, 'GMF1115840', '0', '23-10-2023 - 23-10-2024', 'Seguro por financiamiento', 14, '2024-03-28 13:43:51'),
(26, 23, 3, '3201-028886-00', '1', '12-04-2024 - 12-04-2025', 'Flotilla', 14, '2024-04-29 12:45:34'),
(27, 33, 3, '3201-028886-00', '2', '12-04-2024 - 12-04-2025', 'Flotilla', 14, '2024-04-29 12:51:55'),
(28, 34, 3, '3201-028886-00', '3', '12-04-2024 - 12-04-2025', 'FLOTILLA', 26, '2024-04-29 13:00:00'),
(29, 45, 3, ' 3201-028886-00', '4', '29-04-2024 - 29-04-2024', 'FLOTILLA ', 26, '2024-04-29 13:04:24'),
(30, 46, 3, ' 3201-028886-00', '5', '12-04-2024 - 12-04-2025', 'FLOTILLA', 26, '2024-04-29 13:06:21'),
(31, 47, 3, ' 3201-028886-00', '6', '12-04-2024 - 12-04-2025', 'FLOTILLA', 26, '2024-04-29 13:10:10'),
(32, 50, 3, ' 3201-028886-00', '7', '12-04-2024 - 12-04-2025', 'FLOTILLA ', 26, '2024-04-29 13:11:51'),
(34, 51, 3, ' 3201-028886-00', '8', '12-04-2024 - 12-04-2025', 'FLOTILLA', 26, '2024-04-29 13:16:12'),
(35, 55, 3, ' 3201-028886-00', '9', '12-04-2024 - 12-04-2025', 'FLOTILLA', 26, '2024-04-29 13:17:04'),
(36, 56, 3, ' 3201-028886-00', '10', '12-04-2024 - 12-04-2025', 'FLOTILLA', 26, '2024-04-29 13:18:09'),
(37, 57, 3, ' 3201-028886-00', '11', '12-04-2024 - 12-04-2025', 'FLOTILLA', 26, '2024-04-29 13:19:24'),
(38, 58, 3, ' 3201-028886-00', '12', '12-04-2024 - 12-04-2025', 'FLOTILLA ', 26, '2024-04-29 13:20:52'),
(39, 58, 3, ' 3201-028886-00', '12', '12-04-2024 - 12-04-2025', 'FLOTILLA ', 26, '2024-04-29 13:20:53'),
(40, 60, 3, ' 3201-028886-00', '13', '12-04-2024 - 12-04-2025', 'FLOTILLA', 26, '2024-04-29 13:22:22'),
(41, 62, 3, ' 3201-028886-00', '14', '12-04-2024 - 12-04-2025', 'FLOTILLA', 26, '2024-04-29 13:23:19'),
(42, 62, 3, ' 3201-028886-00', '14', '12-04-2024 - 12-04-2025', 'FLOTILLA', 26, '2024-04-29 13:23:20'),
(43, 63, 3, ' 3201-028886-00', '15', '12-04-2024 - 12-04-2025', 'FLOTILLA', 26, '2024-04-29 13:24:42'),
(44, 64, 3, ' 3201-028886-00', '16', '12-04-2024 - 12-04-2025', 'FLOTILLA', 26, '2024-04-29 13:25:34'),
(45, 66, 3, ' 3201-028886-00', '17', '12-04-2024 - 12-04-2025', 'FLOTILLA', 26, '2024-04-29 13:26:33'),
(47, 67, 3, ' 3201-028886-00', '18', '12-04-2024 - 12-04-2025', 'FLLOTILLA', 26, '2024-04-29 13:27:25'),
(48, 69, 3, ' 3201-028886-00', '19', '12-04-2024 - 12-04-2025', 'FLOTILLA', 26, '2024-04-29 13:28:26'),
(49, 70, 3, ' 3201-028886-00', '20', '12-04-2024 - 12-04-2025', 'FLOTILLA', 26, '2024-04-29 13:30:07'),
(50, 71, 3, ' 3201-028886-00', '21', '12-04-2024 - 12-04-2025', 'FLOTILLA', 26, '2024-04-29 13:30:58'),
(51, 72, 3, ' 3201-028886-00', '22', '12-04-2024 - 12-04-2025', 'FLOTILLA', 26, '2024-04-29 13:32:06'),
(53, 73, 3, ' 3201-028886-00', '23', '12-04-2024 - 12-04-2025', 'FLOTILLA', 26, '2024-04-29 13:33:08'),
(54, 74, 3, ' 3201-028886-00', '24', '12-04-2024 - 12-04-2025', 'FLOTILLA', 26, '2024-04-29 13:34:24'),
(56, 77, 3, ' 3201-028886-00', '25', '12-04-2024 - 12-04-2025', 'FLOTILLA', 26, '2024-04-29 13:35:56'),
(58, 86, 3, ' 3201-028886-00', '26', '12-04-2024 - 12-04-2025', 'FLOTILLA', 26, '2024-04-29 13:37:01'),
(59, 87, 3, ' 3201-028886-00', '27', '12-04-2024 - 12-04-2025', 'FLOTILLA', 26, '2024-04-29 13:37:43'),
(60, 88, 3, ' 3201-028886-00', '28', '12-04-2024 - 12-04-2025', 'FLOTILLA', 26, '2024-04-29 13:38:27'),
(62, 90, 3, ' 3201-028886-00', '29', '12-04-2024 - 12-04-2025', 'FLOTILLA ', 26, '2024-04-29 13:40:02'),
(64, 92, 3, ' 3201-028886-00', '30', '12-04-2024 - 12-04-2025', 'FLOTILLA', 26, '2024-04-29 13:43:34'),
(65, 99, 3, ' 3201-028886-00', '31', '12-04-2024 - 12-04-2025', 'FLOTILLA', 26, '2024-04-29 13:44:20'),
(66, 101, 3, ' 3201-028886-00', '32', '12-04-2024 - 12-04-2025', 'FLOTILLA', 26, '2024-04-29 13:45:04'),
(68, 102, 3, ' 3201-028886-00', '33', '12-04-2024 - 12-04-2025', 'FLOTILLA', 26, '2024-04-29 13:46:20'),
(69, 110, 3, ' 3201-028886-00', '33', '12-04-2024 - 12-04-2025', 'FLOTILLA', 26, '2024-04-29 13:47:37'),
(70, 111, 3, ' 3201-028886-00', '35', '12-04-2024 - 12-04-2025', 'FLOTILLA', 26, '2024-04-29 13:48:41'),
(71, 214, 3, ' 3201-028886-00', '36', '12-04-2024 - 12-04-2025', 'FLOTILLA', 26, '2024-04-29 13:49:40'),
(72, 216, 3, ' 3201-028886-00', '37', '12-04-2024 - 12-04-2025', 'FLOTILLA', 26, '2024-04-29 13:50:32'),
(73, 211, 3, ' 3201-028886-00', '38', '12-04-2024 - 12-04-2025', 'FLOTILLA', 26, '2024-04-29 13:51:40'),
(74, 270, 4, 'TFSM00003056709', 'Cont 65139', '01-09-2024 - 16-09-2025', 'Se entrega póliza a Michael 16 de Oct 2024', 14, '2024-10-16 16:54:53'),
(75, 220, 3, '3021-028523-00', '21', '17-10-2024 - 20-01-2025', 'RENTADO EN CHALCO', 26, '2024-11-01 14:12:10'),
(76, 223, 3, '3201-028523-00', '22', '17-10-2024 - 20-01-2025', 'UNIDAD EN CHALCO', 26, '2024-11-01 14:15:00'),
(77, 228, 3, '3201-028523-00', '23', '10-10-2024 - 20-01-2025', 'UNIDAD EN CHALCO', 26, '2024-11-01 14:16:45'),
(78, 232, 3, '3201-028523-00', '24', '17-10-2024 - 20-01-2025', 'UNIDAD EN CHALCO', 26, '2024-11-01 14:21:02'),
(79, 238, 3, '3201-028523-00', '26', '17-10-2024 - 20-01-2025', 'UNIDAD EN CHALCO', 26, '2024-11-01 14:23:55'),
(80, 233, 3, '3201-028523-00', '25', '17-10-2024 - 20-01-2025', 'UNIDAD EN CHALCO', 26, '2024-11-01 14:33:01'),
(81, 239, 3, '3201-028523-00', '27', '17-10-2024 - 20-01-2025', 'UNIDAD EN CHALCO', 26, '2024-11-01 14:40:02'),
(82, 240, 3, '3201-028523-00', '28', '17-10-2024 - 20-01-2025', 'UNIDAD EN CHALCO', 26, '2024-11-01 14:47:28');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `tb_vehiculos_servicios`
--

CREATE TABLE `tb_vehiculos_servicios` (
  `idVehiculoServicio` int NOT NULL,
  `vehiculo_id` int NOT NULL,
  `servicio` varchar(255) NOT NULL,
  `taller` varchar(255) NOT NULL,
  `observaciones` varchar(255) NOT NULL,
  `fecha` date NOT NULL,
  `created_at` datetime NOT NULL,
  `usuario_id` int NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Volcado de datos para la tabla `tb_vehiculos_servicios`
--

INSERT INTO `tb_vehiculos_servicios` (`idVehiculoServicio`, `vehiculo_id`, `servicio`, `taller`, `observaciones`, `fecha`, `created_at`, `usuario_id`) VALUES
(1, 132, 'SERVICIO 80, 000 KM ', 'TALLER EXTERNO ', 'SE REALIZO: FILTROS DE AIRE, ACEITE, COMBUSTIBLE, ACEITE SINTETICO, BALATAS DELANTERAS, BALATAS, TRASERAS, RECTIFICACION 4 DISCOS', '2024-04-25', '2024-05-08 11:28:27', 14),
(2, 60, 'SERVICIO DE 30, 000 KM', 'AGENCIA AUTOMOTRIZ', 'SE REALIZO: CAMBIO DE 16 BUJIAS, CAMBIO DE ACEITE SINTETICO, FILTROS, FILTRO DE AIRE, LAVADO DE CUERPO DE ACELERACION, LIQUIDO LAVA INYECTORRES', '2024-08-01', '2024-05-08 11:29:00', 14),
(3, 73, 'SERVICIO DE 50,000 KM ', 'AGENCIA TOYOTA', 'CAMBIO DE ACEITE,SHAMPOO, GASKET, FILTRO ', '2024-03-26', '2024-05-08 14:22:30', 14),
(4, 70, 'SERVICO DE 20, 971 KM ', 'AGENCIA TOYOTA CACHO MOTORS', 'SERVICO DE 30,000 KM (CAMBIO DE ACEITE SEMISINTETICO, SHAMPOO, ADITIVO, FILTRO DE ACEITE)', '2024-05-21', '2024-05-21 16:58:23', 14),
(5, 129, 'SERVICIO DE 10,000 KM ', 'AUTOSATAT DE MEXICO', 'CAMBIO DE ACEITE, FILTRO DE ACEITE, REALIZAR TEST, SHAMPOO', '2024-05-31', '2024-06-03 12:14:31', 14),
(6, 100, 'SERVICIO DE 30, 000KM/6 MESES GARANTIA ', 'CACHO MOTORS', 'CAMBIO DE ACEITE, FILTRO DE ACEITE, SHAMPOO, GASKET', '2024-06-03', '2024-06-03 18:03:36', 14),
(7, 69, 'SERVICIO DE 90,000 KM', 'TOYOTA SATELITE', 'SERVICIO DE A/A CAMBIO DE BUJIAS (PAQUETE 100,000 KM) ACEITE DE MOTOR, FILTRO DE ACEITE, ADITIVO COSTO $ 8233', '2024-06-14', '2024-07-04 16:51:44', 14),
(8, 262, 'Servicio de 2,500 km', 'Agencia FAW Toluca', 'Unidad se ingresa a servicio en FAW Toluca 2,500 km, por tiempo (3 meses), se menciona ciertas fallas, alineación, se revoluciona la unidad costo del servicio $4135', '2024-07-25', '2024-11-27 17:50:03', 14),
(9, 263, 'SERVICIO DE 2500 KM ', 'ELAM TOLUCA ', 'SE REALIZA CAMBIO DE ACEITE DE MOTOR,TRANSMISION,FILTROS DE ACEITE $ 4274.60', '2024-07-29', '2024-08-05 10:53:13', 14),
(10, 264, 'servicio 2500 km ', 'FAW ELAM TOLUCA', 'SE REALIZA CAMBIO DE ACEITE DE MOTOR, CAMBIO DE TRANSMISION,FILTROS DE ACEITE $4274.60', '2024-08-06', '2024-08-06 17:19:56', 14),
(11, 266, 'SERVICIO DE 2500 KM ', 'FAW ELAM TOLUCA ', 'SE CAMBIA ACEITE MOTOR, SE CAMBIA ACEITE DE TRANSMISION, FILTROS DE ACEITE $ 4274.60', '2024-08-02', '2024-08-07 10:21:58', 14),
(12, 130, 'servicio de 12,000 km o 1 año', 'excelencia del norte', 'ingresa a servicio por tiempo de 12,000 km  \r\nKM:3140', '2024-08-26', '2024-08-27 16:54:36', 14),
(13, 261, 'SERVICIO DE 2500 KM ', 'FAW Toluca ', 'se realiza servicio de 2500 km se lleva FAW Toluca, costo $4274.60 ', '2024-08-30', '2024-09-09 17:22:37', 14),
(14, 216, 'servioico de embrague', 'master one ', 'se cambia clutch, por desgaste con km 64720 ', '2024-08-30', '2024-10-18 10:09:14', 14),
(15, 61, 'SERVICIO DE 190,000 KM ', 'FRANSANCO', 'SE REALIZO SERVICIO PREVENTIVO, CAMBIO DE ACEITE,FILTRO DE ACEITE FILTRO DE AIRE', '2024-11-22', '2024-11-22 17:00:06', 14),
(17, 34, 'SERVICIO DE 90,000 KM', 'FRASANCO', 'SE CAMBIA ACEITE FILTRO DE ACEITE Y FILTRO DE AIRE', '2024-11-22', '2024-11-22 17:02:34', 14),
(18, 73, 'servicio de 70,000 km ', 'Cacho motors', 'servicio de 70,000- se cambia aceite semisintetico, shammpo-di element-gasket', '2024-11-22', '2024-11-25 10:19:00', 14);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `tb_vehiculos_solicitudes`
--

CREATE TABLE `tb_vehiculos_solicitudes` (
  `idSolicitud` int NOT NULL,
  `solicitante_id` int NOT NULL,
  `titulo` varchar(255) NOT NULL,
  `descripcion` text NOT NULL,
  `estado` int NOT NULL,
  `created_at` datetime NOT NULL,
  `observaciones` text NOT NULL,
  `urlFile` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `tb_vehiculos_tenencias`
--

CREATE TABLE `tb_vehiculos_tenencias` (
  `idTenencia` int NOT NULL,
  `tipo` varchar(100) NOT NULL,
  `anio` varchar(5) NOT NULL,
  `pago` decimal(15,2) NOT NULL,
  `fechaPago` date NOT NULL,
  `vehiculo_id` int NOT NULL,
  `usuario_id` int NOT NULL,
  `created_at` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Volcado de datos para la tabla `tb_vehiculos_tenencias`
--

INSERT INTO `tb_vehiculos_tenencias` (`idTenencia`, `tipo`, `anio`, `pago`, `fechaPago`, `vehiculo_id`, `usuario_id`, `created_at`) VALUES
(1, 'Pago de Tenencia', '2024', '6122.00', '2024-04-01', 4, 14, '2024-04-01 13:52:24'),
(2, 'Pago de Tenencia', '2024', '6902.00', '2024-04-01', 14, 14, '2024-04-01 13:52:59'),
(3, 'Pago de Tenencia', '2024', '4172.00', '2024-04-01', 16, 14, '2024-04-01 13:53:24'),
(4, 'Pago de Tenencia', '2024', '1465.00', '2024-04-01', 23, 14, '2024-04-01 13:38:48'),
(5, 'Pago de Tenencia', '2024', '6246.00', '2024-04-01', 66, 14, '2024-04-01 13:29:05'),
(6, 'Pago de Tenencia', '2024', '3000.00', '2024-04-01', 74, 14, '2024-04-01 13:34:23'),
(7, 'Pago de Tenencia', '2024', '2792.00', '2024-04-01', 75, 14, '2024-04-01 13:37:36'),
(8, 'Pago de Tenencia', '2019', '6340.00', '2024-08-13', 76, 26, '2024-03-12 14:53:03'),
(9, 'Pago de Tenencia', '2019', '11202.00', '2024-08-07', 77, 26, '2024-03-12 14:53:53'),
(10, 'Pago de Tenencia', '2024', '2792.00', '2024-04-01', 83, 14, '2024-04-01 13:38:13'),
(11, 'Pago de Tenencia', '2024', '2792.00', '2024-04-01', 85, 14, '2024-04-01 13:35:38'),
(12, 'Pago de Tenencia', '2024', '2792.00', '2024-04-01', 93, 14, '2024-04-01 13:35:07'),
(13, 'Pago de Tenencia', '2024', '2792.00', '2024-04-01', 94, 14, '2024-04-01 13:36:05'),
(14, 'Pago de Tenencia', '2024', '2792.00', '2024-04-01', 95, 14, '2024-04-01 13:37:07'),
(15, 'Pago de Tenencia', '2022 ', '11564.00', '2024-04-01', 96, 14, '2024-04-02 10:01:24'),
(16, 'Pago de Tenencia', '2024', '3782.00', '2024-04-01', 132, 14, '2024-04-01 13:45:25'),
(17, 'Pago de Tenencia', '2024', '4474.00', '2024-04-01', 145, 14, '2024-04-01 13:56:57'),
(18, 'Pago de Tenencia', '2024', '1568.00', '2024-04-01', 152, 14, '2024-04-01 13:39:21'),
(19, 'Pago de Tenencia', '2024', '5077.00', '2024-04-01', 210, 14, '2024-04-01 13:33:30'),
(20, 'Pago de Tenencia', '2024', '6396.00', '2024-04-01', 243, 14, '2024-04-01 13:42:09'),
(21, 'Pago de Tenencia', '2024', '5053.00', '2024-04-01', 244, 14, '2024-04-01 13:32:45'),
(22, 'Pago de Tenencia', '2024', '6033.00', '2024-04-01', 245, 14, '2024-04-01 13:54:01'),
(23, 'Pago de Tenencia', '2024', '6033.00', '2024-04-01', 246, 14, '2024-04-01 13:46:22'),
(24, 'Pago de Tenencia', '2024', '6033.00', '2024-04-01', 247, 14, '2024-04-01 13:51:04'),
(25, 'Pago de Tenencia', '2024', '6033.00', '2024-04-01', 248, 14, '2024-04-01 13:55:07'),
(26, 'Pago de Tenencia', '2024', '6033.00', '2024-04-01', 249, 14, '2024-04-01 13:54:32'),
(27, 'Pago de Tenencia', '2024', '6033.00', '2024-04-01', 250, 14, '2024-04-01 13:55:34'),
(28, 'Pago de Tenencia', '2024', '6033.00', '2024-04-01', 251, 14, '2024-04-01 13:51:49'),
(29, 'Pago de Tenencia', '2024', '6033.00', '2024-04-01', 252, 14, '2024-04-01 13:41:24'),
(30, 'Pago de Tenencia', '2024', '6033.00', '2024-04-01', 253, 14, '2024-04-01 13:40:52'),
(31, 'Pago de Tenencia', '2024', '5741.00', '2024-04-01', 254, 14, '2024-04-01 13:40:15'),
(32, 'Pago de Tenencia', '2024', '5741.00', '2024-04-01', 255, 14, '2024-04-02 10:13:30'),
(33, 'Pago de Tenencia', '2024', '5741.00', '2024-03-12', 256, 14, '2024-04-01 14:31:37'),
(34, 'Pago de Tenencia', '2024', '5741.00', '2024-04-01', 257, 14, '2024-04-02 10:17:36'),
(35, 'Pago de Tenencia', '2024', '4765.00', '2024-04-01', 157, 14, '2024-04-01 13:58:18'),
(36, 'Pago de Tenencia', '2024', '5486.00', '2024-04-01', 59, 14, '2024-04-01 14:00:00'),
(37, 'Pago de Tenencia', '2024', '1114.00', '2024-04-01', 63, 14, '2024-04-01 14:00:48'),
(38, 'Pago de Tenencia', '2024', '3307.00', '2024-04-01', 64, 14, '2024-04-01 14:01:35'),
(39, 'Pago de Tenencia', '2024', '2532.00', '2024-04-01', 67, 14, '2024-04-01 14:02:29'),
(40, 'Pago de Tenencia', '2024', '4741.00', '2024-04-01', 233, 14, '2024-04-01 14:03:34'),
(41, 'Pago de Tenencia', '2024', '3894.00', '2024-04-01', 234, 14, '2024-04-01 14:04:47'),
(42, 'Pago de Tenencia', '2024', '5945.00', '2024-04-01', 224, 14, '2024-04-01 14:05:44'),
(43, 'Pago de Tenencia', '2024', '4493.00', '2024-04-01', 159, 14, '2024-04-01 14:06:38'),
(44, 'Pago de Tenencia', '2024', '4267.00', '2024-04-01', 221, 14, '2024-04-01 14:07:25'),
(45, 'Pago de Tenencia', '2024', '4612.00', '2024-04-01', 230, 14, '2024-04-01 14:08:24'),
(46, 'Pago de Tenencia', '2024', '3894.00', '2024-04-01', 229, 14, '2024-04-01 14:09:42'),
(47, 'Pago de Tenencia', '2024', '4874.00', '2024-04-01', 215, 14, '2024-04-01 14:10:28'),
(48, 'Pago de Tenencia', '2024', '4810.00', '2024-04-01', 218, 14, '2024-04-01 14:11:18'),
(49, 'Pago de Tenencia', '2024', '8844.00', '2024-04-01', 70, 14, '2024-04-01 14:12:11'),
(50, 'Pago de Tenencia', '2024', '5051.00', '2024-04-01', 62, 14, '2024-04-01 14:12:52'),
(51, 'Pago de Tenencia', '2024', '1043.00', '2024-04-01', 69, 14, '2024-04-01 14:13:37'),
(52, 'Pago de Tenencia', '2024', '1043.00', '2024-04-01', 109, 14, '2024-04-01 14:14:40'),
(53, 'Pago de Tenencia', '2024', '1758.00', '2024-04-01', 114, 14, '2024-04-01 14:15:32'),
(54, 'Pago de Tenencia', '2024', '1043.00', '2024-04-01', 150, 14, '2024-04-01 14:16:48'),
(55, 'Pago de Tenencia', '2024', '1758.00', '2024-04-01', 116, 14, '2024-04-01 14:17:44'),
(56, 'Pago de Tenencia', '2024', '7501.00', '2024-04-01', 155, 14, '2024-04-01 14:18:32'),
(57, 'Pago de Tenencia', '2024', '6153.00', '2024-04-01', 211, 14, '2024-04-01 14:19:28'),
(58, 'Pago de Tenencia', '2024', '7501.00', '2024-03-06', 48, 14, '2024-04-01 14:33:20'),
(59, 'Pago de Tenencia', '2024', '6403.00', '2024-04-01', 31, 14, '2024-04-02 09:45:04'),
(60, 'Pago de Tenencia', '2024', '6403.00', '2024-04-01', 32, 14, '2024-04-02 09:45:51'),
(61, 'Pago de Tenencia', '2024', '1445.00', '2024-04-01', 33, 14, '2024-04-02 09:46:32'),
(62, 'Pago de Tenencia', '2024', '4300.00', '2024-04-01', 34, 14, '2024-04-02 09:47:18'),
(63, 'Pago de Tenencia', '2024', '5322.00', '2024-04-01', 45, 14, '2024-04-02 09:47:52'),
(64, 'Pago de Tenencia', '2024', '4305.00', '2024-04-01', 46, 14, '2024-04-02 09:48:24'),
(65, 'Pago de Tenencia', '2024', '4821.00', '2024-04-01', 47, 14, '2024-04-02 09:48:55'),
(66, 'Pago de Tenencia', '2024', '4367.00', '2024-04-01', 50, 14, '2024-04-02 09:49:33'),
(67, 'Pago de Tenencia', '2024', '4810.00', '2024-04-01', 51, 14, '2024-04-02 09:50:09'),
(68, 'Pago de Tenencia', '2024', '6122.00', '2024-04-01', 55, 14, '2024-04-02 09:50:41'),
(69, 'Pago de Tenencia', '2024', '4952.00', '2024-04-01', 56, 14, '2024-04-02 09:51:17'),
(70, 'Pago de Tenencia', '2024', '6403.00', '2024-04-01', 57, 14, '2024-04-02 09:52:25'),
(71, 'Pago de Tenencia', '2024', '7058.00', '2024-04-01', 58, 14, '2024-04-02 09:52:58'),
(72, 'Pago de Tenencia', '2024', '4874.00', '2024-04-01', 60, 14, '2024-04-02 09:53:30'),
(73, 'Pago de Tenencia', '2024', '1055.00', '2024-04-01', 61, 14, '2024-04-02 09:54:00'),
(74, 'Pago de Tenencia', '2024', '26300.00', '2024-04-01', 65, 14, '2024-04-02 09:54:45'),
(75, 'Pago de Tenencia', '2024', '1043.00', '2024-04-01', 71, 14, '2024-04-02 09:55:37'),
(76, 'Pago de Tenencia', '2024', '4608.00', '2024-04-01', 73, 14, '2024-04-02 09:56:18'),
(77, 'Pago de Tenencia', '2024', '1553.00', '2024-04-01', 86, 14, '2024-04-02 09:57:18'),
(78, 'Pago de Tenencia', '2024', '1043.00', '2024-04-01', 87, 14, '2024-04-02 09:58:13'),
(79, 'Pago de Tenencia', '2024', '1043.00', '2024-04-01', 88, 14, '2024-04-02 09:58:47'),
(80, 'Pago de Tenencia', '2024', '1553.00', '2024-04-01', 90, 14, '2024-04-02 09:59:26'),
(81, 'Pago de Tenencia', '2024', '4470.00', '2024-04-01', 92, 14, '2024-04-02 10:00:06'),
(82, 'Pago de Tenencia', '2024', '4608.00', '2024-04-01', 99, 14, '2024-04-02 10:02:24'),
(83, 'Pago de Tenencia', '2024', '1043.00', '2024-04-01', 100, 14, '2024-04-02 10:03:13'),
(84, 'Pago de Tenencia', '2024', '16946.00', '2024-04-01', 101, 14, '2024-04-02 10:03:58'),
(85, 'Pago de Tenencia', '2024', '1758.00', '2024-04-01', 110, 14, '2024-04-02 10:04:32'),
(86, 'Pago de Tenencia', '2024', '12210.00', '2024-04-01', 111, 14, '2024-04-02 10:05:10'),
(87, 'Pago de Tenencia', '2024', '1456.00', '2024-04-01', 130, 14, '2024-04-02 10:06:31'),
(88, 'Pago de Tenencia', '2024', '4126.00', '2024-04-01', 231, 14, '2024-04-02 10:08:03'),
(89, 'Pago de Tenencia', '2024', '4874.00', '2024-04-01', 216, 14, '2024-04-02 10:09:46'),
(90, 'Pago de Tenencia', '2024', '4874.00', '2024-04-01', 217, 14, '2024-04-02 10:10:20'),
(91, 'Pago de Tenencia', '2024', '4765.00', '2024-04-01', 156, 14, '2024-04-02 10:11:42'),
(92, 'Pago de Tenencia', '2024', '4493.00', '2024-04-01', 161, 14, '2024-04-02 10:12:28'),
(93, 'Pago de Tenencia', '2024', '11626.00', '2024-04-09', 49, 14, '2024-04-10 16:52:27'),
(94, 'Pago de Tenencia', '2024', '1602.00', '2024-04-09', 72, 14, '2024-04-10 16:53:02'),
(95, 'Pago de Tenencia', '2024', '6616.00', '2024-04-09', 76, 14, '2024-04-10 16:53:39'),
(96, 'Pago de Tenencia', '2024', '11728.00', '2024-04-09', 77, 14, '2024-04-10 16:54:09');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `tb_vehiculos_tramites`
--

CREATE TABLE `tb_vehiculos_tramites` (
  `idTramiteVehiculo` int NOT NULL,
  `vehiculo_id` int NOT NULL,
  `tramite_id` int NOT NULL,
  `estado` int NOT NULL,
  `fecha` date NOT NULL,
  `observaciones` text NOT NULL,
  `created_at` datetime NOT NULL,
  `usuario_id` int NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Volcado de datos para la tabla `tb_vehiculos_tramites`
--

INSERT INTO `tb_vehiculos_tramites` (`idTramiteVehiculo`, `vehiculo_id`, `tramite_id`, `estado`, `fecha`, `observaciones`, `created_at`, `usuario_id`) VALUES
(1, 214, 2, 1, '2024-06-05', 'Placa anterior LB86337, TC anterior CAC 10736560', '2024-06-06 11:15:56', 14),
(2, 94, 6, 1, '2024-07-17', 'Placas anteriores W71HW costo $755', '2024-07-17 16:37:13', 14),
(3, 251, 4, 1, '2024-08-05', 'Placa anterior LC83271 ', '2024-08-05 15:10:23', 14),
(4, 236, 2, 1, '2024-06-02', 'Sin placa anterior\r\nTC pendiente hasta aviso de Sria de Finanzas entregada 14 de Agosto del 2024', '2024-08-16 11:48:57', 14),
(5, 219, 2, 1, '2024-06-13', 'Sin placa anterior\r\nTC pendiente hasta aviso de Sria de Finanzas entregada 14 de Agosto del 2024', '2024-08-16 12:00:18', 14),
(6, 240, 2, 1, '2024-06-13', 'Sin placa anterior\r\nTC pendiente hasta aviso de Sria de Finanzas entregada 14 de Agosto del 2024', '2024-08-16 12:01:53', 14),
(7, 213, 2, 1, '2024-06-13', 'Sin placa anterior\r\nTC pendiente hasta aviso de Sria de Finanzas entregada 14 de Agosto del 2024', '2024-08-16 12:03:35', 14),
(8, 254, 6, 1, '2024-09-25', 'Placas anteriores LC83213 ', '2024-09-30 10:36:24', 14),
(9, 257, 6, 1, '2024-09-25', 'Placas anteriores LC83222', '2024-09-30 10:37:06', 14),
(10, 96, 6, 1, '2024-10-16', 'Renovación de placas, placa anterior W85HW ', '2024-10-22 12:08:35', 26),
(11, 74, 6, 1, '2024-10-16', 'Placas anteriores NGH1258', '2024-10-22 12:16:52', 26),
(12, 93, 6, 1, '2024-10-24', 'Placa anterior W80HW', '2024-10-24 12:19:31', 26),
(13, 83, 6, 1, '2024-10-23', 'Placa anterior W50HX', '2024-10-24 12:21:11', 26),
(14, 85, 6, 1, '2024-10-28', 'RENOVACION DE PLACAS, PLACA ANTERIOR 43BYS9', '2024-10-29 10:25:24', 26),
(15, 48, 5, 1, '2024-03-20', 'ALTA DE PLACAS PLACAS ANTERIOR 6HU4171', '2024-10-29 10:37:02', 26),
(16, 248, 6, 1, '2024-10-30', 'PLACA ANTERIOR LD12237', '2024-10-30 17:09:05', 26),
(17, 4, 7, 1, '2024-11-28', 'Autorizado por Presidencia ya que la unidad se encuentra descompuesta en Patio de Coyotepec', '2024-11-29 11:27:15', 14),
(18, 14, 2, 1, '2024-11-05', 'unidad emplacada', '2024-12-02 16:58:51', 26),
(19, 75, 2, 1, '2024-12-02', 'cambio de placas ', '2024-12-02 17:26:10', 26),
(20, 23, 2, 1, '2024-12-02', 'CAMBIO DE PLACAS', '2024-12-02 17:35:31', 26);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `tb_vehiculos_verificaciones`
--

CREATE TABLE `tb_vehiculos_verificaciones` (
  `idVerificacion` int NOT NULL,
  `vehiculo_id` int NOT NULL,
  `idVerif` varchar(100) NOT NULL,
  `tipoVerificacion` int NOT NULL,
  `verificacion` varchar(20) NOT NULL,
  `estatus` int NOT NULL,
  `anio` varchar(10) NOT NULL,
  `fecha` date NOT NULL,
  `observaciones` text NOT NULL,
  `created_at` datetime NOT NULL,
  `usuario_id` int NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Volcado de datos para la tabla `tb_vehiculos_verificaciones`
--

INSERT INTO `tb_vehiculos_verificaciones` (`idVerificacion`, `vehiculo_id`, `idVerif`, `tipoVerificacion`, `verificacion`, `estatus`, `anio`, `fecha`, `observaciones`, `created_at`, `usuario_id`) VALUES
(1, 4, '0', 1, 'MAY JUN', 0, '2024', '2023-12-31', 'A tiempo', '2024-05-03 16:31:58', 14),
(2, 14, '0', 1, 'MAY JUN', 0, '2024', '2023-12-31', 'A tiempo', '2024-05-03 09:01:32', 26),
(3, 16, '0', 1, 'MAY JUN', 1, '2024', '2024-06-03', 'A tiempo', '2024-08-16 12:28:10', 14),
(4, 31, '5', 1, 'ENE FEB', 0, '2024', '2023-12-31', 'Descompuesto desde 2022, ya funciona durante inventario Feb 2024 hay que pagar multa si se desea verificar', '2024-03-11 17:33:29', 14),
(5, 32, '3', 1, 'MAR ABR', 0, '2024', '2023-12-31', 'Descompuesto desde 2021 y sigue descompuesto durante inventario Feb 2024', '2024-03-11 17:32:38', 14),
(6, 33, '8', 1, 'FEB MAR', 1, '2024', '2024-03-13', 'VERIFICADO', '2024-06-07 13:46:58', 26),
(7, 34, '6', 1, 'ENE FEB', 1, '2024', '2024-01-23', 'A tiempo', '2024-03-11 17:36:18', 14),
(8, 45, '8', 1, 'FEB MAR', 1, '2024', '2024-03-02', 'VERIFICACION REALIZADA PRIMER SEMESTRE 2024', '2024-05-02 14:50:42', 26),
(9, 46, '5', 1, 'ENE FEB', 1, '2024', '2024-01-10', 'A tiempo', '2024-03-11 17:39:12', 14),
(10, 47, '1', 1, 'ABR MAY', 1, '2024', '2023-12-31', 'A tiempo', '2024-06-07 14:05:05', 26),
(11, 48, '1', 1, 'ABR MAY', 2, '2024', '2023-12-31', 'Remolque no aplica', '2024-05-03 16:41:11', 26),
(12, 23, '8', 1, 'FEB MAR', 2, '2024', '2023-12-31', 'Motocicleta No aplica', '2024-05-03 16:43:26', 26),
(13, 49, '1', 1, 'ABR MAY', 2, '2024', '2023-12-31', 'No aplica es remolque', '2024-05-03 16:41:26', 26),
(14, 50, '1', 1, 'ABR MAY', 1, '2020', '0023-12-31', 'Pick Up D-CAB', '2024-06-07 14:06:25', 26),
(15, 51, '9', 1, 'MAY JUN', 1, '2024', '2024-05-14', 'Camioneta F 350', '2024-05-14 12:22:52', 26),
(16, 52, '6', 1, 'ENE FEB', 2, '1997', '2023-12-31', 'No aplica remolque', '2024-05-03 16:41:47', 26),
(17, 55, '2', 1, 'ABR MAY', 0, '2023', '2023-12-23', 'Camioneta FORD F-550 Descompuesta de transmisión en el relleno de Tlalnepantla', '2024-08-22 13:03:34', 14),
(18, 56, '7', 1, 'FEB MAR', 1, '2024', '2024-02-12', 'Verificado 12 Feb 2024', '2024-06-11 17:04:34', 26),
(19, 57, '6', 1, 'ENE FEB', 1, '2024', '2024-02-06', 'Verificado 6 de Feb 2024\r\n', '2024-06-11 17:05:15', 26),
(20, 58, '4', 1, 'MAR ABR', 1, '2024', '2024-04-08', 'VERIFICACION PRIMER SEMESTRE 2024', '2024-06-11 17:05:29', 26),
(21, 60, '5', 1, 'ENE FEB', 1, '2024', '2024-01-23', 'Verificada 23 de enero de 2024\r\n', '2024-06-11 17:05:44', 26),
(22, 61, '3', 1, 'MAR ABR', 1, '2024', '2024-03-06', 'Camioneta 2016', '2024-06-11 17:06:09', 26),
(23, 62, '5', 1, 'ENE FEB', 1, '2024', '2024-02-13', 'Verificada 13 de febrero', '2024-06-11 17:06:22', 26),
(24, 63, '6', 1, 'ENE FEB', 1, '2024', '2024-02-28', 'Verificada 28 de Febrero del 2024', '2024-06-11 17:08:23', 26),
(25, 64, '1', 1, 'ABR MAY', 1, '2024', '2024-04-05', 'JETTA MK VI 4 PTAS', '2024-06-11 17:08:38', 26),
(26, 65, '3', 1, 'MAR ABR', 0, '2024', '2023-12-31', 'En CancÃºn, no se verifico en 2021', '2024-06-11 17:04:19', 26),
(27, 66, '9', 1, 'MAY JUN', 1, '2024', '2024-05-13', 'Edge 4 ptas. importado', '2024-05-13 12:29:43', 26),
(28, 67, '4', 1, 'MAR ABR', 1, '2024', '2024-03-05', 'Attitude SE MT', '2024-06-11 17:08:50', 26),
(29, 68, '2', 1, 'ABR MAY', 0, '2016', '2023-12-31', 'En Cancún no se puede Verificar ni hacer cambio de placas\r\n', '2024-08-22 12:50:31', 14),
(30, 69, '2', 1, 'ABR MAY', 3, '2024', '2024-01-01', 'Excento hasta 2029\r\n', '2024-06-11 17:09:32', 26),
(31, 70, '6', 1, 'ENE FEB', 1, '2024', '2023-09-29', 'Calcomanía 00 vencimiento febrero 2026\r\n', '2024-08-22 13:04:27', 14),
(32, 71, '5', 1, 'ENE FEB', 1, '2024', '2024-01-01', 'Hibrido exento\r\n', '2024-08-22 13:04:42', 14),
(33, 73, '8', 1, 'FEB MAR', 1, '2024', '2024-03-26', 'Hilux doble cabina 4 puertas', '2024-06-11 17:10:17', 26),
(34, 74, '8', 1, 'FEB MAR', 1, '2024', '2024-03-02', 'VERIFICACION REALIZADA PRIMER SEMESTRE 2024 ', '2024-06-11 17:10:56', 26),
(35, 75, '8', 1, 'FEB MAR', 2, '2019', '2023-12-31', 'Motocicleta\r\n', '2024-05-07 09:08:46', 26),
(36, 76, '5', 1, 'ENE FEB', 2, '2019', '2023-12-31', 'Motocicleta', '2024-05-07 09:09:02', 26),
(37, 77, '1', 1, 'ABR MAY', 2, '2019', '2023-12-31', 'Motocicleta', '2024-05-07 09:09:26', 26),
(38, 81, '3', 1, 'MAR ABR', 2, '1946', '2023-12-31', 'AUTO CLASICO \r\n', '2024-05-07 09:10:28', 26),
(39, 83, '0', 1, 'MAY JUN', 2, '2019', '2023-12-31', 'Motocicleta\r\n', '2024-05-07 09:10:05', 26),
(41, 86, '0', 1, 'MAY JUN', 1, '2024', '2024-01-01', 'Verificado Enero 2024', '2024-06-11 17:11:15', 26),
(42, 87, '2', 1, 'ABR MAY', 3, '2021', '2024-01-01', 'Hibrido exentó\r\n', '2024-08-22 13:15:38', 14),
(43, 88, '8', 1, 'FEB MAR', 3, '2021', '2024-01-01', 'Hibrido exentó hasta 11 Ago. 2029\r\n', '2024-08-22 13:15:22', 14),
(44, 90, '8', 1, 'FEB MAR', 1, '2021', '2023-02-06', 'Verificado 6 de Feb 2024\r\n', '2024-03-12 10:46:04', 26),
(45, 92, '4', 1, 'MAR ABR', 1, '2021', '2024-04-29', 'Hilux pick up D cabina\r\n', '2024-05-02 15:08:33', 26),
(46, 93, '0', 1, 'MAY JUN', 2, '2019', '2023-12-31', 'Motocicleta', '2024-05-07 09:13:15', 26),
(47, 94, '1', 1, 'ABR MAY', 2, '2019', '2023-12-31', 'Motocicleta', '2024-05-07 09:13:26', 26),
(48, 95, '3', 1, 'MAR ABR', 2, '2019', '2023-12-31', 'Motocicleta', '2024-05-07 09:13:38', 26),
(49, 96, '5', 1, 'ENE FEB', 2, '2019', '2023-12-31', 'Motocicleta', '2024-05-07 09:13:57', 26),
(50, 99, '9', 1, 'MAY JUN', 0, '2022', '2023-12-31', 'Hilux doble cabina 4 ptas', '2024-03-12 11:39:37', 26),
(51, 100, '1', 1, 'ABR MAY', 3, '2022', '2024-01-01', 'Exentó hasta 2030\r\n', '2024-08-22 13:16:31', 14),
(52, 101, '2', 1, 'ABR MAY', 1, '2024', '2024-04-08', 'HIACE PASAJEROS\r\n', '2024-06-11 17:30:13', 26),
(53, 102, '3', 1, 'MAR ABR', 0, '2023', '2023-12-31', 'X6 xDrive40i M Sport (Automático)\r\n', '2024-08-22 13:16:45', 14),
(54, 110, '7', 1, 'FEB MAR', 1, '2024', '2024-03-21', 'RAM 1500 CREW CAB 4X4\r\n', '2024-06-11 17:30:29', 26),
(55, 111, '8', 1, 'FEB MAR', 1, '2024', '2024-01-24', 'Verificado 24 enero 2024\r\n', '2024-06-11 17:30:42', 26),
(56, 113, '7', 1, 'FEB MAR', 0, '2020', '2023-12-31', 'PLACAS DE CHIHUAHUA', '2024-05-03 09:15:02', 26),
(57, 114, '8', 1, 'FEB MAR', 1, '2024', '2024-03-21', 'RAM 1500 CREW CAB 4X4\r\n', '2024-06-11 17:30:57', 26),
(58, 115, '6', 1, 'ENE FEB', 0, '2020', '2023-12-31', 'PLACAS DE CHIUAHUA EN ONSERVACION \r\n', '2024-05-02 17:59:27', 26),
(59, 116, '3', 1, 'MAR ABR', 1, '2024', '2024-03-30', 'RAM 1500 CREW CAB 4X4\r\n', '2024-06-11 17:31:21', 26),
(60, 117, '1', 1, 'ABR MAY', 0, '2020', '2023-12-31', 'Charger policía V6\r\n', '2024-08-22 13:17:15', 14),
(61, 118, '3', 1, 'MAR ABR', 0, '2020', '2023-12-31', 'PLACAS DE CHIHUAHUA ', '2024-05-03 09:17:53', 26),
(62, 119, '9', 1, 'MAY JUN', 0, '2020', '2023-12-31', 'Charger policí­a V6\r\n', '2024-08-22 13:17:35', 14),
(63, 120, '7', 1, 'FEB MAR', 0, '2020', '2023-12-31', 'PLACAS DE CHIHUAHUA', '2024-05-02 18:00:27', 26),
(64, 122, '9', 1, 'MAY JUN', 0, '2020', '2023-12-31', 'PLACAS DE CHIUAHUA\r\n', '2024-05-02 18:02:50', 26),
(65, 124, '3', 1, 'MAR ABR', 0, '2020', '2023-12-31', 'PLACAS DE CHIHUAHUA ', '2024-05-02 18:01:50', 26),
(66, 129, '7', 1, 'FEB MAR', 1, '2024', '2024-02-09', 'Verificada 9 de febrero de 2024\r\n', '2024-06-11 17:35:02', 26),
(67, 130, '4', 1, 'MAR ABR', 3, '2023', '2023-09-14', 'VENCIMIENTO 14 DE SEPTIEMBRE DE 2025 \r\n', '2024-05-07 09:20:40', 26),
(68, 132, '7', 1, 'FEB MAR', 0, '2005', '2023-12-31', 'SPRINTER CHASIS CTRL DELANTERO\r\n', '2024-03-12 12:08:58', 26),
(69, 133, '1', 1, 'ABR MAY', 1, '2024', '2024-05-11', 'SE VERIFICA EN MORELOS \r\n', '2024-05-13 12:29:18', 26),
(70, 145, '1', 1, 'ABR MAY', 0, '2019', '2023-12-31', 'No tiene verificaciones anteriores', '2024-03-12 12:11:01', 26),
(71, 147, '4', 1, 'MAR ABR', 2, '1985', '2024-01-01', 'Clásico no se verifica\r\n', '2024-08-22 13:18:00', 14),
(72, 152, '3', 1, 'MAR ABR', 0, '2019', '2023-12-31', 'Ambulancia\r\n', '2024-03-12 12:20:40', 26),
(73, 155, '5', 1, 'ENE FEB', 2, '2020', '2023-12-31', 'Caja Transferencia No Aplica\r\n', '2024-05-03 16:43:01', 26),
(74, 157, '6', 1, 'ENE FEB', 0, '2019', '2023-12-31', 'Vencida al recibir reporte de la unidad\r\n', '2024-03-12 12:24:33', 26),
(75, 161, '5', 1, 'ENE FEB', 1, '2024', '2024-01-23', 'Verificado 23 de Enero de 2024\r\n', '2024-06-11 17:35:19', 26),
(76, 59, '8', 1, 'FEB MAR', 0, '2018', '2023-12-31', 'Vencida al recibir reporte de la unidad. Descompuesto en inventario Feb 2024\r\n', '2024-03-12 12:26:22', 26),
(77, 156, '4', 1, 'MAR ABR', 0, '2019', '2023-12-31', 'Camioneta\r\n', '2024-03-12 12:27:14', 26),
(78, 159, '5', 1, 'ENE FEB', 1, '2024', '2024-01-23', 'Verificado 23 de Enero de 2024\r\n', '2024-06-11 17:35:46', 26),
(79, 210, '0', 1, 'MAY JUN', 0, '2019', '2023-12-31', 'Verifica Lumo\r\n', '2024-03-12 12:29:39', 26),
(80, 211, '6', 1, 'ENE FEB', 1, '2024', '2024-02-07', 'Verificado 7 de Febrero 2024\r\n', '2024-06-11 17:36:07', 26),
(81, 214, '7', 1, 'FEB MAR', 0, '2018', '2023-12-31', 'Vencida al recibir reporte de la unidad\r\n', '2024-03-12 12:34:10', 26),
(82, 215, '8', 1, 'FEB MAR', 0, '2020', '2023-12-31', 'Descompuesto para la verificación del 2a semestre del 2021. Descompuesta durante inventario Feb 2024. Hay que pagar multa EXTRAVIO PLACA DELANTERA\r\n', '2024-08-22 13:18:34', 14),
(83, 216, '1', 1, 'ABR MAY', 1, '2024', '2024-03-11', 'Verificada 11 de Marzo 2024\r\n', '2024-06-11 17:36:37', 26),
(84, 217, '2', 1, 'ABR MAY', 1, '2020', '2024-02-07', 'Verificado 7 de Febrero 2024\r\n', '2024-03-12 12:38:34', 26),
(85, 218, '0', 1, 'MAY JUN', 0, '2020', '2023-12-31', 'No la llevan a verificar porque no cuenta con placa delantera\r\n', '2024-03-12 12:39:53', 26),
(86, 221, '6', 1, 'ENE FEB', 0, '2016', '2023-12-31', 'Vencida al recibir reporte de la unidad\r\n', '2024-03-12 12:42:26', 26),
(87, 224, '4', 1, 'MAR ABR', 1, '2018', '2024-02-07', 'Verificado 7 Febrero 2024\r\n', '2024-03-12 12:46:45', 26),
(88, 229, '6', 1, 'ENE FEB', 0, '2014', '2023-12-31', 'Vencida al recibir reporte de la unidad\r\n', '2024-03-12 12:49:28', 26),
(89, 230, '1', 1, 'ABR MAY', 0, '2016', '2023-12-31', 'Camión descompuesto no se puede desplazar para llevarlo a verificar\r\n', '2024-08-22 13:22:01', 14),
(90, 231, '7', 1, 'FEB MAR', 1, '2015', '2024-03-23', 'Entregada de Pachuca 27 de Febrero/Foto de la papleta en archivo \r\n', '2024-05-02 15:03:44', 26),
(91, 233, '9', 1, 'MAY JUN', 0, '2017', '2023-12-31', 'No la llevan a verificar por que no cuenta con placa trasera\r\n', '2024-03-12 12:53:17', 26),
(92, 234, '8', 1, 'FEB MAR', 0, '2014', '2023-12-31', 'Vencida al recibir reporte de la unidad, En torno durante inventario febrero 2024\r\n', '2024-03-12 12:53:55', 26),
(93, 243, '5', 1, 'ENE FEB', 0, '2019', '2023-12-31', 'Verifica Lumo Se solicita a Alejandro papeletas x Whats 13 Feb 2023\r\n', '2024-03-12 12:57:45', 26),
(94, 244, '1', 1, 'ABR MAY', 0, '2019', '2023-12-31', 'Verifica Lumo\r\n', '2024-03-12 12:58:28', 26),
(95, 245, '1', 1, 'ABR MAY', 0, '2020', '2023-12-31', 'Verifica Lumo\r\n', '2024-03-12 12:59:16', 26),
(96, 246, '9', 1, 'MAY JUN', 0, '2020', '2023-12-31', 'Verifica Lumo\r\n', '2024-03-12 13:00:31', 26),
(97, 247, '0', 1, 'MAY JUN', 0, '2020', '2023-12-31', 'Verifica Lumo\r\n', '2024-03-12 13:03:10', 26),
(98, 248, '7', 1, 'FEB MAR', 0, '2020', '2023-12-31', 'Lumo no llevo a verificar, ultima verificación 2020\r\n', '2024-08-22 13:22:40', 14),
(99, 249, '5', 1, 'ENE FEB', 0, '2020', '2023-12-31', 'Verifica Lumo Se solicita a Alejandro papeletas x Whats 13 Feb 2023\r\n', '2024-03-12 13:06:10', 26),
(100, 250, '6', 1, 'ENE FEB', 0, '2020', '2023-12-31', 'Verifica Lumo Se solicita a Alejandro papeletas x Whats 13 Feb 2023\r\n', '2024-03-12 13:07:22', 26),
(101, 251, '1', 1, 'ABR MAY', 1, '2020', '2024-02-07', 'Verificado 7 Febrero 2024\r\n', '2024-03-12 13:08:15', 26),
(102, 253, '4', 1, 'MAR ABR', 0, '2020', '2023-12-31', 'Vencida al recibir reporte de la unidad\r\n', '2024-03-12 13:10:54', 26),
(103, 254, '3', 1, 'MAR ABR', 1, '2019', '2023-12-31', 'Vencida al recibir reporte de la unidad\r\n', '2024-03-12 13:12:37', 14),
(104, 255, '5', 1, 'ENE FEB', 0, '2019', '2023-12-31', 'Vencida al recibir reporte de la unidad\r\n', '2024-03-12 13:30:55', 14),
(105, 256, '8', 1, 'FEB MAR', 0, '2020', '2023-12-31', 'Vencida al recibir reporte de la unidad. En trámite cambio de propietario, (placa trasera perdida). Con el trámite se tienen 30 días a partir de que nos entreguen las placas nuevas\r\n', '2024-08-22 13:23:13', 14),
(109, 257, '2', 1, 'ABR MAY', 0, '0', '2023-12-31', 'No cuenta con TC y las verificaciones están vencidas desde la adquisición de la unidad\r\n', '2024-08-22 13:23:35', 14),
(110, 72, '1', 1, 'ABR MAY', 1, '2024', '2024-04-20', 'Unidad en FRASAN Colors', '2024-05-03 09:02:04', 14),
(111, 260, '1', 1, 'ABR MAY', 1, '2024', '2024-03-21', 'VERIFICADO PRIMER SEMESTRE 2024 ', '2024-05-03 09:02:32', 26),
(112, 150, '5', 1, 'ABR MAY', 0, '2024', '2023-12-31', 'SE LA LLEVAN A MC ALLEN 31  DE MAYO ', '2024-05-03 09:35:03', 26),
(113, 252, '1', 1, 'ABR MAY', 0, '2024', '2023-12-31', 'VERIFICA LUMO ', '2024-05-03 09:05:24', 26),
(114, 156, '4', 1, 'MAR ABR', 1, '2024', '2024-04-29', 'VERIFICADO PRIMER SEMESTRES 2024 ', '2024-05-03 09:06:01', 26),
(115, 258, '1', 1, 'ABR MAY', 1, '2024', '2024-04-02', 'UNIDAD VERIFICADA PRIMER SEMESTRE 2024 ', '2024-05-03 09:06:32', 26),
(116, 259, '1', 1, 'ABR MAY', 1, '2024', '2024-04-02', 'VERIFICADA PRIMER TRIMESTRE 2024 ', '2024-05-03 09:06:43', 26),
(117, 267, '5', 1, 'ENE FEB', 0, '2024', '2024-01-01', 'UNIDAD VENCIADA EN MORELOS PAGAR MULTA ', '2024-05-03 09:06:59', 26),
(118, 78, '5', 1, 'ENE FEB', 2, '2024', '2023-12-31', 'SIN PLACAS EN OBSERVACION ', '2024-05-03 09:33:04', 26),
(119, 79, '5', 1, 'ENE FEB', 2, '2024', '2024-12-31', 'SIN PLACAS EN OBSERVACION ', '2024-05-03 09:39:06', 26),
(120, 80, '1', 1, 'ABR MAY', 2, '2024', '2023-12-31', 'SIN PLACAS EN OBSERVACION ', '2024-05-03 09:40:28', 26),
(121, 82, '1', 1, 'ABR MAY', 2, '2024', '2023-12-31', 'SIN PLACAS EN OBSERVACION ', '2024-05-03 09:43:18', 26),
(122, 125, '9', 1, 'MAY JUN', 2, '2024', '2023-12-31', 'UNIDAD DE BAJA EN OBSERVACON ', '2024-05-03 09:46:13', 26),
(123, 127, '5', 1, 'ENE FEB', 0, '2024', '2023-12-31', 'UNIDAD NO ES DEL GRUPO ', '2024-05-03 10:00:23', 26),
(128, 242, '3', 1, 'MAR ABR', 0, '2024', '2023-12-31', 'VERIFICA LUMO, EN OBSERVACION ', '2024-05-03 10:21:18', 26),
(131, 261, '0', 1, 'MAY JUN', 1, '2024', '2024-05-30', '1a verificación con vencimiento 25 de Junio', '2024-08-22 13:26:19', 14),
(132, 262, '2', 1, 'ABR MAY', 1, '2024', '2024-05-30', '1a verificación con vencimiento 25 de Junio', '2024-08-22 13:26:31', 14),
(133, 263, '5', 1, 'ENE FEB', 1, '2024', '2024-05-30', '1a verificación con vencimiento 25 de Junio', '2024-08-22 13:26:47', 14),
(134, 264, '5', 1, 'ENE FEB', 1, '2024', '2024-05-30', '1a verificación con vencimiento 25 de junio', '2024-08-22 13:27:06', 14),
(135, 265, '9', 1, 'MAY JUN', 1, '2024', '2024-05-30', '1a verificación con vencimiento 25 de Junio', '2024-08-22 13:27:24', 14),
(136, 266, '8', 1, 'FEB MAR', 1, '2024', '2024-05-30', '1a verificación con vencimiento 25 de Junio', '2024-08-22 13:27:38', 14),
(137, 236, '2', 1, 'ABR MAY', 1, '2024', '2024-06-06', 'APROBADO, SIN COMENTARIOS ', '2024-06-17 13:12:46', 26),
(138, 99, '9', 1, 'MAY JUN', 1, '2024', '2024-06-15', 'SIN COMENTARIOS ', '2024-06-19 14:28:35', 26),
(139, 214, '7', 1, 'FEB MAR', 1, '2024', '2024-06-15', 'UNIDAD VERIFICADA ', '2024-06-28 18:05:22', 26),
(140, 267, '5', 2, 'JUL AGO', 1, '2024', '2024-07-01', 'UNIDAD VERIFICADA EN JULIO COSTO $ 708.00', '2024-07-04 14:39:53', 26),
(142, 219, '4', 1, 'MAR ABR', 1, '2024', '2024-07-11', 'VERIFICACION REALIZADA EN JULIO UNIDAD DADA DE ALTA EN JUNIO ', '2024-07-12 09:37:50', 26),
(143, 240, '9', 1, 'MAY JUN', 1, '2024', '2024-07-11', 'UNIDAD VERIFICADA ', '2024-07-12 09:45:37', 26),
(144, 228, '6', 2, 'JUL AGO', 1, '2024', '2024-07-12', 'SE DIERON DE ALTA PLACAS UNIDAD VERIFICADA EN JUNIO ', '2024-07-16 10:59:59', 26),
(145, 232, '6', 2, 'JUL AGO', 1, '2024', '2024-07-12', 'UNIDAD DE ALTA POR PLACAS, APENAS VERIFICO ', '2024-07-16 11:14:44', 26),
(146, 212, '9', 1, 'MAY JUN', 1, '2024', '2024-06-25', 'UNIDAD VERIFICADA, POR ALTA DE PLACAS', '2024-07-29 10:39:56', 26),
(147, 213, '1', 1, 'ABR MAY', 0, '2024', '2024-06-25', 'UNIDAD VERIFICADA POR ALTA DE PLACAS', '2024-07-29 10:42:05', 26),
(148, 263, '5', 2, 'JUL AGO', 1, '2024', '2024-08-02', 'UNIDAD VERIFICADA $550 ', '2024-08-08 12:31:04', 26),
(149, 264, '5', 2, 'JUL AGO', 1, '2024', '2024-08-14', 'Verificada por Control Vehicular ya que no esta asignada', '2024-08-16 12:39:55', 14),
(150, 45, '8', 2, 'AGO SEP', 1, '2024', '2024-08-17', 'A tiempo', '2024-08-19 10:26:22', 14),
(151, 57, '6', 2, 'JUL AGO', 1, '2024', '2024-08-19', 'UNIDAD VERIFICADA POR COLORS', '2024-08-20 09:33:37', 26),
(152, 58, '4', 2, 'SEP OCT', 1, '2024', '2024-09-13', 'unidad verificado sin contratiempos', '2024-09-13 17:34:30', 26),
(153, 259, '8', 2, 'AGO SEP', 1, '2024', '2024-09-19', 'se lleva a verificar a tres marías costo $711 ', '2024-09-19 17:30:31', 26),
(154, 58, '4', 2, 'SEP OCT', 1, '2024', '2024-09-13', 'verificado en septiembre, sin comentarios ', '2024-09-25 10:25:53', 26),
(155, 266, '8', 2, 'AGO SEP', 1, '2024', '2024-09-17', 'Se lleva a verificar, sin comentarios ', '2024-09-25 10:27:47', 26),
(156, 258, '3', 2, 'SEP OCT', 1, '2024', '2024-09-26', 'SE LLEVA A VERIFICAR A MORELOS ', '2024-09-27 12:47:50', 26),
(157, 74, '8', 2, 'AGO SEP', 1, '2024', '2024-09-30', 'UNIDAD VERIFICADA SIN CONTRATIEMPOS', '2024-09-30 16:34:49', 26),
(158, 33, '8', 2, 'AGO SEP', 1, '2024', '2024-09-29', 'UNIDAD VERIFICADA SIN CONTRATIEMPOS', '2024-10-02 12:49:02', 26),
(159, 114, '8', 2, 'AGO SEP', 1, '2024', '2024-09-30', 'UNIDAD VERIFICADA SIN CONTRATIEMPOS ', '2024-10-02 12:51:41', 26),
(160, 214, '7', 2, 'AGO SEP', 1, '2024', '2024-09-30', 'UNIDAD VERIFICADA SIN CONTRATIEMPOS', '2024-10-02 12:59:50', 26),
(161, 90, '8', 2, 'AGO SEP', 1, '2024', '2024-09-30', 'Asignada a Simon Vaca', '2024-10-09 09:53:48', 14),
(162, 114, '8', 2, 'AGO SEP', 1, '2024', '2024-09-30', 'Asignado a GIRSA Valle de México', '2024-10-09 09:57:16', 14),
(163, 214, '7', 2, 'AGO SEP', 1, '2024', '2024-09-30', 'Asignado a GIRSA Valle de México', '2024-10-09 09:59:17', 14),
(164, 111, '8', 2, 'AGO SEP', 1, '2024', '2024-09-30', 'Asignado a Constructora Pacifico', '2024-10-09 10:00:15', 14),
(165, 262, '2', 2, 'OCT NOV', 1, '2024', '2024-10-16', 'unidad verificada sin inconvenientes ', '2024-10-16 14:59:35', 26),
(166, 270, '1', 2, 'OCT NOV', 1, '2024', '2024-10-16', 'Se entrega papeleta original a Michael Cruz 16 de Oct 2024', '2024-10-16 16:58:54', 14),
(167, 47, '1', 2, 'OCT NOV', 1, '2024', '2024-11-07', 'UNIDAD VERIFICADA SIN CONTRATIEMPOS', '2024-11-07 16:45:32', 26),
(168, 256, '8', 2, 'AGO SEP', 1, '2024', '2024-11-14', 'unidad velicada sin contratiempos', '2024-11-14 16:38:55', 26),
(169, 240, '9', 2, 'NOV DIC', 1, '2024', '2024-11-14', 'unidad verificada', '2024-11-14 16:40:07', 26),
(170, 64, '1', 2, 'OCT NOV', 1, '2024', '2024-11-14', 'UNIDAD VERIFICADA SIN CONTRATIEMPOS', '2024-11-14 17:46:47', 26),
(171, 231, '7', 2, 'AGO SEP', 1, '2024', '2024-11-20', 'UNIDAD VERIFICADA', '2024-11-20 14:58:24', 26);

--
-- Índices para tablas volcadas
--

--
-- Indices de la tabla `log`
--
ALTER TABLE `log`
  ADD PRIMARY KEY (`idLog`);

--
-- Indices de la tabla `tb_areas_vehiculos`
--
ALTER TABLE `tb_areas_vehiculos`
  ADD PRIMARY KEY (`idAreaVehiculo`);

--
-- Indices de la tabla `tb_clases`
--
ALTER TABLE `tb_clases`
  ADD PRIMARY KEY (`idClase`);

--
-- Indices de la tabla `tb_combustibles`
--
ALTER TABLE `tb_combustibles`
  ADD PRIMARY KEY (`idCombustible`);

--
-- Indices de la tabla `tb_documentacion_vehiculos`
--
ALTER TABLE `tb_documentacion_vehiculos`
  ADD PRIMARY KEY (`idDocumentoVeh`);

--
-- Indices de la tabla `tb_incidencia_inventarios`
--
ALTER TABLE `tb_incidencia_inventarios`
  ADD PRIMARY KEY (`idIncidenciaInv`);

--
-- Indices de la tabla `tb_marca`
--
ALTER TABLE `tb_marca`
  ADD PRIMARY KEY (`idMarca`);

--
-- Indices de la tabla `tb_perfil_responsable`
--
ALTER TABLE `tb_perfil_responsable`
  ADD PRIMARY KEY (`idPerfil`);

--
-- Indices de la tabla `tb_propietarios`
--
ALTER TABLE `tb_propietarios`
  ADD PRIMARY KEY (`idPropietario`);

--
-- Indices de la tabla `tb_responsables`
--
ALTER TABLE `tb_responsables`
  ADD PRIMARY KEY (`idResponsable`);

--
-- Indices de la tabla `tb_seguros`
--
ALTER TABLE `tb_seguros`
  ADD PRIMARY KEY (`idSeguro`);

--
-- Indices de la tabla `tb_subMarca`
--
ALTER TABLE `tb_subMarca`
  ADD PRIMARY KEY (`idSubmarca`);

--
-- Indices de la tabla `tb_tipoTransporte`
--
ALTER TABLE `tb_tipoTransporte`
  ADD PRIMARY KEY (`idTransporte`);

--
-- Indices de la tabla `tb_tramites`
--
ALTER TABLE `tb_tramites`
  ADD PRIMARY KEY (`idTramite`);

--
-- Indices de la tabla `tb_vehiculos`
--
ALTER TABLE `tb_vehiculos`
  ADD PRIMARY KEY (`idVehiculo`);

--
-- Indices de la tabla `tb_vehiculos_seguros`
--
ALTER TABLE `tb_vehiculos_seguros`
  ADD PRIMARY KEY (`idSegVeh`);

--
-- Indices de la tabla `tb_vehiculos_servicios`
--
ALTER TABLE `tb_vehiculos_servicios`
  ADD PRIMARY KEY (`idVehiculoServicio`);

--
-- Indices de la tabla `tb_vehiculos_solicitudes`
--
ALTER TABLE `tb_vehiculos_solicitudes`
  ADD PRIMARY KEY (`idSolicitud`);

--
-- Indices de la tabla `tb_vehiculos_tenencias`
--
ALTER TABLE `tb_vehiculos_tenencias`
  ADD PRIMARY KEY (`idTenencia`);

--
-- Indices de la tabla `tb_vehiculos_tramites`
--
ALTER TABLE `tb_vehiculos_tramites`
  ADD PRIMARY KEY (`idTramiteVehiculo`);

--
-- Indices de la tabla `tb_vehiculos_verificaciones`
--
ALTER TABLE `tb_vehiculos_verificaciones`
  ADD PRIMARY KEY (`idVerificacion`);

--
-- AUTO_INCREMENT de las tablas volcadas
--

--
-- AUTO_INCREMENT de la tabla `log`
--
ALTER TABLE `log`
  MODIFY `idLog` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=348;

--
-- AUTO_INCREMENT de la tabla `tb_areas_vehiculos`
--
ALTER TABLE `tb_areas_vehiculos`
  MODIFY `idAreaVehiculo` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=14;

--
-- AUTO_INCREMENT de la tabla `tb_clases`
--
ALTER TABLE `tb_clases`
  MODIFY `idClase` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT de la tabla `tb_combustibles`
--
ALTER TABLE `tb_combustibles`
  MODIFY `idCombustible` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT de la tabla `tb_documentacion_vehiculos`
--
ALTER TABLE `tb_documentacion_vehiculos`
  MODIFY `idDocumentoVeh` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=272;

--
-- AUTO_INCREMENT de la tabla `tb_incidencia_inventarios`
--
ALTER TABLE `tb_incidencia_inventarios`
  MODIFY `idIncidenciaInv` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT de la tabla `tb_marca`
--
ALTER TABLE `tb_marca`
  MODIFY `idMarca` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=57;

--
-- AUTO_INCREMENT de la tabla `tb_perfil_responsable`
--
ALTER TABLE `tb_perfil_responsable`
  MODIFY `idPerfil` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT de la tabla `tb_propietarios`
--
ALTER TABLE `tb_propietarios`
  MODIFY `idPropietario` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=15;

--
-- AUTO_INCREMENT de la tabla `tb_responsables`
--
ALTER TABLE `tb_responsables`
  MODIFY `idResponsable` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=36;

--
-- AUTO_INCREMENT de la tabla `tb_seguros`
--
ALTER TABLE `tb_seguros`
  MODIFY `idSeguro` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT de la tabla `tb_subMarca`
--
ALTER TABLE `tb_subMarca`
  MODIFY `idSubmarca` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=84;

--
-- AUTO_INCREMENT de la tabla `tb_tipoTransporte`
--
ALTER TABLE `tb_tipoTransporte`
  MODIFY `idTransporte` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=40;

--
-- AUTO_INCREMENT de la tabla `tb_tramites`
--
ALTER TABLE `tb_tramites`
  MODIFY `idTramite` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT de la tabla `tb_vehiculos`
--
ALTER TABLE `tb_vehiculos`
  MODIFY `idVehiculo` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=273;

--
-- AUTO_INCREMENT de la tabla `tb_vehiculos_seguros`
--
ALTER TABLE `tb_vehiculos_seguros`
  MODIFY `idSegVeh` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=83;

--
-- AUTO_INCREMENT de la tabla `tb_vehiculos_servicios`
--
ALTER TABLE `tb_vehiculos_servicios`
  MODIFY `idVehiculoServicio` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=19;

--
-- AUTO_INCREMENT de la tabla `tb_vehiculos_solicitudes`
--
ALTER TABLE `tb_vehiculos_solicitudes`
  MODIFY `idSolicitud` int NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT de la tabla `tb_vehiculos_tenencias`
--
ALTER TABLE `tb_vehiculos_tenencias`
  MODIFY `idTenencia` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=97;

--
-- AUTO_INCREMENT de la tabla `tb_vehiculos_tramites`
--
ALTER TABLE `tb_vehiculos_tramites`
  MODIFY `idTramiteVehiculo` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=21;

--
-- AUTO_INCREMENT de la tabla `tb_vehiculos_verificaciones`
--
ALTER TABLE `tb_vehiculos_verificaciones`
  MODIFY `idVerificacion` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=172;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
