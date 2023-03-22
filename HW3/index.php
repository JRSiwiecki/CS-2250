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

        <h1>Joseph Siwiecki</h1>

        <form action="index.php" method="post">

            <div class="input-container">
                <label for="fname">Enter your first name: </label>
                <input type="text" name="fname" id="fname">
            </div>

            <div class="input-container">
                <label for="lname">Enter your last name: </label>
                <input type="text" name="lname" id="lname">
            </div>

            <div class="input-container">
                <label for="email-1">Enter your email: </label>
                <input type="text" name="email-1" id="email-1">
            </div>

            <div class="input-container">
                <label for="email-2">Enter your email again: </label>
                <input type="text" name="email-2" id="email-2">
            </div>


            <div class="input-container">
                <input type="submit" value="Submit">
            </div>

        </form>

    </body>

</html>