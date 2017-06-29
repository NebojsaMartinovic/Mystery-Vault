<link rel="stylesheet" href="../assets/css/style.css">
<link href="../searchf/form.css" rel="stylesheet" type="text/css" />
<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1" />

 <section id="videoback" class="negativ">
        <video autoplay loop muted poster="../Stone-Falls.jpg" id="bgvid">
            <source src="../video/Stone-Falls.webm" type="video/webm">
            <source src="../video/Stone-Falls.mp4" type="video/mp4">
        </video>
        
        <div class="wrapper">
          <h2>Duis egestas turpis sit amet massa placerat</h2>
          <p>Donec tristique mollis tincidunt. Aliquam posuere vestibulum est id vehicula. Integer et massa vitae ipsum porttitor lobortis.</p>
          <p><a href="#" class="dugme">Neko&nbsp;dugme&nbsp;&raquo;</a></p>
    </div>
        
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
        
  
    
    

    <section id="idea" class="negativ">
      <div class="wrapper">
            <img src="../images/sijalica.png" alt="lightbulb" id="sijalica">
            <h2>New idea!</h2>
             <p>Cras non maximus nunc. Nunc nec velit sit amet ex elementum porttitor ac non velit. Curabitur venenatis congue justo, quis ornare libero porta nec. Duis egestas turpis sit amet massa placerat, vitae faucibus ipsum pharetra. Proin tincidunt at lacus non cursus. Aenean ultricies fringilla lacus ac pulvinar. Praesent venenatis est in nulla scelerisque, eu tincidunt sem interdum. Cras ipsum ipsum, vestibulum nec dui malesuada, laoreet rhoncus odio. Etiam posuere aliquet leo, quis posuere est elementum porttitor. </p>
         </div>
    </section>
    
   
    
    <footer id="footer" class="negativ">
      <p>Copyright &copy; 2015 CSSANI</p>
    </footer>
    
    
    <a href="#header" id="topLink">Back to TOP</a>