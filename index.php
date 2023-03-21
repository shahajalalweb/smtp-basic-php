<!DOCTYPE html>
<html>

<head>
    <title>Form Submit</title>
    <link rel="stylesheet" href="style.css">
</head>

<body>
    <div class="form-container">
        <h1>Contact Us</h1>
        <form action="php-mail.php" method="post">
            <div class="form-group">
                <label for="name">Name</label>
                <input type="text" id="name" name="name" placeholder="Enter your name" required>
            </div>
            <div class="form-group">
                <label for="email">Email</label>
                <input type="email" id="email" name="email" placeholder="Enter your email" required>
            </div>
            <div class="form-group">
                <label for="message">Message</label>
                <textarea id="message" name="message" placeholder="Enter your message" required></textarea>
            </div>
            <button class="button-sub" type="submit">Send Message</button>
        </form>
    </div>
</body>

</html>