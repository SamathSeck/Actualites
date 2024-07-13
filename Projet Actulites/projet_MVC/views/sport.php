<?php include 'header.php'; ?>

<h2>Actualités Sport</h2>
<div class="news">
    <ul>
        <?php foreach ($articles as $article): ?>
            <div class="news-item">
                <h3><?php echo $article->titre; ?></h3>
                <p><?php echo $article->contenu; ?></p>
            </div>
        <?php endforeach; ?>
    </ul>
</div>

<?php include 'footer.php'; ?>
