-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Servidor: 127.0.0.1
-- Tiempo de generación: 28-05-2025 a las 19:21:42
-- Versión del servidor: 10.4.32-MariaDB
-- Versión de PHP: 8.2.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de datos: `base2`
--

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `tareas`
--

CREATE TABLE `tareas` (
  `id` int(11) NOT NULL,
  `usuario_id` int(11) NOT NULL,
  `titulo` varchar(255) NOT NULL,
  `descripcion` text DEFAULT NULL,
  `fecha_creacion` datetime DEFAULT current_timestamp(),
  `completada` tinyint(1) DEFAULT 0
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Volcado de datos para la tabla `tareas`
--

INSERT INTO `tareas` (`id`, `usuario_id`, `titulo`, `descripcion`, `fecha_creacion`, `completada`) VALUES
(6, 13, 'oso', 'Los osos o úrsidos (Ursidae) son una familia de mamíferos omnívoros.[1]​ Son animales de gran tamaño, generalmente omnívoros, ya que, a pesar de su temible dentadura, comen frutos, raíces e insectos, además de carne. Con sus pesados cuerpos y sus poderosas mandíbulas, los osos se encuentran entre los mayores carnívoros que viven en la Tierra.\r\n\r\nMientras que el oso polar es mayoritariamente carnívoro, debido a la escasez de otras fuentes de alimento, y se alimenta casi únicamente de carne (focas),[2]​ el panda gigante se alimenta casi por completo de bambú. Las seis especies restantes son omnívoras con dietas variadas', '2025-05-11 01:25:09', 1),
(7, 13, 'lol', 'jhjj', '2025-05-11 01:32:26', 0),
(9, 13, 'oso', 'sdkhsdkahhgdjhgakshhkda', '2025-05-11 12:58:40', 0),
(10, 13, 'fgffgdf', 'nggddhfhyjjkkkhfbdfhgdxvd', '2025-05-11 12:59:23', 0),
(11, 15, 'lobo', 'son grandes', '2025-05-11 13:03:27', 0),
(12, 13, 'lora', 'cansona y aburidora', '2025-05-11 13:28:33', 0),
(13, 13, 'lora', 'cansona y aburidora', '2025-05-11 13:33:53', 0),
(14, 13, 'lora', 'cansona y aburidora', '2025-05-11 13:34:51', 0),
(20, 16, 'jjhjkjllkjhghklkjh', 'kjhggvjhlkjhhjkhjfghj', '2025-05-13 17:10:47', 0),
(21, 16, 'pioioi', 'nmnbn', '2025-05-13 17:10:56', 0);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `usuarios`
--

CREATE TABLE `usuarios` (
  `id` int(11) NOT NULL,
  `nombre` varchar(100) NOT NULL,
  `correo` varchar(100) NOT NULL,
  `contrasena` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Volcado de datos para la tabla `usuarios`
--

INSERT INTO `usuarios` (`id`, `nombre`, `correo`, `contrasena`) VALUES
(9, 'yoha', 'yoha@gmail.com', '$2y$10$bysEG0jav87gtoxxRw5ryOyRQW8Bj7/mS7S4PrcglnCspSm1nNWxK'),
(11, 'yoha', 'losdb1223@gmail.com', '$2y$10$zNVeQfBQdV5OVEJvJZh1OOeeVCDh0kyMy7RUH48nTpb2B/fum1N5e'),
(13, 'geral', 'geral@gmail.com', '$2y$10$7yqGfwzwU1wLuOsAoQI9p.O9iDYGXnEwJpk7GIkvCxjf1K4LWVDYa'),
(15, 'yohan esneider', 'ymahevas@gmail.com', '$2y$10$uQOIV9BUN1.PI6P8MexknOzMyie9H2GfB1ZdKm/7KWgNjbtW2p47O'),
(16, 'yohan', 'y.mahecha@gemail.com', '$2y$10$tQqWWYG7zirFSJNHYjzGIOP1xCoDu0gScmImJAUdhBepjh3zAQ8mi'),
(17, 'james', 'james@gmail.com', '$2y$10$c9itPPneL0FaJUvZKTEoju9T1k5CV9AL21HTLcnwYQtLOHLkNUrOa');

--
-- Índices para tablas volcadas
--

--
-- Indices de la tabla `tareas`
--
ALTER TABLE `tareas`
  ADD PRIMARY KEY (`id`),
  ADD KEY `usuario_id` (`usuario_id`);

--
-- Indices de la tabla `usuarios`
--
ALTER TABLE `usuarios`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `correo` (`correo`);

--
-- AUTO_INCREMENT de las tablas volcadas
--

--
-- AUTO_INCREMENT de la tabla `tareas`
--
ALTER TABLE `tareas`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=23;

--
-- AUTO_INCREMENT de la tabla `usuarios`
--
ALTER TABLE `usuarios`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=18;

--
-- Restricciones para tablas volcadas
--

--
-- Filtros para la tabla `tareas`
--
ALTER TABLE `tareas`
  ADD CONSTRAINT `tareas_ibfk_1` FOREIGN KEY (`usuario_id`) REFERENCES `usuarios` (`id`) ON DELETE CASCADE;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
