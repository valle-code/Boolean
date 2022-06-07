-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Servidor: 127.0.0.1
-- Tiempo de generación: 07-06-2022 a las 13:13:57
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
-- Estructura de tabla para la tabla `noticia`
--

CREATE TABLE `noticia` (
  `id` int(11) NOT NULL,
  `id_user` int(11) NOT NULL,
  `titulo` varchar(30) NOT NULL,
  `descripcion` varchar(500) NOT NULL,
  `contenido` text NOT NULL,
  `imagen` varchar(200) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Volcado de datos para la tabla `noticia`
--

INSERT INTO `noticia` (`id`, `id_user`, `titulo`, `descripcion`, `contenido`, `imagen`) VALUES
(17, 12, 'Hola Mundo', 'Esta es la primera publicación de la historia de Boolean:)', 'Esta es la primera publicación de la historia de Boolean. Espero que disfrutéis :)', 'Captura de pantalla 2021-11-29 165409_waifu2x_art_noise3_scale_tta_1.png'),
(20, 24, 'Terraplanismo', 'El terraplanismo mata', 'Las cosmogonías de las primeras civilizaciones, sostuvieron, de manera implícita, la idea de que la Tierra es una superficie plana, cubierta por una cúpula. En los extremos del Mundo, según esta noción, existían altas montañas, o pilares, que soportaban dicha cúpula. Esta tierra tenía la forma de un disco o de un cuadrángulo y, generalmente, se consideraba que la rodeaba un inmenso mar llamado, por los griegos, río Océano. Esta imagen del Mundo, era común tanto en Mesopotamia, como en la India, Egipto, Grecia y las sociedades del Levante.7​8​\r\n\r\nEn efecto, en la mitología caldea, el mundo se representa como un disco redondo y plano que flota en el océano, y esas imagen fue la premisa para los primeros mapas griegos, como los de Anaximandro9​ y Hecateo de Mileto. Tales de Mileto también concebía a la Tierra como un disco plano.10​11​En las escasas, e incidentales, menciones de la Biblia sobre la forma del mundo, se observa la misma idea.\r\n\r\nEn los tiempos clásicos se descubrió que la Tierra era esférica, algo que fue aceptado por la mayor parte de los filósofos y pensadores europeos e islámicos. El mito de la creencia antigua y medieval en una Tierra plana se introdujo por primera vez en el imaginario popular en el siglo xix16​17​ gracias a la obra del escritor estadounidense Washington Irving.18​\r\n\r\nSe ha conjeturado que la primera persona en haber defendido la idea de una Tierra esférica fue Pitágoras (siglo vi a. C.), , quien argumentaba que todos los demás objetos astronómicos eran a su vez esféricos. Según Burnet, «la Jonia no fue nunca capaz de aceptar el punto de vista científico en lo relativo a la Tierra, y aun Demócrito siguió creyendo que era plana».', 'descarga (1).jpg'),
(21, 17, '9999999999', 'Los telefonos falsos son un problema', 'La gente pierde mucho dinero con las estafas perpetradas por teléfono, y a veces, pierde los ahorros de toda su vida. Los estafadores han imaginado incontables maneras de engañar a la gente por teléfono para quitarle su dinero. En algunas estafas, actúan de manera amigable y servicial. En otras, lo podrían amenazar o tratar de asustarlo. Una cosa con la que puede contar es que un estafador que opera por teléfono intentará obtener su dinero o su información personal para cometer robo de identidad. No le dé ni su dinero ni su información personal. Esto es lo que necesita saber. Cómo reconocer una estafa por teléfono\r\nLas estafas por teléfono se presentan de varias maneras, pero en todas las variantes los estafadores suelen hacer promesas y amenazas similares o pedirle ciertos métodos de pago. A continuación, encontrará información útil para reconocer una estafa por teléfono.\r\n\r\nNo hay ningún premio\r\nLa persona que llama podría decirle que fue “seleccionado” para participar de un ofrecimiento o que se ganó el premio de una lotería. Pero si tiene que pagar para recibir el premio, entonces no es un premio.\r\n\r\nNo lo arrestarán\r\nLos estafadores podrían hacerse pasar por funcionarios de seguridad o de una agencia federal. Podrían decirle que si no paga de inmediato ciertos impuestos o alguna otra deuda lo arrestarán, lo multarán o deportarán. El objetivo es asustarlo para que pague. Pero los verdaderos funcionarios de seguridad y de agencias federales no lo llamarán para amenazarlo.', 'descarga (1).jfif');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `usuario`
--

CREATE TABLE `usuario` (
  `id_usuario` int(11) NOT NULL,
  `nombre` varchar(20) NOT NULL,
  `apellidos` varchar(20) NOT NULL,
  `email` varchar(50) NOT NULL,
  `contraseña` varchar(160) NOT NULL,
  `foto` varchar(100) NOT NULL,
  `estado` varchar(10) NOT NULL,
  `ban` varchar(3) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Volcado de datos para la tabla `usuario`
--

INSERT INTO `usuario` (`id_usuario`, `nombre`, `apellidos`, `email`, `contraseña`, `foto`, `estado`, `ban`) VALUES
(12, 'Dani', 'Valle', 'formula1des@gmail.com', 'e9df320409582388be98970f61224faddf107332', '20201222_181131.jpg', 'admin', 'No'),
(13, 'pruebaBan', 'pruebaBan', 'vallecode@gmail.com', 'e9df320409582388be98970f61224faddf107332', 'default.png', 'user', 'si'),
(15, 'tableclan', 'valle', 'tableclanvalle@gmail.com', 'e9df320409582388be98970f61224faddf107332', 'Oy2nGHpW_400x400.jpg', 'user', 'No'),
(17, 'Edgar', 'Fernandez', 'edgar@edgar.com', 'e9df320409582388be98970f61224faddf107332', 'default.png', 'user', 'No'),
(18, 'santi', 'mingez', 'santi@santi.com', 'e9df320409582388be98970f61224faddf107332', 'default.png', 'user', 'No'),
(19, 'Sonia', 'Perez', 'sonia@sonia.com', 'e9df320409582388be98970f61224faddf107332', 'default.png', 'user', 'si'),
(21, 'Javi', 'Campos', 'javier@javier.com', 'e9df320409582388be98970f61224faddf107332', 'default.png', 'user', 'No'),
(24, 'Gonzalo', 'Álvarez', 'gonzalo@gonzalo.com', 'e9df320409582388be98970f61224faddf107332', '75321626_223360245602772_3009414556137689491_n.jpg', 'user', 'No');

--
-- Disparadores `usuario`
--
DELIMITER $$
CREATE TRIGGER `trigger_asignar_ban` BEFORE INSERT ON `usuario` FOR EACH ROW BEGIN
SET NEW.ban := 'No';
END
$$
DELIMITER ;
DELIMITER $$
CREATE TRIGGER `trigger_asignar_estado` BEFORE INSERT ON `usuario` FOR EACH ROW BEGIN
SET NEW.estado = 'user';
END
$$
DELIMITER ;
DELIMITER $$
CREATE TRIGGER `trigger_asignar_foto` BEFORE INSERT ON `usuario` FOR EACH ROW BEGIN
  DECLARE foto VARCHAR(100);
  SET NEW.foto = 'default.png';
END
$$
DELIMITER ;

--
-- Índices para tablas volcadas
--

--
-- Indices de la tabla `noticia`
--
ALTER TABLE `noticia`
  ADD PRIMARY KEY (`id`),
  ADD KEY `id_user` (`id_user`);

--
-- Indices de la tabla `usuario`
--
ALTER TABLE `usuario`
  ADD PRIMARY KEY (`id_usuario`);

--
-- AUTO_INCREMENT de las tablas volcadas
--

--
-- AUTO_INCREMENT de la tabla `noticia`
--
ALTER TABLE `noticia`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=22;

--
-- AUTO_INCREMENT de la tabla `usuario`
--
ALTER TABLE `usuario`
  MODIFY `id_usuario` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=26;

--
-- Restricciones para tablas volcadas
--

--
-- Filtros para la tabla `noticia`
--
ALTER TABLE `noticia`
  ADD CONSTRAINT `noticia_ibfk_1` FOREIGN KEY (`id_user`) REFERENCES `usuario` (`id_usuario`) ON DELETE CASCADE ON UPDATE CASCADE;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
