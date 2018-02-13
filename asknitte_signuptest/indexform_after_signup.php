<!doctype html>

<html>

<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
<link rel="stylesheet" href="https://www.w3schools.com/lib/w3-theme-blue-grey.css">
<link rel='stylesheet' href='https://fonts.googleapis.com/css?family=Open+Sans'>
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">

    <head>
        <meta charset="utf-8">
        <title>Ask Nitte</title>
        <link rel="stylesheet" href="style.css">
    </head>
    
    
    <body class="w3-theme-l1">








 <div class="w3-container w3-teal w3-center w3-large">
           
        <div class="right"> 
            
            
            <div class="formBox w3-container w3-content">

               <div class="tab-content">
                    <h1>Hi! Welcome to AskNitte</h1>
                    <p>AskNitte is a question-answer forum for the people at NMIT</p>
                    <h4>It was created as for socio-academic communication, which might help you score more marks. You know Knowledge is Power!</h4>
                    <h4>AskNitte is free to use, and always will be</h4>
                    <h6>Please do refrain from chatting</h6>
                    <br>
                    <h2>You will have to sign in to use the services</h2>

                    <br>

                <div id="login">
              <!--  <h1>Welcome Back!</h1> -->
                <form  id="login" action="signin.php" method="post">
                            
                                <input type="text"              name="username" id="usernamelog" placeholder="username" required autocomplete="off"/>
                                

                                
                                <input type="Password"          name="password" id="passwordlog" placeholder="password" required autocomplete="off"/>
                                
                                <button class="w3-hover-text-blue  w3-button w3-padding-large w3-text-white w3-hover-black " type="submit" style="width:auto;" name="signinsubmit" title="Log in">Log in</button>
                                    <br>
                            <a href="#">Forgot password</a>
                        
                        </form>


                    </div>
                </div>
            </div>
        </div>
    </div>


        <div class="w3-center"><h2>OR</h2></div>


    <div class="w3-container w3-teal w3-center w3-large">
           
        <div class="left"> 
            
            
            <div class="formBox w3-container w3-content">


                <div class="tab-content">
                    <div id="signup">
                    <h1> Sign Up for free!</h1>
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
                   <button class="w3-button w3-padding-large w3-black w3-text-white w3-hover-black w3-hover-text-blue" type="submit" name="signup" id="btn
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


    </body>
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
</style>