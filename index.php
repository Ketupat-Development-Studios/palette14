<html>
	<head>
		<title>Raffles Palette</title>
		<!--[if IE]><link rel="shortcut icon" href="img/favicon.ico"><![endif]-->
		<link rel="icon" href="img/favicon.ico">
		<link rel="apple-touch-icon-precomposed" href="img/favicon.ico">

		<link href="css/video-js.min.css" rel="stylesheet">
		<link href="css/font-awesome.min.css" rel="stylesheet">
		<link href='http://fonts.googleapis.com/css?family=Open+Sans:300' rel='stylesheet' type='text/css'>

		<style>
			body{
				margin:0;
				padding:0 0 20px 0;
				background-color:#336600;
				overflow-x:hidden;
				font-family: 'Open Sans', sans-serif;
			}
			.top *{
				position:absolute;
				z-index:7;
			}
			#main{
				width:100%;
				position:absolute;
			}
			.vjs-control-bar{
				position:relative;
			}
			div.video-js{
				margin:auto;
				z-index:5;
			}
			#leftBlock,#rightBlock{
				height:100%;
				position:fixed;
				background-color:#336600;
				z-index:6;
				top:0;
			}
			#leftBlock{
				left:0;
			}
			#rightBlock{
				right:0;
			}
			.vjs-fullscreen-control { display: none; } .vjs-default-skin .vjs-volume-control { margin-right: 20px; }

			#banner{
				left:0;
				width:40%;
			}
			#logo{
				right:0;
				width:8%;
				margin:15px 15px 0 0;
			}
			.clear{
				clear:both;
			}
			.bottom{
				width:640px;
				margin:380px auto auto auto;
			}
			.share{
				display:inline-block;
				font-size:2em;
				color:#fff;
				margin:0 0 0 20px;
				cursor:pointer;
				text-align:center;
			}
			h2{
				color:#fff;
				font-weight:300;
				margin:0 0 20px 0;
			}
		</style>
	</head>

	<body>
		<div class="top">
			<img src="img/banner.png" id="banner">
			<img src="img/logo.png" id="logo">
			<div class="clear"></div>
		</div>
		
		<div id="main">
			<div id="leftBlock"></div>
			<video id="palette_video" poster="img/thumbnail.png" preload="auto"
				class="video-js vjs-default-skin" controls data-setup="{}" width="640" height="360">
	 			<source src="http://projects.comsci.club/FabFabian/Open House 2015 (Version 2).mp4" type="video/mp4">
			</video>
			<div id="rightBlock"></div>
		</div>

		<div class="bottom">
			<h2>Share Your Experience</h1>
			<div class="share" id="fb">
				<i class="fa fa-facebook"></i>
			</div>
			<div class="share" id="twitter">
				<i class="fa fa-twitter"></i>
			</div>
		</div>

		<script src="js/jquery-2.1.3.min.js"></script>
		<script src="js/AudioContextMonkeyPatch.js"></script>
		<script src="js/video.js"></script>
		<script src="js/browserCheck.js"></script>
		<script>
			var vidHeight = 360;
			var vidWidth = 640;


			var myPlayer; //videoJS player

			videojs.options.flash.swf = "video-js.swf";

			videojs("palette_video").ready(function(){
				myPlayer = this;
				myPlayer.play();
			});

			var jQueryVideo = $('#palette_video_html5_api'); //jQuery object
			var video = jQueryVideo[0]; //DOM object

			$(document).ready(function(){
				jQueryVideo.width(vidWidth*2);
				$("#leftBlock,#rightBlock").css('width',($(window).width()-vidWidth)/2 + 'px');
				panToLeft();

				$(".top").height($("#banner").height());
			});

			$(window).resize(function(){
				location.reload();
			});

			function vidJump(direction){
				if(direction == 'left'){
					jQueryVideo.css('margin-left','0');
				    panToLeft();
				} else {
					jQueryVideo.css('margin-left','-'+vidWidth+'px');
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

			$("#fb").click(function(){
				window.location.href = "https://www.facebook.com/sharer/sharer.php?u=http://rafflespalette.com";
			});

			$("#twitter").click(function(){
				window.location.href = "http://twitter.com/share?text=Experience the Raffles Palette&url=http://rafflespalette.com&hashtags=rafflespalette";
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