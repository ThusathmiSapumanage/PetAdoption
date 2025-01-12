<!DOCTYPE html>
<html>
<head>
    <title>View Pets</title>
    <link rel="stylesheet" type="text/css" href="viewPets.css">
</head>
<body>
    <?php include 'header.html'; ?>
    <p class="text"> View pets who are <b>up for adoption</b></p>

    <form method="GET" action="" class="filter-form">
        <label for="age">Age:</label>
        <select name="age" id="age">
            <option value="">Any</option>
            <option value="1">1 year</option>
            <option value="2">2 years</option>
            <option value="3">3 years</option>
            <option value="4">4 years</option>
            <option value="5+">5+ years</option>
        </select>

        <label for="gender">Gender:</label>
        <select name="gender" id="gender">
            <option value="">Any</option>
            <option value="Male">Male</option>
            <option value="Female">Female</option>
        </select>

        <button type="submit" class="filter-button">Search</button>
    </form>
    
    <div class="container">
        <?php
        include 'config.php';

        $sql = "SELECT name, age, gender, description, image, vaccinationStatus FROM pet WHERE 1=1";

        if (!empty($_GET['age'])) {
            $age = $_GET['age'];
            if ($age == "5+") {
                $sql .= " AND age >= 5";
            } else {
                $sql .= " AND age = $age";
            }
        }

        if (!empty($_GET['gender'])) {
            $gender = $conn->real_escape_string($_GET['gender']);
            $sql .= " AND gender = '$gender'";
        }

        $result = $conn->query($sql);

        if ($result->num_rows > 0) {
            while ($row = $result->fetch_assoc()) {
                echo '<div class="pet">';
                echo '<img src="images/' . $row["image"] . '" alt="' . $row["name"] . '">';
                echo '<h2>' . $row["name"] . '</h2>';
                echo '<p>' . $row["description"] . '</p>';
                echo '<p>' . $row["age"] . ' years old</p>';
                echo '<p>' . $row["gender"] . '</p>';
                echo '<p>' . $row["vaccinationStatus"] . '</p>';
                echo '</br>';
                echo '<a href="adoptionForm.php"><button class="buttonA">Adopt</button></a>';
                echo '<a href="fosterhomeapp.php"><button class="buttonF">Foster</button></a>';
                echo '</div>';
            }
        } else {
            echo "No results found.";
        }
        $conn->close();
        ?>
    </div>
    <?php include 'footer.html'; ?>
</body>
</html>
