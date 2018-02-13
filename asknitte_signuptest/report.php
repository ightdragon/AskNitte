<?php

$link = mysqli_connect("localhost", "root","", "asknitte");
if (mysqli_connect_errno())
  {
  echo "Failed to connect to MySQL: " . mysqli_connect_error();
  }
echo 'Connected successfully';



session_start();

	$id = $_GET['ak'];
	$_SESSION['qid'] = $id;


	$id = $_SESSION['qid'];

	/*$post = "SELECT * FROM contentpostquestion WHERE conent_id_q = $id";
	$result1 = mysqli_query($link,$post);

	 

	$sql = "INSERT INTO 'reported_questions' SELECT * FROM 'contentpostquestion'";
	$result2 = mysqli_query($link,$sql);
/*conent_id_q,contentpostquestion, content_time_q, content_by_q, '$id'*/
	//$result = mysqli_query($link,$result);*/

	$query = "DELETE FROM contentpostquestion WHERE conent_id_q = $id";
	$result = mysqli_query($link,$query);

	if($result)
		echo "<script> window.location.replace('mainpage.php'); </script>";
		//echo 'yeah';
	else
		echo 'no';
?>