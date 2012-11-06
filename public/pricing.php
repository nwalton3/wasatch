<?php 
  $c = '';
  $u = '';
  $p = '';

  // If $c is set
  if(isset($_GET['c'])) { 
    $c = $_GET['c'];
  }

  // If username or password have been sent
  if(isset($_POST['u'])) { 
    $u = $_POST['u'];
    $u = strtolower($u);
    $u = trim($u);
  }
  if(isset($_POST['p'])) { 
    $p = $_POST['p'];
    $p = strtolower($p);
    $p = trim($p);
  }

  // If username or password matches ap, a or ib
  if($u == 'a' || $u == 'ap' || $u == 'ib') {
    $c = $u;
  } else if ($p == 'a' || $p == 'ap' || $p == 'ib') {
    $c = $p;
  } else {
    // Nothing
  }
?><!DOCTYPE html><html><head><title>Pricing</title><meta content="IE=edge,chrome=1" http-equiv="X-UA-Compatible" /><meta content="width=device-width" name="viewport" /><link href="css/mobile.css" rel="stylesheet" /><link href="css/bootstrap-all.css" rel="stylesheet" /><link href="css/style.css" media="all and (min-width:1px)" rel="stylesheet" /><link href="css/pricing.css" media="all and (min-width:1px)" rel="stylesheet" /><script src="http://use.typekit.com/qmd4aav.js" type="text/javascript"></script><script type="text/javascript">try { Typekit.load(); } catch(e) { alert(e) }</script><script src="js/modernizr.js"></script></head><body><header><p class="sign-in"><a href="#">Sign in</a></p><nav></nav><div id="sign-in"><form action="dashboard.php" method="post"><input id="login_user" name="u" placeholder="username" type="text" /><input id="login_pwd" name="p" placeholder="password" type="password" /><button class="btn btn-primary btn-large" type="submit" value="Sign in">Sign in</button> <a class="btn close-signin" href="#"><i class="icon-remove"></i></a></form></div><h1 class="main"><a href="index.php">Wasatch Education</a></h1></header><div class="main"><section class="pricing-trial"><h2>Trial</h2><div class="price"><p class="free">Free</p><a class="btn btn-success btn-large" href="signup.php?plan=1">Sign up</a></div><ul><li>Diagnostic exams</li><li>Personalized study map</li><li>Access to high-quality instructional videos (limited)</li><li>Two sets of practice problems</li></ul></section><section class="pricing-individual"><h2>Individual</h2><div class="price"><p>$<span>30</span>/month</p><p class="yearly">$<span>150</span>/year</p><a class="btn btn-success btn-large" href="signup.php?plan=2">Sign up</a></div><ul><li>Diagnostic exams</li><li>Personalized study map</li><li><strong>Unlimited</strong> access to over 200 high-quality instructional videos</li><li>Practice problems, including hints and feedback</li><li>Practice exams</li><li>Community forum</li></ul></section><section class="pricing-tutored"><h2>Tutored</h2><div class="price"><p>$<span>50</span>/month</p><p class="yearly">$<span>250</span>/year</p><a class="btn btn-success btn-large" href="signup.php?plan=3">Sign up</a></div><ul><li>Diagnostic exams</li><li>Personalized study map</li><li><strong>Unlimited</strong> access to over 200 high-quality instructional videos</li><li>Practice problems, including hints and feedback</li><li>Practice exams </li><li>Community forum</li><li><strong>Personal tutoring with a live chemistry tutor</strong></li></ul></section><section class="pricing-educator"><h2>Educator</h2><div class="price"><p>$<span>480</span>/month</p><p class="yearly">$<span>2400</span>/year</p><a class="btn btn-success btn-large" href="signup.php?plan=4">Sign up</a></div><ul><li>Individual Access for one instructor and up to 30 students</li><li>Lesson plans, practice experiments, and outlines for teaching chemistry concepts in the classroom</li><li><a href="options.html">More options available</a> for larger classrooms or institutions         </li></ul></section></div><footer><p>&copy; Copyright 2012</p></footer><?php echo "<script>
  var c = '" . $c . "';
</script>"; ?><script src="js/jquery.min.js"></script><script src="js/plugins.js"></script><script src="js/script.js"></script><script type="text/javascript">var curriculum = "";
if (c == 'ap') {
  curriculum = 'AP';
} else if (c == 'ib') {
  curriculum = 'IB';
} else if (c == 'a') {
  curriculum = 'A Level';
}

$(function(){
  var title = $('title');
  var h1 = $('h1.main');
  var map = $('.study-map');
  var links = $('a');        

  // Insert correct curriculum map
  if (curriculum !== "") {
    title.html(curriculum + ": " + title.html());
    h1.prepend('<div class="wasatch">Wasatch Education</div>').find('a').html(curriculum + " Chemistry");
    links.each(function(){
      var a = $(this);
      var url = a.attr('href');

      if(url !== undefined) {

        var php = url.indexOf('.php');
        var query = url.indexOf('?');

        if(php != -1) {
          if(query != -1) {
            url = url + "&c=" + c;
          } else {
            url = url + "?c=" + c;
          }
          a.attr('href', url);
        }
      }
    });
  }

  if(curriculum !== "" && map.size() > 0 ) {
    var mapUrl = c + "_dashboard.html";
    map.load(mapUrl + ' #study-map', function(response, status, xhr){
      if (status == "error") {
        log(response);
        return false;
      } else {
        $('#study-map').unwrap();
        initializeStudyMap();
      }
    });
  }
});</script></body></html>