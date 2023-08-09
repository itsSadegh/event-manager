<?php
include 'config.php';

if ($_SERVER["REQUEST_METHOD"] === "POST") {
  $eventId = $_POST["edit-id"];
  $newTitle = $_POST["edit-title"];
  $newSpeaker = $_POST["edit-speaker"];
  $newDuration = $_POST["edit-duration"];
  $newTime = $_POST["edit-time"];
  $newPlace = $_POST["edit-place"];
  $newDescription = $_POST["edit-description"];

  $updateQuery = "UPDATE events SET title = '$newTitle', speaker = '$newSpeaker', duration = $newDuration, time = '$newTime', place = '$newPlace', description = '$newDescription' WHERE id = $eventId";
//   ***

  header("Content-Type: application/json"); // Set response header to indicate JSON content type 
//   ***

  if (mysqli_query($conn, $updateQuery)) {
    $response = array(
      "success" => true,
      "id" => $eventId,
      "title" => $newTitle,
      "speaker" => $newSpeaker,
      "duration" => $newDuration,
      "time" => $newTime,
      "place" => $newPlace,
      "description" => $newDescription
    );
  } else {
    $response = array("success" => false, "message" => "Error updating event: " . mysqli_error($conn));
  }

  echo json_encode($response); // Encode the response as JSON and echo it
}

mysqli_close($conn);
?>
