-- phpMyAdmin SQL Dump
-- version 4.8.0.1
-- https://www.phpmyadmin.net/
--
-- Servidor: 127.0.0.1
-- Tiempo de generación: 13-07-2019 a las 12:11:19
-- Versión del servidor: 10.1.32-MariaDB
-- Versión de PHP: 7.2.5

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de datos: `biketour`
--

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `gbtweb_image`
--

CREATE TABLE `gbtweb_image` (
  `tour_id` int(11) NOT NULL,
  `name` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Volcado de datos para la tabla `gbtweb_image`
--

INSERT INTO `gbtweb_image` (`tour_id`, `name`) VALUES
(97, 'Centro1'),
(97, 'Centro2'),
(97, 'Centro3'),
(97, 'Centro4');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `gbtweb_tour`
--

CREATE TABLE `gbtweb_tour` (
  `id_tour` int(11) NOT NULL,
  `name` varchar(255) NOT NULL,
  `description` text NOT NULL,
  `cover` varchar(40) NOT NULL,
  `price` float NOT NULL,
  `schedule` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Volcado de datos para la tabla `gbtweb_tour`
--

INSERT INTO `gbtweb_tour` (`id_tour`, `name`, `description`, `cover`, `price`, `schedule`) VALUES
(97, 'Recorrido al centro 1', 'Un recorrido en bicicleta es una forma especial de descubrir y conocer la ciudad. Te invitamos a descubrir la gran ciudad de Guadalajara con nosotros. Sienta el alma de la ciudad, conduzca por las calles concurridas y aprenda sobre su increíble historia, así como sobre la cultura y el estilo de vida de los mexicanos. 14 km por Guadalajara y sus lugares más interesantes. Además, una visita obligada a una Cantina típica mexicana, así como un taco no se puede perder.', 'Centro3', 400, '10:30 y 15:30 de Noviembre a Febrero y 10:30 y 17:00 y de Marzo a Octubre.'),
(98, 'Recorrido al centro 2', 'Comenzamos nuestro recorrido con las bicicletas y paramos para comer un desayuno típico mexicano. Luego continuamos nuestro recorrido por los diferentes distritos de la ciudad. Así podemos conocer más sobre la historia y descubrir edificios típicos \\\"tapatíos\\\". Las próximas paradas nos lleva a comer Carne en su jugo y el plato típico de Guadalajara, la torta ahogada. Durante todo el recorrido le daremos información sobre los distritos y la comida.', 'Centro1', 700, 'Martes a sábado, a las 11:00am.'),
(99, 'Kite Buggy en la Laguna', '¡Deja que el viento te guíe! Juntos salimos de la ciudad hacia la Laguna Seca de Sayula, a un lugar increíble. Junto a la carretera se encuentra la laguna, rodeada de montañas pequeñas, y estamos en medio de un campo de polvo y arena. Tan pronto como sepas cómo manejar el kite, corres a través de la laguna. Al final, disfrutamos una puesta de sol impresionante, lejos de la gran ciudad ocupada.', 'BiciM1', 800, 'Empieza en nuestra oficina a las 15:00pm.\\nTemporada de Kite empieza febrero.'),
(100, 'Ciclismo de montaña en el bosque de la primavera', 'Juntos conducimos con el coche hacia el Bosque de la Primavera. El bosque de la primavera también lo llaman el pulmón de Guadalajara. En más de 20.000 hectáreas se pueden encontrar varias rutas de senderismo y ciclismo. Dependiendo su experiencia en ciclismo de montaña, elegimos una de las diferentes rutas. La ruta nos lleva a través del bosque cuesta arriba y cuesta abajo sobre árboles y rocas. Ocasionalmente nos detenemos para disfrutar de la vista o para tomar un breve descanso. Al final disfrutamos una cerveza.', 'BiciM2', -1, 'Cada fin de semana a las 09:00 am\r\nA petición durante la semana'),
(101, 'Visita de una cervecería artesanal y lucha libre', 'Juntos exploramos una cervecería local de Guadalajara. La fábrica y el restaurante están uno al lado del otro, lo que nos da la oportunidad de conocer la producción local de cerveza y cenar con delicadeza. En 2012, comenzó la historia de la cervecería Loba, que ahora es un lugar de encuentro popular para muchos amantes de la cerveza. Después de probar diferentes cervezas y fortificarnos con una deliciosa cena, nos dirigimos al Arena Coliseo donde veremos Lucha Libre, el combate de lucha libre mexicana. Esta es una experiencia única que no debe faltar en ningún viaje a México. Los luchadores se disfrazan unos contra otros y muestran sus trucos.', 'Chilaquiles Food Tour', 900, 'Cada martes a las 18:00 pm');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `gbtweb_tourinclude`
--

CREATE TABLE `gbtweb_tourinclude` (
  `tour_id` int(11) NOT NULL,
  `item` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Volcado de datos para la tabla `gbtweb_tourinclude`
--

INSERT INTO `gbtweb_tourinclude` (`tour_id`, `item`) VALUES
(97, 'Renta de bicicleta'),
(97, 'Casco y chaleco'),
(97, 'Guía'),
(97, 'Botella de agua'),
(97, 'Cerveza'),
(97, 'Taco'),
(98, 'Renta de bicicleta\r\n'),
(98, 'Casco y chaleco'),
(98, 'Guía'),
(98, 'Botella de agua'),
(98, 'Cuatro platos'),
(98, 'Un postre'),
(98, '3 bebidas');

--
-- Índices para tablas volcadas
--

--
-- Indices de la tabla `gbtweb_tour`
--
ALTER TABLE `gbtweb_tour`
  ADD PRIMARY KEY (`id_tour`);

--
-- AUTO_INCREMENT de las tablas volcadas
--

--
-- AUTO_INCREMENT de la tabla `gbtweb_tour`
--
ALTER TABLE `gbtweb_tour`
  MODIFY `id_tour` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=102;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
