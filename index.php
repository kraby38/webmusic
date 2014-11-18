<?php
	include "./php/include/header.php";
?>
<body>
	<?php
		include "./php/include/menu.php";
	?>
    <div id="page">
    	<a id="logo">
        	<img src="img/imgcool.gif" alt="Logo Tuto menu latéral jQuery" title="Logo Tuto menu latéral jQuery" class="title"/>
        </a>
        <a href="javascript:;" class="menu_btn"></a>       
        <div style="height:30px"></div>
        <!-- debut des articles -->
        <div id="articles">
            <div class="article">
                <img src="img/img1.jpg" width="100%" />
                <h2>Artiste</h2>
                <a class="read_more" href="./php/auteur.php">Accéder</a>
            </div><!-- .article -->
            
            <div class="article">
                <img src="img/img3.jpg" width="100%" />
                <h2>Album</h2>
                <a class="read_more" href="./php/album.php">Accéder</a>
            </div><!-- .article -->
            
            <div class="article">
                <img src="img/img4.jpg" width="100%" />
                <h2>Playlist</h2>
                <a class="read_more" href="./php/playlist.php">Accéder</a>
            </div><!-- .article -->
			
			<div class="article">
                <img src="img/img2.jpg" width="100%" />
                <h2>Lecteur</h2>
                <a class="read_more" href="./php/player.php">Accéder</a>
            </div><!-- .article -->
			
			 <div class="article">
                <img src="img/img3.jpg" width="100%" />
                <h2>Importer Musique</h2>
                <a class="read_more" href="./php/album.php">Accéder</a>
            </div><!-- .article -->
			
			 
            
            <div style="clear:both"></div>
            
    	</div><!-- #articles -->
		
        
    </div><!-- #page -->
	
</body>
</html>
