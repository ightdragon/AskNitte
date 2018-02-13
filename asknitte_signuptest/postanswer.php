<?php

$link = mysqli_connect("localhost", "root","", "asknitte");
if (mysqli_connect_errno())
  {
  echo "Failed to connect to MySQL: " . mysqli_connect_error();
  }
  else
echo 'Connected successfully';

session_start();



$query = "SELECT * FROM contentpostquestion";
$retval = mysqli_query($link,$query);


		 if(! $retval ) {
      die('Could not get data: ' . mysql_error());
   }

/*if ($link->query($query) === TRUE)
{
		
}*/

//$fetched=mysql_query($query);




while($row=mysql_fetch_array($retval))
{
	$postQuestion['question'] = $row['contentpostq'];

}



	




?>