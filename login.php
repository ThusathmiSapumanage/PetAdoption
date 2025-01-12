<?php
include 'config.php';

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $id = $_POST['id'];
    $password = $_POST['password'];

    $sql = "SELECT * FROM user WHERE username='$id' AND password='$password'";
    $result = $conn->query($sql);

    if ($result->num_rows > 0) {
        header("Location: Homepage.php");
    } else {
        echo "Invalid ID or password";
    }
}
?>

<!DOCTYPE html>
<html>
<head>
    <title>Log in | We are happy to see you again</title>
    <style>
      body {
      font-family: Arial, sans-serif;
      background: linear-gradient(to right, rgb(164, 7, 237), #deb8b8);
      display: flex;
      justify-content: center;
      align-items: center;
      height: 100vh;
      margin: 0;
    }

    .container {
      background-color: #fff;
      padding: 20px;
      border-radius: 10px;
      box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
      width: 300px;
      text-align: center;
    }

    h1 {
      margin-bottom: 20px;
    }

    label {
      display: block;
      margin-bottom: 5px;
      text-align: left;
      padding-left: 20px;
    }

    input[type="text"],
    input[type="password"] {
      width: 250px;
      padding: 10px;
      margin-bottom: 20px;
      border: 1px solid #ccc;
      border-radius: 5px;
    }

    button {
      width: 100%;
      padding: 10px;
      background-color: #4CAF50;
      color: white;
      border: none;
      border-radius: 5px;
      cursor: pointer;
    }

    button:hover {
      background-color: #45a049;
    }
    </style>
</head>
<body>
    <div class="container">
        <h1>Login</h1>
            <h6>We are happy to see you again !</h6>
        <form method="POST">
            <label for="id">ID:</label>
            <input type="text" id="id" name="id" placeholder="Enter your ID" required><br><br>
            <label for="password">Password:</label>
            <input type="password" id="password" name="password" placeholder="Enter your password" required>
            <button type="submit">Login</button>
        </form>
    </div>
</body>
</html>
