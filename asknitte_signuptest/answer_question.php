<?php

	$link = mysqli_connect("localhost", "root","", "asknitte");
if (mysqli_connect_errno())
  {
  echo "Failed to connect to MySQL: " . mysqli_connect_error();
  }
  else
echo 'Connected successfully';

session_start();

$Answer = mysqli_real_escape_string($link, $_POST['quest_answer']);
//$Answer = $_POST['quest_answer'];
$_POST['quest_answer'];
/*if($Answer)
echo '  ' . $Answer;
else 
echo 'nop'.  mysqli_error($link);
*/



$User = $_SESSION['name'];
$Userid = $_SESSION['userid'];
//$id = $_GET['ak'];
$id = $_SESSION['qid'];
$query = "INSERT INTO content_post_answer (content_id_q, contentposta, content_time_a, content_by_a, user_id) VALUES ('$id','$Answer',current_timestamp,'$User','$Userid')";

	//if($query)
	//	echo 'yo!';
//mysqli_query($link,$query,MYSQLI_STORE_RESULT) or die('unsuccessful');
//mysql_query($query);
//mysqli_query($link,$query);


if ($link->query($query) === TRUE) {
	//echo "<script> location.reload; </script>";
	
	echo "<script> window.location.replace('mainpage.php'); </script>";
	//echo 'yeah done';
}
else
{
	//echo $Answer;
	//echo 'not done!!!' .  mysqli_error($link);
	//echo $id;
}


//mysql_close($link);
?>