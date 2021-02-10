<?php
    require_once("dbcon.php");

    function convertDateTime($strDate) {
        $strYear = date("Y",strtotime($strDate))+543;
        $strMonth= date("n",strtotime($strDate));
        $strDays= date("N",strtotime($strDate));
        $strDay= date("j",strtotime($strDate));
        $strHour= date("H",strtotime($strDate));
        $strMinute= date("i",strtotime($strDate));
        $strSeconds= date("s",strtotime($strDate));
        $strMonthCut = Array("","ม.ค.","ก.พ.","มี.ค.","เม.ย.","พ.ค.","มิ.ย.","ก.ค.","ส.ค.","ก.ย.","ต.ค.","พ.ย.","ธ.ค.");
        $strDaysCut = Array("","จันทร์","อังคาร","พุธ","พฤหัสบดี","ศุกร์","เสาร์","อาทิตย์");
        $strMonthThai = $strMonthCut[$strMonth];
        $strDaysThai = $strDaysCut[$strDays];
        return "$strDaysThai $strDay $strMonthThai $strYear $strHour:$strMinute น.";
    }

    $sql = "SELECT * FROM movies";
    if(isset($_GET['search'])) {
        $sql = "SELECT * FROM movies WHERE movie_name LIKE '%{$_GET['search']}%'";
    }
    $result = $dbcon->query($sql);

    if ($result->num_rows > 0) {
?>
        <div class="col-lg-12 mb-4">
            <div class="d-flex">
                <div>
                    <form action="" method="GET">
                        <div class="input-group">
                            <input type="text" class="form-control border-0 shadow-sm" name="search" placeholder="ช่องค้นหา...">
                            <div class="input-group-append">
                                <button type="submit" class="btn btn-info">ค้นหา</button>
                            </div>
                        </div>
                    </form>
                </div>
                <div class="ml-auto">
                    <a href="?page=insert" class="btn btn-info br-10"> <span class="fas fa-plus"></span> เพิ่มภาพยนต์</a>
                </div>
            </div>
        </div>
<?php
        while($row = $result->fetch_assoc()) {
?>

            <div class="col-lg-4">
                <div class="card shadow-sm border-0 br-10">
                    <div class="card-body">
                        <div class="d-flex">
                            <div class="ml-auto"><b class="text-info" style="font-size: 12px;"><?php echo convertDateTime($row['movie_datetime']); ?></b></div>
                        </div>
                        <p class="mb-0"><b><?php echo $row['movie_name']; ?></b></p>
                        <div class="dropdown" style="position: absolute; top: -10px;">
                            <button class="btn btn-info btn-sm dropdown-toggle br-10" type="button" id="dropdownMenuButton" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                            เครื่องมือ
                            </button>
                            <div class="dropdown-menu border-0 br-10 shadow" aria-labelledby="dropdownMenuButton">
                            <a class="dropdown-item" href="?page=update&id=<?php echo $row['movie_id']; ?>">แก้ไข</a>
                            <a class="dropdown-item" href="#">ลบ</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

<?php
        }
    } else {
?>
    <div class="col-lg-12">
        <div class="card card-body shadow-sm border-0 br-10 text-center py-5">
            <h3 class="text-danger mb-5"><span class="far fa-times-circle"></span> ไม่พบข้อมูล</h3>
            <p>ไม่พบข้อมูลภาพยนต์ในระบบ, หากท่านต้องการเพิ่มภาพยนต์สามารถ "<b class="text-danger">คลิก</b>" ที่ปุ่มด้านล่างเพื่อเพิ่มได้เลย :)</p>
            <div class="col-lg-12 mt-4">
                <a href="?page=insert" class="btn btn-info br-10"><span class="fas fa-plus"></span> เพิ่มภาพยนต์</a>
                <a href="." class="btn btn-danger br-10"><span class="fas fa-angle-left"></span> ย้อนกลับ</a>
            </div>
        </div>
    </div>
<?php
    }
    $dbcon->close();

?>