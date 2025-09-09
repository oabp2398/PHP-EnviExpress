
-- ===========================
-- Base de datos EnviExpress
-- ===========================

DROP DATABASE IF EXISTS enviiexpress;
CREATE DATABASE enviiexpress;
USE enviiexpress;

-- ===========================
-- Tabla: personas
-- ===========================
CREATE TABLE personas (
    id INT AUTO_INCREMENT PRIMARY KEY,
    nombres VARCHAR(100),
    apellidos VARCHAR(100),
    documento VARCHAR(20),
    telefono VARCHAR(20),
    email VARCHAR(100)
);

INSERT INTO personas (nombres, apellidos, documento, telefono, email) VALUES
('Juan', 'Pérez', '1001', '3001111111', 'juan.perez@example.com'),
('María', 'Gómez', '1002', '3002222222', 'maria.gomez@example.com'),
('Carlos', 'Rodríguez', '1003', '3003333333', 'carlos.rod@example.com'),
('Ana', 'Martínez', '1004', '3004444444', 'ana.mtz@example.com'),
('Luis', 'Fernández', '1005', '3005555555', 'luis.fernandez@example.com'),
('Sofía', 'López', '1006', '3006666666', 'sofia.lopez@example.com'),
('Pedro', 'Ramírez', '1007', '3007777777', 'pedro.ramirez@example.com'),
('Laura', 'Torres', '1008', '3008888888', 'laura.torres@example.com'),
('Andrés', 'Moreno', '1009', '3009999999', 'andres.moreno@example.com'),
('Valentina', 'Castro', '1010', '3010000000', 'valentina.castro@example.com');

-- ===========================
-- Tabla: usuarios
-- ===========================
CREATE TABLE usuarios (
    id INT AUTO_INCREMENT PRIMARY KEY,
    persona_id INT,
    username VARCHAR(50),
    password VARCHAR(100),
    FOREIGN KEY (persona_id) REFERENCES personas(id)
);

INSERT INTO usuarios (persona_id, username, password) VALUES
(1, 'juanp', '123456'),
(2, 'mariag', '123456'),
(3, 'carlosr', '123456'),
(4, 'anam', '123456'),
(5, 'luisf', '123456'),
(6, 'sofial', '123456'),
(7, 'pedror', '123456'),
(8, 'laurat', '123456'),
(9, 'andresm', '123456'),
(10, 'valenc', '123456');

-- ===========================
-- Tabla: empleados
-- ===========================
CREATE TABLE empleados (
    id INT AUTO_INCREMENT PRIMARY KEY,
    persona_id INT,
    cargo VARCHAR(50),
    salario DECIMAL(10,2),
    FOREIGN KEY (persona_id) REFERENCES personas(id)
);

INSERT INTO empleados (persona_id, cargo, salario) VALUES
(1, 'Administrador', 2500000),
(2, 'Mensajero', 1200000),
(3, 'Mensajero', 1200000),
(4, 'Soporte', 1500000),
(5, 'Contador', 2000000),
(6, 'Mensajero', 1200000),
(7, 'Mensajero', 1200000),
(8, 'Coordinador', 2200000),
(9, 'Mensajero', 1200000),
(10, 'Mensajero', 1200000);

-- ===========================
-- Tabla: vehiculos
-- ===========================
CREATE TABLE vehiculos (
    id INT AUTO_INCREMENT PRIMARY KEY,
    placa VARCHAR(10),
    tipo VARCHAR(50),
    marca VARCHAR(50),
    modelo INT
);

INSERT INTO vehiculos (placa, tipo, marca, modelo) VALUES
('AAA111', 'Moto', 'Yamaha', 2020),
('BBB222', 'Moto', 'Honda', 2019),
('CCC333', 'Moto', 'Suzuki', 2021),
('DDD444', 'Moto', 'Kawasaki', 2022),
('EEE555', 'Moto', 'AKT', 2020),
('FFF666', 'Moto', 'Bajaj', 2018),
('GGG777', 'Moto', 'Yamaha', 2021),
('HHH888', 'Moto', 'Honda', 2022),
('III999', 'Moto', 'Suzuki', 2019),
('JJJ000', 'Moto', 'Kymco', 2020);

-- ===========================
-- Tabla: mensajeros
-- ===========================
CREATE TABLE mensajeros (
    id INT AUTO_INCREMENT PRIMARY KEY,
    empleado_id INT,
    vehiculo_id INT,
    FOREIGN KEY (empleado_id) REFERENCES empleados(id),
    FOREIGN KEY (vehiculo_id) REFERENCES vehiculos(id)
);

INSERT INTO mensajeros (empleado_id, vehiculo_id) VALUES
(2,1),
(3,2),
(6,3),
(7,4),
(9,5),
(10,6),
(2,7),
(3,8),
(6,9),
(7,10);

-- ===========================
-- Tabla: ubicaciones
-- ===========================
CREATE TABLE ubicaciones (
    id INT AUTO_INCREMENT PRIMARY KEY,
    direccion VARCHAR(200),
    ciudad VARCHAR(100),
    lat DECIMAL(9,6),
    lng DECIMAL(9,6)
);

INSERT INTO ubicaciones (direccion, ciudad, lat, lng) VALUES
('Calle 1 #10-20', 'Bogotá', 4.7110, -74.0721),
('Carrera 15 #45-30', 'Bogotá', 4.6500, -74.0833),
('Av 68 #30-50', 'Bogotá', 4.6765, -74.1234),
('Calle 80 #90-12', 'Bogotá', 4.7102, -74.1189),
('Calle 26 #45-67', 'Bogotá', 4.6543, -74.1078),
('Carrera 30 #60-70', 'Bogotá', 4.6280, -74.0940),
('Av Boyacá #70-80', 'Bogotá', 4.6921, -74.1245),
('Calle 100 #15-25', 'Bogotá', 4.6938, -74.0420),
('Calle 13 #50-22', 'Bogotá', 4.6180, -74.1230),
('Carrera 7 #25-60', 'Bogotá', 4.6097, -74.0817);

-- ===========================
-- Tabla: tarifas
-- ===========================
CREATE TABLE tarifas (
    id INT AUTO_INCREMENT PRIMARY KEY,
    descripcion VARCHAR(100),
    valor DECIMAL(10,2)
);

INSERT INTO tarifas (descripcion, valor) VALUES
('Zona 1 - Centro', 5000),
('Zona 2 - Norte', 7000),
('Zona 3 - Sur', 6000),
('Zona 4 - Occidente', 6500),
('Zona 5 - Oriente', 5500),
('Zona 6 - Periferia', 8000),
('Zona 7 - Express', 10000),
('Zona 8 - Prioritario', 12000),
('Zona 9 - Nocturno', 9000),
('Zona 10 - Festivo', 11000);

-- ===========================
-- Tabla: pedidos
-- ===========================
CREATE TABLE pedidos (
    id INT AUTO_INCREMENT PRIMARY KEY,
    usuario_id INT,
    origen_id INT,
    destino_id INT,
    tarifa_id INT,
    descripcion VARCHAR(200),
    FOREIGN KEY (usuario_id) REFERENCES usuarios(id),
    FOREIGN KEY (origen_id) REFERENCES ubicaciones(id),
    FOREIGN KEY (destino_id) REFERENCES ubicaciones(id),
    FOREIGN KEY (tarifa_id) REFERENCES tarifas(id)
);

INSERT INTO pedidos (usuario_id, origen_id, destino_id, tarifa_id, descripcion) VALUES
(1,1,2,1,'Entrega documentos'),
(2,3,4,2,'Paquete pequeño'),
(3,5,6,3,'Entrega sobres'),
(4,7,8,4,'Caja mediana'),
(5,9,10,5,'Documentos legales'),
(6,2,5,6,'Paquete express'),
(7,1,3,7,'Entrega inmediata'),
(8,4,7,8,'Entrega nocturna'),
(9,6,9,9,'Entrega festivo'),
(10,8,10,10,'Paquete grande');

-- ===========================
-- Tabla: asignaciones
-- ===========================
CREATE TABLE asignaciones (
    id INT AUTO_INCREMENT PRIMARY KEY,
    pedido_id INT,
    mensajero_id INT,
    fecha_asignacion DATE,
    FOREIGN KEY (pedido_id) REFERENCES pedidos(id),
    FOREIGN KEY (mensajero_id) REFERENCES mensajeros(id)
);

INSERT INTO asignaciones (pedido_id, mensajero_id, fecha_asignacion) VALUES
(1,1,'2025-01-01'),
(2,2,'2025-01-02'),
(3,3,'2025-01-03'),
(4,4,'2025-01-04'),
(5,5,'2025-01-05'),
(6,6,'2025-01-06'),
(7,7,'2025-01-07'),
(8,8,'2025-01-08'),
(9,9,'2025-01-09'),
(10,10,'2025-01-10');

-- ===========================
-- Tabla: guias
-- ===========================
CREATE TABLE guias (
    id INT AUTO_INCREMENT PRIMARY KEY,
    pedido_id INT,
    numero_guia VARCHAR(50),
    fecha DATE,
    FOREIGN KEY (pedido_id) REFERENCES pedidos(id)
);

INSERT INTO guias (pedido_id, numero_guia, fecha) VALUES
(1,'G001','2025-01-01'),
(2,'G002','2025-01-02'),
(3,'G003','2025-01-03'),
(4,'G004','2025-01-04'),
(5,'G005','2025-01-05'),
(6,'G006','2025-01-06'),
(7,'G007','2025-01-07'),
(8,'G008','2025-01-08'),
(9,'G009','2025-01-09'),
(10,'G010','2025-01-10');

-- ===========================
-- Tabla: roles
-- ===========================
CREATE TABLE roles (
    id INT AUTO_INCREMENT PRIMARY KEY,
    nombre VARCHAR(50)
);

INSERT INTO roles (nombre) VALUES
('Admin'),
('Coordinador'),
('Mensajero'),
('Usuario'),
('Soporte'),
('Contabilidad'),
('Supervisor'),
('Operador'),
('Invitado'),
('Gerente');

-- ===========================
-- Tabla: permisos
-- ===========================
CREATE TABLE permisos (
    id INT AUTO_INCREMENT PRIMARY KEY,
    nombre VARCHAR(100)
);

INSERT INTO permisos (nombre) VALUES
('Crear pedidos'),
('Editar pedidos'),
('Eliminar pedidos'),
('Asignar pedidos'),
('Ver empleados'),
('Gestionar usuarios'),
('Gestionar roles'),
('Gestionar permisos'),
('Ver reportes'),
('Exportar datos');

-- ===========================
-- Tabla: roles_permisos
-- ===========================
CREATE TABLE roles_permisos (
    id INT AUTO_INCREMENT PRIMARY KEY,
    rol_id INT,
    permiso_id INT,
    FOREIGN KEY (rol_id) REFERENCES roles(id),
    FOREIGN KEY (permiso_id) REFERENCES permisos(id)
);

INSERT INTO roles_permisos (rol_id, permiso_id) VALUES
(1,1),
(1,2),
(1,3),
(1,4),
(1,5),
(2,5),
(2,9),
(3,1),
(3,4),
(4,1);
