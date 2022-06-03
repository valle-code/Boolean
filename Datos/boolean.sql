-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Servidor: 127.0.0.1
-- Tiempo de generación: 03-06-2022 a las 16:27:33
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
  `descripcion` varchar(500) NOT NULL,
  `contenido` text NOT NULL,
  `foto` varchar(200) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Volcado de datos para la tabla `noticia`
--

INSERT INTO `noticia` (`id`, `id_user`, `titulo`, `descripcion`, `contenido`, `foto`) VALUES
(10, 0, 'Cookies', 'Las cookies son pequeños fragmentos de texto que los sitios web que visitas envían al navegador. Per', 'Las cookies son pequeños fragmentos de texto que los sitios web que visitas envían al navegador. Permiten que los sitios web recuerden información sobre tu visita, lo que puede hacer que sea más fácil volver a visitar los sitios y hacer que estos te resulten más útiles. Las cookies y otras tecnologías que se usan con fines de funcionalidad te permiten acceder a funciones esenciales de un servicio. Se consideran esenciales, por ejemplo, las preferencias, (como el idioma que has elegido), la información relacionada con la sesión (como el contenido de un carrito de la compra), y las optimizaciones de los productos que ayudan a mantener y mejorar ese servicio.\n\nAlgunas cookies y otras tecnologías se utilizan para recordar tus preferencias. Por ejemplo, la mayoría de las personas que usan los servicios de Google tienen en sus navegadores una cookie denominada \"NID\" o \"ENID\", dependiendo de sus opciones de cookies. Estas cookies se usan para recordar tus preferencias y otra información, como el idioma que prefieres, el número de resultados que quieres que se muestren en cada página de resultados de búsqueda (por ejemplo, 10 o 20) y si quieres que el filtro Búsqueda Segura de Google esté activado o desactivado. La cookie \"NID\" caduca 6 meses después del último uso del usuario, mientras que la cookie \"ENID\" dura 13 meses. Las cookies \"VISITOR_INFO1_LIVE\" y \"YEC\" tienen un propósito similar en YouTube y también se usan para detectar y resolver problemas con el servicio. Estas cookies tienen una duración de 6 y 13 meses, respectivamente.\n\nOtras cookies y tecnologías se usan para mantener y mejorar tu experiencia durante una sesión concreta. Por ejemplo, YouTube utiliza la cookie \"PREF\" para almacenar información como la configuración que prefieres para tus páginas y tus preferencias de reproducción; por ejemplo, las opciones de reproducción automática que has seleccionado, la reproducción aleatoria de contenido y el tamaño del reproductor. En YouTube Music, estas preferencias incluyen el volumen, el modo de repetición y la reproducción automática. Esta cookie caduca 8 meses después del último uso del usuario. La cookie \"pm_sess\" también ayuda a conservar tu sesión del navegador y tiene una duración de 30 minutos.\n\nTambién se pueden usar cookies y otras tecnologías para mejorar el rendimiento de los servicios de Google. Por ejemplo, la cookie \"CGIC\" mejora la generación de resultados de búsqueda autocompletando las consultas de búsqueda basándose en lo que introduce inicialmente un usuario. Esta cookie tiene una duración de 6 meses.\n\nGoogle usa la cookie \"CONSENT\", que tiene una duración de 2 años, para almacenar el estado de un usuario respecto a sus elecciones de cookies. La cookie \"SOCS\", que dura 13 meses, también se usa con este mismo fin.', '1366_2000.jpg'),
(13, 0, 'Hola Mundo', 'Esta es la primera publicación de la historia de Boolean. Contiene información de las intenciones de esta página.', 'Hola, Boolean es el proyecto integrador de Daniel Valle, 1DAM. La premisa de este proyecto es la de divulgar información a través de publicaciones que podrá subir cualquiera que esté registrado en esta página. Los temas a tratar pueden ir desde las más viles estafas, hasta los temas más controversiales como la política o incluso el fútbol ;) . \r\n\r\nLa única condición que existe es la de escribir con la mayor objetividad y neutralidad posible, y así crear un sitio sano en el que la información sea verídica, contrastada y y no propagandística. Fallar en este aspecto supone el BANEO inmediato de esta página. \r\n\r\nCreo que no me queda nada más por explicar, simplemente sed buenos, disfrutad y sed libres.', 'Captura de pantalla 2021-11-29 165409.jpg'),
(14, 0, 'Terraplanismo', 'El terraplanimso mata', 'Terraplanismo1​ es el nombre de la creencia precientífica de que la superficie de la Tierra es plana, en lugar de esférica. A lo largo de la historia han existido diferentes opiniones acerca de la forma de la Tierra, a partir de la idea intuitiva de que se trata de una superficie plana, hasta llegar al concepto moderno del geoide, esto es, una esfera ligeramente achatada en los polos, que corresponde a la observación desde el espacio y a los datos científicos.\r\n\r\nEn el siglo xix, cuando la idea de la Tierra como una esfera era un hecho aceptado, el escritor inglés Samuel Birley Rowbotham, propuso la idea de que en realidad era una superficie plana centrada en el polo norte.2​3​ La postura de Rowbotham fue aceptada por una sociedad religiosa estadounidense, pero pronto cayó en el olvido. En el siglo xxi, a partir del uso masivo de Internet, se popularizó a través de foros virtuales y canales de Youtube, desde donde fue aceptada por algunos teóricos de la conspiración.4​ 5​.\r\n\r\nLas cosmogonías de las primeras civilizaciones, sostuvieron, de manera implícita, la idea de que la Tierra es una superficie plana, cubierta por una cúpula. En los extremos del Mundo, según esta noción, existían altas montañas, o pilares, que soportaban dicha cúpula. Esta tierra tenía la forma de un disco o de un cuadrángulo y, generalmente, se consideraba que la rodeaba un inmenso mar llamado, por los griegos, río Océano. Esta imagen del Mundo, era común tanto en Mesopotamia, como en la India, Egipto, Grecia y las sociedades del Levante.7​8​\r\n\r\nEn efecto, en la mitología caldea, el mundo se representa como un disco redondo y plano que flota en el océano, y esas imagen fue la premisa para los primeros mapas griegos, como los de Anaximandro9​ y Hecateo de Mileto. Tales de Mileto también concebía a la Tierra como un disco plano.10​11​En las escasas, e incidentales, menciones de la Biblia sobre la forma del mundo, se observa la misma idea.', '_99893285_tierraplana.jpg'),
(15, 0, 'Yo y el mundo', 'La puta mejor serie', 'Boy Meets World (conocida como Yo y el mundo en España y como Aprendiendo a vivir en Hispanoamérica) fue una comedia de situación estadounidense bajo calificacion TV-PG protagonizada por Ben Savage, quien interpreta a un adolescente que a lo largo de la serie crece y enfrenta problemas con sus amigos, su familia, su novia y sus estudios. Fue estrenada el 24 de septiembre de 1993 en la cadena ABC y finalizó el 5 de mayo de 2000. En total cuenta con 158 episodios repartidos en siete temporadas. Touchstone Television fue la casa productora encargada de emitir al aire la serie. El productor es Michael Jacobs creador de Dinosaurs y Girl’s Meets World. La primera temporada de la serie comienza con Cory Matthews (Ben Savage) y su mejor amigo Shawn Hunter (Rider Strong), dos estudiantes de sexto grado que provienen de diferentes orígenes. Ellos no se preocupan por el trabajo escolar, a pesar de los esfuerzos de George Feeny (William Daniels), su maestro de toda la vida. Sus intereses principales son los deportes, aunque más tarde Shawn y Cory comienzan a expresar su interés por las chicas. Esta temporada se centra específicamente en las relaciones de Cory con los otros personajes de la serie. Él empieza a entender más a sus padres y a respetarlos por todo lo que hacen. La relación con su hermano mayor Eric (Will Friedle) se vuelve confusa dada a la obsesión constante de Eric con las chicas, y esto es ajeno a Cory. Él, se vuelve más protector con su hermana pequeña Morgan. Cory también comienza a mostrar interés en Topanga (Danielle Fishel), una chica inteligente de su clase, a pesar de que a menudo esconde esto insultándola y burlándose de ella. Cory y Topanga se conocen desde que eran pequeños, por lo que el romance en su relación es aún más predecible. Cory, a menudo debe elegir entre hacer lo que Shawn decide o hacer lo que es mejor para su amistad.', 'descarga.jfif');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `usuario`
--

CREATE TABLE `usuario` (
  `id` int(11) NOT NULL,
  `nombre` varchar(20) NOT NULL,
  `apellidos` varchar(20) NOT NULL,
  `email` varchar(20) NOT NULL,
  `contraseña` varchar(160) NOT NULL,
  `foto` varchar(100) NOT NULL,
  `estado` varchar(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Volcado de datos para la tabla `usuario`
--

INSERT INTO `usuario` (`id`, `nombre`, `apellidos`, `email`, `contraseña`, `foto`, `estado`) VALUES
(4, 'Daniel', 'Valle', 'tableclanvalle@gmail', 'asdf1234_', '805550_20211126170424_1.png', 'admin'),
(6, 'Daniel', 'Valle', 'danivalle.code@gmail', 'WSO_Dani03', '805550_20211126170424_1.png', 'user'),
(7, 'María', 'Valle', 'edgarbrba@gmail.com', 'jhagdsghashjkd', 'default.png', 'user'),
(8, 'daniel', 'valle', 'daniel@daniel.com', 'asdf1234_', 'default.png', 'user'),
(9, 'daniel', 'valle', 'daniel@daniel.com', 'asdf1234_', 'default.png', 'user'),
(10, 'tableclan', 'valle', 'tableclanvalle@table', 'e9df320409582388be98970f61224faddf107332', 'default.png', 'user');

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
  SET NEW.foto = 'default.png';
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
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=16;

--
-- AUTO_INCREMENT de la tabla `usuario`
--
ALTER TABLE `usuario`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
