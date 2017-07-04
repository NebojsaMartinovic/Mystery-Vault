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

.login-block input#email {
    background: #fff url('http://i.imgur.com/u0XmBmv.png') 20px top no-repeat;
    background-size: 16px 80px;
}

.login-block input#email:focus {
    background: #fff url('http://i.imgur.com/u0XmBmv.png') 20px bottom no-repeat;
    background-size: 16px 80px;
}

.login-block input#name {
    background: #fff url('http://i.imgur.com/Qf83FTt.png') 20px top no-repeat;
    background-size: 16px 80px;
}

.login-block input#name:focus {
    background: #fff url('http://i.imgur.com/Qf83FTt.png') 20px bottom no-repeat;
    background-size: 16px 80px;
}
.login-block input#password {
    background: #fff url('http://i.imgur.com/Qf83FTt.png') 20px top no-repeat;
    background-size: 16px 80px;
}

.login-block input#password:focus {
    background: #fff url('http://i.imgur.com/Qf83FTt.png') 20px bottom no-repeat;
    background-size: 16px 80px;
}
.login-block input#admin {
    background: #fff url('http://i.imgur.com/Qf83FTt.png') 20px top no-repeat;
    background-size: 16px 80px;
}

.login-block input#admin:focus {
    background: #fff url('http://i.imgur.com/Qf83FTt.png') 20px bottom no-repeat;
    background-size: 16px 80px;
}


.login-block input:active, .login-block input:focus {
    border: 1px solid #ff656c;
}
.login-block button#btn-edit {
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
    margin-bottom: 10px;
}

.login-block button#btn-edit:hover {
    background: #ff7b81;
}


</style>
<script>
//selektujemo formu i na event submit prekidamo defaultnu radnju forme da salje podatke pomocu metode preventDefault
//zatim pokrecemo metodu ajax kojoj prosledjujemo tip slanja podataka,url fajla koji se bavi logikom a prosledjene podatke iz forme iscitavamo metodom serialize()
    $(document).ready(function(){
       $("#editForm").on('submit',function(event){
        event.preventDefault();
         $.ajax({
            type: 'post',
            url: 'euser.php',
            data: $('#editForm').serialize()
        });
    });
});
        

</script>
</head>

<body>

<div class="logo"></div>
<div class="login-block">
    <h1>Edit User</h1>
    <?php foreach($viewmodel as $user): ?>
        <form id="editForm" method="post">
        <label for="name">Name</label>
        <input type="text" name="name" id="name" value="<?php echo $user['name']; ?>" />
        <label for="email">Email</label>
        <input type="text" name="email" id="email" value="<?php echo $user['email']; ?>"/>
        <label for="password">Password</label>
        <input type="password" name="password" id="password" />
        <label><strong>Admin</strong></label>
        <input type="text" name="admin" id="admin" value="<?php echo $user['admin'] ?>">
        <input type="hidden"  name="btn" value="<?php echo $user['id'] ?>">
        <button type="submit" name="submit" id="btn-edit">Submit</button>
      </form> 

    <?php  endforeach; ?>

</div>

</body>


</html>