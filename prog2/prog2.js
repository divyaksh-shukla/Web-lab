var values = document.getElementById('table-values');

for (let i = 0; i < 11; i++) {
  let square_value = i * i;
  let cube_value = square_value * i;

  values.innerHTML += "<tr><td>" + i + "</td><td>" + square_value + "</td><td>" + cube_value + "</td></tr>"
}
