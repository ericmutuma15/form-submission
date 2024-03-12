<?php
$servername = "localhost";
$username = "root";
$DATABASE_PASS = '0704478783crap';
$database = "form_submission";

 // Create connection
 $conn = mysqli_connect($servername, $username, $DATABASE_PASS, $database);

 if ( mysqli_connect_error() ) {
   // If there is an error with the connection, stop the script and display the error.
   exit('Failed to connect to MySQL: ' . mysqli_connect_error());

}
mysqli_connect('$servername', '$username', '$DATABASE_PASS', '') or die('Could not connect the database : Username or password incorrect');
mysqli_select_db('$database') or die ('No database found');
echo 'Database Connected successfully';
?>