jQuery(document).ready(function($){
	var is_firefox = navigator.userAgent.indexOf('Firefox') > -1;

	//open team-member bio
	$('#cd-team').find('ul a').on('click', function(event){
		event.preventDefault();
		var selected_member = $(this).data('type');
		$('.cd-member-bio.'+selected_member+'').addClass('slide-in');
		$('.cd-member-bio-close').addClass('is-visible');

		// firefox transitions break when parent overflow is changed, so we need to wait for the end of the trasition to give the body an overflow hidden
		if( is_firefox ) {
			$('main').addClass('slide-out').one('webkitTransitionEnd otransitionend oTransitionEnd msTransitionEnd transitionend', function(){
				$('body').addClass('overflow-hidden');
			});
		} else {
			$('main').addClass('slide-out');
			$('body').addClass('overflow-hidden');
		}

	});

	//close team-member bio
	$(document).on('click', '.cd-overlay, .cd-member-bio-close', function(event){
		event.preventDefault();
		$('.cd-member-bio').removeClass('slide-in');
		$('.cd-member-bio-close').removeClass('is-visible');

		if( is_firefox ) {
			$('main').removeClass('slide-out').one('webkitTransitionEnd otransitionend oTransitionEnd msTransitionEnd transitionend', function(){
				$('body').removeClass('overflow-hidden');
			});
		} else {
			$('main').removeClass('slide-out');
			$('body').removeClass('overflow-hidden');
		}
	});
});

function hideBioView(param1){
	if(param1 == "member1"){
	console.log("----------------------"+param1);
	document.getElementById("detailedView01").className = "hidethistag";
	console.log("hii tthere********");
	}

	if(param1 == "member2"){
	console.log("----------------------"+param1);
	document.getElementById("detailedView02").className = "hidethistag";
	console.log("hii tthere********");
}
};

function changeClassforBioView(param2){
	if(param2 == "member1"){
	document.getElementById("detailedView01").className = "cd-member-bio member-1";
	document.getElementById("detailedView02").className = "hidethistag";
	} 
if(param2 == "member2"){
	document.getElementById("detailedView02").className = "cd-member-bio member-3";
	document.getElementById("detailedView01").className = "hidethistag";
	} 
};