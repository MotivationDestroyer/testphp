let countSelectedText = document.createElement("div");

function countTrain1() {
  const h3s = document.querySelectorAll(".workout-element-lowblock > h3");
  const h3sId = document.getElementById("workout-element-1");
  if (h3sId.style.border == "2px solid red") {
    h3sId.style.border = "1px solid var(--dark, #2b3541)";
  } else {
    h3sId.style.border = "2px solid red";
  }
  countSelectedText.append(" " + h3s[0].textContent);
}

function countTrain2() {
  const h3s = document.querySelectorAll(".workout-element-lowblock > h3");
  const h3sId = document.getElementById("workout-element-2");
  if (h3sId.style.border == "2px solid red") {
    h3sId.style.border = "1px solid var(--dark, #2b3541)";
  } else {
    h3sId.style.border = "2px solid red";
  }
  countSelectedText.append(" " + h3s[1].textContent);
}

function countTrain3() {
  const h3s = document.querySelectorAll(".workout-element-lowblock > h3");
  const h3sId = document.getElementById("workout-element-3");
  if (h3sId.style.border == "2px solid red") {
    h3sId.style.border = "1px solid var(--dark, #2b3541)";
  } else {
    h3sId.style.border = "2px solid red";
  }
  countSelectedText.append(" " + h3s[2].textContent);
}

function countTrain4() {
  const h3s = document.querySelectorAll(".workout-element-lowblock > h3");
  const h3sId = document.getElementById("workout-element-4");
  if (h3sId.style.border == "2px solid red") {
    h3sId.style.border = "1px solid var(--dark, #2b3541)";
  } else {
    h3sId.style.border = "2px solid red";
  }
  countSelectedText.append(" " + h3s[3].textContent);
}

function countTrain5() {
  const h3s = document.querySelectorAll(".workout-element-lowblock > h3");
  const h3sId = document.getElementById("workout-element-5");
  if (h3sId.style.border == "2px solid red") {
    h3sId.style.border = "1px solid var(--dark, #2b3541)";
  } else {
    h3sId.style.border = "2px solid red";
  }
  countSelectedText.append(" " + h3s[4].textContent);
}

function countTrain6() {
  const h3s = document.querySelectorAll(".workout-element-lowblock > h3");
  const h3sId = document.getElementById("workout-element-6");
  if (h3sId.style.border == "2px solid red") {
    h3sId.style.border = "1px solid var(--dark, #2b3541)";
  } else {
    h3sId.style.border = "2px solid red";
  }
  countSelectedText.append(" " + h3s[5].textContent);
}

function countTrain7() {
  const h3s = document.querySelectorAll(".card-content > span");
  countSelectedText.append(" " + h3s[1].textContent);
}

function countTrain8() {
  const h3s = document.querySelectorAll(".card-content > span");
  countSelectedText.append(" " + h3s[3].textContent);
}

function countTrain9() {
  const h3s = document.querySelectorAll(".card-content > span");
  countSelectedText.append(" " + h3s[5].textContent);
}
