<!DOCTYPE html>
<head>
	<meta charset="utf-8" />
	<title>Lecteur</title>
	<meta name="viewport" content="width=device-width, initial-scale=1.0" />
	<!-- feuilles de styles -->
	<link type="text/css" href="../css/style.css" rel="stylesheet" media="screen" />
	<link href='http://fonts.googleapis.com/css?family=Open+Sans:400,800,700,600,300' rel='stylesheet' type='text/css'>
	<!-- scripts -->
	<script type="text/javascript" src="http://code.jquery.com/jquery-1.9.0.min.js"></script>
	<script type="text/javascript" src="../js/site.js"></script>
	<script type="text/javascript" src="../js/script1.js"></script>
	<!-- audio player script --> <!-- script du player audio -->       
		<title>DBM Web-Design - Player Audio JQuery</title> 
		<link rel="stylesheet" type="text/css" href="../css/jquery.jscrollpane.css" media="all" />
		<link rel="stylesheet" type="text/css" href="../css/html5audio.css" />
        
		<script type="text/javascript" src="../js/jquery-1.8.1.min.js"></script>
        <script type="text/javascript" src="../js/jquery.mousewheel.min.js"></script>
        <script type="text/javascript" src="../js/jquery.jscrollpane.min.js"></script>
        <script type="text/javascript" src="../js/soundmanager.js" ></script>
		<script type="text/javascript" src="../js/jquery.html5audio.min.js"></script>
        <script type="text/javascript" src="../js/jquery.apPlaylistManager.min.js"></script>
        <script type="text/javascript" src="../js/jquery.apTextScroller.min.js"></script>
        <script type="text/javascript">
			
			function audioPlayerSetupDone(){
				/* This will get called when component is ready to receive public function calls. */
				//console.log('audioPlayerSetupDone');
			}
			
			// SETTINGS
			var ap_settings = {
				/* activePlaylist: set active playlist that will be loaded on beginning (pass element 'id' attributte) */
				activePlaylist: 'playlist1',
				
				/* soundcloudApiKey: If you want to use SoundCloud music, register you own api key here for free: 
				'http://soundcloud.com/you/apps/new' and enter Client ID */
				soundcloudApiKey: '',

				/*defaultVolume: 0-1 (Irrelevant on ios mobile) */
				defaultVolume:0.5,
				/*autoPlay: true/false (false on mobile by default, important!) */
				autoPlay:true,
				/*randomPlay: true/false */
				randomPlay:false,
				/*loopingOn: true/false (loop on the end of the playlist) */
				loopingOn:true,
				
				/* addNumbersInPlaylist: true/false. Prepend numbers in playlist items. */
				addNumbersInPlaylist: true,
				
				/* useSongNameScroll: true/false. Use song name scrolling. */
				useSongNameScroll: true,
				/* scrollSpeed: speed of the scroll (number higher than zero). */
				scrollSpeed: 1,
				/* scrollSeparator: String to append between scrolling song name. */
				scrollSeparator: '&nbsp;&#42;&#42;&#42;&nbsp;',
				
				/* mediaTimeSeparator: String between current and total song time. */
				mediaTimeSeparator: '&nbsp;-&nbsp;',
				/* seekTooltipSeparator: String between current and total song position, for progress tooltip. */
				seekTooltipSeparator: '&nbsp;/&nbsp;',
				
				/* useRollovers: use button rollovers, true/false. */
				useRollovers:false,
				/* buttonsUrl: url of the buttons for normal and rollover state, so I dont hardcode them in jquery (rollover state is optional). */
				buttonsUrl: {prev: '../img/prev.png', prevOn: '../img/prev_on.png', 
						  	 next: '../img/next.png', nextOn: '../img/next_on.png', 
						 	 pause: '../img/pause.png', pauseOn: '../img/pause_on.png',
						 	 play: '../img/play.png', playOn: '../img/play_on.png',
						 	 volume: '../img/volume.png', volumeOn: '../img/volume_on.png', 
							 mute: '../img/mute.png', muteOn: '../img/mute_on.png', 
						  	 loop: '../img/loop.png', loopOn: '../img/loop_on.png',
						  	 shuffle: '../img/shuffle.png', shuffleOn: '../img/shuffle_on.png'}
			};
			
			//sound manager settings (http://www.schillmania.com/projects/soundmanager2/)
			soundManager.allowScriptAccess = 'always';
			soundManager.debugMode = false;
			soundManager.noSWFCache = true;
			soundManager.useConsole = false;
			soundManager.waitForWindowLoad = true;
			soundManager.url = 'swf/';//path to flash files
			soundManager.flashVersion = 9;
			soundManager.preferFlash = false; 
			soundManager.useHTML5Audio = true;
			
			//**********Start Delete this if you want to use just flash**********//
			var audio = document.createElement('audio'), mp3Support, oggSupport;
			if (audio.canPlayType) {
			   mp3Support = !!audio.canPlayType && "" != audio.canPlayType('audio/mpeg');
			   oggSupport = !!audio.canPlayType && "" != audio.canPlayType('audio/ogg; codecs="vorbis"');
			}else{
				//for IE<9
				mp3Support = true;
				oggSupport = false;
			}
			//console.log('mp3Support = ', mp3Support, ' , oggSupport = ', oggSupport);
			
			/*
			FF - false, true
			OP - false, true
			
			IE9 - true, false 
			SF - true, false 
			
			CH - true, true
			*/
		
		    soundManager.audioFormats = {
			  'mp3': {
				'type': ['audio/mpeg; codecs="mp3"', 'audio/mpeg', 'audio/mp3', 'audio/MPA', 'audio/mpa-robust'],
				'required': mp3Support
			  },
			  'mp4': {
				'related': ['aac','m4a'],
				'type': ['audio/mp4; codecs="mp4a.40.2"', 'audio/aac', 'audio/x-m4a', 'audio/MP4A-LATM', 'audio/mpeg4-generic'],
				'required': false
			  },
			  'ogg': {
				'type': ['audio/ogg; codecs=vorbis'],
				'required': oggSupport
			  },
			  'wav': {
				'type': ['audio/wav; codecs="1"', 'audio/wav', 'audio/wave', 'audio/x-wav'],
				'required': false
			  }
			};
			//**********End Delete this if you want to use just flash**********//
			
			jQuery(document).ready(function() {
				var $ = jQuery.noConflict();
			    $.html5audio('#componentWrapper', ap_settings, 'sound_id1');
			    ap_settings = null;
    	    });
		
        </script>
        <!-- End of audio player script --> <!-- Fin du script du player audio -->
</head>