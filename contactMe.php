<?php
$result = "";
$errName="";
$errEmail="";
$errMessage="";

if (isset($_POST["submit"])) {
      $name = $_POST['name'];
      $email = $_POST['email'];
      $message = $_POST['message'];

      $from = ' ';
      $to = 'ruban.raj710@gmail.com';
      $subject = 'Message from rubanrajendran.com ';

      $body = "From: $name\n E-Mail: $email\n Message:\n $message";

// Check if name has been entered
      if (!$_POST['name']) {
            $errName = 'Please enter your name';
      }

      // Check if email has been entered and is valid
      if (!$_POST['email'] || !filter_var($_POST['email'], FILTER_VALIDATE_EMAIL)) {
            $errEmail = 'Please enter a valid email address';
      }

      //Check if message has been entered
      if (!$_POST['message']) {
            $errMessage = 'Please enter your message';
      }


      // If there are no errors, send the email
      if (!$errName && !$errEmail && !$errMessage) {
            if (mail($to, $subject, $body, $from)) {
                  $result = '<div class="alert alert-success">Thank You! I will be in touch</div>';
            } else {
                  $result = '<div class="alert alert-danger">Sorry there was an error sending your message. Please try again later</div>';
            }
      }
}
?>
<html>
      <head>
            <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
            <title>Ruban Rajendran</title>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        
        <link rel="stylesheet" href="_css/bootstrap.css" />
        <link rel="stylesheet" href="_css/shared.css" />
        <link rel="stylesheet" href="_css/contactMe.css" />
        
        <script src="_js/jquery-3.1.1.js"></script>
        <script src="_js/bootstrap.js"></script>
        <script src="_js/myscript.js"></script>
        <script>
              $( document ).ready(function() {
              });
              
              function validateForm(){
                  var name = $('#name').val();
                  var email = $('#email').val();
                  var message = $('#message').val();
                   $('.asterix').hide();
                  if (!name) {
                        console.log("no name");
//                        $('#nameError').show();
                  }
                  if(!message){
                        console.log("no message");
//                        $('#messageError').show();
                  }
                  if(!email){
                        console.log("no email");
//                        $('#emailError').show();
                  }
                  if(!name || !email || !message){
                        $('#errorMessage').html("Fill all fields before sending.");
                        return false;
                  }
                   else{      
                        return true;      
                  } 
              }
        </script>
        <script>
  (function(i,s,o,g,r,a,m){i['GoogleAnalyticsObject']=r;i[r]=i[r]||function(){
  (i[r].q=i[r].q||[]).push(arguments)},i[r].l=1*new Date();a=s.createElement(o),
  m=s.getElementsByTagName(o)[0];a.async=1;a.src=g;m.parentNode.insertBefore(a,m)
  })(window,document,'script','https://www.google-analytics.com/analytics.js','ga');

  ga('create', 'UA-74566606-1', 'auto');
  ga('send', 'pageview');

</script>
      </head>
      <body>
            <div id="header">
            
            <nav class="navbar navbar-default navbar-fixed-top">
                <div class="container-fluid">
                    <div class="navbar-header">
                        <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#myNavbar">
                            <span class="icon-bar"></span>
                            <span class="icon-bar"></span>
                            <span class="icon-bar"></span> 
                        </button>
                        <a class="navbar-brand" href="index.html">Ruban Rajendran</a>
                    </div>
                    
                    <div class="collapse navbar-collapse" id="myNavbar">
                    <ul class="nav navbar-nav navbar-right" id="navList">
                        <li><a href="index.html">HOME</a></li>
                        <!--<li><a href="aboutMe.html">ABOUT</a></li>-->
                        <li><a href="photography.html">PHOTOGRAPHY</a></li>
                        <li><a href="contactMe.php">CONTACT</a></li>
                    </ul>
                    </div>                   
                </div>
            </nav>
        </div>
            <div id="main">
                  <div class="container-fluid bg-3 text-center">
                  <form id="form" class="topBefore" onsubmit="return validateForm()" method='post' action='contactMe.php' >

                        <input id="name" name='name' type="text" placeholder="NAME"><span id='nameError' class='asterix' style="display: none; color:red;vertical-align: top;">*</span>
                        <input id="email" name='email' type="text" placeholder="E-MAIL"><span id='emailError' class='asterix' style="display: none;color:red;vertical-align: top;">*</span>
                        <textarea id="message" name='message' placeholder="MESSAGE"></textarea><span id='messageError' class='asterix' style="display: none;color:red; vertical-align: top;">*</span>
                        <input id="submit" name="submit" type="submit" value="Send!">

                  </form>
                  <div id='errorMessage'>
             <?php echo $result ?>&nbsp;
                  </div>
            </div>
            </div>
            <footer class='footerContainer'>
                <!--<h2>Get in Touch</h2>-->
                <!--<br>-->
                <div class="">
                        <div class="col-sm-4 footerItem">                         
                            <div class="footerTitle">EMAIL</div>
                            <div class="footerDesc"><a href="mailto:ruban.raj710@gmail.com?Subject=Hello Hello" target="_top">RUBAN.RAJ710@GMAIL.COM</a></div>
                        </div>
                    <div class="col-sm-4 footerItem">                         
                            <div class="footerTitle">SOCIAL</div>
                            <div class="footerDesc">
                                <a href="https://www.instagram.com/rubanraj7/"><img class="socialIcon" src="_images/instagram.png" alt="IG"></a>
                                <a href="https://ca.linkedin.com/in/ruban-rajendran-88bb0550"><img class="socialIcon" src="_images/linkedin.png" alt="IG"></a>
                            </div>
                        </div>

                    </div>
            </footer>

      </body>
</html>
