<?php

	$link = mysqli_connect("localhost", "root","", "asknitte");
if (mysqli_connect_errno())
  {
  echo "Failed to connect to MySQL: " . mysqli_connect_error();
  }
  else
echo 'Connected successfully';

session_start();

$Question = mysqli_real_escape_string($link, $_POST['quest_ask']);
$_POST['quest_ask'];

$User = $_SESSION['name'];
$Userid = $_SESSION['userid'];

$query = "INSERT INTO contentpostquestion (contentpostq,content_time_q,content_by_q,user_id) VALUES ('$Question',current_timestamp,'$User','$Userid')";

	//if($query)
	//	echo 'yo!';
//mysqli_query($link,$query,MYSQLI_STORE_RESULT); 
//mysql_query($query);
//mysqli_query($link,$query);


if ($link->query($query) === TRUE) {
	echo "<script> window.location.replace('mainpage.php'); </script>";
	//echo 'yeah done';
}
else
{
	echo $Question;
	echo ' not done!!!';
	
}


//mysql_close($link);
?>