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
	<!DOCTYPE HTML><html><head><title>Raffles Palette</title><link rel="icon" href="img/favicon.ico"><link rel="apple-touch-icon-precomposed" href="img/favicon.ico"><link href="css/video-js.min.css" rel="stylesheet"><link href="css/font-awesome.min.css" rel="stylesheet"><link href='http://fonts.googleapis.com/css?family=Open+Sans:300' rel='stylesheet' type='text/css'><style>body{max-width: 100%;margin:0;padding:0 0 20px 0;background-color:#006600;overflow-x:hidden;font-family: 'Open Sans', sans-serif;} .top{height:40vw;} .top *{position:absolute;z-index:5;}#main{width:100%;position:absolute;margin-top:-200px;}.vjs-control-bar{position:relative;}div.video-js{margin:auto;z-index:5;overflow:hidden;}.vjs-fullscreen-control{display: none;}.vjs-default-skin .vjs-volume-control{margin-right: 20px;}#banner{width:70%;transform: translateX(15%);}#logo{right:0;width:5%;margin:15px 15px 0 0;}.clear{clear:both;}.bottom{position:absolute;width:800px;margin:300px auto 20px auto;z-index:6;}.share{display:inline-block;font-size:1.8em;color:#fff;margin:0 0 0 20px;cursor:pointer;text-align:center;}h2{color:#fff;font-weight:300;margin:0 0 20px 0;}div.internet-explorer-worthy{text-align:center;margin:auto;}p.nospaceforpotatoes{margin:10px 0 0 0;color:#fff;}#palette_video_html5_api{overflow:hidden;}#disclaimer{text-align:center;color: white;width: 100%;}</style><script>   (function(i,s,o,g,r,a,m){i['GoogleAnalyticsObject']=r;i[r]=i[r]||function(){   (i[r].q=i[r].q||[]).push(arguments)},i[r].l=1*new Date();a=s.createElement(o),   m=s.getElementsByTagName(o)[0];a.async=1;a.src=g;m.parentNode.insertBefore(a,m)   })(window,document,'script','//www.google-analytics.com/analytics.js','ga');    ga('create', 'UA-57000907-2', 'auto');   ga('send', 'pageview');  </script></head>

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
			var _0xf783=["\x73\x77\x66","\x66\x6C\x61\x73\x68","\x6F\x70\x74\x69\x6F\x6E\x73","\x76\x69\x64\x65\x6F\x2D\x6A\x73\x2E\x73\x77\x66","\x72\x65\x61\x64\x79","\x70\x61\x6C\x65\x74\x74\x65\x5F\x76\x69\x64\x65\x6F","\x23\x70\x61\x6C\x65\x74\x74\x65\x5F\x76\x69\x64\x65\x6F\x5F\x68\x74\x6D\x6C\x35\x5F\x61\x70\x69"];var vidHeight=450;var vidWidth=800;var myPlayer;videojs[_0xf783[2]][_0xf783[1]][_0xf783[0]]=_0xf783[3];videojs(_0xf783[5])[_0xf783[4]](function (){myPlayer=this;} );var jQueryVideo=$(_0xf783[6]);var video=jQueryVideo[0];

			//var easter_egg = new Konami('http://doge.rafflespalette.com');
			$(document).ready(function(){
				jQueryVideo.width(<?php echo $mobile?"vidWidth":"vidWidth*2"; ?>);
				var _0x7350=["\x6D\x61\x72\x67\x69\x6E\x2D\x6C\x65\x66\x74","\x77\x69\x64\x74\x68","\x70\x78","\x63\x73\x73","\x2E\x62\x6F\x74\x74\x6F\x6D"];$(_0x7350[4])[_0x7350[3]](_0x7350[0],($(window)[_0x7350[1]]()-vidWidth+10)/2+_0x7350[2]);panToLeft();				
			});

			var _0x87f8=["\x72\x65\x6C\x6F\x61\x64","\x72\x65\x73\x69\x7A\x65","\x6C\x65\x66\x74","\x6D\x61\x72\x67\x69\x6E\x2D\x6C\x65\x66\x74","\x30","\x63\x73\x73","\x2D","\x70\x78","\x64\x69\x73\x63\x6C\x61\x69\x6D\x65\x72","\x67\x65\x74\x45\x6C\x65\x6D\x65\x6E\x74\x42\x79\x49\x64","\x69\x6E\x6E\x65\x72\x48\x54\x4D\x4C","\x77\x68\x69\x63\x68","\x6C\x6F\x67","\x48\x49\x21\x20\x2D\x20\x4E\x65\x69\x6C\x20\x26\x20\x48\x75\x65\x79","\x74\x65\x78\x74","\x23\x64\x69\x73\x63\x6C\x61\x69\x6D\x65\x72","\x4A\x6F\x69\x6E\x20\x63\x6F\x6D\x73\x63\x69\x2E\x63\x6C\x75\x62\x21","\x6B\x65\x79\x64\x6F\x77\x6E","\x6B\x65\x79\x75\x70"];$(window)[_0x87f8[1]](function (){location[_0x87f8[0]]();} );function vidJump(_0x6701x2){if(_0x6701x2==_0x87f8[2]){jQueryVideo[_0x87f8[5]](_0x87f8[3],_0x87f8[4]);panToLeft();} else {jQueryVideo[_0x87f8[5]](_0x87f8[3],_0x87f8[6]+vidWidth+_0x87f8[7]);panToRight();} ;} ;var disclaimer=document[_0x87f8[9]](_0x87f8[8]);var oDisc=disclaimer[_0x87f8[10]];$(document)[_0x87f8[17]](function (_0x6701x5){console[_0x87f8[12]](_0x6701x5[_0x87f8[11]]);switch(_0x6701x5[_0x87f8[11]]){case 71:$(_0x87f8[15])[_0x87f8[14]](_0x87f8[13]);break ;;case 77:$(_0x87f8[15])[_0x87f8[14]](_0x87f8[16]);break ;;} ;} );$(document)[_0x87f8[18]](function (_0x6701x5){if(_0x6701x5[_0x87f8[11]]==71||_0x6701x5[_0x87f8[11]]==77||_0x6701x5[_0x87f8[11]]==76){var disclaimer=document[_0x87f8[9]](_0x87f8[8]);disclaimer[_0x87f8[10]]=oDisc;} ;} );
			<?php
	 				if(!$mobile) echo '
						var _0x47de=["\x77\x68\x69\x63\x68","\x76\x61\x6C\x75\x65","\x67\x61\x69\x6E","\x72\x69\x67\x68\x74","\x6B\x65\x79\x64\x6F\x77\x6E","\x6C\x65\x66\x74","\x6B\x65\x79\x75\x70"];$(document)[_0x47de[4]](function (_0x3884x1){if(_0x3884x1[_0x47de[0]]==67&&gainL[_0x47de[2]][_0x47de[1]]==1&&gainR[_0x47de[2]][_0x47de[1]]==0){vidJump(_0x47de[3]);} ;} );$(document)[_0x47de[6]](function (_0x3884x1){if(_0x3884x1[_0x47de[0]]==67&&gainR[_0x47de[2]][_0x47de[1]]==1&&gainL[_0x47de[2]][_0x47de[1]]==0){vidJump(_0x47de[5]);} ;} );';
			?>

			var _0x39aa=["\x68\x72\x65\x66","\x6C\x6F\x63\x61\x74\x69\x6F\x6E","\x68\x74\x74\x70\x73\x3A\x2F\x2F\x77\x77\x77\x2E\x66\x61\x63\x65\x62\x6F\x6F\x6B\x2E\x63\x6F\x6D\x2F\x73\x68\x61\x72\x65\x72\x2F\x73\x68\x61\x72\x65\x72\x2E\x70\x68\x70\x3F\x75\x3D\x68\x74\x74\x70\x3A\x2F\x2F\x72\x61\x66\x66\x6C\x65\x73\x70\x61\x6C\x65\x74\x74\x65\x2E\x63\x6F\x6D","\x63\x6C\x69\x63\x6B","\x23\x66\x62","\x68\x74\x74\x70\x3A\x2F\x2F\x74\x77\x69\x74\x74\x65\x72\x2E\x63\x6F\x6D\x2F\x73\x68\x61\x72\x65\x3F\x74\x65\x78\x74\x3D\x45\x78\x70\x65\x72\x69\x65\x6E\x63\x65\x20\x74\x68\x65\x20\x52\x61\x66\x66\x6C\x65\x73\x20\x50\x61\x6C\x65\x74\x74\x65\x26\x75\x72\x6C\x3D\x68\x74\x74\x70\x3A\x2F\x2F\x72\x61\x66\x66\x6C\x65\x73\x70\x61\x6C\x65\x74\x74\x65\x2E\x63\x6F\x6D\x26\x68\x61\x73\x68\x74\x61\x67\x73\x3D\x72\x61\x66\x66\x6C\x65\x73\x70\x61\x6C\x65\x74\x74\x65","\x23\x74\x77\x69\x74\x74\x65\x72","\x68\x74\x74\x70\x73\x3A\x2F\x2F\x77\x77\x77\x2E\x66\x61\x63\x65\x62\x6F\x6F\x6B\x2E\x63\x6F\x6D\x2F\x72\x61\x66\x66\x6C\x65\x73\x70\x61\x6C\x65\x74\x74\x65","\x23\x62\x61\x6E\x6E\x65\x72","\x68\x74\x74\x70\x3A\x2F\x2F\x77\x77\x77\x2E\x72\x69\x2E\x65\x64\x75\x2E\x73\x67","\x23\x6C\x6F\x67\x6F","\x73\x63\x72\x6F\x6C\x6C\x4C\x65\x66\x74","\x73\x63\x72\x6F\x6C\x6C"];$(_0x39aa[4])[_0x39aa[3]](function (){window[_0x39aa[1]][_0x39aa[0]]=_0x39aa[2];} );$(_0x39aa[6])[_0x39aa[3]](function (){window[_0x39aa[1]][_0x39aa[0]]=_0x39aa[5];} );$(_0x39aa[8])[_0x39aa[3]](function (){window[_0x39aa[1]][_0x39aa[0]]=_0x39aa[7];} );$(_0x39aa[10])[_0x39aa[3]](function (){window[_0x39aa[1]][_0x39aa[0]]=_0x39aa[9];} );$(window)[_0x39aa[12]](function (){$(window)[_0x39aa[11]](0);} );
		</script>
		<script src="js/audioPanner.js"></script>
	</body>
</html>
