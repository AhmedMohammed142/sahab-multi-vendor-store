/** @format */
let result = document.querySelector('.result');
let plusbtn = document.querySelector('.plus');
let minusbtn = document.querySelector('.minus');
let resetbtn = document.querySelector('.reset');
let number = 0;

plusbtn.addEventListener('click', function () {
  number++;
  result.innerHTML = number;
  result.style.fontSize = '50px';
});

minusbtn.addEventListener('click', function () {
  if (number > 0) {
    number--;
    result.innerHTML = number;
    result.style.fontSize = '40px';
  }
});

resetbtn.addEventListener('click', function () {
  result.innerHTML = 0;
  result.style.fontSize = '16px';
});
