<?php
include 'config.php';

if (isset($_POST['delete_event'])) {
    $event_id = $_POST['event_id'];
    $delete_query = "DELETE FROM events WHERE id = $event_id";
    mysqli_query($conn, $delete_query);
}

$sql = "SELECT * FROM events";
$result = mysqli_query($conn, $sql);

if ($result) {
    while ($row = mysqli_fetch_assoc($result)) {
        echo '<div class="cart col-4">';
        echo '<h4 class="cart-title">' . $row["title"] . '</h4>';
        echo '<h6 class="cart-speaker">' . $row["speaker"] . '</h6>';
        echo '<p class="cart-duration">' . $row["duration"] . ' mins</p>';
        echo '<p class="cart-description">' . $row["description"] . '</p>';
        echo '<div class="cart-timeAndPlace">';
        echo '<p class="cart-time">' . $row["time"] . '</p>';
        echo '<p class="cart-place">' . $row["place"] . '</p>';
        echo '</div>';
        echo '<form method="post" class="delete-form">';
        echo '<input type="hidden" name="event_id" value="' . $row["id"] . '">';
        echo '<button type="submit" name="delete_event" class="btn btn-danger">Delete</button>';
        echo '</form>';
        echo '<button class="edit-button btn-light" data-id="' . $row["id"] . '">Edit</button>';
        echo '</div>';
    }

    mysqli_free_result($result);
} else {
    echo "Error: " . mysqli_error($conn);
}

mysqli_close($conn);
?>
