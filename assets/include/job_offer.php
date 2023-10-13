<?php

$getPosition = mysqli_query($con, "SELECT * FROM `job_offer` WHERE `status`<>'Expire'");
while ($value = mysqli_fetch_array($getPosition)) {
    $getPhoto = mysqli_query($con, "SELECT * FROM `job_photo` WHERE `job_id`='{$value['job_id']}'");
    $valuePhoto = mysqli_fetch_array($getPhoto);
    $getemployer = mysqli_query($con, "SELECT * FROM `employer_information` WHERE `id`='{$value['employer_id']}'");
    $valueEmployer = mysqli_fetch_array($getemployer);
    $filteredPosition = preg_replace('/[^a-zA-Z0-9]+/', '', str_replace(' ', '', $value['job_category']));
    echo "<div class='col-lg-4 col-md-6 portfolio-item filter-" . htmlspecialchars($filteredPosition) . "'>";
    echo "    <div class='portfolio-img'><img src='".$valuePhoto['photo_dir']."' class='img-fluid' alt='Image'></div>";
    echo "      <div class='portfolio-info'>";
    echo "          <form action='show_job_offer.php' method='post'>";
    echo "              <input type='hidden' name='jobId' id='jobId' value='".$value['job_id']."'>";
    echo "              <h4>" . htmlspecialchars($valueEmployer['company_name']) . "</h4>";
    echo "              <h4>" . htmlspecialchars($value['job_title']) . "</h4>";
    echo "              <p>" . htmlspecialchars($value['position']) . "</p>";
    echo "              <button type='submit' class='apply-btn' title='More Details'>Apply</button>";
    echo "          </form>";
    echo "      </div>";
    echo "    </div>";
    
}




