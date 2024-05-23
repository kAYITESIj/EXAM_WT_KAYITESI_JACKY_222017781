<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Contact Us</title>
    <link rel="stylesheet" href="styles.css">
</head>
<body>
 <li><a href="index.php">home</a></li>
<div class="contact-section">
    <h2>Contact Us</h2>
    <div class="contact-form">
        <form action="contact.php" method="post">
            <div class="form-group">
                <input type="text" id="name" name="name" placeholder="Your Name" required>
            </div>
            <div class="form-group">
                <input type="email" id="email" name="email" placeholder="Your Email" required>
            </div>
            <div class="form-group">
                <textarea id="message" name="message" placeholder="Your Message" rows="4" required></textarea>
            </div>
            <div class="form-group">
                <input type="submit" value="Send Message">
            </div>
        </form>
    </div>
</div>

</body>
</html>
<style>
    body {
    font-family: Arial, sans-serif;
    margin: 0;
    padding: 0;
    background-color: #f2f2f2;
}

.contact-section {
    background-color: #fff;
    padding: 40px;
    border-radius: 8px;
    box-shadow: 0px 0px 10px rgba(0, 0, 0, 0.1);
    margin: 50px auto;
    max-width: 600px;
}

.contact-section h2 {
    color: #333;
    margin-bottom: 20px;
    text-align: center;
}

.contact-form {
    background-color: #f9f9f9;
    padding: 30px;
    border-radius: 8px;
    border: 1px solid #ddd;
}

.form-group {
    margin-bottom: 20px;
}

.form-group input[type="text"],
.form-group input[type="email"],
.form-group textarea {
    width: 100%;
    padding: 12px;
    border: 1px solid #ddd;
    border-radius: 5px;
    font-size: 16px;
    color: #555;
    transition: border-color 0.3s ease;
}

.form-group input[type="text"]:focus,
.form-group input[type="email"]:focus,
.form-group textarea:focus {
    outline: none;
    border-color: #4CAF50;
}

.form-group textarea {
    resize: none;
}

.form-group input[type="submit"] {
    background-color: #4CAF50;
    color: #fff;
    border: none;
    padding: 15px 20px;
    cursor: pointer;
    border-radius: 5px;
    font-size: 18px;
    transition: background-color 0.3s ease;
}

.form-group input[type="submit"]:hover {
    background-color: #45a049;
}

</style>