<?php
include('connection.php');

$name = $_POST['rname'];
$phone = $_POST['rnumber'];
$address = $_POST['raddress'];
$password = $_POST['rpwd'];
$repassword = $_POST['rcpwd'];
$photo = $_FILES['name']['img'];
$tep_name = $_FILES['tep_name']['img'];
$dorpdown = $_POST['rrole'];

if ($password == $repassword) {
   
    $sql = "INSERT INTO user (name, mobile, password,adress,photo,role,status,votes)
     VALUES ($name,$phone,$password,$address,$photo,$dorpdown,0,0)";
        if ($sql) {
            echo '<script>
            alert("Error in query");
            windows.location = "../signup.html";
            </script>';
        }    
    
}
else{
    echo '<script>
    alert("Error in in password or data");
    windows.location = "../signup.html";
    </script>';

}
?>