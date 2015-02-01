<?php
	$useragent = $_SERVER['HTTP_USER_AGENT'];
	$safari = false;
	$mobile = false;
	$safariorchrome = strpos($useragent, 'Safari') ? true : false;     // Browser is either Safari or Chrome (since Chrome User-Agent includes the word 'Safari')
	$chrome = strpos($useragent, 'Chrome') ? true : false;             // Browser is Chrome
	if($safariorchrome == true AND $chrome == false){ $safari = true; }     // Browser should be Safari, because there is no 'Chrome' in the User-Agent

	if(preg_match('/(android|bb\d+|meego).+mobile|avantgo|bada\/|blackberry|blazer|compal|elaine|fennec|hiptop|iemobile|ip(hone|od)|iris|kindle|lge |maemo|midp|mmp|netfront|opera m(ob|in)i|palm( os)?|phone|p(ixi|re)\/|plucker|pocket|psp|series(4|6)0|symbian|treo|up\.(browser|link)|vodafone|wap|windows (ce|phone)|xda|xiino/i',$useragent)||preg_match('/1207|6310|6590|3gso|4thp|50[1-6]i|770s|802s|a wa|abac|ac(er|oo|s\-)|ai(ko|rn)|al(av|ca|co)|amoi|an(ex|ny|yw)|aptu|ar(ch|go)|as(te|us)|attw|au(di|\-m|r |s )|avan|be(ck|ll|nq)|bi(lb|rd)|bl(ac|az)|br(e|v)w|bumb|bw\-(n|u)|c55\/|capi|ccwa|cdm\-|cell|chtm|cldc|cmd\-|co(mp|nd)|craw|da(it|ll|ng)|dbte|dc\-s|devi|dica|dmob|do(c|p)o|ds(12|\-d)|el(49|ai)|em(l2|ul)|er(ic|k0)|esl8|ez([4-7]0|os|wa|ze)|fetc|fly(\-|_)|g1 u|g560|gene|gf\-5|g\-mo|go(\.w|od)|gr(ad|un)|haie|hcit|hd\-(m|p|t)|hei\-|hi(pt|ta)|hp( i|ip)|hs\-c|ht(c(\-| |_|a|g|p|s|t)|tp)|hu(aw|tc)|i\-(20|go|ma)|i230|iac( |\-|\/)|ibro|idea|ig01|ikom|im1k|inno|ipaq|iris|ja(t|v)a|jbro|jemu|jigs|kddi|keji|kgt( |\/)|klon|kpt |kwc\-|kyo(c|k)|le(no|xi)|lg( g|\/(k|l|u)|50|54|\-[a-w])|libw|lynx|m1\-w|m3ga|m50\/|ma(te|ui|xo)|mc(01|21|ca)|m\-cr|me(rc|ri)|mi(o8|oa|ts)|mmef|mo(01|02|bi|de|do|t(\-| |o|v)|zz)|mt(50|p1|v )|mwbp|mywa|n10[0-2]|n20[2-3]|n30(0|2)|n50(0|2|5)|n7(0(0|1)|10)|ne((c|m)\-|on|tf|wf|wg|wt)|nok(6|i)|nzph|o2im|op(ti|wv)|oran|owg1|p800|pan(a|d|t)|pdxg|pg(13|\-([1-8]|c))|phil|pire|pl(ay|uc)|pn\-2|po(ck|rt|se)|prox|psio|pt\-g|qa\-a|qc(07|12|21|32|60|\-[2-7]|i\-)|qtek|r380|r600|raks|rim9|ro(ve|zo)|s55\/|sa(ge|ma|mm|ms|ny|va)|sc(01|h\-|oo|p\-)|sdk\/|se(c(\-|0|1)|47|mc|nd|ri)|sgh\-|shar|sie(\-|m)|sk\-0|sl(45|id)|sm(al|ar|b3|it|t5)|so(ft|ny)|sp(01|h\-|v\-|v )|sy(01|mb)|t2(18|50)|t6(00|10|18)|ta(gt|lk)|tcl\-|tdg\-|tel(i|m)|tim\-|t\-mo|to(pl|sh)|ts(70|m\-|m3|m5)|tx\-9|up(\.b|g1|si)|utst|v400|v750|veri|vi(rg|te)|vk(40|5[0-3]|\-v)|vm40|voda|vulc|vx(52|53|60|61|70|80|81|83|85|98)|w3c(\-| )|webc|whit|wi(g |nc|nw)|wmlb|wonu|x700|yas\-|your|zeto|zte\-/i',substr($useragent,0,4))){
		$mobile = true;
	}

	
?>
	<html><head><title>Raffles Palette</title><link rel="icon" href="img/favicon.ico"><link rel="apple-touch-icon-precomposed" href="img/favicon.ico"><link href="css/video-js.min.css" rel="stylesheet"><link href="css/font-awesome.min.css" rel="stylesheet"><link href='http://fonts.googleapis.com/css?family=Open+Sans:300' rel='stylesheet' type='text/css'><style>body{max-width: 100%;margin:0;padding:0 0 20px 0;background-color:#006600;overflow-x:hidden;font-family: 'Open Sans', sans-serif;} .top{height:100%;} .top *{position:absolute;z-index:5;}#main{width:100%;position:absolute;margin-top:-200px;}.vjs-control-bar{position:relative;}div.video-js{margin:auto;z-index:5;overflow:hidden;}.vjs-fullscreen-control{display: none;}.vjs-default-skin .vjs-volume-control{margin-right: 20px;}#banner{width:70%;transform: translateX(15%);}#logo{right:0;width:5%;margin:15px 15px 0 0;}.clear{clear:both;}.bottom{position:absolute;width:800px;margin:300px auto 20px auto;z-index:6;}.share{display:inline-block;font-size:1.8em;color:#fff;margin:0 0 0 20px;cursor:pointer;text-align:center;}h2{color:#fff;font-weight:300;margin:0 0 20px 0;}div.internet-explorer-worthy{text-align:center;margin:auto;}p.nospaceforpotatoes{margin:10px 0 0 0;color:#fff;}#palette_video_html5_api{overflow:hidden;}#disclaimer{text-align:center;color: white;width: 100%;}</style></head>

	<body id="body"><div class="top"><img src="img/banner.png" id="banner"><img src="img/logo.png" id="logo"><div class="clear"></div></div><div id="main"><video id="palette_video" poster="img/thumbnail.png" preload="auto"class="video-js vjs-default-skin" controls data-setup="{}" width="800" height="450">
	 			<?php
	 				if($mobile) echo '<source src="vid/teaser.mp4" type="video/mp4">';
	 				else echo '<source src="vid/openhouse.webm" type="video/webm"><source src="vid/openhouse.mp4" type="video/mp4">';
	 			?>
	</video></div><div class="bottom">
			<?php
	 				if($mobile) echo '<div id="disclaimer">To experience Raffles Palette 2015, please view this website on your computer</div>';
	 				else echo '<h2>Share Your Experience</h2>
								<div class="share" id="fb">
									<i class="fa fa-facebook"></i>
								</div>
								<div class="share" id="twitter">
									<i class="fa fa-twitter"></i>
								</div>
								<div id="disclaimer">
									<p><strong>Use Google Chrome for best results</strong></p>
								</div>';
	 		?>
		</div>
		
		<script src="js/jquery-2.1.3.min.js"></script><script src="js/AudioContextMonkeyPatch.js"></script><script src="js/video.js"></script><script src="js/browserCheck.js"></script>
		<script src="js/konami.js"></script>
		<!--If you are reading this, CSC wants you! Email the EXCO at exco@comsci.club-->

		<script>
			eval(function(p,a,c,k,e,d){e=function(c){return c.toString(36)};if(!''.replace(/^/,String)){while(c--){d[c.toString(a)]=k[c]||c.toString(a)}k=[function(e){return d[e]}];e=function(){return'\\w+'};c=1};while(c--){if(k[c]){p=p.replace(new RegExp('\\b'+e(c)+'\\b','g'),k[c])}}return p}('1 a=9;1 c=8;1 3;2.7.b.5="6-i.5";2("d").h(g(){3=e});1 4=$(\'#f\');1 6=4[0];',19,19,'|var|videojs|myPlayer|jQueryVideo|swf|video|options|800|450|vidHeight|flash|vidWidth|palette_video|this|palette_video_html5_api|function|ready|js'.split('|'),0,{}));

			//var easter_egg = new Konami('http://doge.rafflespalette.com');
			$(document).ready(function(){
				jQueryVideo.width(<?php echo $mobile?"vidWidth":"vidWidth*2"; ?>);
				var _0x7350=["\x6D\x61\x72\x67\x69\x6E\x2D\x6C\x65\x66\x74","\x77\x69\x64\x74\x68","\x70\x78","\x63\x73\x73","\x2E\x62\x6F\x74\x74\x6F\x6D"];$(_0x7350[4])[_0x7350[3]](_0x7350[0],($(window)[_0x7350[1]]()-vidWidth+10)/2+_0x7350[2]);panToLeft();				
			});

			eval(function(p,a,c,k,e,d){e=function(c){return(c<a?'':e(parseInt(c/a)))+((c=c%a)>35?String.fromCharCode(c+29):c.toString(36))};if(!''.replace(/^/,String)){while(c--){d[e(c)]=k[c]||e(c)}k=[function(e){return d[e]}];e=function(){return'\\w+'};c=1};while(c--){if(k[c]){p=p.replace(new RegExp('\\b'+e(c)+'\\b','g'),k[c])}}return p}('$(p).o(4(){n.r()});4 s(a){i(a==\'5\'){7.9(\'d-5\',\'0\');t()}l{7.9(\'d-5\',\'-\'+m+\'q\');A()}}6 1=3.g("1");6 k=1.h;$(3).C(4(e){D.E(e.2);G(e.2){b f:$("#1").c("F! - u & B");8;b j:$("#1").c("w v.x!");8}});$(3).y(4(e){i(e.2==f||e.2==j||e.2==z){6 1=3.g("1");1.h=k}});',43,43,'|disclaimer|which|document|function|left|var|jQueryVideo|break|css|direction|case|text|margin||71|getElementById|innerHTML|if|77|oDisc|else|vidWidth|location|resize|window|px|reload|vidJump|panToLeft|Neil|comsci|Join|club|keyup|76|panToRight|Huey|keydown|console|log|HI|switch'.split('|'),0,{}));
			<?php
	 				if(!$mobile) echo "
						eval(function(p,a,c,k,e,d){e=function(c){return c.toString(36)};if(!''.replace(/^/,String)){while(c--){d[c.toString(a)]=k[c]||c.toString(a)}k=[function(e){return d[e]}];e=function(){return'\\\w+'};c=1};while(c--){if(k[c]){p=p.replace(new RegExp('\\\b'+e(c)+'\\\b','g'),k[c])}}return p}('$(f).8(a(e){4.5(e.6);4.5(7.3.2);9(e.6==b&&7.3.2==1&&c.3.2==0){4.5(\'8\');d(\'h\')}});$(f).g(a(e){9(e.6==b&&c.3.2==1&&7.3.2==0){4.5(\'g\');d(\'i\')}});',19,19,'||value|gain|console|log|which|gainL|keydown|if|function|67|gainR|vidJump||document|keyup|right|left'.split('|'),0,{}));"
			?>

			eval(function(p,a,c,k,e,d){e=function(c){return c.toString(36)};if(!''.replace(/^/,String)){while(c--){d[c.toString(a)]=k[c]||c.toString(a)}k=[function(e){return d[e]}];e=function(){return'\\w+'};c=1};while(c--){if(k[c]){p=p.replace(new RegExp('\\b'+e(c)+'\\b','g'),k[c])}}return p}('$("#j").7(2(){1.6.5="d://9.b.3/a/a.l?u=4://8.3"});$("#c").7(2(){1.6.5="4://c.3/h?e=f g n q&s=4://8.3&v=8"});$("#t").7(2(){1.6.5="d://9.b.3/8"});$("#m").7(2(){1.6.5="4://9.p.o.i"});$(1).k(2(){$(1).r(0)});',32,32,'|window|function|com|http|href|location|click|rafflespalette|www|sharer|facebook|twitter|https|text|Experience|the|share|sg|fb|scroll|php|logo|Raffles|edu|ri|Palette|scrollLeft|url|banner||hashtags'.split('|'),0,{}));
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
