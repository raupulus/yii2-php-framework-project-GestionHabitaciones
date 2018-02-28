-----------------------------------------
-- ---     Raúl Caro Pastorino     --- --
--- --                             -- ---
---- - https://github.com/fryntiz/ - ----
--- --                             -- ---
-- ---       www.fryntiz.es        --- --
-----------------------------------------

--------------------------------
---Crear Base de Datos hostal---
--------------------------------

--------------------------
---Crear Tabla Clientes---
--------------------------
DROP TABLE IF EXISTS clientes CASCADE; --Elimina la tabla si existiera
CREATE TABLE clientes (
      id           BIGSERIAL
                   CONSTRAINT pk_clientes PRIMARY KEY
    , nombre       VARCHAR(255)
    , apellidos    VARCHAR(255)
    , dni          VARCHAR(255)
    , sexo         VARCHAR(255)
    , fecha_naci   TIMESTAMP(0)
    , pais         VARCHAR(255)
    , provincia    VARCHAR(255)
    , ciudad       VARCHAR(255)
    , cod_postal   NUMERIC(30)
    , direccion    VARCHAR(255)
    , telefono     NUMERIC(30)
    , observacion  TEXT
    , created_at   TIMESTAMP(0)
    , updated_at   TIMESTAMP(0)
);

------------------------------
---Crear Tabla habitaciones---
------------------------------
DROP TABLE IF EXISTS habitaciones CASCADE; --Elimina la tabla si existiera
CREATE TABLE habitaciones (
      id           BIGSERIAL
                   CONSTRAINT pk_habitaciones PRIMARY KEY
    , numero       NUMERIC(10)
    , descripcion  TEXT
    , precio_base  DECIMAL(8,2)
    , nombre       VARCHAR(255)
);

--------------------------
---Crear Tabla Reservas---
--------------------------
DROP TABLE IF EXISTS reservas CASCADE; --Elimina la tabla si existiera
CREATE TABLE reservas (
      id               BIGSERIAL UNIQUE
    , habitaciones_id  BIGINT
                       CONSTRAINT fk_reservas_habitaciones
                       REFERENCES habitaciones(id)
    , fecha_entrada    TIMESTAMP(0)
    , fecha_salida     TIMESTAMP(0)
    , clientes_id      BIGINT
                       CONSTRAINT fk_reservas_clientes
                       REFERENCES clientes(id)
    , precio           DECIMAL(12,2)
    , observacion      TEXT
    , created_at       TIMESTAMP(0)
    , updated_at       TIMESTAMP(0)

    , CONSTRAINT pk_reservas PRIMARY KEY (habitaciones_id, fecha_entrada, fecha_salida)
);

