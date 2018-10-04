<?php
session_start();
require_once 'Token.php';

if (isset($_POST['secret']) && isset($_POST['verify'])) 
{
  if ($_POST['secret'] == 'secret' && $_POST['verify'] == 'verify')
  {
  		$csrf_token = $_POST['csrf_token'];
    	 if(Token::check_token($csrf_token)){

          echo "process is success. Token Valid";
        }
        else{
               	echo "process is unsuccess. Token invalid"; 
        }   
  }
  else
  {
  	echo 'secret is secret and verify is verify. Please retry';
  }
}
?>

<form method="post" action="">
	Secret  Code : <input type="password" name="secret" id="secret"><br/><br/>
	Verify Code : <input type="password" name="verify" id="verify"><br/><br/>
	<input type="hidden" name="csrf_token" id="csrf_token" value="">
	<input type="submit" name="submit" value="Validate">
</form>

 <a class="red" href="./logout.php">Logout</a>


  <script src="https://code.jquery.com/jquery-3.3.1.min.js" integrity="sha256-FgpCb/KJQlLNfOu91ta32o/NMZxltwRo8QtmkMRdAu8=" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>

  <script type="text/javascript" src="./script.js"></script>


 
