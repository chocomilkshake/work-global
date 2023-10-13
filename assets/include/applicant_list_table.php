<div class="application-list">
    <table class="application-table">
        <thead>
            <tr>
                <th colspan="7">Applicant List</th>
            </tr>
            <tr>
                <th>Id</th>
                <th>Name</th>
                <th>Gender</th>
                <th>Email</th>
                <th>Contact number</th>
                <th>Position</th>
                <th>Resume</th>
            </tr>
        </thead>
        <tbody>
            <?php
            $empId = $_SESSION['employerId'];
            $sqlapplication = mysqli_query($con, "SELECT * FROM `application` WHERE `employer_id`='$empId'");
            while ($result = mysqli_fetch_array($sqlapplication)) {

                $getjobValue = mysqli_query($con, "SELECT * FROM `job_offer` WHERE `job_id` = '{$result['job_id']}' ");
                $jobValue = mysqli_fetch_array($getjobValue);
                $getapplicantValue = mysqli_query($con, "SELECT * FROM `applicant_information` WHERE `id` = '{$result['applicant_id']}' ");
                $applicantValue = mysqli_fetch_array($getapplicantValue);
                $getResumeValue = mysqli_query($con, "SELECT * FROM `applicant_resume` WHERE `id` = '{$result['applicant_id']}' ");
                $resumeValue = mysqli_fetch_array($getResumeValue);
                echo "<tr>";
                echo "<td class='data-compress'>" . $applicantValue['id'] . "</td>";
                echo "<td class='data-compress'>" . $applicantValue['last_name'] . ", " . $applicantValue['first_name'] . " " . $applicantValue['middle_name'] . "</td>";
                echo "<td class='data-compress'>" . $applicantValue['gender'] . "</td>";
                echo "<td class='data-compress'>" . $applicantValue['email'] . "</td>";
                echo "<td class='data-compress'>" . $applicantValue['contact_number'] . "</td>";
                echo "<td class='data-compress'>" . $jobValue['position'] . "</td>";
                
                if ($resumeValue['file_dir'] != "") {
                    echo "<td class='data-compress'><a href='".$resumeValue['file_dir']."' target='_blank'><div class='button'><button type='submit'>view</button></a></div></td>";
                } else {
                echo "<td class='data-compress'><form action='e_biodata.php?applicantId=".$applicantValue['id'] ."' method='post'>";
                    echo "<div class='button'><button type='submit'>view</button></div>";
                echo '</td></form>';
                }
                
                echo "</tr>";
            ?>

            <?php
            }
            ?>
        </tbody>

        <?php
        ?>
    </table>
</div>