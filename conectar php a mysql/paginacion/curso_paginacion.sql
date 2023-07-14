-- --------------------------------------------------------
-- Host:                         127.0.0.1
-- Versión del servidor:         10.4.28-MariaDB - mariadb.org binary distribution
-- SO del servidor:              Win64
-- HeidiSQL Versión:             12.5.0.6677
-- --------------------------------------------------------

/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET NAMES utf8 */;
/*!50503 SET NAMES utf8mb4 */;
/*!40103 SET @OLD_TIME_ZONE=@@TIME_ZONE */;
/*!40103 SET TIME_ZONE='+00:00' */;
/*!40014 SET @OLD_FOREIGN_KEY_CHECKS=@@FOREIGN_KEY_CHECKS, FOREIGN_KEY_CHECKS=0 */;
/*!40101 SET @OLD_SQL_MODE=@@SQL_MODE, SQL_MODE='NO_AUTO_VALUE_ON_ZERO' */;
/*!40111 SET @OLD_SQL_NOTES=@@SQL_NOTES, SQL_NOTES=0 */;


-- Volcando estructura de base de datos para curso_paginacion
CREATE DATABASE IF NOT EXISTS `curso_paginacion` /*!40100 DEFAULT CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci */;
USE `curso_paginacion`;

-- Volcando estructura para tabla curso_paginacion.articulos
CREATE TABLE IF NOT EXISTS `articulos` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `articulo` varchar(300) NOT NULL DEFAULT '0',
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=19 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- Volcando datos para la tabla curso_paginacion.articulos: ~7 rows (aproximadamente)
DELETE FROM `articulos`;
INSERT INTO `articulos` (`id`, `articulo`) VALUES
	(1, 'Laravel es un potente framework de PHP que simplifica el desarrollo web. Su instalación es sencilla: composer global require laravel/installer.'),
	(2, 'Al crear un proyecto Laravel, ejecuta \'laravel new nombre-proyecto\' en la línea de comandos y accede al servidor local con \'php artisan serve\'.'),
	(3, 'Las migraciones en Laravel facilitan la gestión de la base de datos. Usa \'php artisan make:migration nombre-migracion\' para crear una migración y \'php artisan migrate\' para aplicarla.'),
	(4, 'Con Eloquent ORM en Laravel, accede a la base de datos de forma intuitiva. Define modelos con \'php artisan make:model NombreModelo\' y realiza consultas con facilidad.'),
	(5, 'Las rutas en Laravel se definen en el archivo \'routes/web.php\'. Utiliza \'Route::get()\' o \'Route::post()\' para definir rutas y asociar controladores o funciones anónimas.'),
	(6, 'El sistema de plantillas Blade en Laravel simplifica la creación de vistas. Usa \'@extends\' para extender una plantilla y \'@yield\' para mostrar contenido dinámico.'),
	(7, 'Laravel ofrece características de seguridad, como la protección CSRF y la autenticación incorporada. Utiliza \'php artisan make:auth\' para generar las vistas y rutas de autenticación.');

/*!40103 SET TIME_ZONE=IFNULL(@OLD_TIME_ZONE, 'system') */;
/*!40101 SET SQL_MODE=IFNULL(@OLD_SQL_MODE, '') */;
/*!40014 SET FOREIGN_KEY_CHECKS=IFNULL(@OLD_FOREIGN_KEY_CHECKS, 1) */;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40111 SET SQL_NOTES=IFNULL(@OLD_SQL_NOTES, 1) */;