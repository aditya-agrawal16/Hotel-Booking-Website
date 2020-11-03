//<?php
//$username = "unleashe_hotel";
//$password = "unleashe_hotel";
//$hostname = "localhost"; 

//connection to the database
//$dbhandle = mysql_connect($hostname, $username, $password) 
// or die(mysql_error());

//select a database to work 
//$db = "unleashe_hotel";
//$selected = mysql_select_db($db,$dbhandle) 
//  or die(mysql_error());


//?>

<?php
/*
This file contains database configuration assuming you are running mysql using user "root" and password ""
*/

define('DB_SERVER', 'localhost');
define('DB_USERNAME', 'root');
define('DB_PASSWORD', '');
define('DB_NAME', 'unleashe_hotel');

// Try connecting to the Database
$conn = mysqli_connect(DB_SERVER, DB_USERNAME, DB_PASSWORD, DB_NAME);

//Check the connection
if($conn == false){
    dir('Error: Cannot connect');
}

?>
