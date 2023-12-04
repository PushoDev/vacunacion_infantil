-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Servidor: 127.0.0.1
-- Tiempo de generación: 04-12-2023 a las 17:29:52
-- Versión del servidor: 10.4.28-MariaDB
-- Versión de PHP: 8.2.4

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de datos: `vacunacion_infantil`
--

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `historialvacunacion`
--

CREATE TABLE `historialvacunacion` (
  `id` int(11) NOT NULL,
  `paciente_id` int(11) NOT NULL,
  `vacuna_id` int(11) NOT NULL,
  `fecha_dosis_1` date DEFAULT NULL,
  `lote_dosis_1` varchar(50) DEFAULT NULL,
  `fecha_dosis_2` date DEFAULT NULL,
  `lote_dosis_2` varchar(50) DEFAULT NULL,
  `fecha_dosis_3` date DEFAULT NULL,
  `lote_dosis_3` varchar(50) DEFAULT NULL,
  `fecha_refuerzo` date DEFAULT NULL,
  `lote_refuerzo` varchar(50) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `migrations`
--

CREATE TABLE `migrations` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `version` varchar(255) NOT NULL,
  `class` varchar(255) NOT NULL,
  `group` varchar(255) NOT NULL,
  `namespace` varchar(255) NOT NULL,
  `time` int(11) NOT NULL,
  `batch` int(11) UNSIGNED NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_general_ci;

--
-- Volcado de datos para la tabla `migrations`
--

INSERT INTO `migrations` (`id`, `version`, `class`, `group`, `namespace`, `time`, `batch`) VALUES
(1, '2023-12-02-195407', 'App\\Database\\Migrations\\TUsuarios', 'default', 'App', 1701548177, 1);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `pacientes`
--

CREATE TABLE `pacientes` (
  `id` int(11) NOT NULL,
  `nombre` varchar(255) NOT NULL,
  `apellidos` varchar(255) NOT NULL,
  `c_identidad` varchar(20) NOT NULL,
  `sexo` enum('Masculino','Femenino') NOT NULL,
  `consultorio` varchar(50) NOT NULL,
  `diresidencial` varchar(255) NOT NULL,
  `telf_contacto` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `t_usuarios`
--

CREATE TABLE `t_usuarios` (
  `id_usuario` int(5) UNSIGNED NOT NULL,
  `nombre` varchar(100) NOT NULL,
  `apellidos` varchar(100) NOT NULL,
  `cargo` varchar(50) NOT NULL,
  `e_mail` varchar(100) NOT NULL,
  `usuario` varchar(50) NOT NULL,
  `password` varchar(255) NOT NULL,
  `type_usuario` enum('admin','usuario') NOT NULL DEFAULT 'usuario'
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_general_ci;

--
-- Volcado de datos para la tabla `t_usuarios`
--

INSERT INTO `t_usuarios` (`id_usuario`, `nombre`, `apellidos`, `cargo`, `e_mail`, `usuario`, `password`, `type_usuario`) VALUES
(1, 'Luis Alberto', 'Guisado', 'Desarrollador', 'bethocubans1990@hotmail.com', 'pusho.dev', '$2y$10$fpnoolUVsscX6n4S/DLRQO0SqRyY4xc1TSwJr49og5xtiRWlTCjL6', 'admin'),
(2, 'Ana', 'Gómez', 'Doctora', 'ana@example.com', 'anita', '$2y$10$Z0KKPutHAbKnbzymHK4utOgoY4ltHDYSyMnBDmPK/ZrFOu9xNwVkS', 'usuario');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `vacunas`
--

CREATE TABLE `vacunas` (
  `id` int(11) NOT NULL,
  `nombre` varchar(255) NOT NULL,
  `dosis_1` varchar(50) NOT NULL,
  `dosis_2` varchar(50) NOT NULL,
  `dosis_3` varchar(50) NOT NULL,
  `refuerzo` varchar(50) NOT NULL,
  `dosis_ml` varchar(50) NOT NULL,
  `via` varchar(50) NOT NULL,
  `region_aplicacion` varchar(50) NOT NULL,
  `lugar_aplicacion` varchar(50) NOT NULL,
  `resumen` text NOT NULL,
  `imagen` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Volcado de datos para la tabla `vacunas`
--

INSERT INTO `vacunas` (`id`, `nombre`, `dosis_1`, `dosis_2`, `dosis_3`, `refuerzo`, `dosis_ml`, `via`, `region_aplicacion`, `lugar_aplicacion`, `resumen`, `imagen`) VALUES
(1, 'BCG', 'Al nacer', '-----', '-----', '-----', '0,05', 'ID', 'Deltoides Izquierdo', 'Maternidad', 'Tuberculosis', ''),
(2, 'Heberbiovac HB', 'Al nacer', '-----', '-----', '-----', '0,5', 'IM', '1/3 medio de la cara antero-lateral del muslo', 'Maternidad', 'Hepatitis B', ''),
(3, 'Heberpenta-L', '2 meses', '4 meses', '6 meses', '18 meses', '0,5', 'IM', '1/3 medio de la cara antero-lateral del muslo. A l', 'Policlínicos', 'Difteria, Tosferina, Hepatitis B y Haemophilus Inf', ''),
(4, 'VAC-MENGOC-BC', '3 meses', '5 meses', '-----', '-----', '0,5', 'IM', '1/3 medio de la cara antero-lateral del muslo', 'Policlínicos', 'Meningococo B y C', ''),
(5, 'IPV', '4 meses', '8 meses', '-----', '-----', '0,1', 'Intradérmica', 'Deltoides Derecho', 'Policlínicos', 'Poliomielitis', ''),
(6, 'DTP-VAC', '2 meses', '4 meses', '6 meses', '18 meses', '0,5', 'Intramuscular', 'Deltoides', 'Policlínicos', 'Difteria, Tétanos y Tosferina', ''),
(7, 'Quimi-Hib', '2 meses', '4 meses', '6 meses', '18 meses', '0,5', 'Intramuscular', 'Deltoides', 'Policlínicos', 'Haemophilus Influenzae Tipo B', ''),
(8, 'PRS', '12 meses', '-----', '-----', '6 años', '0,5', 'Subcutánea', 'Deltoides', 'Policlínicos y Escuelas', 'Parotiditis, Rubéola y Sarampión', ''),
(9, 'VA-DIFTET', '-----', '-----', '-----', '6 años', '0,5', 'Intramuscular', 'Deltoides', 'Escuelas', 'Difteria y Tétanos', ''),
(10, 'Vax-TYVI', '10 años', '-----', '-----', '13 y 16 años', '0,5', 'Intramuscular', 'Deltoides', 'Escuelas', 'Fiebre Tifoidea', ''),
(11, 'Vax-TET', '-----', '-----', '-----', '14 años', '0,5', 'Intramuscular', 'Deltoides', 'Escuelas', 'Tétanos', ''),
(12, 'OPV', 'En campaña anual. Niños menores de 3 años y 9 años', 'En campaña anual. Niños menores de 3 años y 9 años', 'En campaña anual. Niños menores de 3 años y 9 años', 'En campaña anual. Niños menores de 3 años y 9 años', '2 gotas', 'Oral', '-----', 'Policlínicos y Consultorios', 'Poliomielitis', '');

--
-- Índices para tablas volcadas
--

--
-- Indices de la tabla `historialvacunacion`
--
ALTER TABLE `historialvacunacion`
  ADD PRIMARY KEY (`id`),
  ADD KEY `paciente_id` (`paciente_id`),
  ADD KEY `vacuna_id` (`vacuna_id`);

--
-- Indices de la tabla `migrations`
--
ALTER TABLE `migrations`
  ADD PRIMARY KEY (`id`);

--
-- Indices de la tabla `pacientes`
--
ALTER TABLE `pacientes`
  ADD PRIMARY KEY (`id`);

--
-- Indices de la tabla `t_usuarios`
--
ALTER TABLE `t_usuarios`
  ADD PRIMARY KEY (`id_usuario`);

--
-- Indices de la tabla `vacunas`
--
ALTER TABLE `vacunas`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT de las tablas volcadas
--

--
-- AUTO_INCREMENT de la tabla `historialvacunacion`
--
ALTER TABLE `historialvacunacion`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT de la tabla `migrations`
--
ALTER TABLE `migrations`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT de la tabla `pacientes`
--
ALTER TABLE `pacientes`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT de la tabla `t_usuarios`
--
ALTER TABLE `t_usuarios`
  MODIFY `id_usuario` int(5) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT de la tabla `vacunas`
--
ALTER TABLE `vacunas`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;

--
-- Restricciones para tablas volcadas
--

--
-- Filtros para la tabla `historialvacunacion`
--
ALTER TABLE `historialvacunacion`
  ADD CONSTRAINT `historialvacunacion_ibfk_1` FOREIGN KEY (`paciente_id`) REFERENCES `pacientes` (`id`),
  ADD CONSTRAINT `historialvacunacion_ibfk_2` FOREIGN KEY (`vacuna_id`) REFERENCES `vacunas` (`id`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
