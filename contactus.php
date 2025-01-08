<!DOCTYPE html>
<html>
<head>
    <title>Contact Us</title>
    <link rel="stylesheet" type="text/css" href="contact.css">
</head>
<body>
    
    <form action="https://formspree.io/f/xgvvpjqy" method="POST">
        <h2>Let's get in touch !</h2></br>

        <label for="name">Name *</label>
        <input type="text" id="name" name="name" placeholder="Your name" required><br><br>
    
        <label for="email">Email *</label>
        <input type="email" id="email" name="email" placeholder="Your email" required><br><br>
    
        <label for="message">Message *</label>
        <textarea id="message" name="message" placeholder="Your message" required></textarea><br>
    
        <button type="submit">Get in touch</button>
    </form>

    <p class = "para"> Or email us privately at <a href="mailto:adoptioncenter@gmail.com">adoptioncenter@gmail.com</a></p>
    <?php include 'footer.html'; ?>
</body>
</html>