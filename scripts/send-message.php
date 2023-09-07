<?php

include('../mysql/connect.php');

// Retrieve data from the form
$message = $_POST['message'];
$date = $_POST['date'];

if (empty($message)) {
    echo "<h3>Message can't be empty.</h3>";
    die("Message can't be empty.");
} elseif (strlen($date) != 17) {
    echo "<h3>Date is not in a valid format.</h3>";
    die("Date is not in a valid format.");
}

// Insert data into the database
$sql = "INSERT INTO galactic_chat (message, date) VALUES ('$message', '$date')";

if(mysqli_query($conn, $sql)){
    echo "<h3>data stored in a database successfully."
        . " Please browse your localhost php my admin"
        . " to view the updated data</h3>";

    echo nl2br("\n$message\n");
} else{
    echo "ERROR: Hush! Sorry $sql. "
        . mysqli_error($conn);
}

// Close connection
mysqli_close($conn);

?>