<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>AdminLTE 2 | Log in</title>
     <link rel="stylesheet" href="css\style-minimal-flat.css">
      <script src="js\modernizr.custom.js"></script>
    <!-- Tell the browser to be responsive to screen width -->
    <meta content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no" name="viewport">
    <!-- Bootstrap 3.3.5 -->
    <link rel="stylesheet" href="../../bootstrap/css/bootstrap.min.css">
    <!-- Font Awesome -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.4.0/css/font-awesome.min.css">
    <!-- Ionicons -->
    <link rel="stylesheet" href="https://code.ionicframework.com/ionicons/2.0.1/css/ionicons.min.css">
    <!-- Theme style -->
    <link rel="stylesheet" href="../../dist/css/AdminLTE.min.css">
    <!-- iCheck -->
    <link rel="stylesheet" href="../../plugins/iCheck/square/blue.css">


    <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
        <script src="https://oss.maxcdn.com/html5shiv/3.7.3/html5shiv.min.js"></script>
        <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
    <![endif]-->
  </head>
  <body>
           
    
      
            <nav class="navbar header-navbar pcoded-header" header-theme="theme1">
                   
                    </nav>  
                    
                   
    <div class="login-box">
      <div class="login-logo">
        <a href="../../index2.html"><b>SITPRE</b></a>
      </div><!-- /.login-logo -->
      <div class="login-box-body">
       
        

        <div class="social-auth-links text-center">
         <a data-dialog="somedialog" class="action-btn trigger text-intro opacity-0">Click Me !</a>

        </div><!-- /.social-auth-links -->


      </div><!-- /.login-box-body -->
    </div><!-- /.login-box -->

        <!-- Newsletter Popup -->
    <div id="somedialog" class="dialog">

      <div class="dialog__overlay"></div>
          
      <!-- dialog__content -->
      <div class="dialog__content">

        <div class="header-picture"></div>
            
        <!-- dialog-inner -->
        <div class="dialog-inner">
              
          <h4>Notify Popup Highlight</h4>
              
          <p>Just write the pefect description for your launch product here.... <strong>Codedthemes Product launch in next XX weeks. Enjoy !!!</strong></p>
 <a href="#" class="btn btn-block btn-social btn-google btn-flat"><i class="fa fa-google-plus"></i> Sign in using Google+</a>
        </div>
          <!-- Newsletter Form -->
          <div id="subscribe">

                    <form action="php/notify-me.php" id="notifyMe" method="POST">

                        <div class="form-group">

                            <div class="controls">
                                
                              <!-- Field  -->
                              <input type="text" id="mail-sub" name="email" placeholder="Click here to write your email" onfocus="this.placeholder = ''" onblur="this.placeholder = 'Your Email Address'" class="form-control email srequiredField">

                              <!-- Spinner top left during the submission -->
                              <i class="fa fa-spinner opacity-0"></i>

                                <!-- Button -->
                              <div class="social-auth-links text-center">
         
       

                                <div class="clear"></div>

                            </div>

                        </div>

                    </form>

            <!-- Answer for the newsletter form is displayed in the next div, do not remove it. -->
            <div class="block-message">

              <div class="message">

                <p class="notify-valid">

              </div>

            </div>
            <!-- END - Answer for the newsletter form is displayed in the next div, do not remove it. -->

              </div>
              <!-- END - Newsletter Form -->
        </div>
        <!-- END - dialog-inner -->

        <!-- Cross for closing the Newsletter Popup -->
        <button class="close-newsletter" data-dialog-close=""><i class="icon ion-android-close"></i></button>

      </div>
    <!-- jQuery 2.1.4 -->
    <script src="../../plugins/jQuery/jQuery-2.1.4.min.js"></script>
    <!-- Bootstrap 3.3.5 -->
    <script src="../../bootstrap/js/bootstrap.min.js"></script>
    <!-- iCheck -->
    <script src="../../plugins/iCheck/icheck.min.js"></script>
    <script>
      $(function () {
        $('input').iCheck({
          checkboxClass: 'icheckbox_square-blue',
          radioClass: 'iradio_square-blue',
          increaseArea: '20%' // optional
        });
      });
    </script>
     <script src="js\jquery.min.js"></script>
    <script src="js\jquery.easings.min.js"></script>
    <script src="js\bootstrap.min.js"></script>

    <!-- SlitSlider plugin -->
    <script src="js\jquery.ba-cond.min.js"></script>
    <script src="js\jquery.slitslider.js"></script>

    <!-- Newsletter plugin -->
    <script src="js\notifyMe.js"></script>

    <!-- Popup Newsletter Form -->
    <script src="js\classie.js"></script>
    <script src="js\dialogFx.js"></script>

    <!-- Particles effect plugin on the right -->
    <script src="js\particles.js"></script>

    <!-- Custom Scrollbar plugin -->
    <script src="js\jquery.mCustomScrollbar.js"></script>

    <!-- Countdown plugin -->
    <script src="js\jquery.countdown.js"></script>


    <!-- Main application scripts -->
    <script src="js\main-flat.js"></script>

  </body>
</html>
