<?php if (!isset($_SESSION)) {
    session_start();
} ?>
<?php
$a = $_SESSION['user_name'];
include "./includes/config.php";
$sql = "SELECT distinct * FROM `user`, `farm`, `subfarm` where 
user.user_name= '$a' and user.user_id=farm.user_id and farm.farm_id=subfarm.farm_id 
";
$result = mysqli_query($conn, $sql);


?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-GLhlTQ8iRABdZLl6O3oVMWSktQOp6b7In1Zl3/Jr59b6EGGoI1aFkw7cmDA6j6gD" crossorigin="anonymous" />
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js" integrity="sha384-w76AqPfDkMBDXo30jS1Sgez6pr3x5MlQ1ZAGC+nuZB+EYdgRZgiwxhTBTkF7CXvN" crossorigin="anonymous"></script>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.5.0/font/bootstrap-icons.css" />

    <link rel="stylesheet" href="assets/css/style.css">
    <link rel="stylesheet" href="assets/css/global.css" />
    <link rel="stylesheet" href="assets/css/grid.css" />

    <!-- <link rel="stylesheet" href="assets/css/defaultlayout.css" /> -->
    <link rel="stylesheet" href="assets/js/defaultlayout.js" />

    <link rel="stylesheet" href="assets/js/scheduleitem.js" />
    <link rel="stylesheet" href="assets/css/scheduleitem.css" />

    <link rel="stylesheet" href="assets/css/controlitem.css" />
    <link rel="stylesheet" href="assets/js/controlitem.js" />
    <title>Lịch hoạt động đèn</title>
</head>

<body>
    <?php
    // include_once("includes/header.php"); 
    ?>
    <div class="content">
        <div class="content">
            <div class="row g-0 text-center">
                <?php include_once("includes/sidebar.php"); ?>
                <div class="col-sm-6 col-md-8  ">
                    <div class="content">
                        <H2 class="title">LỊCH HOẠT ĐỘNG CỦA THIẾT BỊ</H2>
                        <p class="credit">
                            <!-- <i class="icon fas fa-calendar-week mr-5"></i>  -->
                            Lịch hoạt động
                            <i class="fas fa-caret-right mr-5"></i>
                            Hệ thống ánh sáng
                        </p>
                        <form action="" method="POST">
                            <div class="phankhu">
                                <select class="dropdown" placeholder="Please choose" name="phankhu">
                                    <?php
                                    if (mysqli_num_rows($result) > 0) {

                                        while ($row = mysqli_fetch_assoc($result)) {
                                    ?>

                                            <option method="POST" type="submit">

                                                <?php
                                                echo $row['subfarm_name']

                                                ?>
                                            </option>


                                    <?php
                                        }
                                    }
                                    ?>
                                    <input type="submit" name="" value="show">
                                </select>
                            </div>
                        </form>
                        <?php
                        $b = null;
                        if ($_SERVER['REQUEST_METHOD'] == 'POST') {
                            $b = $_POST['phankhu'];
                        }
                        ?>

                        <?php
                        $dv = "SELECT distinct * FROM `user`, `farm`, `subfarm`,`device`,`schedule` where 
                        user.user_name= '$a' and user.user_id=farm.user_id and farm.farm_id=subfarm.farm_id 
                        and subfarm.subfarm_name= '$b'and subfarm.subfarm_id=device.subfarm_id and device.device_name='den'
                        and schedule.device_id= device.device_id
                            ";
                        $result_dv = mysqli_query($conn, $dv);
                        ?>

                        <div class="schedule-container">
                            <div class="grid">
                                <div class="row">
                                    <?php
                                    if (mysqli_num_rows($result) > 0) {

                                        while ($row = mysqli_fetch_assoc($result_dv)) {
                                    ?>
                                            <div class="device c-6">
                                                <div class="schedule-2">
                                                    <div class="background12">
                                                        <div class="statuscolor"></div>
                                                        <div class="details">
                                                            <div class="chiu-sng-bui"><?php echo "Đèn " . $row['device_id'] ?></div>
                                                            <div class="xx">#1223xx</div>


                                                            <div class="date">
                                                                <img class="calendar-icon" alt="" src="assets/svg/calendar.svg" />
                                                                <div class="hng-ngy"><?php echo $row['date_type'] ?></div>
                                                            </div>
                                                            <div class="hours">
                                                                <img class="calendar-icon" alt="" src="assets/svg/clock.svg" />
                                                                <div class="hng-ngy"><?php echo $row['time_start'] . '-' . $row['time_end'] ?></div>
                                                            </div>
                                                        </div>
                                                        <!-- <img class="dots-icon" alt="" src="assets/svg//dots.svg" /> -->
                                                        <div class="dots-icon" placeholder="">
                                                            <select>
                                                                <button name="edit">
                                                                    <option> Edit </option>
                                                                </button>
                                                                <button name="delete">
                                                                    <option> Delete </option>
                                                                </button>

                                                            </select>
                                                        </div>

                                                    </div>
                                                </div>
                                            </div>

                                    <?php
                                        }
                                    }
                                    ?>








                                </div>
                            </div>
                        </div>

                    </div>

                </div>

            </div>
        </div>
    </div>
    <script src=" assets/css/defaultlayout.js">
    </script>

</body>

</html>