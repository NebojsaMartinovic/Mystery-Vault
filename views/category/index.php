<link rel="stylesheet" href="../../assets/css/style.css">
<link href="../../searchf/form.css" rel="stylesheet" type="text/css" />

 <section id="videoback" class="negativ">
        <video autoplay loop muted poster="Open-Fire.jpg" id="bgvid">
            <source src="../../video/Open-Fire.webm" type="video/webm">
            <source src="../../video/Open-Fire.mp4" type="video/mp4">
        </video>
        
              
    </section>
    
   <section id="drugi">
      
      <div class="wrapper">

        <div id="rightcat">
        <h2>Categories</h2>
        <?php foreach($viewmodel as $cat): ?>
          <ul>
            <li><a href="<?php echo ROOT_URL; ?>category/index/<?php echo $cat['img_id']; ?>" class="dugme"><?php echo $cat['cat_title']; ?></a></li>
          </ul>
          <?php endforeach; ?>
        </div>

         <div id="leftcat">
          <h2>Gallery</h2>
          <?php foreach($viewmodel as $image): ?>
            <div class="gallery">
              <a href="../../images/<?php echo $image['img_name']; ?>">
                <img src="../../images/<?php echo $image['img_name']; ?>" >
              </a>
              <div class="desc"><?php echo $image['img_title']; ?></div>
            </div>
          <?php endforeach; ?>
        </div>
         <div id="center">
            <h2>Unexplained Mysteries</h2>
            <?php foreach($viewmodel as $image): ?>
            <h4><?php echo $image['img_title']; ?></h4>
            <p><?php echo $image['img_intro']; ?></p>
            <a href="<?php echo ROOT_URL; ?>readmore/index/<?php echo $image['img_id']; ?>" class="dugme">Read More...</a>
            <?php endforeach; ?>
        </div>
  </div>
</section>
    


    <footer id="footer" class="negativ">
      <p>Copyright &copy; 2017 Nebojsa Martinovic</p>
    </footer>
    
    
