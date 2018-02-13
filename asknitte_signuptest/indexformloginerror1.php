



<!-- 4th OCT: finish sign up and log in check -->

<!doctype html>

<html>

<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1">
<!--<link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
<link rel="stylesheet" href="https://www.w3schools.com/lib/w3-theme-blue-grey.css">-->
<link rel='stylesheet' href='https://fonts.googleapis.com/css?family=Open+Sans'>
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">

    <head>
        <meta charset="utf-8">
        <title>Ask Nitte</title>
        <link rel="stylesheet" href="style.css">
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

        <!-- Latest compiled and minified Bootstrap CSS -->
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-beta/css/bootstrap.min.css" integrity="sha384-/Y6pD6FV/Vv2HJnA6t+vslU6fwYXjCFtcEpHbNJ0lyAFsXTsjBbfaDjzALeQsN6M" crossorigin="anonymous">
    </head>
    
    
    <body class="w3-theme-l1">
    
  <!--  <div class="card yellow">
    <p>w3-card</p></div> -->
    
       <!-- <div class="title"><h1></h1></div>-->
       <br>
       
        <div class="w3-center w3-teal col-xs-1 p-3 mb-2  bg-light" align="center">
        <h1>Hi! Welcome to AskNitte</h1> 
                    <p>AskNitte is a question-answer forum for the people at NMIT</p>
                    <h4>It was created as for socio-academic communication.</h4>
                    <h4>AskNitte is free to use, and always will be</h4>
                    <h6>Please do refrain from chatting</h6>
                  <!--  <br>
                    <h2>You will have to sign in to use the services</h2>-->

                   
                </div>
 <br>
 <br>
  


        <div class="w3-container w3-teal w3-center w3-large col-xs-1 "  align="center">
          <h4 class="w3-center w3-text-black text-danger">Wrong username or password!</h4>
           
        <div class="right"> 
            
            
            <div class="formBox w3-container content center">

                

                <div id="login">
              <!--  <h1>Welcome Back!</h1> -->
                <form  id="login" action="signin.php" method="post" >
                            
                                <input type="text"       name="username" id="usernamelog" placeholder="username" required autocomplete="off"/>
                                

                                
                                <input type="Password"          name="password" id="passwordlog" placeholder="password" required autocomplete="off"/>
                                
                                <button class="w3-hover-text-blue  w3-button w3-padding-large w3-text-white w3-hover-black btn btn-primary" type="submit" style="width:auto;" name="signinsubmit" title="Log in">Log in</button>
                                    <br>
                            <a href="#">Forgot password</a>
                        
                        </form>


                    </div>
                </div>
            </div>
        </div>
        <br>
  



            <div class="w3-center col-xs-1 p-3 mb-2  bg-light" align="center"><h2>OR</h2><h1 class="p-3 mb-2  bg-light">Sign up for free!</h1></div>




<div class="w3-container w3-teal w3-center w3-large col-xs-1" align="center">
           
        <div class="left"> 
            
            
            <div class="formBox w3-container w3-content">


                <div class="tab-content ">
                    <div id="signup">
                   <!-- <h1 class="p-3 mb-2  bg-light"> Sign Up for free!</h1>-->
                    <br>
               <form id="signup" action = "signup2.php" method="post">
                <div class="top-row">
                <div class="field-wrap">

                <input type="text"           name="name"  id="name" placeholder="Full Name" class="r"  required autocomplete="off"/>
                </div>
                <div class="field-wrap">

                <input type="text"             name="usn"  id="usn" placeholder="USN" style= " text-transform: uppercase " maxlength="10" required autocomplete="off"/>
                </div>
                <div class="field-wrap">

                <input type="text"        name="usernamesign"  id="username" placeholder="username" style="text-transform: lowercase" minlength="5" required autocomplete="off"/>
            </div>
                <div class="field-wrap">

                <input type="Password"   name="passwordsign"   id="password" placeholder="Password" minlength="8" required autocomplete="off"/>
                   </div> 
                <div class="field-wrap">
                   


                  <!-- <input type="submit" name="signup" id="btn" value="Sign up!"> -->
                   <button class="w3-button w3-padding-large w3-black w3-text-white w3-hover-black w3-hover-text-blue btn btn-primary" type="submit" name="signup" id="btn
                   " title="Sign Up!"> >> </button>
                   
                
                 <!--   <a href="#" >Already a member?</a> -->
           
                   </div>
                </div>

                 
                </form>
                </div> 
            </div>
            


           

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

    </body>
    
    

    <script>
       /*
$('.form').find('input, textarea').on('keyup blur focus', function (e) {
  
  var $this = $(this),
      label = $this.prev('label');

      if (e.type === 'keyup') {
            if ($this.val() === '') {
          label.removeClass('active highlight');
        } else {
          label.addClass('active highlight');
        }
    } else if (e.type === 'blur') {
        if( $this.val() === '' ) {
            label.removeClass('active highlight'); 
            } else {
            label.removeClass('highlight');   
            }   
    } else if (e.type === 'focus') {
      
      if( $this.val() === '' ) {
            label.removeClass('highlight'); 
            } 
      else if( $this.val() !== '' ) {
            label.addClass('highlight');
            }
    }

});

$('.tab a').on('click', function (e) {
  
  e.preventDefault();
  
  $(this).parent().addClass('active');
  $(this).parent().siblings().removeClass('active');
  
  target = $(this).attr('href');

  $('.tab-content > div').not(target).hide();
  
  $(target).fadeIn(600);
  
});
*/

    </script>

</html>





<style>


 @import "compass/css3";



    body
{
    margin: 0;
    padding: 0;
  /*  background: #993300;
    */background-size: cover;
    font-family: sans-serif;
}

.title
{
    text-align: centre;
    padding: 50px 0 20px;
}

.title h1
{
    margin: 0;
    padding: 0;
    color: #262626;
    text-transform: uppercase;
    font-size: 36 px;
}

.container 
{
    width: 50%;
    height: 450px;
    background: #fff;
    margin: 0 auto;
    border: 2px solid;
    box-shadow: 0 15px 40px rgba(0,0,0,.5);
    
    
}
    
/*.container .left
    {
        float: left;
        width: 50%;
        height: 400px;
        box-sizing: border-box;
    }
    
.container .right
    {
        float: left;
        width: 50%;
        height: 400px;
        box-sizing: border-box;
    }


  mBox 
    {
        width: 50%;
       
        box-sizing: border-box;
        height: 100px;
        
    }
    */
    
.formBox p
    {
        margin: auto;
        padding: 2%;
        font-weight: bold;
        color: #000;
    }
    
.formBox input
    {
        margin-bottom: 20px;
    }

.formBox input[type="text"],
.formBox input[type="Password"],
    {
        border: none;
        border-bottom: 2px solid #000;
        outline: none;
        height: 40px;
    }
    
.formBox input[type="text"]:focus
.formBox input[type="Password"]:focus
    {
        border-bottom: 2px solid #262626
    }
.formBox input[type ="submit"]
    {
        border: none;
        outline: none;
        height: 40px;
        color: #fff;
        background: #262626;
        cursor: pointer;
    }
.formBox input [type="submit"]
    {
        background: #a6af13;
    }
.formBox a
    {
        color: #262626;
        font-size: 12px;
        font-weight: bold;
    }





#name
{
    height:40px;
    font-size:20pt;
    width:550px;
}

#usn
{
    height:40px;
    font-size:20pt;
    width:550px;
}

#username
{
    height:40px;
    font-size:18pt;
    width:550px;
}

#password
{
    height:40px;
    font-size:18pt;
    width: 550px;
}




/*$body-bg: #c1bdba;
$form-bg: #13232f;
$white: #ffffff;

$main: #1ab188;
$main-light: lighten($main,5%);
$main-dark: darken($main,5%);

$gray-light: #a0b3b0;
$gray: #ddd;

$thin: 300;
$normal: 400;
$bold: 600;
$br: 4px;

*, *:before, *:after {
  box-sizing: border-box;
}

html {
    overflow-y: scroll; 
}

body {
  background:$body-bg;
  font-family: 'Titillium Web', sans-serif;
}

a {
  text-decoration:none;
  color:$main;
  transition:.5s ease;
  &:hover {
    color:$main-dark;
  }
}

.form {
  background:rgba($form-bg,.9);
  padding: 40px;
  max-width:600px;
  margin:40px auto;
  border-radius:$br;
  box-shadow:0 4px 10px 4px rgba($form-bg,.3);
}

.tab-group {
  list-style:none;
  padding:0;
  margin:0 0 40px 0;
  &:after {
    content: "";
    display: table;
    clear: both;
  }
  li a {
    display:block;
    text-decoration:none;
    padding:15px;
    background:rgba($gray-light,.25);
    color:$gray-light;
    font-size:20px;
    float:left;
    width:50%;
    text-align:center;
    cursor:pointer;
    transition:.5s ease;
    &:hover {
      background:$main-dark;
      color:$white;
    }
  }
  .active a {
    background:$main;
    color:$white;
  }
}

.tab-content > div:last-child {
  display:none;
}


h1 {
  text-align:center;
  color:$white;
  font-weight:$thin;
  margin:0 0 40px;
}

label {
  position:absolute;
  transform:translateY(6px);
  left:13px;
  color:rgba($white,.5);
  transition:all 0.25s ease;
  -webkit-backface-visibility: hidden;
  pointer-events: none;
  font-size:22px;
  .req {
    margin:2px;
    color:$main;
  }
}

label.active {
  transform:translateY(50px);
  left:2px;
  font-size:14px;
  .req {
    opacity:0;
  }
}

label.highlight {
    color:$white;
}

input, textarea {
  font-size:22px;
  display:block;
  width:100%;
  height:100%;
  padding:5px 10px;
  background:none;
  background-image:none;
  border:1px solid $gray-light;
  color:$white;
  border-radius:0;
  transition:border-color .25s ease, box-shadow .25s ease;
  &:focus {
        outline:0;
        border-color:$main;
  }
}

textarea {
  border:2px solid $gray-light;
  resize: vertical;
}

.field-wrap {
  position:relative;
  margin-bottom:40px;
}

.top-row {
  &:after {
    content: "";
    display: table;
    clear: both;
  }

  > div {
    float:left;
    width:48%;
    margin-right:4%;
    &:last-child { 
      margin:0;
    }
  }
}

.button {
  border:0;
  outline:none;
  border-radius:0;
  padding:15px 0;
  font-size:2rem;
  font-weight:$bold;
  text-transform:uppercase;
  letter-spacing:.1em;
  background:$main;
  color:$white;
  transition:all.5s ease;
  -webkit-appearance: none;
  &:hover, &:focus {
    background:$main-dark;
  }
}

.button-block {
  display:block;
  width:100%;
}

.forgot {
  margin-top:-20px;
  text-align:right;
}*/
    
</style>

