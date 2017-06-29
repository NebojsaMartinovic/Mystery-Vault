<!doctype html>
<html>
<head>

<title>Mystery Vault</title>
<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1" />
<link href='http://fonts.googleapis.com/css?family=Oswald:400,700,300|Open+Sans:300italic,400italic,700italic,400,700,300&subset=latin,latin-ext' rel='stylesheet' type='text/css'>
<link href="https://fonts.googleapis.com/css?family=Berkshire+Swash|Tangerine" rel="stylesheet">
<link rel="stylesheet" type="text/css" href="assets/css/style.css">
<link href="searchf/form.css" rel="stylesheet" type="text/css" />



<script src="assets/js/jquery-1.11.2.min.js"></script>
<script type="text/javascript">    

  $(document).ready(function() {
    $(window).on("scroll", function() {
      var fromTop = $(window).scrollTop();
      $("#topLink").toggleClass("down", (fromTop > 300));
    });
  });
    
</script>


<script type="text/javascript">
  $(function() {
    $('a[href*=#]:not([href=#])').click(function() {
      if (location.pathname.replace(/^\//,'') == this.pathname.replace(/^\//,'') && location.hostname == this.hostname) {

        var target = $(this.hash);
        target = target.length ? target : $('[name=' + this.hash.slice(1) +']');
        if (target.length) {
          $('html,body').animate({
            scrollTop: target.offset().top
          }, 1000);
          return false;
        }
      }
    });
  });
</script>


<script>
$(document).ready(function() {
    
  var respmenu    = $('#respmenu');
  var menu      = $('#nav>ul');

  $(respmenu).on('click', function(e) {
    e.preventDefault();
    menu.slideToggle();
  });
  
  $(window).resize(function(){
    var size = $(window).width();
    if(size > 768 && menu.is(':hidden')) {
      menu.removeAttr('style');
    } 
  });
  
}); 
  


</script>


</head>
<body>


  <header id="header" class="negativ">
    
        <div class="wrapper">
            <nav id="nav">
                <ul>
                    <li><a href="<?php echo ROOT_URL; ?>" class="dugme">Home</a></li>
                    <li><a href="<?php echo ROOT_URL; ?>shares" class="dugme">Shares</a></li>
                    <li><a href="<?php echo ROOT_URL; ?>about" class="dugme">About</a></li>
                    <li><a href="<?php echo ROOT_URL; ?>contact" class="dugme">Contact Us</a></li>
                    <?php if (isset($_SESSION['is_logged_in']) && isset($_SESSION['admin'])==1): ?>
                      <li><a href="<?php echo ROOT_URL; ?>admin" class="dugme">Admin Dashboard</a></li>
                     <?php endif; ?>
                <?php if(isset($_SESSION['is_logged_in'])): ?>
                  <li><a href="<?php echo ROOT_URL; ?>" class="dugme">Welcome <?php echo $_SESSION['user_data']['name']; ?></a></li>
                  <li><a href="<?php echo ROOT_URL; ?>users/logout" class="dugme">Logout</a></li>
                <?php else: ?>
                  <li><a href="<?php echo ROOT_URL; ?>users/login" class="dugme">Login</a></li>
                  <li><a href="<?php echo ROOT_URL; ?>users/register" class="dugme">Register</a></li>
                <?php endif; ?>
                  <form method="post" action="<?php echo ROOT_URL; ?>search/index" id="search">
                  <input name="q" type="text" size="40" placeholder="Search..." />
                </form>
                </ul>
                <a href="#" id="respmenu">Prikaži/sakrij navigaciju</a>
            </nav>

        </div>

    </header>

 <div class="container">

      <div class="row">
      
        <?php require($view); ?>
      </div>

    </div><!-- /.container -->

</body>
</html>