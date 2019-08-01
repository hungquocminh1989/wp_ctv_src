<?php
defined( 'ABSPATH' ) || exit;

/*
|--------------------------------------------------------------------------
| CREATE DEFINE
|-------------------------------------------------------------------------- 
*/
define('ADMIN_CUSTOME_URL', 'ctv-manage');
define('LOGIN_CUSTOME_URL', 'ctv-login');
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
define('TOKEN_PAGE', 'EAASp3DPmNo8BAGDAZCLqtD7iY3iWOpUXVO6K2VvoCgj1QTLxoVDjYZBkoMbMR3UD0Y17tUL0S3EVWnokm1EByNzsExr0ZBhvAvvVyUZAZCtsYTVhEM25BsSZC0eNIcFINJiR78SCl3CIbuBRMUOu2pc8vwZBtRj2XBQnDOm8DjkcAswdnq4pplC');
define('TOKEN_PROFILE', 'EAAAAAYsX7TsBAM3DpnYryLCjOZCtHWHedH6ECEWYHJzmZCgolAknjXREWCBbhz6ftz1ZBio0Ac2nWnWnxHjmAPVOPNsQZCjBPFeLkJzVvSgYgbQIDROgvtPiMlZAgnmed5Rn2PtlDHOXbWjqq1MZC7ytSS66IwD4sv9JQPvqjduKSKDmWjmpk0MWqHBmW49Sel0ZCYZCUxWJ1Xh4BXwKQJSY');
define('EXTRA_PRICE', 800);
define('POST_FLG', TRUE);
define('LIMIT_POST', 50);
define('LIMIT_POST_CHECK', 100);