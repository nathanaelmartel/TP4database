<?php
require_once('_config.php');

$current_category_id = $_GET['id'];
var_dump($current_category_id);echo '<br />';

$query = 'SELECT * FROM category WHERE id='.$current_category_id;
var_dump($query);echo '<br />';

//$current_category_result = $pdo->query($query);
//$current_category = $current_category_result->fetch();

var_dump($current_category['name']);echo '<br />';

?>
<!DOCTYPE html>
<html lang="fr">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>TP4 database — [Nom de l'article]</title>
    <?php include('_head.php') ?>
  </head>
  <body>
    <?php include('_header.php') ?>

    <div class="container">
      <article>
        <header>
          <h1>[Nom de l'article]</h1>

          <nav aria-label="breadcrumb" role="navigation">
            <ol class="breadcrumb">
              <li class="breadcrumb-item"><a href="index.php">Accueil</a></li>
              <li class="breadcrumb-item">[Nom de la catégorie]</li>
              <li class="breadcrumb-item active" aria-current="page">[Nom de l'article]</li>
            </ol>
          </nav>

        </header>

        <div>
          [contenu de l'article]
        </div>

        <footer>
          <p>Publié le <span class="label label-default">[date article]</span> par <span class="label label-default">[auteur de l'article]</span></p>
        </footer>

      </article>

      <aside>
        <?php //require_once('_comments.php'); ?>
      </aside>
    </div>

    <?php include('_footer.php') ?>
  </body>
</html>
