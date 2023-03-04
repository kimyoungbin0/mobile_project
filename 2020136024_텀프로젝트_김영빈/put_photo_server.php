<?php
session_start();

include "db.php";

$my_id = $_SESSION['mb_id'];
$year=mysqli_real_escape_string($db,$_POST['year'] );
$text1=mysqli_real_escape_string($db,$_POST['text1'] );
$text2=mysqli_real_escape_string($db,$_POST['text2'] );
$text3=mysqli_real_escape_string($db,$_POST['text3'] );
$text4=mysqli_real_escape_string($db,$_POST['text4'] );

if(isset($_POST['upload']))
{
    $file = addslashes(file_get_contents($_FILES["image"]["tmp_name"]));
    $query = "select * from history where mb_id = '$my_id' and year = $year" ;
    $query_run = mysqli_query($db, $query);
    $row = mysqli_fetch_array($query_run);
  
    if($row){
        $query = "update history set image='$file',text1='$text1',text2='$text2',text3='$text3',text4='$text4' where mb_id='$my_id' and year='$year' ";
        mysqli_query($db, $query);
        echo '<script type="text/javascript"> alert("image profile uploaded"); </script>';
    }
    else{
        $query = "insert into history (image,mb_id,year,text1,text2,text3,text4) values ('$file','$my_id',$year,'$text1','$text2','$text3','$text4')";
        mysqli_query($db, $query);
        echo '<script type="text/javascript"> alert("image profile uploaded1"); </script>';
    }
    header("location: history_view.php");
    exit();
    
    
}
?>