-- phpMyAdmin SQL Dump
-- version 4.8.3
-- https://www.phpmyadmin.net/
--
-- Servidor: localhost:3306
-- Tiempo de generación: 01-02-2019 a las 10:38:16
-- Versión del servidor: 10.1.37-MariaDB-cll-lve
-- Versión de PHP: 7.2.7

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de datos: `nclocmgk_wingding2018`
--

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `adultos`
--

CREATE TABLE `adultos` (
  `id` int(100) NOT NULL,
  `cantidad` int(100) NOT NULL,
  `estatus` int(100) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8 COLLATE=utf8_spanish_ci;

--
-- Volcado de datos para la tabla `adultos`
--

INSERT INTO `adultos` (`id`, `cantidad`, `estatus`) VALUES
(1, 1, 1),
(2, 2, 1),
(3, 3, 1),
(4, 4, 1),
(5, 5, 1),
(6, 6, 1),
(7, 7, 1),
(8, 8, 1),
(9, 9, 1),
(10, 10, 1),
(11, 11, 1),
(12, 12, 1),
(13, 13, 1),
(14, 14, 1),
(15, 15, 1),
(16, 16, 1),
(17, 17, 1),
(18, 18, 1),
(19, 19, 1),
(20, 20, 1),
(21, 21, 1),
(22, 22, 1),
(23, 23, 1),
(24, 24, 1),
(25, 25, 1),
(26, 26, 1),
(27, 27, 1),
(28, 28, 1),
(29, 29, 1),
(30, 30, 1),
(31, 31, 1),
(32, 32, 1),
(33, 33, 1),
(34, 34, 1),
(35, 35, 1),
(36, 36, 1),
(37, 37, 1),
(38, 38, 1),
(39, 39, 1),
(40, 40, 1),
(41, 41, 1),
(42, 42, 1),
(43, 43, 1),
(44, 44, 1),
(45, 45, 1),
(46, 46, 1),
(47, 47, 1),
(48, 48, 1),
(49, 49, 1);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `aerolineas`
--

CREATE TABLE `aerolineas` (
  `id` int(100) NOT NULL,
  `aerolinea` varchar(255) COLLATE utf8_spanish_ci NOT NULL,
  `estatus` int(100) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8 COLLATE=utf8_spanish_ci;

--
-- Volcado de datos para la tabla `aerolineas`
--

INSERT INTO `aerolineas` (`id`, `aerolinea`, `estatus`) VALUES
(1, 'AMERICAN AIRLINES', 1),
(2, 'AVIANCA', 1),
(3, 'DORENAIR', 1),
(4, 'JETBLUE', 1),
(5, 'AEROLINEAS ARGENTINAS', 1),
(6, 'FRONTIER AIRLINES', 1),
(7, 'AZUR AIR', 1),
(8, 'SUNWING AIRLINES', 1),
(9, 'COPA AIRLINES', 1),
(10, 'AIR TRANSAT', 1),
(11, 'XTRA AIRWAYS', 1),
(12, 'SUNWING AIRLINES', 1),
(13, 'SPIRIT AIRLINES', 1),
(14, 'UNITED AIRLINES', 1),
(15, 'THOMSON AIRWAYS', 1),
(16, 'JETAIRFLY', 1),
(17, 'SOUTHWEST AIRLINES', 1),
(18, 'LANPERU', 1),
(19, 'RUTACA AIRLINES', 1),
(20, 'THOMAS COOK', 1),
(21, 'AIR FRANCE', 1),
(22, 'COPA AIRLINES25', 1),
(23, 'WAMOS AIR', 1),
(24, 'ARKEFLY', 1),
(25, 'ORBEST', 1),
(26, 'LANPERU', 1),
(27, 'CONDOR', 1),
(28, 'GOL', 1),
(29, 'COPA AIRLINES COLOMBIA', 1);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `aeropuertos`
--

CREATE TABLE `aeropuertos` (
  `id` int(100) NOT NULL,
  `aeropuerto` varchar(255) COLLATE utf8_spanish_ci NOT NULL,
  `zona` varchar(100) COLLATE utf8_spanish_ci NOT NULL,
  `estatus` int(100) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8 COLLATE=utf8_spanish_ci;

--
-- Volcado de datos para la tabla `aeropuertos`
--

INSERT INTO `aeropuertos` (`id`, `aeropuerto`, `zona`, `estatus`) VALUES
(1, 'Punta Cana International Airport', 'pca', 1),
(2, 'La Romana International Airport', 'lra', 1),
(3, 'Las Americas International Airport', 'laa', 0);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `agua`
--

CREATE TABLE `agua` (
  `id` int(100) NOT NULL,
  `cantidad` int(100) NOT NULL,
  `estatus` int(100) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8 COLLATE=utf8_spanish_ci;

--
-- Volcado de datos para la tabla `agua`
--

INSERT INTO `agua` (`id`, `cantidad`, `estatus`) VALUES
(1, 0, 1),
(2, 1, 1),
(3, 2, 1),
(4, 3, 1),
(5, 4, 1),
(6, 5, 1),
(7, 6, 1),
(8, 7, 1),
(9, 8, 1),
(10, 9, 1),
(11, 10, 1),
(12, 11, 1),
(13, 12, 1),
(14, 13, 1),
(15, 14, 1),
(16, 15, 1),
(17, 16, 1),
(18, 17, 1),
(19, 18, 1),
(20, 19, 1);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `asiento_nino`
--

CREATE TABLE `asiento_nino` (
  `id` int(100) NOT NULL,
  `cantidad` int(100) NOT NULL,
  `estatus` int(100) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8 COLLATE=utf8_spanish_ci;

--
-- Volcado de datos para la tabla `asiento_nino`
--

INSERT INTO `asiento_nino` (`id`, `cantidad`, `estatus`) VALUES
(1, 0, 1),
(2, 1, 1),
(3, 2, 1),
(4, 3, 1),
(5, 4, 1),
(6, 5, 1),
(7, 6, 1),
(8, 7, 1),
(9, 8, 1),
(10, 9, 1),
(11, 10, 1),
(12, 11, 1),
(13, 12, 1),
(14, 13, 1),
(15, 14, 1),
(16, 15, 1),
(17, 16, 1),
(18, 17, 1),
(19, 18, 1),
(20, 19, 1);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `cerveza`
--

CREATE TABLE `cerveza` (
  `id` int(100) NOT NULL,
  `cantidad` int(100) NOT NULL,
  `estatus` int(100) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8 COLLATE=utf8_spanish_ci;

--
-- Volcado de datos para la tabla `cerveza`
--

INSERT INTO `cerveza` (`id`, `cantidad`, `estatus`) VALUES
(1, 0, 1),
(2, 1, 1),
(3, 2, 1),
(4, 3, 1),
(5, 4, 1),
(6, 5, 1),
(7, 6, 1),
(8, 7, 1),
(9, 8, 1),
(10, 9, 1),
(11, 10, 1),
(12, 11, 1),
(13, 12, 1),
(14, 13, 1),
(15, 14, 1),
(16, 15, 1),
(17, 16, 1),
(18, 17, 1),
(19, 18, 1),
(20, 19, 1);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `hoteles`
--

CREATE TABLE `hoteles` (
  `id` int(100) NOT NULL,
  `hotel` varchar(255) COLLATE utf8_spanish_ci NOT NULL,
  `zona` varchar(255) COLLATE utf8_spanish_ci NOT NULL,
  `estatus` int(100) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8 COLLATE=utf8_spanish_ci;

--
-- Volcado de datos para la tabla `hoteles`
--

INSERT INTO `hoteles` (`id`, `hotel`, `zona`, `estatus`) VALUES
(1, 'Bavaro Hotels', 'bav', 1),
(2, 'Alsol Del Mar Resort', 'bav', 1),
(3, 'Alsol luxury Village', 'bav', 1),
(4, 'Alsol Tiara Cap Cana', 'bav', 1),
(5, 'Apartahotel Green Coast', 'bav', 1),
(6, 'Barceló Bávaro Beach - Adult Only', 'bav', 1),
(7, 'Barceló Bávaro Palace', 'bav', 1),
(8, 'Barceló Bávaro Palace Deluxe', 'bav', 1),
(9, 'Barceló Dominican Beach', 'bav', 1),
(10, 'Barceló premium Punta Cana', 'bav', 1),
(11, 'Barceló Punta Cana', 'bav', 1),
(12, 'Bávaro Green', 'bav', 1),
(13, 'Bávaro Princess All Suites Resort, Spa & Casino', 'bav', 1),
(14, 'Be Live Collection Punta Cana', 'bav', 1),
(15, 'Cappuccino Mare', 'bav', 1),
(16, 'Caribe Club Princess Beach Resort & Spa', 'bav', 1),
(17, 'Catalonia Bavaro Resort Punta Cana', 'bav', 1),
(18, 'Catalonia Royal Punta Cana', 'bav', 1),
(19, 'Chateau Del Mar', 'bav', 1),
(20, 'Club Med Punta Cana', 'bav', 1),
(21, 'Dreams Palm Beach Punta Cana', 'bav', 1),
(22, 'Eden Roc at Cap Cana', 'bav', 1),
(23, 'Fishing Lodge Cap Cana', 'bav', 1),
(24, 'Four Points by Sheraton', 'bav', 1),
(25, 'Grand Bahia Principe Ambar', 'bav', 1),
(26, 'Grand Bahia Principe Bávaro', 'bav', 1),
(27, 'Grand Bahia Principe Esmeralda', 'bav', 1),
(28, 'Grand Bahia Principe Premier', 'bav', 1),
(29, 'Grand Bahia Principe Punta Cana', 'bav', 1),
(30, 'Grand Bahia Principe Turquesa', 'bav', 1),
(31, 'Grand Palladium Bávaro Suites Resort and Spa', 'bav', 1),
(32, 'Grand Palladium Palace Resort Spa & Casino', 'bav', 1),
(33, 'Grand Palladium Punta Cana Resort & Spa', 'bav', 1),
(34, 'Hard Rock  Punta Cana Hotel & Casino', 'bav', 1),
(35, 'Hotel Cortecito Inn Bávaro', 'bav', 1),
(36, 'Hotel Flamboyan', 'bav', 1),
(37, 'Hotel Green Coast Deluxe', 'bav', 1),
(38, 'Hotel Merengue Punta Cana', 'bav', 1),
(39, 'Hotel Next Nivel', 'bav', 1),
(40, 'Hotel Primaveral', 'bav', 1),
(41, 'Hotel Riu Republica', 'bav', 1),
(42, 'Iberostar Bávaro Suites', 'bav', 1),
(43, 'Iberostar Dominicana', 'bav', 1),
(44, 'Iberostar Grand Hotel Bavaro', 'bav', 1),
(45, 'Iberostar Punta Cana', 'bav', 1),
(46, 'Ifa Villas Bávaro Resort & Spa', 'bav', 1),
(47, 'Karibo Punta Cana', 'bav', 1),
(48, 'Laguna Golf Bavaro', 'bav', 1),
(49, 'Los Corales Villas & Aparts Ocean View', 'bav', 1),
(50, 'Luxury Bahia Principe Ambar', 'bav', 1),
(51, 'Luxury Bahia Principe Esmeralda', 'bav', 1),
(52, 'Luxury Bahia Principe Fantasia', 'bav', 1),
(53, 'Majestic Colonial', 'bav', 1),
(54, 'Majestic Elegance', 'bav', 1),
(55, 'Majestic Mirage Punta Cana', 'bav', 1),
(56, 'Manaya Bed & Breakfast', 'bav', 1),
(57, 'Melia Caribe Tropical All Inclusive', 'bav', 1),
(58, 'Memories Splash Punta Cana', 'bav', 1),
(59, 'Mt Hotel', 'bav', 1),
(60, 'Natural Park Beach Eco Resort & Spa', 'bav', 1),
(61, 'NH Punta Cana', 'bav', 1),
(62, 'Now Larimar Punta Cana', 'bav', 1),
(63, 'Occidental Caribe', 'bav', 1),
(64, 'Occidental Grand Punta Cana Resort', 'bav', 1),
(65, 'Ocean Blue & Sands Beach Resort', 'bav', 1),
(66, 'Paradisus Palma Real Golf & Spa', 'bav', 1),
(67, 'Paradisus Punta Cana', 'bav', 1),
(68, 'Playa Turquesa Ocean Club', 'bav', 1),
(69, 'Premium Level at Barceló Bávaro Palace', 'bav', 1),
(70, 'Punta Blanca Golf & Beach Resort', 'bav', 1),
(71, 'Punta Cana Hostel', 'bav', 1),
(72, 'Punta Cana Princess All Suites, Resort & Spa', 'bav', 1),
(73, 'Punta Palmera At Cap Cana', 'bav', 1),
(74, 'Renaissance Santo Domingo Jaragua Hotel', 'bav', 1),
(75, 'Reserve At Paradisus Palma Real', 'bav', 1),
(76, 'Reserve At Paradisus Punta Cana', 'bav', 1),
(77, 'Riu Bambu Hotel & Resort', 'bav', 1),
(78, 'Riu Naiboa All Inclusive', 'bav', 1),
(79, 'Riu Palace Bávaro All Inclusive', 'bav', 1),
(80, 'Riu Palace Macao - Adults Only All Inclusive', 'bav', 1),
(81, 'Riu Palace Punta Cana', 'bav', 1),
(82, 'Riu República', 'bav', 1),
(83, 'Royal Prestige Suites Punta Cana', 'bav', 1),
(84, 'Royal Suites Turquesa By Palladium', 'bav', 1),
(85, 'Royalton Punta Cana Resort & Casino', 'bav', 1),
(86, 'Sanctuary Cap Cana', 'bav', 1),
(87, 'Secrets Cap Cana Resort & Spa', 'bav', 1),
(88, 'Secrets Royal Beach Punta Cana', 'bav', 1),
(89, 'Sunscape Bávaro Beach Punta Cana Resort', 'bav', 1),
(90, 'The Golf Suites', 'bav', 1),
(91, 'The Level at Meliá Caribe Tropical', 'bav', 1),
(92, 'The MT Hotel', 'bav', 1),
(93, 'Tropical Princess Beach Resort & Spa', 'bav', 1),
(94, 'VIK Hotel Arena Blanca All Inclusive', 'bav', 1),
(95, 'Vik Hotel Cayena Beach', 'bav', 1),
(96, 'Villas Bávaro Ifa', 'bav', 1),
(97, 'Vista Sol Punta Cana', 'bav', 1),
(98, 'Westin Punta Cana', 'bav', 1),
(99, 'Whala Bavaro', 'bav', 1),
(100, 'Xeliter Golden Bear Lodge Cap Cana', 'bav', 1),
(101, 'Hard Rock Hotel & Casino Punta Cana', 'bav', 1),
(102, 'Uvero Alto Hotels', 'ua', 1),
(103, 'Anthonys', 'ua', 1),
(104, 'Breathless Punta Cana Resort & Spa', 'ua', 1),
(105, 'Chic Punta Cana, By Royalton', 'ua', 1),
(106, 'Dreams Punta Cana Resort & Spa', 'ua', 1),
(107, 'Excellence El Carmen - Adults Only', 'ua', 1),
(108, 'Excellence Punta Cana - Adults Only', 'ua', 1),
(109, 'Nickelodeon Hotels & Resorts Punta Cana', 'ua', 1),
(110, 'Now Onyx Punta Cana All Inclusive', 'ua', 1),
(111, 'Sensatori Resort Punta Cana', 'ua', 1),
(112, 'Sirenis Cocotal Beach Resort Punta Cana', 'ua', 1),
(113, 'Sirenis Tropical Suites Punta Cana', 'ua', 1),
(114, 'Sivory Punta Cana', 'ua', 0),
(115, 'Zoetry Agua Punta Cana', 'ua', 1),
(116, 'La Romana Hotels', 'lr', 1),
(117, 'Casa de Campo', 'lr', 1),
(118, 'Casa de Campo Resort', 'lr', 1),
(119, 'Grand Bahia Principe La Romana - All Inclusive', 'lr', 1),
(120, 'Hostal Silvestre', 'lr', 1),
(121, 'Luxury Bahia Principe Bouganville Don Pablo Collection', 'lr', 1),
(122, 'Bayahibe Hotels', 'bh', 1),
(123, 'Be Live Collection Canoa', 'bh', 1),
(124, 'Cabana Elke', 'bh', 1),
(125, 'Cadaques Caribe Resort & Villas', 'bh', 1),
(126, 'Catalonia Gran Dominicus', 'bh', 1),
(127, 'Dreams Dominicus La Romana', 'bh', 1),
(128, 'Dreams La Romana', 'bh', 1),
(129, 'Hotel Bayahibe', 'bh', 1),
(130, 'Iberostar Hacienda Dominicus', 'bh', 1),
(131, 'Villa Baya Aparta Hotel', 'bh', 1),
(132, 'Viva Wyndham Dominicus Beach', 'bh', 1),
(133, 'Viva Wyndham Dominicus Palace', 'bh', 1),
(134, 'Boca Chica Hotels', 'bc', 1),
(135, 'Aparta Hotel Caribe Paraiso', 'bc', 1),
(136, 'Aparta Hotel Roma', 'bc', 1),
(137, 'Be Live Hamaca Beach', 'bc', 1),
(138, 'Be Live Hamaca Garden', 'bc', 1),
(139, 'Be Live Hamaca Suites', 'bc', 1),
(140, 'Boca Chica Beach Hotel', 'bc', 1),
(141, 'Don Juan Beach Resort', 'bc', 1),
(142, 'Hotel BelleVue Dominican Bay', 'bc', 1),
(143, 'Hotel Garant & Suites', 'bc', 1),
(144, 'Hotel Hamilton', 'bc', 1),
(145, 'Hotel Mango', 'bc', 1),
(146, 'Juan Dolio Hotels', 'jd', 1),
(147, 'Barceló  Capella Beach All Inclusive', 'jd', 1),
(148, 'Coral Costa Caribe All Inclusive', 'jd', 1),
(149, 'Hotel Colonial Tropical', 'jd', 1),
(150, 'Juan Dolio Beach Resort', 'jd', 1),
(151, 'Juan Dolio City - Area', 'jd', 1),
(152, 'Los Marlins Suites Hotel', 'jd', 1),
(153, 'Playa Esmeralda Beach Resort', 'jd', 1),
(154, 'Plaza Real Resort', 'jd', 1),
(155, 'Talanquera Beach Resort', 'jd', 1),
(156, 'Villa En Campo De Golf', 'jd', 1),
(157, 'Aila Hotels', 'ai', 1),
(158, 'Santo Domingo Hotels', 'sd', 1),
(159, 'Barceló Santo Domingo', 'sd', 1),
(160, 'Billini Hotel', 'sd', 1),
(161, 'Boutique Hotel Palacio', 'sd', 1),
(162, 'BQ Santo Domingo', 'sd', 1),
(163, 'Casa Conde Hotel Boutique', 'sd', 1),
(164, 'Casa Naemie', 'sd', 1),
(165, 'Casa Sanchez Boutique Hotel', 'sd', 1),
(166, 'Crowne Plaza Santo Domingo', 'sd', 1),
(167, 'Dominican Fiesta Hotel-Casino', 'sd', 1),
(168, 'El Beaterio', 'sd', 1),
(169, 'Embassy Suites By Hilton', 'sd', 1),
(170, 'Grand Hotel Reyna', 'sd', 1),
(171, 'Hilton Santo Domingo', 'sd', 1),
(172, 'Hodelpa Caribe Colonial', 'sd', 1),
(173, 'Holiday Inn Santo Domingo', 'sd', 1),
(174, 'Hostal Nicolas De Ovando', 'sd', 1),
(175, 'Hostal San Francisco De Asis', 'sd', 1),
(176, 'Hotel Discovery', 'sd', 1),
(177, 'Hotel Dona Elvira', 'sd', 1),
(178, 'Hotel Frances Santo Domingo', 'sd', 1),
(179, 'Hotel Jade', 'sd', 1),
(180, 'Hotel La LLave Del Mar', 'sd', 1),
(181, 'Hotel Mercure Comercial', 'sd', 1),
(182, 'Hotel Riparbella', 'sd', 1),
(183, 'Hotel Suite Colonial', 'sd', 1),
(184, 'JQ Marriott Hotel', 'sd', 1),
(185, 'JW Marriott Hotel', 'sd', 1),
(186, 'Maison Gautreaux', 'sd', 1),
(187, 'Napolitana Hotel', 'sd', 1),
(188, 'Occidental El Embajador', 'sd', 1),
(189, 'Paseo Colonial Aparta Hotel', 'sd', 1),
(190, 'Renaissance Santo Domingo', 'sd', 1),
(191, 'Renaissance Santo Domingo Jaragua Hotel', 'sd', 1),
(192, 'Sheraton Santo Domingo', 'sd', 1),
(193, 'Weston Suites & Hotel Santo Domingo', 'sd', 1);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `infantes`
--

CREATE TABLE `infantes` (
  `id` int(100) NOT NULL,
  `cantidad` int(100) NOT NULL,
  `estatus` int(100) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8 COLLATE=utf8_spanish_ci;

--
-- Volcado de datos para la tabla `infantes`
--

INSERT INTO `infantes` (`id`, `cantidad`, `estatus`) VALUES
(1, 0, 1),
(2, 1, 1),
(3, 2, 1),
(4, 3, 1),
(5, 4, 1),
(6, 5, 1),
(7, 6, 1),
(8, 7, 1),
(9, 8, 1),
(10, 9, 1),
(11, 10, 1),
(12, 11, 1),
(13, 12, 1),
(14, 13, 1),
(15, 14, 1),
(16, 15, 1),
(17, 16, 1),
(18, 17, 1),
(19, 18, 1),
(20, 19, 1),
(21, 20, 1),
(22, 21, 1),
(23, 22, 1),
(24, 23, 1),
(25, 24, 1),
(26, 25, 1),
(27, 26, 1),
(28, 27, 1),
(29, 28, 1),
(30, 29, 1),
(31, 30, 1),
(32, 31, 1),
(33, 32, 1),
(34, 33, 1),
(35, 34, 1),
(36, 35, 1),
(37, 36, 1),
(38, 37, 1),
(39, 38, 1),
(40, 39, 1),
(41, 40, 1),
(42, 41, 1),
(43, 42, 1),
(44, 43, 1),
(45, 44, 1),
(46, 45, 1),
(47, 46, 1),
(48, 47, 1),
(49, 48, 1),
(50, 49, 1);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `ninos`
--

CREATE TABLE `ninos` (
  `id` int(100) NOT NULL,
  `cantidad` int(100) NOT NULL,
  `estatus` int(100) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8 COLLATE=utf8_spanish_ci;

--
-- Volcado de datos para la tabla `ninos`
--

INSERT INTO `ninos` (`id`, `cantidad`, `estatus`) VALUES
(1, 0, 1),
(2, 1, 1),
(3, 2, 1),
(4, 3, 1),
(5, 4, 1),
(6, 5, 1),
(7, 6, 1),
(8, 7, 1),
(9, 8, 1),
(10, 9, 1),
(11, 10, 1),
(12, 11, 1),
(13, 12, 1),
(14, 13, 1),
(15, 14, 1),
(16, 15, 1),
(17, 16, 1),
(18, 17, 1),
(19, 18, 1),
(20, 19, 1),
(21, 20, 1),
(22, 21, 1),
(23, 22, 1),
(24, 23, 1),
(25, 24, 1),
(26, 25, 1),
(27, 26, 1),
(28, 27, 1),
(29, 28, 1),
(30, 29, 1),
(31, 30, 1),
(32, 31, 1),
(33, 32, 1),
(34, 33, 1),
(35, 34, 1),
(36, 35, 1),
(37, 36, 1),
(38, 37, 1),
(39, 38, 1),
(40, 39, 1),
(41, 40, 1),
(42, 41, 1),
(43, 42, 1),
(44, 43, 1),
(45, 44, 1),
(46, 45, 1),
(47, 46, 1),
(48, 47, 1),
(49, 48, 1),
(50, 49, 1);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `oneway`
--

CREATE TABLE `oneway` (
  `fecha` varchar(100) COLLATE utf8_spanish_ci NOT NULL,
  `id` varchar(255) COLLATE utf8_spanish_ci NOT NULL,
  `nombre` varchar(255) COLLATE utf8_spanish_ci NOT NULL,
  `apellido` varchar(255) COLLATE utf8_spanish_ci NOT NULL,
  `email` varchar(255) COLLATE utf8_spanish_ci NOT NULL,
  `telefono` varchar(255) COLLATE utf8_spanish_ci NOT NULL,
  `servicio` varchar(255) COLLATE utf8_spanish_ci NOT NULL,
  `desde` varchar(255) COLLATE utf8_spanish_ci NOT NULL,
  `hasta` varchar(255) COLLATE utf8_spanish_ci NOT NULL,
  `adultos` varchar(100) COLLATE utf8_spanish_ci NOT NULL,
  `ninos` varchar(100) COLLATE utf8_spanish_ci NOT NULL,
  `infantes` varchar(100) COLLATE utf8_spanish_ci NOT NULL,
  `asientonino` varchar(100) COLLATE utf8_spanish_ci NOT NULL,
  `cerveza` varchar(100) COLLATE utf8_spanish_ci NOT NULL,
  `agua` varchar(100) COLLATE utf8_spanish_ci NOT NULL,
  `soda` varchar(100) COLLATE utf8_spanish_ci NOT NULL,
  `arrival` varchar(255) COLLATE utf8_spanish_ci NOT NULL,
  `tiempo` varchar(255) COLLATE utf8_spanish_ci NOT NULL,
  `aerolinea` varchar(255) COLLATE utf8_spanish_ci NOT NULL,
  `numerodevuelo` varchar(255) COLLATE utf8_spanish_ci NOT NULL,
  `equipaje` varchar(255) COLLATE utf8_spanish_ci NOT NULL,
  `notas` varchar(255) COLLATE utf8_spanish_ci NOT NULL,
  `total` varchar(100) COLLATE utf8_spanish_ci NOT NULL,
  `estatus` varchar(100) COLLATE utf8_spanish_ci NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8 COLLATE=utf8_spanish_ci;

--
-- Volcado de datos para la tabla `oneway`
--

INSERT INTO `oneway` (`fecha`, `id`, `nombre`, `apellido`, `email`, `telefono`, `servicio`, `desde`, `hasta`, `adultos`, `ninos`, `infantes`, `asientonino`, `cerveza`, `agua`, `soda`, `arrival`, `tiempo`, `aerolinea`, `numerodevuelo`, `equipaje`, `notas`, `total`, `estatus`) VALUES
('05/11/2018', 'Z7B34C1WT4MH', 'miguel', 'medina', 'miguelaml229', '809', 'Luxury Transfer One Way', 'La Romana International Airport', 'Barceló Bávaro Beach - Adult Only', '1', '0', '5', '0', '0', '0', '0', '05/15/2018', '07:12', 'AEROLINEAS ARGENTINAS', '676767', '+6', 'nothing', '$231USD', 'Processing');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `roundtrip`
--

CREATE TABLE `roundtrip` (
  `fecha` varchar(100) COLLATE utf8_spanish_ci NOT NULL,
  `id` varchar(100) COLLATE utf8_spanish_ci NOT NULL,
  `nombre` varchar(255) COLLATE utf8_spanish_ci NOT NULL,
  `apellido` varchar(255) COLLATE utf8_spanish_ci NOT NULL,
  `email` varchar(255) COLLATE utf8_spanish_ci NOT NULL,
  `telefono` varchar(255) COLLATE utf8_spanish_ci NOT NULL,
  `servicio` varchar(255) COLLATE utf8_spanish_ci NOT NULL,
  `desde` varchar(255) COLLATE utf8_spanish_ci NOT NULL,
  `hasta` varchar(255) COLLATE utf8_spanish_ci NOT NULL,
  `adultos` varchar(100) COLLATE utf8_spanish_ci NOT NULL,
  `ninos` varchar(100) COLLATE utf8_spanish_ci NOT NULL,
  `infantes` varchar(100) COLLATE utf8_spanish_ci NOT NULL,
  `asientonino` varchar(100) COLLATE utf8_spanish_ci NOT NULL,
  `cerveza` varchar(100) COLLATE utf8_spanish_ci NOT NULL,
  `agua` varchar(100) COLLATE utf8_spanish_ci NOT NULL,
  `soda` varchar(100) COLLATE utf8_spanish_ci NOT NULL,
  `arrival` varchar(100) COLLATE utf8_spanish_ci NOT NULL,
  `tiempo` varchar(100) COLLATE utf8_spanish_ci NOT NULL,
  `aerolinea` varchar(255) COLLATE utf8_spanish_ci NOT NULL,
  `numerodevuelo` varchar(100) COLLATE utf8_spanish_ci NOT NULL,
  `aerolineasalida` varchar(255) COLLATE utf8_spanish_ci NOT NULL,
  `numerodevuelosalida` varchar(100) COLLATE utf8_spanish_ci NOT NULL,
  `fechasalida` varchar(100) COLLATE utf8_spanish_ci NOT NULL,
  `horasalida` varchar(100) COLLATE utf8_spanish_ci NOT NULL,
  `recogidasalida` varchar(100) COLLATE utf8_spanish_ci NOT NULL,
  `equipaje` varchar(100) COLLATE utf8_spanish_ci NOT NULL,
  `notas` varchar(255) COLLATE utf8_spanish_ci NOT NULL,
  `total` varchar(100) COLLATE utf8_spanish_ci NOT NULL,
  `estatus` varchar(100) COLLATE utf8_spanish_ci NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8 COLLATE=utf8_spanish_ci;

--
-- Volcado de datos para la tabla `roundtrip`
--

INSERT INTO `roundtrip` (`fecha`, `id`, `nombre`, `apellido`, `email`, `telefono`, `servicio`, `desde`, `hasta`, `adultos`, `ninos`, `infantes`, `asientonino`, `cerveza`, `agua`, `soda`, `arrival`, `tiempo`, `aerolinea`, `numerodevuelo`, `aerolineasalida`, `numerodevuelosalida`, `fechasalida`, `horasalida`, `recogidasalida`, `equipaje`, `notas`, `total`, `estatus`) VALUES
('05/11/2018', '29YX43YYT3MW', 'prueba antispam', 'aja', 'm@live.com', '809', 'Luxury Transfer Round Trip', 'La Romana International Airport', 'Bávaro Green', '18', '15', '3', '3', '16', '16', '16', '05/24/2018', '04:55', 'JETBLUE', '122345', 'JETAIRFLY', '6789', '05/30/2018', '07:06', '03:36', '3', 'nothing for now', '$4316USD', 'Confirmed'),
('08/16/2018', 'WKV7DBI38PZP', 'Berenice Monegro', 'Monegro', 'bmonegro@wingdingtravel.com ', '8298603847 ', 'Private Transfer Round Trip', 'Punta Cana International Airport', 'Grand Bahia Principe Bávaro', '2', '0', '0', '0', '0', '0', '0', '08/18/2018', '15:40', 'JETBLUE', '123', 'JETBLUE', '321', '08/25/2018', '13:30', '10:30', '4', '', '$96USD', 'Processing');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `soda`
--

CREATE TABLE `soda` (
  `id` int(100) NOT NULL,
  `cantidad` int(100) NOT NULL,
  `estatus` int(100) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8 COLLATE=utf8_spanish_ci;

--
-- Volcado de datos para la tabla `soda`
--

INSERT INTO `soda` (`id`, `cantidad`, `estatus`) VALUES
(1, 0, 1),
(2, 1, 1),
(3, 2, 1),
(4, 3, 1),
(5, 4, 1),
(6, 5, 1),
(7, 6, 1),
(8, 7, 1),
(9, 8, 1),
(10, 9, 1),
(11, 10, 1),
(12, 11, 1),
(13, 12, 1),
(14, 13, 1),
(15, 14, 1),
(16, 15, 1),
(17, 16, 1),
(18, 17, 1),
(19, 18, 1),
(20, 19, 1);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `tours`
--

CREATE TABLE `tours` (
  `id` int(100) NOT NULL,
  `tour` varchar(255) NOT NULL,
  `prefijo` varchar(100) CHARACTER SET utf8 COLLATE utf8_spanish_ci NOT NULL,
  `estatus` int(100) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Volcado de datos para la tabla `tours`
--

INSERT INTO `tours` (`id`, `tour`, `prefijo`, `estatus`) VALUES
(1, 'Medina Luna', 'ml', 1),
(2, 'Catalina Island Snorkeling', 'cis', 1),
(3, 'Los Haitises Exclusive VIP', 'lhv', 1),
(4, 'Los Haitises Montaña Redonda', 'lhmr', 1),
(5, 'Samana Cayo Levantado', 'scl', 1),
(6, 'Booze Cruise', 'bc', 1),
(7, 'Saona Island', 'si', 1),
(8, 'Supreme Truck Safari', 'sts', 1),
(9, 'ATV´S / BUGGIES', 'ab', 1),
(10, 'Santo Domingo City Tour', 'sdct', 1);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `tour_reservas`
--

CREATE TABLE `tour_reservas` (
  `fecha` varchar(100) COLLATE utf8_spanish_ci NOT NULL,
  `id` varchar(100) COLLATE utf8_spanish_ci NOT NULL,
  `tour` varchar(255) COLLATE utf8_spanish_ci NOT NULL,
  `nombre` varchar(255) COLLATE utf8_spanish_ci NOT NULL,
  `apellido` varchar(255) COLLATE utf8_spanish_ci NOT NULL,
  `email` varchar(255) COLLATE utf8_spanish_ci NOT NULL,
  `telefono` varchar(100) COLLATE utf8_spanish_ci NOT NULL,
  `fechaexcursion` varchar(100) COLLATE utf8_spanish_ci NOT NULL,
  `hotel` varchar(255) COLLATE utf8_spanish_ci NOT NULL,
  `turno` varchar(100) COLLATE utf8_spanish_ci NOT NULL,
  `recogida` varchar(255) COLLATE utf8_spanish_ci NOT NULL,
  `adultos` varchar(100) COLLATE utf8_spanish_ci NOT NULL,
  `ninos` varchar(100) COLLATE utf8_spanish_ci NOT NULL,
  `infantes` varchar(100) COLLATE utf8_spanish_ci NOT NULL,
  `total` varchar(100) COLLATE utf8_spanish_ci NOT NULL,
  `estatus` varchar(100) COLLATE utf8_spanish_ci NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8 COLLATE=utf8_spanish_ci;

--
-- Volcado de datos para la tabla `tour_reservas`
--

INSERT INTO `tour_reservas` (`fecha`, `id`, `tour`, `nombre`, `apellido`, `email`, `telefono`, `fechaexcursion`, `hotel`, `turno`, `recogida`, `adultos`, `ninos`, `infantes`, `total`, `estatus`) VALUES
('10/09/2018', 'GWE8ICGN3AKA', 'BUGGY FAMILIAR (4PAX)', 'Tony', 'Test', 'tonybautista@santostechnologies.com', '5613859102', '10/13/2018', 'Hard Rock Hotel & Casino Punta Cana', '12:00PM', '10:40AM TO 12:00PM', '1', '0', '0', '0', 'Processing'),
('10/09/2018', '669YGQ1PIK79', 'BUGGY FAMILIAR (4PAX)', 'Tony', 'Test', 'tonybautista@santostechnologies.com', '5613859102', '10/13/2018', 'Alsol Tiara Cap Cana', '12:00PM', '10:40AM TO 12:00PM', '1', '0', '0', '0', 'Processing'),
('10/07/2018', '7G3U6Y9JPY6H', 'Samana Cayo Levantado', 'Tony', 'Bautista', 'dasantos@santostechnologies.com', '5613859102', '10/13/2018', 'Royalton Punta Cana Resort & Casino', '7:00AM', '6:00AM to 7:00AM', '3', '0', '0', '$435 USD', 'Processing'),
('09/15/2018', 'PVUI97B1VATF', 'Samana Cayo Levantado', 'Tony', 'Santos', 'dasantos@santostechnologies.com', '561-385-9102', '09/22/2018', 'The MT Hotel', '7:00AM', '6:00AM to 7:00AM', '1', '0', '0', '$145 USD', 'Processing'),
('07/06/2018', 'IF2N8GPLBRN1', 'Saona Island', 'Berenice', 'Monegro', 'bmonegro@wingdingtravel.com', '8298603847', '07/07/2018', 'Barceló Punta Cana', '8:00AM', '6:40AM to 8:00AM', '2', '0', '0', '$140 USD', 'Processing'),
('05/21/2018', 'WPZ9DDHM2JF6', 'Media Luna', 'aldo', 'test', 'domtecno.com@gmail.com', '8099144873', '05/31/2018', 'Barceló Bávaro Palace', '8:00AM', '7:00AM to 8:15AM', '1', '0', '0', '$1 USD', 'Processing'),
('05/21/2018', '8PGD7IRA7VD4', 'Media Luna', 'Miguel', 'Test', 'miguelaml299@gmail.com', '8094073713', '05/24/2018', 'Cappuccino Mare', '8:00AM', '7:00AM to 8:15AM', '4', '1', '1', '$446 USD', 'Processing'),
('05/21/2018', '8TAQKKBP4KE3', 'BUGGY FAMILIAR (4PAX)', 'Miguel', 'Medina', 'miguelaml299@gmail.com', '8094073713', '05/31/2018', 'Excellence Punta Cana - Adults Only', '12:00PM', '10:40AM TO 12:00PM', '4', '0', '0', '$276 USD', 'Processing'),
('05/16/2018', 'RNIGTE8QAKAG', 'Media Luna', 'Berenice', 'Monegro', 'bmonegro@wingdingtravel.com', '8298603847', '05/24/2018', 'Barceló Bávaro Palace', '8:00AM', '7:00AM to 8:15AM', '2', '0', '0', '$198 USD', 'Processing'),
('10/10/2018', 'RFF3Z7FJET96', 'Booze Cruise', 'Tony', 'Bautista', 'dasantos63@comcast.net', '5613859102', '10/13/2018', 'Barceló Dominican Beach', '8:00AM', '6:40AM TO 8:00AM', '2', '0', '0', '$118 USD', 'Processing'),
('10/29/2018', 'N2HE3C7LNJ23', 'Saona Island', 'Berenice', 'Monegro', 'bmonegro@wingdingtravel.com', '8298603847', '10/31/2018', 'Hotel Riu Republica', '8:00AM', '6:40AM to 8:00AM', '2', '0', '0', '$140 USD', 'Processing');

--
-- Índices para tablas volcadas
--

--
-- Indices de la tabla `adultos`
--
ALTER TABLE `adultos`
  ADD PRIMARY KEY (`id`);

--
-- Indices de la tabla `aerolineas`
--
ALTER TABLE `aerolineas`
  ADD PRIMARY KEY (`id`);

--
-- Indices de la tabla `aeropuertos`
--
ALTER TABLE `aeropuertos`
  ADD PRIMARY KEY (`id`);

--
-- Indices de la tabla `agua`
--
ALTER TABLE `agua`
  ADD PRIMARY KEY (`id`);

--
-- Indices de la tabla `asiento_nino`
--
ALTER TABLE `asiento_nino`
  ADD PRIMARY KEY (`id`);

--
-- Indices de la tabla `cerveza`
--
ALTER TABLE `cerveza`
  ADD PRIMARY KEY (`id`);

--
-- Indices de la tabla `hoteles`
--
ALTER TABLE `hoteles`
  ADD PRIMARY KEY (`id`);

--
-- Indices de la tabla `infantes`
--
ALTER TABLE `infantes`
  ADD PRIMARY KEY (`id`);

--
-- Indices de la tabla `ninos`
--
ALTER TABLE `ninos`
  ADD PRIMARY KEY (`id`);

--
-- Indices de la tabla `oneway`
--
ALTER TABLE `oneway`
  ADD PRIMARY KEY (`id`);

--
-- Indices de la tabla `roundtrip`
--
ALTER TABLE `roundtrip`
  ADD PRIMARY KEY (`id`);

--
-- Indices de la tabla `soda`
--
ALTER TABLE `soda`
  ADD PRIMARY KEY (`id`);

--
-- Indices de la tabla `tours`
--
ALTER TABLE `tours`
  ADD PRIMARY KEY (`id`);

--
-- Indices de la tabla `tour_reservas`
--
ALTER TABLE `tour_reservas`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT de las tablas volcadas
--

--
-- AUTO_INCREMENT de la tabla `adultos`
--
ALTER TABLE `adultos`
  MODIFY `id` int(100) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=50;

--
-- AUTO_INCREMENT de la tabla `aerolineas`
--
ALTER TABLE `aerolineas`
  MODIFY `id` int(100) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=30;

--
-- AUTO_INCREMENT de la tabla `aeropuertos`
--
ALTER TABLE `aeropuertos`
  MODIFY `id` int(100) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT de la tabla `agua`
--
ALTER TABLE `agua`
  MODIFY `id` int(100) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=21;

--
-- AUTO_INCREMENT de la tabla `asiento_nino`
--
ALTER TABLE `asiento_nino`
  MODIFY `id` int(100) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=21;

--
-- AUTO_INCREMENT de la tabla `cerveza`
--
ALTER TABLE `cerveza`
  MODIFY `id` int(100) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=21;

--
-- AUTO_INCREMENT de la tabla `hoteles`
--
ALTER TABLE `hoteles`
  MODIFY `id` int(100) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=195;

--
-- AUTO_INCREMENT de la tabla `infantes`
--
ALTER TABLE `infantes`
  MODIFY `id` int(100) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=51;

--
-- AUTO_INCREMENT de la tabla `ninos`
--
ALTER TABLE `ninos`
  MODIFY `id` int(100) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=101;

--
-- AUTO_INCREMENT de la tabla `soda`
--
ALTER TABLE `soda`
  MODIFY `id` int(100) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=21;

--
-- AUTO_INCREMENT de la tabla `tours`
--
ALTER TABLE `tours`
  MODIFY `id` int(100) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
