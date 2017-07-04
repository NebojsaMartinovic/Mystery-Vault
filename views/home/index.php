 <section id="videoback" class="negativ">
        <video autoplay loop muted poster="Open-Fire.jpg" id="bgvid">
            <source src="video/Open-Fire.webm" type="video/webm">
            <source src="video/Open-Fire.mp4" type="video/mp4">
        </video>
        
        
          <h2 class="w">Welcome to Mystery Spark</h2>
          <p><strong>We investigate strange stuff!</strong></p>
      
        
    </section>
  
    
   <section id="drugi">
   <div class="wrapper">

        <div id="right">
        <h2>Categories</h2>
        <?php foreach($viewmodel as $cat): ?>
          <ul>
            <li><a href="<?php echo ROOT_URL; ?>category/index/<?php echo $cat['img_id']; ?>" class="dugme"><?php echo $cat['cat_title']; ?></a></li>
          </ul>
          <?php endforeach; ?>
        </div>

        <div id="left">
            <h2>Gallery</h2>
            <?php foreach($viewmodel as $image): ?>
              <div class="gallery">
                <a href="images/<?php echo $image['img_name']; ?>">
                  <img src="images/<?php echo $image['img_name']; ?>" >
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
          
         


 

    <section id="mystery" class="negativ">
      <div class="wrapper">
            <h2>Monster of Ravenna</h2>
             <p>The Monster of Ravenna was a possibly apocryphal late Renaissance-era monstrous birth whose appearance in early 1512 near the city of Ravenna was widely reported in contemporary European pamphlets and diaries. Images of its grotesque features were symbolically interpreted by opponents of both the Catholic Church and the Protestant Reformation, although a more common explanation at the time held that the beast was an omen regarding the outcome of the Battle of Ravenna. Modern medical consensus believes that the monster was a child with some variety of severe congenital disorder. </p>
             <h3>Hystory</h3>
             <p>The earliest account of the monster's existence comes from the diarist Sebastiano di Branca Tedallini, who recorded on March 8 that news of a strange infant's birth had reached Pope Julius II in Rome. According to his account, the child was said to have been born of a nun and a friar, and was marked by a horned head, the letters YXV on its chest, and with one leg hairy and cloven-hoofed while the other leg's midsection grew a human eye.[1] On March 11, the apothecary Luca Landucci documented how word of this incident had reached Florence; having apparently received a drawing of the monster, Landucci described it to possess features such as a single horn, the wings of a bat, hermaphroditic genitalia, an eye on its right knee and a clawed left foot like an eagle's.The tale was subsequently immortalized by further chroniclers of the era, including Johannes Multivallis, Jacques Rueff, Conrad Lycosthenes, Caspar Hedio, Pierre Boaistuau, Fortunio Liceti, and Ambroise Paré.Landucci's physical description appears to have been considered authoritative, as later chroniclers, particularly Boaistuau, largely reproduced his account word-for-word.</p>
             
             <p>It was common practice for malformed infants, especially those with a low chance of survival in medieval Europe, to be abandoned and left to die by starvation;this was swiftly carried out in Ravenna on the order of the Pope.</p>

            <p>Even after its reported death, however, news of the monstrous birth continued to sweep Europe, often in stories greatly embellished by the storyteller. In a popular poem given by Marcello Palonio relatively soon after its birth, the monster is oddly implied to possess two heads.[8][9] With more time, the appearance of the Ravenna monster rapidly evolved, changing its number of legs from two to one and eventually syncretizing with the morality figure of Frau Welt.Giovanni Battista Bissoni was contracted to design the illustrations to the second edition of Fortunio Liceti's account, with the Monster of Ravenna centrally displayed on the frontispiece; by this point, the creature was well-established as possessing a single clawed foot.</p>

            <p>A major element in the popularity of the "monster" was its appearance alongside similar signs and portents; the occurrence of other preternatural events was a key factor in convincing Landucci that this was not an isolated incident.In 1514, with the example of Ravenna still fresh in public memory, a so-called "Monster of Bologna" was reported. This child was born with two faces, three eyes, and a woman's vulva on its forehead. It lived long enough to be baptized as "Maria" but died four days later
            </p>
            <h3>Sources</h3>
            <p>Ashton, John (1890). Curious creatures in zoology; with 130 illus. throughout the text. London: John C. Nimmo. doi:10.5962/bhl.title.32031.</p>
            <p>Daston, Lorraine; Park, Katharine (1998). Wonders and the Order of Nature, 1150-1750. New York, NY: Zone Books, distributed by MIT Press. ISBN 0-942299-90-6.</p>
            <p>Hampton, Timothy (2004). "Signs of Monstrosity: The Rhetoric of Description and the Limits of Allegory in Rabelais and Montaigne". In Knoppers, Laura Lunger; Landes, Joan B. Monstrous Bodies/Political Monstrosities in Early Modern Europe. Cornell University Press. pp. 179–199. ISBN 0-8014-4176-5.</p>
            <p>Huet, Marie-Hélène (2004). "Monstrous Medicine". In Knoppers, Laura Lunger; Landes, Joan B. Monstrous Bodies/Political Monstrosities in Early Modern Europe. Cornell University Press. pp. 127–147. ISBN 0-8014-4176-5.</p>
            <p>roi, Armand Marie (2003). Mutants: On Genetic Variety and the Human Body. Penguin Books. ISBN 0-670-03110-0.</p>
            <p>Niccoli, Ottavia (1990). Prophecy and People in Renaissance Italy. Translated by Cochrane, Lydia G. Princeton University Press. ISBN 0-691-05568-8.</p>
            <p>Paré, Ambroise (1982). On Monsters and Marvels. Translated by Pallister, Janis L. University of Chicago Press. ISBN 0-226-64563-0. Based on the Malgaigne edition of 1840.</p>
         </div>
    </section>
    
   
    
    <footer id="footer" class="negativ">
      <p>Copyright &copy; 2017 Nebojsa Martinovic</p>
    </footer>
    
    
