<?php
$apache_errorlog = file_get_contents('/var/log/apache2/error.log');
echo $apache_errorlog;
?>
