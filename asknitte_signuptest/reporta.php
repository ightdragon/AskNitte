<?php

$link = mysqli_connect("localhost", "root","", "asknitte");
if (mysqli_connect_errno())
  {
  echo "Failed to connect to MySQL: " . mysqli_connect_error();
  }
echo 'Connected successfully';





session_start();

	$id = $_GET['ank'];
	$_SESSION['qid'] = $id;


	$id = $_SESSION['qid'];

	$post = "SELECT * FROM content_post_answer WHERE answer_id = $id";
	$result1 = mysqli_query($link,$post);


	/*if($result1)
			echo 'yeah searched  ';
		else
			'no searched ';*/



	$row = mysqli_fetch_array($result1,MYSQLI_ASSOC);

	$conent_id_a_r = $row["answer_id"];
	$content_id_q_r = $row["content_id_q"];
	$conent_post_a_r = $row["contentposta"];
	$content_time_a_r = $row["content_time_a"];
	$content_by_a_r = $row["content_by_a"];
	$user_id = $row["user_id"];



	$sql = "INSERT INTO reported_answers (conent_id_a_r, content_id_q_r, conent_post_a_r, content_time_a_r, content_by_a_r, user_id) VALUES ('$conent_id_a_r', '$content_id_q_r','$conent_post_a_r','$content_time_a_r','$content_by_a_r','$user_id')";


	$result2 = mysqli_query($link,$sql);

	/*if($result2)
		//echo "<script> window.location.replace('mainpage.php'); </script>";
		echo 'yeah inserted ';
	else
		echo 'no inserted ';*/

	$query = "DELETE FROM content_post_answer WHERE answer_id = $id";
	$result = mysqli_query($link,$query);


	if($result)
		echo "<script> window.location.replace('mainpage.php'); </script>";
		//echo 'yeah deleted';
	else
	//	echo 'no deleted';
		echo "<script> window.location.replace('mainpage.php'); </script>";
?>