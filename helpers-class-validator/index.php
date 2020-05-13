<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>
    <form action="send.php" method="POST">
        <div>
            <label for="first_name">First Name</label>
            <input type="text" name="firstname" required>
        </div>
        <div>
            <label for="last_name">Last Name</label>
            <input type="text" name="lastname" required>
        </div>
        <div>
            <label for="email">Email</label>
            <input type="email" name="email" required>
        </div>
        <div>
            <label for="phone">Phone</label>
            <input type="tel" name="phone">
        </div>
        <div>
            <label for="url">Url</label>
            <input type="url" name="url">
        </div>
        <div>
            <label for="subject">Subject</label>
            <input type="text" name="subject" required>
        </div>
        <div>
            <label for="message">Message</label>
            <input type="text" name="message" required>
        </div>
        <div>
            <input type="submit" value="Submit">
        </div>
    </form>
</body>

</html>