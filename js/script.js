/* Script */


$(function(){ // on page load
	
	// Initialize stuff
	$('video,audio').mediaelementplayer(/* Options */);
	$('#myModal').modal({show: false});
		
	//$('.promo h1').fitText(0.9, {minFontSize: '24px', maxFontSize: '52px'});
	
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
	
	
	$(window).resize(function(){
		log($(window).width());
	});

});