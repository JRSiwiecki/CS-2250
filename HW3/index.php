<!-- 
    Name: Joseph Siwiecki
    Class: CS 2250.01
    Assignment: HW3 Creating and Validating Forms
-->

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>HW3</title>
    <link rel="stylesheet" href="css/styles.css">

    <!-- Fonts -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Montserrat:wght@400;700&display=swap" rel="stylesheet">
</head>

<body>

    <h1 class="title">Joseph Siwiecki</h1>

    <form action="index.php" method="post" class="form">

        <div class="input-container">
            <label for="fname" class="input-label">Enter your first name: </label>
            <input type="text" name="fname" id="fname" class="text-input" placeholder="First Name">
        </div>

        <div class="input-container">
            <label for="lname" class="input-label">Enter your last name: </label>
            <input type="text" name="lname" id="lname" class="text-input" placeholder="Last Name">
        </div>

        <div class="input-container">
            <label for="email-1" class="input-label">Enter your email: </label>
            <input type="text" name="email-1" id="email-1" class="text-input" placeholder="Email">
        </div>

        <div class="input-container">
            <label for="email-2" class="input-label">Enter your email again: </label>
            <input type="text" name="email-2" id="email-2" class="text-input" placeholder="Email">
        </div>

        <input type="submit" value="Submit" class="input-btn">

    </form>

</body>

</html>