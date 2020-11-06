<?php

	include_once("Model/Model.php");

	Class Controller{

		public $model;


		public function __construct(){
			
			$this->model = new Model();
		}

		public function invoke(){

		 $result ='login';
			 
			 if('login' == 'login')
			 {
			 	include 'View/afterlogin.php';
			 }else
			 {
			 	include 'View/login.php';
			 }
		}
	}

?>