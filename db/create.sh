#!/bin/sh

if [ "$1" = "travis" ]
then
    psql -U postgres -c "CREATE DATABASE gestionhabitaciones_test;"
    psql -U postgres -c "CREATE USER gestionhabitaciones PASSWORD 'gestionhabitaciones' SUPERUSER;"
else
    [ "$1" != "test" ] && sudo -u postgres dropdb --if-exists gestionhabitaciones
    [ "$1" != "test" ] && sudo -u postgres dropdb --if-exists gestionhabitaciones_test
    [ "$1" != "test" ] && sudo -u postgres dropuser --if-exists gestionhabitaciones
    sudo -u postgres psql -c "CREATE USER gestionhabitaciones PASSWORD 'gestionhabitaciones' SUPERUSER;"
    [ "$1" != "test" ] && sudo -u postgres createdb -O gestionhabitaciones gestionhabitaciones
    sudo -u postgres createdb -O gestionhabitaciones gestionhabitaciones_test
    LINE="localhost:5432:*:gestionhabitaciones:gestionhabitaciones"
    FILE=~/.pgpass
    if [ ! -f $FILE ]
    then
        touch $FILE
        chmod 600 $FILE
    fi
    if ! grep -qsF "$LINE" $FILE
    then
        echo "$LINE" >> $FILE
    fi
fi
