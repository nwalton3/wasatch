/* Script */



/* ON LOAD */

$(function(){ // on page load
		
	// Initialize stuff
	//$('video,audio').mediaelementplayer(/* Options */);
	
	$('div.modal').modal({show: false});
	$('a.modal-video')
    .on('click', function(e){
      startPlayer('#video-popup iframe');
    });
	$('#video-popup .modal-footer')
	  .on('click', '.btn-closeVid', function(e){
      pausePlayer('#video-popup iframe');
	  });
	$('body')
	  .on('click', '.modal-backdrop', function(e){
      pausePlayer('#video-popup iframe');
	  });
		
	//$('.promo h1').fitText(0.9, {minFontSize: '24px', maxFontSize: '52px'});
	
	initializeStudyMap();
	
	$(window).resize(function(){
		log($(window).width());
	});
	
	var signinStart = $('#sign-in').css('top');
	var signinStop  = '-5px';
	
	$('p.sign-in').on('click', 'a', function(e) {
    $('#sign-in').animate({top: signinStop}, 300, 'easeInOutQuart', function(){
      $('#sign-in').toggleClass('show');
    });
	});
	
	$('#sign-in').on('click', 'a.close-signin', function(e) {
    $('#sign-in').animate({top: signinStart}, 300, 'easeInOutQuart', function(){
      $('#sign-in').toggleClass('show');
    });
	});

});



/* FUNCTIONS */

function startPlayer(frame) {
  var iframe = $(frame)[0];
  var player = $f(iframe);
  
  player.api('play');
}

function pausePlayer(frame) {
  var iframe = $(frame)[0];
  var player = $f(iframe);
  
  if(Modernizr.postmessage) {
     player.api('pause');       
  } else {
    var src = $('#video-popup iframe').attr('src');
    $('#video-popup iframe').attr('src',''); 
    $('#video-popup iframe').attr('src',src);
  }

}

function initializeStudyMap() {
  
  $('.study-map li').each(function(){
		
		var li = $(this);
		var num = li.find('> ol > li').size();
		
		// Add class for li with children
		if(num > 0) {
			li.addClass('hasChildren');
		}
		
		var status_yes = '<a href="#" class="status" rel="tooltip" title="Done!"></a>';
		var status_no = '<a href="#" class="status" rel="tooltip" title="Not started">!</a>';
		var status_part = '<a href="#" class="status" rel="tooltip" title="' + (num - 1) + ' of ' + num + ' items finished"></a>';
		
		// Add status markers
		if (li.hasClass('yes')){
			li.find('> span').after(status_yes);
			return;
		} else if (li.hasClass('no')){
			li.find('> span').after(status_no);
			return;
		} else if (li.hasClass('part')){
			li.find('> span').after(status_part);
			return;
		} else {
			return;
		}
		
	});
	
	$('.study-map a.status').tooltip({ delay: { show: 200, hide: 100 } });
	
	$('.study-map li a').click(function(e){
	
		var a = $(this);
		var li = a.parent();
		var href = a.attr('href');
		
    // Go to the link if it's not null	   
	   if(href !== "#" && href !== "" && href !== null) {
	     window.location = href;
	     return;
	   }
	   
		e.preventDefault();
			
		if(li.hasClass('open')) {
			li.find('> ol').slideUp(100, function(){
				li.removeClass('open');
			});
		} else {
			li.find('> ol').slideDown(100, function(){
				li.addClass('open');
			});
		}
		
	});
  
}