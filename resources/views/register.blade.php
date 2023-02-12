<!DOCTYPE html>

<html lang="en">
<head>

<!-- basic -->
<meta charset="utf-8">
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<meta name="viewport" content="width=device-width, initial-scale=1">
<!-- mobile metas -->
<meta name="viewport" content="width=device-width, initial-scale=1">
<meta name="viewport" content="initial-scale=1, maximum-scale=1">
<!-- site metas -->
<title>Shortcodes</title>
<meta name="keywords" content="">
<meta name="description" content="">
<meta name="author" content=""> 
<!-- bootstrap css -->
<link rel="stylesheet" type="text/css" href="css/bootstrap.min.css">
<!-- style css -->
<link rel="stylesheet" type="text/css" href="css/style.css">
<!-- Responsive-->
<link rel="stylesheet" href="css/responsive.css">
<!-- fevicon -->
<link rel="icon" href="images/fevicon.png" type="image/gif" />
<!-- Scrollbar Custom CSS -->
<link rel="stylesheet" href="css/jquery.mCustomScrollbar.min.css">
<!-- Tweaks for older IEs-->
<!-- owl stylesheets --> 
<link rel="stylesheet" href="css/owl.carousel.min.css">
<link rel="stylesheet" href="css/owl.theme.default.min.css">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/fancybox/2.1.5/jquery.fancybox.min.css" media="screen">
<link href='https://fonts.googleapis.com/css?family=Nunito:400,300' rel='stylesheet' type='text/css'>
<meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Sign Up Form</title>
        <link rel="stylesheet" href="css/normalize.css">
        <link href='https://fonts.googleapis.com/css?family=Nunito:400,300' rel='stylesheet' type='text/css'>
        <link rel="stylesheet" href="/css/main.css">
</head>
<body style="font-family:Verdana, Geneva, Tahoma, sans-serif">
    <!-- header section start -->
    <div class="header_section">
      <nav class="navbar navbar-expand-lg navbar-light bg-light">
      <div class="logo"><img src="images/logo.png" width="200" height="250"></a></div>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
          <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarSupportedContent">
          <ul class="navbar-nav mr-auto">
            <li class="nav-item">
              <a class="nav-link" href="/dashadmin">HOME</a>
            </li>
            <li class="nav-item active">
              <a class="nav-link" href="/register">Register</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="/database">Database</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="/help">Help</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="/login">Logout</a>
            </li>
          </ul>                                          
        </div>
      </nav>
    </div>
    <!-- header section end -->
    <!-- shortcode section start -->
    <div class="shortcode_section layout_padding">
      <div class="container">
      <form action="add" method="post">
        <h1>Sign Up</h1>
        <fieldset>
          <legend><span class="number">1</span>Student Information</legend>
          <label for="name">Name:</label>
          <input type="text" id="name" name="user_name">
          
          <label for="email">School Email:</label>
          <input type="text" id="email" name="user_email">

          <label for="studentid">Student ID:</label>
          <input type="text" id="studentid" name="studentid">

        <label for="department">Department:</label>
        <select id="department" name="dept">
          <optgroup label="Web">
            <option value="ccs">College of Computer Studies</option>
            <option value="cas">College of Arts and Sciences</option>
            <option value="educ">College of Education and Criminology</option>
            <option value="coc">College of Criminology</option>
            <option value="ceaa">College of Enginnering Architecure and Avitation</option>
            <option value="cba">College of Business and Accountancy</option>
            <option value="cihm">College of International Hospitality Manegment</option>
            <option value="cme">College of Maritime Education</option>
            <option value="be">Basic Education</option>
          </optgroup>
        </select>
        <br><br>
        <fieldset>
          <legend><span class="number">2</span>Tap your ID at the scanner</legend>
          <label for="RFID">RFID Code:</label>
          <input type="text" id="RFID" name="RFID">
          
        </fieldset>
        <button type="submit">Sign up</button>
      </form>
    </div>
    <!-- shortcode section end -->
    <!-- footer section start -->
    <div class="footer_section layout_padding margin_top0" style="background-color: #0ea23b;">
      <div class="container">
        <div class="row">
          <div class="col-sm-6 col-lg-4">
            <h1 class="adderss_text" style="color: black;">Members:</h1>
            <span class="paddlin_left_0" style="color: #0e0f0e;">Anthony Lester L. Tirado</span><br>
            <span class="paddlin_left_0" style="color: #0e0f0e;">Francis D. Hernandez</span><br>
            <span class="paddlin_left_0" style="color: #0e0f0e;">Jhzz Mytch S. Malig</span><br>
            <span class="paddlin_left_0" style="color: #0e0f0e;">Monina Vera Anne P. Viardo</span><br>

          </div>
          <div class="col-sm-6 col-lg-4">
            <h1 class="adderss_text" style="color: black;">School</h1>
            <span class="paddlin_left_0" style="color: #0e0f0e;">University of Perpetual Help System Laguna, Binan</span><br><br>
          </div>
          <div class="col-sm-6 col-lg-4">
            <h1 class="adderss_text" style="color: black;">System Title</h1>
            <span class="paddlin_left_0" style="color: #0e0f0e;">TAPTAP: Arduino RFID scanner for controlled access and user loggin.</span><br>
            </div>
          </div>
        </div>
      </div>
    </div>
    <!-- footer section end -->
    <!-- copyright section start -->
    <div class="copyright_section">
      <div class="container">
        <p class="copyright_text">2022 All Rights Reserved. Design by the Computer Science Students (CS1) of UPHSL.</a></p>
      </div>
    </div>
    <!-- copyright section end -->
    <!-- Javascript files-->
    <script src="js/jquery.min.js"></script>
    <script src="js/popper.min.js"></script>
    <script src="js/bootstrap.bundle.min.js"></script>
    <script src="js/jquery-3.0.0.min.js"></script>
    <script src="js/plugin.js"></script>
    <!-- sidebar -->
    <script src="js/jquery.mCustomScrollbar.concat.min.js"></script>
    <script src="js/custom.js"></script>
    <!-- javascript --> 
    <script src="js/owl.carousel.js"></script>
    <script src="https:cdnjs.cloudflare.com/ajax/libs/fancybox/2.1.5/jquery.fancybox.min.js"></script>    
</body>
</html>