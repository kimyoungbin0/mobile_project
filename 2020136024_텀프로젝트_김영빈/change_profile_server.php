<?php
session_start();
include('db.php');
$my_id = $_SESSION['mb_id'];
$facebook=mysqli_real_escape_string($db,$_POST['facebook'] );
$instagram=mysqli_real_escape_string($db,$_POST['instagram'] );
$message=mysqli_real_escape_string($db,$_POST['message'] );


if(isset($_POST['upload']))
{
    $file = addslashes(file_get_contents($_FILES["image"]["tmp_name"]));
  
    $query = "update member set profile='$file',facebook='$facebook',instagram='$instagram',message='$message' where mb_id='$my_id'";
     
    

    if(mysqli_query($db, $query))
    {

        header("location: history_view.php");
        echo '<script type="text/javascript"> alert("profile uploaded"); </script>';
        exit();

    }else
    {
        header("location: history_view.php");
        echo '<script type="text/javascript"> alert("profile not uploaded"); </script>';
        exit();
    }
    
}    
   

?>