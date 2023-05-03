-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Servidor: 127.0.0.1
-- Tiempo de generación: 03-05-2023 a las 21:51:09
-- Versión del servidor: 10.4.22-MariaDB
-- Versión de PHP: 8.0.13

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de datos: `sports`
--

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `categorías`
--

CREATE TABLE `categorías` (
  `id_categoria` int(255) NOT NULL,
  `categoria` varchar(255) NOT NULL,
  `deporte` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `deportes`
--

CREATE TABLE `deportes` (
  `id_deporte` int(255) NOT NULL,
  `deporte` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Volcado de datos para la tabla `deportes`
--

INSERT INTO `deportes` (`id_deporte`, `deporte`) VALUES
(1, 'Atletismo'),
(3, 'Bádminton');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `noticias`
--

CREATE TABLE `noticias` (
  `id` int(15) UNSIGNED NOT NULL,
  `titulo` varchar(250) NOT NULL,
  `descripcion` varchar(500) NOT NULL,
  `texto` text NOT NULL,
  `fecha_alta` datetime NOT NULL,
  `imagen` mediumblob NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Volcado de datos para la tabla `noticias`
--

INSERT INTO `noticias` (`id`, `titulo`, `descripcion`, `texto`, `fecha_alta`, `imagen`) VALUES
(3, 'adawdawdawdawd', 'wwadwadadwawdawdawdawdaw', 'dawdawdwadadwawawdawwdawdaw', '2023-05-03 00:00:00', 0x4172726179),
(4, 'awdhahdiwhaidhiwahdiajidjalwd', 'adkuawhduhawildhliawjdiljawkdja', 'aduawhkudkhdkuhawudhawukhdkuawd', '2023-05-03 00:00:00', 0x4172726179),
(5, 'GHISTAIDNAHIWDJAWD', 'SOY MUY CAPOOOOOOOOOO', 'WAZA INSANOS ATACAN BERMUDA CON EL FIN DE CONQUISTAR CHAKALITAS FF', '2023-05-03 00:00:00', 0x4172726179),
(6, 'RICARDO MARTINEZ', 'SOY BIPOLAR', 'NOSE PORQUE HAGO ESTO SI LA PAGA ES MALA', '2023-05-03 00:00:00', 0x4172726179),
(7, 'prueba 1', 'es solo una prueba ', 'nada mas no joda', '2023-05-03 09:39:06', 0x4172726179),
(8, 'prueba 2', 'ni modo segunda prueba', 'aahsauauwildwhawhiqd', '2023-05-03 09:39:44', 0x4172726179),
(9, 'tercera prueba', 'porfavor matenme', 'no puedo creer que esto sea un huevo de pascua', '2023-05-03 09:40:30', 0x4172726179),
(10, 'ESTO DEBE APARECER AL PRINCIPIO', 'nada', 'nada mas que decir', '2023-05-03 09:47:37', 0x4172726179);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `product`
--

CREATE TABLE `product` (
  `id` int(11) NOT NULL,
  `product` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Volcado de datos para la tabla `product`
--

INSERT INTO `product` (`id`, `product`) VALUES
(1, 'Fuchibol');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `roles`
--

CREATE TABLE `roles` (
  `id_rol` int(11) UNSIGNED NOT NULL,
  `rol` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Volcado de datos para la tabla `roles`
--

INSERT INTO `roles` (`id_rol`, `rol`) VALUES
(1, 'usuario'),
(2, 'administrador'),
(3, 'moderador');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `usuarios`
--

CREATE TABLE `usuarios` (
  `id` int(11) UNSIGNED NOT NULL,
  `user_name` varchar(50) NOT NULL,
  `contra` varchar(100) NOT NULL,
  `email` varchar(50) NOT NULL,
  `rol` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Volcado de datos para la tabla `usuarios`
--

INSERT INTO `usuarios` (`id`, `user_name`, `contra`, `email`, `rol`) VALUES
(6, 'Anitaxx', '276b6c4692e78d4799c12ada515bc3e4', 'peluka1709@gmail.com', 3),
(7, 'MikeNoble2905', 'e8494a1c9c7197508e5990872e417a0a', 'Mikemoble2905@gmail.com', 2),
(9, 'laydo', '76d80224611fc919a5d54f0ff9fba446', 'parditop404@gmail.com', 1),
(10, 'pardo', '76d80224611fc919a5d54f0ff9fba446', 'qwe@gmail.com', 2),
(11, 'weqe', '76d80224611fc919a5d54f0ff9fba446', 'er@gmail.com', 3);

--
-- Índices para tablas volcadas
--

--
-- Indices de la tabla `deportes`
--
ALTER TABLE `deportes`
  ADD PRIMARY KEY (`id_deporte`);

--
-- Indices de la tabla `noticias`
--
ALTER TABLE `noticias`
  ADD PRIMARY KEY (`id`);

--
-- Indices de la tabla `product`
--
ALTER TABLE `product`
  ADD PRIMARY KEY (`id`);

--
-- Indices de la tabla `roles`
--
ALTER TABLE `roles`
  ADD PRIMARY KEY (`id_rol`);

--
-- Indices de la tabla `usuarios`
--
ALTER TABLE `usuarios`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT de las tablas volcadas
--

--
-- AUTO_INCREMENT de la tabla `deportes`
--
ALTER TABLE `deportes`
  MODIFY `id_deporte` int(255) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT de la tabla `noticias`
--
ALTER TABLE `noticias`
  MODIFY `id` int(15) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- AUTO_INCREMENT de la tabla `product`
--
ALTER TABLE `product`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT de la tabla `roles`
--
ALTER TABLE `roles`
  MODIFY `id_rol` int(11) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT de la tabla `usuarios`
--
ALTER TABLE `usuarios`
  MODIFY `id` int(11) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=16;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
