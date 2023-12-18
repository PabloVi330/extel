-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Servidor: 127.0.0.1
-- Tiempo de generación: 11-10-2023 a las 14:07:30
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
-- Base de datos: `fotoco`
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
  `compatibilidad_A` varchar(60) DEFAULT NULL,
  `fecha_A` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp(),
  `stock_A` int(3) NOT NULL,
  `cantidad_A` int(5) NOT NULL,
  `unimed_A` varchar(10) NOT NULL,
  `modelo_A` varchar(30) NOT NULL,
  `calidad_A` varchar(20) NOT NULL,
  `precio_neto_A` float NOT NULL,
  `precio_venta_A` float NOT NULL,
  `estado_A` int(1) NOT NULL,
  `imagenes_A` varchar(60) NOT NULL,
  `tipo_A` varchar(10) NOT NULL,
  `update_A` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Volcado de datos para la tabla `articulo`
--

INSERT INTO `articulo` (`id_articulo`, `codigo_A`, `fk_id_sucursal`, `fk_id_categoria`, `fk_id_usuario`, `fk_id_marca`, `descripcion_A`, `compatibilidad_A`, `fecha_A`, `stock_A`, `cantidad_A`, `unimed_A`, `modelo_A`, `calidad_A`, `precio_neto_A`, `precio_venta_A`, `estado_A`, `imagenes_A`, `tipo_A`, `update_A`) VALUES
(1, '1234', 1, 1, 1, 1, 'SIN nada de descripcion', '350/350/345', '2023-10-11 05:19:45', 150, 10, 'BOL', '350', 'Original', 100, 200, 1, '[\"11234.png\"]', 'Articulo', '0000-00-00');

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
(1, 'SIN CATEGORIA', 1, '0000-00-00');

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
(1, 1234567, 'SIN NOMBRE', 'SIN CLASIFICACION', 'SIN DIRECCIION', 12345678);

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
(1, 1, 1, 'sdasd', '2023-10-20', '[{\"id\":\"1\",\"codigo\":\"1234\",\"precio\":\"100\",\"precioV\":\"200\",\"cantidad\":1,\"subtotal\":\"100\",\"stock\":\"100\",\"cantidad1\":10}]', 100, '', 0),
(2, 1, 1, 'sdxsasa', '2023-10-21', '[{\"id\":\"1\",\"codigo\":\"1234\",\"precio\":\"100\",\"precioV\":\"200\",\"cantidad\":1,\"subtotal\":\"100\",\"stock\":\"120\",\"cantidad1\":10}]', 100, '', 0),
(3, 1, 1, 'sdxsasa', '2023-10-21', '[{\"id\":\"1\",\"codigo\":\"1234\",\"precio\":\"100\",\"precioV\":\"200\",\"cantidad\":1,\"subtotal\":\"100\",\"stock\":\"120\",\"cantidad1\":10}]', 100, '', 0),
(4, 1, 1, 'sadsdasd', '2023-10-27', '[{\"id\":\"1\",\"codigo\":\"1234\",\"precio\":\"100\",\"precioV\":\"200\",\"cantidad\":1,\"subtotal\":\"100\",\"stock\":\"140\",\"cantidad1\":10}]', 100, '', 0);

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
  `tipo` varchar(5) NOT NULL,
  `vales` int(10) NOT NULL,
  `sobrantes` int(5) DEFAULT NULL,
  `copias` int(6) NOT NULL,
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

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `fallas`
--

CREATE TABLE `fallas` (
  `id_falla` int(11) NOT NULL,
  `fk_id_sucursal` int(11) NOT NULL,
  `fk_id_maquina` int(11) NOT NULL,
  `fk_id_usuario` int(11) NOT NULL,
  `cantidad_F` int(4) NOT NULL,
  `precio_F` float NOT NULL,
  `tipo_F` varchar(5) NOT NULL,
  `fecha_F` date NOT NULL,
  `imagen_F` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `fotocopiadoras`
--

CREATE TABLE `fotocopiadoras` (
  `id_fotocopiadora` int(11) NOT NULL,
  `fk_id_sucursal` int(11) NOT NULL,
  `modelo_M` varchar(20) NOT NULL,
  `serial_M` varchar(20) NOT NULL,
  `descripcion_M` varchar(50) NOT NULL,
  `fk_id_marca_M` varchar(30) NOT NULL,
  `c_inicial_M` int(8) NOT NULL,
  `c_final_M` int(10) NOT NULL,
  `fecha_registro_M` date NOT NULL,
  `estado_M` int(1) NOT NULL,
  `foto_M` varchar(60) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `mantenimientos`
--

CREATE TABLE `mantenimientos` (
  `id_mantenimiento` int(11) NOT NULL,
  `fk_id_cliente` int(11) NOT NULL,
  `fk_id_usuario` int(11) NOT NULL,
  `modelo` varchar(40) NOT NULL,
  `serial` varchar(20) NOT NULL,
  `contador` int(20) NOT NULL,
  `fecha_recepcion` date NOT NULL,
  `fecha_entrega` date NOT NULL,
  `descripcion` text NOT NULL,
  `tipo` varchar(20) NOT NULL,
  `estado` varchar(20) NOT NULL,
  `costo` int(11) NOT NULL,
  `avance` int(5) NOT NULL,
  `importe` float DEFAULT NULL,
  `total` float NOT NULL,
  `foto` varchar(80) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Volcado de datos para la tabla `mantenimientos`
--

INSERT INTO `mantenimientos` (`id_mantenimiento`, `fk_id_cliente`, `fk_id_usuario`, `modelo`, `serial`, `contador`, `fecha_recepcion`, `fecha_entrega`, `descripcion`, `tipo`, `estado`, `costo`, `avance`, `importe`, `total`, `foto`) VALUES
(4, 1, 1, '350', 'dfgdfgdfgdf', 11111, '2023-10-11', '2023-10-13', 'ghjghjghj', 'Correctivo/Domicilio', 'pendiente', 1, 0, 0, 0, '[\"3501696998505.jpeg\"]'),
(5, 1, 1, '391', '44343434', 3333, '2023-10-20', '2023-10-20', 'gdfgdfg', 'Correctivo/Empresa', 'pendiente', 0, 0, 0, 0, '[\"3911696998658.jpeg\"]'),
(6, 1, 1, 'asdasd', 'gfdfg', 444, '2023-10-13', '2023-10-13', 'fsdfsd', 'Correctivo/Empresa', 'pendiente', 1, 0, 0, 0, '[\"asdasd1696998733.jpeg\"]'),
(7, 1, 1, 'fsdfsd', 'sdfsd', 4343, '2023-10-14', '2023-10-14', 'czxcz', 'General/Taller', 'pendiente', 1, 0, 0, 0, '[\"fsdfsd1696998769.jpeg\"]'),
(8, 1, 1, 'czxcz', 'xczxc', 34534534, '2023-10-07', '2023-10-14', '', 'Correctivo/Domicilio', 'pendiente', 1, 0, 0, 0, '[\"czxcz1696998811.jpeg\"]'),
(9, 1, 1, 'zxczxc', 'zxczx', 34423423, '2023-10-20', '2023-10-06', '', 'General/Domicilio', 'pendiente', 1, 0, 0, 0, '[\"zxczxc1696998848.jpeg\"]'),
(10, 1, 1, 'fwrwer', 'werwer', 444, '2023-10-08', '2023-10-13', 'sdfsdfsd', 'Preventivo/Domicilio', 'pendiente', 1, 0, 0, 0, '[\"fwrwer1696999207.jpeg\"]'),
(11, 1, 1, 'sfsdf', 'fdffsdfsd', 333, '2023-10-06', '2023-10-21', 'asdasd', 'General/Empresa', 'pendiente', 1, 0, 0, 0, '[\"sfsdf1696999283.jpeg\"]');

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
(1, 'SIN MARCA', '[\"SIN MARCA0.png\"]', 0);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `partes_mantenimiento`
--

CREATE TABLE `partes_mantenimiento` (
  `fk_id_mantenimiento` int(11) NOT NULL,
  `repuesto` varchar(50) NOT NULL,
  `calidad` varchar(20) NOT NULL,
  `codigo` varchar(30) NOT NULL,
  `precio` float NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `reparaciones`
--

CREATE TABLE `reparaciones` (
  `id_reparacion` int(11) NOT NULL,
  `fk_id_mantenimiento` int(11) NOT NULL,
  `detalle` text NOT NULL,
  `foto` varchar(250) NOT NULL,
  `cantidad` int(11) NOT NULL,
  `precio` float NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1 COLLATE=latin1_swedish_ci;

--
-- Volcado de datos para la tabla `reparaciones`
--

INSERT INTO `reparaciones` (`id_reparacion`, `fk_id_mantenimiento`, `detalle`, `foto`, `cantidad`, `precio`) VALUES
(1, 0, 'dsadsad', '[]', 1, 333);

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
(1, 'SIN NOMBRE', 'SIN NOMBRE', 1);

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
(1, 1, 'admin', 'admin', 'admin', 1234567, 'administrador', '1', 'admin', 12345678, 1, '2023-10-10 17:18:49', '[\"12345670.jpg\"]', '0000-00-00');

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
  `monto_V` float NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Volcado de datos para la tabla `ventas`
--

INSERT INTO `ventas` (`id_venta`, `fk_id_sucursal`, `fk_id_mantenimiento`, `fk_id_usuario`, `fk_id_cliente`, `fecha_V`, `detalle_V`, `importe_V`, `numero_factura_V`, `nit_V`, `nit_cliente_V`, `numero_autorizacion_V`, `fecha_limite_V`, `control_V`, `qrfoto_V`, `leyenda_V`, `facturado_V`, `tipo_V`, `estado_V`, `monto_V`) VALUES
(2, 1, 4, 1, 1, '2023-10-11', '[{\"id\":\"1\",\"descripcion\":\"SIN nada de descripcion\",\"precio\":\"200\",\"cantidad\":3,\"subtotal\":\"600\",\"stock\":\"100\"}]', 200, 0, 0, 0, 0, '0000-00-00', 0, '', '', 0, 1, 'POR PAGAR', 0),
(3, 1, NULL, 1, 1, '2023-10-11', '[{\"id\":\"1\",\"descripcion\":\"SIN nada de descripcion\",\"precio\":\"200\",\"cantidad\":1,\"subtotal\":\"200\",\"stock\":\"100\"}]', 200, 0, 0, 0, 0, '0000-00-00', 0, '', '', 0, 2, 'POR PAGAR', 0),
(4, 1, 4, 1, 1, '2023-10-11', '[{\"id\":\"1\",\"descripcion\":\"SIN nada de descripcion\",\"precio\":\"200\",\"cantidad\":2,\"subtotal\":\"400\",\"stock\":\"150\"}]', 200, 0, 0, 0, 0, '0000-00-00', 0, '', '', 0, 2, 'POR PAGAR', 0);

--
-- Índices para tablas volcadas
--
CREATE TABLE `anillados` (
  `id_anillado` int(11) NOT NULL,
  `fk_id_sucursal` int(11) NOT NULL,
  `fk_id_cliente` int(11) NOT NULL,
  `fk_id_usuario` int(11) NOT NULL,
  `nombre_cliente` varchar(50) NOT NULL,
  `fecha_C` date NOT NULL,
  `fk_id_articulo1` int NOT NULL,
  `fk_id_articulo2` int NOT NULL,
  `fk_id_articulo3` int NOT NULL,
  `precio` float NOT NULL,
  `cantidad` varchar(20) NOT NULL,
  `tipo` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

ALTER TABLE `anillados`
  ADD PRIMARY KEY (`id_anillado`),
  ADD KEY `anillados_fk_id_sucursal_sucursal_id_sucursal` (`fk_id_sucursal`),
  ADD KEY `anillados_fk_id_cliente_cliente_id_cliente` (`fk_id_cliente`),
  ADD KEY `anillados_fk_id_usuario_usuario_id_usuario` (`fk_id_usuario`),
  ADD KEY `anillados_fk_id_articulo1_articulos_id_articulo` (`fk_id_articulo1`),
  ADD KEY `anillados_fk_id_articulo2_articulos_id_articulo` (`fk_id_articulo2`),
  ADD KEY `anillados_fk_id_articulo3_articulos_id_articulo` (`fk_id_articulo3`);

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
-- Indices de la tabla `copias`
--
ALTER TABLE `copias`
  ADD PRIMARY KEY (`id_copia`),
  ADD  `codigo` (`codigo`),
  ADD KEY `copias_fk_id_sucursal_sucursal_id_sucursal` (`fk_id_sucursal`),
  ADD KEY `copias_fk_id_maquina_fotocopiadoras_id_fotocopiadora` (`fk_id_maquina`),
  ADD KEY `copias_fk_id_usuario_usuario_id_usuario` (`fk_id_usuario`),
  ADD KEY `copias_fk_id_cliente_clientes_id_cliente` (`fk_id_cliente`);

--
-- Indices de la tabla `envios`
--
ALTER TABLE `envios`
  ADD PRIMARY KEY (`id_envio`),
  ADD KEY `envios_fk_id_sucursal_sucursal_id_sucursal` (`fk_id_sucursal`),
  ADD KEY `envios_fk_id_usuario_usuario_id_usuario` (`fk_id_usuario`);

--
-- Indices de la tabla `fallas`
--
ALTER TABLE `fallas`
  ADD PRIMARY KEY (`id_falla`),
  ADD KEY `fallas_fk_id_sucursal_sucursal_id_sucursal` (`fk_id_sucursal`),
  ADD KEY `fallas_fk_id_maquina_fotocopiadoras_id_fotocopiadora` (`fk_id_maquina`),
  ADD KEY `fallas_fk_id_usuario_usuario_id_usuario` (`fk_id_usuario`);

--
-- Indices de la tabla `fotocopiadoras`
--
ALTER TABLE `fotocopiadoras`
  ADD PRIMARY KEY (`id_fotocopiadora`),
  ADD UNIQUE KEY `serial_M` (`serial_M`),
  ADD KEY `fotocopiadoras_fk_id_sucursal_sucursal_id_sucursal` (`fk_id_sucursal`);

--
-- Indices de la tabla `mantenimientos`
--
ALTER TABLE `mantenimientos`
  ADD PRIMARY KEY (`id_mantenimiento`),
  ADD KEY `mantenimientos_fk_id_cliente_clientes_id_cliente` (`fk_id_cliente`),
  ADD KEY `mantenimientos_fk_id_usuario_usuario_id_usuario` (`fk_id_usuario`);

--
-- Indices de la tabla `marcas`
--
ALTER TABLE `marcas`
  ADD PRIMARY KEY (`id_marca`),
  ADD UNIQUE KEY `nombre_marca` (`nombre_marca`);

--
-- Indices de la tabla `reparaciones`
--
ALTER TABLE `reparaciones`
  ADD PRIMARY KEY (`id_reparacion`);

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
  MODIFY `id_articulo` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT de la tabla `categoria`
--
ALTER TABLE `categoria`
  MODIFY `id_categoria` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT de la tabla `clientes`
--
ALTER TABLE `clientes`
  MODIFY `id_cliente` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT de la tabla `compras`
--
ALTER TABLE `compras`
  MODIFY `id_compra` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT de la tabla `copias`
--
ALTER TABLE `copias`
  MODIFY `id_copia` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT de la tabla `envios`
--
ALTER TABLE `envios`
  MODIFY `id_envio` int(5) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT de la tabla `fallas`
--
ALTER TABLE `fallas`
  MODIFY `id_falla` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT de la tabla `fotocopiadoras`
--
ALTER TABLE `fotocopiadoras`
  MODIFY `id_fotocopiadora` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT de la tabla `mantenimientos`
--
ALTER TABLE `mantenimientos`
  MODIFY `id_mantenimiento` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;

--
-- AUTO_INCREMENT de la tabla `marcas`
--
ALTER TABLE `marcas`
  MODIFY `id_marca` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT de la tabla `reparaciones`
--
ALTER TABLE `reparaciones`
  MODIFY `id_reparacion` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT de la tabla `sucursal`
--
ALTER TABLE `sucursal`
  MODIFY `id_sucursal` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT de la tabla `usuario`
--
ALTER TABLE `usuario`
  MODIFY `id_usuario` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT de la tabla `ventas`
--
ALTER TABLE `ventas`
  MODIFY `id_venta` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- Restricciones para tablas volcadas
--

--
-- Filtros para la tabla `articulo`
--
ALTER TABLE `articulo`
  ADD CONSTRAINT `articulo_fk_id_categoria_categoria_id_categoria` FOREIGN KEY (`fk_id_categoria`) REFERENCES `categoria` (`id_categoria`),
  ADD CONSTRAINT `articulo_fk_id_marca_marcas_id_marca` FOREIGN KEY (`fk_id_marca`) REFERENCES `marcas` (`id_marca`),
  ADD CONSTRAINT `articulo_fk_id_sucursal_sucursal_id_sucursal` FOREIGN KEY (`fk_id_sucursal`) REFERENCES `sucursal` (`id_sucursal`),
  ADD CONSTRAINT `articulo_fk_id_usuario_usuario_id_usuario` FOREIGN KEY (`fk_id_usuario`) REFERENCES `usuario` (`id_usuario`);

--
-- Filtros para la tabla `compras`
--
ALTER TABLE `compras`
  ADD CONSTRAINT `compras_fk_id_sucursal_sucursal_id_sucursal` FOREIGN KEY (`fk_id_sucursal`) REFERENCES `sucursal` (`id_sucursal`),
  ADD CONSTRAINT `compras_fk_id_usuario_usuario_id_usuario` FOREIGN KEY (`fk_id_usuario`) REFERENCES `usuario` (`id_usuario`);

--
-- Filtros para la tabla `copias`
--
ALTER TABLE `copias`
  ADD CONSTRAINT `copias_fk_id_cliente_clientes_id_cliente` FOREIGN KEY (`fk_id_cliente`) REFERENCES `clientes` (`id_cliente`),
  ADD CONSTRAINT `copias_fk_id_maquina_fotocopiadoras_id_fotocopiadora` FOREIGN KEY (`fk_id_maquina`) REFERENCES `fotocopiadoras` (`id_fotocopiadora`),
  ADD CONSTRAINT `copias_fk_id_sucursal_sucursal_id_sucursal` FOREIGN KEY (`fk_id_sucursal`) REFERENCES `sucursal` (`id_sucursal`),
  ADD CONSTRAINT `copias_fk_id_usuario_usuario_id_usuario` FOREIGN KEY (`fk_id_usuario`) REFERENCES `usuario` (`id_usuario`);

--
-- Filtros para la tabla `envios`
--
ALTER TABLE `envios`
  ADD CONSTRAINT `envios_fk_id_sucursal_sucursal_id_sucursal` FOREIGN KEY (`fk_id_sucursal`) REFERENCES `sucursal` (`id_sucursal`),
  ADD CONSTRAINT `envios_fk_id_usuario_usuario_id_usuario` FOREIGN KEY (`fk_id_usuario`) REFERENCES `usuario` (`id_usuario`);

--
-- Filtros para la tabla `fallas`
--
ALTER TABLE `fallas`
  ADD CONSTRAINT `fallas_fk_id_maquina_fotocopiadoras_id_fotocopiadora` FOREIGN KEY (`fk_id_maquina`) REFERENCES `fotocopiadoras` (`id_fotocopiadora`),
  ADD CONSTRAINT `fallas_fk_id_sucursal_sucursal_id_sucursal` FOREIGN KEY (`fk_id_sucursal`) REFERENCES `sucursal` (`id_sucursal`),
  ADD CONSTRAINT `fallas_fk_id_usuario_usuario_id_usuario` FOREIGN KEY (`fk_id_usuario`) REFERENCES `usuario` (`id_usuario`);

--
-- Filtros para la tabla `fotocopiadoras`
--
ALTER TABLE `fotocopiadoras`
  ADD CONSTRAINT `fotocopiadoras_fk_id_sucursal_sucursal_id_sucursal` FOREIGN KEY (`fk_id_sucursal`) REFERENCES `sucursal` (`id_sucursal`);

--
-- Filtros para la tabla `mantenimientos`
--
ALTER TABLE `mantenimientos`
  ADD CONSTRAINT `mantenimientos_fk_id_cliente_clientes_id_cliente` FOREIGN KEY (`fk_id_cliente`) REFERENCES `clientes` (`id_cliente`),
  ADD CONSTRAINT `mantenimientos_fk_id_usuario_usuario_id_usuario` FOREIGN KEY (`fk_id_usuario`) REFERENCES `usuario` (`id_usuario`);

--
-- Filtros para la tabla `usuario`
--
ALTER TABLE `usuario`
  ADD CONSTRAINT `usuario_fk_id_sucursal_sucursal_id_sucursal` FOREIGN KEY (`fk_id_sucursal`) REFERENCES `sucursal` (`id_sucursal`);

--
-- Filtros para la tabla `ventas`
--
ALTER TABLE `ventas`
  ADD CONSTRAINT `ventas_fk_id_mantenimiento_mantenimientos_id_mantenimiento` FOREIGN KEY (`fk_id_mantenimiento`) REFERENCES `mantenimientos` (`id_mantenimiento`),
  ADD CONSTRAINT `ventas_fk_id_sucursal_sucursal_id_sucursal` FOREIGN KEY (`fk_id_sucursal`) REFERENCES `sucursal` (`id_sucursal`),
  ADD CONSTRAINT `ventas_fk_id_usuario_usuario_id_usuario` FOREIGN KEY (`fk_id_usuario`) REFERENCES `usuario` (`id_usuario`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
