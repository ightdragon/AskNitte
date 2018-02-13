<?php

$link = mysqli_connect("localhost", "root","", "asknitte");
if (mysqli_connect_errno())
  {
  echo "Failed to connect to MySQL: " . mysqli_connect_error();
  }
echo 'Connected successfully ';



session_start();

	$id = $_GET['ak'];
	$_SESSION['qid'] = $id;


	$id = $_SESSION['qid'];
//echo $id;
	$post = "SELECT * FROM contentpostquestion WHERE conent_id_q = $id";
	$result1 = mysqli_query($link,$post);

/*	if($result1)
			echo 'yeah searched  ';
		else
			'no searched ';*/

		$row = mysqli_fetch_array($result1,MYSQLI_ASSOC);

	 $conent_id_q_r = $row["conent_id_q"];

	 $conent_post_q_r = $row["contentpostq"];
	 $content_time_q_r = $row["content_time_q"];
	 $content_by_q_r = $row["content_by_q"];
	 $user_id = $row["user_id"];

	// echo $conent_post_q_r;

	$sql = "INSERT INTO reported_questions (conent_id_q_r, conent_post_q_r, content_time_q_r, content_by_q_r, user_id) VALUES ('$conent_id_q_r', '$conent_post_q_r','$content_time_q_r',' $content_by_q_r','$user_id')";


	$result2 = mysqli_query($link,$sql);

	/*if($result2)
		//echo "<script> window.location.replace('mainpage.php'); </script>";
		echo 'yeah inserted ';
	else
		echo 'no inserted ';*/
/*conent_id_q,contentpostquestion, content_time_q, content_by_q, '$id'*/
	//$result = mysqli_query($link,$result);*/

	$query = "DELETE FROM contentpostquestion WHERE conent_id_q = $id";
	$result = mysqli_query($link,$query);

	if($result)
		echo "<script> window.location.replace('mainpage.php'); </script>";
		//echo 'yeah deleted ';
	else
		echo "<script> window.location.replace('mainpage.php'); </script>";
		echo 'no deleted';
?>