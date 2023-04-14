<?php if(!isset($_SESSION)) { session_start(); } ?>
<header>
    <div class="header">
        <div class="logo">
            <img src="assets/img/logo.png" alt="">
        </div>

        <div class="dropdown">
            <button class="btn btn-secondary dropdown-toggle" type="button" data-bs-toggle="dropdown" aria-expanded="false">
                <?php echo "Trang trại của " .$_SESSION['user_name'] ?>
            </button>
           
        </div>
        <div class="icon">
            <i class="bi bi-bell-fill" style="font-size: 30px;"></i>
            <i class="bi bi-chat-fill" style="font-size: 30px;"></i>
            <a href="/user/edit_profile.html">
                <i class="bi bi-person-circle" style="color: #3366CC;font-size: 30px;"></i>
            </a>

        </div>


    </div>
</header>