<?php
include 'config.php'; 

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $title = $_POST["title"];
    $speaker = $_POST["speaker"];
    $duration = $_POST["duration"];
    $description = $_POST["description"];
    $time = $_POST["time"];
    $place = $_POST["place"];

    $sql = "INSERT INTO events (title, speaker, duration, description, time, place) VALUES ('$title', '$speaker', '$duration', '$description', '$time', '$place')";

    if (mysqli_query($conn, $sql)) {
        mysqli_close($conn);
        header("Location: index.php");
        exit;
    }  else {
        echo "Error: " . $sql . "<br>" . mysqli_error($conn);
    }

    mysqli_close($conn);
}
?>
