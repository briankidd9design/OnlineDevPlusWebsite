<?php
session_start();

if(isset($_POST['submit_pass']) && $_POST['pass'])
{
    $pass=$_POST['pass'];
    if($pass=="careers")
    {
      $_SESSION['password']=$pass;
    }
    else
    {
      $error="Incorrect Password";
    }
}

if(isset($_POST['page_logout']))
{
 unset($_SESSION['password']);
}
?>
<!DOCTYPE html>
<html lang="en">
  <head>
    <title>Online Developer Plus, Inc.</title>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->
	<meta name="description" content="Mark Kembel, Online Developer Plus, Inc.">
	<meta name="keywords" content="online technical training, online .NET programming training, online C# programming training, online Program management training,
	online programming training, online website development training, online software Testing training, online HTML5 training, online JavaScript training">
  <meta name="author" content="Brian Kidd">
  
  <!-- Favicon -->
  <link rel="shortcut icon" href="img/favicon.ico" type="image/x-icon">
  
    <!-- Bootstrap -->
    <link href="css/bootstrap.css" rel="stylesheet">
	<!--Custom Stylesheet-->
	<link href = "css/custom.css" rel = "stylesheet">
	<!-- fonts -->
	<link href="https://fonts.googleapis.com/css?family=Oswald" rel="stylesheet">
	<link href="https://fonts.googleapis.com/css?family=Roboto" rel="stylesheet">
	<script src="https://use.fontawesome.com/30f88f4c50.js"></script> <!--Font Awesome-->

    <!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
      <script src="https://oss.maxcdn.com/html5shiv/3.7.3/html5shiv.min.js"></script>
      <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
    <![endif]-->
  </head>
  <body>
  <div id = "pageContainer">
	  <div id = "contentWrap">
  <nav class="navbar navbar-inverse navbar-fixed-top">
  <div class="container-fluid">
    <div class="navbar-header">
      <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#myNavbar" aria-expanded="false">
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>                        
      </button>
      <a class="navbar-brand" href="index.html">OnDev&#x2b;</a>
    </div>
    <div class="collapse navbar-collapse" id="myNavbar">
      <ul class="nav navbar-nav">
			<li class = "nav-tab"><a href="index.html">Home</a></li>
			<li class = "nav-tab"><a href="index.html#courses">Courses</a></li>
            <li class = "nav-tab"><a href="index.html#staff">Staff</a></li>
            <li class = "nav-tab"><a href="enrollment.html">Enrollment</a></li>
            <li class = "nav-tab"><a href="RecruitersReferral.html">Recruiter's Referral</a></li>
            <li class = "active nav-tab home-tab"><a href="seminars.php">Seminar</a></li>
      </ul>
    </div>
  </div>
</nav>
<header>
	<div class = "jumbotron">
		<div class = "container-fluid" id = "headerContainer">
		<table id = "headerTable">
			<tr>
				<td><img id = "odpLogo" class = "img-responsive" src="img/OnDevLogo.jpg" alt ="SEP Logo"></td>
				<td><h1 id = "companyName"> <span style = "color:#457ABF;">O</span>nline <span style = "color:#D00505;">D</span>eveloper <span style = "color:#f0b400;">P</span>lus, Inc.</h1></td>
			</tr>
		</table>
	<div id = "mobileHeaderDisplay">
		<img id = "odpLogo" class = "img-responsive" src="img/OnDevLogo.jpg" alt ="SEP Logo">
				<div id = "logoText" class = "text-center"><h1 id = "companyName"> <span style = "color:#457ABF;">O</span>nline <span style = "color:#D00505;">D</span>eveloper <span style = "color:#f0b400;">P</span>lus, Inc.</h1></div>
	</div>
	
	</div>
</div>
</header>
<!-- php for login -->
<?php
        if($_SESSION['password']=="careers")
        {
         ?>
	<div id = "tests" class = "container container-section-body">
		<div class = "row">
			<div class = "col-xl-12 col-lg-12">
                    <h1 style = "color:#457ABF;"></style></h1>
                    <ul class = "unordered-list" id = "seminars">
                        <li><a href = "https://ispri.ng/1rpxg" target="_blank">Click Here for Free High Tech Seminar</a></li>
                    <ul>
		</div>
	</div>
</div>
        <div class = "formDiv">
             <form class = "form" method="post" action="" id="logout_form">
                <input type="submit" name="page_logout" value="LOG OUT">
            </form>
        </div>
    
<script>//nav script

    $('.nav-tab').click(function(){
		$('.nav-tab').removeClass('active');
        $('.nav-tab').removeClass("nav-active");
        $(this).addClass("nav-active");
		$(this).addClass("active")		
    });
	/*this jQuery script makes collapsed navigation retract once a nav item is selected in the fixed nav*/
	  $(document).on('click', function(event){
      var $clickedOn = $(event.target),
          $collapsableItems = $('.collapse'),
          isToggleButton = ($clickedOn.closest('.navbar-toggle').length == 1),
          isLink = ($clickedOn.closest('a').length == 1),
          isOutsideNavbar = ($clickedOn.parents('.navbar').length == 0);

      if( (!isToggleButton && isLink) || isOutsideNavbar ) {
        $collapsableItems.each(function(){
          $(this).collapse('hide');
        });
      }
    });
	
	/*script to pin footer to bottom of website */
	
	// $(document).ready(function() {

	//    var docHeight = $(window).height();
	//    var footerHeight = $('#footer').height();
	//    var footerTop = $('#footer').position().top + footerHeight;

	//    if (footerTop < docHeight) {
	// 	$('#footer').css('margin-top', 10+ (docHeight - footerTop) + 'px');
	// }
  // });

</script>
  

    </div><!--end containerWrap id-->
</div><!--end pageContainer id-->	
<div id ="footer">
	Online Developer Plus, Inc. | &copy; <script type="text/javascript">document.write(new Date().getFullYear());
	</script> | All Rights Reserved
</div>
<?php
    }else{
        ?>
        <div id = "seminars" class = "container container-section-body">
		    <div class = "row">
			    <div class = "col-xl-12 col-lg-12">
        <form method="post" action="" id="loginForm">

                <h1 id = "testLoginInput" style = "color:#457ABF;">Free High Tech Career Seminar</style></h1><br>
                <h2>Learn more about AI, Software Testing, Program Management, and Python Machine Learning </h2>
                <p class = "text-center">To register and receive your password, send an email to ondevplus@gmail.com and 
                    include your name, phone number and personal email address.
                </p>
                <p class = "text-center">By watching the seminar, you will receive big discounts for our online courses.</p>
                <p class = "text-center">You must be registerd to receive these discounts.</p>
                <p class = "text-center">Please sign in to view seminar</p>
                <input id = "testLoginSumbit" type="password" name="pass" placeholder="*******">
                <input type="submit" name="submit_pass" value="SUBMIT">
                <p><font style="color:red;"><?php echo $error;?></font></p>
        </form>

            
<script>//nav script

    $('.nav-tab').click(function(){
    $('.nav-tab').removeClass('active');
        $('.nav-tab').removeClass("nav-active");
        $(this).addClass("nav-active");
    $(this).addClass("active")		
    });
    /*this jQuery script makes collapsed navigation retract once a nav item is selected in the fixed nav*/
    $(document).on('click', function(event){
      var $clickedOn = $(event.target),
          $collapsableItems = $('.collapse'),
          isToggleButton = ($clickedOn.closest('.navbar-toggle').length == 1),
          isLink = ($clickedOn.closest('a').length == 1),
          isOutsideNavbar = ($clickedOn.parents('.navbar').length == 0);

      if( (!isToggleButton && isLink) || isOutsideNavbar ) {
        $collapsableItems.each(function(){
          $(this).collapse('hide');
        });
      }
    });
    

</script>
</div></div></div>
<?php
  }
?>
  <!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
    <!-- Include all compiled plugins (below), or include individual files as needed -->
    <script src="js/bootstrap.min.js"></script>
 <div id ="footer">
	Online Developer Plus, Inc. | &copy; 2019 - 2022 | All Rights Reserved
</div>

</body>
</html>