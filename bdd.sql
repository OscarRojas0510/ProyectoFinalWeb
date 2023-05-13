-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Servidor: 127.0.0.1
-- Tiempo de generación: 13-05-2023 a las 04:29:38
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

--
-- Volcado de datos para la tabla `entidad_federativa`
--

INSERT INTO `entidad_federativa` (`id_entidad`, `nombre_entidad`) VALUES
(1, 'Guerrero'),
(2, 'San Luis Potosí'),
(3, 'Chihuahua'),
(4, 'Nayarit'),
(5, 'Chiapas'),
(6, 'Oaxaca'),
(7, 'Querétaro');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `producto`
--

CREATE TABLE `producto` (
  `id_producto` int(5) NOT NULL,
  `nombre` varchar(50) CHARACTER SET utf8 COLLATE utf8_general_ci NOT NULL,
  `descripcion` varchar(500) CHARACTER SET utf8 COLLATE utf8_general_ci NOT NULL,
  `id_entidad_federativa` int(5) NOT NULL,
  `precio` int(5) NOT NULL,
  `existencia` int(5) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Volcado de datos para la tabla `producto`
--

INSERT INTO `producto` (`id_producto`, `nombre`, `descripcion`, `id_entidad_federativa`, `precio`, `existencia`) VALUES
(1, 'Muñeca de Tusa', 'Colorida muñeca elaborada de las hojas de las mazorcas de maíz, y teñida a base de tintes naturales.', 1, 540, 100),
(2, 'Muñeca Artesanal Zompeltepec', 'Muñeca de trapo realizada por artesanas Guerrerenses con movilidad en manos y pies.', 1, 600, 100),
(3, 'Muñeca Artesanal Mixteca', 'Muñeca fabricada en telar o telas de algodón.', 1, 500, 100),
(4, 'Muñeca Pame', 'Muñeca elaborada con palma y sus cabellos están hechos de pelos de elote.', 2, 250, 80),
(5, 'Muñeca Huasteca', 'Muñeca elaborada con tela, parecida a una jerga delgada, la cual puede variar en tonalidades.', 2, 300, 75),
(6, 'Muñeca Frida Kahlo', 'Muñeca elaborada de Tela y Estambre.', 2, 300, 60),
(7, 'Muñeca María', '', 3, 420, 80),
(8, 'Muñeca Tarahumara', 'Elaborada con madera tallada y vestidas con el traje típico de los Rarámuri.', 3, 450, 60),
(9, 'Muñeca Lupita', 'Muñeca elaborada a base de papel maché hecho masa, engrudo y pintadas a mano con pintura vinílica.', 4, 400, 55),
(10, 'Muñeca Huichol', 'Muñeca elaborada de plástico que posee la vestimenta colorida típica Huichol.', 4, 500, 50),
(11, 'Muñeca Chiapaneca', 'Muñeca elaborada con tela rellena de algodón con detalles en las costuras.', 5, 360, 70),
(12, 'Muñeca Tzotzil', 'Muñeca elaborada de tela modelada en arcilla, tallado en madera o cartón, o con alma de alambre.', 5, 450, 60),
(13, 'Muñeca Tzotzil', 'Muñeca elaborada de lana, algodón recortado y cosido a mano.', 5, 400, 50),
(14, 'Muñeca Comadre', 'Muñeca de trapo hecha artesanalmente, llenas de corazón, raíces y cultura del pueblo Mixe.', 6, 440, 70),
(15, 'Muñeca Quialanita', 'Muñeca de tela que posee la vestimenta tradicional Quialanense.', 6, 400, 80),
(16, 'Muñeca Malacatera', 'Muñeca de tela que vestimenta y el colorido de cada etnia.', 6, 370, 60),
(17, 'Muñeca  Dönxu', 'Muñeca elaborada artesanalmente que rinde homenaje a la mujer indígena.', 7, 420, 90),
(18, 'Muñeca Lupita ', 'Muñeca elaborada a mano que porta el traje típico emulando vestuario con el que se baila huapango.', 7, 450, 80),
(19, 'Muñeca Lele', 'Muñeca de tela que porta largas trenzas, con coronas y lazos de colores, así como su vestido tradicional.', 7, 450, 70);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `tipo_pago`
--

CREATE TABLE `tipo_pago` (
  `id_tipo_pago` int(5) NOT NULL,
  `nombre_metodo` varchar(50) CHARACTER SET utf8 COLLATE utf8_general_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Volcado de datos para la tabla `tipo_pago`
--

INSERT INTO `tipo_pago` (`id_tipo_pago`, `nombre_metodo`) VALUES
(1, 'Efectivo'),
(2, 'Tarjeta Débito'),
(3, 'Tarjeta Crédito'),
(4, 'Efectivo en puntos de pago');

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
