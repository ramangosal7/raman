<?php
include("common/database.php");
$db = new Database;
$conn=$db->connect();

$uid=$_POST['uid'];
$n_proj=$_POST['n_proj'];

$query="insert into assigned_pro(name,uid) values('$n_proj',$uid);";
$db->query($query);
//header("location:profile.php");
?>