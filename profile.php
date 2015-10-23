<?php
	session_start();
	include("constant.php");
	include("common/database.php");
	$user=$_SESSION['user'];
	$pass=$_SESSION['pass'];
	$db = new Database;
	$conn=$db->connect();
	$condition = "where user='".$user."' and pass='".$pass."'";
 ?>

<!DOCTYPE html>
<html lang="en-US">
	<head>
		<meta charset="utf-8">
		<meta http-equiv="X-UA-Compatible" content="IE=edge">
		<meta name="viewport" content="width=device-width, initial-scale=1">
		<title>Home</title>

		<!-- Bootstrap CSS -->
		<link href="<?php echo BS_CSS; ?>bootstrap.min.css" rel="stylesheet">
		<link rel="stylesheet" href="<?php echo CSS_DIR;?>style.css">

		<!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
		<!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
		<!--[if lt IE 9]>
			<script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
			<script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
		<![endif]-->
	</head>
	<body>
		<div class="container">
			<div  id="main-id">
				<div class="row">
					<div class="col-xs-3 col-sm-3 col-md-3 col-lg-3">

					</div>
					<div class="col-xs-6 col-sm-6 col-md-6 col-lg-6" id="pro-div">
					<?php 
						$log_auth=$db->select("*","users",$condition);

						if($log_auth[0]['role']==='admin'){
					?>




					<div class="panel-group" id="accordion" role="tablist" aria-multiselectable="true">
					<?php
					$condition = "where role='emp'";
					$all_emp=$db->select("*","users",$condition);
						foreach ($all_emp as $emp_list) {
						$uid=$emp_list['id'];	
					?>
					  <div class="panel panel-default">
					    <div class="panel-heading" role="tab" id="heading<?php echo $uid;?>" class="toggle-heading">
					      <h4 class="panel-title ">
					        <a class="collapsed" role="button" data-toggle="collapse" data-parent="#accordion" href="#collapse<?php echo $uid;?>" aria-expanded="false" aria-controls="collapse<?php echo $emp_list['id'];?>">
					           <div class="profile-circle"></div>|  <?php echo $emp_list['user'];?>
					        </a>
					      </h4>
					    </div>
					    <div id="collapse<?php echo $uid;?>" class="panel-collapse collapse" role="tabpanel" aria-labelledby="heading<?php echo $uid;?>">
					      <div class="panel-body">
					      <h2>working on</h2>
					      <form action="add_project.php" method="POST" role="form" class="npro-form" id="n-proj"
					      <input type=text name="uid" value="<?php echo $uid;?>" readonly hidden>
					      	<div class="form-group">
					      		<input type="text" class="form-control" id="n_proj" name="n_proj">
					      		<button type="submit" class="btn"><span>+</span></button>
							</div>
					    <div class="pro-list">
					    <?php
					    
					    $condition = "where uid='$uid'";
						$p_list=$db->select("*","assigned_pro",$condition);
						foreach ($p_list as $pro_list) {
						?>
						<h4><?php echo $pro_list['name'];?></h4>
						<?php
							}
					    ?>
					    </div>
					      </form>
					        
					      </div>
					    </div>
					  </div>
					<?php
						}
					?>
					</div>

					<?php
						}
						if($log_auth[0]['role']==='emp'){

							echo "welcome employee ".$user;
						}
 					?>

					</div>
					<div class="col-xs-3 col-sm-3 col-md-3 col-lg-3">

					</div>
				</div>
			</div>
		</div>


		<!-- jQuery -->
		<script src="dist/jquery.min.js"></script>
		<!-- Bootstrap JavaScript -->
		<script src="<?php echo BS_JS; ?>bootstrap.min.js"></script>
		<script src="<?php echo JS_DIR; ?>main.js"></script>
	</body>
</html>