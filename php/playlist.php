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
           
			<div class="article">
                <img src="../img/img3.jpg" width="100%" />
                <h2>Creer playlist</h2>
                <a class="read_more" href="./php/album.php">Accéder</a>
            </div><!-- .article -->		   
            
    	</div><!-- #articles -->
		<form>
			<input type="button" value="Retour" onclick="history.go(-1)">
		</form>
        
    </div><!-- #page -->
	
</body>
</html>
