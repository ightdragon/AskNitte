<?php

$link = mysqli_connect("localhost", "root","", "asknitte");
if (mysqli_connect_errno())
  {
  echo "Failed to connect to MySQL: " . mysqli_connect_error();
  }
  else
echo 'Connected successfully';

session_start();


$postQuestion = NULL;


$query = "SELECT content_id_q,contentpostq,content_time_q,content_by_q FROM contentpostquestion";
$result = $link->query($query);
//$retval = mysqli_query($link,$query);


		/* if(! $retval ) {
      die('Could not get data: ' . mysql_error());
   }*/

    //if($result->num_rows > 0)
    //{
    
        $row = mysql_fetch_array($result);

          $_SESSION['question'] = $row["contentpostq"];



     /* while($row = $result->fetch_assoc())
      {

      }*/
    //}

if ($link->query($result) === TRUE)
{
  echo 'yes'		;
}
else
  echo 'no';

//$fetched=mysql_query($query);





	




?>