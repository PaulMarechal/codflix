<?php ob_start(); ?>

<div class="row">
    <div class="col-md-4 offset-md-8">
        <form method="get">
            <div class="form-group has-btn">
                <input type="search" id="search" name="title" value="" class="form-control"
                       placeholder="Rechercher un film ou une série">

                <button type="submit" class="btn btn-block bg-red">Valider</button>
            </div>
        </form>
    </div>
</div>

<!-- test -->



<!-- fin test -->




<!--affichage d'un film-->
<?php if(isset($_GET['film'])) : ?>

    <h3 class="titre_film">Films</h3>
    <div class="media-details">
        <a class="item" href="index.php?media=<?= $dataFilm['id']; ?>">
            <div class="video">
                <div>
                    <iframe allowfullscreen="" frameborder="0"
                        src="<?= $dataFilm['trailer_url']; ?>" ></iframe>
                </div>
            </div>   
        </a>
    </div>
    <div class="media-details">
        <div style="background-color: whitesmoke;" class="card mb-3" style="max-width: 400px;">
            <div class="row g-0">
            <div class="video">
        </div>
            <div class="col">
                <div style="margin-left:3em" class="card-body">
                    <h5 class="card-title"><?= $dataFilm['title_media']; ?></h5>

                    <a>
                        <p class="card-text"><?= $dataFilm['summary']; ?></p>
                        <p class="card-text"><small class="text-muted"><?= $dataFilm['release_date']; ?></small><span style="margin-left:10px;"></span>
                                    
                            <form method="post" action="">
                                <input type='hidden' name="titre" value="<?= $dataFilm['title_media']; ?>"/>
                                <input type='hidden' name="desc" value="<?= $dataFilm['summary']; ?>"/>
                                <input type='hidden' name="url" value="<?= $dataFilm['trailer_url']; ?>"/>
                            </form>          
                        </p> 
                    </a>
                </div>
            </div>
        </div>
    </div>
<!--fin affichage d'un film-->

<!--affichage d'une serie-->


<?php elseif(isset($_GET['series'])) : ?>
    <div class="title_series"><h3><strong><?= $dataSerie['title_media']; ?></strong></h3></div></br>
<div class="media-list">
    <?php foreach( $dataSaison as $serie ): ?>
        <a class="item" href="index.php?media&serie=<?= $dataSerie['id']; ?>">
            <div class="video">
                <div>
                    <iframe allowfullscreen="" frameborder="0"
                            src="<?= $dataSerie['trailer_url']; ?>" ></iframe>
                </div>
            </div>
            <div class="title"><p>Saison <?= $serie['numero_saison']; ?></p></div>
            <p class="card-text-resume"><?= $serie['description_saison']; ?></p>
            <p class="card-text-date"><?= $dataSerie['release_date']; ?></p>
        </a>
    <?php endforeach; ?>
</div>
<?php endif ?>


<?php $content = ob_get_clean(); ?>
<?php require('dashboard.php'); ?>