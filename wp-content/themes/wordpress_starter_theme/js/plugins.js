//load in jQuery plugin dependencies (eg. flexslider, smoothScroll etc.) in this file

// ==================
// INSTAGRAM CAROUSEL
// ==================

//// carregar galeria do instagram
// var access_token = "1688239682.3a81a9f.1aabde687ed2437ea4ab44d9c6e2db6b"; //use your own access token
// var resolution = "thumbnail"; // resolution: low_resolution, thumbnail, standard_resolution
// var user_id = "1688239682"; //use your own access userid
//var hashtag = "coffee"; // #hashtag

// carossel magic
// carregar galeria do instagram
var access_token = "1688239682.3a81a9f.1aabde687ed2437ea4ab44d9c6e2db6b";
var user_id = "1688239682";
var hashtag = "dogsofinstagram"; // #hashtag

//HASHTAG URL - USE THIS URL FOR HASHTAG PICS
var start_url = "https://api.instagram.com/v1/users/self/media/recent/?access_token=" + access_token;
function loadEmUp(next_url) {

	var url = next_url;

	$(function () {
		$.ajax({
			type: "GET",
			dataType: "jsonp",
			cache: false,
			url: url,
			success: function (data) {
				var count = 15;

				for (var i = 0; i < count; i++) {
					if (typeof data.data[i] !== 'undefined') {
						//console.log("id: " + data.data[i].id);
						$("#instagram").append("<li class='instagram-wrap' id='pic-" + data.data[i].id + "' ><a class='instagram-link' target='_blank' href='" + data.data[i].link + "'><span class='likes'>" + data.data[i].likes.count + "</span><img class='instagram-image' src='" + data.data[i].images.low_resolution.url + "' alt='Instagram'></a></li>");
					}
				}
			}
		});
	});
}
function instagramCarrousel(){
	var scroller = $('#instagram-container').find('div.innerScrollArea');
	var scrollerContent = scroller.children('ul');
	scrollerContent.children().clone().appendTo(scrollerContent);
	var curX = 0;
	scrollerContent.children().each(function(){
		var $this = $(this);
		curX += $this.width();
	});
	var fullW = curX / 2;
	var viewportW = scroller.width();

	// Scrolling speed management
	var controller = {curSpeed:0, fullSpeed:1};
	var $controller = $(controller);
	var tweenToNewSpeed = function(newSpeed, duration)
	{
		if (duration === undefined)
			duration = 600;
		$controller.stop(true).animate({curSpeed:newSpeed}, duration);
	};

	// Pause on hover
	var reverse = false;
	var $voltar = $('#voltar');

	scroller.on({
		mouseenter: function() {
			tweenToNewSpeed(0);
		},
		mouseleave: function() {
			tweenToNewSpeed(controller.fullSpeed);
		}
	});

	$voltar.on({
		mouseenter: function() {
			reverse = true;
		},
		mouseleave: function() {
			reverse = false;
		},
		touchstart: function() {
			reverse = !$(this).hasClass('voltar');
		}
	});

	//mobile
	// Scrolling management; start the automatical scrolling
	var doScroll = function()
	{
		var curX, newX;

		if (reverse == false){
			$voltar.removeClass('voltar');
			curX = scroller.scrollLeft();
			newX = curX + controller.curSpeed;

			if (newX > fullW*2 - viewportW) newX -= fullW;

			scroller.scrollLeft(newX);
		} else {
			$voltar.addClass('voltar');
			curX = scroller.scrollLeft();
			newX = curX - controller.curSpeed;
			if (newX < scroller.width()) newX += fullW;

			scroller.scrollLeft(newX);
		}
	};
	setInterval(doScroll, 20);
	tweenToNewSpeed(controller.fullSpeed);
}
// carossel magic
loadEmUp(start_url); //carregar instagram gallery
setTimeout(function(){ instagramCarrousel(); }, 7000);