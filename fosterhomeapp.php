<!DOCTYPE html>
<html>
<head>
    <title>Foster Home application</title>
    <link rel="stylesheet" type="text/css" href="foster.css">
</head>
<body>
    <?php include 'header.html'; ?>
    <p class = "para">Thank you for your interest in fostering a pet. Please fill out the form below and we will get in touch with you shortly.</p>

    <form action="https://formspree.io/f/mjkkpqzd" method="POST">
        <h2>Foster Home Application</h2></br>

        <label for="name">Name *</label>
        <input type="text" id="name" name="name" placeholder="Your name" required><br><br>
    
        <label for="email">Email *</label>
        <input type="email" id="email" name="email" placeholder="Your email" required><br><br>

        <label for="message">Phone number *</label>
        <input type = "text" id="phone" name="phone" placeholder="Your phone number" required><br><br>
    
        <label for="message">House address *</label>
        <input type = "text" id="address" name="address" placeholder="Your house address" required><br><br>

        <label for="message">Why do you want to foster a pet? *</label>
        <textarea id="message" name="message" placeholder="Write something.." style="height:200px" required></textarea><br><br>

        <label for="message">Do you have any experience in fostering before ? *</label>
        <select id="experience" name="experience" required>
            <option value="" disabled selected>Please select an option</option>
            <option value="yes">Yes</option>
            <option value="no">No</option>
        </select><br><br>

        <label for="message">Do you have any pets at home? *</label>
        <select id="pets" name="pets" required>
            <option value="" disabled selected>Please select an option</option>
            <option value="yes">Yes</option>
            <option value="no">No</option>
        </select><br><br>

        <label for="message">Do you have any children at home? *</label>
        <select id="children" name="children" required>
            <option value="" disabled selected>Please select an option</option>
            <option value="yes">Yes</option>
            <option value="no">No</option>
        </select><br><br>

        <label for="message">Do you have a backyard? *</label>
        <select id="backyard" name="backyard" required>
            <option value="" disabled selected>Please select an option</option>
            <option value="yes">Yes</option>
            <option value="no">No</option>
        </select><br><br>

        <label for="message">Do you have a vet? *</label>
        <select id="vet" name="vet" required>
            <option value="" disabled selected>Please select an option</option>
            <option value="yes">Yes</option>
            <option value="no">No</option>
        </select><br><br>

        <button type="submit">Send away</button>
    </form>
    <?php include 'footer.html'; ?>
</body>
</html>