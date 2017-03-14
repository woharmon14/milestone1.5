<?php
session_start();
?>

<!DOCTYPE html>
<html>
<head>
  		<meta http-equiv="content-type" content="text/html; charset=UTF-8"> 
        <meta charset="utf-8">
        <title>Template</title>
        <meta name="generator" content="Bootply">
        <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">
        <meta name="description" content="A Bootstrap carousel example with centered form">
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
        <link href="//netdna.bootstrapcdn.com/bootstrap/3.0.0/css/bootstrap.min.css" rel="stylesheet">
  	       <link rel="stylesheet" type="text/css" href="freshcss.css">
</head>
<style>
  #device > ul > li {
  display: inline
 }

 #device > ul > li:hover {
  text-decoration: underline;
  /*font-size: 1.2em;*/
 }
#device {
position: absolute;
bottom: 15%;
padding-left: 150px;
}
body {
    margin: 0;
    background: radial-gradient(orange, red);
    overflow: hidden;
}

.moving-zone {
    position: absolute;
    top:275%; left:50%;
    width:300px; height:120px;
    margin: -60px 0 0 -150px;
    perspective: 800px;
}
.popup {
    position: absolute;
    width:300px;
    padding: 10px;
    box-sizing: border-box;
    border-radius: 20px 0 20px 0;
    cursor: pointer;
    transform-style: preserve-3d;
    background: -webkit-linear-gradient(top left, white 50%, rgb(31,31,31) 50%);
    background:    -moz-linear-gradient(top left, white 50%, rgb(31,31,31) 50%);
    background:     -ms-linear-gradient(top left, white 50%, rgb(31,31,31) 50%);
    background:      -o-linear-gradient(top left, white 50%, rgb(31,31,31) 50%);
    background:         linear-gradient(top left, white 50%, rgb(31,31,31) 50%);
}
.popup:before {
    content: '';
    position: absolute;
    left:5%; top:5%;
    width:90%; height:90%;
    border-radius: inherit;
    background: rgba(0,0,0,.1);
    box-shadow: 0 0 40px 20px rgba(0,0,0,.5);
    transform: translateZ(-50px);
}
.popup-content {
    background: #444;
    padding: 20px;
    box-sizing: border-box;
    border-radius: 10px 0 10px 0;
}
.popup-text {
    color: white;
    font-family: 'Roboto', sans-serif;
    font-size: 20px;
    line-height: 30px;
    font-weight: 100;
    text-align: center;
    transform: translateZ(15px);
}
.popup-text b {
    color: coral;
    font-weight: 300;
}

</style>



<body>
<!-- Header -->
<div class="container-fluid" >

<!-- Section -->
<div class="row" id="header">
		<div class="col-12 home">
		<!-- Carousel
================================================== -->
          <div id="myCarousel" class="carousel slide">
            <div class="carousel-inner">
              <div class="item active">
                <img src="images/con1.jpg">
                <div class="container">
                  <div class="carousel-caption">
                  </div>
                </div>
              </div>
              <div class="item">
                <img src="images/con2.jpg">
                <div class="container">
                  <div class="carousel-caption">
                    
                  </div>
                </div>
              </div>    
              <div class="item">
                <img src="images/con6.jpg">
                <div class="container">
                  <div class="carousel-caption">
                  </div>
                </div>
              </div>
            </div>
          <!-- Search above carousel -->
              <form class="col-12" id="searchForm" style="text-align: center; color:white">
                <div class="form-group col-4">
                <?php display_content(); ?>
            	
                </div>
              </form>
          </div><!-- /.carousel -->
    </div> <!-- End of Section -->
</div><!-- row -->


<div class="row" id="section1" style="background-color: black;">
  <div class="col-7" style="height: 100vh">
    <a href="data.php"><img class="mus1" src="images/mus1.jpg" style="height: 100%; width: 100%; margin-left: 20px; "></a>
  </div>
  <div class="col-5" style="height: 800px">
    <a href="#section3"><img src="images/giphy.gif" style="height: 100%; width: 100% "></a>
  </div>
</div>



<div class="row container-fluid" id="section3" style="padding: 50px; text-align: center; height: 100vh">
    <div class="col-12 col-sm">
            <div class="moving-zone">
                <div class="popup">
                    <div class="popup-content">
                        <div class="popup-text">
                            <h3 style="margin-top: 0px"><a href="login.php"> Log In</a></h3>
                            <hr>
                            <h5 style="margin-top: 0;"> Not a memeber yet? </h5> <a href="register.php" style="font-size: 20px;">Register here </a>
                        </div>
                    </div>
                </div>
            </div>
      <a href="#section4"><img src="images/down.png" style="height: 50px; width: 50px; -webkit-filter: invert(100%);
    filter: invert(100%);"> </a>

    <h1 style="font-size: 5em" ><strong>Go Premium. Be happy.</strong> </h1>
    <hr style="border: 3px solid white"><br>
    <h4>Try Premium free for 30 days. Only ₱129/month after.*</h4>
    <h4>* Terms and conditions apply. Open only to users who haven't already tried Premium.</h4>
    </div>    
</div>



<div class="row" id="section4" style="height: 100vh; background: url(images/prismbanner.png) center/cover no-repeat; color:white; position: relative;" >
  <div class="col-12" id="device">
    <ul>
      <li><a href="#grad">Mobile</a></li>
      <li style="color:orange; margin: 5px 10px;" ><i class="fa fa-circle" aria-hidden="true"></i></li>
      <li><a href="#grad">Computer</a></li>
      <li style="color:orange; margin: 5px 10px;" ><i class="fa fa-circle" aria-hidden="true"></i></li>
      <li><a href="#grad">Tablet</a></li>
      <li style="color:orange; margin: 5px 10px;" ><i class="fa fa-circle" aria-hidden="true"></i></li>
      <li><a href="#grad">Car</a></li>
      <li style="color:orange; margin: 5px 10px;" ><i class="fa fa-circle" aria-hidden="true"></i></li>
      <li><a href="#grad">Speaker</a></li>
      <li style="color:orange; margin: 5px 10px;" ><i class="fa fa-circle" aria-hidden="true"></i></li>
      <li><a href="#grad">PlayStation®</a></li>
      <li style="color:orange; margin: 5px 10px;" ><i class="fa fa-circle" aria-hidden="true"></i></li>
      <li><a href="#grad">TV</a></li>
      <li style="color:orange; margin: 5px 10px;" ><i class="fa fa-circle" aria-hidden="true"></i></li>
      <li><a href="#grad">Web PlayerWeb Player</a></li>
    </ul>
    
  </div>
</div>


<!--  Footer 1 -->
<div  id="grad" class="row footer-1" style="height: 20px; background: linear-gradient(to right, red , yellow)">
</div>

<!--  Footer 2 -->
<footer class="container-fluid bg-4 text-center" style="padding: 50px 0 10px 0; background-color: rgb(31,31,31); color:white">
  <h5><a href="https://www.facebook.com/woharmon.scheiz">Michael Harmon Doctolero</a> | My Sample Portfolios</h5>
    
    <div class="logo">
      <a href="#"><img src="http://image.flaticon.com/icons/svg/145/145802.svg" style="height: 50px; width: 50px"></a>
      <a href="#"><img src="http://image.flaticon.com/icons/svg/145/145812.svg" style="height: 50px; width: 50px"></a>
      <a href="#"><img src="http://image.flaticon.com/icons/svg/145/145811.svg" style="height: 50px; width: 50px"></a>
      <a href="#"><img src="http://image.flaticon.com/icons/svg/145/145804.svg" style="height: 50px; width: 50px"></a>
      <a href="#"><img src="http://image.flaticon.com/icons/svg/145/145808.svg" style="height: 50px; width: 50px"></a>
    </div>

    <div>
    <br>
    <a href="#header"><img src="images/up.png" style="height: 50px; width: 50px; -webkit-filter: invert(100%);
    filter: invert(100%);"> </a>
    </div>

</footer>
<!-- End of Foooter -->
</div> <!-- End of Container -->

<!-- JS -->
<script async="" src="//www.google-analytics.com/analytics.js"></script>

<script type="text/javascript" src="//ajax.googleapis.com/ajax/libs/jquery/2.0.2/jquery.min.js"></script>

<script type="text/javascript" src="//netdna.bootstrapcdn.com/bootstrap/3.0.0/js/bootstrap.min.js"></script>

<script type="text/javascript">
$('#myCarousel').carousel({
  interval: 3000,
  cycle: true
}); 
	
</script>

<script>
$(document).ready(function(){
  // Add smooth scrolling to all links
  $("a").on('click', function(event) {

    // Make sure this.hash has a value before overriding default behavior
    if (this.hash !== "") {
      // Prevent default anchor click behavior
      event.preventDefault();

      // Store hash
      var hash = this.hash;

      // Using jQuery's animate() method to add smooth page scroll
      // The optional number (800) specifies the number of milliseconds it takes to scroll to the specified area
      $('html, body').animate({
        scrollTop: $(hash).offset().top
      }, 800, function(){
   
        // Add hash (#) to URL when done scrolling (default click behavior)
        window.location.hash = hash;
      });
    } // End if
  });
});
</script>
<script src="//production-assets.codepen.io/assets/common/stopExecutionOnTimeout-b2a7b3fe212eaa732349046d8416e00a9dec26eb7fd347590fbced3ab38af52e.js"></script>
<script src="//cdnjs.cloudflare.com/ajax/libs/jquery/2.1.3/jquery.min.js"></script>
<script>
  var moveForce = 30; // max popup movement in pixels
var rotateForce = 20; // max popup rotation in deg

$(document).mousemove(function(e) {
    var docX = $(document).width();
    var docY = $(document).height();
    
    var moveX = (e.pageX - docX/2) / (docX/2) * -moveForce;
    var moveY = (e.pageY - docY/2) / (docY/2) * -moveForce;
    
    var rotateY = (e.pageX / docX * rotateForce*2) - rotateForce;
    var rotateX = -((e.pageY / docY * rotateForce*2) - rotateForce);
    
    $('.popup')
        .css('left', moveX+'px')
        .css('top', moveY+'px')
        .css('transform', 'rotateX('+rotateX+'deg) rotateY('+rotateY+'deg)');
});
</script>


<!-- JS -->

</body>
</html>
