<?php
// Fetch distinct positions
$getapplicant = mysqli_query($con, "SELECT * FROM `incoded_applicant`");
// Fetch distinct employers
?>

<div class="form-outline">
    <div class="applicant-select">
        <input id="search-applicant" name="search-applicant" class="form-control form-control-lg" autocomplete="off">
        <label class="form-label" for="applicant-input">Search Applicant</label>
        <ul class="options-applicant">
            <?php while ($applicant = mysqli_fetch_array($getapplicant)) { ?>
                <li data-value="<?php echo $applicant['first_name'].' '.$applicant['middle_name'].' '.$applicant['last_name']; ?>"><?php echo $applicant['first_name'].' '.$applicant['middle_name'].' '.$applicant['last_name']; ?></li>
            <?php } ?>
        </ul>
    </div>
</div>

