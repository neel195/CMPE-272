<!DOCTYPE html>
<html>
<head>
    <title>Contact Us - Electronic Shop</title>
    <link rel="stylesheet" type="text/css" href="/style.css">
</head>
<body>

<header>
    <h1>Contact Us</h1>
</header>

<nav>
    <ul>
        <li><a href="index.php">Home</a></li>
        <li><a href="about.php">About</a></li>
        <li><a href="products.php">Products</a></li>
        <li><a href="news.php">News</a></li>
        <li><a href="contact.php">Contact</a></li>
    </ul>
</nav>

<section>
    <h2>Contact Information</h2>
    <?php
    // Read contact information from the text file
    $contactFile = 'contacts.txt';
    if (file_exists($contactFile)) {
        $contactInfo = file($contactFile, FILE_IGNORE_NEW_LINES | FILE_SKIP_EMPTY_LINES);
        if (!empty($contactInfo)) {
            echo '<address>';
            foreach ($contactInfo as $line) {
                echo "<p>$line</p>";
            }
            echo '</address>';
        } else {
            echo '<p>Contact information not available.</p>';
        }
    } else {
        echo '<p>Contact information not available.</p>';
    }
    ?>
</section>

<footer>
    <p>&copy; 2023 Our Electronic Shop. All rights reserved.</p>
</footer>

</body>
</html>
