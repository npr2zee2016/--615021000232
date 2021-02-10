<?php
    require_once('dbcon.php');
    if(isset($_POST['login'])) {
        $sql = "SELECT * FROM users WHERE user_username = '{$_POST['username']}' AND user_pin = '{$_POST['password']}'";
        $result = $dbcon->query($sql);
        if($result->num_rows > 0) {
            $row = $result->fetch_assoc();
            $_SESSION['user_id'] = $row['user_id'];
            if(isset($_SESSION['user_id'])) {
                header( "location: ." );
            }
        } else {
            echo 'รหัสผิด';
        }
    }
?>

<div class="col-lg-3"></div>
<div class="col-lg-6">
    <div class="card card-body shadow-sm border-0">
        <form action="." method="post">
            <div class="form-group">
                <label for="username">Username</label>
                <input type="text" class="form-control" name="username" id="username" aria-describedby="emailHelp" placeholder="โปรดระบุรหัสผู้ใช้...">
            </div>
            <div class="form-group">
                <label for="password">Password</label>
                <input type="password" class="form-control" name="password" id="password" placeholder="โปรดระบุรหัสผ่าน...">
            </div>
            <button type="submit" class="btn btn-primary" name="login">เข้าสู่ระบบ</button>
        </form>
    </div>
</div>