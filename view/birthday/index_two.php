
<?php error_reporting(0) ?>
<?php

$username = "root";
$password = "";
$hostname = "localhost"; 

//connection to the database
$dbhandle = mysql_connect($hostname, $username, $password)
  or die("Unable to connect to MySQL");
echo "Connected to MySQL<br>";
?>


<?php
$selected = mysql_select_db("calendar", $dbhandle)
or die("Could not select the calendar")
  ?>

  <?php 
//execute the SQL query and return records
$result = mysql_query("SELECT id, person, day, month, year FROM birthdays");
//fetch tha data from the database
while ($row = mysql_fetch_array($result)) {
   echo "".$row{'id'}." ".$row{'person'}." ".$row{'day'}."-".$row{'month'}. "-".$row{'year'}. "<br>";
}
?>

<?php
//close the connection
mysql_close($dbhandle);
?>
