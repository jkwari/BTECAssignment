<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Form</title>
</head>
<body>
    
<h1>Registration Form</h1>
    <form action="process.php" method="post">
        <label for="FullName">Full Name</label>
        <input type="text" name="FullName" id="fn">
        <label for="Email">Email</label>
        <input type="text" name="Email" id="email">
        <label for="Phone">Phone</label>
        <input type="text" name="Phone" id="phone">
        <input type="submit" value="Submit">
    </form>

</body>
</html>