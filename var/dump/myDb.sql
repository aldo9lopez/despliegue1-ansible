

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de datos: `castores_prueba`
--

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `comentario`
--

CREATE TABLE `comentario` (
  `idcomentario` int(11) NOT NULL,
  `personal` int(11) NOT NULL,
  `nota` int(11) NOT NULL,
  `comentario` text COLLATE utf8_spanish_ci NOT NULL,
  `fecha` date NOT NULL,
  `hora` time NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_spanish_ci;

--
-- Volcado de datos para la tabla `comentario`
--

INSERT INTO `comentario` (`idcomentario`, `personal`, `nota`, `comentario`, `fecha`, `hora`) VALUES
(1, 3, 3, 'Estoy de acuerdo', '2021-10-16', '20:55:58'),
(2, 3, 3, 'Muy bien', '2021-10-16', '20:56:38'),
(3, 1, 3, 'Muy bien de acuerdo', '2021-10-16', '20:57:24'),
(4, 2, 3, 'Correcto!', '2021-10-16', '22:11:40'),
(5, 1, 3, 'Todo bien todo correcto', '2021-10-17', '20:13:00'),
(6, 1, 3, 'Bien bien', '2021-10-17', '20:14:00'),
(7, 4, 5, 'Que tal!', '2021-10-17', '20:34:00');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `nota`
--

CREATE TABLE `nota` (
  `idnota` int(11) NOT NULL,
  `personal` int(11) NOT NULL,
  `contenido` text COLLATE utf8_spanish_ci NOT NULL,
  `fecha` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_spanish_ci;

--
-- Volcado de datos para la tabla `nota`
--

INSERT INTO `nota` (`idnota`, `personal`, `contenido`, `fecha`) VALUES
(1, 1, 'Hola que tal esta es una nota', '2021-10-16'),
(2, 3, 'Hijos y familiares de Alejandra Cuevas Morán protestaron este sábado frente a la Fiscalía General de la República (FGR) para exigir la liberación de la mujer de 68 años, quien se encuentra presa en el penal de Santa Martha Acatitla desde hace un año, presuntamente por un delito fabricado.', '2021-10-16'),
(3, 3, 'A comienzos del segundo semestre del año, la Asociación Internacional de Transporte Aéreo actualizó su listado de pasaportes con acceso a más países, lo cual es una medición de confianza internacional. En esta ocasión, te presentamos cuáles son los pasaportes más poderosos de América Latina.', '2021-10-16'),
(4, 1, 'Según esos criterios, analizamos las 10 ciudades catalogadas como las más bonitas del mundo:\r\n\r\nKioto, Japón\r\n\r\nDubrovnik, Croacia\r\n\r\nSan Petersburgo, Rusia\r\n\r\nPraga, República Checa\r\n\r\nCiudad del Cabo\r\n\r\nBergen, Noruega\r\n\r\nEstambul, Turquía\r\n\r\nSan Francisco, Estados Unidos\r\n\r\nVenecia, Italia\r\n\r\nSan Miguel de Allende, México\r\n\r\nKioto, Japón', '2021-10-16'),
(5, 1, 'Al llamar a promover la unión familiar y fortalecer valores, \nel presidente Andrés Manuel López Obrador llamó a los padres\n y madres de familia a poner atención a sus hijos, pues afirmó\n que muchos de los videojuegos de Nintendo son violentos y\n tóxicos, además que recientemente se usó uno de estos \nvideojuegos como medio para secuestrar a menores, \npor lo que “no deben de ser vistos por los niños”.', '2021-10-17');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `personal`
--

CREATE TABLE `personal` (
  `idpersonal` int(11) NOT NULL,
  `apepaterno` varchar(80) COLLATE utf8_spanish_ci NOT NULL,
  `apematerno` varchar(80) COLLATE utf8_spanish_ci NOT NULL,
  `nombre` varchar(100) COLLATE utf8_spanish_ci NOT NULL,
  `direccion` varchar(180) COLLATE utf8_spanish_ci NOT NULL,
  `fechadeingreso` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_spanish_ci;

--
-- Volcado de datos para la tabla `personal`
--

INSERT INTO `personal` (`idpersonal`, `apepaterno`, `apematerno`, `nombre`, `direccion`, `fechadeingreso`) VALUES
(1, 'Lopez', 'López', 'Aldo', 'Jardines de la E. 209', '2009-12-12'),
(2, 'Garcia', 'Perez', 'Patricia', 'Del Sol 212', '2018-01-10'),
(3, 'Rodriguez', 'Juarez', 'Tomas', 'Prada 312', '2020-05-12'),
(4, 'Moncada', 'Elizalde', 'Ernesto', 'Cinco de Mayo 551', '2019-10-07'),
(5, 'Tancitare', 'Stewel', 'Kenia', 'Esmeraldas 904', '2018-02-11');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `registrousuario`
--

CREATE TABLE `registrousuario` (
  `idregistro` int(11) NOT NULL,
  `personal` int(11) NOT NULL,
  `nombreusuario` varchar(60) COLLATE utf8_spanish_ci NOT NULL,
  `password` varchar(100) COLLATE utf8_spanish_ci NOT NULL,
  `tipo` enum('Interno','Externo') COLLATE utf8_spanish_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_spanish_ci;

--
-- Volcado de datos para la tabla `registrousuario`
--

INSERT INTO `registrousuario` (`idregistro`, `personal`, `nombreusuario`, `password`, `tipo`) VALUES
(1, 1, 'aldolopez', 'aldo123', 'Interno'),
(2, 2, 'paty', 'paty123', 'Externo'),
(3, 3, 'tomas', 'tomas123', 'Interno'),
(4, 4, 'ernesto', 'ernesto123', 'Externo'),
(5, 5, 'kenia', 'kenia123', 'Externo');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `respuesta`
--

CREATE TABLE `respuesta` (
  `idrespuesta` int(11) NOT NULL,
  `personal` int(11) NOT NULL,
  `comentario` int(11) NOT NULL,
  `respuesta` text COLLATE utf8_spanish_ci NOT NULL,
  `fecha` date NOT NULL,
  `hora` time NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_spanish_ci;

--
-- Volcado de datos para la tabla `respuesta`
--

INSERT INTO `respuesta` (`idrespuesta`, `personal`, `comentario`, `respuesta`, `fecha`, `hora`) VALUES
(1, 1, 1, 'Muy bien', '2021-10-16', '21:20:59'),
(2, 1, 2, 'Excelente', '2021-10-16', '21:21:13'),
(3, 2, 2, 'Si es cierto', '2021-10-16', '22:11:33'),
(4, 1, 2, 'Hola!', '2021-10-17', '20:32:00'),
(5, 1, 4, 'Bien bien', '2021-10-17', '20:33:00'),
(6, 4, 4, 'Si', '2021-10-17', '20:35:00');

--
-- Índices para tablas volcadas
--

--
-- Indices de la tabla `comentario`
--
ALTER TABLE `comentario`
  ADD PRIMARY KEY (`idcomentario`),
  ADD KEY `fk_foreign_personal_com` (`personal`),
  ADD KEY `fk_foreign_nota_com` (`nota`);

--
-- Indices de la tabla `nota`
--
ALTER TABLE `nota`
  ADD PRIMARY KEY (`idnota`),
  ADD KEY `fk_foreign_personal_nota` (`personal`);

--
-- Indices de la tabla `personal`
--
ALTER TABLE `personal`
  ADD PRIMARY KEY (`idpersonal`);

--
-- Indices de la tabla `registrousuario`
--
ALTER TABLE `registrousuario`
  ADD PRIMARY KEY (`idregistro`),
  ADD KEY `fk_foreign_personal_reg` (`personal`);

--
-- Indices de la tabla `respuesta`
--
ALTER TABLE `respuesta`
  ADD PRIMARY KEY (`idrespuesta`),
  ADD KEY `fk_foreign_personal_resp` (`personal`),
  ADD KEY `fk_foreign_com_res` (`comentario`);

--
-- AUTO_INCREMENT de las tablas volcadas
--

--
-- AUTO_INCREMENT de la tabla `comentario`
--
ALTER TABLE `comentario`
  MODIFY `idcomentario` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT de la tabla `nota`
--
ALTER TABLE `nota`
  MODIFY `idnota` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT de la tabla `personal`
--
ALTER TABLE `personal`
  MODIFY `idpersonal` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT de la tabla `registrousuario`
--
ALTER TABLE `registrousuario`
  MODIFY `idregistro` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT de la tabla `respuesta`
--
ALTER TABLE `respuesta`
  MODIFY `idrespuesta` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- Restricciones para tablas volcadas
--

--
-- Filtros para la tabla `comentario`
--
ALTER TABLE `comentario`
  ADD CONSTRAINT `fk_foreign_nota_com` FOREIGN KEY (`nota`) REFERENCES `nota` (`idnota`),
  ADD CONSTRAINT `fk_foreign_personal_com` FOREIGN KEY (`personal`) REFERENCES `personal` (`idpersonal`);

--
-- Filtros para la tabla `nota`
--
ALTER TABLE `nota`
  ADD CONSTRAINT `fk_foreign_personal_nota` FOREIGN KEY (`personal`) REFERENCES `personal` (`idpersonal`);

--
-- Filtros para la tabla `registrousuario`
--
ALTER TABLE `registrousuario`
  ADD CONSTRAINT `fk_foreign_personal_reg` FOREIGN KEY (`personal`) REFERENCES `personal` (`idpersonal`);

--
-- Filtros para la tabla `respuesta`
--
ALTER TABLE `respuesta`
  ADD CONSTRAINT `fk_foreign_com_res` FOREIGN KEY (`comentario`) REFERENCES `comentario` (`idcomentario`),
  ADD CONSTRAINT `fk_foreign_personal_resp` FOREIGN KEY (`personal`) REFERENCES `personal` (`idpersonal`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
