<?php

$getPosition = mysqli_query($con, "SELECT DISTINCT `job_category` FROM `job_offer` WHERE `status`<>'Expire'");
while ($value = mysqli_fetch_array($getPosition)) {
    $filteredPosition = preg_replace('/[^a-zA-Z0-9]+/', '', str_replace(' ', '', $value['job_category']));   
    echo "<li data-filter='.filter-" . htmlspecialchars($filteredPosition) . "'>" . htmlspecialchars($value['job_category']) . "</li>";

}
