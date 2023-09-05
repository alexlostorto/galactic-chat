<?php

$message = 'Be nice :)';
$small_message = 'Pinned';
include('components/message.php');

include('mysql/connect.php');

// Fetch data from the SQL table
$sql = "SELECT * FROM galactic_chat"; // Change this to your table name
$result = $conn->query($sql);

if ($result->num_rows > 0) {
    // Step 3: Convert data to JSON
    $messages = array();
    while ($row = $result->fetch_assoc()) {
        $messages[] = $row;
    }

    for ($i=count($messages)-1; $i>=0; $i--) {
        $message = $messages[$i]['message'];
        $small_message = $messages[$i]['date'];
        include('components/message.php');
    }
} else {
    echo "No records found";
}

// Close connection
mysqli_close($conn);

?>
