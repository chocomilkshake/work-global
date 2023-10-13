<?php


$getEmployerList=mysqli_query($con,"SELECT * FROM `employer_information`");
while($value=mysqli_fetch_array($getEmployerList)){

    $empId=$value['id'];
    $employerLogo=mysqli_query($con,"SELECT * FROM `employer_logo` WHERE `id`='$empId'");
    $logo=mysqli_fetch_array($employerLogo);
    echo"<div class='col-lg-6 mt-4' data-aos='zoom-in' data-aos-delay='100'>";
    echo"   <div class='member d-flex align-items-start'>";
    echo"     <div class='pic'><img src='".$logo['photo_dir']."' class='img-fluid' alt=''></div>";
    echo"     <div class='member-info'>";
    echo"<form action='employer_profile.php' method='post'>";
    echo"       <input type='hidden' id='employerId' name='employerId' value='".$value['id']."'>";
    echo"       <h4>".$value['company_name']."</h4>";
    echo"       <span>".$value['address']."</span>";
    echo"       <p>".$value['industry']."</p>";
    echo"       <div class='social'>";
    echo"         <a href=''><i class='ri-twitter-fill'></i></a>";
    echo"         <a href=''><i class='ri-facebook-fill'></i></a>";
    echo"         <a href=''><i class='ri-instagram-fill'></i></a>";
    echo"         <a href=''> <i class='ri-linkedin-box-fill'></i> </a>";
    echo"          <button type='submit' class='view-btn'>view</button>";
    echo"</form>";
    echo"       </div>";
    echo"     </div>";
    echo"   </div>";
    echo" </div>";


    
}
