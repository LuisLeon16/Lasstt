-- phpMyAdmin SQL Dump
-- version 5.0.2
-- https://www.phpmyadmin.net/
--
-- Servidor: 127.0.0.1
-- Tiempo de generación: 21-11-2020 a las 17:17:42
-- Versión del servidor: 10.4.13-MariaDB
-- Versión de PHP: 7.4.8

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de datos: `lasstt`
--

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `cliente`
--

CREATE TABLE `cliente` (
  `id_cliente` int(11) NOT NULL,
  `nombre_cliente` varchar(50) NOT NULL,
  `apellido_cliente` varchar(50) NOT NULL,
  `contra_cliente` varchar(25) NOT NULL,
  `correo_cliente` varchar(50) NOT NULL,
  `telefono_cliente` varchar(10) NOT NULL,
  `codpostal_cliente` int(11) NOT NULL,
  `direccion_cliente` varchar(100) NOT NULL,
  `tarjetacredito_cliente` varchar(20) NOT NULL,
  `fechanac_cliente` varchar(15) NOT NULL,
  `codigocvv_cliente` int(11) NOT NULL,
  `estado` char(2) DEFAULT 'A'
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `contacto`
--

CREATE TABLE `contacto` (
  `id_contacto` int(11) NOT NULL,
  `nombre_contacto` varchar(25) NOT NULL,
  `correo_contacto` varchar(100) NOT NULL,
  `telefono_contacto` varchar(10) NOT NULL,
  `asunto_contacto` varchar(100) NOT NULL,
  `mensaje_contacto` varchar(100) NOT NULL,
  `estado` char(2) DEFAULT 'A'
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `detallepago`
--

CREATE TABLE `detallepago` (
  `id` int(11) NOT NULL,
  `id_compra` int(11) NOT NULL,
  `nom_producto` varchar(50) NOT NULL,
  `precio` double(10,2) NOT NULL,
  `cantidad` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Volcado de datos para la tabla `detallepago`
--

INSERT INTO `detallepago` (`id`, `id_compra`, `nom_producto`, `precio`, `cantidad`) VALUES
(1, 1, 'PULSE 3D', 126.00, 1),
(2, 2, 'LAPTOP HP CHROMEBOOK 11 G5', 295.00, 1);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `encuesta`
--

CREATE TABLE `encuesta` (
  `id_encuesta` int(11) NOT NULL,
  `buscarproducto_encuesta` varchar(7) NOT NULL,
  `informacionsegura_encuesta` varchar(40) NOT NULL,
  `probabilidadcompra_encuesta` varchar(15) NOT NULL,
  `errornavegador_encuesta` char(2) NOT NULL,
  `navegador4_encuesta` varchar(25) NOT NULL,
  `calidadproducto_encuesta` varchar(75) NOT NULL,
  `escala_encuesta` int(11) NOT NULL,
  `tiempobusqueda_encuesta` varchar(20) NOT NULL,
  `expectativas_encuesta` varchar(25) NOT NULL,
  `tipopago_encuesta` varchar(75) NOT NULL,
  `diseno_encuesta` varchar(25) NOT NULL,
  `resultadonavegacion_encuesta` varchar(25) NOT NULL,
  `servicioadicional_encuesta` varchar(200) NOT NULL,
  `procesobusqueda_encuesta` varchar(10) NOT NULL,
  `guianavegacion_encuesta` varchar(15) NOT NULL,
  `recomendacion_encuesta` varchar(150) NOT NULL,
  `estado` char(2) DEFAULT 'A'
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `nuevosproductos`
--

CREATE TABLE `nuevosproductos` (
  `id_Nproducto` int(11) NOT NULL,
  `nombre_Nproducto` varchar(75) NOT NULL,
  `precio_Nproducto` float NOT NULL,
  `cantidad_Nproducto` int(11) NOT NULL,
  `caracteristica_Nproducto` varchar(100) NOT NULL,
  `imagen` varchar(150) NOT NULL,
  `Estado` char(2) DEFAULT 'A'
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Volcado de datos para la tabla `nuevosproductos`
--

INSERT INTO `nuevosproductos` (`id_Nproducto`, `nombre_Nproducto`, `precio_Nproducto`, `cantidad_Nproducto`, `caracteristica_Nproducto`, `imagen`, `Estado`) VALUES
(1, 'Telefon', 12, 12, 'abc', 'telefono.jpeg', 'A'),
(2, 'Teclado', 123, 10, 'Teclado con luces', 'teclado.jpg', 'A');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `pago`
--

CREATE TABLE `pago` (
  `id` int(11) NOT NULL,
  `id_suario` int(11) NOT NULL,
  `fecha_compra` datetime NOT NULL,
  `valor` double(10,2) NOT NULL,
  `tipo_tj` varchar(25) NOT NULL,
  `nombre_tj` varchar(50) NOT NULL,
  `banco_e` varchar(50) NOT NULL,
  `num_tj` int(16) NOT NULL,
  `mes_tj` char(2) NOT NULL,
  `year_tj` char(4) NOT NULL,
  `Estado` char(2) DEFAULT 'A'
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Volcado de datos para la tabla `pago`
--

INSERT INTO `pago` (`id`, `id_suario`, `fecha_compra`, `valor`, `tipo_tj`, `nombre_tj`, `banco_e`, `num_tj`, `mes_tj`, `year_tj`, `Estado`) VALUES
(1, 2, '2020-11-21 17:11:05', 126.00, 'Credito', 'cliente123', 'Cuscatlan', 2147483647, '11', '2024', 'A'),
(2, 3, '2020-11-21 17:11:26', 295.00, 'Credito', 'cliente123', 'Agricola', 2147483647, '1', '2021', 'A');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `productos`
--

CREATE TABLE `productos` (
  `id` int(11) NOT NULL,
  `producto` varchar(150) NOT NULL,
  `existencia` int(11) NOT NULL,
  `precio` decimal(8,2) NOT NULL,
  `foto` varchar(150) NOT NULL,
  `Estado` char(2) DEFAULT 'A'
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Volcado de datos para la tabla `productos`
--

INSERT INTO `productos` (`id`, `producto`, `existencia`, `precio`, `foto`, `Estado`) VALUES
(1, 'PULSE 3D', 50, '126.00', 'PULSE 3D.png', 'A'),
(2, 'LENOVO IDEAPAD 3', 50, '499.00', 'LENOVO IDEAPAD 3.png', 'A'),
(3, 'LAPTOP HP CHROMEBOOK 11 G5', 50, '295.00', 'LAPTOP HP CHROMEBOOK 11 G5.png', 'A'),
(4, 'COMPUTADORA HP22', 50, '479.00', 'COMPUTADORA HP22.png', 'A'),
(5, 'Acer Aspire C24', 50, '579.00', 'Acer Aspire C24.png', 'A'),
(6, 'Monitor Samsung Serie CF391', 50, '238.00', 'Monitor Samsung Serie CF391.png', 'A'),
(7, 'Camara web Depstech HD 1080P', 50, '29.99', 'Camara web Depstech HD 1080P.png', 'A'),
(8, 'Altavoces Cyber Acoustics CA-2014', 50, '16.60', 'Altavoces Cyber Acoustics CA-2014.png', 'A'),
(9, 'Toshiba Tecra A50-F', 50, '693.00', 'Toshiba Tecra A50-F.png', 'A');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `usuario`
--

CREATE TABLE `usuario` (
  `id` int(10) NOT NULL,
  `RolUsuario` int(3) NOT NULL,
  `NombreUsuario` varchar(100) NOT NULL,
  `Contrasena` varchar(100) NOT NULL,
  `EmailUsuario` varchar(100) NOT NULL,
  `apellidos_usuario` varchar(50) NOT NULL,
  `codigoPos_usuario` int(11) NOT NULL,
  `telefono_usuario` varchar(10) NOT NULL,
  `direccion_usuario` varchar(100) NOT NULL,
  `Estado` char(2) DEFAULT 'A'
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Volcado de datos para la tabla `usuario`
--

INSERT INTO `usuario` (`id`, `RolUsuario`, `NombreUsuario`, `Contrasena`, `EmailUsuario`, `apellidos_usuario`, `codigoPos_usuario`, `telefono_usuario`, `direccion_usuario`, `Estado`) VALUES
(1, 1, 'admin', '12345', 'admin@gmail.com', 'lorem', 503, '25769012', 'San Salvador', 'A'),
(3, 2, 'Cliente', '12345', 'cliente@gmail.com', 'Cliente x', 503, '78956320', 'S.S', 'A'),
(4, 2, 'tomas', 'Turbina1', 'tu@tu.com', 'urbina', 503, '22224444', 'utec', 'A'),
(5, 2, 'Mathew ', '123456789', 'mathewbrown2000@gmail.com', 'Brown', 90001, '792920668', 'Barcelona, España', 'A');

--
-- Índices para tablas volcadas
--

--
-- Indices de la tabla `cliente`
--
ALTER TABLE `cliente`
  ADD PRIMARY KEY (`id_cliente`);

--
-- Indices de la tabla `contacto`
--
ALTER TABLE `contacto`
  ADD PRIMARY KEY (`id_contacto`);

--
-- Indices de la tabla `detallepago`
--
ALTER TABLE `detallepago`
  ADD PRIMARY KEY (`id`);

--
-- Indices de la tabla `encuesta`
--
ALTER TABLE `encuesta`
  ADD PRIMARY KEY (`id_encuesta`);

--
-- Indices de la tabla `nuevosproductos`
--
ALTER TABLE `nuevosproductos`
  ADD PRIMARY KEY (`id_Nproducto`);

--
-- Indices de la tabla `pago`
--
ALTER TABLE `pago`
  ADD PRIMARY KEY (`id`);
  
--
-- Indices de la tabla `productos`
--
ALTER TABLE `productos`
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
-- AUTO_INCREMENT de la tabla `cliente`
--
ALTER TABLE `cliente`
  MODIFY `id_cliente` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT de la tabla `contacto`
--
ALTER TABLE `contacto`
  MODIFY `id_contacto` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT de la tabla `detallepago`
--
ALTER TABLE `detallepago`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT de la tabla `encuesta`
--
ALTER TABLE `encuesta`
  MODIFY `id_encuesta` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT de la tabla `nuevosproductos`
--
ALTER TABLE `nuevosproductos`
  MODIFY `id_Nproducto` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT de la tabla `pago`
--
ALTER TABLE `pago`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT de la tabla `productos`
--
ALTER TABLE `productos`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
