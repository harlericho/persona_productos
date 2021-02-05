-- phpMyAdmin SQL Dump
-- version 5.0.2
-- https://www.phpmyadmin.net/
--
-- Servidor: 127.0.0.1
-- Tiempo de generación: 26-06-2020 a las 03:25:51
-- Versión del servidor: 10.4.11-MariaDB
-- Versión de PHP: 7.4.6

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de datos: `db_personaproducto`
--

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `tbl_persons`
--

CREATE TABLE `tbl_persons` (
  `PER_ID` int(11) NOT NULL,
  `PER_NAMES` varchar(100) DEFAULT NULL,
  `PER_DNI` varchar(10) DEFAULT NULL,
  `PER_EMAIL` varchar(50) DEFAULT NULL,
  `PER_PASS` varchar(200) DEFAULT NULL,
  `PER_DATE` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp(),
  `PER_STATUS` char(1) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Volcado de datos para la tabla `tbl_persons`
--

INSERT INTO `tbl_persons` (`PER_ID`, `PER_NAMES`, `PER_DNI`, `PER_EMAIL`, `PER_PASS`, `PER_DATE`, `PER_STATUS`) VALUES
(45, 'carlos choca', '1234567890', 'harlericho@hotmail.com', 'RDJUNXhPaHh1eGVpYllOSVR5ZCtydz09', '2020-06-26 01:25:25', 'A'),
(46, 'paola lopez', '1724800293', 'mary7@hotmail.es', 'eE91VS9vL2lSRFhWMDV5bkFhWmVXUT09', '2020-06-12 17:09:06', 'A'),
(50, 'liz madel', '1789028283', 'liz@gmail.com', 'WXUrVlFySWk0RG4rUzJid1FnOXZRUT09', '2020-06-12 17:25:46', 'A');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `tbl_products`
--

CREATE TABLE `tbl_products` (
  `PRO_ID` int(11) NOT NULL,
  `PER_ID` int(11) DEFAULT NULL,
  `PRO_NAMES` varchar(50) DEFAULT NULL,
  `PRO_PRICE` decimal(8,2) DEFAULT NULL,
  `PRO_QUANTITY` int(11) DEFAULT NULL,
  `PRO_IMAGE` longblob DEFAULT NULL,
  `PRO_DATE` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp(),
  `PRO_STATUS` char(1) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Índices para tablas volcadas
--

--
-- Indices de la tabla `tbl_persons`
--
ALTER TABLE `tbl_persons`
  ADD PRIMARY KEY (`PER_ID`);

--
-- Indices de la tabla `tbl_products`
--
ALTER TABLE `tbl_products`
  ADD PRIMARY KEY (`PRO_ID`);

--
-- AUTO_INCREMENT de las tablas volcadas
--

--
-- AUTO_INCREMENT de la tabla `tbl_persons`
--
ALTER TABLE `tbl_persons`
  MODIFY `PER_ID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=51;

--
-- AUTO_INCREMENT de la tabla `tbl_products`
--
ALTER TABLE `tbl_products`
  MODIFY `PRO_ID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=28;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
