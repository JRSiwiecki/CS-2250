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
            <input type="text" name="fname" id="fname" class="text-input" placeholder="First Name" required>
        </div>

        <div class="input-container">
            <label for="lname" class="input-label">Enter your last name: </label>
            <input type="text" name="lname" id="lname" class="text-input" placeholder="Last Name" required>
        </div>

        <div class="input-container">
            <label for="email-1" class="input-label">Enter your email: </label>
            <input type="text" name="email-1" id="email-1" class="text-input" placeholder="Email" required>
        </div>

        <div class="input-container">
            <label for="email-2" class="input-label">Enter your email again: </label>
            <input type="text" name="email-2" id="email-2" class="text-input" placeholder="Email" required>
        </div>

        <div class="input-container">
            <label for="password" class="input-label">Enter your password: </label>
            <input type="password" name="password" id="password" class="text-input" placeholder="Password" required>
        </div>

        <input type="button" value="Check E-mail Similarity" class="similarity-btn">

        <h3>Favorite Animal?</h3>

        <div class="input-radio-container">
            <input type="radio" name="animal-radio" id="dog-radio" value="Dog">
            <label for="dog-radio" class="radio-label">Dog</label>

            <br>

            <input type="radio" name="animal-radio" id="cat-radio" value="Cat">
            <label for="cat-radio" class="radio-label">Cat</label>

            <br>

            <input type="radio" name="animal-radio" id="tortoise-radio" value="Tortoise">
            <label for="tortoise-radio" class="radio-label">Tortoise</label>
        </div>

        <h3>Favorite Game?</h3>

        <div class="input-radio-container">
            <input type="radio" name="game-radio" id="lol-radio" value="League of Legends">
            <label for="lol-radio" class="radio-label">League of Legends</label>

            <br>

            <input type="radio" name="game-radio" id="osu-radio" value="osu!">
            <label for="osu-radio" class="radio-label">osu!</label>

            <br>

            <input type="radio" name="game-radio" id="tarkov-radio" value="Escape from Tarkov">
            <label for="tarkov-radio" class="radio-label">Escape from Tarkov</label>
        </div>

        <h3>"Languages" Used in HW3?</h3>

        <div class="input-checkbox-container">
            <input type="checkbox" name="language-checkbox" id="html-checkbox">
            <label for="html-checkbox">HTML</label>

            <br>

            <input type="checkbox" name="language-checkbox" id="css-checkbox">
            <label for="css-checkbox">CSS</label>

            <br>

            <input type="checkbox" name="language-checkbox" id="js-checkbox">
            <label for="js-checkbox">Javscript</label>

            <br>

            <input type="checkbox" name="language-checkbox" id="php-checkbox">
            <label for="php-checkbox">PHP</label>

            <br>

            <input type="checkbox" name="language-checkbox" id="rust-checkbox">
            <label for="rust-checkbox">Rust</label>
        </div>

        <h3>Favorite CS Class at CPP?</h3>

        <div class="input-container">
            <label for="cs-classes">Choose a class: </label>
            <select name="cs-classes" id="cs-classes">
                <option value="cs-1300">CS 1300 - Discrete Structures</option>
                <option value="cs-1400">CS 1400 - Intro to Programming and Problem Solving</option>
                <option value="cs-2250" selected>CS 2250 - Intro to Web Science</option>
                <option value="cs-2400">CS 2400 - Data Structures and Advanced Programming</option>
                <option value="cs-4800">CS 4800 - Software Engineering</option>
            </select>
        </div>

        <h3>Form Validation Types</h3>

        <div>
            <label for="text-area-input">Describe the disadvantages of using one or less types of form input validation:
            </label>
            <br>
            <textarea name="text-area-input" id="text-area-input" cols="60" rows="10"></textarea>
        </div>

        <button type="button" class="validate-btn">Validate Form</button>

        <br>

        <input type="submit" value="Submit" class="input-btn">

    </form>

</body>

</html>