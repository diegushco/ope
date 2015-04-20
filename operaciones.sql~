-- phpMyAdmin SQL Dump
-- version 3.5.2.2
-- http://www.phpmyadmin.net
--
-- Servidor: 127.0.0.1
-- Tiempo de generación: 06-06-2014 a las 22:45:42
-- Versión del servidor: 5.5.27
-- Versión de PHP: 5.4.7

SET SQL_MODE="NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Base de datos: `operaciones`
--

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `aldea`
--

CREATE TABLE IF NOT EXISTS `aldea` (
  `Id_Aldea` int(11) NOT NULL AUTO_INCREMENT,
  `Existe` int(11) NOT NULL DEFAULT '1',
  `Nombre` char(255) NOT NULL,
  `Id_Ciudad` int(11) NOT NULL,
  PRIMARY KEY (`Id_Aldea`),
  KEY `RefCiudad551` (`Id_Ciudad`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=3 ;

--
-- Volcado de datos para la tabla `aldea`
--

INSERT INTO `aldea` (`Id_Aldea`, `Existe`, `Nombre`, `Id_Ciudad`) VALUES
(1, 1, 'Prueba 1', 10),
(2, 1, 'Prueba 222', 11);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `bitacora`
--

CREATE TABLE IF NOT EXISTS `bitacora` (
  `Id_Bitacora` int(11) NOT NULL AUTO_INCREMENT,
  `FechaHora` datetime NOT NULL,
  `Observacion` char(250) DEFAULT NULL,
  `Url` char(250) DEFAULT NULL,
  `Ip` char(255) DEFAULT NULL,
  `Id_Usuario` int(11) NOT NULL,
  PRIMARY KEY (`Id_Bitacora`),
  KEY `RefUsuario881` (`Id_Usuario`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1 AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `categoria`
--

CREATE TABLE IF NOT EXISTS `categoria` (
  `Id_Categoria` int(11) NOT NULL AUTO_INCREMENT,
  `Existe` int(11) NOT NULL DEFAULT '1',
  `Nombre` char(255) NOT NULL,
  `Descripcion` char(255) DEFAULT NULL,
  PRIMARY KEY (`Id_Categoria`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=3 ;

--
-- Volcado de datos para la tabla `categoria`
--

INSERT INTO `categoria` (`Id_Categoria`, `Existe`, `Nombre`, `Descripcion`) VALUES
(1, 1, 'Incendios', NULL),
(2, 1, 'Luvias', NULL);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `ciudad`
--

CREATE TABLE IF NOT EXISTS `ciudad` (
  `Id_Ciudad` int(11) NOT NULL AUTO_INCREMENT,
  `Existe` int(11) DEFAULT '1',
  `Nombre` char(255) DEFAULT NULL,
  `Id_Parroquia` int(11) NOT NULL,
  PRIMARY KEY (`Id_Ciudad`),
  KEY `RefMunicipio371` (`Id_Parroquia`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=37 ;

--
-- Volcado de datos para la tabla `ciudad`
--

INSERT INTO `ciudad` (`Id_Ciudad`, `Existe`, `Nombre`, `Id_Parroquia`) VALUES
(10, 1, 'Cordero', 7),
(11, 1, 'Las Mesas', 9),
(12, 1, 'ColÃ³n', 10),
(13, 1, 'San Antonio', 13),
(14, 1, 'TÃ¡riba', 17),
(15, 1, 'Santa Ana', 20),
(16, 1, 'El PiÃ±al', 21),
(17, 1, 'San JosÃ© de BolÃ­var', 24),
(18, 1, 'La FrÃ­a', 25),
(19, 1, 'Palmira', 28),
(20, 1, 'Capacho Nuevo', 29),
(21, 1, 'La Grita', 32),
(22, 1, 'El Cobre', 35),
(23, 1, 'Rubio', 36),
(24, 1, 'Umuquena', 74),
(25, 1, 'Capacho Viejo', 40),
(26, 1, 'Abejales', 43),
(27, 1, 'Lobatera', 47),
(28, 1, 'Michelena', 49),
(29, 1, 'Coloncito', 50),
(30, 1, 'UreÃ±a', 52),
(31, 1, 'La Tendida', 56),
(32, 1, 'Seboruco', 64),
(33, 1, 'San SimÃ³n', 65),
(34, 1, 'Queniquea', 66),
(35, 1, 'San Josecito', 69),
(36, 1, 'Pregonero', 70);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `cs_afectado`
--

CREATE TABLE IF NOT EXISTS `cs_afectado` (
  `Id_Afectado` int(11) NOT NULL AUTO_INCREMENT,
  `Cedula` char(15) NOT NULL,
  `Nombre` char(200) NOT NULL,
  `Apellido` char(200) NOT NULL,
  `Direccion` char(250) NOT NULL,
  `Sexo` char(50) NOT NULL,
  `Nacionalidad` char(20) DEFAULT NULL,
  `Fecha_Nacimiento` date NOT NULL,
  `Estado_Civil` char(50) DEFAULT NULL,
  `Situacion_Conyugal` char(50) DEFAULT NULL,
  `Telefono` char(50) DEFAULT NULL,
  `Residencia_Estado` int(11) DEFAULT NULL,
  `Residencia_Comunidad` int(11) DEFAULT NULL,
  `Nivel_instruccion` char(50) DEFAULT NULL,
  `Situacion_Laboral` char(50) DEFAULT NULL,
  `LPH` char(50) DEFAULT NULL,
  `uso_LPH` char(50) DEFAULT NULL,
  `Id_OtraPropiedad` int(11) NOT NULL,
  PRIMARY KEY (`Id_Afectado`),
  KEY `RefCS_Otra_Propiedad211` (`Id_OtraPropiedad`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1 AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `cs_censo`
--

CREATE TABLE IF NOT EXISTS `cs_censo` (
  `Id_Censo` int(11) NOT NULL AUTO_INCREMENT,
  `Fecha_Censo` datetime NOT NULL,
  `Observacion` char(250) DEFAULT NULL,
  `Id_Aldea` int(11) NOT NULL,
  `Id_Motivo` int(11) NOT NULL,
  `Id_Entrevistado` int(11) NOT NULL,
  `Id_Afectado` int(11) NOT NULL,
  `Id_CondicionFamiliar` int(11) NOT NULL,
  `Id_Funcionario` int(11) NOT NULL,
  `Id_Vivienda` int(11) NOT NULL,
  `Id_Evento` int(11) NOT NULL,
  PRIMARY KEY (`Id_Censo`),
  KEY `RefCS_Evento981` (`Id_Evento`),
  KEY `RefAldea581` (`Id_Aldea`),
  KEY `RefCS_Motivo601` (`Id_Motivo`),
  KEY `RefEntrevistado611` (`Id_Entrevistado`),
  KEY `RefCS_Afectado621` (`Id_Afectado`),
  KEY `RefCS_Condicion_Familiar631` (`Id_CondicionFamiliar`),
  KEY `RefFuncionario641` (`Id_Funcionario`),
  KEY `RefCS_Vivienda651` (`Id_Vivienda`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1 AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `cs_condicion`
--

CREATE TABLE IF NOT EXISTS `cs_condicion` (
  `Id_Condicion` int(11) NOT NULL AUTO_INCREMENT,
  `Existe` int(11) NOT NULL DEFAULT '1',
  `Nombre` char(200) NOT NULL,
  `Descripcion` char(200) DEFAULT NULL,
  PRIMARY KEY (`Id_Condicion`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=4 ;

--
-- Volcado de datos para la tabla `cs_condicion`
--

INSERT INTO `cs_condicion` (`Id_Condicion`, `Existe`, `Nombre`, `Descripcion`) VALUES
(1, 1, 'Habitable', 'la vida se hace mas larga si la'),
(2, 1, 'No Habitable', 'pa que se vuelva mejor'),
(3, 1, 'Desalojo por alto riesgo', 'ta ta ta tic to o');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `cs_condicion_familiar`
--

CREATE TABLE IF NOT EXISTS `cs_condicion_familiar` (
  `Id_CondicionFamiliar` int(11) NOT NULL AUTO_INCREMENT,
  `Existe` int(11) NOT NULL DEFAULT '1',
  `Nombre` char(200) NOT NULL,
  `Descripcion` char(200) DEFAULT NULL,
  PRIMARY KEY (`Id_CondicionFamiliar`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1 AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `cs_danho`
--

CREATE TABLE IF NOT EXISTS `cs_danho` (
  `Id_Danho` int(11) NOT NULL AUTO_INCREMENT,
  `Existe` int(11) NOT NULL DEFAULT '1',
  `Nombre` char(150) NOT NULL,
  `Descripcion` char(200) DEFAULT NULL,
  PRIMARY KEY (`Id_Danho`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=7 ;

--
-- Volcado de datos para la tabla `cs_danho`
--

INSERT INTO `cs_danho` (`Id_Danho`, `Existe`, `Nombre`, `Descripcion`) VALUES
(1, 1, 'Perdida Total', ''),
(2, 1, 'Perdida Parcial', ''),
(6, 1, 'Sin DaÃ±os', '');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `cs_enser`
--

CREATE TABLE IF NOT EXISTS `cs_enser` (
  `Id_Enser` int(11) NOT NULL AUTO_INCREMENT,
  `Existe` int(11) NOT NULL DEFAULT '1',
  `Nombre` char(150) NOT NULL,
  `Descripcion` char(255) DEFAULT NULL,
  PRIMARY KEY (`Id_Enser`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=23 ;

--
-- Volcado de datos para la tabla `cs_enser`
--

INSERT INTO `cs_enser` (`Id_Enser`, `Existe`, `Nombre`, `Descripcion`) VALUES
(1, 1, 'Lavadora', ''),
(2, 1, 'Secadora', ''),
(3, 1, 'Maquina de Coser', ''),
(4, 1, 'Nevera', ''),
(5, 1, 'Ventilador', ''),
(6, 1, 'Tostadora', ''),
(7, 1, 'Equipo de Sonido', ''),
(8, 1, 'Cama', ''),
(9, 1, 'Cuna', ''),
(10, 1, 'Juego de Muebles', ''),
(11, 1, 'Vitrinas', ''),
(12, 1, 'Juego de Comedor', ''),
(13, 1, 'VHS/DVD', ''),
(14, 1, 'Computador', ''),
(15, 1, 'Colchones', ''),
(16, 1, 'Sillas', ''),
(17, 1, 'Batidora', ''),
(18, 1, 'Closet', ''),
(19, 1, 'Utensilios de cocina', ''),
(20, 1, 'Cocina', ''),
(21, 1, 'Refrigerador', ''),
(22, 1, 'TV', '');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `cs_evento`
--

CREATE TABLE IF NOT EXISTS `cs_evento` (
  `Id_Evento` int(11) NOT NULL AUTO_INCREMENT,
  `Existe` int(11) NOT NULL DEFAULT '1',
  `Nombre` char(200) NOT NULL,
  `Id_TipoEvento` int(11) NOT NULL,
  PRIMARY KEY (`Id_Evento`),
  KEY `FK_cs_evento` (`Id_TipoEvento`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1 AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `cs_familiar`
--

CREATE TABLE IF NOT EXISTS `cs_familiar` (
  `Id_Familiar` int(11) NOT NULL AUTO_INCREMENT,
  `Cedula` char(255) NOT NULL,
  `Nombre` char(255) NOT NULL,
  `Apellido` char(255) NOT NULL,
  `Fecha_Nacimiento` datetime NOT NULL,
  `Parentesco` char(255) NOT NULL,
  `Nivel_Instruccion` char(255) DEFAULT NULL,
  `Ocupacion` char(255) DEFAULT NULL,
  `Ingreso_Mensual` float DEFAULT NULL,
  `Id_Afectado` int(11) NOT NULL,
  PRIMARY KEY (`Id_Familiar`),
  KEY `RefCS_Afectado141` (`Id_Afectado`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1 AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `cs_material_elaboracion`
--

CREATE TABLE IF NOT EXISTS `cs_material_elaboracion` (
  `Id_MaterialElaboracion` int(11) NOT NULL AUTO_INCREMENT,
  `Existe` int(11) NOT NULL DEFAULT '1',
  `Nombre` char(255) NOT NULL,
  `Descripcion` char(255) DEFAULT NULL,
  `categoria` varchar(200) NOT NULL,
  PRIMARY KEY (`Id_MaterialElaboracion`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=17 ;

--
-- Volcado de datos para la tabla `cs_material_elaboracion`
--

INSERT INTO `cs_material_elaboracion` (`Id_MaterialElaboracion`, `Existe`, `Nombre`, `Descripcion`, `categoria`) VALUES
(3, 1, 'Platabanda', 'anananananaa', 'Techo'),
(5, 1, 'Teja', 'la encarcelen la deporten la embarazen valla para la luna', 'Techo'),
(7, 1, 'Ladrillo', 'gua gua2', 'Paredes'),
(15, 1, 'Cemento', 'y bailar y bailar cada noche caad noche', 'Pisos'),
(16, 1, 'Granito', ' bnailar y bailar cada nota cada notaaaaaaaaaaaaaaaa', 'Pisos');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `cs_motivo`
--

CREATE TABLE IF NOT EXISTS `cs_motivo` (
  `Id_Motivo` int(11) NOT NULL AUTO_INCREMENT,
  `Existe` int(11) NOT NULL DEFAULT '1',
  `Nombre` char(255) NOT NULL,
  `Descripcion` char(255) DEFAULT NULL,
  PRIMARY KEY (`Id_Motivo`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=3 ;

--
-- Volcado de datos para la tabla `cs_motivo`
--

INSERT INTO `cs_motivo` (`Id_Motivo`, `Existe`, `Nombre`, `Descripcion`) VALUES
(1, 1, 'Inundacion de Planicie', 'la ilusion y te da la vida la vida'),
(2, 1, 'Incendio', 'que todavia me provocas mi amor');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `cs_necesidad`
--

CREATE TABLE IF NOT EXISTS `cs_necesidad` (
  `Id_Necesidad` int(11) NOT NULL AUTO_INCREMENT,
  `Existe` int(2) NOT NULL DEFAULT '1',
  `Nombre` char(255) NOT NULL,
  `Descripcion` char(255) DEFAULT NULL,
  PRIMARY KEY (`Id_Necesidad`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1 AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `cs_necesidad_afectado`
--

CREATE TABLE IF NOT EXISTS `cs_necesidad_afectado` (
  `Id_Necesidad` int(11) NOT NULL,
  `Id_Afectado` int(11) NOT NULL,
  `Prioridad` varchar(255) DEFAULT NULL,
  PRIMARY KEY (`Id_Necesidad`,`Id_Afectado`),
  KEY `RefCS_Afectado181` (`Id_Afectado`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `cs_otra_propiedad`
--

CREATE TABLE IF NOT EXISTS `cs_otra_propiedad` (
  `Id_OtraPropiedad` int(11) NOT NULL AUTO_INCREMENT,
  `Existe` int(11) NOT NULL DEFAULT '1',
  `Nombre` char(255) NOT NULL,
  `Descripcion` char(255) DEFAULT NULL,
  PRIMARY KEY (`Id_OtraPropiedad`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1 AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `cs_parte`
--

CREATE TABLE IF NOT EXISTS `cs_parte` (
  `Id_Parte` int(11) NOT NULL AUTO_INCREMENT,
  `Existe` int(11) NOT NULL DEFAULT '1',
  `Nombre` char(255) NOT NULL,
  `Descripcion` char(255) DEFAULT NULL,
  PRIMARY KEY (`Id_Parte`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=7 ;

--
-- Volcado de datos para la tabla `cs_parte`
--

INSERT INTO `cs_parte` (`Id_Parte`, `Existe`, `Nombre`, `Descripcion`) VALUES
(1, 1, 'Paredes', ''),
(2, 1, 'Techos', ''),
(3, 1, 'Pisos', ''),
(5, 1, 'Vigas', ''),
(6, 1, 'Columnas', '');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `cs_refugio`
--

CREATE TABLE IF NOT EXISTS `cs_refugio` (
  `Id_Refugio` int(11) NOT NULL AUTO_INCREMENT,
  `Existe` int(11) NOT NULL DEFAULT '1',
  `Nombre` char(255) NOT NULL,
  `Direccion` char(255) NOT NULL,
  `Telefono` char(15) DEFAULT NULL,
  `Capacidad` int(11) DEFAULT NULL,
  `Descripcion` char(255) DEFAULT NULL,
  `Id_Aldea` int(11) NOT NULL,
  PRIMARY KEY (`Id_Refugio`),
  KEY `RefAldea571` (`Id_Aldea`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1 AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `cs_refugio_afectado`
--

CREATE TABLE IF NOT EXISTS `cs_refugio_afectado` (
  `Id_Afectado` int(11) NOT NULL,
  `Id_Refugio` int(11) NOT NULL,
  `Existe` int(11) NOT NULL DEFAULT '1',
  `Fecha_Ingreso` datetime NOT NULL,
  PRIMARY KEY (`Id_Afectado`,`Id_Refugio`),
  KEY `RefCS_Refugio401` (`Id_Refugio`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `cs_tenencia`
--

CREATE TABLE IF NOT EXISTS `cs_tenencia` (
  `Id_Tenencia` int(11) NOT NULL AUTO_INCREMENT,
  `Existe` int(11) NOT NULL DEFAULT '1',
  `Nombre` char(255) NOT NULL,
  `Descripcion` char(255) DEFAULT NULL,
  PRIMARY KEY (`Id_Tenencia`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=8 ;

--
-- Volcado de datos para la tabla `cs_tenencia`
--

INSERT INTO `cs_tenencia` (`Id_Tenencia`, `Existe`, `Nombre`, `Descripcion`) VALUES
(1, 1, 'Propia', 'wiii'),
(2, 1, 'Propia Pagando', 'y con mis lagrimas'),
(3, 1, 'Compartida', 'no basta con soÃ±ar amar se aprende amando'),
(4, 1, 'Arrendada/alquilada', 'un amargo dolor el aire deja un sabor a despedida'),
(5, 1, 'Cedida al cuidado', 'ta ta ta ti ti ti to to to to to tuc'),
(6, 1, 'Invadida', 'quisiera poder'),
(7, 1, 'Alojado', 'uno por uno mis errore pedir que me perdones');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `cs_tipo`
--

CREATE TABLE IF NOT EXISTS `cs_tipo` (
  `Id_Tipo` int(11) NOT NULL AUTO_INCREMENT,
  `Existe` int(11) NOT NULL DEFAULT '1',
  `Nombre` char(255) NOT NULL,
  `Descripcion` char(255) DEFAULT NULL,
  PRIMARY KEY (`Id_Tipo`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=7 ;

--
-- Volcado de datos para la tabla `cs_tipo`
--

INSERT INTO `cs_tipo` (`Id_Tipo`, `Existe`, `Nombre`, `Descripcion`) VALUES
(1, 1, 'Casa', 'registrar'),
(2, 1, 'Quinta', 'asd'),
(3, 1, 'Apartamento', 'wiii'),
(4, 1, 'Casa vecindad', 'del chavo'),
(5, 1, 'Rancho', 'don juan'),
(6, 1, 'Pieza', 'Piezas feliz de la vidaaaaaa sol de mi esperanzaaaaaaaaaaaaaaaaaaa, quita esa agonia porque mi premura ya no aguanta MAS!!!...');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `cs_tipo_evento`
--

CREATE TABLE IF NOT EXISTS `cs_tipo_evento` (
  `Id_TipoEvento` int(11) NOT NULL AUTO_INCREMENT,
  `Nombre` varchar(255) DEFAULT NULL,
  PRIMARY KEY (`Id_TipoEvento`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1 AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `cs_vivienda`
--

CREATE TABLE IF NOT EXISTS `cs_vivienda` (
  `Id_Vivienda` int(11) NOT NULL AUTO_INCREMENT,
  `Numero_Familias` int(11) DEFAULT NULL,
  `Numero_Habitaciones` int(11) DEFAULT NULL,
  `Id_Condicion` int(11) NOT NULL,
  `Id_MaterialElaboracion` int(11) NOT NULL,
  `Id_Tenencia` int(11) NOT NULL,
  `Id_Tipo` int(11) NOT NULL,
  `Id_Parte` int(11) NOT NULL,
  `Id_Danho` int(11) NOT NULL,
  PRIMARY KEY (`Id_Vivienda`),
  KEY `RefCS_Condicion311` (`Id_Condicion`),
  KEY `RefCS_Material_Elaboracion331` (`Id_MaterialElaboracion`),
  KEY `RefCS_Tenencia341` (`Id_Tenencia`),
  KEY `RefCS_Tipo351` (`Id_Tipo`),
  KEY `RefCS_Danho411` (`Id_Parte`),
  KEY `FK_cs_vivienda_danho` (`Id_Danho`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1 AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `cs_vivienda_enser`
--

CREATE TABLE IF NOT EXISTS `cs_vivienda_enser` (
  `Id_Enser` int(11) NOT NULL,
  `Id_Vivienda` int(11) NOT NULL,
  `Cantidad` int(11) DEFAULT NULL,
  PRIMARY KEY (`Id_Enser`,`Id_Vivienda`),
  KEY `RefCS_Vivienda151` (`Id_Vivienda`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `entrevistado`
--

CREATE TABLE IF NOT EXISTS `entrevistado` (
  `Id_Entrevistado` int(11) NOT NULL AUTO_INCREMENT,
  `Existe` int(11) NOT NULL DEFAULT '1',
  `Cedula` char(255) NOT NULL,
  `Nombre` char(255) NOT NULL,
  `Apellido` char(255) NOT NULL,
  `Telefono` char(15) DEFAULT NULL,
  `Propietario` char(10) DEFAULT NULL,
  PRIMARY KEY (`Id_Entrevistado`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=11 ;

--
-- Volcado de datos para la tabla `entrevistado`
--

INSERT INTO `entrevistado` (`Id_Entrevistado`, `Existe`, `Cedula`, `Nombre`, `Apellido`, `Telefono`, `Propietario`) VALUES
(3, 1, 'V-17877206', 'diego', 'guerrero', '04167727604', '1'),
(4, 1, 'V-19918907', 'MarÃ­a Elena', 'Reyes CedeÃ±o', '04264740694', '1'),
(5, 1, 'V-123456', 'maria e', 'reyes c', '123456789', '0'),
(6, 1, 'V-789654123', 'elena', 'werwee', 'dsdsd', '0'),
(7, 1, 'E-80304431', 'Pedro M', 'Reyes C', '555567566', '1'),
(8, 1, 'V-789456', 'asdfdgdgdgdgd', 'dfdfdf', '123456', '1'),
(9, 1, 'V-789456', 'dfdfdf', 'dfdf', 'dfdf', '1'),
(10, 1, 'V-15648933', 'Nathaly', 'Garnica', '16890255', '0');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `estado`
--

CREATE TABLE IF NOT EXISTS `estado` (
  `Id_estado` int(11) NOT NULL AUTO_INCREMENT,
  `Existe` int(11) NOT NULL DEFAULT '1',
  `Nombre` char(255) DEFAULT NULL,
  PRIMARY KEY (`Id_estado`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=20 ;

--
-- Volcado de datos para la tabla `estado`
--

INSERT INTO `estado` (`Id_estado`, `Existe`, `Nombre`) VALUES
(15, 1, 'Tachira'),
(16, 1, 'Apure'),
(17, 1, 'Barinas'),
(18, 1, 'Merida'),
(19, 1, 'Carabobo');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `ev_cita`
--

CREATE TABLE IF NOT EXISTS `ev_cita` (
  `Id_Cita` int(11) NOT NULL AUTO_INCREMENT,
  `No_Folio` int(11) DEFAULT NULL,
  `Fecha_Solicitud` datetime NOT NULL,
  `Fecha_Cita` datetime NOT NULL,
  `Direccion` char(255) DEFAULT NULL,
  `Estado` char(255) DEFAULT 'Iniciada',
  `Observacion` char(255) DEFAULT NULL,
  `Id_Tipo` int(11) NOT NULL,
  `Id_Aldea` int(11) NOT NULL,
  `Id_Entrevistado` int(11) NOT NULL,
  `Id_Funcionario` int(11) DEFAULT NULL,
  PRIMARY KEY (`Id_Cita`),
  KEY `RefEV_Tipo771` (`Id_Tipo`),
  KEY `RefAldea791` (`Id_Aldea`),
  KEY `RefEntrevistado801` (`Id_Entrevistado`),
  KEY `RefFuncionario931` (`Id_Funcionario`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=8 ;

--
-- Volcado de datos para la tabla `ev_cita`
--

INSERT INTO `ev_cita` (`Id_Cita`, `No_Folio`, `Fecha_Solicitud`, `Fecha_Cita`, `Direccion`, `Estado`, `Observacion`, `Id_Tipo`, `Id_Aldea`, `Id_Entrevistado`, `Id_Funcionario`) VALUES
(1, 456, '2014-06-03 00:00:00', '2014-06-19 00:00:00', 'calle principal Barrio Bolivar', 'Iniciada', 'asasas as otra cosas', 10, 1, 4, NULL),
(2, 789, '2014-06-04 00:00:00', '2014-06-19 00:00:00', 'sdsdsdsd', 'Iniciada', 'sdsdsdsd', 14, 2, 5, NULL),
(3, 1234, '2014-06-04 00:00:00', '2014-06-10 00:00:00', 'sdsdsds', 'Iniciada', 'sdsdsdsdsd', 9, 2, 6, NULL),
(4, 3409, '2014-06-04 00:00:00', '2014-06-10 00:00:00', 'ssdsd sdsjdhsjds msdhsjdhsd mhjsdjsds', 'Iniciada', 'sdvsdhgsd nsgdhsdghsd dgshdgshdgsd', 14, 2, 7, NULL),
(7, 78963, '2014-06-04 00:00:00', '2014-06-19 00:00:00', 'dsdsdsd', 'Iniciada', 'sdsdsds fsdsd dsd sdsdsd', 14, 2, 10, NULL);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `ev_evaluacion`
--

CREATE TABLE IF NOT EXISTS `ev_evaluacion` (
  `Id_Evaluacion` int(11) NOT NULL AUTO_INCREMENT,
  `Id_Entrevistado` int(11) NOT NULL,
  `Fecha` datetime NOT NULL,
  `Direccion` char(255) DEFAULT NULL,
  `Informe_Actividad` text NOT NULL,
  `Observacion` text,
  `Recomendacion` text,
  `Id_Funcionario` int(11) NOT NULL,
  `Id_Aldea` int(11) NOT NULL,
  `Id_Cita` int(11) NOT NULL,
  `Id_Tipo` int(11) DEFAULT NULL,
  `Nov_id` int(11) NOT NULL,
  PRIMARY KEY (`Id_Evaluacion`,`Id_Entrevistado`),
  KEY `RefEntrevistado731` (`Id_Entrevistado`),
  KEY `RefEV_Cita741` (`Id_Cita`),
  KEY `RefEV_Tipo971` (`Id_Tipo`),
  KEY `RefFuncionario701` (`Id_Funcionario`),
  KEY `RefAldea711` (`Id_Aldea`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1 AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `ev_tipo`
--

CREATE TABLE IF NOT EXISTS `ev_tipo` (
  `Id_Tipo` int(11) NOT NULL AUTO_INCREMENT,
  `Existe` int(11) NOT NULL DEFAULT '1',
  `Nombre` char(255) NOT NULL,
  `Descripcion` char(255) DEFAULT NULL,
  PRIMARY KEY (`Id_Tipo`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=15 ;

--
-- Volcado de datos para la tabla `ev_tipo`
--

INSERT INTO `ev_tipo` (`Id_Tipo`, `Existe`, `Nombre`, `Descripcion`) VALUES
(9, 1, 'Inspeccion a Terreno', 'EvaluaciÃ³n detallada del terreno'),
(10, 1, 'Inspeccion a Vivienda', 'Todos los generadores de Lorem Ipsum que se'),
(11, 1, 'Vivienda para la Venta', 'Todos los generadores de Lorem Ipsum que se'),
(12, 1, 'Terreno para sustituciÃ³n', 'Todos los generadores de Lorem Ipsum que se'),
(13, 1, 'Terreno para construcciÃ³n de vivienda', 'Todos los generadores de Lorem Ipsum que se'),
(14, 1, 'Informe TÃ©cnico', 'Informe Realizado sobre una evaluaciÃ³n');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `foto`
--

CREATE TABLE IF NOT EXISTS `foto` (
  `Id_Foto` int(11) NOT NULL AUTO_INCREMENT,
  `Existe` int(11) NOT NULL DEFAULT '1',
  `Nombre` char(255) DEFAULT NULL,
  `Url` char(255) NOT NULL,
  `Id_Censo` int(11) DEFAULT NULL,
  `Id_Categoria` int(11) DEFAULT NULL,
  `Id_Actividad` int(11) DEFAULT NULL,
  PRIMARY KEY (`Id_Foto`),
  KEY `RefCS_Censo431` (`Id_Censo`),
  KEY `RefCategoria441` (`Id_Categoria`),
  KEY `RefRA_Actividad591` (`Id_Actividad`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1 AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `funcionario`
--

CREATE TABLE IF NOT EXISTS `funcionario` (
  `Id_Funcionario` int(11) NOT NULL AUTO_INCREMENT,
  `Existe` int(11) NOT NULL DEFAULT '1',
  `Cedula` char(255) NOT NULL,
  `Nombre` char(255) NOT NULL,
  `Apellido` char(255) NOT NULL,
  `Organismo` char(255) DEFAULT NULL,
  `Cargo` char(255) DEFAULT NULL,
  `Id_Usuario` int(11) DEFAULT NULL,
  PRIMARY KEY (`Id_Funcionario`),
  KEY `RefUsuario941` (`Id_Usuario`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1 AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `funcionario_actividad`
--

CREATE TABLE IF NOT EXISTS `funcionario_actividad` (
  `Id_Funcionario` int(11) NOT NULL,
  `Id_Actividad` int(11) NOT NULL,
  `Fecha` date NOT NULL,
  `Id_Puesto` int(11) NOT NULL,
  PRIMARY KEY (`Id_Funcionario`,`Id_Actividad`),
  KEY `RefRA_Actividad841` (`Id_Actividad`),
  KEY `RefRA_Puesto871` (`Id_Puesto`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `menu`
--

CREATE TABLE IF NOT EXISTS `menu` (
  `Id_Menu` int(11) NOT NULL AUTO_INCREMENT,
  `Nombre` char(255) NOT NULL,
  PRIMARY KEY (`Id_Menu`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=45 ;

--
-- Volcado de datos para la tabla `menu`
--

INSERT INTO `menu` (`Id_Menu`, `Nombre`) VALUES
(1, 'registrar_cita'),
(2, 'consultar_cita'),
(3, 'registrar_inspeccion'),
(4, 'modificar_inspeccion'),
(5, 'consultar_inspeccion'),
(6, 'man_tipo_inspeccion'),
(7, 'consultar_guardia'),
(8, 'registrar_ra'),
(9, 'imagenes_ra'),
(10, 'listado_RA'),
(11, 'man_tipo_actividad'),
(12, 'man_accion_tomada'),
(13, 'man_otros_organismo'),
(14, 'man_tipo_danhos'),
(15, 'man_condicion'),
(16, 'man_puesto_comision'),
(17, 'censo'),
(18, 'modificar_censo'),
(19, 'consultar_censo'),
(20, 'reporte_ra'),
(21, 'man_motivos_censo'),
(22, 'man_tipo_evento'),
(23, 'man_evento_censo'),
(24, 'man_CondicionFamiliar'),
(25, 'man_necesidades'),
(26, 'man_enseres'),
(27, 'man_TipoVivienda'),
(28, 'man_TenenciaVivienda'),
(29, 'man_CondicionVivienda'),
(30, 'man_OtraPropiedad'),
(31, 'man_MaterialElaboracion'),
(32, 'man_PartesVivienda'),
(33, 'man_DanhosPartes'),
(34, 'graficador'),
(35, 'usuarios'),
(36, 'privilegios'),
(37, 'man_estado'),
(38, 'man_municipio'),
(39, 'man_ciudad'),
(40, 'man_parroquia'),
(41, 'man_aldea'),
(42, 'man_refugios'),
(43, 'man_categorias'),
(44, 'bitacora');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `municipio`
--

CREATE TABLE IF NOT EXISTS `municipio` (
  `Id_Municipio` int(11) NOT NULL AUTO_INCREMENT,
  `Existe` int(11) NOT NULL DEFAULT '1',
  `Nombre` char(255) NOT NULL,
  `Id_estado` int(11) NOT NULL,
  PRIMARY KEY (`Id_Municipio`),
  KEY `RefEstado361` (`Id_estado`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=40 ;

--
-- Volcado de datos para la tabla `municipio`
--

INSERT INTO `municipio` (`Id_Municipio`, `Existe`, `Nombre`, `Id_estado`) VALUES
(10, 1, 'San Cristobal', 15),
(11, 1, 'Uribante', 15),
(12, 1, 'AndrÃ©s Bello', 15),
(13, 1, 'Antonio RÃ³mulo Costa', 15),
(14, 1, 'Ayacucho', 15),
(15, 1, 'BolÃ­var', 15),
(16, 1, 'CÃ¡rdenas', 15),
(17, 1, 'CÃ³rdoba', 15),
(18, 1, 'FernÃ¡ndez Feo', 15),
(19, 1, 'Francisco de Miranda', 15),
(20, 1, 'GarcÃ­a de Hevia', 15),
(21, 1, 'GuÃ¡simos', 15),
(22, 1, 'Independencia', 15),
(23, 1, 'JÃ¡uregui', 15),
(24, 1, 'JosÃ© MarÃ­a Vargas', 15),
(25, 1, 'JunÃ­n', 15),
(26, 1, 'San Judas Tadeo', 15),
(27, 1, 'Libertad', 15),
(28, 1, 'Libertador', 15),
(29, 1, 'Lobatera', 15),
(30, 1, 'Michelena', 15),
(31, 1, 'Panamericano', 15),
(32, 1, 'Pedro MarÃ­a UreÃ±a', 15),
(33, 1, 'Rafael Urdaneta', 15),
(34, 1, 'Samuel DarÃ­o Maldonado', 15),
(35, 1, 'Seboruco', 15),
(36, 1, 'SimÃ³n RodrÃ­guez', 15),
(37, 1, 'Sucre', 15),
(38, 1, 'Torbes', 15),
(39, 1, 'MuÃ±oz', 16);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `parroquia`
--

CREATE TABLE IF NOT EXISTS `parroquia` (
  `Id_Parroquia` int(11) NOT NULL AUTO_INCREMENT,
  `Existe` int(11) NOT NULL DEFAULT '1',
  `Nombre` char(255) NOT NULL,
  `Id_Municipio` int(11) NOT NULL,
  PRIMARY KEY (`Id_Parroquia`),
  KEY `RefCiudad381` (`Id_Municipio`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=75 ;

--
-- Volcado de datos para la tabla `parroquia`
--

INSERT INTO `parroquia` (`Id_Parroquia`, `Existe`, `Nombre`, `Id_Municipio`) VALUES
(7, 1, 'Andres Bello', 12),
(9, 1, 'Antonio RÃ³mulo Costa', 13),
(10, 1, 'Ayacucho', 14),
(11, 1, 'Rivas Berti', 14),
(12, 1, 'San Pedro del RÃ­o', 14),
(13, 1, 'BolÃ­var', 15),
(14, 1, 'Palotal', 15),
(15, 1, 'General Juan Vicente GÃ³mez', 15),
(16, 1, 'IsaÃ­as Medina Angarita', 15),
(17, 1, 'CÃ¡rdenas C', 16),
(18, 1, 'Amenodoro Rangel Lamus', 16),
(19, 1, 'La Florida', 16),
(20, 1, 'CÃ³rdoba', 17),
(21, 1, 'FernÃ¡ndez Feo', 18),
(22, 1, 'Alberto Adriani', 18),
(23, 1, 'Santo Domingo', 18),
(24, 1, 'Francisco de Miranda', 19),
(25, 1, 'GarcÃ­a de Hevia', 20),
(26, 1, 'Boca de Grita', 20),
(27, 1, 'JosÃ© Antonio PÃ¡ez', 20),
(28, 1, 'GuÃ¡simos', 21),
(29, 1, 'Independencia', 22),
(30, 1, 'Juan GermÃ¡n Roscio', 22),
(31, 1, 'RomÃ¡n CÃ¡rdenas', 22),
(32, 1, 'JÃ¡uregui', 23),
(33, 1, 'Emilio Constantino Guerrero', 23),
(34, 1, 'MonseÃ±or Miguel Antonio Salas', 23),
(35, 1, 'JosÃ© MarÃ­a Vargas', 24),
(36, 1, 'JunÃ­n', 25),
(37, 1, 'La PetrÃ³lea', 25),
(38, 1, 'QuinimarÃ­', 25),
(39, 1, 'BramÃ³n', 25),
(40, 1, 'Libertad', 27),
(41, 1, 'Cipriano Castro', 27),
(42, 1, 'Manuel Felipe Rugeles', 27),
(43, 1, 'Capital Libertador', 28),
(44, 1, 'Doradas', 28),
(45, 1, 'Emeterio Ochoa', 28),
(46, 1, 'San JoaquÃ­n de Navay', 28),
(47, 1, 'Lobatera', 29),
(48, 1, 'ConstituciÃ³n', 29),
(49, 1, 'Michelena', 30),
(50, 1, 'Panamericano', 31),
(51, 1, 'La Palmita', 31),
(52, 1, 'Pedro MarÃ­a UreÃ±a', 32),
(53, 1, 'Nueva Arcadia', 32),
(54, 1, 'Delicias', 33),
(55, 1, 'Pecaya', 33),
(56, 1, 'Samuel DarÃ­o Maldonado', 34),
(57, 1, 'BoconÃ³', 34),
(58, 1, 'HernÃ¡ndez', 34),
(59, 1, 'La Concordia', 10),
(60, 1, 'San Juan Bautista', 10),
(61, 1, 'Pedro MarÃ­a Morantes', 10),
(62, 1, 'San SebastiÃ¡n', 10),
(63, 1, 'Dr. Francisco Romero Lobo', 10),
(64, 1, 'Seboruco', 35),
(65, 1, 'SimÃ³n RodrÃ­guez', 36),
(66, 1, 'Sucre', 37),
(67, 1, 'Eleazar LÃ³pez Contreras', 37),
(68, 1, 'San Pablo', 37),
(69, 1, 'Torbes', 38),
(70, 1, 'Uribante', 11),
(71, 1, 'CÃ¡rdenas U', 11),
(72, 1, 'Juan Pablo PeÃ±alosa', 11),
(73, 1, 'PotosÃ­', 11),
(74, 1, 'San Judas Tadeo', 26);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `privilegios`
--

CREATE TABLE IF NOT EXISTS `privilegios` (
  `Id_Privilegios` int(11) NOT NULL AUTO_INCREMENT,
  `Existe` int(11) NOT NULL DEFAULT '1',
  `Id_Usuario` int(11) NOT NULL,
  `Id_Menu` int(11) NOT NULL,
  PRIMARY KEY (`Id_Privilegios`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=19 ;

--
-- Volcado de datos para la tabla `privilegios`
--

INSERT INTO `privilegios` (`Id_Privilegios`, `Existe`, `Id_Usuario`, `Id_Menu`) VALUES
(3, 1, 1, 2),
(4, 1, 1, 4),
(5, 1, 1, 7),
(6, 1, 1, 1),
(7, 1, 1, 0),
(8, 1, 1, 10),
(9, 0, 1, 34),
(10, 1, 2, 1),
(11, 1, 2, 3),
(12, 1, 2, 5),
(13, 1, 2, 7),
(14, 1, 2, 2),
(15, 1, 2, 4),
(16, 1, 2, 6),
(17, 1, 2, 8),
(18, 1, 2, 9);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `ra_accion_actividad`
--

CREATE TABLE IF NOT EXISTS `ra_accion_actividad` (
  `Id_Actividad` int(11) NOT NULL,
  `Id_AccionTomada` int(11) NOT NULL,
  `Observacion` char(255) DEFAULT NULL,
  PRIMARY KEY (`Id_Actividad`,`Id_AccionTomada`),
  KEY `RefRA_Accion_Tomada501` (`Id_AccionTomada`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `ra_accion_tomada`
--

CREATE TABLE IF NOT EXISTS `ra_accion_tomada` (
  `Id_AccionTomada` int(11) NOT NULL AUTO_INCREMENT,
  `Existe` int(11) NOT NULL DEFAULT '1',
  `Nombre` char(255) NOT NULL,
  `Descripcion` char(255) DEFAULT NULL,
  PRIMARY KEY (`Id_AccionTomada`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=10 ;

--
-- Volcado de datos para la tabla `ra_accion_tomada`
--

INSERT INTO `ra_accion_tomada` (`Id_AccionTomada`, `Existe`, `Nombre`, `Descripcion`) VALUES
(5, 1, 'Eliminacion de riesgos', 'eliminan todos los riesgos'),
(6, 1, 'Inmovilizacion del paciente', 'esta loco y toca camisa de fuerz'),
(7, 1, 'Acordinamiento', ' ni me quiero imaginar que es =/'),
(8, 1, 'Estabilizacion del paciente', 'estaba inestable :P'),
(9, 1, 'Otros', 'soy otros');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `ra_actividad`
--

CREATE TABLE IF NOT EXISTS `ra_actividad` (
  `Id_Actividad` int(11) NOT NULL AUTO_INCREMENT,
  `Id_Unidad` int(11) DEFAULT NULL,
  `Existe` int(11) NOT NULL DEFAULT '1',
  `Direccion` char(255) NOT NULL,
  `Hora_LLamada` time DEFAULT NULL,
  `Hora_Activacion` time DEFAULT NULL,
  `Hora_Sitio` time DEFAULT NULL,
  `Hora_Fin` time DEFAULT NULL,
  `Fecha` date NOT NULL,
  `Numero_Folio` char(255) NOT NULL,
  `Situacion` text,
  `Observacion` text,
  `Recomendacion` text,
  `Id_Tipo` int(11) NOT NULL,
  `Id_Condicion` int(11) NOT NULL,
  `Id_Aldea` int(11) NOT NULL,
  `Nov_id` int(11) DEFAULT NULL,
  PRIMARY KEY (`Id_Actividad`),
  KEY `RefRA_Tipo471` (`Id_Tipo`),
  KEY `RefRA_Condicion481` (`Id_Condicion`),
  KEY `RefAldea561` (`Id_Aldea`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=11 ;

--
-- Volcado de datos para la tabla `ra_actividad`
--

INSERT INTO `ra_actividad` (`Id_Actividad`, `Id_Unidad`, `Existe`, `Direccion`, `Hora_LLamada`, `Hora_Activacion`, `Hora_Sitio`, `Hora_Fin`, `Fecha`, `Numero_Folio`, `Situacion`, `Observacion`, `Recomendacion`, `Id_Tipo`, `Id_Condicion`, `Id_Aldea`, `Nov_id`) VALUES
(4, 0, 1, 'fsdf asdf sadf', '08:15:30', '08:15:30', '08:15:30', '08:15:30', '0000-00-00', '44', 'zxcv', 'zxcvbn', 'yyyy', 24, 6, 1, NULL),
(5, 0, 1, 'sdfgdsfg', '08:19:00', '08:19:00', '08:19:00', '08:19:00', '0000-00-00', '55', 'dfgdsf', 'gdsfgdsf', 'gdsfg', 19, 7, 1, NULL),
(6, 0, 1, 'zxczxczxczxc', '09:05:45', '09:05:45', '09:05:45', '09:05:45', '0000-00-00', '44', 'asdasdasd', 'asdasdasd', 'asdasdasd', 24, 7, 1, NULL),
(7, 0, 1, 'xzcvxzcv', '09:10:45', '09:10:45', '09:10:45', '09:10:45', '0000-00-00', '22', 'cx', 'xzcv', 'xzcv', 20, 7, 1, NULL),
(8, 34234, 1, 'dfgdsfg', '09:16:30', '09:16:30', '09:16:30', '09:16:30', '0000-00-00', '44', 'dfg', 'dsfg', 'dsg', 30, 6, 1, NULL),
(9, 44, 1, 'dfdfgdfg', '09:31:15', '09:31:15', '09:31:15', '09:31:15', '0000-00-00', '3434', 'dfgvdfgdfg', 'dfg', 'dsg', 25, 7, 1, NULL),
(10, 9, 1, 'asdasa sdasasdas sdaaasd', '09:00:15', '09:00:15', '09:00:15', '09:00:15', '2014-06-03', '1234', 'sadsdads', 'asdassdasd', 'adsasdddddddddd', 24, 6, 2, NULL);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `ra_actividad_danho`
--

CREATE TABLE IF NOT EXISTS `ra_actividad_danho` (
  `Id_Actividad` int(11) NOT NULL,
  `Id_Danho` int(11) NOT NULL,
  `Observacion` char(255) DEFAULT NULL,
  PRIMARY KEY (`Id_Actividad`,`Id_Danho`),
  KEY `RefRA_Danho671` (`Id_Danho`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `ra_condicion`
--

CREATE TABLE IF NOT EXISTS `ra_condicion` (
  `Id_Condicion` int(11) NOT NULL AUTO_INCREMENT,
  `Existe` int(11) NOT NULL DEFAULT '1',
  `Nombre` char(255) NOT NULL,
  `Descripcion` char(255) DEFAULT NULL,
  PRIMARY KEY (`Id_Condicion`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=9 ;

--
-- Volcado de datos para la tabla `ra_condicion`
--

INSERT INTO `ra_condicion` (`Id_Condicion`, `Existe`, `Nombre`, `Descripcion`) VALUES
(5, 1, 'Normal', 'normalita'),
(6, 1, 'Urgente', 'urgentica'),
(7, 1, 'Emergencia', 'muchas emergencias'),
(8, 1, 'Otros', 'estan de locura');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `ra_danho`
--

CREATE TABLE IF NOT EXISTS `ra_danho` (
  `Id_Danho` int(11) NOT NULL AUTO_INCREMENT,
  `Existe` int(11) NOT NULL DEFAULT '1',
  `Nombre` char(255) NOT NULL,
  `Descripcion` char(255) DEFAULT NULL,
  PRIMARY KEY (`Id_Danho`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=15 ;

--
-- Volcado de datos para la tabla `ra_danho`
--

INSERT INTO `ra_danho` (`Id_Danho`, `Existe`, `Nombre`, `Descripcion`) VALUES
(6, 1, 'Alumbrado publico', 'alumbrado para que roben :D'),
(7, 1, 'vehiculos', 'todas las marcas\n'),
(8, 1, 'Hidrantes', 'para que esten fresquitos'),
(9, 1, 'INST PUP', 'Instituciones publicas'),
(10, 1, 'Viviendas', 'mi casa propia :D..'),
(11, 1, 'INST PRIV', 'instutuciones privadas'),
(12, 1, 'Puentes', 'Hay rios'),
(13, 1, 'Vias de comunicacion', 'facebook, twitter y todas esas vias de comunicaciones\n'),
(14, 1, 'Otros', 'Hola :D');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `ra_organismo_actividad`
--

CREATE TABLE IF NOT EXISTS `ra_organismo_actividad` (
  `Id_OtrosOrganismo` int(11) NOT NULL,
  `Id_Actividad` int(11) NOT NULL,
  `Unidad` char(255) NOT NULL,
  `Jefe_Comision` char(255) NOT NULL,
  PRIMARY KEY (`Id_OtrosOrganismo`,`Id_Actividad`),
  KEY `RefRA_Actividad821` (`Id_Actividad`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `ra_otros_organismo`
--

CREATE TABLE IF NOT EXISTS `ra_otros_organismo` (
  `Id_OtrosOrganismo` int(11) NOT NULL AUTO_INCREMENT,
  `Existe` int(11) NOT NULL DEFAULT '1',
  `Nombre` char(255) NOT NULL,
  `Descripcion` char(255) DEFAULT NULL,
  PRIMARY KEY (`Id_OtrosOrganismo`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=5 ;

--
-- Volcado de datos para la tabla `ra_otros_organismo`
--

INSERT INTO `ra_otros_organismo` (`Id_OtrosOrganismo`, `Existe`, `Nombre`, `Descripcion`) VALUES
(3, 1, 'PC Municipal', 'INAPROCET'),
(4, 1, 'Bomberos', 'Del obelisco :D');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `ra_puesto`
--

CREATE TABLE IF NOT EXISTS `ra_puesto` (
  `Id_Puesto` int(11) NOT NULL AUTO_INCREMENT,
  `Existe` int(11) NOT NULL DEFAULT '1',
  `Nombre` char(255) NOT NULL,
  `Descripcion` char(255) DEFAULT NULL,
  PRIMARY KEY (`Id_Puesto`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=11 ;

--
-- Volcado de datos para la tabla `ra_puesto`
--

INSERT INTO `ra_puesto` (`Id_Puesto`, `Existe`, `Nombre`, `Descripcion`) VALUES
(7, 1, 'Operador/Despachador', 'inaprocet'),
(8, 1, 'Jefe de Comision', 'jefe :D'),
(9, 1, 'Conductor', 'mueve carritos'),
(10, 1, 'Funcionario', 'persona buehhh no tan mala');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `ra_tipo`
--

CREATE TABLE IF NOT EXISTS `ra_tipo` (
  `Id_Tipo` int(11) NOT NULL AUTO_INCREMENT,
  `Existe` int(11) NOT NULL DEFAULT '1',
  `Nombre` char(255) NOT NULL,
  `Descripcion` char(255) DEFAULT NULL,
  PRIMARY KEY (`Id_Tipo`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=34 ;

--
-- Volcado de datos para la tabla `ra_tipo`
--

INSERT INTO `ra_tipo` (`Id_Tipo`, `Existe`, `Nombre`, `Descripcion`) VALUES
(19, 1, 'Accidente de transito', 'Accidentes de transito en el casco de la ciudad'),
(20, 1, 'Emergencias medicas', 'Emergencias de todo tipo xD'),
(21, 1, 'Incendio de estructura', 'incendios por antisociales'),
(22, 1, 'Incendio vehicular', 'Le cayo poste y exploto'),
(23, 1, 'Incendio forestal', 'arbolitos quemados'),
(24, 1, 'MAT-PEL', 'Matematicas y peliculas'),
(25, 1, 'Detresfa', 'NI IDEA pero aqui ta'),
(26, 1, 'Recuperacion de cadaver', 'se perdieron y ya se consiguieron :D'),
(27, 1, 'Inspeccion', 'de todo tipo'),
(28, 1, 'Rescate de person', 'estaba inrescatada :p'),
(29, 1, 'Tala de arbol', 'la seÃ±ora tala pidio talarlo'),
(30, 1, 'Busqueda', ':D'),
(31, 1, 'POV', 'Parasitos ocupacionales virusilis'),
(32, 1, 'Evento', 'Muchas fiestas :D'),
(33, 1, 'Otros', 'ni me toquen');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `usuario`
--

CREATE TABLE IF NOT EXISTS `usuario` (
  `Id_Usuario` int(11) NOT NULL AUTO_INCREMENT,
  `Existe` int(11) NOT NULL DEFAULT '1',
  `Nombre` char(255) NOT NULL,
  `Usuario` char(255) NOT NULL,
  `Password` char(255) NOT NULL,
  PRIMARY KEY (`Id_Usuario`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=3 ;

--
-- Volcado de datos para la tabla `usuario`
--

INSERT INTO `usuario` (`Id_Usuario`, `Existe`, `Nombre`, `Usuario`, `Password`) VALUES
(1, 0, 'Maria Reyes', 'maria', '12345'),
(2, 1, 'Elena Cedre', 'Auditor', 'mariREY18');

--
-- Restricciones para tablas volcadas
--

--
-- Filtros para la tabla `aldea`
--
ALTER TABLE `aldea`
  ADD CONSTRAINT `RefCiudad551` FOREIGN KEY (`Id_Ciudad`) REFERENCES `ciudad` (`Id_Ciudad`);

--
-- Filtros para la tabla `bitacora`
--
ALTER TABLE `bitacora`
  ADD CONSTRAINT `RefUsuario881` FOREIGN KEY (`Id_Usuario`) REFERENCES `usuario` (`Id_Usuario`);

--
-- Filtros para la tabla `ciudad`
--
ALTER TABLE `ciudad`
  ADD CONSTRAINT `RefMunicipio371` FOREIGN KEY (`Id_Parroquia`) REFERENCES `parroquia` (`Id_Parroquia`);

--
-- Filtros para la tabla `cs_afectado`
--
ALTER TABLE `cs_afectado`
  ADD CONSTRAINT `RefCS_Otra_Propiedad211` FOREIGN KEY (`Id_OtraPropiedad`) REFERENCES `cs_otra_propiedad` (`Id_OtraPropiedad`);

--
-- Filtros para la tabla `cs_censo`
--
ALTER TABLE `cs_censo`
  ADD CONSTRAINT `RefAldea581` FOREIGN KEY (`Id_Aldea`) REFERENCES `aldea` (`Id_Aldea`),
  ADD CONSTRAINT `RefCS_Afectado621` FOREIGN KEY (`Id_Afectado`) REFERENCES `cs_afectado` (`Id_Afectado`),
  ADD CONSTRAINT `RefCS_Condicion_Familiar631` FOREIGN KEY (`Id_CondicionFamiliar`) REFERENCES `cs_condicion_familiar` (`Id_CondicionFamiliar`),
  ADD CONSTRAINT `RefCS_Evento981` FOREIGN KEY (`Id_Evento`) REFERENCES `cs_evento` (`Id_Evento`),
  ADD CONSTRAINT `RefCS_Motivo601` FOREIGN KEY (`Id_Motivo`) REFERENCES `cs_motivo` (`Id_Motivo`),
  ADD CONSTRAINT `RefCS_Vivienda651` FOREIGN KEY (`Id_Vivienda`) REFERENCES `cs_vivienda` (`Id_Vivienda`),
  ADD CONSTRAINT `RefEntrevistado611` FOREIGN KEY (`Id_Entrevistado`) REFERENCES `entrevistado` (`Id_Entrevistado`),
  ADD CONSTRAINT `RefFuncionario641` FOREIGN KEY (`Id_Funcionario`) REFERENCES `funcionario` (`Id_Funcionario`);

--
-- Filtros para la tabla `cs_evento`
--
ALTER TABLE `cs_evento`
  ADD CONSTRAINT `FK_cs_evento` FOREIGN KEY (`Id_TipoEvento`) REFERENCES `cs_tipo_evento` (`Id_TipoEvento`);

--
-- Filtros para la tabla `cs_familiar`
--
ALTER TABLE `cs_familiar`
  ADD CONSTRAINT `RefCS_Afectado141` FOREIGN KEY (`Id_Afectado`) REFERENCES `cs_afectado` (`Id_Afectado`);

--
-- Filtros para la tabla `cs_necesidad_afectado`
--
ALTER TABLE `cs_necesidad_afectado`
  ADD CONSTRAINT `RefCS_Afectado181` FOREIGN KEY (`Id_Afectado`) REFERENCES `cs_afectado` (`Id_Afectado`),
  ADD CONSTRAINT `RefCS_Necesidad171` FOREIGN KEY (`Id_Necesidad`) REFERENCES `cs_necesidad` (`Id_Necesidad`);

--
-- Filtros para la tabla `cs_refugio`
--
ALTER TABLE `cs_refugio`
  ADD CONSTRAINT `RefAldea571` FOREIGN KEY (`Id_Aldea`) REFERENCES `aldea` (`Id_Aldea`);

--
-- Filtros para la tabla `cs_refugio_afectado`
--
ALTER TABLE `cs_refugio_afectado`
  ADD CONSTRAINT `RefCS_Afectado231` FOREIGN KEY (`Id_Afectado`) REFERENCES `cs_afectado` (`Id_Afectado`),
  ADD CONSTRAINT `RefCS_Refugio401` FOREIGN KEY (`Id_Refugio`) REFERENCES `cs_refugio` (`Id_Refugio`);

--
-- Filtros para la tabla `cs_vivienda`
--
ALTER TABLE `cs_vivienda`
  ADD CONSTRAINT `FK_cs_vivienda_danho` FOREIGN KEY (`Id_Danho`) REFERENCES `cs_danho` (`Id_Danho`),
  ADD CONSTRAINT `FK_cs_vivienda_parte` FOREIGN KEY (`Id_Parte`) REFERENCES `cs_parte` (`Id_Parte`),
  ADD CONSTRAINT `RefCS_Condicion311` FOREIGN KEY (`Id_Condicion`) REFERENCES `cs_condicion` (`Id_Condicion`),
  ADD CONSTRAINT `RefCS_Material_Elaboracion331` FOREIGN KEY (`Id_MaterialElaboracion`) REFERENCES `cs_material_elaboracion` (`Id_MaterialElaboracion`),
  ADD CONSTRAINT `RefCS_Tenencia341` FOREIGN KEY (`Id_Tenencia`) REFERENCES `cs_tenencia` (`Id_Tenencia`),
  ADD CONSTRAINT `RefCS_Tipo351` FOREIGN KEY (`Id_Tipo`) REFERENCES `cs_tipo` (`Id_Tipo`);

--
-- Filtros para la tabla `cs_vivienda_enser`
--
ALTER TABLE `cs_vivienda_enser`
  ADD CONSTRAINT `RefCS_Enser161` FOREIGN KEY (`Id_Enser`) REFERENCES `cs_enser` (`Id_Enser`),
  ADD CONSTRAINT `RefCS_Vivienda151` FOREIGN KEY (`Id_Vivienda`) REFERENCES `cs_vivienda` (`Id_Vivienda`);

--
-- Filtros para la tabla `ev_cita`
--
ALTER TABLE `ev_cita`
  ADD CONSTRAINT `RefAldea791` FOREIGN KEY (`Id_Aldea`) REFERENCES `aldea` (`Id_Aldea`),
  ADD CONSTRAINT `RefEntrevistado801` FOREIGN KEY (`Id_Entrevistado`) REFERENCES `entrevistado` (`Id_Entrevistado`),
  ADD CONSTRAINT `RefEV_Tipo771` FOREIGN KEY (`Id_Tipo`) REFERENCES `ev_tipo` (`Id_Tipo`),
  ADD CONSTRAINT `RefFuncionario931` FOREIGN KEY (`Id_Funcionario`) REFERENCES `funcionario` (`Id_Funcionario`);

--
-- Filtros para la tabla `ev_evaluacion`
--
ALTER TABLE `ev_evaluacion`
  ADD CONSTRAINT `RefAldea711` FOREIGN KEY (`Id_Aldea`) REFERENCES `aldea` (`Id_Aldea`),
  ADD CONSTRAINT `RefEntrevistado731` FOREIGN KEY (`Id_Entrevistado`) REFERENCES `entrevistado` (`Id_Entrevistado`),
  ADD CONSTRAINT `RefEV_Cita741` FOREIGN KEY (`Id_Cita`) REFERENCES `ev_cita` (`Id_Cita`),
  ADD CONSTRAINT `RefEV_Tipo971` FOREIGN KEY (`Id_Tipo`) REFERENCES `ev_tipo` (`Id_Tipo`),
  ADD CONSTRAINT `RefFuncionario701` FOREIGN KEY (`Id_Funcionario`) REFERENCES `funcionario` (`Id_Funcionario`);

--
-- Filtros para la tabla `foto`
--
ALTER TABLE `foto`
  ADD CONSTRAINT `RefCategoria441` FOREIGN KEY (`Id_Categoria`) REFERENCES `categoria` (`Id_Categoria`),
  ADD CONSTRAINT `RefCS_Censo431` FOREIGN KEY (`Id_Censo`) REFERENCES `cs_censo` (`Id_Censo`),
  ADD CONSTRAINT `RefRA_Actividad591` FOREIGN KEY (`Id_Actividad`) REFERENCES `ra_actividad` (`Id_Actividad`);

--
-- Filtros para la tabla `funcionario`
--
ALTER TABLE `funcionario`
  ADD CONSTRAINT `RefUsuario941` FOREIGN KEY (`Id_Usuario`) REFERENCES `usuario` (`Id_Usuario`);

--
-- Filtros para la tabla `funcionario_actividad`
--
ALTER TABLE `funcionario_actividad`
  ADD CONSTRAINT `RefFuncionario831` FOREIGN KEY (`Id_Funcionario`) REFERENCES `funcionario` (`Id_Funcionario`),
  ADD CONSTRAINT `RefRA_Actividad841` FOREIGN KEY (`Id_Actividad`) REFERENCES `ra_actividad` (`Id_Actividad`),
  ADD CONSTRAINT `RefRA_Puesto871` FOREIGN KEY (`Id_Puesto`) REFERENCES `ra_puesto` (`Id_Puesto`);

--
-- Filtros para la tabla `municipio`
--
ALTER TABLE `municipio`
  ADD CONSTRAINT `RefEstado361` FOREIGN KEY (`Id_estado`) REFERENCES `estado` (`Id_estado`);

--
-- Filtros para la tabla `parroquia`
--
ALTER TABLE `parroquia`
  ADD CONSTRAINT `RefMunicipio381` FOREIGN KEY (`Id_Municipio`) REFERENCES `municipio` (`Id_Municipio`);

--
-- Filtros para la tabla `ra_accion_actividad`
--
ALTER TABLE `ra_accion_actividad`
  ADD CONSTRAINT `RefRA_Accion_Tomada501` FOREIGN KEY (`Id_AccionTomada`) REFERENCES `ra_accion_tomada` (`Id_AccionTomada`),
  ADD CONSTRAINT `RefRA_Actividad491` FOREIGN KEY (`Id_Actividad`) REFERENCES `ra_actividad` (`Id_Actividad`);

--
-- Filtros para la tabla `ra_actividad`
--
ALTER TABLE `ra_actividad`
  ADD CONSTRAINT `RefAldea561` FOREIGN KEY (`Id_Aldea`) REFERENCES `aldea` (`Id_Aldea`),
  ADD CONSTRAINT `RefRA_Condicion481` FOREIGN KEY (`Id_Condicion`) REFERENCES `ra_condicion` (`Id_Condicion`),
  ADD CONSTRAINT `RefRA_Tipo471` FOREIGN KEY (`Id_Tipo`) REFERENCES `ra_tipo` (`Id_Tipo`);

--
-- Filtros para la tabla `ra_actividad_danho`
--
ALTER TABLE `ra_actividad_danho`
  ADD CONSTRAINT `RefRA_Actividad661` FOREIGN KEY (`Id_Actividad`) REFERENCES `ra_actividad` (`Id_Actividad`),
  ADD CONSTRAINT `RefRA_Danho671` FOREIGN KEY (`Id_Danho`) REFERENCES `ra_danho` (`Id_Danho`);

--
-- Filtros para la tabla `ra_organismo_actividad`
--
ALTER TABLE `ra_organismo_actividad`
  ADD CONSTRAINT `RefRA_Actividad821` FOREIGN KEY (`Id_Actividad`) REFERENCES `ra_actividad` (`Id_Actividad`),
  ADD CONSTRAINT `RefRA_Otros_Organismo811` FOREIGN KEY (`Id_OtrosOrganismo`) REFERENCES `ra_otros_organismo` (`Id_OtrosOrganismo`);

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
