<?php
include('connection.php');



$name = $_POST['rname'];
$phone = $_POST['rnumber'];
$address = $_POST['raddress'];
$password = $_POST['rpwd'];
$repassword = $_POST['rcpwd'];
$dorpdown = $_POST['rrole'];
$img = $_FILES['img']['name'];
$tmp_name = $_FILES['img']['tmp_name'];


// this if is chack data is not a null or something wory
if ($password == $repassword && !$name == null && !$img == null && !$password == null && !$repassword == null) {
    
// this move_upload is work like photo save in uploads folder
    move_uploaded_file($tmp_name,"../uploads/$img");

// this is query for insert data to database but this query not start it just have in $sql var
    $sql = "INSERT INTO user (name,mobile,address,password,role,photo,status,votes)
    VALUES ('$name', '$phone', '$address','$password','$dorpdown','$img' ,'0','0')";

// in this if there doing 3 thing at same time 1. insert query start 2.chack network is work and chack data in database 
    if (mysqli_query($con,$sql)) {
   // this is javascript code and alert use for pop massger
        echo' <script>
    alert("Your data is send to database");

     </script>';   
     // this is herder it like define besause it use for url things
     header("refresh: 0; url=../index.html");
    
    }
    else{
        echo" <script>
    alert('try agran!');
    </script>";
    header("refresh: 0; url=../file/routes/signup.html");
    }
 
}
else{
    echo" <script>
    alert('Chack your data');
    </script>";
    header("refresh: 0; url=../file/routes/signup.html");

}
?>