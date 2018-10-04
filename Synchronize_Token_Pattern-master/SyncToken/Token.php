<?php
	class Token {
		public static function generate_token(){
			$_SESSION['token'] = rand();
			// return $_SESSION['token'];
		}

		public static function check_token($token){
			if(isset($_SESSION['token']) && $token == $_SESSION['token']){
				// unset($_SESSION['token']);
				return true;
			}
			else{
				return false;
			}
		}
	}
?>