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
                echo "<td class='data-compress'>" . $employerValue['company_name'] . "</td>";
                echo "<td class='data-compress'>" . $employerValue['president/ceo'] . "</td>";
                echo "<td class='data-compress'>" . $employerValue['representative'] . "</td>";
                echo "<td class='data-compress'>" . $employerValue['contact'] . "</td>";
                echo "<td class='data-compress'>" . $employerValue['email'] . "</td>";
                echo "<td class='data-compress'>";
                echo "<form action='employer_profile.php' method='post'>";
                echo "<input type='hidden' name='employerId' id='employerId' value='" . $employerValue['id'] . "'>";
                echo "<div class='dropdown'>"; // Start the dropdown container
                echo "<button class='dropbtn'>Actions</button>"; // Dropdown button
                echo "<div class='dropdown-content'>"; // Dropdown content
            
                // Add the options for View, Edit, and Activate
                echo "<a href='employer_profile.php?employerId=" . $employerValue['id'] . "'>View</a>";
                echo "<a href='employer_profile.php?employerAction=edit&id=" . $employerValue['id'] . "'>Edit</a>";
                echo "<a href='employer_profile.php?employerAction=activate&id=" . $employerValue['id'] . "'>Activate</a>";

                echo "</div>"; // Close the dropdown content
                echo "</div>"; // Close the dropdown container
                echo "</form>";
                echo '</td>';
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