<?php

include('connect.php');

$username=$_POST['username'];
$mobile=$_POST['mobile'];
$password=$_POST['password'];
$cpassword=$_POST['cpassword'];
$image=$_FILES['photo']['name'];
$tmp_name=$_FILES['photo']['tmp_name'];
$std=$_POST['std'];

if($password!=$cpassword){
    echo '<script>
    alert("Passwords do not match");
    window.location="../partials/registration.php";
    </script>';
}

else{

    move_uploaded_file($tmp_name,"../uploads/$image");

    $result=mysqli_query($con,"insert into userdata (username,mobile,password,photo,standard,status,votes) values ('$username','$mobile','$password','$image','$std',0,0)");

    if($result){
    echo '<script>
    alert("Registration succesfull");
    window.location="../partials/index.php";
    </script>';
    }
    else{
        die("registration unsuccessfull".mysqli_connect_error());
    }
}

?>  