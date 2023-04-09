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

    <?php 
        $fname = $lname = $email1 = $email2 = $password = ""; 
        
        $favorite_animal = $favorite_game = "";

        $languages_used = "~ ";

        $favorite_class = $class_code = "";

        $textarea_answer = "";

        $text_inputs_valid = false;
        $radio_inputs_valid_1 = false;
        $radio_inputs_valid_2 = false;
        $checkbox_inputs_valid = false;
        $textarea_input_valid = false;
    ?>

    <form action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]); ?>" method="post" class="form">

        <div class="input-container">
            <label for="fname" class="input-label">Enter your first name: </label>
            <input type="text" name="fname" id="fname" class="text-input" placeholder="First Name"
                value="<?php echo isset($_POST["fname"]) ? htmlspecialchars($_POST["fname"]) : ""; ?>" required>
        </div>

        <div class="input-container">
            <label for="lname" class="input-label">Enter your last name: </label>
            <input type="text" name="lname" id="lname" class="text-input" placeholder="Last Name"
                value="<?php echo isset($_POST["lname"]) ? htmlspecialchars($_POST["lname"]) : ""; ?>" required>
        </div>

        <div class="input-container">
            <label for="email-1" class="input-label">Enter your email: </label>
            <input type="email" name="email-1" id="email-1" class="text-input" placeholder="Email"
                value="<?php echo isset($_POST["email-1"]) ? htmlspecialchars($_POST["email-1"]) : ""; ?>" required>
        </div>

        <div class="input-container">
            <label for="email-2" class="input-label">Enter your email again: </label>
            <input type="email" name="email-2" id="email-2" class="text-input" placeholder="Email"
                value="<?php echo isset($_POST["email-2"]) ? htmlspecialchars($_POST["email-2"]) : ""; ?>" required>
        </div>

        <div class="input-container">
            <label for="password" class="input-label">Enter your password: </label>
            <input type="password" name="password" id="password" class="text-input" placeholder="Password"
                value="<?php echo isset($_POST["password"]) ? htmlspecialchars($_POST["password"]) : ""; ?>" required>
        </div>

        <?php 

        // special cleaning function 
        function clean_input($data) {
            $data = trim($data);
            $data = stripslashes($data);
            $data = htmlspecialchars($data);
            return $data;
        }

        if ($_SERVER["REQUEST_METHOD"] == "POST") {

            if (isset($_POST["fname"])) {
                $fname = clean_input($_POST["fname"]);
            } 

            if (isset($_POST["lname"])) {
                $lname = clean_input($_POST["lname"]);
            } 

            if (isset($_POST["email-1"])) {
                $email1 = clean_input($_POST["email-1"]);
            } 

            if (isset($_POST["email-2"])) {
                $email2 = clean_input($_POST["email-2"]);
            } 

            if (isset($_POST["password"])) {
                $password = clean_input($_POST["password"]);
            }    

            if (empty($fname) || empty($lname) || empty($email1) || empty($email2) || empty($password)) {
                echo "<h4>Not all text inputs are complete!</h4>";
            } else if ($email1 !== $email2) {
                echo "<h4>The emails are not the same!</h4>";
            } else {
                $text_inputs_valid = true;
            }
        } 
        
        ?>

        <input type="button" value="Check E-mail Similarity" class="similarity-btn">

        <h3>Favorite Animal?</h3>

        <div class="input-radio-container">
            <input type="radio" name="animal-radio" id="dog-radio" value="Dog"
                <?php if(isset($_POST["animal-radio"]) && $_POST["animal-radio"] == "Dog") {echo "checked";} ?>>
            <label for="dog-radio" class="radio-label">Dog</label>

            <br>

            <input type="radio" name="animal-radio" id="cat-radio" value="Cat"
                <?php if(isset($_POST["animal-radio"]) && $_POST["animal-radio"] == "Cat") {echo "checked";} ?>>
            <label for="cat-radio" class="radio-label">Cat</label>

            <br>

            <input type="radio" name="animal-radio" id="tortoise-radio" value="Tortoise"
                <?php if(isset($_POST["animal-radio"]) && $_POST["animal-radio"] == "Tortoise") {echo "checked";} ?>>
            <label for="tortoise-radio" class="radio-label">Tortoise</label>
        </div>

        <?php 
            if ($_SERVER["REQUEST_METHOD"] == "POST")
            {
                if (!isset($_POST["animal-radio"])) {
                    echo "<h4>One option must be checked!</h4>";
                } else {
                    $favorite_animal = $_POST["animal-radio"];
                    $radio_inputs_valid_1 = true;
                }
            }
            
        ?>

        <h3>Favorite Game?</h3>

        <div class="input-radio-container">
            <input type="radio" name="game-radio" id="lol-radio" value="League of Legends"
                <?php if(isset($_POST["game-radio"]) && $_POST["game-radio"] == "League of Legends") {echo "checked";} ?>>
            <label for="lol-radio" class="radio-label">League of Legends</label>

            <br>

            <input type="radio" name="game-radio" id="osu-radio" value="osu!"
                <?php if(isset($_POST["game-radio"]) && $_POST["game-radio"] == "osu!") {echo "checked";} ?>>
            <label for="osu-radio" class="radio-label">osu!</label>

            <br>

            <input type="radio" name="game-radio" id="tarkov-radio" value="Escape from Tarkov"
                <?php if(isset($_POST["game-radio"]) && $_POST["game-radio"] == "Escape from Tarkov") {echo "checked";} ?>>
            <label for="tarkov-radio" class="radio-label">Escape from Tarkov</label>
        </div>

        <?php 
            if ($_SERVER["REQUEST_METHOD"] == "POST")
            {
                if (!isset($_POST["game-radio"])) {
                    echo "<h4>One option must be checked!</h4>";
                } else {
                    $favorite_game = $_POST["game-radio"];
                    $radio_inputs_valid_2 = true;
                }
            }
            
        ?>

        <h3>"Languages" Used in HW3?</h3>

        <div class="input-checkbox-container">
            <input type="checkbox" name="html-checkbox" id="html-checkbox"
                <?php if (isset($_POST["html-checkbox"])) echo " checked"; ?>>
            <label for="html-checkbox">HTML</label>

            <br>

            <input type="checkbox" name="css-checkbox" id="css-checkbox"
                <?php if (isset($_POST["css-checkbox"])) echo " checked"; ?>>
            <label for="css-checkbox">CSS</label>

            <br>

            <input type="checkbox" name="js-checkbox" id="js-checkbox"
                <?php if (isset($_POST["js-checkbox"])) echo " checked"; ?>>
            <label for="js-checkbox">Javscript</label>

            <br>

            <input type="checkbox" name="php-checkbox" id="php-checkbox"
                <?php if (isset($_POST["php-checkbox"])) echo " checked"; ?>>
            <label for="php-checkbox">PHP</label>

            <br>

            <input type="checkbox" name="rust-checkbox" id="rust-checkbox"
                <?php if (isset($_POST["rust-checkbox"])) echo " checked"; ?>>
            <label for="rust-checkbox">Rust</label>
        </div>

        <?php 
            if ($_SERVER["REQUEST_METHOD"] == "POST")
            {
                // it seems like either i do this or i try to use arrays and i would just rather 
                // not use arrays for this
                if (isset($_POST["html-checkbox"]) || 
                    isset($_POST["css-checkbox"]) || 
                    isset($_POST["js-checkbox"]) ||
                    isset($_POST["php-checkbox"]) ||
                    isset($_POST["rust-checkbox"])) {
                        $checkbox_inputs_valid = true;
                } else {
                    echo "<h4>At least one option must be checked!</h4>";
                }

                // this is also gross
                if (isset($_POST["html-checkbox"])) {
                    $languages_used .= " HTML ~";
                } 
                
                if (isset($_POST["css-checkbox"])) {
                    $languages_used .= " CSS ~";
                } 
                
                if (isset($_POST["js-checkbox"])) {
                    $languages_used .= " Javascript ~";
                } 
                
                if (isset($_POST["php-checkbox"])) {
                    $languages_used .= " PHP ~";
                } 
                
                if (isset($_POST["rust-checkbox"])) {
                    $languages_used .= " Rust ~";
                }
            }
        ?>

        <h3>Favorite CS Class at CPP?</h3>

        <!-- I could not figure out a way to have one option be selected by default
            while also repopulating the form later when the form is posted, so I
            gave up on trying that because my attempt at a solution was becoming too
            complex, and I figured it just defaults to the first option anyway. -->
        <div class="input-container">
            <label for="cs-classes">Choose a class: </label>
            <select name="cs-classes" id="cs-classes">
                <option value="cs-1300" <?php if ($class_code === "cs-1300") echo "selected"; ?>>CS 1300 - Discrete
                    Structures</option>
                <option value="cs-1400" <?php if ($class_code === "cs-1400") echo "selected"; ?>>CS 1400 - Intro to
                    Programming and Problem Solving</option>
                <option value="cs-2250" <?php if ($class_code === "cs-2250") echo "selected"; ?>>CS 2250 -
                    Intro to Web
                    Science</option>
                <option value="cs-2400" <?php if ($class_code === "cs-2400") echo "selected"; ?>>CS 2400 - Data
                    Structures and Advanced Programming</option>
                <option value="cs-4800" <?php if ($class_code === "cs-4800") echo "selected"; ?>>CS 4800 - Software
                    Engineering</option>
            </select>
        </div>

        <?php

            if ($_SERVER["REQUEST_METHOD"] == "POST"){

                $class_code = $_POST["cs-classes"];

                if ($class_code === "cs-1300") {
                    $class_code = "cs-1300";
                    $favorite_class = "CS 1300 - Discrete Structures";
                } else if ($class_code === "cs-1400") {
                    $class_code = "cs-1400";
                    $favorite_class = "CS 1400 - Intro to Programming and Problem Solving";
                } else if ($class_code === "cs-2250") {
                    $class_code = "cs-2250";
                    $favorite_class = "CS 2250 - Intro to Web Science";
                } else if ($class_code === "cs-2400") {
                    $class_code = "cs-2400";
                    $favorite_class = "CS 2400 - Data Structures and Advanced Programming";
                } else if ($class_code === "cs-4800") {
                    $class_code = "cs-4800";
                    $favorite_class = "CS 4800 - Software Engineering";
                } else {
                    $class_code = "cs-2250";
                    $favorite_class = "CS 2250 - Intro to Web Science";
                }
            } 
        ?>

        <h3>Form Validation Types</h3>

        <div>
            <label for="text-area-input">Describe the disadvantages of using one or less types of form input validation:
            </label>
            <br>
            <textarea name="text-area-input" id="text-area-input" cols="60" placeholder="Enter response here..."
                rows="10"><?php echo isset($_POST["text-area-input"]) ? htmlspecialchars($_POST["text-area-input"]) : ""; ?></textarea>
        </div>

        <?php 
        
        if ($_SERVER["REQUEST_METHOD"] == "POST")
            {
                if (isset($_POST["text-area-input"]) && !empty($_POST["text-area-input"])) {
                    $textarea_input_valid = true;
                    $textarea_answer = $_POST["text-area-input"];
                } else {
                    echo "<h4>Type your response into the text area!</h4>";
                }
            }

        ?>

        <button type="button" class="validate-btn">Validate Form</button>

        <br>

        <input type="submit" value="Submit" class="input-btn">

        <?php 

            if ($text_inputs_valid && $radio_inputs_valid_1 && $radio_inputs_valid_2 &&
                $checkbox_inputs_valid && $textarea_input_valid) {
                    echo "<p><strong>First Name: </strong>" . $fname . "</p>";
                    echo "<p><strong>Last Name: </strong>" . $lname . "</p>";
                    echo "<p><strong>Email: </strong>" . $email2 . "</p>";
                    echo "<p><strong>Password: </strong>" . $password . "</p>";
                    echo "<p><strong>Favorite Animal: </strong>" . $favorite_animal . "</p>";
                    echo "<p><strong>Favorite Game: </strong>" . $favorite_game . "</p>";
                    echo "<p><strong>Favorite Class: </strong>" . $favorite_class . "</p>";
                    echo "<p><strong>Languages Used: </strong>" . $languages_used . "</p>";
                    echo "<p><strong>Form Validation Thoughts: </strong>" . $textarea_answer . "</p>";
            }

        ?>

    </form>

    <script src="validation.js"></script>

</body>

</html>