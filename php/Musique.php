<?php
	include "./php/include/headerphp.php";
?>
<body>
	<?php
		include "./php/include/menuphp.php";
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
			include("./php/connexion.php");
			$link = connection();
			$query_utilisateur= 'SELECT * FROM  album ';
			$resultat_utilisateur=mysql_query($query_utilisateur) or die ('ECHEC try again : '. mysql_error());	
			while ($row = mysql_fetch_array($resultat_utilisateur, MYSQL_ASSOC) )
				{
					
					echo "<div class='article'>";
					echo "<img src='./img/img1.jpg' width='100%' />";
					echo "<h2>";
					echo $row['Nom_Album'];
					echo "</h2>";
					echo "<a class='read_more' href='#'>Accéder</a>";
					echo "</div>";
					
				}
		?>
            
    	</div><!-- #articles -->
		
        
    </div><!-- #page -->
	
</body>
</html>
