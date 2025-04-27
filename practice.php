<?php
// Retrieve POST data
$fname = isset($_POST["fname"]) ? $_POST["fname"] : '';
$lname = isset($_POST["lname"]) ? $_POST["lname"] : '';
$mail = isset($_POST["email"]) ? $_POST["email"] : '';

// Sanitize user input to prevent security issues
$fname = htmlspecialchars(trim($fname));
$lname = htmlspecialchars(trim($lname));
$mail = filter_var(trim($mail), FILTER_SANITIZE_EMAIL);

// Open the file in write mode ("w+")
$fh = fopen("log.txt", "w+");
if (!$fh) {
    // Handle file opening errors
    echo "Error: Unable to open or create the file.";
} else {
    // Write the sanitized data to the file
    fwrite($fh, $fname . "\t" . $lname . "\t" . $mail . "\n");
    
    // Close the file
    fclose($fh);
    
    // Confirm successful saving
    echo "<br />Your data has been saved successfully!<br />";
}
?>
<form action="practice.php" method="post">
	First Name:<input type="text" name="fname"><br>
	Second Name:<input type="text" name="lname"><br>
	Email:<input type="text" name="email"><br>
    <input type="submit" name="submit" value="Submit">
</form>
