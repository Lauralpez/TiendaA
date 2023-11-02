-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Servidor: 127.0.0.1:3306
-- Tiempo de generación: 18-10-2023 a las 14:58:24
-- Versión del servidor: 8.0.31
-- Versión de PHP: 8.0.26

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de datos: `tiendaanimal`
--

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `cliente`
--

DROP TABLE IF EXISTS `cliente`;
CREATE TABLE IF NOT EXISTS `cliente` (
  `id` int NOT NULL,
  `nombre` text NOT NULL,
  `contraseña` text NOT NULL,
  `email` text NOT NULL,
  `telefono` int NOT NULL,
  `direccion` varchar(20) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `factura`
--

DROP TABLE IF EXISTS `factura`;
CREATE TABLE IF NOT EXISTS `factura` (
  `id` int NOT NULL,
  `precio` varchar(10) NOT NULL,
  `id_proveedor` int NOT NULL,
  PRIMARY KEY (`id`),
  KEY `id_proveedor` (`id_proveedor`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `pedidos`
--

DROP TABLE IF EXISTS `pedidos`;
CREATE TABLE IF NOT EXISTS `pedidos` (
  `id` int NOT NULL,
  `precio` text NOT NULL,
  `id_cliente` int NOT NULL,
  `id_reclamo` int NOT NULL,
  PRIMARY KEY (`id`),
  KEY `id_cliente` (`id_cliente`),
  KEY `id_reclamo` (`id_reclamo`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `proveedores`
--

DROP TABLE IF EXISTS `proveedores`;
CREATE TABLE IF NOT EXISTS `proveedores` (
  `id` int NOT NULL,
  `nombre` text NOT NULL,
  `email` varchar(30) NOT NULL,
  `empresas` text NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `reclamos`
--

DROP TABLE IF EXISTS `reclamos`;
CREATE TABLE IF NOT EXISTS `reclamos` (
  `id` int NOT NULL,
  `img` text NOT NULL,
  `cod` varchar(50) NOT NULL,
  `tipo` text NOT NULL,
  `nombre` text NOT NULL,
  `genero` text NOT NULL,
  `pre` double(10,2) NOT NULL,
  PRIMARY KEY (`id`),
  UNIQUE KEY `id` (`id`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `trabajador`
--

DROP TABLE IF EXISTS `trabajador`;
CREATE TABLE IF NOT EXISTS `trabajador` (
  `id` int NOT NULL,
  `nombre` text NOT NULL,
  `contraseña` varchar(20) NOT NULL,
  `rol` text NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;

ALTER TABLE reclamos MODIFY COLUMN id INT AUTO_INCREMENT;
-- Verificar si el producto ya existe
SELECT id FROM reclamos WHERE cod = 'COD002';

-- Si la consulta anterior devuelve resultados, entonces actualiza el registro existente
UPDATE reclamos SET img = 'nueva_imagen.jpg', tipo = 'Mascota', nombre = 'Perro', genero = 'Hembra', pre = 60.00 WHERE cod = 'COD002';

-- Si la consulta no devuelve resultados, entonces inserta un nuevo registro
INSERT INTO reclamos (img, cod, tipo, nombre, genero, pre) VALUES ('imagen.jpg', 'COD002', 'Mascota', 'Perro', 'Hembra', 60.00);
