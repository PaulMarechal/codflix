<?php

require_once( 'controller/homeController.php' );
require_once( 'controller/loginController.php' );
require_once( 'controller/signupController.php' );
require_once( 'controller/mediaController.php' );
require_once( 'controller/detailsMediaController.php');
require_once( 'controller/contactController.php' );

/**************************
* ----- HANDLE ACTION -----
***************************/

$user_id = isset( $_SESSION['user_id'] ) ? $_SESSION['user_id'] : false;

if ( isset( $_GET['action'] ) ):

  switch( $_GET['action']):

    case 'login':

      if ( !empty( $_POST ) ) login( $_POST );
      else loginPage();

    break;

    case 'signup':

      signupPage();
      if ( !empty( $_POST )) signup($_POST);
        else signupPage();

    break;

    case 'logout':

      logout();

    break;

    case 'media':
      if(empty($user_id)):
        header('Location:index.php');
      

      else:
        mediaPage();
      endif;
    break;

    case 'contact':
      sendMail();
    break;

  endswitch;

else:


  $mediaFilm_id = isset($_GET['film']) ? $_GET['film'] : false;
  $mediaSerie_id = isset($_GET['series']) ? $_GET['series'] : false;
  if( $mediaFilm_id ):
    detailsMediaPage($mediaFilm_id);
    
    
      
  elseif($mediaSerie_id):
    detailsMediaPage($mediaSerie_id);

    elseif($user_id):
      mediaPage();

  else:
    homePage();
  endif;

endif;
