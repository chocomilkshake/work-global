
<table class='employer-data-table'>
        <thead>
            <tr>
                <th colspan="5">employer</th>
            </tr>
            <tr>
                <th>Company Name</th>
                <th>President/CEO</th>
                <th>Contact</th>
                <th>Status</th>
            </tr>
        </thead>
        <tbody>
            <!-- data of employee in cells -->
            <?php
            $sqlemployer = mysqli_query($con, "SELECT * FROM `employer_information`");
            $rowsPerPage = 10; // Change this to set the number of rows per page
            $currentPage = isset($_GET['page']) ? $_GET['page'] : 1;
            $startRow = ($currentPage - 1) * $rowsPerPage;
            $endRow = $startRow + $rowsPerPage;
            $countEmployer=1;
            while ($employerValue = mysqli_fetch_array($sqlemployer)) {

                if ($startRow <= $countEmployer && $countEmployer < $endRow) {
                    $employerStatus = mysqli_query($con, "SELECT * FROM `employer_account` WHERE `id`='{$employerValue['id']}'");
                    $statusValue = mysqli_fetch_array($employerStatus);
                    echo "<tr>";
                    echo "<td>" . $employerValue['company_name'] . "</td>";
                    echo "<td>" . $employerValue['president/ceo'] . "</td>";
                    echo "<td>" . $employerValue['contact'] . "</td>";
                    echo "<td>" . $statusValue['status'] . "</td>";
                    echo "</tr>";
                    $countEmployer++;
                }
            }
            ?>
        </tbody>
    </table>

    <ul class="pagination">
        <?php
        $countemployer = mysqli_query($con, "SELECT * FROM `employer_information`");
        $totalRows = mysqli_num_rows($countemployer);
        $totalPages = ceil($totalRows / $rowsPerPage);
        
        for ($i = 1; $i <= $totalPages; $i++) {
            echo "<a href='admin_home.php?page=$i'><li class='page_btn'>$i</li></a>";
            
        }
        ?>
    </ul>

    
