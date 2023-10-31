

<table class='user-data-table'>
        <thead>
            <tr>
                <th colspan="3">Users</th>
            </tr>
            <tr>
                <th>Name</th>
                <th>Position</th>
                <th>Status</th>
            </tr>
        </thead>
        <tbody>
            <!-- data of employee in cells -->
            <?php
            $sqlUser = mysqli_query($con, "SELECT * FROM `admin_account`");
            $rowsPerPage = 10; // Change this to set the number of rows per page
            $currentPage = isset($_GET['page']) ? $_GET['page'] : 1;
            $startRow = ($currentPage - 1) * $rowsPerPage;
            $endRow = $startRow + $rowsPerPage;
            
            while ($userValue = mysqli_fetch_array($sqlUser)) {
                if ($startRow <= $userValue['id'] && $userValue['id'] < $endRow) {
                    echo "<tr>";
                    echo "<td>" . $userValue['name'] . "</td>";
                    echo "<td>" . $userValue['position'] . "</td>";
                    $userType = ($userValue['type'] == 1) ? 'Administrator' : 'Encoder';
                    echo "<td>" . $userType . "</td>";
                    echo "</tr>";
                }
            }
            ?>
        </tbody>
    </table>

    <ul class="pagination">
        <?php
        $countUser = mysqli_query($con, "SELECT * FROM `admin_account`");
        $totalRows = mysqli_num_rows($countUser);
        $totalPages = ceil($totalRows / $rowsPerPage);
        
        for ($i = 1; $i <= $totalPages; $i++) {
            echo "<a href='admin_home.php?page=$i'><li class='page_btn'>$i</li></a>";
            
        }
        ?>
    </ul>

    