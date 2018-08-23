<?php

/**
 * Database Configuration
 *
 * All of your system's database configuration settings go in here.
 * You can see a list of the default settings in craft/app/etc/config/defaults/db.php
 */

return [
  'driver'      => 'mysql',
  'schema'      => 'public',
  // The prefix to use when naming tables. This can be no more than 5 characters.
  'tablePrefix' => '',

  // The database server name or IP address.
  'server' => getenv('MYSQL_HOST', true) ?: getenv('DATA_DB_HOST', true),

  // The name of the database to select.
  'database' => getenv('MYSQL_DATABASE', true) ?: getenv('DATA_DB_NAME', true) ?:  'gonano',

  // The database username to connect with.
  'user' => getenv('MYSQL_USER', true) ?: getenv('DATA_DB_USER', true),

  // The database password to connect with.
  'password' => getenv('MYSQL_PASSWORD', true) ?: getenv('DATA_DB_PASS', true),

];
