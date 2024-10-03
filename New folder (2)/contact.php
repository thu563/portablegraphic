<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Contact Us</title>
    <link rel="stylesheet" href="styles.css">
</head>
<body>

    <?php include 'header.php'; ?>

    <section class="contact">
        <h2>Get In Touch</h2>
        <form action="contact_process.php" method="post">
            <input type="text" name="name" placeholder="Your Name" required>
            <input type="email" name="email" placeholder="Your Email" required>
            <textarea name="message" placeholder="Your Message" required></textarea>
            <button type="submit" class="cta-button">Send Message</button>
        </form>
        <div class="contact-info">
            <h3>Contact Information</h3>
            <p>Phone: (123) 456-7890</p>
            <p>Email: info@example.com</p>
            <p>Address: 123 Design St, Creativity City, CA 12345</p>
            <p>Follow us on social media!</p>
            <ul>
                <li><a href="#">Facebook</a></li>
                <li><a href="#">Instagram</a></li>
                <li><a href="#">Twitter</a></li>
            </ul>
        </div>
    </section>

    <?php include 'footer.php'; ?>

</body>
</html>
