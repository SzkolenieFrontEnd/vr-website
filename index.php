<?php 
// require_once, require - wysypuje apkę
// include, include_once - powoduje tylko warning
  require_once './partials/header.php';
  require_once './data/data.php';
?>

<main class="banner">
    <div class="innerWrapper">
       <div class="bannerText">
          <h1>Immersive Experiences that deliver</h1>
       </div>
    </div>
</main>

<section class="aboutSection">
    <div class="innerWrapper">
        <img class="aboutImage" src="images/desktop/image-interactive.jpg" alt="mężczyzna z okularami vr">
        <div class="aboutText">
            <h2>The leader in interactive vr</h2>
            <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Voluptates voluptatibus inventore recusandae porro id sint iure optio minus dolore magni.</p>
        </div>
    </div>
</section>

<section class="portfolioSection">
    <div class="innerWrapper">
         <div class="portfolioTitle">
             <h2>Our Creations</h2>
             <button aria-label="Click to see all posts" >SEE ALL</button>
         </div>
         <div class="portfolioGallery">

          <?php for($i = 0; $i < count($images); $i++) { ?>

            <div>
              <img 
                src="<?php echo $images[$i]['link']; ?>" 
                alt="<?php echo $images[$i]['title']; ?>"
              >
              <h3> <?php echo $images[$i]['title']; ?> </h3>
            </div>  

          <?php } ?>  

         </div>
    </div>
</section>


<?php 
  require_once './partials/footer.php'
?>
