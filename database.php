<?php

/*include('db_connect.php');
$Term = MySQL_Real_Escape_String($_GET['Term']);
$QueryString = "SELECT Title FROM SomeTable WHERE title LIKE '{$QueryString}&#37;'";
$Query = MySQL_Query($QueryString);
$Values = array();
while($Row = MySQL_Fetch_Array($Query)){
    echo '<li>' . $Row['Title'] . '</li>';
}
*/


$con = mysqli_connect("localhost","root","","election");
if(!$con)
{ // creation of the connection object failed
    die("connection object not created: ".mysqli_error($con));
}

if (mysqli_connect_errno()) 
{ // creation of the connection object has some other error
    die("Connect failed: ".mysqli_connect_errno()." : ". mysqli_connect_error());
}

?>
