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

/* $x = 0;
  while($x < 10) {
 
    $x++;
    break;
  }

$Userid = $x;
*/
$Name = $_POST['name'];
$Usn = $_POST['usn'];
$Username = $_POST['usernamesign'];
$Password = $_POST['passwordsign'];
$email = $_POST['emailsign'];

$salt = bin2hex(mcrypt_create_iv(32,MCRYPT_DEV_URANDOM));
$saltedP = $$Password . $salt;
$HashPassword = hash('sha256',$saltedP);





$valid = 0;

//Checking if the database already contains username and usn!


$sql = "SELECT usn FROM signup WHERE usn = '$Usn' LIMIT 1";
$check_query = mysqli_query($link,$sql);
$count_user = mysqli_num_rows($check_query);

  if($count_user)
  {

    echo "<script> window.location.replace('indexformusn.php'); </script>";
      /*echo "
      <div class='alert alert-danger'>
        <a href='#' class='close' data-dismiss='alert' aria-label='close'>&times;</a>
        <b>USN already in use! Strange...!</b>
      </div>
    ";
    exit();*/
  }
  else
      $valid++;
  





  $sql = "SELECT username FROM signup WHERE username = '$Username' LIMIT 1";
$check_query = mysqli_query($link,$sql);
$count_user = mysqli_num_rows($check_query);

  if($count_user)
  {

    echo "<script> window.location.replace('indexformuser.php'); </script>";
      /*echo "
      <div class='alert alert-danger'>
        <a href='#' class='close' data-dismiss='alert' aria-label='close'>&times;</a>
        <b>username in use! Please choose another one!</b>
      </div>
    ";
    exit();*/
  }
  else
      $valid++;


  $sql = "SELECT email FROM signup WHERE email = '$email' LIMIT 1";
$check_query = mysqli_query($link,$sql);
$count_user = mysqli_num_rows($check_query);

  if($count_user)
  {

    echo "<script> window.location.replace('indexformusn.php'); </script>";
      /*echo "
      <div class='alert alert-danger'>
        <a href='#' class='close' data-dismiss='alert' aria-label='close'>&times;</a>
        <b>USN already in use! Strange...!</b>
      </div>
    ";
    exit();*/
  }
  else
      $valid++;

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










if($valid == 3)
{
$query = "INSERT INTO signup (NAME,USN,email,USERNAME,PASSWORD,salt) VALUES ('$Name', UPPER('$Usn'), '$email', '$Username', '$Password', '')";
mysql_query($query);



/*$query =  "INSERT INTO user_id (USN) VALUES (UPPER('$Usn'))";
$result2 = mysql_query($query);
*/}

if ($link->query($query) === TRUE) {
  session_start();
  $row = mysqli_fetch_array($result);
  $_SESSION["uid"] = $row["USERNAME"];
  $_SESSION["name"] = $row["NAME"];
  //$r = session_id();
//$username = $_SESSION['username'];
echo "<script> window.location.replace('enter.php'); </script>";
}
else {
  echo "<script> window.location.replace('indexform.php'); </script>";
    //echo "Error: " . $query . "<br>" . $link->error;
}


/*echo "<script type='text/javascript'>\n";
echo "alert('you are Succesflly registered');\n";
echo "</script>"; 
*/
mysql_close();
?>