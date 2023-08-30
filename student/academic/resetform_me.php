<?php
session_start();

// Reset the attached files and their status to "Missing" and delete corresponding files
// Only reset if the status is "Pending"
include('../../conn.php');

$user_id = $_SESSION['user_id'];

// Get the status of the requirements from the database
$query = "SELECT r_zero_form_status FROM acad_manual_enrollment WHERE user_id = ?";
$stmt = $connection->prepare($query);
$stmt->bind_param("i", $user_id);
$stmt->execute();
$result = $stmt->get_result();
$statusData = $result->fetch_assoc();
$stmt->close();

// Get the paths of the files from the database
$query = "SELECT r_zero_form FROM acad_manual_enrollment WHERE user_id = ?";
$stmt = $connection->prepare($query);
$stmt->bind_param("i", $user_id);
$stmt->execute();
$result = $stmt->get_result();
$reqData = $result->fetch_assoc();
$stmt->close();

// Check the status of each requirement and delete files if the status is "Pending"
if ($statusData['r_zero_form_status'] == 2) {
    $rZeroFormPath = '../../assets/uploads/generated_pdf/' . $reqData['r_zero_form'];
    if (file_exists($rZeroFormPath)) {
        unlink($rZeroFormPath);
    }
}

// Update the database entries for each requirement to reset the status and attachment
$query = "UPDATE acad_manual_enrollment SET r_zero_form = NULL, r_zero_form_status = 1 WHERE user_id = ? AND r_zero_form_status = 2";
$stmt = $connection->prepare($query);
$stmt->bind_param("i", $user_id);
$stmt->execute();
$stmt->close();
$connection->close();

// Redirect back to the form page
header("Location: manual_enrollment.php");
exit();
?>
