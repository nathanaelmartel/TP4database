
<header>
  <div class="container">
    <div class="big-title">Le blog</div>

    <ul class="nav nav-tabs">
      <li role="presentation" class="active"><a href="/">Accueil</a></li>

      <li role="presentation">
        <a href="/categorie.php?id=1">
          Catégorie 1
          <span class="badge">0</span>
        </a>
      </li>

      <li role="presentation">
        <a href="/categorie.php?id=2">
          Catégorie 2
          <span class="badge">0</span>
        </a>
      </li>

      <?php /*$categories = $pdo->query('SELECT * FROM category'); ?>
      <?php foreach ($categories as $category): ?>
        <li role="presentation">
          <a href="/categorie.php?id=<?php echo $category['id'] ?>">
            <?php echo $category['name'] ?>
            <span class="badge">0</span>
          </a>
        </li>
      <?php endforeach;*/ ?>

    </ul>
  </div>
</header>
