<!DOCTYPE html>
<html>
<head>
    <title>Feedback Form</title>
    <style>
        .rating {
            unicode-bidi: bidi-override;
            direction: rtl;
            text-align: center;
        }
        .rating input {
            display: none;
        }
        .rating label {
            display: inline-block;
            padding: 5px;
            font-size: 30px;
            color: #ccc;
            cursor: pointer;
        }
        .rating label:hover,
        .rating label:hover ~ label,
        .rating input:checked ~ label {
            color: #ffca08;
        }
        .submit-btn {
            margin-top: 20px;
        }
    </style>
</head>
<body>
    <h1>Feedback Form</h1>
    
    <?php
    // Database configuration
    $host = "localhost";
    $username = "your_username";
    $password = "your_password";
    $dbname = "feedback_db";

    // Create database connection
    $conn = new mysqli($host, $username, $password, $dbname);

    // Check connection
    if ($conn->connect_error) {
        die("Connection failed: " . $conn->connect_error);
    }

    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        // Get the form data
        $rating = $_POST["rating"];
        $comment = $_POST["comment"];

        // Prepare and execute the SQL query
        $sql = "INSERT INTO feedback (rating, comment) VALUES ('$rating', '$comment')";
        if ($conn->query($sql) === TRUE) {
            echo "<p>Thank you for your feedback!</p>";
        } else {
            echo "Error: " . $sql . "<br>" . $conn->error;
        }
    }
    ?>

    <form method="POST" action="<?php echo $_SERVER['PHP_SELF']; ?>">
        <div class="rating">
            <input type="radio" name="rating" id="star5" value="5">
            <label for="star5">&#9733;</label>
            <input type="radio" name="rating" id="star4" value="4">
            <label for="star4">&#9733;</label>
            <input type="radio" name="rating" id="star3" value="3">
            <label for="star3">&#9733;</label>
            <input type="radio" name="rating" id="star2" value="2">
            <label for="star2">&#9733;</label>
            <input type="radio" name="rating" id="star1" value="1">
            <label for="star1">&#9733;</label>
        </div>
        <br>
        <label for="comment">Comment:</label>
        <textarea name="comment" id="comment" rows="5" cols="40"></textarea>
        <br>
        <input type="submit" value="Submit" class="submit-btn">
    </form>

    <?php
    // Close the database connection
    $conn->close();
    ?>
</body>
</html>
