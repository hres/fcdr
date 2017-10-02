Deploying the application

Create a folder called "sodium-monitoring" under /etc then    
Move (delete from the source code) the conn.ini file from the source code  under  /etc/sodium-monitoring/  . 

In the connection.php file, update the line that references the conn.ini as follow:

Change: 
$db = parse_ini_file("conn.ini"); 
to
$db = parse_ini_file("/etc/sodium-monitoring/conn.ini");
