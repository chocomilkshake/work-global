<?php
if(isset($_SESSION['appId'])){
$appId=$_SESSION['appId'];}
else{
    $appId="";
}
$checkApplication=mysqli_query($con,"SELECT * FROM `application` WHERE `applicant_id`='$appId' AND `job_id`='$jobId' ");
$getValue=mysqli_num_rows($checkApplication);

if($getValue > 0){
    echo "<style>.cancel-btn{display:block;}.apply-btn{display:none;}</style>"; 
}
else{echo "<style>.cancel-btn{display:none;}.apply-btn{display:block;}</style>";}