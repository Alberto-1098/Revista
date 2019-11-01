-- phpMyAdmin SQL Dump
-- version 4.5.1
-- http://www.phpmyadmin.net
--
-- Servidor: 127.0.0.1
-- Tiempo de generación: 12-10-2019 a las 00:47:05
-- Versión del servidor: 10.1.16-MariaDB
-- Versión de PHP: 5.6.24

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de datos: `revista`
--

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `articulos`
--

CREATE TABLE `articulos` (
  `id` int(11) NOT NULL,
  `estado` text NOT NULL,
  `comentarios` text NOT NULL,
  `fecha_creacion` date NOT NULL,
  `fecha_actualizacion` date NOT NULL,
  `fecha_eliminacion` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Volcado de datos para la tabla `articulos`
--

INSERT INTO `articulos` (`id`, `estado`, `comentarios`, `fecha_creacion`, `fecha_actualizacion`, `fecha_eliminacion`) VALUES
(1, 'Activo', 'registro', '2019-10-05', '2019-10-06', '2019-10-06'),
(2, 'Activo', 'registro1', '2019-10-05', '2019-10-05', '2019-10-06'),
(7, 'Activo', 'nw,qn,qe', '2019-10-06', '0000-00-00', '2019-10-06');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `idiomas`
--

CREATE TABLE `idiomas` (
  `id` int(11) NOT NULL,
  `esta` int(1) NOT NULL,
  `codigo` text NOT NULL,
  `nombre` text NOT NULL,
  `fecha_creacion` datetime NOT NULL,
  `fecha_actualizacion` date NOT NULL,
  `fecha_eliminacion` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Volcado de datos para la tabla `idiomas`
--

INSERT INTO `idiomas` (`id`, `esta`, `codigo`, `nombre`, `fecha_creacion`, `fecha_actualizacion`, `fecha_eliminacion`) VALUES
(2, 1, 'en', 'EspaÃ±ol', '0000-00-00 00:00:00', '2019-10-09', '0000-00-00'),
(4, 1, 'Ar', 'Argentino', '0000-00-00 00:00:00', '0000-00-00', '0000-00-00'),
(5, 1, 'Fr', 'Frances', '0000-00-00 00:00:00', '2019-10-05', '0000-00-00'),
(6, 1, 'ti', 'tailandes', '0000-00-00 00:00:00', '0000-00-00', '0000-00-00'),
(8, 0, 'Fr', 'Argentina', '2019-10-05 01:01:47', '0000-00-00', '0000-00-00'),
(10, 1, 'pq', 'Israeli', '2019-10-11 23:55:21', '0000-00-00', '0000-00-00'),
(11, 1, 'ul', 'ulkle', '2019-10-11 23:56:10', '0000-00-00', '0000-00-00'),
(12, 0, 'fr', 'adfmÃ±a', '2019-10-11 23:57:51', '0000-00-00', '0000-00-00'),
(13, 1, 'nmnm', 'mn.', '2019-10-11 23:58:42', '0000-00-00', '0000-00-00');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `traduccion`
--

CREATE TABLE `traduccion` (
  `id` int(11) NOT NULL,
  `estado` int(11) NOT NULL,
  `titulo` text NOT NULL,
  `descripcion_corta` text NOT NULL,
  `texto_articulo` text NOT NULL,
  `id_idiomas` int(11) NOT NULL,
  `fecha_creacion` date NOT NULL,
  `fecha_actualizacion` date NOT NULL,
  `fecha_eliminacion` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Volcado de datos para la tabla `traduccion`
--

INSERT INTO `traduccion` (`id`, `estado`, `titulo`, `descripcion_corta`, `texto_articulo`, `id_idiomas`, `fecha_creacion`, `fecha_actualizacion`, `fecha_eliminacion`) VALUES
(8, 0, 'leer', 'kkndklwnflwdwndlwnkl', 'mnfkowejowke', 2, '2019-10-11', '0000-00-00', '0000-00-00'),
(9, 0, 'wey', 'kjerkwj|jkj', 'kjljklk', 5, '2019-10-11', '0000-00-00', '0000-00-00'),
(12, 0, 'jsdjkl', 'lkkjkljl', 'kllklk', 2, '2019-10-11', '0000-00-00', '0000-00-00'),
(13, 0, 'n', 'mnm', 'mnm', 2, '2019-10-11', '0000-00-00', '0000-00-00'),
(14, 0, 'kjrke', 'wqkemqw', 'llÃ±klÃ±k', 2, '2019-10-11', '0000-00-00', '0000-00-00');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `traduccion_articulo`
--

CREATE TABLE `traduccion_articulo` (
  `id` int(11) NOT NULL,
  `id_trad` int(11) NOT NULL,
  `id_idioma` int(11) NOT NULL,
  `traduccion` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Volcado de datos para la tabla `traduccion_articulo`
--

INSERT INTO `traduccion_articulo` (`id`, `id_trad`, `id_idioma`, `traduccion`) VALUES
(1, 8, 2, 'nkvnlxmvlmlñsmsñlmfdsmlv'),
(2, 8, 4, 'mnfv,smv,.fm.,vmd.fd'),
(3, 9, 4, 'n.n,.mkljkñjñknjnn'),
(4, 8, 6, 'klsdaksdmnfkd'),
(5, 8, 2, 'knkldn.,s kn');

--
-- Índices para tablas volcadas
--

--
-- Indices de la tabla `articulos`
--
ALTER TABLE `articulos`
  ADD PRIMARY KEY (`id`);

--
-- Indices de la tabla `idiomas`
--
ALTER TABLE `idiomas`
  ADD PRIMARY KEY (`id`);

--
-- Indices de la tabla `traduccion`
--
ALTER TABLE `traduccion`
  ADD PRIMARY KEY (`id`),
  ADD KEY `id_idiomas` (`id_idiomas`);

--
-- Indices de la tabla `traduccion_articulo`
--
ALTER TABLE `traduccion_articulo`
  ADD PRIMARY KEY (`id`),
  ADD KEY `id_trad` (`id_trad`),
  ADD KEY `id_idioma` (`id_idioma`);

--
-- AUTO_INCREMENT de las tablas volcadas
--

--
-- AUTO_INCREMENT de la tabla `articulos`
--
ALTER TABLE `articulos`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;
--
-- AUTO_INCREMENT de la tabla `idiomas`
--
ALTER TABLE `idiomas`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=14;
--
-- AUTO_INCREMENT de la tabla `traduccion`
--
ALTER TABLE `traduccion`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=15;
--
-- AUTO_INCREMENT de la tabla `traduccion_articulo`
--
ALTER TABLE `traduccion_articulo`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;
--
-- Restricciones para tablas volcadas
--

--
-- Filtros para la tabla `traduccion`
--
ALTER TABLE `traduccion`
  ADD CONSTRAINT `traduccion_ibfk_2` FOREIGN KEY (`id_idiomas`) REFERENCES `idiomas` (`id`);

--
-- Filtros para la tabla `traduccion_articulo`
--
ALTER TABLE `traduccion_articulo`
  ADD CONSTRAINT `traduccion_articulo_ibfk_1` FOREIGN KEY (`id_idioma`) REFERENCES `idiomas` (`id`),
  ADD CONSTRAINT `traduccion_articulo_ibfk_2` FOREIGN KEY (`id_trad`) REFERENCES `traduccion` (`id`);

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
