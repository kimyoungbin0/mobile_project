<?php 
session_start();
include('db.php');

$my_id = $_SESSION['mb_id'];


    $query = "select * from member where mb_id = '$my_id'" ;
    $query_run = mysqli_query($db, $query);
    $row = mysqli_fetch_array($query_run);
?>

<!DOCTYPE html>

<html lang="ko" xmlns="http://www.w3.org/1999/xhtml">
<head>
    <meta charset="utf-8" />
    <title>My Profile</title>
      <link rel="stylesheet" href="history.css" />  
     <script src="https://use.fontawesome.com/releases/v5.2.0/js/all.js"></script>

    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script> 
    <script type="text/javascript" src="history.js"></script>

}

  
</head>

<body>
    <div class="background">
    <span> <h1 class='logo'>PODO</h1> </span>

    <span class="up_button" style="text-align: center; padding-top: 50px;">
        <input type="text" name="user_nick" size="20" required="required", placeholder="친구">
        <button type="submit" name="login_btn">검색</button>
    </span>

    <button class="up_button" onclick="location.href='login_view.php'">LogOut</button>
    </div>
    <div class="wrapper" id="wrapper">
        <div class="img-area">
            <div class="inner-area">
                <?php echo '<img src="data:image;base64,'.base64_encode($row['profile']).'" alt="Image"" >'; ?>
            </div>
        </div>
        <div class="nick"><?php echo $_SESSION['mb_nick']; ?></div>
        <div class="social-icons">
            <a href="<?php echo $row['facebook']; ?>" class="facebook"><img src="facebook.png" /></a>
            <a href="<?php echo $row['instagram']; ?>" class="instagram"><img src="instagram.jpeg" /></a>
        </div>
        <div class="buttons">
            <button type="button" onclick="location.href='change_profile_view.php'">프로필 변경</button>
            <button type="button" onclick="location.href='put_photo_view.php'">사진 추가</button>
        </div>
        <br>
    
            <div class="row">
                <i class="fas fa-comment"></i>
                <span><?php echo $row['message']; ?></span>
            </div>

        </div>
    </div>
    
    <div class="box"> 

      <?php require 'history_view2.php' ?>
       
    </div> 

    
    





</body>
</html>

