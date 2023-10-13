<div class="application-list">
    <table class="application-table">
        <thead>
            <tr>
                <th colspan="7">Employer List</th>
            </tr>
            <tr>
                <th>Id</th>
                <th>Company Name</th>
                <th>President/CEO</th>
                <th>Represetative</th>
                <th>Contact number</th>
                <th>Email</th>
                <th>Action</th>
            </tr>
        </thead>
        <tbody>
            <!-- data of emploeyr in cell  -->
            <?php
            $sqlapplication = mysqli_query($con, "SELECT * FROM `employer_information`");
            while ($employerValue = mysqli_fetch_array($sqlapplication)) {
                echo "<tr>";
                echo "<td class='data-compress'>" . $employerValue['id'] . "</td>";
                echo "<td class='data-compress'>" . $employerValue['company_name']. "</td>";
                echo "<td class='data-compress'>" . $employerValue['president/ceo'] . "</td>";
                echo "<td class='data-compress'>" . $employerValue['representative'] ."</td>";
                echo "<td class='data-compress'>" . $employerValue['contact'] . "</td>";
                echo "<td class='data-compress'>" . $employerValue['email'] . "</td>";
                echo "<td class='data-compress'><form action='employer_view.php?employerId=".$employerValue['id'] ."' method='post'>";
                    echo "<div class='button'><button type='submit'>view</button></div>";
                echo '</td></form>'; 
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