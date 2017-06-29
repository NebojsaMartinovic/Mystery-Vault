

<link rel="stylesheet" href="../../assets/css/style.css">
<link href="../../searchf/form.css" rel="stylesheet" type="text/css" />
<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1" />


<style>
body {
    background: url('http://i.imgur.com/Eor57Ae.jpg') no-repeat fixed center center;
    background-size: cover;
}
    .login-block {
    width: 720px;
    padding: 20px;
    background: #fff;
    border-radius: 25px;
    border-top: 5px solid #ff656c;
    margin: 0 auto;
    border-bottom: 5px solid #ff656c;
    margin-bottom: 5px;
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
</style>
 <section id="drugi" >
      
        <div class="wrapper" id="readmore">
            <h1>Unexplained Mysteries</h1>
            <?php foreach($viewmodel as $image): ?>
            <h4><?php echo $image['img_title']; ?></h4>
            <p><?php echo $image['img_intro']; ?></p>
            <img src="../../images/<?php echo $image['img_name']; ?>">
            <p class="art"><b><?php echo $image['img_body']; ?></b></p>
            <small><?php echo $image['img_date']; ?></small>

            <?php endforeach; ?>
            <?php if(isset($_SESSION['is_logged_in'])): ?>
                <div class="login-block">
                 <form action="<?php $_SERVER['PHP_SELF']; ?>" method="POST">
                    <input type="text" name="name" placeholder="Name" id="name" />
                    <textarea name="comment"></textarea>
                    <input type="submit" name="submit" value="Leave a comment" class="dugme">
                   </form>
                   <div>
                    <?php if(empty($_SESSION['name']) || empty($_SESSION['comment'])): ?>
                            <p style="color: red">There is no comments for this mystery yet!</p>
                       <?php else: ?>
                       <table class="login-block">
                           <thead>
                               <th><?php echo $_SESSION['name'].':'; ?><hr></th>
                           </thead>
                           <tbody>
                               <td><?php echo $_SESSION['comment']; ?></td>
                           </tbody>
                       </table>
                       <?php endif; ?>
                   </div>
                 
                </div>
          <?php else: ?>
            <p style="color: red">You must be logged in to leave a comment!</p>
          <?php endif; ?>

        </div>
        </section>
<script src="//cdn.tinymce.com/4/tinymce.min.js"></script>
<script>tinymce.init({ selector:'textarea' });</script>
 


