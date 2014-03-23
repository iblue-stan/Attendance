<?php session_start(); ?>
<!doctype html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <title>Modify/Update</title>
        <!-- Bootstrap -->
        <link href="css/bootstrap.min.css" rel="stylesheet" media="screen"></head>
    <body>
        <h5><a class="btn btn-primary" href='admin.php' role='botton'>Back</a></h5>
        <?php
        include_once("fixed.php");
        include("mysql_connect.inc.php");
        $user_phone = filter_input(INPUT_GET, ('user_phone'));
        $sql = "SELECT * FROM user WHERE user_phone='$user_phone' ";
        $r = mysql_query($sql);

        while ($row = mysql_fetch_assoc($r)) {
            $user_class = $row['user_class'];
            $user_phone = $row['user_phone'];
            $user_name = $row['user_name'];
            $user_password = $row['user_pwd'];
            ?>
            <div class="row">
                <form class="form-horizontal" role="form" name=form action='update_finish.php' method='POST'>
                    <table class='table' >
                        <tr>
                            <td><label class="control-label col-sm-3" for="inputSuccess3">Phone</label>
                                <div class="col-xs-3">
                                    <input type='text' placeholder=".col-xs-3" class='form-control' value= '<?php echo $user_phone; ?>' name='phone'>
                                </div>
                            </td>
                        </tr>
                        <tr>
                            <td><label class="control-label col-sm-3" for="inputSuccess3">Name</label>
                                <div class="col-xs-3">
                                    <input type='text' class='form-control' value= '<?php echo $user_name; ?>' name='name'>
                                </div>
                            </td>
                        </tr>
                        <tr>
                            <td><label class="control-label col-sm-3" for="inputSuccess3">Password</label>
                                <div class="col-xs-3"><input type='text' class='form-control' value= '<?php echo $user_password; ?>' name='pwd'></div>
                            </td>
                        </tr>
                        <tr>
                            <td>
                                <label class="control-label col-sm-3" for="inputSuccess3">Class</label>
                                <div class="col-xs-3"><select name="class" class='form-control' ></dvi>
                                        <option value="1" <?php if ($user_class == 1) echo "selected"; ?>>資訊部</option>
                                        <option value="2" <?php if ($user_class == 2) echo "selected"; ?>>市場部</option>
                                        <option value="3" <?php if ($user_class == 3) echo "selected"; ?>>行銷部</option>
                                    </select>
                            </td>
                        </tr>
                        <input type="hidden" value=<?php echo $user_phone; ?> name='$phone'>
                        <tr>
                            <td colspan=4>
                        <center>
                            <input class="btn btn-default" type="submit" value="送出">
                            <input class="btn btn-default" type="reset" value="重設">
                        </center>
                        </td>
                        </tr>
                    </table>
                </form>
            </div>
            <?php
        }
        ?>
    </body>
</html>