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

    <link rel="stylesheet" href="assets/css/schedule.css" />

    <link rel="stylesheet" href="assets/css/scheduleitem.css" />

    <link rel="stylesheet" href="assets/css/controlitem.css" />
    <link rel="stylesheet" href="assets/js/controlitem.js" />
    <title>Điều khiển đèn</title>
</head>

<body>
    <?php include_once("includes/header.php"); ?>
    <div class="content">
        <div class="content">
            <div class="row g-0 text-center">
                <?php include_once("includes/sidebar.php"); ?>
                <div class="col-sm-6 col-md-8  ">
                    <div class="content">
                        <H2 class="title">ĐIỀU KHIỂN THIẾT BỊ</H2>
                        <p class="credit"> <i class="icon fas fa-calendar-week mr-5"></i> Điều khiển<i class="fas fa-caret-right mr-5"></i> Hệ thống ánh sáng</p>
                        <div class="phankhu">
                            <select style=" 
                            float: center;
                                color: var(--text);
                                font-size: 18px;
                               width: 200px;
                                font-weight: 600;
                                text-align: center;
                               border-radius: 10px;
                               margin-bottom: 20px;
                               margin-left: 100px;
                               
                                border: 3px solid blue;
                               " class="dropdown" placeholder="Please choose">
                                <option>Phân khu A</option>
                                <option>Phân khu B</option>
                                <option>Phân khu C</option>
                                <option>Phân khu D</option>
                            </select>
                        </div>

                        <div class="dev-control-container">
                            <div class="grid">
                                <div class="row">
                                    <div class="dev-control c-6">
                                        <div class="dev-control-content-container">
                                            <div class="dev-control-content">
                                                <div class="Den"></div>
                                                <div class="dev-text">
                                                    <b class="dev-name">Đèn</b>
                                                    <div class="dev-code">#abc12345</div>
                                                </div>
                                            </div>
                                            <div class="control-content">
                                                <p style="font-weight: bold;">Mức:</p>
                                                <div class="slider-content">
                                                    <input type="range" min="0" max="10" step="1" value="0">
                                                    <div class="value">0</div>
                                                </div>


                                                <label class="switch">
                                                    <input type="checkbox">
                                                    <div>
                                                        <span></span>
                                                    </div>
                                                </label>
                                            </div>
                                        </div>


                                    </div>

                                    <div class="dev-control c-6">
                                        <div class="dev-control-content-container">
                                            <div class="dev-control-content">
                                                <div class="Den"></div>
                                                <div class="dev-text">
                                                    <b class="dev-name">Đèn</b>
                                                    <div class="dev-code">#abc12345</div>
                                                </div>
                                            </div>
                                            <div class="control-content">
                                                <p style="font-weight: bold;">Mức:</p>
                                                <div class="slider-content">
                                                    <input type="range" min="0" max="10" step="1" value="0">
                                                    <div class="value">0</div>
                                                </div>


                                                <label class="switch">
                                                    <input type="checkbox">
                                                    <div>
                                                        <span></span>
                                                    </div>
                                                </label>
                                            </div>
                                        </div>


                                    </div>
                                    <div class="dev-control c-6">
                                        <div class="dev-control-content-container">
                                            <div class="dev-control-content">
                                                <div class="Den"></div>
                                                <div class="dev-text">
                                                    <b class="dev-name">Đèn</b>
                                                    <div class="dev-code">#abc12345</div>
                                                </div>
                                            </div>
                                            <div class="control-content">
                                                <p style="font-weight: bold;">Mức:</p>
                                                <div class="slider-content">
                                                    <input type="range" min="0" max="10" step="1" value="0">
                                                    <div class="value">0</div>
                                                </div>


                                                <label class="switch">
                                                    <input type="checkbox">
                                                    <div>
                                                        <span></span>
                                                    </div>
                                                </label>
                                            </div>
                                        </div>


                                    </div>
                                    <div class="dev-control c-6">
                                        <div class="dev-control-content-container">
                                            <div class="dev-control-content">
                                                <div class="Den"></div>
                                                <div class="dev-text">
                                                    <b class="dev-name">Đèn</b>
                                                    <div class="dev-code">#abc12345</div>
                                                </div>
                                            </div>
                                            <div class="control-content">
                                                <p style="font-weight: bold;">Mức:</p>
                                                <div class="slider-content">
                                                    <input type="range" min="0" max="10" step="1" value="0">
                                                    <div class="value">0</div>
                                                </div>


                                                <label class="switch">
                                                    <input type="checkbox">
                                                    <div>
                                                        <span></span>
                                                    </div>
                                                </label>
                                            </div>
                                        </div>


                                    </div>

                                </div>
                            </div>
                        </div>
                    </div>

                </div>

            </div>
        </div>
    </div>
    <script src="assets/css/defaultlayout.js"></script>
    <script src="assets/css/controlitem.js"></script>
</body>

</html>