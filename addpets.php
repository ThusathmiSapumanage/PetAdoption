
<?php

include 'config.php';

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $name = $_POST['name'];
    $age = $_POST['age'];
    $gender = $_POST['gender'];
    $des = $_POST['des'];
    $img = $_POST['img'];
    $vaccinationStatus = $_POST['vaccinationStatus'];

$sql = "INSERT INTO pet (name, age, gender, description, image, vaccinationStatus) VALUES ('$name', '$age', '$gender', '$des', '$img', '$vaccinationStatus')";

if ($conn->query($sql) === TRUE) {
    echo "New record created successfully";
    header("Location: viewPets.php");
} else {
    echo "Error: " . $sql . "<br>" . $conn->error;
}
}
?>

<!DOCTYPE html>
<html>
<head>
    <title>Add Pets</title>
    <link rel="stylesheet" type="text/css" href="addpets.css">
</head>
<body>
    <?php include 'header.html'; ?>
    <div class="content">
        <h1> Pet Adoption Center</h1>
        <h2>Add Pets</h2>
        <p>Can't take care of your pet anymore ? We undestand you! You taking this step to keep them safe is LOVE and Care! Fill the below form so that we can help you out.</p>
        <form action="addpets.php" method="post">

            <h3> Add your pets here </h3>

            <label for="name">Name:</label><br>
            <input type="text" id="name" name="name" required><br><br>

            <label for="age">Age:</label><br>
            <input type="text" id="age" name="age" required><br><br>

            <label for="gender">Gender:</label><br>
            <select id = "gender" name = "gender" required>
                <option value = "Female">Female</option>
                <option value = "Male"> Male </option>
            </select><br><br>

            <label for="des">Description:</label><br>
            <textarea id="des" name="des" required></textarea><br><br>

            <label for="img">Image:</label><br>
            <input type="file" id="img" name="img" required><br><br>

            <label for="vaccinationStatus">Vaccination Status:</label><br>
            <select id = "vaccinationStatus" name = "vaccinationStatus" required>
                <option value = "Vaccinated">Vaccinated</option>
                <option value = "Not Vaccinated"> Not Vaccinated </option>
            </select><br><br>

            <input type="submit" value="Add pet" class="btn">
        </form>
    </div>
    <?php include 'footer.html'; ?>
</body>
</html>