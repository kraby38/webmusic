<?php
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
			$query_utilisateur= 'SELECT * FROM  api_artiste ';
			
			$resultat_utilisateur=mysqli_query($link,$query_utilisateur) or die ('ECHEC try again : '. mysql_error());	
			
			while ($row = mysqli_fetch_assoc($resultat_utilisateur) )
				{
					echo "<div class='article'>
							<img src='../img/img1.jpg' width='100%' />
							<h2>
								".$row['Nom_Artiste']."
							</h2>
							<form method='post' action='./artisteMusiqueAlbum.php'> 
								<input type='hidden' name='Artiste' value='".$row['Id_Artiste']."'>
									<button class='read_more' type='submit'>Accéder</button>								
								</input>
							</form>
						</div>";					
				}
		?>
		<form>
			<input type="button" value="Retour" onclick="history.go(-1)">
		</form>	
            
    	</div><!-- #articles -->
		
        
    </div><!-- #page -->
	
</body>
</html>
