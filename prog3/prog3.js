let fontSize = 5;
let textState = "growing";
var text = document.getElementById('changing-text');

setInterval(changeText, 100);

function changeText() {
  console.log(textState == "growing");
  console.log(fontSize);

  if(textState == "growing") {
    if(fontSize > 50){
      textState = "shrinking";
    }
    else {
      text.style.fontSize = fontSize + "pt";
      text.style.color = "red";
      text.innerText = "Text Growing";
      fontSize += 1;
    }
  }

  if(textState == "shrinking") {
    if(fontSize < 5){
      textState = "growing";
    }
    else {
      text.style.fontSize = fontSize + "pt";
      text.style.color = "blue";
      text.innerText = "Text Shrinking";
      fontSize -= 1;
    }
  }

}
