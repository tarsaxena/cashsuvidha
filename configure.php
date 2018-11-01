<?php
$docRoot=$_SERVER['DOCUMENT_ROOT'];
$host=$_SERVER['HTTP_HOST'];

if($_SERVER['HTTP_HOST']=="localhost")
{
    $config['server'] = 'localhost';
    $config['database'] = 'cash_suvidha';
    $config['user'] = 'root';
    $config['pass'] = '';
    $sitepath = 'http://localhost/cash_suvidha/';
    $sitepathAdmin = 'http://localhost/cash_suvidha/Eye@cash/';
}

else
{
    $config['server'] = '13.127.98.139';
    $config['database'] ='cashsuvidhadb';
    $config['user'] ='root';
    $config['pass'] ='jmd@111';
    $sitepath ='http://'.$_SERVER['HTTP_HOST'].'/';
    $sitepathAdmin ='http://'.$_SERVER['HTTP_HOST'].'/Eye@cash/';
}

define('DIFFULT_CURRENCY', '$');
define('SESS__', 'cash');
define('BASE_URL_SITE', $sitepath);
define('BASE_ADMIN_URL_SITE', $sitepathAdmin);
define('DOCROOT', $docRoot.'/' );
include("config/page_name_macro.php");
define('COMMA_SEPRATOR', "comma");
define('BASE_DIRS_FILES_PATH', 'files/' );

define('BASE_DIR_EVENT_PIC', BASE_DIRS_FILES_PATH."event_image/");
define('BASE_DIR_EVENT_PIC_UID', BASE_DIRS_FILES_PATH. "event_image/[UID]/");
define('BASE_DIR_EVENT_PIC_THUMB', BASE_DIRS_FILES_PATH. "event_image/[UID]/thumb/");

define('USER_THUMB_WIDTH', '460');

?>
