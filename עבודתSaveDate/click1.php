<?php
//connect to db
$mysqli = new mysqli("localhost", "root", "", "th");
date_default_timezone_set('Asia/Jerusalem');


if(isset($_GET['actionType'])){
    if($_GET['actionType']=='in'){
        $timecliked=date('Y-m-d H:i:s');
        $query ="INSERT INTO `currentdate` ";
        $query.="(dateClicked)";
        $query.="VALUES ";
        $query.="( '$timecliked');";

    }
    else if($_GET['actionType']=='out'){
        $finishTime=date('Y-m-d H:i:s');
        $query ="UPDATE `currentdate` SET ";
        $query.="`dateClicked1` = '$finishTime'";
        
    }

       
        
    

    //run query
    $result = mysqli_query($mysqli,$query);  
}

$Wqq="SELECT *,MIN(TIMEDIFF(`dateClicked1`,`dateClicked`)) AS `remaining` FROM `currentdate`";
$Wrs = mysqli_query($mysqli,$Wqq);

$Wqw="SELECT *, MAX(TIMEDIFF(`dateClicked1`,`dateClicked`)) AS `remaining1` FROM `currentdate`";
$Wrn = mysqli_query($mysqli,$Wqw);

$Wqx="SELECT COUNT(dateClicked) AS timeClicked2  FROM `currentdate` ";
$Wrm = mysqli_query($mysqli,$Wqx);

$avg="SELECT SEC_TO_TIME(AVG(TIME_TO_SEC(`dateClicked`)))  AS timeClicked4  FROM `currentdate` ";
$avf = mysqli_query($mysqli,$avg);

$Wqe="SELECT *,SEC_TO_TIME(SUM(SEC_TO_TIME(TIMEDIFF(`dateClicked1`,`dateClicked`)))) AS `remaining2` FROM `currentdate`";
$Wrv = mysqli_query($mysqli,$Wqe);

$Wqb="SELECT SEC_TO_TIME(SUM(SEC_TO_TIME(`dateClicked`))) AS timeClicked5 FROM `currentdate`; ";
$Wrb = mysqli_query($mysqli,$Wqb);

$Wqs="SELECT *,SUM(TIMEDIFF(`dateClicked1`,`dateClicked`)) AS `remaining3` FROM `currentdate`";
$Wrk = mysqli_query($mysqli,$Wqs);

$Wqi="SELECT *,SUM(`dateClicked`) AS `remaining4` FROM `currentdate`";
$Wrf = mysqli_query($mysqli,$Wqi);


?>


<!doctype html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <title>Save Date And Claucate It</title>
    </head>
    <body>
    <form action="" method="get">
    <p>   
    <?php while($row= mysqli_fetch_assoc($Wrs)) {
                   $output = "Minmum diffrence value is"." ".$row['remaining'];
                   echo $output;
                }?></p>
                <p> 
                <?php while($row= mysqli_fetch_assoc($Wrn)) {
                   $output1 = "maximum diffrence value is"." ".$row['remaining1'];
                   echo $output1; 
                }?>
                </p>
                <p> 
                <?php while($row= mysqli_fetch_assoc($Wrm)) {
                   $output2 = "Button Clicked"." ".$row['timeClicked2'];
                   echo $output2; 
                }?></p>
                <p> 
                <?php while($row= mysqli_fetch_assoc($avf)) {
                   $output3 = "Avg Time"." ".$row['timeClicked4'];
                   echo $output3; 
                }?></p>
                <p> 
                <?php while($row= mysqli_fetch_assoc($Wrv)) {
                   $output4 = "Sum Diffrence Time"." ".$row['remaining2'];
                   echo $output4; 
                }?></p>
                <p> 
                <?php while($row= mysqli_fetch_assoc($Wrb)) {
                   $output5 = "Sum Button Clicked"." ".$row['timeClicked5'];
                   echo $output5; 
                }?></p>
                <p>
                <?php while($row= mysqli_fetch_assoc($Wrk)){
                    $output7 =$row['remaining3'];
                }
                    while($row= mysqli_fetch_assoc($Wrf)){
                        $output8 =$row['remaining4'];
                    }
                        

                $output9 = $output8/$output7;
                $output6 =date("H:i:s", $output9);
                echo $output6;
                    
                ?>
                </p>
                
                

                    
            <br /><br /><br />
            <p>save Date to table(לחץ כאן)
            <button name="actionType" value="in">Click</button></p>
            <p>calucate time diffrence(לאחר מכן לחץ כאן) <button name="actionType" value="out">finish</button></p>
        </form>
    </body>
</html>
