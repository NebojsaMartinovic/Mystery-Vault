<!DOCTYPE html>
<html>
<head>
<link href='http://fonts.googleapis.com/css?family=Montserrat:400,700' rel='stylesheet' type='text/css'>
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
    margin: 0 auto;
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
.login-block input#title {
    background: #fff url('http://i.imgur.com/Qf83FTt.png') 20px top no-repeat;
    background-size: 16px 80px;
}
.login-block input#title:focus {
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

<body>

<div class="logo"></div>
<div class="login-block">
    <h1>Share your thoughts</h1>
    <?php Messages::display(); ?>
    <form action="<?php $_SERVER['PHP_SELF']; ?>" method="post">
    <input type="text" name="title" placeholder="Title" id="title" />
    <textarea name="body"cols="38" rows="4" id="body" placeholder="Say Something..."></textarea>
    <input type="submit" name="submit" value="Submit" id="button">
    <a href="<?php echo ROOT_PATH ?>shares" id="button" >Cancel</a>
   </form> 
</div>
<script src="//cdn.tinymce.com/4/tinymce.min.js"></script>
<script>tinymce.init({ selector:'textarea' });</script>
</body>

</html>