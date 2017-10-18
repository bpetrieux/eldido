<?php 
if (ICL_LANGUAGE_CODE=='EN') {
		$message404 = "The page cannot be found";
		$link = "Back to Homepage";
	}else{
		$message404 = "Impossible de trouver la page";
		$link = "Retour à la page principale";
	}
?>
<section id="" class="section">
  <div class="container errorPage ">
        <h1 class="errorPage_code">404</h1>
        <h3 class="errorPage_desc">NOT FOUND</h3>
    <div class="btn_error"><a class="" href="<?php echo home_url(); ?>" title="Head back home?"><?php echo($link); ?></a></div>
    </div>
</section>
