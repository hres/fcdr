<h2>Deploying the application from the sodium-monitoring branch</h2>

Create a folder called "sodium-monitoring" under /etc then
Move (delete from the source code) the conn.ini file from the source code under /etc/sodium-monitoring/ .

In the connection.php file, update the line that references the conn.ini as follow:

Change: $db = parse_ini_file("conn.ini");

to

$db = parse_ini_file("/etc/sodium-monitoring/conn.ini");

<h3>Database creation</h3>
In order to recreate the database, use the scripts located under /SCRIPT folder in this order:

fcdr_schema.sql to create the schema only <br>
fcdr_data.sql to populate the reference tables <br>
fcdr_user.sql to populate the User table: all information in this table are temporary and will be removed/updated once the application gets deployed. 

If you are using a SQL user that is *not* fcdruser or running the script where the fcdr DB is not localhost, then search and replace `fcdruser@localhost` with the right values. 
