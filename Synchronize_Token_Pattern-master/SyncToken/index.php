<?php
session_start();

require_once 'Token.php';



if (isset($_POST['user']) && isset($_POST['password'])) 
{
  if ($_POST['user'] == 'admin' && $_POST['password'] == 'password')
  {
    $_SESSION['user'] = $_POST['user']; 
    Token::generate_token();
    header('Location: ./details.php'); 
  }
  else
  {
    echo "<script>alert('Check username and password');</script>";
    echo "<noscript>Check username and password</noscript>";
  }
}



?>
<body>

  <center>
    <h3>synchronizer token for prevent CSRF</h3>
  </center>

<form method="post" action="">
User Name : <input type="text" name="user" id="user"><br/><br/>
Password  : <input type="password" name="password" id="password"><br/><br/>
<input type="submit" name="submit" value="login">
</form>
  


</body>