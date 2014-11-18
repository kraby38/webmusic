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
			$query_utilisateur= 'SELECT * FROM  api_album ';
			$resultat_utilisateur=mysqli_query($link,$query_utilisateur) or die ('ECHEC try again : '. mysql_error());	
			while ($row = mysqli_fetch_assoc($resultat_utilisateur) )
				{					
					echo "<div class='article'>";
					echo "<img src='../img/img1.jpg' width='100%' />";
					echo "<h2>";
					echo $row['Nom_Album'];
					echo "</h2>";
					echo "<a class='read_more' href='#'>Accéder</a>";
					echo "</div>";					
				}
		?>
            
    	</div><!-- #articles -->
		
        <form>
			<input type="button" value="Retour" onclick="history.go(-1)">
		</form>
    </div><!-- #page -->
	
</body>
</html>
