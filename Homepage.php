<!DOCTYPE html>
<html>

<head>
    <title>Pet Adoption</title>
    <link rel="stylesheet" href="style.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
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
                <li><a href="logout.php">Log out</a></li>
            </ul>
        </div>
    </header>

    <div id="carouselExampleCaptions" class="carousel slide" data-bs-ride="carousel">
        <div class="carousel-indicators">
            <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="0" class="active" aria-current="true" aria-label="Slide 1"></button>
            <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="1" aria-label="Slide 2"></button>
            <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="2" aria-label="Slide 3"></button>
        </div>
        <div class="carousel-inner">
            <div class="carousel-item active">
                <img src="slide1.jpeg" class="d-block w-100" alt="Image of various types of pets" width="400px" height="530px">
                <div class="carousel-caption d-none d-md-block">
                    <p><a href="viewPets.php">Looking for a new pet to Adopt? Click here, and browse our list!</a></p>
                </div>
            </div>
            <div class="carousel-item">
                <img src="slide2.jpeg" class="d-block w-100" alt="Person leaving their pets behind" width="400px" height="530px">
                <div class="carousel-caption d-none d-md-block">
                    <p style="text-shadow: 2px 2px 4px #000000;"><a href="addpets.php" style="color: white;">Travelling aboard? Find a temporary home for your pet!</a></p>
                </div>
            </div>
            <div class="carousel-item">
                <img src="slide3.jpeg" class="d-block w-100" alt="Image of adoption process" width="400px" height="530px">
                <div class="carousel-caption d-none d-md-block custom-carousel-caption">
                    <p><a href="adoptionForm.php" style="color: white;">Ready to adopt? Fill our adoption form now!</a></p>
                </div>
            </div>
        </div>

        <!-- Navigation controls -->
        <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide="prev">
            <span class="carousel-control-prev-icon" aria-hidden="true"></span>
            <span class="visually-hidden">Previous</span>
        </button>

        <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide="next">
            <span class="carousel-control-next-icon" aria-hidden="true"></span>
            <span class="visually-hidden">Next</span>
        </button>
    </div>

    <?php include 'footer.html'; ?>
    <!-- Bootstrap JS (required for carousel to work) -->
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.6/dist/umd/popper.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.min.js"></script>

    <script>
        // Manually initializing carousel to ensure it works smoothly
        var myCarousel = document.querySelector('#carouselExampleCaptions');
        var carousel = new bootstrap.Carousel(myCarousel, {
            interval: 2000, // Optional: automatic slide every 2 seconds
            ride: 'carousel' // Ensures automatic sliding starts when the page loads
        });
    </script>
</body>

</html>
