<?php 
require_once('connect.php');
/*=============================================
       Success and   Eroor Messages Varable
=============================================*/

$alert ="";


/*=============================================
        FOR TIME & DATE 
=============================================*/
        date_default_timezone_set("Africa/Lagos");
        $reg_time = date('g:i A');        //for time hh:mm ss

if(isset($_POST["register"]))
{


  //Assign varables to our values from register form
   $name = trim($_POST['name']);
    $email = trim($_POST['email']);
    $password = trim($_POST['password']);
    $phone = trim($_POST['phone']);
    $type = trim($_POST['type']);
    $reg_date = date('l jS \of F Y ');
    $reg_time = date('g:i A');
    $user_code = uniqid();
    $sms_code= rand(100000,999999);

    $password = md5($password);
    $name = ucwords($name);

    
       
      //Check email and password from database for existing users
            $sql="SELECT * FROM users WHERE email='$email' OR phone='$phone' ";
            $result=mysqli_query($con,$sql);
            $row=mysqli_fetch_array($result); 
      


                //If email and password exist in our database
                if($row['email']==$email){
                  

                   $alert = '<div class="notification error closeable">
                      <p><span>User already exist, Register with a new email</span> </p>
                      <a class="close" href="#"></a>
                    </div>';

                  
                }

                elseif ($row['phone']==$phone) {
                 $alert   = '<div class="notification error closeable">
                      <p><span>Phone number already exist, Register with a new phone number</span> </p>
                      <a class="close" href="#"></a>
                    </div>';
                }

      else{

      $sql = "INSERT INTO `users`(`name`, `email`,`phone`, `password`, `num`, `user_code`, `status`, `reg_date`, `reg_time`, `type`, `sms_code`)  VALUES ('".$name."','".$email."','".$phone."','".$password."','1','".$user_code."','1','".$reg_date."','".$reg_time."','".$type."','".$sms_code."')";
          $query = mysqli_query($con, $sql);

          

         
    //==================================Send Mail===================================================
          
        //$to  = strtolower(trim($_POST['email']));
          $to  = $email;
          
          // subject
          $subject = 'Registration successfully';
          
          // message
          $message = '
         <!DOCTYPE html>
<html lang="en">
<body>
  <!doctype html>
<html xmlns="http://www.w3.org/1999/xhtml" xmlns:v="urn:schemas-microsoft-com:vml"
xmlns:o="urn:schemas-microsoft-com:office:office">
  
  <head>
    <title></title>
    
      <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <style type="text/css">
      #outlook a { padding: 0; }
      .ReadMsgBody { width: 100%; }
      .ExternalClass { width: 100%; }
      .ExternalClass * { line-height:100%; }
      body { margin: 0; padding: 0; -webkit-text-size-adjust: 100%; -ms-text-size-adjust: 100%; }
      table, td { border-collapse:collapse; mso-table-lspace: 0pt; mso-table-rspace: 0pt; }
      img { border: 0; height: auto; line-height: 100%; outline: none; text-decoration: none; -ms-interpolation-mode: bicubic; }
      p { display: block; margin: 13px 0; }
    </style>
      <style type="text/css">
        @media only screen and (max-width:480px) {
          @-ms-viewport { width:320px; }
          @viewport { width:320px; }
        }
      </style>
   
      <link href="https://d2yjfm58htokf8.cloudfront.net/static/fonts/averta-v2.css"
      rel="stylesheet" type="text/css">
      <style type="text/css">
        @import url(https://d2yjfm58htokf8.cloudfront.net/static/fonts/averta-v2.css);
      </style>
    <!--<![endif]-->
    <style type="text/css">
      p {
        margin: 0 0 24px 0;
      }

      a {
        color: #00b9ff;
      }

      hr {
        margin: 32px 0;
        border-top: 1px #e2e6e8;
      }

      dt {
        font-size: 13px;
        margin-left: 0;
      }

    dd {
        color: #37517e;
        margin-bottom: 24px;
        margin-left: 0;
      }

      h5 {
        font-family: TW-Averta-SemiBold, Averta, Helvetica, Arial;
        font-size: 16px;
        line-height: 24px;
        color: #2e4369;
      }
      
      pre {
        display: block;
        padding: 16px;
        padding: 12px 24px;
        margin: 0 0 48px;
        font-size: 14px;
        line-height: 24px;
        color: #4a5860;
        word-break: break-all;
        word-wrap: break-word;
        background-color: #f2f5f7;
        border-radius: 3px;
      }

      .body-wrapper {
        background: #f2f5f7 url("https://d2yjfm58htokf8.cloudfront.net/static/images/background-v1.png") no-repeat center top;
        padding: 0px;
        margin: auto;
      }

      .content-wrapper {
        max-width: 536px;
        padding: 32px;
        padding-bottom: 48px;
      }

      .footer-wrapper div {
        color: #37517e !important;
      }

      .footer-wrapper div a {
        color: #00b9ff !important;
      }

      .hero {
        font-family: TW-Averta-Bold, Averta, Helvetica, Arial;
        color: #37517e;
        font-size: 22px;
        line-height: 30px;
      }

      .page-header {
        border-bottom: 1px solid #eaebed;
        padding-bottom: 16px;
      }

      .mb-0 {
        margin-bottom: 0 !important;
      }

      .mt-0 {
        margin-top: 0 !important;
      }
      
      .btn {
        box-sizing: border-box;
        display: inline-block;
        min-height: 36px;
        padding: 12px 24px;
        margin: 0 0 24px;
        font-size: 16px;
        font-weight: 600;
        line-height: 24px;
        text-align: center;
        white-space: nowrap;
        vertical-align: middle;
        cursor: pointer;
        border: 0;
        border-radius: 3px;
        color: #fff;
        background-color: #00b9ff;
        text-decoration: none;

        -webkit-transition: all .15s ease-in-out;
        -o-transition: all .15s ease-in-out;
        transition: all .15s ease-in-out;
      }
      
      .btn:hover {
        background-color: #00a4df;
      }
      
      .btn:active {
        background-color: #008ec0;
      }

      @media screen and (min-width: 576px) and (max-width: 768px) {
        .body-wrapper {
          padding: 24px !important;
        }

        .content-wrapper {
          max-width: 504px !important;
          padding: 48px !important;
        }
      }

      @media screen and (min-width: 768px) {
        .body-wrapper {
          padding: 48px !important;
        }

        .content-wrapper {
          max-width: 456px !important;
          padding: 72px !important;
          padding-top: 48px !important;
        }
      }
    </style>
    <style type="text/css">
      @media only screen and (min-width:480px) {
        .mj-column-per-100 { width:100%!important; }
      }
    </style>
  </head>
  
  <body>
    <div class="mj-container body-wrapper">
      <!--[if mso | IE]>
        <table role="presentation" border="0" cellpadding="0" cellspacing="0" width="600"
        align="center" style="width:600px;">
          <tr>
            <td style="line-height:0px;font-size:0px;mso-line-height-rule:exactly;">
            <![endif]-->
            <div style="margin:0px auto;max-width:600px;background:#fff;" class="content-wrapper"
            data-class="content-wrapper">
              <table role="presentation" cellpadding="0" cellspacing="0" style="font-size:0px;width:100%;background:#fff;"
              align="center" border="0">
                <tbody>
                  <tr>
                    <td style="text-align:center;vertical-align:top;direction:ltr;font-size:0px;padding:0px;">
                    
                            <div style="margin:0px auto;max-width:600px;">
                              <table role="presentation" cellpadding="0" cellspacing="0" style="font-size:0px;width:100%;"
                              align="center" border="0">
                                <tbody>
                                  <tr>
                                    <td style="text-align:center;vertical-align:top;direction:ltr;font-size:0px;padding:0px;">
                                     
                                            <div class="mj-column-per-100 outlook-group-fix" style="vertical-align:middle;display:inline-block;direction:ltr;font-size:13px;text-align:left;width:100%;">
                                              <table role="presentation" cellpadding="0" cellspacing="0" style="vertical-align:middle;"
                                              width="100%" border="0">
                                                <tbody>
                                                  <tr>
                                                    <td style="word-wrap:break-word;font-size:0px;padding:0px;" align="center">
                                                      <table role="presentation" cellpadding="0" cellspacing="0" style="border-collapse:collapse;border-spacing:0px;"
                                                      align="center" border="0">
                                                        <tbody>
                                                          <tr>
                                                           <!--  <td style="width:150px;">
                                                              <img alt="Logo" title="" height="auto" src="https://d2yjfm58htokf8.cloudfront.net/static/images/tw_logo-v2.png"
                                                              style="border:none;border-radius:0px;display:block;font-size:13px;outline:none;text-decoration:none;width:100%;height:auto;"
                                                              width="150">
                                                            </td> -->
                                                          </tr>
                                                        </tbody>
                                                      </table>
                                                    </td>
                                                  </tr>
                                                </tbody>
                                              </table>
                                            </div>
                                           
                                    </td>
                                  </tr>
                                </tbody>
                              </table>
                            </div>
                           
                            <div style="margin:0px auto;max-width:600px;">
                              <table role="presentation" cellpadding="0" cellspacing="0" style="font-size:0px;width:100%;"
                              align="center" border="0">
                                <tbody>
                                  <tr>
                                    <td style="text-align:center;vertical-align:top;direction:ltr;font-size:0px;padding:0px;">
                                     
                                            <div class="mj-column-per-100 outlook-group-fix" style="vertical-align:top;display:inline-block;direction:ltr;font-size:13px;text-align:left;width:100%;">
                                              <table role="presentation" cellpadding="0" cellspacing="0" width="100%" border="0">
                                                <tbody>
                                                  <tr>
                                                    <td style="word-wrap:break-word;font-size:0px;padding:0px;">
                                                      <div style="font-size:1px;line-height:48px;white-space:nowrap;"> </div>
                                                    </td>
                                                  </tr>
                                                </tbody>
                                              </table>
                                            </div>
                                          
                                    </td>
                                  </tr>
                                </tbody>
                              </table>
                            </div>
                          
                            <div style="margin:0px auto;max-width:600px;">
                              <table role="presentation" cellpadding="0" cellspacing="0" style="font-size:0px;width:100%;"
                              align="center" border="0">
                                <tbody>
                                  <tr>
                                    <td style="text-align:center;vertical-align:top;direction:ltr;font-size:0px;padding:0px;">
                                     
                                            <div class="mj-column-per-100 outlook-group-fix" style="vertical-align:top;display:inline-block;direction:ltr;font-size:13px;text-align:left;width:100%;">
                                              <table role="presentation" cellpadding="0" cellspacing="0" width="100%" border="0">
                                                <tbody>
                                                  <tr>
                                                    <td style="word-wrap:break-word;font-size:0px;padding:0px;" align="left">
                                                      <div style="cursor:auto;color:#5d7079;font-family:TW-Averta-Regular, Averta, Helvetica, Arial;font-size:16px;line-height:24px;letter-spacing:0.4px;text-align:left;">
                                                        <br>
                                                        <p>Hello, '.$name.'</p>
                                                        <p class="hero">Thanks for signing up.</b><br>
                                                        We are really excited for you to join our community.<br> Use the link bellow to manage your account.</p>
                                                        <p>
                                                          <a href="http://prifa.com.ng/login-register.php" class="btn" mc:disable-tracking="">Manage your account</a>
                                                        </p>
                                                        <p>If you don’t know why you got this email, please tell us straight away so we can
                                                          fix this for you.</p>
                                                        <hr style="margin-top: 56px">
                                                        <p class="mb-0">Thanks,</p>
                                                        <p class="mb-0">Prifa Team</p>
                                                      </div>
                                                    </td>
                                                  </tr>
                                                </tbody>
                                              </table>
                                            </div>
                                       
                                    </td>
                                  </tr>
                                </tbody>
                              </table>
                            </div>
                          
                    </td>
                  </tr>
                </tbody>
              </table>
            </div>
           
            <div style="margin:0px auto;max-width:600px;" class="content-wrapper footer-wrapper">
              <table role="presentation" cellpadding="0" cellspacing="0" style="font-size:0px;width:100%;"
              align="center" border="0">
                <tbody>
                  <tr>
                    <td style="text-align:center;vertical-align:top;direction:ltr;font-size:0px;padding:0px;">
                      
                            <div style="margin:0px auto;max-width:600px;">
                              <table role="presentation" cellpadding="0" cellspacing="0" style="font-size:0px;width:100%;"
                              align="center" border="0">
                                <tbody>
                                  <tr>
                                    <td style="text-align:center;vertical-align:top;direction:ltr;font-size:0px;padding:0px;">
                                      
                                            <div class="mj-column-per-100 outlook-group-fix" style="vertical-align:top;display:inline-block;direction:ltr;font-size:13px;text-align:left;width:100%;">
                                              <table role="presentation" cellpadding="0" cellspacing="0" width="100%" border="0">
                                                <tbody>
                                                  <tr>
                                                    <td style="word-wrap:break-word;font-size:0px;padding:0px;">
                                                      <div style="font-size:1px;line-height:24px;white-space:nowrap;"> </div>
                                                    </td>
                                                  </tr>
                                                </tbody>
                                              </table>
                                            </div>
                                        
                                    </td>
                                  </tr>
                                </tbody>
                              </table>
                            </div>
                            
                    </td>
                  </tr>
                </tbody>
              </table>
            </div>
            
    </div>
  </body>

</html>
  
  
</body>
</html>
          ';
          
          // To send HTML mail, the Content-type header must be set
          $headers  = 'MIME-Version: 1.0' . "\r\n";
          $headers .= 'Content-type: text/html; charset=iso-8859-1' . "\r\n";
          
          // Additional headers
          $headers .= 'To: '.strtolower(trim($_POST['email'])). "\r\n";
          //$headers .= 'To: '.$email;. "\r\n";
          $headers .= 'From: Prifa ';
             
          // Mail it
          mail($to, $subject, $message, $headers);
          
          //==================================End Mail===================================================//
    $alert= '<div class="notification success closeable">
                        <p><span>Registration Successful, Login to manage your account</span> </p>
                        <a class="close" href="#"></a>
                          </div>';





}


      
      }




 //===============================LOGIN SECTION========================//
if (isset($_POST['login'])) {


            $email= $_POST['email'];

            $password= $_POST['password'];

            $password = md5($password);

            


            $sql="SELECT * FROM users WHERE email='$email' and password='$password'";

            $result=mysqli_query($con,$sql);

            $row=mysqli_fetch_array($result);

                   

            if($row['email']!=$email && $row['password']!=$password){



              $alert  = '<div class="notification error closeable">
                      <p><span>Invalid login details, Please check your email or password</span> </p>
                      <a class="close" href="#">';

                      }

                              

    

            else{

                

                  $_SESSION['email'] =$row['email'];

                echo "<script language='javascript' type='text/javascript'>

                        window.location.href='my-profile.php';

                        </script>";

            }



        }


        //===============================PASSWORD RECOVER SECTION========================//



    if (isset($_POST['pass-reset'])) {

            $email=$_POST['email'];
            $sql="SELECT *  FROM users WHERE email='$email' ";
            $result=mysqli_query($con,$sql);
            $row=mysqli_fetch_array($result);

            $user_code=$row['user_code'];      

            if($row['email']!=$email){


              $alert='<div class="notification error closeable">
                      <p><span>No account attached to this email</span> </p>
                      <a class="close" href="#"></a>
                    </div>';

                      }

    

            else{

              $email=$_POST['email'];

                $to  = $email;

          

          // subject

          $subject = 'Password Reset';

          

          // message

          $message = '

       <!DOCTYPE html>
<html lang="en" >

<head>
  <meta charset="UTF-8">
  <title>Recover your Crisp password</title>
  
  
  
  
  
</head>

<body>

  <head>

  <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <style>
    @media screen and (max-width: 720px) {
      body .c-v84rpm {
        width: 100% !important;
        max-width: 720px !important;
      }
      body .c-v84rpm .c-7bgiy1 .c-1c86scm {
        display: none !important;
      }
      body .c-v84rpm .c-7bgiy1 .c-f1bud4 .c-pekv9n .c-1qv5bbj,
      body .c-v84rpm .c-7bgiy1 .c-f1bud4 .c-1c9o9ex .c-1qv5bbj,
      body .c-v84rpm .c-7bgiy1 .c-f1bud4 .c-90qmnj .c-1qv5bbj {
        border-width: 1px 0 0 !important;
      }
      body .c-v84rpm .c-7bgiy1 .c-f1bud4 .c-183lp8j .c-1qv5bbj {
        border-width: 1px 0 !important;
      }
      body .c-v84rpm .c-7bgiy1 .c-f1bud4 .c-pekv9n .c-1qv5bbj {
        padding-left: 12px !important;
        padding-right: 12px !important;
      }
      body .c-v84rpm .c-7bgiy1 .c-f1bud4 .c-1c9o9ex .c-1qv5bbj,
      body .c-v84rpm .c-7bgiy1 .c-f1bud4 .c-90qmnj .c-1qv5bbj {
        padding-left: 8px !important;
        padding-right: 8px !important;
      }
      body .c-v84rpm .c-ry4gth .c-1dhsbqv {
        display: none !important;
      }
    }


    @media screen and (max-width: 720px) {
      body .c-v84rpm .c-ry4gth .c-1vld4cz {
        padding-bottom: 10px !important;
      }
    }
  </style>
  <title>Recover your Crisp password</title>
</head>

<body style="margin: 0; padding: 0; font-family: &quot; HelveticaNeueLight&quot;,&quot;HelveticaNeue-Light&quot;,&quot;HelveticaNeueLight&quot;,&quot;HelveticaNeue&quot;,&quot;HelveticaNeue&quot;,Helvetica,Arial,&quot;LucidaGrande&quot;,sans-serif;font-weight: 300; font-stretch: normal; font-size: 14px; letter-spacing: .35px; background: #EFF3F6; color: #333333;">
  <table border="1" cellpadding="0" cellspacing="0" align="center" class="c-v84rpm" style="border: 0 none; border-collapse: separate; width: 720px;" width="720">
    <tbody>
      <tr class="c-1syf3pb" style="border: 0 none; border-collapse: separate; height: 114px;">
        <td style="border: 0 none; border-collapse: separate; vertical-align: middle;" valign="middle">
          <table align="center" border="1" cellpadding="0" cellspacing="0" class="c-f1bud4" style="border: 0 none; border-collapse: separate;">
            <!-- <tbody>
              <tr align="center" class="c-1p7a68j" style="border: 0 none; border-collapse: separate; padding: 16px 0 15px;">
                <td style="border: 0 none; border-collapse: separate; vertical-align: middle;" valign="middle"><img alt="" src="https://mail.crisp.chat/images/header/common/logo.png" class="c-1shuxio" style="border: 0 none; line-height: 100%; outline: none; text-decoration: none; height: 33px; width: 120px;" width="120" height="33"></td>
              </tr>
            </tbody> -->
          </table>
        </td>
      </tr>
      <tr class="c-7bgiy1" style="border: 0 none; border-collapse: separate; -webkit-box-shadow: 0 3px 5px rgba(0,0,0,0.04); -moz-box-shadow: 0 3px 5px rgba(0,0,0,0.04); box-shadow: 0 3px 5px rgba(0,0,0,0.04);">
        <td style="border: 0 none; border-collapse: separate; vertical-align: middle;" valign="middle">
          <table align="center" border="1" cellpadding="0" cellspacing="0" class="c-f1bud4" style="border: 0 none; border-collapse: separate; width: 100%;" width="100%">
            <tbody>
              <tr class="c-pekv9n" style="border: 0 none; border-collapse: separate; text-align: center;" align="center">
                <td style="border: 0 none; border-collapse: separate; vertical-align: middle;" valign="middle">
                  <table border="1" cellpadding="0" cellspacing="0" width="100%" class="c-1qv5bbj" style="border: 0 none; border-collapse: separate; border-color: #E3E3E3; border-style: solid; width: 100%; border-width: 1px 1px 0; background: #FBFCFC; padding: 40px 54px 42px;">
                    <tbody>
                      <tr style="border: 0 none; border-collapse: separate;">
                        <td class="c-1m9emfx c-zjwfhk" style="border: 0 none; border-collapse: separate; vertical-align: middle; font-family: &quot; HelveticaNeueLight&quot;,&quot;HelveticaNeue-Light&quot;,&quot;HelveticaNeueLight&quot;,&quot;HelveticaNeue&quot;,&quot;HelveticaNeue&quot;,Helvetica,Arial,&quot;LucidaGrande&quot;,sans-serif;font-weight: 300; color: #1D2531; font-size: 25.45455px;"
                          valign="middle">'.$row['name'].', recover your password.</td>
                      </tr>
                      <tr style="border: 0 none; border-collapse: separate;">
                        <td class="c-46vhq4 c-4w6eli" style="border: 0 none; border-collapse: separate; vertical-align: middle; font-family: &quot; HelveticaNeue&quot;,&quot;HelveticaNeue&quot;,&quot;HelveticaNeueRoman&quot;,&quot;HelveticaNeue-Roman&quot;,&quot;HelveticaNeueRoman&quot;,&quot;HelveticaNeue-Regular&quot;,&quot;HelveticaNeueRegular&quot;,Helvetica,Arial,&quot;LucidaGrande&quot;,sans-serif;font-weight: 400; color: #7F8FA4; font-size: 15.45455px; padding-top: 20px;"
                          valign="middle">Looks like you lost your password?</td>
                      </tr>
                      <tr style="border: 0 none; border-collapse: separate;">
                        <td class="c-eitm3s c-16v5f34" style="border: 0 none; border-collapse: separate; vertical-align: middle; font-family: &quot; HelveticaNeueMedium&quot;,&quot;HelveticaNeue-Medium&quot;,&quot;HelveticaNeueMedium&quot;,&quot;HelveticaNeue&quot;,&quot;HelveticaNeue&quot;,sans-serif;font-weight: 500; font-size: 13.63636px; padding-top: 12px;"
                          valign="middle">We’re here to help. Click on the button below to change your password.</td>
                      </tr>
                      <tr style="border: 0 none; border-collapse: separate;">
                        <td class="c-rdekwa" style="border: 0 none; border-collapse: separate; vertical-align: middle; padding-top: 38px;" valign="middle"><a href="http://prifa.com.ng/reset.php?uc='.$row['user_code'].'" 
                            class="c-1eb43lc c-1sypu9p c-16v5f34" style="color: #000000; -webkit-border-radius: 4px; font-family: &quot; HelveticaNeueMedium&quot;,&quot;HelveticaNeue-Medium&quot;,&quot;HelveticaNeueMedium&quot;,&quot;HelveticaNeue&quot;,&quot;HelveticaNeue&quot;,sans-serif;font-weight: 500; font-size: 13.63636px; line-height: 15px; display: inline-block; letter-spacing: .7px; text-decoration: none; -moz-border-radius: 4px; -ms-border-radius: 4px; -o-border-radius: 4px; border-radius: 4px; background-color: #288BD5; background-image: url(&quot;https://mail.crisp.chat/images/linear-gradient(-1deg,#137ECE2%,#288BD598%)&quot; );color: #ffffff; padding: 12px 24px;">Recover my password</a></td>
                      </tr>
                      <tr style="border: 0 none; border-collapse: separate;">
                        <td class="c-ryskht c-zjwfhk" style="border: 0 none; border-collapse: separate; vertical-align: middle; font-family: &quot; HelveticaNeueLight&quot;,&quot;HelveticaNeue-Light&quot;,&quot;HelveticaNeueLight&quot;,&quot;HelveticaNeue&quot;,&quot;HelveticaNeue&quot;,Helvetica,Arial,&quot;LucidaGrande&quot;,sans-serif;font-weight: 300; font-size: 12.72727px; font-style: italic; padding-top: 52px;"
                          valign="middle">If you didn’t ask to recover your password, please ignore this email.</td>
                      </tr>
                    </tbody>
                  </table>
                </td>
              </tr>
              <tr class="c-1c9o9ex c-1c86scm" style="border: 0 none; border-collapse: separate;">
                <td style="border: 0 none; border-collapse: separate; vertical-align: middle;" valign="middle">
                 
        </td>
        </tr>
        <tr class="c-183lp8j" style="border: 0 none; border-collapse: separate;">
          <td style="border: 0 none; border-collapse: separate; vertical-align: middle;" valign="middle">
            <table border="1" cellpadding="0" cellspacing="0" width="100%" class="c-1qv5bbj" style="border: 0 none; border-collapse: separate; border-color: #E3E3E3; border-style: solid; width: 100%; background: #FFFFFF; border-width: 1px; font-size: 11.81818px; text-align: center; padding: 18px 40px 20px;"
              align="center">
              <tbody>
                <tr style="border: 0 none; border-collapse: separate;">
                  <td style="border: 0 none; border-collapse: separate; vertical-align: middle;" valign="middle"><span class="c-1w4lcwx">You receive this email because you or someone initiated a password recovery operation on your Prifa account.</span></td>
                </tr>
              </tbody>
            </table>
          </td>
        </tr>
        </tbody>
        </table>
        </td>
      </tr>
      
    </tbody>
  </table>
</body>
  
  

</body>

</html>




          ';

          

          // To send HTML mail, the Content-type header must be set

          $headers  = 'MIME-Version: 1.0' . "\r\n";

          $headers .= 'Content-type: text/html; charset=iso-8859-1' . "\r\n";

          

          // Additional headers

          $headers .= 'To: '.strtolower(trim($_POST['email'])). "\r\n";

          //$headers .= 'To: '.$email;. "\r\n";

          $headers .= 'From: no-reply@prifa.com.ng';

             

          // Mail it

          mail($to, $subject, $message, $headers);

          

          //==================================End Mail===================================================


                       $alert='
                            <div class="notification success closeable">
                        <p><span>check your email for the reset link</span> </p>
                        <a class="close" href="#"></a>
                      </div>';






      

            }



        }




//===============================RESET PASSWORD========================//

    if (isset($_POST['reset'])) {

            $user_code=$_POST['user_code'];
            $password=$_POST['password'];
            $password = md5($password);
            
            
            
        
            $sql = "UPDATE users SET password='$password'  WHERE user_code='$user_code' ";
            $query = mysqli_query($con, $sql);
   
                    echo "<script>alert('Update Successful!!'); window.location='login.php' </script>";
        }


 if (isset($_POST['contact'])) {

            $recipient="info@prifa.com.ng";
            $subject="Contact Message";
            
    
             
                $message = trim($_POST['message']);
                $name = trim($_POST['name']);
                $email = trim($_POST['email']);
                $phone = trim($_POST['phone']);
        

                $mailBody="Name: $name\n  Email: $email  \n  Phone: $phone  \n   Message: $message"  ;
                mail($recipient, $subject, $mailBody, "From: $name <$email>");
                
                  $alert='
                            <div class="notification success closeable">
                        <p><span>Message Sent</span> </p>
                        <a class="close" href="#"></a>
                      </div>';

            
            }



if (isset($_POST['enquiry'])) {

            $recipient="info@prifa.com.ng";
            $subject="Contact Message";
            
    
             
                $message = trim($_POST['message']);
               
                $email = trim($_POST['email']);
                $phone = trim($_POST['phone']);
        

                $mailBody=" Email: $email  \n  Phone: $phone  \n   Message: $message"  ;
                mail($recipient, $subject, $mailBody, "From: <$email>");
                
                  $alert='
                            <div class="notification success closeable">
                        <p><span>Message Sent</span> </p>
                        <a class="close" href="#"></a>
                      </div>';

            
            }

            

      ?>

