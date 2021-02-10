<?php
    require_once('dbcon.php');
    if(isset($_POST['datetime'])) {
        $sql = "INSERT INTO movies (movie_name, movie_datetime)
        VALUES ('{$_POST['name']}', '{$_POST['datetime']}')";
        
        if ($dbcon->query($sql) === TRUE) {
?>
            <script>
                Swal.fire({
                    icon: 'success',
                    title: 'สำเร็จ!',
                    text: "เพิ่มภาพยนต์สำเร็จเเล้ว :)"
                })
            </script>
<?php
        } else {
?>
            <script>
                Swal.fire({
                    icon: 'error',
                    title: 'เกิดข้อผิดพลาด!',
                    text: "ไม่สามารถเพิ่มภาพยนต์ได้โปรดตรวจสอบข้อมูลอีกครั้ง"
                })
            </script>
<?php
        }
    }
?>

<div class="col-lg-3"></div>
<div class="col-lg-6">
    <div class="card card-body shadow-sm border-0 br-10 p-5">
        <h2 class="text-center text-info mb-5"><b>เพิ่มภาพยนต์</b></h2>
        <form action="?page=insert" method="POST">
            <div class="form-group row">
                <div class="col-lg-3 my-auto"><label for="name"><b>ชื่อภาพยนต์</b></label></div>
                <div class="col-lg-9"><input type="text" class="form-control" name="name" id="name" placeholder="โปรดระบุชื่อภาพยนต์..."></div>
            </div>
            <div class="form-group row">
                <div class="col-lg-3 my-auto"><label for="datetime"><b>เวลาที่เริ่มฉาย</b></label></div>
                <div class="col-lg-9"><input type="datetime-local" class="form-control" name="datetime" id="datetime" placeholder="โปรดระบุเวลาที่เริ่มฉาย..."></div>
            </div>
            <div class="d-flex">
                <div class="ml-auto">
                    <button type="submit" class="btn btn-success br-10" name="insert">
                        <span class="far fa-check-circle"></span> ยืนยัน
                    </button>
                    <a href="." class="btn btn-danger br-10"><span class="fas fa-angle-left"></span> ย้อนกลับ</a>
                </div>
            </div>
        </form>
    </div>
</div>