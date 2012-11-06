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
?><!DOCTYPE html><html><head><title>My Dashboard</title><meta content="IE=edge,chrome=1" http-equiv="X-UA-Compatible" /><meta content="width=device-width" name="viewport" /><link href="css/mobile.css" rel="stylesheet" /><link href="css/bootstrap-all.css" rel="stylesheet" /><link href="css/style.css" media="all and (min-width:1px)" rel="stylesheet" /><link href="css/dashboard.css" media="all and (min-width:1px)" rel="stylesheet" /><script src="http://use.typekit.com/qmd4aav.js" type="text/javascript"></script><script type="text/javascript">try { Typekit.load(); } catch(e) { alert(e) }</script><script src="js/modernizr.js"></script></head><body><header><p class="sign-in"><span>Student Name</span><a href="index.php">Sign out</a></p><nav><a>My account</a></nav><div id="sign-in"><form action="dashboard.php" method="post"><input id="login_user" name="u" placeholder="username" type="text" /><input id="login_pwd" name="p" placeholder="password" type="password" /><button class="btn btn-primary btn-large" type="submit" value="Sign in">Sign in</button> <a class="btn close-signin" href="#"><i class="icon-remove"></i></a></form></div><h1 class="main"><a href="index.php">Wasatch Education</a></h1></header><div class="main"><section class="profile"><h2>Study Profile</h2><div class="achievements"><span class="title">Achievement: </span><span class="callout">Scholar</span><a>1,023 points earned</a><a>47 points to next level</a></div><a>Member since April 2012</a><a>36 study hours spent</a><a>43 videos viewed</a><a>134 problems worked</a><a>1 diagnostic exam taken</a><a>2 practice exams taken</a></section><section class="forum"><h2>IB Chemistry Forum</h2><div class="achievements"><span class="title">Level: </span><span class="callout">Chem whiz</span><a>19 questions asked</a><a>285 answers given</a></div><div class="commenter"><span class="callout">Top commenter</span><a>73 helpful answers</a></div><a class="btn btn-primary">Go to forum</a></section><section class="study-map"><h2>Study Map</h2><p>Loading study map...</p></section><div class="floater"><section class="tutoring"><h2>Tutoring</h2><p>You currently have live tutoring available</p><a class="btn btn-primary">Start live tutoring session</a></section><section class="exams"><h2>Exams</h2><table><tr><td class="done">&nbsp;</td><td>Diagnostic Exam</td><td>&nbsp;</td><td><a>results</a></td></tr><tr><td class="done">&nbsp;</td><td>Practice Exam 1</td><td>76%</td><td><a>results</a></td></tr><tr><td class="done">&nbsp;</td><td>Practice Exam 2</td><td>83%</td><td><a>results</a></td></tr><tr><td class="done">&nbsp;</td><td>Practice Exam 3</td><td>&nbsp;</td><td><a>take exam</a></td></tr></table></section><section class="recent related"><h2>Recently Visited</h2><ol><li class="video"><span>1.4.4</span><a href="charles.php">Charles' Law</a></li><li class="video"><span>1.4.4</span><a href="ideal.php">Ideal Gas Law</a></li><li class="video"><span>1.4.4</span><a href="molar.php">Molar volume</a></li></ol></section></div></div><footer><p>&copy; Copyright 2012</p></footer><?php echo "<script>
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