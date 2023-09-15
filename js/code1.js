/** @format */

$(function () {
  // 1. All p tags that have no children, but only if they don't have a class of ignore.
  var ignore = $('p:not(.ignore):empty');
  console.log(ignore);

  // 2. Any element with the text "REPLACE_ME" in it.
  var text = $(":contains('REPLACE_ME')");
  console.log(text);

  // 3. All div tags with a child that has a class of special.
  var divTages = $('div:has(.special)');
  console.log(divTages);

  // 4. All heading elements (h1, h2, h3, h4, h5, h6).
  var headings = $('h1, h2, h3, h4, h5, h6');
  console.log(headings);

  // 5. Every other visible li.
  var visibleLi = $('ul li:visible');
  console.log(visibleLi);
});
