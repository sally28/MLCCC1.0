<?php
// Import PHPMailer classes into the global namespace
// These must be at the top of your script, not inside a function
//use PHPMailer\PHPMailer;
//use phpmailer\SMTP;
//use phpmailer\Exception;
//require 'sendgrid-php/sendgrid-php.php';
require 'sendgrid-php/vendor/autoload.php';
$API_KEY ="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";
//echo "export SENDGRID_API_KEY='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'" > sendgrid.env
//echo "sendgrid.env" >> .gitignore
//source ./sendgrid.env
//require 'phpmailer/SMTP.php';
//require 'phpmailer/Exception.php';

/* Load Composer's autoloader
require 'vendor/autoload.php';*/

// Instantiation and passing `true` enables exceptions
//$mail = new PHPMailer\PHPMailer\PHPMailer();

if(isset($_POST['submit']))
{
     $name = $_POST['name'];
     $email_id = $_POST['email'];
     $subject = $_POST['subject'];
     $message = $_POST['message'];

     $email = new \SendGrid\Mail\Mail();
//$email->setFrom($email_id,$name);
//$email->setSubject($subject);
//$email->addTo("mlcccwndschool@gmail.com", "mlcccwnd");
//$email->addContent("text/plain", $message);
 //   $email = new \SendGrid\Mail\Mail();
$email->setFrom("mlcccwndschool@gmail.com", "MLCCC Web");
$email->setSubject("Sending with SendGrid is Fun");
$email->addTo("mlcccwndschool@gmail.com", "mlcccwnd");
$email->addContent("text/plain", "and easy to do anywhere, even with PHP");


/*$email->addContent
(  "text/html", "<strong>and easy to do anywhere, even with PHP</strong>"
 )*/;

$sendgrid = new \SendGrid($API_KEY);
    /*if($sendgrid->send($email));
    {
        echo "Email sent successfully.";
        $result = "Email sent.";
    }*/
try {
    $response = $sendgrid->send($email);
    print $response->statusCode() . "\n";
    print_r($response->headers());
    print $response->body() . "\n";
            $result = "Email sent.";
} catch (Exception $e) {
    echo 'Caught exception: '. $e->getMessage() ."\n";

}

}



?>


<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Contact</title>
    <link rel="icon" href="img/favicon.png" type="image/x-icon">
    <meta name="description" content="mlccc website">
    <meta name="keywords" content="chinese courses, chinese classes, chinese culture,chinese school , chinese camp,">

    <link href="https://fonts.googleapis.com/css?family=Raleway:300,400,500,700|Open+Sans" rel="stylesheet">
    <link rel="stylesheet" href="css/styles-merged.css">
    <link rel="stylesheet" href="css/style.css">
    <link rel="stylesheet" href="css/custom.css">

    <!--[if lt IE 9]>
      <script src="js/vendor/html5shiv.min.js"></script>
      <script src="js/vendor/respond.min.js"></script>
    <![endif]-->
  </head>
  <body>

<div id="wrapper" class="probootstrap-page-wrapper">
      <!-- Fixed navbar -->
    <nav class="navbar navbar-default probootstrap-navbar navbar-fixed-top">
        <div class="container header-container">
          <div class="navbar-header clearfix">
            <div class="btn-more js-btn-more visible-xs">
              <a href="#"><i class="icon-dots-three-vertical "></i></a>
            </div>
            <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navbar-collapse" aria-expanded="false" aria-controls="navbar">
              <span class="sr-only">Toggle navigation</span>
              <span class="icon-bar"></span>
              <span class="icon-bar"></span>
              <span class="icon-bar"></span>
            </button>
            <a class="navbar-brand" href="index.html" title="mainPage"></a>
          </div>
          <div id="navbar-collapse" class="navbar-collapse collapse">
            <ul id="crossx" class="nav navbold navbar-nav navbar-right">
              <li><a href="index.html">Home</a></li>
              <li class="active"><a href="program.html">Weekend School</a></li>
              <li><a href="camps.html">Summer Camp</a></li>
              <li><a href="community.html">Community</a></li>
              <li> <a href="about.html">About Us</a></li>
              <li><a href="support.html">Support Us</a></li>
              <li>
                 <a href="https://mlcccadmin.herokuapp.com" target="_blank" >Login</a>
              </li>
            </ul>
          </div>
        </div>
      </nav>
  <!--  <section class="probootstrap-section probootstrap-section-colored">
       <div class="container">
          <div class="row">
            <div class="col-md-12 text-left section-heading probootstrap-animate mb0">
           <h1>Contact Information</h1>
            </div>
          </div>
        </div>
      </section>-->


      <section class="probootstrap-section probootstrap-section-sm">
        <div class="container">
          <div class="row">
          <h5 class="red" align="center"><em><b>How To Find Us</b></em></h5>
           <div class="col-md-12 google-maps">
                 <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3053.8113966370433!2d-75.56922184934989!3d40.05730968524348!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x0%3A0x0!2zNDDCsDAzJzI2LjMiTiA3NcKwMzQnMDEuMyJX!5e0!3m2!1sen!2sus!4v1584384398840!5m2!1sen!2sus" width="450" height="450" frameborder="0" style="border:0;" allowfullscreen="" aria-hidden="false" tabindex="0"></iframe>
              </div>
            <div class="col-md-7">
                  <h2>Get In Touch</h2>
                  <?php echo $result;?>
                  <p class="lead">Please get in touch -We'll get back to you as soon as we can.</p>
                  <form action="#" method="post" class="probootstrap-form">
                    <div class="form-group">
                      <label for="name">Full Name</label>
                      <input type="text" class="form-control" id="name" name="name">
                    </div>
                    <div class="form-group">
                      <label for="email">Email</label>
                      <input type="email" class="form-control" id="email" name="email">
                    </div>
                    <div class="form-group">
                      <label for="subject">Subject</label>
                      <input type="text" class="form-control" id="subject" name="subject">
                    </div>
                    <div class="form-group">
                      <label for="message">Message</label>
                      <textarea cols="30" rows="10" class="form-control" id="message" name="message"></textarea>
                    </div>
                    <div class="form-group">
                      <input type="submit" class="btn btn-primary btn-lg" id="submit" name="submit" value="Send Message">
                    </div>
                  </form>
                </div>
              </div>
          </div>

      </section>

      <section class="probootstrap-cta">
        <div class="container">
          <div class="row">
            <div class="col-md-12">
              <h2 class="probootstrap-animate" data-animate-effect="fadeInRight">Get your admission now!</h2>
              <a href="#" role="button" class="btn btn-primary btn-lg btn-ghost probootstrap-animate" data-animate-effect="fadeInLeft">Enroll</a>
            </div>
          </div>
        </div>
      </section>

      </div><!--end page wraper-->
       <footer  class="probootstrap-footer probootstrap-bg">
        <div class="probootstrap-copyright">
          <div class="container">
            <div class="row">
            <div class="col-lg-9 col-md-9 col-sm-9 probootstrap-top-quick-contact-info">
              <span><i class="icon-location2"></i>225 Phoenixville Pike, Malvern, PA 19355</span>
              <span><i class="icon-phone2"></i>+1-610-909-6094</span>
              <span><i class="icon-mail"><a href="mailto:info@mlccc.org" style="font-size:15px;"> info@mlccc.org </a></i></span>
            </div>
            <div class="col-lg-3 col-md-3 col-sm-3 probootstrap-top-social">
              <ul>
                <li><a href="#"><i class="icon-twitter"></i></a></li>
                <li><a href="https://www.facebook.com/" target="_blank"><i class="icon-facebook2"></i></a></li>
                <li><a href="#"><i class="icon-youtube"></i></a></li>
              </ul>
            </div>
          </div>
            <div class="row">
              <div class="col-md-8 text-left">
                <p>&copy; 2019 <a href="#">mlccc.org</a>. All Rights Reserved. Designed &amp; Developed with by <a href="#">mlccc.org</a></p>
              </div>
              <div class="col-md-4 probootstrap-back-to-top">
                <p><a href="index.html" class="js-backtotop">Back to top <i class="icon-arrow-long-up"></i></a></p>
              </div>
            </div>
          </div>
        </div>
       </footer>
    <script src="js/scripts.min.js"></script>
    <script src="js/main.min.js"></script>
    <script src="js/custom.js"></script>

  </body>
</html>
