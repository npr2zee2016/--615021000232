<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.6.3/css/all.css" integrity="sha384-UHRtZLI+pbxtHCWp1t77Bi1L4ZtiqrqD80Kn4Z8NTSRyMA2Fd33n5dQ8lWUE00s/" crossorigin="anonymous"></head>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js"></script>
    <title>ระบบเก็บข้อมูลภาพยนต์</title>
</head>

<style>
    @import url('https://fonts.googleapis.com/css2?family=Athiti:wght@300&display=swap');
    @import url('https://fonts.googleapis.com/css2?family=Prompt:wght@200&display=swap');
    * {
        font-family: 'Athiti', sans-serif;
        /*font-family: 'Prompt', sans-serif;*/
    }
    .br-10 {
        border-radius: 10px;
    }
</style>

<body style="background-color: #F5F5F5;">
    
    <div class="container pt-5">
        <div class="row">
        <?php
            if(isset($_GET['page'])) {
                $p = $_GET['page'];
                if($p == 'insert') {
                    echo "insert page";
                } else if($p == 'update') {
                    echo "update page";
                }
            } else {
                require_once("view.php");
            }
        ?>
        </div>
    </div>

</body>
</html>