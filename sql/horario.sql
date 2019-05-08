-- phpMyAdmin SQL Dump
-- version 4.8.3
-- https://www.phpmyadmin.net/
--
-- Servidor: 127.0.0.1
-- Tiempo de generación: 08-05-2019 a las 17:51:37
-- Versión del servidor: 10.1.37-MariaDB
-- Versión de PHP: 7.2.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de datos: `horario`
--

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `bitacora`
--

CREATE TABLE `bitacora` (
  `idbitacora` int(11) NOT NULL,
  `fecha` date NOT NULL,
  `materia` varchar(100) CHARACTER SET utf8 COLLATE utf8_spanish_ci NOT NULL,
  `alumnos` varchar(500) CHARACTER SET utf8 COLLATE utf8_spanish_ci NOT NULL,
  `descripcion` varchar(600) CHARACTER SET utf8 COLLATE utf8_spanish_ci NOT NULL,
  `noTrabajador` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Volcado de datos para la tabla `bitacora`
--

INSERT INTO `bitacora` (`idbitacora`, `fecha`, `materia`, `alumnos`, `descripcion`, `noTrabajador`) VALUES
(5, '2019-04-30', 'Ing. Software 2', 'Arturo, Lucia', 'Se aclaró una duda', 100325467),
(6, '2019-04-30', 'Administración', 'Lucia', 'Se dieron resultados del examen con retroalimentación', 100747632),
(7, '2019-04-30', 'Administración de Proyectos', 'Carlos, Juan, Mireya', 'Se hicieron aclaraciones sobre el examen y se entregó el proyecto final', 100325467),
(8, '2019-04-30', 'POO2', 'Ricardo, Emilia', 'Se aclaró dudas acerca del proyecto final al igual que el avance del mismo', 201527112),
(9, '2019-04-30', 'Administración de Proyectos', 'Jose y Lupita', 'Se les reprobó', 201527112);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `jueves`
--

CREATE TABLE `jueves` (
  `noTrabajador` int(11) NOT NULL,
  `siete` varchar(50) CHARACTER SET utf8 COLLATE utf8_spanish_ci NOT NULL,
  `ocho` varchar(50) CHARACTER SET utf8 COLLATE utf8_spanish_ci NOT NULL,
  `nueve` varchar(50) CHARACTER SET utf8 COLLATE utf8_spanish_ci NOT NULL,
  `diez` varchar(50) CHARACTER SET utf8 COLLATE utf8_spanish_ci NOT NULL,
  `once` varchar(50) CHARACTER SET utf8 COLLATE utf8_spanish_ci NOT NULL,
  `doce` varchar(50) CHARACTER SET utf8 COLLATE utf8_spanish_ci NOT NULL,
  `trece` varchar(50) CHARACTER SET utf8 COLLATE utf8_spanish_ci NOT NULL,
  `catorce` varchar(50) CHARACTER SET utf8 COLLATE utf8_spanish_ci NOT NULL,
  `quince` varchar(50) CHARACTER SET utf8 COLLATE utf8_spanish_ci NOT NULL,
  `diezseis` varchar(50) CHARACTER SET utf8 COLLATE utf8_spanish_ci NOT NULL,
  `diezsiete` varchar(45) CHARACTER SET utf8 COLLATE utf8_spanish_ci NOT NULL,
  `diezocho` varchar(45) CHARACTER SET utf8 COLLATE utf8_spanish_ci NOT NULL,
  `dieznueve` varchar(45) CHARACTER SET utf8 COLLATE utf8_spanish_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Volcado de datos para la tabla `jueves`
--

INSERT INTO `jueves` (`noTrabajador`, `siete`, `ocho`, `nueve`, `diez`, `once`, `doce`, `trece`, `catorce`, `quince`, `diezseis`, `diezsiete`, `diezocho`, `dieznueve`) VALUES
(100325467, '', 'InvestigaciÃ³n', 'Docencia', 'Docencia', 'Docencia', 'Docencia', '', 'GestiÃ³n AcadÃ©mica', 'GestiÃ³n AcadÃ©mica', 'InvestigaciÃ³n', '', '', ''),
(100525876, 'Gestion Academica', 'Tutoria', '', '', 'Docencia', 'Docencia', '', 'Asesoria', '', 'Investigacion', 'Gestion Academica', '', ''),
(100747632, 'InvestigaciÃ³n', '', '', '', '', '', '', '', '', '', '', '', ''),
(201527112, 'GestiÃ³n AcadÃ©mica', '', '', '', '', '', '', '', '', '', '', '', '');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `lunes`
--

CREATE TABLE `lunes` (
  `noTrabajador` int(11) NOT NULL,
  `siete` varchar(50) CHARACTER SET utf8 COLLATE utf8_spanish_ci NOT NULL,
  `ocho` varchar(50) CHARACTER SET utf8 COLLATE utf8_spanish_ci NOT NULL,
  `nueve` varchar(50) CHARACTER SET utf8 COLLATE utf8_spanish_ci NOT NULL,
  `diez` varchar(50) CHARACTER SET utf8 COLLATE utf8_spanish_ci NOT NULL,
  `once` varchar(50) CHARACTER SET utf8 COLLATE utf8_spanish_ci NOT NULL,
  `doce` varchar(50) CHARACTER SET utf8 COLLATE utf8_spanish_ci NOT NULL,
  `trece` varchar(50) CHARACTER SET utf8 COLLATE utf8_spanish_ci NOT NULL,
  `catorce` varchar(50) CHARACTER SET utf8 COLLATE utf8_spanish_ci NOT NULL,
  `quince` varchar(50) CHARACTER SET utf8 COLLATE utf8_spanish_ci NOT NULL,
  `diezseis` varchar(50) CHARACTER SET utf8 COLLATE utf8_spanish_ci NOT NULL,
  `diezsiete` varchar(45) CHARACTER SET utf8 COLLATE utf8_spanish_ci NOT NULL,
  `diezocho` varchar(45) CHARACTER SET utf8 COLLATE utf8_spanish_ci NOT NULL,
  `dieznueve` varchar(45) CHARACTER SET utf8 COLLATE utf8_spanish_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Volcado de datos para la tabla `lunes`
--

INSERT INTO `lunes` (`noTrabajador`, `siete`, `ocho`, `nueve`, `diez`, `once`, `doce`, `trece`, `catorce`, `quince`, `diezseis`, `diezsiete`, `diezocho`, `dieznueve`) VALUES
(100325467, 'AsesorÃ­a', 'AsesorÃ­a', '', '', 'Docencia', 'Docencia', 'GestiÃ³n AcadÃ©mica', 'GestiÃ³n AcadÃ©mica', '', '', '', '', ''),
(100525876, 'Asesoria', 'Asesoria', 'Docencia', '', '', 'Asesoria', 'Docencia', 'Investigacion', '', '', 'Gestion Academica', '', ''),
(100747632, 'TutorÃ­a', 'AsesorÃ­a', '', '', '', '', '', '', '', '', '', '', ''),
(201527112, 'TutorÃ­a', '', '', '', '', '', '', '', '', '', '', '', '');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `martes`
--

CREATE TABLE `martes` (
  `noTrabajador` int(11) NOT NULL,
  `siete` varchar(50) CHARACTER SET utf8 COLLATE utf8_spanish_ci NOT NULL,
  `ocho` varchar(50) CHARACTER SET utf8 COLLATE utf8_spanish_ci NOT NULL,
  `nueve` varchar(50) CHARACTER SET utf8 COLLATE utf8_spanish_ci NOT NULL,
  `diez` varchar(50) CHARACTER SET utf8 COLLATE utf8_spanish_ci NOT NULL,
  `once` varchar(50) CHARACTER SET utf8 COLLATE utf8_spanish_ci NOT NULL,
  `doce` varchar(50) CHARACTER SET utf8 COLLATE utf8_spanish_ci NOT NULL,
  `trece` varchar(50) CHARACTER SET utf8 COLLATE utf8_spanish_ci NOT NULL,
  `catorce` varchar(50) CHARACTER SET utf8 COLLATE utf8_spanish_ci NOT NULL,
  `quince` varchar(50) CHARACTER SET utf8 COLLATE utf8_spanish_ci NOT NULL,
  `diezseis` varchar(50) CHARACTER SET utf8 COLLATE utf8_spanish_ci NOT NULL,
  `diezsiete` varchar(45) CHARACTER SET utf8 COLLATE utf8_spanish_ci NOT NULL,
  `diezocho` varchar(45) CHARACTER SET utf8 COLLATE utf8_spanish_ci NOT NULL,
  `dieznueve` varchar(45) CHARACTER SET utf8 COLLATE utf8_spanish_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Volcado de datos para la tabla `martes`
--

INSERT INTO `martes` (`noTrabajador`, `siete`, `ocho`, `nueve`, `diez`, `once`, `doce`, `trece`, `catorce`, `quince`, `diezseis`, `diezsiete`, `diezocho`, `dieznueve`) VALUES
(100325467, 'Docencia', 'Docencia', 'TutorÃ­a', 'TutorÃ­a', 'Docencia', 'Docencia', 'AsesorÃ­a', 'GestiÃ³n AcadÃ©mica', '', '', '', '', ''),
(100525876, 'Tutoria', '', 'Tutoria', '', 'Asesoria', '', 'Asesoria', '', 'Docencia', '', 'Investigacion', '', ''),
(100747632, 'AsesorÃ­a', '', '', '', '', '', '', '', '', '', '', '', ''),
(201527112, 'AsesorÃ­a', '', '', '', '', '', '', '', '', '', '', '', '');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `miercoles`
--

CREATE TABLE `miercoles` (
  `noTrabajador` int(11) NOT NULL,
  `siete` varchar(50) CHARACTER SET utf8 COLLATE utf8_spanish_ci NOT NULL,
  `ocho` varchar(50) CHARACTER SET utf8 COLLATE utf8_spanish_ci NOT NULL,
  `nueve` varchar(50) CHARACTER SET utf8 COLLATE utf8_spanish_ci NOT NULL,
  `diez` varchar(50) CHARACTER SET utf8 COLLATE utf8_spanish_ci NOT NULL,
  `once` varchar(50) CHARACTER SET utf8 COLLATE utf8_spanish_ci NOT NULL,
  `doce` varchar(50) CHARACTER SET utf8 COLLATE utf8_spanish_ci NOT NULL,
  `trece` varchar(50) CHARACTER SET utf8 COLLATE utf8_spanish_ci NOT NULL,
  `catorce` varchar(50) CHARACTER SET utf8 COLLATE utf8_spanish_ci NOT NULL,
  `quince` varchar(50) CHARACTER SET utf8 COLLATE utf8_spanish_ci NOT NULL,
  `diezseis` varchar(50) CHARACTER SET utf8 COLLATE utf8_spanish_ci NOT NULL,
  `diezsiete` varchar(45) CHARACTER SET utf8 COLLATE utf8_spanish_ci NOT NULL,
  `diezocho` varchar(45) CHARACTER SET utf8 COLLATE utf8_spanish_ci NOT NULL,
  `dieznueve` varchar(45) CHARACTER SET utf8 COLLATE utf8_spanish_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Volcado de datos para la tabla `miercoles`
--

INSERT INTO `miercoles` (`noTrabajador`, `siete`, `ocho`, `nueve`, `diez`, `once`, `doce`, `trece`, `catorce`, `quince`, `diezseis`, `diezsiete`, `diezocho`, `dieznueve`) VALUES
(100325467, 'TutorÃ­a', 'TutorÃ­a', '', 'Docencia', 'Docencia', 'AsesorÃ­a', '', '', 'GestiÃ³n AcadÃ©mica', '', '', '', ''),
(100525876, 'Docencia', 'Asesoria', 'Asesoria', 'Tutoria', '', 'Tutoria', 'Docencia', 'Tutoria', 'Asesoria', 'Investigacion', '', 'Gestion Academica', ''),
(100747632, 'GestiÃ³n AcadÃ©mica', '', '', '', '', '', '', '', '', '', '', '', ''),
(201527112, 'InvestigaciÃ³n', '', '', '', '', '', '', '', '', '', '', '', '');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `profesor`
--

CREATE TABLE `profesor` (
  `noTrabajador` int(11) NOT NULL,
  `contra` varchar(8) CHARACTER SET utf8 NOT NULL,
  `nombre` varchar(100) CHARACTER SET utf8 COLLATE utf8_spanish_ci NOT NULL,
  `email` varchar(250) CHARACTER SET utf8 NOT NULL,
  `cubiculo` varchar(20) CHARACTER SET utf8 NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Volcado de datos para la tabla `profesor`
--

INSERT INTO `profesor` (`noTrabajador`, `contra`, `nombre`, `email`, `cubiculo`) VALUES
(100325467, 'paty', 'Patricia Silva Sanchez', 'paty@buap.mx', '302-CC04'),
(100525876, 'josue', 'Josue Perez Lucero', 'josue@buap.mx', '204-CC03'),
(100747632, 'fulas', 'Fulano Perez Menguiano', 'fulanos@buap.mx', '102-CC02'),
(201527112, 'angeles', 'Jose Arcangeles Garcia', 'angeles@buap.mx', '203-CC03');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `viernes`
--

CREATE TABLE `viernes` (
  `noTrabajador` int(11) NOT NULL,
  `siete` varchar(50) CHARACTER SET utf8 COLLATE utf8_spanish_ci NOT NULL,
  `ocho` varchar(50) CHARACTER SET utf8 COLLATE utf8_spanish_ci NOT NULL,
  `nueve` varchar(50) CHARACTER SET utf8 COLLATE utf8_spanish_ci NOT NULL,
  `diez` varchar(50) CHARACTER SET utf8 COLLATE utf8_spanish_ci NOT NULL,
  `once` varchar(50) CHARACTER SET utf8 COLLATE utf8_spanish_ci NOT NULL,
  `doce` varchar(50) CHARACTER SET utf8 COLLATE utf8_spanish_ci NOT NULL,
  `trece` varchar(50) CHARACTER SET utf8 COLLATE utf8_spanish_ci NOT NULL,
  `catorce` varchar(50) CHARACTER SET utf8 COLLATE utf8_spanish_ci NOT NULL,
  `quince` varchar(50) CHARACTER SET utf8 COLLATE utf8_spanish_ci NOT NULL,
  `diezseis` varchar(50) CHARACTER SET utf8 COLLATE utf8_spanish_ci NOT NULL,
  `diezsiete` varchar(45) CHARACTER SET utf8 COLLATE utf8_spanish_ci NOT NULL,
  `diezocho` varchar(45) CHARACTER SET utf8 COLLATE utf8_spanish_ci NOT NULL,
  `dieznueve` varchar(45) CHARACTER SET utf32 COLLATE utf32_spanish_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Volcado de datos para la tabla `viernes`
--

INSERT INTO `viernes` (`noTrabajador`, `siete`, `ocho`, `nueve`, `diez`, `once`, `doce`, `trece`, `catorce`, `quince`, `diezseis`, `diezsiete`, `diezocho`, `dieznueve`) VALUES
(100325467, '', '', 'TutorÃ­a', 'AsesorÃ­a', 'InvestigaciÃ³n', 'InvestigaciÃ³n', 'TutorÃ­a', 'InvestigaciÃ³n', '', '', '', '', ''),
(100525876, 'Investigacion', 'Investigacion', '', '', 'Asesoria', 'Docencia', 'Asesoria', '', '', 'Gestion Academica', 'Gestion Academica', '', ''),
(100747632, 'Docencia', '', '', '', '', '', '', '', '', '', '', '', ''),
(201527112, 'GestiÃ³n AcadÃ©mica', '', '', '', '', '', '', '', '', '', '', '', '');

--
-- Índices para tablas volcadas
--

--
-- Indices de la tabla `bitacora`
--
ALTER TABLE `bitacora`
  ADD PRIMARY KEY (`idbitacora`),
  ADD KEY `noTrabajador` (`noTrabajador`);

--
-- Indices de la tabla `jueves`
--
ALTER TABLE `jueves`
  ADD PRIMARY KEY (`noTrabajador`);

--
-- Indices de la tabla `lunes`
--
ALTER TABLE `lunes`
  ADD PRIMARY KEY (`noTrabajador`);

--
-- Indices de la tabla `martes`
--
ALTER TABLE `martes`
  ADD PRIMARY KEY (`noTrabajador`);

--
-- Indices de la tabla `miercoles`
--
ALTER TABLE `miercoles`
  ADD PRIMARY KEY (`noTrabajador`);

--
-- Indices de la tabla `profesor`
--
ALTER TABLE `profesor`
  ADD PRIMARY KEY (`noTrabajador`);

--
-- Indices de la tabla `viernes`
--
ALTER TABLE `viernes`
  ADD PRIMARY KEY (`noTrabajador`);

--
-- AUTO_INCREMENT de las tablas volcadas
--

--
-- AUTO_INCREMENT de la tabla `bitacora`
--
ALTER TABLE `bitacora`
  MODIFY `idbitacora` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;

--
-- Restricciones para tablas volcadas
--

--
-- Filtros para la tabla `bitacora`
--
ALTER TABLE `bitacora`
  ADD CONSTRAINT `bitacora_ibfk_1` FOREIGN KEY (`noTrabajador`) REFERENCES `profesor` (`noTrabajador`);

--
-- Filtros para la tabla `jueves`
--
ALTER TABLE `jueves`
  ADD CONSTRAINT `fk_Lunes_Profesor000` FOREIGN KEY (`noTrabajador`) REFERENCES `profesor` (`noTrabajador`) ON DELETE NO ACTION ON UPDATE NO ACTION;

--
-- Filtros para la tabla `lunes`
--
ALTER TABLE `lunes`
  ADD CONSTRAINT `fk_Lunes_Profesor` FOREIGN KEY (`noTrabajador`) REFERENCES `profesor` (`noTrabajador`) ON DELETE NO ACTION ON UPDATE NO ACTION;

--
-- Filtros para la tabla `martes`
--
ALTER TABLE `martes`
  ADD CONSTRAINT `fk_Lunes_Profesor0` FOREIGN KEY (`noTrabajador`) REFERENCES `profesor` (`noTrabajador`) ON DELETE NO ACTION ON UPDATE NO ACTION;

--
-- Filtros para la tabla `miercoles`
--
ALTER TABLE `miercoles`
  ADD CONSTRAINT `fk_Lunes_Profesor00` FOREIGN KEY (`noTrabajador`) REFERENCES `profesor` (`noTrabajador`) ON DELETE NO ACTION ON UPDATE NO ACTION;

--
-- Filtros para la tabla `viernes`
--
ALTER TABLE `viernes`
  ADD CONSTRAINT `fk_Lunes_Profesor001` FOREIGN KEY (`noTrabajador`) REFERENCES `profesor` (`noTrabajador`) ON DELETE NO ACTION ON UPDATE NO ACTION;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
