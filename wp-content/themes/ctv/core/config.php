<?php
defined( 'ABSPATH' ) || exit;

/*
|--------------------------------------------------------------------------
| CREATE DEFINE
|-------------------------------------------------------------------------- 
*/
define('TEMPLATE_URL', get_template_directory_uri());
define('THEME_TEXT_START', '[ ');
define('THEME_TEXT_END', ' ]');

/**
* Second database
*/
define('DATABASE_TYPE', 'pgsql');
define('DATABASE_NAME', 'sdh_2018');
define('DATABASE_HOST', 'localhost');
define('DATABASE_USER', 'postgres');
define('DATABASE_PASS', '123456');
define('DATABASE_PORT', '5433');
define('DATABASE_DNS', sprintf ('%1$s:dbname=%2$s;host=%3$s;port=%4$s',DATABASE_TYPE, DATABASE_NAME, DATABASE_HOST, DATABASE_PORT));