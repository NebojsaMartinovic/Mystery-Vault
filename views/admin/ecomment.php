<!DOCTYPE html>
<html>
<head>
<link href='http://fonts.googleapis.com/css?family=Montserrat:400,700' rel='stylesheet' type='text/css'>
<link rel="stylesheet" href="../assets/css/style.css" type="text/css">
<link href="../searchf/form.css" rel="stylesheet" type="text/css" />
<meta charset="UTF-8">

<style>
body {
    background: url('http://i.imgur.com/Eor57Ae.jpg') no-repeat fixed center center;
    background-size: cover;
}

.logo {
    width: 213px;
    height: 36px;
    margin: 30px auto;
}

.login-block {
    width: 900px;
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
    height: 36px;
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

.login-block input#comment {
    background: #fff url('http://i.imgur.com/Qf83FTt.png') 20px top no-repeat;
    background-size: 16px 80px;
}

.login-block input#comment:focus {
    background: #fff url('http://i.imgur.com/Qf83FTt.png') 20px bottom no-repeat;
    background-size: 16px 80px;
}
.login-block input#comm_id {
    background: #fff url('http://i.imgur.com/Qf83FTt.png') 20px top no-repeat;
    background-size: 16px 80px;
}

.login-block input#comm_id:focus {
    background: #fff url('http://i.imgur.com/Qf83FTt.png') 20px bottom no-repeat;
    background-size: 16px 80px;
}


.login-block input:active, .login-block input:focus {
    border: 1px solid #ff656c;
}



</style>
</head>

<body>

<div class="logo"></div>
<div class="login-block">
    <h1>Edit Message</h1>
    <?php foreach($viewmodel as $com): ?>
        <form action="<?php $_SERVER['PHP_SELF']; ?>" method="post">
        <label><strong>Name: </strong></label>
        <input type="text" name="name" id="name" value="<?php echo $com['name']; ?>" />
        <label><strong>Comm ID: </strong></label>
        <input type="text" name="comm_id" id="comm_id" value="<?php echo $com['comm_id']; ?>"/>
        <textarea name="comment"cols="38" rows="4" id="comment"><?php echo $com['comment']; ?></textarea>
        <input type="hidden" name="edited_c" value="<?php echo $com['id']; ?>">
        <input type="submit" name="edited_com" class="dugme">
      </form>  

    <?php  endforeach; ?>

 
</div>
<script src="//cdn.tinymce.com/4/tinymce.min.js"></script>
<script>tinymce.init({ selector:'textarea' });</script>

</body>

</html>