<?php
// Fetch distinct positions
$getPositions = mysqli_query($con, "SELECT DISTINCT position FROM `incoded_applicant`;");
// Fetch distinct employers
$getEmployers = mysqli_query($con, "SELECT DISTINCT employer FROM `incoded_applicant`;");
?>

<div class="form-outline">
    <div class="custom-select">
        <input id="custom-input" name="position" class="form-control form-control-lg" autocomplete="off">
        <label class="form-label" for="custom-input">Position</label>
        <ul class="options">
            <?php while ($position = mysqli_fetch_array($getPositions)) { ?>
                <li data-value="<?php echo $position['position']; ?>"><?php echo $position['position']; ?></li>
            <?php } ?>
        </ul>
    </div>
</div>

<div class="form-outline">
    <div class="employer-select">
        <input id="employer-input" name="employer" class="form-control form-control-lg">
        <label class="form-label" for="employer-input">Employer</label>
        <ul class="options-employer">
            <?php while ($employer = mysqli_fetch_array($getEmployers)) { ?>
                <li data-value="<?php echo $employer['employer']; ?>"><?php echo $employer['employer']; ?></li>
            <?php } ?>
        </ul>
    </div>
</div>
