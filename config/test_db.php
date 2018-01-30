<?php
$db = require __DIR__ . '/db.php';
// test database! Important not to run tests on production or development databases
$db['dsn'] = 'psql:host=localhost;dbname=gestionarhabitaciones_test';

return $db;
