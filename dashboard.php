<!DOCTYPE html>
<html>
<head>
    <title>Welcome to the adoption site</title>
    <link rel="stylesheet" href="dash.css">
    <style>
        body {
            font-family: Arial, sans-serif;
            margin: 0;
            padding: 0;
            background-color:rgba(253, 244, 245, 0.29); 
            color: #5a3825;
        }

        .opening {
            text-align: center;
            padding: 50px;
            background-color:rgba(247, 230, 231, 0.55); 
            border-bottom: 2px solid #deb8b8;
        }

        .opening h1 {
            font-size: 36px;
            margin-bottom: 20px;
        }

        .opening p {
            font-size: 18px;
            margin: 10px 0;
        }

        .opening a {
            display: inline-block;
            margin: 10px;
            padding: 10px 20px;
            color: #fff;
            background-color: #d8a798; 
            text-decoration: none;
            border-radius: 5px;
        }

        .opening a:hover {
            background-color: #b78270;
        }

        .container {
            padding: 20px;
            display: flex;
            flex-wrap: wrap;
            justify-content: center;
        }

        .story {
            background-color: #fff;
            border: 1px solid #deb8b8;
            border-radius: 10px;
            margin: 15px;
            padding: 20px;
            width: 300px;
            text-align: center;
            box-shadow: 0 4px 6px rgba(0, 0, 0, 0.1);
        }

        .story img {
            width: 100%;
            border-radius: 10px;
            margin-bottom: 15px;
        }

        .story h2 {
            font-size: 22px;
            color: #5a3825;
            margin-bottom: 10px;
        }

        .story p {
            font-size: 16px;
            color: #7b5245;
            margin-bottom: 10px;
        }

        footer {
            text-align: center;
            padding: 20px;
            background-color: #f7e6e7;
            color: #5a3825;
            border-top: 2px solid #deb8b8;
        }
    </style>
</head>
<body>
    <div class="opening">
        <h1>Welcome!</h1>
        <p>Your journey to finding a furry friend starts here.</p>
        <p>Are you already a part of our mission ?</p>
        <a href="login.php">Log In</a>
        <p>A new visitor wanting an amazing companion?</p>
        <a href="register.php">Sign Up</a>
    </div>

    <p style="text-align: center; font-size: 20px; margin: 20px 0;">Heartwarming adoption stories from our community:</p>
    <div class="container">
        <?php
        include 'config.php';

        $sql = "SELECT storyName, story, dateadded, image FROM stories";
        $result = $conn->query($sql);

        if ($result->num_rows > 0) {
            while($row = $result->fetch_assoc()) {
                echo '<div class="story">';
                echo '<img src="images/' . $row["image"] . '" alt="' . $row["storyName"] . '">';
                echo '<h2>' . $row["storyName"] . '</h2>';
                echo '<p>' . $row["story"] . '</p>';
                echo '<p><em>Added on: ' . $row["dateadded"] . '</em></p>';
                echo '</div>';
            }
        } else {
            echo '<p style="text-align: center; color: #7b5245;">No stories available at the moment. Check back soon!</p>';
        }
        $conn->close();
        ?>
    </div>

    <?php include 'footer.html'; ?>
</body>
</html>
