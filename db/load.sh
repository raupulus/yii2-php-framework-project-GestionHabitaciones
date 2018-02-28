#!/bin/sh

BASE_DIR=$(dirname $(readlink -f "$0"))
if [ "$1" != "test" ]
then
    psql -h localhost -U gestionhabitaciones -d gestionhabitaciones < $BASE_DIR/gestionhabitaciones.sql
    psql -h localhost -U gestionhabitaciones -d gestionhabitaciones < $BASE_DIR/gestionhabitaciones-datos.sql
fi
psql -h localhost -U gestionhabitaciones -d gestionhabitaciones_test < $BASE_DIR/gestionhabitaciones.sql
psql -h localhost -U gestionhabitaciones -d gestionhabitaciones_test < $BASE_DIR/gestionhabitaciones-datos.sql

