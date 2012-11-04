<?php 
  if(isset($_GET['c'])) { 
    $c = $_GET['c'];
  } 
?><!DOCTYPE html><html><head><title>Sign Up</title><meta content="IE=edge,chrome=1" http-equiv="X-UA-Compatible" /><meta content="width=device-width" name="viewport" /><link href="css/mobile.css" rel="stylesheet" /><link href="css/bootstrap-all.css" rel="stylesheet" /><link href="css/style.css" media="all and (min-width:1px)" rel="stylesheet" /><link href="css/signup.css" media="all and (min-width:1px)" rel="stylesheet" /><script src="http://use.typekit.com/qmd4aav.js" type="text/javascript"></script><script type="text/javascript">try { Typekit.load(); } catch(e) { alert(e) }</script><script src="js/modernizr.js"></script></head><body><header><p class="sign-in"><a href="#">Sign in</a></p><nav><a class="first" href="pricing.php">Plans & Pricing</a></nav><h1 class="main"><a href="index.php">Wasatch Education</a></h1></header><div class="main"><div class="jumbotron"><div class="container"><h2>Sign up</h2><p class="lead">It's super easy to get started</p></div></div><div class="container form-container"><form action="payment.php" class="form-horizontal" method="post"><div class="control-group"><label class="control-label large-input" for="emailInput">Email</label><div class="controls"><input class="input-large" id="emailInput" name="emailInput" placeholder="email@example.com" type="text" /></div></div><div class="control-group"><label class="control-label large-input" for="passphraseInput">Passphrase</label><div class="controls"><input class="input-xlarge" id="passphraseInput" name="passphraseInput" placeholder="i.e. 'grumpy green gorillas'" type="text" /></div></div><div class="control-group"><label class="control-label" for="planInput">Plan</label><div class="controls"><label class="radio"><input id="planRadio1" name="planRadios" type="radio" value="Trial" /> Trial</label><label class="radio"><input id="planRadio2" name="planRadios" type="radio" value="Individual" /> Individual</label><label class="radio"><input id="planRadio3" name="planRadios" type="radio" value="Tutored" /> Tutored</label><label class="radio"><input id="planRadio4" name="planRadios" type="radio" value="Educator" /> Educator</label></div></div><div class="form-actions"><button class="btn btn-primary btn-large" type="submit">Get started</button></div></form></div><script><?php echo 'var plan = ' . $_GET['plan']; ?></script></div><footer><p>&copy; Copyright 2012</p></footer><script src="js/jquery.min.js"></script><script src="js/plugins.js"></script><script src="js/script.js"></script><script src="js/signup.js"></script><?php echo "<script>
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