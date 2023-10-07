<?php require_once "controllerUserData.php"; ?>
<?php 
$email = $_SESSION['email'];
if($email == false){
  header('Location: admin_signin.php');
}
?>
<!DOCTYPE html>
<html lang="en">
<html>

<head>
  <title>Only Goods</title>
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="admin_signin.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js"></script>
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.13.0/css/all.min.css">
  <script src="https://code.iconify.design/2/2.1.0/iconify.min.js"></script>
  <script src="https://code.iconify.design/2/2.2.0/iconify.min.js"></script>
  <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
  <link rel="stylesheet" type="text/css" href="admin_signin.css">
</head>

<body>
    <div class = signin>
        <img src="../images/userbg.jpg" alt="UserBG" class = "img-responsive"  height="620">
        <div class="center">
            <form action="reset-code.php" method="POST" autocomplete="off">
                <h1>Code Verification<br></h1>
                <?php 
                if(isset($_SESSION['info'])){
                    ?>
                    <div class="alert alert-success text-center" style="padding: 0.4rem 0.4rem">
                        <?php echo $_SESSION['info']; ?>
                        </div>
                        <?php
                    }
                    ?>
                    <?php
                    if(count($errors) > 0){
                        ?>
                        <div class="alert alert-danger text-center">
                            <?php
                            foreach($errors as $showerror){
                                echo $showerror;
                            }
                            ?>
                            </div>
                            <?php
                        }
                        ?>
                        <div class="form-group">
                            
                        </div>
                        <div class="txt_field">
                            <input type="number" name="otp" required>
                            <span></span>
                            <label><span class="iconify-inline" data-icon="ri:lock-password-line"></span> Code</label>
                        </div>
                        <div class="form-group">
                            <button type="submit" name="check-reset-otp">S u b m i t</button>
                        </div>
                    </form>
                </div>
            </div>
</body>
</html>