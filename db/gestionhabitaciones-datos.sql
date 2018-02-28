--------------------------------------
---Insertar Datos en tabla Clientes---
--------------------------------------
INSERT INTO clientes (
  nombre,apellidos,dni,sexo,
  fecha_naci,pais,provincia,ciudad,cod_postal,
  direccion,telefono,
  observacion)

VALUES
  (
    'Pepe', 'Martinez Gallego', '41021318D', 'HOMBRE',
            '01-04-1934', 'ESPAÑA', 'SEVILLA','Dos Hermanas', 42323,
            'Calle Inventada nº14, Bloque A', 621322123,
    'Es un buen cliente, cuidadoso, amable y paga por adelantado'
  ),

  (
    'Ana', 'Muñoz Alacarta', '51021318D', 'MUJER',
           '05-09-1966', 'ESPAÑA', 'CADIZ', 'Trebujena', 22723,
           'Calle Inventada nº13, Bloque A', 661622123,
    'No he tratado con ella'
  ),

  (
    'Juan', 'Martinez Gallego', '41021318D', 'HOMBRE',
            '01-04-1934', 'ESPAÑA', 'SEVILLA','SEVILLA', 42323,
            'Calle Inventada nº14, Bloque A', 621322123,
    'Es un buen cliente, cuidadoso, amable y paga por adelantado'
  ),

  (
    'Josefa', 'Muñoz Alacarta', '51021318D', 'MUJER',
              '05-09-1966', 'ESPAÑA', 'CADIZ', 'CADIZ', 22723,
              'Calle Inventada nº13, Bloque A', 661622123,
    'No he tratado con ella'
  ),

  (
    'Marcos', 'Martinez Gallego', '41021318D', 'HOMBRE',
              '01-04-1934', 'ESPAÑA', 'SEVILLA','SEVILLA', 42323,
              'Calle Inventada nº14, Bloque A', 621322123,
    'Es un buen cliente, cuidadoso, amable y paga por adelantado'
  ),

  (
    'Susana', 'Muñoz Alacarta', '51021318D', 'MUJER',
              '05-09-1966', 'ESPAÑA', 'CADIZ', 'CADIZ', 22723,
              'Calle Inventada nº13, Bloque A', 661622123,
    'No he tratado con ella'
  ),

  (
    'Ramon', 'Martinez Gallego', '41021318D', 'HOMBRE',
             '01-04-1934', 'ESPAÑA', 'SEVILLA','SEVILLA', 42323,
             'Calle Inventada nº14, Bloque A', 621322123,
    'Es un buen cliente, cuidadoso, amable y paga por adelantado'
  ),

  (
    'Elena', 'Muñoz Alacarta', '51021318D', 'MUJER',
             '05-09-1966', 'ESPAÑA', 'CADIZ', 'CADIZ', 22723,
             'Calle Inventada nº13, Bloque A', 661622123,
    'No he tratado con ella'
  ),

  (
    'Victor', 'Martinez Gallego', '41021318D', 'HOMBRE',
              '01-04-1934', 'ESPAÑA', 'SEVILLA','SEVILLA', 42323,
              'Calle Inventada nº14, Bloque A', 621322123,
    'Es un buen cliente, cuidadoso, amable y paga por adelantado'
  ),

  (
    'Casandra', 'Muñoz Alacarta', '51021318D', 'MUJER',
                '05-09-1966', 'ESPAÑA', 'CADIZ', 'CADIZ', 22723,
                'Calle Inventada nº13, Bloque A', 661622123,
    'No he tratado con ella'
  ),

  (
    'Eduardo', 'Martinez Gallego', '41021318D', 'HOMBRE',
               '01-04-1934', 'ESPAÑA', 'SEVILLA','SEVILLA', 42323,
               'Calle Inventada nº14, Bloque A', 621322123,
    'Es un buen cliente, cuidadoso, amable y paga por adelantado'
  ),

  (
    'Pamela', 'Muñoz Alacarta', '51021318D', 'MUJER',
              '05-09-1966', 'ESPAÑA', 'CADIZ', 'CADIZ', 22723,
              'Calle Inventada nº13, Bloque A', 661622123,
    'No he tratado con ella'
  ),

  (
    'Melchor', 'Martinez Gallego', '41021318D', 'HOMBRE',
               '01-04-1934', 'ESPAÑA', 'SEVILLA','SEVILLA', 42323,
               'Calle Inventada nº14, Bloque A', 621322123,
    'Es un buen cliente, cuidadoso, amable y paga por adelantado'
  ),

  (
    'Sabrina', 'Muñoz Alacarta', '51021318D', 'MUJER',
               '05-09-1966', 'ESPAÑA', 'CADIZ', 'CADIZ', 22723,
               'Calle Inventada nº13, Bloque A', 661622123,
    'No he tratado con ella'
  )
;

------------------------------------------
---Insertar Datos en tabla habitaciones---
------------------------------------------
INSERT INTO habitaciones (
  numero,
  descripcion,
  precio_base,nombre)

VALUES
  (
    1,
    'Habitación con dos camas',
    68, 'Habitación Doble'
  ),

  (
    2,
    'Habitación con tres camas',
    79, 'Habitación Triple'
  ),

  (
    3,
    'Habitación con una cama',
    55, 'Habitación Normal'
  ),

  (
    4,
    'Habitación con dos camas',
    68, 'Habitación Doble'
  ),

  (
    5,
    'Habitación con dos camas',
    68, 'Habitación Doble'
  ),

  (
    6,
    'Habitación con dos camas',
    68, 'Habitación Doble'
  ),

  (
    7,
    'Habitación con dos camas',
    68, 'Habitación Doble'
  ),

  (
    8,
    'Habitación con dos camas',
    68, 'Habitación Doble'
  ),

  (
    9,
    'Habitación con dos camas',
    68, 'Habitación Doble'
  ),

  (
    10,
    'Habitación con dos camas',
    68, 'Habitación Doble'
  ),

  (
    11,
    'Habitación con dos camas',
    68, 'Habitación Doble'
  ),

  (
    12,
    'Habitación con dos camas',
    68, 'Habitación Doble'
  ),

  (
    13,
    'Habitación con dos camas',
    68, 'Habitación Doble'
  )
;

--------------------------------------
---Insertar Datos en tabla reservas---
--------------------------------------
INSERT INTO reservas (
  habitaciones_id,
  fecha_entrada, fecha_salida,
  clientes_id, precio,
  observacion
)

VALUES
  (
    1,
    '01-09-2016','04-09-2016',
    1,251.44,
    'Se marcharon un día antes de lo previsto'
  ),

  (
    6,
    '15-12-2017','03-09-2018',
    4,3200,
    'Reserva realizada un año antes'
  ),

  (
    3,
    CURRENT_DATE,(CURRENT_DATE + 1),
    3,134.22,
    'No hay datos'
  ),

  (
    7,
    (CURRENT_DATE - 6),(CURRENT_DATE + 22),
    5,1231.12,
    'No hay datos'
  ),

  (
    11,
    (CURRENT_DATE - 1),(CURRENT_DATE + 5),
    9,399.21,
    'No hay datos'
  )
;
