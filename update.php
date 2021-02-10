<?php
    require_once('dbcon.php');
    date_default_timezone_set("Asia/Bangkok");

    if(isset($_POST['datetime'])) {
        $sql = "UPDATE movies SET movie_name = '{$_POST['name']}', movie_datetime = '{$_POST['datetime']}' WHERE movie_id = '{$_GET['id']}'";
        
        if ($dbcon->query($sql) === TRUE) {
?>
            <script>
                Swal.fire({
                    icon: 'success',
                    title: 'สำเร็จ!',
                    text: "แก้ไขภาพยนต์สำเร็จเเล้ว :)"
                })
            </script>
<?php
        } else {
?>
            <script>
                Swal.fire({
                    icon: 'error',
                    title: 'เกิดข้อผิดพลาด!',
                    text: "ไม่สามารถแก้ไขภาพยนต์ได้โปรดตรวจสอบข้อมูลอีกครั้ง"
                })
            </script>
<?php
        }
    }

    $sql = "SELECT * FROM movies WHERE movie_id = '{$_GET['id']}'";
    $result = $dbcon->query($sql);

    if ($result->num_rows > 0) {
        $row = $result->fetch_assoc();
?>

<div class="col-lg-3"></div>
<div class="col-lg-6">
    <div class="card card-body shadow-sm border-0 br-10 p-5">
        <h2 class="text-center text-warning mb-5"><b>แก้ไขภาพยนต์</b></h2>
        <form action="?page=update&id=<?php echo $_GET['id']; ?>" method="POST">
            <div class="form-group row">
                <div class="col-lg-3 my-auto"><label for="name"><b>ชื่อภาพยนต์</b></label></div>
                <div class="col-lg-9"><input type="text" class="form-control" name="name" id="name" placeholder="โปรดระบุชื่อภาพยนต์..." value="<?php echo $row['movie_name']; ?>"></div>
            </div>
            <div class="form-group row">
                <div class="col-lg-3 my-auto"><label for="datetime"><b>เวลาที่เริ่มฉาย</b></label></div>
                <div class="col-lg-9"><input type="datetime-local" class="form-control" name="datetime" id="datetime" placeholder="โปรดระบุเวลาที่เริ่มฉาย..."
                value="<?php echo date("Y-m-d", strtotime($row['movie_datetime'])) . "T" . date("H:i", strtotime($row['movie_datetime'])); ?>"></div>
            </div>
            <div class="d-flex">
                <div class="ml-auto">
                    <button type="submit" class="btn btn-success br-10" name="update">
                        <span class="far fa-check-circle"></span> ยืนยัน
                    </button>
                    <a href="." class="btn btn-danger br-10"><span class="fas fa-angle-left"></span> ย้อนกลับ</a>
                </div>
            </div>
        </form>
    </div>
</div>

<?php
    } else {
        echo "ไม่พบข้อมูล";
    }
?>