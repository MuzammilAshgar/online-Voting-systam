<?php
include('connection.php');

session_start();
$number = $_POST['inumber'];
$password = $_POST['ipassword'];
$role = $_POST['role'];

$sql_chack = mysqli_query($con,"SELECT * FROM user where mobile ='$number' AND password ='$password' AND role='$role'");

if (!$con) {
    echo" <script>
    alert('chack your network');
    </script>";
    header("refresh: 3; url=../index.html");
    exit();
    
};
if (mysqli_num_rows($sql_chack)>0) {
    $userdata = mysqli_fetch_array($sql_chack, MYSQLI_ASSOC);
    $part = mysqli_query($con,"SELECT * FROM USER WHERE ROLE=2");
    $partdata = mysqli_fetch_all($part, MYSQLI_ASSOC);

    $_SESSION['userdata'] = $userdata;
    $_SESSION['partdata'] = $partdata;  


    echo" <script>
    alert('wait');
    </script>";
     header("refresh: 3; url=../file/routes/datacode.php");

}
else{
    echo" <script>
    alert('no data');
    </script>";
    header("refresh: 0; url=../index.html");
}






?>