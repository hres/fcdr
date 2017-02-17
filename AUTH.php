<?php
echo "<pre>\n";
// var_dump(apache_get_modules());
// print_r(apache_get_modules());
foreach (apache_get_modules() as $mod) {
	echo "$mod\n";
}
echo "</pre>\n";
?>
