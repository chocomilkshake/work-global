<?php

$getPosition = mysqli_query($con, "SELECT DISTINCT `position` FROM `job_offer` WHERE `employer_id`='$getId' ");
while ($value = mysqli_fetch_array($getPosition)) {
    $filteredPosition = preg_replace('/[^a-zA-Z0-9]+/', '', str_replace(' ', '', $value['position']));   
    echo "<li data-filter='.filter-" . htmlspecialchars($filteredPosition) . "'>" . htmlspecialchars($value['position']) . "</li>";

}
