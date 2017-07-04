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



.login-block input#img_title {
    background: #fff url('http://i.imgur.com/Qf83FTt.png') 20px top no-repeat;
    background-size: 16px 80px;
}

.login-block input#img_title:focus {
    background: #fff url('http://i.imgur.com/Qf83FTt.png') 20px bottom no-repeat;
    background-size: 16px 80px;
}

.login-block input#img_intro {
    background: #fff url('http://i.imgur.com/Qf83FTt.png') 20px top no-repeat;
    background-size: 16px 80px;
}

.login-block input#img_intro:focus {
    background: #fff url('http://i.imgur.com/Qf83FTt.png') 20px bottom no-repeat;
    background-size: 16px 80px;
}
.login-block input#img_id {
    background: #fff url('http://i.imgur.com/Qf83FTt.png') 20px top no-repeat;
    background-size: 16px 80px;
}

.login-block input#img_id:focus {
    background: #fff url('http://i.imgur.com/Qf83FTt.png') 20px bottom no-repeat;
    background-size: 16px 80px;
}
.login-block input#cat_title {
    background: #fff url('http://i.imgur.com/Qf83FTt.png') 20px top no-repeat;
    background-size: 16px 80px;
}

.login-block input#cat_title:focus {
    background: #fff url('http://i.imgur.com/Qf83FTt.png') 20px bottom no-repeat;
    background-size: 16px 80px;
}
.login-block input#cat_id {
    background: #fff url('http://i.imgur.com/Qf83FTt.png') 20px top no-repeat;
    background-size: 16px 80px;
}

.login-block input#cat_id:focus {
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
    <h1>Delete Image</h1>
    <?php foreach($viewmodel as $img): ?>
    <?php Messages::display(); ?>
        <form action="<?php $_SERVER['PHP_SELF']; ?>" method="post">
        <label><strong>Title: </strong></label>
        <input type="text" name="img_title" id="img_title" value="<?php echo $img['img_title']; ?>" />
        <label><strong>Intro: </strong></label>
        <input type="text" name="img_intro" id="img_intro" value="<?php echo $img['img_intro']; ?>" />
        <label><strong>Image ID: </strong></label>
        <input type="text" name="img_id" id="img_id" value="<?php echo $img['img_id']; ?>"/>
        <label><strong>Cat title: </strong></label>
        <input type="text" name="cat_title" id="cat_title" value="<?php echo $img['cat_title']; ?>"/>
        <label><strong>Cat ID: </strong></label>
        <input type="text" name="cat_id" id="cat_id" value="<?php echo $img['cat_id']; ?>"/>
        <textarea name="img_body"cols="38" rows="4" id="img_body"><?php echo $img['img_body']; ?></textarea>
        <img src="../images/<?php echo $img['img_name']; ?>" alt="saved image" style="width: 200px;"><br>
        <input type="hidden" name="delete" value="<?php echo $img['id_image']; ?>">
        <input type="submit" name="delete_i" class="dugme">
      </form>  
<?php endforeach; ?>

 
</div>
<script src="//cdn.tinymce.com/4/tinymce.min.js"></script>
<script>tinymce.init({ selector:'textarea' });</script>

</body>

</html>