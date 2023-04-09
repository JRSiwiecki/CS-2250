// grab all textInputs
const textInputs = document.querySelectorAll(".text-input");

// grab check similarity button
const similiaryBtn = document.querySelector(".similarity-btn");

// grab animal radio inputs
const animalRadios = document.querySelectorAll("input[name='animal-radio'");

// grab game radio inputs
const gameRadios = document.querySelectorAll("input[name='game-radio'");

// grab checkboxes
const languageBoxes = document.querySelectorAll("input[type='checkbox'");

// grab dropdown menu
const classDropdown = document.querySelector("#cs-classes");

// grab text area
const textAreaInput = document.querySelector("#text-area-input");

// grab validate form button
const validateBtn = document.querySelector(".validate-btn");

// checks if both email inputs are the same
function checkSimilarity() {
  // email inputs are the 2nd and 3rd text inputs
  const emailText1 = textInputs[2].value;
  const emailText2 = textInputs[3].value;

  if (emailText1.length == 0 || emailText2.length == 0) {
    alert("Please make sure you enter your email twice.");
  } else if (emailText1 === emailText2) {
    alert("The emails are the same!");
  } else {
    alert("The emails are not the same!");
  }
}

/*
    Checks if:
    1. Every text input has a value
    2. At least one radio input has been selected per set
    3. At least one checkbox has been selected
    4. The text area has a value
    
    If any condition is not met, then we alert the user
    to which field has not been completed.

    Otherwise, we let them know the form is valid.
*/
function validateForm() {
  let alertString = "The following input fields must be completed:\n";

  // check text inputs
  let valid = true;
  let currentTextInput = "";

  for (let i = 0; i < textInputs.length; i++) {
    currentTextInput = textInputs[i].value;

    if (currentTextInput.length == 0) {
      valid = false;
      alertString += "\tText Input " + (i + 1) + "\n";
    }
  }

  // check first set of radio buttons
  let animalRadioIsSet = false;

  for (let i = 0; i < animalRadios.length; i++) {
    currentAnimalRadio = animalRadios[i].checked;

    if (currentAnimalRadio) {
      animalRadioIsSet = true;
      break;
    }
  }

  if (!animalRadioIsSet) {
    valid = false;
    alertString += "\tRadio Input Set 1\n";
  }

  // check second set of radio buttons
  // this is probably a lazy copy and paste but what if
  // the client wants us to add more radio buttons!!!
  let gameRadioIsSet = false;
  for (let i = 0; i < gameRadios.length; i++) {
    currentGameRadio = gameRadios[i].checked;

    if (currentGameRadio) {
      gameRadioIsSet = true;
      break;
    }
  }

  if (!gameRadioIsSet) {
    valid = false;
    alertString += "\tRadio Input Set 2\n";
  }

  // check checkboxes

  let languagesBoxIsSet = false;
  for (let i = 0; i < languageBoxes.length; i++) {
    currentLanguageBox = languageBoxes[i].checked;

    if (currentLanguageBox) {
      languagesBoxIsSet = true;
      break;
    }
  }

  if (!languagesBoxIsSet) {
    valid = false;
    alertString += "\tCheckbox Input Set 1\n";
  }

  // don't need to check class dropdown because we set a default option

  // check if text area has input
  if (textAreaInput.value.length == 0) {
    valid = false;
    alertString += "\tText Area Input\n";
  }

  if (!valid) {
    alert(alertString);
  } else {
    alert("Form is valid and ready to be submitted!");
  }
}

// add event listeners for both buttons
similiaryBtn.addEventListener("click", checkSimilarity);
validateBtn.addEventListener("click", validateForm);
