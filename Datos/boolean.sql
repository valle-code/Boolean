-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Servidor: 127.0.0.1
-- Tiempo de generación: 01-06-2022 a las 17:17:51
-- Versión del servidor: 10.4.21-MariaDB
-- Versión de PHP: 8.0.10

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de datos: `boolean`
--

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `baneado`
--

CREATE TABLE `baneado` (
  `id` int(11) NOT NULL,
  `id_user` int(11) NOT NULL,
  `nombre` varchar(20) NOT NULL,
  `apellidos` varchar(20) NOT NULL,
  `email` varchar(50) NOT NULL,
  `ruta` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Volcado de datos para la tabla `baneado`
--

INSERT INTO `baneado` (`id`, `id_user`, `nombre`, `apellidos`, `email`, `ruta`) VALUES
(1, 1, 'hola', 'hola', 'hola@hola.com', 'kjhjfakjflhkjsbfjaskhnfajkshvbdsjh'),
(2, 2, 'pruebaTrigger', 'pruebaTrigger', 'hjk@gmail.com', ''),
(3, 3, 'prueba', '', '', 'default.png'),
(4, 5, 'tableclan', 'Valle', 'formula1des@gmail.co', 'default.png');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `mod_usuario`
--

CREATE TABLE `mod_usuario` (
  `id` int(11) NOT NULL,
  `id_user` int(11) NOT NULL,
  `nombre` varchar(20) NOT NULL,
  `apellidos` varchar(20) NOT NULL,
  `email` varchar(30) NOT NULL,
  `foto` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `noticia`
--

CREATE TABLE `noticia` (
  `id` int(11) NOT NULL,
  `id_user` int(11) NOT NULL,
  `titulo` varchar(30) NOT NULL,
  `descripcion` varchar(100) NOT NULL,
  `contenido` text NOT NULL,
  `autor` varchar(20) NOT NULL,
  `foto` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Volcado de datos para la tabla `noticia`
--

INSERT INTO `noticia` (`id`, `id_user`, `titulo`, `descripcion`, `contenido`, `autor`, `foto`) VALUES
(1, 0, 'DFYUDASHUYCAUTFUJ', 'PLHGCFHJKOÑJCXGFHJKOKGCFGHJIOHGFGHIOPKHJ', 'PLHGCFHJKOÑJCXGFHJKOKGCFGHJIOHGFGHIOPKHJ', 'JIADCSGHJdklakl', 'tmp/805550_20211126170424_1.png'),
(2, 0, 'jklashjkfadsa', 'lkjkhgvdjlkñjvgbjhklñ', 'lkjkhgvdjlkñjvgbjhklñ', 'kljbjkj', 'jklashjkfadsa/'),
(3, 0, 'jhjgjkhg', 'jmhhgjhjkk', 'jmhhgjhjkk', 'bjkb', 'jhjgjkhg/'),
(4, 0, 'kñjhcvhjkl', 'k´pojhgfyhjilkhg', 'k´pojhgfyhjilkhg', 'jkhgfxdghjf', '../Usuario/Resources/Noticias/kñjhcvhjkl/805550_20211126170424_1.png'),
(5, 0, 'mñkouhgcxvgjklñ', '.´ñkjcvpopiuyfgiopjghfcghj', '.´ñkjcvpopiuyfgiopjghfcghj', 'ljhugfhjgbhj', '../Usuario/Resources/Noticias/mñkouhgcxvgjklñ/805550_20211126170424_1.png');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `usuario`
--

CREATE TABLE `usuario` (
  `id` int(11) NOT NULL,
  `nombre` varchar(20) NOT NULL,
  `apellidos` varchar(20) NOT NULL,
  `email` varchar(20) NOT NULL,
  `contraseña` varchar(32) NOT NULL,
  `foto` varchar(100) NOT NULL,
  `estado` varchar(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Volcado de datos para la tabla `usuario`
--

INSERT INTO `usuario` (`id`, `nombre`, `apellidos`, `email`, `contraseña`, `foto`, `estado`) VALUES
(4, 'Daniel', 'Valle', 'tableclanvalle@gmail', 'asdf1234_', '../Usuario/Resources/Usuarios/Daniel/805550_20211126170424_1.png', 'admin'),
(6, 'Daniel', 'Valle', 'danivalle.code@gmail', 'WSO_Dani03', '805550_20211126170424_1.png', ''),
(7, 'María', 'Valle', 'edgarbrba@gmail.com', 'jhagdsghashjkd', 'imagenes/default.png', 'user');

--
-- Disparadores `usuario`
--
DELIMITER $$
CREATE TRIGGER `trigger_asignar_estado` BEFORE INSERT ON `usuario` FOR EACH ROW BEGIN
SET NEW.estado = 'user';
END
$$
DELIMITER ;
DELIMITER $$
CREATE TRIGGER `trigger_asignar_foto` BEFORE INSERT ON `usuario` FOR EACH ROW BEGIN
  DECLARE foto VARCHAR(100);
  SET NEW.foto = 'imagenes/default.png';
END
$$
DELIMITER ;
DELIMITER $$
CREATE TRIGGER `trigger_banear_user` AFTER DELETE ON `usuario` FOR EACH ROW BEGIN
INSERT INTO baneado (id_user, nombre, apellidos, email, ruta) VALUES (OLD.id, OLD.nombre, OLD.apellidos, OLD.email, OLD.foto);
END
$$
DELIMITER ;

--
-- Índices para tablas volcadas
--

--
-- Indices de la tabla `baneado`
--
ALTER TABLE `baneado`
  ADD PRIMARY KEY (`id`);

--
-- Indices de la tabla `mod_usuario`
--
ALTER TABLE `mod_usuario`
  ADD PRIMARY KEY (`id`);

--
-- Indices de la tabla `noticia`
--
ALTER TABLE `noticia`
  ADD PRIMARY KEY (`id`);

--
-- Indices de la tabla `usuario`
--
ALTER TABLE `usuario`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT de las tablas volcadas
--

--
-- AUTO_INCREMENT de la tabla `baneado`
--
ALTER TABLE `baneado`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT de la tabla `mod_usuario`
--
ALTER TABLE `mod_usuario`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT de la tabla `noticia`
--
ALTER TABLE `noticia`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT de la tabla `usuario`
--
ALTER TABLE `usuario`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
