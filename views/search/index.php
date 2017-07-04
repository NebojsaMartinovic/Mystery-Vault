<link rel="stylesheet" href="../assets/css/style.css">
<link href="../searchf/form.css" rel="stylesheet" type="text/css" />
<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1" />

 <section id="videoback" class="negativ">
        <video autoplay loop muted poster="Open-Fire.jpg" id="bgvid">
            <source src="../video/Open-Fire.webm" type="video/webm">
            <source src="../video/Open-Fire.mp4" type="video/mp4">
        </video>
        
  
        
    </section>
    
   <section id="drugi">
      
        <div class="wrapper" id="home">
        
       
            <h2>Unexplained Mysteries</h2>
            <?php foreach($viewmodel as $image): ?>
            <h4><?php echo $image['img_title']; ?></h4>
            <p><?php echo $image['img_intro']; ?></p>
            <a href="<?php echo ROOT_URL; ?>readmore/index/<?php echo $image['img_id']; ?>" class="dugme">Read More...</a>
          
            <?php endforeach; ?>
        
        </div>
        </section>
        
  
    
    


    
   
    
    <footer id="footer" class="negativ">
      <p>Copyright &copy; 2017 Nebojsa Martinovic</p>
    </footer>
    
    
