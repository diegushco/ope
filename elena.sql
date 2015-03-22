/*
SQLyog Community v8.71 
MySQL - 5.5.37-0ubuntu0.13.10.1 : Database - operaciones
*********************************************************************
*/

/*!40101 SET NAMES utf8 */;

/*!40101 SET SQL_MODE=''*/;

/*!40014 SET @OLD_UNIQUE_CHECKS=@@UNIQUE_CHECKS, UNIQUE_CHECKS=0 */;
/*!40014 SET @OLD_FOREIGN_KEY_CHECKS=@@FOREIGN_KEY_CHECKS, FOREIGN_KEY_CHECKS=0 */;
/*!40101 SET @OLD_SQL_MODE=@@SQL_MODE, SQL_MODE='NO_AUTO_VALUE_ON_ZERO' */;
/*!40111 SET @OLD_SQL_NOTES=@@SQL_NOTES, SQL_NOTES=0 */;
CREATE DATABASE /*!32312 IF NOT EXISTS*/`operaciones` /*!40100 DEFAULT CHARACTER SET latin1 */;

USE `operaciones`;

/*Table structure for table `aldea` */

DROP TABLE IF EXISTS `aldea`;

CREATE TABLE `aldea` (
  `Id_Aldea` int(11) NOT NULL AUTO_INCREMENT,
  `Existe` int(11) NOT NULL DEFAULT '1',
  `Nombre` char(255) NOT NULL,
  `Id_Ciudad` int(11) NOT NULL,
  PRIMARY KEY (`Id_Aldea`),
  KEY `RefCiudad551` (`Id_Ciudad`),
  CONSTRAINT `RefCiudad551` FOREIGN KEY (`Id_Ciudad`) REFERENCES `ciudad` (`Id_Ciudad`)
) ENGINE=InnoDB AUTO_INCREMENT=3 DEFAULT CHARSET=latin1;

/*Data for the table `aldea` */

insert  into `aldea`(`Id_Aldea`,`Existe`,`Nombre`,`Id_Ciudad`) values (1,1,'Prueba 1',10),(2,1,'Prueba 222',11);

/*Table structure for table `bitacora` */

DROP TABLE IF EXISTS `bitacora`;

CREATE TABLE `bitacora` (
  `Id_Bitacora` int(11) NOT NULL AUTO_INCREMENT,
  `FechaHora` datetime NOT NULL,
  `Observacion` char(250) DEFAULT NULL,
  `Url` char(250) DEFAULT NULL,
  `Ip` char(255) DEFAULT NULL,
  `Id_Usuario` int(11) NOT NULL,
  PRIMARY KEY (`Id_Bitacora`),
  KEY `RefUsuario881` (`Id_Usuario`),
  CONSTRAINT `RefUsuario881` FOREIGN KEY (`Id_Usuario`) REFERENCES `usuario` (`Id_Usuario`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

/*Data for the table `bitacora` */

/*Table structure for table `categoria` */

DROP TABLE IF EXISTS `categoria`;

CREATE TABLE `categoria` (
  `Id_Categoria` int(11) NOT NULL AUTO_INCREMENT,
  `Existe` int(11) NOT NULL DEFAULT '1',
  `Nombre` char(255) NOT NULL,
  `Descripcion` char(255) DEFAULT NULL,
  PRIMARY KEY (`Id_Categoria`)
) ENGINE=InnoDB AUTO_INCREMENT=3 DEFAULT CHARSET=latin1;

/*Data for the table `categoria` */

insert  into `categoria`(`Id_Categoria`,`Existe`,`Nombre`,`Descripcion`) values (1,1,'Incendios',NULL),(2,1,'Luvias',NULL);

/*Table structure for table `ciudad` */

DROP TABLE IF EXISTS `ciudad`;

CREATE TABLE `ciudad` (
  `Id_Ciudad` int(11) NOT NULL AUTO_INCREMENT,
  `Existe` int(11) DEFAULT '1',
  `Nombre` char(255) DEFAULT NULL,
  `Id_Parroquia` int(11) NOT NULL,
  PRIMARY KEY (`Id_Ciudad`),
  KEY `RefMunicipio371` (`Id_Parroquia`),
  CONSTRAINT `RefMunicipio371` FOREIGN KEY (`Id_Parroquia`) REFERENCES `parroquia` (`Id_Parroquia`)
) ENGINE=InnoDB AUTO_INCREMENT=37 DEFAULT CHARSET=latin1;

/*Data for the table `ciudad` */

insert  into `ciudad`(`Id_Ciudad`,`Existe`,`Nombre`,`Id_Parroquia`) values (10,1,'Cordero',7),(11,1,'Las Mesas',9),(12,1,'ColÃ³n',10),(13,1,'San Antonio',13),(14,1,'TÃ¡riba',17),(15,1,'Santa Ana',20),(16,1,'El PiÃ±al',21),(17,1,'San JosÃ© de BolÃ­var',24),(18,1,'La FrÃ­a',25),(19,1,'Palmira',28),(20,1,'Capacho Nuevo',29),(21,1,'La Grita',32),(22,1,'El Cobre',35),(23,1,'Rubio',36),(24,1,'Umuquena',74),(25,1,'Capacho Viejo',40),(26,1,'Abejales',43),(27,1,'Lobatera',47),(28,1,'Michelena',49),(29,1,'Coloncito',50),(30,1,'UreÃ±a',52),(31,1,'La Tendida',56),(32,1,'Seboruco',64),(33,1,'San SimÃ³n',65),(34,1,'Queniquea',66),(35,1,'San Josecito',69),(36,1,'Pregonero',70);

/*Table structure for table `cs_afectado` */

DROP TABLE IF EXISTS `cs_afectado`;

CREATE TABLE `cs_afectado` (
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
  KEY `RefCS_Otra_Propiedad211` (`Id_OtraPropiedad`),
  CONSTRAINT `RefCS_Otra_Propiedad211` FOREIGN KEY (`Id_OtraPropiedad`) REFERENCES `cs_otra_propiedad` (`Id_OtraPropiedad`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

/*Data for the table `cs_afectado` */

/*Table structure for table `cs_censo` */

DROP TABLE IF EXISTS `cs_censo`;

CREATE TABLE `cs_censo` (
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
  KEY `RefCS_Vivienda651` (`Id_Vivienda`),
  CONSTRAINT `RefAldea581` FOREIGN KEY (`Id_Aldea`) REFERENCES `aldea` (`Id_Aldea`),
  CONSTRAINT `RefCS_Afectado621` FOREIGN KEY (`Id_Afectado`) REFERENCES `cs_afectado` (`Id_Afectado`),
  CONSTRAINT `RefCS_Condicion_Familiar631` FOREIGN KEY (`Id_CondicionFamiliar`) REFERENCES `cs_condicion_familiar` (`Id_CondicionFamiliar`),
  CONSTRAINT `RefCS_Evento981` FOREIGN KEY (`Id_Evento`) REFERENCES `cs_evento` (`Id_Evento`),
  CONSTRAINT `RefCS_Motivo601` FOREIGN KEY (`Id_Motivo`) REFERENCES `cs_motivo` (`Id_Motivo`),
  CONSTRAINT `RefCS_Vivienda651` FOREIGN KEY (`Id_Vivienda`) REFERENCES `cs_vivienda` (`Id_Vivienda`),
  CONSTRAINT `RefEntrevistado611` FOREIGN KEY (`Id_Entrevistado`) REFERENCES `entrevistado` (`Id_Entrevistado`),
  CONSTRAINT `RefFuncionario641` FOREIGN KEY (`Id_Funcionario`) REFERENCES `funcionario` (`Id_Funcionario`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

/*Data for the table `cs_censo` */

/*Table structure for table `cs_condicion` */

DROP TABLE IF EXISTS `cs_condicion`;

CREATE TABLE `cs_condicion` (
  `Id_Condicion` int(11) NOT NULL AUTO_INCREMENT,
  `Existe` int(11) NOT NULL DEFAULT '1',
  `Nombre` char(200) NOT NULL,
  `Descripcion` char(200) DEFAULT NULL,
  PRIMARY KEY (`Id_Condicion`)
) ENGINE=InnoDB AUTO_INCREMENT=4 DEFAULT CHARSET=latin1;

/*Data for the table `cs_condicion` */

insert  into `cs_condicion`(`Id_Condicion`,`Existe`,`Nombre`,`Descripcion`) values (1,1,'Habitable','la vida se hace mas larga si la'),(2,1,'No Habitable','pa que se vuelva mejor'),(3,1,'Desalojo por alto riesgo','ta ta ta tic to o');

/*Table structure for table `cs_condicion_familiar` */

DROP TABLE IF EXISTS `cs_condicion_familiar`;

CREATE TABLE `cs_condicion_familiar` (
  `Id_CondicionFamiliar` int(11) NOT NULL AUTO_INCREMENT,
  `Existe` int(11) NOT NULL DEFAULT '1',
  `Nombre` char(200) NOT NULL,
  `Descripcion` char(200) DEFAULT NULL,
  PRIMARY KEY (`Id_CondicionFamiliar`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

/*Data for the table `cs_condicion_familiar` */

/*Table structure for table `cs_danho` */

DROP TABLE IF EXISTS `cs_danho`;

CREATE TABLE `cs_danho` (
  `Id_Danho` int(11) NOT NULL AUTO_INCREMENT,
  `Existe` int(11) NOT NULL DEFAULT '1',
  `Nombre` char(150) NOT NULL,
  `Descripcion` char(200) DEFAULT NULL,
  PRIMARY KEY (`Id_Danho`)
) ENGINE=InnoDB AUTO_INCREMENT=7 DEFAULT CHARSET=latin1;

/*Data for the table `cs_danho` */

insert  into `cs_danho`(`Id_Danho`,`Existe`,`Nombre`,`Descripcion`) values (1,1,'Perdida Total',''),(2,1,'Perdida Parcial',''),(6,1,'Sin DaÃ±os','');

/*Table structure for table `cs_enser` */

DROP TABLE IF EXISTS `cs_enser`;

CREATE TABLE `cs_enser` (
  `Id_Enser` int(11) NOT NULL AUTO_INCREMENT,
  `Existe` int(11) NOT NULL DEFAULT '1',
  `Nombre` char(150) NOT NULL,
  `Descripcion` char(255) DEFAULT NULL,
  PRIMARY KEY (`Id_Enser`)
) ENGINE=InnoDB AUTO_INCREMENT=23 DEFAULT CHARSET=latin1;

/*Data for the table `cs_enser` */

insert  into `cs_enser`(`Id_Enser`,`Existe`,`Nombre`,`Descripcion`) values (1,1,'Lavadora',''),(2,1,'Secadora',''),(3,1,'Maquina de Coser',''),(4,1,'Nevera',''),(5,1,'Ventilador',''),(6,1,'Tostadora',''),(7,1,'Equipo de Sonido',''),(8,1,'Cama',''),(9,1,'Cuna',''),(10,1,'Juego de Muebles',''),(11,1,'Vitrinas',''),(12,1,'Juego de Comedor',''),(13,1,'VHS/DVD',''),(14,1,'Computador',''),(15,1,'Colchones',''),(16,1,'Sillas',''),(17,1,'Batidora',''),(18,1,'Closet',''),(19,1,'Utensilios de cocina',''),(20,1,'Cocina',''),(21,1,'Refrigerador',''),(22,1,'TV','');

/*Table structure for table `cs_evento` */

DROP TABLE IF EXISTS `cs_evento`;

CREATE TABLE `cs_evento` (
  `Id_Evento` int(11) NOT NULL AUTO_INCREMENT,
  `Existe` int(11) NOT NULL DEFAULT '1',
  `Nombre` char(200) NOT NULL,
  `Id_TipoEvento` int(11) NOT NULL,
  PRIMARY KEY (`Id_Evento`),
  KEY `FK_cs_evento` (`Id_TipoEvento`),
  CONSTRAINT `FK_cs_evento` FOREIGN KEY (`Id_TipoEvento`) REFERENCES `cs_tipo_evento` (`Id_TipoEvento`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

/*Data for the table `cs_evento` */

/*Table structure for table `cs_familiar` */

DROP TABLE IF EXISTS `cs_familiar`;

CREATE TABLE `cs_familiar` (
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
  KEY `RefCS_Afectado141` (`Id_Afectado`),
  CONSTRAINT `RefCS_Afectado141` FOREIGN KEY (`Id_Afectado`) REFERENCES `cs_afectado` (`Id_Afectado`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

/*Data for the table `cs_familiar` */

/*Table structure for table `cs_material_elaboracion` */

DROP TABLE IF EXISTS `cs_material_elaboracion`;

CREATE TABLE `cs_material_elaboracion` (
  `Id_MaterialElaboracion` int(11) NOT NULL AUTO_INCREMENT,
  `Existe` int(11) NOT NULL DEFAULT '1',
  `Nombre` char(255) NOT NULL,
  `Descripcion` char(255) DEFAULT NULL,
  `categoria` varchar(200) NOT NULL,
  PRIMARY KEY (`Id_MaterialElaboracion`)
) ENGINE=InnoDB AUTO_INCREMENT=17 DEFAULT CHARSET=latin1;

/*Data for the table `cs_material_elaboracion` */

insert  into `cs_material_elaboracion`(`Id_MaterialElaboracion`,`Existe`,`Nombre`,`Descripcion`,`categoria`) values (3,1,'Platabanda','anananananaa','Techo'),(5,1,'Teja','la encarcelen la deporten la embarazen valla para la luna','Techo'),(7,1,'Ladrillo','gua gua2','Paredes'),(15,1,'Cemento','y bailar y bailar cada noche caad noche','Pisos'),(16,1,'Granito',' bnailar y bailar cada nota cada notaaaaaaaaaaaaaaaa','Pisos');

/*Table structure for table `cs_motivo` */

DROP TABLE IF EXISTS `cs_motivo`;

CREATE TABLE `cs_motivo` (
  `Id_Motivo` int(11) NOT NULL AUTO_INCREMENT,
  `Existe` int(11) NOT NULL DEFAULT '1',
  `Nombre` char(255) NOT NULL,
  `Descripcion` char(255) DEFAULT NULL,
  PRIMARY KEY (`Id_Motivo`)
) ENGINE=InnoDB AUTO_INCREMENT=3 DEFAULT CHARSET=latin1;

/*Data for the table `cs_motivo` */

insert  into `cs_motivo`(`Id_Motivo`,`Existe`,`Nombre`,`Descripcion`) values (1,1,'Inundacion de Planicie','la ilusion y te da la vida la vida'),(2,1,'Incendio','que todavia me provocas mi amor');

/*Table structure for table `cs_necesidad` */

DROP TABLE IF EXISTS `cs_necesidad`;

CREATE TABLE `cs_necesidad` (
  `Id_Necesidad` int(11) NOT NULL AUTO_INCREMENT,
  `Existe` int(2) NOT NULL DEFAULT '1',
  `Nombre` char(255) NOT NULL,
  `Descripcion` char(255) DEFAULT NULL,
  PRIMARY KEY (`Id_Necesidad`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

/*Data for the table `cs_necesidad` */

/*Table structure for table `cs_necesidad_afectado` */

DROP TABLE IF EXISTS `cs_necesidad_afectado`;

CREATE TABLE `cs_necesidad_afectado` (
  `Id_Necesidad` int(11) NOT NULL,
  `Id_Afectado` int(11) NOT NULL,
  `Prioridad` varchar(255) DEFAULT NULL,
  PRIMARY KEY (`Id_Necesidad`,`Id_Afectado`),
  KEY `RefCS_Afectado181` (`Id_Afectado`),
  CONSTRAINT `RefCS_Afectado181` FOREIGN KEY (`Id_Afectado`) REFERENCES `cs_afectado` (`Id_Afectado`),
  CONSTRAINT `RefCS_Necesidad171` FOREIGN KEY (`Id_Necesidad`) REFERENCES `cs_necesidad` (`Id_Necesidad`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

/*Data for the table `cs_necesidad_afectado` */

/*Table structure for table `cs_otra_propiedad` */

DROP TABLE IF EXISTS `cs_otra_propiedad`;

CREATE TABLE `cs_otra_propiedad` (
  `Id_OtraPropiedad` int(11) NOT NULL AUTO_INCREMENT,
  `Existe` int(11) NOT NULL DEFAULT '1',
  `Nombre` char(255) NOT NULL,
  `Descripcion` char(255) DEFAULT NULL,
  PRIMARY KEY (`Id_OtraPropiedad`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

/*Data for the table `cs_otra_propiedad` */

/*Table structure for table `cs_parte` */

DROP TABLE IF EXISTS `cs_parte`;

CREATE TABLE `cs_parte` (
  `Id_Parte` int(11) NOT NULL AUTO_INCREMENT,
  `Existe` int(11) NOT NULL DEFAULT '1',
  `Nombre` char(255) NOT NULL,
  `Descripcion` char(255) DEFAULT NULL,
  PRIMARY KEY (`Id_Parte`)
) ENGINE=InnoDB AUTO_INCREMENT=7 DEFAULT CHARSET=latin1;

/*Data for the table `cs_parte` */

insert  into `cs_parte`(`Id_Parte`,`Existe`,`Nombre`,`Descripcion`) values (1,1,'Paredes',''),(2,1,'Techos',''),(3,1,'Pisos',''),(5,1,'Vigas',''),(6,1,'Columnas','');

/*Table structure for table `cs_refugio` */

DROP TABLE IF EXISTS `cs_refugio`;

CREATE TABLE `cs_refugio` (
  `Id_Refugio` int(11) NOT NULL AUTO_INCREMENT,
  `Existe` int(11) NOT NULL DEFAULT '1',
  `Nombre` char(255) NOT NULL,
  `Direccion` char(255) NOT NULL,
  `Telefono` char(15) DEFAULT NULL,
  `Capacidad` int(11) DEFAULT NULL,
  `Descripcion` char(255) DEFAULT NULL,
  `Id_Aldea` int(11) NOT NULL,
  PRIMARY KEY (`Id_Refugio`),
  KEY `RefAldea571` (`Id_Aldea`),
  CONSTRAINT `RefAldea571` FOREIGN KEY (`Id_Aldea`) REFERENCES `aldea` (`Id_Aldea`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

/*Data for the table `cs_refugio` */

/*Table structure for table `cs_refugio_afectado` */

DROP TABLE IF EXISTS `cs_refugio_afectado`;

CREATE TABLE `cs_refugio_afectado` (
  `Id_Afectado` int(11) NOT NULL,
  `Id_Refugio` int(11) NOT NULL,
  `Existe` int(11) NOT NULL DEFAULT '1',
  `Fecha_Ingreso` datetime NOT NULL,
  PRIMARY KEY (`Id_Afectado`,`Id_Refugio`),
  KEY `RefCS_Refugio401` (`Id_Refugio`),
  CONSTRAINT `RefCS_Afectado231` FOREIGN KEY (`Id_Afectado`) REFERENCES `cs_afectado` (`Id_Afectado`),
  CONSTRAINT `RefCS_Refugio401` FOREIGN KEY (`Id_Refugio`) REFERENCES `cs_refugio` (`Id_Refugio`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

/*Data for the table `cs_refugio_afectado` */

/*Table structure for table `cs_tenencia` */

DROP TABLE IF EXISTS `cs_tenencia`;

CREATE TABLE `cs_tenencia` (
  `Id_Tenencia` int(11) NOT NULL AUTO_INCREMENT,
  `Existe` int(11) NOT NULL DEFAULT '1',
  `Nombre` char(255) NOT NULL,
  `Descripcion` char(255) DEFAULT NULL,
  PRIMARY KEY (`Id_Tenencia`)
) ENGINE=InnoDB AUTO_INCREMENT=8 DEFAULT CHARSET=latin1;

/*Data for the table `cs_tenencia` */

insert  into `cs_tenencia`(`Id_Tenencia`,`Existe`,`Nombre`,`Descripcion`) values (1,1,'Propia','wiii'),(2,1,'Propia Pagando','y con mis lagrimas'),(3,1,'Compartida','no basta con soÃ±ar amar se aprende amando'),(4,1,'Arrendada/alquilada','un amargo dolor el aire deja un sabor a despedida'),(5,1,'Cedida al cuidado','ta ta ta ti ti ti to to to to to tuc'),(6,1,'Invadida','quisiera poder'),(7,1,'Alojado','uno por uno mis errore pedir que me perdones');

/*Table structure for table `cs_tipo` */

DROP TABLE IF EXISTS `cs_tipo`;

CREATE TABLE `cs_tipo` (
  `Id_Tipo` int(11) NOT NULL AUTO_INCREMENT,
  `Existe` int(11) NOT NULL DEFAULT '1',
  `Nombre` char(255) NOT NULL,
  `Descripcion` char(255) DEFAULT NULL,
  PRIMARY KEY (`Id_Tipo`)
) ENGINE=InnoDB AUTO_INCREMENT=7 DEFAULT CHARSET=latin1;

/*Data for the table `cs_tipo` */

insert  into `cs_tipo`(`Id_Tipo`,`Existe`,`Nombre`,`Descripcion`) values (1,1,'Casa','registrar'),(2,1,'Quinta','asd'),(3,1,'Apartamento','wiii'),(4,1,'Casa vecindad','del chavo'),(5,1,'Rancho','don juan'),(6,1,'Pieza','Piezas feliz de la vidaaaaaa sol de mi esperanzaaaaaaaaaaaaaaaaaaa, quita esa agonia porque mi premura ya no aguanta MAS!!!...');

/*Table structure for table `cs_tipo_evento` */

DROP TABLE IF EXISTS `cs_tipo_evento`;

CREATE TABLE `cs_tipo_evento` (
  `Id_TipoEvento` int(11) NOT NULL AUTO_INCREMENT,
  `Nombre` varchar(255) DEFAULT NULL,
  PRIMARY KEY (`Id_TipoEvento`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

/*Data for the table `cs_tipo_evento` */

/*Table structure for table `cs_vivienda` */

DROP TABLE IF EXISTS `cs_vivienda`;

CREATE TABLE `cs_vivienda` (
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
  KEY `FK_cs_vivienda_danho` (`Id_Danho`),
  CONSTRAINT `FK_cs_vivienda_danho` FOREIGN KEY (`Id_Danho`) REFERENCES `cs_danho` (`Id_Danho`),
  CONSTRAINT `FK_cs_vivienda_parte` FOREIGN KEY (`Id_Parte`) REFERENCES `cs_parte` (`Id_Parte`),
  CONSTRAINT `RefCS_Condicion311` FOREIGN KEY (`Id_Condicion`) REFERENCES `cs_condicion` (`Id_Condicion`),
  CONSTRAINT `RefCS_Material_Elaboracion331` FOREIGN KEY (`Id_MaterialElaboracion`) REFERENCES `cs_material_elaboracion` (`Id_MaterialElaboracion`),
  CONSTRAINT `RefCS_Tenencia341` FOREIGN KEY (`Id_Tenencia`) REFERENCES `cs_tenencia` (`Id_Tenencia`),
  CONSTRAINT `RefCS_Tipo351` FOREIGN KEY (`Id_Tipo`) REFERENCES `cs_tipo` (`Id_Tipo`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

/*Data for the table `cs_vivienda` */

/*Table structure for table `cs_vivienda_enser` */

DROP TABLE IF EXISTS `cs_vivienda_enser`;

CREATE TABLE `cs_vivienda_enser` (
  `Id_Enser` int(11) NOT NULL,
  `Id_Vivienda` int(11) NOT NULL,
  `Cantidad` int(11) DEFAULT NULL,
  PRIMARY KEY (`Id_Enser`,`Id_Vivienda`),
  KEY `RefCS_Vivienda151` (`Id_Vivienda`),
  CONSTRAINT `RefCS_Enser161` FOREIGN KEY (`Id_Enser`) REFERENCES `cs_enser` (`Id_Enser`),
  CONSTRAINT `RefCS_Vivienda151` FOREIGN KEY (`Id_Vivienda`) REFERENCES `cs_vivienda` (`Id_Vivienda`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

/*Data for the table `cs_vivienda_enser` */

/*Table structure for table `entrevistado` */

DROP TABLE IF EXISTS `entrevistado`;

CREATE TABLE `entrevistado` (
  `Id_Entrevistado` int(11) NOT NULL AUTO_INCREMENT,
  `Existe` int(11) NOT NULL DEFAULT '1',
  `Cedula` char(255) NOT NULL,
  `Nombre` char(255) NOT NULL,
  `Apellido` char(255) NOT NULL,
  `Telefono` char(15) DEFAULT NULL,
  `Propietario` char(10) DEFAULT NULL,
  PRIMARY KEY (`Id_Entrevistado`),
  UNIQUE KEY `secundario` (`Cedula`)
) ENGINE=InnoDB AUTO_INCREMENT=27 DEFAULT CHARSET=latin1;

/*Data for the table `entrevistado` */

insert  into `entrevistado`(`Id_Entrevistado`,`Existe`,`Cedula`,`Nombre`,`Apellido`,`Telefono`,`Propietario`) values (3,1,'V-17877206','diego','guerrero','04167727604','1'),(4,1,'V-19918907','MarÃ­a Elena','Reyes CedeÃ±o','04264740694','1'),(5,1,'V-123456','maria e','reyes c','123456789','0'),(6,1,'V-789654123','elena','werwee','dsdsd','0'),(7,1,'E-80304431','Pedro M','Reyes C','555567566','1'),(9,1,'V-789456','dfdfdf','dfdf','dfdf','1'),(10,1,'V-15648933','Nathaly','Garnica','16890255','0'),(11,1,'V-3123123','sdasd','asdasd','(0276)-2123123','0'),(12,1,'V-asdasd','','','',NULL),(13,1,'V-12312312','qweq','weqweqwe','(0213)-1231231','0'),(14,1,'-621783618','fffsdff','asadasd','','1'),(15,1,'E-213123123','sdas','dasda','(0321)-3123123','0'),(16,1,'-23123123123','asdasd','asdasd','','1'),(17,1,'V-23123123','adsda','sdasd','(0231)-2312321','0'),(18,1,'-v-12434242','asd','dasdasd','','1'),(19,1,'V-123123123','sadasdasd','asdasd','(0231)-2312312','0'),(20,1,'v-212312312','asdasd','asdasda','','1'),(21,1,'E-23123123','asdasd','asdasd','(0131)-2312312','0'),(22,1,'v-443545657','asdasdasd','asdasd','','1'),(23,1,'E-12312312','asdasd','asdasd','(0231)-3123123','0'),(24,1,'v-13123123','asd adasd','sdasd','','1'),(26,1,'v-1212313','asdasd','asdasd','','1');

/*Table structure for table `estado` */

DROP TABLE IF EXISTS `estado`;

CREATE TABLE `estado` (
  `Id_estado` int(11) NOT NULL AUTO_INCREMENT,
  `Existe` int(11) NOT NULL DEFAULT '1',
  `Nombre` char(255) DEFAULT NULL,
  PRIMARY KEY (`Id_estado`)
) ENGINE=InnoDB AUTO_INCREMENT=20 DEFAULT CHARSET=latin1;

/*Data for the table `estado` */

insert  into `estado`(`Id_estado`,`Existe`,`Nombre`) values (15,1,'Tachira'),(16,1,'Apure'),(17,1,'Barinas'),(18,1,'Merida'),(19,1,'Carabobo');

/*Table structure for table `ev_cita` */

DROP TABLE IF EXISTS `ev_cita`;

CREATE TABLE `ev_cita` (
  `Id_Cita` int(11) NOT NULL AUTO_INCREMENT,
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
  `Id_Propietario` int(11) DEFAULT NULL,
  PRIMARY KEY (`Id_Cita`),
  KEY `RefEV_Tipo771` (`Id_Tipo`),
  KEY `RefAldea791` (`Id_Aldea`),
  KEY `RefEntrevistado801` (`Id_Entrevistado`),
  KEY `RefFuncionario931` (`Id_Funcionario`),
  KEY `FK_ev_cita` (`Id_Propietario`),
  CONSTRAINT `FK_ev_cita` FOREIGN KEY (`Id_Propietario`) REFERENCES `entrevistado` (`Id_Entrevistado`),
  CONSTRAINT `RefAldea791` FOREIGN KEY (`Id_Aldea`) REFERENCES `aldea` (`Id_Aldea`),
  CONSTRAINT `RefEntrevistado801` FOREIGN KEY (`Id_Entrevistado`) REFERENCES `entrevistado` (`Id_Entrevistado`),
  CONSTRAINT `RefEV_Tipo771` FOREIGN KEY (`Id_Tipo`) REFERENCES `ev_tipo` (`Id_Tipo`),
  CONSTRAINT `RefFuncionario931` FOREIGN KEY (`Id_Funcionario`) REFERENCES `funcionario` (`Id_Funcionario`)
) ENGINE=InnoDB AUTO_INCREMENT=15 DEFAULT CHARSET=latin1;

/*Data for the table `ev_cita` */

insert  into `ev_cita`(`Id_Cita`,`No_Folio`,`Fecha_Solicitud`,`Fecha_Cita`,`Direccion`,`Estado`,`Observacion`,`Id_Tipo`,`Id_Aldea`,`Id_Entrevistado`,`Id_Funcionario`,`Id_Propietario`) values (1,456,'2014-06-03 00:00:00','2014-06-19 00:00:00','calle principal Barrio Bolivar','Procesada','asasas as otra cosas',10,1,4,NULL,NULL),(2,789,'2014-06-04 00:00:00','2014-06-19 00:00:00','sdsdsdsd','Iniciada','sdsdsdsd',14,2,5,NULL,NULL),(3,1234,'2014-06-04 00:00:00','2014-06-10 00:00:00','sdsdsds','Iniciada','sdsdsdsdsd',9,2,6,NULL,NULL),(4,3409,'2014-06-04 00:00:00','2014-06-10 00:00:00','ssdsd sdsjdhsjds msdhsjdhsd mhjsdjsds','Iniciada','sdvsdhgsd nsgdhsdghsd dgshdgshdgsd',14,2,7,NULL,NULL),(7,78963,'2014-06-04 00:00:00','2014-06-19 00:00:00','dsdsdsd','Iniciada','sdsdsds fsdsd dsd sdsdsd',14,2,10,NULL,NULL),(8,0,'2014-11-15 00:00:00','2014-11-11 00:00:00','adsda','Iniciada','asdasdasd',9,1,11,NULL,NULL),(9,0,'2014-11-15 00:00:00','2014-11-13 00:00:00','sASAsA','Anulada','ASHD AJHSD JKAHSKDA SDHA',17,2,13,NULL,14),(10,0,'2014-11-15 00:00:00','2014-11-08 00:00:00','ASAs','Anulada','ASAs',17,1,15,NULL,16),(11,0,'2014-11-15 00:00:00','2014-11-07 00:00:00','asdasd','Iniciada','asdasd asd a dasd',14,1,17,NULL,18),(12,0,'2014-11-15 00:00:00','2014-11-19 00:00:00','asdassdad','Procesada','dasdasdasd asdad',9,2,19,NULL,20),(13,0,'2014-11-15 00:00:00','2014-11-15 00:00:00','sdasdasd','Iniciada','asdasd',10,1,21,NULL,22),(14,0,'2014-11-15 00:00:00','2014-11-07 00:00:00','adsa sdasd','Iniciada','akshd ashdkaj shdasdk',17,1,23,NULL,24);

/*Table structure for table `ev_evaluacion` */

DROP TABLE IF EXISTS `ev_evaluacion`;

CREATE TABLE `ev_evaluacion` (
  `Id_Evaluacion` int(11) NOT NULL AUTO_INCREMENT,
  `Fecha` datetime NOT NULL,
  `Direccion` char(255) DEFAULT NULL,
  `Informe_Actividad` text NOT NULL,
  `Observacion` text,
  `Recomendacion` text,
  `Id_Funcionario` int(11) NOT NULL,
  `Id_Cita` int(11) NOT NULL,
  PRIMARY KEY (`Id_Evaluacion`),
  KEY `RefEV_Cita741` (`Id_Cita`),
  KEY `RefFuncionario701` (`Id_Funcionario`),
  CONSTRAINT `RefEV_Cita741` FOREIGN KEY (`Id_Cita`) REFERENCES `ev_cita` (`Id_Cita`),
  CONSTRAINT `RefFuncionario701` FOREIGN KEY (`Id_Funcionario`) REFERENCES `funcionario` (`Id_Funcionario`)
) ENGINE=InnoDB AUTO_INCREMENT=7 DEFAULT CHARSET=latin1;

/*Data for the table `ev_evaluacion` */

insert  into `ev_evaluacion`(`Id_Evaluacion`,`Fecha`,`Direccion`,`Informe_Actividad`,`Observacion`,`Recomendacion`,`Id_Funcionario`,`Id_Cita`) values (5,'2014-11-16 17:35:35','calle principal Barrio Bolivar','asd','asdasd','asd',1,1),(6,'2014-11-16 20:04:35','asdassdad','Amet et adipiscing odio mus dapibus urna massa, velit? Nunc, montes, integer amet! A cursus eu. Mus! Turpis urna scelerisque. Enim ridiculus? Sed tristique augue auctor elementum! A, amet! Turpis. Est, amet et, auctor a scelerisque, dolor augue natoque, ultricies? Lorem cras et cum turpis hac porta enim, arcu placerat parturient nascetur, facilisis mattis. Mid! Vut proin pulvinar tristique magna, placerat egestas penatibus mauris, nec platea, in nascetur et, dis, diam est dignissim aliquet turpis porta dignissim, aenean? Amet urna, auctor lundium integer, hac nisi! Mauris in. Penatibus? Non adipiscing nunc. Etiam elementum placerat quis est, ac sit velit elit. Cum urna, natoque elementum pulvinar pid turpis ut, ut, pid egestas lorem! Ac sit parturient, a? Cursus augue! Mauris integer.\n\nHabitasse aenean dignissim et scelerisque in sociis aliquet pulvinar lundium ut diam. Odio tortor duis elementum velit cras nec. Placerat, augue dolor sociis lacus vel dis pid scelerisque placerat turpis scelerisque etiam pulvinar, habitasse placerat, platea magna enim sagittis integer proin tincidunt in! Odio scelerisque elit rhoncus, dis ac sagittis sed lacus integer in, amet auctor elit velit vel magna porttitor, diam ac sagittis, pellentesque ac augue mattis habitasse turpis a et, tristique ut? Mattis proin nunc diam ultrices auctor sociis elementum mus, dapibus dis et etiam auctor sit! Elementum nascetur, aliquam? Ac dapibus, risus, amet risus sit platea ac etiam sagittis montes, velit magna porta risus. Et nunc? Dis in augue dictumst! Etiam duis purus rhoncus? Ac a.','sda','Amet et adipiscing odio mus dapibus urna massa, velit? Nunc, montes, integer amet! A cursus eu. Mus! Turpis urna scelerisque. Enim ridiculus? Sed tristique augue auctor elementum! A, amet! Turpis. Est, amet et, auctor a scelerisque, dolor augue natoque, ultricies? Lorem cras et cum turpis hac porta enim, arcu placerat parturient nascetur, facilisis mattis. Mid! Vut proin pulvinar tristique magna, placerat egestas penatibus mauris, nec platea, in nascetur et, dis, diam est dignissim aliquet turpis porta dignissim, aenean? Amet urna, auctor lundium integer, hac nisi! Mauris in. Penatibus? Non adipiscing nunc. Etiam elementum placerat quis est, ac sit velit elit. Cum urna, natoque elementum pulvinar pid turpis ut, ut, pid egestas lorem! Ac sit parturient, a? Cursus augue! Mauris integer.\n\nHabitasse aenean dignissim et scelerisque in sociis aliquet pulvinar lundium ut diam. Odio tortor duis elementum velit cras nec. Placerat, augue dolor sociis lacus vel dis pid scelerisque placerat turpis scelerisque etiam pulvinar, habitasse placerat, platea magna enim sagittis integer proin tincidunt in! Odio scelerisque elit rhoncus, dis ac sagittis sed lacus integer in, amet auctor elit velit vel magna porttitor, diam ac sagittis, pellentesque ac augue mattis habitasse turpis a et, tristique ut? Mattis proin nunc diam ultrices auctor sociis elementum mus, dapibus dis et etiam auctor sit! Elementum nascetur, aliquam? Ac dapibus, risus, amet risus sit platea ac etiam sagittis montes, velit magna porta risus. Et nunc? Dis in augue dictumst! Etiam duis purus rhoncus? Ac a.',1,12);

/*Table structure for table `ev_tipo` */

DROP TABLE IF EXISTS `ev_tipo`;

CREATE TABLE `ev_tipo` (
  `Id_Tipo` int(11) NOT NULL AUTO_INCREMENT,
  `Existe` int(11) NOT NULL DEFAULT '1',
  `Nombre` char(255) NOT NULL,
  `Descripcion` char(255) DEFAULT NULL,
  PRIMARY KEY (`Id_Tipo`)
) ENGINE=InnoDB AUTO_INCREMENT=18 DEFAULT CHARSET=latin1;

/*Data for the table `ev_tipo` */

insert  into `ev_tipo`(`Id_Tipo`,`Existe`,`Nombre`,`Descripcion`) values (9,1,'Inspeccion a Terreno','EvaluaciÃ³n detallada del terreno'),(10,1,'Inspeccion a Vivienda','Todos los generadores de Lorem Ipsum que se'),(11,1,'Vivienda para la Venta','Todos los generadores de Lorem Ipsum que se'),(12,1,'Terreno para sustituciÃ³n','Todos los generadores de Lorem Ipsum que se'),(13,1,'Terreno para construcciÃ³n de vivienda','Todos los generadores de Lorem Ipsum que sepsum q'),(14,1,'Informe TÃ©cnico','Informe Realizado sobre una evaluaciÃ³n'),(17,1,'informe de algo','algo mas');

/*Table structure for table `foto` */

DROP TABLE IF EXISTS `foto`;

CREATE TABLE `foto` (
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
  KEY `RefRA_Actividad591` (`Id_Actividad`),
  CONSTRAINT `RefCategoria441` FOREIGN KEY (`Id_Categoria`) REFERENCES `categoria` (`Id_Categoria`),
  CONSTRAINT `RefCS_Censo431` FOREIGN KEY (`Id_Censo`) REFERENCES `cs_censo` (`Id_Censo`),
  CONSTRAINT `RefRA_Actividad591` FOREIGN KEY (`Id_Actividad`) REFERENCES `ra_actividad` (`Id_Actividad`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

/*Data for the table `foto` */

/*Table structure for table `funcionario` */

DROP TABLE IF EXISTS `funcionario`;

CREATE TABLE `funcionario` (
  `Id_Funcionario` int(11) NOT NULL AUTO_INCREMENT,
  `Existe` int(11) NOT NULL DEFAULT '1',
  `Cedula` char(255) NOT NULL,
  `Nombre` char(255) NOT NULL,
  `Apellido` char(255) NOT NULL,
  `Organismo` char(255) DEFAULT NULL,
  `Cargo` char(255) DEFAULT NULL,
  `Id_Usuario` int(11) DEFAULT NULL,
  PRIMARY KEY (`Id_Funcionario`),
  KEY `RefUsuario941` (`Id_Usuario`),
  CONSTRAINT `RefUsuario941` FOREIGN KEY (`Id_Usuario`) REFERENCES `usuario` (`Id_Usuario`)
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=latin1;

/*Data for the table `funcionario` */

insert  into `funcionario`(`Id_Funcionario`,`Existe`,`Cedula`,`Nombre`,`Apellido`,`Organismo`,`Cargo`,`Id_Usuario`) values (1,1,'18256232','nathaly','garnica','inaprocet','algo',1);

/*Table structure for table `funcionario_actividad` */

DROP TABLE IF EXISTS `funcionario_actividad`;

CREATE TABLE `funcionario_actividad` (
  `Id_Funcionario` int(11) NOT NULL,
  `Id_Actividad` int(11) NOT NULL,
  `Fecha` date NOT NULL,
  `Id_Puesto` int(11) NOT NULL,
  PRIMARY KEY (`Id_Funcionario`,`Id_Actividad`),
  KEY `RefRA_Actividad841` (`Id_Actividad`),
  KEY `RefRA_Puesto871` (`Id_Puesto`),
  CONSTRAINT `RefFuncionario831` FOREIGN KEY (`Id_Funcionario`) REFERENCES `funcionario` (`Id_Funcionario`),
  CONSTRAINT `RefRA_Actividad841` FOREIGN KEY (`Id_Actividad`) REFERENCES `ra_actividad` (`Id_Actividad`),
  CONSTRAINT `RefRA_Puesto871` FOREIGN KEY (`Id_Puesto`) REFERENCES `ra_puesto` (`Id_Puesto`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

/*Data for the table `funcionario_actividad` */

/*Table structure for table `menu` */

DROP TABLE IF EXISTS `menu`;

CREATE TABLE `menu` (
  `Id_Menu` int(11) NOT NULL AUTO_INCREMENT,
  `Nombre` char(255) NOT NULL,
  PRIMARY KEY (`Id_Menu`)
) ENGINE=InnoDB AUTO_INCREMENT=45 DEFAULT CHARSET=latin1;

/*Data for the table `menu` */

insert  into `menu`(`Id_Menu`,`Nombre`) values (1,'registrar_cita'),(2,'consultar_cita'),(3,'registrar_inspeccion'),(4,'modificar_inspeccion'),(5,'consultar_inspeccion'),(6,'man_tipo_inspeccion'),(7,'consultar_guardia'),(8,'registrar_ra'),(9,'imagenes_ra'),(10,'listado_RA'),(11,'man_tipo_actividad'),(12,'man_accion_tomada'),(13,'man_otros_organismo'),(14,'man_tipo_danhos'),(15,'man_condicion'),(16,'man_puesto_comision'),(17,'censo'),(18,'modificar_censo'),(19,'consultar_censo'),(20,'reporte_ra'),(21,'man_motivos_censo'),(22,'man_tipo_evento'),(23,'man_evento_censo'),(24,'man_CondicionFamiliar'),(25,'man_necesidades'),(26,'man_enseres'),(27,'man_TipoVivienda'),(28,'man_TenenciaVivienda'),(29,'man_CondicionVivienda'),(30,'man_OtraPropiedad'),(31,'man_MaterialElaboracion'),(32,'man_PartesVivienda'),(33,'man_DanhosPartes'),(34,'graficador'),(35,'usuarios'),(36,'privilegios'),(37,'man_estado'),(38,'man_municipio'),(39,'man_ciudad'),(40,'man_parroquia'),(41,'man_aldea'),(42,'man_refugios'),(43,'man_categorias'),(44,'bitacora');

/*Table structure for table `municipio` */

DROP TABLE IF EXISTS `municipio`;

CREATE TABLE `municipio` (
  `Id_Municipio` int(11) NOT NULL AUTO_INCREMENT,
  `Existe` int(11) NOT NULL DEFAULT '1',
  `Nombre` char(255) NOT NULL,
  `Id_estado` int(11) NOT NULL,
  PRIMARY KEY (`Id_Municipio`),
  KEY `RefEstado361` (`Id_estado`),
  CONSTRAINT `RefEstado361` FOREIGN KEY (`Id_estado`) REFERENCES `estado` (`Id_estado`)
) ENGINE=InnoDB AUTO_INCREMENT=40 DEFAULT CHARSET=latin1;

/*Data for the table `municipio` */

insert  into `municipio`(`Id_Municipio`,`Existe`,`Nombre`,`Id_estado`) values (10,1,'San Cristobal',15),(11,1,'Uribante',15),(12,1,'AndrÃ©s Bello',15),(13,1,'Antonio RÃ³mulo Costa',15),(14,1,'Ayacucho',15),(15,1,'BolÃ­var',15),(16,1,'CÃ¡rdenas',15),(17,1,'CÃ³rdoba',15),(18,1,'FernÃ¡ndez Feo',15),(19,1,'Francisco de Miranda',15),(20,1,'GarcÃ­a de Hevia',15),(21,1,'GuÃ¡simos',15),(22,1,'Independencia',15),(23,1,'JÃ¡uregui',15),(24,1,'JosÃ© MarÃ­a Vargas',15),(25,1,'JunÃ­n',15),(26,1,'San Judas Tadeo',15),(27,1,'Libertad',15),(28,1,'Libertador',15),(29,1,'Lobatera',15),(30,1,'Michelena',15),(31,1,'Panamericano',15),(32,1,'Pedro MarÃ­a UreÃ±a',15),(33,1,'Rafael Urdaneta',15),(34,1,'Samuel DarÃ­o Maldonado',15),(35,1,'Seboruco',15),(36,1,'SimÃ³n RodrÃ­guez',15),(37,1,'Sucre',15),(38,1,'Torbes',15),(39,1,'MuÃ±oz',16);

/*Table structure for table `parroquia` */

DROP TABLE IF EXISTS `parroquia`;

CREATE TABLE `parroquia` (
  `Id_Parroquia` int(11) NOT NULL AUTO_INCREMENT,
  `Existe` int(11) NOT NULL DEFAULT '1',
  `Nombre` char(255) NOT NULL,
  `Id_Municipio` int(11) NOT NULL,
  PRIMARY KEY (`Id_Parroquia`),
  KEY `RefCiudad381` (`Id_Municipio`),
  CONSTRAINT `RefMunicipio381` FOREIGN KEY (`Id_Municipio`) REFERENCES `municipio` (`Id_Municipio`)
) ENGINE=InnoDB AUTO_INCREMENT=75 DEFAULT CHARSET=latin1;

/*Data for the table `parroquia` */

insert  into `parroquia`(`Id_Parroquia`,`Existe`,`Nombre`,`Id_Municipio`) values (7,1,'Andres Bello',12),(9,1,'Antonio RÃ³mulo Costa',13),(10,1,'Ayacucho',14),(11,1,'Rivas Berti',14),(12,1,'San Pedro del RÃ­o',14),(13,1,'BolÃ­var',15),(14,1,'Palotal',15),(15,1,'General Juan Vicente GÃ³mez',15),(16,1,'IsaÃ­as Medina Angarita',15),(17,1,'CÃ¡rdenas C',16),(18,1,'Amenodoro Rangel Lamus',16),(19,1,'La Florida',16),(20,1,'CÃ³rdoba',17),(21,1,'FernÃ¡ndez Feo',18),(22,1,'Alberto Adriani',18),(23,1,'Santo Domingo',18),(24,1,'Francisco de Miranda',19),(25,1,'GarcÃ­a de Hevia',20),(26,1,'Boca de Grita',20),(27,1,'JosÃ© Antonio PÃ¡ez',20),(28,1,'GuÃ¡simos',21),(29,1,'Independencia',22),(30,1,'Juan GermÃ¡n Roscio',22),(31,1,'RomÃ¡n CÃ¡rdenas',22),(32,1,'JÃ¡uregui',23),(33,1,'Emilio Constantino Guerrero',23),(34,1,'MonseÃ±or Miguel Antonio Salas',23),(35,1,'JosÃ© MarÃ­a Vargas',24),(36,1,'JunÃ­n',25),(37,1,'La PetrÃ³lea',25),(38,1,'QuinimarÃ­',25),(39,1,'BramÃ³n',25),(40,1,'Libertad',27),(41,1,'Cipriano Castro',27),(42,1,'Manuel Felipe Rugeles',27),(43,1,'Capital Libertador',28),(44,1,'Doradas',28),(45,1,'Emeterio Ochoa',28),(46,1,'San JoaquÃ­n de Navay',28),(47,1,'Lobatera',29),(48,1,'ConstituciÃ³n',29),(49,1,'Michelena',30),(50,1,'Panamericano',31),(51,1,'La Palmita',31),(52,1,'Pedro MarÃ­a UreÃ±a',32),(53,1,'Nueva Arcadia',32),(54,1,'Delicias',33),(55,1,'Pecaya',33),(56,1,'Samuel DarÃ­o Maldonado',34),(57,1,'BoconÃ³',34),(58,1,'HernÃ¡ndez',34),(59,1,'La Concordia',10),(60,1,'San Juan Bautista',10),(61,1,'Pedro MarÃ­a Morantes',10),(62,1,'San SebastiÃ¡n',10),(63,1,'Dr. Francisco Romero Lobo',10),(64,1,'Seboruco',35),(65,1,'SimÃ³n RodrÃ­guez',36),(66,1,'Sucre',37),(67,1,'Eleazar LÃ³pez Contreras',37),(68,1,'San Pablo',37),(69,1,'Torbes',38),(70,1,'Uribante',11),(71,1,'CÃ¡rdenas U',11),(72,1,'Juan Pablo PeÃ±alosa',11),(73,1,'PotosÃ­',11),(74,1,'San Judas Tadeo',26);

/*Table structure for table `privilegios` */

DROP TABLE IF EXISTS `privilegios`;

CREATE TABLE `privilegios` (
  `Id_Privilegios` int(11) NOT NULL AUTO_INCREMENT,
  `Existe` int(11) NOT NULL DEFAULT '1',
  `Id_Usuario` int(11) NOT NULL,
  `Id_Menu` int(11) NOT NULL,
  PRIMARY KEY (`Id_Privilegios`)
) ENGINE=InnoDB AUTO_INCREMENT=19 DEFAULT CHARSET=latin1;

/*Data for the table `privilegios` */

insert  into `privilegios`(`Id_Privilegios`,`Existe`,`Id_Usuario`,`Id_Menu`) values (3,1,1,2),(4,1,1,4),(5,1,1,7),(6,1,1,1),(7,1,1,0),(8,1,1,10),(9,0,1,34),(10,1,2,1),(11,1,2,3),(12,1,2,5),(13,1,2,7),(14,1,2,2),(15,1,2,4),(16,1,2,6),(17,1,2,8),(18,1,2,9);

/*Table structure for table `ra_accion_actividad` */

DROP TABLE IF EXISTS `ra_accion_actividad`;

CREATE TABLE `ra_accion_actividad` (
  `Id_Actividad` int(11) NOT NULL,
  `Id_AccionTomada` int(11) NOT NULL,
  `Observacion` char(255) DEFAULT NULL,
  PRIMARY KEY (`Id_Actividad`,`Id_AccionTomada`),
  KEY `RefRA_Accion_Tomada501` (`Id_AccionTomada`),
  CONSTRAINT `RefRA_Accion_Tomada501` FOREIGN KEY (`Id_AccionTomada`) REFERENCES `ra_accion_tomada` (`Id_AccionTomada`),
  CONSTRAINT `RefRA_Actividad491` FOREIGN KEY (`Id_Actividad`) REFERENCES `ra_actividad` (`Id_Actividad`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

/*Data for the table `ra_accion_actividad` */

/*Table structure for table `ra_accion_tomada` */

DROP TABLE IF EXISTS `ra_accion_tomada`;

CREATE TABLE `ra_accion_tomada` (
  `Id_AccionTomada` int(11) NOT NULL AUTO_INCREMENT,
  `Existe` int(11) NOT NULL DEFAULT '1',
  `Nombre` char(255) NOT NULL,
  `Descripcion` char(255) DEFAULT NULL,
  PRIMARY KEY (`Id_AccionTomada`)
) ENGINE=InnoDB AUTO_INCREMENT=10 DEFAULT CHARSET=latin1;

/*Data for the table `ra_accion_tomada` */

insert  into `ra_accion_tomada`(`Id_AccionTomada`,`Existe`,`Nombre`,`Descripcion`) values (5,1,'Eliminacion de riesgos','eliminan todos los riesgos'),(6,1,'Inmovilizacion del paciente','esta loco y toca camisa de fuerz'),(7,1,'Acordinamiento',' ni me quiero imaginar que es =/'),(8,1,'Estabilizacion del paciente','estaba inestable :P'),(9,1,'Otros','soy otros');

/*Table structure for table `ra_actividad` */

DROP TABLE IF EXISTS `ra_actividad`;

CREATE TABLE `ra_actividad` (
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
  KEY `RefAldea561` (`Id_Aldea`),
  CONSTRAINT `RefAldea561` FOREIGN KEY (`Id_Aldea`) REFERENCES `aldea` (`Id_Aldea`),
  CONSTRAINT `RefRA_Condicion481` FOREIGN KEY (`Id_Condicion`) REFERENCES `ra_condicion` (`Id_Condicion`),
  CONSTRAINT `RefRA_Tipo471` FOREIGN KEY (`Id_Tipo`) REFERENCES `ra_tipo` (`Id_Tipo`)
) ENGINE=InnoDB AUTO_INCREMENT=11 DEFAULT CHARSET=latin1;

/*Data for the table `ra_actividad` */

insert  into `ra_actividad`(`Id_Actividad`,`Id_Unidad`,`Existe`,`Direccion`,`Hora_LLamada`,`Hora_Activacion`,`Hora_Sitio`,`Hora_Fin`,`Fecha`,`Numero_Folio`,`Situacion`,`Observacion`,`Recomendacion`,`Id_Tipo`,`Id_Condicion`,`Id_Aldea`,`Nov_id`) values (4,0,1,'fsdf asdf sadf','08:15:30','08:15:30','08:15:30','08:15:30','0000-00-00','44','zxcv','zxcvbn','yyyy',24,6,1,NULL),(5,0,1,'sdfgdsfg','08:19:00','08:19:00','08:19:00','08:19:00','0000-00-00','55','dfgdsf','gdsfgdsf','gdsfg',19,7,1,NULL),(6,0,1,'zxczxczxczxc','09:05:45','09:05:45','09:05:45','09:05:45','0000-00-00','44','asdasdasd','asdasdasd','asdasdasd',24,7,1,NULL),(7,0,1,'xzcvxzcv','09:10:45','09:10:45','09:10:45','09:10:45','0000-00-00','22','cx','xzcv','xzcv',20,7,1,NULL),(8,34234,1,'dfgdsfg','09:16:30','09:16:30','09:16:30','09:16:30','0000-00-00','44','dfg','dsfg','dsg',30,6,1,NULL),(9,44,1,'dfdfgdfg','09:31:15','09:31:15','09:31:15','09:31:15','0000-00-00','3434','dfgvdfgdfg','dfg','dsg',25,7,1,NULL),(10,9,1,'asdasa sdasasdas sdaaasd','09:00:15','09:00:15','09:00:15','09:00:15','2014-06-03','1234','sadsdads','asdassdasd','adsasdddddddddd',24,6,2,NULL);

/*Table structure for table `ra_actividad_danho` */

DROP TABLE IF EXISTS `ra_actividad_danho`;

CREATE TABLE `ra_actividad_danho` (
  `Id_Actividad` int(11) NOT NULL,
  `Id_Danho` int(11) NOT NULL,
  `Observacion` char(255) DEFAULT NULL,
  PRIMARY KEY (`Id_Actividad`,`Id_Danho`),
  KEY `RefRA_Danho671` (`Id_Danho`),
  CONSTRAINT `RefRA_Actividad661` FOREIGN KEY (`Id_Actividad`) REFERENCES `ra_actividad` (`Id_Actividad`),
  CONSTRAINT `RefRA_Danho671` FOREIGN KEY (`Id_Danho`) REFERENCES `ra_danho` (`Id_Danho`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

/*Data for the table `ra_actividad_danho` */

/*Table structure for table `ra_condicion` */

DROP TABLE IF EXISTS `ra_condicion`;

CREATE TABLE `ra_condicion` (
  `Id_Condicion` int(11) NOT NULL AUTO_INCREMENT,
  `Existe` int(11) NOT NULL DEFAULT '1',
  `Nombre` char(255) NOT NULL,
  `Descripcion` char(255) DEFAULT NULL,
  PRIMARY KEY (`Id_Condicion`)
) ENGINE=InnoDB AUTO_INCREMENT=9 DEFAULT CHARSET=latin1;

/*Data for the table `ra_condicion` */

insert  into `ra_condicion`(`Id_Condicion`,`Existe`,`Nombre`,`Descripcion`) values (5,1,'Normal','normalita'),(6,1,'Urgente','urgentica'),(7,1,'Emergencia','muchas emergencias'),(8,1,'Otros','estan de locura');

/*Table structure for table `ra_danho` */

DROP TABLE IF EXISTS `ra_danho`;

CREATE TABLE `ra_danho` (
  `Id_Danho` int(11) NOT NULL AUTO_INCREMENT,
  `Existe` int(11) NOT NULL DEFAULT '1',
  `Nombre` char(255) NOT NULL,
  `Descripcion` char(255) DEFAULT NULL,
  PRIMARY KEY (`Id_Danho`)
) ENGINE=InnoDB AUTO_INCREMENT=15 DEFAULT CHARSET=latin1;

/*Data for the table `ra_danho` */

insert  into `ra_danho`(`Id_Danho`,`Existe`,`Nombre`,`Descripcion`) values (6,1,'Alumbrado publico','alumbrado para que roben :D'),(7,1,'vehiculos','todas las marcas\n'),(8,1,'Hidrantes','para que esten fresquitos'),(9,1,'INST PUP','Instituciones publicas'),(10,1,'Viviendas','mi casa propia :D..'),(11,1,'INST PRIV','instutuciones privadas'),(12,1,'Puentes','Hay rios'),(13,1,'Vias de comunicacion','facebook, twitter y todas esas vias de comunicaciones\n'),(14,1,'Otros','Hola :D');

/*Table structure for table `ra_organismo_actividad` */

DROP TABLE IF EXISTS `ra_organismo_actividad`;

CREATE TABLE `ra_organismo_actividad` (
  `Id_OtrosOrganismo` int(11) NOT NULL,
  `Id_Actividad` int(11) NOT NULL,
  `Unidad` char(255) NOT NULL,
  `Jefe_Comision` char(255) NOT NULL,
  PRIMARY KEY (`Id_OtrosOrganismo`,`Id_Actividad`),
  KEY `RefRA_Actividad821` (`Id_Actividad`),
  CONSTRAINT `RefRA_Actividad821` FOREIGN KEY (`Id_Actividad`) REFERENCES `ra_actividad` (`Id_Actividad`),
  CONSTRAINT `RefRA_Otros_Organismo811` FOREIGN KEY (`Id_OtrosOrganismo`) REFERENCES `ra_otros_organismo` (`Id_OtrosOrganismo`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

/*Data for the table `ra_organismo_actividad` */

/*Table structure for table `ra_otros_organismo` */

DROP TABLE IF EXISTS `ra_otros_organismo`;

CREATE TABLE `ra_otros_organismo` (
  `Id_OtrosOrganismo` int(11) NOT NULL AUTO_INCREMENT,
  `Existe` int(11) NOT NULL DEFAULT '1',
  `Nombre` char(255) NOT NULL,
  `Descripcion` char(255) DEFAULT NULL,
  PRIMARY KEY (`Id_OtrosOrganismo`)
) ENGINE=InnoDB AUTO_INCREMENT=5 DEFAULT CHARSET=latin1;

/*Data for the table `ra_otros_organismo` */

insert  into `ra_otros_organismo`(`Id_OtrosOrganismo`,`Existe`,`Nombre`,`Descripcion`) values (3,1,'PC Municipal','INAPROCET'),(4,1,'Bomberos','Del obelisco :D');

/*Table structure for table `ra_puesto` */

DROP TABLE IF EXISTS `ra_puesto`;

CREATE TABLE `ra_puesto` (
  `Id_Puesto` int(11) NOT NULL AUTO_INCREMENT,
  `Existe` int(11) NOT NULL DEFAULT '1',
  `Nombre` char(255) NOT NULL,
  `Descripcion` char(255) DEFAULT NULL,
  PRIMARY KEY (`Id_Puesto`)
) ENGINE=InnoDB AUTO_INCREMENT=11 DEFAULT CHARSET=latin1;

/*Data for the table `ra_puesto` */

insert  into `ra_puesto`(`Id_Puesto`,`Existe`,`Nombre`,`Descripcion`) values (7,1,'Operador/Despachador','inaprocet'),(8,1,'Jefe de Comision','jefe :D'),(9,1,'Conductor','mueve carritos'),(10,1,'Funcionario','persona buehhh no tan mala');

/*Table structure for table `ra_tipo` */

DROP TABLE IF EXISTS `ra_tipo`;

CREATE TABLE `ra_tipo` (
  `Id_Tipo` int(11) NOT NULL AUTO_INCREMENT,
  `Existe` int(11) NOT NULL DEFAULT '1',
  `Nombre` char(255) NOT NULL,
  `Descripcion` char(255) DEFAULT NULL,
  PRIMARY KEY (`Id_Tipo`)
) ENGINE=InnoDB AUTO_INCREMENT=34 DEFAULT CHARSET=latin1;

/*Data for the table `ra_tipo` */

insert  into `ra_tipo`(`Id_Tipo`,`Existe`,`Nombre`,`Descripcion`) values (19,1,'Accidente de transito','Accidentes de transito en el casco de la ciudad'),(20,1,'Emergencias medicas','Emergencias de todo tipo xD'),(21,1,'Incendio de estructura','incendios por antisociales'),(22,1,'Incendio vehicular','Le cayo poste y exploto'),(23,1,'Incendio forestal','arbolitos quemados'),(24,1,'MAT-PEL','Matematicas y peliculas'),(25,1,'Detresfa','NI IDEA pero aqui ta'),(26,1,'Recuperacion de cadaver','se perdieron y ya se consiguieron :D'),(27,1,'Inspeccion','de todo tipo'),(28,1,'Rescate de person','estaba inrescatada :p'),(29,1,'Tala de arbol','la seÃ±ora tala pidio talarlo'),(30,1,'Busqueda',':D'),(31,1,'POV','Parasitos ocupacionales virusilis'),(32,1,'Evento','Muchas fiestas :D'),(33,1,'Otros','ni me toquen');

/*Table structure for table `usuario` */

DROP TABLE IF EXISTS `usuario`;

CREATE TABLE `usuario` (
  `Id_Usuario` int(11) NOT NULL AUTO_INCREMENT,
  `Existe` int(11) NOT NULL DEFAULT '1',
  `Nombre` char(255) NOT NULL,
  `Usuario` char(255) NOT NULL,
  `Password` char(255) NOT NULL,
  PRIMARY KEY (`Id_Usuario`)
) ENGINE=InnoDB AUTO_INCREMENT=3 DEFAULT CHARSET=latin1;

/*Data for the table `usuario` */

insert  into `usuario`(`Id_Usuario`,`Existe`,`Nombre`,`Usuario`,`Password`) values (1,0,'Maria Reyes','maria','12345'),(2,1,'Elena Cedre','Auditor','mariREY18');

/*Table structure for table `ins_citas` */

DROP TABLE IF EXISTS `ins_citas`;

/*!50001 DROP VIEW IF EXISTS `ins_citas` */;
/*!50001 DROP TABLE IF EXISTS `ins_citas` */;

/*!50001 CREATE TABLE  `ins_citas`(
 `id_cita` int(11) ,
 `no_folio` int(11) ,
 `fecha_solicitud` datetime ,
 `fecha_cita` datetime ,
 `direccion` char(255) ,
 `est_cita` char(255) ,
 `observacion` char(255) ,
 `aldea` char(255) ,
 `ciudad` char(255) ,
 `parroquia` char(255) ,
 `municipio` char(255) ,
 `estado` char(255) ,
 `propietario` char(10) ,
 `nombre` char(255) ,
 `apellido` char(255) ,
 `cedula` char(255) ,
 `telefono` char(15) ,
 `tipo` char(255) ,
 `propietarioced` int(11) 
)*/;

/*View structure for view ins_citas */

/*!50001 DROP TABLE IF EXISTS `ins_citas` */;
/*!50001 DROP VIEW IF EXISTS `ins_citas` */;

/*!50001 CREATE ALGORITHM=UNDEFINED DEFINER=`root`@`localhost` SQL SECURITY DEFINER VIEW `ins_citas` AS (select `a`.`Id_Cita` AS `id_cita`,`a`.`No_Folio` AS `no_folio`,`a`.`Fecha_Solicitud` AS `fecha_solicitud`,`a`.`Fecha_Cita` AS `fecha_cita`,`a`.`Direccion` AS `direccion`,`a`.`Estado` AS `est_cita`,`a`.`Observacion` AS `observacion`,`c`.`Nombre` AS `aldea`,`e`.`Nombre` AS `ciudad`,`f`.`Nombre` AS `parroquia`,`g`.`Nombre` AS `municipio`,`h`.`Nombre` AS `estado`,`d`.`Propietario` AS `propietario`,`d`.`Nombre` AS `nombre`,`d`.`Apellido` AS `apellido`,`d`.`Cedula` AS `cedula`,`d`.`Telefono` AS `telefono`,`b`.`Nombre` AS `tipo`,`a`.`Id_Propietario` AS `propietarioced` from (((((((`ev_cita` `a` join `ev_tipo` `b`) join `aldea` `c`) join `entrevistado` `d`) join `ciudad` `e`) join `parroquia` `f`) join `municipio` `g`) join `estado` `h`) where ((`a`.`Id_Tipo` = `b`.`Id_Tipo`) and (`a`.`Id_Entrevistado` = `d`.`Id_Entrevistado`) and (`a`.`Id_Aldea` = `c`.`Id_Aldea`) and (`c`.`Id_Ciudad` = `e`.`Id_Ciudad`) and (`e`.`Id_Parroquia` = `f`.`Id_Parroquia`) and (`f`.`Id_Municipio` = `g`.`Id_Municipio`) and (`g`.`Id_estado` = `h`.`Id_estado`))) */;

/*!40101 SET SQL_MODE=@OLD_SQL_MODE */;
/*!40014 SET FOREIGN_KEY_CHECKS=@OLD_FOREIGN_KEY_CHECKS */;
/*!40014 SET UNIQUE_CHECKS=@OLD_UNIQUE_CHECKS */;
/*!40111 SET SQL_NOTES=@OLD_SQL_NOTES */;
