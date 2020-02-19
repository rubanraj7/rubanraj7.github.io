var counter=0;
var endCounter=0;
var imgArray = {
	0 : '<img src="images/1.jpg" alt="" class="imageLayer layer1" style="top: 0%; left: 0;">',
	1 : '<img src="images/2.jpg" alt="" class="imageLayer layer2" style=" right: 0;">',
	2 : '<div id="iframeContainer"><iframe id="vimeoVideo" src="https://player.vimeo.com/video/298283760?autoplay=1&loop=1" frameborder="0" webkitallowfullscreen mozallowfullscreen allowfullscreen></iframe><script src="https://player.vimeo.com/api/player.js"></script></div>',
	3 : '<img src="images/3.jpg" alt="" class="imageLayer" style="top: 0%; right: 18%;">',
	4 : ' <img src="images/4.jpg" alt="" class="imageLayer" style="top: 0; right: 0;">',
	5 : ' <img src="images/5.jpg" alt="" class="imageLayer" style="top: 0%; right: 32%;">',

};

$( document ).ready(function() {

	console.log('hello there!');

	document.onkeydown = function(evt) {
		evt = evt || window.event;
		switch (evt.keyCode) {
			case 37:
			backNavigation();
			break;
			case 39:
			forwardNavigation();
			break;
		}
	};



	$(".leftSide").click(function(){
		backNavigation();
	});

	function backNavigation(){
		$('#gallery :last-child').remove();
		if (counter >0){
			counter--;
		}
	}

	$(".rightSide").click(function(){
		forwardNavigation();
	});

	function forwardNavigation(){
		$("#gallery").append(imgArray[counter]);
		if (counter < Object.keys(imgArray).length){
			counter++;
		}
		else{
			$(".rightSide").removeClass("col-6");
			$(".rightSide").addClass("col-12");

			$("#siteTitleOpen").hide();
			$("#gallery").fadeOut("slow");
			$("#contact").css('display','block');
			switch(endCounter) {
				case 1:
				$("#siteTitleEnd").show();
				break;
				case 2:
				$("#contactImageContainer").css('display','block');
				break;
				default:
				//nada
			}
			$(".leftSide").hide();
			if(endCounter==2){
				$(".rightSide").hide();
			}
			endCounter++;
		}
	}

});



