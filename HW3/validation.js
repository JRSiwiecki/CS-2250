function checkSimilarity() {
  console.log("check similarity");
}

function validate() {
  console.log("validate");
}

const similiaryBtn = document.querySelector(".similarity-btn");
similiaryBtn.addEventListener("click", checkSimilarity);

const validateBtn = document.querySelector(".validate-btn");
validateBtn.addEventListener("click", validate);
