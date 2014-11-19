<?php
	include "./include/headerphp.php";
?>
<body>
	<?php
		include "./include/menu.php";
	?>
	
	<div id="page">
    	<a id="logo">
        	<img src="../img/imgcool.gif" alt="Logo Tuto menu latéral jQuery" title="Logo Tuto menu latéral jQuery" class="title"/>
        </a>
        <a href="javascript:;" class="menu_btn"></a>       
        <div style="height:30px"></div>
        <!-- debut des articles -->
		
		<form method="post" action="upload.php" enctype="multipart/form-data">
		<input type="hidden" name="MAX_FILE_SIZE" value="1048576" />
		<input type="file" name="icone" id="icone" /><br />
		<label for="icone">Icône du fichier (JPG, PNG ou GIF | max. 15 Ko) :</label><br />
		<label for="titre">Titre du fichier (max. 50 caractères) :</label><br />
     	<input type="text" name="titreMusique" value="Titre du fichier" id="titre" /><br />
		<label for="titreMusique">Titre du fichier (max. 50 caractères) :</label><br />
     	<input type="text" name="titreAlbum" value="Titre de l'album" id="titre" /><br />
		<input type="text" name="titreAlbum" value="Titre du fichier" id="titre" /><br />
		<input type="hidden" name="MAX_FILE_SIZE" value="10048576" />
		<input type="file" name="mon_fichier" id="mon_fichier" /><br />	
		<label for="mon_fichier">Fichier (tous formats | max. 1 Mo) :</label><br />
		
		<input type="submit" name="submit" value="Envoyer" />
		
	</form>

<?php
	include("./include/connexion.php");
	$link = connection();
	$extensions_valides = array( 'jpg' , 'jpeg' , 'gif' , 'png' );
	$extensions_valides2 = array( 'mp3' , 'ogg' , 'wav' , 'flac' );

	$extension_upload = strtolower(  substr(  strrchr($_FILES['icone']['name'], '.')  ,1)  );
		if ( in_array($extension_upload,$extensions_valides) ) echo "Extension correcte pour l'image";
		
	$extension_upload2 = strtolower(  substr(  strrchr($_FILES['mon_fichier']['name'], '.')  ,1)  );
		if ( in_array($extension_upload2,$extensions_valides2) ) echo "Extension correcte pour le fichier audio";
?>
	
	
	</body>
</html>