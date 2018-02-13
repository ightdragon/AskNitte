<?php



			$link = mysqli_connect("localhost", "root","", "asknitte");





	/*			if($page = "" || $page = "1")
	{
		$page1=0;
	}
	else
	{
		$page1 = ($page*5)-5;
	}
		
	*/
			$id = $_SESSION['userid'];
			//echo $id;
			$query = "SELECT * FROM contentpostquestion  WHERE user_id  = $id";
			//$result = mysql_query($query);
			$result = mysqli_query($link,$query);

		?>