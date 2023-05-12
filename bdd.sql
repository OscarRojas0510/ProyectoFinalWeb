-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Servidor: 127.0.0.1
-- Tiempo de generación: 12-05-2023 a las 04:39:24
-- Versión del servidor: 10.4.27-MariaDB
-- Versión de PHP: 8.2.0

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de datos: `equipo_1`
--

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `detalle_venta`
--

CREATE TABLE `detalle_venta` (
  `id_det_venta` int(5) NOT NULL,
  `id_venta` int(5) NOT NULL,
  `id_producto` int(5) NOT NULL,
  `cantidad` int(5) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `direccion`
--

CREATE TABLE `direccion` (
  `id_direccion` int(5) NOT NULL,
  `id_usuario` int(5) NOT NULL,
  `colonia` varchar(50) CHARACTER SET utf8 COLLATE utf8_general_ci NOT NULL,
  `calle` varchar(50) CHARACTER SET utf8 COLLATE utf8_general_ci NOT NULL,
  `num_interior` int(5) DEFAULT NULL,
  `num_exterior` int(5) NOT NULL,
  `cp` int(5) NOT NULL,
  `referencia` varchar(120) CHARACTER SET utf8 COLLATE utf8_general_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Volcado de datos para la tabla `direccion`
--

INSERT INTO `direccion` (`id_direccion`, `id_usuario`, `colonia`, `calle`, `num_interior`, `num_exterior`, `cp`, `referencia`) VALUES
(1, 1, 'Los Angeles', 'Av Herocio Colegio Militar', 0, 250, 50020, 'Frente a la primaria General Vicente Guerrero');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `entidad_federativa`
--

CREATE TABLE `entidad_federativa` (
  `id_entidad` int(5) NOT NULL,
  `nombre_entidad` varchar(50) CHARACTER SET utf8 COLLATE utf8_general_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `producto`
--

CREATE TABLE `producto` (
  `id_producto` int(5) NOT NULL,
  `nombre` varchar(50) CHARACTER SET utf8 COLLATE utf8_general_ci NOT NULL,
  `descripcion` varchar(100) CHARACTER SET utf8 COLLATE utf8_general_ci NOT NULL,
  `id_entidad_federativa` int(5) NOT NULL,
  `precio` int(5) NOT NULL,
  `existencia` int(5) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `tipo_pago`
--

CREATE TABLE `tipo_pago` (
  `id_tipo_pago` int(5) NOT NULL,
  `nombre_metodo` varchar(50) CHARACTER SET utf8 COLLATE utf8_general_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `usuario`
--

CREATE TABLE `usuario` (
  `id_usuario` int(5) NOT NULL,
  `nombre` varchar(50) CHARACTER SET utf8 COLLATE utf8_general_ci NOT NULL,
  `a_pat` varchar(50) CHARACTER SET utf8 COLLATE utf8_general_ci NOT NULL,
  `a_mat` varchar(50) CHARACTER SET utf8 COLLATE utf8_general_ci NOT NULL,
  `fecha_nacimiento` date NOT NULL,
  `correo` varchar(50) CHARACTER SET utf8 COLLATE utf8_general_ci NOT NULL,
  `contraseña` varchar(16) CHARACTER SET utf8 COLLATE utf8_general_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Volcado de datos para la tabla `usuario`
--

INSERT INTO `usuario` (`id_usuario`, `nombre`, `a_pat`, `a_mat`, `fecha_nacimiento`, `correo`, `contraseña`) VALUES
(1, 'Pedro Abdiel', 'Alcantara', 'Soto', '2001-01-27', 'pedroabdiel27@gmail.com', '010127PaaS##');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `venta`
--

CREATE TABLE `venta` (
  `id_venta` int(5) NOT NULL,
  `id_usuario` int(5) NOT NULL,
  `id_tipo_pago` int(5) NOT NULL,
  `subtotal` int(6) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Índices para tablas volcadas
--

--
-- Indices de la tabla `detalle_venta`
--
ALTER TABLE `detalle_venta`
  ADD PRIMARY KEY (`id_det_venta`),
  ADD KEY `detalle_venta_id_venta_fk` (`id_venta`),
  ADD KEY `detalle_venta_id_producto_fk` (`id_producto`);

--
-- Indices de la tabla `direccion`
--
ALTER TABLE `direccion`
  ADD PRIMARY KEY (`id_direccion`),
  ADD KEY `direccion_id_usuario_fk` (`id_usuario`);

--
-- Indices de la tabla `entidad_federativa`
--
ALTER TABLE `entidad_federativa`
  ADD PRIMARY KEY (`id_entidad`);

--
-- Indices de la tabla `producto`
--
ALTER TABLE `producto`
  ADD PRIMARY KEY (`id_producto`),
  ADD KEY `producto_id_entidad_fk` (`id_entidad_federativa`);

--
-- Indices de la tabla `tipo_pago`
--
ALTER TABLE `tipo_pago`
  ADD PRIMARY KEY (`id_tipo_pago`);

--
-- Indices de la tabla `usuario`
--
ALTER TABLE `usuario`
  ADD PRIMARY KEY (`id_usuario`),
  ADD UNIQUE KEY `correo` (`correo`);

--
-- Indices de la tabla `venta`
--
ALTER TABLE `venta`
  ADD PRIMARY KEY (`id_venta`),
  ADD KEY `venta_id_usuario_fk` (`id_usuario`),
  ADD KEY `venta_id_tipo_pago_fk` (`id_tipo_pago`);

--
-- Restricciones para tablas volcadas
--

--
-- Filtros para la tabla `detalle_venta`
--
ALTER TABLE `detalle_venta`
  ADD CONSTRAINT `detalle_venta_id_producto_fk` FOREIGN KEY (`id_producto`) REFERENCES `producto` (`id_producto`),
  ADD CONSTRAINT `detalle_venta_id_venta_fk` FOREIGN KEY (`id_venta`) REFERENCES `venta` (`id_venta`);

--
-- Filtros para la tabla `direccion`
--
ALTER TABLE `direccion`
  ADD CONSTRAINT `direccion_id_usuario_fk` FOREIGN KEY (`id_usuario`) REFERENCES `usuario` (`id_usuario`);

--
-- Filtros para la tabla `producto`
--
ALTER TABLE `producto`
  ADD CONSTRAINT `producto_id_entidad_fk` FOREIGN KEY (`id_entidad_federativa`) REFERENCES `entidad_federativa` (`id_entidad`);

--
-- Filtros para la tabla `venta`
--
ALTER TABLE `venta`
  ADD CONSTRAINT `venta_id_tipo_pago_fk` FOREIGN KEY (`id_tipo_pago`) REFERENCES `tipo_pago` (`id_tipo_pago`),
  ADD CONSTRAINT `venta_id_usuario_fk` FOREIGN KEY (`id_usuario`) REFERENCES `usuario` (`id_usuario`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
