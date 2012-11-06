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
?><!DOCTYPE html><html><head><title>Molar Volume</title><meta content="IE=edge,chrome=1" http-equiv="X-UA-Compatible" /><meta content="width=device-width" name="viewport" /><link href="css/mobile.css" rel="stylesheet" /><link href="css/bootstrap-all.css" rel="stylesheet" /><link href="css/style.css" media="all and (min-width:1px)" rel="stylesheet" /><script src="http://use.typekit.com/qmd4aav.js" type="text/javascript"></script><script type="text/javascript">try { Typekit.load(); } catch(e) { alert(e) }</script><script src="js/modernizr.js"></script></head><body><header><p class="sign-in"><span>Student Name</span><a href="index.php">Sign out</a></p><nav><a class="first" href="dashboard.php">Dashboard</a><a>My account</a></nav><div id="sign-in"><form action="dashboard.php" method="post"><input id="login_user" name="u" placeholder="username" type="text" /><input id="login_pwd" name="p" placeholder="password" type="password" /><button class="btn btn-primary btn-large" type="submit" value="Sign in">Sign in</button> <a class="btn close-signin" href="#"><i class="icon-remove"></i></a></form></div><h1 class="main"><a href="index.php">Wasatch Education</a></h1></header><div class="main"><section class="video"><div class="video"><iframe frameborder="0" height="100%" src="http://player.vimeo.com/video/50351161" width="100%">webkitAllowFullScreen mozallowfullscreen allowFullScreen</iframe></div><a class="prev" href="ideal.html">Previous: <span>1.4.4 Boyle's Law</span></a><a class="next">Next: <span>1.4.4 Solving problems relating gas variables at fixed mass</span></a></section><section class="study-guide"><h2>Study Guide</h2><a class="btn btn-success btn-large study-guide" href="#">Download Study Guide<div>Charles' Law</div></a></section><section class="related"><h2>Related Topics</h2><div class="related"><ol><li class="video"><a href="charles.html">Charles' Law</a></li><li class="video">Avogadro's Law</li><li class="video">Boyle's Law</li><li class="video"><a href="ideal.html">Ideal Gas Law</a></li><li class="problems">Ideal Gas Problems</li></ol></div></section><section class="study-map"><h2>Study Map</h2><ol class="standard"><li class="title">Standard Level</li><li class="topic part hasChildren"><span class="number">1</span><a href="#">Stoichiometry</a><ol><li class="topic yes"><span class="number">1.1</span>Mole concept and Avogadro's constant</li><li class="topic yes"><span class="number">1.2</span>Formulas</li><li class="topic yes"><span class="number">1.3</span>Chemical equations</li><li class="topic part hasChildren"><span class="number">1.4</span><a href="#">Moles and gaseous volume relationships in chemical reactions</a><ol><li class="problem no"><span class="number"></span>Theoretical and experimental yields problems</li><li class="problem no"><span class="number"></span>Ideal gas problems</li><li class="video yes"><span class="number">1.4.1</span>Calculating theoretical yields</li><li class="video yes"><span class="number">1.4.2</span>Limiting reagents</li><li class="video yes"><span class="number">1.4.3</span>Solving problems involving theoretical and experimental yields</li><li class="video yes"><span class="number">1.4.4</span>Avogadro's Law</li><li class="video no"><span class="number">1.4.5</span><a href="ib_charles.html">Charle's Law</a></li><li class="video yes"><span class="number">1.4.6</span>Boyle's Law</li><li class="video no"><span class="number">1.4.7</span><a href="ib_ideal.html">Ideal Gas Law</a></li><li class="video no"><span class="number">1.4.8</span><a href="ib_molar.html">Molar volume</a></li><li class="video yes"><span class="number">1.4.9</span>Solving problems relating gas variables at fixed mass</li><li class="video yes"><span class="number">1.4.10</span>Solving problems using PV = nRT</li><li class="video no"><span class="number">1.4.11</span>Analyzing graphs using the ideal has equation</li></ol></li><li class="topic yes"><span class="number">1.5</span>Solutions</li></ol></li><li class="topic part hasChildren"><span class="number">2</span><a href="#">Atomic theory</a><ol><li class="topic yes"><span class="number">2.1</span>The atom</li><li class="topic yes"><span class="number">2.2</span>The mass spectrometer</li><li class="topic yes hasChildren"><span class="number">2.3</span><a href="#">Electron arrangement</a><ol><li class="video no"><span class="number">2.3.1</span>Electron arrangement problems</li><li class="video part"><span class="number">2.3.2</span>Electronic configurations</li><li class="video yes"><span class="number">2.3.3</span>Bohr model</li><li class="video yes"><span class="number">2.3.4</span>Line spectra</li><li class="video part"><span class="number">2.3.5</span>Energy level calculations</li><li class="video no"><span class="number">2.3.6</span>Practice writing electronic configurations</li></ol></li></ol></li><li class="topic yes hasChildren"><span class="number">3</span><a href="#">Periodicity</a><ol><li class="topic part"><span class="number">3.1</span>The periodic table</li><li class="topic yes"><span class="number">3.2</span>Physical properties</li><li class="topic yes"><span class="number">3.3</span>Chemical properties</li></ol></li><li class="topic no hasChildren"><span class="number">4</span><a href="#">Bonding</a><ol><li class="topic yes"><span class="number">4.1</span>Ionic bonding</li><li class="topic yes"><span class="number">4.2</span>Covalent bonding</li><li class="topic part"><span class="number">4.3</span>Intermolecular forces</li><li class="topic yes"><span class="number">4.4</span>Metallic bonding</li><li class="topic yes"><span class="number">4.5</span>Physical properties</li></ol></li><li class="topic no hasChildren"><span class="number">5</span><a href="#">Energetics</a><ol><li class="topic yes"><span class="number">5.1</span>Exo and endothermic reactions</li><li class="topic yes"><span class="number">5.2</span>Calculation of enthalpy changes</li><li class="topic part"><span class="number">5.3</span>Hess' law</li><li class="topic yes"><span class="number">5.4</span>Bond enthalpies</li></ol></li><li class="topic yes hasChildren"><span class="number">6</span><a href="#">Kinetics</a><ol><li class="topic yes"><span class="number">6.1</span>Rates of reaction</li><li class="topic yes"><span class="number">6.2</span>Collision theory</li></ol></li><li class="topic yes hasChildren"><span class="number">7</span><a href="#">Equilibrium</a><ol><li class="topic yes"><span class="number">7.1</span>Dynamic equillibrium</li><li class="topic part"><span class="number">7.2</span>The position of equilibrium</li></ol></li><li class="topic part hasChildren"><span class="number">8</span><a href="#">Acids and bases</a><ol><li class="topic yes"><span class="number">8.1</span>Theories of acids and bases</li><li class="topic yes"><span class="number">8.2</span>Properties of acids and bases</li><li class="topic yes"><span class="number">8.3</span>Strong and weak acids and bases</li><li class="topic yes"><span class="number">8.4</span>The pH scale</li></ol></li><li class="topic part hasChildren"><span class="number">9</span><a href="#">Oxidation and reduction</a><ol><li class="topic part"><span class="number">9.1</span>Introduction to oxidation and reduction</li><li class="topic yes"><span class="number">9.2</span>Redox equations</li><li class="topic yes"><span class="number">9.3</span>Reactivity</li><li class="topic yes"><span class="number">9.4</span>Voltaic cells</li><li class="topic yes"><span class="number">9.5</span>Electrolytic cells</li></ol></li><li class="topic yes hasChildren"><span class="number">10</span><a href="#">Organic chemistry</a><ol><li class="topic part"><span class="number">10.1</span>Introduction</li><li class="topic yes"><span class="number">10.2</span>Alkanes</li><li class="topic yes"><span class="number">10.3</span>Alkenes</li><li class="topic yes"><span class="number">10.4</span>Alcohols</li><li class="topic yes"><span class="number">10.5</span>Halogenoalkanes</li><li class="topic part"><span class="number">10.6</span>Reaction pathways</li></ol></li><li class="topic yes hasChildren"><span class="number">11</span><a href="#">Measurement and data processing</a><ol><li class="topic yes"><span class="number">11.1</span>Uncertainty and error in measurement</li><li class="topic yes"><span class="number">11.2</span>Uncertainty in calculated results</li><li class="topic yes"><span class="number">11.3</span>Graphical techniques</li></ol></li></ol><ol class="higher"><li class="title">Higher Level</li><li class="topic yes hasChildren"><span class="number">12</span><a href="#">Atomic structure</a><ol><li class="video yes"><span class="number">12.1</span>Electron configuration</li></ol></li><li class="topic yes hasChildren"><span class="number">13</span><a href="#">Periodicity</a><ol><li class="video yes"><span class="number">13.1</span>Trends across period 3</li></ol></li><li class="topic part hasChildren"><span class="number">14</span><a href="#">Bonding</a><ol><li class="video part"><span class="number">14.1</span>Shapes of molecules and ions</li><li class="video part"><span class="number">14.2</span>Hybridisation</li><li class="video yes"><span class="number">14.3</span>Delocalisation of electrons</li></ol></li><li class="topic yes hasChildren"><span class="number">15</span><a href="#">Energetics</a><ol><li class="video no"><span class="number">15.1</span>Standard enthalpy changes of reaction</li><li class="video no"><span class="number">15.2</span>Born-Haber cycle</li><li class="video yes"><span class="number">15.3</span>Entropy</li><li class="video yes"><span class="number">15.4</span>Spontaneity</li></ol></li><li class="topic yes hasChildren"><span class="number">16</span><a href="#">Kinetics</a><ol><li class="video yes"><span class="number">16.1</span>Rate expression</li><li class="video part"><span class="number">16.2</span>Reaction mechanism</li><li class="video part"><span class="number">16.3</span>Activation energy</li></ol></li><li class="topic part hasChildren"><span class="number">17</span><a href="#">Equilibrium</a><ol><li class="video yes"><span class="number">17.1</span>Liquid-vapour equilibrium</li><li class="video no"><span class="number">17.2</span>The equilibrium law</li></ol></li><li class="topic no hasChildren"><span class="number">18</span><a href="#">Acids and bases</a><ol><li class="video no"><span class="number">18.1</span>Calculations involving acids and bases</li><li class="video yes"><span class="number">18.2</span>Buffer solutions</li><li class="video yes"><span class="number">18.3</span>Salt hydrolysis</li><li class="video yes"><span class="number">18.4</span>Acid-base titrations</li><li class="video part"><span class="number">18.5</span>Indicators</li></ol></li><li class="topic no hasChildren"><span class="number">19</span><a href="#">Oxidation and reduction</a><ol><li class="video part"><span class="number">19.1</span>Standard electrode potentials</li><li class="video yes"><span class="number">19.2</span>Electrolysis</li></ol></li><li class="topic no hasChildren"><span class="number">20</span><a href="#">Organic chemistry</a><ol><li class="video no"><span class="number">20.1</span>Introduction</li><li class="video no"><span class="number">20.2</span>Nucleophilic substitution reactions</li><li class="video yes"><span class="number">20.3</span>Elimination reactions</li><li class="video yes"><span class="number">20.4</span>Condensation reactions</li><li class="video yes"><span class="number">20.5</span>Reaction pathways</li><li class="video part"><span class="number">20.6</span>Stereoisomerism</li></ol></li></ol></section></div><footer><p>&copy; Copyright 2012</p></footer><?php echo "<script>
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