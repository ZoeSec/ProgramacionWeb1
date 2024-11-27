-- Si existe una base de datos con el mismo nombre, la elimina
DROP SCHEMA IF EXISTS `KURTA`;

-- Crear la base de datos
CREATE SCHEMA IF NOT EXISTS `KURTA` DEFAULT CHARACTER SET utf8 COLLATE utf8_spanish2_ci;
USE `KURTA`;

-- Crear la tabla
CREATE TABLE `usuarios` (
    `id` INT(11) NOT NULL AUTO_INCREMENT, -- Identificador único
    `nombre_usuario` VARCHAR(100) NOT NULL, -- Nombre de usuario
    `password` VARCHAR(100) NOT NULL, -- Contraseña (se recomienda encriptarla)
    `clan` VARCHAR(100) NOT NULL, -- Clan
    `dinero` DECIMAL(10, 2) NOT NULL, -- Dinero con dos decimales
    `kills` INT(10) NOT NULL, -- Número de kills (entero)
    `horas_jugadas` DECIMAL(10, 2) NOT NULL, -- Horas jugadas con decimales
    `fecha_ingreso` DATE NOT NULL, -- Fecha de ingreso
    `trabajo` ENUM('Minero', 'Cazador', 'Constructor', 'Explorador') NOT NULL, -- Opciones de trabajo
    `rango` ENUM('KURTA', 'KURTA OG', 'VIP', 'OWNNER') NOT NULL, -- Opciones de rango
    PRIMARY KEY (`id`) -- Definir `id` como llave primaria
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- Insertar datos de prueba
INSERT INTO `usuarios` 
(`nombre_usuario`, `password`, `clan`, `dinero`, `kills`, `horas_jugadas`, `fecha_ingreso`, `trabajo`, `rango`) 
VALUES
('JohnDoe', 'password123', 'Clan Alpha', 500.75, 10, 15.5, '2024-01-01', 'Minero', 'KURTA'),
('JaneDoe', 'password456', 'Clan Beta', 1200.00, 25, 30.0, '2024-01-15', 'Constructor', 'VIP');


SELECT * FROM `usuarios`; 

SELECT nombre_usuario, trabajo, rango FROM usuarios;