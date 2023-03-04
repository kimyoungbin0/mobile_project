<?php
session_start();
include('db.php');



if(isset($_POST['user_id']) && isset($_POST['pass1']))
{
    
    $user_id=mysqli_real_escape_string($db,$_POST['user_id'] );
    $pass1=mysqli_real_escape_string($db,$_POST['pass1'] );
    
    if(empty($user_id))
    {
        header("location: login_view.php?error=아이디가 비어있어요");
        exit();
    }

    else if(empty($pass1))
    {
        header("location: login_view.php?error=비밀번호가 비어있어요");
        exit();
    }
    else
    {
       $sql="select * from member where mb_id = '$user_id'";
       $result=mysqli_query($db,$sql);

       if(mysqli_num_rows($result)===1)
       {
            $row=mysqli_fetch_assoc($result);
            $hash=$row['password'];

            if(password_verify($pass1, $hash))
            {
                $_SESSION['mb_id']=$row['mb_id'];
                $_SESSION['mb_nick']=$row['mb_nick'];
                $_SESSION['no']=$row['no'];
                $_SESSION['facebook']=$row['facebook'];
                $_SESSION['instagram']=$row['instagram'];
                $_SESSION['message']=$row['message'];
                $_SESSION['profile']=$row['profile'];

                header("location:history_view.php");
                exit();
            }
            else
            {
                header("location: login_view.php?error=로그인에 실패하셨습니다");
                exit();
            }
       }
       else
       {
            header("location: login_view.php?error=아이디가 잘못 입력되었습니다.");
            exit();
       }
    }
    
    
}
else
{ 
    header("location: register_view.php?success= 알수 없는 오류");
    exit();
   
}




?>