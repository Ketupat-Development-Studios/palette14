<html>
	<head>
		<title>Lodestar 2014</title>
		<link href="css/video-js.min.css" rel="stylesheet">
		<style>
			#main{
				width:80%;
				position:fixed;
				left:10%;
				top:10%;
			}
			#lodestar_video{
				width:100%;
				margin-bottom:20px;
			}
			.progressBar{
				margin-bottom:9px;
				position: relative;
				width: 100%;
				height: 30px;
				background-color: #000;
			}
			#timeBar{
				position: absolute;
				top: 0;
				left: 0;
				width: 0;
				height: 100%;
				background-color: #ccc;
			}
			#play-pause,.progressBar{
				display:inline-block;
			}
		</style>
	</head>

	<body>
		<div id="main">
			<video id="lodestar_video" poster="img/hitchhike.jpg" preload="auto"
				class="video-js vjs-default-skin" controls>
	 			<source src="http://comsci.club/earlydraft.mp4" type="video/mp4">
			</video>
			<!--<div id="controls">
				<div id="play-pause"><img src="img/ic_play_circle_outline_48px.svg"></div><--
			 -<div class="progressBar">
					<div id="timeBar"></div>
				</div>
				<!--<div class="progressBar">
				   <div id="bufferBar"></div>
				</div>--
			</div>
		</div>-->

		<script src="js/jquery-2.1.3.min.js"></script>
		<script src="js/video.js"></script>
		<script>
			videojs.options.flash.swf = "video-js.swf";

			videojs("lodestar_video").ready(function(){
				var myPlayer = this;
				 myPlayer.play();
			});

			/*
			var playIcon = '<img src="img/ic_play_circle_outline_48px.svg">';
			var pauseIcon = '<img src="img/ic_pause_circle_outline_48px.svg">';
			var controlsWidth;

			var jQueryVideo = $('#lodestar_video');
			var video = jQueryVideo[0];

			$(document).ready(function(){
				panToLeft();
			});

			$('#play-pause').on('click', function() {
			   if(video.paused) {
			   		$(this).html(pauseIcon);
			    	video.play();
			   } else {
			   		$(this).html(playIcon);
			    	video.pause();
			   }
			   return false;
			});

			$(window).on('resize load',function(){
				controlsWidth = $("#controls").width();
				$('.progressBar').width(controlsWidth-48);
			});

			//get HTML5 video time duration
			jQueryVideo.on('loadedmetadata', function() {
			   $('.duration').text(video.duration);
			});
 
			//update HTML5 video current play time
			jQueryVideo.on('timeupdate', function() {
			   var currentPos = video.currentTime; //Get currenttime
			   var maxduration = video.duration; //Get video duration
			   var percentage = currentPos / maxduration; //in %
			   $('#timeBar').css('width', ((controlsWidth - 48)*percentage)+'px');
			});

			$(document).keypress(function(e) {
				console.log('audio switch');
			    if(e.which == 82) {
			        if(gainL.gain.value == 1){
			        	panToRight();
			        } else {
			        	panToLeft();
			        }
			    }
			});
			/*
			video.onprogress = function(){
			    var maxduration = video.duration;
				var currentBuffer = video.buffered.end(0);
				var percentage = 100 * currentBuffer / maxduration;
				console.log(percentage);
				$('#bufferBar').css('width', percentage+'%');

				if(currentBuffer < maxduration) {
					setTimeout(startBuffer, 500);
				}
			}*/
		</script>
		<!--<script src="js/audioPanner.js"></script>-->
	</body>
</html>