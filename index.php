<html>
	<head>
		<title>Lumiere 2014</title>
		<link href="css/video-js.min.css" rel="stylesheet">
		<style>
			body{margin:0;padding:0;}
			#main{
				width:100%;
				height:100%;
				position:fixed;
				margin-top:20px;
			}
			#lodestar_video{
				
			}
			.vjs-control-bar{
				position:relative;
				top:100%;
			}
			div.video-js{
				margin:auto;
			}
			.whiteDiv{
				height:100%;
				position:fixed;
				background-color:#fff;
				z-index:1000;
			}
			#leftBlock{
				left:0;
			}
			#rightBlock{
				right:0;
			}
			.vjs-fullscreen-control { display: none; } .vjs-default-skin .vjs-volume-control { margin-right: 20px; }
		</style>
	</head>

	<body>
		<div class="whiteDiv" id="leftBlock"></div>
		<div id="main">
			<video id="lodestar_video" poster="img/hitchhike.jpg" preload="auto"
				class="video-js vjs-default-skin" controls width="960px" height="540px">
	 			<source src="http://projects.comsci.club/FabFabian/Open House 2015.mp4" type="video/mp4">
			</video>
		</div>
		<div class="whiteDiv" id="rightBlock"></div>
		<script src="js/jquery-2.1.3.min.js"></script>
		<script src="js/AudioContextMonkeyPatch.js"></script>
		<script src="js/video.js"></script>
		<script>
			var myPlayer; //videoJS player

			videojs.options.flash.swf = "video-js.swf";

			videojs("lodestar_video").ready(function(){
				myPlayer = this;
				myPlayer.play();
			});

			var jQueryVideo = $('#lodestar_video_html5_api'); //jQuery object
			var video = jQueryVideo[0]; //DOM object

			$(document).ready(function(){
				jQueryVideo.width("1920");
				$(".whiteDiv").css('width',($(window).width()-960)/2 + 'px');
				panToLeft();
				window.history.pushState("tardis", "Palette '14", "/");
			});

			function vidJump(direction){
				if(direction == 'left'){
					jQueryVideo.css('margin-left','0');
				    panToLeft();
				} else {
					jQueryVideo.css('margin-left','-960px');
			        panToRight();
				}
			}

			$(document).keydown(function(e) {
				console.log(e.which);
				console.log(gainL.gain.value);
			    if(e.which == 67 && gainL.gain.value == 1 && gainR.gain.value == 0) {
			    	console.log('keydown');
			    	vidJump('right');
			    }
			});

			$(document).keyup(function(e) {
				if(e.which == 67 && gainR.gain.value == 1 && gainL.gain.value == 0){
					console.log('keyup');
					vidJump('left');
				}
			});
		</script>
		<script src="js/audioPanner.js"></script>
		<script>
		  (function(i,s,o,g,r,a,m){i['GoogleAnalyticsObject']=r;i[r]=i[r]||function(){
		  (i[r].q=i[r].q||[]).push(arguments)},i[r].l=1*new Date();a=s.createElement(o),
		  m=s.getElementsByTagName(o)[0];a.async=1;a.src=g;m.parentNode.insertBefore(a,m)
		  })(window,document,'script','//www.google-analytics.com/analytics.js','ga');

		  ga('create', 'UA-57000907-2', 'auto');
		  ga('send', 'pageview');

		</script>
	</body>
</html>