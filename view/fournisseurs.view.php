<?php
	require_once '../view/baseMenuFnct.php';
?>
<link rel="stylesheet" href="../view/css/fournisseurs.css" type="text/css" />


<div class="row">

	<!--<div class="box col-sm-6 col-md-4">
		<div class="thumbnail">
			<div class="caption">
				<address>
					<strong>Sono et Eclairage</strong><br>
					Notre Dame, Paris, France<br>
					Téléphone : 0653783195<br>
					Adresse Mail : contact@sono3000.net<br>
					Site Internet : www.sono3000.net
				</address>
				<blockquote>
					<p>Livraison et installation de la sono et des éclairages mercredi 10 heure</p>
				</blockquote>
				<p><a href="#" class="btn btn-danger" role="button">Supprimer</a></p>
			</div>
		</div>
	</div>

	<div class="box col-sm-6 col-md-4">
		<div class="thumbnail">
			<div class="caption">
				<address>
					<strong>Clé de la salle</strong><br>
					Avenue du Stade de France, Saint-Denis, France<br>
					Téléphone : 0934163575<br>
					Adresse Mail : reservation@salledespectacles.com<br>
					Site Internet : www.salledespectacles.com
				</address>
				<blockquote>
					<p>Aller chercher les clés de la salle lundi dans la matinée </p>
				</blockquote>
				<p><a href="#" class="btn btn-danger" role="button">Supprimer</a></p>
			</div>
		</div>
	</div>

	<div class="box col-sm-6 col-md-4">
		<div class="thumbnail">
			<div class="caption">
				<address>
					<strong>Traiteur</strong><br>
					Paris Gare de Lyon, Place Louis Armand, Paris, France<br>
					Téléphone : 0657563135<br>
					Adresse Mail : contact@traiteur2000.fr<br>
					Site Internet : www.traiteur2000.fr
				</address>
				<blockquote>
					<p>Arrivée traiteur jeudi vers 20 heure 30</p>
				</blockquote>
				<p><a href="#" class="btn btn-danger" role="button">Supprimer</a></p>
			</div>
		</div>
	</div>-->
	<?php
		foreach ($data['fournisseurs'] as $key => $value) {
			$value->afficherFournisseur();
		}
	?>


	<!-- Tableau d'ajout de fournisseur -->
	<div class="box col-sm-6 col-md-4">
		<div class="thumbnail">
			<!--Début formulaire-->
			<form action="fournisseurs.ctrl.php" method="post">

				<!-- Bouton d'ajout -->
				<div class="caption">
					<button type="submit" class="btn btn-primary">Ajouter</button>
				</div>

				<!-- Tous les champs input -->
				<div class="no-marg-bot panel panel-default">

					<div class="panel-heading">
						<input type="text"name="titre" class="form-control" placeholder="Titre" aria-describedby="basic-addon1">
						<input type="text"name="adresse" class="form-control" id="user_input_autocomplete_address" placeholder="Adresse" aria-describedby="basic-addon1">
						<input type="text"name="tel" class="form-control" placeholder="Téléphone" aria-describedby="basic-addon1">
						<input type="text"name="mail" class="form-control" placeholder="Adresse mail" aria-describedby="basic-addon1">
						<input type="text"name="site" class="form-control" placeholder="Site Internet" aria-describedby="basic-addon1">
					</div>

					<textarea class="form-control" name="description" id="" placeholder="Description" name=""></textarea>

				</div><!-- Fin champs input -->
			</form><!-- Fin formulaire -->

		</div>
	</div><!-- Fin tableu ajout de fournisseur -->
</div>


<?php include('../view/scripts.php') ?>
<script src="https://maps.googleapis.com/maps/api/js?libraries=places&amp;key=AIzaSyAIGMBk_u4Odlmc-UhPHgQ3RsZzq6J0Ak0" type="text/javascript"></script>

<script src="//cdnjs.cloudflare.com/ajax/libs/jquery.matchHeight/0.7.0/jquery.matchHeight-min.js"></script>
<script src="js/fournisseurs.js"></script>

<?php include('../view/footer.php') ?>
