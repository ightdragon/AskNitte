<?php



session_start();

if(!isset($_SESSION["uid"])){
  header("location:indexform.php");
}
//include 'mainpage.php';

?>




<!DOCTYPE>
<html>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
<link rel="stylesheet" href="https://www.w3schools.com/lib/w3-theme-blue-grey.css">
<link rel='stylesheet' href='https://fonts.googleapis.com/css?family=Open+Sans'>
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
	  
<!-- <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
-->
	
<head>

		<?php $link = mysqli_connect("localhost", "root","", "asknitte");

				//include 'mainpage.php'; 
					//echo $var;
				$id = $_GET['ak'];
				$_SESSION['qid'] = $id;
				$query = "SELECT * FROM contentpostquestion WHERE conent_id_q = $id  ";
					$result = mysqli_query($link,$query);
					/*	if($result)
							echo 'yes';
						else
							echo 'no';
					*/

						$row = mysqli_fetch_array($result,MYSQLI_ASSOC);
				$timequest = new DateTime($row["content_time_q"]);
			//echo $id;

			 ?>








		<meta charset="utf-8">
		<title><?php echo $row["contentpostq"]; ?></title></title>
		<link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
		<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>





		<!--<script>



</script>-->


</head> 
	
	
	


	<body class="w3-theme-l5">
		



		<div class="w3-top">
		<div class="w3-container w3-teal w3-left-align w3-large">

				 <a class="w3-bar-item w3-button w3-hide-medium w3-hide-large w3-right w3-round w3-padding-large w3-hover-white w3-large w3-theme-d2" href="javascript:void(0);" onclick="openNav()"><i class="fa fa-bars"></i></a>




				 					<!-- The Home button -->
				 <input type="button" value="Home" onClick="window.location.replace('mainpage.php')" href="mainpage.php" class="w3-bar-item w3-round w3-button w3-hide-small w3-padding-large w3-hover-white" title="Home">
			


				 					<!--The notifications-->
				<div class="w3-dropdown-hover w3-hide-small">
			<button class="w3-bar-item w3-button w3-left-align w3-hide-small w3-padding-large w3-round w3-hover-white" title="Notifications"><i class="fa fa-bell"></i><!--<span class="w3-badge w3-right w3-small w3-green">3</span>--></button>

				</div>

									<!--The account avatar-->
				<div class="w3-dropdown-hover w3-right w3-margin-right margin-top ">
			<button class="w3-bar-item w3-button w3-left-align w3-hide-small w3-padding-large w3-round w3-hover-white" title="My Account"><img src="/w3images/avatar2.png" class="w3-circle" style="height:25px;width:25px" alt="Avatar"></button>
				
					<div class="w3-dropdown-content  w3-large w3-card-4 w3-bar-block" style="right:0">
					<a href="profile.php" class="w3-bar-item w3-button w3-hover-teal"><?php echo $_SESSION["name"];?></a>
					<a href="logout.php" class="w3-bar-item w3-hover-red w3-small w3-button"><h6>Log Out</h6></a>
				</div>
		</div>



									<!--The AskNitte + button on the top right corner-->

				<button id="asknitte+" onclick="document.getElementById('id01').style.display='block'" style="width:auto;" href="#" class="w3-bar-item w3-button w3-round w3-right w3-padding-large w3-hover-black w3-hover-text-blue" title="Ask">AskNitte +</button>






			<!-- 'The asknitte +' top right corner modal -->			<!-- The modal -->

		<div id="id01" class="modal">
			<span onclick="document.getElementById('id01').style.display='none'" class="close" title="Close">x</span>

			<form class="model-content animate " action="askquestion.php" method="post">
				<div class="container w3-text-white">
					<h2 class="w3-text-white"><strong><?php echo $_SESSION["name"];?></strong> asks</h2>
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
		
													<!-- Left coloumn, page container -->
		
		<div class="w3-container w3-content" style="max-width:1400px;margin-top:80px;" >
			
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
				
		
	
		
	
		
			





														<!-- Middle coloumn --> 
	
		
	    <div class="w3-col m7">
		
			<div class="w3-row-padding">
				<div class="w3-col m12">


						<div class="w3-card-2 w3-round w3-white">
							<div class="w3-container w3-padding">
							<!--	<span class="w3-left w3-opacity"><?php //echo $row["conent_id_q"];?></span>-->
								<!--<h6 class="w3-opacity-max"> asked by <a href="profile.php?id=<?php //echo $row["content_by_q"]; ?>"> <?php// echo $row["content_by_q"]; ?> </a></h6> -->

								<span class="w3-right w3-opacity"><?php echo $timequest->format('M d Y ');?></span>
								<span class="w3-left w3-opacity">asked by <strong><?php echo $row["content_by_q"];?></strong></span>
								<br>
								<h1><strong><?php echo $row["contentpostq"]; ?></strong> </h1>
								<!--<a href="question_thread.php?ak=<?php //echo $row["conent_id_q"];?>" type="button" id="report" class="w3-tag w3-theme-d1 w3-small w3-margin-bottom w3-right w3-hover-red">Report abuse</a>-->
								<!--<a href="#" ><button onclick="document.getElementById('id01').style.display='block'"  class="w3-opacity w3-hover-text-indigo w3-large">What is your question?</button></a>-->
								<button name="idval" id="myBtn"  class=" w3-button w3-left w3-large w3-teal w3-hover-teal w3-padding-large w3-round w3-margin-bottom " >Answer!</button>
								<!--<button class="w3-tag w3-right w3-small w3-theme-l1">+Follow</button>-->
								</div>

							</div>

							
							
						</div>

					</div>
					
		<!--<br>-->


<!---->
					<!-- querying answers to the page -->
												
			

			<!-- include 'query_answers.php'; // <-- Very Important, do not i repeat do not delete this! -->


				<?php



			$link = mysqli_connect("localhost", "root","", "asknitte");





				/*if($page = "" || $page = "1")
	{
		$page1=0;
	}
	else
	{
		$page1 = ($page*5)-5;
	}*/			$id = $_SESSION['qid'];


			$query = "SELECT * FROM content_post_answer WHERE content_id_q = $id"; /*ORDER BY conent_id_q DESC LIMIT $page1, 5*/
			//$result = mysql_query($query);
			$result = mysqli_query($link,$query);

		









			while($row = mysqli_fetch_array($result,MYSQLI_ASSOC))
			{

				$time1 = new DateTime($row["content_time_a"]);

				
			//$time2 = new DateTime('now');
			//$interval =  $time2->diff($time1);
				?>


					<div   onLoad="getcontent()"   class=" w3-container w3-card-2 w3-white w3-round w3-margin"> <br>
			<!-- id="<?php //echo $row["conent_id_q"];?>"-->
			<!--<span class="w3-right w3-opacity"><?php //echo $interval->format("%H hours ago");?></span>-->
			<span class="w3-right w3-opacity"><?php echo $time1->format("M d");?></span>
			<span class="w3-left w3-opacity"><strong><?php echo $row["content_by_a"];?></strong> answers</span>
			<br>
			<h3><?php echo  $row["contentposta"]; ?> </h3>
			<script src="https://ajax.googleapis.com/ajax/libs/jquery/2.1.1/jquery.min.js"></script>

			<!-- <span class="voteup">Upvote</span>  <span class="votedown">Downvote </span>-->
			<!--<button class="w3-tag w3-small w3-theme-l1">Upvote</button>
			<button class="w3-tag w3-small w3-theme-l1">Downvote</button>-->

			<a href="reporta.php?ank=<?php echo $row["answer_id"];?>" type="button" id="report" class="w3-tag w3-theme-d1 w3-small w3-margin-bottom w3-right w3-hover-red">Report abuse</a>

			<!--<button name="idval" id="myBtn"  class=" w3-button w3-small w3-theme-d1   w3-round w3-margin-bottom w3-margin-bottom w3-right w3-hover-red" >Report Abuse</button>-->

			

		</div>

		<?php } ?>
</div>
</div>

</div>

													<!-- The Modal for Answer! -->




										<!--	<div id="myModal" class="modal">
			<span onclick="document.getElementById('myModal').style.display='none'" class="close" title="Close">x</span>

			<form class="model-content animate " action="answer_question.php" method="post">
				<div class="container w3-text-white">
					<!--<h2 class="w3-text-black"><?php //echo $_SESSION["name"];?> asks</h2>--><!--

					<input type="text" name="quest_answer" class="w3-round w3-padding-large" id="text" placeholder="Your answer here?"  style="text-transform: initial;" >

					<br>

						<div class="clearfix">

					<!--<a href="answer_question.php?ak=<?php// echo $id ?>"><?php// echo '<button  type="submit" id="askbtn" name="addDom" class="w3-button w3-right w3-margin-bottom w3-theme-d2 w3-hover-black w3-padding-large w3-hover-text-blue">your buttons name goes here</button>';?></a>-->


						<!-- <a does not take answer input, but stores on db -->

							<!-- <button gets the answer as input, but does not get the id -->

<!--
						<a href="answer_question.php?ak=<?php// echo $id ?>" type="submit" class="w3-button w3-right w3-margin-bottom w3-theme-d2 w3-hover-black w3-padding-large w3-hover-text-blue">Answer</a>


							<!--<form action="answer_question.php?ak=<?php //echo $id ?>">
								<input type="submit" value="Answer">
							</form>-->

							<!--<button type="submit" id="askbtn" name="addDom" class="w3-button w3-right w3-margin-bottom w3-theme-d2 w3-hover-black w3-padding-large w3-hover-text-blue">Ask1</button>-->
								<!--
						</div>
					</div>	
				</form>
			</div>


-->






























		<div id="myModal" class="modalans" >

  																<!-- Modal content -->
  			<div class="modal-content">
   					<div class="modal-header">
   	  					 <span onclick="document.getElementById('myModal').style.display='none'" class="closeans w3-right" title="Close">X</span>
     						 <h2>Answer!</h2>
   					</div>



   						<div class="modal-body">
   								<form class="model-content animate" action="answer_question.php" method="post" id="formid" name="myid">
									<div class="container w3-text-white">
										<!--<h2 class="w3-text-black"><?php //echo $_SESSION["name"];?> answers</h2>-->

										<input type="text" name="quest_answer" class="w3-round w3-padding-large" id="text" placeholder="Your answer..."  style="text-transform: initial;" >

									<br>

								

										<div class="clearfix">


											
											<button href="answer_question.php?ak=<?php echo $id ?>"  name="idval" id="myBtn" class=" w3-button w3-right w3-teal w3-hover-teal w3-padding-large w3-round w3-margin-bottom " >Answer!</button>>
											
											<!--<a href="answer_question.php?ak=<?php //echo $id ?>"><input type="text" class="button" value="Answer"></a>-->
										</div>

									</div>	

								</form>
								





    					</div>

   												<!-- <div class="modal-footer">
   													   <h3>Modal Footer</h3>
  												 </div>-->

  		</div>
 		</div>
								



<br>



 <footer class="w3-container w3-teal w3-padding-16 footer">
  <p><strong>Ask Nitte</strong> For hugs or bugs contact <a href="support.php" class="w3-text-black"> support</a></p>
  
  		</footer>















</body>

</html>


<script type="text/javascript">


	$('.voteup').click(function () {
  $(this).toggleClass('on');
});


	$('.votedown').click(function () {
  $(this).toggleClass('on');
});



document.getElementById("myBtn").onclick = function() {
    document.getElementById("formid").submit();
}






// Get the modal
var modal = document.getElementById('myModal');

// Get the button that opens the modal
var btn = document.getElementById("myBtn");

// Get the <span> element that closes the modal
//var span = document.getElementsByClassName("closeans")[0];

// When the user clicks the button, open the modal 
btn.onclick = function() {
    modal.style.display = "block";
}

// When the user clicks on <span> (x), close the modal
span.onclick = function() {
    modal.style.display = "none";
}

// When the user clicks anywhere outside of the modal, close it
window.onclick = function(event) {
    if (event.target == modal) {
        modal.style.display = "none";
    }
}




</script>



<style>
html,body,h1,h2,h3,h4,h5 {font-family: "Open Sans", sans-serif}
		


.footer {
   
   left: 0;
   bottom: 0;
   width: 100%;
   
   background-color: red;
   color: white;
   text-align: center;
}
/* The Modal (background) */
.modal {
    display: none; /* Hidden by default */
    position: fixed; /* Stay in place */
    z-index: 1; /* Sit on top */
    padding-top: 100px; /* Location of the box */
    left: 0;
    top: 0;
    width: 100%; /* Full width */
    height: 100%; /* Full height */
    /*overflow: auto;*/ /* Enable scroll if needed */
    background-color: rgb(0,0,0); /* Fallback color */
    background-color: rgba(0,0,0,0.4); /* Black w/ opacity */
}

/* Modal Content */
.modal-content {
    position: relative;
    background-color: #fefefe;
    margin: auto;
    padding: 0;
    border: 1px solid #888;
    width: 80%;
    box-shadow: 0 4px 8px 0 rgba(0,0,0,0.2),0 6px 20px 0 rgba(0,0,0,0.19);
    -webkit-animation-name: animatetop;
    -webkit-animation-duration: 0.4s;
    animation-name: animatetop;
    animation-duration: 0.4s
}

/* Add Animation */
@-webkit-keyframes animatetop {
    from {top:-300px; opacity:0} 
    to {top:0; opacity:1}
}

@keyframes animatetop {
    from {top:-300px; opacity:0}
    to {top:0; opacity:1}
}

/* The Close Button */
.close {
    color: white;
    float: right;
    font-size: 28px;
    font-weight: bold;
}

.close:hover,
.close:focus {
    color: #000;
    text-decoration: none;
    cursor: pointer;
}

.modal-header {
    padding: 2px 16px;
    background-color: #008080;
    color: white;
}

.modal-body {padding: 2px 16px;}

.modal-footer {
    padding: 2px 16px;
    background-color: none;
    color: white;
}
textarea {
    display: block;
    margin-left: auto;
    margin-right: auto;
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
			height: 40%;
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
		/* answer button */
		.closeans
		{
			position:absolute;
			right: 35px;
			top: 15px;
			color: #000;
			font-size: 40px;
			font-weight: bold;

		}


		.closeans:hover,
		.closeans:focus
		{
			color:black;
			 text-decoration: none;
			cursor: pointer;
		}


	.modalans
		{
			display: none;
			position:fixed;
			z-index:1;
			left:0;
			top:50;
			width:100%;	
			height: 35%;
			/*overflow:auto;*/
			/*background-color: rgb(0,255,255);
			background-color: rgba(0,128,128,0.9);*/
			padding-top: 20px;
		}
		.clearfix::after
		{
			content:" ";
			clear:both;
			display:table;
		}

	.voteup {
  display: inline-block;
  overflow: hidden;
  width: 40px;
  height: 25px;
 /* cursor: pointer;
  background: url('http://i.stack.imgur.com/iqN2k.png');
  background-position: 0 -25px;*/
} 


.voteup.on {
  background-color: rgb(255,140,0);
}



	.votedown {
  display: inline-block;
  overflow: hidden;
  width: 40px;
  height: 25px;
  /*cursor: pointer-down;
  background: url('http://i.stack.imgur.com/iqN2k.png');
  background-position: 0 -25px;*/
} 


.votedown.on {
  background-color: rgb(255,140,0);
}



</style>
