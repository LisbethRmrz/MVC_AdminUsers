-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Servidor: 127.0.0.1
-- Tiempo de generación: 17-03-2022 a las 16:06:04
-- Versión del servidor: 10.4.21-MariaDB
-- Versión de PHP: 8.0.10

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de datos: `admin_users`
--

CREATE DATABASE admin_users;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `cargos`
--

CREATE TABLE `cargos` (
  `id_cargo` int(11) NOT NULL,
  `nombre_cargo` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Volcado de datos para la tabla `cargos`
--

INSERT INTO `cargos` (`id_cargo`, `nombre_cargo`) VALUES
(1, 'Gerente'),
(2, 'Empleado'),
(3, 'Cliente');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `usuariocargo`
--

CREATE TABLE `usuariocargo` (
  `id_usuario_cargo` int(11) NOT NULL,
  `id_usuario` int(11) NOT NULL,
  `id_cargo` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `usuarios`
--

CREATE TABLE `usuarios` (
  `id_usuario` int(11) NOT NULL,
  `nombre_usuario` varchar(200) NOT NULL,
  `apellido_usuario` varchar(200) NOT NULL,
  `id_cargoUsuario` int(11) NOT NULL,
  `correo_usuario` varchar(300) NOT NULL,
  `contraseña_usuario` varchar(50) NOT NULL,
  `direccion_usuario` varchar(400) NOT NULL,
  `telefono_usuario` int(25) NOT NULL,
  `token` varchar(50) DEFAULT NULL,
  `activo` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Volcado de datos para la tabla `usuarios`
--

INSERT INTO `usuarios` (`id_usuario`, `nombre_usuario`, `apellido_usuario`, `id_cargoUsuario`, `correo_usuario`, `contraseña_usuario`, `direccion_usuario`, `telefono_usuario`, `token`, `activo`) VALUES
(1, 'Gerente', 'Apellido Gerente', 1, 'gerente@gmail.com', '123456', 'San Salvador', 77777777, NULL, 0),
(2, 'Empleado', 'Apellido Empleado', 2, 'empleado@gmail.com', '$empleado', 'La Libertad', 22334455, NULL, 0),
(3, 'Cliente1', 'Apellido Cliente1', 3, 'cliente@gmail.com', '@123456', 'Santa Ana', 73255432, NULL, 0),
(28, 'Cliente2', 'Apellido Cliente2', 3, 'cliente2@gmail.com', 'contrac2', 'Soyapango', 22336677, NULL, 0);

--
-- Índices para tablas volcadas
--

--
-- Indices de la tabla `cargos`
--
ALTER TABLE `cargos`
  ADD PRIMARY KEY (`id_cargo`);

--
-- Indices de la tabla `usuariocargo`
--
ALTER TABLE `usuariocargo`
  ADD PRIMARY KEY (`id_usuario_cargo`),
  ADD KEY `id_usuario` (`id_usuario`),
  ADD KEY `id_cargo` (`id_cargo`);

--
-- Indices de la tabla `usuarios`
--
ALTER TABLE `usuarios`
  ADD PRIMARY KEY (`id_usuario`),
  ADD KEY `cargo_usuario` (`id_cargoUsuario`),
  ADD KEY `id_cargoUsuario` (`id_cargoUsuario`);

--
-- AUTO_INCREMENT de las tablas volcadas
--

--
-- AUTO_INCREMENT de la tabla `cargos`
--
ALTER TABLE `cargos`
  MODIFY `id_cargo` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT de la tabla `usuariocargo`
--
ALTER TABLE `usuariocargo`
  MODIFY `id_usuario_cargo` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT de la tabla `usuarios`
--
ALTER TABLE `usuarios`
  MODIFY `id_usuario` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=29;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
