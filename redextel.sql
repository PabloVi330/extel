-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Servidor: 127.0.0.1
-- Tiempo de generación: 18-12-2023 a las 13:13:09
-- Versión del servidor: 10.4.28-MariaDB
-- Versión de PHP: 8.0.28

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de datos: `redextel`
--

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `articulo`
--

CREATE TABLE `articulo` (
  `id_articulo` int(11) NOT NULL,
  `codigo_A` varchar(30) DEFAULT NULL,
  `fk_id_sucursal` int(11) NOT NULL,
  `fk_id_categoria` int(11) NOT NULL,
  `fk_id_usuario` int(11) NOT NULL,
  `fk_id_marca` int(11) DEFAULT NULL,
  `descripcion_A` varchar(200) NOT NULL,
  `fecha_A` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp(),
  `stock_A` int(3) NOT NULL,
  `cantidad_A` int(5) NOT NULL,
  `unimed_A` varchar(10) NOT NULL,
  `precio_neto_A` float NOT NULL,
  `precio_distribucion_A` float NOT NULL,
  `precio_tecnico_A` float NOT NULL,
  `precio_publico_A` float NOT NULL,
  `precio_fact_A` float NOT NULL,
  `estado_A` int(1) NOT NULL,
  `imagenes_A` varchar(60) NOT NULL,
  `update_A` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Volcado de datos para la tabla `articulo`
--

INSERT INTO `articulo` (`id_articulo`, `codigo_A`, `fk_id_sucursal`, `fk_id_categoria`, `fk_id_usuario`, `fk_id_marca`, `descripcion_A`, `fecha_A`, `stock_A`, `cantidad_A`, `unimed_A`, `precio_neto_A`, `precio_distribucion_A`, `precio_tecnico_A`, `precio_publico_A`, `precio_fact_A`, `estado_A`, `imagenes_A`, `update_A`) VALUES
(293, 'ghjghjghj', 1, 17, 2, 10, 'ghjghj', '2023-12-18 06:08:32', 49, 1, '55', 30, 31.5, 33, 34.5, 5552, 1, '[\"1ghjghjghj.png\"]', '0000-00-00'),
(294, 'aqsasa', 1, 17, 2, 10, 'asdasdasd', '2023-12-18 02:49:11', 337, 1, '33', 20, 21, 22, 23, 33, 1, '[\"1aqsasa.png\"]', '0000-00-00'),
(295, '2323423', 1, 17, 2, 10, 'asdasda', '2023-12-18 02:49:16', 3, 1, '3', 4, 5, 5, 5, 5, 1, '[\"12323423.png\"]', '0000-00-00'),
(296, 'sdasd', 1, 17, 2, 10, 'eqweqwe', '2023-12-18 02:49:19', 90, 1, '88', 20, 21, 22, 23, 888, 1, '[\"1sdasd.png\"]', '0000-00-00'),
(297, '2323423dfs', 1, 17, 2, 10, '-CÃ¡mara domo 1MP -Max. 30fps@720P -HD and SD output switchable -Distancia focal 2.8mm fixed lens -Distancia de IR length 20m, Smart IR -IP67 -DC12V', '2023-12-18 02:47:39', 36, 1, '44', 10, 10.5, 11, 11.5, 44, 1, '[\"12323423dfs.png\"]', '0000-00-00'),
(298, 'ghjghjghj', 2, 17, 2, 10, 'ghjghj', '2023-12-18 03:00:20', 2, 1, '55', 30, 31.5, 33, 34.5, 5552, 1, '[\"1ghjghjghj.png\"]', '0000-00-00');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `categoria`
--

CREATE TABLE `categoria` (
  `id_categoria` int(11) NOT NULL,
  `nombre_C` varchar(30) NOT NULL,
  `estado_C` int(1) NOT NULL,
  `fecha_C` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Volcado de datos para la tabla `categoria`
--

INSERT INTO `categoria` (`id_categoria`, `nombre_C`, `estado_C`, `fecha_C`) VALUES
(17, 'REDES', 1, '0000-00-00');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `clientes`
--

CREATE TABLE `clientes` (
  `id_cliente` int(11) NOT NULL,
  `ci_Cl` int(10) NOT NULL,
  `nombre_Cl` varchar(40) NOT NULL,
  `clasificacion_Cl` varchar(50) NOT NULL,
  `direccion_Cl` varchar(50) NOT NULL,
  `telefono_Cl` int(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Volcado de datos para la tabla `clientes`
--

INSERT INTO `clientes` (`id_cliente`, `ci_Cl`, `nombre_Cl`, `clasificacion_Cl`, `direccion_Cl`, `telefono_Cl`) VALUES
(22, 222, 'ariel', 'TECNICO', 'SASD', 2147483647),
(23, 0, 'selso', 'DISTRIBUCION', 'wedqwe', 333);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `compras`
--

CREATE TABLE `compras` (
  `id_compra` int(11) NOT NULL,
  `fk_id_sucursal` int(11) NOT NULL,
  `fk_id_usuario` int(11) NOT NULL,
  `proveedor_C` varchar(50) NOT NULL,
  `fecha_C` date NOT NULL,
  `detalle_C` text NOT NULL,
  `costo_C` float NOT NULL,
  `comprobate_C` varchar(20) NOT NULL,
  `impreso_C` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Volcado de datos para la tabla `compras`
--

INSERT INTO `compras` (`id_compra`, `fk_id_sucursal`, `fk_id_usuario`, `proveedor_C`, `fecha_C`, `detalle_C`, `costo_C`, `comprobate_C`, `impreso_C`) VALUES
(42, 2, 2, '', '0000-00-00', '[]', 0, '', 0),
(43, 2, 2, 'casdasd', '2023-12-14', '[{\"id\":\"293\",\"codigo\":\"ghjghjghj\",\"descripcion\":\"ghjghj\",\"precio_neto\":20,\"precio_distribucion\":21,\"precio_tecnico\":22,\"precio_publico\":23,\"stock\":\"55\",\"cantidad\":1,\"subtotal\":20,\"cantidad_compra\":1,\"unimed\":\"55\"},{\"id\":\"294\",\"codigo\":\"aqsasa\",\"descripcion\":\"asdasdasd\",\"precio_neto\":10,\"precio_distribucion\":10.5,\"precio_tecnico\":11,\"precio_publico\":11.5,\"stock\":\"333\",\"cantidad\":1,\"subtotal\":10,\"cantidad_compra\":1,\"unimed\":\"33\"}]', 30, '', 0),
(44, 2, 2, 'ASSSDFSDF', '2023-12-28', '[{\"id\":\"293\",\"codigo\":\"ghjghjghj\",\"descripcion\":\"ghjghj\",\"precio_neto\":30,\"precio_distribucion\":31.5,\"precio_tecnico\":33,\"precio_publico\":34.5,\"stock\":\"56\",\"cantidad\":1,\"subtotal\":30,\"cantidad_compra\":1,\"unimed\":\"55\"},{\"id\":\"294\",\"codigo\":\"aqsasa\",\"descripcion\":\"asdasdasd\",\"precio_neto\":20,\"precio_distribucion\":21,\"precio_tecnico\":22,\"precio_publico\":23,\"stock\":\"334\",\"cantidad\":1,\"subtotal\":20,\"cantidad_compra\":1,\"unimed\":\"33\"}]', 50, '', 1),
(45, 2, 2, '', '0000-00-00', '[{\"id\":\"293\",\"codigo\":\"ghjghjghj\",\"descripcion\":\"ghjghj\",\"precio_neto\":30,\"precio_distribucion\":31.5,\"precio_tecnico\":33,\"precio_publico\":34.5,\"stock\":\"57\",\"cantidad\":1,\"subtotal\":60,\"cantidad_compra\":2,\"unimed\":\"55\"},{\"id\":\"294\",\"codigo\":\"aqsasa\",\"descripcion\":\"asdasdasd\",\"precio_neto\":20,\"precio_distribucion\":21,\"precio_tecnico\":22,\"precio_publico\":23,\"stock\":\"335\",\"cantidad\":1,\"subtotal\":40,\"cantidad_compra\":2,\"unimed\":\"33\"}]', 100, '', 6);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `copias`
--

CREATE TABLE `copias` (
  `id_copia` int(11) NOT NULL,
  `fk_id_sucursal` int(11) NOT NULL,
  `fk_id_maquina` int(11) NOT NULL,
  `fk_id_usuario` int(11) NOT NULL,
  `fk_id_cliente` int(11) NOT NULL,
  `tipo` varchar(15) NOT NULL,
  `vales` int(10) NOT NULL,
  `sobrantes` int(5) DEFAULT NULL,
  `copias` int(10) NOT NULL,
  `precio` float NOT NULL,
  `codigo` int(5) DEFAULT NULL,
  `nombre_cliente` varchar(40) NOT NULL,
  `sub_total` float NOT NULL,
  `fecha` date NOT NULL,
  `tipo_pago` varchar(5) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `envios`
--

CREATE TABLE `envios` (
  `id_envio` int(5) NOT NULL,
  `fk_id_sucursal` int(11) NOT NULL,
  `fk_id_usuario` int(11) NOT NULL,
  `fecha_E` date NOT NULL,
  `responsable_E` varchar(30) NOT NULL,
  `detalle_E` text NOT NULL,
  `tipo_E` varchar(10) NOT NULL,
  `total_E` float NOT NULL,
  `impreso_E` int(1) NOT NULL,
  `estado_E` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Volcado de datos para la tabla `envios`
--

INSERT INTO `envios` (`id_envio`, `fk_id_sucursal`, `fk_id_usuario`, `fecha_E`, `responsable_E`, `detalle_E`, `tipo_E`, `total_E`, `impreso_E`, `estado_E`) VALUES
(29, 2, 2, '2023-11-30', 'uiiuy', '[{\"id\":\"293\",\"codigo\":\"ghjghjghj\",\"descripcion\":\"ghjghj\",\"precio_neto\":\"30\",\"precio_distribucion\":\"31.5\",\"precio_tecnico\":\"33\",\"precio_publico\":\"34.5\",\"stock\":\"59\",\"cantidad\":1,\"subtotal\":\"30\",\"cantidad_envio\":1,\"unimed\":\"55\"}]', '1', 30, 0, 0),
(30, 2, 2, '2023-11-30', 'uiiuy', '[{\"id\":\"293\",\"codigo\":\"ghjghjghj\",\"descripcion\":\"ghjghj\",\"precio_neto\":\"30\",\"precio_distribucion\":\"31.5\",\"precio_tecnico\":\"33\",\"precio_publico\":\"34.5\",\"stock\":\"59\",\"cantidad\":1,\"subtotal\":\"30\",\"cantidad_envio\":1,\"unimed\":\"55\"}]', '1', 30, 0, 0),
(31, 2, 2, '2023-12-16', 'IOU', '[{\"id\":\"293\",\"codigo\":\"ghjghjghj\",\"descripcion\":\"ghjghj\",\"precio_neto\":\"30\",\"precio_distribucion\":\"31.5\",\"precio_tecnico\":\"33\",\"precio_publico\":\"34.5\",\"stock\":\"58\",\"cantidad\":1,\"subtotal\":\"30\",\"cantidad_envio\":1,\"unimed\":\"55\"}]', '1', 30, 0, 0),
(32, 2, 2, '2023-12-20', 'CZXC', '[{\"id\":\"293\",\"codigo\":\"ghjghjghj\",\"descripcion\":\"ghjghj\",\"precio_neto\":\"30\",\"precio_distribucion\":\"31.5\",\"precio_tecnico\":\"33\",\"precio_publico\":\"34.5\",\"stock\":\"57\",\"cantidad\":1,\"subtotal\":\"30\",\"cantidad_envio\":1,\"unimed\":\"55\"}]', '1', 30, 0, 0),
(33, 2, 2, '2023-12-20', 'CZXC', '[{\"id\":\"293\",\"codigo\":\"ghjghjghj\",\"descripcion\":\"ghjghj\",\"precio_neto\":\"30\",\"precio_distribucion\":\"31.5\",\"precio_tecnico\":\"33\",\"precio_publico\":\"34.5\",\"stock\":\"57\",\"cantidad\":1,\"subtotal\":\"30\",\"cantidad_envio\":1,\"unimed\":\"55\"}]', '1', 30, 0, 0),
(34, 2, 2, '2023-12-20', 'CZXC', '[{\"id\":\"293\",\"codigo\":\"ghjghjghj\",\"descripcion\":\"ghjghj\",\"precio_neto\":\"30\",\"precio_distribucion\":\"31.5\",\"precio_tecnico\":\"33\",\"precio_publico\":\"34.5\",\"stock\":\"57\",\"cantidad\":1,\"subtotal\":\"30\",\"cantidad_envio\":1,\"unimed\":\"55\"}]', '1', 30, 0, 0),
(35, 2, 2, '2023-12-20', 'CZXC', '[{\"id\":\"293\",\"codigo\":\"ghjghjghj\",\"descripcion\":\"ghjghj\",\"precio_neto\":\"30\",\"precio_distribucion\":\"31.5\",\"precio_tecnico\":\"33\",\"precio_publico\":\"34.5\",\"stock\":\"57\",\"cantidad\":1,\"subtotal\":\"30\",\"cantidad_envio\":1,\"unimed\":\"55\"}]', '1', 30, 0, 0),
(36, 2, 2, '2023-12-20', 'CZXC', '[{\"id\":\"293\",\"codigo\":\"ghjghjghj\",\"descripcion\":\"ghjghj\",\"precio_neto\":\"30\",\"precio_distribucion\":\"31.5\",\"precio_tecnico\":\"33\",\"precio_publico\":\"34.5\",\"stock\":\"57\",\"cantidad\":1,\"subtotal\":\"30\",\"cantidad_envio\":1,\"unimed\":\"55\"}]', '1', 30, 0, 0);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `marcas`
--

CREATE TABLE `marcas` (
  `id_marca` int(11) NOT NULL,
  `nombre_marca` varchar(50) NOT NULL,
  `foto_marca` varchar(60) NOT NULL,
  `column_4` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Volcado de datos para la tabla `marcas`
--

INSERT INTO `marcas` (`id_marca`, `nombre_marca`, `foto_marca`, `column_4`) VALUES
(10, 'DIMAX', '[]', 0);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `sucursal`
--

CREATE TABLE `sucursal` (
  `id_sucursal` int(11) NOT NULL,
  `nombreS` varchar(30) NOT NULL,
  `direccion_S` varchar(50) NOT NULL,
  `estado_S` int(1) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Volcado de datos para la tabla `sucursal`
--

INSERT INTO `sucursal` (`id_sucursal`, `nombreS`, `direccion_S`, `estado_S`) VALUES
(1, 'CASA MATRIZ', 'AAA', 1),
(2, 'suc1', 'lkok', 1);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `usuario`
--

CREATE TABLE `usuario` (
  `id_usuario` int(11) NOT NULL,
  `fk_id_sucursal` int(11) NOT NULL,
  `usuario_U` varchar(30) NOT NULL,
  `password_U` varchar(20) NOT NULL,
  `nombre_U` varchar(50) NOT NULL,
  `ci_U` int(8) NOT NULL,
  `area_U` varchar(30) NOT NULL,
  `tipo_U` varchar(30) NOT NULL,
  `correo_U` varchar(50) NOT NULL,
  `telefono_U` int(8) NOT NULL,
  `estado_U` int(1) NOT NULL DEFAULT 1,
  `fecha_U` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp(),
  `foto_U` varchar(40) NOT NULL,
  `update_U` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Volcado de datos para la tabla `usuario`
--

INSERT INTO `usuario` (`id_usuario`, `fk_id_sucursal`, `usuario_U`, `password_U`, `nombre_U`, `ci_U`, `area_U`, `tipo_U`, `correo_U`, `telefono_U`, `estado_U`, `fecha_U`, `foto_U`, `update_U`) VALUES
(1, 1, 'admin', 'admin', 'admin', 1234567, 'administrador', '1', 'admin', 12345678, 1, '2023-10-18 15:24:16', '[\"usuario.jpg\"]', '0000-00-00'),
(2, 1, 'ALMACEN', 'CENTRAL', 'ALMACEN', 12345, 'administrador', '1', 'ALMAAAA', 12345678, 1, '2023-12-18 02:48:35', '[\"123450.png\"]', '0000-00-00'),
(3, 3, 'CENTRAL', 'SUCURSAL', 'CENTRAL', 13243566, 'supervisor', '1', 'CENNNNN', 12345, 1, '2023-10-18 15:24:47', '[\"usuario.jpg\"]', '0000-00-00'),
(12, 5, 'ESTHER', 'ESTHER', 'ESTHER NAVIA', 3513, 'operador', '3', 'ESTEEEEE', 72462260, 1, '2023-10-19 01:50:20', '[\"usuario.jpg\"]', '0000-00-00'),
(14, 7, 'EDWIN', 'EDWIN', 'EDWIN', 12345, 'tecnico', '1', '1212122', 4785478, 1, '2023-12-04 10:56:05', '[\"usuario.jpg\"]', '0000-00-00'),
(16, 4, 'CARMEN', 'CARMEN', 'CARMEN TOLA', 12488591, 'supervisor', '1', 'CARRR', 74103043, 1, '2023-12-04 06:13:02', '[\"usuario.jpg\"]', '0000-00-00'),
(17, 13, 'MARIELA', 'MARIELA', 'MARIELA ZURITA', 14101214, 'tecnico', '1', 'MARIIII', 76150699, 1, '2023-12-04 06:58:16', '[\"usuario.jpg\"]', '0000-00-00');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `ventas`
--

CREATE TABLE `ventas` (
  `id_venta` int(11) NOT NULL,
  `fk_id_sucursal` int(11) NOT NULL,
  `fk_id_mantenimiento` int(11) DEFAULT NULL,
  `fk_id_usuario` int(11) NOT NULL,
  `fk_id_cliente` int(4) NOT NULL,
  `fecha_V` date NOT NULL,
  `detalle_V` text NOT NULL,
  `importe_V` float NOT NULL,
  `numero_factura_V` int(15) NOT NULL,
  `nit_V` int(15) NOT NULL,
  `nit_cliente_V` int(15) NOT NULL,
  `numero_autorizacion_V` int(15) NOT NULL,
  `fecha_limite_V` date NOT NULL,
  `control_V` int(15) NOT NULL,
  `qrfoto_V` varchar(40) NOT NULL,
  `leyenda_V` varchar(40) NOT NULL,
  `facturado_V` int(1) NOT NULL,
  `tipo_V` int(11) NOT NULL,
  `estado_V` varchar(19) NOT NULL,
  `monto_V` float NOT NULL,
  `impreso_V` int(11) NOT NULL DEFAULT 0
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Volcado de datos para la tabla `ventas`
--

INSERT INTO `ventas` (`id_venta`, `fk_id_sucursal`, `fk_id_mantenimiento`, `fk_id_usuario`, `fk_id_cliente`, `fecha_V`, `detalle_V`, `importe_V`, `numero_factura_V`, `nit_V`, `nit_cliente_V`, `numero_autorizacion_V`, `fecha_limite_V`, `control_V`, `qrfoto_V`, `leyenda_V`, `facturado_V`, `tipo_V`, `estado_V`, `monto_V`, `impreso_V`) VALUES
(3, 1, NULL, 2, 22, '2023-11-30', '[{\"id_articulo\":\"293\",\"codigo_A\":\"ghjghjghj\",\"descripcion_A\":\"ghjghj\",\"precio_neto_A\":\"30\",\"precio_distribucion_A\":\"31.5\",\"precio_tecnico_A\":\"33\",\"precio_publico_A\":\"34.5\",\"cantidad_A\":\"1\",\"stock_A\":\"52\",\"precio_venta\":33,\"precio_facturado\":37.29,\"cantidad_venta\":2,\"sub_total\":66,\"sub_total_facturado\":74.58}]', 74.58, 0, 0, 0, 0, '0000-00-00', 0, '', '', 1, 1, 'CANCELADO', 0, 6),
(4, 1, NULL, 2, 22, '2023-12-13', '[{\"id_articulo\":\"293\",\"codigo_A\":\"ghjghjghj\",\"descripcion_A\":\"ghjghj\",\"precio_neto_A\":\"30\",\"precio_distribucion_A\":\"31.5\",\"precio_tecnico_A\":\"33\",\"precio_publico_A\":\"34.5\",\"cantidad_A\":\"1\",\"stock_A\":\"50\",\"precio_venta\":33,\"precio_facturado\":37.29,\"cantidad_venta\":1,\"sub_total\":33,\"sub_total_facturado\":37.29}]', 33, 0, 0, 0, 0, '0000-00-00', 0, '', '', 0, 1, 'CANCELADO', 0, 1);

--
-- Índices para tablas volcadas
--

--
-- Indices de la tabla `articulo`
--
ALTER TABLE `articulo`
  ADD PRIMARY KEY (`id_articulo`),
  ADD KEY `articulo_fk_id_sucursal_sucursal_id_sucursal` (`fk_id_sucursal`),
  ADD KEY `articulo_fk_id_categoria_categoria_id_categoria` (`fk_id_categoria`),
  ADD KEY `articulo_fk_id_usuario_usuario_id_usuario` (`fk_id_usuario`),
  ADD KEY `articulo_fk_id_marca_marcas_id_marca` (`fk_id_marca`);

--
-- Indices de la tabla `categoria`
--
ALTER TABLE `categoria`
  ADD PRIMARY KEY (`id_categoria`);

--
-- Indices de la tabla `clientes`
--
ALTER TABLE `clientes`
  ADD PRIMARY KEY (`id_cliente`);

--
-- Indices de la tabla `compras`
--
ALTER TABLE `compras`
  ADD PRIMARY KEY (`id_compra`),
  ADD KEY `compras_fk_id_sucursal_sucursal_id_sucursal` (`fk_id_sucursal`),
  ADD KEY `compras_fk_id_usuario_usuario_id_usuario` (`fk_id_usuario`);

--
-- Indices de la tabla `envios`
--
ALTER TABLE `envios`
  ADD PRIMARY KEY (`id_envio`),
  ADD KEY `envios_fk_id_sucursal_sucursal_id_sucursal` (`fk_id_sucursal`),
  ADD KEY `envios_fk_id_usuario_usuario_id_usuario` (`fk_id_usuario`);

--
-- Indices de la tabla `marcas`
--
ALTER TABLE `marcas`
  ADD PRIMARY KEY (`id_marca`),
  ADD UNIQUE KEY `nombre_marca` (`nombre_marca`);

--
-- Indices de la tabla `sucursal`
--
ALTER TABLE `sucursal`
  ADD PRIMARY KEY (`id_sucursal`),
  ADD UNIQUE KEY `nombreS` (`nombreS`),
  ADD UNIQUE KEY `direccion_S` (`direccion_S`);

--
-- Indices de la tabla `usuario`
--
ALTER TABLE `usuario`
  ADD PRIMARY KEY (`id_usuario`),
  ADD UNIQUE KEY `usuario_U` (`usuario_U`),
  ADD UNIQUE KEY `password_U` (`password_U`),
  ADD KEY `usuario_fk_id_sucursal_sucursal_id_sucursal` (`fk_id_sucursal`);

--
-- Indices de la tabla `ventas`
--
ALTER TABLE `ventas`
  ADD PRIMARY KEY (`id_venta`),
  ADD KEY `ventas_fk_id_sucursal_sucursal_id_sucursal` (`fk_id_sucursal`),
  ADD KEY `ventas_fk_id_mantenimiento_mantenimientos_id_mantenimiento` (`fk_id_mantenimiento`),
  ADD KEY `ventas_fk_id_usuario_usuario_id_usuario` (`fk_id_usuario`);

--
-- AUTO_INCREMENT de las tablas volcadas
--

--
-- AUTO_INCREMENT de la tabla `articulo`
--
ALTER TABLE `articulo`
  MODIFY `id_articulo` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=299;

--
-- AUTO_INCREMENT de la tabla `categoria`
--
ALTER TABLE `categoria`
  MODIFY `id_categoria` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=18;

--
-- AUTO_INCREMENT de la tabla `clientes`
--
ALTER TABLE `clientes`
  MODIFY `id_cliente` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=24;

--
-- AUTO_INCREMENT de la tabla `compras`
--
ALTER TABLE `compras`
  MODIFY `id_compra` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=46;

--
-- AUTO_INCREMENT de la tabla `envios`
--
ALTER TABLE `envios`
  MODIFY `id_envio` int(5) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=37;

--
-- AUTO_INCREMENT de la tabla `marcas`
--
ALTER TABLE `marcas`
  MODIFY `id_marca` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;

--
-- AUTO_INCREMENT de la tabla `sucursal`
--
ALTER TABLE `sucursal`
  MODIFY `id_sucursal` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT de la tabla `ventas`
--
ALTER TABLE `ventas`
  MODIFY `id_venta` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
