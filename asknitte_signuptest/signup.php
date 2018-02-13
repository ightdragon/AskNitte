
<?php

//$database = "asknitte";

$link = mysqli_connect("localhost", "root","", "asknitte");
if (mysqli_connect_errno())
  {
  echo "Failed to connect to MySQL: " . mysqli_connect_error();
  }
echo 'Connected successfully';
// $con =  mysqli_select_db('asknitte',$con);

/*if(!$con)
	echo "database not connected";	
*/
$Name = $_POST['name'];
$Usn = $_POST['usn'];
$Username = $_POST['usernamesign'];
$Password = $_POST['passwordsign'];





$query = mysql_query("SELECT username FROM signup WHERE usn ='".$Usn."'");

if (mysql_num_rows($query) != 0)
  {
      echo "Username already exists";
  }

/*
$checkUserID = "SELECT usernamesign from signup WHERE usernamesign = '$Username'";
mysql_query($checkUserId);

if (mysql_num_rows($checkUserId) > 0) {
    echo "User id exists already.";
    $user = mysql_fetch_array($checkUserId);
    print_r($user); // the data returned from the query
}



$checkUserID1 = "SELECT usn from signup WHERE usn = '$Usn'";
mysql_query($checkUserID1);

if (mysql_num_rows($checkUserId1) > 0) {
    echo "Usn exists already.";
    $user1 = mysql_fetch_array($checkUserId1);
    print_r($user1); // the data returned from the query
}


*/

else
{
$query = "INSERT INTO signup (NAME,USN,USERNAME,PASSWORD) VALUES ('$Name',UPPER('$Usn'),'$Username','$Password')";
mysql_query($query);
}

if ($link->query($query) === TRUE) {
    echo "New record created successfully";
} else {
    echo "Error: " . $query . "<br>" . $link->error;
}


/*echo "<script type='text/javascript'>\n";
echo "alert('you are Succesflly registered');\n";
echo "</script>"; 
*/
mysql_close();
?>
