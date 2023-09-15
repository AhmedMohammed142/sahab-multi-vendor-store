/** @format */
// let result = document.querySelector('.result');
// let plusbtn = document.querySelector('.plus');
// let minusbtn = document.querySelector('.minus');
// let resetbtn = document.querySelector('.reset');
// let number = 0;
// let fontSize = 16;

// plusbtn.addEventListener('click', function () {
//   number++;
//   fontSize++;
//   result.innerHTML = number;
//   result.style.fontSize = fontSize + 'px';
// });

// minusbtn.addEventListener('click', function () {
//   // if (number > 0) {
//   number--;
//   fontSize--;
//   result.innerHTML = number;
//   result.style.fontSize = fontSize + 'px';
//   // }
// });

// resetbtn.addEventListener('click', function () {
//   number = 0;
//   fontSize = 16;
//   result.innerHTML = number;
//   result.style.fontSize = fontSize + 'px';
// });

$(function () {
  var number = 0;
  var fontSize = 16;

  $('.plus').click(function () {
    number++;
    fontSize++;
    $('.result').text(number);
    $('.result').css('font-size', fontSize + 'px');
  });

  $('.minus').click(function () {
    number--;
    fontSize--;
    $('.result').text(number);
    $('.result').css('font-size', fontSize + 'px');
  });

  $('.reset').click(function () {
    number = 0;
    fontSize = 16;
    $('.result').text(number);
    $('.result').css('font-size', fontSize + 'px');
  });
});
