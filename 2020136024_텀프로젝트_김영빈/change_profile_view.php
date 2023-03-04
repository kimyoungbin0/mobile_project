<?php 
session_start();
include('db.php');
$my_id = $_SESSION['mb_id'];


    $query = "select * from member where mb_id = '$my_id'" ;
    $query_run = mysqli_query($db, $query);
    $row = mysqli_fetch_array($query_run);
?>


<!DOCTYPE html>
<html lang="en">
<head>
    
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>프로필 변경</title>

    <link rel="stylesheet" type="text/css" href="menu_black.css">
    <!-- <link rel="stylesheet" type="text/css" href="css/join.css"> -->
</head>
<body>
    <form action="change_profile_server.php" method="post" enctype="multipart/form-data">
    <h2>프로필 변경</h2>
    

    <?php if(isset($_GET['error'])) { ?>
        <p class="error"><?php echo $_GET['error']; ?></p>
    <?php } ?>

    <?php if(isset($_GET['success'])) { ?>
        <p class="success"><?php echo $_GET['success']; ?></p>
    <?php } ?>

    <label>프로필 변경</label>
    <input type="file" name="image" id="image" /> 

    <label>페이스북 링크</label>
    <input type="text" placeholder="페이스북 링크..." name="facebook" value="<?php  echo $row['facebook']; ?>">

    <label>인스타 링크</label>
    <input type="text" placeholder="인스타 링크..." name="instagram" value="<?php echo $row['instagram']; ?>">

    <label>프로필 글</label>
    <input type="text" placeholder="프로필 글..." name="message" value="<?php echo $row['message']; ?>">

    <button type="submit" name="upload">저장</button>
    

    </form>
</body>
</html>

