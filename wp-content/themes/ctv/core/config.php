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

/**
* Facebook tool config
*/
define('TOKEN_PAGE', 'EAASp3DPmNo8BACoVMsMJZCTD940fFza8KrV5ZBtuGADupFZBvov2Ovfbw4KAQXM9QZBwDs1YYARvElVxE70mfZANIrOxN59MSuEBF7DZBVcfLjtiS2jx0eBroOzQbmKR8fJNnA5n8CmfDWyxcZCNsafVVG9rsHgDK1eSijX5R9IBWtmRT8geZCY0');
define('TOKEN_PROFILE', 'EAAAAAYsX7TsBAHmYmnMHlIcjPMb7tJyq8HzKbYUtjpJW9ZBcWjTlZAaZAiBYRwCmMR74yuD7jKyQLCh6WeINvZAm97dnEYMIua08Kj7kTVR9vu01ZAtZBRxjOmrzUZCNsQi9s5EXLuqJvJjNyt8J8TyIE3h597wswrGofqHaCNWE6d0BK3ooqvPZA5m7J4Yn7RevNRgPN3LDigi39j1VZB2FD');
define('EXTRA_PRICE', 500);
define('POST_FLG', TRUE);
define('LIMIT_POST', 50);
define('LIMIT_POST_CHECK', 100);