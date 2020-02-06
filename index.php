<?php
    session_start();
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Contact Us</title>
    <!-- Font Awesome-->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.11.2/css/all.css" integrity="sha256-46qynGAkLSFpVbEBog43gvNhfrOj+BmwXdxFgVK/Kvc=" crossorigin="anonymous" />
    <!--Bootsrap CDN-->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">

</head>
<body>
    <div class="container mr-5">
        <h1>Contact Us</h1>
        <?php if(isset($_SESSION['Message'])): ?>
            <div class="alert <?php echo $_SESSION['MsgClass']; ?> alert-dismissible mt-2 w-25">
                        <button type="button" class="close" data-dismiss="alert">&times;</button>
                        <strong><?php echo $_SESSION['Message']; unset($_SESSION['Message']); ?></strong>
            </div>
        <?php endif ?>

        <form method="POST" action="contact.php">
            <div class="form-group">
                <label>Name</label>
                <input type="text" name="name" class="form-control w-25">
            </div>
            <div class="form-group">
                <label>Email</label>
                <input type="text" name="email" class="form-control w-25">
            </div>
            <div class="form-group">
                <label>Subject</label>
                <input type="text" name="subject" class="form-control w-25">
            </div>
            <div class="form-group">
                <label>Message</label>
                <textarea class="form-control w-25" name="msg" rows="8" cols="35"></textarea>
            </div>
            <button type="submit" name="submit" class="btn btn-primary w-25">Contact Us</button>
        </form>
    </div>
</body>
</html>