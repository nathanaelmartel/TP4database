<?php
require_once('_config.php');

$current_category_id = $_GET['id'];
var_dump($current_category_id);echo '<br />';

$query = 'SELECT * FROM category WHERE id='.$current_category_id;
var_dump($query);echo '<br />';

$current_category_result = $pdo->query($query);
$current_category = $current_category_result->fetch();

var_dump($current_category['name']);echo '<br />';

?>
<!DOCTYPE html>
<html lang="fr">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>TP4 database — [Nom de l'article]</title>
    <link rel="stylesheet" href="/assets/css/bootstrap.min.css" type="text/css" />
    <link rel="stylesheet" href="/assets/css/tp4.css" type="text/css" />
    <script src="/assets/js/bootstrap.min.js"></script>
  </head>
  <body>
    <?php include('_header.php') ?>

    <div class="container">
      <article>
        <header>
          <h1>[Nom de l'article]</h1>

          <ol class="breadcrumb">
            <li><a href="/">Accueil</a></li>
            <li><a href="/category.php?id=[category id]">[Nom de la catégorie]</a></li>
            <li class="active">[Nom de l'article]</li>
          </ol>

        </header>

        <div>
          [contenu de l'article]
        </div>

        <footer>
          <p>Publié le <span class="label label-default">[date article]</span> par <span class="label label-default">[auteur de l'article]</span></p>
        </footer>

      </article>

      <aside>
        <?php //require_once('_commentaires.php'); ?>
      </aside>
    </div>

    <?php include('_footer.php') ?>
  </body>
</html>
