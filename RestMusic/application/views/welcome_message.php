<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="utf-8">
	<title>Welcome to CodeIgniter</title>

<style type="text/css">

body {
 background-color: #fff;
 margin: 40px;
 font-family: Lucida Grande, Verdana, Sans-serif;
 font-size: 14px;
 color: #4F5155;
}

a {
 color: #003399;
 background-color: transparent;
 font-weight: normal;
}

h1 {
 color: #444;
 background-color: transparent;
 border-bottom: 1px solid #D0D0D0;
 font-size: 16px;
 font-weight: bold;
 margin: 24px 0 2px 0;
 padding: 5px 0 6px 0;
}

</style>
</head>
<body>

<h1>Welcome to CodeIgniter!</h1>

<p>The page you are looking at is being generated dynamically by CodeIgniter.</p>

<ul>
	<li><a href="<?php echo base_url('api/music/id/1');?>">1 musique</a> - defaulting to JSON</li>
	<li><a href="<?php echo base_url('api/music/id/1/format/xml');?>">1 musique</a> - en XML</li>
	<li><a href="<?php echo base_url('api/next/id/1');?>">Musique suivante</a> - defaulting to JSON</li>
	<li><a href="<?php echo base_url('api/previous/id/1/format/xml');?>">Musique précédente</a> - en XML</li>
	<li><a href="<?php echo base_url('api/all/');?>">Toutes les musiques</a> - defaulting to JSON</li>
	<li><a href="<?php echo base_url('api/playlist/id/1/format/xml');?>">Musique d'une playlist</a> - en XML</li>
	<li><a href="<?php echo base_url('api/album/id/2/format/xml');?>">Musique d'un album</a> - en XML</li>
	<li><a href="<?php echo base_url('api/artist/id/2/format/xml');?>">Musique d'un artiste</a> - en XML</li>
	<li><a href="<?php echo base_url('api/genre/id/1/format/xml');?>">Musique d'un genre</a> - en XML</li>
	<li><a href="<?php echo base_url('api/artisteAlbum/id/1/format/xml');?>">Album d'un artiste </a> - en XML</li>
</ul>

<p><br />Page rendered in {elapsed_time} seconds</p>

</body>
</html>