<?php 
session_start();
include('db.php');

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>사진 추가</title>

    <link rel="stylesheet" type="text/css" href="menu_black.css">
    <!-- <link rel="stylesheet" type="text/css" href="css/join.css"> -->
</head>
<body>
    <form action="put_photo_server.php" method="post" enctype="multipart/form-data">
    <h2>사진 추가</h2>
    

    <?php if(isset($_GET['error'])) { ?>
        <p class="error"><?php echo $_GET['error']; ?></p>
    <?php } ?>

    <?php if(isset($_GET['success'])) { ?>
        <p class="success"><?php echo $_GET['success']; ?></p>
    <?php } ?>


    <select name="year" id="year">
    <option value=2010>2010</option>
    <option value=2011>2011</option>
    <option value=2012>2012</option>
    <option value=2013>2013</option>
    <option value=2014>2014</option>
    <option value=2015>2015</option>
    <option value=2016>2016</option>
    <option value=2017>2017</option>
    <option value=2018>2018</option>
    <option value=2019>2019</option>
    <option value=2020>2020</option>
    <option value=2021>2021</option>
    <option value=2022>2022</option>
    </select>

    <label>사진 추가</label>
    <input type="file" name="image" id="image" /> 

    <label>사진 글 남기기</label>
    <input type="text1" placeholder="글 입력..." name="text1" >

    <label>사진 글 남기기</label>
    <input type="text2" placeholder="글 입력..." name="text2">

    <label>사진 글 남기기</label>
    <input type="text3" placeholder="글 입력..." name="text3">

    <label>사진 글 남기기</label>
    <input type="text4" placeholder="글 입력..." name="text4">


    <button type="submit" name="upload">저장</button>
    

    </form>
</body>
</html>

