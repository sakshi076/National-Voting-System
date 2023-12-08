<?php
session_start();
include('connect.php');

$username=$_POST['username'];
$mobile=$_POST['mobile'];
$password=$_POST['password'];
$std=$_POST['std'];
$status=$_POST['status'];

$result=mysqli_query($con,"select * from userdata where mobile='$mobile'and password='$password' and standard='$std'");

    if(mysqli_num_rows($result)>0){

        $resultgroup=mysqli_query($con,"select username,photo,votes,id from userdata where standard='group'");
        if(mysqli_num_rows($resultgroup)>0){
            $groups=mysqli_fetch_all($resultgroup,MYSQLI_ASSOC);
            $_SESSION['groups']=$groups;
        }
    
        $data=mysqli_fetch_array($result);
        $_SESSION['id']=$data['id'];
        $_SESSION['status']=$data['status'];
        $_SESSION['data']=$data;

        if($_SESSION['status']==1){
            echo '<script>
            alert("You have voted already!!")
            window.location="../partials/index.php";
            </script>';
        }
        else{
            echo '<script>
            window.location="../partials/dashboard.php";
            </script>';
        }
    
        
    
    }else if($std=='admin'){
            echo '<script>
            window.location="../partials/dashboard1.php";
            </script>';
    }
    
    else{
        echo '<script>
        alert("Invailed credentials")
        window.location="../partials/index.php";
        </script>';
    }


?>