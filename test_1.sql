-- phpMyAdmin SQL Dump
-- version 5.1.0
-- https://www.phpmyadmin.net/
--
-- Servidor: 127.0.0.1
-- Tiempo de generación: 14-02-2024 a las 04:54:07
-- Versión del servidor: 10.4.18-MariaDB
-- Versión de PHP: 8.0.3

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de datos: `test_1`
--

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `amigos`
--

CREATE TABLE `amigos` (
  `ID` int(3) NOT NULL,
  `Nombre` varchar(25) NOT NULL,
  `Apellido` varchar(25) NOT NULL,
  `Edad` smallint(3) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Volcado de datos para la tabla `amigos`
--

INSERT INTO `amigos` (`ID`, `Nombre`, `Apellido`, `Edad`) VALUES
(1, 'Alan', 'Mierdozkli', 3);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `curso`
--

CREATE TABLE `curso` (
  `id` int(11) NOT NULL,
  `nombre` varchar(500) NOT NULL,
  `ruta` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Volcado de datos para la tabla `curso`
--

INSERT INTO `curso` (`id`, `nombre`, `ruta`) VALUES
(1, 'jugando con la programacion', 'foto.jpg'),
(2, 'jugando con la programacion', 'foto.jpg'),
(3, 'jugando con la programacion', 'foto.jpg'),
(4, 'jugando con la programacion', 'foto.jpg'),
(5, 'jugando con la programacion', 'foto.jpg'),
(6, 'jugando con la programacion', 'foto.jpg');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `cursos`
--

CREATE TABLE `cursos` (
  `ID` int(255) NOT NULL,
  `Titulo` varchar(255) NOT NULL,
  `Cantidad_De_Horas` int(255) NOT NULL,
  `Descripcion` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Volcado de datos para la tabla `cursos`
--

INSERT INTO `cursos` (`ID`, `Titulo`, `Cantidad_De_Horas`, `Descripcion`) VALUES
(1, 'hola', 4, 'sadsadas'),
(2, 'hola', 4, 'sadsadas'),
(3, 'sadsa', 5, 'asdsadsadad'),
(4, 'sds', 3, 'sdasda'),
(5, 'sadasd', 3, 'asdasd'),
(6, 'sadasd', 3, 'asdasd'),
(7, 'hola', 3, 'asdsad'),
(8, 'hola', 5, 'asdsadasdas'),
(9, '', 0, ''),
(10, '', 0, ''),
(11, 'puto el q lee', 0, 'sadsadas'),
(12, 'dsadas', 4, 'sadasdasdsa'),
(13, 'hola', 5, 'sadas'),
(14, 'sdsadsadsad', 4, 'asdasdsa');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `cvmanuel`
--

CREATE TABLE `cvmanuel` (
  `ID` int(11) NOT NULL,
  `Nombre` varchar(50) NOT NULL,
  `Apellido` varchar(50) NOT NULL,
  `Email` varchar(50) NOT NULL,
  `Pais` varchar(50) NOT NULL,
  `Motivo_del_Contacto` varchar(50) NOT NULL,
  `Estado` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Volcado de datos para la tabla `cvmanuel`
--

INSERT INTO `cvmanuel` (`ID`, `Nombre`, `Apellido`, `Email`, `Pais`, `Motivo_del_Contacto`, `Estado`) VALUES
(10, 'jkjk', 'jkjk', 'jkjk@gmail.com', 'algo', '', '2'),
(11, 'jkjk', 'jkjk', 'jkjk@gmail.com', 'algo', '', '2'),
(12, 'jkjk', 'jkjk', 'jkjk@gmail.com', 'algo', '', '2'),
(13, 'jkjk', 'jkjk', 'jkjk@gmail.com', 'algo', 'jkjk', '2'),
(14, 'cristian', 'vranic', 'vranicdelmoron@gmail.com', 'quiaca', 'puto', '2'),
(15, 'dsadsa', 'dsdhgbcvb', 'jkjwqeqweqwk@gmail.com', 'wqeqwe', 'jkeqweqweqwdsdas', '2'),
(16, 'jkjk', 'jkjk', 'jkjk@gmail.com', 'algo', '', '2'),
(17, 'hola q talsadasdasasdsa', 'robertasdas', 'loco@gmail.com', 'kmlkml', 'asdasdsadasdsadsasdsassassasasasas', '1'),
(18, 'agustin', 'iniguez', 'agustindelmoron@gmail.com', 'Bolivia', 'asdasdsadsasadsadasdasda', '1'),
(19, 'manuel', 'rodriguez', 'manueldelmoron@gmail.com', 'Argentina', 'sadasdasdassadasdasdas', '1');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `ejercicio_con_cris`
--

CREATE TABLE `ejercicio_con_cris` (
  `Numero` int(255) NOT NULL,
  `Nombre` varchar(50) NOT NULL,
  `Email` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Volcado de datos para la tabla `ejercicio_con_cris`
--

INSERT INTO `ejercicio_con_cris` (`Numero`, `Nombre`, `Email`) VALUES
(3, '0', '0'),
(3, '0', '0'),
(3, '0', 'manueldelmoron@gmail.com'),
(3, '0', 'manueldelmoron@gmail.com'),
(3, 'Manuel Rodriguez', 'manueldelmoron@gmail.com'),
(4, 'sadas', 'asdasds@hotmail.com'),
(4, 'sadas', 'asdasds@hotmail.com'),
(4, 'sadsa', 'sadas@hotmiakl.com'),
(4, 'sadsa', 'sadas@hotmiakl.com'),
(4, 'manuel', 'manueldelmoron@gmail.com'),
(4, 'manuel', 'manueldelmoron@gmail.com'),
(4, 'manuel', 'manueldelmoron@gmail.com'),
(4, 'manuel', 'manueldelmoron@gmail.com'),
(4, 'manuel', 'manueldelmoron@gmail.com'),
(4, 'manuel', 'manueldelmoron@gmail.com'),
(4, 'asdas', 'manueldelmoron@gmail.com');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `precliente`
--

CREATE TABLE `precliente` (
  `id` int(255) NOT NULL,
  `codigo_postal` int(255) NOT NULL,
  `provincia` varchar(255) NOT NULL,
  `localidad` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `codigo_de_area` int(255) NOT NULL,
  `numero_de_telefono` int(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Volcado de datos para la tabla `precliente`
--

INSERT INTO `precliente` (`id`, `codigo_postal`, `provincia`, `localidad`, `email`, `codigo_de_area`, `numero_de_telefono`) VALUES
(4, 1708, '', 'sadas', 'sadasds@hotmail.com', 111, 16516516),
(5, 1708, '', 'sadas', 'sadasds@hotmail.com', 111, 16516516),
(6, 1708, '', 'sadas', 'sadasds@hotmail.com', 111, 16516516),
(7, 1708, '', 'sadas', 'sadasds@hotmail.com', 111, 16516516),
(8, 1708, '', 'sadas', 'sadasds@hotmail.com', 111, 16516516),
(9, 1708, '', 'sadas', 'sadasds@hotmail.com', 111, 16516516),
(10, 1708, '', 'sadas', 'sadasds@hotmail.com', 111, 16516516),
(11, 1708, '', 'sadas', 'sadasds@hotmail.com', 111, 16516516),
(12, 1708, '', 'sadas', 'sadasds@hotmail.com', 111, 16516516),
(13, 1708, '', 'sadas', 'sadasds@hotmail.com', 111, 16516516),
(14, 1708, '', 'sadas', 'sadasds@hotmail.com', 111, 16516516),
(15, 1708, '', 'sadas', 'sadasds@hotmail.com', 111, 16516516),
(16, 1708, '', 'sadas', 'sadasds@hotmail.com', 111, 16516516),
(17, 1708, '', 'sadas', 'sadasds@hotmail.com', 111, 16516516),
(18, 1708, '', 'Moron', 'manuelrodriguezz996@gmail.com', 121, 38872182),
(19, 1708, '', 'Moron', 'manuelrodriguezz996@gmail.com', 121, 38872182),
(20, 1708, '', 'Moron', 'manuelrodriguezz996@gmail.com', 121, 38872182),
(21, 1708, '', 'Moron', 'manuelrodriguezz996@gmail.com', 121, 38872182),
(22, 1708, '', 'sadas', 'sadasds@hotmail.com', 111, 16516516),
(23, 1708, '', 'sadas', 'sadasds@hotmail.com', 111, 16516516),
(24, 1708, '', 'Moron', 'manuelrodriguezz996@gmail.com', 101, 38872182),
(25, 1708, '', 'Moron', 'manuelrodriguezz996@gmail.com', 101, 38872182),
(26, 1708, '', 'Moron', 'manuelrodriguezz996@gmail.com', 11, 38872182),
(27, 1708, '', 'Moron', 'manuelrodriguezz996@gmail.com', 11, 38872182),
(28, 1708, '', 'Moron', 'manuelrodriguezz996@gmail.com', 11, 38872182),
(29, 1708, '', 'Moron', 'manuelrodriguezz996@gmail.com', 11, 38872182),
(30, 1708, '', 'Moron', 'manuelrodriguezz996@gmail.com', 11, 38872182),
(31, 1708, '', 'Moron', 'manuelrodriguezz996@gmail.com', 11, 38872182),
(32, 1708, '', 'Moron', 'manuelrodriguezz996@gmail.com', 11, 38872182),
(33, 1708, '', 'Moron', 'manuelrodriguezz996@gmail.com', 11, 38872182),
(34, 1708, '', 'Moron', 'manuelrodriguezz996@gmail.com', 1, 38872182),
(35, 1708, '', 'Moron', 'manuelrodriguezz996@gmail.com', 1, 38872182),
(36, 1708, '', 'Moron', 'manuelrodriguezz996@gmail.com', 1, 38872182),
(37, 1708, '', 'Moron', 'manuelrodriguezz996@gmail.com', 1, 38872182),
(38, 1708, '', 'Moron', 'manuelrodriguezz996@gmail.com', 1, 38872182),
(39, 1708, '', 'Moron', 'manuelrodriguezz996@gmail.com', 1, 38872182),
(40, 1708, '', 'Moron', 'manuelrodriguezz996@gmail.com', 1, 38872182),
(41, 1708, '', 'Moron', 'manuelrodriguezz996@gmail.com', 1, 38872182),
(42, 1708, '', 'Moron', 'manuelrodriguezz996@gmail.com', 1, 38872182),
(43, 1708, '', 'Moron', 'manuelrodriguezz996@gmail.com', 1, 38872182),
(44, 1708, '', 'Moron', 'manuelrodriguezz996@gmail.com', 1, 38872182),
(45, 1708, '', 'Moron', 'manuelrodriguezz996@gmail.com', 11, 38872182),
(46, 1708, '', 'Moron', 'manuelrodriguezz996@gmail.com', 11, 38872182),
(47, 1708, '', 'Moron', 'manuelrodriguezz996@gmail.com', 911, 38872182),
(48, 1708, '', 'Moron', 'manuelrodriguezz996@gmail.com', 911, 38872182),
(49, 1708, '', 'Moron', 'manuelrodriguezz996@gmail.com', 911, 38872182),
(50, 1708, '', 'Moron', 'manuelrodriguezz996@gmail.com', 911, 38872182),
(51, 1708, '', 'Moron', 'manuelrodriguezz996@gmail.com', 110, 38872182),
(52, 1708, '', 'Moron', 'manuelrodriguezz996@gmail.com', 110, 38872182),
(53, 1708, '', 'Moron', 'manuelrodriguezz996@gmail.com', 101, 38872182),
(54, 1708, '', 'Moron', 'manuelrodriguezz996@gmail.com', 110, 38872182),
(55, 1708, '', 'Moron', 'manuelrodriguezz996@gmail.com', 110, 38872182),
(56, 1708, '', 'Moron', 'manuelrodriguezz996@gmail.com', 101, 38872182),
(57, 1708, '', 'Moron', 'manuelrodriguezz996@gmail.com', 117, 38872182),
(58, 1708, 'Entre Ríos', '3008405002', 'manuelrodriguezz996@gmail.com', 11, 38872182),
(59, 1708, '\n                Elije una Provincia\n\n            Ciudad Autónoma de Buenos AiresNeuquénSan LuisSanta FeLa RiojaCatamarcaTucumánChacoFormosaSanta CruzChubutMendozaEntre RíosSan JuanJujuySantiago del EsteroRío NegroCorrientesMisionesSaltaCórdobaBuenos Aire', '\n                Elije una Localidad\n\n            Presidente RocaEstación Presidente RocaVilla AdelinaSauce ViejoArroyo LeyesRincón NorteBouquetLas RosasMontes de OcaArmstrongLas ParejasTortugasArequitoBeravebúCasildaLos MolinosLos NogalesLos Quirquinchos', 'manuelrodriguezz996@gmail.com', 11, 38872182),
(60, 1708, 'La Rioja', 'Santa Clara', 'manuelrodriguezz996@gmail.com', 11, 38872182),
(61, 1708, 'La Rioja', 'Santa Clara', 'manuelrodriguezz996@gmail.com', 11, 38872182),
(62, 1708, 'Tucumán', 'El Corte', 'manuelrodriguezz996@gmail.com', 11, 38872182),
(63, 1708, 'Río Negro', 'Villa Llao Llao', 'manuelrodriguezz996@gmail.com', 101, 38872182),
(64, 1708, 'Santa Fe', 'Arroyo Leyes', 'manuelrodriguezz996@gmail.com', 111, 38872182),
(65, 1708, 'Neuquén', 'Santo Tomás', 'manuelrodriguezz996@gmail.com', 101, 38872182),
(66, 1712, 'La Rioja', 'Salicas', 'cristianvranic@hotmail.com', 11, 60464752),
(67, 1712, 'Santa Fe', 'Castelar', 'cristianvranic@hotmail.com', 110, 60464752),
(68, 1712, 'San Luis', 'La Ribera', 'cristianvranic@hotmail.com', 111, 60464752),
(69, 1712, 'Río Negro', 'Pomona', 'cristianvranic@hotmail.com', 112, 60464752),
(70, 1712, 'San Luis', 'Luján', 'cristianvranic@hotmail.com', 111, 60464752),
(71, 1712, 'Santa Fe', 'Castelar', 'cristianvranic@hotmail.com', 112, 60464752),
(72, 1712, 'Santa Fe', 'Castelar', 'cristianvranic@hotmail.com', 112, 60464752),
(73, 1712, 'San Luis', 'Villa Mercedes', 'cristianvranic@hotmail.com', 112, 60464752),
(74, 1712, 'La Rioja', 'Los Robles', 'cristianvranic@hotmail.com', 211, 60464752),
(75, 1712, 'La Rioja', 'Machigasta', 'cristianvranic@hotmail.com', 112, 60464752),
(76, 1712, 'Jujuy', 'Los Nogales', 'cristianvranic@hotmail.com', 112, 60464752),
(77, 1712, 'San Luis', 'La Ribera', 'cristianvranic@hotmail.com', 112, 60464752),
(78, 1712, 'San Luis', 'La Calera', 'cristianvranic@hotmail.com', 111, 60464752),
(79, 1712, 'Santa Fe', 'Castelar', 'cristianvranic@hotmail.com', 112, 60464752);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `precotizacion`
--

CREATE TABLE `precotizacion` (
  `id` int(255) NOT NULL,
  `anio_del_auto` int(255) NOT NULL,
  `marca_del_auto` varchar(255) NOT NULL,
  `modelo_del_auto` varchar(255) NOT NULL,
  `version_del_auto` varchar(255) NOT NULL,
  `codigo_cotizacion` varchar(20) NOT NULL,
  `id_precliente` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Volcado de datos para la tabla `precotizacion`
--

INSERT INTO `precotizacion` (`id`, `anio_del_auto`, `marca_del_auto`, `modelo_del_auto`, `version_del_auto`, `codigo_cotizacion`, `id_precliente`) VALUES
(3, 2132, 'asdd', 'sadsad', 'asdasd', '', 0),
(4, 2132, 'asdd', 'sadsad', 'asdasd', '', 0),
(5, 2132, 'asdd', 'sadsad', 'asdasd', '', 0),
(6, 2132, 'asdd', 'sadsad', 'asdasd', '', 0),
(7, 2132, 'asdd', 'sadsad', 'asdasd', '', 0),
(8, 2132, 'asdd', 'sadsad', 'asdasd', '', 0),
(9, 2132, 'asdd', 'sadsad', 'asdasd', '', 0),
(10, 2132, 'asdd', 'sadsad', 'asdasd', '', 0),
(11, 2132, 'asdd', 'sadsad', 'asdasd', '', 0),
(12, 2132, 'asdd', 'sadsad', 'asdasd', '', 0),
(13, 2132, 'asdd', 'sadsad', 'asdasd', '', 0),
(14, 2132, 'asdd', 'sadsad', 'asdasd', '', 0),
(15, 2002, 'Ford', 'Corsa', 'asd', '', 0),
(16, 2002, 'Ford', 'Corsa', 'asd', '', 0),
(17, 2002, 'Ford', 'Corsa', 'asd', '', 0),
(18, 2002, 'Ford', 'Corsa', 'asd', '', 0),
(19, 2132, 'asdd', 'sadsad', 'asdasd', '', 0),
(20, 2132, 'asdd', 'sadsad', 'asdasd', '', 0),
(21, 2002, 'Ford', 'Corsa', 'asd', '', 0),
(22, 2002, 'Ford', 'Corsa', 'asd', '', 0),
(23, 2003, 'Ford', 'Corsa', 'asd', '', 0),
(24, 2003, 'Ford', 'Corsa', 'asd', '', 0),
(25, 2001, 'Ford', 'Corsa', 'asd', '', 0),
(26, 2001, 'Ford', 'Corsa', 'asd', '', 0),
(27, 2002, 'Ford', 'asd', 'asd', '', 0),
(28, 2002, 'Ford', 'asd', 'asd', '', 0),
(29, 2002, 'Ford', 'Corsa', 'asd', '', 0),
(30, 2002, 'Ford', 'Corsa', 'asd', '', 0),
(31, 2020, 'CHERY', 'Corsa', 'asd', '', 0),
(32, 2020, 'CHERY', 'Corsa', 'asd', '', 0),
(33, 2020, 'CHERY', 'Corsa', 'asd', '', 0),
(34, 2020, 'CHERY', 'Corsa', 'asd', '', 0),
(35, 2020, 'CHERY', 'Corsa', 'asd', '', 0),
(36, 2020, 'CHERY', 'Corsa', 'asd', '', 0),
(37, 2020, 'CHERY', 'Corsa', 'asd', '', 0),
(38, 2020, 'CHERY', 'Corsa', 'asd', '', 0),
(39, 2020, 'CHERY', 'Corsa', 'asd', '', 0),
(40, 2020, 'CHERY', 'Corsa', 'asd', '', 0),
(41, 2020, 'CHRYSLER', 'Corsa', 'asd', '', 0),
(42, 2020, 'CHRYSLER', 'Corsa', 'asd', '', 0),
(43, 2021, 'CHEVROLET', 'Corsa', 'asd', '', 0),
(44, 2021, 'CHEVROLET', 'Corsa', 'asd', '', 0),
(45, 2020, 'CHRYSLER', 'asd', 'asd', '', 0),
(46, 2020, 'CHRYSLER', 'asd', 'asd', '', 0),
(47, 2019, 'CHEVROLET', 'Corsa', 'asd', '', 0),
(48, 2022, 'CHEVROLET', 'asd', 'asd', '', 0),
(49, 2022, 'CHEVROLET', 'asd', 'asd', '', 0),
(50, 2020, 'CHEVROLET', 'asd', 'asd', '', 0),
(51, 2019, 'CHRYSLER', 'Corsa', 'asd', '', 0),
(52, 2020, '42', '357', '8826', '', 0),
(53, 2020, '2', '103', '6368', '', 0),
(54, 2020, '\n                Selecione la Marca\n\n            AcuraAlfa RomeoAM GeneralAston MartinAudiBentleyBMWBugattiBuickCadillacChevroletChryslerDaewooDodgeEagleFerrariFIATFiskerFordGenesisGeoGMCHondaHUMMERHyundaiINFINITIIsuzuJaguarJeepKarmaKiaLamborghiniLand Rov', 'Selecione un ModeloA3A4A4 allroadA5A6A6 allroadA7A8e-tron SportbackQ3Q5Q7Q8R8RS 3RS Q8S3S4S5S6S7S8SQ5SQ7SQ8TTTT RSTTS', 'Selecione una VersionPremium Plus S line 4dr Sedan AWD (2.0L 4cyl Turbo 7AM)Premium S line 4dr Sedan AWD (2.0L 4cyl Turbo 7AM)Sport Premium 4dr Sedan (2.0L 4cyl Turbo 7AM)Sport Premium Plus 4dr Sedan (2.0L 4cyl Turbo 7AM)', '', 0),
(55, 2019, 'Audi', 'A4', '2.0 TFSI Premium Plus 4dr Sedan (2.0L 4cyl Turbo 7AM)', '', 0),
(56, 2019, 'Audi', 'A4', '2.0 TFSI Premium Plus 4dr Sedan (2.0L 4cyl Turbo 7AM)', '', 0),
(57, 2020, 'Aston Martin', 'DB11', 'AMR 2dr Coupe (5.2L 12cyl Turbo 8A)', '', 0),
(58, 2020, 'Alfa Romeo', 'Giulia', '4dr Sedan AWD (2.0L 4cyl Turbo 8A)', '', 0),
(59, 2019, 'Acura', 'ILX', '4dr Sedan (2.4L 4cyl 8AM)', '', 0),
(60, 2020, 'Audi', 'A3', 'Premium Plus S line 4dr Sedan AWD (2.0L 4cyl Turbo 7AM)', '', 0),
(61, 2018, 'Alfa Romeo', '4C', 'Spider 2dr Coupe (1.7L 4cyl Turbo 6AM)', '', 0),
(62, 2018, 'Alfa Romeo', 'Giulia', '4dr Sedan (2.0L 4cyl Turbo 8A)', '', 0),
(63, 2016, 'Alfa Romeo', '4C', 'Spider 2dr Coupe (1.7L 4cyl Turbo 6AM)', '', 0),
(64, 2018, 'BMW', '3 Series Gran Turismo', '340i xDrive 4dr Hatchback AWD (3.0L 6cyl Turbo 8A)', '', 0),
(65, 2019, 'Alfa Romeo', 'Giulia', '4dr Sedan (2.0L 4cyl Turbo 8A)', '', 0),
(66, 2017, 'BMW', '4 Series Gran Coupe', '440i xDrive 4dr Sedan AWD (3.0L 6cyl Turbo 8A)', '', 0),
(67, 2018, 'Alfa Romeo', 'Giulia', '4dr Sedan AWD (2.0L 4cyl Turbo 8A)', '', 0),
(68, 2018, 'Alfa Romeo', '4C', '2dr Coupe w/Prod. End 09/17 (1.7L 4cyl Turbo 6AM)', '', 0),
(69, 2018, 'Audi', 'A4', '2.0 TFSI Premium Plus quattro Summer of Audi 4dr Sedan AWD (2.0L 4cyl Turbo 7AM)', '', 0),
(70, 2019, 'BMW', '4 Series', '430i 2dr Convertible (2.0L 4cyl Turbo 8A)', '', 0),
(71, 2018, 'Alfa Romeo', 'Stelvio', 'Quadrifoglio 4dr SUV AWD (2.9L 6cyl Turbo 8A)', '', 0),
(72, 2019, 'BMW', '3 Series', '330i xDrive 4dr Wagon AWD (2.0L 4cyl Turbo 8A)', 'B2', 0),
(73, 2017, 'BMW', '4 Series', '430i xDrive SULEV 2dr Coupe AWD (2.0L 4cyl Turbo 8A)', 'D15', 0),
(74, 2018, 'Alfa Romeo', 'Giulia', '4dr Sedan (2.0L 4cyl Turbo 8A)', 'D15', 79);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `tipo_de_usuario`
--

CREATE TABLE `tipo_de_usuario` (
  `id` int(255) NOT NULL,
  `descripcion` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Volcado de datos para la tabla `tipo_de_usuario`
--

INSERT INTO `tipo_de_usuario` (`id`, `descripcion`) VALUES
(1, 'Administrador'),
(2, 'Intereseado'),
(3, 'Visitante');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `usuarios`
--

CREATE TABLE `usuarios` (
  `id` int(255) NOT NULL,
  `usuario` varchar(255) NOT NULL,
  `contraseña` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `tipo_de_usuario` int(255) NOT NULL,
  `estado` int(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Volcado de datos para la tabla `usuarios`
--

INSERT INTO `usuarios` (`id`, `usuario`, `contraseña`, `email`, `tipo_de_usuario`, `estado`) VALUES
(1, 'sadsa', '123', 'manueldelmoron@gmail.com', 0, 0),
(2, 'sadsa', '123', 'manueldelmoron@gmail.com', 0, 0),
(3, 'Test', '123', 'manueldelmsadasdsadoron@gmail.com', 0, 0),
(4, 'Test', '202cb962ac59075b964b07152d234b70', 'manueldelmsadasdsadoron@gmail.com', 0, 0),
(5, 'Test', '202cb962ac59075b964b07152d234b70', 'manueldelmsadasdsadoron@gmail.com', 1, 1),
(6, 'Test', '098f6bcd4621d373cade4e832627b4f6', 'manueldelmoron@gmail.com', 1, 1),
(7, 'testes', '202cb962ac59075b964b07152d234b70', 'manueldelmoron@gmail.com', 1, 1),
(8, 'testes', '6e7906b7fb3f8e1c6366c0910050e595', 'manueldelmoron@gmail.com', 1, 1),
(9, 'manuel', '4d186321c1a7f0f354b297e8914ab240', 'manueldelmoron@gmail.com', 1, 1);

--
-- Índices para tablas volcadas
--

--
-- Indices de la tabla `amigos`
--
ALTER TABLE `amigos`
  ADD PRIMARY KEY (`ID`);

--
-- Indices de la tabla `curso`
--
ALTER TABLE `curso`
  ADD PRIMARY KEY (`id`);

--
-- Indices de la tabla `cursos`
--
ALTER TABLE `cursos`
  ADD PRIMARY KEY (`ID`);

--
-- Indices de la tabla `cvmanuel`
--
ALTER TABLE `cvmanuel`
  ADD PRIMARY KEY (`ID`);

--
-- Indices de la tabla `precliente`
--
ALTER TABLE `precliente`
  ADD PRIMARY KEY (`id`);

--
-- Indices de la tabla `precotizacion`
--
ALTER TABLE `precotizacion`
  ADD PRIMARY KEY (`id`);

--
-- Indices de la tabla `tipo_de_usuario`
--
ALTER TABLE `tipo_de_usuario`
  ADD PRIMARY KEY (`id`);

--
-- Indices de la tabla `usuarios`
--
ALTER TABLE `usuarios`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT de las tablas volcadas
--

--
-- AUTO_INCREMENT de la tabla `amigos`
--
ALTER TABLE `amigos`
  MODIFY `ID` int(3) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT de la tabla `curso`
--
ALTER TABLE `curso`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT de la tabla `cursos`
--
ALTER TABLE `cursos`
  MODIFY `ID` int(255) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=15;

--
-- AUTO_INCREMENT de la tabla `cvmanuel`
--
ALTER TABLE `cvmanuel`
  MODIFY `ID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=20;

--
-- AUTO_INCREMENT de la tabla `precliente`
--
ALTER TABLE `precliente`
  MODIFY `id` int(255) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=80;

--
-- AUTO_INCREMENT de la tabla `precotizacion`
--
ALTER TABLE `precotizacion`
  MODIFY `id` int(255) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=75;

--
-- AUTO_INCREMENT de la tabla `tipo_de_usuario`
--
ALTER TABLE `tipo_de_usuario`
  MODIFY `id` int(255) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT de la tabla `usuarios`
--
ALTER TABLE `usuarios`
  MODIFY `id` int(255) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
