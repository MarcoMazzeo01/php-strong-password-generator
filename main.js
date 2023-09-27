const pwRangeBar = document.querySelector("#psw_length");
const lengthDisplay = document.querySelector("#selectedLength");

lengthDisplay.textContent = pwRangeBar.value;

pwRangeBar.addEventListener("input", (event) => {
  lengthDisplay.textContent = event.target.value;
});
