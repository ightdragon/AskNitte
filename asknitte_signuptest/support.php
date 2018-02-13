<?php



session_start();

if(!isset($_SESSION["uid"])){
  header("location:indexform.php");
}
//include 'mainpage.php';

?>




<!DOCTYPE html>
<html>

<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
<link rel="stylesheet" href="https://www.w3schools.com/lib/w3-theme-blue-grey.css">
<link rel='stylesheet' href='https://fonts.googleapis.com/css?family=Open+Sans'>
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
<head>


	<meta charset="utf-8">
		<title>Home - AskNitte</title>
		<link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
		<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
		 <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

		 <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-beta/css/bootstrap.min.css" integrity="sha384-/Y6pD6FV/Vv2HJnA6t+vslU6fwYXjCFtcEpHbNJ0lyAFsXTsjBbfaDjzALeQsN6M" crossorigin="anonymous">
	<title></title>
</head>



<body class="w3-theme-l5">


<div class="w3-top " >
		<div class="w3-container w3-teal w3-left-align w3-large " >

			 <a class="w3-bar-item w3-button w3-hide-medium w3-hide-large w3-right w3-round w3-padding-large w3-hover-white w3-large w3-theme-d2 btn btn-primary" href="javascript:void(0);" onclick="openNav()"><i class="fa fa-bars"></i></a>

			 <input type="button" value="Home" onClick="window.location.replace('mainpage.php')" href="mainpage.php" class="w3-bar-item w3-round w3-button w3-hide-small w3-padding-large w3-hover-white" title="Home">
			

</div>
</div>



	<div class="w3-container w3-content" style="max-width:1400px;margin-top:80px">

 				<div class="w3-row">
 					 <div class="w3-col m7">

 					 		<div class="w3-row-padding">
				<div class="w3-col m12">
						<div class="w3-card-2 w3-round w3-white">
							<div class="w3-container w3-padding">
								<h5>Email at: asknitte@gmail.com</h5>
								<br>
								<h5>Thank you for using</h5>
								<p><strong>AskNitte</strong> is a question-answer forum for the people at NMIT. Communication at college has always been an issue, especially when it comes to getting to know something or someone. Bus timings, Shop timings and many other things...</p>

							</div>
						</div>
					</div>



 					 </div>


 				</div>
 			</div>
	
</body>
</html>



<style>
html,body,h1,h2,h3,h4,h5 {font-family: "Open Sans", sans-serif}






.footer {
   
   left: 0;
   bottom: 0;
   width: 100%;
   height: 10%;
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
