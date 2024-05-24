let numberToGuess = Math.floor(Math.random() * 20) + 1;
let attempts = 0;

document.getElementById("submit").addEventListener("click", checkGuess);

function checkGuess() {
  let guess = document.getElementById("guess").value;
  attempts++;

  if (guess < numberToGuess) {
    document.getElementById("resultado").innerHTML = "el numero a adivinar es mayor.";
  } else if (guess > numberToGuess) {
    document.getElementById("resultado").innerHTML = "el numero a adivinar es menor.";
  } else {
    document.getElementById("resultado").innerHTML = `Adivinaste el numero en ${attempts} intentos.`;
    document.getElementById("submit").disabled = true;
  }
}