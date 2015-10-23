<?php
include("common/database.php");
include("common/function.php");
$user = $_POST['user'];
$pass = $_POST['pass'];

if (validateuser($user, $pass)) {
    $db = new Database;
    $conn = $db->connect();
    $condition = "where user='" . $user . "' and pass='" . $pass . "'";
    ?>
    <div class="row">
        <div class="col-xs-3 col-sm-3 col-md-3 col-lg-3">

        </div>
        <div class="col-xs-6 col-sm-6 col-md-6 col-lg-6" id="pro-div">
            <?php
            $log_auth = $db->select("*", "users", $condition);

            if ($log_auth[0]['role'] === 'admin') {
                ?>
                <div class="panel-group" id="accordion" role="tablist" aria-multiselectable="true">
                    <?php
                    $condition = "where role='emp'";
                    $all_emp = $db->select("*", "users", $condition);
                    foreach ($all_emp as $emp_list) {
                        $uid = $emp_list['id'];
                        ?>
                        <div class="panel panel-default">
                            <div class="panel-heading" role="tab" id="heading<?php echo $uid; ?>" class="toggle-heading">
                                <h4 class="panel-title ">
                                    <a class="collapsed" role="button" data-toggle="collapse" data-parent="#accordion" href="#collapse<?php echo $uid; ?>" aria-expanded="false" aria-controls="collapse<?php echo $emp_list['id']; ?>">
                                        <div class="profile-circle"></div>|  <?php echo $emp_list['user']; ?>
                                    </a>
                                </h4>
                            </div>
                            <div id="collapse<?php echo $uid; ?>" class="panel-collapse collapse" role="tabpanel" aria-labelledby="heading<?php echo $uid; ?>">
                                <div class="panel-body">
                                    <h2>working on</h2>
                                    <form action="add_project.php" method="POST" role="form" class="npro-form">
                                        <input type=text name="uid" value="<?php echo $uid; ?>" readonly hidden>
                                        <div class="form-group">
                                            <input type="text" class="form-control" id="n_proj<?php echo $uid; ?>" class="n_proj" name="n_proj">
                                            <button type="button" class="btn sub-btn"><span>+</span></button>
                                        </div>
                                        <div class="pro-list">
                                            <?php
                                            $condition = "where uid='$uid'";
                                            $p_list = $db->select("*", "assigned_pro", $condition);
                                            foreach ($p_list as $pro_list) {
                                                ?>
                                                <h4><?php echo $pro_list['name']; ?></h4>
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
<script src="<?php echo JS_DIR; ?>main.js"></script>
                <?php
            }
            if ($log_auth[0]['role'] === 'emp') {

                echo "<div style='color:white;'><h3>welcome employee " . $user."</h3> </div>";
            }
            ?>

        </div>
        <div class="col-xs-3 col-sm-3 col-md-3 col-lg-3">

        </div>
    </div>
    <?php
}
?>
<script src="<?php echo JS_DIR; ?>main.js"></script>