<?php

$getPosition = mysqli_query($con, "SELECT * FROM `job_offer` WHERE `employer_id`='$getId'");
while ($value = mysqli_fetch_array($getPosition)) {
    $getPhoto = mysqli_query($con, "SELECT * FROM `job_photo` WHERE `job_id`='{$value['job_id']}'");
    $valuePhoto = mysqli_fetch_array($getPhoto);
    $filteredPosition = preg_replace('/[^a-zA-Z0-9]+/', '', str_replace(' ', '', $value['job_category']));
    echo "<div class='col-lg-4 col-md-6 portfolio-item filter-" . htmlspecialchars($filteredPosition) . "'>";
    echo "    <div class='portfolio-img'><img src='".$valuePhoto['photo_dir']."' class='img-fluid' alt='Image'></div>";
    echo "      <div class='portfolio-info'>";
    echo "        <h4>" . htmlspecialchars($value['job_title']) . "</h4>";
    echo "        <p>" . htmlspecialchars($value['position']) . "</p>";
    echo "        <a href='show_job_offer_employer.php' class='apply-btn' title='More Details'>view</a>";
    echo "    </div>";
    echo "  </div>";
}
