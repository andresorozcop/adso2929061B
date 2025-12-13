-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Servidor: 127.0.0.1
-- Tiempo de generación: 06-12-2025 a las 01:24:02
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
-- Base de datos: `pokeadso`
--

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `gyms`
--

CREATE TABLE `gyms` (
  `id` int(11) NOT NULL,
  `name` varchar(32) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Volcado de datos para la tabla `gyms`
--

INSERT INTO `gyms` (`id`, `name`) VALUES
(4, 'Central Dojo'),
(5, 'Coastal Arena'),
(3, 'Instinct Gym'),
(2, 'Mystic Gym'),
(1, 'Valor Gym');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `pokemons`
--

CREATE TABLE `pokemons` (
  `id` int(11) NOT NULL,
  `name` varchar(32) NOT NULL,
  `type` varchar(32) NOT NULL,
  `strenght` int(11) NOT NULL,
  `stamina` int(11) NOT NULL,
  `speed` int(11) NOT NULL,
  `accuracy` int(11) NOT NULL,
  `trainer_id` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Volcado de datos para la tabla `pokemons`
--

INSERT INTO `pokemons` (`id`, `name`, `type`, `strenght`, `stamina`, `speed`, `accuracy`, `trainer_id`) VALUES
(1, 'Charizard', 'Fire/Flying', 95, 78, 84, 88, 1),
(2, 'Pikachu', 'Electric', 55, 40, 90, 92, 1),
(3, 'Starmie', 'Water/Psychic', 75, 65, 85, 90, 2),
(4, 'Psyduck', 'Water', 48, 60, 43, 50, 2),
(5, 'Onix', 'Rock/Ground', 85, 110, 30, 60, 3),
(6, 'Vulpix', 'Fire', 40, 38, 65, 70, 7),
(7, 'Gengar', 'Ghost/Poison', 80, 60, 110, 95, 4),
(8, 'Alakazam', 'Psychic', 50, 45, 120, 99, 4),
(9, 'Magnemite', 'Electric/Steel', 30, 34, 45, 70, 5),
(10, 'Electabuzz', 'Electric', 83, 65, 105, 85, 5),
(11, 'Gyarados', 'Water/Flying', 125, 95, 81, 75, 9),
(12, 'Machamp', 'Fighting', 130, 90, 55, 80, 3),
(13, 'Lapras', 'Water/Ice', 85, 115, 60, 82, 8),
(14, 'Growlithe', 'Fire', 70, 60, 72, 78, 7),
(15, 'Dratini', 'Dragon', 64, 50, 72, 68, 10),
(16, 'Bulbasaur', 'Grass/Poison', 49, 65, 45, 80, 6),
(17, 'Oddish', 'Grass/Poison', 50, 55, 30, 60, 6),
(18, 'Eevee', 'Normal', 55, 50, 55, 85, 10),
(19, 'Snorlax', 'Normal', 110, 160, 30, 65, 7),
(20, 'Scyther', 'Bug/Flying', 110, 70, 105, 88, 9);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `trainers`
--

CREATE TABLE `trainers` (
  `id` int(11) NOT NULL,
  `name` varchar(32) NOT NULL,
  `level` int(11) NOT NULL,
  `gym_id` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Volcado de datos para la tabla `trainers`
--

INSERT INTO `trainers` (`id`, `name`, `level`, `gym_id`) VALUES
(1, 'Ash Ketchum', 25, 1),
(2, 'Misty Waters', 22, 5),
(3, 'Brock Stone', 24, 4),
(4, 'Luna Mystic', 30, 2),
(5, 'Spark Zap', 18, 3),
(6, 'Iris Bloom', 20, 2),
(7, 'Diego Ferro', 27, 1),
(8, 'Nora Tide', 16, 5),
(9, 'Hector Blaze', 29, 4),
(10, 'Zoe Quick', 19, 3);

--
-- Índices para tablas volcadas
--

--
-- Indices de la tabla `gyms`
--
ALTER TABLE `gyms`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `name` (`name`);

--
-- Indices de la tabla `pokemons`
--
ALTER TABLE `pokemons`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `name` (`name`),
  ADD KEY `trainer_id` (`trainer_id`);

--
-- Indices de la tabla `trainers`
--
ALTER TABLE `trainers`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `name` (`name`),
  ADD KEY `gym_id` (`gym_id`);

--
-- AUTO_INCREMENT de las tablas volcadas
--

--
-- AUTO_INCREMENT de la tabla `gyms`
--
ALTER TABLE `gyms`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT de la tabla `pokemons`
--
ALTER TABLE `pokemons`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=21;

--
-- AUTO_INCREMENT de la tabla `trainers`
--
ALTER TABLE `trainers`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- Restricciones para tablas volcadas
--

--
-- Filtros para la tabla `pokemons`
--
ALTER TABLE `pokemons`
  ADD CONSTRAINT `pokemons_ibfk_1` FOREIGN KEY (`trainer_id`) REFERENCES `trainers` (`id`);

--
-- Filtros para la tabla `trainers`
--
ALTER TABLE `trainers`
  ADD CONSTRAINT `trainers_ibfk_1` FOREIGN KEY (`gym_id`) REFERENCES `gyms` (`id`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
