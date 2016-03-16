<!DOCTYPE html>
<html lang="fr">
	<head>
		<meta charset="UTF-8">
		<title>Ajout Offre</title>
		<link rel="stylesheet" href="css/bootstrap/bootsrap.css">
		<meta name="viewport" content="width=device-width, initial-scale=1">
		<script src="js/jquery.min.js"></script>
		<script src="js/jquery.min.js"></script>
	</head>
<!--	<?php
		include ('entete.php');
	?>	-->
	<body>
		<<form class="form-horizontal">
  <fieldset>
    <legend>Ajouter une offre</legend>

    <div class="form-group">
      <label for="O_Libelle" class="col-lg-2 control-label">Nom de l'offre</label>
      <div class="col-lg-10">
        <input class="form-control" id="O_Libelle" placeholder="Offre" type="text">
      </div>
    </div>


     <div class="form-group">
      <label for="select" class="col-lg-2 control-label">Ville</label>
      <div class="col-lg-10">
        <select class="form-control" id="O_Ville">
          <option>-Sélectionner une ville-</option>
          <option>Calais et alentours</option>
          <option>Boulogne et alentours</option>
          <option>Dunkerque et alentours</option>
          <option>Lille et alentours</option>
        </select>
      </div>
    </div>


    <div class="form-group">
      <label for="select" class="col-lg-2 control-label">Domaine</label>
      <div class="col-lg-10">
        <select class="form-control" id="O_Domaine">
          <option>-Sélectionner un domaine-</option>
          <option>Domaine 1</option>
          <option>Domaine 2</option>
          <option>Domaine 3</option>
          <option>Domaine 4</option>
        </select>
      </div>
    </div>

  	<div class="form-group">
      <label for="textArea" class="col-lg-2 control-label">Contact</label>
      <div class="col-lg-10">
        <textarea class="form-control" rows="3" id="O_Contact"></textarea>
      </div>
    </div>


  	<div class="form-group">
      <label for="textArea" class="col-lg-2 control-label">Description de l'offre</label>
      <div class="col-lg-10">
        <textarea class="form-control" rows="3" id="O_Description"></textarea>
      </div>
    </div>

    <div class="form-group">
      <div class="col-lg-10 col-lg-offset-2">
        <button type="reset" class="btn btn-default">Annuler</button>
        <button type="submit" class="btn btn-primary">Ajouter l'offre</button>
      </div>
    </div>
  </fieldset>
</form>
	</body>
</html>