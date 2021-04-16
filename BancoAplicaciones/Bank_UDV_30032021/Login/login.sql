-- phpMyAdmin SQL Dump
-- version 4.9.1
-- https://www.phpmyadmin.net/
--
-- Servidor: 127.0.0.1
-- Tiempo de generación: 11-10-2020 a las 04:09:10
-- Versión del servidor: 10.4.8-MariaDB
-- Versión de PHP: 7.1.33

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de datos: `login`
--

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `users`
--

CREATE TABLE `users` (
  `id` int(11) NOT NULL,
  `nombre_usuario` varchar(200) COLLATE utf8_spanish_ci NOT NULL,
  `email_usuario` varchar(200) COLLATE utf8_spanish_ci NOT NULL,
  `alias_usuario` varchar(200) COLLATE utf8_spanish_ci NOT NULL,
  `password` varchar(200) COLLATE utf8_spanish_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_spanish_ci;

--
-- Volcado de datos para la tabla `users`
--

INSERT INTO `users` (`id`, `nombre_usuario`, `email_usuario`, `alias_usuario`, `password`) VALUES
(1, 'kevyn', 'tote.kev@gmail.com', 'Tote', '$2y$10$6o8jyTwpkq3RBldy2LYDx.9QN2I1IqPB/OVGwO2jriAYI10MHjlOe'),
(2, 'kevyn', 'tote.kev@gmail.com', 'Tote', '$2y$10$f4538Y8HeRnXMFAA5AH3MuJ9gOK9D76Rshk95LduvwxUS7NVrOwpq'),
(3, 'kevyn', 'tote.kev@gmail.com', 'Tote', '$2y$10$HoKIQikF41KacFuQdlbZaeAXF2V56HcnnUhBWCPBKfZ2351NPaNP2'),
(4, 'kevyn', 'tote.kev@gmail.com', 'Tote', '$2y$10$PdwNDhNefnh4w3lLy3Wi7.g3MXN6mNU0HfQJ2yMN3EVMl79K6zfHm'),
(5, 'Salvador', 'tote.kev@gmail.com', 'salvador', '$2y$10$TJyJLFAmueVmSlUc0JO4tOLS8T0OqW2VxsMfxscpL7RIrrAnvFs8K'),
(6, 'maria', 'maria@gmail.com', 'maria', '$2y$10$tYbM2bkIfU1fV7XIdXjcku0689UyVwsIpCqe/oYU6YqWbSm7WQZxy');

--
-- Índices para tablas volcadas
--

--
-- Indices de la tabla `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT de las tablas volcadas
--

--
-- AUTO_INCREMENT de la tabla `users`
--
ALTER TABLE `users`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
