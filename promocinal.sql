-- phpMyAdmin SQL Dump
-- version 4.5.4.1deb2ubuntu2
-- http://www.phpmyadmin.net
--
-- Servidor: localhost
-- Tiempo de generación: 27-05-2017 a las 14:09:49
-- Versión del servidor: 5.7.18-0ubuntu0.16.04.1
-- Versión de PHP: 7.0.15-0ubuntu0.16.04.4

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de datos: `promocinal`
--

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `chair`
--

CREATE TABLE `chair` (
  `id` int(11) NOT NULL,
  `rooms_id` int(11) NOT NULL,
  `row` varchar(45) NOT NULL,
  `column` varchar(45) NOT NULL,
  `status` varchar(45) NOT NULL,
  `chairType_id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `chairType`
--

CREATE TABLE `chairType` (
  `id` int(11) NOT NULL,
  `description` varchar(45) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `cinema`
--

CREATE TABLE `cinema` (
  `id` int(11) NOT NULL,
  `name` varchar(45) NOT NULL,
  `address` varchar(45) NOT NULL,
  `city` varchar(45) NOT NULL,
  `status` varchar(45) NOT NULL,
  `2DGeneral` float NOT NULL,
  `3DGeneral` float NOT NULL,
  `2DPreferencial` float NOT NULL,
  `3DPreferencial` float NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Volcado de datos para la tabla `cinema`
--

INSERT INTO `cinema` (`id`, `name`, `address`, `city`, `status`, `2DGeneral`, `3DGeneral`, `2DPreferencial`, `3DPreferencial`) VALUES
(1, 'cinema1', 'calle 22 # 33-12', 'los angeles', 'available', 4, 6, 7, 10);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `dayType`
--

CREATE TABLE `dayType` (
  `id` int(11) NOT NULL,
  `description` varchar(45) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `gender`
--

CREATE TABLE `gender` (
  `movies_id` int(11) NOT NULL,
  `type` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `language`
--

CREATE TABLE `language` (
  `movies_id` int(11) NOT NULL,
  `language` varchar(20) NOT NULL,
  `subtitle` varchar(45) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `movies`
--

CREATE TABLE `movies` (
  `id` int(11) NOT NULL,
  `name` varchar(45) NOT NULL,
  `info` longtext NOT NULL,
  `rating` int(11) DEFAULT NULL,
  `duration` int(11) NOT NULL,
  `date_start` date NOT NULL,
  `date_finish` date NOT NULL,
  `status` varchar(45) NOT NULL,
  `moviesType_id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `moviesType`
--

CREATE TABLE `moviesType` (
  `id` int(11) NOT NULL,
  `description` varchar(45) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `permissions`
--

CREATE TABLE `permissions` (
  `users_id` int(11) NOT NULL,
  `roles_id` int(11) NOT NULL,
  `createdAt` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  `updatedUp` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Volcado de datos para la tabla `permissions`
--

INSERT INTO `permissions` (`users_id`, `roles_id`, `createdAt`, `updatedUp`) VALUES
(75, 3, '2017-05-25 22:25:41', '2017-05-25 22:25:41'),
(77, 2, '2017-05-27 18:00:43', '2017-05-27 18:00:43'),
(78, 1, '2017-05-27 18:04:04', '2017-05-27 18:04:04'),
(79, 1, '2017-05-27 19:07:58', '2017-05-27 19:07:58');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `phoneCinema`
--

CREATE TABLE `phoneCinema` (
  `cinema_id` int(11) NOT NULL,
  `phone` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `phoneUser`
--

CREATE TABLE `phoneUser` (
  `users_id` int(11) NOT NULL,
  `phone` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `reservechair`
--

CREATE TABLE `reservechair` (
  `id` int(11) NOT NULL,
  `reserves_id` int(11) NOT NULL,
  `chair_id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `reserves`
--

CREATE TABLE `reserves` (
  `id` int(11) NOT NULL,
  `users_id` int(11) NOT NULL,
  `schedule_id` int(11) NOT NULL,
  `status` varchar(45) NOT NULL,
  `total` float NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `roles`
--

CREATE TABLE `roles` (
  `id` int(11) NOT NULL,
  `name` varchar(45) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Volcado de datos para la tabla `roles`
--

INSERT INTO `roles` (`id`, `name`) VALUES
(1, 'Client'),
(2, 'Employer'),
(3, 'Admin');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `rooms`
--

CREATE TABLE `rooms` (
  `id` int(11) NOT NULL,
  `cinema_id` int(11) NOT NULL,
  `name` varchar(45) NOT NULL,
  `chair_num` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `schedule`
--

CREATE TABLE `schedule` (
  `id` int(11) NOT NULL,
  `movies_id` int(11) NOT NULL,
  `rooms_id` int(11) NOT NULL,
  `schedule` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  `status` varchar(45) NOT NULL,
  `dayType_id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `users`
--

CREATE TABLE `users` (
  `id` int(11) NOT NULL,
  `username` varchar(20) NOT NULL,
  `password` varchar(45) NOT NULL,
  `name` varchar(45) NOT NULL,
  `last_name` varchar(45) DEFAULT NULL,
  `card` varchar(20) DEFAULT NULL,
  `age` int(11) DEFAULT NULL,
  `email` varchar(45) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Volcado de datos para la tabla `users`
--

INSERT INTO `users` (`id`, `username`, `password`, `name`, `last_name`, `card`, `age`, `email`) VALUES
(75, 'andres', '123', 'andres', 'posada', '123', NULL, 'andres.posada0919@gmail.com'),
(77, 'paltair', '123', 'juan', 'mariaca', '12312312', NULL, 'paltair@gmail.com'),
(78, 'leon', '1234', 'aslan', 'leon', '31212331', NULL, 'aslan@leon'),
(79, 'alexis123', '123', 'alexis', 'sanchez', '2312312', NULL, 'sanchez@gmail.com');

--
-- Índices para tablas volcadas
--

--
-- Indices de la tabla `chair`
--
ALTER TABLE `chair`
  ADD PRIMARY KEY (`id`,`rooms_id`,`chairType_id`),
  ADD UNIQUE KEY `id_UNIQUE` (`id`),
  ADD KEY `fk_chair_rooms1_idx` (`rooms_id`),
  ADD KEY `fk_chair_chairType1_idx` (`chairType_id`);

--
-- Indices de la tabla `chairType`
--
ALTER TABLE `chairType`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `id_UNIQUE` (`id`);

--
-- Indices de la tabla `cinema`
--
ALTER TABLE `cinema`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `id_UNIQUE` (`id`);

--
-- Indices de la tabla `dayType`
--
ALTER TABLE `dayType`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `id_UNIQUE` (`id`);

--
-- Indices de la tabla `gender`
--
ALTER TABLE `gender`
  ADD PRIMARY KEY (`movies_id`,`type`),
  ADD KEY `fk_gender_movies1_idx` (`movies_id`);

--
-- Indices de la tabla `language`
--
ALTER TABLE `language`
  ADD PRIMARY KEY (`movies_id`,`language`),
  ADD KEY `fk_language_movies1_idx` (`movies_id`);

--
-- Indices de la tabla `movies`
--
ALTER TABLE `movies`
  ADD PRIMARY KEY (`id`,`moviesType_id`),
  ADD KEY `fk_movies_moviesType1_idx` (`moviesType_id`);

--
-- Indices de la tabla `moviesType`
--
ALTER TABLE `moviesType`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `id_UNIQUE` (`id`);

--
-- Indices de la tabla `permissions`
--
ALTER TABLE `permissions`
  ADD PRIMARY KEY (`users_id`,`roles_id`),
  ADD KEY `fk_users_has_roles_roles1_idx` (`roles_id`),
  ADD KEY `fk_users_has_roles_users_idx` (`users_id`);

--
-- Indices de la tabla `phoneCinema`
--
ALTER TABLE `phoneCinema`
  ADD PRIMARY KEY (`cinema_id`,`phone`),
  ADD KEY `fk_telCinema_cinema1_idx` (`cinema_id`);

--
-- Indices de la tabla `phoneUser`
--
ALTER TABLE `phoneUser`
  ADD PRIMARY KEY (`users_id`,`phone`),
  ADD UNIQUE KEY `users_id_UNIQUE` (`users_id`);

--
-- Indices de la tabla `reservechair`
--
ALTER TABLE `reservechair`
  ADD PRIMARY KEY (`id`,`reserves_id`,`chair_id`),
  ADD UNIQUE KEY `id_UNIQUE` (`id`),
  ADD KEY `fk_reservechair_reserves1_idx` (`reserves_id`),
  ADD KEY `fk_reservechair_chair1_idx` (`chair_id`);

--
-- Indices de la tabla `reserves`
--
ALTER TABLE `reserves`
  ADD PRIMARY KEY (`id`,`users_id`,`schedule_id`),
  ADD UNIQUE KEY `id_UNIQUE` (`id`),
  ADD KEY `fk_users_has_movies_users1_idx` (`users_id`),
  ADD KEY `fk_reserves_schedule1_idx` (`schedule_id`);

--
-- Indices de la tabla `roles`
--
ALTER TABLE `roles`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `id_UNIQUE` (`id`);

--
-- Indices de la tabla `rooms`
--
ALTER TABLE `rooms`
  ADD PRIMARY KEY (`id`,`cinema_id`),
  ADD KEY `fk_rooms_cinema1_idx` (`cinema_id`);

--
-- Indices de la tabla `schedule`
--
ALTER TABLE `schedule`
  ADD PRIMARY KEY (`id`,`rooms_id`,`dayType_id`,`movies_id`),
  ADD UNIQUE KEY `id_UNIQUE` (`id`),
  ADD KEY `fk_movies_has_rooms_rooms1_idx` (`rooms_id`),
  ADD KEY `fk_movies_has_rooms_movies1_idx` (`movies_id`),
  ADD KEY `fk_schedule_dayType1_idx` (`dayType_id`);

--
-- Indices de la tabla `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `username_UNIQUE` (`username`),
  ADD UNIQUE KEY `id_UNIQUE` (`id`),
  ADD UNIQUE KEY `email_UNIQUE` (`email`),
  ADD UNIQUE KEY `cinemaCard_UNIQUE` (`card`);

--
-- AUTO_INCREMENT de las tablas volcadas
--

--
-- AUTO_INCREMENT de la tabla `chair`
--
ALTER TABLE `chair`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT de la tabla `chairType`
--
ALTER TABLE `chairType`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT de la tabla `cinema`
--
ALTER TABLE `cinema`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;
--
-- AUTO_INCREMENT de la tabla `dayType`
--
ALTER TABLE `dayType`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT de la tabla `movies`
--
ALTER TABLE `movies`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT de la tabla `moviesType`
--
ALTER TABLE `moviesType`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT de la tabla `phoneUser`
--
ALTER TABLE `phoneUser`
  MODIFY `users_id` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT de la tabla `reservechair`
--
ALTER TABLE `reservechair`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT de la tabla `reserves`
--
ALTER TABLE `reserves`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT de la tabla `roles`
--
ALTER TABLE `roles`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;
--
-- AUTO_INCREMENT de la tabla `rooms`
--
ALTER TABLE `rooms`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT de la tabla `schedule`
--
ALTER TABLE `schedule`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT de la tabla `users`
--
ALTER TABLE `users`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=80;
--
-- Restricciones para tablas volcadas
--

--
-- Filtros para la tabla `chair`
--
ALTER TABLE `chair`
  ADD CONSTRAINT `fk_chair_chairType1` FOREIGN KEY (`chairType_id`) REFERENCES `chairType` (`id`) ON DELETE NO ACTION ON UPDATE NO ACTION,
  ADD CONSTRAINT `fk_chair_rooms1` FOREIGN KEY (`rooms_id`) REFERENCES `rooms` (`id`) ON DELETE NO ACTION ON UPDATE NO ACTION;

--
-- Filtros para la tabla `gender`
--
ALTER TABLE `gender`
  ADD CONSTRAINT `fk_gender_movies1` FOREIGN KEY (`movies_id`) REFERENCES `movies` (`id`) ON DELETE NO ACTION ON UPDATE NO ACTION;

--
-- Filtros para la tabla `language`
--
ALTER TABLE `language`
  ADD CONSTRAINT `fk_language_movies1` FOREIGN KEY (`movies_id`) REFERENCES `movies` (`id`) ON DELETE NO ACTION ON UPDATE NO ACTION;

--
-- Filtros para la tabla `movies`
--
ALTER TABLE `movies`
  ADD CONSTRAINT `fk_movies_moviesType1` FOREIGN KEY (`moviesType_id`) REFERENCES `moviesType` (`id`) ON DELETE NO ACTION ON UPDATE NO ACTION;

--
-- Filtros para la tabla `permissions`
--
ALTER TABLE `permissions`
  ADD CONSTRAINT `fk_users_has_roles_roles1` FOREIGN KEY (`roles_id`) REFERENCES `roles` (`id`) ON DELETE NO ACTION ON UPDATE NO ACTION,
  ADD CONSTRAINT `fk_users_has_roles_users` FOREIGN KEY (`users_id`) REFERENCES `users` (`id`) ON DELETE NO ACTION ON UPDATE NO ACTION;

--
-- Filtros para la tabla `phoneCinema`
--
ALTER TABLE `phoneCinema`
  ADD CONSTRAINT `fk_telCinema_cinema1` FOREIGN KEY (`cinema_id`) REFERENCES `cinema` (`id`) ON DELETE NO ACTION ON UPDATE NO ACTION;

--
-- Filtros para la tabla `phoneUser`
--
ALTER TABLE `phoneUser`
  ADD CONSTRAINT `fk_phoneUser_users1` FOREIGN KEY (`users_id`) REFERENCES `users` (`id`) ON DELETE NO ACTION ON UPDATE NO ACTION;

--
-- Filtros para la tabla `reservechair`
--
ALTER TABLE `reservechair`
  ADD CONSTRAINT `fk_reservechair_chair1` FOREIGN KEY (`chair_id`) REFERENCES `chair` (`id`) ON DELETE NO ACTION ON UPDATE NO ACTION,
  ADD CONSTRAINT `fk_reservechair_reserves1` FOREIGN KEY (`reserves_id`) REFERENCES `reserves` (`id`) ON DELETE NO ACTION ON UPDATE NO ACTION;

--
-- Filtros para la tabla `reserves`
--
ALTER TABLE `reserves`
  ADD CONSTRAINT `fk_reserves_schedule1` FOREIGN KEY (`schedule_id`) REFERENCES `schedule` (`id`) ON DELETE NO ACTION ON UPDATE NO ACTION,
  ADD CONSTRAINT `fk_users_has_movies_users1` FOREIGN KEY (`users_id`) REFERENCES `users` (`id`) ON DELETE NO ACTION ON UPDATE NO ACTION;

--
-- Filtros para la tabla `rooms`
--
ALTER TABLE `rooms`
  ADD CONSTRAINT `fk_rooms_cinema1` FOREIGN KEY (`cinema_id`) REFERENCES `cinema` (`id`) ON DELETE NO ACTION ON UPDATE NO ACTION;

--
-- Filtros para la tabla `schedule`
--
ALTER TABLE `schedule`
  ADD CONSTRAINT `fk_movies_has_rooms_movies1` FOREIGN KEY (`movies_id`) REFERENCES `movies` (`id`) ON DELETE NO ACTION ON UPDATE NO ACTION,
  ADD CONSTRAINT `fk_movies_has_rooms_rooms1` FOREIGN KEY (`rooms_id`) REFERENCES `rooms` (`id`) ON DELETE NO ACTION ON UPDATE NO ACTION,
  ADD CONSTRAINT `fk_schedule_dayType1` FOREIGN KEY (`dayType_id`) REFERENCES `dayType` (`id`) ON DELETE NO ACTION ON UPDATE NO ACTION;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
