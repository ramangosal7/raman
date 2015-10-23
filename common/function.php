<?php 

function validateuser($user,$pass)
{
	$db = new Database;
	$conn=$db->connect();
	
	$condition = "where user='".$user."' and pass='".$pass."'";
	$log_auth = $db->select("*","users",$condition);
	
	if(sizeof($log_auth)>0){
		session_start();
		$_SESSION['user']=$user;
		$_SESSION['pass']=$pass;
		
		return true;
	}
	else{
		return false;
	}

}
 ?>