<?php
include("constant.php");
include("common/database.php");
$db = new Database;
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
        <link rel="stylesheet" href="<?php echo CSS_DIR; ?>style.css">

        <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
        <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
        <!--[if lt IE 9]>
                <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
                <script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
        <![endif]-->
    </head>
    <body>
        <div class="container" id="main-id">
            <h3 class="text-center text-uppercase "><a href="javascript:void(0);" title="" onclick="loadform();">Login</a></h3>
        </div>

        <!-- jQuery -->
        <script src="dist/jquery.min.js"></script>
        <!-- Bootstrap JavaScript -->
        <script src="<?php echo BS_JS; ?>bootstrap.min.js"></script>
        <script src="<?php echo JS_DIR; ?>main.js"></script>
    </body>
</html>