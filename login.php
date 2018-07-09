<!DOCTYPE html>
<html lang="en-IN">
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
        <title>LOGINS</title>
        <meta http-equiv="x-ua-compatible" content="ie=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no"> 

        <meta name="description" content="Login Portal" /> 
        <link href="img/startup_logo_96dp.png" rel="apple-touch-icon" sizes="96x96">
        <link href="img/startup_logo_96dp.png" rel="icon" sizes="96x96" type="image/png">
        <link href="img/startup_logo_32dp.png" rel="icon" sizes="32x32" type="image/png">
        <meta content="img/startup_logo_96dp.png" name="msapplication-TileImage">

        <link rel='stylesheet' href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
        <link rel="stylesheet" href="css/owl.carousel.min.css">
        <link rel="stylesheet" href="css/animate.min.css">
        <link rel="stylesheet" href="css/app.css">

        <script src="js/jquery.min.js"></script>
        <script> $(window).on('load', function(){ $(".loader").fadeOut(2000); }); </script>
    </head>
    <?php require"header.php"; ?>
           <!--  Login Form -->
           <section>
            <div class="container login">
              <div class="title"><h2>Login</h2></div>
              <div class="formBox">
                <form action="">
                  <p>Email: </p>
                  <input type="email" name="email" placeholder="Email Address">
                  <p>Password: </p>
                  <input type="Password" name="password" placeholder="Password">
                  <input type="submit" name="" value="Sign In">
                  <a href="#">Forget Password</a>
                </form>
              </div>
            </div>
           </section>


           <!-- End Login Form -->


        <!-- CLIENTS
            =================-->
            <section id="client" class="client p-5">
              <div class="container-fluid">
                <div class="row wow animated bounceInLeft" data-wow-duration="1s" data-wow-delay=".5s">
                    <div class="col-md-12">
                        <div id="clients-list" class="owl-carousel owl-theme">
                            <div class="client-item">
                                <img src="img/clients/logo-1.jpg" class="img-fluid" alt="client">
                            </div>
                            <div class="client-item">
                                <img src="img/clients/logo-2.jpg" class="img-fluid" alt="client">
                            </div>
                            <div class="client-item">
                                <img src="img/clients/logo-3.jpg" class="img-fluid" alt="client">
                            </div>
                            <div class="client-item">
                                <img src="img/clients/logo-4.jpg" class="img-fluid" alt="client">
                            </div>
                            <div class="client-item">
                                <img src="img/clients/logo-5.jpg" class="img-fluid" alt="client">
                            </div>
                            <div class="client-item">
                                <img src="img/clients/logo-6.jpg" class="img-fluid" alt="client">
                            </div>
                            <div class="client-item">
                                <img src="img/clients/logo-7.jpg" class="img-fluid" alt="client">
                            </div>
                            <div class="client-item">
                              <img src="img/clients/logo-8.jpg" class="img-fluid" alt="client">
                            </div>
                            <div class="client-item">
                              <img src="img/clients/logo-9.jpg" class="img-fluid" alt="client">
                            </div>
                            <div class="client-item">
                              <img src="img/clients/logo-10.jpg" alt="">
                            </div>
                        </div>
                    </div>
                </div>
              </div>
            </section>

        <!-- FOOTER 
            =================-->
            <footer>
              <div class="container-fluid footer-b text-center">
                <small>Copyright &copy; All right reserved.</small>
              </div>
            </footer>
 
        <script src="js/popper.min.js"></script>
        <script src="js/bootstrap.min.js"></script>
        <script src="js/jquery.easing.min.js"></script>
        <script src="js/owl.carousel.min.js"></script>
        <script src="js/wow.min.js"></script> 
        <script src="js/app.js"></script> 
        <!--Start of Tawk.to Script-->
            <script type="text/javascript">
            var Tawk_API=Tawk_API||{}, Tawk_LoadStart=new Date();
            (function(){
            var s1=document.createElement("script"),s0=document.getElementsByTagName("script")[0];
            s1.async=true;
            s1.src='https://embed.tawk.to/5a6d77fc4b401e45400c7419/default';
            s1.charset='UTF-8';
            s1.setAttribute('crossorigin','*');
            s0.parentNode.insertBefore(s1,s0);
            })();
            </script>
        <!--End of Tawk.to Script-->
    </body>
</html>