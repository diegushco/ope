-- phpMyAdmin SQL Dump
-- version 4.2.11
-- http://www.phpmyadmin.net
--
-- Servidor: localhost
-- Tiempo de generación: 19-04-2015 a las 14:36:39
-- Versión del servidor: 5.6.21
-- Versión de PHP: 5.6.3

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
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
`Id_Aldea` int(11) NOT NULL,
  `Existe` int(11) NOT NULL DEFAULT '1',
  `Nombre` char(255) NOT NULL,
  `Id_Ciudad` int(11) NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=4 DEFAULT CHARSET=latin1;

--
-- Volcado de datos para la tabla `aldea`
--

INSERT INTO `aldea` (`Id_Aldea`, `Existe`, `Nombre`, `Id_Ciudad`) VALUES
(1, 1, 'La piedrita', 10),
(2, 1, 'Calle 88', 11),
(3, 1, 'Los ceibos', 19);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `bitacora`
--

CREATE TABLE IF NOT EXISTS `bitacora` (
`Id_Bitacora` int(11) NOT NULL,
  `FechaHora` datetime NOT NULL,
  `Observacion` char(250) DEFAULT NULL,
  `Url` char(250) DEFAULT NULL,
  `Ip` char(255) DEFAULT NULL,
  `Id_Usuario` int(11) NOT NULL,
  `tipo` varchar(255) NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=105 DEFAULT CHARSET=latin1;

--
-- Volcado de datos para la tabla `bitacora`
--

INSERT INTO `bitacora` (`Id_Bitacora`, `FechaHora`, `Observacion`, `Url`, `Ip`, `Id_Usuario`, `tipo`) VALUES
(2, '2015-04-04 07:46:14', 'Actualiza accion tomada Acordinamiento', '/ope/man_modifcaAccionTomada.php?hora=1428149774529&accion=Acordinamiento&activo1=1&viejo=Acordinamiento&descripcion=%20ni%20me%20quiero%20imaginar%20que%20es%20=/', '::1', 3, 'Actualizar'),
(3, '2015-04-04 07:46:20', 'Actualiza accion tomada Eliminacion de riesgos', '/ope/man_modifcaAccionTomada.php?hora=1428149780078&accion=Eliminacion%20de%20riesgos&activo1=1&viejo=Eliminacion%20de%20riesgos&descripcion=eliminan%20todos%20los%20riesgos', '::1', 3, 'Actualizar'),
(4, '2015-04-04 07:47:42', 'Actualiza daÃ±os', '/ope/man_modifcaTipoDanhos.php?hora=1428149862351&da%C3%B1o=INST%20PUP&activo1=1&viejo=INST%20PUP&descripcion=Instituciones%20publicas', '::1', 3, 'Actualizar'),
(5, '2015-04-04 07:48:06', 'Actualiza condicion de RA  Normal', '/ope/man_modifcaCondicion.php?hora=1428149886017&condicion=Normal&activo1=1&viejo=Normal&descripcion=normalita', '::1', 3, 'Actualizar'),
(6, '2015-04-04 09:47:08', 'Busca listado RA', '/ope/listado_RA', '::1', 3, 'Buscar'),
(7, '2015-04-04 09:49:01', 'Busca listado RA', '/ope/listado_RA', '::1', 3, 'Buscar'),
(8, '2015-04-04 09:56:08', 'Busca listado RA', '/ope/listado_RA', '::1', 3, 'Buscar'),
(9, '2015-04-04 10:07:26', 'Busca listado RA', '/ope/listado_RA', '\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0', 3, 'Buscar'),
(10, '2015-04-04 10:07:29', 'Busca listado RA', '/ope/listado_RA', '\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0', 3, 'Buscar'),
(11, '2015-04-04 10:42:49', 'Busca listado RA', '/ope/listado_RA', '::1', 3, 'Buscar'),
(12, '2015-04-04 10:49:37', 'Busca listado RA', '/ope/listado_RA', '::1', 3, 'Buscar'),
(13, '2015-04-04 10:50:38', 'Busca listado RA', '/ope/listado_RA', '::1', 3, 'Buscar'),
(14, '2015-04-04 10:50:39', 'Busca listado RA', '/ope/listado_RA', '::1', 3, 'Buscar'),
(15, '2015-04-04 10:50:42', 'Busca listado RA', '/ope/listado_RA', '::1', 3, 'Buscar'),
(16, '2015-04-04 10:50:51', 'Busca listado RA', '/ope/listado_RA', '::1', 3, 'Buscar'),
(17, '2015-04-04 10:56:09', 'Busca ciudad', '/ope/man_lista_ciudad.php?hora=1428161169428', '::1', 3, 'Buscar'),
(18, '2015-04-04 11:11:50', 'Busca listado RA', '/ope/listado_RA', '::1', 3, 'Buscar'),
(19, '2015-04-04 11:43:44', 'Guardo tipo RA dsfsdf', '/ope/guardarTipoActividad.php', '::1', 3, 'Guardar'),
(20, '2015-04-04 11:43:52', 'Elimina tipo ra dsfsdf', '/ope/man_eliminaTipoActividad.php?hora=1428164032605&actividad=dsfsdf&viejo=dsfsdf&descripcion=%20sdf%20sdfs', '::1', 3, 'Eliminar'),
(21, '2015-04-04 11:46:57', 'Busca listado RA', '/ope/listado_RA', '::1', 3, 'Buscar'),
(22, '2015-04-04 11:56:32', 'Busca listado RA', '/ope/listado_RA', '::1', 3, 'Buscar'),
(23, '2015-04-04 11:56:36', 'Busca detalle de RA 23', '/ope/mdetalle_ra.php?hora=1428164796208&valor=23', '::1', 3, 'Buscar'),
(24, '2015-04-04 12:10:20', 'Busca listado RA', '/ope/listado_RA', '::1', 3, 'Buscar'),
(25, '2015-04-04 12:10:22', 'Busca detalle de RA 23', '/ope/mdetalle_ra.php?hora=1428165622992&valor=23', '::1', 3, 'Buscar'),
(26, '2015-04-04 12:11:04', 'Busca listado RA', '/ope/listado_RA', '::1', 3, 'Buscar'),
(27, '2015-04-04 12:22:39', 'Busca listado RA', '/ope/listado_RA', '::1', 3, 'Buscar'),
(28, '2015-04-04 12:24:15', 'Busca listado RA', '/ope/listado_RA', '::1', 3, 'Buscar'),
(29, '2015-04-04 12:24:35', 'Busca listado RA', '/ope/listado_RA', '::1', 3, 'Buscar'),
(30, '2015-04-04 12:25:48', 'Busca listado RA', '/ope/listado_RA', '::1', 3, 'Buscar'),
(31, '2015-04-04 12:26:40', 'Busca listado RA', '/ope/listado_RA', '::1', 3, 'Buscar'),
(32, '2015-04-04 12:31:40', 'Busca detalle de RA 23', '/ope/mdetalle_ra.php?hora=1428166900825&valor=23', '::1', 3, 'Buscar'),
(33, '2015-04-04 14:59:23', 'Busca detalle de RA 26', '/ope/mdetalle_ra.php?hora=1428175763278&valor=26', '::1', 3, 'Buscar'),
(34, '2015-04-04 14:59:27', 'Busca detalle de RA 23', '/ope/mdetalle_ra.php?hora=1428175767586&valor=23', '::1', 3, 'Buscar'),
(35, '2015-04-04 14:59:30', 'Busca detalle de RA 28', '/ope/mdetalle_ra.php?hora=1428175770969&valor=28', '::1', 3, 'Buscar'),
(36, '2015-04-04 15:01:01', 'Busca lista de refugios', '/ope/man_lista_refugio.php?hora=1428175861576', '::1', 3, 'Buscar'),
(37, '2015-04-04 15:01:12', 'Busca lista de refugios', '/ope/man_lista_refugio.php?hora=1428175872968', '::1', 3, 'Buscar'),
(38, '2015-04-04 15:01:14', 'Busca lista aldea', '/ope/man_lista_aldea.php?hora=1428175874208', '::1', 3, 'Buscar'),
(39, '2015-04-04 15:25:55', 'Guardo actividad 29', '/ope/guardarRegistroRA.php', '::1', 3, 'Guardar'),
(40, '2015-04-04 15:26:47', 'Busca folio 1234', '/ope/buscaFolio.php?hora=1428177407157&folio=1234', '::1', 3, 'Buscar'),
(41, '2015-04-06 21:14:37', 'Inicio sesion diego', '/ope/compruebaUser.php', '::1', 3, 'Buscar'),
(42, '2015-04-09 20:35:25', 'Inicio sesion diego', '/ope/compruebaUser.php', '::1', 3, 'Buscar'),
(43, '2015-04-09 20:36:24', 'Guardo tipo inspeccion dfgdfg', '/ope/guardarTipoInspeccion.php', '::1', 3, 'Guardar'),
(44, '2015-04-09 20:36:27', 'Elimina tipo evaluacion dfgdfg', '/ope/man_eliminaTipoInspeccion.php?hora=1428627987740&inspeccion=dfgdfg&viejo=dfgdfg&descripcion=dfgdfgdfg', '::1', 3, 'Eliminar'),
(45, '2015-04-09 20:36:45', 'Busca listado RA', '/ope/listado_RA', '::1', 3, 'Buscar'),
(46, '2015-04-09 20:36:53', 'Busca detalle de RA 28', '/ope/mdetalle_raM.php?hora=1428628013097&valor=28', '::1', 3, 'Buscar'),
(47, '2015-04-09 20:52:16', 'Inicio sesion diego', '/ope/compruebaUser.php', '::1', 3, 'Buscar'),
(48, '2015-04-13 20:05:54', 'Inicio sesion diego', '/ope/compruebaUser.php', '::1', 3, 'Buscar'),
(49, '2015-04-13 20:08:17', 'Guardo propiedad Casa', '/ope/guardarOtraPropiedad.php', '::1', 3, 'Guardar'),
(50, '2015-04-13 20:08:24', 'Guardo propiedad casota', '/ope/guardarOtraPropiedad.php', '::1', 3, 'Guardar'),
(51, '2015-04-13 20:23:36', 'Guardo condicion familiar Mucho miche poca comida', '/ope/guardarCondicionFamiliar.php', '::1', 3, 'Guardar'),
(52, '2015-04-15 05:50:51', 'Inicio sesion diego', '/ope/compruebaUser.php', '::1', 3, 'Buscar'),
(53, '2015-04-15 20:46:40', 'Inicio sesion diego', '/ope/compruebaUser.php', '::1', 3, 'Buscar'),
(54, '2015-04-16 20:23:26', 'Inicio sesion diego', '/ope/compruebaUser.php', '::1', 3, 'Buscar'),
(56, '2015-04-18 10:55:10', 'Inicio sesion diego', '/ope/compruebaUser.php', '::1', 3, 'Buscar'),
(57, '2015-04-18 11:01:09', 'Guardo censo 1', '/ope/guardarCenso.php', '::1', 3, 'Guardar'),
(58, '2015-04-18 11:06:45', 'Guardo censo 2', '/ope/guardarCenso.php', '::1', 3, 'Guardar'),
(59, '2015-04-18 20:34:53', 'Inicio sesion diego', '/ope/compruebaUser.php', '::1', 3, 'Buscar'),
(60, '2015-04-18 20:44:36', 'Busca datos inspeccion para registrar', '/ope/registrar_inspeccion', '::1', 3, 'Buscar'),
(61, '2015-04-18 20:44:52', 'Busca listado RA', '/ope/listado_RA', '::1', 3, 'Buscar'),
(62, '2015-04-18 20:45:12', 'Busca lista municipios', '/ope/man_lista_municipios.php?hora=1429406112292', '::1', 3, 'Buscar'),
(63, '2015-04-18 20:45:12', 'Busca lista parroquias', '/ope/man_lista_parroquia.php?hora=1429406112709', '::1', 3, 'Buscar'),
(64, '2015-04-18 20:45:13', 'Busca ciudad', '/ope/man_lista_ciudad.php?hora=1429406113435', '::1', 3, 'Buscar'),
(65, '2015-04-18 20:45:13', 'Busca lista aldea', '/ope/man_lista_aldea.php?hora=1429406113736', '::1', 3, 'Buscar'),
(66, '2015-04-18 20:45:14', 'Busca lista de refugios', '/ope/man_lista_refugio.php?hora=1429406114154', '::1', 3, 'Buscar'),
(67, '2015-04-18 20:45:49', 'Busca datos inspeccion para registrar', '/ope/registrar_inspeccion', '::1', 3, 'Buscar'),
(68, '2015-04-18 20:46:03', 'Busca entrevistado 24', '/ope/info_citas.php', '::1', 3, 'Buscar'),
(69, '2015-04-19 06:46:34', 'Inicio sesion diego', '/ope/compruebaUser.php', '::1', 3, 'Buscar'),
(70, '2015-04-19 06:48:36', 'Busca datos inspeccion para registrar', '/ope/registrar_inspeccion', '::1', 3, 'Buscar'),
(71, '2015-04-19 06:48:47', 'Busca cita', '/ope/buscaCita.php', '::1', 3, 'Buscar'),
(72, '2015-04-19 07:06:30', 'Guardo censo', '/ope/guardarCenso.php', '::1', 3, 'Guardar'),
(73, '2015-04-19 07:07:04', 'Guardo censo', '/ope/guardarCenso.php', '::1', 3, 'Guardar'),
(74, '2015-04-19 07:07:35', 'Guardo censo', '/ope/guardarCenso.php', '::1', 3, 'Guardar'),
(75, '2015-04-19 07:08:35', 'Guardo censo 6', '/ope/guardarCenso.php', '::1', 3, 'Guardar'),
(76, '2015-04-19 07:12:33', 'Busca por cedula censo v-17877206', '/ope/buscaCedula.php?hora=1429443753305&cedula=v-17877206', '::1', 3, 'Buscar'),
(77, '2015-04-19 07:12:59', 'Busca por cedula censo v-17877206', '/ope/buscaCedula.php?hora=1429443779881&cedula=v-17877206', '::1', 3, 'Buscar'),
(78, '2015-04-19 07:13:03', 'Busca por cedula censo v-17877206', '/ope/buscaCedula.php?hora=1429443783167&cedula=v-17877206', '::1', 3, 'Buscar'),
(79, '2015-04-19 07:13:11', 'Busca por cedula censo v-17877206', '/ope/buscaCedula.php?hora=1429443791474&cedula=v-17877206', '::1', 3, 'Buscar'),
(80, '2015-04-19 07:15:42', 'Busca por cedula censo v-17877206', '/ope/buscaCedula.php?hora=1429443942592&cedula=v-17877206', '::1', 3, 'Buscar'),
(81, '2015-04-19 07:15:55', 'Busca por cedula censo v-17877206', '/ope/buscaCedula.php?hora=1429443955480&cedula=v-17877206', '::1', 3, 'Buscar'),
(82, '2015-04-19 07:16:25', 'Busca por cedula censo v-17877206', '/ope/buscaCedula.php?hora=1429443985222&cedula=v-17877206', '::1', 3, 'Buscar'),
(83, '2015-04-19 07:17:01', 'Busca por cedula censo v-178772064', '/ope/buscaCedula.php?hora=1429444021454&cedula=v-178772064', '::1', 3, 'Buscar'),
(84, '2015-04-19 07:17:15', 'Busca por cedula censo v-17877206', '/ope/buscaCedula.php?hora=1429444035037&cedula=v-17877206', '::1', 3, 'Buscar'),
(85, '2015-04-19 07:17:54', 'Busca por cedula censo v-17877206', '/ope/buscaCedula.php?hora=1429444074153&cedula=v-17877206', '::1', 3, 'Buscar'),
(86, '2015-04-19 07:18:33', 'Busca por cedula censo v-17877206', '/ope/buscaCedula.php?hora=1429444113887&cedula=v-17877206', '::1', 3, 'Buscar'),
(87, '2015-04-19 07:19:11', 'Busca por cedula censo v-17877206', '/ope/buscaCedula.php?hora=1429444151249&cedula=v-17877206', '::1', 3, 'Buscar'),
(88, '2015-04-19 07:46:30', 'Busca por cedula censo v-17877206', '/ope/buscaCedula.php?hora=1429445790399&cedula=v-17877206', '::1', 3, 'Buscar'),
(89, '2015-04-19 07:49:07', 'Busca por cedula censo v-17877206', '/ope/buscaCedula.php?hora=1429445947979&cedula=v-17877206', '::1', 3, 'Buscar'),
(90, '2015-04-19 07:49:21', 'Guardo foto de censo', '/ope/guarda_imagenes_censo.php', '::1', 3, 'Guardar'),
(91, '2015-04-19 07:50:12', 'Busca listado RA', '/ope/listado_RA', '::1', 3, 'Buscar'),
(92, '2015-04-19 07:50:19', 'Busca folio 3434', '/ope/buscaFolio.php?hora=1429446019605&folio=3434', '::1', 3, 'Buscar'),
(93, '2015-04-19 07:50:25', 'Guardo foto de actividad', '/ope/guarda_imagenes.php', '::1', 3, 'Guardar'),
(94, '2015-04-19 07:51:23', 'Busca por cedula censo v-17877206', '/ope/buscaCedula.php?hora=1429446083837&cedula=v-17877206', '::1', 3, 'Buscar'),
(95, '2015-04-19 07:51:26', 'Guardo foto de censo', '/ope/guarda_imagenes_censo.php', '::1', 3, 'Guardar'),
(96, '2015-04-19 07:54:04', 'Busca por cedula censo v-17877206', '/ope/buscaCedula.php?hora=1429446244150&cedula=v-17877206', '::1', 3, 'Buscar'),
(97, '2015-04-19 07:54:18', 'Guardo foto de censo', '/ope/guarda_imagenes_censo.php', '::1', 3, 'Guardar'),
(98, '2015-04-19 07:56:49', 'Busca por cedula censo v-17877206', '/ope/buscaCedula.php?hora=1429446409070&cedula=v-17877206', '::1', 3, 'Buscar'),
(99, '2015-04-19 07:56:55', 'Guardo foto de censo', '/ope/guarda_imagenes_censo.php', '::1', 3, 'Guardar'),
(100, '2015-04-19 08:02:29', 'Busca por cedula censo v-17877206', '/ope/buscaCedula.php?hora=1429446749543&cedula=v-17877206', '::1', 3, 'Buscar'),
(101, '2015-04-19 08:02:57', 'Guardo foto de censo', '/ope/guarda_imagenes_censo.php', '::1', 3, 'Guardar'),
(102, '2015-04-19 08:04:39', 'Inicio sesion diego', '/ope/compruebaUser.php', '::1', 3, 'Buscar'),
(103, '2015-04-19 08:04:48', 'Busca por cedula censo v-17877206', '/ope/buscaCedula.php?hora=1429446888115&cedula=v-17877206', '::1', 3, 'Buscar'),
(104, '2015-04-19 08:05:03', 'Guardo foto de censo', '/ope/guarda_imagenes_censo.php', '::1', 3, 'Guardar');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `categoria`
--

CREATE TABLE IF NOT EXISTS `categoria` (
`Id_Categoria` int(11) NOT NULL,
  `Existe` int(11) NOT NULL DEFAULT '1',
  `Nombre` char(255) NOT NULL,
  `Descripcion` char(255) DEFAULT NULL
) ENGINE=InnoDB AUTO_INCREMENT=4 DEFAULT CHARSET=latin1;

--
-- Volcado de datos para la tabla `categoria`
--

INSERT INTO `categoria` (`Id_Categoria`, `Existe`, `Nombre`, `Descripcion`) VALUES
(1, 1, 'Incendios', NULL),
(2, 1, 'Luvias', NULL),
(3, 1, 'Meteoro', NULL);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `ciudad`
--

CREATE TABLE IF NOT EXISTS `ciudad` (
`Id_Ciudad` int(11) NOT NULL,
  `Existe` int(11) DEFAULT '1',
  `Nombre` char(255) DEFAULT NULL,
  `Id_Parroquia` int(11) NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=37 DEFAULT CHARSET=latin1;

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
`Id_Afectado` int(11) NOT NULL,
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
  `Id_OtraPropiedad` int(11) NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=7 DEFAULT CHARSET=latin1;

--
-- Volcado de datos para la tabla `cs_afectado`
--

INSERT INTO `cs_afectado` (`Id_Afectado`, `Cedula`, `Nombre`, `Apellido`, `Direccion`, `Sexo`, `Nacionalidad`, `Fecha_Nacimiento`, `Estado_Civil`, `Situacion_Conyugal`, `Telefono`, `Residencia_Estado`, `Residencia_Comunidad`, `Nivel_instruccion`, `Situacion_Laboral`, `LPH`, `uso_LPH`, `Id_OtraPropiedad`) VALUES
(1, 'V-17877206', 'Diego', 'Guerrero', '', 'M', 'V', '1988-05-14', 'Soltero', 'Ninguna', '04167727604', 27, 25, 'Universitaria', 'Organismo Publico', 'true', 'ni idea de lph', 1),
(2, '168745', 'Petra', 'Perez', '', 'M', 'V', '1988-05-14', 'Soltero', 'Ninguna', '04167727604', 27, 25, 'Universitaria', 'Organismo Publico', 'true', 'ni idea de lph', 1),
(6, 'V-17877206', 'Petronilo', 'Jaimes', '', 'M', 'V', '2015-04-15', 'Casado', 'Concubino', '04167789635', 5, 3, 'Primaria', 'Empresa Privada', 'false', 'de otra galaxia', 1);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `cs_censo`
--

CREATE TABLE IF NOT EXISTS `cs_censo` (
`Id_Censo` int(11) NOT NULL,
  `Fecha_Censo` datetime NOT NULL,
  `Observacion` char(250) DEFAULT NULL,
  `Id_Aldea` int(11) NOT NULL,
  `Id_Motivo` int(11) NOT NULL,
  `Id_Entrevistado` int(11) DEFAULT NULL,
  `Id_Afectado` int(11) NOT NULL,
  `Id_CondicionFamiliar` int(11) NOT NULL,
  `Id_Funcionario` int(11) NOT NULL,
  `Id_Vivienda` int(11) NOT NULL,
  `Id_Evento` int(11) NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=7 DEFAULT CHARSET=latin1;

--
-- Volcado de datos para la tabla `cs_censo`
--

INSERT INTO `cs_censo` (`Id_Censo`, `Fecha_Censo`, `Observacion`, `Id_Aldea`, `Id_Motivo`, `Id_Entrevistado`, `Id_Afectado`, `Id_CondicionFamiliar`, `Id_Funcionario`, `Id_Vivienda`, `Id_Evento`) VALUES
(1, '2015-04-18 00:00:00', 'se observo mucha deficiencia en el terreno que se encontraba en la casa en cuanto a las cloacas', 2, 2, NULL, 1, 2, 1, 1, 3),
(2, '2015-04-15 00:00:00', 'problemas de diferentes tipos', 2, 2, NULL, 2, 2, 3, 2, 3),
(6, '2015-04-13 00:00:00', 'se detecto que era una familia de loquillos que tumbaron todo', 2, 6, NULL, 6, 2, 2, 6, 6);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `cs_condicion`
--

CREATE TABLE IF NOT EXISTS `cs_condicion` (
`Id_Condicion` int(11) NOT NULL,
  `Existe` int(11) NOT NULL DEFAULT '1',
  `Nombre` char(200) NOT NULL,
  `Descripcion` char(200) DEFAULT NULL
) ENGINE=InnoDB AUTO_INCREMENT=4 DEFAULT CHARSET=latin1;

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
`Id_CondicionFamiliar` int(11) NOT NULL,
  `Existe` int(11) NOT NULL DEFAULT '1',
  `Nombre` char(200) NOT NULL,
  `Descripcion` char(200) DEFAULT NULL
) ENGINE=InnoDB AUTO_INCREMENT=4 DEFAULT CHARSET=latin1;

--
-- Volcado de datos para la tabla `cs_condicion_familiar`
--

INSERT INTO `cs_condicion_familiar` (`Id_CondicionFamiliar`, `Existe`, `Nombre`, `Descripcion`) VALUES
(2, 1, 'Bajo sueldos', 'Ningun miembro de la familia trabaja'),
(3, 1, 'Mucho miche poca comida', 'holaaaaaaaaaaaaaaaa');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `cs_danho`
--

CREATE TABLE IF NOT EXISTS `cs_danho` (
`Id_Danho` int(11) NOT NULL,
  `Existe` int(11) NOT NULL DEFAULT '1',
  `Nombre` char(150) NOT NULL,
  `Descripcion` char(200) DEFAULT NULL
) ENGINE=InnoDB AUTO_INCREMENT=7 DEFAULT CHARSET=latin1;

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
`Id_Enser` int(11) NOT NULL,
  `Existe` int(11) NOT NULL DEFAULT '1',
  `Nombre` char(150) NOT NULL,
  `Descripcion` char(255) DEFAULT NULL
) ENGINE=InnoDB AUTO_INCREMENT=23 DEFAULT CHARSET=latin1;

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
`Id_Evento` int(11) NOT NULL,
  `Existe` int(11) NOT NULL DEFAULT '1',
  `Nombre` char(200) NOT NULL,
  `Id_TipoEvento` int(11) NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=10 DEFAULT CHARSET=latin1;

--
-- Volcado de datos para la tabla `cs_evento`
--

INSERT INTO `cs_evento` (`Id_Evento`, `Existe`, `Nombre`, `Id_TipoEvento`) VALUES
(3, 1, 'jjjjjjjj 9999', 3),
(4, 1, 'uuuu', 1),
(5, 1, 'jjj6777 00', 3),
(6, 1, 'dsf sd fsdf', 1),
(7, 1, 'dddd', 4),
(8, 1, 'tyty', 5),
(9, 1, 'uuu', 5);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `cs_familiar`
--

CREATE TABLE IF NOT EXISTS `cs_familiar` (
`Id_Familiar` int(11) NOT NULL,
  `Cedula` char(255) NOT NULL,
  `Nombre` char(255) NOT NULL,
  `Apellido` char(255) NOT NULL,
  `Fecha_Nacimiento` datetime NOT NULL,
  `Parentesco` char(255) NOT NULL,
  `Nivel_Instruccion` char(255) DEFAULT NULL,
  `Ocupacion` char(255) DEFAULT NULL,
  `Ingreso_Mensual` float DEFAULT NULL,
  `Id_Afectado` int(11) NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=10 DEFAULT CHARSET=latin1;

--
-- Volcado de datos para la tabla `cs_familiar`
--

INSERT INTO `cs_familiar` (`Id_Familiar`, `Cedula`, `Nombre`, `Apellido`, `Fecha_Nacimiento`, `Parentesco`, `Nivel_Instruccion`, `Ocupacion`, `Ingreso_Mensual`, `Id_Afectado`) VALUES
(1, '-15241945', 'German', 'Guerrero', '1987-05-09 00:00:00', 'Hijo(a)', 'Primaria', 'ninguna', 9000, 1),
(2, '-16981845', 'Belasd', 'Garcia', '1985-09-23 00:00:00', 'Padre', 'Primaria', 'bachaca', 5600, 1),
(3, '-15241945', 'German', 'Guerrero', '1987-05-09 00:00:00', 'Hijo(a)', 'Primaria', 'ninguna', 9000, 2),
(4, '-16981845', 'Belasd', 'Garcia', '1985-09-23 00:00:00', 'Padre', 'Primaria', 'bachaca', 5600, 2),
(5, '-2687459', 'arquearez', 'manola', '1547-12-12 00:00:00', 'Padre', 'Secundaria', 'hace meoww', 6000, 2),
(9, '-7865984', 'albaran', 'manzucki', '1987-05-12 00:00:00', 'Hijo(a)', 'Analfabeta', 'no hace nada', 8000, 6);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `cs_material_elaboracion`
--

CREATE TABLE IF NOT EXISTS `cs_material_elaboracion` (
`Id_MaterialElaboracion` int(11) NOT NULL,
  `Existe` int(11) NOT NULL DEFAULT '1',
  `Nombre` char(255) NOT NULL,
  `Descripcion` char(255) DEFAULT NULL,
  `categoria` varchar(200) NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=17 DEFAULT CHARSET=latin1;

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
`Id_Motivo` int(11) NOT NULL,
  `Existe` int(11) NOT NULL DEFAULT '1',
  `Nombre` char(255) NOT NULL,
  `Descripcion` char(255) DEFAULT NULL
) ENGINE=InnoDB AUTO_INCREMENT=7 DEFAULT CHARSET=latin1;

--
-- Volcado de datos para la tabla `cs_motivo`
--

INSERT INTO `cs_motivo` (`Id_Motivo`, `Existe`, `Nombre`, `Descripcion`) VALUES
(1, 1, 'Inundacion de Planicie', 'la ilusion y te da la vida la vida'),
(2, 1, 'Incendio', 'que todavia me provocas mi amor'),
(6, 1, 'Elevacion de montaÃ±a', 'otra descripcion :D');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `cs_necesidad`
--

CREATE TABLE IF NOT EXISTS `cs_necesidad` (
`Id_Necesidad` int(11) NOT NULL,
  `Existe` int(2) NOT NULL DEFAULT '1',
  `Nombre` char(255) NOT NULL,
  `Descripcion` char(255) DEFAULT NULL
) ENGINE=InnoDB AUTO_INCREMENT=3 DEFAULT CHARSET=latin1;

--
-- Volcado de datos para la tabla `cs_necesidad`
--

INSERT INTO `cs_necesidad` (`Id_Necesidad`, `Existe`, `Nombre`, `Descripcion`) VALUES
(1, 1, 'necesidad 6', 'adsasd6666'),
(2, 1, 'sdf', ' sdf sdf');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `cs_necesidad_afectado`
--

CREATE TABLE IF NOT EXISTS `cs_necesidad_afectado` (
  `Id_Necesidad` int(11) NOT NULL,
  `Id_Afectado` int(11) NOT NULL,
  `Prioridad` varchar(255) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Volcado de datos para la tabla `cs_necesidad_afectado`
--

INSERT INTO `cs_necesidad_afectado` (`Id_Necesidad`, `Id_Afectado`, `Prioridad`) VALUES
(1, 1, NULL),
(1, 2, NULL),
(2, 6, NULL);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `cs_otra_propiedad`
--

CREATE TABLE IF NOT EXISTS `cs_otra_propiedad` (
`Id_OtraPropiedad` int(11) NOT NULL,
  `Existe` int(11) NOT NULL DEFAULT '1',
  `Nombre` char(255) NOT NULL,
  `Descripcion` char(255) DEFAULT NULL
) ENGINE=InnoDB AUTO_INCREMENT=3 DEFAULT CHARSET=latin1;

--
-- Volcado de datos para la tabla `cs_otra_propiedad`
--

INSERT INTO `cs_otra_propiedad` (`Id_OtraPropiedad`, `Existe`, `Nombre`, `Descripcion`) VALUES
(1, 1, 'Casa', 'casita'),
(2, 1, 'casota', 'casotota');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `cs_parte`
--

CREATE TABLE IF NOT EXISTS `cs_parte` (
`Id_Parte` int(11) NOT NULL,
  `Existe` int(11) NOT NULL DEFAULT '1',
  `Nombre` char(255) NOT NULL,
  `Descripcion` char(255) DEFAULT NULL
) ENGINE=InnoDB AUTO_INCREMENT=7 DEFAULT CHARSET=latin1;

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
`Id_Refugio` int(11) NOT NULL,
  `Existe` int(11) NOT NULL DEFAULT '1',
  `Nombre` char(255) NOT NULL,
  `Direccion` char(255) NOT NULL,
  `Telefono` char(15) DEFAULT NULL,
  `Capacidad` int(11) DEFAULT NULL,
  `Descripcion` char(255) DEFAULT NULL,
  `Id_Aldea` int(11) NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=3 DEFAULT CHARSET=latin1;

--
-- Volcado de datos para la tabla `cs_refugio`
--

INSERT INTO `cs_refugio` (`Id_Refugio`, `Existe`, `Nombre`, `Direccion`, `Telefono`, `Capacidad`, `Descripcion`, `Id_Aldea`) VALUES
(1, 1, 'Refugio giraldo', 'Calle 3 #7-3', '0416-7727898', 100, 'Alberga a 20 familias', 1),
(2, 1, 'Refugio el caiman', 'barrio el caiman, calle 5 #7-8', '0416-4561298', 150, 'Al lado del parque el caiman', 3);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `cs_refugio_afectado`
--

CREATE TABLE IF NOT EXISTS `cs_refugio_afectado` (
  `Id_Afectado` int(11) NOT NULL,
  `Id_Refugio` int(11) NOT NULL,
  `Existe` int(11) NOT NULL DEFAULT '1',
  `Fecha_Ingreso` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `cs_tenencia`
--

CREATE TABLE IF NOT EXISTS `cs_tenencia` (
`Id_Tenencia` int(11) NOT NULL,
  `Existe` int(11) NOT NULL DEFAULT '1',
  `Nombre` char(255) NOT NULL,
  `Descripcion` char(255) DEFAULT NULL
) ENGINE=InnoDB AUTO_INCREMENT=8 DEFAULT CHARSET=latin1;

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
`Id_Tipo` int(11) NOT NULL,
  `Existe` int(11) NOT NULL DEFAULT '1',
  `Nombre` char(255) NOT NULL,
  `Descripcion` char(255) DEFAULT NULL
) ENGINE=InnoDB AUTO_INCREMENT=7 DEFAULT CHARSET=latin1;

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
`Id_TipoEvento` int(11) NOT NULL,
  `Nombre` varchar(255) DEFAULT NULL
) ENGINE=InnoDB AUTO_INCREMENT=6 DEFAULT CHARSET=latin1;

--
-- Volcado de datos para la tabla `cs_tipo_evento`
--

INSERT INTO `cs_tipo_evento` (`Id_TipoEvento`, `Nombre`) VALUES
(1, 'asd2222'),
(3, 'ggggggg'),
(4, '6666yyyyyyyyyyyyyuu'),
(5, 'yy y y yyyyy yyyy5');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `cs_vivienda`
--

CREATE TABLE IF NOT EXISTS `cs_vivienda` (
`Id_Vivienda` int(11) NOT NULL,
  `Numero_Familias` int(11) DEFAULT NULL,
  `Numero_Habitaciones` int(11) DEFAULT NULL,
  `Id_Condicion` int(11) NOT NULL,
  `Id_MaterialElaboracion` int(11) NOT NULL,
  `Id_Tenencia` int(11) NOT NULL,
  `Id_Tipo` int(11) NOT NULL,
  `Id_Parte` int(11) NOT NULL,
  `Id_Danho` int(11) NOT NULL,
  `Id_Parte_Grieta` int(11) NOT NULL,
  `Id_MaterialParedes` int(11) NOT NULL,
  `Id_MaterialPisos` int(11) NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=7 DEFAULT CHARSET=latin1;

--
-- Volcado de datos para la tabla `cs_vivienda`
--

INSERT INTO `cs_vivienda` (`Id_Vivienda`, `Numero_Familias`, `Numero_Habitaciones`, `Id_Condicion`, `Id_MaterialElaboracion`, `Id_Tenencia`, `Id_Tipo`, `Id_Parte`, `Id_Danho`, `Id_Parte_Grieta`, `Id_MaterialParedes`, `Id_MaterialPisos`) VALUES
(1, 5, 3, 2, 3, 5, 1, 1, 1, 0, 7, 16),
(2, 5, 3, 2, 3, 5, 1, 1, 1, 1, 7, 16),
(3, 3, 6, 3, 3, 7, 1, 5, 2, 0, 7, 15),
(4, 3, 6, 3, 3, 7, 1, 5, 2, 0, 7, 15),
(5, 3, 6, 3, 3, 7, 1, 5, 2, 5, 7, 15),
(6, 3, 6, 3, 3, 7, 1, 5, 2, 5, 7, 15);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `cs_vivienda_enser`
--

CREATE TABLE IF NOT EXISTS `cs_vivienda_enser` (
  `Id_Enser` int(11) NOT NULL,
  `Id_Vivienda` int(11) NOT NULL,
  `Cantidad` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `entrevistado`
--

CREATE TABLE IF NOT EXISTS `entrevistado` (
`Id_Entrevistado` int(11) NOT NULL,
  `Existe` int(11) NOT NULL DEFAULT '1',
  `Cedula` char(255) NOT NULL,
  `Nombre` char(255) NOT NULL,
  `Apellido` char(255) NOT NULL,
  `Telefono` char(15) DEFAULT NULL,
  `Propietario` char(10) DEFAULT NULL
) ENGINE=InnoDB AUTO_INCREMENT=31 DEFAULT CHARSET=latin1;

--
-- Volcado de datos para la tabla `entrevistado`
--

INSERT INTO `entrevistado` (`Id_Entrevistado`, `Existe`, `Cedula`, `Nombre`, `Apellido`, `Telefono`, `Propietario`) VALUES
(3, 1, 'V-17877206', 'diego', 'guerrero', '04167727604', '1'),
(4, 1, 'V-19918907', 'MarÃ­a Elena', 'Reyes CedeÃ±o', '04264740694', '1'),
(5, 1, 'V-123456', 'maria e', 'reyes c', '123456789', '0'),
(6, 1, 'V-789654123', 'elena', 'werwee', 'dsdsd', '0'),
(7, 1, 'E-80304431', 'Pedro M', 'Reyes C', '555567566', '1'),
(9, 1, 'V-789456', 'dfdfdf', 'dfdf', 'dfdf', '1'),
(10, 1, 'V-15648933', 'Nathaly', 'Garnica', '16890255', '0'),
(11, 1, 'V-3123123', 'sdasd', 'asdasd', '(0276)-2123123', '0'),
(12, 1, 'V-asdasd', '', '', '', NULL),
(13, 1, 'V-12312312', 'qweq', 'weqweqwe', '(0213)-1231231', '0'),
(14, 1, '-621783618', 'fffsdff', 'asadasd', '', '1'),
(15, 1, 'E-213123123', 'sdas', 'dasda', '(0321)-3123123', '0'),
(16, 1, '-23123123123', 'asdasd', 'asdasd', '', '1'),
(17, 1, 'V-23123123', 'adsda', 'sdasd', '(0231)-2312321', '0'),
(18, 1, '-v-12434242', 'asd', 'dasdasd', '', '1'),
(19, 1, 'V-123123123', 'sadasdasd', 'asdasd', '(0231)-2312312', '0'),
(20, 1, 'v-212312312', 'asdasd', 'asdasda', '', '1'),
(21, 1, 'E-23123123', 'asdasd', 'asdasd', '(0131)-2312312', '0'),
(22, 1, 'v-443545657', 'asdasdasd', 'asdasd', '', '1'),
(23, 1, 'E-12312312', 'asdasd', 'asdasd', '(0231)-3123123', '0'),
(24, 1, 'v-13123123', 'asd adasd', 'sdasd', '', '1'),
(26, 1, 'v-1212313', 'asdasd', 'asdasd', '', '1'),
(28, 1, 'v-3794530', 'German', 'Guerrero', '', '1'),
(29, 1, 'V-22222222222', 'asd asd', 'asd asdas d', '(0654)-6464645', '0'),
(30, 1, 'b-223232323', 'czcads', 'as dasd', '', '1');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `estado`
--

CREATE TABLE IF NOT EXISTS `estado` (
`Id_estado` int(11) NOT NULL,
  `Existe` int(11) NOT NULL DEFAULT '1',
  `Nombre` char(255) DEFAULT NULL
) ENGINE=InnoDB AUTO_INCREMENT=20 DEFAULT CHARSET=latin1;

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
`Id_Cita` int(11) NOT NULL,
  `No_Folio` int(11) DEFAULT NULL,
  `Fecha_Solicitud` datetime NOT NULL,
  `Fecha_Cita` datetime NOT NULL,
  `Direccion` char(255) DEFAULT NULL,
  `Estado` char(255) NOT NULL DEFAULT 'Iniciada',
  `Observacion` char(255) DEFAULT NULL,
  `Id_Tipo` int(11) NOT NULL,
  `Id_Aldea` int(11) NOT NULL,
  `Id_Entrevistado` int(11) NOT NULL,
  `Id_Funcionario` int(11) DEFAULT NULL,
  `Id_Propietario` int(11) DEFAULT NULL
) ENGINE=InnoDB AUTO_INCREMENT=17 DEFAULT CHARSET=latin1;

--
-- Volcado de datos para la tabla `ev_cita`
--

INSERT INTO `ev_cita` (`Id_Cita`, `No_Folio`, `Fecha_Solicitud`, `Fecha_Cita`, `Direccion`, `Estado`, `Observacion`, `Id_Tipo`, `Id_Aldea`, `Id_Entrevistado`, `Id_Funcionario`, `Id_Propietario`) VALUES
(1, 456, '2014-06-03 00:00:00', '2014-06-19 00:00:00', 'calle principal Barrio Bolivar', 'Procesada', 'asasas as otra cosas', 10, 1, 4, NULL, NULL),
(2, 789, '2014-06-04 00:00:00', '2014-06-19 00:00:00', 'sdsdsdsd', 'Procesada', 'sdsdsdsd', 14, 2, 5, NULL, NULL),
(3, 1234, '2014-06-04 00:00:00', '2014-06-10 00:00:00', 'sdsdsds', 'Iniciada', 'sdsdsdsdsd', 9, 2, 6, NULL, NULL),
(4, 3409, '2014-06-04 00:00:00', '2014-06-10 00:00:00', 'ssdsd sdsjdhsjds msdhsjdhsd mhjsdjsds', 'Iniciada', 'sdvsdhgsd nsgdhsdghsd dgshdgshdgsd', 14, 2, 7, NULL, NULL),
(7, 78963, '2014-06-04 00:00:00', '2014-06-19 00:00:00', 'dsdsdsd', 'Iniciada', 'sdsdsds fsdsd dsd sdsdsd', 14, 2, 10, NULL, NULL),
(8, 0, '2014-11-15 00:00:00', '2014-11-11 00:00:00', 'adsda', 'Iniciada', 'asdasdasd', 9, 1, 11, NULL, NULL),
(9, 0, '2014-11-15 00:00:00', '2014-11-13 00:00:00', 'sASAsA', 'Anulada', 'ASHD AJHSD JKAHSKDA SDHA', 17, 2, 13, NULL, 14),
(10, 0, '2014-11-15 00:00:00', '2014-11-08 00:00:00', 'ASAs', 'Anulada', 'ASAs', 17, 1, 15, NULL, 16),
(11, 0, '2014-11-15 00:00:00', '2014-11-07 00:00:00', 'asdasd', 'Iniciada', 'asdasd asd a dasd', 14, 1, 17, NULL, 18),
(12, 0, '2014-11-15 00:00:00', '2014-11-19 00:00:00', 'asdassdad', 'Procesada', 'dasdasdasd asdad', 9, 2, 19, NULL, 20),
(13, 0, '2014-11-15 00:00:00', '2014-11-15 00:00:00', 'sdasdasd', 'Procesada', 'asdasd', 10, 1, 21, NULL, 22),
(14, 0, '2014-11-15 00:00:00', '2014-11-07 00:00:00', 'adsa sdasd', 'Iniciada', 'akshd ashdkaj shdasdk', 17, 1, 23, NULL, 24),
(15, 1, '2015-03-19 00:00:00', '2015-03-03 00:00:00', 'calle 3', 'Iniciada', 'ninguna', 14, 1, 3, 1, 28),
(16, 456, '2015-03-21 00:00:00', '2015-02-23 00:00:00', 'dsf sdf', 'Procesada', 's fsd f', 14, 1, 29, 1, 30);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `ev_evaluacion`
--

CREATE TABLE IF NOT EXISTS `ev_evaluacion` (
`Id_Evaluacion` int(11) NOT NULL,
  `Fecha` datetime NOT NULL,
  `Direccion` char(255) DEFAULT NULL,
  `Informe_Actividad` text NOT NULL,
  `Observacion` text,
  `Recomendacion` text,
  `Id_Funcionario` int(11) NOT NULL,
  `Id_Cita` int(11) NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=14 DEFAULT CHARSET=latin1;

--
-- Volcado de datos para la tabla `ev_evaluacion`
--

INSERT INTO `ev_evaluacion` (`Id_Evaluacion`, `Fecha`, `Direccion`, `Informe_Actividad`, `Observacion`, `Recomendacion`, `Id_Funcionario`, `Id_Cita`) VALUES
(5, '2014-11-16 17:35:35', 'calle principal Barrio Bolivar', 'asd', 'asdasd', 'asd', 1, 1),
(6, '2014-11-16 20:04:35', 'asdassdad', 'Amet et adipiscing odio mus dapibus urna massa, velit? Nunc, montes, integer amet! A cursus eu. Mus! Turpis urna scelerisque. Enim ridiculus? Sed tristique augue auctor elementum! A, amet! Turpis. Est, amet et, auctor a scelerisque, dolor augue natoque, ultricies? Lorem cras et cum turpis hac porta enim, arcu placerat parturient nascetur, facilisis mattis. Mid! Vut proin pulvinar tristique magna, placerat egestas penatibus mauris, nec platea, in nascetur et, dis, diam est dignissim aliquet turpis porta dignissim, aenean? Amet urna, auctor lundium integer, hac nisi! Mauris in. Penatibus? Non adipiscing nunc. Etiam elementum placerat quis est, ac sit velit elit. Cum urna, natoque elementum pulvinar pid turpis ut, ut, pid egestas lorem! Ac sit parturient, a? Cursus augue! Mauris integer.\n\nHabitasse aenean dignissim et scelerisque in sociis aliquet pulvinar lundium ut diam. Odio tortor duis elementum velit cras nec. Placerat, augue dolor sociis lacus vel dis pid scelerisque placerat turpis scelerisque etiam pulvinar, habitasse placerat, platea magna enim sagittis integer proin tincidunt in! Odio scelerisque elit rhoncus, dis ac sagittis sed lacus integer in, amet auctor elit velit vel magna porttitor, diam ac sagittis, pellentesque ac augue mattis habitasse turpis a et, tristique ut? Mattis proin nunc diam ultrices auctor sociis elementum mus, dapibus dis et etiam auctor sit! Elementum nascetur, aliquam? Ac dapibus, risus, amet risus sit platea ac etiam sagittis montes, velit magna porta risus. Et nunc? Dis in augue dictumst! Etiam duis purus rhoncus? Ac a.', 'sda', 'Amet et adipiscing odio mus dapibus urna massa, velit? Nunc, montes, integer amet! A cursus eu. Mus! Turpis urna scelerisque. Enim ridiculus? Sed tristique augue auctor elementum! A, amet! Turpis. Est, amet et, auctor a scelerisque, dolor augue natoque, ultricies? Lorem cras et cum turpis hac porta enim, arcu placerat parturient nascetur, facilisis mattis. Mid! Vut proin pulvinar tristique magna, placerat egestas penatibus mauris, nec platea, in nascetur et, dis, diam est dignissim aliquet turpis porta dignissim, aenean? Amet urna, auctor lundium integer, hac nisi! Mauris in. Penatibus? Non adipiscing nunc. Etiam elementum placerat quis est, ac sit velit elit. Cum urna, natoque elementum pulvinar pid turpis ut, ut, pid egestas lorem! Ac sit parturient, a? Cursus augue! Mauris integer.\n\nHabitasse aenean dignissim et scelerisque in sociis aliquet pulvinar lundium ut diam. Odio tortor duis elementum velit cras nec. Placerat, augue dolor sociis lacus vel dis pid scelerisque placerat turpis scelerisque etiam pulvinar, habitasse placerat, platea magna enim sagittis integer proin tincidunt in! Odio scelerisque elit rhoncus, dis ac sagittis sed lacus integer in, amet auctor elit velit vel magna porttitor, diam ac sagittis, pellentesque ac augue mattis habitasse turpis a et, tristique ut? Mattis proin nunc diam ultrices auctor sociis elementum mus, dapibus dis et etiam auctor sit! Elementum nascetur, aliquam? Ac dapibus, risus, amet risus sit platea ac etiam sagittis montes, velit magna porta risus. Et nunc? Dis in augue dictumst! Etiam duis purus rhoncus? Ac a.', 1, 12),
(7, '2015-03-21 11:01:06', 'sdsdsdsd', 'ninguna acitvidad', 'ninguna obser', 'ninguna recomendacion', 1, 2),
(12, '2015-03-22 07:53:58', 'sdasdasd', 'QQQQQQQ', 'EEEEEEEEEE', 'WWWWWWWWW', 1, 13),
(13, '2015-03-22 10:07:05', 'dsf sdf', 'tttttttttt', 'yyuuuuuuuuuu', 'yyyy', 1, 16);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `ev_tipo`
--

CREATE TABLE IF NOT EXISTS `ev_tipo` (
`Id_Tipo` int(11) NOT NULL,
  `Existe` int(11) NOT NULL DEFAULT '1',
  `Nombre` char(255) NOT NULL,
  `Descripcion` char(255) DEFAULT NULL
) ENGINE=InnoDB AUTO_INCREMENT=18 DEFAULT CHARSET=latin1;

--
-- Volcado de datos para la tabla `ev_tipo`
--

INSERT INTO `ev_tipo` (`Id_Tipo`, `Existe`, `Nombre`, `Descripcion`) VALUES
(9, 1, 'Inspeccion a Terreno', 'EvaluaciÃ³n detallada del terreno'),
(10, 1, 'Inspeccion a Vivienda', 'Todos los generadores de Lorem Ipsum que se'),
(11, 1, 'Vivienda para la Venta', 'Todos los generadores de Lorem Ipsum que se'),
(12, 1, 'Terreno para sustituciÃ³n', 'Todos los generadores de Lorem Ipsum que se'),
(13, 1, 'Terreno para construcciÃ³n de vivienda', 'Todos los generadores de Lorem Ipsum que sepsum q'),
(14, 1, 'Informe TÃ©cnico', 'Informe Realizado sobre una evaluaciÃ³n'),
(17, 1, 'informe de algo', 'algo mas');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `foto`
--

CREATE TABLE IF NOT EXISTS `foto` (
`Id_Foto` int(11) NOT NULL,
  `Existe` int(11) NOT NULL DEFAULT '1',
  `Nombre` char(255) DEFAULT NULL,
  `Url` char(255) NOT NULL,
  `Id_Censo` int(11) DEFAULT NULL,
  `Id_Categoria` int(11) DEFAULT NULL,
  `Id_Actividad` int(11) DEFAULT NULL
) ENGINE=InnoDB AUTO_INCREMENT=11 DEFAULT CHARSET=latin1;

--
-- Volcado de datos para la tabla `foto`
--

INSERT INTO `foto` (`Id_Foto`, `Existe`, `Nombre`, `Url`, `Id_Censo`, `Id_Categoria`, `Id_Actividad`) VALUES
(1, 1, 'assets/img/imagenes_opg/RA_1427562664_asd.png', 'assets/img/imagenes_opg/RA_1427562664_asd.png', NULL, NULL, 26),
(2, 1, 'assets/img/imagenes_opg/RA_1429446025_yyyy.png', 'assets/img/imagenes_opg/RA_1429446025_yyyy.png', NULL, NULL, 9),
(3, 1, 'assets/img/imagenes_opg/RA_1429446086_fgfd.png', 'assets/img/imagenes_opg/RA_1429446086_fgfd.png', 1, NULL, NULL),
(4, 1, 'assets/img/imagenes_opg/CENSO_1429446258_asd.png', 'assets/img/imagenes_opg/CENSO_1429446258_asd.png', 6, NULL, NULL),
(5, 1, 'assets/img/imagenes_opg/CENSO_1429446415_lumosity=D.png', 'assets/img/imagenes_opg/CENSO_1429446415_lumosity=D.png', 1, NULL, NULL),
(6, 1, 'assets/img/imagenes_opg/CENSO_1429446777_B9DHteLCMAAPmMn.jpg', 'assets/img/imagenes_opg/CENSO_1429446777_B9DHteLCMAAPmMn.jpg', 6, NULL, NULL),
(7, 1, 'assets/img/imagenes_opg/CENSO_1429446777_Beagle.jpg', 'assets/img/imagenes_opg/CENSO_1429446777_Beagle.jpg', 6, NULL, NULL),
(8, 1, 'assets/img/imagenes_opg/CENSO_1429446903_feli2.jpg', 'assets/img/imagenes_opg/CENSO_1429446903_feli2.jpg', 6, NULL, NULL),
(9, 1, 'assets/img/imagenes_opg/CENSO_1429446903_feli22.jpg', 'assets/img/imagenes_opg/CENSO_1429446903_feli22.jpg', 6, NULL, NULL),
(10, 1, 'assets/img/imagenes_opg/CENSO_1429446903_fotos-increibles-5.jpg', 'assets/img/imagenes_opg/CENSO_1429446903_fotos-increibles-5.jpg', 6, NULL, NULL);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `funcionario`
--

CREATE TABLE IF NOT EXISTS `funcionario` (
`Id_Funcionario` int(11) NOT NULL,
  `Existe` int(11) NOT NULL DEFAULT '1',
  `Cedula` char(255) NOT NULL,
  `Nombre` char(255) NOT NULL,
  `Apellido` char(255) NOT NULL,
  `Organismo` char(255) DEFAULT NULL,
  `Cargo` char(255) DEFAULT NULL,
  `Id_Usuario` int(11) DEFAULT NULL
) ENGINE=InnoDB AUTO_INCREMENT=4 DEFAULT CHARSET=latin1;

--
-- Volcado de datos para la tabla `funcionario`
--

INSERT INTO `funcionario` (`Id_Funcionario`, `Existe`, `Cedula`, `Nombre`, `Apellido`, `Organismo`, `Cargo`, `Id_Usuario`) VALUES
(1, 1, '18256232', 'nathaly', 'garnica', 'inaprocet', 'algo', 1),
(2, 1, '17877206', 'Diego', 'Guerrero', 'CentroMedico', 'Operario', 1),
(3, 1, '15241945', 'Pedro', 'Perez', '171', 'Supervisor', 2);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `funcionario_actividad`
--

CREATE TABLE IF NOT EXISTS `funcionario_actividad` (
  `Id_Funcionario` int(11) NOT NULL,
  `Id_Actividad` int(11) NOT NULL,
  `Fecha` date NOT NULL,
  `Id_Puesto` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Volcado de datos para la tabla `funcionario_actividad`
--

INSERT INTO `funcionario_actividad` (`Id_Funcionario`, `Id_Actividad`, `Fecha`, `Id_Puesto`) VALUES
(1, 15, '2015-03-28', 9),
(1, 21, '2015-03-28', 9),
(1, 23, '2015-03-28', 9),
(1, 26, '2015-03-28', 9),
(1, 27, '2015-03-29', 9),
(1, 28, '2015-03-29', 10),
(1, 29, '2015-04-04', 10),
(2, 28, '2015-03-29', 9),
(2, 29, '2015-04-04', 9),
(3, 28, '2015-03-29', 8);

-- --------------------------------------------------------

--
-- Estructura Stand-in para la vista `ins_citas`
--
CREATE TABLE IF NOT EXISTS `ins_citas` (
`id_cita` int(11)
,`no_folio` int(11)
,`fecha_solicitud` datetime
,`fecha_cita` datetime
,`direccion` char(255)
,`est_cita` char(255)
,`observacion` char(255)
,`aldea` char(255)
,`ciudad` char(255)
,`parroquia` char(255)
,`municipio` char(255)
,`estado` char(255)
,`propietario` char(10)
,`nombre` char(255)
,`apellido` char(255)
,`cedula` char(255)
,`telefono` char(15)
,`tipo` char(255)
,`propietarioced` int(11)
);
-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `menu`
--

CREATE TABLE IF NOT EXISTS `menu` (
`Id_Menu` int(11) NOT NULL,
  `Nombre` char(255) NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=45 DEFAULT CHARSET=latin1;

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
`Id_Municipio` int(11) NOT NULL,
  `Existe` int(11) NOT NULL DEFAULT '1',
  `Nombre` char(255) NOT NULL,
  `Id_estado` int(11) NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=40 DEFAULT CHARSET=latin1;

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
`Id_Parroquia` int(11) NOT NULL,
  `Existe` int(11) NOT NULL DEFAULT '1',
  `Nombre` char(255) NOT NULL,
  `Id_Municipio` int(11) NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=75 DEFAULT CHARSET=latin1;

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
`Id_Privilegios` int(11) NOT NULL,
  `Existe` int(11) NOT NULL DEFAULT '1',
  `Id_Usuario` int(11) NOT NULL,
  `Id_Menu` int(11) NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=19 DEFAULT CHARSET=latin1;

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
  `Observacion` char(255) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Volcado de datos para la tabla `ra_accion_actividad`
--

INSERT INTO `ra_accion_actividad` (`Id_Actividad`, `Id_AccionTomada`, `Observacion`) VALUES
(21, 5, NULL),
(23, 7, NULL),
(26, 6, NULL),
(27, 5, NULL),
(28, 5, NULL),
(29, 7, NULL);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `ra_accion_tomada`
--

CREATE TABLE IF NOT EXISTS `ra_accion_tomada` (
`Id_AccionTomada` int(11) NOT NULL,
  `Existe` int(11) NOT NULL DEFAULT '1',
  `Nombre` char(255) NOT NULL,
  `Descripcion` char(255) DEFAULT NULL
) ENGINE=InnoDB AUTO_INCREMENT=10 DEFAULT CHARSET=latin1;

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
`Id_Actividad` int(11) NOT NULL,
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
  `Nov_id` int(11) DEFAULT NULL
) ENGINE=InnoDB AUTO_INCREMENT=30 DEFAULT CHARSET=latin1;

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
(10, 9, 1, 'asdasa sdasasdas sdaaasd', '09:00:15', '09:00:15', '09:00:15', '09:00:15', '2014-06-03', '1234', 'sadsdads', 'asdassdasd', 'adsasdddddddddd', 24, 6, 2, NULL),
(11, 0, 1, 'calle 3 #132', '21:12:15', '21:13:15', '21:13:15', '21:18:00', '2015-03-17', '17877206', 'se daÃ±o todo', 'muchas observaciones', 'mmmm', 30, 6, 1, NULL),
(12, 43434, 1, 'df af asdf adsf', '20:49:00', '20:49:00', '20:49:00', '20:49:00', '2015-03-23', '444', 'gn vcxn', ' fghfg h', 's ghsfgh ', 26, 6, 2, NULL),
(13, 43434, 1, 'df af asdf adsf', '20:49:00', '20:49:00', '20:49:00', '20:49:00', '2015-03-23', '444', 'gn vcxn', ' fghfg h', 's ghsfgh ', 26, 6, 2, NULL),
(14, 3434, 1, 'df gdfg', '10:09:15', '10:09:15', '10:09:15', '10:09:15', '2015-03-27', '45345', 'ds fg', ' dfj', ' ', 31, 6, 3, NULL),
(15, 232323, 1, 'asdf', '10:25:15', '10:25:15', '10:25:15', '10:25:15', '2015-03-11', '323', 'asdf', 'asdfdfg', 'fgsdfgdfg', 25, 5, 1, NULL),
(16, 232323, 1, 'asdf', '10:25:15', '10:25:15', '10:25:15', '10:25:15', '2015-03-11', '323', 'asdf', 'asdfdfg', 'fgsdfgdfg', 25, 5, 1, NULL),
(17, 232323, 1, 'asdf', '10:25:15', '10:25:15', '10:25:15', '10:25:15', '2015-03-11', '323', 'asdf', 'asdfdfg', 'fgsdfgdfg', 25, 5, 1, NULL),
(18, 232323, 1, 'asdf', '10:25:15', '10:25:15', '10:25:15', '10:25:15', '2015-03-11', '323', 'asdf', 'asdfdfg', 'fgsdfgdfg', 25, 5, 1, NULL),
(19, 232323, 1, 'asdf', '10:25:15', '10:25:15', '10:25:15', '10:25:15', '2015-03-11', '323', 'asdf', 'asdfdfg', 'fgsdfgdfg', 25, 5, 1, NULL),
(20, 232323, 1, 'asdf', '10:25:15', '10:25:15', '10:25:15', '10:25:15', '2015-03-11', '323', 'asdf', 'asdfdfg', 'fgsdfgdfg', 25, 5, 1, NULL),
(21, 43434, 1, 'sdfsadf', '11:12:15', '11:12:15', '11:12:15', '11:12:15', '2015-04-01', '3433', 'dfg dsfg', 's dgdsfg ', 's dgds g', 19, 5, 1, NULL),
(22, 43434, 1, 'sdfsadf', '11:12:15', '11:12:15', '11:12:15', '11:12:15', '2015-04-01', '3433', 'dfg dsfg', 's dgdsfg ', 's dgds g', 19, 5, 1, NULL),
(23, 34343, 1, 'asfdasdf', '11:33:00', '11:33:00', '11:33:00', '11:33:00', '2015-03-26', '3434', 'asdfas dfasd f', 'asdf asdf asdf', 'asdf asdfasdf asdf', 22, 7, 1, NULL),
(24, 34343, 1, 'asfdasdf', '11:33:00', '11:33:00', '11:33:00', '11:33:00', '2015-03-26', '3434', 'asdfas dfasd f', 'asdf asdf asdf', 'asdf asdfasdf asdf', 22, 7, 1, NULL),
(25, 34343, 1, 'asfdasdf', '11:33:00', '11:33:00', '11:33:00', '11:33:00', '2015-03-26', '3434', 'asdfas dfasd f', 'asdf asdf asdf', 'asdf asdfasdf asdf', 22, 7, 1, NULL),
(26, 111212, 1, 'calle 3', '12:39:00', '12:39:00', '12:39:00', '12:39:00', '2015-03-04', '222', 'aaaaaaaa1', 'ssssssss3', 'ddddddd2', 25, 7, 2, NULL),
(27, 128945, 1, 'Calle 3 1#132', '16:16:30', '14:15:30', '14:20:30', '14:22:30', '2015-03-30', '4578', 'hubo una situacion normal', 'nos dieron cafe :D', 'no nos dieron azucar :(', 27, 5, 3, NULL),
(28, 0, 1, 'calle Y con carrera L', '14:25:30', '14:25:30', '14:25:30', '14:25:30', '2015-03-10', '4562015', 'sin situaciones5', 'pues todo bien7', 'normalin6', 29, 7, 3, NULL),
(29, 0, 1, 'calle 6 carrera 25 con 90th del central park', '15:23:45', '15:23:45', '15:23:45', '15:23:45', '2015-04-15', '1234', 'la situacion fue muy tensa desde un comienzo!!!', 'pruuuuummmmm puuumpp!!! pump!pruuuuummmmm puuumpp!!! pump!pruuuuummmmm puuumpp!!! pump!', 'turbo :D turbo :D turbo :D turbo :D turbo :D turbo :D ', 19, 7, 2, NULL);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `ra_actividad_danho`
--

CREATE TABLE IF NOT EXISTS `ra_actividad_danho` (
  `Id_Actividad` int(11) NOT NULL,
  `Id_Danho` int(11) NOT NULL,
  `Observacion` char(255) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Volcado de datos para la tabla `ra_actividad_danho`
--

INSERT INTO `ra_actividad_danho` (`Id_Actividad`, `Id_Danho`, `Observacion`) VALUES
(23, 13, NULL),
(26, 12, NULL),
(27, 10, NULL),
(28, 12, NULL),
(29, 12, NULL);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `ra_condicion`
--

CREATE TABLE IF NOT EXISTS `ra_condicion` (
`Id_Condicion` int(11) NOT NULL,
  `Existe` int(11) NOT NULL DEFAULT '1',
  `Nombre` char(255) NOT NULL,
  `Descripcion` char(255) DEFAULT NULL
) ENGINE=InnoDB AUTO_INCREMENT=9 DEFAULT CHARSET=latin1;

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
`Id_Danho` int(11) NOT NULL,
  `Existe` int(11) NOT NULL DEFAULT '1',
  `Nombre` char(255) NOT NULL,
  `Descripcion` char(255) DEFAULT NULL
) ENGINE=InnoDB AUTO_INCREMENT=15 DEFAULT CHARSET=latin1;

--
-- Volcado de datos para la tabla `ra_danho`
--

INSERT INTO `ra_danho` (`Id_Danho`, `Existe`, `Nombre`, `Descripcion`) VALUES
(6, 1, 'Alumbrado publico', 'alumbrado para que roben :D'),
(7, 1, 'vehiculos', 'todas las marcas\n'),
(8, 1, 'Hidrantes', 'para que esten fresquitos'),
(9, 1, '', 'Instituciones publicas'),
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
  `Jefe_Comision` char(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Volcado de datos para la tabla `ra_organismo_actividad`
--

INSERT INTO `ra_organismo_actividad` (`Id_OtrosOrganismo`, `Id_Actividad`, `Unidad`, `Jefe_Comision`) VALUES
(3, 23, '3434', 'sdfasdf'),
(3, 27, '789', 'Frank einstein'),
(3, 28, '355', 'dfvdfvd fvdf v'),
(3, 29, '222', 'Caceres Brown'),
(4, 15, '333', 'sadfsdf'),
(4, 21, '3333', '3dfgdfgdfg'),
(4, 26, '333', 'pedro perez'),
(4, 27, '665', 'Pedro Martinez'),
(4, 28, '2323', 'sd sadfsdf sdf'),
(4, 29, '344', 'Pedro Montilva');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `ra_otros_organismo`
--

CREATE TABLE IF NOT EXISTS `ra_otros_organismo` (
`Id_OtrosOrganismo` int(11) NOT NULL,
  `Existe` int(11) NOT NULL DEFAULT '1',
  `Nombre` char(255) NOT NULL,
  `Descripcion` char(255) DEFAULT NULL
) ENGINE=InnoDB AUTO_INCREMENT=5 DEFAULT CHARSET=latin1;

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
`Id_Puesto` int(11) NOT NULL,
  `Existe` int(11) NOT NULL DEFAULT '1',
  `Nombre` char(255) NOT NULL,
  `Descripcion` char(255) DEFAULT NULL
) ENGINE=InnoDB AUTO_INCREMENT=11 DEFAULT CHARSET=latin1;

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
`Id_Tipo` int(11) NOT NULL,
  `Existe` int(11) NOT NULL DEFAULT '1',
  `Nombre` char(255) NOT NULL,
  `Descripcion` char(255) DEFAULT NULL
) ENGINE=InnoDB AUTO_INCREMENT=34 DEFAULT CHARSET=latin1;

--
-- Volcado de datos para la tabla `ra_tipo`
--

INSERT INTO `ra_tipo` (`Id_Tipo`, `Existe`, `Nombre`, `Descripcion`) VALUES
(19, 1, 'Accidente de transito', 'Accidentes de transito en el casco de la ciudad'),
(20, 1, 'Emergencias medicas', 'Emergencias de todo tipo xD'),
(21, 1, 'Incendio de estructura', 'incendios por antisociales'),
(22, 1, 'Incendio vehicular', 'Le cayo poste y exploto'),
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
`Id_Usuario` int(11) NOT NULL,
  `Existe` int(11) NOT NULL DEFAULT '1',
  `Nombre` char(255) NOT NULL,
  `Usuario` char(255) NOT NULL,
  `Password` char(255) NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=4 DEFAULT CHARSET=latin1;

--
-- Volcado de datos para la tabla `usuario`
--

INSERT INTO `usuario` (`Id_Usuario`, `Existe`, `Nombre`, `Usuario`, `Password`) VALUES
(1, 1, 'Maria Reyes', 'maria', '12345'),
(2, 1, 'Elena Cedre', 'Auditor', 'mariREY18'),
(3, 1, 'Diego', 'diego', 'diego');

-- --------------------------------------------------------

--
-- Estructura para la vista `ins_citas`
--
DROP TABLE IF EXISTS `ins_citas`;

CREATE ALGORITHM=UNDEFINED DEFINER=`root`@`localhost` SQL SECURITY DEFINER VIEW `ins_citas` AS (select `a`.`Id_Cita` AS `id_cita`,`a`.`No_Folio` AS `no_folio`,`a`.`Fecha_Solicitud` AS `fecha_solicitud`,`a`.`Fecha_Cita` AS `fecha_cita`,`a`.`Direccion` AS `direccion`,`a`.`Estado` AS `est_cita`,`a`.`Observacion` AS `observacion`,`c`.`Nombre` AS `aldea`,`e`.`Nombre` AS `ciudad`,`f`.`Nombre` AS `parroquia`,`g`.`Nombre` AS `municipio`,`h`.`Nombre` AS `estado`,`d`.`Propietario` AS `propietario`,`d`.`Nombre` AS `nombre`,`d`.`Apellido` AS `apellido`,`d`.`Cedula` AS `cedula`,`d`.`Telefono` AS `telefono`,`b`.`Nombre` AS `tipo`,`a`.`Id_Propietario` AS `propietarioced` from (((((((`ev_cita` `a` join `ev_tipo` `b`) join `aldea` `c`) join `entrevistado` `d`) join `ciudad` `e`) join `parroquia` `f`) join `municipio` `g`) join `estado` `h`) where ((`a`.`Id_Tipo` = `b`.`Id_Tipo`) and (`a`.`Id_Entrevistado` = `d`.`Id_Entrevistado`) and (`a`.`Id_Aldea` = `c`.`Id_Aldea`) and (`c`.`Id_Ciudad` = `e`.`Id_Ciudad`) and (`e`.`Id_Parroquia` = `f`.`Id_Parroquia`) and (`f`.`Id_Municipio` = `g`.`Id_Municipio`) and (`g`.`Id_estado` = `h`.`Id_estado`)));

--
-- Índices para tablas volcadas
--

--
-- Indices de la tabla `aldea`
--
ALTER TABLE `aldea`
 ADD PRIMARY KEY (`Id_Aldea`), ADD KEY `RefCiudad551` (`Id_Ciudad`);

--
-- Indices de la tabla `bitacora`
--
ALTER TABLE `bitacora`
 ADD PRIMARY KEY (`Id_Bitacora`), ADD KEY `RefUsuario881` (`Id_Usuario`);

--
-- Indices de la tabla `categoria`
--
ALTER TABLE `categoria`
 ADD PRIMARY KEY (`Id_Categoria`);

--
-- Indices de la tabla `ciudad`
--
ALTER TABLE `ciudad`
 ADD PRIMARY KEY (`Id_Ciudad`), ADD KEY `RefMunicipio371` (`Id_Parroquia`);

--
-- Indices de la tabla `cs_afectado`
--
ALTER TABLE `cs_afectado`
 ADD PRIMARY KEY (`Id_Afectado`), ADD KEY `RefCS_Otra_Propiedad211` (`Id_OtraPropiedad`);

--
-- Indices de la tabla `cs_censo`
--
ALTER TABLE `cs_censo`
 ADD PRIMARY KEY (`Id_Censo`), ADD KEY `RefCS_Evento981` (`Id_Evento`), ADD KEY `RefAldea581` (`Id_Aldea`), ADD KEY `RefCS_Motivo601` (`Id_Motivo`), ADD KEY `RefEntrevistado611` (`Id_Entrevistado`), ADD KEY `RefCS_Afectado621` (`Id_Afectado`), ADD KEY `RefCS_Condicion_Familiar631` (`Id_CondicionFamiliar`), ADD KEY `RefFuncionario641` (`Id_Funcionario`), ADD KEY `RefCS_Vivienda651` (`Id_Vivienda`);

--
-- Indices de la tabla `cs_condicion`
--
ALTER TABLE `cs_condicion`
 ADD PRIMARY KEY (`Id_Condicion`);

--
-- Indices de la tabla `cs_condicion_familiar`
--
ALTER TABLE `cs_condicion_familiar`
 ADD PRIMARY KEY (`Id_CondicionFamiliar`);

--
-- Indices de la tabla `cs_danho`
--
ALTER TABLE `cs_danho`
 ADD PRIMARY KEY (`Id_Danho`);

--
-- Indices de la tabla `cs_enser`
--
ALTER TABLE `cs_enser`
 ADD PRIMARY KEY (`Id_Enser`);

--
-- Indices de la tabla `cs_evento`
--
ALTER TABLE `cs_evento`
 ADD PRIMARY KEY (`Id_Evento`), ADD KEY `FK_cs_evento` (`Id_TipoEvento`);

--
-- Indices de la tabla `cs_familiar`
--
ALTER TABLE `cs_familiar`
 ADD PRIMARY KEY (`Id_Familiar`), ADD KEY `RefCS_Afectado141` (`Id_Afectado`);

--
-- Indices de la tabla `cs_material_elaboracion`
--
ALTER TABLE `cs_material_elaboracion`
 ADD PRIMARY KEY (`Id_MaterialElaboracion`);

--
-- Indices de la tabla `cs_motivo`
--
ALTER TABLE `cs_motivo`
 ADD PRIMARY KEY (`Id_Motivo`);

--
-- Indices de la tabla `cs_necesidad`
--
ALTER TABLE `cs_necesidad`
 ADD PRIMARY KEY (`Id_Necesidad`);

--
-- Indices de la tabla `cs_necesidad_afectado`
--
ALTER TABLE `cs_necesidad_afectado`
 ADD PRIMARY KEY (`Id_Necesidad`,`Id_Afectado`), ADD KEY `RefCS_Afectado181` (`Id_Afectado`);

--
-- Indices de la tabla `cs_otra_propiedad`
--
ALTER TABLE `cs_otra_propiedad`
 ADD PRIMARY KEY (`Id_OtraPropiedad`);

--
-- Indices de la tabla `cs_parte`
--
ALTER TABLE `cs_parte`
 ADD PRIMARY KEY (`Id_Parte`);

--
-- Indices de la tabla `cs_refugio`
--
ALTER TABLE `cs_refugio`
 ADD PRIMARY KEY (`Id_Refugio`), ADD KEY `RefAldea571` (`Id_Aldea`);

--
-- Indices de la tabla `cs_refugio_afectado`
--
ALTER TABLE `cs_refugio_afectado`
 ADD PRIMARY KEY (`Id_Afectado`,`Id_Refugio`), ADD KEY `RefCS_Refugio401` (`Id_Refugio`);

--
-- Indices de la tabla `cs_tenencia`
--
ALTER TABLE `cs_tenencia`
 ADD PRIMARY KEY (`Id_Tenencia`);

--
-- Indices de la tabla `cs_tipo`
--
ALTER TABLE `cs_tipo`
 ADD PRIMARY KEY (`Id_Tipo`);

--
-- Indices de la tabla `cs_tipo_evento`
--
ALTER TABLE `cs_tipo_evento`
 ADD PRIMARY KEY (`Id_TipoEvento`);

--
-- Indices de la tabla `cs_vivienda`
--
ALTER TABLE `cs_vivienda`
 ADD PRIMARY KEY (`Id_Vivienda`), ADD KEY `RefCS_Condicion311` (`Id_Condicion`), ADD KEY `RefCS_Material_Elaboracion331` (`Id_MaterialElaboracion`), ADD KEY `RefCS_Tenencia341` (`Id_Tenencia`), ADD KEY `RefCS_Tipo351` (`Id_Tipo`), ADD KEY `RefCS_Danho411` (`Id_Parte`), ADD KEY `FK_cs_vivienda_danho` (`Id_Danho`);

--
-- Indices de la tabla `cs_vivienda_enser`
--
ALTER TABLE `cs_vivienda_enser`
 ADD PRIMARY KEY (`Id_Enser`,`Id_Vivienda`), ADD KEY `RefCS_Vivienda151` (`Id_Vivienda`);

--
-- Indices de la tabla `entrevistado`
--
ALTER TABLE `entrevistado`
 ADD PRIMARY KEY (`Id_Entrevistado`), ADD UNIQUE KEY `secundario` (`Cedula`);

--
-- Indices de la tabla `estado`
--
ALTER TABLE `estado`
 ADD PRIMARY KEY (`Id_estado`);

--
-- Indices de la tabla `ev_cita`
--
ALTER TABLE `ev_cita`
 ADD PRIMARY KEY (`Id_Cita`), ADD KEY `RefEV_Tipo771` (`Id_Tipo`), ADD KEY `RefAldea791` (`Id_Aldea`), ADD KEY `RefEntrevistado801` (`Id_Entrevistado`), ADD KEY `RefFuncionario931` (`Id_Funcionario`), ADD KEY `FK_ev_cita` (`Id_Propietario`);

--
-- Indices de la tabla `ev_evaluacion`
--
ALTER TABLE `ev_evaluacion`
 ADD PRIMARY KEY (`Id_Evaluacion`), ADD KEY `RefEV_Cita741` (`Id_Cita`), ADD KEY `RefFuncionario701` (`Id_Funcionario`);

--
-- Indices de la tabla `ev_tipo`
--
ALTER TABLE `ev_tipo`
 ADD PRIMARY KEY (`Id_Tipo`);

--
-- Indices de la tabla `foto`
--
ALTER TABLE `foto`
 ADD PRIMARY KEY (`Id_Foto`), ADD KEY `RefCS_Censo431` (`Id_Censo`), ADD KEY `RefCategoria441` (`Id_Categoria`), ADD KEY `RefRA_Actividad591` (`Id_Actividad`);

--
-- Indices de la tabla `funcionario`
--
ALTER TABLE `funcionario`
 ADD PRIMARY KEY (`Id_Funcionario`), ADD KEY `RefUsuario941` (`Id_Usuario`);

--
-- Indices de la tabla `funcionario_actividad`
--
ALTER TABLE `funcionario_actividad`
 ADD PRIMARY KEY (`Id_Funcionario`,`Id_Actividad`), ADD KEY `RefRA_Actividad841` (`Id_Actividad`), ADD KEY `RefRA_Puesto871` (`Id_Puesto`);

--
-- Indices de la tabla `menu`
--
ALTER TABLE `menu`
 ADD PRIMARY KEY (`Id_Menu`);

--
-- Indices de la tabla `municipio`
--
ALTER TABLE `municipio`
 ADD PRIMARY KEY (`Id_Municipio`), ADD KEY `RefEstado361` (`Id_estado`);

--
-- Indices de la tabla `parroquia`
--
ALTER TABLE `parroquia`
 ADD PRIMARY KEY (`Id_Parroquia`), ADD KEY `RefCiudad381` (`Id_Municipio`);

--
-- Indices de la tabla `privilegios`
--
ALTER TABLE `privilegios`
 ADD PRIMARY KEY (`Id_Privilegios`);

--
-- Indices de la tabla `ra_accion_actividad`
--
ALTER TABLE `ra_accion_actividad`
 ADD PRIMARY KEY (`Id_Actividad`,`Id_AccionTomada`), ADD KEY `RefRA_Accion_Tomada501` (`Id_AccionTomada`);

--
-- Indices de la tabla `ra_accion_tomada`
--
ALTER TABLE `ra_accion_tomada`
 ADD PRIMARY KEY (`Id_AccionTomada`);

--
-- Indices de la tabla `ra_actividad`
--
ALTER TABLE `ra_actividad`
 ADD PRIMARY KEY (`Id_Actividad`), ADD KEY `RefRA_Tipo471` (`Id_Tipo`), ADD KEY `RefRA_Condicion481` (`Id_Condicion`), ADD KEY `RefAldea561` (`Id_Aldea`);

--
-- Indices de la tabla `ra_actividad_danho`
--
ALTER TABLE `ra_actividad_danho`
 ADD PRIMARY KEY (`Id_Actividad`,`Id_Danho`), ADD KEY `RefRA_Danho671` (`Id_Danho`);

--
-- Indices de la tabla `ra_condicion`
--
ALTER TABLE `ra_condicion`
 ADD PRIMARY KEY (`Id_Condicion`);

--
-- Indices de la tabla `ra_danho`
--
ALTER TABLE `ra_danho`
 ADD PRIMARY KEY (`Id_Danho`);

--
-- Indices de la tabla `ra_organismo_actividad`
--
ALTER TABLE `ra_organismo_actividad`
 ADD PRIMARY KEY (`Id_OtrosOrganismo`,`Id_Actividad`), ADD KEY `RefRA_Actividad821` (`Id_Actividad`);

--
-- Indices de la tabla `ra_otros_organismo`
--
ALTER TABLE `ra_otros_organismo`
 ADD PRIMARY KEY (`Id_OtrosOrganismo`);

--
-- Indices de la tabla `ra_puesto`
--
ALTER TABLE `ra_puesto`
 ADD PRIMARY KEY (`Id_Puesto`);

--
-- Indices de la tabla `ra_tipo`
--
ALTER TABLE `ra_tipo`
 ADD PRIMARY KEY (`Id_Tipo`);

--
-- Indices de la tabla `usuario`
--
ALTER TABLE `usuario`
 ADD PRIMARY KEY (`Id_Usuario`);

--
-- AUTO_INCREMENT de las tablas volcadas
--

--
-- AUTO_INCREMENT de la tabla `aldea`
--
ALTER TABLE `aldea`
MODIFY `Id_Aldea` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=4;
--
-- AUTO_INCREMENT de la tabla `bitacora`
--
ALTER TABLE `bitacora`
MODIFY `Id_Bitacora` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=105;
--
-- AUTO_INCREMENT de la tabla `categoria`
--
ALTER TABLE `categoria`
MODIFY `Id_Categoria` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=4;
--
-- AUTO_INCREMENT de la tabla `ciudad`
--
ALTER TABLE `ciudad`
MODIFY `Id_Ciudad` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=37;
--
-- AUTO_INCREMENT de la tabla `cs_afectado`
--
ALTER TABLE `cs_afectado`
MODIFY `Id_Afectado` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=7;
--
-- AUTO_INCREMENT de la tabla `cs_censo`
--
ALTER TABLE `cs_censo`
MODIFY `Id_Censo` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=7;
--
-- AUTO_INCREMENT de la tabla `cs_condicion`
--
ALTER TABLE `cs_condicion`
MODIFY `Id_Condicion` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=4;
--
-- AUTO_INCREMENT de la tabla `cs_condicion_familiar`
--
ALTER TABLE `cs_condicion_familiar`
MODIFY `Id_CondicionFamiliar` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=4;
--
-- AUTO_INCREMENT de la tabla `cs_danho`
--
ALTER TABLE `cs_danho`
MODIFY `Id_Danho` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=7;
--
-- AUTO_INCREMENT de la tabla `cs_enser`
--
ALTER TABLE `cs_enser`
MODIFY `Id_Enser` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=23;
--
-- AUTO_INCREMENT de la tabla `cs_evento`
--
ALTER TABLE `cs_evento`
MODIFY `Id_Evento` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=10;
--
-- AUTO_INCREMENT de la tabla `cs_familiar`
--
ALTER TABLE `cs_familiar`
MODIFY `Id_Familiar` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=10;
--
-- AUTO_INCREMENT de la tabla `cs_material_elaboracion`
--
ALTER TABLE `cs_material_elaboracion`
MODIFY `Id_MaterialElaboracion` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=17;
--
-- AUTO_INCREMENT de la tabla `cs_motivo`
--
ALTER TABLE `cs_motivo`
MODIFY `Id_Motivo` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=7;
--
-- AUTO_INCREMENT de la tabla `cs_necesidad`
--
ALTER TABLE `cs_necesidad`
MODIFY `Id_Necesidad` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=3;
--
-- AUTO_INCREMENT de la tabla `cs_otra_propiedad`
--
ALTER TABLE `cs_otra_propiedad`
MODIFY `Id_OtraPropiedad` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=3;
--
-- AUTO_INCREMENT de la tabla `cs_parte`
--
ALTER TABLE `cs_parte`
MODIFY `Id_Parte` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=7;
--
-- AUTO_INCREMENT de la tabla `cs_refugio`
--
ALTER TABLE `cs_refugio`
MODIFY `Id_Refugio` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=3;
--
-- AUTO_INCREMENT de la tabla `cs_tenencia`
--
ALTER TABLE `cs_tenencia`
MODIFY `Id_Tenencia` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=8;
--
-- AUTO_INCREMENT de la tabla `cs_tipo`
--
ALTER TABLE `cs_tipo`
MODIFY `Id_Tipo` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=7;
--
-- AUTO_INCREMENT de la tabla `cs_tipo_evento`
--
ALTER TABLE `cs_tipo_evento`
MODIFY `Id_TipoEvento` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=6;
--
-- AUTO_INCREMENT de la tabla `cs_vivienda`
--
ALTER TABLE `cs_vivienda`
MODIFY `Id_Vivienda` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=7;
--
-- AUTO_INCREMENT de la tabla `entrevistado`
--
ALTER TABLE `entrevistado`
MODIFY `Id_Entrevistado` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=31;
--
-- AUTO_INCREMENT de la tabla `estado`
--
ALTER TABLE `estado`
MODIFY `Id_estado` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=20;
--
-- AUTO_INCREMENT de la tabla `ev_cita`
--
ALTER TABLE `ev_cita`
MODIFY `Id_Cita` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=17;
--
-- AUTO_INCREMENT de la tabla `ev_evaluacion`
--
ALTER TABLE `ev_evaluacion`
MODIFY `Id_Evaluacion` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=14;
--
-- AUTO_INCREMENT de la tabla `ev_tipo`
--
ALTER TABLE `ev_tipo`
MODIFY `Id_Tipo` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=18;
--
-- AUTO_INCREMENT de la tabla `foto`
--
ALTER TABLE `foto`
MODIFY `Id_Foto` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=11;
--
-- AUTO_INCREMENT de la tabla `funcionario`
--
ALTER TABLE `funcionario`
MODIFY `Id_Funcionario` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=4;
--
-- AUTO_INCREMENT de la tabla `menu`
--
ALTER TABLE `menu`
MODIFY `Id_Menu` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=45;
--
-- AUTO_INCREMENT de la tabla `municipio`
--
ALTER TABLE `municipio`
MODIFY `Id_Municipio` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=40;
--
-- AUTO_INCREMENT de la tabla `parroquia`
--
ALTER TABLE `parroquia`
MODIFY `Id_Parroquia` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=75;
--
-- AUTO_INCREMENT de la tabla `privilegios`
--
ALTER TABLE `privilegios`
MODIFY `Id_Privilegios` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=19;
--
-- AUTO_INCREMENT de la tabla `ra_accion_tomada`
--
ALTER TABLE `ra_accion_tomada`
MODIFY `Id_AccionTomada` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=10;
--
-- AUTO_INCREMENT de la tabla `ra_actividad`
--
ALTER TABLE `ra_actividad`
MODIFY `Id_Actividad` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=30;
--
-- AUTO_INCREMENT de la tabla `ra_condicion`
--
ALTER TABLE `ra_condicion`
MODIFY `Id_Condicion` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=9;
--
-- AUTO_INCREMENT de la tabla `ra_danho`
--
ALTER TABLE `ra_danho`
MODIFY `Id_Danho` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=15;
--
-- AUTO_INCREMENT de la tabla `ra_otros_organismo`
--
ALTER TABLE `ra_otros_organismo`
MODIFY `Id_OtrosOrganismo` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=5;
--
-- AUTO_INCREMENT de la tabla `ra_puesto`
--
ALTER TABLE `ra_puesto`
MODIFY `Id_Puesto` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=11;
--
-- AUTO_INCREMENT de la tabla `ra_tipo`
--
ALTER TABLE `ra_tipo`
MODIFY `Id_Tipo` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=34;
--
-- AUTO_INCREMENT de la tabla `usuario`
--
ALTER TABLE `usuario`
MODIFY `Id_Usuario` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=4;
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
ADD CONSTRAINT `FK_ev_cita` FOREIGN KEY (`Id_Propietario`) REFERENCES `entrevistado` (`Id_Entrevistado`),
ADD CONSTRAINT `RefAldea791` FOREIGN KEY (`Id_Aldea`) REFERENCES `aldea` (`Id_Aldea`),
ADD CONSTRAINT `RefEV_Tipo771` FOREIGN KEY (`Id_Tipo`) REFERENCES `ev_tipo` (`Id_Tipo`),
ADD CONSTRAINT `RefEntrevistado801` FOREIGN KEY (`Id_Entrevistado`) REFERENCES `entrevistado` (`Id_Entrevistado`),
ADD CONSTRAINT `RefFuncionario931` FOREIGN KEY (`Id_Funcionario`) REFERENCES `funcionario` (`Id_Funcionario`);

--
-- Filtros para la tabla `ev_evaluacion`
--
ALTER TABLE `ev_evaluacion`
ADD CONSTRAINT `RefEV_Cita741` FOREIGN KEY (`Id_Cita`) REFERENCES `ev_cita` (`Id_Cita`),
ADD CONSTRAINT `RefFuncionario701` FOREIGN KEY (`Id_Funcionario`) REFERENCES `funcionario` (`Id_Funcionario`);

--
-- Filtros para la tabla `foto`
--
ALTER TABLE `foto`
ADD CONSTRAINT `RefCS_Censo431` FOREIGN KEY (`Id_Censo`) REFERENCES `cs_censo` (`Id_Censo`),
ADD CONSTRAINT `RefCategoria441` FOREIGN KEY (`Id_Categoria`) REFERENCES `categoria` (`Id_Categoria`),
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
