﻿<?php
	include "./include/headerphp.php";
?>
<body>
	<?php
		include "./include/menuphp.php";
	?>
    <div id="page">
    	<a id="logo">
        	<img src="../img/imgcool.gif" alt="Logo Tuto menu latéral jQuery" title="Logo Tuto menu latéral jQuery" class="title"/>
        </a>
        <a href="javascript:;" class="menu_btn"></a>       
        <div style="height:30px"></div>
        <!-- debut des articles -->
        <div id="articles">
            <?php			
			include("./include/connexion.php");
			$link = connection();
			$query_utilisateur= "SELECT * FROM  Vuealbart WHERE (Id_Artiste =".$_POST['Artiste'].")";
			$query_album = 'SELECT COUNT(*) AS NbAlbum FROM api_album';
			$resultat_utilisateur=mysqli_query($link, $query_utilisateur) or die ('ECHEC try again : '. mysql_error());	
			$resultat_album=mysqli_query($link,$query_album) or die ('ECHEC try again 2: '. mysql_error());	
			$NbAlbumArtiste = mysqli_fetch_array($resultat_album);
			while ($row = mysqli_fetch_assoc($resultat_utilisateur) )
				{				
						echo "<div class='article'>";
						echo "<img src='../img/img1.jpg' width='100%' />";
						echo "<h2>";
						echo $row['Nom_Album'];
						echo "</h2>";
						echo "<form method='post' action='player.php'>"; 
						echo "	<a class='read_more' href='player.php'>Accéder</a>";
						echo "	<input type='hidden' name='Artiste' value='";
						echo $row['Nom_Album'];
						echo "'/>" ;
						echo "</form>";
						echo "</div>";
				}
		?>
            
    	</div><!-- #articles -->
		
        
    </div><!-- #page -->
	<form>
			<input type="button" value="Retour" onclick="history.go(-1)">
		</form>
</body>
</html>
