<!DOCTYPE HTML>
<html>
	<head>
		<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
        
        <!-- ############## HEAD CODE ############## -->
        <!-- audio player script --> <!-- script du player audio -->       
		<title>DBM Web-Design - Player Audio JQuery</title> 
		<link rel="stylesheet" type="text/css" href="css/jquery.jscrollpane.css" media="all" />
		<link rel="stylesheet" type="text/css" href="css/html5audio.css" />
        
		<script type="text/javascript" src="js/jquery-1.8.1.min.js"></script>
        <script type="text/javascript" src="js/jquery.mousewheel.min.js"></script>
        <script type="text/javascript" src="js/jquery.jscrollpane.min.js"></script>
        <script type="text/javascript" src="js/soundmanager.js" ></script>
		<script type="text/javascript" src="js/jquery.html5audio.min.js"></script>
        <script type="text/javascript" src="js/jquery.apPlaylistManager.min.js"></script>
        <script type="text/javascript" src="js/jquery.apTextScroller.min.js"></script>
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
				buttonsUrl: {prev: 'img/prev.png', prevOn: 'img/prev_on.png', 
						  	 next: 'img/next.png', nextOn: 'img/next_on.png', 
						 	 pause: 'img/pause.png', pauseOn: 'img/pause_on.png',
						 	 play: 'img/play.png', playOn: 'img/play_on.png',
						 	 volume: 'img/volume.png', volumeOn: 'img/volume_on.png', 
							 mute: 'img/mute.png', muteOn: 'img/mute_on.png', 
						  	 loop: 'img/loop.png', loopOn: 'img/loop_on.png',
						  	 shuffle: 'img/shuffle.png', shuffleOn: 'img/shuffle_on.png'}
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
         <!-- ############## END HEAD CODE ############## -->
	</head>
    
    
	<body>  
    <!-- ############## BODY CODE ############## -->
<!-- wrapper for the whole component --> <!-- conteneur du player audio -->
   	<div id="componentWrapper">
        
		<div class="playerHolder">
                 
                  <div class="player_controls">
                  	  <!-- previous -->
                      <div class="controls_prev"><img src='img/prev.png' width='40' height='40' alt='controls_prev'/></div>
                      <!-- pause/play -->
                      <div class="controls_toggle"><img src='img/play.png' width='50' height='50' alt='controls_toggle'/></div>
                      <!-- next -->
                      <div class="controls_next"><img src='img/next.png' width='40' height='40' alt='controls_next'/></div>
                      
                 	  <!-- volume -->
                      <div class="player_volume"><img src='img/volume.png' width='33' height='33' alt='player_volume'/></div>
                      <div class="volume_seekbar">
                         <div class="volume_bg"></div>
                         <div class="volume_level"></div>
                      </div>
                      
                      <!-- loop -->
                      <div class="player_loop"><img src='img/loop_on.png' width='33' height='33' alt='player_loop'/></div>
                      <!-- shuffle -->
                      <div class="player_shuffle"><img src='img/shuffle.png' width='33' height='33' alt='player_shuffle'/></div>
                  </div>
                  
                  <!-- progress -->
                  <div class="player_progress">
                      <div class="progress_bg"></div>
                      <div class="load_progress"></div>
                      <div class="play_progress"></div>
                  </div>
                 
                  <!-- song name -->
                  <div class="player_mediaName_Mask">
                 	  <div class="player_mediaName">Artist Name - Artist Title</div>
                  </div>
                  
                  <!-- song time -->
                  <div class="player_mediaTime">
                  	  <!-- current time and total time are separated so you can change the design if needed. -->
                  	  <div class="player_mediaTime_current">0:00&nbsp;-&nbsp;</div><div class="player_mediaTime_total">0:00</div>
                  </div>
                  
                  <!-- volume tooltip -->
                  <div class="player_volume_tooltip">
                      <div class="player_volume_tooltip_value">0</div>
                  </div>
                  
                  <!-- progress tooltip -->
                  <div class="player_progress_tooltip">
                    <div class="player_progress_tooltip_value">0:00&nbsp;/&nbsp;0:00</div>
                  </div>
             
		</div>
              
		<div class="playlistHolder">
                 <div class="componentPlaylist">
                	 <!-- playlist_inner: container for scroll -->
                     <div class="playlist_inner">
                     
                     	 <!-- List of playlists. NO EXTENSION for music file names! -->
                     
                         <!-- Playlist -->
                         <ul id='playlist1' data-type='local'>
                             <li class= "playlistItem" data-path="audio/01-Latasha_Lee-Get_Away" ><a class="playlistNonSelected" href='#'>Latasha Lee - Get Away</a></li>
                             <li class= "playlistItem" data-path="audio/02-Fall_Walk_Run-You_Are_You" ><a class="playlistNonSelected" href='#'>Fall Walk Run - You Are You</a></li>
                             <li class= "playlistItem" data-path="audio/03-Cavashawn-Out_Of_My_Mind" ><a class="playlistNonSelected" href='#'>Cavashawn - Out Of My Mind</a></li>
                             <li class= "playlistItem" data-path="audio/04-Cavashawn-Just_Because" ><a class="playlistNonSelected" href='#'>Cavashawn - Just Because</a></li>
                             <li class= "playlistItem" data-path="audio/05-Mari_Huertas_Millan-Contigo" ><a class="playlistNonSelected" href='#'>Mari Huertas Millan - Contigo</a></li>
                             <li class= "playlistItem" data-path="audio/06-Mari_Huertas_Millan-Solo_es_tiempo" ><a class="playlistNonSelected" href='#'>Mari Huertas Millan - Solo es tiempo</a></li>
                             <li class= "playlistItem" data-path="audio/07-Mari_Huertas_Millan-Dime" ><a class="playlistNonSelected" href='#'>Mari Huertas Millan - Dime</a></li>  
                             <li class= "playlistItem" data-path="audio/08-Mari_Huertas_Millan-Perdida_en_tu_mirada" ><a class="playlistNonSelected" href='#'>Mari Huertas Millan - Perdida en tu mirada</a></li>
                             <li class= "playlistItem" data-path="audio/09-Mari_Huertas_Millan-Vamos_con_el_sol" ><a class="playlistNonSelected" href='#'>Mari Huertas Millan - Vamos con el sol</a></li>
                             <li class= "playlistItem" data-path="audio/10-Mari_Huertas_Millan-Perseguir_un_sueo" ><a class="playlistNonSelected" href='#'>Mari Huertas Millan - Perseguir un sueo</a></li>  
                         </ul>
                         
                       
                     </div>
                 </div>
		</div>
             
             <!-- for parsing podcast feeds -->
             <div class="feedParser"></div>
         <!-- font calculations -->
       		 <div class="fontMeasure"></div>
    	</div>
       <!-- End of wrapper for the whole component --> <!-- fin du conteneur du player audio -->
       <!-- ############## END BODY CODE ############## -->
	</body>
</html>
