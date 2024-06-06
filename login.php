
<?php
session_start();
$msg = "";
if(isset($_POST['login'])){
    $email=$_POST['mail'];
    $password= $_POST['pw'];
    if(!empty($email) && !empty($password)){
       // $_SESSION['user_email']= $email;
       // $_SESSION['pw'] = $password;
       // $msg = "Welcome" . $_SESSION['user_email'];
       $expire_date = time()+(86400*30);
       setcookie('user_data', $email , $expire_date ,'/');
       $msg="Welcome to cookie:" . $_COOKIE['user_data'];
      
      }
}

?>
<!DOCTYPE html>
<html lang="en">
<head>
  <title>User Login</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.7.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
</head>
<body>
<div class="container">
    
 <div class="alert alert-success">
  <?= $msg ; ?>
   <a href="./logout.php" class="btn btn-default">Logout here</a>
</div>
  <h2>Login Here</h2>

  <form action="<?php echo $_SERVER['PHP_SELF'] ?>" method="post">
    <div class="form-group">
      <label for="email">Email:</label>
      <input type="email" class="form-control" id="email" placeholder="Enter email" name="mail">
    </div>
    <div class="form-group">
      <label for="pwd">Password:</label>
      <input type="password" class="form-control" id="pwd" placeholder="Enter password" name="pw">
    </div>
    <div class="checkbox">
      <label><input type="checkbox" name="remember"> Remember me</label>
    </div>
    <button type="submit" class="btn btn-default" name = "login">Submit </button>
  </form>
</div>

</body>
</html>
