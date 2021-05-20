<?php 
require_once( 'model/user.php');
require_once( 'model/media.php');

/**************************************
* ----- LOAD DETAILS FILM / SERIE -----
***************************************/

// Changer pour film 
function detailsMediaPage() {
//     if(isset($_GET['media'])): 
//         $id = $_GET['media'];
//         $film = new Media($id);
//         $dataFilm = $film->getMediaById($id);
//     endif;
//     require('view/detailsMediaView.php');
// }

// test

    if(isset($_GET['film'])){
        $id = $_GET['film'];
        $film = new media($id);
        $dataFilm = $film->getMediaById($id);
    }elseif(isset($_GET['series'])){
        $id = $_GET['series'];
        $serie = new media($id);
        $dataSerie = $serie->getMediaById($id);
        $dataSaison = $serie ->getSaisonById($id);
    }
        require_once('view/detailsMediaView.php');
}
    


// // Affichage des séries 
// function detailsSeriePage() {
//     if(isset($_GET['serie'])): 
//         $id = $_GET['serie'];
//         $film = new Media($id);
//         $dataSerie = $serie->getSaisonById($id);
//     endif;
//     require('view/detailsMediaView.php');
// }


