<?php



			$link = mysqli_connect("localhost", "root","", "asknitte");





				if($page = "" || $page = "1")
	{
		$page1=0;
	}
	else
	{
		$page1 = ($page*5)-5;
	}
			$query = "SELECT * FROM contentpostquestion  ORDER BY conent_id_q DESC /*LIMIT $page1, 5*/";
			//$result = mysql_query($query);
			$result = mysqli_query($link,$query);

		?>