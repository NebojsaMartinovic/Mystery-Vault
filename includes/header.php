<!doctype html>
<html>
<head>

<title>Mystery Vault</title>
<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1" />
<link href='http://fonts.googleapis.com/css?family=Oswald:400,700,300|Open+Sans:300italic,400italic,700italic,400,700,300&subset=latin,latin-ext' rel='stylesheet' type='text/css'>
<link href="https://fonts.googleapis.com/css?family=Berkshire+Swash|Tangerine" rel="stylesheet">
<link rel="stylesheet" type="text/css" href="assets/css/style.css">
<link href="searchf/form.css" rel="stylesheet" type="text/css" />
<script src="https://code.jquery.com/ui/1.12.1/jquery-ui.min.js"
  integrity="sha256-VazP97ZCwtekAsvgPBSUwPFKdrwD3unUfSGVYrahUqU="
  crossorigin="anonymous"></script>
 
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