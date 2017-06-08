
<!DOCTYPE html>
<html>
<head>
	<title>Transfert Class - Transport Aéroport</title>
	<meta charset="utf-8">
	<link rel="stylesheet" href="../public/css/bd.css">
	<link rel="stylesheet" href="../public/css/font-awesome/css/font-awesome.min.css">


	<script src="https://code.jquery.com/jquery-3.2.1.js" integrity="sha256-DZAnKJ/6XZ9si04Hgrsxu/8s717jcIzLy3oi35EouyE=" crossorigin="anonymous"></script>

	<link href="https://fonts.googleapis.com/css?family=Roboto|Cuprum" rel="stylesheet">

</head>

<body>

<header class="row">
	<div id="header_flex" class="col-xs-12">
			<h1 id="marque">Transfert Class</h1>
			<div id="header_est">
				<div id="telephone">
					<img id="tel" src="../images/tel.png"> 01 42 62 42 22
				</div>
				<!-- <div id="mon_compte">
					Mon compte
				</div> -->
			</div>
	</div>

</header>

	<div id="rouge">
	</div>
	<div class="trait">
	</div>
<div id="navi">
<?php
	if ($p!=='home'){
?>
<ul>
	<li><a href="index.php?p=home">Accueil</a></li>
	<li><a href="index.php?p=aeroport">Trajet Aéroport</a></li>
	<li><a href="index.php?p=long_trajet">Long Trajet</a></li>
	<li><a href="index.php?p=mise_a_disposition">Mise à disposition</a></li>
</ul>
<?php
	}else{
?>
	<ul>
	<li><a href="index.php?p=aeroport">Trajet Aéroport</a></li>
	<li><a href="index.php?p=long_trajet">Long Trajet</a></li>
	<li><a href="index.php?p=mise_a_disposition">Mise à disposition</a></li>
</ul>
<?php
}
?>
</div>

<main>

<?php
	echo $content;
?>

</main>

<footer>
<?php require "footer.php"; ?>
</footer>


 <script type="text/javascript" src="https://code.jquery.com/jquery-2.1.1.min.js"></script>

	<script type="text/javascript" src="../public/js/bd.js"></script>

	<script type="text/javascript" src="../public/js/animation.js"></script>
	<script src="https://unpkg.com/scrollreveal/dist/scrollreveal.min.js"></script>

</body>

</html>
