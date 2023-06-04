<?php
include './connection.php';

if ($_SERVER['REQUEST_METHOD'] === 'POST') {

    $ticketID = $_POST['ticketID'];
    $groupID = $_POST['groupID'];
    $msgStatus = $_POST['msgStatus'];

    $query = "UPDATE tickets SET msgStatus = ? WHERE ticketID = ? AND groupID = ?";
    $stmt = $conn->prepare($query);
    $stmt->bind_param('sss', $msgStatus, $ticketID, $groupID);

    if ($stmt->execute()) {
        http_response_code(200);
        echo "msgStatus updated to READ";
    } else {
        http_response_code(500);
        echo "Failed to update msgStatus";
    }

    $stmt->close();
    $conn->close();
} else {
    http_response_code(405);
    echo "Invalid request method";
}
?>
