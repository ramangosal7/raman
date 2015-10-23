	<?php
include("constant.php");
?>
		<!-- Bootstrap CSS -->
		<link href="<?php echo BS_CSS; ?>bootstrap.min.css" rel="stylesheet">
		<link rel="stylesheet" href="<?php echo CSS_DIR;?>style.css">

				<div class="row">
					<div class="col-xs-3 col-sm-3 col-md-3 col-lg-3">

					</div>
					<div class="col-xs-6 col-sm-6 col-md-6 col-lg-6" id="ajax-data">
						<form action="auth.php" method="POST" id="login-form">
							<legend>LOGIN</legend>
							<div class="form-group">
								<input type="text" class="form-control" id="user" placeholder="username" name="user">
							</div>
							<div class="form-group">
								<input type="text" class="form-control" id="pass" placeholder="password" name="pass">
							</div>
							<h5 id="login-error">Wrong Username Or Password</h5>
							<button type="submit"  class="btn btn-primary col-md-12" id="login-btn" name="login-btn">Submit</button>
						</form>
					</div>
					<div class="col-xs-3 col-sm-3 col-md-3 col-lg-3">

					</div>
				</div>
			
		<script src="<?php echo JS_DIR; ?>main.js"></script>