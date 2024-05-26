<?php
session_start();
if(!isset($_SESSION['userdata'])){
    echo" <script>
        alert('what you are try to do hack? ha');
        </script>";
        header("refresh: 0; url=../../index.html");
};

$userdata = $_SESSION['userdata'];
$partdata = $_SESSION['partdata'];

if($_SESSION['userdata']['status'] ==0){
    $status = "<b style='color:red'> not voted</b>";
}
else{
    $status = "<b style='color:green'> voted</b>";
}
?>

<html lang="en">
<head>
    <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
            <title>online-Voting-systam-dashboard</title>
            <link rel="stylesheet" href="../css/Css1.css">
  
</head>
<body>          
    <div id="maindiv">
     <div id="dhaeder">
     <a href="../../index.html"><button id="dbackbtn">back</button></a>
      <a href="out.php"> <button id="dout" >loginout</button></a>
        <h1>online-Voting-systam</h1>
         </div>
         <hr>
            <div id="profile">
        
            
            <center> 
                <img src="../../uploads/<?php echo
                 $userdata['photo'];
                 ?>"
                 height = "100"
                 width = "100"></center>
            <br><br><b>Name:</b><?php echo $userdata['name'];?><br><br>
            <b>Phone number:</b><?php echo $userdata['mobile'];?><br><br>
            <b>Address:</b><?php echo $userdata['address'];?><br><br>
            <b>Status:</b><?php echo $status;?><br><br>

             </div>
                <div id="group">
                    <?php
                    if($_SESSION['partdata']){

                        for ($i=0; $i < count($partdata) ; $i++) { 
                            ?>
                            <div>
                                <img id="part_img" src="../../uploads/<?php
                                echo $partdata[$i]['photo'];?>"
                                
                                height ="100"
                                width = "100">

                                <div id="info">
                                <b>Group Name : <?php echo $partdata[$i]['name']?></b><br>
                                <br>
                                <b>Votes: <?php echo $partdata[$i]['votes']?></b></div><br>
                                <Br><Br><Br>
                                
                                <form action="../../api/vote.php" method="post">
                                <input type="hidden" name="gvotes" value="<?php echo $partdata[$i]['votes'] ?>">
                                <input type="hidden" name="gid" value="<?php echo $partdata[$i]['id'] ?>">
                                <?php
                                if($_SESSION['userdata']['status']== 0){  
                                    ?>
                                <input type="submit" name="bvotes" value="vote" id="votebtn" style="background-color:green; color:white">
                                <?php
                                }
                                else{
                                    ?>
                                <button disabled type="button" style=" background-color:red; color:black">vote</button>
                                    <?php
                                }

                                ?>
                                </form>
                            </div>
                            <br>
                            <hr>
                            <?php
                            }
                        }
                                    else{
            
                                    }
        ?>
        </div>


    </div>
   
    
    

</body>
</html>