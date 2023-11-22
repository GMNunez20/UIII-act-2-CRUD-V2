create database lote;
use lote;

create table vehiculo(
  id_vehiculo int(10) auto_increment primary key,
  vin varchar(100) NULL,
  cod_titulo varchar(100) NULL,
  transmicion varchar(100) NULL,
  costo int(20) NULL,
  modulo int(20) NULL,
  color varchar(100) NULL,
  serie varchar(100) NULL,
  descripcion varchar(100) NULL,
  no_cilindros int(20) NULL
);

-- Insertar datos en la tabla vehiculo
INSERT INTO vehiculo (vin, cod_titulo, transmicion, costo, modulo, color, serie, descripcion, no_cilindros)
VALUES
  ('ABC123456789', 'TIT-001', 'Automática', 25000, 2022, 'Rojo', 'SER-001', 'Vehículo deportivo', 6),
  ('XYZ987654321', 'TIT-002', 'Manual', 18000, 2021, 'Azul', 'SER-002', 'Sedán familiar', 4),
  ('DEF456789012', 'TIT-003', 'Automática', 30000, 2023, 'Negro', 'SER-003', 'Todo terreno', 8);
