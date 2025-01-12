<!DOCTYPE html>
<html>

<head>
	<title>Adoption Form</title>
	<link rel="stylesheet" href="style.css"> 
	<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
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
<header>
    <div class="navbar">
        <ul>
            <li><a href="homepage.php"><img src="logo.jpeg" alt="Pet Adoption Logo" width="100px" height="100px"></a></li>
            <li><a href="homepage.php">Home</a></li>
            <li><a href="viewPets.php">Our Pets</a></li>
            <li><a href="adoptionForm.php">Adopt</a></li>
            <li><a href="addpets.php">Add pet for adoption</a></li>
            <li><a href="fosterhomeapp.php">Foster</a></li>
            <li><a href="addStories.php">Share your story</a></li>
            <li><a href="AboutUs.html">About Us</a></li>
            <li><a href="contactus.php">Get in touch</a></li>
            <li><a href= "logout.php">Log out</a></li>
        </ul>
    </div>
</header>
	<div class="form-container">
		<form action="https://formspree.io/f/xrbbrwlz" method="POST" name="adoptionForm" onsubmit="return validationForm(event)">
			<h2>Adoption Form</h2>

			<label>Which pet are you interested in adopting?</label>
			<select name="pet" required>
				<?php
				include 'config.php';

				$sql = "SELECT name FROM pet";
				$result = $conn->query($sql);
				if ($result->num_rows > 0) {
					while($row = $result->fetch_assoc()) {
						echo '<option value="' . $row["name"] . '">' . $row["name"] . '</option>';
					}
				} else {
					echo '<option value="">No pets available</option>';
				}
				$conn->close();
				?>'
				</select>
			<br><br>
			
			<label>Full Name:</label>
			<input type="text" id="name" name="name" required>
			<br><br>

			<label>Email Address:</label>
			<input type="text" id="email" name="email" required>
			<br><br>

			<label>Phone Number:</label>
			<input type="tel" id="phone" name="phone" required>
			<br><br>

			<label>Do you have previous pet experience ?</label>
			<select name="previousExperience" required>
				<option value="">Select an option</option>
				<option value="Yes">Yes, I have some experience!</option>
				<option value="No">No, I have no experience</option>
			</select>
			<br><br>


			<label>Do you have veterinarian ?</label>
			<select name="hasVet" required>
				<option value="">Select an option</option>
				<option value="Yes">Yes I do!</option>
				<option value="No">Not at the moment</option>
			</select>
			<br><br>

			<label>Will you care for this pet for the rest of its life ?</label>
			<select name="commitment" required>
				<option value="">Select an option</option>
				<option value="Yes">Yes I will!</option>
				<option value="No">No</option>
			</select>
			<br><br>

			<button type="submit">Submit Form</button>
		</form>
	</div>
	
	<footer class="footer">
    		<p>&copy; 2025 | Pet adoption center</p>
    		<p>1234, New York Street, Colombo</p>
	</footer>
</body>

</html>