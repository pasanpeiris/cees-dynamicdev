<?php 
require_once('../../Model/dbh.inc.php');
session_start();
$dbh = new dbh();
    if(isset($_POST['Login']))
    {
       if(empty($_POST['UName']) || empty($_POST['Password']))
       {
            header("location:../login.php?Empty= Please Fill in the Blanks");
       }
       else
       {
            $query="select * from user where BINARY username= BINARY '".$_POST['UName']."' and BINARY password='".$_POST['Password']."'";
            $result=$dbh->connect()->query($query);
            if(mysqli_fetch_assoc($result))
            {
                $_SESSION['User']=$_POST['UName'];
                header("location:../index.php");
            }
            else
            {
                header("location:../login.php?Invalid= Please Enter Correct User Name and Password ");
            }
       }
    }
    else
    {
        echo 'Not Working Now Guys';
    }
 
?>