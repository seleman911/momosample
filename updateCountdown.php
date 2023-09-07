<?php
$countdownFile = "countdown.txt"; // Name of the text file

if ($_SERVER["REQUEST_METHOD"] === "POST") {
    // Store the received countdown start date in the file
    $countdownStartDate = $_POST["countdownStartDate"];
    file_put_contents($countdownFile, $countdownStartDate);
} else {
    // Retrieve the countdown start date from the file
    if (file_exists($countdownFile)) {
        echo file_get_contents($countdownFile);
    } else {
        echo "0"; // Default value if file doesn't exist
    }
}
?>
