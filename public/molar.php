<?php 
  if(isset($_GET['c'])) { 
    $c = $_GET['c'];
  } 
?><!DOCTYPE html><html><head><title>Molar Volume</title><meta content="IE=edge,chrome=1" http-equiv="X-UA-Compatible" /><meta content="width=device-width" name="viewport" /><link href="css/mobile.css" rel="stylesheet" /><link href="css/bootstrap-all.css" rel="stylesheet" /><link href="css/style.css" media="all and (min-width:1px)" rel="stylesheet" /><script src="http://use.typekit.com/qmd4aav.js" type="text/javascript"></script><script type="text/javascript">try { Typekit.load(); } catch(e) { alert(e) }</script><script src="js/modernizr.js"></script></head><body><header><p class="sign-in"><span>Student Name</span><a href="index.html">Sign out</a></p><nav><a class="first" href="dashboard.php">Dashboard</a><a>My account</a></nav><h1 class="main"><a href="index.php">Wasatch Education</a></h1></header><div class="main"><section class="video"><div class="video"><iframe frameborder="0" height="100%" src="http://player.vimeo.com/video/50351161" width="100%">webkitAllowFullScreen mozallowfullscreen allowFullScreen</iframe></div><a class="prev" href="ideal.html">Previous: <span>1.4.4 Boyle's Law</span></a><a class="next">Next: <span>1.4.4 Solving problems relating gas variables at fixed mass</span></a></section><section class="study-guide"><h2>Study Guide</h2><a class="btn btn-success btn-large study-guide" href="#">Download Study Guide<div>Charles' Law</div></a></section><section class="related"><h2>Related Topics</h2><div class="related"><ol><li class="video"><a href="charles.html">Charles' Law</a></li><li class="video">Avogadro's Law</li><li class="video">Boyle's Law</li><li class="video"><a href="ideal.html">Ideal Gas Law</a></li><li class="problems">Ideal Gas Problems</li></ol></div></section><section class="study-map"><h2>Study Map</h2><ol class="standard"><li class="title">Standard Level</li></ol><ol class="higher"><li class="title">Higher Level</li></ol></section></div><footer><p>&copy; Copyright 2012</p></footer><script src="js/jquery.min.js"></script><script src="js/plugins.js"></script><script src="js/script.js"></script><?php echo "<script>
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