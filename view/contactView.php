<?php ob_start();?>

 <div class="landscape">
   <div class="bg-black">
     <div class="row no-gutters">
       <div class="col-md-6 full-height bg-white">
         <div class="auth-container">
           <h2><span>Cod</span>'Flix</h2>
           <h3>Nous Contacter</h3>

           <div class="arrow-back">
                <i title="retour" onclick="location.href='index.php'" class="arrow-back far fa-arrow-alt-circle-left fa-3x"></i>
           </div>

           <form method="post" action="index.php?action=contact" class="custom-form">

             <div class="name-contact form-group">
               <label for="name">Nom</label>
               <input type="text" name="name" value="" id="name" class="form-control" />
             </div>

             <div class="form-group">
               <label for="email">Email</label>
               <input type="email" name="email" id="email" class="form-control" />
             </div>

             <div class="form-group">
               <label for="comment">Votre message</label>
               <textarea class="form-control" name="content" rows="5" id="content"></textarea>
             </div>

             <div class="form-group">
               <div class="row d-flex justify-content-center">               
                   <button type="submit" class="btn bg-red">Envoyer</button> 
             </div>
           </div>

             <span class="error-msg justify-content-center">
               <?= isset( $error_msg ) ? $error_msg : null; ?>
             </span>
             <span class="success-msg justify-content-center">
               <?= isset($success_msg) ? $success_msg : null; ?>
             </span>

           </form>
              

         </div>
       </div>
       <div class="col-md-6 full-height">
         <div class="auth-container">
           <h1>Que pouvons-nous faire pour vous ?</h1>
         </div>
       </div>
     </div>
   </div>
 </div>



<?php
    $content = ob_get_clean(); 
    require( 'view/base.php' ); 
?>