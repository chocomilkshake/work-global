<?php
include('config.php');
if (isset($_POST['query'])) {
    $searchQuery = $_POST['query'];

    // Sanitize the input to prevent SQL injection
    $searchQuery = mysqli_real_escape_string($con, $searchQuery);

    // Perform a database query using a prepared statement
    $stmt = mysqli_prepare($con, "SELECT *
            FROM incoded_applicant
            WHERE CONCAT(first_name, ' ', middle_name) = ? OR CONCAT(first_name, ' ', middle_name, ' ', last_name) = ? OR first_name = ? OR middle_name = ? OR last_name = ?");
    
    if ($stmt) {
        // Bind the parameters
        
        mysqli_stmt_bind_param($stmt, "sssss", $searchQuery, $searchQuery, $searchQuery, $searchQuery, $searchQuery);

        // Execute the query
        mysqli_stmt_execute($stmt);

        // Get the result
        $result = mysqli_stmt_get_result($stmt);

        // Initialize an array to store matching applicants
        $applicants = array();

        while ($applicantInfo = mysqli_fetch_array($result)) {
            // Add each matching applicant to the array
            $applicants[] = $applicantInfo;
        }

        if (!empty($applicants)) {
            // Convert the array to JSON and echo it to the response
            echo json_encode($applicants);
        } else {
            echo json_encode($applicants);
        }

        // Close the statement
        mysqli_stmt_close($stmt);
    } else {
        echo '<div>Database error: ' . mysqli_error($con) . '</div>';
    }
}
?>