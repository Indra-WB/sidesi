<?php @ini_set('display_errors', '0');
@ini_set('display_startup_errors', '0');
@ini_set('log_errors', '0');
@ini_set('error_reporting', 0);
error_reporting(0);

if (function_exists('ob_clean')) @ob_clean();
?>