<?php 
  if(isset($_GET['c'])) { 
    $c = $_GET['c'];
  } 
?><!DOCTYPE html><html><head><title>Wasatch Education</title><meta content="IE=edge,chrome=1" http-equiv="X-UA-Compatible" /><meta content="width=device-width" name="viewport" /><link href="css/mobile.css" rel="stylesheet" /><link href="css/bootstrap-all.css" rel="stylesheet" /><link href="css/style.css" media="all and (min-width:1px)" rel="stylesheet" /><link href="css/home.css" media="all and (min-width:1px)" rel="stylesheet" /><script src="http://use.typekit.com/qmd4aav.js" type="text/javascript"></script><script type="text/javascript">try { Typekit.load(); } catch(e) { alert(e) }</script><script src="js/modernizr.js"></script></head><body><header><p class="sign-in"><a href="#">Sign in</a></p><nav><a class="first" href="pricing.php">Plans & Pricing</a></nav><h1 class="main"><a href="index.php">Wasatch Education</a></h1></header><div class="main"><section class="promo"><div class="promo"><h1><p><strong>AP,</strong> <strong>IB,</strong> and <strong>A Level</strong><br>
test prep &amp; study support</p>
</h1><div class="signup"><p>learn more below<span>or</span><a class="btn btn-success btn-large" href="pricing.php">Sign up</a></p></div></div><img alt="" src="img/main4.png" /></section><section class="description"><p class="leader"><span class="motto">Your best resource for advanced chemistry</span>Course study help <em>or </em>In-depth exam review</p></section><section class="details videos"><div class="desc"><h3>Work at your own pace</h3><p>Over 200 high-quality videos covering the essential topics and skills. Concepts are thoroughly explained and demonstrated, and example problems are worked out in an easy-to-follow format.</p><a class="example modal-video" data-toggle="modal" href="#myModal">View example video</a></div><a class="image modal-video" data-toggle="modal" href="#video-popup"><img alt="a professor demonstrating a chemistry experiment (image taken from one of the Wasatch Education videos)" src="img/home-video.jpg" /></a></section><div class="modal hide fade" id="video-popup"><div class="modal-body"><iframe src="http://player.vimeo.com/video/50351160?api=1" frameborder="0" webkitAllowFullScreen mozallowfullscreen allowFullScreen></iframe></div><div class="modal-footer"><a class="btn btn-primary btn-closeVid" data-dismiss="modal" href="#"></a></div></div><section class="details OpenStruct"><div class="desc"><h3>Get real-world practice</h3><p>Lots of practice problems that include hints, feedback, and automatic grading, as well as practice exams that simulate the actual test-taking experience</p><a class="example" href="#">View example problems</a></div><a class="image" href="#"><img alt="A screen shot of the practice environment" src="img/home-practice.png" /></a></section><section class="details OpenStruct"><div class="desc"><h3>Understand concepts in-depth</h3><p>A study guide is included with each video to help students take notes and identify key concepts</p><a class="example" href="docs/Introduction-To-Gases.pdf">View example study guide</a></div><a class="image" href="docs/Introduction-To-Gases.pdf"><img alt="A screen shot of a study guide" src="img/home-study2.png" /></a></section><section class="details OpenStruct"><div class="desc"><h3>Get live help</h3><p>Access live tutors for personalized instruction, as well as a monitored community forum for each subject which allows students to ask and answer questions, see hints from other students, and share experiences</p><a class="example" href="#">See plans and pricing</a></div><a class="image" href="#"><img alt="stock-photo-6219140-working-on-the-computer" src="img/computer2.jpg" /></a></section><section class="details OpenStruct"><div class="desc"><h3>Create personalized study plans</h3><p>Diagnostic exams identify areas of strength and weakness to help you focus better on the areas that need work</p><a class="example" href="#">View examples</a></div><a class="image" href="#"><img alt="A screen shot of a diagnostics exam" src="img/home-diagnostic.png" /></a></section><section class="details OpenStruct"><div class="desc"><h3>Track your progress</h3><p>Each subject in the AP, IB, or A Level curriculum is organized into a Topic Map for a concise overview and for easy access to specific subjects. Color coding is used to track topics that have been covered or topics that still need work.</p><a class="example" href="#">View study maps</a></div><a class="image" href="#"><img alt="A screen shot of a study map" src="img/home-study.png" /></a></section><section class="end"><a class="btn btn-success btn-large" href="ib_dashboard.html">Sign up</a><span> or </span><a href="#">see pricing details</a></section></div><footer><p>&copy; Copyright 2012</p></footer><script src="js/jquery.min.js"></script><script src="js/plugins.js"></script><script src="js/script.js"></script><?php echo "<script>
  var c = '" . $_GET['c'] . "';
</script>"; ?><script type="text/javascript">var curriculum = "";
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

  if (curriculum !== "") {
    title.html(curriculum + ": " + title.html());
    h1.prepend('<div class="wasatch">Wasatch Education</div>').find('a').html(curriculum + " Chemistry");
    links.each(function(){
      var a = $(this);
      var url = a.attr('href');

      if(url != "#" && url != "") {
        url = url + "?c=" + c;
        a.attr('href', url);
      }
    });
  }
  if(map.size() > 0 ) {
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