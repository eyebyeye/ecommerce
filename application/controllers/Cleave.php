<?php 

/**
 * 
 */
class Cleave extends CI_Controller
{
	
	function __construct()
	{
		parent::__construct();

	}

	public function LeaveSession(){

		session_destroy();
		header('location:'.base_url());
	}
}

 ?>