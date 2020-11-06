<?php
	class Model{
		//this function checks the authentication of username and password and allow or restrict user depending on values they entered
		public function getLogin(){

			if(isset($_REQUEST['username']) && isset($_REQUEST['password'])){
				//username must be paras081 and pwd must be 12345
				if($_REQUEST['username'] == 'paras081' && $_REQUEST['password'] == '12345'){

					return 'login';
				}else{
					return 'Invalid User';
				}
			}
		}
	}
?>