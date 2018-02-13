<?php

session_start();

if(!isset($_SESSION["uid"])){
header("location:indexform.php");
}


?>



<!DOCTYPE>
<html>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
<link rel="stylesheet" href="https://www.w3schools.com/lib/w3-theme-blue-grey.css">
<link rel='stylesheet' href='https://fonts.googleapis.com/css?family=Open+Sans'>
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
	
	


	<head>
		<meta charset="utf-8">
		<title><?php echo $_SESSION["name"]; ?></title>
		<link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
		<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>



			<script>

			//removing card when report abuse is pressed
$(document).ready(function(){
    $("#report").on("click", function(){
        $("#div").remove();
    });
});


			//'ask nitte+' slide down animation
$(document).ready(function(){
    $("#asknitte+").click(function(){
        $("#id01").slideDown("slow");
    });
});


</script>

	</head>




	<body class="w3-theme-l5">



		<div class="w3-top">
		<div class="w3-container w3-teal w3-theme-d2 w3-left-align w3-large">
			





			

			<!-- <a href="#" class="w3-bar-item w3-button w3-padding-large w3-hover-grey w3-theme-d4"><i class="fa fa-home w3-margin-right"></i>ask Nitte</a>  -->
			 <a class="w3-bar-item w3-button w3-hide-medium w3-hide-large w3-right w3-round w3-padding-large w3-hover-white w3-large w3-theme-d2" href="javascript:void(0);" onclick="openNav()"><i class="fa fa-bars"></i></a>
			


			



			<a type="button"  href="mainpage.php" class="w3-bar-item w3-round w3-button w3-hide-small w3-padding-large w3-hover-white" title="My Feed">Home</a>
			
			<!--<a href="#" class="w3-bar-item w3-button w3-hide-small w3-padding-large w3-round w3-hover-grey" title="Answer">Answer</a>-->
			
		<!--	<p contenteditable="true" class="w3-border w3-half w3-opacity w3-padding" style="height: 20px">Search AskNitte</p> -->
			
			<div class="w3-dropdown-hover w3-hide-small">
			<button class="w3-bar-item w3-button w3-left-align w3-hide-small w3-padding-large w3-round w3-hover-white" title="Notifications"><i class="fa fa-bell"></i><!--<span class="w3-badge w3-right w3-small w3-green">3</span>--></button>
				


				<div class="w3-dropdown-content w3-card-4 w3-bar-block" style="width:200px">
					<a href="#" class="w3-bar-item w3-button">(Notifications here)</a>
				</div>
				
			</div>
			





				

			
			


		<!--	<a  href="#" class="w3-bar-item w3-dropdown-hover w3-button w3-right w3-padding-large" title="My Account"><img src="/w3images/avatar2.png" class="w3-circle" style="height:25px;width:25px" alt="Avatar"></a>

			<div class="w3-dropdown-content w3-card-4 w3-bar-block" style="width:200px">
					<a href="#" class="w3-bar-item w3-button">Sign Out</a>

	</div>-->

		<div class="w3-dropdown-hover w3-right w3-margin-right margin-top ">
			<button class="w3-bar-item w3-button w3-left-align w3-hide-small w3-padding-large w3-round w3-hover-white" title="My Account"><img src="/w3images/avatar2.png" class="w3-circle" style="height:25px;width:25px" alt="Avatar"></button>
				
					<div class="w3-dropdown-content w3-large w3-card-4 w3-bar-block" style="right:0">
					<a href="profile.php" class="w3-bar-item w3-button w3-hover-teal"><?php echo $_SESSION["name"];?></a>
					<a href="logout.php" class="w3-bar-item w3-hover-red w3-small w3-button"><h6>Log Out</h6></a>
				</div>
</div>
			
					
				


			

		
		<button id="asknitte+" onclick="document.getElementById('id01').style.display='block'" style="width:auto;" href="#" class="w3-bar-item w3-button w3-round w3-right w3-padding-large w3-hover-black w3-hover-text-blue" title="Ask">AskNitte +</button>





			<!-- 'The asknitte +' top right corner modal -->

		<div id="id01" class="modal">
			<span onclick="document.getElementById('id01').style.display='none'" class="close" title="Close">x</span>

			<form class="model-content animate " action="askquestion.php" method="post">
				<div class="container w3-text-white">
					<label><h2 class="w3-text-white"><strong><?php echo $_SESSION["name"];?></strong> asks</h2></label>
					<input type="text" name="quest_ask" class="w3-round w3-padding-large" id="text" placeholder="Whats your question?"  style="text-transform: initial;" >

					<br>

						<div class="clearfix">
							<button type="submit" id="askbtn" name="addDom" class="w3-button w3-right w3-large w3-white w3-padding-large w3-round w3-margin-bottom">Ask</button>

						</div>
					</div>	
				</form>
			</div>
		

			
		
		

		</div>
	</div>







			<div class="w3-container w3-content" style="max-width:1400px;margin-top:80px">

 				<div class="w3-row">

 						<div class="w3-col m3">
					
						<div class="w3-card-2 w3-round w3-white">
							<div class="w3-container">
								 <h4 class="w3-centre">Feeds</h4> 
								<hr>
								<p><a href="#"><i class="fa-fw w3-margin-right w3-text-theme"></i>Write a story! (alpha)</a></p>
								<!--<p><a href="#"><i class="fa-fw w3-margin-right w3-text-theme"></i>New Questions</a></p>-->
								<!--  <p><a href="#"><i class="fa-fw w3-margin-right w3-text-theme"></i>Bookmarked Answers</a></p> -->
							</div>	
						</div>
					</div>
				
 					 <div class="w3-col m7">

 					 		<div class="w3-row-padding">
				<div class="w3-col m12">
						<div class="w3-card-2 w3-round w3-white">
							<div class="w3-container w3-padding">
								<a href="profile.php"><h6 class="w3-text-black"><strong><?php echo $_SESSION["name"]; ?></strong></h6></a>
								<h6 class="">USN: <?php echo $_SESSION["usn"]; ?></h6>
								<h6 class="">Hi <strong><?php echo $_SESSION["uid"]; ?></strong>. Thankyou for being part of the family!</h6>
								
								<!--<h6 class="w3-opacity-max"> <?php //echo $_SESSION["usn"]; ?></h6>-->
								<!--<a href="#" ><button onclick="document.getElementById('id01').style.display='block'"  class="w3-opacity w3-hover-text-indigo w3-large">What's your question?</button></a>-->
								</div>
							</div>
						</div>
					</div>

						<br>
						<br>

						 		<div class="w3-row-padding">
				<div class="w3-col m12">
						<div class="w3-card-2 w3-round w3-white">
							<div class="w3-container w3-padding">
									<h6>Here is what you asked...</h6>
								</div>
							</div>
						</div>
					</div>



					




 					







 				




 					 	<?php

			include 'queryquestions_profile.php'; // <-- Very Important, do not i repeat do not delete this! 




			//$link = mysqli_connect("localhost", "root","", "asknitte");

			/*if (mysqli_connect_errno())
  {
  echo "Failed to connect to MySQL: " . mysqli_connect_error();
  }
  else
echo 'Connected successfully'; //Connects successfully
*/
			//session_start();


	//$page = $_GET["page"];

	/*if($page = "" || $page = "1")
	{
		$page1=0;
	}
	else
	{
		$page1 = ($page*5)-5;
	}*/
			//$query = "SELECT * FROM contentpostquestion  ORDER BY conent_id_q DESC /*LIMIT $page1, 5*/";
			//$result = mysql_query($query);
			//$result = mysqli_query($link,$query);*/
				//echo $result;

		/*if (!$result)
{
echo("Error description: " . mysqli_error($link));
}
else
	echo 'yeah';*/
			/*if($result)
					echo 'yes';
			else
					echo 'no';
*/
				while($row = mysqli_fetch_array($result,MYSQLI_ASSOC))
				{
			
			//echo  $row["contentpostq"];
			//echo '<br>';
			$time1 = new DateTime($row["content_time_q"]);
			//$time2 = new DateTime('now');
			//$interval =  $time2->diff($time1);		



?>

	
			
		<div   onLoad="getcontent()"  id="<?php echo $row["conent_id_q"];?>" class=" w3-container w3-card-2 w3-white w3-round w3-margin"> <br>
			
			<span class="w3-right w3-opacity"><?php echo $time1->format("M d ");?></span>
			<span class="w3-left w3-opacity"><?php //echo $row["conent_id_q"];?></span>
			<h2><strong>Q.</strong> <?php echo  $row["contentpostq"]; ?> </h2>
			<hr class="w3-clear">
			<!--<?php //echo 'HEllo'; ?>-->
			<!--<button id="mybtn" onclick="document.getElementById('myModal').style.display='block'" type="button" >Answer!</button>-->
			<form >
			<a href="question_thread.php?ak=<?php echo $row["conent_id_q"];?>"  name="idval" id="<?php echo $row["conent_id_q"];?>" value=" <?php echo $row["conent_id_q"];?>" class=" w3-button w3-teal w3-hover-teal w3-padding-large w3-round w3-margin-bottom " >View Thread</a>
			
			<!--<button class="w3-tag w3-small w3-theme-l1">+Follow</button>-->
			<!-- <button class="w3-tag w3-small w3-theme-l1">Bookmark</button> --> 

			<a href="reportq.php?ak=<?php echo $row["conent_id_q"];?>" type="button" id="report" class="w3-tag w3-theme-d1 w3-small w3-margin-bottom w3-right w3-hover-red">Report abuse</a>


			<!--<button name="idval" id="myBtn"  class="w3-tag w3-theme-d1 w3-small w3-margin-bottom w3-right w3-hover-red" >Report Abuse</button>-->

			<!--<a  type="button" name="idval"  class="w3-tag w3-theme-d1 w3-small w3-margin-bottom w3-right w3-hover-red"><button id="myBtn" onclick="document.getElementById('myModal').style.display='block'"  class="w3-opacity w3-hover-text-indigo w3-large">Report abuse</button></a>-->

		</div>
		<?php } ?>
	</div>
</div>

 		</div>



<br>


 <footer class="w3-container w3-teal w3-padding-16 footer">
  <p><strong>Ask Nitte</strong> For hugs or bugs contact <a href="support.php" class="w3-text-black"> support</a></p>
  
  		</footer>








<script>
		function answerFun()
		{	
			
			var person = prompt("Enter your answer!","");

		}



		var modal = document.getElementById('id01');

		window.onclick = function(event)
		{
			if(event.target == modal)
			{
				//modal.style.display = "none";
				//alert("button was clicked");
			}
		}


	






		
				


	</script>
	</body>






















	</html>







	<style>
html,body,h1,h2,h3,h4,h5 {font-family: "Open Sans", sans-serif}
		
		

.footer {
   
   left: 0;
   bottom: 0;
   width: 100%;
   top: 100%
   
   background-color: red;
   color: white;
   text-align: center;
}

		/*This is for the Ask a question in the top right hand corner!*/


		/*all the buttons*/
		button
		{
			/*background-color: #4CAF50;
			color: white;
			padding:14px 20px;
			margin: 8px;
			border:none;*/
		/*	cursor:pointer;*/
			/*width:100%;*/
		}

		/* making the input txt full size for accepting the question*/

			input[type=text]
		{
			width: 100%;
			 padding: 10px;
			margin: 8px;
			display:inline-block;
			border: solid 5px #c9c9c9;
			box-sizing: border-box;
			  box-shadow: none;
			  font-family: sans-serif;
			  appearance: none;
			  border-radius: none;
			  transition: box-shadow 0.3s, border 0.3s;
			  border-bottom: solid 2px #c9c9c9;
			/*font-size:20pt;*/
		}

		#text
		{
			font-size:18pt;
			height:60px;
		}

       /* the ask! button at the top right corner*/
		.ask
		{
			padding:14px 20px;
			background-color:  	#1E90FF;
		}
		

		/* content of the ask button*/
		.container
		{
			padding:16px;
		}

		/* ask button onclick modal*/
		
		.modal
		{
			display: none;
			position:fixed;
			z-index:1;
			left:0;
			top:50;
			width:100%;	
			height: 35%;
			/*overflow:auto;*/
			background-color: rgb(0,255,255);
			background-color: rgba(0,128,128,0.9);
			padding-top: 20px;
		}

		/* ask button onclick modal inside */

		.modal-content
		{
			background-color: #fefefe;
			margin:5% auto 15% auto;
			border: 1px solid #888;
			width:80%;


		}
		
		.close
		{
			position:absolute;
			right: 35px;
			top: 15px;
			color: #000;
			font-size: 40px;
			font-weight: bold;

		}


		.close:hover,
		.close:focus
		{
			color:black;
			cursor: pointer;
		}



		.clearfix::after
		{
			content:" ";
			clear:both;
			display:table;
		}




</style>
