-- phpMyAdmin SQL Dump
-- version 4.8.5
-- https://www.phpmyadmin.net/
--
-- Servidor: 127.0.0.1:3306
-- Tiempo de generación: 21-11-2019 a las 19:12:30
-- Versión del servidor: 5.7.26
-- Versión de PHP: 7.2.18

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de datos: `cafeteria`
--

DELIMITER $$
--
-- Procedimientos
--
DROP PROCEDURE IF EXISTS `registrar`$$
CREATE DEFINER=`root`@`localhost` PROCEDURE `registrar` (IN `matricula` INT(10), IN `nombre` VARCHAR(50), IN `pass` VARCHAR(20), IN `email` VARCHAR(50), IN `telefono` VARCHAR(11))  BEGIN
    INSERT INTO USUARIO(matricula,nombre,contraseña,email,telefono,tipo) VALUES(matricula,nombre,pass,email,telefono,0);
    END$$

DELIMITER ;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `pedido`
--

DROP TABLE IF EXISTS `pedido`;
CREATE TABLE IF NOT EXISTS `pedido` (
  `id_pedido` int(5) NOT NULL AUTO_INCREMENT,
  `matricula` int(10) NOT NULL,
  `fecha_pedido` date DEFAULT NULL,
  `fecha_entrega` varchar(15) DEFAULT NULL,
  `total_pagar` int(30) NOT NULL,
  `descripcion` varchar(255) NOT NULL,
  `estado` int(1) DEFAULT NULL,
  `recoger` int(1) DEFAULT NULL,
  PRIMARY KEY (`id_pedido`),
  KEY `matricula` (`matricula`)
) ENGINE=MyISAM AUTO_INCREMENT=29 DEFAULT CHARSET=latin1;

--
-- Volcado de datos para la tabla `pedido`
--

INSERT INTO `pedido` (`id_pedido`, `matricula`, `fecha_pedido`, `fecha_entrega`, `total_pagar`, `descripcion`, `estado`, `recoger`) VALUES
(28, 201479684, '2019-11-21', '2019-12-03', 66, 'Cuernito de Jamon ,Cafe Americano,Dona de chocolate', 1, 1);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `producto`
--

DROP TABLE IF EXISTS `producto`;
CREATE TABLE IF NOT EXISTS `producto` (
  `id_producto` int(5) NOT NULL AUTO_INCREMENT,
  `producto` varchar(30) NOT NULL,
  `tipo_producto` varchar(64) NOT NULL,
  `precio` int(20) NOT NULL,
  `cantidad` int(30) NOT NULL,
  PRIMARY KEY (`id_producto`)
) ENGINE=MyISAM AUTO_INCREMENT=22 DEFAULT CHARSET=latin1;

--
-- Volcado de datos para la tabla `producto`
--

INSERT INTO `producto` (`id_producto`, `producto`, `tipo_producto`, `precio`, `cantidad`) VALUES
(1, 'Torta de chilaquiles', 'comida', 35, 6),
(2, 'Sandwich de jamon', 'comida', 20, 11),
(3, 'Coca-cola 600ml', 'bebidas', 15, 5),
(5, 'Dona de chocolate', 'postres', 15, 11),
(6, 'Galletas Principe ', 'postres', 14, 6),
(7, 'Torta de Salchicha', 'comida', 25, 0),
(8, 'Botella de Agua 600ml ', 'bebidas', 12, 6),
(9, 'Cafe Americano', 'bebidas', 27, 2),
(10, 'Frappe', 'bebidas ', 30, 3),
(11, 'Pastel de Chocolate ', 'postres', 32, 5),
(12, 'Cuernito de Jamon ', 'comida', 24, -2),
(13, 'Papas fritas ', 'postres', 38, 0),
(14, 'Jugo de Naranja 1L', 'bebidas', 20, 5),
(15, 'Torta de Jamon', 'comida', 22, 0),
(16, 'Agua de Jamaica 1L', 'bebidas', 24, 7),
(18, 'Flan Napolitano', 'postres ', 17, 3),
(19, 'Tacos Dorados Combinados', 'comida', 40, 1),
(20, 'Coctel de Frutas', 'postres', 25, 3);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `usuario`
--

DROP TABLE IF EXISTS `usuario`;
CREATE TABLE IF NOT EXISTS `usuario` (
  `matricula` int(10) NOT NULL,
  `nombre` varchar(50) NOT NULL,
  `contraseña` varchar(20) NOT NULL,
  `email` varchar(50) NOT NULL,
  `telefono` varchar(11) NOT NULL,
  `tipo` int(1) NOT NULL,
  PRIMARY KEY (`matricula`)
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Volcado de datos para la tabla `usuario`
--

INSERT INTO `usuario` (`matricula`, `nombre`, `contraseña`, `email`, `telefono`, `tipo`) VALUES
(201772797, 'Jose Miguel', '12345', 'josemiguel_3093@hotmail.com', '2321174287', 1),
(201545018, 'Gabriela Giovana', '54321', 'gabriela.449694@gmail.com', '2223399769', 1),
(201503817, 'Luis Angel', '12345', 'luisinhalo97@hotmail.com', '2321174287', 1),
(201245984, 'Marco Arturo Baez Guzman', 'marco', 'mark_arthur33@hotmail.com', '2223123453', 0),
(201536978, 'Maria Perez Hernandez', 'maria', 'maria34@gmail.com', '2654893654', 0),
(201479684, 'Andres Osorno Martinez', '369', 'andres_2014@hotmail.com', '2654789663', 0),
(201265847, 'Mario Hernandez Gutierritos', '456', 'mario_@gmail.com', '2226458963', 0),
(200911235, 'Pancho Rodriguez', 'pancho', 'panchitor@gmail.com', '2228477201', 0);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
