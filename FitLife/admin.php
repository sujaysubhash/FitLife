<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Messaging</title>
</head>
<body>
    <h2>Send Message</h2>
    <div>
        <form action="process.php"  method="POST">
            <label for="message">New Message:</label>
            <textarea name="msg" id="msg" rows="4" cols="50" required></textarea>
            <input type="submit" value="Send Message">
        </form>
    </div>

</body>
</html>