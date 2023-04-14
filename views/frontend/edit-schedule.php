<?php
// require "connect.php";


?>
<?php
// if (isset($_GET["id"])) {
//     $id = $_GET["id"];
// }
?>
<?php
// $sql = "SELECT *FROM products WHERE id=$id";
// $qr = mysqli_query($conn, $sql);
// $rows = mysqli_fetch_assoc($qr);

// ?>
 <?php
// if (isset($_POST["edit"])) {

//     $id = $_POST["id"];
//     $name = $_POST["name"];
//     $description = $_POST["description"];
//     $price = $_POST["price"];
//     $image = $_POST["image"];
//     if (
//         !empty($id) &&
//         !empty($name) &&
//         !empty($description) &&

//         !empty($price) &&

//         !empty($image)

//     ) {
//         $sql = "UPDATE products SET name ='$name',id = '$id', description ='$description', price ='$price', image ='$image'
//             WHERE id = $id";
//         $qr = mysqli_query($conn, $sql);
//         header("location:a.php");
//     }
// }



?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="icon" href="../../img/favicon.ico">
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.15.4/css/all.css" />
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.15.4/css/all.css" />
    <link rel="stylesheet" href="style.css">
    <title> Edit Schedule</title>
    <style>
        body {
    margin: 0;
    font-family: var(--bs-body-font-family);
    font-size: var(--bs-body-font-size);
    font-weight: var(--bs-body-font-weight);
    line-height: var(--bs-body-line-height);
    color: var(--bs-body-color);
    text-align: var(--bs-body-text-align);
    background-color: var(--bs-body-bg);
    -webkit-text-size-adjust: 100%;
    -webkit-tap-highlight-color: transparent;
    margin: 30px;
}
        
    </style>
    
</head>


<body?>
    <h3> Edit Schedule</h3>
    <form method="post" action="">
        <div class="mb-3">
            <label for="exampleInputEmail1" class="form-label">ID</label>
            <input type="integer" value="<?php 
            // echo $rows['id'] 
            ?>" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" name="id">

        </div>
        <div class="mb-3">
            
            <!-- <input type="time" value="<?php
            //  echo $rows['name'] 
             ?>" class="form-control" id="exampleInputPassword1" name="name"> -->
             <label for="exampleInputEmail1" class="form-label">From:</label><br>
             <input type="time" id="time1" value="09:12" min="09:00" max="12:00">
        </div>
        <div class="mb-3">
            
            <!-- <input type="time" value="<?php
            //  echo $rows['name'] 
             ?>" class="form-control" id="exampleInputPassword1" name="name"> -->
             <label for="exampleInputEmail1" class="form-label">To:</label><br>
             <input type="time" id="time1" value="09:12" min="09:00" max="12:00">
        </div>
       
        <div class="mb-3 form-check">
            <input type="checkbox" class="form-check-input" id="exampleCheck1">
            <label class="form-check-label" for="exampleCheck1">Check me out</label>
        </div>
        <button type="submit" class="btn btn-primary" name="edit">Submit</button>
    </form>
    </body>