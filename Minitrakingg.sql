-- --------------------------------------------------------
-- Host:                         127.0.0.1
-- Versión del servidor:         8.0.30 - MySQL Community Server - GPL
-- SO del servidor:              Win64
-- HeidiSQL Versión:             12.1.0.6537
-- --------------------------------------------------------

/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET NAMES utf8 */;
/*!50503 SET NAMES utf8mb4 */;
/*!40103 SET @OLD_TIME_ZONE=@@TIME_ZONE */;
/*!40103 SET TIME_ZONE='+00:00' */;
/*!40014 SET @OLD_FOREIGN_KEY_CHECKS=@@FOREIGN_KEY_CHECKS, FOREIGN_KEY_CHECKS=0 */;
/*!40101 SET @OLD_SQL_MODE=@@SQL_MODE, SQL_MODE='NO_AUTO_VALUE_ON_ZERO' */;
/*!40111 SET @OLD_SQL_NOTES=@@SQL_NOTES, SQL_NOTES=0 */;

-- Volcando estructura para tabla traking-system.camiones
CREATE TABLE IF NOT EXISTS `camiones` (
  `id` bigint unsigned NOT NULL AUTO_INCREMENT,
  `modelo` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `placa` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `descripcion` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=7 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- Volcando datos para la tabla traking-system.camiones: ~5 rows (aproximadamente)
INSERT INTO `camiones` (`id`, `modelo`, `placa`, `descripcion`, `created_at`, `updated_at`) VALUES
	(2, 'Ford F-150', 'ABC-1234', '"Camión de carga con capacidad de 1 tonelada, ideal para transporte urbano."', '2024-10-05 13:21:33', '2024-10-05 13:21:33'),
	(3, 'Chevrolet Silverado 2500', 'XYZ-5678', '"Camión de 3/4 de tonelada, equipado con caja cerrada para mayor seguridad."', '2024-10-05 13:25:42', '2024-10-05 13:25:42'),
	(4, 'Ram 3500', 'LMN-9012', '"Camión de reparto con sistema de refrigeración, perfecto para productos perecederos."', '2024-10-05 13:26:06', '2024-10-05 13:26:06'),
	(5, 'Toyota Tundra', 'QRS-3456', '"Camión de construcción, robusto y resistente, diseñado para terrenos difíciles."', '2024-10-05 13:26:54', '2024-10-05 13:26:54'),
	(6, 'Nissan Titan', 'TUV-7890', '"Camión de mudanzas, con espacio amplio y fácil acceso."', '2024-10-05 13:27:23', '2024-10-05 13:27:23');

-- Volcando estructura para tabla traking-system.clientes
CREATE TABLE IF NOT EXISTS `clientes` (
  `id` bigint unsigned NOT NULL AUTO_INCREMENT,
  `nombre` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `direccion` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `telefono` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `contraseña` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  PRIMARY KEY (`id`),
  UNIQUE KEY `clientes_email_unique` (`email`)
) ENGINE=InnoDB AUTO_INCREMENT=31 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- Volcando datos para la tabla traking-system.clientes: ~28 rows (aproximadamente)
INSERT INTO `clientes` (`id`, `nombre`, `direccion`, `telefono`, `email`, `created_at`, `updated_at`, `contraseña`) VALUES
	(1, 'Fernando Lopez (clinte 1)', 'ciudad', '12345678', 'fernando@gmail.com', '2024-10-05 00:43:23', '2024-10-05 00:43:23', NULL),
	(2, 'Williams David (cl:2)', 'ciudad', '12345678', 'williams@gmail.com', '2024-10-05 00:44:08', '2024-10-05 00:44:08', NULL),
	(3, 'Francisco', 'Ciudad', '51802332', 'francisco@gmail.com', '2024-10-05 00:44:58', '2024-10-05 00:44:58', NULL),
	(4, 'lucas', 'ciudad', '12345678', 'lucas@gmail.com', '2024-10-05 19:37:34', '2024-10-05 19:37:34', NULL),
	(5, 'Elmer Lux', 'ciudad', '12345678', 'elmer@gmail.com', '2024-10-05 19:41:01', '2024-10-05 19:41:01', NULL),
	(6, 'QUICHE', 'final 3 avenida casa 702 zona 2, 1 nivel de color amarillo', '51802332', 'charlesxon.11@gmail.com', '2024-10-22 03:54:18', '2024-10-22 03:54:18', NULL),
	(7, 'carlos', 'Ciudad', NULL, 'prueba11@gmail.com', '2024-10-22 21:15:13', '2024-10-22 21:15:13', '$2y$12$NwnXOh6oJaDeQYOBuP57iuI0byKtFgLr43LegcHWyYM3DZVdTeiG2'),
	(8, 'carlos', 'Ciudad', NULL, 'prueba2@gmail.com', '2024-10-22 21:45:26', '2024-10-22 21:45:26', '$2y$12$oLp/5/TLcMnLx7fToRlxC.Ueiji2hnxdlzrz8Kgvf.69PmnEapSKa'),
	(9, 'carlos', 'Ciudad', NULL, 'prueba3@gmail.com', '2024-10-23 00:40:28', '2024-10-23 00:40:28', '$2y$12$buepyIpJLX6FwmFj/8D/WenAttp/BSipootGwkQ.PwDru6tvXysLe'),
	(10, 'carlos', 'Ciudad', NULL, 'prueba4@gmail.com', '2024-10-23 00:52:08', '2024-10-23 00:52:08', '$2y$12$QWyZ42MrQrLMr9TBf6c2Q.zR4xU/CK3zeJx17Ho4NatbOxdT5NkC.'),
	(11, 'jose', 'sitio', NULL, 'prueba5@gmail.com', '2024-10-23 00:53:37', '2024-10-23 00:53:37', '$2y$12$whbqY46BesuY7VeLhIvpoemeamGAhgPGGRPfaEbkHIsyLGcjgdHUG'),
	(12, 'jose', 'sitio', NULL, 'prueba6@gmail.com', '2024-10-23 01:18:23', '2024-10-23 01:18:23', '$2y$12$ti2NC4fmYG7MQVlVTiEf7e90uKgOTEJidqx/u6jAj1XsP0vIn3uEa'),
	(13, 'jose', 'sitio', NULL, 'prueba7@gmail.com', '2024-10-23 01:21:16', '2024-10-23 01:21:16', '$2y$12$dRgWG8FEjSinElg5gUMX2uih.9Rk2QmL0vT/RnO4ny4g4EurmBF72'),
	(14, 'jose', 'sitio', NULL, 'prueba10@gmail.com', '2024-10-23 01:37:37', '2024-10-23 01:37:37', '$2y$12$CjoQXcQFbhdFZ5HTkTj1eOQycpoKHELAOe2Cwmbbic3v5ioy6k64K'),
	(15, 'admin', 'logal', NULL, 'prueba12@gmail.com', '2024-10-23 01:40:07', '2024-10-23 01:40:07', '$2y$12$eKLNRYxKy.I3iQ2LPseVTOxsqPis/fKEgkbhl2dFl9L3PA/QAAP8G'),
	(16, 'admin', 'logal', NULL, 'prueba13@gmail.com', '2024-10-23 01:43:07', '2024-10-23 01:43:07', '$2y$12$cCyRdlN6G5ppIWqXjelPkeps57KACJnN7Bc7yT2rxpvDjC3uNljwu'),
	(17, 'admin', 'logal', NULL, 'prueba15@gmail.com', '2024-10-23 02:54:18', '2024-10-23 02:54:18', '$2y$12$lrS0XdkUSRnM1eV0.lsqZeDt73MG4DWKH.90lerTCZTk6dFUAVrLO'),
	(18, 'admin', 'logal', NULL, 'prueba16@gmail.com', '2024-10-23 03:15:23', '2024-10-23 03:15:23', '$2y$12$YZZfHIMTpn1t.LK0xJrEEePJ8vBsNS5sFmRgnGIyINkdOCXlU.1Lm'),
	(19, 'admin', 'logal', NULL, 'prueba17@gmail.com', '2024-10-23 03:19:36', '2024-10-23 03:19:36', '$2y$12$aUXLD5ThfkhIeI7C5nhlMO0.3ZxClXpfB8Dp9BkbWCVvPU3bs.gUe'),
	(20, 'admin', 'logal', NULL, 'prueba18@gmail.com', '2024-10-23 03:27:31', '2024-10-23 03:27:31', '$2y$12$UlqVabDuvL6Ksyk7UK6cJ.d7V1EnHHr4o0TwUzzLrQ4UqaBwbkVf.'),
	(21, 'admin', 'logal', NULL, 'prueba19@gmail.com', '2024-10-23 03:36:46', '2024-10-23 03:36:46', '$2y$12$AZqMNai/Lr8y5Gf94en1rezeD8swQQquuZKSOfmbEMHezVIQtwzgS'),
	(22, 'Carlos Bernardo', 'Lima', NULL, 'prueba21@gmail.com', '2024-10-24 03:45:09', '2024-10-24 03:45:09', '$2y$12$vJqN38bHPdcZt7x3d4Bv4e1ko/S893pDDOxjqbRTn.YVNNAvwGkGi'),
	(23, 'Bernardo Xon', '3calle 1-23', NULL, 'bernardox@gmail.com', '2024-10-24 08:42:28', '2024-10-24 08:42:28', '$2y$12$aurLEd1EVo51hvpEffKAbOwsMY2oL.75SzYzExRwbWCsWhtI6O9Fu'),
	(24, 'Carlos Bernardo', 'Lima', NULL, 'prueba26@gmail.com', '2024-10-24 08:49:56', '2024-10-24 08:49:56', '$2y$12$D/nNJ8fCFOSC1RwUrE56yu6AhAHC7BF1dBagfYeOi7QY/.utzSP3y'),
	(25, 'Bernard Xon2', 'Lima', NULL, 'bernardo2@gmail.com', '2024-10-25 00:17:06', '2024-10-25 00:17:06', '$2y$12$CBISW6.Hch6lARmLHfR0oOBlqJmxdE8Pur06I6FTT7CfosaS5xPzm'),
	(26, 'Bernardo Xon3', 'Lima', NULL, 'bernardo3@gmail.com', '2024-10-25 00:19:08', '2024-10-25 00:19:08', '$2y$12$Z833odad/oVoZkLofdmIdeReJMxqySroUp.8.KjrQMCr/rbmXfyF.'),
	(27, 'Bernardo Xon4', 'Lima', NULL, 'bernardo4@gmail.com', '2024-10-25 02:29:16', '2024-10-25 02:29:16', '$2y$12$CqSRlnN2w3O6aCZRDkKpcOCBcXlvHhSPDw5WsIpQK7tuGqdiRCO5W'),
	(28, 'prueba', 'Lima', NULL, 'cliente@gmail.com', '2024-10-25 03:57:37', '2024-10-25 03:57:37', '$2y$12$rh75wda0rfxeQ9lmVPI4W.Wm1SFlPmcxTBi.qjdwAnYz0nHuNYEZK'),
	(29, 'jose lopez', 'ciudad', NULL, 'jose@gmail.com', '2024-10-26 11:52:52', '2024-10-26 11:52:52', '$2y$12$EzCEm1/7dCVXHvh16W9E2u4xkI/MTfL68ldy0/OutQSX4FqG503Aa'),
	(30, 'Juan Erick', 'Ciudad', NULL, 'Juan3@gmail.com', '2024-10-26 20:05:01', '2024-10-26 20:05:01', '$2y$12$jFfl9yvf/n05rUyPPOO64uOIibURTVQiaxjTR3crFpGtCVCUZhvnq');

-- Volcando estructura para tabla traking-system.departamentos
CREATE TABLE IF NOT EXISTS `departamentos` (
  `id` bigint unsigned NOT NULL AUTO_INCREMENT,
  `nombre` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `sucursal_id` bigint unsigned NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- Volcando datos para la tabla traking-system.departamentos: ~0 rows (aproximadamente)

-- Volcando estructura para tabla traking-system.envios
CREATE TABLE IF NOT EXISTS `envios` (
  `id` bigint unsigned NOT NULL AUTO_INCREMENT,
  `paquete_id` bigint unsigned NOT NULL,
  `sucursal_id` bigint unsigned NOT NULL,
  `cliente_id` bigint unsigned NOT NULL,
  `camion_id` bigint unsigned DEFAULT NULL,
  `codigo_dhl` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `estado` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `repartidor_id` bigint unsigned DEFAULT NULL,
  `metodo_pago_id` bigint unsigned NOT NULL,
  `tipo_envio_id` bigint unsigned NOT NULL,
  `fecha_envio` date NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `peso` decimal(8,2) DEFAULT NULL,
  `costo_total` decimal(10,2) DEFAULT NULL,
  `remitente_nombre` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `remitente_direccion` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `remitente_nit` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `remitente_telefono` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `remitente_departamento` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `destinatario_nombre` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `destinatario_direccion` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `destinatario_nit` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `destinatario_telefono` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `destinatario_departamento` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=16 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- Volcando datos para la tabla traking-system.envios: ~11 rows (aproximadamente)
INSERT INTO `envios` (`id`, `paquete_id`, `sucursal_id`, `cliente_id`, `camion_id`, `codigo_dhl`, `estado`, `repartidor_id`, `metodo_pago_id`, `tipo_envio_id`, `fecha_envio`, `created_at`, `updated_at`, `peso`, `costo_total`, `remitente_nombre`, `remitente_direccion`, `remitente_nit`, `remitente_telefono`, `remitente_departamento`, `destinatario_nombre`, `destinatario_direccion`, `destinatario_nit`, `destinatario_telefono`, `destinatario_departamento`) VALUES
	(1, 2, 5, 1, 3, NULL, 'en_transito', 3, 1, 3, '2024-10-05', '2024-10-05 13:31:26', '2024-10-21 10:24:32', 10.00, 350.00, 'juan lucas', 'final 3 avenida casa 702 zona 2, 1 nivel de color amarillo', '', '51802332', 'quiche', 'Dvid Cos', 'final 3 avenida casa 702 zona 2, 1 nivel de color amarillo', '', '51802332', 'Guatemala'),
	(2, 2, 11, 3, 3, 'BD85dCPN', 'en_transito', 2, 1, 11, '2024-10-05', '2024-10-05 14:06:15', '2024-10-05 14:06:15', 1.00, 35.00, NULL, NULL, '', NULL, NULL, NULL, NULL, '', NULL, NULL),
	(3, 2, 5, 2, 3, 'RgPpERkB', 'pendiente', 3, 2, 6, '2024-10-05', '2024-10-05 15:18:57', '2024-10-05 15:18:57', 2.00, 70.00, NULL, NULL, '', NULL, NULL, NULL, NULL, '', NULL, NULL),
	(4, 2, 2, 5, 3, 'HAqmOnYo', 'entregado', 3, 2, 1, '2024-10-05', '2024-10-05 19:43:40', '2024-10-05 19:48:33', 3.00, 105.00, NULL, NULL, '', NULL, NULL, NULL, NULL, '', NULL, NULL),
	(5, 2, 10, 2, 3, 'ohhj2B8t', 'pendiente', 1, 1, 1, '2024-10-08', '2024-10-08 13:38:26', '2024-10-08 13:38:26', 3.00, 105.00, NULL, NULL, '', NULL, NULL, NULL, NULL, '', NULL, NULL),
	(6, 2, 9, 1, 3, '0ylVHaMX', 'en_transito', 3, 1, 1, '2024-10-14', '2024-10-14 23:26:17', '2024-10-17 04:23:49', 2.00, 70.00, 'juan lucas', 'final 3 avenida casa 702 zona 2, 1 nivel de color amarillo', '', '51802332', 'quiche', 'Dvid Cos', 'final 3 avenida casa 702 zona 2, 1 nivel de color amarillo', '', '51802332', 'Guatemala'),
	(7, 2, 5, 5, 3, 'ZcT4lIkE', 'entregado', 2, 2, 2, '2024-10-17', '2024-10-18 03:56:38', '2024-10-21 10:36:28', 5.00, 175.00, 'juan lucas', 'final 3 avenida casa 702 zona 2, 1 nivel de color amarillo', '', '51802332', 'quiche', 'Dvid Cos', 'final 3 avenida casa 702 zona 2, 1 nivel de color amarillo', '', '51802332', 'Guatemala'),
	(8, 1, 9, 2, 3, 'xq1JfaFF', 'pendiente', 3, 1, 3, '2024-10-21', '2024-10-21 09:58:26', '2024-10-21 10:35:47', 3.00, 105.00, 'juan lucas', 'final 3 avenida casa 702 zona 2, 1 nivel de color amarillo', '', '51802332', 'quiche', 'Dvid Cos', 'final 3 avenida casa 702 zona 2, 1 nivel de color amarillo', '', '51802332', 'Guatemala'),
	(9, 2, 2, 23, 3, '69720zmw', 'pendiente', 1, 1, 6, '2024-10-24', '2024-10-24 10:03:03', '2024-10-24 10:03:03', 2.00, 70.00, 'juan lucas', 'final 3 avenida casa 702 zona 2, 1 nivel de color amarillo', '', '51802332', 'quiche', 'Dvid Cos', 'final 3 avenida casa 702 zona 2, 1 nivel de color amarillo', '', '51802332', 'Guatemala'),
	(10, 2, 2, 23, 3, 'wCJbNS1H', 'pendiente', 1, 4, 6, '2024-10-24', '2024-10-24 10:15:31', '2024-10-24 10:46:37', 3.00, 105.00, 'juan lucas', 'final 3 avenida casa 702 zona 2, 1 nivel de color amarillo', '', '51802332', 'quiche', 'Dvid Cos', 'final 3 avenida casa 702 zona 2, 1 nivel de color amarillo', '', '51802332', 'Guatemala'),
	(11, 1, 2, 23, 5, 'tPUK3Fsp', 'entregado', 2, 3, 6, '2024-10-24', '2024-10-24 12:19:46', '2024-10-26 11:27:13', 1.00, 35.00, 'juan lucas', 'final 3 avenida casa 702 zona 2, 1 nivel de color amarillo', 'cf', '51802332', 'quiche', 'Dvid Cos', 'final 3 avenida casa 702 zona 2, 1 nivel de color amarillo', '12345678', '51802332', 'Guatemala'),
	(12, 2, 2, 27, 3, 'afADbaZE', 'bodega', 2, 1, 6, '2024-10-24', '2024-10-25 02:31:17', '2024-10-25 02:31:17', 3.00, 105.00, 'juan lucas', 'final 3 avenida casa 702 zona 2, 1 nivel de color amarillo', 'cf', '51802332', 'quiche', 'Dvid Cos', 'final 3 avenida casa 702 zona 2, 1 nivel de color amarillo', '12345678', '51802332', 'Guatemala'),
	(13, 2, 22, 23, 2, 'N7GhCxtZ', 'bodega', 3, 2, 6, '2024-10-26', '2024-10-26 11:35:22', '2024-10-26 11:35:22', 2.00, 70.00, 'Lucas', 'ciudad', '123456789', '12345678', 'guatelama', 'jose', '3 calle 1-23 zona 2 Santa Cruz del Quiché', '12345678', '51802332', 'quiche'),
	(14, 2, 9, 29, 3, 'HQi4yffO', 'bodega', 3, 1, 6, '2024-10-26', '2024-10-26 11:56:19', '2024-10-26 11:56:19', 2.00, 70.00, 'juan lucas', 'final 3 avenida casa 702 zona 2, 1 nivel de color amarillo', '1234567890', '51802332', 'quiche', 'Dvid Cos', 'final 3 avenida casa 702 zona 2, 1 nivel de color amarillo', '12345678', '51802332', 'Guatemala'),
	(15, 1, 2, 30, 2, 'C0ullF39', 'en_transito', 3, 2, 6, '2024-10-26', '2024-10-26 20:08:13', '2024-10-26 20:12:56', 2.00, 70.00, 'Carlos Xon', 'final 3 avenida casa 702 zona 2, 1 nivel de color amarillo', 'cf', '51802332', 'quiche', 'Juan Erick', 'San miguel uspanta', 'cf', '123456789', 'quiche');

-- Volcando estructura para tabla traking-system.facturas
CREATE TABLE IF NOT EXISTS `facturas` (
  `id` bigint unsigned NOT NULL AUTO_INCREMENT,
  `numero_autorizacion` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `nombre_receptor` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `nit_receptor` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `total` decimal(10,2) NOT NULL,
  `fecha_emision` date NOT NULL,
  `envio_id` bigint unsigned NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`),
  KEY `facturas_envio_id_foreign` (`envio_id`),
  CONSTRAINT `facturas_envio_id_foreign` FOREIGN KEY (`envio_id`) REFERENCES `envios` (`id`) ON DELETE CASCADE
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- Volcando datos para la tabla traking-system.facturas: ~0 rows (aproximadamente)

-- Volcando estructura para tabla traking-system.failed_jobs
CREATE TABLE IF NOT EXISTS `failed_jobs` (
  `id` bigint unsigned NOT NULL AUTO_INCREMENT,
  `uuid` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `connection` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `queue` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `payload` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `exception` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `failed_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  PRIMARY KEY (`id`),
  UNIQUE KEY `failed_jobs_uuid_unique` (`uuid`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- Volcando datos para la tabla traking-system.failed_jobs: ~0 rows (aproximadamente)

-- Volcando estructura para tabla traking-system.metodos_pagos
CREATE TABLE IF NOT EXISTS `metodos_pagos` (
  `id` bigint unsigned NOT NULL AUTO_INCREMENT,
  `nombre` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=6 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- Volcando datos para la tabla traking-system.metodos_pagos: ~4 rows (aproximadamente)
INSERT INTO `metodos_pagos` (`id`, `nombre`, `created_at`, `updated_at`) VALUES
	(1, 'Efectivo', '2024-10-05 00:48:26', '2024-10-05 00:48:26'),
	(2, 'Por Cobrar', '2024-10-05 00:48:40', '2024-10-05 00:48:40'),
	(3, 'Trasferencia Bancaria', '2024-10-05 00:48:51', '2024-10-05 00:48:51'),
	(4, 'Tarjeta de Crédito', '2024-10-05 00:49:15', '2024-10-05 00:49:15'),
	(5, 'Tarjeta de Debito', '2024-10-05 00:49:29', '2024-10-05 00:49:29');

-- Volcando estructura para tabla traking-system.migrations
CREATE TABLE IF NOT EXISTS `migrations` (
  `id` int unsigned NOT NULL AUTO_INCREMENT,
  `migration` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `batch` int NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=53 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- Volcando datos para la tabla traking-system.migrations: ~31 rows (aproximadamente)
INSERT INTO `migrations` (`id`, `migration`, `batch`) VALUES
	(8, '2014_10_12_000000_create_users_table', 1),
	(9, '2014_10_12_100000_create_password_reset_tokens_table', 1),
	(10, '2019_08_19_000000_create_failed_jobs_table', 1),
	(11, '2019_12_14_000001_create_personal_access_tokens_table', 1),
	(12, '2024_08_26_184246_create_pedidos_table', 1),
	(13, '2024_08_26_184247_create_envios_table', 1),
	(14, '2024_08_26_184248_create_transportistas_table', 1),
	(15, '2024_08_28_050705_create_pedidos_table', 2),
	(16, '2024_08_28_053742_create_envios_table', 3),
	(17, '2024_08_28_151217_create_metodos_envio_table', 4),
	(18, '2024_08_28_211839_create_permission_tables', 5),
	(19, '2024_08_28_050705_create_paquetes_table', 6),
	(20, '2024_09_04_012722_create_envios_table', 7),
	(21, '2024_09_04_061036_create_payment_methods_table', 8),
	(22, '2024_09_04_061038_create_transactions_table', 8),
	(23, '2024_09_04_164635_crear_tabla_sucursales', 9),
	(25, '2024_09_12_162155_create_paquetes_table', 10),
	(26, '2024_09_13_030727_create_paquetes_table', 11),
	(27, '2024_09_13_030728_create_sucursales_table', 11),
	(32, '2024_09_13_033626_create_paquetes_table', 12),
	(33, '2024_09_13_033655_create_sucursales_table', 12),
	(34, '2024_09_13_033718_create_clientes_table', 12),
	(35, '2024_09_13_033754_create_repartidores_table', 12),
	(36, '2024_09_13_033823_create_metodos_pagos_table', 12),
	(37, '2024_09_13_033902_create_tipos_envios_table', 12),
	(38, '2024_09_13_070446_create_camiones_table', 13),
	(39, '2024_10_05_070920_add_placa_y_modelo_to_camiones_table', 14),
	(40, '2024_10_05_073547_add_codigo_dhl_to_envios_table', 15),
	(41, '2024_10_05_075131_add_camion_id_y_estado_to_envios_table', 16),
	(42, '2024_10_16_212546_add_remitente_destinatario_fields_to_envios_table', 17),
	(44, '2024_10_16_215803_add_peso_to_envios_table', 18),
	(45, '2024_10_16_220842_add_new_fields_to_envios_table', 19),
	(46, '2024_10_21_025016_create_facturas_table', 20),
	(47, '2024_10_21_034851_add_costo_total_to_envios_table', 21),
	(48, '2024_10_22_145944_add_contraseña_to_clientes_table', 22),
	(49, '2024_10_24_022942_create_mi_paquetes_table', 23),
	(50, '2024_10_24_063006_add_nit_to_envios_table', 23),
	(51, 'xxxx_xx_xx_xxxxxx_add_nit_to_envios_table', 23),
	(52, '2024_10_24_180820_add_cliente_id_to_users_table', 24);

-- Volcando estructura para tabla traking-system.model_has_permissions
CREATE TABLE IF NOT EXISTS `model_has_permissions` (
  `permission_id` bigint unsigned NOT NULL,
  `model_type` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `model_id` bigint unsigned NOT NULL,
  PRIMARY KEY (`permission_id`,`model_id`,`model_type`),
  KEY `model_has_permissions_model_id_model_type_index` (`model_id`,`model_type`),
  CONSTRAINT `model_has_permissions_permission_id_foreign` FOREIGN KEY (`permission_id`) REFERENCES `permissions` (`id`) ON DELETE CASCADE
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- Volcando datos para la tabla traking-system.model_has_permissions: ~42 rows (aproximadamente)
INSERT INTO `model_has_permissions` (`permission_id`, `model_type`, `model_id`) VALUES
	(1, 'App\\Models\\User', 1),
	(2, 'App\\Models\\User', 1),
	(3, 'App\\Models\\User', 1),
	(4, 'App\\Models\\User', 1),
	(5, 'App\\Models\\User', 1),
	(6, 'App\\Models\\User', 1),
	(7, 'App\\Models\\User', 1),
	(8, 'App\\Models\\User', 1),
	(10, 'App\\Models\\User', 1),
	(11, 'App\\Models\\User', 1),
	(12, 'App\\Models\\User', 1),
	(13, 'App\\Models\\User', 1),
	(1, 'App\\Models\\User', 4),
	(2, 'App\\Models\\User', 4),
	(3, 'App\\Models\\User', 4),
	(5, 'App\\Models\\User', 4),
	(6, 'App\\Models\\User', 4),
	(7, 'App\\Models\\User', 4),
	(10, 'App\\Models\\User', 4),
	(1, 'App\\Models\\User', 5),
	(2, 'App\\Models\\User', 5),
	(3, 'App\\Models\\User', 5),
	(4, 'App\\Models\\User', 5),
	(5, 'App\\Models\\User', 5),
	(6, 'App\\Models\\User', 5),
	(7, 'App\\Models\\User', 5),
	(8, 'App\\Models\\User', 5),
	(10, 'App\\Models\\User', 5),
	(11, 'App\\Models\\User', 5),
	(12, 'App\\Models\\User', 5),
	(13, 'App\\Models\\User', 5),
	(1, 'App\\Models\\User', 11),
	(2, 'App\\Models\\User', 11),
	(3, 'App\\Models\\User', 11),
	(4, 'App\\Models\\User', 11),
	(1, 'App\\Models\\User', 12),
	(2, 'App\\Models\\User', 12),
	(3, 'App\\Models\\User', 12),
	(4, 'App\\Models\\User', 12),
	(5, 'App\\Models\\User', 13),
	(6, 'App\\Models\\User', 13),
	(7, 'App\\Models\\User', 13),
	(8, 'App\\Models\\User', 13),
	(12, 'App\\Models\\User', 37),
	(13, 'App\\Models\\User', 37);

-- Volcando estructura para tabla traking-system.model_has_roles
CREATE TABLE IF NOT EXISTS `model_has_roles` (
  `role_id` bigint unsigned NOT NULL,
  `model_type` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `model_id` bigint unsigned NOT NULL,
  PRIMARY KEY (`role_id`,`model_id`,`model_type`),
  KEY `model_has_roles_model_id_model_type_index` (`model_id`,`model_type`),
  CONSTRAINT `model_has_roles_role_id_foreign` FOREIGN KEY (`role_id`) REFERENCES `roles` (`id`) ON DELETE CASCADE
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- Volcando datos para la tabla traking-system.model_has_roles: ~27 rows (aproximadamente)
INSERT INTO `model_has_roles` (`role_id`, `model_type`, `model_id`) VALUES
	(1, 'App\\Models\\User', 1),
	(2, 'App\\Models\\User', 4),
	(3, 'App\\Models\\User', 4),
	(1, 'App\\Models\\User', 5),
	(2, 'App\\Models\\User', 11),
	(2, 'App\\Models\\User', 12),
	(5, 'App\\Models\\User', 13),
	(3, 'App\\Models\\User', 14),
	(3, 'App\\Models\\User', 16),
	(3, 'App\\Models\\User', 17),
	(3, 'App\\Models\\User', 18),
	(3, 'App\\Models\\User', 19),
	(3, 'App\\Models\\User', 20),
	(3, 'App\\Models\\User', 21),
	(3, 'App\\Models\\User', 22),
	(3, 'App\\Models\\User', 23),
	(3, 'App\\Models\\User', 24),
	(3, 'App\\Models\\User', 25),
	(3, 'App\\Models\\User', 26),
	(3, 'App\\Models\\User', 27),
	(3, 'App\\Models\\User', 28),
	(3, 'App\\Models\\User', 29),
	(3, 'App\\Models\\User', 30),
	(3, 'App\\Models\\User', 31),
	(3, 'App\\Models\\User', 32),
	(3, 'App\\Models\\User', 33),
	(2, 'App\\Models\\User', 34),
	(2, 'App\\Models\\User', 35),
	(2, 'App\\Models\\User', 36),
	(2, 'App\\Models\\User', 37),
	(3, 'App\\Models\\User', 38),
	(3, 'App\\Models\\User', 39),
	(1, 'App\\Models\\User', 40);

-- Volcando estructura para tabla traking-system.paquetes
CREATE TABLE IF NOT EXISTS `paquetes` (
  `id` bigint unsigned NOT NULL AUTO_INCREMENT,
  `descripcion` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `peso` double(8,2) NOT NULL,
  `dimensiones` double(8,2) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=4 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- Volcando datos para la tabla traking-system.paquetes: ~2 rows (aproximadamente)
INSERT INTO `paquetes` (`id`, `descripcion`, `peso`, `dimensiones`, `created_at`, `updated_at`) VALUES
	(1, '\'SOBRE\'', 0.10, 10.00, '2024-10-01 13:00:43', '2024-10-01 13:01:36'),
	(2, '\'CAJA\'', 10.00, 80.00, '2024-10-01 13:02:45', '2024-10-01 13:02:45');

-- Volcando estructura para tabla traking-system.password_reset_tokens
CREATE TABLE IF NOT EXISTS `password_reset_tokens` (
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `token` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`email`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- Volcando datos para la tabla traking-system.password_reset_tokens: ~0 rows (aproximadamente)

-- Volcando estructura para tabla traking-system.permissions
CREATE TABLE IF NOT EXISTS `permissions` (
  `id` bigint unsigned NOT NULL AUTO_INCREMENT,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `guard_name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`),
  UNIQUE KEY `permissions_name_guard_name_unique` (`name`,`guard_name`)
) ENGINE=InnoDB AUTO_INCREMENT=14 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- Volcando datos para la tabla traking-system.permissions: ~10 rows (aproximadamente)
INSERT INTO `permissions` (`id`, `name`, `guard_name`, `created_at`, `updated_at`) VALUES
	(1, 'ver pedidos', 'web', '2024-08-29 05:17:18', '2024-08-29 05:17:18'),
	(2, 'crear pedidos', 'web', '2024-08-29 05:17:18', '2024-08-29 05:17:18'),
	(3, 'editar pedidos', 'web', '2024-08-29 05:17:18', '2024-08-29 05:17:18'),
	(4, 'eliminar pedidos', 'web', '2024-08-29 05:17:18', '2024-08-29 05:17:18'),
	(5, 'ver envios', 'web', '2024-08-29 05:17:18', '2024-08-29 05:17:18'),
	(6, 'crear envios', 'web', '2024-08-29 05:17:18', '2024-08-29 05:17:18'),
	(7, 'editar envios', 'web', '2024-08-29 05:17:18', '2024-08-29 05:17:18'),
	(8, 'eliminar envios', 'web', '2024-08-29 05:17:18', '2024-08-29 05:17:18'),
	(10, 'crear transportista', 'web', '2024-08-29 10:02:16', '2024-08-29 10:02:16'),
	(11, 'eliminar trasportista', 'web', '2024-08-29 22:21:22', '2024-08-29 22:21:42'),
	(12, 'ver sucursal', 'web', '2024-09-05 01:48:38', '2024-09-05 01:48:38'),
	(13, 'gestionar sucursal', 'web', '2024-09-05 01:48:48', '2024-09-05 01:48:48');

-- Volcando estructura para tabla traking-system.personal_access_tokens
CREATE TABLE IF NOT EXISTS `personal_access_tokens` (
  `id` bigint unsigned NOT NULL AUTO_INCREMENT,
  `tokenable_type` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `tokenable_id` bigint unsigned NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `token` varchar(64) COLLATE utf8mb4_unicode_ci NOT NULL,
  `abilities` text COLLATE utf8mb4_unicode_ci,
  `last_used_at` timestamp NULL DEFAULT NULL,
  `expires_at` timestamp NULL DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`),
  UNIQUE KEY `personal_access_tokens_token_unique` (`token`),
  KEY `personal_access_tokens_tokenable_type_tokenable_id_index` (`tokenable_type`,`tokenable_id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- Volcando datos para la tabla traking-system.personal_access_tokens: ~0 rows (aproximadamente)

-- Volcando estructura para tabla traking-system.repartidores
CREATE TABLE IF NOT EXISTS `repartidores` (
  `id` bigint unsigned NOT NULL AUTO_INCREMENT,
  `nombre` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `telefono` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`),
  UNIQUE KEY `repartidores_email_unique` (`email`)
) ENGINE=InnoDB AUTO_INCREMENT=4 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- Volcando datos para la tabla traking-system.repartidores: ~3 rows (aproximadamente)
INSERT INTO `repartidores` (`id`, `nombre`, `telefono`, `email`, `created_at`, `updated_at`) VALUES
	(1, 'Juan Francisco López Peréz', '51802332', 'juan@gmail.com', '2024-10-05 00:25:28', '2024-10-05 00:25:28'),
	(2, 'Lucas Tipaz', '12345678', 'lucas@gmail.com', '2024-10-05 00:26:16', '2024-10-05 00:26:39'),
	(3, 'David Lopez', '12345678', 'davidd@gmail.com', '2024-10-05 00:27:24', '2024-10-05 00:27:24');

-- Volcando estructura para tabla traking-system.roles
CREATE TABLE IF NOT EXISTS `roles` (
  `id` bigint unsigned NOT NULL AUTO_INCREMENT,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `guard_name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`),
  UNIQUE KEY `roles_name_guard_name_unique` (`name`,`guard_name`)
) ENGINE=InnoDB AUTO_INCREMENT=7 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- Volcando datos para la tabla traking-system.roles: ~4 rows (aproximadamente)
INSERT INTO `roles` (`id`, `name`, `guard_name`, `created_at`, `updated_at`) VALUES
	(1, 'admin', 'web', '2024-08-29 05:17:18', '2024-08-29 05:17:18'),
	(2, 'transportista', 'web', '2024-08-29 05:17:18', '2024-08-29 22:02:06'),
	(3, 'cliente', 'web', '2024-08-29 05:17:18', '2024-08-29 05:17:18'),
	(5, 'user', 'web', '2024-08-29 21:57:54', '2024-08-29 21:57:54'),
	(6, 'Gerente Sucursal', 'web', '2024-09-05 01:47:32', '2024-09-05 01:47:32');

-- Volcando estructura para tabla traking-system.role_has_permissions
CREATE TABLE IF NOT EXISTS `role_has_permissions` (
  `permission_id` bigint unsigned NOT NULL,
  `role_id` bigint unsigned NOT NULL,
  PRIMARY KEY (`permission_id`,`role_id`),
  KEY `role_has_permissions_role_id_foreign` (`role_id`),
  CONSTRAINT `role_has_permissions_permission_id_foreign` FOREIGN KEY (`permission_id`) REFERENCES `permissions` (`id`) ON DELETE CASCADE,
  CONSTRAINT `role_has_permissions_role_id_foreign` FOREIGN KEY (`role_id`) REFERENCES `roles` (`id`) ON DELETE CASCADE
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- Volcando datos para la tabla traking-system.role_has_permissions: ~15 rows (aproximadamente)
INSERT INTO `role_has_permissions` (`permission_id`, `role_id`) VALUES
	(1, 1),
	(2, 1),
	(3, 1),
	(4, 1),
	(5, 1),
	(6, 1),
	(7, 1),
	(8, 1),
	(1, 2),
	(2, 2),
	(3, 2),
	(5, 2),
	(6, 2),
	(7, 2),
	(1, 3);

-- Volcando estructura para tabla traking-system.sucursales
CREATE TABLE IF NOT EXISTS `sucursales` (
  `id` bigint unsigned NOT NULL AUTO_INCREMENT,
  `nombre` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `direccion` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `telefono` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=23 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- Volcando datos para la tabla traking-system.sucursales: ~21 rows (aproximadamente)
INSERT INTO `sucursales` (`id`, `nombre`, `direccion`, `telefono`, `created_at`, `updated_at`) VALUES
	(1, 'SAN MARCOS', 'ZONA 1', '52467895', '2024-10-01 13:09:32', '2024-10-01 13:14:58'),
	(2, 'QUICHE', 'ZONA 1', '52467895', '2024-10-01 13:16:08', '2024-10-01 13:16:08'),
	(3, 'RETALHULEU', 'ZONA 1', '52467895', '2024-10-01 13:16:39', '2024-10-01 13:17:07'),
	(4, 'TOTONICAPAN', 'ZONA 1', '52467895', '2024-10-01 13:17:49', '2024-10-01 13:17:49'),
	(5, 'CHIMALTENANGO', 'ZONA 1', '52467895', '2024-10-01 13:18:16', '2024-10-01 13:18:16'),
	(6, 'SUCHITEQUEZ', 'ZONA 1', '52467895', '2024-10-01 13:18:33', '2024-10-01 13:18:33'),
	(7, 'HUEHUETENANGO', 'ZONA 1', '52467895', '2024-10-01 13:19:20', '2024-10-01 13:19:20'),
	(8, 'PETEN', 'ZONA 1', '52467895', '2024-10-01 13:19:38', '2024-10-01 13:19:38'),
	(9, 'ALTA VERAPAZ', 'ZONA 1', '52467895', '2024-10-01 13:19:57', '2024-10-01 13:19:57'),
	(10, 'IZABAL', 'ZONA 1', '52467895', '2024-10-01 13:20:16', '2024-10-01 13:20:16'),
	(11, 'BAJA VERAPAZ', 'ZONA 1', '52467895', '2024-10-01 13:20:32', '2024-10-01 13:20:32'),
	(12, 'JALAPA', 'ZONA 1', '52467895', '2024-10-01 13:20:46', '2024-10-01 13:20:46'),
	(13, 'JUTIAPA', 'ZONA 1', '52467895', '2024-10-01 13:20:59', '2024-10-01 13:20:59'),
	(14, 'ZACAPA', 'ZONA 1', '52467895', '2024-10-01 13:22:01', '2024-10-01 13:22:01'),
	(15, 'CHIQUIMULA', 'ZONA 1', '52467895', '2024-10-01 13:22:17', '2024-10-01 13:22:17'),
	(16, 'SANTA ROSA', 'ZONA 1', '52467895', '2024-10-01 13:22:39', '2024-10-01 13:22:39'),
	(17, 'ZACATEPEQUEZ', 'ZONA 1', '52467895', '2024-10-01 13:22:57', '2024-10-01 13:22:57'),
	(18, 'ESCUINTLA', 'ZONA 1', '52467895', '2024-10-01 13:23:13', '2024-10-01 13:23:13'),
	(19, 'SOLOLA', 'ZONA 1', '52467895', '2024-10-01 13:24:59', '2024-10-01 13:24:59'),
	(20, 'QUETZALTENANGO', 'ZONA 1', '52467895', '2024-10-01 13:25:27', '2024-10-01 13:25:27'),
	(21, 'EL PROGRESO', 'ZONA 1', '52467895', '2024-10-01 13:27:10', '2024-10-01 13:27:10'),
	(22, 'GUATEMALA', 'Ciudad', '12345678231', '2024-10-04 23:41:13', '2024-10-05 00:40:44');

-- Volcando estructura para tabla traking-system.sucursal_user
CREATE TABLE IF NOT EXISTS `sucursal_user` (
  `id` bigint unsigned NOT NULL AUTO_INCREMENT,
  `user_id` bigint unsigned NOT NULL,
  `sucursal_id` bigint unsigned NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`),
  KEY `sucursal_user_user_id_foreign` (`user_id`),
  CONSTRAINT `sucursal_user_user_id_foreign` FOREIGN KEY (`user_id`) REFERENCES `users` (`id`) ON DELETE CASCADE
) ENGINE=InnoDB AUTO_INCREMENT=6 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- Volcando datos para la tabla traking-system.sucursal_user: ~4 rows (aproximadamente)
INSERT INTO `sucursal_user` (`id`, `user_id`, `sucursal_id`, `created_at`, `updated_at`) VALUES
	(1, 37, 2, NULL, NULL),
	(2, 37, 3, NULL, NULL),
	(3, 37, 4, NULL, NULL),
	(4, 37, 5, NULL, NULL),
	(5, 1, 4, NULL, NULL);

-- Volcando estructura para tabla traking-system.tipos_envios
CREATE TABLE IF NOT EXISTS `tipos_envios` (
  `id` bigint unsigned NOT NULL AUTO_INCREMENT,
  `nombre` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=12 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- Volcando datos para la tabla traking-system.tipos_envios: ~9 rows (aproximadamente)
INSERT INTO `tipos_envios` (`id`, `nombre`, `created_at`, `updated_at`) VALUES
	(1, 'Envío Estándar', '2024-10-05 13:02:33', '2024-10-05 13:02:33'),
	(2, 'Envío Exprés', '2024-10-05 13:02:47', '2024-10-05 13:02:47'),
	(3, ' Envío Internacional', '2024-10-05 13:02:57', '2024-10-05 13:02:57'),
	(4, 'Envío Same-Day', '2024-10-05 13:03:15', '2024-10-05 13:03:15'),
	(5, 'Envío Programado', '2024-10-05 13:03:47', '2024-10-05 13:03:47'),
	(6, 'Envío con Seguimiento', '2024-10-05 13:04:02', '2024-10-05 13:04:02'),
	(7, 'Envío Gratuito', '2024-10-05 13:04:11', '2024-10-05 13:04:11'),
	(8, 'Envío a Puntos de Recogida', '2024-10-05 13:04:25', '2024-10-05 13:04:25'),
	(10, 'Envío con Seguro', '2024-10-05 13:04:54', '2024-10-05 13:04:54'),
	(11, 'Envío de Carga', '2024-10-05 13:06:01', '2024-10-05 13:06:01');

-- Volcando estructura para tabla traking-system.transactions
CREATE TABLE IF NOT EXISTS `transactions` (
  `id` bigint unsigned NOT NULL AUTO_INCREMENT,
  `payment_method_id` bigint unsigned NOT NULL,
  `amount` decimal(10,2) NOT NULL,
  `status` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`),
  KEY `transactions_payment_method_id_foreign` (`payment_method_id`),
  CONSTRAINT `transactions_payment_method_id_foreign` FOREIGN KEY (`payment_method_id`) REFERENCES `payment_methods` (`id`) ON DELETE CASCADE
) ENGINE=InnoDB AUTO_INCREMENT=5 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- Volcando datos para la tabla traking-system.transactions: ~4 rows (aproximadamente)
INSERT INTO `transactions` (`id`, `payment_method_id`, `amount`, `status`, `created_at`, `updated_at`) VALUES
	(1, 1, 100.00, 'pagado', '2024-09-04 12:40:33', '2024-09-04 12:40:33'),
	(2, 2, 200.00, 'pendiente', '2024-09-04 12:44:05', '2024-09-04 12:44:05'),
	(3, 1, 200.00, 'pagado', '2024-09-04 13:22:46', '2024-09-04 13:22:46'),
	(4, 3, 300.00, 'pendiente', '2024-09-04 13:24:23', '2024-09-04 13:24:23');

-- Volcando estructura para tabla traking-system.users
CREATE TABLE IF NOT EXISTS `users` (
  `id` bigint unsigned NOT NULL AUTO_INCREMENT,
  `cliente_id` bigint unsigned DEFAULT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email_verified_at` timestamp NULL DEFAULT NULL,
  `password` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `remember_token` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`),
  UNIQUE KEY `users_email_unique` (`email`)
) ENGINE=InnoDB AUTO_INCREMENT=41 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- Volcando datos para la tabla traking-system.users: ~26 rows (aproximadamente)
INSERT INTO `users` (`id`, `cliente_id`, `name`, `email`, `email_verified_at`, `password`, `remember_token`, `created_at`, `updated_at`) VALUES
	(1, NULL, 'Carlos xón', 'tacnoserviciosx@gmail.com', NULL, '$2y$12$HXS0KaUcCunks.CuA1I0cOe3Xl9k5kNPTamVrwVE994Hndw7tG6Ea', 'GmH7wDrD3fH2sHFAMs9XemGwiAX5j2PyBOJJ7F8EjnkHkYyqQcmpd94vxTpS', '2024-08-28 10:34:39', '2024-08-29 11:28:34'),
	(4, NULL, 'prueba', 'prueba11@gmail.com', NULL, '$2y$12$6DVqre3rR.BfpSWj27FxO.sDTDd29JjuMbZzWQqo28ZGbvQA99VO.', 'oLXWddrGge6wNNaP8GAxZ9J9ekIJ5Orw4WtRMWDTGjJ7WDakhLWBKMmfn53g', '2024-08-29 10:26:34', '2024-08-29 11:26:03'),
	(5, NULL, 'Carlosxon', 'tecnoservicesx@gmail.com', NULL, '$2y$12$zd299S.rcSMnfMW64OJ4PeSZ7NIgWxvAnJE8ybzpWBGZpFTSZIwAa', NULL, '2024-08-29 10:50:26', '2024-08-29 10:50:26'),
	(11, NULL, 'prueba4', 'prueba4@gmail.com', NULL, '$2y$12$sOu3tSkbfo8zS9JcND8DPOj4MNiRhaky5MZQ1IuyRxnYxotH2FRuS', NULL, '2024-08-29 11:18:37', '2024-08-29 11:18:37'),
	(12, NULL, 'juan', 'juan@gmail.com', NULL, '$2y$12$7y8HR/6/.fQlNjFjiQlxsOJ2o9jYffMj6nBk6KIl3Gultit9hftFK', NULL, '2024-08-29 11:31:28', '2024-08-30 03:43:05'),
	(13, NULL, 'elmer lux', 'elmer@gmail.com', NULL, '$2y$12$CWjvHwkLYxGIivyJl2aQgOwsBI5Ok45GRFfll7AqlQJcVdmh2WMb2', NULL, '2024-10-05 19:35:31', '2024-10-05 19:35:31'),
	(14, NULL, 'carlos', 'prueba3@gmail.com', NULL, '$2y$12$dJT9nu9Ux0th.DCdxZPVcOoaUbSV4VGFOk0ax4PYGzflwJngw/k7y', NULL, '2024-10-23 00:40:29', '2024-10-23 00:40:29'),
	(16, NULL, 'jose', 'prueba5@gmail.com', NULL, '$2y$12$B2yKwyY0hH1EYrQwJngi8edBGJ/.RAddhqtFWeFVti.tN.dQcp0yS', NULL, '2024-10-23 00:53:38', '2024-10-23 00:53:38'),
	(17, NULL, 'jose', 'prueba6@gmail.com', NULL, '$2y$12$eXMfPufuDkT1Yhat95XpYuQdZtD4xG5PSjQ3.6PkGBN3IHukl6wX6', NULL, '2024-10-23 01:18:24', '2024-10-23 01:18:24'),
	(18, NULL, 'jose', 'prueba7@gmail.com', NULL, '$2y$12$ALBKfBaYAz23JJO.6ulGMefFqtaH2/3bJIEIPLs1NUE.VUvjrQSz2', NULL, '2024-10-23 01:21:17', '2024-10-23 01:21:17'),
	(19, NULL, 'jose', 'prueba10@gmail.com', NULL, '$2y$12$38MJd6aX6wI55hfGOes4xOQmfNpvFmebTtIeFT.tgRzjY.PjcE8gO', NULL, '2024-10-23 01:37:37', '2024-10-23 01:37:37'),
	(20, NULL, 'admin', 'prueba12@gmail.com', NULL, '$2y$12$eh83MjlKtupBVitHWaXraOcj.rdSFg5L8lKVzzqT6FWWYfUjkSg6S', NULL, '2024-10-23 01:40:07', '2024-10-23 01:40:07'),
	(21, NULL, 'admin', 'prueba13@gmail.com', NULL, '$2y$12$tgscKKsTuXC5e5z2FPIj/.GNl8ThtHgTNvhe.r/3AFbQ.YuH.wrHK', NULL, '2024-10-23 01:43:08', '2024-10-23 01:43:08'),
	(22, NULL, 'admin', 'prueba15@gmail.com', NULL, '$2y$12$9ZG2NYqXMmoF/dfBEF8vduaT4J8MIqT6rhW9ybfadMWdulnHxUssm', NULL, '2024-10-23 02:54:18', '2024-10-23 02:54:18'),
	(23, NULL, 'admin', 'prueba16@gmail.com', NULL, '$2y$12$5xHj276OGFOf2PDDv9JruOpu8h2z3Z7X9QcCZq3myK8hqJtMVzVUu', NULL, '2024-10-23 03:15:23', '2024-10-23 03:15:23'),
	(24, NULL, 'admin', 'prueba17@gmail.com', NULL, '$2y$12$pABPeCZbFA1qa.m4Jy1cO.LX4XM2FyGBQjb4AzblZZpTqOxk.fYDu', NULL, '2024-10-23 03:19:36', '2024-10-23 03:19:36'),
	(25, NULL, 'admin', 'prueba18@gmail.com', NULL, '$2y$12$8AQ1mC7HA2yCm/hAqI6w7Ojl3MYF9tTZzAN5lDy6WsYAdq89X0.QK', NULL, '2024-10-23 03:27:32', '2024-10-23 03:27:32'),
	(26, NULL, 'admin', 'prueba19@gmail.com', NULL, '$2y$12$4qtmssHPq1pojLShzC8OCeedwWKykXGB.WpeDMAt7D334CgK19VSO', NULL, '2024-10-23 03:36:46', '2024-10-23 03:36:46'),
	(27, NULL, 'Carlos Bernardo', 'prueba21@gmail.com', NULL, '$2y$12$CerWJXfWQivmGeqY8v2qJu72T7i9D4OAdHpeL6DNVx/MS0AaiATGG', NULL, '2024-10-24 03:45:09', '2024-10-24 03:45:09'),
	(28, NULL, 'Bernardo Xon', 'bernardox@gmail.com', NULL, '$2y$12$g02OFMCnhBv0POIzXE9EkORENNE0LdYiO14cLbPFeQ8Wd.6bC19eS', NULL, '2024-10-24 08:42:28', '2024-10-24 08:42:28'),
	(29, NULL, 'Carlos Bernardo', 'prueba26@gmail.com', NULL, '$2y$12$jHFb7NE5fhd6HCjtMqpcde5vRf3HUClMbJ5CPAJNFT7gP3EgTj1XK', NULL, '2024-10-24 08:49:56', '2024-10-24 08:49:56'),
	(30, NULL, 'Bernard Xon2', 'bernardo2@gmail.com', NULL, '$2y$12$DzpwKQBB4WQbWFPjHHYC.umRiT.fsZc2XsS.N30Hnw6CGBFC2UxZO', NULL, '2024-10-25 00:17:06', '2024-10-25 00:17:06'),
	(31, 26, 'Bernardo Xon3', 'bernardo3@gmail.com', NULL, '$2y$12$hkk3z8wKbcC9IwjcBKB9Cug1RgIRyta.ak3bP9Kzqsx/OC3uA0p6u', NULL, '2024-10-25 00:19:08', '2024-10-25 00:19:08'),
	(32, 27, 'Bernardo Xon4', 'bernardo4@gmail.com', NULL, '$2y$12$JQtyEzuaMkBToAJ1DtwZnekuZqUZo5rNCCqfXi5bHhhMdS5QhErIW', NULL, '2024-10-25 02:29:17', '2024-10-25 02:29:17'),
	(33, 28, 'prueba', 'cliente@gmail.com', NULL, '$2y$12$e8Rvh/OUzN5PGNqMybLNze4qBAbAJ3ESjDvvOeluyYKq6zsI9nLSq', NULL, '2024-10-25 03:57:37', '2024-10-25 03:57:37'),
	(34, NULL, 'Repartidor1', 'repartidor@gmail.com', NULL, '$2y$12$t1HLAdB3Q1y7gwg2XucpY.ordvEPTyCoWOkgFm5sF.hxcHY4eat.y', NULL, '2024-10-26 04:20:03', '2024-10-26 04:20:03'),
	(35, NULL, 'Repartidor', 'repartidort2@gmail.com', NULL, '$2y$12$dbfL1OW5Lerfh3K7dxi0T.tAt4OpiawnhAhDuMGJg6SxNb8iTtrN.', NULL, '2024-10-26 10:53:27', '2024-10-26 10:53:27'),
	(36, NULL, 'lucas', 'lucas1@gmail.com', NULL, '$2y$12$5EQ9xnsFOvKD7YAwWmh63OZkarWlt8axf8bDMb5eNwv7Fi6VKM4Mm', NULL, '2024-10-26 10:54:52', '2024-10-26 10:54:52'),
	(37, NULL, 'juan', 'Juan2@gmail.com', NULL, '$2y$12$gR8v7Ub6TZ969tz5JMRWCObeNooAnZ7h5w7EHvKNo4kImZTepvOsS', NULL, '2024-10-26 11:02:14', '2024-10-26 11:02:14'),
	(38, 29, 'jose lopez', 'jose@gmail.com', NULL, '$2y$12$W3/UkYhVfotp4.imPM1y9.iWsLIS7WRYj4qzyovPoOAqLv1SVvEXW', NULL, '2024-10-26 11:52:53', '2024-10-26 11:52:53'),
	(39, 30, 'Juan Erick', 'Juan3@gmail.com', NULL, '$2y$12$JAvUu9UsIq0SB5eJEqbTM.FTUZ74GRVlUhUfRy1drxpuoySnXg9qC', NULL, '2024-10-26 20:05:02', '2024-10-26 20:05:02'),
	(40, NULL, 'elmer lux', 'elmerlux@gmail.com', NULL, '$2y$12$s9iHJJFjMUODqpn5zElrfuRr5YxAghhnZ0BcQYUcOSsJwjAtpvWkW', NULL, '2024-10-28 22:03:19', '2024-10-28 22:03:19');

/*!40103 SET TIME_ZONE=IFNULL(@OLD_TIME_ZONE, 'system') */;
/*!40101 SET SQL_MODE=IFNULL(@OLD_SQL_MODE, '') */;
/*!40014 SET FOREIGN_KEY_CHECKS=IFNULL(@OLD_FOREIGN_KEY_CHECKS, 1) */;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40111 SET SQL_NOTES=IFNULL(@OLD_SQL_NOTES, 1) */;
