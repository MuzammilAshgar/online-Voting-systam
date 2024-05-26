<?php
session_start();
include('connection.php');

$votes =$_POST['gvotes'];
$all_voter=$votes + 1;
$id = $_POST['gid'];
$userid = $_SESSION['userdata']['id'];

$updata_votes = mysqli_query($con,"UPDATE user SET votes='$all_voter' WHERE id = '$id' ");
$updata_status = mysqli_query($con,"UPDATE user SET status=1 WHERE id='$userid'");

if ($updata_votes AND $updata_status) {
    $part = mysqli_query($con,"SELECT * FROM USER WHERE ROLE=2");
    $partdata = mysqli_fetch_all($part, MYSQLI_ASSOC);

    $_SESSION['userdata']['status'] = 1;
    $_SESSION['partdata'] = $partdata;  

    echo" <script>
    alert('Nice job');
    </script>";
    header("refresh: 0; url=../file/routes/datacode.php");
}
else{
    echo" <script>
    alert('Some error show');
    </script>";
    header("refresh: 0; url=../index.html");
    session_destroy();
}

?>