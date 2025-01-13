<!DOCTYPE html>
<html>

<head>
    <title>Adoption Form</title>
    <link rel="stylesheet" href="adoptionform.css">
    <script>
        function validationForm(event) {
            var form = document.forms["adoptionForm"];
            var name = form["name"].value.trim();
            var email = form["email"].value.trim();
            var phone = form["phone"].value.trim();
            var previousExperience = form["previousExperience"].value;
            var hasVet = form["hasVet"].value;
            var commitment = form["commitment"].value;

            var errorMessages = [];

            var namePattern = /^[A-Za-z\s]+$/;
            if (!name.match(namePattern)) {
                errorMessages.push("Name cannot contain numbers or special characters.");
            }

            if (!email.includes("@") || !email.includes(".")) {
                errorMessages.push("Please enter a valid email address.");
            }

            if (isNaN(phone) || phone.length < 10) {
                errorMessages.push("Please enter a valid phone number (at least 10 digits).");
            }

            if (previousExperience === "") {
                errorMessages.push("Please select your previous pet experience.");
            }

            if (hasVet === "") {
                errorMessages.push("Please select if you have a veterinarian.");
            }

            if (commitment === "") {
                errorMessages.push("Please confirm your long-term commitment to the pet.");
            }

            if (errorMessages.length > 0) {
                event.preventDefault();
                alert(errorMessages.join("\n"));
                return false;
            }

            return true;
        }
    </script>
</head>

<body>
	<?php include 'header.html'; ?>
    <div class="content">
        <h2>Adoption Form</h2>
        <p>Please fill out the form below to start the adoption process.</p>
        <form action="https://formspree.io/f/xrbbrwlz" method="POST" name="adoptionForm" onsubmit="return validationForm(event)">
            <label for="pet">Which pet are you interested in adopting?</label>
            <select id="pet" name="pet" required>
                <?php
                include 'config.php';

                $sql = "SELECT name FROM pet";
                $result = $conn->query($sql);
                if ($result->num_rows > 0) {
                    while ($row = $result->fetch_assoc()) {
                        echo '<option value="' . $row["name"] . '">' . $row["name"] . '</option>';
                    }
                } else {
                    echo '<option value="">No pets available</option>';
                }
                $conn->close();
                ?>
            </select>
            <br><br>

            <label for="name">Full Name:</label>
            <input type="text" id="name" name="name" required>
            <br><br>

            <label for="email">Email Address:</label>
            <input type="text" id="email" name="email" required>
            <br><br>

            <label for="phone">Phone Number:</label>
            <input type="tel" id="phone" name="phone" required>
            <br><br>

            <label for="previousExperience">Do you have previous pet experience?</label>
            <select id="previousExperience" name="previousExperience" required>
                <option value="">Select an option</option>
                <option value="Yes">Yes, I have some experience!</option>
                <option value="No">No, I have no experience</option>
            </select>
            <br><br>

            <label for="hasVet">Do you have a veterinarian?</label>
            <select id="hasVet" name="hasVet" required>
                <option value="">Select an option</option>
                <option value="Yes">Yes, I do!</option>
                <option value="No">Not at the moment</option>
            </select>
            <br><br>

            <label for="commitment">Will you care for this pet for the rest of its life?</label>
            <select id="commitment" name="commitment" required>
                <option value="">Select an option</option>
                <option value="Yes">Yes, I will!</option>
                <option value="No">No</option>
            </select>
            <br><br>

            <button type="submit" class="btn">Submit Form</button>
        </form>
    </div>
    <?php include 'footer.html'; ?>
</body>

</html>
