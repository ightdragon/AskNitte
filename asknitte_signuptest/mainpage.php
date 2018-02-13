<?php

session_start();

if(!isset($_SESSION["uid"])){
  header("location:indexform.php");
}


?>





<!-- Using the W3.CSS framework -->


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
		<meta charset="utf-8">
		<title>Home - AskNitte</title>
		<link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
		<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
		 <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

		 <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-beta/css/bootstrap.min.css" integrity="sha384-/Y6pD6FV/Vv2HJnA6t+vslU6fwYXjCFtcEpHbNJ0lyAFsXTsjBbfaDjzALeQsN6M" crossorigin="anonymous">


<script>



/*	$("#addbut").click(function(){
 alert($(this).parent().attr('id')) //<-- Want to achieve
});

*/



/*$('.postButton').click(function() {
    $('#postId').val($(this).attr('id'));
});*/

</script>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>








</head> 
	
	
	












	<body class="w3-theme-l5">
		
		
		
		
		
														<!-- NAVBAR -->



		





		<div class="w3-top " >
		<div class="w3-container w3-teal w3-left-align w3-large " >
			





			

			<!-- <a href="#" class="w3-bar-item w3-button w3-padding-large w3-hover-grey w3-theme-d4"><i class="fa fa-home w3-margin-right"></i>ask Nitte</a>  -->
			 <a class="w3-bar-item w3-button w3-hide-medium w3-hide-large w3-right w3-round w3-padding-large w3-hover-white w3-large w3-theme-d2 btn btn-primary" href="javascript:void(0);" onclick="openNav()"><i class="fa fa-bars"></i></a>
			


			



			<input type="button" value="Home" onClick="window.location.replace('mainpage.php')" href="mainpage.php" class="w3-bar-item w3-round w3-button w3-hide-small w3-padding-large w3-hover-white" title="Home">
			
			<!--<a href="#" class="w3-bar-item w3-button w3-hide-small w3-padding-large w3-round w3-hover-grey" title="Answer">Answer</a>-->
			
		<!--	<p contenteditable="true" class="w3-border w3-half w3-opacity w3-padding" style="height: 20px">Search AskNitte</p> -->
			
			<div class="w3-dropdown-hover w3-hide-small">
			<button class="w3-bar-item w3-button w3-left-align w3-hide-small w3-padding-large w3-round w3-hover-white" title="Notifications"><i class="fa fa-bell"></i><!--<span class="w3-badge w3-right w3-small w3-green">3</span>--></button>
				


				<div class="w3-dropdown-content w3-card-4 w3-bar-block w3-hover-white " style="width:200px">
					<a href="#" class="w3-bar-item w3-button w3-hover-white">(Notifications here)</a>
				</div>
				
			</div>
			





				

			
			


		<!--	<a  href="#" class="w3-bar-item w3-dropdown-hover w3-button w3-right w3-padding-large" title="My Account"><img src="/w3images/avatar2.png" class="w3-circle" style="height:25px;width:25px" alt="Avatar"></a>

			<div class="w3-dropdown-content w3-card-4 w3-bar-block" style="width:200px">
					<a href="#" class="w3-bar-item w3-button">Sign Out</a>

	</div>-->

		<div class="w3-dropdown-hover w3-right w3-margin-right margin-top ">
			<button class="w3-bar-item w3-button w3-left-align w3-hide-small w3-padding-large w3-round w3-hover-white" title="My Account"><img src="/w3images/avatar2.png" class="w3-circle" style="height:25px;width:25px" alt="Avatar"></button>
				
					<div class="w3-dropdown-content w3-large w3-card-4 w3-bar-block" style="right:0">
					<a href="profile.php" class="w3-bar-item w3-button w3-hover-teal "><?php echo $_SESSION["name"];?></a>
					<a href="logout.php" class="w3-bar-item w3-hover-red w3-small w3-button"><h6>Log Out</h6></a>
				</div>
		</div>
			
					
				


			

		
		<button id="asknitte+" onclick="document.getElementById('id01').style.display='block'" style="width:auto;" href="#" class="w3-bar-item w3-button w3-round w3-right w3-padding-large w3-hover-black w3-hover-text-blue" title="Ask">AskNitte +</button>











<!-- 'The asknitte +' top right corner modal -->    			<!-- The Modal -->

		<div id="id01" class="modal">
			<span onclick="document.getElementById('id01').style.display='none'" class="close" title="Close">x</span>

			<form class="model-content animate " action="askquestion.php" method="post">
				<div class="container w3-text-white">
					<h2 class="w3-text-white"><strong><?php echo $_SESSION["name"];?></strong> asks</h2>

					<input type="text" name="quest_ask" class="w3-round w3-padding-large" id="text" placeholder="Whats your question?"  style="text-transform: initial;" >

					<br>

						<div class="clearfix">
							<button type="submit" id="askbtn" name="addDom" class=" w3-button w3-right w3-large w3-white w3-padding-large w3-round w3-margin-bottom">Ask</button>

						</div>
					</div>	
				</form>
			</div>



								               <!-- Report abuse modal -->



								               

		<!--	onclick="document.getElementById('id01').style.display='none'"-->
		
		

		</div>
	</div>
		
		
		
														<!-- Left coloumn, page container -->
		
		<div class="w3-container w3-content" style="max-width:1400px;margin-top:80px">
			
			<div class="w3-row">
				
				<div class="w3-col m3">
					
						<div class="w3-card-2 w3-round w3-white">
							<div class="w3-container">
								<br>
								 <h4 class="w3-centre">Feeds</h4> 
								<hr>
								<!--<p><a href="#"><i class="fa-fw w3-margin-right w3-text-theme"></i>Top stories</a></p>
								<p><a href="#"><i class="fa-fw w3-margin-right w3-text-theme"></i>New Questions</a></p>-->
								<!--  <p><a href="#"><i class="fa-fw w3-margin-right w3-text-theme"></i>Bookmarked Answers</a></p> -->
							</div>	
						</div>
					</div>
				
		
		
		
	
		
			
														<!-- Middle coloumn -->
	
		
	    <div class="w3-col m7">
		
			<div class="w3-row-padding">
				<div class="w3-col m12 ">
						<div class="w3-card-2 w3-round w3-white ">
							<div class="w3-container w3-padding ">

								<a href="profile.php"><h6 class="w3-text-black	"><strong><?php echo $_SESSION["name"];?></strong></h6></a>
								<br>
								<a href="#" ><button onclick="document.getElementById('id01').style.display='block'"  class="w3-opacity w3-hover-text-black w3-large whats">What is your question?</button></a>
								</div>
							</div>
						</div>
					</div>
	
		<br>
		
			
			
			
			












															<!-- Main container -->			
			
			<?php

			include 'queryquestions.php'; // <-- Very Important, do not i repeat do not delete this! 




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

				while($row = mysqli_fetch_array($result,MYSQLI_ASSOC))
				{
			
			//echo  $row["contentpostq"];
			//echo '<br>';
			$time1 = new DateTime($row["content_time_q"]);
			//$time2 = new DateTime('now');
			//$time1->format('Y-m-d');
			//$time2->format('Y-m-d');
			//$interval =  $time2->diff($time1);		

			

?>
			
		<div   onLoad="getcontent()"  id="<?php echo $row["conent_id_q"];?>" class=" w3-container w3-card-2 w3-white w3-round w3-margin"> <br>
			
			<span class="w3-right w3-opacity"><?php echo $time1->format('M d');?></span>
			<span class="w3-left w3-opacity"><?php //echo $row["conent_id_q"];?></span>
			<h2><strong> Q.</strong>  <?php echo  $row["contentpostq"]; ?></h2>
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
			

			<!--<button name="idval" id="<?php //echo $row["conent_id_q"];?>" onClick="reply_click(this.id)" class=" w3-button w3-teal w3-hover-teal w3-padding-large w3-round w3-margin-bottom " >Answer!</button>-->

<!--href="question_thread.php          onClick="reply_click(this.id)" "          value=" <?php// echo $row["conent_id_q"];?>"--> 




			 <!--<input type="button" id="<?php //echo $row["conent_id_q"];?>" name="idVal"  value=" <?php //echo $row["conent_id_q"];?>" class"navbtnplace">
			-->
			<?php
			
				//	$cookie_name = "uid";
				//	$cookie_value = $row['contentpostq'];
				//echo $_POST['idVal'];
				//	setcookie($cookie_name, $cookie_value, time() + (86400 * 30) );


			//echo  $varid1;

			/*if(isset($_REQUEST['idVal'])) {
   					 ext($_REQUEST['idVal']);
			}*/
			// $_SESSION['varid'] = 
				//echo $varid;
			 		//$varq //= $row['contentpostq']; ?>





  <!--<div class="modal fade" id="myModal" role="dialog">
    <div class="modal-dialog modal-lg">
    
      <!-- Modal content--><!--
      <div class="modal-content">
        <div class="modal-header">
          <button type="button" class="close" data-dismiss="modal">&times;</button>
          <h4 class="modal-title">Modal Header</h4>
        </div>
        <div class="modal-body">
          <p>Some text in the modal.</p>
        </div>
        <div class="modal-footer">
          <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
        </div>
      </div>
      
    </div>
  </div>
  -->


<!-- type="button" class="w3-button w3-theme-d1 w3-margin-bottom"  onclick="document.getElementById('myModal').style.display='block'"-->
				
				<!-- The Modal -->
<!--<div id="myModal" class="modal">

  <!-- Modal content -->
 <!-- <div id = "myModalcontent" class="modal-content">
    <span id ="closethis" class="close">&times;</span>
    <p>Some text in the Modal..</p>
  </div>

</div>-->




			
		
				<!--href="reportq.php?ak=<?php //echo $row["conent_id_q"];?>"-->



		<?php } 

			$query = "SELECT * FROM contentpostquestion";
			$result = mysqli_query($link,$query);
			$cou = $result->num_rows;
			$a = $cou/5;
			//echo $cou;
			$a = ceil($a);

			echo '<br>'; 

				for($b=$a; $b>=1; $b--)
				{
					?> <a href="mainpage.php?page=<?php echo $b;?>" class="w3-margin-right w3-right" style="text-decoration: none"><?php echo $b." ";?> </a><?php 
				}



		?>





		
		
		</div>
		
		</div>
		</div>
		
<!-- jQuery library -->
<script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
​
<!-- Popper -->
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.11.0/umd/popper.min.js" integrity="sha384-b/U6ypiBEHpOf/4+1nzFpr53nxSS+GLCkfwBdFNTxtclqqenISfwAzpKaMNFNmj4" crossorigin="anonymous"></script>
​
<!-- Latest compiled and minified Bootstrap JavaScript -->
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-beta/js/bootstrap.min.js" integrity="sha384-h0AbiXch4ZDo7tp9hKZ4TsHbi047NrKGLO3SEJAg45jXxnGIfYzk4Si90RDIqNm1" crossorigin="anonymous"></script>





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





														<!--script-->









		
<script type="text/javascript">



	/*$(document).ready( function() {
  $("button").click(function(){
  $('#<?php// echo $row["conent_id_q"];?>').load('question_thread.php #B');
  });
});*/




	function reply_click(clicked_id)
{
	//var varid = clicked_id;
    alert(clicked_id);
}


//
		/*function answerFun()
		{	
			
			var person = prompt("Enter your answer!","");

		}*/

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


		var modal = document.getElementById('id01');

		window.onclick = function(event)
		{
			if(event.target == modal)
			{
				modal.style.display = "none";
				//alert("button was clicked");
			}
		}







		document.getElementById("myBtn").onclick = function() {
    document.getElementById("formid").submit();
}








$(document).ready(function(){
    $("#report").on("click", function(){
        $("#div").remove();
    });
});


			//'ask nitte+' slide down animation
$(document).ready(function(){
    $("#asknitte+").click(function(){
        $("#myModal").slideDown("slow");
    });
});


		var modal = document.getElementById('myModal');

		window.onclick = function(event)
		{
			if(event.target == modal)
			{
				modal.style.display = "none";
				//alert("button was clicked");
			}
		}







		document.getElementById("myBtn").onclick = function() {
    document.getElementById("formid").submit();
}




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














// Get the modal
//var modal = document.getElementById('myModal');

// Get the button that opens the modal
//var btn = document.getElementById("myBtn");

// Get the <span> element that closes the modal
//var span = document.getElementsByClassName("closeans")[0];

// When the user clicks the button, open the modal 
/*btn.onclick = function() {
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
*/



/*// Get the modal
var modali = document.getElementById('myModal');

// Get the button that opens the modal
var btn = document.getElementById("mybtn");

// Get the <span> element that closes the modal
var span = document.getElementsByClassName("close")[0];

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
    if (event.target == modali) {
        modal.style.display = "none";
    }
}*/





		
				


	</script>
		
		
	</body>
	





</html>






	
	<style>
html,body,h1,h2,h3,h4,h5 {font-family: "Open Sans", sans-serif}



.whats:hover,
.whats:focus {
    color: #000;
    text-decoration: none;
    cursor: pointer;

}

.footer {
   
   left: 0;
   bottom: 0;
   width: 100%;
   height: 9%;
   background-color: red;
   color: white;
   text-align: center;
}
.footer1{
	 left: 0;
   bottom: 0;
   width: 100%;
   height: 9%;
   background-color: red;
   color: white;
   text-align: right;
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
		
		#myModal {
    display: none; /* Hidden by default */
    position: fixed; /* Stay in place */
    z-index: 1; /* Sit on top */
    padding-top: 100px; /* Location of the box */
    left: 0;
    top: 0;
    width: 100%; /* Full width */
    height: 100%; /* Full height */
    overflow: auto; /* Enable scroll if needed */
    background-color: rgb(0,0,0); /* Fallback color */
    background-color: rgba(0,0,0,0.4); /* Black w/ opacity */
}

/* Modal Content */
#myModalcontent {
    background-color: #fefefe;
    margin: auto;
    padding: 20px;
    border: 1px solid #888;
    width: 80%;
}

/* The Close Button */
#closethis{
    color: #aaaaaa;
    float: right;
    font-size: 28px;
    font-weight: bold;
}

#closethis:hover,
#closethis:focus {
    color: #000;
    text-decoration: none;
    cursor: pointer;
}

a.button {
    -webkit-appearance: button;
    -moz-appearance: button;
    appearance: button;

    text-decoration: none;
    color: initial;
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
			 text-decoration: none;
			cursor: pointer;
		}



		.clearfix::after
		{
			content:" ";
			clear:both;
			display:table;
		}

	
}


</style>

	


