<?php
	$useragent=$_SERVER['HTTP_USER_AGENT'];
	$safari=false;
	$mobile=false;
	$safariorchrome = strpos($useragent, 'Safari') ? true : false;     // Browser is either Safari or Chrome (since Chrome User-Agent includes the word 'Safari')
	$chrome = strpos($useragent, 'Chrome') ? true : false;             // Browser is Chrome
	if($safariorchrome == true AND $chrome == false){ $safari = true; }     // Browser should be Safari, because there is no 'Chrome' in the User-Agent

	if(preg_match('/(android|bb\d+|meego).+mobile|avantgo|bada\/|blackberry|blazer|compal|elaine|fennec|hiptop|iemobile|ip(hone|od)|iris|kindle|lge |maemo|midp|mmp|netfront|opera m(ob|in)i|palm( os)?|phone|p(ixi|re)\/|plucker|pocket|psp|series(4|6)0|symbian|treo|up\.(browser|link)|vodafone|wap|windows (ce|phone)|xda|xiino/i',$useragent)||preg_match('/1207|6310|6590|3gso|4thp|50[1-6]i|770s|802s|a wa|abac|ac(er|oo|s\-)|ai(ko|rn)|al(av|ca|co)|amoi|an(ex|ny|yw)|aptu|ar(ch|go)|as(te|us)|attw|au(di|\-m|r |s )|avan|be(ck|ll|nq)|bi(lb|rd)|bl(ac|az)|br(e|v)w|bumb|bw\-(n|u)|c55\/|capi|ccwa|cdm\-|cell|chtm|cldc|cmd\-|co(mp|nd)|craw|da(it|ll|ng)|dbte|dc\-s|devi|dica|dmob|do(c|p)o|ds(12|\-d)|el(49|ai)|em(l2|ul)|er(ic|k0)|esl8|ez([4-7]0|os|wa|ze)|fetc|fly(\-|_)|g1 u|g560|gene|gf\-5|g\-mo|go(\.w|od)|gr(ad|un)|haie|hcit|hd\-(m|p|t)|hei\-|hi(pt|ta)|hp( i|ip)|hs\-c|ht(c(\-| |_|a|g|p|s|t)|tp)|hu(aw|tc)|i\-(20|go|ma)|i230|iac( |\-|\/)|ibro|idea|ig01|ikom|im1k|inno|ipaq|iris|ja(t|v)a|jbro|jemu|jigs|kddi|keji|kgt( |\/)|klon|kpt |kwc\-|kyo(c|k)|le(no|xi)|lg( g|\/(k|l|u)|50|54|\-[a-w])|libw|lynx|m1\-w|m3ga|m50\/|ma(te|ui|xo)|mc(01|21|ca)|m\-cr|me(rc|ri)|mi(o8|oa|ts)|mmef|mo(01|02|bi|de|do|t(\-| |o|v)|zz)|mt(50|p1|v )|mwbp|mywa|n10[0-2]|n20[2-3]|n30(0|2)|n50(0|2|5)|n7(0(0|1)|10)|ne((c|m)\-|on|tf|wf|wg|wt)|nok(6|i)|nzph|o2im|op(ti|wv)|oran|owg1|p800|pan(a|d|t)|pdxg|pg(13|\-([1-8]|c))|phil|pire|pl(ay|uc)|pn\-2|po(ck|rt|se)|prox|psio|pt\-g|qa\-a|qc(07|12|21|32|60|\-[2-7]|i\-)|qtek|r380|r600|raks|rim9|ro(ve|zo)|s55\/|sa(ge|ma|mm|ms|ny|va)|sc(01|h\-|oo|p\-)|sdk\/|se(c(\-|0|1)|47|mc|nd|ri)|sgh\-|shar|sie(\-|m)|sk\-0|sl(45|id)|sm(al|ar|b3|it|t5)|so(ft|ny)|sp(01|h\-|v\-|v )|sy(01|mb)|t2(18|50)|t6(00|10|18)|ta(gt|lk)|tcl\-|tdg\-|tel(i|m)|tim\-|t\-mo|to(pl|sh)|ts(70|m\-|m3|m5)|tx\-9|up(\.b|g1|si)|utst|v400|v750|veri|vi(rg|te)|vk(40|5[0-3]|\-v)|vm40|voda|vulc|vx(52|53|60|61|70|80|81|83|85|98)|w3c(\-| )|webc|whit|wi(g |nc|nw)|wmlb|wonu|x700|yas\-|your|zeto|zte\-/i',substr($useragent,0,4))){
		$mobile=true;
	}

	
?>

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
				max-width: 100%;
				margin:0;
				padding:0 0 20px 0;
				background-color:#006600;
				overflow-x:hidden;
				font-family: 'Open Sans', sans-serif;
			}
			.top *{
				position:absolute;
				z-index:5;
			}
			#main{
				width:100%;
				position:absolute;
				margin-top:-200px;
			}
			.vjs-control-bar{
				position:relative;
			}
			div.video-js{
				margin:auto;
				z-index:5;
				overflow:hidden;
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
				margin-left: auto;
				margin-right: auto;
				width:70%;
				transform: translateX(50%);
			}
			#logo{
				right:0;
				width:5%;
				margin:15px 15px 0 0;
			}
			.clear{
				clear:both;
			}
			.bottom{
				position:absolute;
				width:800px;
				margin:450px auto 20px auto;
				z-index:6;
			}
			.share{
				display:inline-block;
				font-size:1.8em;
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
			div.internet-explorer-worthy{
				text-align:center;
				margin:auto;
			}
			p.nospaceforpotatoes{
				margin:10px 0 0 0;
				color:#fff;
			}
			#palette_video_html5_api{
				overflow:hidden;
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
			<video id="palette_video" poster="img/thumbnail.png" preload="auto"
				class="video-js vjs-default-skin" controls data-setup="{}" width="800" height="450">
	 			<!--<source src="vid/openhouse.mp4" type="video/mp4">-->
	 			<?php
	 				if($mobile||$safari) echo '<source src="vid/teaser.mp4" type="video/mp4">';
	 				else echo '<source src="vid/openhouse.webm" type="video/webm">';
	 			?>
			</video>
			<?php
	 				if($mobile||$safari) echo 'This video uses experimental technology, to experience its glory, please a desktop build of Chrome';
	 		?>
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
			var vidHeight = 450;
			var vidWidth = 800;


			var myPlayer; //videoJS player

			videojs.options.flash.swf = "video-js.swf";

			videojs("palette_video").ready(function(){
				myPlayer = this;
				myPlayer.play();
			});

			var jQueryVideo = $('#palette_video_html5_api'); //jQuery object
			var video = jQueryVideo[0]; //DOM object

			$(document).ready(function(){
				jQueryVideo.width(<?php echo $safari||$mobile?"vidWidth":"vidWidth*2"; ?>);
				$(".bottom").css('margin-left',($(window).width()-vidWidth + 10)/2 + 'px');
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

			<?php
	 				if(!$mobile&&!$safari) echo "
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
						});"
			?>

			$("#fb").click(function(){
				window.location.href = "https://www.facebook.com/sharer/sharer.php?u=http://rafflespalette.com";
			});

			$("#twitter").click(function(){
				window.location.href = "http://twitter.com/share?text=Experience the Raffles Palette&url=http://rafflespalette.com&hashtags=rafflespalette";
			});

			$("#banner").click(function(){
				window.location.href = "https://www.facebook.com/rafflespalette";
			});

			$("#logo").click(function(){
				window.location.href = "http://www.ri.edu.sg";
			});

			$(".internet-explorer-worthy>img").click(function(){
				var feelingLucky = getRandomInt(1,100);
				if(feelingLucky == 7){
					window.location.href = "http://thenextweb.com/entrepreneur/2012/04/22/before-naming-your-startup-read-this/";
				} else if (feelingLucky == 8){
					window.location.href = "http://en.wikipedia.org/wiki/Bad!_Bossa_Nova";
				} else {
					window.location.href = "http://www.novafilmstudios.com/";
				}
			});

			function getRandomInt(min, max) {
 				return Math.floor(Math.random() * (max - min + 1)) + min;
			}

			$(window).scroll(function(){
				$(window).scrollLeft(0); /* you idiot */
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