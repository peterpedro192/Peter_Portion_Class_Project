<?php include('includes/head.inc');?>
  <title>Contact Arrow Photography with comments or enquires</title>
    <!--Styles go here, Links then embedded -->
  <link rel="stylesheet" href="css/mycore.css"/>
    <!-- inherits the centering from the style sheet spec for h2+p, but changes the width to 300px to match the single photo -->
  <style>
      h2+p{
          width: 300px; 
      }
  </style>
  <script src="js/modernizr.min.js"></script>
</head>
<body>
<div id="wrapper">    
    <!-- Header starts -->
    <div>
        <h1>Arrow Photography</h1>
        <?php include('includes/nav.inc');?>
    
    </div>
    <!-- Header ends -->
    
    <!-- Content starts -->
    <div id="content">
        <h2>Contact Arrow Photography</h2>
        <p>
            <img src="images/couple.jpg" alt="Bride and groom by beach hut" width="300" height="450" />
        </p>
        
        
        
        
        

                <!--Mail Script-->
        <?php
            if(isset($_POST['submit'])){

                ini_set('SMTP', 'mail.british-study.com');

                $name= $_POST['cname'];
                $email= $_POST['cemail'];
                $location= $_POST['clocation'];
                $gender= $_POST['cgender'];
                $emailpref= $_POST['emailpref'];
                $telpref= $_POST['phonepref'];
                $mobpref= $_POST['mobilepref'];
                $comment= $_POST['comment']; 


                $to= "peterpedro192@gmail.com";
                $subject= "Web Site Contact form submission from Work Flow Exercise";

                $headers= "MIME-Version: 1.0 \r\n";
                $headers.= "Content-type: text/html; charset=utf-8 \r\n";
                $headers.= "From:".$email."\r\n";
                
                
                 

                            
                      

                $message= '

                <!DOCTYPE html>
                <html>
                    <head>
                        <title>Wedding Photography Exercise Comment</title>
                        <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
                        <style>
                            body{
                                width: 500px;
                                margin: 0 auto;
                                background: #EEEEFF;
                            }
                        </style>
                    </head>
                    <body>
                        <h1>Workflow Exercise</h1>
                        <p>
                            <img src="http://www.hovecollege.co.uk/images/header.gif" alt="Hove College Logo" />
                        </p>
                        <p>
                            Thank you. we have received your comment and will contact you shortly. Please feel free to 
                            <a href="http://localhost/Work_Flow_Exercise/">visit our web site</a>
                            and enjoy our current features free of charge.
                        </p>
                        <p>
                            Thank you again we value your opinion.
                        </p>
                        <p>
                            The Marketing Team
                        </p>
                        
                        <h2>'.$name.' who is '.$gender.' and lives in '.$location.' has contacted you via your web site and they have commented</h2><h3>'.$comment.'</h3>
                        <p> '.$name.' prefers to be contacted by </p>
                            
                    </body>
                </html>

                ';

                if(mail($to,$subject,$message,$headers)){
                    echo '<h3>Thank you for your comment.</h3>';
                }else {
                    echo ',<h3>Sorry, please try again later.</h3>';
                }
            }

        ?>
        
        
        
        
        
        
        
        
        
        
        <!-- Html form start -->
        <!-- Using 'get' method the info from form is sent in url (can be seen), with 'post' it is sent back to server
                in the http request (unseen) - both are NOT secure. Can use hash # in action so it remains on web page when
            you sumbit (for practice) or send to php Paul created so you can see a response when form submitted
           <form action="http://www.webdesignstudents.co.uk/students/response.php" method="get" id="contactForm"> - this sends it
            to the server Paul set up which gives a response using the info we provided int the form
        -->
        <form action="contact.php" method="post" id="contactForm">
            <fieldset>
                <legend>Personal Information</legend>
            <table>
                <!--Personal Information-->
                <tr>
                    <td>
                        <label for="cname">Name</label>
                    </td>
                    <td><!-- name was the older of identifying input name but now we use ids because we use jquery to 
                        validate it, id must be unique but name does not have to be. The names are the value that is actually
                        sent, the ids are used by Jquery to validate the form before it is submitted
                            The title appears from Jquery Validation if the user doesn't put in required info-->
                        <input type="text" name="cname" id="cname" value="" size="30" required placeholder="Please enter Name" title="Enter your name please" //>
                    </td>
                </tr>
                <tr>
                    <td>
                        <label for="cemail">Email</label>
                    </td>
                    <td>
                        <input type="email" name="cemail" id="cemail" value="" size="30" required placeholder="Please enter Email" />
                    </td>
                </tr>
                <tr>
                    <td>
                        <label for="clocation">Location</label>
                    </td>
                    <td>
                        <select name="clocation" id="clocation">
                            <option value="" selected>Please Select</option>
                            <option value="Brighton">Brighton</option>
                            <option value="Hove">Hove</option>
                            <option value="London">London</option>
                        </select>
                    </td>
                </tr>
                <tr>
                    <td>
                        <label>Gender:</label>
                    </td>
                    <td>
                        <label>Male<input type="radio" name="cgender" id="cgenderm" value="Male" checked /></label>
                        <label>Female<input type="radio" name="cgender" id="cgenderf" value="Male" /></label>
                    </td>
                </tr>
            </table>
            </fieldset>
                
            <fieldset>
                <legend>Enquiry</legend>
                <table>
                    <!--Gerneral Information-->
                <tr>
                    <td>
                        <label>Preferred Contact Method:</label> 
                    </td>
                    <td>
                        <label>Email<input type="checkbox" name="emailpref" id="prefe" value="Yes" checked/></label>
                        <label>Telephone<input type="checkbox" name="phonepref" id="preft" value="Yes" /></label>
                        <label>SMS/Mobile<input type="checkbox" name="mobilepref" id="prefm" value="Yes" /></label>         
                    </td>
                </tr>
                <tr>
                    <td>
                        <label for="comment">Comment</label>
                    </td>
                    <td>
                        <textarea name="comment" id="comment" cols="24" rows="8" required placeholder="Please enter Comments"></textarea>
                    </td>
                </tr>
                <!--this creates an ordered list that houses the error messages generated from jquery if the required 
                    info is not provided -->
                <tr>
                    <td colspan="2">
                        <div class="errors">
                            <ol></ol>
                        </div>
                    </td>
                </tr>
                <tr>
                    <td>
                        &nbsp;
                    </td>
                    <td>
                        <input type="submit" name="submit" value="Send Form" />
                    </td>
                </tr>
                
                </table>
            </fieldset>
            
        </form>
        
        <!-- Html form end -->
        
        <p>
            <a href="http://goo.gl/maps/2a4j0">
                Locate us on Google Maps
            </a>
        </p>
        

    </div>
    <!-- Content ends -->
    
     <?php include('includes/foot.inc');?>
</div>   
           <!-- jQuery Library first -->
        <script src="libs/jquery/jquery-1.10.2.min.js"></script>
        <!-- jQuery plug-in helper files -->
        <!-- This validation will work across all browsers, regardless of whether the browser understands Html5 or not -->
        <script src="plugins/jquery/jquery.validate.min.js"></script>
        <!-- jQuery Activation Script, the $ in front of something indicates we are using Jquery NOT Javascript -->
        <script>
            //General onload instruction for Jquery
            $(document).ready(function(){
                 $('#contactForm').validate({
                     rules:{
                         cname: "required",
                         
                        
                      
                            cemail:{
                             required: "#prefe:checked",
                             email: "#prefe:checked"
                             },
                 
                      
                
                     clocation: "required",
                     comment: "required",
                     },
                     
                     messages:{
                         cname:"I said, name please!",
                         cemail:{
                             required:"You must provide Email!",
                             email:"No, one that actually works"
                         }
                     },
                     errorContainer: ('#contactForm div.errors'),
                     errorLabelContainer: ('ol'),
                     wrapper: ('li')
                 });   
            })
        </script>
</body>
</html>