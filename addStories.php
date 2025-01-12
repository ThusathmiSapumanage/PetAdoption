<!DOCTYPE html>
<html>
<head>
    <title>Add your amazing adoption tales!</title>
    <link rel="stylesheet" type="text/css" href="foster.css">

</head>
<body>
    <?php include 'header.html'; ?>
    <form action="addStories.php" method="POST">
        <h2>Add stories</h2></br>

        <label for="name">Story Name</label>
        <input type="text" id="name" name="name" placeholder="Your pets name + any other title you want to add" required><br><br>

        <label for=story>Story</label>
        <textarea id="story" name="story" placeholder="Write your pawsome story here..." style="height:200px" required></textarea><br><br>

        <label for="message">Image</label>
        <input type = "file" id="image" name="image" required><br><br>

        <button type="submit">Share to the world</button>

    </form>
    <?php include 'footer.html'; ?>
</body>
</html>

<?php

include "config.php";

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $name = mysqli_real_escape_string($conn, $_POST['name']);
    $story = mysqli_real_escape_string($conn, $_POST['story']);
    $image = mysqli_real_escape_string($conn, $_POST['image']);
    $date = date("Y-m-d");

    $sql = "INSERT INTO stories (storyName, story, image, dateadded) VALUES ('$name', '$story', '$image', '$date')";

    if ($conn->query($sql) === TRUE) {
        header("Location: dashboard.php");
    } else {
        echo "Error: " . $sql . "<br>" . $conn->error;
    }

    $conn->close();
}
?>
