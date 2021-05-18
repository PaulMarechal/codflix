<?php ob_start(); ?>

<div class="row">
    <div class="col-md-4 offset-md-8">
        <form method="get">
            <div class="form-group has-btn">
                <input type="search" id="search" name="title" value="<?= $search; ?>" class="form-control"
                       placeholder="Rechercher un film ou une série">

                <button type="submit" class="btn btn-block bg-red">Valider</button>
            </div>
        </form>
    </div>
</div>

<h3 class="titre_film">Films</h3>
<div class="media-list">
    <?php foreach( $films as $film ): ?>
        <a class="item" href="index.php?media=<?= $film['id']; ?>">
            <div class="video">
                <div>
                    <iframe allowfullscreen="" frameborder="0"
                            src="<?= $film['trailer_url']; ?>" ></iframe>
                </div>
            </div>
            <div class="title"><?= $film['title_media']; ?></div>
        </a>
    <?php endforeach; ?>
</div>

<h3 class="titre_film">Séries</h3>
<div class="media-list">
    <?php foreach( $series as $serie ): ?>
        <a class="item" href="index.php?media=<?= $serie['id']; ?>">
            <div class="video">
                <div>
                    <iframe allowfullscreen="" frameborder="0"
                            src="<?= $serie['trailer_url']; ?>" ></iframe>
                </div>
            </div>
            <div class="title"><?= $serie['title_media']; ?></div>
        </a>
    <?php endforeach; ?>
</div>


<?php $content = ob_get_clean(); ?>

<?php require('dashboard.php'); ?>
