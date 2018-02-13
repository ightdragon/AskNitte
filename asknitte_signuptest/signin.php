<?php





// Connect to the database
$link = mysqli_connect("localhost", "root","", "asknitte");
if (mysqli_connect_errno())
  {
  echo "Failed to connect to MySQL: " . mysqli_connect_error();
  }
echo 'Connected successfully';


$username = $_POST['username'];
$password = $_POST['password'];

/*$result = mysql_query("SELECT username, password FROM signup WHERE USERNAME = '$username'");

$row = mysql_fetch_array($result);

if($row["username"]==$username && $row["password"]==$pass)
    echo"You are a validated user.";
else
    echo"Sorry, your credentials are not valid, Please try again.";

*/


   /* $password1 = mysqli_real_escape_string($link,$_REQUEST['password']);
$saltQuery = "SELECT salt FROM signup WHERE USERNAME = '$username'";
$result1 = mysqli_query($link,$saltQuery);
$row = mysqli_fetch_assoc($result1);
$salt = $row['salt'];


$saltedPW = $password1 . $salt;
$HashPassword = hash('sha256',$saltedPW);*/





// If the form is submitted
if (isset($_POST['username']) and isset($_POST['password'])){
//3.1.1 Assigning posted values to variables.
$username = $_POST['username'];
$password = $_POST['password'];
//3.1.2 Checking the values are existing in the database or not
$query = "SELECT * FROM signup WHERE username='$username' and password='$password'";
 
$result = mysqli_query($link, $query) or die(mysqli_error($link));
$count = mysqli_num_rows($result);
//3.1.2 If the posted values are equal to the database values, then session will be created for the user.
if ($count == 1){
$_SESSION['username'] = $username;
}else{
// If the login credentials doesn't match, he will be shown with an error message.
//$fmsg = "Invalid Login Credentials.";
	echo "<script> window.location.replace('indexformloginerror1.php'); </script>";
}
}


// if the user is logged in Greets the user with message
if (isset($_SESSION['username'])){
session_start();
	$row = mysqli_fetch_array($result);
	$_SESSION["uid"] = $row["USERNAME"];
	$_SESSION["name"] = $row["NAME"];
	$_SESSION['userid'] = $row["user_id"];
//	$_SESSION["usn"] = $row["USN"];
	$_SESSION["usn"] = $row["USN"];
	//$r = session_id();
//$username = $_SESSION['username'];
echo "<script> window.location.replace('mainpage.php'); </script>";
}
else
{
	echo "<script> window.location.replace('indexformloginerror1.php'); </script>";

	//echo' Sorry...wrong credentials';
}
//3.2 When the user visits the page first time, simple login form will be displayed.

/*		session_start();  
		//require('signin.php'); //starting the session for user profile page
if(!empty($username))   //checking the 'user' name which is from Sign-In.html, is it empty or have some text
{
	$query = "SELECT *  FROM signup where username = '$username' AND password = '$password'";
	$row = mysql_fetch_array($query) or die(mysql_error());



	if(!empty($row['USERNAME']) AND !empty($row['PASSWORD']))
	{
		$_SESSION['USERNAME'] = $row['PASSWORD'];
		echo "SUCCESSFULLY LOGIN TO USER PROFILE PAGE...";

	}
	else
	{
		echo "SORRY... YOU ENTERD WRONG ID AND PASSWORD... PLEASE RETRY...";
	}
}

*/




   


?>