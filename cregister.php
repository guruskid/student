<!DOCTYPE html>
<html lang="en-IN">
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
        <title>COMPLETE REGISTRATION</title>
        <meta http-equiv="x-ua-compatible" content="ie=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no"> 

        <meta name="description" content="Complete Registration Portal" /> 
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
            <div class="container cregister">
              <div class="title"><h2>COMPLETE REGISTRATION</h2></div>
              <div class="formBox form-group">
                <form action="">
                  <div class="left one">
                    <span style="color:red">Note: Please select only image file (eg: .png, .jpeg, .jpg,)<br/>Max File size : 1MB allowed </span><br>
                    <input type='file' id="file" name="upload" required="">
                    <script src="js/upload.js"></script>
                  </div>
                  <div class="clear"></div>
                  <div class="left form-group">
                    <p>First Name</p>
                    <input type="text" disabled="" name="firstname" placeholder="First Name">
                  </div>
                  <div class="right form-group">
                    <p>Last Name</p>
                    <input type="text" disabled="" name="lastname" placeholder="Last Name">
                  </div>
                  <div class="left form-group">
                    <p>Email:</p>
                    <input type="email" disabled="" name="email" placeholder="Email Address"> 
                  </div>
                  <div class="right form-group">
                    <p>Phone Number:</p>
                    <input type="number" name="number" required="" placeholder="+234 080">
                  </div>
                  <div class="left one form-group">
                    <p>Gender: </p>
                    <select name="" id="" required="">
                      <option disabled="" selected="">Select Gender</option>
                      <option value="male">Male</option>
                      <option value="female">Female</option>
                    </select>
                  </div>
                  <div class="right one form-group">
                    <p>Marital Status: </p>
                    <select name="" id="" required="">
                      <option value="" disabled="" selected="">Select Status</option>
                      <option value="single">Single</option>
                      <option value="married">Married</option>
                      <option value="divorce">Divorce</option>
                    </select>
                  </div>
                  <div class="account form-group"><h5>Academy Detail</h5></div>
                  <div class="left">
                    <p>Matric Number</p>
                    <input type="text" name="matric" required="" placeholder="Matric Number">
                  </div>
                  <div class="right form-group">
                    <p>Year Admitted</p>
                    <input type="number" name="admityear" required="" placeholder="Admit Year">
                  </div>
                  <div class="left form-group">
                    <p>Course / Department</p>
                    <input type="text" name="course" required="" placeholder="Course / Department">
                  </div>
                  <div class="right two form-group">
                    <p>University / Polytechnic</p>
                    <select name="" id="" required="">
                      <option value="">Select University / Polytechnic</option>
                      <option value=""></option>
                      <option value=""></option>
                      <option value=""></option>
                      <option value=""></option>
                      <option value=""></option>
                      <option value=""></option>
                      <option value=""></option>
                      <option value=""></option>
                      <option value=""></option>
                      <option value=""></option>
                      <option value=""></option>
                      <option value=""></option>
                      <option value=""></option>
                      <option value=""></option>
                      <option value=""></option>
                      <option value=""></option>
                      <option value=""></option>
                      <option value=""></option>
                      <option value=""></option>
                      <option value=""></option>
                      <option value=""></option>
                      <option value=""></option>
                      <option value=""></option>
                      <option value=""></option>
                      <option value=""></option>
                      <option value=""></option>
                      <option value=""></option>
                      <option value=""></option>
                      <option value=""></option>
                      <option value=""></option>
                      <option value=""></option>
                      <option value=""></option>
                      <option value=""></option>
                      <option value=""></option>
                      <option value=""></option>
                      <option value=""></option>
                      <option value=""></option>
                      <option value=""></option>
                      <option value=""></option>
                      <option value=""></option>
                      <option value=""></option>
                      <option value=""></option>
                      <option value=""></option>
                      <option value=""></option>
                    </select>
                  </div>
                  <div class="clear"></div>
                  <div class="left form-group">
                    <p>Academy Level</p>
                    <select name="" id="" required="">
                      <option value="" selected="" disabled="">Select Academy Level</option>
                      <option value="">100 Level</option>
                      <option value="">200 Level</option>
                      <option value="">300 Level</option>
                      <option value="">400 Level</option>
                      <option value="">500 level</option>
                    </select>
                  </div>
                  <div class="right form-group">
                    <p>Sponsor</p>
                    <select name="" id="" required="">
                      <option value="" disabled="" selected="">Select Sponsor</option>
                      <option value="">Parents</option>
                      <option value="">Guidance</option>
                      <option value="">Self</option>
                    </select>
                  </div>
                  <div class="clear"></div>
                  <div class="account"><h5>Account Detail</h5></div>
                  <div class="left form-group">
                    <p>Bank:</p>
                    <select name="" id="" required="">
                      <option value="" selected="" disabled="">Bank</option>
                      <option value="">First Bank</option>
                    </select>
                  </div>
                  <div class="right one form-group">
                    <p>Account Type</p>
                    <select name="" id="" required="">
                      <option value="" selected="" disabled="">Select Account Type</option>
                      <option value="">Saving</option>
                      <option value="">Current</option>
                      <option value="">Checking</option>
                    </select>
                  </div>
                  <div class="clear"></div>
                  <div class="left form-group">
                    <p>Account Name:</p>
                    <input type="text" name="accountname" required="" placeholder="Account Name">
                  </div>
                  <div class="right form-group">
                    <p>Account Number:</p>
                    <input type="number"  name="accountnumber" required="" placeholder="Account Number">
                  </div>
                  <input type="submit" name="" value="PROCEED">
                  <a href="#">Already Have Account ?</a>
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
                <small>Copyright &copy; <a href="http://www.Themefisher.com">Themefisher</a>| All right reserved.</small>
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