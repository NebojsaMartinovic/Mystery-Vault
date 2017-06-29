 <!DOCTYPE html>
<html>
<head>
<link rel="stylesheet" href="../assets/css/style.css">
<link href="../searchf/form.css" rel="stylesheet" type="text/css" />
<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1" />

<style>
body {
    background: url('http://i.imgur.com/Eor57Ae.jpg') no-repeat fixed center center;
    background-size: cover;
}

.logo {
    width: 500px;
    height: 36px;
    margin: 30px auto;

}

.login-block {
    width: 600px;
    padding: 20px;
    background: #fff;
    border-radius: 5px;
    border-top: 5px solid #ff656c;
    margin-left: 50px;
    float: left;
}

.login-block h1 {
    text-align: center;
    color: #000;
    font-size: 18px;
    text-transform: uppercase;
    margin-top: 0;
    margin-bottom: 20px;
}

.login-block input {
    width: 100%;
    height: 42px;
    box-sizing: border-box;
    border-radius: 5px;
    border: 1px solid #ccc;
    margin-bottom: 20px;
    font-size: 14px;
    font-family: Montserrat;
    padding: 0 20px 0 50px;
    outline: none;
}
.login-block input#name {
    background: #fff url('http://i.imgur.com/Qf83FTt.png') 20px top no-repeat;
    background-size: 16px 80px;
}
.login-block input#name:focus {
    background: #fff url('http://i.imgur.com/Qf83FTt.png') 20px bottom no-repeat;
    background-size: 16px 80px;
}
.login-block input#title {
    background: #fff url('http://i.imgur.com/Qf83FTt.png') 20px top no-repeat;
    background-size: 16px 80px;
}
.login-block input#title:focus {
    background: #fff url('http://i.imgur.com/Qf83FTt.png') 20px bottom no-repeat;
    background-size: 16px 80px;
}
.login-block input#email {
    background: #fff url('http://i.imgur.com/Qf83FTt.png') 20px top no-repeat;
    background-size: 16px 80px;
}
.login-block input#email:focus {
    background: #fff url('http://i.imgur.com/Qf83FTt.png') 20px bottom no-repeat;
    background-size: 16px 80px;
}
.login-block textarea#body {
    background: #fff  20px top no-repeat;
    background-size: 16px 80px;
}
.login-block textarea#body:focus {
    background: #fff  20px bottom no-repeat;
    background-size: 16px 80px;
}

.login-block input:active, .login-block input:focus {
    border: 1px solid #ff656c;
}

.login-block input#button {
    width: 100%;
    height: 40px;
    background: #ff656c;
    box-sizing: border-box;
    border-radius: 5px;
    border: 1px solid #e15960;
    color: #fff;
    font-weight: bold;
    text-transform: uppercase;
    font-size: 14px;
    font-family: Montserrat;
    outline: none;
    cursor: pointer;
}

.login-block input#button:hover {
    background: #ff7b81;
}
.login-block a#button {
    width: 100%;
    height: 40px;
    background: #ff656c;
    box-sizing: border-box;
    border-radius: 5px;
    border: 1px solid #e15960;
    color: #fff;
    font-weight: bold;
    text-transform: uppercase;
    font-size: 14px;
    font-family: Montserrat;
    outline: none;
    cursor: pointer;

}

.login-block a#button:hover {
    background: #ff7b81;
}

</style>
</head>


  <section id="contact">
      
        <div class="wrapper">
        
        <h2 class="ab">Contact Us</h2>
        <p class="ab" style="margin-bottom: 10px;">Za sve sto vas interesuje mozete nas kontaktirati i poslati nam najkrace podatke o vama u formi ispod, a mi cemo vam se javiti u najkracem mogucem roku! Ocekujemo vasa misljenja. </p>
        
        <body>
      <div class="map">
            <iframe width="750" height="575" frameborder="0" style="border:0" class="if" 
            src="https://www.google.com/maps/embed/v1/place?q=place_id:ChIJ-4JUr_ldWkcR-Zb_iDbdqA8&key=AIzaSyBLSW-o_DEgqUCqdtsfJPouXUH3cvAYgyg" allowfullscreen>
            </iframe>
        </div>

        <div class="logo"></div>
        <div class="login-block">
            <h1>Contact Us</h1>
            <?php Messages::display(); ?>
            <form action="<?php $_SERVER['PHP_SELF']; ?>" method="post">
            <input type="text" name="name" placeholder="Name" id="name" />
            <input type="text" name="title" placeholder="Title" id="title" />
            <input type="text" name="email" placeholder="Email" id="email" />
            <textarea name="body"cols="38" rows="4" id="body" placeholder="Say Something..."></textarea>
            <input type="submit" name="submit" value="Submit" id="button">
            <a href="<?php echo ROOT_URL; ?>" id="button" >Cancel</a>
           </form> 
        </div>
       
        <script src="//cdn.tinymce.com/4/tinymce.min.js"></script>
        <script>tinymce.init({ selector:'textarea' });</script>
</body>


        
   
        
        </div>
        
    </section>
</html>