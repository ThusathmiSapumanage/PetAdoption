<!DOCTYPE html>
<html>
<head>
    <title>View Pets</title>
    <link rel="stylesheet" type="text/css" href="viewPets.css">
</head>
<body>
    <p class = "text"> View pets who are <b>up for adoption</b></p>
    <div class="container">
        <?php
        include 'config.php';

        $sql = "SELECT name, age, gender, description, image, vaccinationStatus FROM pet";
        $result = $conn->query($sql);

        if ($result->num_rows > 0) {
            while($row = $result->fetch_assoc()) {
                echo '<div class="pet">';
                echo '<img src="images/' . $row["image"] . '" alt="' . $row["name"] . '">';
                echo '<h2>' . $row["name"] . '</h2>';
                echo '<p>' . $row["description"] . '</p>';
                echo '<p>' . $row["age"] . ' years old</p>';
                echo '<p>' . $row["gender"] . '</p>';
                echo '<p>' . $row["vaccinationStatus"] . '</p>';
                echo '</br>';
                echo '<button class="buttonA">Adopt</button>';
                echo '<button class="buttonF">Foster</button>';
                echo '<button class="buttonV">View story</button>';
                echo '</div>';
            }
        } else {
            echo "0 results";
        }
        $conn->close();
        ?>
    </div>
    <?php include 'footer.html'; ?>
</body>
</html>
