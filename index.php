<html>
	<head>
		<title>Lodestar 2014</title>
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
		</style>
	</head>

	<body>
		<div class="whiteDiv" id="leftBlock"></div>
		<div id="main">
			<video id="lodestar_video" poster="img/hitchhike.jpg" preload="auto"
				class="video-js vjs-default-skin" controls width="960px" height="540px">
	 			<source src="http://comsci.club/earlydraft.mp4" type="video/mp4">
			</video>
		</div>
		<div class="whiteDiv" id="rightBlock"></div>
		<script src="js/jquery-2.1.3.min.js"></script>
		<script src="js/video.js"></script>
		<script>
			videojs.options.flash.swf = "video-js.swf";

			videojs("lodestar_video").ready(function(){
				var myPlayer = this;
				 myPlayer.play();
			});

			var jQueryVideo = $('#lodestar_video_html5_api'); //jQuery object
			var video = jQueryVideo[0]; //DOM object

			$(document).ready(function(){
				jQueryVideo.width("1920");
				$(".whiteDiv").css('width',($(window).width()-960)/2 + 'px');
				panToLeft();
			});

			$(document).keypress(function(e) {
				console.log('audio switch');
			    if(e.which == 114) {
			        if(gainL.gain.value == 1){
			        	jQueryVideo.css('margin-left','-960px');
			        	panToRight();
			        	console.log('right');
			        } else {
			        	jQueryVideo.css('margin-left','0');
			        	panToLeft();
			        	console.log('left');
			        }
			    }
			});
		</script>
		<script src="js/audioPanner.js"></script>
	</body>
</html>