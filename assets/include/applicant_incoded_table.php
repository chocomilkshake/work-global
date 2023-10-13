<div class="application-list">

    <table class="application-table">
        <thead>
            <tr style="border-bottom:2px solid transparent; box-shadow: 0px 2px 4px rgba(0, 0, 0, 0.2);">
                <th><a href="applicant_incode.php">
                        <div class='button'><button type='submit'>Add</button>
                    </a></th>
                <th><a href="edit_encode.php">
                        <div class='button'><button type='submit'>Edit</button>
                    </a></th>
                    <th colspan="5"></th>
            </tr>
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
            $getapplicantValue = mysqli_query($con, "SELECT * FROM `incoded_applicant`");

            while ($applicantValue = mysqli_fetch_array($getapplicantValue)) {
                $getResumeValue = mysqli_query($con, "SELECT * FROM `applicant_resume` WHERE `id` = '{$applicantValue['id']}' ");
                $resumeValue = mysqli_fetch_array($getResumeValue);
                echo "<tr>";
                echo "<td class='data-compress'>" . $applicantValue['id'] . "</td>";
                echo "<td class='data-compress'>" . $applicantValue['last_name'] . ", " . $applicantValue['first_name'] . " " . $applicantValue['middle_name'] . "</td>";
                echo "<td class='data-compress'>" . $applicantValue['gender'] . "</td>";
                echo "<td class='data-compress'>" . $applicantValue['email_address'] . "</td>";
                echo "<td class='data-compress'>" . $applicantValue['contact_number'] . "</td>";
                echo "<td class='data-compress'>" . $applicantValue['position'] . "</td>";
                echo "<td class='data-compress'><a href='" . $resumeValue['file_dir'] . "' target='_blank'><div class='button'><button type='submit'>view</button></a></div></td>";


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