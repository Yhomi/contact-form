<?php
    session_start();
    $_SESSION['Message']='';
    $_SESSION['MsgClass']='';

    if(isset($_POST['submit'])){
        $name=htmlspecialchars($_POST['name']);
        $email=htmlspecialchars($_POST['email']);
        $subject=htmlspecialchars($_POST['subject']);
        $msg=htmlspecialchars($_POST['msg']);
        if(empty($name) || empty($email) || empty($subject) || empty($msg)){
            $_SESSION['Message']="Please Fill in all Fields";
            $_SESSION['MsgClass']='alert-danger';
            header("Location:index.php");
        }else{
            if(!filter_var($email,FILTER_VALIDATE_EMAIL)){
                $_SESSION['Message']="Please use a Valid E-mail";
                $_SESSION['MsgClass']="alert-danger";
                header("Location:index.php");
            }else{
                if(mail($email,$subject,$msg)){
                    $_SESSION['Message']="Message Sent";
                    $_SESSION['MsgClass']="alert-success";
                    header("Location:index.php");
                }else{
                    $_SESSION['Message']="Failed to Send";
                    $_SESSION['MsgClass']="alert-danger";
                    header("Location:index.php");
                }
                
            }
        }
    }
?>