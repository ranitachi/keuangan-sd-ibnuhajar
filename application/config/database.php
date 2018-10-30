<?php  if ( ! defined('BASEPATH')) exit('No direct script access allowed');
/*
| -------------------------------------------------------------------
| DATABASE CONNECTIVITY SETTINGS
| -------------------------------------------------------------------
| This file will contain the settings needed to access your database.
|
| For complete instructions please consult the 'Database Connection'
| page of the User Guide.
|
| -------------------------------------------------------------------
| EXPLANATION OF VARIABLES
| -------------------------------------------------------------------
|
|	['hostname'] The hostname of your database server.
|	['username'] The username used to connect to the database
|	['password'] The password used to connect to the database
|	['database'] The name of the database you want to connect to
|	['dbdriver'] The database type. ie: mysql.  Currently supported:
				 mysql, mysqli, postgre, odbc, mssql, sqlite, oci8
|	['dbprefix'] You can add an optional prefix, which will be added
|				 to the table name when using the  Active Record class
|	['pconnect'] TRUE/FALSE - Whether to use a persistent connection
|	['db_debug'] TRUE/FALSE - Whether database errors should be displayed.
|	['cache_on'] TRUE/FALSE - Enables/disables query caching
|	['cachedir'] The path to the folder where cache files should be stored
|	['char_set'] The character set used in communicating with the database
|	['dbcollat'] The character collation used in communicating with the database
|	['swap_pre'] A default table prefix that should be swapped with the dbprefix
|	['autoinit'] Whether or not to automatically initialize the database.
|	['stricton'] TRUE/FALSE - forces 'Strict Mode' connections
|							- good for ensuring strict SQL while developing
|
| The $active_group variable lets you choose which connection group to
| make active.  By default there is only one group (the 'default' group).
|
| The $active_record variables lets you determine whether or not to load
| the active record class
*/

$active_group = 'default';
$active_record = TRUE;

$db['default']['hostname'] = 'localhost';
$db['default']['username'] = 'root';
$db['default']['password'] = '';
$db['default']['database'] = 'db_sd_ibnuhajar';
$db['default']['dbdriver'] = 'mysqli';
$db['default']['dbprefix'] = '';
$db['default']['pconnect'] = FALSE;
$db['default']['db_debug'] = TRUE;
$db['default']['cache_on'] = FALSE;
$db['default']['cachedir'] = '';
$db['default']['char_set'] = 'utf8';
$db['default']['dbcollat'] = 'utf8_general_ci';
$db['default']['swap_pre'] = '';
$db['default']['autoinit'] = TRUE;
$db['default']['stricton'] = FALSE;

$db['second']['hostname'] = 'localhost';
$db['second']['username'] = 'root';
$db['second']['password'] = '';
$db['second']['database'] = 'db_sm_ibnuhajar';
$db['second']['dbdriver'] = 'mysqli';
$db['second']['dbprefix'] = '';
$db['second']['pconnect'] = FALSE;
$db['second']['db_debug'] = TRUE;
$db['second']['cache_on'] = FALSE;
$db['second']['cachedir'] = '';
$db['second']['char_set'] = 'utf8';
$db['second']['dbcollat'] = 'utf8_general_ci';
$db['second']['swap_pre'] = '';
$db['second']['autoinit'] = TRUE;
$db['second']['stricton'] = FALSE;

$db['third']['hostname'] = 'localhost';
$db['third']['username'] = 'root';
$db['third']['password'] = '';
$db['third']['database'] = 'db_sd_ibhar';
$db['third']['dbdriver'] = 'mysqli';
$db['third']['dbprefix'] = '';
$db['third']['pconnect'] = FALSE;
$db['third']['db_debug'] = TRUE;
$db['third']['cache_on'] = FALSE;
$db['third']['cachedir'] = '';
$db['third']['char_set'] = 'utf8';
$db['third']['dbcollat'] = 'utf8_general_ci';
$db['third']['swap_pre'] = '';
$db['third']['autoinit'] = TRUE;
$db['third']['stricton'] = FALSE;


/* End of file database.php */
/* Location: ./application/config/database.php */
