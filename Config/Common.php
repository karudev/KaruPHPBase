<?php

define('APP_BASE',str_replace('/index.php','',$_SERVER['SCRIPT_FILENAME']));
define('URL_BASE',str_replace('/index.php', '', 'http://'.$_SERVER['HTTP_HOST'].$_SERVER['PHP_SELF']));
define('APP_DIR', 'karu-php-base');

?>
