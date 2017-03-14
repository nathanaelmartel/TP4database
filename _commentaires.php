<?php

/* traitement du formulaire de commentaire */
if (isset($_POST['nom']) && isset($_POST['commentaire'])) {
  var_dump($_POST['nom']);echo '<br />';
  var_dump($_POST['commentaire']);echo '<br />';
  // requête d'ajout du commentaire :
  $query = 'INSERT…';
  //$pdo->exec($query);
}



/* récupérer et afficher les commentaire relatif à l'article */

?>
<div class="panel panel-default">
  <div class="panel-heading">
    [auteur commentaire]
    <span class="label label-info">[date commentaire]</span>
  </div>
  <div class="panel-body">
    [commentaire]
  </div>
</div>






<?php /* formulaire de commentaire */ ?>
<div class="panel panel-info">
  <div class="panel-heading">Votre avis ?</div>
  <div class="panel-body">

    <form action="" method="POST">
      <div class="form-group">
        <label for="nom">Nom</label>
        <input type="text" class="form-control" id="nom" name="nom" required />
      </div>
      <div class="form-group">
        <label for="commentaire">Commentaire</label>
        <textarea id="commentaire" name="commentaire" class="form-control" rows="5" required ></textarea>
      </div>
      <p class="text-right"><input type="submit" class="btn btn-primary" value="Envoyer"></p>
    </form>

  </div>
</div>
