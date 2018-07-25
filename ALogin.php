<?php
session_start(); // Starting Session
$error=''; // Variable To Store Error Message
if (isset($_POST['submit'])) {

if (empty($_POST['username']) || empty($_POST['password'])) {
echo '<script language="javascript">';
echo 'alert("Username or Password is invalid");';
echo 'window.location.href = "AdminLogin.php";';
echo '</script>';
}

else
{
// Define $username and $password
$username=$_POST['username'];
$password=$_POST['password'];

// Establishing Connection with Server by passing server_name, user_id and password as a parameter
$connection = mysql_connect("localhost", "root", "","election");
// To protect MySQL injection for Security purpose
$username = stripslashes($username);
$password = stripslashes($password);

$username = mysql_real_escape_string($username);
$password = mysql_real_escape_string($password);

// Selecting Database
$db = mysql_select_db("election", $connection);
// SQL query to fetch information of registerd users and finds user match.
$query = mysql_query("select username , password from admin where password='$password' AND username='$username'", $connection);
$rows = mysql_num_rows($query);
if ($rows == 1) {
$_SESSION['login_user']=$username; // Initializing Session

 header("location:AdminHome.php"); // Redirecting To Other Page
}
elseif(($_POST['username'] !=='username') ||($_POST['password'] !== 'password')){
echo '<script language="javascript">';
echo 'alert("Username or Password is invalid");';
echo 'window.location.href = "AdminLogin.php";';
echo '</script>';
}
mysql_close($connection); // Closing Connection
}
}
?>
