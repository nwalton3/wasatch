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
?><!DOCTYPE html><html><head><title>Wasatch Education</title><meta content="IE=edge,chrome=1" http-equiv="X-UA-Compatible" /><meta content="width=device-width" name="viewport" /><link href="css/mobile.css" rel="stylesheet" /><link href="css/bootstrap-all.css" rel="stylesheet" /><link href="css/style.css" media="all and (min-width:1px)" rel="stylesheet" /><link href="css/home.css" media="all and (min-width:1px)" rel="stylesheet" /><script src="http://use.typekit.com/qmd4aav.js" type="text/javascript"></script><script type="text/javascript">try { Typekit.load(); } catch(e) { alert(e) }</script><script src="js/modernizr.js"></script></head><body><header><p class="sign-in"><a href="#">Sign in</a></p><nav><a class="first" href="pricing.php">Plans & Pricing</a></nav><div id="sign-in"><form action="dashboard.php" method="post"><input id="login_user" name="u" placeholder="username" type="text" /><input id="login_pwd" name="p" placeholder="password" type="password" /><button class="btn btn-primary btn-large" type="submit" value="Sign in">Sign in</button> <a class="btn close-signin" href="#"><i class="icon-remove"></i></a></form></div><h1 class="main"><a href="index.php">Wasatch Education</a></h1></header><div class="main"><section class="promo"><div class="promo"><h1><strong>AP,</strong> <strong>IB,</strong> and <strong>A Level</strong><br /> test prep & study support</h1><div class="signup"><p>learn more below<span>or</span><a class="btn btn-success btn-large" href="pricing.php">Sign up</a></p></div></div><img alt="" src="img/main4.png" /></section><section class="description"><p class="leader"><span class="motto">Your best resource for <span class="advanced">advanced</span> chemistry</span>Course study help <em>or </em>In-depth exam review</p></section><section class="details videos"><div class="desc"><h3>Work at your own pace</h3><p>Over 200 high-quality videos covering the essential topics and skills. Concepts are thoroughly explained and demonstrated, and example problems are worked out in an easy-to-follow format.</p><a class="example modal-video" data-toggle="modal" href="#video-popup">View example video</a></div><a class="image modal-video" data-toggle="modal" href="#video-popup"><img alt="a professor demonstrating a chemistry experiment (image taken from one of the Wasatch Education videos)" src="img/home-video.jpg" /></a></section><div class="modal hide fade" id="video-popup"><div class="modal-body"><div class="video"><iframe frameborder="0" height="100%" src="http://player.vimeo.com/video/50351160?api=1" width="100%">webkitAllowFullScreen mozallowfullscreen allowFullScreen</iframe></div></div><div class="modal-footer"><a class="btn btn-primary btn-closeVid" data-dismiss="modal" href="#">Close</a></div></div><section class="details OpenStruct"><div class="desc"><h3>Get real-world practice</h3><p>Lots of practice problems that include hints, feedback, and automatic grading, as well as practice exams that simulate the actual test-taking experience</p><a class="example" href="#">View example problems</a></div><a class="image" href="#"><img alt="A screen shot of the practice environment" src="img/home-practice.png" /></a></section><section class="details OpenStruct"><div class="desc"><h3>Understand concepts in-depth</h3><p>A study guide is included with each video to help students take notes and identify key concepts</p><a class="example" href="docs/Introduction-To-Gases.pdf">View example study guide</a></div><a class="image" href="docs/Introduction-To-Gases.pdf"><img alt="A screen shot of a study guide" src="img/home-study2.png" /></a></section><section class="details OpenStruct"><div class="desc"><h3>Get live help</h3><p>Access live tutors for personalized instruction, as well as a monitored community forum for each subject which allows students to ask and answer questions, see hints from other students, and share experiences</p><a class="example" href="#">See plans and pricing</a></div><a class="image" href="#"><img alt="stock-photo-6219140-working-on-the-computer" src="img/computer2.jpg" /></a></section><section class="details OpenStruct"><div class="desc"><h3>Create personalized study plans</h3><p>Diagnostic exams identify areas of strength and weakness to help you focus better on the areas that need work</p><a class="example" href="#">View examples</a></div><a class="image" href="#"><img alt="A screen shot of a diagnostics exam" src="img/home-diagnostic.png" /></a></section><section class="details OpenStruct"><div class="desc"><h3>Track your progress</h3><p>Each subject in the AP, IB, or A Level curriculum is organized into a Topic Map for a concise overview and for easy access to specific subjects. Color coding is used to track topics that have been covered or topics that still need work.</p><a class="example" href="#">View study maps</a></div><a class="image" href="#"><img alt="A screen shot of a study map" src="img/home-study.png" /></a></section><section class="end"><a class="btn btn-success btn-large" href="ib_dashboard.html">Sign up</a><span> or </span><a href="#">see pricing details</a></section></div><footer><p>&copy; Copyright 2012</p></footer><?php echo "<script>
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