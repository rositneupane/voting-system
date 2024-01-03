<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>User Information Form</title>
</head>
<body>

    <h2>User Information Form</h2>

    <form action="process_form.php" method="post">
        <!-- Input field for Full Name -->
        <label for="fullname">Full Name:</label>
        <input type="text" id="fullname" name="fullname" required>
        <br>

        <!-- Textarea for About -->
        <label for="about">About:</label>
        <textarea id="about" name="about" rows="4" required></textarea>
        <br>

        <!-- Submit button -->
        <input type="submit" value="Submit">
    </form>

</body>
</html>
