function calculateValue() {
  var operand1 = parseInt(document.getElementById('operand1').value);
  var operand2 = parseInt(document.getElementById('operand2').value);
  var operator = document.getElementById('operator').value;

  var answer = 0;
  switch(operator){
    case '+':
      answer = operand1 + operand2;
      break;
    case '-':
      answer = operand1 - operand2;
      break;
    case '*':
      answer = operand1 * operand2;
      break;
    case '/':
      if(operand2 == 0)
        answer = "Divide by zero error";
      else {
        answer = operand1 / operand2;
      }
      break;
    default:
      answer = "Invalid operator (choose among +,-,*,/)"
  }

  var result = document.getElementById('result');

  result.innerText = answer;
}
