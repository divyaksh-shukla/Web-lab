var parameter = document.getElementById('input-parameter');
var result = document.getElementById('result');
var answer = 0;
var vowel = 'z';

function executeParameter() {
  if(isNaN(parameter.value)) {
    var str = parameter.value;
    answer = 0;
    var flag = 0;

    for (let i = 0; i < str.length; i++) {
      switch(str.charAt(i)) {
        case 'a':
        case 'e':
        case 'i':
        case 'o':
        case 'u':
          answer = i+1;
          vowel = str.charAt(i);
          flag = 1;
          break;
      }
      if(flag == 1){
        break;
      }
    }

    if(answer == 0) {
      answer = "Vowel is not present";
    }
    else {
      answer = "Vowel \'" + vowel + "\' at position:" + answer;
    }
  }

  else {
    answer = parameter.value.toString().split("");
    answer = answer.reverse();
    answer = answer.join("");
  }

  result.innerText = answer;
}
